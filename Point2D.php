<?php


class Point2D
{
    public $x;
    public $y;
    public function __construct($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY(){
        return $this->x.$this->y;
    }
    public function  toString(){
        return "x=".$this->x."y=".$this->y;
    }
}
class Point3D extends Point2D
{
    public $z;
    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z=$z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function setXYZ($x, $y,$z)
    {
        parent::setXY($x, $y);
        $this->z=$z;
    }
    public function getXYZ()
    {
        return parent::getXY().$this->z;
    }
    public function toString()
    {
        return parent::toString()."z=".$this->z;
    }
}
$point2d=new Point2D(2.2,3.1);
echo $point2d->toString()."<br>";
$point3d=new Point3D(3,4,5);
echo $point3d->toString()."<br>";
echo $point3d->getXYZ();