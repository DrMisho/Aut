<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
