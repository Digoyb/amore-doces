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
    <header>
        <ul class="contato-header">
            <li>E-mail:otavio.neto76@gmail.com</li>
            <li><a href="http://api.whatsapp.com/send?1=pt_BR&phone=5511992817416" style="color:white;">Telefone:11 99281-7416</a></li>
        </ul>
        <aside data-pushbar-id="right" class="pushbar from_right">
            <div class="title"><span data-pushbar-close class="close push_right"></span> <a href="#box-telefones">Amore&amp;Doces</a><img src="img/thumb/menu.jpg" style="margin-left:10px; "width="25" height="25" alt=""></div>
            <ul class="menu">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="#sobre">Sobre</a></li>
		  <li><a href="#produtos">Produtos</a></li>
		  <li><a href="#box-desconto-novidades-footer">Contato</a></li>
		 
		</ul>
        </aside>
        <a data-pushbar-target="right"><img class="logo-menor" src="img/thumb/menu.jpg" alt="">
        </a>
        <a href="index.php">
        <img id="logo-oficial" src="img/thumb/logo-oficial.png" alt="">
        </a>
    </header>

    <div class="container header-menu">
        <div class="row">
            <div class="col menu-left">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                </ul>
            </div>

            <div class="col menu-right">
                <ul>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#box-desconto-novidades-footer">Contato</a></li>
                </ul>
            </div>
        </div>


    </div>

    

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

    </script>


    <script type="text/javascript" src="pushbar/pushbar.js"></script>
    <script type="text/javascript">
        var pushbar = new Pushbar({
            blur: false,
            overlay: true,
        });

    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    
</body>

</html>
