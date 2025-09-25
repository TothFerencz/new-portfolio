<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'currency',
        'currency_symbol',
        'billing_period',
        'description',
        'features',
        'cta_label',
        'cta_url',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'float',
        'features' => 'array',
        'is_featured' => 'boolean',
    ];

    public function scopeOrdered($query)
    {
        return $query->orderByDesc('is_featured')->orderBy('sort_order');
    }

    public function getFormattedPriceAttribute(): string
    {
        $price = $this->price ?? 0.0;
        $symbol = $this->currency_symbol ?: '$';
        $precision = fmod($price, 1.0) === 0.0 ? 0 : 2;

        return sprintf('%s%s', $symbol, number_format($price, $precision));
    }

    public function getPriceWithPeriodAttribute(): string
    {
        if (blank($this->billing_period)) {
            return $this->formatted_price;
        }

        return sprintf('%s / %s', $this->formatted_price, $this->billing_period);
    }
}
