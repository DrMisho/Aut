<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAALgDAABYmmiC8lb7klWO8rTMFNouKdyWdm4OSztrnt6B0D1uxK6pnzS7C5K9Y0AjAwS6uqceiANl0z7Cr+MTGSrP2cmBR4XSfxy4Ja2fjJoOWFKR6KM5zIlgnr8xhppboCMyogFLUxYNSCOilAoGizSwxIW1JHLyPCFzr0pELTJvY4P32XXrJkKOavezNWsIIFNu5JL4/aFS2roAsqdxy1JeY7YauHUyeeJKwxsYwMQb5qebb6656injetNRq9t77NdM2Pi/RNTyn954US68BhxYydbbfjrHgM5ydxKkD6XFbR4TR1K4JqD3sPIWMus1Hv/Th3EovwXGAn4RRenvIZ87cxqIXIep6SASTael9B5MSMGaAXC3nu7rjcbIPgsD0ehsdB9BlpvEgtd8RwIvuCs9hdIVstTHSYie800cvZV+1dtrAr0YpzHtM/gnMoiwZV0XtMQfsWkpAAQfa40JLdM2EcQ09PGhe390sCC8Ugu8CZcIsAYtRB47RX5cMjtGd6n9/nIP7G8ZCkR+X7cdUNtX3x7LeVIPMIP/6g3bvYozYlyCUv8x4jZBH3YkS4H5HGHzyZEd6eRmuu8KWPzfwxMkLlpaeFuiElwY4PB3fqs1pjqHd9m9pKBZ5kOcXqsnQHEudzEl0+MvDs3dT2SBb5EHn41SXXlSNsr4rgAStnV4p54fyNt+cbprsBx2v+h4c3Ar6PG40E9zcKdYGwqbi4UdvUKZLUV552axQynVbb1PKETPFqX2Oy9rmfHDxHNci7p0VDsqTpsZ/d9BWpApXObkRzrbv1DAojLU9KLUNhwvYJxlhyt5gQNXv/8uixrL4l0sTWLVSut7QtxYcSAbI1N3wQ3QIeEmZK5OpJKpvx4ZgJUdt/J55wLNv01HGs05JLtJymIj1ufd6nfW7Zql2fA56MnyrSLZdoqEWC9VyteO3yRrmGNbqKR9hCXnWwk4VZ0ANWDgtA46j7AmGGkPLvC+N+KRJBFBhqmc97K5IKdigjB95my8ug8fSfAesW0AYocuXV/HqTp9BnR+DmriHique/c2zExw37AZ5VLXdiY8t7YMYMTy5rX02iBlyihC/ND1cSZvU6csI+w5nKPNckob3+bhs+Bn+znSxoOMlXin+knZwkoI3/kFTUmYg7/3ZEDa3NzsCvgmqDUld+pQUxIqBKuwMjJA8yTp7cvEEr1ftD8LdmQussJ0jbVNIeZTSyLNrV640oSf6NfJZTeV0Iqo08mkSqcZjBc15iBVRe6W19jzmT4lomtAtXf6AAAAAA==');
