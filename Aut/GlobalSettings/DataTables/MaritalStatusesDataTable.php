<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
