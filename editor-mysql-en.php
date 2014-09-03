<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.7.0
*/error_reporting(6135);$Eb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Eb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$ge=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($ge)$$V=$ge;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©–¨a'3IĞÊd«Â!S±æ¾:4ç§+Mdåg¯‹¬Çƒ¡îöt™°c‘†£õãé b{H(Æ“Ñ”t1É)tÚ}F¦p0™•8è\\82›DL>‚9`'C¡¼Û—889¤È xQØş\0îe4™ÍQÊ˜lÁ­P±¿V‰Åbñ‘—½T4²\\W/™æéÕ\n€` 7\"hÄq¹è4ZM6£TÖ\r­r\\–¶C{hÛ7\rÓx67Î©ºJÊ‡2.3å9ˆKë¢H¢,Œ!m”Æ†o\$ã¹.[\r&î#\$²<ÁˆfÍ)Z£\0=Ïr¨9ÃÜjÎªJ è0«c,|Î=‘Ãâù½êš¡Rs_6£„İ·­û‚áÉí€Z6£2B¾p\\-‡1s2ÉÒ>ƒ X:\rÜº–È3»bšÃ¼Í-8SLõÀí¼ÉK.ü´-ÜÒ¥\rH@mlá:¢ëµ;®úş¦îJ£0LRĞ2´!è¿«åAêˆÆ2¤	mıÑí0eIÁ­-:U\rüã9ÔõMWL»0û¹GcJv2(ëëF9`Â<‡J„7+Ëš~ •}DJµ½HWÍSNÖÇïe×u]1Ì¥(OÔLĞª<lşÒR[u&ªƒHÚ3vò€›ÜUˆt6·Ã\$Á6àßàX\"˜<£»}:O‹ä<3xÅO¤8óğ> ÌììCÎÚï1ƒ¢ÕHRâ¹ÕS–d9ªà¹%µU1–Snæa|.÷Ô`ê 8£ ¶:#€ÊàCÎ2‹¸*[oá†4X~œ7j \\ÁÃê6/¶F[NYƒè\\¹¬ˆúê…n¨o5<¬°lÍápÔ9ÒcFZsÃÒ|:>6 –«kÅvâ©Ãqs¤:£pö8\rë#¨È^¢¯nZ,B2)OÕÎÓR¯ı[Iö±ÕÚ7²¨tÒ”·7ì(áœñ¬WŠ0øó¤æ2x~]ò;ñK2ŒĞVaĞà»ó~–r=ú‹(Ëë¢,³›\rîÉj*ºB(Rî2C–N\\ŒÎÿÒ9}a\0Å•ÓVR4G«Bè©ó¢ÖìC(s(mm½ƒ¢(wƒsñnmú¹·ÔB\\lMi#;#ø¯Uáş=M-~±õäæÃh)°5	ƒpŒC›±/,Ğ²Ø]ƒs …Ø#CvìŠM ´>÷6@–hu¯ø„`k¢s›ryS‘\"Îòâ“…&5ÅuÑ\"cu/L	#DBÈO´M€è™¦ìˆ¸ctê±W6\"¢Ÿ[›‡!´1Øè`#´EdnèÉØLwmÙª5gÀÆÃAçU íF8Û¨\\M-Ø7‡Nâ\n:`R>KIã\$ä¬—j!¾M9²\"OÉê&BÌ­wàİƒ˜qZÅÜ«J™\"AÃ…(\rê_sîÈ}>Ìœ&ÉHÇ´“nÊœ6/ÆC‘¼fÄì89³@ÖÃ›£t¥”4˜€ÌCÁx6fÔÛ•5HÉPæ?€ÔüD·æ³ÒõAŠ\0á‡ĞG!ÌâtÓ•Ô'TY¡I„Ì+”ššLnù] Şf(1*Z«@êÍ\rRøÕ®Äg˜‚h!C¥‰öp1*€Œ2P`öĞf!Ü¸8¸#?ˆA`°¤4‹8_ÖZ•½ wN)ÓÄR`7Ñ5Z`*…;DíÈéA* ™TTˆ˜+#ü~Jp¢0GPH³qŒ¸Å9©ó]JôD+eu5-Ü©É¨tT:«*ãa5Gl–­ºó6&ÓÚ\rå@³*ÂÃ=qgåÎÄiüA•© iG²Š¯#á<i—„ËøøPºÂL#¤ f!ÔwWDäêA¢ó¸¨>9’Š‰<\"µ/Û ü¥àdaÉĞ?º’øê[ÙyOüÎ7OTè5¶¡úw&àkg²œhöı’šÛo!—]öÒùâîÏm>³™˜èhu”ı‡!6\$ÄW‡\0Ú¢`[)\r:fŞ(\$²p éÁ˜‰gs‹e2Ñ»Ê.\r˜ıÕ¶qÜØ’zÁhm\ráè‡Rle	ƒC.j ÖYq.'(Äï9“„p˜aRu0'd¦B©j7a¦4YkR{Á‘øšód¬â,?l§%´»%r„Oì\$©Êb“.ïÔ»†åg8r…×¶¹PÆàä` <8Töß3çk\n›vÌù¤88Üæª«8eÎÙ¡IÁpåóH.ƒP-#_˜Wó›ÎàĞkE|-(2Ğæ}FŸÀcBínoÃ9Ë>;°n]Ít^ª¸ñwĞ\rğ=ù¹£­9šk}°Ğ€]Gwªœ«ÔÒÓ8„hñÑ7Í\$Àß‚†.`C)bVlfH pø)`ºoÀn˜µÉµ¦zÖe£€,N˜º–ÏœUh_]Ú_×]“ë·n¾à[ô¤Ø»ì‚½”]Ç¹:†>mrC¹36Ñ»Ÿ\n‚İOj¦f‹Óæ‡~?¾¹î¾,äÚ[E»ƒ=DÛYk-‹ı¹mè¤û«lOõ¨.fı¢ü™è¼h±tŞcByüµæ>«tÃæE‡@>‡Ğ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n:Ìæsa”Pi2\nOgc	Èe6L†óÔÚe7Æs)Ğ‹\rÈHG’I’ÆÆ3a„æs'cãÑDÊi6œNŒ£ÑèœÑ2Hãñ8œuF¤R…#³””êr7‡#©”v}€@ `QŒŞo5šaÔIœÜ,2O'8”R-q:PÍÆS¸(ˆa¼Š*wƒ(¸ç%¿àp’<F)Ünx8äzA\"³Z-CÛe¸V'ˆ§ƒ¦ªs¢äqÕû;NF“1ä­²9ëğG¼Í¦'0™\r¦›ÙÈ¿±9n`ÃÑ€œX1©İG3Ìàtee9Š®:NeíŠıN±ĞOSòzøc‘Œzl`5âãÈß	³3âñyßü8.Š\rãÎ¹PÜú\rƒ@£®Ø\\1\rã ó\0‚@2j8Ø—=.º¦° -rÈÃ¡¨¬0ŠèQ¨êŠºhÄb¼Œì`À»^9‹qÚE!£ ’7)#Àºª*ÊÀQÆÈ‹\0ŠØÒ1«Èæ\"‘hÊ>ƒØú°ĞĞÆÚ-C \"’äX®‡S`\\¼¤FÖ¬h8àŠ²â Â3§£`X:Oñš,ª‡«Úú)£8ŠÒ<BğNĞƒ;>9Á8Òó‡c¼<‡#0Lª³˜Ê9”ç?§(øR‰#êe=ª©\n«Ãêª:*êÊ0ÖD³Ê9C±ˆ×@ĞÖ{ZO³ıêİ8­¦iªoV¨v¢k¨Arª8&£…ğø..ƒÑcH¡EĞ>H_h“ÎÕWUÙ5áô1r*œ¦Îö^Ğ(ÛbàxÜ¡Y1°ÚÔ&XHä6…Ø“.9‡x°Pé\r.`v4‡˜”¶†Ã8è4daXV‰6FÔÕEğHHºfc-^=äÂŞt™İx‹Y\rš%ö«xe çQû,X=1!ºsvéjèkQ2É“%ÚW?öÃÅ®Œ´æ=dY&Ù“¤VX4åÙ€Ì\\—5ĞßãXÃ¬!×}âæµNç¡gvÚƒWY*ÛQÅèi&ÈğlÃÎÑµZ#–İãñ Õ‘\rAç\$e°v5o#Ş›¢Øü¶5gc3MTC£L>vÎHéÜÃú–§<`ø°Ú* ]‚_ˆ£;%Ë;îÚV–ùi“Àèã4XÃé–'”Œ`ºªÉãi×j0g¶O±†Û¥“iæŒì©9·Æ™Û’dİFêÊÙk/lÅ¸–nÄÜc<b\n‰¨8×`‘H“ëeÅ}]\$Ò²úÖâ í°!†ÀÒÃC)±\$ °šAğ×`ó\0'•€&\0BÎ!íŒ)¥ò˜´5E)äÁàÒÂo\r„Ô8r`ûÈÌ!2ê­TÁ›s=¯DË©Õ>\n/ÅlğÓ‰’•[ı˜Å PÛàa‡8%ø!İ1v/¥¥SUcoJ¨:”4J+Bàó‡µv¯Jü‚\ráâÂb{ƒ ,|\0î°zöƒcÜªÅY§Ål®\nüœi.õÜ!äÛ)ü¦dmîJ«¯ÑÈ!'ÒÁë B\nC\\i\$J˜\"¾ëÖ2È+çIkJ––ñ\$Š‘’âG™y\$#Ü²i/¦CAb¾Ìb‚C(á˜:°ÊUX˜¯”2&	Ç, Q;~/¥õKy9×Ø?\r6¾°tVÊéÑ!º6‡CP³	hYëEÁÓÎØâ£ölñä(Ø–TáÒp'3ƒĞC<Ødc®¸?°yCçóşe0¼@&A?È=¤å%³A:JD&SQ˜Ñ6RÌ)A˜Ğb`0Ú@ˆéu9(!0R\n‡F „•ÂŠ ÄwC\\‰©Œ¤Ï…rÔäÜ™¡î¤#•~ğØ2'\$¡ :ĞØKÁ`h¬³@‰£Ebó¢[Ğ~¡Ñé’â TæÅlf5ª³BR]±{\"-¤Ğ\0è­ÊL>\rÇ\$@š\n(&\rÁˆ9‡\0vh*É‡°–*ÆXë!_djˆ˜ƒ†åpy¹‡‚¶‘`ájYwJ‚\$ØRªˆ(uaM+Áêníxs‚pU^€Ap`Í¤Iì’HÖ\n¨f—02É)!4aù9	À¢ê•EwCİĞ¡˜“Ë© ‰L×PÔİÄşAiĞ)êpø3äAuâÀöıAIAÉHu	ç!gÍ•’U”‰ZU·À¼c¤*­´À°M„ÃxfÆ:ËÆ^ÃXp+‘V°†±á²K‰C#+¾ ÖWhúCP!ÈÇÀ;”[pn\\%˜´k\0„ô²²,Ú¨8à7ã¬xQC\nY\röbÿ£XvC d\nA¼;‚‡lF,_wrğ4RPïù»HAµ!ô;™‰&^Í²…\"6;œå²êÎ=÷#CíI¡¸¯9fé'¬:¸ŸDY!ŒÿB+˜s¡xV†8lçÃ“¡\"Ïé‘ƒÍHU%\"Z6³Ôu\r©e0[Á•pÄßØa¡è.…À¶ +^`œ`b§5#CM‰\$² ûIçîËšAÌP§5C\rı S•dêWN6H[ïSR½µ·êß\\+Xë=k­õÎ»×ºş¼S”¶Ór^(¦ƒoo¶7™¬Ï©\\huk¢lHaC(màìşønRB†¤Uup³Ú2C1š[Æ|Ù½ùbeG0ĞÙ\"ìCG±²?\$x7Ğßn­¤\$ZÎ=ŸZÓ¦Ãsi5ËfÏí&ç,®fÓhiÆIÎyÖnî¶2ò0ÚœDvEüÃTïxôúMå{àô`Ü¤ÁGN#é‚Z,«Âƒ/âR\$”#\\I-	®„°—|Ä0à-0ı‰Nî¦P·ÉÒ¤;s-˜vô–ÏÒ†ÿ½‡nwGtï…n”¡ÒdiáH×|¥˜4¤(½¼+¼vò¥İ&ØÅ…’+KÀ£Ìñ™L\nJ\$Ô©ı†¨µ:\\Q<WB\"^—Íñ¤ºWTIB~Ñßq¬Éåğ}ó3ŸÎ¿\":şU‡á­Ö|\r5n(n™­ˆ‡ Ù7ƒÌOÁD}B}‹¼¨æÊ\0\r“voÜ•„…·Ø†_Jl‚Ä°•H3‘\"®[Ä¸âå¾ÔKŠAµ`ß–ù¯¦NÉÂü&(‚)\"ˆ fÿ&Å\0°¦ b¾ò¨lãF.Âjròî”şâJÂˆÆ\"P<\$F°*é|f/Ş! İOççŒpR Ç™„F#5gäbã Ä8eRDi¸É0“P‚+*¬üÆı™kZ;ÃpHh¦®l!è\0\r\nc›oÈ/¿úCBˆ<pyÀNTH½hêTç	ğ@éğpxÌ\$¢Šæ°ÌÀÖ48\n€Ò#îNU,Óˆš\$Pémò YKü¬\"H Ò †RıL¸ı‹®©DŸ\0‰¿âˆ€aWˆ`pûïşúĞgğ¯êlP¤Âÿoú:L€·Ê+\0 ]0±<)‚öN«xk\n(`cê„+r·k{m\"â3.0±H1’e*ZoeBÌ‹9\rÈøÚ\0RLi¥Q¨UğÔ‹`äÂ.”ûñÂ–o:Åd€´Â’µT7QœÑV »ÉDh‘âWæ´ëS1ñ	ñøgæ*2¯‘,†W)°Á@çÏ°T@C	Q(ñ,™Å4æ#d<Ò’\0¦! á\$˜ú2 {es¢´+…rÊ«şÍìÎJvY*ŒHPr\r¤‚†ÍTÜM\\\\`¼¿ívíàæ<ñ«&ÄnôD\\HHÈoj^@¢Ú	 Â<ñŠ†¯ëÆ8Š“*#fò©*Çş\r\nT§ \\\r²«*çTª^* ÚÉ Ê\$ª6oŞ7òĞRee8³ Êç²¡,Ò¥,Ó,`|9°K2Ï0r±+Ò§1RÖä\"È Õ* P*å¾È†M\\\rbà0\0ÂY\"ª\"ºUx†Ù`°±êÈ€àQ“E\rÀ~Q@5 ™5sZ³^fÀR@Q4ÈdÀ‚5Ãb\0@ÔFób/€8\"	8s‹8â<@šƒãìl2\$Sh± ¨\nÎR\"Uì43FNÉ«7\"D\rä4úOI3Â˜\n\0\n`¨``³â Y2Êğobñ3óË<n6“]<`ì\"’Ó Nˆ\"B2àZ\nˆüm¥ àEÀƒëîé\0ğ£üàZxÀ[2Â@,Â’’÷<Pİ?ô\rÔ8#d<@°´JUŠ¬K/E¡;\$«6óÌS”DU	l;¤,UÏLÎ’ñ7fcG\"EG€ó\$£¨\"E€Ù3FHÆ¤I“Ìãd‘=e	!ÒUHĞ‘23&jŠÈ¬Ó*úÂ%%Ó%2“,ŒÓJQ1HÌl0tY3öÁ\$X<CÄtà4ë_\$\0©ã>/F\nç¢?mF¬jÖ3¥p«Dá„HKœv ÈºÉœ\0Xâ*\rÊšåÑ\n0Ÿ‘e\nÎ%ïœºäÁ\riûÄêO€Ãfl‰Nö©M%]U¬Q¹Q½Lé­-†÷SÂ±T4Ğ! äU5T\nn˜di0#ˆEŠªM£ˆ³«i.ª°/U ¸é\rZFšúÓj„®¨;¢òíHÏâ˜d`m¤İ©ú–Ğ\nıt„ƒQS	eé²³|Ùi²šñ¬ÁQt¦ dò12,›öÁDYò1UQSU¬±cd±«µÄEˆ)\\«–¶ÂLö	ìF\$¶@öå³Vï{W6\"LlTÄëAò\$6abã‹OäêdrÌÉLp†c,’¨esÎ¨<2ì`Æ@b€XP\$3ààŒ@ËƒP,úKÍVÕ­^õ¾àÏM”‡Lö°¸ué1şÙ@îc•ˆt-ä( ¸ `\0‚9¶nïç2sb„¡Ê/ ĞFmä)¶ôƒ´ÿHl5ó@ÏnÌl\$‡q+ğ:®Â/ ¤ø§dŒÏ,òà\n€Şµˆì„£.4ú–’\$ ³w0\$€d·V0 È´\"¾ÃrìöW4678íVtqBau÷pÃ€ŠI<\$#Åx`Éwd9×^*kƒu×ofBEp	g2³Íóf4 à‰L!êr=¬\0§ñ\"	Ú\r<êÕhöÓÒæöˆU…%TÓhËëBkòº#>Å'C¥p\n ¤	(‚\r´ú2ö‡Â\"3â‹l•õMÔ‹7ıGÅx.ˆ,ÖUuØ%Dtø Ãw¶y^­Mf\" ‚ŠƒŞ(vU„3„u¬£J^HC_IU–YkS…—‡c_ylc†c]rF÷å×_q¤%†W#]@Ër²kv×3-ãcyÄÏVHJG<€Z¥öTè@V¸8œ\$6‡oƒ2H@˜\rã‚äÂª\0Âˆ=Øİö·æ¹\"3‹9zõ²:KõúÂu¯K >‚¢Œ¿B\$Ârİ.äJÒê<KõG~àP¿X´€QMÆ¹	XŒ‰w\$;Êæmp”Zp• åcK!OeOO¸?ïwpæÄæ‡¤í†Ö ¦ÚL—¶I\nŒğ•?9xB¤.]O:V®„˜ß9ßÃ.ÅmWŠ\0Ë—s>”*´l'«õk­Æoph»’èx¼‹‹«Şv´L`w1”÷° €è!¸M¨4\"òI\$Õ÷\"oõ\$À >Ë™Bea\"™ñŸDÿBoƒÊ¶ü+ì B0PxpŠ«&àá7Ã|p{|·Ï}7Ö°Â\$-P£‰‚éú@b„…¤õe¤ÆåÊVYmoMoŠ\0¢§£Nzn*>İÎ„€)¢ò·Èˆ×-H‡l!®“¼hpÆgÙË Š’¼Û&tZøãœ¤\0!‚¦8 É©¸¨àºZKŠê@DZG…Œ•Ÿº®øæ¶F€ç§©.† ˆ¼l¢üz%ÈÎ(ä¶xÙ}­ú'<šıÅª(°¼¥ú°ê<ÚXZÇ¬ºÚÑšà° É®g´ºí§ºò‡òw¯ºzÔz{°e¸'{;@å™±(&ø²ÅRà^Eèİ›xºå®›Y®ñ\"ËÌë¥MÜ’çç–VöÚ\n§5Ózl¥zrÔ[xŸ²Ëª’¥ú“»G\$O W @¤½À«Z¹xÇÎÕÄò­,Ì•”be»‰ 	ˆf£dÆ»Ğ2ûÕEÃ‹‹I¼D‘YTÙ%kš{ÎJ­\\\rºU N Å'¼_¾ÛÉ½»f|wŞµûàË,½l«7ªktø1RD>öĞ‹X‰ZîÍĞŠ­|y|Z{|×Õ¢Èî\r—é%;¬#\0eK¢	XÎ8&>7‡­ÖÎrhÎ:øLLª¶K*6U/\0004ØÎg™¢Eñc\n®jò•{Vœ[WF}#q İTÖû1abÆû\n‹1PÀÆ~íî((f+W‹?lîĞÑŠ·OÈüÒ#Dc€8€¸»Æ“šòkà\\@z×cÏ¦lñàé1lÆÌ—v~Õ ò(«L/cA%Ò#ÁbÈ„4Ó4Öíè÷ÍÑeZ2Ï®-\r…|ÑÎ1ÑŠ)ÎıK…<`¸Ù)2ÀW€“€X\røĞWÖd½>ÌÒ\nÌ­SX}Œ\rã‚¥EÔR¾(„â¼ÑÑ]`e9M•\0{Ù}šÕk+ƒÀË„¯ı³ÎÖ}Ò*&½'pƒ¤ÁË§ÎÏLó¬%DÂ}êwtëÕGwÔÀ÷Õ«oÕıçÎâ“CÀË×œùØSš«£´ıĞ\r<&ëB†8„mµ&‚€");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($cc){$rc=substr($cc,-1);return
str_replace($rc.$rc,$rc,substr($cc,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($ed,$Eb=false){if(get_magic_quotes_gpc()){while(list($t,$V)=each($ed)){foreach($V
as$mc=>$U){unset($ed[$t][$mc]);if(is_array($U)){$ed[$t][stripslashes($mc)]=$U;$ed[]=&$ed[$t][stripslashes($mc)];}else$ed[$t][stripslashes($mc)]=($Eb?$U:stripslashes($U));}}}}function
bracket_escape($cc,$ra=false){static$Wd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($cc,($ra?array_flip($Wd):$Wd));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($A,$W,$Ba,$pc="",$Nc="",$kc=false){static$q=0;$q++;$I="<input type='checkbox' name='$A' value='".h($W)."'".($Ba?" checked":"").($Nc?' onclick="'.h($Nc).'"':'').($kc?" class='jsonly'":"")." id='checkbox-$q'>";return($pc!=""?"<label for='checkbox-$q'>$I".h($pc)."</label>":$I);}function
optionlist($Rc,$vd=null,$le=false){$I="";foreach($Rc
as$mc=>$U){$Sc=array($mc=>$U);if(is_array($U)){$I.='<optgroup label="'.h($mc).'">';$Sc=$U;}foreach($Sc
as$t=>$V)$I.='<option'.($le||is_string($t)?' value="'.h($t).'"':'').(($le||is_string($t)?(string)$t:$V)===$vd?' selected':'').'>'.h($V);if(is_array($U))$I.='</optgroup>';}return$I;}function
html_select($A,$Rc,$W="",$Mc=true){if($Mc)return"<select name='".h($A)."'".(is_string($Mc)?' onchange="'.h($Mc).'"':"").">".optionlist($Rc,$W)."</select>";$I="";foreach($Rc
as$t=>$V)$I.="<label><input type='radio' name='".h($A)."' value='".h($t)."'".($t==$W?" checked":"").">".h($V)."</label>";return$I;}function
confirm($Oa=""){return" onclick=\"return confirm('".'Are you sure?'.($Oa?" (' + $Oa + ')":"")."');\"";}function
print_fieldset($q,$tc,$oe=false,$Nc=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($Nc)."return !toggle('fieldset-$q');\">$tc</a></legend><div id='fieldset-$q'".($oe?"":" class='hidden'").">\n";}function
bold($ya){return($ya?" class='active'":"");}function
odd($I=' class="odd"'){static$p=0;if(!$I)$p=-1;return($p++%2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($t,$V=null){static$Fb=true;if($Fb)echo"{";if($t!=""){echo($Fb?"":",")."\n\t\"".addcslashes($t,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$Fb=false;}else{echo"\n}\n";$Fb=true;}}function
ini_bool($gc){$V=ini_get($gc);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
q($O){global$g;return$g->quote($O);}function
get_vals($G,$e=0){global$g;$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$e];}return$I;}function
get_key_vals($G,$h=null){global$g;if(!is_object($h))$h=$g;$I=array();$H=$h->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[$J[0]]=$J[1];}return$I;}function
get_rows($G,$h=null,$k="<p class='error'>"){global$g;$Ma=(is_object($h)?$h:$g);$I=array();$H=$Ma->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$I;}function
unique_array($J,$s){foreach($s
as$r){if(ereg("PRIMARY|UNIQUE",$r["type"])){$I=array();foreach($r["columns"]as$t){if(!isset($J[$t]))continue
2;$I[$t]=$J[$t];}return$I;}}}function
where($X,$m=array()){global$lc;$I=array();$Qb='(^[\w\(]+'.str_replace("_",".*",preg_quote(idf_escape("_"))).'\)+$)';foreach((array)$X["where"]as$t=>$V){$t=bracket_escape($t,1);$I[]=(preg_match($Qb,$t)?$t:idf_escape($t)).(($lc=="sql"&&ereg('\\.',$V))||$lc=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$t],exact_value($V)));}foreach((array)$X["null"]as$t)$I[]=idf_escape($t)." IS NULL";return
implode(" AND ",$I);}function
where_check($V,$m=array()){parse_str($V,$Aa);remove_slashes(array(&$Aa));return
where($Aa,$m);}function
where_link($p,$e,$W,$Pc="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($W!==null?$Pc:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($W);}function
convert_fields($f,$m,$L=array()){$I="";foreach($f
as$t=>$V){if($L&&!in_array(idf_escape($t),$L))continue;$ma=convert_field($m[$t]);if($ma)$I.=", $ma AS ".idf_escape($t);}return$I;}function
cookie($A,$W){global$aa;$Wc=array($A,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Wc[]=true;return
call_user_func_array('setcookie',$Wc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($t){return$_SESSION[$t][DRIVER][SERVER][$_GET["username"]];}function
set_session($t,$V){$_SESSION[$t][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($db,$M,$T,$i=null){global$eb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($eb))."|username|".($i!==null?"db|":"").session_name()),$x);return"$x[1]?".(sid()?SID."&":"").($db!="server"||$M!=""?urlencode($db)."=".urlencode($M)."&":"")."username=".urlencode($T).($i!=""?"&db=".urlencode($i):"").($x[2]?"&$x[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($w,$z=null){if($z!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($w!==null?$w:$_SERVER["REQUEST_URI"]))][]=$z;}if($w!==null){if($w=="")$w=".";header("Location: $w");exit;}}function
query_redirect($G,$w,$z,$kd=true,$wb=true,$zb=false){global$g,$k,$b;$Qd="";if($wb){$Bd=microtime();$zb=!$g->query($G);$Qd="; -- ".format_time($Bd,microtime());}$Ad="";if($G)$Ad=$b->messageQuery($G.$Qd);if($zb){$k=error().$Ad;return
false;}if($kd)redirect($w,$z.$Ad);return
true;}function
queries($G=null){global$g;static$hd=array();if($G===null)return
implode("\n",$hd);$Bd=microtime();$I=$g->query($G);$hd[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G)."; -- ".format_time($Bd,microtime());return$I;}function
apply_queries($G,$Ld,$sb='table'){foreach($Ld
as$Q){if(!queries("$G ".$sb($Q)))return
false;}return
true;}function
queries_redirect($w,$z,$kd){return
query_redirect(queries(),$w,$z,$kd,false,!$kd);}function
format_time($Bd,$ob){return
sprintf('%.3f s',max(0,array_sum(explode(" ",$ob))-array_sum(explode(" ",$Bd))));}function
remove_from_uri($Vc=""){return
substr(preg_replace("~(?<=[?&])($Vc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$Sa){return" ".($D==$Sa?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($t,$Va=false){$Bb=$_FILES[$t];if(!$Bb)return
null;foreach($Bb
as$t=>$V)$Bb[$t]=(array)$V;$I='';foreach($Bb["error"]as$t=>$k){if($k)return$k;$A=$Bb["name"][$t];$Vd=$Bb["tmp_name"][$t];$Na=file_get_contents($Va&&ereg('\\.gz$',$A)?"compress.zlib://$Vd":$Vd);if($Va){$Bd=substr($Na,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Bd,$ld))$Na=iconv("utf-16","utf-8",$Na);elseif($Bd=="\xEF\xBB\xBF")$Na=substr($Na,3);}$I.=$Na."\n\n";}return$I;}function
upload_error($k){$_c=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Unable to upload a file.'.($_c?" ".sprintf('Maximum allowed file size is %sB.',$_c):""):'File does not exist.');}function
repeat_pattern($F,$uc){return
str_repeat("$F{0,65535}",$uc/65535)."$F{0,".($uc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($O,$uc=80,$Hd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$uc).")($)?)u",$O,$x))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$uc).")($)?)",$O,$x);return
h($x[1]).$Hd.(isset($x[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($ed,$ec=array()){while(list($t,$V)=each($ed)){if(is_array($V)){foreach($V
as$mc=>$U)$ed[$t."[$mc]"]=$U;}elseif(!in_array($t,$ec))echo'<input type="hidden" name="'.h($t).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$Kb){foreach($Kb["source"]as$V)$I[$V][]=$Kb;}return$I;}function
enum_input($Zd,$c,$l,$W,$nb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$y);$I=($nb!==null?"<label><input type='$Zd'$c value='$nb'".((is_array($W)?in_array($nb,$W):$W===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($y[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?$W==$p+1:(is_array($W)?in_array($p+1,$W):$W===$V));$I.=" <label><input type='$Zd'$c value='".($p+1)."'".($Ba?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$I;}function
input($l,$W,$o){global$g,$be,$b,$lc;$A=h(bracket_escape($l["field"]));echo"<td class='function'>";$od=($lc=="mssql"&&$l["auto_increment"]);if($od&&!$_POST["save"])$o=null;$Rb=(isset($_GET["select"])||$od?array("orig"=>'original'):array())+$b->editFunctions($l);$c=" name='fields[$A]'";if($l["type"]=="enum")echo
nbsp($Rb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Fb=0;foreach($Rb
as$t=>$V){if($t===""||!$V)break;$Fb++;}$Mc=($Fb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Fb > f.selectedIndex) f.selectedIndex = $Fb;\"":"");$c.=$Mc;echo(count($Rb)>1?html_select("function[$A]",$Rb,$o===null||in_array($o,$Rb)||isset($Rb[$o])?$o:"","functionChange(this);"):nbsp(reset($Rb))).'<td>';$ic=$b->editInput($_GET["edit"],$l,$c,$W);if($ic!="")echo$ic;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$y);foreach($y[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ba=(is_int($W)?($W>>$p)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$A][$p]' value='".(1<<$p)."'".($Ba?' checked':'')."$Mc>".h($b->editVal($V,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$A'$Mc>";elseif(($Nd=ereg('text|lob',$l["type"]))||ereg("\n",$W)){if($Nd&&$lc!="sqlite")$c.=" cols='50' rows='12'";else{$K=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$K'".($K==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}else{$Bc=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$x)?((ereg("binary",$l["type"])?2:1)*$x[1]+($x[3]?1:0)+($x[2]&&!$l["unsigned"]?1:0)):($be[$l["type"]]?$be[$l["type"]]+($l["unsigned"]?0:1):0));if($g->server_info>=5.6&&ereg('time',$l["type"]))$Bc+=7;echo"<input".(ereg('int',$l["type"])?" type='number'":"")." value='".h($W)."'".($Bc?" maxlength='$Bc'":"").(ereg('char|binary',$l["type"])&&$Bc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$cc=bracket_escape($l["field"]);$o=$_POST["function"][$cc];$W=$_POST["fields"][$cc];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$Bb=get_file("fields-$cc");if(!is_string($Bb))return
false;return
q($Bb);}return$b->processInput($l,$W,$o);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Nb=false;foreach(table_status('',true)as$Q=>$R){$A=$b->tableName($R);if(isset($R["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$H||$H->fetch_row()){if(!$Nb){echo"<ul>\n";$Nb=true;}echo"<li>".($H?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n":"$A: <span class='error'>".error()."</span>\n");}}}echo($Nb?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($bc,$Ec=false){global$b;$I=$b->dumpHeaders($bc,$Ec);$Uc=$_POST["output"];if($Uc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($bc).".$I".($Uc!="file"&&!ereg('[^0-9a-z]',$Uc)?".$Uc":""));session_write_close();ob_flush();flush();return$I;}function
dump_csv($J){foreach($J
as$t=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$J[$t]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($o,$e){return($o?($o=="unixepoch"?"DATETIME($e, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$e)"):$e);}function
password_file(){$bb=ini_get("upload_tmp_dir");if(!$bb){if(function_exists('sys_get_temp_dir'))$bb=sys_get_temp_dir();else{$Cb=@tempnam("","");if(!$Cb)return
false;$bb=dirname($Cb);unlink($Cb);}}$Cb="$bb/adminer.key";$I=@file_get_contents($Cb);if($I)return$I;$Ob=@fopen($Cb,"w");if($Ob){$I=md5(uniqid(mt_rand(),true));fwrite($Ob,$I);fclose($Ob);}return$I;}function
is_mail($kb){$na='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$na+(\\.$na+)*@($cb?\\.)+$cb";return
preg_match("(^$F(,\\s*$F)*\$)i",$kb);}function
is_url($O){$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cb?\\.)+$cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$x)?strtolower($x[1]):"");}function
is_shortable($l){return
ereg('char|text|lob|geometry|point|linestring|polygon',$l["type"]);}function
slow_query($G){global$b,$S;$i=$b->database();if(support("kill")&&is_object($h=connect())&&($i==""||$h->select_db($i))){$oc=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$S,'&kill=',$oc,'\');
}, ',1000*$b->queryTimeout(),');
</script>
';}else$h=null;ob_flush();flush();$I=@get_key_vals($G,$h);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($I);}function
lzw_decompress($wa){$ab=256;$xa=8;$Ea=array();$pd=0;$qd=0;for($p=0;$p<strlen($wa);$p++){$pd=($pd<<8)+ord($wa[$p]);$qd+=8;if($qd>=$xa){$qd-=$xa;$Ea[]=$pd>>$qd;$pd&=(1<<$qd)-1;$ab++;if($ab>>$xa)$xa++;}}$Za=range("\0","\xFF");$I="";foreach($Ea
as$p=>$Da){$jb=$Za[$Da];if(!isset($jb))$jb=$se.$se[0];$I.=$jb;if($p)$Za[]=$se.$jb[0];$se=$jb;}return$I;}global$b,$g,$eb,$hb,$qb,$k,$Rb,$Ub,$aa,$hc,$lc,$ba,$qc,$Lc,$Yc,$Ed,$S,$Yd,$be,$ie,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Wc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Wc[]=true;call_user_func_array('session_set_cookie_params',$Wc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Eb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Xd,$Ic=null){if(is_array($Xd)){$ad=($Ic==1?0:1);$Xd=$Xd[$ad];}$Xd=str_replace("%d","%s",$Xd);$Ic=number_format($Ic,0,".",',');return
sprintf($Xd,$Ic);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$ad=array_search("SQL",$b->operators);if($ad!==false)unset($b->operators[$ad]);}function
dsn($fb,$T,$E,$vb='auth_error'){set_exception_handler($vb);parent::__construct($fb,$T,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$ce=false){$H=parent::query($G);$this->error="";if(!$H){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;if(!$H)return
false;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$l=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$eb=array();$eb=array("server"=>"MySQL")+$eb;if(!defined("DRIVER")){$bd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$T,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Zb,$Zc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Zb:ini_get("mysqli.default_host")),($M.$T!=""?$T:ini_get("mysqli.default_user")),($M.$T.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Zc)?$Zc:ini_get("mysqli.default_port")),(!is_numeric($Zc)?$Zc:null));if($I){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$I;}function
result($G,$l=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$l];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($M,$T,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$T"!=""?$T:ini_get("mysql.default_user")),("$M$T$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($Ta){return
mysql_select_db($Ta,$this->_link);}function
query($G,$ce=false){$H=@($ce?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));$this->error="";if(!$H){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$l=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$T,$E){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$T,$E);$this->query("SET NAMES utf8");return
true;}function
select_db($Ta){return$this->query("USE ".idf_escape($Ta));}function
query($G,$ce=false){$this->setAttribute(1000,!$ce);return
parent::query($G,$ce);}}}function
idf_escape($cc){return"`".str_replace("`","``",$cc)."`";}function
table($cc){return
idf_escape($cc);}function
connect(){global$b;$g=new
Min_DB;$Ra=$b->credentials();if($g->connect($Ra[0],$Ra[1],$Ra[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$I=$g->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($sd=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$sd;return$I;}function
get_databases($Gb){global$g;$I=get_session("dbs");if($I===null){$G=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$I=($Gb?slow_query($G):get_vals($G));restart_session();set_session("dbs",$I);stop_session();}return$I;}function
limit($G,$X,$u,$Jc=0,$xd=" "){return" $G$X".($u!==null?$xd."LIMIT $u".($Jc?" OFFSET $Jc":""):"");}function
limit1($G,$X){return
limit($G,$X,1);}function
db_collation($i,$Ha){global$g;$I=null;$Pa=$g->result("SHOW CREATE DATABASE ".idf_escape($i),1);if(preg_match('~ COLLATE ([^ ]+)~',$Pa,$x))$I=$x[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Pa,$x))$I=$Ha[$x[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Ua){$I=array();foreach($Ua
as$i)$I[$i]=count(get_vals("SHOW TABLES IN ".idf_escape($i)));return$I;}function
table_status($A="",$_b=false){global$g;$I=array();foreach(get_rows($_b&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()".($A!=""?" AND TABLE_NAME = ".q($A):""):"SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_\\")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Engine"]))$J["Comment"]="";if($A!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return!isset($R["Engine"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$x);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$x[1],"length"=>$x[2],"unsigned"=>ltrim($x[3].$x[4]),"default"=>($J["Default"]!=""||ereg("char|set",$x[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$x)?$x[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($Q,$h=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($Q){global$g,$Lc;static$F='`(?:[^`]|``)+`';$I=array();$Qa=$g->result("SHOW CREATE TABLE ".table($Q),1);if($Qa){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($Lc))?(?: ON UPDATE ($Lc))?~",$Qa,$y,PREG_SET_ORDER);foreach($y
as$x){preg_match_all("~$F~",$x[2],$_d);preg_match_all("~$F~",$x[5],$Md);$I[idf_unescape($x[1])]=array("db"=>idf_unescape($x[4]!=""?$x[3]:$x[4]),"table"=>idf_unescape($x[4]!=""?$x[4]:$x[3]),"source"=>array_map('idf_unescape',$_d[0]),"target"=>array_map('idf_unescape',$Md[0]),"on_delete"=>($x[6]?$x[6]:"RESTRICT"),"on_update"=>($x[7]?$x[7]:"RESTRICT"),);}}return$I;}function
view($A){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$t=>$V)asort($I[$t]);return$I;}function
information_schema($i){global$g;return($g->server_info>=5&&$i=="information_schema")||($g->server_info>=5.5&&$i=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$ld))return$ld[1]-1;}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($i,$Ga){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($i).($Ga?" COLLATE ".q($Ga):""));}function
drop_databases($Ua){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ua,'idf_escape');}function
rename_database($A,$Ga){if(create_database($A,$Ga)){$md=array();foreach(tables_list()as$Q=>$Zd)$md[]=table($Q)." TO ".idf_escape($A).".".table($Q);if(!$md||queries("RENAME TABLE ".implode(", ",$md))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$qa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$r){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$r["columns"],true)){$qa="";break;}if($r["type"]=="PRIMARY")$qa=" UNIQUE";}}return" AUTO_INCREMENT$qa";}function
alter_table($Q,$A,$m,$Hb,$Ka,$pb,$Ga,$pa,$Xc){$la=array();foreach($m
as$l)$la[]=($l[1]?($Q!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($Q!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$la=array_merge($la,$Hb);$Cd="COMMENT=".q($Ka).($pb?" ENGINE=".q($pb):"").($Ga?" COLLATE ".q($Ga):"").($pa!=""?" AUTO_INCREMENT=$pa":"").$Xc;if($Q=="")return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$la)."\n) $Cd");if($Q!=$A)$la[]="RENAME TO ".table($A);$la[]=$Cd;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$la));}function
alter_indexes($Q,$la){foreach($la
as$t=>$V)$la[$t]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$la));}function
truncate_tables($Ld){return
apply_queries("TRUNCATE TABLE",$Ld);}function
drop_views($ne){return
queries("DROP VIEW ".implode(", ",array_map('table',$ne)));}function
drop_tables($Ld){return
queries("DROP TABLE ".implode(", ",array_map('table',$Ld)));}function
move_tables($Ld,$ne,$Md){$md=array();foreach(array_merge($Ld,$ne)as$Q)$md[]=table($Q)." TO ".idf_escape($Md).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$md));}function
copy_tables($Ld,$ne,$Md){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Ld
as$Q){$A=($Md==DB?table("copy_$Q"):idf_escape($Md).".".table($Q));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($Q))||!queries("INSERT INTO $A SELECT * FROM ".table($Q)))return
false;}foreach($ne
as$Q){$A=($Md==DB?table("copy_$Q"):idf_escape($Md).".".table($Q));$me=view($Q);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $me[select]"))return
false;}return
true;}function
trigger($A){if($A=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$Zd){global$g,$qb,$hc,$be;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$ae="((".implode("|",array_merge(array_keys($be),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$qb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($Zd=="FUNCTION"?"":$hc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ae";$Pa=$g->result("SHOW CREATE $Zd ".idf_escape($A),2);preg_match("~\\(((?:$F\\s*,?)*)\\)\\s*".($Zd=="FUNCTION"?"RETURNS\\s+$ae\\s+":"")."(.*)~is",$Pa,$x);$m=array();preg_match_all("~$F\\s*,?~is",$x[1],$y,PREG_SET_ORDER);foreach($y
as$Vc){$A=str_replace("``","`",$Vc[2]).$Vc[3];$m[]=array("field"=>$A,"type"=>strtolower($Vc[5]),"length"=>preg_replace_callback("~$qb~s",'normalize_enum',$Vc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Vc[8] $Vc[7]"))),"null"=>1,"full_type"=>$Vc[4],"inout"=>strtoupper($Vc[1]),"collation"=>strtolower($Vc[9]),);}if($Zd!="FUNCTION")return
array("fields"=>$m,"definition"=>$x[11]);return
array("fields"=>$m,"returns"=>array("type"=>$x[12],"length"=>$x[13],"unsigned"=>$x[15],"collation"=>$x[16]),"definition"=>$x[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$N){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($Q,$N,$cd){foreach($N
as$t=>$V)$N[$t]="$t = $V";$je=implode(", ",$N);return
queries("INSERT INTO ".table($Q)." SET $je ON DUPLICATE KEY UPDATE $je");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$G){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$G);}function
found_rows($R,$X){return($X||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($td){return
true;}function
create_sql($Q,$pa){global$g;$I=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$pa)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Ta){return"USE ".idf_escape($Ta);}function
trigger_sql($Q,$Fd){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$J)$I.="\n".($Fd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(ereg("binary",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(ereg("geometry|point|linestring|polygon",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$I){if(ereg("binary",$l["type"]))$I="UNHEX($I)";if($l["type"]=="bit")return"CONV($I, 2, 10) + 0";if(ereg("geometry|point|linestring|polygon",$l["type"]))$I="GeomFromText($I)";return$I;}function
support($Ab){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$Ab);}$lc="sql";$be=array();$Ed=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometry'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$t=>$V){$be+=$V;$Ed[$t]=array_keys($V);}$ie=array("unsigned","zerofill","unsigned zerofill");$Qc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Rb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Ub=array("avg","count","count distinct","group_concat","max","min","sum");$hb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.7.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$Ua=$this->databases(false);return(!$Ua?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Ua[(information_schema($Ua[0])?1:0)]);}function
databases($Gb=true){return
get_databases($Gb);}function
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
login($wc,$E){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Jd){return
h($Jd["Comment"]!=""?$Jd["Comment"]:$Jd["Name"]);}function
fieldName($l,$B=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Jd,$N=""){$a=$Jd["Name"];if($N!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$N).'">'.'New item'."</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Id){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$J)$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];foreach($I
as$t=>$V){$A=$this->tableName(table_status($t,true));if($A!=""){$ud=preg_quote($Id);$xd="(:|\\s*-)?\\s+";$I[$t]["name"]=(preg_match("(^$ud$xd(.+)|^(.+?)$xd$ud\$)iu",$A,$x)?$x[2].$x[3]:$A);}else
unset($I[$t]);}return$I;}function
backwardKeysPrint($ta,$J){foreach($ta
as$Q=>$sa){foreach($sa["keys"]as$Ia){$v=ME.'select='.urlencode($Q);$p=0;foreach($Ia
as$e=>$V)$v.=where_link($p++,$e,$J[$V]);echo"<a href='".h($v)."'>".h($sa["name"])."</a>";$v=ME.'edit='.urlencode($Q);foreach($Ia
as$e=>$V)$v.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($J[$V]);echo"<a href='".h($v)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$l){if(ereg("varchar|character varying",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($K,$Jb){$I=$K;foreach($K[0]as$t=>$V){if(list($Q,$q,$A)=$this->_foreignColumn($Jb,$t)){$dc=array();foreach($K
as$J)$dc[$J[$t]]=exact_value($J[$t]);$Ya=$this->_values[$Q];if(!$Ya)$Ya=get_key_vals("SELECT $q, $A FROM ".table($Q)." WHERE $q IN (".implode(", ",$dc).")");foreach($K
as$_=>$J){if(isset($J[$t]))$I[$_][$t]=(string)$Ya[$J[$t]];}}}return$I;}function
selectLink($V,$l){}function
selectVal($V,$v,$l){$I=($V===null?"&nbsp;":$V);$v=h($v);if(ereg('blob|bytea',$l["type"])&&!is_utf8($V)){$I=lang(array('%d byte','%d bytes'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$I="<img src='$v' alt='$I'>";}if(like_bool($l)&&$I!="&nbsp;")$I=($V?'yes':'no');if($v)$I="<a href='$v'>$I</a>";if(!$v&&!like_bool($l)&&ereg('int|float|double|decimal',$l["type"]))$I="<div class='number'>$I</div>";elseif(ereg('date',$l["type"]))$I="<div class='datetime'>$I</div>";return$I;}function
editVal($V,$l){if(ereg('date|timestamp',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$V);return$V;}function
selectColumnsPrint($L,$f){}function
selectSearchPrint($X,$f,$s){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Search'."</legend><div>\n";$nc=array();foreach($X
as$t=>$V)$nc[$V["col"]]=$t;$p=0;$m=fields($_GET["select"]);foreach($f
as$A=>$Xa){$l=$m[$A];if(ereg("enum",$l["type"])||like_bool($l)){$t=$nc[$A];$p--;echo"<div>".h($Xa)."<input type='hidden' name='where[$p][col]' value='".h($A)."'>:",(like_bool($l)?" <select name='where[$p][val]'>".optionlist(array(""=>"",'no','yes'),$X[$t]["val"],true)."</select>":enum_input("checkbox"," name='where[$p][val][]'",$l,(array)$X[$t]["val"],($l["null"]?0:null))),"</div>\n";unset($f[$A]);}elseif(is_array($Rc=$this->_foreignKeyOptions($_GET["select"],$A))){if($m[$A]["null"])$Rc[0]='('.'empty'.')';$t=$nc[$A];$p--;echo"<div>".h($Xa)."<input type='hidden' name='where[$p][col]' value='".h($A)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($Rc,$X[$t]["val"],true)."</select></div>\n";unset($f[$A]);}}$p=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".'anywhere'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$p][val]' value='".h($V["val"])."' onsearch='selectSearchSearch(this);'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'anywhere'.")".optionlist($f,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$p][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($B,$f,$s){$Tc=array();foreach($s
as$t=>$r){$B=array();foreach($r["columns"]as$V)$B[]=$f[$V];if(count(array_filter($B,'strlen'))>1&&$t!="PRIMARY")$Tc[$t]=implode(", ",$B);}if($Tc){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Tc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($u){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$u),"</div></fieldset>\n";}function
selectLengthPrint($Od){}function
selectActionPrint($s){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($lb,$f){if($lb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($lb)==1?'<input type="hidden" name="email_field" value="'.h(key($lb)).'">':html_select("email_field",$lb)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$s){return
array(array(),array());}function
selectSearchProcess($m,$s){$I=array();foreach((array)$_GET["where"]as$t=>$X){$Fa=$X["col"];$Oc=$X["op"];$V=$X["val"];if(($t<0?"":$Fa).$V!=""){$La=array();foreach(($Fa!=""?array($Fa=>$m[$Fa]):$m)as$A=>$l){if($Fa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$l["type"])){$A=idf_escape($A);if($Fa!=""&&$l["type"]=="enum")$La[]=(in_array(0,$V)?"$A IS NULL OR ":"")."$A IN (".implode(", ",array_map('intval',$V)).")";else{$Pd=ereg('char|text|enum|set',$l["type"]);$W=$this->processInput($l,(!$Oc&&$Pd&&ereg('^[^%]+$',$V)?"%$V%":$V));$La[]=$A.($W=="NULL"?" IS".($Oc==">="?" NOT":"")." $W":(in_array($Oc,$this->operators)||$Oc=="="?" $Oc $W":($Pd?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($t<0&&$V=="0")$La[]="$A IS NULL";}}}$I[]=($La?"(".implode(" OR ",$La).")":"0");}}return$I;}function
selectOrderProcess($m,$s){$fc=$_GET["index_order"];if($fc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($fc!=""?array($s[$fc]):$s)as$r){if($fc!=""||$r["type"]=="INDEX"){$Xa=false;foreach($r["columns"]as$V){if(ereg('date|timestamp',$m[$V]["type"])){$Xa=true;break;}}$I=array();foreach($r["columns"]as$V)$I[]=idf_escape($V).($Xa?" DESC":"");return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Jb){if($_POST["email_append"])return
true;if($_POST["email"]){$wd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Gd=$_POST["email_subject"];$z=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Gd.$z",$y);$K=get_rows("SELECT DISTINCT $l".($y[1]?", ".implode(", ",array_map('idf_escape',array_unique($y[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($K,$Jb)as$J){$nd=array('{\\'=>'{');foreach($y[1]as$V)$nd['{$'."$V}"]=$this->editVal($J[$V],$m[$V]);$kb=$J[$_POST["email_field"]];if(is_mail($kb)&&send_mail($kb,strtr($Gd,$nd),strtr($z,$nd),$_POST["email_from"],$_FILES["email_files"]))$wd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$wd));}return
false;}function
selectQueryBuild($L,$X,$Sb,$B,$u,$D){return"";}function
messageQuery($G){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($l){$I=array();if($l["null"]&&ereg('blob',$l["type"]))$I["NULL"]='empty';$I[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(ereg('date|time',$l["type"]))$I["now"]='now';if(eregi('_(md5|sha1)$',$l["field"],$x))$I[]=strtolower($x[1]);return$I;}function
editInput($Q,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Rc=$this->_foreignKeyOptions($Q,$l["field"],$W);if($Rc!==null)return(is_array($Rc)?"<select$c>".optionlist($Rc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Rc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$Yb="";if(ereg('time',$l["type"]))$Yb='HH:MM:SS';if(ereg('date|timestamp',$l["type"]))$Yb='[yyyy]-mm-dd'.($Yb?" [$Yb]":"");if($Yb)return"<input value='".h($W)."'$c> ($Yb)";if(eregi('_(md5|sha1)$',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$I=$W;if(ereg('date|timestamp',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$W,$x))$I=($x["p1"]!=""?$x["p1"]:($x["p2"]!=""?($x["p2"]<70?20:19).$x["p2"]:gmdate("Y")))."-$x[p3]$x[p4]-$x[p5]$x[p6]".end($x);$I=($l["type"]=="bit"&&ereg('^[0-9]+$',$W)?$I:q($I));if($W==""&&like_bool($l))$I="0";elseif($W==""&&($l["null"]||!ereg('char|text',$l["type"])))$I="NULL";elseif(ereg('^(md5|sha1)$',$o))$I="$o($I)";return
unconvert_field($l,$I);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($i){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$Fd,$G){global$g;$H=$g->query($G,1);if($H){while($J=$H->fetch_assoc()){if($Fd=="table"){dump_csv(array_keys($J));$Fd="INSERT";}dump_csv($J);}}}function
dumpFilename($bc){return
friendly_url($bc);}function
dumpHeaders($bc,$Ec=false){$xb="csv";header("Content-Type: text/csv; charset=utf-8");return$xb;}function
homepage(){return
true;}function
navigation($Dc){global$ca,$S;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Dc=="auth"){$Fb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$E){if($E!==null){if($Fb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Fb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'empty'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="',$S,'">
</p>
</form>
';$this->databasesPrint($Dc);if($Dc!="db"&&$Dc!="ns"){$R=table_status('',true);if(!$R)echo"<p class='message'>".'No tables.'."\n";else$this->tablesPrint($R);}}}function
databasesPrint($Dc){}function
tablesPrint($Ld){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Ld
as$J){$A=$this->tableName($J);if(isset($J["Engine"])&&$A!="")echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".'Select data'."'>$A</a><br>\n";}}function
_foreignColumn($Jb,$e){foreach((array)$Jb[$e]as$Ib){if(count($Ib["source"])==1){$A=$this->rowDescription($Ib["table"]);if($A!=""){$q=idf_escape($Ib["target"][0]);return
array($Ib["table"],$q,$A);}}}}function
_foreignKeyOptions($Q,$e,$W=null){global$g;if(list($Md,$q,$A)=$this->_foreignColumn(column_foreign_keys($Q),$e)){$I=&$this->_values[$Md];if($I===null){$R=table_status($Md);$I=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $q, $A FROM ".table($Md)." ORDER BY 2"));}if(!$I&&$W!==null)return$g->result("SELECT $A FROM ".table($Md)." WHERE $q = ".q($W));return$I;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Rd,$k="",$_a=array(),$Sd=""){global$ba,$b,$g,$eb;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Td=$Rd.($Sd!=""?": ".h($Sd):"");$Ud=strip_tags($Td.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Ud,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.7.0",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.7.0",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.0",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.7.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($_a!==null){$v=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($v?$v:".").'">'.$eb[DRIVER].'</a> &raquo; ';$v=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):'Server');if($_a===false)echo"$M\n";else{echo"<a href='".($v?h($v):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_a)))echo'<a href="'.h($v."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($_a)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($_a
as$t=>$V){$Xa=(is_array($V)?$V[1]:$V);if($Xa!="")echo'<a href="'.h(ME."$t=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Xa).'</a> &raquo; ';}}echo"$Rd\n";}}echo"<h2>$Td</h2>\n";restart_session();$ke=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Cc=$_SESSION["messages"][$ke];if($Cc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Cc)."</div>\n";unset($_SESSION["messages"][$ke]);}$Ua=&get_session("dbs");if(DB!=""&&$Ua&&!in_array(DB,$Ua,true))$Ua=null;stop_session();if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($Dc=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($Dc);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($_){while($_>=2147483648)$_-=4294967296;while($_<=-2147483649)$_+=4294967296;return(int)$_;}function
long2str($U,$pe){$sd='';foreach($U
as$V)$sd.=pack('V',$V);if($pe)return
substr($sd,0,end($U));return$sd;}function
str2long($sd,$pe){$U=array_values(unpack('V*',str_pad($sd,4*ceil(strlen($sd)/4),"\0")));if($pe)$U[]=strlen($sd);return$U;}function
xxtea_mx($Z,$Y,$P,$mc){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($P^$Y)+($mc^$Z));}function
encrypt_string($Dd,$t){if($Dd=="")return"";$t=array_values(unpack("V*",pack("H*",md5($t))));$U=str2long($Dd,true);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$gd=floor(6+52/($_+1));$P=0;while($gd-->0){$P=int32($P+0x9E3779B9);$gb=$P>>2&3;for($C=0;$C<$_;$C++){$Y=$U[$C+1];$Fc=xxtea_mx($Z,$Y,$P,$t[$C&3^$gb]);$Z=int32($U[$C]+$Fc);$U[$C]=$Z;}$Y=$U[0];$Fc=xxtea_mx($Z,$Y,$P,$t[$C&3^$gb]);$Z=int32($U[$_]+$Fc);$U[$_]=$Z;}return
long2str($U,false);}function
decrypt_string($Dd,$t){if($Dd=="")return"";$t=array_values(unpack("V*",pack("H*",md5($t))));$U=str2long($Dd,false);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$gd=floor(6+52/($_+1));$P=int32($gd*0x9E3779B9);while($P){$gb=$P>>2&3;for($C=$_;$C>0;$C--){$Z=$U[$C-1];$Fc=xxtea_mx($Z,$Y,$P,$t[$C&3^$gb]);$Y=int32($U[$C]-$Fc);$U[$C]=$Y;}$Z=$U[$_];$Fc=xxtea_mx($Z,$Y,$P,$t[$C&3^$gb]);$Y=int32($U[0]-$Fc);$U[0]=$Y;$P=int32($P-0x9E3779B9);}return
long2str($U,true);}$g='';$S=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Yc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($t)=explode(":",$V);$Yc[$t]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];$_SESSION["db"][$d["driver"]][$d["server"]][$d["username"]][$d["db"]]=true;if($d["permanent"]){$t=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"])."-".base64_encode($d["db"]);$dd=$b->permanentLogin();$Yc[$t]="$t:".base64_encode($dd?encrypt_string($d["password"],$dd):"");cookie("adminer_permanent",implode(" ",$Yc));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($S&&$_POST["token"]!=$S){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$t)set_session($t,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($Yc&&!$_SESSION["pwds"]){session_regenerate_id();$dd=$b->permanentLogin();foreach($Yc
as$t=>$V){list(,$Ca)=explode(":",$V);list($db,$M,$T,$i)=array_map('base64_decode',explode("-",$t));$_SESSION["pwds"][$db][$M][$T]=decrypt_string(base64_decode($Ca),$dd);$_SESSION["db"][$db][$M][$T][$i]=true;}}function
unset_permanent(){global$Yc;foreach($Yc
as$t=>$V){list($db,$M,$T,$i)=array_map('base64_decode',explode("-",$t));if($db==DRIVER&&$M==SERVER&&$T==$_GET["username"]&&$i==DB)unset($Yc[$t]);}cookie("adminer_permanent",implode(" ",$Yc));}function
auth_error($ub=null){global$g,$b,$S;$zd=session_name();$k="";if(!$_COOKIE[$zd]&&$_GET[$zd]&&ini_bool("session.use_only_cookies"))$k='Session support must be enabled.';elseif(isset($_GET["username"])){if(($_COOKIE[$zd]||$_GET[$zd])&&!$S)$k='Session expired, please login again.';else{$E=&get_session("pwds");if($E!==null){$k=h($ub?$ub->getMessage():(is_string($g)?$g:'Invalid credentials.'));$E=null;}unset_permanent();}}page_header('Login',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$bd)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$S=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$S;$k='';if($_POST){if($_POST["token"]!=$S){$gc="max_input_vars";$Ac=ini_get($gc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$t){$V=ini_get($t);if($V&&(!$Ac||$V<$Ac)){$gc=$t;$Ac=$V;}}}$k=(!$_POST["token"]&&$Ac?sprintf('Maximum number of allowed fields exceeded. Please increase %s.',"'$gc'"):'Invalid CSRF token. Send the form again.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST")$k=sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.',"'post_max_size'");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$g->select_db($b->database());function
email_header($Wb){return"=?UTF-8?B?".base64_encode($Wb)."?=";}function
send_mail($kb,$Gd,$z,$Pb="",$Db=array()){$j=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$z=str_replace("\n",$j,wordwrap(str_replace("\r","","$z\n")));$za=uniqid("boundary");$oa="";foreach((array)$Db["error"]as$t=>$V){if(!$V)$oa.="--$za$j"."Content-Type: ".str_replace("\n","",$Db["type"][$t]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Db["name"][$t])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Db["tmp_name"][$t])),76,$j).$j;}$va="";$Xb="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($oa){$oa.="--$za--$j";$va="--$za$j$Xb$j$j";$Xb="Content-Type: multipart/mixed; boundary=\"$za\"";}$Xb.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Pb?$j."From: ".str_replace("\n","",$Pb):"");return
mail($kb,email_header($Gd),$va.$z.$oa,$Xb);}function
like_bool($l){return
ereg("bool|(tinyint|bit)\\(1\\)",$l["full_type"]);}$Lc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$eb[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$je=(isset($_GET["select"])?$_POST["edit"]:$X);foreach($m
as$A=>$l){if(!isset($l["privileges"][$je?"update":"insert"])||$b->fieldName($l)=="")unset($m[$A]);}if($_POST&&!$k&&!isset($_GET["select"])){$w=$_POST["referer"];if($_POST["insert"])$w=($je?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$w))$w=ME."select=".urlencode($a);$s=indexes($a);$ee=unique_array($_GET["where"],$s);$id="\nWHERE $X";if(isset($_POST["delete"])){$G="FROM ".table($a);query_redirect("DELETE".($ee?" $G$id":limit1($G,$id)),$w,'Item has been deleted.');}else{$N=array();foreach($m
as$A=>$l){$V=process_input($l);if($V!==false&&$V!==null)$N[idf_escape($A)]=($je?"\n".idf_escape($A)." = $V":$V);}if($je){if(!$N)redirect($w);$G=table($a)." SET".implode(",",$N);query_redirect("UPDATE".($ee?" $G$id":limit1($G,$id)),$w,'Item has been updated.');}else{$H=insert_into($a,$N);$sc=($H?last_id():0);queries_redirect($w,sprintf('Item%s has been inserted.',($sc?" $sc":"")),$H);}}}$Kd=$b->tableName(table_status($a,true));page_header(($je?'Edit':'Insert'),$k,array("select"=>array($a,$Kd)),$Kd);$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($X){$L=array();foreach($m
as$A=>$l){if(isset($l["privileges"]["select"])){$ma=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$ma="''";if($lc=="sql"&&ereg("enum|set",$l["type"]))$ma="1*".idf_escape($A);$L[]=($ma?"$ma AS ":"").idf_escape($A);}}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false)echo"<p class='error'>".'No rows.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$A=>$l){echo"<tr><th>".$b->fieldName($l);$Wa=$_GET["set"][bracket_escape($A)];if($Wa===null){$Wa=$l["default"];if($l["type"]=="bit"&&ereg("^b'([01]*)'\$",$Wa,$ld))$Wa=$ld[1];}$W=($J!==null?($J[$A]!=""&&$lc=="sql"&&ereg("enum|set",$l["type"])?(is_array($J[$A])?array_sum($J[$A]):+$J[$A]):$J[$A]):(!$je&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$Wa)));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$A]:($je&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if(ereg("time",$l["type"])&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($je?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}echo($je?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$S,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status($a);$s=indexes($a);$m=fields($a);$Lb=column_foreign_keys($a);$Kc="";if($R["Oid"]=="t"){$Kc=($lc=="sqlite"?"rowid":"oid");$s[]=array("type"=>"PRIMARY","columns"=>array($Kc));}parse_str($_COOKIE["adminer_import"],$ha);$rd=array();$f=array();$Od=null;foreach($m
as$t=>$l){$A=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$A!=""){$f[$t]=html_entity_decode(strip_tags($A),ENT_QUOTES);if(is_shortable($l))$Od=$b->selectLengthProcess();}$rd+=$l["privileges"];}list($L,$Sb)=$b->selectColumnsProcess($f,$s);$jc=count($Sb)<count($L);$X=$b->selectSearchProcess($m,$s);$B=$b->selectOrderProcess($m,$s);$u=$b->selectLimitProcess();$Pb=($L?implode(", ",$L):"*".($Kc?", $Kc":"")).convert_fields($f,$m,$L)."\nFROM ".table($a);$Tb=($Sb&&$jc?"\nGROUP BY ".implode(", ",$Sb):"").($B?"\nORDER BY ".implode(", ",$B):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$fe=>$J){$ma=convert_field($m[key($J)]);echo$g->result("SELECT".limit($ma?$ma:idf_escape(key($J))." FROM ".table($a)," WHERE ".where_check($fe,$m).($X?" AND ".implode(" AND ",$X):"").($B?" ORDER BY ".implode(", ",$B):""),1));}exit;}if($_POST&&!$k){$re=$X;if(is_array($_POST["check"]))$re[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$re=($re?"\nWHERE ".implode(" AND ",$re):"");$cd=$he=null;foreach($s
as$r){if($r["type"]=="PRIMARY"){$cd=array_flip($r["columns"]);$he=($L?$cd:array());break;}}foreach((array)$he
as$t=>$V){if(in_array(idf_escape($t),$L))unset($he[$t]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$he===array())$G="SELECT $Pb$re$Tb";else{$de=array();foreach($_POST["check"]as$V)$de[]="(SELECT".limit($Pb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m).$Tb,1).")";$G=implode(" UNION ALL ",$de);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($X,$Lb)){if($_POST["save"]||$_POST["delete"]){$H=true;$ia=0;$G=table($a);$N=array();if(!$_POST["delete"]){foreach($f
as$A=>$V){$V=process_input($m[$A]);if($V!==null){if($_POST["clone"])$N[idf_escape($A)]=($V!==false?$V:idf_escape($A));elseif($V!==false)$N[]=idf_escape($A)." = $V";}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ja="UPDATE";if($_POST["delete"]){$Ja="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ja="INSERT";$G="INTO $G";}if($_POST["all"]||($he===array()&&$_POST["check"])||$jc){$H=queries("$Ja $G$re");$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$H=queries($Ja.limit1($G,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m)));if(!$H)break;$ia+=$g->affected_rows;}}}$z=lang(array('%d item has been affected.','%d items have been affected.'),$ia);if($_POST["clone"]&&$H&&$ia==1){$sc=last_id();if($sc)$z=sprintf('Item%s has been inserted.'," $sc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$z,$H);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+click on a value to modify it.';else{$H=true;$ia=0;foreach($_POST["val"]as$fe=>$J){$N=array();foreach($J
as$t=>$V){$t=bracket_escape($t,1);$N[]=idf_escape($t)." = ".(ereg('char|text',$m[$t]["type"])||$V!=""?$b->processInput($m[$t],$V):"NULL");}$G=table($a)." SET ".implode(", ",$N);$qe=" WHERE ".where_check($fe,$m).($X?" AND ".implode(" AND ",$X):"");$H=queries("UPDATE".($jc?" $G$qe":limit1($G,$qe)));if(!$H)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ia),$H);}}elseif(is_string($Bb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Ia=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Bb,$y);$ia=count($y[0]);begin();$xd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($y[0]as$t=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$xd]*)$xd~",$V.$xd,$yc);if(!$t&&!array_diff($yc[1],$Ia)){$Ia=$yc[1];$ia--;}else{$N=array();foreach($yc[1]as$p=>$Fa)$N[idf_escape($Ia[$p])]=($Fa==""&&$m[$Ia[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Fa))));$H=insert_update($a,$N,$cd);if(!$H)break;}}if($H)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ia),$H);queries("ROLLBACK");}else$k=upload_error($Bb);}}$Kd=$b->tableName($R);if(is_ajax())ob_start();page_header('Select'.": $Kd",$k);$N=null;if(isset($rd["insert"])){$N="";foreach((array)$_GET["where"]as$V){if(count($Lb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$N.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($R,$N);if(!$f)echo"<p class='error'>".'Unable to select the table'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$f);$b->selectSearchPrint($X,$f,$s);$b->selectOrderPrint($B,$f,$s);$b->selectLimitPrint($u);$b->selectLengthPrint($Od);$b->selectActionPrint($s);echo"</form>\n";$D=$_GET["page"];if($D=="last"){$n=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$D=floor(max(0,$n-1)/$u);}$G=$b->selectQueryBuild($L,$X,$Sb,$B,$u,$D);if(!$G)$G="SELECT".limit((+$u&&$Sb&&$jc&&$lc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Pb,($X?"\nWHERE ".implode(" AND ",$X):"").$Tb,($u!=""?+$u:null),($D?$u*$D:0),"\n");echo$b->selectQuery($G);$H=$g->query($G);if(!$H)echo"<p class='error'>".error()."\n";else{if($lc=="mssql"&&$D)$H->seek($u*$D);$mb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$lc=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last")$n=(+$u&&$Sb&&$jc?($lc=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($G) x")):count($K));if(!$K)echo"<p class='message'>".'No rows.'."\n";else{$ua=$b->backwardKeys($a,$Kd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Sb&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$Gc=array();$Rb=array();reset($L);$jd=1;foreach($K[0]as$t=>$V){if($t!=$Kc){$V=$_GET["columns"][key($L)];$l=$m[$L?($V?$V["col"]:current($L)):$t];$A=($l?$b->fieldName($l,$jd):"*");if($A!=""){$jd++;$Gc[$t]=$A;$e=idf_escape($t);$ac=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($t);$Xa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($ac.($B[0]==$e||$B[0]==$t||(!$B&&$jc&&$Sb[0]==$e)?$Xa:'')).'">';echo(!$L||$V?apply_sql_function($V["fun"],$A):h(current($L)))."</a>";echo"<span class='column hidden'>","<a href='".h($ac.$Xa)."' title='".'descending'."' class='text'> â†“</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($t)).'\'); return false;" title="'.'Search'.'" class="text jsonly"> =</a>';echo"</span>";}$Rb[$t]=$V["fun"];next($L);}}$vc=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$t=>$V)$vc[$t]=max($vc[$t],min(40,strlen(utf8_decode($V))));}}echo($ua?"<th>".'Relations':"")."</thead>\n";if(is_ajax()){if($u%2==1&&$D%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($K,$Lb)as$_=>$J){$ee=unique_array($K[$_],$s);if(!$ee){$ee=array();foreach($K[$_]as$t=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$t))$ee[$t]=$V;}}$fe="";foreach($ee
as$t=>$V){if(strlen($V)>64){$t="MD5(".(strpos($t,'(')?$t:idf_escape($t)).")";$V=md5($V);}$fe.="&".($V!==null?urlencode("where[".bracket_escape($t)."]")."=".urlencode($V):"null%5B%5D=".urlencode($t));}echo"<tr".odd().">".(!$Sb&&$L?"":"<td>".checkbox("check[]",substr($fe,1),in_array(substr($fe,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($jc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$fe)."'>".'edit'."</a>"));foreach($J
as$t=>$V){if(isset($Gc[$t])){$l=$m[$t];if($V!=""&&(!isset($mb[$t])||$mb[$t]!=""))$mb[$t]=(is_mail($V)?$Gc[$t]:"");$v="";$V=$b->editVal($V,$l);if($V!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$V!="")$v=ME.'download='.urlencode($a).'&field='.urlencode($t).$fe;if($V==="")$V="&nbsp;";elseif($Od!=""&&is_shortable($l))$V=shorten_utf8($V,max(0,+$Od));else$V=h($V);if(!$v){foreach((array)$Lb[$t]as$Kb){if(count($Lb[$t])==1||end($Kb["source"])==$t){$v="";foreach($Kb["source"]as$p=>$_d)$v.=where_link($p,$Kb["target"][$p],$K[$_][$_d]);$v=($Kb["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Kb["db"]),ME):ME).'select='.urlencode($Kb["table"]).$v;if(count($Kb["source"])==1)break;}}}if($t=="COUNT(*)"){$v=ME."select=".urlencode($a);$p=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$ee))$v.=where_link($p++,$U["col"],$U["val"],$U["op"]);}foreach($ee
as$mc=>$U)$v.=where_link($p++,$mc,$U);}}if(!$v&&($v=$b->selectLink($J[$t],$l))===null){if(is_mail($J[$t]))$v="mailto:$J[$t]";if($fd=is_url($J[$t]))$v=($fd=="http"&&$aa?$J[$t]:"$fd://www.adminer.org/redirect/?url=".urlencode($J[$t]));}$q=h("val[$fe][".bracket_escape($t)."]");$W=$_POST["val"][$fe][bracket_escape($t)];$Vb=h($W!==null?$W:$J[$t]);$xc=strpos($V,"<i>...</i>");$ib=is_utf8($V)&&$K[$_][$t]==$J[$t]&&!$Rb[$t];$Nd=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$ib)||$W!==null?"<td>".($Nd?"<textarea name='$q' cols='30' rows='".(substr_count($J[$t],"\n")+1)."'>$Vb</textarea>":"<input name='$q' value='$Vb' size='$vc[$t]'>"):"<td id='$q' onclick=\"selectClick(this, event, ".($xc?2:($Nd?1:0)).($ib?"":", '".h('Use edit link to modify this value.')."'").");\">".$b->selectVal($V,$v,$l));}}if($ua)echo"<td>";$b->backwardKeysPrint($ua,$K[$_]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Sb&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($K||$D)&&!is_ajax()){$tb=true;if($_GET["page"]!="last"&&+$u&&!$jc&&($n>=$u||$D)){$n=found_rows($R,$X);if($n<max(1e4,2*($D+1)*$u))$n=reset(slow_query("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):"")));else$tb=false;}if(+$u&&($n===false||$n>$u||$D)){echo"<p class='pages'>";$zc=($n===false?$D+(count($K)>=$u?2:1):floor(($n-1)/$u));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($D+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$D).($D>5?" ...":"");for($p=max(1,$D-4);$p<min($zc,$D+5);$p++)echo
pagination($p,$D);if($zc>0){echo($D+5<$zc?" ...":""),($tb&&$n!==false?pagination($zc,$D):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$zc'>".'last'."</a>");}echo(($n===false?count($K)+1:$n-$D*$u)>$u?' <a href="'.h(remove_from_uri("page")."&page=".($D+1)).'" onclick="return !selectLoadMore(this, '.(+$u).', \''.'Loading'.'\');">'.'Load more data'.'</a>':'');}echo"<p>\n",($n!==false?"(".($tb?"":"~ ").lang(array('%d row','%d rows'),$n).") ":""),checkbox("all",1,0,'whole result')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save"',($_GET["modify"]?'':' title="'.'Ctrl+click on a value to modify it.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$n,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Mb=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Mb['sql']);break;}}if($Mb){print_fieldset("export",'Export');$Uc=$b->dumpOutput();echo($Uc?html_select("output",$Uc,$ha["output"])." ":""),html_select("format",$Mb,$ha["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($mb,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$S'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));elseif(list($Q,$q,$A)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$g->query("SELECT $q, $A FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$q = $_GET[value] OR ":"")."$A LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($p=0;$p<10&&($J=$H->fetch_row());$p++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($q))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";if($p==10)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$Q=>$J){$A=$b->tableName($J);if(isset($J["Engine"])&&$A!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$A</a>";$V=number_format($J["Rows"],0,'.',',');echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($J["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();