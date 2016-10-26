<?php

namespace VkSdk\Logger;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    public function log($level, $message, array $context = [])
    {
        echo '[' . date("Y-m-d H:i:s") . '] php.' . $level . " " . $message . "\n";
    }
}
