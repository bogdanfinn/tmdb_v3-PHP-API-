<?php
/**
 * 	This class handles all the data you can get from a Episode
 *
 *	@package TMDB-V3-PHP-API
 * 	@author Alvaro Octal | <a href="https://twitter.com/Alvaro_Octal">Twitter</a>
 * 	@version 0.1
 * 	@date 11/01/2015
 * 	@link https://github.com/Alvaroctal/TMDB-PHP-API
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */

class Episode extends ApiBaseObject{

    /**
     * 	Construct Class
     *
     * 	@param array $data An array with the data of the Episode
     *  @param $idTVShow
     */
    public function __construct($data, $idTVShow = 0) {
        parent::__construct($data);

        $this->_data['tvshow_id'] = $idTVShow;
    }


    /**
     * 	Get the Episode's name
     *
     * 	@return string
     */
    public function getName() {
        return $this->get('name');
    }

    /**
     *  Get the Season's TVShow id
     *
     *  @return int
     */
    public function getTVShowID() {
        return $this->get('tvshow_id');
    }

    /**
     *  Get the Season's number
     *
     *  @return int
     */
    public function getSeasonNumber() {
        return $this->get('season_number');
    }

    /**
     * 	Get the Episode's number
     *
     * 	@return string
     */
    public function getEpisodeNumber() {
        return $this->get('episode_number');
    }

    /**
     *  Get the Episode's Overview
     *
     *  @return string
     */
    public function getOverview() {
        return $this->get('overview');
    }

    /**
     * 	Get the Seasons's Still
     *
     * 	@return string
     */
    public function getStill() {
        return $this->get('still_path');
    }

    /**
     * 	Get the Season's AirDate
     *
     * 	@return string
     */
    public function getAirDate() {
        return $this->get('air_date');
    }

    /**
     * 	Get the Episode's vote average
     *
     * 	@return int
     */
    public function getVoteAverage() {
        return $this->get('vote_average');
    }

    /**
     * 	Get the Episode's vote count
     *
     * 	@return int
     */
    public function getVoteCount() {
        return $this->get('vote_count');
    }
}