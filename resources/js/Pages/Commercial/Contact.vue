<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import Landpage from '../../Layouts/Landpage.vue';
import Header from './Contact/Header.vue';
import Location from './Contact/Location.vue';

</script>

<template>
    <Head title="Contact" />
    <Landpage>
        <Header></Header>
        <Location></Location>
    </Landpage>
</template>