<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body, html {
        height: 100%;
    }
    .center{
        /*padding-top: 10%;*/
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        flex-direction: column;
        height: 90%;
    }
</style>
<body>
<div class="center">
<?php

foreach ($params as $readyimage){
    echo $readyimage;
}

?>

</div>
</body>
</html>
