<?php

function desenhaBotao ($botao) {

    echo "<div class='dropdown'>";
        echo "<button class='dropbtn'>Botao</button>";
        echo "<div class='dropText'>";

            foreach ($botao as $b) {
                echo "<span><img src='" . $b->getLinkImg() . "' width='20' height='20'>" . $b->getInfo() . "</span>";
            }

        echo "</div>";
    echo "</div>";

}

require_once('model/Link.php');
echo "<link rel='stylesheet' href='styles.css'>";

$timesFutebol = array (
    $time1 = new Link ("https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Gremio_logo.svg/250px-Gremio_logo.svg.png", "Grêmio"),
    $time2 = new Link ("https://upload.wikimedia.org/wikipedia/commons/f/f1/Escudo_do_Sport_Club_Internacional.svg", "Iternacional"),
    $time3 = new Link ("https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Santos_Logo.png/250px-Santos_Logo.png", "Santos")
);

$bandasRock = array (
    $banda1 = new Link ("https://logos-world.net/wp-content/uploads/2020/04/Guns-N-Roses-Logo.png", "Guns'n Roses"),
    $banda2 = new Link ("https://logos-world.net/wp-content/uploads/2020/04/Queen-Logo.png", "Queen"),
    $banda3 = new Link ("https://logosmarcas.net/wp-content/uploads/2022/01/Red-Hot-Chili-Peppers-Logo.png", "Red Hot Chilli Peppers")
);

$pokemons = array (
    $poke1 = new Link ("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/717.png", "Yveltal"),
    $poke2 = new Link ("https://archives.bulbagarden.net/media/upload/thumb/4/42/0448Lucario.png/800px-0448Lucario.png", "Lucario"),
    $poke3 = new Link ("https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/792.png", "Lunala")
);

$marcasTenis = array (
    $marca1 = new Link ("https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg", "Nike"),
    $marca2 = new Link ("https://upload.wikimedia.org/wikipedia/commons/2/24/Adidas_logo.png", "Adidas"),
    $marca3 = new Link ("https://logosmarcas.net/wp-content/uploads/2020/04/Puma-Logo.png", "Puma")
);

desenhaBotao($timesFutebol);
desenhaBotao($bandasRock);
desenhaBotao($pokemons);
desenhaBotao($marcasTenis);

?>

