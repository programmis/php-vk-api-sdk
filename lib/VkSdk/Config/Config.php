<?php

namespace VkSdk\Config;

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;

class Config
{
    const VK_CONFIG_FILE = "/../../../app/config/config.yml";

    public static function getParam($param, $required = false)
    {
        try {
            $yaml = new Parser();
            $parse = $yaml->parse(
                file_get_contents(
                    __DIR__ . self::VK_CONFIG_FILE
                )
            );
            if (isset($parse['vkontakte']) && isset($parse['vkontakte'][$param])) {
                return $parse['vkontakte'][$param];
            } else {
                throw new ParseException("not found '" . $param . "' config parameter");
            }
        } catch (ParseException $pe) {
            if ($required) {
                throw new \Exception("Unable to parse config: " . $pe->getMessage());
            } else {
                return false;
            }
        }
    }
}
