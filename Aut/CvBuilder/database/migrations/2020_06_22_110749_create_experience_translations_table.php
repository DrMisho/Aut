<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
