<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAOADAABm8UHdDWqRGOh7JcgpJI09UgRZq+VZdGQm3zAVwfn/9HzxXhq0Nspslkbcu6T+cNhe/bqLQ7hs1CObeJvfV9JCid3GTpVgxm+7wtQM1xyKHEE8kkKjRdrvO1+FpQGTNfGhOl1BLlsVq1ST0wxLJZiNewZWTyeRiwsnWWkwjQFCQoThuqfJzsgEB2kxtWw+UGe5jTEORCdrLNeJ2JHM7thFyscvAl/itLxW6fHGeX+SAYZa8Nb57X4RFzmjyjyE400h3L87IcHp7L6/RFLctyyO069ucQRZFH5pJXq+w+MIEQYrWDbvZ9XTjOBgYduSjalWy+M7c67GKy1gafx2+5N4FhM8N8Q2X1DNyDCMukh7ixSY1IfsuIvggjsViGpQkp7joGi3X7uTFy+vis7zwf3q7hskYYd9O1Bz0xgxCs1DmfaxPLpYJSbuwGsc4/LPtdqkHQFEdKZXuoSOjh+QvKms1c9mKlaydlq1WckDwnRmHNjotpBcAaV5kKpZgjAga+qtOfIEwSAQpNiA+y/MCPU8eKcvfqWja/AubY2BU1Vpx7RT4xFOICyOBRdxVYsP+9xNaY/174x3GbA8it7rtx57S9OTqG4bc02c0XW7xgQ31372Bv94BRG0+gNaB2cC1vb6GMDmP4OrSYEed8Aiio8tliS6qDDtJUPTkhMEBGxKFyCXmdVkalB/B8chK0PFS7n7627rXzAQ1sIbHhM1GLzIYsuxP53VfKp+DlE71TsLX7JfGeCb8DmWvprlKtjGeGGTzA8TmU5EGDppiaXc+MaWtkVL2V+5xgCfUwApjqcTUvPQtX9gDgH8Dg3/ZeefeGdEAd4CjmTnJF7uRm8sYzaBd9TgJcx2lUth/f2D2i+b8HFrM4UP4kgUptQcnSOGrQhbCbDTsahCgyMEXx95M+p9K3ciYJD1bPxkLyIXASRZayy5fd0HubHyHXpfj1N7OhfY7GVo1BtIzKW9RaHpeGDuF1ctJPYze/1QcUvghFnJrF3DcdAnzqZ9KEPGGnvT2N5pkeGZgUa12mdt/vMos6YJISRs+KfLPfAV5tABmPecDoPOvk7Beye9dP/ThFUnJ7DX9J5mBvwSML7sfkfIL7PKumMPDkIemEmurLKwmZVMIwVqbGIW1EyG3sJwgVnCGwdX3xxmUJkl+w4CbLmhIsWh/3CANVEsOiubn6z7WQw/uKwE81U2YoFunJyd0BcuiBRERom0Elg2LdpgYEOg0dMNbEc97quvGNX2uFc8ZDb6mNpYW5efZgF+np5kq4KjCpKGqXIApUWagyVSE4RJzNTqNA7xDE+QF04RTzYFvCgE7wAAAAA=');
