<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
