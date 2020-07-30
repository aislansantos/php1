<h1>Teste de cabeçalho</h1>

<?php
if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    echo '<h2>' . $nome . '</h2>';
}
?>
<a href="index.php">index</a>
<hr />
<br />