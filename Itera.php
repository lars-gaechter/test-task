<?php
/**
Iterator
Max and Min Value
 */

class Itera
{
private $maxvalue = 0;
private $minvalue = 0;
    public function __construct($max, $min)
    {
        $this->maxvalue = $max;
        $this->minvalue = $min;
    }

    /**
     * @return int
     */
    public function getMaxvalue()
    {
        return $this->maxvalue;
    }

    /**
     * @param int $maxvalue
     */
    public function setMaxvalue($maxvalue)
    {
        $this->maxvalue = $maxvalue;
    }

    /**
     * @return int
     */
    public function getMinvalue()
    {
        return $this->minvalue;
    }

    /**
     * @param int $minvalue
     */
    public function setMinvalue($minvalue)
    {
        $this->minvalue = $minvalue;
    }



}