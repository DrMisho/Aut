<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');