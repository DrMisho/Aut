<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');