<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');