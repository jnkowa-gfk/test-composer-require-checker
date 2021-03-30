<?php

namespace tests;

$exists = class_exists(\libXMLError::class, false);

if ($exists)
{
    echo 'exists';
    exit(0);
}


echo 'does not exist';
exit(1);