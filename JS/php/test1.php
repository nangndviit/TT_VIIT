<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tập làm PHP</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href>
</head>

<body>
    <h1>My first PHP page</h1>

    <?php


    //hiển thị các dữ liệu có trong bảng
    // echo "<table style='border: solid 1px black;'>";
    // echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

    // class TableRows extends RecursiveIteratorIterator
    // {
    //     function __construct($it)
    //     {
    //         parent::__construct($it, self::LEAVES_ONLY);
    //     }

    //     function current()
    //     {
    //         return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    //     }

    //     function beginChildren()
    //     {
    //         echo "<tr>";
    //     }

    //     function endChildren()
    //     {
    //         echo "</tr>" . "\n";
    //     }
    // }

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "myDBPDO";

    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    //     $stmt->execute();

    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
    //         echo $v;
    //     }
    // } catch (PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // $conn = null;
    // echo "</table>";



    // xóa dữ liệu 
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "myDBPDO";

    //     try {
    //         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //         // set the PDO error mode to exception
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //         // sql to delete a record
    //         $sql = "DELETE FROM MyGuests WHERE id=3";

    //         // use exec() because no results are returned
    //         $conn->exec($sql);
    //         echo "Record deleted successfully";
    //     } catch (PDOException $e) {
    //         echo $sql . "<br>" . $e->getMessage();
    //     }

    //     $conn = null;





    // them dữ liệu
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "myDBPDO";

    //     // Create connection
    //     $conn = mysqli_connect($servername, $username, $password, $dbname);
    //     // Check connection
    //     if (!$conn) {
    //         die("Connection failed: " . mysqli_connect_error());
    //     }

    //     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com');";
    //     $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Mary', 'Moe', 'mary@example.com');";
    //     $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Julie', 'Dooley', 'julie@example.com')";

    //     if (mysqli_multi_query($conn, $sql)) {
    //         echo "New records created successfully";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }

    //     mysqli_close($conn);


    // cập nhật csdl
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "myDBPDO";

    //     try {
    //         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //         // set the PDO error mode to exception
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //   VALUES ('Cong', 'Nang', 'john@example.com')";
    //         // use exec() because no results are returned
    //         $conn->exec($sql);
    //         echo "New record created successfully";
    //     } catch (PDOException $e) {
    //         echo $sql . "<br>" . $e->getMessage();
    //     }

    //     $conn = null;



    // tạo bảng trong csdl
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $dbname = "myDBPDO";

    //     try {
    //         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //         // set the PDO error mode to exception
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //         // sql to create table
    //         $sql = "CREATE TABLE MyGuests (
    //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //   firstname VARCHAR(30) NOT NULL,
    //   lastname VARCHAR(30) NOT NULL,
    //   email VARCHAR(50),
    //   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //   )";

    //         // use exec() because no results are returned
    //         $conn->exec($sql);
    //         echo "Table MyGuests created successfully";
    //     } catch (PDOException $e) {
    //         echo $sql . "<br>" . $e->getMessage();
    //     }

    //     $conn = null;



    // tạo dattabase
    // $servername = "localhost";
    // $username = "root";
    // $password = "";

    // try {
    //     $conn = new PDO("mysql:host=$servername", $username, $password);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "CREATE DATABASE myDBPDO";
    //     // use exec() because no results are returned
    //     $conn->exec($sql);
    //     echo "Database created successfully<br>";
    // } catch (PDOException $e) {
    //     echo $sql . "<br>" . $e->getMessage();
    // }

    // $conn = null;
    ?>
</body>

</html>