<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');