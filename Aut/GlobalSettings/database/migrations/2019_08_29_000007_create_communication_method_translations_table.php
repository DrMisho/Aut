<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');