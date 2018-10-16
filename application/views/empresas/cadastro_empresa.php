<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?= base_url('public/css/empresas_cadastro.css') ?>"></>
<link rel="stylesheet" href="<?= base_url('public/js/empresas_cadastro.js') ?>"></>
<link rel="stylesheet" href="<?= base_url('public/css/bootstrap.css') ?>"></>
<script type="text/javascript" src="<?= base_url('public/js/bootstrap.js') ?>>"></script>
</head>
<body>
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<form id="msform">
			<ul id="progressbar">
				<li class="active">Apresentação</li>
				<li>Informações de Contato</li>
				<li>Localização</li>
			</ul>
			<fieldset>
				<h2 class="fs-title">Apresentação</h2>
				<h3 class="fs-subtitle">Conte-nos mais sobre a empresa</h3>
				<input type="text" name="fname" placeholder="Nome"/>
				<input type="text" name="lname" placeholder="Categoria"/>
				<input type="text" name="phone" placeholder="Descrição"/>
				<input type="button" name="next" class="next action-button" value="Próxima"/>
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Informações Contato</h2>
				<h3 class="fs-subtitle">Diga-nos como podemos contatá-la</h3>
				<input type="text" name="phone" placeholder="Telefone"/>
				<input type="text" name="cellphone" placeholder="Celular"/>
				<input type="text" name="email" placeholder="Email"/>
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
				<input type="button" name="next" class="next action-button" value="Próximo"/>
			</fieldset>
			<fieldset>
				<h2 class="fs-title">Localização</h2>
				<h3 class="fs-subtitle">Onde podemos encontrá-la</h3>
				<input type="text" name="text" placeholder="CNPJ"/>
				<input type="text" name="text" placeholder="Logradouro"/>
				<input type="text" name="text" placeholder="Cidade"/>
				<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
				<input type="submit" name="submit" class="submit action-button" value="Cadastrar"/>
			</fieldset>
		</form>
		<div class="dme_link">
			<p><a href="http://designify.me/code-snippets-js/" target="_blank"></a></p>
		</div>
	</div>
</div>
</body>
</html>
