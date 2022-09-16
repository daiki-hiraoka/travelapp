function dialogDelete(){
    'use strict';
    const plan = @json($plan);
    if(window.confirm('削除したら復元出来ません。\n本当に削除しますか？')) {
        document.getElementById('form_' + plan.id)
    }
}