<?php
    namespace Model\Entities;

    use App\Entity;

    final class Player extends Entity{

        private $id;
        private $nom;
        private $pseudo;
        private $espece;
        private $classe;
        private $description;
        private $planeteOrigine;
        private $age;
        private $taille;
        private $poids;
        private $sex;
        private $traitParticulier;
        private $force;
        private $adresse;
        private $intelligence;
        private $charisme;
        private $mental;
        private $sante;
        private $santeMax;
        private $critique;
        private $stress;
        private $stressMax;
        private $armure;
        private $chance;
        private $attributsOne;
        private $attributsTwo;
        private $attributsThree;
        private $athletisme;
        private $baratin;
        private $bricolage;
        private $conduite;
        private $corpsACorps;
        private $discretion;
        private $erudit;
        private $informatique;
        private $intimidation;
        private $maitreDuBeat;
        private $negociation;
        private $persuasion;
        private $science;
        private $soin;
        private $survie;
        private $tir;
        private $vol;
        private $armeOne;
        private $armeTwo;
        private $armeThree;
        private $degatsOne;
        private $degatsTwo;
        private $degatsThree;
        private $inventaire1;
        private $inventaire2;
        private $inventaire3;
        private $inventaire4;
        private $inventaire5;
        private $inventaire6;
        private $inventaire7;
        private $inventaire8;
        private $inventaire9;
        private $inventaire10;
        private $trait;
        private $descriptionTrait;
        private $deutschMark;
        private $qualiteOne;
        private $qualiteTwo;
        private $qualiteThree;
        private $defautsOne;
        private $defautsTwo;
        private $defautsThree;
        private $experience;




        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         */
        public function setNom($nom): self
        {
                $this->nom = $nom;

                return $this;
        }

        /**
         * Get the value of pseudo
         */
        public function getPseudo()
        {
                return $this->pseudo;
        }

        /**
         * Set the value of pseudo
         */
        public function setPseudo($pseudo): self
        {
                $this->pseudo = $pseudo;

                return $this;
        }

        /**
         * Get the value of espece
         */
        public function getEspece()
        {
                return $this->espece;
        }

        /**
         * Set the value of espece
         */
        public function setEspece($espece): self
        {
                $this->espece = $espece;

                return $this;
        }

        /**
         * Get the value of classe
         */
        public function getClasse()
        {
                return $this->classe;
        }

        /**
         * Set the value of classe
         */
        public function setClasse($classe): self
        {
                $this->classe = $classe;

                return $this;
        }

        /**
         * Get the value of description
         */
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         */
        public function setDescription($description): self
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of planete_origine
         */
        public function getPlaneteOrigine()
        {
                return $this->planeteOrigine;
        }

        /**
         * Set the value of planete_origine
         */
        public function setPlaneteOrigine($planeteOrigine): self
        {
                $this->planeteOrigine = $planeteOrigine;

                return $this;
        }

        /**
         * Get the value of age
         */
        public function getAge()
        {
                return $this->age;
        }

        /**
         * Set the value of age
         */
        public function setAge($age): self
        {
                $this->age = $age;

                return $this;
        }

        /**
         * Get the value of taille
         */
        public function getTaille()
        {
                return $this->taille;
        }

        /**
         * Set the value of taille
         */
        public function setTaille($taille): self
        {
                $this->taille = $taille;

                return $this;
        }

        /**
         * Get the value of poids
         */
        public function getPoids()
        {
                return $this->poids;
        }

        /**
         * Set the value of poids
         */
        public function setPoids($poids): self
        {
                $this->poids = $poids;

                return $this;
        }

        /**
         * Get the value of sex
         */
        public function getSex()
        {
                return $this->sex;
        }

        /**
         * Set the value of sex
         */
        public function setSex($sex): self
        {
                $this->sex = $sex;

                return $this;
        }

        /**
         * Get the value of trait_particulier
         */
        public function getTraitParticulier()
        {
                return $this->traitParticulier;
        }

        /**
         * Set the value of trait_particulier
         */
        public function setTraitParticulier($traitParticulier): self
        {
                $this->traitParticulier = $traitParticulier;

                return $this;
        }

        /**
         * Get the value of force
         */
        public function getForce()
        {
                return $this->force;
        }

        /**
         * Set the value of force
         */
        public function setForce($force): self
        {
                $this->force = $force;

                return $this;
        }

        /**
         * Get the value of adresse
         */
        public function getAdresse()
        {
                return $this->adresse;
        }

        /**
         * Set the value of adresse
         */
        public function setAdresse($adresse): self
        {
                $this->adresse = $adresse;

                return $this;
        }

        /**
         * Get the value of intelligence
         */
        public function getIntelligence()
        {
                return $this->intelligence;
        }

        /**
         * Set the value of intelligence
         */
        public function setIntelligence($intelligence): self
        {
                $this->intelligence = $intelligence;

                return $this;
        }

        /**
         * Get the value of charisme
         */
        public function getCharisme()
        {
                return $this->charisme;
        }

        /**
         * Set the value of charisme
         */
        public function setCharisme($charisme): self
        {
                $this->charisme = $charisme;

                return $this;
        }

        /**
         * Get the value of mental
         */
        public function getMental()
        {
                return $this->mental;
        }

        /**
         * Set the value of mental
         */
        public function setMental($mental): self
        {
                $this->mental = $mental;

                return $this;
        }

        /**
         * Get the value of sante
         */
        public function getSante()
        {
                return $this->sante;
        }

        /**
         * Set the value of sante
         */
        public function setSante($sante): self
        {
                $this->sante = $sante;

                return $this;
        }

        /**
         * Get the value of sante_max
         */
        public function getSanteMax()
        {
                return $this->santeMax;
        }

        /**
         * Set the value of sante_max
         */
        public function setSanteMax($santeMax): self
        {
                $this->santeMax = $santeMax;

                return $this;
        }

        /**
         * Get the value of critique
         */
        public function getCritique()
        {
                return $this->critique;
        }

        /**
         * Set the value of critique
         */
        public function setCritique($critique): self
        {
                $this->critique = $critique;

                return $this;
        }

        /**
         * Get the value of stress
         */
        public function getStress()
        {
                return $this->stress;
        }

        /**
         * Set the value of stress
         */
        public function setStress($stress): self
        {
                $this->stress = $stress;

                return $this;
        }

        /**
         * Get the value of stress_max
         */
        public function getStressMax()
        {
                return $this->stressMax;
        }

        /**
         * Set the value of stress_max
         */
        public function setStressMax($stressMax): self
        {
                $this->stressMax = $stressMax;

                return $this;
        }

        /**
         * Get the value of armure
         */
        public function getArmure()
        {
                return $this->armure;
        }

        /**
         * Set the value of armure
         */
        public function setArmure($armure): self
        {
                $this->armure = $armure;

                return $this;
        }

        /**
         * Get the value of chance
         */
        public function getChance()
        {
                return $this->chance;
        }

        /**
         * Set the value of chance
         */
        public function setChance($chance): self
        {
                $this->chance = $chance;

                return $this;
        }

        /**
         * Get the value of attributsOne
         */
        public function getAttributsOne()
        {
                return $this->attributsOne;
        }

        /**
         * Set the value of attributsOne
         */
        public function setAttributsOne($attributsOne): self
        {
                $this->attributsOne = $attributsOne;

                return $this;
        }

        /**
         * Get the value of attributsTwo
         */
        public function getAttributsTwo()
        {
                return $this->attributsTwo;
        }

        /**
         * Set the value of attributsTwo
         */
        public function setAttributsTwo($attributsTwo): self
        {
                $this->attributsTwo = $attributsTwo;

                return $this;
        }

        /**
         * Get the value of attributsThree
         */
        public function getAttributsThree()
        {
                return $this->attributsThree;
        }

        /**
         * Set the value of attributsThree
         */
        public function setAttributsThree($attributsThree): self
        {
                $this->attributsThree = $attributsThree;

                return $this;
        }

        /**
         * Get the value of athletisme
         */
        public function getAthletisme()
        {
                return $this->athletisme;
        }

        /**
         * Set the value of athletisme
         */
        public function setAthletisme($athletisme): self
        {
                $this->athletisme = $athletisme;

                return $this;
        }

        /**
         * Get the value of baratin
         */
        public function getBaratin()
        {
                return $this->baratin;
        }

        /**
         * Set the value of baratin
         */
        public function setBaratin($baratin): self
        {
                $this->baratin = $baratin;

                return $this;
        }

        /**
         * Get the value of bricolage
         */
        public function getBricolage()
        {
                return $this->bricolage;
        }

        /**
         * Set the value of bricolage
         */
        public function setBricolage($bricolage): self
        {
                $this->bricolage = $bricolage;

                return $this;
        }

        /**
         * Get the value of conduite
         */
        public function getConduite()
        {
                return $this->conduite;
        }

        /**
         * Set the value of conduite
         */
        public function setConduite($conduite): self
        {
                $this->conduite = $conduite;

                return $this;
        }

        /**
         * Get the value of corps_a_corps
         */
        public function getCorpsACorps()
        {
                return $this->corpsACorps;
        }

        /**
         * Set the value of corps_a_corps
         */
        public function setCorpsACorps($corpsACorps): self
        {
                $this->corpsACorps = $corpsACorps;

                return $this;
        }

        /**
         * Get the value of discretion
         */
        public function getDiscretion()
        {
                return $this->discretion;
        }

        /**
         * Set the value of discretion
         */
        public function setDiscretion($discretion): self
        {
                $this->discretion = $discretion;

                return $this;
        }

        /**
         * Get the value of erudit
         */
        public function getErudit()
        {
                return $this->erudit;
        }

        /**
         * Set the value of erudit
         */
        public function setErudit($erudit): self
        {
                $this->erudit = $erudit;

                return $this;
        }

        /**
         * Get the value of informatique
         */
        public function getInformatique()
        {
                return $this->informatique;
        }

        /**
         * Set the value of informatique
         */
        public function setInformatique($informatique): self
        {
                $this->informatique = $informatique;

                return $this;
        }

        /**
         * Get the value of intimidation
         */
        public function getIntimidation()
        {
                return $this->intimidation;
        }

        /**
         * Set the value of intimidation
         */
        public function setIntimidation($intimidation): self
        {
                $this->intimidation = $intimidation;

                return $this;
        }

        /**
         * Get the value of maitre_du_beat
         */
        public function getMaitreDuBeat()
        {
                return $this->maitreDuBeat;
        }

        /**
         * Set the value of maitre_du_beat
         */
        public function setMaitreDuBeat($maitreDuBeat): self
        {
                $this->maitreDuBeat = $maitreDuBeat;

                return $this;
        }


        /**
         * Set the value of negociation
         */
        public function setNegociation($negociation): self
        {
                $this->negociation = $negociation;

                return $this;
        }

        /**
         * Get the value of negociation
         */
        public function getNegociation()
        {
                return $this->negociation;
        }

        /**
         * Get the value of persuasion
         */
        public function getPersuasion()
        {
                return $this->persuasion;
        }

        /**
         * Set the value of persuasion
         */
        public function setPersuasion($persuasion): self
        {
                $this->persuasion = $persuasion;

                return $this;
        }

        /**
         * Get the value of science
         */
        public function getScience()
        {
                return $this->science;
        }

        /**
         * Set the value of science
         */
        public function setScience($science): self
        {
                $this->science = $science;

                return $this;
        }

        /**
         * Get the value of soin
         */
        public function getSoin()
        {
                return $this->soin;
        }

        /**
         * Set the value of soin
         */
        public function setSoin($soin): self
        {
                $this->soin = $soin;

                return $this;
        }

        /**
         * Get the value of survie
         */
        public function getSurvie()
        {
                return $this->survie;
        }

        /**
         * Set the value of survie
         */
        public function setSurvie($survie): self
        {
                $this->survie = $survie;

                return $this;
        }

        /**
         * Get the value of tir
         */
        public function getTir()
        {
                return $this->tir;
        }

        /**
         * Set the value of tir
         */
        public function setTir($tir): self
        {
                $this->tir = $tir;

                return $this;
        }

        /**
         * Get the value of vol
         */
        public function getVol()
        {
                return $this->vol;
        }

        /**
         * Set the value of vol
         */
        public function setVol($vol): self
        {
                $this->vol = $vol;

                return $this;
        }

        /**
         * Get the value of armeOne
         */
        public function getArmeOne()
        {
                return $this->armeOne;
        }

        /**
         * Set the value of armeOne
         */
        public function setArmeOne($armeOne): self
        {
                $this->armeOne = $armeOne;

                return $this;
        }

        /**
         * Get the value of armeTwo
         */
        public function getArmeTwo()
        {
                return $this->armeTwo;
        }

        /**
         * Set the value of armeTwo
         */
        public function setArmeTwo($armeTwo): self
        {
                $this->armeTwo = $armeTwo;

                return $this;
        }

        /**
         * Get the value of armeThree
         */
        public function getArmeThree()
        {
                return $this->armeThree;
        }

        /**
         * Set the value of armeThree
         */
        public function setArmeThree($armeThree): self
        {
                $this->armeThree = $armeThree;

                return $this;
        }

        /**
         * Get the value of degatsOne
         */
        public function getDegatsOne()
        {
                return $this->degatsOne;
        }

        /**
         * Set the value of degatsOne
         */
        public function setDegatsOne($degatsOne): self
        {
                $this->degatsOne = $degatsOne;

                return $this;
        }

        /**
         * Get the value of degatsTwo
         */
        public function getDegatsTwo()
        {
                return $this->degatsTwo;
        }

        /**
         * Set the value of degatsTwo
         */
        public function setDegatsTwo($degatsTwo): self
        {
                $this->degatsTwo = $degatsTwo;

                return $this;
        }

        /**
         * Get the value of degatsThree
         */
        public function getDegatsThree()
        {
                return $this->degatsThree;
        }

        /**
         * Set the value of degatsThree
         */
        public function setDegatsThree($degatsThree): self
        {
                $this->degatsThree = $degatsThree;

                return $this;
        }

        /**
         * Get the value of inventaire_1
         */
        public function getInventaire1()
        {
                return $this->inventaire1;
        }

        /**
         * Set the value of inventaire_1
         */
        public function setInventaire1($inventaire1): self
        {
                $this->inventaire1 = $inventaire1;

                return $this;
        }

        /**
         * Get the value of inventaire_2
         */
        public function getInventaire2()
        {
                return $this->inventaire2;
        }

        /**
         * Set the value of inventaire_2
         */
        public function setInventaire2($inventaire2): self
        {
                $this->inventaire2 = $inventaire2;

                return $this;
        }

        /**
         * Get the value of inventaire_3
         */
        public function getInventaire3()
        {
                return $this->inventaire3;
        }

        /**
         * Set the value of inventaire_3
         */
        public function setInventaire3($inventaire3): self
        {
                $this->inventaire3 = $inventaire3;

                return $this;
        }

        /**
         * Get the value of inventaire_4
         */
        public function getInventaire4()
        {
                return $this->inventaire4;
        }

        /**
         * Set the value of inventaire_4
         */
        public function setInventaire4($inventaire4): self
        {
                $this->inventaire4 = $inventaire4;

                return $this;
        }

        /**
         * Get the value of inventaire_5
         */
        public function getInventaire5()
        {
                return $this->inventaire5;
        }

        /**
         * Set the value of inventaire_5
         */
        public function setInventaire5($inventaire5): self
        {
                $this->inventaire5 = $inventaire5;

                return $this;
        }

        /**
         * Get the value of inventaire_6
         */
        public function getInventaire6()
        {
                return $this->inventaire6;
        }

        /**
         * Set the value of inventaire_6
         */
        public function setInventaire6($inventaire6): self
        {
                $this->inventaire6 = $inventaire6;

                return $this;
        }

        /**
         * Get the value of inventaire_7
         */
        public function getInventaire7()
        {
                return $this->inventaire7;
        }

        /**
         * Set the value of inventaire_7
         */
        public function setInventaire7($inventaire7): self
        {
                $this->inventaire7 = $inventaire7;

                return $this;
        }

        /**
         * Get the value of inventaire_8
         */
        public function getInventaire8()
        {
                return $this->inventaire8;
        }

        /**
         * Set the value of inventaire_8
         */
        public function setInventaire8($inventaire8): self
        {
                $this->inventaire8 = $inventaire8;

                return $this;
        }

        /**
         * Get the value of inventaire_9
         */
        public function getInventaire9()
        {
                return $this->inventaire9;
        }

        /**
         * Set the value of inventaire_9
         */
        public function setInventaire9($inventaire9): self
        {
                $this->inventaire9 = $inventaire9;

                return $this;
        }

        /**
         * Get the value of inventaire_10
         */
        public function getInventaire10()
        {
                return $this->inventaire10;
        }

        /**
         * Set the value of inventaire_10
         */
        public function setInventaire10($inventaire10): self
        {
                $this->inventaire10 = $inventaire10;

                return $this;
        }

        /**
         * Get the value of trait
         */
        public function getTrait()
        {
                return $this->trait;
        }

        /**
         * Set the value of trait
         */
        public function setTrait($trait): self
        {
                $this->trait = $trait;

                return $this;
        }

        /**
         * Get the value of description_trait
         */
        public function getDescriptionTrait()
        {
                return $this->descriptionTrait;
        }

        /**
         * Set the value of description_trait
         */
        public function setDescriptionTrait($descriptionTrait): self
        {
                $this->descriptionTrait = $descriptionTrait;

                return $this;
        }

        /**
         * Get the value of deutsch_mark
         */
        public function getDeutschMark()
        {
                return $this->deutschMark;
        }

        /**
         * Set the value of deutsch_mark
         */
        public function setDeutschMark($deutschMark): self
        {
                $this->deutschMark = $deutschMark;

                return $this;
        }

        /**
         * Get the value of qualiteOne
         */
        public function getQualiteOne()
        {
                return $this->qualiteOne;
        }

        /**
         * Set the value of qualiteOne
         */
        public function setQualiteOne($qualiteOne): self
        {
                $this->qualiteOne = $qualiteOne;

                return $this;
        }

        /**
         * Get the value of qualiteTwo
         */
        public function getQualiteTwo()
        {
                return $this->qualiteTwo;
        }

        /**
         * Set the value of qualiteTwo
         */
        public function setQualiteTwo($qualiteTwo): self
        {
                $this->qualiteTwo = $qualiteTwo;

                return $this;
        }

        /**
         * Get the value of qualiteThree
         */
        public function getQualiteThree()
        {
                return $this->qualiteThree;
        }

        /**
         * Set the value of qualiteThree
         */
        public function setQualiteThree($qualiteThree): self
        {
                $this->qualiteThree = $qualiteThree;

                return $this;
        }

        /**
         * Get the value of defautsOne
         */
        public function getDefautsOne()
        {
                return $this->defautsOne;
        }

        /**
         * Set the value of defautsOne
         */
        public function setDefautsOne($defautsOne): self
        {
                $this->defautsOne = $defautsOne;

                return $this;
        }

        /**
         * Get the value of defautsTwo
         */
        public function getDefautsTwo()
        {
                return $this->defautsTwo;
        }

        /**
         * Set the value of defautsTwo
         */
        public function setDefautsTwo($defautsTwo): self
        {
                $this->defautsTwo = $defautsTwo;

                return $this;
        }

        /**
         * Get the value of defautsThree
         */
        public function getDefautsThree()
        {
                return $this->defautsThree;
        }

        /**
         * Set the value of defautsThree
         */
        public function setDefautsThree($defautsThree): self
        {
                $this->defautsThree = $defautsThree;

                return $this;
        }

        /**
         * Get the value of experience
         */
        public function getExperience()
        {
                return $this->experience;
        }

        /**
         * Set the value of experience
         */
        public function setExperience($experience): self
        {
                $this->experience = $experience;

                return $this;
        }
    }