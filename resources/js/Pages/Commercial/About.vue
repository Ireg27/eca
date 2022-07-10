<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Landpage from '../../Layouts/Landpage.vue';
import Header from './About/Header.vue';
import Swiper from './About/Swiper.vue';
import Content from './About/Content.vue';
</script>

<template>
    <Head title="About Us" />
    <Landpage>
        <Header></Header>
        <Swiper></Swiper>
        <Content></Content>
    </Landpage>
</template>