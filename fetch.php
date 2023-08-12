<?php

$q = "Twitter" ;
$url = "https://newsdata.io/api/1/news?apikey=pub_265336ee2696ca69ba98f092f4122499822c6&country=au,us&q=$q" ;
$header = ['User-Agent:UserAgent'];
$ch = curl_init() ;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$results = json_decode(curl_exec($ch)) -> results;
curl_close($ch);


// DATA //

$title = $results[0] -> title ;
$img = $results[0] -> image_url ;
$pubDate = $results[0] -> pubDate ; 
$category = $results[0] -> category ;
$content = $results[0] -> content ;
$content_trimmed = "" ;


for($i = 0 ; $i < strlen($content); $i++){
    $content_trimmed[$i] = $content[$i] ;
    if($content[$i] == "." ){
      $content_trimmed[$i] =  $content_trimmed[$i]."<br>-" ;
    }
  }

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>'.$title.'</h1>
    <img src="'.$img.'" />
    <p>'.$content.'</p>
</body>
</html>' ;




///// DataBase Connection /////

//// NAME & CREATE FILE //////
$fileName =  "html/".str_replace(" " ,"-", $title).".html" ;
$file = fopen($fileName, "w");
fwrite($file, $html ) ;
fclose($file) ;


