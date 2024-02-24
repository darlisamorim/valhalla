<?php

namespace Source\Core;
use Source\Support\Seo;

/**
 * Valhalla | Class Controller
 *
 * @author Darlis A. Amorim <eu@darlisalvesamorim.dev>
 * @package Source\Core
 */
class Controller
{
      protected $view;
      protected $seo;
      public function __construct(string $pathToView = null)
      {
            $this->view = new View($pathToView);
            $this->seo = new Seo();
      }

}