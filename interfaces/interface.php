<?php 

interface ExploiteInterface
{
    public function travailler(Responsable $resp);
}

interface ResponsableInterface
{
    public function ajouterEmploye(Student $stu);
    public  function afficherEquipe();
    public function travaillerEquipe(Responsable $resp);
}

interface StudentInterface
    {
        public function presentation();
    }
?>