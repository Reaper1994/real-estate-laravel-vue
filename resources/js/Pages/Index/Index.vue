<template>
    <div class="text-white  m-3.5">Index</div>
    <Link class="text-white btn-normal  m-3.5" href="/hello">
        Show Page
    </Link>
    <div class="text-white m-3.5">
        The message is {{ message }}
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
defineProps({ message: String })
</script>
