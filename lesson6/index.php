<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


    <?php
        $arCountries = ['Турція' => 10, 'США' => 20, 'Єгипет' => 10, "В'єтнам" => 15, 'Малазія' => 25];
    ?>
    <form method="post" name='tyr'>
        <p>
            <label for="1">Прізвище</label>
            <input type="text" name="second_name" id="1">
        </p>
        <p>
            <label for="2">Ім'я</label>
            <input type="text" name="first_name" id="2">
        </p>
        <p>
            <label for="3">По-батькові</label>
            <input type="text" name="surname" id="3">
        </p>
        <p>
            <label for="country">Країна</label>
            <select name="country" id="country">
                <?foreach($arCountries as $country => $key):?>
                    <?if($country == $_REQUEST['country']):?>
                        <option selected="selected" value="<?=$key?>"><?=$country?></option>
                    <?else:?>
                        <option value="<?=$key?>"><?=$country?></option>
                    <?endif?>
                <?endforeach?>
            </select>
        </p>
        <p>
            <label for="sale">Знижка</label>
            <input type="checkbox" name="sale" id="sale">
        </p>
        <p>
            <label for="count">Кількість днів перебування в країна</label>
            <input type="number" name="days" id="count" min="5" max="90">
        </p>
        <p>
            <label for="comment">Коментарій</label>
            <textarea placeholder="Текст сообщения?" name="comment" id="comment" rows="5"><?=isset($_REQUEST['comment']) ? $_REQUEST['comment'] : ''?></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Підтвердити">
        </p>

    </form>

    <?php
        $arCountries = ['Турція' => 10, 'США' => 20, 'Єгипет' => 10, "В'єтнам" => 15, 'Малазія' => 25];
        $price = 300;
        $percent = $_REQUEST[''];
        $rez = 300;
            
        if (exist($_REQUEST['submit'])) {
            echo 'Шановний (а) ',$_REQUEST["second_name"],' ',$_REQUEST["first_name"],' ',$_REQUEST["surname"],', ви вибрали країну ',$country,'.<br>
            Кількість днів: ',$_REQUEST["days"],'<br>
            Вартість: ',$res;
        }
    ?>

</body>
</html>
