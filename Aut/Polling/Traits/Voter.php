<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');