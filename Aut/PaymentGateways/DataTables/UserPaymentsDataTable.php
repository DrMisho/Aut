<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAANAEAACEaxu4X04lqGIq61iHnWNSI3Kwg0vXFbRq+ryqUXMxZ5NmR4ENRzgOOSuTDfUeLO+6XlpB+b7WBqxVZSNZx3UDg5pJthmEg4KI9W0k16HhqmMD96o7p2JUyNVIUxkviHVoKApJgwP5LHbIpS7FY4p+3mlup/dAuK6FENrksZI7sXj6X2epJ6EuuKyZllzRLiGiO97lmH6tZNamHjIttpGhqBGZFlHE0B0ZrtX1tAgVxyE9FHN9NHWJS1ghIrVHkQuM6I9xmEu5MhEE2W0viC/bv/3aLjaetGqZULsREIKBvJpOhXbPhqqEp7dvMI9rn1kDtP+yzUB/Q++RKZ19dTKKklkp9ahAiatDMGWZU7T5l6m90hD+lfpcyhOWjr6DHQxKZummlh7qrYvgz3LoiMx6D4HtUuYvMBw7rqsHmDVvnId63jD/ehRhhIGOQTBudT5vOLwGEGV8gCVqH1e7LeO2kjgkLJJKwLNgn10lI2qglobh1Da2qF3sAY7utdJclZFCWYZCw+3Q1+A3sM0InCzLqLI5VeNSBwjVVQrpeX/kdufPsUo6FxmQL9U3bDeGk3mVSKtSu9PDX4q743OJfWUfZfmMK6tZiK6GPQ/UsrBHCEQ6ahn3Sb8VlEX8aCAccKK6Zj60pmTGUrHb4VC6yWjXiYvBgCeoHwFkb5nVMIWICZ6YWM8me9OBR7Vcgeh/Bf4R7n4R6uwsFI/odv0rxqFspxgVnX/4XfEatetSQ9SGmEFM6kjl0jtiFT3AC9G9CXfjNms2iSnRtOL2lAmGtzdf8lqB+H0eYi3j88xw6ZiF7EqXq4+nhazC1pK8hEqONVD+LQOXRR84lA50VTaIkSikwoCscwuh6RWttFilmhsKfjpdhLf36EzhUfJORFi3S2lpSDBI+/CseSVAyv3nGUgbRQ1+yNKbNm+W4El3mlgNGaKIDRvU2YJsRp1ilbTTyFlisvAN4NMc4StTOv5pFWtTJnrAonMWNWi9dyyBsEWfVQRdpxGHwUiIBgHs3U+vPs0IbV6oKDoRaehdOrKlpr7btFDwtdoir9GTQ4+Qk4pp/duX2X3MUUJ8nPr1gd1Aq5z5MonTt91KuFEC+9NgeY/lZUJnmeYN3aX0o2fEIr920w/mXesh0ZlkIKdqBCec2qpeFUMXbVXPgHlzke05OvFH/3HO7NLyobTLZh+iWMrOMLH0FwPeRx96B65rINzrC7dBKn/Q80BhixXFbx1412LZgvKL8f4OyZg3+KBSjhIKSwavm5fbLyuDgBFIrcoGRADStW0HOfkWnvty+MSBxeqiuayYfVLkcPMw6newHQxx43SpyN9exQucHBOCmbhSrS1Wm45Q4n8iXThwjzOKJniEHwDmn8Ro2YO5cFtX8aH580+WgywE5IttutoBfSqKvhMLyhvWvFqA7E9nApV3Xc2PKiy3/emRM+ggMUNoax248SAtvr5hZ2PgMIsUaHfJtAFCxuujaLmTamhdHhstbWsIjbBvKyQyit2azyL+Bh311vPBdDi+MOMfb6YhYkpaQqmBwiGEA+Rsfpt/LX+tcLnmlGvHls1Dr4HM2GEntXnGOMZ/8vaBOZ9cFlh3qc4g/+iVJBQgHvKwBE9OvXgD+mnPeW4PdJvqGM/8sKamdKjUEwAAAAA=');
