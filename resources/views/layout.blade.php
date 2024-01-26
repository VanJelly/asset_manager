<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Institutions</title>
        <Link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <Link rel="stylesheet" href="{{ asset('vendor/icons/md-icons/md-icons.css')}}">
        <Link rel="stylesheet" href="{{ asset('css/custom.css')}}">
        <Link rel="stylesheet" href="{{ asset('css/sidebar.css')}}">
	</head>
	<body>
		<div class="app-container">
			@include("partials.sidebar")
			<main class="main-content" id="main-content">
                @yield('page-content')
            </main>

        </div>
		<script
			src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
	</body>
</html>