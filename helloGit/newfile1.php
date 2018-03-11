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

    /**
     * 
     * @return string
     */
    public function outputItems()
    {
        $strOutput = '';
        foreach ($this->getAItems() as $item) {
            $strOutput .= $item . " ";
        }
        return substr($strOutput, 0, - 1);
    }
    
    /**
     * 
     * @return array|unknown
     */
    public function getAItems()
    {
        return $this->aProtasn;
    }
}