<template>
    <div>
        <swiper :options="options">
            <swiper-slide><img src="img/company_logo/avent.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/carters.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/disney.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/garanimals.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/gerber.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/tommee.png" alt="" width="60%"></swiper-slide>
        </swiper>
    </div>
</template>

<script>
    import {
        swiper,
        swiperSlide
    } from 'vue-awesome-swiper'
    export default {
        components: {
            swiper,
            swiperSlide
        },
        data() {
            return {
                options: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                    freeMode: false,
                    loop: true,
                    autoplay: true,
                    delay: 3000,
                }
            }
        }
    }

</script>

<style lang="scss" scoped>
    .swiper-wrapper {
        display: flex;
        align-items: center;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 150px;
        height: 100%;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        transition: .3s;
    }

    .swiper-slide:hover {
        -webkit-filter: grayscale(0%);
        filter: grayscale(0%);
    }

</style>
