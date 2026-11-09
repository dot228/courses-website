<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курси програмування</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            padding-left: 9em;
            padding-right: 9em;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1px;
            text-align: center;
        }

        section {
            margin: 2em;
        }

        .course {
            background-color: #fff;
            padding: 3em;
            margin-bottom: 1em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .course img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 1em;
        }

        .course a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 3%;
        }
    </style>
</head>
<body>

<header>
    <h1>Курси програмування</h1>
</header>

<section>
    <div class="course">
        <img src="javascript.png" alt="JavaScript Basics">
        <h2>JavaScript Basics</h2>
        <p>Вивчення основ JavaScript для початківців.</p>
        <a href="javascript.php">Детальніше</a>
    </div>

    <div class="course">
        <img src="html-css.jpg" alt="HTML and CSS Fundamentals">
        <h2>HTML and CSS Fundamentals</h2>
        <p>Основи роботи з HTML та CSS.</p>
        <a href="html_css.php">Детальніше</a>
    </div>

    <div class="course">
        <img src="python.png" alt="Python Basics">
        <h2>Python Basics</h2>
        <p>Вивчення основ Python для початківців</p>
        <a href="python.php">Детальніше</a>
    </div>

    <div class="course">
        <img src="sql.png" alt="SQL Fundamentals">
        <h2>SQL Fundamentals</h2>
        <p>Основи роботи з базами даних</p>
        <a href="sql.php">Детальніше</a>
    </div>
    <div class="course">
        <img src="images.png" alt="Teachers">
        <h2>Teachers</h2>
        <p>Основи роботи з базами даних</p>
        <a href="teachers.php">Детальніше</a>
    </div>
</section>

<footer>
    <p>&copy; 2023 Курси програмування</p>
</footer>

</body>
</html>
