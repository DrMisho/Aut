<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAGACAACXyPiUY0L7pSgF4ewWM2seHNEHEPhSQv7uYqEYKXdc0j5tUr+4BPYewmTH2D3B8F/XzwCvtsZJy+nqTbX86CtajmsqPejXq2alJ3Ci7BlAJeb0qPiPDxIz8+qeOmq+X7wKHaUah0FJ4iNicZEpa8nhhXfktLv0WOsUoxsvnRg0RV2YgwSi4F23MoEah+xd/1kRKkrodxLIYzQiU3X+bsq0YJI+KTiNhhi1TBj62+Dr8XE5hb1Pkou7K56a46SbBJUG8n/Fi/yjsFkJmj1WXubNEo0dSX3y8Wldv/fz6AflWW0HQE4SMIrYuSAix6H/hG728JvweBeY5MeaYC8S2qC1fu87uoxC50B4qmIMKR0X1qvZpLR0e+HlFWR5NNvWz727GRFxKFCyzSw4+DjbcLvlNYqaPw10IaMa2fRJbGMJCbjju20CaC/oXR+TXkbQ/VGmvtHx+LA9WRwIGkyqf0o6h6exKrgAWWry31A7J7MQISFPa30jsrK4WuzsUCNYKGe8IwHgzZ6N+ReS+fQqLAMLzoaGVIIkeRM8ctf2/0w0SYm0sAtGLbIDXDBIFdqhDgQ26W/pNBVCpsuVUFqCynL+aqNK9siTjVoFKGOJLT+clNyBQ5zufh1umoHmpdNzZgEYT6t1NQ4+ShxDeZpe1Fp+1n94XYgeOszvAvG0QlxBjJd9DP8Mwt1VVnGAtli8iyPZc8ErBRQsL8uokAuFDUxordiS8g2di3zDzVEUhdmdJnbIrG7DWfgV75B0QoIJiiCI21rLC+3+JUDuRccLNsR5J4YzKj6b44OKGlaAnlH1QAAAAAA=');
