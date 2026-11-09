<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML and CSS Fundamentals</title>
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
            text-align: center;
        }

        .course-details {
            background-color: #fff;
            padding: 2em;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .course-details img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 1em;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>HTML and CSS Fundamentals</h1>
</header>

<section>
    <div class="course-details">
        <img src="html-css.jpg" alt="HTML and CSS Fundamentals">
        <p>Основи роботи з HTML та CSS.</p>
        <p>Цей курс дозволить вам вивчити основи створення веб-сторінок за допомогою HTML та CSS. Ви дізнаєтеся про структуру HTML-документа, роботу з тегами, стилізацію елементів та використання CSS-селекторів.</p>
        <p>Для участі у курсі, будь ласка, зареєструйтеся <a href="registration.php">тут</a>.</p>
    </div>
</section>

<footer>
    <p>&copy; 2023 HTML and CSS Fundamentals</p>
</footer>

</body>
</html>
