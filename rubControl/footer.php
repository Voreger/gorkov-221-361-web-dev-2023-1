<footer class="footer">
    <p class="container">
        Наш адрес: г. Москва, ул. Потешная, д.3
        <br>
        &copy; Авторское право данного сайта закрепляется с 10.09.2023
        </br>
        <?php
        date_default_timezone_set('Europe/Moscow');
        $date = date("Y.m.d");
        $time = date("H:i:s");
        echo "Сформировано " . $date . " в " . $time . "";
        ?>
        <div class="mail">
            <a class="bton" href="mailto:gorkov2004777@gmail.com">Написать нам</a>
        </div>
    </p>
</footer>