<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SMJzIXSfToJue6QhNA4/aeGCQFBqIYmuhYJQ8gRlNCiXw/nyHTlp5IULwNsmXJa5YMeBPuoa2EkEhkCYMBsXOo3v0vxxF8Huz2ub8qNHhOPHXl8R0er8O0/+cAE66Wj8zkAe+gcSXwfE/GvdtWJCMxxzVV1KH32uBdV5yhsMEWo6+yFwF3R/YjVClqfvL8hTSgAAAJgDAAAwozuTbSRuPbUJqdOlF0AGAhTDgaYDKudHG9cK5LGPt6q1LfoZl67Ck2cinN5r/7bjSqzjzn0mgNaHOARSCb5LP+ybtCeAJWnYFL997gKt4f3xo2IAKlqYdMljjGuN+MUCshtbUOvlVxIIKH27yzLjnaeogGxXG5KWWstmg3HHomfnXIdqAkGVdRXjt7TpV+ujaUvelspA8KlKk7bBKoV++a1tQzKWjNK1Oap51MfrXgB/hdmQVHN33+96/LZObxV9zryEZ+3hpZrrhkt1yQevb9cJ7Hzf7gkVBwruGxNz4vVqHe/2vTZtyDiUPdmNO49E3RYvbUJ5FOq1VjmOcvG9aO+/RJHWZ1KZho2L+fTGoWpQLIn9XuMyk6blm4bLdbZe6HHQAwrZFVMfCwZ3GOUgs1+YjTxhrIOph9G9DMSA6cOtC1kOHKZeRasE+xjUJSjtSBtiQB+BuCWglSGGLrzc2/u5uFV/Uh59uNxHdf1YqE5rJevOhruSHpDjrhn6pavZWNz3uHdDZL3BtIu3vermvN7otPjQVDAQKj3h/wfFmcEhB7x+3mtgAE+fsx9fBnIIV+VRnoaSQ+GBkal4xvbInVyZAX/wHZd502cFtX/8Mc4Q9hYcZOAc1i3d8avk8c3abYSvJuEUvX6B9DDbchOGOm84k/lgxa2cJZlJJdcyngmRCyP65twqn5uChbqmRKkOUmz//GZ7At2CSUAq/4UH64icdE3HKuhRtwBeBBj1eWTBpDoxzN2jveG8visx3BJ/tWPvPqffYVVqWYsOvPTNVyeAH9ZqFlF+4oqnoYPxaFouPEf9tAYLhbVMnyNkNz64FKaDWl0EnlDNAqQQvSJHduG3vJu2OGNhdEjmV8iaodK6iqZG5cxT2ebDqny5ugdDiKnSux1dQsmXPcxAuE8q8mc63bAnzXsHoKIgxfDmgE+VYS+Deg+S8ybqSS1sCS/GGuRwko9G3S8dYb3gO78zNkWBUK0aMi5aQBc5lN+bWS+B2OJez+mLwG+2Ua0Riepsxl0YIfoBZYoeCzNrtGhfCNprrlZlUIvP7pIp6Gk72rHRBuspuvuXj+U80mjlW+4zFR9xvCfGaWLfDMMPimiTE49XBb23vEJcD4koVLYaqf3hVJCkoGx0DdtfHedQg2Zvjbg5MgZFjir1UmD5wYyxgkX7G8kxdrNKdV2TPbB/7pv8u7pLiXqqSFkcOEGvt7zQ8fTkONTFeQAAAAA=');