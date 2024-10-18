<?php 
    require 'conexao.php';

$medicamento = $_POST['medicamentos'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];
$categoria = $_POST['categoria'];
$validade = $_POST['dataValidade'];

$stmt = $conn->prepare("INSERT INTO tbmedicamentos (medicamentos, preco, qtd, categoria, dataValidade) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sdiss", $medicamento, $preco, $qtd, $categoria, $validade);

if ($stmt->execute()) {
    echo "Medicamento cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar medicamento: " . $stmt->error;
}

if ($stmt->execute()) {
    echo "Medicamento cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar medicamento: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

