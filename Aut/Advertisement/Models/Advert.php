<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAAgPAAATz9oTMcrEEInxq9wGFcDVaOVmoTZ59GLOrDaAZRnMmqi+LKJDpGJDtFNxlRlEJenhXFvap3CdKQHinAEXynMtWBdmSpx+3vsrNssHTnzXLGdcG+sOmg+g8mbkjIVNvwicby86JL9NFR+HYelBa0VRBjuGXRupFJwaFtSJVN+XsNDr2el8wNy4aHVu9oxYWTkAuUg6tyymRx+hNdDmxdBK7CFLH4pAJoqGY1nrmTDvPozPknM6bPpweYipEjDKHVsW4JJ++GfIK2wq715ze/kB17jKHz6uIGg65qhdYbeGff20cSf0DEzT4Blgodg19WQ8yh/HuVT+PpFOSE32Lrj+qYj9rUxbXqYaIWyIBUU+oNIjGrMmzSF1UCmKKLm9lb71GL2scSXl8tdeyYhZkVoSO6+NnFSZhaC0YwTvvxFhr69WAXR4O2rlBRHmwHPCyszKlR+/Z34oCbZtISU1ikrWKieiW1i7FXWNLZ777e+KK7qNL9fWmymJCp/8fnrI/agUTQ+DmGYV5676S/JccFtPN9LCtj7e53Zx9W2as2Shy4abrPVby2ZbmVbJOCcKOdrRPbQjmRyy4BiNxDGD7L6Lh4DOY3yUVWv2AwJ8yaGMh2HqcVr3j1WywV31s+6wpHCrLCZRpemM74t1Y98IrDDr5oQ0IBsTri0XHf/XVvxpt/dh5f5rj4C6P0uDiYXj/y9fahuJdTk/YjcRzrxqoq7A0n+ca8miQVbGmBtjdkXfgc6pJzTVbwXbgW6tTKwbsVofObNV9nfeSUi6stEd8wxZhNknVGDSqJ7Je9vLfajhCb429gssLHZHf49rST/5xIMRKwdNeR9PvgmlJm72Qq8r+omckWu3sqoViznQauChUzVKUubT6HWJvxGBrjU+CdNur30kUFyKr6CruwSu6API72hu1DRqu+eqps0m1hQZnmUxxUIh8PhTQ2SnUEmEmuMBEU6Q1NA1JPnRjmkj1C63mVtAst7xMKuW2MeQz2KzGY4WVBTnC7JtJnciAM0ug+oJ6oMQAmPLDhV4cXUjGCysFIw2enuyAiac3bUmVEpasz6n07+syqmCPDfNn88/MamqB1+gZhSXrlFo8uJRii8fUC7yBiQRl40L5yNIvMUi0VVEPtDzEldFzcHNVO04ovyPpMlXOFeMO2DujWEe2GNVv82b7ehV3gTEtQ1zOHbeArCgvtOmANsoF/SXcKwFo2oKe37ceXoPOGKBsPbgH/ux27SawMC/akVUUHWsPHD7OUaJHIBan7kx6HU2JkAv1pzhmlMKZmWbaSD5r3liVjFkqpOb44Eac3I5L3T085BOBb8ZHvrtSQv8X8gLwjps+h6DVoDrOJnP1T1SkQSbgGYSkh97/3g07xhqcgaqHnF7O6z03ciaD6P/ZviCuZYi5OUXkMDv+tLyijhM+pB9U9Vw8leoFaONHESQaLttLN+ZJdnRtodEWD7UdyKT+2Yp8/9GwUgo2FDLCRcQ7eBHbOw4m12EwRAciTA3/GaTvwiDCOtup2zSJ7f3e79h09ZDB0ID6WIh5BV8nGbSNxkubHmeuOovOvD9EfN7kh4MC2nDt/38PYpl0amcwOl9sctvzuitIfsEK3SrXcPnDca8Olk9ovNeJaGvp+f5r3SMUhT86sG32clLgvHQNr0qEd9rrmdRGxHYNIzBJm8qxFZIspxeJbPXxz8U4doY+gKvH2pkbGI38Q7snYbzOd4o7c+F+qayd2EwQJ5QACW/V0mZpyUItUkQrWA5Txtqy21qCjA3EGsENpx4q2S+Q89aBn8ahuknKsr2D+TuCXek3yUCnu2e3sucoCMaP8IMqf46xDRFrIoZljzLHogbREocnNa+Y/amR5PCsMhETly7snFEThqvkOTiKeY8d276tqJatptU567i+p+QPfXvSIQ8Wk2RtvxDWhNDFd0Yvz4MNv7w4MlmDuaCME9N8+kEtspr1tLGrVZi43gmdd3LFDDP5/ZkC/uh9CH5+TAl0Rrp+Xwcbf61fatvPR9vqRR8rfa8MWghHMKPMq0w/sXWmp0gRunjpzTIJ7fkrJJB6UYTR9hqEAxKWbVru1W0KbknOn0SREmSAE1res3ShZIyD2jgJwCpp6hoY2ytD/tprF3WIpkJU0bkt1tIsvL/Ic8D52ljhgiPqNK5KTAkNempJv/0CL18SFyKGR26OkN8mzZkUwXrxtNgVXeHzjJlPGiX66yFxLqcruqBdCbwoBj+FC8KPuyDz+aUV7gbiug2gFEnprOGVsRE9ckVt0VlHobTacRHNaliG0NzcIgaorTf2PxlNIcap0mkiwMF2ZHlkTbI7QM/Q8lqSCMXdI1zGBKd0YvX6VtDza+jLKJBn/efYZ403G14ELQ0zdCg02uiNGk/QZMxtPkSCfrD9PotxAEMwgEWjoiikFBZ/XkiiVslbv3EGgTeLfrPwJ5A3S4MK9sq93a//wbLXwGBueLkyMASrqUJsrUgCJgjRh938Y27avy72bs3TNhMkF7F6mKSuh1TbGamccxIFGtiZh/QW1KuYeCaTgGI8Kbkt9SgevJHjIzMCgi68JCnah2y/yA4/kUk1tTw2Obf+nICq7E6vO4R+ae+F+5FeYqNkcRfLqVhOvm9QvyywDsx6PJKAdXyT6GY3kp2N0uyihpZjYILygIxi3MjBjI2SCIsAT5ogPj7QAgLXey1o1UyCrFOk3DD14gJQGIgTH4U1iq1mDZuPqtyLl4K6yQiMTsPQGe11Psx/puSI7PSIgSADCKYA4gyqAPIApYwM4oIn+mzsOjU6aaZOvCthLeb1Z+PTD5SDX4i0ZMVSq/gWRXop+WmXA95OcK+aJ75Jx2pwMGWrUUxp0xMIDsk8yMt6kDFB5rFu0gdb/MYk0L+L+YhfwnNE9gUhsitFh9H45FN4cGFK5wpwkohh/J6uvqO3FvnECX2oTONGu8zqT+QTeyMYCFNkMGsoXa3B1Xv7fU+ySoLxhhEqJ4luLY7VCeVwCMRxjd4Gsy2GCNv7xun1uh4B/yBRI5NFAH1yP80lpJP8JtnSTXdljdT3WmMy0yU2jm36YAh9A+GYmuAhB7ujAb8Emz6skOkTd98VyvOSP54ZfDWhaLuPZyxEhwOA9RVRowdhvILZMy2iDTTwLvukapIOE9P78KEbih14LMyBDxODi2Gr6zAwE48REka5+X1ORQh0SeGKmKonftAIXpfyfZGuhBzGWQGCU/LeOm66d1EOThmcYDyByWBZjrRUKNjh8p10Qksjyj2aBifksCC7UHsYKHjS0CoNMszfm2i3bWYTBq5pdHEpNmAvmhdokoTgURTuriLHTGnkZOQ7ud0ZIvzT4NsUBTyuTYK6GMSL+Y+FCC5ufLEPbhWegat8mtx1gVaLUjdY7Qj4z8JgQCTJbj1mCEQn05COIIlna2XCFYXb72Jo76rKpSbkYU2EEzsxByrudfbgEFh+3na045NogKfaappT8CFTBVzEOwzcTGayJ0G/il0NlSziQZ+JVvo8KgXO6EWPQKDZKb6VHl+rA0vTCIAyXyRpdyOqp7FxkTMn8KWhNAibVp+2szAS2SN4p4JgE8uVoZZAyHve6pWLAfX8SuCFHdSZfcYdrIYr5yBWgU5hUT3PQrUDYzGypcBdwJJh7gsrYf9+zPGt5kXyCSywyjZZK3tXsfqXpQMK0FzDGG4/9GVy+lmmzP821L1Edr3/rZqNkprrAroUEmXMBmwznrv2iU3b32Ld18wk4N2UhxoUSSTxxxexbGh9tFOnRm5w6uuVYopWxy8UPxbijjuYJJjWFxJWW9FnRX37k2lXBc4KFKNAGk1g8dnCRDCXhEpeAb8QJ2gnOPUUOOhilkCjvjaXU+SB9/nD8S8epkl9d6j3g+BTaSWAhysfQpmWC7MMFqSt5g3kfRUGjlLUidq590FdLUJjtFR+UD+JmKL1ffnISyAn+t7tSxGa+pWCxr/DdfQnZQBEHSo+nsrkU+qjTOWPQocQQQQX9oOkMBVQnj9vkCoEQC2Pry7QVYvd4p2QyWcRv1byHK6CypBkCKOVKPco5T0DKZPQuRlkPMTYH/ajTjX7GYR4wmq9a2/usUXDVEozKlbgycb1ZeaZHCcX//iSUFtXBzACNhzKS9WpJ+DVg7DtkKWE5xfot04rDsWnNs8WQ1MZWOhUugW8L/Yi6LS+HMDbzO2N7oz5O2fDXtrqa5YYXRvoxl3mcJmgd74SItwTfuc6NfS86t8P4W0n7ok8AUgFLTdYDi8Yuo1ujehhYboHcyQGFp/bwOzLWmxqgnjiqfAAZQRBO/xDDLF0Lxh5ySZxvzVG7s6VFakOmxRIGG42meemAKjJ7xHcUI8B3FvSsQCVk/urNdcyh2xvY0jOqUJDJT4FyOdBQC3uNcTKUebgHH6/D+NH1Yn+r/gr5gvjEdcvdsOjvgdYl22eX7Q2c4+Xop5c3tDjYTZ9htywGCZMLFW/gMX0XSki7IOara76B49dCNFVDVbMkSBxZXSjOxm2Z1icewLB8Mz0vgP7J/lpObFTcZtcvPPnb883nOYTTl63Fdf1I30O/zAga+3KELBMlutdiFSgNAbh8UxHn9iCBuHQGefnMxVnOx9Yppgh6Z9LLFJIslLoTxNv81+lrrvLVEkClVUR2SCKA+lA/8fxOxjdZFUKcybY/ZTkt5xoM+dld+t8jk3i8HI7oHcsIgW4Q592c2ziCP3KrwbQsHqDegc5Lly/bKwiHANOg0EDi+QRgZ0QjAFnJJWKmUYrFMVDv74t98sf8bJcjZu/ztR/apo/KLtNzJbuxNTmeLVuWvhaUa4B4aKzuglxfAjOnK/zoYX5d7WhRZ1QDb9l2Jn8r0oZQqIjnNgNDB6G3Tlbgn1pV+/kFYCoq1FAbLlTeZFcHWY7ZAiOLJzfko46DFfUDS1JXP6sx3S5/uRjT2OTsDqyo4f9qBqQ/a9SB3ekjtUhMm7/01L92An5yy6o5F9NKX4beT5hPoeUWnXehcezBwDGMpoV3RszcMwDVfD/6T6QnTmKJds/Fdu/AGuQJbl8AYbZb9hOYkflbwwxFHV1h6NsxIP/mj+89y+ZtXgInFxQXQhmJmKtLLL0etnYIkfK6H2l53DxfVJnyxxwF2/EWDdPYCfD5jc/8gkwgPMrvlqNAAAAAA=');