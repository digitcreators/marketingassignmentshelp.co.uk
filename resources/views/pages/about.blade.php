@extends('layouts.web')
@section('title', 'About Us – Marketing Assignments Help UK')
@section('description', 'Learn more about our expert team offering Marketing Assignments Help UK. Dedicated to delivering quality academic support tailored to your needs.')
@section('canonical', config('app.app_url') . Request::path())
@section('schema-script')

<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "@yield('title', '')",
    "url": "@yield('canonical')",
    "logo": "https://marketingassignmentshelp.co.uk/public/img/logo-header.webp",
    "sameAs": [
        "https://www.facebook.com/marketingassignmentshelpuk/",
        "https://www.instagram.com/marketingassignmentshelpuk/"
    ]
    }
</script>

@endsection

@section('content')
    <section class="container mx-auto">
        <div class="mx-4 my-4">
            <div class="mx-auto  max-w-2xl lg:max-w-4xl  xl:max-w-6xl pb-6">
                <h1 class="text-4xl py-5 text-center">About Us
                </h1>
                <p class="my-4">
                    Marketing Assignments Help UK is a genuine platform that you won’t regret choosing. Every student at our platform
                    seek professional assistance since we have a team of expert writers who offer various assignment
                    services, including dissertation help, essay writing help, and homework writing help.
                </p>

                <p class="my-4 ">
                    Furthermore, our team of writers are qualified with PhD degrees in many different subjects and hold
                    great expertise in them, such as Accounting assignments, Business assignments, and Programming
                    assignments.
                </p>
                <p class="my-4 ">
                    Our services are fully online-based so we are available everywhere. Whether you are living in London,
                    Manchester, or Buckingham our services are available to all regions. Our assignment writers are not only
                    genuine but also dedicated and hardworking who are keen help you in every step. 
                </p>
            </div>
        </div>
    </section>
@endsection
