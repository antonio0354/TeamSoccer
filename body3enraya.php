<html>
<style>
h1{
  color: black;
  text-align: center;
  letter-spacing: 5px;
  font-family: monospace;
  font-size: 50px;
}

p{
  color: black;
  font-family: fantasy;
  font-size: 30px;
  text-align: center;
}

  td {
  border:  2px solid black;
  border-radius: 50px;
  width: 100px;
  height: 100px;
  background-color: white;
  background-image: url(imagenes/laliga.png); 
  background-size: 100%;
  color: transparent;
  font-size: 50px;
  font-weitht: bold;
  text-align: center;
}


 body {
  background-image: url(imagenes/campodeFutbol.jpg);
  background-size: 100%;
}

table{
  margin: auto;
  padding: 5px;
}

.B {
  border: 2px solid red;
  background-color: red;
  background-image: url(imagenes/1.png);
  background-size: 100%;
}

.M {
  border: 2px solid white;
  background-color: white;
  background-image: url(imagenes/4.png);
  background-size: 100%;
}

img {
  width: 70px;
}

button {
  color: black;
  text-align: center;
  font-family: monospace;
  font-size: 30px;
  border: 3px solid white;
  border-radius: 20px;
}

</style>
<html>
<head>
<title>Tres en raya</title>
</head>
<body>
    <div class="col-sm-12 abs-center">
    <h1><img src=pelotqa.png> Tres en raya <img src=pelotqa.png></h1>
   <table>
      <tbody>
<tr>
    <td id="c0" onClick="S('c0')"></td>
    <td id="c1" onClick="S('c1')"></td>
    <td id="c2" onClick="S('c2')"></td>
  </tr>
<tr>
    <td id="c3" onClick="S('c3')"></td>
    <td id="c4" onClick="S('c4')"></td>
    <td id="c5" onClick="S('c5')"></td>
  </td>
  </tr>
<tr>
    <td id="c6" onClick="S('c6')"></td>
    <td id="c7" onClick="S('c7')"></td>
    <td id="c8" onClick="S('c8')"></td>
  </tr>
</tbody>
</table>
<p><button type="rest" onClick="R()">Volver a jugar</button> </p>
    </div>

<script>
var turno=0;

function S(numero){
var e = document.getElementById(numero);
  
if(turno==0){
 if(e.innerHTML=="B" || e.innerHTML=="M"){
   alert("¡Casilla ya ocupada!");
 } else {
    e.innerHTML= "M";
    e.className= "M";
  turno=1;
 }
  
}else {
  if(e.innerHTML=="M" || e.innerHTML=="B"){
    alert("¡Casilla ya ocupada!")
  } else{
    e.innerHTML= "B";
    e.className= "B";
  turno=0;
 }
}
    
var e0 = document.getElementById('c0');
var e1 = document.getElementById('c1');
var e2 = document.getElementById('c2');
var e3 = document.getElementById('c3');
var e4 = document.getElementById('c4');
var e5 = document.getElementById('c5');
var e6 = document.getElementById('c6');
var e7 = document.getElementById('c7');
var e8 = document.getElementById('c8');


if(e0.innerHTML=="M" && e1.innerHTML=="M" && e2.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
}
if(e3.innerHTML=="M" && e4.innerHTML=="M" && e5.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
}
if(e6.innerHTML=="M" && e7.innerHTML=="M" && e8.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
}
if(e0.innerHTML=="M" && e3.innerHTML=="M" && e6.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
}
if(e1.innerHTML=="M" && e4.innerHTML=="M" && e7.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
}
if(e2.innerHTML=="M" && e5.innerHTML=="M" && e8.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
}
  if(e0.innerHTML=="M" && e4.innerHTML=="M" && e8.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
 }
  if(e2.innerHTML=="M" && e4.innerHTML=="M" && e6.innerHTML=="M"){
  alert("¡Ganó el Real Madrid!");
  }
//---
if(e0.innerHTML=="B" && e1.innerHTML=="B" && e2.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
}
if(e3.innerHTML=="B" && e4.innerHTML=="B" && e5.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
}
if(e6.innerHTML=="B" && e7.innerHTML=="B" && e8.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
}
if(e0.innerHTML=="B" && e3.innerHTML=="B" && e6.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
}
if(e1.innerHTML=="B" && e4.innerHTML=="B" && e7.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
}
if(e2.innerHTML=="B" && e5.innerHTML=="B" && e8.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
}
  if(e0.innerHTML=="B" && e4.innerHTML=="B" && e8.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
 }
  if(e2.innerHTML=="B" && e4.innerHTML=="B" && e6.innerHTML=="B"){
  alert("¡Ganó el Barcelona!");
  }}

function R(){

  var e0=document.getElementById('c0');
  var e1=document.getElementById('c1');
  var e2=document.getElementById('c2');
  var e3=document.getElementById('c3');
  var e4=document.getElementById('c4');
  var e5=document.getElementById('c5');
  var e6=document.getElementById('c6');
  var e7=document.getElementById('c7');
  var e8=document.getElementById('c8');
 
    e0.innerHTML="";
    e0.className="";
    turno=0;
    e1.innerHTML="";
    e1.className="";
    turno=0;
    e2.innerHTML="";
    e2.className="";
    turno=0;
    e3.innerHTML="";
    e3.className="";
    turno=0;
    e4.innerHTML="";
    e4.className="";
    turno=0;
    e5.innerHTML="";
    e5.className="";
    turno=0;
    e6.innerHTML="";
    e6.className="";
    turno=0;
    e7.innerHTML="";
    e7.className="";
    turno=0;
    e8.innerHTML="";
    e8.className="";
    turno=0;
    
}

</script>
</html>

