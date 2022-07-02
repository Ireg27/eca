<!-- This example requires Tailwind CSS v2.0+ -->
<template>
  <Head title="Landpage" />
  <Landpage>
  <h1>Hello brother</h1>
  </Landpage>
</template>

<script>
import Landpage from '../Layouts/Landpage.vue'
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Landpage,
        Head,
    },
};
</script>