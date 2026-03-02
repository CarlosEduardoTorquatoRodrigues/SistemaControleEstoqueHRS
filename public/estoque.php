<?php 
$pageTitle = "Estoque - HRS";
$activePage = "estoque";
include '../includes/header.php'; 
?>

<?php include '../includes/nav.php'; ?>

<div class="container">

    <h2 class="page-title">ESTOQUE</h2>

    <!-- CARD FILTRO -->
    <div class="card-custom mb-4">
        <div class="row g-3 align-items-end">

            <div class="col-12 col-md-6">
                <label class="form-label fw-semibold">Buscar Material</label>
                <input type="text" class="form-control" placeholder="Digite o nome do material...">
            </div>

            <div class="col-12 col-md-3">
                <label class="form-label fw-semibold">Tipo</label>
                <select class="form-select">
                    <option selected>Selecione o tipo</option>
                    <option>Ferragem</option>
                    <option>Elétrico</option>
                    <option>Hidráulico</option>
                </select>
            </div>

            <div class="col-12 col-md-3 d-flex gap-2">
                <button class="btn-brown w-100">Filtrar</button>
                <a href="cadastrar_material.php" class="btn-brown w-100 text-center">
                    + Cadastrar
                </a>
            </div>

        </div>
    </div>


    <!-- CARD TABELA -->
    <div class="card-custom">

        <div class="table-responsive">
            <table class="table align-middle">

                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Cód.</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Unidade</th>
                        <th>Local</th>
                        <th>Estoque Atual</th>
                        <th>Estoque Mínimo</th>
                        <th>Status</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <div style="width:60px;height:60px;background:#ccc;border-radius:8px;"></div>
                        </td>
                        <td>1</td>
                        <td>Parafuso</td>
                        <td>Ferragem</td>
                        <td>UN</td>
                        <td>Depósito</td>
                        <td>
                            <span class="badge bg-success">100</span>
                        </td>
                        <td>50</td>
                        <td>
                            <span class="badge bg-success">Ativo</span>
                        </td>
                        <td>25/04/2026</td>
                        <td class="text-center">
                            <a href="editar_material.php" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>


        <!-- PAGINAÇÃO -->
        <div class="d-flex justify-content-center align-items-center mt-4 gap-3 flex-wrap">
            <button class="btn-brown">Anterior</button>
            <span class="fw-bold">1</span>
            <button class="btn-brown">Próxima</button>
        </div>

        <div class="text-center mt-3 fw-semibold">
            Mostrando 1 a 5 de 5 registros
        </div>

    </div>

</div>

<?php include '../includes/footer.php'; ?>