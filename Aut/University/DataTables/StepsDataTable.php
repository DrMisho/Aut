<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
