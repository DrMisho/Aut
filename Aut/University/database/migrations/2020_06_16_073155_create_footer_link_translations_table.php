<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');