<html>
<body>
    <img src="/csc540/images/logged_in.svg" width="50px;"></img>
     <br>
     <br>

     <div class="menu">
<?php include 'menu.php';?>
    </div>

<?php
    indlude 'menu.php';
session_start();

echo "Welcome, ".$_SESSION["username"];
echo "<br><a href=\"../forms/form_handling.php\">Proceed</a>";
echo "<br><a href=\"login.php\">Log out</a>";

?>

</body>
</html>
