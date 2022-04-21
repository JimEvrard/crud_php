<link rel="stylesheet" href="../assets/style.css">

<a href=".././login/principale.php"><button>Accueil</button></a>
<body>
		<h1>Ajouter un contact</h1>
		<form style="width: 200px; margin:auto; margin-top:100px;" method="post">

        <label for="nom"> Nom </label><input type="text" name="nom" id="nom" placeholder="Entrez votre nom" /><br/><br/>
<label for="prenom">Prénom </label><input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom" /><br/><br/>
<label for="age">Age </label><input type="text" name="age" id="age" placeholder="Entrez votre age" /><br/><br/>
<label for="ancienneté">Ancienneté </label><input type="text" name="anciennete" id="anciennete" placeholder="Entrez votre ancienneté" /><br/><br/>
<label for="username">Username </label><input type="text" name="username" id="username" placeholder="Entrez votre username" /><br/><br/>
<label for="password">Password </label><input type="text" name="password" id="password" placeholder="Entrez votre password" /><br/><br/>

			<input type="submit" value="Ajouter">
		</form>
		<?php
		if (isset($_POST['username'])) {
			$mysqli = new mysqli("localhost", "root", "", "essai");
            $mysqli->set_charset("utf8");
            $requete = "INSERT INTO worker VALUES('" . $_POST['nom'] . "', '" . $_POST['prenom'] . "', '" . $_POST['age'] . "', '" . $_POST['anciennete'] . "', '" . $_POST['username'] . "', '" . $_POST['password'] . "')";
		    $resultat = $mysqli->query($requete);
            if ($resultat)
                echo "<p>Le contact a été ajouté</p>";
            else
                echo "<p>Erreur</p>";
		}
		?>
	</body> 