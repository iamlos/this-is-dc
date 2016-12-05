(function ($, root, undefined) {

    $(function () {
    /*$.scrollify({
        section : "section",
        easing: "easeOutExpo",
        scrollSpeed: 1100,
        offset : 0,
        scrollbars: true,
        standardScrollElements: "",
        setHeights: true,
        overflowScroll: true,
        before:function() {},
        after:function() {},
        afterResize:function() {},
        afterRender:function() {}
    });*/
        if($(window).width() >= 768){
            $.scrollify({
                section : "section",
                sectionName : false,
            });
        }
        $('.nav-container').click(function(){
            $('.navitems-container').toggleClass('active');
            $('.mobile-nav').toggleClass('open');
            $('body').toggleClass('noscroll');
        });
        
        var mql = window.matchMedia("(orientation: landscape)");
        mql.addListener(handleOrientationChange);
        handleOrientationChange(mql);

        function handleOrientationChange(mql) {
            if (mql.matches) {
              /* The viewport is currently in portrait orientation */
              $('.mobile-nav').addClass('landscape');
            } else {
              /* The viewport is currently in landscape orientation */
              $('.mobile-nav').removeClass('landscape');
            }
        }

        $('li.menu-item-has-children').click(function(){
            $('li.menu-item-has-children ').toggleClass('closed');
        });

        /*var $grid = $('.masonry').masonry({
          // options
          itemSelector: '.three-column',
          //columnWidth: 200
          fitWidth: true
        });
       /*
        $grid.imagesLoaded().progress( function() {
          $grid.masonry('layout');
        });*/
    });
})(jQuery, this);