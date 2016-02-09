<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#container
	{
		height:auto;
		width:500px;
		background: #ccc;
	}
	</style>
</head>
<body>
<div id="container">
	
	@yield('content')

</div>
<div id="footer">
	
@yield('footer')

</div>
</body>
</html>