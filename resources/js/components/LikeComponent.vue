<template>
    <button onclick="like(plan.id)">いいね</button>
</template>
<script>
    export default {
        data() {
            return {
                plan: [],
            };
        },
        methods: {
            like(planId) {
                axios.post(`/like/${planId}`).then(({data}) => {
                    console.log(data);
                });
            },
        },
    };
</script>