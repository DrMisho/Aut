<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
