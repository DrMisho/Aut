<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
