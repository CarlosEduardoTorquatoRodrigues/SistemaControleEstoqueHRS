<?php
if (!isset($activePage)) {
    $activePage = "";
}

if (!isset($usuarioLogado)) {
    $usuarioLogado = "Admin";
}
?>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom">
<div class="container-fluid">

<a class="navbar-brand" href="#">
    <img src="../assets/img/logo.png" width="120">
</a>

<button class="navbar-toggler" type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-center" id="navbarNav">

<ul class="navbar-nav text-center">

<li class="nav-item">
<a class="nav-link <?= ($activePage == 'dashboard') ? 'active' : '' ?>" href="dashboard.php">
Dashboard
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($activePage == 'movimentacao') ? 'active' : '' ?>" href="movimentacao.php">
Movimentação
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($activePage == 'local') ? 'active' : '' ?>" href="local_estoque.php">
Local de Estoque
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($activePage == 'relatorios') ? 'active' : '' ?>" href="relatorios.php">
Relatórios
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($activePage == 'estoque') ? 'active' : '' ?>" href="estoque.php">
Estoque
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($activePage == 'fornecedor') ? 'active' : '' ?>" href="fornecedores.php">
Fornecedor
</a>
</li>

<li class="nav-item">
<a class="nav-link <?= ($activePage == 'usuarios') ? 'active' : '' ?>" href="usuarios.php">
Usuários
</a>
</li>

</ul>

<!-- MOBILE USER -->
<div class="text-center mt-3 d-lg-none">
<strong><?= $usuarioLogado ?></strong><br>
<a href="login.php" class="btn btn-danger btn-sm mt-2">Sair</a>
</div>

</div>

<!-- DESKTOP USER -->
<div class="text-end d-none d-lg-block">
<strong><?= $usuarioLogado ?></strong><br>
<a href="login.php" class="btn btn-danger btn-sm mt-1">Sair</a>
</div>

</div>
</nav>