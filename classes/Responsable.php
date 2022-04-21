<?php
  

class Responsable extends Travailleurs implements ResponsableInterface
    {
        private $equipe = [];

        public function getEquipe()
        {
            return $this->equipe;
        }
        public function setEquipe($equipe)
        {
            $this->equipe = $equipe;
        }
        public function ajouterEmploye(Travailleurs $stu)
        {
            array_push($this->equipe, $stu);
        }
        public function afficherEquipe()
        {
            echo "Le responsable " . $this->getNom() . " a pour équipe <br>";
            echo "<pre>";
            foreach ($this->equipe as $e) {
                echo "L'employé; Nom: " . $e->getNom() . " - ";
                echo "Prénom: " . $e->getPrenom() . " - ";
                echo "Age: " . $e->getAge() . " ans - ";
                echo "dont l'ancienneté est de " . $e->getAnciennete() . " années <br>";
            }
            echo "</pre>";
        }
        public function travaillerEquipe(Responsable $resp)
        {
            echo $resp->getNom() . ' demande à ';

            for ($i = 0; $i < count($this->equipe); $i++) {
                if ($i == count($this->equipe) - 1) {
                    echo " et ";
                } else {

                    echo $i == 0 ? '' : " , ";
                }
                echo $this->equipe[$i]->getNom();
            }
            echo   " d'aller travailler <br>";
        }
        public function presentation()
        {
            echo 'Mon nom est ' . $this->nom . ', mon prénom est ' . $this->prenom . " j'ai " . $this->getAge() . ' ans. Je travail depuis ' . $this->getAnciennete() . ' ans et je suis un Responsable';
            echo "<br>";
        }
        public function faireTravailler(ExploiteInterface $exploiteInterface)
        {
            $exploiteInterface->travailler($this);
        }
        public function faireTravaillerEquipe(ResponsableInterface $responsableInterface)
        {
            $responsableInterface->travaillerEquipe($this);
        }
    }
?>