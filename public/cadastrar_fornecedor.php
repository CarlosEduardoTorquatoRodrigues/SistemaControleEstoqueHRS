<?php 
$pageTitle = "Cadastrar Fornecedor - HRS";
$activePage = "fornecedor";
include '../includes/header.php'; 
?>

<?php include '../includes/nav.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">

            <div class="card card-custom shadow-lg border-0">
                <div class="card-body p-4 p-md-5">

                    <h3 class="text-center fw-bold mb-4">
                        CADASTRAR FORNECEDOR
                    </h3>

                    <form action="#" method="POST">

                        <!-- Nome -->
                        <div class="mb-3">
                            <label for="nome" class="form-label fw-semibold">Nome</label>
                            <input type="text"
                                   id="nome"
                                   name="nome"
                                   class="form-control"
                                   placeholder="Digite o nome completo"
                                   required>
                        </div>

                        <!-- Telefone -->
                        <div class="mb-3">
                            <label for="telefone" class="form-label fw-semibold">Telefone</label>
                            <input type="text"
                                   id="telefone"
                                   name="telefone"
                                   class="form-control"
                                   placeholder="(xx) xxxx-xxxx"
                                   required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">E-mail</label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Digite o e-mail"
                                   required>
                        </div>

                        <!-- CNPJ -->
                        <div class="mb-3">
                            <label for="cnpj" class="form-label fw-semibold">CNPJ</label>
                            <input type="text"
                                   id="cnpj"
                                   name="cnpj"
                                   class="form-control"
                                   placeholder="Digite o CNPJ"
                                   required>
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold d-block">Status</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                       type="radio"
                                       name="status"
                                       id="ativo"
                                       value="1"
                                       checked>
                                <label class="form-check-label" for="ativo">
                                    Ativo
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input"
                                       type="radio"
                                       name="status"
                                       id="inativo"
                                       value="0">
                                <label class="form-check-label" for="inativo">
                                    Inativo
                                </label>
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="fornecedores.php" class="btn btn-hrs px-4">
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-brown px-4">
                                Cadastrar
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>