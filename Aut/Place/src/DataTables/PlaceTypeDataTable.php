<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
