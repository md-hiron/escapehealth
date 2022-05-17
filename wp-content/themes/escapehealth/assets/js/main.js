(function($){
    $(document).ready(function(){
        $('.menu-toggle i').on('click', function(){
            $('.navigation').slideToggle();
        });

        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                '<div class="mfp-close"></div>'+
                '<iframe class="mfp-iframe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'+
              '</div>',
            }
        });


        $('a.upload-popup').on('click', function(e){
            e.preventDefault();
            $('.form-popup-wrap').show();
        });

        $('.form-minus').on('click', function(){
            $('.form-popup-wrap').hide();
        });
    });
})(jQuery);