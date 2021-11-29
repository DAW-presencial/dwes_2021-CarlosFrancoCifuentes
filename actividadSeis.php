<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>FILES</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <label for="archivoUno">Primer archivo: </label>
            <input type="file" name="archivoUno"></input><br>
            <label for="archivoDos">Segundo archivo: </label>
            <input type="file" name="archivoDos"></input><br>
            <input type = 'submit' name = "submit"/>
        </form>
        
        <?php
            if(isset($_POST["submit"])){
                foreach ($_FILES as $file) {
                    if($file['error']){
                        echo "Hubo un error de código " . $file['error'] . " al subir el archivo " . $file['name'] .'<br>';
                    }else if (!move_uploaded_file($file['tmp_name'], 'archivosEnviados/' . $file['name'])) {
                        echo "Falló";
                    }else{
                        echo"Subido archivo " . $file['name'] . "<br>";
                    }
                }
            }
        ?>
    </body>
</html>



