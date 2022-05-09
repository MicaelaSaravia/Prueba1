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

<div class="container">
    <h1>Sus datos de registro </h1>
    <hr>
    <p>Estos son los datos que has enviado</p>

  <?php
  
  if (isset($_REQUEST['Nombre'])) {
    $Nombre = $_REQUEST['Nombre'];
    echo "Tu nombre es: " . $Nombre . "<br>";
  }
  if (isset($_REQUEST['Edad'])) {
    $Edad = $_REQUEST['Edad'];
    echo "Tu edad es: " . $Edad. "<br>";
  }
  if (isset($_REQUEST['Futbol'])) {
    echo "A ti te gusta el futbol  <br>";
  }
  if (isset($_REQUEST['Básquetbol'])) {
    echo "A ti te gusta el Básquetbol <br>";
  }
  if (isset($_REQUEST['Hándbol'])) {
    echo "A ti te gusta el Hánbol <br>";
  }
  if (isset($_REQUEST['Levantamiento de pesas'])) {
    echo "A ti te gusta el Levantamiento de pesas <br>";
  }
  if (isset($_REQUEST['Atletismo'])) {
    echo "A ti te gusta el Atletismo <br>";
  }
  if (isset($_REQUEST['Natación'])) {
    echo "A ti te gusta: Natación <br>";
  }
  if (isset($_REQUEST['Ciclismo'])) {
    echo "A ti te gusta el Ciclismo <br>";
  }
  if (isset($_REQUEST['Boxeo'])) {
    echo "A ti te gusta el Boxeo <br>";
  }
  if (isset($_REQUEST['Artes Marciales'])) {
    echo "A ti te gustan las Artes Marciales <br>";
  }
  if (isset($_REQUEST['Otros'])) {
    echo "Tu deporte no esta en la lista, seleccionaste: Otros <br>";
  }
  
  ?>
</body>

</html>