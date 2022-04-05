Para probar el código fuente hay que seguir los siguientes pasos:

1- Descargar el código mediante Archivo.zip

2- Lo descomprimimos dentro de una carpeta llamada "academia" en el directorio localhost de nuestro servidor web

3- Instalamos la Base de Datos importando el archivo "almamater.sql" dentro de esta misma carpeta

4- Debemos modificar el constructor de la clase mysqlConnect

//Construcctor por Defecto
public function __construct()
{
    $this->server = "localhost";
    $this->user = "root";  // TU USUARIO DE ROOT U OTRO USUARIO DE TU mysql
    $this->password = "root"; // TU PASSWORD DE ROOT O DEL USUARIO ELEGIDO EN TU mysql
    $this->database = "almamater";
    $this->mysqli = new mysqli($this->server, $this->user, $this->password, $this->database);
    $this->mysqli->set_charset("utf8");
}

5- Probar el código en https://localhost/academia/ (La url puede variar en función de cómo se acceda a localhost)
