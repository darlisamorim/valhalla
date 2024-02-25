<?php

if(!strpos(url(), "localhost"))
{

      // CSS Minify's 
      $minCSS = new MatthiasMullie\Minify\CSS();
      $minCSS->add( __DIR__ . "/../../public/styles/oocs.css");

      // CSS THEME
      $cssDir = scandir (  __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css");
      foreach ( $cssDir as $css )
      {
            $cssFile = __DIR__ . "/../../themes/"  . CONF_VIEW_THEME . "/assets/css/{$css}"; 
            if (is_file ( $cssFile ) && pathinfo ( $cssFile )['extension'] == "css")
            {
                  $minCSS->add( $cssFile );
                  // var_dump ( $cssFile );
            }
      }

      // Minify Start 
      $minCSS->minify( __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/css/styles.css" );


      // JS Minify's 
      $minJS = new MatthiasMullie\Minify\JS();
      $minJS->add( __DIR__ . "/../../public/scripts/jquery-ui.min.js");
      $minJS->add( __DIR__ . "/../../public/scripts/jquery.min.js");

      // JS THEME
      $jsDir = scandir (  __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/js");
      foreach ( $jsDir as $js )
      {
            $jsFile = __DIR__ . "/../../themes/"  . CONF_VIEW_THEME . "/assets/js/{$js}"; 
            if (is_file ( $jsFile ) && pathinfo ( $jsFile )['extension'] == "js")
            {
                  $minJS->add( $jsFile );
                  // var_dump ( $jsFile );
            }
      }

      // Minify Start 
      $minJS->minify( __DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/assets/js/scripts.min.js" );

}