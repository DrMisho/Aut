<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');