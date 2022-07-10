<template>
<div class="bg-white pt-10">
    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        Find what you <span class="text-indigo-500">want</span>
    </h1>
    <div class="w-full mb-4">
      <div class="h-1 mx-auto gradient w-auto sm:w-[400px] opacity-25 my-0 py-0 rounded-t"></div>
    </div>
    <p class="text-gray-600 mb-8 text-center mx-auto w-auto md:w-[700px]">
        Everything you ever wanted within the reach of your hand. Need a custom T-shirt? We got you! Need a new painting for your empty room? Done!
        Need the missing love from your parents? Look no further!
    </p>
  <swiper class="swiper h-[700px] bg-white w-full md:w-1/2" :loop="true" :modules="modules" :pagination="{ clickable: true }">
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/1.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/2.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/3.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/4.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/5.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/6.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/7.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
    <swiper-slide class="slide">
        <img src="@/Assets/images/swiper/8.jpg" class="h-full w-full object-contain" alt="">
    </swiper-slide>
   
    
  </swiper>
</div>
</template>

<script lang="ts">
  import { defineComponent } from 'vue'
  import { Pagination } from 'swiper'
  import { Swiper, SwiperSlide } from 'swiper/vue'
  import 'swiper/css'
  import 'swiper/css/pagination'

  export default defineComponent({
    name: 'swiper-example-pagination-progress',
    title: 'Progress pagination',
    url: import.meta.url,
    components: {
      Swiper,
      SwiperSlide
    },
    setup() {
      return {
        modules: [Pagination]
      }
    }
  })
</script>