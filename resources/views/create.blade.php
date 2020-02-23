@extends('layouts.app')

@section('content')

<div class="w-full max-w-md mt-3 object-center">
  <form action="" method="post" class="px-5 text-center">
  @csrf
    <input type="text"><br>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold text-lg mb-4" for="">
        検索したい書籍名や著者名を入れてください。
        </label>
        <input class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full" id="book" type="text" placeholder="">
      </div>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold mb-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
      検索する
      </button>
  </form>
  </div>

{{ $response ?? '' }}

@endsection