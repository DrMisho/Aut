<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAOgDAABhspW9HaGQH18dd5SuHxsTJw0Tzd3TUaLwrozCkAjE3TPG7uwERJjy2w9Fd6aeIBdhT+kEa/NdNXjcm6JKLVURUva8DpYIlH7MM8yuVxk3nbg6+BFTrmpCGD2JN1JVhEhUfSKKj69ZDN5Y+hfA1Qm2MwHN4Xa1ttHHZnxakCNvkP3/i69ecdhPb6guu75MsBh+eIOrD/yEaoFO7Y36ErTQkM/FXZhH+jpC+J0M/hGaOIuDl3imbgXuDJRChta4ira7zlE37tsTmNqNvjN74R2wNmxiIcCF+zqJEhox/Wv5dzlsCkp0ynKAwT4DUBmaLsceuRL7jQ2k0rlKhoCLS+kx7ROqiJ7Wq8sVFKro1Fs2VaYh4DZB+9xJgUkPfiT03DhkIdri1amkG4ISGeO+JMlp++ZJ4+rRgvIcHevDqwalW3TrWY2q4b1rb0J/HsMn1HXUwBkaBXeOef9f7DwU4gEcDPDY55uuloipeDte20e/VFwIEdEODSsRBoqgpGjWng6hOYO0JeKtrTf884UC7XrgxR9gqOz4VB6epRSz846+Y58ZP/JVTbz10sKd9E1gcnw1DB3O1nEq+Zlh34/Oc2KHkh5OLz5iMukMMGZ4FOv6LRsLvO87k93gIEuYvPwo13/hhZOIZAeuwTeIrm7+X0NT/OxTmFwPbv597d30hbFPNQOai3i5Aytd0n/Ppb+ZI0G3TNHXC6QVzsrNeHL9HLunaIXMaUF9cNqp/4x1wHWo0Qr/N73rC74dCsPaXLr72VTHnKG1o16FeSzKe0NnOdmuuszmz3KM82bu5yMBw0SNqbK95vdTBSuYMnvY0WhEiF0w3uDJJv60ZKCCsIrnWvkQ/FiEEBeSXgVyE9qnk6UIGcGnoPwGdW17Gay5vsqiS7rJTgKhP9F76GyaoyDiuYTZEMUQ/w5YW6B62L9BE2TiwKvfdLAGyU5AHrDGG9mBu7tH9banQxFA9vrHbE16T26W9y9zlVTvXvS4W8KXYjefw9WoABl6WXo38kGx9tiEYz3youRURXNvbpSb8slxPD8wd9DW+0H2efmZ/NG+SnOiLc5VVLB+UHn/3azwZkSuGBVJESy+1Rs79mlihg1EqIFjzjKPRTYZvpdxaQ//BO2K+KOsnzrO35O8sXXO0GpuXxvEoce/14yhqZDnNR3RFfW6RibixduWE80MngjDk+OWqeIU5S/f3pq9DWBxOcXtb5Q+LgyQb8m7qbh+QFk58DNJn8El5op50gSjI69B0x6ZCaE1NPvDK1HHIbTSiFCFBifie8qRhWYcdRDKgFw5hXiXIEuVtetaA7sZYqOGAIR5HRvOFU+AS34AAAAAAA==');