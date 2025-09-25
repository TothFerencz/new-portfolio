@extends('layouts.app')

@php
    $isProjectView = isset($project);
    $pageTitle = $isProjectView ? $project->title : 'Projects';
    $pageDescription = $isProjectView
        ? ($project->short_description ?: 'Case study: ' . $project->title)
        : 'Browse selected full-stack development projects delivered by Ferencz Toth.';
    $pageImage = $isProjectView ? asset('storage/' . $project->first_image) : asset('storage/header.png');
    $pageUrl = $isProjectView ? route('portfolio.show', $project->slug) : url()->current();
    $schemaType = $isProjectView ? 'article' : 'website';
@endphp

@section('title', $pageTitle)
@section('meta_description', $pageDescription)
@section('meta_keywords', $isProjectView ? $project->category . ', ' . $project->title . ', web development case study' : 'web development projects, Ferencz Toth portfolio, case studies, full stack developer')
@section('meta_image', $pageImage)
@section('canonical_url', $pageUrl)
@section('meta_type', $schemaType)

@push('structured-data')
    @if ($isProjectView)
        @php
            $projectSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'CreativeWork',
                'name' => $project->title,
                'url' => route('portfolio.show', $project->slug),
                'description' => $project->short_description ?: $pageDescription,
                'dateCreated' => optional($project->created_at)->toDateString(),
                'inLanguage' => 'hu',
                'genre' => $project->category,
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($projectSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @else
        @php
            $collectionSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'CollectionPage',
                'name' => 'Projects by Ferencz Toth',
                'url' => url()->current(),
                'description' => $pageDescription,
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($collectionSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
@endpush

@section('content')
    @include('sections.work')
@endsection
