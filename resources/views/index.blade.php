<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
	<div class="wrapper">
		@include('partials.header')

		<!-- Sidebar -->
		@include('partials.menu')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient text-white bubble-shadow">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
							</div>
							<div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-primary btn-round">Add Customer</a>
							</div>
						</div>
					</div>
				</div>
				@yield('content')
			</div>
			@include('partials.footer')
		</div>
	</div>
	@include('partials.script')
</body>
</html>