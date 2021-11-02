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
    $name = $_POST['name'];
    $age = (int) $_POST['age'];
    $education = $_POST['education'];
    $experience = $_POST['experience'];
    $message = $_POST['message'];
    function clean($value = '')
    {
        // начинаем стерилизация данных
        $value = trim($value);
        $value = stripslashes($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value);

        return $value;
    }
    $name = clean($name);
    $age = clean($age);
    $education = clean($education);
    $experience = clean($experience);
    $message = clean($message);
    function check_length($value = '', $min, $max)
    {
        $result = mb_strlen($value) < $min || mb_strlen($value) > $max;
        return !$result;
    }
    if (
        !empty($name) &&
        !empty($age) &&
        !empty($education) &&
        !empty($experience) &&
        !empty($message)
    ) {
        if (
            check_length($name, 2, 25) &&
            check_length($age, 1, 3) &&
            check_length($education, 2, 50) &&
            check_length($experience, 2, 20) &&
            check_length($message, 2, 1000)
        ) {
            if (!empty($_FILES['file']['tmp_name'])) {
                $tmp = $_FILES['file']['tmp_name'];
                $nameimg = $_FILES['file']['name'];
                $path = './img/' . $nameimg;
                move_uploaded_file($tmp, $path);
                echo "<img src='$path' alt='$path' /><br>";
            } ?>
    Hello, <?php echo $name; ?>.<br>
    You <?php echo $age; ?> years.<br>
    Your education: <?php echo $education; ?><br>
    Your work experience: <?php echo $experience; ?><br>
    about you: <?php echo $message;
        } else {
            // добавили сообщение
            echo 'Введенные данные некорректны';
        }
    } else {
        // добавили сообщение
        echo 'Заполните пустые поля';
    }
    ?>
</body>

</html>