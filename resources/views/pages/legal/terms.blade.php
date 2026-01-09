@extends('layouts.web')
@section('title', 'Marketing Assignments Help UK Terms and Conditions')
@section('description',
    'Read the terms and conditions of Marketing Assignments Help UK to know your rights, duties, and how our services work to boost your professional presence.')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

    <section class="py-5 container mx-auto" style="min-height:250px">
        <div class="px-5 lg:px-0">
            <div class="py-5">
                <h1 class="text-4xl pb-3">Terms and Conditions</h1>
                <p class="">
                    This is to inform all our respectable customers that we offer all kinds of Essays, term papers,
                    dissertation, and thesis help. So, before you opt to take any service from us, please ensure to fulfill
                    the following requirements:
                </p>
            </div>
            <div class="pb-3">
                <ul style="list-style-type: disc;" class="ml-7 mx-4">
                    <li class="my-2">
                        <p>Make sure that all the payment is done in advance, you have complete freedom to review our
                            website, check our sample, and trust us fully before placing the order.</p>
                    </li>
                    <li class="my-2">
                        <p>It is requested that while sharing assignment information, students should keep in mind that they
                            are sharing all the details to complete the assignment. </p>
                    </li>
                    <li class="my-2">
                        <p>In case of cancellation, the order must be canceled within 24 hours of booking in the urgent
                            assignment, there is no cancellation and refund.</p>
                    </li>
                    <li class="my-2">
                        <p>We follow a selected payment procedure, so please corporate with us and we guarantee that it is
                            highly secure and there is not any fraud </p>
                    </li>
                </ul>

            </div>
        </div>
    </section>

@endsection
