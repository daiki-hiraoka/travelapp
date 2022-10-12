<template>
    <div>
        <button v-if="status == false" type="button" @click.prevent="click_check" class="btn">表示する</button>
        <button v-if="status == true" type="button" @click.prevent="click_check" class="btn">表示しない</button>
        <div class='show' v-if="status == true">
            <p class='place'>旅行先：{{ show.place }}</p>
            <p class='people'>人数：{{ show.people }}</p>
            <p class='spot'>おすすめスポット：{{ show.spot }}</p>
            <p class='cost'>費用：{{ show.cost }}</p>
            <p class='date'>日数：{{ show.date }}</p>
            <p class='move'>交通手段：{{ show.move }}</p>
            <small>{{ show.user.name }}</small>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['plan'],
        data() {
            return {
                status: false,
                show: this.plan,
            };
        },
        methods: {
            click_check() {
                if(this.status) {
                    this.status = false;
                } else {
                    this.status = true;
                }
            },
        },
    };
</script>