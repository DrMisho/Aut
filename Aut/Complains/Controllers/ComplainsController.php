<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
