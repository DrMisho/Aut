<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');