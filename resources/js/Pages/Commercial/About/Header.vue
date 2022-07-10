<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
<div class="bg-slate-800 w-full h-[64px]"></div>
  <div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-24 sm:px-2 sm:py-32 sm:py-12 lg:px-4">
      <div class="max-w-2xl mx-auto px-4 lg:max-w-none">
        <div class="grid grid-cols-1 items-center gap-y-10 gap-x-16 lg:grid-cols-2">
          <div>
            <h2 class="text-4xl font-extrabold tracking-tight text-gray-900">We built our business based on what <span class="text-indigo-500">you</span> need</h2>
            <p class="mt-4 text-gray-500">At the beginning at least, but then we realized we could make a lot more money if we kinda stopped caring about that. Our new strategy is to write a bunch of things that look really good in the headlines, then clarify in the small print but hope people don't actually read it.</p>
          </div>
          <div class="aspect-w-3 aspect-h-2 bg-gray-100 rounded-lg overflow-hidden">
            <img src="https://tailwindui.com/img/ecommerce-images/incentives-07-hero.jpg" alt="" class="object-center object-cover" />
          </div>
        </div>
        <div class="mt-16 grid grid-cols-1 gap-y-10 gap-x-8 lg:grid-cols-3">
          <div v-for="incentive in incentives" :key="incentive.name" class="sm:flex lg:block">
            <div class="sm:flex-shrink-0">
              <img class="w-28 h-24" :src="incentive.imageSrc" alt="" />
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-6 lg:mt-6 lg:ml-0">
              <h3 class="text-sm font-medium text-gray-900">
                {{ incentive.name }}
              </h3>
              <p class="mt-2 text-sm text-gray-500">
                {{ incentive.description }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const incentives = [
  {
    name: 'Free shipping',
    imageSrc: 'https://tailwindui.com/img/ecommerce/icons/icon-delivery-light.svg',
    description: "It's not actually free we just price it into the products. Someone's paying for it, and it's not us. (hint: purple word in this page)",
  },
  {
    name: 'Money back guaranteed',
    imageSrc: 'https://tailwindui.com/img/ecommerce/icons/icon-warranty-light.svg',
    description: "If you don't get your order or something goes wrong, we will compensate you.",
  },
  {
    name: 'Environment Friendly',
    imageSrc: 'https://tailwindui.com/img/ecommerce/icons/icon-planet-light.svg',
    description:
      "Our website does not pollute the environment. We only have sweatshops in china.",
  },
]
</script>