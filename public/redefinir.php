<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Redefinir Senha - HRS</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/auth.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body class="d-flex justify-content-center align-items-center min-vh-100">

<div class="auth-box shadow">

    <div class="text-center mb-4">
        <img src="../assets/img/logo.png" class="logo img-fluid">
    </div>

    <h3 class="text-center fw-bold mb-4">Redefinir Senha</h3>

    <!-- Nova Senha -->
    <div class="mb-3">
        <label class="form-label fw-semibold">Nova Senha</label>
        <div class="input-group">
            <input type="password" id="senha1" class="form-control" placeholder="Digite a nova senha">
            <span class="input-group-text" onclick="toggleSenha('senha1', this)" style="cursor:pointer;">
                <i class="bi bi-eye"></i>
            </span>
        </div>
    </div>

    <!-- Confirmar Senha -->
    <div class="mb-3">
        <label class="form-label fw-semibold">Confirmar Nova Senha</label>
        <div class="input-group">
            <input type="password" id="senha2" class="form-control" placeholder="Confirme a nova senha">
            <span class="input-group-text" onclick="toggleSenha('senha2', this)" style="cursor:pointer;">
                <i class="bi bi-eye"></i>
            </span>
        </div>
    </div>

    <div class="password-rules">
        <strong>A senha deve conter:</strong>
        <ul>
            <li>No mínimo 8 caracteres</li>
            <li>Uma letra maiúscula</li>
            <li>Um número</li>
        </ul>
    </div>

    <button class="btn btn-hrs w-100 mt-3">
        SALVAR NOVA SENHA
    </button>

    <div class="text-center mt-3">
        <a href="login.php" class="text-decoration-none">
            Voltar para Login
        </a>
    </div>

</div>

<script>
function toggleSenha(id, element) {
    const input = document.getElementById(id);
    const icon = element.querySelector("i");

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("bi-eye");
        icon.classList.add("bi-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
    }
}
</script>

</body>
</html>