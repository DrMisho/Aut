<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
