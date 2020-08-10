<?php

// GD é uma biblioteca de imagens do php

$imagem = imagecreatetruecolor(300,300);


$cor = imagecolorallocate($imagem, 12, 10, 90);
imagefill($imagem, 0, 0, $cor);

//converte o arquivo criado em imagem
header("Content-Type: image/jpeg");
/*mostra/salva na tela a imagem, se colocar null no segundo parametro ele só mostra uma imagem, se usar 
um nome ele salva na pagina raiz do sistema. */
imagejpeg($imagem, null, 100);