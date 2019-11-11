<?php

namespace easyAmazonAdv\Kernel\Contracts;

use ArrayAccess;


interface Arrayable extends ArrayAccess
{
    public function toArray();
}
