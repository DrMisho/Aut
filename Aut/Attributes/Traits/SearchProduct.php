<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
