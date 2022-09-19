function dialogDelete(){
    'use strict';
    if(window.confirm('削除したら復元出来ません。\n本当に削除しますか？')) {
        document.getElementById('form_delete').submit();
    }
}