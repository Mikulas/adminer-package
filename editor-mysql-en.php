<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.0
*/error_reporting(6135);$Ib=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Ib||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$ue=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($ue)$$V=$ue;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé�vt2���!�r0���t~�U�'3M��W�B�'c�P�:6T\rc�A�zr_�WK�\r-�VNFS%~�c���&�\\^�r����u�ŎÞ�ً4'7k����Q��h�'g\rFB\ryT7SS�P�1=ǤcI��:�d��m>�S8L�J��t.M���	ϋ`'C����889�� �Q����2�#8А����6m����j��h�<�����9/��:�J�)ʂ�\0d>!\0Z��v�n��o(���k�7��s��>��!�R\"*nS�\0@P\"��(�#[���@g�o���zn�9k�8�n���1�I*��=�n������0�c(�;�à��!���*c��>Ύ�E7D�LJ��1�J=���1L��?�s=#`�3\$4���uȱ��zG�C YAt�?;�Q�k&��YP�u��ǯ}UaHV%G;�s��<A\0\\��P�\\��&ª�V��\n�SU�t���r���2�	l^�Z6�ej����A�d�[�sն�JP����ҝ��8�=����6#˂74*���#e���!�7{�6��<o�C�9v[�M��-`��k�>�l�ڴ��I��H�3�x����w0t6��%MR%��jh�B�<�\0�AQ<P<:��u/�;\\>��-��ʈ��QH\nv�L+v�æ�<�\r��v����\\*����Ӵݢg��n˩��TЩ2P�\r��ߋ\"+z�8���:#�����2��J[�i����;z�����r�3#�ى�:�n�\r㽃e�pdݍ� �2c��4�k���\rG��E6_����މb��/��HB%�0�>���hoW�nxl֍�浃CQ^�������\r����4lK{�Z��:���Ã�.�p��Ă�J�B-�+B����Z���B��Tـ-S`����[C�h\r�C�t��d��&'�X\n1�^`���ra�y���2ėB�P2c����P����Ky��f��^���5�F�RJk�10 T��hee\r��(�CrQ��-S��B`\$y�n�?B�T�W�4D9��6j�݋����n�t[%�0 �@\$��^�VR���*b�b*4�I���z{N0�\re��|�	��\$�4�,���C�\$��˙�e)��#���`Ҵd�'�<^��X��nt��f\"ጵAu��\n��@p�\n�#!;�t�8�����j��Md���:�T��\n�:%�����Oh\\Tr�8N��Q�4�\r}A�zC�\r�I�0����3�T�=����?'��/,�[aŌ2�H	8���X��:���l�['�}�u���!SL�O+*[��cF�\0006��l��zèr>��ݾC��Ü�S�`���Y)�t6�l��:���0�����?,�����G���%��\$ʀ-�M���Bȳ�0�H#x2c �:����o\n��Q �<���\\�Ak�ep�Y��%�\$�;�L&�%k���F��;�`r�m����4j��q�j���Ք��Pc�EQ�*�cÐf!*\0���y,�P`���M\\C����V\"Y{�z�M�t����d/���@��_Y�E�����8^B�I�DW)��j�uA��hH��_`�-<�W��[�fT�f0*V��O\$��.<�@1S��Ô��q\"��,}s�6����ws��hQcV�y�鹎���Xd�k�0Dw���Aǔ���\"�kKEt��9ң�]W-/��R�������9�9����p-������d��2+��·�Zm��,�8�G0�ˮ�(�MN��l�&�+[+�2B�[9>a�q,�ʑ(2Eբ��:OrM������G�M�LZ�N30ܼ뎎�{���u2V+����k���s+�V��H���i�{\"��,T(x:�9@�B�H�2��F�^���pz�|�8h��#{���bq齡oNg�{� ���.-��,g1a̢�n\n�FX�IbM�gb�?�����ce���o��}���\\��<����ŵ������Ղy;����r`}�C[���y����8l`�=����ҧ\$<{4t�q���u3t��v�BW���:+�(F��q?o��ɐ]�ek�JͱtL�C��2L=�|�r.�,�O噟��Ͳ��>�(M��5�>��l�X���w�I��e��s�Ҫ�وq>(�o��A��C!�8����");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n0��S��a9��S`�����&�(��n0���QI�(.��q���O)��̢㑔�1�E#)��x8\n���\\9�D⹄�d+���g�%(R,�BqH�' �G�q.�,2�������A�GCy��#L�S���\n�L���8n:��S�G�:�\$�%��;��)�ؙ�Q��G�sE������)�Nn�MN�S��@t9L��|1���L�Ti3���C	�{�������w0�@�wә�����Ϋ��w{��J8\\C(��ɨ�Z�j9�a[�� -��;!�H�<��`�߅(䚱	+�Ḫ�2\r�K�9�@����`�����PP�0L#��#j���+ �Eɒ���p�9a���;m�\\8Cz�����^��]\rð�\\7�C8_D�p^�P��\0̱�w &c4^�R�N9D�\\ܙ�j�3��@��\r8a;M�l7��d<3�cp�Г��:)\\;�C��ц��!6HT�,4O�=ц!pd�T��Ss;�c}&&����ń�5cY��p�1`�I��bKPRt�f2X黛F��-!\r��icY���WL\\Pޮ#r'b�]^2����C��1�(4�&��D�*J��<�]�:��/�T�:tܿ7��PaH^?�(�sƁs�0��PQ��0�����?�*��\r�b.�.�����2�fO|f�<�k2L��07��8��!��c+6fW#~<I+!-�Q���H��:�!\"���2	5����M�m�1+���-�f᳇���8\\����n�F�<���څ�ʁ����\r#ꅎav�����>�2�1�N(��<�����X�t����c���:��������'���Wڌ�RE8�ر�p@��ܠ���5�Ѩ��(8/ѧb3�~\"J;��)^�=�d�v��J�����'\r�:�öȧ[ �ƘŃY�v�������Y���CL�(7a��Ί	z�a�����g�2\\\r�����B�%Q �.��A�I	\r��-�%��m-�e��\0���/DZ !P�x��H��6`X�b*g4E����\"	Ph��i�P��B\0�������eT�r�YJ�\\+��������:>&-�#��d�y{Iot�?CO ߛ�&q��\0�d��hG��;�B�	�B,\r)�4���q#\r��M&�V�X!��U����X��z!��0�C��.J964��	#�8����ٓ3jE���a #���	ag� 9��1&��<l����)H%4�c�H��#:��p]Ӱ����y(�Pra��,���s�rO�[�ۮ.N԰��5(a#�(�=���\$xy�\$ȡQ�w��u�4zr���:WT_(���X70I�H*�I諗�I(1�%O^�\"0{N'̌�aҌѲ9GC��K�e�����Ḥ��R��NIh\0�H�-�����i������åci�&eCə���e�j��j~1\r@�����6\r�����E�\n �6�6wg=%H\n���:���5�|'�U�M�8���JP�U������I�I�<ɐ)��Z��8:�d����r���!��h.�-\r�Z��9�B��z���MŮW3t�s����������b�LcB���VBt�C��vp.��[R^o�	+x>�*��v��9�rN�H!4vL1�����m��:��ThG�a�\"�5��a��3�BȢۈ�5a�-42b��Z��pnO��A\r��`�lf�5���>ՙ��[�#����p'�\rV\0��/b/�93�C��=���s4��:��U�(9.ƆG3�'ۍ�����I�nXvp���=X[nAѸ7Q�UKډ� t�O���^dt�z�q�hb؋,�����U8em�����ʉ5��쭠�ؼ�k`Ks�[�7�L�9y%q�~��#@V̥���.fU�\$�D2f~�:�3�Pč�^�zkA�f�ȡ�zq�?��b����Q2'(�]o%wg�B?�*�2��א�OX�{\$؏D�bf���H\n�4&0L�s\0�Hbw�.�3�p@{��D� �8ӅlW,�!�['[�^1BL]�:�0��TV�|�9۰�oy��jop��@P	�f������9	���[ M�C�@�����c��������j*-E�y�P���f��q�GèODNϣM@�yLe珗��K��	X��(0��R�f� &u0�\n�@o�Q +����F\$������C\"�� ���,�fH��чe���m���7w'ȉ?�&~��z��h��Q��7\0�k�����o��Yq�h�/d��F8�9�}2u��l�fS{��ߣ���,I����]���,�F��Bn���[=��sIy\$��@䩍>� xn\n���J\$��,���h�'t� Z@�����V��L\"�	�p&�4��N����*@�ݏ��M&��*��\0�Z�\r\r+L�\rU\$a)�Bm���3p:�P@+0FG�z�'.�?\ni�,�`-cx�/4󐾑F�i%d�\0P�k��k��/����Ve�}����ڃ���N4@bg2��]�>�z `Ƣ<P�Sn4����M�n�H��f�F�\$�ư�άLXl��l�R?�X�0�J\r����vp��k\"��ܳ��j��u\0���=\0k@Mp�|Ԑ�U�_@�LKXzqh��b\$��j4�C`+Ѣs\"֭��@�`P��F#�\n,�j�(O��\0[Q(-�2�p�RXZ\0��d������1�����P�1�0@�-V���]\n���\0.�n�nbu!�>�r\"#D�\r�-�fib4R�I�\$�4�L`t�0:�d;�!�8�\n��s&l�\"*�FB%\r'���p����%��]�8v����r]�� ��Ok�(��6��]����c\$�o���L����XrG �!+�*��zn�Ւ�1�\\\rNZ\r\0�?�*�.�.��/�ug�\"����(n��ҏI���2���W��|��&��0S��,��F�D6�rc��.��0��'�Nsf ���fd�.!5��HIp�L�8R|�+z����,��+�2k#4n��R�2mX�\"R�]\0S,,��l���5��8�@�@��%.���l95:�N�D��R�\n��#��zq6��7\0�z��4n��l�@Qrغ0�<�2��cD�a<C3�`p�҅;�'.t.��/&��\r5CP�2�{C��:�V��DQcV�T��]GNb`O�03[�gI�F	F�>�3B�h< �3�\\\r��Gt�����hJl��\"-�o�8�<A�CH���@R��¼�3L�L�M4& ��.�޾ɰ0�~~�6ә1��]��AS��\0L3�B��B�.ң�Iv}��\nb�(2�9fo9�6�r����O��btn	�ئ������^&p&(���P���I���.kUT�)dK��	���m��Φ_��Xe���YJSidOU��s��j\r�x']��u���4-�<DZU��X��Y)��L��}[�SMR�ՉZU�Z��T��V��,����UP��<SE�%�t�Vr��\\!\\f�t��4�*��;�&l��b��rqw\n�Qd17B� �X�P6�*^�Uh\rc�;f8�\"j#tRf�h�@�yg�l�;�	��i\0�iKZ tV<X\0�7�\0�@�k��wv� ��k�� b�	��I���Ci�\n��+�u9��Ֆ{g�ojlob>q&6,`�	�\n�z��q�fH<6m��o�Ei6�O�6!����F�Z\n�hZ�in��^\0ZJ�����d#�4��]�Rw+rjms�(@��,����+\\�nGjV��g\rwl �o-E&=&�Ϫ�VU�j17�54=4:B�ef�q{)�yw�l�ertfK{{2�eՎ����h�q�����c;�j��Ⱦ��T#�婨cb\\nB�xX?�I��1o�J@��Z �\"��ܐ�g'jp��(� ��O��@X\\\0���rsi��t��p��@��j1�t�p�2Q�L`�D�-��B8}NZZ,5�n��H����=.�GOrCg+�\n��^5lB,����E�\r����r�\0��Fx����t4��F���7sjf6Ir�+�b��\n@���ہ�hz��*v	��\r�Z���4��+�H��~|�2X�#���\r���\r�<(@M��~��W8Z\\B����4�E���@|eyd날�_~��d�ɳV��՘���i�8r�\r�ٓfBi�i���\\P�+��,dgC��p���C7�\"���h��y��W8<X!q��1,�\$���N�PT���r\n)�2מق\\G;qr��)�b�Aɓ��9,�}:`�\"N�v���/��QtT����R�<�D�F��J:G&�a>m\r4���o>F�L\n˦=�#k��GR�a�ZX�\"�_d<!*~Ů&N*	�0J0G2���ڨ\$��'�vF�n!rʂS,l1�{>�;_@��z��:�3C�����\rFT8�d��Q�c2���Ѧ�Rk�F�P�\r��թ+d�\r��n���@vE�i��2E�P	�&1�R`����u(s:r�W8!c�[BC� Mm\\�E.��{X�4O6a�,6F�@�@b�XQ*\0����0I��d\0;g#����LH�@��.jbۮ�q��{����F��\0`\$O�n��.��s��\ro%��c��1&�7��z�F�IDm\"\nRppϼO/x\n����=/۹�=�%F����\\1`e�<2�t��;�V�e�DÒ˂\$2�k���e��.���tVDQƣ��|~��W�)�Ȼ��IA�ū���ś<rc��\ns؉:P\nn2�d�56%^�CDX�y������*Zy 4�%���r��\\w�y��{�Cf9�e����Q����p�}�f�\r]�����}���;��\"\r{�,��m������T�������U�><^�&=<-c�1Up��(W�E�� X�t��niƜ2n��n\0�\r�7�jQIt��Cz�E��F>�%�\\���f/���N�o�:�HݴZ	FՎ�\$�[��\\'#d�'���m�������:=rc={�ʆ���-��:=״n-�9�҇V;�h11��*<hܶiP��'�7�ԟR\"B�������LJ��\0Aͣ����.Ӽp��u�~�����[�s���}���\$ht�.���4\r�9C�Q6\n���S��~�Wn�ȓ�\$�B�r\r���§�Ge�zy��̘���M�����\$�<X,C�,��t Xn��?s�\"��L���0i�\n�'\nE\0�C�r�^�̠���m)+�ꈠ�R�����_W�<���n���ؗK�OC���biܖX��ń]`+��P�xOP�[���V+_�IW�i�Og�������=k ��o�!_n�%c��漁�!�Tk|�+\r���,;EQ����l�����W���c6�����c��̮�S��\"�G�?���6���H����x0Ɂ�<�4�&�F�.R�@ R�4� ���=�jp�,��J5ه�\$�\\��V��\n�~R�Il�T�*4�M��)@��4���'�~�����߀�a@djiJBOQm����8��!d����`����}7��(��h��L�\n\\Õ�.���m2��U�,��5~��@��ĳ��:��2�x�Z��(�f��� F��4>\n�r^[���'A���&FR��k=����>j����!r/i ,aķ��\r/N�^R_���p}	Gc����3�9� y6 Ӻ�Q\n����	RX�������9Z�T�xnb̑d3�-G<M���\"�8@z�5��mG\0tR��B,�_�(!�y�u� ��� �J\0�d3S�j�0T6�6���E�0�t�6�~r×C�1<)\\���,�ρ�c\$�*fKđ��K9�(���&�l��r�^�d9�����0}���oTjӕ�w�m�I��Ç�`����10ZQB���Uĉ#f05`Ezx��Á�q+,E�<U �*��\r; ���G@�M�gA���a����&!-*�b�2\0");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($hc){$tc=substr($hc,-1);return
str_replace($tc.$tc,$tc,substr($hc,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($kd,$Ib=false){if(get_magic_quotes_gpc()){while(list($w,$V)=each($kd)){foreach($V
as$oc=>$U){unset($kd[$w][$oc]);if(is_array($U)){$kd[$w][stripslashes($oc)]=$U;$kd[]=&$kd[$w][stripslashes($oc)];}else$kd[$w][stripslashes($oc)]=($Ib?$U:stripslashes($U));}}}}function
bracket_escape($hc,$ua=false){static$ke=array(':'=>':1',']'=>':2','['=>':3');return
strtr($hc,($ua?array_flip($ke):$ke));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$W,$Ea,$rc="",$Rc="",$Ga=""){$K="<input type='checkbox' name='$C' value='".h($W)."'".($Ea?" checked":"").($Rc?' onclick="'.h($Rc).'"':'').">";return($rc!=""||$Ga?"<label".($Ga?" class='$Ga'":"").">$K".h($rc)."</label>":$K);}function
optionlist($D,$Dd=null,$ze=false){$K="";foreach($D
as$oc=>$U){$Vc=array($oc=>$U);if(is_array($U)){$K.='<optgroup label="'.h($oc).'">';$Vc=$U;}foreach($Vc
as$w=>$V)$K.='<option'.($ze||is_string($w)?' value="'.h($w).'"':'').(($ze||is_string($w)?(string)$w:$V)===$Dd?' selected':'').'>'.h($V);if(is_array($U))$K.='</optgroup>';}return$K;}function
html_select($C,$D,$W="",$Qc=true){if($Qc)return"<select name='".h($C)."'".(is_string($Qc)?' onchange="'.h($Qc).'"':"").">".optionlist($D,$W)."</select>";$K="";foreach($D
as$w=>$V)$K.="<label><input type='radio' name='".h($C)."' value='".h($w)."'".($w==$W?" checked":"").">".h($V)."</label>";return$K;}function
select_input($c,$D,$W="",$dd=""){return($D?"<select$c><option value=''>$dd".optionlist($D,$W,true)."</select>":"<input$c value='".h($W)."' placeholder='$dd'>");}function
confirm(){return" onclick=\"return confirm('".'Are you sure?'."');\"";}function
print_fieldset($r,$vc,$De=false,$Rc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Rc)."return !toggle('fieldset-$r');\">$vc</a></legend><div id='fieldset-$r'".($De?"":" class='hidden'").">\n";}function
bold($Aa,$Ga=""){return($Aa?" class='active $Ga'":($Ga?" class='$Ga'":""));}function
odd($K=' class="odd"'){static$q=0;if(!$K)$q=-1;return($q++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($w,$V=null){static$Jb=true;if($Jb)echo"{";if($w!=""){echo($Jb?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\/").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\/").'"':'undefined');$Jb=false;}else{echo"\n}\n";$Jb=true;}}function
ini_bool($lc){$V=ini_get($lc);return(preg_match('~^(on|true|yes)$~i',$V)||(int)$V);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$f;return$f->quote($Q);}function
get_vals($I,$d=0){global$f;$K=array();$J=$f->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$d];}return$K;}function
get_key_vals($I,$g=null,$de=0){global$f;if(!is_object($g))$g=$f;$K=array();$g->timeout=$de;$J=$g->query($I);$g->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$g=null,$k="<p class='error'>"){global$f;$Qa=(is_object($g)?$g:$f);$K=array();$J=$Qa->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($g)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$K;}function
unique_array($L,$t){foreach($t
as$s){if(preg_match("~PRIMARY|UNIQUE~",$s["type"])){$K=array();foreach($s["columns"]as$w){if(!isset($L[$w]))continue
2;$K[$w]=$L[$w];}return$K;}}}function
where($X,$m=array()){global$v;$K=array();$Ub='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$X["where"]as$w=>$V){$w=bracket_escape($w,1);$d=(preg_match($Ub,$w)?$w:idf_escape($w));$K[]=$d.(($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$V))||$v=="mssql"?" LIKE ".q(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$w],q($V)));if($v=="sql"&&preg_match("~[^ -@]~",$V))$K[]="$d = ".q($V)." COLLATE utf8_bin";}foreach((array)$X["null"]as$w)$K[]=(preg_match($Ub,$w)?$w:idf_escape($w))." IS NULL";return
implode(" AND ",$K);}function
where_check($V,$m=array()){parse_str($V,$Da);remove_slashes(array(&$Da));return
where($Da,$m);}function
where_link($q,$d,$W,$Tc="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($d)."&where%5B$q%5D%5Bop%5D=".urlencode(($W!==null?$Tc:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($W);}function
convert_fields($e,$m,$N=array()){$K="";foreach($e
as$w=>$V){if($N&&!in_array(idf_escape($w),$N))continue;$oa=convert_field($m[$w]);if($oa)$K.=", $oa AS ".idf_escape($w);}return$K;}function
cookie($C,$W,$yc=2592000){global$aa;$ad=array($C,(preg_match("~\n~",$W)?"":$W),($yc?time()+$yc:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ad[]=true;return
call_user_func_array('setcookie',$ad);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$V){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($Ae,$O,$T,$h=null){global$ib;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ib))."|username|".($h!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($Ae!="server"||$O!=""?urlencode($Ae)."=".urlencode($O)."&":"")."username=".urlencode($T).($h!=""?"&db=".urlencode($h):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($z,$A=null){if($A!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($z!==null?$z:$_SERVER["REQUEST_URI"]))][]=$A;}if($z!==null){if($z=="")$z=".";header("Location: $z");exit;}}function
query_redirect($I,$z,$A,$sd=true,$_b=true,$Cb=false){global$f,$k,$b;$ce="";if($_b){$Md=microtime(true);$Cb=!$f->query($I);$ce="; -- ".format_time($Md,microtime(true));}$Ld="";if($I)$Ld=$b->messageQuery($I.$ce);if($Cb){$k=error().$Ld;return
false;}if($sd)redirect($z,$A.$Ld);return
true;}function
queries($I=null){global$f;static$nd=array();if($I===null)return
implode("\n",$nd);$Md=microtime(true);$K=$f->query($I);$nd[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I)."; -- ".format_time($Md,microtime(true));return$K;}function
apply_queries($I,$Xd,$wb='table'){foreach($Xd
as$R){if(!queries("$I ".$wb($R)))return
false;}return
true;}function
queries_redirect($z,$A,$sd){return
query_redirect(queries(),$z,$A,$sd,false,!$sd);}function
format_time($Md,$sb){return
sprintf('%.3f s',max(0,$sb-$Md));}function
remove_from_uri($Zc=""){return
substr(preg_replace("~(?<=[?&])($Zc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Wa){return" ".($F==$Wa?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($w,$Za=false){$Fb=$_FILES[$w];if(!$Fb)return
null;foreach($Fb
as$w=>$V)$Fb[$w]=(array)$V;$K='';foreach($Fb["error"]as$w=>$k){if($k)return$k;$C=$Fb["name"][$w];$ie=$Fb["tmp_name"][$w];$Ra=file_get_contents($Za&&preg_match('~\\.gz$~',$C)?"compress.zlib://$ie":$ie);if($Za){$Md=substr($Ra,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Md,$td))$Ra=iconv("utf-16","utf-8",$Ra);elseif($Md=="\xEF\xBB\xBF")$Ra=substr($Ra,3);$K.=$Ra."\n\n";}}return$K;}function
upload_error($k){$Dc=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($Dc?" ".sprintf('Maximum allowed file size is %sB.',$Dc):""):'File does not exist.');}function
repeat_pattern($H,$wc){return
str_repeat("$H{0,65535}",$wc/65535)."$H{0,".($wc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($Q,$wc=80,$Sd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$wc).")($)?)u",$Q,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$wc).")($)?)",$Q,$_);return
h($_[1]).$Sd.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($kd,$jc=array()){while(list($w,$V)=each($kd)){if(is_array($V)){foreach($V
as$oc=>$U)$kd[$w."[$oc]"]=$U;}elseif(!in_array($w,$jc))echo'<input type="hidden" name="'.h($w).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Db=false){$K=table_status($R,$Db);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$Ob){foreach($Ob["source"]as$V)$K[$V][]=$Ob;}return$K;}function
enum_input($ne,$c,$l,$W,$rb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Ac);$K=($rb!==null?"<label><input type='$ne'$c value='$rb'".((is_array($W)?in_array($rb,$W):$W===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($Ac[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ea=(is_int($W)?$W==$q+1:(is_array($W)?in_array($q+1,$W):$W===$V));$K.=" <label><input type='$ne'$c value='".($q+1)."'".($Ea?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$K;}function
input($l,$W,$o){global$f,$pe,$b,$v;$C=h(bracket_escape($l["field"]));echo"<td class='function'>";if(is_array($W)&&!$o){$na=array($W);if(version_compare(PHP_VERSION,5.4)>=0)$na[]=JSON_PRETTY_PRINT;$W=call_user_func_array('json_encode',$na);$o="json";}$wd=($v=="mssql"&&$l["auto_increment"]);if($wd&&!$_POST["save"])$o=null;$Vb=(isset($_GET["select"])||$wd?array("orig"=>'original'):array())+$b->editFunctions($l);$c=" name='fields[$C]'";if($l["type"]=="enum")echo
nbsp($Vb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Jb=0;foreach($Vb
as$w=>$V){if($w===""||!$V)break;$Jb++;}$Qc=($Jb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Jb > f.selectedIndex) f.selectedIndex = $Jb;\" onkeyup='keyupChange.call(this);'":"");$c.=$Qc;echo(count($Vb)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Vb,$o===null||in_array($o,$Vb)||isset($Vb[$o])?$o:"")."</select>":nbsp(reset($Vb))).'<td>';$nc=$b->editInput($_GET["edit"],$l,$c,$W);if($nc!="")echo$nc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Ac);foreach($Ac[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ea=(is_int($W)?($W>>$q)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$C][$q]' value='".(1<<$q)."'".($Ea?' checked':'')."$Qc>".h($b->editVal($V,$l)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Qc>";elseif(($Zd=preg_match('~text|lob~',$l["type"]))||preg_match("~\n~",$W)){if($Zd&&$v!="sqlite")$c.=" cols='50' rows='12'";else{$M=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}elseif($o=="json")echo"<textarea$c cols='50' rows='12' class='jush-js'>".h($W).'</textarea>';else{$Fc=(!preg_match('~int~',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$_)?((preg_match("~binary~",$l["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$l["unsigned"]?1:0)):($pe[$l["type"]]?$pe[$l["type"]]+($l["unsigned"]?0:1):0));if($v=='sql'&&$f->server_info>=5.6&&preg_match('~time~',$l["type"]))$Fc+=7;echo"<input".(preg_match('~int~',$l["type"])?" type='number'":"")." value='".h($W)."'".($Fc?" maxlength='$Fc'":"").(preg_match('~char|binary~',$l["type"])&&$Fc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$hc=bracket_escape($l["field"]);$o=$_POST["function"][$hc];$W=$_POST["fields"][$hc];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if($o=="json"){$o="";$W=json_decode($W,true);if(!is_array($W))return
false;return$W;}if(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads")){$Fb=get_file("fields-$hc");if(!is_string($Fb))return
false;return
q($Fb);}return$b->processInput($l,$W,$o);}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Rb=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$f->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Rb){echo"<ul>\n";$Rb=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Rb?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($gc,$Ic=false){global$b;$K=$b->dumpHeaders($gc,$Ic);$Xc=$_POST["output"];if($Xc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($gc).".$K".($Xc!="file"&&!preg_match('~[^0-9a-z]~',$Xc)?".$Xc":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$w=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$L[$w]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($o,$d){return($o?($o=="unixepoch"?"DATETIME($d, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$d)"):$d);}function
password_file($Ta){$fb=ini_get("upload_tmp_dir");if(!$fb){if(function_exists('sys_get_temp_dir'))$fb=sys_get_temp_dir();else{$Gb=@tempnam("","");if(!$Gb)return
false;$fb=dirname($Gb);unlink($Gb);}}$Gb="$fb/adminer.key";$K=@file_get_contents($Gb);if($K||!$Ta)return$K;$Sb=@fopen($Gb,"w");if($Sb){$K=rand_string();fwrite($Sb,$K);fclose($Sb);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($V,$y,$l,$ae){global$b,$aa;if(is_array($V)){$K="";foreach($V
as$oc=>$U)$K.="<tr>".($V!=array_values($V)?"<th>".h($oc):"")."<td>".select_value($U,$y,$l,$ae);return"<table cellspacing='0'>$K</table>";}if(!$y)$y=$b->selectLink($V,$l);if($y===null){if(is_mail($V))$y="mailto:$V";if($ld=is_url($V))$y=($ld=="http"&&$aa?$V:"$ld://www.adminer.org/redirect/?url=".urlencode($V));}$V=$b->editVal($V,$l);if($V!==null){if($V==="")$V="&nbsp;";elseif($ae!=""&&is_shortable($l))$V=shorten_utf8($V,max(0,+$ae));else$V=h($V);}$V=$b->selectVal($V,$y,$l);return$V;}function
is_mail($ob){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$H="$pa+(\\.$pa+)*@($hb?\\.)+$hb";return
is_string($ob)&&preg_match("(^$H(,\\s*$H)*\$)i",$ob);}function
is_url($Q){$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($hb?\\.)+$hb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$_)?strtolower($_[1]):"");}function
is_shortable($l){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$l["type"]);}function
count_rows($R,$X,$u,$p){global$v;$I=" FROM ".table($R).($X?" WHERE ".implode(" AND ",$X):"");return($u&&($v=="sql"||count($p)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$p).")$I":"SELECT COUNT(*)".($u?" FROM (SELECT 1$I$Wb) x":$I));}function
slow_query($I){global$b,$je;$h=$b->database();$de=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($h==""||$g->select_db($h))){$qc=$g->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$je,'&kill=',$qc,'\');
}, ',1000*$de,');
</script>
';}else$g=null;ob_flush();flush();$K=@get_key_vals($I,$g,$de);if($g){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$qd=rand(1,1e6);return($qd^$_SESSION["token"]).":$qd";}function
verify_token(){list($je,$qd)=explode(":",$_POST["token"]);return($qd^$_SESSION["token"])==$je;}function
lzw_decompress($za){$eb=256;$_a=8;$Ia=array();$xd=0;$yd=0;for($q=0;$q<strlen($za);$q++){$xd=($xd<<8)+ord($za[$q]);$yd+=8;if($yd>=$_a){$yd-=$_a;$Ia[]=$xd>>$yd;$xd&=(1<<$yd)-1;$eb++;if($eb>>$_a)$_a++;}}$db=range("\0","\xFF");$K="";foreach($Ia
as$q=>$Ha){$nb=$db[$Ha];if(!isset($nb))$nb=$He.$He[0];$K.=$nb;if($q)$db[]=$He.$nb[0];$He=$nb;}return$K;}function
on_help($Na,$Jd=0){return" onmouseover='helpMouseover(this, event, ".h($Na).", $Jd);' onmouseout='helpMouseout(this, event);'";}global$b,$f,$ib,$lb,$ub,$k,$Vb,$Xb,$aa,$mc,$v,$ba,$sc,$Pc,$cd,$Pd,$ac,$je,$me,$pe,$we,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$ad=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$ad[]=true;call_user_func_array('session_set_cookie_params',$ad);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ib);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($le,$Mc=null){if(is_array($le)){$fd=($Mc==1?0:1);$le=$le[$fd];}$le=str_replace("%d","%s",$le);$Mc=number_format($Mc,0,".",',');return
sprintf($le,$Mc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$fd=array_search("SQL",$b->operators);if($fd!==false)unset($b->operators[$fd]);}function
dsn($jb,$T,$G){try{parent::__construct($jb,$T,$G);}catch(Exception$xb){auth_error($xb);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$qe=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J){$J=$this->_result;if(!$J)return
false;}if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$ib=array();class
Min_SQL{var$_conn;function
Min_SQL($f){$this->_conn=$f;}function
select($R,$N,$X,$p,$E,$x,$F){global$b,$v;$u=(count($p)<count($N));$I=$b->selectQueryBuild($N,$X,$p,$E,$x,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($X?"\nWHERE ".implode(" AND ",$X):"").($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):""),($x!=""?+$x:null),($F?$x*$F:0),"\n");echo$b->selectQuery($I);return$this->_conn->query($I);}function
delete($R,$od,$x=0){$I="FROM ".table($R);return
queries("DELETE".($x?limit1($I,$od):" $I$od"));}function
update($R,$P,$od,$x=0,$Fd="\n"){$_e=array();foreach($P
as$w=>$V)$_e[]="$w = $V";$I=table($R)." SET$Fd".implode(",$Fd",$_e);return
queries("UPDATE".($x?limit1($I,$od):" $I$od"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$id){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$ib=array("server"=>"MySQL")+$ib;if(!defined("DRIVER")){$gd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$T,$G){mysqli_report(MYSQLI_REPORT_OFF);list($ec,$ed)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$ec:ini_get("mysqli.default_host")),($O.$T!=""?$T:ini_get("mysqli.default_user")),($O.$T.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($ed)?$ed:ini_get("mysqli.default_port")),(!is_numeric($ed)?$ed:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$l];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$T,$G){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$T"!=""?$T:ini_get("mysql.default_user")),("$O$T$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($Xa){return
mysql_select_db($Xa,$this->_link);}function
query($I,$qe=false){$J=@($qe?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$l=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$l);}}class
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
connect($O,$T,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$T,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Xa){return$this->query("USE ".idf_escape($Xa));}function
query($I,$qe=false){$this->setAttribute(1000,!$qe);return
parent::query($I,$qe);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$id){$e=array_keys(reset($M));$hd="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$_e=array();foreach($e
as$w)$_e[$w]="$w = VALUES($w)";$Sd="\nON DUPLICATE KEY UPDATE ".implode(", ",$_e);$_e=array();$wc=0;foreach($M
as$P){$W="(".implode(", ",$P).")";if($_e&&(strlen($hd)+$wc+strlen($W)+strlen($Sd)>1e6)){if(!queries($hd.implode(",\n",$_e).$Sd))return
false;$_e=array();$wc=0;}$_e[]=$W;$wc+=strlen($W)+2;}return
queries($hd.implode(",\n",$_e).$Sd);}}function
idf_escape($hc){return"`".str_replace("`","``",$hc)."`";}function
table($hc){return
idf_escape($hc);}function
connect(){global$b;$f=new
Min_DB;$Va=$b->credentials();if($f->connect($Va[0],$Va[1],$Va[2])){$f->query("SET sql_quote_show_create = 1, autocommit = 1");return$f;}$K=$f->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($_d=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$_d;return$K;}function
get_databases($Kb){global$f;$K=get_session("dbs");if($K===null){$I=($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Kb?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$X,$x,$Nc=0,$Fd=" "){return" $I$X".($x!==null?$Fd."LIMIT $x".($Nc?" OFFSET $Nc":""):"");}function
limit1($I,$X){return
limit($I,$X,1);}function
db_collation($h,$La){global$f;$K=null;$Ta=$f->result("SHOW CREATE DATABASE ".idf_escape($h),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ta,$_))$K=$_[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ta,$_))$K=$La[$_[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(preg_match("~YES|DEFAULT~",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals($f->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($Ya){$K=array();foreach($Ya
as$h)$K[$h]=count(get_vals("SHOW TABLES IN ".idf_escape($h)));return$K;}function
table_status($C="",$Db=false){global$f;$K=array();foreach(get_rows($Db&&$f->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Engine"]))$L["Comment"]="";if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]===null;}function
fk_support($S){return
preg_match('~InnoDB|IBMDB2I~i',$S["Engine"]);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$_);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$_[1],"length"=>$_[2],"unsigned"=>ltrim($_[3].$_[4]),"default"=>($L["Default"]!=""||preg_match("~char|set~",$_[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$L["Extra"],$_)?$_[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(preg_split('~, *~',$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$g=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$g)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];$K[$L["Key_name"]]["descs"][]=null;}return$K;}function
foreign_keys($R){global$f,$Pc;static$H='`(?:[^`]|``)+`';$K=array();$Ua=$f->result("SHOW CREATE TABLE ".table($R),1);if($Ua){preg_match_all("~CONSTRAINT ($H) FOREIGN KEY \\(((?:$H,? ?)+)\\) REFERENCES ($H)(?:\\.($H))? \\(((?:$H,? ?)+)\\)(?: ON DELETE ($Pc))?(?: ON UPDATE ($Pc))?~",$Ua,$Ac,PREG_SET_ORDER);foreach($Ac
as$_){preg_match_all("~$H~",$_[2],$Kd);preg_match_all("~$H~",$_[5],$Yd);$K[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$Kd[0]),"target"=>array_map('idf_unescape',$Yd[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$K;}function
view($C){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$w=>$V)asort($K[$w]);return$K;}function
information_schema($h){global$f;return($f->server_info>=5&&$h=="information_schema")||($f->server_info>=5.5&&$h=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
error_line(){global$f;if(preg_match('~ at line ([0-9]+)$~',$f->error,$td))return$td[1]-1;}function
create_database($h,$Ka){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($h).($Ka?" COLLATE ".q($Ka):""));}function
drop_databases($Ya){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ya,'idf_escape');}function
rename_database($C,$Ka){if(create_database($C,$Ka)){$ud=array();foreach(tables_list()as$R=>$ne)$ud[]=table($R)." TO ".idf_escape($C).".".table($R);if(!$ud||queries("RENAME TABLE ".implode(", ",$ud))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$ta="";break;}if($s["type"]=="PRIMARY")$ta=" UNIQUE";}}return" AUTO_INCREMENT$ta";}function
alter_table($R,$C,$m,$Lb,$Oa,$tb,$Ka,$sa,$bd){$ma=array();foreach($m
as$l)$ma[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$ma=array_merge($ma,$Lb);$Nd="COMMENT=".q($Oa).($tb?" ENGINE=".q($tb):"").($Ka?" COLLATE ".q($Ka):"").($sa!=""?" AUTO_INCREMENT=$sa":"").$bd;if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$ma)."\n) $Nd");if($R!=$C)$ma[]="RENAME TO ".table($C);$ma[]=$Nd;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$ma));}function
alter_indexes($R,$ma){foreach($ma
as$w=>$V)$ma[$w]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($R).implode(",",$ma));}function
truncate_tables($Xd){return
apply_queries("TRUNCATE TABLE",$Xd);}function
drop_views($Ce){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ce)));}function
drop_tables($Xd){return
queries("DROP TABLE ".implode(", ",array_map('table',$Xd)));}function
move_tables($Xd,$Ce,$Yd){$ud=array();foreach(array_merge($Xd,$Ce)as$R)$ud[]=table($R)." TO ".idf_escape($Yd).".".table($R);return
queries("RENAME TABLE ".implode(", ",$ud));}function
copy_tables($Xd,$Ce,$Yd){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Xd
as$R){$C=($Yd==DB?table("copy_$R"):idf_escape($Yd).".".table($R));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($Ce
as$R){$C=($Yd==DB?table("copy_$R"):idf_escape($Yd).".".table($R));$Be=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Be[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$ne){global$f,$ub,$mc,$pe;$la=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$oe="((".implode("|",array_merge(array_keys($pe),$la)).")\\b(?:\\s*\\(((?:[^'\")]*|$ub)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$H="\\s*(".($ne=="FUNCTION"?"":$mc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$oe";$Ta=$f->result("SHOW CREATE $ne ".idf_escape($C),2);preg_match("~\\(((?:$H\\s*,?)*)\\)\\s*".($ne=="FUNCTION"?"RETURNS\\s+$oe\\s+":"")."(.*)~is",$Ta,$_);$m=array();preg_match_all("~$H\\s*,?~is",$_[1],$Ac,PREG_SET_ORDER);foreach($Ac
as$Zc){$C=str_replace("``","`",$Zc[2]).$Zc[3];$m[]=array("field"=>$C,"type"=>strtolower($Zc[5]),"length"=>preg_replace_callback("~$ub~s",'normalize_enum',$Zc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Zc[8] $Zc[7]"))),"null"=>1,"full_type"=>$Zc[4],"inout"=>strtoupper($Zc[1]),"collation"=>strtolower($Zc[9]),);}if($ne!="FUNCTION")return
array("fields"=>$m,"definition"=>$_[11]);return
array("fields"=>$m,"returns"=>array("type"=>$_[12],"length"=>$_[13],"unsigned"=>$_[15],"collation"=>$_[16]),"definition"=>$_[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$I){return$f->query("EXPLAIN ".($f->server_info>=5.1?"PARTITIONS ":"").$I);}function
found_rows($S,$X){return($X||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ad){return
true;}function
create_sql($R,$sa){global$f;$K=$f->result("SHOW CREATE TABLE ".table($R),1);if(!$sa)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Xa){return"USE ".idf_escape($Xa);}function
trigger_sql($R,$Qd){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Qd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(preg_match("~binary~",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$K){if(preg_match("~binary~",$l["type"]))$K="UNHEX($K)";if($l["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))$K="GeomFromText($K)";return$K;}function
support($Eb){global$f;return!preg_match("~scheme|sequence|type|view_trigger".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|routine|trigger|view":""):"")."~",$Eb);}$v="sql";$pe=array();$Pd=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$V){$pe+=$V;$Pd[$w]=array_keys($V);}$we=array("unsigned","zerofill","unsigned zerofill");$Uc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Vb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Xb=array("avg","count","count distinct","group_concat","max","min","sum");$lb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.0.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' target='_blank' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($Ta=false){return
password_file($Ta);}function
database(){global$f;if($f){$Ya=$this->databases(false);return(!$Ya?$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Ya[(information_schema($Ya[0])?1:0)]);}}function
schemas(){return
schemas();}function
databases($Kb=true){return
get_databases($Kb);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Username<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Password<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($zc,$G){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Vd){return
h($Vd["Comment"]!=""?$Vd["Comment"]:$Vd["Name"]);}function
fieldName($l,$E=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Vd,$P=""){$a=$Vd["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'New item'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Ud){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$w=>$V){$C=$this->tableName(table_status($w,true));if($C!=""){$Bd=preg_quote($Ud);$Fd="(:|\\s*-)?\\s+";$K[$w]["name"]=(preg_match("(^$Bd$Fd(.+)|^(.+?)$Fd$Bd\$)iu",$C,$_)?$_[2].$_[3]:$C);}else
unset($K[$w]);}return$K;}function
backwardKeysPrint($wa,$L){foreach($wa
as$R=>$va){foreach($va["keys"]as$Ma){$y=ME.'select='.urlencode($R);$q=0;foreach($Ma
as$d=>$V)$y.=where_link($q++,$d,$L[$V]);echo"<a href='".h($y)."'>".h($va["name"])."</a>";$y=ME.'edit='.urlencode($R);foreach($Ma
as$d=>$V)$y.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($L[$V]);echo"<a href='".h($y)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(preg_match("~varchar|character varying~",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($M,$Nb){$K=$M;foreach($M[0]as$w=>$V){if(list($R,$r,$C)=$this->_foreignColumn($Nb,$w)){$ic=array();foreach($M
as$L)$ic[$L[$w]]=q($L[$w]);$cb=$this->_values[$R];if(!$cb)$cb=get_key_vals("SELECT $r, $C FROM ".table($R)." WHERE $r IN (".implode(", ",$ic).")");foreach($M
as$B=>$L){if(isset($L[$w]))$K[$B][$w]=(string)$cb[$L[$w]];}}}return$K;}function
selectLink($V,$l){}function
selectVal($V,$y,$l){$K=($V===null?"&nbsp;":$V);$y=h($y);if(preg_match('~blob|bytea~',$l["type"])&&!is_utf8($V)){$K=lang(array('%d byte','%d bytes'),strlen($V));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$V))$K="<img src='$y' alt='$K'>";}if(like_bool($l)&&$K!="&nbsp;")$K=($V?'yes':'no');if($y)$K="<a href='$y'>$K</a>";if(!$y&&!like_bool($l)&&preg_match('~int|float|double|decimal~',$l["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$l["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($V,$l){if(preg_match('~date|timestamp~',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$V);return$V;}function
selectColumnsPrint($N,$e){}function
selectSearchPrint($X,$e,$t){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$pc=array();foreach($X
as$w=>$V)$pc[$V["col"]]=$w;$q=0;$m=fields($_GET["select"]);foreach($e
as$C=>$bb){$l=$m[$C];if(preg_match("~enum~",$l["type"])||like_bool($l)){$w=$pc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'no','yes'),$X[$w]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$X[$w]["val"],($l["null"]?0:null))),"</div>\n";unset($e[$C]);}elseif(is_array($D=$this->_foreignKeyOptions($_GET["select"],$C))){if($m[$C]["null"])$D[0]='('.'empty'.')';$w=$pc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($D,$X[$w]["val"],true)."</select></div>\n";unset($e[$C]);}}$q=0;foreach($X
as$V){if(($V["col"]==""||$e[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'anywhere'.")".optionlist($e,$V["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$q][val]' value='".h($V["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($e,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$q][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$e,$t){$Wc=array();foreach($t
as$w=>$s){$E=array();foreach($s["columns"]as$V)$E[]=$e[$V];if(count(array_filter($E,'strlen'))>1&&$w!="PRIMARY")$Wc[$w]=implode(", ",$E);}if($Wc){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Wc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($x){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$x),"</div></fieldset>\n";}function
selectLengthPrint($ae){}function
selectActionPrint($t){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($pb,$e){if($pb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($pb)==1?'<input type="hidden" name="email_field" value="'.h(key($pb)).'">':html_select("email_field",$pb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$t){return
array(array(),array());}function
selectSearchProcess($m,$t){$K=array();foreach((array)$_GET["where"]as$w=>$X){$Ja=$X["col"];$Sc=$X["op"];$V=$X["val"];if(($w<0?"":$Ja).$V!=""){$Pa=array();foreach(($Ja!=""?array($Ja=>$m[$Ja]):$m)as$C=>$l){if($Ja!=""||is_numeric($V)||!preg_match('~int|float|double|decimal~',$l["type"])){$C=idf_escape($C);if($Ja!=""&&$l["type"]=="enum")$Pa[]=(in_array(0,$V)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$V)).")";else{$be=preg_match('~char|text|enum|set~',$l["type"]);$W=$this->processInput($l,(!$Sc&&$be&&preg_match('~^[^%]+$~',$V)?"%$V%":$V));$Pa[]=$C.($W=="NULL"?" IS".($Sc==">="?" NOT":"")." $W":(in_array($Sc,$this->operators)||$Sc=="="?" $Sc $W":($be?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($w<0&&$V=="0")$Pa[]="$C IS NULL";}}}$K[]=($Pa?"(".implode(" OR ",$Pa).")":"0");}}return$K;}function
selectOrderProcess($m,$t){$kc=$_GET["index_order"];if($kc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($kc!=""?array($t[$kc]):$t)as$s){if($kc!=""||$s["type"]=="INDEX"){$Zb=array_filter($s["descs"]);$bb=false;foreach($s["columns"]as$V){if(preg_match('~date|timestamp~',$m[$V]["type"])){$bb=true;break;}}$K=array();foreach($s["columns"]as$w=>$V)$K[]=idf_escape($V).(($Zb?$s["descs"][$w]:$bb)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Nb){if($_POST["email_append"])return
true;if($_POST["email"]){$Ed=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Rd=$_POST["email_subject"];$A=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Rd.$A",$Ac);$M=get_rows("SELECT DISTINCT $l".($Ac[1]?", ".implode(", ",array_map('idf_escape',array_unique($Ac[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($M,$Nb)as$L){$vd=array('{\\'=>'{');foreach($Ac[1]as$V)$vd['{$'."$V}"]=$this->editVal($L[$V],$m[$V]);$ob=$L[$_POST["email_field"]];if(is_mail($ob)&&send_mail($ob,strtr($Rd,$vd),strtr($A,$vd),$_POST["email_from"],$_FILES["email_files"]))$Ed++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$Ed));}return
false;}function
selectQueryBuild($N,$X,$p,$E,$x,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($l){$K=array();if($l["null"]&&preg_match('~blob~',$l["type"]))$K["NULL"]='empty';$K[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(preg_match('~date|time~',$l["type"]))$K["now"]='now';if(preg_match('~_(md5|sha1)$~i',$l["field"],$_))$K[]=strtolower($_[1]);return$K;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$D=$this->_foreignKeyOptions($R,$l["field"],$W);if($D!==null)return(is_array($D)?"<select$c>".optionlist($D,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($D)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$dc="";if(preg_match('~time~',$l["type"]))$dc='HH:MM:SS';if(preg_match('~date|timestamp~',$l["type"]))$dc='[yyyy]-mm-dd'.($dc?" [$dc]":"");if($dc)return"<input value='".h($W)."'$c> ($dc)";if(preg_match('~_(md5|sha1)$~i',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$K=$W;if(preg_match('~date|timestamp~',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$W,$_))$K=($_["p1"]!=""?$_["p1"]:($_["p2"]!=""?($_["p2"]<70?20:19).$_["p2"]:gmdate("Y")))."-$_[p3]$_[p4]-$_[p5]$_[p6]".end($_);$K=($l["type"]=="bit"&&preg_match('~^[0-9]+$~',$W)?$K:q($K));if($W==""&&like_bool($l))$K="0";elseif($W==""&&($l["null"]||!preg_match('~char|text~',$l["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$o))$K="$o($K)";return
unconvert_field($l,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($h){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Qd,$I){global$f;$J=$f->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Qd=="table"){dump_csv(array_keys($L));$Qd="INSERT";}dump_csv($L);}}}function
dumpFilename($gc){return
friendly_url($gc);}function
dumpHeaders($gc,$Ic=false){$Ab="csv";header("Content-Type: text/csv; charset=utf-8");return$Ab;}function
homepage(){return
true;}function
navigation($Hc){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Hc=="auth"){$Jb=true;foreach((array)$_SESSION["pwds"]as$Ae=>$Hd){foreach($Hd[""]as$T=>$G){if($G!==null){if($Jb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Jb=false;}echo"<a href='".h(auth_url($Ae,"",$T))."'>".($T!=""?h($T):"<i>".'empty'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($Hc);if($Hc!="db"&&$Hc!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Hc){}function
tablesPrint($Xd){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Xd
as$L){$C=$this->tableName($L);if(isset($L["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"])." title='".'Select data'."'>$C</a><br>\n";}}function
_foreignColumn($Nb,$d){foreach((array)$Nb[$d]as$Mb){if(count($Mb["source"])==1){$C=$this->rowDescription($Mb["table"]);if($C!=""){$r=idf_escape($Mb["target"][0]);return
array($Mb["table"],$r,$C);}}}}function
_foreignKeyOptions($R,$d,$W=null){global$f;if(list($Yd,$r,$C)=$this->_foreignColumn(column_foreign_keys($R),$d)){$K=&$this->_values[$Yd];if($K===null){$S=table_status($Yd);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $C FROM ".table($Yd)." ORDER BY 2"));}if(!$K&&$W!==null)return$f->result("SELECT $C FROM ".table($Yd)." WHERE $r = ".q($W));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($ee,$k="",$Ca=array(),$fe=""){global$ba,$ca,$b,$f,$ib,$v;page_headers();$ge=$ee.($fe!=""?": $fe":"");$he=strip_tags($ge.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$he,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.0&amp;driver=mysql",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.0&amp;driver=mysql",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.0&amp;driver=mysql",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.0&amp;driver=mysql",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($f)?substr($f->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$ca');"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$v,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ca!==null){$y=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$ib[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Server');if($Ca===false)echo"$O\n";else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ca)))echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ca)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ca
as$w=>$V){$bb=(is_array($V)?$V[1]:h($V));if($bb!="")echo"<a href='".h(ME."$w=").urlencode(is_array($V)?$V[0]:$V)."'>$bb</a> &raquo; ";}}echo"$ee\n";}}echo"<h2>$ge</h2>\n";restart_session();page_messages($k);$Ya=&get_session("dbs");if(DB!=""&&$Ya&&!in_array(DB,$Ya,true))$Ya=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($k){$ye=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Gc=$_SESSION["messages"][$ye];if($Gc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Gc)."</div>\n";unset($_SESSION["messages"][$ye]);}if($k)echo"<div class='error'>$k</div>\n";}function
page_footer($Hc=""){global$b,$je;echo'</div>

';if($Hc!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$je,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Hc);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($U,$Ee){$_d='';foreach($U
as$V)$_d.=pack('V',$V);if($Ee)return
substr($_d,0,end($U));return$_d;}function
str2long($_d,$Ee){$U=array_values(unpack('V*',str_pad($_d,4*ceil(strlen($_d)/4),"\0")));if($Ee)$U[]=strlen($_d);return$U;}function
xxtea_mx($Z,$Y,$Td,$oc){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($Td^$Y)+($oc^$Z));}function
encrypt_string($Od,$w){if($Od=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$U=str2long($Od,true);$B=count($U)-1;$Z=$U[$B];$Y=$U[0];$md=floor(6+52/($B+1));$Td=0;while($md-->0){$Td=int32($Td+0x9E3779B9);$kb=$Td>>2&3;for($Yc=0;$Yc<$B;$Yc++){$Y=$U[$Yc+1];$Jc=xxtea_mx($Z,$Y,$Td,$w[$Yc&3^$kb]);$Z=int32($U[$Yc]+$Jc);$U[$Yc]=$Z;}$Y=$U[0];$Jc=xxtea_mx($Z,$Y,$Td,$w[$Yc&3^$kb]);$Z=int32($U[$B]+$Jc);$U[$B]=$Z;}return
long2str($U,false);}function
decrypt_string($Od,$w){if($Od=="")return"";if(!$w)return
false;$w=array_values(unpack("V*",pack("H*",md5($w))));$U=str2long($Od,false);$B=count($U)-1;$Z=$U[$B];$Y=$U[0];$md=floor(6+52/($B+1));$Td=int32($md*0x9E3779B9);while($Td){$kb=$Td>>2&3;for($Yc=$B;$Yc>0;$Yc--){$Z=$U[$Yc-1];$Jc=xxtea_mx($Z,$Y,$Td,$w[$Yc&3^$kb]);$Y=int32($U[$Yc]-$Jc);$U[$Yc]=$Y;}$Z=$U[$B];$Jc=xxtea_mx($Z,$Y,$Td,$w[$Yc&3^$kb]);$Y=int32($U[0]-$Jc);$U[0]=$Y;$Td=int32($Td-0x9E3779B9);}return
long2str($U,true);}$f='';$ac=$_SESSION["token"];if(!$ac)$_SESSION["token"]=rand(1,1e6);$je=get_token();$cd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($w)=explode(":",$V);$cd[$w]=$V;}}$ra=$_POST["auth"];if($ra){session_regenerate_id();$i=$ra["driver"];$O=$ra["server"];$T=$ra["username"];$G=$ra["password"];$h=$ra["db"];set_password($i,$O,$T,$G);$_SESSION["db"][$i][$O][$T][$h]=true;if($ra["permanent"]){$w=base64_encode($i)."-".base64_encode($O)."-".base64_encode($T)."-".base64_encode($h);$jd=$b->permanentLogin(true);$cd[$w]="$w:".base64_encode($jd?encrypt_string($G,$jd):"");cookie("adminer_permanent",implode(" ",$cd));}if(count($_POST)==1||DRIVER!=$i||SERVER!=$O||$_GET["username"]!==$T||DB!=$h)redirect(auth_url($i,$O,$T,$h));}elseif($_POST["logout"]){if($ac&&!verify_token()){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($cd&&!$_SESSION["pwds"]){session_regenerate_id();$jd=$b->permanentLogin();foreach($cd
as$w=>$V){list(,$Fa)=explode(":",$V);list($Ae,$O,$T,$h)=array_map('base64_decode',explode("-",$w));set_password($Ae,$O,$T,decrypt_string(base64_decode($Fa),$jd));$_SESSION["db"][$Ae][$O][$T][$h]=true;}}function
unset_permanent(){global$cd;foreach($cd
as$w=>$V){list($Ae,$O,$T,$h)=array_map('base64_decode',explode("-",$w));if($Ae==DRIVER&&$O==SERVER&&$T==$_GET["username"]&&$h==DB)unset($cd[$w]);}cookie("adminer_permanent",implode(" ",$cd));}function
auth_error($zb=null){global$f,$b,$ac;$Id=session_name();$k="";if(!$_COOKIE[$Id]&&$_GET[$Id]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$Id]||$_GET[$Id])&&!$ac)$k='Session expired, please login again.';else{$G=get_password();if($G!==null){$k=h($zb?$zb->getMessage():(is_string($f)?$f:'Invalid credentials.'));if($G===false)$k.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$ad=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$ad["lifetime"]);page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Ae,$O,$T,$G){$_SESSION["pwds"][$Ae][$O][$T]=($_COOKIE["adminer_key"]?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$gd)),false);page_footer("auth");exit;}$f=connect();}if(is_string($f)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$i=new
Min_Driver($f);if($ra&&$_POST["token"])$_POST["token"]=$je;$k='';if($_POST){if(!verify_token()){$lc="max_input_vars";$Ec=ini_get($lc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$w){$V=ini_get($w);if($V&&(!$Ec||$V<$Ec)){$lc=$w;$Ec=$V;}}}$k=(!$_POST["token"]&&$Ec?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$lc'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$f->select_db($b->database());function
email_header($bc){return"=?UTF-8?B?".base64_encode($bc)."?=";}function
send_mail($ob,$Rd,$A,$Tb="",$Hb=array()){$j=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$A=str_replace("\n",$j,wordwrap(str_replace("\r","","$A\n")));$Ba=uniqid("boundary");$qa="";foreach((array)$Hb["error"]as$w=>$V){if(!$V)$qa.="--$Ba$j"."Content-Type: ".str_replace("\n","",$Hb["type"][$w]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Hb["name"][$w])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Hb["tmp_name"][$w])),76,$j).$j;}$ya="";$cc="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$Ba--$j";$ya="--$Ba$j$cc$j$j";$cc="Content-Type: multipart/mixed; boundary=\"$Ba\"";}$cc.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Tb?$j."From: ".str_replace("\n","",$Tb):"");return
mail($ob,email_header($Rd),$ya.$A.$qa,$cc);}function
like_bool($l){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$l["full_type"]);}$Pc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$ib[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$f->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$xe=(isset($_GET["select"])?$_POST["edit"]:$X);foreach($m
as$C=>$l){if(!isset($l["privileges"][$xe?"update":"insert"])||$b->fieldName($l)=="")unset($m[$C]);}if($_POST&&!$k&&!isset($_GET["select"])){$z=$_POST["referer"];if($_POST["insert"])$z=($xe?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$z))$z=ME."select=".urlencode($a);$t=indexes($a);$se=unique_array($_GET["where"],$t);$pd="\nWHERE $X";if(isset($_POST["delete"]))queries_redirect($z,'Item has been deleted.',$i->delete($a,$pd,!$se));else{$P=array();foreach($m
as$C=>$l){$V=process_input($l);if($V!==false&&$V!==null)$P[idf_escape($C)]=$V;}if($xe){if(!$P)redirect($z);queries_redirect($z,'Item has been updated.',$i->update($a,$P,$pd,!$se));if(is_ajax()){page_headers();page_messages($k);exit;}}else{$J=$i->insert($a,$P);$uc=($J?last_id():0);queries_redirect($z,sprintf('Item%s has been inserted.',($uc?" $uc":"")),$J);}}}$Wd=$b->tableName(table_status1($a,true));page_header(($xe?'Edit':'Insert'),$k,array("select"=>array($a,$Wd)),$Wd);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($X){$N=array();foreach($m
as$C=>$l){if(isset($l["privileges"]["select"])){$oa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$oa="''";if($v=="sql"&&preg_match("~enum|set~",$l["type"]))$oa="1*".idf_escape($C);$N[]=($oa?"$oa AS ":"").idf_escape($C);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$i->select($a,$N,array($X),$N,array(),(isset($_GET["select"])?2:1),0);$L=$J->fetch_assoc();if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$m){if(!$X){$L=reset(get_rows("SELECT * FROM ".table($a)." LIMIT 1"));if(!$L)$L=array("itemName()"=>"");}if($L){foreach($L
as$w=>$V){if(!$X)$L[$w]=null;$m[$w]=array("field"=>$w,"null"=>($w!="itemName()"),"auto_increment"=>($w=="itemName()"));}}}if($L===false)echo"<p class='error'>".'No rows.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$C=>$l){echo"<tr><th>".$b->fieldName($l);$ab=$_GET["set"][bracket_escape($C)];if($ab===null){$ab=$l["default"];if($l["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$ab,$td))$ab=$td[1];}$W=($L!==null?($L[$C]!=""&&$v=="sql"&&preg_match("~enum|set~",$l["type"])?(is_array($L[$C])?array_sum($L[$C]):+$L[$C]):$L[$C]):(!$xe&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$ab)));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$C]:($xe&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if(preg_match("~time~",$l["type"])&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' value='".h($_POST["field_keys"][0])."'>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array()),$_POST["field_funs"][0])."<td><input name='field_vals[]' value='".h($_POST["field_vals"][0])."'>"."\n";echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($xe?'Save and continue edit'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($xe?"<input type='submit' name='delete' value='".'Delete'."'".confirm().">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$je,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$t=indexes($a);$m=fields($a);$Pb=column_foreign_keys($a);$Oc="";if($S["Oid"]){$Oc=($v=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Oc));}parse_str($_COOKIE["adminer_import"],$ia);$zd=array();$e=array();$ae=null;foreach($m
as$w=>$l){$C=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$C!=""){$e[$w]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($l))$ae=$b->selectLengthProcess();}$zd+=$l["privileges"];}list($N,$p)=$b->selectColumnsProcess($e,$t);$u=count($p)<count($N);$X=$b->selectSearchProcess($m,$t);$E=$b->selectOrderProcess($m,$t);$x=$b->selectLimitProcess();$Tb=($N?implode(", ",$N):"*".($Oc?", $Oc":"")).convert_fields($e,$m,$N)."\nFROM ".table($a);$Wb=($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$te=>$L){$oa=convert_field($m[key($L)]);echo$f->result("SELECT".limit($oa?$oa:idf_escape(key($L))." FROM ".table($a)," WHERE ".where_check($te,$m).($X?" AND ".implode(" AND ",$X):"").($E?" ORDER BY ".implode(", ",$E):""),1));}exit;}if($_POST&&!$k){$Ge=$X;if(!$_POST["all"]&&is_array($_POST["check"]))$Ge[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Ge=($Ge?"\nWHERE ".implode(" AND ",$Ge):"");$id=$ve=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$id=array_flip($s["columns"]);$ve=($N?$id:array());break;}}foreach((array)$ve
as$w=>$V){if(in_array(idf_escape($w),$N))unset($ve[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ve===array())$I="SELECT $Tb$Ge$Wb";else{$re=array();foreach($_POST["check"]as$V)$re[]="(SELECT".limit($Tb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m).$Wb,1).")";$I=implode(" UNION ALL ",$re);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($X,$Pb)){if($_POST["save"]||$_POST["delete"]){$J=true;$ja=0;$P=array();if(!$_POST["delete"]){foreach($e
as$C=>$V){$V=process_input($m[$C]);if($V!==null&&($_POST["clone"]||$V!==false))$P[idf_escape($C)]=($V!==false?$V:idf_escape($C));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($ve===array()&&is_array($_POST["check"]))||$u){$J=($_POST["delete"]?$i->delete($a,$Ge):($_POST["clone"]?queries("INSERT $I$Ge"):$i->update($a,$P,$Ge)));$ja=$f->affected_rows;}else{foreach((array)$_POST["check"]as$V){$Fe="\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m);$J=($_POST["delete"]?$i->delete($a,$Fe,1):($_POST["clone"]?queries("INSERT".limit1($I,$Fe)):$i->update($a,$P,$Fe)));if(!$J)break;$ja+=$f->affected_rows;}}}$A=lang(array('%d item has been affected.','%d items have been affected.'),$ja);if($_POST["clone"]&&$J&&$ja==1){$uc=last_id();if($uc)$A=sprintf('Item%s has been inserted.'," $uc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$A,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+click on a value to modify it.';else{$J=true;$ja=0;foreach($_POST["val"]as$te=>$L){$P=array();foreach($L
as$w=>$V){$w=bracket_escape($w,1);$P[idf_escape($w)]=(preg_match('~char|text~',$m[$w]["type"])||$V!=""?$b->processInput($m[$w],$V):"NULL");}$J=$i->update($a,$P," WHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($te,$m),!($u||$ve===array())," ");if(!$J)break;$ja+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ja),$J);}}elseif(!is_string($Fb=get_file("csv_file",true)))$k=upload_error($Fb);elseif(!preg_match('~~u',$Fb))$k='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($ia["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Ma=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fb,$Ac);$ja=count($Ac[0]);$i->begin();$Fd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($Ac[0]as$w=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$Fd]*)$Fd~",$V.$Fd,$Bc);if(!$w&&!array_diff($Bc[1],$Ma)){$Ma=$Bc[1];$ja--;}else{$P=array();foreach($Bc[1]as$q=>$Ja)$P[idf_escape($Ma[$q])]=($Ja==""&&$m[$Ma[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$M[]=$P;}}$J=(!$M||$i->insertUpdate($a,$M,$id));if($J)$i->commit();queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ja),$J);$i->rollback();}}}$Wd=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('Select'.": $Wd",$k);$P=null;if(isset($zd["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$V){if(count($Pb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!preg_match('~[_%]~',$V["val"]))))$P.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$P);if(!$e&&support("table"))echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$e);$b->selectSearchPrint($X,$e,$t);$b->selectOrderPrint($E,$e,$t);$b->selectLimitPrint($x);$b->selectLengthPrint($ae);$b->selectActionPrint($t);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$n=$f->result(count_rows($a,$X,$u,$p));$F=floor(max(0,$n-1)/$x);}$Cd=$N;if(!$Cd){$Cd[]="*";if($Oc)$Cd[]=$Oc;}$Sa=convert_fields($e,$m,$N);if($Sa)$Cd[]=substr($Sa,2);$J=$i->select($a,$Cd,$X,$p,$E,$x,$F);if(!$J)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$F)$J->seek($x*$F);$qb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$v=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql")$n=$f->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".'No rows.'."\n";else{$xa=$b->backwardKeys($a,$Wd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$p&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Kc=array();$Vb=array();reset($N);$rd=1;foreach($M[0]as$w=>$V){if($w!=$Oc){$V=$_GET["columns"][key($N)];$l=$m[$N?($V?$V["col"]:current($N)):$w];$C=($l?$b->fieldName($l,$rd):($V["fun"]?"*":$w));if($C!=""){$rd++;$Kc[$w]=$C;$d=idf_escape($w);$fc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$bb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($fc.($E[0]==$d||$E[0]==$w||(!$E&&$u&&$p[0]==$d)?$bb:'')).'">';echo
apply_sql_function($V["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($fc.$bb)."' title='".'descending'."' class='text'> ↓</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Vb[$w]=$V["fun"];next($N);}}$xc=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$w=>$V)$xc[$w]=max($xc[$w],min(40,strlen(utf8_decode($V))));}}echo($xa?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($x%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$Pb)as$B=>$L){$se=unique_array($M[$B],$t);if(!$se){$se=array();foreach($M[$B]as$w=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$se[$w]=$V;}}$te="";foreach($se
as$w=>$V){if(strlen($V)>64&&($v=="sql"||$v=="pgsql")){$w="MD5(".(strpos($w,'(')?$w:idf_escape($w)).")";$V=md5($V);}$te.="&".($V!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($V):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$p&&$N?"":"<td>".checkbox("check[]",substr($te,1),in_array(substr($te,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($u||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$te)."'>".'edit'."</a>"));foreach($L
as$w=>$V){if(isset($Kc[$w])){$l=$m[$w];if($V!=""&&(!isset($qb[$w])||$qb[$w]!=""))$qb[$w]=(is_mail($V)?$Kc[$w]:"");$y="";if(preg_match('~blob|bytea|raw|file~',$l["type"])&&$V!="")$y=ME.'download='.urlencode($a).'&field='.urlencode($w).$te;if(!$y){foreach((array)$Pb[$w]as$Ob){if(count($Pb[$w])==1||end($Ob["source"])==$w){$y="";foreach($Ob["source"]as$q=>$Kd)$y.=where_link($q,$Ob["target"][$q],$M[$B][$Kd]);$y=($Ob["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Ob["db"]),ME):ME).'select='.urlencode($Ob["table"]).$y;if(count($Ob["source"])==1)break;}}}if($w=="COUNT(*)"){$y=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$se))$y.=where_link($q++,$U["col"],$U["val"],$U["op"]);}foreach($se
as$oc=>$U)$y.=where_link($q++,$oc,$U);}$V=select_value($V,$y,$l,$ae);$r=h("val[$te][".bracket_escape($w)."]");$W=$_POST["val"][$te][bracket_escape($w)];$mb=!is_array($L[$w])&&is_utf8($V)&&$M[$B][$w]==$L[$w]&&!$Vb[$w];$Zd=preg_match('~text|lob~',$l["type"]);if(($_GET["modify"]&&$mb)||$W!==null){$Yb=h($W!==null?$W:$L[$w]);echo"<td>".($Zd?"<textarea name='$r' cols='30' rows='".(substr_count($L[$w],"\n")+1)."'>$Yb</textarea>":"<input name='$r' value='$Yb' size='$xc[$w]'>");}else{$_c=strpos($V,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($_c?2:($Zd?1:0)).($mb?"":", '".h('Use edit link to modify this value.')."'").");\">$V";}}}if($xa)echo"<td>";$b->backwardKeysPrint($xa,$M[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$yb=true;if($_GET["page"]!="last"){if(!+$x)$n=count($M);elseif($v!="sql"||!$u){$n=($u?false:found_rows($S,$X));if($n<max(1e4,2*($F+1)*$x))$n=reset(slow_query(count_rows($a,$X,$u,$p)));else$yb=false;}}if(+$x&&($n===false||$n>$x||$F)){echo"<p class='pages'>";$Cc=($n===false?$F+(count($M)>=$x?2:1):floor(($n-1)/$x));if(support("table")){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($F+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$F).($F>5?" ...":"");for($q=max(1,$F-4);$q<min($Cc,$F+5);$q++)echo
pagination($q,$F);if($Cc>0){echo($F+5<$Cc?" ...":""),($yb&&$n!==false?pagination($Cc,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Cc'>".'last'."</a>");}echo(($n===false?count($M)+1:$n-$F*$x)>$x?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$x).', \''.'Loading'.'...\');">'.'Load more data'.'</a>':'');}else{echo'Page'.":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($Cc>$F?pagination($F+1,$F).($Cc>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($n!==false?"(".($yb?"":"~ ").lang(array('%d row','%d rows'),$n).") ":"");$gb=($yb?"":"~ ").$n;echo
checkbox("all",1,0,'whole result',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$gb' : checked); selectCount('selected2', this.checked || !checked ? '$gb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete"',confirm(),'>
</div></fieldset>
';}$Qb=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Qb['sql']);break;}}if($Qb){print_fieldset("export",'Export'." <span id='selected2'></span>");$Xc=$b->dumpOutput();echo($Xc?html_select("output",$Xc,$ia["output"])." ":""),html_select("format",$Qb,$ia["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$p&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ia["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($qb,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$je'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$f->query("KILL ".(+$_POST["kill"]));elseif(list($R,$r,$C)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$x=11;$J=$f->query("SELECT $r, $C FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$r = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $x");for($q=1;($L=$J->fetch_row())&&$q<$x;$q++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$R=>$L){$C=$b->tableName($L);if(isset($L["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$C</a>";$V=number_format($L["Rows"],0,'.',',');echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();