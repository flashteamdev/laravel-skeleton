@extends('layouts.app')



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
