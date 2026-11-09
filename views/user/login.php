<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 2em;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 0.5em;
        }
        .password-container {
            position: relative;
        }

        input {
            width: calc(100% - 1em);
            padding: 0.5em;
            margin-bottom: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        .registr-link {
            text-align: center;
            margin-top: 1em;
        }

        .registr-link a {
            color: #007BFF;
            text-decoration: none;
        }


    </style>
</head>
<body>

<form action="../../general.php" method="post">
    <span class="toggle-password" onclick="togglePassword('password')">👁️ Підглянути</span>

    <label for="email">Електронна пошта:</label>
    <input type="email" id="email" name="email" required>

    <label for="password" class="password-container">Пароль:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Увійти</button>
    <div class="registr-link">
        <p>Немає акаунта? <a href="/user/registr">Зареєструватися</a></p>
    </div>
</form>
<script>
    function togglePassword(fieldId) {
        const passwordField = document.getElementById(fieldId);
        const toggleButton = document.querySelector('.toggle-password');

        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleButton.textContent = '🙈 Сховати';
        } else {
            passwordField.type = 'password';
            toggleButton.textContent = '👁️ Підглянути';
        }
    }
</script>
</body>
</html>
