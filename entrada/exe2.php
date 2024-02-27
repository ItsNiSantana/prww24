<?php
$name= $_GET['name'];
$email= $_GET['email'];
$password= $_GET['password'];
echo $name . "\n";
echo $email . "\n";
echo $password . "\n";
$senha = 26;

if($password==$senha)
    echo "Logado com sucesso";
else{
    echo "Email/Senha invalida(o). \n Tente outra vez.";
    
}
?>