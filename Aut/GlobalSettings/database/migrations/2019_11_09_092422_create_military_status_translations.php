<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
