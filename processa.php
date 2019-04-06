<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>enviando email..</title>
</head>
<body>
    <?php
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $mensagem = $_POST['mensagem'];

            $headers = 'From: '. $nome;
            $corpoemail = 'Fale Conosco - Cotação AmoreeDoces

                
                Nome: ' .$nome.'
                E-mail: ' .$email.'
                Mensagem: '.$msg.' ';
    
        if(mail("otavio.neto76@gmail.com", "Fale Conosco", $corpoemail, $headers)){
            
            echo "<script>alert('Mensagem enviada com sucesso!');</script>";
            header("Location: index.php");
        }
        else{
            echo "<script>alert('Erro ao enviar a mensagem, tente diretamente pelo otavio.neto76@gmail.com');</script>";
        }
        
    ?>
</body>
</html>