<template>
    <div>
        
    </div>
</template>

<script>
    export default {
        props: [],
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
                const url = "https://api.ekispert.jp//v1/json/search/course/light";
                axios.get(url,
                {
                    params: {
                        key: "LE_XTvcvM93uAAuL",
                        from: 22828,
                        to: 25853
                    },
                    header: {
                        'Access-Control-Allow-Origin' : '*',
                        // 'Access-Control-Allow-Origin':  'http://localhost:4200',
                        // 'Access-Control-Allow-Headers':  'Content-Type, X-Auth-Token, Authorization, Origin',
                        // 'Access-Control-Allow-Methods':  'POST, PUT'
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