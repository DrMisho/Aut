<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');