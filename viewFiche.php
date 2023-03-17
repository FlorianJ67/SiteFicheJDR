<?php
    ob_start();

    if($requete) {
        $joueur= $requete->fetch(); 
    }

?>

<body>
    <form action="index.php?action=addPlayer" method="get" id="main">
        <div id="info">
                <img src="img/logo.png" alt="logo">
            <div>
                <h2>Fiche de personnage</h2>
                <div>
                    <div class="twoinput">
                        <div class="input-info">
                            <label for="nom">Nom: </label>
                            <input type="text" name="nom" placeholder="<?=$joueur['nom']?>">
                        </div>
                        <div class="input-info">
                            <label for="player">Joueur: </label>
                            <input type="text" name="player" placeholder="<?=$joueur['pseudo']?>">
                        </div>
                    </div>
                    <div>
                        <div class="twoinput">
                            <div class="input-info">
                                <label for="race">Espèce: </label>
                                <input type="text" name="race" placeholder="<?=$joueur['espece']?>">
                            </div>
                            <div class="input-info">
                                <label for="class">Classe: </label>
                                <input type="text" name="class" placeholder="<?=$joueur['classe']?>">
                            </div>
                        </div>
                    </div>
                    <div class="input-info">
                        <label for="desc">Description: </label>
                        <textarea name="desc" rows="3" placeholder="<?=$joueur['description']?>"></textarea>
                    </div>
                    <div class="input-info">
                        <label for="planet">Planète d'origine: </label>
                        <input type="text" name="planet" placeholder="<?=$joueur['planete_origine']?>">
                    </div>
                    <div class="fourinput">
                        <div class="input-info">
                            <label for="age">Age: </label>
                            <input type="text" name="age" placeholder="<?=$joueur['age']?>">
                        </div>
                        <div class="input-info">
                            <label for="size">Taille: </label>
                            <input type="text" name="size" placeholder="<?=$joueur['taille']?>">
                        </div>
                        <div class="input-info">
                            <label for="weight">Poids: </label>
                            <input type="text" name="weight" placeholder="<?=$joueur['poids']?>">
                        </div>
                        <div class="input-info">
                            <label for="sex">Sexe: </label>
                            <input type="text" name="sex" placeholder="<?=$joueur['sex']?>">
                        </div>
                    </div>
                    <div class="input-info">
                        <label for="trait">Trait particulier: </label>
                        <textarea name="trait" rows="3" placeholder="<?=$joueur['trait_particulier']?>"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div id="S-S-I">
            <div id="stats">
                <div id="characteristics">
                    <div class="input-stats">
                        <label for="strength">Force: </label>
                        <input type="text" name="strength" placeholder="<?=$joueur['force']?>">
                    </div>
                    <div class="input-stats">
                        <label for="agility">Adresse: </label>
                        <input type="text" name="agility" placeholder="<?=$joueur['adresse']?>">
                    </div>
                    <div class="input-stats">
                        <label for="intelligence">Intelligence: </label>
                        <input type="text" name="intelligence" placeholder="<?=$joueur['intelligence']?>">
                    </div>
                    <div class="input-stats">
                        <label for="charism">Charisme: </label>
                        <input type="text" name="charism" placeholder="<?=$joueur['charisme']?>">
                    </div>
                    <div class="input-stats">
                        <label for="mental">Mental: </label>
                        <input type="text" name="mental" placeholder="<?=$joueur['mental']?>">
                    </div>
                </div>
                <div id="hp">
                    <div class="input-stats">
                        <label for="health">Santé: </label>
                        <input type="text" name="health" placeholder="<?=$joueur['sante']?>">
                    </div>
                    <div class="input-stats-max">
                        <label for="health-max">max: </label>
                        <input type="text" name="health-max" placeholder="<?=$joueur['sante_max']?>">
                    </div>
                </div>
                <div>
                    <div class="input-bar" id="critique">
                        <label for="critique">Critique: </label>
                        <div>
                            <input type="checkbox" name="critique">
                            <input type="checkbox" name="critique">
                            <input type="checkbox" name="critique">
                            <input type="checkbox" name="critique">
                            <input type="checkbox" name="critique">
                        </div>
                    </div>
                </div>
                <div id="stress">
                    <div class="input-stats">
                        <label for="stress">Stress: </label>
                        <input type="text" name="stress" placeholder="<?=$joueur['stress']?>">
                    </div>
                    <div class="input-stats-max">
                        <label for="stress-max">max: </label>
                        <input type="text" name="stress-max" placeholder="<?=$joueur['stress_max']?>">
                    </div>
                </div>
                <div class="input-stats">
                    <label for="armor">Armure: </label>
                    <input type="text" name="armor" placeholder="<?=$joueur['armure']?>">
                </div>
                <div class="input-stats">
                    <label for="luck">Chance: </label>
                    <input type="text" name="luck" placeholder="<?=$joueur['chance']?>">
                </div>
                <div id="attributs">
                    <label for="attributs">Attributs: </label>
                    <input type="text" name="attributs" placeholder="<?=$joueur['attributsOne']?>">
                    <input type="text" name="attributs" placeholder="<?=$joueur['attributsTwo']?>">
                    <input type="text" name="attributs" placeholder="<?=$joueur['attributsThree']?>">
                </div>
            </div>

            <div id="skill-inventory">
                <div>
                    <div>
                        <div id="skill">
                                <div>
                                    <p>Compétences</p>
                                    <p>+0</p>
                                    <p>+10</p>
                                    <p>+20</p>
                                </div>
                                <div>
                                    <p title="Force">Athlétisme</p>
                                    <p><input type="checkbox" name="athletisme" value="0"></p>
                                    <p><input type="checkbox" name="athletisme" value="10"></p>
                                    <p><input type="checkbox" name="athletisme" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Baratin</p>
                                    <p><input type="checkbox" name="baratin" value="0"></p>
                                    <p><input type="checkbox" name="baratin" value="10"></p>
                                    <p><input type="checkbox" name="baratin" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Bricolage</p>
                                    <p><input type="checkbox" name="bricolage" value="0"></p>
                                    <p><input type="checkbox" name="bricolage" value="10"></p>
                                    <p><input type="checkbox" name="bricolage" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Conduite</p>
                                    <p><input type="checkbox" name="conduite" value="0"></p>
                                    <p><input type="checkbox" name="conduite" value="10"></p>
                                    <p><input type="checkbox" name="conduite" value="20"></p>
                                </div>
                                <div>
                                    <p title="Force">Corps à corps</p>
                                    <p><input type="checkbox" name="corps_a_corps" value="0"></p>
                                    <p><input type="checkbox" name="corps_a_corps" value="10"></p>
                                    <p><input type="checkbox" name="corps_a_corps" value="20"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Discrétion</p>
                                    <p><input type="checkbox" name="discretion" value="0"></p>
                                    <p><input type="checkbox" name="discretion" value="10"></p>
                                    <p><input type="checkbox" name="discretion" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Érudit</p>
                                    <p><input type="checkbox" name="erudit" value="0"></p>
                                    <p><input type="checkbox" name="erudit" value="10"></p>
                                    <p><input type="checkbox" name="erudit" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Informatique</p>
                                    <p><input type="checkbox" name="informatique" value="0"></p>
                                    <p><input type="checkbox" name="informatique" value="10"></p>
                                    <p><input type="checkbox" name="informatique" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Intimidation</p>
                                    <p><input type="checkbox" name="intimidation" value="0"></p>
                                    <p><input type="checkbox" name="intimidation" value="10"></p>
                                    <p><input type="checkbox" name="intimidation" value="20"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Maître du Beat</p>
                                    <p><input type="checkbox" name="maitre_du_beat" value="0"></p>
                                    <p><input type="checkbox" name="maitre_du_beat" value="10"></p>
                                    <p><input type="checkbox" name="maitre_du_beat" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Négociation</p>
                                    <p><input type="checkbox" name="negociation" value="0"></p>
                                    <p><input type="checkbox" name="negociation" value="10"></p>
                                    <p><input type="checkbox" name="negociation" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Persuasion</p>
                                    <p><input type="checkbox" name="persuasion" value="0"></p>
                                    <p><input type="checkbox" name="persuasion" value="10"></p>
                                    <p><input type="checkbox" name="persuasion" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Science</p>
                                    <p><input type="checkbox" name="science" value="0"></p>
                                    <p><input type="checkbox" name="science" value="10"></p>
                                    <p><input type="checkbox" name="science" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Soin</p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                </div>
                                <div>
                                    <p title="Force">Survie</p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Tir</p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Vol</p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                    <p><input type="checkbox"></p>
                                </div>
                        </div>

                    <div id="weap-inv">
                        <div id="weapon">
                                    <div>
                                        <p>Arme</p>
                                        <p>Dégâts</p>
                                    </div>
                                    <div>
                                        <p><input type="text"></p>
                                        <p><input type="text"></p>
                                    </div>
                                    <div>
                                        <p><input type="text"></p>
                                        <p><input type="text"></p>
                                    </div>
                                    <div>
                                        <p><input type="text"></p>
                                        <p><input type="text"></p>
                                    </div>
                                    <div>
                                        <p><input type="text"></p>
                                        <p><input type="text"></p>
                                    </div>

                        </div>

                        <div id="inventory">
                                <p style="text-align: center; margin: 2%;">Inventaire</p>
                                <p><input type="text"></p>

                                <p><input type="text"></p>
                                <p><input type="text"></p>

                                <p><input type="text"></p>
                                <p><input type="text"></p>

                                <p><input type="text"></p>
                                <p><input type="text"></p>

                                <p><input type="text"></p>
                                <p><input type="text"></p>

                                <p><input type="text"></p>
                                <p><input type="text"></p>

                        </div>
                    </div>
                </div>

                    <div id="other">
                        <div>
                            <div class="input-stats">
                                <label for="trait">Trait: </label>
                                <input type="text" name="trait" style="width: 60%;">
                            </div>
                            <div class="input-stats">
                                <label for="descr-trait">Description: </label>
                                <textarea name="descr-trait"></textarea>
                            </div>
                            <div class="input-stats">
                                <label for="deutschMark">Deutsch Mark: </label>
                                <input type="text" name="deutschMark">
                            </div>
                        </div>
                        <div id="qualitee-defauts">
                            <div>
                                <p>Qualité</p>
                                <p><input type="text"></p>
                                <p><input type="text"></p>
                                <p><input type="text"></p>
                            </div>
                            <div>
                                <p>Défauts</p>
                                <p><input type="text"></p>
                                <p><input type="text"></p>
                                <p><input type="text"></p>
                            </div>
                        </div>
                    </div>


                </div>
                    <div id="xp">
                        <label for="">Expérience</label>
                        <input type="text">
                    </div>
            </div>
        </div>  
</form>



<?php

$titre = "Détail de l'Acteur";
$titre_secondaire = "Détail de l'Acteur";
$contenu = ob_get_clean();
require "template.php";

?>