<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$con = mysql_connect( 'localhost', 'root', '' ) ;
	mysql_select_db( 'teste', $con );

	$CRM = mysql_real_escape_string( $_REQUEST['crm'] );

	$medico = array();

	$sql = "SELECT  nomemedico
			FROM medico
			WHERE crm like '$CRM'
			ORDER BY nomemedico";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
		$medico[] = array(
			'nomemedico'			=> $row['nomemedico'],
		);
	}

	echo( json_encode( $medico ) );
	?>