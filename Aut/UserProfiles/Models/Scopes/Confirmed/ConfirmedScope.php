<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAHgHAADzEtXnE4FpVmjjJsYQdh9rbw9rv7s1XVXy5CXlt8Z5nq94dAt1wOmRIE8hXGsMNkH4wCmVYmGGKcZdSqoKawHCB2SZFplHfD3SrVLcG4EwwedquLz/fdXu3c7R7VKrOOAfpZFkUR+RnsqCs3Zw9JwNKJkWrlY1mgeKNBa8kXRNbfjk88eoX7PEbiujuTuEcdJnZSwF5hBLpkD9W1KnmW0N5zqqzb8UoqojrCrME+3YGYOY4Wwvfzfo+J89zKatjhi0PcnSoPAFjWRArqmH/PhqeQGKD1ihsDts0MQeRcpUyQaXcae+Zvam+nz/5CF4ELlNfbzFcOxVmQ9l38SVf3viAyCJQPqkRDp4+NinlybS4SOye7Sh4wsdrjgHqmD/b6cHaFennfDeg+FxDGCGwEVwooyooRSDaAv39Enxp1qSZCEEoRwNZafgua6qyEY+mkY3oT1nRvbDyh+Kxw+I6rT3q1Iig4h3X0dkaSaO+qnBumtJN7PmxtalHdfVwng3CMvwUNQPXNjkUZ+4zvVi8wDsLILpYopRb9kAHvSWM8HZU0+eCBVCwlT0VcXWNbVqicTffxTtYxXfnVrDSR8KndzomGuVJLqQ/pOtaEbtSQm3X8Ol3DBJWJt1BX8qVq1JFtyFCO/VMN0gdI77Dxv/mEarFrcjO85eKOyEE+Eq6mVFgMCQ8siQInuyxhJ6QcWD5lXLbaot0nCTtT3OPrNWDfPOtXYrElmVfr9azOTOiEJfwb3xdhr2aJwPjXR1JdjhwVmrooWprKjlm6mKcGzjUnek1TxO/2q1meLV4tVgkr+Eis6QlNsW4mPmX/PAIJl8Xx43kuCYqqTNW5hPI4Ffl0PxBCsttr6sN2slK3DfS5V0C6a2szfNjN7J5Rrtb5+A+Bn3kHTxWPtBwNSQUYrlkD9/1JrmGBfJpZFQZ1AGG6Gs5E1UK/XBjZZeaFPo/+P7q/RahtRyoxllrkXCMamLyPx1I8OxspldJ73RiQRBadP4dEXwjTQdsOxwBL9MZifP1fCtWpebaLsW7/bRHGiX/q0HfCFjPhZFQ4XeLohgvEeEfBG6P5NsMsJ6Zvubx5TA45HimHO0nanWqvjVrEZpw2WwfsTFDXtWBj52NwDS1nDttlkbMdEVPJ/XBDt/PwVsKBEMSqbhci0lclqeP8tqwtH7/3F7Jl9kWLOVFwuD9vjwit+sgBPyP4E9wpcGe5gVp6Q9xicSkUmjkyrPuqHODShvZqqqOwcHIW7Izq7qzFAN89S94ijV/cg+/R1WExTOsZYEy6vRdWBeTEzVULDmo68h02QAw1655lgRNDwRxzRgy47SMktdMF8/d1xQks4RG4MWR14+kQNYPfvccRmtsGt7KLnVcuvK56+uAAfa/B8HNRY4rkqhHjtlm4CuaR9ql2TdRS2C2O+eViiGWDPu5uystPuDno3QmrXcIOzyo7lFDZAPvEf7qT3CDfzdvJN6J0Qqh86Ptec/ASYHEJx4VbS/5zP//2tiA36RH1HEMoBVxVp843SGEsIclOI5qpDn5tp1qPeAwoCXcQiRudM1Ccl8XKR8A8albh4WVgpzJx8YIZaSohGgiSTSMVDKxHcMsAHdUin2lWCGVSDDH7gJMMz7HQaFw45joplEHn/gC3SLxP2yS04biq7COnAbknoPlaOyhCPUcvA3kMHzz4sD81rtA3JIZdtfnsfhGA0GVHFpw32fFb/i+jlgAcL06CagxIficb1sPquR9mXi/T0Tel7xIexw/+dQ+9BlN/X1zThD56aJW6SU9mJIUqSa2JoZTcm/ekpJ0qvxshslmt6Lg0l1Np8qAbup/QckoDMt9JsnCGFKH76txVZ2mpM/3hNFODpjTkd+X1snzBiAnv1uJcK+P6m/k8gU8u6hVyIED5khzc6rZ3Kp/B/pTx02CHWyZTMg674e5nIPW5m2jAze/zAUjtsAWe7t8zLkXZRgQr7uOodSd2yH4nn09y2jIQbQD/GJlCjKjxQJ5rD4O2DgU8sHEETFVa8MeDGfuNNF828oCBNelrtgAYURFi3+OUyEwDL6OD2u6BPhO/J1/c9i1qrQMv1VZP0HWu+ENPMTeuivRBThl08igwP5cC/HsjT3v/YDY/elTZeoAEoGavAuelJTgSkG+xlaxKBUk8GwkN58rKuaPxGN0Ruj4lc5lMLOTdtcGcqaiT2RBSCAd4LcVpibXLpADRWOjheVhTgLSVuG9/NruMO3KzqoGDJHfCSF0SN35w/CVM4qjjbIKw0tE/JJi7tac+fdk50ExQRjxhtGUsOHAsSlGJqWgw0D+2FKZlsMYNF1fO147LfaRN6R9TlytsStMbfK1NtwE8Ty/75DlTumaohSEy7/cs/LLaa4L9an2gpM2qtM5W/8bu/y9KBc/kZmImNSUnpEmjRElqVlGeHcH9Y55116YWFUc+ffB4HL0iLfz2jb03cV1PEYP/Pm0IEKNvU2jsM7tRub4yN7vTmbV6gZl6mM+aNpzhnVCzNQZuMCnJt3NY6jj9JuyJvaAWnG/CwNFiF4C7xgFmHLtEbcucR08q99AAAAAA==');
