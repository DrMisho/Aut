<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/Q3qPKkkRA0/I+iexsMldMQBCY+gArJZ2zMEcOQf+x+RAY/hSB1WhC8ulgPMkXWCv62tpevmMIa3ijIcU5Ynl25g0Quh/GfEBWG0CAY/6i79+ecABY8A479F6ijAD2wVL65fOe9ufAiL/7a5O4FHvag6KqqBxdHab00zR+1alnzi9nmW6qWNyzJye1RnFXyGqSgAAABADAAAkx+jlznbaFc13289V1/xovhY6kAEPSyD9u/yHwlyDFhNr2DgRdRqiwt+EqntYQpFZnsAUkwvyWJXYEmOaXHfwj6qVF9muTqt2ipYkGBufJ0TOEWvubA0o5/FLlVbcW4nCMv2IA0dQdsbPzQntbGZs+T9OTvZ7KcUo34ZEdfs5BRYJqJUqD0454oPsYTX8fe33/ivGPL3Rkwb+4Pb/Zzh7Hznfbku90D9w0oVi3Dz31S2baG2SuRSv70rH31U5C1ELaX8odGSh3fuzYVGNAwx6saIjsda1dE0ROND8bH+rpOKQRQmc8F1O1KpujhjfYzAyNy5Bkan0rKOGICUNVaPjSjik5f6wUGPXbyHe+9VVsqOZbrXw/+aiE57fh+oNBwkGwZKi/rWsPA6ZQ/TFif2y87L1TjhWCj4XmberWbnzdfqte2MIczeNxaadhRqQu3MO9hXWx13ok3nutbyOJ4ilSqNbYuDN8KOfqaGfLdyPEbszBuY3wAF8mZGbqTDScveJN8C2/9Tzb8N7XRkRnwqLRhmatDXchwCDcJS/J5d6CFXTdj5WM9De0BJdMyps+tKRiM8Cw3zHjZ3Wmr4aRTUixVYmq91jNhuZgxykrdK+jwlTA4RBlK1JGWi0bpFdSySxe99EpHa7FsAA/SZJO9TxuddIbhWZiqHAXOEGgRIIMKAcQeZN5d1VKULrDBsi1RNkIrkyjvqldoQPg7cO3QxPf92dvPwN/zhuWfSuVaaTTXZbXAkJqctLmttgESElYgemeSq70MKxnyPq3bXBGNtEwY4dZBoXHxiRvwW7ZZKRRnlrvltEuFhIoHUH4VLvYaoo2DgIS09M/9hqnFzb+mOjP8nBZXErBa19CpLkjkV/1ptO3UXfcZGJMfpACt55lpUtwq1jYvhcn2eib5WkjUoO7rvzl5vQd7+82J9fHWJZawtOT/7aHpS5rsaN8CuH1bRd6TOsvzEaOev9VTY8PocbeVjlvPZWyhyav6clTaQfzNo62hjnZGg+oDAnWCx+BWR0co/cgSam15Owya+g1Fj8AAAAAA==');