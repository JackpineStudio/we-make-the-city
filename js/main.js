        // var lastScrollTop = 0;
        // $(window).scroll(function(event){
        //     var st = $(this).scrollTop();
        //     if (st > lastScrollTop){
        //         // dowscroll code
        //     } else {
        //         // upscroll code
        //     }
        //     lastScrollTop = st;
        // });

        $(window).scroll(function(){
            $('.hero-unit').fadeOut(4000, function(){
                $('.hero-unit-scroll').slideDown(500);
            });
        }); 
