<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/mNIx2ywXlBug3XKBV0EVOteWJ99OvkHJDNI/t5qEpAxeY+v7DPiMAt4OSce8vRDw8H7k+crSLmbM0bcNC5MXGJOXj7jCqluJb6LicEeJ4uG6xEgli6gap/f80x56SSP3OE1d27vKYHFF53gcOz0XT4frW5y13xXHWO7mizbf0kYXKxLoVUHB0X1e8EqfxNMnSgAAAGgCAADzsXfn25QWTl7/oACLIXxgWPDbg/dx2v0xqfcDPaJJSNVWEqHCPjwPj2NGQ2+kMFtIl9kKn2WGxncNMKDkBFfCBieAl0D9152SX3EUWLVrD9FBVTP3kkj++3RPuLAvjcpIGLQWACKeGoIOCZ2Y4JID7D57C14sWmstfk45zR6hJZFJOnS+obweu3QSComd2hkxrjozNuFKOr93XyPYGw6pSuLSlq8iGA8Zs8R1E6YmSZEZ2V43Zb8ZX7qxyS9XsXBTq9BU8QtPK21Z84GiQcXYyMkhfl18hiDSc+sFbdp8klHLIvoQfst6c1JDvCMOPcw+62rKGDoEkEKRnDx/ng3Y677C3x7qRoH6+/JPf/osjXEbNAgHcQp29KrmD5/ISI+CbcwzT9ARq6Huvmk1GcAuSRa16MIYkhIdOrTPQI9C0F9vlBPTVhwTlZ3HyUfr/362Z30c8hY+dADPcClh0g95rKw327pBCy583O8kQEEIEwJRcitQGvm7ZY4/N1k0V5KzYAiIjhJ61e8ggexg6UNjX7jhpqXsfz3zHw20+QXt9YOihuJKg+jPQYkGRl9+DhvpyBFQCSmOneSZ+GWVgZqUXn2t3L+qrtzGyKLLOqH/58L7gBN/O1+3HcUMVCdtmz1rQfr58eGfEMjI8z+BHm5kJ2xtYpLwFrS1qNLsxECSM41svVH43pFz48Y4cjEQyF1ogFvH5ZL7bVsuTZ1YiI+izprBT7pUwJZgVXpl4UdRJy2w+1fSHOBFwJxqUTz4UZubMAg1iXwj5Hth0Kra5Vko5/W01yPyA8VaJ3n+zioLsNcLPx3oZtZWAAAAAA==');