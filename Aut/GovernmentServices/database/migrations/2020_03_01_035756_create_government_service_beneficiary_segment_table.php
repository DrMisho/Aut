<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');