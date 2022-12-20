<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/cd.php';
include_once __DIR__ . '/classi/dvd.php';

$generi = [
  'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
  'horror' => new Generi('horror', 'icon-font-awesome-horror'),
  'drama' => new Generi('drama', 'fa-solid fa-book'),
  'azione' => new Generi('azione', 'fa-solid fa-compact-disc'),
  'fantasy' => new Generi('fantasy', 'fa-solid fa-compact-disc'),
];



$prodotti = [
  new Libro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['horror'], true, 'https://immagine-copertina.com', 250, 'flessibile'),
  new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
  new Cd('Singin In The Rain', 'Gene Kelly', 13.70, $generi['drama'], true, 'https://immagine-copertina.com', 80, '1985'),
  new Dvd('007', 'James Bond', 39.90, $generi['azione'], true, 'https://immagine-copertina.com', 100, 'https://spotify-libri.com'),
];



?>

<!DOCTYPE html>
<html lang='en'>

<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Title</title>
<!-- BOOSTRAP CSS LINK-->
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
<!-- FONTAWESOME LINK-->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css%27integrity=%27sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer'>
<!-- CSS LINK-->
<link rel='stylesheet' href='./style.css'>
</head>

<body>

<?php 
foreach ($prodotti as $elem) {
    echo '<strong>';
    echo 'Tipo: ';
    echo get_class($elem);
    echo '</strong>';
    echo '<br>';
    echo 'Titolo: ';
    echo $elem->nome;
    echo '<br>';
    echo 'Autore: ';
    echo $elem->autore;
    echo '<br>';
    echo 'Prezzo: ';
    echo $elem->prezzo;
    echo ' €';
    echo '<br>';
    if (get_class($elem) == 'libro') {
        echo 'Copertina: ';
        echo $elem->copertina;
        echo '<br>';
        echo 'Numero pagine: ';
        echo $elem->pagine;
        echo '<br>';
        };
        if (get_class($elem) == 'audioLibro') {
            echo 'Durata: ';
            echo $elem->durata;
            echo '<br>';
            echo 'Piattaforma: ';
            echo $elem->piattaforma;
            echo '<br>';
            };
            if (get_class($elem) == 'Cd') {
                echo 'Durata: ';
                echo $elem->durata;
                echo '<br>';
                echo 'Anno: ';
                echo $elem->anno;
                echo '<br>';
                };
                if (get_class($elem) == 'Dvd') {
                    echo 'Durata: ';
                    echo $elem->time;
                    echo ' min.';
                    echo '<br>';
                    };
                    echo '<br>';
}
?>
<!-- AXIOS -->
<script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js%27%3E</script>
<!-- BOOTSTRAP JAVASCRIPT LINK-->
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>
<!-- VUE LINK-->
<script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js%27%3E</script>
<!-- JAVASCRIPT LINK-->
<script type='text/javascript' src='./main.js'></script>
</body>

</html>