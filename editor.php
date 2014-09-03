<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.0
*/error_reporting(6135);$Ib=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Ib||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$Be=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($Be)$$X=$Be;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©–¨a'3IĞÊd«Â!S±æ¾:4ç§+Mdåg¯‹¬Çƒ¡îöt™°c‘†£õãé b{H(Æ“Ñ”t1É)tÚ}F¦p0™•8è\\82›DL>‚9`'C¡¼Û—889¤È xQØş\0îe4™ÍQÊ˜lÁ­P±¿V‰Åbñ‘—½T4²\\W/™æéÕ\n€` 7\"hÄq¹è4ZM6£TÖ\r­r\\–¶C{hÛ7\rÓx67Î©ºJÊ‡2.3å9ˆKë¢H¢,Œ!m”Æ†o\$ã¹.[\r&î#\$²<ÁˆfÍ)Z£\0=Ïr¨9ÃÜjÎªJ è0«c,|Î=‘Ãâù½êš¡Rs_6£„İ·­û‚áÉí€Z6£2B¾p\\-‡1s2ÉÒ>ƒ X:\rÜº–È3»bšÃ¼Í-8SLõÀí¼ÉK.ü´-ÜÒ¥\rH@mlá:¢ëµ;®úş¦îJ£0LRĞ2´!è¿«åAêˆÆ2¤	mıÑí0eIÁ­-:U\rüã9ÔõMWL»0û¹GcJv2(ëëF9`Â<‡J„7+Ëš~ •}DJµ½HWÍSNÖÇïe×u]1Ì¥(OÔLĞª<lşÒR[u&ªƒHÚ3vò€›ÜUˆt6·Ã\$Á6àßàX\"˜<£»}:O‹ä<3xÅO¤8óğ> ÌììCÎÚï1ƒ¢ÕHRâ¹ÕS–d9ªà¹%µU1–Snæa|.÷Ô`ê 8£ ¶:#€ÊàCÎ2‹¸*[oá†4X~œ7j \\ÁÃê6/¶F[NYƒè\\¹¬ˆúê…n¨o5<¬°lÍápÔ9ÒcFZsÃÒ|:>6 –«kÅvâ©Ãqs¤:£pö8\rë#¨È^¢¯nZ,B2)OÕÎÓR¯ı[Iö±ÕÚ7²¨tÒ”·7ì(áœñ¬WŠ0øó¤æ2x~]ò;ñK2ŒĞVaĞà»ó~–r=ú‹(Ëë¢,³›\rîÉj*ºB(Rî2C–N\\ŒÎÿÒ9}a\0Å•ÓVR4G«Bè©ó¢ÖìC(s(mm½ƒ¢(wƒsñnmú¹·ÔB\\lMi#;#ø¯Uáş=M-~±õäæÃh)°5	ƒpŒC›±/,Ğ²Ø]ƒs …Ø#CvìŠM ´>÷6@–hu¯ø„`k¢s›ryS‘\"Îòâ“…&5ÅuÑ\"cu/L	#DBÈO´M€è™¦ìˆ¸ctê±W6\"¢Ÿ[›‡!´1Øè`#´EdnèÉØLwmÙª5gÀÆÃAçU íF8Û¨\\M-Ø7‡Nâ\n:`R>KIã\$ä¬—j!¾M9²\"OÉê&BÌ­wàİƒ˜qZÅÜ«J™\"AÃ…(\rê_sîÈ}>Ìœ&ÉHÇ´“nÊœ6/ÆC‘¼fÄì89³@ÖÃ›£t¥”4˜€ÌCÁx6fÔÛ•5HÉPæ?€ÔüD·æ³ÒõAŠ\0á‡ĞG!ÌâtÓ•Ô'TY¡I„Ì+”ššLnù] Şf(1*Z«@êÍ\rRøÕ®Äg˜‚h!C¥‰öp1*€Œ2P`öĞf!Ü¸8¸#?ˆA`°¤4‹8_ÖZ•½ wN)ÓÄR`7Ñ5Z`*…;DíÈéA* ™TTˆ˜+#ü~Jp¢0GPH³qŒ¸Å9©ó]JôD+eu5-Ü©É¨tT:«*ãa5Gl–­ºó6&ÓÚ\rå@³*ÂÃ=qgåÎÄiüA•© iG²Š¯#á<i—„ËøøPºÂL#¤ f!ÔwWDäêA¢ó¸¨>9’Š‰<\"µ/Û ü¥àdaÉĞ?º’øê[ÙyOüÎ7OTè5¶¡úw&àkg²œhöı’šÛo!—]öÒùâîÏm>³™˜èhu”ı‡!6\$ÄW‡\0Ú¢`[)\r:fŞ(\$²p éÁ˜‰gs‹e2Ñ»Ê.\r˜ıÕ¶qÜØ’zÁhm\ráè‡Rle	ƒC.j ÖYq.'(Äï9“„p˜aRu0'd¦B©j7a¦4YkR{Á‘øšód¬â,?l§%´»%r„Oì\$©Êb“.ïÔ»†åg8r…×¶¹PÆàä` <8Töß3çk\n›vÌù¤88Üæª«8eÎÙ¡IÁpåóH.ƒP-#_˜Wó›ÎàĞkE|-(2Ğæ}FŸÀcBínoÃ9Ë>;°n]Ít^ª¸ñwĞ\rğ=ù¹£­9šk}°Ğ€]Gwªœ«ÔÒÓ8„hñÑ7Í\$Àß‚†.`C)bVlfH pø)`ºoÀn˜µÉµ¦zÖe£€,N˜º–ÏœUh_]Ú_×]“ë·n¾à[ô¤Ø»ì‚½”]Ç¹:†>mrC¹36Ñ»Ÿ\n‚İOj¦f‹Óæ‡~?¾¹î¾,äÚ[E»ƒ=DÛYk-‹ı¹mè¤û«lOõ¨.fı¢ü™è¼h±tŞcByüµæ>«tÃæE‡@>‡Ğ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n:Ìæsa”Pi2\nOgc	Èe6L†óÔÚe7Æs)Ğ‹\rÈHG’I’ÆÆ3a„æs'cãÑDÊi6œNŒ£ÑèœÑ2Hãñ8œuF¤R…#³””êr7‡#©”v}€@ `QŒŞo5šaÔIœÜ,2O'8”R-q:PÍÆS¸(ˆa¼Š*wƒ(¸ç%¿àp’<F)Ünx8äzA\"³Z-CÛe¸V'ˆ§ƒ¦ªs¢äqÕû;NF“1ä­²9ëğG¼Í¦'0™\r¦›ÙÈ¿±9n`ÃÑ€œX1©İG3Ìàtee9Š®:NeíŠıN±ĞOSòzøc‘Œzl`5âãÈß	³3âñyßü8.Š\rãÎ¹PÜú\rƒ@£®Ø\\1\rã ó\0‚@2j8Ø—=.º¦° -rÈÃ¡¨¬0ŠèQ¨êŠºhÄb¼Œì`À»^9‹qÚE!£ ’7)#Àºª*ÊÀQÆÈ‹\0ŠØÒ1«Èæ\"‘hÊ>ƒØú°ĞĞÆÚ-C \"’äX®‡S`\\¼¤FÖ¬h8àŠ²â Â3§£`X:Oñš,ª‡«Úú)£8ŠÒ<BğNĞƒ;>9Á8Òó‡c¼<‡#0Lª³˜Ê9”ç?§(øR‰#êe=ª©\n«Ãêª:*êÊ0ÖD³Ê9C±ˆ×@ĞÖ{ZO³ıêİ8­¦iªoV¨v¢k¨Arª8&£…ğø..ƒÑcH¡EĞ>H_h“ÎÕWUÙ5áô1r*œ¦Îö^Ğ(ÛbàxÜ¡Y1°ÚÔ&XHä6…Ø“.9‡x°Pé\r.`v4‡˜”¶†Ã8è4daXV‰6FÔÕEğHHºfc-^=äÂŞt™İx‹Y\rš%ö«xe çQû,X=1!ºsvéjèkQ2É“%ÚW?öÃÅ®Œ´æ=dY&Ù“¤VX4åÙ€Ì\\—5ĞßãXÃ¬!×}âæµNç¡gvÚƒWY*ÛQÅèi&ÈğlÃÎÑµZ#–İãñ Õ‘\rAç\$e°v5o#Ş›¢Øü¶5gc3MTC£L>vÎHéÜÃú–§<`ø°Ú* ]‚_ˆ£;%Ë;îÚV–ùi“Àèã4XÃé–'”Œ`ºªÉãi×j0g¶O±†Û¥“iæŒì©9·Æ™Û’dİFêÊÙk/lÅ¸–nÄÜc<b\n‰¨8×`‘H“ëeÅ}]\$Ò²úÖâ í°!†ÀÒÃC)±\$ °šAğ×`ó\0'•€&\0BÎ!íŒ)¥ò˜´5E)äÁàÒÂo\r„Ô8r`ûÈÌ!2ê­TÁ›s=¯DË©Õ>\n/ÅlğÓ‰’•[ı˜Å PÛàa‡8%ø!İ1v/¥¥SUcoJ¨:”4J+Bàó‡µv¯Jü‚\ráâÂb{ƒ ,|\0î°zöƒcÜªÅY§Ål®\nüœi.õÜ!äÛ)ü¦dmîJ«¯ÑÈ!'ÒÁë B\nC\\i\$J˜\"¾ëÖ2È+çIkJ––ñ\$Š‘’âG™y\$#Ü²i/¦CAb¾Ìb‚C(á˜:°ÊUX˜¯”2&	Ç, Q;~/¥õKy9×Ø?\r6¾°tVÊéÑ!º6‡CP³	hYëEÁÓÎØâ£ölñä(Ø–TáÒp'3ƒĞC<Ødc®¸?°yCçóşe0¼@&A?È=¤å%³A:JD&SQ˜Ñ6RÌ)A˜Ğb`0Ú@ˆéu9(!0R\n‡F „•ÂŠ ÄwC\\‰©Œ¤Ï…rÔäÜ™¡î¤#•~ğØ2'\$¡ :ĞØKÁ`h¬³@‰£Ebó¢[Ğ~¡Ñé’â TæÅlf5ª³BR]±{\"-¤Ğ\0è­ÊL>\rÇ\$@š\n(&\rÁˆ9‡\0vh*É‡°–*ÆXë!_djˆ˜ƒ†åpy¹‡‚¶‘`ájYwJ‚\$ØRªˆ(uaM+Áêníxs‚pU^€Ap`Í¤Iì’HÖ\n¨f—02É)!4aù9	À¢ê•EwCİĞ¡˜“Ë© ‰L×PÔİÄşAiĞ)êpø3äAuâÀöıAIAÉHu	ç!gÍ•’U”‰ZU·À¼c¤*­´À°M„ÃxfÆ:ËÆ^ÃXp+‘V°†±á²K‰C#+¾ ÖWhúCP!ÈÇÀ;”[pn\\%˜´k\0„ô²²,Ú¨8à7ã¬xQC\nY\röbÿ£XvC d\nA¼;‚‡lF,_wrğ4RPïù»HAµ!ô;™‰&^Í²…\"6;œå²êÎ=÷#CíI¡¸¯9fé'¬:¸ŸDY!ŒÿB+˜s¡xV†8lçÃ“¡\"Ïé‘ƒÍHU%\"Z6³Ôu\r©e0[Á•pÄßØa¡è.…À¶ +^`œ`b§5#CM‰\$² ûIçîËšAÌP§5C\rı S•dêWN6H[ïSR½µ·êß\\+Xë=k­õÎ»×ºş¼S”¶Ór^(¦ƒoo¶7™¬Ï©\\huk¢lHaC(màìşønRB†¤Uup³Ú2C1š[Æ|Ù½ùbeG0ĞÙ\"ìCG±²?\$x7Ğßn­¤\$ZÎ=ŸZÓ¦Ãsi5ËfÏí&ç,®fÓhiÆIÎyÖnî¶2ò0ÚœDvEüÃTïxôúMå{àô`Ü¤ÁGN#é‚Z,«Âƒ/âR\$”#\\I-	®„°—|Ä0à-0ı‰Nî¦P·ÉÒ¤;s-˜vô–ÏÒ†ÿ½‡nwGtï…n”¡ÒdiáH×|¥˜4¤(½¼+¼vò¥İ&ØÅ…’+KÀ£Ìñ™L\nJ\$Ô©ı†¨µ:\\Q<WB\"^—Íñ¤ºWTIB~Ñßq¬Éåğ}ó3ŸÎ¿\":şU‡á­Ö|\r5n(n™­ˆ‡ Ù7ƒÌOÁD}B}‹¼¨æÊ\0\r“voÜ•„…·Ø†_Jl‚Ä°•H3‘\"®[Ä¸âå¾ÔKŠAµ`ß–ù¯¦NÉÂü&(‚)\"ˆ fÿ&Å\0°¦ b¾ò¨lãF.Âjròî”şâJÂˆÆ\"P<\$F°*é|f/Ş! İOççŒpR Ç™„F#5gäbã Ä8eRDi¸É0“P‚+*¬üÆı™kZ;ÃpHh¦®l!è\0\r\nc›oÈ/¿úCBˆ<pyÀNTH½hêTç	ğ@éğpxÌ\$¢Šæ°ÌÀÖ48\n€Ò#îNU,Óˆš\$Pémò YKü¬\"H Ò †RıL¸ı‹®©DŸ\0‰¿âˆ€aWˆ`pûïşúĞgğ¯êlP¤Âÿoú:L€·Ê+\0 ]0±<)‚öN«xk\n(`cê„+r·k{m\"â3.0±H1’e*ZoeBÌ‹9\rÈøÚ\0RLi¥Q¨UğÔ‹`äÂ.”ûñÂ–o:Åd€´Â’µT7QœÑV »ÉDh‘âWæ´ëS1ñ	ñøgæ*2¯‘,†W)°Á@çÏ°T@C	Q(ñ,™Å4æ#d<Ò’\0¦! á\$˜ú2 {es¢´+…rÊ«şÍìÎJvY*ŒHPr\r¤‚†ÍTÜM\\\\`¼¿ívíàæ<ñ«&ÄnôD\\HHÈoj^@¢Ú	 Â<ñŠ†¯ëÆ8Š“*#fò©*Çş\r\nT§ \\\r²«*çTª^* ÚÉ Ê\$ª6oŞ7òĞRee8³ Êç²¡,Ò¥,Ó,`|9°K2Ï0r±+Ò§1RÖä\"È Õ* P*å¾È†M\\\rbà0\0ÂY\"ª\"ºUx†Ù`°±êÈ€àQ“E\rÀ~Q@5 ™5sZ³^fÀR@Q4ÈdÀ‚5Ãb\0@ÔFób/€8\"	8s‹8â<@šƒãìl2\$Sh± ¨\nÎR\"Uì43FNÉ«7\"D\rä4úOI3Â˜\n\0\n`¨``³â Y2Êğobñ3óË<n6“]<`ì\"’Ó Nˆ\"B2àZ\nˆüm¥ àEÀƒëîé\0ğ£üàZxÀ[2Â@,Â’’÷<Pİ?ô\rÔ8#d<@°´JUŠ¬K/E¡;\$«6óÌS”DU	l;¤,UÏLÎ’ñ7fcG\"EG€ó\$£¨\"E€Ù3FHÆ¤I“Ìãd‘=e	!ÒUHĞ‘23&jŠÈ¬Ó*úÂ%%Ó%2“,ŒÓJQ1HÌl0tY3öÁ\$X<CÄtà4ë_\$\0©ã>/F\nç¢?mF¬jÖ3¥p«Dá„HKœv ÈºÉœ\0Xâ*\rÊšåÑ\n0Ÿ‘e\nÎ%ïœºäÁ\riûÄêO€Ãfl‰Nö©M%]U¬Q¹Q½Lé­-†÷SÂ±T4Ğ! äU5T\nn˜di0#ˆEŠªM£ˆ³«i.ª°/U ¸é\rZFšúÓj„®¨;¢òíHÏâ˜d`m¤İ©ú–Ğ\nıt„ƒQS	eé²³|Ùi²šñ¬ÁQt¦ dò12,›öÁDYò1UQSU¬±cd±«µÄEˆ)\\«–¶ÂLö	ìF\$¶@öå³Vï{W6\"LlTÄëAò\$6abã‹OäêdrÌÉLp†c,’¨esÎ¨<2ì`Æ@b€XP\$3ààŒ@ËƒP,úKÍVÕ­^õ¾àÏM”‡Lö°¸ué1şÙ@îc•ˆt-ä( ¸ `\0‚9¶nïç2sb„¡Ê/ ĞFmä)¶ôƒ´ÿHl5ó@ÏnÌl\$‡q+ğ:®Â/ ¤ø§dŒÏ,òà\n€Şµˆì„£.4ú–’\$ ³w0\$€d·V0 È´\"¾ÃrìöW4678íVtqBau÷pÃ€ŠI<\$#Åx`Éwd9×^*kƒu×ofBEp	g2³Íóf4 à‰L!êr=¬\0§ñ\"	Ú\r<êÕhöÓÒæöˆU…%TÓhËëBkòº#>Å'C¥p\n ¤	(‚\r´ú2ö‡Â\"3â‹l•õMÔ‹7ıGÅx.ˆ,ÖUuØ%Dtø Ãw¶y^­Mf\" ‚ŠƒŞ(vU„3„u¬£J^HC_IU–YkS…—‡c_ylc†c]rF÷å×_q¤%†W#]@Ër²kv×3-ãcyÄÏVHJG<€Z¥öTè@V¸8œ\$6‡oƒ2H@˜\rã‚äÂª\0Âˆ=Øİö·æ¹\"3‹9zõ²:KõúÂu¯K >‚¢Œ¿B\$Ârİ.äJÒê<KõG~àP¿X´€QMÆ¹	XŒ‰w\$;Êæmp”Zp• åcK!OeOO¸?ïwpæÄæ‡¤í†Ö ¦ÚL—¶I\nŒğ•?9xB¤.]O:V®„˜ß9ßÃ.ÅmWŠ\0Ë—s>”*´l'«õk­Æoph»’èx¼‹‹«Şv´L`w1”÷° €è!¸M¨4\"òI\$Õ÷\"oõ\$À >Ë™Bea\"™ñŸDÿBoƒÊ¶ü+ì B0PxpŠ«&àá7Ã|p{|·Ï}7Ö°Â\$-P£‰‚éú@b„…¤õe¤ÆåÊVYmoMoŠ\0¢§£Nzn*>İÎ„€)¢ò·Èˆ×-H‡l!®“¼hpÆgÙË Š’¼Û&tZøãœ¤\0!‚¦8 É©¸¨àºZKŠê@DZG…Œ•Ÿº®øæ¶F€ç§©.† ˆ¼l¢üz%ÈÎ(ä¶xÙ}­ú'<šıÅª(°¼¥ú°ê<ÚXZÇ¬ºÚÑšà° É®g´ºí§ºò‡òw¯ºzÔz{°e¸'{;@å™±(&ø²ÅRà^Eèİ›xºå®›Y®ñ\"ËÌë¥MÜ’çç–VöÚ\n§5Ózl¥zrÔ[xŸ²Ëª’¥ú“»G\$O W @¤½À«Z¹xÇÎÕÄò­,Ì•”be»‰ 	ˆf£dÆ»Ğ2ûÕEÃ‹‹I¼D‘YTÙ%kš{ÎJ­\\\rºU N Å'¼_¾ÛÉ½»f|wŞµûàË,½l«7ªktø1RD>öĞ‹X‰ZîÍĞŠ­|y|Z{|×Õ¢Èî\r—é%;¬#\0eK¢	XÎ8&>7‡­ÖÎrhÎ:øLLª¶K*6U/\0004ØÎg™¢Eñc\n®jò•{Vœ[WF}#q İTÖû1abÆû\n‹1PÀÆ~íî((f+W‹?lîĞÑŠ·OÈüÒ#Dc€8€¸»Æ“šòkà\\@z×cÏ¦lñàé1lÆÌ—v~Õ ò(«L/cA%Ò#ÁbÈ„4Ó4Öíè÷ÍÑeZ2Ï®-\r…|ÑÎ1ÑŠ)ÎıK…<`¸Ù)2ÀW€“€X\røĞWÖd½>ÌÒ\nÌ­SX}Œ\rã‚¥EÔR¾(„â¼ÑÑ]`e9M•\0{Ù}šÕk+ƒÀË„¯ı³ÎÖ}Ò*&½'pƒ¤ÁË§ÎÏLó¬%DÂ}êwtëÕGwÔÀ÷Õ«oÕıçÎâ“CÀË×œùØSš«£´ıĞ\r<&ëB†8„mµ&‚€");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
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
as$t=>$Ha){$lb=$ab[$Ha];if(!isset($lb))$lb=$Qe.$Qe[0];$K.=$lb;if($t)$ab[]=$Qe.$lb[0];$Qe=$lb;}return$K;}global$c,$j,$fb,$jb,$sb,$o,$Vb,$Yb,$aa,$mc,$qc,$a,$xc,$Vc,$md,$Vd,$pe,$se,$xe,$De,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$kd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$kd[]=true;call_user_func_array('session_set_cookie_params',$kd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ib);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$xc=array('en'=>'English','cs'=>'ÄŒeÅ¡tina','sk'=>'SlovenÄina','nl'=>'Nederlands','es'=>'EspaÃ±ol','de'=>'Deutsch','fr'=>'FranÃ§ais','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'CatalÃ ','pt'=>'PortuguÃªs','sl'=>'Slovenski','lt'=>'LietuviÅ³','tr'=>'TÃ¼rkÃ§e','ro'=>'Limba RomÃ¢nÄƒ','id'=>'Bahasa Indonesia','ru'=>'Ğ ÑƒÑÑĞºĞ¸Ğ¹ ÑĞ·Ñ‹Ğº','uk'=>'Ğ£ĞºÑ€Ğ°Ñ—Ğ½ÑÑŒĞºĞ°','sr'=>'Ğ¡Ñ€Ğ¿ÑĞºĞ¸','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡','ja'=>'æ—¥æœ¬èª','ta'=>'à®¤â€Œà®®à®¿à®´à¯','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','fa'=>'ÙØ§Ø±Ø³ÛŒ',);function
get_lang(){global$a;return$a;}function
lang($v,$D=null){if(is_string($v)){$od=array_search($v,get_translations("en"));if($od!==false)$v=$od;}global$a,$se;$re=($se[$v]?$se[$v]:$v);if(is_array($re)){$od=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D%10>1&&$D%10<5&&$D/10%10!=1?1:2):($a=='sl'?($D%100==1?0:($D%100==2?1:($D%100==3||$D%100==4?2:3))):($a=='lt'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D%10<5&&$D/10%10!=1?1:2)):1)))))));$re=$re[$od];}$oa=func_get_args();array_shift($oa);$Pb=str_replace("%d","%s",$re);if($Pb!=$re)$oa[0]=number_format($D,0,".",lang(8));return
vsprintf($Pb,$oa);}function
switch_lang(){global$a,$xc;echo"<form action='' method='post'>\n<div id='lang'>",lang(9).": ".html_select("lang",$xc,$a,"this.form.submit();")," <input type='submit' value='".lang(10)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($xc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($xc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Gc,PREG_SET_ORDER);foreach($Gc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$y=>$vd){if(isset($xc[$y])){$a=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ja[$y])&&isset($xc[$y])){$a=$y;break;}}}$se=&$_SESSION["translations"];if($_SESSION["translations_version"]!=1561852702){$se=array();$_SESSION["translations_version"]=1561852702;}function
get_translations($wc){switch($wc){case"en":$i="A9D“yÔ@s:ÀGà¡(¸ffƒ‚Š¦ã	ˆÙ:ÄS°Şa2\"1¦..L'ƒI´êm‘#Çs,†KƒšOP#IÌ@%9¥i4Èo2ÏÆó €Ë,9%SiÀèyÎF“9¦(l£GH¬\\ç(‰†qœêa3™bG;‘B.aºFï&ótß: Tó¡”Üs4ß'Ô\nP:YîfS‚®p¤Øeæ,¡ÌD0ádFé	Ò[r)+vÜñ\n¼a9V	ÆS¡Ş´kÌ¦ónÓcjäADS!¦2rÉœ¢›ĞQBğsÛŒ–£}tİÍÊm˜jl{­a2Äj¤2Bb<áA\"_?§2yÌÒÁBAˆ´H3û\rAE3.ÀÆ4K`ò;°Hö­\0ÚãBÆÓ/ØÊ‹ÁîZí\$ÀPŒ97Øê1\rC,*\$°ì¤ ‹#şŞÎøÒ<Êt.0¤Á\0Ğ¼ãƒ»sÖŒ±šLŸFã²\rÑäZ”)c¸\$	Ğš&‡B˜¦cÌ´<‹°¸ÚŒ˜˜ê °Kù\n)£#B0CcU	R3‘ÃØ4¤\"¦)Ì°Ş5°ÁpA´¬H­&„h7%Ï2 ã¨Æ1©#˜Ì:‰Cø9±å\"8@@—*1ËŠ\"É­5J±2J8\r(Èëú¼»ÊòD3ÑiDé;O\0ÇY;ƒLìÉ,L{\nÃÕ«\nø¿02PA	¨@(	…”ÃS¬8@(JD€¤SªL²Œ©BT–%É€ÜÍ²ş˜¦v²K	Œ‰òŸJ&µU®»¯*õ‡[ L`*\rèĞÄ®Zâx¦*RÉA\nI­\$ŒPØ’F­<cv¼c*|1¯‰*Ü945n#XÄM4_0©„nŸIŒ&ÚU@P“˜ÆÑÆjbYÎvª(îh2Çjòè90£\"PâA–L8;²BÊÈÁ—Z«c²Š¸§ÈÊ68h,°Ğ²×E40ÈÏŞØ-‰I«Ã«âÌÛ{FéQ6´Â3ù»¼™–}¤I#Ì3eµT~ñæ2&õšñ\\dœˆmPØŒs¸Æ5Ş\\HA:›´ıQî(Ì<ò	CØjz5M¤ª¶®Çê|–³š¥µ™œ¢wGNºM21tI¬2)4£H¯àV*6e,S&§oî7tÛÔ=^Í´t›²Pç.3jñÌi ê\$EÉF:Ÿp7ê€T7§\n›€PC#Åôá‡‡|‚BKµiˆHÿ†\"šØëiU&x*<€¤şó¯-ØØ˜ôDZh 	á-A¨8JLpkB0\\";break;case"cs":$i="O8Œ'c!Ô~\n‹†faÌN2œ\ræC2i6á¦Q¸Âh90Ô'Hi¼êb7œ…À¢i„ği6È†æ´A;Í†Y¢„@v2›\r&³yÎHs“JGQª8%9¥e:L¦:e2ËèÇZt®\"=&ŠQÁŠ¯œØ¦ ¦*öEjTˆ†ÔØk<ÊÄ\0¢Q„ôy5‚ŠÇ“è\n(¨³SlŞLÅ_MGHå:ÅL=(†ã¾€kT*uS‚²i­×AE\\¤ìaÊf¶Äèy8ALDdÔæl0‚ˆ›®4Â b#L0æ*`Êtb&ÏF3((„iœ¦ŠĞQNjÅR‚ˆæSy·r4õJfSÔxÛº\"™\r'IN¯[¯Ø‚‰]ù¿‹\r#@Ø‘oš6\nƒ“_®+2/\$F)B-bs<‘1ÈË 5¸!(ÈC&ÃÑDÛÄüBÉ¬àPÂ7?ÃsªÁpHFÁ‹<ÀC*(Ãc Ê¢(C³º2¢ÃäÃ‰‰ƒæ#[©›`¡hÚ0£\0PŸ!i«€üŠ´|6º,8­\r2,<ÊLÌCxĞİKïäÆë#`@‰ÎÉÜĞÃã,µ.\rp!O#Ì÷0@eİED´¶Œ/4<òOüüR40³¥l¡ˆG¿B@t&‰¡Ğ¦)C \\6…ÂØåYBì¼2B57²I¸#`è9HğPËb\"„Æš«Ş5§\0†)ŠB0\\N°’vÊ2R6®Ğ‰2=¬ğê•ËõÌ%\n&ÈŞ1:04;1È²Ş5Üò8çóıİ4crÆ\\\nl1eêHœ'P¡R©¿—äş;7•Öà‰¼\"©89£—vÆÜ£µódÙm®5¸“<0Œi¨@a—H£T¶­ø=BNù3v!÷`@2(£ ê8`l†s•3(È‰1M}˜1\0 \$\nw•³3¶\n€R•ÑÔ!±NM£-¥é‰B™æXbwf1ÛV&¶¸µŠBVæDÆ4#šW7ÌCL\$Ÿ¨-¢|(	â˜©¡¶ôó\r×]¹`*éEÉ¾cÁ\0Ğ‰Æ35~ŒÃHÎ: NN¾ùRè×R\rğÛ1O.8ç-S÷%ÙÍäAÜ„×£*õÑİø¡ÚvÊ‡†à'óbyßŠ¨\n'ç\nà^Şòğ•¢u¸7«åì7::ü|ùåé&Œú.K¢í|%b¬Ù'ÿ]¬ÚñLpku\"5ø“óL’Ù€i5oì’pí€lk‡uŞ%vÊày®}Œ@.BÀ{”3eQFy\"Áµ]è¡=¡„÷Â/!+íSˆ~Â°Ú¨\0PCXa°†²„àÚÜ#Èdšœ’ˆÆ^:ÇeMPê-ÀôÀqól‰ä }²~…~BàØ¢¢±)‹	ùHCH¹T±Š¡¶+¼ÄaáQî‡\$‰‘R/™?W¦Áú—Rî@SG AÙ'²¶Ò‰‚EÍ9€ –G\"{í:%ÈÚ¿G>Xƒy·1ÁÔÖ™28DĞá™Ol:5†Ÿáe(¤ìµÀœGÉêC€‡ËD¯ŞK\\rÌ„!÷ÂƒZ)|	Áñ™…/ÃZ-:ˆ\rfÅ‘zoÑòC‘Äe„°\"¸\n	1²1#´zåÜ¯Ü‘5Dı‹¹Á9«İ¼ù\"ÀP1·\0";break;case"sk":$i="N0›ÏFPü%ÌÂ˜(¦Ã]ç(a„@n2œ\ræC	ÈÒl7ÅÌ&ƒ‘…Š¥‰¦Á¤ÚÃP›\rÑhÑØŞl2›¦±•ˆ¾5›ÎrxdB\$r:ˆ\rFQ\0”æB”Ãâ18¹”Ë-9´¹IÀå0=#\0¨™¤ÎiLALUé¤Ãb¦&#¬üÖy”ˆD£	èòk&),œP9P˜jÓlóe9)”»\$ô  ›Œfó±¤Êk¦œê4j¥\\ÓY­™e%V*ûv0ä§ç3[\rR :NS‹9› ¢\$Âµ‹1¦iHË'¾˜Ì ¢¢`r±”óØb9”Şm2#Ü2Ô\nfmŞL†“¤Oo:ëuûòøH2ğMøxñ Ø˜cJˆ9¸b äØ?íº¼4¿ĞrÏBs8£IZ5¸a(ÈH èÃPä<<ÄÜ:5=£°<¿ PÜı„°\\‘˜bÀ#B~·¤Å(5ŒŒøŞŸ§¬Êñ3Ï[&%Ï` cİz¡hÚ0£àP2(Ló„Ù>Ì@Ê2<£Ğ|Ä1i\0ĞŞKê„ÃI¸@ÎÃ\nt^©°ØË-Kƒ`\\Ï#`Ó=ÌüÛP!-£ëÅ›¤3å?ŒcE#IĞ¬âRÉ\$£Óî\$Bhš\nb˜2Ãh\\-U¨ä.ËÃ\$PÀ,3*•°\"ˆ28ÎØñ!Ì‚z9B(ÌÇ?·xÖœ„¦)ÁpA:˜©‹Ø¦È˜Ú:¿å\n(=Eí‚S/×cœ¦+Ã(Ä2¿Éì#OÈ5ª‹ó\0ãuğ9¯\0Ü6÷‹CÊˆš¦éËmx;7C•º0¸Af\\ªÊ™`lS]àÂ”‰Ösc„cïó™•JJb +‹ZÚ·£=[¬^7Bs<¥)”j´8f\rjÜ¸eÂ7|åTå=Ÿè%n†Å„Bœ¥4NÏ±.V%@Kij^˜ÃÎ¥³š’lœjÚ“şVÛBĞìa—¶ë%’l[§%3[E[©ãêÚ¶â€)ŠˆP®[Î\rnÛü•Šc—’B=o{ï(¦\rÜ^­3Ì³©.Ì5rCN5~İÂ=ód1&è¶1- kOLBøg{Îvƒ®84Zªaá÷C\nŞ8IäÙ‰-Z¼0³¬2Ù§ç·Òî”‹/€@4{Šd_³©ÀÎüÚ!\0ê8#›øè44íÂæœ5sdÜ‚«ş(„Ñi:áÊŠ\"÷\"m½Š;\0 ¥sX7´âˆ1{k (-<®ˆP¬M¦}ê)ì`yÄa«†xƒ`+\rj(5´FşLÛ±‹9E;B&¤éÒoáéƒ&æÂ‰rùE*=@\"ôX:‡Q*.\$‘8–Ì\"tP'¢))€AL‹ÎªuHÄñBº\"Ú¢AP¹—R€RY!#Dp°>~d•î£çšjaÓ\nÍ\0R’3x™™C)&IJXƒy¹jGÅ6·ò6†¼{{‘‡\"`À\n#G3§ğyo-SÊ”6H›I6(e\r¯¥¤‰YóO.òáñÀtú€t2‘0\0–HJW¡â%\0 ’fi‚GBù,76½Ë‘t.ÄÂÆÉ´PR—Fğ*ÀÄÜOéá( ";break;case"nl":$i="W2™N‚¨€ÑŒ¦³)È~\n‹†faÌO7Mæs)°Òj5ˆFS™ĞÂn2†X!ÀØo0™¦áp(ša<M§Sl¨Şe2³tŠI&”Ìç#y¼é+Nb)Ì…5!Qäò“q¦;å9©²gÎF“9¤İ6ˆğ,šFl³MSR¡„Ãq¹˜GSI®äeÁa\$#ÚO7›#–1”ñD9×cª¡Î±Z”Q¤·èÊdÏañ8Xm(Ë23[,5\\6e*<œ\$˜y5âf\n\"Pç™[¬|È\n*Bä ¢¸ÂiÓ#–	œX;Ãp×3y¶k2‚‰‘ù.üŠd4-Z¬°äs7_ ¢¹„Æh:é§.9\$Ü—Œì›˜\rH¢ü7#ğØã‰Êğê;ª)[æ¥#ò•0¢E·cËv7\ràPH…¡ g† P´Ÿ¡ƒrÒ;!«ø)­I[M+-ĞäÃ#èÍB\\€\"…£k¸ŠÉ:.±NÈä89	úÂ 7îhÔ¡@B²…,qt42È²;-¬I’i¥3Œ4Šœ`9S*È\rÃ¨\$	Ğš&‡B˜¦ƒ\$Š6…¢ØÕCBè*½0¹ºƒr¦9££,|†·ã`è9Fhlß%¨/@Îb˜¤#'Ñh\\KOxè:£’„ËRv!¡\0Ş8+£,šÑƒ¥™ºI\"„0Œã\"j)¤ŒÊH#Hˆ>Ñü`Û!(úô*Â çg*3r—·I @¹×…u^AĞ‚Ü•%–ôŒT+eâ­Î˜ËRIªçb2ÌÂ¼ÃÚhíD–\n@ Ê²î«4Ñ>ì(Ä¿VABª¦©ºr§°;{1Áv\"FÓ0£¥WV\nmFª¦¢€)ŠhÈ¡Œ7\ràé)ŠvNí,×{o”ßk‚4¥9šM]\"“~R„\rºªkb3Ö*¼š‰0”Ç&¸Í¶±­@èàà0¤ºøÊ6éïT©)Ù,üœí®Ö5NbÈŞ‚\rÕ‚Ö;M’¢¦õ%º2X:\r\n’T0ŒK2j'r”âki•d‘ííÿ+É…šn(ø§×Ú,¡£¾»¢	KÓ³„Ë±ì³D#³ª}—i“B66cZ<×l­ˆ;â»»¦Œ¨VoÎ;Sœ5¹„rRexÚ8F¨øvÛŸÛ`¾Ï·îëÒZ4 £é\nìæô¢ÍKõ„v#5È™¸â’:ÕÙ=¤„Û‘àÜHAö\r`‰]Òdó@a?–: Ô—±z\n ç\0¥)â&¡B\"b´Q,hÁ…Ö·\">øHù¿,&ùQ7\"HTÑ¤8Ô—Æ÷€PEp9#c~_<ES¹µˆÏ™£R‡!ÆĞ¡Š.&ø©À¢f";break;case"es":$i="E9jÌÊg:œãğP”\\33AADãx€Ês\rç3IˆØeM±£‘ĞÂrIÌfƒIØŞ.&Ó\rc6ÀÏ(©’A*–K¢Ñ)Ì…0 œ¥rØ©º*eÀL³q¤Üga®©À£yÈÒg«M‘:}Dèe7\$Ñã	Î` L†“|ĞU9ÉÁE\nè€Ìa—J°aÔÜaO„ËlXñg7G\ræè¸‚‹H¥Pb§œE@ÓR˜\r1¨ÄøÍV4™\"²H±³\ns:Éî‘:É´Ë\n9‚ˆÆY^ ò 4WL ¢†}‡¬5ãx(¤e2ˆæ[©”èra«xdÌü›rE¹+·}†ËšCÉõí¦Y·lß`7t¶'#\$œ@côœ½~Ø™ÔÊ¡9ë…!£ @1+8ÀĞBÎÜ(¸­„¨^p¸bâ2k˜Æ4˜e›âÕ\rÌRá‰ï¢Ğ½;ƒhÒ:BÇÄ/ˆš½C\"¦ƒJÆ\"±‹`7<QˆÎ9 ëĞ‚2\rL3ÄïÃ°Ò½Aˆ´z×-“Œ—Áp0Ë+£Ì¦Õ-ÀPÂà¿@P\$Bhš\nb˜2xÚ6…âØÃ=Œ\"è&=ãxë\nÌûb6\r#ÓìüH‹CRæ¸)¶ò“U\nƒxÖ´¦)É¢Ñ\rP\\\nÏğØ;1ì£)¥b6ÄŒ2{2µÃ2º6¬c˜˜\nkRÎ§rxÂ˜H8‹¤É@Ğ0ŒQô^ã1¬b0ƒ2L¤ËJ#‘«8\r/Óê#+êşÀÔR:.6»;\$PÜÿ%É‚ä´ƒKN1Œ0û'QÕ%†˜\"\0Âßª…²‰ªÈC[±ln´[,¨ \$\n(Ş’\$Ïª0(¡J† ‹˜æ*¨ò¦â2%†'%\nvšbâGY\r¼]|ÌŒpÆèQëp@¾%:ú0­µËL¢€)Š•¢M[¦ˆä¶Hùj}S¹ã ê=_jÔ™¦©¸@ŠéRÏˆ±7y|Õ™«&Ó¡Ôii‰„î¡MjD°ÔÎr¾'zç}Ë{×ê-Dƒ\$¼HğãMù`¬ò¤´É®¦Íƒ^œŒ«Ò’>3²¯\n8>»Xè–#Z>˜ï›ëw)?v7ôeóy¾ÚM¹½ëéâñí½›³óñİ0ñÔªì¬ãjR3müLºû,¨Ãîxï@â:ã`V1Ñ41IYY%‚NÎ¼)=d˜J¼ïHY»‘TÏ}ÿ8Â0H˜â[L®dŒB:GÈ*¸7‹ùê¶ÇlpÃk†_NX½àæÏÑ(i_	ç˜È(„‚ªù}¤\\`İ	—‰ ƒ.UË‘—îBÂQJÅY³e¢ùÂ>¬©xŸÃyÆa± ã3º¼U©Ã®-ÏÀH¨n\0RH6\nE«Ÿ‚FGÒ(CVOU‡ˆ‚LY§\$ÁÃWb¬Ôä7\$È¶8'=Ó%‰2\0";break;case"de":$i="S4›Œ‚”@s4˜ÍS€~\n‹†fh8(o…&C)¸@v7Çˆ†¡”Ò 3MÃ9”ç0ËMÂàQ4Âx4›L&Á24u1ID9)¤Îra­g81¤æt	Nd)¥M=œSÍ0Êºh:M\r†X`(r£@g`¢\\˜İ*LFSef\nŠg‘†e£§S¡èên3àM'Jº: CjØ³ÉÃR\\ÍØCÔv«\$«™k'JÙÊ¡/4Hf˜,Ş- :ZS+Œ2½Åêmò\"Ô˜é¹“_ÍÆ³.3pB€°Ô‡ Q;šz;Ã\r`¢9”ŞmæÚ0Êt”Ü\n\"™1fş¦³9e(igg˜o3ÀA_ŸÖË+ècÎë¨b†Ğ\rÃšH=\"„<¤ HKB	p<ÂÃpŞ°\\øb½®P¹ŠØÄ£,ÃÈ·¼ì°Ì@ m\"B*Èó:£1éÎ\"…©ĞÒ6B´vÁƒÊ3È²ÃÆx™FãpĞé1\0‚15K˜óÂiìŠ0Èáä–Ì#rBHË3ÈãœÔ1MˆTÄ°CS®ã‰@t&‰¡Ğ¦)KÚcU5±¸Äğ\rˆãÏÍC¨æ;ºMãÎ6I«Ò;,¢¦)Á\0¨7Ìa3ÊÕŒƒœÈ+a\0Œö\r£ª5A	èä·°“¼Û1¦’ı(2UöÌ7¥’r¾š -^Ç²²–ÇŒ1ÈÒ;6ˆ:İj1q¨Î9Œƒ\n†Ík¥Ô”Ác2Å±¶ËbŒ#u–ÏB«X´‰h@ ßK¢8‰#u9'QÔ`š-¨\n\"NË†Zèò§§qJ¸¶1Ì„Ã¤£’Ÿ+0¯0@(	€[ŠbÙ.2\nR<¨ûØ4_4²«\\§IÂt'×R‚ƒ`ƒÓv8b6\rg2²ç“!KCœ™Ö·¢Ì!’Ùl…®â€)ŠŒ‚H0„0@£ê]h)¶`ôÒ±è-pƒêB”¦8.H9(êM·a •Í,\nêâ£; 9%¤-Î:¯¸s>óAL.ÖºpHTùó#×7.2<üĞ³D¦:¥²¬¯>d\"d”ó&‚ÈŞ:„åHCAùoÈã,Øƒ}\\8]*éÕNÃ¢ä±Úÿa¯^²Â0èc.cä¹âï:öäûh÷»à:HRÇõCt©+K(Ü:%7´Èˆ-0Òs	ásI¡½(/À†“C`+\rh¥76“~­C+â|Œ¨'gi‰q4L®³€Ú©´NmÓ#\\»”päæ?â¸²TĞwin9U\"èXÉA*%„¸˜%‡Hí“ïH74Ãyƒ5Äy»8sÈràqÀn&-ºãÔK‰sˆ+eQ1pXÙIã\räl€˜“îFÁ\0m=„æ†íÈë¡N1ÁÂc:w	pa\r¬”–†\"¼Ë`l\$&à\"‡ˆZia¸	0~È—Ì‰H[8#ÅÅ`%!¹€tÙ/R\rÖ";break;case"fr":$i="ÃE§1iØŞu9ˆfS‘ĞÂi7à¡(¸ffÁD“iÀŞs9šLFÃ(€È'4ÇMğØ`‚H 3LfƒL0\\\n&DãI²^m0%&y’0™M!˜ÒM%œÈSrd–c3šœ„Ñ@èrƒŒ23,Üìi£¥f“<Bˆ\n LgSt–d›‹'qœêeN“ÓIÎ\n+N³Ù!è@uÁ›0²Ó`é%£S#t„ßTj•jMf·B9À¦åCÉÂÂÌ0#©ÈN7›LG((‰³’™iÆŒVğC4Xjë¬h…n4ï#E&§a:‚ˆı]ÏV¿5œa`Q¦\$ÈiÚm°[ÔM7Ó¨Â†A€¸8†ì_f4³ëƒ ı¿©“şÏ¾ˆb€º¿Œp:Ã(Ø:£cª6Œ¯â(2xÆ€HKCÑ4<·£pŞ¨^qxb\nC*f†Fí°Ü”%Id:a— P¨9+/Úô?ü\0007Bœ%:9H“|À\nc¨Ôá#lëªŞ6Â€Òa•Z5\rêóz\"È4PÛDa0#:J;Îª·6ãËªDPäæÙNÈK>§O%L÷7:£šn MCrù(‰@t&‰¡Ğ¦)CPÔ£h^-Œ5(Â.·Î¨ÆÏ®ª ŒÊ»ˆ­\$ˆHÉV:­èØ¯É¨d\"÷\nƒx×„¦)ÊìÚ¢-(@Ä±iğÊÇUÌù7¥Ê²V6£bŞ&ëˆ@Ş Îˆ@±Si„•ÖŠ;Itu{zA(ğ8:5ÈXW÷[ƒ!lÀ©i†PT 2»ş\r/óUCB\\¦â+7³ÈŠ¼°BI.kªÍ3™\n(	‚2:ò\\¡!B¢á¡:¸óhğÜ‘\$Ü·i*€¡[ƒj…9(ê˜Ô¤Î«êOö}Õi1ÎÀÏAªÓDßWJ(	â˜¨¬€@3Kã2¡R21l3o'h}¥•¤Û*ƒàÚşvo‹HÚéêŠL¾!;åV7&+öã‹¢/`(*<+ál(T“Ğçš Û?§ñS;<t“ĞÚ7¼éX&uİ‡eÇv-ˆrÿXøw2*ã”Ütmº‡‰¸³Â90úH‹:IB§c{8vš!+¾ŠMâÚÔÌ@Ü9nC¢ú´ê¼üÇİø+jwˆ—Ék©CÇ\$ˆ>…b»Œ:qsîÅĞ¼lîªc*:÷@1üto	9Atu‰¸C+á°†3\$KùtåhË°ˆqO¢S%ÄéÛ¼’l†ÉqleP9á£×„YT9ç5Á¥Waó8&äp/BÈÓŞ+¯J	,º«BtùŒ5‚&2*¢ÀaM’F«yÌ£Öd›ÒÙ‡+E¢bC1q‘¸Ó°è@¡s‹~\0(('S\0Qƒ“CL‡&ğÂyËé8Ê•™ƒfaÁ’ˆa– É#š–©ÖyæÍ=˜3ÃaŸ0ìy›#m	\\¦FˆÙY£—h«},„h*2c\0!Ñ½X&BÃ`ä";break;case"it":$i="S4˜Î§#xü%ÌÂ˜(†a9@L&Ó)¸èo¦Á˜Òl2ˆ\rÆóp‚\"u9˜Í1qp(˜aŒšb†ã™¦I!6˜NsYÌf7ÈXj\0”æB–’c‘éŠH 2ÍNgC,´ìu7ÅÁFø‰œÒn0ÈDèÁĞÂbÈ%²Òe|Îu0‚Š§;Î`u°O”ÚRi67h§:M.ƒP©Uæ‚ZT4œ0Q¨öé“°›ç[õRÆuŠDADC\rš  ®\\JgH‰¸Îh2‚ˆUø¤R2çˆæS|SXi¸Ûj{)’W\\¹gv%	ÑÌï\\2ˆ9È®\\Æa=`6\$Ã}zJp2œ§&î®ÄX;F#fYhJd5@O¿ãó¨‚?™(H…á g\0†(sÂë«j¸Ü8­ˆ98Ë\\™%mˆ‚ì¦àP¦õÃŠ§(ûF¸‰ã8ÎÜ«BJhğ)Kl ¯c(ÎÒ¶ÑPìà ï€Ë(ø@¯Æí(Â>±ÔyH¨–Œ(Òv7B@	¢ht)Š`PÈ2ãhÚ‹cÌÄ<‹ P‹B´Z¸\rƒHô=&\$h\rd4ğÏ*\rãZ*b˜¤#)É(ì°# Ş\rÄ’˜\r‰‚\"1Jû!®QsL2ŒÃ4P¸4Ã9£Æ¨tZ\\uC\0ÉŒ¯JFÄU£’B³£é[JªÎéÛ´†:ã#80…\0Âê\"Èäš¦)ÑUu²47;4E\nPój4–Ìëòj’0I¿[U¶JÇT/ŠÒ¯¨­¾À„€(!ƒ¨à8+‹3(ÁJb9ßÄ ±è%îÁ:ãk%F\n\n:0½5µŒĞ:¨‚B£`£~ŒÆ–Ãx‰â˜©F\nTJ‰3»Q‰½¸°AH¦5°èËĞömD7#ËxäìWøÄÌ=¯TÚ6¶‰f~ö:¨ÀÃ&Ã’Á£º’£GñZ#£	£{ŒAuĞ¼«´À²7¡\0Ñˆ\$5˜àˆÆéN9„¸A{NLPéJî0ÄµCK\r¾™ªC›²ãráÀpZ­k¥[šJ°µ’†£\nBJRM5Î­*1›±)\n¾¢ÇZ’-E<²#Rs;—9±\\ûìõ½£JZ#G´X6cÚ1w¯l,*âBğA\0Û­\r:â 6UO¶ÃáWÌ…\"yÃK_Ïz#•õ^Ci:£KÚa½-)…ÅË¥	RÌxúÚ%-qˆ­¦Ï7Œ:Û.Ñú96İïÚòH xä<¦\$ƒé[/–œÃ¼\\Cªu&G7¤ÒÜK ©ğxìIº—ªŒÒ+—zà(¯•BåİBúJ\ræ!æ\0ô€PI{/¬! wÌºÛ‰g]iî>#nõ€\nk/¸ë·8EÀ";break;case"et":$i="K0œÄóa”È 5šMÆC)°~\n‹†faÌF0šM†‘\ry9›&!¤Û\n2ˆIIÙ†µ“cf±p(ša5œæ3#t¤ÍœÎ§S‘Ö%9¦±ˆÔpË‚šN‡S\$Ôé4AFó‘¤Ï\n‘›EC	ŠOƒÓÄT,Ì°ÛŒêt0‚Š#©ºv¼GW†ƒ¥®2e…Ñ†S‘K \rGS„@eœšq·:éŠk\0¡^\rFºò<b4™Dã©´Å] Á®43ƒ\rHe;d²Æ¸lˆÂe3ØóİH(…`0œEiyÈÖ ON‡zá¬R\n#™MæÛ™Ò»y&fœR”pt®]t&ºMZ½œğ@Q0ß_ŠæfPQ+lÀ¤èX@î!¨cêÍ7cHä5?*Êª@LB<±€PÜ7A l¤@BxèC°Â4¬*V‚Bš¸ÅŒªêô4ÁKÈ¨à7\n3gB(Z•±«‹z†‹ĞÊ™!1°¦Í1‹Âl0Ê3d)¤c\"ó,\$‘j¨„AL˜tAÉ¨Ü#ÍP\$Bhš\nb˜ª¡p¶<ÏÈºú¾èâ\\R\r–‘°2 Èî8£c½Æ£´kí@ÚÒ¡\0†)ŠB0X•/‹ôˆñ¯:Z®\r¡‡()«™@4cdû\0¥)xÜ±ª2j)±‰Óæ÷ ã„— ée&µ²”¢İ\\uĞŞ¿Ya~3¯ª¥68S«\\ûQTÃ­PüÙ#*j\"²£Z¸93:\rg!nâÜ\"ª\nzÚÃ\r,@ÈÅQƒ•® Q}bÁ±oÃÑØÁ\0 \$\n…äÅJ.‚¦©»3I§‰km@Ë¶uìÁ «ÂÚ`Vª„¢^C\r°Ç¯Bx¦*´3¸ÅÀq[f£cJdÂãã–8½‹èA?Åˆ^D”åKFv—£™®C‘ß#@à¿rèèÏ±K¸ÃX#¥­g(ÖÀP«mgÚ¥eZ*c›?0ŒªB¿ Ã¨×™­pF6›(rÔbı35Î8n#­€š‹#}*44pA\r¥JèìGˆÑSÖX:+<RÊ‚Öé•ÆË|´¢Ë4l“ÿµÀjè“È²ÀÙË°<êƒÎ6ÃÏX6u¬¤&¥ì5/É°cS1Ì®[mÖì)HÛÑt,ï\rXÖ™è²8Øš‰#jV9\$¯Èƒ«²Òj²,ÈŞv™=éë.ÊëúÂ-áª‹Î×À'±UF\rïÛUUø·B»ø©Êşõşı4FÃq	&¡02¢ÀÖGƒaÁpäÄ§ÂHB	ö\$ˆ®—^P›ÙGFÙx“4¾TÈ+Ã~EÅW,´‚N^™%OF•¤LNˆA÷R­ÊÄXË)t\nF¤:·ÒB!	";break;case"hu":$i="B4†ó˜€Äe7Œ£ğP”\\33\r¬5	ÌŞd8NF0Q8Êm¦C|€Ìe6kiL Ò 0ˆÑCT¤\\\n ÄŒ'ƒLMBl4Áfj¬MRr2X)\no9¡ÍD©±†©:OF“\\İ†¼¤ÁQ£)’’išMÆ8,©Bb6fâéæPv'3Ñº(l¼Şï·óTÄÂ(=\nipSY¦²r5o’¥IÌéO™M\r‚\nµbµ\\›‘¥Œú~ÃYËåJÓÖÄS=E\r ¢\$RE «ÁM&F*D°•Œ¦pTLr ŞoúƒÑ„è\n#™d´A„L :ÛÑ¯%Ş‚´FÍ%óMVY‚‰R‹æ£‹(«œ7 ¢)·;Ş=„-)†M\rI\n®¬°(Èƒ&ƒ A\n\$PH»,CpŞ°\\Øb	k æùÂ%ä4\rì\0¦7Cb¤\rË3bÊC\\X«.xšb–.Ø¤ÄHì¿°KrÄ\"…£hÂ4°Â2=Â¢(9ãËŞö—C!ntRŸ\rÒ°–¯’„i²L–Í¥\\È28AtÍ2T˜M³|ã9ÏTï<—“,â\r¨#Ô5Ğà8Ckf-4ˆò.…Ãh\\2H,ëå\nƒäí\r‰(”ËNàäáKFSªó„¦)É€ô7ÂÑZ•apA1Ğ#\$a—CPäÃ?Qàä¸{.ß«‘@ÆÓMË06£pÖ0¨B’2hPÖ›\$95Ã„ë*®6.ÃÓ…i¥Ü~„#*n&Û6İº…)QøÕ)`@ÈŞã£ğı á‰c.OõW!•5rQXIòòº´­lc2,›æ'-Kdñ*ÏìN¤·°CBŒòğè¥\n@¡iãìƒ¾Ê ¡B˜Å\\Ô²p'‰ò€‚Û£ÓzöåövR«Óë-|'8)DnŒóÀõp)!Ó›ÊEÓ6‹\\iˆ 'Šb¢`29Á\rc–Ã[¼7ƒœ0¿XÊ”£)¦\nÃP¿ÑöîÅ Ã*ş«Wh£,ÌoÉD[?‰eœò,ØÌäuĞéA©<Í òÅOˆÔÎó'dÚÆ„uØÑ–3Â2(Ó\nn,ã¨@Ò^p°@89´˜á²IŞ£†Ø¬¤#B‚Œ+…ô	¨Fyì{MÎÊ„ã»ûÃ4R<»R3­ìî÷İb¹ÜOLJ\\£:±AœÏ¾änŠK.ŸÓP-Ee™§'ò€Ü”°-‡E–\nÃ@k\\\0C`u¯(‰pÒƒÈ 1Äİ`åƒjÍSåıÀÀd	¡D*-Á²§È`Oa”,b\$x\"HHjC'é0†â^LKqp6À)ñ'T@€Ql%mÈ„¤|c\r'¸½bşáâlOgı!ällH©J+JÁ¨EÆDÅ™\$sÎ8Š\"€ôMÑKl0Ô†ÄFzB`oIå¨âHŸJ@ yçZ¢Èm#¤j©Îu­RÈîkè\"Qğç8ã¬ÏBGĞ<C aJ,†n9\"'½¤J!­çé,Kˆ\n	åñP‡ü%¤£ÉŒ/Ê†P";break;case"pl":$i="C=D£)Ìèeb¦Ä)ÜÒe7ÁBQpÌÌ 9‚Šæs‘„İ…›\r&³¨€Äyb âù”Úob¯\$Gs(¸M0šÎg“i„Øn0ˆ!ÆSa®`›b!ä29)ÒV%9¦Å	®Y 4Á¥°I±Àë2‚ŒFSĞ€ôm4ÇD(íXèa±›&Â\0Q)ˆ™€šãG“<äzFó™êî :ÌO4˜”Èn2™åv\\ë\ne¿Âƒ¡B§UâW‚\nÉÒ·5'ˆòt£ãæ³(œu6æ&3Ö@D0Ûô‚\rá†2T2Î©ÓKY¦€rßáôQÊoÜVQ3JyLšóyÈUÅl\rû)(‘Æ”›ÁE©ñ¼Îu5F\r7™„à0­ºŞüh(Ôş	ÏZ99/(È‰Œ‰0Â5€HKŒP˜è<ÂĞÄ4a–c¸·¯IhÁpHEAˆ)C«h5C8È=!ê0Ø¡¯B›Ê:?èÒ´€R\0<Ãrê{h˜¼!jz4°Â2#¸ÆÚ¹	ìŠ\"\ròÄhú%&!\nŞ6cJö„¤Q ®<iJ<§Â#,¤0Êp7Î\$æÎÎ³¼¨šÏs„å%Pí)¤I²°@	¢ht)Š`PÈ\r¡p¶9Tº½´‚(IÃ\nbK\rğØíEìÂhó	Èxà¡Ã#â; JpÖˆ¦)Áp@)Öñ\0Äü(T4üÆÏ(Ú:ƒ\nş…òSØÔMõ+\$;ÏòhÚ”iú›MéèÎ((\"\rãú:İhÄ4¨A\0 \$\n	°§(5å×>Œ!bÌú¾ğ#öLÛÒZ›V£-o,5ÒTšUˆğÊ[ÏZ<´¦Ëbr2¬»2¶¦)w+²6H7²ÃÓ1™¤%õ~1	zb™­0<ÎİÄË3æIkôÃ¬°ËBã#v€\n€R«ãwpéV0ƒ¢î82\n›25°må²•§©ÒxŸ\rÓ684·ƒ8D@-!Ëºt²³Ì3‚QÒO«ŒWVè0´6«l-à1@äÊœ„±œ Ç ƒ¨Ä³n¤Îî³-†Ó¦(ÃpÌ4¾èèÆ<\\û:9¦Â”9B#Ö³UL@æ:£ğóÖõıf”àã\\€Ÿ\r=•Á§wŠ7`¨,İÿj2L(÷vğ¼ri‘*Ğg”2D¾B¶±·šëSÆ1WÂü­ëŒÔú\nÊÊ³­:sûøñWÇC\rÃ­˜cÛ~ïÈá½ÄK3Z-pğWnÍO›#íD½¤œ9‚j!²GzîÀL\"¦\nAØ,ìé6gh6°ÖUHùù\\ÉÇ”Á‹gÏ˜ò.’M¡3½y¤Ú0t†“a£yv=²ì¢!)‰éà6Äƒ–Æ“ÔA{ov!–óã¢ª?‰NÛ\0ê–\"øsak`1×\"ôœ›.}¥5@¬‰èl¬ø1Ÿ'\\µ_Aa=ñÔ6°ÜI!ãè_åÎA£öR QBZĞÖ¢ó´¶M«³4É¨+›Ã^^9#Ry”&ãÛMhB& è™	Ï¯w¯t+ÂúÌÊ…NÂQ@ê\nªA¤ê+\0 “a¡{0¨É	”&6åÑ\rm± Ç9\0\rIp(†Ôï6Òƒ,%¤\"|ˆl8\0";break;case"ca":$i="E9j˜€æe3NCğP”\\33AD“iÀŞs9šLFÃ(€Âd5MÇC	È@e6Æ“¡àÊr‰†´Òdš`gƒI¶hp—›L§9¡’Q*–K¤Ì5LŒ œÈS,¦W-—ˆ\rÆù<òe4&&#¬°o9Læ“q„Ø\n'W\r‘¢hc0œC©°Ã1DÌ†“|øU:M’ÃÑ„Sº`§ñÔX :âqgLnbÚ §Ç ¦SÁĞÊnŒ›õR­I¬š¦šCM~Ã1*N-tØ'Éd¦›†Är¡‚ˆ† ‚èh´cˆqı?\$…lá‚‹SÆ8eÂ™N–œq3_9‚ˆ¸3¥£ŠmĞp|+H(‡ªñ˜`æãÎ8’7\r#Òš/È2†Œ˜e›0H@ IğÜÓ(ê“£ŠF†Œ\0Ä<´ÀHKÃí3Ò<¹*Ø¡xHÅÁ‹ì—¯\0Rh8¸Cb;\réHØ6\rã'J2Ú™ejm\nˆ#ÁhäœÂHï¸ääBé@Ê1¼fe\0HB Ê(ÀêŠ´È›P—¬ÄÈ\$PTôˆ£pí±á:ì“ÎĞè¨C£Ñ,CÜ»/À!p)ÏCİ>Nîe\0PR¸ÊŞKRàå/L\rll91Â@	¢ht)Š`PÈ2ãhÚ‹c\rd0‹®R‡A\rĞœ¸Ç\ntÌäÏ§\n3Ò6<pXå;Œp¨7m8@!ŠbŒçNÈ2Á–93íœú’Ã	RĞ6¯®c1uÄ&AÔ«‘]¦.šS#ª„®‚tT ­ûx§ èÄ©O&p6Om à4Ô£.öÛ‰¢h¶@0äÂlòşû94· «`ík&ôó¦½43QÁKŠêç®ëËz4JîTÔµb€( Ãz-†ºˆ(P¨…-j‹@ØÊ˜Ñ“Ûô9Ç©eÂ­®::	ãà§¯«Z?ã‘\r9ªŠb&(m‚\nx¦* ĞMŸ#	 ÏP5È¤2Œƒ¬Ûšm6Ò®-›Ë²@Š.C\r#²Š×	ZPIå›Y¦Q¨0ê8B:“-lœÆ.G,e%ÏÃ0§E‰Íc’I?õ<)³=Oc—.k®b½9Zä&\"Èß®Ã²:­ÁëLîûKÚÌ	ÃL½®h*I¥\\êtbp2¿ï‰e\nûu¨ƒ¹\rÂƒŒæy\n1üÚÒ¡,3Ìö6ìV¼Oñ\nèTZnoä4¿µ\$ÿSÁ´’%xÃ`+f,1‘ã<r@\$È@šÀHÅÒ«9ÄT´:õ&ïM©ãip»(òzÏá3ş…ü¡“(E˜J@ÉI_®\n_ğ\n|\$‘U+sN‘«{/Êüô˜ƒé™ '4èü0Œ1N|_•Aåeü?¤¸\nô 0`·‚bòG'\nYP ŞGË`gÄ~œ†Õ!‘…'!!Øg\nIí†|Ö!Ì=!\r \$pŠ!ş„¸é#BŠÚÖs5ˆ\$*Ê‚1Š9'­ñÓ ^Ãxt";break;case"pt":$i="E9jÌÊg:œãğP”\\33AADæŒŞ aªDyÌæÃVŒ¦Á”Üv4˜NB¼¨âu4âàQPÂm0›slği6ÅÌ’Ó”¾cŒˆ§2ĞƒE˜L„è¬\\Ë?€™f‡c	èÒoÎF“9¤Üa6Dê²ZÁĞÊm&)„ç4‰&JüàU9ÊE€Ìa™JÎ°aÖp 2]­–ãt}je9Ò®àª}¤jÛ\r5™¡PÓÌ™¦k1¦‡‘ÅñgXÁ]L°£˜(ˆa¹ID³‘„C0ê¬à¢›k_Œº QÊoİ,|bfå½\"ß–+ùÏh¡ÛŠrcGŠní`ŠvŠä¯×:ãõ.•–…!£ @1+pÀP\"ÜŞ,À7, j„œ(°hPÆ„°IzĞ—·a\0Ø7Œk@'NSî£JÜÎe:ªõ\$c(Æ¯¬ã\"…©ÀÒ´ˆƒ+8¯‚À\$²­ØÓ#r®Çi:SA	,|’\$ÉC’™ÀğŞ0ÇìÌ²”¨lØÂ3¬N0\$Bhš\nb˜2xÚ6…âØÃ=Œ\"ëÕ0GOXÙG	S!-·£cµIB‡\nƒxÖ“¦)ÁÌ; cc\\™„|´•¢ã2Ä6£bT¯ªoÚn“-É£æ×0Ş‚£§Z&’\nD¸3’VöŒQü\\ä²L’l»6õÙˆ²Ø8Iv@X°¬;’¾Ë\\V¢Ú‘2ü ™&‹İ`4µ‘,bµÓtíxµZCCB«²ƒœp‰½ŒujÈÌCÅóf³\0 \$\nÂ89.X\0@)aJJ€´+àæ\rÉŠFš\n#ªr:VP@”)û‘D£kPØQnA2­•Òù2…Ø5²Ä0£X[êZh(	â˜©C¸-Rq}Ka\0ÎâÍVjéƒ¨õZ¢ë’p\"ãxêgMÓáoßòXË+—(@1ãsX„8·}¥Ÿ:(;¼…\$´ôZ³¨i£û¹§ƒzùvË{Öäÿê]5\$¬{È&ï×`ÓÇH¥¤«»Õ½¼ÿ;Hêh,ëNs\"ã‚Æ”Pc>\nñ±£ƒ\"·.#CF¸®tdú>]¢Woí‚Ívïr¡Ïãcêá,È2ÇR¼Ë88Lì«VãÍ±ğ2í5|ëÍ8îĞØŒtô@\$CÖ\n9ã¼–|‹Cæ8©/|Äi¤«Ëï”ÖT±{aw¬ş!™(-í™·\$RÑ¨_Dˆ’eÛJ†V¤Øº* P[û0F¨1­àæ®šûqUK½gö@§Ÿ3ìSÁ¸5²7à	[ğV¥ ·PäÏÈe9c](¢€X`o9%˜3€¨‚rasëugû¸72ÿâq¼PyT½¶Îv‚ƒ<g£”v !‚	/í† „bÜ‚‡fœÌÁBêoctop‡4@c×ˆ¡SÍä";break;case"sl":$i="S:D‘–ib#L&ãHü%ÌÂ˜(6›à¦Ñ¸Âl7±WÆ“¡¤@d0\rğY”]0šÆXI¨Â ™›\r&³yÌé'”ÊÌ²Ñª%9¥äJ²nnÌSé‰†_0ÆğThÒg4Ç‘i1ĞÂb2›%â\0Q(Êz‚Š§ÕœÒ\n(§¦“h°@uº®Ğ– g››Ì’|T¦xvR)tÚ&§f›KîwS1Š¡5ÙM'»A;M†U0èuXD“Tœi¸ˆV	Ê\n&Ád[ò9”Şm2PùNß6İÊ°Z1Ú?5Ü°6|ö€Ş ¾A\\Sœ‚ğr4Íµ1OSj@ı­a8ß‚Lœƒ¤?1&# ¿ğÃÀ£RKûCÈÊŠ«`PHÁ i† P’Ï¡+¸Ö£Iât\nhÒJ÷Bbø’5‚ Ê›\rÊ4<=-@\"…£hÂÕBxÈCÈ2ºÀP¬ª5/;F7Éjğ”#`Ô»Š	ëV7(ª;2Ç±úÔË/*›ªŒŒ¿0µJ´É-!i0æïÀŒ,ØÓ|Ì†\rìÕ;GÍSî—I@Ô	@t&‰¡Ğ¦)C \\6…ÂØåKBì‚2=S“Ä\$Ç+Ğ±£¤¤69QC”2¸kŠ.œ½L0@•%²à†)ŠB0\\K,ü¬’ C246­Xä3è5°C¢^¼½#¬¿c…XP£Ö{í„ÔÑ£¬’\$Î8Ş3èK«Ešn£T‰cW]¯+Ú2¿.ŠØì­½•¢Ô )}^´½Jƒåi\r#\\İ £Ó”TĞƒì´KŒUH2 ‰,ú2T¬}º›Š@ \n@R¤Ïˆì7ÊÃ~˜¦iªÏµ•ÊÌ0Ó>®™Ìüüua|ÃeÕâô9¯ƒ}ğû¦ˆT£vz\nœ§núéˆcÖõx'Šb¥v-GÑ«?\0æejbìsî#é2é˜éÌ\"=&X†´É<ïÓù?7Ğ9¡z–ôäçéë©g#wı¹*Dü;IœK4‚Œ‹»nœIö—‹#xê\r’~ íHØ2Œğfï°‚:\rHçY¬ı:^)›ÜÎ/¸%°ê5[«û¨…¨ÃlQŞ!òqºVj}ïÃK>»ŠoË‘ÖW„êüñ–pì£l2ŒøÍ>ÿ(şMß Ëíüó”èÅüàÓ<ıß†u>ûß§ÖrT\ng(6°ÖNƒY&áÙÊ²|ÇŞ2î{†i•’%ÖŸ“¬sA7X*ĞŞké1ph’†7î`ñ!„	9§øHÂIt(ƒïîB73	Xá#g,ÒÊYËIâ®P»‡ŒLWH<AH´†Lƒ™¡;Fq`Ah¼yotPAj‘²Ãİy‡êWnrˆZDHÈÔÖÀŞ‘‹gE±¼Å‘’\nP1şsmÁ˜nÂCJ…ì*AGğÆ˜Pl=,RÌBY !ˆ±P2³s\nMÊ+©´ªb]¡h5a H€jÒT†Ei+3F";break;case"lt":$i="T4šÎFHü%ÌÂ˜(œe8NÇ“Y¼@ÄWšÌ¦Ã¡¤@f‚\râàQ4Âk9šM¦aÔçÅŒ‡“!¦^-	Nd)!Ba—›Œ¦S9êlt:›ÍF%!Š¡b#M&Q¼äi3šMÒÊ9ˆ—ˆ\r†SqÒ6ib¬ä‚\0Q.XbªŒ'S!¾;¹İMf›0€ìi²1¢B„@p6Wã¦ëBÎrsÏåôJ1Î‘J¦ŠÆ‘ÒíJ´ˆ#±H(¦k‚TjzR!„èaÂ¬PMD4¨e”ká¤C±”Ôe×Ö¦À¨¸Öl®‘Ì¦óo¯KÓ` tø (¤e2IóÕyvk9ÏRá¥>AÃ^Å_æ°Ò…^Rj:›Œ÷r…<v—aıÆŸ‡ÊT®®C«Ä‹•î™B®„£ @¸/Š\0Áh Î‚AğT:- Pò2¡£pŞˆZqj	#*Š®ëøæ:N²4©+¸˜•A¨h¬2 #šV†ˆ#¢®ã.â(Ø0ã\nİ!ÊH ¬°0è¯F!]/¢®ì:¢›Ë4¢J”­,²€œÁNC\nÚ…ÀLÄPÌ…œÁ46sZ	6ÍóŒÍ:MQZÒ’;+„b\$	Ğš&‡B˜¦cÍ<‹¡hÚ6…£ É'{âù´²†5£¡\0È¤¹¬bF\"˜Ê97¯ràG‰Kå3ˆb˜¤#4Cz4­²\0„0Éšö¾ÏUÌ«\r£z_Q¹‹\"mQ3PÎ°I ”b•i{]M>LPÊ\rÊJ£Œ¶K ÓCãBˆÍCXó´Q‚<1[\n0ş¾jIU=öPA	ƒJ”ÿ¥ğ`Î¯¥2CÚ›?‡o°·æ5\$uzÍ†?ÏÖ|%I•H²78œ¯¬,C4àJòÀØ(Hòş²\"ØØÚ9 \$\n;K±lh@'AJH+\r#’Ÿ,ÌéZPÿ¥©zÆ4ŒB¦6´,°ê6;B½·	¶0¦©«Œ¾[éÒH(Uv€ê3„€)Š•>7Oá\0¦:¥z–Æ¾Ù•.¶À\rhÀ@Î.NÂ­aöŞ7ÊÅ°ŒoåıpÌÃ¥ŞÁ1é\$­Lì,„­7\\Ô¯%@éz\"(÷Ô«Ñºƒšt†£\\aĞºÒàÏ´¹W@Óø,ã¨@4\"Vü=/ëÏW!\0ê8;+èè4YíxÄ±¤“Êæ3®ÓÇíû­‹Db3˜åÛ\"IS{û_Ã¢÷\$²XX©!¾‰=bİNˆÇ8d\0Iõu	Í?çHàúu\$¾ WHï‚B\r€¬1°ÆÁ‹peø–U¾gÉ&¡˜<˜@èI kÿ@„hÄ*üN¡#°¦ØSÌt3#f¼’ò0JĞñ+pn}\"âÆYHÛOœì»wº›È¾+á©š ìg\rAÖ%<Õâ¬WÎÈm#Ñ00ÄåBùÈ	O\r¯‘‰EtÙdBeıd®’RÕA@—S†DC›²g¤4&öÀVƒ8\n­‚•e¾ôJ¤7u°¾C)ŠzEÉó‡¦®kÒ`K\$K†'„RP\n²L	!¶TÒºŠQ[áo¥ĞÄrÌÎÃ˜e‘E’[¥G7Í(KdxÑ˜ ";break;case"tr":$i="E6šMÂ	Îi=ÁBQpÌÌ 9‚ˆ†ó™äÂ 3°ÖÆã!”äi6`'“yÈ\\\nb,P!Ú= 2ÀÌ‘H°€Äo<N‡XƒbnŸ§Â)Ì…'‰ÅbæÓ)ØÇ:GX‰ùnÅO‚¤¦“TÂl&#a¼A\$5ÉÄ)\0(–u6&èYÌ@u=\\Î“ë•\n~d¹Í1óq¤@k¸\\¨úDÒ/y:L`”ÚyÒOo¸ÜçÆ:Ñ†¼9Hcà¢™„ó|0œ¬:“I¢Ze^M·;aèÎe”,\rrH(ƒSÌ¦úaÓFL4œò:(–|õ1M&=îc›ŸŠ“}Ëƒƒ4ÖD)Ğa½¬t&QgË‡ÓO³\$ÛLt‰~¦/¸*š2¾o;NõA l¤·Ã“Ø4\r&N10k:<´Š\n¾öióÕ£ÊB6´ƒ,\$¡hàŠ`#ˆòb·\rãpë\ripæEèÚ:Õ?A\0ËEˆº3%ã`È4…ÏËê0££¤…\"9R4a¤ZN¬\r#l–Ò\naĞˆ\"Cš\"-3Hò.…£ÂŒã8aéğÖŸ<B²^ˆDÅ868Í ë)îú ÃĞ@b˜¤#!\0Õ\0F£¨\\É(Ú2#\\9,îêä“ˆC\n°Ô§Ñ/	NÓÁ>³Œ#‚ø2'É8C¨Ú¨Œ®PÊ©°Ğv»­˜ØŸVUm\\WHƒ>9W¬2g%¡`@63ã ÌÉS´ú0ğ+…dÆPĞ•„0òèØ4­ Pª¼ÏMB5¢Uí:Ì \$\nr˜‰ƒ aB‹HÂ”(²jr ©*ƒbN”¥h\\ß3#ÒäChæø–0éc+j	–Í¶¨µâ¦4H>@9=+ğÜ“ÎƒxÖ›3ãË?ŸŠx¦*5èú\rkbãK¥/4=X*(¾bÓ5+<`6è3\n»#=;­HÃŸ¢×dçL¾I) ×Z9&-Ûz0ÏÃÊ¸¦2Öë™ˆËîjCœè7^ì´\$âÈŞ<ép@7,Ã‚>;&è@:,Ã¨àÀ2<Ü »E« Ë·2ÿ(µê7Dc(òØ#£°Ã]À\\Öq¬aØ7ûH¶È#^ía&,u7!İñ¿P®!=â	?€Jf”égÂ6Œ6oLs’go£áçüŞÏ¯ÒUkåÊßœùüÕ@±~ÂÄ“–\"ÈYƒš}&1/†G^˜ë!7+¬¬=\"<½Y›{%aî=çú„‰d‡=Ø#`\n™Š=,˜Å˜sf—!¥,p;ÒèZøiÄ”‰Îã\"í5­Ç„ñ[{øy­¼áx®á°uDá,7‡,w‚\"®€ € †·ènW3‹±~Rú`I†lÆ®·óä_K\nÏ3ìÈªAÃ";break;case"ro":$i="Ed&N†‘Àäe1šNcğP”\\33`¢qÔ@a6ÁN§HØ†®7Øˆ3‘ŒÂ 3`&“)Èêl‚™bRÓ´´\\\n#J“2ÉtÀÚa<c&!¶ ˆ§2|Üƒ“ÊerÑº,e œÎ’9¹œŞlÎF“9¤Üa°0ÑÆáˆÂz“™&FC	ÒeV‰MÇAĞÂb2›³q`(™B·ˆ8#9–q_7œåI¸%êãfNFÙĞŞaƒà„‹±»%¥Íç59è‚äj“Ö!U´Ü¨i8f —,ÌØi¸g¬qC®rH\n\"]dò»ís`d&\r0}tÊLr0˜îĞpVÜám³hE#+!6e0‚ˆæSy´Êt±ã°õ¬qÈiáq=İ]é§~à¬@P Ğ+ïH’½I7Œíd8%©øÜ2¯pRÔÓo‹¨7\rã¬Œ\0Şí=àLAD0Ò#*'A jœhBFÁË\nÆ½.@P¦±/Îã£ŒPÇ/Lp¦À¡²ß\nz¿4l´9\rãpÒ‘nBd6=\"„(ø T9¥¯@õ5iÜÚ‹¯Ê‚ìî¬rC ¥Šøø(HRF¥D#œ2…3è8\\ˆ(°Í?/³Ê™Dô2Æ9¬CJnì¸ P\$Bhš\nb˜2pÚ6…ÂØóW\"è€'näŸ-JS|Â6>h–Ç\"˜¤#/£x×\ns\"4ŒOğ\\<”õ>³c\n4iZø1¢Ã˜ê1Œqro'²KÓü™>(Ä:¥ˆ•”Áë¼»6Îr^™Ü²òØƒ¦º…¸3İÄû1Áƒ@Ê=7lÄ8:¦è«ÜÑ7ˆÛüà.«\$0¢Ã„	24o @3 öÒ¸âd+³F<4¬“Šå)Â;\r+ûıAËÈLE•å·m¼8H‹­)aN\"â¤mj~ £-â?CXhç KÖkD¨ÒªÌ9ÙâhÂ5,C\r°ÔBl]¯Şâ€)Š™Š\nƒ¤éı\n”’íl'è#sBmrê™xà@ã,vÆ<ì=ÓB`1Ë©HÎÍlL Ë† îĞÒšµà ë*´ì:šÂ´Jï@ä9äüàËÏ>r/>ôz|8üu+_:ÙôB—×Ñı¶–èM­fû×0Vao/hòAK'”Ğ,Ã¡\0Ñ™®ã~ßËÜìhçb³#‚é•ƒB¿LÆ´&²œÂ)ıuæq‹ÚÍ`Ã/‰=?`Ùô×]\"vàÃ	wíÁ]\0£¢vÌiŠvğ6†óîJI1´P)¨Ã£r°=/·ø&ÓŞa-yÁøÀVÍøc\rdÅ‡bĞ¢Pzg%Î½ëA°Ó±\rD!É§¢”‹ğtQh\0Èn–Hmh¿´r.FMÉ/‰±\\<}Ëcä0 )û„z\\”².Läò&DTŠÂ´/uÍ—¡¼‚Kp‹†¢6X—ºë3ÅX6.À@0…\\6‚Œa²n€Ë)gD¼“ôQ0g‘è†G¾zQ< Péµ\"4Ô@Q/„=HÂêKÑÈlK¯¹0„Uú‘TJHˆ(!±È\$ÓËéJv]’×Nö?±b‡@";break;case"id":$i="A7\"É„Öi7„¢á™˜@s\r0#X‚p0Ó)¸ÎuÌ&ˆÊr5˜NbàQÊs0œ¤²yIÎaE&“Ô\"Rn`FÉ€K61N†dºQ*\"piÑĞÊm:Ïå†³yÌßÎF“œ ÂlˆšhP:\\˜Ù,¦ÈåFQAœ‰	ÀA7^(\n\$’`t:ˆ¦³Xİe£Jå³JÌë’Zå„¨í@p™ğHSœh¬ñiÀ€ïÄŠgK€…“‚‰SDŠG2›ã›CH(ˆa3RÎ@¢)’•b4:=”ãœ\n&Ê«=ÔW@r6Î#¼ÃwK1:ÂŒ’ZUĞó/à¡ ÄZ\$ıÆ ¢ğç#iÂ8\$\0Pª9ªZ&\r#j”´ ,¢4ƒHĞÙ£Ê´8ë01\rL[d²\r#‚~	ƒÚ8\r#’ò%Å°kÔ‡Ã0Úf9\r	T( ëÚ!+ÖËCCdo¬²3ÆOî½	Ğš&‡B˜¦cÌ´<‹¡hÚ6…£ È	pØê˜ÂpªH)`PØÚ6I8ìÜŠƒxÖ„¦)Á;,è˜\\Fğ@:¨‰ÈÌ±+¨ä¦¤òDw;“=ã+)|‡¥ãHAÁ	³`4ŒÉ`§NÓã\n’9…ˆ|(Á@,²*¢ãJX ±‰|ü7P¨È–¬cÈ*H¢¢“c+œºX,j:È\n@ ›§.pÉL§!Bª*š*«VM–Í£k\nA\nƒÂÆA·-¨3§Iâ|Ö¹Ã`Ê×ªT÷/ÌÒ5§ìŠXã©a\0 'Šb¥9(”ªf˜Qô\$2ÔÓÓbŒŒ,K¾“bûB¾\$ŠàÜ3\r(ü\\È(öÊ±ÈñÔ•/£«\$\"åtòMeÉÖ6ôVÏ#ˆ£å²Jt²¬±2q`9Ã¢Òµ¼ë\$,ìLs9„“>±Ğ Ê3×C ßC`Ê¨òÛ{TĞj0„Š{UèÖÜ’6ĞÙP~ÛíìI£(*r¢!ÖbˆHLVk…´óĞ4%‚h6c*1¢ªú‚W£®Ç¯#c{œ33ğè–p£x¤R9Ëµ,I`0¤R29MJU\r[®”\rĞÌ\n)CqÒê»à*\\Ö÷T;Ê¬îhğëÓ\$ƒu_O!êö¢<(MÀƒl®X˜7¨MìQğ=cjÅ±âÑŸM§N4¬’RKG_Äöhàè	1[ şå˜³Xö±n5!:tô!zAÌ";break;case"ru":$i="ĞI4QbŠ\r ²h-Z(KA{‚„¢á™˜@s4°˜\$hĞX4móEÑFyAg‚ÊÚ†Š\nQBKW2)RöA@Âapz\0]NKWRi›Ay-]Ê!Ğ&‚æ	­èp¤D6}EÕjòÙe>€œN¤Sñh€Js!QÚ\n*T’]\$´Ègr5„ö9&‚´Q4):\n1… ®KüIšIĞ·hı‚«IJ–6HãB?!¯Àš([ö&	†æäsD5AWÊê‹¬ÅQcCXMe”Å1v¨£6PeÌ×:¾ÏC¯Õ¼Æši7\nìÒµå.,Vû’’Ô»´×ù:„ã,±[•ÓµŒ´7üË‘Üá»>Âæ2S¦jbF_#\$¢@ã/©šTõ:êq¢G£%t†9Òg¨BhCªk\n¬è>PŠ„›ˆÉ&†¹4'\0ÂBù@*,\\#%Ïš\n[’\räG¥OšD©%¼ıHqi?Â’J€.Î+\ró\0Ô(ÊPÀH:¸ÎÂÌŒ£r3s.¥‰~È·a(ÈÍ'I¨7NÔ9Íæƒ7;Gh8<Œ¨ÀÜ7A j£2\\4¦6’ô†GOK±x•ELqkG‚‡37Ry6¦©é¡?²ºˆíShléÄˆÉZµ»Õ?\$¤<ŒÊÕ9 MRÈ+jÇ\$(ELİšú†í)pk~ş9L±j¼ª²F¤d*¤•\$¬3¬(–‚|_-ÓÌÖÀ8Jy|&…º°ÛöÍÄÜ\\ªòñ:FeÚ^•¼åÜ/•ğ„\\×İÕ¡¥â¦U0ãr@¿æN\nI9ŒEå\n2–rœ§ÂÚîYäâëk:\\õX7c`è9DK:ˆ³Ì‘ºâ±Ö4Ã'C«†)ŠB3N»BÎÁz%Uî\rrgÏÒÓAÄT…&‰\"±«+’±±‚¸å]Är¦¡è3W/Í’Ax‚®Qz“¨.Ñp•#ï£Å³MIìê‰hÃšR¸ÖåÖñÕYôˆ0ªU¶¡¥ĞX¦/Ï/ÜòÏ\0äJPT¼¦r“áœ»[chí§RAò\".ÏÆ~¨Ë®Ö×72k‚¹#m3¦“ºªÛ²Ë£Lîó+¦-ÿ6ìÜO;”]£âÁ©òiÜ¥}“‘(»Û´üa­H-áJå\$¬sµ”m.6Ê§¤*^ë‘¤/¯\\•%‰órá^;¯BÍé\rƒ~[í7Dç>g¼­\n«L›–´6–Ú‘ÜDF­ë¶tRœ¢[+®è›qÃA\0P	áL*Ó’hé£‚J:ÁÆ¤ÈÜ0Œƒ§h«hM\n!zÑÅ5µ“~Ğ\nº‡PÜß»ÒZŠ‰±hƒÅLœ¾óVˆ†)§ ¯¥uœª =D\r\r.KWY'%\$Å0‘`\\£:jL¦6EòÒ˜+õvöú½	ù‡X‘ÜåFôjÎŸªI®ÙX¼“LL£‘‘ge,†ğê@aÁ”(0@iÁ¤6PÎ A\0t\rà€:‡\0ÈC¤œ 4‡9RC¥n+dB¯‡´¨Tá£—È¿º'T÷ÎâT%Œì#„t€dY-{D&`ËÕÉ/æ+wH!UÌ²„`Õj?En`0)\0‚NÑe_Qà¾¯ÄÓ#S^pYÉ“\"Ìrœ4dO3¾4“9äÀÛ,é‡á².—ùaı(á\r™†ÀVàJj{Ozƒ¿ç¾‰ rîù2óâv¤õQácˆÂä&ó&	M[¾GıAbMBÑ½xÒ‚ŸJ„Šv³I…V…gõ5¥+fœÒÉ£Bt¦-!àò<TÌjåDó!ÊJâá‚Ò¤MÔÁh²@€SÆ™ÔéPHÓæxM¹a¥ÈGHsöƒâÉMJ”¢‘™–4Nz;¢¨\0M7^»›Û›\$Ğ=w\$¶#©ñ'Ì!Vs(Ø%]¸ˆ£O\ra #4¨ ­+\\€L\rá„2ÜÀU¢´€€6†ğå'%xt\$I7Ôº€,Å>²õ\0\\[›lHÌG]“0á¤äMHÊÀ@uÚ£ÎUfı•Å+GÔŞ¢\\…’]¤“Šti`Õ ´nD).•v]ô#Oî\0ĞFÓ4¥VD³7Q' ";break;case"uk":$i="ĞI4‚É ¿h-`­ì&ÑKÁBQpÌÌ 9‚š	Ørñ ¾h-š¸-}[´¹Zõ¢‚•H`Rø¢„˜®dbèÒrbºh d±éZí¢Œ†Gà‹Hü¢ƒ Í\rõMs6@Se+ÈƒE6œJçTd€Jsh\$g\$æG†­fÉj> ”µÂÕêlŠ]H_F¯M<ªhº¦ÁªÑ¨ä*‰6˜JÖ29š<Oq2¨Òy ±¾,*Q¤= ´£Á\$š*!`,‚bš‹İeqQ˜HZeÌÒåM¦\\eŠÓE3¬Â¯öc®Ûb·×hRë½­E%„@öqûæİ/ÓA´Hx„4§™Ğµq¤¦#s›au‘¥Æ™ˆ\\{ ¾YÖÓöK3Eªø…\$E‚4I¡É=JòºG£E\nô»oÉ ú¡JbV 7*ò4M;³pğ°Ä:4O°ÊÊ@£ˆÑFÿš\rêaE	Yxš\$zhÑFi²…;ë¡Æ3j²P˜»*\n&2 ŒšÄ—!,˜Ï§1Ü£)ÉÑ‹ÀK<ÑÛf%Ğ\0H…Á g2†1;¸D4ÅÒ4Ğm:´èL#¼‹ÄÑšó'¦NR¤ *›@¬Çˆ\"…£hÂ4”CÊZ#DºbY©©#t¦ÍÈp˜±SãÚCL=¾Î“)FÂÍ,ãO.jèõ&(jO) ‹Ô`¦AL¥—áp´´Õ¢’•µ½^¤×r|İË–©a)6%dVjU—9YÍ] ³ZLM.¦£É#”Ë£IKEF¼haÑ RŞ÷´\$P£JahZåà\\-ÁÄ\n.Ñ	,eUÑ,ûB©)uÊ \rƒ å;ÀJÊ\rŒÈËøº¡²0†)ŠB3!P!Åè\\‚#–bºã¨Ë¤F,\n¨§¦ÄJâ%eº×D¶3ª‹o6Mî`šŞ1óÒßZåÂ×	H\né/^È¶Ê!&©ø„ê%(4W”¢z¨®„|\r¼©s\n©µj‰ØaÓ‹QšUë«\\Ø</åÀğn…–”ïiŠâËxÚÙµ±ªuàÙEˆy-ˆ¥º»öB¸\n¥N&¸ã9ZhK•B’ß–á\0 \$\njùÍ¸í»’‡æBÎïÒN§Z¯m›ªvø¨‘ûƒ…­ÄsŠ¸­u?€hS¤v‚(šê©ú<jX Š¹ÆûQé`x°Bhº¤Vò–Y]¹9n›kZ•n	KAí¨î2»™¹‹]4–Õ­Î‚B‰!S?Ä‚bh¼tÁ<)…Dè†ŠI·¯©M(\\›‘©)°hÀ’d–óò<¨±ûA–èBy1Anéˆºâ‡	)Š9d¦’âpTÅ›YQƒDËA.ş’AékuÛ›( º–„@%i\$@Ä3(íÊÛie\$~%!3¼YârÊ7g|È¸®‹ZhO1+:µŞÂéÕíRxCxu 0‡`ÊpoÀ9ì¥(g¡ÌHôC€d!Ò;‡@Ğd t!ˆ6X€dØÉ‡(ÍL¥I2B¤Ù5rBıÕµ²Hº=@q§¥r äì˜•r„¹(¶—•*=pŠéÃ0’§Éœœ}k*(¥Ââ¸Õã„‰g¥m«(‘ÊäÆŠkE³Åg§3VL!fóIAMI•5’nA\r‹ÀVvÙ‰ÛL-ñZ½‰v‰bšag0nhE)RÒ	Ñ S‚ø+ÈÕ)…ÔY)G”6nIdIJåaÆÆœ&}BfÔš)÷ù?(\\ÿ>ï¢z%A¨­	ŒœE\0I3AQL>UEÓ'\0aàÑHr®JÒXŸÓJ…Œ†’ä†4Ğ²G¬”Ÿ‰|vÍ«K¡í8°³~`Êl•ëyÀië4§¼µÌîw9âZ}AÓH×¢÷*š9A07†ÈCpg­uµ&ĞŞ£¼Š’I.†Fµ¬.¨Ë¯ÈVÀĞÚ6—‘cm¸â¡n²_©‘%è~'—jo0„«Ò(T€Aª·ASÂ\r•Ñ˜h\n„Ú{šDD“Â\n`e‘Ğ…#G^×ZÔ…ì3Ò±vhÁ Tˆ8";break;case"sr":$i="ĞJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãğP”\\33`¦‚†h¦¡ĞE¤¢¾†Cš©\\fÑLJâ°¦‚şe_¤‰ÙDåeh¦àRÆ‚ù ·hQæ	™”jQŸÍĞñ*µ1a1˜CV³9Ôæ%9¨P	u6ccšUãPùíº/œAíkø¼\nŸ6_I&…ÄN¹~]É3%¼&°h,k+\n²HˆÆD—RIVowƒÉ”Ù>yšg—©®Å	³4%¹ìœ´‚Uµ˜úÆBâ ´Zà5ûÅŠÉW£­i0IôÃA0œ®-yÛî®#ÕÖæmÖG\\b¯½	'hiàğE•öÆ¼‡IS%Öï‡¯Æ#X‚sÜhÈHI¦JsàåNªòX\$ŠS¬·¤…Üh’H’¯ìâÜÂ'Á¢í)¨#Løš\nRœ¨0¨Òâ’ğRrÈBï’ú¯§*ê{/Ñ‰ ¢;ê[w¸èèÈ‚2Q¢„²\"¢¦%„‘%H©ÂÀŞ¤šH¹A jœ¸­qj1Fl4%°ªY¶Q!?\r©¬iÌ°ñ\r‚fhÎí\\^’'*ƒ É9L\"HJ ¡s˜·jHO6JPˆ¨\nŒ\"ô©k±:©<NĞšz`Ì+ê£Ã\$ÑlĞß§ôS¼hÑ­zòº9©ââ AtŸT¢õZj±—uukX§HY^R‹ik]Uy_*ö…F-í‚kZÙ5Â‚'Œh	@t&‰¡Ğ¦)C È\r£h\\-7ˆò.­tiÊ†…¿P­S6×	¡j\rƒ ä’\$Ô*±BÒK/\0)p@!ŠbŒÔ4…¥]1.É:Æ–µÖ»Hı«òBNâ*µÂHŠ|å3³o|Bë[FÏW¤Ò\"ˆ´Öß÷½Ì>¶:ş§R#?!Ë\\åXGÈ”›Åö²é¸É¥n9‘Ä`›ÖZ•ÿ’*KZ‰‡/Ğ”¥.‰m>©cË[±±³kn¶·ÓÂ‰¦cëókŒè+ìÚ&ä(@(	‚™»×Êåª&»svô'Í¤Âÿ¾\nû0±¶µš	ÌÏz]0È ÎÄˆñ§Zş©*§9Â×Š£(‚fí+Ò„xZ“&5î\r91á}³·Ã‰â˜© ï	]›Æv®\0ˆtiNÁ‘q’jg4·û“İÈÍz¢ÿ¥¯ÛwŒ)Åé£”0¹ï›>ä|Šoà>¨k\nä¸šÖPúÊ;Ï\"Jb‚ˆ‹„2Œ!üœv¬ö\n‚zN¾’X\n\\KDnÌ&–µöÉ±á\rÌ§—€ÛéB!¼:‚\0ĞC°e¸7‚\0àƒHv\r!°2†pÊÁ\0t…¡Ô8@Â!Pt\r¦@Â¡£÷%ô!rpÂ\"\\M(¨ˆÜ©8\nw²cB… •02K]ÌNPô@¥4zÕ±2%­­/·ş‡Â§Hhı¯¿²Ì¿Óa0B°1fG3AV)º=“e–®ã¡Xxoğæ˜hôUJiBl6²ÈAŒ(ºŠ§!ğÆÑàB˜sŒ­!AèÕâ‘cmDf>ÊfúÒ3¸x2¬«JÙ:ZDw•,A×­´vMONg¥zP¨2ğ\r;ÖP„Š’Cd„)ÎV\n	‚vÛzm|M-\r¤~B·RşÊ\"38Ñét=°~O¥I€D‘l1ãdô“:+l…¯™x„PûÓŸ®Ü¼ª7ãR\n¨|\"v\$ê;%ÂÜNå“ùÄîEÚM!‡•ÊWš&«4‚İK·\nH¨Pœñm'¬ïABÀÁ_†MÑŸ*f°À F‘!)Øw‘=";break;case"zh":$i="ä^¨ês•\\šr¤îõâ|%ÌÂ:\$\nr.®„ö2Šr/d²È»[8Ğ S™8€r©!T¡\\¸s¦’I4¢b§r¬ñ•Ğ€Js!Kd²u´eåV¦©ÅDªXçT®NTr}Ê§EËVJr%Ğ¡ªÊÁBÀS¡^­t*…êıÎ”T[UëxÚğè_¦\\‹¤Û™©r¬R±•lå	@FUPÄÕ­J­œ«u•B¥TËİÕdBİÎ±]¹SÖ2UaPKËRêYr}Ì—[:RëJÚµ.çV)£+(Âé€M¹Q`Sz‘s®Ó•´:‚\0•r¦×ÎUêŠ¶ˆKÙï.uâYĞ¾H¹S>;Æ‘o	FÖÕèg:ÍLêW©XÂı:s„	Îü»âH×—eÑÒP—(xÈ6A–#(æ\rÃx!pHÃÁªZH‡9hï\$åÙÌB(eéçÉiI¥Ñ\$É ƒJÙT ™Ò@'1T¹¤¡j¨IW)‰i:R9TŒÙÒQ	i¥,pL±éB¶G’2îÁê	'J	ó8rÍSBG5ê \$	Ğš&‡B˜¦cÍ<‹¡pÚ6…Ã È––eAÒJ.r‹#µ¥ÌFÆ#`è9%¤âE/RòÛ¤d©b˜¤#	9Hs‘\$b¬täl:M\$j´¤i*ËœÔ&@4‘ÙO²é	4·§)~BÁeÙĞQhI^ÑY¥åWÚ,ã\0C¶¨c½×Ñ,X@oÕ†µU\riråm6WX‹ÊÃ1RÄ²’)(WÀt\n@ _ŒK°GÛkÂD(èaË±q¥É‚dr¦‰²p61\\ZÓ5Á«-ÏyDO¤Q@£lºbU'ìv'Šb¦×^êµèG¨\$3{´1\0Bœ¹~c™¨áÒBÅåê\nH£ÅÙI›NdAA”Yrs“wÂÔÍ–G16Z@ûÉ³%›AÍ/ä.İ²²ËSÈó=úÊ³ÖËP²7¡\0Ğ0Ã(A„€ä4ÃHØ2Œğ°@:\rá\0ê8ƒéÅƒ@Ò9òãÅÉ…Ïí¢¨õLñÊ\\–Î‰Nè±¯+ÎHõª^[nsJŒ‘lƒ\$ïëäÉIV%ÁU» ¤y.å5åébr’dk.!Óã`V1ƒHÆ5„xÜ!\0ì0ƒ¯AÌ£xÈ4ŒÃÈ@4LØpAÊW—›­šFˆà½RÉT–ä¨Zk¶o¨ä§£b¶!E˜è\"PròÈ Eyt/Â¡½»qÒ\$ÅğæÆÑ)ÁQ\\9„ ¹€Ã”@Ã.‚Å¨é§y‘‚`o/¼7xq{íN)Î‡@Âò-+!€&9„ñÓd,t‰¡|Ÿè‡+Oíş¦¶UŒÈ‘\n&§lp\nf·ÃÒ!Tƒ\0";break;case"zh-tw":$i="ä^¨ê%Ó•\\šr¥ÑÎõâ|%ÌÎu:HçB(\\Ë4«‘pŠr –neRQÌ¡D8Ğ S•\nt*.tÒI&”G‘N”ÊAÊ¤S¹V÷:	t%9Sy:\"<r«STâ¢.©‚ ’Ôr}Ê§EÒÖI'2qèY¡ÜÉdË¡B¨•K€§B©=1@ ÷:R¬èU¢ïwÕDyåD%åËhò¶<€r b)àèe7Í&óp‚‘q¥Éi®UºÊ£Sªè0wçB\néP§œ©ë™*¸¨¥éiu-•>æL )dœµZ—s«Ñå•étŒt 4È…´]l²t-ÕòÕÊú\0•–âmÕg:İPè^+Ü©š³•p³t&aÎUz[s¦Wrå--`\\…É\nü¿d+úµ–)v]%\n‡Œ\0Ä<²á@æCÈÊ9CpŞˆ\\qj¥’â„°œ…Ùvs„z\0Fœåé\\¥‘Ä‘Ê]àRxŸ éi—¤ä|@—1&CÇÄÛöV’IZÅ®©È_ÇAU/EÁvØŠY@Ññ2BJ¨¹2^:\$\nZÒ¿3a\0@³ĞŠ„@ÊR¡v[49_*Š°\$Bhš\nb˜-4hò.…ÃhÚƒ\$ÔıåÔ\$ÉkBÔ¶C`è9/Eát²ªb.Œ¶ÄBhB¦)Á\0è7lÂâÀgIFÁŒÚñœ¤±]>¿G-2s	ñO´œ6Í3Ê_µåtEYÊJ“ì%£i³lëHY\$	ß!„ey_X±a?“íXJÕÉ©ÌC'AZD´2Æ²‘!”Z%Ä)ÌT'9jB,K\"Í—nùÌJç1ZUâ€(`øN†áèa¤!˜VºÍ}Ô²²\"—¦)šjÜœÅqjÛñ]°')DÙE?•Šx¦*òÖL§åR~S®'1pM¨WêÓ§Ù„³ZBèZ!@Ïa^˜•¨2­4AStAÇ96W\\öå¼DIáI7–G16ZAl¹´>52¼äWhécÊó½8·\0²7¡\0Ğ0Ã(A€ä4ÃHØ2Œğİl7„¨à2,½l4\r;(è0Œ]8\\–2¤½äëNÇ9r^îô;g/{á—7ş0Ì{\"°±É3½„£'¯Ång)ÅIzX\$ù~ĞuØŒc`Ò1aª0„°Â6¼õnho¤3@C£»{®Qs”!½YY#Dqt©ÁÛÃ[-‡Œ‹g˜™Š€†Kƒ¤K‰ÁĞ NÙ«,ôFÃ„‚WÃ_Šæ..M\rMÌÀr‹ácáĞ\n	¼0À0ÜâDB099ç`íĞƒ”)b\$@0H`9„òF’Š1zKDaêS1€õ&UÓ‹b;c™¢²é‹io.‚„F3È:ä#(¨JB ";break;case"ja":$i="åW'İ\nc—ƒ/ É˜2-Ş¼O‚„¢á™˜@çS¤N4UÆ‚PÇÔ‘Å\\}%QGqÈB\r[^G0e<	ƒ&ãé0S™8€r©&±Øü…#AÉPKY}t œÈQº\$‚›Iƒ+ÜªÔÃ•8¨ƒB0¤é<sªW@§*TCL#‰i\$\nAGÑS‹,íÆ€A…€§B¡\0èU'NEêıÎ”TFĞ(H2j?wEÁ•ÎdZ…Ê¼Z¹•0\$öMŒ_Á”pe4PA£Ù:Î©«Qî¨c™/)@ªëuÚı†ø™ªkPsÚa\0M9×Ê—*y=J¬+iyê]JæLà\\Éd?mÊˆîG{Ú\rUT› åh4Dq_rAVºÑ´â>U#‰èN«¯#åÊ8D?‹C£íY_¹/Álr’j¨HÁ/²äA‘*¢^A\n¹f–ÁÎ[:\$Ó(à£‘Jİq9ÒP§96W3La8s‚\$2R¯#+l7\ràPH…Á g(†©éHNå¡DÅ—eÙÌBïãLåÁka[K\$\"ØE’±ğt%ÁÌE1P>U­…¹\\råÑÈ]-gJ	CG1_­¥*z[—g!vL#ÂŒ¤OI\0@œ…ùC!È¤˜«%KSÓŒ±Ôè‰ÎG—ÊòÀ@³nóÀñ<!ÓÎCHÂ4-5èò.…ÃhÚƒ\$DÆiIåAˆä!2B`PØ:Oâ™2rÈ\\§1ZÕ%P†)ŠB4ü>ñªşA¤1RS)\nÖ5ÍƒdƒMQ”#öcø]¥Hùn(ešLŸ')F™Ö-yØ-òA`–‚#˜5`ŸçI2H<ğ‚°ÔI,1ÑiSâ–)‹1vå½p@	u÷Dìã<Ğ4M#LŞ ËÉ½ÕêÎ\n@ ÍgÌûBÑ\r*D*(zg¢cA%8Ñ±7¾!¬‹2xè:N¡WêºTŸ(\n#Îé‘Ìì¤ÇAm¤>ºJÄOİjŒ‹Q¥AEëc{b·Å×¦	â˜©g?\rKx ¦¤\nn@¡„	ãİ|Å Ô©ji]\$Ç)a‰6x’A3\$	Ú„)Zèu»·=záÜ~'{²s|qGœAEdI²p~4sàäÙhñÄ¾}R‰q¿§ä’T5B”µ? ƒUE¹Pt“d3‚.Ú*ô¾m@P²7¡\0Ğ0Ã(@“\0pA¤;ØC:JĞ7‚\0ê aø:€ÒàXaP±~'N„q˜\"±2ŠÄÔ\"8d<G~/XP --æ©ÇªõÄ³Ù,Oœ@‘†µ`+a°4†0Öxn„`Â¬¡´7†@ÒƒÈ \r!Ò‚Tˆ@È*¢e‚N¡÷ŞÙ.+`º*FœS˜&„Ùú°9ßSì}Ì‰wŠö%…™0(!u’M[í!d}ˆ3,´Á='ãœZ˜˜ÃV\rÁœIy2\" rĞD:9`…PHa<'âé%ëa‘òÁ!„\nŒ‘˜ş†\r.ÖÂÍAîeƒ¥t²pœj‚6§ˆÀŞÅ’t,0SHˆô";break;case"ta":$i="àW* øiÀ¯FÁ\\Hd_†«•Ğô+ÁBQpÌÌ 9‚¢Ğt\\U„«¤êô@‚W¡à(<É\\±”@1	| @(:œ\r†ó	S.WA•èhtå]†R&Êùœñ\\µÌéÓI`ºD®JÉ\$Ôé:º®TÏ X’³`«*ªÉúrj1k€,êÕ…z@%9«Ò5|–Udƒß jä¦¸ˆÁÕàôÉ¾&{,Ÿ™M§¡äS_¶RjØİéÓ^êÊ8<·ZÔ+±õáe~`Š€- uôLš­TÂÈìÕõ&ş÷‰¤R²œ	MºûHI@ˆbÍÒ·õ¬öœÆ2x:MÇ3I¼İG€oe[û‚ßaØÅá\\´JQ‘øa¥r™^)\\õjrôù•ÎqÈ®P\" ˆ­%r*W@h‹¦„)ª¬ø²­\0¡\nù€5Œ6”8‰ªÚ©r¬œ61aË‘ªB˜ºJ²`F«ë´XFÉğP)ƒÒ7ìúÆ– J¬é¸hfÊ4éJøÜĞšRøGªæì¸îºÑÇÂ8Ê7£,‚Ï+ğJ#(´Ë|ØK0**>{Ø¬°|*Äô«A³Ô—\n£˜Ê9HË„O¸ëê\nºÎs‚¿ÎÍÒYI­ñä	¹²\\{CJŒœúÒĞÌ¿/“´o4¾«t½©T';?sôÖİ„£\"•ÔÒˆ\\×mlÚØ´ó³äˆÃ‘Àò2¤#pŞ¨^v˜cÆ…u‹ Êœ°Ô\nzŞîUSìO@‘½ƒ/I…ú¿GqìğÄÇ,š0C±=³+>}¥©·Ëí/;‰L•Ë­ñ8´7\$ş>°l­Vò¥f¼ÜÏë	;9Îmè×•Ñ\rMZÎö4Ga¯®Hş£uÒ{‚)Ø:#„¶1Ò\"Æ©M;¿‹Œ·b*Ğ0]_åØ·˜ªÙ¢S›N\rµÙÕh².:¥§Q&dÈ¦Ù]\"WRØåè\$	Ğš&‡B˜¦ƒ ^6¡x¶<îƒÈ»wŞĞ„İ2«ë‰µP#¤9ÉµøÉ_ÊNòæCdƒwªÅ¢­o>1DCÔ;>!ŠbŒ¤4ì4±§I:ƒ•¦¶H¥õ×rÜ½x\"8íô×>Åyk­Ô¼-V¬ˆÕ1ƒ\"¾2‘bRœKÖ<ktõW)~²“ÚÎà&ŞG§æª’÷Œ1,NWô Ê8·PêÊœ/oê³Âæ»ñ	´B”Ø¾ë€|÷\\)¥Âì:¯y«€_¡RŞ›ÓA{¨¤ƒ»vBîYÛ» *‘a*w€îº9Pp	p³(—“SË\".Q+²tbÈi°2\ráv“\n)à<AÍzBCéu\0\nCä]]Ä£°ëÏ«ÊoHPrc\nÙ­2-H—À§’û#+gïÑø\\YâT![L)Qã‚Ï;&@IÒ¿´?Í‰¬ŠîTÌxNâË¿Xqq4'qŸ;‰{ç1Õ—ğæŠQYNEÈÂCƒ€í\"ñïƒq‚,DEÊB‰y1v\0Æ>ƒàğP	áL*Gô	 ©“˜ˆÊ…ğí«ÜIšÈ/	ÚŒ;G<ï%¦®ë×“#1`3ÌƒHg¡È0‡CÊ\0d\r!È2†9œæaÌšAïl›¨ÙndU“¾^qŒ³#(a%©‹M] G×ºoÃ;jŞrÆ—VÃËs3àõÎÈøìgyé-M÷Kø\n\nIá\r°ä¥8e¿%gäb\rf€Ó\"s“£*òM»H lM˜\n!¼:‚\0Ğ\\È YÀ€8\$ ìC`eë0@Ş\nd™¡–š†€Ó!Ã aTÅï7É4»—ù6¨ëéNÆRÊYãÄ­}aÑví*¤	|ÒY?z”[İ’ç/î§ÆÙph_ªr6/–Š»F5›k£HÎ::àËUªÔ.¹Tb¬ìTÊr\0´&‰^SäòS’OF¶¡6¥“ÇFÌşÁ”êØ’H^i6°ÆHc\r`€ó\0Â°a\rÖS`@C|ÒÁäèW–¾BE¼¥Qâtúã¢ªŠÔ\$™°Şƒ¥qe97Æ‰ú­çm@öİDrÏo]\$K—Và%wupÉıÅäœ›–lnlói´´Y“KîÕ\nšG¸FøáÕMæ@Æv]z],ğ¦U…±F[ó °ºUWkˆ½¤2xMÙmvVI?\nA”6LÙÔI6°•ˆFH‰İC0¬mÈ¢ /³ÁÍyÄ¿(*×±S´=Qˆà:#ßDDßM7vìª»²iÕ18a0¢M\$ˆ²aEµ÷Sªƒ^/’í£·R£»ybRÉ6ĞRÁW³(0NØ\0³ª•&à–e7U#ìŒ²¸X¤C¬-T®\r –„\\k¢lºŠx½œŞºµ¢Ğ#\")©yœ/¢l¶İåp\$E‘9¼—®ÆŠc¢6ªjÂs¯¤ue:€";break;case"bn":$i="àS)\nt]\0_ˆ 	XD)L¨„@Ğ4l5€ÁBQpÌÌ 9‚ \n¸ú\0‡€,¡ÈhªSEÀ0èb™a%‡. ÑH¶\0¬‡.bÓÅ2n‡‡DÒe*’D¦M¨ŠÉ,OJÃ°„v§˜©”Ñ…\$:IK“Êg5U4¡Lœ	Nd!u>Ï&¶ËÔöå„Òa\\­@'Jx¬ÉS¤Ñí4ÚzZØ²„SåØHİMS àè]şOâ”ÕE2şÕ\\¶J1‚Ê|úĞ¦[ÉiõL¢™_?€Pµë\n~bÂ¨‡#óªm\r/ƒÚÔt7½Bš'Ÿ¹C¶˜]¾sl¾ğæö2G©ÓÔ¶ĞæŠÌï^TÈ˜s±¢ìñ<\neU>¢‚€c¶½Uõ>İ£³ëÄÖS ïL^>Ê#–Â²Í4\nÙ¾jRñ©êêÜâ’hªòÀ\r©*§½ÏÚÙÂOù~ÿ1êÃdÁ+ì*\\×¬lº·=‹{Şæ&ÌK^W2Kb£”î,.¢*{ SëJ¶¥*«\" d%É¯QQ³h\nÏ·\r*\0ØÊ#Â H\"62:O™>„³dÂ¼Cq„¿1r#*B7\ràPHÁ iB†,k=/“Š{n½¯ÎäÀ¨(’“_\rA­{İK¦\0©mê‰ÃÏ\$^‡£Û\nÒ/¼q]`°áj¾·-Å’Ÿ)GŒÁ\nLM‚OÓ3Í°ÓrÜícKÎDĞÈ¥«a@¶sZ· ñårš¯ÒY~¡ÑšñiÓ‹ƒRÁo3¦Î“Õl×U»&Y·\nrZ-}Ğ¼+¤]×<±ãÎÕ3…3„S1Òx\$Bhš\nb˜:Ãh\\-XèÔ.ÉVò\0–=h‰.”Õã©BUTæ¡Òi«¶EC`è9S2;j×Bêz¶ëäB¬b˜¤#4õ|Ô)«3*¢É^_ß·=¨îá2ÆF€G\$ülÆMCjà:ò¦\rwá,Üçì”¤î©J,ìÌBÄ>¿<Eö¥\"q3/¬JZÙ\r2¨uévDÁL‡o«qoÃ÷röoug\n—ßÖğíËèƒÒŸ\\	V«;H’6Ú”<ßÀ{¤ìå­ÊSŸ€GÓ¥EI8€(kı;KE=jˆå4]“\0.Wãé«Ì»ÕØ“H½«„çêì¿l¬1¯‚ïØ,‡Q¾*]/\n½‚¬ÙoÊˆş0,7ÏQ ÜÚ‡[ëv¬}¾¶DÚ²ÍÓ&_¤+'DÜ’\0XÍ«æ!'i|¹æ~’ù@L.¥‚\0 Â˜T!ĞP¼:fšL‹bF@éå×,%‚dÓCò]DŸ©eX\\C›x)E	%–tà”™Je¥6´Û‹DP©š&\$™)¤Lét‚8eòÁÚr<Io9=,7\$ÂGŠÉ˜¢&‘ŞÑ›©GzfÊì÷=&’-&X•WÉQ[)ä\\Â5J¤–KòŒÑU³?fĞ¦[£ˆ*¡Pº¶äÛ’9¥zEäÆŞA\0h!Ø2‚\0€r\r!Ø4†ÀÊÓğ ¼Pàt’¡Ğ4˜bb“ÅÕô(JlE0£X­=¿›Yp(â\"4ˆ;H–lTUÅáq8‡æóÈÕ–¦Z[Èq&¹eá¤|i¥+KU{JáO[)~(ø¤§S‹I‘Q1Å¸ŞmbôØ„ô¶FÃ6ºãìi(à(!³pØ\nÃl\r!Œ5‚\0Ş\0aØ0†Àë*å m\rá4†`òKZÌ˜†§iBW¼rOåå-…¢¤Ÿdoíæ|F‚ŠÚŒêr\"^R	‹HÓÕ%TL°Ò˜õ\nù¥ç¡„Òéì¸Yc¾jj¹¶³(˜R!bÎ¨\"@EÍæK·n­¾ Õ²ğ.*©µFoT{´_ª‘M¶Ä_rÉ}nö±Äj…’¹%ô4¨˜MÒˆ©åÄÈaWú™€\$HÑpxa¢¸3Øû\"›(r’²¢XQºhx…ı1£ÔÖºGJÂØE<\0(“îE;[V‹Ñ¿)ì.•yR\"7§fz””úŒFõh?E…FDK|hª:º´vL“WDÛ¦5Wuâ\0";break;case"ar":$i="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø(J.™„0T2]6QM…ŒO!bù#eØ\\É¥¤\$¸\\\nl+[\nÈdÊk4—O¡è&ÂÕ²‰…ÀQ)Ì…7lIçò„‚E\$…Ê‘¶Ím_7—Td…Ôâ¥¢ÊQÔ%Fª®ÎâPEdJ£]MÅ–iEµtØTß'í…œ9sBGeHh\\½m(AÁ¸L6#%9‰QèJXd:&§»hCªaÎ¡RÄPcÕ¹åzÀ†¸Ìnø<*©°®Ì¡g\n9††%‚‡h5ut.—³¼QS…œ\nÅÍÄ¶p{š¯l-\nˆ†;„Dğ¸Ê\nã ën¹ÙÒÆI‚Îífˆêg€ŸgxuµŒãlÂ§„R¡\"erğè¿êä®Ğ1·ÏJpÃ¡ª°¹ê¹^‹ˆ!P»¤nXò2£ƒpŞ¨^qXbœCéÑV)dE+.êNC?Ëà‘•	Âu\r³\"ì2mÄ~±?­›¶–¤e{6È!ÏÚ‘1H;à­z¶\\§âí4²š¥í²–Æª!R¨2os\n©?Éé±8²Š’™¬s›7¸´\$	Ğš&‡B˜¦\rCP^6¡x¶0Òƒ»À	 ³·Úw	¬e²„î\$qÚÄåC Øà7\r2İb˜¤# Ş5Œ£r	V›¹°SÑË°±é«\"´+œï>¶lÛ(¸!®\0°!­’Îè.èm\0ù¦°¸%ì<…¡Å²¡'‹læ„Î¢àC¡7Cœñ›e„ÆË¬‚ŞY2’LÜrt¬	yi¥ÑµÿSnv—jÛ3öRB‘¤­Z¸¯L,î(±b¨Pà4Ê‰°ğ}´«cËX¸¢tP¢_Í²ê“«e•ã'_¶RÎƒ(Š2¾§/.…ã\nâ‘'8w\rî¦Ú–âñhŞ\"€)ŠˆZ#R,eJèĞØ:1!:5º¢ ‰Òy±½z–USßjêómùd«ÕÏÆejk…@Õ*Ç5Y¢€(*†Òl\nxêBÅ;6×í5,ğ¢Š’r{c&‰½ÍX¡s\\ŞÃ0ZØ·l­bçw:©Ún,ã¨@4#°ÊDÁ\0à9\r#°Ò6£<Hƒx@: Â:wc Ğ4~@Â1xŠZ°—Š——3Œ±(ÜÃÊ³=R¹ğ|S»©2\n„Û5[âœÔıÌº\"ÉB)-È†BnÃ r\r€¬1†ÀÒÃX \rêè0‚\0ìC`uz/(6†ğÈC0y¤:zşÎq¼0ªø’¶Ój\\Os1€e.­BXÅĞ¹¨%D¨ûÅ–’›Ä99ÅÕ±zåŸQp!»­Ô&s‰9D4OxùrhP\nOà€gÒ@-¯¡Ô°…àãD9ù<Íñi“‚ŒKÉÑØgæÜ«ãxaƒá¸3€¨ñNíç@Â‡Ù”…„t„\$²ê×‘Ñˆ;ÇPÂŠäz…IïYp½¤ªä`f[G	:\"xŒ†9À…JöMFG.~O°„";break;case"fa":$i="ÙB¶ğÂ™²†6Pí…›aTÛF6í„ø(J.™„0SeØSÄ›aQ\n’ª\$6ÔMa+X¶QP”‚dÙBBPÓ(d:x¯§2•[\"S¶Pm…\\KICR)CfkIEN#µy¼å²ˆl++ñ)ÕIc6Ód\$BÓ!ZÎ-Ö•~äŒ„Ø,V}–'!³Ğ•”šl†·ÏUUiZ¾B@±ŠqA´©ˆSêp•ô2íQÇBÔùšœB#SàğëT­Q:‚HTÚkí“ˆN!([îÉ+†ª­ğ{…r ËÌ0ËJæ¥@Ö`4ÊëÌ–©¨ZlëIò¢´ã¯•ø…Ï¸¨ËãáZ¸šÏÕmˆğaRê#MgÑÄV’Ùv¢¤¨J–À9i’:A§Pl9É:Àæ,iŠø-%LÅÀ+¡^Ú\"Ã\"RBàHK0ÏÊ#*87\ràPH…¡ g†«IXÅ,*ú:…–.LnS£¨\nÎU\$ÎARÔ1ÌB£¼H”.´—0Sà•¸L;Xµ¤%B:Î¸-QäÈ’Ë*ÛPù4Sx°Ërğµd¶Ü¬ëç 9Hj’BCª{rB·)Ìò¶\$®á_DÊ@³K<ôİ2Şô§dB	@t&‰¡Ğ¦)BØóQ\"èZ6¡hÈ2-+\\\$°¸jŒ‰,H®{9ƒbÒ†Õğƒş‚9Ò\"T’8p\\’É©S¡¥Ë3J6\0¨7c(Üb˜¤#-6Sv»(òxU\$µ¢ÎVP«©´,ë¸ÅİvSˆ™¥e’ÊîK±*xù&lc=¹›v*7ÂÎ&×Z „áLc…¯	Ã\$«Ù”‘ª«¾Ò+µÖè8Íf/b=ÊŠÅ~×è\r‚åËlõ,Ğ,°‘?¸Cİ—¬—kHS›HFt¼\$V#ÚÖQÉÓM.…\nR’Èrş´b@ä©©\"	³jµº´LÎ¯z³O:VãÒ(•‰ x£lÔ2J’…–˜©j1Ì3§´4j{=¦PúÎY%¬Óƒcî«îÆª°ç¸ë‰ûª2R?§¤›[ñd)×jn¥¬é<Óz))«\n¬R;’~B°º\0£‚­tº²#oËí3°í%%µöI÷sö«ï?UÚ‘ëËÒÆ¾½R€,ã¨@4#°ÊE\0à9\r#°Ò6£<Tƒx@: Â:zã Ğ4 Â1|GZµ>ìîW.ò¾f‹ú\nÇØˆŸƒL-I/Œ¹‡€ašqs(î¸@§Ñ°ï]¡H„…ª»I`Ã«ƒD®¶R€Ã r\r€¬1†ÀÒÃX \rë\\0‚\0ìC`u}¯˜6†ğÈC0y¤::„FIHh·s,i\$AèObSV‰†à‘ãiÉ9ŞJÊÌ×TnxÒc>\$9H\nñ‰ş*eØø£\\dŸñàlÜƒ™ròğÑ3ŒXo;ÆxòŸ„a[îL˜8\"|UÚâFŒM@¸“QZş…­%¸&ğÃÃpgRVK‚z»ê†D’Gâı=fñÿ+(ĞœˆsT>æ\$àÉ\"Vœ,M9&K—Ij^Í#xAl\n/U,ŸÔlxÑE;¼(ıÍ` ";break;}$se=array();foreach(explode("\n",lzw_decompress($i))as$X)$se[]=(strpos($X,"\t")?explode("\t",$X):$X);return$se;}if(!$se)$se=get_translations($a);if(extension_loaded('pdo')){class
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
as$y=>$X){$y=bracket_escape($y,1);$P[]=idf_escape($y)." = ".(ereg('char|text',$q[$y]["type"])||$X!=""?$c->processInput($q[$y],$X):"NULL");}$I=table($b)." SET ".implode(", ",$P);$Oe=" WHERE ".where_check($Ae,$q).($Z?" AND ".implode(" AND ",$Z):"");$J=queries("UPDATE".($oc?" $I$Oe":limit1($I,$Oe)));if(!$J)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(70,$la),$J);}}elseif(is_string($Fb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$J=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fb,$Gc);$la=count($Gc[0]);begin();$Nd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Gc[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Nd]*)$Nd~",$X.$Nd,$Hc);if(!$y&&!array_diff($Hc[1],$La)){$La=$Hc[1];$la--;}else{$P=array();foreach($Hc[1]as$t=>$Ja)$P[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$J=insert_update($b,$P,$qd);if(!$J)break;}}if($J)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(72,$la),$J);queries("ROLLBACK");}else$o=upload_error($Fb);}}$ce=$c->tableName($S);if(is_ajax())ob_start();page_header(lang(36).": $ce",$o);$P=null;if(isset($Fd["insert"])){$P="";foreach((array)$_GET["where"]as$X){if(count($Ob[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($S,$P);if(!$h)echo"<p class='error'>".lang(73).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($N,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($ed,$h,$x);$c->selectLimitPrint($z);$c->selectLengthPrint($ge);$c->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Rb=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$F=floor(max(0,$Rb-1)/$z);}$I=$c->selectQueryBuild($N,$Z,$Wb,$ed,$z,$F);if(!$I)$I="SELECT".limit((+$z&&$Wb&&$oc&&$qc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Tb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Xb,($z!=""?+$z:null),($F?$z*$F:0),"\n");echo$c->selectQuery($I);$J=$j->query($I);if(!$J)echo"<p class='error'>".error()."\n";else{if($qc=="mssql"&&$F)$J->seek($z*$F);$ob=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$qc=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last")$Rb=(+$z&&$Wb&&$oc?($qc=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($I) x")):count($M));if(!$M)echo"<p class='message'>".lang(64)."\n";else{$ya=$c->backwardKeys($b,$ce);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Wb&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(74)."</a>");$Sc=array();$Vb=array();reset($N);$yd=1;foreach($M[0]as$y=>$X){if($y!=$Uc){$X=$_GET["columns"][key($N)];$p=$q[$N?($X?$X["col"]:current($N)):$y];$C=($p?$c->fieldName($p,$yd):"*");if($C!=""){$yd++;$Sc[$y]=$C;$g=idf_escape($y);$ec=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Ya="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ec.($ed[0]==$g||$ed[0]==$y||(!$ed&&$oc&&$Wb[0]==$g)?$Ya:'')).'">';echo(!$N||$X?apply_sql_function($X["fun"],$C):h(current($N)))."</a>";echo"<span class='column hidden'>","<a href='".h($ec.$Ya)."' title='".lang(75)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Vb[$y]=$X["fun"];next($N);}}$Bc=array();if($_GET["modify"]){foreach($M
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