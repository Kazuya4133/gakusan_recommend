@extends('layouts.app')

@section('content')

CREATE

<?php
// Amazon APIsの必要情報
const Access_Key_ID = 'AKIAJS2UTUS43AJ47D5A';
const Secret_Access_Key = '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';
const Associate_tag = 'ka4133-22';
?>

何かいいテンプレはないか？
<form action="" method="post">
@csrf
<input type="text"><br>
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
    検索したい書籍名や著者名を入れてください。
    </label>
    <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="book" type="text" placeholder="">
  </div>
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold mb-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
決定する
</button>
</form>
@endsection