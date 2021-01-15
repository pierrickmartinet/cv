<?php
$metaTitle = "Hobbie";
$metaDescription = "Bonjour, bienvenue sur la page hobbie du site";
require 'require/header.php';
?>

<main class="main">
    <h1 class="hobbie">Hobbie, la Magie</h1>
    <div class="containerintro">
        <img src="/images/116743489_353060642370620_8319937539357894461_n.png" height="200" width="354"
             alt="logoPierrickMartinet">
        <p>Passionné de magie depuis l'âge de 14 ans, je pratique la magie depuis cet âge et ai eu l'occasion de
            faire plusieurs représentation que ce soit sur scène, en close up ou en magie de cocktail. Je
            pratique désormais cet art principalement pour mes amis et ma famille.</p>
    </div>
    <div id="vidéo">
        <iframe id="ytvideo" src="https://www.youtube.com/embed/HHA6Rv3-6Mw"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</main>

<?php
require 'require/footer.php'
?>
