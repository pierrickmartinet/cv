<?php
# Afficher header

$metaTitle = "Contact";
$metaDescription = "Bonjour, bienvenue sur la page contact du site";
require 'require/header.php';

# Récupération les données du formulaires dans le fichier contact.txt avec date

# Création de la date du fichier

$filecontact = 'contact/contact_' . date("Y-m-d-H-i-s") . '.txt';

# Récupération données pour chaque champ (1ère ligne : récupère la donnée et la place dans une variable, 2 ème ligne créer un fichier et inscrit la valeur de la variable à l'intèrieur sans écraser.

# Civilité
$recupcivilité = filter_input(INPUT_POST, 'Civilite');
file_put_contents($filecontact, $recupcivilité , FILE_APPEND);
# Prenom
$recupprenom = filter_input(INPUT_POST, 'Prenom');
file_put_contents($filecontact, $recupprenom, FILE_APPEND);
# Nom
$recupnom = filter_input(INPUT_POST, 'Nom');
file_put_contents($filecontact, $recupnom, FILE_APPEND);
# E-mail
$recupemail = filter_input(INPUT_POST, 'email');
file_put_contents($filecontact, $recupemail, FILE_APPEND);
# Raison du contact
$recupraisoncontact = filter_input(INPUT_POST, 'raisoncontact');
file_put_contents($filecontact, $recupraisoncontact, FILE_APPEND);
# Message
$recupmessage = filter_input(INPUT_POST, 'message');
file_put_contents($filecontact, $recupmessage, FILE_APPEND);
?>

<main>

        <section class="formulaire">
            <h1 id="contact">Contact</h1>

            <form action="index.php?page=contact" method="POST">
                <div id="radio">
                    <select name="Civilite">
                        <option value="Madame">Madame</option>
                        <option value="Monsieur">Monsieur</option>
                    </select>
                </div>
                <div id="prénomnom">
                    <input type="text" name="Prenom" placeholder="Veuillez saisir votre Prénom">
                    <input type="text" name="Nom" placeholder="Veuillez saisir votre Nom">
                </div>
                <div id="emailform">
                    <input type="email" name="email" placeholder="Veuillez saisir votre e-mail">
                </div>
                <div id="contrat">
                        <input type="radio" name="raisoncontact" id="proposition d'emploi" value="proposition d'emploi">
                        <label for="proposition d'emploi">Proposition d'emploi</label>
                        <input type="radio" name="raisoncontact" id="demande d'information" value="demande d'information">
                        <label for="demande d'information">Demande d'information</label>
                        <input type="radio" name="raisoncontact" id="Prestation" value="Prestation">
                        <label for="Prestation">prestations</label>
                </div>
                <div id="message">
                    <textarea name="message" id="Message" cols="33" rows="5" placeholder="Message"></textarea>
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