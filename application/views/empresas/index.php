<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="<?= base_url('public/css/usuarios.css') ?>"></>
	<link rel="stylesheet" href="<?= base_url('public/css/bootstrap.css') ?>"></>
	<script type="text/javascript" src="<?= base_url('public/js/bootstrap.js') ?>>"></script>
<head>
</head>
<body>

<?php if($this->session->flashdata("success")); ?>
<p class="alert-success"><?= $this->session->flashdata("success") ?></p>
<?php endif ?>

<?php if($this->session->flashdata("danger")); ?>
l<p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
<?php endif ?>

<?php if($this->session->userdata("usuario logado")) ;?>

<div class="container">
	<h1>Empresas</h1>
	<table class="table">
		<thead class="thead-dark">
		<tr>
			<th>Nome</th>
			<th>Categoria</th>
			<th>Descrição</th>
		</tr>
		</thead>
		<?php foreach ($empresas as $empresa) : ?>
		<tr>
			<td><?= $empresa['nome'] ?></td>
			<td><?= $empresa['categoria'] ?></td>
			<td><?= $empresa['descricao'] ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>


<?php else : ?>

<h3>Login</h3>

<div class="form-group">
	<input type="text" class="form-control" placeholder="Seu Email *" value="" />
</div>
<div class="form-group">
	<input type="password" class="form-control" placeholder="Sua Senha *" value="" />
</div>
<div class="form-group">
	<input type="submit" class="btnSubmit" value="Entrar" />
</div>

<div class="container login-container">

	<div action="Login.php" class="row">
		<div class="col-md-6 login-form-1">

<div action="Usuarios.php">

	<h3>Cadastro</h3>
	<div class="form-group">
		<input type="username" class="form-control" placeholder="Seu Nome *" value="" />
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Seu Email *" value="" />
	</div>
	<div class="form-group">
		<input type="password" class="form-control" placeholder="Sua Senha *" value="" />
	</div>
	<div class="form-group">
		<input type="submit" class="btnSubmit" value="Cadastrar" />
	</div>
</div>
</div>
</div>
</div>
</body>
</html>

