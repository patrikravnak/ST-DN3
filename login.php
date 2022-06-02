<?php
    include_once './header.php';
?>

<h1 style="margin: 2% 0 0 20%;">Prijava</h1>
<hr>

<form id="login" action="login_check.php" method="post">
    <label>E-pošta</label>
    <input type="email" name="mail" required="required" />
    <label>Geslo</label>
    <input type="password" name="pass" required="required" />
    <br />
    <input type="submit" value="Prijavi" />
</form>


<?php
    include_once './footer.php';
?>