<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> 
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
  
    $( "div#main-menu1 > div > a, div#main-menu2 > div > a" ).hover(function() {  
        var data = $(this).attr('rel'); 
        $("a > div.active").removeClass('active'); 
        $("a > div."+data).addClass('active'); 
        $("#sub-menu > ul.active").removeClass('active');
        $("#sub-menu > ul."+data).addClass('active');  
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
        $('#new-menu').toggleClass();
        
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


   
    // header humberger button
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
            }else if($(this).text() == 'ODDS'){
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


        

        
        
       

    });

</script>