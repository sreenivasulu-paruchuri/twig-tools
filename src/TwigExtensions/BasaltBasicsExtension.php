<?php

namespace BasaltInc\TwigTools\TwigExtensions;

use BasaltInc\TwigTools\TwigFunctions;
use Twig\Extension\AbstractExtension;
use Twig\Extension\ExtensionInterface;

class BasaltBasicsExtension extends AbstractExtension implements ExtensionInterface {

  public function getFunctions() {
    return [
        TwigFunctions::get_data(),
    ];
  }

}
