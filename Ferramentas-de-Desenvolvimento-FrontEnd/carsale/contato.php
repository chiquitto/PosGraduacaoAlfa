<div class="container">
	<h1>Entre em Contato</h1>
	<ul class="breadcrumb">
		<li><a href="home">Página Inicial</a></li>
		<li>Contato</li>
	</ul>

	<div class="row">
		<div class="col-md-9 col-sm-9 col-xs-12">
			<p>* Preenchimento obrigatório</p>
			<form name="form1" method="post" novalidate>
				<div class="control-group">
					<label for="nome" class="control-label">* Nome:</label>
					<div class="controls">
						<input type="text" name="nome" id="nome" placeholde="Digite seu nome completo" class="form-control" data-validation-required-message="Prencha o nome">
					</div>
				</div>
				<div class="control-group">
					<label for="telefone" class="control-label">* Telefone:</label>
					<div class="controls">
						<input type="text" name="telefone" id="telefone" placeholde="Digite seu telefone corretamente" class="form-control" data-validation-required-message="Insira um telefone válido" data-mask="(99) 9999-9999?9">
					</div>
				</div>
				<div class="control-group">
					<label for="email" class="control-label">* E-mail:</label>
					<div class="controls">
						<input type="text" name="email" id="email" placeholde="Digite seu e-mail corretamente" class="form-control" data-validation-email-message="Insira um e-mail válido" data-validation-required-message="Insira um e-mail válido">
					</div>
				</div>
				<button type="submit" class="btn btn-success"> Enviar Mensagem </button>
			</form>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-12">
			<h2>Outros meios de contato:</h2>
			<p>
				Facebook: www.facebook.com
			</p>
			<br>
			E-mail: alex@mail.com
			<br>
			Telefone: (0800) 011-1406
		</div>
	</div>
</div>