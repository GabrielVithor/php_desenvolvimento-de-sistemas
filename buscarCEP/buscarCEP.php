<?php
function getEndereco($cep){
    $cep = preg_replace("/[^0-9]/","",$cep);
    $url = "http://viacep.com.br/ws/$cep/xml/";
    $xml = simplexml_load_file($url);
    return $xml;
}

$endereco =getEndereco($_POST["txtCEP"]);

echo "Rua: $endereco->logradouro <br>";
echo "Complemento: $endereco->complemento <br>";
echo "Bairro: $endereco->bairro<br>";
echo "Cidade: $endereco->localidade<br>";
echo "Estado: $endereco->uf<br><br>";
?>