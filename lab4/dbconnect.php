<title>
    <?php echo "Форма обратной связи ответ"; ?>
</title>


<body>
    <link rel="stylesheet" href="styles/form.css">
    <?php
    require 'header.php'; ?>
    <div class="container">
        <?php
        define('DB_HOST', 'localhost'); //Адрес
        define('DB_USER', 'o916328q_lab'); //Имя пользователя
        define('DB_PASSWORD', 'Root111111'); //Пароль
        define('DB_NAME', 'o916328q_lab'); //Имя БД
        if ($connection->connect_error) { 
            die("Connection failed"); 
        }
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        ?>
        <?php
        include "db.php";
        $result1 = mysqli_query($mysql, "SELECT * FROM `images`");
        $result2 = mysqli_query($mysql, "SELECT * FROM `definitions`")
            ?>
        <div class="box">
            <?php
            while ($name1 = mysqli_fetch_assoc($result1)) {
                ?>
                <div>
                    <img class="image1" title="<?php echo $name1['name']; ?>" src="img/<?php echo $name1['img']; ?>" />
                </div>
                <?php
            }
            ?>
        </div>
        <table>
            <tr>
                <th>Термин</th>
                <th>Определение</th>
            </tr>
            <?php
            while ($name2 = mysqli_fetch_assoc($result2)) {
                ?>
                <tr>
                    <th>
                        <?php echo $name2['word']; ?>
                    </th>
                    <th>
                        <?php echo $name2['desсription']; ?>
                    </th>
                </tr>
                <?php
            }
            ?>
        </table>

    </div>
    <?php
    require 'footer.php'; ?>
</body>