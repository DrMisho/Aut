<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');