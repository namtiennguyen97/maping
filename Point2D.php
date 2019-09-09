<?php


class Point2D
{
public $x;
public $y;
public $arr=[];
//method
public function __construct($x,$y)
{
    $this->arr= [];
    $this->x= $x;
    $this->y=$y;
}

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }
    //set xy
    public function setXY($x,$y){
        array_push($this->arr,$x,$y);
    }
    public function getXY(){
        return $this->arr;
    }
    public function toString(){
        foreach ($this->getXY() as $value){
            echo $value.",";
        }
}
}




















