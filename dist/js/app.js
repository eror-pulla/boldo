/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/assets/js/app.js":
/*!******************************!*\
  !*** ./src/assets/js/app.js ***!
  \******************************/
/***/ (() => {

$(document).ready(function () {
  // $('.mode-btn').text('Dark Mode');
  setTimeout(function () {
    $('.invert').addClass('is-inview');
    $('.nav').addClass('is-inview');
    $('.mode-btn').addClass('is-inview');
  }, 100);
  $(window).on('resize', function () {
    scroll.update();
  });
  var swiper = new Swiper(".mySwiper1", {
    loop: true,
    slidesPerView: 6,
    loopedSlidesLimit: false,
    slideToClickedSlide: true,
    loopFillGroupWithBlank: true,
    breakpoints: {
      1440: {
        slidesPerView: 6,
        spaceBetween: 10
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 10
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      650: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      300: {
        slidesPerView: 2,
        spaceBetween: 10
      }
    }
  });
  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    loop: true,
    // centeredSlides: true,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    breakpoints: {
      1200: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      300: {
        slidesPerView: 1,
        spaceBetween: 30
      }
    }
  });
  $(".menu-mobile-btn").on('click', function () {
    // $('.bread-crumb').removeClass('active-crumb');
    $('.menu-mobile-btn').toggleClass("rotate");
    $(".overlay").toggleClass("active-overlay");
  });
  var scroll = new LocomotiveScroll({
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
  });
  scroll.on('scroll', function () {
    // Check if the window has been scrolled
    if (scroll.scroll.instance.scroll.y > 100) {
      // Add CSS class to the header element
      $('.header').addClass('scroll-background');
    }
    if (scroll.scroll.instance.scroll.y < 100) {
      // Remove CSS class from the header element
      $('.header').removeClass('scroll-background');
    }
  });
  var storedMode = localStorage.getItem('mode');
  if (storedMode === 'dark-mode') {
    console.log('mode osht dark');
    $('body').addClass('dark-mode');
  }
  // $('.mode-btn').text('Dark Mode');
  $('.mode-btn').on('click', function () {
    var $this = $(this);
    $('body').toggleClass('dark-mode');
    if ($('body').hasClass('dark-mode')) {
      $this.text('Light Mode');
    } else {
      $this.text('Dark Mode');
    }
    // console.log('uprek');
    if ($('body').hasClass('dark-mode')) {
      // console.log('ka mode');
      localStorage.setItem('mode', 'dark-mode');
      $('.mode-btn').text('Light Mode');
    } else {
      localStorage.setItem('mode', 'light-mode');
      $('.mode-btn').text('Dark Mode');
    }
    // saa
  });

  if ($('body').hasClass('dark-mode')) {
    // console.log('ka mode');
    localStorage.setItem('mode', 'dark-mode');
    $('.mode-btn').text('Light Mode');
  } else {
    localStorage.setItem('mode', 'light-mode');
    $('.mode-btn').text('Dark Mode');
  }
  $('.ticks-wrap1').first().addClass('active-ticks');
  $('.ticks-wrap1').on('click', function () {
    $('.ticks-wrap1').not(this).removeClass('active-ticks');
    $(this).addClass('active-ticks');
    $('.graf-wrap').removeClass('active-img-ticks');
    // $('.graf-wrap').addClass('active-img-ticks');
    $('.graf-wrap').eq($(this).index()).addClass('active-img-ticks');
    $('.costumer2 .text-costumer h5').text($(this).text());
  });
  $('.collapse-menu').each(function () {
    var $CollapseItem = $(this);
    var $content = $CollapseItem.find('.collapse-inside');
    var height = $content[0].clientHeight;
    $content.css('height', '0');
    $CollapseItem.click(function () {
      $CollapseItem.find(".btn-collapse").toggleClass("active-img-collapse");
      if ($CollapseItem.hasClass('faq-item-open')) {
        $CollapseItem.removeClass('faq-item-open');
        $content.css('height', '0');
      } else {
        $CollapseItem.addClass('faq-item-open');
        $content.css('height', height);
      }
    });
  });
  $('.load-wrap').click(function () {
    var loadMoreButton = $(this);
    var container = $('.blog-wrap-home');
    $.ajax({
      type: 'POST',
      url: ajaxurl,
      dataType: 'json',
      data: {
        action: 'load_home_blogs'
      },
      success: function success(response) {
        var blogUrl = response;
        var blogPost = '';
        for (var index = 0; index < response.length; index++) {
          var pageURL = $(location).attr("href");
          blogPost += "\n            <div class=\"blog-card-home\">\n              <a href=\"" + pageURL + "" + response[index].project_slug + "\">\n                <img data-scroll src=\"" + response[index].projects_preview.img_card + "\" alt=\"\">\n                <div class=\"cat-wrap\">\n                  <p data-scroll class='cat'> " + response[index].categories[0].slug + "</p>\n                  <p data-scroll >" + response[index].date + "</p>\n                </div>\n                <p data-scroll>" + response[index].projects_preview.text + "</p>\n                <div class=\"blog-profile\">\n                  <img data-scroll class=\"profile\" src=\"" + response[index].projects_preview.profile_img + "\" alt=\"\">\n                  <p data-scroll>" + response[index].projects_preview.profile_name + "</p>\n                </div>\n              </a>\n            </div>\n\n            ";
          loadMoreButton.hide();
        }
        // console.log( blogPost );
        console.log(response);
        // Append the new posts to the existing ones
        $('.blog-wrap-home').append(blogPost);
        var currentLocation = window.location.href;

        // Add "/blog/" to the current location
        var newLocation = currentLocation + "/blog/";
        $('.blog-section').append("\n              <div data-scroll class=\"show-all\">\n                <a href=\"".concat(newLocation, "\">\n                  <button class=\"btn-show\">Show All</button>\n                </a>\n              </div>\n            "));
        //   $('.blog-section').append(`
        //   <div data-scroll class="show-all">
        //   <a href="">
        //       <button class="btn-show">Show All</button>
        //   </a>
        // </div>`);
        scroll.update();

        // $('.btn-show').show();
      },

      error: function error(_error) {
        console.log('error', _error);
      }
    });
  });
  $('#load-more-blog').click(function () {
    var loadMoreButton = $(this);
    var offset = 3;
    var container = $('.card-wrap');
    $.ajax({
      type: 'POST',
      url: ajaxurl,
      dataType: 'json',
      data: {
        action: 'load_more_blogs',
        offset: offset
      },
      success: function success(response) {
        var blogPost = '';
        for (var index = 0; index < response.length; index++) {
          var pageURL = $(location).attr("href");
          blogPost += "\n            <div class=\"blog-card\">\n              <a href=\"" + pageURL + "" + response[index].project_slug + "\">\n                <img data-scroll src=\"" + response[index].projects_preview.image + "\" alt=\"\">\n                <div class=\"cat-wrap\">\n                  <p data-scroll class='cat'> " + response[index].categories[0].slug + "</p>\n                  <p data-scroll class='date'>" + response[index].date + "</p>\n                </div>\n                <p data-scroll>" + response[index].title + "</p>\n                <div class=\"prof-wrap\">\n                  <img data-scroll src=\"" + response[index].projects_preview.profile_img + "\" alt=\"\">\n                  <p data-scroll>" + response[index].projects_preview.client_name + "</p>\n                </div>\n              </a>\n            </div>\n            ";
          loadMoreButton.hide();
        }
        // console.log( blogPost );
        console.log(response);
        // Append the new posts to the existing ones
        $('.card-wrap').append(blogPost);
        scroll.update();
      },
      error: function error(_error2) {
        console.log('error', _error2);
      }
    });
  });
  $('#load-more-service').click(function () {
    console.log('preka');
    var loadMoreButton = $(this);
    var container = $('.card-wrap');
    $.ajax({
      type: 'POST',
      url: ajaxurl,
      dataType: 'json',
      data: {
        action: 'load_more_services'
      },
      success: function success(response) {
        var blogPost = '';
        for (var index = 0; index < response.length; index++) {
          var pageURL = $(location).attr("href");
          blogPost += "\n            <div class=\"blog-card1\">\n              <a href=\"" + pageURL + "" + response[index].project_slug + "\">\n                <img data-scroll src=\"" + response[index].projects_preview.img_card + "\" alt=\"\">\n                <p data-scroll >" + response[index].projects_preview.text_card + "</p>\n              </a>\n            </div>\n            ";
          loadMoreButton.hide();
        }
        // console.log( blogPost );
        console.log(response);
        // Append the new posts to the existing ones
        $('.card-wrap').append(blogPost);
        scroll.update();
      },
      error: function error(_error3) {
        console.log('error', _error3);
      }
    });
  });
});

/***/ }),

/***/ "./src/assets/scss/app.scss":
/*!**********************************!*\
  !*** ./src/assets/scss/app.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/dist/js/app": 0,
/******/ 			"dist/css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["dist/css/app"], () => (__webpack_require__("./src/assets/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["dist/css/app"], () => (__webpack_require__("./src/assets/scss/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;