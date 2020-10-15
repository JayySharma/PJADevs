<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Thank you for the feeback</h3>

    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];

    $jrate = $_POST["jrate"];
    $arate = $_POST["arate"];
    $prate = $_POST["prate"];
    $drate = $_POST["drate"];

    echo "Full Name =". $name."<br>";
    echo "Email ID =". $email."<br>";

    $connection = new mysqli('localhost', 'id15124314_devanshisingh', 'Qwerty!23456', 'id15124314_mall');
    if($connection -> connect_error)
    {
         die("Connection Failed".$connection -> connect_error);
    }
    else
    {
        $stmt = $connection -> prepare ("insert into feedback(name, email, jrate, arate, prate, drate) values(?,?,?,?,?,?)");
        $stmt -> bind_param("ssiiii", $name, $email, $jrate, $arate, $prate, $drate);
        $stmt -> execute();
        echo "Data has been added to the Database";
        $stmt -> close();
        $connection -> close();
    }

     ?>
  </body>
</html>
