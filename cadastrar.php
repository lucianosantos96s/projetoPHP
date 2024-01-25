<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1><a href="index.php">Solutions</a></h1>
        <span><a href="#">Cadastrar novo funcionário</a></span>
    </header>
    <section>
        <h2>Cadastro</h2>
        <form method="POST" action="formcadastro.php">
            <label>
                Nome: <input type="text" name="nome">
            </label>
            <label>
                CPF: <input type="text" name="cpf">
            </label>
            <label>
                Email: <input type="email" name="email">
            </label>
            <label>
                Cargo: <input type="text" name="cargo">
            </label>
            <label>
                Salário: <input type="text" name="salario">
            </label>
            <input type="submit" value="Cadastrar">
        </form>
    </section>
    <footer>
        <span>&copy; Solutions Enterprise</span>
    </footer>
</body>
</html>