<html>
    <body>
        <form method="post">
            Num: <input type="number" name="number"/>
            <input type="submit" value="enter"/>
        </form>
    </body>
</html>
 <?php

 if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $num= $_POST["number"];

    $factorial = 1;

    for ($i = 1; $i <= $num ; $i++){
        $factorial *= $i;
    }
    echo "$factorial";
 }
 ?>