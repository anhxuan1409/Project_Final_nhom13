<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
    <link rel="shortcut icon" href="documents/unnamed(1).png" type="image/x-icon" />
<<<<<<< HEAD
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
=======
>>>>>>> 76_anhxuan_1951061136
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/login.css">
    <link rel="stylesheet" href="assets/grid.css">
    <title>Foody</title>
</head>

<body>

    <?php
    foreach ($_POST as $variable => $value) {
        $_POST["$variable"] = addslashes(htmlspecialchars($value));
    }
    foreach ($_GET as $variable => $value) {
        $_GET["$variable"] = addslashes(htmlspecialchars($value));
    }
    ?>