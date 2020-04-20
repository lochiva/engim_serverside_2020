<?php

$this->layout= 'learningLayout';


?>

<p>sono nel file first.php</p>

<p> hai scelto <?= $colors[0] ?> e <?= $colors[1] ?> </p> 

<?php

echo $this->element('colors');

echo $this->element('colors', ['colors'=> ['grey','blue']]);