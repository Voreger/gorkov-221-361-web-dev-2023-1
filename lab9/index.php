<!DOCTYPE html>
<html lang="ru">

<head class="head">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <title>Главная страница</title>
</head>

<body class="body">
    <header class="header">
        <img src="images/polyteh.jpg" alt="Логотип политеха" class="picture">
        <div class="mail">
            <h1>Горьков Владимир Андреевич 221-361 - Лабораторная работа №9 Вариант 6</h1>
            <a class="btn" href="mailto:gorkov2004777@gmail.com">Написать мне</a>
        </div>
    </header>
    <main>
        <div class="content">
            <table>
                <tr>
                    <th>
                        <?php
                        $min_value = -10;
                        $max_value = 322;

                        $max = -1000000;
                        $min = 10000000;
                        $sum = 0;
                        $count = 0;
                        $sr = 0;

                        $x = -10;
                        $encounting = 100;
                        $step = 2;
                        $type = 'D';

                        if ($type == 'B') {
                            echo '<ul>';
                        } else if ($type == 'C') {
                            echo '<ol>';
                        } else if ($type == 'D') {
                            echo '<table class="valueTable">';
                        }


                        for ($i = 0; $i < $encounting; $i++, $x += $step) {
                            if ($x <= 10) {
                                $f = $x * $x * 0.33 + 4;
                            } else {
                                if ($x < 20) {
                                    $f = 18 * $x - 3;
                                } else {
                                    if ($x == 20) {
                                        $f = 'error';
                                    } else {
                                        $f = 1 / ($x * 0.1 - 2);
                                    }
                                }
                            }
                            if($f != "error"){
                                $result = round($f,3);
                            } else{
                                $result = $f;
                            }

                            if($result<$min && $result != "error"){
                                $min = $result;
                            }

                            if($result>$max && $result != "error"){
                                $max = $result;
                            }

                            if($result != "error"){
                                $sum += $result;
                                $count ++;
                            }
                            

                            if ($type == 'A') {
                                echo 'f(' . $x . ')=' . $result;
                                if ($i < $encounting - 1) {
                                    echo '<br>';
                                }
                            } else if ($type == 'B') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type == 'C') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type == 'D') {
                                echo '<tr><th class="valueColumn">' . $i + 1 . '</th><th class="valueColumn">' . $x . '</th><th class="valueColumn">' . $result . '</th></tr>';
                            }
                            if (($f >= $max_value || $f < $min_value) && $f != "error") {
                                break;
                            }
                        }

                        $sr = round(($sum/$count),3);

                        if ($type == 'B') {
                            echo '</ul>';
                        } else if ($type == 'C') {
                            echo '</ol>';
                        } else if ($type == 'D') {
                            echo '</table>';
                        }
                        ?>
                    </th>
                    <th>
                        <?php
                        $min_value = -10;
                        $max_value = 320;

                        $x = -10;
                        $encounting = 100;
                        $step = 2;
                        $type1 = 'B';

                        $i = 0;
                        if ($type1 == 'B') {
                            echo '<ul>';
                        } else if ($type1 == 'C') {
                            echo '<ol>';
                        } else if ($type1 == 'D') {
                            echo '<table class="valueTable">';
                        }

                        do {
                            if ($x <= 10) {
                                $f = $x * $x * 0.33 + 4;
                            } else {
                                if ($x < 20) {
                                    $f = 18 * $x - 3;
                                } else {
                                    if ($x == 20) {
                                        $f = 'error';
                                    } else {
                                        $f = 1 / ($x * 0.1 - 2);
                                    }
                                }
                            }

                            if($f != "error"){
                                $result = round($f,3);
                            } else{
                                $result = $f;
                            }

                            if ($type1 == 'A') {
                                echo 'f(' . $x . ')=' . $result;
                                if ($i < $encounting - 1) {
                                    echo '<br>';
                                }
                            } else if ($type1 == 'B') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type1 == 'C') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type1 == 'D') {
                                echo '<tr><th class="valueColumn">' . $i + 1 . '</th><th class="valueColumn">' . $x . '</th><th class="valueColumn">' . $result . '</th></tr>';
                            }

                            $i++;
                            $x += $step;
                        }
                        while ($i < $encounting && (($f < $max_value && $f > $min_value) || $f == "error"));

                        if ($type1 == 'B') {
                            echo '</ul>';
                        } else if ($type1 == 'C') {
                            echo '</ol>';
                        } else if ($type1 == 'D') {
                            echo '</table>';
                        }
                        ?>

                    </th>
                    <th class="flexCont">
                        <?php
                        $min_value = 5;
                        $max_value = 322;

                        $x = -10;
                        $encounting = 100;
                        $step = 2;
                        $type2 = 'C';

                        $i = 0;
                        $f = 0;

                        if ($type2 == 'B') {
                            echo '<ul>';
                        } else if ($type2 == 'C') {
                            echo '<ol>';
                        } else if ($type2 == 'D') {
                            echo '<table class="valueTable">';
                        }

                        while ($i < $encounting) {

                            if ($x <= 10) {
                                $f = $x * $x * 0.33 + 4;
                            } else {
                                if ($x < 20) {
                                    $f = 18 * $x - 3;
                                } else {
                                    if ($x == 20) {
                                        $f = 'error';
                                    } else {
                                        $f = 1 / ($x * 0.1 - 2);
                                    }
                                }
                            }

                            if($f != "error"){
                                $result = round($f,3);
                            } else{
                                $result = $f;
                            }

                            if ($type2 == 'A') {
                                echo 'f(' . $x . ')=' . $result;
                                if ($i < $encounting - 1) {
                                    echo '<br>';
                                }
                            } else if ($type2 == 'B') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type2 == 'C') {
                                echo '<li>f(' . $x . ')=' . $result . '</li>';
                            } else if ($type2 == 'D') {
                                echo '<tr><th class="valueColumn">' . $i + 1 . '</th><th class="valueColumn">' . $x . '</th><th class="valueColumn">' . $result . '</th></tr>';
                            } else if ($type2 == 'E') {
                                echo '<div class="result">f(' . $x . ')=' . $result . '</div>';
                            }

                            if (($f >= $max_value || $f < $min_value) && $f != "error") {
                                break;
                            }
                            // (($f < $max_value && $f > $min_value) || $f == "error")
                            $i++;
                            $x += $step;
                        }
                        if ($type2 == 'B') {
                            echo '</ul>';
                        } else if ($type2 == 'C') {
                            echo '</ol>';
                        } else if ($type2 == 'D') {
                            echo '</table>';
                        }
                        ?>

                    </th>
                </tr>

            </table>
            <h3><?php echo "Минимальное: " . $min . ""?></h3>
            <h3><?php echo "Максимальное: " . $max . ""?></h3>
            <h3><?php echo "Среднее: " . $sr . ""?></h3>
        </div>
    </main>
    <footer class="footer">
        <p class="container">
            &copy; Авторское право данного сайта закрепляется за Горьковым Владимиром Андреевичем с 10.09.2023
        </p>
        <br>
        <?php
        echo '<p class="container"> Верстка1: ' . $type . ' </p>';
        echo '<p class="container"> Верстка2: ' . $type1 . ' </p>';
        echo '<p class="container"> Верстка3: ' . $type2 . ' </p>'
            ?>
    </footer>
</body>

</html>