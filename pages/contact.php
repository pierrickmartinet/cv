<?php
# Afficher header

$metaTitle = "Contact";
$metaDescription = "Bonjour, bienvenue sur la page contact du site";
require 'require/header.php';

$filecontact = 'contact/contact_' . date("Y-m-d-H-i-s") . '.txt';

# Récupération des données formulaire dans des variables

$recupcivilite = filter_input(INPUT_POST, 'Civilite');// récupère la donnée de "name" des inputs, select, submit, ... et les places dans une variable
$recupprenom = filter_input(INPUT_POST, 'Prenom', FILTER_SANITIZE_STRING);
$recupnom = filter_input(INPUT_POST, 'Nom', FILTER_SANITIZE_STRING);
$recupemail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); //vérifie si e-mail vide (sans filtre mail conforme)
$recupemailnonconforme = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // vérifie si email est confrome (avec filtre)
$recupraisoncontact = filter_input(INPUT_POST, 'raisoncontact');
$recupmessage = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$recupenvoyer = filter_input(INPUT_POST, 'envoyer');
$formulaire = true;
$tableauerreur = []; // Variable d'un tableau d'erreur vide

$miseenformevariables = 'Sexe: ' . $recupcivilite . PHP_EOL . // Mise en forme fichier txt
                        'Prénom: ' . $recupprenom . PHP_EOL .
                        'Nom: ' . $recupnom . PHP_EOL .
                        'e-mail: ' . $recupemail . PHP_EOL .
                        'Raison du contact: ' . $recupraisoncontact . PHP_EOL .
                        'Message: ' . $recupmessage . PHP_EOL;

if (isset($recupenvoyer)) { // Si le bouton envoyé éxiste (à été soumis)
    if (empty(trim($recupprenom))) { // Si la variable recuprenom est vide, trim évite les espaces
        $tableauerreur['Prenom'] = "Veuillez saisir un Prénom"; // Création d'une case d'un tableau avec le message d'erreur
        $formulaire = false; // Le formulaire devient faux et l'envoi ne se fera donc pas
    }
    if (empty(trim($recupnom))) {
        $tableauerreur ['Nom'] = "Veuillez saisir un Nom";
        $formulaire = false;
    }
    if (empty(trim($recupemail))) {
        $tableauerreur ['email'] = "Veuillez saisir un e-mail";
        $formulaire = false;
    }
    if ($recupemailnonconforme == false){
        $tableauerreur ['emailnonconforme'] = "Veuillez saisir une adresse mail conforme";
        $formulaire = false;
    }
    if (empty($recupraisoncontact)) {
        $tableauerreur ['raisoncontact'] = "Veuillez séléctionner un élément";
        $formulaire = false;
    }
    if (strlen($recupmessage) < 5){
        $tableauerreur ['messagetropcourt'] = "Veuillez saisir un texte contenant au moins 5 caractères";
    }
    if (empty(trim($recupmessage))) {
        $tableauerreur ['message'] = "Veuillez saisir un message";
        $formulaire = false;
    }

    if ($formulaire == true) { // Si le formulaire est vrai, donc pas de champs non rempli, alors l'envoi se fait et le fichier est créée si aucun foichier éxiste déjà
        (file_put_contents($filecontact, [$miseenformevariables]));
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
                        else if (isset($tableauerreur['emailnonconforme'])){
                            echo $tableauerreur ['emailnonconforme'];
                        }
                        ?>
                    </div>
                    <input type="text" name="email" placeholder="Veuillez saisir votre e-mail">
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
                    elseif (isset($tableauerreur['messagetropcourt'])){
                        echo $tableauerreur['messagetropcourt'];
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