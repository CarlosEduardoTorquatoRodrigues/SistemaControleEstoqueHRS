<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HRS</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>

<body class="d-flex justify-content-center align-items-center auth-container">
    <div class="auth-box shadow">

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
                <div class="input-group">
                    <input type="password" name="senha" id="senhaLogin"
                        class="form-control"
                        placeholder="Digite sua senha" required>

                    <span class="input-group-text"
                        onclick="toggleSenha('senhaLogin', this)"
                        style="cursor:pointer;">
                        <i class="bi bi-eye"></i>
                    </span>
                </div>
            </div>

            <div class="text-end mb-3">
                <a href="redefinir.php" class="text-decoration-none forgot">Esqueci minha senha</a>
            </div>

            <button type="submit" class="btn btn-hrs w-100">
                ENTRAR
            </button>

        </form>

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