<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import Landpage from '../../Layouts/Landpage.vue';
import Header from './Team/Header.vue';
import TeamMembers from './Team/TeamMembers.vue';
import TopUsers from './Team/TopUsers.vue';
</script>

<template>
    <Head title="Welcome" />
    <Landpage>
    <Header></Header>
    <TeamMembers></TeamMembers>
    <TopUsers></TopUsers>
    </Landpage>
</template>