<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');