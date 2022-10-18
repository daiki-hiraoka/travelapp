<template>
    <div>
        <button v-if="status == false" type="button" @click.prevent="like" class="btn btn-outline-warning">Like</button>
        <button v-else type="button" @click.prevent="like" class="btn btn-outline-warning">Liked</button>
        <p class="card-text mb-0"><small class="text-muted">いいね数<{{ count }}</small></p>
    </div>
</template>

<script>
    export default {
        props: ['plan'],
        data() {
            return {
                status: false,
                count: 0,
            };
        },
        created() {
            this.like_check();
            this.like_count();
        },
        methods: {
            like_check() {
                const id = this.plan.id;
                const path = "/plans/" + id + "/check";
                axios.get(path).then(res => {
                    console.log(res.data.result, 'check result');
                    if(res.data.result) {
                        this.status = true;
                    } else {
                        this.status = false;
                    }
                }).catch(function(err) {
                    console.log(err);
                });
            },
            like() {
                const id = this.plan.id;
                const path = "/plans/" + id + "/likes";
                axios.post(path).then(res => {
                    this.like_check();
                    this.like_count();
                }).catch(function(err) {
                    console.log(err);
                });
            },
            like_count() {
                const id = this.plan.id;
                const path = "/plans/" + id + "/counts";
                axios.get(path).then(res => {
                    this.count = res.data.result;
                }).catch(function(err) {
                    console.log(err);
                });
            },
        },
    };
</script>
