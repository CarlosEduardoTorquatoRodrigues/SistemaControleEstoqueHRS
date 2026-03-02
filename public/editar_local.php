<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Local - HRS</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/local_estoque.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>

<!-- NAVBAR -->
<div class="navbar-custom d-flex justify-content-between align-items-center">

    <img src="../assets/img/logo.png" width="120">

    <div class="nav-links">
        <a href="#">Dashboard</a>
        <a href="#">Movimentação</a>
        <a href="#" class="active">Local de Estoque</a>
        <a href="#">Relatórios</a>
        <a href="#">Estoque</a>
        <a href="#">Fornecedor</a>
        <a href="#">Usuários</a>
    </div>

    <div class="text-end">
        <strong>Admin</strong><br>
        <a href="#" class="btn btn-danger btn-sm mt-1">Sair</a>
    </div>

</div>

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

</body>
</html>