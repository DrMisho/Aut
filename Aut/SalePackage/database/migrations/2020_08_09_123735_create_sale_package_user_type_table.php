<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAABgFAAAe/a67nIF1JO5Fkmfn1pRXvSMUFopTA3Td9O/51St5PB+OXTYl/oaxA8c77iVP7eJDlPOur5xhA6CL16uf5rZL0VGCb7zw9u4KUdHVkeUWIxN5GAP/cH0h2MBqXOk7vS1TAV9wxtkSvpIOu45PUOpb1tMhThWjKFi8SySuinlnpW3vldY+7S6unyCU9MYkDnKWV7dCJj/fdaeZiZPsBA3VpnLT9scTLZEajMarM3i9J2I9bvVf8Yb+jd6ZB75drKw3TDJ9CyQBLIKw/LZtRDfgRAeOugNHos7OAM0chC7UdU/SLR5fkkxvTZti+h20mPbtSOPgNUYy6bw48u59gevmHrIiGwfoYkHsiuayAVw5OxTwgdvRCxAVJwMoVCikUt7zdxuixlMhAOMtQwA9M9u8I+WbwcYKBur8OO0F57iMaQTDLqSnMmayGilwL9nNVSgFDFfbahv87Odakf6adzkt5JlWF5/TqljpLHl81/Di9QydLB9ityfh/2uUjb5909m5S1YSxY0mmQzC7IKicYWNgN6Iqd+wYOCpFZUieEiJ0lxFrI7tkoJJYbNxPbRE2h4iXJtVHUkP+nkbvIdBrv3gHRMeSacab/NB85LETihFgSPwXYs2k+f62iFXzXIpUTXRSzXmJHW/ysTKRxGQ/pa5MaO5PBu8Rq73HwiS6HUmbjUKH7b4Qw3uuRPwjxjlNuVOCaOsb50CA/HPv2MeKjo019pJyBLKxftjgpAXH4GLiTHRQSY2EJk5ibzIVx8T+wC1Oc7G96nacNpJJcD3tn+IfwqLcRBVuITTMDx1bDzcxMyp1qv1CgFKUppr08LSErXz2sI+1gUrhzh6BQjBWdgqFzeWdLPJP4AMsy6I5JCTZKjkCLpZ8S51QrfK5ReAQuLn+DltVSNY62OVkGKtNu0OZMS0g+on/wC3JsjYG81B9ZWMN2yKwN16FP68Ppq6FKDxXAxvzXGGTJOG/RQ0t4gQ3fg4WnZKZI7oySEjNpB/PZvueEQsuimZVPgeb1zegBEbJXp93COxJ4j20aGVhGE9x3dmQfiqnn5ocuKX4UOwwMoEcn6NAnxLhBzCgEgBhfvN1nOs1aXvocyZG/jQLXIL22Hpe1D/bbPJt36ji2ZyuKuFWmNUGIsxX4c8mvEbDEu7ifpisQiYBsnLskTvUaJaFymxLMBNIbMBmoBXEUdix+5iz58cvPTD40qmLf5bRTtW5hRau26sp/KFIh0p4Rbh6P44xayRiYsrED+nwAnK0JE+A9u1+JrDrqxB9a9XSCFDYx7vphR+xWjqVxChVJAb5ZQztLz7PdJh7BdaoXqGxiMKP7XtTCb/eKRZbr5GH56miO8e2s1W9ATq1d1WVEEBuqyBLAPxmJKn2jwoGE25At3YthF8j53+mub6xBA7eZno3nSlCoHY8S6Ozh5md8QpZ/iBVSG/eHmVwp49+KfUKnCFQeuLvs9bUCDwf4/TEskBWkyvY0qZoCLPX08N+H5s+E7NaWqCgwaRtDr3tJx0ugiNeFZwDDBOb5YalTMLTRDKjKDmnKukO0yLbO3Ghoha158hpW/DZ8qlDGxgqewOPReye1iIj5VRhx8tvhX/8gj8Y0vq40Ri0ByPqhNdJNN1w+cNah3PDTwd+a+XjR1t4QdBp5PhI+3GM6tI3p0ultT3WRff6BDg+Sz1nVE+0oPgkgg1bpHn4FcShE0osze+PjfM24aTOhE2BpNkqhqFOXKumSPBCvYNGwAAAAA=');
