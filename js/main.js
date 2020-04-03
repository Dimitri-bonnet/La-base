(function($) {
    "use strict";
    $.fn.sliderResponsive = function(settings) {
      
      var set = $.extend( 
        {
          slidePause:2500,
          fadeSpeed: 800,
          autoPlay: "on",
          showArrows: "off", 
          hideDots: "off", 
          hoverZoom: "off",
          titleBarTop: "off"
        },
        settings
      ); 
      
      var $slider = $(this);
      var size = $slider.find("> div").length; //number of slides
      var position = 0; // current position of carousal
      var sliderIntervalID; // used to clear autoplay
        
      // Add a Dot for each slide
      $slider.append("<ul></ul>");
      $slider.find("> div").each(function(){
        $slider.find("> ul").append('<li></li>');
      });
        
      // Put .show on the first Slide
      $slider.find("div:first-of-type").addClass("show");
        
      // Put .showLi on the first dot
      $slider.find("li:first-of-type").addClass("showli")
  
       //fadeout all items except .show
      $slider.find("> div").not(".show").fadeOut();
      
      // If Autoplay is set to 'on' than start it
      if (set.autoPlay === "on") {
          startSlider(); 
      } 
      
      // If showarrows is set to 'on' then don't hide them
      if (set.showArrows === "on") {
          $slider.addClass('showArrows'); 
      }
      
      // If hideDots is set to 'on' then hide them
      if (set.hideDots === "on") {
          $slider.addClass('hideDots'); 
      }
      
      // If hoverZoom is set to 'off' then stop it
      if (set.hoverZoom === "off") {
          $slider.addClass('hoverZoomOff'); 
      }
      
      // If titleBarTop is set to 'on' then move it up
      if (set.titleBarTop === "on") {
          $slider.addClass('titleBarTop'); 
      }
  
      // function to start auto play
      function startSlider() {
        sliderIntervalID = setInterval(function() {
          nextSlide();
        }, set.slidePause);
      }
      
      // on mouseover stop the autoplay
      $slider.mouseover(function() {
        if (set.autoPlay === "on") {
          clearInterval(sliderIntervalID);
        }
      });
        
      // on mouseout starts the autoplay
      $slider.mouseout(function() {
        if (set.autoPlay === "on") {
          startSlider();
        }
      });
  
      //on right arrow click
      $slider.find("> .right").click(nextSlide)
  
      //on left arrow click
      $slider.find("> .left").click(prevSlide);
        
      // Go to next slide
      function nextSlide() {
        position = $slider.find(".show").index() + 1;
        if (position > size - 1) position = 0;
        changeCarousel(position);
      }
      
      // Go to previous slide
      function prevSlide() {
        position = $slider.find(".show").index() - 1;
        if (position < 0) position = size - 1;
        changeCarousel(position);
      }
  
      //when user clicks slider button
      $slider.find(" > ul > li").click(function() {
        position = $(this).index();
        changeCarousel($(this).index());
      });
  
      //this changes the image and button selection
      function changeCarousel() {
        $slider.find(".show").removeClass("show").fadeOut();
        $slider
          .find("> div")
          .eq(position)
          .fadeIn(set.fadeSpeed)
          .addClass("show");
        // The Dots
        $slider.find("> ul").find(".showli").removeClass("showli");
        $slider.find("> ul > li").eq(position).addClass("showli");
      }
  
      return $slider;
    };
  })(jQuery);
  
  
   
  //////////////////////////////////////////////
  // Activate each slider - change options
  //////////////////////////////////////////////
  $(document).ready(function() {
    
    $("#slider1").sliderResponsive({
    // Using default everything
      // slidePause: 5000,
      // fadeSpeed: 800,
      // autoPlay: "on",
      // showArrows: "off", 
      // hideDots: "off", 
      // hoverZoom: "on", 
      // titleBarTop: "off"
    });
    
  }); 
  

  function animerstyle(){
    if(document.getElementsByClassName('anime').className = "animated fadeOut");
  }



 // Script OpenStreet Map  47.096955, 2.447703

 var mymap = L.map('mapid').setView([47.096955,2.447703], 13);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 16,
    
    id: 'mapbox/streets-v11',
    accessToken: 'pk.eyJ1IjoiYXJpYm91bGUiLCJhIjoiY2szazNqNHJxMGNzaDNocXNyeGpza3M3dCJ9.N2r2d_DdlqJ-DBfRgPq0Vw'
}).addTo(mymap);

var icone = L.icon({
    iconUrl: "img/iconemap1.png",
    iconAnchor: [20, 55]
})

var marker = L.marker([47.096955, 2.447703],{icon: icone}).addTo(mymap);
marker.bindPopup('<h4 class="text-center"> <img src="img/logolabasesiteweb.png" height="50" width="50"> </h4><p>584 Les Distraits, Saint-Germain-du-Puy 18390.</p><p class="text-center">22h-05h : Jeudi,Vendredi et Samedi.</p>');