<main>
    <form>
        <?php 
        echo '<label class="label_box title"> Здравствуйте,'.$_POST['name'].'</label>'; //выводим ФИО
        if ($_POST['category'] == 'propose'){ //проверяем тип обращения
             echo '<label class="label_box">Спасибо за ваше предложение:</label>';
            echo '<textarea>'.$_POST['message'].'</textarea>';//вывод текста сообщения
        }else{
            echo '<label class="label_box">Мы рассмотрим Вашу жалобу:</label>';
            echo '<textarea>'.$_POST['message'].'</textarea>';
        }
        if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo '<label class="label_box">Вы приложили следующий файл: '.$_POST['attachment'].'</label>';
        echo '<a class="btn" href="index.php?N='.$_POST['name'].'&E='.$_POST['email'].'&S='.$_POST['source'].'">Заполнить снова</a>';
        ?>
    </form>
</main>

