<?php

$dados = [
    'id' => 1,
    'name' => 'Layla Adryellen',
    'email' => 'laylinha@gmail.com'
];

$filme = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=d46da1a726f705f167863310574b2486');

$filme_json = json_decode($filme);


/* echo '<pre>';
var_dump($filme_json->results[0]);
echo '</pre>'; */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <input type="text" name="searce" id="searce">

    <div id="resposta"></div>

   



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>