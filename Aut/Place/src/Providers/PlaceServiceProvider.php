<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');