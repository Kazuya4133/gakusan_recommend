@extends('layouts.app')

@section('content')
  <div class="bg-white shadow p-8 rounded lg:w-64">
			<div class="text-center mt-4">
				<p class="text-grey-dark font-bold">Name: {{ $user->name }}</p>
				<p class="text-sm font-hairline text-grey-dark mt-2">タイプ: {{ $user->type_label }}</p>
			</div>
				<div class="flex justify-center mt-4"><img class="shadow sm:w-12 sm:h-12 w-10 h-10 rounded-full" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar" /></div>
          <p class="text-sm text-center font-hairline text-grey-dark mt-2">コメント: {{ $user->comment }}</p>
				<div class="mt-4 flex justify-between text-center">
				<div>
					<p class="text-grey-darker mt-5 font-bold">20</p>
					<p class="text-xs mt-2 text-grey-dark font-hairline">Posts</p>
				</div>
				<div>
					<p class="text-grey-darker mt-5 font-bold">99k</p>
					<p class="text-xs mt-2 text-grey-dark font-hairline">Likes</p>
				</div>
				<div class="mt-6">
					<button class="rounded shadow-md w-full items-center shadow bg-blue-500 px-4 py-2 text-white hover:bg-blue-light" type="submit">
					編集
					</button>
				</div>
			</div>
  </div>

  <main class="py-4">
		<div class="px-4">
			<div class="block md:flex justify-between md:-mx-2">
				@foreach($posts as $post)
					<div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
						<div class="bg-white rounded-lg overflow-hidden shadow relative">
							<img class="h-56 w-full object-cover object-center" src="https://images.unsplash.com/photo-1457282367193-e3b79e38f207?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1654&q=80" alt="">
							<div class="p-4 h-auto md:h-40 lg:h-48">
								<a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
									タイトル：{{ $post->title }}<br>
								</a>
								評価：{{ $post->stars }}<br>
								<div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
									コメント：{{ $post->comment }}<br>
								</div>
								<div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
									<a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">カテゴリー：{{ $post->category_id }}</a>
								</div>
								<div class="flex items-center">
      						<img class="w-10 h-10 rounded-full mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="">
      						<div class="text-sm">
        						<p class="text-black leading-none">ユーザー名：</p>
        						<p class="text-grey-dark">タイプ：</p>
      						</div>
    						</div>
							</div>
						</div>
					</div>
					@endforeach
				<div>
					{{ $posts->links() }}
				</div>
			</div>
	</main>
@endsection