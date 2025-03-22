<?php

function validarSenha($senha){

$requisitos = [
 'min_caracter' => 8,
 'maiuscula' => true,
 'minuscula' => true,
 'numero' => true,
 'especial' => true,
]; 

if(strlen($senha) < $requisitos['min_caracter']){
 return "<p>A senha deve ter pelo menos ". $requisitos['min_caracter']. " caraceteres.</p>";
}


if($requisitos['maiuscula'] && !preg_match('/[A-Z]/', $senha)){
 return "<p>A senha deve ter pelo menos uma letra maiúscula</p>";
}

if($requisitos['minuscula'] && !preg_match('/[a-z]/', $senha)){
 return "<p>A senha deve ter pelo menos uma letra minúscula</p>";
}

if($requisitos['numero'] && !preg_match('/[0-9]/', $senha)){
 return "<p>A senha deve ter pelo menos um número</p>";
}


if($requisitos['especial'] && !preg_match('/[^a-zA-Z0-9]/', $senha)){
 return "<p>A senha deve ter pelo menos um caracter especial.</p>";
}

return true;
}


?>