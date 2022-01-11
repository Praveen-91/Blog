<!DOCTYPE html>
<html>
@include('layouts.partials.head')
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
@include('layouts.partials.header')

<div class="jumbotron">
  <div class="container text-center">
  	@yield('content')
   <!--  <h1>My Portfolio</h1>      
    <p>Some text that represents "Me"...</p> -->
  </div>
</div>
@include('layouts.partials.footer')
</body>
</html>