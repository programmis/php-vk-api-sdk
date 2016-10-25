<?php

$hook = 'pre-commit.sh';

chmod($hook, 0755);
exec('ln -s -f ' . __DIR__ . '/' . $hook . ' ' . __DIR__ . '/.git/hooks/' . preg_replace('/\.sh$/', '', $hook));
