<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAACAEAAD+zKxeoUSdoTTHI7Z2RwxYQ/C3yhINjfoWEkHvDAMhsl3DDzyaZ5hVzMGg9iy+9WU2OhR++W+/sZpcspULWZh/nH+Dx6FGisA4/Eoo0j4qasCVF8QSBd/HG9h3Shin48VhvmyFH3hFaI5WKq5OEyeWydaqTBGiz1esfchYkWi9b1T6SDkeL9M+37ESvHT3qO4cxNDuiy5bDT04mn0M+xQABMUm1m7puFNp+PN4SMd0jY/nf4VH0+HwjJOK26GngGhvP0SdZjiRdxQnHyDonzLDrB85svfMQ7Boh7CrfIxdQ+Z9tftGC1WaRgBPMm/LbX5Fz4ukoh0LyPqPCNDdiTSYYCKthPaaLGzaRTtprFiwvs7KKo2EtXBagsrA1abJoi8Y0kPresXn8PECN0Ao0u6QmUigwvo35wTRzhPScrSBYOX8uFZvPkWURtuXBv28aaV11QMu7LxWOA5N8Ho3bOoI4ZMkSYYJclOIbUT1ThuNv3Vi1jTqkzF6Ft/WXTRoR8CRjwHA5/+ke0AS/Uf4C8MigimOwSrcsLc7eN+qTUQo0EeVaydlD8cp+V4OidQSjO5UZrnrLude2KNJciRaC2TmRSXA3WjBTLMbh1Zek4OIqeTTXtnU7ZKXq5EQ9XxdpYp3dWeVOxWMhAbcPxaLhgei5pr1l5Vv9ou0hLE2GLn1/QPYbNkdzl4cQeegB/phCEx7M8RzVvBGRT81AegNlgBoLWTD+WXat7hoda49Oku1BJsYtN3PH7MxV0ZHTjv19q07DytGIprGNIkXHd+kMMF07lYa5772I3PAGq4JXvJx1NxXVYRoc2u5h51Ag2/K2G35JzbJKsqFTkHHtVvxMdIXrqd/GsqpfgUM7gkTPgdoX5GKTxzTkoQZWxlLVrYAA0Z9pz8UCBxXt+0vOsvXxqnQVEUtWfsTGS0Vk5RrC3vureFASVfedz+RKihgF9qpSLYveGtHAw/jE0WhXSWzEcfkIq7HoIcodlnNAexvCkgu5NVZUp+tjo9v6R2hr1+Aok+qE78oA/Vjwq+SsumQO/fzidHQZbCIfcGNo+mQJV+dBiSJMYE+pxBfJPtllM9yRlFdtaK5S0W5SF8QLSv7XcJCpXbIJm1HwXHIcAhOp+tTaTUQw1xJ98Jm/SF3nixAqIzTaeCaFDyN6wvQOoxTYtZTVopBulrwzLvEhPQML46x4RIp2ebW7IiYYXH+CASkWS9hs5wazfhlCO9SlaAzcAsiMqZlvK4OIwGKJm0ghJMHc47o/1hRMLqF196w/Dh2YHshfBRrsPSuZuubkdoFwG95I5wRnhhC00kitmN8usBZN0bVE7/Ull/vmuGisNRSOIKnSYDDAAFil9/HNaWubMKSHY6NLSaTbj7q+zJu7bY7wSLAElMiIvdV1bLT19l48roAAAAA');