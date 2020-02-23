<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>学参レコメンド！</title>
</head>

<body>
  @include('commons.header')
    
  @include('commons.error_messages')
      
  <body class="flex flex-col min-h-screen">
  
  <main class="flex-grow py-4">

  @yield('content')
  
  </main>
  
  @include('commons.footer')
  
</body>

</html>