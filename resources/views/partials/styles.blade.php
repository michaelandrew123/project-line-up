
@vite('resources/css/app.css')


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body{
        font-family:  'Maven Pro', sans-serif 
    }
    .txt-logo{
        font-family: 'Mouse Memoirs', sans-serif
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
         padding-left: 2rem;   
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
  
    @media (max-width: 768px) {

        
        ul#mobile-2nd-mnav li:first-child{
            /* border-left: none !important;     */
        }    
        
        ul#mobile-2nd-mnav li:last-child{
            /* border-right: none !important;     */


        }    
        
        ul#mobile-2nd-mnav li{
            /* border-right: 1px solid white;   */
            position: relative;  
        }      

        ul#mobile-2nd-mnav > #nav-active:after{ 
            content: '';
            display: block;
            border-top: 4px solid rgb(14 165 233);  
        } 


        ul#mobile-2nd-mnav li > a{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); 
        }    

        
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




        .smm-right-10{	right: 2.5rem; /* 40px */}


        .smm-z-0	{z-index: 0;}
        .smm-z-10	{z-index: 10;}
        .smm-z-20	{z-index: 20;}
        .smm-z-30	{z-index: 30;}
        .smm-z-40	{z-index: 40;}
        .smm-z-50	{z-index: 50;}
        .smm-z-auto	{z-index: auto;}

        .smm-inset-0{top: 0px;}
        .smm-right: {0px;}
        .smm-bottom: {0px;}
        .smm-left: {0px;}
        .smm-inset-x-0	{left: 0px;}
        .smm-right: {0px;}
        .smm-inset-y-0	{top: 0px;}
        .smm-bottom: {0px;}
        .smm-top-0	{top: 0px;}
        .smm-right-0	{right: 0px;}
        .smm-bottom-0	{bottom: 0px;}
        .smm-left-0	{left: 0px;}
        .smm-inset-px	{top: 1px;}
        .smm-right: {1px;}
        .smm-bottom: {1px;}
        .smm-left: {1px;*/}
        .smm-inset-x-px	{left: 1px;}
        .smm-right: {1px;}
        .smm-inset-y-px	{top: 1px;}
        .smm-bottom: {1px;}
        .smm-top-px	{top: 1px;}
        .smm-right-px	{right: 1px;}
        .smm-bottom-px	{bottom: 1px;}
        .smm-left-px	{left: 1px;}
        .smm-inset-0.5	{top: 0.125rem; /* 2px */}
        .smm-right: {0.125rem; /* 2px */}
        .smm-bottom: {0.125rem; /* 2px */}
        .smm-left: {0.125rem; /* 2px */}
        .smm-inset-x-0.5	l{eft: 0.125rem; /* 2px */}
        .smm-right: {0.125rem; /* 2px */}
        .smm-inset-y-0.5	{top: 0.125rem; /* 2px */}
        .smm-bottom: {0.125rem; /* 2px */}
        .smm-top-0.5	{top: 0.125rem; /* 2px */}
        .smm-right-0.5	{right: 0.125rem; /* 2px */}
        .smm-bottom-0.5	{bottom: 0.125rem; /* 2px */}
        .smm-left-0.5	{left: 0.125rem; /* 2px */}
        .smm-inset-1	{top: 0.25rem; /* 4px */}
        .smm-right: {0.25rem; /* 4px */}
        .smm-bottom: {0.25rem; /* 4px */}
        .smm-left: {0.25rem; /* 4px */}
        .smm-inset-x-1	{left: 0.25rem; /* 4px */}
        .smm-right: {0.25rem; /* 4px */}
        .smm-inset-y-1	{top: 0.25rem; /* 4px */}
        .smm-bottom: {0.25rem; /* 4px */}
        .smm-top-1	{top: 0.25rem; /* 4px */}
        .smm-right-1	{right: 0.25rem; /* 4px */}
        .smm-bottom-1	{bottom: 0.25rem; /* 4px */}
        .smm-left-1	{left: 0.25rem; /* 4px */}
        .smm-inset-1.5	{top: 0.375rem; /* 6px */}
        .smm-right: {0.375rem; /* 6px */}
        .smm-bottom: {0.375rem; /* 6px */}
        .smm-left: {0.375rem; /* 6px */}
        .smm-inset-x-1.5	{left: 0.375rem; /* 6px */}
        .smm-right: {0.375rem; /* 6px */}
        .smm-inset-y-1.5	{top: 0.375rem; /* 6px */}
        .smm-bottom: {0.375rem; /* 6px */}
        .smm-top-1.5	{top: 0.375rem; /* 6px */}
        .smm-right-1.5	{right: 0.375rem; /* 6px */}
        .smm-bottom-1.5	{bottom: 0.375rem; /* 6px */}
        .smm-left-1.5	{left: 0.375rem; /* 6px */}
        .smm-inset-2	{top: 0.5rem; /* 8px */}
        .smm-right: {0.5rem; !* 8px */}
        .smm-bottom: {0.5rem; /* 8px */}
        .smm-left: {0.5rem; /* 8px */}
        .smm-inset-x-2	{left: 0.5rem; /* 8px */}
        .smm-right: {0.5rem; /* 8px */}
        .smm-inset-y-2	{top: 0.5rem; /* 8px */}
        .smm-bottom: {0.5rem; /* 8px */}
        .smm-top-2	{top: 0.5rem; /* 8px */}
        .smm-right-2	{right: 0.5rem; /* 8px */}
        .smm-bottom-2	{bottom: 0.5rem; /* 8px */}
        .smm-left-2	{left: 0.5rem; /* 8px */}
        .smm-inset-2.5	{top: 0.625rem; /* 10px */}
        .smm-right: {0.625rem; /* 10px */}
        .smm-bottom: {0.625rem; /* 10px */}
        .smm-left: {0.625rem; /* 10px */}
        .smm-inset-x-2.5	{left: 0.625rem; /* 10px */}
        .smm-right: {0.625rem; /* 10px */}
        .smm-inset-y-2.5	{top: 0.625rem; /* 10px */}
        .smm-bottom: {0.625rem; /* 10px */}
        .smm-top-2-5	{top: 0.625rem;}
        .smm-right-2.5	{right: 0.625rem; /* 10px */}
        .smm-bottom-2.5	{bottom: 0.625rem; /* 10px */}
        .smm-left-2.5	{left: 0.625rem; /* 10px */}
        .smm-inset-3	{top: 0.75rem; /* 12px */}
        .smm-right: {0.75rem; /* 12px */}
        .smm-bottom: {0.75rem; /* 12px */}
        .smm-left: {0.75rem; /* 12px */}
        .smm-inset-x-3	{left: 0.75rem; /* 12px */}
        .smm-right: {0.75rem; /* 12px */}
        .smm-inset-y-3	{top: 0.75rem; /* 12px */}
        .smm-bottom: {0.75rem; /* 12px */}
        .smm-top-3	{top: 0.75rem; /* 12px */}
        .smm-right-3	{right: 0.75rem; /* 12px */}
        .smm-bottom-3	{bottom: 0.75rem; /* 12px */}
        .smm-left-3	{left: 0.75rem; /* 12px */}
        .smm-inset-3.5	{top: 0.875rem; /* 14px */}
        .smm-right: {0.875rem; /* 14px */}
        .smm-bottom: {0.875rem; /* 14px */}
        .smm-left: {0.875rem; /* 14px */}
        .smm-inset-x-3.5	{left: 0.875rem; /* 14px */}
        .smm-right: {0.875rem; /* 14px */}
        .smm-inset-y-3.5	{top: 0.875rem; /* 14px */}
        .smm-bottom: {0.875rem; /* 14px */}
        .smm-top-3.5	{top: 0.875rem; /* 14px */}
        .smm-right-3.5	{right: 0.875rem; /* 14px */}
        .smm-bottom-3.5	{bottom: 0.875rem; /* 14px */}
        .smm-left-3.5	{left: 0.875rem; /* 14px */}
        .smm-inset-4	{top: 1rem; /* 16px */}
        .smm-right: {1rem; * 16px */}
        .smm-bottom: {1rem; /* 16px */}
        .smm-left: {1rem; /* 16px */}
        .smm-inset-x-4	{left: 1rem; /* 16px */}
        .smm-right: {1rem; /* 16px */}
        .smm-inset-y-4	{top: 1rem; /* 16px */}
        .smm-bottom: {1rem; /* 16px */}
        .smm-top-4	{top: 1rem; /* 16px */}
        .smm-right-4	{right: 1rem; /* 16px */}
        .smm-bottom-4	{bottom: 1rem; /* 16px */}
        .smm-left-4	left: {1rem; /* 16px */}
        .smm-inset-5	{top: 1.25rem; /* 20px */}
        .smm-right: {1.25rem; /* 20px */}
        .smm-bottom: {1.25rem; /* 20px */}
        .smm-left: {1.25rem; /* 20px */}
        .smm-inset-x-5	{left: 1.25rem; /* 20px */}
        .smm-right: {1.25rem; /* 20px */}
        .smm-inset-y-5	{top: 1.25rem; /* 20px */}
        .smm-bottom: {1.25rem; /* 20px */}
        .smm-top-5	{top: 1.25rem; /* 20px */}
        .smm-right-5	{right: 1.25rem; /* 20px */}
        .smm-bottom-5	{bottom: 1.25rem; /* 20px */}
        .smm-left-5	{left: 1.25rem; /* 20px */}
        .smm-inset-6	{top: 1.5rem; /* 24px */}
        .smm-right: {1.5rem; /* 24px */}
        .smm-bottom: {1.5rem; /* 24px */}
        .smm-left: {1.5rem; /* 24px */}
        .smm-inset-x-6	{left: 1.5rem; /* 24px */}
        .smm-right: {1.5rem; /* 24px */}
        .smm-inset-y-6	{top: 1.5rem; /* 24px */}
        .smm-bottom: {1.5rem; /* 24px */}
        .smm-top-6	{top: 1.5rem; /* 24px */}
        .smm-right-6	{right: 1.5rem; /* 24px */}
        .smm-bottom-6	{bottom: 1.5rem; /* 24px */}
        .smm-left-6	{left: 1.5rem; /* 24px */}
        .smm-inset-7	{top: 1.75rem; /* 28px */}
        .smm-right: {1.75rem; /* 28px */}
        .smm-bottom: {1.75rem; /* 28px */}
        .smm-left: {1.75rem; /* 28px */}
        .smm-inset-x-7	{left: 1.75rem; /* 28px */}
        .smm-right: {1.75rem; /* 28px */}
        .smm-inset-y-7	{top: 1.75rem; /* 28px */}
        .smm-bottom: {1.75rem; /* 28px */}
        .smm-top-7	{top: 1.75rem; /* 28px */}
        .smm-right-7	{right: 1.75rem; /* 28px */}
        .smm-bottom-7	{bottom: 1.75rem; /* 28px */}
        .smm-left-7	{left: 1.75rem; /* 28px */}
        .smm-inset-8	{top: 2rem; /* 32px */}
        .smm-right: {2rem; /* 32px */}
        .smm-bottom: {2rem; /* 32px */}
        .smm-left: {2rem; /* 32px */}
        .smm-inset-x-8	{left: 2rem; /* 32px */}
        .smm-right: {2rem; /* 32px */}
        .smm-inset-y-8	{top: 2rem; /* 32px */}
        .smm-bottom: {2rem; /* 32px */}
        .smm-top-8	{top: 2rem; /* 32px */}
        .smm-right-8	{right: 2rem;}
        .smm-bottom-8	{bottom: 2rem; /* 32px */}
        .smm-left-8	{left: 2rem; /* 32px */}
         .smm-inset-9	{top: 2.25rem;}
        .smm-right: {2.25rem; /* 36px */}
        .smm-bottom: {2.25rem; /* 36px */}
        .smm-left: {2.25rem; /* 36px */}
        .smm-inset-x-9	{left: 2.25rem; /* 36px */}
        .smm-right: {2.25rem; /* 36px */}
        .smm-inset-y-9	{top: 2.25rem; /* 36px */}
        .smm-bottom: {2.25rem; /* 36px */}
        .smm-top-9	{top: 2.25rem; /* 36px */}
        .smm-right-9	{right: 2.25rem; /* 36px */}
        .smm-bottom-9	{bottom: 2.25rem; /* 36px */}
        .smm-left-9	{left: 2.25rem; /* 36px */}
        .smm-inset-10	{top: 2.5rem; /* 40px */}
        .smm-right: {2.5rem; /* 40px */}
        .smm-bottom: {2.5rem; /* 40px */}
        .smm-left: {2.5rem; /* 40px */}
        .smm-inset-x-10	{left: 2.5rem; /* 40px */}
        .smm-right: {2.5rem; /* 40px */}
        .smm-inset-y-10	{top: 2.5rem; /* 40px */}
        .smm-bottom: {2.5rem; /* 40px */}
        .smm-top-10	{top: 2.5rem;}
        .smm-right-10	{right: 2.5rem; /* 40px */}
        .smm-bottom-10	{bottom: 2.5rem; /* 40px */}
        .smm-left-10	{left: 2.5rem; /* 40px */}
        .smm-inset-11	{top: 2.75rem; /* 44px */}
        .smm-right: {2.75rem; /* 44px */}
        .smm-bottom: {2.75rem; /* 44px */}
        .smm-left: {2.75rem; /* 44px */}
        .smm-inset-x-11	{left: 2.75rem; /* 44px */}
        .smm-right: {2.75rem; /* 44px */}
        .smm-inset-y-11	{top: 2.75rem; /* 44px */}
        .smm-bottom: {2.75rem; /* 44px */}
        .smm-top-11	{top: 2.75rem; /* 44px */}
        .smm-right-11	{right: 2.75rem; /* 44px */}
        .smm-bottom-11	{bottom: 2.75rem; /* 44px */}
        .smm-left-11	{left: 2.75rem; /* 44px */}
        .smm-inset-12	{top: 3rem; /* 48px */}
        .smm-right: {3rem; /* 48px */}
        .smm-bottom: {3rem; /* 48px */}
        .smm-left: {3rem; /* 48px */}
        .smm-inset-x-12	{left: 3rem; /* 48px */}
        .smm-right: {3rem; /* 48px */}
        .smm-inset-y-12	{top: 3rem;}
        .smm-bottom: {3rem; /* 48px */}
        .smm-top-12	{top: 3rem; /* 48px */}
        .smm-right-12	{right: 3rem; /* 48px */}
        .smm-bottom-12	{bottom: 3rem; /* 48px */}
        .smm-left-12	{left: 3rem; /* 48px */}
        .smm-inset-14	{top: 3.5rem; /* 56px */}
        .smm-right: {3.5rem; /* 56px */}
        .smm-bottom: {3.5rem; /* 56px */}
        .smm-left: {3.5rem; /* 56px */}
        .smm-inset-x-14	{left: 3.5rem; /* 56px */}
        .smm-right: {3.5rem; /* 56px */}
        .smm-inset-y-14	{top: 3.5rem; /* 56px */}
        .smm-bottom: {3.5rem; /* 56px */}
        .smm-top-14	{top: 3.5rem; /* 56px */}
        .smm-right-14	{right: 3.5rem; /* 56px */}
        .smm-bottom-14	{bottom: 3.5rem; /* 56px */}
        .smm-left-14	{left: 3.5rem; /* 56px */}
        .smm-inset-16	{top: 4rem; /* 64px */}
        .smm-right: {4rem; /* 64px */}
        .smm-bottom: {4rem; /* 64px */}
        .smm-left: {4rem; /* 64px */}
        .smm-inset-x-16	{left: 4rem; /* 64px */}
        .smm-right: {4rem; /* 64px */}
        .smm-inset-y-16	{top: 4rem; /* 64px */}
        .smm-bottom: {4rem; /* 64px */}
        .smm-top-16	{top: 4rem; /* 64px */}
        .smm-right-16	{right: 4rem; /* 64px */}
        .smm-bottom-16	{bottom: 4rem; /* 64px */}
        .smm-left-16	{left: 4rem; /* 64px */}
        .smm-inset-20	{top: 5rem; /* 80px */}
        .smm-right: {5rem; /* 80px */}
        .smm-bottom: {5rem; /* 80px */}
        .smm-left: {5rem; /* 80px */}
        .smm-inset-x-20	{left: 5rem; /* 80px */}
        .smm-right: {5rem; /* 80px */}
        .smm-inset-y-20	{top: 5rem; /* 80px */}
        .smm-bottom: {5rem; /* 80px */}
        .smm-top-20	{top: 5rem; /* 80px */}
        .smm-right-20	{right: 5rem; /* 80px */}
        .smm-bottom-20	{bottom: 5rem; /* 80px */}
        .smm-left-20	{left: 5rem; /* 80px */}
        .smm-inset-24	{top: 6rem; /* 96px */}
        .smm-right: {6rem; /* 96px */}
        .smm-bottom: {6rem; /* 96px */}
        .smm-left: {6rem; /* 96px */}
        .smm-inset-x-24	{left: 6rem; /* 96px */}
        .smm-right: {6rem; /* 96px */}
        .smm-inset-y-24	{top: 6rem; /* 96px */}
        .smm-bottom: {6rem; /* 96px */}
        .smm-top-24	{top: 6rem; /* 96px */}
        .smm-right-24	{right: 6rem; /* 96px */}
        .smm-bottom-24	{bottom: 6rem; /* 96px */}
        .smm-left-24	{left: 6rem; /* 96px */}
        .smm-inset-28	{top: 7rem; /* 112px */}
        .smm-right: {7rem; /* 112px */}
        .smm-bottom: {7rem; /* 112px */}
        .smm-left: {7rem; /* 112px */}
        .smm-inset-x-28	{left: 7rem; /* 112px */}
        .smm-right: {7rem; /* 112px */}
        .smm-inset-y-28	{top: 7rem; /* 112px */}
        .smm-bottom: {7rem; /* 112px */}
        .smm-top-28	{top: 7rem; /* 112px */}
        .smm-right-28	{right: 7rem; /* 112px */}
        .smm-bottom-28	{bottom: 7rem; /* 112px */}
        .smm-left-28	{left: 7rem; /* 112px */}
        .smm-inset-32	{top: 8rem; /* 128px */}
        .smm-right: {8rem; /* 128px */}
        .smm-bottom: {8rem; /* 128px */}
        .smm-left: {8rem; /* 128px */}
        .smm-inset-x-32	{left: 8rem; /* 128px */}
        .smm-right: {8rem; /* 128px */}
        .smm-inset-y-32	{top: 8rem; /* 128px */}
        .smm-bottom: {8rem; /* 128px */}
        .smm-top-32	{top: 8rem; /* 128px */}
        .smm-right-32	{right: 8rem; /* 128px */}
        .smm-bottom-32	{bottom: 8rem; /* 128px */}
        .smm-left-32	{left: 8rem; /* 128px */}
        .smm-inset-36	{top: 9rem; /* 144px */}
        .smm-right: {9rem; /* 144px */}
        .smm-bottom: {9rem; /* 144px */}
        .smm-left: {9rem; /* 144px */}
        .smm-inset-x-36	{left: 9rem; /* 144px */}
        .smm-right: {9rem; /* 144px */}
        .smm-inset-y-36	{top: 9rem; /* 144px */}
        .smm-bottom: {9rem; /* 144px */}
        .smm-top-36	{top: 9rem; /* 144px */}
        .smm-right-36	{right: 9rem; /* 144px */}
        .smm-bottom-36	{bottom: 9rem; /* 144px */}
        .smm-left-36	{left: 9rem; /* 144px */}
        .smm-inset-40	{top: 10rem; /* 160px */}
        .smm-right: {10rem; /* 160px */}
        .smm-bottom: {10rem; /* 160px */}
        .smm-left: {10rem; /* 160px */}
        .smm-inset-x-40	{left: 10rem; /* 160px */}
        .smm-right: {10rem; /* 160px */}
        .smm-inset-y-40	{top: 10rem; /* 160px */}
        .smm-bottom: {10rem; /* 160px */}
        .smm-top-40	{top: 10rem; /* 160px */}
        .smm-right-40	{right: 10rem; /* 160px */}
        .smm-bottom-40	{bottom: 10rem; /* 160px */}
        .smm-left-40	{left: 10rem; /* 160px */}
        .smm-inset-44	{top: 11rem; /* 176px */}
        .smm-right: {11rem; /* 176px */}
        .smm-bottom: {11rem; /* 176px */}
        .smm-left: {11rem; /* 176px */}
        .smm-inset-x-44	{left: 11rem; /* 176px */}
        .smm-right: {11rem; /* 176px */}
        .smm-inset-y-44	{top: 11rem; /* 176px */}
        .smm-bottom: {11rem; /* 176px */}
        .smm-top-44	{top: 11rem; /* 176px */}
        .smm-right-44	{right: 11rem; /* 176px */}
        .smm-bottom-44	{bottom: 11rem; /* 176px */}
        .smm-left-44	{left: 11rem; /* 176px */}
        .smm-inset-48	{top: 12rem; /* 192px */}
        .smm-right: {12rem; /* 192px */}
        .smm-bottom: {12rem; /* 192px */}
        .smm-left: {12rem; /* 192px */}
        .smm-inset-x-48	{left: 12rem; /* 192px */}
        .smm-right: {12rem; /* 192px */}
        .smm-inset-y-48	{top: 12rem; /* 192px */}
        .smm-bottom: {12rem; /* 192px */}
        .smm-top-48	{top: 12rem; /* 192px */}
        .smm-right-48	{right: 12rem; /* 192px */}
        .smm-bottom-48	{bottom: 12rem; /* 192px */}
        .smm-left-48	{left: 12rem; /* 192px */}
        .smm-inset-52	{top: 13rem; /* 208px */}
        .smm-right: {13rem; /* 208px */}
        .smm-bottom: {13rem; /* 208px */}
        .smm-left: {13rem; /* 208px */}
        .smm-inset-x-52	{left: 13rem; /* 208px */}
        .smm-right: {13rem; /* 208px */}
        .smm-inset-y-52	{top: 13rem; /* 208px */}
        .smm-bottom: {13rem; /* 208px */}
        .smm-top-52	{top: 13rem; /* 208px */}
        .smm-right-52	{right: 13rem; /* 208px */}
        .smm-bottom-52	{bottom: 13rem; /* 208px */}
        .smm-left-52	{left: 13rem; /* 208px */}
        .smm-inset-56	{top: 14rem; /* 224px */}
        .smm-right: {14rem; /* 224px */}
        .smm-bottom: {14rem; /* 224px */}
        .smm-left: {14rem; /* 224px */}
        .smm-inset-x-56	{left: 14rem; /* 224px */}
        .smm-right: {14rem; /* 224px */}
        .smm-inset-y-56	{top: 14rem; /* 224px */}
        .smm-bottom: {14rem; /* 224px */}
        .smm-top-56	{top: 14rem; /* 224px */}
        .smm-right-56	{right: 14rem; /* 224px */}
        .smm-bottom-56	{bottom: 14rem; /* 224px */}
        .smm-left-56	{left: 14rem; /* 224px */}
        .smm-inset-60	{top: 15rem; /* 240px */}
        .smm-right: {15rem; /* 240px */}
        .smm-bottom: {15rem; /* 240px */}
        .smm-left: {15rem; /* 240px */}
        .smm-inset-x-60	{left: 15rem; /* 240px */}
        .smm-right: {15rem; /* 240px */}
        .smm-inset-y-60	{top: 15rem; /* 240px */}
        .smm-bottom: {15rem; /* 240px */}
        .smm-top-60	{top: 15rem; */ 240px */}
        .smm-right-60	{right: 15rem; /* 240px */}
        .smm-bottom-60	{bottom: 15rem; /* 240px */}
        .smm-left-60	{left: 15rem; /* 240px */}
        .smm-inset-64	{top: 16rem; /* 256px */}
        .smm-right: {16rem; /* 256px */}
        .smm-bottom: {16rem; /* 256px */}
        .smm-left: {16rem; /* 256px */}
        .smm-inset-x-64	{left: 16rem; /* 256px */}
        .smm-right: {16rem; /* 256px */}
        .smm-inset-y-64	{top: 16rem; /* 256px */}
        .smm-bottom: {16rem; /* 256px */}
        .smm-top-64	{top: 16rem; /* 256px */}
        .smm-right-64	{right: 16rem; /* 256px */}
        .smm-bottom-64	{bottom: 16rem; /* 256px */}
        .smm-left-64	{left: 16rem; /* 256px */}
        .smm-inset-72	{top: 18rem; /* 288px */}
        .smm-right: {18rem; /* 288px */}
        .smm-bottom: {18rem; /* 288px */}
        .smm-left: {18rem; /* 288px */}
        .smm-inset-x-72	{left: 18rem; /* 288px */}
        .smm-right: {18rem; /* 288px */}
        .smm-inset-y-72	{top: 18rem; /* 288px */}
        .smm-bottom: {18rem; /* 288px */}
        .smm-top-72	{top: 18rem; /* 288px */}
        .smm-right-72	{right: 18rem; /* 288px */}
        .smm-bottom-72	{bottom: 18rem; /* 288px */}
        .smm-left-72	{left: 18rem; /* 288px */}
        .smm-inset-80	{top: 20rem; /* 320px */}
        .smm-right: {20rem; /* 320px */}
        .smm-bottom: {20rem; /* 320px */}
        .smm-left: {20rem; /* 320px */}
        .smm-inset-x-80	{left: 20rem; /* 320px */}
        .smm-right: {20rem; /* 320px */}
        .smm-inset-y-80	{top: 20rem; /* 320px */}
        .smm-bottom: {20rem; /* 320px */}
        .smm-top-80	{top: 20rem; /* 320px */}
        .smm-right-80	{right: 20rem; /* 320px */}
        .smm-bottom-80	{bottom: 20rem; /* 320px */}
        .smm-left-80	{left: 20rem; /* 320px */}
        .smm-inset-96	{top: 24rem; /* 384px */}
        .smm-right: {24rem; /* 384px */}
        .smm-bottom: {24rem; /* 384px */}
        .smm-left: {24rem; /* 384px */}
        .smm-inset-x-96	{left: 24rem; /* 384px */}
        .smm-right: {24rem; /* 384px */}
        .smm-inset-y-96	{top: 24rem; !* 384px */}
        .smm-bottom: {24rem; /* 384px */}
        .smm-top-96	{top: 24rem; /* 384px */}
        .smm-right-96	{right: 24rem; /* 384px */}
        .smm-bottom-96	{bottom: 24rem; /* 384px */}
        .smm-left-96	{left: 24rem; /* 384px */}
        .smm-inset-auto	{top: auto;}
        .smm-right: {auto;}
        .smm-bottom: {auto;}
        .smm-left: {auto;}
        .smm-inset-1-2	{top: 50%;}
        .smm-right: {50%;}
        .smm-bottom: {50%;}
        .smm-left: {50%;}
        .smm-inset-1-3	{top: 33.333333%;}
        .smm-right: {33.333333%;}
        .smm-bottom: {33.333333%;}
        .smm-left: {33.333333%;}
        .smm-inset-2-3	{top: 66.666667%;}
        .smm-right: {66.666667%;}
        .smm-bottom: {66.666667%;}
        .smm-left: {66.666667%;}
        .smm-inset-1-4	{top: 25%;}
        .smm-right: {25%;}
        .smm-bottom: {25%;}
        .smm-left: {25%;}
        .smm-inset-2-4	{top: 50%;}
        .smm-right: {50%;}
        .smm-bottom: {50%;}
        .smm-left: {50%;}
        .smm-inset-3-4	{top: 75%;}
        .smm-right: {75%;}
        .smm-bottom: {75%;}
        .smm-left: {75%;}
        .smm-inset-full	{top: 100%;}
        .smm-right: {100%;}
        .smm-bottom: {100%;}
        .smm-left: {100%;}
        .smm-inset-x-auto	{left: auto;}
        .smm-right: {auto;}
        .smm-inset-x-1-2	{left: 50%;}
        .smm-right: {50%;}
        .smm-inset-x-1-3	{left: 33.333333%;}
        .smm-right: {33.333333%;}
        .smm-inset-x-2-3	{left: 66.666667%;}
        .smm-right: {66.666667%;}
        .smm-inset-x-1-4	{left: 25%;}
        .smm-right: {25%;}
        .smm-inset-x-2-4	{left: 50%;}
        .smm-right: {50%;}
        .smm-inset-x-3-4	{left: 75%;}
        .smm-right: {75%;}
        .smm-inset-x-full	{left: 100%;}
        .smm-right: {100%;}
        .smm-inset-y-auto	{top: auto;}
        .smm-bottom: {auto;}
        .smm-inset-y-1-2	{top: 50%;}
        .smm-bottom: {50%;}
        .smm-inset-y-1-3	{top: 33.333333%;}
        .smm-bottom: {33.333333%;}
        .smm-inset-y-2-3	{top: 66.666667%;}
        .smm-bottom: {66.666667%;}
        .smm-inset-y-1-4	{top: 25%;}
        .smm-bottom: {25%;}
        .smm-inset-y-2-4	{top: 50%;}
        .smm-bottom: {50%;}
        .smm-inset-y-3-4	{top: 75%;}
        .smm-bottom: {75%;}
        .smm-inset-y-full	{top: 100%;}
        .smm-bottom: {100%;}
        .smm-top-auto	{top: auto;}
        .smm-top-1-2	{top: 50%;}
        .smm-top-1-3	{top: 33.333333%;}
        .smm-top-2-3	{top: 66.666667%;}
        .smm-top-1-4	{top: 25%;}
        .smm-top-2-4	{top: 50%;}
        .smm-top-3-4	{top: 75%;}
        .smm-top-full	{top: 100%;}
        .smm-right-auto	{right: auto;}
        .smm-right-1-2	{right: 50%;}
        .smm-right-1-3	{right: 33.333333%;}
        .smm-right-2-3	{right: 66.666667%;}
        .smm-right-1-4	{right: 25%;}
        .smm-right-2-4	{right: 50%;}
        .smm-right-3-4	{right: 75%;}
        .smm-right-full	{right: 100%;}
        .smm-bottom-auto	{bottom: auto;}
        .smm-bottom-1-2	{bottom: 50%;}
        .smm-bottom-1-3	{bottom: 33.333333%;}
        .smm-bottom-2-3	{bottom: 66.666667%;}
        .smm-bottom-1-4	{bottom: 25%;}
        .smm-bottom-2-4	{bottom: 50%;}
        .smm-bottom-3-4	{bottom: 75%;}
        .smm-bottom-full	{bottom: 100%;}
        .smm-left-auto	{left: auto;}
        .smm-left-1-2	{left: 50%;}
        .smm-left-1-3	{left: 33.333333%;}
        .smm-left-2-3	{left: 66.666667%;}
        .smm-left-1-4	{left: 25%;}
        .smm-left-2-4	{left: 50%;}
        .smm-left-3-4	{left: 75%;}
        .smm-left-full	left: 100%;



    }
</style>