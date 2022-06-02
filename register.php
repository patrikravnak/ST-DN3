<?php
    include_once './header.php';
?>
<h1 style="margin: 2% 0 0 20%;">Registracija</h1>
<hr>

<form id="register" action="new_user.php" method="post">
    <label>Ime</label>
    <input type="text" name="first_name" placeholder="Vnesi ime" required="required" />
    <label>Priimek</label>
    <input type="text" name="last_name" placeholder="Vnesi priimek" required="required" />
    <label>E-pošta</label>
    <input type="email" name="mail" placeholder="Vnesi e-pošto" required="required" />
    <label>Geslo</label>
    <input type="password" name="pass1" placeholder="Vnesi geslo" required="required" />
    <label>Ponovi geslo</label>
    <input type="password" name="pass2" placeholder="Ponovite geslo" required="required" />
    <br />
    <input type="submit" value="Registriraj" />
</form>



<?php
    include_once './footer.php';
?>