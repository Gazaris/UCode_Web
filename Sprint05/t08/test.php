<?php
require_once(__DIR__ . "/Anonymous.php");
$mandarin = get_anonymous("Unknown", "Mandarin", "Ten Rings");
print(implode("", 
	array("name" => $mandarin->getName(),
		"alias" => $mandarin->getAlias(), 
		"affiliation" => $mandarin->getAffiliation())
));
?>