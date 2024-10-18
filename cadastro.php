<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Medicamentos</title>
</head>
<body>
    <h1>Cadastro de Medicamentos</h1>
    <form action="processar_medicamento.php" method="POST">
        <label for="medicamento">Nome do Medicamento:</label>
        <input type="text" id="medicamento" name="medicamento" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <label for="qtd">Quantidade:</label>
        <input type="number" id="qtd" name="qtd" required><br><br>

        <label for="categoria">Categoria:</label>
        <select id="categoria" name="categoria" required>
            <option value="Analgesico">Analgesico</option>
            <option value="Antibiotico">Antibiotico</option>
            <option value="Anti-inflamatorio">Anti-inflamatorio</option>
        </select><br><br>

        <label for="validade">Validade:</label>
        <input type="date" id="validade" name="validade" required><br><br>

        <input type="submit" value="Cadastrar Medicamento">
    </form>
</body>
</html>
