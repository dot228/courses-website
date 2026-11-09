<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Реєстрація на курс</title>
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

        input, select {
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
    </style>
</head>
<body>

<form action="#" method="post">
    <label for="name">Ім'я:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Електронна пошта:</label>
    <input type="email" id="email" name="email" required>

    <label for="course">Оберіть курс:</label>
    <select id="course" name="course" required>
        <option value="javascript">JavaScript Basics</option>
        <option value="html_css">HTML and CSS Fundamentals</option>
        <option value="python">Python Basics</option>
        <option value="sql">SQL Fundamentals</option>
    </select>

    <button type="submit">Зареєструватися</button>
</form>

</body>
</html>
