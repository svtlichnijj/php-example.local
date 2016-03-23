<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Д/з #4</title>
    <style>
        form p  {
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
    <p>
        <form method="post" name='ex1'>
            <p>Завдання №1</p>
            <p>
                <label for="1">Відстань</label>
                <input type="number" name="l" id="l" min="0.1" step="0.1" required value="<?=isset($_REQUEST['l']) ? $_REQUEST['l'] : ''?>"> км.
            </p>
            <p>
                <label for="1">Час</label>
                <input type="number" name="time" id="time" step="0.1" min="0.1" required value="<?=isset($_REQUEST['time']) ? $_REQUEST['time'] : ''?>"> год.
            </p>
            <!--p>
                <input type="radio" name="type" value="km" checked> км/год.<br>
                <input type="radio" name="type" value="m"> м/с.<br>
            </p-->
            <p>
                <input type="submit" name="submit" value="Швидкість">
            </p>
        </form>
    </p>
    <p>
        <form method="post" name='ex2'>
            <p>Завдання №2</p>
            <p>
                <label for="1">Max</label>
                <input type="number" name="sum" id="sum" min="1" required value="2147">
            </p>
            <p>
                <input type="submit" name="submit" value="Сума трьох">
            </p>
        </form>
    </p>
    <p>
    <form method="post" name='ex3'>
        <p>Завдання №3</p>
        <p>
            <label for="1">Array(0,1,..)</label>
            <input type="number" name="01" id="01" min="1" max="100" required>
        </p>
        <p>
            <input type="submit" name="submit" value="0 чи 1">
        </p>
    </form>
    </p>
    <p>
    <form method="post" name='ex2'>
        <p>Завдання №4</p>
        <p>
            <label for="1">Min</label>
            <input type="number" name="min" id="min" min="1" required>
        </p>
        <p>
            <label for="1">Max</label>
            <input type="number" name="max" id="max" max="999" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Сума">
        </p>
    </form>
    </p>

    <?php
        if(isset($_REQUEST['submit'])) {
            switch ($_REQUEST['submit']) {
                case 'Швидкість':
                     speed($_REQUEST['l'], $_REQUEST['time']);
                    break;
                case 'Сума трьох':
                    plus(htmlspecialchars($_REQUEST["sum"]));
                    break;
                case '0 чи 1':
                    zeroOne($_REQUEST['01']);
                    break;
                case 'Сума':
                    plus($_REQUEST["max"], $_REQUEST["min"], 1);
                    break;
                default:
                    print_r($_REQUEST);
                    break;
            }
        }

        function speed($l, $time) {
            echo '<p><b>Швидкість: ',round($l / $time, 2, PHP_ROUND_HALF_UP),'</b> км/год, <b>',round($l / $time / 3.6, 2, PHP_ROUND_HALF_UP),'</b> м/с</p>';
        }
        function plus($do, $vid = 1, $step = 3) {
            $num = $do;
            if ($num > $vid) {
                $sum = 0;
                echo 'Надіслано: ';
                if($step == 1) {
                    echo 'від: ',$vid,' до: ',$do,'<br>';
                } else {
                    echo $num, '<br>';
                }
                for($i = $vid; $i <= $num; $i += $step) {
                    $sum += $i;
                    if($step == 3 && $sum > $num) {
                        $sum -= $i;
                        break;
                    }
                    echo $i, '+';
                }
                echo '<p><b> = ', $sum, '</b><p><br>';
            } else {
                echo '<b>Суми не існує</b><br>';
            }
        }
        function zeroOne($zo) {
            $arZo = array();
            if ($zo == 1) {
                $arZo[] = 0;
            } else {
                while ($zo > 1) {
                    $arZo[] = 0;
                    $arZo[] = 1;
                    $zo -= 2;
                }
                if ($zo == 1) {
                    $arZo[] = 0;
                }
            }
            echo '<pre>', print_r($arZo, true), '</pre><br>';
        }
    ?>
</body>
</html>
