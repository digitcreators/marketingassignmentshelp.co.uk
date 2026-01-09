@extends('layouts.web')
@section('keyword', 'MBA Essay')
@section('title', 'Best MBA Essay Writing Help UK | Plagiarism-Free Work')
@section('description',
    'Secure your MBA dream with our MBA Essay Writing Help in UK. Every essay is meticulously
    prepared to guarantee it is concise, insightful and professional. ')
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
                        Authentic & Impactful <span class="text-primary">MBA Essay Writing Help in UK</span> You Can Rely On

                    </h1>
                    <p class="py-5">
                        MBAassignmentshelp.co.uk offers expert MBA essay writing help with 18+ years of experience. Our 300+
                        professional writers have guided 50,000 students in crafting unique, high-quality essays that secure
                        admission to top business schools worldwide.
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
                                    alt="No Hidden Costs" title="No Hidden Costs" width="14" height="14"
                                    loading="eager" decoding="async" fetchpriority="high">
                                No Hidden Costs
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
                    <div class="essay-cta lg:flex md:flex lg:justify-start grid justify-center gap-4 py-3">
                        <a href="{{ route('order') }}" class="btn-order bg-primary">
                            <div class="icon flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 640 640">
                                    <path
                                        d="M197.8 100.3C208.7 107.9 211.3 122.9 203.7 133.7L147.7 213.7C143.6 219.5 137.2 223.2 130.1 223.8C123 224.4 116 222 111 217L71 177C61.7 167.6 61.7 152.4 71 143C80.3 133.6 95.6 133.7 105 143L124.8 162.8L164.4 106.2C172 95.3 187 92.7 197.8 100.3zM197.8 260.3C208.7 267.9 211.3 282.9 203.7 293.7L147.7 373.7C143.6 379.5 137.2 383.2 130.1 383.8C123 384.4 116 382 111 377L71 337C61.6 327.6 61.6 312.4 71 303.1C80.4 293.8 95.6 293.7 104.9 303.1L124.7 322.9L164.3 266.3C171.9 255.4 186.9 252.8 197.7 260.4zM288 160C288 142.3 302.3 128 320 128L544 128C561.7 128 576 142.3 576 160C576 177.7 561.7 192 544 192L320 192C302.3 192 288 177.7 288 160zM288 320C288 302.3 302.3 288 320 288L544 288C561.7 288 576 302.3 576 320C576 337.7 561.7 352 544 352L320 352C302.3 352 288 337.7 288 320zM224 480C224 462.3 238.3 448 256 448L544 448C561.7 448 576 462.3 576 480C576 497.7 561.7 512 544 512L256 512C238.3 512 224 497.7 224 480zM128 440C150.1 440 168 457.9 168 480C168 502.1 150.1 520 128 520C105.9 520 88 502.1 88 480C88 457.9 105.9 440 128 440z" />
                                </svg>
                            </div>
                            <span>Write my MBA Essay!</span>
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
                        Make Your MBA Essay the Gateway to Success
                    </h2>
                    <p class="py-5 text-white px-5">
                        Don’t let writer’s block hold you back. Our MBA essay support will shape your aspirations and goals
                        into a stunning essay that admission officers can't ignore.
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
                    <span class="span-header">MBA Essay Help Service Provider in UK</span> - Essays That Win Admissions

                </h2>
                <p>Your essay needs more than just average writing. That’s why we are here to make it insightful and
                    memorable.</p>
            </div>
            <div class="con-main mt-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Secure Top B-School Seats with Our MBA Application Essay Help
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Drafting an MBA essay is not a piece of cake. You need to present your writing in a way that
                                strongly impresses the admissions committee. They are looking for potential and not just
                                grades. In that case, many students turn to services like ours when writing an essay becomes
                                a challenge for them. At Marketing Assignments Help UK, our academic writing pros are here to
                                offer commendable expertise in exceptional writing, research and formatting that one needs
                                to write a captivating essay.
                            </p>
                            <p class="text-base py-3">
                                Moreover, we tailor our services to meet the requirements of your target business school,
                                regardless of the complexity of your topic. Every word is carefully crafted to showcase your
                                unique personality and qualities, making you the perfect candidate. If you are confused
                                about which topic to select, our MBA Essay Writers in UK can suggest creative and catchy
                                topics as well. Or if you find formatting difficult, we will take care of that. We correct
                                all errors and provide your work in a proper format. So, get your essay customised the way
                                you want and secure admission in top business schools.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Fulfil Your MBA Dream with the Help of Our MBA Essay Experts
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                You have all the qualifications, skills and accomplishments, but don't know how to pen them
                                down into a powerful and personal MBA essay. Don't worry. It’s not a big deal since you are
                                not the only one who struggles with this problem. Even professional writers sometimes go
                                through writer’s block and are unable to craft anything. Besides, it's not only about
                                writing and meeting the word limit, but you need to produce something that resonates and
                                sparks the interest of the admissions committee. So, try your hand at our MBA Assignments
                                Help to learn how to do your tasks and achieve fruitful outcomes in your academic journey.
                            </p>
                            <p class="text-base py-3">
                                Furthermore, our MBA essay writing service doesn't just fill pages with words but focuses on
                                your potential and strengths to compose something that captures interest and makes your
                                essay persuasive. They blend business theories with real-world scenarios so that your work
                                aligns with the expectations of business schools. We have industry-savvy writers who offer
                                unique business insights and are proficient in other academic tasks, such as
                                <a class="sparkle-awd" href="{{ route('mba-dissertation') }}">MBA dissertations</a> and
                                <a class="sparkle-awd" href="{{ route('mba-personal') }}">personal statements</a>, so get
                                in touch if you need help.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Shape Your Future Through Powerful MBA Essay Writing UK
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Your admissions essay gives you the chance to reveal the person behind the application and
                                go beyond just grades because a top MBA program requires more than just marks. We aim to
                                transform your experiences into compelling stories that connect. We work cooperatively and
                                customise our approach. We work with you to understand your background, professional
                                aspirations, and target institutions, rather than providing a basic draft. We then create
                                essays that highlight the traits admissions officials are looking for, such as leadership
                                potential and motivation to influence and improve things.
                            </p>
                            <p class="text-base py-3">
                                Our professional writers deliver authentic, crisp, and memorable work through expertly
                                structured content that captures the reader’s attention. We understand how stressful
                                application season can be, which is why our MBA essay writing in UK reduces the burden of
                                endless revisions. From brainstorming fresh ideas to editing and refining, we handle every
                                stage of the process so you can focus on other priorities. Our skilled essay writers also
                                follow required citation styles, including Harvard, APA, MLA, and Chicago, ensuring accurate
                                formatting and flawless referencing for every assignment.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Earn Your Spot at the Top – MBA Admission Essay Writing Service
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                At MBAAssignmentsHelp, our essay writers conduct in-depth research using credible sources
                                such as books, journals, and online references. Our MBA admission essay writing service
                                ensures that only authentic and relevant data is included, making your work academically
                                strong. We maintain a professional tone, avoiding jargon and repetition, so ideas are
                                presented clearly and easy to follow. Each paragraph is carefully structured with logical
                                flow and well-supported arguments, creating impactful essays that leave a lasting
                                impression.
                            </p>
                            <p class="text-base py-3">
                                In addition, our writers craft compelling introductions, body paragraphs, and conclusions
                                that effectively link to the thesis statement. We don't just assign your essay to anyone but
                                match you with a subject matter expert who is well-qualified and understands the topic
                                inside out. You can contact them through chat even at an odd hour of the night, and they
                                will respond. Our friendly team provides unlimited support so you are never left in the
                                dark. Apart from that, the essay undergoes multiple quality checks. It is proofread,
                                formatted, checked for plagiarism, and reviewed for grammatical mistakes so that it is
                                delivered without any flaws.
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
                                    How can I place an order for MBA Essay Writing?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base " id="openSlide1">
                            All you need to do is visit our website and fill out the order form with all the relevant
                            details, such as the essay prompt, deadline, word count, and other requirements. Our team will
                            contact you shortly and match you with an excellent writer who is well-suited for the task.
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
                                    Do you provide free revisions for MBA essays?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide2">
                            Yes, we provide free revisions for MBA essays. Our writers are always happy to revise your work
                            if there's anything that needs improvement.
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
                                    How much does Expert MBA Essay Writing Help in the UK cost?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide3">
                            Factors such as complexity, deadline, and word count of the essay determine the pricing for our
                            MBA essay writing help in the UK. We offer reasonable prices without compromising the quality
                            of our work. By choosing us, you obtain dependable essay assistance at a cost fit for your
                            means.
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
                                    What if I’m not satisfied with the MBA essay you deliver?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide4">
                            You can request unlimited revisions if you are not satisfied with the essay delivered. We will
                            edit your essays, free of charge, until you're happy with your work.
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
                                    How confidential is your MBA essay writing service?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide5">
                            Our MBA essay writing service is highly confidential, as we keep all of your personal
                            information, as well as your essay details, private and never share them with any outsiders.
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
                                    Can I communicate directly with the essay writer assigned to me?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide6">
                            Yes, you can communicate directly with the essay writer assigned to you. Our team is available
                            round the clock, so you can chat with them at any time of the day. They will respond to your
                            queries and concerns promptly.
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
                                    What information do you need from me to start writing my MBA essay?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide7">
                            To begin writing your MBA essay, we will need your essay prompt/question, word count, deadline,
                            and any university guidelines you would like us to follow. The more information you provide, the
                            better we can write your essay.
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
                                    Can you revise or edit an existing MBA essay I’ve written?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide8">
                            Yes, of course, we can revise and edit MBA essays that have already been written by you,
                            refining the grammar, structure, format, vocabulary, and other aspects as needed.
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
                                    How experienced are your MBA essay writers in the UK?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide9">
                            Our professional MBA essay writers in the UK have years of experience in the field and have
                            always delivered top-notch essays. They always compose high-quality, well-researched work and
                            have satisfied many MBA students, helping them excel in their careers.
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
                        Turn Your Achievements into Powerful Stories
                    </h2>
                    <p class="py-4 text-white ">
                        Our MBA admission essay help knows how to present your strengths, ambitions and worth with an
                        inspiring MBA essay that impresses the admission panel.
                    </p>
                    @include('partials.frontend.form')
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
@endsection
