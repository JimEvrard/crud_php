<?php

    abstract class Travailleurs
    {
        public const NB_EMPLOYE_MAX = 10;
        public static $nbEmploye = 0;

        public static function incrementeEmploye()
        {
            self::$nbEmploye++;
        }

        public function pourcentage()
        {
            echo 'il y a ' . (self::$nbEmploye * 100) / self::NB_EMPLOYE_MAX . "% de postes occupés sur une capacité de  " . self::NB_EMPLOYE_MAX . " employés au total";
        }
        // Attributs Protected => pas besoin d'utiliser la methode get() pour les voir dans les class / Private => Doit utiliser methode get
        protected $nom;
        protected $prenom;
        private $age;
        private $anciennete;

        // Constructeur
        public function __construct($nom, $prenom, $age, $anciennete)
        {
            if (self::$nbEmploye < self::NB_EMPLOYE_MAX) {

                $this->SetNom($nom);
                $this->setPrenom($prenom);
                $this->setAge($age);
                $this->setAnciennete($anciennete);
                $this->incrementeEmploye();
            } else {
                echo "trop de monde";
            }
        }
        // Get & Set
        public function getNom()
        {
            return $this->nom;
        }
        public function getPrenom()
        {
            return $this->prenom;
        }
        public function getAge()
        {
            return $this->age;
        }
        public function getAnciennete()
        {
            return $this->anciennete;
        }


        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        public function setAnciennete($anciennete)
        {
            if ($anciennete < 40) return $this->anciennete = $anciennete;
        }


        public function setAge($age)
        {
            if ($age > 18 && $age < 65) return $this->age = $age;
        }
        // Methode
        abstract  public function presentation();
    }


    ?>