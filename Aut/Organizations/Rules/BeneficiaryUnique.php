<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
