


<script>

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
 }



 if(window.location.pathname=='/nhl/home') {
     //nhl home page
     const initNhlLcSlider = () => {
         const imageList = document.querySelector(".nhl-lc-slider-wrapper .nhl-lc-image-list");

         const slideButtons = document.querySelectorAll(".nhl-lc-slider-wrapper .nhl-lc-slide-button");
         const sliderScrollbar = document.querySelector(".nhl-lc-container-slider .nhl-lc-slider-scrollbar");
         const scrollbarThumb = sliderScrollbar.querySelector(".nhl-lc-scrollbar-thumb");
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
     window.addEventListener("resize", initNhlLcSlider);
     window.addEventListener("load", initNhlLcSlider);

     var nhlLcImageItemCount = $('.nhl-lc-image-list > .nhl-lc-image-item').length;
     $('.nhl-lc-slider-wrapper .nhl-lc-image-list').css({'grid-template-columns': 'repeat(' + nhlLcImageItemCount + ', 1fr)'});

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

     var nhlPnImageItemCount = $('.nhl-pn-image-list > .nhl-pn-image-item').length;
     $('.nhl-pn-slider-wrapper .nhl-pn-image-list').css({'grid-template-columns': 'repeat(' + nhlPnImageItemCount + ', 1fr)'});
 }


 if(window.location.pathname=='/nhl/matchup') {
     //nhl home page
     console.log("Hello This is mike");
     const initNhlMatchupSlider = () => {
         const imageList = document.querySelector(".nhl-matchup-slider-wrapper .nhl-matchup-image-list");

         const slideButtons = document.querySelectorAll(".nhl-matchup-slider-wrapper .nhl-matchup-slide-button");


         const sliderScrollbar = document.querySelector(".nhl-matchup-container-slider .nhl-matchup-slider-scrollbar");
         const scrollbarThumb = sliderScrollbar.querySelector(".nhl-matchup-scrollbar-thumb");
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
             // console.log("Click me one time ");
             console.log("Hello world ", button.id);
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

     // var nhlMatchupImageItemCount = $('.nhl-matchup-image-list > .nhl-matchup-image-item').length;
     // $('.nhl-matchup-slider-wrapper .nhl-matchup-image-list').css({'grid-template-columns': 'repeat(' + nhlMatchupImageItemCount + ', 1fr)'});
 }



$( document ).ready(function() {
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