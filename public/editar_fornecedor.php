<?php 
$pageTitle = "Editar Fornecedor - HRS";
$activePage = "fornecedor";
include '../includes/header.php'; 
?>

<?php include '../includes/nav.php'; ?>

<div class="container">

    <h2 class="page-title">EDITAR FORNECEDOR</h2>

    <div class="card-custom">

        <form>

            <div class="row g-3">

                <!-- Nome -->
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold">Nome do Fornecedor</label>
                    <input type="text" class="form-control" value="Madeirite">
                </div>

                <!-- CNPJ -->
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold">CNPJ</label>
                    <input type="text" class="form-control" value="44.659.473/0001-70">
                </div>

                <!-- E-mail -->
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold">E-mail</label>
                    <input type="email" class="form-control" value="madeirite@gmail.com">
                </div>

                <!-- Telefone -->
                <div class="col-12 col-md-6">
                    <label class="form-label fw-semibold">Telefone</label>
                    <input type="text" class="form-control" value="3821-1540">
                </div>

                <!-- Status -->
                <div class="col-12 col-md-4">
                    <label class="form-label fw-semibold">Status</label>
                    <select class="form-select">
                        <option value="1" selected>Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>

            </div>

            <!-- Botões -->
            <div class="d-flex justify-content-end gap-2 mt-4 flex-wrap">

                <a href="fornecedores.php" class="btn btn-light">
                    Voltar
                </a>

                <button type="submit" class="btn btn-brown">
                    Salvar Alterações
                </button>

            </div>

        </form>

    </div>

</div>

<?php include '../includes/footer.php'; ?>