<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAALgDAAAXE6PMJ4oXrHV7ixt8gdN9CfqceB94aD1J8taPanmMRjBEMM0TTzI8Pgw3CRj8ZOuBAKHq8lej25vNrPw03OHVXCShDUfhUonLW2q/K6CY3OSBZsJfRlmHdsiO9ilwjEUDxlsYz5oAjPYoNAHRB7HUCnlKOZjWTt242oXHQ7YPOGzeLi5IuEdu7DM4nJSxtLJ++L12s71TzK9x88epWEpL1upjwLmBkn1NW4AxeftrybRCrPuznDxpG21b75aYZeTM0eeutpiV7aBFx58/x08cEUSV46Q5rirjVri7bOo1zx7fGa46lV9KXvzoBJgaukOK/YrnxoMsKaz1+rxVZGQYSVhSdVNGkgRsB3tt9icqCw8LaRsdmb0AToI9G0M6BOo5JsEFtZqNvxbEEELXR5yW75PMswVACaOfHvUIIgkkFqTNPsIOgg40nO+fwi9FGN5PkUjG2NqvRDyHnYAluFHBCQCR6xm9lUD8yRdqFxlyEfC2UpXJCBnxMAsXNbCAng8CbYQKlRPgS7uBu71J5ey7NfxyHikENpMrfmQIDUlldxat2woE1t6giDwKuZhzuxSeuUWglQ6rpIo7dI6BmxG5/pdDvYiv1Ni7O0C979o0kwSIZnWk9tQCBlG87TQ3etFMmIVTXNqDg7Rwv02HJYaChplog1dD6ewgpKY45yuGSS8zR2ksSEw0MdF6qOZsCzwzuKjPj1sqLn9owrszvpoU12ahhJx4S/B6n64MmJs1Pz/kyZi0G0c+N+gMxTqu8wzHtVIXXDEiNOQ1F0Sq3oF3MaN2+gfPWMn6ibTTd+YuTwQNeoEaA1G5ZQdC4dWYvD2dxvtc9GM8QVh5onyWwCPh0ag041dcxe2x2195yeM2jPPqwfK6pJ1MjMjwYa2kf3c6qjRY4j2U+nkaM0PcFOlxUl6REHj1/MvU/+LH2zkolP0irRN433tm8GvaS414z8DGhAt0l9bSr4viTTTgZzYVtJVjZwJWltxMqMQPYYukT9vOGrKvyPvbIKusYZDt3ZIdVmiVBYsEvd9SgiM4o9msY4js6316FWdi2kzcWwF1AI9IOK8cNXx+l3h+h92sQI+pjNHxKpDjHzo/L7hoirsBQy05Cx2HMrgkWUAlVzycOQJNbOQSYqC5qN7m6kCTpMU+QBtU0VckbHYTed3IwUe3N1s5eNze5X8wySamnanQiXVDzwCwW+iu66uC6A8Xou/4tpRVPrB9K5Ftq5STDelGFDzf68Yfdg3/FvslNE7Z6MlAv0wOpBhMAAAAAA==');