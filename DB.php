<?php
/**
 * Created by PhpStorm.
 * User: alan
 * Date: 5/09/18
 * Time: 7:13
 */
// archivo para conectarme a la base de datos
	class BasedeDatos extends mysqli{
        var $bloque;
        var $numRegistros;
        function BasedeDatos($servidor, $user, $pwd, $bd){
            $this->connect($servidor, $user, $pwd, $bd);
        }
        function consulta($query){
            $this->bloque = $this->query($query);
            // echo $query;
            $this->numRegistros = $this->bloque->num_rows;
        }
        function cerrarConexion(){
            $this->close();
        }
        function obtieneRegistroO(){ //Objeto
            return $this->bloque->fetch_object($value);
        }
        function obtieneRegistroA(){ //Arreglo
            return $this->bloque->fetch_array($value);
        }
    }
?>