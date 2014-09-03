<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.4
*/error_reporting(6135);$Fb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Fb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ve=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ve)$$X=$ve;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé��a�'3I��d��!S��:4�+Md�g���ǃ���t��c������b{�H(Ɠєt1�)t�}F�p0��8�\\82�DL>�9`'C��ۗ889�� �xQ��\0�e4��Qʘl��P��V��b���T4�\\�W/����\n��` 7\"h�q��4ZM6�T�\r�r\\��C{h�7\r�x67���J��2.3��9�K��H�,�!m�Ɔo\$�.[\r&�#\$�<��f�)�Z�\0=�r��9��jΪJ��0�c,|�=�������Rs_6��ݷ������Z6�2B�p\\-�1s2��>�� X:\rܺ��3�b����-8SL����K.��-�ҥ\rH@ml�:��;�����J�0LR�2�!���A��2�	m���0eI��-:U\r��9��MWL�0��GcJv2(��F9�`�<�J�7+˚~���}DJ��HW�SN���e�u]1̥(O�LЪ<l��R[u&��H�3�v��U�t6��\$�6���X\"�<��}:O��<3x�O�8��>����C���1����HR��S�d�9��%�U1�Sn�a|.�ԁ`�8���:#���C�2��*[o��4Xx�.k\">��A��O+,�x\\5t�цց`\\�o�����%�j��]��n��\\��h�=�z�ê2\$���F[NY����R��[I����7��tҔ��7��(���Wj0���2v}��;�k2��Va���r=��(��,��\r��j*�B(R�2C�N\\����9{a\0ŕ�VR4�B��/z�n�6�������(w�s�s��ǴB[��Mi#:#��U��=M-~����h)��	�p�C�9/,�r�=�s����#Bv���M �t=�@�hs���`k��p.=S�\"��j��&5�u��p#Y������Y	�~)�s4��1naV*��TS��q��6�\"[Lg����B\"|��2��Q�:8ƨ՞�\r�V��4�aj!�.&��Ã�o%0F9\"\$�Dȹ��?'��2B�A�ga�kr�'\$9\rؠ6�`eϻ di��2p\\�\$����pؾCuF����\r[nQ�P�b0i�ٛSnT�#%@��S���OK�(�A��3Q��w2��f�i&0�Rh Fi0��v�g\nA����i�� _3�H�V�A�bn���'i�t��E)��\0r� ;��\0g�3��4��f��x�Qꢷ��M+v��EZ\n�LA��蝠��Y�%�EA��*l�U}��N�F�/����:�1^��l�����95��Q ��a4�Gl����2�c�\r�@�*��=bg����i�A�� iG���#�8�1����OڤL#���!�w9Ad�A�3��=9v��<���� ��pda�Ⱦ�t����wN���W1Q'Ŧ�N�p&�kk\"�h������n��]�Qt��m>�撘�Hu���!5��V��ڢ`[)\r:J�g��n@��ic�s�e2ɺ�\r��Ŵq��גz�hm\r���R�ld��C.-� �Yp�(��\r8��paRt�0'd�B��7a�,�j�{����3,��,h����%r}O��b�.��g4�Ǵ����` <8��3�g\n�g��d87�ƪ��e��aI�p���.�O�#^��W�����k%x,�2��}F��4�,�_�9�6;p�mݽt&���w���//�u�2�`���O ��uD�z^Sf��\r*yv=�%Mu0{p�Yl^�qU�}uiT�;ont�m�	�˻+��\"F�w��߼l�-�yY\0�@");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n:��sa�Pi2\nOgc	�e6L����e7�s)Ћ\r��HG�I���3a��s'c��D�i6�N�����2H��8�uF�R�#����r7�#��v}�@��`Q��o5�a�I��,2O'8�R-q:P��S�(�a��*w�(��%��p�<F)�nx8�zA\"�Z-C�e�V'������s��q��;NF�1䭲9��G�ͦ'0�\r���ȿ�9n`�р�X1�݁G3��t�ee9��:Ne��N��OS�z�c��zl�`5����	�3��y��8.�\r���P��\r�@����\\1\r� �\0�@2j8ؗ=.��� -r�á��0���Q�ꊺh�b����`����^9�q�E!� �7)#���*��Q���\0���1���\"�h�>��������-C \"��X��S`\\���F֬h8�����3��`X:O�,�����)�8��<B�NЃ;>9�8��c�<�#0L����9���?�(�R�#�e=���\n���:*��0�D��9C���@��{ZO����8��i�oV�v�k�Ar�8&����..��cH�E�>�H_h����WU�5��1�r*����^�(�b�xܡY1���&XH�6�ؓ.9�x�P�\r.`v4�������8�4daXV�6�F���E�HH�fc-^=���t��x�Y\r�%��xe���Q�,X=1!�sv�j�kQ2��%�W?��Ů���=�dY&ٓ�VX4�ـ�\\�5���Xì!�}��N�gvڃWY*�Q��i&��l��ѵZ#����Ց\rA�\$e�v5o#ޛ�����5gc3MTC�L>v�H������<`���*�]�_��;%�;��V��i�����4X��'��`����i�j0g�O��ۥ�i���9�ƙےd�F���k/lŞ��n��c<b\n��8�`�H��e�}]\$Ҳ��� �!����C)�\$ ��A��`�\0'���&\0B�!�)���5E)�����o\r��8r`���!2�T��s=�D˩�>\n/�l�����[��ŠP��a�8%���!�1v/��SUcoJ�:�4J+�B���v�J��\r���b{��,|\0��z��c���Y��l�\n��i.��!��)��dm�J����!'��� B\nC\\i\$J�\"���2�+�IkJ���\$����G�y\$#ܲi/�CAb��b�C(�:��UX���2&	�, Q;~/��Ky9��?�\r6��tV���!�6�CP�	hY�E�������l�䏞(ؖT��p'3��C<�dc���?�yC���e0�@&A?�=��%�A:JD&SQ��6R�)A���b`0�@��u9(�!0R\n�F ��� �wC\\����υr��ܙ��#�~��2'\$� :��K�`h��@��Eb�[�~���� T��lf5��BR]�{\"-��\0��L>\r�\$@�\n(&\r��9�\0vh*ɇ��*�X�!_dj�����py������`�jY�wJ�\$�R��(uaM+��n�xs�pU^�Ap`ͤI�H�\n�f�02�)!4a�9	����EwC�����˩ �L�P����Ai�)�p�3�A�u����AI�A�Hu	�!g͕�U����ZU���c�*����M��xf�:��^�Xp+�V�����K�C#+� �Wh�CP!���;�[pn\\%��k\0����,ڨ8�7�xQC\nY\r�b��XvC d\nA�;��lF,_wr�4RP���HA�!�;��&^Ͳ��\"6;����=�#C�sm�J�j�`ˊ�9\\g��\$#Q��Est/\n���\r��rt\$Y�20y�����KG@�z���,�x2�\0¸��[ �=и��dk��@LT�hi�#��Di<���sH���a��\nr��B����`���zW����[�q�-i��ƺך�`W�r�6�nK��m�����5��A؝�aC\nCo\0�g��r�5\"��\$3���͛����ʗt�v\"H4{!�s�G�pM\r���BE�����:i�71F�\\�t�Ҏr��m3��V�d�ז�v��c/\r���Gd_�5V��A�t�O�A?B\r�Lt�>�%�ʼ\$2��̘�*��j��Z]	a.��ה�>��} �C�.٧oI�\r*o��v��wOx�H��&F��w�Y�AzB����G}�0�cTI	��Q�eG%jT��TZ�.(��/A�|�]+�\$��_��6y̹�_�+9���#����X~��g��V��؈r\r�x<��G�'Իʎl�\0�7f��XHQ}He��,K	T�9*�LK�.[�D���>\r��'�i���(�)\"� f���\0000� b��(l��F�.��jr�n��bJ�.�BDk���b�b\r�%��b��q��Db0�PPx���8eRDi��0�Pv+*��F�����k��\$��lP=��j������М0ɶ�\0��pP��4(���p�D��.��NqP�\$H���&1����48\n��#�FU,�����)������ �\r\"e/�ˏк�I�\0��(�h�Ep(�f��o���	�;�	������#��|����9\0�{\"�/d귆���>�B�+v��|�B,V0P�m�H1�e*ZoeB���1\r(�� RLi���U�ʋ`��.����q��n.�d���T7Q���W\0R�ДF�eq�N�1P��~b�*��t��A�r�p���D0���)�SNZ6C� � \nbHI��!g�W0~+MG�,����Y*�HP�H(l�m������׎�<�Jv�]&(���\n-�� ����j��c��2�6`�)r��ХJr��)��u@���\r����J�f�c+��u&VS�2�ror�)R�+@|9��K2�/2�.�0��� �)�P*��ȆM^\rb�0\0�Y\"�\"�Ux��ـ������Q�1\r ~Q@3��43F�Jf�R@Q3�d��5�b\0�@�F�N/�6�	73w7�<@����l2\$ST���\n�RU�2�2Nɫ5�D\r�4��?2��\n\0�\n`�``��� Y1��ob�2��;#\$�I; �뢒�@N�\"B2�Z\n��m���%���������Zx�[1�@,��;�>��>��?#�6C�\0[C�PH�ZĲ�Z�J�[;�9CP�úB�P1����/#vf4`\$Tf2@1�0�\$X\r� a�zjD�;��I�P�\$�{%�1���謊�1o�\"RSJ��K��4�tz��\0�E�>,E��<@WL�N��6\n�&3�R�di\0.r ��Ԋƭ`Q\0003&P��\0001�NXD���b�������\"�ܩ�UQS\rp�����D�K�L̟�\$N��1�f���`�0�U�H���л����ou*+1K�ESW�.��F���E��M����i�&��'T���\rY5��\rO��;\$\"�c������b��R`m��������r�QIieI��hى����Qj� d�'�\"��\n�DYR'T1I���cd����a�Bju��0�G��	�F\$���E�U�p�6LZT��?��\$6Ub#�N��dr��Lp�c+r�er�L6V��.�d h�e�>	���2̸5\0bϤ�Ս\\�\0_Z�^�Y�\rj+�]�����9WgB�b���\0`#�f.�s'6(J���\rf�q	m\n��(l5�,�u�l\$�p+�\\c\nL�����r�,�\r�P8���V�\$ �R/���.1�W��d�F\$�\\��@��0\"�t��W\"67&��hqBavdÀ�I*\$#�w��v��9�`*v9wVX\$V��ebk<�VW@����6�\$F�pDoh�(�eW2KL\0P���+�3�LRt&W\0�\n@�� �N�.���\"#>(��GT�G�]>�jW��r�d�M�3Nb0�of����V\"(�\nM�d�/�!~�3p�v5�XE��8;>�> ׅ�f8f6���opNUv\nBD�>w/7��_r�67�<L�q�s�X�_d�|k��lτ�n�� �	��8.D*�P X��q�x���~k�!�8���Z#��Xʿ�'Y�β�8*(���\"L',��-\$�-�ĿT_!WȿW�^��k���u�;�ʮf�����V(��T�遐&���lN`zN�mj\nm��z������ߔ�*B����j��y������V՘z�M2�B�@��xԿV�܆�� V�����\$��W����Wjd�x�bY%z\"��q�B/#�C^���B\n칔V���O���b�o���#\0����V����8&>7a�,�F���^�'�\"Z�K*6U����g�c���W!��/!V�V��V&}\"qg��S���2�v���\n�F��~�. (f+U�>,�����c��4F7�~�~��&Y�'6��T�x<⧦�t����l�c\n��*&��(�L/cA%2�����4�S�l��ziY)��H\"Z�*�.�1����Gq����X-\$�z�1�W}��}��\r���ׁ�D�=��\ṋSD�{,\r�0рEE���(�\$�:�z�e9#�`{�{:Ջ+�`ˁ�Oq��q�h~�ڿ���k��n��J��%D�oB�4ٮ�y�`��Z}��S�)4(��� U9��9�'F��ڠZ����(���m���");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$j;return$j;}function
adminer(){global$c;return$c;}function
idf_unescape($v){$tc=substr($v,-1);return
str_replace($tc.$tc,$tc,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($qd,$Fb=false){if(get_magic_quotes_gpc()){while(list($z,$X)=each($qd)){foreach($X
as$nc=>$W){unset($qd[$z][$nc]);if(is_array($W)){$qd[$z][stripslashes($nc)]=$W;$qd[]=&$qd[$z][stripslashes($nc)];}else$qd[$z][stripslashes($nc)]=($Fb?$W:stripslashes($W));}}}}function
bracket_escape($v,$va=false){static$je=array(':'=>':1',']'=>':2','['=>':3');return
strtr($v,($va?array_flip($je):$je));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($D,$Y,$Fa,$rc="",$Tc="",$mc=false){static$u=0;$u++;$J="<input type='checkbox' name='$D' value='".h($Y)."'".($Fa?" checked":"").($Tc?' onclick="'.h($Tc).'"':'').($mc?" class='jsonly'":"")." id='checkbox-$u'>";return($rc!=""?"<label for='checkbox-$u'>$J".h($rc)."</label>":$J);}function
optionlist($Yc,$Hd=null,$Ae=false){$J="";foreach($Yc
as$nc=>$W){$Zc=array($nc=>$W);if(is_array($W)){$J.='<optgroup label="'.h($nc).'">';$Zc=$W;}foreach($Zc
as$z=>$X)$J.='<option'.($Ae||is_string($z)?' value="'.h($z).'"':'').(($Ae||is_string($z)?(string)$z:$X)===$Hd?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($D,$Yc,$Y="",$Sc=true){if($Sc)return"<select name='".h($D)."'".(is_string($Sc)?' onchange="'.h($Sc).'"':"").">".optionlist($Yc,$Y)."</select>";$J="";foreach($Yc
as$z=>$X)$J.="<label><input type='radio' name='".h($D)."' value='".h($z)."'".($z==$Y?" checked":"").">".h($X)."</label>";return$J;}function
confirm($Qa=""){return" onclick=\"return confirm('".lang(0).($Qa?" (' + $Qa + ')":"")."');\"";}function
print_fieldset($u,$vc,$Fe=false,$Tc=""){echo"<fieldset><legend><a href='#fieldset-$u' onclick=\"".h($Tc)."return !toggle('fieldset-$u');\">$vc</a></legend><div id='fieldset-$u'".($Fe?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($J=' class="odd"'){static$t=0;if(!$J)$t=-1;return($t++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($z,$X=null){static$Gb=true;if($Gb)echo"{";if($z!=""){echo($Gb?"":",")."\n\t\"".addcslashes($z,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Gb=false;}else{echo"\n}\n";$Gb=true;}}function
ini_bool($ic){$X=ini_get($ic);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$j;return$j->quote($P);}function
get_vals($H,$g=0){global$j;$J=array();$I=$j->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$g];}return$J;}function
get_key_vals($H,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$I=$k->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$k=null,$o="<p class='error'>"){global$j;$Pa=(is_object($k)?$k:$j);$J=array();$I=$Pa->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($k)&&$o&&defined("PAGE_HEADER"))echo$o.error()."\n";return$J;}function
unique_array($K,$x){foreach($x
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$J=array();foreach($w["columns"]as$z){if(!isset($K[$z]))continue
2;$J[$z]=$K[$z];}return$J;}}$J=array();foreach($K
as$z=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$z))$J[$z]=$X;}return$J;}function
where($Z,$q=array()){global$y;$J=array();$Rb='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$Z["where"]as$z=>$X){$z=bracket_escape($z,1);$J[]=(preg_match($Rb,$z)?$z:idf_escape($z)).(($y=="sql"&&ereg('\\.',$X))||$y=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".unconvert_field($q[$z],exact_value($X)));}foreach((array)$Z["null"]as$z)$J[]=idf_escape($z)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$q=array()){parse_str($X,$Ea);remove_slashes(array(&$Ea));return
where($Ea,$q);}function
where_link($t,$g,$Y,$Vc="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($g)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$Vc:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
cookie($D,$Y){global$aa;$gd=array($D,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$gd[]=true;return
call_user_func_array('setcookie',$gd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($z){return$_SESSION[$z][DRIVER][SERVER][$_GET["username"]];}function
set_session($z,$X){$_SESSION[$z][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($db,$N,$V,$n=null){global$eb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($eb))."|username|".($n!==null?"db|":"").session_name()),$B);return"$B[1]?".(sid()?SID."&":"").($db!="server"||$N!=""?urlencode($db)."=".urlencode($N)."&":"")."username=".urlencode($V).($n!=""?"&db=".urlencode($n):"").($B[2]?"&$B[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($yc,$Hc=null){if($Hc!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($yc!==null?$yc:$_SERVER["REQUEST_URI"]))][]=$Hc;}if($yc!==null){if($yc=="")$yc=".";header("Location: $yc");exit;}}function
query_redirect($H,$yc,$Hc,$vd=true,$xb=true,$Ab=false){global$j,$o,$c;if($xb)$Ab=!$j->query($H);$Nd="";if($H)$Nd=$c->messageQuery("$H;");if($Ab){$o=error().$Nd;return
false;}if($vd)redirect($yc,$Hc.$Nd);return
true;}function
queries($H=null){global$j;static$td=array();if($H===null)return
implode(";\n",$td);$td[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H);return$j->query($H);}function
apply_queries($H,$S,$tb='table'){foreach($S
as$Q){if(!queries("$H ".$tb($Q)))return
false;}return
true;}function
queries_redirect($yc,$Hc,$vd){return
query_redirect(queries(),$yc,$Hc,$vd,false,!$vd);}function
remove_from_uri($fd=""){return
substr(preg_replace("~(?<=[?&])($fd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Ua){return" ".($F==$Ua?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F":"")).'">'.($F+1)."</a>");}function
get_file($z,$Va=false){$Cb=$_FILES[$z];if(!$Cb||$Cb["error"])return$Cb["error"];$J=file_get_contents($Va&&ereg('\\.gz$',$Cb["name"])?"compress.zlib://$Cb[tmp_name]":($Va&&ereg('\\.bz2$',$Cb["name"])?"compress.bzip2://$Cb[tmp_name]":$Cb["tmp_name"]));if($Va){$Od=substr($J,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Od,$wd))$J=iconv("utf-16","utf-8",$J);elseif($Od=="\xEF\xBB\xBF")$J=substr($J,3);}return$J;}function
upload_error($o){$Ec=($o==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($o?lang(1).($Ec?" ".lang(2,$Ec):""):lang(3));}function
repeat_pattern($id,$wc){return
str_repeat("$id{0,65535}",$wc/65535)."$id{0,".($wc%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$wc=80,$Ud=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$wc).")($)?)u",$P,$B))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$wc).")($)?)",$P,$B);return
h($B[1]).$Ud.(isset($B[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($qd,$ec=array()){while(list($z,$X)=each($qd)){if(is_array($X)){foreach($X
as$nc=>$W)$qd[$z."[$nc]"]=$W;}elseif(!in_array($z,$ec))echo'<input type="hidden" name="'.h($z).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$c;$J=array();foreach($c->foreignKeys($Q)as$r){foreach($r["source"]as$X)$J[$X][]=$r;}return$J;}function
enum_input($U,$sa,$p,$Y,$ob=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Bc);$J=($ob!==null?"<label><input type='$U'$sa value='$ob'".((is_array($Y)?in_array($ob,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($Bc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$J.=" <label><input type='$U'$sa value='".($t+1)."'".($Fa?' checked':'').'>'.h($c->editVal($X,$p)).'</label>';}return$J;}function
input($p,$Y,$s){global$j,$qe,$c,$y;$D=h(bracket_escape($p["field"]));echo"<td class='function'>";$zd=($y=="mssql"&&$p["auto_increment"]);if($zd&&!$_POST["save"])$s=null;$Sb=(isset($_GET["select"])||$zd?array("orig"=>lang(5)):array())+$c->editFunctions($p);$sa=" name='fields[$D]'";if($p["type"]=="enum")echo
nbsp($Sb[""])."<td>".$c->editInput($_GET["edit"],$p,$sa,$Y);else{$Gb=0;foreach($Sb
as$z=>$X){if($z===""||!$X)break;$Gb++;}$Sc=($Gb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($p["field"])))."]']; if ($Gb > f.selectedIndex) f.selectedIndex = $Gb;\"":"");$sa.=$Sc;echo(count($Sb)>1?html_select("function[$D]",$Sb,$s===null||in_array($s,$Sb)||isset($Sb[$s])?$s:"","functionChange(this);"):nbsp(reset($Sb))).'<td>';$kc=$c->editInput($_GET["edit"],$p,$sa,$Y);if($kc!="")echo$kc;elseif($p["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Bc);foreach($Bc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$D][$t]' value='".(1<<$t)."'".($Fa?' checked':'')."$Sc>".h($c->editVal($X,$p)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$D'$Sc>";elseif(($ae=ereg('text|lob',$p["type"]))||ereg("\n",$Y)){if($ae&&$y!="sqlite")$sa.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$sa.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$sa>".h($Y).'</textarea>';}else{$Gc=(!ereg('int',$p["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$p["length"],$B)?((ereg("binary",$p["type"])?2:1)*$B[1]+($B[3]?1:0)+($B[2]&&!$p["unsigned"]?1:0)):($qe[$p["type"]]?$qe[$p["type"]]+($p["unsigned"]?0:1):0));if($j->server_info>=5.6&&ereg('time',$p["type"]))$Gc+=7;echo"<input".(ereg('int',$p["type"])?" type='number'":"")." value='".h($Y)."'".($Gc?" maxlength='$Gc'":"").(ereg('char|binary',$p["type"])&&$Gc>20?" size='40'":"")."$sa>";}}}function
process_input($p){global$c;$v=bracket_escape($p["field"]);$s=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($p["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($p["auto_increment"]&&$Y=="")return
null;if($s=="orig")return($p["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($p["field"]):false);if($s=="NULL")return"NULL";if($p["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads")){$Cb=get_file("fields-$v");if(!is_string($Cb))return
false;return
q($Cb);}return$c->processInput($p,$Y,$s);}function
search_tables(){global$c,$j;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Nb=false;foreach(table_status()as$Q=>$R){$D=$c->tableName($R);if(isset($R["Engine"])&&$D!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$j->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Nb){echo"<ul>\n";$Nb=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$D</a>\n":"$D: <span class='error'>".error()."</span>\n");}}}echo($Nb?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($cc,$Lc=false){global$c;$J=$c->dumpHeaders($cc,$Lc);$dd=$_POST["output"];if($dd!="text")header("Content-Disposition: attachment; filename=".$c->dumpFilename($cc).".$J".($dd!="file"&&!ereg('[^0-9a-z]',$dd)?".$dd":""));session_write_close();return$J;}function
dump_csv($K){foreach($K
as$z=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$z]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($s,$g){return($s?($s=="unixepoch"?"DATETIME($g, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$g)"):$g);}function
password_file(){$bb=ini_get("upload_tmp_dir");if(!$bb){if(function_exists('sys_get_temp_dir'))$bb=sys_get_temp_dir();else{$Db=@tempnam("","");if(!$Db)return
false;$bb=dirname($Db);unlink($Db);}}$Db="$bb/adminer.key";$J=@file_get_contents($Db);if($J)return$J;$Pb=@fopen($Db,"w");if($Pb){$J=md5(uniqid(mt_rand(),true));fwrite($Pb,$J);fclose($Pb);}return$J;}function
is_mail($lb){$qa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$id="$qa+(\\.$qa+)*@($cb?\\.)+$cb";return
preg_match("(^$id(,\\s*$id)*\$)i",$lb);}function
is_url($P){$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cb?\\.)+$cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$B)?strtolower($B[1]):"");}function
is_shortable($p){return
ereg('char|text|lob|geometry|point|linestring|polygon',$p["type"]);}function
slow_query($H){global$c,$ie;$n=$c->database();if(support("kill")&&is_object($k=connect())&&($n==""||$k->select_db($n))){$qc=$k->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$ie,'&kill=',$qc,'\');
}, ',1000*$c->queryTimeout(),');
</script>
';}else$k=null;ob_flush();flush();$J=@get_key_vals($H,$k);if($k){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
lzw_decompress($_a){$ab=256;$Aa=8;$Ia=array();$_d=0;$Ad=0;for($t=0;$t<strlen($_a);$t++){$_d=($_d<<8)+ord($_a[$t]);$Ad+=8;if($Ad>=$Aa){$Ad-=$Aa;$Ia[]=$_d>>$Ad;$_d&=(1<<$Ad)-1;$ab++;if($ab>>$Aa)$Aa++;}}$Za=range("\0","\xFF");$J="";foreach($Ia
as$t=>$Ha){$kb=$Za[$Ha];if(!isset($kb))$kb=$Je.$Je[0];$J.=$kb;if($t)$Za[]=$Je.$kb[0];$Je=$kb;}return$J;}global$c,$j,$eb,$ib,$qb,$o,$Sb,$Vb,$aa,$jc,$y,$a,$sc,$Rc,$jd,$Rd,$ie,$le,$qe,$xe,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$gd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$gd[]=true;call_user_func_array('session_set_cookie_params',$gd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Fb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$sc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','id'=>'Bahasa Indonesia','ru'=>'Русский язык','uk'=>'Українська','sr'=>'Српски','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','bn'=>'বাংলা','ar'=>'العربية','fa'=>'فارسی',);function
get_lang(){global$a;return$a;}function
lang($v,$E=null){global$a,$le;$ke=($le[$v]?$le[$v]:$v);if(is_array($ke)){$ld=($E==1?0:($a=='cs'||$a=='sk'?($E&&$E<5?1:2):($a=='fr'?(!$E?0:1):($a=='pl'?($E%10>1&&$E%10<5&&$E/10%10!=1?1:2):($a=='sl'?($E%100==1?0:($E%100==2?1:($E%100==3||$E%100==4?2:3))):($a=='lt'?($E%10==1&&$E%100!=11?0:($E%10>1&&$E/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($E%10==1&&$E%100!=11?0:($E%10>1&&$E%10<5&&$E/10%10!=1?1:2)):1)))))));$ke=$ke[$ld];}$oa=func_get_args();array_shift($oa);$Mb=str_replace("%d","%s",$ke);if($Mb!=$ke)$oa[0]=number_format($E,0,".",lang(7));return
vsprintf($Mb,$oa);}function
switch_lang(){global$a,$sc;echo"<form action='' method='post'>\n<div id='lang'>",lang(8).": ".html_select("lang",$sc,$a,"this.form.submit();")," <input type='submit' value='".lang(9)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($sc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($sc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Bc,PREG_SET_ORDER);foreach($Bc
as$B)$ja[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ja);foreach($ja
as$z=>$sd){if(isset($sc[$z])){$a=$z;break;}$z=preg_replace('~-.*~','',$z);if(!isset($ja[$z])&&isset($sc[$z])){$a=$z;break;}}}$le=&$_SESSION["translations"];if($_SESSION["translations_version"]!=-1091545279){$le=array();$_SESSION["translations_version"]=-1091545279;}if(!$le){switch($a){case"en":$i="A9D�y�@s:�Gࢩ��b6@�����l7�L���i���D�	��m:�c�������`���s	Nd)A2̳�q�� 2ɎgI��p:AF��i�D��9ȅ��a��g:�L�Xa��P��m�[���7��CD\n�t2��f���u=��)GK\r��r��N:ܤŏ9���p�:I�3�Vϙ!V'*�8�t;�\r`�9��m��,�|`(�d4��X�;p\n(\\�{���o����m�G�tkfS���N	cf#�\0�y0��R�\nE�A��j\n)�uf3@*�<����*��v6� P�1�+��2�0c|��\0#M��:�CP�		,#���7sz���\n62\n@\r��2�(;�<�|b�'��2���\$J(�	@t&��Ц)�B��+�\"�(6��#�&:,��*8�� P���㔆��#��6\r(؆)�B2�7�l\\E���*�R�\r��3�H8�1�j�3�bD��l�G�\n%\n\\n�!Ȃ_K�L ��J2�.�.nʰ��BE8�s�@1���9����0UR��/���!�\n����(X�\r4�Bt��\n99\$\n�ʑ\$�2P�\r̳/)Z[j#��Ȝ)4�_Sګ��X�ÁB�ފJ��'�b�A3��������#���7`+�-��쏭�9Ua�t>��u�\0�F�ċU���_S�BN_Fٚ*8b�t�'Y�eUj��90\"D��642;����Ha�Y*��~�����cBn��Ը�!�Z�#yT���1���7�Dz���f�\\�gy�o�#0͕����H;�}��pfp!��`V1΃�xUh��6n��@7�0��\$OF��p�J�i��v���9�OOi��st�t˲�W0��9��H����bcfN±�F�N�w?�\r�@��l�?G��NJ�5.P4��y�z5��X����~�@#zd��X��w7��� `���b?a����6�1�\n�)?c2z�u5�)�V�xKG�b\r��Z��\0";break;case"cs":$i="O8�'c!�~\n'N�!���4�\r���@n0�L5	�(o:���!p(�a<M��a���B���a�\\����I��s��#��@j�	Nd))N�#��L��֑%��FIr�pb��u�x)���Y\"���u6�2Q\0(�a=M`����:�)���1�1WƓQ�-H�Q�B	��o���m<� ��j�pQWi;q�Ù��k:N�S/9� �&��0���	�̘2���ь�\n!f�)r�S��T��9��m䜍<��6��CI�G���u`�A�ro�C�&�dp����x�95/�ְ\"�8b�)��'3��1C[v��\0�0��L1\rC��=�lj�#s�79� l��`����2���2��x;:�*0����=�P�5�Ѩ�9�@P���\n\"	��旷O����k���У���̸7�\r���K���6d��\r��22ʒ��\"�<β��P��\$?>J���@�h�����>�+\nJ��{�\$Bh�\nb�2�h\\-�Uh�.�\$P��#e(#��v6�����8K�qz�\r�Zlb��#��&�p@3\$cj��!���,�Y��r`�����\"c���#]� �o��<�67+��-��^�ɒi*k�{O#�d9\\��X��O���Ȫb�`=�;^v���Ku3Ɨ�t���:�~����72s\"~:����fy#&���[����\n@�f��[0:�\0P�)-:A���r�R��)nY�&�3�`��_h�Xtk]�69��L�4���v�'��)���T0�\0�r��Ң�[۶0\rdU�2���4����/`���E�0I��\n�#���r��<q�l�C]�@0�z\0P�܊w`�w��s3&�Ȫ��rNdP�A��.I*�Z�z�P��s���nR�hrط.�J*��O�����5�do�NMEeA�ҿR<pC�qA��wl�Z�u�&��/������P\r}B�TLv���Ԍ��K!�G	Cj�A\r^��V��k��X�!2^p��x+�4㜵���\rǵ�'0@J�Q���A�M\nb���)'���'RJ'�آ�TU���,2C��dcL9'���[ˈuM�d�EJ�B9e�=���Y�/���^���\\\r���SNcH�B�N>=P�SU�xB�|��R�u�q#o�	R*��xmY�����<\rh��&��e�\rh��Տ��G�D\$T|��x� (\$�h��Q�9��\";�8ӀPT~�݌Q0�Q;ɑk�\0�";break;case"sk":$i="N0��FP�Sa��F��a��y��r4�\r�	��ab�E��i��i6��&�tB(v7���P��eb/�f�	����Q�@%9��p�T2\"e2��gC�Fp9J�FH�*i3�f��Szi0�(�C	��95�db\0Q(�z<��EcɊ?!S���6��NGJ5�C='f���i2���:]�Q4��YU���8�����T������FaNf�(�*�a�Di��\n)d7s�B�J�UҞc\0G2�ͦS�czZ�KM�b)��t�`M�]>�W8_�]ٿ4%G3L�\n��T�6*����i�0	̲j�#M8�ބ� @1 ��\n����\r������P��Cs��pHE���<�	�Ґ�P�23#zr��O��<�\0��<�P�5�kDf87Q�\"��h�BxȞ3\r�X��C(�펋�\"_?��£CCm-'��\0!&!+8�)�z���,�+��p:\r�L�-�s�a>����Tb���L�1�e@2���O��	�ht)�`P�\r�p�9V��,��AB�0�V�����7�c���I��\"r���\r�Zfb��#��b�o:�3!�h��(h�5I�[pR������c�@�;� �:�o��7�ט�2�crh���� 1)�^��m��9�w���V�����p*j20�0Aq��\nF'Y-^�?.6K&��J,�,�:҉�l0������Q\n�ᕴ�BՑ�h�����u���\n\n@R�З�2���l�+\$�JV7:n�:i��e���[j�C��^�f@9��:���eml&σ^؊x�*�B�n�\r�mq�\0A�ݨ���oz�4\"�R��_�2�:���ƍ7��:5;N��L�.������|'	`��/׎���=j	W}ڌ*Gn�&�>P����˰6��^��F,�a\0���V4˦C;�f���oC��жKjd���H*�)�\\�]H�d��y��݅\n�o�R�w��I>�=��@��RC�B&�2�Ԡv�<�b\$�IC;����\n��z%��Bv�]yQj`淠��SK\\N��z\"E���z+G�A(E\rdFeq&%��T� �-��0�\"P�\\qYN��[��Cc�H�b0F�B�W������^A�h�8+3�JGM�adl���FF�\\\r�ͦ���ވ�21���wIPnB`(��Ğ�PL\r失yC(аm!�աD,�Vj g-(��'�e�Q�?I��I�^�Y\\�H\"����Hm�����n����-����#9p7�JZ`��I6[p��";break;case"nl":$i="W2�N�������)�~\n'����9��i5�#)��a7C,�l7�L�Sp�M0�\r&ө�Fo2�M�!�7��Nfs���t�\r'1\0��B��	������d��3���#I��n��Dx�?6W堩qP�a�[G#���k2�ﱡ��� �͑Z���x����1�4�Q��g���2e�+�6�e�����+��N�~�,'�\\u�0d!q�Q\n�a4��Z̰�\n'@������m�Y��db=�\"�\r'K���9��sh(�a1��z1ˀI7J��,\\�3�܊�c�'*��\$�hJ�C�H���\$�-��7�A j���@�B�p�\r�솯\0P�����R�6c�� �c�&	q؊��B�+\$��9:c���\n�r�8�Rv�\n�j�E0�� HL4���il(�Kr�6)�X�=L\n�7�P�\$Bh�\nb�2�\0��cU5�P��O����`����\r���!�T��<C8@!�b����pA*�#��:�H23,i�.��x��R]C��JX壩��3��p���H�@��U�*�GQ[^�����㝒�M(jP٥��Y�u�o�k:F��˚#N,�b(���,WF��e~ǲ*�g\"��J(	��9̛6����V�\npR�&	�h�@M��W��>��5P4(��\nx�*�\"x0ۗ[�������M�I{-(8ґe��k\0MY\"(6\np@1�mP�V'��\\\$����ߵ���\"��kC(ۥ<�|�b3K��� �7#z\n47,6 �3��cȓh)(�4)i�1+�p�8vS��{�%uj9�7�i{֛��Ĩ����dB��\0��pfĦk�.��B,6cZ.�V�u~;�탯��Ve˺�t+�JD��ex�8F�v;w�������22&�#�ދfTz�It�dl#5��8�-�����F��\r�h? ���6%o)����+�\rA�x�0���8\nXA���Rx�%K,��V�]A\"m�t���m��m#��J��rI8iohP���17%��&�Q1W�嗰�p\\9AJ���m�d%�";break;case"es":$i="E9�j��g:����Q8� 2��y��b6D�lP�t0����v7��EC	���X�Ͱ3�rd�I\$҈�HJs!J�'),�n��f�,��i7�k�@(�r4��d6�K:M�	`�s�D�!��.NrQB� 3e#�@u7D���<XM�cy�\" �Ш��y�J4�%ECLR%83T\r&H|z l��βt6�m2`�1�K�<�\rs(�a�`AD*�`�\n)L��9��e:�j��33 ّm�J��U���9�a�7֍��Y��!�g//�u2�95�(��\0�<� L@��<�J�H�� g�-���cI�Y�m �� ���,K��6�#� �p�6�����9B*\\4�� ��Cs����# ��;���;\r+�2��B�&8	L\r\0�p�JrkH�Cv�B@�	�ht)�`P�2�h��c�0��P���T+3-X�4�O��,M�6: P��ɍ\$h*\r�Z�b��##rZA��p@+?`��2�\\��\r��0�,��ʸ�:��2T)��.��#\nUT�\"�\$C@�1GK�ðȒ�1��E�@�4��xX�����N�(�4�>,0�0�s�%Kb�:\r-�0�,m:;S��T�7Cr�1V��!\rd°�\"�j1‐( �z<�=�P��)��-��(��\nk|0���@��)�]����\\861E�/��E-�\\K��:�C!0\nx�*U�d�\"ҨA �	�D䌃��{��\"Z��!���ۍ��S�kB�>�t9��Oۮ�4��P�>�\r�m�*���7������Tc�\r7�i�3\nb�!?��*�3�u�\nB&�I���ǻ�����âL�,��T#��|i�\$=�@������gi>��w��66F��F�P�Ɛ;����͵p��7�1��1��|荁X�A�x��!k�=Z�	.�5jU��7�q���\\9#�]*�(D��#\$Y�e��;�7����W\"]	�sgH|4�4vrL4AAUz>�4�Ȁn�+��AG 䈛�		^�UX����|A@���zT�a6OA��0��pYW]��޿���O6@)!�ԏ�#(�!�נ�C�F�%�,��_a��U�^	2XY�뙊gig#���";break;case"de":$i="S4����@s4��S��~\n\$�F�	��n��!��e4��SA��e9��2sp�M0�\r&�	�A�LQ�v>i3��kc��i9�S�\n]>�M�T�L2�n����a�\n'���(� 7A����]���\0����a�AD(���z:����I�yh��\"�چ�p���u���Ǫ&Z�Ҫr�JM�u�+�b�h~xT���E��e>:�D�X�� :l��q�ˆ��,5!�N㞎��X(�e7�x�+�2�7��L)����W�)���&��W����+0�@�'���9����b�0@A#�<�\0P�7�A l��8����-�b�1(\0�2-/\n����#[<��J�0˨J4���jh4��P�/���2��2 ��1�^%���49�� �M�<0p�!2 @�\$����j1�c`�3�SJ/�`P��\"@�	�ht)�`R�6����E�B�h1;Cb,��S8�9��cl���R����)�B0@*\r�\0@���:��{\n�<�0��\r��)�I�䴯Ӥ�0%��\"2U���7��Z�� �Xč���Č1��;5�:�h0���9�����ȗ��c'Y����`�#u��B�W3�8@ ��r,�#u�9&��Z�,�\n\"�N�\n�Zh����2��1T\0��㒓)��\0@(	�[�bY*\n`R;���4^�����	�d�&��̝��\0�ڦ�荁@����HR��%�����hd�[!k��'�b��!\0(#z�X�C-�=3�J\n�g�:��(��{P�J\n�k��&yI����f��z%�m`�:��S2�@��зo�T�r��/,�|�βCD�:��<�d\"�c�t�%���:��BB��mȃ,��}V8\\����Nc�خ���_�����([\0-���o\n����ǳ�9�R����t�)ʢ(�:\$u�e-\0��&�l��j�i(6�։�[f7(<2���Ɉ�spƀ���+4\r��������5\0�;�L���*�K�v�ǈikD�t�BLJ	RUt��>�z@�Sm\"�(��PF��;���a[��*�	h*�ؘ\n+����*@L�\"���g�P9��7;2.��:Ġ0��BI�XBA,6�dC�)3�0��7d#�DD-Īr�[��\n�R@�9���y�j�";break;case"fr":$i="�E�1i��u9�fS���i7�I��o9��&#a�@d�b��l0A�&3A�.\"q��(6�O#������L��	Nd)�2=*�K�B\n0� t9A���`v4��RCI�!=N�3��=���	��u2���I�����Y�t� :�\r��1�Om�O览�4o�)T�}\n�T���S���@��Nf��\n'ͦ#�D�G��sFj\n!�,5u��\n!Y�;^9I����N��??eϬK�7���2u��ޫs�M�y���a��mGM��P�s�O�,�܆'+s켶#��2���69�h��A(�\r�:0�1\r7n8��\r�x�xH�A�)�b5�rB�����\\�B��;ck��CO��\npdb:88�����)��Sv�2�{j׊I�T!hH�7��7 �_BH��3�ɛ�窓@�<��t;ͭ\\���\n<�TγK�9�	��7.�`�\$Bh�\nb�5\rAx�6����O�\"�n�l�ܝ�b̨7��:���3��\r�Đ�Ao@�7�p�@!�b���M	�¯���8�Y��RN���h�6!�`�\r�����h@0Ȱ]\\�/�̍DV�t2���Y��sr��2s�����e\0A�C+�m�/���/�H4 ��`\"���.�����#��ط)�+��\"��(��8\"�mf��\nPS����9��r6���;d�#��wk\r�B�\"�+D���z3<�7%�úC<%�l�oY*\0�'�b�h��\0�9.��\\9�H��/�=��!�fJ��\n�kXͻ�h�]�)H����(ܕ.�f\"���P����|#�\\�qR:N�va���c̕0�S���?:\r�{t�gQ�u�O]�P���-t�Wg -Y�C��p�;���Ot~�#��h7���ܦ�j�h\0T�ڬ���\rÖ�ݡT\n �*n{���R�����L8+)b��*�]9�V�۰vL=/\n��]K�>�\0�9�x��P��!���\n��%�ò�d�=7ǹ'rg`a/B�\\ņvI]�8w�y=�r�q��PeZ32`EH��+�)ߺ����r�&o���T`\"�+%�աD`���<�-��8|��V*@�8x�I�Xt P��>�yy'�ɟ%�~xa<%ؘ��I��0�C`�a��K<�<�X�K�a��0�H���P��b�Q��3*��ӎy	���+� \\W@";break;case"it":$i="S4�Χ#x�C0��&i��t7��S`��i6D�y�A\n:��f���L0č0�q���L'9t�%�F#L5@�Js!I�1X�f7e�3��Lv:��\0�|(�i7c �tD�a1E#2i12�g:�AES���):�f��5*�-���3�\n�:���\n�\rA&*N��^�t�V��s�ޛ\\:�a@�!��IUmE3�(�g4AD*�\$�\n)r�s)��4ڬ��Q�\$���ڢ���w��D�; c0��:�a��8NS#w;TN���1C,��%2G�h'���R�G��p\$�ă?���:\n��7#�T'�M����i#T �I�)���\"���0�-Bx�3�J����CJD׈+��3��|F;7 S�2�#\n0+�<0��s�CH�rܩ�0��x\$	К&�B��� ^6��x�<˃Ⱥ�8+D�H�4�C�R2E�P���n���B��5��\0�)�B2�����2\r�p@��iHؔ�C�4������(�3D+K>1���1�jP�B����Q/,`��#�\rN9#K0�3�t�:aE#��X.j��IrT��5 �X\"cs�AO�3�i4»�����;�Oa���5�H��[+�@(	�t:�����aB~�C��I��^+۠6�t0��\"��XX˜��I��7�(�[i77X�)��0�A�xc\"�48k͈ZUX��cӃr.�N�s�L�����kZ��/+���0�^9+:\0��hi�q!Z\0�7��'\\K��I#x�\rR5V�T`���@������~ԯ�K&�P;�ٗ�Y� 7-;�����2G����K%ipl���,��\"9��+	��!�(�!T�'�r�3��|� �Ѵ�ҍ�X�3�c]��ZJҪ�;#�@6�N����#߭�%�Ǿ8��sP�zVТ3#H���Snr)\nF��^��ʜ2f��5�|p���wm�xHXA�����)v\"+Mݒc�u�PuM���Y�<=/�6���b>r/@��A��^�(!�T.��X\n	/I�4\0��+k,�:�7�ly�MM��eH�";break;case"et":$i="K0���a�� 5�M�C)�~\n#M&�H�����͆	��m�D\$���Z��1CX�M0��r�Y�Df�EgS�����R�N*e��M'C��\\t��\r �y��g�G\r�����\r�A�\nU2�\n�fXm�u:AE	Y����b��A��2���C)��A�ND���� 2̍8keX�.�N�&�\rAy1L��q��b�N�֩����2��x�\\66a2��6�B��N@����k\n&�C�T�)̦�m��V�2gM�J\r1:Um٣p���F� (�o�&g3��J�ޤ�V�=̛h4�CS���r���C�\n\r�x�pHCA�'���;#@ʿ\$�()�� ʫ.cL�\n��b��� \"��#�6�h蹌�Z\nl�\n���ܟ�b�82.R�;��D�A�\rȺ.щ@t&��Ц)�Jp�c��<��s���� ��8���'��|6:�\\^;E�X�Ѝ���b��#������3�ʨ�'�Xҗ8��86N��D�\rɳ��\n���:8H�\"�ѫ#G,���4֨��벛J���;ӕ\0�Q>L���p֪�L�B�����J��/�K20t0�D*�SU��#����\0@(	��u�r[���)r`�Q��L��r��w�h*��ݜ���X�h���)��m��Tj�c,��V�c�*�\r��A<��^6�dmf�\"�n5�^C@������0k��U\"ŭ[%�\0P�i��eYW)��1-��P��^W��v�J�]���\0���\\,��x�0�*��ò' O\r@8J� @:*\\\n���)]�J�t�ǳ�[�?���G��ǯ\\�u�5��U5�|�&�f',��3E.��#_��9/5�7���6cZY��#b\\\$�� �;���J�r�����V�&̃���6��Ż��%	C\r�GR��2�w����}��&�\r�J\\&�0�E�a�oĨ�'b:B���#����'\n\\�k�F��uĲS+�}E�T�܎ɓ�#�)�B\"��	�>\n=���v��^-�H�R^�HC<! ";break;case"hu":$i="B4�����e7���Q8�m�C|@�e6kh� � 0��5	�2.D�	��m�\r0Y��0T���A\0�\nB�J��a* la�N�SѤ�(a�'G0Q�td��a��q�P���@�y��D�	��n������Ba�3�)��K9���Ҥ�t�Ȥ�JE*�N�����CHY��JӁ֨S=I\r��\$�%��M&F*D�����pT,r���,5���t̱Y���\n&LΜ}X׃�kAY#fRݖ��Q�v�k��5 �)��=�-)��5Di4�`(Jd�b΀���J����-\n��7�A l���BZ���pB9\r{�)��Đ�Cr�а�P���&���d6'p��;&+����jX4����2;¢H9�˾�C�!�m�4�#t�%�#d���,t0ǁ05ʣ#d?�ĵ����0���2��ܻ/�36��x�C��\r��<ЃȺ\r�p�1�J*#��6\"�R3%9��e%dM4��O�b��#\$���fZ�apA*M�#�a�CP份Qh䱎{שК�<-K6��p�0��Bv2�hP��9�5Z���,�6-�d9�d�!#Hʔ	�m�h�I�`5Hc�X0W`��=H8A\\WK#�OF�MB�Tq����j��0L#�'+���\"�JL0����C<�p�\n@�t/�*�56�|��TJR���zb��jcZ��v:��c%d'6(��h����j'a���HE��9���B(	☨���CRU����à��/V�'	�}�Î.�_�/�0ʘ�zHñ;�0��b9;%\\4�37�[W�����M(<�M`�˞�b8֙~�p�4d�����P,��@�\\�8@87�xٰh����¥�#Fx�Wx&�*��m9�b�9·��CC˗�����W-��́Rƪ����*◓̟S����rv�N_���@��+d�1�uVH�a\r��2��V� i���PZ�r���`�\"bݟ���0n�\0��#%��bD�\"�tlCq\$%��`��� @(���B�R<�1���[�1o�!=w�ݗ�o4\"�ô�Fǌ*�&̊94nI�z%i��P�@�b�g 7��mduihv�3��)�2Ng\$��*�����o��	fa���!(\n	0q�g�V31�d��և�s唅��ܥ�����G�jC(";break;case"pl":$i="C=D�)��eb��)��e7�Es9��n��͆�Y�@b<�PF�`�m7�W����\\\n&�Mg3ɴ�l7D�)��)M���x�\$��R�l�%��`�h\$��u�AF#)�@z6�b�Z�t0�\r��\0(��L�Mq3Ɋr=�#y��peG��d7L�J���~2�!AЂ�L�@�K�H�T�����6y:O��Y�N:�r'��\n\"m���s�ftym��99m�p�(�e7쎇+(��<���MA��\n*��&�\\pH�ȍ����g:��3M��a8l7G�悍O��� C����PJ2#��:0\\�0�1Aá�Y��Rй��PH� i� P�=�h�� ��bx��n�����J�:H\0�7\r��8\r�jT����65��0��\\*\$��p7�q{ڑ�+j�\r+�����9�H���h�'��L�6Ss-8NRz];Msl�=������:,��@t&��Ц)�C \\6����M�B��6=��\$�)PA)��c�2)k�'!�,��P�(�Z b��#�\0�YCc��3�\n3;�h�6+�7ȯ+C5TX�=IjBM�z_5&�:.� �0@7�S��s>p\0ҝ���(%�\0�V�4�0�����?ϩ3iک2_X���4֩[S��(Al���ė���@�2�0��ܤī���ǏL�Zb������	RX�@3h4ZsŖ�Ϟ\r����\r��@)!J��]#�N�����ĩ��־6��H�&i�n7L8��ڌL\0�\r�a\0��.	��˯L��A�I�23i%Q��\"�ڪ/�X�\0�*:���x6���;����&����0��\"��5sL�旊P8�Z�JA0#��?��Q�u�rE�\rq�n4��ޓۧ�Z���]��.\"����Gq~:���(�\r������ֶa�Ю��5^h;�-S+�8*J���i/����|��!��;�q��oZ]\$������vB��f������N��������v�&\n\0��ø{�!�0�\n�YN#�m�'PD;-\$	�����/�/Y�g^���H��e�f>���Ċ\$�0��#N��=�zZT@���\"8^FC�S�'ѵ.�,�k�e/���W��@Q6\r����3��V��+G�^:6���6|k��x*}J'kFÔTt֡�u�}2�sjj��!�NK��v��ti� �2\"4�B�Qս��˳.'e�5��6�p)��\"�8��L[��п\"�Nذw��5�vy#�h4E�����	ԧ��u�p�";break;case"ca":$i="E9�j���e3�NC�Q\$�p7��f��� 0�\rGSq��rM�1��x2����a�@m4�%����m�%&�)�\\d�I\$҉\rS��2��#���\"q�C6��M'�Y��&�F�9��a6��cA�@h��'x�l0�Ő�!��8N��d��a��X)��u�<)����)1h)��t2��f�(�N�P�f�vx�Y��ʆ��356	�X���1���!�< �,X�gC�!Y����|�#�o�S��L��N`�-��bߛs[����\n!�;�9��\$��&3L���'���Y�0��	��\r��ߎ�\n,�#�PJ2��0�3\r�cˆ��A j���P�	J�%Ëx6 �ޑ��`�1�Bx�,�a�V�x�1��\n�I���N\"���a�O�x\"�P���{@��IJ�<K��8�4��7���	����T01�R�%*����\"��0�Ӵ��OA�(����+RĴ���\$	К&�B��� ^6��x�0Ճ��'�����@�I͌�d�<cc��S���\n�x�Є�)�D���� \\X��2����\$�,Cj�ޥr��YA��G�U�V�q�.��hJ�&�B\nܶ�J�I��[\0_�D��M4:2/=��%�3���Al�//�� ?�B\n�ւcL9��<�4P<���J⹶�8��J(	�7�;���\nXR�5�􊌩]\r:���n�[j����@�=JJ䇴��1�P����bbz�ga\0�'�b�\r�)�\$���Ei�C(�:��v�]�j�ͮ������\0�;'�d��4ԒY��5����72���i�f�Q��'s�l�9#��E�����1Bڷ�k����.V,����;\"���(�ϱ����4�ڂ��%�\0!;��Q��Y�;���h8�a��sʬi�9Σh޾����s]%C���Tc�tduLf�GI�\r��1�P�F� q� �^��GN�����Tk�5�u����I�9�z;�zJ�q_�\0\$�r���v/\0)��H�M\n@A�Լ+��`�#�e��У��0�9�{n=�7����+���\"�X�XP/	�)4Ky,��4�.p�\$>��\"�\$:�!l\$<g�:�h�W��4t�B(x�G�:�����eY�0�V�\n��W�NQu\r��";break;case"pt":$i="E9�j��g:����Q9��7�j���s9�էc)�@e7�&��#\$8�M'cx�T0�L&�DD�<M�\$��)��bb)̅. ��R��2�`&Yq��z4��F��i7M��|~�t2�DC	�:a9˄\0�I��2Nr@QB� 3e�S�@u��5��Z�NtK�*�@��vcMN\\T4ŲfC)��i��c�)�]�C�F�,(�\n\"m����a�:K(�`��AE#.�G2���J�\0���mȷc�r�s�(v\0�����\"�����%��8�}3�_�BS ��<�\0K��@�<��r��xH�����hJ���IKj\r�xƱBx��/���4���S��\":2�j��9B(Z�\r+�2�����+BKڍ1��7*(�j��q���1�?&8il���&�\$R�*0���\$	К&�B��� ^6��x�0΃��J1��6F�H�K�P��EÒD�Ƃ��5�\0�)�B0@����%��.���̮\r��ؒ+*k꘤B\\���������թtv�-L�ؒ��s8lc�#\"ʼ�* �-�\"����n��X��Ύ1V��%˭R4���V�Ҕ�j�YcC6��Üd���E\\��c��c2A\0�\$\n�,9-��@(�J>��k��\r�Z:�\n#�f:U� @��)��C�kD�Q>0��5������/�T��*\\(	☩@7m\"eyJ�\0�ߍ�&Z����W\"+bd�\"#x�fM��k��(ˌ*��@1��sL�7�=��9h;��#��N���sﵦ�z�rʻ�����-'!���&�� �ƈu����彺��\\,�M�o\"#���O�=����-cC:����V�=�bKk�R��u��f��c��,2�N���,8L�Vͭ�2�'x�^�8.���t�4#���9���{���7��létǿ�'�+��]�~�&�`~�*�4KȎ���aO긘�F��wp���7՛Wm*�s�r����|�\\7�6�[�%}\n���~��+�a��N��L\r��p�'|n��>� B��GIP]Q=6�t��|;��4j�|	/т��a\\B�e4�@��m�4nm��44bWH�R��";break;case"sl":$i="S:D��ib#L&�H�N�M�Sh��a6ث�I�� 2N��	��.��MGc,\$�aK\r��Y��t�H��Y0����R�\$�K07@��)���(�OF�x*&i3�b��||�a1M��\0(�e=MES�N�iScI�X :�NV���I3�\r�IE5;(4J4�L����q��P��Ɠ�������&�*�t:�kBI��]���U�	�\n&�c{r9��m2�P��N�6�\n�Y��15��V�d� ��A[Ӝf�r4��B�h�{5E�~��o���N�%��G@O�@�\rJ����cL��o�<��z���\\��b	,��\ri�䚦`P����@&.��J\"�xܟ����B(Z6�-'��P�0��+�\n�kDﳃxܓ.(�B6\rK���4�r|�0�,o�`L��i���K2�F��Ң��n��-G\r�M34J�\"�3##�P=\$#P\$	К&�B���p�c�\$9����M�Г���`��DN�ݭH�d�/�F�J��)�pA)��:�Ș�:���@� K�ֽ��B���.r�9�9B��L�SZ����:���x�7�+��E��O��%l�.������ H=0��R��)/]�4�i;d��L*CP�Oz�+0t�Ȃ#���P1�`(	�@(!J,��C��(\r��T�%�0дn�/�J��<-����<������溍�����P\n�9�H*d�:�n��5��)����E����9�3�0�@�#�nY�����]�:��o��4�O\0�黫�����������3��#p��\n2.r>;I��#x�\rj{���2��m\\�8Z:\rH�W,P)�ۋ��nĬ��2��5[Ø���lE�!��c����o�O0�\no��շ[��p�Hꢋ�~�L~���\0���sd��{������m<{_���	@�p�`+\rd�5�b`��T&�i�.��d�3>=O䘹R<�@U�\"��B�����o�\r�8�Sl �����K��y?І�ոE�y\$Ex�#�\\yp	\0�.Av��b0�534t������u����b�\"�j*:�\$\n#����|�y�	�� �Ή�a�\"D����a!�(<�8�\n�,�@)���@^���+��%�����&60�ء�B�[\"�_'\\��H\0PT���\"HD�^I\0";break;case"lt":$i="T4��FH�N2�'cɬ� b+�fSa�� 3A\r��p(�a5��&�	��s�F��Cɐ�(��2t�0�\r�S)��/:M�v��P���(�r4��&�,��K���)��4�Vq�\0(�%1SI������-ƳM|@v4�X�Q�B 8+cu�g29ͧ����A��AEc	��o�؄hQ�S5�)T���t0�NU�&��\n*d:�y�e5u9~¦k6U��Sy�uP�g�p:DR2�\$z��'������b����yB�\"5M�{�Bs�;I�sO��#�Zν����P��(�-+�r�P\"3��D��<��x�7�A b���8�BHʤ!˂�9������*�&\$p3^+��5��\r�Z�\"��s\0000�\r��B\n�����b�������)��{<\$�	�ǧ)���p\\˅�Y�SY2��<�5�t�,H뤴�B@�	�ht)�`P�<�Ⱥ��hZ2�H��=Oc=G��.2(N3\nע�P�2�M�΃�Q�D��\"�)��މ��H@!#rX�.Ӣ,�)�hޔS�*����Vв��:%�ZP�ҏ[2�r�\$Lx�a1,�*��HT�5�1�7���_�/�؜���a�`�4�o�Q���E!<�{��W���l��R9T+�3���גF�Ӫ��p��´��cM���-Jv��\n����k��\n@��0D��Bf����9)�\$/�L�+�H��k4ǎ�`�3K�d���\n\\�G�������Id��8@(	☩d�#t�\nc�I�k���Oj��ֈ���!�m��!�p̨�(�����:]+����¿Gj�i�J2\$\0�!H��zI��9�v��5�<۟+�s=����<�B��:�BlB����d�����E��J�;9�|�.���~͘���9vZF��>��3��Wm�Jh�y�\n��ڐUM�܈��H�tSl��qo�ђ����h�6�ƾ�k�77��IC��2��a��K�t#����&EJ*}g4��NE�<\$�&CPGHA\$�\\�7�2�U�\\+�Q�\0��t���M�_�����v2��燒�i9O+H6�x�bJ�|�׺�j�pq}���Jr<k8Nw��\nn������S�*?��8S���)���¨\$t)I�����H�,����Ip)�\$��De��\"D�����5��5a�B�b���3�-��s8^�";break;case"tr":$i="E6�M�	�i=�DCy��a�kcq��r4��ɼ�.1�����`fHl<@b7�N�C����X��)��Js!H!�聴�v1��f\"~3 �1S���0�EC	��oGMr.2\n%�M��	�?OVӤ��<��-��L`�i�V���-�\\Β�%�t�Zmv���zta�Q��(�a<݌'*ތ�h�D3m��z3�d+\\d�\n �ADs)��tΓ\r'<^r�=J�G�I�o��eg\0����l��M5 Q\nU�4n�لY��t����/�\"_y��\n��}���pH@A�p9<�@�a������<��/2n��`P�<�Ck<2���Z8!���#�h�.�-x�:�CZ5��B(�4��@2�q* �F�@�2\r!s���(��Ǯ\$�̈�*CH�\"3t\"���9�B��1�\"�Z0�!h�3�F�\riø+%	�@S�Cc���z����=@�)�B0R\rO�\\:��\0��\r��5���뭉\0�0�Mq\"d�9��8.�\"p�	��:��X���k\0�6��֍��\\�V�h�3#�n�%��c2:�e/L�.ҥUU�5PHC+\r�J�\n�����cZ[�����\n@��IP蔯Ȳ'�\\A���)Jb�6\$	H������c0�=-�*��oYc�J�[W�e�j�k����>49<k�ܐM�x֗�#�3��x�*5(�\rhb#K��.s�p����|9�H}5�\"��b�/��3ϡ�ь9�n��d���Z\rr��*Ѵ�,��1��ZU)������ڡ9Sd%�@,���r�8#�S����:����Z�L��@�%o2SR��#t:2�-R,;5��ҿ]8�A�w|��<t5��S����M�oQ����[���x6����f�YN��+�T!�`V��X�f�=^O�:�12�!��,���`A���mDX��@W\n�`iܔ�d�J3b�lٮR����)���'���\$� ^�TF�Q�)��s\n`L�[�|<�`��pYgkɣ�O b�`�4R�͓�m/�㶐fⵆ����y�����\0��q�\\+Ř\0W˻N�̀���{�[Y&e[+�,_@";break;case"ro":$i="Ed&N����e1�Nc�Q8� 0�`�S�P@�W�lD��a�0I��u6AL����&��4̖O)6�O����m��)̟1 �d)\$�@n��gg3�rbg7�F��i7kL4q�@b0��IY��t��%�Sq�@t0����,�X\n&O-\0�\r��e�VM�9n	t��S��8t7�`��J�n�A(��6n ��(UU1*NH%�'6mY��4떎������<�֙	�LQ+���&;��8Y��QH��M�L �9��m2�+��\rSE2w��G?ni��뀢�j��+��0x��%c�L���*�,�\0����p�:��(�\r���P�<�\r P�2�`T,��\\qxbh�)+j��B���:�\n�:0�H�1���.L(\r�\n�ί���7��J6A�IX��s�:�P\nZ����J���[��.��!�\nBŮ�Rx�#�\$69�hS2���H������9�I\\C@+���4�.�~	@t&��Ц)�C �\r�h\\-�5H�.�Hj�IR��=@�c���4h)�B2�7�pp@�1cH����=N��*0�#:�.�9���&2S�?	[�2�C�J�O��K+�`�%	dP4�#V<j���tk��\r(�ڲP�꘡�C8�\"��t���`���ν�\0΃ڊ�}�.��ϱ�B�MðҼ�첄Ù6Qs��~�ϡB���8ӧ)�\$�#�)�yԳc��]����&�#R�0�M&���(	☩� �@@�Ё\0�F.�r�6q\$�-�X��z�3H��ӌr�D3���2�;�4���B(:��:Nv����9y*2��T�N��>]��5��Ģ�O9����_V�5�	���.��	�(0�@4)z�7�<��Îu�&8-�(�4(+�ľ[�_4ǿ�Z`.7\n���2��C�)��O:��c\n	�M@rΩ�0�����|I5��ᴢl_T2�QP%��K�\$�!���\n��a��3P�X�	LD��=(`J�H�94�6��x�Cch��k:�-堑\$lȩv%�ȵ�s�Y��{O��#�ؤB[>gy/�DJ�C�gP\\�6� �Z�@5B��W)�*�s�*�|	#�]��W�\n%��R|X<�Cp�=�ƈ`ʁM��\r����v ��A��P�bX|�\"��~�b\n?@�\r����]��K:�ı�X4oO��lL�";break;case"id":$i="A7\"Ʉ�i7����A8N�i��g:���@��e9�'1p(�e9�NQ���0���I�\"70#dp@%���'C�O!����4��e6�gSY��o����#I�a6B�3�>l�ѣ�3(��LAD�Q�� ��3�L�;):DSYΞn�O�im\$�u�Gl�RTZ� 8E���l\0�\"�Lsv|�@w�`AE3�r�B�HD�T\"7	#�M�]i�D0��� Q�C�����c�du.�N�9f1n)�{�ABS\$z�m<�F�x(H1��(��q��2\n���!\"`�6�k��CH�4�\rX�9���BC��5j��8'\0P�0����9.B\\O�o+\n\r�`�4\$prf���h\\��_\n�Q�����X�또	�ht)�`P�<ʃȺ��hZ2�P�\n��T���\r�kV�͐�7�h�@!�b��!����U��z��ڣ�J2A!Fӈ�0�-������P4����#H̒�t�20�C�YA���ǡ���4��\n�Ot���(�°�J���I\0�2��mv�\"�H�\$\n	�d㌔�d(J��!�x�aج��6����L,o��:f���3�6�B�>��B�\r#Zp�\$��\nx�*X#�{G��M?Bm13 h���;��3K�:���0ҌEJ�];��Ȑ��:�b.KL#�P��\r`O!�j�&5ӎ:,K#��1b���F�h@�3\n���=h:\r��3�P�ˬׅA�(H��]�5��\"�Չ��.ҾC�r��I���c�Z���+2��#BJ!��`V1���'An:��(7��0�<�,z16�\r���\"����\n7��DȥT���舨�	��+�˅��@m7i@�ʖڋ��:7U4����봄�H6��	�zv�D^��6�z�!��D�G�H���0\\Cc�H��/�M�4��`��?���P�m�0";break;case"ru":$i="�I4Qb�\r��h-Z(KA{��	�L�h,�����h�\r�e����d��E!�!\$˘܍{� a0�<�\0.�'\$˨�����.�0�As�F���R\"7����	4��\n@Lfq���@%9��\r;'�أSH��m��Z(�܁�B�V�����Kd[|b�N�\$�k�U��V M-��Ʋ��j� �+���F���,%��b���ґ��2�]�_e��2����s��Z[Z���E�Ic]Śkā{���Xu��������W��l���EsS�(���I(���X��n��h��B١�	t�?�낖��b���/\\���b\$I��\n�?PI�P�o�u��@�������k��؍�i+�\0>q�LO�ly {|�Ŧ�<��)�䐯1���M����H�~�J�*4�1M�J22i�\\��J�\0͓A��M�#(�\r�x�pH�A�%\"Bj+[+Ǆt淗�FÖ��j䧒�g\$j2���P��('��*�5�d:��#��1J<C�(��P�� ���:4�T\r��O����7��ǖ���t::��\"���<����{e&���9L��v��phZ�ճiۍ����3lS2����v[%���HE�zܑR^(\n-G\n�D�h�Ѡ���PP�H�h(�8\\-��B.�л���uSh6��6�'��!��`KR<,��b��#4|藡rG[��p��Q�A�hQh�*⤵�(\r���YFJ2�4��� ��*�!It�	0��p�&�ð&¥ƌ+� []b]nY�I�G8R�{:]��T�\\2��)oN���/-�Y��n��u�ٴ�71����*T���Ke#7KZ(Ϲ���:L�&�nr�T�r����r��ޚ=�����I�88�}��o�ͳ�B��o�<úy����B4�m��4�u	J��[������(xK��p��ِg��®)�h\n6bY�Ti�U\r�G��Qi=�P�9��lS@'�0�N�B�r(�/�cp2�2�[�\"�+.f�J�A�?J�Cp��2#%��d�K�Q\"����)�q�d�8(4�&\\����b�Łk�)�,�(pח�D_DJ5�u�Z��'_G�Qs4}�a#;V���+��)��\0�è \r�;P@�A\0pA�;��C:z�7�\0� a�X:���aR}��1\n����R�r\\���#�7/qM�â�Q�������w-������> K1I�|T�,��It�#�:eyzG\"콓v���v�J���py9N��K'b�k�O&��ߴb`�ؠ6Z[{(�=�=����%�9ȷ���OQ�yӾrG%�#X�c�����b���\0x�ƕ�H�E\$���NQ\"����:gI�\\*\\I���'t^�IZq�����h���K2�4E\"�OdSE5!�a�6j�� O��e&�*:t�(�9҇��3]J�n�T����^Ҡ���=\"�@0�Yş�H��!v�]64�d�RBt��ujA!07��CpgVr�\0�Ô��!�0���_�N4��ӡql�*\"QsLcx��	.\"J��W\n�7�k�VT��}p�o��ΥF~����H��x-vPU9FU�̘�WɄ� ";break;case"uk":$i="�I4�ɠ�h-`��&�K�M�9x�_4��\n��-�\\�z�AH�P)D@�BJ�1�tM9*]4P1輑v�FC#E�b�AΥ���^����(�%�A����d�9�@%9�3V��e�CV����IJY!�7'���w6�G-]Q����V=��d��\r@��&�)M<�X�V��F��ZP �����A0m\rҤ��Jc+,��[k�QmR�M���T�W����f��*ӹ=�Ȣ�B z���`��g�ٴ<BS�'zH�R���K��X��UE��<�^��[�KdַXTm`��hr2��d���B��N��h=�R��'-����N�^ػK���������b&Q��l���\nH^���qb^��n��G0�����N�t�\"�+i@\"��i%��ĝ��h�\"i;��pH���@��t��\$@��CN����.�@�[���&�)\"h\n�̪Q��h�0�#e���.�j2:٨�:\0إL��#0�C��{����{=5R�ML��iR�I�cgH(Ⱥ;=��x\\�L�Z�\$�\raT(U����*,�ב�`Պ�5��%���lqg�hy�\$L�\nh��I�F�Kw]�YB����\\���p���@��]IA3Җ�VH�6�����H6!�O�܆���)�M2��r�ت�����1��Jj���(Kz��%�M���ն�:]tF�o|\$�ĺ	f5hl�#�<܌�H4I�\"2�-�|�\n;�:��4�Q��SC��sNԻO���텖���j��tY/��0�=��Ĩy-�\$ȃTh��ʑ�\"�{�7���B�7�@(	�Z��`�\\A\0P�;�b�(�C5�r�Gn�Q�7z�95!R�PwF�*�ƈ\"z�-�g�¡���ʼ/�m�wcf�K;ŖEjM{f��\${BD���~�eN*�I��3e�!H���H\"2,Q���|'�0��P�B6�4�I�+)4E\0\rAZ�}gy��\$�B�%H아���r#��2�IɉLmEB�[D��H'��-W`j�J�Vp�\$!Lk�*�������`���B�N=�:�4�y�#�1G��AI�Y\r�����( \r��\0�C����2�0@#�u�0�H�@i���0� �aьb:��\$���\n����8#reٰF��d:�U엒R�M�9;R��F��Y��\0S\"	,�ϑaĴ�Z�ڵ\\�@�-5WRU��5e5��N�*�����L��3[�EhIU�\0���C`+:���%�諞��C�5��^f&LL�L����*/��L��L�E2�w��|_�Ȓ��>��e>�4̊\0��=;t(e��\$>��0�g�_d���>��q\\�?�l4Q䤋��:�6�e+N�\\Y#�H���:���Q#jm��t�\"�5��'�˞r�C3)�w'b�ATy̳ND�RW��(&��Hn���\$`�Ôq��1\"\$i���e��:�P�17�l��u���Q(C\$��T�%^a;����Z�P4_U\$LT&h�t�KO �z����):��##�Eσ��*0r�A�";break;case"sr":$i="�J4��4P-Ak	@��6�\r��h/`��SAC�4SP�\"�C\r_C!�Ԓ3h�\$�XSA+�/����d��4Sp)+A|�[�(�̮5�N&x�>���Ja�Yd�e��S���*�Kj�|���L`�E�^H�������'U���Z�\rX45%��YDabK���0�A��4����Kr�T�I[���lJ�	GZA)�\\EGjXl��Ʒ]�P�(\$�S��̗L��I�i*��F��G�.0wnLwy��4x\"��\\^C��)Z�i��V#��A9�h-�QԜ����d�����F�\$�\$�+;*�����h�j2ϽF����+�4�#���10�ֻ+	���D�Th'��FN\0��#��Ly'�Qa!G�T��6��X���PH�� g*�+\$L�@1b��K�r�m\\:O���.C?f� �3�I#���ın����(\\��D����Zx��)ʕ<J\n�ĮrA3F�Д�*�Hn�.�	�QP�B䶸ɪޠAt�B/�\"\\�u=[T�hYZU�1kYT5i[*�uB�\rJ]Vѫ2t&�Ih	@t&��Ц)�C �\r�h\\-�7H�.��IiI����Ϯui3V	ij\r��䎣��?Qj� ��08@!�b��г��O-����4�{:�*%�BM%�*�Ah�n�1{axB#8��k�΢���^�}�Ƚ������#;��\$�hӨ�����r�7�m^8��R�UH�Y���ZȞ�˻��kjML)x���+�4��,ͼ�蘺��b9���5��\n\n@����䵦\n��<)�[-?J�ȫ�uV�rS��H�(3�;���)f������Ơ�{<�!\$�Ii#uJ˘^�px�*g;�YS��e�|i\\�E�c\\,��Cl���v�P�?	3��b\n9zh��k�N��̘w/r�8M��>z��r蒒X�h������Ӟ�I@-�?�<��Qa�\r�|\$bȼ�/;CA���[9�'ad7�P@v��7�@�i��6P�C� ��:�\0�C�#��4��C-~�C� LXD���\r�%���K�4��5�G�S���b&���\"�n͑�7��L��G�᫿Gu��)A�bF�3U�^�9抬�aQw���G���C_����_��N8/d���\0T��dh�5����c#1���XD#Ԡa�@A����T��Gѯ���Q٩W�	𠻓@���\"�t�@(��;���`�6U���CBf��t-�ԗ~�d�͔l[O4��&��0����bƭ�U�W1\"�!��<��rS��#���el� T�#d\n�O��m��]�bw�i�x�a<�C:-ԃi�\ni )��&��5��};�c�=t�\\'A@�4���U��`";break;case"zh":$i="�^��s�\\�r����|�\\#]5�A�^(�d;�v�q�@�2q\0�RB�B�p�M!#q���N�X#��\0��B�G#�h�5ʭL9S���Ω]�����N��,�2TK�CL����B�Z�T !����(��+��m�пL�I�2%R�X�b\nق ��*����6�4[9V�*=&���*ȅ��b�r��d���%ԲT��.�t�֕%j]άSDP��2�r���:�\"�]�*Hu*�M����I��\\�ĳ�|�r�{V�����+��u���/R���ǔ@��?�oL]�GIB\\�A(�4�A��#(�\r�x!pH���HH�9h����B'E���!I��\$� �J�T Q�@'1T���j��IW(i!:R�9T����Q	!�,`L����G�1��A�#I	�&r�0G4�X\$	К&�B��c��<��p�6�� ȒeA�J-Q�{����F�#`�9\$��E/\n��#D�b��#�Hs�\$b�t��k�6L\$X���i*��M@3q�O���4���)~B�E��QhI^�إ�W�,��C��c|�V�,X?O�v��\r!r��m&WW�Ҹ���\n�����(W���b\n@�^��G�kzD'�a��m��:Rr�ij^���1\\Z�5����1DO�Q@��lrPU&�.\0'�b����m�G��#w�n�\0B��>S����B���\nH���I�MdAA��rs�w���G16Z?�ֹ�\${�+�.ͮ��������U��7��\0�0��(A���4��H�2��p@:\r�\0�8����@�9���Ņϥ��tL��\\��AN�0��H��GN[mr�J�l;�j��I��Nނ�仂����I��p�K��X�6\r#�\r�p@0���6��\"6�� �3!\0�:t3&��yy�ب�&^���R�Ɋ��뛪1(ȸ�Qf:�����^Z˨�nn�t�1|9�q�Ip,Wa(._���� !j:D��b�\$G\0����\r��C���r��0�\0@�	 �X��	1�'�Sc�Mc���9Q~/�,�\"�vL�C�xQ3�(Y�xR/��\n���";break;case"zh-tw":$i="�^��%ӕ\\�r�����|�B(\\�4��p�r��neRQ̡D8� S�\n�t*.t�9�E�N��AʤS�V�:	t%9��R��\",�r�ST�����Tr}ʧE��I'2q�Y���dˡB��I��B�=)@��:R��U��wUDY�D%��h��,�r�b)��e7�&�p��i��h�U�ʓK��/wgB\n�P����˙*����iu-u>�L��)d��Z�s��e��t�t�3ȅ�=l�t-��U��\0���l��:�P�^+ܩ�s�p�t&a�UzSs�Wre-\r`�r.P��걖)v]%\n� @1,xP9� P�2�`P�7�A b��8�d�8�+'!v]��!��9zW(dq\$r�Dx�&�:JE���9�%��I��6�����A��3�r�1�C�K�p]�b�G�o�nL��rL��I�����@,��2\\�]����G��b�\$	К&�B��c�<��p�6�� �1�d9u HR\"��,�P�:K�x]+�Cȇ�-q��\0�)�B0@:\r�[ ��Y�C���3;g),WNϑ�I�BlE���\n2L�@r��9@DVr����eY��*�GIG6�aZ���,X?���R��:Zsĉ�V�,�̭��HA!��1\ns	�Z��Ҹ�D�ۮs�y�G��@�\$\n�`�BD(e򑭅�Oq��AH�\$�JV��'1\\Z���nG֋��Q5DQ@�䂀�)��.��)�T���I�\\i���),Ґ��zP2ØAT%%j�*L��T�01�M���k�RhRM��M��\n�����˥.����H��~��c0,��@4#��B�\0�9\r#��6�<)W��\0�8�W�N�:#@\$�#<�.E�:Ϣ�1�\\��;��<���w��M�>��ī,�L�O���)�	zX�\$�~�t���c`�1�a�0���6��`\r�x�4���@C��A.5p���!\"DQq)Q�΃T,�l��犗�@�J��K��� N���F�ĂPÐ_�� .L�L�r��a�\n	��0�����<AO�99wR�@dq�D��\n0�G�R@�F/I(�<JJ,�\$���9dF��s\"\$H[ �e,�P��k\\L^	,T\0";break;case"ja":$i="�W'�\nc���/�ɘ2-޼O��h4����)\"j��J,����p��&���`�x26MŒ`�2q\0�RK\"�h�\n4�� �����@%9��S���W�U��*qQ� aH�\nf�T��NT*�����Ѹ4��\"��ɓ�\0�N�BЪO�����(�� P�d�Z܋�+�ȵ�x�s*`H5�w��(��h2>��EqTs�.+M�[(�2^@�UԪ�j��3K� �%��\0�s��.T�.h�XT��D��̙�9��~��Ӊ�)�\$��.AȐh���҂��bH%�YU�z�j�g;��(�����4D~�=��H�Y#\0=�ID�i1X)ŚhX9l�L[p��P�bA��I@B���\\Ȱd��D\0PJ2\n��#+Z7\r�PH�� g\$���HN�D�e��B�:�@K[J\$\"�E���t�%��E0/�,U�e�\\r����],GJ	�'1_��*h[�g!vL\"mzz��I\0@���CG�t���D�HRM�O\"'9_*���:����N��9\$c�l<��p�6�� ���R@A80'ːP6�������\\�1Z�%P�)�B4���b�A�1M�(�Ѵ�;R�LQE����+�]�(�n��E�:��')\0��Y�-1�-U�A_M�~\"w�N���I2H;�9����7��iOaV�0V��l>�-��̛*˳,�:٠ˁ�S뢼\n@���̳0��D)zU�b��A\$����v+j�f�.YW��T����M�I��#�Am�=�\n�O�jD{L��AD��Swa��Ǣ	☩c��f�%�\n\\@��	�\\|���(J!]#�)a�5XRA2	��Z���w-v��>w�S<_�|EcH���}�a_��h�C�=Aqw���S�\0B�����T%�Pt�d2��-����@P�7��\0�0��(A\"��4��H�C:B�7�\0� a��:���aO�!~'M��M�\"!2���7D<G��~/X�,o\r�F��^s�{�L!���\n�l\r!�5�\0��\0a�0��� (m\r�4�`�Ht���ؾ�2��B�䬽�DH�hR�L)�Қ��+%���\0����#�cK�PG!,(��x?������)\"��A�Ւ.	�6�Լ��b`n�*GI\0A����!�0��#�,Ha<'��\$�]b�D�1l����,Ժ�@�E���m�\\��D�A�D�'ۘ�1.e�\nh�@";break;case"ta":$i="�W* �i��F�\\Hd_�����+�Qh:.\0���U�z A\0�����V�X�`��B N�y��)�����4:d���(2�|�j�Z��yl�]W%c��<�]W*f�,IR���T��5�@t��� ��Ux�=#����	}VEUD_*z,�6���Ӂ��)�YhT�6fm�g��M���U؊���)E@�:�&?O�ߣ��qt�Phx�̊�v����_��9�F�<�㙤�n�@6�=�n�h�j���v>%!�zo�I�����?b��@�K[���+\\����\"�!\n	j��\$B,��HB�G \r+�\n\$-�\\� j	\\��-TJ@�j��%NZ��������zn\nc��4��;0�\$�R����1�D��%t�=1���:N��3���2��h�2����L��52���ɯLP�5J��I��o��4�\"F��2�Q�����삭�dҬE�{f�ыDj�Ŏ4�@�#��|%,?���LOr�+���M��26�(Ƞ�����U�M35M���0�b<���7\r�PH�� gf�0�ZWWк\0L���2�-�G;?Ի�WR��_�|iN,d�!��-Zr{��Q\n\"�y�򻪑Ho�<�^SS5oH��I�)_&Ջ���/�{��]�A]\rS�t�_×��cϰ\\��򏀢8U�,2�����J������g���Z��\$Y��MX+]�U��էP�=\n��R_��Eu�]�@�	�ht)�`P�2�h��c��<��M�����7��F��\n����]�nn(6GWJ�Z)����\0�@3�)�@��:D��8z;V�^�i*J�R#�ލ;�W�Τ�\\��Òj�E�K��I��`E�InA��:,\r�_�y�:�+�	��t%qo<�Lk}u�.i\\�BΟ8�����I}�]�׵�y/=���}TATx��~��BeZ���\"�X۳f�Ԁ��v�Ӵ>�>?Ŷ� WLo����QS0Ƥķ%�t�(�d�64r��</��7�@P(/yqAt΋�=�� �P^a��*���4�Q�?������f�9`��mj0E6y��6H����>�P�	5F�(��\"d A4�n�^Ec���|.\r�WJ^�\"D���\0PMˮ��\nŨ���1DM��w����@'�0�O�DN�IJ#(���M�Y �?�!ip����ڋ�]�t��P��f\r!�:� ��n�4� ��C��rQ=R`����Un�v�Ҿ��9}��F*5u޹�:,�r�	��+	+��q�#�9����'�u���._�(	'h6�2��̏��r59�]�Q�M�d�H���Q�5�(,���@ar`�d\0��ði\r��3�P@x 'A�c�Z^L���1R��ݤ��_\$���E-��`�R��Q&+B嫮��\r�IR�j!hu��9�Z�呚}��=�똤`k���\"��kS'g��~�\n��֩q>s)�*���>UU�1Oy�&#+J�����s_�=fHD@��4tXc\r��1��@w�\0a�0���M�� \r��f`�Ht*좊�B�P��3|��Q�\nL�oA҃8R��,-jR�\0X)p�����۩CB`]�'\08\\+�p�1���:�b�e�]����@�ߛ��TW��G�!��mU	X�B9H\"�oj���=S�|d\"6.���5僞��� �&<�j����#\$�F�F��5d!��������dk��8�n\\��N\nl�+w=]zj���O�cx	��G�+\$�Up��4�u�QgInu��	^�a%�k�t���~��Q��9\0�OpePB>�J�{��4�2�W��7���j\n�(;ٛq5b�j���קZSW�����DX㊶�r�B�uT�[8�|��Y��";break;case"bn":$i="�S)\nt]\0_� 	XD)L��@�4l5���P\\}\0C�P�4U\"���\nt1L��C�h�[\0VC�1i��7Câ\nh��ISL���dz\0��%a�XB	4Sʔ�h�H\$S*r�B�N�2��`�٥\n{:�[)���5<V]�P�*5!-eYB){�`��)�p\n<.��'�jjj�c��d8Qe\"oaS-�Ԋn5L��@'z��##ZTC��e6j���k�Y���M�Z�����9��ݷ�\n˃�h)z��7?���JdL9������2��JA@0��r���F�z���;�S�zz�/�{>�5�b���JB���Ě\0�;��\\J�;��P[�_��B�կj����\n� �,�*��8�{��ZʥB�;}'�\n�Ĕĺć��qJ�G�\0�H�3�TBL���\r�<�5Rk��/��#���L�3��S\0�o�L\\�C��9�Cp���\\��b�2��8�6����*J{%���<�S\$�	���'�T.��z0�/����\0E�J��:�Y)\\jȐ�l�Ԡd�'9Q*�+*M����,RL��)'2L�:�a\0P�HʹM\"�J.6m,��T��j4�h�v�d���-�m����\\K��Eܰ��\r*S7e3\$	@t&��Ц)�C�\\6���Ջ�B�l 	+ȀWұM[9��RKU:����`�9Rr\\��\nB���B�b��#3,�pШ�����&R�[�e��`r�:�FD�i�m\\ܺnt�k���k�t��Y^���(�0��e����p�!�I;�	镍��%2����]�Y�����yJ{��,\"om\$w��W���P�p�m�{���nE��5�D��@����Mv� /K�t�6�k-w�ۧ�ە̏��c	��괱i�QtE�WlK\\�w<r��?���]�V+䞾����S�7\$�!��π�7��5�{f�N^�:�9M�\$@\n�{�%�-�*�ϚX')i� @@xS\n�:�~�IYeG�9;�T��ba}k��3u ��Psn� ��̛ҍ(l���ƙ��['���t���3��+B���h��\"<d��Z��`fv 9ԾOS�nh��#V��\r�]w���C���X^e)i�!s��Xo�0�����*okj\0c���iJHy�#\nCxu�0�`�� �4�`�(gN��:�@C�d!�G�@�aPt!�L��v��\0j���s]�=?�t�Ǣz�#ꢎ�������9\0Y���\$�i�3�q1\$�^�O1U) �D���kd5-ET�MtYi�ԛX�e,w��\06^Xc\r��1��@�p  �;�e,�\r��2��A\0ibKA��D� �J���<\"΀�aZ{�}���߂�G��6j0����yMRj_�!.1�8��(��Dc��m�Sv�)�Ce�Q��U��\n��o\r��9;==m��\\U)Q�{�,���<f�Z.�9a�Ghk�:�Q:c\na2O_89�h١z�^9K��|�7�D�طA07��=������)(�U���_��K�n��6��.NÏ.%�ZT��#��*�Zf@�)���u��7�SX2�<���#[|�l�%�e�U:⋐|=";break;case"ar":$i="�C�P���l*�\r�,&\n�A���*�.�(�����Eб�u��l.c�N.6��d2W.�����aj�D��(�\0��B�6\$�\n3���h��f���I�Q���cK�Ϥ(���UU��(\"�%J�@����̺l*n�������\"�44.P�����[����D��,2S��*���I��gQz�֯YCZ�W��T�Wd���5�ó+��D�\\g����[�`�\n�=mMP�6��DB���\"w��ej���|l�c��ҜY,����ʢ�c��MQP)�M\\��Oª��k{�D?��Ę�Aj��ez�W�A(Ȃ�8�#(�\r�x�xH���c�eZ,@�iY�:����J8T&)�(ȷ����61Ҷ�5��L���>�:6���J�l1\n�r���C�̔2�\\�3j�M'�J��<�������Ʃj,.�M�<�ܔR��\$Bh�\nb�5\rAx�6����G�\"�p��pJ�ؾ����۪�F�ۈ9�crس0�f!�b��\n�x�2��%Pl��LF�*��%�R�\\�����2�j҆�kʲ��k��!��ؗ?vҔ0\"��v���r5��I��n;�l��\r,1(#kbI�u)oI/�\0������7�K8��B]k^�X��8�4���.2�z��!C��8>Hj&�A���ƍ*ԉ�i\n{|��r@�Wd�|X����\n�;�������[���g�덙v\nx�*!h�>�+k5^h\$,0��6�|�&i���i�-E{*�[���%��T�:��(�6\n��\n��d\n@���{!�X'Y���<\$����\n�A��;�l�b&�%bw��#m	@�*ϰ4�e��&���7��\0�0��(A���4��H�2���@:\r�\0�8����@�9�c�ߩ%j�\\K�P\\7�����n? �t�����Nl�l)�^Ь�ReM�w�(�<fC��Jڅ��C��6��Hc\r`�7�P��a\r���<P�� i����RY��8�Կ+�<�\rqj<��H\0�)]*�В2F{�Dl\r�r܄�Z8r/����2ܖ�8䀞���z�-'nq%p@��� @���g���q���?%�賣aθL\r������t\\9;g�\nN�\\��TsYF����+��t��cB���QY�m���~\\\"\n@�BBh��\n� @";break;case"fa":$i="�B����6P텛aT�F6��)��l)�M������G���j&��,[(�J3+l�!(i\\25W��S�\n<����(6®9�!�-����.�\"�1j��d�D6���Ζ���\n�z!b�-f6z�J�kFBk5�ʾ��X'\"�?/CZ&ʪ|�_\n�! XU8� �T�)�J�o�a�j|�2!G�Fixu�H���#Jl��y|�D&0�-r�]�CUV�=r4�d%7��	sK��o9�u�=M��lV��	�ذ�Z�B��Td1�\$Mg�DwP��Y��g\"+I4r-J�!a4K�V�i�\0��:@����T��KDϰ���W��PJ2\$H� ����C��9�Cp���ZqXj����\"�Yb�F%:,��R>��-�����Bs�)#v�4�\"4T\"̳tѐ�}��yR�4/[2��l�.�BVJ���+��ӆ��D\$-CDb\0�&S�ʏ:�|9<>S��>���flP+CĚ8\$	К&�B��c�<<��h�6�� ȱ,�Z��)Q���@�:\r�UA/����:ܡ�r=#�k���,�ք��5��p@!�b���X���@��T�U�Y@-�R�l�Ϋ	sX��X�J�+�����,���W:�y�̪_s)(N°�Z☱j���X�✬������K~��5�Υ+icH��U��t2�2�d�㈝e>T���Nm!����3J�i�?+�	�R�G�:�22�(��	��|��3l��x2oH�Q���� xs^б�����y\n鱜%��L����\"��2mՅ��{��?�f۬'rj��hƖ����	���\$ޡ%���óI�]B~l\n}����#�W���3�n�֦��սτ�FV�9�.j���iȲ7��\0�0��(A��4��H�2��@:\r�\0�8����@�9�����}B��1�]�:��&�@��DO�����?x\0�ܛ�/�(�R S�w��#�4�]Z��N��ARI	9a�9�V�`ia���A\0v!�:���Cxd\r!�<�\0�&���1D�b\r��J#�xE�1�\$](*�NG���6it��*w`��f����t�9�'e�d��C�_'��c�H6L�ڸ�R�I�Pk	.4��K�k�F�X�p��:\r��H�\"!�rzO�:#���\$C�ҽ��l!�@�#u#	\"l7���\$[eyt3��5KzvBs�Ĵ��c�5%d\\�";break;}$le=array();foreach(explode("\n",lzw_decompress($i))as$X)$le[]=(strpos($X,"\t")?explode("\t",$X):$X);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$c;$ld=array_search("",$c->operators);if($ld!==false)unset($c->operators[$ld]);}function
dsn($gb,$V,$G,$wb='auth_error'){set_exception_handler($wb);parent::__construct($gb,$V,$G);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$re=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$p];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$eb=array();$eb["sqlite"]="SQLite 3";$eb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$md=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Db){$this->_link=new
SQLite3($Db);$Ce=$this->_link->version();$this->server_info=$Ce["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$g=$this->_offset++;$U=$this->_result->columnType($g);return(object)array("name"=>$this->_result->columnName($g),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Db){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Db);}function
query($H,$re=false){$Jc=($re?"unbufferedQuery":"query");$I=@$this->_link->$Jc($H,SQLITE_BOTH,$o);$this->error="";if(!$I){$this->error=$o;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$z=>$X)$J[($z[0]=='"'?idf_unescape($z):$z)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$D=$this->_result->fieldName($this->_offset++);$id='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($id\\.)?$id\$~",$D,$B)){$Q=($B[3]!=""?$B[3]:idf_unescape($B[2]));$D=($B[5]!=""?$B[5]:idf_unescape($B[4]));}return(object)array("name"=>$D,"orgname"=>$D,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Db){$this->dsn(DRIVER.":$Db","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Db){if(is_readable($Db)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$Db)?$Db:dirname($_SERVER["SCRIPT_FILENAME"])."/$Db")." AS a")){$this->Min_SQLite($Db);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$_,$Pc=0,$Jd=" "){return" $H$Z".($_!==null?$Jd."LIMIT $_".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){global$j;return($j->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($n,$Ka){global$j;return$j->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($m){return
array();}function
table_status($D=""){global$j;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($D!=""?" AND name = ".q($D):""))as$K){$K["Oid"]="t";$K["Auto_increment"]="";$K["Rows"]=$j->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($D!=""?$J[$D]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$j;return!$j->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){$J=array();foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$U=strtolower($K["type"]);$Wa=$K["dflt_value"];$J[$K["name"]]=array("field"=>$K["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Wa,$B)?str_replace("''","'",$B[1]):($Wa=="NULL"?null:$Wa)),"null"=>!$K["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$K["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);}return$J;}function
indexes($Q,$k=null){$J=array();$nd=array();foreach(fields($Q)as$p){if($p["primary"])$nd[]=$p["field"];}if($nd)$J[""]=array("type"=>"PRIMARY","columns"=>$nd,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($Q).")")as$K){if(!ereg("^sqlite_",$K["name"])){$J[$K["name"]]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$K["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($K["name"]).")")as$Cd)$J[$K["name"]]["columns"][]=$Cd["name"];}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$r=&$J[$K["id"]];if(!$r)$r=$K;$r["source"][]=$K["from"];$r["target"][]=$K["to"];}return$J;}function
view($D){global$j;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($D))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
check_sqlite_name($D){global$j;$_b="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($_b)\$~",$D)){$j->error=lang(10,str_replace("|",", ",$_b));return
false;}return
true;}function
create_database($n,$f){global$j;if(file_exists($n)){$j->error=lang(11);return
false;}if(!check_sqlite_name($n))return
false;$A=new
Min_SQLite($n);$A->query('PRAGMA encoding = "UTF-8"');$A->query('CREATE TABLE adminer (i)');$A->query('DROP TABLE adminer');return
true;}function
drop_databases($m){global$j;$j->Min_SQLite(":memory:");foreach($m
as$n){if(!@unlink($n)){$j->error=lang(11);return
false;}}return
true;}function
rename_database($D,$f){global$j;if(!check_sqlite_name($D))return
false;$j->Min_SQLite(":memory:");$j->error=lang(11);return@rename(DB,$D);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$D,$q,$Ib,$Na,$pb,$f,$ta,$hd){$_e=($Q==""||$Ib);foreach($q
as$p){if($p[0]!=""||!$p[1]||$p[2]){$_e=true;break;}}$d=array();$cd=array();$od=false;foreach($q
as$p){if($p[1]){if($p[1][6])$od=true;$d[]=($_e?"  ":"ADD ").implode($p[1]);if($p[0]!="")$cd[$p[0]]=$p[1][0];}}if($_e){if($Q!=""){queries("BEGIN");foreach(foreign_keys($Q)as$r){$h=array();foreach($r["source"]as$g){if(!$cd[$g])continue
2;$h[]=$cd[$g];}$Ib[]="  FOREIGN KEY (".implode(", ",$h).") REFERENCES ".table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).") ON DELETE $r[on_delete] ON UPDATE $r[on_update]";}$x=array();foreach(indexes($Q)as$oc=>$w){$h=array();foreach($w["columns"]as$g){if(!$cd[$g])continue
2;$h[]=$cd[$g];}$h="(".implode(", ",$h).")";if($w["type"]!="PRIMARY")$x[]=array($w["type"],$oc,$h);elseif(!$od)$Ib[]="  PRIMARY KEY $h";}}$d=array_merge($d,$Ib);if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$D":$D)." (\n".implode(",\n",$d)."\n)"))return
false;if($Q!=""){if($cd&&!queries("INSERT INTO ".table("adminer_$D")." (".implode(", ",$cd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($cd)))." FROM ".table($Q)))return
false;$oe=array();foreach(triggers($Q)as$ne=>$de){$me=trigger($ne);$oe[]="CREATE TRIGGER ".idf_escape($ne)." ".implode(" ",$de)." ON ".table($D)."\n$me[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$D")." RENAME TO ".table($D));if(!alter_indexes($D,$x))return
false;foreach($oe
as$me){if(!queries($me))return
false;}queries("COMMIT");}}else{foreach($d
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$D&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($D)))return
false;}if($ta)queries("UPDATE sqlite_sequence SET seq = $ta WHERE name = ".q($D));return
true;}function
index_sql($Q,$U,$D,$h){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($D!=""?$D:uniqid($Q."_"))." ON ".table($Q)." $h";}function
alter_indexes($Q,$d){foreach($d
as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Ee){return
apply_queries("DROP VIEW",$Ee);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Ee,$T){return
false;}function
trigger($D){global$j;if($D=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($D)),$B);return
array("Timing"=>strtoupper($B[1]),"Event"=>strtoupper($B[2]),"Trigger"=>$D,"Statement"=>$B[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$B);$J[$K["name"]]=array($B[1],$B[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$nd){return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ROWID()");}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Fd){return
true;}function
create_sql($Q,$ta){global$j;$J=$j->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));foreach(indexes($Q)as$D=>$w){if($D=='')continue;$J.=";\n\n".index_sql($Q,$w['type'],$D,"(".implode(", ",array_map('idf_escape',$w['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($l){}function
trigger_sql($Q,$Sd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$j;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$z)$J[$z]=$j->result("PRAGMA $z");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Xc){list($z,$X)=explode("=",$Xc,2);$J[$z]=$X;}return$J;}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Bb){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$Bb);}$y="sqlite";$qe=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Rd=array_keys($qe);$xe=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Sb=array("hex","length","lower","round","unixepoch","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$eb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$md=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$G){global$c;$n=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$n!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Ce=pg_version($this->_link);$this->server_info=$Ce["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($l){global$c;if($l==$c->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($l,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$re=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$g=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$g);$J->name=pg_field_name($this->_result,$g);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$g);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$c;$n=$c->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($l){global$c;return($c->database()==$l);}function
close(){}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2])){if($j->server_info>=9)$j->query("SET application_name = 'Adminer'");return$j;}return$j->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$_,$Pc=0,$Jd=" "){return" $H$Z".($_!==null?$Jd."LIMIT $_".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($m){return
array();}function
table_status($D=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($D!=""?" AND relname = ".q($D):""))as$K)$J[$K["Name"]]=$K;return($D!=""?$J[$D]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){ereg('(.*)(\\((.*)\\))?',$K["full_type"],$B);list(,$K["type"],,$K["length"])=$B;$K["full_type"]=$K["type"].($K["length"]?"($K[length])":"");$K["null"]=($K["attnotnull"]=="f");$K["auto_increment"]=eregi("^nextval\\(",$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$K["default"],$B))$K["default"]=($B[1][0]=="'"?idf_unescape($B[1]):$B[1]);$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$Zd=$k->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$h=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Zd AND attnum > 0",$k);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Zd AND ci.oid = i.indexrelid",$k)as$K){$J[$K["relname"]]["type"]=($K["indisprimary"]=="t"?"PRIMARY":($K["indisunique"]=="t"?"UNIQUE":"INDEX"));$J[$K["relname"]]["columns"]=array();foreach(explode(" ",$K["indkey"])as$gc)$J[$K["relname"]]["columns"][]=$h[$gc];$J[$K["relname"]]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Rc;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$B)){$K['source']=array_map('trim',explode(',',$B[1]));$K['table']=$B[2];if(preg_match('~(.+)\.(.+)~',$B[2],$Ac)){$K['ns']=$Ac[1];$K['table']=$Ac[2];}$K['target']=array_map('trim',explode(',',$B[3]));$K['on_delete']=(preg_match("~ON DELETE ($Rc)~",$B[4],$Ac)?$Ac[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Rc)~",$B[4],$Ac)?$Ac[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($D){global$j;return
array("select"=>$j->result("SELECT pg_get_viewdef(".q($D).")"));}function
collations(){return
array();}function
information_schema($n){return($n=="information_schema");}function
error(){global$j;$J=h($j->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$B))$J=$B[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($B[3]).'})(.*)~','\\1<b>\\2</b>',$B[2]).$B[4];return
nl_br($J);}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).($f?" ENCODING ".idf_escape($f):""));}function
drop_databases($m){global$j;$j->close();return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($D,$f){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($D));}function
auto_increment(){return"";}function
alter_table($Q,$D,$q,$Ib,$Na,$pb,$f,$ta,$hd){$d=array();$td=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d[]="DROP $g";else{$Be=$X[5];unset($X[5]);if(isset($X[6])&&$p[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($p[0]=="")$d[]=($Q!=""?"ADD ":"  ").implode($X);else{if($g!=$X[0])$td[]="ALTER TABLE ".table($Q)." RENAME $g TO $X[0]";$d[]="ALTER $g TYPE$X[1]";if(!$X[6]){$d[]="ALTER $g ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $g ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($p[0]!=""||$Be!="")$td[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Be!=""?substr($Be,9):"''");}}$d=array_merge($d,$Ib);if($Q=="")array_unshift($td,"CREATE TABLE ".table($D)." (\n".implode(",\n",$d)."\n)");elseif($d)array_unshift($td,"ALTER TABLE ".table($Q)."\n".implode(",\n",$d));if($Q!=""&&$Q!=$D)$td[]="ALTER TABLE ".table($Q)." RENAME TO ".table($D);if($Q!=""||$Na!="")$td[]="COMMENT ON TABLE ".table($D)." IS ".q($Na);if($ta!=""){}foreach($td
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$d){$Ra=array();$fb=array();foreach($d
as$X){if($X[0]!="INDEX")$Ra[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$fb[]=idf_escape($X[1]);elseif(!queries("CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]"))return
false;}return((!$Ra||queries("ALTER TABLE ".table($Q).implode(",",$Ra)))&&(!$fb||queries("DROP INDEX ".implode(", ",$fb))));}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Ee){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ee)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ee,$T){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($T)))return
false;}foreach($Ee
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($T)))return
false;}return
true;}function
trigger($D){if($D=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($D));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($Q))as$K)$J[$K["trigger_name"]]=array($K["condition_timing"],$K["event_manipulation"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$nd){global$j;$ye=array();$Z=array();foreach($O
as$z=>$X){$ye[]="$z = $X";if(isset($nd[idf_unescape($z)]))$Z[]="$z = $X";}return($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$ye)." WHERE ".implode(" AND ",$Z))&&$j->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){return
0;}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){global$j;if(ereg(" rows=([0-9]+)",$j->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$wd))return$wd[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$j;return$j->result("SELECT current_schema()");}function
set_schema($Ed){global$j,$qe,$Rd;$J=$j->query("SET search_path TO ".idf_escape($Ed));foreach(types()as$U){if(!isset($qe[$U])){$qe[$U]=0;$Rd[lang(12)][]=$U;}}return$J;}function
use_sql($l){return"\connect ".idf_escape($l);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$j;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($j->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Bb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Bb);}$y="pgsql";$qe=array();$Rd=array();foreach(array(lang(13)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(14)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(15)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(16)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(17)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(18)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$z=>$X){$qe+=$X;$Rd[$z]=array_keys($X);}$xe=array();$Wc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$eb["oracle"]="Oracle";if(isset($_GET["oracle"])){$md=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$o=oci_error();$this->error=$o["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
true;}function
query($H,$re=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$o=oci_error($this->_link);$this->errno=$o["code"];$this->error=$o["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$p);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$z=>$X){if(is_a($X,'OCI-Lob'))$K[$z]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$g=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$g);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$g);$J->charsetnr=(ereg("raw|blob|bfile",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($l){return
true;}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$_,$Pc=0,$Jd=" "){return($Pc?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($_+$Pc).") WHERE rnum > $Pc":($_!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($_+$Pc):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($m){return
array();}function
table_status($D=""){$J=array();$Gd=q($D);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($D!=""?" AND table_name = $Gd":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($D!=""?" WHERE view_name = $Gd":""))as$K){if($D!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$wc="$K[DATA_PRECISION],$K[DATA_SCALE]";if($wc==",")$wc=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($wc?"($wc)":""),"type"=>strtolower($U),"length"=>$wc,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$k)as$K){$J[$K["INDEX_NAME"]]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$K["INDEX_NAME"]]["columns"][]=$K["COLUMN_NAME"];$J[$K["INDEX_NAME"]]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);}return$J;}function
view($D){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($D));return
reset($L);}function
collations(){return
array();}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
explain($j,$H){$j->query("EXPLAIN PLAN FOR $H");return$j->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$D,$q,$Ib,$Na,$pb,$f,$ta,$hd){$d=$fb=array();foreach($q
as$p){$X=$p[1];if($X&&$p[0]!=""&&idf_escape($p[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($p[0])." TO $X[0]");if($X)$d[]=($Q!=""?($p[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$fb[]=idf_escape($p[0]);}if($Q=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$d)."\n)");return(!$d||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$d)))&&(!$fb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$fb).")"))&&($Q==$D||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($D)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ee){return
apply_queries("DROP VIEW",$Ee);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
begin(){return
true;}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$j;return$j->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Fd){global$j;return$j->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Fd));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$L=get_rows('SELECT * FROM v$instance');return
reset($L);}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Bb){return
ereg("view|scheme|processlist|drop_col|variables|status",$Bb);}$y="oracle";$qe=array();$Rd=array();foreach(array(lang(13)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(14)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(15)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(16)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$z=>$X){$qe+=$X;$Rd[$z]=array_keys($X);}$xe=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("length","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$eb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$md=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$o){$this->errno=$o["code"];$this->error.="$o[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$hc=sqlsrv_server_info($this->_link);$this->server_info=$hc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$re=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
false;}return$this->store_result($I);}function
multi_query($H){$this->_result=sqlsrv_query($this->_link,$H);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($I=null){if(!$I)$I=$this->_result;if(sqlsrv_field_metadata($I))return
new
Min_Result($I);$this->affected_rows=sqlsrv_rows_affected($I);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$p];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$z=>$X){if(is_a($X,'DateTime'))$K[$z]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$p=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$p["Name"];$J->orgname=$p["Name"];$J->type=($p["Type"]==1?254:0);return$J;}function
seek($Pc){for($t=0;$t<$Pc;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
mssql_select_db($l);}function
query($H,$re=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$p=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($Pc){mssql_data_seek($this->_result,$Pc);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$_,$Pc=0,$Jd=" "){return($_!==null?" TOP (".($_+$Pc).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($n,$Ka){global$j;return$j->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($n));}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($m){global$j;$J=array();foreach($m
as$n){$j->select_db($n);$J[$n]=$j->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($D=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($D!=""?" AND name = ".q($D):""))as$K){if($D!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$wc=(ereg("char|binary",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($wc?"($wc)":""),"type"=>$U,"length"=>$wc,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$k)as$K){$J[$K["name"]]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$K["name"]]["lengths"]=array();$J[$K["name"]]["columns"][$K["key_ordinal"]]=$K["column_name"];}return$J;}function
view($D){global$j;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$j->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($D))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$f)$J[ereg_replace("_.*","",$f)][]=$f;return$J;}function
information_schema($n){return
false;}function
error(){global$j;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$j->error)));}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).(eregi('^[a-z0-9_]+$',$f)?" COLLATE $f":""));}function
drop_databases($m){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$m)));}function
rename_database($D,$f){if(eregi('^[a-z0-9_]+$',$f))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $f");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($D));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$D,$q,$Ib,$Na,$pb,$f,$ta,$hd){$d=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d["DROP"][]=" COLUMN $g";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($p[0]=="")$d["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Ib[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($g!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$g").", ".q(idf_unescape($X[0])).", 'COLUMN'");$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($D)." (".implode(",",(array)$d["ADD"])."\n)");if($Q!=$D)queries("EXEC sp_rename ".q(table($Q)).", ".q($D));if($Ib)$d[""]=$Ib;foreach($d
as$z=>$X){if(!queries("ALTER TABLE ".idf_escape($D)." $z".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$d){$w=array();$fb=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fb[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$fb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$fb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$nd){$ye=array();$Z=array();foreach($O
as$z=>$X){$ye[]="$z = $X";if(isset($nd[idf_unescape($z)]))$Z[]="$z = $X";}return
queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$ye)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");");}function
last_id(){global$j;return$j->result("SELECT SCOPE_IDENTITY()");}function
explain($j,$H){$j->query("SET SHOWPLAN_ALL ON");$J=$j->query($H);$j->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$r=&$J[$K["FK_NAME"]];$r["table"]=$K["PKTABLE_NAME"];$r["source"][]=$K["FKCOLUMN_NAME"];$r["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ee){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ee)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ee,$T){return
apply_queries("ALTER SCHEMA ".idf_escape($T)." TRANSFER",array_merge($S,$Ee));}function
trigger($D){if($D=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($D));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
triggers($Q){$J=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($Q))as$K)$J[$K["name"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$j;if($_GET["ns"]!="")return$_GET["ns"];return$j->result("SELECT SCHEMA_NAME()");}function
set_schema($Ed){return
true;}function
use_sql($l){return"USE ".idf_escape($l);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Bb){return
ereg('^(scheme|trigger|view|drop_col)$',$Bb);}$y="mssql";$qe=array();$Rd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(14)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(15)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(16)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$z=>$X){$qe+=$X;$Rd[$z]=array_keys($X);}$xe=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("len","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$eb=array("server"=>"MySQL")+$eb;if(!defined("DRIVER")){$md=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($ac,$kd)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$ac:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($kd)?$kd:ini_get("mysqli.default_port")),(!is_numeric($kd)?$kd:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$p];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($l){return
mysql_select_db($l,$this->_link);}function
query($H,$re=false){$I=@($re?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$p=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$p);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($N,$V,$G){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$re=false){$this->setAttribute(1000,!$re);return
parent::query($H,$re);}}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2])){$j->query("SET sql_quote_show_create = 1, autocommit = 1");return$j;}$J=$j->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Dd=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Dd;return$J;}function
get_databases($Hb){global$j;$J=get_session("dbs");if($J===null){$H=($j->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Hb?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$_,$Pc=0,$Jd=" "){return" $H$Z".($_!==null?$Jd."LIMIT $_".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($n,$Ka){global$j;$J=null;$Ra=$j->result("SHOW CREATE DATABASE ".idf_escape($n),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ra,$B))$J=$B[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ra,$B))$J=$Ka[$B[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$j;return$j->result("SELECT USER()");}function
tables_list(){global$j;return
get_key_vals("SHOW".($j->server_info>=5?" FULL":"")." TABLES");}function
count_tables($m){$J=array();foreach($m
as$n)$J[$n]=count(get_vals("SHOW TABLES IN ".idf_escape($n)));return$J;}function
table_status($D=""){$J=array();foreach(get_rows("SHOW TABLE STATUS".($D!=""?" LIKE ".q(addcslashes($D,"%_")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Rows"]))$K["Comment"]="";if($D!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$B);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$B[1],"length"=>$B[2],"unsigned"=>ltrim($B[3].$B[4]),"default"=>($K["Default"]!=""||ereg("char|set",$B[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$B)?$B[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$k)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];}return$J;}function
foreign_keys($Q){global$j,$Rc;static$id='`(?:[^`]|``)+`';$J=array();$Sa=$j->result("SHOW CREATE TABLE ".table($Q),1);if($Sa){preg_match_all("~CONSTRAINT ($id) FOREIGN KEY \\(((?:$id,? ?)+)\\) REFERENCES ($id)(?:\\.($id))? \\(((?:$id,? ?)+)\\)(?: ON DELETE ($Rc))?(?: ON UPDATE ($Rc))?~",$Sa,$Bc,PREG_SET_ORDER);foreach($Bc
as$B){preg_match_all("~$id~",$B[2],$Md);preg_match_all("~$id~",$B[5],$T);$J[idf_unescape($B[1])]=array("db"=>idf_unescape($B[4]!=""?$B[3]:$B[4]),"table"=>idf_unescape($B[4]!=""?$B[4]:$B[3]),"source"=>array_map('idf_unescape',$Md[0]),"target"=>array_map('idf_unescape',$T[0]),"on_delete"=>($B[6]?$B[6]:"RESTRICT"),"on_update"=>($B[7]?$B[7]:"RESTRICT"),);}}return$J;}function
view($D){global$j;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$j->result("SHOW CREATE VIEW ".table($D),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$z=>$X)asort($J[$z]);return$J;}function
information_schema($n){global$j;return($j->server_info>=5&&$n=="information_schema")||($j->server_info>=5.5&&$n=="performance_schema");}function
error(){global$j;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$j->error));}function
error_line(){global$j;if(ereg(' at line ([0-9]+)$',$j->error,$wd))return$wd[1]-1;}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($n,$f){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($n).($f?" COLLATE ".q($f):""));}function
drop_databases($m){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($D,$f){if(create_database($D,$f)){$xd=array();foreach(tables_list()as$Q=>$U)$xd[]=table($Q)." TO ".idf_escape($D).".".table($Q);if(!$xd||queries("RENAME TABLE ".implode(", ",$xd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ua=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$ua="";break;}if($w["type"]=="PRIMARY")$ua=" UNIQUE";}}return" AUTO_INCREMENT$ua";}function
alter_table($Q,$D,$q,$Ib,$Na,$pb,$f,$ta,$hd){$d=array();foreach($q
as$p)$d[]=($p[1]?($Q!=""?($p[0]!=""?"CHANGE ".idf_escape($p[0]):"ADD"):" ")." ".implode($p[1]).($Q!=""?$p[2]:""):"DROP ".idf_escape($p[0]));$d=array_merge($d,$Ib);$Pd="COMMENT=".q($Na).($pb?" ENGINE=".q($pb):"").($f?" COLLATE ".q($f):"").($ta!=""?" AUTO_INCREMENT=$ta":"").$hd;if($Q=="")return
queries("CREATE TABLE ".table($D)." (\n".implode(",\n",$d)."\n) $Pd");if($Q!=$D)$d[]="RENAME TO ".table($D);$d[]=$Pd;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$d));}function
alter_indexes($Q,$d){foreach($d
as$z=>$X)$d[$z]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$d));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Ee){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ee)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Ee,$T){$xd=array();foreach(array_merge($S,$Ee)as$Q)$xd[]=table($Q)." TO ".idf_escape($T).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$xd));}function
copy_tables($S,$Ee,$T){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$D=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));if(!queries("DROP TABLE IF EXISTS $D")||!queries("CREATE TABLE $D LIKE ".table($Q))||!queries("INSERT INTO $D SELECT * FROM ".table($Q)))return
false;}foreach($Ee
as$Q){$D=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));$De=view($Q);if(!queries("DROP VIEW IF EXISTS $D")||!queries("CREATE VIEW $D AS $De[select]"))return
false;}return
true;}function
trigger($D){if($D=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($D));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($D,$U){global$j,$qb,$jc,$qe;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$pe="((".implode("|",array_merge(array_keys($qe),$na)).")\\b(?:\\s*\\(((?:[^'\")]*|$qb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$id="\\s*(".($U=="FUNCTION"?"":$jc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$pe";$Ra=$j->result("SHOW CREATE $U ".idf_escape($D),2);preg_match("~\\(((?:$id\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$pe\\s+":"")."(.*)~is",$Ra,$B);$q=array();preg_match_all("~$id\\s*,?~is",$B[1],$Bc,PREG_SET_ORDER);foreach($Bc
as$fd){$D=str_replace("``","`",$fd[2]).$fd[3];$q[]=array("field"=>$D,"type"=>strtolower($fd[5]),"length"=>preg_replace_callback("~$qb~s",'normalize_enum',$fd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fd[8] $fd[7]"))),"null"=>1,"full_type"=>$fd[4],"inout"=>strtoupper($fd[1]),"collation"=>strtolower($fd[9]),);}if($U!="FUNCTION")return
array("fields"=>$q,"definition"=>$B[11]);return
array("fields"=>$q,"returns"=>array("type"=>$B[12],"length"=>$B[13],"unsigned"=>$B[15],"collation"=>$B[16]),"definition"=>$B[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($Q,$O,$nd){foreach($O
as$z=>$X)$O[$z]="$z = $X";$ye=implode(", ",$O);return
queries("INSERT INTO ".table($Q)." SET $ye ON DUPLICATE KEY UPDATE $ye");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ID()");}function
explain($j,$H){return$j->query("EXPLAIN ".($j->server_info?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ed){return
true;}function
create_sql($Q,$ta){global$j;$J=$j->result("SHOW CREATE TABLE ".table($Q),1);if(!$ta)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($l){return"USE ".idf_escape($l);}function
trigger_sql($Q,$Sd){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$K)$J.="\n".($Sd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($p){if(ereg("binary",$p["type"]))return"HEX(".idf_escape($p["field"]).")";if(ereg("geometry|point|linestring|polygon",$p["type"]))return"AsWKT(".idf_escape($p["field"]).")";}function
unconvert_field($p,$J){if(ereg("binary",$p["type"]))$J="UNHEX($J)";if(ereg("geometry|point|linestring|polygon",$p["type"]))$J="GeomFromText($J)";return$J;}function
support($Bb){global$j;return!ereg("scheme|sequence|type".($j->server_info<5.1?"|event|partitioning".($j->server_info<5?"|view|routine|trigger":""):""),$Bb);}$y="sql";$qe=array();$Rd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(14)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(15)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(19)=>array("enum"=>65535,"set"=>64),lang(16)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$z=>$X){$qe+=$X;$Rd[$z]=array_keys($X);}$xe=array("unsigned","zerofill","unsigned zerofill");$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.6.4";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(20)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$j;$m=$this->databases(false);return(!$m?$j->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$m[(information_schema($m[0])?1:0)]);}function
databases($Hb=true){return
get_databases($Hb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(21),'<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(22),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(23)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(24))."\n";}function
login($zc,$G){global$j;$j->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Xd){return
h($Xd["Comment"]!=""?$Xd["Comment"]:$Xd["Name"]);}function
fieldName($p,$ad=0){return
h($p["comment"]!=""?$p["comment"]:$p["field"]);}function
selectLinks($Xd,$O=""){$b=$Xd["Name"];if($O!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$O).'">'.lang(25)."</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Wd){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$z=>$X){$D=$this->tableName(table_status($z));if($D!=""){$Gd=preg_quote($Wd);$Jd="(:|\\s*-)?\\s+";$J[$z]["name"]=(preg_match("(^$Gd$Jd(.+)|^(.+?)$Jd$Gd\$)iu",$D,$B)?$B[2].$B[3]:$D);}else
unset($J[$z]);}return$J;}function
backwardKeysPrint($xa,$K){foreach($xa
as$Q=>$wa){foreach($wa["keys"]as$La){$A=ME.'select='.urlencode($Q);$t=0;foreach($La
as$g=>$X)$A.=where_link($t++,$g,$K[$X]);echo"<a href='".h($A)."'>".h($wa["name"])."</a>";$A=ME.'edit='.urlencode($Q);foreach($La
as$g=>$X)$A.="&set".urlencode("[".bracket_escape($g)."]")."=".urlencode($K[$X]);echo"<a href='".h($A)."' title='".lang(25)."'>+</a> ";}}}function
selectQuery($H){return"<!--\n".str_replace("--","--><!-- ",$H)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$p){if(ereg("varchar|character varying",$p["type"]))return
idf_escape($p["field"]);}return"";}function
rowDescriptions($L,$Kb){$J=$L;foreach($L[0]as$z=>$X){if(list($Q,$u,$D)=$this->_foreignColumn($Kb,$z)){$dc=array();foreach($L
as$K)$dc[$K[$z]]=exact_value($K[$z]);$Ya=$this->_values[$Q];if(!$Ya)$Ya=get_key_vals("SELECT $u, $D FROM ".table($Q)." WHERE $u IN (".implode(", ",$dc).")");foreach($L
as$C=>$K){if(isset($K[$z]))$J[$C][$z]=(string)$Ya[$K[$z]];}}}return$J;}function
selectLink($X,$p){}function
selectVal($X,$A,$p){$J=($X===null?"&nbsp;":$X);$A=h($A);if(ereg('blob|bytea',$p["type"])&&!is_utf8($X)){$J=lang(26,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X))$J="<img src='$A' alt='$J'>";}if(like_bool($p)&&$J!="&nbsp;")$J=($X?lang(27):lang(28));if($A)$J="<a href='$A'>$J</a>";if(!$A&&!like_bool($p)&&ereg('int|float|double|decimal',$p["type"]))$J="<div class='number'>$J</div>";elseif(ereg('date',$p["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($X,$p){if(ereg('date|timestamp',$p["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(29),$X);return$X;}function
selectColumnsPrint($M,$h){}function
selectSearchPrint($Z,$h,$x){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(30)."</legend><div>\n";$pc=array();foreach($Z
as$z=>$X)$pc[$X["col"]]=$z;$t=0;$q=fields($_GET["select"]);foreach($h
as$D=>$Xa){$p=$q[$D];if(ereg("enum",$p["type"])||like_bool($p)){$z=$pc[$D];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($D)."'>:",(like_bool($p)?" <select name='where[$t][val]'>".optionlist(array(""=>"",lang(28),lang(27)),$Z[$z]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$p,(array)$Z[$z]["val"],($p["null"]?0:null))),"</div>\n";unset($h[$D]);}elseif(is_array($Yc=$this->_foreignKeyOptions($_GET["select"],$D))){if($q[$D]["null"])$Yc[0]='('.lang(4).')';$z=$pc[$D];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($D)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($Yc,$Z[$z]["val"],true)."</select></div>\n";unset($h[$D]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$h[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".lang(31).")".optionlist($h,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$t][val]' value='".h($X["val"])."' onsearch='selectSearch(this);'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(31).")".optionlist($h,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$t][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ad,$h,$x){$bd=array();foreach($x
as$z=>$w){$ad=array();foreach($w["columns"]as$X)$ad[]=$h[$X];if(count(array_filter($ad,'strlen'))>1&&$z!="PRIMARY")$bd[$z]=implode(", ",$ad);}if($bd){echo'<fieldset><legend>'.lang(32)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$bd,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(33)."</legend><div>";echo
html_select("limit",array("","50","100"),$_),"</div></fieldset>\n";}function
selectLengthPrint($be){}function
selectActionPrint($x){echo"<fieldset><legend>".lang(34)."</legend><div>","<input type='submit' value='".lang(35)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($mb,$h){if($mb){print_fieldset("email",lang(36),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(37).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(38).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$h,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(39)."'>\n";echo"<p>".lang(40).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($mb)==1?'<input type="hidden" name="email_field" value="'.h(key($mb)).'">':html_select("email_field",$mb)),"<input type='submit' name='email' value='".lang(41)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($h,$x){return
array(array(),array());}function
selectSearchProcess($q,$x){$J=array();foreach((array)$_GET["where"]as$z=>$Z){$Ja=$Z["col"];$Uc=$Z["op"];$X=$Z["val"];if(($z<0?"":$Ja).$X!=""){$Oa=array();foreach(($Ja!=""?array($Ja=>$q[$Ja]):$q)as$D=>$p){if($Ja!=""||is_numeric($X)||!ereg('int|float|double|decimal',$p["type"])){$D=idf_escape($D);if($Ja!=""&&$p["type"]=="enum")$Oa[]=(in_array(0,$X)?"$D IS NULL OR ":"")."$D IN (".implode(", ",array_map('intval',$X)).")";else{$ce=ereg('char|text|enum|set',$p["type"]);$Y=$this->processInput($p,(!$Uc&&$ce&&ereg('^[^%]+$',$X)?"%$X%":$X));$Oa[]=$D.($Y=="NULL"?" IS".($Uc==">="?" NOT":"")." $Y":(in_array($Uc,$this->operators)||$Uc=="="?" $Uc $Y":($ce?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($z<0&&$X=="0")$Oa[]="$D IS NULL";}}}$J[]=($Oa?"(".implode(" OR ",$Oa).")":"0");}}return$J;}function
selectOrderProcess($q,$x){$fc=$_GET["index_order"];if($fc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($fc!=""?array($x[$fc]):$x)as$w){if($fc!=""||$w["type"]=="INDEX"){$Xa=false;foreach($w["columns"]as$X){if(ereg('date|timestamp',$q[$X]["type"])){$Xa=true;break;}}$J=array();foreach($w["columns"]as$X)$J[]=idf_escape($X).($Xa?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Kb){if($_POST["email_append"])return
true;if($_POST["email"]){$Id=0;if($_POST["all"]||$_POST["check"]){$p=idf_escape($_POST["email_field"]);$Td=$_POST["email_subject"];$Hc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Td.$Hc",$Bc);$L=get_rows("SELECT DISTINCT $p".($Bc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Bc[1]))):"")." FROM ".table($_GET["select"])." WHERE $p IS NOT NULL AND $p != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($L,$Kb)as$K){$yd=array('{\\'=>'{');foreach($Bc[1]as$X)$yd['{$'."$X}"]=$this->editVal($K[$X],$q[$X]);$lb=$K[$_POST["email_field"]];if(is_mail($lb)&&send_mail($lb,strtr($Td,$yd),strtr($Hc,$yd),$_POST["email_from"],$_FILES["email_files"]))$Id++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(42,$Id));}return
false;}function
selectQueryBuild($M,$Z,$Tb,$ad,$_,$F){return"";}function
messageQuery($H){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n-->";}function
editFunctions($p){$J=array();if($p["null"]&&ereg('blob',$p["type"]))$J["NULL"]=lang(4);$J[""]=($p["null"]||$p["auto_increment"]||like_bool($p)?"":"*");if(ereg('date|time',$p["type"]))$J["now"]=lang(43);if(eregi('_(md5|sha1)$',$p["field"],$B))$J[]=strtolower($B[1]);return$J;}function
editInput($Q,$p,$sa,$Y){if($p["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$sa value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$sa,$p,($Y||isset($_GET["select"])?$Y:0),($p["null"]?"":null));$Yc=$this->_foreignKeyOptions($Q,$p["field"],$Y);if($Yc!==null)return(is_array($Yc)?"<select$sa>".optionlist($Yc,$Y,true)."</select>":"<input value='".h($Y)."'$sa class='hidden'><input value='".h($Yc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($p["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($p))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$sa>";$Zb="";if(ereg('time',$p["type"]))$Zb=lang(44);if(ereg('date|timestamp',$p["type"]))$Zb=lang(45).($Zb?" [$Zb]":"");if($Zb)return"<input value='".h($Y)."'$sa> ($Zb)";if(eregi('_(md5|sha1)$',$p["field"]))return"<input type='password' value='".h($Y)."'$sa>";return'';}function
processInput($p,$Y,$s=""){if($s=="now")return"$s()";$J=$Y;if(ereg('date|timestamp',$p["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(29)))).'(.*))',$Y,$B))$J=($B["p1"]!=""?$B["p1"]:($B["p2"]!=""?($B["p2"]<70?20:19).$B["p2"]:gmdate("Y")))."-$B[p3]$B[p4]-$B[p5]$B[p6]".end($B);$J=($p["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$J:q($J));if($Y==""&&like_bool($p))$J="0";elseif($Y==""&&($p["null"]||!ereg('char|text',$p["type"])))$J="NULL";elseif(ereg('^(md5|sha1)$',$s))$J="$s($J)";return
unconvert_field($p,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($n){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$Sd,$H){global$j;$I=$j->query($H,1);if($I){while($K=$I->fetch_assoc()){if($Sd=="table"){dump_csv(array_keys($K));$Sd="INSERT";}dump_csv($K);}}}function
dumpFilename($cc){return
friendly_url($cc);}function
dumpHeaders($cc,$Lc=false){$yb="csv";header("Content-Type: text/csv; charset=utf-8");return$yb;}function
homepage(){return
true;}function
navigation($Kc){global$ba,$ie;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Kc=="auth"){$Gb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$G){if($G!==null){if($Gb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Gb=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(46),'" id="logout">
<input type="hidden" name="token" value="',$ie,'">
</p>
</form>
';$this->databasesPrint($Kc);if($Kc!="db"&&$Kc!="ns"){$R=table_status();if(!$R)echo"<p class='message'>".lang(6)."\n";else$this->tablesPrint($R);}}}function
databasesPrint($Kc){}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$K){$D=$this->tableName($K);if(isset($K["Engine"])&&$D!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"])." title='".lang(47)."'>$D</a><br>\n";}}function
_foreignColumn($Kb,$g){foreach((array)$Kb[$g]as$Jb){if(count($Jb["source"])==1){$D=$this->rowDescription($Jb["table"]);if($D!=""){$u=idf_escape($Jb["target"][0]);return
array($Jb["table"],$u,$D);}}}}function
_foreignKeyOptions($Q,$g,$Y=null){global$j;if(list($T,$u,$D)=$this->_foreignColumn(column_foreign_keys($Q),$g)){$J=&$this->_values[$T];if($J===null){$R=table_status($T);$J=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $u, $D FROM ".table($T)." ORDER BY 2"));}if(!$J&&$Y!==null)return$j->result("SELECT $D FROM ".table($T)." WHERE $u = ".q($Y));return$J;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($ee,$o="",$Da=array(),$fe=""){global$a,$c,$j,$eb;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$ge=$ee.($fe!=""?": ".h($fe):"");$he=strip_tags($ge.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE html>
<html lang="',$a,'" dir="',lang(48),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$he,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.4",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.4",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.4",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.4",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(48),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($j)?substr($j->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Da!==null){$A=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($A?$A:".").'">'.$eb[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(49));if($Da===false)echo"$N\n";else{echo"<a href='".($A?h($A):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Da)))echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Da)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Da
as$z=>$X){$Xa=(is_array($X)?$X[1]:$X);if($Xa!="")echo'<a href="'.h(ME."$z=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Xa).'</a> &raquo; ';}}echo"$ee\n";}}echo"<h2>$ge</h2>\n";restart_session();$ze=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ic=$_SESSION["messages"][$ze];if($Ic){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ic)."</div>\n";unset($_SESSION["messages"][$ze]);}$m=&get_session("dbs");if(DB!=""&&$m&&!in_array(DB,$m,true))$m=null;stop_session();if($o)echo"<div class='error'>$o</div>\n";define("PAGE_HEADER",1);}function
page_footer($Kc=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Kc);echo'</div>
';}function
int32($C){while($C>=2147483648)$C-=4294967296;while($C<=-2147483649)$C+=4294967296;return(int)$C;}function
long2str($W,$Ge){$Dd='';foreach($W
as$X)$Dd.=pack('V',$X);if($Ge)return
substr($Dd,0,end($W));return$Dd;}function
str2long($Dd,$Ge){$W=array_values(unpack('V*',str_pad($Dd,4*ceil(strlen($Dd)/4),"\0")));if($Ge)$W[]=strlen($Dd);return$W;}function
xxtea_mx($Le,$Ke,$Vd,$nc){return
int32((($Le>>5&0x7FFFFFF)^$Ke<<2)+(($Ke>>3&0x1FFFFFFF)^$Le<<4))^int32(($Vd^$Ke)+($nc^$Le));}function
encrypt_string($Qd,$z){if($Qd=="")return"";$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Qd,true);$C=count($W)-1;$Le=$W[$C];$Ke=$W[0];$sd=floor(6+52/($C+1));$Vd=0;while($sd-->0){$Vd=int32($Vd+0x9E3779B9);$hb=$Vd>>2&3;for($ed=0;$ed<$C;$ed++){$Ke=$W[$ed+1];$Mc=xxtea_mx($Le,$Ke,$Vd,$z[$ed&3^$hb]);$Le=int32($W[$ed]+$Mc);$W[$ed]=$Le;}$Ke=$W[0];$Mc=xxtea_mx($Le,$Ke,$Vd,$z[$ed&3^$hb]);$Le=int32($W[$C]+$Mc);$W[$C]=$Le;}return
long2str($W,false);}function
decrypt_string($Qd,$z){if($Qd=="")return"";$z=array_values(unpack("V*",pack("H*",md5($z))));$W=str2long($Qd,false);$C=count($W)-1;$Le=$W[$C];$Ke=$W[0];$sd=floor(6+52/($C+1));$Vd=int32($sd*0x9E3779B9);while($Vd){$hb=$Vd>>2&3;for($ed=$C;$ed>0;$ed--){$Le=$W[$ed-1];$Mc=xxtea_mx($Le,$Ke,$Vd,$z[$ed&3^$hb]);$Ke=int32($W[$ed]-$Mc);$W[$ed]=$Ke;}$Le=$W[$C];$Mc=xxtea_mx($Le,$Ke,$Vd,$z[$ed&3^$hb]);$Ke=int32($W[0]-$Mc);$W[0]=$Ke;$Vd=int32($Vd-0x9E3779B9);}return
long2str($W,true);}$j='';$ie=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$jd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($z)=explode(":",$X);$jd[$z]=$X;}}$e=$_POST["auth"];if($e){session_regenerate_id();$_SESSION["pwds"][$e["driver"]][$e["server"]][$e["username"]]=$e["password"];$_SESSION["db"][$e["driver"]][$e["server"]][$e["username"]][$e["db"]]=true;if($e["permanent"]){$z=base64_encode($e["driver"])."-".base64_encode($e["server"])."-".base64_encode($e["username"])."-".base64_encode($e["db"]);$pd=$c->permanentLogin();$jd[$z]="$z:".base64_encode($pd?encrypt_string($e["password"],$pd):"");cookie("adminer_permanent",implode(" ",$jd));}if(count($_POST)==1||DRIVER!=$e["driver"]||SERVER!=$e["server"]||$_GET["username"]!==$e["username"]||DB!=$e["db"])redirect(auth_url($e["driver"],$e["server"],$e["username"],$e["db"]));}elseif($_POST["logout"]){if($ie&&$_POST["token"]!=$ie){page_header(lang(46),lang(50));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$z)set_session($z,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(51));}}elseif($jd&&!$_SESSION["pwds"]){session_regenerate_id();$pd=$c->permanentLogin();foreach($jd
as$z=>$X){list(,$Ga)=explode(":",$X);list($db,$N,$V,$n)=array_map('base64_decode',explode("-",$z));$_SESSION["pwds"][$db][$N][$V]=decrypt_string(base64_decode($Ga),$pd);$_SESSION["db"][$db][$N][$V][$n]=true;}}function
unset_permanent(){global$jd;foreach($jd
as$z=>$X){list($db,$N,$V,$n)=array_map('base64_decode',explode("-",$z));if($db==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$n==DB)unset($jd[$z]);}cookie("adminer_permanent",implode(" ",$jd));}function
auth_error($vb=null){global$j,$c,$ie;$Ld=session_name();$o="";if(!$_COOKIE[$Ld]&&$_GET[$Ld]&&ini_bool("session.use_only_cookies"))$o=lang(52);elseif(isset($_GET["username"])){if(($_COOKIE[$Ld]||$_GET[$Ld])&&!$ie)$o=lang(53);else{$G=&get_session("pwds");if($G!==null){$o=h($vb?$vb->getMessage():(is_string($j)?$j:lang(54)));$G=null;}unset_permanent();}}page_header(lang(23),$o,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(55),lang(56,implode(", ",$md)),false);page_footer("auth");exit;}$j=connect();}if(is_string($j)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$ie=$_SESSION["token"];if($e&&$_POST["token"])$_POST["token"]=$ie;$o='';if($_POST){if($_POST["token"]!=$ie){$ic="max_input_vars";$Fc=ini_get($ic);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$z){$X=ini_get($z);if($X&&(!$Fc||$X<$Fc)){$ic=$z;$Fc=$X;}}}$o=(!$_POST["token"]&&$Fc?lang(57,"'$ic'"):lang(50));}}elseif($_SERVER["REQUEST_METHOD"]=="POST")$o=lang(58,"'post_max_size'");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$j->select_db($c->database());function
email_header($Xb){return"=?UTF-8?B?".base64_encode($Xb)."?=";}function
send_mail($lb,$Td,$Hc,$Qb="",$Eb=array()){$rb=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$Hc=str_replace("\n",$rb,wordwrap(str_replace("\r","","$Hc\n")));$Ca=uniqid("boundary");$ra="";foreach((array)$Eb["error"]as$z=>$X){if(!$X)$ra.="--$Ca$rb"."Content-Type: ".str_replace("\n","",$Eb["type"][$z]).$rb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Eb["name"][$z])."\"$rb"."Content-Transfer-Encoding: base64$rb$rb".chunk_split(base64_encode(file_get_contents($Eb["tmp_name"][$z])),76,$rb).$rb;}$za="";$Yb="Content-Type: text/plain; charset=utf-8$rb"."Content-Transfer-Encoding: 8bit";if($ra){$ra.="--$Ca--$rb";$za="--$Ca$rb$Yb$rb$rb";$Yb="Content-Type: multipart/mixed; boundary=\"$Ca\"";}$Yb.=$rb."MIME-Version: 1.0$rb"."X-Mailer: Adminer Editor".($Qb?$rb."From: ".str_replace("\n","",$Qb):"");return
mail($lb,email_header($Td),$za.$Hc.$ra,$Yb);}function
like_bool($p){return
ereg("bool|(tinyint|bit)\\(1\\)",$p["full_type"]);}$Rc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$eb[DRIVER]=lang(23);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$b=$_GET["download"];$q=fields($b);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$j->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET,$q),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$q=fields($b);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$q):""):where($_GET,$q));$ye=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($q
as$D=>$p){if(!isset($p["privileges"][$ye?"update":"insert"])||$c->fieldName($p)=="")unset($q[$D]);}if($_POST&&!$o&&!isset($_GET["select"])){$yc=$_POST["referer"];if($_POST["insert"])$yc=($ye?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$yc))$yc=ME."select=".urlencode($b);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$yc,lang(59));else{$O=array();foreach($q
as$D=>$p){$X=process_input($p);if($X!==false&&$X!==null)$O[idf_escape($D)]=($ye?"\n".idf_escape($D)." = $X":$X);}if($ye){if(!$O)redirect($yc);query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$O),"\nWHERE $Z"),$yc,lang(60));}else{$I=insert_into($b,$O);$uc=($I?last_id():0);queries_redirect($yc,lang(61,($uc?" $uc":"")),$I);}}}$Yd=$c->tableName(table_status($b));page_header(($ye?lang(62):lang(39)),$o,array("select"=>array($b,$Yd)),$Yd);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($q
as$D=>$p){if(isset($p["privileges"]["select"])){$pa=convert_field($p);if($_POST["clone"]&&$p["auto_increment"])$pa="''";if($y=="sql"&&ereg("enum|set",$p["type"]))$pa="1*".idf_escape($D);$M[]=($pa?"$pa AS ":"").idf_escape($D);}}$K=array();if($M){$L=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".lang(63)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$q)echo"<p class='error'>".lang(64)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$D=>$p){echo"<tr><th>".$c->fieldName($p);$Wa=$_GET["set"][bracket_escape($D)];$Y=($K!==null?($K[$D]!=""&&$y=="sql"&&ereg("enum|set",$p["type"])?(is_array($K[$D])?array_sum($K[$D]):+$K[$D]):$K[$D]):(!$ye&&$p["auto_increment"]?"":(isset($_GET["select"])?false:($Wa!==null?$Wa:$p["default"]))));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$p);$s=($_POST["save"]?(string)$_POST["function"][$D]:($ye&&$p["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(ereg("time",$p["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$s="now";}input($p,$Y,$s);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".lang(65)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($ye?lang(66):lang(67))."' title='Ctrl+Shift+Enter'>\n";}echo($ye?"<input type='submit' name='delete' value='".lang(68)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ie,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$R=table_status($b);$x=indexes($b);$q=fields($b);$Lb=column_foreign_keys($b);$Qc="";if($R["Oid"]=="t"){$Qc=($y=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($Qc));}parse_str($_COOKIE["adminer_import"],$ka);$Bd=array();$h=array();$be=null;foreach($q
as$z=>$p){$D=$c->fieldName($p);if(isset($p["privileges"]["select"])&&$D!=""){$h[$z]=html_entity_decode(strip_tags($D));if(is_shortable($p))$be=$c->selectLengthProcess();}$Bd+=$p["privileges"];}list($M,$Tb)=$c->selectColumnsProcess($h,$x);$lc=count($Tb)<count($M);$Z=$c->selectSearchProcess($q,$x);$ad=$c->selectOrderProcess($q,$x);$_=$c->selectLimitProcess();$Qb=($M?implode(", ",$M):"*".($Qc?", $Qc":""));if($y=="sql"){foreach($h
as$z=>$X){if($M&&!$M[$z])continue;$pa=convert_field($q[$z]);if($pa)$Qb.=", $pa AS ".idf_escape($z);}}$Qb.="\nFROM ".table($b);$Ub=($Tb&&$lc?"\nGROUP BY ".implode(", ",$Tb):"").($ad?"\nORDER BY ".implode(", ",$ad):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ue=>$K){$pa=convert_field($q[key($K)]);echo$j->result("SELECT".limit(($pa?$pa:idf_escape(key($K)))." FROM ".table($b)," WHERE ".where_check($ue,$q).($Z?" AND ".implode(" AND ",$Z):"").($ad?" ORDER BY ".implode(", ",$ad):""),1));}exit;}if($_POST&&!$o){$Ie="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$nd=$we=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$nd=array_flip($w["columns"]);$we=($M?$nd:array());break;}}foreach((array)$we
as$z=>$X){if(in_array(idf_escape($z),$M))unset($we[$z]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$we===array()){$He=$Z;if(is_array($_POST["check"]))$He[]="($Ie)";$H="SELECT $Qb".($He?"\nWHERE ".implode(" AND ",$He):"").$Ub;}else{$se=array();foreach($_POST["check"]as$X)$se[]="(SELECT".limit($Qb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q).$Ub,1).")";$H=implode(" UNION ALL ",$se);}$c->dumpData($b,"table",$H);exit;}if(!$c->selectEmailProcess($Z,$Lb)){if($_POST["save"]||$_POST["delete"]){$I=true;$la=0;$H=table($b);$O=array();if(!$_POST["delete"]){foreach($h
as$D=>$X){$X=process_input($q[$D]);if($X!==null){if($_POST["clone"])$O[idf_escape($D)]=($X!==false?$X:idf_escape($D));elseif($X!==false)$O[]=idf_escape($D)." = $X";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($b):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Ma="UPDATE";if($_POST["delete"]){$Ma="DELETE";$H="FROM $H";}if($_POST["clone"]){$Ma="INSERT";$H="INTO $H";}if($_POST["all"]||($we===array()&&$_POST["check"])||$lc){$I=queries("$Ma $H".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $Ie"));$la=$j->affected_rows;}else{foreach((array)$_POST["check"]as$X){$I=queries($Ma.limit1($H,"\nWHERE ".where_check($X,$q)));if(!$I)break;$la+=$j->affected_rows;}}}$Hc=lang(69,$la);if($_POST["clone"]&&$I&&$la==1){$uc=last_id();if($uc)$Hc=lang(61," $uc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Hc,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$o=lang(70);else{$I=true;$la=0;foreach($_POST["val"]as$ue=>$K){$O=array();foreach($K
as$z=>$X){$z=bracket_escape($z,1);$O[]=idf_escape($z)." = ".(ereg('char|text',$q[$z]["type"])||$X!=""?$c->processInput($q[$z],$X):"NULL");}$H=table($b)." SET ".implode(", ",$O);$He=" WHERE ".where_check($ue,$q).($Z?" AND ".implode(" AND ",$Z):"");$I=queries("UPDATE".($lc?" $H$He":limit1($H,$He)));if(!$I)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(69,$la),$I);}}elseif(is_string($Cb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$I=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Cb,$Bc);$la=count($Bc[0]);begin();$Jd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Bc[0]as$z=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Jd]*)$Jd~",$X.$Jd,$Cc);if(!$z&&!array_diff($Cc[1],$La)){$La=$Cc[1];$la--;}else{$O=array();foreach($Cc[1]as$t=>$Ja)$O[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$I=insert_update($b,$O,$nd);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(71,$la),$I);queries("ROLLBACK");}else$o=upload_error($Cb);}}$Yd=$c->tableName($R);if(is_ajax())ob_start();page_header(lang(35).": $Yd",$o);$O=null;if(isset($Bd["insert"])){$O="";foreach((array)$_GET["where"]as$X){if(count($Lb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($R,$O);if(!$h)echo"<p class='error'>".lang(72).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($M,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($ad,$h,$x);$c->selectLimitPrint($_);$c->selectLengthPrint($be);$c->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Ob=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$F=floor(max(0,$Ob-1)/$_);}$H=$c->selectQueryBuild($M,$Z,$Tb,$ad,$_,$F);if(!$H)$H="SELECT".limit((+$_&&$Tb&&$lc&&$y=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Qb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Ub,($_!=""?+$_:null),($F?$_*$F:0),"\n");echo$c->selectQuery($H);$I=$j->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($y=="mssql"&&$F)$I->seek($_*$F);$nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($F&&$y=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$Ob=(+$_&&$Tb&&$lc?($y=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".lang(63)."\n";else{$ya=$c->backwardKeys($b,$Yd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(73)."</a>");$Nc=array();$Sb=array();reset($M);$ud=1;foreach($L[0]as$z=>$X){if($z!=$Qc){$X=$_GET["columns"][key($M)];$p=$q[$M?($X?$X["col"]:current($M)):$z];$D=($p?$c->fieldName($p,$ud):"*");if($D!=""){$ud++;$Nc[$z]=$D;$g=idf_escape($z);$bc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($z);$Xa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($bc.($ad[0]==$g||$ad[0]==$z||(!$ad&&$lc&&$Tb[0]==$g)?$Xa:'')).'">';echo(!$M||$X?apply_sql_function($X["fun"],$D):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($bc.$Xa)."' title='".lang(74)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($z)).'\'); return false;" title="'.lang(30).'" class="text jsonly"> =</a>';echo"</span>";}$Sb[$z]=$X["fun"];next($M);}}$xc=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$z=>$X)$xc[$z]=max($xc[$z],min(40,strlen(utf8_decode($X))));}}echo($ya?"<th>".lang(75):"")."</thead>\n";if(is_ajax()){if($_%2==1&&$F%2==1)odd();ob_end_clean();}foreach($c->rowDescriptions($L,$Lb)as$C=>$K){$te=unique_array($L[$C],$x);$ue="";foreach($te
as$z=>$X){if(strlen($X)>64){$z="MD5(".(strpos($z,'(')?$z:idf_escape($z)).")";$X=md5($X);}$ue.="&".($X!==null?urlencode("where[".bracket_escape($z)."]")."=".urlencode($X):"null%5B%5D=".urlencode($z));}echo"<tr".odd().">".(!$Tb&&$M?"":"<td>".checkbox("check[]",substr($ue,1),in_array(substr($ue,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($lc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$ue)."'>".lang(73)."</a>"));foreach($K
as$z=>$X){if(isset($Nc[$z])){$p=$q[$z];if($X!=""&&(!isset($nb[$z])||$nb[$z]!=""))$nb[$z]=(is_mail($X)?$Nc[$z]:"");$A="";$X=$c->editVal($X,$p);if($X!==null){if(ereg('blob|bytea|raw|file',$p["type"])&&$X!="")$A=ME.'download='.urlencode($b).'&field='.urlencode($z).$ue;if($X==="")$X="&nbsp;";elseif($be!=""&&is_shortable($p))$X=shorten_utf8($X,max(0,+$be));else$X=h($X);if(!$A){foreach((array)$Lb[$z]as$r){if(count($Lb[$z])==1||end($r["source"])==$z){$A="";foreach($r["source"]as$t=>$Md)$A.=where_link($t,$r["target"][$t],$L[$C][$Md]);$A=($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$A;if(count($r["source"])==1)break;}}}if($z=="COUNT(*)"){$A=ME."select=".urlencode($b);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$te))$A.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($te
as$nc=>$W)$A.=where_link($t++,$nc,$W);}}if(!$A&&($A=$c->selectLink($K[$z],$p))===null){if(is_mail($K[$z]))$A="mailto:$K[$z]";if($rd=is_url($K[$z]))$A=($rd=="http"&&$aa?$K[$z]:"$rd://www.adminer.org/redirect/?url=".urlencode($K[$z]));}$u=h("val[$ue][".bracket_escape($z)."]");$Y=$_POST["val"][$ue][bracket_escape($z)];$Wb=h($Y!==null?$Y:$K[$z]);$_c=strpos($X,"<i>...</i>");$jb=is_utf8($X)&&$L[$C][$z]==$K[$z]&&!$Sb[$z];$ae=ereg('text|lob',$p["type"]);echo(($_GET["modify"]&&$jb)||$Y!==null?"<td>".($ae?"<textarea name='$u' cols='30' rows='".(substr_count($K[$z],"\n")+1)."'>$Wb</textarea>":"<input name='$u' value='$Wb' size='$xc[$z]'>"):"<td id='$u' onclick=\"selectClick(this, event, ".($_c?2:($ae?1:0)).($jb?"":", '".h(lang(76))."'").");\">".$c->selectVal($X,$A,$p));}}if($ya)echo"<td>";$c->backwardKeysPrint($ya,$L[$C]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Tb&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($L||$F)&&!is_ajax()){$ub=true;if($_GET["page"]!="last"&&+$_&&!$lc&&($Ob>=$_||$F)){$Ob=found_rows($R,$Z);if($Ob<max(1e4,2*($F+1)*$_))$Ob=reset(slow_query("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):"")));else$ub=false;}if(+$_&&($Ob===false||$Ob>$_||$F)){echo"<p class='pages'>";$Dc=($Ob===false?$F+(count($L)>=$_?2:1):floor(($Ob-1)/$_));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(77)."', '".($F+1)."'), event); return false;\">".lang(77)."</a>:",pagination(0,$F).($F>5?" ...":"");for($t=max(1,$F-4);$t<min($Dc,$F+5);$t++)echo
pagination($t,$F);if($Dc>0){echo($F+5<$Dc?" ...":""),($ub&&$Ob!==false?pagination($Dc,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Dc'>".lang(78)."</a>");}echo(($Ob===false?count($L)+1:$Ob-$F*$_)>$_?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$_).', \''.lang(79).'\');">'.lang(80).'</a>':'');}echo"<p>\n",($Ob!==false?"(".($ub?"":"~ ").lang(81,$Ob).") ":""),checkbox("all",1,0,lang(82))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(62),'</legend><div>
<input type="submit" value="',lang(65),'"',($_GET["modify"]?'':' title="'.lang(70).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(62),'">
<input type="submit" name="clone" value="',lang(83),'">
<input type="submit" name="delete" value="',lang(68),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Ob,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Mb=$c->dumpFormat();if($Mb){print_fieldset("export",lang(84));$dd=$c->dumpOutput();echo($dd?html_select("output",$dd,$ka["output"])." ":""),html_select("format",$Mb,$ka["format"])," <input type='submit' name='export' value='".lang(84)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(85),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(85)."'>","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($nb,'strlen'),$h);echo"<p><input type='hidden' name='token' value='$ie'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$j->query("KILL ".(+$_POST["kill"]));elseif(list($Q,$u,$D)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$I=$j->query("SELECT $u, $D FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$u = $_GET[value] OR ":"")."$D LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($t=0;$t<10&&($K=$I->fetch_row());$t++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($u))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($t==10)echo"...\n";}exit;}else{page_header(lang(49),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(86).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(30)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(87).'<td>'.lang(88)."</thead>\n";foreach(table_status()as$Q=>$K){$D=$c->tableName($K);if(isset($K["Engine"])&&$D!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$D</a>";$X=number_format($K["Rows"],0,'.',lang(7));echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($K["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();