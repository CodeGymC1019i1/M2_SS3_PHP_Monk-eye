<?php


class QuadraticEquation
{
    private $a;
    private $b;
    private $c;
    private $Discriminant;
    private $r1;
    private $r2;

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function setC($c)
    {
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        $this->Discriminant = pow($this->b, 2) - 4 * $this->a * $this->c;
        return $this->Discriminant;
    }

    public function getR1()
    {
        $this->r1 = (-$this->b + sqrt(pow($this->b, 2) - 4 * $this->a * $this->c)) / (2 * $this->a);
        return $this->r1;
    }

    public function getR2()
    {
        $this->r2 = (-$this->b - sqrt(pow($this->b, 2) - 4 * $this->a * $this->c)) / (2 * $this->a);
        return $this->r2;

    }

    public function result()
    {
        if ($this->getDiscriminant() > 0) {
            echo "Phương trình có 2 nghiệm là" . $this->getR1(). "và".$this->getR2();
        }
        if ($this->getDiscriminant() == 0) {
            echo "Phương trình có 1 nghiệm duy nhất là" . $this->getR1();
        }
        if ($this->getDiscriminant() < 0) {
            echo "Phương trình vô nghiệm";
        }
    }

}