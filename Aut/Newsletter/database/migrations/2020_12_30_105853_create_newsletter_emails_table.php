<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');