<?php
/**
 * Flattens an array of arbitrarily nested arrays 
 * into a flat array
 * @author Tareq Anwar <trqnwr@gmail.com>
 */
class FlattenArray
{
    /**
     * This will hold our flat array
     * 
     * @var array
     */
    private $flatArray = [];

    /**
     * Flattens the array and returns it
     * @param array $arr the array we want to flat
     * @return array $flatArray the flat array
     * @access public 
     */
    public function getFlatArray($arr) {
        /**
         * Check if passed argument is array
         * if not then push it into $flatArray and return
        */
        if (!is_array($arr)) {
            array_push($this->flatArray, $arr);
            return;
        }

        /**
         * Iterate through the array and pass them to the function recursively
         */
        foreach($arr as $item) {
            $this->getFlatArray($item);
        }

        return $this->flatArray;
    }
}