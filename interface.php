<?php

interface Sellable
{
    public function addStock($num);
    public function sellItem();
    public function getStockCount();
}

class Television implements Sellable
{
    private $screensize;
    private $stockcount;

    public function getScreensize()
    {
        return $this->screensize;
    }

    public function setScreensize($screensize)
    {
        $this->screensize=$screensize;
    }

    public function addStock($num)
    {
        $this->stockcount +=$num;
    }
    public function sellItem()
    {
        $this->stockcount -=1;
    }
   
    public function getStockCount()
    {
        return $this->stockcount; 
    }
}
echo "for Television:<br>";
$tv1= new Television();
$tv1->setScreensize("14");
$tv1->addStock(50);
print($tv1->getStockCount());
$tv1->sellItem(); echo "<br>";
print($tv1->getStockCount());
echo "<br>";
class Tennisball
{
    private $color;
    private $count;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color=$color;
    }

    public function addStock($num)
    {
        $this->count +=$num;
    }
    public function sellItem()
    {
        $this->count -=1;
    }
   
    public function getStockCount()
    {
        return $this->count; 
    }
}

echo "for tennnis ball:<br>";
$tennis1= new Tennisball();
$tennis1->setColor("blue");
$tennis1->addStock(20);
print($tennis1->getStockCount());
$tennis1->sellItem(); echo "<br>";
print($tennis1->getStockCount());
echo "<br>";


?>