<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="styles/form.css">
</head>

<body>
    <header class="header">
        <div class="mail">
            <h1>Горьков Владимир Андреевич - Начинающий веб-разработчик</h1>
            <a class="bton" href="mailto:gorkov2004777@gmail.com">Написать мне</a>
        </div>
        <div class="container">
            <nav class="main-menu">
                <a class="title">Моя страница</a>
                <a href="<?php
                $name = 'Аутентификация';
                // $link = 'authentification.php';
                $current_page = false;
                echo $link;

                ?>" class="<?php
                if ($current_page)
                    echo 'selected_menu';
                else
                    echo 'navigation';
                ?>">
                    <?php
                    echo $name;
                    ?>
                </a>

                <a href="<?php
                $name = 'Обратная связь';
                // $link = 'feedbackForm.php';
                $current_page = true;
                echo $link;

                ?>" class="<?php
                if ($current_page)
                    echo 'selected_menu';
                else
                    echo 'navigation';
                ?>">
                    <?php
                    echo $name;
                    ?>
                </a>

                <a href="<?php
                $name = 'Главная';
                // $link = 'index.php';
                $current_page = false;
                echo $link;

                ?>" class="<?php
                if ($current_page)
                    echo 'selected_menu';
                else
                    echo 'navigation';
                ?>">
                    <?php
                    echo $name;
                    ?>
                </a>
            </nav>
        </div>
    </header>