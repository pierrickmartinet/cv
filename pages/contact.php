<?php
# Afficher header

$metaTitle = "Contact";
$metaDescription = "Bonjour, bienvenue sur la page contact du site";
require 'require/header.php';


# Création d'un fichier avec date

$filecontact = 'contact/contact_' . date("Y-m-d-H-i-s") . '.txt';

# Récupération des données formulaire dans des variables

$recupcivilite = filter_input(INPUT_POST, 'Civilite');// récupère la donnée de "name" des inputs, select, submit, ... et les places dans une variable
$recupprenom = filter_input(INPUT_POST, 'Prenom');
$recupnom = filter_input(INPUT_POST, 'Nom');
$recupemail = filter_input(INPUT_POST, 'email');
$recupraisoncontact = filter_input(INPUT_POST, 'raisoncontact');
$recupmessage = filter_input(INPUT_POST, 'message');
$recupenvoyer = filter_input(INPUT_POST, 'envoyer');
$formulaire = true;
$tableauerreur = []; // Variable d'un tableau d'erreur vide

if (isset($recupenvoyer)) { // Si le bouton envoyé éxiste (à été soumis)
    if (empty($recupprenom)) { // Si la variable recuprenom est vide...
        $tableauerreur['Prenom'] = "Veuillez saisir un Prénom"; // Création d'une case d'un tableau avec le message d'erreur
        $formulaire = false; // Le formulaire devient faux
    }
    if (empty($recupnom)) {
        $tableauerreur ['Nom'] = "Veuillez saisir un Nom";
        $formulaire = false;
    }
    if (empty($recupemail)) {
        $tableauerreur ['email'] = "Veuillez saisir un e-mail";
        $formulaire = false;
    }
    if (empty($recupraisoncontact)) {
        $tableauerreur ['raisoncontact'] = "Veuillez séléctionner un élément";
        $formulaire = false;
    }
    if (empty($recupmessage)) {
        $tableauerreur ['message'] = "Veuillez saisir un message";
        $formulaire = false;
    }

    if ($formulaire == true) { // Si le formulaire est vrai, donc pas de champs non rempli, alors l'envoi se fait et le fichier eszt créée
        (file_put_contents($filecontact, [$recupcivilite, $recupprenom, $recupnom, $recupemail, $recupraisoncontact, $recupmessage]));
    }
}
var_dump($tableauerreur, $formulaire); // Permet d'afficher un tableau ou une variable
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
                    <div style="color:red">
                        <?php if (isset($tableauerreur['Prenom'])) { // Si la case 'Prenom' du tableau éxiste
                            echo $tableauerreur ['Prenom']; // Permet d'afficher le message d'erreur de la case 'Prenom'
                        }
                        ?>
                    </div>
                    <input type="text" name="Prenom" placeholder="Veuillez saisir votre Prénom">
                    <div style="color : red">
                        <?php if (isset($tableauerreur['Nom'])) {
                            echo $tableauerreur['Nom'];
                        }
                        ?>
                    </div>
                    <input type="text" name="Nom" placeholder="Veuillez saisir votre Nom">
                </div>
                <div id="emailform">
                    <div style="color: red">
                        <?php
                        if (isset($tableauerreur['email'])) {
                            echo $tableauerreur['email'];
                        }
                        ?>
                    </div>
                    <input type="email" name="email" placeholder="Veuillez saisir votre e-mail">
                </div>
                <div style="color: red">
                    <?php
                    if (isset($tableauerreur['raisoncontact'])) {
                        echo $tableauerreur['raisoncontact'];
                    }
                    ?>
                </div>
                <div id="contrat">
                    <input type="radio" name="raisoncontact" id="proposition d'emploi" value="proposition d'emploi">
                    <label for="proposition d'emploi">Proposition d'emploi</label>
                    <input type="radio" name="raisoncontact" id="demande d'information" value="demande d'information">
                    <label for="demande d'information">Demande d'information</label>
                    <input type="radio" name="raisoncontact" id="Prestation" value="Prestation">
                    <label for="Prestation">prestations</label>
                </div>
                <div style="color: red">
                    <?php
                    if (isset($tableauerreur['message'])) {
                        echo $tableauerreur['message'];
                    }
                    ?>
                </div>
                <div id="message">
                    <textarea name="message" id="Message" cols="33" rows="5" placeholder="Message"></textarea>
                </div>
                <div id="envoyer">
                    <input type="submit" value="Envoyer mail" name="envoyer">
                </div>
            </form>

        </section>

    </main>

<?php
require 'require/footer.php';
?>