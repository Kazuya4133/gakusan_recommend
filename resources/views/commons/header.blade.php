<header>
	<nav class="flex items-center justify-between flex-wrap bg-gray-900 p-4">
		<div class="flex items-center flex-shrink-0 text-white mr-6">
			<a href="{{ route('index') }}" class="font-semibold text-xl tracking-tight">学参レコメンド！</span>
		</div>

		@if (Auth::check())
		<div>
			<a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">検索する</a>
			<a href="{{ route('create') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">投稿する</a>
			<a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">ログアウト</a>
		</div>
		@else
		<div>
			<a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">検索する</a>
			<a href="{{ route('register') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">新規登録</a>
			<a href="{{ route('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">ログイン</a>
		</div>
		@endif
	</nav>
</header>