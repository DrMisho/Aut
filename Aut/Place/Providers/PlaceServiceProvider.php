<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');