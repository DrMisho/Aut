<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
