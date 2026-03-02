<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Local de Estoque - HRS</title>

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
    <h2 class="page-title">LOCAL DE ESTOQUE</h2>

    <div class="container">

    <!-- FORM -->
    <div class="card-custom mb-4">
        <label class="fw-bold mb-2">Descrição do Local:</label>
        <input type="text" class="form-control mb-3">

        <button class="btn-brown me-2">Cancelar</button>
        <button class="btn-brown">Salvar</button>
    </div>

    <!-- TABELA -->
    <div class="table-container">
        <table class="table table-hover table-custom">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Deposito Principal</td>
                    <td class="text-center">
                        <a href="editar_local.php" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- PAGINAÇÃO -->
        <div class="text-center mt-4">
            <span class="me-3">Anterior</span>

            <button class="btn btn-brown btn-sm">1</button>

            <span class="ms-3">Próxima</span>

            <p class="mt-2">Mostrando 1 a 5 de 5 registros</p>
        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>