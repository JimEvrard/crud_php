
  <?php


    class Student extends Travailleurs implements StudentInterface, ExploiteInterface
    {
        public function presentation()

        {
            echo 'Mon nom est ' . $this->nom . ', mon prénom est ' . $this->prenom . " j'ai " . $this->getAge() . ' ans. Je travail depuis ' . $this->getAnciennete() . ' ans et je suis un étudiant';
            echo "<br>";
        }

        public function travailler(Responsable $resp)
        {
            echo $resp->getNom() . ' demande à ' . $this->prenom . ' de travailler <br>';
        }
    }

    ?>