<?php
$metaTitle = "Contact";
$metaDescription = "Bonjour, bienvenue sur la page contact du site";
require 'require/header.php';
?>

<main>

        <section class="formulaire">
            <h1 id="contact">Contact</h1>
            <form action="https://httpbin.org/post" method="POST">
                <div id="radio">
                    <input type="radio" name="Sexe" id="Mr" value="Mr" required>
                    <label for="Mr">Mr</label>
                    <input type="radio" name="Sexe" id="Mme" value="Mme" required>
                    <label for="Mme">Mme</label>
                </div>
                <div id="prénomnom">
                    <input type="text" name="Prenom" placeholder="Veuillez saisir votre Prénom" required>
                    <input type="text" name="Nom" placeholder="Veuillez saisir votre Nom" required>
                </div>
                <div id="contrat">
                    <select name="Contrat" id="Contrat" required>
                        <option value=""> Veuillez choisir un type de contrat </option>
                        <option value="CDD">CDD</option>
                        <option value="CDI">CDI</option>
                        <option value="Alternance">Alternance</option>
                    </select>
                </div>
                <div id="message">
                    <textarea name="contenue mail" id="Message" cols="33" rows="5" placeholder="Message"
                        required></textarea>
                </div>
                <div id="envoyer">
                    <input type="submit" value="Envoyer mail">
                </div>
            </form>
        </section>

    </main>

<?php
require 'require/footer.php';
?>