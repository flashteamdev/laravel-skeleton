@extends('layouts.app')

@section('title', 'Welcome to Laravel Skeleton - Premium Starter Kit')
@section('meta_description',
  'The ultimate Laravel starter kit for building robust, scalable web applications with
  ease.')

@section('content')
  {{-- Hero Section --}}
  <x-hero />

  {{-- Features Section --}}
  <x-features />

  {{-- Call to Action Section --}}
  <x-cta />

  {{-- Testimonials Section --}}
  <x-testimonials :testimonials="$testimonials" />
@endsection
