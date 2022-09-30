<?php	
	session_start() ;
	include("connexionBD.php") ;
	$villeExiste = False ;
	$dbh = connexion() ;		
	$req = "SELECT nom, pays, nbHab FROM Ville" ;		
	$lesVilles = $dbh->query($req) ;
	$lesVilles->setfetchMode( PDO::FETCH_ASSOC);
	foreach( $lesVilles as $uneVille ){
		if( $uneVille['CP'] == $_SESSION['cp'] ){
			$villeExiste = True ;
		}
	}
	if( $villeExiste == False ){
		$ajoutVille = $dbh->prepare("insert into Ville values( :cp , :nomVille )") ;
		$ajoutVille->execute(
								array( ':cp' => $_SESSION['cp'] , ':nomVille' => $_SESSION['ville'] )
							);
	}
	$ajout = $dbh->prepare("insert into Spectateur values( :id , :prenom , :nom , :ddn , :vip , :adresse , :cp , :mdp )") ;
	$ajout->execute(
						array( ':id' => $_SESSION['id'] , ':prenom' => $_SESSION['prenom'] , ':nom' => $_SESSION['nom'] , ':ddn' => $_SESSION['ddn'] , ':vip' => False , ':adresse' => $_SESSION['adresse'] , ':cp' => $_SESSION['cp'] , ':mdp' => $_SESSION['mdp'] )
					);
	header('location:../templates/connexionPerso.php');
	
//Tester avec github
?>


			
		
