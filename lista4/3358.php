<?php
function verificar($sobrenome) {
    $padrao = '/[^aeiouAEIOU]{3}/';
    if (preg_match($padrao, $sobrenome)) {
        return "$sobrenome nao eh facil";
    } else {
        return "$sobrenome eh facil";
    }
}

$casos = intval(fgets(STDIN));

for ($i = 0; $i < $casos; $i++) {
    $sobrenome = trim(fgets(STDIN)); 
    echo verificar($sobrenome) . "\n"; 
}
?>