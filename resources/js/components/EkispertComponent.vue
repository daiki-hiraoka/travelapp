<template>
    <div>
        
    </div>
</template>

<script>
    export default {
        props: [''],
        data() {
            return {
                responce: {},
            };
        },
        created() {
            console.log('connection OK');
            this.get_path();
        },
        methods: {
            get_path() {
                const url = "/v1/json/search/course/light";
                axios.get(url,
                {
                    params: {
                        key: config('services.ekispert.token'),
                        from: 22828,
                        to: 25853
                    }
                }).then(function (res) {
                    console.log(res);
                }).catch(function(err) {
                    console.log(err);
                });
            },
        }
    };
</script>