<?php
require '../../vendor/autoload.php';

class Pessoa
{
	public $nome;
	protected $idade;
	private $proficao;

	function __construct($nome, $idade, $proficao)
	{
		$this->nome = $nome;
		$this->idade = $idade;
		$this->proficao = $proficao;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getIdade()
	{
		return $this->idade;

	}
	public function getProficao()
	{
		return $this->proficao;
	}
}

$array = array(
	new Pessoa('Romerito',26,'Profesor'),
	new Pessoa('Flavio',18,'Aluno'),
	new Pessoa('Alex',46,'Diretor')
);

dump($array);

?>
