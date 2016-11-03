<?php

namespace VkSdk\Includes;

interface VkInterface
{
    const API_VERSION = '5.29';
    const API_URL = "https://api.vk.com/method/";
    const MAGIC_PREFIX = 'vkarg';

    const ERROR_CODE_CAPTCHA_NEEDED = 14;
}
