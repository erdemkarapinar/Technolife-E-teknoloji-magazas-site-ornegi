<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Categories</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
	<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
	<meta name="theme-color" content="#712cf9">
	<link rel="icon" type="image/x-icon" href="https://www.sorubak.com/blog/wp-content/uploads/2019/01/teknolojik-urunler.png">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		.b-example-divider {
			height: 3rem;
			background-color: rgba(0, 0, 0, .1);
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh;
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-md navbar-black bg-black">
		<div class="container-fluid">		
			<div class="container">
				<div class="row">
					<ul class="nav nav-pills">
						<div class="col-sm-2">
							<h1 style="color: #0040ff;">Technolife</h1></a>
						</div>
						<div class="col-sm-2">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="{{route('admin.getIndex')}}">Home</a>
							</li>
						</div>
						<div class="col-sm-2">
							<li class="nav-item">
								<a class="nav-link" href="{{route('admin.getProduct')}}">Products</a>
							</li>
						</div>
						<div class="col-sm-2">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Menu
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="{{route('admin.getProduct')}}">Products</a></li>
									<hr>
									<li><a class="dropdown-item" href="{{route('admin.getCategory')}}">Categories</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">About us</a></li>
								</ul>
							</li>
						</div>
						<div class="col-sm-2">
							<form class="d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</nav>

</body>
</html>