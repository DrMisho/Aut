<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');