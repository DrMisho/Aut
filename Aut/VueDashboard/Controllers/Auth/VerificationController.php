<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/ExYc2K61RhjBsAKKczAEtpUDSbH+QYoeWtIvLfZKVnk2gLk8bqKxbw6GvFMlUWJjRuaSqLzT+W3k6r2/ZTgn6rYzX2E6syUI7CPf8vNBtjCfCoUNb6KekH0T32Y6f9/ObwPgMxBo/no+3BoHSdBW5QVeA2EQSLVCZTRJyT3/d4/QxxSqDLwAWT+GBBNXpOqiSgAAAHADAABgb4NIoFGCRMBzn8rym+klDSa9/1HuMaUlVtaxAfba6PjiHi26RaJ+xSm6+EuivTxAPHTVW5q+u3bdewIawMQyxFE2CGrDb4w3FjjaM+6uviAyw1IZMrVpVWBVZxhhXS0BJrujgHAmt+2zCJrSb69qekWIMJiefcDHtIHGQbXSEPFtOPfYp4nElnINtd0FGdEhMZ//om+WBPXYVNVO4ESiQ3BrwRlk4RCIGLvyvhaNvH12qdxyqDAX5ACoeaQJ6D16xbA+weGA7VHugra7VWTcezV4HglGbugNNsUnnhN3k0/VbnTpOwutvMGZvcbnULJZ8P4N5JMoqubH+nqdWWx7JRCGu/5+bLD95wXyG9+JSzy086KlNEISQw4kOVIJMJDCUqS1vkSq0hxFVlpVkNxdDx5yzaQcbWbbMoSjHbmr6Ya0Iw5PmRKEZj90bOFUpvyZrzNl9GSSXk+gCDglyYZ6EuSQI7SKadrL6cr95/0O2lJaCyx5i6kHCdxEa6K4gcdekeT7IsURRLbOwA+mSQG6n2pEa/matyq0eclPgpqI2kTk1hR5Y/oHG7NnNZ0b7Qa9JbRrBm9ElYYQxjykTvoXOLNolnjOkmLQ/p9EiCS/JMCLjS1HGVXvSH5XScnqfBA3xBQeVJK6gS6BGK0RjLkRacIVv9/hbP0wXGB0tMjrDmj4iAA+BLrc4FLcAmIzFP2aZVh+GD2IhA3KMwK1OXkQYrews6zGFuiJ1iSMlX4LmmFbH4nYUdHmXAeCgZYYOIZstlAZR8ZwlgBiqBFo6zJ98crRnX1Cs6bDTCdvfXRzidoWfXAXO77oq0XKjnfa1yfuo2cxMnJyLKdLRyDdIHynKSVtvC0eD8UJIAGuv00z336LKlgsAeqr09NwCkRXs94PdmBDE+LzickYEECLkINUySWXO8CBKOyOm5Jth7TTGKB7JIQCnLpiwt7JRi46HMVO9T5ktmvRLLSgfpqTru2ZPEgvmpyDEIJraS4VpPxQQpK17srCMyHQ4rQ6JA982uU4ajvQm/Uwk2ZanACcf+EbBKmLLKUl/Oxl3mR9C9TyTSx1MoXaRpO2lJNvjMke9HQ/ck45ia60IaEDdPd6NvOWPI8risHPx11EJMFCyxY3FAZXsoK4gcxh7y4SO9g22iO5CbU5Lurd059nLra4ehN8AAAAAA==');