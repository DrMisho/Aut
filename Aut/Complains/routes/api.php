<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAOgDAAC0PYIuSoQfrKDAJeOHiKV5HU8qTVzhjnGOU7o8iMDOrOAr300ZYSuoUlprzCtHuqjemx7JBOnQD6sm2WbC2EiMH9Bomn8tipafFBHweIHTqvemdXrFe3NFnI764YmGa+iR/YcjFp0H9387/mhGff/xAC+o7oAH+aFG+fal7AAGjsbdOfyHB/iN7T0gar32ffd8JdBin5Z1C2/aTtsqhGibiX11Xnasy4qAwerQk7NLGKoI17iqR3PS3ydjPhQfsrlZbEsEvjpx8ujy3bD43f9BdeDltZ8c88+d2Dd6RK0EGPiCvDHtUs5A0XSGtPo9PUNJK8aerHrO8J4jPHWccvSjNkobyh+1VyLd6ZBLnSpVtnD/lQQJyoQREUpKunc1GX4V8Ur2Sek3DHQ6ZkxI7OsL0yHvOVwm8xEnwJds2wjRdQkc2xFlxo6cn+OjzlSCdOFEtcPm/LgHE/JiMUXQyCoawxFueifiM3oRfu5Tilt2E1lEISq5vEGtozsPcJcPVFrS9d5eIq9+Z5mG2XSMhgIeFysgUdwnGAaWMNGgkk9j6vR65EZaUB9qmFeld4qYlc5O3T9O3pKSZWI506HLBAwZ6pDCiPzkMi4ItUj0KFAvRgKqhS5j1m6dfgvAXtP3gleBmrLY2rrvo3hRFSrWKuEQdulAU0XVxo4FkOKER2r0TfiLlNROcMBOYSWrBU+1O7tXU4WhXlwpF//vYt0ydmJyQLnDQs62pmu1uStz426PKDhLioQxfAkTELM+3RKNowGZxEjrk0xOYqt/QEsp+usrUtl+eakQQOySqsfabcy47ZJoj4JH8zsU/ErYOkKqANIhG1cuh5LojnZI+ZJdKonSVCNKTSsMprbm/tqBtUrTv/8wEAoswTRzW3R3iJYcUUb5prRU2qGCfNe3/aqHQ0xi3pN7s3A5BLjjH+NmCE0pS4SMBT/PHmU8suWHa43zB+e7D9MD67wWXaS6wELcS89vCJGieX4eE+jWwVb94vNUVbiXgKa0IDjO4XOa400yQo4NtBugfCmfrc6W2pFAWmNI6ZefnXX2JyhhJoEiNb8sTlCda3VLyckwcgmGmuujj7Wcf0lAF9HtYUxH9shJK4pz+UvScR6gNWav/R1r1lnYyoNepd13gZzXzKGk1rOCoD0o8QGPr3IfmKRM/33CantA1X0V/YuQyAqIVJ5ZnqO4VKBB15yWJKNn04TPKkTBAVJx6OblWFH2hGbADBvX5EexE+/WTrP6EpvlO1gl07kwLlgk/VoKI5j8hTMksHnFV4XGf8Fne+E6bP9XYrGfYIhYQaHpG1lUUNlODuK9Ev8xkiDQnZus/J4mAAAAAA==');
