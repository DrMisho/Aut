<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAIgCAAD7TZ/pLGgy9Pazs6VIT5unOtrjwUUY8Z6GttU31QBGC4HolaM+NW5BW5A3zP+/FM7+Xwxwru65Uhm6UVDOBBswrw4qWE4rx4qZS1QZkAwzfqv0flbPfDFoHDE7JF0Z4ZN0TyKX5lS3Y0M1CzAJd+z4VTKkfNxkie1DLwBYhBicYiG3H8mn0SdwqPG7+EYkUlarEF4FRPgUhv363SOYM/3JZsF57huol3lQaJcI4zjHojbYv/p3KyV/NQ+gUCNntmmwoC9n0TeHRQqEOCYygt/NAYwjbpXujKqF5TIRs9Vo053mVGvVspCSvf8y0wfJqceVFSk3oEcf5ETfYol/Xt5ucInRhlVOTrbmdR16qBkC0mI0A7vlzva7Ihw4BsGQbmlGP5B/jIJJXXriptA1pWPxXAOkWeBIKMQuz0PqwlGG/Iv7aBwj286tHspOPHOSLYxFxQWC/gxR+Of3zuqtEfoGf1sYw8wEE58mSjxZpVrffrlVpk27oIaeR0XXGtKbcMNTmH6JUs1CiqbAVCDWgjR6WNj08ZnHeMvYBcFEtGuwNIbp0VUY6z2yoM8DDen+KeRJWszjs3BUJ0A7hjkQctVvJiZ/hHeSs9BwhchMACFMMgztlWrXqXgtnY6Bp5o8JRnNORJW+lzGVkS/IlSfgan+bpyc5PHwqWaD7l+V7RglNH1FdOdaQ/TeMcHL2J2oVFjp+Qo9qV4kHVCFOINq983cqcEnsQ/NhrGQMG197nMxof8ITlKuhWYvn+iS5e6sslHSlE/gpPZVImz5C0w6s05xcVXY5UHgm8MxxKXu2+6EW/Z8aInlpOX3R+QayXu0UfnZBEZch4AaLn12gmgOJH5Xb4+9Lc8TCtIAAAAA');
