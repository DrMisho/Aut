<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');