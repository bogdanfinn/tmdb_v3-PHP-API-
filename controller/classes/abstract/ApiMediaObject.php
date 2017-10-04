<?php


/**
 * 	This class is the base class for movies and tv shows you get from the TMDB Api
 *
 *	@package TMDB-V3-PHP-API
 * 	@author Bogdan Finn | <a href="https://twitter.com/BogdanFinn">Twitter</a>
 * 	@version 0.1
 * 	@date 14/09/2017
 * 	@link https://github.com/pixelead0/tmdb_v3-PHP-API-
 * 	@copyright Licensed under BSD (http://www.opensource.org/licenses/bsd-license.php)
 */
abstract class ApiMediaObject extends ApiBaseObject
{

    const MEDIA_TYPE_TV = 'tv';
    const MEDIA_TYPE_MOVIE = 'movie';
    const CREDITS_TYPE_CAST = 'cast';
    const CREDITS_TYPE_CREW = 'crew';

    /**
     * 	Get the MediaObjects Poster
     *
     * 	@return string
     */
    public function getPoster() {
        return $this->get('poster_path');
    }

    /**
     * 	Get the MediaObjects vote average
     *
     * 	@return int
     */
    public function getVoteAverage() {
        return $this->get('vote_average');
    }

    /**
     * 	Get the MediaObjects vote count
     *
     * 	@return int
     */
    public function getVoteCount() {
        return $this->get('vote_count');
    }

    /**
     * Get the MediaObjects Cast
     * @return array of Person
     */
    public function getCast(){
        return $this->getCredits(self::CREDITS_TYPE_CAST);
    }

    /**
     * Get the Cast or the Crew of an MediaObjects
     * @param string $key
     * @return array of Person
     */
    protected function getCredits($key){
        $persons = [];

        foreach ($this->get('credits')[$key] as $data) {
            $persons[] = new Person($data);
        }

        return $persons;
    }

    /**
     * Get the MediaObjects crew
     * @return array of Person
     */
    public function getCrew(){
        return $this->getCredits(self::CREDITS_TYPE_CREW);
    }

}