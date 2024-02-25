<?php

use MatthiasMullie\Minify;

if(strpos(url(), "localhost"))
{

      // css
      $minCSS = new MatthiasMullie\Minify\CSS();
      $minCSS->add( __DIR__ . "/../../public/styles/oocs.css");

      $cssDir = dir (  __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css");
      foreach ( $cssDir as $css )
      {
            $cssFile = __DIR__ . "/../../themes/"  . CONF_VIEW_THEME . "/assets/css/{$css}"; 
            if (is_file ( $cssFile ) && pathinfo ( $cssFile )['extension'] == "css")
            {
                  $minCSS->add( $cssFile );
            }
            // var_dump( $cssFile );
            // echo "Test". $cssFile ."foi ?";
      }

      //Minify 
      $minCSS->minify( __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css/style.css" );

      // js
}