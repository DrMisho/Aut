<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAIAKAACjY5odGZAngFkly9Ae8S6CT2GqM4XQd1Mu6ZkbP1DV6WyOJO/KXovRRz9K2SdUE4XhqdYdxq/vOMsjCPr4mhXB0wp7LM3dypqEkf3uzzUl/AHvOzSu3E5g946Wui+NegNSfvfuECfAu00cOEg41tx47vxdpG7J8mD1iqcQjMm021otTwlJjePkmeqwRAwTAD/tyvUhnwPhJNxk66e18rrQc6Vhpt9BvmS1AfmaVhQ0hCMqvKM+OqJkOgrqvb1Nf+74UiMQ/jFIaRY+bxr2EHVzGSCQ42GrmhAl++w7LMX3esdWlh0KjsLf14jacQ6QxbA/LhxX7onh1bNkqFlsDq+O1itv0hnuzbxZu9g2+okqZCMch3CMAFNevVnrQSlVCHuMh//LmVcUE94E2A5mpKuwIbsXnyLAuRn0ca+XQrsqh7eJh6rZYfqlA+P88OxLij+SQ9Pdfc31kAvhaUYeH1IC2E3jpCovT9u1wl8dYswxOMGHbugjxMrW13ltlwJtK1s+loaUg52oYX2dEEdK1N7vAq071fXUMnh43pNraF2jBGDcDOkI7EsjsCyb4zYRzo+XVQimLoUOM9z+qzVjjgVDORo2Sb3+gxQDaw0RLxvYKMnNYezHf58bomezaTMCLLKI4jkKnPvpSY+lF7NKSL0QFQZONpz0r9v+1fE7XxnYUnnqqqyDZkF3oPxfjYbpE3i3DNM7qiWhf0Bm+Hr//G4uSZCKQ/3J0BjOz0Q5Bilm3zX67WG8QGnyGQ68x7BQ579uHQmHwtOMCVkLMSR19NO9v0lqLRopMjAqRHSc0Q/FX6ok9KT/XnXs6t916LjCfvTDOzsJMqJFlNua3cPv1NQDqdllS7jCo6M1Ixp654+1ylKHOY0QkDQM5jvSU2ADBQfBnqS4q6Mr6etI7VeJvQCmcgYWrc6oYlDaMiK8GnobvN7gZkSpCn3BdB+p/Y6RCu5CGz4W1YWKFTqGAn3hZBFdBYeqPBOZ6rum+V5xtBeKl3s9yK496KQUbgZnSBt/jV++Jq1KHSf1fGGmBZ3N0WLKruqYG1y3wTvwBPYF/lnYt0CG/ShuqKJdArKwRxEvYvbUjjN8pKtvqxLWDqs64vQqMpRfK9tltq9vQDV4qoUmEB7mzM/hk5g/fgs39oYRbJtz6V4zeGeoa7b0ZFLhCoV5qogWXU7xu+QuUfY8xtQe7e0so5w6IVenS5VB1XfIKgLbP7SV9MiG+0Z7/qaSSC2v0gp6P0ccS4J97G0HobZ4GuTNkhVoqte6bkMhd2NfWhi++pH9jQ4CB8DIkjL/ZXUwtAm3is13Nz9bL4zdxYE7jjpRXiA5hJZzgIPGnlLhSu+fSO7JdnGCl3XjEOvtiMe0LEmEKvGD/BKxLaqi+qiLmAL8aL8EJ1n8MYyhNHQIkXbpv6X2zrGlTO5hQDfo+IfcTRoNc9OqZSWu2PXAx+3NCIXQ9n4IL9UdcivtacsE/zrhp8EtJCU6CRMvQQT8QKqWilhK0wXS+MBCBsc4HYswOkKDof1rWHJfCcQlNmLJ3W/4cGkhfYV7vWF8V4VZDzcdsrKXyY7WTEVJCUhy1FeQ4l70kJnmqRk+ijqYZMur+SC6x9oF4Ydw7OOvdt4bOknRVuyFvDwnrnbRCBhRhc8uLZx0Sky0prtZH//N5aeCSsDOXXoWtO7qRFldG9Du+Ngv9viYr3ZStMFQRU4JqTWZdr5vEFYB3fze5V5rnYW0Z05QTlPzuBK3Sd4fRgNo7YBhxO1Xoehnxr4xR3LMCI69XvMWW67avD7kimnUvGGFBjs9cFBmTHNIyYJjfvDFLMyRUUYwd1PtW/55WDyWXDIjTJePO9kI2YRWhU129l6YpzVnN+FZ8vh7PxLKww8bkhmzkwqOZIf/qV1D2ufFhrLxB0Y5F7E5zAsFuIH44JHM+X9Sam0gy3UhKohAsn8o6F4dHxI3BmEBYpUwr2pi8oHMsxdKl9U80sPOb1snDR7X1QxK2f38c1KtE/ps/Iz/HAievZptmxcDgca+Vfu8+9mmt59lGkwEe9QR8MP1cxTR60BytF5zK56A6b+SoQjCEQ11++AssqLyHijDcMDBLVuSnhrWRmt2kYMCAWDj3WgCF2EnhqXrbaN15+KZA/VFXilsz7vAeIvQEiRyn+S5ldIjXsU7IVb+QiMqu+2v78wTWQHHQetC6gfAB8o4qq0FGhaMokBn+2k+BDGLMkWRoXEopklnp2uIrDH+7XW5q8FQTkM/KxmP+MtmxHrNIfW7WYHzkMi7iZguKfjgj6pJ+FrfBSf+yu7Gm4HXys/dLBoG7PabUcs3AOrxfmqS6XKom/yI0CNeFLjxoKcgRzvFIGLl3e+1WLb0ngFQn+oXfDTxXm47koW9xmC7MkFdjz51cXtm2XcDZLJvVXg6wTOwY99mUHwtdiuWDAdBEtORdMYKjYQ237HnfMwbEsJLXtvyGPmtclatMXtIA+rdNGBf2s3TiwF7L+JTrgvOIEjX5gfoW84Ay/d+lkyL5uou8+urRmHIybycOV/Po0e5pcPVgsUBKE60RIWSv3kyxyS/uWqYnmZ9Gfnijp/tvENQC71mAwN+M9jHlhQuPHjbQMfFqT+Nk9p0qMMDblv3OfJlBgH3wwwW9LyFoC/7WXEZ9M5N/n0yrXg9o+IIsmyXH3Tlw2v26vbjyH4zHQqTLHQ3ms+mEi/DLquqiiNTr/QdHaWmMSeLs10edkYksrMwm06Pzwoz8Zk+mTV+x4ePtJssZg7OTyffKBmtWIoFVuhLlXLR+z5q7XDoXtWnm7pzyBXbr0y0ln4SP9tHPlLRjN1m0EPYYLWhn9CQ1lea8Ijfyb/M4zf10XKmBSo0sAvV4/W0wbM0La4IjMM5dl+QhmEZc+ZvBLiopSHa5l8cjB38d/S/kFsxHEUpoche60+fzBhTFlAgposjMhqqRpqJLmLIohy2mjan3Ti08JHGBGpsgQ6pqJsXgokVrUJtKMgC2OfQW+XogHInjqzqb+Mzor4asDN52eBhKCbY0u4I6j74s77iHK4UXESLgD4Txe+DsfaFz6h+TW6v1vjzxR55ZGLqwN0Zd4onPheJTquoQOl3Oj4MtFUTQ699jz6hQ1yh/zosRthPb/3VNkVgWjvtcu0UFqTqLNae4z4KCPwxbQt6BbLCuUGvS0LB5AukUiFXZJBpYyjw9XajmVvbY5yIJxXKgBaEF3TPiyPyO66LnlZoWIaYkktxkhIBVO4ImsBsUdSnIT3LcCUuDTWyC9H6aQ2mLvD4rlpM8hw1qtq8l881zbNG7Jy88IVtPXWtHdUXS8epyrT+ashjn7UYKOR99138zeLXSZA/ZfmqLfkNVovhm4mOtVrn3kjmq3vv4Mdzwoum13860KllByP4NLtob0AhYcH2i1YJF4HTJJiD5L5i8eNU/VB+Eab5qWAWZmt5gfSHTT77J0Fh3QLhOLrDCBzwoPof5u7mEFd8SR5w/EmjykfrKei388NqLXS52TeiD2fIA0QUs7evMminrgdALLH/4zs7XZ41AlmDUm25OScHGQmMau+KQAu/OoSMdzGKWS9MZesV/Fujp1a4TCAAor06YeMlIaAAAAAA');
