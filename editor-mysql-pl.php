<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.4
*/error_reporting(6135);$Bb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Bb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$ae=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($ae)$$V=$ae;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé��a�'3I��d��!S��:4�+Md�g���ǃ���t��c������b{�H(Ɠєt1�)t�}F�p0��8�\\82�DL>�9`'C��ۗ889�� �xQ��\0�e4��Qʘl��P��V��b���T4�\\�W/����\n��` 7\"h�q��4ZM6�T�\r�r\\��C{h�7\r�x67���J��2.3��9�K��H�,�!m�Ɔo\$�.[\r&�#\$�<��f�)�Z�\0=�r��9��jΪJ��0�c,|�=�������Rs_6��ݷ������Z6�2B�p\\-�1s2��>�� X:\rܺ��3�b����-8SL����K.��-�ҥ\rH@ml�:��;�����J�0LR�2�!���A��2�	m���0eI��-:U\r��9��MWL�0��GcJv2(��F9�`�<�J�7+˚~���}DJ��HW�SN���e�u]1̥(O�LЪ<l��R[u&��H�3�v��U�t6��\$�6���X\"�<��}:O��<3x�O�8��>����C���1����HR��S�d�9��%�U1�Sn�a|.�ԁ`�8���:#���C�2��*[o��4Xx�.k\">��A��O+,�x\\5t�цց`\\�o�����%�j��]��n��\\��h�=�z�ê2\$���F[NY����R��[I����7��tҔ��7��(���Wj0���2v}��;�k2��Va���r=��(��,��\r��j*�B(R�2C�N\\����9{a\0ŕ�VR4�B��/z�n�6�������(w�s�s��ǴB[��Mi#:#��U��=M-~����h)��	�p�C�9/,�r�=�s����#Bv���M �t=�@�hs���`k��p.=S�\"��j��&5�u��p#Y������Y	�~)�s4��1naV*��TS��q��6�\"[Lg����B\"|��2��Q�:8ƨ՞�\r�V��4�aj!�.&��Ã�o%0F9\"\$�Dȹ��?'��2B�A�ga�kr�'\$9\rؠ6�`eϻ di��2p\\�\$����pؾCuF����\r[nQ�P�b0i�ٛSnT�#%@��S���OK�(�A��3Q��w2��f�i&0�Rh Fi0��v�g\nA����i�� _3�H�V�A�bn���'i�t��E)��\0r� ;��\0g�3��4��f��x�Qꢷ��M+v��EZ\n�LA��蝠��Y�%�EA��*l�U}��N�F�/����:�1^��l�����95��Q ��a4�Gl����2�c�\r�@�*��=bg����i�A�� iG���#�8�1����OڤL#���!�w9Ad�A�3��=9v��<���� ��pda�Ⱦ�t����wN���W1Q'Ŧ�N�p&�kk\"�h������n��]�Qt��m>�撘�Hu���!5��V��ڢ`[)\r:J�g��n@��ic�s�e2ɺ�\r��Ŵq��גz�hm\r���R�ld��C.-� �Yp�(��\r8��paRt�0'd�B��7a�,�j�{����3,��,h����%r}O��b�.��g4�Ǵ����` <8��3�g\n�g��d87�ƪ��e��aI�p���.�O�#^��W�����k%x,�2��}F��4�,�_�9�6;p�mݽt&���w���//�u�2�`���O ��uD�z^Sf��\r*yv=�%Mu0{p�Yl^�qU�}uiT�;ont�m�	�˻+��\"F�w��߼l�-�yY\0�@");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n:��sa�Pi2\nOgc	�e6L����e7�s)Ћ\r��HG�I���3a��s'c��D�i6�N�����2H��8�uF�R�#����r7�#��v}�@��`Q��o5�a�I��,2O'8�R-q:P��S�(�a��*w�(��%��p�<F)�nx8�zA\"�Z-C�e�V'������s��q��;NF�1䭲9��G�ͦ'0�\r���ȿ�9n`�р�X1�݁G3��t�ee9��:Ne��N��OS�z�c��zl�`5����	�3��y��8.�\r���P��\r�@����\\1\r� �\0�@2j8ؗ=.��� -r�á��0���Q�ꊺh�b����`����^9�q�E!� �7)#���*��Q���\0���1���\"�h�>��������-C \"��X��S`\\���F֬h8�����3��`X:O�,�����)�8��<B�NЃ;>9�8��c�<�#0L����9���?�(�R�#�e=���\n���:*��0�D��9C���@��{ZO����8��i�oV�v�k�Ar�8&����..��cH�E�>�H_h����WU�5��1�r*����^�(�b�xܡY1���&XH�6�ؓ.9�x�P�\r.`v4�������8�4daXV�6�F���E�HH�fc-^=���t��x�Y\r�%��xe���Q�,X=1!�sv�j�kQ2��%�W?��Ů���=�dY&ٓ�VX4�ـ�\\�5���Xì!�}��N�gvڃWY*�Q��i&��l��ѵZ#����Ց\rA�\$e�v5o#ޛ�����5gc3MTC�L>v�H������<`���*�]�_��;%�;��V��i�����4X��'��`����i�j0g�O��ۥ�i���9�ƙےd�F���k/lŞ��n��c<b\n��8�`�H��e�}]\$Ҳ��� �!����C)�\$ ��A��`�\0'���&\0B�!�)���5E)�����o\r��8r`���!2�T��s=�D˩�>\n/�l�����[��ŠP��a�8%���!�1v/��SUcoJ�:�4J+�B���v�J��\r���b{��,|\0��z��c���Y��l�\n��i.��!��)��dm�J����!'��� B\nC\\i\$J�\"���2�+�IkJ���\$����G�y\$#ܲi/�CAb��b�C(�:��UX���2&	�, Q;~/��Ky9��?�\r6��tV���!�6�CP�	hY�E�������l�䏞(ؖT��p'3��C<�dc���?�yC���e0�@&A?�=��%�A:JD&SQ��6R�)A���b`0�@��u9(�!0R\n�F ��� �wC\\����υr��ܙ��#�~��2'\$� :��K�`h��@��Eb�[�~���� T��lf5��BR]�{\"-��\0��L>\r�\$@�\n(&\r��9�\0vh*ɇ��*�X�!_dj�����py������`�jY�wJ�\$�R��(uaM+��n�xs�pU^�Ap`ͤI�H�\n�f�02�)!4a�9	����EwC�����˩ �L�P����Ai�)�p�3�A�u����AI�A�Hu	�!g͕�U����ZU���c�*����M��xf�:��^�Xp+�V�����K�C#+� �Wh�CP!���;�[pn\\%��k\0����,ڨ8�7�xQC\nY\r�b��XvC d\nA�;��lF,_wr�4RP���HA�!�;��&^Ͳ��\"6;����=�#C�sm�J�j�`ˊ�9\\g��\$#Q��Est/\n���\r��rt\$Y�20y�����KG@�z���,�x2�\0¸��[ �=и��dk��@LT�hi�#��Di<���sH���a��\nr��B����`���zW����[�q�-i��ƺך�`W�r�6�nK��m�����5��A؝�aC\nCo\0�g��r�5\"��\$3���͛����ʗt�v\"H4{!�s�G�pM\r���BE�����:i�71F�\\�t�Ҏr��m3��V�d�ז�v��c/\r���Gd_�5V��A�t�O�A?B\r�Lt�>�%�ʼ\$2��̘�*��j��Z]	a.��ה�>��} �C�.٧oI�\r*o��v��wOx�H��&F��w�Y�AzB����G}�0�cTI	��Q�eG%jT��TZ�.(��/A�|�]+�\$��_��6y̹�_�+9���#����X~��g��V��؈r\r�x<��G�'Իʎl�\0�7f��XHQ}He��,K	T�9*�LK�.[�D���>\r��'�i���(�)\"� f���\0000� b��(l��F�.��jr�n��bJ�.�BDk���b�b\r�%��b��q��Db0�PPx���8eRDi��0�Pv+*��F�����k��\$��lP=��j������М0ɶ�\0��pP��4(���p�D��.��NqP�\$H���&1����48\n��#�FU,�����)������ �\r\"e/�ˏк�I�\0��(�h�Ep(�f��o���	�;�	������#��|����9\0�{\"�/d귆���>�B�+v��|�B,V0P�m�H1�e*ZoeB���1\r(�� RLi���U�ʋ`��.����q��n.�d���T7Q���W\0R�ДF�eq�N�1P��~b�*��t��A�r�p���D0���)�SNZ6C� � \nbHI��!g�W0~+MG�,����Y*�HP�H(l�m������׎�<�Jv�]&(���\n-�� ����j��c��2�6`�)r��ХJr��)��u@���\r����J�f�c+��u&VS�2�ror�)R�+@|9��K2�/2�.�0��� �)�P*��ȆM^\rb�0\0�Y\"�\"�Ux��ـ������Q�1\r ~Q@3��43F�Jf�R@Q3�d��5�b\0�@�F�N/�6�	73w7�<@����l2\$ST���\n�RU�2�2Nɫ5�D\r�4��?2��\n\0�\n`�``��� Y1��ob�2��;#\$�I; �뢒�@N�\"B2�Z\n��m���%���������Zx�[1�@,��;�>��>��?#�6C�\0[C�PH�ZĲ�Z�J�[;�9CP�úB�P1����/#vf4`\$Tf2@1�0�\$X\r� a�zjD�;��I�P�\$�{%�1���謊�1o�\"RSJ��K��4�tz��\0�E�>,E��<@WL�N��6\n�&3�R�di\0.r ��Ԋƭ`Q\0003&P��\0001�NXD���b�������\"�ܩ�UQS\rp�����D�K�L̟�\$N��1�f���`�0�U�H���л����ou*+1K�ESW�.��F���E��M����i�&��'T���\rY5��\rO��;\$\"�c������b��R`m��������r�QIieI��hى����Qj� d�'�\"��\n�DYR'T1I���cd����a�Bju��0�G��	�F\$���E�U�p�6LZT��?��\$6Ub#�N��dr��Lp�c+r�er�L6V��.�d h�e�>	���2̸5\0bϤ�Ս\\�\0_Z�^�Y�\rj+�]�����9WgB�b���\0`#�f.�s'6(J���\rf�q	m\n��(l5�,�u�l\$�p+�\\c\nL�����r�,�\r�P8���V�\$ �R/���.1�W��d�F\$�\\��@��0\"�t��W\"67&��hqBavdÀ�I*\$#�w��v��9�`*v9wVX\$V��ebk<�VW@����6�\$F�pDoh�(�eW2KL\0P���+�3�LRt&W\0�\n@�� �N�.���\"#>(��GT�G�]>�jW��r�d�M�3Nb0�of����V\"(�\nM�d�/�!~�3p�v5�XE��8;>�> ׅ�f8f6���opNUv\nBD�>w/7��_r�67�<L�q�s�X�_d�|k��lτ�n�� �	��8.D*�P X��q�x���~k�!�8���Z#��Xʿ�'Y�β�8*(���\"L',��-\$�-�ĿT_!WȿW�^��k���u�;�ʮf�����V(��T�遐&���lN`zN�mj\nm��z������ߔ�*B����j��y������V՘z�M2�B�@��xԿV�܆�� V�����\$��W����Wjd�x�bY%z\"��q�B/#�C^���B\n칔V���O���b�o���#\0����V����8&>7a�,�F���^�'�\"Z�K*6U����g�c���W!��/!V�V��V&}\"qg��S���2�v���\n�F��~�. (f+U�>,�����c��4F7�~�~��&Y�'6��T�x<⧦�t����l�c\n��*&��(�L/cA%2�����4�S�l��ziY)��H\"Z�*�.�1����Gq����X-\$�z�1�W}��}��\r���ׁ�D�=��\ṋSD�{,\r�0рEE���(�\$�:�z�e9#�`{�{:Ջ+�`ˁ�Oq��q�h~�ڿ���k��n��J��%D�oB�4ٮ�y�`��Z}��S�)4(��� U9��9�'F��ڠZ����(���m���");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($Zb){$nc=substr($Zb,-1);return
str_replace($nc.$nc,$nc,substr($Zb,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($ad,$Bb=false){if(get_magic_quotes_gpc()){while(list($u,$V)=each($ad)){foreach($V
as$ic=>$U){unset($ad[$u][$ic]);if(is_array($U)){$ad[$u][stripslashes($ic)]=$U;$ad[]=&$ad[$u][stripslashes($ic)];}else$ad[$u][stripslashes($ic)]=($Bb?$U:stripslashes($U));}}}}function
bracket_escape($Zb,$ra=false){static$Qd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Zb,($ra?array_flip($Qd):$Qd));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($B,$W,$Ba,$lc="",$Jc="",$hc=false){static$q=0;$q++;$J="<input type='checkbox' name='$B' value='".h($W)."'".($Ba?" checked":"").($Jc?' onclick="'.h($Jc).'"':'').($hc?" class='jsonly'":"")." id='checkbox-$q'>";return($lc!=""?"<label for='checkbox-$q'>$J".h($lc)."</label>":$J);}function
optionlist($Nc,$qd=null,$fe=false){$J="";foreach($Nc
as$ic=>$U){$Oc=array($ic=>$U);if(is_array($U)){$J.='<optgroup label="'.h($ic).'">';$Oc=$U;}foreach($Oc
as$u=>$V)$J.='<option'.($fe||is_string($u)?' value="'.h($u).'"':'').(($fe||is_string($u)?(string)$u:$V)===$qd?' selected':'').'>'.h($V);if(is_array($U))$J.='</optgroup>';}return$J;}function
html_select($B,$Nc,$W="",$Ic=true){if($Ic)return"<select name='".h($B)."'".(is_string($Ic)?' onchange="'.h($Ic).'"':"").">".optionlist($Nc,$W)."</select>";$J="";foreach($Nc
as$u=>$V)$J.="<label><input type='radio' name='".h($B)."' value='".h($u)."'".($u==$W?" checked":"").">".h($V)."</label>";return$J;}function
confirm($Na=""){return" onclick=\"return confirm('".'Czy jesteś pewien?'.($Na?" (' + $Na + ')":"")."');\"";}function
print_fieldset($q,$pc,$ie=false,$Jc=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($Jc)."return !toggle('fieldset-$q');\">$pc</a></legend><div id='fieldset-$q'".($ie?"":" class='hidden'").">\n";}function
bold($ya){return($ya?" class='active'":"");}function
odd($J=' class="odd"'){static$p=0;if(!$J)$p=-1;return($p++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($u,$V=null){static$Cb=true;if($Cb)echo"{";if($u!=""){echo($Cb?"":",")."\n\t\"".addcslashes($u,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$Cb=false;}else{echo"\n}\n";$Cb=true;}}function
ini_bool($dc){$V=ini_get($dc);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$g;return$g->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$k="<p class='error'>"){global$g;$Ma=(is_object($h)?$h:$g);$J=array();$I=$Ma->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$J;}function
unique_array($K,$s){foreach($s
as$r){if(ereg("PRIMARY|UNIQUE",$r["type"])){$J=array();foreach($r["columns"]as$u){if(!isset($K[$u]))continue
2;$J[$u]=$K[$u];}return$J;}}$J=array();foreach($K
as$u=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$u))$J[$u]=$V;}return$J;}function
where($X,$m=array()){global$t;$J=array();$Nb='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$X["where"]as$u=>$V){$u=bracket_escape($u,1);$J[]=(preg_match($Nb,$u)?$u:idf_escape($u)).(($t=="sql"&&ereg('\\.',$V))||$t=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$u],exact_value($V)));}foreach((array)$X["null"]as$u)$J[]=idf_escape($u)." IS NULL";return
implode(" AND ",$J);}function
where_check($V,$m=array()){parse_str($V,$Aa);remove_slashes(array(&$Aa));return
where($Aa,$m);}function
where_link($p,$e,$W,$Lc="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($W!==null?$Lc:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($W);}function
cookie($B,$W){global$aa;$Sc=array($B,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Sc[]=true;return
call_user_func_array('setcookie',$Sc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($u){return$_SESSION[$u][DRIVER][SERVER][$_GET["username"]];}function
set_session($u,$V){$_SESSION[$u][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($cb,$N,$T,$i=null){global$db;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($db))."|username|".($i!==null?"db|":"").session_name()),$y);return"$y[1]?".(sid()?SID."&":"").($cb!="server"||$N!=""?urlencode($cb)."=".urlencode($N)."&":"")."username=".urlencode($T).($i!=""?"&db=".urlencode($i):"").($y[2]?"&$y[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($x,$_=null){if($_!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($x!==null?$x:$_SERVER["REQUEST_URI"]))][]=$_;}if($x!==null){if($x=="")$x=".";header("Location: $x");exit;}}function
query_redirect($H,$x,$_,$fd=true,$ub=true,$xb=false){global$g,$k,$b;if($ub)$xb=!$g->query($H);$wd="";if($H)$wd=$b->messageQuery("$H;");if($xb){$k=error().$wd;return
false;}if($fd)redirect($x,$_.$wd);return
true;}function
queries($H=null){global$g;static$dd=array();if($H===null)return
implode(";\n",$dd);$dd[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H);return$g->query($H);}function
apply_queries($H,$Gd,$qb='table'){foreach($Gd
as$R){if(!queries("$H ".$qb($R)))return
false;}return
true;}function
queries_redirect($x,$_,$fd){return
query_redirect(queries(),$x,$_,$fd,false,!$fd);}function
remove_from_uri($Rc=""){return
substr(preg_replace("~(?<=[?&])($Rc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Ra){return" ".($E==$Ra?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($u,$Ua=false){$zb=$_FILES[$u];if(!$zb||$zb["error"])return$zb["error"];$J=file_get_contents($Ua&&ereg('\\.gz$',$zb["name"])?"compress.zlib://$zb[tmp_name]":($Ua&&ereg('\\.bz2$',$zb["name"])?"compress.bzip2://$zb[tmp_name]":$zb["tmp_name"]));if($Ua){$xd=substr($J,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$xd,$gd))$J=iconv("utf-16","utf-8",$J);elseif($xd=="\xEF\xBB\xBF")$J=substr($J,3);}return$J;}function
upload_error($k){$wc=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Wgranie pliku było niemożliwe.'.($wc?" ".sprintf('Maksymalna wielkość pliku to %sB.',$wc):""):'Plik nie istnieje.');}function
repeat_pattern($G,$qc){return
str_repeat("$G{0,65535}",$qc/65535)."$G{0,".($qc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($P,$qc=80,$Cd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$qc).")($)?)u",$P,$y))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$qc).")($)?)",$P,$y);return
h($y[1]).$Cd.(isset($y[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($ad,$bc=array()){while(list($u,$V)=each($ad)){if(is_array($V)){foreach($V
as$ic=>$U)$ad[$u."[$ic]"]=$U;}elseif(!in_array($u,$bc))echo'<input type="hidden" name="'.h($u).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$b;$J=array();foreach($b->foreignKeys($R)as$Hb){foreach($Hb["source"]as$V)$J[$V][]=$Hb;}return$J;}function
enum_input($Td,$c,$l,$W,$mb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$z);$J=($mb!==null?"<label><input type='$Td'$c value='$mb'".((is_array($W)?in_array($mb,$W):$W===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($z[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?$W==$p+1:(is_array($W)?in_array($p+1,$W):$W===$V));$J.=" <label><input type='$Td'$c value='".($p+1)."'".($Ba?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$J;}function
input($l,$W,$o){global$g,$Vd,$b,$t;$B=h(bracket_escape($l["field"]));echo"<td class='function'>";$jd=($t=="mssql"&&$l["auto_increment"]);if($jd&&!$_POST["save"])$o=null;$Ob=(isset($_GET["select"])||$jd?array("orig"=>'bez zmian'):array())+$b->editFunctions($l);$c=" name='fields[$B]'";if($l["type"]=="enum")echo
nbsp($Ob[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Cb=0;foreach($Ob
as$u=>$V){if($u===""||!$V)break;$Cb++;}$Ic=($Cb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Cb > f.selectedIndex) f.selectedIndex = $Cb;\"":"");$c.=$Ic;echo(count($Ob)>1?html_select("function[$B]",$Ob,$o===null||in_array($o,$Ob)||isset($Ob[$o])?$o:"","functionChange(this);"):nbsp(reset($Ob))).'<td>';$fc=$b->editInput($_GET["edit"],$l,$c,$W);if($fc!="")echo$fc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$z);foreach($z[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?($W>>$p)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$B][$p]' value='".(1<<$p)."'".($Ba?' checked':'')."$Ic>".h($b->editVal($V,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'$Ic>";elseif(($Id=ereg('text|lob',$l["type"]))||ereg("\n",$W)){if($Id&&$t!="sqlite")$c.=" cols='50' rows='12'";else{$L=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}else{$yc=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$y)?((ereg("binary",$l["type"])?2:1)*$y[1]+($y[3]?1:0)+($y[2]&&!$l["unsigned"]?1:0)):($Vd[$l["type"]]?$Vd[$l["type"]]+($l["unsigned"]?0:1):0));if($g->server_info>=5.6&&ereg('time',$l["type"]))$yc+=7;echo"<input".(ereg('int',$l["type"])?" type='number'":"")." value='".h($W)."'".($yc?" maxlength='$yc'":"").(ereg('char|binary',$l["type"])&&$yc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$Zb=bracket_escape($l["field"]);$o=$_POST["function"][$Zb];$W=$_POST["fields"][$Zb];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$zb=get_file("fields-$Zb");if(!is_string($zb))return
false;return
q($zb);}return$b->processInput($l,$W,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Kb=false;foreach(table_status()as$R=>$S){$B=$b->tableName($S);if(isset($S["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$I||$I->fetch_row()){if(!$Kb){echo"<ul>\n";$Kb=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>\n":"$B: <span class='error'>".error()."</span>\n");}}}echo($Kb?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($Yb,$Ac=false){global$b;$J=$b->dumpHeaders($Yb,$Ac);$Qc=$_POST["output"];if($Qc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Yb).".$J".($Qc!="file"&&!ereg('[^0-9a-z]',$Qc)?".$Qc":""));session_write_close();return$J;}function
dump_csv($K){foreach($K
as$u=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$K[$u]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file(){$ab=ini_get("upload_tmp_dir");if(!$ab){if(function_exists('sys_get_temp_dir'))$ab=sys_get_temp_dir();else{$_b=@tempnam("","");if(!$_b)return
false;$ab=dirname($_b);unlink($_b);}}$_b="$ab/adminer.key";$J=@file_get_contents($_b);if($J)return$J;$Lb=@fopen($_b,"w");if($Lb){$J=md5(uniqid(mt_rand(),true));fwrite($Lb,$J);fclose($Lb);}return$J;}function
is_mail($jb){$na='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$G="$na+(\\.$na+)*@($bb?\\.)+$bb";return
preg_match("(^$G(,\\s*$G)*\$)i",$jb);}function
is_url($P){$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($bb?\\.)+$bb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$y)?strtolower($y[1]):"");}function
is_shortable($l){return
ereg('char|text|lob|geometry|point|linestring|polygon',$l["type"]);}function
slow_query($H){global$b,$Pd;$i=$b->database();if(support("kill")&&is_object($h=connect())&&($i==""||$h->select_db($i))){$kc=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$Pd,'&kill=',$kc,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
lzw_decompress($wa){$Za=256;$xa=8;$Ea=array();$kd=0;$ld=0;for($p=0;$p<strlen($wa);$p++){$kd=($kd<<8)+ord($wa[$p]);$ld+=8;if($ld>=$xa){$ld-=$xa;$Ea[]=$kd>>$ld;$kd&=(1<<$ld)-1;$Za++;if($Za>>$xa)$xa++;}}$Ya=range("\0","\xFF");$J="";foreach($Ea
as$p=>$Da){$ib=$Ya[$Da];if(!isset($ib))$ib=$me.$me[0];$J.=$ib;if($p)$Ya[]=$me.$ib[0];$me=$ib;}return$J;}global$b,$g,$db,$gb,$ob,$k,$Ob,$Rb,$aa,$ec,$t,$ba,$mc,$Hc,$Uc,$_d,$Pd,$Sd,$Vd,$ce,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Sc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Sc[]=true;call_user_func_array('session_set_cookie_params',$Sc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Bb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($Rd,$Ec){$Wc=($Ec==1?0:($Ec%10>1&&$Ec%10<5&&$Ec/10%10!=1?1:2));$Rd=str_replace("%d","%s",$Rd[$Wc]);$Ec=number_format($Ec,0,".",' ');return
sprintf($Rd,$Ec);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$Wc=array_search("",$b->operators);if($Wc!==false)unset($b->operators[$Wc]);}function
dsn($eb,$T,$F,$tb='auth_error'){set_exception_handler($tb);parent::__construct($eb,$T,$F);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$Wd=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$db=array();$db=array("server"=>"MySQL")+$db;if(!defined("DRIVER")){$Xc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$T,$F){mysqli_report(MYSQLI_REPORT_OFF);list($Wb,$Vc)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$Wb:ini_get("mysqli.default_host")),($N.$T!=""?$T:ini_get("mysqli.default_user")),($N.$T.$F!=""?$F:ini_get("mysqli.default_pw")),null,(is_numeric($Vc)?$Vc:ini_get("mysqli.default_port")),(!is_numeric($Vc)?$Vc:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$l];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$T,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$T"!=""?$T:ini_get("mysql.default_user")),("$N$T$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Sa){return
mysql_select_db($Sa,$this->_link);}function
query($H,$Wd=false){$I=@($Wd?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$l=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$l);}}class
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
connect($N,$T,$F){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$T,$F);$this->query("SET NAMES utf8");return
true;}function
select_db($Sa){return$this->query("USE ".idf_escape($Sa));}function
query($H,$Wd=false){$this->setAttribute(1000,!$Wd);return
parent::query($H,$Wd);}}}function
idf_escape($Zb){return"`".str_replace("`","``",$Zb)."`";}function
table($Zb){return
idf_escape($Zb);}function
connect(){global$b;$g=new
Min_DB;$Qa=$b->credentials();if($g->connect($Qa[0],$Qa[1],$Qa[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($nd=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$nd;return$J;}function
get_databases($Db){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Db?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$X,$v,$Fc=0,$sd=" "){return" $H$X".($v!==null?$sd."LIMIT $v".($Fc?" OFFSET $Fc":""):"");}function
limit1($H,$X){return
limit($H,$X,1);}function
db_collation($i,$Ha){global$g;$J=null;$Oa=$g->result("SHOW CREATE DATABASE ".idf_escape($i),1);if(preg_match('~ COLLATE ([^ ]+)~',$Oa,$y))$J=$y[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Oa,$y))$J=$Ha[$y[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Ta){$J=array();foreach($Ta
as$i)$J[$i]=count(get_vals("SHOW TABLES IN ".idf_escape($i)));return$J;}function
table_status($B=""){$J=array();foreach(get_rows("SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Rows"]))$K["Comment"]="";if($B!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return!isset($S["Rows"]);}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$y);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$y[1],"length"=>$y[2],"unsigned"=>ltrim($y[3].$y[4]),"default"=>($K["Default"]!=""||ereg("char|set",$y[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$y)?$y[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];}return$J;}function
foreign_keys($R){global$g,$Hc;static$G='`(?:[^`]|``)+`';$J=array();$Pa=$g->result("SHOW CREATE TABLE ".table($R),1);if($Pa){preg_match_all("~CONSTRAINT ($G) FOREIGN KEY \\(((?:$G,? ?)+)\\) REFERENCES ($G)(?:\\.($G))? \\(((?:$G,? ?)+)\\)(?: ON DELETE ($Hc))?(?: ON UPDATE ($Hc))?~",$Pa,$z,PREG_SET_ORDER);foreach($z
as$y){preg_match_all("~$G~",$y[2],$vd);preg_match_all("~$G~",$y[5],$Hd);$J[idf_unescape($y[1])]=array("db"=>idf_unescape($y[4]!=""?$y[3]:$y[4]),"table"=>idf_unescape($y[4]!=""?$y[4]:$y[3]),"source"=>array_map('idf_unescape',$vd[0]),"target"=>array_map('idf_unescape',$Hd[0]),"on_delete"=>($y[6]?$y[6]:"RESTRICT"),"on_update"=>($y[7]?$y[7]:"RESTRICT"),);}}return$J;}function
view($B){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$u=>$V)asort($J[$u]);return$J;}function
information_schema($i){global$g;return($g->server_info>=5&&$i=="information_schema")||($g->server_info>=5.5&&$i=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$gd))return$gd[1]-1;}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($i,$Ga){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($i).($Ga?" COLLATE ".q($Ga):""));}function
drop_databases($Ta){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ta,'idf_escape');}function
rename_database($B,$Ga){if(create_database($B,$Ga)){$hd=array();foreach(tables_list()as$R=>$Td)$hd[]=table($R)." TO ".idf_escape($B).".".table($R);if(!$hd||queries("RENAME TABLE ".implode(", ",$hd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$qa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$r){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$r["columns"],true)){$qa="";break;}if($r["type"]=="PRIMARY")$qa=" UNIQUE";}}return" AUTO_INCREMENT$qa";}function
alter_table($R,$B,$m,$Eb,$Ka,$nb,$Ga,$pa,$Tc){$la=array();foreach($m
as$l)$la[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$la=array_merge($la,$Eb);$yd="COMMENT=".q($Ka).($nb?" ENGINE=".q($nb):"").($Ga?" COLLATE ".q($Ga):"").($pa!=""?" AUTO_INCREMENT=$pa":"").$Tc;if($R=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$la)."\n) $yd");if($R!=$B)$la[]="RENAME TO ".table($B);$la[]=$yd;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$la));}function
alter_indexes($R,$la){foreach($la
as$u=>$V)$la[$u]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($R).implode(",",$la));}function
truncate_tables($Gd){return
apply_queries("TRUNCATE TABLE",$Gd);}function
drop_views($he){return
queries("DROP VIEW ".implode(", ",array_map('table',$he)));}function
drop_tables($Gd){return
queries("DROP TABLE ".implode(", ",array_map('table',$Gd)));}function
move_tables($Gd,$he,$Hd){$hd=array();foreach(array_merge($Gd,$he)as$R)$hd[]=table($R)." TO ".idf_escape($Hd).".".table($R);return
queries("RENAME TABLE ".implode(", ",$hd));}function
copy_tables($Gd,$he,$Hd){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Gd
as$R){$B=($Hd==DB?table("copy_$R"):idf_escape($Hd).".".table($R));if(!queries("DROP TABLE IF EXISTS $B")||!queries("CREATE TABLE $B LIKE ".table($R))||!queries("INSERT INTO $B SELECT * FROM ".table($R)))return
false;}foreach($he
as$R){$B=($Hd==DB?table("copy_$R"):idf_escape($Hd).".".table($R));$ge=view($R);if(!queries("DROP VIEW IF EXISTS $B")||!queries("CREATE VIEW $B AS $ge[select]"))return
false;}return
true;}function
trigger($B){if($B=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$Td){global$g,$ob,$ec,$Vd;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ud="((".implode("|",array_merge(array_keys($Vd),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$ob)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$G="\\s*(".($Td=="FUNCTION"?"":$ec).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ud";$Oa=$g->result("SHOW CREATE $Td ".idf_escape($B),2);preg_match("~\\(((?:$G\\s*,?)*)\\)\\s*".($Td=="FUNCTION"?"RETURNS\\s+$Ud\\s+":"")."(.*)~is",$Oa,$y);$m=array();preg_match_all("~$G\\s*,?~is",$y[1],$z,PREG_SET_ORDER);foreach($z
as$Rc){$B=str_replace("``","`",$Rc[2]).$Rc[3];$m[]=array("field"=>$B,"type"=>strtolower($Rc[5]),"length"=>preg_replace_callback("~$ob~s",'normalize_enum',$Rc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Rc[8] $Rc[7]"))),"null"=>1,"full_type"=>$Rc[4],"inout"=>strtoupper($Rc[1]),"collation"=>strtolower($Rc[9]),);}if($Td!="FUNCTION")return
array("fields"=>$m,"definition"=>$y[11]);return
array("fields"=>$m,"returns"=>array("type"=>$y[12],"length"=>$y[13],"unsigned"=>$y[15],"collation"=>$y[16]),"definition"=>$y[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$O){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($R,$O,$Yc){foreach($O
as$u=>$V)$O[$u]="$u = $V";$de=implode(", ",$O);return
queries("INSERT INTO ".table($R)." SET $de ON DUPLICATE KEY UPDATE $de");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info?"PARTITIONS ":"").$H);}function
found_rows($S,$X){return($X||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($od){return
true;}function
create_sql($R,$pa){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$pa)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Sa){return"USE ".idf_escape($Sa);}function
trigger_sql($R,$Ad){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")),null,"-- ")as$K)$J.="\n".($Ad=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$J){if(ereg("binary",$l["type"]))$J="UNHEX($J)";if(ereg("geometry|point|linestring|polygon",$l["type"]))$J="GeomFromText($J)";return$J;}function
support($yb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$yb);}$t="sql";$Vd=array();$_d=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometria'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$u=>$V){$Vd+=$V;$_d[$u]=array_keys($V);}$ce=array("unsigned","zerofill","unsigned zerofill");$Mc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Ob=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Rb=array("avg","count","count distinct","group_concat","max","min","sum");$gb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.6.4";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Edytor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$Ta=$this->databases(false);return(!$Ta?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Ta[(information_schema($Ta[0])?1:0)]);}function
databases($Db=true){return
get_databases($Db);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Użytkownik<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Hasło<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Zaloguj się'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Zapamiętaj sesję')."\n";}function
login($sc,$F){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Ed){return
h($Ed["Comment"]!=""?$Ed["Comment"]:$Ed["Name"]);}function
fieldName($l,$C=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Ed,$O=""){$a=$Ed["Name"];if($O!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$O).'">'.'Nowy rekord'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Dd){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$u=>$V){$B=$this->tableName(table_status($u));if($B!=""){$pd=preg_quote($Dd);$sd="(:|\\s*-)?\\s+";$J[$u]["name"]=(preg_match("(^$pd$sd(.+)|^(.+?)$sd$pd\$)iu",$B,$y)?$y[2].$y[3]:$B);}else
unset($J[$u]);}return$J;}function
backwardKeysPrint($ta,$K){foreach($ta
as$R=>$sa){foreach($sa["keys"]as$Ia){$w=ME.'select='.urlencode($R);$p=0;foreach($Ia
as$e=>$V)$w.=where_link($p++,$e,$K[$V]);echo"<a href='".h($w)."'>".h($sa["name"])."</a>";$w=ME.'edit='.urlencode($R);foreach($Ia
as$e=>$V)$w.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($K[$V]);echo"<a href='".h($w)."' title='".'Nowy rekord'."'>+</a> ";}}}function
selectQuery($H){return"<!--\n".str_replace("--","--><!-- ",$H)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(ereg("varchar|character varying",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($L,$Gb){$J=$L;foreach($L[0]as$u=>$V){if(list($R,$q,$B)=$this->_foreignColumn($Gb,$u)){$ac=array();foreach($L
as$K)$ac[$K[$u]]=exact_value($K[$u]);$Xa=$this->_values[$R];if(!$Xa)$Xa=get_key_vals("SELECT $q, $B FROM ".table($R)." WHERE $q IN (".implode(", ",$ac).")");foreach($L
as$A=>$K){if(isset($K[$u]))$J[$A][$u]=(string)$Xa[$K[$u]];}}}return$J;}function
selectLink($V,$l){}function
selectVal($V,$w,$l){$J=($V===null?"&nbsp;":$V);$w=h($w);if(ereg('blob|bytea',$l["type"])&&!is_utf8($V)){$J=lang(array('%d bajt','%d bajty','%d bajtów'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$J="<img src='$w' alt='$J'>";}if(like_bool($l)&&$J!="&nbsp;")$J=($V?'tak':'nie');if($w)$J="<a href='$w'>$J</a>";if(!$w&&!like_bool($l)&&ereg('int|float|double|decimal',$l["type"]))$J="<div class='number'>$J</div>";elseif(ereg('date',$l["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($V,$l){if(ereg('date|timestamp',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);return$V;}function
selectColumnsPrint($M,$f){}function
selectSearchPrint($X,$f,$s){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Szukaj'."</legend><div>\n";$jc=array();foreach($X
as$u=>$V)$jc[$V["col"]]=$u;$p=0;$m=fields($_GET["select"]);foreach($f
as$B=>$Wa){$l=$m[$B];if(ereg("enum",$l["type"])||like_bool($l)){$u=$jc[$B];$p--;echo"<div>".h($Wa)."<input type='hidden' name='where[$p][col]' value='".h($B)."'>:",(like_bool($l)?" <select name='where[$p][val]'>".optionlist(array(""=>"",'nie','tak'),$X[$u]["val"],true)."</select>":enum_input("checkbox"," name='where[$p][val][]'",$l,(array)$X[$u]["val"],($l["null"]?0:null))),"</div>\n";unset($f[$B]);}elseif(is_array($Nc=$this->_foreignKeyOptions($_GET["select"],$B))){if($m[$B]["null"])$Nc[0]='('.'puste'.')';$u=$jc[$B];$p--;echo"<div>".h($Wa)."<input type='hidden' name='where[$p][col]' value='".h($B)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($Nc,$X[$u]["val"],true)."</select></div>\n";unset($f[$B]);}}$p=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$p][val]' value='".h($V["val"])."' onsearch='selectSearch(this);'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'gdziekolwiek'.")".optionlist($f,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$p][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($C,$f,$s){$Pc=array();foreach($s
as$u=>$r){$C=array();foreach($r["columns"]as$V)$C[]=$f[$V];if(count(array_filter($C,'strlen'))>1&&$u!="PRIMARY")$Pc[$u]=implode(", ",$C);}if($Pc){echo'<fieldset><legend>'.'Sortuj'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Pc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($v){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$v),"</div></fieldset>\n";}function
selectLengthPrint($Jd){}function
selectActionPrint($s){echo"<fieldset><legend>".'Czynność'."</legend><div>","<input type='submit' value='".'pokaż'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($kb,$f){if($kb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Nadawca'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Temat'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Dodaj'."'>\n";echo"<p>".'Załączniki'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($kb)==1?'<input type="hidden" name="email_field" value="'.h(key($kb)).'">':html_select("email_field",$kb)),"<input type='submit' name='email' value='".'Wyślij'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$s){return
array(array(),array());}function
selectSearchProcess($m,$s){$J=array();foreach((array)$_GET["where"]as$u=>$X){$Fa=$X["col"];$Kc=$X["op"];$V=$X["val"];if(($u<0?"":$Fa).$V!=""){$La=array();foreach(($Fa!=""?array($Fa=>$m[$Fa]):$m)as$B=>$l){if($Fa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$l["type"])){$B=idf_escape($B);if($Fa!=""&&$l["type"]=="enum")$La[]=(in_array(0,$V)?"$B IS NULL OR ":"")."$B IN (".implode(", ",array_map('intval',$V)).")";else{$Kd=ereg('char|text|enum|set',$l["type"]);$W=$this->processInput($l,(!$Kc&&$Kd&&ereg('^[^%]+$',$V)?"%$V%":$V));$La[]=$B.($W=="NULL"?" IS".($Kc==">="?" NOT":"")." $W":(in_array($Kc,$this->operators)||$Kc=="="?" $Kc $W":($Kd?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($u<0&&$V=="0")$La[]="$B IS NULL";}}}$J[]=($La?"(".implode(" OR ",$La).")":"0");}}return$J;}function
selectOrderProcess($m,$s){$cc=$_GET["index_order"];if($cc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($cc!=""?array($s[$cc]):$s)as$r){if($cc!=""||$r["type"]=="INDEX"){$Wa=false;foreach($r["columns"]as$V){if(ereg('date|timestamp',$m[$V]["type"])){$Wa=true;break;}}$J=array();foreach($r["columns"]as$V)$J[]=idf_escape($V).($Wa?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Gb){if($_POST["email_append"])return
true;if($_POST["email"]){$rd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Bd=$_POST["email_subject"];$_=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Bd.$_",$z);$L=get_rows("SELECT DISTINCT $l".($z[1]?", ".implode(", ",array_map('idf_escape',array_unique($z[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($L,$Gb)as$K){$id=array('{\\'=>'{');foreach($z[1]as$V)$id['{$'."$V}"]=$this->editVal($K[$V],$m[$V]);$jb=$K[$_POST["email_field"]];if(is_mail($jb)&&send_mail($jb,strtr($Bd,$id),strtr($_,$id),$_POST["email_from"],$_FILES["email_files"]))$rd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),$rd));}return
false;}function
selectQueryBuild($M,$X,$Pb,$C,$v,$E){return"";}function
messageQuery($H){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n-->";}function
editFunctions($l){$J=array();if($l["null"]&&ereg('blob',$l["type"]))$J["NULL"]='puste';$J[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(ereg('date|time',$l["type"]))$J["now"]='teraz';if(eregi('_(md5|sha1)$',$l["field"],$y))$J[]=strtolower($y[1]);return$J;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'bez zmian'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Nc=$this->_foreignKeyOptions($R,$l["field"],$W);if($Nc!==null)return(is_array($Nc)?"<select$c>".optionlist($Nc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Nc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$Vb="";if(ereg('time',$l["type"]))$Vb='HH:MM:SS';if(ereg('date|timestamp',$l["type"]))$Vb='d.m.[rrrr]'.($Vb?" [$Vb]":"");if($Vb)return"<input value='".h($W)."'$c> ($Vb)";if(eregi('_(md5|sha1)$',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$J=$W;if(ereg('date|timestamp',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$y))$J=($y["p1"]!=""?$y["p1"]:($y["p2"]!=""?($y["p2"]<70?20:19).$y["p2"]:gmdate("Y")))."-$y[p3]$y[p4]-$y[p5]$y[p6]".end($y);$J=($l["type"]=="bit"&&ereg('^[0-9]+$',$W)?$J:q($J));if($W==""&&like_bool($l))$J="0";elseif($W==""&&($l["null"]||!ereg('char|text',$l["type"])))$J="NULL";elseif(ereg('^(md5|sha1)$',$o))$J="$o($J)";return
unconvert_field($l,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($i){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Ad,$H){global$g;$I=$g->query($H,1);if($I){while($K=$I->fetch_assoc()){if($Ad=="table"){dump_csv(array_keys($K));$Ad="INSERT";}dump_csv($K);}}}function
dumpFilename($Yb){return
friendly_url($Yb);}function
dumpHeaders($Yb,$Ac=false){$vb="csv";header("Content-Type: text/csv; charset=utf-8");return$vb;}function
homepage(){return
true;}function
navigation($_c){global$ca,$Pd;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($_c=="auth"){$Cb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$F){if($F!==null){if($Cb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Cb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'puste'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Wyloguj" id="logout">
<input type="hidden" name="token" value="',$Pd,'">
</p>
</form>
';$this->databasesPrint($_c);if($_c!="db"&&$_c!="ns"){$S=table_status();if(!$S)echo"<p class='message'>".'Brak tabel.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($_c){}function
tablesPrint($Gd){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Gd
as$K){$B=$this->tableName($K);if(isset($K["Engine"])&&$B!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"])." title='".'Pokaż dane'."'>$B</a><br>\n";}}function
_foreignColumn($Gb,$e){foreach((array)$Gb[$e]as$Fb){if(count($Fb["source"])==1){$B=$this->rowDescription($Fb["table"]);if($B!=""){$q=idf_escape($Fb["target"][0]);return
array($Fb["table"],$q,$B);}}}}function
_foreignKeyOptions($R,$e,$W=null){global$g;if(list($Hd,$q,$B)=$this->_foreignColumn(column_foreign_keys($R),$e)){$J=&$this->_values[$Hd];if($J===null){$S=table_status($Hd);$J=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $q, $B FROM ".table($Hd)." ORDER BY 2"));}if(!$J&&$W!==null)return$g->result("SELECT $B FROM ".table($Hd)." WHERE $q = ".q($W));return$J;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Ld,$k="",$_a=array(),$Md=""){global$ba,$b,$g,$db;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Nd=$Ld.($Md!=""?": ".h($Md):"");$Od=strip_tags($Nd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Od,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.4",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.4",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.4",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.4",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($_a!==null){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($w?$w:".").'">'.$db[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Serwer');if($_a===false)echo"$N\n";else{echo"<a href='".($w?h($w):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_a)))echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($_a)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($_a
as$u=>$V){$Wa=(is_array($V)?$V[1]:$V);if($Wa!="")echo'<a href="'.h(ME."$u=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Wa).'</a> &raquo; ';}}echo"$Ld\n";}}echo"<h2>$Nd</h2>\n";restart_session();$ee=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$zc=$_SESSION["messages"][$ee];if($zc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$zc)."</div>\n";unset($_SESSION["messages"][$ee]);}$Ta=&get_session("dbs");if(DB!=""&&$Ta&&!in_array(DB,$Ta,true))$Ta=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($_c=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($_c);echo'</div>
';}function
int32($A){while($A>=2147483648)$A-=4294967296;while($A<=-2147483649)$A+=4294967296;return(int)$A;}function
long2str($U,$je){$nd='';foreach($U
as$V)$nd.=pack('V',$V);if($je)return
substr($nd,0,end($U));return$nd;}function
str2long($nd,$je){$U=array_values(unpack('V*',str_pad($nd,4*ceil(strlen($nd)/4),"\0")));if($je)$U[]=strlen($nd);return$U;}function
xxtea_mx($Z,$Y,$Q,$ic){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($Q^$Y)+($ic^$Z));}function
encrypt_string($zd,$u){if($zd=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($zd,true);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$cd=floor(6+52/($A+1));$Q=0;while($cd-->0){$Q=int32($Q+0x9E3779B9);$fb=$Q>>2&3;for($D=0;$D<$A;$D++){$Y=$U[$D+1];$Bc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Z=int32($U[$D]+$Bc);$U[$D]=$Z;}$Y=$U[0];$Bc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Z=int32($U[$A]+$Bc);$U[$A]=$Z;}return
long2str($U,false);}function
decrypt_string($zd,$u){if($zd=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($zd,false);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$cd=floor(6+52/($A+1));$Q=int32($cd*0x9E3779B9);while($Q){$fb=$Q>>2&3;for($D=$A;$D>0;$D--){$Z=$U[$D-1];$Bc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Y=int32($U[$D]-$Bc);$U[$D]=$Y;}$Z=$U[$A];$Bc=xxtea_mx($Z,$Y,$Q,$u[$D&3^$fb]);$Y=int32($U[0]-$Bc);$U[0]=$Y;$Q=int32($Q-0x9E3779B9);}return
long2str($U,true);}$g='';$Pd=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Uc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($u)=explode(":",$V);$Uc[$u]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$u=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$Zc=$b->permanentLogin();$Uc[$u]="$u:".base64_encode($Zc?encrypt_string($d["password"],$Zc):"");cookie("adminer_permanent",implode(" ",$Uc));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($Pd&&$_POST["token"]!=$Pd){page_header('Wyloguj','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$u)set_session($u,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyślnie.');}}elseif($Uc&&!$_SESSION["pwds"]){session_regenerate_id();$Zc=$b->permanentLogin();foreach($Uc
as$u=>$V){list(,$Ca)=explode(":",$V);list($cb,$N,$T,$i)=array_map('base64_decode',explode("-",$u));$_SESSION["pwds"][$cb][$N][$T]=decrypt_string(base64_decode($Ca),$Zc);$_SESSION["db"][$cb][$N][$T][$i]=true;}}function
unset_permanent(){global$Uc;foreach($Uc
as$u=>$V){list($cb,$N,$T,$i)=array_map('base64_decode',explode("-",$u));if($cb==DRIVER&&$N==SERVER&&$T==$_GET["username"]&&$i==DB)unset($Uc[$u]);}cookie("adminer_permanent",implode(" ",$Uc));}function
auth_error($sb=null){global$g,$b,$Pd;$ud=session_name();$k="";if(!$_COOKIE[$ud]&&$_GET[$ud]&&ini_bool("session.use_only_cookies"))$k='Wymagana jest obsługa sesji w PHP.';elseif(isset($_GET["username"])){if(($_COOKIE[$ud]||$_GET[$ud])&&!$Pd)$k='Sesja wygasła, zaloguj się ponownie.';else{$F=&get_session("pwds");if($F!==null){$k=h($sb?$sb->getMessage():(is_string($g)?$g:'Nieprawidłowe dane logowania.'));$F=null;}unset_permanent();}}page_header('Zaloguj się',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Brak rozszerzenia',sprintf('Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.',implode(", ",$Xc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Pd=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$Pd;$k='';if($_POST){if($_POST["token"]!=$Pd){$dc="max_input_vars";$xc=ini_get($dc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$u){$V=ini_get($u);if($V&&(!$xc||$V<$xc)){$dc=$u;$xc=$V;}}}$k=(!$_POST["token"]&&$xc?sprintf('Przekroczono maksymalną liczbę pól. Zwiększ %s.',"'$dc'"):'Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST")$k=sprintf('Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.',"'post_max_size'");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$g->select_db($b->database());function
email_header($Tb){return"=?UTF-8?B?".base64_encode($Tb)."?=";}function
send_mail($jb,$Bd,$_,$Mb="",$Ab=array()){$j=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$_=str_replace("\n",$j,wordwrap(str_replace("\r","","$_\n")));$za=uniqid("boundary");$oa="";foreach((array)$Ab["error"]as$u=>$V){if(!$V)$oa.="--$za$j"."Content-Type: ".str_replace("\n","",$Ab["type"][$u]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Ab["name"][$u])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Ab["tmp_name"][$u])),76,$j).$j;}$va="";$Ub="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($oa){$oa.="--$za--$j";$va="--$za$j$Ub$j$j";$Ub="Content-Type: multipart/mixed; boundary=\"$za\"";}$Ub.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Mb?$j."From: ".str_replace("\n","",$Mb):"");return
mail($jb,email_header($Bd),$va.$_.$oa,$Ub);}function
like_bool($l){return
ereg("bool|(tinyint|bit)\\(1\\)",$l["full_type"]);}$Hc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$db[DRIVER]='Zaloguj się';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$de=(isset($_GET["select"])?$_POST["edit"]:$X);foreach($m
as$B=>$l){if(!isset($l["privileges"][$de?"update":"insert"])||$b->fieldName($l)=="")unset($m[$B]);}if($_POST&&!$k&&!isset($_GET["select"])){$x=$_POST["referer"];if($_POST["insert"])$x=($de?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$x))$x=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$x,'Rekord został usunięty.');else{$O=array();foreach($m
as$B=>$l){$V=process_input($l);if($V!==false&&$V!==null)$O[idf_escape($B)]=($de?"\n".idf_escape($B)." = $V":$V);}if($de){if(!$O)redirect($x);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$O),"\nWHERE $X"),$x,'Rekord został zaktualizowany.');}else{$I=insert_into($a,$O);$oc=($I?last_id():0);queries_redirect($x,sprintf('Rekord%s został dodany.',($oc?" $oc":"")),$I);}}}$Fd=$b->tableName(table_status($a));page_header(($de?'Edytuj':'Dodaj'),$k,array("select"=>array($a,$Fd)),$Fd);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($X){$M=array();foreach($m
as$B=>$l){if(isset($l["privileges"]["select"])){$ma=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$ma="''";if($t=="sql"&&ereg("enum|set",$l["type"]))$ma="1*".idf_escape($B);$M[]=($ma?"$ma AS ":"").idf_escape($B);}}$K=array();if($M){$L=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".'Brak rekordów.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'Brak uprawnień do edycji tej tabeli'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$B=>$l){echo"<tr><th>".$b->fieldName($l);$Va=$_GET["set"][bracket_escape($B)];$W=($K!==null?($K[$B]!=""&&$t=="sql"&&ereg("enum|set",$l["type"])?(is_array($K[$B])?array_sum($K[$B]):+$K[$B]):$K[$B]):(!$de&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($Va!==null?$Va:$l["default"]))));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$B]:($de&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if(ereg("time",$l["type"])&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($de?'Zapisz i kontynuuj edycję':'Zapisz i dodaj następny')."' title='Ctrl+Shift+Enter'>\n";}echo($de?"<input type='submit' name='delete' value='".'Usuń'."' onclick=\"return confirm('".'Czy jesteś pewien?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Pd,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status($a);$s=indexes($a);$m=fields($a);$Ib=column_foreign_keys($a);$Gc="";if($S["Oid"]=="t"){$Gc=($t=="sqlite"?"rowid":"oid");$s[]=array("type"=>"PRIMARY","columns"=>array($Gc));}parse_str($_COOKIE["adminer_import"],$ha);$md=array();$f=array();$Jd=null;foreach($m
as$u=>$l){$B=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$B!=""){$f[$u]=html_entity_decode(strip_tags($B));if(is_shortable($l))$Jd=$b->selectLengthProcess();}$md+=$l["privileges"];}list($M,$Pb)=$b->selectColumnsProcess($f,$s);$gc=count($Pb)<count($M);$X=$b->selectSearchProcess($m,$s);$C=$b->selectOrderProcess($m,$s);$v=$b->selectLimitProcess();$Mb=($M?implode(", ",$M):"*".($Gc?", $Gc":""));if($t=="sql"){foreach($f
as$u=>$V){if($M&&!$M[$u])continue;$ma=convert_field($m[$u]);if($ma)$Mb.=", $ma AS ".idf_escape($u);}}$Mb.="\nFROM ".table($a);$Qb=($Pb&&$gc?"\nGROUP BY ".implode(", ",$Pb):"").($C?"\nORDER BY ".implode(", ",$C):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Zd=>$K){$ma=convert_field($m[key($K)]);echo$g->result("SELECT".limit(($ma?$ma:idf_escape(key($K)))." FROM ".table($a)," WHERE ".where_check($Zd,$m).($X?" AND ".implode(" AND ",$X):"").($C?" ORDER BY ".implode(", ",$C):""),1));}exit;}if($_POST&&!$k){$le="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Yc=$be=null;foreach($s
as$r){if($r["type"]=="PRIMARY"){$Yc=array_flip($r["columns"]);$be=($M?$Yc:array());break;}}foreach((array)$be
as$u=>$V){if(in_array(idf_escape($u),$M))unset($be[$u]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$be===array()){$ke=$X;if(is_array($_POST["check"]))$ke[]="($le)";$H="SELECT $Mb".($ke?"\nWHERE ".implode(" AND ",$ke):"").$Qb;}else{$Xd=array();foreach($_POST["check"]as$V)$Xd[]="(SELECT".limit($Mb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m).$Qb,1).")";$H=implode(" UNION ALL ",$Xd);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($X,$Ib)){if($_POST["save"]||$_POST["delete"]){$I=true;$ia=0;$H=table($a);$O=array();if(!$_POST["delete"]){foreach($f
as$B=>$V){$V=process_input($m[$B]);if($V!==null){if($_POST["clone"])$O[idf_escape($B)]=($V!==false?$V:idf_escape($B));elseif($V!==false)$O[]=idf_escape($B)." = $V";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Ja="UPDATE";if($_POST["delete"]){$Ja="DELETE";$H="FROM $H";}if($_POST["clone"]){$Ja="INSERT";$H="INTO $H";}if($_POST["all"]||($be===array()&&$_POST["check"])||$gc){$I=queries("$Ja $H".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $le"));$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$I=queries($Ja.limit1($H,"\nWHERE ".where_check($V,$m)));if(!$I)break;$ia+=$g->affected_rows;}}}$_=lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ia);if($_POST["clone"]&&$I&&$ia==1){$oc=last_id();if($oc)$_=sprintf('Rekord%s został dodany.'," $oc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$_,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+kliknij wartość, aby ją edytować.';else{$I=true;$ia=0;foreach($_POST["val"]as$Zd=>$K){$O=array();foreach($K
as$u=>$V){$u=bracket_escape($u,1);$O[]=idf_escape($u)." = ".(ereg('char|text',$m[$u]["type"])||$V!=""?$b->processInput($m[$u],$V):"NULL");}$H=table($a)." SET ".implode(", ",$O);$ke=" WHERE ".where_check($Zd,$m).($X?" AND ".implode(" AND ",$X):"");$I=queries("UPDATE".($gc?" $H$ke":limit1($H,$ke)));if(!$I)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ia),$I);}}elseif(is_string($zb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$I=true;$Ia=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$zb,$z);$ia=count($z[0]);begin();$sd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($z[0]as$u=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$sd]*)$sd~",$V.$sd,$uc);if(!$u&&!array_diff($uc[1],$Ia)){$Ia=$uc[1];$ia--;}else{$O=array();foreach($uc[1]as$p=>$Fa)$O[idf_escape($Ia[$p])]=($Fa==""&&$m[$Ia[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Fa))));$I=insert_update($a,$O,$Yc);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),$ia),$I);queries("ROLLBACK");}else$k=upload_error($zb);}}$Fd=$b->tableName($S);if(is_ajax())ob_start();page_header('pokaż'.": $Fd",$k);$O=null;if(isset($md["insert"])){$O="";foreach((array)$_GET["where"]as$V){if(count($Ib[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$O.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$O);if(!$f)echo"<p class='error'>".'Nie udało się pobrać danych z tabeli'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($X,$f,$s);$b->selectOrderPrint($C,$f,$s);$b->selectLimitPrint($v);$b->selectLengthPrint($Jd);$b->selectActionPrint($s);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$n=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$E=floor(max(0,$n-1)/$v);}$H=$b->selectQueryBuild($M,$X,$Pb,$C,$v,$E);if(!$H)$H="SELECT".limit((+$v&&$Pb&&$gc&&$t=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Mb,($X?"\nWHERE ".implode(" AND ",$X):"").$Qb,($v!=""?+$v:null),($E?$v*$E:0),"\n");echo$b->selectQuery($H);$I=$g->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($t=="mssql"&&$E)$I->seek($v*$E);$lb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$t=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$n=(+$v&&$Pb&&$gc?($t=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".'Brak rekordów.'."\n";else{$ua=$b->backwardKeys($a,$Fd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Pb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edytuj'."</a>");$Cc=array();$Ob=array();reset($M);$ed=1;foreach($L[0]as$u=>$V){if($u!=$Gc){$V=$_GET["columns"][key($M)];$l=$m[$M?($V?$V["col"]:current($M)):$u];$B=($l?$b->fieldName($l,$ed):"*");if($B!=""){$ed++;$Cc[$u]=$B;$e=idf_escape($u);$Xb=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($u);$Wa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($Xb.($C[0]==$e||$C[0]==$u||(!$C&&$gc&&$Pb[0]==$e)?$Wa:'')).'">';echo(!$M||$V?apply_sql_function($V["fun"],$B):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($Xb.$Wa)."' title='".'malejąco'."' class='text'> ↓</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($u)).'\'); return false;" title="'.'Szukaj'.'" class="text jsonly"> =</a>';echo"</span>";}$Ob[$u]=$V["fun"];next($M);}}$rc=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$u=>$V)$rc[$u]=max($rc[$u],min(40,strlen(utf8_decode($V))));}}echo($ua?"<th>".'Relacje':"")."</thead>\n";if(is_ajax()){if($v%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Ib)as$A=>$K){$Yd=unique_array($L[$A],$s);$Zd="";foreach($Yd
as$u=>$V){if(strlen($V)>64){$u="MD5(".(strpos($u,'(')?$u:idf_escape($u)).")";$V=md5($V);}$Zd.="&".($V!==null?urlencode("where[".bracket_escape($u)."]")."=".urlencode($V):"null%5B%5D=".urlencode($u));}echo"<tr".odd().">".(!$Pb&&$M?"":"<td>".checkbox("check[]",substr($Zd,1),in_array(substr($Zd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($gc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Zd)."'>".'edytuj'."</a>"));foreach($K
as$u=>$V){if(isset($Cc[$u])){$l=$m[$u];if($V!=""&&(!isset($lb[$u])||$lb[$u]!=""))$lb[$u]=(is_mail($V)?$Cc[$u]:"");$w="";$V=$b->editVal($V,$l);if($V!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$V!="")$w=ME.'download='.urlencode($a).'&field='.urlencode($u).$Zd;if($V==="")$V="&nbsp;";elseif($Jd!=""&&is_shortable($l))$V=shorten_utf8($V,max(0,+$Jd));else$V=h($V);if(!$w){foreach((array)$Ib[$u]as$Hb){if(count($Ib[$u])==1||end($Hb["source"])==$u){$w="";foreach($Hb["source"]as$p=>$vd)$w.=where_link($p,$Hb["target"][$p],$L[$A][$vd]);$w=($Hb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Hb["db"]),ME):ME).'select='.urlencode($Hb["table"]).$w;if(count($Hb["source"])==1)break;}}}if($u=="COUNT(*)"){$w=ME."select=".urlencode($a);$p=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Yd))$w.=where_link($p++,$U["col"],$U["val"],$U["op"]);}foreach($Yd
as$ic=>$U)$w.=where_link($p++,$ic,$U);}}if(!$w&&($w=$b->selectLink($K[$u],$l))===null){if(is_mail($K[$u]))$w="mailto:$K[$u]";if($bd=is_url($K[$u]))$w=($bd=="http"&&$aa?$K[$u]:"$bd://www.adminer.org/redirect/?url=".urlencode($K[$u]));}$q=h("val[$Zd][".bracket_escape($u)."]");$W=$_POST["val"][$Zd][bracket_escape($u)];$Sb=h($W!==null?$W:$K[$u]);$tc=strpos($V,"<i>...</i>");$hb=is_utf8($V)&&$L[$A][$u]==$K[$u]&&!$Ob[$u];$Id=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$hb)||$W!==null?"<td>".($Id?"<textarea name='$q' cols='30' rows='".(substr_count($K[$u],"\n")+1)."'>$Sb</textarea>":"<input name='$q' value='$Sb' size='$rc[$u]'>"):"<td id='$q' onclick=\"selectClick(this, event, ".($tc?2:($Id?1:0)).($hb?"":", '".h('Użyj linku edycji aby zmienić tę wartość.')."'").");\">".$b->selectVal($V,$w,$l));}}if($ua)echo"<td>";$b->backwardKeysPrint($ua,$L[$A]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Pb&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($L||$E)&&!is_ajax()){$rb=true;if($_GET["page"]!="last"&&+$v&&!$gc&&($n>=$v||$E)){$n=found_rows($S,$X);if($n<max(1e4,2*($E+1)*$v))$n=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):"")));else$rb=false;}if(+$v&&($n===false||$n>$v||$E)){echo"<p class='pages'>";$vc=($n===false?$E+(count($L)>=$v?2:1):floor(($n-1)/$v));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($E+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$E).($E>5?" ...":"");for($p=max(1,$E-4);$p<min($vc,$E+5);$p++)echo
pagination($p,$E);if($vc>0){echo($E+5<$vc?" ...":""),($rb&&$n!==false?pagination($vc,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$vc'>".'ostatni'."</a>");}echo(($n===false?count($L)+1:$n-$E*$v)>$v?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$v).', \''.'Wczytywanie'.'\');">'.'Wczytaj więcej danych'.'</a>':'');}echo"<p>\n",($n!==false?"(".($rb?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordów'),$n).") ":""),checkbox("all",1,0,'wybierz wszystkie')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edytuj</legend><div>
<input type="submit" value="Zapisz zmiany"',($_GET["modify"]?'':' title="'.'Ctrl+kliknij wartość, aby ją edytować.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usuń" onclick="return confirm('Czy jesteś pewien? (' + (this.form['all'].checked ? <?php echo$n,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Jb=$b->dumpFormat();if($Jb){print_fieldset("export",'Eksport');$Qc=$b->dumpOutput();echo($Qc?html_select("output",$Qc,$ha["output"])." ":""),html_select("format",$Jb,$ha["format"])," <input type='submit' name='export' value='".'Eksport'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($lb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$Pd'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));elseif(list($R,$q,$B)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$I=$g->query("SELECT $q, $B FROM ".table($R)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$q = $_GET[value] OR ":"")."$B LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($p=0;$p<10&&($K=$I->fetch_row());$p++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($q))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($p==10)echo"...\n";}exit;}else{page_header('Serwer',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Szukaj'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabela'.'<td>'.'Liczba rekordów'."</thead>\n";foreach(table_status()as$R=>$K){$B=$b->tableName($K);if(isset($K["Engine"])&&$B!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$B</a>";$V=number_format($K["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($K["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();