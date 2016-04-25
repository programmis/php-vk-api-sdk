<?php

namespace VkSdk\Logger;


use Psr\Log\AbstractLogger;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;

class Logger extends AbstractLogger
{
    
    const VK_CONFIG_FILE = "/../../../app/config/config.yml";
    

    public function log($level, $message, array $context = array())
    {
        echo '[' . date("Y-m-d H:i:s") . '] php.' . $level . " " . $message . "\n";        
    }


    public static function getConfigParam($param, $required = false)
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
            $logger = new Logger();
            if ($required) {
                $logger->critical("Unable to parse config: " . $pe->getMessage());
                throw new \Exception($pe->getMessage());
            } else {
                $logger->debug("Unable to parse config: " . $pe->getMessage());
            }
        }

        return null;
    }
}