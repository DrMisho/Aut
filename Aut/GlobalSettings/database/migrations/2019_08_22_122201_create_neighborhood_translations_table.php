<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAOgFAAA+v9VrejnDj8IeKzzXKPwS10yQH5+KRa/8f8xqDdfTVBHDoCbUBYTBxl1PbWlarhg8oj45OdQ76saD1XDiGI0Lc2imA45PnvX7C9BrkPvbgyi6EbWp/K53jq5r5M920ob19OvslYrJeED0PhDKclkMF4do3nXy5efO4QXxZqtOehJzhr8KgFvY+TsKzLX+WpO+NYGRBhFf1r8ARVSZWXdZhrE16yBVDcLDWT2YpOTCoKE+0Bk+pbp7VFEkRH/XYKc3AtqEikLytYWg0A6Ns5v45eeRiAIATgj9MFzdo0E8vSzvtqQwfWqXOdFkl/Isppl99GMrZnNYppSo20pHWKrWCNC7rFY6YBB8M50fKpcA6IAi0v8tO6eN6HR11h/EpWK+1eHVViXaLAj7TOVpIfjaX2gjlBQLy0ZSn7Qq9wS2CzQsIuTQ/+mvMsFbhsSlCfheS3WCs5g3iG7p0am/hF1L3LqRcmRBHYJj6FVAjep9bN72aK0kRyfNMQ03SgrSvVbFd7sbs8+9jjtc//KTzMXa8oVAKQivSdlLNXdyBnw9jy2fScOUUuOcDKIiiyyCIpTwu4gi1+ToU41Q5m7RkG7u1Uj3myzN/b65eNIk/lKWJCzuyQmDJysd7+iA5if9gBYD+Gx0yJ4O95YPKVEJSFo6iMMKEPWYMzdDa2yd5YBVSkrnTIP6cqqpxvZrhjhzrf50Y89CYWCEGEJp8iGOvip70mHJ7EkwYKo6xljcHR5rHWxtvSUxeTe+ebkfDmz4w5tlQxbzxoLgTK3ddSII1rz2/1gAJjwwc8OeIL7DCAZOuj3LwaOWwaucCt/yhtCno+vaxG837pebkeMBoTObyzCsaBk3xzrXlz+uOBOFVcQ4kwk3Vl5wlfuGcpENF4F/fi5ynaw4F1SbNRWHISCEYwH5HYumtcbudCM7qq9+7fKHJy3ILdcWxXkbG9KQ1ASFZdbRtbsa+hCKvHNAi+RzKEtLA6iU3tOV5NxbQLanmieqSn29/4dN1Sb9eXkYxSFPs6jRqLyJM4csDGpGrsOulLtU8gOgpu+MOau+ZVB2lAZRUNES//1Zrm2zn8g9H9kIshPyJlUPgcSyX00AXzxKHNIkV14oqmLDYv7IIJo8+lN3DTNgVYMUILAMZzxz+uifeiS76+tmfGDW9ue1q1ib/pLIr+PpYO1NGNPvVQ8Ue4F8Irfq3z6DyFMKvCnOcoIzh8u3htqtbccb7ol2dqGGWpKr7NgSDYNWXQvhvaB519/oHJ+o71XMpDmazyRoOnsa3nOg6Mf+WqELdepVITzSDwgAQ74V+JZ2gsNbKWLYrnehDnU4XGvxy7cNAgdYLYISFDkHxdZ7jhEG2G62diBfr2pJa2WJfKQk6mSyuVexqYOgRzzx6+cuse8JFcd5NS9wlyMk2FZ/gSBl91uZSIvRFKLJ1o+GWIyo0xmDuEG7kIsQU+l49TZi6tOkuuZGuAhm88HZ0RCnl+g2zC9vV1t/DPJktKRo/RDxV1rwU7dzOc3nZvGGRwmGSPDiObMK5gAocbw87doU3zUGiXUcLj4vBjiA0Eib04bNFYCIiNeLTsOnghzL9ixHmqMdfwZ8VeWEZV/9ao7xm5+RKlKd2eYAPdSmkz9Byb8CE4+Rg8vWHTFS9F0AGcUMhjnwzy8Yqtjh0Y5esrFEUrzflIFZg71Y9W7Iyt0S+T6wlahMTDZonub/dXwbWrsdkKYdqVeDGCGqOJSeE/CKENe7hy8F0DBfGaf19P7tt1qkZIkTSAO56em+4rZSyiBciw7f0tMlDeluUD9CdMsGdUqPzWJT8pVL/l4r0Fw915td74UdV7VJQgwOiRCHeM9JGFB8O5DTe57BIw3dKx48D2mus+clx0qjZ6h6H6BiGucX8Rq9tSFGHvL/aEuvvBqhqK34r+ijNkCiPD5HDX02lkOIwXVeeBSs/Ddw9KufDiCWFSNP+M/1WFfL7fALH6eG4vExFT48Y/UaZIaQg3BnWT7rp1b2w81TWNkPakd+qpPXALkAAAAA');
