<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="google-adsense-account" content="ca-pub-5740215782746766">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> PakSimTracker</title>
    <meta name="description" content="PakSimTracker Track any Pakistan mobile number ownership or address ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">

	<!-- CSS here -->
	<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/progressbar_barfiller.css') }}">
<link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/exten.css') }}">
</head>
<body>
<!-- Popup container with blur background -->
<div id="popup-bg" class="popup-bg">
    <div id="popup" class="popup">
        <!-- Top bar with title and close button -->
        <div class="popup-header">
            <h2>Popup Title</h2>
            <button onclick="closePopup()">Close</button>
        </div>
        <!-- Collapse content -->
        <div class="popup-content">
            <!-- First Disclosure -->
            <div class="accordion">
                <button class="accordion-btn">Title 1</button>
                <div class="panel">
                    <p>Description 1</p>
                </div>
            </div>
            <!-- Second Disclosure -->
            <div class="accordion">
                <button class="accordion-btn">Title 2</button>
                <div class="panel">
                    <p>Description 2</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript functions (same as previous example) to toggle and close the popup
    function togglePopup() {
        var popupBg = document.getElementById('popup-bg');
        var popup = document.getElementById('popup');
        
        if (popupBg.style.display === 'none' || popupBg.style.display === '') {
            popupBg.style.display = 'block';
            popup.style.display = 'block';
        } else {
            popupBg.style.display = 'none';
            popup.style.display = 'none';
        }
    }

    function closePopup() {
        var popupBg = document.getElementById('popup-bg');
        var popup = document.getElementById('popup');
        
        popupBg.style.display = 'none';
        popup.style.display = 'none';
    }
    // JavaScript functions to toggle panel visibility
function togglePanel(panel) {
    panel.classList.toggle('active');
}

// Get all buttons (titles) and attach click event listeners
var buttons = document.querySelectorAll('.accordion-btn');
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        var panel = this.nextElementSibling;
        togglePanel(panel);
    });
});
</script>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('img/logo/loder.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        @include('components.navbar')
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main class="">
        <!-- Hero Area Start-->
        <div class="slider-area">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Hero Caption -->
                            <div class="hero__caption">
                                <h2 class="text-style-1 pst-py-8 pst-text-8">Leading Marketplace for local business</h2>
                                <h3  class="text-style-1 pst-py-8">Find people, Contact info, Background checks</h3>
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5740215782746766"
                                    crossorigin="anonymous"></script>
                                <ins class="adsbygoogle"
                                    style="display:block"
                                    data-ad-format="fluid"
                                    data-ad-layout-key="-gw-3+1f-3d+2z"
                                    data-ad-client="ca-pub-5740215782746766"
                                    data-ad-slot="7741241682"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                            <!--Hero form -->
                            <form action="" class="search-box" onsubmit="redirectToTrackPage(event)">
                                <div class="input-form">
                                    <input type="text" id="search_mobile" placeholder="Search People eg. 03001234567">
                                    <!-- icon search -->
                                    <div class="search-form">
                                        <button type="submit"><i class="ti-search"></i></button>
                                     </div>
                                    <!-- icon search -->
                                    <div class="world-form">
                                        <i class="fas fa-globe"></i>
                                     </div>
                                </div>
                            </form>	
                            <script>
                                // Function to redirect to /track page with the search number as a parameter
                                function redirectToTrackPage(event) {
                                    event.preventDefault(); // Prevent default form submission
                                    const searchNumber = document.getElementById('search_mobile').value;
                                    window.location.href = `/track?search_mobile=${searchNumber}`;
                                }
                            </script>
                            <!-- Domain List -->
                            <div class="single-domain pt-30 pb-30">
                                <ul>
                                    <li> <p>Search any number belong to Telenor, Ufone, Zong and Mobilink</p></li>
                                </ul>
                            </div>
                            <div style="text-align: center;margin-top: 30px;">
                                <a href="/getapk" target="_blank" download="paksimtracker.apk" style="background: crimson; border-radius: 10px; padding: 20px 15px;"><span style="padding: 10px;font-size: xx-large;top:6px;position: relative;">⇩</span>Get Our Android Apk</a>
                            </div>
                            <!-- Domain List  End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Area End-->
        <!--? Pricing Card Start -->
        <section class="pricing-card-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="pst-single-card text-center ">
                            <div class="card-top">
                                <img height="100px" width="100px" src="{{ asset('img/elements/target.webp') }}" alt="">
                                <h4 class="pst-md-text">Hyper-Targeted Local Campaigns</h4>
                            </div>
                            <div class="card-bottom">
                                <p class="pst-justify-text">
                                Highlight how your data enables businesses to craft marketing campaigns that resonate deeply with local audiences. Localized data, addresses and region-specific interests, empowers businesses create highly relevant content for specific areas.
                                </p>
                                <!-- <a href="services.html" class="borders-btn">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="pst-single-card text-center ">
                            <div class="card-top">
                                <img  height="100px" width="100px" src="{{ asset('img/elements/tailored.png') }}" alt="">
                                <h4 class="pst-md-text">Geographically Tailored Offers</h4>
                            </div>
                            <div class="card-bottom">
                                <p class="pst-justify-text">
                                Emphasize the potential for businesses to customize offers based on the local preferences and behaviors identified in the data. This approach can significantly increase engagement and conversion rates as customers feel more connected to the offerings.
                                </p>
                                <!-- <a href="services.html" class="borders-btn">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="pst-single-card text-center ">
                            <div class="card-top">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="100" height="100" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m27.383 314.082c1.673 4.535 4.309 8.617 7.682 11.962 5.981 5.981 14.203 9.694 23.273 9.694 9.043 0 17.292-3.713 23.272-9.694 5.981-5.98 9.694-14.229 9.694-23.272v-18.34c-6.944.595-13.039-.907-17.801-2.892-.426 2.069-.907 4.082-1.531 6.066-2.353 7.653-6.293 14.627-12.529 19.644-6.321 5.103-14.711 8.051-25.824 7.483-1.984-.085-4.054-.311-6.236-.651zm194.29-49.124h65.934v-20.722h-50.769c-4.167 0-7.966 1.73-10.715 4.479-2.75 2.75-4.45 6.52-4.45 10.687zm65.933 14.995h-65.934v22.818c0 9.043 3.713 17.292 9.694 23.272 5.98 5.981 14.229 9.694 23.272 9.694 9.07 0 17.319-3.713 23.273-9.694 5.98-5.98 9.694-14.229 9.694-23.272v-22.818zm205.515 50.06c4.025 2.126 7.568 5.018 10.488 8.447 5.244 6.18 8.391 14.145 8.391 22.79v50.57c0 4.139-3.345 7.483-7.483 7.483s-7.512-3.345-7.512-7.483v-50.57c0-4.988-1.815-9.581-4.819-13.124-2.665-3.147-6.265-5.471-10.375-6.576-7.908 5.782-17.633 9.184-28.12 9.184-10.856 0-20.892-3.628-28.971-9.779-1.53.17-3.005.596-4.422 1.248-1.928.906-3.685 2.296-5.103 4.166l-40.281 53.349c-1.417 1.871-3.628 3.005-5.98 3.005h-51.619c-3.827 0-7.285 1.53-9.779 4.024-2.495 2.523-4.054 5.981-4.054 9.78 0 3.826 1.559 7.285 4.054 9.779 2.494 2.494 5.952 4.054 9.779 4.054h61.653c2.468 0 4.366-.255 6.72-1.446 4.365-2.183 8.447-8.815 11.423-12.784l26.675-35.291c2.494-3.316 7.171-3.969 10.487-1.474 3.288 2.494 3.94 7.199 1.446 10.488l-25.37 33.618v65.367h86.656v-43.059c0-4.139 3.373-7.483 7.512-7.483s7.483 3.345 7.483 7.483v50.57c0 4.139-3.345 7.483-7.483 7.483-165.688 0-331.346 0-497.005 0-4.138 0-7.512-3.345-7.512-7.483v-50.57c0-4.139 3.374-7.483 7.512-7.483 4.139 0 7.483 3.345 7.483 7.483v43.059h86.685v-65.367l-25.398-33.618c-2.494-3.289-1.842-7.994 1.475-10.488 3.288-2.495 7.993-1.843 10.488 1.474l26.078 34.526c2.381 3.146 4.763 6.32 7.143 9.496 1.36 1.785 3.033 3.146 4.876 4.053 2.069 1.049 3.997 1.446 6.265 1.446h62.107c3.799 0 7.257-1.56 9.779-4.054 2.495-2.494 4.025-5.953 4.025-9.779 0-3.799-1.53-7.257-4.025-9.78-2.522-2.494-5.98-4.024-9.779-4.024h-51.647c-2.268 0-4.507-1.049-5.98-3.005l-40.281-53.349c-2.297-3.033-5.727-4.988-9.524-5.414-8.051 6.123-18.085 9.779-28.942 9.779-10.488 0-20.24-3.401-28.148-9.155-4.025 1.049-7.597 3.345-10.262 6.406-3.062 3.571-4.933 8.192-4.933 13.266v50.57c0 4.139-3.345 7.483-7.483 7.483s-7.512-3.345-7.512-7.483v-50.57c0-8.759 3.26-16.837 8.617-23.045 2.892-3.316 6.378-6.123 10.29-8.192-5.584-8.022-8.532-17.49-8.532-27.241v-43.37c0-8.306 3.373-15.846 8.844-21.316 5.472-5.442 12.983-8.844 21.288-8.844h35.631c8.306 0 15.846 3.401 21.316 8.844 5.472 5.471 8.845 13.011 8.845 21.316v43.37c0 9.609-2.863 18.596-7.768 26.107 4.054 2.041 7.483 4.847 10.233 8.476l38.014 50.343h30.018v-30.415c0-8.617 4.564-16.413 11.962-23.018 5.727-5.102 13.267-9.553 21.601-13.067-2.381-5.698-3.684-11.906-3.684-18.426v-30.303-13.068c0-8.306 3.401-15.846 8.845-21.316 5.471-5.442 13.011-8.844 21.316-8.844h58.28c4.14 0 7.513 3.373 7.513 7.512v35.717 30.302c0 6.151-1.19 12.048-3.316 17.49 8.957 3.515 17.064 8.05 23.188 13.322 7.851 6.747 12.699 14.797 12.699 23.698v30.415h30.018l38.014-50.343c2.807-3.686 6.321-6.52 10.262-8.447-4.933-7.54-7.796-16.526-7.796-26.136v-43.37c0-8.306 3.402-15.846 8.845-21.316 5.471-5.442 13.011-8.844 21.316-8.844h35.633c8.305 0 15.846 3.401 21.316 8.844 5.442 5.471 8.844 13.011 8.844 21.316v43.37c-.001 9.75-2.977 19.218-8.533 27.241zm-8.504-15.931c-2.154.34-4.252.566-6.236.651-11.084.567-19.475-2.381-25.796-7.483-6.265-5.017-10.205-11.99-12.558-19.644-.596-1.984-1.105-3.997-1.503-6.066-4.79 1.984-10.856 3.486-17.829 2.892v18.34c0 9.043 3.713 17.292 9.694 23.272 5.98 5.981 14.23 9.694 23.301 9.694 9.042 0 17.292-3.713 23.273-9.694 3.346-3.345 5.981-7.427 7.654-11.962zm-63.922-44.674c10.006 1.417 17.319-4.394 18.623-5.528 1.475-1.247 2.863-2.012 4.876-2.098 4.139-.198 7.625 2.977 7.823 7.115.256 4.876.935 9.809 2.324 14.315 1.531 5.017 3.94 9.439 7.598 12.387 3.6 2.892 8.675 4.536 15.733 4.195 2.721-.142 5.697-.566 8.985-1.304v-39.09c0-4.167-1.729-7.937-4.479-10.687-2.749-2.749-6.52-4.479-10.686-4.479h-35.632c-4.167 0-7.938 1.73-10.687 4.479-2.75 2.75-4.478 6.52-4.478 10.687zm-329.39 0v-10.007c0-4.167-1.7-7.937-4.45-10.687-2.749-2.749-6.548-4.479-10.715-4.479h-35.633c-4.138 0-7.937 1.73-10.687 4.479-2.749 2.75-4.45 6.52-4.45 10.687v39.09c3.26.737 6.236 1.162 8.958 1.304 7.059.341 12.133-1.304 15.732-4.195 3.657-2.947 6.066-7.37 7.626-12.387 1.389-4.507 2.069-9.439 2.296-14.315.198-4.139 3.713-7.313 7.823-7.115 1.928.086 3.401.794 4.819 2.041 1.05.935 8.477 7.029 18.681 5.584zm127.08 64.687c-7.825 3.033-14.741 6.888-19.674 11.311-4.28 3.798-6.917 7.88-6.917 11.877v30.415h2.92c7.938 0 15.166 3.231 20.382 8.447s8.447 12.416 8.447 20.382c0 5.017-1.304 9.723-3.543 13.833h72c-2.239-4.11-3.515-8.816-3.515-13.833 0-7.966 3.231-15.166 8.448-20.382 5.216-5.216 12.415-8.447 20.381-8.447h2.892v-30.415c0-4.139-2.835-8.391-7.427-12.331-5.386-4.62-12.87-8.617-21.204-11.65-.964 1.162-1.984 2.296-3.033 3.345-8.702 8.702-20.693 14.088-33.902 14.088-13.182 0-25.2-5.386-33.874-14.088-.823-.824-1.617-1.673-2.381-2.552zm-155.88-270.398c-4.139 0-7.483-3.373-7.483-7.512s3.345-7.483 7.483-7.483h138.842c4.139 0 7.484 3.345 7.484 7.483 0 4.139-3.346 7.512-7.484 7.512zm0 78.917c-4.139 0-7.483-3.373-7.483-7.512s3.345-7.512 7.483-7.512h69.422c4.139 0 7.512 3.373 7.512 7.512s-3.373 7.512-7.512 7.512zm0-39.458c-4.139 0-7.483-3.374-7.483-7.512 0-4.139 3.345-7.483 7.483-7.483h138.842c4.139 0 7.484 3.345 7.484 7.483s-3.346 7.512-7.484 7.512zm146.524 79.965c1.049 2.92 2.721 5.527 4.848 7.653 3.799 3.827 9.071 6.208 14.938 6.208h44.079c4.139 0 7.483 3.345 7.483 7.512 0 4.139-3.345 7.483-7.483 7.483h-44.079c-10.006 0-19.021-4.081-25.541-10.658-4.875-4.903-8.334-11.196-9.808-18.198h-104.57l-33.959 33.959c-1.36 1.361-3.231 2.211-5.329 2.211-4.139 0-7.512-3.345-7.512-7.483v-29.31c-9.525-1.588-18.058-6.151-24.605-12.728-8.249-8.221-13.351-19.588-13.351-32.117v-84.018c0-12.501 5.103-23.868 13.351-32.116 8.22-8.221 19.587-13.352 32.117-13.352h164.639c12.528 0 23.896 5.131 32.116 13.352 8.249 8.248 13.351 19.615 13.351 32.116v13.89h127.392c9.949 0 18.964 4.054 25.512 10.602s10.602 15.562 10.602 25.512v72.227c0 9.95-4.054 18.964-10.602 25.512-4.848 4.848-11.083 8.334-18.028 9.809v29.48c0 1.899-.709 3.826-2.183 5.301-2.92 2.919-7.682 2.919-10.603 0l-33.987-33.988h-40.961c-4.139 0-7.512-3.345-7.512-7.483 0-4.167 3.373-7.512 7.512-7.512h44.079c2.098 0 3.968.851 5.329 2.239l23.329 23.329v-18.057c0-4.167 3.373-7.512 7.513-7.512 5.782 0 11.083-2.381 14.91-6.208 3.827-3.826 6.208-9.099 6.208-14.91v-72.227c0-5.811-2.381-11.083-6.208-14.91s-9.128-6.208-14.91-6.208h-127.393v55.134c0 12.529-5.102 23.896-13.351 32.117-8.221 8.248-19.588 13.351-32.116 13.351h-5.217zm-123.252-14.995h128.469c8.391 0 15.987-3.43 21.515-8.957 5.527-5.528 8.957-13.153 8.957-21.516v-84.018c0-8.362-3.43-15.987-8.957-21.515s-13.124-8.958-21.515-8.958h-164.639c-8.391 0-15.988 3.43-21.516 8.958-5.527 5.527-8.958 13.152-8.958 21.515v84.019c0 8.362 3.431 15.987 8.958 21.516 5.527 5.527 13.125 8.957 21.516 8.957 4.139 0 7.483 3.373 7.483 7.512v18.057l23.386-23.357c1.475-1.476 3.374-2.213 5.301-2.213zm309.576 277.228h-278.677v43.483h278.678v-43.483z" fill="#00648c" data-original="#000000" style="" class=""/></g></g></svg>
                                <h4 class="pst-md-text">Efficient Resource Allocation</h4>
                            </div>
                            <div class="card-bottom">
                                <p class="pst-justify-text">
                                Highlight how localized data helps businesses allocate resources more effectively. By understanding regional preferences and needs, businesses can tailor their marketing efforts, reducing wasted resources on irrelevant audiences.
                                </p>
                                <!-- <a href="services.html" class="borders-btn">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>


          <!--? Testimonial Start -->
          <div class="testimonial-area testimonial-padding section-bg2" data-background="{{ asset('img/gallery/section_bg04.webp') }}">
       
         <!-- Brand Area Start -->
         <div class="brand-area">
            <div class="container">
                <div class="brand-active brand-border pt-20 pb-20 pst-mx-50">
                    <div class=" pst-min-card">
                        <img height="50px" width="80px" src="{{ asset('img/gallery/jazz.svg') }}" alt="">
                    </div>
                    <div class=" pst-min-card">
                        <img  height="50px" width="80px" src="{{ asset('img/gallery/zong.webp') }}" alt="">
                    </div>
                    <div class=" pst-min-card">
                        <img  height="50px" width="60px" src="{{ asset('img/gallery/warid.webp') }}" alt="">
                    </div>
                    <div class=" pst-min-card">
                        <img  height="50px" width="80px" src="{{ asset('img/gallery/ufone.webp') }}" alt="">
                    </div>
                    <div class=" pst-min-card">
                        <img  height="50px" width="100px"  src="{{ asset('img/gallery/onic.jpg') }}" alt="">
                    </div>
                    <div class=" pst-min-card">
                        <img  height="50px" width="80px"  src="{{ asset('img/gallery/telenor.svg') }}" alt="">
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Area End -->
       
          <div class="container">
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="support-caption">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle5">
                        <h2>Customer' s<br>story</h2>
                        <p class="support-details">Navigating Success: The Power of Verified Data Collection.</p>
                    </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img src="{{ asset('img/gallery/testimonial.webp') }}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>This data collection service is a goldmine! With accurate numbers and verified addresses, our marketing strategies have gained a precision that's second to none. It's become the backbone of our targeted campaigns!.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <span>Ahmed Khan</span>
                                        <p>@creative director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial ">
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <img class="pst-round" height="150px" width="150px" src="{{ asset('img/gallery/team2.webp') }}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>Incredible accuracy! The collected data, especially the contact numbers and addresses, has revolutionized our approach. It's like having a roadmap for our marketing success.</p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-40">
                                        <span>Fatima Ali</span>
                                        <p>@creative director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        </div>
        <!-- Testimonial End -->
        <!-- Pricing Card End -->
        <section class="load-balancing  pt-top section-bg2" data-background="{{ asset('img/gallery/section_bg01.webp') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-90">
                            <h2>Innovative Solutions for Tomorrow</h2>
                            <p>Explore our cutting-edge solutions tailored for the future. Our innovative approaches and forward-thinking strategies pave the way for groundbreaking results. Embrace tomorrow's possibilities today.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img height="40px" width="40px" src="{{ asset('img/gallery/digital.svg') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Quality Leads</h3>
                                <p>Fuel Your Pipeline with High-Quality Leads - Drive Revenue Efficiently!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img height="40px" width="40px" src="{{ asset('img/gallery/unlock-growt.webp') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Unlock Growth</h3>
                                <p>Your Gateway to Quality Leads in Marketing - Unlock Growth Potential Today!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img height="40px" width="40px" src="{{ asset('img/gallery/track.webp') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Sales Strategy</h3>
                                <p>Connecting Businesses with Prime Leads - Elevate Your Sales Strategy Now!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img height="40px" width="40px" src="{{ asset('img/gallery/map.webp') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Tailored Leads</h3>
                                <p>Tailored Leads for Your Success - Drive Conversions with Confidence!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img height="40px" width="40px" src="{{ asset('img/gallery/target.webp') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>High Performance</h3>
                                <p>Experience a Surge in Sales - Top-tier Leads Ready for Your Business!.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img height="40px" width="40px" src="{{ asset('img/gallery/d.webp') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Brand Accelerator</h3>
                                <p>Rev Up Your Brand's Potential - Accelerate Growth Beyond Boundaries!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? About 1 Start-->
        <!-- Support Area Start -->
        
        <!-- Support Area End -->
        <!-- Map -->
        <!-- <div class="map-are section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-10 ">
                        <div class="section-tittle text-center mb-90">
                            <h2>Cloud Load Balancing</h2>
                            <p>Deploy your service infrastructure on our fully redundant, high performance cloud platform and benefit from its high reliability, security and enterprise feature set.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <div class="row">
                        <div class="col-xl-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.1786539269224!2d55.27218771500953!3d25.197196983896188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43348a67e24b%3A0xff45e502e1ceb7e2!2sBurj%20Khalifa!5e0!3m2!1sen!2sbd!4v1588690958350!5m2!1sen!2sbd" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Map -->
       
        <!-- ask questions -->
        <section class="ask-questions section-bg2 section-padding30" data-background="{{ asset('img/gallery/section_bg03.webp') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-90">
                            <h2>Frequently ask questions</h2>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>What services do you offer?</h2>
                                <p>We specialize in comprehensive lead generation services, tailored to suit your business needs. Our offerings include targeted lead acquisition, data verification, and strategic marketing solutions to fuel your growth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>How can your leads benefit my business</h2>
                                <p>Our leads are meticulously curated to match your ideal customer profiles, ensuring higher conversion rates and increased ROI. By tapping into our high-quality leads, you'll witness accelerated sales and amplified revenue streams.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>Are the leads you provide verified and reliable?</h2>
                                <p>Absolutely. We prioritize data accuracy and verification. Our leads undergo rigorous validation processes, ensuring reliability and relevance for your marketing and sales endeavors.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-question d-flex mb-50">
                            <span> Q.</span>
                            <div class="pera">
                                <h2>How can I get started with your lead generation services?</h2>
                                <p>Getting started is simple! Reach out to our team, and we'll craft a tailored strategy aligned with your business goals. From there, we'll guide you through the process and initiate your journey towards driving impactful growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End ask questions -->
        <!--? About-2 Area Start -->
        <div class="about-area2 section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{ asset('img/gallery/about1.webp') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <h2>Lead the Way, Expand Your Horizon!</h2>
                            </div>
                            <p class="mb-40">At PakSimTracker, we pave the path for your business success. With our meticulously curated leads and precision-driven strategies, we propel your growth journey. Experience the difference with high-quality, verified leads that fuel your sales engine and elevate your brand's impact. Let's lead the way to unparalleled success together!
                            </p>
                            <!-- <a href="about.html" class="border-btn">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About-2 Area End -->
        <!-- Want To work 2-->
        <section class="wantToWork-area">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Questions?</h2>
                                <p> Assistance needed? We're here! Contact us for all things lead generation, tailored strategies, or any queries regarding your business growth. Let's connect and power your success together.</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-5 ">
                            <div class="double-btn f-right ">
                                <a href="/contact" class="btn w-btn wantToWork-btn mr-20">Contact Us</a>
                                <!-- <a href="#" class="border-btn w-btn wantToWork-btn">Live Chat</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End 2-->
    </main>
    @include('components.footer')
    </body>

    </html>