<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAIgDAACa/Q/Nk6LT1Eg02Wku3WuBJzgmZrh5yR7fddsCq5d45qVvVSWa+/hIv/lZMu/ww0TQqMpucydVrJCIBpr+34GRa93z8ei+hwiMUSpZsilYI8tGrVmSZRay6z3mXLShT+9e1MIEEicroQ1+Yk3bKnRdtYUyY1BlLgIumUF9AqJ50/15a8hRglnkTiQugAmSWQ+nQMx9D9WVct5QGcd8r1IfvsZ4Gje5uMviH0bXtPxz4v1aEpDPM+RtjcTVBXPXGhOHBiUora//zFWF1dEr4FhEdDa15EJOM+ExNe55XIkMTWTvh02i20U+EIOxg/3yDcq9S2m2cMcEKRoU0O429E3MVs8+0VFxr3JlL52mIj3IwaqMfq6x9X4EjdWSfT9uhqTe03C7Nceannc9pp/jReKl+dwDYtZ+tbrp5Qfn4/0ihy6Y5DFZ1z0GmCjoWgMyNz1ba6d5XrlvuM1kOb72txvtQiD5L0VhiDnaSfuCgn4f1XCSro5akoawJ7GrNdiQ26Qc0munEXtnlyIGtwrseYUcX6hO1MeDxple0iWPy/Z5Uujce1RiQGtaac6SvbptxNRAG7nKnb8l/0t/y2guR+swZ7VgT/gIc3GC0kXLp+RadEZGiBjC/7zTYFZxIumTVhPMeV3lpuyvJnDT4D/8HwD8HufY5wxXzIXG9FQcEcm10HKxK5gamFFdZtOZZDirpga2Cy1inH1JLRdbhhY1qwHtEvo8W1TZmWmrIdbv677TSmOhJPYZm1PyudfuOm7YeudB7kU61d2X8T7FbS9Hx9mhRCxRKDbPUKL4ZLe+zQUiy1Z2X1N+PyjDILTyl0gQmKPBEu5GjLbkvShBZaPtSosWopWMHncNjukPFmqySUzy2jq3I+Iwc2NtqrRSv+MzA1V1aT7eWadIl1HvA7hw9r66O0p0LTFjNMMsz3zW6OfxHVt8lbUdJMbhN6RAwsWyWGgG/9RTAJ7siz58L/Um7A9aU9QBJeT/MDlyKFIXIjR6REvo2jKiEy9qR7wW4Shvw8cevrF0aRVHfghs4EmQNGJ98aA/WsAxQVz6wnuOW2zpa6NQWkNAF6nS7VnlP+ouyAqU1MprdMbzZNEdHvadvepYTcPL6jkgWUm5xJ1Fow0OB78ftFF1z0n9peHNwQeT6Q/QGFA96GXfoX5z86O6OVM489hwG1ti92/hVCpAm2gCbkqf4sbfFuQFAAAAAA==');