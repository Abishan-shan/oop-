<?php


abstract class shape
{
    protected $color;
    protected $isfilled;
    
    public function __construct($color,$isfilled)
    {
        $this->color=$color;
        $this->isfilled=$isfilled;
    }
    public function setColor($color)
    {
        $this->color=$color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function isfilled()
    {
        return $this->isfilled;
    }

    public function makeHollow()
    {
        $this->isfilled=false;
    }
    public function fill()
    {
        $this->isfilled=true;
    }

 abstract public function getArea();  
}

class square extends shape 
{
    private $length;

    public function __construct($col,$isfilled,$length)
    {
        $this->length=$length;
        parent::__construct($col,$isfilled);
    }
    public function setColor($color)
    {
        echo "<br>setting the color is: {$this->color}";
    }

    public function setLength($length)
    {
        $this->length=$length;
    }

    public function getLength()
    {
        return $this->length;
    }
    public function getArea()
    {
        return pow($this->length,2);
    }
}

class circle extends shape 
{
    private $radious;

    public function __construct($col,$isfilled,$radious)
    {
        $this->radious=$radious;
        parent::__construct($col,$isfilled);
    }

    public function setRadious($radious)
    {
        $this->radious=$radious;
    }

    public function getRadious()
    {
        return $this->radious;
    }

    public function getArea()
    {
        return M_PI*pow($this->radious,2);
    }
}

//$shape=new shape("red",true);
//print($shape->getColor());
echo "<br>"; 
//print($shape->isfilled());

$shape1 =new square("blue",true,10);
$shape1->setColor("green");
//$shape1->fill();
echo "<br>"; 
print($shape1->getColor());
echo "<br>"; 
print($shape1->isfilled());echo "<br>";
print($shape1->getLength());

$shape2 =new circle("black",true,3);
//$shape2->setColor("black");
//$shape2->fill();
echo "<br>"; 
print($shape2->getColor());
echo "<br>"; 
print($shape2->isfilled());echo "<br>";
print($shape2->getArea());



?>