<?php

$filme = file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=d46da1a726f705f167863310574b2486');

$filme_json = json_decode($filme);

$searce = filter_input(INPUT_POST, 'valor');

$pattern_searce = '/' . strtolower($searce) . '/';

$response = '';
foreach ($filme_json->results as $result) {
    if ($searce != '' and preg_match($pattern_searce, strtolower($result->title))) {
        $response .= '<h1>' . $result->title . '</h1>';
        $response .= '<img src="https://image.tmdb.org/t/p/w500' . $result->poster_path . '" alt="" height="100px">
        <address>Data de lançamento: ' . date('d/m/Y', strtotime($result->release_date)) . '</address>';
    }
}

echo $response;

