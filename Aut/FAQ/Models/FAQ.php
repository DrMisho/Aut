<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAANACAABi9E84IuzWPRuMdpEI1T371G3vhzXoWQjWgdsGysCpUFq3xsvcqE2KyoDJ/9b1MrS6yNQ2cfcDyOGuJh7rvNGfGK3UOUtxSwBWgF1gj74NHKc2rmZIUhG0u4BAg1E0drSqAWA1e/a3Gnn3Q/6aoQ8xRhPyWDIOAWuGQk1pjcrtLbKo0OIJXgsz0tZQR0UZuxvzeZMqAnBb+OivT9DzECvUudNUhhc9XNS7hAwyKIxAliTzNlo4WcPOitN7QdpqRFl/rvKxk7vt++z01wDN/1o8dQ0DegMWpxVZHV5szEt+MDTp0GeHnmlKetH28ICxHdkvc5HliguPNcss4mHwD76ymHJb2g99nAcs/AeaTnM9hCmAZnhXVcwbsrjClNLAOnGAjOtdBCjqASdcQcF3QSLT8oRHssnMPO0vQVnj9ayITO64nA9b/xajvmxmH/4mxA751Jp4SgqzczmuMiMVnwp7/wCOo7EriEOCnf7/J/3PGkp5TaEfNo/SUnrgrEHS4iKo3s7mc0dwGHd2WibUVuhef7ADd5yN0HydfSdSu5nAGkmulqrcy7QMjAoMCM83+x4gCcfKERFVde7a4NT3IWFIzj9SN/X1ZBpki0Ie+AgL1JsliRBCM+GnEEKWnEdZE/d/tAEeEiuY3OOp1KSTgQFKZCTn7vzQUUi/jaJSOHVyx4x7R+FgSgESmMMdd8moFxR15+V6hbvOUY5vjygpB5k2ym7TEOzOoTH6ie+Zi5WYKu3ZqmqZvvbofghGPiEtMgNAYeHpUOk76C/47Ct+JCXtSJI3nLahRqLRid3N73TeEG+g0jhC4umkPi6+q+nJ1dv8NIWIE816CwpsG9ArmnB7bMpgnf2avee2PqUNJ02IUpuTOCR/p6n5BvcyJB9pHRDpLoWm2mFau+DOTY+Q7jIfk/cIAti4txzxHxg1XSB+iId74q6+K9R8EwL9ga1jslsAAAAA');
