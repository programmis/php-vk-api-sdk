<?php
/**
 * Created by PhpStorm.
 * User: alfred
 * Date: 05.11.16
 * Time: 21:49
 */

namespace VkSdk\Audio\Includes;

/**
 * Жанр возвращается в виде числа в поле genre при получении информации
 * об аудиозаписи.
 *
 * @see https://vk.com/dev/objects/audio_genres
 *
 * Class AudioGenres
 * @package VkSdk\Audio\Includes
 */
class AudioGenres
{
    /** Rock; */
    const GENRE_ROCK = 1;
    /** Pop; */
    const GENRE_POP = 2;
    /** Rap & Hip-Hop; */
    const GENRE_RAP = 3;
    /** Easy Listening; */
    const GENRE_EASY = 4;
    /** House & Dance; */
    const GENRE_HOUSE = 5;
    /** Instrumental; */
    const GENRE_INSTRUMENTAL = 6;
    /** Metal; */
    const GENRE_METAL = 7;
    /** Alternative; */
    const GENRE_ALTERNATIVE = 21;
    /** Dubstep; */
    const GENRE_DUBSTEP = 8;
    /** Jazz & Blues; */
    const GENRE_JAZZ = 1001;
    /** Drum & Bass; */
    const GENRE_DRUM = 10;
    /** Trance; */
    const GENRE_TRANCE = 11;
    /** Chanson; */
    const GENRE_CHANSON = 12;
    /** Ethnic; */
    const GENRE_ETHNIC = 13;
    /** Acoustic & Vocal; */
    const GENRE_ACOUSTIC = 14;
    /** Reggae; */
    const GENRE_REGGAE = 15;
    /** Classical; */
    const GENRE_CLASSICAL = 16;
    /** Indie Pop; */
    const GENRE_INDIE = 17;
    /** Speech; */
    const GENRE_SPEECH = 19;
    /** Electropop & Disco; */
    const GENRE_ELECTROPOP = 22;
    /** Other. */
    const GENRE_OTHER = 18;
}
