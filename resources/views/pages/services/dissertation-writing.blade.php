@extends('layouts.web')
@section('keyword', 'MBA Dissertation Help in UK')
@section('title', 'Expert MBA Dissertation Help in UK for Academic Succes')
@section('description',
    'Turn your dissertation from a headache into a proud achievement. Let our MBA Dissertation Help
    in UK guide you with well-researched and human-written work.')
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
                        Your Go-To Choice for <span class="text-primary">MBA Dissertation Help in UK for A+ Results
                        </span>
                    </h1>
                    <p class="py-5">
                        For over 18 years, MBAassignmentshelp.co.uk has been supporting MBA students with their
                        dissertations. Our team of 300+ qualified writers has completed more than 50,000 projects, offering
                        professional MBA dissertation help in UK to assist students in producing research that earns top
                        grades.
                    </p>
                    <div class="grid grid-cols-2 mb-4">
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src=" {{ asset('img/no-plag.png') }}" alt="Zero Plagiarism" title="Zero Plagiarism"
                                    width="14" height="14" loading="eager" decoding="async" fetchpriority="high">
                                Zero Plagiarism and AI-free Work
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/confi.png') }}" alt="Complete Privacy Guaranteed"
                                    title="Complete Privacy Guaranteed" width="14" height="14" loading="eager"
                                    decoding="async" fetchpriority="high">
                                Complete Privacy Guaranteed
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/trans-pricing.svg') }}" alt="No Surprise Charges"
                                    title="No Surprise Charges" width="14" height="14" loading="eager" decoding="async"
                                    fetchpriority="high">
                                No Surprise Charges
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/on-time.png') }}" alt="Always on Time"
                                    title="Always on Time" width="14" height="14" loading="eager"
                                    decoding="async" fetchpriority="high">
                                Always on Time
                            </span>
                        </div>
                    </div>
                    <div class="first-cta lg:flex md:flex lg:justify-start grid justify-center gap-4 py-3">
                        <a href="{{ route('order') }}" class="btn-order bg-primary">
                            <div class="icon flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                                    <path
                                        d="M197.8 100.3C208.7 107.9 211.3 122.9 203.7 133.7L147.7 213.7C143.6 219.5 137.2 223.2 130.1 223.8C123 224.4 116 222 111 217L71 177C61.7 167.6 61.7 152.4 71 143C80.3 133.6 95.6 133.7 105 143L124.8 162.8L164.4 106.2C172 95.3 187 92.7 197.8 100.3zM197.8 260.3C208.7 267.9 211.3 282.9 203.7 293.7L147.7 373.7C143.6 379.5 137.2 383.2 130.1 383.8C123 384.4 116 382 111 377L71 337C61.6 327.6 61.6 312.4 71 303.1C80.4 293.8 95.6 293.7 104.9 303.1L124.7 322.9L164.3 266.3C171.9 255.4 186.9 252.8 197.7 260.4zM288 160C288 142.3 302.3 128 320 128L544 128C561.7 128 576 142.3 576 160C576 177.7 561.7 192 544 192L320 192C302.3 192 288 177.7 288 160zM288 320C288 302.3 302.3 288 320 288L544 288C561.7 288 576 302.3 576 320C576 337.7 561.7 352 544 352L320 352C302.3 352 288 337.7 288 320zM224 480C224 462.3 238.3 448 256 448L544 448C561.7 448 576 462.3 576 480C576 497.7 561.7 512 544 512L256 512C238.3 512 224 497.7 224 480zM128 440C150.1 440 168 457.9 168 480C168 502.1 150.1 520 128 520C105.9 520 88 502.1 88 480C88 457.9 105.9 440 128 440z" />
                                </svg>
                            </div>
                            <span>Write My MBA Dissertation!</span>
                        </a>
                        <a href="javascript:void(Tawk_API.toggle())" class="btn-chat bg-secondary-one margin-auto">
                            <span>Chat Now</span>
                            <div class="icon icon-round flex items-center justify-center">
                                <img class="chat-img" src="{{ asset('img/headphones-icon.webp') }}" alt="Headphones"
                                    title="Headphones" />
                            </div>
                        </a>
                    </div>
                    <div class="flex items-end gap-2 mt-4">
                        <img src="{{ asset('img/online-writers.webp') }}" alt="Online Writers" title="Online Writers"
                            width="147" height="38" loading="eager" decoding="async" fetchpriority="high">
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
                        MBA Dissertations in Manchester Done Right – Because Your Future Deserves the Best
                    </h2>
                    <p class="py-5 text-white px-5">
                        Tired of endless reading and research? We will help you shape your ideas into a refined document
                        reflecting your knowledge and ambition.
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
                                <img class="chat-img" src="{{ asset('img/headphones-icon.webp') }}" alt="Headphones"
                                    title="Headphones" />
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
            <div class="con-main mt-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            MBA Dissertation Help Service UK That Makes Professors Remember Your Work
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                When you are writing a dissertation, it is not only about filling pages with content and
                                meeting the word count, but your paper should reflect business insights and your
                                understanding of the concepts. However, we can understand that it is not so easily
                                manageable with all the workload you may have while pursuing your MBA qualifications. If you
                                are finding it challenging, then stop worrying about it anymore and turn to MBA Assignments
                                Help UK today.
                            </p>
                            <p class="text-base py-3">
                                Our MBA Dissertation Writing Service in UK is a reliable choice for students who are having
                                difficulties in composing their papers. We will help you conduct research, organise and
                                structure your ideas, and write them down in the most perfect way that would definitely lead
                                you to high scores. Even if you are confused and unable to choose a good topic for your
                                dissertation, we have you covered. Our MBA Dissertation Experts are proficient and will take
                                care of all the elements of your dissertation, whether it is editing, proofreading,
                                formatting, referencing, or plagiarism checks.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Your Goals Achieved with Our MBA Dissertation Project Writing Service
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Your MBA dissertation is not only a writing task, but it also shows the knowledge you have
                                gained throughout your degree and your critical thinking skills. But with so many tasks,
                                lectures, and other commitments, writing one becomes a burden for MBA students. That’s where
                                you should look for a legitimate service that you can rely on for your academic success.
                                This is exactly why MBA Assignments Help is here. Your dissertation will fulfil all your
                                program requirements and align with the academic standards without a doubt. Working with us,
                                you don't have to worry about plagiarism, as we strictly adhere to academic honesty when
                                delivering your work whether it is an <a class="sparkle-awd"
                                    href="{{ route('mba-essay') }}">MBA essay</a>
                                or <a class="sparkle-awd" href="{{ route('mba-personal') }}">MBA personal statement</a>.
                            </p>
                            <p class="text-base py-3">
                                Moreover, our top MBA dissertation writers in UK can cover all MBA subjects and
                                specialisations, whether it is finance, marketing, entrepreneurship, human resources or any
                                other. They are qualified subject experts who have written for MBA students for many years
                                and possess profound knowledge of business concepts and theories. Rest assured, your paper
                                will have the best presentation, structure, and original ideas, with no AI-generated fluff.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Get Guidance That Matters from MBA Dissertation Help Experts
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                If you want research depth and originality in your dissertation, then you must choose
                                MBAAssignmentsHelp right away. We can guarantee that our service is not like any other
                                because we focus on delivering high-quality work rather than simply filling pages to
                                complete your dissertation. Our team of writers, including business graduates, has studied
                                the subject itself, bringing the right amount of knowledge and expertise to produce an
                                excellent paper with practical business insights.
                            </p>
                            <p class="text-base py-3">
                                Our MBA experts are proficient in all major citation styles, including Harvard, APA, and
                                MLA, and will apply them according to your university guidelines. They also provide a
                                complete reference list at the end of your dissertation. Each chapter is designed to flow
                                logically and present strong, evidence-based arguments to support your study. Whether you
                                need assistance with one chapter or a specific section such as methodology, literature
                                review, or analysis, our professional writers can handle it all. With our MBA Dissertation
                                Writing Help, we also recognize that every university has unique requirements, so we
                                carefully follow your instructions for word count, formatting, and other specifications to
                                deliver perfectly tailored work.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            MBA Dissertation Writing Help for Busy Students Like You
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                It’s a dream come true if you ace your MBA studies with a dissertation that impresses your
                                supervisor and they give you the highest marks. But pursuing this dream can become a big
                                challenge for you. We understand that it's not really easy, and for this reason, our MBA
                                Dissertation Writing Services in UK have one goal, and that is to help students present
                                their best self on paper. Our dissertation specialists conduct thorough research and apply
                                their critical thinking skills to analyse and structure your ideas. Every paper produced by
                                us is 100% original, accurate and academically sound.
                            </p>
                            <p class="text-base py-3">
                                Your privacy is our top concern. We keep your personal information and dissertation details
                                safe and secure with us and don't share them with any outsiders. For this reason, students
                                across the UK rely on our Always on Time. What’s more? If you find any errors in our
                                work, you can approach us instantly, and our team will respond on the spot. They will work
                                on it immediately and deliver without any delays so that you have ample time to review your
                                work before submission.
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
                                    What is an MBA dissertation writing service?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide1">
                            An MBA dissertation writing service will provide you with professional guidance and high-quality
                            dissertations on time according to your academic requirements. They will offer you support to
                            help
                            you understand concepts better, assist with topic selection, and structure your dissertation
                            properly.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="2">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Is it legal to have someone write your MBA dissertation?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide2">
                            Yes, it is legal to have someone write your MBA dissertation as long as they maintain academic
                            integrity and do not plagiarise content.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="3">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How can I ensure that the help I receive is ethical and legitimate?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide3">
                            If you want to receive help that is ethical and legitimate, look for a service that has good
                            student
                            reviews, transparent pricing, and original work.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="4">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Can you assist with any subject or specialisation for an MBA dissertation?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide4">
                            Yes, we provide assistance for all MBA specialisations and subjects, such as Marketing, Human
                            Resource Management, Supply Chain Management, Finance, Operations, and more. You receive
                            tailored
                            work that meets the standards of your university.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="5">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you offer help with MBA dissertation proposals and topic selection?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide5">
                            Our assistance helps you to create a captivating dissertation proposal and select a suitable,
                            research-worthy topic. We help you organise your ideas, clarify your research questions, and
                            guarantee your proposal satisfies academic criteria.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="6">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Can you assist with writing the introduction and other chapters of my MBA dissertation?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide6">
                            We can assist with any chapter of your MBA dissertation, whether it is the introduction,
                            literature
                            review, analysis or any other chapter. Our professionals ensure that your work meets academic
                            requirements, whether you require complete assistance or assistance with specific sections of
                            your
                            dissertation.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="7">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    What is the typical word count and structure of an MBA dissertation?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide7">
                            Depending on your university's rules, an MBA dissertation usually ranges from 12,000 to 20,000
                            words. The typical structure includes:<br><br>
                            <strong>Introduction:</strong> Defining the objectives and goals of research<br>
                            <strong>Literature Review:</strong> reviewing theories and research studies<br>
                            <strong>Methodology:</strong> describing the research techniques used<br>
                            <strong>Findings/Analysis:</strong> presenting and analysing results<br>
                            <strong>Conclusion and Recommendations:</strong> summarising insights<br><br>
                            Some universities may also need an abstract, acknowledgements, and references.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="8">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="8">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How do you ensure the originality and plagiarism-free content in my MBA dissertation?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide8">
                            We have skilled writers who create plagiarism-free MBA dissertations backed by deep research. We
                            produce everything from scratch and do not copy from other sources, making your work 100%
                            original
                            and plagiarism-free.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="9">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="9">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you have qualified subject experts to write MBA dissertations?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide9">
                            Our writers are qualified with advanced degrees, such as Master's and PhDs from top institutes,
                            and
                            they have years of experience in dissertation writing. They are subject experts and ensure that
                            every paper is well-written, insightful, and accurate.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="10">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="10">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Can I request revisions if I’m not satisfied with my MBA dissertation?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide10">
                            Of course, you can ask for revisions. Our writers will edit your work until you are satisfied
                            with
                            your dissertation. We don't have any additional charges for that.
                        </p>
                    </div>
                    <div class="content faq-internal-styling" data-no="11">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="11">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    What is the typical timeline for completing an MBA dissertation?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide11">
                            It depends on the research complexity and university requirements. However, we have fast-paced
                            writers who will complete your dissertation within a short deadline without sacrificing the
                            quality of your work.
                        </p>
                    </div>
                    <div class="content faq-internal-styling" data-no="12">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="12">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you offer a refund if the MBA dissertation does not meet the required standards?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide12">
                            Our qualified experts deliver high-quality work. If you are not happy, then you can ask for
                            countless revisions. If you are still not satisfied with the work, you get a total refund for
                            your dissertation.
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
                        Make Your Dissertation the Highlight of Your MBA Journey
                    </h2>
                    <p class="py-4 text-white ">
                        Facing hurdles in completing your dissertation? Opt for our MBA dissertation support
                        services
                        because we help you ace your research and secure your academic future.
                    </p>
                    @include('partials.frontend.form')
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
@endsection
