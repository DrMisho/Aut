<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');