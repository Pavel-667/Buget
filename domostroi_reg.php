<html>
<head>
    <title>Титл</title>
    <style>
        body{
            background-color: #4169E1;
            color: white;
        }
        form{
            text-align: center;
        }
        .form1{
            margin-top: 10%;
        }
        input{
            width: 500px;
        }
    </style>
</head>
<body>
    <form method="POST" class="form1">
        <input type="text" placeholder="Фамилия" name="sur">
        <br>
        <input type="text" placeholder="Имя" name ="nam">
        <br>
        <input type="text" placeholder="Отчество" name="patr">
        <br>
        <input type="text" placeholder="Дата рождения" name="dat">
        <br>
        <input type="text" placeholder="Токен семьи">
        <br>
        <input type="text" placeholder="Логин" name="login">
        <br>
        <input type="text" placeholder="Пароль" name="pass">
        <br>
        <input type="text" placeholder="Потвердите пароль" name="confirm_pass">
        <br>
        Я соглашаюсь с <a>пользовательским соглашением</a> <input type="checkbox" name="agreeement">
        <br>
        <input type="submit" value="Отправить">
    </form>
    <?php
        $log = "";
        $nf = "";
        $p = "";
        $pc = "";
        $agr = "";
        $sur = "";
        $nam = "";
        $patr = "";
        $dat = "";

        if(isset($_POST['sur']))
        {
            $sur = $_POST['sur'];
        }
        if($sur =="")
        {
            echo'<script>alert("Введите фамилию");</script>';
            return;
        }
        if(isset($_POST['nam']))
        {
            $nam = $_POST['nam'];
        }
        if($nam =="")
        {
            echo'<script>alert("Введите имя");</script>';
            return;
        }
        if(isset($_POST['patr']))
        {
            $patr = $_POST['patr'];
        }
        if($patr =="")
        {
            echo'<script>alert("Введите отчество");</script>';
            return;
        }
        if(isset($_POST['dat']))
        {
            $dat = $_POST['dat'];
        }
        if($dat =="")
        {
            echo'<script>alert("введите дату рождения");</script>';
            return;
        }
        if(isset($_POST['new_family']))
        {
            $nf = $_POST['new_family'];
        }
        if(isset($_POST['login']))
        {
            $log = $_POST['login'];
        }
        if($log == "")
        {
            echo'<script>alert("Введите логин");</script>';
            return;
        }
        if(!isset($_POST['pass']))
        {
            echo'<script>alert("Повторите пароль");</script>';
            return;
        }
        if(isset($_POST['pass']))
        {
            $p = $_POST['pass'];
        }
        if(isset($_POST['confirm_pass']))
        {
            $pc = $_POST['confirm_pass'];
        }
        if( $p!= $pc){
            echo'<script>alert("Пароли не совпадают");</script>';
            return;
        }
        if(isset($_POST['agreeement']))
        {
            $agr = $_POST['agreeement'];
        }
        if($agr =="")
        {
            echo'<script>alert("Прочитайте наше пользовательское, или просто поставьте наконец эту галочку");</script>';
            return;
        }
        echo'<script>alert("Поздравляю, вы зарегистрированы");</script>';
        header("Location: domostroi_main.php");
    ?>
</body>
</html>