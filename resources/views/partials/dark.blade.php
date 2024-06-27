
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
        /*color: #fff;*/
    } /* #9b59b6 */

    /*body.dark .starting-goalies-away-view-card{*/

    /*color: #38b6ff*/
    /*}*/


    body.dark .starting-goalies-away-view-card,
    body.dark .starting-goalies-view-card,
    body.dark .sg-border-dark-mode,
    body.dark .border-dark-mode,
    body.dark .matchup-border-dark-mode{
        border: 1px solid #38B6FF !important;
    }
    body.dark .support a,
    body.dark a,
    body.dark div,
    body.dark h1,
    body.dark h2,
    body.dark h3,
    body.dark h4,
    body.dark h5,
    body.dark .modal-center,
    body.dark .modal-center h1,
    body.dark .modal-center div,
    body.dark .modal-center p,
    body.dark .modal-center span,
    body.dark .starting-goalies-away-view-card span
    {
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
    .modal-center{
        color: #000;
        background-color: #fff;
    }
    body.dark #search-nhl-home,
    body.dark #search-home,
    body.dark #sg-current-date,
    body.dark .card-wd,
    body.dark .select-option-dm,
    body.dark #item-content,
    body.dark #item-search-content,
    body.dark .modal-center
    {
        background-color: #36383b !important;
        color: #fff !important;
    }

    body.dark .card-wd-1,
    body.dark .header-starting-goalies-mobile{
        background-color: rgb(24, 26, 27) !important;
    }

    body.dark #prev-slide > span > svg > path,
    body.dark #next-slide > span > svg > path,
    body.dark .dark-menu-font{
        color: white !important;
    }

    .font-menu-active{
        color: #ffffff !important;
    }
    .menu-font{
        color: #38b6ff;
    }
    .checkbox {
        opacity: 0;
        position: absolute;
    }
    .font-blue{
        color: #38B6FF !important;
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

    .fa-moon {color: #F6F1D5;}

    .fa-sun {color: #FCE570;}

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