<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');