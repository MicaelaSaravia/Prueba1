
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  margin-left: 20%;
  margin-right: 20%;
  padding: 16px;
  background-color: white;
  border-radius: 5px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1,5px solid black;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

@media only screen and (max-width: 1024px) {
  .container {
  margin: 5%;
  padding: 16px;
  background-color: white;
  border-radius: 5px;
}
}
</style>
</head>
<body>

<form action="Pagina2.php" method="post">
  <div class="container">
    <h1>Registro</h1>
    <p>Por favor, completa el formulario de registro</p>
    <hr>

    <input type="text" name= Nombre placeholder="Ingresa tu nombre" required>
    <br>
    
    <input type="number" name="Edad" placeholder="Ingresa tu Edad" required> 
    <br>

    <p> Seleccione a continuacion el Deporte que Practica </p> 

    <input type="checkbox" name="Futbol"> Futbol <br>

    <input type="checkbox" name="Básquetbol"> Básquetbol <br>

    <input type="checkbox" name="Hándbol"> Hándbol <br>
     
    <input type="checkbox" name="Levantamiento de pesas"> Levantamiento de pesas <br>

    <input type="checkbox" name="Atletismo"> Atletismo  <br>
  
    <input type="checkbox" name="Natación"> Natación  <br>
    
    <input type="checkbox" name="Ciclismo"> Ciclismo  <br>

    <input type="checkbox" name="Boxeo"> Boxeo  <br>
    
    <input type="checkbox" name="Artes Marciales"> Artes Marciales <br>
    
    <input type="checkbox" name="Otros"> Otros  <br> <br>
  
    <input type="submit" value="Enviar">
      
  </form>

</body>
</html>