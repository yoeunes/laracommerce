@extends('layouts.app')

@section('title', 'Home')

@section('banner')
    @include('partials.main._slider')
@endsection

@section('content')

    <!-- Banner 1 -->
    @include('partials.main._banner1')

    <!-- New Product -->
    @include('partials.main._newproduct')

    <!-- Banner2 -->
    @include('partials.main._banner2')

    <!-- Blog -->
    @include('partials.main._blog')

    <!-- Shipping -->
    @include('partials.main._shipping')

@endsection