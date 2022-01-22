<?php 
    function render($url,$file){
    $content=file_get_contents($url);
    file_put_contents($file,$content);
}
    render("https://restcountries.com/v3.1/region/europe","./index.json");
?>