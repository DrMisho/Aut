<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAADAEAAAmahFn4zerRWBNzFiYgcbdAxYjcTkV2g24w5EuYepxKi5BJqGPhirr4iWfFOU9YpqrwV63Z/k1L/Ykphqk8ZAawpPruN51O3EPZE2becj1YEeX8qQSWjUY3U+nLhwneKIFLTGQAfMzLh+7VWS0R04jMhTynSkx6AzeLyUVsH8cjQdmGFNLKowpmvXt5ia/wHMyI35QBVa0DMM2ciHq1yQMP8LZPMhtdlfyQuQZ+Rq0LojoXdUO/SReEERWFXCx4IktHEjP8c58tii+fbdxthFAq6WQu28+451F2G2yQ6XlFjyWS/k2Sdks4tAS5+ZxGyTBcl1RKeqyH6I0DIq186JabpKdSj1jIkO6vZavPqbbV/jhExR2wb+/hqGx31Jqdd7BeJZG+3H+eZRFJrrH0kZcVYXE3uxm5eKM26xfh37IqBXnXTU1KCKXjjs83d+n1eO2cbnLgHxe7/N6rI70qGmheBvdGXkF7Ke62h6pKYySP0cPr9v3voVEzFfoTrqOZXDjljmBCQ4asaheskmjrXBBVR6Dn2may1FrcANSawknfJwVCiCK4divxfTIZBRwVmd+zLo27civ0L+PNUoMzhSb1z9+Xh7qTsH9YNY3Gloxfxb+A/WKfe08XVpWv+z3uz4nCKiuc1/AZAtEPIapT7R4vESmUpsy1hx6DHaGOdoNApqDXT9LFUMFAXaoqwed4POZz+XaFiAouhPCUgGMFglBgAA/jiaEDTSi3EEs+4kfUhUBmUakeFAec30U3EsYsFmY1ryE+SV+ODqUUwJIAbKpX7pl0TfGouo2Z9kTjsxe2q96Uish9hI5NjiXaROkVspVMpUsfydU0qnAp98XC7hI9rxJSbwGduNLiWijToVenyB7f6AdzN6tOgUXJ1NtHTciDtTwc2qiBChb2Vv0owTv2MUVfU+gzQZ+YWQ3do4mCb5aIwg4bFUKIy8HMSvmt0ZzjyFxtpqMLVWM2PO6ae3X1qM79ZkhDh1bukDm/rJjIoVVMAJU4/ct2D7o4kJC/9/x3lwnaz4cNvmUKYnOn4T24IDaAQMmc1x4ok2ot5Da2uCQuHeb7m+lMv4kQ6iqHYlOEy4CvRDWcfjMDFidWZRAk/0uWePZaQzzjUK67woP7N1NydAh3COL0Ks0eNgjRmDc/VacR+9oX3VPzuMwRK2hDO5dqjqme/MYHFkMdTpSjcaQGB8A6yqubm2Jl5MOct9Fc7DyhN6hvXCgkc5vKhpt2bE1WGPJsdmQ/pZ0pQKxK2QTKFKC+JmYJnb1P/by1PTw76fcWRZqgaV1cCXQ/dNKoaFMtqEAlDcLvpW/0XtjR6rKGwuDPiD0FHhdGuJuJObC4XjqyicaN6wI/ujM54GrNe4pkooDuGF8Ldc9JSts0C6MKL1NP4fuXeiqnAgtvzZwTGz0Xe7eNPdlF1/ji+wXAAAAAA==');
