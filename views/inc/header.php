<?php
    $host = "http://localhost/!_TCGZone/";
    
    $country = [
        'fr' => [
            'flag' => $host . 'asset/img/lang/fr.png',
            'lang' => 'Français'
        ],
        'en' => [
            'flag' => $host . 'asset/img/lang/en.png',
            'lang' => 'Anglais'
        ],
    ];
    
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    // if(isset($_COOKIE['lang'])){
    //     foreach ($country as $key => $value) {
    //         if($key == $_COOKIE['lang']){
    //             echo 'oui';
    //         }else{
    //             'non';
    //         }
    //     }
    // }
    $translations_url = "{$host}lang/{$lang}.json";
    
    $json_content = file_get_contents($translations_url);
    if ($json_content === false) {
        echo "Erreur : Impossible de charger le fichier de traduction.";
    }
    $trad = json_decode($json_content, true);
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $host ?>asset/css/style.css">
    <link rel="stylesheet" href="<?= $host ?>asset/css/nav.css">
    <link rel="stylesheet" href="<?= $host ?>asset/css/footer.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?= $host ?>asset/js/structure.js"></script>
    <script src="<?= $host ?>asset/js/nav.js"></script>
    <link rel="icon" type="image/png" href="<?= $host ?>asset/img/logo.png">