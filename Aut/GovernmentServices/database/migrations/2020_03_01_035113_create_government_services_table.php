<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
