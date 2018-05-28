<?php
/**
Divisor has 1 word for 1 value which should be the divisor
 */

class Divisor
{

    private $word = "";
    private $value = 0;


    public function __construct($w, $v)
    {
        $this->word = $w;
        $this->value = $v;
    }

    /**
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * @param string $word
     */
    public function setWord($word)
    {
        $this->word = $word;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }





}