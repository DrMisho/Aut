<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAKACAAByOn9WqFp0ejYRuV1UEzzLIGNTvKD2m82PZ7ONNNfoAzcyyXJ2Fvb3cLxApgbdCJcAmQ+JVaAUSBZwpmdnjP5gfTYXpED+B5S1thol7wWoMJ/XkOo4f6fyIu7zmZwHRG7v484J4WfHv/dhoESBGTpLBKyubkOSnSJ7bOX7p+Z1Hf9PB8K7zjLRFHJ0O5yJbJO/Xlq6l2KWcqtR++IBPHxvZvO91djj4FpyRbP1uMetHiy6XaP3scSgRXl/fsdMdZ4fQ5JA0sEULM+yldi1Wyf7htyJAHZA3nvBGR4ejVkru6g7VnPLPIYt8smBFXHgPpdW/OxG+u3bLAGY8y5uYwppFmSykJEez+yPpk+FYohPvHrXWCYblF8ugLqiLHtL3OcPp3gsNjrkWf7X5OHk/IeLetCS62Ekkl6mE/wu2YXSHCJuUUfupv6Hl77MbtO58EzEriPJFWKcTOpzIwcgK6fv0cgIzizY8t49d7/rjXklhtR8t0ocK7Z2dbKK4HkPd+dCHz88gui571QNdwq9kKvzjhksgBeKX4bnsKlOplmiwbfrzMCEYA/QIhcyCX2Zc9h6FBQ7qhnjEQXtE2J5gxUrU0qfHQcpGwIM0yYY+/Zu5rL/x3p19WnLhr+TcrsNnnA6fffPddUvMlvFZWs/3eRb8cr7ruuTaHJskP/dIS1FSMHpwlfN8dxqx4dWRn7TebxUn8e4LceDEG//FNNxKZq0BcNrk5Xoldz0awuAd/HX5s0yEFhG8mvKSag2ttG/yZ54Mcn1Hl1DAqnHTvtTQrRxlHAEofYSB914LwOwodmkMkGSa/QqszOIhrE1JWVJ3i5ZocnyQpXOTcQwUS9DMQxu8hrwWVfmT79wpEor/LC8Rg0gel8/2tONLxz+1V0+duIAAAAA');
