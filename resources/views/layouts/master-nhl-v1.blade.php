<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"  />
    <link rel="stylesheet" href="./css/index.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mouse+Memoirs&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />



    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-QD0rked6P6SPKEWzK50taJlvveDZjOJ2B9y/OdW+e7dt3zcuH66WIJC5jF1xJewt" crossorigin="anonymous">--}}


    <!--
    <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              sans: ['Inter', 'sans-serif'],
            },
          }
        }
      }

    </script> -->

    @include('partials.dark')
    @include('partials.styles')
</head>
<body class="xl:w-10/12 dark block" >

@include('partials.header')
{{--@if (request()->path() == '' || request()->path() == '/')--}}
    {{--@include('partials.header')--}}
{{--@else--}}
    {{--@include('partials.nhl-header')--}}
{{--@endif--}}
<main class="container-none ">
    @yield('content')
</main>



@include('partials.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js"></script>


@include('partials.scripts')
@include('partials.script-slider')

<script>
    // A $( document ).ready() block.
    $( document ).ready(function() {

        // Get the value of the 'darkMode' cookie
        var isDarkMode = Cookies.get("darkMode");

        // Log the value of 'darkMode' cookie
        console.log(isDarkMode);

        if (isDarkMode === "true") {
            document.body.classList.add("dark");
            $('#checkbox').prop('checked', true); // Check the checkbox if dark mode is enabled
            // $('#checkbox1').prop('checked', true); // Check the checkbox if dark mode is enabled
        }else{
            document.body.classList.remove("dark");
            // $('#checkbox').prop('checked', true); // Check the checkbox if dark mode is enabled
        }

        // Toggle dark mode when the checkbox is changed
        $("#checkbox").change(function() {

            var isChecked = $(this).prop("checked");
            if (isChecked) {
                document.body.classList.add("dark");

                Cookies.set("darkMode", true);
                // Cookies.get("darkMode", true); // Save dark mode state to cookie
            } else {
                document.body.classList.remove("dark");
                // $.removeCookie("darkMode"); // Remove dark mode state from cookie

                Cookies.set("darkMode", false);
                // Remove the 'darkMode' cookie

            }
            myFunc();
        });
        // const checkbox = document.getElementById("checkbox")
        // myFunc();
        //
        // checkbox.addEventListener("change", () => {
        //     document.body.classList.toggle("dark");
        //     myFunc();
        // })

        function myFunc(){
            if ($('body').hasClass('dark')) {
                $('.dark-mode').removeClass('hidden');
                $('.light-mode').addClass('hidden');
            } else {
                $('.dark-mode').addClass('hidden');
                $('.light-mode').removeClass('hidden');
            }
        }

    });
</script>
</body>
</html>