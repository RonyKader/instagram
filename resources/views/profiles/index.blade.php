@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-5">
            <img src="{{ asset('svg/w3zones-logo.svg') }}" alt="" class="w-100">
        </div>

        {{-- Main Header Secion with logo and info --}}
        <div class="col-md-9 p-5">
            <div class="d-flex">
                <div><h2 class="pr-5">{{ $user->username }}</h2></div>
                <div><a href="" class="btn btn-sm btn-primary">Follow</a></div>
            </div>

            <div class="d-flex">
                <div><strong>125</strong> posts</div>
                <div><strong>125</strong> followers</div>
                <div><strong>125</strong> following</div>
            </div>

            <div class="pt-2 d-flex justify-content-between">
                <strong>{{ $user->profile->title }}</strong>
                <a href="{{ route('posts.create') }}" class="">add new post</a>
            </div>
            <div class="pt-1 pr-4"><p>{{ $user->profile->description }}</p></div>
            <div><a href="{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>

        </div>

    </div>

    <div class="row">
        <div class="col-md-12 mb-3">
            <header class="text-center"><h3>Posts</h3></header>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/1.png') }}" alt="" class="w-100 mb-4">
        </div>
        
        <div class="col-md-4">
            <img src="{{ asset('images/2.png') }}" alt="" class="w-100 mb-4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/3.png') }}" alt="" class="w-100 mb-4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/4.png') }}" alt="" class="w-100 mb-4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/5.png') }}" alt="" class="w-100 mb-4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/6.png') }}" alt="" class="w-100 mb-4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/4.png') }}" alt="" class="w-100 mb-4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/8.png') }}" alt="" class="w-100 mb-4">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/9.png') }}" alt="" class="w-100 mb-4">
        </div>
    </div>
</div>
@endsection
