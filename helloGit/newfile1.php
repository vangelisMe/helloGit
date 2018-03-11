<?php
/**
 * 
 */
class hello
{

    protected $aProtasn = array();

    /**
     * 
     */
    public function __construct($aItems)
    {
        $this->aProtasn = $aItems;
    }

    
    public function getAItems()
    {
        $strOutput = '';
        foreach ($this->aProtasn as $item) {
            $strOutput .= $item . " ";
        }
        return substr($strOutput, 0, - 1);
    }
}