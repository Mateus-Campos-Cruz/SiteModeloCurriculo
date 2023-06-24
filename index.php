<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Banco de dados My s</title>
</head>
<body>
    <div id="container">
        <div id="ladoA">

            <h1 id="title1">Envie uma mensagem</h1>

            <form action="database.php" method="post">
                
                <input type="text" name="nome" class="campos" placeholder="Nome">
                <input type="text" name="email" class="campos" placeholder="Email">
                <textarea name="msg" class="textarea" cols="63" rows="8" placeholder="Escreva sua mensagem"></textarea>
               

                <input type="submit" id="submit" class="submit" value="Enviar mensagem">
            </form>
        </div>
        <div id="ladoB">

                <h1 id="title2">Conheça nossas redes sociais</h1>

                <h3 id="title3">Abaixo conheça nossas redes sociais e baixe um modelo de curriculo</h3>

                <a href="https://web.whatsapp.com/"><div class="titleLadoB"><img class="img" src="logozap.png" alt=""> <p class="p">Nosso WhatsApp</p> </div></a>
                <a href="https://www.instagram.com/"><div class="titleLadoB"><img class="img" src="instalogo.png" alt=""><p class="p">Nosso Instagram</p> </div></a>
                <a href="https://web.telegram.org/"><div class="titleLadoB"><img  class="img" src="telegramlogo.png" alt=""> <p class="p">Nosso Telegram</p></div></a>
        
                <a href="modeloCurriculo.docx"><input type="submit" id="submit2" value="Download de Modelo de Curriculo"></a>
        </div>      
    </div>
    
</body>
</html>