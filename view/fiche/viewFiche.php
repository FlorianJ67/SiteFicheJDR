<?php

if(isset($result["data"]['player'])){
    $joueur = $result["data"]['player'];
}
?>

<body>
    <form action="index.php?ctrl=player&action=addOrModifyPlayer" method="post" id="main">
        <div id="info">
                <img src="./public/img/logo.png" alt="logo">
            <div>
                <h2>Fiche de personnage</h2>
                <div>
                    <div class="twoinput">
                        <div class="input-info">
                            <label for="nom">Nom: </label>
                            <input type="text" name="nom" value="<?=$joueur->getNom()?>">
                        </div>
                        <div class="input-info">
                            <label for="player">Joueur: </label>
                            <input type="text" name="player" value="<?=$joueur->getpseudo()?>">
                        </div>
                    </div>
                    <div>
                        <div class="twoinput">
                            <div class="input-info">
                                <label for="race">Espèce: </label>
                                <input type="text" name="race" value="<?=$joueur->getespece()?>">
                            </div>
                            <div class="input-info">
                                <label for="class">Classe: </label>
                                <input type="text" name="class" value="<?=$joueur->getclasse()?>">
                            </div>
                        </div>
                    </div>
                    <div class="input-info">
                        <label for="desc">Description: </label>
                        <textarea name="desc" rows="3"><?=$joueur->getDescription()?></textarea>
                    </div>
                    <div class="input-info">
                        <label for="planet">Planète d'origine: </label>
                        <input type="text" name="planet" value="<?=$joueur->getPlaneteOrigine()?>">
                    </div>
                    <div class="fourinput">
                        <div class="input-info">
                            <label for="age">Age: </label>
                            <input type="text" name="age" value="<?=$joueur->getAge()?>">
                        </div>
                        <div class="input-info">
                            <label for="size">Taille: </label>
                            <input type="text" name="size" value="<?=$joueur->gettaille()?>">
                        </div>
                        <div class="input-info">
                            <label for="weight">Poids: </label>
                            <input type="text" name="weight" value="<?=$joueur->getpoids()?>">
                        </div>
                        <div class="input-info">
                            <label for="sex">Sexe: </label>
                            <input type="text" name="sex" value="<?=$joueur->getsex()?>">
                        </div>
                    </div>
                    <div class="input-info">
                        <label for="trait">Trait particulier: </label>
                        <textarea name="trait" rows="3" ><?=$joueur->gettraitParticulier()?></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div id="S-S-I">
            <div id="stats">
                <div id="characteristics">
                    <div class="input-stats">
                        <label for="strength">Force: </label>
                        <input type="text" name="strength" value="<?=$joueur->getforce()?>">
                    </div>
                    <div class="input-stats">
                        <label for="agility">Adresse: </label>
                        <input type="text" name="agility" value="<?=$joueur->getadresse()?>">
                    </div>
                    <div class="input-stats">
                        <label for="intelligence">Intelligence: </label>
                        <input type="text" name="intelligence" value="<?=$joueur->getintelligence()?>">
                    </div>
                    <div class="input-stats">
                        <label for="charism">Charisme: </label>
                        <input type="text" name="charism" value="<?=$joueur->getcharisme()?>">
                    </div>
                    <div class="input-stats">
                        <label for="mental">Mental: </label>
                        <input type="text" name="mental" value="<?=$joueur->getmental()?>">
                    </div>
                </div>
                <div id="hp">
                    <div class="input-stats">
                        <label for="health">Santé: </label>
                        <input type="text" name="health" value="<?=$joueur->getsante()?>">
                    </div>
                    <div class="input-stats-max">
                        <label for="health-max">max: </label>
                        <input type="text" name="health-max" value="<?=$joueur->getsanteMax()?>">
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
                        <input type="text" name="stress" value="<?=$joueur->getstress()?>">
                    </div>
                    <div class="input-stats-max">
                        <label for="stress-max">max: </label>
                        <input type="text" name="stress-max" value="<?=$joueur->getstressMax()?>">
                    </div>
                </div>
                <div class="input-stats">
                    <label for="armor">Armure: </label>
                    <input type="text" name="armor" value="<?=$joueur->getarmure()?>">
                </div>
                <div class="input-stats">
                    <label for="luck">Chance: </label>
                    <input type="text" name="luck" value="<?=$joueur->getchance()?>">
                </div>
                <div id="attributs">
                    <label for="attributs">Attributs: </label>
                    <input type="text" name="attributs" value="<?=$joueur->getattributsOne()?>">
                    <input type="text" name="attributs" value="<?=$joueur->getattributsTwo()?>">
                    <input type="text" name="attributs" value="<?=$joueur->getattributsThree()?>">
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
                                    <p><input type="radio" name="athletisme" value="0"></p>
                                    <p><input type="radio" name="athletisme" value="10"></p>
                                    <p><input type="radio" name="athletisme" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Baratin</p>
                                    <p><input type="radio" name="baratin" value="0"></p>
                                    <p><input type="radio" name="baratin" value="10"></p>
                                    <p><input type="radio" name="baratin" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Bricolage</p>
                                    <p><input type="radio" name="bricolage" value="0"></p>
                                    <p><input type="radio" name="bricolage" value="10"></p>
                                    <p><input type="radio" name="bricolage" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Conduite</p>
                                    <p><input type="radio" name="conduite" value="0"></p>
                                    <p><input type="radio" name="conduite" value="10"></p>
                                    <p><input type="radio" name="conduite" value="20"></p>
                                </div>
                                <div>
                                    <p title="Force">Corps à corps</p>
                                    <p><input type="radio" name="corps_a_corps" value="0"></p>
                                    <p><input type="radio" name="corps_a_corps" value="10"></p>
                                    <p><input type="radio" name="corps_a_corps" value="20"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Discrétion</p>
                                    <p><input type="radio" name="discretion" value="0"></p>
                                    <p><input type="radio" name="discretion" value="10"></p>
                                    <p><input type="radio" name="discretion" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Érudit</p>
                                    <p><input type="radio" name="erudit" value="0"></p>
                                    <p><input type="radio" name="erudit" value="10"></p>
                                    <p><input type="radio" name="erudit" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Informatique</p>
                                    <p><input type="radio" name="informatique" value="0"></p>
                                    <p><input type="radio" name="informatique" value="10"></p>
                                    <p><input type="radio" name="informatique" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Intimidation</p>
                                    <p><input type="radio" name="intimidation" value="0"></p>
                                    <p><input type="radio" name="intimidation" value="10"></p>
                                    <p><input type="radio" name="intimidation" value="20"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Maître du Beat</p>
                                    <p><input type="radio" name="maitre_du_beat" value="0"></p>
                                    <p><input type="radio" name="maitre_du_beat" value="10"></p>
                                    <p><input type="radio" name="maitre_du_beat" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Négociation</p>
                                    <p><input type="radio" name="negociation" value="0"></p>
                                    <p><input type="radio" name="negociation" value="10"></p>
                                    <p><input type="radio" name="negociation" value="20"></p>
                                </div>
                                <div>
                                    <p title="Charisme">Persuasion</p>
                                    <p><input type="radio" name="persuasion" value="0"></p>
                                    <p><input type="radio" name="persuasion" value="10"></p>
                                    <p><input type="radio" name="persuasion" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Science</p>
                                    <p><input type="radio" name="science" value="0"></p>
                                    <p><input type="radio" name="science" value="10"></p>
                                    <p><input type="radio" name="science" value="20"></p>
                                </div>
                                <div>
                                    <p title="Intelligence">Soin</p>
                                    <p><input type="radio" name="soin" value="0"></p>
                                    <p><input type="radio" name="soin" value="10"></p>
                                    <p><input type="radio" name="soin" value="20"></p>
                                </div>
                                <div>
                                    <p title="Force">Survie</p>
                                    <p><input type="radio" name="survie" value="0"></p>
                                    <p><input type="radio" name="survie" value="10"></p>
                                    <p><input type="radio" name="survie" value="20"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Tir</p>
                                    <p><input type="radio" name="tir" value="0"></p>
                                    <p><input type="radio" name="tir" value="10"></p>
                                    <p><input type="radio" name="tir" value="20"></p>
                                </div>
                                <div>
                                    <p title="Adresse">Vol</p>
                                    <p><input type="radio" name="vol" value="0"></p>
                                    <p><input type="radio" name="vol" value="10"></p>
                                    <p><input type="radio" name="vol" value="20"></p>
                                </div>
                        </div>

                    <div id="weap-inv">
                        <div id="weapon">
                                    <div>
                                        <p>Arme</p>
                                        <p>Dégâts</p>
                                    </div>
                                    <div>
                                        <p><input type="text" name="armeOne" value="<?= $joueur->getArmeOne() ?>"></p>
                                        <p><input type="text" name="degatsOne" value="<?= $joueur->getdegatsOne() ?>"></p>
                                    </div>
                                    <div>
                                        <p><input type="text" name="armeTwo" value="<?= $joueur->getarmeTwo() ?>"></p>
                                        <p><input type="text" name="degatsTwo" value="<?= $joueur->getdegatsTwo() ?>"></p>
                                    </div>
                                    <div>
                                        <p><input type="text" name="armeThree" value="<?= $joueur->getarmeThree() ?>"></p>
                                        <p><input type="text" name="degatsThree" value="<?= $joueur->getdegatsThree() ?>"></p>
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
                    <input type="submit" >
            </div>
        </div>  
</form>

