@extends('layouts.minimal')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    <h1 class="capitalize">ini dashboard admin</h1>

    @if (session('success'))
        <p class="capitalize text-xl">{{  }}
    @endif
@endsection
