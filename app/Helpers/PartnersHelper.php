<?php

namespace App\Helpers;

class PartnersHelper
{
    public static function getList(): array
    {
        return [
            'Lower Tones Place Studios' => [
                'link'  => 'https://www.facebook.com/lowertonesplace/',
                'image' => asset('images/logo_lowertones.jpg')
            ],
            'Covent Garden Studios' => [
                'link'  => 'https://www.facebook.com/CGS95',
                'image' => asset('images/logo-covent.jpg')
            ],
        ];
    }
}
