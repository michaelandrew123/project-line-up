<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // let headers = new Headers();
    //
    // headers.append('Content-Type', 'application/json');
    // headers.append('Accept', 'application/json');
    // headers.append('Authorization', 'Basic ' + base64.encode(username + ":" +  password));
    // headers.append('Origin','http://localhost:3000');
    //
    // fetch('https://example.com/movies.json', function(){
    //     mode: 'cors',
    //         credentials: 'include',
    //         method: 'POST',
    //         headers: headers
    //
    //
    // })
    //     .then((response) => response.json())
    // .then((data) => console.log(data));
    //
    // Home/Highlights-function
     $(".link").hover(function(){
        $(this).css("border-left", "3px solid #045473");
        }, function(){
        $(this).css("border-left", "none");
    });

    //   header logo
    $("div#main-menu1 > div > a, div#main-menu2 > div > a" ).hover(function() {  
        var data = $(this).attr('rel'); 
        $("a > div.active").removeClass('active'); 
        $("a > div."+data).addClass('active'); 
        $("#sub-menu > ul.active").removeClass('active');
        $("#sub-menu > ul."+data).addClass('active');  
    });

    // nhl line-combos sub link
     $('#sub-hed > .d-kings').on('click', function(){
      $('.d-kings').addClass('bg-[#1d9bf0]');
      $('.l-ups, .fnl, .sts').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .fnl').on('click', function(){
      $('.fnl').addClass('bg-[#1d9bf0]');
      $('.l-ups, .d-kings, .sts').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .sts').on('click', function(){
      $('.sts').addClass('bg-[#1d9bf0]');
      $('.l-ups, .d-kings, .fnl').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .l-ups').on('click', function(){
      $('.l-ups').addClass('bg-[#1d9bf0]');
      $('.sts, .d-kings, .fnl').removeClass('bg-[#1d9bf0]');
     });


    $('#sub-hed > .d-kings').on('click', function(){
        $('.drftking, .dk-price').removeClass('hidden');
        $('.fduel, .stat, .fl-price').addClass('hidden');
    });
    $('#sub-hed > .fnl').on('click', function(){
        $('.fduel, .fl-price').removeClass('hidden');
        $('.drftking, .stat, .dk-price').addClass('hidden');
    });
    $('#sub-hed > .sts').on('click', function(){
        $('.stat').removeClass('hidden');
        $('.drftking ,.fduel, .dk-price, .fl-price').addClass('hidden');
    });
    $('#sub-hed > .l-ups').on('click', function(){
        $('.drftking, .fduel, .stat, .dk-price, .fl-price').addClass('hidden');
    });
   
    // nhl line-combos sub link end

    $( "div#main-menu > div > a" ).on('click', function() {
   
 

        // $("div#main-menu > div > a > div").addClass('md:hidden');
        // $('.menu-white-text').removeClass('menu-white-text');
        // $(this).addClass('menu-white-text');
        // $( this ).find('div').removeClass('md:hidden');

        // var data = $(this).text();

        // var arrayData = data.replace(/\s{2,}/g, ' ').split(' ');

        // var arrayDataCombine='';
        // var j = 0;

        // for(var i = 0; i < arrayData.length; i++){
        //     if(arrayData[i] != '' && arrayData[i] != ' '){
        //         if(arrayData[i] != undefined){

        //             if(i == 1){
        //                 arrayDataCombine = arrayData[i].toLowerCase();
        //             }else{
        //                 arrayDataCombine += "-" + arrayData[i].toLowerCase();
        //             }
        //         }
        //     }

        // }

        // $('#sub-menu > ul.active').removeClass('active');
        // $('.'+arrayDataCombine).addClass('active');

    });


  
    // old toggle menu
    // $('#main-menu-mobile').on('touchstart', function(){
    //     $('#list-menu').toggleClass(' sm:hidden smm-hidden');
    // })
    
    $('#main-menu-mobile').on('touchstart', function(){
        $('#new-menu').toggleClass('hidden');
        
    });
   
    
    // var clickedTwice = 1; 
    // var currentRelAttr=""; 
    // $('#header-mobile-menu > div > a').on('touchstart', function(){
        


    //     console.log("Clicked me anytime: " + clickedTwice)
        
    //     $('.active-menu').removeClass('active-menu'); 
    //     var val = $(this).attr('rel'); 
        
        
    //     if(currentRelAttr != val){ 
    //           clickedTwice++;
    //             if(clickedTwice == 1){   
    //             if($('ul.'+val).hasClass('hidden')){ 
    //                 $('.active-menu').removeClass("hidden");
    //                 console.log('version1'+ clickedTwice);     
    //             }else{  
    //                 // $('.active-menu').addClass("hidden");
    //                 // console.log('version1'+ clickedTwice); 
    //                 // // $('.-icon-1').addClass("hidden"); 
    //                 // // $('.-icon-2').removeClass("hidden"); 
    //                 // clickedTwice = 1; 
    //             } 
    //             // $('.ul'+val).addClass('hidden');
    //             // $('.ul'+val).removeClass('hidden'); 
    //             // clickedTwice = 1; 
                
    //         }else{  
    //             console.log('version2'+ clickedTwice);
    //             if($('ul.'+val).hasClass('active-menu')){    
    //                 $('.active-menu').removeClass("active-menu");
    //                 clickedTwice = 1; 
    //                 $('.'+val+'-icon-1').removeClass('hidden');
    //                 $('.'+val+'-icon-2').addClass('hidden'); 
    //             }else{ 
    //                 $('.'+val).addClass("active-menu");  
    //             }
    //             // $('.'+val+'-icon-1').removeClass('hidden');
    //             // $('.'+val+'-icon-2').addClass('hidden');  
    //             // clickedTwice = 1;


    //             currentRelAttr = val; //new record for currebt rel attribute
    //             // clickedTwice=1; 
    //             //clickedTiceFunc(clickedTwice, val);
    //         } 
    //     }else{ 
    //         currentRelAttr = val;  
    //         if(clickedTwice == 1){   
    //             if($('ul.'+val).hasClass('active-menu')){  
    //                   $('.active-menu').removeClass("active-menu");
    //             }else{  
    //                 $('.'+val).addClass("active-menu"); 
    //             } 
    //             $('.'+val+'-icon-1').addClass('hidden');
    //             $('.'+val+'-icon-2').removeClass('hidden');  
    //             clickedTwice++; 
    //         }else{  
    //             if($('ul.'+val).hasClass('active-menu')){
    //                 $('.active-menu').removeClass("active-menu");
    //             }else{
    //                 $('.'+val).addClass("hidden");    
    //             } 
    //             $('.'+val+'-icon-1').removeClass('hidden');
    //             $('.'+val+'-icon-2').addClass('hidden');  
    //             clickedTwice = 1;
    //         } 
    //     }
         
    // });
    // $('div > a').on('touchstart', function(){
    //     $('.icon-plus').addClass('hidden');
    // });
    // $('a ' > ('rel')).on('touchstart', function(){
    //     $('.'+'-icon-2').removeClass('hidden');
    //     $('.'+'-icon-1').addClass('hidden');
    // });


   
    // header humberger button drop-down navbar
    var clickedTwice = 1; 
    var currentRelAttr=""; 
    $('#header-mobile-menu > ul > a').on('touchstart', function(){
        
     $('.'+val).toggleClass('active-menu', function(){
       if($('.'+val).hasClass('hidden')){
        $('.'+'-icon-1').addClass('hidden');
        $('.'+val+'-icon-2').removeClass('hidden');

       }
     });
         
        console.log(" Clicked me anytime: " + clickedTwice)
        console.log('image', $(this).attr('boss'))
        $(' .active-menu ').removeClass(' active-menu '); 
        var val = $(this).attr('rel');
        


         
        // reset negative to plus
        $( ".plus" ).each(function() {
           $( this ).css( "display", "block" );
         });
         $( ".negative" ).each(function() {
           $( this ).css( "display", "none" );
         });
     
        // show  and hide icon plus and negative
        var menu = $(this).attr('menu'); 
        $('#'+menu+' img:nth-child(1)').css('display','none')
        $('#'+menu+' img:nth-child(2)').css('display','block')
       





        $('ul.'+val).toggleClass('active-menu', function(){
            alert('this is alert')
            if($('.'+val).hasClass('active-menu')){    
            
                // $('.'+val+'-icon-1').removeClass("active-menu");
                // $('.'+val+'-icon-2').addClass("active-menu");   
            //     $('.icon-2').addClass("active-menu");
            //    $('.active-menu').removeClass("active-menu"); 
            }else{ 
               $('.'+val).addClass("active-menu");   
               $('.'+val+'-icon-1').addClass("active-menu");
               $('.'+val+'-icon-2').removeClass("active-menu");   
            }
        })

        


        // if(currentRelAttr != val){ 
        //     // if(clickedTwice == 1){ 
        //     //     clickedTwice++;
        //         if($('.'+val).hasClass('hidden')){   
        //             console.log("has class hidden")
        //             $('.' + val + '-icon-1').addClass("hidden");
        //             $('.' + val + '-icon-2').removeClass("hidden");
        //             clickedTwice = 1;
        //         }else{
        //             $('.' + val + '-icon-2').removeClass("active-menu");
        //             $('.' + val + '-icon-1').addClass("active-menu");
                   
        //     //         // $('a.'+val).addClass("active-menu");  

        //     //         // $('.icon-1').addClass("acive-menu");
        //     //         // $('.icon-2').removeClass("active-menu");
        //     //         // clickedTwice = 1;
        //     //         // $('.'+val).addClass("active-menu"); 
        //     //         // $('.'+val).removeClass("active-menu");  
        //     //     } 
        //     //     currentRelAttr = val; //new record for currebt rel attribute  
        //     //     // $('img'+ '-icon-1').removeClass('hidden');
        //     //     // $('img'+'-icon-2').addClass('hidden');  
        //     //     // clickedTwice = 1;
                
        //     // }else{  
  
        //     //     if($('img'+val).hasClass('hidden')){    
        //     //         $('.active-menu').removeClass("active-menu"); 
        //     //     }else{ 
        //     //         $('.'+val).addClass("active-menu");  
        //     //     }
        //     //     // $('.'+val+'-icon-1').removeClass('hidden');
        //     //     // $('.'+val+'-icon-2').addClass('hidden');  
        //     //     // clickedTwice = 1;


        //     //     currentRelAttr = val; //new record for currebt rel attribute
        //     //     // clickedTwice=1; 
        //     //     //clickedTiceFunc(clickedTwice, val);
        //     } 
        // }else{ 
        //     currentRelAttr = val;  
        //     if(clickedTwice == 1){   
        //         if($('ul.'+val).hasClass('active-menu')){  
        //               $('.active-menu').removeClass("active-menu");
        //         }else{  
        //             $('.'+val).addClass("active-menu"); 
        //         } 
        //         $('.'+val+'-icon-1').addClass('hidden');
        //         $('.'+val+'-icon-2').removeClass('hidden');  
        //         clickedTwice++; 
        //     }else{  
        //         if($('ul.'+val).hasClass('active-menu')){
        //             $('.active-menu').removeClass("active-menu");
        //         }else{
        //             $('.'+val).addClass("active-menu");    
        //         } 
        //         $('.'+val+'-icon-1').removeClass('hidden');
        //         $('.'+val+'-icon-2').addClass('hidden');  
        //         clickedTwice = 1;
        //     } 
        // }
         
    });

    
    // $('.text').on('touchstart', function(){
    //    $('.-icon-plus, .-icon-negative').toggle();
    // });
    


       
        // Player news mobile next
         $('#main-tile').on('touchstart', function(){
                $("#main-tile").addClass('hidden');
                $("#tile").toggleClass('hidden');
                $('#main-tile2').removeClass('hidden');          
        });
        $('#main-tile2').on('touchstart', function(){
                $("#main-tile2").addClass('hidden');
                $("#tile2").removeClass('hidden');
            });


    $('#mobile-smm-menu > a').on('touchstart', function(){
        $('.active-mobile-mune-text').removeClass('active-mobile-mune-text');
        $(this).addClass('active-mobile-mune-text');
        var data = $(this).attr('rel');
        // var arrayData = data;

        // var arrayDataCombine='';
        // var j = 0;
        // for(var i = 0; i < arrayData.length; i++){
        //     if(arrayData[i] != '' && arrayData[i] != ' '){
        //         if(arrayData[i] != undefined){
        //
        //             if(i == 1){
        //                 arrayDataCombine = arrayData[i].toLowerCase();
        //             }else{
        //                 arrayDataCombine += "-" + arrayData[i].toLowerCase();
        //             }
        //         }
        //     }
        // }

        $('#sub-menu > ul.active').removeClass('active');
        $('.'+data).addClass('active');
    })

    $('#tml_btn').on('touchstart', function(){
        $('.arrow').toggleClass('rotate-90')
    });
    
    $('#tml_btn').on('touchstart', function(){
        $('#drop_down').toggleClass('hidden');
        
    });
    

  

    //Mobile navigation

    $('ul#mobile-2nd-mnav > li').on('touchstart', function(e){
        e.preventDefault();
        $('#nav-active').removeAttr('id');
        $(this).attr("id","nav-active");



        // var data = $(this).attr('rel');
        // $('.'+data).addClass('active');
        if($(this).text() == 'LINEUPS' || $(this).text() == 'DRAFTKINGS' || $(this).text() == 'FANDUEL'){
                
            $('#scrollbar').addClass('hidden'); 
            $('#ldf').removeClass('hidden');

            $('#img').addClass('hidden'); 
            $('#ldf').removeClass('hidden');

            if($(this).text() == 'DRAFTKINGS'){ 
                $('.forward-icon-fanduel').addClass('hidden');
                $('.forward-icon-draftking').removeClass('hidden'); 
            }else if($(this).text() == 'FANDUEL'){ 
                $('.forward-icon-fanduel').removeClass('hidden');
                $('.forward-icon-draftking').addClass('hidden'); 
            }else if($(this).text() == 'LINEUPS'){ 
                $('.forward-icon-fanduel').addClass('hidden');
                $('.forward-icon-draftking').addClass('hidden'); 
            } 
            }else if($(this).text() == 'NEWS'){
                $('#scrollbar').removeClass('hidden'); 
                $('#ldf, #img').addClass('hidden');
            }else if($(this).text() == 'STATS'){
                $('#img').removeClass('hidden'); 
                $('#ldf, #scrollbar').addClass('hidden');
            }else{

            }
            
        // $('#nav2').onclick(function(){
        //     $('#nav-body').removeClass('active');
        //     $('#nav-body').addClass('hidden');
        //     $('#img').removeClass('hidden');
        //     $('#img').addClass('active');
        // });
        // $('#nav2').onclick(function(){
        //     $('#nav-body').removeClass('active');
        //     $('#nav-body').addClass('hidden');
        //     $('#scrollbar').removeClass('hidden');
        //     $('#scrollbar').addClass('active');
        // });
         
        
           
  
        

        
        // if($('ul.'+val).hasClass('active-menu')){  
        //               $('.active-menu').removeClass("active-menu");
        //         }else{  
        //             $('.'+val).addClass("active-menu"); 
        //         } 
       

    });
   
    //    $('#btn-n').click(function() {
    //       $('#btn-l').removeClass('bg-[#202e5b]');
    //       $('#btn-n').addClass('bg-[#202e5b]');
    //       ,$('#btn-l').click(function(){
    //         $('#btn-n').removeClass('bg-[#202e5b]');
    //       });
          
    //     // if($('#btn-l').hasClass('bg-[#202e5b]')){
    //     //     $('#btn-n').removeClass('bg-[#202e5b]');
    //     // }else{
            
    //     // } 
    //     // if($('#btn-n').hasClass('bg-[#202e5b]')){
    //     //     $('#btn-l').removeClass('bg-[#202e5b]');
    //     // }else{

    //     // }
        
    //     });
    
    $('#btn-n').on('click', function(){
        $('#btn-n').addClass('bg-[#202e5b]');
        $('#btn-l').removeClass('bg-[#202e5b]');
    });
    $('#btn-l').on('click', function(){
        $('#btn-l').addClass('bg-[#202e5b]');
        $('#btn-n').removeClass('bg-[#202e5b]')
        });
    $('#btn-n').on('click', function(){
        $('#btn-n').addClass('text-white');
        $('#btn-l').removeClass('text-white');
    });
    $('#btn-l').on('click', function(){
        $('#btn-l').addClass('text-white');
        $('#btn-n').removeClass('text-white')
        });

    $('#btn-n').on('click', function(){
        $('#table-2').removeClass('hidden');
        $('#table-1').addClass('hidden');
    });
    $('#btn-l').on('click', function(){
        $('#table-1').removeClass('hidden');
        $('#table-2').addClass('hidden');
    });
        
    $('.owl-carousel').owlCarousel({
        loop:true,
        gap:5,
        responsiveClass:true,
        responsive:{
          0:{
                nav:true,
                
            },
            320:{
                items:1,
                nav:true,
                loop:false
            },
            600:{
                items:2,
                nav:true,
                loop:false
                
            },
            770:{
                items:2,
                nav:true,
                loop:false
                
            },
            768:{
                items:2,
                nav:true,
                loop:false
                
            },
            1003:{
                items:3,
                nav:true,
                loop:false
                
            },1058:{
                items:3,
                nav:true,
                loop:false
                
            },1280:{
                items:5,
                nav:true,
                loop:false
                
            },
     
            
        
        }
    });
   






    /**Start Chart  */
    
    // const labelsBarChart = [
    //     "January",
    //     "February",
    //     "March",
    //     "April",
    //     "May",
    //     "June",
    //     "edsan"
        
    // ];
    
    // const data = {
    //     font:"bold",
    // };
    // const dataBarChart = {
    //     labels: labelsBarChart,
    //     datasets: [
    //         {
    //             label: "My First dataset",
    //             backgroundColor: "deepskyblue",
    //             borderColor: "hsl(252, 82.9%, 67.8%)",
    //             data: [1, 2, 3, 4, 5, 6, 7, ],
                
    //         },
    //     ],
    // };
     
    // const configBarChart = {
    //     type: "bar",
    //     data: dataBarChart,
    //     options: {
    //         scales: {
    //             y: {
    //             beginAtZero: true,
    //             display: ''
    //             },
    //             y1:{
    //             position: 'right',
    //             ticks: {
    //             beginAtZero: true
    //             }
    //             },
    //             x: {
    //             beginAtZero: true,
    //             },
    //         }
    //     },
    // };

    // var chartBar = new Chart(
    //     document.getElementById("chartBar"),
    //     configBarChart
    // );

  /**End Chart  */
//   New charts
// const data = {
//       labels: ['Logo1', 'Logo2', 'Logo3', 'Logo4', 'Logo5', 'Logo6', 'logo7', 'Logo8', 'Logo9', 'Logo10'],
//       datasets: [{
//         label: '',
//         data: [3.8, 6, 0.8, 4.5, 3, 3, 3.8, 0.8, 4.5, 2.2],
//         backgroundColor: [
//           '#38b6ff',
//           '#38b6ff',
//           '#ff5757',
//           '#38b6ff',
//           '#38b6ff',
//           '#38b6ff',
//           '#38b6ff',
//           '#ff5757',
//           '#38b6ff',
//           '#ff5757'
//         ],
//         borderColor: [
//           '#38b6ff',
//           '#38b6ff',
//           '#ff5757',
//           '#38b6ff',
//           '#38b6ff',
//           '#38b6ff',
//           '#38b6ff',
//           '#38b6ff',
//           '#38b6ff',
//           '#38b6ff'
//         ],
//         borderWidth: 1
//       }]
//     };

//     // config 
//     const config = {
//       type: 'bar',
//       data,
//       options: {
//         scales: {
//         	// x:{
//         	// 	plugins:{
//         	// 		labels:{
//         	// 			render: 'image',
//         	// 			images: [
//         	// 			{
//         	// 				src: 'https://www.youtube.com/',
//         	// 				width: 16,
//         	// 				height: 16
//         	// 			}
//         	// 			]
//         	// 		}
//         	// 	}
//         	// },
//           y: {
//             beginAtZero: true,
//             ticks:{
//             count: 9,
//             display: ''
//             }
//           },
//           right: {
//           	beginAtZero: true,
//           	position:'right',
//           	ticks: {
//           		count: 9,
//                 callback: ((value, index, ticks) => {
//                 	return value * 8
//                 })
//           	}
//           }
//         }
//       }
//     };
    

    // render init block
    // const myChart = new Chart(
    //   document.getElementById('myChart'),
    //   config
    // );
//   End of Chart












//   var chartBar = new Chart(
//     document.getElementById("chartBar"),
//     configBarChart
//   );
// var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
// var yValues = [55, 49, 44, 24, 35];
// var barColors = ["red", "green","blue","orange","brown"];

// new Chart("myChart", {
//   type: "bar",
//   data: {
//     labels: xValues,
//     datasets: [{
//       backgroundColor: barColors,
//       data: yValues
//     }]
//   },
//   options: {
//     legend: {display: true},
//     title: {
//       display: false,
//       text: "World Wine Production 2018"
//     }
//   }
// });

// const ctx = document.getElementById("chart").getContext('2d');
//       const myChart = new Chart(ctx, {
//         type: 'bar',
//         data: {
//           labels: ["rice", "yam", "tomato", "potato",
//           "beans", "maize", "oil", "vegie"],
//           datasets: [{
//             label: 'food Items',
//             backgroundColor: 'rgba(161, 198, 247, 1)',
//             borderColor: 'rgb(47, 128, 237)',
//             data: [300, 400, 200, 500, 800, 900, 200, 150],
//           }]
//         },
//         options: {
//           scales: {
//             yAxes: [{
//               ticks: {
//                 beginAtZero: true,
//               }
//             }]
//           }
//         },
//       });
const data = {
  
      labels: ['', '', '', '', '', '', '', '', '', ''],
      datasets: [{
        label: '',
        
        
        data: [3.8,  3,  0.8,  4.5,  3,  3,  3.8,  0.8,  4.5,  2.2, 4.5,  2.2],
        backgroundColor: [
          '#38b6ff',
          '#38b6ff',
          '#ff5757',
          '#38b6ff',
          '#38b6ff',
          '#38b6ff',
          '#38b6ff',
          '#ff5757',
          '#38b6ff',
          '#ff5757'
        ],
        
        // image:[
        // './patrick.png',
      
       
        // ],
        borderColor: [
          '#38b6ff',
          '#38b6ff',
          '#ff5757',
          '#38b6ff',
          '#38b6ff',
          '#38b6ff',
          '#38b6ff',
          '#38b6ff',
          '#38b6ff',
          '#38b6ff'
        ],
        borderWidth: 1,
        // image:[
        // 'logo/edmonton-oilers.svg',
        // 'logo/detroit-red-wings.svg',
        // 'logo/columbus-blue-jackets.svg',
        // 'logo/colorado-avalanche.svg',
        // 'logo/chicago-blackhawks.svg',
        // 'logo/boston-bruins.svg',
        // 'logo/buffalo-sabres.svg',
        // 'logo/calgary-flames.svg'
        // ]
      }]
    };
    const imageItems = {

      id : 'imageItems',

      beforeDatasetsDraw(chart, args, pluginOptions){
        const {image,ctx,data,scales:{x,y}} =  chart;
        ctx.strokeStyle = image; 
        ctx.save();

        // const imageSize = options.layout.padding.left;
     

        // data.datasets[0].image.forEach((imageLink, index) => {
       
          // ctx.preventDefault() 
          // return;
         
          
        // });
        const logo = new Image();
        const lo = new Image();
        const kill = new Image();
        const nice = new Image();
        const nice1 = new Image();
        const nice2 = new Image();
        const nice3 = new Image();
        const nice4 = new Image();
        const nice5 = new Image();
        const nice6 = new Image();
          // logo.src=imageLink;
        
        kill.src='../images/teamlogo-svg/toronto-maple-leafs.svg';
        ctx.drawImage(kill,  11 , x.getPixelForValue(3) + 30,35,35),
        logo.src='../images/teamlogo-svg/seattle-kraken.svg';
        ctx.drawImage(logo, 56, x.getPixelForValue(1) + 120,35,35),
        lo.src='../images/teamlogo-svg/philadelphia-flyers.svg';
        ctx.drawImage(lo, 100, x.getPixelForValue(2) + 75,35,35),
        // next
        nice.src='../images/teamlogo-svg/new-jersey-devils.svg';
        ctx.drawImage(nice, 145, x.getPixelForValue(2) + 75,35,35),
        nice1.src='../images/teamlogo-svg/new-york-rangers.svg';
        ctx.drawImage(nice1, 189, x.getPixelForValue(2) + 75,35,35),
        nice2.src='../images/teamlogo-svg/montreal-canadiens.svg';
        ctx.drawImage(nice2,  235, x.getPixelForValue(2) + 75,35,35),
        nice3.src='../images/teamlogo-svg/chicago-blackhawks.svg';
        ctx.drawImage(nice3, 276, x.getPixelForValue(2) + 75,35,35),
        nice4.src='../images/teamlogo-svg/boston-bruins.svg';
        ctx.drawImage(nice4, 322, x.getPixelForValue(2) + 75,35,35)
        nice5.src='../images/teamlogo-svg/buffalo-sabres.svg';
        ctx.drawImage(nice5, 368, x.getPixelForValue(2) + 75,35,35),
        nice6.src='../images/teamlogo-svg/calgary-flames.svg';
        ctx.drawImage(nice6, 410, x.getPixelForValue(2) + 75,35,35)
        
      

      }
    };
    const dataXaxis = {

    }

    // config 
    const config = {
      plugins: [imageItems],
      type: 'bar',
      data,
      options: {
        indexAxis:'x',  // <-- position y , x
        layout:{
          padding:{
            bottom:20,
            
            
          }
        },
        
        
        // plugins:{
        //   labels:{
        //     render: 'images',
        //     images: [{
        //       src: './patrick.png',
        //       height: 25,
        //       width: 25
        //     },
        //     {
        //       src: './patrick.png',
        //       height: 25,
        //       width: 25
        //     },
        //     ]
        //   }
       
        
        // },
        scales: {
          y:{
            beginAtZero: false,
            ticks:{
            count: 9,
            display: ''
            }
          },
          right: {
            beginAtZero: true,
            position:'right',
            ticks: {
              count: 9,
                callback: ((value, index, ticks) => {
                  return value * 8
             })
            }
          }
        },
         
      }
      
 
      
    };
    

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  

</script>