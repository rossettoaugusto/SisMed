<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$con = mysql_connect( 'localhost', 'root', '' ) ;
	mysql_select_db( 'teste', $con );

	$identidade = mysql_real_escape_string( $_REQUEST['identidade'] );

	$paciente = array();

	$sql = "SELECT  nome
			FROM paciente
			WHERE identidade=$identidade
			ORDER BY nome";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
		$paciente[] = array(
			'nome'			=> $row['nome'],
		);
	}

	echo( json_encode( $paciente ) );