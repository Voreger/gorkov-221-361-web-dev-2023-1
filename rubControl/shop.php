<body>
    <?php
    require "header.php";
    ?>
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
        $result1 = mysqli_query($mysql, "SELECT * FROM `pc`");
        ?>
        <div class="box">
            <?php
            while ($name1 = mysqli_fetch_assoc($result1)) {
                ?>
                <div class="product">
                    <img class="pcImage" title="<?php echo $name1['name']; ?>"
                        src="images/<?php echo $name1['imgName']; ?>">
                    <div class="productText">
                        <p class="pcName">
                            <?php echo $name1['name'] ?>
                        </p>
                        <p class="pcDescription">
                            <?php echo $name1['description'] ?>
                        </p>
                        <div class="anotherInf">
                            <p class="price">
                                <?php echo $name1['price'] ?>₽
                            </p>
                            <a href="product.php?PCName=<?php echo $name1['id']?>" class="buttonPc">Подробнее</a>
                            <a href="cart.php?PCName=<?php echo $name1['id']?>" class="buttonPc">Купить</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
    </div>
    <?php
    require "footer.php";
    ?>
</body>

</html>