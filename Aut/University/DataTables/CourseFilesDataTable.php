<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
