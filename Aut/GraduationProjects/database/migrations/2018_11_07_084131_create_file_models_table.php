<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAACAFAABR+2QfoqwPPItBkgfrOnHyq0QdDt36dE29x+eeYeHL5dSaLQKtR8wUpXtbqMVnbxCBy4dj3BaUUgIl+WTayHofd9J36YUfepjeLUpRxNN3W82ayW369p+8gX0w54bBHJltQFISMS6VYFlzd2D2ZXqmlACzfBESBAbgljFjDmBC42IQ/brHKhByE3WRAYWckQUSdbpl8NOGEAJ8MmuN+NtFWCPL3FHRusdKiA5S22AzAkHiMrMU26zjT6IZFVmlrnu2XFFKUG88RXNYBjMnmbuOmSUDFuxWkUoAT0rHYKPs3+c3LHPiAtruRTjkt27DPQZLpCBsUqpTSL6Nn4zip+PLpQuBKx4c2UzAoB0IrxJz8+roU5tnHYyL7lRbQqJueknVL2ciN0Wnsd97/ZfKs0vnDYvKYS2nlab6e52Q0WfFbGnHuOhQE48n8Vm4LkvaJJS8NaVVLjGN6g+Jx+WpIuJJifw8gDxLkHwxmbZnYeXtf1SLqOi1KA3wlWLxa742dDfQ4hVmpu0nhJq2k6iZL4EEvSS9vko3kHOpYM29qEqhlUdZT8C8zHFEuOTS9eGCQdtqBYbw6oquVMMNyG4a+7MQ/gKpBFNvS3uT28wulgLCvQu4UzgIjsBclhgoD5jeqqtk+bKOSlzeei2wHwq5n8pxbJSdDR6mirFWEiXvaYYVt/nD9dZ1/pzngoIhMSaOqPBmvgm7xHjszFdW00QNO5yY2/5oQdPBES7ZC9LuCJhFfowFx2VJhTRGSV3wcEDm3WhzMkrdDJDG0VUOMHVlyqx2nbOmQYEHsRY3vgF7h3GvwHEfvxC/gI131YDLQV+erlCALwRwPFr+T2DGsa0m1IdG3MLPscJJXKF8xnnYW4zSbkOSqqnsF7JS6HMBUGzWFFcH4tiP8j7D3eeLH9Bx6DVAKftruMxX/NLiZnvyC78BRSq+K3saOHQ61+WmzihzEMlz2tcFan+PKopHeYumnSnxPRxU6xXMk1OI6Et08r7eZEbEDrUh6UWmolU5AOZaSYsoEZpcdyxx+8CZsQN9IRkWVZSwhxkb2xAk4MkgZaY1S9wQYXB7BByUtvhPYqPCTiEmGAcnsdcGiz/uvkR0Jg4hi1K90fHMNaDm8SfzElQmUHkpX99xC1yE0jhh6ko5pr1TR3T775YRgM/UICdWo8TAA38Zx5mrHqxe0TktgQ1gKolp77Dn215gTg7oCkdRo958u0EnPmkZAXNNkAdOqr9PsolBNn1WSkDQ2NF8cqLYO6VBF7nUdUOYSyKzpJoaQTQ8CBGGQcSLLisqYTno9OiQ0MJombZvZq6CE0r6wbsY9Ry03dIEPnmHLeuG8Vuvq1Wot5gmchnUlF71vND2JQzJ3gKdJH/gsbulEaQj/22wMsHXTolhME1umr+ngNCPIFvaw4Wr+zw7iwKiiHEieGEls+mbmZOQwBfHn9HEl7lg5V8MDuTvbLop4OliADXtYvzGYfZ9YV0zcFue43RfZXiirU1RKNg/a5bWrwm6Ut1cPc4mBc86CJrfcsf10lRrIKAbtBjraoJgKgQpsZHHLgER9cXbYmd1RXirLmFsrl81LR9AieOJXdrbqzWSfjnX1Utmj/exD2mVPgTzBS4HdPr4RS04fQ+kb72W6sZVO8QZXyBIXJzJpBiuD0XC4cVjeMQ5j5YMUN9Opt0vUaPY+w6cPcyPdbQjrO99L/rBmBBsF93L3JVwTfD6mqfaXHF/bRu8zT6Wn2U1tIL/PaZCqz3YAAAAAA==');
