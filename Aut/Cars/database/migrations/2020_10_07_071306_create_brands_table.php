<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');