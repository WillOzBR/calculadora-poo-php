<?php 
//Classe Calculadora

class Calc{
    private $a;
    private $b;
    private $c;


    public function __construct(float $a, float $b){
        $this -> a = $a;
        $this -> b = $b;
    }

    public function somar(float $a, float $b){
        $this->setC($this->getA()+$this->getB());
		print("O valor de c é = {$this->getC()}");
		return $this;
    }

    /**
	 * @return mixed
	 */
	public function getA() {
		return $this->a;
	}
	
	/**
	 * @param mixed $a 
	 * @return self
	 */
	public function setA($a): self {
		$this->a = $a;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getB() {
		return $this->b;
	}
	
	/**
	 * @param mixed $b 
	 * @return self
	 */
	public function setB($b): self {
		$this->b = $b;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getC() {
		return $this->c;
	}
	
	/**
	 * @param mixed $c 
	 * @return self
	 */
	public function setC($c): self {
		$this->c = $c;
		return $this;
	}
}
?>