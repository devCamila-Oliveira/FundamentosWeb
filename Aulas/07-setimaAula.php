<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07</title>
</head>

<body>
    <h1>
        <?php echo "Utilizando Banco de Dados"; ?>
    </h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "phpTest";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "select * from estado";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        while($row = msqli_fetch_assoc($result)){
            echo "id: " . $row["idEstado"] . " - Name" . $row["nomeEstado"] . "<br>";
        }
    }else{
        echo "0 result";
    }
    echo "Connected successfully";
    ?>

</body>

</html>