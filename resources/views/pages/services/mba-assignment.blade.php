@extends('layouts.web')
@section('keyword', 'Write My MBA Assignment')
@section('title', 'Write My MBA Assignment | Reliable Academic Support in UK')
@section('description',
    'Get top grades with our Write My MBA Assignment Service in UK. Our expert writers compose
    assignments with strong research and a professional touch.')
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
                        <span class="text-primary">Write My MBA Assignment</span> to Improve Business Knowledge
                    </h1>
                    <p class="py-5">
                        MBAassignmentshelp.co.uk has been empowering MBA students for over 18 years, thanks to a strong team
                        of 300+ academic specialists who provide original writing, on-time work, and ongoing support. We
                        have successfully delivered more than 50,000 high-scoring papers.
                    </p>
                    <div class="grid grid-cols-2 mb-4">
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src=" {{ asset('img/no-plag.png') }}"
                                    alt="100% Unique and Human-Crafted" title="100% Unique and Human-Crafted" width="14"
                                    height="14" loading="eager" decoding="async" fetchpriority="high">
                                100% Unique and Human-Crafted
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
                                    alt="Zero Hidden Fees" title="Zero Hidden Fees" width="14" height="14"
                                    loading="eager" decoding="async" fetchpriority="high">
                                Zero Hidden Fees
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/on-time.png') }}"
                                    alt="Punctual Delivery" title="Punctual Delivery" width="14" height="14"
                                    loading="eager" decoding="async" fetchpriority="high">
                                Punctual Delivery
                            </span>
                        </div>
                    </div>
                    <div class="mba-cta lg:flex md:flex lg:justify-start grid justify-center gap-4 py-3">
                        <a href="{{ route('order') }}" class="btn-order bg-primary">
                            <div class="icon flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                                    <path
                                        d="M197.8 100.3C208.7 107.9 211.3 122.9 203.7 133.7L147.7 213.7C143.6 219.5 137.2 223.2 130.1 223.8C123 224.4 116 222 111 217L71 177C61.7 167.6 61.7 152.4 71 143C80.3 133.6 95.6 133.7 105 143L124.8 162.8L164.4 106.2C172 95.3 187 92.7 197.8 100.3zM197.8 260.3C208.7 267.9 211.3 282.9 203.7 293.7L147.7 373.7C143.6 379.5 137.2 383.2 130.1 383.8C123 384.4 116 382 111 377L71 337C61.6 327.6 61.6 312.4 71 303.1C80.4 293.8 95.6 293.7 104.9 303.1L124.7 322.9L164.3 266.3C171.9 255.4 186.9 252.8 197.7 260.4zM288 160C288 142.3 302.3 128 320 128L544 128C561.7 128 576 142.3 576 160C576 177.7 561.7 192 544 192L320 192C302.3 192 288 177.7 288 160zM288 320C288 302.3 302.3 288 320 288L544 288C561.7 288 576 302.3 576 320C576 337.7 561.7 352 544 352L320 352C302.3 352 288 337.7 288 320zM224 480C224 462.3 238.3 448 256 448L544 448C561.7 448 576 462.3 576 480C576 497.7 561.7 512 544 512L256 512C238.3 512 224 497.7 224 480zM128 440C150.1 440 168 457.9 168 480C168 502.1 150.1 520 128 520C105.9 520 88 502.1 88 480C88 457.9 105.9 440 128 440z" />
                                </svg>
                            </div>
                            <span>Hire Your MBA Writer Now!</span>
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
                        Crack Your MBA Assignments with Confidence
                    </h2>
                    <p class="py-5 text-white px-5">
                        Get your assignments done professionally, reflecting research depth and academic soundness, to save
                        your grades.
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
                    <span class="span-header">Write MBA Assignment UK</a> with Our Smarter Solutions for Busy Students
                </h2>
                <p>
                    Buried under assignment worry? No problem! We provide content that meets academic standards.
                </p>
            </div>
            <div class="con-main mt-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Thrive in Your Business Career Through Our ‘Write My MBA Assignment’ UK Service
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Finding genuine assignment writers these days is not really easy. People often fail to
                                deliver quality work and may even scam you. This may waste your precious time as well as
                                money and ultimately lead to poor academic performance and grades. With so many writing
                                services available, it is also challenging to identify the trusted ones. However, this is
                                not the case with us. Marketing Assignments Help UK is a highly reliable platform that you can
                                trust without a single doubt. We have assembled a team of professional writers who are
                                subject-oriented and possess extensive experience in the academic writing industry.
                            </p>
                            <p class="text-base py-3">
                                Now you don't have to look here and there, wasting time to complete your MBA assignments.
                                Our qualified experts are here to lend a helping hand to you, regardless of your domain,
                                including marketing, entrepreneurship, human resources, finance, operations management, or
                                any other field. We are not just writers but here to calm your academic anxieties. We listen
                                to you carefully to understand your concerns and problems. Just trust us, as your assignment
                                is in safe hands with us.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Write My MBA Assignment Online - Help is Just One Click Away
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                All you have to do is share your assignment brief with us properly, and we will match you
                                with the right expert to do your task. By providing us with all the details and requirements
                                of your assignment, it will be easier for our writers to work on it and meet all the
                                academic guidelines of your university. In addition to that, MBA Assignments Help have
                                specialists available for various academic tasks, so you can also come to us for
                                <a class="sparkle-awd" href="{{ route('mba-essay') }}">MBA essays</a>
                                and <a class="sparkle-awd" href="{{ route('mba-personal') }}">personal statements</a>.
                            </p>
                            <p class="text-base py-3">
                                Moreover, our writers are familiar with different academic styles and they understand all
                                the stresses students go through, such as deadlines and a number of assignments due. This is
                                the reason we are here to lighten your workload and become your true academic partners. We
                                are here to relieve you all of the worries and become a proper support for you in times of
                                need. Students across the UK, including those living in Bristol, Birmingham, and Liverpool,
                                have been using our services for many years, and they say that our services have actually
                                helped them improve their academic scores.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Write My MBA Assignment in UK and Watch Your Worries Disappear
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Every student faces a unique challenge when completing their assignments. Some may have
                                difficulty in researching properly and finding credible sources, while others may have
                                problems with organising their ideas in the correct structure. And some may not possess good
                                writing skills to articulate their thoughts and ideas effectively. In such cases, students
                                often end up getting bad grades. But with MBA Assignments Help, you need not worry about all
                                these things at all.
                            </p>
                            <p class="text-base py-3">
                                We have a versatile team of writers who can handle all your writing and research needs and
                                cover a wide range of academic requirements. When you come to us and ask us to ‘Write MBA
                                Assignment for me,’ you get authentic and tailored assignment solutions from us. We always
                                assign someone who is familiar with the intricacies of your specific domain, ensuring that
                                your work is always accurate and relevant. Just provide us with your MBA assignment
                                specifications, including your subject, topic and deadline and other instructions you would
                                like us to follow. The more information you provide us, the better we can write for you.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Write My MBA Assignment Cheap and Still Get High-Quality Work
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                When you request us to write your MBA assignment, the first thought that may linger in your
                                mind is ‘whether the service is going to keep my details private?’ We completely understand,
                                as it is a genuine concern on your part. But you don't have to worry about that with
                                MBAAssignmentsHelp. Confidentiality is our top priority, and we always abide by it. You can
                                come to us without any hesitation and get your work done in complete secrecy. We don't share
                                anything related to you or your assignment with any outsiders.
                            </p>
                            <p class="text-base py-3">
                                Furthermore, apart from privacy, when it comes to pricing, our platform offers the most
                                reasonable services. You will receive finely crafted, accurately researched and
                                well-formatted work at relatively cheap rates. There will be no copying and pasting, no
                                AI-generated content, or any other shortcuts. Just human-written work by our seasoned
                                experts. Thinking about whether we will meet deadlines? Of course we do. And that we don't
                                have to promise, since you will see that with every order. On top of that, you get free
                                revisions, as many times as you need them.
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
                    <div class="content faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold active" data-no="1">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    What types of MBA assignments do you handle (case studies, reports, essays, etc.)?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1">
                            We help with a comprehensive range of MBA assignments in the UK, such as case studies,
                            dissertations, essays, business reports, research papers, and presentations.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="2">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Are your MBA assignment writers qualified in business and management studies?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide2">
                            Our MBA assignment writers in the UK are qualified with advanced degrees in business and
                            management studies from top institutes, and they have years of experience in assignment writing.
                            They ensure that every assignment is well-written, insightful, and accurate.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="3">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you provide MBA assignment writing help for UK universities?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide3">
                            We have skilled writers who create plagiarism-free MBA assignments backed by deep research. They
                            strictly adhere to the academic guidelines of UK universities and are familiar with the
                            formatting, structures, and citation styles used in these institutions. They also offer multiple
                            revisions for your complete satisfaction.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="4">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Can I communicate directly with the writer handling my MBA assignment?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide4">
                            Yes, of course, you can communicate directly with the writer handling your MBA assignment via
                            chat. Our responsive team is available to guide you 24/7, so feel free to reach out to us at any
                            time of the day or night.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="5">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you provide editing and proofreading services for MBA assignments?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide5">
                            Yes, we provide editing and proofreading services for MBA assignments to make sure your work is
                            free from all flaws, such as grammar, spelling, formatting, structure and referencing.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="6">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How much does it cost to have you write my MBA assignment?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide6">
                            Well, it depends on the deadline, subject complexity and word count. However, we offer
                            student-friendly packages to fit your budget and needs.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="7">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you offer discounts for multiple MBA assignment orders?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide7">
                            Yes, we offer discounts and special offers for multiple MBA assignment orders. The more
                            assignments you book on our website, the more money you can save.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="8">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="8">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How do you handle revisions if I’m not satisfied with the assignment?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide8">
                            In case you are unsatisfied with our work, you can ask for free unlimited revisions. Our writers
                            welcome your feedback and strive to meet the needs of all students.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="9">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="9">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Is your service suitable for international MBA students studying in the UK?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide9">
                            Yes, our service is suitable for international MBA students studying in the UK. We understand
                            the challenges students face, such as writing in British English and meeting the expectations of
                            UK universities. Our goal is to help you overcome these difficulties and provide assignments
                            that are professional and aligned with the guidelines and academic standards.
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
                        Turn Your MBA Struggles into Academic Victories
                    </h2>
                    <p class="py-4 text-white ">
                        Are you drowning in assignment stress? Hire our MBA specialists today who can rescue you from
                        deadlines and help you earn the top grades that you deserve.
                    </p>
                    @include('partials.frontend.form')
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
@endsection
