<?php

namespace XclimbDE\Containers;

use Plenty\Plugin\Templates\Twig;

class XclimbDEContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('XclimbDE::Stylesheet');
    }
}