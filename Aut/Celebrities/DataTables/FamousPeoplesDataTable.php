<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
