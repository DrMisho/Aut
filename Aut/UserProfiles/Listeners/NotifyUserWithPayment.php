<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAFgCAAC6kRH/Bhs1JcVh+RrL7ONXpLoxNecUKyxOqbNt+VBldV6Dq2TWVeTVIGufr5wlXseeQA5HwbSsNLe5AmG/NzTrRfiS0xwYGhxXqA0ijpfh9BgkA8G8l0XEg+DMjCDH3GYI0eca0kzjrNBqDUw9cS7a+LJy5PU2CHHJuAce8ijfv0+5xGdpnQKSQCnZoMsoQABtTq6X1//sK+WQbTYYNviSyQrhJqJKUbXMDKsrb7cSkZS/AHwLAk/YV9ziBpUPgS7dorEyMhZ0njYJQNZWuI1NGbAmR3cQzQ5UfHo0IxDtLZU++m1yPdOGz4f21ktCDKe9sQxxYUgiC/PFwgDI4neDiN5W0Fx/Z2iwOIeXz2scUmh36CtYQDb25teQa0oLYS2/ouvSAfOKEgaCNcgOVAAJZaIm3Ub09VyhYDlzY9z491GPvCIf1ol+I+xmfQADnwr8Gy2aZ5+1JffRl2yjpe6/j4tUQfnCppZI5LCpuDgL42VSDmzlEIVOZQkhbDB+BGxzCqpO3DsgdOuej59iuvoA25uqaGB2UgmHex5ee5Klmk4/1r4xJAFfZPmOn1u7dNAtu0zGKu5mV/mA8ykwmfeaQHGuzlyLRyRljw9gLkO3XnjLWjpRoJeV+n3H6RvQvd+LZt88bAfSc0k70zoCvFcNSDL8uN+5PU34OyxaEiz1hN8HCpOemxph6u+EgfbbAxq4trTj0cwVMREZaKxFqV0dJ4VU+KZ0JxtzNidS01Nmh2vKCPtEUGH/LJdU+/9CTBAMT6cpleoGtsG9v4elA7qAFmTzYlrJDKAAAAAA');
