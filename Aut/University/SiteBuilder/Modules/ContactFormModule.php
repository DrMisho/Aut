<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAMADAACc2vijCpPghNM8Zk2IYENxEwaTcg8r2cwpcinEEnb2jHOLvCMYY/5Nd79oikmc2e6uiVKfP0qgFn2H20WHQXj+WYk/LHKSsPeZyS36OYTY37aN9et28gJ6DZKXh8w9x99M+lqVJxT1mh6hiXh6NDkwgQvT1u5Gw/lsKbjpemdLnXJOca7eTdW0cOHek1S0w+bGJkDr8ERxXkHtnYlY5kcRK9FQ0SFFb5V4kyo/SrPf1uCndPE2blxBNjshwy8KNEaERvoONJxrx4meHV73SYmQrMb+yVlgn3o8Q3UyuH0D91ot+W6IxgzcX2Z7PEVAeD4z5urqlWEUKyJQjgxwAUwAZorwPa8Wb3vmLlX9irHZcn2c2ckhrfUv7FXzAMYV23U+G6uCMvHXT2GeR9WBKl3/fwnjVx4O9n2lZnnvqUQXHcOUPYhnr67qwhr/PDCvcb+UxXnpys0oset39yAqwxCOyixQPv62EyHf7zbTmCLuIN5ESPY0tubplBNc951BBOjq4BzdAF9Zruxe0j3gEMPQ9Go+CCzP55Or75TG80L0OEmREEdzypFktGcOE4E8PPM83HnHW/w2yPq686Jz5+Qd65sU2YiqrmS/ES4EujHImUm588yDZfxO5gQR1eiXULa2KhdkCQWEZjSS8lfCvS/gET8kWeBqHpUTGKjsrcS1LR0D2XEjAuB1/16JvCRYX55EXpae+OpzB7luY+a2g0xWdcSt3I4pC8kFdDHYRu7MrlA4WRbU/RUKri21V1EVDboHFLAiXVMKr31j3wJj9dH1op3ifrtEddVow/4v3VKHKw3hLdc4PDhM9x7Z/ey/Xt7BlC9MK1v/GTloUacGShdoExqgn6bi5zZ/DbKkKr/UZ5Kh9BkJiBvvTZGp3QeTbglTJYbFPkIG11BQhOdnEVLwEJHyFha2xc/O0swEXAnyIXlZyQexD/hYsfyS2pRl5c6Y3YflgW1iYJoqJyIeVrWEnE7blU4isUiu2YraRsgl4vpCeNXucN8ptnJI1hznLmZ52KjEcC/Ps55CLl/KBRKrekyVpYCbBlhzLC+9Gv2qxd9GX1WULvoCd8Ej5sQCa0YvZg4APEXqH5xlXZllvKLh7BZS+TD0EyN3rgXQ7UEUEXVjQfXy+RXFMRv3POF4flFPpT4QWgHu6SXAxhVirueXvViQb2TgOIaHkv1YvwxqkvqzIoi+zUZ0mrflKn938WUs/4ekrFVeVP/pHH6v1j2936XNibLSOx/6VuU+drAV8/7ElMlVLoV+urmHDf4Yp40AAAAA');
