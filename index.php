<?php

session_start();

if(isset($_SESSION["lastdate"])) {
    $lastDate = new DateTime($_SESSION["lastdate"]);
    $nowDate = new DateTime((date("Y-m-d H:i:s")));

    if($nowDate->diff($lastDate)->format("%d") >= 1) {
        $_SESSION["lastdate"] = date("Y-m-d H:i:s");

        $log = fopen("log.txt", "a");
        fwrite($log, date("Y-m-d H:i:s") ." | ".$_SERVER['REMOTE_ADDR'] . " | Got on the website.\n");
        fclose($log);
    }
}
else {
    $_SESSION["lastdate"] = date("Y-m-d H:i:s");

    $log = fopen("log.txt", "a");
    fwrite($log, date("Y-m-d H:i:s") ." | ".$_SERVER['REMOTE_ADDR'] . " | Got on the website.\n");
    fclose($log);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pinterest Tonda</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-16">
</head>

<body>
<small style="display: flex; justify-content: center">Pro jakýkoliv feedback napište prosím na můj e-mail: <a href="mailto:bales@spsejecna.cz">bales@spsejecna.cz</a></small>

<div id="flexPinterest">
    <div class="imgContainer">
        <img src="img/1.jpeg">
        <p>POLOOBLIČEJE</p>
    </div>
    <div class="imgContainer">
        <img src="img/2.jpeg">
        <p>DŘEVO</p>
    </div>
    <div class="imgContainer">
        <img src="img/3.jpeg">
        <p>DVA KOŇOVÉ</p>
    </div>
    <div class="imgContainer">
        <img src="img/4.jpeg">
        <p>DEJ MI PÁREK</p>
    </div>
    <div class="imgContainer">
        <img src="img/5.jpeg">
        <p>DÁM TI PÁREK</p>
    </div>
    <div class="imgContainer">
        <img src="img/6.jpeg">
        <p>ZDEŇKY CESTIČKA</p>
    </div>
    <div class="imgContainer">
        <img src="img/7.jpeg">
        <p>KŮŇ</p>
    </div>
    <div class="imgContainer">
        <img src="img/8.jpeg">
        <p>HOSPŮDKA</p>
    </div>
    <div class="imgContainer">
        <img src="img/9.jpeg">
        <p>MEGA TRIO</p>
    </div>
    <div class="imgContainer">
        <img src="img/10.jpeg">
        <p>MEGA KLÁDA</p>
    </div>
    <div class="imgContainer">
        <img src="img/11.jpeg">
        <p>ZÁPAD SLUNCE</p>
    </div>
    <div class="imgContainer">
        <img src="img/12.jpeg">
        <p>MÍSTNÍ SMOLÍČEK PACHOLÍČEK</p>
    </div>
    <div class="imgContainer">
        <img src="img/13.jpeg">
        <p>SNÍLEK GANEČEK</p>
    </div>
    <div class="imgContainer">
        <img src="img/14.jpeg">
        <p>RANNÍ MLHA</p>
    </div>
    <div class="imgContainer">
        <img src="img/15.jpeg">
        <p>SMOLÍČEK PŘEMÝŠLÍ KDE SEHNAT PÁREK</p>
    </div>
    <div class="imgContainer">
        <img src="img/16.jpeg">
        <p>NAŠE CESTIČKA</p>
    </div>
    <div class="imgContainer">
        <img src="img/17.jpeg">
        <p>KŮŇ A BABIČČINA BÁBOVKA</p>
    </div>
    <div class="imgContainer">
        <img src="img/18.jpeg">
        <p>DŘEVORUBEC GANEČEK</p>
    </div>
    <div class="imgContainer">
        <img src="img/19.jpeg">
        <p>KŮŇ VEDLE NEJKRÁSNĚJŠÍ A NEJÚŽASNĚJŠÍ PRINCEZNY</p>
    </div>
    <div class="imgContainer">
        <img src="img/20.jpeg">
        <p>KAPLIČKA (alias limit schovky)</p>
    </div>

</div>
</body>
</html>
