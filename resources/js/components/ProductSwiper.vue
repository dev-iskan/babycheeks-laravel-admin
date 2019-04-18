<template>
  <div>
        <!-- swiper1 -->
        <swiper :options="swiperOptionTop" class="gallery-top" ref="swiperTop">
          <swiper-slide class="slide-1"><img src="https://www.babyshop.com/images/545029/x_large.jpg" alt="">
          </swiper-slide>
          <swiper-slide class="slide-2"><img src="https://www.babyshop.com/images/545028/x_large.jpg" alt="">
          </swiper-slide>
          <swiper-slide class="slide-3"><img src="https://www.babyshop.com/images/545027/x_large.jpg" alt="">
          </swiper-slide>
          <div class="swiper-button-next swiper-button-white" slot="button-next"></div>
          <div class="swiper-button-prev swiper-button-white" slot="button-prev"></div>
        </swiper>
        <!-- swiper2 Thumbs -->
        <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs">
          <swiper-slide class="slide-1"><img src="https://www.babyshop.com/images/545029/x_large.jpg" alt="">
          </swiper-slide>
          <swiper-slide class="slide-2"><img src="https://www.babyshop.com/images/545028/x_large.jpg" alt="">
          </swiper-slide>
          <swiper-slide class="slide-3"><img src="https://www.babyshop.com/images/545027/x_large.jpg" alt="">
          </swiper-slide>

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
        swiperOptionTop: {
          slidesPerView: 1
        },
        swiperOptionThumbs: {
          spaceBetween: 10,
          centeredSlides: true,
          slidesPerView: 'auto',
          touchRatio: 0.2,
          slideToClickedSlide: true,
          slidesPerView: 5,
        }
      }

    },

    mounted() {
      this.$nextTick(() => {
        const swiperTop = this.$refs.swiperTop.swiper
        const swiperThumbs = this.$refs.swiperThumbs.swiper
        swiperTop.controller.control = swiperThumbs
        swiperThumbs.controller.control = swiperTop
      })
    }
  }

</script>

<style lang="scss" scoped>

</style>
