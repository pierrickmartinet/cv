<?php
$metaTitle = "Cv";
$metaDescription = "Bonjour, bienvenue sur la page cv du site";
require 'require/header.php';
?>

<main>

    <section>
        <h1>Mon Curriculum Vitae</h1>
        <h2 id="pres">Présentation personnelle</h2>
        <p id="textepres">Âgé de 28 ans et travaillant dans le secteur du tourisme depuis 2014, je suis
            aujourd’hui à la
            recherche de nouveaux horizons professionnels. Passionné d’informatique et de nouvelles technologies
            depuis toujours, je souhaite me réorienter dans le secteur du numérique et acceder à une formation
            professionnelle de technicien développeur web pouvant m’apporter les compétences requises à mon
            futur métier.</p>
    </section>

    <section>
        <div>
            <h2 id="titreexperiences">Experiences professionnelles</h2>
            <table>
                <tr>
                    <th>Année</th>
                    <th>Métier</th>
                    <th>Entreprise</th>
                </tr>
                <tr>
                    <td>Nov. 2019 - Avril 2020</td>
                    <td>Directeur adjoint</td>
                    <td>Les villages clubs du soleil des Ménuires</td>
                </tr>
                <tr>
                    <td>Juil. 2019 - Août. 2019</td>
                    <td>Directeur adjoint en formation</td>
                    <td>Les villages clubs du soleil des 2 Alpes</td>
                </tr>
                <tr>
                    <td>Déc. 2017 - Août. 2018</td>
                    <td>Premier barman</td>
                    <td>Les villages clubs du soleil d'Orcières</td>
                </tr>
                <tr>
                    <td>Déc. 2014 - Oct. 2017</td>
                    <td>Responsable des festivités</td>
                    <td>Les villages clubs du soleil de Montgenèvre et Marseille</td>
                </tr>
            </table>
        </div>
        <div>
            <h2 id="titrediplomes">Diplômes et formations</h2>
            <table>
                <tr>
                    <td><b>Année</b></td>
                    <td><b>École</b></td>
                    <td><b>Diplôme</b></td>
                </tr>
                <tr>
                    <td>2019 - 2020</td>
                    <td>IFETH</td>
                    <td>Formation professionnelle de Responsable d'Établissement Touristique (RET)</td>
                </tr>
                <tr>
                    <td>2019 - 2020</td>
                    <td>IFETH</td>
                    <td>Formation professionnelle de Gérant de Restauration Collective (GRC)</td>
                </tr>
                <tr>
                    <td>2012 - 2014</td>
                    <td>IMSAT</td>
                    <td>BP JEPS APT</td>
                </tr>
                <tr>
                    <td>2010 - 2012</td>
                    <td>CFA de Livron sur Rhône</td>
                    <td>CAP Pâtisserie</td>
                </tr>
                <tr>
                    <td>2008 - 2010</td>
                    <td>Lycée hotelier de Tain l'Hermitage</td>
                    <td>BEP Hôtellerie Restauration</td>
                </tr>
            </table>
        </div>
    </section>

    <section class="competences">
        <div>
            <h2>Compétences</h2>
            <ul>
                <li>Gestion financière</li>
                <li>Marketing / Commercialisation</li>
                <li>Prestation / Qualité</li>
                <li>Management / GRH</li>
                <li>Pack office</li>
                <li>Travail en équipe</li>
            </ul>
        </div>
        <div>
            <h2>Hobbies</h2>
            <ol>
                <li>Magie</li>
                <li>Informatique</li>
                <li>Jeux vidéo</li>
                <li>Sports</li>
            </ol>
        </div>

    </section>
</main>

<?php
require 'require/footer.php';
?>