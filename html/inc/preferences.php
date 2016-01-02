<?php
	session_start();

	if (isset($_GET["idioma"])) {
		$idioma = $_GET["idioma"];
		$_SESSION["idioma"] = $idioma;
	}
	else if (isset($_SESSION["idioma"])) {
		$idioma = $_SESSION["idioma"];
	}
	else {
		$idioma = "ca";
	}
	
	if ($idioma=="ca") {
	define("TITLE", "TopGuay, Animacions infantils, Pallassos, Festes infantils, teatre de carrer. Maresme, Barcelona");
	define("DESCRIPTION", "TopGuay, Animacions infantils, Festes infantils, Pallassos, Celebracions, teatre de carrer. Al Maresme, Barcelona");
	define("KEYWORDS", "TopGuay, Animacions infantils, Festes infantils, Pallassos, Celebracions, teatre de carrer, Maresme,Barcelona");	
	
	define("TITLE_CONEIXEUNOS_TOPGUAY", "TOPGUAY, Empresa d'espectacles infantils. Barcelona. Maresme");
	define("TITLE_CONEIXEUNOS_PROJECTE", "TOPGUAY, Projecte Social. Barcelona. Maresme");
	define("TITLE_CONEIXEUNOS_CONTACTA", "TOPGUAY, Contacteu-nos. Barcelona. Maresme");
	define("TITLE_CONEIXEUNOS_BLOG", "TOPGUAY, Coneixeu-nos, Blog. Barcelona. Maresme");
	define("TITLE_SERVEIS_LAPECA", "TOPGUAY, Espectacles d'animació, La Peca. Barcelona. Maresme");
	define("TITLE_SERVEIS_CATARSIS", "TOPGUAY, Espectacles d'animació, Catarsis. Barcelona. Maresme");
	define("TITLE_SERVEIS_MARRAMEU", "TOPGUAY, Espectacles d'animació, Marrameu. Barcelona. Maresme");
	define("TITLE_SERVEIS_AVITIO", "TOPGUAY, Espectacles d'animació, L'avi tió, Caga millor!. Barcelona. Maresme");
	define("TITLE_SERVEIS_AGENDASTJORDI", "TOPGUAY, Espectacles d'animació, L'agenda de Sant Jordi l'auténtica.... Barcelona. Maresme");
	define("TITLE_SERVEIS_GAGSADULTS", "TOPGUAY, Espectacles d'animació, Gags de Clown adults. Barcelona. Maresme");

	define("TITLE_SERVEIS_CERCAVILES", "TOPGUAY, Teatre de carrer, Cercaviles i Rues. Barcelona. Maresme");
	define("DESCRIPTION_SERVEIS_CERCAVILES", "TOPGUAY, cercaviles i rues. Espectacle de carrer, alegre amb el llenguatge musical de les gralles i la percussió.");
	define("KEYWORDS_SERVEIS_CERCAVILES", "Carcavila, rua, teatre de carrer, Barcelona. Maresme");		



	define("TITLE_SERVEIS_PERSONATGES", "TOPGUAY, Teatre de carrer, Personatges populars. Barcelona. Maresme");
	define("TITLE_SERVEIS_ACCIONS", "TOPGUAY, Teatre de carrer, Accions a la carta. Barcelona. Maresme");
	define("TITLE_SERVEIS_SPEEK", "TOPGUAY, Teatre de carrer, Speek Còmic. Barcelona. Maresme");

	define("TITLE_SERVEIS_DIVERTALLERS", "TOPGUAY, Diver Tallers. Barcelona. Maresme");
	define("DESCRIPTION_SERVEIS_DIVERTALLERS", "TOPGUAY Diver Tallers, tallers infantils, activitats lúdiques i educatives, cuenta cuentos, reciclatge. Maresme. Barcelona");		
	define("KEYWORDS_SERVEIS_DIVERTALLERS", "TOPGUAY,Tallers,tallers infantils, activitats,lúdiques,educatives,contacontes,contes,reciclatge,educació");			

	define("TITLE_SERVEIS_TALLERCIRC", "TOPGUAY, Taller de Circ. Barcelona. Maresme");
	define("TITLE_SERVEIS_TALLERNADALENC", "TOPGUAY, Taller Nadalenc. Barcelona. Maresme");
	define("TITLE_SERVEIS_TALLERCARNESTOLTES", "TOPGUAY, Taller per Carnestoltes. Barcelona. Maresme");
	define("TITLE_SERVEIS_TALLERSMEDIEVALS", "TOPGUAY, Tallers Medievals. Barcelona. Maresme");
	define("TITLE_SERVEIS_FESTESTEMATIQUES", "TOPGUAY, Festes Temàtiques. Barcelona. Maresme");
	define("TITLE_SERVEIS_PUZZLEQUERIA", "TOPGUAY, Activitats ludico-educatives, Puzzlequeria Trencaclosques. Barcelona. Maresme");
	define("TITLE_SERVEIS_NAMASKAR", "TOPGUAY, Espectacles d'intercanvi cultural, Namaskar. Barcelona. Maresme");
	define("TITLE_SERVEIS_ENLLACOS", "TOPGUAY, Enllaços relacionats. Barcelona. Maresme");
	
	// CURRSECTION
	$SECCIONFLASH = array();
	$SECCIONFLASH[] = "";

	$SECCIONFLASH[1] = "1";
	$SECCIONFLASH[2] = "1";
	$SECCIONFLASH[3] = "1";
	$SECCIONFLASH[4] = "2";
	$SECCIONFLASH[5] = "2";
	$SECCIONFLASH[6] = "2";
	$SECCIONFLASH[7] = "2";
	$SECCIONFLASH[8] = "2";
	$SECCIONFLASH[9] = "2";
	$SECCIONFLASH[10] = "3";
	$SECCIONFLASH[11] = "3";
	$SECCIONFLASH[12] = "3";
	$SECCIONFLASH[13] = "4";
	$SECCIONFLASH[14] = "4";
	$SECCIONFLASH[15] = "4";
	$SECCIONFLASH[16] = "4";
	$SECCIONFLASH[17] = "4";
	$SECCIONFLASH[18] = "4";
	$SECCIONFLASH[19] = "4";
	$SECCIONFLASH[20] = "5";
	$SECCIONFLASH[21] = "4";
	$SECCIONFLASH[22] = "6";
	}
	else if ($idioma=="es") {
		// AQUÍ los defines de los ESP
	define("TITLE", "TopGuay, Payasos en Barcelona, Maresme");
	define("DESCRIPTION", "TopGuay, Animaciones infantiles en Barcelona, Maresme. Payasos en Barcelona. Fiestas de cumpleaños.");	
	define("KEYWORDS", "TopGuay, Animaciones infantiles, Fiestas infantiles, Payasos, Teatro de calle. Barcelona");	
	
	define("TITLE_CONEIXEUNOS_TOPGUAY", "TOPGUAY, empresa de animación y espectáculos infantiles en Barcelona");
	define("DESCRIPTION_CONEIXEUNOS_TOPGUAY", "TopGuay es una empresa de animación infantil, espectáculos, payasos, situada en el maresme, barcelona");	
	define("KEYWORDS_CONEIXEUNOS_TOPGUAY", "empresa, animación infantil, espectáculos infantiles, payasos, maresme, barcelona");		
	
	
	define("TITLE_CONEIXEUNOS_PROJECTE", "TOPGUAY, Proyecto Social");
	define("TITLE_CONEIXEUNOS_CONTACTA", "TOPGUAY, Contactar");
	define("TITLE_CONEIXEUNOS_BLOG", "TOPGUAY, Blog");

	define("TITLE_SERVEIS_LAPECA", "TOPGUAY, Espectáculos de animación y payasos. Payasos en Barcelona");
	define("DESCRIPTION_SERVEIS_LAPECA", "Espectáculo de Payasos. La Peca Pocasolta Tirallufes decidida a venir a tu fiesta para explicar e invitaros a sus aventuras y desventuras. Espectáculo de Payasos en Barcelona. Maresme");		
	define("KEYWORDS_SERVEIS_LAPECA", "TOPGUAY, Espectáculos de animación, Payasos, Barcelona, Maresme");	


	define("TITLE_SERVEIS_CATARSIS", "TOPGUAY, Catársis. Espectáculo de carnaval infantil. Barcelona. Maresme");
	define("DESCRIPTION_SERVEIS_CATARSIS", "Ésta es nuestra palabra mágica por Carnaval! Catarsis nos llevará a la gran fiesta de la diversión, la juerga y las danzas exóticas en un combinado muy dinámico y participativo que te hará arrancar el culo del sofá, ponerte un disfraz y venir con nosotros a bailar. Barcelona. Maresme");	
	define("KEYWORDS_SERVEIS_CATARSIS", "carnaval, infantil, espectáculo, animación, barcelona");	
	
	
	
	define("TITLE_SERVEIS_MARRAMEU", "TOPGUAY, Espectáculos de animación, Marrameu. Barcelona. Maresme");
	define("TITLE_SERVEIS_AVITIO", "TOPGUAY, Espectáculos de animación, El abuelo Tió, Caga mejor!. Barcelona. Maresme");
	define("TITLE_SERVEIS_AGENDASTJORDI", "TOPGUAY, Espectáculos de animación, L'agenda de Sant Jordi l'auténtica... Barcelona. Maresme");
	define("TITLE_SERVEIS_GAGSADULTS", "TOPGUAY, Espectáculos de animación, Gags de Clown adultos. Barcelona. Maresme");

	define("TITLE_SERVEIS_CERCAVILES", "TOPGUAY, Teatro de calle, Pasacalles, Ruas. Barcelona. Maresme");
	define("DESCRIPTION_SERVEIS_CERCAVILES", "TOPGUAY, pasacalles y ruas. Espectáculo de calle, alegre con el lenguaje musical de las chirimías y la percusión. Barcelona, Maresme.");
	define("KEYWORDS_SERVEIS_CERCAVILES", "Pasacalles, rua, teatro de calle, Barcelona. Maresme");		
	
	
	
	
	define("TITLE_SERVEIS_PERSONATGES", "TOPGUAY, Teatro de calle, Personajes populares. Barcelona. Maresme");
	define("TITLE_SERVEIS_ACCIONS", "TOPGUAY, Teatro de calle, Acciones a la carta. Barcelona. Maresme");
	define("TITLE_SERVEIS_SPEEK", "TOPGUAY, Teatro de calle, Speek Cómico. Barcelona. Maresme");
	define("TITLE_SERVEIS_DIVERTALLERS", "TOPGUAY Diver Talleres. Barcelona. Maresme");
	define("DESCRIPTION_SERVEIS_DIVERTALLERS", "TOPGUAY Diver Talleres, talleres infantiles, actividades lúdicas y educativas, cuenta cuentos, reciclaje. Barcelona. Maresme");	
	define("KEYWORDS_SERVEIS_DIVERTALLERS", "TOPGUAY,Talleres,talleres infantiles, actividades,lúdicas,educativas,cuentacuentos, reciclaje. Barcelona. Maresme");		
	
	
	define("TITLE_SERVEIS_TALLERCIRC", "TOPGUAY, Taller de Circo. Barcelona. Maresme");
	define("TITLE_SERVEIS_TALLERNADALENC", "TOPGUAY, Taller Navideño. Barcelona. Maresme");
	define("TITLE_SERVEIS_TALLERCARNESTOLTES", "TOPGUAY, Taller de Carnaval. Barcelona. Maresme");
	define("TITLE_SERVEIS_TALLERSMEDIEVALS", "TOPGUAY, Talleres Medievales. Barcelona. Maresme");
	define("TITLE_SERVEIS_FESTESTEMATIQUES", "TOPGUAY, Fiestas Temáticas. Barcelona. Maresme");
	define("TITLE_SERVEIS_PUZZLEQUERIA", "TOPGUAY, Puzzlequeria Rompecabezas. Barcelona. Maresme");
	define("TITLE_SERVEIS_NAMASKAR", "TOPGUAY, Espectáculos de intercambio cultural, Namaskar. Barcelona. Maresme");
	define("TITLE_SERVEIS_ENLLACOS", "TOPGUAY, Enlaces relacionados. Barcelona. Maresme");
	
	// CURRSECTION
	$SECCIONFLASH = array();
	$SECCIONFLASH[] = "";

	$SECCIONFLASH[1] = "7";
	$SECCIONFLASH[2] = "7";
	$SECCIONFLASH[3] = "7";
	$SECCIONFLASH[4] = "8";
	$SECCIONFLASH[5] = "8";
	$SECCIONFLASH[6] = "8";
	$SECCIONFLASH[7] = "8";
	$SECCIONFLASH[8] = "8";
	$SECCIONFLASH[9] = "8";
	$SECCIONFLASH[10] = "9";
	$SECCIONFLASH[11] = "9";
	$SECCIONFLASH[12] = "9";
	$SECCIONFLASH[13] = "10";
	$SECCIONFLASH[14] = "10";
	$SECCIONFLASH[15] = "10";
	$SECCIONFLASH[16] = "10";
	$SECCIONFLASH[17] = "10";
	$SECCIONFLASH[18] = "10";
	$SECCIONFLASH[19] = "10";
	$SECCIONFLASH[20] = "11";
	$SECCIONFLASH[21] = "10";
	$SECCIONFLASH[22] = "12";
	}
	
	// inits de galeria flash
	$GALERIA = array();
	$GALERIA["taller_nadal"][] = array("boles1.jpg", "boles2.jpg");
	$GALERIA["taller_nadal"][] = array("pinces1.jpg", "pinces2.jpg");
	
	
	$idioma_str = "";
	if (isset($idioma) && !empty($idioma)) {
		if ($idioma=="ca") {
			$idioma_str = $idioma;
		}
		else if ($idioma=="es") {
			$idioma_str = $idioma;
		}
	}
	
	/*// TITLE DE LA WEB		
	define("TITLE_TOPGUAY", "TOPGUAY, Top Guay");
	define("TITLE_PROJECTESOCIAL", "TOPGUAY, Projecte Social");
	define("TITLE_CONTACTEUNOS", "TOPGUAY, Contacteu-nos");
	define("TITLE_LAPECA", "TOPGUAY, Espectacles d'animació, La Peca");
	define("TITLE_CATARSIS", "TOPGUAY, Espectacles d'animació, Catarsis");
	define("TITLE_MARRAMEU", "TOPGUAY, Espectacles d'animació, Marrameu");
	define("TITLE_AVITIO", "TOPGUAY, Espectacles d'animació, L'avi Tió, Caga millor!");
	define("TITLE_AGENDASANTJORDI", "TOPGUAY, Espectacles d'animació, L'Agenda de Sant Jordi l'autèntica...");
	define("TITLE_GAGSDECLOWN", "TOPGUAY, Espectacles d'animació, Gags de Clown");
	define("TITLE_CERCAVILES", "TOPGUAY, Teatre de carrer, Cercaviles i Rues");
	define("TITLE_PERSONATGESPOPULARS", "TOPGUAY, Teatre de carrer, La Calaixera");
	define("TITLE_ACCIONSALACARTA", "TOPGUAY, Teatre de carrer, Accions a la carta");
	define("TITLE_SPEEKCOMIC", "TOPGUAY, Teatre de carrer, Speek Còmic");
	define("TITLE_DIVERTALLERS", "TOPGUAY, Activitats lúdico-educatives, Diver Tallers");*/
?>