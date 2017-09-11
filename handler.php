<?php
ini_set("user_agent","Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)");
set_time_limit(0);

try {
	
	
$PDO = new PDO("mysql:host=localhost;dbname=music","root","");
$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	
	echo $e->getMessage();
	
	}

include_once("simple_html_dom.php");


if(isset($_POST['target']) AND $_POST['target'] == "one") {

		if(!empty($_POST['url'])){
			$html = file_get_html($_POST['url']);

		foreach ($html->find("a") as $key => $value) {
			
			if(preg_match("/\/{1}[a-z0-9\_\-]+\/{1}[a-z0-9\_\-]+\/{1}/", $value->href) > 0){
				$b .= $value->href.'<br>';
			}
		}

		echo $b;

		}else{
			echo "Ссылка не указана!";
		}

}






?>


<!-- http://storage.mp3.cc/download/69724782/RFZMWVRCMk93OHF6dG9hUkNuS1VIcGs1TzB1L0pPQUJTeGtDS2k0OEdHb3gwbEFxNk1pa2lsOE1MbnlvNnpsSHhxNmE1TUVraFJEQkdDUm1IV1dPNVprSUNJc3hscnhVVjFkdTgvaEw3UzVUUXNpT2ZvbWFHWk1sVmU5RGVyL0M/katy-perry-feat.-skip-marley-chained-to-the-rhythm_(mp3.cc).mp3 -->