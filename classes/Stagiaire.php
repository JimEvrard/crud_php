<?php



    class Stagiaire extends Travailleurs implements ExploiteInterface
    {

        public function presentation()

        {
            echo 'Mon nom est ' . $this->nom . ', mon prénom est ' . $this->prenom . " j'ai " . $this->getAge() . ' ans. Je travail depuis ' . $this->getAnciennete() . ' ans et je suis un stagiaire';
            echo "<br>";
        }
        public function travailler(Responsable $resp)
        {
            echo $resp->getNom() . ' demande à ' . $this->prenom . ' de chercher un café <br>';
        }
    }
    ?>