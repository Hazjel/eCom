@extends('layouts.minimal')

@section('title')
    User Dashboard
@endsection

@section('content')
    <h1 class="capitalize">ini dashboard user</h1>

    @if (session('success'))
        <p class="capitalize text-xl">{{ (session('success')) }}</p>
    @endif
@endsection
