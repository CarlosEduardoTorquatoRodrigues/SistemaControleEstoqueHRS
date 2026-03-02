<?php 
$pageTitle = "Cadastrar Material - HRS";
$activePage = "estoque";
include '../includes/header.php'; 
?>

<?php include '../includes/nav.php'; ?>

<!-- TÍTULO -->
<h2 class="page-title">CADASTRAR MATERIAL</h2>

<!-- FORM CARD -->
<div class="container d-flex justify-content-center">
    <div class="card-custom col-12 col-md-8 col-lg-6">

        <form>

            <div class="mb-3">
                <label class="form-label fw-semibold">Nome do Material</label>
                <input type="text" class="form-control" placeholder="Digite o nome completo">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Tipo do Material</label>
                <select class="form-select">
                    <option selected disabled>Selecione</option>
                    <option>Madeira</option>
                    <option>Ferragem</option>
                    <option>Tecido</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Unidade de Medida</label>
                <select class="form-select">
                    <option selected disabled>Selecione</option>
                    <option>Unidade</option>
                    <option>Metro</option>
                    <option>Kg</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Estoque Mínimo</label>
                <input type="number" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Imagem</label>
                <input type="file" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Local de Estoque</label>
                <select class="form-select">
                    <option selected disabled>Selecione</option>
                    <option>Galpão A</option>
                    <option>Galpão B</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status">
                    <label class="form-check-label">Ativo</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status">
                    <label class="form-check-label">Inativo</label>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-brown">Cancelar</a>
                <button type="submit" class="btn btn-brown">Cadastrar</button>
            </div>

        </form>

    </div>
</div>

<?php include '../includes/footer.php'; ?>