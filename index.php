<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="externalCSS.css">
    <script type="module" src="externalJS.js" async></script>
    <title>Zodiac</title>
</head>
<html>
<?php

include 'db_connection.php';
$nameErr = $addressErr = $birthdayErr = $zodiacErr = "";
$name = $address = $birthday = $zodiac = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "I need your name.";
    }
    if (empty($_POST["address"])) {
        $addressErr = "I wanna know where you live /s.";
    }
    if (empty($_POST["birthday"])) {
        $birthdayErr = "Lemme greet you a happy birthday.";
    }
    if (empty($_POST["zodiac"])) {
        $zodiacErr = "Show your vibes.";
    }
}

?>

<body>
    <section>
        <div class="background-img background-img-1 background-img-2">
            <div class="box box-1 box-2">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <div class="content">
                    <form action="action.php" method="post" class="info info-2">
                        Full name<br><input type="text" name="name" class="txt txt-1" required><?php echo $nameErr; ?><br>
                        Address<br><input type="text" name="address" class="txt txt-1" required><?php echo $addressErr; ?><br>
                        Birthday<br> <input type="date" name="birthday" class="txt txt-1" required><?php echo $birthdayErr; ?><br>
                        Zodiac Sign<br><input type="text" name="zodiac" class="txt txt-1" value="case sensitive :)" required><?php echo $zodiacErr; ?><br>
                        <div>
                            <input type="submit" class="btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<!--After reaching the pitstop for Mile 9 your task is to design a simple for letting the user input information (full name, birthday, address) 
Output 
Fullname:
Address: 
Zodiac Sign: (use control structure Switch Statement for the condition) 
Sample Output 
Hi: Raden Alvarez
Your Address is: makati city 
Zodiac Sign (Aries) 
*Things to consider 
Use Control Structure condition (Switch statement)
PHP 
Form 
*External CSS
*JavaScript
-->