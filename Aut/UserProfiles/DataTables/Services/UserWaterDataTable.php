<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');