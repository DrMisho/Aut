<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAACAEAACHhx5dRP8OH5srZxFzDsAenzKmEBgajwGcvofSre87sPunxh956i9jHuwlxZpjGvJtwhKjZu/jUbDAzzA/cAMqzWHdiQqaXAPG4BsFS8BONXmMyV/gHdQblPtJAeBhmohiWqkjQxcQ/hiTXr1e/XCfiHxirJ+t2BrznVukcnkgfOD1uXAdhCdr8RmOKIF6PGjsiblLFQOC5xqnqjkFMzVWD7v2eh+ChcPsLKWlm0q4H/3jNTNuFKQbrCMTOngiss/iKq7OISA4jMTEWWzzJVXmFQI98NhOUCdgCyd0gIc07aFZQleoA9fsqFT/2NZvuMih7ouxH4CdtQ4gCpjXM/yQpHWUY5ZJuLw9IIx+m/ZLgMMVWZhw7ctTb1uM2PVY+O2AQP/rDD2x9UrYMWu76Itpl+oatA6TgHq4ydW0o6cD1BkjF4Kp2hmHeMmV5vHovxuUmfwSbrZDw/9XEsDi/f6vPCerbHpDmLW8dfcNyWTzVYH2yif73xjAKWNU1/qtxRQp3IIVk4gp440P3TNJm79Krn7i8YkAx+zqZWSCSuGcLtOivQ+dncE2znwy1CYLza2QFkyQAE1zk3c2j2CYmTN+MomNb3tDb6uu/YrTJyOZ5I0Bqeg1BKRNH+n2uaFRbNVZa6TGOHKqWUTmWZ5bMendYg4A6lxZZ2eEqwfAaKDIb/17IaXBpNpY9C/Vobs/9uMJzqyx9tE+++qfckulDD9B5Zuc2rB8MZCgXhWbRK2HSxszQEpaFSFvtVFJcxedsFjzv0k7LGR4liq8cPo4CDfN0SCMA6mL3zXYyj3+FApQGL6j1UmpIDs0PNbwiyBL4TCknIuyUnu1ocyzWfSA/X8abSogAsWw5mpulxIiBgeOh/IOUQlRi56O8XWyhq+3ZFoZkmeAwd1vUWA0e0xf7vFJ7FaZID9klrC96Wb0ypLhyT4AUD56mMNO0zGYIo9y7LeCZxSc+Ju+AYqqrX7nT0+ZxhRdwtiHqMIiQBtHC3MVUIGd9levKzm0ZMQuTd5W2LzOpbTAEDhrouxMk6Ja+4LeO0G9yx5pNDyjhqqkQrgSkrxclRjYLrob6+uRsB30/2Xcs37ntjk9w+o4vz/oIvRwFHH7IiqCEcSSCMw1kFv4gdrCd+Gcl1KvjKl1OdOvICtq7Xbrtw9md6GfUyYCjbm0pVVSBWNfmsz5ujCjDh1j+kwcyl5USkf8eSdQFyULMIP9KrGrFM/IEsPGEnBRpv7+2jkQGYTRBbWTaDdZ4+dicV0KDWhShZDQKoPLCoOcjQXitxbv2xO5hRJ3C3qjCGIQGTwjIcmplBrsiHSqE+iDVE4O2bc62/ULNV0eYtzsGRI6ZL5tkd7rTatrdqeXtxlCvegPiO2iP4lOtsgi9F7eNZW2EM6xQBIaqUjkic76Nl8AAAAA');