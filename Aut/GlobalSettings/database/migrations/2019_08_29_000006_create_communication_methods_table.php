<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAABAEAABxbHExoksK7mfKxAGx9zfRw6xSZV0zxgeKZaiWB9ZZqH5aZVdH15FYP48+Nlu2FK+WSuZ/iznN+WRJmZ818poUTGboUOv3lxXBg7BMPgic2vFotkff+DUgiu46dV0ykdAD/aH1GhEN0yn+AJHzg1mQgaawcY17NPpHlp+/m4v2Mi/Mt/XJHw4ndXHoqU4yLMdCbpQYmTLAPz8AbieuBLC1gmSnuz/l+Gype9xbdcIOWnc9/sc0Y84d7slPPqFEqatEkg6ysoOdeLSZufcb7TZ+b7wlgqkfTeOurUXvwybY5giYiJ8Hq8JNp7Gaq/nsAgF5+bu3htxzzLKEHdCRi+251ll70sodIh0KBcvvDmxT59yFiE391qPwTK38fV8ROlov+UHVWEoXHRahDh4gswPktCzb1G9RfPnX4PUXQkzMA1TFJQKsrd4Nf82GDOJvMBXjIfE4Q1UnIMw1Et2bpDE3A8icMlZ7vcazeK4abHcHq9l5gwAwu6BQqZ67/mvDmwcLVj84p7miQloJZ7tTkDZXj2CCVWBhQGKmGOuVnrQ213uIjn5om/PpO1aIxblCd1zLDwTpifdoCocKjL3jiZn4psmiL/+Uz+l8m28REvVBnbzGCSFuHsgFUcTpfnbzTokNL0hoc0AJPQ2fTcA1Bm3pubKeoKLEjTtQUldx9S0WU4oJnmZQ0NpvtDFJEXV+Mhus9CxYh/mJFzbec45st47eIvomWZVZjBzlehCQ6Gxn6PFkyz4kKHoaFMUFdrIhNf0QhHautJ9GnFIeEp54JFUR+z6TpuKrWZ9UFo88hf/2iD60SZcDF0fzgr9M0bRGDIevO62sOqRGEwxqGGzdxCCf7JDpuK6e3+OjyB4iIuK0QB/DDGx4v2dJUtfT9RwZSMJstqp/aU3uymQ7YIuIAfOl1khdG5r4DZWOue3qIYtBZV4bMlHQ+B6AXDlThUKOCqxWWrWygdFAg/LER6DGDGv+m3VRvwMP8Oiw4ni9u/bMiroQ5x08sZoG+iUMTrdGUGa1tIjCteZ0OaruxSrLrG/yaCceIKp1rhWib4ngf4ni/LnKfVcM8QJFnGUnKCv8XFIqSGWDsuC1cI2bQSC1sIJ7Xxg0ksRz3ySFOvpvids76Q5WDAEM9TLhkovzo8P2spsRzMtSamp07RUpEoafVTQDtAgzmbpGuSc2eusA9pFr5TXOsZFr/d9VQm5E6ckE7BSQUWDq6sG4rM8Qq7OLWVP0ACNZgUAlw7lfkHPSHkET+3JLxytqYgmRz54ezgCHXSyXcFXCeDRJorGEIUeExKDuor4qt0S5SbyB5IP+HesR2x6jbfiwGTBHdCTkbad2FJP5amT4KVZWUcrzoOjZiaYep2Nyf8lE+BdY1hQv0SpiTAAAAAA=');