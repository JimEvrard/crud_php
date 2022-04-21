<?php
    // // ---------------------------------------------- CREATION STUDENTS ----------------------------------------------    
    $student1 = new Student('Nom1', 'Prenom1', 45, 34);
    $student2 = new Student('Nom2', 'Prenom2', 32, 23);
    $student3 = new Student('Nom3', 'Prenom3', 32, 23);
    $student4 = new Student('Nom4', 'Prenom4', 32, 23);
    $student5 = new Student('Nom5', 'Prenom5', 32, 23);

    // ---------------------------------------------- CREATION STAGIAIRES ----------------------------------------------
    $stagiaire = new Stagiaire('Couille', 'Slava', 19, 23);

    // ---------------------------------------------- CREATION RESPONSABLES ----------------------------------------------
    $responsable = new Responsable('TDC', 'Axel', 23, 34);
    ?>


    <!-- // ----------------------------------------------DONNEES ---------------------------------------------- -->

    <div class="align">
        <h2>Présentation de l'entreprise</h2>
        <?php $responsable->pourcentage(); ?>
    </div>

    <div class="align">
        <h2>Présentation des Students</h2>
        <?php
        $student1->presentation();
        $student2->presentation();
        $student3->presentation();
        $student4->presentation();
        $student5->presentation();
        ?>
    </div>
    <div class="align">
        <h2>Présentation des Stagiaire</h2>
        <?php $stagiaire->presentation(); ?>
    </div>
    <div class="align">
        <h2>Présentation des Responsables</h2>
        <?php $responsable->presentation(); ?>
    </div>

    <div class="align">
        <h2>Présentation des Responsables et de leur équipe</h2>
        <?php $responsable->setEquipe([$student1, $student2, $student3, $student4, $student5, $stagiaire]);
        $responsable->afficherEquipe();
        ?>
    </div>

    <div class="align">
        <h2>Ordres donnés</h2>
        <?php $responsable->faireTravailler($stagiaire);
        $responsable->faireTravailler($student1);
        $responsable->faireTravaillerEquipe($responsable);
        ?>
    </div>
