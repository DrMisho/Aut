<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');