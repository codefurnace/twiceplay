<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>twiceplay - @yield('title')</title>
	{!! Html::style( asset('assets/css/semantic.min.css')) !!}
	{!! Html::style( asset('assets/css/main.css')) !!}

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
</head>
<body>

	@yield('content')

	{!! Html::script( asset('assets/js/semantic.min.js')) !!}
	{!! Html::script( asset('assets/js/main.js')) !!}

</body>
</html>