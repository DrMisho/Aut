<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');