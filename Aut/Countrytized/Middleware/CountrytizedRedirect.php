<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');