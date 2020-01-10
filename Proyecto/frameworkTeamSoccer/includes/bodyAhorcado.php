<div class="col-sm-12 abs-center">
        
        
        
        <link rel="stylesheet" href="css/estilo-ahoracado.css">
<script src="js/ahorcado.js"></script>

      <div class="main-container">

        <h1 class="titulo">Juego del ahorcado</h1>
        <h1 id="msg-final"></h1>
        <h3 id="acierto"></h3>
        <div class="flex-row no-wrap">
          <h2 class="palabra" id="palabra"></h2>
          <picture>
            <img src="imagenes/ahorcado_6.png" alt="" id="image6">
            <img src="imagenes/ahorcado_5.png" alt="" id="image5">
            <img src="imagenes/ahorcado_4.png" alt="" id="image4">
            <img src="imagenes/ahorcado_3.png" alt="" id="image3">
            <img src="imagenes/ahorcado_2.png" alt="" id="image2">
            <img src="imagenes/ahorcado_1.png" alt="" id="image1">
            <img src="imagenes/ahorcado_0.png" alt="" id="image0">
          </picture>
        </div>
        <div class="flex-row" id="turnos">
          <div class="col">
            <h3>Intentos restantes: <span id="intentos">6</span></h3>
          </div>
          <div class="col">
            <button onclick="inicio()" id="reset">Elegir otra palabra</button>
            <button onclick="pista()" id="pista">Dame una pista!</button>
            <span id="hueco-pista"></span>
          </div>
          </div>
        
        <div class="flex-row">
          <div class="col">
            <div class="flex-row" id="abcdario">
            </div>
          </div>
          <div class="col"></div>
        </div>

      </div>
              <script src="js/ahorcado.js"></script>

    
 
</div>