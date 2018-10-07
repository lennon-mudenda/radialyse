<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">

	<head>

		@include('partials.header')
		
	</head>

	<body>
		<div id="wrapper">

			<!-- NavBar -->
			@include('partials.nav')

			<!-- Breadcrumbs -->
			@includeWhen((url()->current() != url('/')),'partials.breadcrumbs')

			<!-- MainPageContent -->
			@yield('content')

			<!-- Footer -->
			@include('partials.footer')

		</div>

		<!-- end wrapper -->
  		<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

		@include('partials.scripts')

	</body>

</html>