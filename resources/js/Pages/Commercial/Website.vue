<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Landpage from '../../Layouts/Landpage.vue'
import Button from '../../Components/Button.vue'
import Header from './Header.vue'
import Divider from './Divider.vue'
import Steps from './Steps.vue'
import Price from './Price.vue'

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
    </Landpage>

</template>
