<?php
for($i = 0; $i < 20; $i++) {
	if($i % 3 == 0) echo "fizz";
	if($i % 5 == 0) echo "buzz";
	if(($i % 3) && ($i % 5)) echo $i;
	echo "\n";
}
?>
