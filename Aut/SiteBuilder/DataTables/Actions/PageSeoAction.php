<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/m0MfsllVuvA3fe0aWtECPNigZ8b+RIJg42n3JgplZd2lfOSxHGbiXAyUglf5oLGsT/irciH8LnGLgwgW2Vtb6E56mqsw4ehx9N/s6Yc7eZ6joKOfB6aJ53gF0n7yJ4adxhZ45BfUoHv94vd3owfVq0IOECYg3NHXRRmUwP7M1RLDbjPkV9j+9jWH8bMJTGdbSgAAAIADAADeAXebVtTVKzP6KWYC7stLzhbTCB9icEJ7HdwF3QfjRb7Vh9SV23bnwvBR745rooI6Vw/4sgF1yG9ctBDzvxcCKYdSlbCVdotOvD83YgbmDmHW6qoYkNQ3CaZePz9kQgoAh5foVmSX7A5NmesXZZMiD6iuHvDXC2C74vI3gM0LkTGu9cBVRM9yhoWIaYPNn5hc96qi2QqKOvTEuT5/EOsmajpERnWHKOKdRxyfm/47rCYQ7bL90K2pyA4Aw9XWw3tKUkrIJJylJyK5uNBBj7055Ft84zLdKwXG9eMa2WRKUlByChjCk5+BsLzgZ7YU3xeNuIhSHQJQpgJfBy3zx8NCDJHIxXMeTUPVfVbWsYljRpZSSG5WsrWL6MX5L9scQaKalzpusPv6ptbYxfOGUfvC5j0hTFb7QyZ0uUQ0pwM+I4ok1BvTI8pQ4lyJ78X9Is0yySlenjeQds2R3cJ4Lu9Omns6275PwcPAe2kwhOAmHkagt8hEZQo9D9aWecTEu90zwllbN0NbzfPV5eBjCgpkO0UA9oXs7CEwGd7xab4OJz+voAcivzb2qjjjDpbBrlrqi15MLne19iT32kXbSG0uarRHHlkPWjG71e3LjH+TIRw5Fp4AZFwioGlRwX1PRkuY8aSi4jG8ljjRFDIWNME0rMYDkqOGD9Vqtjzn5HCGD6tA+1lzxTsQ4HOECxDyxaTqcHiMNcZwih1RvVDOnYNpUlt3/AYDgSmzCcvJjE4XS00d7eBAIGXmXypekVO7b1PS+uBDPD2GvDLms+SGNyhg105BkNeU95E5tgGuhrgzNUuRAL5E6zUHp/PSk/boF7XUoVoZL20LVIRkpcc1/Hq64ZRAgMFPiSX4gRfdGg1FLl64xHo9kUG4+KNY4cjAgnPtbA6w91e5QzP3NDB3n72hNV1/qLZa3IXR4visx8MwvW9K0qdixQEGd1CzMEGdioA4tUKUpEhAUAIvUIwJ4YRgSEasDnRbkri9bmma9Mce1UCXBVUWcdoT7KQfDxP4b3qF27q+p3IntoX5dd/W1CVFXtRfzAIlLsyw6et7ZqIGp1lCpB2IRD6c3ow5ON2ZM1YHtqPkoyHuZMkyu7m2/opoqbL+4Tvj5psGG0ZdWloHGuB9uBopz7uD0e+vG9rOeSxGM1ixpXcqpi3CLMDye0d0VSqqQkLrxoYc7DWbHQzq6QAAAAA=');