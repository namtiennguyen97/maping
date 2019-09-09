<?php

include_once 'Point2D.php';
class Point3D extends Point2D
{
public $z;
public function __construct($x, $y,$z)
{
   $this->z= $z;
}

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function setXYZ($x,$y,$z){
        array_push($this->arr,$x,$y,$z);
    }
    public function getXYZ(){
        return $this->arr;
    }
    public function toString()
    {
        foreach ($this->getXYZ() as $value){
            echo $value.",";
        }
    }
}













