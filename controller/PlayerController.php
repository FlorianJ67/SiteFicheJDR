<?php

namespace Controller;

use App\Session;
use App\AbstractController;
use App\ControllerInterface;
use Model\Managers\PlayerManager;

class PlayerController extends AbstractController implements ControllerInterface{

    public function index(){

        $playerManager = New PlayerManager;

        $player = $playerManager->findOneById(1);

        return [
            "view" => VIEW_DIR."fiche/viewFiche.php",
            "data" => [
                "player" => $player
            ]
        ];
    }



    public function addOrModifyPlayer() {

        $playerManager = New PlayerManager;

        if(isset($_POST['submit'])){
        
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $espece = filter_input(INPUT_POST, "espece", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $classe = filter_input(INPUT_POST, "classe", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $planeteOrigine = filter_input(INPUT_POST, "planeteOrigin", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

            $taille = filter_input(INPUT_POST, "taille", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $poids = filter_input(INPUT_POST, "poids", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $sex = filter_input(INPUT_POST, "sex", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $traitParticulier = filter_input(INPUT_POST, "traitParticulier", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $force = filter_input(INPUT_POST, "force", FILTER_SANITIZE_NUMBER_INT);

            $adresse = filter_input(INPUT_POST, "adresse", FILTER_SANITIZE_NUMBER_INT);

            $intelligence = filter_input(INPUT_POST, "intelligence", FILTER_SANITIZE_NUMBER_INT);

            $charisme = filter_input(INPUT_POST, "charisme", FILTER_SANITIZE_NUMBER_INT);

            $mental = filter_input(INPUT_POST, "mental", FILTER_SANITIZE_NUMBER_INT);

            $sante = filter_input(INPUT_POST, "sante", FILTER_SANITIZE_NUMBER_INT);

            $sante_max = filter_input(INPUT_POST, "santeMax", FILTER_SANITIZE_NUMBER_INT);

            $critique = filter_input(INPUT_POST, "critique", FILTER_SANITIZE_NUMBER_INT);

            $stress = filter_input(INPUT_POST, "stress", FILTER_SANITIZE_NUMBER_INT);

            $stressMax = filter_input(INPUT_POST, "stressMax", FILTER_SANITIZE_NUMBER_INT);

            $armure = filter_input(INPUT_POST, "armure", FILTER_SANITIZE_NUMBER_INT);

            $chance = filter_input(INPUT_POST, "chance", FILTER_SANITIZE_NUMBER_INT);

            $attributsOne = filter_input(INPUT_POST, "attributsOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $attributsTwo = filter_input(INPUT_POST, "attributsTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $attributsThree = filter_input(INPUT_POST, "attributsThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $athletisme = filter_input(INPUT_POST, "athletisme", FILTER_SANITIZE_NUMBER_INT);

            $baratin = filter_input(INPUT_POST, "baratin", FILTER_SANITIZE_NUMBER_INT);

            $bricolage = filter_input(INPUT_POST, "bricolage", FILTER_SANITIZE_NUMBER_INT);

            $conduite = filter_input(INPUT_POST, "conduite", FILTER_SANITIZE_NUMBER_INT);

            $corpsACorps = filter_input(INPUT_POST, "corpsACorps", FILTER_SANITIZE_NUMBER_INT);

            $discretion = filter_input(INPUT_POST, "discretion", FILTER_SANITIZE_NUMBER_INT);

            $erudit = filter_input(INPUT_POST, "erudit", FILTER_SANITIZE_NUMBER_INT);

            $informatique = filter_input(INPUT_POST, "informatique", FILTER_SANITIZE_NUMBER_INT);

            $intimidation = filter_input(INPUT_POST, "intimidation", FILTER_SANITIZE_NUMBER_INT);

            $maitreDuBeat = filter_input(INPUT_POST, "maitreDuBeat", FILTER_SANITIZE_NUMBER_INT);

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


            $inventaire1 = filter_input(INPUT_POST, "inventaire1", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire2 = filter_input(INPUT_POST, "inventaire2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire3 = filter_input(INPUT_POST, "inventaire3", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire4 = filter_input(INPUT_POST, "inventaire4", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire5 = filter_input(INPUT_POST, "inventaire5", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire6 = filter_input(INPUT_POST, "inventaire6", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire7 = filter_input(INPUT_POST, "inventaire7", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire8 = filter_input(INPUT_POST, "inventaire8", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire9 = filter_input(INPUT_POST, "inventaire9", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $inventaire10 = filter_input(INPUT_POST, "inventaire10", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $trait = filter_input(INPUT_POST, "trait", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $descriptionTrait = filter_input(INPUT_POST, "descriptionTrait", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $deutschMark = filter_input(INPUT_POST, "deutschMark", FILTER_SANITIZE_NUMBER_INT);

            $qualiteOne = filter_input(INPUT_POST, "qualiteOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $qualiteTwo = filter_input(INPUT_POST, "qualiteTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $qualiteThree = filter_input(INPUT_POST, "qualiteThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $defautsOne = filter_input(INPUT_POST, "defautsOne", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $defautsTwo = filter_input(INPUT_POST, "defautsTwo", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $defautsThree = filter_input(INPUT_POST, "defautsThree", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $experience = filter_input(INPUT_POST, "experience", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($playerManager->findOneByPseudo($pseudo)) {

            } else {
            
            $IdPlayer = $playerManager->add([   'nom' => $nom,
                                                'pseudo' => $pseudo,
                                                'espece' => $espece,
                                                'classe' => $classe,
                                                'description' => $description ,
                                                'planeteOrigine' => $planeteOrigine ,
                                                'age' => $age ,
                                                'taille' => $taille ,
                                                'poids' => $poids,
                                                'sex' => $sex,
                                                'traitParticulier' => $traitParticulier,
                                                'force' => $force,
                                                'adresse' => $adresse,
                                                'intelligence' => $intelligence,
                                                'charisme' => $charisme,
                                                'mental' => $mental,
                                                'sante' => $sante,
                                                'sante_max' => $sante_max,
                                                // 'critique' => $critique,
                                                'stress' => $stress,
                                                'stressMax' => $stressMax,
                                                'armure' => $armure,
                                                'chance' => $chance,
                                                'attributsOne' => $attributsOne,
                                                'attributsTwo' => $attributsTwo,
                                                'attributsThree' => $attributsThree,
                                                'athletisme' => $athletisme,
                                                'baratin' => $baratin,
                                                'bricolage' => $bricolage,
                                                'conduite' => $conduite,
                                                'corpsACorps' => $corpsACorps,
                                                'discretion' => $discretion,
                                                'erudit' => $erudit,
                                                'informatique' => $informatique,
                                                'intimidation' => $intimidation,
                                                'maitreDuBeat' => $maitreDuBeat,
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
                                                'inventaire1' => $inventaire1,
                                                'inventaire2' => $inventaire2,
                                                'inventaire3' => $inventaire3,
                                                'inventaire4' => $inventaire4,
                                                'inventaire5' => $inventaire5,
                                                'inventaire6' => $inventaire6,
                                                'inventaire7' => $inventaire7,
                                                'inventaire8' => $inventaire8,
                                                'inventaire9' => $inventaire9,
                                                'inventaire10' => $inventaire10,
                                                'trait' => $trait,
                                                'descriptionTrait' => $descriptionTrait,
                                                'deutschMark' => $deutschMark,
                                                'qualiteOne' => $qualiteOne,
                                                'qualiteTwo' => $qualiteTwo,
                                                'qualiteThree' => $qualiteThree,
                                                'defautsOne' => $defautsOne,
                                                'defautsTwo' => $defautsTwo,
                                                'defautsThree' => $defautsThree,
                                                'experience' => $experience
            ]);

            return [
                "view" => VIEW_DIR."fiche/viewFiche.php",
                "data" => [
                    "player" => $playerManager->findOneById($IdPlayer)
                ]
            ];
        }
    }
            $player = $playerManager->findOneById(1);

            return [
                "view" => VIEW_DIR."fiche/viewFiche.php",
                "data" => [
                    "player" => $player
                ]
            ];
        }



        // $id = null;
        // $nom = null;
        // $pseudo = null;
        // $espece = null;
        // $classe = null;
        // $description = null;
        // $planete_origine = null;
        // $age = null;
        // $taille = null;
        // $poids = null;
        // $sex = null;
        // $trait_particulier = null;
        // $force = null;
        // $adresse = null;
        // $intelligence = null;
        // $charisme = null;
        // $mental = null;
        // $sante = null;
        // $sante_max = null;
        // $critique = null;
        // $stress = null;
        // $stress_max = null;
        // $armure = null;
        // $chance = null;
        // $attributsOne = null;
        // $attributsTwo = null;
        // $attributsThree = null;
        // $athletisme = null;
        // $baratin = null;
        // $bricolage = null;
        // $conduite = null;
        // $corps_a_corps = null;
        // $discretion = null;
        // $erudit = null;
        // $informatique = null;
        // $intimidation = null;
        // $maitre_du_beat = null;
        // $negociation = null;
        // $persuasion = null;
        // $science = null;
        // $soin = null;
        // $survie = null;
        // $tir = null;
        // $vol = null;
        // //armes
        // $armeOne = null;
        // $armeTwo = null;
        // $armeThree = null;
        // //dgt
        // $degatsOne = null;
        // $degatsTwo = null;
        // $degatsThree = null;
        // $inventaire_1 = null;
        // $inventaire_2 = null;
        // $inventaire_3 = null;
        // $inventaire_4 = null;
        // $inventaire_5 = null;
        // $inventaire_6 = null;
        // $inventaire_7 = null;
        // $inventaire_8 = null;
        // $inventaire_9 = null;
        // $inventaire_10 = null;
        // $trait = null;
        // $description_trait = null;
        // $deutsch_mark = null;
        // $qualiteOne = null;
        // $qualiteTwo = null;
        // $qualiteThree = null;
        // $defautsOne = null;
        // $defautsTwo = null;
        // $defautsThree = null;
        // $experience = null;
    }
