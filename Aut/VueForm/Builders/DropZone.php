<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/iZHplzGoFqp9dTaBTXNJ/bssx5AsCC1eE/FdcZNQz92XrqeTlZO9UoVfWN2OliWaVyAaMgAUeiyuRDFrZEMCH1ttOqWT52rVert7UaB4K6eI1VB9VwQYZcCHStA0w5pXj49DmqhmyA789TJdqNCu3INmGDX08MTwXK/n5ccHnBzpPiGBIdkuldINYYfIihbTSgAAAMgEAADcMP/3wXBAAkt35xvhYfnlflfJXPFgCISRgL8SCizGx+8b7Xd7jzGjImF++8UcoKsC71DoMAA58xxxh1dNj7tRUL/bT15YqL8ndwDOKBssfse0tLUgVr7CtAaG79SUO2RsdgIrDOOEanNCFQfEi0FHBfDWhvjwLLEPBwPAF2sHxDcdKHhvav6qODYmpWzNu3WwEvmXdufODR29v23/FOQiql8t73Gawu0qaRE2HsjMKwCd+mvg29wG7afLJdrC5FeQtHWxG0uFU6jHxUXMFOUBCq8iW9qE/W6mJ8pI9EOTwG9JmTInAfi5bKUzrgrJGSsR56xA5JqSuxGDOfMLNKoLtzphK5fTdwW/I1IWaj9i7d+Scb+lZLu7Miz1fFZKfEPBiKeMH76ZmewErsbyWbWAolk0N5O57/5Rz1Fh01l2MYkgwfou13/oH3oiU3IIayjJQLVx0S0Zt4pB6UPbxlfuLRNc2O2ukMgKszfwiLuNb2NtNzCmId9MiVUpob8/vWCEtmOn0dqDSbPirkdVHUISZdEI2S/F9qVao4LdWsQkoMmIfxpsvvLM+67anEFhoxltMmGNe2PuoIr5r8gmo3HHjwkNW9K3mAtJmhXltcnoCvRLNjoqoio/tgYRN4Nbd/4b6RviY1G6Ew1WAvJZiZWCWrVF6Wd7sLNpzIxX53BBzv6Vi8OGXjK1hmyxKO6yCovAzKcMNrKkZP8f6toIAS35lHEJTY6QhGcWKpn+eCx4yiBUBRDlqAF5Y8xQqVB+aWaHqB+KwkbpNMmpgkeJUyoByKXtOP0R/4SLJaPgsU2Vlpy0Ixscj3dtE9hwO4XuoYqzDG2xvrZnYFStEcQJncxribjoX57MFxWS9Spez9oNbXqFpsaBJqPZfkixhE2+dbIwlJS58TvjLGDFzg+ZeVSWXHi/ghNUy+ynekAb+FnHPHEAIvGm02/X6uF34QKEzXf01N/Ue1Bk81BPH8wxSVQanoOUU8WMMykmcNWRsqQyVjJ4Qq72nboYgYM3kPUWPBSZtnYpgZS4sU4qAZQczdmphJsMI//Ot/0E4y6BXwnVt+1/BuibNzS7JEN/fDJJ1Zi9zUHi5QtfwE4BnsnOjh8/EiYtbG5uvN3QWH0yuiOR+FYX6GH2lUN9XQjD82teuAp2eLs7cnbIR+7emUif7sGwForS+2Zdi1QdWnLwyIDGMwQiQr1lYEk4l+IUJ8SrOC7AP5g+IT9Qf13hgFFMjDtyeaM1p2ZXCCDK7kSWMWRXwWS8udRflo0FfBTpzslvwID2H0HAes87ozQqz5xl3HDnip9EGv+kyOdMm9Lz75AoTSn0QVRn9fc2qxjd+SyXAI2Izc2/UBF0ZGhW/gZRj3RxZf1/mSHPiCCIjkkZ7EgUXEMqe7yRSfv4c5nfNuuxn8lv9HsT+3pISe8r9y4wcC4wKJqJtUH1RfjlH+KDZgT86DyyDuuWR4RTT5JbFCwQGp8ekh+et28KEhYudFUANkgzFDILZdLFe80WmKQJDClKPoTw9Oz1Iy9DLkktt4rXoGD8tfcTtnkhZKb49CgMMnCZDTwtUIfPOCVMR9tQ0iyAZVjWs+RzbSxZCYaqfhkzXMzEnNquwqlHm3I/uidG533NjdJI1KA7ATUAAAAA');