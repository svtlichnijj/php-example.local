<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Д/з #4</title>
    <style>
        form p, h2, h3  {
            align-content: center;
            /*margin: 0 auto;*/
            text-align: center;
        }
        textarea {
             resize: none; /* Запрещаем изменять размер */
         }
    </style>
</head>
<body>
    <?php $arCountries = array(
            array('name' => 'Турція', 'percent' => '10'),
            array('name' => 'США' ,   'percent' => '20'),
            array('name' => 'Єгипет', 'percent' => '10'),
            array('name' => "В'єтнам",'percent' => '15'),
            array('name' => 'Малазія','percent' => '25')
        );
    ?>
    <h2>Гарячі тури по 300 за день!!!</h2>
    <h3>Знижки 5% !!!</h3>
    <?php print_r($arCountries);?>
    <?php foreach ($arCountries as $key => $value):?>
        <?= $key;?>
        <?= $value;?>
    <?endforeach?>
    <form method="post" name='tyr'>
        <p>
            <label for="1">Прізвище</label>
            <input type="text" name="second_name" id="1" placeholder="Ваше прізвище" required
                   value="<?=isset($_REQUEST['second_name']) ? $_REQUEST['second_name'] : ''?>">
        </p>
        <p>
            <label for="2">Ім'я</label>
            <input type="text" name="first_name" id="2" placeholder="Ваше ім’я" required
                   value="<?=isset($_REQUEST['first_name']) ? $_REQUEST['first_name'] : ''?>">
        </p>
        <p>
            <label for="3">По-батькові</label>
            <input type="text" name="surname" id="3" placeholder="По-батькові" required
                   value="<?=isset($_REQUEST['surname']) ? $_REQUEST['surname'] : ''?>">
        </p>
        <p>
            <label for="country">Країна</label>
            <select name="country" id="country">
                <?foreach($arCountries as $key => $value):?>
                    <?foreach($value as $country):?>
                        <?if($country == $_REQUEST['country']):?>
                            <option selected="selected" value="<?=$country['percent']?>">
                                <?php print_r($value);?>
                            </option>
                        <?else:?>
                            <option value="<?=$country?>">
                                <?= $country['name'],' - ',$country['percent'],'%'?>
                            </option>
                        <?endif?>
                    <?endforeach?>
                <?endforeach?>
            </select>
        </p>
        <?php $arCountrie = array('name' => 'Турція', 'percent' => 10);?>
        <?foreach($arCountrie as $key => $conddy):?>
            <?foreach($conddy as $key1 => $conddyy):?>
            <!--?if ($conddy['percent'] >= 15):?-->
                <?= "Key", $ke1y['name']," <br>";?>
                <?= $conddyy['name'];?>
            <!--?endif?-->
            <?endforeach?>
        <?endforeach?>

        <p>
            <label for="sale">Знижка</label>
            <input type="checkbox" name="sale" id="sale">
        </p>
        <p>
            <label for="count">Кількість днів перебування в країна</label>
            <input type="number" name="days" id="count" min="5" max="90" required value="<?=isset($_REQUEST['days']) ? $_REQUEST['days'] : ''?>">
        </p>
        <p>
            <label for="comment">Коментар</label>
            <textarea placeholder="Коментар" name="comment" id="comment" rows="5"><?=isset($_REQUEST['comment']) ? $_REQUEST['comment'] : ''?></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="Підтвердити">
        </p>

    </form>

    <?php
        //$arCountries = ['Турція' => 10, 'США' => 20, 'Єгипет' => 10, "В'єтнам" => 15, 'Малазія' => 25];
        if (isset($_REQUEST['submit'])) {
            $price = 300;
            $percent = $arCountries[$_REQUEST['country']];
            $res = ($price + ($price * $percent / 100) ) * $_REQUEST['days'];

            echo 'Шановний (а) ',$_REQUEST["second_name"],' ',$_REQUEST["first_name"],' ',$_REQUEST["surname"],', ви вибрали країну ',$_REQUEST['country'],'.<br>
            Кількість днів: ',$_REQUEST["days"],'<br>
            Вартість: ',$res;
        }
    ?>

</body>
</html>