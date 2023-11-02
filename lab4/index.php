<title>
    <?php echo "Форма обратной связи"; ?>
</title>

<body>
    <?php
    require "header.php";
    ?>
    <div class="container">
        <section class="request_section">
            <form method="POST" action="home.php">
                <p class="head"></p>
                <p><input type="text" placeholder="ФИО" name="name" <?php if (isset($_GET['N'])) {
                    echo 'value=' . $_GET["N"];
                } ?> required> </p>
                <p><input type="text" placeholder="Email" name="email" <?php if (isset($_GET['E'])) {
                    echo "value=" . $_GET["E"];
                } ?> required></p>
                <p class="head">Откуда Вы узнали нас?</p>
                <p><input type="radio" name="radio" value="internet" <?php if (isset($_GET['S']) and $_GET['S'] == 'internet') {
                    echo 'checked';
                } ?>>Реклама в интернете</p>
                <p><input type="radio" name="radio" value="friend" <?php if (isset($_GET['S']) and $_GET['S'] == 'friend') {
                    echo 'checked';
                } ?>>Совет друга</p>
                <p><input type="radio" name="radio" value="more" <?php if (isset($_GET['S']) and $_GET['S'] == 'more') {
                    echo 'checked';
                } ?>>Другое</p>
                    <select name="type_request" class="text_block">
                        <option disabled selected>Выберите тип обращения</option>
                        <option value="1">Жалоба</option>
                        <option value="2">Предложение</option>
                    </select>
                </p>
                <textarea name="text_area" cols="50" rows="10"></textarea>
                <p><input type="file" name="file"></p>
                <p><input type="checkbox" name="" class="approval">Даю согласие на обработку персональных данных</p>
                <p><input type="submit" name="submit" class="button">
                </p>
            </form>
        </section>
    </div>
    </div>
    <?php
    require "footer.php"; ?>
</body>

</html>