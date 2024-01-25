<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>



<script>
    //view news nhl
    $('.nhl-view-news').on('touchstart click', function(){
             var data = $(this).attr('rel');
        $('.modalNhl').addClass('hidden');
        $('#' + data).removeClass('hidden');
    })

    $('.nhlsg-view-news').on('touchstart click', function(){
        var data = $(this).attr('rel');
        $('.modalNhlSg').addClass('hidden');
        $('#' + data).removeClass('hidden');
    })

    //view news nba
    $('.nba-view-news').on('touchstart click', function(){
        var data = $(this).attr('rel');
        $('.modalNba').addClass('hidden');
        $('#' + data).removeClass('hidden');

    })

    $('.close-modal').click('touchstart click', function(){
        var data = $(this).attr('rel');
        $('#' + data).addClass('hidden');
    })


    // $('#search-nhl-home').on('keydown')
    $('#search-nhl-home').on("keyup", function(e) {
            $('#loading_').addClass('i');
        if($(this).val()){

            // console.log(this).val());
            let items = '';
            fetch(`https://api.projectedlineups.com/v1/search?q=${$(this).val()}`).then((response) => {
                    return response.json();
            })
            .then((data) => {
                // $('#item-content').html('');
                $('#loading_').removeClass('i');
                // items = data;
                $('#item-content').empty();

                console.log(data);
                data.data.map(function(item) {

                    console.log('items ', item);
                    console.log('items ', item.type);
                    let urlType="";
                    if(item.item.type == 'team'){
                        urlType=item.item.metadata.league.slug +'/line-combos/' + item.item.metadata.team.slug;
                    }else{
                        urlType='';
                    }


                    $('#item-content').append('<li class="flex flex-row gap-2 items-center py-2 items-center justify-letf px-2" >' +
                        '<a href="/'+urlType+'" class="flex flex-row gap-2"> <div> <img class="items-avatar w-6 h-6 rounded-full" src="'+ item.item.image +'" alt=""..." />  </div>' +
                        '<div class="capitalize font-bold">  '
                        + item.name +
                        '</div></a>' +
                        '</li>'
                    )

                });


            }).catch(function(e) {
                console.log(e)
            });
             $('#search-nhl-home-content').removeClass('hidden');
        }else{
             $('#search-nhl-home-content').addClass('hidden');
        }

        //   var inputValue = $(this).val();
        // if(e.keyCode == 13) {
        //     alert(inputValue);
        // }
    });

    // const url = 'https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies?f[game_date]=2023-10-18';
    //
    //
    //
    //
    // // fetch(url)
    // //     .then((response) => {
    // //     return response.json();
    // // })
    // // .then((data) => {
    // //     let authors = data;
    // //
    // // authors.map(function(author) {
    // //     let li = document.createElement('li');
    // //     let name = document.createElement('h2');
    // //     let email = document.createElement('span');
    // //
    // //     name.innerHTML = `${author.name}`;
    // //     email.innerHTML = `${author.email}`;
    // //
    // //     li.appendChild(name);
    // //     li.appendChild(email);
    // //     list.appendChild(li);
    // // });
    // // })
    // //
    // // ul.appendChild(list);
    // //
    //
    // const dateDisplay = document.getElementById('date-display');
    // const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    //
    // // let convertCurrentDate = new Date();
    // // var date_= `${convertCurrentDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}`;
    // // console.log('last date ', date_)
    // //
    // //
    // // var convertedYear = date_.getFullYear();
    // // var convertedMonth = (date_.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-based, so we add 1
    // // var convertedDay = date_.getDate().toString().padStart(2, '0');
    // //
    // // // Create the formatted date string
    // // var convertedDayFormattedDate = convertedYear + '-' + convertedMonth + '-' + convertedDay;
    // //
    // // console.log('last date ', convertedDayFormattedDate)
    //
    //
    // var dataList = $('#starting-goalies-content');
    //
    // let currentDate = new Date();
    // function updateDateDisplay() {
    //     const dayOfWeek = daysOfWeek[currentDate.getDay()];
    //
    //
    //     // const date_= `${currentDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}`;
    //     const formattedDate = `${currentDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' })}`;
    //     const formattedStringDay = `${dayOfWeek}`;
    //
    //     dateDisplay.innerText = formattedStringDay + ', ' +formattedDate;
    //
    //
    //
    //
    //     var convertedYear = currentDate.getFullYear();
    //     var convertedMonth = (currentDate.getMonth() + 1).toString().padStart(2, '0');
    //     var convertedDay = currentDate.getDate().toString().padStart(2, '0');
    //     var convertedDayFormattedDate = convertedYear + '-' + convertedMonth + '-' + convertedDay;
    //
    //       let game_date = '2023-10-30';
    //
    //       window.location.href="/nhl/starting-goalies/" + convertedDayFormattedDate;
    //         console.log('hello world ',convertedDayFormattedDate);
    //
    //     fetch('https://api.projectedlineups.com/v1/lineups/nhl/starting-goalies?f[game_date]=' + game_date)
    //         .then((response) => {
    //             return response.json();
    //         }).then((data) => {
    //             let players = data.data;
    //
    //             players.map(function(player) {
    //
    //                 // dataList.append('<li>New item hello world</li>');
    //                 console.log(player.game.slug);
    //                 console.log(player.game.slug);
    //
    //
    //
    //                 // let ul = document.createElement('ul');
    //                 //             ul.addClass('flex gap-2 w-full');
    //                 // if (myObject !== null && typeof myObject === 'object' && myObject.hasOwnProperty('images')) {
    //                 //     // Access the 'images' property of myObject
    //                 //     const images = myObject.images;
    //                 //     // Rest of your code here
    //                 // } else {
    //                 //     // Handle the case where myObject is null or doesn't have the 'images' property
    //                 //     console.error("myObject is null or doesn't have the 'images' property");
    //                 // }
    //                 // dataList.append(
    //                 //     '<div class="flex gap-2 w-full">'
    //                 //         + '<div class="border border-black flex flex-col items-center justify-between w-full ">'
    //                 //             + '<h1 class="font-bold text-sm mt-2 player" >'+  player.player.full_name +'</h1>'
    //                 //             + ' <img src="'+ player.player.images.uniform +'"  class="w-32" alt="">'
    //                 //         +'</div>' +
    //                 //     '</div>')
    //                 //
    //
    //
    //
    //
    //
    //
    //
    //
    //
    //
    //
    //                 // let li1 = document.createElement('li');
    //                 //             li1.addClass('border border-black flex flex-col items-center justify-between w-full rounded-lg')
    //                 //             ul.appendChild(li1);
    //                 // let h11 = document.createElement('li');
    //                 //             h11.addClass('font-bold text-sm mt-2 player')
    //                 //             h11.innerHTML = `${player.full_name}`;
    //                 //             li1.appendChild(h11);
    //                 // let div1 = document.createElement('div');
    //                 //             div1.addClass('flex flex-row items-center gap-2')
    //                 //             ul.appendChild(div1);
    //                 // let img1 = document.createElement('img');
    //                 //             img1.addClass('w-[15px] h-[15px]')
    //                 //             img1.attr("src", `${player.images.uniform}`);
    //                 //             div1.appendChild(img1);
    //                 //
    //                 //
    //                 // let p1 = document.createElement('p');
    //                 //             p1.addClass('text-[11px] font-bold')
    //                 //
    //                 // console.log(ul)
    //                 // dataList.append(ul);
    //                 // let li2 = document.createElement('li');
    //                 // let li3 = document.createElement('li');
    //                 // let centerHeder = document.createElement('h2');
    //                 // let email = document.createElement('span');
    //                 //
    //                 // centerHeder.innerHTML = `${player.game.game_date.full}`;
    //                 // email.innerHTML = `${player.email}`;
    //                 //
    //                 // li.appendChild(name);
    //                 // li.appendChild(email);
    //                 // list.appendChild(li);
    //             });
    //         })
    //         .catch(function(e) {
    //             console.log(e)
    //         });
    //
    //
    // }
    //
    // document.getElementById('decrement-button').addEventListener('click', () => {
    //     currentDate.setDate(currentDate.getDate() - 1);
    // updateDateDisplay();
    // });
    //
    // document.getElementById('increment-button').addEventListener('click', () => {
    //     currentDate.setDate(currentDate.getDate() + 1);
    // updateDateDisplay();
    // });
    //
    //
    // // Initialize date display with the current date
    // updateDateDisplay();


    //line combinations click function
    // $('.nhl-linecombos_, #line-combos_, #line-combos-div_').click(function(){
    //
    //     // alert("Hello world");
    //
    //       $('#line-combos_').removeClass('hidden');
    //     //
    //     // $('.nhl-linecombos_ > a').css({'color': '#38b6ff'});
    // });
    //
    // $('.nhl-linecombos_,  #line-combos_, #line-combos-div_').mouseleave(function(){
    //     // $('#line-combos-div_').addClass('hidden');
    //     //
    //     // $('.nhl-linecombos_ > a').css({'color': '#000'});
    // });


    $('.nhl-linecombos_,  #line-combos_, #line-combos-div_ ').mouseleave(function(){

        $('#line-combos_').addClass('hidden');
    });
    $('.nhl-linecombos_,  #line-combos_, #line-combos-div_ ').mouseover(function(){

        // $('.nhl-linecombos_ > a').css({'color': '#38b6ff'});

        $('#line-combos_').removeClass('hidden');
        // $('.nhl-linecombos_ > a').css({'color': '#000'});
    });


    $('#see-all-player-news').click(function(){
        $('.card-container.hidden').removeClass('hidden');
        $(this).addClass('hidden')
    });

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
    $('#head-drp').on('click', function(){
      $('.drp-dwn').toggleClass('hidden');
      $('.arrw-v1').toggleClass('rotate-[271deg]');
    })
    $('#head-drp-mob').on('click', function(){
      $('.drp-dwn-mob').toggleClass('hidden');
      $('.arrw-v1-mob').toggleClass('rotate-[271deg]');
    });
  //  header input old design
    $('#SN').on('change', function(){
    	var demovalue = $(this).val(); 
        if(demovalue == 'val1'){
          $('#hockey').removeClass('hidden');
          $('#base').addClass('hidden');
          $('#rugby').addClass('hidden');
          $('#basket').addClass('hidden');
          $('#soccer').addClass('hidden');
        }else if(demovalue == 'val2'){
          $('#base').removeClass('hidden');
          $('#hockey').addClass('hidden');
          $('#rugby').addClass('hidden');
          $('#basket').addClass('hidden');
          $('#soccer').addClass('hidden');
        }else if(demovalue == 'val3') {
          $('#rugby').removeClass('hidden');
          $('#hockey').addClass('hidden');
          $('#base').addClass('hidden');
          $('#basket').addClass('hidden');
          $('#soccer').addClass('hidden');
        }else if(demovalue == 'val4') {
          $('#basket').removeClass('hidden');
          $('#rugby').addClass('hidden');
          $('#hockey').addClass('hidden');
          $('#base').addClass('hidden');
          $('#soccer').addClass('hidden');
        }else if(demovalue == 'val5'){
          $('#soccer').removeClass('hidden');
          $('#hockey').addClass('hidden');
          $('#base').addClass('hidden');
          $('#basket').addClass('hidden');
          $('#rugby').addClass('hidden');
        }else{
        }
    });
    
    $('#SN').on('change', function(){
    	var demovalue = $(this).val();
        if(demovalue == 'val1'){
          $('.NHL').removeClass('hidden');
          $('.MLB').addClass('hidden');
          $('.NFL').addClass('hidden');
          $('.NBA').addClass('hidden');
          $('.SOC').addClass('hidden');
        }else if(demovalue == 'val2'){
          $('.NHL').addClass('hidden');
          $('.MLB').removeClass('hidden');
          $('.NFL').addClass('hidden');
          $('.NBA').addClass('hidden');
          $('.SOC').addClass('hidden');
        }else if(demovalue == 'val3'){
          $('.NHL').addClass('hidden');
          $('.MLB').addClass('hidden');
          $('.NFL').removeClass('hidden');
          $('.NBA').addClass('hidden');
          $('.SOC').addClass('hidden');
        }else if(demovalue == 'val4'){
          $('.NHL').addClass('hidden');
          $('.MLB').addClass('hidden');
          $('.NFL').addClass('hidden');
          $('.NBA').removeClass('hidden');
          $('.SOC').addClass('hidden');
        }else if(demovalue == 'val5'){
          $('.NHL').addClass('hidden');
          $('.MLB').addClass('hidden');
          $('.NFL').addClass('hidden');
          $('.NBA').addClass('hidden');
          $('.SOC').removeClass('hidden');
        }
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
    // $('.bckgrnd').on('click', function(){
    //    $(this).css("color","red");      
    //  });
    $('.bckgrnd').click(function() {
     var navbg = $(this).data('navbg');
      $('.bckgrnd').removeClass('active');
      $(this).addClass('active');
      $('div#sub-hed').css('backgroundColor', navbg);
    });
    $('.apn-bckgrnd').click(function() {
     var navbg = $(this).data('navbg');
      $('.apn-bckgrnd').removeClass('active');
      $(this).addClass('active');
      $('div#sub-hed').css('backgroundColor', navbg);
    });
    $('.nfl-bckgrnd').click(function() {
     var navbg = $(this).data('navbg');
      $('.nfl-bckgrnd').removeClass('active');
      $(this).addClass('active');
      $('div#sub-hed').css('backgroundColor', navbg);
    });
    $('.nba-bckgrnd').click(function() {
     var navbg = $(this).data('navbg');
      $('.nba-bckgrnd').removeClass('active');
      $(this).addClass('active');
      $('div#sub-hed').css('backgroundColor', navbg);
    });



     $('.fnl, .shp, .d-kings, .nws, .sts, .prp').on('click', function(){
      $('#p-box > div.frstrow').addClass('w-[69%]');
      $('#p-box > div.scondrow').addClass('w-[65%]');
     });
     $('#sub-hed > .l-ups').on('click', function(){
      $('#p-box > div.frstrow').removeClass('w-[69%]');
      $('#p-box > div.scondrow').removeClass('w-[65%]');
     });
  
     $('#lc-btn').on('click', function(){
      $('#lc-dropdown').toggleClass('hidden');
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
    $('.line-combos-items').on('touchstart clcik', function(){

        var data = $(this).attr('rel');
        window.location.href=data;

    });

    // nhl line-combos select option
    $('#team-name').on('click', function(){
      $('.arrw2').toggleClass('rotate-[90deg]');
      
    }); 
  //  header select arrow function
    $('#SN').on('click', function(){
      $('.arrw').toggleClass('rotate-[1deg]')
    }); 

  // header select option 
  // $("#SN ").val('1').change(function(){
  //   // console.log('hello');
  //   $('#hockey').addClass('hidden');
  //   $('#base').removeClass('hidden');
  // });
 
   
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
   

const data = {
  
      labels: [
        ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '
      ],
      datasets: [{
        data: [1,  3,  0.8,  4.5,  3,  3,  3.8,  0.8,  4.5,  2.2, 4.5,  2.2],
        label:[''],
        backgroundColor:[
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
        pointHitRadius: 1,
        pointRadius: 1,
        // hoverBackgroundColor: [
  
        // ],
        
             
            
       
      },
    ]
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
        ctx.drawImage(kill,  11 , x.getPixelForValue(3) + 32,37,37),
        logo.src='../images/teamlogo-svg/seattle-kraken.svg';
        ctx.drawImage(logo, 50, x.getPixelForValue(1) + 115,35,35),
        lo.src='../images/teamlogo-svg/philadelphia-flyers.svg';
        ctx.drawImage(lo, 95, x.getPixelForValue(2) + 70,38,38),
        // next
        nice.src='../images/teamlogo-svg/new-jersey-devils.svg';
        ctx.drawImage(nice, 135, x.getPixelForValue(2) + 75,35,35),
        nice1.src='../images/teamlogo-svg/new-york-rangers.svg';
        ctx.drawImage(nice1, 175, x.getPixelForValue(2) + 75,38,38),
        nice2.src='../images/teamlogo-svg/montreal-canadiens.svg';
        ctx.drawImage(nice2,  217, x.getPixelForValue(2) + 75,37,37),
        nice3.src='../images/teamlogo-svg/chicago-blackhawks.svg';
        ctx.drawImage(nice3, 260, x.getPixelForValue(2) + 75,35,35),
        nice4.src='../images/teamlogo-svg/boston-bruins.svg';
        ctx.drawImage(nice4, 300, x.getPixelForValue(2) + 75,35,35)
        nice5.src='../images/teamlogo-svg/buffalo-sabres.svg';
        ctx.drawImage(nice5, 345, x.getPixelForValue(2) + 75,35,35),
        nice6.src='../images/teamlogo-svg/calgary-flames.svg';
        ctx.drawImage(nice6, 385, x.getPixelForValue(2) + 75,35,35)
      }
    };
    const dataXaxis = {
      
    }

    // config 
    const config = {
      plugins: [imageItems]   
      ,
      type: 'bar',
      data,
      options:{
        indexAxis:'x',  // <-- position y , x
        layout:{
          padding:{
            bottom:20, 
          },
        },
        showTooltips : false,
        plugins:{
            tooltip:{
              enabled:false
          },
        },
        
        //     {
        //       src: './patrick.png',
        //       height: 25,
        //       width: 25
        //     },
        //     ]
        //   }
        // },
    //     options: {
    //   scales: {
    //     y: {
    //       beginAtZero: true
    //     }
    //   }
    // }
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
      },
   
    };
    

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    myChart.canvas.addEventListener('mousemove', (e) => {
      crosshair(myChart, e);
    })
     
    function crosshair(chart, mousemove){
      chart.update('none');
      console.log(mousemove)
      const x = mousemove.offsetX;
      const y = mousemove.offsetY;

      const { ctx, chartArea: { top, bottom, left, right, width } } = chart;
      ctx.save();

      ctx.strokeStyle = 'rgba(102, 102, 102, 1)';
      ctx.lineWidth = 2;

      ctx.beginPath();
      ctx.moveTo(left, mousemove.offsetY);
      ctx.lineTo(right, mousemove.offsetY);
      ctx.stroke();
      ctx.closepath();
    }


    const newChart = new Chart(
      document.getElementById('newChart'),
      config
    );
    newChart.canvas.addEventListener('mousemove', (e) => {
      crosshair(newChart, e);
    })
     
    function crosshair(chart, mousemove){
      chart.update('none');
      console.log(mousemove)
      const x = mousemove.offsetX;
      const y = mousemove.offsetY;

      const { ctx, chartArea: { top, bottom, left, right, width } } = chart;
      ctx.save();

      ctx.strokeStyle = 'rgba(102, 102, 102, 1)';
      ctx.lineWidth = 2;

      ctx.beginPath(left,  mousemove.offsetY);
      ctx.moveTo(left,  mousemove.offsetY);
      ctx.lineTo(right, mousemove.offsetY);
      ctx.stroke();
      ctx.closepath();
    }

    const newChart2 = new Chart(
      document.getElementById('newChart2'),
      config
    );
    newChart2.canvas.addEventListener('mousemove', (e) => {
      crosshair(newChart2, e);
    })
     
    function crosshair(chart, mousemove){
      chart.update('none');
      console.log(mousemove)
      const x = mousemove.offsetX;
      const y = mousemove.offsetY;

      const { ctx, chartArea: { top, bottom, left, right, width } } = chart;
      ctx.save();

      ctx.strokeStyle = 'rgba(102, 102, 102, 1)';
      ctx.lineWidth = 2;

      ctx.beginPath(left,  mousemove.offsetY);
      ctx.moveTo(left,  mousemove.offsetY);
      ctx.lineTo(right, mousemove.offsetY);
      ctx.stroke();
      ctx.closepath();
    }
    const newChart3 = new Chart(
      document.getElementById('newChart3'),
      config
    );
    newChart3.canvas.addEventListener('mousemove', (e) => {
      crosshair(newChart3, e);
    })
     
    function crosshair(chart, mousemove){
      chart.update('none');
      console.log(mousemove)
      const x = mousemove.offsetX;
      const y = mousemove.offsetY;

      const { ctx, chartArea: { top, bottom, left, right, width } } = chart;
      ctx.save();

      ctx.strokeStyle = 'rgba(102, 102, 102, 1)';
      ctx.lineWidth = 2;

      ctx.beginPath(left,  mousemove.offsetY);
      ctx.moveTo(left,  mousemove.offsetY);
      ctx.lineTo(right, mousemove.offsetY);
      ctx.stroke();
      ctx.closepath();
    }
    const newChart4 = new Chart(
      document.getElementById('newChart4'),
      config
    );
    newChart4.canvas.addEventListener('mousemove', (e) => {
      crosshair(newChart4, e);
    })
     
    function crosshair(chart, mousemove){
      chart.update('none');
      console.log(mousemove)
      const x = mousemove.offsetX;
      const y = mousemove.offsetY;

      const { ctx, chartArea: { top, bottom, left, right, width } } = chart;
      ctx.save();

      ctx.strokeStyle = 'rgba(102, 102, 102, 1)';
      ctx.lineWidth = 2;

      ctx.beginPath(left,  mousemove.offsetY);
      ctx.moveTo(left,  mousemove.offsetY);
      ctx.lineTo(right, mousemove.offsetY);
      ctx.stroke();
      ctx.closepath();
    }
    const newChart5 = new Chart(
      document.getElementById('newChart5'),
      config
    );
    newChart5.canvas.addEventListener('mousemove', (e) => {
      crosshair(newChart5, e);
    })
     
    function crosshair(chart, mousemove){
      chart.update('none');
      console.log(mousemove)
      const x = mousemove.offsetX;
      const y = mousemove.offsetY;

      const { ctx, chartArea: { top, bottom, left, right, width } } = chart;
      ctx.save();

      ctx.strokeStyle = 'rgba(102, 102, 102, 1)';
      ctx.lineWidth = 2;

      ctx.beginPath(left,  mousemove.offsetY);
      ctx.moveTo(left,  mousemove.offsetY);
      ctx.lineTo(right, mousemove.offsetY);
      ctx.stroke();
      ctx.closepath();
    }


    
</script>