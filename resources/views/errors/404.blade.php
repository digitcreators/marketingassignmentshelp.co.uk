@extends('layouts.web')

@section('title', 'Woops! 404 Not Found')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')


    <section class="container mx-auto my-4 px-4 py-5">
        <div class="container mx-auto ">

            <img class="mx-auto img-fluid" src="{{ asset('imgs/404.webp') }}" alt="Not Found" width="700" height="319">

            <div class="text-center  space-y-2 text-xl md:text-3xl">
                <div class="py-2"><strong>This page got lost in conversation</strong></div>
            </div>
            <div class="text-center py-5 mt-2">
                <a href="{{ route('home') }}" class="order-link mb-4">Back To Home</a>
            </div>
        </div>
    </section>

@endsection
