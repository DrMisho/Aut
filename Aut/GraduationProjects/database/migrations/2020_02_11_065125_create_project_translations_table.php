<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
