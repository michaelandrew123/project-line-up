<script>
$(function(){
    var url = window.location.pathname;
    var segments = url.split('/');
    var firstSegment = segments[1];

    // console.log(firstSegment);


    // if(window.location.pathname == $('#nhl-combos-tema-news').val()){
    if(firstSegment == 'nba' || firstSegment == 'nhl'){
      const initNHLSlider = () => {
          const imageListNhl = document.querySelector(".nhl-slider-wrapper .nhl-image-list");

          const slideButtons = document.querySelectorAll(".nhl-slider-wrapper .nhl-slide-button");
          const sliderScrollbar = document.querySelector(".nhl-container-slider .nhl-slider-scrollbar");
          const scrollbarThumb = sliderScrollbar.querySelector(".nhl-scrollbar-thumb");
          const maxScrollLeft = imageListNhl.scrollWidth - imageListNhl.clientWidth;

          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {
              const startX = e.clientX;
              const thumbPosition = scrollbarThumb.offsetLeft;
              const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

              // Update thumb position on mouse move
              const handleMouseMove = (e) => {
                  const deltaX = e.clientX - startX;
                  const newThumbPosition = thumbPosition + deltaX;
                  // Ensure the scrollbar thumb stays within bounds
                  const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                  const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                  scrollbarThumb.style.left = `${boundedPosition}px`;
                  imageListNhl.scrollLeft = scrollPosition;
              }
              // Remove event listeners on mouse up
              const handleMouseUp = () => {
                  document.removeEventListener("mousemove", handleMouseMove);
                  document.removeEventListener("mouseup", handleMouseUp);
              }
              // Add event listeners for drag interaction
              document.addEventListener("mousemove", handleMouseMove);
              document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {

              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageListNhl.clientWidth * direction;
                  imageListNhl.scrollBy({ left: scrollAmount, behavior: "smooth" });
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {

              console.log("Hello world", maxScrollLeft);
              slideButtons[0].style.display = imageListNhl.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageListNhl.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageListNhl.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageListNhl.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }

      window.addEventListener("resize", initNHLSlider);
      window.addEventListener("load", initNHLSlider);

      var nhlImageItemCount = $('.nhl-image-list > .nhl-image-item').length;

      if(nhlImageItemCount < 3){
          nhlImageItemCount = 3;
      }
   // console.log('length ', nhlImageItemCount);
      $('.nhl-slider-wrapper .nhl-image-list').css({'grid-template-columns': 'repeat(' + nhlImageItemCount + ', 1fr)'});
  }

  if(window.location.pathname=='/'){
     const initNHLSlider = () => {
         const imageListNhl = document.querySelector(".nhl-slider-wrapper .nhl-image-list");

         const slideButtons = document.querySelectorAll(".nhl-slider-wrapper .nhl-slide-button");
         const sliderScrollbar = document.querySelector(".nhl-container-slider .nhl-slider-scrollbar");
         const scrollbarThumb = sliderScrollbar.querySelector(".nhl-scrollbar-thumb");
         const maxScrollLeft = imageListNhl.scrollWidth - imageListNhl.clientWidth;

         // Handle scrollbar thumb drag
         scrollbarThumb.addEventListener("mousedown", (e) => {
             const startX = e.clientX;
             const thumbPosition = scrollbarThumb.offsetLeft;
             const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

             // Update thumb position on mouse move
             const handleMouseMove = (e) => {
                 const deltaX = e.clientX - startX;
                 const newThumbPosition = thumbPosition + deltaX;
                 // Ensure the scrollbar thumb stays within bounds
                 const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                 const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                 scrollbarThumb.style.left = `${boundedPosition}px`;
                 imageListNhl.scrollLeft = scrollPosition;
             }
             // Remove event listeners on mouse up
             const handleMouseUp = () => {
                 document.removeEventListener("mousemove", handleMouseMove);
                 document.removeEventListener("mouseup", handleMouseUp);
             }
             // Add event listeners for drag interaction
             document.addEventListener("mousemove", handleMouseMove);
             document.addEventListener("mouseup", handleMouseUp);
         });
         // Slide images according to the slide button clicks
         slideButtons.forEach(button => {

             button.addEventListener("click", () => {
                 const direction = button.id === "prev-slide" ? -1 : 1;
                 const scrollAmount = imageListNhl.clientWidth * direction;
                 imageListNhl.scrollBy({ left: scrollAmount, behavior: "smooth" });
             });
         });
         // Show or hide slide buttons based on scroll position
         const handleSlideButtons = () => {


             console.log("Hello world", maxScrollLeft);


             slideButtons[0].style.display = imageListNhl.scrollLeft <= 0 ? "none" : "flex";
             slideButtons[1].style.display = imageListNhl.scrollLeft >= maxScrollLeft ? "none" : "flex";
         }
         // Update scrollbar thumb position based on image scroll
         const updateScrollThumbPosition = () => {
             const scrollPosition = imageListNhl.scrollLeft;
             const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
             scrollbarThumb.style.left = `${thumbPosition}px`;
         }
         // Call these two functions when image list scrolls
         imageListNhl.addEventListener("scroll", () => {
             updateScrollThumbPosition();
             handleSlideButtons();
         });
     }



     window.addEventListener("resize", initNHLSlider);
     window.addEventListener("load", initNHLSlider);

     var nhlImageItemCount = $('.nhl-image-list > .nhl-image-item').length;

     $('.nhl-slider-wrapper .nhl-image-list').css({'grid-template-columns': 'repeat(' + nhlImageItemCount + ', 1fr)'});

     const initNbaSlider = () => {
         const imageList = document.querySelector(".nba-slider-wrapper .nba-image-list");

         const slideButtons = document.querySelectorAll(".nba-slider-wrapper .nba-slide-button");
         const sliderScrollbar = document.querySelector(".nba-container-slider .nba-slider-scrollbar");
         const scrollbarThumb = sliderScrollbar.querySelector(".nba-scrollbar-thumb");
         const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

         // Handle scrollbar thumb drag
         scrollbarThumb.addEventListener("mousedown", (e) => {
             const startX = e.clientX;
             const thumbPosition = scrollbarThumb.offsetLeft;
             const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

             // Update thumb position on mouse move
             const handleMouseMove = (e) => {
                 const deltaX = e.clientX - startX;
                 const newThumbPosition = thumbPosition + deltaX;
                 // Ensure the scrollbar thumb stays within bounds
                 const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                 const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                 scrollbarThumb.style.left = `${boundedPosition}px`;
                 imageList.scrollLeft = scrollPosition;
             }
             // Remove event listeners on mouse up
             const handleMouseUp = () => {
                 document.removeEventListener("mousemove", handleMouseMove);
                 document.removeEventListener("mouseup", handleMouseUp);
             }
             // Add event listeners for drag interaction
             document.addEventListener("mousemove", handleMouseMove);
             document.addEventListener("mouseup", handleMouseUp);
         });
         // Slide images according to the slide button clicks
         slideButtons.forEach(button => {
             button.addEventListener("click", () => {
                 const direction = button.id === "prev-slide" ? -1 : 1;
                 const scrollAmount = imageList.clientWidth * direction;
                 imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
             });
         });
         // Show or hide slide buttons based on scroll position
         const handleSlideButtons = () => {
             slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
             slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
         }
         // Update scrollbar thumb position based on image scroll
         const updateScrollThumbPosition = () => {
             const scrollPosition = imageList.scrollLeft;
             const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
             scrollbarThumb.style.left = `${thumbPosition}px`;
         }
         // Call these two functions when image list scrolls
         imageList.addEventListener("scroll", () => {
             updateScrollThumbPosition();
             handleSlideButtons();
         });
     }
     window.addEventListener("resize", initNbaSlider);
     window.addEventListener("load", initNbaSlider);

     var nbaImageItemCount = $('.nba-image-item').length;
     $('.nba-slider-wrapper .nba-image-list').css({'grid-template-columns': 'repeat(' + nbaImageItemCount + ', 1fr)'});




     //nfl slider
      const initNflSlider = () => {
          const imageList = document.querySelector(".nfl-slider-wrapper .nfl-image-list");

          const slideButtons = document.querySelectorAll(".nfl-slider-wrapper .nfl-slide-button");
          const sliderScrollbar = document.querySelector(".nfl-container-slider .nfl-slider-scrollbar");
          const scrollbarThumb = sliderScrollbar.querySelector(".nfl-scrollbar-thumb");
          const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {
              const startX = e.clientX;
              const thumbPosition = scrollbarThumb.offsetLeft;
              const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

              // Update thumb position on mouse move
              const handleMouseMove = (e) => {
                  const deltaX = e.clientX - startX;
                  const newThumbPosition = thumbPosition + deltaX;
                  // Ensure the scrollbar thumb stays within bounds
                  const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                  const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                  scrollbarThumb.style.left = `${boundedPosition}px`;
                  imageList.scrollLeft = scrollPosition;
              }
              // Remove event listeners on mouse up
              const handleMouseUp = () => {
                  document.removeEventListener("mousemove", handleMouseMove);
                  document.removeEventListener("mouseup", handleMouseUp);
              }
              // Add event listeners for drag interaction
              document.addEventListener("mousemove", handleMouseMove);
              document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {
              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageList.clientWidth * direction;
                  imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageList.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageList.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }
      window.addEventListener("resize", initNflSlider);
      window.addEventListener("load", initNflSlider);

      var nflImageItemCount = $('.nfl-image-item').length;
      $('.nfl-slider-wrapper .nfl-image-list').css({'grid-template-columns': 'repeat(' + nflImageItemCount + ', 1fr)'});











      const initMLBSlider = () => {
          const imageListMlb = document.querySelector(".mlb-slider-wrapper .mlb-image-list");

          const slideButtons = document.querySelectorAll(".mlb-slider-wrapper .mlb-slide-button");
          const sliderScrollbar = document.querySelector(".mlb-container-slider .mlb-slider-scrollbar");
          const scrollbarThumb = sliderScrollbar.querySelector(".mlb-scrollbar-thumb");
          const maxScrollLeft = imageListMlb.scrollWidth - imageListMlb.clientWidth;
          // console.log('max clientWidth ', imageListMlb.clientWidth);
          // console.log('max scrollWidth ', imageListMlb.scrollWidth);
          // console.log('max Scroll Left ', maxScrollLeft);
          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {
              const startX = e.clientX;
              const thumbPosition = scrollbarThumb.offsetLeft;
              const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

              // Update thumb position on mouse move
              const handleMouseMove = (e) => {
                  const deltaX = e.clientX - startX;
                  const newThumbPosition = thumbPosition + deltaX;
                  // Ensure the scrollbar thumb stays within bounds
                  const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                  const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                  scrollbarThumb.style.left = `${boundedPosition}px`;
                  imageListMlb.scrollLeft = scrollPosition;
              }
              // Remove event listeners on mouse up
              const handleMouseUp = () => {
                  document.removeEventListener("mousemove", handleMouseMove);
                  document.removeEventListener("mouseup", handleMouseUp);
              }
              // Add event listeners for drag interaction
              document.addEventListener("mousemove", handleMouseMove);
              document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {

              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageListMlb.clientWidth * direction;
                  imageListMlb.scrollBy({ left: scrollAmount, behavior: "smooth" });
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {


              // console.log("Hello world", maxScrollLeft);


              slideButtons[0].style.display = imageListMlb.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageListMlb.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageListMlb.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageListMlb.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }



      window.addEventListener("resize", initMLBSlider);
      window.addEventListener("load", initMLBSlider);

      var mlbImageItemCount = $('.mlb-image-list > .mlb-image-item').length;

      $('.mlb-slider-wrapper .mlb-image-list').css({'grid-template-columns': 'repeat(' + mlbImageItemCount + ', 1fr)'});













      const initEPLSlider = () => {
          const imageListEpl = document.querySelector(".epl-slider-wrapper .epl-image-list");
          const slideButtons = document.querySelectorAll(".epl-slider-wrapper .epl-slide-button");
          const maxScrollLeft = imageListEpl.scrollWidth - imageListEpl.clientWidth;

          // Handle scrollbar thumb drag
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {
              button.addEventListener("click", () => {
                  // console.log(button);
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageListEpl.clientWidth * direction;
                  imageListEpl.scrollBy({ left: scrollAmount, behavior: "smooth" });
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              slideButtons[0].style.display = imageListEpl.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageListEpl.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }

          // Call these two functions when image list scrolls
          imageListEpl.addEventListener("scroll", () => {
              handleSlideButtons();
          });
      }



      window.addEventListener("resize", initEPLSlider);
      window.addEventListener("load", initEPLSlider);

      var eplImageItemCount = $('.epl-image-list > .epl-image-item').length;

      $('.epl-slider-wrapper .epl-image-list').css({'grid-template-columns': 'repeat(' + eplImageItemCount + ', 1fr)'});


  }



  if(window.location.pathname=='/nhl/home' ||
      window.location.pathname=='/nba/home' ||
      window.location.pathname=='/mlb/home' ||
      window.location.pathname=='/nfl/home'||
      window.location.pathname=='/epl/home'
  ) {





      //nhl home page image-list
      const initNhlLcSlider = () => {
          const imageList = document.querySelector(".nhl-lc-slider-wrapper .nhl-lc-image-list");

          const slideButtons = document.querySelectorAll(".nhl-lc-slider-wrapper .nhl-lc-slide-button");
          const sliderScrollbar = document.querySelector(".nhl-lc-container-slider .nhl-lc-slider-scrollbar");
          const scrollbarThumb = sliderScrollbar.querySelector(".nhl-lc-scrollbar-thumb");
          const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {
              // const startX = e.clientX;
              // const thumbPosition = scrollbarThumb.offsetLeft;
              // const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;
              //
              // // Update thumb position on mouse move
              // const handleMouseMove = (e) => {
              //     const deltaX = e.clientX - startX;
              //     const newThumbPosition = thumbPosition + deltaX;
              //     // Ensure the scrollbar thumb stays within bounds
              //     const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
              //     const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;
              //
              //     scrollbarThumb.style.left = `${boundedPosition}px`;
              //     imageList.scrollLeft = scrollPosition;
              // }
              // // Remove event listeners on mouse up
              // const handleMouseUp = () => {
              //     document.removeEventListener("mousemove", handleMouseMove);
              //     document.removeEventListener("mouseup", handleMouseUp);
              // }
              // // Add event listeners for drag interaction
              // document.addEventListener("mousemove", handleMouseMove);
              // document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {
              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageList.clientWidth * direction;
                  imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageList.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageList.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }
      window.addEventListener("resize", initNhlLcSlider);
      window.addEventListener("load", initNhlLcSlider);

      var nhlLcImageItemCount = $('.home-lc-image-list > .home-lc-image-item').length;
      $('.nhl-lc-slider-wrapper .home-lc-image-list').css({'grid-template-columns': 'repeat(' + nhlLcImageItemCount + ', 1fr)'});













//movement slider
      $('.triangle-green, .triangle-red').on('touchend click', function (event) {
          var data = $(this).attr('rel');
          if (data === 'green') {
              // console.log(data)
              // $('.' + data).removeClass('hidden')
              // $('.red').addClass('hidden')
              $('.' + data).show();
              $('.red').hide();
          } else {
              $('.' + data).show();
              $('.green').hide();
              // $('.green').addClass('hidden')
          }
          // this.$nextTick(() => {
              initMovementSlider();
              // window.addEventListener("resize", initMovementSlider);
              // window.addEventListener("load", initMovementSlider);
          // });
          $('.slider-wrapper .nhl-movement-image-list').css({'grid-template-columns': 'repeat(' + $('.' + data).length + ', 1fr)'});
      });

      const initMovementSlider = () => {


          const imageListMovement = document.querySelector(".nhl-movement-slider-wrapper .nhl-movement-image-list");
          const slideButtons = document.querySelectorAll(".nhl-movement-slider-wrapper .nhl-movement-slide-button");
          const maxScrollLeft = imageListMovement.scrollWidth - imageListMovement.clientWidth;

          slideButtons.forEach(button => {
              button.addEventListener("click", () => {
                  // console.log(button);
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageListMovement.clientWidth * direction;
                  imageListMovement.scrollBy({ left: scrollAmount, behavior: "smooth" });
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              console.log('max scroll left ', maxScrollLeft)
              slideButtons[0].style.display = imageListMovement.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageListMovement.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }

          // Call these two functions when image list scrolls
          imageListMovement.addEventListener("scroll", () => {
              handleSlideButtons();
          });
      }



      window.addEventListener("resize", initMovementSlider);
      window.addEventListener("load", initMovementSlider);

      var movementImageItemCount = $('.nhl-movement-image-list > .nhl-movement-image-item').length;

      $('.nhl-movement-slider-wrapper .nhl-movement-image-list').css({'grid-template-columns': 'repeat(' + movementImageItemCount + ', 1fr)'});




      const initNhlSgSlider = () => {
          const imageList = document.querySelector(".nhl-sg-slider-wrapper .nhl-sg-image-list");

          const slideButtons = document.querySelectorAll(".nhl-sg-slider-wrapper .nhl-sg-slide-button");
          const sliderScrollbar = document.querySelector(".nhl-sg-container-slider .nhl-sg-slider-scrollbar");
          const scrollbarThumb = sliderScrollbar.querySelector(".nhl-sg-scrollbar-thumb");
          const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {
              const startX = e.clientX;
              const thumbPosition = scrollbarThumb.offsetLeft;
              const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

              // Update thumb position on mouse move
              const handleMouseMove = (e) => {
                  const deltaX = e.clientX - startX;
                  const newThumbPosition = thumbPosition + deltaX;
                  // Ensure the scrollbar thumb stays within bounds
                  const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                  const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                  scrollbarThumb.style.left = `${boundedPosition}px`;
                  imageList.scrollLeft = scrollPosition;
              }
              // Remove event listeners on mouse up
              const handleMouseUp = () => {
                  document.removeEventListener("mousemove", handleMouseMove);
                  document.removeEventListener("mouseup", handleMouseUp);
              }
              // Add event listeners for drag interaction
              document.addEventListener("mousemove", handleMouseMove);
              document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks
          slideButtons.forEach(button => {
              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageList.clientWidth * direction;
                  imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageList.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageList.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }
      window.addEventListener("resize", initNhlSgSlider);
      window.addEventListener("load", initNhlSgSlider);

      var nhlSgImageItemCount = $('.nhl-sg-image-list > .nhl-sg-image-item').length;
      $('.nhl-sg-slider-wrapper .nhl-sg-image-list').css({'grid-template-columns': 'repeat(' + nhlSgImageItemCount + ', 1fr)'});









      if( window.location.pathname=='/nfl/home'){


          const initNhlPnSlider = () => {


              const homePnImageList = document.querySelector(".slider-wrapper .home-pn-image-list");

              const slideButtons = document.querySelectorAll(".nhl-pn-slider-wrapper .slide-button");
              const sliderScrollbar = document.querySelector(".nhl-pn-container-slider .nhl-pn-slider-scrollbar");
              const scrollbarThumb = sliderScrollbar.querySelector(".nhl-pn-scrollbar-thumb");
              const homePnMaxScrollLeft = homePnImageList.scrollWidth - homePnImageList.clientWidth;


              // Slide images according to the slide button clicks
              // slideButtons.forEach(button => {
              //
              //
              //     // var rel = button.getAttribute("rel")
              //     //
              //     // console.log(data);
              //     //  $('#prev-slide-'.data).css({'display': "none"});
              //
              //     button.addEventListener("click", () => {
              //
              //         var data = button.getAttribute("rel")
              //         // console.log('inside event ', data);
              //
              //         $( ".slider-wrapper .home-pn-image-list" ).each(function(){
              //             var data1 = $(this).attr('rel');
              //             if(data == data1){
              //
              //                 const containerImageList = document.querySelector(".slider-wrapper .image-list-"+ data);
              //                 const containerMaxScrollLeft1 = containerImageList.scrollWidth -containerImageList.clientWidth;
              //                 // console.log("data ", data);
              //                 // console.log("Container Image List", containerImageList);
              //                 // console.log("Hello world ", containerMaxScrollLeft1);
              //
              //                 // const direction = button.id === "prev-slide-"+data ? -1 : 1;
              //                 // const scrollAmount = $('image-list-' + data).clientWidth * direction;
              //                 // $('image-list-' + data).scrollBy({left: scrollAmount, behavior: "smooth"});
              //                 //
              //
              //                 const direction = button.id === "prev-slide-"+data ? -1 : 1;
              //                 const scrollAmount = containerImageList.clientWidth * direction;
              //                 containerImageList.scrollBy({left: scrollAmount, behavior: "smooth"});
              //                 // Call these two functions when image list scrolls
              //
              //                 //
              //                 // containerImageList.addEventListener("scroll", () => {
              //                 //
              //                 //      handleSlideButtonsContainer();
              //                 // });
              //
              //
              //                 const handleSlideButtonsContainer = () => {
              //                      console.log("scroll data ");
              //
              //                     // if(button.id === "prev-slide-"+data){
              //                         $("#prev-slide-"+data).css({'display': containerImageList.scrollLeft <= 0 ? "none !important" : "flex !important"});
              //                         // button.id.style.display = containerImageList.scrollLeft <= 0 ? "none" : "flex";
              //                     // }else if(button.id === "next-slide-"+data){
              //
              //                         $("#next-slide-"+data).css({'display':(containerImageList.scrollLeft + 1) >= containerMaxScrollLeft1 ? "none" : "flex"});
              //                         // button.id.style.display = (containerImageList.scrollLeft + 1) >= containerMaxScrollLeft1 ? "none" : "flex";
              //                     // }
              //                     //
              //                     // button.id.style.display = containerImageList.scrollLeft <= 0 ? "none" : "flex";
              //                     // button.id.style.display = (containerImageList.scrollLeft + 1) >= containerMaxScrollLeft1 ? "none" : "flex";
              //                     //
              //
              //                 }
              //             }
              //         })
              //
              //
              //     });
              // });
              // Show or hide slide buttons based on scroll position
              // const handleSlideButtons = () => {
              //
              //
              //
              //     // slideButtons[0].style.display = homePnImageList.scrollLeft <= 0 ? "none" : "flex";
              //     // slideButtons[1].style.display = (homePnImageList.scrollLeft + 1) >= homePnMaxScrollLeft ? "none" : "flex";
              //
              //
              // }
              //
              // homePnImageList.addEventListener("scroll", () => {
              //     console.log("Hell");
              //      handleSlideButtonsContainer();
              // });

              $('[id^="prev-slide"]').css('display', 'none');
    // Define handleSlideButtonsContainer globally
              const handleSlideButtonsContainer = () => {
                  $(".slider-wrapper .home-pn-image-list").each(function(e){


                      // console.log(e);
                      var data = $(this).attr('rel');
                      const containerImageList = $(".slider-wrapper .image-list-"+ data)[0];
                      const containerMaxScrollLeft1 = containerImageList.scrollWidth - containerImageList.clientWidth;
                      // console.log('data ', data)
                      // console.log('scroll left ', containerImageList.scrollLeft)
                      // console.log('scroll left ', containerMaxScrollLeft1)
                      $("#prev-slide-"+data).css({'display': containerImageList.scrollLeft <= 0 ? "none" : "flex"});
                      $("#next-slide-"+data).css({'display':(containerImageList.scrollLeft + 1) >= containerMaxScrollLeft1 ? "none" : "flex"});
                  });
              };

              // Attach click event listener to slide buttons
              slideButtons.forEach(button => {
                  $(button).on("click", () => {
                      var data = $(button).attr("rel");

                      $(".slider-wrapper .home-pn-image-list").each(function(){
                          var data1 = $(this).attr('rel');
                          if(data == data1){
                              const containerImageList = $(".slider-wrapper .image-list-"+ data)[0];
                              const direction = button.id === "prev-slide-"+data ? -1 : 1;
                              const scrollAmount = containerImageList.clientWidth * direction;
                              $(containerImageList).animate({scrollLeft: "+=" + scrollAmount}, "slow");

                              // Call handleSlideButtonsContainer after animation is complete
                              $(containerImageList).promise().done(function(){
                                  handleSlideButtonsContainer();
                              });
                          }
                      });
                  });
              });
              // Show or hide slide buttons based on scroll position
              const handleSlideButtons = () => {
                  // slideButtons[0].style.display = homePnImageList.scrollLeft <= 0 ? "none" : "flex";
                  // slideButtons[1].style.display = (homePnImageList.scrollLeft + 1) >= homePnMaxScrollLeft ? "none" : "flex";
              };
    // Show or hide slide buttons based on scroll position
              $(".slider-wrapper .home-pn-image-list").on("scroll", () => {
                  handleSlideButtonsContainer();
              });
          }
          window.addEventListener("resize", initNhlPnSlider);
          window.addEventListener("load", initNhlPnSlider);


          var gridColumnValue = '';
          $( ".home-pn-image-list" ).each(function() {
              var data = $(this).attr('rel');
              let containerLength = $('.' + data ).length;

             gridColumnValue = 'repeat(' + containerLength+ ', 1fr)';
              $('.slider-wrapper .image-list-'+data).css('grid-template-columns', gridColumnValue);
              // console.log(data , 'Legnth hom pn image item ', containerLength);
          });


      }else{
          const initNhlPnSlider = () => {
              const imageList = document.querySelector(".nhl-pn-slider-wrapper .nhl-pn-image-list");

              const slideButtons = document.querySelectorAll(".nhl-pn-slider-wrapper .nhl-pn-slide-button");
              const sliderScrollbar = document.querySelector(".nhl-pn-container-slider .nhl-pn-slider-scrollbar");
              const scrollbarThumb = sliderScrollbar.querySelector(".nhl-pn-scrollbar-thumb");
              const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
              // Handle scrollbar thumb drag
              scrollbarThumb.addEventListener("mousedown", (e) => {
                  const startX = e.clientX;
                  const thumbPosition = scrollbarThumb.offsetLeft;
                  const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

                  // Update thumb position on mouse move
                  const handleMouseMove = (e) => {
                      const deltaX = e.clientX - startX;
                      const newThumbPosition = thumbPosition + deltaX;
                      // Ensure the scrollbar thumb stays within bounds
                      const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                      const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                      scrollbarThumb.style.left = `${boundedPosition}px`;
                      imageList.scrollLeft = scrollPosition;
                  }
                  // Remove event listeners on mouse up
                  const handleMouseUp = () => {
                      document.removeEventListener("mousemove", handleMouseMove);
                      document.removeEventListener("mouseup", handleMouseUp);
                  }
                  // Add event listeners for drag interaction
                  document.addEventListener("mousemove", handleMouseMove);
                  document.addEventListener("mouseup", handleMouseUp);
              });
              // Slide images according to the slide button clicks
              slideButtons.forEach(button => {
                  button.addEventListener("click", () => {
                      const direction = button.id === "prev-slide" ? -1 : 1;
                      const scrollAmount = imageList.clientWidth * direction;
                      imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
                  });
              });
              // Show or hide slide buttons based on scroll position
              const handleSlideButtons = () => {
                  slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
                  slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
              }
              // Update scrollbar thumb position based on image scroll
              const updateScrollThumbPosition = () => {
                  const scrollPosition = imageList.scrollLeft;
                  const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
                  scrollbarThumb.style.left = `${thumbPosition}px`;
              }
              // Call these two functions when image list scrolls
              imageList.addEventListener("scroll", () => {
                  updateScrollThumbPosition();
                  handleSlideButtons();
              });
          }
          window.addEventListener("resize", initNhlPnSlider);
          window.addEventListener("load", initNhlPnSlider);



          var nhlPnImageItemCount = $('.home-pn-image-list > .home-pn-image-item').length;
          var nhlPnImageItem = document.querySelector('.home-pn-image-list > .home-pn-image-item');

          if (window.matchMedia("(max-width: 639px)").matches ) {

              if(firstSegment == 'nba'){
                  if (nhlPnImageItem) {
                      var nhlPnImageItemHeight = nhlPnImageItem.clientHeight;
                      // $('.home-pn-image-list > .home-pn-image-item').height(nhlPnImageItemHeight + 50);
                  }else{
                      console.log('Element not found');
                  }
              }

          }

          $('.slider-wrapper .home-pn-image-list').css({'grid-template-columns': 'repeat(' + nhlPnImageItemCount + ', 1fr)'});

      }
  }


  if(window.location.pathname=='/nhl/matchup1') {
      //nhl home page
      // console.log("Hello This is mike");
      const initNhlMatchupSlider = () => {

          const imageList = document.querySelector(".nhl-matchup-slider-wrapper .nhl-matchup-image-list");
          const slideButtons = document.querySelectorAll(".nhl-matchup-slider-wrapper .nhl-matchup-slide-button");
          const sliderScrollbar = document.querySelector(".nhl-matchup-container-slider .nhl-matchup-slider-scrollbar");
          const scrollbarThumb = sliderScrollbar.querySelector(".nhl-matchup-scrollbar-thumb");

          const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
          //imageList.clientWidth 1173
          //imageList.scrollWidth 1173


          // console.log('max imageListx', imageList);
          // console.log('max scrollWidth', imageList.scrollWidth);
          // console.log('max clientWidth', imageList.clientWidth);

          // Handle scrollbar thumb drag
          scrollbarThumb.addEventListener("mousedown", (e) => {

              const startX = e.clientX;
              const thumbPosition = scrollbarThumb.offsetLeft;
              const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

              // Update thumb position on mouse move
              const handleMouseMove = (e) => {
                  const deltaX = e.clientX - startX;
                  const newThumbPosition = thumbPosition + deltaX;
                  // Ensure the scrollbar thumb stays within bounds
                  const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                  const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                  scrollbarThumb.style.left = `${boundedPosition}px`;
                  imageList.scrollLeft = scrollPosition;
              }
              // Remove event listeners on mouse up
              const handleMouseUp = () => {
                  document.removeEventListener("mousemove", handleMouseMove);
                  document.removeEventListener("mouseup", handleMouseUp);
              }
              // Add event listeners for drag interaction
              document.addEventListener("mousemove", handleMouseMove);
              document.addEventListener("mouseup", handleMouseUp);
          });
          // Slide images according to the slide button clicks



          slideButtons.forEach(button => {
              // console.log("Click me one time ");
              // console.log("Hello world ", button.id);
              button.addEventListener("click", () => {
                  const direction = button.id === "prev-slide" ? -1 : 1;
                  const scrollAmount = imageList.clientWidth * direction;
                  imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
              });
          });
          // Show or hide slide buttons based on scroll position
          const handleSlideButtons = () => {
              slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
              slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
          }
          // Update scrollbar thumb position based on image scroll
          const updateScrollThumbPosition = () => {
              const scrollPosition = imageList.scrollLeft;
              const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
              scrollbarThumb.style.left = `${thumbPosition}px`;
          }
          // Call these two functions when image list scrolls
          imageList.addEventListener("scroll", () => {
              updateScrollThumbPosition();
              handleSlideButtons();
          });
      }
      window.addEventListener("resize", initNhlMatchupSlider);
      window.addEventListener("load", initNhlMatchupSlider);

  }



     if(window.location.pathname=='/nhl/line-combinations') {
        //  // Loop through each div with class starting with "combination-"
        $("div[id^='combo-']").each(function(){
            // Get the length of child elements (divs) within each div


            var data = $(this).attr("rel")
            // console.log('Hello world rel length ',  $('div#'+data + ' > div.'+data).length)
            // console.log('Hello world  ', data)


            var combinationLength = $(this).children().length;
            $(this).css({'grid-template-columns': 'repeat(' + combinationLength + ', 1fr)'});
            const initCombinationSlider = (data) => {
                const imageList = document.querySelector(".combination-slider-wrapper-"+data+" .combination-image-list-"+data);
                const slideButtons = document.querySelectorAll(".combination-slider-wrapper-"+data+" .combination-slide-button-"+data);
                const sliderScrollbar = document.querySelector(".combination-container-slider-"+data+" .combination-slider-scrollbar-"+data);
                const scrollbarThumb = sliderScrollbar.querySelector(".combination-scrollbar-thumb-"+data);
                const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
                // Handle scrollbar thumb drag
                scrollbarThumb.addEventListener("mousedown", (e) => {
                    const startX = e.clientX;
                    const thumbPosition = scrollbarThumb.offsetLeft;
                    const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb.offsetWidth;

                    // Update thumb position on mouse move
                    const handleMouseMove = (e) => {
                        const deltaX = e.clientX - startX;
                        const newThumbPosition = thumbPosition + deltaX;
                        // Ensure the scrollbar thumb stays within bounds
                        const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                        const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                        scrollbarThumb.style.left = `${boundedPosition}px`;
                        imageList.scrollLeft = scrollPosition;
                    }
                    // Remove event listeners on mouse up
                    const handleMouseUp = () => {
                        document.removeEventListener("mousemove", handleMouseMove);
                        document.removeEventListener("mouseup", handleMouseUp);
                    }
                    // Add event listeners for drag interaction
                    document.addEventListener("mousemove", handleMouseMove);
                    document.addEventListener("mouseup", handleMouseUp);
                });
                // Slide images according to the slide button clicks
                slideButtons.forEach(button => {
                    button.addEventListener("click", () => {
                        const direction = button.id === "prev-slide" ? -1 : 1;
                        const scrollAmount = imageList.clientWidth * direction;
                        imageList.scrollBy({left: scrollAmount, behavior: "smooth"});
                    });
                });
                // Show or hide slide buttons based on scroll position
                const handleSlideButtons = () => {
                    slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
                    slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
                }
                // Update scrollbar thumb position based on image scroll
                const updateScrollThumbPosition = () => {
                    const scrollPosition = imageList.scrollLeft;
                    const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
                    scrollbarThumb.style.left = `${thumbPosition}px`;
                }
                // Call these two functions when image list scrolls
                imageList.addEventListener("scroll", () => {
                    updateScrollThumbPosition();
                    handleSlideButtons();
                });
            }



            window.addEventListener("resize", initCombinationSlider(data));
            window.addEventListener("load", initCombinationSlider(data));


            // function myGreeting() {
            //     console.log("Hello world myGreeting");
            //
            // }

        });

         //
         // const myTimeout = setTimeout(myGreeting
         //     ,5000);
     }


});
 </script>