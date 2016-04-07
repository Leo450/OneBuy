<?php
$logged = true;

$pages = [
    'login',
    'good-list',
    'good',
    'my-good-list'
];
$page = $pages[3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OneBuy</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body>

    <div class="l-main">

        <?php include 'templates/layout/header.php'; ?>

        <div class="l-body container">
            <?php include 'pages/' . $page . '.php'; ?>
        </div>

    </div>

</body>
</html>