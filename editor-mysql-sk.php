<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.0
*/error_reporting(6135);$Ib=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Ib||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$te=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($te)$$W=$te;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´’×Z§”ùB£ÆTÙ€-S`èÂçÈ[C¹h\ròCˆtá¸d€¯&'øX\n1Ù^`éÅÁraÚyˆÅÔ2Ä—B˜P2c ¸–‘PäıÓã„Ky…†fé”^‰·Â5¾FÊRJk©10 T¡Ãhee\r×Æ(…CrQÌ-SÁºB`\$yn¹?B†T¿Wâ4D9 ¶6jùİ‹é…Ğnˆt[%å‚0 É@\$ûä^VRÉà*bØb*4‚IÇÇÈz{N0Œ\reü¿|	›¢\$Ÿ4Å,Á¬ÊCÈ\$¤ÌË™–e)š®#‡„©`Ò´dı'¡<^ÑÉXƒ ntâØf\"áŒµAuŞÉ\nŠ¿@pŞ\n†#!;Útò8²ˆ´“é¼jŒ»Md³éò:‡TŸÔ\nƒ:%„µæÀğOh\\Trà8N×şQÕ4ì¡\r}A¢zC”\rôIø0ğîåÊ3¨TÇ=˜Æù‰?'´¡/,¬[aÅŒ2­H	8¥ùÔX‹›:À¨í’l·['Ù}‹u¨·£!SLõO+*[‚åcFÛ\0006¡‘lİÆzÃ¨r>äİ¾C²ëÃœƒS´`Ò¡çY)İt6”lÊÈ:¨º¬0¶±™ÂÃ?,ìÖÿéüGŠ®‚%Ãè¡\$Ê€-ŸM…±¾BÈ³†0ÎH#x2c à:ƒÄğŞo\n›Q <†àë\\­Akµep°Y„Û%š\$;ÊL&•%kâûFõõ;Ô`r¶m¤«öá4jËÔq×j‹õÕ”§¬Pc¼EQ†*âcÃf!*\0µéy,ùP`°¨µM\\C½’ŠÖV\"Y{ÑzMªt¡¾øó­d/¥ö@€™_Y§EÎÌ°­Ê8^B½IDW)š¢jÿuAŒ–hHšà_`Ò-<·WšÖ[ØfTîf0*V¤¦O\$®¬.<—@1SàÈÃ”õŠq\"Êû,}sµ6îÖâğws•ÂhQcVÒy˜é¹Š¥™Xd‰kû0Dw¢ÖÈAÇ”¯ØË\"ÈkKEt‚à9Ò£]W-/ÍÆR‰ÊşĞü¶¯9 9Í™†ƒp-¹€ÚÎâšèdØÅ2+ÀµÎ‡ Zm‘Õ,É8ÙG0ÄË®—(ëMNÄÂl´&†+[+•2B–[9>a¦q,¼Ê‘(2EÕ¢µ—:OrM¹ƒ¸²ŞğG¡MÑLZÆN30Ü¼ëÉ{ÖæŠËu2V+ƒööÄk«²›s+×VÁ¶Häğ„iî{\"ƒ½,T(x:9@ØBÌH—2¢œF¢^¦öºpzï|Á8h‹Ü#{‚éöbqé½¡oNgí{Æ îÍÒ.-½Á,g1aÌ¢µn\nøFX…IbMıgbß?õ€ãü‚ceÌãÖo“£}öŠª\\—æ<±…¥ÃÅµ¶üëñÆĞÕ‚y;š¬›ïr`}ÁC[ÍåÉyµÚÀ8l`¤=‚êß¸Ò§\$<{4t«qŠŠu3t¾ vÎBW¥¢»:+µ(F×Ñq?o®É]¸ekìJÍ±tLóCµ2L=¼|ür.ó¢,×Oå™Ÿ€òÍ²é¡ô>õ(M®™5Ã>£İlúX³å»wIŞîeÍÈsÒª‚Ùˆq>(«o‡ÔAøñC!Ù8•‘“ô€");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀŞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ğ@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^ò¨]\rÃ°ø\\7C8_Dƒp^ÂP é\0Ì± w &c4^RãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpŞĞ“Àæ:)\\;¯C ĞÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„WL\\PŞ®#r'b–]^2İØääCÍ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ĞPQƒá0³ç„÷ô?á‘*—\rØb.Å.ğû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ĞQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØİ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ŞÚÚ…ŞÊìò¸èÜ\r#ê…aväİƒàö>…2’1ÁN(Èğ<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤şäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLĞ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.¾øA¡I	\r±-%Îém-Ïe©·\0†ÈÓ/DZ !Pöxƒ H´6`X„b*g4E¬Õ§…\"	PhÄÕiPÂàB\0ı‡ÀÈÁ›œeT†r°YJé\\+ˆ­‚¡ààäĞ:>&-Ÿ#¦€dÚy{IotÄ?CO ß›õ&qñ™\0ædùhGº;‡BÙ	B,\r)Ô4ƒÈíq#\rÁM&°VÄX!“éU·àÒáXô«z!å¤Å0æC’Ë.J964±É	#Œ8àÄ¦‰Ù“3jEÊ×ÿa #Àô	agæ 9ƒ¹1&¤à<l¡µÊÊ)H%4¨cÓH™½#:¥p]Ó°Âéàåy(ƒPraÁ˜,ÛşŸs¾rOˆ[¡Û®.NÔ°Ìø5(a#(Ê=˜É\$xy’\$È¡Q¬w¦üuœ4zr‘ùÏ:WT_(…¤ÁX70IÑH*ŒIè«—§I(1Ÿ%O^ˆ\"0{N'ÌŒ›aÒŒÑ²9GC”—K’e‚†¤êá¸¤²R†©NIh\0‚HŒ-†©äò“i¥§êÀˆÃ¥ciÓ&eCÉ™‚© eêjôÆj~1\r@éıÛÃ6\r‡Š€ÚEÅ\n ó6‡6wg=%H\n¥Óñ:¢ÉÇ5á|'›Uê¢Mê—8²ò†“JPÓUÚú¯”ÕIĞIã<É)„“ZœÙ8:í°d”ğéürşŞÕ!Á¦h.‚-\rÃZ¹ä9B¯Ãz´MÅ®W3tîªs«¨Â—²Á°ÇÇb—LcB íòVBtúC›ßvp.¤Ï[R^oŒ	+x>ù*Ããªv¨Ş9ßrN¥H!4vL1ğğÀßÁmÁ˜:áÜThGƒaŞ\"÷5ƒÛaëğ3ĞBÈ¢Ûˆ«5a­-42bšÑZ¨ÃpnO©şA\rŸ†`Ïlfíœ5Çğä>Õ™¡†[«#®ÍêÜp'Ş\rV\0®Ì/b/¾93ÖC‡Ö=•™às4¡˜:°ÊUè(9.Æ†G3›'Û†ˆ“ÏI©nXvpŸàÿ=X[nAÑ¸7QÒUKÚ‰¤ t¾O²Ó^dtzÔqåhbØ‹,š‹Ç÷ÒU8em¤ª“¢ÓÊ‰5¡ì­ ÉØ¼èk`Ks¦[¶7ßLÊ9y%q¶~¶ÿ#@VÌ¥¨Ö.fUš\$ŒD2f~¥:Ô3’PÄÃ^ŸzkA¶fÌÈ¡âzq¼?ªÛbš¡Œ‰Q2'(™]o%wgšB?´*é«2ÃÜ×OX±{\$ØDÈbf‡øH\n4&0Lƒs\0íHbwØ.à3p@{¼èDË ê8Ó…lW,²!Á['[Ú^1BL]„:‡0¦äTV¶|9Û°ûoy¥ÀjopÅå@P	¨fœğæ¼Ø9	À£¢[ MÓCß@¡˜°î‰‚‰céêìú”¾™×j*-E±y¯PÜºfâıq¦GÃ¨ODNÏ£M@ÃyLeç—©ÖKòø	X¿Ü(0›œRØfÑ &u0è\nü@oñQ +©Ğ¼F\$›ûÄø³åC\"šì ×¬Õ,ÑfHáÜÑ‡eÌ·mÉı¼7w'È‰?¦&~ †z«¢hÃ“Qüè¹7\0‚k‚•Ñ€Šo¯™Yqğhğ¦/dó»î¨F8­9¦}2uóñlÍfS{íâß£÷¡Ê,I¾°‹­]ıòÿ,ˆF›ûBn­¡ÿ[=¢ósIy\$æà©@ä©>´ xn\n¦¤íJ\$°§,ç©òµh¸'tà¶ Z@º€¶ŒÀVâ°€L\"Ù	äp&Ò4àğN úÔé*@òİø£M&¨í*’°\0„ZÔ\r\r+Lµ\rU\$a)åBmˆ¿ğ3p:·P@+0FGğz§'.ë¥?\niò,ä`-cxş/4ó¾‘Fi%dÆ\0Pıkìk«¨/ÆÌÀòVeÌ}êÀÅÚƒ€ò‡ãN4@bg2èÀ]ô> z `Æ¢<PÜSn4úàúöMÀnÚH€ÑfäFÀ\$ğªÆ°ÂêÎ¬LXlîlğR?X¡0ÔJ\rÀšˆÄvp´šk\"ğ€Ü³ô¨j‹¢u\0¸ğË=\0k@Mp°|Ô€Uà_@ÚLKXzqhµñb\$‹j4·C`+Ñ¢s\"Ö­İ@Ë`P²ÆF#à¯\n,¨jø(OÀ‰\0[Q(-ƒ2§p¶RXZ\0íĞd¨úÿññ1‚“±ñªP²1ğ0@Ó-VïËå]\nÈ‚±\0.œn°nbu!Ñ>År\"#D²\rŸ-¢fib4RÔIÎ\$²4ÅL`tÒ0:¢d;ò!ò8ú\näıs&lá\"*ÌFB%\r'´»ƒp‰°êø%‡ş]¢8v°àéÌr]¨ˆ ëÌOkÓ(§š6£ö]¬’–c\$†oö’ªL€óäï€XrG Ê!+Ï*ëĞznêÕ’¾1€\\\rNZ\r\0¨?Œ*±.Š.’û/óugº\"ÚïÀ‡(nøéÒIü‘2Ğ÷±W§Ô|ö’&º¬0S¿í,¾ÓFÂD6ˆrcÒà.€İ0²ï'¨Nsf ÉäÈfdÛ.!5©šHIp—L‰8R|‡+zÃí¬·­«,òÓ+‘2k#4nğÑRé2mX¿\"Rˆ]\0S,,ÂÌlÊÌî5¬8®@ó@ïè%.‚°•l95:ÀNâDğ ÖR\n€Ò#ˆ€zq6Èù7\0Úz²î4n‘Ôlî@QrØº0ç<ï2¬ÏcD€a<C3‘`péÒ…;Ó'.t.Î÷/&ìæ\r5CPó2à{CÂÆ:ÇVåâDQcVîTõÑ]GNb`Oê03[¢gIÿF	F–>Í3B¾h< ø3¢\\\r”—Gtš³ŞÑhJlÒÅ\"-üoÎ8®<AîCHíú‘@R…´Â¼ˆ3L‰LÉM4& Óã.ôŞ¾É°0²~~ò¶6Ó™1åÖ]¬ÄASÊÍ\0L3£B ïBì.Ò£ÄIv}åĞ\nbè(2ó9fo9µ6ãrÚÎÜãOº”btn	¨Ø¦ô™¦şº­^&p&(¼à¼ãPŸ¢¹IÇşò.kUT¥)dKƒ	 ÂÔmŒŞÎ¦_íõXeŞõYJSidOU¨ÔsÕÂj\r¯x']òáu°œÅ4-<DZUõ¡XµY)ÎÄLÖé}[àSMRÕÕ‰ZUßZ¢ÚT€ØVÃÕ,ğğ¶úUPúæ<SE%ÃtÁVr¨ù\\!\\f†tóê4§*üö;Ö&l€ébÕÄrqw\n¤Qd17B´ ÕXàP6‚*^…Uh\rc–;f8²\"j#tRfºh‰@èygÊlã¬;ˆ	–i\0ËiKZ tV<X\0‚7Ä\0@Ôk¶˜wv¶ –»köÂ b„	«ˆI æòCiî\n€ +€u9‰êÕ–{gæ½ojlob>q&6,` 	à¦\n”zà‹q¯fH<6m–§o–Ei6øOÄ6!‚„‡ãF€Z\n‰hZÏinìÀ^\0ZJ î©š¶d#ã‚4àÉ]üRw+rjmsæ(@°·,¦ÆÎ¯+\\â±nGjV¨—g\rwl Äo-E&=&ûÏª±VU÷j1754=4:BÈefÈq{)“yw’l…ertfK{{2ÏeÕºˆ’‰h›qÀö··àc;Æjú×È¾÷²T#¶å©¨cb\\nB„xX?îI Ë1oJ@³æZ ÷\"ûæÜñg'jpğ í¯(§ Œ„O–„@X\\\0æë’Şrsi€¶t ¶p«Æ@†œj1ğt“pÛ2QíL`¬D-àÖB8}NZZ,5Ÿn½ÀHàÓ§©=.GOrCg+•\nËÅ^5lB,¢ÁÀøEå \ràø–érä\0ø¬Fxø©ŠÌt4¨ÇFÏíé7sjf6Irş+÷b ª\n@’‡àÛ¤hz‰è*v	¹\rùZ£¿½4¯î+‡Hºµ~|Ì2Xµ#òÚø\ràÔ\rä<(@M­Å~…¾W8Z\\B°‘ğ·Ã4 E…¸@|eydë‚ €_~ş¶dÃÉ³V…ÊÕ˜Äæ€éiİ8rš\rê¾Ù“fBiõi ¸à\\P+‚ ,dgC¿†p¸æõC7ö\"±èÜhšùy–˜W8<X!qö…1,Ä\$²üÌNĞPTÀèç‰r\n)ú2×Ù‚\\G;qrÿÍ)b¹AÉ“ƒÆ9,è}:`é\"NŒv“€î/ÀÜQtT“®ïR³<Dó¾F”©J:G&Œa>m\r4óÀšo>FğL\nË¦=¥#k¥—ï¢GRÅa¥ZXÉ\"ÿ_d<!*~Å®&N*	Š0J0G2Œ˜Ú¨\$‘Ç'ÆvF¤n!rÊ‚S,l1´{>†;_@İåz§ù:‘3CŒ¹şèÕ\rFT8 dø•QÉc2¦ÌçÑ¦”RkíFæPÆ\r€òÕ©+d°\rÎàn¬¢‡@vEi€æ2EõP	ï&1›R`°«ªúu(s:rÀW8!c·[BCø Mm\\÷E.òÀ{XÅ4O6a§,6F@ô@b€XQ*\0àÁòõ0I¨ıd\0;g#¶‹¹¼LHİ@·îº.jbÛ®íq»À{»Û¶£F€ê\0`\$O¸n³š.ÿç–sµÌ\ro%ùÖcÍÔ1&à7û»zœFºIDm\"\nRppÏ¼O/x\n€ŞãÄ=/Û¹ã=Ä%F€²ş»\\1`e¾<2–t£¸;ÜV eÃDÃ’Ë‚\$2ükÆè¥eÃÙ.ü„œtVDQÆ£½µ|~¦§Wˆ)ĞÈ»‚â›IAŠÅ«¿†–Å›<rc¼‰\nsØ‰:P\nn2éd„56%^ÀCDX¸yÙÜì¥Êí‚*Zy 4ù%‘’úr®™\\wıy{€Cf9ée¶¹òáQó¸pÎ} fØ\r]¶°«ÒÉ}Ó°Æ;Š»\"\r{µ,€ÅmÔÔÀİÈıT›¼¡¬ÃÕÜUÔ><^Ü&=<-cü1Up¼(W¦Eç© X½tü¤niÆœ2n‰´n\0˜\rä7¢jQIt„Cz”E‚‚F>Î%´\\¬à›f/îÓİNÒo«:¶Hİ´Z	FÕÒ\$¯[µ¿\\'#dÂ„í'™‹£mÎÓ·­ıÍ:=rc={­Ê†£³¢-€é:=×´n-Ò9÷Ò‡V;ıh11÷¢*<hÜ¶iPÍã'ê7å’ÔŸR\"Bœ¤ÀäüşLJş\0AÍ£õÒâŞ.Ó¼pŒuŠ~¯® ¡˜[Àséã}Úà½Î\$ht™.ÜèÕ4\rõ9C¿Q6\nšçÍSÅì~ÊWnÌÈ“€\$ÜBğ¢r\r€„—Â§õGeˆzy áÌ˜ÛÌÅM åëäÌ\$­<X,CÛ,’ t Xn¤Ú?s‹\"•­LÛúÒ0i£\n'\nE\0ÍCÀrÌ^ûÌ ‘Ìúm)+Ëêˆ ÀRÚñ¿ïü—_Wğ<ÑõÏn×ì²øØ—KşOCëÜbiÜ–X±ßÅ„]`+Øå¤P•xOP¼[µ’éV+_ÙIW³iëOgú“’šŸ‚ä=k ˆêo‚!_nä%c—üæ¼Â!ÂTk|Ê+\rïı©,;EQ¿ˆÜßlÉõÆìæWôŠÉıc6«ûœÊÿc¿ÍÌ®şSıÈ\"ÿGş?²«Ê6úğH¿ùıéx0Éƒ<Ğ4À& Fä.R»@ Rù4Ç ´¨=jpÚ,ÓJ5Ù‡‰\$ò\\¤V´±\n¼~RèIlæT÷*4–MÆÒ)@ğç4®¬ã'³~Ãó‡ØÌÀß€±a@djiJBOQm‹·ÂÊ8Œ‹!d ‚Ñá`¸Ášª}7çƒ(ãÕh‡ìLá\n\\Ã•¸.½è­îm2ÂÔUŸ,úÆ5~Š @úÑÄ³Ÿ´:Çï2ÁxÜZ“÷(«fƒÛê Fû4>\nr^[ÂöÀ'Aå®ÙÙ&FRÇ×k=ìşçÚ>j©ÃÂ’„–!r/iÂ ,aÄ·€İ\r/NÊ^R_¡’…p}	Gcâˆ„ØÓ3Ã9² y6 ÓºÓQ\n—Øü©	RXŠŸù¢÷9ZT˜xnbÌ‘d3 -G<MèÌİ\"û8@zÎ5¼ÃmG\0tR¢ÅB,â_œ(!ày u… ©ã‡Â ğ½J\0Öd3Sò”¦jû0T6Ñ6¸‰«Eı0ãtü6Ô~rÃ—C1<)\\è²õı,ÉÏ‡c\$Ù*fKÄ‘”K9˜(£”¦&Àl‰ÀrÑ^Äd9¢‰‘ â0}Ãô”oTjÓ•âwÖmºIÍÃ‡Ò`¢•†ã10ZQBà‹ïUÄ‰#f05`Ezxˆ±Ã†q+,Eâ<U ¶*ğé\r; ÜşÉG@MègA‡š­aí‡ë”è&!-*×bÂ2\0");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($hc){$tc=substr($hc,-1);return
str_replace($tc.$tc,$tc,substr($hc,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($jd,$Ib=false){if(get_magic_quotes_gpc()){while(list($w,$W)=each($jd)){foreach($W
as$oc=>$V){unset($jd[$w][$oc]);if(is_array($V)){$jd[$w][stripslashes($oc)]=$V;$jd[]=&$jd[$w][stripslashes($oc)];}else$jd[$w][stripslashes($oc)]=($Ib?$V:stripslashes($V));}}}}function
bracket_escape($hc,$ua=false){static$je=array(':'=>':1',']'=>':2','['=>':3');return
strtr($hc,($ua?array_flip($je):$je));}function
h($R){return
htmlspecialchars(str_replace("\0","",$R),ENT_QUOTES);}function
nbsp($R){return(trim($R)!=""?h($R):"&nbsp;");}function
nl_br($R){return
str_replace("\n","<br>",$R);}function
checkbox($C,$X,$Ea,$rc="",$Rc="",$Ga=""){$L="<input type='checkbox' name='$C' value='".h($X)."'".($Ea?" checked":"").($Rc?' onclick="'.h($Rc).'"':'').">";return($rc!=""||$Ga?"<label".($Ga?" class='$Ga'":"").">$L".h($rc)."</label>":$L);}function
optionlist($D,$Cd=null,$ye=false){$L="";foreach($D
as$oc=>$V){$Vc=array($oc=>$V);if(is_array($V)){$L.='<optgroup label="'.h($oc).'">';$Vc=$V;}foreach($Vc
as$w=>$W)$L.='<option'.($ye||is_string($w)?' value="'.h($w).'"':'').(($ye||is_string($w)?(string)$w:$W)===$Cd?' selected':'').'>'.h($W);if(is_array($V))$L.='</optgroup>';}return$L;}function
html_select($C,$D,$X="",$Qc=true){if($Qc)return"<select name='".h($C)."'".(is_string($Qc)?' onchange="'.h($Qc).'"':"").">".optionlist($D,$X)."</select>";$L="";foreach($D
as$w=>$W)$L.="<label><input type='radio' name='".h($C)."' value='".h($w)."'".($w==$X?" checked":"").">".h($W)."</label>";return$L;}function
select_input($c,$D,$X="",$cd=""){return($D?"<select$c><option value=''>$cd".optionlist($D,$X,true)."</select>":"<input$c value='".h($X)."' placeholder='$cd'>");}function
confirm(){return" onclick=\"return confirm('".'Naozaj?'."');\"";}function
print_fieldset($r,$vc,$Ce=false,$Rc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Rc)."return !toggle('fieldset-$r');\">$vc</a></legend><div id='fieldset-$r'".($Ce?"":" class='hidden'").">\n";}function
bold($Aa,$Ga=""){return($Aa?" class='active $Ga'":($Ga?" class='$Ga'":""));}function
odd($L=' class="odd"'){static$q=0;if(!$L)$q=-1;return($q++%2?$L:'');}function
js_escape($R){return
addcslashes($R,"\r\n'\\/");}function
json_row($w,$W=null){static$Jb=true;if($Jb)echo"{";if($w!=""){echo($Jb?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\/").'": '.($W!==null?'"'.addcslashes($W,"\r\n\"\\/").'"':'undefined');$Jb=false;}else{echo"\n}\n";$Jb=true;}}function
ini_bool($lc){$W=ini_get($lc);return(preg_match('~^(on|true|yes)$~i',$W)||(int)$W);}function
sid(){static$L;if($L===null)$L=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$L;}function
q($R){global$f;return$f->quote($R);}function
get_vals($J,$d=0){global$f;$L=array();$K=$f->query($J);if(is_object($K)){while($M=$K->fetch_row())$L[]=$M[$d];}return$L;}function
get_key_vals($J,$g=null,$ce=0){global$f;if(!is_object($g))$g=$f;$L=array();$g->timeout=$ce;$K=$g->query($J);$g->timeout=0;if(is_object($K)){while($M=$K->fetch_row())$L[$M[0]]=$M[1];}return$L;}function
get_rows($J,$g=null,$k="<p class='error'>"){global$f;$Qa=(is_object($g)?$g:$f);$L=array();$K=$Qa->query($J);if(is_object($K)){while($M=$K->fetch_assoc())$L[]=$M;}elseif(!$K&&!is_object($g)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$L;}function
unique_array($M,$t){foreach($t
as$s){if(preg_match("~PRIMARY|UNIQUE~",$s["type"])){$L=array();foreach($s["columns"]as$w){if(!isset($M[$w]))continue
2;$L[$w]=$M[$w];}return$L;}}}function
where($Y,$m=array()){global$v;$L=array();$Ub='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Y["where"]as$w=>$W){$w=bracket_escape($w,1);$d=(preg_match($Ub,$w)?$w:idf_escape($w));$L[]=$d.(($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$W))||$v=="mssql"?" LIKE ".q(addcslashes($W,"%_\\")):" = ".unconvert_field($m[$w],q($W)));if($v=="sql"&&preg_match("~[^ -@]~",$W))$L[]="$d = ".q($W)." COLLATE utf8_bin";}foreach((array)$Y["null"]as$w)$L[]=(preg_match($Ub,$w)?$w:idf_escape($w))." IS NULL";return
implode(" AND ",$L);}function
where_check($W,$m=array()){parse_str($W,$Da);remove_slashes(array(&$Da));return
where($Da,$m);}function
where_link($q,$d,$X,$Tc="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($d)."&where%5B$q%5D%5Bop%5D=".urlencode(($X!==null?$Tc:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($X);}function
convert_fields($e,$m,$O=array()){$L="";foreach($e
as$w=>$W){if($O&&!in_array(idf_escape($w),$O))continue;$oa=convert_field($m[$w]);if($oa)$L.=", $oa AS ".idf_escape($w);}return$L;}function
cookie($C,$X,$yc=2592000){global$aa;$Zc=array($C,(preg_match("~\n~",$X)?"":$X),($yc?time()+$yc:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Zc[]=true;return
call_user_func_array('setcookie',$Zc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$W){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($_e,$P,$U,$h=null){global$ib;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ib))."|username|".($h!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($_e!="server"||$P!=""?urlencode($_e)."=".urlencode($P)."&":"")."username=".urlencode($U).($h!=""?"&db=".urlencode($h):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($z,$A=null){if($A!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($z!==null?$z:$_SERVER["REQUEST_URI"]))][]=$A;}if($z!==null){if($z=="")$z=".";header("Location: $z");exit;}}function
query_redirect($J,$z,$A,$rd=true,$_b=true,$Cb=false){global$f,$k,$b;$be="";if($_b){$Ld=microtime(true);$Cb=!$f->query($J);$be="; -- ".format_time($Ld,microtime(true));}$Kd="";if($J)$Kd=$b->messageQuery($J.$be);if($Cb){$k=error().$Kd;return
false;}if($rd)redirect($z,$A.$Kd);return
true;}function
queries($J=null){global$f;static$md=array();if($J===null)return
implode("\n",$md);$Ld=microtime(true);$L=$f->query($J);$md[]=(preg_match('~;$~',$J)?"DELIMITER ;;\n$J;\nDELIMITER ":$J)."; -- ".format_time($Ld,microtime(true));return$L;}function
apply_queries($J,$Wd,$wb='table'){foreach($Wd
as$S){if(!queries("$J ".$wb($S)))return
false;}return
true;}function
queries_redirect($z,$A,$rd){return
query_redirect(queries(),$z,$A,$rd,false,!$rd);}function
format_time($Ld,$sb){return
sprintf('%.3f s',max(0,$sb-$Ld));}function
remove_from_uri($Yc=""){return
substr(preg_replace("~(?<=[?&])($Yc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($G,$Wa){return" ".($G==$Wa?$G+1:'<a href="'.h(remove_from_uri("page").($G?"&page=$G".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($G+1)."</a>");}function
get_file($w,$Za=false){$Fb=$_FILES[$w];if(!$Fb)return
null;foreach($Fb
as$w=>$W)$Fb[$w]=(array)$W;$L='';foreach($Fb["error"]as$w=>$k){if($k)return$k;$C=$Fb["name"][$w];$he=$Fb["tmp_name"][$w];$Ra=file_get_contents($Za&&preg_match('~\\.gz$~',$C)?"compress.zlib://$he":$he);if($Za){$Ld=substr($Ra,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Ld,$sd))$Ra=iconv("utf-16","utf-8",$Ra);elseif($Ld=="\xEF\xBB\xBF")$Ra=substr($Ra,3);$L.=$Ra."\n\n";}}return$L;}function
upload_error($k){$Dc=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'SÃºbor sa nepodarilo nahraÅ¥.'.($Dc?" ".sprintf('MaximÃ¡lna povolenÃ¡ veÄ¾kosÅ¥ sÃºboru je %sB.',$Dc):""):'SÃºbor neexistuje.');}function
repeat_pattern($I,$wc){return
str_repeat("$I{0,65535}",$wc/65535)."$I{0,".($wc%65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($R,$wc=80,$Rd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$wc).")($)?)u",$R,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$wc).")($)?)",$R,$_);return
h($_[1]).$Rd.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($jd,$jc=array()){while(list($w,$W)=each($jd)){if(is_array($W)){foreach($W
as$oc=>$V)$jd[$w."[$oc]"]=$V;}elseif(!in_array($w,$jc))echo'<input type="hidden" name="'.h($w).'" value="'.h($W).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($S,$Db=false){$L=table_status($S,$Db);return($L?$L:array("Name"=>$S));}function
column_foreign_keys($S){global$b;$L=array();foreach($b->foreignKeys($S)as$Ob){foreach($Ob["source"]as$W)$L[$W][]=$Ob;}return$L;}function
enum_input($me,$c,$l,$X,$rb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Ac);$L=($rb!==null?"<label><input type='$me'$c value='$rb'".((is_array($X)?in_array($rb,$X):$X===0)?" checked":"")."><i>".'prÃ¡zdne'."</i></label>":"");foreach($Ac[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ea=(is_int($X)?$X==$q+1:(is_array($X)?in_array($q+1,$X):$X===$W));$L.=" <label><input type='$me'$c value='".($q+1)."'".($Ea?' checked':'').'>'.h($b->editVal($W,$l)).'</label>';}return$L;}function
input($l,$X,$o){global$f,$oe,$b,$v;$C=h(bracket_escape($l["field"]));echo"<td class='function'>";if(is_array($X)&&!$o){$na=array($X);if(version_compare(PHP_VERSION,5.4)>=0)$na[]=JSON_PRETTY_PRINT;$X=call_user_func_array('json_encode',$na);$o="json";}$vd=($v=="mssql"&&$l["auto_increment"]);if($vd&&!$_POST["save"])$o=null;$Vb=(isset($_GET["select"])||$vd?array("orig"=>'originÃ¡l'):array())+$b->editFunctions($l);$c=" name='fields[$C]'";if($l["type"]=="enum")echo
nbsp($Vb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$X);else{$Jb=0;foreach($Vb
as$w=>$W){if($w===""||!$W)break;$Jb++;}$Qc=($Jb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Jb > f.selectedIndex) f.selectedIndex = $Jb;\" onkeyup='keyupChange.call(this);'":"");$c.=$Qc;echo(count($Vb)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Vb,$o===null||in_array($o,$Vb)||isset($Vb[$o])?$o:"")."</select>":nbsp(reset($Vb))).'<td>';$nc=$b->editInput($_GET["edit"],$l,$c,$X);if($nc!="")echo$nc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Ac);foreach($Ac[1]as$q=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ea=(is_int($X)?($X>>$q)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$C][$q]' value='".(1<<$q)."'".($Ea?' checked':'')."$Qc>".h($b->editVal($W,$l)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Qc>";elseif(($Yd=preg_match('~text|lob~',$l["type"]))||preg_match("~\n~",$X)){if($Yd&&$v!="sqlite")$c.=" cols='50' rows='12'";else{$N=min(12,substr_count($X,"\n")+1);$c.=" cols='30' rows='$N'".($N==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($X).'</textarea>';}elseif($o=="json")echo"<textarea$c cols='50' rows='12' class='jush-js'>".h($X).'</textarea>';else{$Fc=(!preg_match('~int~',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$_)?((preg_match("~binary~",$l["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$l["unsigned"]?1:0)):($oe[$l["type"]]?$oe[$l["type"]]+($l["unsigned"]?0:1):0));if($v=='sql'&&$f->server_info>=5.6&&preg_match('~time~',$l["type"]))$Fc+=7;echo"<input".(preg_match('~int~',$l["type"])?" type='number'":"")." value='".h($X)."'".($Fc?" maxlength='$Fc'":"").(preg_match('~char|binary~',$l["type"])&&$Fc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$hc=bracket_escape($l["field"]);$o=$_POST["function"][$hc];$X=$_POST["fields"][$hc];if($l["type"]=="enum"){if($X==-1)return
false;if($X=="")return"NULL";return+$X;}if($l["auto_increment"]&&$X=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$X);if($o=="json"){$o="";$X=json_decode($X,true);if(!is_array($X))return
false;return$X;}if(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads")){$Fb=get_file("fields-$hc");if(!is_string($Fb))return
false;return
q($Fb);}return$b->processInput($l,$X,$o);}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Rb=false;foreach(table_status('',true)as$S=>$T){$C=$b->tableName($T);if(isset($T["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($S,$_POST["tables"]))){$K=$f->query("SELECT".limit("1 FROM ".table($S)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($S),array())),1));if(!$K||$K->fetch_row()){if(!$Rb){echo"<ul>\n";$Rb=true;}echo"<li>".($K?"<a href='".h(ME."select=".urlencode($S)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Rb?"</ul>":"<p class='message'>".'Å½iadne tabuÄ¾ky.')."\n";}function
dump_headers($gc,$Ic=false){global$b;$L=$b->dumpHeaders($gc,$Ic);$Xc=$_POST["output"];if($Xc!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($gc).".$L".($Xc!="file"&&!preg_match('~[^0-9a-z]~',$Xc)?".$Xc":""));session_write_close();ob_flush();flush();return$L;}function
dump_csv($M){foreach($M
as$w=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W==="")$M[$w]='"'.str_replace('"','""',$W).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$M)."\r\n";}function
apply_sql_function($o,$d){return($o?($o=="unixepoch"?"DATETIME($d, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$d)"):$d);}function
password_file($Ta){$fb=ini_get("upload_tmp_dir");if(!$fb){if(function_exists('sys_get_temp_dir'))$fb=sys_get_temp_dir();else{$Gb=@tempnam("","");if(!$Gb)return
false;$fb=dirname($Gb);unlink($Gb);}}$Gb="$fb/adminer.key";$L=@file_get_contents($Gb);if($L||!$Ta)return$L;$Sb=@fopen($Gb,"w");if($Sb){$L=rand_string();fwrite($Sb,$L);fclose($Sb);}return$L;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($W,$y,$l,$Zd){global$b,$aa;if(is_array($W)){$L="";foreach($W
as$oc=>$V)$L.="<tr>".($W!=array_values($W)?"<th>".h($oc):"")."<td>".select_value($V,$y,$l,$Zd);return"<table cellspacing='0'>$L</table>";}if(!$y)$y=$b->selectLink($W,$l);if($y===null){if(is_mail($W))$y="mailto:$W";if($kd=is_url($W))$y=($kd=="http"&&$aa?$W:"$kd://www.adminer.org/redirect/?url=".urlencode($W));}$W=$b->editVal($W,$l);if($W!==null){if($W==="")$W="&nbsp;";elseif($Zd!=""&&is_shortable($l))$W=shorten_utf8($W,max(0,+$Zd));else$W=h($W);}$W=$b->selectVal($W,$y,$l);return$W;}function
is_mail($ob){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$I="$pa+(\\.$pa+)*@($hb?\\.)+$hb";return
is_string($ob)&&preg_match("(^$I(,\\s*$I)*\$)i",$ob);}function
is_url($R){$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($hb?\\.)+$hb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$R,$_)?strtolower($_[1]):"");}function
is_shortable($l){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$l["type"]);}function
count_rows($S,$Y,$u,$p){global$v;$J=" FROM ".table($S).($Y?" WHERE ".implode(" AND ",$Y):"");return($u&&($v=="sql"||count($p)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$p).")$J":"SELECT COUNT(*)".($u?" FROM (SELECT 1$J$Wb) x":$J));}function
slow_query($J){global$b,$ie;$h=$b->database();$ce=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($h==""||$g->select_db($h))){$qc=$g->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$ie,'&kill=',$qc,'\');
}, ',1000*$ce,');
</script>
';}else$g=null;ob_flush();flush();$L=@get_key_vals($J,$g,$ce);if($g){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($L);}function
get_token(){$pd=rand(1,1e6);return($pd^$_SESSION["token"]).":$pd";}function
verify_token(){list($ie,$pd)=explode(":",$_POST["token"]);return($pd^$_SESSION["token"])==$ie;}function
lzw_decompress($za){$eb=256;$_a=8;$Ia=array();$wd=0;$xd=0;for($q=0;$q<strlen($za);$q++){$wd=($wd<<8)+ord($za[$q]);$xd+=8;if($xd>=$_a){$xd-=$_a;$Ia[]=$wd>>$xd;$wd&=(1<<$xd)-1;$eb++;if($eb>>$_a)$_a++;}}$db=range("\0","\xFF");$L="";foreach($Ia
as$q=>$Ha){$nb=$db[$Ha];if(!isset($nb))$nb=$Ge.$Ge[0];$L.=$nb;if($q)$db[]=$Ge.$nb[0];$Ge=$nb;}return$L;}function
on_help($Na,$Id=0){return" onmouseover='helpMouseover(this, event, ".h($Na).", $Id);' onmouseout='helpMouseout(this, event);'";}global$b,$f,$ib,$lb,$ub,$k,$Vb,$Xb,$aa,$mc,$v,$ba,$sc,$Pc,$bd,$Od,$ac,$ie,$le,$oe,$ve,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$Zc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Zc[]=true;call_user_func_array('session_set_cookie_params',$Zc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ib);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'sk';}function
lang($ke,$Mc=null){if(is_array($ke)){$ed=($Mc==1?0:($Mc&&$Mc<5?1:2));$ke=$ke[$ed];}$ke=str_replace("%d","%s",$ke);$Mc=number_format($Mc,0,".",' ');return
sprintf($ke,$Mc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$ed=array_search("SQL",$b->operators);if($ed!==false)unset($b->operators[$ed]);}function
dsn($jb,$U,$H){try{parent::__construct($jb,$U,$H);}catch(Exception$xb){auth_error($xb);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($J,$pe=false){$K=parent::query($J);$this->error="";if(!$K){list(,$this->errno,$this->error)=$this->errorInfo();return
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
select($S,$O,$Y,$p,$E,$x,$G){global$b,$v;$u=(count($p)<count($O));$J=$b->selectQueryBuild($O,$Y,$p,$E,$x,$G);if(!$J)$J="SELECT".limit(($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$O)."\nFROM ".table($S),($Y?"\nWHERE ".implode(" AND ",$Y):"").($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):""),($x!=""?+$x:null),($G?$x*$G:0),"\n");echo$b->selectQuery($J);return$this->_conn->query($J);}function
delete($S,$nd,$x=0){$J="FROM ".table($S);return
queries("DELETE".($x?limit1($J,$nd):" $J$nd"));}function
update($S,$Q,$nd,$x=0,$Ed="\n"){$ze=array();foreach($Q
as$w=>$W)$ze[]="$w = $W";$J=table($S)." SET$Ed".implode(",$Ed",$ze);return
queries("UPDATE".($x?limit1($J,$nd):" $J$nd"));}function
insert($S,$Q){return
queries("INSERT INTO ".table($S).($Q?" (".implode(", ",array_keys($Q)).")\nVALUES (".implode(", ",$Q).")":" DEFAULT VALUES"));}function
insertUpdate($S,$N,$hd){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$ib=array("server"=>"MySQL")+$ib;if(!defined("DRIVER")){$fd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($P,$U,$H){mysqli_report(MYSQLI_REPORT_OFF);list($ec,$dd)=explode(":",$P,2);$L=@$this->real_connect(($P!=""?$ec:ini_get("mysqli.default_host")),($P.$U!=""?$U:ini_get("mysqli.default_user")),($P.$U.$H!=""?$H:ini_get("mysqli.default_pw")),null,(is_numeric($dd)?$dd:ini_get("mysqli.default_port")),(!is_numeric($dd)?$dd:null));if($L){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$L;}function
result($J,$l=0){$K=$this->query($J);if(!$K)return
false;$M=$K->fetch_array();return$M[$l];}function
quote($R){return"'".$this->escape_string($R)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($P,$U,$H){$this->_link=@mysql_connect(($P!=""?$P:ini_get("mysql.default_host")),("$P$U"!=""?$U:ini_get("mysql.default_user")),("$P$U$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($R){return"'".mysql_real_escape_string($R,$this->_link)."'";}function
select_db($Xa){return
mysql_select_db($Xa,$this->_link);}function
query($J,$pe=false){$K=@($pe?mysql_unbuffered_query($J,$this->_link):mysql_query($J,$this->_link));$this->error="";if(!$K){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
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
query($J,$pe=false){$this->setAttribute(1000,!$pe);return
parent::query($J,$pe);}}}class
Min_Driver
extends
Min_SQL{function
insert($S,$Q){return($Q?parent::insert($S,$Q):queries("INSERT INTO ".table($S)." ()\nVALUES ()"));}function
insertUpdate($S,$N,$hd){$e=array_keys(reset($N));$gd="INSERT INTO ".table($S)." (".implode(", ",$e).") VALUES\n";$ze=array();foreach($e
as$w)$ze[$w]="$w = VALUES($w)";$Rd="\nON DUPLICATE KEY UPDATE ".implode(", ",$ze);$ze=array();$wc=0;foreach($N
as$Q){$X="(".implode(", ",$Q).")";if($ze&&(strlen($gd)+$wc+strlen($X)+strlen($Rd)>1e6)){if(!queries($gd.implode(",\n",$ze).$Rd))return
false;$ze=array();$wc=0;}$ze[]=$X;$wc+=strlen($X)+2;}return
queries($gd.implode(",\n",$ze).$Rd);}}function
idf_escape($hc){return"`".str_replace("`","``",$hc)."`";}function
table($hc){return
idf_escape($hc);}function
connect(){global$b;$f=new
Min_DB;$Va=$b->credentials();if($f->connect($Va[0],$Va[1],$Va[2])){$f->query("SET sql_quote_show_create = 1, autocommit = 1");return$f;}$L=$f->error;if(function_exists('iconv')&&!is_utf8($L)&&strlen($zd=iconv("windows-1250","utf-8",$L))>strlen($L))$L=$zd;return$L;}function
get_databases($Kb){global$f;$L=get_session("dbs");if($L===null){$J=($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$L=($Kb?slow_query($J):get_vals($J));restart_session();set_session("dbs",$L);stop_session();}return$L;}function
limit($J,$Y,$x,$Nc=0,$Ed=" "){return" $J$Y".($x!==null?$Ed."LIMIT $x".($Nc?" OFFSET $Nc":""):"");}function
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
foreign_keys($S){global$f,$Pc;static$I='`(?:[^`]|``)+`';$L=array();$Ua=$f->result("SHOW CREATE TABLE ".table($S),1);if($Ua){preg_match_all("~CONSTRAINT ($I) FOREIGN KEY \\(((?:$I,? ?)+)\\) REFERENCES ($I)(?:\\.($I))? \\(((?:$I,? ?)+)\\)(?: ON DELETE ($Pc))?(?: ON UPDATE ($Pc))?~",$Ua,$Ac,PREG_SET_ORDER);foreach($Ac
as$_){preg_match_all("~$I~",$_[2],$Jd);preg_match_all("~$I~",$_[5],$Xd);$L[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$Jd[0]),"target"=>array_map('idf_unescape',$Xd[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$L;}function
view($C){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$L=array();foreach(get_rows("SHOW COLLATION")as$M){if($M["Default"])$L[$M["Charset"]][-1]=$M["Collation"];else$L[$M["Charset"]][]=$M["Collation"];}ksort($L);foreach($L
as$w=>$W)asort($L[$w]);return$L;}function
information_schema($h){global$f;return($f->server_info>=5&&$h=="information_schema")||($f->server_info>=5.5&&$h=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
error_line(){global$f;if(preg_match('~ at line ([0-9]+)$~',$f->error,$sd))return$sd[1]-1;}function
create_database($h,$Ka){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($h).($Ka?" COLLATE ".q($Ka):""));}function
drop_databases($Ya){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ya,'idf_escape');}function
rename_database($C,$Ka){if(create_database($C,$Ka)){$td=array();foreach(tables_list()as$S=>$me)$td[]=table($S)." TO ".idf_escape($C).".".table($S);if(!$td||queries("RENAME TABLE ".implode(", ",$td))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$ta="";break;}if($s["type"]=="PRIMARY")$ta=" UNIQUE";}}return" AUTO_INCREMENT$ta";}function
alter_table($S,$C,$m,$Lb,$Oa,$tb,$Ka,$sa,$ad){$ma=array();foreach($m
as$l)$ma[]=($l[1]?($S!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($S!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$ma=array_merge($ma,$Lb);$Md="COMMENT=".q($Oa).($tb?" ENGINE=".q($tb):"").($Ka?" COLLATE ".q($Ka):"").($sa!=""?" AUTO_INCREMENT=$sa":"").$ad;if($S=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$ma)."\n) $Md");if($S!=$C)$ma[]="RENAME TO ".table($C);$ma[]=$Md;return
queries("ALTER TABLE ".table($S)."\n".implode(",\n",$ma));}function
alter_indexes($S,$ma){foreach($ma
as$w=>$W)$ma[$w]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);return
queries("ALTER TABLE ".table($S).implode(",",$ma));}function
truncate_tables($Wd){return
apply_queries("TRUNCATE TABLE",$Wd);}function
drop_views($Be){return
queries("DROP VIEW ".implode(", ",array_map('table',$Be)));}function
drop_tables($Wd){return
queries("DROP TABLE ".implode(", ",array_map('table',$Wd)));}function
move_tables($Wd,$Be,$Xd){$td=array();foreach(array_merge($Wd,$Be)as$S)$td[]=table($S)." TO ".idf_escape($Xd).".".table($S);return
queries("RENAME TABLE ".implode(", ",$td));}function
copy_tables($Wd,$Be,$Xd){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($Wd
as$S){$C=($Xd==DB?table("copy_$S"):idf_escape($Xd).".".table($S));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($S))||!queries("INSERT INTO $C SELECT * FROM ".table($S)))return
false;}foreach($Be
as$S){$C=($Xd==DB?table("copy_$S"):idf_escape($Xd).".".table($S));$Ae=view($S);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ae[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$N=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($N);}function
triggers($S){$L=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($S,"%_\\")))as$M)$L[$M["Trigger"]]=array($M["Timing"],$M["Event"]);return$L;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$me){global$f,$ub,$mc,$oe;$la=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$ne="((".implode("|",array_merge(array_keys($oe),$la)).")\\b(?:\\s*\\(((?:[^'\")]*|$ub)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$I="\\s*(".($me=="FUNCTION"?"":$mc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ne";$Ta=$f->result("SHOW CREATE $me ".idf_escape($C),2);preg_match("~\\(((?:$I\\s*,?)*)\\)\\s*".($me=="FUNCTION"?"RETURNS\\s+$ne\\s+":"")."(.*)~is",$Ta,$_);$m=array();preg_match_all("~$I\\s*,?~is",$_[1],$Ac,PREG_SET_ORDER);foreach($Ac
as$Yc){$C=str_replace("``","`",$Yc[2]).$Yc[3];$m[]=array("field"=>$C,"type"=>strtolower($Yc[5]),"length"=>preg_replace_callback("~$ub~s",'normalize_enum',$Yc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Yc[8] $Yc[7]"))),"null"=>1,"full_type"=>$Yc[4],"inout"=>strtoupper($Yc[1]),"collation"=>strtolower($Yc[9]),);}if($me!="FUNCTION")return
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
set_schema($_d){return
true;}function
create_sql($S,$sa){global$f;$L=$f->result("SHOW CREATE TABLE ".table($S),1);if(!$sa)$L=preg_replace('~ AUTO_INCREMENT=\\d+~','',$L);return$L;}function
truncate_sql($S){return"TRUNCATE ".table($S);}function
use_sql($Xa){return"USE ".idf_escape($Xa);}function
trigger_sql($S,$Pd){$L="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($S,"%_\\")),null,"-- ")as$M)$L.="\n".($Pd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($M["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($M["Trigger"])." $M[Timing] $M[Event] ON ".table($M["Table"])." FOR EACH ROW\n$M[Statement];;\n";return$L;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(preg_match("~binary~",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$L){if(preg_match("~binary~",$l["type"]))$L="UNHEX($L)";if($l["type"]=="bit")$L="CONV($L, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))$L="GeomFromText($L)";return$L;}function
support($Eb){global$f;return!preg_match("~scheme|sequence|type|view_trigger".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|routine|trigger|view":""):"")."~",$Eb);}$v="sql";$oe=array();$Od=array();foreach(array('ÄŒÃ­sla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'DÃ¡tum a Äas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'ReÅ¥azce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Zoznamy'=>array("enum"=>65535,"set"=>64),'BinÃ¡rne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometria'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$W){$oe+=$W;$Od[$w]=array_keys($W);}$ve=array("unsigned","zerofill","unsigned zerofill");$Uc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Vb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Xb=array("avg","count","count distinct","group_concat","max","min","sum");$lb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.0.0";class
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
<tr><th>PouÅ¾Ã­vateÄ¾<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Heslo<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'PrihlÃ¡siÅ¥ sa'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'TrvalÃ© prihlÃ¡senie')."\n";}function
login($zc,$H){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Ud){return
h($Ud["Comment"]!=""?$Ud["Comment"]:$Ud["Name"]);}function
fieldName($l,$E=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Ud,$Q=""){$a=$Ud["Name"];if($Q!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$Q).'">'.'NovÃ¡ poloÅ¾ka'."</a>\n";}function
foreignKeys($S){return
foreign_keys($S);}function
backwardKeys($S,$Td){$L=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($S)."
ORDER BY ORDINAL_POSITION",null,"")as$M)$L[$M["TABLE_NAME"]]["keys"][$M["CONSTRAINT_NAME"]][$M["COLUMN_NAME"]]=$M["REFERENCED_COLUMN_NAME"];foreach($L
as$w=>$W){$C=$this->tableName(table_status($w,true));if($C!=""){$Ad=preg_quote($Td);$Ed="(:|\\s*-)?\\s+";$L[$w]["name"]=(preg_match("(^$Ad$Ed(.+)|^(.+?)$Ed$Ad\$)iu",$C,$_)?$_[2].$_[3]:$C);}else
unset($L[$w]);}return$L;}function
backwardKeysPrint($wa,$M){foreach($wa
as$S=>$va){foreach($va["keys"]as$Ma){$y=ME.'select='.urlencode($S);$q=0;foreach($Ma
as$d=>$W)$y.=where_link($q++,$d,$M[$W]);echo"<a href='".h($y)."'>".h($va["name"])."</a>";$y=ME.'edit='.urlencode($S);foreach($Ma
as$d=>$W)$y.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($M[$W]);echo"<a href='".h($y)."' title='".'NovÃ¡ poloÅ¾ka'."'>+</a> ";}}}function
selectQuery($J){return"<!--\n".str_replace("--","--><!-- ",$J)."\n-->\n";}function
rowDescription($S){foreach(fields($S)as$l){if(preg_match("~varchar|character varying~",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($N,$Nb){$L=$N;foreach($N[0]as$w=>$W){if(list($S,$r,$C)=$this->_foreignColumn($Nb,$w)){$ic=array();foreach($N
as$M)$ic[$M[$w]]=q($M[$w]);$cb=$this->_values[$S];if(!$cb)$cb=get_key_vals("SELECT $r, $C FROM ".table($S)." WHERE $r IN (".implode(", ",$ic).")");foreach($N
as$B=>$M){if(isset($M[$w]))$L[$B][$w]=(string)$cb[$M[$w]];}}}return$L;}function
selectLink($W,$l){}function
selectVal($W,$y,$l){$L=($W===null?"&nbsp;":$W);$y=h($y);if(preg_match('~blob|bytea~',$l["type"])&&!is_utf8($W)){$L=lang(array('%d bajt','%d bajty','%d bajtov'),strlen($W));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$W))$L="<img src='$y' alt='$L'>";}if(like_bool($l)&&$L!="&nbsp;")$L=($W?'yes':'no');if($y)$L="<a href='$y'>$L</a>";if(!$y&&!like_bool($l)&&preg_match('~int|float|double|decimal~',$l["type"]))$L="<div class='number'>$L</div>";elseif(preg_match('~date~',$l["type"]))$L="<div class='datetime'>$L</div>";return$L;}function
editVal($W,$l){if(preg_match('~date|timestamp~',$l["type"])&&$W!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$W);return$W;}function
selectColumnsPrint($O,$e){}function
selectSearchPrint($Y,$e,$t){$Y=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'VyhÄ¾adaÅ¥'."</legend><div>\n";$pc=array();foreach($Y
as$w=>$W)$pc[$W["col"]]=$w;$q=0;$m=fields($_GET["select"]);foreach($e
as$C=>$bb){$l=$m[$C];if(preg_match("~enum~",$l["type"])||like_bool($l)){$w=$pc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'no','yes'),$Y[$w]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$Y[$w]["val"],($l["null"]?0:null))),"</div>\n";unset($e[$C]);}elseif(is_array($D=$this->_foreignKeyOptions($_GET["select"],$C))){if($m[$C]["null"])$D[0]='('.'prÃ¡zdne'.')';$w=$pc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($D,$Y[$w]["val"],true)."</select></div>\n";unset($e[$C]);}}$q=0;foreach($Y
as$W){if(($W["col"]==""||$e[$W["col"]])&&"$W[col]$W[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'kdekoÄ¾vek'.")".optionlist($e,$W["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$W["op"]),"<input type='search' name='where[$q][val]' value='".h($W["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'kdekoÄ¾vek'.")".optionlist($e,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$q][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($E,$e,$t){$Wc=array();foreach($t
as$w=>$s){$E=array();foreach($s["columns"]as$W)$E[]=$e[$W];if(count(array_filter($E,'strlen'))>1&&$w!="PRIMARY")$Wc[$w]=implode(", ",$E);}if($Wc){echo'<fieldset><legend>'.'ZotriediÅ¥'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Wc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($x){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$x),"</div></fieldset>\n";}function
selectLengthPrint($Zd){}function
selectActionPrint($t){echo"<fieldset><legend>".'Akcia'."</legend><div>","<input type='submit' value='".'VypÃ­saÅ¥'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($pb,$e){if($pb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'OdosielateÄ¾'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Predmet'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'VloÅ¾iÅ¥'."'>\n";echo"<p>".'PrÃ­lohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($pb)==1?'<input type="hidden" name="email_field" value="'.h(key($pb)).'">':html_select("email_field",$pb)),"<input type='submit' name='email' value='".'OdoslaÅ¥'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$t){return
array(array(),array());}function
selectSearchProcess($m,$t){$L=array();foreach((array)$_GET["where"]as$w=>$Y){$Ja=$Y["col"];$Sc=$Y["op"];$W=$Y["val"];if(($w<0?"":$Ja).$W!=""){$Pa=array();foreach(($Ja!=""?array($Ja=>$m[$Ja]):$m)as$C=>$l){if($Ja!=""||is_numeric($W)||!preg_match('~int|float|double|decimal~',$l["type"])){$C=idf_escape($C);if($Ja!=""&&$l["type"]=="enum")$Pa[]=(in_array(0,$W)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$W)).")";else{$ae=preg_match('~char|text|enum|set~',$l["type"]);$X=$this->processInput($l,(!$Sc&&$ae&&preg_match('~^[^%]+$~',$W)?"%$W%":$W));$Pa[]=$C.($X=="NULL"?" IS".($Sc==">="?" NOT":"")." $X":(in_array($Sc,$this->operators)||$Sc=="="?" $Sc $X":($ae?" LIKE $X":" IN (".str_replace(",","', '",$X).")")));if($w<0&&$W=="0")$Pa[]="$C IS NULL";}}}$L[]=($Pa?"(".implode(" OR ",$Pa).")":"0");}}return$L;}function
selectOrderProcess($m,$t){$kc=$_GET["index_order"];if($kc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($kc!=""?array($t[$kc]):$t)as$s){if($kc!=""||$s["type"]=="INDEX"){$Zb=array_filter($s["descs"]);$bb=false;foreach($s["columns"]as$W){if(preg_match('~date|timestamp~',$m[$W]["type"])){$bb=true;break;}}$L=array();foreach($s["columns"]as$w=>$W)$L[]=idf_escape($W).(($Zb?$s["descs"][$w]:$bb)?" DESC":"");return$L;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Y,$Nb){if($_POST["email_append"])return
true;if($_POST["email"]){$Dd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Qd=$_POST["email_subject"];$A=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Qd.$A",$Ac);$N=get_rows("SELECT DISTINCT $l".($Ac[1]?", ".implode(", ",array_map('idf_escape',array_unique($Ac[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($Y?" AND ".implode(" AND ",$Y):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($N,$Nb)as$M){$ud=array('{\\'=>'{');foreach($Ac[1]as$W)$ud['{$'."$W}"]=$this->editVal($M[$W],$m[$W]);$ob=$M[$_POST["email_field"]];if(is_mail($ob)&&send_mail($ob,strtr($Qd,$ud),strtr($A,$ud),$_POST["email_from"],$_FILES["email_files"]))$Dd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Bol odoslanÃ½ %d e-mail.','Boli odoslanÃ© %d e-maily.','Bolo odoslanÃ½ch %d e-mailov.'),$Dd));}return
false;}function
selectQueryBuild($O,$Y,$p,$E,$x,$G){return"";}function
messageQuery($J){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$J)."\n-->";}function
editFunctions($l){$L=array();if($l["null"]&&preg_match('~blob~',$l["type"]))$L["NULL"]='prÃ¡zdne';$L[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(preg_match('~date|time~',$l["type"]))$L["now"]='teraz';if(preg_match('~_(md5|sha1)$~i',$l["field"],$_))$L[]=strtolower($_[1]);return$L;}function
editInput($S,$l,$c,$X){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'originÃ¡l'."</i></label> ":"").enum_input("radio",$c,$l,($X||isset($_GET["select"])?$X:0),($l["null"]?"":null));$D=$this->_foreignKeyOptions($S,$l["field"],$X);if($D!==null)return(is_array($D)?"<select$c>".optionlist($D,$X,true)."</select>":"<input value='".h($X)."'$c class='hidden'><input value='".h($D)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($S)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($X?$X:1).'"'.($X?' checked':'')."$c>";$dc="";if(preg_match('~time~',$l["type"]))$dc='HH:MM:SS';if(preg_match('~date|timestamp~',$l["type"]))$dc='d.m.[rrrr]'.($dc?" [$dc]":"");if($dc)return"<input value='".h($X)."'$c> ($dc)";if(preg_match('~_(md5|sha1)$~i',$l["field"]))return"<input type='password' value='".h($X)."'$c>";return'';}function
processInput($l,$X,$o=""){if($o=="now")return"$o()";$L=$X;if(preg_match('~date|timestamp~',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$X,$_))$L=($_["p1"]!=""?$_["p1"]:($_["p2"]!=""?($_["p2"]<70?20:19).$_["p2"]:gmdate("Y")))."-$_[p3]$_[p4]-$_[p5]$_[p6]".end($_);$L=($l["type"]=="bit"&&preg_match('~^[0-9]+$~',$X)?$L:q($L));if($X==""&&like_bool($l))$L="0";elseif($X==""&&($l["null"]||!preg_match('~char|text~',$l["type"])))$L="NULL";elseif(preg_match('~^(md5|sha1)$~',$o))$L="$o($L)";return
unconvert_field($l,$L);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($h){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($S,$Pd,$J){global$f;$K=$f->query($J,1);if($K){while($M=$K->fetch_assoc()){if($Pd=="table"){dump_csv(array_keys($M));$Pd="INSERT";}dump_csv($M);}}}function
dumpFilename($gc){return
friendly_url($gc);}function
dumpHeaders($gc,$Ic=false){$Ab="csv";header("Content-Type: text/csv; charset=utf-8");return$Ab;}function
homepage(){return
true;}function
navigation($Hc){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Hc=="auth"){$Jb=true;foreach((array)$_SESSION["pwds"]as$_e=>$Gd){foreach($Gd[""]as$U=>$H){if($H!==null){if($Jb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Jb=false;}echo"<a href='".h(auth_url($_e,"",$U))."'>".($U!=""?h($U):"<i>".'prÃ¡zdne'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($Hc);if($Hc!="db"&&$Hc!="ns"){$T=table_status('',true);if(!$T)echo"<p class='message'>".'Å½iadne tabuÄ¾ky.'."\n";else$this->tablesPrint($T);}}}function
databasesPrint($Hc){}function
tablesPrint($Wd){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($Wd
as$M){$C=$this->tableName($M);if(isset($M["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($M["Name"])."'".bold($_GET["select"]==$M["Name"]||$_GET["edit"]==$M["Name"])." title='".'VypÃ­saÅ¥ dÃ¡ta'."'>$C</a><br>\n";}}function
_foreignColumn($Nb,$d){foreach((array)$Nb[$d]as$Mb){if(count($Mb["source"])==1){$C=$this->rowDescription($Mb["table"]);if($C!=""){$r=idf_escape($Mb["target"][0]);return
array($Mb["table"],$r,$C);}}}}function
_foreignKeyOptions($S,$d,$X=null){global$f;if(list($Xd,$r,$C)=$this->_foreignColumn(column_foreign_keys($S),$d)){$L=&$this->_values[$Xd];if($L===null){$T=table_status($Xd);$L=($T["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $C FROM ".table($Xd)." ORDER BY 2"));}if(!$L&&$X!==null)return$f->result("SELECT $C FROM ".table($Xd)." WHERE $r = ".q($X));return$L;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($de,$k="",$Ca=array(),$ee=""){global$ba,$ca,$b,$f,$ib,$v;page_headers();$fe=$de.($ee!=""?": $ee":"");$ge=strip_tags($fe.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="sk" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ge,'</title>
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
';if($Ca!==null){$y=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$ib[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$P=(SERVER!=""?h(SERVER):'Server');if($Ca===false)echo"$P\n";else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$P</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ca)))echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ca)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ca
as$w=>$W){$bb=(is_array($W)?$W[1]:h($W));if($bb!="")echo"<a href='".h(ME."$w=").urlencode(is_array($W)?$W[0]:$W)."'>$bb</a> &raquo; ";}}echo"$de\n";}}echo"<h2>$fe</h2>\n";restart_session();page_messages($k);$Ya=&get_session("dbs");if(DB!=""&&$Ya&&!in_array(DB,$Ya,true))$Ya=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($k){$xe=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Gc=$_SESSION["messages"][$xe];if($Gc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Gc)."</div>\n";unset($_SESSION["messages"][$xe]);}if($k)echo"<div class='error'>$k</div>\n";}function
page_footer($Hc=""){global$b,$ie;echo'</div>

';if($Hc!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="OdhlÃ¡siÅ¥" id="logout">
<input type="hidden" name="token" value="',$ie,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Hc);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($V,$De){$zd='';foreach($V
as$W)$zd.=pack('V',$W);if($De)return
substr($zd,0,end($V));return$zd;}function
str2long($zd,$De){$V=array_values(unpack('V*',str_pad($zd,4*ceil(strlen($zd)/4),"\0")));if($De)$V[]=strlen($zd);return$V;}function
xxtea_mx($He,$Z,$Sd,$oc){return
int32((($He>>5&0x7FFFFFF)^$Z<<2)+(($Z>>3&0x1FFFFFFF)^$He<<4))^int32(($Sd^$Z)+($oc^$He));}function
encrypt_string($Nd,$w){if($Nd=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($Nd,true);$B=count($V)-1;$He=$V[$B];$Z=$V[0];$ld=floor(6+52/($B+1));$Sd=0;while($ld-->0){$Sd=int32($Sd+0x9E3779B9);$kb=$Sd>>2&3;for($F=0;$F<$B;$F++){$Z=$V[$F+1];$Jc=xxtea_mx($He,$Z,$Sd,$w[$F&3^$kb]);$He=int32($V[$F]+$Jc);$V[$F]=$He;}$Z=$V[0];$Jc=xxtea_mx($He,$Z,$Sd,$w[$F&3^$kb]);$He=int32($V[$B]+$Jc);$V[$B]=$He;}return
long2str($V,false);}function
decrypt_string($Nd,$w){if($Nd=="")return"";if(!$w)return
false;$w=array_values(unpack("V*",pack("H*",md5($w))));$V=str2long($Nd,false);$B=count($V)-1;$He=$V[$B];$Z=$V[0];$ld=floor(6+52/($B+1));$Sd=int32($ld*0x9E3779B9);while($Sd){$kb=$Sd>>2&3;for($F=$B;$F>0;$F--){$He=$V[$F-1];$Jc=xxtea_mx($He,$Z,$Sd,$w[$F&3^$kb]);$Z=int32($V[$F]-$Jc);$V[$F]=$Z;}$He=$V[$B];$Jc=xxtea_mx($He,$Z,$Sd,$w[$F&3^$kb]);$Z=int32($V[0]-$Jc);$V[0]=$Z;$Sd=int32($Sd-0x9E3779B9);}return
long2str($V,true);}$f='';$ac=$_SESSION["token"];if(!$ac)$_SESSION["token"]=rand(1,1e6);$ie=get_token();$bd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($w)=explode(":",$W);$bd[$w]=$W;}}$ra=$_POST["auth"];if($ra){session_regenerate_id();$i=$ra["driver"];$P=$ra["server"];$U=$ra["username"];$H=$ra["password"];$h=$ra["db"];set_password($i,$P,$U,$H);$_SESSION["db"][$i][$P][$U][$h]=true;if($ra["permanent"]){$w=base64_encode($i)."-".base64_encode($P)."-".base64_encode($U)."-".base64_encode($h);$id=$b->permanentLogin(true);$bd[$w]="$w:".base64_encode($id?encrypt_string($H,$id):"");cookie("adminer_permanent",implode(" ",$bd));}if(count($_POST)==1||DRIVER!=$i||SERVER!=$P||$_GET["username"]!==$U||DB!=$h)redirect(auth_url($i,$P,$U,$h));}elseif($_POST["logout"]){if($ac&&!verify_token()){page_header('OdhlÃ¡siÅ¥','NeplatnÃ½ token CSRF. OdoÅ¡lite formulÃ¡r znova.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'OdhlÃ¡senie prebehlo v poriadku.');}}elseif($bd&&!$_SESSION["pwds"]){session_regenerate_id();$id=$b->permanentLogin();foreach($bd
as$w=>$W){list(,$Fa)=explode(":",$W);list($_e,$P,$U,$h)=array_map('base64_decode',explode("-",$w));set_password($_e,$P,$U,decrypt_string(base64_decode($Fa),$id));$_SESSION["db"][$_e][$P][$U][$h]=true;}}function
unset_permanent(){global$bd;foreach($bd
as$w=>$W){list($_e,$P,$U,$h)=array_map('base64_decode',explode("-",$w));if($_e==DRIVER&&$P==SERVER&&$U==$_GET["username"]&&$h==DB)unset($bd[$w]);}cookie("adminer_permanent",implode(" ",$bd));}function
auth_error($zb=null){global$f,$b,$ac;$Hd=session_name();$k="";if(!$_COOKIE[$Hd]&&$_GET[$Hd]&&ini_bool("session.use_only_cookies"))$k='Session premennÃ© musia byÅ¥ povolenÃ©.';elseif(isset($_GET["username"])){if(($_COOKIE[$Hd]||$_GET[$Hd])&&!$ac)$k='Session vyprÅ¡ala, prihlÃ¡ste sa prosÃ­m znova.';else{$H=get_password();if($H!==null){$k=h($zb?$zb->getMessage():(is_string($f)?$f:'NeplatnÃ© prihlasovacie Ãºdaje.'));if($H===false)$k.='<br>'.sprintf('Master password expired. <a href="http://www.adminer.org/en/extension/" target="_blank">Implement</a> %s method to make it permanent.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$Zc=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$Zc["lifetime"]);page_header('PrihlÃ¡siÅ¥ sa',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($_e,$P,$U,$H){$_SESSION["pwds"][$_e][$P][$U]=($_COOKIE["adminer_key"]?array(encrypt_string($H,$_COOKIE["adminer_key"])):$H);}function
get_password(){$L=get_session("pwds");if(is_array($L))$L=($_COOKIE["adminer_key"]?decrypt_string($L[0],$_COOKIE["adminer_key"]):false);return$L;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Å½iadne rozÅ¡Ã­renie',sprintf('Nie je dostupnÃ© Å¾iadne z podporovanÃ½ch rozÅ¡Ã­renÃ­ (%s).',implode(", ",$fd)),false);page_footer("auth");exit;}$f=connect();}if(is_string($f)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$i=new
Min_Driver($f);if($ra&&$_POST["token"])$_POST["token"]=$ie;$k='';if($_POST){if(!verify_token()){$lc="max_input_vars";$Ec=ini_get($lc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$w){$W=ini_get($w);if($W&&(!$Ec||$W<$Ec)){$lc=$w;$Ec=$W;}}}$k=(!$_POST["token"]&&$Ec?sprintf('Bol prekroÄenÃ½ maximÃ¡lny poÄet povolenÃ½ch polÃ­. ZvÃ½Å¡te prosÃ­m %s.',"'$lc'"):'NeplatnÃ½ token CSRF. OdoÅ¡lite formulÃ¡r znova.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('PrÃ­liÅ¡ veÄ¾kÃ© POST dÃ¡ta. ZmenÅ¡ite dÃ¡ta alebo zvÃ½Å¡te hodnotu konfiguraÄej direktÃ­vy %s.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'You can upload a big SQL file via FTP and import it from server.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$f->select_db($b->database());function
email_header($bc){return"=?UTF-8?B?".base64_encode($bc)."?=";}function
send_mail($ob,$Qd,$A,$Tb="",$Hb=array()){$j=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$A=str_replace("\n",$j,wordwrap(str_replace("\r","","$A\n")));$Ba=uniqid("boundary");$qa="";foreach((array)$Hb["error"]as$w=>$W){if(!$W)$qa.="--$Ba$j"."Content-Type: ".str_replace("\n","",$Hb["type"][$w]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Hb["name"][$w])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Hb["tmp_name"][$w])),76,$j).$j;}$ya="";$cc="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$Ba--$j";$ya="--$Ba$j$cc$j$j";$cc="Content-Type: multipart/mixed; boundary=\"$Ba\"";}$cc.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Tb?$j."From: ".str_replace("\n","",$Tb):"");return
mail($ob,email_header($Qd),$ya.$A.$qa,$cc);}function
like_bool($l){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$l["full_type"]);}$Pc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$ib[DRIVER]='PrihlÃ¡siÅ¥ sa';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$f->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$Y=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$we=(isset($_GET["select"])?$_POST["edit"]:$Y);foreach($m
as$C=>$l){if(!isset($l["privileges"][$we?"update":"insert"])||$b->fieldName($l)=="")unset($m[$C]);}if($_POST&&!$k&&!isset($_GET["select"])){$z=$_POST["referer"];if($_POST["insert"])$z=($we?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$z))$z=ME."select=".urlencode($a);$t=indexes($a);$re=unique_array($_GET["where"],$t);$od="\nWHERE $Y";if(isset($_POST["delete"]))queries_redirect($z,'PoloÅ¾ka bola vymazanÃ¡.',$i->delete($a,$od,!$re));else{$Q=array();foreach($m
as$C=>$l){$W=process_input($l);if($W!==false&&$W!==null)$Q[idf_escape($C)]=$W;}if($we){if(!$Q)redirect($z);queries_redirect($z,'PoloÅ¾ka bola aktualizovanÃ¡.',$i->update($a,$Q,$od,!$re));if(is_ajax()){page_headers();page_messages($k);exit;}}else{$K=$i->insert($a,$Q);$uc=($K?last_id():0);queries_redirect($z,sprintf('PoloÅ¾ka%s bola vloÅ¾enÃ¡.',($uc?" $uc":"")),$K);}}}$Vd=$b->tableName(table_status1($a,true));page_header(($we?'UpraviÅ¥':'VloÅ¾iÅ¥'),$k,array("select"=>array($a,$Vd)),$Vd);$M=null;if($_POST["save"])$M=(array)$_POST["fields"];elseif($Y){$O=array();foreach($m
as$C=>$l){if(isset($l["privileges"]["select"])){$oa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$oa="''";if($v=="sql"&&preg_match("~enum|set~",$l["type"]))$oa="1*".idf_escape($C);$O[]=($oa?"$oa AS ":"").idf_escape($C);}}$M=array();if(!support("table"))$O=array("*");if($O){$K=$i->select($a,$O,array($Y),$O,array(),(isset($_GET["select"])?2:1),0);$M=$K->fetch_assoc();if(isset($_GET["select"])&&(!$M||$K->fetch_assoc()))$M=null;}}if(!support("table")&&!$m){if(!$Y){$M=reset(get_rows("SELECT * FROM ".table($a)." LIMIT 1"));if(!$M)$M=array("itemName()"=>"");}if($M){foreach($M
as$w=>$W){if(!$Y)$M[$w]=null;$m[$w]=array("field"=>$w,"null"=>($w!="itemName()"),"auto_increment"=>($w=="itemName()"));}}}if($M===false)echo"<p class='error'>".'Å½iadne riadky.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'You have no privileges to update this table.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$C=>$l){echo"<tr><th>".$b->fieldName($l);$ab=$_GET["set"][bracket_escape($C)];if($ab===null){$ab=$l["default"];if($l["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$ab,$sd))$ab=$sd[1];}$X=($M!==null?($M[$C]!=""&&$v=="sql"&&preg_match("~enum|set~",$l["type"])?(is_array($M[$C])?array_sum($M[$C]):+$M[$C]):$M[$C]):(!$we&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$ab)));if(!$_POST["save"]&&is_string($X))$X=$b->editVal($X,$l);$o=($_POST["save"]?(string)$_POST["function"][$C]:($we&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:($X!==null?'':'NULL'))));if(preg_match("~time~",$l["type"])&&$X=="CURRENT_TIMESTAMP"){$X="";$o="now";}input($l,$X,$o);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' value='".h($_POST["field_keys"][0])."'>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array()),$_POST["field_funs"][0])."<td><input name='field_vals[]' value='".h($_POST["field_vals"][0])."'>"."\n";echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'UloÅ¾iÅ¥'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($we?'UloÅ¾iÅ¥ a pokraÄovaÅ¥ v ÃºpravÃ¡ch'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'UloÅ¾iÅ¥ a vloÅ¾iÅ¥ ÄalÅ¡Ã­')."' title='Ctrl+Shift+Enter'>\n";}echo($we?"<input type='submit' name='delete' value='".'ZmazaÅ¥'."'".confirm().">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ie,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$T=table_status1($a);$t=indexes($a);$m=fields($a);$Pb=column_foreign_keys($a);$Oc="";if($T["Oid"]){$Oc=($v=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Oc));}parse_str($_COOKIE["adminer_import"],$ia);$yd=array();$e=array();$Zd=null;foreach($m
as$w=>$l){$C=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$C!=""){$e[$w]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($l))$Zd=$b->selectLengthProcess();}$yd+=$l["privileges"];}list($O,$p)=$b->selectColumnsProcess($e,$t);$u=count($p)<count($O);$Y=$b->selectSearchProcess($m,$t);$E=$b->selectOrderProcess($m,$t);$x=$b->selectLimitProcess();$Tb=($O?implode(", ",$O):"*".($Oc?", $Oc":"")).convert_fields($e,$m,$O)."\nFROM ".table($a);$Wb=($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($E?"\nORDER BY ".implode(", ",$E):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$se=>$M){$oa=convert_field($m[key($M)]);echo$f->result("SELECT".limit($oa?$oa:idf_escape(key($M))." FROM ".table($a)," WHERE ".where_check($se,$m).($Y?" AND ".implode(" AND ",$Y):"").($E?" ORDER BY ".implode(", ",$E):""),1));}exit;}if($_POST&&!$k){$Fe=$Y;if(!$_POST["all"]&&is_array($_POST["check"]))$Fe[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Fe=($Fe?"\nWHERE ".implode(" AND ",$Fe):"");$hd=$ue=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$hd=array_flip($s["columns"]);$ue=($O?$hd:array());break;}}foreach((array)$ue
as$w=>$W){if(in_array(idf_escape($w),$O))unset($ue[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ue===array())$J="SELECT $Tb$Fe$Wb";else{$qe=array();foreach($_POST["check"]as$W)$qe[]="(SELECT".limit($Tb,"\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($W,$m).$Wb,1).")";$J=implode(" UNION ALL ",$qe);}$b->dumpData($a,"table",$J);exit;}if(!$b->selectEmailProcess($Y,$Pb)){if($_POST["save"]||$_POST["delete"]){$K=true;$ja=0;$Q=array();if(!$_POST["delete"]){foreach($e
as$C=>$W){$W=process_input($m[$C]);if($W!==null&&($_POST["clone"]||$W!==false))$Q[idf_escape($C)]=($W!==false?$W:idf_escape($C));}}if($_POST["delete"]||$Q){if($_POST["clone"])$J="INTO ".table($a)." (".implode(", ",array_keys($Q)).")\nSELECT ".implode(", ",$Q)."\nFROM ".table($a);if($_POST["all"]||($ue===array()&&is_array($_POST["check"]))||$u){$K=($_POST["delete"]?$i->delete($a,$Fe):($_POST["clone"]?queries("INSERT $J$Fe"):$i->update($a,$Q,$Fe)));$ja=$f->affected_rows;}else{foreach((array)$_POST["check"]as$W){$Ee="\nWHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($W,$m);$K=($_POST["delete"]?$i->delete($a,$Ee,1):($_POST["clone"]?queries("INSERT".limit1($J,$Ee)):$i->update($a,$Q,$Ee)));if(!$K)break;$ja+=$f->affected_rows;}}}$A=sprintf('%d poloÅ¾iek bolo ovplyvnenÃ½ch.',$ja);if($_POST["clone"]&&$K&&$ja==1){$uc=last_id();if($uc)$A=sprintf('PoloÅ¾ka%s bola vloÅ¾enÃ¡.'," $uc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$A,$K);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+kliknite na polÃ­Äko, ktorÃ© chcete zmeniÅ¥.';else{$K=true;$ja=0;foreach($_POST["val"]as$se=>$M){$Q=array();foreach($M
as$w=>$W){$w=bracket_escape($w,1);$Q[idf_escape($w)]=(preg_match('~char|text~',$m[$w]["type"])||$W!=""?$b->processInput($m[$w],$W):"NULL");}$K=$i->update($a,$Q," WHERE ".($Y?implode(" AND ",$Y)." AND ":"").where_check($se,$m),!($u||$ue===array())," ");if(!$K)break;$ja+=$f->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d poloÅ¾iek bolo ovplyvnenÃ½ch.',$ja),$K);}}elseif(!is_string($Fb=get_file("csv_file",true)))$k=upload_error($Fb);elseif(!preg_match('~~u',$Fb))$k='File must be in UTF-8 encoding.';else{cookie("adminer_import","output=".urlencode($ia["output"])."&format=".urlencode($_POST["separator"]));$K=true;$Ma=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fb,$Ac);$ja=count($Ac[0]);$i->begin();$Ed=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$N=array();foreach($Ac[0]as$w=>$W){preg_match_all("~((?>\"[^\"]*\")+|[^$Ed]*)$Ed~",$W.$Ed,$Bc);if(!$w&&!array_diff($Bc[1],$Ma)){$Ma=$Bc[1];$ja--;}else{$Q=array();foreach($Bc[1]as$q=>$Ja)$Q[idf_escape($Ma[$q])]=($Ja==""&&$m[$Ma[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$N[]=$Q;}}$K=(!$N||$i->insertUpdate($a,$N,$hd));if($K)$i->commit();queries_redirect(remove_from_uri("page"),lang(array('Bol importovanÃ½ %d zÃ¡znam.','Boli importovanÃ© %d zÃ¡znamy.','Bolo importovanÃ½ch %d zÃ¡znamov.'),$ja),$K);$i->rollback();}}}$Vd=$b->tableName($T);if(is_ajax()){page_headers();ob_start();}else
page_header('VypÃ­saÅ¥'.": $Vd",$k);$Q=null;if(isset($yd["insert"])||!support("table")){$Q="";foreach((array)$_GET["where"]as$W){if(count($Pb[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!preg_match('~[_%]~',$W["val"]))))$Q.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}$b->selectLinks($T,$Q);if(!$e&&support("table"))echo"<p class='error'>".'TabuÄ¾ku sa nepodarilo vypÃ­saÅ¥'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($O,$e);$b->selectSearchPrint($Y,$e,$t);$b->selectOrderPrint($E,$e,$t);$b->selectLimitPrint($x);$b->selectLengthPrint($Zd);$b->selectActionPrint($t);echo"</form>\n";$G=$_GET["page"];if($G=="last"){$n=$f->result(count_rows($a,$Y,$u,$p));$G=floor(max(0,$n-1)/$x);}$Bd=$O;if(!$Bd){$Bd[]="*";if($Oc)$Bd[]=$Oc;}$Sa=convert_fields($e,$m,$O);if($Sa)$Bd[]=substr($Sa,2);$K=$i->select($a,$Bd,$Y,$p,$E,$x,$G);if(!$K)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$G)$K->seek($x*$G);$qb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$N=array();while($M=$K->fetch_assoc()){if($G&&$v=="oracle")unset($M["RNUM"]);$N[]=$M;}if($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql")$n=$f->result(" SELECT FOUND_ROWS()");if(!$N)echo"<p class='message'>".'Å½iadne riadky.'."\n";else{$xa=$b->backwardKeys($a,$Vd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$p&&$O?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Kc=array();$Vb=array();reset($O);$qd=1;foreach($N[0]as$w=>$W){if($w!=$Oc){$W=$_GET["columns"][key($O)];$l=$m[$O?($W?$W["col"]:current($O)):$w];$C=($l?$b->fieldName($l,$qd):($W["fun"]?"*":$w));if($C!=""){$qd++;$Kc[$w]=$C;$d=idf_escape($w);$fc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$bb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($fc.($E[0]==$d||$E[0]==$w||(!$E&&$u&&$p[0]==$d)?$bb:'')).'">';echo
apply_sql_function($W["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($fc.$bb)."' title='".'zostupne'."' class='text'> â†“</a>";if(!$W["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'VyhÄ¾adaÅ¥'.'" class="text jsonly"> =</a>';echo"</span>";}$Vb[$w]=$W["fun"];next($O);}}$xc=array();if($_GET["modify"]){foreach($N
as$M){foreach($M
as$w=>$W)$xc[$w]=max($xc[$w],min(40,strlen(utf8_decode($W))));}}echo($xa?"<th>".'VzÅ¥ahy':"")."</thead>\n";if(is_ajax()){if($x%2==1&&$G%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($N,$Pb)as$B=>$M){$re=unique_array($N[$B],$t);if(!$re){$re=array();foreach($N[$B]as$w=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$re[$w]=$W;}}$se="";foreach($re
as$w=>$W){if(strlen($W)>64&&($v=="sql"||$v=="pgsql")){$w="MD5(".(strpos($w,'(')?$w:idf_escape($w)).")";$W=md5($W);}$se.="&".($W!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($W):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$p&&$O?"":"<td>".checkbox("check[]",substr($se,1),in_array(substr($se,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($u||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$se)."'>".'upraviÅ¥'."</a>"));foreach($M
as$w=>$W){if(isset($Kc[$w])){$l=$m[$w];if($W!=""&&(!isset($qb[$w])||$qb[$w]!=""))$qb[$w]=(is_mail($W)?$Kc[$w]:"");$y="";if(preg_match('~blob|bytea|raw|file~',$l["type"])&&$W!="")$y=ME.'download='.urlencode($a).'&field='.urlencode($w).$se;if(!$y){foreach((array)$Pb[$w]as$Ob){if(count($Pb[$w])==1||end($Ob["source"])==$w){$y="";foreach($Ob["source"]as$q=>$Jd)$y.=where_link($q,$Ob["target"][$q],$N[$B][$Jd]);$y=($Ob["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Ob["db"]),ME):ME).'select='.urlencode($Ob["table"]).$y;if(count($Ob["source"])==1)break;}}}if($w=="COUNT(*)"){$y=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$re))$y.=where_link($q++,$V["col"],$V["val"],$V["op"]);}foreach($re
as$oc=>$V)$y.=where_link($q++,$oc,$V);}$W=select_value($W,$y,$l,$Zd);$r=h("val[$se][".bracket_escape($w)."]");$X=$_POST["val"][$se][bracket_escape($w)];$mb=!is_array($M[$w])&&is_utf8($W)&&$N[$B][$w]==$M[$w]&&!$Vb[$w];$Yd=preg_match('~text|lob~',$l["type"]);if(($_GET["modify"]&&$mb)||$X!==null){$Yb=h($X!==null?$X:$M[$w]);echo"<td>".($Yd?"<textarea name='$r' cols='30' rows='".(substr_count($M[$w],"\n")+1)."'>$Yb</textarea>":"<input name='$r' value='$Yb' size='$xc[$w]'>");}else{$_c=strpos($W,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($_c?2:($Yd?1:0)).($mb?"":", '".h('Pre zmenu tejto hodnoty pouÅ¾ite odkaz upraviÅ¥.')."'").");\">$W";}}}if($xa)echo"<td>";$b->backwardKeysPrint($xa,$N[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($N||$G)&&!is_ajax()){$yb=true;if($_GET["page"]!="last"){if(!+$x)$n=count($N);elseif($v!="sql"||!$u){$n=($u?false:found_rows($T,$Y));if($n<max(1e4,2*($G+1)*$x))$n=reset(slow_query(count_rows($a,$Y,$u,$p)));else$yb=false;}}if(+$x&&($n===false||$n>$x||$G)){echo"<p class='pages'>";$Cc=($n===false?$G+(count($N)>=$x?2:1):floor(($n-1)/$x));if(support("table")){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'StrÃ¡nka'."', '".($G+1)."'), event); return false;\">".'StrÃ¡nka'."</a>:",pagination(0,$G).($G>5?" ...":"");for($q=max(1,$G-4);$q<min($Cc,$G+5);$q++)echo
pagination($q,$G);if($Cc>0){echo($G+5<$Cc?" ...":""),($yb&&$n!==false?pagination($Cc,$G):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Cc'>".'poslednÃ½'."</a>");}echo(($n===false?count($N)+1:$n-$G*$x)>$x?' <a href="'.h(remove_from_uri("page")."&page=".($G+1)).'" onclick="return !selectLoadMore(this, '.(+$x).', \''.'Loading'.'...\');">'.'Load more data'.'</a>':'');}else{echo'StrÃ¡nka'.":",pagination(0,$G).($G>1?" ...":""),($G?pagination($G,$G):""),($Cc>$G?pagination($G+1,$G).($Cc>$G+1?" ...":""):"");}}echo"<p class='count'>\n",($n!==false?"(".($yb?"":"~ ").lang(array('%d riadok','%d riadky','%d riadkov'),$n).") ":"");$gb=($yb?"":"~ ").$n;echo
checkbox("all",1,0,'celÃ½ vÃ½sledok',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$gb' : checked); selectCount('selected2', this.checked || !checked ? '$gb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="UloÅ¾iÅ¥"',($_GET["modify"]?'':' title="'.'Ctrl+kliknite na polÃ­Äko, ktorÃ© chcete zmeniÅ¥.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="UpraviÅ¥">
<input type="submit" name="clone" value="KlonovaÅ¥">
<input type="submit" name="delete" value="ZmazaÅ¥"',confirm(),'>
</div></fieldset>
';}$Qb=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Qb['sql']);break;}}if($Qb){print_fieldset("export",'Export'." <span id='selected2'></span>");$Xc=$b->dumpOutput();echo($Xc?html_select("output",$Xc,$ia["output"])." ":""),html_select("format",$Qb,$ia["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$p&&$O?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$N);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ia["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($qb,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$ie'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$f->query("KILL ".(+$_POST["kill"]));elseif(list($S,$r,$C)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$x=11;$K=$f->query("SELECT $r, $C FROM ".table($S)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$r = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $x");for($q=1;($M=$K->fetch_row())&&$q<$x;$q++)echo"<a href='".h(ME."edit=".urlencode($S)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($M[0]))."'>".h($M[1])."</a><br>\n";if($M)echo"...\n";}exit;}else{page_header('Server',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'VyhÄ¾adaÅ¥ dÃ¡ta v tabuÄ¾kÃ¡ch'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'VyhÄ¾adaÅ¥'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'TabuÄ¾ka'.'<td>'.'Riadky'."</thead>\n";foreach(table_status()as$S=>$M){$C=$b->tableName($M);if(isset($M["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$S,in_array($S,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($S)."'>$C</a>";$W=number_format($M["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($S)."'>".($M["Engine"]=="InnoDB"&&$W?"~ $W":$W)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();