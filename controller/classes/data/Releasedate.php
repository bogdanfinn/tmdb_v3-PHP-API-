<?php

/**
 * 	This class handles all the data you can get from a Collection
 *
 *	@package TMDB-V3-PHP-API
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */

class Releasedate
{

    /**
    Premiere
    Theatrical (limited)
    Theatrical
    Digital
    Physical
    TV
     */

    //------------------------------------------------------------------------------
    // Class Variables
    //------------------------------------------------------------------------------

    private $_data;

    /**
     *    Construct Class
     *
     * @param array $data An array with the data of a Releasedate
     */
    public function __construct($data)
    {
        $this->_data = $data;
    }



    public function getCountryCode(){

    }

    public function getDatesForCountryCode($countryCode){

    }


    /**
     *  Get Generic.<br>
     *  Get a item of the array, you should not get used to use this, better use specific get's.
     *
     * 	@param string $item The item of the $data array you want
     * 	@return array
     */
    public function get($item = ''){

        if(empty($item)){
            return $this->_data;
        }

        if(array_key_exists($item, $this->_data)){
            return $this->_data[$item];
        }

        return null;
    }
}