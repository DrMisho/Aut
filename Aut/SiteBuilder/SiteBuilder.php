<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');