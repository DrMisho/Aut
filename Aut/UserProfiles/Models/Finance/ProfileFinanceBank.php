<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAPgCAAAXlRJQdjvpMgJbDOYIbOci6C/CSV7ralv+r+CKktv2oVNe8lxwJQd1PfM/CP8HV7E4tuivhGdZpCvw38rvsRN5VAaO14yr2lLXuKIZnUD8L9ZW4F7AXOVM9Q6xHxTk+ahrKpitHFyLxC6A9brNZVl4K+U8nbhI1278/g4i8q/Ik9ueJISqKazTG54kSji7HQ9JMGonw2f0iEPhTcyb3rPVI9vZvtIbaoFG5AJYNvQJwWKTKnH3yPPNAofRqLbqLbM0sWhxNDWe34t0gF/f/IKtbIyFyCWJRbxcJ4rVDqYN/bPVKeO/Fx0u+a1BPqvnTyCezl05WDYhTGhfEGkmut3AjwhGpLEN0ZpqynUDOqBS403LWZaj2Tz9eKCzsruJohLptecDxsv0T8cRfSD111zZvPhjxuk1AznFik77AH0KIlaLcerSOdTj5lIam1Qhw2j/rbNvW7b+2c2crfDnE6UtXY4zzPTVrf0FcCqnEtij0inLKoxWTDbjqIDRA6Ls2V2t7f8xj+56c432ojsTUPe8Vuxh0vAC7Q1sSpOqrn/Um+xTEQRZubMnDxZeYtoauaU0RspUU8hM01r4OcoKHpkh5j4XjCZ5bDdxcOH/OnsjzP1p50on2eLcBUSEx2nFS8sDi8oo7QBBX2kDO55NNkQCfxe1xKpfksND9IIA3W7fLd2GHFL4rFDffDY730paCV/IWdYP3iN8bh78A5VUpGtMTgA0dAmjbQIEeGkpe+hzYyFDavAHYVcOy5nd0eZusbK694VrtfVjfCjeDWKmRdACm/4VDmA9Urrobx25j4MK3pW1PBt/E0v5yV/N/T+rBAzMtxLdQmhsLrGxWdPs5g5enX+rKzVUXErhsI5SamkqYjkIJUtowfPixgvO5bMQoPYm7IWsgYIEOEjIFrhgDv2OQcXvIseABZtJ7MlN3zEV5+E7TWMj1ZDZssW7E164+WsZoCuvGY4tsOTbPWBzIQG7OoRtnzivzra6k3tdvBFJKu68K/1sn5qIAAAAAA==');
