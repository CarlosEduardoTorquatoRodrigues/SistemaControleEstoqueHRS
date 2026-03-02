<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Local de Estoque - HRS</title>

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
            <a href="login.php" class="btn btn-danger btn-sm mt-1">Sair</a>
        </div>

    </div>

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

</body>
</html>