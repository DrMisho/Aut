<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAAgEAAC7Id728wq/ENn482x8bNhMMjDl1WSLF46L6DXCC817duc529oCy4g1lsusVqp7/Owu4j1m521+KPqteCzSX86fx4CwE6F5AEb4iLT/eNt1ix5E+v9oIQrH0FZ7UhB4KNBPyMZL0+kyIHdAJdt9kGumGl1HZuJ3RAqF/T5X2GWDp4iD/ZV7jKUZCDbZkk/i1ZtLCYrEd7s0S7h4Yju3allWjl9uJNtwM1UcLegc/jO6L0ilJf3UdnVaGAS1Q9KFq4Q7l+MB5LfajZX3J2CwvfYfAXzhG5lb/rK0Xc9nVM/5QftiCaLQ+iXhumVFuPRt/4BID6Qp35+uh3uOyOR469hHg2Cyv73khakAZ21816uMuoWDHnrygtbE5JHw4/BotuwI2U+2bTZNUO3SG+hftjPb7596qNwGQUjiM3a+h/O/kn2lM/C5aEWfOfd1qqkVIhSQMD7vXy9pNblCPICYkIb7X6INvT/19U4H33EO9k/IqAfi6NQMookNr1mbR+PDkGjuDrDD3tcw7YbAWTTX33HHShAlnYyE44iqQDZYntt1wkVwraBklbxcR2axRxhxsOXILvyR+iZCxEDW7My3yoFs94B3L9O9/ApImUc6Dphcw6nEd+smuNKFSPvLWeUQEMftZBUx4Np05aAl55ktgJ3fnQC4PMcLsuvpCvyvBw/GNuk3dfkKAQFr3/vx3Y1tuip3ZB4ICbNeFCrFzXSbIJoAMLgBijuucMIBNrOk1Fm5PsBYRfcRIL8irMBF4sP7BxGlBAXzAFh/CsyVsZOCFAkRcNNIwldPNmtwVBSOVZo7QeUfb8E4lW9Mkuph3r/DebYO+t5y1lYycOuZTpFkqLeyNZLwLR3gje1gch9enk7IIe3BPHWYDkqYyVKSkc8tfBsfnV6JTCbQ53Rhv252A9uK5avjAVzAwwFBdqUrkm+x/g+mq76QzrvtI7yQ5nESjYZ2+3YF9YVqz3CFHpjuZyRlzt+Taj9FGZJB7tGxN+J7dF/Z2RUaDIitAyGi/aIUOLQoxLFLJ/XjVIBmv6kZoTJ0z99ppywLS3kmFRJBLxXohBwxvF+KmX/sdc86DGQReOxWNPdacVK0ZsZheEE3yUuMQEzk1/tTXNhtU7yXl58uJ9zlO+BDcRplHZ3L7xjZqrMJDDqIIw58ubAWwyHZCL62oKdioLV1JHPGQbxxBZejCIQW45ScyzhQHzTE1KZjHrxjHacARX78/5M+LY4rXnJbllgroOFT5EgNIKcJTcEPXA7L4ESaf0auKkW/8qWs75wslV8PmRlVuUHPbh2rDI75wA0inS4+hCvohkOrqykFL7lB7ev+CCRsoYbqIvBfYZ6lU32t6j92/CMJ9dHHWsAPDLf4vhYUcjAAAAAA');
