<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
