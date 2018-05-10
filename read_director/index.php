<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $iterator = new RecursiveDirectoryIterator("/home/khaled/Projetos/HTML/components/", FilesystemIterator::SKIP_DOTS);
    $recursiveIterator = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);

    foreach ($recursiveIterator as $entry) {
        
        echo $entry->getFilename(), "<br>";
        # print_r($entry."<br");
    }
    ?>
    </br>e ai?
</body>
</html>