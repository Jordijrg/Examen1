<?php
function ctrlRegistre($request, $response, $container)
{
    $response->setTemplate("registre.php");

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['adreca']) && isset($_POST['date']) && isset($_POST['file'])) {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $adreca = $_POST['adreca'];
            $date = $_POST['date'];
            $file = $_POST['file'];
            // Crear un objeto DateTime para la fecha actual en el formato original
            $fechaOriginal = new DateTime($date);

            // Formatear la fecha en el formato de MariaDB (YYYY-MM-DD)
            $fechaFormateada = $fechaOriginal->format('Y-m-d');
            // $password = $_POST['password'];

            $RegisterModel = $container->uploadUser();

            if ($RegisterModel->isEmailExists($name, $surname)) {
                echo "Alumne ja inscrit";
            } else {
                // Other optional fields (telefon and num_targeta) set to null
                // $telefon = null;
                // $num_targeta = null;
                // $rol = 'Usuari';

                // Proceed with registration
                $result = $RegisterModel->registerUser($name, $surname, $adreca, $fechaFormateada, $file);

                if ($result) {
                    // Registration successful
                    echo "Registration successful!";
                    $response->setTemplate("conf.php");
                    echo "<br>";
                    echo $name;
                    echo "<br>";
                    echo $surname;
                    echo "<br>";
                    echo $adreca;
                    echo "<br>";
                    echo $fechaFormateada;
                    
                } else {
                    // Registration failed
                    echo "Registration failed.";
                }
            }
        }
    }
    return $response;
}

