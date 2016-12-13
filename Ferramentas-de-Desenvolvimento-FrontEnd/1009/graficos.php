<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Chart - Gráfico</title>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Chart.Js</h1>

		<h2>Gráfico com Barras</h2>
		<canvas id="barras" width="400" height="120"></canvas>

		<h2>Gráfico de Pie</h2>
		<canvas id="pie" width="400" height="120"></canvas>

		<h2>Gráfico de Line</h2>
		<canvas id="line" width="400" height="120"></canvas>

		<script type="text/javascript">
		//objeto canvas
		var ctx = document.getElementById("barras");
		//configurar os dados do gráfico
		var myChart = new Chart(ctx, {
			type: "bar", //tipo de grafico
			data: {
				labels: ["Alex", "Tiago", "Burnes"],
				datasets: [{
					label: "Número de vendas de agosto",
					data: [12,21,05],
					backgroundColor:["rgba(255,99,132,0.2)", "rgba(54,162,235,0.2)", "rgba(255,206,86,0.2)"],
					borderColor:["rgba(255,99,132,0.1)", "rgba(54,162,235,0.1)", "rgba(255,206,86,0.1)"],
					borderWidth: 1
				}]
			}
		});
	</script>

	<script type="text/javascript">
		//objeto canvas
		var pie = document.getElementById("pie");
		//configurar os dados do gráfico
		var myChart = new Chart(pie, {
			type: "pie", //tipo de grafico
			data: {
				labels: ["Alex", "Tiago", "Burnes"],
				datasets: [{
					label: "Número de vendas de agosto",
					data: [12,21,05],
					backgroundColor:["rgba(255,99,132,0.2)", "rgba(54,162,235,0.2)", "rgba(255,206,86,0.2)"],
					borderColor:["rgba(255,99,132,0.1)", "rgba(54,162,235,0.1)", "rgba(255,206,86,0.1)"],
					borderWidth: 1
				}]
			}
		});
	</script>

	<script type="text/javascript">
		//objeto canvas
		var line = document.getElementById("line");
		//configurar os dados do gráfico
		var myChart = new Chart(line, {
			type: "line", //tipo de grafico
			data: {
				labels: ["Alex", "Tiago", "Burnes"],
				datasets: [{
					label: "Número de vendas de agosto",
					data: [12,21,05],
					backgroundColor:["rgba(255,99,132,0.2)", "rgba(54,162,235,0.2)", "rgba(255,206,86,0.2)"],
					borderColor:["rgba(255,99,132,0.1)", "rgba(54,162,235,0.1)", "rgba(255,206,86,0.1)"],
					borderWidth: 1
				}]
			}
		});
	</script>
</div>
</body>
</html>