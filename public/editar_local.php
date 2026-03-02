<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Local - HRS</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/local_estoque.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
<div class="container-fluid">

<!-- LOGO -->
<a class="navbar-brand" href="#">
    <img src="../assets/img/logo.png" width="120">
</a>

<!-- BOTÃO HAMBÚRGUER -->
<button class="navbar-toggler" type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<!-- MENU -->
<div class="collapse navbar-collapse justify-content-center" id="navbarNav">

<ul class="navbar-nav text-center">

<li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
<li class="nav-item"><a class="nav-link" href="#">Movimentação</a></li>
<li class="nav-item"><a class="nav-link active" href="#">Local de Estoque</a></li>
<li class="nav-item"><a class="nav-link" href="#">Relatórios</a></li>
<li class="nav-item"><a class="nav-link" href="#">Estoque</a></li>
<li class="nav-item"><a class="nav-link" href="#">Fornecedor</a></li>
<li class="nav-item"><a class="nav-link" href="#">Usuários</a></li>

</ul>

<!-- USUÁRIO MOBILE -->
<div class="text-center mt-3 d-lg-none">
    <strong>Admin</strong><br>
    <a href="login.php" class="btn btn-danger btn-sm mt-2">Sair</a>
</div>

</div>

<!-- USUÁRIO DESKTOP -->
<div class="text-end d-none d-lg-block">
    <strong>Admin</strong><br>
    <a href="login.php" class="btn btn-danger btn-sm mt-1">Sair</a>
</div>

</div>
</nav>

<!-- TÍTULO -->
<h2 class="page-title">EDITAR LOCAL DE ESTOQUE</h2>

<div class="container">

    <div class="card-custom">

        <label class="fw-bold mb-2">Descrição do Local:</label>

      
        <input type="text" class="form-control mb-4" value="Deposito Principal">

        <a href="local_estoque.php" class="btn-brown me-2 text-decoration-none" >Cancelar</a>
        <a href="#" class="btn-brown text-decoration-none">Atualizar</a>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>