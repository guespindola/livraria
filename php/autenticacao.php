<?php



$email = $_POST['email'];
$senha = $_POST['senha'];


echo $email."<br>";
echo $senha;


if($email=="admin@livraria.com" && $senha=="qwe123#") {
    header("Location: ../paginas/registroLivrosForm.html");
} else {
    header("Location: ../paginas/mensagemErro.html");
}


?>