<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAFAEAABb3Fo4fQfCH32Jz6bmmUlHVtcVCoXLJHtoqIL5dclTz1aHii5zE8OZJrv4C3goJ29frAix6ath22DsXFdgh7oeLSRAp4L2V+xaKoa4zRfM64icBrSUsCMcFmfMEDUSFuYxyy2xkpnfaL3xu/Bp/QijEiOXwgQ5AXlqaBE4+udVtgYQMpHKFl1CbyBZF/8L8j9Cuy15z+YmMfmk3ets+TkDzmdrTr1M5Wlf0+uO4+xkYOnymxs9YQsiVTQZMNhnMfR0EqVNlLeiD/M9AbNXrnqnGlD7W1Nz8vgmomkhPsi9FV42vkwTPkstAs5Po6nxNf42/99365C2ycysaWu9JIaD92HL5T4803+RLmj+7+X5czQfNuB6Wua7NQ6svigtjkRBuGugkG6AD0lLQjpbnS2opO1ljPD+44AE7D74fO9+lPB6m6i27e0YynEJkkM4mnpBFq3I7h0HlSFf/mGEg6D6EFZYQ45VGxJS7uE76mR/ni5M/R4GdmEIoFhW9qFOTC3EwvFp6EN5klm1cr4KZyIeHx0HbmO+t6vULIDGEPsskR6CUyiFk5pQv6PxsfVzprzJj5oV0ZG/enV3Su0K9jPf50HqcmGS3ZE9oCmHMrY/+6NWoL65TxtXvynZizxTu+uAu9iY8MgA5TTxQtPR87hJZigs46AbmN8/iStGdm0apWC7BJ1PD31dPVjSgtufaGTOj3+QkZnYj0NDwbX8HBLBZ3OK+PlY7NF6H27HdNPX2lg1bnbd1k+dBher/d5oJS6lbUutCcC4/RripNd/Mu/UD5smpqiRq9j4aWFjmUya+GfLNVA4AUGwjxPkoYKWAlE/3wpMZSY/M23o80AnQUFrONFwDdvc455bC0vPg2wFOXgfGFF0HM62ZYqles7fpgOtYG/fV0zYAQPM/vpvfx1/sWw+rchXNL+xMXA0Pi6YnkZxB855G/m2jGLUrtqcWgB94BmG7+E4f3cXFPs1KmpVoNPEm9dYiVatAJjo4Xo6UYR7dYwQiCgA8EervmiScOMxO9Tctwp/CLB5ZdOPtHI+FmwYVJPNJFvmxEPbR+aKIHf9EnkITenDsQa6XjCxRcsAALtxIr0BaKSfg57EQGXC7pNW3Gxk33twm863EtIJ1aMNgff9wRa80ALewFWyThzuvbpYaAxlbbVTq3lr+WmHa1ufwpfsOgrxk+rQ/hoMAwrhazi/f1BEwb2fEVQGenM4CcjsUytTB5e7wHgsftLPD4yc7fuQzAv+QO284LOTb6VRl+HI04Tv5+6O9G2u++TkwTnwoHkLJVdO1t/6enEmcppHifOCqkJzhuOGXqAc2qvA8vGtJMROVk1rPHDn2euOG10Sd9U6scKyUMVP/NsM4E3OGUjlyMZE7b6CY3wCKz//S8OXrBSHDx/UrJhdUkGuVz98hnKD8YLouXCEu93fj1l1e6I1xvUCF9UBzcj/+7O3ObfCaT7DPCEPKmw5kbkAAAAA');