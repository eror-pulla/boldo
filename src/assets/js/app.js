$(document).ready(function() {

  setTimeout(function() {
      $('.invert').addClass('is-inview');
      $('.nav').addClass('is-inview');
      $('.mode-btn').addClass('is-inview');
  }, 100);



  var swiper = new Swiper(".mySwiper1", {
    loop:true,
    slidesPerView: 6,
    loopedSlidesLimit:false,
    slideToClickedSlide: true,
    loopFillGroupWithBlank: true,
    breakpoints: {
      1440: {
        slidesPerView: 6,
        spaceBetween: 10,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      650: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
      300: {
        slidesPerView: 2,
        spaceBetween: 10,
      }
    }
  });

  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    loop:true,
    // centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      300: {
        slidesPerView: 1,
        spaceBetween: 30,
      }
    }
  });

  $(".menu-mobile-btn").on('click', function () {
    // $('.bread-crumb').removeClass('active-crumb');
    $('.menu-mobile-btn').toggleClass("rotate");
    $(".overlay").toggleClass("active-overlay");

 });
 
  const scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});

scroll.on('scroll', function() {
  // Check if the window has been scrolled
  if (scroll.scroll.instance.scroll.y > 100) {
    // Add CSS class to the header element
    $('.header').addClass('scroll-background');
  } if (scroll.scroll.instance.scroll.y < 100) {
    // Remove CSS class from the header element
    $('#.header').removeClass('scroll-background');
  }
});

  var storedMode = localStorage.getItem('mode');
      if (storedMode === 'dark-mode') {
        console.log('mode osht dark');
        $('body').addClass('dark-mode');
      }

    $('.mode-btn').on('click', function() {
      var $this = $(this);
      $('body').toggleClass('dark-mode');
      if($('body').hasClass('dark-mode')){
        $this.text('Light Mode');
      }else{
        $this.text('Dark Mode');
      }
      // console.log('uprek');
      if ($('body').hasClass('dark-mode')) {
        console.log('ka mode');
        localStorage.setItem('mode', 'dark-mode');
      } else {
        localStorage.setItem('mode', 'light-mode');
      }
      // saa
      
    });




    $('.ticks-wrap1').first().addClass('active-ticks');
    $('.ticks-wrap1').on('click', function() {
      $('.ticks-wrap1').not(this).removeClass('active-ticks');
      $(this).addClass('active-ticks');
        $('.graf-wrap').removeClass('active-img-ticks');
        // $('.graf-wrap').addClass('active-img-ticks');
        $('.graf-wrap').eq($(this).index()).addClass('active-img-ticks');
      $('.costumer2 .text-costumer h5').text($(this).text())
    });

    $('.collapse-menu').each(function() {
      var $CollapseItem = $(this);
      var $content = $CollapseItem.find('.collapse-inside');
      var height = $content[0].clientHeight
      $content.css('height', '0');
      $CollapseItem.click(function() {
          if ($CollapseItem.hasClass('faq-item-open')) {
            $CollapseItem.removeClass('faq-item-open');
              $content.css('height', '0');
          } else {
            $CollapseItem.addClass('faq-item-open');
              $content.css('height', height);
              
          }
      });
  });


  // $('.btn-show').hide();
  // $('.blog-card-home:nth-last-child(-n+3)').hide();
  
  // $('.btn-show').hide()
  // $('.blog-card-home:nth-last-child(-n+3)').addClass('not-active-blog');
  // // $('.wpcf7-spinner').hide();
  // $('.btn-load').on('click', function() {
  //   $('.blog-card-home:nth-last-child(-n+3)').fadeIn();
  //   $('.btn-load').hide();
  //   $('.btn-show').show();
  //   $('.blog-card-home:nth-last-child(-n+3)').addClass('active-blog');
  // });

// $('.btn-show').hide();
// $('.blog-card-home:nth-last-child(-n+3)').hide();

// $('.btn-load').on('click', function() {
//   $('.blog-card-home:nth-last-child(-n+3)').fadeIn();
//   $('.btn-load').hide();
//   $('.btn-show').show();
//   $('.blog-card-home:nth-last-child(-n+3)').appendTo('.blog-wrap-home');
// });

// $('.btn-show').hide();
$('.load-wrap').click(function() {
  var loadMoreButton = $(this);
  var container = $('.blog-wrap-home');
    $.ajax({
        type: 'POST',
        url: ajaxurl,
        dataType: 'json',
        data: {action: 'load_home_blogs'},
        success: function(response) {
          let blogPost ='' ;
          for (let index = 0; index < response.length; index++) {
            var pageURL = $(location).attr("href");
            blogPost+=`
            <div class="blog-card-home">
              <a href="`+ pageURL +``+  response[index].project_slug +`">
                <img data-scroll src="`+ response[index].projects_preview.img_card +`" alt="">
                <div class="cat-wrap">
                  <p data-scroll class='cat'> `+ response[index].categories[0].slug  +`</p>
                  <p data-scroll >`+ response[index].date+`</p>
                </div>
                <p data-scroll>`+ response[index].projects_preview.text +`</p>
                <div class="blog-profile">
                  <img data-scroll class="profile" src="`+ response[index].projects_preview.profile_img +`" alt="">
                  <p data-scroll>`+ response[index].projects_preview.profile_name +`</p>
                </div>
              </a>
            </div>

            `
            
            loadMoreButton.hide();
            
          }
          // console.log( blogPost );
          console.log( response );
            // Append the new posts to the existing ones
            $('.blog-wrap-home').append(blogPost);
            $('.blog-section').append(`
            <div data-scroll class="show-all">
            <a href="<?php echo get_site_url().'/blog/' ?>">
                <button class="btn-show">Show All</button>
            </a>
          </div>`);
            scroll.update();

            // $('.btn-show').show();
        },
        error: function(error){
          console.log('error', error);
        }
    });

});

$('#load-more-blog').click(function() {
  var loadMoreButton = $(this);
  var container = $('.card-wrap');
    $.ajax({
        type: 'POST',
        url: ajaxurl,
        dataType: 'json',
        data: {action: 'load_more_blogs'},
        success: function(response) {
          let blogPost ='' ;
          for (let index = 0; index < response.length; index++) {
            var pageURL = $(location).attr("href");
            blogPost+=`
            <div class="blog-card">
              <a href="`+ pageURL +``+  response[index].project_slug +`">
                <img data-scroll src="`+ response[index].projects_preview.image +`" alt="">
                <div class="cat-wrap">
                  <p data-scroll class='cat'> `+ response[index].categories[0].slug  +`</p>
                  <p data-scroll class='date'>`+ response[index].date+`</p>
                </div>
                <p data-scroll>`+ response[index].projects_preview.text +`</p>
                <div class="prof-wrap">
                  <img data-scroll src="`+ response[index].projects_preview.profile_img +`" alt="">
                  <p data-scroll>`+ response[index].projects_preview.client_name +`</p>
                </div>
              </a>
            </div>
            `
            loadMoreButton.hide();
          }
          // console.log( blogPost );
          console.log( response );
            // Append the new posts to the existing ones
            $('.card-wrap').append(blogPost);
            scroll.update();
        },
        error: function(error){
          console.log('error', error);
        }
    });

});

$('#load-more-service').click(function() {
  var loadMoreButton = $(this);
  var container = $('.card-wrap');
    $.ajax({
        type: 'POST',
        url: ajaxurl,
        dataType: 'json',
        data: {action: 'load_more_services'},
        success: function(response) {
          let blogPost ='' ;
          for (let index = 0; index < response.length; index++) {
            var pageURL = $(location).attr("href");
            blogPost+=`
            <div class="blog-card1">
              <a href="`+ pageURL +``+  response[index].project_slug +`">
                <img data-scroll src="`+ response[index].projects_preview.img_card + `" alt="">
                <p data-scroll >`+ response[index].projects_preview.text_card +`</p>
              </a>
            </div>
            `
            loadMoreButton.hide();
          }
          // console.log( blogPost );
          console.log( response );
            // Append the new posts to the existing ones
            $('.card-wrap').append(blogPost);
            scroll.update();
        },
        error: function(error){
          console.log('error', error);
        }
    });

});
    
  });