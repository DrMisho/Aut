<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');