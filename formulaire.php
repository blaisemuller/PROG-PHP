<?php

	if (!empty($_POST['lname'])) { //Champ du Nom
		if(!ctype_alpha($_POST['lname'])){
			echo "Erreur de Nom" . "<br>";
		}

		else {
			echo "Nom conforme" . "<br>";
		}
	}

	if (!empty($_POST['fname'])) { //Champ du Prénom
		if(!ctype_alpha($_POST['fname'])){
			echo "Erreur de Prénom" . "<br>";
		}

		else {
			echo "Prénom conforme" . "<br>";
		}
	}

	if (!empty($_POST['age'])) { // Champ de l'Age
		if(!ctype_digit($_POST['age'])){
			echo "Erreur d'Age" . "<br>";
		}

		else {
			echo "Age conforme" . "<br>";
		}
	}
		

	if (!empty($_POST['mail'])) { //Champ du Mail
		if(filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)===false){
			echo "Erreur de Mail" . "<br>";
		}

		else {
			echo "Courriel conforme" . "<br>";
		}
	}
		
		

	if (!isset($_POST['choix[]'])){ //Choix d'Orientation 
		foreach ($_POST['choix'] as $val){
			echo $val."<br>";
		}
	}
	
	else{
		echo "Vous n'avez rien coché la case" . "<br>";
	}


J'ai supprim� deux blocs .
S
	$df= fopen('/home/a-derchain/Bureau/liste.pdf','w');  //Met les informations dans un pdf
	fwrite($df,$_POST['lname'].", ".$_POST['fname'].", ".$_POST['age'].", "
		.$_POST['rue'].", ".$_POST['cp'].", ".$_POST['ville'].", ".$_POST['mail'].", ".$_POST['num-tel']);
	fclose($df);


?>
