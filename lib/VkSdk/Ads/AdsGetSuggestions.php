<?php
namespace VkSdk\Ads;

use VkSdk\Includes\Request;

/**
 * Returns a set of auto-suggestions for various targeting parameters.
 * Class AdsGetSuggestions
 *
 * @package VkSdk\Ads
 */
class AdsGetSuggestions extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["section"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "ads.getSuggestions";
    }

    /**
     * IDs of cities where objects are searched in, separated with a comma.
     *
     * @return $this
     *
     * @param string $cities
     */
    public function setCities($cities)
    {
        $this->vkarg_cities = $cities;

        return $this;
    }

    /**
     * ID of the country objects are searched in.
     *
     * @return $this
     *
     * @param integer $country
     */
    public function setCountry($country)
    {
        $this->vkarg_country = $country;

        return $this;
    }

    /**
     * Objects IDs separated by commas. If the parameter is passed, 'q, country, cities' should not be passed.
     *
     * @return $this
     *
     * @param string $ids
     */
    public function setIds($ids)
    {
        $this->vkarg_ids = $ids;

        return $this;
    }

    /**
     * Language of the returned string values. Supported languages:; *ru — Russian;; *ua — Ukrainian;; *en — English.;
     *
     * @return $this
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->vkarg_lang = $lang;

        return $this;
    }

    /**
     * Filter-line of the request (for countries, regions, cities, streets, schools, interests, positions).
     *
     * @return $this
     *
     * @param string $q
     */
    public function setQ($q)
    {
        $this->vkarg_q = $q;

        return $this;
    }

    /**
     * Section, suggestions are retrieved in. Available values:; *countries — request of a list of countries. If q is not set or blank, a short list of countries is shown. Otherwise, a full list of countries is shown.; *regions — requested list of regions.  'country' parameter is required.; *cities — requested list of cities. 'country' parameter is required.; *districts — requested list of districts.  'cities' parameter is required.; *stations — requested list of subway stations.  'cities' parameter is required.; *streets — requested list of cities. 'cities' parameter is required.; *schools — requested list of educational organizations.  'cities' parameter is required.; *interests — requested list of interests.; *positions — requested list of positions (professions).; *group_types — requested list of group types.; *religions — requested list of religious commitments.; *browsers — requested list of browsers and mobile devices.;
     *
     * @return $this
     *
     * @param string $section
     */
    public function setSection($section)
    {
        $this->vkarg_section = $section;

        return $this;
    }
}
