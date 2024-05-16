<?php
$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

foreach ($users as $user){
    echo $user["firstName"] . " " . $user["lastName"] . "<br>";
}
?>