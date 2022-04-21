
    <div id="content">
        <!-- tester si l'utilisateur est connecté -->
        <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
                ?>
            <a href=".././formulaires/creationEmploye.php"><button>CREATION EMPLOYES</button></a>
        </div>