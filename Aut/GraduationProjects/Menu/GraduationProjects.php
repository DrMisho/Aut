<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');