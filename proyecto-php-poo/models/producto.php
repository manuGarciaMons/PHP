<?php

class Producto
{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Producto
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    /**
     * @param mixed $categoria_id
     * @return Producto
     */
    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string( $nombre);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     * @return Producto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string( $descripcion);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     * @return Producto
     */
    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * @param mixed $oferta
     * @return Producto
     */
    public function setOferta($oferta)
    {
        $this->oferta = $this->db->real_escape_string($oferta);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     * @return Producto
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     * @return Producto
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
        return $this;
    }

    public function  getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC ");
        return $productos;
    }

    public function  getOne(){
        $productos = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()} ");

        return $productos->fetch_object();
    }

    public function save()
    {
        $sql = "INSERT INTO productos VALUES (NULL,'{$this->getCategoriaId()}' ,'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},null,CURDATE(), '{$this->getImagen()}');";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function  delete(){
        $sql = "DELETE FROM productos WHERE id = {$this->id}";
      $delete=  $this->db->query($sql);

        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }





}
