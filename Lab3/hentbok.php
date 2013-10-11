<?php
include 'database.php';
include 'kjop.html';
ini_set('error_reporting', E_ALL);



IF($hent)
	$klasse = $_POST['klasse'];
    echo $klasse;	
    
	{	$query= "SELECT * FROM bokinfo";
	
	



//WHERE bokinfo.klasse = ".'"'.$klasse;

	

	
	
		$result=mysql_query($query);	// sender sql sp�rringen inn til basen, hente alt fra tabellene kunde og venner

		$num=mysql_numrows($result);	// finner antall poster vi fant
		mysql_close();
	
		

		echo "<b><center>Database Output</center></b><br><br>";
		$i=0;
		/*echo "<tr><td> bokid </td>" . 
		"<td> *tittel* </td>" . "<td> *forfatter* </td>" . "<td> *ISBN* </td>" . 
		"<td> *sider* </td>" . "<td> *pris* </td>" . "<td> *tilstand* </td>" . 
		"<td> *om_boka* </td>" . "<td> *klasse* </td>" . "<td> *fag* </td>" . 
		"<td> *navn* </td>" . "<td> *telefonnr* </td>" . "<td> *mail* </td>" . 
		 "<td> *annet* </td>" ."</tr><br>"; */

		// g�r i l�kke og skriver en tekst for hver post	
		// alt vi henta fra basen ligger i $result
		while ($i < $num) 
		{	
			$bokid=mysql_result($result,$i,"bokid");
			$tittel=mysql_result($result,$i,"tittel"); 
			$forfatter=mysql_result($result,$i,"forfatter");
			$ISBN=mysql_result($result,$i,"ISBN");
			$sider=mysql_result($result,$i,"sider");
			$pris=mysql_result($result,$i,"pris");
			$tilstand=mysql_result($result,$i,"tilstand");
			$om_boka=mysql_result($result,$i,"om_boka");
			$klasse=mysql_result($result,$i,"klasse");
			$fag=mysql_result($result,$i,"fag");
			$navn=mysql_result($result,$i,"navn");
			$telefonnr=mysql_result($result,$i,"telefonnr");
			$mail=mysql_result($result,$i,"mail");
			$annet=mysql_result($result,$i,"annet");
			 /*echo "<tr><td> $bokid </td>" . "<td> $tittel </td>" . "<td>  $forfatter </td>" . "<td>$ISBN </td>" . 
			 "<td>$sider </td>" ."<td>$pris </td>" ."<td>$tilstand </td>" . "<td>$om_boka</td>" . "<td>$klasse </td>" . 
			 "<td>$fag </td>" . "<td>$navn </td>" . "<td>$telefonnr </td>" ."<td>$mail </td>" . 
			 "<td>$annet</td>" . "</tr><br>"; */
		
			 
			 
			// r� tekst, ikke tabell
			echo //skal egentlig ikke hente alle på en gang..
			"<p>$bokid</p>". 
			"<p>Tittel: $tittel </p>" .  
			"<p>Forfatter: $forfatter </p>" .
			"<p>ISBNnr: $ISBN </p>" . 
			"<p>Sider: $sider</p>" . 
			"<p>Pris: $pris </p>" . 
			"<p>Bokas tilstand: $tilstand </p>" .
			"<p>andre detaljer om boken: $om_bok </p>" .  
			"<p>Klasse:$klasse </p>" .//denne skal brukes til å sile select søkene
			"<p>Fag: $fag </p>" . 
			"<br><br><p>Selgers navn: $navn </p>" . 
			"<p>Tlf: $telefonnr </p>" . 
			"<p>Mail: $mail</p>" .
			"<p>Tillegsbeskjed:$annet</p>" ;
			$i++;
			
		}
		
	} // slutt $hente
	
?>