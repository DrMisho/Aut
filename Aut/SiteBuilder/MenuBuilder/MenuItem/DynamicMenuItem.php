<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
