/*Čisté JS mohl jsem to vyřešit přes querySelectro a addEventListener, ale tohle je tady cesta..
        jQuery kvůli tomuto jsem ani nevytahoval */
        openDTZ = function(e){
            let els = document.querySelectorAll(".dtz-item")
            els.forEach(function(el){
                el.classList.remove("active")
            })
            e.classList.add("active");
        }
        // Prostřídíme si formátování funkcní
        function toggleNav(e){
            document.getElementById("nav-x").classList.toggle("active");
            document.getElementById("nav-menu").classList.toggle("open");
        }
         
        
        /*
            $(".dtz-item").click(function(){
                $(".dtz-item").removeClass("active");
                $(this).addClass("active");

                -- Tady je víc možností jak by se to dalo řešit
                show, animate a nemuselo by to být řešení přes CSS animku.
            });
        */




        /*Slider*/
        var swiper = new Swiper('.swiper', {
        slidesPerView: "1",
        loop:true,
        centeredSlides: false,
        allowTouchMove:true,
        slideToClickedSlide:true,
        direction: "horizontal",
        speed: 400,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        },
        
        breakpoints: {
            576: {
                slidesPerView: "2",
            },
            1200: {
                slidesPerView: "3",
            },
        },
        on: {
        resize: function () {
                this.update();
            },
        },
        
    });

    $j(".nav-x").click(function() {
        $j('.overlay').addClass('overlay-open');
        $j(this).hide();
    });

    jQuery(document).ready(function(){
        let mdl_open = false;
        jQuery("#video-triangle").click(function(){
            jQuery("#unifer-modal").slideDown(100);
            mdl_open = true;
        });
        jQuery("#unifer-modal").click(function() {
            if (mdl_open == true){
                mdl_open = false;
                jQuery(this).slideUp(100);
            }
        });
    });



