<?php
	session_start();

	ob_start(); // no servidor 
	
	if(isset($_POST['cadastrar'])) {
		if(strpos($_POST['nome'], '\'')) {
			echo "<script>alert('Dado(s) inválido(s)!');</script>";
		}
		else { 
			require_once('classConexaoBanco.php');
			$db = new ConexaoBanco();
			
			require_once('classReserva.php');			
			$reserva = new Reserva();
				
			$reserva->id = null; // por causa do AUTO_INCREMENT do BD
			$reserva->nome = ucfirst($_POST['nome']);
			$reserva->email = $_POST['email'];
			$reserva->tel = $_POST['tel'];
			$reserva->tempo = $_POST['tempo'];
			
			$reserva->data1 = $_POST['data1'];
			$reserva->data2 = $_POST['data2'];
			$reserva->data3 = $_POST['data3'];
			
			$reserva->comentario = $_POST['comentario'];


			if($usuario->InserirReserva()) {					
				echo "<script>alert('OK! Vamos analisar sua requisicao!');</script>";
			}
			else {
				echo "<script>alert('Erro ao cadastrar!');</script>";
			}
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>HostelManager</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/kwicks-1.5.1.pack.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
<![endif]-->
</head>
<body id="page1">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
        <h1 style="font-size:50px"><a href="index.html" id="marca">HostelManager</a></h1>
        <div class="department">Av. Pres. Antônio Carlos, 6627 - Pampulha, Belo Horizonte - MG, 31270-901<br>
          <span>Telefone: &nbsp; +55 031 3409-5000</span> </div>
      </header>
      <div class="box">
        <nav>
          <ul id="menu">
            <li class="active"><a href="index.html">Sobre</a></li>
            <li><a href="services.html">Serviços</a></li>
            <li><a href="booking.html">Reserva</a></li>
            <li><a href="rooms.html">Quartos</a></li>
            <li><a href="locations.html">Locais</a></li>
          </ul>
        </nav>
        <!-- header end -->
        <!-- content -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
              <form action="#" id="form1" method="POST" action="index.php">
                <h2>Reserve um quarto</h2>
                <fieldset>
                  <div class="row">
                    <input type="text" class="input" name="nome">
                    Nome: </div>
                  <div class="row">
                    <input type="text" class="input" name="email">
                    E-Mail: </div>
                  <div class="row">
                    <input type="text" class="input" name="tel">
                    Telefone: </div>
                  <div class="row">
                    <div class="select1">
                      <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                    </div>
                    Período de tempo: </div>
                  <div class="row">
                    <div class="select1">
                      <select name="tempo">
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                    </div>
                    Pessoas: </div>
                  <div class="row">
                    <div class="select2" name="data1">
                      <select name="pessoas">
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="select2" name="data2">
                      <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="select2" name="data3">
                      <select>
                        <option>&nbsp;</option>
                        <option>...</option>
                      </select>
                    </div>
                    Data de chegada: </div>
                  <div class="row_textarea"> Comentários:
                    <textarea cols="1" rows="1" name="comentario"></textarea>
                  </div>
                  <div class="wrapper">
                  	<intup type="submit" name="cadastrar" value="Enviar"><a href="#" class="button1">Limpar</a> </div>
                </fieldset>
              </form>
              <div class="kwicks-wrapper marg_bot1">
                <ul class="kwicks horizontal">
                  <li><img src="images/img1.jpg" alt=""></li>
                  <li><img src="images/img2.jpg" alt=""></li>
                  <li><img src="images/img3.jpg" alt=""></li>
                  <li><img src="images/img4.jpg" alt=""></li>
                </ul>
              </div>
            </div>
            <div class="pad">
              <div class="line1">
                <div class="wrapper line2">
                  <div class="col1">
                    <h2><img src="images/title_marker1.jpg" alt="">Melhores Avaliações</h2>
                    <p class="pad_bot1">Hotel bem avaliado em sites de de busca, premiado por possuir os melhores serviços</p>
                    <a href="#" class="color1">Leia mais</a> </div>
                  <div class="col1 pad_left1">
                    <h2><img src="images/title_marker2.jpg" alt="">Atividades</h2>
                    <p class="pad_bot1">Desfrute de várias atividades fora do hotel inclúidas nos pacotes que temos disponpiveis.</p>
                    <a href="#" class="color1">Leia mais</a> </div>
                  <div class="col1 pad_left1">
                    <h2><img src="images/title_marker3.jpg" alt="">Pacotes</h2>
                    <p class="pad_bot1">Diversos pacotes para diferentes perfis com o melhor custo benefício</p>
                    <a href="#" class="color1">Leia mais</a> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Bem vindos ao nosso hotel!</h2>
                <p class="pad_bot1"><strong class="color2">Muitas novidades para você! </p>
                <a href="#" class="button1">Leia mais</a> </div>
              <div class="col1 pad_left1">
                <h2>Sobre Nós</h2>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
                  <p class="pad_bot1"><strong class="color2">24.11.2017</strong></p>
                  <p class="pad_bot2">Nós somos uma empresa séria conhecida por um ótimo atendimento e uma ampla rede de serviços</p>
                </div>
                <a href="#" class="button1">Leia mais</a> </div>
            </div>
          </div>
        </article>
        <!--content end-->
      </div>
    </div>
  </div>
</div>
<div class="main">
  <!-- footer -->
  <footer>
    <div class="col2">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved | Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a>
      <nav>
        <ul id="footer_menu">
          <li class="active"><a href="index.html">Sobre</a></li>
          <li><a href="services.html">Serviços</a></li>
          <li><a href="booking.html">Reserva</a></li>
          <li><a href="rooms.html">Quartos</a></li>
          <li class="last"><a href="locations.html">Locais</a></li>
        </ul>
      </nav>
    </div>
    <div class="col1 pad_left1">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
      </ul>
    </div>
    <!-- {%FOOTER_LINK} -->
  </footer>
  <!-- footer end -->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    $('.kwicks').kwicks({
        max: 500,
        spacing: 0,
        event: 'mouseover'
    });
})
</script>
</body>
</html>