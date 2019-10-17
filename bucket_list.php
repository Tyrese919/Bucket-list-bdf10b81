<?php

echo "hoeveel items wil je toevoegen aan je bucketlist?".PHP_EOL;
$nummer = readline();

$bucket = "wat wil je toevoegen aan je bucket list";

$Lijst = array();

for ($i=0; $i < $nummer ; $i++) {
 echo "$bucket".PHP_EOL;
 $wantTo = readline();

 array_push ( $Lijst, $wantTo );
}

print_r( $Lijst );

?>
  
