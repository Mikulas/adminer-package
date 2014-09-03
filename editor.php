<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.0
*/error_reporting(6135);$Ib=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Ib||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Be=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Be)$$X=$Be;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé��a�'3I��d��!S��:4�+Md�g���ǃ���t��c������b{�H(Ɠєt1�)t�}F�p0��8�\\82�DL>�9`'C��ۗ889�� �xQ��\0�e4��Qʘl��P��V��b���T4�\\�W/����\n��` 7\"h�q��4ZM6�T�\r�r\\��C{h�7\r�x67���J��2.3��9�K��H�,�!m�Ɔo\$�.[\r&�#\$�<��f�)�Z�\0=�r��9��jΪJ��0�c,|�=�������Rs_6��ݷ������Z6�2B�p\\-�1s2��>�� X:\rܺ��3�b����-8SL����K.��-�ҥ\rH@ml�:��;�����J�0LR�2�!���A��2�	m���0eI��-:U\r��9��MWL�0��GcJv2(��F9�`�<�J�7+˚~���}DJ��HW�SN���e�u]1̥(O�LЪ<l��R[u&��H�3�v��U�t6��\$�6���X\"�<��}:O��<3x�O�8��>����C���1����HR��S�d�9��%�U1�Sn�a|.�ԁ`�8���:#���C�2��*[o��4X~�7j�\\���6/�F[NY��\\�����n�o5<��l��p�9�cFZ�s��|:>6 ���k�v��qs�:��p�8\r�#�Ȑ^��nZ,B2)O���R��[I����7��tҔ�7��(��W�0���2x~]�;�K2��Va���~�r=��(��,��\r��j*�B(R�2C�N\\����9}a\0ŕ�VR4G�B����C(s(mm���(w�s�nm����B\\l�Mi#;#��U��=M-~�����h)�5	�p�C��/,в�]�s����#Cv���M ��>�6@�hu���`k�s�ryS�\"��Ⓟ&5�u��\"cu/L	#DB�O�M�������ct�W6\"��[��!�1��`#�Ed�n���Lw�m٪5g���A�U��F8ۍ�\\M-�7�N�\n:`�R>KI�\$䬗j!�M9�\"O��&B̐�w�݃�qZ�ܫJ�\"AÅ(\r�_s��}>̜&�H���nʜ6/��C��f��89�@�Û�t��4���C�x6f�ە5H�P�?���D����A�\0��G!��tӕ�'TY�I��+���Ln�]�ސf(1*Z�@��\rR�ծĐg���h!C���p1*��2P`���f!ܸ8�#?�A�`��4�8_�Z��� wN)��R`7�5Z`*�;D���A* �TT��+#�~Jp��0GPH�q���9��]J�D+eu5-�ܩɨt�T:�*�a5Gl����6&��\r�@�*��=qg���i�A�� iG���#�<i�����P��L#��f!ԐwWD��A��>9���<\"�/� ���da��?����[�yO��7OT�5���w&�kg��h�����o!�]�Ҟ����m>����hu���!6\$�W�\0ڢ`[)\r:f�(\$�p �����g�s�e2ѻ�.\r��նqܝؒz�hm\r���R�le	�C.j �Yq.'(��9��p�aRu0'd�B�j7a�4YkR{�����d��,?l�%��%r�O�\$��b�.�Ի��g8r�׶�P���` <8T��3�k\n�v���88�檫8e�١I�p��H.�P-#_��W�����kE|-(2��}F��cB�no�9�>;��n]�t^���w�\r�=����9�k}���]Gw������8�h��7�\$�߂�.`C)bVlfH�p�)`�o��n��ɵ�zցe��,N���ϜUh_]�_�]���n��[��ػ삽�]ǹ:�>mrC�36�ѻ�\n��Oj�f���~?���,�ڐ[E��=DێYk-���m���lO��.f�����h�t�cBy���>�t��E�@>��");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n:��sa�Pi2\nOgc	�e6L����e7�s)Ћ\r��HG�I���3a��s'c��D�i6�N�����2H��8�uF�R�#����r7�#��v}�@��`Q��o5�a�I��,2O'8�R-q:P��S�(�a��*w�(��%��p�<F)�nx8�zA\"�Z-C�e�V'������s��q��;NF�1䭲9��G�ͦ'0�\r���ȿ�9n`�р�X1�݁G3��t�ee9��:Ne��N��OS�z�c��zl�`5����	�3��y��8.�\r���P��\r�@����\\1\r� �\0�@2j8ؗ=.��� -r�á��0���Q�ꊺh�b����`����^9�q�E!� �7)#���*��Q���\0���1���\"�h�>��������-C \"��X��S`\\���F֬h8�����3��`X:O�,�����)�8��<B�NЃ;>9�8��c�<�#0L����9���?�(�R�#�e=���\n���:*��0�D��9C���@��{ZO����8��i�oV�v�k�Ar�8&����..��cH�E�>�H_h����WU�5��1�r*����^�(�b�xܡY1���&XH�6�ؓ.9�x�P�\r.`v4�������8�4daXV�6�F���E�HH�fc-^=���t��x�Y\r�%��xe���Q�,X=1!�sv�j�kQ2��%�W?��Ů���=�dY&ٓ�VX4�ـ�\\�5���Xì!�}��N�gvڃWY*�Q��i&��l��ѵZ#����Ց\rA�\$e�v5o#ޛ�����5gc3MTC�L>v�H������<`���*�]�_��;%�;��V��i�����4X��'��`����i�j0g�O��ۥ�i���9�ƙےd�F���k/lŞ��n��c<b\n��8�`�H��e�}]\$Ҳ��� �!����C)�\$ ��A��`�\0'���&\0B�!�)���5E)�����o\r��8r`���!2�T��s=�D˩�>\n/�l�����[��ŠP��a�8%���!�1v/��SUcoJ�:�4J+�B���v�J��\r���b{��,|\0��z��c���Y��l�\n��i.��!��)��dm�J����!'��� B\nC\\i\$J�\"���2�+�IkJ���\$����G�y\$#ܲi/�CAb��b�C(�:��UX���2&	�, Q;~/��Ky9��?�\r6��tV���!�6�CP�	hY�E�������l�䏞(ؖT��p'3��C<�dc���?�yC���e0�@&A?�=��%�A:JD&SQ��6R�)A���b`0�@��u9(�!0R\n�F ��� �wC\\����υr��ܙ��#�~��2'\$� :��K�`h��@��Eb�[�~���� T��lf5��BR]�{\"-��\0��L>\r�\$@�\n(&\r��9�\0vh*ɇ��*�X�!_dj�����py������`�jY�wJ�\$�R��(uaM+��n�xs�pU^�Ap`ͤI�H�\n�f�02�)!4a�9	����EwC�����˩ �L�P����Ai�)�p�3�A�u����AI�A�Hu	�!g͕�U����ZU���c�*����M��xf�:��^�Xp+�V�����K�C#+� �Wh�CP!���;�[pn\\%��k\0����,ڨ8�7�xQC\nY\r�b��XvC d\nA�;��lF,_wr�4RP���HA�!�;��&^Ͳ��\"6;����=�#C�I���9f�'�:��DY!��B+�s�xV��8l�Ó�\"�鑃�H�U%\"Z6��u\r�e0[��p���a��.��� +^`�`b�5#CM�\$� �I��˚A�P�5C\r� S�d�WN6H[�SR�����\\+�X�=k��λ׺��S����r^(��oo�7����\\huk�lHaC(m����nRB��Uup��2C1�[�|ٽ�beG0��\"�CG��?\$x7��n��\$Z�=�ZӦ��si5�f��&�,�f�hi�I�y��n�2�0��DvE��T�x��M�{��`ܤ�GN#遂Z,�/�R\$�#\\I-	����|�0�-0��N�P�����;s-�v���҆���nwGt�n����di�H�|��4�(��+�v��&�Ņ�+K����L\nJ\$ԩ����:\\Q<WB\"^���WTIB~��q�ɞ��}�3�ο\":�U����|\r5n(n����� �7��O�D}B}�����\0\r�voܕ���؆_Jl�İ�H3�\"�[ĸ���K�A��`ߖ���N���&(�)\"� f�&�\0�� b��l��F�.jr����J�\"P<\$F�*�|f/�! �O��pR ���F#5g�b���8eRDi��0�P�+*�������k�Z;�pHh��l!�\0\r\nc�o�/��CB�<py�NTH�h�T�	�@��px�\$������48\n��#�NU,���\$P�m��YK��\"H�� �R�L�����D�\0����a�W�`p�����g���lP����o�:L���+\0 ]0�<)��N�xk\n(`c�+r�k{m\"�3.0��H1�e*ZoeB���9\r���\0RLi�Q�U�ԋ`��.����o:�d���T7Q��V ��Dh��W��S1�	��g�*2��,�W)��@�ϰT@C	Q(�,��4�#d<��\0�! �\$��2 {es��+�rʫ����JvY*�HPr\r����T�M\\\\`���v���<�&�n�D\\HH�oj^@��	��<񊆯��8��*#f�*��\r\nT� \\\r��*�T�^*��ɠ�\$�6o�7��Ree8� �粡,ҥ,�,`|9��K2�0r�+ҧ1R��\"� �*�P*��ȆM\\\rb�0\0�Y\"�\"�Ux���`������Q�E\r�~Q@5 �5sZ�^f�R@Q4�d��5�b\0�@�F�b/�8\"	8s�8�<@����l2\$Sh���\n�R\"U�43FNɫ7\"D\r�4�OI3\n\0�\n`�``��� Y2��ob�3��<n6�]<`��\"�� N�\"B2�Z\n��m���E�����\0����Zx�[2�@,��<P�?�\r�8#d<@��JU��K/E�;\$�6��S�DU	l;�,U�LΒ�7fcG\"EG��\$��\"E��3FHƤI���d�=e	!�UHБ23&j�Ȭ�*��%%�%2�,��JQ1H�l0tY3��\$X<C�t�4�_\$\0��>/F�\n�?mF�j�3�p�D��HK�v Ⱥɜ�\0X�*\rʚ��\n0��e\n�%��\ri���O��fl�N��M%]U�Q�Q�L�-��S±T4�!��U5�T\nn�di0#�E��M����i�.��/U���\rZF���j���;���H�☎d`m�ݩ���\n�t��QS	e��|�i����Qt� d�12,���DY�1UQSU��cd����E�)\\����L�	�F\$�@��V�{W6\"LlT��A�\$6ab�O��dr��Lp�c,��esΞ�<2�`�@b�XP\$3�����@˃P,�K�Vխ^����M��L���u�1��@�c��t-�(���`\0�9�n��2sb���/ �Fm�)���Hl5�@�n�l\$�q+�:��/ ���d��,��\n�޵�����.4���\$ �w0\$�d�V0���\"��r��W4678�VtqBau�pÀ�I<\$#�x`�wd�9�^*k�u�ofBEp	g2���f4 ��L!�r=�\0��\"	�\r<��h�������U�%T�h��Bk�#>�'C�p\n��	(�\r��2����\"3�l��Mԋ7�G�x.�,�Uu�%Dt� �w�y^�Mf\" �����(vU�3�u��J^HC_IU�YkS���c_ylc�c]rF���_q�%�W#]@�r�kv�3-�cy��VHJG<�Z��T�@V�8�\$�6�o�2H@�\r��ª\0��=�ݍ���\"3�9z��:K����u��K >����B\$�r�.�J��<K�G~�P�X��QMƹ	X��w\$;��mp�Zp�� �cK!OeOO�?�wp��懤�֠��L��I\n��?9xB�.]O:V����9��.�mW�\0˗s>�*�l'���k��o�ph���x�����v�L`w�1��� ��!�M�4\"�I\$��\"o�\$��>˙Bea\"��D�Bo�ʶ�+� B0Pxp��&��7�|p{|��}7ְ�\$-P�����@b����e����VYmoM�o�\0���Nzn*>�΄�)�����-H�l!����hp�g�� ����&tZ�㜤\0�!��8 ɩ���ZK��@DZG��������F�秩.� ��l��z%��(�x�}��'<��Ū(������<�XZǬ��њ� ɮg�����w��z�z{�e�'{;@噱(&���R�^E�ݛx�宛Y��\"���Mܒ��V��\n�5�zl�zr�[x��˪�����G\$O�W�@����Z�x�����,����be�� 	�f�dƻ�2��EË��I�D�YT�%�k�{�J�\\\r�U N �'�_��ɽ�f|w޵����,�l�7�kt�1R�D>�ЋX�Z��Њ�|y|Z{|�բ��\r��%;�#\0eK�	X�8&>7����rh�:�LL��K*6U/\0004��g��E�c\n�j�{V�[WF}#q �T��1ab��\n�1P��~��((f+W�?l��ъ�O���#Dc�8���Ɠ��k�\\@z�cϦl���1l�̗v~ՠ�(�L/cA%�#�bȄ4�4�������eZ2��-\r�|��1�ъ)��K�<`��)2�W���X\r��W��d�>��\ṋSX�}�\r��ゥE�R�(�����]`e9M�\0{�}��k+��˄�����}�*&�'p�������L�%D�}�wt��Gw���իo�����C��ל��S�����Н\r<&�B�8�m�&��");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF87a\0\0�\0\0���\0\0\0���\0\0\0,\0\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$j;return$j;}function
adminer(){global$c;return$c;}function
idf_unescape($v){$yc=substr($v,-1);return
str_replace($yc.$yc,$yc,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($td,$Ib=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($td)){foreach($X
as$rc=>$W){unset($td[$y][$rc]);if(is_array($W)){$td[$y][stripslashes($rc)]=$W;$td[]=&$td[$y][stripslashes($rc)];}else$td[$y][stripslashes($rc)]=($Ib?$W:stripslashes($W));}}}}function
bracket_escape($v,$va=false){static$qe=array(':'=>':1',']'=>':2','['=>':3');return
strtr($v,($va?array_flip($qe):$qe));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$Fa,$vc="",$Xc="",$pc=false){static$u=0;$u++;$K="<input type='checkbox' name='$C' value='".h($Y)."'".($Fa?" checked":"").($Xc?' onclick="'.h($Xc).'"':'').($pc?" class='jsonly'":"")." id='checkbox-$u'>";return($vc!=""?"<label for='checkbox-$u'>$K".h($vc)."</label>":$K);}function
optionlist($cd,$Ld=null,$He=false){$K="";foreach($cd
as$rc=>$W){$dd=array($rc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($rc).'">';$dd=$W;}foreach($dd
as$y=>$X)$K.='<option'.($He||is_string($y)?' value="'.h($y).'"':'').(($He||is_string($y)?(string)$y:$X)===$Ld?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($C,$cd,$Y="",$Wc=true){if($Wc)return"<select name='".h($C)."'".(is_string($Wc)?' onchange="'.h($Wc).'"':"").">".optionlist($cd,$Y)."</select>";$K="";foreach($cd
as$y=>$X)$K.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$K;}function
confirm($Ra=""){return" onclick=\"return confirm('".lang(0).($Ra?" (' + $Ra + ')":"")."');\"";}function
print_fieldset($u,$_c,$Me=false,$Xc=""){echo"<fieldset><legend><a href='#fieldset-$u' onclick=\"".h($Xc)."return !toggle('fieldset-$u');\">$_c</a></legend><div id='fieldset-$u'".($Me?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($K=' class="odd"'){static$t=0;if(!$K)$t=-1;return($t++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Jb=true;if($Jb)echo"{";if($y!=""){echo($Jb?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Jb=false;}else{echo"\n}\n";$Jb=true;}}function
ini_bool($lc){$X=ini_get($lc);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$j;return$j->quote($Q);}function
get_vals($I,$g=0){global$j;$K=array();$J=$j->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$g];}return$K;}function
get_key_vals($I,$k=null){global$j;if(!is_object($k))$k=$j;$K=array();$J=$k->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$k=null,$o="<p class='error'>"){global$j;$Pa=(is_object($k)?$k:$j);$K=array();$J=$Pa->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($k)&&$o&&defined("PAGE_HEADER"))echo$o.error()."\n";return$K;}function
unique_array($L,$x){foreach($x
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$K=array();foreach($w["columns"]as$y){if(!isset($L[$y]))continue
2;$K[$y]=$L[$y];}return$K;}}}function
where($Z,$q=array()){global$qc;$K=array();$Ub='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$Z["where"]as$y=>$X){$y=bracket_escape($y,1);$K[]=(preg_match($Ub,$y)?$y:idf_escape($y)).(($qc=="sql"&&ereg('\\.',$X))||$qc=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".unconvert_field($q[$y],exact_value($X)));}foreach((array)$Z["null"]as$y)$K[]=idf_escape($y)." IS NULL";return
implode(" AND ",$K);}function
where_check($X,$q=array()){parse_str($X,$Ea);remove_slashes(array(&$Ea));return
where($Ea,$q);}function
where_link($t,$g,$Y,$Zc="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($g)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$Zc:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($h,$q,$N=array()){$K="";foreach($h
as$y=>$X){if($N&&!in_array(idf_escape($y),$N))continue;$pa=convert_field($q[$y]);if($pa)$K.=", $pa AS ".idf_escape($y);}return$K;}function
cookie($C,$Y){global$aa;$kd=array($C,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$kd[]=true;return
call_user_func_array('setcookie',$kd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($eb,$O,$V,$n=null){global$fb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($fb))."|username|".($n!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($eb!="server"||$O!=""?urlencode($eb)."=".urlencode($O)."&":"")."username=".urlencode($V).($n!=""?"&db=".urlencode($n):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($Cc,$Mc=null){if($Mc!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($Cc!==null?$Cc:$_SERVER["REQUEST_URI"]))][]=$Mc;}if($Cc!==null){if($Cc=="")$Cc=".";header("Location: $Cc");exit;}}function
query_redirect($I,$Cc,$Mc,$zd=true,$zb=true,$Cb=false){global$j,$o,$c;$ie="";if($zb){$Sd=microtime();$Cb=!$j->query($I);$ie="; -- ".format_time($Sd,microtime());}$Rd="";if($I)$Rd=$c->messageQuery($I.$ie);if($Cb){$o=error().$Rd;return
false;}if($zd)redirect($Cc,$Mc.$Rd);return
true;}function
queries($I=null){global$j;static$wd=array();if($I===null)return
implode("\n",$wd);$Sd=microtime();$K=$j->query($I);$wd[]=(ereg(';$',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I)."; -- ".format_time($Sd,microtime());return$K;}function
apply_queries($I,$T,$vb='table'){foreach($T
as$R){if(!queries("$I ".$vb($R)))return
false;}return
true;}function
queries_redirect($Cc,$Mc,$zd){return
query_redirect(queries(),$Cc,$Mc,$zd,false,!$zd);}function
format_time($Sd,$qb){return
lang(1,max(0,array_sum(explode(" ",$qb))-array_sum(explode(" ",$Sd))));}function
remove_from_uri($jd=""){return
substr(preg_replace("~(?<=[?&])($jd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Va){return" ".($F==$Va?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F":"")).'">'.($F+1)."</a>");}function
get_file($y,$Wa=false){$Fb=$_FILES[$y];if(!$Fb)return
null;foreach($Fb
as$y=>$X)$Fb[$y]=(array)$X;$K='';foreach($Fb["error"]as$y=>$o){if($o)return$o;$C=$Fb["name"][$y];$oe=$Fb["tmp_name"][$y];$Qa=file_get_contents($Wa&&ereg('\\.gz$',$C)?"compress.zlib://$oe":$oe);if($Wa){$Sd=substr($Qa,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Sd,$_d))$Qa=iconv("utf-16","utf-8",$Qa);elseif($Sd=="\xEF\xBB\xBF")$Qa=substr($Qa,3);}$K.=$Qa."\n\n";}return$K;}function
upload_error($o){$Jc=($o==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($o?lang(2).($Jc?" ".lang(3,$Jc):""):lang(4));}function
repeat_pattern($H,$Ac){return
str_repeat("$H{0,65535}",$Ac/65535)."$H{0,".($Ac%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$Ac=80,$Yd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Ac).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Ac).")($)?)",$Q,$A);return
h($A[1]).$Yd.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($td,$hc=array()){while(list($y,$X)=each($td)){if(is_array($X)){foreach($X
as$rc=>$W)$td[$y."[$rc]"]=$W;}elseif(!in_array($y,$hc))echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$c;$K=array();foreach($c->foreignKeys($R)as$r){foreach($r["source"]as$X)$K[$X][]=$r;}return$K;}function
enum_input($U,$sa,$p,$Y,$pb=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Gc);$K=($pb!==null?"<label><input type='$U'$sa value='$pb'".((is_array($Y)?in_array($pb,$Y):$Y===0)?" checked":"")."><i>".lang(5)."</i></label>":"");foreach($Gc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$K.=" <label><input type='$U'$sa value='".($t+1)."'".($Fa?' checked':'').'>'.h($c->editVal($X,$p)).'</label>';}return$K;}function
input($p,$Y,$s){global$j,$xe,$c,$qc;$C=h(bracket_escape($p["field"]));echo"<td class='function'>";$Cd=($qc=="mssql"&&$p["auto_increment"]);if($Cd&&!$_POST["save"])$s=null;$Vb=(isset($_GET["select"])||$Cd?array("orig"=>lang(6)):array())+$c->editFunctions($p);$sa=" name='fields[$C]'";if($p["type"]=="enum")echo
nbsp($Vb[""])."<td>".$c->editInput($_GET["edit"],$p,$sa,$Y);else{$Jb=0;foreach($Vb
as$y=>$X){if($y===""||!$X)break;$Jb++;}$Wc=($Jb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($p["field"])))."]']; if ($Jb > f.selectedIndex) f.selectedIndex = $Jb;\"":"");$sa.=$Wc;echo(count($Vb)>1?html_select("function[$C]",$Vb,$s===null||in_array($s,$Vb)||isset($Vb[$s])?$s:"","functionChange(this);"):nbsp(reset($Vb))).'<td>';$nc=$c->editInput($_GET["edit"],$p,$sa,$Y);if($nc!="")echo$nc;elseif($p["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Gc);foreach($Gc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$t]' value='".(1<<$t)."'".($Fa?' checked':'')."$Wc>".h($c->editVal($X,$p)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Wc>";elseif(($fe=ereg('text|lob',$p["type"]))||ereg("\n",$Y)){if($fe&&$qc!="sqlite")$sa.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$sa.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$sa>".h($Y).'</textarea>';}else{$Lc=(!ereg('int',$p["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$p["length"],$A)?((ereg("binary",$p["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$p["unsigned"]?1:0)):($xe[$p["type"]]?$xe[$p["type"]]+($p["unsigned"]?0:1):0));if($j->server_info>=5.6&&ereg('time',$p["type"]))$Lc+=7;echo"<input".(ereg('int',$p["type"])?" type='number'":"")." value='".h($Y)."'".($Lc?" maxlength='$Lc'":"").(ereg('char|binary',$p["type"])&&$Lc>20?" size='40'":"")."$sa>";}}}function
process_input($p){global$c;$v=bracket_escape($p["field"]);$s=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($p["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($p["auto_increment"]&&$Y=="")return
null;if($s=="orig")return($p["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($p["field"]):false);if($s=="NULL")return"NULL";if($p["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads")){$Fb=get_file("fields-$v");if(!is_string($Fb))return
false;return
q($Fb);}return$c->processInput($p,$Y,$s);}function
search_tables(){global$c,$j;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Qb=false;foreach(table_status('',true)as$R=>$S){$C=$c->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$j->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Qb){echo"<ul>\n";$Qb=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Qb?"</ul>":"<p class='message'>".lang(7))."\n";}function
dump_headers($fc,$Qc=false){global$c;$K=$c->dumpHeaders($fc,$Qc);$hd=$_POST["output"];if($hd!="text")header("Content-Disposition: attachment; filename=".$c->dumpFilename($fc).".$K".($hd!="file"&&!ereg('[^0-9a-z]',$hd)?".$hd":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($s,$g){return($s?($s=="unixepoch"?"DATETIME($g, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$g)"):$g);}function
password_file(){$cb=ini_get("upload_tmp_dir");if(!$cb){if(function_exists('sys_get_temp_dir'))$cb=sys_get_temp_dir();else{$Gb=@tempnam("","");if(!$Gb)return
false;$cb=dirname($Gb);unlink($Gb);}}$Gb="$cb/adminer.key";$K=@file_get_contents($Gb);if($K)return$K;$Sb=@fopen($Gb,"w");if($Sb){$K=md5(uniqid(mt_rand(),true));fwrite($Sb,$K);fclose($Sb);}return$K;}function
is_mail($mb){$qa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$db='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$H="$qa+(\\.$qa+)*@($db?\\.)+$db";return
preg_match("(^$H(,\\s*$H)*\$)i",$mb);}function
is_url($Q){$db='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($db?\\.)+$db(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$A)?strtolower($A[1]):"");}function
is_shortable($p){return
ereg('char|text|lob|geometry|point|linestring|polygon',$p["type"]);}function
slow_query($I){global$c,$pe;$n=$c->database();if(support("kill")&&is_object($k=connect())&&($n==""||$k->select_db($n))){$uc=$k->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$pe,'&kill=',$uc,'\');
}, ',1000*$c->queryTimeout(),');
</script>
';}else$k=null;ob_flush();flush();$K=@get_key_vals($I,$k);if($k){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
lzw_decompress($_a){$bb=256;$Aa=8;$Ia=array();$Dd=0;$Ed=0;for($t=0;$t<strlen($_a);$t++){$Dd=($Dd<<8)+ord($_a[$t]);$Ed+=8;if($Ed>=$Aa){$Ed-=$Aa;$Ia[]=$Dd>>$Ed;$Dd&=(1<<$Ed)-1;$bb++;if($bb>>$Aa)$Aa++;}}$ab=range("\0","\xFF");$K="";foreach($Ia
as$t=>$Ha){$lb=$ab[$Ha];if(!isset($lb))$lb=$Qe.$Qe[0];$K.=$lb;if($t)$ab[]=$Qe.$lb[0];$Qe=$lb;}return$K;}global$c,$j,$fb,$jb,$sb,$o,$Vb,$Yb,$aa,$mc,$qc,$a,$xc,$Vc,$md,$Vd,$pe,$se,$xe,$De,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$kd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$kd[]=true;call_user_func_array('session_set_cookie_params',$kd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ib);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$xc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','id'=>'Bahasa Indonesia','ru'=>'Русский язык','uk'=>'Українська','sr'=>'Српски','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','bn'=>'বাংলা','ar'=>'العربية','fa'=>'فارسی',);function
get_lang(){global$a;return$a;}function
lang($v,$D=null){if(is_string($v)){$od=array_search($v,get_translations("en"));if($od!==false)$v=$od;}global$a,$se;$re=($se[$v]?$se[$v]:$v);if(is_array($re)){$od=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D%10>1&&$D%10<5&&$D/10%10!=1?1:2):($a=='sl'?($D%100==1?0:($D%100==2?1:($D%100==3||$D%100==4?2:3))):($a=='lt'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D%10<5&&$D/10%10!=1?1:2)):1)))))));$re=$re[$od];}$oa=func_get_args();array_shift($oa);$Pb=str_replace("%d","%s",$re);if($Pb!=$re)$oa[0]=number_format($D,0,".",lang(8));return
vsprintf($Pb,$oa);}function
switch_lang(){global$a,$xc;echo"<form action='' method='post'>\n<div id='lang'>",lang(9).": ".html_select("lang",$xc,$a,"this.form.submit();")," <input type='submit' value='".lang(10)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($xc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($xc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Gc,PREG_SET_ORDER);foreach($Gc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$y=>$vd){if(isset($xc[$y])){$a=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ja[$y])&&isset($xc[$y])){$a=$y;break;}}}$se=&$_SESSION["translations"];if($_SESSION["translations_version"]!=1561852702){$se=array();$_SESSION["translations_version"]=1561852702;}function
get_translations($wc){switch($wc){case"en":$i="A9D�y�@s:�G�(�ff�����	��:�S���a2\"1�..L'�I��m�#�s,�K��OP#I�@%9��i4�o2ύ���,9�%Si��y�F�9�(l�GH�\\�(��q��a3�bG;�B.a�F�&�t�: T��s4�'�\n�P:Y�fS���p��e�,��D0�dF�	�[r)�+v��\n�a9V	�S�޴k̦�n�cj��ADS!�2rɜ���QB�s����}t���m�jl{�a2��j�2Bb<�A\"_?�2y���BA��H3�\rAE3.��4K`�;�H���\0��B��/��ʋ��Z�\$�P�97���1\rC,*\$�� ��#�ލ���<�t.0��\0м����s֐���L�F�\r��Z�)c�\$	К&�B��c̴<��������꠰K�\n)�#B0�CcU	R3���4�\"�)̰�5��pA��H�&�h7%�2���1�#��:��C�9��\"8@@�*1��\"ɭ5J�2J�8\r(�������D3�iD�;O\0�Y;�L��,L{\n�ի\n��02PA	�@(	���S�8@(JD��S�L���BT�%ɀ�Ͳ����v�K	���J&�U���*��[�L`*\r��ĮZ�x�*R�A\nI�\$�PؒF�<cv�c*|1��*�945n#X�M4�_0��n�I�&�U@P�����j�bY�v�(�h2�j��90�\"P�A�L8;�B�����Z�c������68h,�О��E40���؁-�I�ë���{F��Q6��3�����}�I#�3e�T~��2&���\\d��mP��s��5�\\HA:����Q��(�<�	C�jz5M�������|��������wGN�M21tI�2)4�H��V*6e,S&�o�7t�ԍ=^ʹt��P�.3j��i��\$EɍF:�p7�T7�\n��PC#��ᇇ|�BK�i�H��\"���iU&x*<����-�ؘ�DZh 	�-A�8JLp�kB0\\";break;case"cs":$i="O8�'c!�~\n��fa�N2�\r�C2i6�Q��h90�'Hi��b7����i��i6ȍ���A;͆Y��@v2�\r&�y�Hs�JGQ�8%9��e:L�:e2���Zt�\"=&��Q����ئ��*�EjT����k<��\0�Q��y5��Ǔ�\n(��Sl�L�_MGH�:�L=(����kT*uS���i��AE\\���a�f���y8ALDd��l0����4� b#L0�*`�tb&�F3((�i�����QNj�R���Sy��r4�JfS�xۺ\"�\r'IN�[�؂�]���\r#@ؑo�6\n��_�+2/\$F)B�-bs<�1�� 5�!(�C&��D�Đ�Bɬ�P�7?�s��pHF��<�C*(Íc ʢ(C��2���É���#[���`�h�0�\0P�!i�����|6�,8�\r2,<�L�Cx��K����#`@�������,�.\r�p!O#��0@e�ED���/4<�O����R40��l��G�B@t&��Ц)�C \\6����Y�B�2B57�I�#`�9H�P�b\"�ƚ���5��\0�)�B0\\N��v�2R6�Љ2=������%\n&��1:04;1Ȳ�5��8�����4cr�\\\nl1e�H�'P�R�����;7�����\"�89��v�ܣ��d�m�5��<0�i�@a�H�T���=BN�3v!�`@2(���8`l�s�3(�ȉ1M}�1�\0�\$\nw���3�\n�R���!�NM�-��B��Xbwf1�V�&����BV�D�4#�W7�CL\$��-�|(	☩����\r�]�`*�Eɾc�\0Љ�35~��H�:�NN��R��R�\r�ێ1O.8�-�S�%�͐�A܄ף*������vʇ��'�byߊ�\n'�\n�^���u�7���7::�|���&��.K��|%b��'�]���Lpku\"5���L�ـi5o�p��lk�u�%vʞ�y�}�@.B�{�3eQFy\"��]�=����/!+�S�~°ڨ\0PCXa�������#�d�����^:�eMP�-���q�l���}�~�~B�آ��)�	�HCH�T����+��a�Q�\$��R/�?W����R�@SG A�'�����E�9���G\"{�:%�ڿG>X�y�1��֙28D�ᙐOl:5����e(����G��C���D��K\\r̄!��Z)|	����/�Z-:�\rfőzo��C��e��\"�\n	1�1#�z�����ܑ5D����9����\"�P1�\0";break;case"sk":$i="N0��FP�%���(��]��(a�@n2�\r�C	��l7��&�����������P�\r�h���l2������5��rxdB\$r:�\rFQ\0��B���18���-9���I��0=#\0����i�LALU��b�&#���y��D�	��k�&),�P9P�j�l�e9)��\$� ���f��k���4j�\\�Y��e%V*�v0��3[\rR :N�S�9� �\$µ��1�iH�'��̠��`r����b9��m2�#�2�\nfm�L���Oo:�u���H2�M�x�ؘcJ�9�b���?�4��r�Bs8��IZ5�a(�H ��P�<<��:5=��<� P�����\\��b��#B~���(5���ޟ����3�[&%�` �c�z�h�0��P�2(L��>�@�2<��|�1i\0��K���I�@���\nt^����-K�`\\�#`�=���P!-�����3�?�cE#IЬ�R�\$���\$Bh�\nb�2�h\\-�U��.��\$P�,3*��\"�28���!̂z9B(��?�x֜��)�pA:���ئȘ�:��\n(=E�S/�c��+�(�2���#O�5����\0��u�9�\0ܝ6��Cʈ����mx;7C��0�Af\\�ʙ`lS]���sc�c��JJb �+�Zڷ�=[�^7Bs<�)�j�8f\rjܸe�7|�T�=��%n�ńB��4Nϱ.V%@Kij^���Υ���l�jړ�V�B��a���%��l[�%3�[E[���ڶ„)���P�[�\rn����c��B=o{�(�\r�^�3̳�.�5rCN5��~��=�d1&�1-�kOLB�g{�v��84�Z�a��C\n��8I�ى-Z�0��2٧��/�@4{�d_�������!\0�8#���44���5sd����(��i:�ʊ\"�\"m��;\0 �s�X7��1{k (-<��P�M�}�)��`y�a���x�`+\rj(5�F�L۱�9E�;B&���o��&��r�E*=@\"�X:�Q*.\$�8��\"tP'�))�AL���uH��B�\"ڢAP��R�RY!#Dp��>~d���ja�\n�\0R�3x��C)&IJX�y�jG�6��6��{{��\"`��\n#G3��yo-�Sʔ6H�I6(e\r����Y�O.����t���t2�0\0�HJW��%\0��fi�GB�,76�ˑt.���ɴPR�F�*���O��( ";break;case"nl":$i="W2�N�������)�~\n��fa�O7M�s)��j5�FS���n2�X!��o0���p(�a<M�Sl��e�2�t�I&���#y��+Nb)̅5!Q��q�;�9��g�F�9��6��,�Fl�MSR���q���GSI��e�a\$#�O�7�#�1��D9׎c��αZ�Q����d�a�8Xm(�23[�,5\\6e*<�\$�y5�f\n\"P�[�|�\n*B䠢��i�#�	�X�;�p�3y�k2����.��d4�-Z���s7_������h:�.9\$ܗ�웘�\rH��7#�������;�)[��#�0�E�c�v7\r�PH�� g� P����r�;!��)�I[M+-���#��B\\�\"��k����:.��N��89	� 7�hԡ@B��,qt42Ȳ;-�I�i�3�4���`9S*�\rè\$	К&�B���\$�6����C�B�*�0���r�9��,|���`�9Fhl�%�/@�b��#'�h\\KOx�:�����Rv�!�\0�8+�,�у���I\"�0��\"j)���H#H��>��`�!(��*���g*3r��I�@���u^AЂܕ%��T+e⍭Θ�RI��b2�¼��h�D�\n@�ʲ�4�>�(ĿVAB����r���;{1�v\"F�0��WV�\nmF�����)��hȡ�7\r��)�vN�,�{o��k�4�9�M]\"�~R��\r��kb3�*���0��&�Ͷ��@���0����6��T�)�,����5Nb�ނ�\r���;M����%�2X:\r\n�T0�K2j'���r��ki�d����+Ʌ�n(����,�����	Kӳ�˱�D#��}�i�B66cZ<��l��;⍻����Vo�;S�5��rR�ex�8F��v۟��`�Ϸ���Z4���\n�����K���v#5ș��:Սف=��ۑ��HA�\r`�]�d�@a?��:����z\n �\0��)�&�B\"b�Q,h��ַ\">�H��,&�Q7\"HTѤ8ԗ����PEp9#c~_<ES����ϙ�R�!����.&����f";break;case"es":$i="E9�j��g:����P�\\33AAD�x��s\r�3I��eM�����rI�f�I��.&�\rc6��(��A*�K�с)̅0 ��rة�*e��L�q��ga����y��g�M�:}D�e7\$��	�` L��|�U9��E\n��a�J�a��aO��lX�g7G\r�踂�H�Pb��E@�R�\r1����V4�\"�H��\ns:��:ɴ�\n9���Y^ � 4WL ��}��5�x(�e2��[���ra�xd���rE��+�}�˚C���Y�l�`7t�'#\$�@c���~ؙ�ʡ9��!� @1+8��B�܏(�����^p�b�2k��4�e���\r�R��н;�h�:B��/����C�\"��J�\"��`7<Q��9 �Ђ2\rL3��ðҽA��z�-����p0�+�̦�-�P��@P�\$Bh�\nb�2�x�6����=�\"�&=�x�\n��b6\r#���H�CR捎�)��U\n�xִ�)����\rP\\\n���;1�)�b6Č2{2��2�6��c��\nkRΧrxH8���@�0�Q�^�1�b0�2L��J#��8\r/��#+����R:.�6�;\$P��%ɂ��KN1�0�'Q�%��\"�\0�ߪ�����C[�ln�[,��\$\n(ޒ\$Ϫ0(�J�� ���*���2%�'%\nv�b�GY�\r�]|̌p��Q�p@�%:�0����L���)���M[���H�j}S�� �=_�jԙ���@��Rψ�7y|ՙ�&ӡ�ii���MjD���r�'z�}�{���-D�\$�H��M�`��������^���Ғ>3��\n8>�X�#Z>���w)?v7�e�y��M�����������0�Ԫ��jR3m�L���,���x�@�:�`V1�41IYY%�Nμ)=d�J��HY��T�}�8�0H��[L�d�B:G�*�7����lp�k�_NX�����(i_	��(����}��\\`�	�� �.Uˑ��B�QJ�Y�e��>��x��y�a� �3��U���-��H�n\0RH6\nE���FG�(CVOU����LY�\$��Wb���7\$ȶ8'=�%�2\0";break;case"de":$i="S4����@s4��S��~\n��fh8(�o�&C)�@v7ǈ���� 3M�9��0�M��Q4�x4�L&�24u1ID9)��ra��g81��t	Nd)�M=�S�0ʁ�h:M\r�X`(�r�@g`�\\��*LFSe�f\n�g��e��S���n3�M'J�: �Cjس��R\\��C�v�\$��k'J�ʡ/4Hf�,�-��:ZS+�2���m�\"Ԙ鹓_�Ƴ.3pB��ԇ Q;�z;�\r`�9��m��0�t��\n\"�1f���9e(igg�o3�A_���+�c���b��\rÚH=\"�<��HKB	p<��p���\\��b��P����ģ,Ðȷ������@ �m\"B*��:�1��\"����6B�v����3Ȳ��x�F�p��1\0�15K���i�0����#rBH�3���1M�Tİ�CS��@t&��Ц)�K�cU5����\r����C��;�M��6I��;,��)�\0�7�a3������+a\0��\r��5A	�䷰���1���(2U��7��r�� -^Ǎ���ǌ1��;6�:�j1q��9��\n��k�Ԕ��c2ű��b�#u��B�X��h@ �K�8�#u�9'Q�`�-�\n\"�N��Z����qJ��1̄ä���+0�0@(	�[�b�.2\n�R<���4_4��\\�I�t�'�R��`��v�8b6\rg2��!KC��ַ��!��l��„)���H0�0@���]h)�`�ұ�-p��B��8.H9(�M�a���,\n��; 9%�-��:��s>�AL.ֺpHT��#�7.2<�гD�:����>d\"d��&���:��HCA�o��,��}\\8]*��Nâ�ڐ�a�^��0�c.c���:���h���:HR���Ct�+K(�:%7�ȁ�-0�s	�sI��(/���C`+\rh�76�~�C+�|���'gi�q4L�������Nmӝ#\\��p��?⸲T�win9U\"�X�A*%���%�H���H74Îy�5�y�8s�r�q�n&-���K�s�+�eQ1pX�I�\r�l����F�\0m=�����N1��c:w	pa\r����\"��`l\$&�\"��Zia�	0~ȗ̉H[8#��`%!��t�/R\r�";break;case"fr":$i="�E�1i��u9�fS���i7�(�ff�D�i��s9�LF�(��'4�M��`�H 3Lf�L0\\\n&D�I�^m0�%&y�0�M!���M%��Srd�c3����@�r���23,��i��f�<B�\n �LgSt�d��'q��eN��I�\n+N��!�@u��0��`��%�S#t�ߝTj�jMf�B9���C����0#��N7�LG((����iƌV�C4Xj�h�n4�#E&�a:���]�V�5�a`Q�\$�i�m�[�M7Ө���A���8��_f4�� �����Ͼ�b����p:��(�:�c�6���(2xƁ�HKC�4<��p���^qxb\nC*f�F�ܔ%Id:a� P�9+/��?�\0007B�%�:9H��|�\nc���#l��6�a�Z5\r��z\"��4P�Da0�#:J�;Ϊ�6��˪DP���N�K>�O%L�7:��n�MCr�(�@t&��Ц)�CP���h^-�5(�.�Ψ�Ϯ� �ʻ��\$�H�V:��دɨd\"�\n�x���)��ڢ-(@ıi���U��7�ʲV6��b�&�@� Έ@�Si��֊;�Itu{zA(�8:5�XW�[�!l��i�PT 2��\r/�UCB\\��+7�Ȋ��BI.k���3�\n(	�2:��\\�!B��:��h�ܑ\$�ܷi*��[�j��9(�ԤΫ�O�}�i1���A��D�WJ�(	☨���@3�K�2�R21l3o'h}����*�����vo�H���L�!;�V7&+�㋢/�`(*�<+�l(T���� �?��S;�<t���7��X&u݇e�v�-�r�X�w2*��tm������90���H�:IB�c{8�v�!+��M�����@�9n�C��������+jw���k�C�\$�>�b��:qs��мl��c*:�@1�to	9Atu��C+��3\$K��t�h˰�qO�S%��ۼ�l��qleP9�ׄYT9�5��Wa�8&�p�/B���+�J	,��Bt��5�&2*��aM�F�y���d��ه+E�bC1q�����@�s�~\0(('S\0Q��CL�&��y��8�����fa���a� �#����y��=�3�a�0�y�#m	\\�F��Y��h�},�h*2c\0!ѽX&B�`�";break;case"it":$i="S4�Χ#x�%���(�a9@L&�)��o����l2�\r��p�\"u9��1qp(�a��b�㙦I!6�NsY�f7��Xj�\0��B��c���H 2�NgC,��u7��F����n0�D����b��%��e|�u0���;��`u�O��ڍRi67h�:M.�P�U��ZT4�0Q��铰��[�R�u�DADC\r�� �\\JgH���h2��U���R2��S|SXi��j{)�W\\�gv%	���\\2�9Ȯ\\�a=`6\$�}zJp2��&�ĝX;F#fY�hJd�5@O��󨂏?�(H�� g\0�(s��j��8����98�\\�%m����P������(�F���8�ܫBJh��)Kl �c(�Ҷ�P�� ��(�@���(�>��yH���(�v7�B@�	�ht)�`P�2�h��c��<��P�B�Z�\r�H�=&\$h\r�d4���*\r�Z*b��#)�(찍# �\rĒ�\r��\"1�J�!�QsL2��4P�4��9��ƨ�tZ\\��uC\0Ɍ�JF�U��B���[J���۴�:�#80��\0��\"Ȑ䚦)�Uu�47;4E\nP�j4����j�0I�[U�J�T/�Ґ��������(!���8+�3(�Jb9�Ġ��%��:�k%F\n\n:0�5���:��B�`�~�ƖÁx�☩F\nTJ�3�Q����AH�5�����mD7#�x��W��̐=�T�6��f~�:���&Ò�����G�Z#�	�{��Auм����7��\0ш\$5�����N9��A{NLP�J�0ĵCK\r����C���r��pZ�k�[�J�����\nBJRM5έ*1��)\n���Z�-E�<�#Rs;�9�\\�����JZ#G�X6c�1�w�l,*�B�A\0ۭ\r:� 6UO���W̅\"y�K_�z#��^Ci:��K�a�-)��˥	R�x��%-q����7�:�.��96�����H� x��<�\$��[/��ü\\C�u&G7���K���x�I�����+�z�(��B��B�J\r�!�\0�PI{/�!�w̺ۉg]i�>#n���\nk/��8E�";break;case"et":$i="K0���a�� 5�M�C)�~\n��fa�F0�M��\ry9�&!��\n2�IIن��cf�p(�a5��3#t����ΧS��%9�����p���N�S\$��4AF��\n��EC	�O����T,̰ی�t0��#��v�GW����2e�ю�S��K�\rGS�@e��q�:�k\0�^\rF��<b4�D㩴�]���43�\rHe;d�Ƹl��e3���H(�`0��Eiy�� ON�z�R\n#�M�ۙһy&f��R�pt�]t&�MZ����@Q0�_��fPQ+l���X@�!�c��7cH�5?�*ʪ@LB<��P�7�A l��@�Bx�C��4�*V��B��Ō���4�KȨ�7\n3gB(Z����z����ʙ!1���1��l0��3d)�c\"�,\$�j��AL�tAɨ܏#�P�\$Bh�\nb����p�<�Ⱥ����\\R\r����2���8�c�ƣ�k��@���\0�)�B0X�/���:Z�\r��(�)��@4cd�\0�)xܞ��2j)����� ㄗ �e&�����\\u�޿Ya~3���68S�\\�QTíP��#*j\"��Z�93:\rg!n��\"�\nz��\r,@��Q����Q}b��o����\0�\$\n���J.�����3I��km@˶u�� ���`V���^C\r�ǯBx�*�3���q[f�cJd���8����A?ň^D��KFv����C��#@��r��ϱK��X#��g(��P�mgڥeZ*c�?0��B� èי�pF6�(r�b�35�8n#����#}*44pA\r�J��G��S�X:+<Rʂ����|���4l����j�Ȳ��˰<��6Ð�X6u��&��5/ɰcS1̮[m��)H��t�,�\r�X֙�8ؚ�#jV9\$�ȃ���j�,��v�=��.����-᪋���'�UF\r��UU��B��������4F�q	&�02���G�a�p�Ğ��HB�	�\$���^P��GF�x�4�T�+�~E�W,��N^�%OF��LN�A�R�ʐ�X�)t\nF�:��B!	";break;case"hu":$i="B4�����e7���P�\\33\r�5	��d8NF0Q8�m�C|��e6kiL � 0��CT�\\\n Č'�LMBl4�fj�MRr2�X)\no9��D����:OF�\\݆���Q�)��i��M�8,�Bb6f���Pv'3Ѻ(l����T��(=\nipSY��r5o��I��O�M\r�\n�b�\\�����~�Y��JӁ��S=E\r��\$RE ��M&F*D�����pTLr��o��ф�\n#�d��A�L��:�ѯ%ނ�F�%�MVY��R�棋(��7 �)�;�=�-�)�M\rI\n���(ȃ&��A\n\$PH�,Cp���\\��b	k ���%�4\r�\0�7�Cb�\r�3bʁC\\X�.x�b�.ؤ�H쿰Kr�\"��h�4��2=¢(9�����C�!�ntR�\rҰ�����i�L�ͥ\\�28At�2T�M�|�9�T�<��,�\r�#��5��8Ckf-�4��.��h\\2H,��\n���\r�(��N���KFS����)ɀ�7��Z�apA1�#\$a�CP��?Q�与{.߫�@��M�06��p�0��B�2�hP��\$9�5���*�6.�Ӆi��~��#*n&�6ݺ�)Q��)��`@����� ��c.O�W!�5rQXI�򺴭lc�2,��'-Kd�*��N���CB����\n@�i�샾� �B��\\Բp�'��ۣ�z���vR���-|'8)Dn����p)!���E�6�\\i��'�b�`29�\rc��[�7��0�Xʔ�)�\n�P����Š�*��Wh�,�o�D[?�e��,���u��A��<͠��O����'�d���u�і32(�\nn,��@�^p�@89���I���ج�#B���+��	�Fy�{M�ʄ㻝��4R<�R3�����b��OLJ\\�:�A�Ͼ�n�K.��P-Ee��'�ܔ�-�E�\n�@k�\\\0C`u�(�p��� 1��`��j�S����d	�D*-����`Oa�,b\$x�\"HHjC'�0��^LKqp6�)�'T@�Ql%mȄ�|c\r'��b���lOg��!�llH�J+J��E�Dř\$s�8�\"��M�Kl0ԁ��FzB`oI��H�J@ y�Z��m#�j��u��R��k�\"Q��8��BG�<C aJ,�n9\"'��J!���,K�\n	��P��%��Ɍ/�ʆP";break;case"pl":$i="C=D�)��eb��)��e7�BQp�� 9���s�����\r&����yb������ob�\$Gs(�M0��g�i��n0�!�Sa�`�b!�29)�V%9���	�Y 4���I���2��FSЀ�m4ǁD(�X�a��&�\0Q)�����G�<�zF��� :�O4���n2��v\\�\ne����B�U��W�\n�ҷ5'��t���(�u6�&3�@D0��\r�2T2Ω�KY��r����Q�oܝV�Q3JyL��y�U�l\r�)(�Ɣ��E���u5F\r7���0�����h(��	�Z99/(ȉ��0�5�HK�P��<���4a�c���Ih�pHEA�)�C�h5C8�=!�0ء�B��:?�Ҵ�R\0<��r��{h��!jz4����2#��ڹ	�\"\r��h�%&!\n�6cJ���Q��<�iJ<��#,�0ʁp7�\$��γ����s��%P�)�I���@�	�ht)�`P�\r�p�9T�������(I�\nbK\r���E��h�	�x����#�;�Jpֈ�)�p@)��\0��(T4���(�:��\n����S��M�+\$;��hڔi��M��Ώ((\"\r��:�h�4�A\0�\$\n	��(5��>�!b����#�L��Z�V�-o,�5�T�U���[�Z<���br2��2���)w+�6H7���1��%�~1	zb��0<�ݍ��3�Ik�ì��B�#v�\n�R��wp�V0���82\n�25�m岕���x�\r�684��8D�@-!˺t���3�Q�O���WV�0�6�l-�1@�ʜ��� Ǡ���ĳn���-�Ӧ(�p�4����<�\\�:9�9B#ֳUL@�:�������f���\\��\r=���w�7`�,��j2L(�v�ri�*�g�2D�B������S�1�W������\n�ʳ�:s���W�C\r�í�c�ۍ~����K3Z-p�Wn�O��#�D����9�j!�Gz��L\"�\nA�,��6gh6��UH��\\�ǔ����gϘ�.�M�3�y��0t��a�yv=��!)���6ă�Ɠ�A{ov!�����?�N�\0�\"�sak`1�\"���.}�5@���l��1�'\\�_Aa=��6��I!��_��A��R�QBZ����M��4ɨ+��^^9#Ry�&��MhB&��	��w�t+�����N�Q@�\n�A��+\0��a�{0��	�&6��\rm���9\0\rIp(���6҃,%�\"|�l8\0";break;case"ca":$i="E9�j���e3�NC�P�\\33A�D�i��s9�LF�(��d5M�C	�@e6Ɠ���r����d�`g�I�hp��L�9��Q*�K��5L� ��S,�W-��\r��<�e4�&&#��o9L�q��\n'W\r��hc0�C���1D̆�|�U:M��фS�`���X :�qgLnb� �� �S���n����R�I����CM~�1*N-t�'�d����r���� ��h�c�q�?\$�lႋS�8�eN��q3_9���3���m�p|+H(���`���8�7\r#Қ/�2���e��0H@�I��ӎ�(ꓣ�F���\0�<��HK��3�<�*��xH���엯\0Rh8�Cb;\r�H�6\r�'�J2ڙejm\n�#�h��H���B�@�1�fe\0HB �(�ꊴțP���Ȑ\$PT�p���:����C��,Cܻ/�!p)�C�>N�e\0PR���KR��/L\rll91�@�	�ht)�`P�2�h��c\rd0��R�A\rМ��\nt��ϧ\n3�6<pX�;��p�7�m8@!�b���N�2��93����	R�6��c1u�&�Aԫ�]�.�S#�����tT ��x���ĩO&p6Om �4��.�ۉ�h�@0��l���94� �`�k&��4�3Q�K�����z4J�TԵb��( �z-���(P��-j�@�ʘѓ��9ǩe­��::�	�৯�Z?��\r9��b&(m�\nx�* �M�#	��P5Ȥ2���ۚm6Ү-�˲@�.C\r#����	ZPI�Y�Q�0�8B:�-l�Ɲ.G,e%��0�E��c�I?�<)�=Oc�.k�b�9Z�&\"���ò:���L��K��	�L��h*I�\\�tbp2��e\n��u���\r��y\n1��ҡ,3��6��V�O�\n�TZ�no�4��\$��S���%�x�`+f,1��<r@\$�@��H���9�T�:�&�M��ip�(�z��3�����(E�J@�I_�\n_�\n|\$�U+sN���{/�����陠'4��0�1N|_�A�e�?��\n� 0`��b�G'\nYP �G�`g��~���!��'!!�g\n�I����|�!�=!\r \$p�!������#B���s5�\$*��1�9'��Ӡ^�xt";break;case"pt":$i="E9�j��g:����P�\\33AAD��� a�Dy���V������v4�NB���u4����QP�m0��sl�i6�̒Ӕ�c���2ЃE�L��\\�?��f�c	��o�F�9��a6D�Z���m&)��4�&J��U9ʁE��a�Jΰa�p 2]���t}je9Ү�}�j��\r5��P�̙�k1�����gX��]L���(�a�ID���C0���k_���Q�o�,|bf��\"��+��h���rcG�n�`�v���:���.���!� @1+p�P\"�ޏ,�7, j���(�hPƄ�IzЗ�a\0�7�k@'�NSJ��e:��\$c(Ư��\"���Ҵ��+8����\$����#r���i:SA	,|�\$�C�����0��̲��l��3�N0�\$Bh�\nb�2�x�6����=�\"��0GOX�G	S!-��c�IB�\n�x֓�)��; cc\\��|����2�6��bT��o�n�-ɣ��0ނ���Z&�\nD�3�V��Q�\\�L��l�6�و��8Iv@X���;����\\V�ڑ2� �&��`4��,b��t�x�ZCCB����p���uj��C��f�\0�\$\n�89.X\0@)aJJ��+��\rɊF�\n#�r:V�P@��)��D�kP�QnA2����2��5��0�X[�Zh(	☩C�-Rq}Ka\0���Vj����Z��p�\"�x�gM��o��Xː+�(@1��sX�8�}��:(;��\$��Z��i�����z�v�{�����]5\$�{�&��`��H����ս��;H�h,�Ns\"�ƔPc>\n񱣃\"�.#CF��td�>]�Wo��͏v�r���c��,�2�R��88L��V�ͱ�2�5|랞�8����t�@\$C�\n9����|�C�8�/|�i�����T�{aw��!�(-홷\$RѨ_D��e��J�V�غ*�P[��0F�1��殚�qUK�g�@��3�S��5�7�	[�V���P���e9c](��X`o9%�3���ras�ug��72��q�PyT���v��<g��v !�	/� �b܂�f���B�octop�4@c׈�S��";break;case"sl":$i="S:D��ib#L&�H�%���(�6�����l7�WƓ��@d0�\r�Y�]0���XI�� ��\r&�y��'��̲��%9���J�nn��S鉆_0����Th�g4Ǎ�i1��b2�%�\0Q(�z����՜�\n(���h�@u�����g��̒|T�xvR)t�&�f�K�wS1��5�M'�A;M�U0�u�XD�T�i��V	�\n&�d[�9��m2�P��N�6�ʰZ1�?5ܰ6|��� �A\\S���r4͵1OSj�@��a8ߐ�L���?1&#������RK��C�ʊ�`PH� i� P�ϡ+�֣I�t\nh�J��Bb��5� ʛ\r�4<=-@\"��h��Bx�C�2��P��5/;F7��j�#`Ի�	�V7(�;2Ǳ���/*�����0�J��-!i0����,؝�|̆\r��;G�SI@�	@t&��Ц)�C \\6����K�B�2=S��\$�+Ё����69QC�2�k�.��L0@�%���)�B0\\K,��� C246��X�3�5�C�^��#���c�XP��{������\$�8�3��K�E�n�T�cW]�+�2�.��쭽���Ԡ)}^��J��i\r#\\� ���TЃ�K�UH2 �,�2T�}���@�\n@R��ψ�7��~��i�ϵ���0�>������ua|�e���9��}����T��vz\n��n��c��x'�b�v-Gѫ?\0�ej�b�s�#�2���\"=&X���<���?7�9�z�������g#w��*D�;I�K4����n�I���#x�\r�~ �H�2��f��:\rH�Y��:^)����/��%��5[������lQ�!��q�Vj}��K>��oˑ�W����p�l2���>�(�M� ���������<�߆u>�ߧ�rT\ng(6��N�Y&����|��2�{�i��%֟��sA�7X*��k�1ph��7�`�!�	9��H�It(���B73	X�#g�,��Y�I��P���LWH�<AH��L���;Fq`Ah�yotPAj����y���Wnr�ZDH����ޑ�gE��ő�\nP1�sm��n�CJ��*AG���Pl=,R�BY !��P2�s\nM�+���b]�h5a�H�j�T�Ei�+3F";break;case"lt":$i="T4��FH�%���(�e8NǓY�@�W�̦á�@f�\r��Q4�k9�M�a���Ō��!�^-	Nd)!Ba����S9�lt:��F%!��b#M&Q��i3�M��9����\r�Sq�6ib��\0Q.Xb��'S!�;��Mf�0��i�1�B�@p6W��B�rs����J1ΑJ������J��#�H(�k�TjzR!��a��PMD4�e�k�C���e�֦����l��̦�o�K�`�t� (�e2I��yvk9��R�>A�^�_�҅^Rj:���r�<v�a�Ɵ��T��C�ċ��B��� @�/�\0�h ΂A�T:- P�2��p���Zqj	#*������:�N�4�+���A�h�2�#�V��#���.�(�0�\n��!�H ��0证F!]/���:���4�J���,����NC\nڅ�L�P̅��46sZ	6���:MQZҒ;+�b\$	К&�B��c�<��h�6�� �'��{�����5��\0Ȥ��b�F\"��97�r�G�K�3�b��#4Cz4��\0�0�ɚ���U̫\r�z_Q��\"mQ3�PΰI �b�i{]M>LP�\r�J���K �C��B��CX��Q�<1[\n0��jIU=�PA	��J����`ί�2Cڛ?���o���5\$uz͆?��|%I�H�78���,C4�J���(H���\"؍��9��\$\n;K�lh@'AJH+\r#��,��ZP���z�4��B�6�,��6;B��	�0�����[��H(Uv��3���)��>7O�\0�:�z�ƾٕ.��\rh�@�.N­a���7�Ű��o��p�å��1�\$�L�,��7\\ԯ%@�z\"�(�ԫѺ��t��\\aк�����W@��,��@4\"V�=�/��W!\0�8;+��4Y�xı����3�������Db3���\"IS{�_â��\$��XX�!��=b�N��8d\0I�u	�?�H���u\$��WH�B\r��1����pe��U�g��&��<�@�I k�@�h��*�N�#����S�t3#f���0J��+pn}\"��YH�O��w��Ⱦ+ᩎ� �g\rA�%<Ր�W��m#�00��B��	O\r���Et�dBe�d���R�A@�S�DC��g�4&��V�8\n����e��J�7u��C)�zEɝ󇦮k�`K\$K�'�RP\n�L	!�TҺ�Q[�o����r��Øe�E�[�G7�(Kdxј ";break;case"tr":$i="E6�M�	�i=�BQp�� 9������ 3����!��i6`'�y�\\\nb,P!�= 2�̑H���o<�N�X�bn���)̅'��b��)��:GX���n�O����T�l&#a�A\$5��)\0(�u6&�Y�@u=\\Γ�\n~d�͍1�q�@k�\\��D�/y:L`��y�Oo����:ц�9Hc࢙��|0��:�I�Ze^M�;a��e�,\rrH(�S̦�a�FL4��:(�|�1��M&=�c����}˃�4�D)��a��t&Qgˇ�O���\$�Lt�~�/�*�2�o;N�A l���Ó�4\r&N10k:<���\n��i����B6��,\$�h���`��#��b�\r�p�\rip�E��:�?A\0�E��3%�`�4����0����\"9R4a�ZN�\r#l��\naЈ\"C�\"-�3H�.�����8a���֟<B�^�D�868� �)��� ��@b��#!\0�\0F��\\�(ڞ2#\\9,��䓈C\n�ԧ�/	N��>��#��2'�8���C�ڨ��Pʩ��v����؟V�Um\\WH�>9W�2g%�`@63���S��0�+�d�PЕ�0���4� P����MB5�U�:��̐�\$\nr������aB�H��(��jr��*�bN��h\\��3#��Ch���0�c�+�j	�Ͷ���⦏4H>@9=+�ܓ΃x֛3��?��x�*5��\rkb�K��/4=X*(�b�5+<`�6�3\n��#=;�Hß��d�L�I) �Z9&-�z0ύ�ʸ�2�������jC��7^�\$��ޞ<�p@7,Â>;&�@:,è��2<� �E� ˷2��(��7Dc(��#���]�\\֎q�a�7�H��#^�a&,��u�7!���P�!=�	?��Jf��g�6�6oLs�go��������Uk��ߜ����@�~�ē�\"�Y��}&1/�G^���!7+��=\"<�Y�{%a�=����d�=�#`\n��=,�Řsf�!�,p;��Z�iĔ���\"�5�Ǆ�[{�y���x��uD�,7�,w�\"�� � ���nW3��~R�`I�lƮ���_K\n�3�ȪA�";break;case"ro":$i="Ed&N����e1�Nc�P�\\33`�q�@a6�N�H؁��7؈3��� 3`&�)��l��bRӴ�\\\n#J�2�t��a<c&!� ��2|܃��er��,e��Β9���l�F�9��a�0�����z��&FC	�eV�M�A��b2��q`(�B��8#9�q_7��I�%��fNF���a������%���59��j��!U�ܨi8f��,��i�g�qC�rH\n\"]d��s`d&\r0}t�Lr0���pV��m�hE#+!6e0���Sy��t����q�i�q=�]�~�@P��+�H���I7��d8%���2�pR��o��7\r���\0��=�LAD�0�#*'A j��h�BF���\nƽ.@P��/����P�/Lp�����\nz�4l�9\r�pґnBd6=\"�(��T9��@�5i�ڋ�ʂ��rC ����(HRF�D#�2�3�8\\�(��?/���D�2�9�CJn츠P�\$Bh�\nb�2�p�6����W�\"��'n�-JS|�6>h��\"��#/�x�\ns\"4�O�\\<��>�c\n�4iZ�1�Ø�1�qro'�K���>(�:��������6�r^�ܲ�؏������3���1��@�=7l�8:����7����.�\$0�Ä	24o�@3��Ҹ�d+�F<4����)��;\r+��A��LE��m�8H��)aN\"�mj~��-�?CXh�K�kD����9��h�5,C\r�ԁBl]��„)���\n����\n���l'�#sBmr�x�@�,v�<�=�B`1˩H��lL�ˆ���Қ����*��:�´J�@�9�����>r/>�z|8�u+_:��B�������M�f��0Vao/h�AK'��,á\0љ��~����h�b�#���B��Lƴ&���)�u�q���`�/�=?`���]\"v��	w��]\0��v�i�v�6���JI1�P�)���r���=/��&��a-y���V��c\rdŝ�bТPzg%ν�A���\rD!ɧ����tQh�\0�n�Hmh��r.FM�/��\\<}�c�0 )��z\\��.L��&DT�´/u�����Kp���6X���3�X6.�@0�\\6��a�n��)gD����Q0g���G�zQ< P�\"4�@Q�/�=H��K��lK��0�U��TJH�(!��\$���Jv]��N�?�b�@";break;case"id":$i="A7\"Ʉ�i7��ᙘ@s\r0#X�p0��)��u��&���r5�Nb�Q�s0���yI�a�E�&��\"Rn`F��K61N�d�Q*\"pi���m:�决y���F�� �l��hP:\\��,���FQA��	�A7^(\n\$�`t:����X�e�J�J����Z儨�@p���H�S�h��i�����gK�����SD�G2��CH(�a3R�@�)��b4:=��\n&ʫ=��W@r6�#��wK1:�ZU��/�� �Z\$�Ơ���#i�8\$\0P�9�Z&\r#j���,�4��H����ʴ8�01\rL[d�\r#�~	��8\r#��%Űkԇ�0�f9\r	T(� ��!+��CCdo��3��O��	К&�B��c̴<��h�6�� �	p���p�H�)`P��6I8�܊�x֎��)�;,�\\F�@:���̱+�䦤�Dw;��=�+)|���HA�	�`4��`�N��\n�9��|(�@,�*��JX ��|�7P�Ȗ�c�*H����c+��X,j:�\n@���.p�L�!B��*�*�VM�͎�k\nA\n���A�-�3�I�|ֹ�`�תT�/��5��X�a\0�'�b��9(��f�Q�\$2���b��,K��b�B�\$���3\r(�\\�(�ʱ��ԕ/��\$\"�t�Me��6�V�#���Jt���2q`9âҵ��\$,��Ls9��>��Р�3�C��C�`ʨ���{T�j0��{U����6��P~���I�(*r�!�b�HLVk����4%�h6c*1����W��ǯ#c{�33��p�x�R9˝�,I`�0�R29MJ�U\r�[���\r��\n)Cq���*\\��T;ʬ�h���\$�u_O!���<(M��l�X�7�M�Q�=cjű�џM�N4��RKG_��h��	1[��嘳X��n5!:t�!zA�";break;case"ru":$i="�I4Qb�\r��h-Z(KA{���ᙘ@s4��\$h�X4m�E�FyAg�����\nQBKW2)R�A@�apz\0]NKWRi�Ay-]�!�&��	���p�D6}E�j��e>��N�S�h�Js!Q�\n*T�]\$��gr5��9&��Q4):\n1� �K�I�Iзh���IJ�6H�B?!���([�&	����sD5AW�ꋬ�QcCXMe��1v��6Pe��:��C�ռƚi7\n����.,V���Ի����:��,�[�ӵ���7��ˑ��>��2S�jbF_#\$�@�/��T�:�q�G�%t�9�g��BhC�k\n��>P�����&��4'\0��B�@*,\\#%Ϛ\n[��\r�G�O�D�%���Hqi?J�.�+\r�\0�(��P�H:����̌�r3s.��~ȷa(��'I�7N�9��7;Gh8<����7�A j���2\\4�6��GOK�x�ELqkG���37Ry6���?����Shl�Ĉ�Z���?\$�<���9�MR�+j�\$(ELݚ���)pk~�9L�j���F���d*��\$�3�(��|_-����8Jy|&��������\\���:Feڐ^����/���\\�����⎦U0�r@��N\nI9�E�\n2���r�����Y���k:\\�X7c`�9DK:��̑���4�'C��)�B3N�B��z%U�\rrg���A�T�&�\"��+�������]�r���3W/͒Ax��Qz��.�p�#���MI��hÚR������Y�0�U����X��/�/���\0�JPT��r�᜻[ch�RA��\".��~�ˮ��72k��#m3����۲ˣL��+�-�6��O;�]�����iܥ}���(�۴�a�H-�J�\$�s��m.6ʧ�*^둤/�\\�%��r�^;�B��\r��~[�7D�>g��\n�L����6�ڑ�DF��tR��[+���q�A\0P	�L*Ӓh飂J:�Ƥ��0���h�hM\n!zс�5��~�\n��P�߻�Z���h��L���V��)� ��u�� =D\r\r.KWY'%\$�0�`\\�:jL�6E�Ҙ�+�v���	��X���F�jΟ��I��X��LL���ge,���@a��(0@�i��6PΠA\0t\r��:�\0�C����4�9RC�n+dB����Tᣗ���'T���T%��#�t�dY-{D&`���/�+w�H!U̲�`�j?En`0)\0�N�e_Qྯ��#S^pYɓ\"�r�4dO3�4�9���,��.��a�(�\r���V�Jj{Oz�������r��2��v���Q�c���&�&	M[�G�A�bMBѽx҂�J��v�I�V�g�5�+f��ɣBt�-!��<T�j��D�!�J��ҤM��h�@�Sƙ��PH��xM�a��GHs����MJ������4Nz;��\0M7^��ۛ\$�=w\$�#��'��!Vs(�%]���O\ra #4���+\\�L\r�2���U����6���'%xt\$I7Ժ�,�>��\0\\[�l�H�G]�0��MH��@uڣ�Uf���+G�ޢ\\��]���ti`� �nD).�v]�#O�\0�F�4�VD�7�Q' ";break;case"uk":$i="�I4�ɠ�h-`��&�K�BQp�� 9��	�r�h-��-}[��Z����H`R������db��rb�h�d��Z��G��H�����\r�Ms6@Se+ȃE6�J�Td�Jsh\$g�\$�G��f�j>������l�]H_F�M<�h����Ѩ�*�6�J�29��<Oq2��y���,*Q��=����\$�*!`,�b���eqQ�HZe���M�\\e��E3�¯�c���b��hR뽭E%�@�q���/�A�Hx�4��еq��#s�au��ƙ�\\{ �Y���K3E���\$E�4I��=J�G�E\n��oɠ��JbV�7*�4M;��p��:4O���@���F��\r�aE	Yx�\$zh�Fi��;��3j�P��*\n&2 ��ė�!,�ϧ1ܣ)�ы�K<��f�%�\0H�� g2�1;�D4��4�m:���L#���њ�'�NR�� *�@�ǈ\"��h�4��C�Z#D�bY��#t���p��S�ڐCL=��Γ)F��,�O.j��&(jO) ��`�AL���p��բ����^��r�|�˖�a)6%�dVjU�9Y�]��ZLM.���#�ˣIKEF�haѠR���\$P�JahZ��\\-��\n.�	,eU�,�B�)u� \r���;�J�\r�Ȑ�����0�)�B3!P!��\\�#�b��ˤF,\n����J�%e��D�3��o6M�`��1���Z���	H\n�/^ȶ�!&����%(4W��z���|�\r��s\n��j��aӋQ�U�\\�</���n����i���x�����u��E�y-�����B�\n��N&��9ZhK�B�ߖ�\0�\$\nj�͸���B���N�Z�m��v��������s���u?�hS��v�(����<jX ����Q�`x��Bh���V�Y]�9n�kZ�n	KA��2����]4�խ΂B�!S?Ăb�h�t�<)�D膊I���M(\\���)�h��d���<���A��By1An鈺��	)�9�d���pTśYQ�D�A.��A�kuۛ( ���@%i\$@�3(���ie\$~%!3�Y�r�7g|Ȑ����ZhO1+:������RxCxu�0�`�po�9��(g��H�C�d!�;�@�d t!�6X�d���(�L�I2B��5rB�յ�H��=@q���r��옕r���(���*=p���0��ɜ�}k*(����ㄉg�m�(����ƊkE��g�3VL!f�IAMI�5�nA\r��Vvى�L-�Z��v�b�ag0nhE)R�	� S���+��)��Y)G��6nIdIJ�a�Ɛ�&}BfԚ)��?(\\�>z%A��	���E\0I3AQL>UE�'\0a��Hr�J�X��J�����4вG����|vͫK��8��~`�l��y�i�4�����w�9�Z}A�H���*�9A07��Cpg�u�&������I.�F��.����V���6��cm���n�_��%�~'�jo0���(T�A��AS�\r�јh\n��{�D�D��\n`e�Ѕ#G^�Zԅ�3ұvh� T�8";break;case"sr":$i="�J4��4P-Ak	@��6�\r��h/`��P�\\33`���h���E����C��\\f�LJⰦ��e_���D�eh��RƂ���hQ�	��jQ����*�1a1�CV�9��%9��P	u6cc�U�P��/�A�k��\n�6_I&��N�~]�3%�&�h,k+\n�H��D�RIVow����>y�g�����	�4%�����U����B� �Z�5�Ŋ�W��i0I��A0��-y��#��損m֝G\\b��	'hi��E��Ƽ�IS%�����#X�s�h�HI�Js��N��X\$�S�����h�H��������'����)�#L��\nR��0����Rr�B����*�{/щ��;�[w���Ȃ2Q���\"��%��%H���ޤ��H��A j����qj1Fl4%��Y�Q!?\r��i̰�\r�fh��\\^�'*� �9L\"HJ��s��jHO6JP��\n�\"��k�:�<NКz`�+��\$�l�ߧ�S�hѭz�9��� At�T��Zj��uukX�HY^R�ik]Uy_*��F-�kZ�5'��h	@t&��Ц)�C �\r�h\\-�7��.�t�iʆ��P��S6�	�j\r���\$�*�B�K/\0)p@!�b���4��]1.�:Ɩ�ֻH���BN�*��H�|�3�o|B�[F�W��\"��������>�:����R#?!�\\�XGȎ�������ɥn9��`��Z���*KZ��/���.�m>�c�[���kn����c��k��+��&�(@(	������&�sv�'ͤ���\n�0����	��z]0� �Ĉ�Z��*�9�׊�(�f�+҄�xZ�&5�\r91�}��É☩��	�]��v�\0�tiN��q�jg4������z�����w�)�飔0��>�|�o�>�k\n���P��;�\"J�b����2�!��v��\n�zN��X\n\\KDn�&����ɱ�\ŗ���ۍ�B!�:�\0�C�e�7�\0��Hv\r!�2�p��\0t���8@�!Pt\r�@����%�!rp�\"\\M(��ܩ8\nw�cB� �02K]�NP�@�4zձ2%��/���§Hh����̿�a0B�1fG3AV)��=�e���Xxo��h�UJiBl6��A�(���!����B�s��!A���cmDf>�f��3�x2��J�:�ZDw�,A׭�vMO�Ng�zP�2��\r;�P���Cd�)�V\n	�v�zm|M-\r�~B��R���\"38��t=�~O�I�D�l1�d��:+l���x�P�ӟ�ܼ�7��R\n�|\"v\$�;%��N卓���E�M!���W�&�4��K�\nH�P��m'��AB����_�Mџ*f����F�!)�w�=";break;case"zh":$i="�^��s�\\�r����|%��:�\$\nr.���2�r/d�Ȼ[8� S�8�r�!T�\\�s���I4�b�r��ЀJs!Kd�u�e�V���D�X�T��NTr}ʧE�VJr%С���B�S�^�t*���ΔT[U�x���_�\\��ۙ�r�R��l�	@FUP���J����u�B�T���dB�α]�S�2UaPK�R�Yr}̗[:R�Jڵ.�V)�+(���M�Q`S�z�s�ӕ�:�\0�r���Uꊶ�K��.u�YоH�S>;Ƒo	F���g:��L�W�X��:s�	�����Hחe��P�(x�6A�#(�\r�x!pH���ZH�9h�\$���B(e���iI��\$� �J�T ��@'1T���j�IW)�i:R�9T���Q	i�,pL��B�G�2���	'J	�8r�SBG5�\$	К&�B��c�<��p�6�� Ȗ�eA�J.r�#����F�#`�9%��E/R�ۤd�b��#	9Hs�\$b�t��l:M\$j��i*˜ԍ&@4��O��	4��)~B�e��QhI^�Y��W�,�\0C��c����,X@oՆ�U\rir��m6WX���1RĲ�)(W�t\n@�_�K�G�k�D(�a˝�q�ɂdr���p�61\\Z�5��-�yDO�Q@�l�bU'�v'�b��^��G�\$�3{��1\0B��~c����B���\nH���I�NdAA��Yrs�w��͖G16Z@�ɳ%�A�/�.ݲ��S��=�ʳ��P�7��\0�0��(A���4��H�2��@:\r�\0�8����@�9���Ʌ���L��\\�ΉN豯+�H���^[nsJ��l�\$����IV%�U���y.�5��br�dk.!��`V1��H�5�x�!\0�0���A̍�x�4���@4��L�pA�W����F��R�T��Zk�o�䧣b�!E��\"Pr�� Eyt/¡��q�\$�����)�Q\\9����Ô@�.�Ũ��y����`o/�7xq�{�N)·@��-+!��&9���d,t��|��+O����U�ȑ\n&��lp\nf���!T��\0";break;case"zh-tw":$i="�^��%ӕ\\�r�����|%��u:H�B(\\�4��p�r��neRQ̡D8� S�\n�t*.t�I&�G�N��AʤS�V�:	t%9��Sy:\"<�r�ST�.�����r}ʧE��I'2q�Y���dˡB��K��B�=1@��:R��U��w�Dy�D%��h�<�r�b)��e7�&�p��q��i�U�ʣS��0w�B\n�P�����*����iu-�>�L��)d��Z�s����t�t�4ȅ�]l�t-�����\0���m�g:�P�^+ܩ���p�t&a�Uz[s�Wr�--`\\��\n��d+���)v]%\n���\0�<��@��C��9�Cp���\\qj��ℰ���vs�z\0F���\\��đ�]�Rx� �i����|@�1&C����V�IZŮ��_�AU/E�v��Y@��2BJ��2^:\$\nZҿ3a\0@�Њ�@�R�v[49_*���\$Bh�\nb�-�4h�.��h��\$����ԏ\$�kBԶC`�9/E�t��b.���BhB�)�\0�7�l���gIF���񜤱]>�G-2s	�O��6�3��_��tEY�J��%�i�l�HY\$	�!�ey_X�a?��XJ�ɩ�C'AZD�2Ʋ�!�Z%�)�T'9jB,K\"��n��J�1ZU‐(`�N���a�!�V��}Բ�\"��)�jܜ�qj��]�')D�E?��x�*��L��R~S�'1pM�W�ӧل�ZB�Z!@�a^���2�4AStA�96W\\��DI�I7�G16ZAl��>52��Wh�c��8���\0�7��\0�0��(A��4��H�2���l7���2,�l4\r;(�0�]8\\���2����N��9r^��;g/{�7�0�{\"���3���'��ng)�IzX�\$�~�u��c`�1�a�0���6��nho��3�@C��{�Qs�!�YY#Dqt��ێ�[-����g�����K��K��� N٫,��FÄ�WÐ_��..M\rM��r��c��\n	��0�0��DB099�`�Ѓ�)b\$@0H`9��F��1zKDa�S1��&UӋb;c�����io.��F3�:�#(�JB�";break;case"ja":$i="�W'�\nc���/�ɘ2-޼O���ᙘ@�S��N4UƂP�ԑ�\\}%QGq�B\r[^G0e<	�&��0S�8�r�&����#A�PKY}t ��Q�\$��I�+ܪ�Õ8��B0��<s�W@�*TCL#�i\$\n�AG�S�,�ƀA���B�\0�U'�NE��ΔTF�(H2j?wE���dZ�ʼZ��0\$�M�_��pe4PA��:�Ω�Q�c�/)@��u������kPs�a\0M9�ʗ*y=J�+iy�]J�L�\\�d?mʈ�G{�\rUT���h4Dq_rAV�Ѵ�>U#��N��#��8D?�C��Y_�/�lr�j�H�/��A�*�^A\n�f����[:\$�(࣑J�q9�P�96W3La8s�\$2R�#+l7\r�PH�� g(���HN�Dŗe��B��L��ka[K\$\"�E���t�%��E1P>U���\\r����]-gJ	CG1_��*z[�g!vL#��OI\0@���C!Ȥ��%KSӌ����G����@�n���<!��CH�4-�5��.��h��\$D��iI�A��!2B`P�:O�2r�\\�1ZՐ%P�)�B4�>��A�1RS)\n�5̓d�MQ���#�c�]�H�n�(e�L�')F�֐-yؐ-��A`��#�5`��I2H<�����I,1�iS��)�1v�p@	u�D��<�4M#L� ������\n@��g��Bѝ\r*D*(zg�cA%8��7�!��2x�:N�W�T�(\n#�����Am�>�J�O�j��Q�AE�c{b��צ	☩g?\rKx���\nn@��	��|Šԩji]\$�)a�6x�A3\$	ڄ)Z�u��=z��~'{�s|qG�AEdI�p~4s���h�ľ}R�q���T5B��?��UE�Pt�d3�.�*��m@P�7��\0�0��(@�\0pA�;��C:J�7�\0� a��:���XaP�~'N�q�\"�2���\"8d<G��~/XP�-�-�Ǫ�ĳ�,O�@���`+a�4�0�xn�`�����7�@��� \r!��T�@�*�e�N����.+`�*F�S��&����9�S�}̉w��%��0(!u�M[�!d}�3,��='�Z���V\r��Iy2\"�r�D:9`�PHa<'��%�a���!�\n�����\r.���A�e��t�p���j�6����Ł�t,0SH��";break;case"ta":$i="�W* �i��F�\\Hd_�����+�BQp�� 9���t\\U�����@�W��(<�\\��@1	|�@(:�\r��	�S.WA��ht�]�R&����\\�����I`�D�J�\$��:��TϠX��`�*���rj1k�,�Յz@%9���5|�Ud�ߠj䦸�����ɾ&{,��M���S_�Rj����^��8<�Z�+���e~`��- u�L��T�����&����R��	M��HI@�b�ҷ�����2x:M�3I��G�oe[���a���\\�JQ��a�r�^)\\�jr����qȮP\"���%r*W@h���)�����\0�\n��5��6�8��ځ�r��61aˑ�B��J�`F��XF��P)����7��Ɩ J��hf�4�J��КR�G������8�7��,��+�J#(��|�K0**>{ج�|*č��A�ԗ\n���9H˄O���\n��s�����YI���	��\\{CJ�����̿/��o4��t��T';?s��݄�\"���҈\\�ml�ش��Ñ��2�#p���^v�cƅu� ʜ��\nz��US�O@���/I���Gq����,�0C�=�+>�}�����/;�L�˭�8�7\$��>�l�V�f����	;9�m�ו�\rMZ��4G�a��H��u�{�)�:#��1�\"ƩM;����b*�0]_�����٢S�N\r����h�.:��Q�&dȦ�]\"WR���\$	К&�B��� ^6��x�<�Ȼw�Є�2���P#�9ɵ��_�N��Cd�w�Ţ�o>1DC��;>!�b���4�4��I:����H���rܽx\"8���>�yk�Լ-V���1�\"�2�bR�K�<kt�W)~�����&�G�檒���1,�NW���8��P�ʜ/o����	�B�ؾ�|��\\)���:�y��_�Rޛ�A{����vB�Yۻ *�a*w�9Pp	p�(��S�\".Q+�tb�i�2\r�v��\n)�<A͐zBC�u\0�\nC�]]ĝ���ϫ�oHPrc\n٭2-H�����#+g���\\Y�T![L)Q��;&@�Iҿ�?͉���T�xN�˿Xqq4'q�;�{�1՗��QYNE��C���\"��q�,DE�B�y1v\0�>���P	�L*G�	�����ʅ����I��/	ڌ;�G<�%���ד#1`3��Hg��0�C��\0d\r!�2�9��a̚A�l���ndU��^q��#(a%��M]�G׺o�;�j�rƗV��s�3������gy�-M�K�\n\nI�\r��8e�%g�b�\rf��\"s��*�M�H�lM�\n!�:�\0�\\� Y��8\$ �C`e�0@�\nd�������!àaT��7�4���6���N�R�Y�ĭ}a��v�*�	|�Y?z�[ݒ�/���ph_�r6/���F5�k�H�::��U���.�Tb��T�r\0�&�^S��S�OF��6���F�����ؒH�^i6��Hc\r`��\0��a\r�֞S`@C|�����W��BE��Q�t�㢪��\$�����qe97Ɖ���m@��Dr�o]\$K�V�%wup���䜛�lnl�i��Y�K�Վ\n�G�F���M�@�v]z],�U��F[� ��UWk�����2xM�mvVI?\nA�6Lٞ�I6���FH��C0��mȢ /���yĿ(*ױS�=Q��:#�DD�M7v쪻�i�18a0�M\$��aE���S��^/��R���ybR�6�R�W�(�0N�\0���&��e7U#쌲�X��C�-T�\r����\\k��l��x��޺���#\")�y�/�l���p\$E�9���Ɗc�6�j�s��ue:�";break;case"bn":$i="�S)\nt]\0_� 	XD)L��@�4l5���BQp�� 9��\n��\0��,��h�SE�0�b�a%�. �H�\0��.b��2n��D�e*�D��M���,OJÐ��v����х\$:IK��g5U4�L�	Nd!u>�&������a\\�@'Jx��S���4�zZز�S��H�MS���]�O��E2��\\�J1��|�Ц[�i�L��_?�P��\n~b¨�#�m\r/����t7�B�'��C��]��sl����2G��Զ�抍��^TȘs����<\neU>���c��U�>ݣ�����S �L^>�#�²�4\nپjR������h���\r�*������O�~�1��d�+�*\\׬l���=�{��&�K^W2Kb���,.�*{ S�J��*�\"�d%ɯQQ�h\nϷ\r*\0�ʐ# H\"62:O�>��d¼Cq���1r#*B7\r�PH� iB�,k=/��{n������(��_\rA�{�K��\0��m���\$^���\n�/��q]`���j��-Œ�)G��\nLM�O�3���r��cK�D�ȥ�a@�sZ� ��r���Y~�њ�iӋ�R�o3����l�U�&Y�\nrZ-}м+�]�<����3�3�S1�x�\$Bh�\nb�:�h\\-�X��.�V�\0�=h�.���BUT��i��E�C`�9S2;j�B�z���B�b��#4�|�)�3*��^_߷=���2�F�G\$�l�MCj�:�\rw�,��씤�J,��B�>�<E��\"q3/�JZ�\r2�u�vD�L�o�qo���r�oug\n�������ҟ\\	V�;H�6�ڔ<���{����S��GӥEI8��(k�;KE=j��4]�\0.W��̻�ؓH������l�1����,�Q�*�]/\n����oʈ�0,7�Q��ڎ�[�v�}��Dڲ��&�_�+'D��\0Xͫ�!'i|��~��@L.��\0�T!�P�:f�L�bF@���,%�d�C�]D��eX\\C�x)E�	%�t���Je�6���D�P��&\$�)�L�t�8e���r<Io9=,7\$�G�ɘ�&��ћ�G�zf���=&�-&X�W�Q[)�\\�5J��K��U�?fЦ[��*�P���ے9�zE����A\0h!�2�\0�r\r!�4����� ��P�t���4�bb�����(JlE0�X�=��Yp(�\"4�;H��lTU��q8����Ֆ�Z[�q&�e�|i�+KU�{J�O[)~(���S�I�Q1Ÿ�mb�����F�6���i(�(!�p�\n�l\r!�5�\0��\0a�0���*� m\r�4�`�KZ̘��iBW�rO��-����do��|F�����r\"^R	�H��%TL�Ҙ�\n��硄���Yc�jj���(�R!bΝ�\"@E��K�n���ղ�.*��Fo��T{�_��M��_r�}n���j���%�4��M�������aW���\$H�pxa���3��\"�(�r���XQ�hx��1��ֺGJ��E<\0(��E;[V�ѿ)�.�yR�\"7�fz����F�h?E�FDK|h�:��v�L�WDۦ5W�u�\0";break;case"ar":$i="�C�P���l*�\r�,&\n�A���(J.��0T2]6QM��O�!b�#e�\\ɥ�\$�\\\nl+[\n�d�k4�O��&�ղ���Q)̅7lI���E\$�ʑ��m_7�Td������Q�%F����PEdJ�]�MŖiE�t�T�'템9sBGeHh\\�m(A��L6#%9�Q�JXd:&��hC�aΡR�Pcչ�z����n�<*���̡g\n9��%��h5ut.���QS��\n��Ķp{���l-\n��;�D��\n��n����I���f��g��gxu���l§�R�\"er�������1��Jpá����^��!P��nX�2��p���^qXb�C��V��)dE+.�NC?����	�u\r�\"�2m�~�?�����e{6�!���1H;�z�\\���4������ƪ!R�2os\n�?��8�����s��7��\$	К&�B��\rCP^6��x�0҃��	 ���w	�e���\$q���C���7\r2�b��#��5��r	V���S�����\"�+��>�l�(�!�\0�!����.�m\0�����%�<��Ų�'�l����C�7C��e��ˬ��Y2�L�rt�	yi�ѵ�Snv��j�3�RB���Z��L,�(�b�P�4����}��c�X��tP�_Ͳꓫe��'_�R΃(�2���/.��\n�'8w\r�ږ��h�\"��)��Z#R,eJ���:1!:5�����y��z�US�j��m��d���ƍejk�@�*�5Y���(*��l\nx�Bŏ;6��5,𢊒r{c&���X�s\\���0Zطl�b�w:��n,��@4#��D�\0�9\r#��6�<H�x@:� �:wc��4�~@�1x��Z�����3��(�Ýʳ=R��|S��2\n��5[����̺�\"ɝB)-��Bnàr\r��1����X \r��0�\0�C`uz/(6���C0y�:z��q�0�����j\\Os1�e.�BX�й�%D��Ŗ���99���z�Qp!����&s�9D4Ox�rhP�\nO��g�@�-��԰���D9�<��i���K���g�ܫ��xa��3����N��@ٔ��t�\$��בш;�P�z��I�Yp����`f[G	:\"x��9��J�MFG.~O��";break;case"fa":$i="�B����6P텛aT�F6��(J.��0Se�SěaQ\n��\$6�Ma+X�QP��d�BBP�(d:x��2�[\"S�Pm�\\�KICR)CfkIEN#�y�岈l++�)�Ic6�d\$B�!Z�-��~䌄�,V}�'!�����l���UUiZ�B@��qA���S�p��2�Q�B����B�#�S���T�Q:�HT�k���N!([��+����{�r ��0�J�@�`4��̖��Zl�I���㯕��ϸ����Z����m��aR�#Mg��V��v����J��9i�:A�Pl9�:��,i��-%L��+�^�\"�\"R�B�HK0��#*87\r�PH�� g��IX�,*�:��.LnS��\n�U\$�AR�1�B��H�.��0S���L;X��%B:θ-Q�Ȑ��*�P�4Sx��r�d�ܬ�� 9Hj�BC�{rB�)��\$��_D��@�K<��2���dB	@t&��Ц)�B��Q�\"�Z6��h�2-+\\\$��j��,H�{9�b҆�����9�\"T�8p\\�ɩS���3J6�\0�7�c(�b��#-6Sv�(�xU\$���VP���,���vS���e���K�*x�&lc�=��v*7��&�Z���Lc��	�\$��������+���8�f/b=ʊ�~��\r���l�,�,��?�Cݗ��kHS�HFt�\$V#��Q��M.�\nR�Ȏr��b@䩩\"	�j���Lίz�O:V��(��� x�l�2�J�����j1�3��4j{=�P��Y%�Ӄc��ƪ������2�R?���[�d)�jn���<�z))�\n�R;�~B��\0���t��#o��3��%%��I�s���?U�����ƾ��R�,��@4#��E�\0�9\r#��6�<T�x@:� �:z��4� �1|GZ�>��W.�f��\n�؈��L-I/�����a�qs(�@�Ѱ�]�H����I`ë�D��R�àr\r��1����X \r�\\0�\0�C`u}��6���C0y�::�FIHh�s,i\$A�ObSV�����i�9�J���Tnx��c>\$9H\n���*e���\\d���l܃�r���3�Xo;�x�a[�L�8\"|U��F�M@��QZ���%�&���pgRVK�z�����D�G��=f��+(М�sT>�\$��\"V��,M9&K�Ij^�#xAl\n/U,��lx�E;�(�́` ";break;}$se=array();foreach(explode("\n",lzw_decompress($i))as$X)$se[]=(strpos($X,"\t")?explode("\t",$X):$X);return$se;}if(!$se)$se=get_translations($a);if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$c;$od=array_search("SQL",$c->operators);if($od!==false)unset($c->operators[$od]);}function
dsn($hb,$V,$G,$yb='auth_error'){set_exception_handler($yb);parent::__construct($hb,$V,$G);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$ye=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$p=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$p];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$fb=array();$fb["sqlite"]="SQLite 3";$fb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$pd=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Gb){$this->_link=new
SQLite3($Gb);$Je=$this->_link->version();$this->server_info=$Je["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$g=$this->_offset++;$U=$this->_result->columnType($g);return(object)array("name"=>$this->_result->columnName($g),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Gb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Gb);}function
query($I,$ye=false){$Oc=($ye?"unbufferedQuery":"query");$J=@$this->_link->$Oc($I,SQLITE_BOTH,$o);$this->error="";if(!$J){$this->error=$o;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$y=>$X)$K[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$H='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($H\\.)?$H\$~",$C,$A)){$R=($A[3]!=""?$A[3]:idf_unescape($A[2]));$C=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Gb){$this->dsn(DRIVER.":$Gb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Gb){if(is_readable($Gb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$Gb)?$Gb:dirname($_SERVER["SCRIPT_FILENAME"])."/$Gb")." AS a")){$this->Min_SQLite($Gb);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
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
limit($I,$Z,$z,$E=0,$Nd=" "){return" $I$Z".($z!==null?$Nd."LIMIT $z".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){global$j;return($j->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($n,$Ka){global$j;return$j->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($m){return
array();}function
table_status($C=""){global$j;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($C!=""?" AND name = ".q($C):""))as$L){$L["Oid"]="t";$L["Auto_increment"]="";$L["Rows"]=$j->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($C!=""?$K[$C]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$j;return!$j->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){$K=array();foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$U=strtolower($L["type"]);$Xa=$L["dflt_value"];$K[$L["name"]]=array("field"=>$L["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Xa,$A)?str_replace("''","'",$A[1]):($Xa=="NULL"?null:$Xa)),"null"=>!$L["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$L["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);}return$K;}function
indexes($R,$k=null){$K=array();$qd=array();foreach(fields($R)as$p){if($p["primary"])$qd[]=$p["field"];}if($qd)$K[""]=array("type"=>"PRIMARY","columns"=>$qd,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($R).")")as$L){if(!ereg("^sqlite_",$L["name"])){$K[$L["name"]]["type"]=($L["unique"]?"UNIQUE":"INDEX");$K[$L["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($L["name"]).")")as$Gd)$K[$L["name"]]["columns"][]=$Gd["name"];}}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$r=&$K[$L["id"]];if(!$r)$r=$L;$r["source"][]=$L["from"];$r["target"][]=$L["to"];}return$K;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
check_sqlite_name($C){global$j;$Bb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Bb)\$~",$C)){$j->error=lang(11,str_replace("|",", ",$Bb));return
false;}return
true;}function
create_database($n,$f){global$j;if(file_exists($n)){$j->error=lang(12);return
false;}if(!check_sqlite_name($n))return
false;$_=new
Min_SQLite($n);$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($m){global$j;$j->Min_SQLite(":memory:");foreach($m
as$n){if(!@unlink($n)){$j->error=lang(12);return
false;}}return
true;}function
rename_database($C,$f){global$j;if(!check_sqlite_name($C))return
false;$j->Min_SQLite(":memory:");$j->error=lang(12);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$q,$Lb,$Na,$rb,$f,$ta,$ld){$Ge=($R==""||$Lb);foreach($q
as$p){if($p[0]!=""||!$p[1]||$p[2]){$Ge=true;break;}}$d=array();$gd=array();$rd=false;foreach($q
as$p){if($p[1]){if($p[1][6])$rd=true;$d[]=($Ge?"  ":"ADD ").implode($p[1]);if($p[0]!="")$gd[$p[0]]=$p[1][0];}}if($Ge){if($R!=""){queries("BEGIN");foreach(foreign_keys($R)as$r){$h=array();foreach($r["source"]as$g){if(!$gd[$g])continue
2;$h[]=$gd[$g];}$Lb[]="  FOREIGN KEY (".implode(", ",$h).") REFERENCES ".table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).") ON DELETE $r[on_delete] ON UPDATE $r[on_update]";}$x=array();foreach(indexes($R)as$sc=>$w){$h=array();foreach($w["columns"]as$g){if(!$gd[$g])continue
2;$h[]=$gd[$g];}$h="(".implode(", ",$h).")";if($w["type"]!="PRIMARY")$x[]=array($w["type"],$sc,$h);elseif(!$rd)$Lb[]="  PRIMARY KEY $h";}}$d=array_merge($d,$Lb);if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$d)."\n)"))return
false;if($R!=""){if($gd&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$gd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($gd)))." FROM ".table($R)))return
false;$ve=array();foreach(triggers($R)as$ue=>$je){$te=trigger($ue);$ve[]="CREATE TRIGGER ".idf_escape($ue)." ".implode(" ",$je)." ON ".table($C)."\n$te[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$x))return
false;foreach($ve
as$te){if(!queries($te))return
false;}queries("COMMIT");}}else{foreach($d
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}if($ta)queries("UPDATE sqlite_sequence SET seq = $ta WHERE name = ".q($C));return
true;}function
index_sql($R,$U,$C,$h){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($R."_"))." ON ".table($R)." $h";}function
alter_indexes($R,$d){foreach($d
as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($R,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($Le){return
apply_queries("DROP VIEW",$Le);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$Le,$ee){return
false;}function
trigger($C){global$j;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$C,"Statement"=>$A[3]);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$L["sql"],$A);$K[$L["name"]]=array($A[1],$A[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":"DEFAULT VALUES"));}function
insert_update($R,$P,$qd){return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ROWID()");}function
explain($j,$I){return$j->query("EXPLAIN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Jd){return
true;}function
create_sql($R,$ta){global$j;$K=$j->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($R));foreach(indexes($R)as$C=>$w){if($C=='')continue;$K.=";\n\n".index_sql($R,$w['type'],$C,"(".implode(", ",array_map('idf_escape',$w['columns'])).")");}return$K;}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($l){}function
trigger_sql($R,$Wd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$j;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$K[$y]=$j->result("PRAGMA $y");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$bd){list($y,$X)=explode("=",$bd,2);$K[$y]=$X;}return$K;}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Eb){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$Eb);}$qc="sqlite";$xe=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Vd=array_keys($xe);$De=array();$ad=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Vb=array("hex","length","lower","round","unixepoch","upper");$Yb=array("avg","count","count distinct","group_concat","max","min","sum");$jb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$fb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$pd=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($ub,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($O,$V,$G){global$c;$n=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$n!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Je=pg_version($this->_link);$this->server_info=$Je["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($l){global$c;if($l==$c->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($l,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$ye=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$g=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$g);$K->name=pg_field_name($this->_result,$g);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$g);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$G){global$c;$n=$c->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($l){global$c;return($c->database()==$l);}function
close(){}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ua=$c->credentials();if($j->connect($Ua[0],$Ua[1],$Ua[2])){if($j->server_info>=9)$j->query("SET application_name = 'Adminer'");return$j;}return$j->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($I,$Z,$z,$E=0,$Nd=" "){return" $I$Z".($z!==null?$Nd."LIMIT $z".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($m){return
array();}function
table_status($C=""){$K=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($C!=""?" AND relname = ".q($C):""))as$L)$K[$L["Name"]]=$L;return($C!=""?$K[$C]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){ereg('(.*)(\\((.*)\\))?',$L["full_type"],$A);list(,$L["type"],,$L["length"])=$A;$L["full_type"]=$L["type"].($L["length"]?"($L[length])":"");$L["null"]=!$L["attnotnull"];$L["auto_increment"]=eregi("^nextval\\(",$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$L["default"],$A))$L["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]);$K[$L["field"]]=$L;}return$K;}function
indexes($R,$k=null){global$j;if(!is_object($k))$k=$j;$K=array();$de=$k->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$h=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $de AND attnum > 0",$k);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $de AND ci.oid = i.indexrelid",$k)as$L){$K[$L["relname"]]["type"]=($L["indisprimary"]?"PRIMARY":($L["indisunique"]?"UNIQUE":"INDEX"));$K[$L["relname"]]["columns"]=array();foreach(explode(" ",$L["indkey"])as$jc)$K[$L["relname"]]["columns"][]=$h[$jc];$K[$L["relname"]]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Vc;$K=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$A)){$L['source']=array_map('trim',explode(',',$A[1]));$L['table']=$A[2];if(preg_match('~(.+)\.(.+)~',$A[2],$Fc)){$L['ns']=$Fc[1];$L['table']=$Fc[2];}$L['target']=array_map('trim',explode(',',$A[3]));$L['on_delete']=(preg_match("~ON DELETE ($Vc)~",$A[4],$Fc)?$Fc[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Vc)~",$A[4],$Fc)?$Fc[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($C){global$j;return
array("select"=>$j->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($n){return($n=="information_schema");}function
error(){global$j;$K=h($j->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$A))$K=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($K);}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).($f?" ENCODING ".idf_escape($f):""));}function
drop_databases($m){global$j;$j->close();return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$q,$Lb,$Na,$rb,$f,$ta,$ld){$d=array();$wd=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d[]="DROP $g";else{$Ie=$X[5];unset($X[5]);if(isset($X[6])&&$p[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($p[0]=="")$d[]=($R!=""?"ADD ":"  ").implode($X);else{if($g!=$X[0])$wd[]="ALTER TABLE ".table($R)." RENAME $g TO $X[0]";$d[]="ALTER $g TYPE$X[1]";if(!$X[6]){$d[]="ALTER $g ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $g ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($p[0]!=""||$Ie!="")$wd[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Ie!=""?substr($Ie,9):"''");}}$d=array_merge($d,$Lb);if($R=="")array_unshift($wd,"CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");elseif($d)array_unshift($wd,"ALTER TABLE ".table($R)."\n".implode(",\n",$d));if($R!=""&&$R!=$C)$wd[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$Na!="")$wd[]="COMMENT ON TABLE ".table($C)." IS ".q($Na);if($ta!=""){}foreach($wd
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$d){$Sa=array();$gb=array();foreach($d
as$X){if($X[0]!="INDEX")$Sa[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$gb[]=idf_escape($X[1]);elseif(!queries("CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." $X[2]"))return
false;}return((!$Sa||queries("ALTER TABLE ".table($R).implode(",",$Sa)))&&(!$gb||queries("DROP INDEX ".implode(", ",$gb))));}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($Le){return
queries("DROP VIEW ".implode(", ",array_map('table',$Le)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Le,$ee){foreach($T
as$R){if(!queries("ALTER TABLE ".table($R)." SET SCHEMA ".idf_escape($ee)))return
false;}foreach($Le
as$R){if(!queries("ALTER VIEW ".table($R)." SET SCHEMA ".idf_escape($ee)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$M=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["condition_timing"],$L["event_manipulation"]);return$K;}function
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
insert_into($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":"DEFAULT VALUES"));}function
insert_update($R,$P,$qd){global$j;$Ee=array();$Z=array();foreach($P
as$y=>$X){$Ee[]="$y = $X";if(isset($qd[idf_unescape($y)]))$Z[]="$y = $X";}return($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$Ee)." WHERE ".implode(" AND ",$Z))&&$j->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")");}function
last_id(){return
0;}function
explain($j,$I){return$j->query("EXPLAIN $I");}function
found_rows($S,$Z){global$j;if(ereg(" rows=([0-9]+)",$j->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$_d))return$_d[1];return
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
set_schema($Id){global$j,$xe,$Vd;$K=$j->query("SET search_path TO ".idf_escape($Id));foreach(types()as$U){if(!isset($xe[$U])){$xe[$U]=0;$Vd[lang(13)][]=$U;}}return$K;}function
use_sql($l){return"\connect ".idf_escape($l);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$j;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($j->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Eb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Eb);}$qc="pgsql";$xe=array();$Vd=array();foreach(array(lang(14)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(15)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(16)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(17)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(18)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(19)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$xe+=$X;$Vd[$y]=array_keys($X);}$De=array();$ad=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Vb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Yb=array("avg","count","count distinct","max","min","sum");$jb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$fb["oracle"]="Oracle";if(isset($_GET["oracle"])){$pd=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($ub,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($O,$V,$G){$this->_link=@oci_new_connect($V,$G,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$o=oci_error();$this->error=$o["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($l){return
true;}function
query($I,$ye=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$o=oci_error($this->_link);$this->errno=$o["code"];$this->error=$o["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$p);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'OCI-Lob'))$L[$y]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$g=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$g);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$g);$K->charsetnr=(ereg("raw|blob|bfile",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$G){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$G);return
true;}function
select_db($l){return
true;}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ua=$c->credentials();if($j->connect($Ua[0],$Ua[1],$Ua[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$z,$E=0,$Nd=" "){return($E?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($z+$E).") WHERE rnum > $E":($z!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($z+$E):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($m){return
array();}function
table_status($C=""){$K=array();$Kd=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Kd":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Kd":""))as$L){if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$Ac="$L[DATA_PRECISION],$L[DATA_SCALE]";if($Ac==",")$Ac=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($Ac?"($Ac)":""),"type"=>strtolower($U),"length"=>$Ac,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$k=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$k)as$L){$K[$L["INDEX_NAME"]]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$L["INDEX_NAME"]]["columns"][]=$L["COLUMN_NAME"];$K[$L["INDEX_NAME"]]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);}return$K;}function
view($C){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($M);}function
collations(){return
array();}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
explain($j,$I){$j->query("EXPLAIN PLAN FOR $I");return$j->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$q,$Lb,$Na,$rb,$f,$ta,$ld){$d=$gb=array();foreach($q
as$p){$X=$p[1];if($X&&$p[0]!=""&&idf_escape($p[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($p[0])." TO $X[0]");if($X)$d[]=($R!=""?($p[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$gb[]=idf_escape($p[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");return(!$d||queries("ALTER TABLE ".table($R)."\n".implode("\n",$d)))&&(!$gb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$gb).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){return
array();}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Le){return
apply_queries("DROP VIEW",$Le);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
begin(){return
true;}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$j;return$j->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Jd){global$j;return$j->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Jd));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Eb){return
ereg("view|scheme|processlist|drop_col|variables|status",$Eb);}$qc="oracle";$xe=array();$Vd=array();foreach(array(lang(14)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(15)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(16)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(17)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$xe+=$X;$Vd[$y]=array_keys($X);}$De=array();$ad=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Vb=array("length","lower","round","upper");$Yb=array("avg","count","count distinct","max","min","sum");$jb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$fb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$pd=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$o){$this->errno=$o["code"];$this->error.="$o[message]\n";}$this->error=rtrim($this->error);}function
connect($O,$V,$G){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$kc=sqlsrv_server_info($this->_link);$this->server_info=$kc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($I,$ye=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'DateTime'))$L[$y]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$p=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$p["Name"];$K->orgname=$p["Name"];$K->type=($p["Type"]==1?254:0);return$K;}function
seek($E){for($t=0;$t<$E;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$G){$this->_link=@mssql_connect($O,$V,$G);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($l){return
mssql_select_db($l);}function
query($I,$ye=false){$J=mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($E){mssql_data_seek($this->_result,$E);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ua=$c->credentials();if($j->connect($Ua[0],$Ua[1],$Ua[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($I,$Z,$z,$E=0,$Nd=" "){return($z!==null?" TOP (".($z+$E).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($n,$Ka){global$j;return$j->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($n));}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($m){global$j;$K=array();foreach($m
as$n){$j->select_db($n);$K[$n]=$j->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($C=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($C!=""?" AND name = ".q($C):""))as$L){if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$Ac=(ereg("char|binary",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($Ac?"($Ac)":""),"type"=>$U,"length"=>$Ac,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$k=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$k)as$L){$K[$L["name"]]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$L["name"]]["lengths"]=array();$K[$L["name"]]["columns"][$L["key_ordinal"]]=$L["column_name"];}return$K;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$j->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$f)$K[ereg_replace("_.*","",$f)][]=$f;return$K;}function
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
rename_database($C,$f){if(eregi('^[a-z0-9_]+$',$f))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $f");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$q,$Lb,$Na,$rb,$f,$ta,$ld){$d=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d["DROP"][]=" COLUMN $g";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($p[0]=="")$d["ADD"][]="\n  ".implode("",$X).($R==""?substr($Lb[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($g!=$X[0])queries("EXEC sp_rename ".q(table($R).".$g").", ".q(idf_unescape($X[0])).", 'COLUMN'");$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$d["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Lb)$d[""]=$Lb;foreach($d
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$d){$w=array();$gb=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$gb[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$gb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$gb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":"DEFAULT VALUES"));}function
insert_update($R,$P,$qd){$Ee=array();$Z=array();foreach($P
as$y=>$X){$Ee[]="$y = $X";if(isset($qd[idf_unescape($y)]))$Z[]="$y = $X";}return
queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Ee)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");");}function
last_id(){global$j;return$j->result("SELECT SCOPE_IDENTITY()");}function
explain($j,$I){$j->query("SET SHOWPLAN_ALL ON");$K=$j->query($I);$j->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$r=&$K[$L["FK_NAME"]];$r["table"]=$L["PKTABLE_NAME"];$r["source"][]=$L["FKCOLUMN_NAME"];$r["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Le){return
queries("DROP VIEW ".implode(", ",array_map('table',$Le)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Le,$ee){return
apply_queries("ALTER SCHEMA ".idf_escape($ee)." TRANSFER",array_merge($T,$Le));}function
trigger($C){if($C=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$j;if($_GET["ns"]!="")return$_GET["ns"];return$j->result("SELECT SCHEMA_NAME()");}function
set_schema($Id){return
true;}function
use_sql($l){return"USE ".idf_escape($l);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Eb){return
ereg('^(scheme|trigger|view|drop_col)$',$Eb);}$qc="mssql";$xe=array();$Vd=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(15)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(16)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(17)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$xe+=$X;$Vd[$y]=array_keys($X);}$De=array();$ad=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Vb=array("len","lower","round","upper");$Yb=array("avg","count","count distinct","max","min","sum");$jb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$fb=array("server"=>"MySQL")+$fb;if(!defined("DRIVER")){$pd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($dc,$nd)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$dc:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($nd)?$nd:ini_get("mysqli.default_port")),(!is_numeric($nd)?$nd:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$p=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$p];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$V,$G){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($l){return
mysql_select_db($l,$this->_link);}function
query($I,$ye=false){$J=@($ye?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$p);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$G){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($I,$ye=false){$this->setAttribute(1000,!$ye);return
parent::query($I,$ye);}}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ua=$c->credentials();if($j->connect($Ua[0],$Ua[1],$Ua[2])){$j->query("SET sql_quote_show_create = 1, autocommit = 1");return$j;}$K=$j->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Hd=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Hd;return$K;}function
get_databases($Kb){global$j;$K=get_session("dbs");if($K===null){$I=($j->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Kb?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$z,$E=0,$Nd=" "){return" $I$Z".($z!==null?$Nd."LIMIT $z".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($n,$Ka){global$j;$K=null;$Sa=$j->result("SHOW CREATE DATABASE ".idf_escape($n),1);if(preg_match('~ COLLATE ([^ ]+)~',$Sa,$A))$K=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Sa,$A))$K=$Ka[$A[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(ereg("YES|DEFAULT",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$j;return$j->result("SELECT USER()");}function
tables_list(){global$j;return
get_key_vals("SHOW".($j->server_info>=5?" FULL":"")." TABLES");}function
count_tables($m){$K=array();foreach($m
as$n)$K[$n]=count(get_vals("SHOW TABLES IN ".idf_escape($n)));return$K;}function
table_status($C="",$Db=false){global$j;$K=array();foreach(get_rows($Db&&$j->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()".($C!=""?" AND TABLE_NAME = ".q($C):""):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return!isset($S["Engine"]);}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$A);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($L["Default"]!=""||ereg("char|set",$A[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$L["Extra"],$A)?$A[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(explode(",",$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$k=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$k)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];}return$K;}function
foreign_keys($R){global$j,$Vc;static$H='`(?:[^`]|``)+`';$K=array();$Ta=$j->result("SHOW CREATE TABLE ".table($R),1);if($Ta){preg_match_all("~CONSTRAINT ($H) FOREIGN KEY \\(((?:$H,? ?)+)\\) REFERENCES ($H)(?:\\.($H))? \\(((?:$H,? ?)+)\\)(?: ON DELETE ($Vc))?(?: ON UPDATE ($Vc))?~",$Ta,$Gc,PREG_SET_ORDER);foreach($Gc
as$A){preg_match_all("~$H~",$A[2],$Qd);preg_match_all("~$H~",$A[5],$ee);$K[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Qd[0]),"target"=>array_map('idf_unescape',$ee[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$K;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$j->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$y=>$X)asort($K[$y]);return$K;}function
information_schema($n){global$j;return($j->server_info>=5&&$n=="information_schema")||($j->server_info>=5.5&&$n=="performance_schema");}function
error(){global$j;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$j->error));}function
error_line(){global$j;if(ereg(' at line ([0-9]+)$',$j->error,$_d))return$_d[1]-1;}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($n,$f){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($n).($f?" COLLATE ".q($f):""));}function
drop_databases($m){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){if(create_database($C,$f)){$Ad=array();foreach(tables_list()as$R=>$U)$Ad[]=table($R)." TO ".idf_escape($C).".".table($R);if(!$Ad||queries("RENAME TABLE ".implode(", ",$Ad))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ua=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$ua="";break;}if($w["type"]=="PRIMARY")$ua=" UNIQUE";}}return" AUTO_INCREMENT$ua";}function
alter_table($R,$C,$q,$Lb,$Na,$rb,$f,$ta,$ld){$d=array();foreach($q
as$p)$d[]=($p[1]?($R!=""?($p[0]!=""?"CHANGE ".idf_escape($p[0]):"ADD"):" ")." ".implode($p[1]).($R!=""?$p[2]:""):"DROP ".idf_escape($p[0]));$d=array_merge($d,$Lb);$Td="COMMENT=".q($Na).($rb?" ENGINE=".q($rb):"").($f?" COLLATE ".q($f):"").($ta!=""?" AUTO_INCREMENT=$ta":"").$ld;if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n) $Td");if($R!=$C)$d[]="RENAME TO ".table($C);$d[]=$Td;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$d));}function
alter_indexes($R,$d){foreach($d
as$y=>$X)$d[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($R).implode(",",$d));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($Le){return
queries("DROP VIEW ".implode(", ",array_map('table',$Le)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$Le,$ee){$Ad=array();foreach(array_merge($T,$Le)as$R)$Ad[]=table($R)." TO ".idf_escape($ee).".".table($R);return
queries("RENAME TABLE ".implode(", ",$Ad));}function
copy_tables($T,$Le,$ee){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($ee==DB?table("copy_$R"):idf_escape($ee).".".table($R));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($Le
as$R){$C=($ee==DB?table("copy_$R"):idf_escape($ee).".".table($R));$Ke=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ke[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$j,$sb,$mc,$xe;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$we="((".implode("|",array_merge(array_keys($xe),$na)).")\\b(?:\\s*\\(((?:[^'\")]*|$sb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$H="\\s*(".($U=="FUNCTION"?"":$mc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$we";$Sa=$j->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$H\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$we\\s+":"")."(.*)~is",$Sa,$A);$q=array();preg_match_all("~$H\\s*,?~is",$A[1],$Gc,PREG_SET_ORDER);foreach($Gc
as$jd){$C=str_replace("``","`",$jd[2]).$jd[3];$q[]=array("field"=>$C,"type"=>strtolower($jd[5]),"length"=>preg_replace_callback("~$sb~s",'normalize_enum',$jd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$jd[8] $jd[7]"))),"null"=>1,"full_type"=>$jd[4],"inout"=>strtoupper($jd[1]),"collation"=>strtolower($jd[9]),);}if($U!="FUNCTION")return
array("fields"=>$q,"definition"=>$A[11]);return
array("fields"=>$q,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")");}function
insert_update($R,$P,$qd){foreach($P
as$y=>$X)$P[$y]="$y = $X";$Ee=implode(", ",$P);return
queries("INSERT INTO ".table($R)." SET $Ee ON DUPLICATE KEY UPDATE $Ee");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ID()");}function
explain($j,$I){return$j->query("EXPLAIN ".($j->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Id){return
true;}function
create_sql($R,$ta){global$j;$K=$j->result("SHOW CREATE TABLE ".table($R),1);if(!$ta)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($l){return"USE ".idf_escape($l);}function
trigger_sql($R,$Wd){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Wd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($p){if(ereg("binary",$p["type"]))return"HEX(".idf_escape($p["field"]).")";if($p["type"]=="bit")return"BIN(".idf_escape($p["field"])." + 0)";if(ereg("geometry|point|linestring|polygon",$p["type"]))return"AsWKT(".idf_escape($p["field"]).")";}function
unconvert_field($p,$K){if(ereg("binary",$p["type"]))$K="UNHEX($K)";if($p["type"]=="bit")return"CONV($K, 2, 10) + 0";if(ereg("geometry|point|linestring|polygon",$p["type"]))$K="GeomFromText($K)";return$K;}function
support($Eb){global$j;return!ereg("scheme|sequence|type".($j->server_info<5.1?"|event|partitioning".($j->server_info<5?"|view|routine|trigger":""):""),$Eb);}$qc="sql";$xe=array();$Vd=array();foreach(array(lang(14)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(15)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(16)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(20)=>array("enum"=>65535,"set"=>64),lang(17)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(19)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$xe+=$X;$Vd[$y]=array_keys($X);}$De=array("unsigned","zerofill","unsigned zerofill");$ad=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Vb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Yb=array("avg","count","count distinct","group_concat","max","min","sum");$jb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.7.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(21)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$j;$m=$this->databases(false);return(!$m?$j->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$m[(information_schema($m[0])?1:0)]);}function
databases($Kb=true){return
get_databases($Kb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(22),'<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>',lang(23),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".lang(24)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(25))."\n";}function
login($Dc,$G){global$j;$j->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($be){return
h($be["Comment"]!=""?$be["Comment"]:$be["Name"]);}function
fieldName($p,$ed=0){return
h($p["comment"]!=""?$p["comment"]:$p["field"]);}function
selectLinks($be,$P=""){$b=$be["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$P).'">'.lang(26)."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$ae){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$y=>$X){$C=$this->tableName(table_status($y,true));if($C!=""){$Kd=preg_quote($ae);$Nd="(:|\\s*-)?\\s+";$K[$y]["name"]=(preg_match("(^$Kd$Nd(.+)|^(.+?)$Nd$Kd\$)iu",$C,$A)?$A[2].$A[3]:$C);}else
unset($K[$y]);}return$K;}function
backwardKeysPrint($xa,$L){foreach($xa
as$R=>$wa){foreach($wa["keys"]as$La){$_=ME.'select='.urlencode($R);$t=0;foreach($La
as$g=>$X)$_.=where_link($t++,$g,$L[$X]);echo"<a href='".h($_)."'>".h($wa["name"])."</a>";$_=ME.'edit='.urlencode($R);foreach($La
as$g=>$X)$_.="&set".urlencode("[".bracket_escape($g)."]")."=".urlencode($L[$X]);echo"<a href='".h($_)."' title='".lang(26)."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$p){if(ereg("varchar|character varying",$p["type"]))return
idf_escape($p["field"]);}return"";}function
rowDescriptions($M,$Nb){$K=$M;foreach($M[0]as$y=>$X){if(list($R,$u,$C)=$this->_foreignColumn($Nb,$y)){$gc=array();foreach($M
as$L)$gc[$L[$y]]=exact_value($L[$y]);$Za=$this->_values[$R];if(!$Za)$Za=get_key_vals("SELECT $u, $C FROM ".table($R)." WHERE $u IN (".implode(", ",$gc).")");foreach($M
as$B=>$L){if(isset($L[$y]))$K[$B][$y]=(string)$Za[$L[$y]];}}}return$K;}function
selectLink($X,$p){}function
selectVal($X,$_,$p){$K=($X===null?"&nbsp;":$X);$_=h($_);if(ereg('blob|bytea',$p["type"])&&!is_utf8($X)){$K=lang(27,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X))$K="<img src='$_' alt='$K'>";}if(like_bool($p)&&$K!="&nbsp;")$K=($X?lang(28):lang(29));if($_)$K="<a href='$_'>$K</a>";if(!$_&&!like_bool($p)&&ereg('int|float|double|decimal',$p["type"]))$K="<div class='number'>$K</div>";elseif(ereg('date',$p["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($X,$p){if(ereg('date|timestamp',$p["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return$X;}function
selectColumnsPrint($N,$h){}function
selectSearchPrint($Z,$h,$x){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$tc=array();foreach($Z
as$y=>$X)$tc[$X["col"]]=$y;$t=0;$q=fields($_GET["select"]);foreach($h
as$C=>$Ya){$p=$q[$C];if(ereg("enum",$p["type"])||like_bool($p)){$y=$tc[$C];$t--;echo"<div>".h($Ya)."<input type='hidden' name='where[$t][col]' value='".h($C)."'>:",(like_bool($p)?" <select name='where[$t][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$p,(array)$Z[$y]["val"],($p["null"]?0:null))),"</div>\n";unset($h[$C]);}elseif(is_array($cd=$this->_foreignKeyOptions($_GET["select"],$C))){if($q[$C]["null"])$cd[0]='('.lang(5).')';$y=$tc[$C];$t--;echo"<div>".h($Ya)."<input type='hidden' name='where[$t][col]' value='".h($C)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($cd,$Z[$y]["val"],true)."</select></div>\n";unset($h[$C]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$h[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".lang(32).")".optionlist($h,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$t][val]' value='".h($X["val"])."' onsearch='selectSearchSearch(this);'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($h,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$t][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ed,$h,$x){$fd=array();foreach($x
as$y=>$w){$ed=array();foreach($w["columns"]as$X)$ed[]=$h[$X];if(count(array_filter($ed,'strlen'))>1&&$y!="PRIMARY")$fd[$y]=implode(", ",$ed);}if($fd){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$fd,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","50","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($ge){}function
selectActionPrint($x){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($nb,$h){if($nb){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$h,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($nb)==1?'<input type="hidden" name="email_field" value="'.h(key($nb)).'">':html_select("email_field",$nb)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($h,$x){return
array(array(),array());}function
selectSearchProcess($q,$x){$K=array();foreach((array)$_GET["where"]as$y=>$Z){$Ja=$Z["col"];$Yc=$Z["op"];$X=$Z["val"];if(($y<0?"":$Ja).$X!=""){$Oa=array();foreach(($Ja!=""?array($Ja=>$q[$Ja]):$q)as$C=>$p){if($Ja!=""||is_numeric($X)||!ereg('int|float|double|decimal',$p["type"])){$C=idf_escape($C);if($Ja!=""&&$p["type"]=="enum")$Oa[]=(in_array(0,$X)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$X)).")";else{$he=ereg('char|text|enum|set',$p["type"]);$Y=$this->processInput($p,(!$Yc&&$he&&ereg('^[^%]+$',$X)?"%$X%":$X));$Oa[]=$C.($Y=="NULL"?" IS".($Yc==">="?" NOT":"")." $Y":(in_array($Yc,$this->operators)||$Yc=="="?" $Yc $Y":($he?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$Oa[]="$C IS NULL";}}}$K[]=($Oa?"(".implode(" OR ",$Oa).")":"0");}}return$K;}function
selectOrderProcess($q,$x){$ic=$_GET["index_order"];if($ic!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($ic!=""?array($x[$ic]):$x)as$w){if($ic!=""||$w["type"]=="INDEX"){$Ya=false;foreach($w["columns"]as$X){if(ereg('date|timestamp',$q[$X]["type"])){$Ya=true;break;}}$K=array();foreach($w["columns"]as$X)$K[]=idf_escape($X).($Ya?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Nb){if($_POST["email_append"])return
true;if($_POST["email"]){$Md=0;if($_POST["all"]||$_POST["check"]){$p=idf_escape($_POST["email_field"]);$Xd=$_POST["email_subject"];$Mc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Xd.$Mc",$Gc);$M=get_rows("SELECT DISTINCT $p".($Gc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Gc[1]))):"")." FROM ".table($_GET["select"])." WHERE $p IS NOT NULL AND $p != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($M,$Nb)as$L){$Bd=array('{\\'=>'{');foreach($Gc[1]as$X)$Bd['{$'."$X}"]=$this->editVal($L[$X],$q[$X]);$mb=$L[$_POST["email_field"]];if(is_mail($mb)&&send_mail($mb,strtr($Xd,$Bd),strtr($Mc,$Bd),$_POST["email_from"],$_FILES["email_files"]))$Md++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$Md));}return
false;}function
selectQueryBuild($N,$Z,$Wb,$ed,$z,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($p){$K=array();if($p["null"]&&ereg('blob',$p["type"]))$K["NULL"]=lang(5);$K[""]=($p["null"]||$p["auto_increment"]||like_bool($p)?"":"*");if(ereg('date|time',$p["type"]))$K["now"]=lang(44);if(eregi('_(md5|sha1)$',$p["field"],$A))$K[]=strtolower($A[1]);return$K;}function
editInput($R,$p,$sa,$Y){if($p["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$sa value='-1' checked><i>".lang(6)."</i></label> ":"").enum_input("radio",$sa,$p,($Y||isset($_GET["select"])?$Y:0),($p["null"]?"":null));$cd=$this->_foreignKeyOptions($R,$p["field"],$Y);if($cd!==null)return(is_array($cd)?"<select$sa>".optionlist($cd,$Y,true)."</select>":"<input value='".h($Y)."'$sa class='hidden'><input value='".h($cd)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($p["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($p))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$sa>";$cc="";if(ereg('time',$p["type"]))$cc=lang(45);if(ereg('date|timestamp',$p["type"]))$cc=lang(46).($cc?" [$cc]":"");if($cc)return"<input value='".h($Y)."'$sa> ($cc)";if(eregi('_(md5|sha1)$',$p["field"]))return"<input type='password' value='".h($Y)."'$sa>";return'';}function
processInput($p,$Y,$s=""){if($s=="now")return"$s()";$K=$Y;if(ereg('date|timestamp',$p["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$A))$K=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$K=($p["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$K:q($K));if($Y==""&&like_bool($p))$K="0";elseif($Y==""&&($p["null"]||!ereg('char|text',$p["type"])))$K="NULL";elseif(ereg('^(md5|sha1)$',$s))$K="$s($K)";return
unconvert_field($p,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($n){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Wd,$I){global$j;$J=$j->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Wd=="table"){dump_csv(array_keys($L));$Wd="INSERT";}dump_csv($L);}}}function
dumpFilename($fc){return
friendly_url($fc);}function
dumpHeaders($fc,$Qc=false){$_b="csv";header("Content-Type: text/csv; charset=utf-8");return$_b;}function
homepage(){return
true;}function
navigation($Pc){global$ba,$pe;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Pc=="auth"){$Jb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$G){if($G!==null){if($Jb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Jb=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(5)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(47),'" id="logout">
<input type="hidden" name="token" value="',$pe,'">
</p>
</form>
';$this->databasesPrint($Pc);if($Pc!="db"&&$Pc!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".lang(7)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Pc){}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$L){$C=$this->tableName($L);if(isset($L["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"])." title='".lang(48)."'>$C</a><br>\n";}}function
_foreignColumn($Nb,$g){foreach((array)$Nb[$g]as$Mb){if(count($Mb["source"])==1){$C=$this->rowDescription($Mb["table"]);if($C!=""){$u=idf_escape($Mb["target"][0]);return
array($Mb["table"],$u,$C);}}}}function
_foreignKeyOptions($R,$g,$Y=null){global$j;if(list($ee,$u,$C)=$this->_foreignColumn(column_foreign_keys($R),$g)){$K=&$this->_values[$ee];if($K===null){$S=table_status($ee);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $u, $C FROM ".table($ee)." ORDER BY 2"));}if(!$K&&$Y!==null)return$j->result("SELECT $C FROM ".table($ee)." WHERE $u = ".q($Y));return$K;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($ke,$o="",$Da=array(),$le=""){global$a,$c,$j,$fb;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$me=$ke.($le!=""?": ".h($le):"");$ne=strip_tags($me.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE html>
<html lang="',$a,'" dir="',lang(49),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ne,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.7.0",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.7.0",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.0",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(49),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($j)?substr($j->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Da!==null){$_=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$fb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(50));if($Da===false)echo"$O\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Da)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Da)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Da
as$y=>$X){$Ya=(is_array($X)?$X[1]:$X);if($Ya!="")echo'<a href="'.h(ME."$y=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Ya).'</a> &raquo; ';}}echo"$ke\n";}}echo"<h2>$me</h2>\n";restart_session();$Fe=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Nc=$_SESSION["messages"][$Fe];if($Nc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Nc)."</div>\n";unset($_SESSION["messages"][$Fe]);}$m=&get_session("dbs");if(DB!=""&&$m&&!in_array(DB,$m,true))$m=null;stop_session();if($o)echo"<div class='error'>$o</div>\n";define("PAGE_HEADER",1);}function
page_footer($Pc=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Pc);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($W,$Ne){$Hd='';foreach($W
as$X)$Hd.=pack('V',$X);if($Ne)return
substr($Hd,0,end($W));return$Hd;}function
str2long($Hd,$Ne){$W=array_values(unpack('V*',str_pad($Hd,4*ceil(strlen($Hd)/4),"\0")));if($Ne)$W[]=strlen($Hd);return$W;}function
xxtea_mx($Se,$Re,$Zd,$rc){return
int32((($Se>>5&0x7FFFFFF)^$Re<<2)+(($Re>>3&0x1FFFFFFF)^$Se<<4))^int32(($Zd^$Re)+($rc^$Se));}function
encrypt_string($Ud,$y){if($Ud=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Ud,true);$B=count($W)-1;$Se=$W[$B];$Re=$W[0];$vd=floor(6+52/($B+1));$Zd=0;while($vd-->0){$Zd=int32($Zd+0x9E3779B9);$ib=$Zd>>2&3;for($id=0;$id<$B;$id++){$Re=$W[$id+1];$Rc=xxtea_mx($Se,$Re,$Zd,$y[$id&3^$ib]);$Se=int32($W[$id]+$Rc);$W[$id]=$Se;}$Re=$W[0];$Rc=xxtea_mx($Se,$Re,$Zd,$y[$id&3^$ib]);$Se=int32($W[$B]+$Rc);$W[$B]=$Se;}return
long2str($W,false);}function
decrypt_string($Ud,$y){if($Ud=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Ud,false);$B=count($W)-1;$Se=$W[$B];$Re=$W[0];$vd=floor(6+52/($B+1));$Zd=int32($vd*0x9E3779B9);while($Zd){$ib=$Zd>>2&3;for($id=$B;$id>0;$id--){$Se=$W[$id-1];$Rc=xxtea_mx($Se,$Re,$Zd,$y[$id&3^$ib]);$Re=int32($W[$id]-$Rc);$W[$id]=$Re;}$Se=$W[$B];$Rc=xxtea_mx($Se,$Re,$Zd,$y[$id&3^$ib]);$Re=int32($W[0]-$Rc);$W[0]=$Re;$Zd=int32($Zd-0x9E3779B9);}return
long2str($W,true);}$j='';$pe=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$md=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$md[$y]=$X;}}$e=$_POST["auth"];if($e){session_regenerate_id();$_SESSION["pwds"][$e["driver"]][$e["server"]][$e["username"]]=$e["password"];$_SESSION["db"][$e["driver"]][$e["server"]][$e["username"]][$e["db"]]=true;if($e["permanent"]){$y=base64_encode($e["driver"])."-".base64_encode($e["server"])."-".base64_encode($e["username"])."-".base64_encode($e["db"]);$sd=$c->permanentLogin();$md[$y]="$y:".base64_encode($sd?encrypt_string($e["password"],$sd):"");cookie("adminer_permanent",implode(" ",$md));}if(count($_POST)==1||DRIVER!=$e["driver"]||SERVER!=$e["server"]||$_GET["username"]!==$e["username"]||DB!=$e["db"])redirect(auth_url($e["driver"],$e["server"],$e["username"],$e["db"]));}elseif($_POST["logout"]){if($pe&&$_POST["token"]!=$pe){page_header(lang(47),lang(51));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($md&&!$_SESSION["pwds"]){session_regenerate_id();$sd=$c->permanentLogin();foreach($md
as$y=>$X){list(,$Ga)=explode(":",$X);list($eb,$O,$V,$n)=array_map('base64_decode',explode("-",$y));$_SESSION["pwds"][$eb][$O][$V]=decrypt_string(base64_decode($Ga),$sd);$_SESSION["db"][$eb][$O][$V][$n]=true;}}function
unset_permanent(){global$md;foreach($md
as$y=>$X){list($eb,$O,$V,$n)=array_map('base64_decode',explode("-",$y));if($eb==DRIVER&&$O==SERVER&&$V==$_GET["username"]&&$n==DB)unset($md[$y]);}cookie("adminer_permanent",implode(" ",$md));}function
auth_error($xb=null){global$j,$c,$pe;$Pd=session_name();$o="";if(!$_COOKIE[$Pd]&&$_GET[$Pd]&&ini_bool("session.use_only_cookies"))$o=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$Pd]||$_GET[$Pd])&&!$pe)$o=lang(54);else{$G=&get_session("pwds");if($G!==null){$o=h($xb?$xb->getMessage():(is_string($j)?$j:lang(55)));$G=null;}unset_permanent();}}page_header(lang(24),$o,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(56),lang(57,implode(", ",$pd)),false);page_footer("auth");exit;}$j=connect();}if(is_string($j)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$pe=$_SESSION["token"];if($e&&$_POST["token"])$_POST["token"]=$pe;$o='';if($_POST){if($_POST["token"]!=$pe){$lc="max_input_vars";$Kc=ini_get($lc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$y){$X=ini_get($y);if($X&&(!$Kc||$X<$Kc)){$lc=$y;$Kc=$X;}}}$o=(!$_POST["token"]&&$Kc?lang(58,"'$lc'"):lang(51));}}elseif($_SERVER["REQUEST_METHOD"]=="POST")$o=lang(59,"'post_max_size'");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$j->select_db($c->database());function
email_header($ac){return"=?UTF-8?B?".base64_encode($ac)."?=";}function
send_mail($mb,$Xd,$Mc,$Tb="",$Hb=array()){$tb=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$Mc=str_replace("\n",$tb,wordwrap(str_replace("\r","","$Mc\n")));$Ca=uniqid("boundary");$ra="";foreach((array)$Hb["error"]as$y=>$X){if(!$X)$ra.="--$Ca$tb"."Content-Type: ".str_replace("\n","",$Hb["type"][$y]).$tb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Hb["name"][$y])."\"$tb"."Content-Transfer-Encoding: base64$tb$tb".chunk_split(base64_encode(file_get_contents($Hb["tmp_name"][$y])),76,$tb).$tb;}$za="";$bc="Content-Type: text/plain; charset=utf-8$tb"."Content-Transfer-Encoding: 8bit";if($ra){$ra.="--$Ca--$tb";$za="--$Ca$tb$bc$tb$tb";$bc="Content-Type: multipart/mixed; boundary=\"$Ca\"";}$bc.=$tb."MIME-Version: 1.0$tb"."X-Mailer: Adminer Editor".($Tb?$tb."From: ".str_replace("\n","",$Tb):"");return
mail($mb,email_header($Xd),$za.$Mc.$ra,$bc);}function
like_bool($p){return
ereg("bool|(tinyint|bit)\\(1\\)",$p["full_type"]);}$Vc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$fb[DRIVER]=lang(24);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$b=$_GET["download"];$q=fields($b);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$j->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET,$q),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$q=fields($b);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$q):""):where($_GET,$q));$Ee=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($q
as$C=>$p){if(!isset($p["privileges"][$Ee?"update":"insert"])||$c->fieldName($p)=="")unset($q[$C]);}if($_POST&&!$o&&!isset($_GET["select"])){$Cc=$_POST["referer"];if($_POST["insert"])$Cc=($Ee?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$Cc))$Cc=ME."select=".urlencode($b);$x=indexes($b);$_e=unique_array($_GET["where"],$x);$xd="\nWHERE $Z";if(isset($_POST["delete"])){$I="FROM ".table($b);query_redirect("DELETE".($_e?" $I$xd":limit1($I,$xd)),$Cc,lang(60));}else{$P=array();foreach($q
as$C=>$p){$X=process_input($p);if($X!==false&&$X!==null)$P[idf_escape($C)]=($Ee?"\n".idf_escape($C)." = $X":$X);}if($Ee){if(!$P)redirect($Cc);$I=table($b)." SET".implode(",",$P);query_redirect("UPDATE".($_e?" $I$xd":limit1($I,$xd)),$Cc,lang(61));}else{$J=insert_into($b,$P);$zc=($J?last_id():0);queries_redirect($Cc,lang(62,($zc?" $zc":"")),$J);}}}$ce=$c->tableName(table_status($b,true));page_header(($Ee?lang(63):lang(40)),$o,array("select"=>array($b,$ce)),$ce);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($q
as$C=>$p){if(isset($p["privileges"]["select"])){$pa=convert_field($p);if($_POST["clone"]&&$p["auto_increment"])$pa="''";if($qc=="sql"&&ereg("enum|set",$p["type"]))$pa="1*".idf_escape($C);$N[]=($pa?"$pa AS ":"").idf_escape($C);}}$L=array();if($N){$M=get_rows("SELECT".limit(implode(", ",$N)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$L=(isset($_GET["select"])&&count($M)!=1?null:reset($M));}}if($L===false)echo"<p class='error'>".lang(64)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$q)echo"<p class='error'>".lang(65)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$C=>$p){echo"<tr><th>".$c->fieldName($p);$Xa=$_GET["set"][bracket_escape($C)];if($Xa===null){$Xa=$p["default"];if($p["type"]=="bit"&&ereg("^b'([01]*)'\$",$Xa,$_d))$Xa=$_d[1];}$Y=($L!==null?($L[$C]!=""&&$qc=="sql"&&ereg("enum|set",$p["type"])?(is_array($L[$C])?array_sum($L[$C]):+$L[$C]):$L[$C]):(!$Ee&&$p["auto_increment"]?"":(isset($_GET["select"])?false:$Xa)));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$p);$s=($_POST["save"]?(string)$_POST["function"][$C]:($Ee&&$p["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(ereg("time",$p["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$s="now";}input($p,$Y,$s);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".lang(66)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Ee?lang(67):lang(68))."' title='Ctrl+Shift+Enter'>\n";}echo($Ee?"<input type='submit' name='delete' value='".lang(69)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$pe,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$S=table_status($b);$x=indexes($b);$q=fields($b);$Ob=column_foreign_keys($b);$Uc="";if($S["Oid"]=="t"){$Uc=($qc=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($Uc));}parse_str($_COOKIE["adminer_import"],$ka);$Fd=array();$h=array();$ge=null;foreach($q
as$y=>$p){$C=$c->fieldName($p);if(isset($p["privileges"]["select"])&&$C!=""){$h[$y]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($p))$ge=$c->selectLengthProcess();}$Fd+=$p["privileges"];}list($N,$Wb)=$c->selectColumnsProcess($h,$x);$oc=count($Wb)<count($N);$Z=$c->selectSearchProcess($q,$x);$ed=$c->selectOrderProcess($q,$x);$z=$c->selectLimitProcess();$Tb=($N?implode(", ",$N):"*".($Uc?", $Uc":"")).convert_fields($h,$q,$N)."\nFROM ".table($b);$Xb=($Wb&&$oc?"\nGROUP BY ".implode(", ",$Wb):"").($ed?"\nORDER BY ".implode(", ",$ed):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ae=>$L){$pa=convert_field($q[key($L)]);echo$j->result("SELECT".limit($pa?$pa:idf_escape(key($L))." FROM ".table($b)," WHERE ".where_check($Ae,$q).($Z?" AND ".implode(" AND ",$Z):"").($ed?" ORDER BY ".implode(", ",$ed):""),1));}exit;}if($_POST&&!$o){$Pe=$Z;if(is_array($_POST["check"]))$Pe[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Pe=($Pe?"\nWHERE ".implode(" AND ",$Pe):"");$qd=$Ce=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$qd=array_flip($w["columns"]);$Ce=($N?$qd:array());break;}}foreach((array)$Ce
as$y=>$X){if(in_array(idf_escape($y),$N))unset($Ce[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$Ce===array())$I="SELECT $Tb$Pe$Xb";else{$ze=array();foreach($_POST["check"]as$X)$ze[]="(SELECT".limit($Tb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q).$Xb,1).")";$I=implode(" UNION ALL ",$ze);}$c->dumpData($b,"table",$I);exit;}if(!$c->selectEmailProcess($Z,$Ob)){if($_POST["save"]||$_POST["delete"]){$J=true;$la=0;$I=table($b);$P=array();if(!$_POST["delete"]){foreach($h
as$C=>$X){$X=process_input($q[$C]);if($X!==null){if($_POST["clone"])$P[idf_escape($C)]=($X!==false?$X:idf_escape($C));elseif($X!==false)$P[]=idf_escape($C)." = $X";}}$I.=($_POST["clone"]?" (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($b):" SET\n".implode(",\n",$P));}if($_POST["delete"]||$P){$Ma="UPDATE";if($_POST["delete"]){$Ma="DELETE";$I="FROM $I";}if($_POST["clone"]){$Ma="INSERT";$I="INTO $I";}if($_POST["all"]||($Ce===array()&&$_POST["check"])||$oc){$J=queries("$Ma $I$Pe");$la=$j->affected_rows;}else{foreach((array)$_POST["check"]as$X){$J=queries($Ma.limit1($I,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q)));if(!$J)break;$la+=$j->affected_rows;}}}$Mc=lang(70,$la);if($_POST["clone"]&&$J&&$la==1){$zc=last_id();if($zc)$Mc=lang(62," $zc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$Mc,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$o=lang(71);else{$J=true;$la=0;foreach($_POST["val"]as$Ae=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[]=idf_escape($y)." = ".(ereg('char|text',$q[$y]["type"])||$X!=""?$c->processInput($q[$y],$X):"NULL");}$I=table($b)." SET ".implode(", ",$P);$Oe=" WHERE ".where_check($Ae,$q).($Z?" AND ".implode(" AND ",$Z):"");$J=queries("UPDATE".($oc?" $I$Oe":limit1($I,$Oe)));if(!$J)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(70,$la),$J);}}elseif(is_string($Fb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$J=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fb,$Gc);$la=count($Gc[0]);begin();$Nd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Gc[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Nd]*)$Nd~",$X.$Nd,$Hc);if(!$y&&!array_diff($Hc[1],$La)){$La=$Hc[1];$la--;}else{$P=array();foreach($Hc[1]as$t=>$Ja)$P[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$J=insert_update($b,$P,$qd);if(!$J)break;}}if($J)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(72,$la),$J);queries("ROLLBACK");}else$o=upload_error($Fb);}}$ce=$c->tableName($S);if(is_ajax())ob_start();page_header(lang(36).": $ce",$o);$P=null;if(isset($Fd["insert"])){$P="";foreach((array)$_GET["where"]as$X){if(count($Ob[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($S,$P);if(!$h)echo"<p class='error'>".lang(73).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($N,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($ed,$h,$x);$c->selectLimitPrint($z);$c->selectLengthPrint($ge);$c->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Rb=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$F=floor(max(0,$Rb-1)/$z);}$I=$c->selectQueryBuild($N,$Z,$Wb,$ed,$z,$F);if(!$I)$I="SELECT".limit((+$z&&$Wb&&$oc&&$qc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Tb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Xb,($z!=""?+$z:null),($F?$z*$F:0),"\n");echo$c->selectQuery($I);$J=$j->query($I);if(!$J)echo"<p class='error'>".error()."\n";else{if($qc=="mssql"&&$F)$J->seek($z*$F);$ob=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$qc=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last")$Rb=(+$z&&$Wb&&$oc?($qc=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($I) x")):count($M));if(!$M)echo"<p class='message'>".lang(64)."\n";else{$ya=$c->backwardKeys($b,$ce);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Wb&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(74)."</a>");$Sc=array();$Vb=array();reset($N);$yd=1;foreach($M[0]as$y=>$X){if($y!=$Uc){$X=$_GET["columns"][key($N)];$p=$q[$N?($X?$X["col"]:current($N)):$y];$C=($p?$c->fieldName($p,$yd):"*");if($C!=""){$yd++;$Sc[$y]=$C;$g=idf_escape($y);$ec=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Ya="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ec.($ed[0]==$g||$ed[0]==$y||(!$ed&&$oc&&$Wb[0]==$g)?$Ya:'')).'">';echo(!$N||$X?apply_sql_function($X["fun"],$C):h(current($N)))."</a>";echo"<span class='column hidden'>","<a href='".h($ec.$Ya)."' title='".lang(75)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Vb[$y]=$X["fun"];next($N);}}$Bc=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$Bc[$y]=max($Bc[$y],min(40,strlen(utf8_decode($X))));}}echo($ya?"<th>".lang(76):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$F%2==1)odd();ob_end_clean();}foreach($c->rowDescriptions($M,$Ob)as$B=>$L){$_e=unique_array($M[$B],$x);if(!$_e){$_e=array();foreach($M[$B]as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$_e[$y]=$X;}}$Ae="";foreach($_e
as$y=>$X){if(strlen($X)>64){$y="MD5(".(strpos($y,'(')?$y:idf_escape($y)).")";$X=md5($X);}$Ae.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));}echo"<tr".odd().">".(!$Wb&&$N?"":"<td>".checkbox("check[]",substr($Ae,1),in_array(substr($Ae,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($oc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$Ae)."'>".lang(74)."</a>"));foreach($L
as$y=>$X){if(isset($Sc[$y])){$p=$q[$y];if($X!=""&&(!isset($ob[$y])||$ob[$y]!=""))$ob[$y]=(is_mail($X)?$Sc[$y]:"");$_="";$X=$c->editVal($X,$p);if($X!==null){if(ereg('blob|bytea|raw|file',$p["type"])&&$X!="")$_=ME.'download='.urlencode($b).'&field='.urlencode($y).$Ae;if($X==="")$X="&nbsp;";elseif($ge!=""&&is_shortable($p))$X=shorten_utf8($X,max(0,+$ge));else$X=h($X);if(!$_){foreach((array)$Ob[$y]as$r){if(count($Ob[$y])==1||end($r["source"])==$y){$_="";foreach($r["source"]as$t=>$Qd)$_.=where_link($t,$r["target"][$t],$M[$B][$Qd]);$_=($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$_;if(count($r["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($b);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$_e))$_.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($_e
as$rc=>$W)$_.=where_link($t++,$rc,$W);}}if(!$_&&($_=$c->selectLink($L[$y],$p))===null){if(is_mail($L[$y]))$_="mailto:$L[$y]";if($ud=is_url($L[$y]))$_=($ud=="http"&&$aa?$L[$y]:"$ud://www.adminer.org/redirect/?url=".urlencode($L[$y]));}$u=h("val[$Ae][".bracket_escape($y)."]");$Y=$_POST["val"][$Ae][bracket_escape($y)];$Zb=h($Y!==null?$Y:$L[$y]);$Ec=strpos($X,"<i>...</i>");$kb=is_utf8($X)&&$M[$B][$y]==$L[$y]&&!$Vb[$y];$fe=ereg('text|lob',$p["type"]);echo(($_GET["modify"]&&$kb)||$Y!==null?"<td>".($fe?"<textarea name='$u' cols='30' rows='".(substr_count($L[$y],"\n")+1)."'>$Zb</textarea>":"<input name='$u' value='$Zb' size='$Bc[$y]'>"):"<td id='$u' onclick=\"selectClick(this, event, ".($Ec?2:($fe?1:0)).($kb?"":", '".h(lang(77))."'").");\">".$c->selectVal($X,$_,$p));}}if($ya)echo"<td>";$c->backwardKeysPrint($ya,$M[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Wb&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($M||$F)&&!is_ajax()){$wb=true;if($_GET["page"]!="last"&&+$z&&!$oc&&($Rb>=$z||$F)){$Rb=found_rows($S,$Z);if($Rb<max(1e4,2*($F+1)*$z))$Rb=reset(slow_query("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):"")));else$wb=false;}if(+$z&&($Rb===false||$Rb>$z||$F)){echo"<p class='pages'>";$Ic=($Rb===false?$F+(count($M)>=$z?2:1):floor(($Rb-1)/$z));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(78)."', '".($F+1)."'), event); return false;\">".lang(78)."</a>:",pagination(0,$F).($F>5?" ...":"");for($t=max(1,$F-4);$t<min($Ic,$F+5);$t++)echo
pagination($t,$F);if($Ic>0){echo($F+5<$Ic?" ...":""),($wb&&$Rb!==false?pagination($Ic,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Ic'>".lang(79)."</a>");}echo(($Rb===false?count($M)+1:$Rb-$F*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(80).'\');">'.lang(81).'</a>':'');}echo"<p>\n",($Rb!==false?"(".($wb?"":"~ ").lang(82,$Rb).") ":""),checkbox("all",1,0,lang(83))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(63),'</legend><div>
<input type="submit" value="',lang(66),'"',($_GET["modify"]?'':' title="'.lang(71).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(63),'">
<input type="submit" name="clone" value="',lang(84),'">
<input type="submit" name="delete" value="',lang(69),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Rb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Pb=$c->dumpFormat();foreach((array)$_GET["columns"]as$g){if($g["fun"]){unset($Pb['sql']);break;}}if($Pb){print_fieldset("export",lang(85));$hd=$c->dumpOutput();echo($hd?html_select("output",$hd,$ka["output"])." ":""),html_select("format",$Pb,$ka["format"])," <input type='submit' name='export' value='".lang(85)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(86),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(86)."'>","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($ob,'strlen'),$h);echo"<p><input type='hidden' name='token' value='$pe'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$j->query("KILL ".(+$_POST["kill"]));elseif(list($R,$u,$C)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$J=$j->query("SELECT $u, $C FROM ".table($R)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$u = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($t=0;$t<10&&($L=$J->fetch_row());$t++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($u))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($t==10)echo"...\n";}exit;}else{page_header(lang(50),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(87).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(88).'<td>'.lang(89)."</thead>\n";foreach(table_status()as$R=>$L){$C=$c->tableName($L);if(isset($L["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$C</a>";$X=number_format($L["Rows"],0,'.',lang(8));echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();