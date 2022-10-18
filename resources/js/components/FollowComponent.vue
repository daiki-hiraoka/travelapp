<template>
    <div>
        <button v-if="status == false" type='button' @click.prevent='follow' class='btn btn-outline-warning'>フォローする</button>
        <button v-else type='button' @click.prevent='follow' class='btn btn-outline-warning'>フォロー外す</button>
    </div>
</template>

<script>
    export default {
        props: ['']
    }
</script>