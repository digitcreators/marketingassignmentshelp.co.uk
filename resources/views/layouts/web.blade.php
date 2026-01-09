<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (View::hasSection('noindex'))
        <meta name="robots" content="noindex, nofollow">
    @else
        <meta name="robots" content="index, follow">
    @endif

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon.png') }}">

    {{-- Chrome Address Bar Color --}}
    <meta name="theme-color" content="#fff" />

    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description')" />
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-55MX6939');</script>
    <!-- End Google Tag Manager -->

    {{-- Facebook share --}}
    <meta property="og:url" content="@yield('canonical')" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', env('APP_NAME'))" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="{{ asset('webp/logo-header.webp') }}" />

    {{-- Twitter share --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="@yield('title', '')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="{{ asset('webp/logo-header.webp') }}" />

    {{-- Canonical --}}
    <link rel="canonical" href="@yield('canonical', '')" />

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('dist/styling.css') }}?v=1.0.1">
    {{-- <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" rel="stylesheet" />
    <script async src="https://www.google.com/recaptcha/api.js"></script>
    <meta name="DC.title" content="@yield('title', '')" />
    <meta name="geo.region" content="GB" />
    <meta name="geo.position" content="54.702355;-3.276575" />
    <meta name="ICBM" content="54.702355, -3.276575" />

    <script type="application/ld+json">
        {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "@yield('title', '')",
        "url": "@yield('canonical')",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "{search_term_string}",
            "query-input": "required name=search_term_string"
        }
        }
    </script>
    @yield('schema-script')
    <script type="application/ld+json">
        {
        "@context": "https://schema.org/", 
        "@type": "Product", 
        "name": "@yield('title', '')",
        "image": "https://marketingassignmentshelp.co.uk/public/img/hero.webp",
        "description": "@yield('description')",
        "brand": {
            "@type": "Brand",
            "name": "Marketing Assignments Help UK"
        },
        "offers": {
            "@type": "Offer",
            "url": "@yield('canonical')",
            "priceCurrency": "GBP",
            "price": "4",
            "availability": "https://schema.org/InStock",
            "itemCondition": "https://schema.org/NewCondition"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "ratingCount": "9534"
        }
        }
    </script>

    <!--Background image-->
    <link rel="preload" as="image" href="{{ asset('img/hero.webp') }}" type="image/webp">
    <link rel="preload" as="image" href="{{ asset('img/logo-header.webp') }}" type="image/webp">

    <script>
        var fontAwe = document.createElement('link');
        fontAwe.rel = 'stylesheet';
        fontAwe.href = 'https://use.fontawesome.com/releases/v5.15.4/css/all.css';
        document.head.appendChild(fontAwe);
    </script>

    {{-- Alpine JS --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    @yield('links')
    @yield('styles')
    <style>
        #home-recaptcha {
            transform: scale(0.72);
            margin-top: -10px;
            transform-origin: left;
        }
    </style>

</head>

<body class="">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55MX6939"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <a href="#main-wrapper" id="backto-top" class="back-to-top" style="display: none;" aria-label="Back To Top">
        <i class="fa fa-arrow-up fa-3x" aria-hidden="true"></i>
    </a>
    <div class="">
        @include('partials.frontend.header')

        @yield('content')

        {{-- Footer --}}
        @include('partials.frontend.footer')

        {{-- AJAX jQuery cdn --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        {{-- custom js --}}
        <script src="{{ asset('js/writer-slider.js') }}?v=1.0.5"></script>


        <script>
            
            // for Scroller
            document.addEventListener("DOMContentLoaded", function() {
                var offset = 2000;
                var backToTop = document.getElementById('backto-top');
                window.addEventListener('scroll', function() {
                    if (window.pageYOffset > offset) {
                        backToTop.style.display = 'flex';
                    } else {
                        backToTop.style.display = 'none';
                    }
                });
                backToTop.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });
            //FAQ section script
            (function() {
                $('.questions').on('click', function() {
                    let dataNo = $(this).attr('data-no');
                    let xy = $(this);
                    $('.content').each(function() {
                        let eachdatano = $(this).attr('data-no');
                        if (dataNo == eachdatano) {
                            xy.next().slideToggle();
                            xy.addClass('active');
                            xy.find('i').toggleClass("fa-plus fa-minus");
                        } else if (dataNo != eachdatano) {
                            $(this).find('p#openSlide' + eachdatano).slideUp();
                            $(this).find('.questions').removeClass("active");;
                            $(this).find('i').removeClass("fa-minus");;
                            $(this).find('i').addClass("fa-plus");;
                        }
                    })
                })
            })();
            // for calculator 
            const loading =
                '<svg class="inline-block " width="40px" height="40px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" stroke="#000"><g transform="rotate(0 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(30 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(60 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(90 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(120 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(150 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(180 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(210 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(240 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(270 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(300 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate></rect></g><g transform="rotate(330 50 50)"><rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#000"><animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate></rect></g></svg>'
            // $("#cost").html(loading)               
            $(".get-fare").change(function(e) {
                e.preventDefault();
                var data = {
                    "_token": "{{ csrf_token() }}",
                    "deadline_id": $('#deadline').val(),
                    "academic_level_id": $('#academic_level').val(),
                }
                $.ajax({
                    method: 'POST',
                    url: '{{ route('get.fare') }}',
                    beforeSend: function() {

                        // $("#cost").html(loading)
                    },
                    complete: function() {
                        // $("#loading").removeClass("block");
                    },
                    data: data,
                    success: function(res) {
                        let currentCost = parseFloat($("#cost").text()) || 0; // Get existing value
                        let newCost = res.per_page_price * ($("#no_of_pages").val() || 1);
                        newCost = parseFloat(newCost.toFixed(2)); // Ensure proper rounding
                        // Smooth increment effect
                        let increment = (newCost - currentCost) / 30; // Adjust speed by changing divisor
                        let count = 0;
                        let interval = setInterval(function() {
                            if (count >= 30 || Math.abs(currentCost - newCost) < 0.01) {
                                clearInterval(interval);
                                $("#cost").text(newCost.toFixed(2)); // Set final value
                            } else {
                                currentCost += increment;
                                $("#cost").text(currentCost.toFixed(2)); // Update price gradually
                                count++;
                            }
                        }, 20); // Adjust timing for smoother animation
                    },
                    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                        console.log(JSON.stringify(jqXHR));
                        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
            document.addEventListener("DOMContentLoaded", function() {
                // Select the buttons that trigger the dropdown menus
                const dropdownButtonServices = document.querySelector("#dropdown button");

                // Select the mobile menus
                const mobileMenuServices = document.querySelector("#services-mobile");

                // Flag to track the state of each dropdown
                let isOpenServices = false;

                // Toggle mobile dropdown visibility on button click (Services)
                dropdownButtonServices.addEventListener("click", function(event) {
                    event.stopPropagation(); // Prevent the event from propagating

                    if (isOpenServices) {
                        mobileMenuServices.classList.add("hidden"); // Close the menu
                    } else {
                        mobileMenuServices.classList.remove("hidden"); // Open the menu
                    }
                    isOpenServices = !isOpenServices; // Toggle the state
                });

                // Close the dropdown if the user clicks outside any dropdown or button
                document.addEventListener("click", function(event) {
                    if (!dropdownButtonServices.contains(event.target) && !mobileMenuServices.contains(event
                            .target)) {
                        mobileMenuServices.classList.add("hidden"); // Close the services menu
                        isOpenServices = false; // Set the state to closed for services menu
                    }
                });
            });
        </script>

        @yield('scripts')

        <!--StartofTawk.toScript-->
        <script type="text/javascript"> 
            var Tawk_API=Tawk_API||{}, 
                Tawk_LoadStart=new Date(); 
                (function(){ 
                    var s1=document.createElement("script"),
                    s0=document.getElementsByTagName("script")[0]; 
                    s1.async=true; 
                    s1.src='https://embed.tawk.to/68ec9492ab07261951f58925/default'; 
                    s1.charset='UTF-8'; 
                    s1.setAttribute('crossorigin','*'); 
                    s0.parentNode.insertBefore(s1,s0); 
            })(); 
        </script> 
        <!--End of Tawk.to Script-->
        
</body>

</html>
