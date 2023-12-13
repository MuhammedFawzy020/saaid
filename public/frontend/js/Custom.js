$(document).ready(function () {
    $(window).scroll(function () {
        var appScroll = $(document).scrollTop();
        if (appScroll >= 1) {
            $("header .navbar").addClass("headerAnimate");
        } else {
            $("header .navbar").removeClass("headerAnimate");
        }
    });
    // // side menu
    $(".sideBtn").click(function () {
        $(this).toggleClass("active");
        $(".sideMenu").toggleClass("active");
    });
    // show all
    $(".showAll").on("click", function (event) {
        // $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass("open");
    });


    //  Services Carousel function by = owl.carousel.js ========================== //
    $('.Service-carousel').owlCarousel({
        loop: true,
        nav: true,
        rtl: true,
        dots: false,
        center: false,
        margin: 70,
        autoplay: true,
        navText: ['<i class="fa-solid fa-chevron-right"></i>', '<i class="fa-solid fa-chevron-left"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            767: {
                items: 1,
                margin: 0,
            },
            991: {
                items: 2,
            },
            1024: {
                items: 2
            },
            1199: {
                items: 3
            }
        }
    })

//
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        rtl: true,
        margin: 5,
        autoplay: true,
        navText: ['<i class="fa-solid fa-chevron-right"></i>', '<i class="fa-solid fa-chevron-left"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            991: {
                items: 2,
            },
            1199: {
                items: 3
            }

        }
    });

    $(".hideSideBtn").click(function () {
        $(".workers-section .allWorkersSide").toggleClass("showSide");
    });

});
$(document).ready(function () {
    // spinner
    $(".loading-area ").fadeOut("slow");

    //WOW js
    new WOW().init();
    // select2
    $(".select2search").select2();
    $(".select2").select2({
        minimumResultsForSearch: -1,
    });
    // odometer
    $(".odometer").appear(function (e) {
        var odo = $(".odometer");
        odo.each(function () {
            var countNumber = $(this).attr("data-count");
            $(this).html(countNumber);
        });
    });
    // tooltip
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});

// validation
(function () {
    "use strict";
    var forms = document.querySelectorAll(".needs-validation");
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add("was-validated");
            },
            false
        );
    });
})();
// floating-button
$(".button-float-ads").click(function () {
    $(".button-float-ads .wrap").toggleClass("ani");
    $(".ads-float-popup").toggleClass("open");
    $(".img-fab.img").toggleClass("close");
});
// workerCvSlider
var workerCvSlider = new Swiper(".workerCvSlider", {
    spaceBetween: 0,
    centeredSlides: true,
    // loop: true,
    speed: 1000,
    pagination: {
        el: ".workerCvSliderpagination",
        clickable: true,
    },
    keyboard: {
        enabled: true,
    },
    navigation: {
        nextEl: ".workerCvSliderNext",
        prevEl: ".workerCvSliderPrev",
    },
});

$(".workerCvSlider").hover(
    function () {
        this.swiper.autoplay.stop();
    },
    function () {
        this.swiper.autoplay.start();
    }
);
var referencesSlider = new Swiper(".referencesSlider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 5,
    speed: 1000,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
});
