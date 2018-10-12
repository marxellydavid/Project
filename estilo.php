<?php

header("Content-Type: text/css; charset: UTF-8");

?>

* {
box-sizing: border-box;
}

body{
margin: 0;
font-family: sans-serif;
background: #204862;
}

h1{
color: #fff; //color blanco
text-align: center;
}

.form-register{
width: 95%;
max-width: 500px;
margin: auto;
background: white;
border-radius: 7px;
}

.form_titulo{
background: deepskyblue;
color: #fff;
padding: 20px;
text-align: center;
font-weight: 100; //quitando grosor
font-size: 30px;
border-top-left-radius: 7px;
border-top-right-radius: 7px;
border-bottom: 5px solid crimson;
}

.contenedor-inputs{
padding: 10px 30px;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}

input{
margin-bottom: 15px;
padding: 15px;
font-size: 16px;
border-radius: 3px;
border: 1px solid darkgray;
}

.input-48{
width: 48%;
}

.input-100{
width: 100%;
}

.btn-ENVIAR{
background: crimson;
color: #fff;
margin: auto;
padding: 10px 40px;
cursor: pointer;
}