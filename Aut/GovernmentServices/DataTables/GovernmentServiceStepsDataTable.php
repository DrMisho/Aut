<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');