<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');