@extends('layouts.app')

@section('title', 'Toth Ferencz ')

@section('content')
    @include('sections.header')
    @include('sections.text')
    @include('sections.priority')
    @include('sections.portfolio')
    @include('sections.price')
    @include('sections.about')
@endsection
