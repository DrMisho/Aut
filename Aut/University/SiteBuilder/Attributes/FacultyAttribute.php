<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAFgCAADHMVdHu7t8n95bCzgXMVklmpiNqhnRnIpuG1SX6VRuIO27bb3rYYb8UQgdSbnfeId9iZwV1LP3/4ZUezCxlsh2sE3VdsTzW5BhEwVq/YOvmj3XwyPSnSIDQ0WDyEzqzzzTCH4sTLE33xPlWQbE3VlMlh0cltd6c0xVA6yYBGLr7XboCvgudt/P3+4R3J8yMRT9Y5kedijIxFJ56cnYdpj/pi9OsEE9r7uy3IapHrUyEO58E0hOfrt6UjeMV4yAo13bX+3mv5aN5eW8+3AegoE8tjAAX18UjSvnfQJsbsqXVuGyfmGNZPbz0E1xPh49GynMWWaWaMbOzPqvdGCEmsIlYcFJt/Vgf9+TGkJps4kPDrLDuOaSQIXbohb0JkIAbVdlfW4Ri3BLo9kj/F7i80Cma5kYShkdZs+q9lQ4qnfsqgfYv0qUxPEVONcquxUZ66YmwcyYbyDDR/tYGNqwwvg2veY0meutGPBHSO8urXRDml79pw2cwhpgF0kx/Z4TflzjMh6+lcqzUfKSqagiEFXs5u3Y4BqqxHkQEDjji5LPogGt4h66jpwSNk+Voqrqx4u4a0uhDFT6UxnT0IZ7pY/Yj+AxY935qBRworoRvfPZ9dpctKpM3tYHWZBFjo/JuaFyCMEG/1NLiOzdxzeaXbNg8UMtOsb0HfPQPg9rEBZ6Ih4hQcfEfiXKtZjQG5J1gL/HhEGtjUtbPUrE7VNmwH5VPdme24yocMAlyyTliRvoHBS5drOcY/TQz0EQzpNDy3GbVRFJvW8jlQGaBR8ucP9ofaLlLvqOpF4AAAAA');
