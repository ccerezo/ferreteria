<?php

namespace ferreteria\ZambranoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articulo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ferreteria\ZambranoBundle\Entity\ArticuloRepository")
 */
class Articulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var decimal
     *
     * @ORM\Column(name="precio_compra", type="decimal", scale=2)
     */
    private $precioCompra;

    /**
     * @var decimal
     *
     * @ORM\Column(name="precion_venta", type="decimal", scale=2)
     */
    private $precionVenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Articulo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Articulo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Articulo
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set precioCompra
     *
     * @param decimal $precioCompra
     * @return Articulo
     */
    public function setPrecioCompra($precioCompra)
    {
        $this->precioCompra = $precioCompra;
    
        return $this;
    }

    /**
     * Get precioCompra
     *
     * @return decimal 
     */
    public function getPrecioCompra()
    {
        return $this->precioCompra;
    }

    /**
     * Set precionVenta
     *
     * @param decimal $precionVenta
     * @return Articulo
     */
    public function setPrecionVenta($precionVenta)
    {
        $this->precionVenta = $precionVenta;
    
        return $this;
    }

    /**
     * Get precionVenta
     *
     * @return decimal 
     */
    public function getPrecionVenta()
    {
        return $this->precionVenta;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Articulo
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    
        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
}
