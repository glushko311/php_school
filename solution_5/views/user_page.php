<h2>А на этот раз мы Вас узнали =)</h2>
<h1>Добро пожаловать <?php if(isset($_SESSION['userData']['login'])){echo $_SESSION['userData']['login'];}; ?></h1>
<form action = "./index.php" method="POST">
    <input name = "sign_out"  type="hidden" value="sign_out"/>
    <button type="submit">РАЗЛОГИНИТСЯ</button>
</form>