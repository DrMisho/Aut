<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');