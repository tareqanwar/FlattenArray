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
    static $flatArray = [];

    /**
     * Flattens the array and returns it
     * @param array $arr the array we want to flat
     * @return array $flatArray the flat array
     * @access public 
     * @static
     */
    public static function getFlatArray($arr) {
        /**
         * Check if passed argument is array
         * if not then push it into $flat array and retun
        */
        if (!is_array($arr)) {
            array_push(self::$flatArray, $arr);
            return;
        }

        /**
         * Iterate through the array and pass them to the function recursively
         */
        foreach($arr as $item) {
            self::getFlatArray($item);
        }

        return self::$flatArray;
    }
}