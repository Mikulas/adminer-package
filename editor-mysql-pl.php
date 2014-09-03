<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.3
*/error_reporting(6135);$Ib=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Ib||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$we=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($we)$$W=$we;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0�\0\n @\0�C��\"\0`E�Q����?�tvM'�Jd�d\\�b0\0�\"��fӈ��s5����A�XPaJ�0���8�#R�T��z`�#.��c�X��Ȁ?�-\0�Im?�.�M��\0ȯ(̉��/(%�\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé�vt2���!�r0���t~�U�'3M��W�B�'c�P�:6T\rc�A�zr_�WK�\r-�VNFS%~�c���&�\\^�r����u�ŎÞ�ً4'7k����Q��h�'g\rFB\ryT7SS�P�1=ǤcI��:�d��m>�S8L�J��t.M���	ϋ`'C����889�� �Q����2�#8А����6m����j��h�<�����9/��:�J�)ʂ�\0d>!\0Z��v�n��o(���k�7��s��>��!�R\"*nS�\0@P\"��(�#[���@g�o���zn�9k�8�n���1�I*��=�n������0�c(�;�à��!���*c��>Ύ�E7D�LJ��1�J=���1L��?�s=#`�3\$4���uȱ��zG�C YAt�?;�Q�k&��YP�u��ǯ}UaHV%G;�s��<A\0\\��P�\\��&ª�V��\n�SU�t���r���2�	l^�Z6�ej����A�d�[�sն�JP����ҝ��8�=����6#˂74*���#e���!�7{�6��<o�C�9v[�M��-`��k�>�l�ڴ��I��H�3�x����w0t6��%MR%��jh�B�<�\0�AQ<P<:��u/�;\\>��-��ʈ��QH\nv�L+v�æ�<�\r��v����\\*����Ӵݢg��n˩��TЩ2P�\r��ߋ\"+z�8���:#�����2��J[�i����;z�����r�3#�ى�:�n�\r㽃e�pdݍ� �2c��4�k���\rG��E6_����މb��/��HB%�0�>���hoW�nxl֍�浃CQ^�������\r����4lK{�Z��:���Ã�.�p��Ă�J�B-�+B���(�T�%��J�0�l�T�`+�-��@B��ۄV��\0��C�,�0t���F���?Ġ�\na@Ɍ>��ZEC��O�-���^Q�&���)I)�����R�]\r��9�7_��\r�F80�Ob�	���>���\nR�_��8��٫�ov0�bCA�F!�t��ă%0�/�zAYO(4������	'�] I��8hH�05�3�@x&n��|T���)`�.�s6eY�D�z�����Jѓ��.��{GEb��Ӌ����2��{\$**��@�C��-:zYHZI��5F]��Y��C�O�A����`x'�.*9t'{�(�wP����=�*���*�xwr��*c���c|�D���V��\r�V.�0���V�d�?Ҁ��,E͝`T��6ۈ-����ڎT[ѐ�z��.Ar��̀P��n�c=a�9F�n�!�u��A���0iP��J6e�T]V�[\rX��a��v�k�\n+E���ܕ*\0�~���@g\"�NCI\$��Ɍ���x@W�y�*vuD�8�=뭪-v��4�d�D�yI�Ҥ���_h��'z�VͶ�����6��Yz�:�Qc��ڲ���w��0��]xr�!�@��/-�*�5���I.�]�Yxu���o&�:P�|Cyֲw����@L��գGf؆��)^��Ƣ+��Q5����L4\$Mpo�0i�\rۻ�k��4*w7��S'��Z݄nAb�!�1�)�oݖ9�c\0b��o-~2w4X,,��8m'�����Y��FH��3GqQZ-l�\0��w�e�d5������i�.���d�)\\�h~\\Ẁ�Lá���mg�u�2lb���Z�C�-6�ꍖd�l��b\re�Mu��gra6ZD���Uʙ!K-��0�9�beH�\"��[J˝'���Z��o�a�)�X�ƃ&��t�8��GZ.��ژ��+�lr���̯]k�#��j-����W��P,���>@�` \rc3\"\\Ҋq2�z���@M�po���0p���d~OٙǦ����]��a��;Ix��xh�a�͇�0N���~g��?	��L�cu��w��}���t��<���Ïŷ�qS�v��@�gsW}�L�(kyȹ/6�C�8\r���]\\��LU��^�nqiQ�n�T>A�9\"���kF����.*�߹����T���C��r?:�܄�w�M�,�\$m|�x�m�������Bmu	��=�[�� yn�'��h����@��C�v�S2dSV� �(��\">H�{�-G��");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n0��S��a9��S`�����&�(��n0���QI�(.��q���O)��̢㑔�1�E#)��x8\n���\\9�D⹄�d+���g�%(R,�BqH�' �G�q.�,2�������A�GCy��#L�S���\n�L���8n:��S�G�:�\$�%��;��)�ؙ�Q��G�sE������)�Nn�MN�S��@t9L��|1���L�Ti3���C	�{�������w0�@�wә�����Ϋ��w{��J8\\C(��ɨ�Z�j9�a[�� -��;!�H�<��`�߅(䚱	+�Ḫ�2\r�K�9�@����`�����PP�0L#��#j���+ �Eɒ���p�9a���;m�\\8Cz�����^��]\rð�\\7�C8_D�p^�P��\0̱�w &c4^�R�N9D�\\ܙ�j�3��@��\r8a;M�l7��d<3�cp�Г��:)\\;�C��ц��!6HT�,4O�=ц!pd�T��Ss;�c}&&����ń�5cY��p�1`�I��bKPRt�f2X黛F��-!\r��icY���WL\\Pޮ#r'b�]^2����C��1�(4�&��D�*J��<�]�:��/�T�:tܿ7��PaH^?�(�sƁs�0��PQ��0�����?�*��\r�b.�.�����2�fO|f�<�k2L��07��8��!��c+6fW#~<I+!-�Q���H��:�!\"���2	5����M�m�1+���-�f᳇���8\\����n�F�<���څ�ʁ����\r#ꅎav�����>�2�1�N(��<�����X�t����c���:��������'���Wڌ�RE8�ر�p@��ܠ���5�Ѩ��(8/ѧb3�~\"J;��)^�=�d�v��J�����'\r�:�öȧ[ �ƘŃY�v�������Y���CL�(7a��Ί	z�a�����g�2\\\r�����B�%Q �.�HA�I	\r��-�%�|/�����jE�L;���=���o /L�h��C��� :��e�b����TZ�Z�eA�U�NA@/�� {np�P^��e+�p�\"�\n����@����|���i��%���\r<�~oԙ�drd��{��d&�4�P�\$�Č7u4��[`��T�yj߃K�c��臖�C�uHvP,�<����\$\$�20���'fLͩ(L_�B}���@3\0c�%�LQ����������++%ph�ɏM�f��:��{�s>�ܹ%jL�3� ;�|��f�Eu��ږ�\0f�\$r\rHS%Ѥ�2l�*4�������?<g��%��+�Y:)Q�=r��m3��єFj\r�Ӕ:R*HG)0r�)rQ�PԝCP<7�V���,I-�I����1�Rm04��]ZQt��:��'���U T0�M�!�K�!�ȳ�A��xf���P�C�آdk�v����Tނ�TY;g:\r������U'R����U��^k_U�ڟ):>�t����Y�:��d�1�����'!�\0��hE��kB�Fg]2U�oV�)����n��BucĕC��2�|6��R�cT�J�N�Hs{���)�l����%b����%�|uN���\0IԣI&�� ��-�Wܹ���l;�\r��cC��3�G�Bۊ�}j�M42c�\\�KėH��A\r���`�lw��шa��M�D�X)�t\"tDb��������g���z�3��iC0t	a�<��Pr���g8�G=�'��{���B��8����pn�����6H��~�d�-�I�4��+��e�Y��4C�R�u�{[Wg���R�E��oCӱy�v�g��L�����O�:n>M�2ՙK�[��̵4I�e=�h\"�\$����7�emH7&홳2(x�ޡo�jeb��V�\n+W��`救-\n���Ƿe���֓�^��F�@���>�M	����À;R��^��g�@�|�J���q�\n\n�4�Xf���N�ؼc��(uaMȨ�v�Hs�a�������@�4P�:	̭y�,r4�GI*����C0+a�'	��	�J�*�2��TZ�b�^��up��:4D��ÇP����K������!����x	�����a6L��4R	�`:���R\n�d4�����D�y�Ȧ�05�*�g%�D�8w4a�c�U�ܷ3#����rN�T�o���ц&���rn�+�\n+I�F�d`��^&��v(���qZsL���cY�̧G�ƿ[��4X�}�Z��~��M>�j�y\0z�	���Γ�Nn\n�J�ԋT�૊`�BK���\$�Kh��p'@^`�����h�`^+\0H�b-�*��m#N��X����O�����\n��I?\0�E�J�p��b��,F����\07�?0G��J�r��-d�z4a����@�Pʒ��i%d�\0P�\$��໢�a,�%f\\���L]�8(�4�D fs.������bV ��e6�o��p�o�j��D�\r4a.NlOOW�\"�\n�Ɔ����.>jd�0��	��<Gf,�p�O\r�C�K0�1w�RMp{�x���^�b\r�Ķ��kq	�1���%�O�`+Ѭ�2-j\"�q.k�:\r\0P�+�F#�*>��\n(Oʊ@[�6-�2���RXZ\0���\0*GBt��WrmR�1�\r �0R\$�mb}G� m����\0�n�nbu#QL�r:#D�-�����f�cE!��SBK\$�d�M\$��&C�\"R7%��o�g2�β:��d\"P�{K�7�G��\"Q*���#�k��%ځ���\"����R�y�j?e���\r+2H`�\0\0�,@���0���\$q��2�L�Ⱦ'��Mc-����@�\n����\\�3�1S1�V{��-�r��/*���`��G�{#%02>��1�4�\r6��1\"D6��c��.��2S	)Hw7���v�m���s8�F�)�䬗9�B0��p��6�Nۋ������̕DY7.���4\rb�3<R�]\0S-����͏9�#0\n�I��Z�_0����:��<�N�D�@�R�\n��#��zq%8I\r9ǫ0�F�`Y�*����/+���D͑4@h�13S f)��4CS�n�j��S�H�Z,c�unh\$E5`N��i�����C9�H&t�o�~��t���5�\"����:%��KT�K��?� �T���`a2:���� ��d�Ԭ��*!Nڃ4撔꒔�DB\r@)\rO���S��k�;s8]e���>���C<4H�L��4<@䘧�]\0�.��0�\"f�;#n�r��oĕ�tn	��F������hH0�	���p���K�FkUl�IxK��\n�}-�mM����]��Z	~����{Y��	��&�\r\\�d�\\�\\�L��bj\r����q��/�])�SP�׳�4l�s�E�_Z��Z-x��`��Z2.�u�\\U��\0|D�15�\\��\\��[!c	^feH\r��!�l=R���do�V��c�4X�v7L'e�*���r�hgO@�Jr��e��f���o^�' �E�T>{O�Vc��������:�����������z����\0��+Q!q����!���}T6-��vV��B�h��\rF�ƐڻJR��~�4*sr� �\\`P6�*^�P�\rc�;f8�Bj#tRf�%h���ys\n~�;<	�At@�t�l tV<X\0�7�\0�@�k�Lwwj �ow7v b�	��I���u.\n��+�u;i��7/s&�z�~ob>q&6,`�	�\n����|B�q�<6m�[zևtw�O�6!���#F�[[E��搆�������Z��[q�>8#N����{(�~\n~D�(@��\$Y\0��7_B�y�u�\\����hjF��Rc�a/��K'e�_{&&�].�N=4XB�er��GXfxK}��VW�r�d��}p���h����k�qq�j�x|�X|T#��I�cb\\nB�xX�?�S��3*���Y�Z ������P�rgjp��=)������D�D��n�/�'8�r�zg\n��\0��H�O��Եk&�����\"����8}NZ,.\0c�_X+��^\r1�z���Bt��6r�RL�U�C�d\"��,\0�E�\r��:	���\$g���b�\r�|���4��8ӂf6Is+���\n@�� ی�hz��*�))�9�\r��Z��4�610+�H�Ւ|�DYk\$��۸��`�\r�<(@MC�(��쇒�\0��4�E��@|ees�*\0x��o�q�L�p�\\�c��r���)+@�~�������@��\\P�+��,dr����Ŋx�qs݊�_�8顅��� ��W8�<X�}792��\$����PT���}J;	2�ڤ\\G;lq�\0��+�:�x�c����<�gi1�X��\rͤ�S�Gr�>WF��F��5��(,q@m6s2��#@r���F=��k���\$uFV\n�L�/��C��j�\0��@��S�s(�)�@��frq�gdjF�.H%1���s5I��[ɐ ���\\�@����`{�n�Rt�E`z@o��+>�뼆3,�}G��`�n`�\r �-d���� ����{|!(�dX�8�c\$_V���#�Fn['\$�t��3�l~�1'�D?�[�1/�&e0��7\\E4O7�h�F�L�\0b�XQ*\0��1���D\0<\$�q(��ď\n�tb�c������nCF��\0`\$O�1|��0vyg;m�o'��c�����/�-���&�IDm%�\nR�p��O5�\n���d=0���#=�eF���\\1`el<��Sø;�\n�e΄���H\$2��(��e���8�(VDQ����2��W��۲{e���v�iP�؀v�VR\ns�䠑�E\0�.����SzU�4@e�睐�I����*y�4�ݜ�͞}\\/y�\\x���'�]���j6`�W����<m��{n]Ӫ��u|;W���h�حgnP�ެ��	xn��F��m޾ �C����Z���˛/��̑1͛���h�V�\$�B(XXE��@X�yY8ns���n���\r�7�jQI���C{<�J\$c��_��/����o��7�堕�b��J���^6�r6�(N�y�p6ݘ�ڙ�ڝ<�øc�ͤp��M<\"�������;�l=ǆ�Ս9�6ǭ�OoF�֖��G�7����r:B�8�x侮��C\r�AٯN(��n�ǰ��K�����ΪX�W�G9��鿎6 ��\$}�i���uN\r�SD��R�P\n��.�T�����Wn�9N*\$���Br\r���B��F�ܱ-�\0��S��}}���L�J�`�=��&@b����2]�8�V����6ʤ����~��m��S::��o�3X�6�O�ܐEI�Q����װu�zlC/\0��%0@��̢��L�\n�X3�ń.��+���	j�\$�x[�g�-B����վ!�&�9�^���\r�\0f&]��|`�@E:K4_LƼ@��8%C[�V\r��P��p==�����:���0̀���Ig�M����:\n�G�;	�Ws��X�RaLD`��5}1���T���A��3h2#���F�?��i�d��Ђ�GV A�F�BJ�U��`@\r?ʚx��f�V��Ii%�Ǒ�8��!�b����b���;�Ŕp]���@D,�\rS�B�!�5U`̓�ǡ4\r4�	��c*и}�5��e��D�>���W�%��.��Z�%N^�C�d�p�N�w�!\08	��\0�~vJv��6\0ɯg�?R��B ��� ��8�����y�Nzl�E�\0i0�p}	TfĄ�c6Dy�@y6H����\n����1�	Rr������B�9���x�b��g���ha�Ni�Z~�8��17=`��L- <�P:UY�a����%V���\"V�	ĭ@{��� �7~ĭI�19�S�!����mI\\c��w��:��@J!\0<XP+�)�`@�081q�½�(rE�DE���JR���^�c��1zw��\"���ʒ�)���C⢅��3�H�c�hk0���ѮJK\"�V�Ũ&�O9�hbp� ӳ}���v���:th��j(�G��P�b��Y� �c3&�");}elseif($_GET["file"]=="jush.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress(compile_file('','minify_js'));}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0!�����M��*)�o��) q��e���#��L�\0;";break;case"cross.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\0\0;";break;case"up.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����MQN\n�}��a8�y�aŶ�\0��\0;";break;case"down.gif":echo"GIF89a\0\0�\0001���\0\0����\0\0\0!�\0\0\0,\0\0\0\0\0\0 �����M��*)�[W�\\��L&ٜƶ�\0��\0;";break;case"arrow.gif":echo"GIF89a\0\n\0�\0\0������!�\0\0\0,\0\0\0\0\0\n\0\0�i������Ӳ޻\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($ic){$uc=substr($ic,-1);return
str_replace($uc.$uc,$uc,substr($ic,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($md,$Ib=false){if(get_magic_quotes_gpc()){while(list($w,$W)=each($md)){foreach($W
as$pc=>$V){unset($md[$w][$pc]);if(is_array($V)){$md[$w][stripslashes($pc)]=$V;$md[]=&$md[$w][stripslashes($pc)];}else$md[$w][stripslashes($pc)]=($Ib?$V:stripslashes($V));}}}}function
bracket_escape($ic,$ua=false){static$me=array(':'=>':1',']'=>':2','['=>':3');return
strtr($ic,($ua?array_flip($me):$me));}function
h($R){return
htmlspecialchars(str_replace("\0","",$R),ENT_QUOTES);}function
nbsp($R){return(trim($R)!=""?h($R):"&nbsp;");}function
nl_br($R){return
str_replace("\n","<br>",$R);}function
checkbox($C,$X,$Ea,$sc="",$Sc="",$Ga=""){$L="<input type='checkbox' name='$C' value='".h($X)."'".($Ea?" checked":"").($Sc?' onclick="'.h($Sc).'"':'').">";return($sc!=""||$Ga?"<label".($Ga?" class='$Ga'":"").">$L".h($sc)."</label>":$L);}function
optionlist($D,$Fd=null,$Ae=false){$L="";foreach($D
as$pc=>$V){$Wc=array($pc=>$V);if(is_array($V)){$L.='<optgroup label="'.h($pc).'">';$Wc=$V;}foreach($Wc
as$w=>$W)$L.='<option'.($Ae||is_string($w)?' value="'.h($w).'"':'').(($Ae||is_string($w)?(string)$w:$W)===$Fd?' selected':'').'>'.h($W);if(is_array($V))$L.='</optgroup>';}return$L;}function
html_select($C,$D,$X="",$Rc=true){if($Rc)return"<select name='".h($C)."'".(is_string($Rc)?' onchange="'.h($Rc).'"':"").">".optionlist($D,$X)."</select>";$L="";foreach($D
as$w=>$W)$L.="<label><input type='radio' name='".h($C)."' value='".h($w)."'".($w==$X?" checked":"").">".h($W)."</label>";return$L;}function
select_input($c,$D,$X="",$ed=""){return($D?"<select$c><option value=''>$ed".optionlist($D,$X,true)."</select>":"<input$c size='10' value='".h($X)."' placeholder='$ed'>");}function
confirm(){return" onclick=\"return confirm('".'Czy jesteś pewien?'."');\"";}function
print_fieldset($r,$wc,$Fe=false,$Sc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Sc)."return !toggle('fieldset-$r');\">$wc</a></legend><div id='fieldset-$r'".($Fe?"":" class='hidden'").">\n";}function
bold($Aa,$Ga=""){return($Aa?" class='active $Ga'":($Ga?" class='$Ga'":""));}function
odd($L=' class="odd"'){static$q=0;if(!$L)$q=-1;return($q++%2?$L:'');}function
js_escape($R){return
addcslashes($R,"\r\n'\\/");}function
json_row($w,$W=null){static$Jb=true;if($Jb)echo"{";if($w!=""){echo($Jb?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\/").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\/").'"':'undefined');$Jb=false;}else{echo"\n}\n";$Jb=true;}}function
ini_bool($mc){$W=ini_get($mc);return(preg_match('~^(on|true|yes)$~i',$W)||(int)$W);}function
sid(){static$L;if($L===null)$L=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$L;}function
q($R){global$i;return$i->quote($R);}function
get_vals($J,$d=0){global$f;$L=array();$K=$f->query($J);if(is_object($K)){while($M=$K->fetch_row())$L[]=$M[$d];}return$L;}function
get_key_vals($J,$g=null,$fe=0){global$f;if(!is_object($g))$g=$f;$L=array();$g->timeout=$fe;$K=$g->query($J);$g->timeout=0;if(is_object($K)){while($M=$K->fetch_row())$L[$M[0]]=$M[1];}return$L;}function
get_rows($J,$g=null,$k="<p class='error'>"){global$f;$Qa=(is_object($g)?$g:$f);$L=array();$K=$Qa->query($J);if(is_object($K)){while($M=$K->fetch_assoc())$L[]=$M;}elseif(!$K&&!is_object($g)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$L;}function
unique_array($M,$t){foreach($t
as$s){if(preg_match("~PRIMARY|UNIQUE~",$s["type"])){$L=array();foreach($s["columns"]as$w){if(!isset($M[$w]))continue
2;$L[$w]=$M[$w];}return$L;}}}function
where($Y,$m=array()){global$v;$L=array();$Ub='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Y["where"]as$w=>$W){$w=bracket_escape($w,1);$d=(preg_match($Ub,$w)?$w:idf_escape($w));$L[]=$d.(($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$W))||$v=="mssql"?" LIKE ".q(addcslashes($W,"%_\\")):" = ".unconvert_field($m[$w],q($W)));if($v=="sql"&&preg_match("~[^ -@]~",$W))$L[]="$d = ".q($W)." COLLATE utf8_bin";}foreach((array)$Y["null"]as$w)$L[]=(preg_match($Ub,$w)?$w:idf_escape($w))." IS NULL";return
implode(" AND ",$L);}function
where_check($W,$m=array()){parse_str($W,$Da);remove_slashes(array(&$Da));return
where($Da,$m);}function
where_link($q,$d,$X,$Uc="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($d)."&where%5B$q%5D%5Bop%5D=".urlencode(($X!==null?$Uc:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($X);}function
convert_fields($e,$m,$O=array()){$L="";foreach($e
as$w=>$W){if($O&&!in_array(idf_escape($w),$O))continue;$oa=convert_field($m[$w]);if($oa)$L.=", $oa AS ".idf_escape($w);}return$L;}function
cookie($C,$X,$zc=2592000){global$aa;$bd=array($C,(preg_match("~\n~",$X)?"":$X),($zc?time()+$zc:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$bd[]=true;return
call_user_func_array('setcookie',$bd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$W){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($Ce,$P,$U,$h=null){global$ib;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ib))."|username|".($h!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($Ce!="server"||$P!=""?urlencode($Ce)."=".urlencode($P)."&":"")."username=".urlencode($U).($h!=""?"&db=".urlencode($h):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($z,$A=null){if($A!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($z!==null?$z:$_SERVER["REQUEST_URI"]))][]=$A;}if($z!==null){if($z=="")$z=".";header("Location: $z");exit;}}function
query_redirect($J,$z,$A,$ud=true,$_b=true,$Cb=false){global$f,$k,$b;$ee="";if($_b){$Od=microtime(true);$Cb=!$f->query($J);$ee="; -- ".format_time($Od,microtime(true));}$Nd="";if($J)$Nd=$b->messageQuery($J.$ee);if($Cb){$k=error().$Nd;return
false;}if($ud)redirect($z,$A.$Nd);return
true;}function
queries($J=null){global$f;static$pd=array();if($J===null)return
implode("\n",$pd);$Od=microtime(true);$L=$f->query($J);$pd[]=(preg_match('~;$~',$J)?"DELIMITER ;;\n$J;\nDELIMITER ":$J)."; -- ".format_time($Od,microtime(true));return$L;}function
apply_queries($J,$Zd,$wb='table'){foreach($Zd
as$S){if(!queries("$J ".$wb($S)))return
false;}return
true;}function
queries_redirect($z,$A,$ud){return
query_redirect(queries(),$z,$A,$ud,false,!$ud);}function
format_time($Od,$sb){return
sprintf('%.3f s',max(0,$sb-$Od));}function
remove_from_uri($ad=""){return
substr(preg_replace("~(?<=[?&])($ad".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($G,$Wa){return" ".($G==$Wa?$G+1:'<a href="'.h(remove_from_uri("page").($G?"&page=$G".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($G+1)."</a>");}function
get_file($w,$Za=false){$Fb=$_FILES[$w];if(!$Fb)return
null;foreach($Fb
as$w=>$W)$Fb[$w]=(array)$W;$L='';foreach($Fb["error"]as$w=>$k){if($k)return$k;$C=$Fb["name"][$w];$ke=$Fb["tmp_name"][$w];$Ra=file_get_contents($Za&&preg_match('~\\.gz$~',$C)?"compress.zlib://$ke":$ke);if($Za){$Od=substr($Ra,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Od,$vd))$Ra=iconv("utf-16","utf-8",$Ra);elseif($Od=="\xEF\xBB\xBF")$Ra=substr($Ra,3);$L.=$Ra."\n\n";}else$L.=$Ra;}return$L;}function
upload_error($k){$Ec=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Wgranie pliku było niemożliwe.'.($Ec?" ".sprintf('Maksymalna wielkość pliku to %sB.',$Ec):""):'Plik nie istnieje.');}function
repeat_pattern($I,$xc){return
str_repeat("$I{0,65535}",$xc/65535)."$I{0,".($xc%65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($R,$xc=80,$Ud=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$xc).")($)?)u",$R,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xc).")($)?)",$R,$_);return
h($_[1]).$Ud.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($md,$kc=array()){while(list($w,$W)=each($md)){if(is_array($W)){foreach($W
as$pc=>$V)$md[$w."[$pc]"]=$V;}elseif(!in_array($w,$kc))echo'<input type="hidden" name="'.h($w).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($S,$Db=false){$L=table_status($S,$Db);return($L?$L:array("Name"=>$S));}function
column_foreign_keys($S){global$b;$L=array();foreach($b->foreignKeys($S)as$Ob){foreach($Ob["source"]as$W)$L[$W][]=$Ob;}return$L;}function
enum_input($pe,$c,$l,$X,$rb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Bc);$L=($rb!==null?"<label><input type='$pe'$c value='$rb'".((is_array($X)?in_array($rb,$X):$X===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($Bc[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ea=(is_int($X)?$X==$q+1:(is_array($X)?in_array($q+1,$X):$X===$W));$L.=" <label><input type='$pe'$c value='".($q+1)."'".($Ea?' checked':'').'>'.h($b->editVal($W,$l)).'</label>';}return$L;}function
input($l,$X,$o){global$f,$re,$b,$v;$C=h(bracket_escape($l["field"]));echo"<td class='function'>";if(is_array($X)&&!$o){$na=array($X);if(version_compare(PHP_VERSION,5.4)>=0)$na[]=JSON_PRETTY_PRINT;$X=call_user_func_array('json_encode',$na);$o="json";}$yd=($v=="mssql"&&$l["auto_increment"]);if($yd&&!$_POST["save"])$o=null;$Vb=(isset($_GET["select"])||$yd?array("orig"=>'bez zmian'):array())+$b->editFunctions($l);$c=" name='fields[$C]'";if($l["type"]=="enum")echo
nbsp($Vb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$X);else{$Jb=0;foreach($Vb
as$w=>$W){if($w===""||!$W)break;$Jb++;}$Rc=($Jb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Jb > f.selectedIndex) f.selectedIndex = $Jb;\" onkeyup='keyupChange.call(this);'":"");$c.=$Rc;$ac=(in_array($o,$Vb)||isset($Vb[$o]));echo(count($Vb)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Vb,$o===null||$ac?$o:"")."</select>":nbsp(reset($Vb))).'<td>';$oc=$b->editInput($_GET["edit"],$l,$c,$X);if($oc!="")echo$oc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Bc);foreach($Bc[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ea=(is_int($X)?($X>>$q)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$C][$q]' value='".(1<<$q)."'".($Ea?' checked':'')."$Rc>".h($b->editVal($W,$l)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Rc>";elseif(($be=preg_match('~text|lob~',$l["type"]))||preg_match("~\n~",$X)){if($be&&$v!="sqlite")$c.=" cols='50' rows='12'";else{$N=min(12,substr_count($X,"\n")+1);$c.=" cols='30' rows='$N'".($N==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($X).'</textarea>';}elseif($o=="json")echo"<textarea$c cols='50' rows='12' class='jush-js'>".h($X).'</textarea>';else{$Gc=(!preg_match('~int~',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$_)?((preg_match("~binary~",$l["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$l["unsigned"]?1:0)):($re[$l["type"]]?$re[$l["type"]]+($l["unsigned"]?0:1):0));if($v=='sql'&&$f->server_info>=5.6&&preg_match('~time~',$l["type"]))$Gc+=7;echo"<input".((!$ac||$o==="")&&preg_match('~(?<!o)int~',$l["type"])?" type='number'":"")." value='".h($X)."'".($Gc?" maxlength='$Gc'":"").(preg_match('~char|binary~',$l["type"])&&$Gc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$ic=bracket_escape($l["field"]);$o=$_POST["function"][$ic];$X=$_POST["fields"][$ic];if($l["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($l["auto_increment"]&&$X=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")$X=null;if($l["type"]=="set")return
array_sum((array)$X);if($o=="json"){$o="";$X=json_decode($X,true);if(!is_array($X))return
false;return$X;}if(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads")){$Fb=get_file("fields-$ic");if(!is_string($Fb))return
false;return
q($Fb);}return$b->processInput($l,$X,$o);}function
fields_from_edit(){global$i;$L=array();foreach((array)$_POST["field_keys"]as$w=>$W){if($W!=""){$W=bracket_escape($W);$_POST["function"][$W]=$_POST["field_funs"][$w];$_POST["fields"][$W]=$_POST["field_vals"][$w];}}foreach((array)$_POST["fields"]as$w=>$W){$C=bracket_escape($w,1);$L[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1,"auto_increment"=>($w==$i->primary),);}return$L;}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Rb=false;foreach(table_status('',true)as$S=>$T){$C=$b->tableName($T);if(isset($T["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($S,$_POST["tables"]))){$K=$f->query("SELECT".limit("1 FROM ".table($S)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($S),array())),1));if(!$K||$K->fetch_row()){if(!$Rb){echo"<ul>\n";$Rb=true;}echo"<li>".($K?"<a href='".h(ME."select=".urlencode($S)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Rb?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($hc,$Jc=false){global$b;$L=$b->dumpHeaders($hc,$Jc);$Zc=$_POST["output"];if($Zc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($hc).".$L".($Zc!="file"&&!preg_match('~[^0-9a-z]~',$Zc)?".$Zc":""));session_write_close();ob_flush();flush();return$L;}function
dump_csv($M){foreach($M
as$w=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$M[$w]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$M)."\r\n";}function
apply_sql_function($o,$d){return($o?($o=="unixepoch"?"DATETIME($d, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$d)"):$d);}function
password_file($Ta){$fb=ini_get("upload_tmp_dir");if(!$fb){if(function_exists('sys_get_temp_dir'))$fb=sys_get_temp_dir();else{$Gb=@tempnam("","");if(!$Gb)return
false;$fb=dirname($Gb);unlink($Gb);}}$Gb="$fb/adminer.key";$L=@file_get_contents($Gb);if($L||!$Ta)return$L;$Sb=@fopen($Gb,"w");if($Sb){$L=rand_string();fwrite($Sb,$L);fclose($Sb);}return$L;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($W,$y,$l,$ce){global$b,$aa;if(is_array($W)){$L="";foreach($W
as$pc=>$V)$L.="<tr>".($W!=array_values($W)?"<th>".h($pc):"")."<td>".select_value($V,$y,$l,$ce);return"<table cellspacing='0'>$L</table>";}if(!$y)$y=$b->selectLink($W,$l);if($y===null){if(is_mail($W))$y="mailto:$W";if($nd=is_url($W))$y=($nd=="http"&&$aa?$W:"$nd://www.adminer.org/redirect/?url=".urlencode($W));}$L=$b->editVal($W,$l);if($L!==null){if($L==="")$L="&nbsp;";elseif($ce!=""&&is_shortable($l)&&is_utf8($L))$L=shorten_utf8($L,max(0,+$ce));else$L=h($L);}return$b->selectVal($L,$y,$l,$W);}function
is_mail($ob){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$I="$pa+(\\.$pa+)*@($hb?\\.)+$hb";return
is_string($ob)&&preg_match("(^$I(,\\s*$I)*\$)i",$ob);}function
is_url($R){$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($hb?\\.)+$hb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$R,$_)?strtolower($_[1]):"");}function
is_shortable($l){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$l["type"]);}function
count_rows($S,$Y,$u,$p){global$v;$J=" FROM ".table($S).($Y?" WHERE ".implode(" AND ",$Y):"");return($u&&($v=="sql"||count($p)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$p).")$J":"SELECT COUNT(*)".($u?" FROM (SELECT 1$J$Wb) x":$J));}function
slow_query($J){global$b,$le;$h=$b->database();$fe=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($h==""||$g->select_db($h))){$rc=$g->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$le,'&kill=',$rc,'\');
}, ',1000*$fe,');
</script>
';}else$g=null;ob_flush();flush();$L=@get_key_vals($J,$g,$fe);if($g){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($L);}function
get_token(){$sd=rand(1,1e6);return($sd^$_SESSION["token"]).":$sd";}function
verify_token(){list($le,$sd)=explode(":",$_POST["token"]);return($sd^$_SESSION["token"])==$le;}function
lzw_decompress($za){$eb=256;$_a=8;$Ia=array();$zd=0;$_d=0;for($q=0;$q<strlen($za);$q++){$zd=($zd<<8)+ord($za[$q]);$_d+=8;if($_d>=$_a){$_d-=$_a;$Ia[]=$zd>>$_d;$zd&=(1<<$_d)-1;$eb++;if($eb>>$_a)$_a++;}}$db=range("\0","\xFF");$L="";foreach($Ia
as$q=>$Ha){$nb=$db[$Ha];if(!isset($nb))$nb=$Je.$Je[0];$L.=$nb;if($q)$db[]=$Je.$nb[0];$Je=$nb;}return$L;}function
on_help($Na,$Ld=0){return" onmouseover='helpMouseover(this, event, ".h($Na).", $Ld);' onmouseout='helpMouseout(this, event);'";}global$b,$f,$ib,$lb,$ub,$k,$Vb,$Xb,$aa,$nc,$v,$ba,$tc,$Qc,$dd,$Rd,$bc,$le,$oe,$re,$ye,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$bd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$bd[]=true;call_user_func_array('session_set_cookie_params',$bd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ib);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($ne,$Nc=null){if(is_array($ne)){$gd=($Nc==1?0:($Nc%10>1&&$Nc%10<5&&$Nc/10%10!=1?1:2));$ne=$ne[$gd];}$ne=str_replace("%d","%s",$ne);$Nc=number_format($Nc,0,".",' ');return
sprintf($ne,$Nc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$gd=array_search("SQL",$b->operators);if($gd!==false)unset($b->operators[$gd]);}function
dsn($jb,$U,$H){try{parent::__construct($jb,$U,$H);}catch(Exception$xb){auth_error($xb);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($J,$se=false){$K=parent::query($J);$this->error="";if(!$K){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($K);return$K;}function
multi_query($J){return$this->_result=$this->query($J);}function
store_result($K=null){if(!$K){$K=$this->_result;if(!$K)return
false;}if($K->columnCount()){$K->num_rows=$K->rowCount();return$K;}$this->affected_rows=$K->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($J,$l=0){$K=$this->query($J);if(!$K)return
false;$M=$K->fetch();return$M[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$M=(object)$this->getColumnMeta($this->_offset++);$M->orgtable=$M->table;$M->orgname=$M->name;$M->charsetnr=(in_array("blob",(array)$M->flags)?63:0);return$M;}}}$ib=array();class
Min_SQL{var$_conn;function
Min_SQL($f){$this->_conn=$f;}function
quote($X){return($X===null?"NULL":$this->_conn->quote($X));}function
select($S,$O,$Y,$p,$E=array(),$x=1,$G=0,$kd=false){global$b,$v;$u=(count($p)<count($O));$J=$b->selectQueryBuild($O,$Y,$p,$E,$x,$G);if(!$J)$J="SELECT".limit(($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$O)."\nFROM ".table($S),($Y?"\nWHERE ".implode(" AND ",$Y):"").($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):""),($x!=""?+$x:null),($G?$x*$G:0),"\n");if($kd)echo$b->selectQuery($J);return$this->_conn->query($J);}function
delete($S,$qd,$x=0){$J="FROM ".table($S);return
queries("DELETE".($x?limit1($J,$qd):" $J$qd"));}function
update($S,$Q,$qd,$x=0,$Hd="\n"){$Be=array();foreach($Q
as$w=>$W)$Be[]="$w = $W";$J=table($S)." SET$Hd".implode(",$Hd",$Be);return
queries("UPDATE".($x?limit1($J,$qd):" $J$qd"));}function
insert($S,$Q){return
queries("INSERT INTO ".table($S).($Q?" (".implode(", ",array_keys($Q)).")\nVALUES (".implode(", ",$Q).")":" DEFAULT VALUES"));}function
insertUpdate($S,$N,$jd){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$ib=array("server"=>"MySQL")+$ib;if(!defined("DRIVER")){$hd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($P,$U,$H){mysqli_report(MYSQLI_REPORT_OFF);list($fc,$fd)=explode(":",$P,2);$L=@$this->real_connect(($P!=""?$fc:ini_get("mysqli.default_host")),($P.$U!=""?$U:ini_get("mysqli.default_user")),($P.$U.$H!=""?$H:ini_get("mysqli.default_pw")),null,(is_numeric($fd)?$fd:ini_get("mysqli.default_port")),(!is_numeric($fd)?$fd:null));if($L){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$L;}function
result($J,$l=0){$K=$this->query($J);if(!$K)return
false;$M=$K->fetch_array();return$M[$l];}function
quote($R){return"'".$this->escape_string($R)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($P,$U,$H){$this->_link=@mysql_connect(($P!=""?$P:ini_get("mysql.default_host")),("$P$U"!=""?$U:ini_get("mysql.default_user")),("$P$U$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($R){return"'".mysql_real_escape_string($R,$this->_link)."'";}function
select_db($Xa){return
mysql_select_db($Xa,$this->_link);}function
query($J,$se=false){$K=@($se?mysql_unbuffered_query($J,$this->_link):mysql_query($J,$this->_link));$this->error="";if(!$K){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($K===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($K);}function
multi_query($J){return$this->_result=$this->query($J);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($J,$l=0){$K=$this->query($J);if(!$K||!$K->num_rows)return
false;return
mysql_result($K->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($K){$this->_result=$K;$this->num_rows=mysql_num_rows($K);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$L=mysql_fetch_field($this->_result,$this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=($L->blob?63:0);return$L;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($P,$U,$H){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$P)),$U,$H);$this->query("SET NAMES utf8");return
true;}function
select_db($Xa){return$this->query("USE ".idf_escape($Xa));}function
query($J,$se=false){$this->setAttribute(1000,!$se);return
parent::query($J,$se);}}}class
Min_Driver
extends
Min_SQL{function
insert($S,$Q){return($Q?parent::insert($S,$Q):queries("INSERT INTO ".table($S)." ()\nVALUES ()"));}function
insertUpdate($S,$N,$jd){$e=array_keys(reset($N));$id="INSERT INTO ".table($S)." (".implode(", ",$e).") VALUES\n";$Be=array();foreach($e
as$w)$Be[$w]="$w = VALUES($w)";$Ud="\nON DUPLICATE KEY UPDATE ".implode(", ",$Be);$Be=array();$xc=0;foreach($N
as$Q){$X="(".implode(", ",$Q).")";if($Be&&(strlen($id)+$xc+strlen($X)+strlen($Ud)>1e6)){if(!queries($id.implode(",\n",$Be).$Ud))return
false;$Be=array();$xc=0;}$Be[]=$X;$xc+=strlen($X)+2;}return
queries($id.implode(",\n",$Be).$Ud);}}function
idf_escape($ic){return"`".str_replace("`","``",$ic)."`";}function
table($ic){return
idf_escape($ic);}function
connect(){global$b;$f=new
Min_DB;$Va=$b->credentials();if($f->connect($Va[0],$Va[1],$Va[2])){$f->query("SET sql_quote_show_create = 1, autocommit = 1");return$f;}$L=$f->error;if(function_exists('iconv')&&!is_utf8($L)&&strlen($Bd=iconv("windows-1250","utf-8",$L))>strlen($L))$L=$Bd;return$L;}function
get_databases($Kb){global$f;$L=get_session("dbs");if($L===null){$J=($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$L=($Kb?slow_query($J):get_vals($J));restart_session();set_session("dbs",$L);stop_session();}return$L;}function
limit($J,$Y,$x,$Oc=0,$Hd=" "){return" $J$Y".($x!==null?$Hd."LIMIT $x".($Oc?" OFFSET $Oc":""):"");}function
limit1($J,$Y){return
limit($J,$Y,1);}function
db_collation($h,$La){global$f;$L=null;$Ta=$f->result("SHOW CREATE DATABASE ".idf_escape($h),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ta,$_))$L=$_[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ta,$_))$L=$La[$_[1]][-1];return$L;}function
engines(){$L=array();foreach(get_rows("SHOW ENGINES")as$M){if(preg_match("~YES|DEFAULT~",$M["Support"]))$L[]=$M["Engine"];}return$L;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals($f->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($Ya){$L=array();foreach($Ya
as$h)$L[$h]=count(get_vals("SHOW TABLES IN ".idf_escape($h)));return$L;}function
table_status($C="",$Db=false){global$f;$L=array();foreach(get_rows($Db&&$f->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$M){if($M["Engine"]=="InnoDB")$M["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$M["Comment"]);if(!isset($M["Engine"]))$M["Comment"]="";if($C!="")return$M;$L[$M["Name"]]=$M;}return$L;}function
is_view($T){return$T["Engine"]===null;}function
fk_support($T){return
preg_match('~InnoDB|IBMDB2I~i',$T["Engine"]);}function
fields($S){$L=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($S))as$M){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$M["Type"],$_);$L[$M["Field"]]=array("field"=>$M["Field"],"full_type"=>$M["Type"],"type"=>$_[1],"length"=>$_[2],"unsigned"=>ltrim($_[3].$_[4]),"default"=>($M["Default"]!=""||preg_match("~char|set~",$_[1])?$M["Default"]:null),"null"=>($M["Null"]=="YES"),"auto_increment"=>($M["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$M["Extra"],$_)?$_[1]:""),"collation"=>$M["Collation"],"privileges"=>array_flip(preg_split('~, *~',$M["Privileges"])),"comment"=>$M["Comment"],"primary"=>($M["Key"]=="PRI"),);}return$L;}function
indexes($S,$g=null){$L=array();foreach(get_rows("SHOW INDEX FROM ".table($S),$g)as$M){$L[$M["Key_name"]]["type"]=($M["Key_name"]=="PRIMARY"?"PRIMARY":($M["Index_type"]=="FULLTEXT"?"FULLTEXT":($M["Non_unique"]?"INDEX":"UNIQUE")));$L[$M["Key_name"]]["columns"][]=$M["Column_name"];$L[$M["Key_name"]]["lengths"][]=$M["Sub_part"];$L[$M["Key_name"]]["descs"][]=null;}return$L;}function
foreign_keys($S){global$f,$Qc;static$I='`(?:[^`]|``)+`';$L=array();$Ua=$f->result("SHOW CREATE TABLE ".table($S),1);if($Ua){preg_match_all("~CONSTRAINT ($I) FOREIGN KEY \\(((?:$I,? ?)+)\\) REFERENCES ($I)(?:\\.($I))? \\(((?:$I,? ?)+)\\)(?: ON DELETE ($Qc))?(?: ON UPDATE ($Qc))?~",$Ua,$Bc,PREG_SET_ORDER);foreach($Bc
as$_){preg_match_all("~$I~",$_[2],$Md);preg_match_all("~$I~",$_[5],$ae);$L[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$Md[0]),"target"=>array_map('idf_unescape',$ae[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$L;}function
view($C){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$L=array();foreach(get_rows("SHOW COLLATION")as$M){if($M["Default"])$L[$M["Charset"]][-1]=$M["Collation"];else$L[$M["Charset"]][]=$M["Collation"];}ksort($L);foreach($L
as$w=>$W)asort($L[$w]);return$L;}function
information_schema($h){global$f;return($f->server_info>=5&&$h=="information_schema")||($f->server_info>=5.5&&$h=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
error_line(){global$f;if(preg_match('~ at line ([0-9]+)$~',$f->error,$vd))return$vd[1]-1;}function
create_database($h,$Ka){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($h).($Ka?" COLLATE ".q($Ka):""));}function
drop_databases($Ya){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ya,'idf_escape');}function
rename_database($C,$Ka){if(create_database($C,$Ka)){$wd=array();foreach(tables_list()as$S=>$pe)$wd[]=table($S)." TO ".idf_escape($C).".".table($S);if(!$wd||queries("RENAME TABLE ".implode(", ",$wd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$ta="";break;}if($s["type"]=="PRIMARY")$ta=" UNIQUE";}}return" AUTO_INCREMENT$ta";}function
alter_table($S,$C,$m,$Lb,$Oa,$tb,$Ka,$sa,$cd){$ma=array();foreach($m
as$l)$ma[]=($l[1]?($S!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($S!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$ma=array_merge($ma,$Lb);$Pd="COMMENT=".q($Oa).($tb?" ENGINE=".q($tb):"").($Ka?" COLLATE ".q($Ka):"").($sa!=""?" AUTO_INCREMENT=$sa":"").$cd;if($S=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$ma)."\n) $Pd");if($S!=$C)$ma[]="RENAME TO ".table($C);$ma[]=$Pd;return
queries("ALTER TABLE ".table($S)."\n".implode(",\n",$ma));}function
alter_indexes($S,$ma){foreach($ma
as$w=>$W)$ma[$w]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"")."(".implode(", ",$W[2]).")");return
queries("ALTER TABLE ".table($S).implode(",",$ma));}function
truncate_tables($Zd){return
apply_queries("TRUNCATE TABLE",$Zd);}function
drop_views($Ee){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ee)));}function
drop_tables($Zd){return
queries("DROP TABLE ".implode(", ",array_map('table',$Zd)));}function
move_tables($Zd,$Ee,$ae){$wd=array();foreach(array_merge($Zd,$Ee)as$S)$wd[]=table($S)." TO ".idf_escape($ae).".".table($S);return
queries("RENAME TABLE ".implode(", ",$wd));}function
copy_tables($Zd,$Ee,$ae){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Zd
as$S){$C=($ae==DB?table("copy_$S"):idf_escape($ae).".".table($S));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($S))||!queries("INSERT INTO $C SELECT * FROM ".table($S)))return
false;}foreach($Ee
as$S){$C=($ae==DB?table("copy_$S"):idf_escape($ae).".".table($S));$De=view($S);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $De[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$N=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($N);}function
triggers($S){$L=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($S,"%_\\")))as$M)$L[$M["Trigger"]]=array($M["Timing"],$M["Event"]);return$L;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$pe){global$f,$ub,$nc,$re;$la=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$qe="((".implode("|",array_merge(array_keys($re),$la)).")\\b(?:\\s*\\(((?:[^'\")]*|$ub)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$I="\\s*(".($pe=="FUNCTION"?"":$nc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$qe";$Ta=$f->result("SHOW CREATE $pe ".idf_escape($C),2);preg_match("~\\(((?:$I\\s*,?)*)\\)\\s*".($pe=="FUNCTION"?"RETURNS\\s+$qe\\s+":"")."(.*)~is",$Ta,$_);$m=array();preg_match_all("~$I\\s*,?~is",$_[1],$Bc,PREG_SET_ORDER);foreach($Bc
as$ad){$C=str_replace("``","`",$ad[2]).$ad[3];$m[]=array("field"=>$C,"type"=>strtolower($ad[5]),"length"=>preg_replace_callback("~$ub~s",'normalize_enum',$ad[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ad[8] $ad[7]"))),"null"=>1,"full_type"=>$ad[4],"inout"=>strtoupper($ad[1]),"collation"=>strtolower($ad[9]),);}if($pe!="FUNCTION")return
array("fields"=>$m,"definition"=>$_[11]);return
array("fields"=>$m,"returns"=>array("type"=>$_[12],"length"=>$_[13],"unsigned"=>$_[15],"collation"=>$_[16]),"definition"=>$_[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$J){return$f->query("EXPLAIN ".($f->server_info>=5.1?"PARTITIONS ":"").$J);}function
found_rows($T,$Y){return($Y||$T["Engine"]!="InnoDB"?null:$T["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Cd){return
true;}function
create_sql($S,$sa){global$f;$L=$f->result("SHOW CREATE TABLE ".table($S),1);if(!$sa)$L=preg_replace('~ AUTO_INCREMENT=\\d+~','',$L);return$L;}function
truncate_sql($S){return"TRUNCATE ".table($S);}function
use_sql($Xa){return"USE ".idf_escape($Xa);}function
trigger_sql($S,$Sd){$L="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($S,"%_\\")),null,"-- ")as$M)$L.="\n".($Sd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($M["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($M["Trigger"])." $M[Timing] $M[Event] ON ".table($M["Table"])." FOR EACH ROW\n$M[Statement];;\n";return$L;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(preg_match("~binary~",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$L){if(preg_match("~binary~",$l["type"]))$L="UNHEX($L)";if($l["type"]=="bit")$L="CONV($L, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))$L="GeomFromText($L)";return$L;}function
support($Eb){global$f;return!preg_match("~scheme|sequence|type|view_trigger".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|routine|trigger|view":""):"")."~",$Eb);}$v="sql";$re=array();$Rd=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometria'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$W){$re+=$W;$Rd[$w]=array_keys($W);}$ye=array("unsigned","zerofill","unsigned zerofill");$Vc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Vb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Xb=array("avg","count","count distinct","group_concat","max","min","sum");$lb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.0.3";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' target='_blank' id='h1'>".'Edytor'."</a>";}function
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
<tr><th>Użytkownik<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Hasło<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Zaloguj się'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Zapamiętaj sesję')."\n";}function
login($_c,$H){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Xd){return
h($Xd["Comment"]!=""?$Xd["Comment"]:$Xd["Name"]);}function
fieldName($l,$E=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Xd,$Q=""){$a=$Xd["Name"];if($Q!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$Q).'">'.'Nowy rekord'."</a>\n";}function
foreignKeys($S){return
foreign_keys($S);}function
backwardKeys($S,$Wd){$L=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($S)."
ORDER BY ORDINAL_POSITION",null,"")as$M)$L[$M["TABLE_NAME"]]["keys"][$M["CONSTRAINT_NAME"]][$M["COLUMN_NAME"]]=$M["REFERENCED_COLUMN_NAME"];foreach($L
as$w=>$W){$C=$this->tableName(table_status($w,true));if($C!=""){$Dd=preg_quote($Wd);$Hd="(:|\\s*-)?\\s+";$L[$w]["name"]=(preg_match("(^$Dd$Hd(.+)|^(.+?)$Hd$Dd\$)iu",$C,$_)?$_[2].$_[3]:$C);}else
unset($L[$w]);}return$L;}function
backwardKeysPrint($wa,$M){foreach($wa
as$S=>$va){foreach($va["keys"]as$Ma){$y=ME.'select='.urlencode($S);$q=0;foreach($Ma
as$d=>$W)$y.=where_link($q++,$d,$M[$W]);echo"<a href='".h($y)."'>".h($va["name"])."</a>";$y=ME.'edit='.urlencode($S);foreach($Ma
as$d=>$W)$y.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($M[$W]);echo"<a href='".h($y)."' title='".'Nowy rekord'."'>+</a> ";}}}function
selectQuery($J){return"<!--\n".str_replace("--","--><!-- ",$J)."\n-->\n";}function
rowDescription($S){foreach(fields($S)as$l){if(preg_match("~varchar|character varying~",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($N,$Nb){$L=$N;foreach($N[0]as$w=>$W){if(list($S,$r,$C)=$this->_foreignColumn($Nb,$w)){$jc=array();foreach($N
as$M)$jc[$M[$w]]=q($M[$w]);$cb=$this->_values[$S];if(!$cb)$cb=get_key_vals("SELECT $r, $C FROM ".table($S)." WHERE $r IN (".implode(", ",$jc).")");foreach($N
as$B=>$M){if(isset($M[$w]))$L[$B][$w]=(string)$cb[$M[$w]];}}}return$L;}function
selectLink($W,$l){}function
selectVal($W,$y,$l,$Yc){$L=($W===null?"&nbsp;":$W);$y=h($y);if(preg_match('~blob|bytea~',$l["type"])&&!is_utf8($W)){$L=lang(array('%d bajt','%d bajty','%d bajtów'),strlen($Yc));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$Yc))$L="<img src='$y' alt='$L'>";}if(like_bool($l)&&$L!="&nbsp;")$L=($W?'tak':'nie');if($y)$L="<a href='$y'>$L</a>";if(!$y&&!like_bool($l)&&preg_match('~int|float|double|decimal~',$l["type"]))$L="<div class='number'>$L</div>";elseif(preg_match('~date~',$l["type"]))$L="<div class='datetime'>$L</div>";return$L;}function
editVal($W,$l){if(preg_match('~date|timestamp~',$l["type"])&&$W!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$W);return$W;}function
selectColumnsPrint($O,$e){}function
selectSearchPrint($Y,$e,$t){$Y=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Szukaj'."</legend><div>\n";$qc=array();foreach($Y
as$w=>$W)$qc[$W["col"]]=$w;$q=0;$m=fields($_GET["select"]);foreach($e
as$C=>$bb){$l=$m[$C];if(preg_match("~enum~",$l["type"])||like_bool($l)){$w=$qc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'nie','tak'),$Y[$w]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$Y[$w]["val"],($l["null"]?0:null))),"</div>\n";unset($e[$C]);}elseif(is_array($D=$this->_foreignKeyOptions($_GET["select"],$C))){if($m[$C]["null"])$D[0]='('.'puste'.')';$w=$qc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($D,$Y[$w]["val"],true)."</select></div>\n";unset($e[$C]);}}$q=0;foreach($Y
as$W){if(($W["col"]==""||$e[$W["col"]])&&"$W[col]$W[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($e,$W["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$W["op"]),"<input type='search' name='where[$q][val]' value='".h($W["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'gdziekolwiek'.")".optionlist($e,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$q][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$e,$t){$Xc=array();foreach($t
as$w=>$s){$E=array();foreach($s["columns"]as$W)$E[]=$e[$W];if(count(array_filter($E,'strlen'))>1&&$w!="PRIMARY")$Xc[$w]=implode(", ",$E);}if($Xc){echo'<fieldset><legend>'.'Sortuj'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Xc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($x){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$x),"</div></fieldset>\n";}function
selectLengthPrint($ce){}function
selectActionPrint($t){echo"<fieldset><legend>".'Czynność'."</legend><div>","<input type='submit' value='".'pokaż'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($pb,$e){if($pb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Nadawca'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Temat'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Dodaj'."'>\n";echo"<p>".'Załączniki'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($pb)==1?'<input type="hidden" name="email_field" value="'.h(key($pb)).'">':html_select("email_field",$pb)),"<input type='submit' name='email' value='".'Wyślij'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$t){return
array(array(),array());}function
selectSearchProcess($m,$t){$L=array();foreach((array)$_GET["where"]as$w=>$Y){$Ja=$Y["col"];$Tc=$Y["op"];$W=$Y["val"];if(($w<0?"":$Ja).$W!=""){$Pa=array();foreach(($Ja!=""?array($Ja=>$m[$Ja]):$m)as$C=>$l){if($Ja!=""||is_numeric($W)||!preg_match('~int|float|double|decimal~',$l["type"])){$C=idf_escape($C);if($Ja!=""&&$l["type"]=="enum")$Pa[]=(in_array(0,$W)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$W)).")";else{$de=preg_match('~char|text|enum|set~',$l["type"]);$X=$this->processInput($l,(!$Tc&&$de&&preg_match('~^[^%]+$~',$W)?"%$W%":$W));$Pa[]=$C.($X=="NULL"?" IS".($Tc==">="?" NOT":"")." $X":(in_array($Tc,$this->operators)||$Tc=="="?" $Tc $X":($de?" LIKE $X":" IN (".str_replace(",","', '",$X).")")));if($w<0&&$W=="0")$Pa[]="$C IS NULL";}}}$L[]=($Pa?"(".implode(" OR ",$Pa).")":"0");}}return$L;}function
selectOrderProcess($m,$t){$lc=$_GET["index_order"];if($lc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($lc!=""?array($t[$lc]):$t)as$s){if($lc!=""||$s["type"]=="INDEX"){$Zb=array_filter($s["descs"]);$bb=false;foreach($s["columns"]as$W){if(preg_match('~date|timestamp~',$m[$W]["type"])){$bb=true;break;}}$L=array();foreach($s["columns"]as$w=>$W)$L[]=idf_escape($W).(($Zb?$s["descs"][$w]:$bb)?" DESC":"");return$L;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Y,$Nb){if($_POST["email_append"])return
true;if($_POST["email"]){$Gd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Td=$_POST["email_subject"];$A=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Td.$A",$Bc);$N=get_rows("SELECT DISTINCT $l".($Bc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Bc[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($Y?" AND ".implode(" AND ",$Y):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($N,$Nb)as$M){$xd=array('{\\'=>'{');foreach($Bc[1]as$W)$xd['{$'."$W}"]=$this->editVal($M[$W],$m[$W]);$ob=$M[$_POST["email_field"]];if(is_mail($ob)&&send_mail($ob,strtr($Td,$xd),strtr($A,$xd),$_POST["email_from"],$_FILES["email_files"]))$Gd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),$Gd));}return
false;}function
selectQueryBuild($O,$Y,$p,$E,$x,$G){return"";}function
messageQuery($J){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$J)."\n-->";}function
editFunctions($l){$L=array();if($l["null"]&&preg_match('~blob~',$l["type"]))$L["NULL"]='puste';$L[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(preg_match('~date|time~',$l["type"]))$L["now"]='teraz';if(preg_match('~_(md5|sha1)$~i',$l["field"],$_))$L[]=strtolower($_[1]);return$L;}function
editInput($S,$l,$c,$X){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'bez zmian'."</i></label> ":"").enum_input("radio",$c,$l,($X||isset($_GET["select"])?$X:0),($l["null"]?"":null));$D=$this->_foreignKeyOptions($S,$l["field"],$X);if($D!==null)return(is_array($D)?"<select$c>".optionlist($D,$X,true)."</select>":"<input value='".h($X)."'$c class='hidden'><input value='".h($D)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($S)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($X?$X:1).'"'.($X?' checked':'')."$c>";$ec="";if(preg_match('~time~',$l["type"]))$ec='HH:MM:SS';if(preg_match('~date|timestamp~',$l["type"]))$ec='d.m.[rrrr]'.($ec?" [$ec]":"");if($ec)return"<input value='".h($X)."'$c> ($ec)";if(preg_match('~_(md5|sha1)$~i',$l["field"]))return"<input type='password' value='".h($X)."'$c>";return'';}function
processInput($l,$X,$o=""){if($o=="now")return"$o()";$L=$X;if(preg_match('~date|timestamp~',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$X,$_))$L=($_["p1"]!=""?$_["p1"]:($_["p2"]!=""?($_["p2"]<70?20:19).$_["p2"]:gmdate("Y")))."-$_[p3]$_[p4]-$_[p5]$_[p6]".end($_);$L=($l["type"]=="bit"&&preg_match('~^[0-9]+$~',$X)?$L:q($L));if($X==""&&like_bool($l))$L="0";elseif($X==""&&($l["null"]||!preg_match('~char|text~',$l["type"])))$L="NULL";elseif(preg_match('~^(md5|sha1)$~',$o))$L="$o($L)";return
unconvert_field($l,$L);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($h){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($S,$Sd,$J){global$f;$K=$f->query($J,1);if($K){while($M=$K->fetch_assoc()){if($Sd=="table"){dump_csv(array_keys($M));$Sd="INSERT";}dump_csv($M);}}}function
dumpFilename($hc){return
friendly_url($hc);}function
dumpHeaders($hc,$Jc=false){$Ab="csv";header("Content-Type: text/csv; charset=utf-8");return$Ab;}function
homepage(){return
true;}function
navigation($Ic){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ic=="auth"){$Jb=true;foreach((array)$_SESSION["pwds"]as$Ce=>$Jd){foreach($Jd[""]as$U=>$H){if($H!==null){if($Jb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Jb=false;}echo"<a href='".h(auth_url($Ce,"",$U))."'>".($U!=""?h($U):"<i>".'puste'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($Ic);if($Ic!="db"&&$Ic!="ns"){$T=table_status('',true);if(!$T)echo"<p class='message'>".'Brak tabel.'."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Ic){}function
tablesPrint($Zd){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Zd
as$M){$C=$this->tableName($M);if(isset($M["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($M["Name"])."'".bold($_GET["select"]==$M["Name"]||$_GET["edit"]==$M["Name"])." title='".'Pokaż dane'."'>$C</a><br>\n";}}function
_foreignColumn($Nb,$d){foreach((array)$Nb[$d]as$Mb){if(count($Mb["source"])==1){$C=$this->rowDescription($Mb["table"]);if($C!=""){$r=idf_escape($Mb["target"][0]);return
array($Mb["table"],$r,$C);}}}}function
_foreignKeyOptions($S,$d,$X=null){global$f;if(list($ae,$r,$C)=$this->_foreignColumn(column_foreign_keys($S),$d)){$L=&$this->_values[$ae];if($L===null){$T=table_status($ae);$L=($T["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $C FROM ".table($ae)." ORDER BY 2"));}if(!$L&&$X!==null)return$f->result("SELECT $C FROM ".table($ae)." WHERE $r = ".q($X));return$L;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($ge,$k="",$Ca=array(),$he=""){global$ba,$ca,$b,$ib,$v;page_headers();$ie=$ge.($he!=""?": $he":"");$je=strip_tags($ie.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$je,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.3&amp;driver=mysql",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.3&amp;driver=mysql",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3&amp;driver=mysql",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.3&amp;driver=mysql",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);"',(isset($_COOKIE["adminer_version"])?"":" onload=\"verifyVersion('$ca');\""),'>
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$v,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ca!==null){$y=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$ib[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$P=(SERVER!=""?h(SERVER):'Serwer');if($Ca===false)echo"$P\n";else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$P</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ca)))echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ca)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ca
as$w=>$W){$bb=(is_array($W)?$W[1]:h($W));if($bb!="")echo"<a href='".h(ME."$w=").urlencode(is_array($W)?$W[0]:$W)."'>$bb</a> &raquo; ";}}echo"$ge\n";}}echo"<h2>$ie</h2>\n";restart_session();page_messages($k);$Ya=&get_session("dbs");if(DB!=""&&$Ya&&!in_array(DB,$Ya,true))$Ya=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($k){$_e=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Hc=$_SESSION["messages"][$_e];if($Hc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Hc)."</div>\n";unset($_SESSION["messages"][$_e]);}if($k)echo"<div class='error'>$k</div>\n";}function
page_footer($Ic=""){global$b,$le;echo'</div>

';if($Ic!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Wyloguj" id="logout">
<input type="hidden" name="token" value="',$le,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Ic);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($V,$Ge){$Bd='';foreach($V
as$W)$Bd.=pack('V',$W);if($Ge)return
substr($Bd,0,end($V));return$Bd;}function
str2long($Bd,$Ge){$V=array_values(unpack('V*',str_pad($Bd,4*ceil(strlen($Bd)/4),"\0")));if($Ge)$V[]=strlen($Bd);return$V;}function
xxtea_mx($Z,$Ke,$Vd,$pc){return
int32((($Z>>5&0x7FFFFFF)^$Ke<<2)+(($Ke>>3&0x1FFFFFFF)^$Z<<4))^int32(($Vd^$Ke)+($pc^$Z));}function
encrypt_string($Qd,$w){if($Qd=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($Qd,true);$B=count($V)-1;$Z=$V[$B];$Ke=$V[0];$od=floor(6+52/($B+1));$Vd=0;while($od-->0){$Vd=int32($Vd+0x9E3779B9);$kb=$Vd>>2&3;for($F=0;$F<$B;$F++){$Ke=$V[$F+1];$Kc=xxtea_mx($Z,$Ke,$Vd,$w[$F&3^$kb]);$Z=int32($V[$F]+$Kc);$V[$F]=$Z;}$Ke=$V[0];$Kc=xxtea_mx($Z,$Ke,$Vd,$w[$F&3^$kb]);$Z=int32($V[$B]+$Kc);$V[$B]=$Z;}return
long2str($V,false);}function
decrypt_string($Qd,$w){if($Qd=="")return"";if(!$w)return
false;$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($Qd,false);$B=count($V)-1;$Z=$V[$B];$Ke=$V[0];$od=floor(6+52/($B+1));$Vd=int32($od*0x9E3779B9);while($Vd){$kb=$Vd>>2&3;for($F=$B;$F>0;$F--){$Z=$V[$F-1];$Kc=xxtea_mx($Z,$Ke,$Vd,$w[$F&3^$kb]);$Ke=int32($V[$F]-$Kc);$V[$F]=$Ke;}$Z=$V[$B];$Kc=xxtea_mx($Z,$Ke,$Vd,$w[$F&3^$kb]);$Ke=int32($V[0]-$Kc);$V[0]=$Ke;$Vd=int32($Vd-0x9E3779B9);}return
long2str($V,true);}$f='';$bc=$_SESSION["token"];if(!$bc)$_SESSION["token"]=rand(1,1e6);$le=get_token();$dd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($w)=explode(":",$W);$dd[$w]=$W;}}$ra=$_POST["auth"];if($ra){session_regenerate_id();$i=$ra["driver"];$P=$ra["server"];$U=$ra["username"];$H=$ra["password"];$h=$ra["db"];set_password($i,$P,$U,$H);$_SESSION["db"][$i][$P][$U][$h]=true;if($ra["permanent"]){$w=base64_encode($i)."-".base64_encode($P)."-".base64_encode($U)."-".base64_encode($h);$ld=$b->permanentLogin(true);$dd[$w]="$w:".base64_encode($ld?encrypt_string($H,$ld):"");cookie("adminer_permanent",implode(" ",$dd));}if(count($_POST)==1||DRIVER!=$i||SERVER!=$P||$_GET["username"]!==$U||DB!=$h)redirect(auth_url($i,$P,$U,$h));}elseif($_POST["logout"]){if($bc&&!verify_token()){page_header('Wyloguj','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyślnie.');}}elseif($dd&&!$_SESSION["pwds"]){session_regenerate_id();$ld=$b->permanentLogin();foreach($dd
as$w=>$W){list(,$Fa)=explode(":",$W);list($Ce,$P,$U,$h)=array_map('base64_decode',explode("-",$w));set_password($Ce,$P,$U,decrypt_string(base64_decode($Fa),$ld));$_SESSION["db"][$Ce][$P][$U][$h]=true;}}function
unset_permanent(){global$dd;foreach($dd
as$w=>$W){list($Ce,$P,$U,$h)=array_map('base64_decode',explode("-",$w));if($Ce==DRIVER&&$P==SERVER&&$U==$_GET["username"]&&$h==DB)unset($dd[$w]);}cookie("adminer_permanent",implode(" ",$dd));}function
auth_error($zb=null){global$f,$b,$bc;$Kd=session_name();$k="";if(!$_COOKIE[$Kd]&&$_GET[$Kd]&&ini_bool("session.use_only_cookies"))$k='Wymagana jest obsługa sesji w PHP.';elseif(isset($_GET["username"])){if(($_COOKIE[$Kd]||$_GET[$Kd])&&!$bc)$k='Sesja wygasła, zaloguj się ponownie.';else{$H=get_password();if($H!==null){$k=h($zb?$zb->getMessage():(is_string($f)?$f:'Nieprawidłowe dane logowania.'));if($H===false)$k.='<br>'.sprintf('Ważność hasła głównego wygasła. <a href="http://www.adminer.org/pl/extension/" target="_blank">Zaimplementuj</a> własną metodę %s, aby ustawić je na stałe.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$bd=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$bd["lifetime"]);page_header('Zaloguj się',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Ce,$P,$U,$H){$_SESSION["pwds"][$Ce][$P][$U]=($_COOKIE["adminer_key"]&&is_string($H)?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$L=get_session("pwds");if(is_array($L))$L=($_COOKIE["adminer_key"]?decrypt_string($L[0],$_COOKIE["adminer_key"]):false);return$L;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Brak rozszerzenia',sprintf('Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.',implode(", ",$hd)),false);page_footer("auth");exit;}$f=connect();}if(!is_object($f)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$i=new
Min_Driver($f);if($ra&&$_POST["token"])$_POST["token"]=$le;$k='';if($_POST){if(!verify_token()){$mc="max_input_vars";$Fc=ini_get($mc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$w){$W=ini_get($w);if($W&&(!$Fc||$W<$Fc)){$mc=$w;$Fc=$W;}}}$k=(!$_POST["token"]&&$Fc?sprintf('Przekroczono maksymalną liczbę pól. Zwiększ %s.',"'$mc'"):'Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'Większe pliki SQL możesz wgrać na serwer poprzez FTP przed zaimportowaniem.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$f->select_db($b->database());function
email_header($cc){return"=?UTF-8?B?".base64_encode($cc)."?=";}function
send_mail($ob,$Td,$A,$Tb="",$Hb=array()){$j=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$A=str_replace("\n",$j,wordwrap(str_replace("\r","","$A\n")));$Ba=uniqid("boundary");$qa="";foreach((array)$Hb["error"]as$w=>$W){if(!$W)$qa.="--$Ba$j"."Content-Type: ".str_replace("\n","",$Hb["type"][$w]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Hb["name"][$w])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Hb["tmp_name"][$w])),76,$j).$j;}$ya="";$dc="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$Ba--$j";$ya="--$Ba$j$dc$j$j";$dc="Content-Type: multipart/mixed; boundary=\"$Ba\"";}$dc.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Tb?$j."From: ".str_replace("\n","",$Tb):"");return
mail($ob,email_header($Td),$ya.$A.$qa,$dc);}function
like_bool($l){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$l["full_type"]);}$Qc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$ib[DRIVER]='Zaloguj się';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));$O=array(idf_escape($_GET["field"]));$K=$i->select($a,$O,array(where($_GET,$m)),$O);$M=($K?$K->fetch_row():array());echo$M[0];exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$Y=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$ze=(isset($_GET["select"])?$_POST["edit"]:$Y);foreach($m
as$C=>$l){if(!isset($l["privileges"][$ze?"update":"insert"])||$b->fieldName($l)=="")unset($m[$C]);}if($_POST&&!$k&&!isset($_GET["select"])){$z=$_POST["referer"];if($_POST["insert"])$z=($ze?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$z))$z=ME."select=".urlencode($a);$t=indexes($a);$ue=unique_array($_GET["where"],$t);$rd="\nWHERE $Y";if(isset($_POST["delete"]))queries_redirect($z,'Rekord został usunięty.',$i->delete($a,$rd,!$ue));else{$Q=array();foreach($m
as$C=>$l){$W=process_input($l);if($W!==false&&$W!==null)$Q[idf_escape($C)]=$W;}if($ze){if(!$Q)redirect($z);queries_redirect($z,'Rekord został zaktualizowany.',$i->update($a,$Q,$rd,!$ue));if(is_ajax()){page_headers();page_messages($k);exit;}}else{$K=$i->insert($a,$Q);$vc=($K?last_id():0);queries_redirect($z,sprintf('Rekord%s został dodany.',($vc?" $vc":"")),$K);}}}$Yd=$b->tableName(table_status1($a,true));page_header(($ze?'Edytuj':'Dodaj'),$k,array("select"=>array($a,$Yd)),$Yd);$M=null;if($_POST["save"])$M=(array)$_POST["fields"];elseif($Y){$O=array();foreach($m
as$C=>$l){if(isset($l["privileges"]["select"])){$oa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$oa="''";if($v=="sql"&&preg_match("~enum|set~",$l["type"]))$oa="1*".idf_escape($C);$O[]=($oa?"$oa AS ":"").idf_escape($C);}}$M=array();if(!support("table"))$O=array("*");if($O){$K=$i->select($a,$O,array($Y),$O,array(),(isset($_GET["select"])?2:1));$M=$K->fetch_assoc();if(!$M)$M=false;if(isset($_GET["select"])&&(!$M||$K->fetch_assoc()))$M=null;}}if(!support("table")&&!$m){if(!$Y){$K=$i->select($a,array("*"),$Y,array("*"));$M=($K?$K->fetch_assoc():false);if(!$M)$M=array($i->primary=>"");}if($M){foreach($M
as$w=>$W){if(!$Y)$M[$w]=null;$m[$w]=array("field"=>$w,"null"=>($w!=$i->primary),"auto_increment"=>($w==$i->primary));}}}if($M===false)echo"<p class='error'>".'Brak rekordów.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'Brak uprawnień do edycji tej tabeli'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$C=>$l){echo"<tr><th>".$b->fieldName($l);$ab=$_GET["set"][bracket_escape($C)];if($ab===null){$ab=$l["default"];if($l["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$ab,$vd))$ab=$vd[1];}$X=($M!==null?($M[$C]!=""&&$v=="sql"&&preg_match("~enum|set~",$l["type"])?(is_array($M[$C])?array_sum($M[$C]):+$M[$C]):$M[$C]):(!$ze&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$ab)));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$l);$o=($_POST["save"]?(string)$_POST["function"][$C]:($ze&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if(preg_match("~time~",$l["type"])&&$X=="CURRENT_TIMESTAMP"){$X="";$o="now";}input($l,$X,$o);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' onkeyup='keyupChange.call(this);' onchange='fieldChange(this);' value=''>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array("null"=>isset($_GET["select"]))))."<td><input name='field_vals[]'>"."\n";echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($ze?'Zapisz i kontynuuj edycję'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Zapisz i dodaj następny')."' title='Ctrl+Shift+Enter'>\n";}echo($ze?"<input type='submit' name='delete' value='".'Usuń'."'".confirm().">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$le,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$T=table_status1($a);$t=indexes($a);$m=fields($a);$Pb=column_foreign_keys($a);$Pc="";if($T["Oid"]){$Pc=($v=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Pc));}parse_str($_COOKIE["adminer_import"],$ia);$Ad=array();$e=array();$ce=null;foreach($m
as$w=>$l){$C=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$C!=""){$e[$w]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($l))$ce=$b->selectLengthProcess();}$Ad+=$l["privileges"];}list($O,$p)=$b->selectColumnsProcess($e,$t);$u=count($p)<count($O);$Y=$b->selectSearchProcess($m,$t);$E=$b->selectOrderProcess($m,$t);$x=$b->selectLimitProcess();$Tb=($O?implode(", ",$O):"*".($Pc?", $Pc":"")).convert_fields($e,$m,$O)."\nFROM ".table($a);$Wb=($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ve=>$M){$oa=convert_field($m[key($M)]);$O=array($oa?$oa:idf_escape(key($M)));$Y[]=where_check($ve,$m);$L=$i->select($a,$O,$Y,$O);if($L)echo
reset($L->fetch_row());}exit;}if($_POST&&!$k){$Ie=$Y;if(!$_POST["all"]&&is_array($_POST["check"]))$Ie[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Ie=($Ie?"\nWHERE ".implode(" AND ",$Ie):"");$jd=$xe=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$jd=array_flip($s["columns"]);$xe=($O?$jd:array());break;}}foreach((array)$xe
as$w=>$W){if(in_array(idf_escape($w),$O))unset($xe[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$xe===array())$J="SELECT $Tb$Ie$Wb";else{$te=array();foreach($_POST["check"]as$W)$te[]="(SELECT".limit($Tb,"\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($W,$m).$Wb,1).")";$J=implode(" UNION ALL ",$te);}$b->dumpData($a,"table",$J);exit;}if(!$b->selectEmailProcess($Y,$Pb)){if($_POST["save"]||$_POST["delete"]){$K=true;$ja=0;$Q=array();if(!$_POST["delete"]){foreach($e
as$C=>$W){$W=process_input($m[$C]);if($W!==null&&($_POST["clone"]||$W!==false))$Q[idf_escape($C)]=($W!==false?$W:idf_escape($C));}}if($_POST["delete"]||$Q){if($_POST["clone"])$J="INTO ".table($a)." (".implode(", ",array_keys($Q)).")\nSELECT ".implode(", ",$Q)."\nFROM ".table($a);if($_POST["all"]||($xe===array()&&is_array($_POST["check"]))||$u){$K=($_POST["delete"]?$i->delete($a,$Ie):($_POST["clone"]?queries("INSERT $J$Ie"):$i->update($a,$Q,$Ie)));$ja=$f->affected_rows;}else{foreach((array)$_POST["check"]as$W){$He="\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($W,$m);$K=($_POST["delete"]?$i->delete($a,$He,1):($_POST["clone"]?queries("INSERT".limit1($J,$He)):$i->update($a,$Q,$He)));if(!$K)break;$ja+=$f->affected_rows;}}}$A=lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ja);if($_POST["clone"]&&$K&&$ja==1){$vc=last_id();if($vc)$A=sprintf('Rekord%s został dodany.'," $vc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$A,$K);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+kliknij wartość, aby ją edytować.';else{$K=true;$ja=0;foreach($_POST["val"]as$ve=>$M){$Q=array();foreach($M
as$w=>$W){$w=bracket_escape($w,1);$Q[idf_escape($w)]=(preg_match('~char|text~',$m[$w]["type"])||$W!=""?$b->processInput($m[$w],$W):"NULL");}$K=$i->update($a,$Q," WHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($ve,$m),!($u||$xe===array())," ");if(!$K)break;$ja+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ja),$K);}}elseif(!is_string($Fb=get_file("csv_file",true)))$k=upload_error($Fb);elseif(!preg_match('~~u',$Fb))$k='Kodowanie pliku musi być ustawione na UTF-8.';else{cookie("adminer_import","output=".urlencode($ia["output"])."&format=".urlencode($_POST["separator"]));$K=true;$Ma=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fb,$Bc);$ja=count($Bc[0]);$i->begin();$Hd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$N=array();foreach($Bc[0]as$w=>$W){preg_match_all("~((?>\"[^\"]*\")+|[^$Hd]*)$Hd~",$W.$Hd,$Cc);if(!$w&&!array_diff($Cc[1],$Ma)){$Ma=$Cc[1];$ja--;}else{$Q=array();foreach($Cc[1]as$q=>$Ja)$Q[idf_escape($Ma[$q])]=($Ja==""&&$m[$Ma[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$N[]=$Q;}}$K=(!$N||$i->insertUpdate($a,$N,$jd));if($K)$i->commit();queries_redirect(remove_from_uri("page"),lang(array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),$ja),$K);$i->rollback();}}}$Yd=$b->tableName($T);if(is_ajax()){page_headers();ob_start();}else
page_header('pokaż'.": $Yd",$k);$Q=null;if(isset($Ad["insert"])||!support("table")){$Q="";foreach((array)$_GET["where"]as$W){if(count($Pb[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!preg_match('~[_%]~',$W["val"]))))$Q.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($T,$Q);if(!$e&&support("table"))echo"<p class='error'>".'Nie udało się pobrać danych z tabeli'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($O,$e);$b->selectSearchPrint($Y,$e,$t);$b->selectOrderPrint($E,$e,$t);$b->selectLimitPrint($x);$b->selectLengthPrint($ce);$b->selectActionPrint($t);echo"</form>\n";$G=$_GET["page"];if($G=="last"){$n=$f->result(count_rows($a,$Y,$u,$p));$G=floor(max(0,$n-1)/$x);}$Ed=$O;if(!$Ed){$Ed[]="*";if($Pc)$Ed[]=$Pc;}$Sa=convert_fields($e,$m,$O);if($Sa)$Ed[]=substr($Sa,2);$K=$i->select($a,$Ed,$Y,$p,$E,$x,$G,true);if(!$K)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$G)$K->seek($x*$G);$qb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$N=array();while($M=$K->fetch_assoc()){if($G&&$v=="oracle")unset($M["RNUM"]);$N[]=$M;}if($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql")$n=$f->result(" SELECT FOUND_ROWS()");if(!$N)echo"<p class='message'>".'Brak rekordów.'."\n";else{$xa=$b->backwardKeys($a,$Yd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$p&&$O?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Lc=array();$Vb=array();reset($O);$td=1;foreach($N[0]as$w=>$W){if($w!=$Pc){$W=$_GET["columns"][key($O)];$l=$m[$O?($W?$W["col"]:current($O)):$w];$C=($l?$b->fieldName($l,$td):($W["fun"]?"*":$w));if($C!=""){$td++;$Lc[$w]=$C;$d=idf_escape($w);$gc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$bb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($gc.($E[0]==$d||$E[0]==$w||(!$E&&$u&&$p[0]==$d)?$bb:'')).'">';echo
apply_sql_function($W["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($gc.$bb)."' title='".'malejąco'."' class='text'> ↓</a>";if(!$W["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Szukaj'.'" class="text jsonly"> =</a>';echo"</span>";}$Vb[$w]=$W["fun"];next($O);}}$yc=array();if($_GET["modify"]){foreach($N
as$M){foreach($M
as$w=>$W)$yc[$w]=max($yc[$w],min(40,strlen(utf8_decode($W))));}}echo($xa?"<th>".'Relacje':"")."</thead>\n";if(is_ajax()){if($x%2==1&&$G%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($N,$Pb)as$B=>$M){$ue=unique_array($N[$B],$t);if(!$ue){$ue=array();foreach($N[$B]as$w=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$ue[$w]=$W;}}$ve="";foreach($ue
as$w=>$W){if(($v=="sql"||$v=="pgsql")&&strlen($W)>64){$w="MD5(".(strpos($w,'(')?$w:idf_escape($w)).")";$W=md5($W);}$ve.="&".($W!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($W):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$p&&$O?"":"<td>".checkbox("check[]",substr($ve,1),in_array(substr($ve,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($u||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$ve)."'>".'edytuj'."</a>"));foreach($M
as$w=>$W){if(isset($Lc[$w])){$l=$m[$w];if($W!=""&&(!isset($qb[$w])||$qb[$w]!=""))$qb[$w]=(is_mail($W)?$Lc[$w]:"");$y="";if(preg_match('~blob|bytea|raw|file~',$l["type"])&&$W!="")$y=ME.'download='.urlencode($a).'&field='.urlencode($w).$ve;if(!$y&&$W!==null){foreach((array)$Pb[$w]as$Ob){if(count($Pb[$w])==1||end($Ob["source"])==$w){$y="";foreach($Ob["source"]as$q=>$Md)$y.=where_link($q,$Ob["target"][$q],$N[$B][$Md]);$y=($Ob["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Ob["db"]),ME):ME).'select='.urlencode($Ob["table"]).$y;if(count($Ob["source"])==1)break;}}}if($w=="COUNT(*)"){$y=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$ue))$y.=where_link($q++,$V["col"],$V["val"],$V["op"]);}foreach($ue
as$pc=>$V)$y.=where_link($q++,$pc,$V);}$W=select_value($W,$y,$l,$ce);$r=h("val[$ve][".bracket_escape($w)."]");$X=$_POST["val"][$ve][bracket_escape($w)];$mb=!is_array($M[$w])&&is_utf8($W)&&$N[$B][$w]==$M[$w]&&!$Vb[$w];$be=preg_match('~text|lob~',$l["type"]);if(($_GET["modify"]&&$mb)||$X!==null){$Yb=h($X!==null?$X:$M[$w]);echo"<td>".($be?"<textarea name='$r' cols='30' rows='".(substr_count($M[$w],"\n")+1)."'>$Yb</textarea>":"<input name='$r' value='$Yb' size='$yc[$w]'>");}else{$Ac=strpos($W,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($Ac?2:($be?1:0)).($mb?"":", '".h('Użyj linku edycji aby zmienić tę wartość.')."'").");\">$W";}}}if($xa)echo"<td>";$b->backwardKeysPrint($xa,$N[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($N||$G)&&!is_ajax()){$yb=true;if($_GET["page"]!="last"){if(!+$x)$n=count($N);elseif($v!="sql"||!$u){$n=($u?false:found_rows($T,$Y));if($n<max(1e4,2*($G+1)*$x))$n=reset(slow_query(count_rows($a,$Y,$u,$p)));else$yb=false;}}if(+$x&&($n===false||$n>$x||$G)){echo"<p class='pages'>";$Dc=($n===false?$G+(count($N)>=$x?2:1):floor(($n-1)/$x));if($v!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($G+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$G).($G>5?" ...":"");for($q=max(1,$G-4);$q<min($Dc,$G+5);$q++)echo
pagination($q,$G);if($Dc>0){echo($G+5<$Dc?" ...":""),($yb&&$n!==false?pagination($Dc,$G):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Dc'>".'ostatni'."</a>");}echo(($n===false?count($N)+1:$n-$G*$x)>$x?' <a href="'.h(remove_from_uri("page")."&page=".($G+1)).'" onclick="return !selectLoadMore(this, '.(+$x).', \''.'Wczytywanie'.'...\');">'.'Wczytaj więcej danych'.'</a>':'');}else{echo'Strona'.":",pagination(0,$G).($G>1?" ...":""),($G?pagination($G,$G):""),($Dc>$G?pagination($G+1,$G).($Dc>$G+1?" ...":""):"");}}echo"<p class='count'>\n",($n!==false?"(".($yb?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordów'),$n).") ":"");$gb=($yb?"":"~ ").$n;echo
checkbox("all",1,0,'wybierz wszystkie',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$gb' : checked); selectCount('selected2', this.checked || !checked ? '$gb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Zapisz zmiany"',($_GET["modify"]?'':' title="'.'Ctrl+kliknij wartość, aby ją edytować.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usuń"',confirm(),'>
</div></fieldset>
';}$Qb=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Qb['sql']);break;}}if($Qb){print_fieldset("export",'Eksport'." <span id='selected2'></span>");$Zc=$b->dumpOutput();echo($Zc?html_select("output",$Zc,$ia["output"])." ":""),html_select("format",$Qb,$ia["format"])," <input type='submit' name='export' value='".'Eksport'."'>\n","</div></fieldset>\n";}echo(!$p&&$O?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$N);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ia["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($qb,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$le'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$f->query("KILL ".(+$_POST["kill"]));elseif(list($S,$r,$C)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$x=11;$K=$f->query("SELECT $r, $C FROM ".table($S)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$r = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $x");for($q=1;($M=$K->fetch_row())&&$q<$x;$q++)echo"<a href='".h(ME."edit=".urlencode($S)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($M[0]))."'>".h($M[1])."</a><br>\n";if($M)echo"...\n";}exit;}else{page_header('Serwer',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Szukaj'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabela'.'<td>'.'Liczba rekordów'."</thead>\n";foreach(table_status()as$S=>$M){$C=$b->tableName($M);if(isset($M["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$S,in_array($S,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($S)."'>$C</a>";$W=number_format($M["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($S)."'>".($M["Engine"]=="InnoDB"&&$W?"~ $W":$W)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();