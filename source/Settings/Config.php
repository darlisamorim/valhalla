<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "valhalla");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "http://localhost/valhalla");
define("CONF_URL_TEST", "http://localhost/valhalla");
define("CONF_URL_ADMIN", "/admin");
// define("CONF_URL_ADMIN", CONF_URL_BASE . "/admin");

/**
 * SITE
 */
define("CONF_SITE_TITLE", "Developer & Design");  // Subname WebSite
define("CONF_SITE_NAME", "Darlis Alves Amorim_"); // Name/Title Website
define("CONF_SITE_SUBNAME", "Software Engineer end Full Stack Developer Freelancer Front-end & Back-end of São Paulo/SP"); // Subname WebSite
define("CONF_SITE_DESC", "Software Engineer end Full Stack Developer of São Paulo/SP"); // Description Website

/**
 * METAS SITE
 */
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_SCHEMA", "https://schema.org/WebSite");
define("CONF_SITE_SCHEMA_OPEN_GRAPH", "https://schema.org/WebSite");
define("CONF_SITE_CHARSET", "UTF-8");
define("CONF_SITE_VERY", "XXXX");
define("CONF_SITE_DOMAIN", "darlisalvesamorim.dev");

/**
 * BASIC SITE
 */
define("CONF_SITE_MAIL", "eu@darlisalvesamorim.com"); // E-mail
define("CONF_SITE_RS", ""); // Razão social
define("CONF_SITE_CNPJ", ""); // CNPJ da empresa
define("CONF_SITE_IE", ""); // Inscrição estadual da empresa
define("CONF_SITE_PHONE", ""); // Telefone/Celular
define("CONF_SITE_ADDR", ""); // Endereço da empresa
define("CONF_SITE_CITY", ""); // Cidade onde a empresa esta
define("CONF_SITE_DISTRICT", ""); // Distrito/Bairro da empresa
define("CONF_SITE_UF", ""); // UF do estado
define("CONF_SITE_ZIP", ""); // CEP
define("CONF_SITE_COUNTRY", ""); // País  
define("CONF_SITE_AGE", date('Y') - 1995); // Idade

/**
 * IMAGES SITE
 */
define("CONF_SITE_LOGOTIPO", "logotipo.svg"); // Image Logotipo
define("CONF_SITE_AVATAR", "avatar.svg"); // Image Avatar
define("CONF_SITE_SHARE", "share.svg"); // Shared Image 
define("CONF_SITE_NOTFOUND", "notfound.svg"); // 404 Image 
define("CONF_SITE_FAVICON", "favicon.svg"); // Favicon Image
define("CONF_SITE_CV", "curriculo_dls.pdf"); // CV Download

/**
 * Settings Google Fonts
 * https://www.google.com/fonts
 * font-family: 'Roboto Mono', monospace; font-weight -> 100;200;300;400;500;600;700
 */
define('DAA_FONT_NAME', 'Roboto+Mono'); // Name Typography
define('DAA_FONT_WEIGHT', '100;200;300;400;500;600;700'); // Width Typography 

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@darlisamorim");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@darlisamorim");

define("CONF_SOCIAL_FACEBOOK_APP", "https://www.facebook.com/darlisalvesamorim"); // Profile Facebook
define("CONF_SOCIAL_FACEBOOK_APP_ID", "XXXX"); // App ID Facebook
define("CONF_SOCIAL_FACEBOOK_PAGE", "https://www.facebook.com/darlisamorim"); // Page Facebook
define("CONF_SOCIAL_FACEBOOK_PAGE_ID", "XXXX"); // Page ID Facebook
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "https://www.linkedin.com/in/darlisamorim");

define("CONF_SOCIAL_GOOGLE_PAGE", "XXXX");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "XXXX");
define("CONF_SOCIAL_LINKS", "https://linktr.ee/darlisamorim"); // Link.tr / Znap
define("CONF_SOCIAL_LINKEDIN", "https://www.linkedin.com/in/darlisamorim"); // Linkedin

/**
 * NETWORKS SOCIAL
 */
define("CONF_SOCIAL_INSTAGRAM", "darlisamorim");
define("CONF_SOCIAL_GITHUB", "darlisamorim");
define("CONF_SOCIAL_CODEPEN", "darlisamorim");
define("CONF_SOCIAL_DEVTO", "darlisamorim");
define("CONF_SOCIAL_MEDIUM", "@darlisamorim");
define("CONF_SOCIAL_DRIBBBLE", "darlisamorim");
define("CONF_SOCIAL_BEHANCE", "darlisamorim");
define("CONF_SOCIAL_DEVIANTART", "darlisamorim");
define("CONF_SOCIAL_PINTEREST", "darlisamorim");
define("CONF_SOCIAL_TIKTOK", "@darlisamorim");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "valhalla");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "../storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "Darlis A. Amoriom", "address" => "eu@darlisalvesamorim.dev"]);
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");