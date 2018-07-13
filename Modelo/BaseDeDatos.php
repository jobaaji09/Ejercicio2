<?php
require_once('InterfaceBaseDeDatos.inc.php');

class BaseDeDatos implements InterfaceBaseDeDatos{
    //Variable que contine la conexion a la base de datos.
    private $conexion;
    //constante que tiene la direccion del servidor
    const servername = "localhost";
    //constante que tiene el nombre del usurario de la base de datos
    const username = "developer";
    //constante que tienen la contrasenia de la base de datos.
    const password = "qwerty";
    //constante que tiene el nombre de la base de datos
    const base = "bolsa";
    //Nombre de la tabla.
    private $tabla;
    
    /**
     * Constructor de la clase BaseDeDatos
     * Realiza la coneccion a la base de datos
     * @param nombre de la tabla
     */
    public function __construct(string $tabla){
        $this->tabla = $tabla;//inicializams el nombre de la tabla
        $host = "mysql:host=".self::servername.";dbname=".self::base; //servidor y nombre de la base de datos en mysql
        try {
            $this->conexion = new PDO($host, self::username, self::password); //realizamos la conexion
            // le decimos que lanze excepciones si exite un error.
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion exitosa\n";
            
            
        }
        catch(PDOException $e){
            echo "Conexion fallo: " . $e->getMessage();
            echo "\n";
        }
    }

    /**
     * Realiza una insercion en la base de datos.
     * @param stdClass. el objeto a guardar
     * @return true si todo salo bien. 
     **/
    public function insert(stdClass $o):bool{
        $arr = get_object_vars($o);
        $columnas = implode(', ', array_keys($arr));
        $valores = implode('\', \'', array_values($arr));
        try{
            $this->conexion->query(
                "INSERT INTO $this->tabla ($columnas) VALUES (' $valores ');");
            return true;
        }
        catch(PDOException $e){
            echo "Conexion fallo: " . $e->getMessage();
            echo "\n";
            return false;
        }
        
        
    }
    /**
     *actualiza la informacion de el objeto en la base de datos
     * @param El objeto con su informacion actuualizada
     * @return true si si se actualizo , false en otro caso
     */
    public function update(stdClass $o):bool{
        return false;
    }

    /**
     * Busca en la base de datos si exite alguien con el id
     * @param el id con el cual se debe buscar
     * @return true si existe , false en otro caso
     */
    public function exists(int $id):bool{
        return false;
    }

    /**
     * Borra al que tiene el id en la base de datos
     * @param el id para saber a quien borra
     * @retrun true si si se borro falso en otro caso
     */
    public function delete(int $id):bool{
        return false;
    }
    
    /**
     * Regresa en un arreglo asociativo 
     * a todos los que estan en la tabla
     * @return el arreglo asociativo que 
     * tiene a todos en la tabla
     */ 
    public function all():array{
        return null;
    }

    /**
     * Regresa un objeto que tiene el id en la base de datos
     * @param el id con el cual se va a buscar en la base de datos
     * @return el objeto encontrado, null en otro caso
     */
    
    public function select(int $id):stdClass{
        return null;
    }

    

    
    
}

/*
$o = new stdClass();

$o->nombre = 'dmotnes';
$o->contrasenia = 'bla';
$o->correo = 'dmontes@correocaleinte.com';

$bd = new BaseDeDatos("Profesionista");
if($bd->insert($o)){
    echo "Todo bien\n";
}else{
    echo "Todo mal\n";
}
*/