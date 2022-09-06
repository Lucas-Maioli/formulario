<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">

    <title>Formulario</title>
</head>

<body>

    <header>
        <h1>Formulario em HTML, CSS, JavaScript</h1>
    </header>

    <main>
        <section class="container">
            <form>
                <div class="form-box">
                    <div class="form-info">
                        <label for="Pnome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
                    </div>
                    <div class="form-info">
                        <label for="sNome">Sobrenome:</label>
                        <input type="text" name="sNome" id="sNome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="form-info">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required>
                    </div>
                    <div class="form-info">
                        <label for="password">Senha:</label>
                        <input type="password" name="passowrd" id="password" placeholder="Digite uma senha" required>
                    </div>
                    <div class="form-info">
                        <label for="checkPassword">Confirme sua senha:</label>
                        <input type="password" name="checkpassowrd" id="checkpassword" placeholder="Confirme sua senha" required>
                    </div>
                    <div class="form-info">
                        <label for="data">Data de nascimento:</label>
                        <input type="date" name="data" id="data" required>
                    </div>
                </div>
                <div class="gender-group">
                    <div class="title-gender">
                        <h5>Genero</h5>
                    </div>
                    <div class="gender-box">
                    <div class="gender">
                        <input type="radio" id="female" name="gender">
                        <label for="female"> Feminino</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="male" name="gender">
                        <label for="male">Masculino</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="other" name="gender">
                        <label for="other"> Outro</label>
                    </div>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>

    </main>
    <footer>
        <p>Todos os direitos reservados</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>