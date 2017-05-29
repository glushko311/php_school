<h2>Мы Вас не узнали, авторизуйтесь пожалуйста!</h2>
<form method="post" action="index.php">
    <label for="login">Введите логин: </label>
    <input required type="text" name="login" placeholder="Login">
    <label for="pass">Введите пароль: </label>
    <input required type="text" name="pass" placeholder="Password">
    <button type="submit">Войти</button>
</form>
<h3><?php if(!empty($_SESSION['userData']['error'])){echo $_SESSION['userData']['error'];}; ?></h3>
