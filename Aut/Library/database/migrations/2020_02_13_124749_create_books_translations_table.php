<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
