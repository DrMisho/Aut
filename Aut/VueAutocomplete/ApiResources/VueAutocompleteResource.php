<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');