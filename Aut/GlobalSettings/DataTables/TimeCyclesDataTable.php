<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');