<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/Z/HnYNUJgo/svChP+aPuK8Basv4OjzuX4sHFn1z7c2V8Tob8Pw/lS2RTdhvv7zGW8S8K/HzUFFPpkOrAASbwFcufJ4oWRl95C26m775+xt37fJQWA56lXjc4oqARHqYdVriWBHC0yc+LrBM9ZICvAZwNT0QswjF3LECObadm9GMUcoPT/wUQ6zoEwas11efCSgAAALgCAABjxJQXzaR+XTdh1tjCShnIVyntKWz+qhEzFe+yC1bCp6egaNcWfefCtF/uo0VFmcOLlIt6i5GMsOXgwU8GtXmnRMp9AT5zYoTHUscUKAzxD3JIo8FxRG3/OYIf0ghN63VIU0ccyDFKinDSkqyjBQ0StMGPxsPHuE5Ky9wg3SqI/D4CPyJRM8RBkHFR3T8J2TyWtANpTfURxUYNAtbbMPwD5HPtdd5O3BN7N9/g8gBKI6swXl4RjFlaBw9whxnAOZ5B1FuL9n2r20X//HbKnqAP32YIvFrewtMBBA7sH/CggdOxK8EOKsbe/0DXtHENiUcjoUlOpdwNB3lbJ7QNAcrLJLjNYmQoh9xWw0eEr/lZeaekBA6lED1r5v+lMbQvzPM9rYk8O9miJaJpWSinofxdiKvzSOJQa3GEOtBLd53kolIjiI08K3Tt4VDJPjMy3hDjuwvmAI0sAmeVd3tEWXsV+3L+3urH9q9Xp6pRihftTs5wLwZvisumkUiN/JsSUqHSaUnybmMN1FNj1HoOr28vszhDuJEXIAbyP11y/KUw6o+qY/uGq/Ih+h1ayjyPtxm98THa8jNMjavmFRsS36BhLV2jiYx0jznFK9Xsxv5z0a0x5s+aoq6C13n5+qzUEa4B+S+D0t1Lk2imvy33GMdtL4Kxzx3yn6UkyMjkmFqDfbcrTn5mnFpCYm8D1L/UgtPtF2FR1B2lE5zN77g9jgM/fBwODUXZ9VY8uVkjailVx5QJsqUEYF64w/8oDBysSOckkb64oNdqvbk49g7klXBKxDP602+gNFTrguRhvWZlxJNnVaiTdeuwS7QDXBSF9aw9JVVXtzw6b9dwXAUOJ+IKiUVw66rQzJBysO6vNNiOAhUAeTk4plwmh3ggULRENtuiP29KIuRo/hAQDDdtAQhFUdV5Voz1kKkAAAAA');