<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
