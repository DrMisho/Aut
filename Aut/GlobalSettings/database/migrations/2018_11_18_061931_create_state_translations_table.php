<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');