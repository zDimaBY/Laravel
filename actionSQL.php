<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    $linkHost = mysqli_connect(
        '212.22.87.54',
        'u208754_admin',
        '!@#123Qwe',
        'u208754_shop'
    );
    $linkLocal = mysqli_connect(
        'localhost',
        'admin',
        '123Qweasd',
        'BDlocalhost'
    );
    if ($linkHost == false) {
        echo 'Не удалось подключится к Host базе данных<br>';
        echo mysqli_connect_error();
        exit();
    }
    if ($linkLocal == false) {
        echo 'Не удалось подключится к Local базе данных<br>';
        echo mysqli_connect_error();
        exit();
    }
    $sql = mysqli_query(
        $linkLocal,
        "INSERT INTO `full_name` (`name`, `age`) VALUES ('{$_POST['name']}', '{$_POST['age']}')"
    );
    $sql = mysqli_query(
        $linkLocal,
        "INSERT INTO `user_info` (`education`, `experience`, `text`) VALUES ('{$_POST['education']}', '{$_POST['experience']}', '{$_POST['message']}')"
    );
    if (!$sql) {
        echo 'fatall $sql';
    }
    $sql =
        'SELECT table_name, table_rows FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = \'BDlocalhost\'';
    if ($result = $linkLocal->query($sql)) {
        //$rowsCount = $result->num_rows; // количество полученных строк
        echo '<p>List of tables in BD</p>';
        echo '<table><tr><th>TABLE_NAME</th><th>TABLE_ROWS</th>';
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['TABLE_NAME'] . '</td>';
            echo '<td>' . $row['TABLE_ROWS'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $result->free(); //release memore
    }
    $conn = new mysqli('localhost', 'admin', '123Qweasd', 'BDlocalhost');
    $sql = 'SELECT * FROM full_name';
    if ($result = $conn->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        echo "<p>Получено объектов: $rowsCount в таблице full_name</p>";
        $stack = [];
        foreach ($result as $row) {
            array_push($stack, $row['id'], $row['name'], $row['surname']);
            echo $username . $userage;
        }
        echo "array is: '" . implode("','", $stack) . "'<br>";
    }
    $sql = 'SELECT * FROM user_info';
    if ($result = $conn->query($sql)) {
        $rowsCount = $result->num_rows; // количество полученных строк
        echo "<p>Получено объектов: $rowsCount в таблице user_info</p>";
        echo '<table><tr><th>Id</th><th>name</th><th>surname</th></tr>';
        foreach ($result as $row) {
            echo '<tr>';
            echo '<td>' . $row['education'] . '</td>';
            echo '<td>' . $row['experience'] . '</td>';
            echo '<td>' . $row['text'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        $result->free(); //release memore
    }

    mysqli_close($linkHost);
    ?>
</body>

</html>