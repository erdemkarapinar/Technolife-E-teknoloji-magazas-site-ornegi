<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
					<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
						<svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
						<span class="fs-4">Admin</span>
					</a>
					<hr>
					<ul class="nav nav-pills flex-column mb-auto">
						<li class="nav-item">
							<a href="{{route('admin.getAllProduct')}}" class="nav-link active" aria-current="page">
								<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href=""></use></svg>
								All Product
							</a>
						</li>
						<li>
							<a href="{{route('admin.getCreateProduct')}}" class="nav-link text-white">
								<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href=""></use></svg>
								Create Product
							</a>
						</li>
						<li class="nav-item">
							<a href="{{route('admin.getUpdateProduct')}}" class="nav-link text-white">
								<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href=""></use></svg>
									Update Product
							</a>
						</li>
						<li>
							<a href="{{route('admin.getAllCategory')}}" class="nav-link text-white">
								<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
								All Category
							</a>
						</li>
						<li>
							<a href="{{route('admin.getCreateCategory')}}" class="nav-link text-white">
								<svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
								Create Category
							</a>
						</li>
			
					</ul>
					<hr>
				
				</div>
			</div>
			<div class="col-sm-9">
				@yield('content')

			</div>
		</div>

	</div>
	<main>
		<section class="py-5 text-center container">
		</section>
	</main>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>