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
        
    //     // $('.active-menu').removeClass('active-menu'); 
    //     var val = $(this).attr('rel'); 
        
        
    //     if(currentRelAttr != val){ 
    //         if(clickedTwice == 1){ 
    //             clickedTwice++;
    //             if($('ul.'+val).hasClass('active-menu')){   
    //                 console.log("has class active")
    //                 $('.active-menu').removeClass("active-menu");
    //             }else{
                    
    //                 $('.'+val).addClass("active-menu");  
    //             } 
    //             currentRelAttr = val; //new record for currebt rel attribute  
    //             $('.'+val+'-icon-1').removeClass('hidden');
    //             $('.'+val+'-icon-2').addClass('hidden');  
    //         }else{  
  
    //             if($('ul.'+val).hasClass('active-menu')){    
    //                 $('.active-menu').removeClass("active-menu"); 
    //             }else{ 
    //                 $('.'+val).addClass("active-menu");  
    //             }
    //             $('.'+val+'-icon-1').removeClass('hidden');
    //             $('.'+val+'-icon-2').addClass('hidden');  
    //             clickedTwice = 1;


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
    //                 $('.'+val).addClass("active-menu");    
    //             } 
    //             $('.'+val+'-icon-1').removeClass('hidden');
    //             $('.'+val+'-icon-2').addClass('hidden');  
    //             clickedTwice = 1;
    //         } 
    //     }
         
    // });

    
    $('.text-link').on('touchstart', function(){
        $('.img-plus, .img-negative').toggle();
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