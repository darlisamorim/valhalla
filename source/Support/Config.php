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
define("CONF_URL_BASE", "https://darlisalvesamorim.dev");
define("CONF_URL_TEST", "http://localhost/valhalla");
define("CONF_URL_ADMIN", "/admin");
// define("CONF_URL_ADMIN", CONF_URL_BASE . "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "Darlis A. Amorim");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "darlisalvesamorim.dev");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@darlisamorim");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@darlisamorim");
define("CONF_SOCIAL_FACEBOOK_APP", "1111111111111111111");
define("CONF_SOCIAL_FACEBOOK_PAGE", "darlisamorim");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "darlisamorim");
define("CONF_SOCIAL_GOOGLE_PAGE", "1111111111111111111");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "1111111111111111111");

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