

<?php 
if(isset($_COOKIE["user"])){
    header("Location: myHoroscope.php");
    die();
}



include("./head.php");?>


<body>
    <form method="post" action="./myHoroscope.php">

        <label>Namnet:</label>
        <input type="text" name="firstname">
        <br>
        <label>Efternamnet:</label>
        <input type="text" name="lastname">
        <label>Personnummeret: </label>
        <input type="number" name="personnummer">
        <input type="submit" value="Submit" name="submitForm">


    </form> 
</body>
</html>






