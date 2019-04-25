<template>
  <div v-if="images.length">
        <!-- swiper1 -->
        <swiper :options="swiperOptionTop" class="gallery-top" ref="swiperTop">
          <swiper-slide
            v-for="(image, index) in images"
            :key="index"
            :class="`slide-${index + 1}`"
          >
            <img :src="image" alt="">
          </swiper-slide>
        </swiper>
        <!-- swiper2 Thumbs -->
        <swiper :options="swiperOptionThumbs" class="gallery-thumbs" ref="swiperThumbs">
          <swiper-slide
            v-for="(image, index) in images"
            :key="index"
            :class="`slide-${index + 1}`"
          >
            <img :src="image" alt="">
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
    props: {
      images: {
        required: true
      }
    },
    data() {
      return {
        swiperOptionTop: {
          slidesPerView: 1
        },
        swiperOptionThumbs: {
          spaceBetween: 10,
          centeredSlides: true,
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

<style lang="scss">
.swiper-container {
  background-color: transparent;
}

.swiper-slide {
  background-size: cover;
  background-position: center;
}

.gallery-top .swiper-wrapper .swiper-slide {
  background-size: cover;
  background-position: center;
  align-items: center;
  display: flex;
  justify-content: center;
}

.gallery-top .swiper-wrapper .swiper-slide img {
  width: 60%;

}

.gallery-thumbs {
  height: 20% !important;
  box-sizing: border-box;
  padding: 10px 0;
}

.gallery-thumbs .swiper-slide {
  width: 12.5% !important;
  height: 100%;
  opacity: 0.4;
}

.gallery-thumbs .swiper-slide-active {
  opacity: 1;
}

.gallery-thumbs .swiper-wrapper {
  -webkit-transform: none !important;
  transform: none !important;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>
