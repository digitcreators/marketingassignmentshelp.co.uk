@extends('email.layouts.layout')

@section('content')

    <p>You have successfully paid the payment {{ addCurrency($invoice->amount) }} .</p>
    <p>Sign in to your account to check the order status </p>
    <button style="background: #C8102E; padding: 10px 24px; font-size: 15px;"><a style="color: white" href="{{ route('login') }}">
            {{ __('Login') }}</a></button>

    <p>Best Regards</p>
    <p>Customer Support,</p>
    <p>{{ config('app.name') }}</p>

@endsection
