<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Lesson5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        error_reporting(E_ALL);
        $arCountries = ['Україна', 'США', 'Россия', 'Белорусь', 'Польша'];
    ?>
    <form id="feedback" method="post" class="my-form">
        <p>
            <label for="name">Имя</label>
            <input type="text" id="name" name="name" placeholder="Как вас зовут?"
                   value="<?= isset($_REQUEST['name']) ? $_REQUEST['name'] : '';?>">
        </p>
        <p>
            <label for="country">Страна</label>
            <select name="country" id="country">
                <?foreach($arCountries as $key => $country):
                    if($key == $_REQUEST['country']):?>
                    <option selected="selected" value="<?=$key?>"><?=$country?></option>
                    <?else:?>
                    <option value="<?=$key?>"><?=$country?></option>
                    <?endif?>
                <?endforeach?>
            </select>
        </p>
        <p>
            <label for="message">Сообщение</label>
            <textarea placeholder="Текст сообщения?" name="message" id="message" rows="5"><?=isset($_REQUEST['message']) ? $_REQUEST['message'] : ''?></textarea>

        </p>
        <p>
            <input type="submit" value="Отправить" name="submit">
        </p>
    </form>

    <?php
        if (isset($_REQUEST['submit'])) {
            /*echo "<pre>", var_dump($_GET), "</pre>";
            echo "<pre>", var_dump($_POST), "</pre>";*/
            //defined('_JEXEC') or die;
            echo "<pre>", var_dump($_REQUEST), "</pre>";
    ?>
            <div>
                <h3><?=$_REQUEST['name']?>: <i><?=$arCountries[$_REQUEST['country']]?></i></h3>
                <hr>
                <h3><?=$_REQUEST['message']?></h3>
            </div>
    <?php
        }
        $price = 400;
        $percent = 10;
        echo $price += $price * ($percent/100);
    ?>

</body>
</html>