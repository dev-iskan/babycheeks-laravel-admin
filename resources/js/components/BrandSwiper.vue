<template>
    <div>
        <swiper :options="options">
            <swiper-slide><img src="img/company_logo/avent.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/carters.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/disney.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/garanimals.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/gerber.png" alt="" width="60%"></swiper-slide>
            <swiper-slide><img src="img/company_logo/tommee.png" alt="" width="60%"></swiper-slide>
            <div class="swiper-pagination" slot="pagination"></div>
            <div class="swiper-button-prev" slot="button-prev"></div>
            <div class="swiper-button-next" slot="button-next"></div>
        </swiper>
    </div>
</template>

<script>
    import { swiper, swiperSlide } from 'vue-awesome-swiper'
    export default {
        components: {
            swiper,
            swiperSlide
        },
        created () {
            console.log('init')
        },
        data () {
            return {
                options: {
                    slidesPerView: 4,
                    spaceBetween: 0,
                    freeMode: false,
                    pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                    },
                    navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                    }
                }
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>
