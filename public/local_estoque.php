<?php 
$pageTitle = "Local de Estoque - HRS";
$activePage = "Local de Estoque";
include '../includes/header.php'; 
?>

<?php include '../includes/nav.php'; ?>

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
<?php include '../includes/footer.php'; ?>
