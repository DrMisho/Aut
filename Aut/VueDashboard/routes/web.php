<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');