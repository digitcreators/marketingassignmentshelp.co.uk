@extends('layouts.web')
@section('title', 'Marketing Assignments Help UK Sitemap - Navigate Our Services')
@section('description', 'Navigate Marketing Assignments Help UK with ease. Our sitemap helps you quickly find the services and pages you need for a smooth and efficient user experience.')
@section('canonical', config('app.app_url') . Request::path())

@section('content')
    <section class="container mx-auto py-5">
        <h1 class="text-4xl pt-5">Sitemap</h1>
    </section>
    <section class="container mx-auto py-5">
        <div class="bg-gradient-flip dark:bg-gradient-flip-one rounded">
            <h2 class="text-white text-2xl font-semibold p-4 text-center sm:text-left">
                Our Company
            </h2>
        </div>

        <div class="mx-2 my-4">
            <ul class="my-6 grid grid-cols-1 lg:grid-cols-4 text-center sm:text-left gap-3 sitemap-ul">
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('reviews') }}">
                        Reviews
                    </a>
                </li>
                <li>
                    <a href="{{ route('order') }}">
                        Order Now
                    </a>
                </li>
                <li>
                    <a href="{{ route('sitemap') }}">
                        Sitemap
                    </a>
                </li>
            </ul>
        </div>

        <div class="bg-gradient-flip dark:bg-gradient-flip-one rounded">
            <h2 class="text-white text-2xl font-semibold p-4 text-center sm:text-left">
                Our Legal Policies
            </h2>
        </div>

        <div class="mx-2 my-4">
            <ul class="my-6 grid grid-cols-1 lg:grid-cols-4 text-center sm:text-left gap-3 sitemap-ul">
                <li>
                    <a href="{{ route('privacy') }}">
                        Privacy Policy
                    </a>
                </li>
                <li>
                    <a href="{{ route('terms') }}">
                        Terms & Conditions
                    </a>
                </li>
            </ul>
        </div>
    </section>

@endsection
