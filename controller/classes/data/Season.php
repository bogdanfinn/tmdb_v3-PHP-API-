<?php
/**
 * 	This class handles all the data you can get from a Season
 *
 *	@package TMDB-V3-PHP-API
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */

class Season extends ApiBaseObject{

    /**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the Season
     */
    public function __construct($data, $idTVShow = 0) {
        parent::__construct($data);
        $this->_data['tvshow_id'] = $idTVShow;
    }

    /**
     * 	Get the Season's name
     *
     * 	@return string
     */
    public function getName() {
        return $this->_data['name'];
    }

    /**
     *  Get the Season's TVShow id
     *
     *  @return int
     */
    public function getTVShowID() {
        return $this->_data['tvshow_id'];
    }

    /**
     * 	Get the Season's number
     *
     * 	@return int
     */
    public function getSeasonNumber() {
        return $this->_data['season_number'];
    }

    /**
     * 	Get the Season's number of episodes
     *
     * 	@return int
     */
    public function getNumEpisodes() {
        return count($this->_data['episodes']);
    }

    /**
     *  Get a Seasons's Episode
     *
     *  @param int $numEpisode The episode number
     * 	@return int
     */
    public function getEpisode($numEpisode) {
        return new Episode($this->_data['episodes'][$numEpisode]);
    }

    /**
     *  Get the Season's Episodes
     *
     * 	@return Episode[]
     */
    public function getEpisodes() {
        $episodes = array();

        foreach($this->_data['episodes'] as $data){
            $episodes[] = new Episode($data, $this->getTVShowID());
        }

        return $episodes;
    }

    /**
     * 	Get the Seasons's Poster
     *
     * 	@return string
     */
    public function getPoster() {
        return $this->_data['poster_path'];
    }

    /**
     * 	Get the Season's AirDate
     *
     * 	@return string
     */
    public function getAirDate() {
        return $this->_data['air_date'];
    }

}