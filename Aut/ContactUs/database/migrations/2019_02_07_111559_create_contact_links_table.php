<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');