<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
