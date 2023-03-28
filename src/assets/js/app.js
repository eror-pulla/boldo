$(document).ready(function() {
  var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 6,
    loop:true ,
   
  });
  var swiper = new Swiper(".mySwiper2", {
    spaceBetween: 30,
    slidesPerView: 3,
    loop:true ,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


    $('.mode-btn').on('click', function() {
      var $this = $(this);
      $('body').toggleClass('dark-mode');
      if($('body').hasClass('dark-mode')){
        $this.text('Light Mode');
      }else{
        $this.text('Dark Mode');
      }
      console.log('uprek');
    });

    $('.ticks-wrap1').on('click', function() {
      // $(this).toggleClass('active-ticks');
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

  $('.blog-card:nth-last-child(-n+3)').hide();
  $('.wpcf7-spinner').hide();
  $('.btn-load').on('click', function() {
    $('.blog-card:nth-last-child(-n+3)').fadeIn();
    $('.btn-load').hide()
  });
    
  });