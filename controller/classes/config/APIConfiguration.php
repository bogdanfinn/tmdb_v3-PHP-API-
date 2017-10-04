<?php
/**
 *  This class handles all the data you can get from the api Configuration
 *
 *	@package TMDB_V3_API_PHP
 *  @author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 *  @version 0.1
 *  @date 20/01/2015
 *  @link https://github.com/Alvaroctal/TMDB-PHP-API
 *  @copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */

class APIConfiguration extends ApiBaseObject{

    /** 
     *  Get the Configuration's base URL for images
     *
     *  @return string
     */
    public function getImageBaseURL() {
        return $this->_data['images']['base_url'];
    }

    /** 
     *  Get the Configuration's secure base URL for images
     *
     *  @return string
     */
    public function getSecureImageBaseURL() {
        return $this->_data['images']['secure_base_url'];
    }

    /** 
     *  Get the Configuration's list of sizes for backdrops
     *
     *  @return string[]
     */
    public function getBackdropSizes() {
        return $this->_data['images']['backdrop_sizes'];
    }

    /** 
     *  Get the Configuration's list of sizes for logos
     *
     *  @return string[]
     */
    public function getLogoSizes() {
        return $this->_data['images']['logo_sizes'];
    }

    /** 
     *  Get the Configuration's list of sizes for posters
     *
     *  @return string[]
     */
    public function getPosterSizes() {
        return $this->_data['images']['poster_sizes'];
    }

    /** 
     *  Get the Configuration's list of sizes for profiles
     *
     *  @return string[]
     */
    public function getProfileSizes() {
        return $this->_data['images']['profile_sizes'];
    }

    /** 
     *  Get the Configuration's list of sizes for stills
     *
     *  @return string[]
     */
    public function getStillSizes() {
        return $this->_data['images']['still_sizes'];
    }
}