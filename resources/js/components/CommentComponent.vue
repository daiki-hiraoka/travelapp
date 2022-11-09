<template>
    <div>
        <input v-model="text" placeholder="コメント"/>
        <button @click.prevent="send()">送信</button>
        
        <div v-for='comment in comments'>
            <p>{{ comment.text }} 
            <button @click.prevent="destroy(comment.id)">削除</button>
            <button @click.prevent="edit(comment)">編集</button>
            </p>
            <input v-if="edit_time" type="text" v-model="edit_comment"/>
            <button v-if="edit_time" @click.prevent="update(comment)">変更</button>
            <button v-if="edit_time" @click.prevent="back(comment)">キャンセル</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['plan_id'],
        data() {
            return {
                comments: {},
                edit_time: false,
                edit_comment: '',
                text: '',
            };
        },
        created() {
            this.getComments();
        },
        methods: {
            getComments() {
                const id = this.plan_id;
                const path = "/plans/" + id + "/comments/check";
                axios.get(path).then(res => {
                    this.comments = res.data.result;
                }).catch(function(err) {
                    console.log(err);
                });
            },
            send() {
                const id = this.plan_id;
                const path = "/plans/" + id + "/comments";
                axios.post(path, {
                    comment: this.text,
                }).then(res => {
                    this.getComments();
                }).catch(function(err) {
                    console.log(err);
                });
            },
            destroy(comment_id) {
                const id = this.plan_id;
                const path = "/plans/" + id + "/comments/" + comment_id;
                console.log(path);
                axios.delete(path).then(res => {
                    console.log('delete');
                    this.getComments();
                }).catch(function(err) {
                    console.log(err);
                });
            },
            edit(comment) {
                this.edit_time = true;
            },
            update(comment) {
                const id = this.plan_id;
                const path = "/plans/" + id + "/comments/" + comment.id;
                console.log(this.edit_comment);
                axios.put(path, {
                    comment: this.edit_comment,
                }).then(res => {
                    this.edit_time = false;
                    this.getComments();
                }).catch(function(err) {
                    console.log(err);
                });
            },
            back(comment) {
                this.edit_time = false;
            }
        },
    };
</script>