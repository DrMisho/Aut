<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');