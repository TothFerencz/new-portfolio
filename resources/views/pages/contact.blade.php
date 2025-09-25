@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Reach out to Ferencz Toth to discuss new web development projects, collaborations, or consulting opportunities.')
@section('meta_keywords', 'contact Ferencz Toth, hire full stack developer, web development inquiry, Laravel consulting')
@section('canonical_url', url('/contact'))
@section('meta_image', asset('storage/header.png'))

@push('structured-data')
    @php
        $contactSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'name' => 'Contact Ferencz Toth',
            'url' => url('/contact'),
            'description' => 'Contact page for Ferencz Toth, full-stack web developer specialising in Laravel and Vue.',
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($contactSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('content')
    @include('sections.contact-form')
@endsection
