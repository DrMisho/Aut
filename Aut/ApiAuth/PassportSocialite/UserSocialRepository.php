<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
