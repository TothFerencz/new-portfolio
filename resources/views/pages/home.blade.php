@extends('layouts.app')

@section('title', 'Home')
@section('meta_description', 'Ferencz Toth is a full-stack developer delivering modern, scalable Laravel and Vue applications that help businesses grow.')
@section('meta_keywords', 'Ferencz Toth, full stack developer, Laravel, Vue, Tailwind CSS, web applications, software engineer')
@section('meta_image', asset('storage/header.png'))

@push('structured-data')
    @php
        $personSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => 'Ferencz Toth',
            'url' => url('/'),
            'jobTitle' => 'Full-Stack Developer',
            'description' => 'Full-stack developer specialising in Laravel, Vue, and Tailwind CSS web applications.',
            'knowsAbout' => ['Laravel', 'Vue', 'Tailwind CSS', 'API development', 'UI engineering'],
            'worksFor' => [
                [
                    '@type' => 'Organization',
                    'name' => 'Ferencz Toth Studio'
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($personSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
    @include('sections.header')
    @include('sections.text')
    @include('sections.priority')
    @include('sections.portfolio')
    @include('sections.price', ['plans' => $pricingPlans ?? collect()])
    @include('sections.about')
@endsection
