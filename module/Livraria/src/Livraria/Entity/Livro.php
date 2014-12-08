<?php

namespace Livraria\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="livros")
* @ORM\Entity(repositoryClass="Livraria\Entity\LivroRepository")
*/

class Livro
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	* @var int
	*/
	protected $id;

	/**
	* @ORM\Column(type="text")
	* @var string
	*/
	protected $nome;

	/**
	* @ORM\ManyToOne(targetEntity="Livraria\Entity\Categoria", inversedBy="livro")
	* @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
	*/
	protected $categoria;

	/**
	* @ORM\Column(type="text")
	* @var string
	*/
	protected $autor;

	/**
	* @ORM\Column(type="text")
	* @var string
	*/
	protected $isbn;

	/**
	* @ORM\Column(type="float")
	* @var float
	*/	
	protected $valor;

	public function __construct($options=null)
	{
		Configurator::configure($this, $options);
	}


    /**
     * Gets the value of id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param int $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of nome.
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Sets the value of nome.
     *
     * @param string $nome the nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Gets the value of categoria.
     *
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Sets the value of categoria.
     *
     * @param mixed $categoria the categoria
     *
     * @return self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Gets the value of autor.
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Sets the value of autor.
     *
     * @param string $autor the autor
     *
     * @return self
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Gets the value of isbn.
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Sets the value of isbn.
     *
     * @param string $isbn the isbn
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Gets the value of valor.
     *
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Sets the value of valor.
     *
     * @param float $valor the valor
     *
     * @return self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    public function toArray() 
    {
    	return array(
    		'id' => $this->getId(),
    		'nome' => $this->getNome(),
    		'autor' => $this->getAutor(),
    		'isbn' => $this->getIsbn(),
    		'valor' => $this->getValor(),
    		'categoria' => $this->getCategoria()->getId()
    	);
    }
}