<?php 
$pageTitle = "Fornecedores - HRS";
$activePage = "fornecedor";
include '../includes/header.php'; 
?>

<?php include '../includes/nav.php'; ?>

<div class="container py-5">

    <!-- Título -->
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <h3 class="fw-bold text-uppercase text-brown">
            Fornecedores Cadastrados
        </h3>

        <a href="cadastrar_fornecedor.php" class="btn btn-brown">
            + Cadastrar Fornecedor
        </a>
    </div>

    <!-- CARD FILTRO -->
    <div class="card card-custom p-4 mb-4">
        <form>
            <div class="row g-3 align-items-end">

                <!-- Pesquisa -->
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Pesquisar</label>
                    <input type="text" class="form-control" placeholder="Nome, e-mail ou CNPJ">
                </div>

                <!-- Status -->
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Status</label>
                    <select class="form-select">
                        <option value="">Todos</option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>

                <!-- Data Inicial -->
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Data Inicial</label>
                    <input type="date" class="form-control">
                </div>

                <!-- Data Final -->
                <div class="col-md-2">
                    <label class="form-label fw-semibold">Data Final</label>
                    <input type="date" class="form-control">
                </div>

                <!-- Botões -->
                <div class="col-md-2 d-grid">
                    <button type="submit" class="btn btn-brown">
                        Filtrar
                    </button>
                </div>

            </div>
        </form>
    </div>

    <!-- CARD TABELA -->
    <div class="card card-custom p-4">

        <div class="table-responsive">
            <table class="table align-middle table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>CNPJ</th>
                        <th>Status</th>
                        <th>Data de Cadastro</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Madeirite</td>
                        <td>3821-1540</td>
                        <td>madeirite@gmail.com</td>
                        <td>44.659.473/0001-70</td>
                        <td><span class="status-ativo">Ativo</span></td>
                        <td>24/04/2026 09:00</td>
                        <td class="text-center">
                            <a href="editar_fornecedor.php" class="btn btn-warning btn-sm">
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

        <!-- Paginação -->
        <div class="d-flex justify-content-center align-items-center mt-4 gap-3 flex-wrap">
            <button class="btn btn-light btn-sm">Anterior</button>
            <button class="btn btn-brown btn-sm">1</button>
            <button class="btn btn-light btn-sm">Próxima</button>
        </div>

        <div class="text-center mt-3">
            <small class="text-muted">
                Mostrando 1 a 8 de 8 registros
            </small>
        </div>

    </div>

</div>

<?php include '../includes/footer.php'; ?>