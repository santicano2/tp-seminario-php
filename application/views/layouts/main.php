<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
		crossorigin="anonymous" />
	<title><?php echo 'TP PHP - ', $title ?></title>
</head>

<body class="d-flex flex-column min-vh-100 bg-dark m-0 p-0" style="font-family: 'Noto Sans', sans-serif;">
	<?php $this->load->view('components/navbar') ?>
	<main class="d-flex flex-column align-items-center justify-content-center flex-grow-1 bg-info bg-gradient bg-opacity-50 flex-grow-1 text-white w-100">
		<?php $this->load->view($innerViewPath) ?>
	</main>
	<?php $this->load->view('components/footer') ?>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/69e571abd7.js" crossorigin="anonymous"></script>
</body>

</html>