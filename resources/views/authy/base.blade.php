<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<style>
			#loader{
				transition:all .3s ease-in-out;
				opacity:1;
				visibility:visible;
				position:fixed;
				height:100vh;
				width:100%;
				background:#fff;
				z-index:90000
			}
			#loader.fadeOut{
				opacity:0;
				visibility:hidden
			}
			.spinner{
				width:40px;
				height:40px;
				position:absolute;
				top:calc(50% - 20px);
				left:calc(50% - 20px);
				background-color:#333;
				border-radius:100%;
				-webkit-animation:sk-scaleout 1s infinite ease-in-out;
				animation:sk-scaleout 1s infinite ease-in-out;
			}
			@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
		</style>
		<link href="/admin_assets/css/style.css" rel="stylesheet">
	</head>
	<body class="app">
		<div id="loader">
			<div class="spinner">					
			</div>
		</div>
		<script type="text/javascript">
			window.addEventListener('load', () => {
				const loader = document.getElementById('loader');
				setTimeout(() => {
				loader.classList.add('fadeOut');
				}, 300);
			});
		</script>
		<div class="peers ai-s fxw-nw h-100vh">
			<div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url(/admin_assets/img/bg.jpg)">
				<div class="pos-a centerXY">
					<div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px">		<img class="pos-a centerXY" src="/admin_assets/img/logo.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
				<h4 class="fw-300 c-grey-900 mB-40">

					@yield('header')
					
				</h4>
				<div id="errors">
					
				</div>
				<form method="POST" action="@yield('action')" id="authy">

					@csrf
					@yield('form')	

				</form>
			</div>
		</div>
		<script type="text/javascript" src="/admin_assets/js/vendor.js">			
		</script>
		<script type="text/javascript" src="/admin_assets/js/bundle.js">			
		</script>
		@yield('scripts')
	</body>
</html>