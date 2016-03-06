<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="descripcion" content="bievenidos  a  mi  restaurante"/>
	<link rel="shourcu icon"  type="image/x-icon" href="public/img/fol.ico">
	<title>abriendo mi restaurante</title>
	<link rel="stylesheet" href="estilo.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

   <script type="text/javascript">
     $(function(){
       SyntaxHighlighter.all();
     });
      $(window).load(function(){
       $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


</head>
<body>
    <h1>MI  PRIMERA   RESTAURANTE</h1>
    <img src="img/DIOS.jpg"title="mi restaurante" alt="mi imagen" height="450" width="1040" >
    <article>
   	
          <p>Un párrafo aparte merece el reconocido "Restaurant Sancho" del Hotel Cervantes que ofrece una refinada variedad de platos. En su carta, se destaca una prometedora "Sugerencias del Chef", que conjuga platos de una excelente calidad elaborados artesanalmente.Menús especiales para comidas de negocios, en el salón del restaurante o bien en salas privadas con mayor intimidad son parte de los servicios agregados que se brindan, además del estacionamiento privado, a disposición de nuestra clientela..Para comidas especiales, menús a la medida de cada ocasión y presupuestos se elaboran a requerimiento, brindando nuestra experiencia y atendiendo las necesidades del cliente.
          </p>

   </article>
   <article>
   <div class="flexslider">
       <ul class="slides">
   	       <li><img src="img/inet.jpg" alt=""></li>
           <li><img src="img/restaurante.jpg" alt=""></li>
           <li><img src="img/restau.jpg" alt=""></li>
       </ul>
       </div>	
 </article>

<video controls width="420" height="240">
        <source src="video/mi video.mp4" type="video/mp4" media="">  
        <source src="video/mi video.ogg" type="video/.ogg" media="">  
        <source src="video/mi video.webm" type="video/webm" media="">  
</video>
  <iframe width="320" height="240" src="https://www.youtube.com/embed/0uDEohnIUog" frameborder="0" allowfullscreen></iframe>

  <iframe width="320" height="240" src="https://www.youtube.com/embed/7QsLx4bKGZc" frameborder="0" allowfullscreen></iframe>

<audio controls="audio/mi sonido.mp3">
  <source src="audio/mi sonido.mp3" type="audio/.mp3" media="">
  <source src="audio/mi sonido.ogg" type="audio/.ogg" media="">
  <source src="audio/mi sonido.webm" type="audio/.webm" media="">
</audio>


</body>
</html>