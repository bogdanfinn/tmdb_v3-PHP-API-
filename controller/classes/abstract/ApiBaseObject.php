<?php

/**
 * 	This class is the base class for all data all the data you can get from the TMDB Api
 *
 *	@package TMDB-V3-PHP-API
 * 	@author Bogdan Finn | <a href="https://twitter.com/BogdanFinn">Twitter</a>
 * 	@version 0.1
 * 	@date 14/09/2017
 * 	@link https://github.com/pixelead0/tmdb_v3-PHP-API-
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
abstract class ApiBaseObject
{

    protected $_data;

    /**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the ApiObject
     */
    public function __construct($data) {
        $this->_data = $data;
    }

    /**
     * 	Get the ApiObject id
     *
     * 	@return int
     */
    public function getID() {
        return $this->get('id');
    }

    /**
     *  Get Generic.<br>
     *  Get a item of the array, you should not get used to use this, better use specific get's.
     *
     * 	@param string $item The item of the $data array you want
     * 	@return array
     */
    public function get($item = ''){

        if('' === $item){
            return $this->_data;
        }

        if(array_key_exists($item, $this->_data)){
            return $this->_data[$item];
        }

        return null;
    }

    /**
     * 	Get the JSON representation of the TVShow
     *
     * 	@return string
     */
    public function getJSON() {
        return json_encode($this->_data, JSON_PRETTY_PRINT);
    }
}