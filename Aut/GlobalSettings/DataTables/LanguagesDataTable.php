<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');