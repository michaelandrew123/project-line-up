
@vite('resources/css/app.css')


<style>


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
    .menu-white-text{
        color: white !important;
    }
    @media (max-width: 639px) {
        .smm-flex{
            display: flex;

        }
        .smm-flex-row{
            flex-direction: row;
        }


        .smm-flex-row-reverse{flex-direction: row-reverse;}

        .smm-flex-col{
            flex-direction: column;
        }
        .smm-justify-start	{
            justify-content: flex-start
        }
        .smm-justify-end	{justify-content: flex-end}
        .smm-justify-center	{justify-content: center}
        .smm-justify-between	{justify-content: space-between}
        .smm-justify-around	{justify-content: space-around}
        .smm-justify-evenly	{justify-content: space-evenly}
        .smm-items-center	{align-items: center}
        .smm-items-start{ align-items: flex-start;}
        .smm-block	{display: block;}
        .smm-hidden	{display: none;}
        .smm-flex-wrap	{flex-wrap: wrap;}



        .smm-static	{position: static}
        .smm-fixed	{position: fixed}
        .smm-absolute	{position: absolute}
        .smm-relative	{position: relative}
        .smm-sticky	{position: sticky}

        .smm-gap-2 { gap: 0.5rem; }







        .smm-w-1-12	{ width: 8.333333%;}
        .smm-w-2-12	{ width: 16.666667%;}
        .smm-w-3-12	{ width: 25%;}
        .smm-w-4-12 {	width: 33.333333%;}
        .smm-w-5-12	{ width: 41.666667%;}
        .smm-w-6-12	{ width: 50%;}
        .smm-w-7-12	{ width: 58.333333%;}
        .smm-w-8-12	{ width: 66.666667%;}
        .smm-w-9-12	{ width: 75%;}
        .smm-w-10-12{	width: 83.333333%;}
        .smm-w-11-12{	width: 91.666667%;}
        .smm-w-full	{width: 100%;}
        .smm-p-0{padding: 0px;}
        .smm-m-auto{ margin: auto}
    }
</style>