<?php
$hash = "$2y$10$/uDAfrebVGFPo6esmPwL5O11ITjPTLtvrLmyKur9SOafU9wf0UvgS";

$senha = "1234";
//password_verify -> verifica se o hash bate com a senha para confirmar a codificação
if (password_verify($senha, $hash)) {
    echo "Senha CORRETA !";
}else{
    echo "Senha ERRADA !";
}