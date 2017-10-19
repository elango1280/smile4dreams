<?php 
error_reporting(5);
session_start();

define("NLPCAPTCHA_PUBLISHER_KEY", "07a5098f09c016158b4e99f86e07bdbc");
define("NLPCAPTCHA_VALIDATE_KEY", "a4faad65ee4774007c37e229ae9c82f5");
define("NLPCAPTCHA_PRIVATE_KEY", "b3904244ea576c40de1b2b171ccbf1fe");

//--please don't append,/ at the END or URL
define("NLPCAPTCHA_VALIDATE_URL", "https://call.nlpcaptcha.in/index.php/ad/validate");
define("NLPCAPTCHA_JS_URL", "http://call.nlpcaptcha.in/js/captcha.js");
//--NLPCaptcha Process Timeout variables
define("NLP_VALIDATE_TIMEOUT", '0');

?>
