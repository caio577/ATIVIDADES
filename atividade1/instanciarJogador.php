<?php
include "classJogador.php";

include "cabecalho.php";

$c= new Jogador(
    $_POST["Nome"]
);


$_SESSION["jogador"][] = $c;

?>

<h3>Jogador cadastrado com sucesso</h3>

</body>
</html>