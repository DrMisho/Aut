<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');