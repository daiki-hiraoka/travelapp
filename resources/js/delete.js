function dialogDelete(){
    'use strict';
    const post = @json($post);
    console.log(post.id);
    if(window.confirm('削除したら復元出来ません。\n本当に削除しますか？')) {
        // document.getElementById('from_' + post.id)
    }
}