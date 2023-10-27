<!DOCTYPE html>
<html lang="ru">

<head class="head">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title><?php
        $name = "Главная страница";
        echo $name;
    ?></title>
</head>

<body class="body">
    <header class="header">
        <div class="mail">
            <h1>
                <?php
                    echo "Горьков Владимир Андреевич - Начинающий веб-разработчик";
                ?>
                </h1>
            <a class="btn" href="mailto:gorkov2004777@gmail.com">Написать мне</a>
        </div>
        <div class="container">
            <nav class="main-menu">
                <a class="title">Моя страница</a>
                <a href="<?php
                    $name='Аутентификация';
                    $link='authentification.php';
                    $current_page=false;
                    echo $link;
                    
                ?>" class="<?php
                    if($current_page)
                        echo 'selected_menu';
                    else
                        echo 'navigation';
                ?>"><?php
                    echo $name;
                ?></a>

                <a href="<?php
                    $name='Обратная связь';
                    $link='feedbackForm.php';
                    $current_page=false;
                    echo $link;
                    
                ?>" class="<?php
                    if($current_page)
                        echo 'selected_menu';
                    else
                        echo 'navigation';
                ?>"><?php
                    echo $name;
                ?></a>

                <a href="<?php
                    $name='Главная';
                    $link='index.php';
                    $current_page=true;
                    echo $link;
                    
                ?>" class="<?php
                    if($current_page)
                        echo 'selected_menu';
                    else
                        echo 'navigation';
                ?>"><?php
                    echo $name;
                ?></a>
            </nav>
        </div>
    </header>
    <main>
        <section id="#main">
            <h2 class="subtitle">Главная</h2>
            <p>
                Добро пожаловать на мою первую страницу сайта, я пока не достаточно хорош в
                HTML и CSS но я буду стараться.
            </p>
            <p>Пока предлагаю ознакомиться с данной картинкой:</p>
            <div class="container">
                <figure class="picture">
                <?php
                    $s = date("s");
                    $mod = $s % 2;

                    if ($mod === 0)
                        $name = "images/internet.png";
                    else
                        $name = "images/alsointernet.png";

                    echo '<img src="'.$name.'" alt="интернет">';
                    ?> 
                </figure>

            </div>
        </section>
        <p>
            Как мы можем заметить данная картинка не несет в себе никакого интелектуального наполнения, но в следующий
            раз я, наверняка, найду картинку поинтереснее.
        </p>
        <table class="tbl">
            <tr><th>№ сайта</th><th>Полезность картинки</th></tr>
            <tr><th>1</th><th>0%</th></tr>
            <tr><th>2</th><th> > 0%</th></tr>
        </table>
        <section id="#contact">
            <h2 class="subtitle">Контакты</h2>
            <p>Телефон: 8(999)999-99</p>
            <p>Почта: почта@почта.почта</p>
        </section>
        <section id="#achivements">
            <h2 class="subtitle">Достижения</h2>
            <ol>
                <li><?php
                    echo "Ну конечно же главное достижение это данный сайт.";
                ?></li>
                <li><?php
                    echo "Но так же могу похвастаться двумя золотыми
                    медалями и красным аттестатом из 11-ого класса.";
                ?></li>
                <li><?php
                    echo "Но так же могу похвастаться двумя золотыми
                    медалями и красным аттестатом из 11-ого класса.";
                ?></li>
            </ol>
            <p>
                Вот доказательство третьего пункта:
            </p>
            <div class="container">
                <figure class="picture">
                    <?php
                    $s = date("s");
                    $mod = $s % 2;

                    if ($mod === 0)
                        $name = "images/pes.jpg";
                    else
                        $name = "images/alsopes.jpg";

                    echo '<img src="'.$name.'" alt="Самая милая собачка">';
                    ?>  
                </figure>
            </div>

        </section>
    </main>
    <footer class="footer">
        <p class="container">
            &copy; Авторское право данного сайта закрепляется за Горьковым Владимиром Андреевичем с 10.09.2023
            </br>
            <?php
                date_default_timezone_set('Europe/Moscow');
                $date = date("Y.m.d");
                $time = date("H:i:s");
                echo "Сформировано ".$date." в ".$time."";
            ?>
        </p>
    </footer>
</body>

</html>