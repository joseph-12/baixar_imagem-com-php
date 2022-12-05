<?php

// no cod abaixo inseira o link da img que quer baixar 
$link = "link da img";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen ($basename, "w+");

fwrite($file,$content);


fclose ($file);


?>

<img src = "<?=$basename?>">