<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');