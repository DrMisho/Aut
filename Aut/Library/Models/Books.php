<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
