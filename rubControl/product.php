<body>
    <?php
    require "header.php";
    ?>
    <script src="script/main.js"></script>
    <div class="container">

        <?php
        define('DB_HOST', 'localhost'); //Адрес
        define('DB_USER', 'o916328q_lab'); //Имя пользователя
        define('DB_PASSWORD', 'Vova456'); //Пароль 
        define('DB_NAME', 'o916328q_lab'); //Имя БД
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if ($mysql->connect_error) {
            die("Connection failed");
        }
        ?>
        <?php
        include "db.php";
        ?>
        <p>
            <?php
            $result1 = mysqli_query($mysql, "SELECT * FROM `pc` WHERE `id` like({$_GET['PCName']})");
            while ($name1 = mysqli_fetch_assoc($result1)) {
                ?>

            <div class="fullProduct">
                <div class="picName">
                    <img class="pcImage" title="<?php echo $name1['name']; ?>" src="images/<?php echo $name1['imgName']; ?>">
                    <p class="pcNameFull">
                        <?php echo $name1['name'] ?>
                    </p>
                </div>
                <div class="productText">
                    <p class="pcFullDescription">
                        <?php echo $name1['fullDescription'] ?>
                    </p>
                    <div class="anotherInf">
                        <p class="price">
                            <?php echo $name1['price'] ?>₽
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </p>
    </div>
    <?php
    require "footer.php";
    ?>
</body>

</html>