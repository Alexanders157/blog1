<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5675e3;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #5675e3;
            color: #fff;
        }


        .upper-text a {
            color: #ccde99;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        input[type="submit"] {
            background-color: #5675e3;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #5675e3;
        }

        button[type="submit"]{
            background: #5675e3;
            color: white;
        }

    </style>


    <title>Блог</title>
</head>
<body>
<div>
</div>
<header>
    <h1>Блог о домашних животных</h1>
    <p class="upper-text a" align=left><a href="#"> Главная </a></p>
    <p class="upper-text a" align=left><a href="#"> Категории </a></p>
    <p class="upper-text a" align=left><a href="#"> Все посты </a></p>
    <p class="upper-text a" align=left><a href="#"> Контакты </a></p>
</header>
<br>
<br>
<main>
    <div class="container">
        <form action="/submit" method="post">
            <label for="choice">Выбрать категорию:</label>
            <select id="choice" name="choice">
                <option value="option1">Вариант 1</option>
                <option value="option2">Вариант 2</option>
                <option value="option3">Вариант 3</option>
            </select>

            <button type="submit">Выбрать</button>
        </form>
        <h2>Отправить сообщение</h2>

        <form action="#" method="post" enctype="multipart/form-data">
            <label for="message">Сообщение:</label><br>
            <textarea id="message" name="message" rows="10" cols="50" required></textarea><br>
            <label for="attachment">Выберите файл для вложения:</label><br>
            <input type="file" id="attachment" name="attachment" accept="image/*">
            <br>
            <br>
            <input type="submit" value="Отправить">
        </form>

    </div>
    <br>
    <br>
    <footer>
        <p>&copy; 2024 Мой Блог</p>
    </footer>
</main>
</body>
</html>
