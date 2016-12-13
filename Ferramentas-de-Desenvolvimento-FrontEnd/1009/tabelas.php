<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DataTable</title>
	<script src="js/jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<script>
		$(document).ready(function(){
			$("#alunos").DataTable({
				"language": {
					"lengthMenu": "Mostrar _MENU_ registros por páginas",
					"info": "Mostrando página _PAGE_ de _PAGES_",
					"infoEmpty": "Nenhum registro",
					"infoFiltered": "Filtrados de _MAX_ registros"
				}
			});
		})
	</script>
</head>
<body>
	<h1>Tabela de Alunos</h1>

	<table id="alunos" class="display table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>Nome do Aluno</th>
				<th>Idade</th>
				<th>Nota do Aluno</th>
				<th>Opções</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>AlexMCoder</td>
				<td>23</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>burnes</td>
				<td>35</td>
				<td>9</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Tiago</td>
				<td>24</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Suissa</td>
				<td>33</td>
				<td>8</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Mineto</td>
				<td>46</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Galvão</td>
				<td>45</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Davi</td>
				<td>23</td>
				<td>5</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>João</td>
				<td>20</td>
				<td>8</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Rennan</td>
				<td>23</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Nicolas</td>
				<td>24</td>
				<td>7</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Luan</td>
				<td>25</td>
				<td>6</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Daniel</td>
				<td>26</td>
				<td>8</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Lucas</td>
				<td>23</td>
				<td>8</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Marcos</td>
				<td>38</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Chiquitto</td>
				<td>32</td>
				<td>8</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Dorigan</td>
				<td>36</td>
				<td>9.5</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Marcio</td>
				<td>48</td>
				<td>7</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Andre Pereira</td>
				<td>34</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Marcos Vendramini</td>
				<td>29</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Carlos</td>
				<td>47</td>
				<td>10</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
			<tr>
				<td>Cleber</td>
				<td>26</td>
				<td>5</td>
				<td>
					<a href="deletar" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>