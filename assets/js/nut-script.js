
(function ($) {
"use strict";

// ----------- simple_table
$('.simple_table_group_btn ul li').click(function(){
    $('.simple_table_column .price_default, .simple_table_column .order_btn_default, .simple_table_column .discount_default, .simple_table_column .total_price_default, .simple_table_column .renew_price_default').hide();
});

$(".simple_table_group_btn .monthly").click(function(){
    $(".simple_table_column").removeClass("annually biennially triennially");
    $(".simple_table_column").addClass("monthly");
    
    $(".simple_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});

$(".simple_table_group_btn .annually").click(function(){
    $(".simple_table_column").removeClass("monthly biennially triennially");
    $(".simple_table_column").addClass("annually");

    $(".simple_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});

$(".simple_table_group_btn .biennially").click(function(){
    $(".simple_table_column").removeClass("monthly annually triennially");
    $(".simple_table_column").addClass("biennially");

    $(".simple_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});

$(".simple_table_group_btn .triennially").click(function(){
    $(".simple_table_column").removeClass("monthly annually biennially");
    $(".simple_table_column").addClass("triennially");

    $(".simple_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});




// --------------slider table
$('.slider_table_group_btn ul li').click(function(){
    $(".slider_table_column .price_default, .slider_table_column .order_btn_default, .slider_table_column .discount_default, .slider_table_column .total_price_default, .slider_table_column .renew_price_default").hide();
});

$(".slider_table_group_btn .monthly").click(function(){
    $(".slider_table_column").removeClass("annually biennially triennially");
    $(".slider_table_column").addClass("monthly");

    $(".slider_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});

$(".slider_table_group_btn .annually").click(function(){
    $(".slider_table_column").removeClass("monthly biennially triennially");
    $(".slider_table_column").addClass("annually");

    $(".slider_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});

$(".slider_table_group_btn .biennially").click(function(){
    $(".slider_table_column").removeClass("monthly annually triennially");
    $(".slider_table_column").addClass("biennially");

    $(".slider_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});

$(".slider_table_group_btn .triennially").click(function(){
    $(".slider_table_column").removeClass("monthly annually biennially");
    $(".slider_table_column").addClass("triennially");

    $(".slider_table_group_btn ul li").removeClass("active");
    $(this).addClass("active");
});



// Start slider_table
    var sliderTable = function( $scope, $ ) {
        var $_this = $scope.find( '.slider_table' );
        var $currentID = '#'+$_this.attr( 'id' ),
            $loop   = $_this.data( 'loop' ),
            $dots   = $_this.data( 'dots' ),
            $navs   = $_this.data( 'navs' ),
            $margin   = $_this.data( 'margin' ),
            $show_item   = $_this.data( 'show_item' );

        var owl = $( $currentID );
        owl.owlCarousel({
            loop: $loop,
            margin: $margin,
            nav: $navs,
            dots: $dots,
            responsive:{
                0:{
                    items:1
                },
                767:{
                    items:3
                },
                1000:{
                    items: $show_item,
                }
            }
        })
    }

$(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/slider-table.default', sliderTable);
});



// Start slick_Marquee slider
    var slick_marquee = function( $scope, $ ) {
        var $_this = $scope.find( '.slick_marquee' );
        var $currentID = '#'+$_this.attr( 'id' ),
        $speed   = $_this.data( 'speed' ),
        $autoplay   = $_this.data( 'autoplay' ),
        $autoplaySpeed   = $_this.data( 'autoplaySpeed' ),
         $centerMode   = $_this.data( 'centerMode' ),
         $cssEase   = $_this.data( 'cssEase' ),
         $slidesToShow   = $_this.data( 'slidesToShow' ),
         $slidesToScroll   = $_this.data( 'slidesToScroll' ),
         $variableWidth   = $_this.data( 'variableWidth' ),
         $infinite   = $_this.data( 'infinite' ),
         $initialSlide   = $_this.data( 'initialSlide' ),
         $arrows   = $_this.data( 'arrows' ),
         $buttons   = $_this.data( 'buttons' );

        var marquee = $( $currentID );
        marquee.slick({
            speed: $speed,
            autoplay: $autoplay,
            autoplaySpeed: 0,
            centerMode: $centerMode,
            cssEase: 'linear',
            slidesToShow: $slidesToShow,
            slidesToScroll: $slidesToScroll,
            variableWidth: true,
            infinite: $infinite,
            initialSlide: $initialSlide,
            arrows: $arrows,
            buttons: $buttons

        })
    }

$(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/slick-marquee.default', slick_marquee);
});




})(jQuery);

