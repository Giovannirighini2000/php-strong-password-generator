<?php   
	function generator($password_generata, $lunghezza, $caratteri_possibili_generabili){
        for ($i = 0; $i < $lunghezza; $i++) {
		$password_generata .= $caratteri_possibili_generabili[random_int(0, strlen($caratteri_possibili_generabili) - 1)];
        
	}return $password_generata;
    }
	
?>