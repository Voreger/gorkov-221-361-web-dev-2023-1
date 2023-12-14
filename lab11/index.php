<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="body-form">
    <header class="header">
        <div class="mail">
            <h1>Горьков Владимир Андреевич - Начинающий веб-разработчик</h1>
            <a class="bton" href="mailto:gorkov2004777@gmail.com">Написать мне</a>
        </div>
        <div id=”main_menu”><?php
        echo '<a href=”?html_type=TABLE'; // начало ссылки ТАБЛИЧНАЯ ФОРМА
        if (!isset($_GET['content'])) // если параметр content был передан в скрипт
            echo '&content=' . $_GET['content']; // добавляем в ссылку второй параметр
        echo '”'; // завершаем формирование адреса ссылки и закрываем кавычку
        // если в скрипт был передан параметр html_type и параметр равен TABLE
        if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'TABLE')
            echo ' class=”selected”'; // ссылка выделяется через CSS-класс
        echo '>Табличная форма</a>'; // конец ссылки ТАБЛИЧНАЯ ФОРМА
        
        echo '<a href=?html_type=DIV'; // начало ссылки БЛОКОВАЯ ФОРМА
        // если в скрипт был передан параметр html_type и параметр равен DIV
        if (array_key_exists('html_type', $_GET) && $_GET['html_type'] == 'DIV')
            echo ' class=”selected”'; // ссылка выделяется через CSS-класс
        echo '>Блочная форма</a>'; // конец ссылки БЛОКОВАЯ ФОРМА
        ?></div>
    </header>
    <div id=”product_menu”><?php
    echo '<a href=”/”'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
    if (!isset($_GET['content'])) // если в скрипт НЕ был передан параметр content
        echo ' class=”selected”'; // ссылка выделяется через CSS-класс
    echo '>Вся таблица умножения</a>'; // конец ссылки
    for ($i = 2; $i <= 9; $i++) // цикл со счетчиком от 2 до 9 включительно
    {
        echo '<a href=?content=' . $i . ' '; // начало ссылки
        // если в скрипт был передан параметр content
        // и параметр равен значению счетчика
        if (isset($_GET['content']) && $_GET['content'] == $i)
            echo ' class=”selected”'; // ссылка выделяется через CSS-класс
        echo '>Таблица умножения на ' . $i . '</a>'; // конец ссылки
    }
    ?></div>
</body>