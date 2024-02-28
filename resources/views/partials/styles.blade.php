
{{--@vite('resources/css/app.css')--}}

@vite(['resources/css/app.css', 'resources/js/app.js'])

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');


    body{
        max-width: 1280px;
        margin: auto;
        /*font-family:  'Maven Pro', sans-serif */
        font-family: 'Roboto', sans-serif;

        background-color: #F4F5F7 !important;

    }
    li.lc-team-logo > a > img:hover{
        width: 50px;
    }
    .txt-logo{
        font-family: 'Mouse Memoirs', sans-serif
    }
    .bckgrnd.active {
        color: #9d9d9d;
    }
    .nfl-bckgrnd.active {
        color: #38b6ff;
    }
    .nfl-bckgrnd {
        visibility: visible;
    }
    .nba-bckgrnd.active {
        color: #00bf63;
    }
    .apn-bckgrnd.active {
        color: #38b6ff;
    }
    .pn-sub-active {
        color: #38b6ff !important;
    }
    /* .skeleton {   
        animation: skeleton-loading 1s linear infinite  ;
    }
 
    @keyframes skeleton-loading{
        0%{
       
            background-color: black;
        }
        100%{
           
            background-color: white;
        }
    } */
   
     /* nhl.header button*/
     .nav-itms.active {
        color:#38b6ff;
     }
    /* Arrow holder */
    .arrowed {
        position: relative;
        /*height: 200px; width: 200px;*/
        /*margin: 0 20px 20px 0;*/
        /*border: 1px solid rgba(0,0,0,0.25);*/
    }

    /* Just centering the examples */
    .arrowed div {
        position: absolute;
        top: 0; bottom: 0; left: 0; right: 0;
        margin: auto;
    }
    /* -- ARROW 3      -- */

    .arrow-3 {
        height: 0px; width: 0px;
        border: 8px solid;
        border-color: white white #f7f7f700 transparent;
        transform: rotate(-45deg);
    }
    .arrow-next {
        height: 0px; width: 0px;
        border: 8px solid;
        border-color: white white #f7f7f700 transparent;
        
      
    }
 
    /* NFL home */
    .home-input, value{
         font-size: 36px;
         font-weight: bold;
         color: #9fa0a0;
         padding: 15px;
         
    }
    .home-input-mob, value{
         font-size: 28px;
         font-weight: bold;
         color: #9fa0a0;
         padding: 15px;     
    }
    /* End of NFL home */
    .startgoal-input, value{
         font-size: 26px;
         font-weight: bold;
         color: #9fa0a0;
         padding: 15px;
            
    }
    .startgoal-input-mob{
         font-size: 20px;
         font-weight: bold;
         color: #9fa0a0;
         padding: 8px;
         
    }
    .linecomb-input-mob{
         text-align: center;
         font-size: 20px;
         font-weight: bold;
         color: #9fa0a0;
         padding: 8px;
         
    }
    .props-input, value{
         font-size: 30px;
         font-weight: bold;
         color: #9fa0a0;
         padding: 15px;
         padding-left: 2rem;
    }
    .props-input-mob, value{
         font-size: 30px;
         font-weight: bold;
         color: #9fa0a0;
         padding: 15px;
         padding-left: 2rem;
    }

    .owl-carousel .owl-item.active {
        width: 16rem !important;
       
        
    }

    .owl-carousel{
        width: 99%;
        
    }
    .owl-carousel .owl-nav button{
        font-size: 57px !important;
        display:inline-flex;
        justify-content: center;
        
    }
    .owl-carousel .owl-nav .owl-next{
      position:absolute;
      width: 58px;
      height: 81px;
      border-radius: 12%;
      right: 0;
      top: 4px; 
      background-color: #39b6ff !important;
      color: white;

      
    }
    /* .owl-carousel{
      position: absolute;
      bottom: 0;
    } */
    .owl-carousel .owl-nav .owl-prev{
      position:absolute;
      width: 58px;
      height: 81px;
      border-radius: 12%;
      left: 0;
      top: 4px;
      background-color: #39b6ff !important;
      
    }
    .owl-carousel .owl-stage-outer .owl-stage{
      position: relative;
      right: 108px;
      margin-left: 13px;
    }
    .owl-next span{
      color:white;
      height: 80px;
      position: absolute;
      bottom:10px;
    }
    .owl-prev span{
      color:white;
      height: 80px;
      position: absolute;
      bottom:10px;
    }

    /* chart style */
    .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);

        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 500px;
        padding: 15px;
        background: white;
      }
      /* end of chart style */
    /**
    start projection table 
    */
     .tbl th, td{
        border:1px solid black;
        text-align:left; 
     }

     .tblWin {
        text-align:center;
     }
     .tblGoals{
        text-align:center;
     }
     .tblSalary{
        background-color: #fc9701;
        text-align:center;
     }
     .tblProj{
        background-color:#fc9701;
        text-align:center;
     }
     .tblSalary2{
        text-align:center;
        background-color:#6fa8dc;
     }
     .tblProj2{
        text-align:center;
        background-color:#6d9eeb;
     }
     .tblUnit{
        background-color:#00ff00;
        text-align:center;
     }
     .tblsLine{
        background-color:#b7e1cd;
        text-align:center;
     }
     .tbl th{
        font-weight:medium;
        font-size:14px;
        width:80px;
        margin-right:1px;

     }
     .tbl td{
        text-align:center;
     }
       /**
    end projection table 
    */
    
    .arrow-prev {
        height: 0px; width: 0px;
        border: 8px solid;
        border-color: white white #f7f7f700 transparent;
        
    }

    .leading-12{
        line-height: 3rem;
    }
    .leading-13{
        line-height: 3.5rem;
    }
    .bottom--4{
        bottom: -4px;
    }

    html {
        font-size: 16px;
    @screen md {
        font-size: 17px;
    }
    @screen lg {
        font-size: 26px;
    }
    }



    .active-menu{
        display:flex !important;
    }
    .active{
        display: flex;
    }
    .active-mobile-mune-text{
        display: flex;
        font-weight: bold !important;
    }
    .deactive{
        display:none;
    }




    .container-header {
        display: flex;
        align-items: center;
        justify-content: center;
        /*min-height: 100vh;*/
    }

    .container-slider {
        max-width: 1200px;
        width: 100%;
    }

    .slider-wrapper {
        position: relative;
    }

    .slider-wrapper .slide-button {
        position: absolute;
        top: 50%;
        outline: none;
        border: none;
        height: 50px;
        width: 50px;
        z-index: 5;
        color: #fff;
        display: flex;
        cursor: pointer;
        font-size: 2.2rem;
        background: #9f9f9f;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transform: translateY(-50%);
    }

    .slider-wrapper .slide-button:hover {
        background: #404040;
    }

    .slider-wrapper .slide-button#prev-slide {
        left: -25px;
        display: none;
    }

    .slider-wrapper .slide-button#next-slide {
        right: -25px;
    }
    .matchup-logo-list{
        display: grid;
        /*grid-template-columns: repeat(10, 1fr);*/
        /*columns: repeat(auto-fill, minmax(280px, 1fr));*/
        gap: 10px;
        font-size: 0;
        list-style: none;
        margin-bottom: 30px;
        overflow-x: auto;
        scrollbar-width: none;
    }
    .matchup-logo-list > div {
        /*width: 100px;*/
        /*object-fit: cover;*/
    }
    .slider-wrapper .image-list {
        display: grid;
        /*grid-template-columns: repeat(10, 1fr);*/
        /*columns: repeat(auto-fill, minmax(280px, 1fr));*/
        gap: 10px;
        font-size: 0;
        list-style: none;
        margin-bottom: 30px;
        overflow-x: auto;
        scrollbar-width: none;
    }

    .slider-wrapper .image-list::-webkit-scrollbar {
        display: none;
    }

    .slider-wrapper .image-list .nhl-image-item,
    .slider-wrapper .image-list .nba-image-item,
    .slider-wrapper .image-list .nfl-image-item,
    .slider-wrapper .image-list .nhl-lc-image-item,
    .slider-wrapper .image-list .nhl-sg-image-item,
    .slider-wrapper .image-list .nhl-pn-image-item ,
    .slider-wrapper .image-list .nhl-matchup-image-item {
        width: 210px !important;
        object-fit: cover;
    }
    .nhl-image-item {
        height: 344px;
    }
    .nba-image-item {
        height: 392px;
    }
    .nfl-image-item {
        height: 344px;
    }
    .nhl-lc-image-item {
        height: 344px;
    }
    .nhl-sg-image-item {
        height: 344px;
    }
    .nhl-pn-image-item {
        height: 344px;
    }
    .nhl-matchup-image-item {
        height: 344px;
    }

    .container .slider-scrollbar {
        height: 24px;
        width: 100%;
        display: flex;
        align-items: center;
    }

    .slider-scrollbar .scrollbar-track {
        background: #ccc;
        width: 100%;
        height: 2px;
        display: flex;
        align-items: center;
        border-radius: 4px;
        position: relative;
    }

    .slider-scrollbar:hover .scrollbar-track {
        height: 4px;
    }

    .slider-scrollbar .scrollbar-thumb {
        position: absolute;
        background: #000;
        top: 0;
        bottom: 0;
        width: 50%;
        height: 100%;
        cursor: grab;
        border-radius: inherit;
    }

    .slider-scrollbar .scrollbar-thumb:active {
        cursor: grabbing;
        height: 8px;
        top: -2px;
    }

    .slider-scrollbar .scrollbar-thumb::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -10px;
        bottom: -10px;
    }
    .modalNhl, .modalNba{
        Entering: "ease-out duration-300";
        From: "opacity-0";
        To: "opacity-100";
        Leaving: "ease-in duration-200";
        From: "opacity-100";
        To: "opacity-0";
    }
    /*.close {*/
    /*position: absolute;*/
    /*right: 12px;*/
    /*top: 20px;*/
    /*!*width: 50px;*!*/
    /*!*height: 50px;*!*/
    /*!*z-index: 1;*!*/
    /*!*border: 4px solid #333;*!*/
    /*!*border-radius: 50%;*!*/
    /*opacity: 0.3;*/
    /*}*/
    /*.close:hover {*/
    /*opacity: 1;*/
    /*}*/
    /*.close:before, .close:after {*/
    /*position: absolute;*/
    /*left: 15px;*/
    /*content: ' ';*/
    /*height: 33px;*/
    /*width: 2px;*/
    /*background-color: #333;*/
    /*}*/


    /*.close:before {*/
    /*transform: rotate(45deg);*/
    /*}*/
    /*.close:after {*/
    /*transform: rotate(-45deg);*/
    /*}*/

    div.close-modal {
        border-radius: 50%;
        padding: 0.5em;
        width: 30px;
        height: 30px;
        border: 2px solid #C9C7C7;
        color: #C9C7C7;
        position: absolute;
        right: 16px;
        top: 16px;
        z-index: 1;
    }
    div.close-modal:hover {
        border: 2px solid #C9C7C7;
        color: #ffffff;
    }

    div.close-modal::before {
        content: " ";
        position: absolute;
        display: block;
        background-color: #C9C7C7;
        width: 2px;
        left: 12px;
        top: 5px;
        bottom: 5px;
        transform: rotate(45deg);
    }
    div.close-modal::after {
        content: " ";
        position: absolute;
        display: block;
        background-color: #C9C7C7;
        height: 2px;
        top:12px;
        left: 5px;
        right: 5px;
        transform: rotate(45deg);
    }


    /* Styles for mobile and tablets */

    @media only screen and (max-width: 1023px) {
        .slider-wrapper .slide-button {
            display: none !important;
        }

        .slider-wrapper .image-list {
            gap: 10px;
            margin-bottom: 15px;
            scroll-snap-type: x mandatory;
        }

        .slider-wrapper .image-list .nhl-image-item,
        .slider-wrapper .image-list .nba-image-item {
            width: 280px;
            height: 380px;
        }

        .slider-scrollbar .scrollbar-thumb {
            width: 20%;
        }
    }

    @media (min-width: 768px) {
        .slider-wrapper .slide-button {
            /*display: none !important;*/
        }

        .slider-wrapper .image-list {
            gap: 10px;
            margin-bottom: 15px;
            scroll-snap-type: x mandatory;
        }

        .slider-wrapper .image-list .nhl-image-item,
        .slider-wrapper .image-list .nba-image-item {
            width: 280px;
            height: 380px !important;
        }

        .slider-scrollbar .scrollbar-thumb {
            width: 20% ;
        }
        .nhl-image-item {
            height: 344px !important;
        }

        .nba-image-item {
            height: 392px !important;
        }

        .nfl-image-item {
            height: 344px !important;
        }

        .nhl-lc-image-item {
            height: 344px !important;
        }

        .nhl-sg-image-item {
            height: 344px !important;
        }

        .nhl-pn-image-item {
            height: 344px !important;
        }

        .nhl-matchup-image-item {
            height: 344px !important;
        }
    }
    @media (min-width: 640px) {
        .nhl-image-item {
            height: 300px;
        }
        .nba-image-item {
            height: 300px;
        }
        .nfl-image-item {
            height: 300px;
        }
        .nhl-lc-image-item {
            height: 300px;
        }
        .nhl-sg-image-item {
            height: 300px;
        }
        .nhl-pn-image-item {
            height: 300px;
        }
        .nhl-matchup-image-item {
            height: 300px;
        }

        .slider-wrapper .image-list .nhl-image-item,
        .slider-wrapper .image-list .nba-image-item {
            /*width: 280px;*/
            /*height: 300px;*/
        }

    }

    @media (max-width: 639px) {

        .marquee-parent:before,
        .marquee-parent:after {
            position: absolute;
            top: 0;
            width: 150px;
            height: 100%;
            content: "";
            z-index: 2;
        }
        .marquee-parent:before {
            left: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
        }
        .marquee-parent:after {
            right: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
        }
        .marquee-parent{
            white-space:nowrap;
        }
        .marquee-parent:hover > .marquee {
            animation-play-state: paused;
        }
        .marquee {
            /*display: inline-block;*/
            /*position: relative;*/
            /*width: 100vw;*/
            /*max-width: 100%;*/
            /*height: auto;*/
            overflow: hidden;
            animation: marquee 10s linear infinite;
        }
        @keyframes marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-100%); }
        }

        .modal-center{
            left: 50%;
            top: 50%;
            transform: translate(-50%, -90% );
        }
        .slider-wrapper .image-list .nhl-image-item,
        .slider-wrapper .image-list .nba-image-item,
        .slider-wrapper .image-list .nfl-image-item,
        .slider-wrapper .image-list .nhl-lc-image-item, .slider-wrapper .image-list .nhl-sg-image-item, .slider-wrapper .image-list .nhl-pn-image-item, .slider-wrapper .image-list .nhl-matchup-image-item{

            width: 150px !important;
            object-fit: cover;
        }
        .nhl-image-item {
            height: 270px;
        }
        .nba-image-item {
            height: 270px;
        }
        .nfl-image-item {
            height: 270px;
        }
        .nhl-lc-image-item {
            height: 270px;
        }
        .nhl-sg-image-item {
            height: 270px;
        }
        .nhl-pn-image-item {
            height: 270px;
        }
        .nhl-matchup-image-item {
            height: 270px;
        }

        .slider-wrapper .image-list .nhl-image-item,
        .slider-wrapper .image-list .nba-image-item {
            width: 150px;
            height: 270px;
        }
        .nhl-images {
            position: absolute;
            height: 100%;
            width: 100%;
            inset: 0px;
            object-fit: cover;
            object-position: center top;
            color: transparent;
        }

        ul#mobile-2nd-mnav li:first-child {
            /* border-left: none !important;     */
        }

        ul#mobile-2nd-mnav li:last-child {
            /* border-right: none !important;     */

        }

        ul#mobile-2nd-mnav li {
            /* border-right: 1px solid white;   */
            position: relative;
        }

        ul#mobile-2nd-mnav > #nav-active:after {
            content: '';
            display: block;
            border-top: 4px solid rgb(14 165 233);
        }

        ul#mobile-2nd-mnav li > a {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .smm-flex {
            display: flex;

        }

        .smm-flex-row {
            flex-direction: row;
        }

        html {
            /*position: relative;*/
        }

        body {
            /*position: absolute;*/
            /*transform: translate(50%);*/
            /*right: 50%;*/

        }

        .smm-flex-col-reverse {
            flex-direction: column-reverse;
        }

        .smm-flex-row-reverse {
            flex-direction: row-reverse;
        }

        .smm-flex-col {
            flex-direction: column;
        }

        .smm-justify-start {
            justify-content: flex-start
        }

        .smm-justify-end {
            justify-content: flex-end
        }

        .smm-justify-center {
            justify-content: center
        }

        .smm-justify-between {
            justify-content: space-between
        }

        .smm-justify-around {
            justify-content: space-around
        }

        .smm-justify-evenly {
            justify-content: space-evenly
        }

        .smm-items-center {
            align-items: center
        }

        .smm-items-start {
            align-items: flex-start;
        }

        .smm-block {
            display: block;
        }

        .smm-hidden {
            display: none;
        }

        .smm-flex-wrap {
            flex-wrap: wrap;
        }

        .smm-static {
            position: static
        }

        .smm-fixed {
            position: fixed
        }

        .smm-absolute {
            position: absolute
        }

        .smm-relative {
            position: relative
        }

        .smm-sticky {
            position: sticky
        }

        .smm-gap-2 {
            gap: 0.5rem;
        }

        .smm-w-1-12 {
            width: 8.333333%;
        }

        .smm-w-2-12 {
            width: 16.666667%;
        }

        .smm-w-3-12 {
            width: 25%;
        }

        .smm-w-4-12 {
            width: 33.333333%;
        }

        .smm-w-5-12 {
            width: 41.666667%;
        }

        .smm-w-6-12 {
            width: 50%;
        }

        .smm-w-7-12 {
            width: 58.333333%;
        }

        .smm-w-8-12 {
            width: 66.666667%;
        }

        .smm-w-9-12 {
            width: 75%;
        }

        .smm-w-10-12 {
            width: 83.333333%;
        }

        .smm-w-11-12 {
            width: 91.666667%;
        }

        .smm-w-full {
            width: 100%;
        }

        .smm-p-0 {
            padding: 0px;
        }

        .smm-m-auto {
            margin: auto
        }

        .smm-right-10 {
            right: 2.5rem; /* 40px */
        }

        .smm-z-0 {
            z-index: 0;
        }

        .smm-z-10 {
            z-index: 10;
        }

        .smm-z-20 {
            z-index: 20;
        }

        .smm-z-30 {
            z-index: 30;
        }

        .smm-z-40 {
            z-index: 40;
        }

        .smm-z-50 {
            z-index: 50;
        }

        .smm-z-auto {
            z-index: auto;
        }

        .smm-inset-0 {
            inset: 0px;
        }

        .smm-inset-x-0 {
            left: 0px;
            right: 0px;
        }

        .smm-inset-y-0 {
            top: 0px;
            bottom: 0px;
        }

        .smm-start-0 {
            inset-inline-start: 0px;
        }

        .smm-end-0 {
            inset-inline-end: 0px;
        }

        smm-inset-px {
            inset: 1px;
        }

        smm-inset-x-px {
            left: 1px;
            right: 1px;
        }

        smm-inset-y-px {
            top: 1px;
            bottom: 1px;
        }

        .smm-top-px {
            top: 1px;
        }

        .smm-right-px {
            right: 1px;
        }

        .smm-bottom-px {
            bottom: 1px;
        }

        .smm-left-px {
            left: 1px;
        }

        .smm-inset-0-5 {
            inset: 0.125rem;
        }

        /* 2px */
        .smm-inset-x-0-5 {
            left: 0.125rem;
            right: 0.125rem; /* 2px */
        }

        .smm-inset-y-0-5 {
            top: 0.125rem;
            bottom: 0.125rem; /* 2px */
        }

        .smm-start-0-5 {
            inset-inline-start: 0.125rem;
        }

        .smm-end-0-5 {
            inset-inline-end: 0.125rem; /* 2px */
        }

        .smm-top-0-5 {
            top: 0.125rem; /* 2px */
        }

        .smm-right-0-5 {
            right: 0.125rem; /* 2px */
        }

        .smm-bottom-0-5 {
            bottom: 0.125rem; /* 2px */
        }

        .smm-left-0-5 {
            left: 0.125rem; /* 2px */
        }

        .smm-inset-1 {
            inset: 0.25rem;
        }

        /* 4px */
        .smm-inset-x-1 {
            left: 0.25rem;
            right: 0.25rem;
        }

        /* 4px */
        .smm-inset-y-1 {
            top: 0.25rem;
            bottom: 0.25rem;
        }

        /* 4px */
        .smm-start-1 {
            inset-inline-start: 0.25rem;
        }

        /* 4px */
        .smm-end-1 {
            inset-inline-end: 0.25rem;
        }

        /* 4px */
        .smm-top-1 {
            top: 0.25rem;
        }

        /* 4px */
        .smm-right-1 {
            right: 0.25rem;
        }

        /* 4px */
        .smm-bottom-1 {
            bottom: 0.25rem;
        }

        /* 4px */
        .smm-left-1 {
            left: 0.25rem;
        }

        /* 4px */
        .smm-top-auto {
            top: auto;
        }

        .smm-top-1-2 {
            top: 50%;
        }

        .smm-top-1-3 {
            top: 33.333333%;
        }

        .smm-top-2-3 {
            top: 66.666667%;
        }

        .smm-top-1-4 {
            top: 25%;
        }

        .smm-top-2-4 {
            top: 50%;
        }

        .smm-top-3-4 {
            top: 75%;
        }

        .smm-top-full {
            top: 100%;
        }

        .smm-right-auto {
            right: auto;
        }

        .smm-right-1-2 {
            right: 50%;
        }

        .smm-right-1-3 {
            right: 33.333333%;
        }

        .smm-right-2-3 {
            right: 66.666667%;
        }

        .smm-right-1-4 {
            right: 25%;
        }

        .smm-right-2-4 {
            right: 50%;
        }

        .smm-right-3-4 {
            right: 75%;
        }

        .smm-right-full {
            right: 100%;
        }

        .smm-bottom-auto {
            bottom: auto;
        }

        .smm-bottom-1-2 {
            bottom: 50%;
        }

        .smm-bottom-1-3 {
            bottom: 33.333333%;
        }

        .smm-bottom-2-3 {
            bottom: 66.666667%;
        }

        .smm-bottom-1-4 {
            bottom: 25%;
        }

        .smm-bottom-2-4 {
            bottom: 50%;
        }

        .smm-bottom-3-4 {
            bottom: 75%;
        }

        .smm-bottom-full {
            bottom: 100%;
        }

        .smm-left-auto {
            left: auto;
        }

        .smm-left-1-2 {
            left: 50%;
        }

        .smm-left-1-3 {
            left: 33.333333%;
        }

        .smm-left-2-3 {
            left: 66.666667%;
        }

        .smm-left-1-4 {
            left: 25%;
        }

        .smm-left-2-4 {
            left: 50%;
        }

        .smm-left-3-4 {
            left: 75%;
        }

        .smm-left-full {
            left: 100%;

        }

        /* nhl-header */
        .top-nav {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            background-color: #f3f5f9;

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #FFF;
            height: 50px;
            padding: 1em;
        }

        .menu {
            display: flex;
            flex-direction: row;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu > li {
            margin: 0 1rem;
            overflow: hidden;
        }

        .menu-button-container {
            display: none;
            height: 100%;
            width: 30px;
            cursor: pointer;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #menu-toggle {
            display: none;
        }

        .menu-button,
        .menu-button::before,
        .menu-button::after {
            display: block;
            background-color: black;
            position: absolute;
            height: 4px;
            width: 30px;
            transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
            border-radius: 2px;
        }

        .menu-button::before {
            content: '';
            margin-top: -8px;
            background-color: black;
        }

        .menu-button::after {
            content: '';
            margin-top: 8px;
            background-color: black;
        }

        #menu-toggle:checked + .menu-button-container .menu-button::before {
            margin-top: 0px;
            transform: rotate(405deg);
        }

        #menu-toggle:checked + .menu-button-container .menu-button {
            background: rgba(255, 255, 255, 0);
        }

        #menu-toggle:checked + .menu-button-container .menu-button::after {
            margin-top: 0px;
            transform: rotate(-405deg);
        }
    }
    @media (max-width: 700px) {
        .menu-button-container {
            display: flex;

        }
        .menu {
            position: absolute;
            top: 0;
            margin-top: 50px;
            left: 0;
            flex-direction: column;
            width: 100%;
            justify-content: center;
            align-items: center;
        }
        #menu-toggle ~ .menu li {
            height: 0;
            margin: 0;
            padding: 0;
            border: 0;
            transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
        }
        #menu-toggle:checked ~ .menu li {
            border: 1px solid #333;
            height: 2.5em;
            padding: 0.5em;
            transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
        }
        .menu > li {
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 0.5em 0;
            width: 100%;
            color: white;
            background-color: #222;
        }
        .menu > li:not(:last-child) {
            border-bottom: 1px solid #444;
        }
    }
</style>