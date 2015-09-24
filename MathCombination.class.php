<?php
/**
 * @package Combination algorithm in Mathematics
 * */
class MathCombination
{
    /**
     * @todo    The loop will be combined with each element of the array.
     * @author  Sharif
     * @since   2015-09-22
     * 
     * @access  public
     * @param   array       $data       An array of combinations is needed.
     * @param   array       $part       Partially integrated array
     * @return  array       $result     Sorted array
     * */
    public function arrayCombination($data,$part=array())
    {
        //Data already exists
        if( is_array($part) && count($part) > 0 ) {
            foreach( $part as $v ) {
                foreach( $data as $val ) {
                    $result[]   = $v.','.$val;
                }
            }
        }
        //Assignment for the first time
        else {
            $result = $data;
        }
        return $result;
    }
    
    /**
     * @todo    Combination of an array
     * @author  Sharif
     * @since   2015-09-11
     * 
     * @access  public
     * @param   array       $sort       An array of combinations
     * @param   int         $num        Elements to be taken
     * @return  array       $result     Combined array
     * */
    public function Combination($sort, $num)
    {
        $result = $data = array();
        if( $num == 1 ) {
            return $sort;
        }
        foreach( $sort as $k=>$v ) {
            unset($sort[$k]);
            $data   = $this->Combination($sort,$num-1);
            foreach($data as $row) {
                $result[] = $v.','.$row;  
            }
        }
        return $result;
    }
}