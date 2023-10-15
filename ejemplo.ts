    //Controlador Login
  
    static public function ctrLogin()
    {
        if (isset($_POST['loginEmail'])) {
            $loginEmail = $_POST['loginEmail'];
            $loginPassword = $_POST['loginPassword'];
            $tabla = "registros";

            $respuesta = ModeloFormularios::mdlLogin($loginEmail, $tabla);

            if (is_array($respuesta) && $loginEmail == $respuesta['email'] && $loginPassword == $respuesta['password']) {
                session_start();

                $_SESSION['sesionIniciada'] == true;
                header("location: index.php?page=inicio");
            } else {
                echo "No existe";
                var_dump($respuesta);
            }
        }
    }










        //Modelo Login
        static public function mdlLogin($loginEmail, $tabla)
        {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE email = :email");
            $stmt -> bindPAram (":email", $loginEmail, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
            
        }
      
        












        <?php
        if (isset($_POST['login'])) {
            $respuesta = ControladorFormularios::ctrLogin();
        }
        ?>