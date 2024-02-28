<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


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
<style>

    * {box-sizing: border-box;}

    body {
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        min-height: 100vh;
        margin: 0;
        transition: background 0.2s linear;
    }

    body.dark,
    body.dark .sg-current-date-arrow > div,

    /*body.dark .sg-dark-mode,*/
    body.dark .starting-goalies-away-view-card
    /*body.dark .starting-goalies-view-card */
    {
        background-color: #292c35 !important;
    } /* #9b59b6 */
    body.dark .starting-goalies-away-view-card,
    body.dark .starting-goalies-view-card,
    body.dark .sg-border-dark-mode {
        border: 1px solid #38B6FF;
    }
    body.dark .support a,
    body.dark a,
    body.dark div,
    body.dark h1,
    body.dark h2,
    body.dark h3,
    body.dark h4,
    body.dark h5,
    body.dark .starting-goalies-away-view-card span {
        color: #fff;
    }

    body.dark .view-news h1,
    body.dark .view-news a,
    body.dark .trending-section a
    body.dark .sg-container div,
    body.dark .sg-container h1,
    body.dark .sg-dark-mode > h1,
    body.dark .cards-dm-black,
    body.dark .starting-goalies-view-card span,
    body.dark #vue-nhl-home .trending-section div > a{
        color: #000 !important;
    } /* #9b59b6 */
    body.dark .starting-goalies-view-card{
        background-color: #fff !important;
    }

    body.dark #search-nhl-home,
    body.dark #sg-current-date,
    body.dark .card-wd
    {
        background-color: #292c35 !important;
        color: #fff;
    }
    .checkbox {
        opacity: 0;
        position: absolute;
    }

    .checkbox-label {
        background-color: #111;
        width: 50px;
        height: 26px;
        border-radius: 50px;
        position: relative;
        padding: 5px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .fa-moon {color: #f1c40f;}

    .fa-sun {color: #f39c12;}

    .checkbox-label .ball {
        background-color: #fff;
        width: 22px;
        height: 22px;
        position: absolute;
        left: 2px;
        top: 2px;
        border-radius: 50%;
        transition: transform 0.2s linear;
    }

    .checkbox:checked + .checkbox-label .ball {
        transform: translateX(24px);
    }


    /*  Support me if you like it */
    .support {
        position: absolute;
        right: 20px;
        bottom: 20px;
    }

    .support a {
        color: #292c35;
        font-size: 32px;
        backface-visibility: hidden;
        display: inline-block;
        transition: transform 0.2s ease;
    }

    .support a:hover{
        transform: scale(1.1);
    }
    .container-none{
        width: 100%;
    }


</style>

    @include('partials.styles')
</head>
<body>


@if (request()->path() == '' || request()->path() == '/')
    @include('partials.header')
@else
    @include('partials.nhl-header')
@endif
<main class="container-none">
    @yield('content')
</main>



@include('partials.footer')

@include('partials.scripts')
@include('partials.script-slider')

<script>




    const checkbox = document.getElementById("checkbox")

    checkbox.addEventListener("change", () => {
        document.body.classList.toggle("dark")
    })
</script>
</body>
</html>