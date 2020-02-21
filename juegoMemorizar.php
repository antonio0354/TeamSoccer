<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            div#table_memorial{
                background: #fff;
                border: #999 1px solid;
                width: 800px;
                height: 540px;
                padding: 24px;
                margin:0px auto;
                   }
                   div#table_memoria > div{
                       background: url(cartas_bg.jpg) no-repeat;
                       border:#000 1px solid;
                       width:71px;
                       height: 71px;
                       float:left;
                       margin:10px;
                       padding:20px;
                       font-size: 32px;
                       cursor:pointer;
                       text-align:center;
                   }
        </style>
        <script>
            var array_memoria=['1','1','2','2','3','3','4','4','5','5','6','6','7','7','8','8','9','9','10','10','11','11','12','12'];
            var valor_memoria=[];
            var memoria_carta_ids =[];
            var mirada_carta=0;
            Array.prototype.memoria_carta_embarajar= function(){
                var i=this.length, j, temp;
                while(--i > 0){
                    j= Math.floor(Math.random()* (i+1));
                    temp=this[j];
                    this[j] =this[i];
                    this[i]= temp;
                }
            }
            function nuevaTabla(){
                mirada_carta=0;
                var output='';
                array_memoria.memoria_carta_embarajar();
                for(var i=0 ;i< array_memoria.length;i++){
                    output += '<div id="carta_'+i+'" onclick="mirarCartaMemoria(this,\''+array_memoria[i]+'\')"></div>';
                }
                document.getElementById('table_memoria').innerHTML=output;
                
            }
            
            function mirarCartaMemoria(carta,valor){
                if(carta.innerHTML == "" && valor_memoria.length < 2){
                    carta.style.background = '#FFF';
                    carta.innerHTML = valor;
                    if(valor_memoria.length == 0){
                        valor_memoria.push(valor);
                        memoria_carta_ids.push(carta.id);
                        
                    }else if(valor_memoria.length == 1){
                        valor_memoria.push(valor);
                        memoria_carta_ids.push(carta.id);
                        if(valor_memoria[0] == valor_memoria[1]){
                            mirada_carta += 2;
                            //despuejando los dos arrays
                            valor_memoria =[];
                            memoria_carta_ids= [];
                            //chekea si la mesa entera esta despejada
                            if(mirada_carta == array_memoria.length){
                                alert("Enhorabuena!!.... Generando Nueva Tabla");
                                document.getElementById('table_memoria').innerHTML="";
                                nuevaTabla();
                            }
                        }else{
                            function mirarAtras(){
                                //las dos cartas se van a mirar
                                var carta_1=document.getElementById(memoria_carta_ids[0]);
                                var carta_2=document.getElementById(memoria_carta_ids[1]);
                                carta_1.style.background='url(cartas_bg.jpg) no-repeat';
                                carta_1.innerHTML = "";
                                carta_2.style.background = 'url(cartas_bg.jpg) no-repeat';
                                carta_2.innerHTML = "";
                                //despejando los dos arrays
                                valor_memoria =[];
                                memoria_carta_ids =[];
                            }
                            setTimeout(mirarAtras,700);
                        }
                    }
                }
                
            }
        </script>
    </head>
    <body>
        <div id="table_memoria"></div>
        <script> nuevaTabla();</script>
       
    </body>
</html>
