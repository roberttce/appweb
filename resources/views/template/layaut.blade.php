<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdminLTE 3 | Dashboard</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/plugins/fontawesome-free/css/all.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
	<!-- JQVMap -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/plugins/jqvmap/jqvmap.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/dist/css/adminlte.min.css')}}">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/plugins/daterangepicker/daterangepicker.css')}}">
	<!-- summernote -->
	<link rel="stylesheet" href="{{asset('plugins/adminlte/plugins/summernote/summernote-bs4.min.css')}}">

	<link rel="stylesheet" href="{{asset('plugins/pnotify/pnotify.custom.min.css')}}">
	@yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
	
	  <!-- Navbar -->
	  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
		  <li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
		  </li>
		  <li class="nav-item d-none d-sm-inline-block">
			<a href="index3.html" class="nav-link">Home</a>
		  </li>
		  <li class="nav-item d-none d-sm-inline-block">
			<a href="#" class="nav-link">Contact</a>
		  </li>
		</ul>
	
		<!-- SEARCH FORM -->
		<form class="form-inline ml-3">
		  <div class="input-group input-group-sm">
			<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
			<div class="input-group-append">
			  <button class="btn btn-navbar" type="submit">
				<i class="fas fa-search"></i>
			  </button>
			</div>
		  </div>
		</form>
	
		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
				  <i class="fas fa-th-large">
				  </i>
				</a>
			  </li>
			<li class="nav-item dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<img src="{{ asset('plugins/adminlte/dist/img/AdminLTELogo.png') }}" alt="clolegio San Gabriel" class="brand-image img-circle elevation-12" style="opacity: .8; width: 30px; height: 30px;">
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<div class="dropdown-divider"></div>
					<a href="{{route('login')}}" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
							<div class="media-body">
								<h3 class="dropdown-item-title">
									Cerrar sesión
								</h3>
							</div>
						</div>
						<!-- Message End -->
					</a>
					<div class="dropdown-divider"></div>
					<a href="{{route('login')}}" class="dropdown-item">
						<!-- Message Start -->
						<div class="media">
							<div class="media-body">
								<h3 class="dropdown-item-title">
									Cambiar cuenta
									<span class="float-right text-sm text-warning"></span>
								</h3>
							</div>
						</div>
						<!-- Message End -->
					</a>
				</div>
			</li>

		</ul>
	  </nav>
	  <!-- /.navbar -->
	
	  <!-- Main Sidebar Container -->
	  <aside class="main-sidebar sidebar-dark-primary elevation-4">
		<!-- Brand Logo -->
		<a href="#" class="brand-link">
		  <img src="{{asset('plugins/adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
			   style="opacity: .8">
		  <span class="brand-text font-weight-light">SiS Registros </span>
		</a>
	
		<!-- Sidebar -->
		<div class="sidebar">
		  <!-- Sidebar user panel (optional) -->
		  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="info">
			  <a href="#" class="d-block"><h5>@yield('userName')</h5></a>
			</div>
		  </div>
	
		  <!-- Sidebar Menu -->
		  <nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			  <!-- Add icons to the links using the .nav-icon class
				   with font-awesome or any other icon font library -->
			  <li class="nav-item has-treeview menu-open">
				<a href="#" class="nav-link active">
				  <i class="nav-icon fas fa-tachometer-alt"></i>
				  <p>
					Dashboard
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
					@yield("dashboard")
				</ul>
			  </li>
			  <li class="nav-item">
				<a href="pages/widgets.html" class="nav-link">
				  <i class="nav-icon fas fa-th"></i>
				  <p>
					Widgets
					<span class="right badge badge-danger">New</span>
				  </p>
				</a>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="#" class="nav-link">
				  <i class="nav-icon fas fa-copy"></i>
				  <p>
					Layout Options
					<i class="fas fa-angle-left right"></i>
					<span class="badge badge-info right">6</span>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="pages/layout/top-nav.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Top Navigation</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/layout/boxed.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Boxed</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/layout/fixed-sidebar.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Fixed Sidebar</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/layout/fixed-topnav.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Fixed Navbar</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/layout/fixed-footer.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Fixed Footer</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/layout/collapsed-sidebar.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Collapsed Sidebar</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="#" class="nav-link">
				  <i class="nav-icon fas fa-chart-pie"></i>
				  <p>
					Charts
					<i class="right fas fa-angle-left"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="pages/charts/chartjs.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>ChartJS</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/charts/flot.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Flot</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/charts/inline.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Inline</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="#" class="nav-link">
				  <i class="nav-icon fas fa-tree"></i>
				  <p>
					UI Elements
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="pages/UI/general.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>General</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/UI/icons.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Icons</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/UI/buttons.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Buttons</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/UI/sliders.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Sliders</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/UI/modals.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Modals & Alerts</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/UI/navbar.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Navbar & Tabs</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/UI/timeline.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Timeline</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/UI/ribbons.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Ribbons</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="#" class="nav-link">
				  <i class="nav-icon fas fa-edit"></i>
				  <p>
					Forms
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="pages/forms/general.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>General Elements</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/forms/advanced.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Advanced Elements</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/forms/editors.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Editors</p>
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="nav-item has-treeview">
				<a href="#" class="nav-link">
				  <i class="nav-icon fas fa-table"></i>
				  <p>
					Tables
					<i class="fas fa-angle-left right"></i>
				  </p>
				</a>
				<ul class="nav nav-treeview">
				  <li class="nav-item">
					<a href="pages/tables/simple.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Simple Tables</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/tables/data.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>DataTables</p>
					</a>
				  </li>
				  <li class="nav-item">
					<a href="pages/tables/jsgrid.html" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>jsGrid</p>
					</a>
				  </li>
				</ul>
			  </li>
			</ul>
		  </nav>
		  <!-- /.sidebar-menu -->
		</div>
		<!-- /.sidebar -->
	  </aside>
	
	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1>@yield("sectionGeneral")</h1>
			  </div>
			  <!-- /.col -->
			  <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="">Home</a></li>
				  <li class="breadcrumb-item active">Dashboard v1</li>
				</ol>
			  </div><!-- /.col -->
			</div><!-- /.row -->
		  </div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->


		<!-- Main content -->
		<div class="container">
			@if (isset($no_duplicate_content))
			@hasSection('content')
				@yield('content')
			@endif
		@else
			@yield('content')
		@endif
		</div>
		
		<!-- /.content -->
	  </div>
	  <!-- /.content-wrapper -->
	  <footer class="main-footer">
		<strong>Copyright &copy; 2024- <a href="http://adminlte.io">Colegio San Gabriel</a>.</strong>
		All rights reserved.
		<div class="float-right d-none d-sm-inline-block">
		  <b>Version</b> 1.0.1-pre
		</div>
	  </footer>
	
	  <!-- Control Sidebar -->
	  <aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	  </aside>
	  <!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('plugins/adminlte/dist/js/adminlte.js')}}"></script>

<script src="{{asset('plugins/formvalidation/formValidation.min.js')}}"></script>
<script src="{{asset('plugins/formvalidation/bootstrap.validation.min.js')}}"></script>

<script src="{{asset('plugins/pnotify/pnotify.custom.min.js')}}"></script>
<script src="{{asset('plugins/sweetalert/sweetalert.min.js')}}"></script>

<script>
	var _urlBase = '{{url('/')}}';

	@if(Session::has('listMessage'))
		@foreach(Session::get('listMessage') as $value)
			new PNotify(
			{
				title : '{{Session::get('typeMessage') == 'error' ? 'No se pudo proceder!' : 'Correcto!'}}',
				text : '{{$value}}',
				type : '{{Session::get('typeMessage')}}'
			});
		@endforeach
	@endif
</script>

@yield('js')

<script>
	$('html').on('keydown', () => {
		if(event.keyCode == 13) {
			return false;
		}
	});
</script>
</body>
</html>