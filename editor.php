<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.4
*/error_reporting(6135);$Fb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Fb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ve=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ve)$$X=$ve;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©–¨a'3IĞÊd«Â!S±æ¾:4ç§+Mdåg¯‹¬Çƒ¡îöt™°c‘†£õãé b{H(Æ“Ñ”t1É)tÚ}F¦p0™•8è\\82›DL>‚9`'C¡¼Û—889¤È xQØş\0îe4™ÍQÊ˜lÁ­P±¿V‰Åbñ‘—½T4²\\W/™æéÕ\n€` 7\"hÄq¹è4ZM6£TÖ\r­r\\–¶C{hÛ7\rÓx67Î©ºJÊ‡2.3å9ˆKë¢H¢,Œ!m”Æ†o\$ã¹.[\r&î#\$²<ÁˆfÍ)Z£\0=Ïr¨9ÃÜjÎªJ è0«c,|Î=‘Ãâù½êš¡Rs_6£„İ·­û‚áÉí€Z6£2B¾p\\-‡1s2ÉÒ>ƒ X:\rÜº–È3»bšÃ¼Í-8SLõÀí¼ÉK.ü´-ÜÒ¥\rH@mlá:¢ëµ;®úş¦îJ£0LRĞ2´!è¿«åAêˆÆ2¤	mıÑí0eIÁ­-:U\rüã9ÔõMWL»0û¹GcJv2(ëëF9`Â<‡J„7+Ëš~ •}DJµ½HWÍSNÖÇïe×u]1Ì¥(OÔLĞª<lşÒR[u&ªƒHÚ3vò€›ÜUˆt6·Ã\$Á6àßàX\"˜<£»}:O‹ä<3xÅO¤8óğ> ÌììCÎÚï1ƒ¢ÕHRâ¹ÕS–d9ªà¹%µU1–Snæa|.÷Ô`ê 8£ ¶:#€ÊàCÎ2‹¸*[oá†4Xxú.k\">º¡AªÍO+,óx\\5t˜Ñ†Ö`\\Åoğˆ%§jÚñ]¸ªnûÈ\\é£hÜ=zÈÃª2\$¨«ÖF[NYÕÎÓR¯ı[Iô±ÕÚ7²¨tÒ”¶ş7ì(áœïÌWj0öó¤æ2v}İò;ïk2ŒĞVaĞà»ñr=ø‹(Ëã¢,³›\rìéj*ºB(Rî2C–N\\ŒÎÿ²9{a\0Å•ÓVR4B¸Ì/zñnÎ6Œ£š‡­íÒ(wƒsásíò¸Ç´B[óøMi#:#ø¯Uáş=M-~±õäãh)¯õ	ƒpŒC›9/,ĞrØ=ƒs‘ƒ˜#BvÎŠM t=÷@–hsÍ…„`k¡óŒp.=S‘\"Îîj“ƒ&5ÄuÑp#YœŸ¿‡úY	â¶~)°s4ÙÃ1naV*æÄTSáËq¤6†\"[Lg†¬‘ÆB\"|À’2ŸQ¤:8Æ¨Õƒ\rVƒ¶4àaj!¼.&–ÎÃƒ˜o%0F9\"\$ñ²DÈ¹ã‰?'¨™2B´AßgaÅkr­'\$9\rØ 6¹`eÏ» diôû2p\\›\$»Ò³ªpØ¾CuFñ›°àã\r[nQËPÒb0iàÙ›SnTÕ#%@˜şSñâŠÌOKÕ(†Aø…3QËÍw2œÙf‚i&0®Rh Fi0ºåv€g\nA–àÄ©iâ­¨ _3ıHãV»Abn …–'iÀtŒªE)ğÚ\0rÄ ;—ù\0g3¡Ì4†‘f›ÑxËQê¢·„éM+v€êEZ\n«LA¥€è ÀàY%¦EA¼“*l‘U}‰N´Fé‘/³¡—§:ë1^†…l®¦¥²•95´Q ©óa4öGl–­ºÕ2¦cÊ\rå@³*¤Ã=bgåÍşÃiàA•© iG²ƒ¯#á8ë 1‚ËøøOÚ¤L#•¦!Íw9Ad‚A¡3€¨=9vŠ‰<®ÅÓ à¥pdaÉÈ¾ºtôéãÉwNØüÍW1Q'Å¦ŸNºp&Äkk\"œhö½’šÚün¡—]ó’€QtêÏm>²æ’˜èHu«±ƒ!5äÄV–âÚ¢`[)\r:JÚg´¤n@éº˜ics‰e2ÉºÊ\r˜ıÅ´q ×’zÁhm\ráè‡Rld¡ƒC.-ù ÖYp®(Äï\r8£€paRtİ0'd¦B¨ú7a¦,Øjè{Á‘ø™3,¬á,h¦µ¤¹%r}O©Êb“.ï”»†åg4òÇ´¹Æàä` <8öŞ3çg\n›gÊùd87ìÆªªÀeÌÙaIÀpåšòÈ.Oí#^˜WóŒÌàÈk%x,¨2Îæ}FŸË4“,î_Á9‹6;p°mİ½t&¢†ğwìã¼¿//ôu£2Í`´ÀàO ë¤îuD‘z^Sf€ş\r*yv=ê%Mu0{pëYl^ëqU¡}uiTÎ;ontŒmÕ	ˆË»+†ï\"FÏw¡¡ß¼lô-ÀyY\0ú@");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n:Ìæsa”Pi2\nOgc	Èe6L†óÔÚe7Æs)Ğ‹\rÈHG’I’ÆÆ3a„æs'cãÑDÊi6œNŒ£ÑèœÑ2Hãñ8œuF¤R…#³””êr7‡#©”v}€@ `QŒŞo5šaÔIœÜ,2O'8”R-q:PÍÆS¸(ˆa¼Š*wƒ(¸ç%¿àp’<F)Ünx8äzA\"³Z-CÛe¸V'ˆ§ƒ¦ªs¢äqÕû;NF“1ä­²9ëğG¼Í¦'0™\r¦›ÙÈ¿±9n`ÃÑ€œX1©İG3Ìàtee9Š®:NeíŠıN±ĞOSòzøc‘Œzl`5âãÈß	³3âñyßü8.Š\rãÎ¹PÜú\rƒ@£®Ø\\1\rã ó\0‚@2j8Ø—=.º¦° -rÈÃ¡¨¬0ŠèQ¨êŠºhÄb¼Œì`À»^9‹qÚE!£ ’7)#Àºª*ÊÀQÆÈ‹\0ŠØÒ1«Èæ\"‘hÊ>ƒØú°ĞĞÆÚ-C \"’äX®‡S`\\¼¤FÖ¬h8àŠ²â Â3§£`X:Oñš,ª‡«Úú)£8ŠÒ<BğNĞƒ;>9Á8Òó‡c¼<‡#0Lª³˜Ê9”ç?§(øR‰#êe=ª©\n«Ãêª:*êÊ0ÖD³Ê9C±ˆ×@ĞÖ{ZO³ıêİ8­¦iªoV¨v¢k¨Arª8&£…ğø..ƒÑcH¡EĞ>H_h“ÎÕWUÙ5áô1r*œ¦Îö^Ğ(ÛbàxÜ¡Y1°ÚÔ&XHä6…Ø“.9‡x°Pé\r.`v4‡˜”¶†Ã8è4daXV‰6FÔÕEğHHºfc-^=äÂŞt™İx‹Y\rš%ö«xe çQû,X=1!ºsvéjèkQ2É“%ÚW?öÃÅ®Œ´æ=dY&Ù“¤VX4åÙ€Ì\\—5ĞßãXÃ¬!×}âæµNç¡gvÚƒWY*ÛQÅèi&ÈğlÃÎÑµZ#–İãñ Õ‘\rAç\$e°v5o#Ş›¢Øü¶5gc3MTC£L>vÎHéÜÃú–§<`ø°Ú* ]‚_ˆ£;%Ë;îÚV–ùi“Àèã4XÃé–'”Œ`ºªÉãi×j0g¶O±†Û¥“iæŒì©9·Æ™Û’dİFêÊÙk/lÅ¸–nÄÜc<b\n‰¨8×`‘H“ëeÅ}]\$Ò²úÖâ í°!†ÀÒÃC)±\$ °šAğ×`ó\0'•€&\0BÎ!íŒ)¥ò˜´5E)äÁàÒÂo\r„Ô8r`ûÈÌ!2ê­TÁ›s=¯DË©Õ>\n/ÅlğÓ‰’•[ı˜Å PÛàa‡8%ø!İ1v/¥¥SUcoJ¨:”4J+Bàó‡µv¯Jü‚\ráâÂb{ƒ ,|\0î°zöƒcÜªÅY§Ål®\nüœi.õÜ!äÛ)ü¦dmîJ«¯ÑÈ!'ÒÁë B\nC\\i\$J˜\"¾ëÖ2È+çIkJ––ñ\$Š‘’âG™y\$#Ü²i/¦CAb¾Ìb‚C(á˜:°ÊUX˜¯”2&	Ç, Q;~/¥õKy9×Ø?\r6¾°tVÊéÑ!º6‡CP³	hYëEÁÓÎØâ£ölñä(Ø–TáÒp'3ƒĞC<Ødc®¸?°yCçóşe0¼@&A?È=¤å%³A:JD&SQ˜Ñ6RÌ)A˜Ğb`0Ú@ˆéu9(!0R\n‡F „•ÂŠ ÄwC\\‰©Œ¤Ï…rÔäÜ™¡î¤#•~ğØ2'\$¡ :ĞØKÁ`h¬³@‰£Ebó¢[Ğ~¡Ñé’â TæÅlf5ª³BR]±{\"-¤Ğ\0è­ÊL>\rÇ\$@š\n(&\rÁˆ9‡\0vh*É‡°–*ÆXë!_djˆ˜ƒ†åpy¹‡‚¶‘`ájYwJ‚\$ØRªˆ(uaM+Áêníxs‚pU^€Ap`Í¤Iì’HÖ\n¨f—02É)!4aù9	À¢ê•EwCİĞ¡˜“Ë© ‰L×PÔİÄşAiĞ)êpø3äAuâÀöıAIAÉHu	ç!gÍ•’U”‰ZU·À¼c¤*­´À°M„ÃxfÆ:ËÆ^ÃXp+‘V°†±á²K‰C#+¾ ÖWhúCP!ÈÇÀ;”[pn\\%˜´k\0„ô²²,Ú¨8à7ã¬xQC\nY\röbÿ£XvC d\nA¼;‚‡lF,_wrğ4RPïù»HAµ!ô;™‰&^Í²…\"6;œå²êÎ=÷#CísmÅJáj`ËŠã9\\gÙô‹\$#QŸèEst/\nĞÓÇ\rœørt\$Yı20y£©ª¤¤KG@–z¡µ,¦x2®\0Â¸›à[ ´=Ğ¸ÂàdkÌ‚@LTæ¥hi±#¤–Di<ıÑùsH¹Šæ¨a¿¤\nr ì­BÊéÆÊ`ÁêzW¶öêİ[ë…që-i­µÆº×šû`WŠr6ânKÅĞmıâã–Æô5™ãAØúaC\nCo\0—g÷Ãr’5\"««\$3¥¼§Í›ßîñÛÊ—t›v\"H4{!°sòGƒpM\röêÚBE¬ãÙõ­:iì71F“\\¶tşÒrÊæm3¦ÀVdœ×–ívîëc/\r¡¹ÄGd_Ë5VøAïtO¾A?B\rÊLt¢>˜%¢Ê¼\$2ğ°ĞÌ˜‡*­çj¸’Z]	a.úÓ×”á>éå} ÈC·.Ù§oIí\r*oû¸væôwOxéHùı&FwŠYƒAzB‹ĞÀñG}Á0¤cTI	¥àQåeG%jTş»TZ.(Ÿ/AÅ|Â]+ª\$¡¿_åå6yÌ¹_ß+9ø»ò#¡ÏŞåX~ÊİgÀÓVâ†éšØˆr\r“x<ÄüGÔ'Ô»Êl \0Ù7fıÉXHQ}Heó¦È,K	Tƒ9*å°LK.[ëD¸¤û>\røÿ'ç§iÂû¦(‚)\"ˆ fş¦Å\0000¦ b¶ò(lãF.ºjrònŒşbJó.—BDk®—Æbıb\rÂ%Çäbà·‚q©˜Db0³PPxÃ Ä8eRDi¸É0“Pv+*¬üFü™–kŞ\$¯âlP=†ŠjæÁ¢ˆøÀĞœ0É¶ü\0òûpP¤4(ƒÇĞpåD‹Ğ.¥NqP’\$HÅ°×&1ÂŠæ°ÌÀÖ48\n€Ò#îFU,Óğßä)¢¾¿ÊÂ äŠ\r\"e/ÌËĞºê”Iğ\0›ğ(€h¯Ep(€f¶ÿo¤ÿ¦	š;»	 øû¯îÿ#¤È|¢¯úÑ9\0€{\"˜/dê·†°¢†>¨B·+v·±|ŸB,V0PâmşH1ˆe*ZoeBÌ‹1\r(øÚ RLi™±œUğÊ‹`äÂ.Œşûq¶–n.Åd€´Â’µT7Q’“ËW\0R±Ğ”F‰eq«Nµ1P×æ~b£*øt‚ÀA¥r›p²ú…D0‰àï)œSNZ6CÍ © \nbHI›!g¶W0~+MGÇ,Ş÷„„Y*ŒHPàH(lÕmÆÕåÆËş×Ø<ñJvó¤]&(ö¥ä\n- š ğÃÏ¨jş¼cˆ©26`Ï)ršàĞ¥JrÀÛ)’œu@ú¥âª\r¬š ‚J£fıc+àğu&VS‹2®ror«)RÁ+@|9²K2½/2Ÿ.ò¯0Äã¢È Õ)€P*å¾È†M^\rbà0\0ÂY\"ª\"ºUx†Ù€°±êÈ€àQ“1\r ~Q@3à™43F³JfÀR@Q3ˆdÀ‚5Ãb\0@ÔFóN/€6â	73w7¢<@šƒãìl2\$ST± ¨\nÎRUì2ó2NÉ«5âD\rä4ùÏ?2‚˜\n\0\n`¨``³Î Y1Šğobñ2³·;#\$³I; ë¢’Ó@Nˆ\"B2àZ\nˆüm¥ à%Àƒëîè€ğ£üàZxÀ[1‚@,Â’’å;Ó> é>ğÓ?#‚6CÄ\0[C…PH ZÄ²âZJ³[;…9CP–ÃºBÅP1ÌôÌé/#vf4`\$Tf2@1Ñ0‚\$X\r“ a´zjD™;“êIÂP’\$´{%‚1˜† è¬ŠÍ1o¤\"RSJÀñK…Í4“tzÆÃ\0·E“>,EƒÄ<@WLãNµò6\n&3àRğdi\0.r óâÔŠÆ­`Q\0003&P€·\0001ğ´NXD„¹Çb‹¬™Èà€î\" Ü©®UQS\rp¯°¢áÑDùK®LÌŸ°\$N¤ø1ªfÀè”ï`÷0ÚUÕHÁñÉĞ»¼šÒÆou*+1KâESWµ.¦é†F’’ãˆEŠªM£ˆ³«i&ª°'T€¸èˆ\rY5–š\rO©ú;\$\"‰cªë¢òìèÏb˜R`m¦İÉú–ĞüôrƒQIieI²³hÙ‰²šñ ÁQj¦ dò'’\"›ö\nÁDYR'T1Iõœ±cd±«µ´aëBjuº¸0—GÌö	ìF\$µºöE³UÏpø6LZTÄë?Âò\$6Ub#‹NÄêdrºÉLp†c+r–erÿL6V„£.Æd h€eÃ>	Á¨á2Ì¸5\0bÏ¤¼Õ\\Ö\0_Zà^àYé\rj+‡]ÒüÏí–æ9WgBŞbŠ€ê\0`#›f.ös'6(J òà\rfŞq	m\nàŠ(l5ó,ÏuÀl\$‡p+ñ\\c\nLö—ÀäÏr½,à¨\rëP8ˆîÁV„\$ ±R/ ƒÃ.1ŒWÌàd·F\$€\\€ë@ëì0\"§tàÊW\"67&ìöhqBavdÃ€ŠI*\$#Åw Év¤9×`*v9wVX\$Vò—öebk<ßVW@Î”Â§6Ä\$FøpDohà(€eW2KL\0P¾´¿+¢3àLRt&W\0ª\n@’ˆ ÛNƒ.Œõœ\"#>(¶»GTËG“]>”jW‚è€r»d—Mô3Nb0÷ofÕŞÔöV\"(¨\nMâ‡d˜/Ø!~ø3pèv5ôƒXE–µ8;>¸> ×…„f8f6ÿƒÄopNUv\nBD„>w/7÷—_rÌ67„<Lõqä¤sÀXª_d|kƒ‡lÏ„Än÷³ ä„	€Ş8.D* P XƒĞq‹xªîë~k‘!£8³—¡Z#¤¿XÊ¿¬'YøÎ²à8*(Á«ô\"L',²Ï-\$­-ƒÄ¿T_!WÈ¿W÷^”Êk‰†uÄ;µÊ®f×…§˜ÌV(²äTôé&öÎÈlN`zNÒmj\nm¤Éz„àˆÏ“ß”ä*BåÔâåjçÀy‹‘ÃéŒVÕ˜z¹M2©B«@öÂxÔ¿V¬Ü†ø× V‹¹´‹Ü\$—ÄW¸”½àWjdÆxÛbY%z\"‚‚qƒB/#òC^²şÒB\nì¹”Vœ¹ÎOô÷°b«oº¾Â#\0…Çª²V¬½˜¨8&>7aŠ,¬FìØÌ^Î'Œ\"Z¶K*6Uÿ¶ºÎg™c¬‰ÑW!ğ æ/!V•Væ“V&}\"qg€İS¶úº2‰vúŠ‹\n‘FÀÆ~Ğ. (f+Uïƒ>,îÌè¶ñ…‘c¦¢4F7İ~å~—€&Y…'6°ÀT­x<â§¦‘tš€¢ŒlÉc\nîë*& ò(«L/cA%2›«•¡Ä4ÓS¢lÀziY)¦–H\"Zß*É.Ï1¦‘€·Gq¼ú…®X-\$…zÉ1€W}¢“}÷â\r÷æĞ×°D½=ŒÒ\nÌ­SD{,\r›0Ñ€EE®¢Ú(›\$â:©z®e9#’`{³{:Õ‹+`Ë»Oq›°q«h~ÕÚ¿ƒ¤ÁkªÛnòÉJâì%DÂoB÷4Ù®úy®`÷¯Z}¯»S°)4(»¨û U9€º9‡'Fù©Ú Z¥š…ª( Õó†mµ‚€");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
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
as$t=>$Ha){$kb=$Za[$Ha];if(!isset($kb))$kb=$Je.$Je[0];$J.=$kb;if($t)$Za[]=$Je.$kb[0];$Je=$kb;}return$J;}global$c,$j,$eb,$ib,$qb,$o,$Sb,$Vb,$aa,$jc,$y,$a,$sc,$Rc,$jd,$Rd,$ie,$le,$qe,$xe,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$gd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$gd[]=true;call_user_func_array('session_set_cookie_params',$gd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Fb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$sc=array('en'=>'English','cs'=>'ÄŒeÅ¡tina','sk'=>'SlovenÄina','nl'=>'Nederlands','es'=>'EspaÃ±ol','de'=>'Deutsch','fr'=>'FranÃ§ais','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'CatalÃ ','pt'=>'PortuguÃªs','sl'=>'Slovenski','lt'=>'LietuviÅ³','tr'=>'TÃ¼rkÃ§e','ro'=>'Limba RomÃ¢nÄƒ','id'=>'Bahasa Indonesia','ru'=>'Ğ ÑƒÑÑĞºĞ¸Ğ¹ ÑĞ·Ñ‹Ğº','uk'=>'Ğ£ĞºÑ€Ğ°Ñ—Ğ½ÑÑŒĞºĞ°','sr'=>'Ğ¡Ñ€Ğ¿ÑĞºĞ¸','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡','ja'=>'æ—¥æœ¬èª','ta'=>'à®¤â€Œà®®à®¿à®´à¯','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','fa'=>'ÙØ§Ø±Ø³ÛŒ',);function
get_lang(){global$a;return$a;}function
lang($v,$E=null){global$a,$le;$ke=($le[$v]?$le[$v]:$v);if(is_array($ke)){$ld=($E==1?0:($a=='cs'||$a=='sk'?($E&&$E<5?1:2):($a=='fr'?(!$E?0:1):($a=='pl'?($E%10>1&&$E%10<5&&$E/10%10!=1?1:2):($a=='sl'?($E%100==1?0:($E%100==2?1:($E%100==3||$E%100==4?2:3))):($a=='lt'?($E%10==1&&$E%100!=11?0:($E%10>1&&$E/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($E%10==1&&$E%100!=11?0:($E%10>1&&$E%10<5&&$E/10%10!=1?1:2)):1)))))));$ke=$ke[$ld];}$oa=func_get_args();array_shift($oa);$Mb=str_replace("%d","%s",$ke);if($Mb!=$ke)$oa[0]=number_format($E,0,".",lang(7));return
vsprintf($Mb,$oa);}function
switch_lang(){global$a,$sc;echo"<form action='' method='post'>\n<div id='lang'>",lang(8).": ".html_select("lang",$sc,$a,"this.form.submit();")," <input type='submit' value='".lang(9)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($sc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($sc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Bc,PREG_SET_ORDER);foreach($Bc
as$B)$ja[$B[1]]=(isset($B[3])?$B[3]:1);arsort($ja);foreach($ja
as$z=>$sd){if(isset($sc[$z])){$a=$z;break;}$z=preg_replace('~-.*~','',$z);if(!isset($ja[$z])&&isset($sc[$z])){$a=$z;break;}}}$le=&$_SESSION["translations"];if($_SESSION["translations_version"]!=-1091545279){$le=array();$_SESSION["translations_version"]=-1091545279;}if(!$le){switch($a){case"en":$i="A9D“yÔ@s:ÀGà¢©¸Âb6@†ñÔàl7˜L‚€Ìiˆ‹DÓ	àÒm:›c†ÈÁÜËÄ`æ“ÔÒs	Nd)A2Ì³ƒq¼è 2ÉgI”Úp:AFó‘¤Îi‡Dè¡Ò9È…€¢a„Üg:˜LæXaÎØPˆ˜mÑ[™¼İ7™„CD\n’t2›f›´âu=ŸÒ)GK\r´Êr½N:Ü¤Å9‚ˆ†pİ:Ií…3¥VÏ™!V'*‘8Êt;Õ\r`¢9”Şm×ë,“|`(Šd4ÄÎXã”;p\n(\\{‘’Èo«›¹óm›GŒtkfS¸ƒƒN	cf#Î\0ây0“ÎRŠ\nE¢AŸÌj\n)™uf3@*Ì<ëêü*ƒ£v6¸ P‚1´+³ğ2¢0c|º©\0#M»ğ:ŒCPË		,#¢¼ş7szü³ï\n62Âƒ\n@\r“Ò2°(;®<ñ|b'¨ì2ñÊİ\$J(î	@t&‰¡Ğ¦)BØó+\"ì(6…£#œ&:,üÂ*8ÈÎ PØÒÁã”†áÄ#°Â6\r(Ø†)ŠB2ö7l\\Eú*‰RÕ\rÉÀ3ÌH8ê1Œjæ3£bDülíG„\n%\n\\n¤!È‚_KÒL ÜÅJ2.ı.nÊ°ôBE8Îs¨@1Õî¸Ó9±ªãÀ0UR¶»/Òø!ì\n—„€(Xì\r4ÁBt£ˆ\n99\$\nøÊ‘\$‰2P•\rÌ³/)Z[j#ğ€Èœ)4Š_SÚ«Šæ¬X¢ÃB ŞŠJµª'Šb A3«Óø¤—Ñè•ˆ#ª£¼7`+–-§ì­“9Uaõt>ĞÈuÛ\0•F©Ä‹UŒƒ_SBN_FÙš*8bÆt§'YæeUjÂÜ90\"DßÁ642;±¢ÊHa‹Y*£²~µ§ ¯cBn½ÜÔ¸Ã!¿Z³#yT¬«ó1íÌò7¥DzÒşÍfÌ\\ïgyŒoŒ#0Í•Ôñï§H;Î}Äñpfp!´£`V1Îƒ×xUhìä6n³İ@7¸0óÂ\$OF§£púJŸiéÜv§Èë9òOOi™ÂstËtË²¢W0—Á9¨çH³êÀÎbcfNÂ±ÊFîNƒw?±\r½@ÓÕl»?Gº¤NJ×5.P4ÀyÎz5ÓÜXÇ©öÃ~¨@#zd€¡XÈÁw7ÁáŞ `’ìÚb?a¡‡¦†6Ú1™\n)?c2z‹u5†)‡VšxKGb\r’‡Z„\0";break;case"cs":$i="O8Œ'c!Ô~\n'Nó!…Š™4›\râ™”@n0šL5	Ò(o:˜ç!p(ša<M±Ãa¹†­BÎÆóa–\\¡Œ¦ÃI¬Şsä#‘Ô@j‹	Nd))N‡#‹™L²šÖ‘%€ÇFIr¤pb«æuÉx)Š½Y\"¡„Äu6Ï2Q\0(”a=M`¢±äÅ:Š)ü¼Û11WÆ“QÒ-H®QB	ñ¸ÆoÄªm<ä ©šjµpQWi;qÆÃ™­‡k:NS/9› ¢&¨ë‡0ˆˆÓ	ÎÌ˜2‰³ÑŒÊ\n!fç)r´S—±T ¢9”Şmäœ<ò™”õ6í¦CIÒG¥Óêu`¢A—roÁCÍ&ƒdpæö¢x¨95/êÖ°\"â8b”)²Ê'3ã‰1C[vŒ\0Ä0± L1\rCŒ=ÃljÂ#sğ79á l¤`¯ƒËø2¡¬Ö2©òx;:ã*0½Œ˜•= P‚5¹Ñ¨à9µ@PŠ£\n\"	ñàæ—·O˜ ‡Çk–ÀŠĞ£ÀËäÌ¸7\r¤²ûK®€ò6dà\rÌÜ22Ê’°Ø\"æ<Î²ÓúPÔ\$?>J¨Šç@ÎhœìÜÏ>¢+\nJÇ„{è\$Bhš\nb˜2Ãh\\-Uhä.Ë\$P¿ó#e(#ÑËv6ƒ”ƒµò8K©qz¶\rãZlb˜¤#Áß&¬p@3\$cjá“!ÎÌ©,³YÁr`€ã–ş\"c³‡­#]Ã oøß<İ67+¡µ-¦†^£É’i*kí{O#³d9\\­ĞX˜¿Oâ¢ÈªbÂ`=¾;^vŠ×âKu3Æ—„t†´‹:Ó~°ƒÔì“72s\"~:£…úÅfy#&…Œˆ[ÔØÃĞ\n@ f¹¹[0:¡\0P¥)-:AëáÙrªR•”)nYƒ&¶3²`©¢_h‹Xtk]ë69¤³L¸4Á‰Êv×'€)Š™ëT0î\0İrÚÕÒ¢‘[Û¶0\rdU 2—¸Ì4Œãªáë/`åE¾0I ß\n¸#æàr¨õ<qlÍC]˜@0z\0ÂPÜŠw`¥w­Òs3&İÈª€ rNdP­Aáì.I*´ZÃz²PÃs—¬ÇnRhrØ·.’J*ÌÒOé×Ìıû5ôdoÖNMEeA¤Ò¿R<pC´qA±«wl”Zúu&¡ó/´ô·ŠÑèP\r}B„TLvâ„ó†ÓÔŒƒïK!˜G	CjšA\r^†ÀVÉàk‚«XŒ!2^pÉóx+’4ãœµƒÒú\rÇµ¯'0@JšQîÉâA˜M\nb„Š)'…¢´'RJ'†Ø¢ñ‘TU„‡¢,2Cˆ„dcL9'š§Ş[ËˆuMd’EJ«B9eğ=ÔÚ‚Y‰/œå–Ã^ûœÉ\\\ræÄÄSNcH±BÆN>=PèSUêxBÅ|Ÿ“RÈu‚q#o‘	R*ˆâ¹xmYÅĞ‡ŞÚ<\rhí&§¸eä¹\rhœçÕÅé¹GöD\$T|’xŠ (\$Æh¸Qº9–°\";¿8Ó€PT~ÄİŒQ0¼Q;É‘kí\0à";break;case"sk":$i="N0›ÏFPüSa®ŒFó€æaŒ§yÂr4›\rñ	 äab©EÀ¢i„ği6°Ô&ÃtB(v7›¦éP€ìeb/fóœ†	…œ¢Q”@%9¤pˆT2\"e2ÉÎgC­Fp9JFH*i3šf’°Szi0×(ÇC	ˆë95db\0Q(Âz<šÁEcÉŠ?!SÆ´Û6¾™NGJ5¹C='fã¼ìi2šèç:]Q4Ôê¦YUŠ¾ÂŒ8ÉÉÌÖÃTˆ‡“äÄFaNfÃ(‰*ªaâDi„æ\n)d7s”B±JUÒc\0G2›Í¦S¤czZKM»b)Òt†`Mç]>§W8_‰]Ù¿4%G3Lú\nƒ“Tı6*ÀÒü¿i›0	Ì²jŠ#M8ÖŞ„£ @1 ƒ \nÂğÈó\rÂĞÀÔôÀPòúCsìÁpHEÁŠö<	ÊÒ PÖ23#zr›¯OºÌ<Ì\0˜”<àP‚5ŒkDf87QÀ\"…£hÂŒBxÈ3\rãXø°C(Èí‹Ü\"_?±ËÂ£CCm-'ã\0!&!+8Œ)¡z£ÂÃ,«+p:\rƒLí-·sËa>ô¬Œ®TbÎôLô1e@2ÉO	¢ht)Š`PÈ\r¡p¶9V»,ŒABş0ä V¡éğÈà7£cºƒ±I¸å\"rôôÙ\rãZfb˜¤#Áàb¥o:Œ3!ƒhêı(hõ5Iµ[pRŒ¬£Êü£c°@Š;Ã Ö:©o£ø7×˜ä2»crhØÛÏâ 1)ò^˜¦m…ò9ßwèìÚVÀÂŞ—ôp*j20Œ0Aq²Ã\nF'Y-^?.6K&¨ÈJ,«,«:Ò‰õl0·øİ‰ÌÂˆ£Q\n á•´ëBÕ‘Şh­é’ÒôÎu¹ó\n\n@R‘Ğ—ó2Á¸˜l÷+\$éJV7:nÂ:i©‚e¨é¯Ñ[j‹C±†^Ûf@9°¬:‘Íeml&Ïƒ^ØŠx¦*ùB¶n˜\r±mq¶\0A‹İ¨Øõ»ozŒ4\"±R¨É_ƒ2À:£ûÕÆ7øÖ:5;NşõLğœ.˜¢œ¬¬|'	`ıÇ/×¸¸Ò=j	W}ÚŒ*GnŞ&Ó>P´ªÀÂË°6•œ^«ŠF,½a\0Ñë¨ÑV4Ë¦C;éf¨à‹oC ĞĞ¶KjdÒÌóH*ÿ)ò\\³]Hd¤ùy—¬İ…\n˜oôR¹w¢ÚI>‚=‹µ@ÚRCˆB&ƒ2óÔ v°<‡b\$ÔIC;¡°†µ\nÙûz%­ÄÂœBvÆ]yQj`æ· ôÀSK\\N¤¡z\"EĞàz+G‰A(E\rdFeq&%†ÇT˜ Š-ä‹Õ0£\"P¡\\qYN Ú[ÉÑCcäHŠb0FŒB»W¨å÷÷°^A¢hç8+3±JGM²adl¡˜ÄFFİ\\\ræÍ¦ÄĞŞˆª21ÕëÄwIPnB`(Š´Ä€PL\rå¤±yC(Ğ°m!Õ¡D,½Vj g-(¸Ë'ºe€QÍ?IíÎIä¶^‚Y\\‰H\"‡ˆŠ‚Hm˜åñ‹än¯œ²ò-…¸¸¨#9p7¡JZ`«ÓI6[p€";break;case"nl":$i="W2™N‚¨€ÑŒ¦³)È~\n'›¦ó9”Øi5Ä#)Ìèa7C,àl7˜L†Sp¸M0\r&Ó©¶Fo2ÅM†!º7ÈNfs‘¼Şt’\r'1\0”æB—¨	¸ÓŠòd¸Ù3‚ç#IœÒn€›Dxú?6Wå ©qPÂaµ[G#©¤×k2Şï±¡ˆ€í ÃÍ‘Zà€Êxœêç1Õ4çQ©Ègñë¼å2eğ+ô6†e•™¬æ–®+‘NÜ~ã,'“\\uº0d!qàQ\nÎa4çÄZÌ°æ\n'@ğÛı°ŞmY ¢db=¸\"™\r'Kù¥9Í×sh(®a1š‡z1Ë€I7JøÎ,\\Ô3¸ÜŠ»c€'*ã¨î¥\$hJ‘CÊHÁèÜ\$Ú- Ü7A j„œ@BÒp†\rËì†¯\0P¦±¤ŒüR©6c’ş Œc£&	qØŠ®BÔ+\$‚¸9:càà§\nÒrÜ8ÃRvş\nÈj®E0¨Ë HL4¬­¥il(‘KrÒ6)‘Xä=L\nè7 P\$Bhš\nb˜2’\0Ú‹cU5 Pªñ¿OâØæÊ`æ‹±ÊÜ\rƒ å!³TŒ<C8@!ŠbŒ›ÅpA*½# ê:H23,i¢.†„xà«°R]C”JXå£©ØÂ3Œ‰p¦²Hè@‰ Uú*øGQ[^„£˜«Ñã’¥M(jPÙ¥¡ÙYÅu­oÁk:F’×Ëš#N,·b(³¹ƒ,WF¥Ëe~Ç²*»g\"ÔêJ(	ƒÈ9Ì›6ø¯ÃïV…\npR—&	’h›@M´½Wèã>¿•5P4(Ôòœ—\nx¦*£\"x0Û—[–¢¨ù¨¯İM†I{-(8Ò‘eÈık\0MY\"(6\np@1«mPÏV'Šº\\\$Á²ôßµú«\"£€ÂkC(Û¥<’|b3Kª¶„ Õ7#z\n47,6 í3ÉêcÈ“h)(è4)iÂ1+ép8vSÅñ°{«%uj9µ7‡i{Ö›ŞÉÄ¨†úÄdB¯Å\0¤î¿ÌpfÄ¦kƒ.½°B,6cZ.VÌu~;áíƒ¯¤¨VeËº“t+·JDŠ˜exÚ8Fìv;w†×à¯¯ìë22&#ÒŞ‹fTz¿Itşdl#5¾–8’-¨¶‹ÓÎF\rÄh? Ö•©6%o)âìà‰+¥\rAéx—0 °Î8\nXAĞïÂRx%K,±’V‚]A\"mÏtŒ‚´mÔëm#¡ÕJ™ÓrI8iohPğö’17%ñÄ&ŠQ1Wìå—°åp\\9AJ¢‚mÊd%€";break;case"es":$i="E9jÌÊg:œãğQ8Ş 2œÄyÌÒb6D“lPät0œ„ Òv7‹EC	´ÂÃXÃÍ°3ÄrdI\$Òˆ„HJs!Jˆ'),n‡™f°,¨Üi7Økª@(Şr4™êd6“K:MÂ	`Âs•D“!¤ß.NrQB® 3e#¬@u7D²Ï<XMÑcyº\" ŸĞ¨“¸yçJ4Ó%ECLR%83T\r&H|z l¿œÎ²t6¦m2Â`¢1–K‚<ˆ\rs(†aœ`AD*İ`Ş\n)L€¢9–Şe:˜jİé33 Ù‘m§J½ÇU¬ãñ½9–aÕ7ÖÜÍYÈÉ!üg//u2Ï95¨(Œ\0Ä<¬ L@ˆˆ<ÁJ¨H…á g†-ó¶ŒcI†Y½m ÜÂ Íè÷,K£¬6#  ŒpÌ6õ‰¨«È9B*\\4«¢ ËµCs¹Œã’º# ÔÀ;ÈÜ;\r+¤2ÆíBÅ&8	L\r\0Êp‰JrkH´CvúB@	¢ht)Š`PÈ2ãhÚ‹cì0‹ P˜ôã¬T+3-XØ4Oƒå,M6: P¦ØÉ\$h*\rãZÄb˜¤##rZA´p@+?`ìÁ2ò\\š‘\rˆ«0É,ÊÔÊ¸Ú:°Î2T)«.šÉ#\nUTº\"\$C@Â1GK€Ã°È’Æ1Ó‹Eì@à4¾xX‰®ëÊ÷NÈ(Š4Õ>,0ì0ƒsğ”%KbÄ:\r-Æ0Ã,m:;SõòT‡7Cr¥1V¢¨!\rdÂ°ø\"Åj1â€( £z<=èPŸ…)ê‚-£š(§£\nk|0ÇÕğ@™”)ª]…Şèí\\861Eé/±•E-ì‘\\K¸Â:¶C!0\nx¦*Uéd—\"Ò¨A å	ÅDäŒƒ¨õ{´ë\"Z—¦!¡è«ÁÛµéSækB„>‘t9£¥OÛ®…4èâ·P¹>î™\rëmí*î»óú7§ôêğ€TcÁ\r7¼i€3\nbÇ!?Š*•3îu„\nB&¬IˆÈÎÇ»‹øà÷ìÃ¢L‰,¨ÊT#½¯|iÚ\$=°@ÜĞ÷¥Üøgi>ã÷wÅ66FÅÍF´PÀÆ;¦°©Íµp’º7ê1ã®1ãÛ|èXÇAŒx¨Å!kµ=Z‘	.í¤5jUóú7™q•´ş\\9#Œ]*¦(DŒñ#\$Y›eòô;±7¡µÀ¯W\"]	ÀsgH|4¯4vrL4AAUz>‚4¬È€n„+°AG äˆ›ò		^¨UX«™ŠÌ|A@£zTÔa6OA¼à0ˆ†pYW]ŠÀŞ¿‡æŸüO6@)!¥Ô‘#(ü!ª× CÄF%ş,ƒ†_aƒ¬UÊ^	2XY›ë™Šgig#¸—À";break;case"de":$i="S4›Œ‚”@s4˜ÍS€~\n\$áFÃ	Ênñ‚!„èe4ˆÆSA°Îe9ÄÌ2sp¸M0\r&Ó	°AŠLQñv>i3œ˜kc™Îi9S™\n]>MæT“L2”n„š’ãa–\n'œ¨¨(— 7AŠ†”Ù]–‚„\0¢™Àäa…AD(¹Ôèz:›Œ÷³IÒyh‹ˆ\"ĞÚ†òpÄÓÓuøõ§Çª&Z™Òªr¥JM¹uó+†bÆh~xTÇÅÁE£—e>:›DüX€µ :lä“q¬Ë†Ù ,5!ÈNãğÃX(e7›xö+Ñ2‘7ˆ¦L)¿¦ËWÊ)ßÍÁ&ÌğW¯Ûïƒä+0Ï@ê†'¬ĞÜ9£ÃĞ bò0@A#ã˜<¥\0PÜ7A l¤8®ƒ«ˆ-£bª1(\0ä2-/\nø ¢ì#[<J‚0Ë¨J4ğˆ¡jh4€P­/ƒ ä2ŒÃ2 €°1†^%‘ Ü49Œô ŒMã<0pË!2 @¶\$òğÇĞj1Èc`ç3ŒSJ/«`PÔè¸\"@	¢ht)Š`R¶6…ÂØÕEBìh1;Cb,ğÇS8ê9îclğ’Rè†Êø†)ŠB0@*\ró\0@ÀŒò: Ğ{\n<ˆ0Œó\r£ª)ÀI¸ä´¯Ó¤Õ0%Òå\"2U•ğÌ7¤ÒZ²— ıXÄ²šŠÄŒ1°Ò;5È:Ñh0±Î9Œƒş†ÍuÌ‘Ác'Y ÏàË`Œ#uÌB«W3É8@ ŞËr,‰#u–9&‘¼Z—,è\n\"N›\n†ZhÂ¤¦±2¬³1T\0À£ã’“)¯ï\0@(	€[ˆbY*\n`R;èËÌ4^´šª„	¢dš&ÉÅÌ Ø\0ôÚ¦Íè@¬¦¶äHRÄä%µ“¥Îhd°[!kˆ 'Šb£!\0(#z‹XŠC-=3ìJ\nÅg‚:„¢(ÍÛ{PJ\n‡k×è&yI„º­¬fˆÃz%£m`Î:®øS2ğ@‹şĞ·oèTór£×/,±|ÜÎ²CD :¤ò”©<˜d\"şc˜tğ%ÂÈŞ:„ÅBBáímÈƒ,Òƒ}V8\\©àéÓNc¢Ø®ÚÒó_®’À°([\0-£ä¶âo\nêáúèÇ³Ş9ˆR’ÄôÃt£)Ê¢(Ü:\$uûe-\0Òã&Ël”Òjøi(6°Ö‰“[f7(<2½çÀÉˆ²spÆ€”äç+4\r¡À÷šäÛİÌ5\0€;¹Làãú*ËK‡vÇˆikD¥t‘BLJ	RUtÀ¶>´z@€Sm\"Œ(ä—ÓPF›„;Ç¦Üa[‹Š*¥	h*§Ø˜\n+¬”î†ò*@Lñ\"¬ôóg’P9ƒı7;2.á—:Ä 0†ÖBIÃXBA,6³dCÄ)3Ä0Ù˜7d#âDD-ÄªrØ[‹€\n†R@½9Èâ–Ëy‡jü";break;case"fr":$i="ÃE§1iØŞu9ˆfS‘ĞÂi7à¢I´ào9œÍ&#a”@dšbÆøl0A&3A¦.\"q¤Ù(6˜O# É”Êå°ÈLé	Nd)2=*–KB\n0‚ t9AÎÆá–`v4ÏÁRCI!=N¦3©º=®Ì“	¸Îu2‚Š§I±¤çŒ§Y´tô :ß\r—é1°OmOè§ˆº4oË)TÚ}\n¥TœàS¡äá@ÄßNfÔä\n'Í¦#”DÖGŒ´sFj\n!š,5u¸æ\n!YÍ;^9I†©¿˜N ¢??eÏ¬K¦7è†‰2uºûŞ«s®Môyø€àaŒŞmGMéºùPÖsœO×î•¿,ÃÜ†'+sì¼¶#¨ì269ãhÊûA(È\rã:0´1\r7n8òÛ\rÃx¡xHÅAˆ)©b5ãrB‘¤°Á†\\B ä©;ckÄùCOĞÜ\npdb:88åÁºò)£SvŠ2Î{j×ŠI†T!hHÔ7ªí°Š7 Ñ_BHÈÂ3£É›°çª“@Ş<¹át;Í­\\à„³\n<æTÎ³K9¦	ÌÊ7.²`\$Bhš\nb˜5\rAxÚ6…âØÃOŒ\"ënçŒlÂÜ¿bÌ¨7ªš:„Œ•3Û\rŠÄ†Ao@¨7p˜@!ŠbŒ«M	êÂ¯›Œ¬8åYÎÓRN§¤ƒhê6!íª`µ\rªå„Á°¶h@0È°]\\ /èÌDV÷t2ƒ—Y…sr°è2s¿°›ş“e\0AÁC+¥mà/°Òü/H4 õš`\"²›.ˆªêÌ®#¯âØ·)›+¡\"€(˜ê8\"èmf„…\nPSƒ„ê«Â9¢ãr6³˜;dÚ#ÉÊwk\rªBá\"Ê+D¹ïz3<Ù7%˜ÃºC<%ªlÛoY*\0 'Šb¢h¬\0Î9.¬\\9ÅHÈÂ/ì=°š!öfJì\n€kXÍ»«hë]¥)Húê„îõ(Ü•.ûf\"ˆ½¹P ¦„ğ|#\\ğqR:N™va³ÊcÌ•0S­¨ó—?:\r£{Â•tÂgQÕuœO]ĞPˆ€ç-tÏWg -Y»CÚèpè˜;û…èOt~°#³úh7±€ÈÜ¦‰j¸h\0TÎÚ¬Í·ñ\rÃ–Şİ¡T\n ¼*n{ÃÉıR¨£÷ÒÒL8+)b‘Â*«]9§VçÛ°vL=/\n”õ]K›>Ê\0û9çx‹ÃPäÀ!•€Ø\nÃ‹%àÃ²â¦dÑ=7Ç¹'rg`a/B¨\\Å†vI]ê8w…y=’rÊqÄPeZ32`EHºî+­)ßº”–‘‹r®&o€¼ÃT`\"¤+%øÕ¡D`¶™Ç<¦-º­8|¯V*@Š8xÔIˆXt P¥Ã> yy'áÉŸ%ó~xa<%Ø˜ÈøI‰¬0ÎC`Ëa©ÆK<è<“XKá€a°Ì0ÌH¯‰’P¢ôb«Q£Š3*½¼Óy	üÛ+³ \\W@";break;case"it":$i="S4˜Î§#xüC0œ &i”Üt7ˆ†S`€Ìi6Dãy¸A\n:œÌf˜€¸L0Ä0ÓqÌÓL'9tÊ%‹F#L5@€Js!I‰1X¼f7eÇ3¡–Lv:›â\0£|(Îi7c ¢tDèa1E#2i12°g:˜AESªÙ):ÖfæÊ5*›-—›3ã\n‰:¤Òé¢\n»\rA&*N¸œ^ôtÆV‚s­Ş›\\:Ãa@¢!†¿IUmE3¤(Üg4AD*Ä\$Ò\n)räs)¾¥4Ú¬ÔÍQÉ\$ªÚòÚ¢„Ìæwª™D¬; c0¯:¢a¾¯8NS#w;TN¨¢1C,²¦%2Gšh'ÑêöRGŸ”p\$‹Äƒ?ĞÆí:\n¢ 7#«T'Mú²“¥i#T ºI€)¼Œ\"…©’0Î-BxÎ3¶J˜’–»CJD×ˆ+ Ê3³Í|F;7 SŞ2Ã#\n0+ƒ<0…ÏsÓCH¬rÜ©©0Â‰¦ƒx\$	Ğš&‡B˜¦ƒ ^6¡x¶<ËƒÈº±8+DËHØ4CÒR2E PØÒÂnĞìíB Ş5¡Á\0†)ŠB2ÊĞÒ2\ráp@ØÈiHØ”¡CĞ4®Ñâ×³ã(Ì3D+K>1©˜ê1ŒjPçB¤èĞçQ/,`Êñ#Œ\rN9#K0’3Êtâš:aE#²£X.j…IrT¼5 ‡X\"cs¥AOá3¢i4Â»¥Èêö;…Oa«•ã5¬HÒì‡[+Ğ@(	…t:‚ª¯°aB~¥Cä½IÓ‚^+Û 6±t0 í\"ÃÅXXËœ„£Iış7à(”[i77X)Š”0¥A xc\"È48kÍˆZUXŒ…cÓƒr.´Ns‰LËÌñÌãkZ’ç/+œˆŒ0ú^9+:\0‹hiüq!Z\0š7·è¼'\\K’­I#xê\rR5VT`ŒÄ˜@ˆ„ØÁ”~Ô¯ŒK&­P;¸Ù—£Y‹ 7-;Öù§Õñ2G¶£ÊÓK%ipl¡£ó,ŞÏ\"9‹+	ô¦!ô(È!T÷'¶rÑ3ÌÆ|ã “Ñ´ôÒXÇ3Œc]ßÄZJÒª;#@6êƒN¬„•#ß­Ç%çÇ¾8ÒÔsPåzVĞ¢3#Hšè”î‹Snr)\nF¯^ª…Êœ2f²í5ë|pŠÌãwmóxHXAŞ÷ş†Ã)v\"+Mİ’cŠuËPuMä¬İôYÉ<=/†6òÔó‘b>r/@‚šA‹¢^‰(!¼T.¾X\n	/Iò4\0÷×+k,•:Ã7¶ly©MMóÖeH€";break;case"et":$i="K0œÄóa”È 5šMÆC)°~\n#M&ÃH†¼‚œÍ†	Òm…D\$ˆìÃZÇÌ1CX¸M0šÎr©YºDf‰EgS©ÈëœÈRèŒN*eŠÁM'C©’\\t‹š\r £yÈÒg…G\r€¢¡„Å\r¤Aé\nU2œ\n‰fXmªu:AE	YÔİ·ÜbËÃAÒÉ2ÂççC)ÎıA¢ND£©ˆÂ 2Ì8keXÅ.€Nî&£\rAy1L€¢qÔÚb«N Ö©áÁ†¤2±xó\\66a2™ë™6ˆB¬˜N@¢´ äk\n&ÇC½TÖ)Ì¦óm°éV¹2gMñJ\r1:UmÙ£pİ©İFø (˜o¬&g3™”J×Ş¤±V†=Ì›h4CSì ìr–ÁîCË\n\rÃxÁpHCAˆ'‰˜;#@Ê¿\$ˆ()ª¬ Ê«.cL¹\nËbŸµ‘ \"…©#µ6Èhè¹Œ©Z\nl›\n¸¥ãÜŸµbš82.R’;©¨DÆA—\rÈº.Ñ‰@t&‰¡Ğ¦)JpÚcÌä<‹¯sàŠ¤å ØÎ8ˆâõ'«|6:ñ\\^;EñXŞĞ¬èêb˜¤#‰ê»ÇÎââ3¤Ê¨Ú'’XÒ—8³Ó86NïÚD”\rÉ³Ÿ¥Â›\n™½:8H±\"’Ñ«#G,õ“è4Ö¨îÜë²›JºÉ;Ó•\0ëQ>L›ê—¬pÖªLŒBƒª³ˆªJ³/ãK20t0åD*ÈSU¯Œ#âğÄö\0@(	…Óu°r[’ …)r`ÉQ©ªL×Ïr½Ãw¯h*â³×İœ§·XÃh±˜)ŠmÅ¤Tjûc,‘’V¿c–*º\r‹°A<ÄÈ^6‘dmf”\"¹n5^C@à¾²¸èÌ0k€ÃU\"Å­[%Ö\0P«iæÚeYW)ƒ›1-ŒªPƒ£^W”vJ‘]¬ÈĞ\0á´µÒ\\,ôxĞ0Ñ*‘ªÃ²' O\r@8JŒ @:*\\\n¼‚Ö)]ÃJ¼t–Ç³Œ[ó±?©àèGòÙÇ¯\\ªuÊ5ãÏU5•|˜&¥f',Èğ3E.Ëî#_Òë9/5Î7”ƒ®6cZYÈ#b\\\$© ä;’ò«J‰rº¯¢™šVô&Ìƒ«ê˜6í–Å»¦Ñ%	C\rï«GR÷‡2¸w‰’ğò}üÛ&Š\rÈJ\\&±0ÖEÃaºoÄ¨›'b:BÑï#§ôª’'\n\\kĞF†½uÄ²S+à}E©TğÜÉ“Ê#À)äB\"¦ˆ	™>\n=‘˜âvÊá^-¡HÑR^øHC<! ";break;case"hu":$i="B4†ó˜€Äe7Œ£ğQ8Êm¦C|@Ìe6khÌ Ò 0ˆÌ5	ª2.DÓ	àÒm’\r0Y”Ù0TœŒ§A\0–\nB”J¦²a* laªN†SÑ¤×(a¯'G0Q–tdša¦“qP˜†@‚yŒDƒ	Ìôn˜Úí¶ù‰ªBa…3Ø)¬ÓK9Œ¶èÒ¤æt È¤”JE*™N”£‹ÁCHYÇãJÓÖ¨S=I\r ¢\$’%¤ÁM&F*D Œ¦pT,r™Úæ,5™èÂtÌ±YŞàÂ\n&LÎœ}X×ƒkAY#fRİ–Ì‰Q‹vók¤œ5 ¢)·Ï=„-)†š5Di4³`(JdƒbÎ€Ÿ¿æJı¿£ô-\n Ü7A l¤BZ¬Á¼pB9\r{ê)ãÄ§Cr°Ğ°ÀP×©€&˜¥‹d6'pˆÒ;&+šÀª¡jX4¾® Â2;Â¢H9ãË¾î—C!mü4˜#tŒ%ª#d¿£,t0Ç05Ê£#d?Äµ’ğÙ0’´Ç2ËÒÜ»/Ì36 xŞC€à\r­¶<ĞƒÈº\r¡pÉ1¯J*#“–6\" R3%9£“e%dM4¤ÊO¢b˜¤#\$ĞßfZapA*M£#ğa—CPä»½Qhä±{×©Ğšû<-K6£pÖ0¨Bv2hPÖ›95Zö„ã,®6-Ód9ãdÓ!#HÊ”	¶mŸh¡Iä`5Hc X0W`èô=H8A\\WK#İOF…MBŒTqüœ§«jíÀ0L#Æ'+Šô½\"ÍJL0µ¯‘C<òpè\n@¡t/ê¶*56Â|½ÛTJR•¥©zb™¥jcZîäv:œ©c%d'6(ÃñhŒòğõj'aÒø”HEÔÒ9öºB(	â˜¨øCRU¥°ÖçÃ æü/V'	Ó}°Ã.´_¶/ˆ0Ê˜©zHÃ±;š0ùÏb9;%\\4Ò37[WÎÉóäÇM(<‘M`ÔËÂb8Ö™~¡pè4dŒ¼«§’P,ã¨@Ê\\ğ8@87´xÙ°hˆŞ£†Â¥¢#Fxå¬Wx&¡*©æm9b·9Î‡œ‘CCË—¸ş‡¯éW-şıÍRÆªï§*â—“ÌŸSçÃãßrvÄN_ë´şé@†ø+dÈ1­uVH¨a\rÔ2»âVÃ iÁäòPZÀr‚¡µ`©\"bİŸ‰øƒ0n–\0Ù„#%ğ–°bD‘\"ùtlCq\$%€±`õ“Ÿ @(¯¶ÎBR<„1†“¼[¹1o‘!=wŒİ—øo4\"„Ã´åFÇŒ*×&ÌŠ94nIÈz%i°ŸPê@Ãb­g 7£ò¸mduihv¼3ì)2Ng\$ÓÈ*µí¸ŞoÜÇ	fa‡£È!(\n	0qÂg„V31‡d’ŠÖ‡Ãså”…ŒòÜ¥îÒŞÅG¬jC(";break;case"pl":$i="C=D£)Ìèeb¦Ä)ÜÒe7ÁEs9ÈÂn‡ÂÍ†“YÔ@b<±PFñ`Êm7±W‘³¹”\\\n&˜Mg3É´Âl7Dã)°×)M±ñ¨äxé\$œÈRò„l×%Œš`Òh\$¼àuƒAF#)è@z6šbà¢Zt0×\r’ñ\0(”ÄLÀMq3ÉŠr=Š#yÌõpeGšÊd7LòJõğõ~2Ş!AĞ‚“L§@ğKÁHéT—Š‡“„6y:OÎñƒY„N:›r'“ë\n\"mÑÔÂsÑftymÓ99mÊpú(e7ì‡+(™<‚ˆ¦MA¼ä\n*àõ&ı\\pHßÈà¢ÔÜŞg:š„3MÃØa8l7GÈæ‚O°œò C“„ï€PJ2#ãÔ:0\\0Œ1AÃ¡†YàRĞ¹¤ÀPHÁ i† P¦=­hÔã ô‡§ãbx¹ŠnğèøºÃJÂ:H\0ò7\rÊš8\ríjTí©°Ò65ãÈ0ã\\*\$íÓp7Êq{Ú‘„+jÖ\r+¢Åâ¸ò9¤Hº‘²hÃ'…ÀLÕ6Ss-8NRz];Msl‹=„Œœ¥è:,¼‰@t&‰¡Ğ¦)C \\6…ÂØåMBêè6=ñà¡\$Œ)PA)¶ãc§2)k¾'!ã‚,‡Pî(ãZ b˜¤#Á\0§YCcâĞ3Ë\n3;Ãhê6+Â7È¯+C5TXï=IjBM§z_5&Ã:. ˆ0@7ŒSÀës>p\0Ò„€(%âœ\0V÷4ğ0…ŠûÜø?Ï©3iÚ©2_Xµ”¨4Ö©[S¢ã(Al¼ˆºÄ—¬©@Ç2’0×¥Ü¤Ä«øøŞÇLZb—­îÀ¥	RX±@3h4ZsÅ–¤Ï\r”ÃùŠ\rÙØ@)!J¡‹]#¥N¾‹€àÄ©ŒÖ¾6¶¢H›&iªn7L8¸ÒÚŒL\0á\r­a\0´‡.	š¼Ë¯L•ÿAI¤23i%QØ\"ĞÚª/×XÅ\0“*:Âïãx6£¿¸;’¾°¢&ŸÃ0Òø\"Ãò5sL°æ—ŠP8åZ¥JA0#˜êŒ?ƒÏQÕurE\rqÚn4õ¶Ş“Û§ıZ’¯÷]€É.\"ı³´îGq~:§ÀŞ(É\røâÌÀáÖ¶a©Ğ®àÆ5^h;ä´-S+Ú8*JòÀ±i/¿ÙÂŞ|àé!¶;Úq—ÚoZ]\$¦ıª‰–®vB«²f±Ì†¼¡ªN®‡Àå„ ‹«vÀ&\n\0ÓàÃ¸{¼!0Ø\nÃYN#Ém‡'PD;-\$	œ¾º¶Ê/„/Yäg^À‘òH…Ìeá¡f>î­‡ÄŠ\$§0Û#N°í=ˆzZT@‰èê\"8^FCªS‹'Ñµ.Â,ãke/ ¦Wöô@Q6\r•œ†3ÖêVƒã+G„^:6Ìˆì6|kÎ¹x*}J'kFÃ”TtÖ¡®uÆ}2…sjjËÂ!äNKŸÒvÁƒtií È2\"4§B±QÕ½€­Ë³.'eù5š™6¨p)Èğ\"“8 ‚L[…ÅĞ¿\"ÔNØ°w–„5¶vy#Èh4E¤šã®Ú	Ô§•Ğuï¿pà";break;case"ca":$i="E9j˜€æe3NCğQ\$Úp7œÎf“°Ê 0™\rGSqĞÂrM‚1¤èx2œ…À¢a„@m4™%ÆØàÒm—%&Ó)Î\\d‘I\$Ò‰\rS §2¬‹#’Éå\"q¾C6€™M'‰Yˆë&ÎF“9¤Üa6‰ÕcA¤@h—Ì'xêl0ÊÅÓ!¤ß8N†“d˜ôaíÇX)Âğu¸<)Ó’³ˆ)1h)”ğt2›¢fı(çN¨Pêf©vxÓY­ÊÊ†“†356	ñ‡Xù¦Õ1§ ¢!†< ·,X‚gCÃ!Y· ¢Ä|ñˆ#™oæS¥LÂÖN`¢-ôébß›s[£òÆ\n!é;¦9¸óˆ\$›&3Lºğƒ'¨™†Y±0Ó„	Ğäœ\rÍèß©\n,# PJ2òĞ0¼3\r¸cË†ªA j„œP¾	Jä%Ã‹x6 ã°Ş‘ƒ`Ş1Bxä ,éa†V¦x‚1¿\n‹Iô‚øN\"‘£ºa–OÔx\" P‚‰¨{@†´IJ´<KÈÒ8ş4Š7Ïë®	àşŠT01¬R”%*ÊòËö\"œè0Ó´âãOAù(Œ­´©+RÄ´ÓÆ“\$	Ğš&‡B˜¦ƒ ^6¡x¶0Õƒºâ'³àİÊÌ@§IÍŒÊd <cc»SˆÈô\nƒxÖĞ„¦)ÎDà°£ \\X£“2ÖÎèü\$’,CjîŞ¥ràçYA©´G¸UªVæ¤q’.°hJİ&…B\nÜ¶ÊJ‰IÔÂ[\0_DêÏM4:2/=¬—%Ë3öşAlÌ//ƒ… ?‹B\n³Ö‚cL9«£<Ğ4P<µ­îJâ¹¶á8«äJ(	‚7¢;œ‚…\nXRÍ5èƒôŠŒ©]\r:¾ƒœn“[j¨Úà¢é¡@›=JJä‡´áò1¸P£¥¥bbzÍga\0 'Šb¢\rÑ)Â\$—ôÓEiŠC(È:ÌùvÇ]ìj²Í®ºóüŸàÔ\0Ò;'è½d’¡4Ô’Y´Ú5ƒ£„¦72¦½Éi´fÃQœÌ's˜lÊ9#ÓÏEÀÁÛÈó1BÚ·åk£„² .V,ğŠà;\"ê¬±Î(°Ï±¼ìà™4ªÚ‚£Ú%Â±\0!;Îì“Q¬äYÈ;„­Ûh8Îa—sÊ¬iâ·9Î£hŞ¾¤«”ós]%Cí¿˜ÒıTcøtduLfÆGIİ\r€¬1˜PÆFÀ qè ¢^ÿ GN”äòÄêTk·5çu¢¿²à¢I»9„z;’zJÈq_\0\$År¶ùv/\0)í‘åH¬M\n@AíÔ¼+“Æ`Œ# eÀœĞ£Â0Å9ë{n=•7äıÚÚ+¸€Á\"ĞX‰XP/	™)4Ky,Á4˜.p›\$>…„\"œ\$:†!l\$<gœ:ÔhíWÇñ„4tB(x…Gâ:ƒ˜‹‰ûeY¾0¨Vø\nÆáW¸NQu\ráĞ";break;case"pt":$i="E9jÌÊg:œãğQ9†£7ˆj‘ÀŞs9°Õ§c)°@e7&‚#\$8M'cx¸T0›L&ãDDÛ<M±\$œå)•Äbb)Ì…. ÏåRÁº2Î`&YqØÂz4›ÁFó‘¤Îi7MÚ|~¤t2›DC	Š:a9Ë„\0¢I’³2Nr@QB¸ 3e’S¬@u™—5 İZ™NtKˆ*“@¦ vcMN\\T4Å²fC)šÀiÅc±)Ö]­C—FÓ,(æ\n\"m‘ñÔäaÌ:K(…`×ÖAE#.G2›ö‡Jï\0™¶mÈ·c¥ròs×(v\0¢œ€ÑÀ\"›º—ÂŠ­%òÍ8ã}3™_€ÂBS €Ä<­\0Køÿ@<ÀÃr´¡xHÁÁŠú…hJø”¬IKj\rƒxÆ±Bxäâ/¸Ú4­±†S©ï\":2ŒjÊÂ9B(Z™\r+ˆ2²ÈÀêõ+BKÚ1 ‚7*(¼j¤q¤´Œ1Ê?&8ilşÊË&\$R«*0Œêã€\$	Ğš&‡B˜¦ƒ ^6¡x¶0ÎƒºòJ1£Ê6F’HÅKÀPØêEÃ’DÆ‚ Ş5¤\0†)ŠB0@°ÈØÔ%¡Ó.¤¨ˆÌ®\r£¨Ø’+*kê˜¤B\\öµü´ £¨ÆæÕ©tv-L’Ø’¼ãs8lcƒ#\"Ê¼¶* ³-‚\"«ûÁÊn ËXÕÂÎ1V¼–%Ë­R4´ĞüV²Ò”µj²YcC6¨±Ãœd†¼ÌE\\ÅËcÅãc2A\0 \$\nŠ,9-—À@(¡J>€³k°æ‹\rÉZ:—\n#ªf:U­ @›”)ËCãkDÕQ>0ß5ší”×õ¤Á/ãTÚê*\\(	â˜©@7m\"eyJ¡\0ÎßÍ&Zæƒ¨õW\"+bdš\"#xêfM£ÕkŞò(ËŒ*Öè@1ãsL„7÷=—›9h;°…#ô¼N°§©sïµ¦ÃzírÊ»–Ôüê-'!«»ˆ&î× ÓÆˆu–¨»€å½ºˆº\\,êMëo\"#‚º‘Oƒ=úî°ãƒ´-cC:µ­³åV÷=bKkìRÁ‹uîâfÏcŞŞ,2»N¼‹,8LäVÍ­ï2½'xê^É8. ØŒt¼4#ƒÕú9ã“{‹ÿâ7èÿlÃ©tÇ¿'‘+˜]ç~£&`~›*âŠ4KÈâŸ‹aOê¸˜åF‰ÛwpåğÒ7Õ›Wm*s¬ròÆ»Ş|Š\\7¶6á[Á%}\n¸±ƒ~™¹+ça‹¥NŠĞL\rç°p'|nŒà>÷ BŸÄGIP]Q=6¾tƒ‚|;§£4jé|	/Ñ‚À„a\\B€e4Æ@ÒŞmã4nmğí44bWH¡RíÄ";break;case"sl":$i="S:D‘–ib#L&ãHüNMğSh€Üa6Ø«ãIĞÒ 2N†ø	¬Ê.‡˜MGc,\$ÔaK\r†“Y¼ætH¤†Y0€ÕœÈR‚\$êK07@æ)¼¨Ã(‚OFãx*&i3šbæÈ||èa1M’\0(”e=MES„NÀiScI´X :ÛNVø€ËI3Ì\ræIE5;(4J4óL¯ËåËqŠÅPšëÆ“…ÁŠ €&Ã*Št:ÅkBI„ç]´‚ˆU£	Ê\n&Ác{r9”Şm2P¹NÑ6Ü\n°YùÚ15ÚïV¾dŞ º™A[Óœfâr4ËôBŸh©{5Eà~”œoÄÁ¦NĞ%Â¥G@Oà@ı\rJûúü¿cLÿ¿o€<Œ­z¨°\\˜b	,Â¸\riøäš¦`P¦‰£Ï@&.¨ëJ\"©xÜŸÃÒÂğB(Z6Œ-'Œ€P´0Œƒ+œ\nÊkDï³ƒxÜ“.(ÑB6\rK€ ›4ƒr| 0ƒ,o¬`L¦î¡i‚šÅK2ÛF§ËÒ¢n»ı-G\rÒM34Jó\"ı3##²P=\$#P\$	Ğš&‡B˜¦pÚc•\$9±ØÈñMĞ“¯Ã’`ØáDNÊİ­H‚dñ/áF“JÂ¦)ÁpA)³‚:È˜Ú:´ƒ@Ì KøÖ½‰BäğŒ.rğ99B‹ÙL¦SZˆ­Ïú:·ãxÎ7¡+úŸE©‚O¤­%l¹.ˆ’î¶ªƒ²¨ò H=0€¥RÄñ)/]š4Œi;d‚L*CPÁOzÃ+0tøÈ‚#ÓÀÉP1Â`(	€@(!J,½C°ß(\r÷êT–%È0Ğ´n¾/“JøÓ<-¹¬òù<¨Úÿ”Öë˜æº÷›à–¡P\n€9ÙH*dš:ënŒÛ5¸)Š•°µEìÃ÷—9‚3‰0ï€@Œ#ënY¤¯¨¼]±:«ï¾o¬ò4ÆO\0æ…é»«ƒ¦Ì—šÛëèà¨3Èí#pŒš\n2.r>;I¾”#xê\rj{ íØ2Œğm\\ë¯8Z:\rHçW,P)Û‹ÚÍnÄ¬‹¤2€ê5[Ã˜…§ãlEÜ!Òc·ÕÉâoŒO0¸\no“Õ·[üùpöHê¢‹ú~õL~ßúÍ\0ËëüsdÜÂ{¬çïúßm<{_‡Îà¾	@†pƒ`+\rdÌ5‘b`å™T&ìiá.—°dÙ3>=Oä˜¹R<Ó@U‚\"ù›B¾œ£–oÎ\r¨8ÀSl ‚Ì“€˜K™ºy?Ğ†¯Õ¸EÃy\$Ex°#´\\yp	\0•.Av‚‘b0Œ534tŒª»¨¹u¶¢Ğç bĞ\"…j*:²\$\n#ÎÌá´|y¥	½  Î‰ãa„\"Dœ•óîa!£(<Â8ù\nØ,„@)‚†À@^ÃÒÀ+çØ%‘’‰”Û&60”Ø¡‘B¹[\"¡_'\\¯–H\0PT‡¦‘\"HDı^I\0";break;case"lt":$i="T4šÎFHüN2œ'cÉ¬Ş b+ÍfSaĞÒ 3A\r†ñp(ša5œÍ&Ó	°êsŒF¡æCÉÓ(ˆ§2t0Ê\rÆS)œõ/:Mæ£v‚ÅP±¦“(Şr4™Í&é,æÄKÀÄÃ)¸é4±VqÑ\0(—%1SIÆ©ßƒÛ-Æ³M|@v4×XˆQ…B 8+cu…g29Í§‰ìüçA¡ÑAEc	Èéo¡Ø„hQ¤S5Á)TÌñÂt0ßNU¸&„æ\n*d:yìe5u9~Â¦k6UˆæSy·uP¢gïp:DR2™\$z„Ÿ'•ËåèšòŸá¨b¯òíyB¡\"5MÆ{Bs—;IğsO§×#«ZÎ½¸‚¿˜PªÁ(È-+ªrÀP\"3 D‹<Œ­xÜ7A b„œ8BHÊ¤!Ë‚ğ9£“€*à&\$p3^+¨æ’5âè¨\rÃZà\"s\0000©\r¢¡B\n¼ÿŠÀbÏøòöª‹œ)°Ì{<\$©	ÄÇ§)”à¯Íp\\Ë…¼YËSY2 “<Ó5ÌtÉ,Hë¤´ÅB@	¢ht)Š`P¶<ÑÈº£hZ2’Hèô=Oc=G‘ò.2(N3\n×¢±P¦2M»Îƒ·QªDõÌ\"¦)ÌØŞ‰ªŒH@!#rXº.Ó¢,Œ)ãhŞ”S*º—„“VĞ²ËÚ:%¥ZPÓÒ[2„r„\$LxËa1,ü*ú³HTÈ51Ã7¢ã£_¢/³Øœ£µÑa„`Ø4¨oÂQŒêÂE!<É{êõW–Âıl­ƒR9T+ø3îùà×’F•Óªèóp‰ÊÂ´À°cMø««-Jv‹¯\nê…ÜÍkŠÍ\n@ À0D»ÃBf£¢°Ò9)œÂ’\$/ÂL”+ƒHÈğ©ƒk4Ç£`à°3K£d—àƒ\n\\—G«­°™£¢…Id­ƒ8@(	â˜©dã#tò\ncªI¦k«µ‹Oj«ÈÖˆ„ªÓ!ëmş¼!ÃpÌ¨Ú(ÆúßÔÀ:]+ÛÊüÂ¿Gj›iÊJ2\$\0”!HšzIüëš9¦vàê5Å<ÛŸ+ñs=ä¯ëÿ<BÈŞ:„BlBø¢ğ®ğ­d£ƒ¤»ƒEÔJâ;9ì«|·.úµş~Í˜„ÌÚ9vZF½Ä>Àê3úÍWmÏJh½yò\n‘ãÚUM¤ÜˆòÌH÷tSlşòqoÑÑ’‡şœó¸hì6°Æ¾Ãk¼77ÒîICªØ2àaàÌKèt#°üŸÒ&EJ*}g4‹‘NE“<\$&CPGHA\$ˆ\\’7×2Uù\\+ÄQ\0§Àt‹ÖMÌ_€ÔÅÌØv2¦„ç‡’i9O+H6‘xbJ¿|¤×ºÃj³pq}…„¶Jr<k8Nwé\nn±›šğ˜ÚÑSà*?µ¨8SÖÃË)°ÉÓÂ¨\$t)I¦Àš‰¨HÁ,­¨”Ip)é\$†ÙDeŠ²\"D¥»•Ó5Šû5a–BÙb“œ¬3Á-ú‘s8^À";break;case"tr":$i="E6šMÂ	Îi=ÁDCyÌòaØkcqÊr4›°É¼ä.1¨€íŒ™`fHl<@b7N§C¨€æÄX›§)À€Js!H!è´Êv1ÌÄf\"~3 ˜1Sà¨ñ¤Õ0›EC	ˆØoGMr.2\n%M†Ã	¸?OVÓ¤âÙ<œ™-²óL`ÜiíVÉÔæ…-ˆ\\Î’¨%’tZmvÙÁzta¯Q¨À(¦a<İŒ'*ŞŒÒh“D3m¶Ìz3™d+\\dÒ\n ÓADs)¾ŒtÎ“\r'<^r™=J£G“Io’Âeg\0¢†ŒßlİßM5 Q\nU€4n«Ù„Yïàtƒ¥¼É/Ğ\"_y‹â\n£™}¾ÁpH@A‹p9<Ã@Òa”ãú°¢è³<«/2nœ§`PŠ<£Ck<2ÁĞZ8!££Ì#¢hª.•-xÜ:ÃCZ5¸ÑB(‹4 @2Äq* ‰Fé@Ø2\r!sæ÷Œ(°éÇ®\$ÇÌˆ*CHÛ\"3Â˜t\"Ğæ9BØó1\"èZ0Œ!hÎ3Fœ\riÃ¸+%	´@SCc€Ï±z’İÎèº=@†)ŠB0R\rOÔ\\:…Á\0Œ\r©«5Á’Âë­‰\0„0ªMq\"dá9ëÂ8.Ã\"p	é ä:ªXÊâªk\0ı6¨®Ö‰Å\\òV•h›3#•nÀ%’êc2:Ìe/L¢.Ò¥UUŒ5PHC+\rƒJÆ\n«˜ÜñÓcZ[ÒèĞÜÆ\n@¡ÆIPè”¯È²'ô\\AÈÃ¤)Jbœ6\$	H¤èÅå c0Â=-*oYcãJ•[W„e§j k†‹³ˆ>49<kÀÜMÃxÖ—³#Ë3›Šx¦*5(Â\rhb#K™.sÒp¥ËÒ|9ãH}5\"ˆ»bƒ/ëˆò3Ï¡®ÑŒ9ºn°–dÈãÒZ\rr¢²*Ñ´¢,ÈÜ1Œ«ZU)íïèè¸·ÎÚ¡9Sd%î@,é«Â“„rÀ8#²S«„¢À:ÓÊÁZ„L¯»@ó%o2SR¥ğ#t:2-R,;5«õÒ¿]8çAíw|³Ë<t5îâS¿Èø×MàoQØèÚŞ[À…åx6í“÷Øä£fğYN’ğ+óT!¸`VñÆXöf÷=^Oµ:ì12ñ!Õş,“Úù`AõàßmDXşŠ@W\nñ`iÜ””d°J3bìlÙ®R¤óºï)©Õé•'¬öº\$° ^—TFÍQö)¦ñ¡s\n`L”[Æ|<±`íËpYgkÉ£âO bÌ`ˆ4RÃÍ“¿m/Éã¶fâµ†Õ„°ŞyØŠ¡ı‚\0‚ßq³\\+Å˜\0WË»N‡Í€ÒÀò{¹[Y&e[+¨,_@";break;case"ro":$i="Ed&N†‘Àäe1šNcğQ8ê 0›`§S¤P@ÃWŒlDÈÆa0I”äu6AL¢œ˜í&ˆÒ4Ì–O)6˜O˜‘„Èm…¢)ÌŸ1 Àd)\$˜@n‡™gg3¤rbg7›Fó‘¤Îi7kL4q¸@b0¤IYÂt•Ô%‡SqĞ@t0˜Œ¦Ã,ÄX\n&O-\0¢\rğÎe™VMç9n	tµØS‘¶8t7˜`÷ÁJànÆA(³6n ¶¤(UU1*NH%³'6mYŠì4ë–‚ˆ–ù’ï<ÙÖ™	ƒLQ+œŒ&;„±8Yì QHÊÈM™L ¢9”Şm2+¸Œ\rSE2w›ïG?niÜîë€¢†j²ñ‰+¨ä0xÎÍ%c‚LœÃ*ë,\0Æõ¹ÃpŞ:À(È\rî£ÒÃPä<ğ\r Pò2`T,¨\\qxbhâ)+jêè¶Bš¸¼:Ì\n€:0ƒHº1šö„.L(\rè\nğÎ¯ ä7ÃJ6A¸IXØñŠsÔ:P\nZƒÉÒãJš¤É[ˆ¥.º»!±\nBÅ®ÏRx…#Š\$69ÂhS2ƒ…ÀH‚‡ŒÓÂï9¡I\\C@+£š¸4¦.›~	@t&‰¡Ğ¦)C È\r£h\\-5Hò.HjëIR¬š=@ƒcÕ¥É4h)ŠB2î7pp@ä1cHÄüÁ½=N“»*0©#:’.Ã9£Ç&2Sº?	[Ô2ŒCªJ–O©®K+ƒ`ä%	dP4Ü#V<jŞ¸Ïtk¼½\r(ôÚ²P°ê˜¡ÏC8Û\"Ãt·«‰`Â‡ô¾Î½Á\0ÎƒÚŠ³}.èğÏ±ŒB’MÃ°Ò¼¿ì²„Ã™6QsÛ„~·Ï¡BŠáú8Ó§)Ú\$Û#”)„yÔ³c³Š]·¬’&Œ#R¸0ÚM&ÅÍâ(	â˜©– ³@@œĞ\0©F.’r‚6q\$Ô-éXç‹ízº3H‹ÒÓŒrÂD3²šã2á;¨4¥í¬B(:¾ª:Nv¤ª“Ä9y*2òïTˆNüæ“>]ËË5¼ËÄ¢õO9ª¤Ùã_V¾5œ	•Ûª.ŒÒ	µ(0¸@4)z7í<…ÂÃuû&8-Ù(è4(+ÀÄ¾[«_4Ç¿ÅZ`.7\nº¬Æ2÷°CÆ)üÓO:šíc\n	ÜM@rÎ©‡0¤»ĞŞ|I5Éùá´¢l_T2ˆQP%¦óKÅ\$Ï! Ø\nÃ¹a¬•3PìX”	LDÔ=(`JĞH„94”6±‘xŠCch°Ãk:‡-å ‘\$lÈ©v%ªÈµÁsâYñ{OÀù#‚Ø¤B[>gy/¢DJ¡C§gP\\‘6¸ ´ZÄ@5B¸¼W)˜*±s„*á|	#ƒ]“úWË\n%œ R|X<†Cpç=“Æˆ`ÊM¨\rÉ–ŒÁv áêA–òPbX|è\"¯„~™b\n?@\r‹À¶’]ËÊK:òÄ±–X4oOò”lL€";break;case"id":$i="A7\"É„Öi7Š†˜¬A8N‚i”Üg:ÅÌæ@€Äe9Ì'1p(„e9˜NQéˆç0Åáæ“Iê\"70#dp@%—˜'C–O!‘ˆÈ4Ìèe6gSY¼æo‹‚ç#IÎa6B3¸>l’Ñ£’3(ƒLAD‰Q„à Œ®3™Lö;):DSYÎn¯Oä’im\$æuGl’RTZº 8EŒ÷›l\0Ï\"…Lsv|Ä@wƒ`AE3¥r²B„HD©T\"7	#™Mñ]i¤D0™¨‡ QÉC­‚Š¬æ®cÇdu.N™9f1n)»{•ABS\$z‡m<ÊFãx(H1‰¨(‡µqâ“Â2\n£ê¢!\"`Ò6¨k½¹CHØ4\rXê9«€®BCÔÂ5jèÒ8'\0P˜0£€Ò9.B\\O¼o+\n\r‰`ä4\$prfƒ«ƒh\\¼_\nÆQ¢½¸ñÄXöë˜	¢ht)Š`P¶<ÊƒÈº£hZ2€P—\n©T£¨ˆ\rkVÍ¨7h°@!ŠbŒ!²À†ÁU„ªz™ÊÚ£J2A!FÓˆÙ0Ñ-ú¤Œ¶ñòP4„¤—µ#HÌ’Št½20¨C˜YAËÛöÇ¡ÉèÎ4¤¢\n”OtõŒ‰(ŠÂ°ìJ–†©I\0æ2¸ëmvÃ\"ÌH \$\n	‚dãŒ”šd(J”¦!ÊxåaØ¬ ê6¯Á¤»L,oÙÃ:fš¦í36­B—>®‘Bî½\r#ZpÅ\$®ˆ\nx¦*X#’{G¥‰M?Bm13 hÂÁ;şÌ3Kª:ªÃ0ÒŒEJ];ÊäƒÈ‚ì:±b.KL#ñP™â¯\r`î·ªO!¦jò½&5Ó:,K#À®1bÈŞÁF“h@ö3\nàí£=h:\rôá3ªPĞË¬×…A¢(H§²]Í5µ–\"ŒÕ‰ìñ.Ò¾CÚr‚¦Iê¹åcœZÁåø+2‹¼#BJ!µ£`V1Áã¬'An:ëºÂ(7¸ã0ó<‰,z16ª\r™¸û\"¶’ˆã\n7¢°DÈ¥T¨·èˆ¨İ	¿â”+­Ë…ö¢@m7i@»Ê–Ú‹½:7U4Â›®‰ë´„ÛH6¾â	ƒzvÛD^ÓÊ6«zî!¿ôD×GÀHí°õ0\\CcH“¹/¾Mˆ4¾—`³´?à„èPÊmæ0";break;case"ru":$i="ĞI4QbŠ\r ²h-Z(KA{‚š	ØL´h,¶‚ù¢h£\r¼e ³…ÁdÃE!‚!\$Ë˜Ü{‚ a0¸<í\0.‰'\$Ë¨ü± ¼“.ä0èAs†F–óÈR\"7‡¢éÕ	4–‘\n@Lfq¹À´@%9¨\r;'Ø£SHâÂmÁZ(™Ü•BVµıêı‰Kd[|b³N‰\$¤kìU¡V M-ß¿Æ²‘Éj€ ‰+ä”ÕÖFš±,%Ò’bŠ¿·Ò‘š¸2æ]–_eá×2ŞßËs»ÍZ[Zğ×»E­Ic]ÅškÄ{¾ïÖXu®ÛÓÂÀÚêWÁ„l¯ıçEsSË(±ÅôI(Œ·ë²X‘¼n‚h‘è‘BÙ¡	t–?Éë‚–êb´§¹/\\¥äb\$I¡®\n¿?PI P½oÒu—‘@†³‚ˆ¿£Äk‘éØ©i+á\0>qäLOÀly {|¿Å¦<¼´)ëä¯1ÊœÅMû¢¯¢H¤~ÙJÉ*4Ü1M J22iš\\ÌóJç\0Í“A ÊMñ¢#(æ\rÃx¡pHĞAŠ%\"Bj+[+Ç„tæ·—‰FÃ–°Üjä§’ûg\$j2–P‹í('®*€5îd:‰«#£Ó1J<CÀ(”ŸPšÕ ‚µÌ:4„T\r¡ O§š‰7«†Ç–«’t::ıÈ\"¦¿‰<¿°ªŠ{e&åòÏ9L‹Ëv¤ÁphZêÕ³iÛ¾«®3lS2ÜèÍÕv[%¶õŞHEÁzÜ‘R^(\n-G\n¶DğháÑ ¡˜”PP¢HÁh(ê8\\-®B.µĞ»“’ÎuSh6ƒ”6°'«»!­ó`KR<,­ˆb˜¤#4|è—¡rG[àöpù¬Q¬A¤hQh’*â¤µ (\rª®ÅYFJ2ƒ4’ÄË —ˆ*×!Ité—	0ö»p³&ÍÃ°&Â¥ÆŒ+¢ []b]nY­IœG8Ró·¤{:]‰²Tî\\2ÅÃ)oN—Êê/-íY›£n¤ÖuËÙ´ô71êŞøç*T¬éì±Ke#7KZ(Ï¹‰œª:L‚&Ënr‚TÜr®•´árùÅŞš=ü›¥½šIÖ88Ò}ººoÍ³¡BĞ­oú<ÃºyÆßëêB4¢møê4÷u	J›¶[ÿƒÔÁû¤(xKùñp¯œÙgøÂ®)Íh\n6bY¢Ti‡U\ršG¢ØQi=©P«9§–lS@'…0¨N™BÆr(ˆ/šcp22[á\"…+.fÊJˆAô?JÒCpíÉ2#%å†ÂdúKÑQ\"£°’œ)Ïqèdñ8(4¹&\\¤€‘¤bÀÅkŒ),’(p×—›D_DJ5¯uÌZºî'_G‡Qs4}êa#;VğÌù+†)š”\0²Ã¨ \r„;P@ŸA\0pA¤;ØC:zĞ7‚\0ê a’X:€ÒåaR}µ­1\n¼¢›RÆr\\¦òç#Ù7/qM•Ã¢ŒQ™ú¤™ê™w-Öô¹—íÆ> K1IÙ|Tè,ù•It¿#Ò:eyzG\"ì½“vŒ‹ívÁJÊùÃpy9N˜ÆK'bıkóO&¼¸ß´b`ÇØ 6Z[{(È=ê=Šşòô%¢9È·çØÊOQÑyÓ¾rG%‚#X˜c§°”¤Åb÷ŸÅ\0xÉÆ•×HŠE\$×ÌÆNQ\"Ÿ¾‘­:gI¦\\*\\I¶•´'t^¹IZq’”£¾…hû……K24E\"™OdSE5!ÏaÚ6j”¡ O¢Še&Ò*:t¦(Ñ9Ò‡ õ3]Jèn®TÀ•Ğ^Ò §‚=\"À@0…YÅŸ³HŒ!và¢]64¤d‰RBt²ŒujA!07†ÈCpgVrÏ\0ÚÃ”–•!Ğ0€ªˆ_œN4âÈÓ¡qlê*\"QsLcx‘Ğ	.\"JèşW\nƒ7ÕkğVT•Ó}p–o‘Î¥F~¢¡²¤H¶Õx-vPU9FU¢Ì˜µWÉ„Õ ";break;case"uk":$i="ĞI4‚É ¿h-`­ì&ÑKÁMì9xĞ_4ÍÜ\n¾‚-Ú\\‘zÑAHãP)D@ÑBJ—1ÁtM9*]4P1è¼‘vÑFC#E¤bÑAÎ¥«†„^˜¹— (Ò%äA¢€—Ìd“9ú@%9´3V‚’e‚CV²ô´êIJY!ê½7' ¯¢w6ŠG-]Q ÔøœV=—Êd‹ä±\r@šˆ&Ø)M<ĞXİV¸šFĞZP ‘ÜÜï°A0m\rÒ¤¸¥Jc+,úæ[k£QmRM¢ˆ–T¡WŠùÎÉf­Ú*Ó¹=ÂÈ¢B zÈÅ×`”gàÙ´<BSË'zHšRÿŠ¶KïÚXš‚UEÀ®<°^ôÏ[ôKdÖ·XTm`‰’hr2‹¿d®«è™Bƒ¼N£äh=ÈRŠ’'-’®‰“N«^Ø»Kù‰“ëú¤Œ§äb&Q¿ƒl”Áñ\nH^æ‰–³qb^¿nÂÚG0¬¢¥N’t£\"Æ+i@\"Èé”i%ÈÌÄÎühÖ\"i;ò¡pHËÁŒ@ê‘ùt‰³\$@ ­CNÌÔí³†ƒ.Æ@‰[†‡Á&)\"h\n˜ÌªQª¡hÚ0#eïˆ™.•j2:Ù¨Ó:\0Ø¥Lêó#0›C¢{–ÆĞĞ{=5RëML¶¼iRIcgH(Èº;=¤äx\\¬LıZ¡\$\raT(U¤¢¹Å*,Æ×‘•`ÕŠ‰5Øí%’¯Ùlqg×hy²\$Lİ\nhğ I‡FKw]°YB‰¨¥ \\¦©¡p·à»@£Ñ]IA3Ò–¢VH€6ƒ”àıªH6!ÂOªÜ†Çâ¦)ÌM2‡¡rŠØª³€Ÿ­°1¬ÃJj—‘(Kz’ë%ÕMÉõ¬Õ¶Ù:]tFïo|\$ªÄº	f5hlµ#©<ÜŒ¤H4I\"2¥-¤|\n;É:ü¦4ŠQÔà³SC•ÕsNÔ»O­°ìí…–‚ëèjª½tY/¡²0Ê=ÎÕÄ¨y-„\$ÈƒTh­Ê‘À\"É{ª7î±­B¡7¸@(	€Zºò`á\\A\0P°;†b(ò«C5ùr’GnŠQ´7zœ95!RÉPwF…*æÆˆ\"zÖ-Êg—Â¡¥‚œÊ¼/©m–wcf—K;Å–EjM{fÊÓ\${BDÌúª~«eN*ÉI¤Õ3eœ!Hê˜øÅH\"2,Q‰æ|'…0¨›P™B6ñ©4òIÓ+)4E\0\rAZÖ}gy¾ø\$ÛBæ%Hì•„ÜéÈr#Æâ½2ŒIÉ‰LmEB[D»óH'‰¨-W`jàJáVpè’\$!Lk°*…ˆˆƒ¹`‰ÚƒBâN=¤:Ã4æyÕ#1G¦ç¨AI¨Y\ráÔ€Âƒ( \rÁ¼\0äC²¡œ2‡0@# u0‡Hâ@iÁĞ0† ØaÑŒb:¢Å\$”¤™\n’¤¹Å8#reÙ°FÇñœ¼d:ıUì—’R’M9;RºFÍñY·æ\0S\"	,’Ï‘aÄ´ªZ–Úµ\\±@-5WRU—ñ5e5ùˆNÚ*À˜òõ—L´÷3[äEhIUñ\0 †ÃC`+:Œ ê%¦è«”´CÑ5§^f&LL”Lü™‘•*/‰ªLŒLÖE2†wˆ¹|_¦È’¬•>—ìe>ı4ÌŠ\0­=;t(eŸş\$>Õ0ıgÃ_d¿¢>Î”q\\Æ?¨l4Qä¤‹²:—6ƒe+N¦\\Y#ÊHŒ·:†¹¡Q#jmŞùtš\"5éİ'ŒËr¸C3)Ôw'bÒATyÌ³NDêRW© (&ğÂHnõ’³\$`ÚÃ”q’1\"\$iö³e®è:½Pš17›lÆô…u„ûŒQ(C\$·’Tê%^a;£¢‰ÕZœP4_U\$LT&hÀtàKO ¬zÒãŒÄ):”Ç##ÛEÏƒá’ó*0r–AÀ";break;case"sr":$i="ĞJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãğSAC4SPè\"ÒC\r_C!ÍÔ’3h¦\$‘XSA+ƒ/…ÑÔì†d²‡4Sp)+A|Ğ[´(”Ì®5¥N&x•>Š°•Ja«YdÎeœÈS¸*®Kj¨|ÚÏ”L`öEü^H—¯£²˜Ââ'U»®ã©ZŞ\rX45%„ìYDabK¨ìù0¸Aã©Ê4‚ü¼‚KrëˆT«I[„×ÚlJö	GZA)ú\\EGjXlÅÆ·]¨P´(\$ŞS™”Ì—LµÛIi*’ØFšİG .0wnLwyŠ´4x\"Êí\\^C£ª)ZëiƒÀV#«ÓA9çh- QÔœ®ô¸dœ¹ê†ç­éFóš\$’\$ +;*³¯©«¢hºj2Ï½F‚†£©+ò4µ#¤ü™10ƒÖ»+	’¬›Dë¼Th'®ÂˆÚFN\0Œˆ#¡€Ly'ÉQa!G¬TŠ”6ÈëX­€PH…Á g*†+\$LŒ@1bÿÉKòr‚m\\:OÂŠ¿’ô.C?f –3ƒI#©’’Ä±nú’¨(\\â¬äDŒ“ÍZx¢)Ê•<J\nèÄ®rA3F„Ğ”²*ÂšíHnº.ğ·	ÅQPÍBä¶¸ÉªŞ At‘B/•\"\\®u=[T¦hYZUË1kYT5i[*ÅuB­\rJ]VÑ«2t&¬Ih	@t&‰¡Ğ¦)C È\r£h\\-7Hò.¬”IiI¦„ô»Ï®ui3V	ij\rƒ ä£óò£?Qjä ü¨08@!ŠbŒĞ³¥¥O-­é¸“4ö{:ú*%òBM%â*²AhŠná²1{axB#8ËÖkşÎ¢ˆ´Ó^÷}È½Õúğ¦®#;¡Ë\$ÖhÓ¨‚ƒ¡À–rÛ7ém^8±ŒR˜UHY³ªZÈàË»ôá¨kjML)x²ÈÂ+Œ4ÌØ,Í¼âè˜ºî×b9Êìı5©\n\n@ ¢î†äµ¦\nÿÚ<)»[-?J°È«uV‚rS¦‡H±(3£;‰¼)fŠ›ÊïÖšÆ ™{<ñ!\$¡Ii#uJË˜^êpx¦*g;ŠYSåñe›|i\\’E¬c\\,Œ–Clõîáv’P¥?	3èÚb\n9zhäökãNÚæÌ˜w/r¿8MÈæ²>z€Ürè’’XÀhúÆà“€Ó‰I@-Ô?Â<ÿ‹Qa€\r½|\$bÈ¼Ğ/;CA¶‚î[9¶'ad7‡P@v €7ğ@iÁ¤6PÎC˜ ˜:‡\0ÈC¤# 4ÃèC-~„C LXDˆÄù\r›%ÿ©Kˆ4 ’5öG¢S²ˆâb&¤Ï\"ÁnÍ‘¯7ğ…LŠ G¨á«¿GuËù)AĞbF³3Ué^é–9æŠ¬ãaQwÔãG¨ê˜C_Á°•Ò_…ÔN8/d¼½Æ\0T‹•dhî5ÁˆÊãc#1Ö’³XD#Ô aÒ@A†ºÜTª”GÑ¯’ãÒQÙ©W“	ğ »“@óÓé\"¤t¿@(ıÊ;¢`š6U™ÛCBf‡t-ãÔ—~ÒdŒÍ”l[O4®š&™ø0şÈêĞbÆ­å¦UËW1\"ñ!‡™<rSÃ#¤†öel¦ T»#d\nOô¥m§„]¤bwœixÂa<ºC:-Ôƒi£\ni )ÎÂ&´…5„©};½cœ=t¡\\'A@¨4õ•ÇUõ“`";break;case"zh":$i="ä^¨ês•\\šr¤îõâ|ä\\#]5ìAä^(Éd;‘v¶q @§2q\0åRB¨B¹pçM!#qØü¡NåX#â¡\0”æB’G#Ëh‚5Ê­L9SŠ‰Î©]œ¨äû•N‹’,”2TK¡CL‘…€§B½ZèT !ëÕû(¨²+Öğm½Ğ¿L¹I·2%RåX¥b\nÙ‚ €ˆ*¡‰©õ6ƒ4[9Vë*=&—·*È…»b»r§«dªÂ—’%Ô²Tû™.¶t¥Ö•%j]Î¬SDPõÒ2î›r¢À§:õ\"ç]§*Hu*åM¯œ«ÕI—¯\\ëÄ³¡|‘r¦{VüÚŞ©+ĞÎuˆ™Ğ/R°õúuÌŒ@¹ş?œoL]—GIB\\A(È4çA‘#(æ\rÃx!pHÂÁªHH‡9hê£ÅÙÌB'Eéâ•É!I¥Ñ\$É ƒJ‘T QÒ@'1T¸„¡j£’IW(i!:R9T‡—ÙÒQ	!¥,`L°Èú¤G’1ÛİA#I	«&rÌ0G4ÊX\$	Ğš&‡B˜¦cÌü<‹¡pÚ6…Ã È’eAÒJ-QÜ{´…ÌFÅ#`è9\$„âŒE/\nà×#D©b˜¤#ñHs‘\$bštäkı6L\$X¯œ¤i*ÇÔM@3q™O±ÈÁ4²“§)~BÀEÙĞQhI^ÌØ¥åWÙ,šîCµˆc|¹V‘,X?Ov°Ô\r!råm&WWŠÒ¸¾¯ì\n²­“‘é(W¾ïÊb\n@ ^ŒGÚkzD'ÈaÇ±m¤©:Rr¥ij^˜´ç1\\ZÒ5¦¬¯1DO¤Q@lrPU&Ì.\0'Šb¦ÒİêmØG§#w³né\0Bœ¹>S•§ÁÒBÄåê\nH¢¥ÙI—MdAA”rs“w‚ÂÉG16Z?ÚÖ¹¯\${Í+ã.Í®±«¶î»÷º¸¯UË²7¡\0Ğ0Ã(A„€ä4ÃHØ2Œğp@:\rá\0ê8ƒéÁƒ@Ò9ñãÅÅ…Ï¥’¤tL©Ê\\–ÎANä0ã¼HôªGN[mrÁJˆl;ëjäÉIÀìNŞ‚‘ä»‚Ó¥‰ÊI‘¬p‡KXÆ6\r#Ö\rãp@0„°Â6¼Ç\"6ã Ò3!\0Ò:t3&ñ°¥yy¶Ø¨Š&^ÑÑñR²ÉŠûˆë›ª1(È¸©Qf:”‚ü­ˆ^ZË¨¨nn¼t‰1|9„q«Ip,Wa(._àåğÇ !j:DéÕb¤\$G\0 ˜Ãæ\rÁCù“‚r¡Ğ0¼\0@Ş	 ‰Xää	1Ì'Sc¤McÒüÄ9Q~/Í,•\"–vLæCˆxQ3õ(YóxR/ıº\n¢„¨";break;case"zh-tw":$i="ä^¨ê%Ó•\\šr¥ÑÎõâ|çB(\\Ë4«‘pŠr –neRQÌ¡D8Ğ S•\nt*.tÒ9E‘N”ÊAÊ¤S¹V÷:	t%9Røú\",r«STâ¢©‚ ’Tr}Ê§EĞÖI'2qèY¡ÜÉdË¡B¨‘I€§B©=)@ ÷:RœèU¢îwUDYåD%äËh²¶,€r b)àèe7Í&óp‚i¡Çh®UºÊ“K¦æ/wgB\néP§œ©êË™*¸¤¥èiu-u>æL )dœ•Z—s«Ñe•ÉtŒt 3È…´=l²t-ÕòUÊú\0•’àlÔç:İPè^+Ü©šs•p³t&aÎUzSs¦Wre-\r`¸r.P¿šê±–)v]%\n£ @1,xP9… Pò2`PÜ7A bœ8¨d8+'!v]œÄ!€§9zW(dq\$r—Dxš&È:JE¢¥é9%ÁÌIñ¹6ù•¤ÒA–±3šrÄ1ĞC•K‘p]µb†GÆoônL’rL—I’³¯ŒÊ@,´2\\š]–ÌÁÎG—Êbœ\$	Ğš&‡B˜¦cÍ<‹¡pÚ6…Ã É1¾d9u HR\"À±,€PØ:K‘x]+ªCÈ‡¢-q–\0†)ŠB0@:\rã[ ´¯YÒC‘°Õ3;g),WNÏ‘ËIÄBlEìÀ§\n2L @r—í9@DVr’¤úùeYŒ›*ÎGIG6ÈaZÖõÉ,X?¤íR’µ:ZsÄ‰ĞV‘,ÁÌ­«¤HA!–‰1\ns	ÎZŠÒ¸¯DÅÛ®s…yÌG–•@ \$\n‚`ØBD(eò‘­…³Oq«¬AH„\$éJV–¶'1\\ZµÅÅnGÖ‹ÉÊQ5DQ@Ëä‚€)Š.±“)¹T›”ëIÌ\\iÕì°é),Ò¹ŞzP2Ã˜AT%%j„*LÁĞTÜ01ÎM•×«k‘RhRM‘ÌM–\nıíŒÅÁ‰Ë¥.÷µ•ÚHî»ï~¬Äc0,ã¨@4#°ÊBá\0à9\r#°Ò6£<)Wá\0ê8ƒWN¼:#@\$¤#<¥.Eù:Ï¢Å1Î\\—‡;Ä<™ËÛw…ÁMÀ>‹óÄ«,äLîO¡Áí‡)Á	zX\$ù~ÌtàØŒc`Ò1aœ0„°Â6¼½`\r£xÈ4ŒÃÈ@C£´A.5p¡»™!\"DQq)QÙÎƒT,‡l‡çŠ—Ê@†J£¤K‰ÁĞ N™£ğœ‘FÁÄ‚PÃ_Šæ .LÂLì¤r‹áaá\n	¼0¿°ÜáÔ<AOä99wRì@dq¥Dˆû\n0Gã R@ñF/I(Œ<JJ,\$¼š9dF‚¬s\"\$H[ ‘e,å°PˆÆk\\L^	,T\0";break;case"ja":$i="åW'İ\nc—ƒ/ É˜2-Ş¼O‚œh4«¡‹)\"j¸²J,¢‰ âp„¶&¼‰¢`Êx26MÅ’`§2q\0åRK\"‘hÂ\n4ƒ –±˜²è@%9¢S¸½W¹U©‡*qQ„ aHŠ\nfçT®NT*–†“ÄÒÑ¸4‚‹\"¥õÉ“\0‚N…BĞªOœ‹Õû(¨‰ PdÔZÜ‹ƒ+œÈµ•xµs*`H5ìw¿ƒ(àÊh2> ƒEqTs.+MŸ[(Ç2^@UÔª•jÅÍ3KÒ å%´\0šs¯•.Tò.h•XT’óDº•Ì™¼9’È~“•Ó‰¤)×\$ª—.AÈhˆš¾Ò‚¨óbH%ÄYUŒzâj®g;ö‹(™ùªä‹4D~à=å±ÊHªY#\0=«ID©i1X)ÅšhX9läL[p‰ÃPãbAÃÇI@BœäÙ\\È°dáÌD\0PJ2\n#+Z7\ràPH…Á g\$†©¡HNå¡DÁeÙÌBï›:á@K[J\$\"ÆE’±¨t%ÁÌE0/Ä,U¬e¹\\råÑÈ],GJ	Â'1_¬…*h[—g!vL\"mzzŸÎI\0@œ…ùCG“t¸§D•HRMêµO\"'9_*ª¹É:®»²ìNñå9\$cÍl<‹¡pÚ6…Ã É¢ÑR@A80'ËP6ƒ“æ¡ÒñÉÈ\\§1ZÑ%P†)ŠB4÷½ÑbìA¤1MÒ(ÂÑ´­;RƒLQE‚¢Ö+æ]¤(±n‰§Eš:š‘')\0Ä÷YÒ-1Ô-UâA_Mõ~\"wõNš“çI2H;Ğ9‚®÷”7«‰iOaV‡0V¥­l>é-çÃÌ›*Ë³,Û:Ù Ë¹Së¢¼\n@ ÈæÌ³0ÍâD)zUbËôA\$‘¬µëv+jêfã¹.YWé¹ÙTš¦éÍMéIÌè#§Am =š\n²OÜjD{Lœ¥ADÊÎSwa·…Ç¢	â˜©c½ífœ%„\n\\@¡„	ß\\|…’Ğ(J!]#§)a…5XRA2	ÖáZãô»w-vàÜ>w±S<_Æ|EcHÖ­ï}ôa_äÙhíC=Aqw—à’Sõ\0B”´÷ƒT%¹Pt“d2ö‚-¹êâ¹ì@P²7¡\0Ğ0Ã(A\"€ä4ÃHØC:BĞ7‚\0ê aØ:€ÒàaOü!~'MÔƒM”\"!2ˆ„Ô7D<G~/X ,o\râ©Fşö^sĞ{ÏL!¬ĞØ\nÃl\r!Œ5‚\0Ş\0aØ0†Àë (m\rá4†`òHt‚¨íØ¾…2ÉBÍä¬½ñDH™hRå­L)¤ÒšÄñ+%¯°™\0¡ÎøŸ#æcKœPG!,(”‰x?ëˆøØŞøß)\"ÇøA˜Õ’.	¡6âÔ¼ÀŞb`nà*GI\0Aƒ“ö!Ğ0Ââ#…,Ha<'šá\$Ê]b¯D‹1lù“õı,ÔºÆ@ÎE¤ô¢mİ\\„ŒD AÆDá'Û˜°1.e‚\nhÿ@";break;case"ta":$i="àW* øiÀ¯FÁ\\Hd_†«•Ğô+ÁQh:.\0ªƒÂUÒz A\0‰«Ğğ”V®XÈ`„¢B NÃy„È)“« Êô4:d®‡Ã(2õ|²j®ZÀå”yl”]W%c±ú<]W*fğ,IR¬ÓÕTôı5²@túŠ½ œÈUxâ¾=#®Áîğ	}VEUD_*z,Ã6’Î¦ÓĞò)¬YhTü6fm„gî”õM„©èUØŠ¸²±)E@:Â&?O¦ß£•úÂ“qtÁPhxİÌŠÏv ¤ £_åÚ9öFó’<¦ã™¤Şn @6Ò=Ån³h­j¢ğÎv>%!ÅzoòI“®ñ¬è÷?b»@±K[ú¤¢+\\Š•Ïâ\"æ!\n	j§½\$B,§¿HB°G \r+Õ\n\$-ê\\³ j	\\§¦-TJ@²j‚%NZ”‘ªÂŞş–zn\nc ä4Ã;0®\$¨R§¹â1­Dº¶%t‘=1‹œ¶:N ¤3‘¸2ãhË2êÄˆÉLúÑ52“üƒÉ¯LPÀ5JôıIĞëo©ğ4ç\"Fâ¨æ2QúÒş“îì‚­ÓdÒ¬E“{f’Ñ‹DjşÅ4‰@ğš•#½Ô|%,?«¬ßLOrÏ+ÀŠÇMï¤ï26(È ¤”ü”ÖU£M35MŞõ¢0¬b<Œ£˜7\ràPH…á gf†0ôZWWĞº\0L¨êÕ2¤-­G;?Ô»ûWR¼Š_«|iN,dÆ!ÒÌ-Zr{ÚäQ\n\"y½ò»ª‘Hoé<·^SS5oH«İIõ)_&Õ‹•Àû/³{ã]ÍA]\rSõtá_Ã—æ÷cÏ°\\¦×ò€¢8U¢,2ƒ‘ĞóƒêµJ•êÿ…ÕÅg”º™ZŸ—\$Y„ÓMX+]šUªêÕ§PŠ=\nşåŒR_’ÑEu‹]Â@	¢ht)Š`PÈ2ãhÚ‹cÎÜ<‹·MáÌğû»7°ƒFş±\n—ŞÌ]ğ¡nn(6GWJZ)öÃÕÇ\0í@3¦)Ê@¿Ê:D…¥8z;VŠ^i*J÷R#‹Ş;ŞWÎ¤÷\\‹ŠÃ’jE±K«¤IŒ¯`E×InA·»:,\rÊ_áy¾:›+ø	›Åt%qo<éLk}uÔ.i\\¦BÎŸ8­‹‡—ÃI}Ş]÷×µîy/=¶–Û}TATxöÑ~ƒ‹BeZŒíë¢\"ìXÛ³f®Ô€©Õv¨Ó´>É>?Å¶Ë WLoˆ¸ä ÈQS0Æ¤Ä·%Ìt(§dí‡64r¹</Ñ7Ğ@P(/yqAtÎ‹©=Ïº ĞP^a™…*†˜Å4ÂQæ?¬•œ¾çÔf•9`ˆmj0E6yÍÓ6H€ş¼Ç>ıPÄ	5F–(¸ó\"d A4Šnå^EcúÏñ¿|.\rìœWJ^š\"D…¢™\0PMË®‹¢\nÅ¨¥–ù1DMáÅw÷”Âƒ@'…0©OìDNIJ#(—“®MÏY Æ?äŒ!ipÖƒ®”Ú‹©]ŒtÀ™PÎøf\r!œ:‡ Âğn4‡ ÊæC“†rQ=R`¡¥‰ŠUnávÅÒ¾Šà9}•äF*5uŞ¹µ:,Ör«	¿İ+	+‘¶qÏ#É9£³«'Šu´×Ñ._ø(	'h6Ã2†àÌÑr59ô]ŒQÇM¬d¨HÕòë¢Qª5€(,†ğê@ar`d\0àÃ°i\r”3¬P@x 'A’c†Z^L„1R·°İ¤¢è_\$¾ ¯E-Êñ`RñQ&+Bå«®©Ğ\rğIRüj!hu‹†9¿Z“å‘š}é¬Õ=úë˜¤`k•–Š\"ÈçkS'gçâ~Õ\n–ÜÖ©q>s)õ*şÙã>UUÖ1Oyİ&#+Jš’±à¢ös_Š=fHD@«„4tXc\r¤1†°@wÁ\0aØ0†ÀëM©€ \r¡¾f`òHt*ì¢Š£BĞPèÁ3|±¹QÅ\nL oAÒƒ8Rš,-jRÕ\0X)p‚í¼ˆ‹¥Û©CB`]¾'\08\\+ˆp®1ª¹¶:¦bÃeô]œîèÒ@ùß›³TWùGè!™©mU	X°B9H\"•oj½Šè=Sİ|d\"6.óÉÕ5åƒˆ¨¨ Ê&<Éj—×ú¸#\$èƒF•Fõû5d!—Á‡à†°àßdk•×8¸n\\áè¡N\nl¦+w=]zjˆ†Ocx	ìÌG +\$ëUp©µ4§uÉQgInuµº	^Üa%„kàt½Ïß~‹¢Qé¾9\0†OpePB>ÆJË{ˆª4Â2ŞWÉõ7èÁ¸j\nÉ(;Ù›q5b¹j†öÊ×§ZSW‚ôĞÖöDXãŠ¶ÙréBÒuTı[8ê|ÜËY€„";break;case"bn":$i="àS)\nt]\0_ˆ 	XD)L¨„@Ğ4l5€ÁP\\}\0CÀPä4U\"¢à\nt1L°C—h¤[\0VC—1iª™7CÃ¢\nhú•ISLåóÕdz\0§Œ%aÈXB	4SÊ”ÊhÂ’¢H\$S*ršB¦N§2º‘`Ù¥\n{:Â[)ªÔà5<V]¦P¨*5!-eYB){ì`¦†)Ğp\n<.ñ‡'ğjjj™cªÙd8Qe\"oaS-ãÔŠn5L¯œ@'z……##ZTC‘ùe6j‰ºËk©Y«¦…MÌZáÚÛöÃ9²²İ·“\nËƒÑh)zøó7?âõîJdL9ÑÍô·½•2ª‘JA@0úîrú‘ÚFÜz™²È;¸Szzâ/Ì{>ÿ5b†¸ÁJB¬³·Äš\0ç;ÏË\\J©;è²ÀP[ğ_¾ìB¢Õ¯jÂü“µ\nã ¤,ï*Ğô8©{ÔÌZÊ¥BÅ;}'¥\nÄ”ÄºÄ‡ÀÍqJ§GÈ\0‡H’3ÆTBL¢‚³\r‹<€5Rkú¾/È£#–öàLË3µ¤S\0 o‰L\\CÈÊ9CpŞ°\\“øbÃ2òÁ8¤6¢îêË*J{%µœÔ<ôŠS\$	¢ˆÛ'°T.îÅz0ê/Ìêâ‹É\0EÕJÑ«:ÎY)\\jÈğl¶Ô dı'9Q*Õ+*Mö®àÌ,RL²”)'2LÒ:Öa\0P€HÊ¹M\"áJ.6m,¬§Tüï°j4Õh¼vd±Úò-m¡õ–Ô\\KŠ¬EÜ°½¼\r*S7e3\$	@t&‰¡Ğ¦)C \\6…ÂØÕ‹Bì‡l 	+È€WÒ±M[9±¼RKU:òéÒã`è9Rr\\ÓÂ\nB¨ç”äBb˜¤#3,½pĞ¨Êû•É&RÇ[öeœë`r:€FDüiÅm\\ÜºntàkâÎäk”tà¥ÉY^ÌÈÁ(Ä0»»eö”ş¢pû!¨I;Ë	é•Í®%2º¬å½û] Y¹ÔÛíéyJ{ƒ©,\"om\$wºãW±¢üPïpşm“{ˆ³¨nEõ®5ÏD¼Š@¡«èûMv¯ /K³tî6Ék-w³Û§ËÛ•ÌÇİc	æê´±i«QtE£WlK\\–w<r•”?«Š¡]ªV+ä¾«ÒÿğS¨7\$ !ÖÊÏ€ê75Ì{fÆN^ã:©9M‹\$@\ná®{ä%–-§*ÀÏšX')iĞ @@xS\n„:—~üIYeGè9;³T®Ìba}k€3u ©‹Psn° ´¤Ì›Ò(lœÀÆ™ßù['°ˆµt‚Òé¾3©+B´ÒÃhÈÕ\"<dæçZùá`fv 9Ô¾OSnh±Ğ#V¬Ë\rû]w¤ù°Cô¹¢X^e)i§!súŒXo®0Äö¼ûã*okj\0cìëÔiJHyå#\nCxu 0‡`ÊĞ È4‡`Ò(gNà€:ğ@C€d!ÒG‡@ĞaPt!ŠLçÄvàñ\0jı£·s]Å=?†tÿÇ¢z¸#ê¢ª ¸­Æşû9\0Yò¼ÇË\$ÚiÛ3¯q1\$ù^°O1U) €D£±ºkd5-ET½MtYi¯Ô›X¨e,w›¥\06^Xc\r¤1†°@Ãp  €;Øe,\r¡¼2ÌA\0ibKA ÈDß ÈJñ‰ÄÙ<\"Î€ŒaZ{‘}»·ãß‚êœG®‹6j0µ¥ğ§ÔyMRj_©!.1ñ8Ï(ÉŠDcëm“Sv–)•Ce§Q ÂU‘Ğ\n“o\rÇå9;==m¦ \\U)Q‘{Ù,Ñ½Í<f£Z.¤9a¾Ghk¦:˜Q:c\na2O_89©hÙ¡zè^9K¥ù|©7ôDŒØ·A07†ƒ=‹±©š…‡)(¥U¢òÔ_®´KéŒn«ÕÂ6‚ı.NÃ.%ZTõè£#µÅ*›Zf@Œ)©—¤uÍÔ7­SX2…<ĞöŞ#[|Ìlâ“%Îe³U:â‹|=";break;case"ar":$i="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø*‚.›(¦ÂÆ§EĞ±Äu²l.còN.6­…d2W.–ÉæğôajÙDÂà(\0”æB˜6\$‰\n3Âäh‰£f¨¯˜IéQÖÂêcK‚Ï¤(¨²•UU¦‘(\"²%J«@¦Êü†Ìºl*n³†ÂÎ¹‹¡\"Ò44.P¶ àŠ[íÿ‹™D¨µ,2SÛó*¡ÕçI¥àgQz¤Ö¯YCZ¥WåùTØWd³§5½Ã³+‚ºDÖ\\gª©ŠÎ[ã`›\n¸=mMP½6…DBó€Â\"wëÓejÌóö|lÍc½åµÒœY,¼ÍòÛÊ¢Æc¯¿MQP)ÜM\\¸¹OÂªı k{şD?»Ä˜°Aj¨­ez WA(È‚‚8â#(æ\rÃx¡xHÄÁŠc¦eZ,@£iY©:Éû«‹J8T&)œ(È·ˆ‹¢Æ61Ò¶û5¢Lì£‡>ˆ:6Á ïJ¦l1\n¡r˜²¨C¦Ì”2¢\\”3j’M'¥J’Æ<ëò–û¦ÆÄØÆ©j,.®MÎ<ÔÜ”R¨\$Bhš\nb˜5\rAxÚ6…âØÃGŒ\"ìpü£pJÀØ¾‰¤®ÉÛªFÊÛˆ9ƒcrØ³0“f!ŠbŒ\nƒxÖ2È%PlæÁLFŒ*´Ä%ÌRÂ\\­“”ğÖ2ŒjÒ†·kÊ²†µk’¸!³ÛØ—?vÒ”0\"„¢vš¬Ór5¹«I„Ün;¸l•ë\r,1(#kbI¨u)oI/ô\0¬¥£ø“Æ7ÔK8÷ôB]k^ÌX¨Ò84Šª¯.2Øz·ˆ!C€Ğ8>Hj&ÀAªŸ‰Æ*Ô‰Ïi\n{|µër@ªWd“|X«§ê\nì™;×ú‰ªª’Ş[—’gÚë™v\nx¦*!h>®+k5^h\$,0„è6Â|‚&i®¼òi¹-E{*È[¿³Ã%’¡T¾:÷“(Ì6\nÿÔ\näËd\n@ ¤Ù{!°X'Y»›–<\$â×ß¬\n°A©ò;Çlìb&ó³%bwÊñœ#m	@‹*Ï°4«eÒç&‰€²7¡\0Ğ0Ã(A„€ä4ÃHØ2Œğğ@:\rá\0ê8ƒéÛƒ@Ò9øcÅß©%j´\\KšP\\7íú¶Ÿòn? Étª¯·îÎNl¾l)Û^Ğ¬ReM¢wÏ(æ³<fCÑÏJÚ…‰€CÈ6°ÆHc\r`€7«PÂ°a\rÕæ<PÚÃ iÁäèRYÃö8æÔ¿+’<Ú\rqj<ì±ÿH\0•)]*œĞ’2F{áŠDl\rörÜ„˜Z8r/”´ƒ2Ü–Â8ä€™·²zÌ-'nq%p@‹ûä @ˆ…–gÆéëqùöî³‰‰?%Ìè³£aÎ¸L\rá††àÎ£”t\\9;g’\nNğ‘\\…ÒTsYF¦ëœÒü+‘Ât‡¡cB–ˆªQY‘mé¤˜~\\\"\n@æBBh…Ÿ\nÁ @";break;case"fa":$i="ÙB¶ğÂ™²†6Pí…›aTÛF6í„ø)²‚l)âM…ˆ°¨…G•˜ãj&°’,[(¨J3+l¡!(i\\25W‚„S™\n<­©Û(6Â®9¡!¨-…”…³.¡\"¦1j„ÂdÙD6•ˆ”Î–±‰›\néz!b-f6zÔJ±kFBk5ºÊ¾½X'\"Ê?/CZ&Êª|‘_\n‹! XU8‚ ÚTÄ)ÈJúo¥aáj|•2!GFixuH¨™Á#JlıÚy|ÆD&0”-ré]’CUVˆ=r4¹d%7õ	sKœéo9õuÊ=M€ÒlV¤İ	ÍØ°÷ZÄBÙÕTd1­\$Mgã³DwP¨ÌYŸ°g\"+I4r-J¡!a4KÏV‹iŠ\0›:@¬¸ªâTºKDÏ°ÒÚWµ PJ2\$HÌ ÂğËä‡CÈÊ9CpŞˆZqXj±Œ´¬\"ÈYbáF%:,€¬R>à•-À Š¶‰Bs½)#vÀ4«\"4T\"Ì³tÑ} ìyRª4/[2ñ¶ªÉl®.ÓBVJ­’³+½‘Ó††¨D\$-CDb\0Ù&SšÊ:¥|9<>SÜõ>¿³£flP+CÄš8\$	Ğš&‡B˜¦cÍ<<‹¡hÚ6…£ È±,Z´Ş)Qô¥¹@ä:\r‹UA/ÂãÇÉ:Ü¡Ár=#¤kÌ†—,•Ö„ Ş5Œ£p@!ŠbŒ±X­¢Ş@¢é©TUëY@-ÄRÂl²Î«	sX­êX’Jó«+¯ê‹•¥°,şú¯W:•y¡Ìª_s)(NÂ°ˆZâ˜±j…†®X¨âœ¬¿«µ·ÜÎK~Òâ5ûÎ¥+icHüßUëít2ô‹2¯d•ãˆe>T®İéNm!ªâ×ï3J°i›?+…	àRGÎ:ğ°›22á(Èê	²Š|ø·3l–§x2oHàQˆ•…† xs^Ğ±®„…–˜y\né±œ%¥³L€²ß\"˜“2mÕ…¸«{›§?fÛ¬'rjÆÀhÆ–ìï†£İ	‚ˆ°\$Ş¡%ËõíÃ³IÀ]B~l\n}ÈäÁèŒ#ÕWŒÂÀ3´nÏÖ¦üÅÕ½Ï„óFVÈ9­.jâìò¸iÈ²7¡\0Ğ0Ã(A€ä4ÃHØ2Œñ@:\rá\0ê8ƒééƒ@Ò9ûãÅíô}BÆø1‘]ú:êÃ&¼@ËŞDO‰Ÿ…ˆ”?x\0ÄÜ›»/í(¶R S¹w¼‚#â4Ô]Zƒ‚N”ıARI	9aĞ9ÀVÃ`ia¬õ¤A\0v!°:¾‡ÂCxd\r!˜<‚\0Ò&ÂİÊ1D…b\rˆJ#§xEÌ1 \$](*ãNG‘‰Û6itõä*w`¿€f¦©ÒtÍ9‹'e®d“¾Cî_'˜ãc™H6LäÚ¸âRßI¹Pk	.4ÂÔK…kõF˜X–p˜Ã:\rÁœHù\"!ÀrzO”:#Èä”\$C¿Ò½Œúl!Í@ø#u#	\"l7Ñá¥\$[eyt3­Ñ5KzvBsàÄ´âïcÄ5%d\\€";break;}$le=array();foreach(explode("\n",lzw_decompress($i))as$X)$le[]=(strpos($X,"\t")?explode("\t",$X):$X);}if(extension_loaded('pdo')){class
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
as$z=>$X){$z=bracket_escape($z,1);$O[]=idf_escape($z)." = ".(ereg('char|text',$q[$z]["type"])||$X!=""?$c->processInput($q[$z],$X):"NULL");}$H=table($b)." SET ".implode(", ",$O);$He=" WHERE ".where_check($ue,$q).($Z?" AND ".implode(" AND ",$Z):"");$I=queries("UPDATE".($lc?" $H$He":limit1($H,$He)));if(!$I)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(69,$la),$I);}}elseif(is_string($Cb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$I=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Cb,$Bc);$la=count($Bc[0]);begin();$Jd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Bc[0]as$z=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Jd]*)$Jd~",$X.$Jd,$Cc);if(!$z&&!array_diff($Cc[1],$La)){$La=$Cc[1];$la--;}else{$O=array();foreach($Cc[1]as$t=>$Ja)$O[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$I=insert_update($b,$O,$nd);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(71,$la),$I);queries("ROLLBACK");}else$o=upload_error($Cb);}}$Yd=$c->tableName($R);if(is_ajax())ob_start();page_header(lang(35).": $Yd",$o);$O=null;if(isset($Bd["insert"])){$O="";foreach((array)$_GET["where"]as$X){if(count($Lb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($R,$O);if(!$h)echo"<p class='error'>".lang(72).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($M,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($ad,$h,$x);$c->selectLimitPrint($_);$c->selectLengthPrint($be);$c->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Ob=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$F=floor(max(0,$Ob-1)/$_);}$H=$c->selectQueryBuild($M,$Z,$Tb,$ad,$_,$F);if(!$H)$H="SELECT".limit((+$_&&$Tb&&$lc&&$y=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Qb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Ub,($_!=""?+$_:null),($F?$_*$F:0),"\n");echo$c->selectQuery($H);$I=$j->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($y=="mssql"&&$F)$I->seek($_*$F);$nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($F&&$y=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$Ob=(+$_&&$Tb&&$lc?($y=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".lang(63)."\n";else{$ya=$c->backwardKeys($b,$Yd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(73)."</a>");$Nc=array();$Sb=array();reset($M);$ud=1;foreach($L[0]as$z=>$X){if($z!=$Qc){$X=$_GET["columns"][key($M)];$p=$q[$M?($X?$X["col"]:current($M)):$z];$D=($p?$c->fieldName($p,$ud):"*");if($D!=""){$ud++;$Nc[$z]=$D;$g=idf_escape($z);$bc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($z);$Xa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($bc.($ad[0]==$g||$ad[0]==$z||(!$ad&&$lc&&$Tb[0]==$g)?$Xa:'')).'">';echo(!$M||$X?apply_sql_function($X["fun"],$D):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($bc.$Xa)."' title='".lang(74)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($z)).'\'); return false;" title="'.lang(30).'" class="text jsonly"> =</a>';echo"</span>";}$Sb[$z]=$X["fun"];next($M);}}$xc=array();if($_GET["modify"]){foreach($L
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