@extends('layouts.app')

@section('content')

これはユーザー情報編集ページです。
<div class="w-full max-w-md mt-3 object-center">
	<form method="post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
	@csrf
		<div class="mb-4">
		<label class="block text-gray-700 text-base font-bold mb-2" for="image">
		プロフィール画像
		</label>
		<div class="border border-dashed border-gray-700 relative mb-4">
			<input type="file" multiple class="cursor-pointer relative block opacity-0 w-full h-full p-20 z-50">
			<div class="text-center p-10 absolute top-0 right-0 left-0 m-auto">
				<h4>
					ドラッグ＆ドロップ
				</h4>
			</div>
		</div>

			<label class="block text-gray-700 text-base font-bold mb-2" for="name">
				ユーザーネーム
			</label>
			<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name ="name" id="name" type="text" value="{{ old('name') ?? $user->name }}">
		</div>
		<div class="mb-2">
			<label class="block text-gray-700 text-base font-bold mb-2" for="email">
				メールアドレス
			</label>
			<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" value="{{ $user->email }}" disabled>
		</div>
		<div>
		<label class="block text-gray-700 text-base font-bold mb-2" for="type">
			所属
		</label>
			<select name="type" value="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="type" type="select" value="{{ old('type') ?? $user->type }}">
					<option value="1">当てはまるものを選んでください。</option>
					<option value="2">塾・予備校講師</option>
					<option value="3">中学・高校教員</option>
					<option value="4">大学教員</option>
					<option value="5">社会人</option>
					<option value="6">学生</option>
					<option value="7">その他</option>
				</select>
		</div>
		<div>
		<label class="block text-gray-700 text-base font-bold mb-2" for="comment">
			一言コメント
		</label>
			<textarea name="comment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="comment" type="text">{{ old('comment') ??$user->comment }}</textarea>
		</div>
		<div class="flex items-center justify-between">
			<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
				編集
			</button>
		</div>
	</form>
</div>
@endsection