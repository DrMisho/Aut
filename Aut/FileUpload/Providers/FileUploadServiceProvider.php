<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
