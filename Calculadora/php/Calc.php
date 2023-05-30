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
		print("O valor da soma de {$this->getA()} + {$this->getB()} é = {$this->getC()}<br>");
		return $this;
    }

	public function subtrair(float $a, float $b){
        $this->setC($this->getA()-$this->getB());
		print("O valor da subtração de {$this->getA()} - {$this->getB()} é = {$this->getC()}<br>");
		return $this;
    }

	public function multiplicar(float $a, float $b){
        $this->setC($this->getA()*$this->getB());
		print("O valor da multiplicação de {$this->getA()} x {$this->getB()} é = {$this->getC()}<br>");
		return $this;
    }

	public function dividir(float $a, float $b){
		if($this->getB()==0){
			print("Erro! Divisão por 0!");
		} else{
        $this->setC($this->getA()/$this->getB());
		print("O valor da divisão de {$this->getA()} / {$this->getB()} é = {$this->getC()}<br>");
		return $this;
		}
		
    }

	public function exponenciar(float $a, float $b){
        $this->setC(pow($this->getA(),$this->getB()));
		print("O valor da exponenciação de {$this->getA()} elevado a {$this->getB()} é = {$this->getC()}<br>");
		return $this;
    }

	public function acharRaiz(float $a, float $b){
		if($this->getA()!=0){
			$this->setC(sqrt($this->getA()));
			print("O valor da raiz de {$this->getA()} é = {$this->getC()}<br>");
		}else if($this->getB()!=0){
			$this->setC(sqrt($this->getB()));
			print("O valor da raiz de {$this->getB()} é = {$this->getC()}<br>");
		}
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