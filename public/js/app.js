/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 *  Document   : app.js
 *  Author     : redstar
 *  Description: Core script to handle the entire theme and core functions
 *
 **/
var App = function () {
  // IE mode
  var _isIE = false;
  var _isIE2 = false;
  var isIE10 = false;
  var resizeHandlers = [];
  var assetsPath = '';
  var globalImgPath = 'img/';
  var globalPluginsPath = 'global/plugins/';
  var globalCssPath = 'css/';
  /************* Setting for IE ****************/

  var handleInit = function handleInit() {
    _isIE = !!navigator.userAgent.match(/MSIE 8.0/);
    _isIE2 = !!navigator.userAgent.match(/MSIE 9.0/);
    isIE10 = !!navigator.userAgent.match(/MSIE 10.0/);

    if (isIE10) {
      $('html').addClass('ie10'); // detect IE10 version
    }

    if (isIE10 || _isIE2 || _isIE) {
      $('html').addClass('ie'); // detect IE10 version
    }
  };
  /*************** Change theme color *************/


  var handleColorSetting = function handleColorSetting() {
    $(".settingPanelToggle").on("click", function () {
      $(".settingSidebar").toggleClass("showSettingPanel");
    });
    $(".page-content-wrapper").on("click", function () {
      $(".settingSidebar").removeClass("showSettingPanel");
    });
  };
  /*************** Change Language *************/


  var handleLanguage = function handleLanguage() {
    $(document).on('click', '.language-switch .dropdown-menu li a', function () {
      $(".language-switch>a").html($(this).html() + '<span class="fa fa-angle-down"></span>');
      $(".language-switch>a img").addClass("position-left");
    });
  };
  /*************** Hover Sidemenu *************/


  var handleHoverSidemenu = function handleHoverSidemenu() {
    $(".sidemenu-hover-submenu").parent().parent().css("position", "relative");
  };
  /************* Handle theme layout ****************/


  var handleTheme = function handleTheme() {
    var panel = $('.chatpane');

    if ($('body').hasClass('page-boxed') === false) {
      $('.layout-option', panel).val("fluid");
    }

    $('.sidebar-option', panel).val("default");
    $('.page-header-option', panel).val("fixed");
    $('.page-footer-option', panel).val("default");

    if ($('.sidebar-pos-option').attr("disabled") === false) {
      $('.sidebar-pos-option', panel).val('left');
    }

    var lastSelectedLayout = '';

    var setLayout = function setLayout() {
      var layoutOption = $('.layout-option', panel).val();
      var sidebarOption = $('.sidebar-option', panel).val();
      var headerOption = $('.page-header-option', panel).val();
      var footerOption = $('.page-footer-option', panel).val();
      var sidebarPosOption = $('.sidebar-pos-option', panel).val();
      var sidebarStyleOption = $('.sidebar-style-option', panel).val();
      var sidebarMenuOption = $('.sidebar-menu-option', panel).val();
      var headerTopDropdownStyle = $('.page-header-top-dropdown-style-option', panel).val();

      if (sidebarOption == "fixed" && headerOption == "default") {
        alert('Default Header with Fixed Sidebar option is not supported. Proceed with Fixed Header with Fixed Sidebar.');
        $('.page-header-option', panel).val("fixed");
        $('.sidebar-option', panel).val("fixed");
        sidebarOption = 'fixed';
        headerOption = 'fixed';
      }

      resetLayout(); // reset layout to default state

      if (layoutOption === "boxed") {
        $("body").addClass("page-boxed"); // set header

        $('.page-header > .page-header-inner').addClass("container");
        var cont = $('body > .clearfix').after('<div class="container"></div>'); // set content

        $('.page-container').appendTo('body > .container'); // set footer

        if (footerOption === 'fixed') {
          $('.page-footer').html('<div class="container">' + $('.page-footer').html() + '</div>');
        } else {
          $('.page-footer').appendTo('body > .container');
        }
      }

      if (lastSelectedLayout != layoutOption) {
        //layout changed, run responsive handler: 
        App.runResizeHandlers();
      }

      lastSelectedLayout = layoutOption;
      /************ header ******************/

      if (headerOption === 'fixed') {
        $("body").addClass("page-header-fixed");
        $(".page-header").removeClass("navbar-static-top").addClass("navbar-fixed-top");
      } else {
        $("body").removeClass("page-header-fixed");
        $(".page-header").removeClass("navbar-fixed-top").addClass("navbar-static-top");
      }
      /************ sidebar *****************/


      if ($('body').hasClass('page-full-width') === false) {
        if (sidebarOption === 'fixed') {
          $("body").addClass("sidemenu-container-fixed");
          $("sidemenu").addClass("sidemenu-fixed");
          $("sidemenu").removeClass("page-sidebar-menu-default");
          Layout.initFixedSidebarHoverEffect();
        } else {
          $("body").removeClass("sidemenu-container-fixed");
          $("page-sidebar-menu").addClass("page-sidebar-menu-default");
          $("page-sidebar-menu").removeClass("sidemenu-default");
          $('.sidemenu').unbind('mouseenter').unbind('mouseleave');
        }
      }
      /********* top dropdown style ************/


      if (headerTopDropdownStyle === 'dark') {
        $(".top-menu > .navbar-nav > li.dropdown").addClass("dropdown-dark");
      } else {
        $(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");
      }
      /************* footer ****************/


      if (footerOption === 'fixed') {
        $("body").addClass("page-footer-fixed");
      } else {
        $("body").removeClass("page-footer-fixed");
      }
      /*********** sidebar style ***************/


      if (sidebarStyleOption === 'light') {
        $(".page-sidebar-menu").addClass("page-sidebar-menu-light");
      } else {
        $(".page-sidebar-menu").removeClass("page-sidebar-menu-light");
      }
      /********* sidebar menu ***********************/


      if (sidebarMenuOption === 'hover') {
        if (sidebarOption == 'fixed') {
          $('.sidebar-menu-option', panel).val("accordion");
          alert("Hover Sidebar Menu is not compatible with Fixed Sidebar Mode. Select Default Sidebar Mode Instead.");
        } else {
          $(".sidemenu").addClass("sidemenu-hover-submenu");
        }
      } else {
        $(".sidemenu").removeClass("sidemenu-hover-submenu");
      }
      /**************** sidebar left right position setting **************/


      if (sidebarPosOption === 'right') {
        $("body").addClass("sidemenu-container-reversed");
        $('#frontend-link').tooltip('destroy').tooltip({
          placement: 'left'
        });
      } else {
        $("body").removeClass("sidemenu-container-reversed");
        $('#frontend-link').tooltip('destroy').tooltip({
          placement: 'right'
        });
      }

      Layout.fixContentHeight(); // fix content height            

      Layout.initFixedSidebar(); // reinitialize fixed sidebar
    };

    $(document).on('click', '.toggler', panel, function () {
      $('.toggler').hide();
      $('.toggler-close').show();
      $('.chatpane > .theme-options').show();
    });
    $(document).on('click', '.toggler-close', panel, function () {
      $('.toggler').show();
      $('.toggler-close').hide();
      $('.chatpane > .theme-options').hide();
    });
    /*************** spinner  button ******************/

    $(document).on('click', '.spinner button', function () {
      var btn = $(this);
      var input = btn.closest('.spinner').find('input');
      var step = 1;

      if (input.attr('step') != undefined) {
        step = parseInt(input.attr('step'), 10);
      }

      if (btn.attr('data-dir') == 'up') {
        if (input.attr('max') == undefined || parseInt(input.val(), 10) < parseInt(input.attr('max'), 10)) {
          input.val(parseInt(input.val(), 10) + step);
        } else {
          btn.next("disabled", true);
        }
      } else {
        if (input.attr('min') == undefined || parseInt(input.val(), 10) > parseInt(input.attr('min'), 10)) {
          input.val(parseInt(input.val(), 10) - step);
        } else {
          btn.prev("disabled", true);
        }
      }
    });
    /*************** TO DO **********************/

    $(document).on('click', '.todo-check label', function () {
      $(this).parents('li').children('.todo-title').toggleClass('line-through');
    });
    $(document).on('click', '.todo-remove', function () {
      $(this).closest("li").remove();
      return false;
    });
    $(document).on('click', '.panel .tools .fa-times', function () {
      $(this).parents(".panel").parent().remove();
    });
    $('.tooltips').tooltip(); // clickable row for email

    $(document).on('click', '.clickable-row', function () {
      window.document.location = $(this).data("link");
    });
    /************* collapse button in panel***************8*/

    $(document).on('click', '.card .tools .t-collapse', function () {
      var el = $(this).parents(".card").children(".card-body");

      if ($(this).hasClass("fa-chevron-down")) {
        $(this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
        el.slideUp(200);
      } else {
        $(this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
        el.slideDown(200);
      }
    });
    /**************** close button in panel *****************/

    $(document).on('click', '.card .tools .t-close', function () {
      $(this).parents(".card").parent().remove();
    });
    /****************** refresh button in panel *****************/

    $('.box-refresh').on('click', function (br) {
      br.preventDefault();
      $("<div class='refresh-block'><span class='refresh-loader'><i class='fa fa-spinner fa-spin'></i></span></div>").appendTo($(this).parents('.tools').parents('.card-head').parents('.card'));
      setTimeout(function () {
        $('.refresh-block').remove();
      }, 1000);
    });
    /***************** set default theme options **************************/

    if ($("body").hasClass("page-boxed")) {
      $('.layout-option', panel).val("boxed");
    }

    if ($("body").hasClass("sidemenu-container-fixed")) {
      $('.sidebar-option', panel).val("fixed");
    }

    if ($("body").hasClass("page-header-fixed")) {
      $('.page-header-option', panel).val("fixed");
    }

    if ($("body").hasClass("page-footer-fixed")) {
      $('.page-footer-option', panel).val("fixed");
    }

    if ($("body").hasClass("sidemenu-container-reversed")) {
      $('.sidebar-pos-option', panel).val("right");
    }

    if ($(".page-sidebar-menu").hasClass("page-sidebar-menu-light")) {
      $('.sidebar-style-option', panel).val("light");
    }

    if ($(".page-sidebar-menu").hasClass("page-sidebar-menu-hover-submenu")) {
      $('.sidebar-menu-option', panel).val("hover");
    }

    var sidebarOption = $('.sidebar-option', panel).val();
    var headerOption = $('.page-header-option', panel).val();
    var footerOption = $('.page-footer-option', panel).val();
    var sidebarPosOption = $('.sidebar-pos-option', panel).val();
    var sidebarStyleOption = $('.sidebar-style-option', panel).val();
    var sidebarMenuOption = $('.sidebar-menu-option', panel).val();
    $('.layout-option, .page-header-option, .page-header-top-dropdown-style-option, .sidebar-option, .page-footer-option, .sidebar-pos-option, .sidebar-style-option, .sidebar-menu-option', panel).change(setLayout);
  };
  /************ Reset theme layout ********************/


  var resetLayout = function resetLayout() {
    $("body").removeClass("page-boxed").removeClass("page-footer-fixed").removeClass("sidemenu-container-fixed").removeClass("page-header-fixed").removeClass("sidemenu-container-reversed");
    $('.page-header > .page-header-inner').removeClass("container");

    if ($('.page-container').parent(".container").length === 1) {
      $('.page-container').insertAfter('body > .clearfix');
    }

    if ($('.page-footer > .container').length === 1) {
      $('.page-footer').html($('.page-footer > .container').html());
    } else if ($('.page-footer').parent(".container").length === 1) {
      $('.page-footer').insertAfter('.page-container');
      $('.scroll-to-top').insertAfter('.page-footer');
    }

    $(".top-menu > .navbar-nav > li.dropdown").removeClass("dropdown-dark");
    $('body > .container').remove();
  }; // runs callback functions set by App.addResponsiveHandler().


  var _runResizeHandlers = function _runResizeHandlers() {
    // reinitialize other subscribed elements
    for (var i = 0; i < resizeHandlers.length; i++) {
      var each = resizeHandlers[i];
      each.call();
    }
  };
  /********** handle the layout reinitialization on window resize ***********/


  var handleOnResize = function handleOnResize() {
    var resize;

    if (_isIE) {
      var currheight;
      $(window).resize(function () {
        if (currheight == document.documentElement.clientHeight) {
          return; //quite event since only body resized not window.
        }

        if (resize) {
          clearTimeout(resize);
        }

        resize = setTimeout(function () {
          _runResizeHandlers();
        }, 50); // wait 50ms until window resize finishes.                

        currheight = document.documentElement.clientHeight; // store last body client height
      });
    } else {
      $(window).resize(function () {
        if (resize) {
          clearTimeout(resize);
        }

        resize = setTimeout(function () {
          _runResizeHandlers();
        }, 50); // wait 50ms until window resize finishes.
      });
    }
  };
  /*************** Handles Bootstrap switches in setting panel  ********/


  var handleBootstrapSwitch = function handleBootstrapSwitch() {
    if (!$().bootstrapSwitch) {
      return;
    }

    $('.make-switch').bootstrapSwitch();
  };
  /*************** Handles Bootstrap Tabs **********************/


  var handleTabs = function handleTabs() {
    //activate tab if tab id provided in the URL
    if (encodeURI(location.hash)) {
      var tabid = encodeURI(location.hash.substr(1));
      $('a[href="#' + tabid + '"]').parents('.tab-pane:hidden').each(function () {
        var tabid = $(this).attr("id");
        $('a[href="#' + tabid + '"]').click();
      });
      $('a[href="#' + tabid + '"]').click();
    }

    if ($().tabdrop) {
      $('.tabbable-tabdrop .nav-pills, .tabbable-tabdrop .nav-tabs').tabdrop({
        text: '<i class="fa fa-ellipsis-v"></i>&nbsp;<i class="fa fa-angle-down"></i>'
      });
    }
  };
  /************* Handles Bootstrap Dropdowns  ********************/


  var handleDropdowns = function handleDropdowns() {
    /*
      Hold dropdown on click  
    */
    $('body').on('click', '.dropdown-menu.hold-on-click', function (e) {
      e.stopPropagation();
    });
  };
  /************** Handles counterup plugin wrapper ****************/


  var handleCounterup = function handleCounterup() {
    if (!$().counterUp) {
      return;
    }

    $("[data-counter='counterup']").counterUp({
      delay: 10,
      time: 1000
    });
  }; // Fix input placeholder issue for IE8 and IE9


  var handleFixInputPlaceholderForIE = function handleFixInputPlaceholderForIE() {
    //fix html5 placeholder attribute for ie7 & ie8
    if (_isIE || _isIE2) {
      // ie8 & ie9
      // this is html5 placeholder fix for inputs, inputs with placeholder-no-fix class will be skipped(e.g: we need this for password fields)
      $('input[placeholder]:not(.placeholder-no-fix), textarea[placeholder]:not(.placeholder-no-fix)').each(function () {
        var input = $(this);

        if (input.val() === '' && input.attr("placeholder") !== '') {
          input.addClass("placeholder").val(input.attr('placeholder'));
        }

        input.focus(function () {
          if (input.val() == input.attr('placeholder')) {
            input.val('');
          }
        });
        input.blur(function () {
          if (input.val() === '' || input.val() == input.attr('placeholder')) {
            input.val(input.attr('placeholder'));
          }
        });
      });
    }
  }; // Handle Select2 Dropdowns


  var handleSelect2 = function handleSelect2() {
    if ($().select2) {
      $.fn.select2.defaults.set("theme", "bootstrap");
      $('.select2me').select2({
        placeholder: "Select",
        width: 'auto',
        allowClear: true
      });
    }
  }; // handle group element heights


  var handleHeight = function handleHeight() {
    $('[data-auto-height]').each(function () {
      var parent = $(this);
      var items = $('[data-height]', parent);
      var height = 0;
      var mode = parent.attr('data-mode');
      var data_offset = parent.attr('data-offset') ? parent.attr('data-offset') : 0;
      var offset = parseInt(data_offset, 10);
      items.each(function () {
        if ($(this).attr('data-height') == "height") {
          $(this).css('height', '');
        } else {
          $(this).css('min-height', '');
        }

        var height_ = mode == 'base-height' ? $(this).outerHeight() : $(this).outerHeight(true);

        if (height_ > height) {
          height = height_;
        }
      });
      height = height + offset;
      items.each(function () {
        if ($(this).attr('data-height') == "height") {
          $(this).css('height', height);
        } else {
          $(this).css('min-height', height);
        }
      });

      if (parent.attr('data-related')) {
        $(parent.attr('data-related')).css('height', parent.height());
      }
    });
  }; // Handles quick sidebar toggler


  var handleQuickSidebarToggler = function handleQuickSidebarToggler() {
    // close sidebar using button click
    $(document).on('click', '.dropdown-quick-sidebar-toggler a', function (e) {
      $('body').toggleClass('chat-sidebar-open');
    }); // close sidebar when click outside box

    $(document).on('click', '.page-content', function (e) {
      if ($("body").hasClass("chat-sidebar-open")) {
        $('body').toggleClass('chat-sidebar-open');
      }
    }); // close sidebar using esc key

    $(document).on('keydown', function (e) {
      if (e.keyCode === 27 && $("body").hasClass("chat-sidebar-open")) {
        // ESC
        $('body').toggleClass('chat-sidebar-open');
      }
    });
  };
  /********Sidebar slim-menu*********/


  var handleslimscroll_menu = function handleslimscroll_menu() {
    $(".slimscroll-style").slimscroll({
      height: $(window).height() - 90,
      position: "right",
      size: "5px",
      color: "#9ea5ab",
      wheelStep: 10,
      touchScrollStep: 50
    });
    $(".small-slimscroll-style").slimscroll({
      height: "260px",
      position: "right",
      size: "5px",
      color: "#9ea5ab",
      wheelStep: 10,
      touchScrollStep: 50
    });
  };

  handleChatScrollbar = function handleChatScrollbar() {
    var t = $(".chat-sidebar-chat"),
        i = function i() {
      var i,
          a = t.find(".chat-sidebar-item"),
          e = $(".chat-sidebar-chat-users").attr("data-height");
      i = $(".chat-sidebar-chat-users").attr("data-height") - 80 - t.find(".nav-justified > .nav-tabs").outerHeight(), a.attr("data-height", i), a.css("height", e + "px"), a.css("overflow-y", "auto");
    };

    i(), App.addResizeHandler(i);
  }; // Handles quick sidebar settings


  var handleQuickSidebarSettings = function handleQuickSidebarSettings() {
    var wrapper = $('.chat-sidebar-container');

    var initSettingsSlimScroll = function initSettingsSlimScroll() {
      var settingsList = wrapper.find('.chat-sidebar-settings-list');
      var settingsListHeight;
      settingsListHeight = wrapper.height() - 80 - wrapper.find('.nav-justified > .nav-tabs').outerHeight(); // alerts list 

      settingsList.attr("data-height", settingsListHeight);
      settingsList.css("height", wrapper.height() + "px");
      settingsList.css("overflow-y", "auto");
    };

    initSettingsSlimScroll();
    App.addResizeHandler(initSettingsSlimScroll); // reinitialize on window resize
  }; //* END:CORE HANDLERS *//


  return {
    //main function to initiate the theme
    init: function init() {
      //Core handlers
      handleInit(); // initialize core variables

      handleTheme();
      handleOnResize(); // set and handle responsive    

      handleColorSetting();
      handleLanguage();
      handleHoverSidemenu(); //UI Component handlers     

      handleBootstrapSwitch(); // handle bootstrap switch plugin

      handleSelect2(); // handle custom Select2 dropdowns

      handleDropdowns(); // handle dropdowns

      handleTabs(); // handle tabs

      handleCounterup(); // handle counterup instances

      handleQuickSidebarToggler(); // handles quick sidebar's toggler

      handleQuickSidebarSettings(); // handles quick sidebar's setting

      handleChatScrollbar();
      handleslimscroll_menu(); //Handle group element heights

      this.addResizeHandler(handleHeight); // handle auto calculating height on window resize

      handleFixInputPlaceholderForIE(); //IE8 & IE9 input placeholder issue fix
    },
    //public function to add callback a function which will be called on window resize
    addResizeHandler: function addResizeHandler(func) {
      resizeHandlers.push(func);
    },
    //public functon to call _runresizeHandlers
    runResizeHandlers: function runResizeHandlers() {
      _runResizeHandlers();
    },
    // wrApper function to scroll(focus) to an element
    scrollTo: function scrollTo(el, offeset) {
      var pos = el && el.length > 0 ? el.offset().top : 0;

      if (el) {
        if ($('body').hasClass('page-header-fixed')) {
          pos = pos - $('.page-header').height();
        } else if ($('body').hasClass('page-header-top-fixed')) {
          pos = pos - $('.page-header-top').height();
        } else if ($('body').hasClass('page-header-menu-fixed')) {
          pos = pos - $('.page-header-menu').height();
        }

        pos = pos + (offeset ? offeset : -1 * el.height());
      }

      $('html,body').animate({
        scrollTop: pos
      }, 'slow');
    },
    // function to scroll to the top
    scrollTop: function scrollTop() {
      App.scrollTo();
    },
    startPageLoading: function startPageLoading(options) {
      if (options && options.animate) {
        $('.page-spinner-bar').remove();
        $('body').append('<div class="page-spinner-bar"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>');
      } else {
        $('.page-loading').remove();
        $('body').append('<div class="page-loading"><img src="' + this.getGlobalImgPath() + 'loading-spinner-grey.gif"/>&nbsp;&nbsp;<span>' + (options && options.message ? options.message : 'Loading...') + '</span></div>');
      }
    },
    stopPageLoading: function stopPageLoading() {
      $('.page-loading, .page-spinner-bar').remove();
    },
    //public helper function to get actual input value(used in IE9 and IE8 due to placeholder attribute not supported)
    getActualVal: function getActualVal(el) {
      el = $(el);

      if (el.val() === el.attr("placeholder")) {
        return "";
      }

      return el.val();
    },
    //public function to get a paremeter by name from URL
    getURLParameter: function getURLParameter(paramName) {
      var searchString = window.location.search.substring(1),
          i,
          val,
          params = searchString.split("&");

      for (i = 0; i < params.length; i++) {
        val = params[i].split("=");

        if (val[0] == paramName) {
          return unescape(val[1]);
        }
      }

      return null;
    },
    getViewPort: function getViewPort() {
      var e = window,
          a = 'inner';

      if (!('innerWidth' in window)) {
        a = 'client';
        e = document.documentElement || document.body;
      }

      return {
        width: e[a + 'Width'],
        height: e[a + 'Height']
      };
    },
    getUniqueID: function getUniqueID(prefix) {
      return 'prefix_' + Math.floor(Math.random() * new Date().getTime());
    },
    // check IE8 mode
    isIE8: function isIE8() {
      return _isIE;
    },
    // check IE9 mode
    isIE9: function isIE9() {
      return _isIE2;
    },
    getAssetsPath: function getAssetsPath() {
      return assetsPath;
    },
    setAssetsPath: function setAssetsPath(path) {
      assetsPath = path;
    },
    setGlobalImgPath: function setGlobalImgPath(path) {
      globalImgPath = path;
    },
    getGlobalImgPath: function getGlobalImgPath() {
      return assetsPath + globalImgPath;
    },
    getGlobalCssPath: function getGlobalCssPath() {
      return assetsPath + globalCssPath;
    },
    getResponsiveBreakpoint: function getResponsiveBreakpoint(size) {
      // bootstrap responsive breakpoints
      var sizes = {
        'xs': 480,
        // extra small
        'sm': 768,
        // small
        'md': 992,
        // medium
        'lg': 1200 // large

      };
      return sizes[size] ? sizes[size] : 0;
    }
  };
}();

jQuery(document).ready(function () {
  App.init(); // init core componets

  $(".chat-sidebar-chat-user-messages").animate({
    scrollTop: $(document).height()
  }, 1000);
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\user\Desktop\Nouveau dossier\Gestion-Des-Projets\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\user\Desktop\Nouveau dossier\Gestion-Des-Projets\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });