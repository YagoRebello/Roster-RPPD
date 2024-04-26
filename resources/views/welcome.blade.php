<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPPD</title>
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
<div class="login-container">
    <img src="{{ asset('site/image/RPPD_LOGO.png') }}" alt="Left Image" class="left-img">
    <img src="{{ asset('site/image/brasao.png') }}" alt="Right Image" class="right-img">
    <h1>RIBEIRÃO PIRES POLICE DEPARTMENT</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="input-container">
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" placeholder="Usuário" required>
            <span class="password-toggle" onclick="togglePassword()"><i style="color:transparent" id="eye-icon" class="bi bi-eye"></i></span>
        </div>
        <div class="input-container">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Senha" required>
            <span class="password-toggle" onclick="togglePassword()"><i id="eye-icon" class="bi bi-eye"></i></span>
        </div>
        <button type="submit">Login</button>
    </form>
</div>

<script>
    function togglePassword() {
        var passwordInput = document.getElementById("password");
        var eyeIcon = document.getElementById("eye-icon");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.className = "bi bi-eye-slash";
        } else {
            passwordInput.type = "password";
            eyeIcon.className = "bi bi-eye";
        }
    }
</script>
</body>
</html>
