<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
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
<!-- <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script> -->
<!-- <script src="https://challenges.cloudflare.com/turnstile/v0/api.js"></script> -->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>


</head>
<body>


<main class="">
<div class="top-navbar">
@include('components.navbar')
</div>


<!-- 
        <div class="marginx ">
            <div class="ppheading">
            Privacy Policy
            </div>
     


        </div> -->
        <main>
        <!-- Hero Area Start-->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5740215782746766"
                crossorigin="anonymous"></script>
            <!-- display add for track first -->
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-5740215782746766"
                data-ad-slot="8436781227"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        <div class="pstsearch">
            <div class="single-slider slider-height d-flex ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Hero Caption -->
                            <div class="hero__caption">
                                <h2 class=" pst-py-8 pst-text-8">Search any number</h2>
                                <!-- <h3  class=" pst-py-8">Find people, Contact info, Background checks</h3> -->
                            </div>
                            <!--Hero form -->
                           
                            <!-- <div id="searchForm" data-search-url="{{ route('track.search') }}> -->
                            <form id="searchForm" action="{{ route('track.search') }}" method="GET"  class="search-box">
                                <div class="input-form pstrel" >
                                    <input type="text" id="search_mobile" name="search_mobile" style="background:#C2D9FF" placeholder="Search People eg. 03001234567">
                                    <!-- icon search -->
                                    <div class="search-form pstabri pst-search-icon">
                                        <button type="submit">
                                            <i class="ti-search" id="searchButton" style="display:block;">
                                            </i>
                                            <div class="spinner-border text-light  " id="spinner" style="width: 3rem; height: 3rem;margin-left:4px;  display: none;" role="status">
                                            <span class="sr-only">Loading...</span>
                                            </div>
                                        </button>
                                     </div>
                                    <!-- icon search  -->
                                    <div class="world-form pstable pst-world ">
                                        <i class="fas fa-globe "></i>
                                     </div>
                                </div>
                                <!-- <div class="cf-turnstile" data-sitekey="0x4AAAAAAAPW2PYOAuJ2VX8r" data-callback="captchaCallback" ></div> -->
                                <!-- <div class="cf-turnstile" data-sitekey="1x00000000000000000000AA" data-callback="captchaCallback" ></div> -->
                                <div class="pst-search-desc">
                                <div class="captcha-container pst-search-box" id="captcha-container" name="captcha-container"></div>
                               <div  class="pst-search-box">
                                <div id="searchStatus"></div>
                               </div>
                                </div>
                                <!-- <button type="submit">
                                            <i class="ti-search" id="searchButton" style="display:block;">
                                            </i>
                                            <div class="spinner-border text-light  " id="spinner" style="width: 3rem; height: 3rem;margin-left:4px;  display: none;" role="status">
                                            <span class="sr-only">Loading...</span>
                                            </div>
                                        </button> -->
                                    
                            </form>	
                        <script>
                           document.addEventListener('DOMContentLoaded', function() {
        // Get the search number from the URL query parameter
        const urlParams = new URLSearchParams(window.location.search);
        const searchMobile = urlParams.get('search_mobile');

        // Set the retrieved search number to the input field on the /track page
        document.getElementById('search_mobile').value = searchMobile;
    });
                             // Get the search number from the URL query parameter
                            // const urlParams = new URLSearchParams(window.location.search);
                            // const searchMobile = urlParams.get('search_mobile');

                            // // Set the retrieved search number to the input field on the /track page
                            // document.getElementById('search_mobile').value = searchMobile;
                        </script>
                            <!-- </div> -->
                            <!-- <div class="spinner" id="spinner">Loading...</div> -->

                            <!-- Domain List -->
                            <div class="single-domain pt-30 pb-30">
                                <ul>
                                    <li> 
                                    <p>Search any number belong to Telenor, Ufone, Zong and Mobilink</p></li>
                                </ul>
                               <div class="">
                               <div style="text-align: center;margin-top: 30px;">
                                    <a href="/getapk" target="_blank" download="paksimtracker.apk" style="background: crimson; border-radius: 10px; padding: 20px 15px;text-decoration: none;color: white;font-size: large;"><span style="padding: 10px;font-size: xx-large;top:6px;position: relative;">⇩</span>Get Our Android Apk</a>
                                </div>
                               <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5740215782746766"
                                crossorigin="anonymous"></script>
                            <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-format="fluid"
                                data-ad-layout-key="-gw-3+1f-3d+2z"
                                data-ad-client="ca-pub-5740215782746766"
                                data-ad-slot="6137920946"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                               </div>


                                <!-- <ul class=""> -->
                                <div class="container">
                                    <div id="results" class="mx-auto" ></div>
                                    </div>

                                    <div class="">
                                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5740215782746766"
                                        crossorigin="anonymous"></script>
                                    <ins class="adsbygoogle"
                                        style="display:block"
                                        data-ad-format="autorelaxed"
                                        data-ad-client="ca-pub-5740215782746766"
                                        data-ad-slot="1882410343"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                                    </div>
                                <!-- </ul> -->
                            </div>
                            <!-- Domain List  End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->

        @if(isset($searchMobile))
    <p>Searched Mobile: {{ $searchMobile }}</p>
@endif


    </main>

</main>
@include('components.footer')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
        // JavaScript to handle showing/hiding the spinner
        // document.getElementById('searchForm').addEventListener('submit', async function () {
        //     event.preventDefault(); 
        //     document.getElementById('searchButton').style.display = 'none'; // Hide search button
        //   document.getElementById('spinner').style.display = 'block'; // Show spinner
        // });
    </script>
    <script>
        window.onloadTurnstileCallback = function () {
    turnstile.render('#captcha-container', {
        // sitekey: '1x00000000000000000000AA',
        sitekey: '0x4AAAAAAAPW2PYOAuJ2VX8r',
        callback: function(token) {
            console.log(`Challenge Success ${token}`);
            window.captchaToken = token;
            // console.log(`Challenge Success ${token}`);
        },
    });
};
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
    <script>
    $(document).ready(function() {
       

        $('#searchForm').submit(function(e) {
            e.preventDefault(); // Prevent the form from submitting normally
            function resetCaptcha() {
            const captchaContainer = document.querySelector('#captcha-container');
             captchaContainer.innerHTML = ''; // Clears the content inside the container

    // Re-render the captcha using turnstile.render
    turnstile.render('#captcha-container', {
        // sitekey: '1x00000000000000000000AA',
        sitekey: '0x4AAAAAAAPW2PYOAuJ2VX8r',
        callback: function(token) {
            console.log(`Challenge Success ${token}`);
            window.captchaToken = token;
        },
    });
}
//             turnstile.ready(function() {

// const captchaToken = window.captchaToken;
// console.log('captchaToken01',captchaToken)

// // Make AJAX request here    

// });
if (window.captchaToken === undefined) {
    alert('Please solve the captcha first.');
    return;
}
const mobilePattern = /^\d{10,11}$/
            var searchMobile = $('#search_mobile').val();
            if (!mobilePattern.test(searchMobile)) {
            // alert('Please enter a valid 11-digit number without any special characters.');
            $('#searchStatus').html(`<div class='pst-search-err'>Please enter a valid 11-digit number</br> 03001234567</div>`) 
                 return; // Prevent form submission
                 }else{
                 $('#searchStatus').html(`<div class='pst-search-ld'>Searching....</div>`) 
                    }

        // If the validation passes, allow form submission
        document.getElementById('searchButton').style.display = 'none'; // Hide search button
          document.getElementById('spinner').style.display = 'block'; // Show spinner
       
            // var captchaToken = captchaToken
            var searchUrl = $(this).data('search-url'); // Retrieve URL from data attribute
            const captchaToken = window.captchaToken;
            console.log('captchaToken',captchaToken)
            $.ajax({
                    url: "{{ route('track.search') }}",
                    type: 'GET',
                    data: {
                    search_mobile: searchMobile,
                    captcha_response:captchaToken,
                    },
    success: function(response) {
      // handle success
      resetCaptcha();
      $('#searchStatus').html(`<div class='pst-search-err'>Found: ${response?.results?.length} records</div>`) 
      document.getElementById('searchButton').style.display = 'block'; // Hide search button
          document.getElementById('spinner').style.display = 'none'; // Show spinner
       
      console.log('response',response)
      if(!response?.results?.length){
          $('#results').html(`<ul>
                                    <li> <p>No Record Found</p></li>
                                </ul>`)
        return;
      }

let resultsHtml = '';
let index = 1; 

 
response.results.forEach(result => {

let resultHtml = `
  <div class="accordion rounded-5 border-1 " style="border-color: #190482;">
    <div class="accordion-item rounded-5 border-0 " style="border-color: #190482;">
      <h2 class="accordion-header border-0" style="border-color: #190482;">
        <button class="accordion-button border-0 fs-3 collapsed rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#result${index}" style="border-color: #190482;background:#C2D9FF">
          ${index}: ${result.name}
        </button>
      </h2>
      <div id="result${index}" class="accordion-collapse collapse" data-bs-parent=".accordion">
        <div class="accordion-body">
          <table class="table table-bordered">
            <tbody>
`;

Object.keys(result).forEach(key => {
  resultHtml += `
      <tr>
        <td  class="text-uppercase fs-4 fw-bold">${key}</td>
        <td class="fs-4">${result[key]}</td>
      </tr>
  `;
});

resultHtml += `
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
`;

resultsHtml += resultHtml;
index++;

});

$('#results').html(resultsHtml);

    },
    error: function(xhr) {
        $('#searchStatus').html(`<div class='pst-search-err'>No record found!</div>`) 
        document.getElementById('searchButton').style.display = 'block'; // Hide search button
          document.getElementById('spinner').style.display = 'none'; // Show spinner
          resetCaptcha();
      // handle error 
    }
  });
            // $.ajax({
            //     url: searchUrl, // Use the retrieved URL
            //     type: 'GET',
            //     data: { search_mobile: searchMobile },
            //     beforeSend: function() {
            //         // Rest of your code remains the same
            //     },
            //     success: function(response) {
            //         // Rest of your code remains the same
            //         console.log('response',response)
            //     },
            //     error: function(xhr) {
            //         // Rest of your code remains the same
            //         console.log('xhr')
            //     }
            // });
        });
    });
</script>
</body>
</html>
