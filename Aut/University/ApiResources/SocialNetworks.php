<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAPADAAANAbZobXz0mrhKbJY6oS8YYuspYxwghIDI7JX3+i+VWaRyLo4pXSmSn0CjzA83JgZYnPPcQVrCZq3QVHxCJTZN0AbeTPtUrFn14Xbu+RO5u0rvJEvK9vrKyT2HmkRcckDkyhdxA7NvwnMIUm4RRzdxF5W/b3X46f6G4+XiskCBn9RooFPBOcF2OtckmKJwHldnuB++TFxsplbeWrl/JPFDU6TJyZUGQhdW0r1weUveReqU/eCvV4pgLq9LrkOaDzWh3h7tQugIyEXPCQAOSo0e0d3VV40C6U+AP3v+1r4ZGrrQsdQ5ATiH7KWEhFu5O4tDjb36JUlgECgNhM5XGzLKfGHfQrnXGUe4Dm5IcEFXSqwXP3FrUrrbN9/eqkxnxDVmZeYOZokLJeQhIzdtsLiMrqtcFejGIEHJo+iHo+6zLNt8DdmpWYWZEfkL9C71ZWjMJPXqorSi8AszKbf+qKjhrNoxR6HS0hFTemlPi8b2cGap0jAcvaaAf+fFLaNefCc/xcCW4AWvPkzGpsUzC6M0J3fLvgZtLLmP8jqNOG8ubQ4uIN4QM2t7ach7gUzeQQA8DC7Eyc1Kmk2x07v/sZu043IMk/EJ0y6EgUu74nPvxH/skF+LVuSJmNoiKSa3UV6rNs7/anO71hrn3vEPEQbwt/h32F4ami6dcJususW8tKDP9VTS1N0xNL+/pQ8CiNuz4gB4K96DikoEl9Au1Xl1Coe9cAob4UTTfWy6fDC/p2KZcUhw2BdWlIIdJhFclPbnT180Ns2CdRT1vNaOVgZvrkSlScafMcygtPz301gMnXohhKEYxafUEIxLclyRp+egva9/uQRdj5XZi3C5RaMxxGD6CJxX8M6unGKJhT17CDRIrYGd/bg/EiOeCuOpHoL8hocdmcldNuZt5I6oMwucUGYhprajt2CC4axyB+T1zXNFp4NPXkiUbp0izZskMXbWQEwzMvh1YIOlk668yXUiSoij8R2Jq/LH9EjMUuAtuvXhhrGoRzRc10MT9C4KjH/ixCtsTTkMCMVLJeUGGTgsr04hoqv2vW8ipoVVo7BCapV7EZQUiVp3f9OT7iw6nYVHdMReb0LcH63Uhg/o4TD00+5oHIX7qRSk3ZDgJz6W3vfeeuciUoLyanA3d7qdGLQhJmr0BX3nIjcCrFjdt6WNm06t2LgqMjUReb3bUoyJpVZW0jAN3f+Kd2sxLTY+JYvEGCOyUJAQ9x4AKrKC9hk+Qp8dbSKW2JQjcmzo3xHKzinAvFBUSZB5M9/1soFYtm/vleQwSsB9UctKpcamgY2av+7sMAU6DFIvwO00Ve9jUufX91E8jOqYUfVQq4sPQ7kAAAAA');