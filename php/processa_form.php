<?php
include 'conexao.php'; 

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$nome = $conn->real_escape_string($nome);
$email = $conn->real_escape_string($email);
$telefone = $conn->real_escape_string($telefone);
$mensagem = $conn->real_escape_string($mensagem);

$sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        alert('Mensagem enviada com sucesso! Obrigada por nos contatar.');
        window.history.back(); 
    </script>";
} else {
    $erro = $conn->error;
    echo "<script>
        alert('Erro ao enviar: $erro');
        window.history.back(); 
    </script>";
}

$conn->close();
?>
