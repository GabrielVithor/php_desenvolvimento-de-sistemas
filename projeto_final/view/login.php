<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/ca5c96c2d2.js" crossorigin="anonymous" defer></script>
    <title>Login</title>
</head>

<body>
    <form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width:30%;min-width:400px;">
        <input type="hidden" name="nome_form" value="frmLogin">
        <h2 class="w3-center">Login</h2>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input type="text" name="txtLogin" id="" class="w3-input w3-border w3-round-large" placeholder="Login CPF (ex.: 99999999999)">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width: 11%;"><i class="w3-xxlarge fa fa-lock"></i> </div>
            <div class="w3-rest">
                <input type="password" name="txtSenha" id="" class="w3-input w3-border w3-round-large" placeholder="Senha">
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-half">
                <button name="btnLogin" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width:90%;">Entrar</button>
            </div>
            <div class="w3-half">
                <button name="btnPrimeiroAcesso" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width:90%;">Primeiro Acesso</button>
            </div>
        </div>
    </form>
</body>

</html>