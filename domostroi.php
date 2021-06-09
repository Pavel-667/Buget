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
        <input type="text" name="login" placeholder="Логин">
        <br>
        <input type="password" name="password" placeholder="Палоль">
        <br>
        <input type="submit" value="Войти">
    </form>
    <p style="text-align: center;">Ещё нет аккаунта? Зарегистирируйтесь, нажав кноку ниже</p>
    <br>
    <form action="domostroi_reg.php">
        <input type="submit" value="Зарегистрироваться">
    </form>
    <?php
        $login = "";
        $password = "";

        if(isset($_POST['login']))
        {
            $login = $_POST['login'];
        }
        if(isset($_POST['password']))
        {
            $password = $_POST['password'];
        }
        if($login == "admin" && $password == "admin")
        {
            header("Location: domostroi_main.php");
        }
        else
        {
            echo('<script>alert("Проверьте правильность ввода")</script>');
        }
    ?>
</body>
</html>