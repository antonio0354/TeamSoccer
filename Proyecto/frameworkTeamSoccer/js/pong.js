//
const canvas = document.getElementById("pong");

// 
const ctx = canvas.getContext('2d');

//
let hit = new Audio();
let wall = new Audio();
let userScore = new Audio();
let comScore = new Audio();

hit.src = "sounds/hit.mp3";
wall.src = "sounds/wall.mp3";
comScore.src = "sounds/comScore.mp3";
userScore.src = "sounds/userScore.mp3";




// Pelota objeto
const ball = {
    x : canvas.width/2,
    y : canvas.height/2,
    radius : 10,
    velocityX : 5,
    velocityY : 5,
    speed : 7,
    color : "WHITE"
}

// Raqueta
const user = {
    x : 0, 
    y : (canvas.height - 100)/2, 
    width : 10,
    height : 100,
    score : 0,
    color : "WHITE"
}

// COM raqueta
const com = {
    x : canvas.width - 10, 
    y : (canvas.height - 100)/2,
    width : 10,
    height : 100,
    score : 0,
    color : "WHITE"
}

// Raya
const net = {
    x : (canvas.width - 2)/2,
    y : 0,
    height : 10,
    width : 2,
    color : "RED"
}

// Pintar rectangulos de raquetas
function drawRect(x, y, w, h, color){
    ctx.fillStyle = color;
    ctx.fillRect(x, y, w, h);
}

// Pintar pelota
function drawArc(x, y, r, color){
    ctx.fillStyle = color;
    ctx.beginPath();
    ctx.arc(x,y,r,0,Math.PI*2,true);
    ctx.closePath();
    ctx.fill();
}

// Movimiento al raton
canvas.addEventListener("mousemove", getMousePos);

function getMousePos(evt){
    let rect = canvas.getBoundingClientRect();
    
    user.y = evt.clientY - rect.top - user.height/2;
}

// Cuando ahi gol renicio
function resetBall(){
    ball.x = canvas.width/2;
    ball.y = canvas.height/2;
    ball.velocityX = -ball.velocityX;
    ball.speed = 7;
}

// Pintar raya
function drawNet(){
    for(let i = 0; i <= canvas.height; i+=15){
        drawRect(net.x, net.y + i, net.width, net.height, net.color);
    }
}

// Pintar texto
function drawText(text,x,y){
    ctx.fillStyle = "#FFF";
    ctx.font = "75px fantasy";
    ctx.fillText(text, x, y);
}

// Colision con raquetas
function collision(b,p){
    p.top = p.y;
    p.bottom = p.y + p.height;
    p.left = p.x;
    p.right = p.x + p.width;
    
    b.top = b.y - b.radius;
    b.bottom = b.y + b.radius;
    b.left = b.x - b.radius;
    b.right = b.x + b.radius;
    
    return p.left < b.right && p.top < b.bottom && p.right > b.left && p.bottom > b.top;
}


function update(){
    
    // Cambiar marcador
    if( ball.x - ball.radius < 0 ){
        com.score++;
        comScore.play();
        resetBall();
    }else if( ball.x + ball.radius > canvas.width){
        user.score++;
        userScore.play();
        resetBall();
    }
    
    // Velocidad bola
    ball.x += ball.velocityX;
    ball.y += ball.velocityY;
    
    // la computadora juega por sí misma, y ​​debemos ser capaces de vencerla
    
    com.y += ((ball.y - (com.y + com.height/2)))*0.1;
    
    // cuando la pelota choca con las paredes inferior y superior, invertimos la velocidad y.
    if(ball.y - ball.radius < 0 || ball.y + ball.radius > canvas.height){
        ball.velocityY = -ball.velocityY;
        wall.play();
    }
    
    // comprobamos si la paleta golpeó al usuario o la paleta com
    let player = (ball.x + ball.radius < canvas.width/2) ? user : com;
    
    // si la pelota golpea una pala
    if(collision(ball,player)){
       
        hit.play();
        // comprobamos donde la pelota golpea la pala

        let collidePoint = (ball.y - (player.y + player.height/2));
        // para normalizar el valor de collidePoint, necesitamos obtener números entre -1 y 1.
        collidePoint = collidePoint / (player.height/2);
        
        // cuando la pelota golpea la parte superior de una pala, queremos que la pelota tome un ángulo de -45 grados
        //cuando la pelota golpea el centro de la pala, queremos que la pelota tome un ángulo de 0 grados
        // cuando la pelota toca el fondo de la pala, queremos que la pelota tome 45 grados
        // Math.PI/4 = 45degrees
        let angleRad = (Math.PI/4) * collidePoint;
        
        // cambio de de direccion X e Y cuando se golpea
        let direction = (ball.x + ball.radius < canvas.width/2) ? 1 : -1;
        ball.velocityX = direction * ball.speed * Math.cos(angleRad);
        ball.velocityY = ball.speed * Math.sin(angleRad);
        
        // subida de velocidad cada vez que se golpea la bola
        ball.speed += 0.1;
    }
}

// función de render, la función que hace todo el dibujo
function render(){
    
    // limpiar el canvas
    drawRect(0, 0, canvas.width, canvas.height, "#000");
    
    // dibujar el puntaje del usuario a la izquierda
    drawText(user.score,canvas.width/4,canvas.height/5);
    
    // dibujar el puntaje del COM a la derecha
    drawText(com.score,3*canvas.width/4,canvas.height/5);
    
    // dibujar la raya
    drawNet();
    
    // dibujar la paleta del usuario
    drawRect(user.x, user.y, user.width, user.height, user.color);
    
    //dibujar la paleta del COM
    drawRect(com.x, com.y, com.width, com.height, com.color);
    
    // dibujar la pelota
    drawArc(ball.x, ball.y, ball.radius, ball.color);
}
function game(){
    update();
    render();

}
// nuemro de frames por segundo
let framePerSecond = 50;


let loop = setInterval(game,1000/framePerSecond);
