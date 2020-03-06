<?php 
include "cabecalho.php";


?>
<?php if($_SESSION){
      echo" <h1>Cadastrar Jogador 1</h1>
        <form action='instanciarJogador.php' method='post'>
            Nome:
            <input type='text' name='nome' placeholder='Digite o nome para o jogador 1...'>
            <br />
            Simbolo :
            <input type='text' name='simbolo' placeholder='X ou O...'/>
            <br/>
            <input type='submit' value='CriarJogador'/>"
            ?>
</body>

</html>