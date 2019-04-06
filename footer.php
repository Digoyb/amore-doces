<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pushbar.js demo</title>
    <meta name="description" content="Brigadeiros deliciosos gourmets feitos com amor e carinho pela Amore&Doces">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Pushbar.js" />
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" type="text/css" href="pushbar/pushbar.css">
    <link rel="stylesheet" type="text/css" href="demo.css">
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link rel="stylesheet" href="/layerslider/css/layerslider.css" type="text/css">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/slicebox.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <script type="text/javascript" src="js/modernizr.custom.46884.js"></script>

</head>

<body>
   <footer>
    <div class="container2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.421578771375!2d-46.69458268560367!3d-23.696634672485505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4fc3ce5dde3f%3A0xc7a8f028e386299d!2sRua+Manuel+de+Teff%C3%A9%2C+94+-+Cidade+Dutra%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1533516222925" width="100%" height="170" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="float_left">
                <div id="box-desconto-novidades-footer">

                    <div id="msg-aviso"></div>
                    <div>
                        <p>Não perca TEMPO e encomende JÁ!</p>
                        <form id="form-descontos-novidades" name="form-descontos-novidades" method="post" action="processa.php">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="nome">
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" id="email">
                            <input type="submit" name="btn-enviar" id="btn-descontos-novidades" value="Enviar">
                            <br>
                            <textarea name="" id="mensagem" placeholder="Mande sua mensagem.." required></textarea>
                        </form>
                    </div>
                </div>
                <nav>
                    <ul>
                        <li><a href="http://www.pontodebrigadeiro.com.br/" title="Home">Home</a></li>
                        <li><a href="http://www.pontodebrigadeiro.com.br/produtos" title="Produtos">Produtos</a></li>
                    </ul>
                </nav>
                <nav>
                    <ul>
                        <li><a href="http://www.pontodebrigadeiro.com.br/sobre-nos" title="Sobre nós">Sobre nós</a></li>
                        <li class="sem-borda"><a href="http://www.pontodebrigadeiro.com.br/contato" title="Contato">Contato</a></li>
                    </ul>
                </nav>
                <div class="float_left" id="box-forma-pagamento-rodape">

                    <div id="box-social-rodape">
                        <a href="https://www.facebook.com/otavio.neto.1804" title="Facebook" target="_blank"><img src="http://www.pontodebrigadeiro.com.br/_img/ico-face-footer.png" class="posicao-ico-rodape"></a>
                        <a href="https://www.instagram.com/veronica.rodsil/" title="Instagram" target="_blank"><img src="http://www.pontodebrigadeiro.com.br/_img/ico-instagran-footer.png" class="posicao-ico-rodape"></a>
                    </div>
                    <div id="box-telefones" style="margin-left: -20px;width: 320px;">
                        <p>Atendimento</p>
                        <p><span>11 99281-7416</span></p>
                        <p style="font-size:15px;">Rua Manuel de Teffet, 94 - 04815300 - São Paulo/SP</p>
                    </div>
                </div>
            </div>
            <div class="float_left">
                <img src="img/thumb/logo-oficial.png" id="logo-rodape">
                <div class="zap-img">
            <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511992817416"><img src="img/Whatsapp.png" alt=""></a>
        </div>
            </div>
        </div>
        
    </footer>

    

    <script type="text/javascript">
        var pushbar = & nbsp new Pushbar({ &
            nbsp & nbsp blur: true,
            &
            nbsp & nbsp overlay: true,
            &
            nbsp
        });

        //open a pushbar
        pushbar.open('mypushbar1');
        //close all pushbars
        pushbar.close();

</body>

</html>
