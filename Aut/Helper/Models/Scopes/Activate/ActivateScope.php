<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');