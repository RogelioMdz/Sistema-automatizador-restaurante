<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- La constante URL viene desde el archivo config/congfig.php -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Css -->
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/style.css">
    <title>Error 404</title>
</head>

<body class="bodynotfound">
    <!-- <marquee behavior="" direction="right">Lo sentimos</marquee> -->
    <h1 class="notfoundtitulo"><?php echo $this->mensaje; ?></h1>
    <h4 class="notfoundlink">El link al que entraste esta roto o ya no existe</h4>
    <div class="notfounddiv">
        <button class="notfoundboton"><a class="notfoundenlace" href="<?php echo constant('URL'); ?>main">click aqui para inicio</a></button>
    </div>
</body>

</html>