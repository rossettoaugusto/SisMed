<?php
	header( 'Cache-Control: no-cache' );
	header( 'Content-type: application/xml; charset="utf-8"', true );

	$con = mysql_connect( 'localhost', 'root', '' ) ;
	mysql_select_db( 'teste', $con );

	$medicamento = mysql_real_escape_string( $_REQUEST['medicamento'] );

	$remedio = array();

	$sql = "SELECT  descricao
			FROM medicamentos
			WHERE medicamento like '$medicamento'
			ORDER BY descricao";
	$res = mysql_query( $sql );
	while ( $row = mysql_fetch_assoc( $res ) ) {
		$remedio[] = array(
			'descricao'			=> $row['descricao'],
		);
	}

	echo( json_encode( $remedio ) );
	?>