<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAPgEAAA5m9QslSamfcSCwYZizS3JIL49mvXrnpMQZC1jLnPH6JzTYsPnoU2QJcLKj7MnIk4goxv2qsHZbGgVn6k26AcG4tmHN+p4zaOiAy023K5yei5Ajfmbfmud+UzNHSi4dU5H7fjRl6pvaD8ezVjR0QO7TC52ULTRaqHwAtmPX/4MGYYf3gOiDuQucWE8t/koDVsoxY7pmgl0ABuKSlDYCh3hPeh3t0CwXnCtbwsJTDt0n+i7KIrDT3NdkPcD4Bh/nhFS5wCOoyjvh3j3hj4GcTzaQzhQVCZJ5nrt46XbM1hL4iCQcZ479Pp49N9nTWE/culW4xdKxPQ/+olecKpYtfTPw9xLurR5q1dEzpnAZ0fwF+nL60n7GKgSu9mUI9fqmAeZ8OfGzpOwvFsfB4UzFLTDOYJl5A9f5Uc60kMPAc5Shs/aJ5jdA80ZulLhcTLxD5RHTSOIeItNuB5eUY2XXyGOTYcSKOpiTaxYAuENd2bqiSgRIK+x+CoE+2y3EboalB2tn6kljgSWiCwo+MNr9mBQWsJ7FSidN5zUJNlWBkzAjY7SK1vC/VvJT4BEVh/JU0zfC1tP+CB6K9NdymqUGrOu83vgQfG1iUZQJWHhRwwZPJ5vESLPfj9a31U7RQIWj10n3ZRtMu03bNyWcYaCXvcfWAEQV1LWL8Pj5gjHBMH5A4wR7gbnXSfEOGerkVfiVFjBSWE9QRsPE7+dJa3kD2/aWQLkFLqDfbGJId1FbyLaLHYpi/OITDwoXHmopsnuU4gZ7RlCqGU2G0O0wjHG7ql+jKNDyGrcJFzWvPXXas7KLJDrNf6HDVilUw6y+gWiFmxCENT9j/3dFivpeysGZ4AlvZSzAVF1hMvjyrkltI5Hap38uHQY4udT8zfZuZqNMsgOI5T3t1LKBn3DrKwCbepFCjZWIDwYbTEyGWls01RW3Gz5rT0TGL4KFJpfPAcCDYvqV3Mgk1ItrAwHE7nNzI5L25nFG627lyf7yqm6L88og/6SVxWKisM1zq6qBo4AvuKIevYN8FU6wLsUnHBf8U4cQ9GqceR6SCMx3uyvGTQHYFccenjamWk1BBTPcdnTaWN9x1ki72h0ak5+TimCGpTlU2Po0RqMC+pWxZEq/MVG2/FOtaHe7D1dAQEnAGuqfP5weAnixvanZA5dHvFdVUh+dCU5TKAai61SZqRgTyNjJzMKiKcYlWcm/fdnCIYjF3XRJBgx46XU+tRS1ouOWONNpJMr3oKGPp7PafD+Ssj2p4sGs1VK9nowQBm7/5sHLlEgcX8KndrTtyzZMKJG5/ODg3t54QMkh7i4QdnFJvEaCdetYTlb78HvuX5oZD2LJGluek4D9M0jdiW2mijsoZjEr8sdto5x1QTPTfMmX1jbiKpnUIpFC0mBVCSZ13x9nIdDeJCfDqHhJ2rwZZAc/RhUNLJs0KlHmS2ClmEGXtAyKzV7Ugl85Qnft00wtIAxPFGarUxSiEpgKben26Uxsstwyw1fRn8cq9iIxpj5tm36hvCEMnKKgrDuWl87FyAximx3co3xMkwnLIz381O2lFD5GjedzjK8xvKU4eIEHimEsQVdpgqgKHvSvMLNR59as7duFIRAH4d4dK3upPfUeG9D83UwVjRvWSq90BwDfe1wMf1pHYfZ4zIvriaXG/lNL6K994gEO+Qin+Yb49CeiULOmS1EcdWgexgAAAAA');