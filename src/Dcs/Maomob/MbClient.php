<?php

namespace Dcs\Maomob\Dcs\Maomob;

class MbClient
{

    public function request()
    {
        return [
            'a' => time()
        ];
    }

    public function makeSign()
    {
        return date('Y-m-d');
    }
}