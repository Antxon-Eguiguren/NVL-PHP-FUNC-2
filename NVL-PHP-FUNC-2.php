<?php
	
	$palabra = "UpgradeHub";
	$letra = "u";

	function cuentaLetras (string $palabra, string $letra) {
		echo substr_count($palabra, $letra) + substr_count($palabra, strtoupper($letra));
	}

	cuentaLetras($palabra, $letra);

?>