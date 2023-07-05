<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupera os dados do formulário
  $nome = $_POST["nome"];
  $tipoPessoa = $_POST["tipo_pessoa"];
  $dataNascimento = $_POST["data_nascimento"];
  $telefone = $_POST["telefone"];
  $bairro = $_POST["bairro"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Conecta ao banco de dados (substitua pelos seus próprios dados de conexão)
  $host = "C:\xampp\htdocs\dashboard\myw";
  $username = "";
  $password = "";
  $database = "bd_myw";

  //$conn = new mysqli($servername, $username, $password, $dbname);
  $conn = new mysqli($host, $username, $password, $database);


  // Verifica se a conexão foi estabelecida com sucesso
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  }

  // Insere os dados no banco de dados
  $sql = "INSERT INTO usuarios (nome, tipo_pessoa, data_nascimento, telefone, bairro, email, senha) VALUES ('$nome', '$tipoPessoa', '$dataNascimento', '$telefone', '$bairro', '$email', '$senha')";

  if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
  } else {
    echo "Erro ao cadastrar: " . $conn->error;
  }

  $conn->close();
}
?>