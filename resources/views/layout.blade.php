<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>twiceplay - @yield('title')</title>

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.0/js/materialize.min.js"></script>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.0/css/materialize.min.css">
	{!! Html::style( asset('assets/css/main.css')) !!}

</head>
<body>

	@yield('content')

	{!! Html::script( asset('assets/js/semantic.min.js')) !!}
	{!! Html::script( asset('assets/js/main.js')) !!}

</body>
</html>