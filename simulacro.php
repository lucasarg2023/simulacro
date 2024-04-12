<?php


class cliente {

    private $nombre ;
    private $apellido;
    private $dadoVaja;
    private $tipo;
    private $numDoc ;

    public function __construct ($nombre , $apellido , $dadoVaja, $tipo, $numDoc) {
        $this -> nombre = $nombre ;
        $this -> apellido = $apellido ;
        $this -> dadoVaja = $dadoVaja ;
        $this -> tipo = $tipo ;
        $this -> numDoc = $numDoc ;
    }

    //gets
    public function getNombre (){
        return $this -> nombre ;
    }
    public function getApellido (){
        return $this -> apellido ;
    }
    public function getDadoVaja (){
        return $this -> dadoVaja ;
    }
    public function getTipo (){
        return $this -> tipo ;
    }
    public function getNumDoc (){
        return $this -> numDoc ;
    }

    //sets

    public function setNombre ($nombre){
        $this -> nombre = $nombre  ;
    }
    public function setApellido ($apellido){
        $this -> apellido = $apellido ;
    }
    public function setDadoVaja ($dadoVaja){
        $this -> dadoVaja = $dadoVaja ;
    }
    public function setTipo ($tipo){
        $this -> tipo = $tipo;
    }
    public function setNumDoc ($numDoc){
        $this -> numDoc = $numDoc;
    }


    public function VerifBaja(){
		if ($this->getDadoVaja()) {
			
			
			$this->setDadoVaja ("activo") ;
		} else {
            $this->setDadoVaja ("baja") ;
        }

	}

    public function __toString (){
        $cadena =  " nombre: " . $this -> getNombre () ."\n" .
        " apellido: " . $this -> getApellido () ."\n" . 
        "estado del cliente " .  $this -> getDadoVaja() ."\n" . 
        " tipo doc:  " . $this -> getTipo () ."\n" . 
        " numero doc: " . $this -> getNumDoc () . "\n" ;
     
        return $cadena;
    }
}




/*
En la clase Moto:
1. Se registra la siguiente información: código, costo, año fabricación, descripción, porcentaje
incremento anual, activa (atributo que va a contener un valor true, si la moto está disponible para la
venta y false en caso contrario).
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método toString para que retorne la información de los atributos de la clase.
5. Implementar el método darPrecioVenta el cual calcula el valor por el cual puede ser vendida una moto.
Si la moto no se encuentra disponible para la venta retorna un valor < 0. Si la moto está disponible para
la venta, el método realiza el siguiente cálculo:
$_venta = $_compra + $_compra * (anio * por_inc_anual)
donde $_compra: es el costo de la moto.
anio: cantidad de años transcurridos desde que se fabricó la moto.
por_inc_anual: porcentaje de incremento anual de la moto.
*/


class cliente {

    private $codigo ;
    private $costo;
    private $anioFabric;
    private $descrip;
    private $porcIncrAnual ;
    private $activa ;

    public function __construct ($codigo, $costo , $anioFabric, $descrip, $porcIncrAnual, $activa ) {
        $this -> codigo = $codigo ;
        $this -> costo = $costo ;
        $this -> anioFabric = $anioFabric ;
        $this -> descrip = $descrip ;
        $this -> porcIncrAnual = $porcIncrAnual ;
        $this -> activa = $activa ;
    }

    //gets
    public function getCodigo (){
        return $this -> codigo ;
    }
    public function getCosto (){
        return $this -> costo ;
    }
    public function getAnioFabric (){
        return $this -> anioFabric ;
    }
    public function getDescrip (){
        return $this -> descrip ;
    }
    public function getPorcIncrAnual (){
        return $this -> porcIncrAnual ;
    }
    public function getActiva (){
        return $this -> activa ;
    }

    //sets

    public function setCodigo ($codigo){
         $this -> codigo = $codigo ;
    }
    public function setCosto ($costo){
         $this -> costo = $costo;
    }
    public function setAnioFabric ($anioFabric){
         $this -> anioFabric = $anioFabric;
    }
    public function setDescrip ($descrip){
         $this -> descrip = $descrip;
    }
    public function setPorcIncrAnual ($porcIncrAnual){
         $this -> porcIncrAnual = $porcIncrAnual ;
    }
    public function setActiva ($activa){
         $this -> activa = $activa ;
    }

    public function darPrecioVenta() {
        $venta = -1; // Valor predeterminado si la moto no está disponible para la venta
    
        if ($this->getActiva()) {
            // Calcular el precio de venta si la moto está disponible
            $venta = $this->getCosto() + $this->getCosto() * ($this->getAnioFabricacion() * $this->getPorcentajeIncrementoAnual());
        }
    
        return $venta;


    }
    public function __toString (){
        $cadena =  " codigo: " . $this -> getCodigo () ."\n" .
        " costo: " . $this -> getCosto () ."\n" . 
        " anioFabric: " . $this -> getAnioFabric () . "\n" ;
        "descripcion " .  $this -> getDescrip() ."\n" . 
        " porc anual:  " . $this -> getPorcIncrAnual () ."\n" . 
        " activa: " . $this -> getActiva () . "\n" ;
        " precio de venta: " . $this -> darPrecioVenta () . "\n" ;
     
        return $cadena;
    }


}

/*
En la clase Venta:
1. Se registra la siguiente información: número, fecha, referencia al cliente, referencia a una colección de
motos y el precio final.
2. Método constructor que recibe como parámetros cada uno de los valores a ser asignados a cada
atributo de la clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clase.
5. Implementar el método incorporarMoto($objMoto) que recibe por parámetro un objeto moto y lo
incorpora a la colección de motos de la venta, siempre y cuando sea posible la venta. El método cada
vez que incorpora una moto a la venta, debe actualizar la variable instancia precio final de la venta.
Utilizar el método que calcula el precio de venta de la moto donde crea necesario
*/


class cliente {

    private $numero ;
    private $fecha;
    private $referenciaClient;
    private $arrayColeccMotos;
    private $precioFinal ;

    public function __construct ($numero, $fecha , $referenciaClient, $arrayColeccMotos, $precioFinal,  ) {
        $this -> numero = $numero ;
        $this -> fecha = $fecha ;
        $this -> referenciaClient = $referenciaClient ;
        $this -> arrayColeccMotos = $arrayColeccMotos ;
        $this -> precioFinal = $precioFinal ;

    }

    //gets
    public function getnumero (){
        return $this -> numero ;
    }
    public function getfecha (){
        return $this -> fecha ;
    }
    public function getreferenciaClient (){
        return $this -> referenciaClient ;
    }
    public function getarrayColeccMotos (){
        return $this -> arrayColeccMotos ;
    }
    public function getprecioFinal (){
        return $this -> precioFinal ;
    }
  

    //sets

    public function setnumero ($numero){
         $this -> numero = $numero;
    }
    public function setfecha ($numero){
         $this -> fecha = $numero ;
    }
    public function setreferenciaClient ($referenciaClient){
         $this -> referenciaClient = $referenciaClient ;
    }
    public function setarrayColeccMotos ($arrayColeccMotos){
         $this -> arrayColeccMotos = $arrayColeccMotos;
    }
    public function setprecioFinal ($arrayColeccMotos){
        return $this -> precioFinal = $arrayColeccMotos;
    }

    public function incorporarMoto($objMoto) {
        // Verificar si la moto está disponible para la venta
        if ($objMoto->getActiva()) {
            // Agregar la moto a la colección de motos de la venta
            $this->getarrayColeccMotos() [] = $objMoto;
            // Actualizar el precio final de la venta
            $this->getprecioFinal () += $objMoto->darPrecioVenta();
        }
    }
    
     public function __toString (){
        $cadena =  " numero: " . $this -> getnumero () ."\n" .
        " fecha: " . $this -> getfecha () ."\n" . 
        " referenciaClient: " . $this -> getreferenciaClient () . "\n" ;
        "coleccion motos " .  $this -> getarrayColeccMotos() ."\n" . 
        " precio final:  " . $this -> getprecioFinal () ."\n" . 
        " activa: " . $this -> getActiva () . "\n" ;
        return $cadena;
    }


}
