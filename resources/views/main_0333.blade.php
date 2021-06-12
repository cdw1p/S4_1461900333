<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Praktikum 4 - 1461900333</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>body {background: #eeeeee;font-family: 'Open Sans', sans-serif;}.navbar {font-size: 14px;background: #fff;padding-left: 16px;padding-right: 16px;border-bottom: 1px solid #d6d6d6;box-shadow: 0 0 4px rgba(0,0,0,.1);}.navbar .navbar-brand {color: #555;padding-left: 0;font-size: 20px;padding-right: 50px;font-family: 'Raleway', sans-serif;text-transform: uppercase;}.navbar .navbar-brand b {color: #f04f01;}.navbar .navbar-nav a {font-size: 96%;font-weight: bold;text-transform: uppercase;}.navbar .navbar-nav a.active {color: #f04f01 !important;background: transparent !important;}.search-box input.form-control, .search-box .btn {font-size: 14px;border-radius: 2px !important;}.search-box .input-group-append {padding-left: 4px;}.search-box input.form-control:focus {border-color: #f04f01;box-shadow: 0 0 8px rgba(240,79,1,0.2);}.search-box .btn-danger, .search-box .btn-danger:active {font-weight: bold;background: #f04f01 !important;border-color: #f04f01;text-transform: uppercase;min-width: 90px;}.search-box .btn-danger:hover, .search-box .btn-danger:focus {background: #eb4e01 !important;box-shadow: 0 0 8px rgba(240,79,1,0.2);}.search-box .btn span {transform: scale(0.9);display: inline-block;}.navbar .nav-item.open > a {background: none !important;}.navbar .dropdown-menu {border-radius: 1px;border-color: #e5e5e5;box-shadow: 0 2px 8px rgba(0,0,0,.05);}.navbar .dropdown-menu a, .navbar .dropdown-menu a:active {color: #777;padding: 8px 20px;font-size: 13px;background: #fff;}.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {color: #333;background: #f8f9fa;}@media (min-width: 992px){.form-inline .input-group .form-control {width: 225px;}}@media (max-width: 992px){.form-inline {display: block;}} .table-responsive {margin: 30px 0;}.table-wrapper {min-width: 1000px;background: #fff;padding: 20px 25px;border-radius: 3px;box-shadow: 0 1px 1px rgba(0,0,0,.05);}.table-title {padding-bottom: 15px;background: #f04f01;color: #fff;padding: 16px 30px;margin: -20px -25px 10px;border-radius: 3px 3px 0 0;}.table-title h2 {margin: 5px 0 0;font-size: 24px;}.table-title .btn {color: #566787;float: right;font-size: 13px;background: #fff;border: none;min-width: 50px;border-radius: 2px;border: none;outline: none !important;margin-left: 10px;}.table-title .btn:hover, .table-title .btn:focus {color: #566787;background: #f2f2f2;}.table-title .btn i {float: left;font-size: 21px;margin-right: 5px;}.table-title .btn span {float: left;margin-top: 2px;}table.table tr th, table.table tr td {border-color: #e9e9e9;padding: 12px 15px;vertical-align: middle;}table.table tr th:first-child {width: 60px;}table.table tr th:last-child {width: 100px;}table.table-striped tbody tr:nth-of-type(odd) {background-color: #fcfcfc;}table.table-striped.table-hover tbody tr:hover {background: #f5f5f5;}table.table th i {font-size: 13px;margin: 0 5px;cursor: pointer;}table.table td:last-child i {opacity: 0.9;font-size: 22px;margin: 0 5px;}table.table td a {font-weight: bold;color: #566787;display: inline-block;text-decoration: none;}table.table td a:hover {color: #2196F3;}table.table td a.settings {color: #2196F3;}table.table td a.delete {color: #F44336;}table.table td i {font-size: 19px;}table.table .avatar {border-radius: 50%;vertical-align: middle;margin-right: 10px;}</style>
</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-light">
	<a href="/" class="navbar-brand">Tugas<b>Praktikum</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="/" class="nav-item nav-link">Kamar</a>
			<a href="/dokter" class="nav-item nav-link">Dokter</a>
			<a href="/pasien" class="nav-item nav-link">Pasien</a>
    </div>
	</div>
</nav>
<div id="body">
  @yield('content')
</div>
</body>
</html>