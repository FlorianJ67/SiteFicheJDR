<?php

namespace Controller;

use App\Session;
use App\AbstractController;
use App\ControllerInterface;
use Model\Managers\PlayerManager;

class PlayerController extends AbstractController implements ControllerInterface{

    public function index(){

        $playerManager = New PlayerManager;

         return [
             "view" => VIEW_DIR."fiche/viewFiche.php",
             "data" => [
                "player" => $playerManager->findAll(["pseudo", "DESC"])
            ]
         ];
    }

    public function addOrModifyPlayer() {

        $playerManager = New PlayerManager;

        if(isset($_POST['submit'])){
        
            $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);

            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $espece = filter_input(INPUT_POST, "espece", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $classe = filter_input(INPUT_POST, "classe", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $planete_origine = filter_input(INPUT_POST, "planete_origin", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

            $taille = filter_input(INPUT_POST, "taille", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $poids = filter_input(INPUT_POST, "poids", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $sex = filter_input(INPUT_POST, "sex", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $trait_particulier = filter_input(INPUT_POST, "trait_particulier", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $force = filter_input(INPUT_POST, "force", FILTER_SANITIZE_NUMBER_INT);

            $adresse = filter_input(INPUT_POST, "adresse", FILTER_SANITIZE_NUMBER_INT);

            $intelligence = filter_input(INPUT_POST, "intelligence", FILTER_SANITIZE_NUMBER_INT);

            $charisme = filter_input(INPUT_POST, "charisme", FILTER_SANITIZE_NUMBER_INT);

            $mental = filter_input(INPUT_POST, "mental", FILTER_SANITIZE_NUMBER_INT);

            $sante = filter_input(INPUT_POST, "sante", FILTER_SANITIZE_NUMBER_INT);

            $sante_max = filter_input(INPUT_POST, "sante_max", FILTER_SANITIZE_NUMBER_INT);

            $critique = filter_input(INPUT_POST, "critique", FILTER_SANITIZE_NUMBER_INT);

            $stress = filter_input(INPUT_POST, "stress", FILTER_SANITIZE_NUMBER_INT);

            $stress_max = filter_input(INPUT_POST, "stress_max", FILTER_SANITIZE_NUMBER_INT);

            $armure = filter_input(INPUT_POST, "armure", FILTER_SANITIZE_NUMBER_INT);

            $chance = filter_input(INPUT_POST, "chance", FILTER_SANITIZE_NUMBER_INT);

            $attributsOne = filter_input(INPUT_POST, "attributsOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $attributsTwo = filter_input(INPUT_POST, "attributsTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $attributsThree = filter_input(INPUT_POST, "attributsThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $athletisme = filter_input(INPUT_POST, "athletisme", FILTER_SANITIZE_NUMBER_INT);

            $baratin = filter_input(INPUT_POST, "baratin", FILTER_SANITIZE_NUMBER_INT);

            $bricolage = filter_input(INPUT_POST, "bricolage", FILTER_SANITIZE_NUMBER_INT);

            $conduite = filter_input(INPUT_POST, "conduite", FILTER_SANITIZE_NUMBER_INT);

            $corps_a_corps = filter_input(INPUT_POST, "corps_a_corps", FILTER_SANITIZE_NUMBER_INT);

            $discretion = filter_input(INPUT_POST, "discretion", FILTER_SANITIZE_NUMBER_INT);

            $erudit = filter_input(INPUT_POST, "erudit", FILTER_SANITIZE_NUMBER_INT);

            $informatique = filter_input(INPUT_POST, "informatique", FILTER_SANITIZE_NUMBER_INT);

            $intimidation = filter_input(INPUT_POST, "intimidation", FILTER_SANITIZE_NUMBER_INT);

            $maitre_du_beat = filter_input(INPUT_POST, "maitre_du_beat", FILTER_SANITIZE_NUMBER_INT);

            $negociation = filter_input(INPUT_POST, "negociation", FILTER_SANITIZE_NUMBER_INT);

            $persuasion = filter_input(INPUT_POST, "persuasion", FILTER_SANITIZE_NUMBER_INT);

            $science = filter_input(INPUT_POST, "science", FILTER_SANITIZE_NUMBER_INT);

            $soin = filter_input(INPUT_POST, "soin", FILTER_SANITIZE_NUMBER_INT);

            $survie = filter_input(INPUT_POST, "survie", FILTER_SANITIZE_NUMBER_INT);

            $tir = filter_input(INPUT_POST, "tir", FILTER_SANITIZE_NUMBER_INT);

            $vol = filter_input(INPUT_POST, "vol", FILTER_SANITIZE_NUMBER_INT);
            
            //armes
            $armeOne = filter_input(INPUT_POST, "armeOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $armeTwo = filter_input(INPUT_POST, "armeTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $armeThree = filter_input(INPUT_POST, "armeThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            //dgt
            $degatsOne = filter_input(INPUT_POST, "degatsOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $degatsTwo = filter_input(INPUT_POST, "degatsTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $degatsThree = filter_input(INPUT_POST, "degatsThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


            $inventaire_1 = filter_input(INPUT_POST, "inventaire_1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_2 = filter_input(INPUT_POST, "inventaire_2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_3 = filter_input(INPUT_POST, "inventaire_3", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_4 = filter_input(INPUT_POST, "inventaire_4", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_5 = filter_input(INPUT_POST, "inventaire_5", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_6 = filter_input(INPUT_POST, "inventaire_6", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_7 = filter_input(INPUT_POST, "inventaire_7", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_8 = filter_input(INPUT_POST, "inventaire_8", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_9 = filter_input(INPUT_POST, "inventaire_9", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire_10 = filter_input(INPUT_POST, "inventaire_10", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $trait = filter_input(INPUT_POST, "trait", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $description_trait = filter_input(INPUT_POST, "description_trait", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $deutsch_mark = filter_input(INPUT_POST, "deutsch_mark", FILTER_SANITIZE_NUMBER_INT);

            $qualiteOne = filter_input(INPUT_POST, "qualiteOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $qualiteTwo = filter_input(INPUT_POST, "qualiteTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $qualiteThree = filter_input(INPUT_POST, "qualiteThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $defautsOne = filter_input(INPUT_POST, "defautsOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $defautsTwo = filter_input(INPUT_POST, "defautsTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $defautsThree = filter_input(INPUT_POST, "defautsThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $experience = filter_input(INPUT_POST, "experience", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


            $IdPlayer = $playerManager->add([   'id' => $id,
                                                'nom' => $nom,
                                                'pseudo' => $pseudo,
                                                'espece' => $espece,
                                                'classe' => $classe,
                                                'description' => $description ,
                                                'planete_origine' => $planete_origine ,
                                                'age' => $age ,
                                                'taille' => $taille ,
                                                'poids' => $poids,
                                                'sex' => $sex,
                                                'trait_particulier' => $trait_particulier,
                                                'force' => $force,
                                                'adresse' => $adresse,
                                                'intelligence' => $intelligence,
                                                'charisme' => $charisme,
                                                'mental' => $mental,
                                                'sante' => $sante,
                                                'sante_max' => $sante_max,
                                                'critique' => $critique,
                                                'stress' => $stress,
                                                'stress_max' => $stress_max,
                                                'armure' => $armure,
                                                'chance' => $chance,
                                                'attributsOne' => $attributsOne,
                                                'attributsTwo' => $attributsTwo,
                                                'attributsThree' => $attributsThree,
                                                'athletisme' => $athletisme,
                                                'baratin' => $baratin,
                                                'bricolage' => $bricolage,
                                                'conduite' => $conduite,
                                                'corps_a_corps' => $corps_a_corps,
                                                'discretion' => $discretion,
                                                'erudit' => $erudit,
                                                'informatique' => $informatique,
                                                'intimidation' => $intimidation,
                                                'maitre_du_beat' => $maitre_du_beat,
                                                'negociation' => $negociation,
                                                'persuasion' => $persuasion,
                                                'science' => $science,
                                                'soin' => $soin,
                                                'survie' => $survie,
                                                'tir' => $tir,
                                                'vol' => $vol,
                                                'armeOne' => $armeOne,
                                                'armeTwo' => $armeTwo,
                                                'armeThree' => $armeThree,
                                                'degatsOne' => $degatsOne,
                                                'degatsTwo' => $degatsTwo,
                                                'degatsThree' => $degatsThree,
                                                'inventaire_1' => $inventaire_1,
                                                'inventaire_2' => $inventaire_2,
                                                'inventaire_3' => $inventaire_3,
                                                'inventaire_4' => $inventaire_4,
                                                'inventaire_5' => $inventaire_5,
                                                'inventaire_6' => $inventaire_6,
                                                'inventaire_7' => $inventaire_7,
                                                'inventaire_8' => $inventaire_8,
                                                'inventaire_9' => $inventaire_9,
                                                'inventaire_10' => $inventaire_10,
                                                'trait' => $trait,
                                                'description_trait' => $description_trait,
                                                'deutsch_mark' => $deutsch_mark,
                                                'qualiteOne' => $qualiteOne,
                                                'qualiteTwo' => $qualiteTwo,
                                                'qualiteThree' => $qualiteThree,
                                                'defautsOne' => $defautsOne,
                                                'defautsTwo' => $defautsTwo,
                                                'defautsThree' => $defautsThree,
                                                'experience' => $experience
        ]);
        }

    }
}