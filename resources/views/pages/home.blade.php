@extends('layouts.web')
@section('keyword', 'Marketing Assignment Help UK')
@section('title', 'UK’s #1 Marketing Assignment Help – 200+ Academic Experts')
@section('description',
    'Boost your grades with our expert marketing assignment help in UK crafted by professionals who
    understand branding, digital, and strategic marketing needs.')
@section('canonical', config('app.url'))
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
    {{-- Header --}}
    <section class="homepage-background bg-gray-800 py-12">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-12 lg:px-0 px-5 py-10 lg:gap-4 items-center">
                <!-- Left Column -->
                <div class="lg:col-span-7">
                    <h1 class="text-4xl font-bold">
                        <span class="text-primary"> Top-Notch Marketing Assignment Help UK </span> That Guarantees A+ Work

                    </h1>
                    <p class="py-5">
                        Driven by a committed crew of over 200 experienced writers who produce unique, excellent work on
                        time, MarketingAssignmentsHelp.co.uk has supported 10,000+ marketing students for more than 12
                        years. Our dedication to quality, on-time delivery, and 24/7 assistance helps students trust us.
                    </p>
                    <div class="grid grid-cols-2 mb-4 gap-2">
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/low-price.png') }}" alt="Relatively Cheap" title="Relatively Cheap"
                                    width="24" height="24" loading="eager" decoding="async" fetchpriority="high">
                                Relatively Cheap
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/stress-free.png') }}" alt="Stress-free Process"
                                    title="Stress-free Process" width="24" height="24" loading="eager"
                                    decoding="async" fetchpriority="high">
                                Stress-free Process
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/security.png') }}" alt="Your Details Stay Safe"
                                    title="Your Details Stay Safe" width="24" height="24" loading="eager"
                                    decoding="async" fetchpriority="high">
                                Your Details Stay Safe
                            </span>
                        </div>
                        <div class="">
                            <span class="flex items-center gap-2 points">
                                <img src="{{ asset('img/on-time.png') }}" alt="Delivered Right on Time"
                                    title="Delivered Right on Time" width="24" height="24" loading="eager"
                                    decoding="async" fetchpriority="high">
                                Delivered Right on Time
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
                            <span>Do My Marketing Assignment!</span>
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
                        <span>200+ writers online</span>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-5 mt-4 lg:mt-0">
                    <img class="ml-auto" src="{{ asset('img/hero.webp') }}" width="412" height="376"
                        alt="Top-Notch Marketing Assignment Help UK" title="Top-Notch Marketing Assignment Help UK" />
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
                    The Best Features of <span class="span-header"> Marketing Assignments Help UK</span>
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
                    Writers Who Know <span class="span-header"> the Market Inside Out
                </h3>
                <p class="mt-3">
                    We have experts from diverse fields who are driven to support students in achieving their career goals.
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
                    Get Help in <span class="span-header">4 Easy Moves </span>
                </h3>
                <p class=" mt-3">
                    Follow our quick process and Share Your Requirements in just a few minutes. Then sit back and relax
                    while we
                    work on your assignment.
                </p>
            </div>
            <div class="swiper process-slider mt-5 lg:px-0 px-5">
                <!-- Process 1 - Bootstrap Brain Component -->
                <div class="swiper-wrapper py-8">
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/requirement.png') }}" class="shadow" width="64"
                                    height="64" alt="Submit Requirements" title="Submit Requirements">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">01</span>
                                        <p class="font-semibold shadow text-primary">
                                            Submit Requirements </p>
                                    </div>
                                    <p class="detail text-sm">
                                        Please provide us with all the requirements for your assignment by completing the
                                        order form. Mention the topic, due date, and the word limit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/best-writer.png') }}" class="shadow" width="64"
                                    height="64" alt="Hire Expert Writer " title="Hire Expert Writer ">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">02</span>
                                        <p class="font-semibold shadow text-primary">
                                            Hire Expert Writer
                                        </p>
                                    </div>
                                    <p class="detail text-sm">
                                        Once we receive the details, our team will match you with a writer who has the
                                        relevant expertise to prepare your assignment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/payment.png') }}" class="shadow" width="64" height="64"
                                    alt="Make a Payment " title="Make a Payment ">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">03</span>
                                        <p class="font-semibold shadow text-primary">
                                            Make a Payment
                                        </p>
                                    </div>
                                    <p class="detail text-sm">
                                        We ensure payments through secure payment gateways, such as debit and credit cards,
                                        to protect our clients from fraud.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide lg:pt-0 pt-8">
                        <div class="processBorder">
                            <div class="processIcon shadow">
                                <img src="{{ asset('img/work-receive.png') }}" class="shadow" width="64"
                                    height="64" alt="Get Final Draft" title="Get Final Draft">
                            </div>
                            <div class="processBox">
                                <div class="flex justify-center items-center flex-col text-center">
                                    <div class="processCount flex items-center justify-center pb-2">
                                        <span class="font-bold shadow-lg">04</span>
                                        <p class="font-semibold shadow text-primary">
                                            Get Final Draft
                                        </p>
                                    </div>
                                    <p class="detail text-sm">
                                        You will receive your order on time and have ample time to review your paper and ask
                                        for amendments if you need them.
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
                    <span class="span-header">Quick Marketing Project Help in UK </span> without Cutting Corners
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
        <div class="container mx-auto py-10 lg:px-0 px-5">
            <div class="grid grid-cols-1 items-center justify-center">
                <div class="text-center w-full">
                    <h2 class="lg:text-4xl text-3xl text-white">
                        We Turn Tough Marketing Theories into Score Assignments
                    </h2>
                    <p class="py-5 text-white px-5">
                        Our expert writers know how to strike a balance between academic depth and practical insights,
                        improving your understanding of the subject.
                    </p>
                    <div class="lg:flex md:flex grid justify-center gap-4 pt-3">
                        <a href="{{ route('order') }}" class="btn-order bg-third">
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
            <div class="text-center mx-auto pb-3">
                <h2 class="text-4xl font-semibold py-5 px-5">
                    Say Goodbye to Stress and <span class="span-header">Hello to Smarter Assignment Help</span>
                </h2>
                <p>
                    Our marketing specialists help students at all academic levels, delivering assignments that show
                    originality, clarity, and accuracy.
                </p>
            </div>
            <div class="con-main mt-4">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Shape Your Career Path via Marketing Management Assignment Help
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Wondering who can help with the marketing assignment? Marketing is an exciting career to
                                pursue; however, with a great number of assignments piled up, students often become
                                overburdened and struggle to perform well under pressure. Worry not! Marketing Assignments
                                Help UK boasts the best academic writers in the field, providing top-quality work. They know
                                well how to combine practical examples with theories. They don't just write, but write in a
                                way that helps you comprehend the concepts better, which ultimately helps you in future
                                tasks as well.
                            </p>
                            <p class="text-base py-3">
                                Moreover, our experts have studied at renowned universities and have advanced degrees in
                                multiple disciplines. You can see their knowledge and expertise in the way they write your
                                assignments. Our marketing assignment writers are competent and can cater to whatever
                                academic level you are at. Besides, our team works day and night to satisfy your demands.
                                They will resolve all your problems and worries that you may be facing. We have helped
                                thousands of marketing students across the UK through our services to achieve their desired
                                grades, whether they reside in Glasgow, Leeds, or Manchester.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Choose Our Marketing Assignment Help Online in UK to Achieve Higher Grades
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Universities and colleges give so many marketing assignments to students that they start
                                freaking out. Oftentimes, due to a lack of time, poor academic writing skills, or because
                                there is pressure to perform well. In such cases, students start turning to online marketing
                                assignment writing services in UK. MarketingAssignmentsHelp would be of great assistance to
                                you if you are also looking for someone to support you in your career. We can understand
                                that complicated concepts and theories are difficult to digest, so we offer comprehensive
                                guidance to help you overcome your academic issues.
                            </p>
                            <p class="text-base py-3">
                                Furthermore, our professional marketing assignment writers guide students of prestigious
                                universities in the UK, such as the University of Warwick, London Business School,
                                University of Oxford, University of Cambridge, and others. Nowadays, students are pursuing
                                jobs and internships alongside their studies to enhance their skills, making it difficult
                                for them to focus solely on assignments. Our writers understand this, and that’s why they
                                focus on quality assignment writing and helping you meet deadlines. You can trust them to
                                finish your work on time.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mt-8">
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            The Marketing Assignment Helper Who Makes Learning Easy
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Missing a deadline for the assignment is a fear that students have. As it can cause them to
                                lose marks, they may end up with poor grades. We know how scary it is. But with Marketing
                                Assignments Help, you have nothing to worry about. We take care of your work as if it were
                                our own, and you receive a polished paper that's ready to submit without any delays. Plus,
                                students have another major concern, and that is ‘Whether I will receive subpar work or will
                                the assignment meet my university guidelines?’ The good news is that the answer is indeed
                                yes.
                            </p>
                            <p class="text-base py-3">
                                Our professional writers are marketing graduates and post-graduates themselves, which means
                                they possess all the necessary knowledge to compose top-notch assignments. Being familiar
                                with all the academic rules and writing styles, they can present and structure your
                                arguments in the best way. By choosing our marketing assignment writing service, you gain
                                access to experts who can craft well-researched and accurately formatted work on any topic.
                                They will never disappoint you with low-quality content, and for your peace of mind, they
                                also provide revisions to ensure everything is polished and ready before submission.
                            </p>
                        </div>
                    </div>
                    <div class="content-styling">
                        <h2 class="font-bold lg:px-5 md:text-2xl text-2xl">
                            Crack Case Studies with Our Cheap Marketing Assignment Writing Services
                        </h2>
                        <div class="py-3">
                            <p class="text-base py-3">
                                Pursuing a marketing career can come with a fair share of challenges. Assignments like case
                                studies and business theories can take up your time and demand thorough, detailed, and
                                extensive in-depth research. In that case, students can take help from a trusted and
                                experienced marketing assignment helper at Marketing Assignments Help UK. We have highly
                                qualified professional writers on board who always deliver work that conforms to the
                                university requirements and strict academic grading criteria.
                            </p>
                            <p class="text-base py-3">
                                In addition, our writers take care of everything, from proofreading and editing to
                                formatting, referencing, and plagiarism checks. Once you share your assignment details with
                                us, you don't have to worry about a thing, as we will handle it. And the best part? We offer
                                cheap marketing assignment writing services for students. But remember, 'cheap' here doesn't
                                mean 'cheap' in terms of quality or standard. Our affordable services do not come at the
                                expense of your reputation or standard of work. On top of that, we maintain crystal-clear
                                communication with our clients, which is why they trust us and continue to come back when
                                they need professional guidance.
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
                <h2 class="text-4xl font-semibold py-3">
                    Master Every <span class="span-header">Corner of Marketing</span>
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
                    <img src="{{ asset('img/faqMan.webp') }}" class="img-fluid mx-auto hide-on-mobile"
                        alt="Frequently Asked Questions" title="Frequently Asked Questions" width="450"
                        height="675">
                </div>
                <div class="lg:col-span-6 faq-box rounded-xl space-y-2 py-5 px-3 my-2">
                    <div class="content faq-internal-styling" data-no="0">
                        <div class="questions cursor-pointer flex p-3 font-bold active" data-no="0">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-minus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Are you following the UK university guidelines for marketing assignments?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base" id="openSlide0">
                            We have skilled writers who create plagiarism-free marketing assignments backed by deep
                            research. They strictly adhere to the academic guidelines of UK universities and are familiar
                            with the formatting, structures, and citation styles used in these institutions. They also offer
                            multiple revisions for your complete satisfaction.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="1">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="1">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you provide plagiarism-free marketing assignments?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide1">
                            Yes, our marketing assignment help services are guaranteed to be 100% original and free from
                            plagiarism. Our platform features real writers who craft content from scratch. They do not use
                            AI tools or plagiarise from other sources. Additionally, each assignment is checked using
                            reliable tools, such as Turnitin, to ensure originality.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="2">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="2">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How do I place an order for marketing assignment help in the UK?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide2">
                            You simply need to visit our website, fill out the order form with all your assignment
                            specifications and instructions, including the deadline, word count, and topic. Don't miss out
                            on any details and place your order. Our team will review your requirements and contact you in a
                            short time, and assign you an expert who is the best fit for your task.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="3">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="3">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Can I communicate directly with the writer assigned to my marketing assignment?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide3">
                            Yes, you can communicate directly with the writer if you want to track the progress of your
                            marketing assignment, share feedback, engage in discussions, or request changes as needed. Our
                            team is available round the clock via chat, so feel free to reach out at any time of the day.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="4">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="4">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you follow UK academic standards and referencing styles?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide4">
                            Yes, we follow UK academic standards and referencing styles, whether you require APA, MLA,
                            Harvard or any other style. Our writers always make sure the work meets the requirements and is
                            well-formatted.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="5">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="5">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    How long does it take to complete a marketing assignment in the UK?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide5">
                            It depends on factors such as the complexity, word count, and deadline of your marketing
                            assignment. However, we can deliver assignments on short deadlines since our writers are
                            fast-paced and they always deliver on time. So, you don't have to worry about the deadlines.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="6">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="6">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Are your services confidential and secure for UK students?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide6">
                            Yes, our services are highly confidential and secure for UK students. We have a strict policy
                            regarding customer privacy. Your personal information and project details are never shared with
                            any outsiders.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="7">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="7">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you offer discounts for multiple marketing assignments?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide7">
                            Yes, we offer discounts and special offers for multiple marketing assignment orders. The more
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
                                    Can you assist with case studies, essays, reports, and research projects related to
                                    marketing?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide8">
                            Yes, we assist with a comprehensive range of marketing assignments, including case studies,
                            essays, reports, and research projects.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="9">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="9">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    What if I am not satisfied with the completed marketing assignment?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide9">
                            In case you are not satisfied with the completed marketing assignment, you can ask for free
                            unlimited revisions. Our writers welcome your feedback and strive to meet the needs of all
                            students.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="10">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="10">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you provide draft updates during the writing process?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide10">
                            Yes, we provide draft updates during the writing process to keep you informed about your
                            marketing assignment. This enables you to share your feedback and request edits on the spot.
                        </p>
                    </div>

                    <div class="content faq-internal-styling" data-no="11">
                        <div class="questions cursor-pointer flex p-3 font-bold" data-no="11">
                            <div class="icons mr-4 text-right w-[5%]">
                                <i class="fa fa-plus text-xl"></i>
                            </div>
                            <div class="heading w-[85%]">
                                <h4 class="text-lg md:font-semibold">
                                    Do you provide help with marketing strategy plans and presentations?
                                </h4>
                            </div>
                        </div>
                        <p class="openSlide text-base hidden" id="openSlide11">
                            Yes, we provide help with marketing strategy plans and presentations. We make sure you get
                            thoroughly researched work, proper analysis and captivating slides aligned with your
                            requirements.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->

    <!-- CTA Section -->
    <section class="relative cta-form lg:p-5 p-3">
        <div class="rounded-lg lg:py-0 py-8 ">
            <div class="grid lg:grid-cols-12 items-center">
                <div class="lg:col-span-4 hide-on-mobile ">
                    <div class="">
                        <div class="circle-lines"></div>
                        <img src="{{ asset('img/ctaGirl.webp') }}" class="ctaGirl image mx-auto" width="350"
                            height="428" title="CTA" alt="CTA" loading="lazy">
                    </div>
                </div>
                <div class="lg:col-span-8 lg:px-10 py-2">
                    <h2 class="lg:text-3xl text-3xl text-white lg:text-left text-center pb-1">
                        Win Professor’s Praise and Stay Ahead in Class
                    </h2>
                    <p class="py-4 text-white ">
                        Hire us and kick out all your academic stress from your life. Our writers can remove all your
                        writing worries and help you build a successful career.
                    </p>
                    @include('partials.frontend.form')
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
@endsection
