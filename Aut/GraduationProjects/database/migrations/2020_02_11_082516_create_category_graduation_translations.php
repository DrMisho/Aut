<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');