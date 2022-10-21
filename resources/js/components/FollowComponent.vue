<template>
    <div>
        <button v-if="status == false" type='button' @click.prevent='follow' class='btn btn-outline-warning'>フォローする</button>
        <button v-else type='button' @click.prevent='follow' class='btn btn-outline-warning'>フォロー外す</button>
    </div>
</template>

<script>
    export default {
        props: ['user_id'],
        data() {
            return {
                status: false,
            };
        },
        created() {
            console.log(this.status);
            this.follow_check();
        },
        methods: {
            follow_check() {
                const id = this.user_id;
                const path = "/users/" + id + "/followcheck";
                axios.get(path).then(res => {
                    if(res.data.result) {
                        this.status = true;
                    } else {
                        this.status = false;
                    }
                }).catch(function(err) {
                    console.log(err);
                });
            },
            follow() {
                const id = this.user_id;
                const path = "/users/" + id + "/follow";
                axios.post(path).then(res => {
                    this.follow_check();
                }).catch(function(err) {
                    console.log(err);
                });
            },
        },
    };
</script>