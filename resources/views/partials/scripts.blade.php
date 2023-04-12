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
    //  $('#sub-hed > .d-kings').on('click', function(){
      //   $('.d-kings').addClass('bg-[#ff8210]');
      //   $('.l-ups, .fnl, .sts, .nws').removeClass('bg-[#1d9bf0]');
      //  });
      //  $('#sub-hed > .fnl').on('click', function(){
      //   $('.fnl').addClass('bg-[#1d9bf0]');
      //   $('.l-ups, .sts, .nws').removeClass('bg-[#1d9bf0]');
      //   $('.d-kings').removeClass('bg-[#ff8210]');
      //  });
      //  $('#sub-hed > .sts').on('click', function(){
      //   $('.sts').addClass('bg-[#1d9bf0]');
      //   $('.l-ups, .fnl, .nws ').removeClass('bg-[#1d9bf0]');
      //   $('.d-kings').removeClass('bg-[#ff8210]');
      //  });
      //  $('#sub-hed > .l-ups').on('click', function(){
      //   $('.l-ups').addClass('bg-[#1d9bf0]');
      //   $('.sts, .fnl, .nws').removeClass('bg-[#1d9bf0]');
      //   $('.d-kings').removeClass('bg-[#ff8210]');
      //  });
      //  $('#sub-hed > .nws').on('click', function(){
      //   $('.nws').addClass('bg-[#1d9bf0]');
      //   $('.sts, .fnl, .l-ups').removeClass('bg-[#1d9bf0]');
      //   $('.d-kings').removeClass('bg-[#ff8210]');
    //  });


    // $('#sub-hed > .d-kings').on('click', function(){
    //     $('.drftking, .dk-price').removeClass('hidden');
    //     $('.fduel, .stat, .fl-price, #shirt-footer').addClass('hidden');
    // });
    // $('#sub-hed > .fnl').on('click', function(){
    //     $('.fduel, .fl-price').removeClass('hidden');
    //     $('.drftking, .stat, .dk-price, #shirt-footer').addClass('hidden');
    // });
    // $('#sub-hed > .sts').on('click', function(){
    //     $('.stat').removeClass('hidden');
    //     $('.drftking ,.fduel, .dk-price, .fl-price, #shirt-footer').addClass('hidden');
    // });
    // $('#sub-hed > .l-ups').on('click', function(){
    //     $('.drftking, .fduel, .stat, .dk-price, .fl-price, #shirt-footer').addClass('hidden');
    // });
    // $('#sub-hed > .nws').on('click', function(){
    //     $('div > #shirt-footer').addClass('hidden');
    //     $('div > #carsl').removeClass('hidden');
    // });
    // $('#sub-hed > .sts, .d-kings, .fnl, .l-ups').on('click', function(){
    //     $('div > #shirt-footer').removeClass('hidden');
    //     $('div > #carsl').addClass('hidden');
    // });
    // nhl line-combos sub link end

    // NHL LINE-COMBOS
    $('#sub-hed > .d-kings').on('click', function(){
      $('.d-kings').addClass('bg-[#1d9bf0]');
      $('.l-ups, .fnl, .sts, .nws, .prp, .shp').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .fnl').on('click', function(){
      $('.fnl').addClass('bg-[#1d9bf0]');
      $('.l-ups, .sts, .nws, .d-kings, .prp, .shp').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .sts').on('click', function(){
      $('.sts').addClass('bg-[#1d9bf0]');
      $('.l-ups, .fnl, .nws, .d-kings, .prp, .shp').removeClass('bg-[#1d9bf0]');     
     });
     $('#sub-hed > .l-ups').on('click', function(){
      $('.l-ups').addClass('bg-[#1d9bf0]');
      $('.sts, .fnl, .nws, .d-kings, .prp, .shp').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .nws').on('click', function(){
      $('.nws').addClass('bg-[#1d9bf0]');
      $('.sts, .fnl, .l-ups, .d-kings, .prp, .shp').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .sts').on('click', function(){
      $('.sts').addClass('bg-[#1d9bf0]');
      $('.fnl, .l-ups, .d-kings, .nws, .prp, .shp').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .prp').on('click', function(){
      $('.prp').addClass('bg-[#1d9bf0]');
      $('.fnl, .l-ups, .d-kings, .nws, .sts, .shp').removeClass('bg-[#1d9bf0]');
     });
     $('#sub-hed > .shp').on('click', function(){
      $('.shp').addClass('bg-[#1d9bf0]');
      $('.fnl, .l-ups, .d-kings, .nws, .sts, .prp').removeClass('bg-[#1d9bf0]');
     });
     $('.fnl, .shp, .d-kings, .nws, .sts, .prp').on('click', function(){
      $('#p-box > div.frstrow').addClass('w-[69%]');
      $('#p-box > div.scondrow').addClass('w-[65%]');
     });
     $('#sub-hed > .l-ups').on('click', function(){
      $('#p-box > div.frstrow').removeClass('w-[69%]');
      $('#p-box > div.scondrow').removeClass('w-[65%]');
     });
  
  

    //  $('#sub-hed > l-ups').on('click', function(){
    //   $('#lu-body').removeClass('hidden');
    //  });
    $('#sub-hed > .l-ups').on('click', function(){
      $('#drf-shp').addClass('hidden');
      $('#lu-body').removeClass('hidden');
     });
     $('#sub-hed > .d-kings').on('click', function(){
      $('#drf-shp, .drftking, .dk-price').removeClass('hidden');
      $('#lu-body, .fduel, .stats, .props, .shop, .fl-price').addClass('hidden');
     });
     $('#sub-hed > .fnl').on('click', function(){
      $('#drf-shp, .fduel, .fl-price').removeClass('hidden');
      $('#lu-body, .drftking, .stats, .props, .shop, .dk-price').addClass('hidden');
     });
     $('#sub-hed > .sts').on('click', function(){
      $('#drf-shp, .stats').removeClass('hidden');
      $('#lu-body, .drftking, .fduel, .props, .shop, .fl-price, .dk-price').addClass('hidden');
     });
     $('#sub-hed > .shp').on('click', function(){
      $('#drf-shp, .shop').removeClass('hidden');
      $('#lu-body, .drftking, .fduel, .props, .stats, .fl-price, .dk-price').addClass('hidden');
     });
     $('#sub-hed > .prp').on('click', function(){
      $('#drf-shp, .props').removeClass('hidden');
      $('#lu-body, .drftking, .fduel, .shop, .stats, .fl-price, .dk-price').addClass('hidden');
     });
     $('#sub-hed > .l-ups').on('click', function(){
      $(' .drftking, .fduel, .shop, .stats, .fl-price, .dk-price, .props').addClass('hidden');
     });


      

     

    
    
     



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
    
  //  header select arrow function
    $('#SN').on('click', function(){
      $('.arrw').toggleClass('rotate-[1deg]')
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
            },528:{
                items:2,
                nav:true,
                loop:false
                
            },600:{
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
                
            },817:{
                items:3,
                nav:true,
                loop:false
                
            },864:{
                items:3,
                nav:true,
                loop:false
                
            },995:{
                items:3,
                nav:true,
                loop:false
                
            },965:{
                items:3,
                nav:true,
                loop:false
                
            },966:{
                items:3,
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
                
            },1139:{
                items:4,
                nav:true,
                loop:false
                
            },1116:{
                items:4,
                nav:true,
                loop:false
                
            },1208:{
                items:4,
                nav:true,
                loop:false
                
            },1280:{
                items:4,
                nav:true,
                loop:false
                
            },1324:{
              items:5,
              nav:true,
              loop:false

            },1512:{
              items:5,
              nav:true,
              loop:false

            },1520:{
              items:5,
              nav:true,
              loop:false

            },1528:{
              items:5,
              nav:true,
              loop:false

            },1536:{
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