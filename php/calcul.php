
<?php
	
	$factures_achat = $_POST['factures_achat'];
	$factures_vente = $_POST['factures_ventes'];
	$salaries = $_POST['salaries'];

	$resultat = array('min' => 3*$factures_achat+$factures_vente-$salaries,
		'max' => 4*$factures_achat+$factures_vente+$salaries
	);

	echo json_encode($resultat);
