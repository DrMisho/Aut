<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAEgDAAAUfMt1XIQtR++BEoVltTOD3wi/m81NkWO9BwhRA0NtZD20RDIRTiLSsqbZdp+cI4XJA3JNIHGgHPCvEmZhleEMLnQvOHvAP2yJ0T0fnVa2kQQoEUKbDWC3fQAZTOp6tNbzLMplca87UfE6KMTjEA0DXpYdTxZ4sBJKApoYS0w5nCNx2nIQVJ24WWQbG+jeyX1VcUR7q42tLbfyOR4k+ILEkfsWVfRj0Y3b9g0rMwXl4ouYhrL9Q7LTZvVMeTmdhgoKE4rCE/LdfXQdAw5CgB9RW07q7LiyveAxDgBIckHdn9hYcRxl+azli9YndcRFjCullbAFy4P3/gYAT7LoLIC87O1LzrZPaAiiNyDELnzlH6xxXAo63i+RqU8p1hZWQAAw9FsgGNtAtvEMX0AHlrJ6DBiFWFjkKp9oW0U+a9ouMGeotdjJqs1HK4D1LFZl/ykyBudWl8dWX2qUoTPnhqAoTYy0WvJCwspM7cUGEfPMn/1H9cAtUAhy9KuFMlUe44+J7/tXZdyYjSCclL8vpZHZ0bXEM2tHAO2q/zbjHTO1PLwg6+LiHGIqN/AGo01uRwjUDcL2YDC+ToN8DlFCg3ZBMQb8GJDURJO5+Pq/sYhdZwm0qMpgQVy+jso2pb6pybQMcL1ZKdfmjcqaE7A4EGJf1gKS5M2nsDMjVysU1i1qSVkz0k06tzDC1FUeHRev1mu9g/K9ccPVNowmkqPGy42AnPCZRepv4OJ4QoQS5Qf5BMsf4PqxoTc9kS4ugL7KqoaoCgH5AwT8Z7aPkUMYapmowf3zInMIruZodNtDLGJZ53FskVr+nVKM3BKgbf1DZyNJSAvaUMM9QOP43vXDghl5P1WDPE+nUIVHd4GdJ1G398T7pZfC2wLsl24R2v3LQstwtttBu4m4fp6n7xZgp7hFnRNwo/8aOzDf80g+2LpvY0OYZIjaM8N+hLAO4Cd0vt/Kfsj4XbhO4JIt/inFJpAh+P/HK3MdxJ482NDY2Pv3eX8EqG+tgKs5DYSuOKPD7lvgXX5WR4MDyZqnOFrIikck78AHdFda/yk+HCdgqp+8M6hJMRcsrjAiWlzpHKiwuLOjelsLYB+r/tXO/gsRzam/TjxBFq9CdmUAAAAA');
