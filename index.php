<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
    <meta name="keywords" content="" http-equiv="keywords" /> 
    <meta name="description" content="" http-equiv="description" /> 
    <meta name="author" content="Agência TAIÓ - 12 - 3206.1690 - contato@agenciataio.com.br" /> 
    <meta name="robots" content="all" /> 
    <meta name="language" content="pt-br" /> 
    <meta name="classification" content="" /> 
    <meta name="rating" content="general" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    
	<meta property="og:title" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	
    <meta name="twitter:card" value="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">

    <link rel="apple-touch-icon" sizes="32x32" href="images/icones/app32x32.jpg">
    <link rel="apple-touch-icon" sizes="57x57" href="images/icones/app57x57.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icones/app72x72.jpg">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icones/app76x76.jpg">
    <link rel="apple-touch-icon" sizes="96x96" href="images/icones/app96x96.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icones/app114x114.jpg">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icones/app120x120.jpg">
    <link rel="apple-touch-icon" sizes="128x128" href="images/icones/app128x128.jpg">
    <link rel="apple-touch-icon" sizes="144x144" href="images/icones/app144x144.jpg">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icones/app152x152.jpg">
    <link rel="apple-touch-icon" sizes="195x195" href="images/icones/app195x195.jpg">
    <link rel="apple-touch-icon" sizes="228x228" href="images/icones/app228x228.jpg">

    <meta name="msapplication-square70x70logo" content="images/icones/ms70x70.jpg">
    <meta name="msapplication-square150x150logo" content="images/icones/ms150x150.jpg">
    <meta name="msapplication-square310x310logo" content="images/icones/ms310x310.jpg">
    <meta name="msapplication-square310x150logo" content="images/icones/ms310x150.jpg">

	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="shortcut icon" href="favicon.ico" />

    <script type="text/javascript">
        function preenche(valor){
            var elemento=document.getElementById("numero");
            var value=elemento.value;
            elemento.value=value+valor;
        }

    </script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teclado</title>
</head>

<body>

<div class="teclado">
    <input type="text" id="numero" value="" class="numero" />
    <input type="button" id="1" value="1" onclick="preenche(this.value);" class="n" />
    <input type="button" id="2" value="2" onclick="preenche(this.value);" class="n" />
    <input type="button" id="3" value="3" onclick="preenche(this.value);" class="n" />
    <input type="button" id="4" value="4" onclick="preenche(this.value);" class="n" />
    <input type="button" id="5" value="5" onclick="preenche(this.value);" class="n" />
    <input type="button" id="6" value="6" onclick="preenche(this.value);" class="n" />
    <input type="button" id="7" value="7" onclick="preenche(this.value);" class="n" />
    <input type="button" id="8" value="8" onclick="preenche(this.value);" class="n" />
    <input type="button" id="9" value="9" onclick="preenche(this.value);" class="n" />
    <input type="button" id="*" value="*" onclick="preenche(this.value);" class="n" />
    <input type="button" id="0" value="0" onclick="preenche(this.value);" class="n" />
    <input type="button" id="#" value="#" onclick="preenche(this.value);" class="n" />
    <div class="clear"></div>
</div>

</body>
</html>
