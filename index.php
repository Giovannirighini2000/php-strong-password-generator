<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- html e form richesta lunghezza password da generare con get....... con metodo post sarebbe piu sicuro per non mostrare la password nell url in maniera piu "sicura"-->
    <div class="container">
        <h1 class='title'>
            Strong Password Generator
        </h1>
        <h2 class='title-main'>Genera una Password sicura </h2>
        <form action="index.php" method="get" class='body-form'>
		    <p for="lunghezza_password">Lunghezza password:</p>
		    <input type="number" name="lunghezza_password_casuale" min="8" max="15" required>
		    <button type="submit">Invia</button>
	    </form>

    </div>
</body>
</html>
<?php
if (isset($_GET['lunghezza_password_casuale'])) {
	$lunghezza = $_GET['lunghezza_password_casuale'];
    ?>

	 <!-- caratteri possibili che possono essere generati separandoli per una possibile scelta se unirli o no in una futura implementazione -->
	<?php
    $lettere_minuscole ='abcdefghijklmnopqrstuvwxyz';
    $lettere_maiuscole ='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $caratteri_numerici ='0123456789';
    $caratteri_speciali ='!@#$%^&*';
    // concateno le stringhe dei caratteri
    $caratteri_possibili_generabili = $lettere_minuscole . $lettere_maiuscole . $caratteri_numerici . $caratteri_speciali;
    ?>

	<!-- funzione genera password attraverso  
     diversi metodi possibili rand : non rende valori criptografici sicuri /random_bytes :  rende valori crittografici adatti per l'uso crittografico / random_int : genera interi criptografici sicuri
     prendo un carattere casuale  da 0 a la lunghezza massima lunghezza dei caratteri scritti nelle stringhe in precedenza
     che viene attraversato dal ciclo in base alla lunghezza della value imput richiesto con il form all'utente    -->
    <?php
	$password_generata = '';
	for ($i = 0; $i < $lunghezza; $i++) {
		$password_generata .= $caratteri_possibili_generabili[random_int(0, strlen($caratteri_possibili_generabili) - 1)];
	}

	echo "Password: $password_generata";
} else {
	echo "Nessun parametro inserito";
}
?>

