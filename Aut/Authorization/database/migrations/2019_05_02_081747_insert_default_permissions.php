<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
