@extends('layouts.web')
@section('keyword', 'MBA Personal Statement')
@section('title', 'Top-Rated MBA Personal Statement Writing Service in UK')
@section('description',
    'Flourish in your academic life with our best MBA personal statement writing service in UK. Get
    a perfect statement that presents you as the best candidate.')
@section('canonical', config('app.app_url') . Request::path())
@section('heroImage', '')

@section('content')
    {{-- Header --}}
    <section class="homepage-background bg-gray-800 py-12">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-12 lg:px-0 px-5 py-10 lg:gap-4 items-center">
                <!-- Left Column -->
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-bold">
                        Secure Your Spot with <span class="text-primary">Our Leading MBA Personal Statement Help in UK</span>
                    </h1>
                    <p class="py-5">
                        For over 18 years, MBAassignmentshelp.co.uk has guided applicants toward success. Our MBA personal
                        statement writing service connects 300+ expert writers who have supported 50,000+ applications with
                        impactful, tailored personal statements that highlight strengths and secure admissions.
                    </p>
                    <div class="grid grid-cols-2 mb-4">
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src=" {{ asset('img/no-plag.png') }}"
                                    alt="100% Original and Human Written" title="100% Original and Human Written"
                                    width="14" height="14" loading="eager" decoding="async" fetchpriority="high">
                                100% Original and Human Written
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/confi.png') }}"
                                    alt="Your Privacy Stays Protected" title="Your Privacy Stays Protected" width="14"
                                    height="14" loading="eager" decoding="async" fetchpriority="high">
                                Your Privacy Stays Protected
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/trans-pricing.svg') }}"
                                    alt="No Surprise Costs" title="No Surprise Costs" width="14" height="14"
                                    loading="eager" decoding="async" fetchpriority="high">
                                No Surprise Costs
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/on-time.png') }}"
                                    alt="Prompt Delivery" title="Prompt Delivery" width="14" height="14"
                                    loading="eager" decoding="async" fetchpriority="high">
                                Prompt Delivery
                            </span>
                        </div>
                    </div>
                    <div class="personal-cta lg:flex md:flex lg:justify-start grid justify-center gap-4 py-3">
                        <a href="{{ route('order') }}" class="btn-order bg-primary">
                            <div class="icon flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                                    <path
                                        d="M197.8 100.3C208.7 107.9 211.3 122.9 203.7 133.7L147.7 213.7C143.6 219.5 137.2 223.2 130.1 223.8C123 224.4 116 222 111 217L71 177C61.7 167.6 61.7 152.4 71 143C80.3 133.6 95.6 133.7 105 143L124.8 162.8L164.4 106.2C172 95.3 187 92.7 197.8 100.3zM197.8 260.3C208.7 267.9 211.3 282.9 203.7 293.7L147.7 373.7C143.6 379.5 137.2 383.2 130.1 383.8C123 384.4 116 382 111 377L71 337C61.6 327.6 61.6 312.4 71 303.1C80.4 293.8 95.6 293.7 104.9 303.1L124.7 322.9L164.3 266.3C171.9 255.4 186.9 252.8 197.7 260.4zM288 160C288 142.3 302.3 128 320 128L544 128C561.7 128 576 142.3 576 160C576 177.7 561.7 192 544 192L320 192C302.3 192 288 177.7 288 160zM288 320C288 302.3 302.3 288 320 288L544 288C561.7 288 576 302.3 576 320C576 337.7 561.7 352 544 352L320 352C302.3 352 288 337.7 288 320zM224 480C224 462.3 238.3 448 256 448L544 448C561.7 448 576 462.3 576 480C576 497.7 561.7 512 544 512L256 512C238.3 512 224 497.7 224 480zM128 440C150.1 440 168 457.9 168 480C168 502.1 150.1 520 128 520C105.9 520 88 502.1 88 480C88 457.9 105.9 440 128 440z" />
                                </svg>
                            </div>
                            <span>Do My MBA Personal Statement!</span>
                        </a>
                        <a href="javascript:void(Tawk_API.toggle())" class="btn-chat bg-secondary-one margin-auto">
                            <span>Chat Now</span>
                            <div class="icon icon-round flex items-center justify-center">
                                <img class="chat-img" src="{{ asset('img/headphones-icon.webp') }}" alt="Headphones" title="Headphones" />
                            </div>
                        </a>
                    </div>
                    <div class="flex items-end gap-2 mt-4">
                        <img src="{{ asset('img/online-writers.webp')}}"
                            alt="Online Writers" title="Online Writers" width="147" height="38" loading="eager"
                            decoding="async" fetchpriority="high">
                        <span>300+ writers online</span>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 mt-4 lg:mt-0">
                    <img class="ml-auto" src="{{ asset('img/heroGirls.webp') }}" width="412" height="376"
                        alt="Professional MBA Assignment Help UK" title="Professional MBA Assignment Help UK" />
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    @include('partials.frontend.calculator')
    <!-- Feature End -->

    <section class="relative z-0 bg-theme procedure-sec py-10 px-5">
        <div class="container mx-auto">
            <!-- text div -->
            <div class="space-y-5 text-center">
                <h2 class="text-4xl font-semibold ">
                    The Perks of Choosing <span class="span-header"> Our MBA Assignment Writing Help UK</span>
                    </h3>
            </div>
            @include('partials.frontend.perks')
        </div>
    </section>

    <!-- Writers Start -->
    <section class="professional-experts py-8">
        <div class="container mx-auto px-5 lg:px-0">
            <div class="text-center mx-auto pb-3">
                <h3 class="text-4xl font-semibold py-5">
                    Meet the Minds <span class="span-header"> Behind High-Scoring MBA Assignments</span>
                </h3>
                <p class="mt-3">
                    Take a look at the profiles of some of our talented writers who craft well-done assignments.
                </p>
            </div>
            @include('partials.frontend.writers-1')
        </div>
    </section>
    <!-- Writers End -->

    

    {{-- Process --}}
    <section class="relative z-0 procedure-sec py-10 px-5">
        <div class="container mx-auto">
            <!-- text div -->
            <div class="space-y-5 text-center">
                <h3 class="text-4xl font-semibold ">
                    Your Journey to <span class="span-header">Perfect Paper in 4 Easy Steps
                </h3>
                <p class=" mt-3">
                    Say goodbye to assignment stress! Just follow these four simple steps and get top-notch papers delivered
                    right on schedule.
                </p>
            </div>
            <div class="swiper process-slider mt-5 lg:px-0 px-5">
                <!-- Process 1 - Bootstrap Brain Component -->
                <div class="swiper-wrapper py-8">
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/online-registration.png') }}" class="shadow" width="64"
                                    height="64" alt="Register Your Order" title="Register Your Order">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">01</span>
                                        <p class="font-semibold shadow text-primary">
                                            Place Your Order </p>
                                    </div>
                                    <p class="detail text-sm">
                                        Provide your assignment details on the order form, including the topic, deadline,
                                        word count, and any other specific instructions you would like us to follow.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/online-registration.png') }}" class="shadow" width="64"
                                    height="64" alt="Register Your Order" title="Register Your Order">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">02</span>
                                        <p class="font-semibold shadow text-primary">
                                            Get Your Quote
                                        </p>
                                    </div>
                                    <p class="detail text-sm">
                                        Get an estimate for your work and don't miss out on our special discounts and
                                        offers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/online-registration.png') }}" class="shadow" width="64"
                                    height="64" alt="Register Your Order" title="Register Your Order">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">03</span>
                                        <p class="font-semibold shadow text-primary">
                                            Transfer Payment
                                        </p>
                                    </div>
                                    <p class="detail text-sm">
                                        We ensure safe and secure payment methods, such as debit and credit cards, in order
                                        to protect you from online fraud.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/online-registration.png') }}" class="shadow" width="64"
                                    height="64" alt="Register Your Order" title="Register Your Order">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">04</span>
                                        <p class="font-semibold shadow text-primary">
                                            Receive Your Work
                                        </p>
                                    </div>
                                    <p class="detail text-sm">
                                        Sit back while we craft your paper and deliver 100% original and AI-free work before
                                        the deadline.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demos mt-2 ">
                    <div class="process-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- Pricing --}}
    <section class="relative z-0 bg-theme procedure-sec py-10 px-5">
        <div class="container mx-auto">
            <!-- text div -->
            <div class="space-y-5 text-center">
                <h2 class="text-4xl font-semibold ">
                    <span class="span-header">Quick MBA Project Help in UK </span> without Cutting Corners
                    </h3>
                    <p class=" mt-3">
                        We bring business knowledge, through research and sharp insights, to your assignments at the most
                        minimal price.
                    </p>
            </div>
            @include('partials.frontend.pricing')

        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-3">
        <img src="{{ asset('img/hat.webp') }}" class="image1 hide-on-mobile" width="150" height="107"
            title="Hat" alt="Hat">
        <img src="{{ asset('img/books.webp') }}" class="image2 hide-on-mobile" width="200" height="157"
            title="Books" alt="Books">
        <div class="container mx-auto py-10 lg:px-0 px-5">
            <div class="grid grid-cols-1 items-center justify-center">
                <div class="text-center w-full">
                    <h2 class="lg:text-4xl text-3xl text-white">
                        Make Your MBA Personal Statement the Key to Admission
                    </h2>
                    <p class="py-5 text-white px-5">
                        Hire our pro writers to get your MBA personal statement in UK written, describing your potential,
                        motivations and career aspirations using powerful words.
                    </p>
                    <div class="lg:flex md:flex grid justify-center gap-4 pt-3">
                        <a href="{{ route('order') }}" class="btn-order bg-primary">
                            <div class="icon flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                    viewBox="0 0 640 640">
                                    <path
                                        d="M197.8 100.3C208.7 107.9 211.3 122.9 203.7 133.7L147.7 213.7C143.6 219.5 137.2 223.2 130.1 223.8C123 224.4 116 222 111 217L71 177C61.7 167.6 61.7 152.4 71 143C80.3 133.6 95.6 133.7 105 143L124.8 162.8L164.4 106.2C172 95.3 187 92.7 197.8 100.3zM197.8 260.3C208.7 267.9 211.3 282.9 203.7 293.7L147.7 373.7C143.6 379.5 137.2 383.2 130.1 383.8C123 384.4 116 382 111 377L71 337C61.6 327.6 61.6 312.4 71 303.1C80.4 293.8 95.6 293.7 104.9 303.1L124.7 322.9L164.3 266.3C171.9 255.4 186.9 252.8 197.7 260.4zM288 160C288 142.3 302.3 128 320 128L544 128C561.7 128 576 142.3 576 160C576 177.7 561.7 192 544 192L320 192C302.3 192 288 177.7 288 160zM288 320C288 302.3 302.3 288 320 288L544 288C561.7 288 576 302.3 576 320C576 337.7 561.7 352 544 352L320 352C302.3 352 288 337.7 288 320zM224 480C224 462.3 238.3 448 256 448L544 448C561.7 448 576 462.3 576 480C576 497.7 561.7 512 544 512L256 512C238.3 512 224 497.7 224 480zM128 440C150.1 440 168 457.9 168 480C168 502.1 150.1 520 128 520C105.9 520 88 502.1 88 480C88 457.9 105.9 440 128 440z" />
                                </svg>
                            </div>
                            <span>Order Now</span>
                        </a>
                        <a href="javascript:void(Tawk_API.toggle())" class="btn-chat bg-secondary-one">
                            <span>Chat Now</span>
                            <div class="icon icon-round flex items-center justify-center">
                                <img class="chat-img" src="{{ asset('img/headphones-icon.webp') }}" alt="Headphones" title="Headphones" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->

    <!-- Four paragrapgh -->
    <section class="four-sec px-5 py-10">
        <div class="lg:px-10 px-2">
            <div class="text-center mx-auto pb-3">
                <h2 class="text-4xl font-semibold py-5 px-5">
                    Tell Your Story, Your Way – <span class="span-header">MBA Personal Statement Help in UK</span>
                </h2>
                <p>
                    Get an authentic and well-structured personal statement that makes the admission panel say ‘yes’.
                </p>
            </div>
            <div class="con-main mt-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Impress the Admission Committee with Our MBA Personal Statement Writing Help in UK
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Writing about yourself is never as easy as it seems. That’s why we are here to craft a
                                personal statement that truly highlights your unique qualities, shaped by your experiences,
                                strengths, and aspirations. Our team takes the time to understand your background, skills,
                                and future goals in depth. By gathering detailed information about you, we ensure that your
                                statement is both genuine and compelling. With our MBA personal statement writing help in
                                UK, every student receives a fully customized statement tailored to their ambitions. Each
                                word is carefully chosen to reflect your individuality and to align with your academic and
                                career goals.
                            </p>
                            <p class="text-base py-3">
                                Whether you are seeking a scholarship, admission to a business school, or a job, we will
                                tailor the content to match your tone and vision so that it appears as if you wrote it. At
                                Marketing Assignments Help UK, all work is done by human writers who do not use AI-generated
                                content or templates to complete your tasks. Our team of experienced writers knows how to
                                help you stand out from the crowd without using complex vocabulary. Moreover, we offer a
                                range of valuable services, including proofreading, editing, formatting, plagiarism checks,
                                and online consultations.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Expert MBA Personal Statement Help in the UK That Makes First Impressions Count
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                An MBA personal statement is not only about your qualifications and academic excellence, but
                                also goes beyond that. Admission officers also look for your qualities, motivations, and
                                career aspirations. So, you need to tell your story in the most striking way that makes them
                                stop and remember your name. This is your opportunity to impress the admissions panel, and
                                this is why MBA Assignments Help is here, actually. What sets our MBA Personal Statement
                                Assistance apart? We listen to you and do not just depend on templates and generic work.
                                Instead, craft eye-catching statements focusing on your unique experiences, talents and the
                                motivation behind why you want to pursue an MBA.
                            </p>
                            <p class="text-base py-3">
                                Each statement is customised according to the requirements of the universities you are
                                targeting. Our MBA personal statement writing help is all about making the process simple
                                and hassle-free. You want a well-written essay, but you also want it to be aligned with the
                                program you have selected for your application. Whether you are applying in London,
                                Manchester, or any other city, we will help you make a strong and impressive statement.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            MBA Personal Statement Writing Experts in London Ready to Shape Your Success
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Your statement reveals your purpose and shows why you're motivated. But come on, cramming
                                all that into 1,000 words or less? It’s not that easy. Many MBA applicants don't know how to
                                tell their unique journey in the right words. But no need to worry anymore. Your personal
                                statement is your opportunity to address the panel directly, and we are here to make sure
                                they hear you. MBAAssignmentsHelp stands out among all other personal statement writing
                                services because we possess the expertise and insider knowledge that no other platform can
                                offer.
                            </p>
                            <p class="text-base py-3">
                                Moreover, we are opposed to using templates or generic content. Our MBA personal statement
                                writers draw on your unique experiences, both short-term and long-term career goals, as well
                                as the motivation behind seeking an MBA education. From this, we prepare a statement that
                                not only confirms your qualifications but also demonstrates why you are a strong candidate
                                for the MBA program. Have scattered ideas? These will be translated into a coherent yet
                                concise personal statement to support an MBA application. So don't wait and get in touch
                                with us now!
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Top-Quality MBA Personal Statement Writing Services London: Helping You Impress Admissions
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Admissions officers are not interested in buzzwords or recycled clichés. They want
                                uniqueness and personality to be reflected in your statements. The way our MBA personal
                                statement helpers approach your work sets us apart. We ask you the right questions: What
                                inspired you to follow this path? How do the program's offerings fit with your objectives?
                                Discovering those solutions enables you to produce a statement that is genuine and not
                                robotic. The more we know about you, the better we can draft a personal statement that is
                                powerful and personal.
                            </p>
                            <p class="text-base py-3">
                                Furthermore, we understand that admissions committees seek individuals who are passionate,
                                rather than only achievers. We do that so your statement captures not only your
                                accomplishments but also your ideas and values. Besides, we ensure that the whole procedure
                                is hassle-free. No need to fill long, complicated forms; everything is simple and easy on
                                our platform. In addition to personal statements, we also assist students with
                                <a class="sparkle-awd" href="{{ route('mba-essay') }}">MBA essays</a>
                                and <a class="sparkle-awd" href="{{ route('mba-dissertation') }}">MBA dissertations</a>.
                                Let's refine your statement to make it distinctive and present an
                                ambitious person who is set to achieve their goals.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Four paragrapgh -->

    {{-- Subjects --}}
    <section class="subject-section-area">
        <div class="container mx-auto py-5 lg:px-0 px-5">
            <div class=" text-center">
                <h2 class="text-4xl font-semibold ">
                    <span class="span-header">Dynamic MBA Assignment Support</span> to Help You Master Every Subject
                    </h3>
            </div>
            @include('partials.frontend.subjects')
        </div>
    </section>

    <!-- Testimonial Start -->
    <section class="testimonials bg-theme py-8">
        @include('partials.frontend.testimonial-1')
    </section>
    <!-- Testimonial End -->


    <!-- FAQ -->
    <section class="faqs px-2 md:px-12 lg:px-20 mx-auto py-8">
        <div class="container mx-auto px-3">
            <h3 class="lg:text-4xl text-3xl text-uppercase text-center py-5">
                Student FAQs – <span class="span-header"> Fast and Clear Solutions</span>
            </h3>

            <div class="grid lg:grid-cols-12 md:grid-cols-1 grid-cols-1 items-center">
                <div class="lg:col-span-6 text-center">
                    <img src="{{ asset('img/faqGirls.webp') }}" class="img-fluid mx-auto hide-on-mobile"
                        alt="Frequently Asked Questions" title="Frequently Asked Questions" width="450"
                        height="641">
                </div>
                <div class="lg:col-span-6 faq-box rounded-xl space-y-2 py-5 px-3 my-2">
                    <!-- FAQ 1 -->
                    <div class="content faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold active" data-no="1">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    What is an MBA personal statement?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1">
                            An MBA statement is an essay that defines your worth beyond your academic grades. It mentions
                            your background, strengths, career aspirations, accomplishments and why you want to pursue MBA
                            qualifications. This helps the admission panel to judge you based on your personality and
                            potential, as well as what makes you a suitable candidate for the program.
                        </p>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="content faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="2">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How do you ensure the originality and plagiarism-free content in my MBA personal
                                    statement?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide2">
                            Yes, our personal statements are guaranteed to be 100% original and free from plagiarism. Our
                            platform features real writers who craft content from scratch. They do not use AI tools or
                            plagiarise from other sources. Additionally, each paper is checked using reliable tools, such as
                            Turnitin, to ensure originality.
                        </p>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="content faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="3">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How long should an MBA personal statement typically be?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide3">
                            It is usually 500-1000 words long, depending on your university requirements.
                        </p>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="content faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="4">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you offer editing services for an existing MBA personal statement?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide4">
                            Yes, we can edit or proofread your existing MBA personal statement. To ensure your statement is
                            polished and professional, our team meticulously examines grammar, structure, format, and tone
                            to ensure it meets the highest standards of quality.
                        </p>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="content faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="5">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Can you customise my MBA personal statement for different universities?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide5">
                            Yes, we can customise your MBA personal statement for different universities showcasing your
                            talents, experiences and goals accordingly to match their program values and requirements.
                        </p>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="content faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="6">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    What details or documents must I provide before writing begins?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide6">
                            You need to provide information such as your academic background, achievements, career goals,
                            and the program or job for which you are applying.
                        </p>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="content faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="7">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    What experience do your writers have with MBA admissions requirements?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide7">
                            Our professional writers in the UK have years of experience in the field and consistently
                            deliver top-notch personal statements to impress the admissions committee. They always compose
                            high-quality work and have satisfied many MBA students, helping them excel in their careers.
                        </p>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="content faq-internal-styling" data-no="8">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="8">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Can I request revisions to my MBA Personal Statement if I’m not satisfied?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide8">
                            Yes, you can request as many revisions as you want after receiving your personal statement until
                            you're satisfied with your work. You won't have to pay any extra money for that. Your
                            satisfaction is our top priority.
                        </p>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="content faq-internal-styling" data-no="9">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="9">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you use British English and UK formatting standards in MBA personal statements?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide9">
                            All of our MBA personal statements for UK candidates are written in British English and adhere
                            to correct UK formatting standards. This guarantees that your application is accurate,
                            professional, and prepared according to the demands of British universities.
                        </p>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="content faq-internal-styling" data-no="10">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="10">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How much does it cost to get an MBA statement written?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide10">
                            Well, it depends on factors such as length, complexity, and deadline. However, we offer cheap
                            packages to suit all needs and budgets.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->

    <!-- CTA Section -->
    <section class="relative
                        cta-form lg:p-5 p-3">
        <div class="rounded-lg lg:py-0 py-8 ">
            <div class="grid lg:grid-cols-12 items-center">
                <div class="lg:col-span-4 hide-on-mobile ">
                    <div class="">
                        <div class="circle-lines"></div>
                        <img src="{{ asset('img/ctaMan.webp') }}" class="ctaGirl image mx-auto" width="350"
                            height="350" title="CTA" alt="CTA" loading="lazy">
                    </div>
                </div>
                <div class="lg:col-span-8 lg:px-10 px-5">
                    <h2 class="lg:text-3xl text-3xl text-white lg:text-left text-center pb-3">
                        Shape Your Experiences into a Winning Personal Statement
                    </h2>
                    <p class="py-4 text-white ">
                        Want your MBA personal statement to stand out for all the right reasons? You are in the right spot
                        then. We create exceptional content to make your application unforgettable.
                    </p>
                    @include('partials.frontend.form')
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
@endsection
