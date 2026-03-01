<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - HRS</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="login-box shadow">

        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="../assets/img/logo.png" alt="HRS Logo" class="img-fluid logo">
        </div>

        <h3 class="text-center mb-4 fw-bold">Login</h3>

        <form method="POST" action="processa_login.php">

            <div class="mb-3">
                <label class="form-label fw-semibold">E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>

            <div class="text-end mb-3">
                <a href="#" class="text-decoration-none forgot">Esqueci minha senha</a>
            </div>

            <button type="submit" class="btn btn-hrs w-100">
                ENTRAR
            </button>

        </form>

    </div>

</div>

</body>
</html>