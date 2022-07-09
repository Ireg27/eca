<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Landpage from '../../Layouts/Landpage.vue';
import Button from '../../Components/Button.vue';
import Header from './Home/Header.vue';
import Divider from './Home/Divider.vue';
import Steps from './Home/Steps.vue';
import Price from './Home/Price.vue';
import Support from './Home/Support.vue';
import Partners from './Home/Partners.vue';
import Feature from './Home/Feature.vue';
import Testimonial from './Home/Testimonial.vue';
import Stats from './Home/Stats.vue';
import DividerReverse from './Home/Divider-Reverse.vue';
import Newsletter from './Home/Newsletter.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome" />
    <Landpage>
      <Header></Header>
      <Divider></Divider>
      <Steps></Steps>
      <Price></Price>
      <Feature></Feature>
      <Testimonial></Testimonial>
      <Partners></Partners>
      <Stats></Stats>
      <Support></Support>
      <DividerReverse></DividerReverse>
      <Newsletter></Newsletter>
    </Landpage>
</template>
