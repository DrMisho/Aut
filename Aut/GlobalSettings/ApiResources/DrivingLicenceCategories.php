<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAFACAACcU8S12rc5RCfhxHgWxIcHkntWTJIORQ3s41jR2lELS3SwQdud/Lsf9WdG7u3To2kjXM+K7Cn8z5XpccDC+13FFxC54mJNDaJk7wZE+HuA3H7+QHaQ+wjztuwFSly5QxCe9L4cZimIcZZljRrsawCWW3f7HlgvLex+BDNA8OK4n3CTVymXIoMGdKZcvp6A8GfZFMV2+k08s659M9baL1v6gp/2xhDjFic8sOBuTpkQSWO/fkosTPc57WqkDFHRF1SaOxfDohNQRWc/JVMWJ2c+6eaJJVDoemRd8uIao8ceG6zEWGxLUfvS8hJ0KbBajs0zDjr3NFS8Tf8mrZU0slqtkPgVEz7GZh95pKbPu+3flOKe3KmZNDRgmCxWE5QlO47eCtxqi7NisCQv1nWEHi7KqZMhTxbg8uDlrelv0ZcYxwQelNa/V5Zb75Q0frkFEsXJCGzzzBmHdvinKQusQEg18wKqX5fDGCxGfRhKGzDudnHpQqVsMLE05AuWY7j9BA11d79+VX+bvjh/5SatbVe1cpWw2DeVrb8Xalpf2mExwmJtN0+ndWHz/KGuXPVuXpT0n/oOKgHiYOJgJ/vTnR/o6DF1Qe/Yi2NGmqIY5f7aQ2+d4I9zTrGIoBM9Ojs4YyjG5FZ0kHdkVkagz+nACWV7mpB0pG6HgpHbbZAqA1ZfQ/IeQN44VYQ3iIX40kUZUxW/i7qAcLEjYSzCOVq3Sc7erSafaX/TK+Jxj/vcfuEKJrVoNaUMtoCm/zYIuSPbgN5imZSAA0+K4fbWqdUX6oY1AAAAAA==');
