<html>
<head>
    <title>Титл</title>
    <style>
        body{
            background-color: blue;
            color: black;
        }
        fieldset#f1{
            background-color: yellow;
            color: black;
            text-align: center;
            font-size: 30px;
        }
        fieldset#osn{
            background-color: yellow;

        }
        form{
            text-align: center;
        }
        .form1{
            margin-top: 10%;
        }
        input{
            width: 60%;
        }
    </style>
</head>
<body>
    <fieldset id="f1">
        Бюджет
    </fieldset>
    <br>
    <fieldset id="osn">
        <form method="POST">
            Посчитать, сколько останется на еду
            <br>
            <input type="text" name="dohod" placeholder="Введите бюджет">
            <br>
            <input type="text" name="rashod" placeholder="Введите расход">
            <br>
            <input type="submit" value="Посчитать">
        </form>
    </fieldset>
    <fieldset id="osn">
        <form action="domostroi.php">
            Выход
            <br>
            <input type="submit" value="Выйти">
        </form>
    </fieldset>
    <?php
        $dohod = 0;
        $rashod = 0;
        $itog = 0;
        if(isset($_POST['dohod']))
        {
            $dohod = $_POST['dohod'];
        }
        if(isset($_POST['rashod']))
        {
            $rashod = $_POST['rashod'];
        }
        $itog = $dohod - $rashod;
        if($rashod != 0 && $dohod != 0)
        {
            if($itog < 0)
            {
                echo'<script>alert("Поздравляю, ты - Бомж!");</script>';
            }
            if($itog > 0)
            {
                echo"<script>alert('Ваш остаток:  '+'$itog');</script>";
            }
            if($itog == 0)
            {
                echo'<script>alert("Денег нет, но ты держись");</script>';
            }
        }
        else
        {
            echo'<script>alert("Заполни поля расхода и дохода");</script>';
        }
    ?>
</body>
</html>