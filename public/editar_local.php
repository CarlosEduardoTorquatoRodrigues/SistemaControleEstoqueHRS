<?php 
$pageTitle = "Local de Estoque - HRS";
$activePage = "Local de Estoque";
include '../includes/header.php'; 
?>

<?php include '../includes/nav.php'; ?>

<!-- TÍTULO -->
<h2 class="page-title">EDITAR LOCAL DE ESTOQUE</h2>

<div class="container">

    <div class="card-custom">

        <label class="fw-bold mb-2">Descrição do Local:</label>

      
        <input type="text" class="form-control mb-4" value="Deposito Principal">

        <a href="local_estoque.php" class="btn-brown me-2 text-decoration-none" >Cancelar</a>
        <a href="local_estoque.php" class="btn-brown text-decoration-none">Atualizar</a>

    </div>

</div>

<?php include '../includes/footer.php'; ?>
