<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calendário</title>

	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/moment-with-locales.js"></script>
	<script src="js/fullcalendar.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fullcalendar.min.css">

	<script>
		$(document).ready(function(){
			$("#calendario").fullCalendar({
				locale: "pt",
				events: [
				{
					title: "Casamento",
					start: "2016-09-24",
					color: "blue"
				},
				{
					title: "Aula de Pós",
					start: "2016-09-10",
					color: "read"
				}
				]
			});
		});
	</script>

	<style>
		.fc-left{
			text-transform: capitalize;
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Calendário</h1>

		<div id="calendario">
			
		</div>
	</div>
</body>
</html>