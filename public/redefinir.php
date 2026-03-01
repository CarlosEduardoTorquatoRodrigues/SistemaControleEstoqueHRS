<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Redefinir Senha - HRS</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/auth.css">

</head>

<body>

<div class="container d-flex justify-content-center align-items-center auth-container">

    <div class="auth-box shadow">

        <!-- Logo -->
        <div class="text-center mb-4">
            <img src="../assets/img/logo.png" class="logo img-fluid">
        </div>

        <!-- Título -->
        <h3 class="text-center fw-bold mb-4">Redefinir Senha</h3>

        <!-- Campo Nova Senha -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Nova Senha</label>
            <input type="password" class="form-control" placeholder="Digite a nova senha">
        </div>

        <!-- Campo Confirmar -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Confirmar Nova Senha</label>
            <input type="password" class="form-control" placeholder="Confirme a nova senha">
        </div>

        <!-- Regras -->
        <div class="password-rules">
            <strong>A senha deve conter:</strong>
            <ul>
                <li>No mínimo 8 caracteres</li>
                <li>Uma letra maiúscula</li>
                <li>Um número</li>
            </ul>
        </div>

        <!-- Botão -->
        <button class="btn btn-hrs w-100 mt-3">
            SALVAR NOVA SENHA
        </button>

        <!-- Voltar -->
        <div class="text-center mt-3">
            <a href="../public/login.php" class="text-decoration-none">
                Voltar para Login
            </a>
        </div>

    </div>

</div>

</body>
</html>