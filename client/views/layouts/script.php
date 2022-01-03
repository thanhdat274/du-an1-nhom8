<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?= USER_ASSET ?>bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
<script src="<?= USER_ASSET ?>javascripts.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        autoplay: {
            delay: 2000,
        },
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        }

    });

    var swiper1 = new Swiper(".mySwiper1", {
        autoplay: {
            delay: 1500,
        },
        slidesPerView: 4,
        spaceBetween: 10,
    });
    var swiper1 = new Swiper(".mySwiper2", {
        autoplay: {
            delay: 2000,
        },
        slidesPerView: 4,
        spaceBetween: 10,
    });
    var swiper1 = new Swiper(".mySwiper3", {
        autoplay: {
            delay: 1700,
        },
        slidesPerView: 4,
        spaceBetween: 10,
    });
    var swiper1 = new Swiper(".mySwiper4", {
        autoplay: {
            delay: 3000,
        },
        slidesPerView: 4,
        spaceBetween: 10,
    });
    var swiper1 = new Swiper(".mySwiper5", {
        autoplay: {
            delay: 4000,
        },
        slidesPerView: 8,
        spaceBetween: 20,
    });
</script>