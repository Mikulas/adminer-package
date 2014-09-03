<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.2
*/error_reporting(6135);$Ib=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Ib||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$xe=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($xe)$$V=$xe;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuD‚8÷=ë­ª-v´®4›dÃD’yI‚Ò¤­¼_hŞÀ'z’VÍ¶• Ü6€Yz:íQc³Ú²”õwŒª0ÀÅ]xrÄ!å@¶½/-¡*Ì5©«¤I.±]ĞYxuÁİé½o&Ö:Pß|CyÖ²wÖûÇÀ@L¯´Õ£GfØ†å¯)^¤Æ¢+–ÍQ5‚ºÀÆL4\$Mpo‰0i¦\rÛ»Ïk­ô4*w7•¯S'’—Zİ„nAb¨!1‡)ñoİ–9öc\0bÊïo-~2w4X,,…¶8m'™›˜ìªY•ƒFH–Á3GqQZ-l™\0ãÊwìe‹d5¥¢»ÁğéiÏ.«–™dã)\\çh~\\WÌ€æ™LÃ¡¸ÜĞmgòu«2lbš•àZçCĞ-6Èê–dœl£¨b\re×Mu§gra6ZD†­ƒUÊ™!K-œŸ0Ó9–beH”\"ê×[JË'¨¾»Z¼¡oµaº)‹XÉÆƒ&—tÒ8ºì€GZ.®ÅÚ˜Âë+³lr£ÊíÌ¯]kÙ#£Àj-§¹ëúW´ÉP,¡àè>@ä` \rc3\"\\ÒŠq2‰z›âê@Mï¾poà‘ª0p­ò¤d~OÙ™Ç¦ö…½¸]¡´aï»;IxÆùxh°aÌÍ‡ò¬0Nàâ~gâï?	€äLŒcuÍäw”£}úŠªt™æ<±…¥ÃÅ·¼qS’vÚ°@gsW}òL¸(kyÈ¹/6»CĞ8\rŒ‡°]\\£çLUöŞ^•nqiQÏn™T>A9\"ô´—kFôÕÚú.*îß¹²¹íßT†òóCµ‘r?:ÀÜ„üwMß,î\$m|‘xîm‘øÿ“¡÷©Bmu	®ğ=é[ˆÆ ynÃ'÷½h¾ûÚì@óŞCœv¥S2dSVÑ ¨(‡ñ\">H‰{¾-Gú");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀŞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ğ@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^ò¨]\rÃ°ø\\7C8_Dƒp^ÂP é\0Ì± w &c4^RãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpŞĞ“Àæ:)\\;¯C ĞÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„WL\\PŞ®#r'b–]^2İØääCÍ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ĞPQƒá0³ç„÷ô?á‘*—\rØb.Å.ğû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ĞQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØİ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ŞÚÚ…ŞÊìò¸èÜ\r#ê…aväİƒàö>…2’1ÁN(Èğ<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤şäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLĞ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.¾øA¡I	\r±-%Îém-Ïe©·\0†ÈÓ/DZ !Pöxƒ H´6`X„b*g4E¬Õ§…\"	PhÄÕiPÂàB\0ı‡ÀÈÁ›œeT†r°YJé\\+ˆ­‚¡ààäĞ:>&-Ÿ#¦€dÚy{IotÄ?CO ß›õ&qñ™\0ædùhGº;‡BÙ	B,\r)Ô4ƒÈíq#\rÁM&°VÄX!“éU·àÒáXô«z!å¤Å0æC’Ë.J964±É	#Œ8àÄ¦‰Ù“3jEÊ×ÿa #Àô	agæ 9ƒ¹1&¤à<l¡µÊÊ)H%4¨cÓH™½#:¥p]Ó°Âéàåy(ƒPraÁ˜,ÛşŸs¾rOˆ[¡Û®.NÔ°Ìø5(a#(Ê=˜É\$xy’\$È¡Q¬w¦üuœ4zr‘ùÏ:WT_(…¤ÁX70IÑH*ŒIè«—§I(1Ÿ%O^ˆ\"0{N'ÌŒ›aÒŒÑ²9GC”—K’e‚†¤êá¸¤²R†©NIh\0‚HŒ-†©äò“i¥§êÀˆÃ¥ciÓ&eCÉ™‚© eêjôÆj~1\r@éıÛÃ6\r‡Š€ÚEÅ\n ó6‡6wg=%H\n¥Óñ:¢ÉÇ5á|'›Uê¢Mê—8²ò†“JPÓUÚú¯”ÕIĞIã<É)„“ZœÙ8:í°d”ğéürşŞÕ!Á¦h.‚-\rÃZ¹ä9B¯Ãz´MÅ®W3tîªs«¨Â—²Á°ÇÇb—LcB íòVBtúC›ßvp.¤Ï[R^oŒ	+x>ù*Ããªv¨Ş9ßrN¥H!4vL1ğğÀßÁmÁ˜:áÜThGƒaŞ\"÷5ƒÛaëğ3ĞBÈ¢Ûˆ«5a­-42bšÑZ¨ÃpnO©şA\rŸ†`Ïlfíœ5Çğä>Õ™¡†[«#®ÍêÜp'Ş\rV\0®Ì/b/¾93ÖC‡Ö=•™às4¡˜:°ÊUè(9.Æ†G3›'Û†ˆ“ÏI©nXvpŸàÿ=X[nAÑ¸7QÒUKÚ‰¤ t¾O²Ó^dtzÔqåhbØ‹,š‹Ç÷ÒU8em¤ª“¢ÓÊ‰5¡ì­ ÉØ¼èk`Ks¦[¶7ßLÊ9y%q¶~¶ÿ#@VÌ¥¨Ö.fUš\$ŒD2f~¥:Ô3’PÄÃ^ŸzkA¶fÌÈ¡âzq¼?ªÛbš¡Œ‰Q2'(™]o%wgšB?´*é«2ÃÜ×OX±{\$ØDÈbf‡øH\n4&0Lƒs\0íHbwØ.à3p@{¼èDË ê8Ó…lW,²!Á['[Ú^1BL]„:‡0¦äTV¶|9Û°ûoy¥ÀjopÅå@P	¨fœğæ¼Ø9	À£¢[ MÓCß@¡˜°î‰‚‰céêìú”¾™×j*-E±y¯PÜºfâıq¦GÃ¨ODNÏ£M@ÃyLeç—©ÖKòø	X¿Ü(0›œRØfÑ &u0è\nü@oñQ +©Ğ¼F\$›ûÄø³åC\"šì ×¬Õ,ÑfHáÜÑ‡eÌ·mÉı¼7w'È‰?¦&~ †z«¢hÃ“Qüè¹7\0‚k‚•Ñ€Šo¯™Yqğhğ¦/dó»î¨F8­9¦}2uóñlÍfS{íâß£÷¡Ê,I¾°‹­]ıòÿ,ˆF›ûBn­¡ÿ[=¢ósIy\$æà©@ä©>´ xn\n¦¤íJ\$°§,ç©òµh¸'tà¶ Z@º€¶ŒÀVâ°€L\"Ù	äp&Ò4àğN úÔé*@òİø£M&¨í*’°\0„ZÔ\r\r+Lµ\rU\$a)åBmˆ¿ğ3p:·P@+0FGğz§'.ë¥?\niò,ä`-cxş/4ó¾‘Fi%dÆ\0Pıkìk«¨/ÆÌÀòVeÌ}êÀÅÚƒ€ò‡ãN4@bg2èÀ]ô> z `Æ¢<PÜSn4úàúöMÀnÚH€ÑfäFÀ\$ğªÆ°ÂêÎ¬LXlîlğR?X¡0ÔJ\rÀšˆÄvp´šk\"ğ€Ü³ô¨j‹¢u\0¸ğË=\0k@Mp°|Ô€Uà_@ÚLKXzqhµñb\$‹j4·C`+Ñ¢s\"Ö­İ@Ë`P²ÆF#à¯\n,¨jø(OÀ‰\0[Q(-ƒ2§p¶RXZ\0íĞd¨úÿññ1‚“±ñªP²1ğ0@Ó-VïËå]\nÈ‚±\0.œn°nbu!Ñ>År\"#D²\rŸ-¢fib4RÔIÎ\$²4ÅL`tÒ0:¢d;ò!ò8ú\näıs&lá\"*ÌFB%\r'´»ƒp‰°êø%‡ş]¢8v°àéÌr]¨ˆ ëÌOkÓ(§š6£ö]¬’–c\$†oö’ªL€óäï€XrG Ê!+Ï*ëĞznêÕ’¾1€\\\rNZ\r\0¨?Œ*±.Š.’û/óugº\"ÚïÀ‡(nøéÒIü‘2Ğ÷±W§Ô|ö’&º¬0S¿í,¾ÓFÂD6ˆrcÒà.€İ0²ï'¨Nsf ÉäÈfdÛ.!5©šHIp—L‰8R|‡+zÃí¬·­«,òÓ+‘2k#4nğÑRé2mX¿\"Rˆ]\0S,,ÂÌlÊÌî5¬8®@ó@ïè%.‚°•l95:ÀNâDğ ÖR\n€Ò#ˆ€zq6Èù7\0Úz²î4n‘Ôlî@QrØº0ç<ï2¬ÏcD€a<C3‘`péÒ…;Ó'.t.Î÷/&ìæ\r5CPó2à{CÂÆ:ÇVåâDQcVîTõÑ]GNb`Oê03[¢gIÿF	F–>Í3B¾h< ø3¢\\\r”—Gtš³ŞÑhJlÒÅ\"-üoÎ8®<AîCHíú‘@R…´Â¼ˆ3L‰LÉM4& Óã.ôŞ¾É°0²~~ò¶6Ó™1åÖ]¬ÄASÊÍ\0L3£B ïBì.Ò£ÄIv}åĞ\nbè(2ó9fo9µ6ãrÚÎÜãOº”btn	¨Ø¦ô™¦şº­^&p&(¼à¼ãPŸ¢¹IÇşò.kUT¥)dKƒ\n‰iêmMğ¶õ†]àÏXÉj–SÒMm]X€Î	 ÂÔmRÕÄõ[KJ¼ÕÂj\r¯x']òáu¾œÅ5\nMq=#FÀN8ZUõ›XµÖé}^UóYõÕ•ÿ[ÀÔ`|DÕø15¿[iÏ[­qZÖ	a‰JfeH\r€à!Ål=RÏ\0ëbï¥U®cÅ4Xò\\7Ldg*•ĞrÖhgO>£Jr¯Ïd½eÈ–W]G'pªEmt {@Â\rU²h\"¥èQ ÅV€Ö9c¶c‹\"& â7E&aË V€°àˆ”€à'–¦¦À~:Ã±k ™kvº¶¾µ RE`CÅ€#|A\0°	àÄ\rF»l'wn	nVénÂ(@š¸„šo\$16Èà@¨\n¸S˜­YjV¨k× ¦Æö#çcbÆ\n\0\n`©G ·:*öƒÀPcfÙm#fö½r\$üCb(H~1hµ ZÏinìÀ^\0ZJ î©š¶#ã‚4àÈ-ou(‰V¦×ZNb„\0[y¥€ZòµŞ+qöÏm)vp×”RhjFòÔRcÒa/¼ú«d%_rwÅ|€óSCÓC¤,†V–‡Üu†g|¼l…et¶fK{2Ïhu²ºˆ’‰h›t`ö·¸;Æjú×ò¥7òT#¶å©¨cb\\nB„xX.?îI Ë1oJ@³æZ ÷LûÜñiÇjpğ í¯(§àŒ„O–„@X\\\0æë’Şrsiƒv ¶p«Æ@†œj1ğt“pÛ2QíL`¬D-àÖB8}NZ†,-ôcÕl¬F€^\r1šz“ÒéÑ4t÷N6r¹P¬¼UàCVÄ\"Ê,„^Z\0Ş‰n—.@˜Ğ\$˜Õ‰ÜÀõ÷ã<·94Sw6 öcd—/â¿x Ê\n ¤	(~\r¸FF‡¨‚ @7ˆ‘Y9“Àß”ª1ñKÓJşâ¸t‹«WçÌÃ u21qÍ¯ƒ™,\r@ŞCÂ„ĞJÜX[åsˆeÄ+\0y|3@zX„ë€DÆW™.¸*\0xññšÏëhì<›5h\\­Y.h˜×³‡) Ğ~«íœ&V*€~ÀU	â¸*Æ@V;ø“—“ƒmø\"\"±‚¸`Ühšù§™xBW8F<XMt–¯1,Ä\$²üÌNĞPTÀèç‰tª)ú2×¡Ù°\\G;qrÿÍ)“B¹AÉ“††9,è}:`é\"NŒv“€î/ÀÜQtT“®ïR³<ËDó¾F”©J:w&Œa>m\r4óÀšŸ>FğL\nË¦=¨#k¨˜T\"!‡§¬†ÖÌ’/õ¬CÂ§ìZâ`äâ ˜ 3§ós(Á‰İ­¢@É\\rqÌgdjFâ,¨%0BÆÀSG³ècµª\rĞñWÔ“©40èÀ{¢îPÔeC€z@oŒ<á´†3*lÎ}™E&¾ĞÀ„n`å`Ø-Z’¶k® Üà.àºü!(tdXæ˜:c\$_U\0òc¸F\nºáªQBÇ3ª,v\"1§·D?„Õ¨×tRï,µ°SDóhº¢ÃdhôD h€eâ /SšÖ@\0c¹’1H»¤ÄÔ«¢æ V-» ×î»ï³Ûœ4`¸ `\0‚Dû³ë9¥ïşyg;]ÀĞvò_ F<İCn¾×ÓÄQDk¤”FÑÂ!`¥'ûÄò÷€¨\rî<CÒğ]»Ğ1\0°#ÜtQDh/ë¸ã\\Æ@Éc·r;ƒ½È€Ê\\fAk,¸L‚C/ÉÜ ‰\0ŠV\\o•ÀOË`ÉÊedEœ;Û‰Ë\njux¯\\Z£®ZéAŠÅ«¿†–Å›nrc¼‰:\nsØ‰:<P\nn2éd„56%^ÀCDXæyÚì¥Êí‚*ˆyN4ùS“ùC•ÜÚ/yJ\\x)|.}½Aƒfe{¢.8K¾»^×Õ'ÕgW»©|Î}6‡M€ÕÛ\n½h1=m®,bÕÜH ×åRÈVİ{Å'ùÌ›¼C¤¬Â»2åj<OÚGÚNÏÅƒÓÅöiÆ5QÊ ËÌ…}^qŠ’€Z–P«Í`Væœ›ÆFàÈ‘P{Fà	€ŞCqZ& Pğ%—@XHä7¬DX €è\$cìâ[vâ›{¹‚şí>í vñİ·¤Şå ”mXí\"JñË\\õÒr6v(NÒyší8'}zàs£°cãÛ[¨j;:\"Ø“£áxâİaÕ[¹Å÷¥*<hÜæiPÍæÇê7IèÒÔŸR\"BœÖúä6şLJş:AÍ¦îÛOáÎÓ¿Œu^S²Î Û›;òs#çâŞ\$}qh&¦èÕ4\rõ9C¿Q6\nšçÍSÅï¾şWnÌÈ“€\$Ütğ¢r\r€„—Â§õGîŠy áÏ™	ÏÅM£åëäÌ\$­<XXCİZr`t XnO§Ú¯?Ns‹\"•­LÜ,Ò0i¦\nS\nE\0ÍCÃ’Ï_/Ï ‘Ïú@m)+Îêˆ ÀRÚñ¿òß0—_‹ó}ùn×ì²ù—KşOCËÜbiİZU÷ãe„]”+å¤P•x{P¼[µ•ÉV+_ÜéW¶#h™.İıÓ’MGíœ€ÃËn!ÔÏ‚§èœ€‚K1]\$\0F¼@à†8%C[sèV\rï\0rKÑToü=›ş[d}q»9ö\0b²€(Í€ë\0‡>À,Xğ\rsëÆÂÀ:Ğ:÷Í¾†£|’°€J^2``Ï4m0	¨¹”®Ñˆ!¾µ1È-#ª`œ6—#ôÒb’@I<ƒ×5¤°\$¬BÂ¯ÈKPÑÀ9=Ê%“wÀôŠP<:-+„«8Éìßäşö3Œ7à,XøF\"”„\râÛ;uÅ”q=‹¢É@‚\rCÂÁØ!ƒ5TúoÎÇªĞ\ró˜	Â¸C*°w€á¸Ö#,'ı@ ePòÏ¬cXO™¦‰g?huŞe‚ñ¹3'î\$QVÍ·á@õú`h|ä¾’„PIĞz;½„6I‘”²QŞd=>ÉùUN¶œ\$°Ë‘{N%¸üèj:vRòÂı”+ƒèJ;\$Ô@\$&ÓíªÉ±\0æÖ¦ˆT¾ÇàY(}HJ’ÄPŒlü‡Í¹ÊÔ‚¤À3ÃÔ0CeC']0ÊØ:@êo`g¡ÙğÖ}.:Š8¢…*güáAÈµ¬)O=ò†°ÒP´qšŸ”¥0ôV±‚¡è‰°=Ä±YĞ‡ã¯!è£ó–º ‰xéá€èÅ¢0Ahî”AYTÊÀë2º'¬»{)È@ğDÁ@­p¥1OdT@àêC–Šö&AÈ\rRÍøÄR\"Ä£{s\\Ş)H«3ÉÕ,\$näDÓ8€·}ŒBÒˆêXwx·(æ'i1«\0Â+ÓÄEò,I‰¡Ybapš©\0å±pˆiÙ4évUºdzo]:Ckøˆ¿Ä§A1	hÉVâ{è");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($ic){$uc=substr($ic,-1);return
str_replace($uc.$uc,$uc,substr($ic,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($nd,$Ib=false){if(get_magic_quotes_gpc()){while(list($w,$V)=each($nd)){foreach($V
as$pc=>$U){unset($nd[$w][$pc]);if(is_array($U)){$nd[$w][stripslashes($pc)]=$U;$nd[]=&$nd[$w][stripslashes($pc)];}else$nd[$w][stripslashes($pc)]=($Ib?$U:stripslashes($U));}}}}function
bracket_escape($ic,$ua=false){static$ne=array(':'=>':1',']'=>':2','['=>':3');return
strtr($ic,($ua?array_flip($ne):$ne));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$W,$Ea,$sc="",$Sc="",$Ga=""){$K="<input type='checkbox' name='$C' value='".h($W)."'".($Ea?" checked":"").($Sc?' onclick="'.h($Sc).'"':'').">";return($sc!=""||$Ga?"<label".($Ga?" class='$Ga'":"").">$K".h($sc)."</label>":$K);}function
optionlist($Wc,$Gd=null,$Be=false){$K="";foreach($Wc
as$pc=>$U){$Xc=array($pc=>$U);if(is_array($U)){$K.='<optgroup label="'.h($pc).'">';$Xc=$U;}foreach($Xc
as$w=>$V)$K.='<option'.($Be||is_string($w)?' value="'.h($w).'"':'').(($Be||is_string($w)?(string)$w:$V)===$Gd?' selected':'').'>'.h($V);if(is_array($U))$K.='</optgroup>';}return$K;}function
html_select($C,$Wc,$W="",$Rc=true){if($Rc)return"<select name='".h($C)."'".(is_string($Rc)?' onchange="'.h($Rc).'"':"").">".optionlist($Wc,$W)."</select>";$K="";foreach($Wc
as$w=>$V)$K.="<label><input type='radio' name='".h($C)."' value='".h($w)."'".($w==$W?" checked":"").">".h($V)."</label>";return$K;}function
select_input($c,$Wc,$W="",$fd=""){return($Wc?"<select$c><option value=''>$fd".optionlist($Wc,$W,true)."</select>":"<input$c value='".h($W)."' placeholder='$fd'>");}function
confirm(){return" onclick=\"return confirm('".'Czy jesteÅ› pewien?'."');\"";}function
print_fieldset($r,$wc,$Ge=false,$Sc=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Sc)."return !toggle('fieldset-$r');\">$wc</a></legend><div id='fieldset-$r'".($Ge?"":" class='hidden'").">\n";}function
bold($Aa,$Ga=""){return($Aa?" class='active $Ga'":($Ga?" class='$Ga'":""));}function
odd($K=' class="odd"'){static$q=0;if(!$K)$q=-1;return($q++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($w,$V=null){static$Jb=true;if($Jb)echo"{";if($w!=""){echo($Jb?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\/").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\/").'"':'undefined');$Jb=false;}else{echo"\n}\n";$Jb=true;}}function
ini_bool($mc){$V=ini_get($mc);return(preg_match('~^(on|true|yes)$~i',$V)||(int)$V);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$f;return$f->quote($Q);}function
get_vals($I,$d=0){global$f;$K=array();$J=$f->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$d];}return$K;}function
get_key_vals($I,$g=null,$ge=0){global$f;if(!is_object($g))$g=$f;$K=array();$g->timeout=$ge;$J=$g->query($I);$g->timeout=0;if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$g=null,$k="<p class='error'>"){global$f;$Qa=(is_object($g)?$g:$f);$K=array();$J=$Qa->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($g)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$K;}function
unique_array($L,$t){foreach($t
as$s){if(preg_match("~PRIMARY|UNIQUE~",$s["type"])){$K=array();foreach($s["columns"]as$w){if(!isset($L[$w]))continue
2;$K[$w]=$L[$w];}return$K;}}}function
where($X,$m=array()){global$v;$K=array();$Ub='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$X["where"]as$w=>$V){$w=bracket_escape($w,1);$d=(preg_match($Ub,$w)?$w:idf_escape($w));$K[]=$d.(($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$V))||$v=="mssql"?" LIKE ".q(addcslashes($V,"%_\\")):" = ".unconvert_field($m[$w],q($V)));if($v=="sql"&&preg_match("~[^ -@]~",$V))$K[]="$d = ".q($V)." COLLATE utf8_bin";}foreach((array)$X["null"]as$w)$K[]=(preg_match($Ub,$w)?$w:idf_escape($w))." IS NULL";return
implode(" AND ",$K);}function
where_check($V,$m=array()){parse_str($V,$Da);remove_slashes(array(&$Da));return
where($Da,$m);}function
where_link($q,$d,$W,$Uc="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($d)."&where%5B$q%5D%5Bop%5D=".urlencode(($W!==null?$Uc:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($W);}function
convert_fields($e,$m,$N=array()){$K="";foreach($e
as$w=>$V){if($N&&!in_array(idf_escape($w),$N))continue;$oa=convert_field($m[$w]);if($oa)$K.=", $oa AS ".idf_escape($w);}return$K;}function
cookie($C,$W,$zc=2592000){global$aa;$cd=array($C,(preg_match("~\n~",$W)?"":$W),($zc?time()+$zc:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$cd[]=true;return
call_user_func_array('setcookie',$cd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$V){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($De,$O,$T,$h=null){global$ib;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ib))."|username|".($h!==null?"db|":"").session_name()),$_);return"$_[1]?".(sid()?SID."&":"").($De!="server"||$O!=""?urlencode($De)."=".urlencode($O)."&":"")."username=".urlencode($T).($h!=""?"&db=".urlencode($h):"").($_[2]?"&$_[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($z,$A=null){if($A!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($z!==null?$z:$_SERVER["REQUEST_URI"]))][]=$A;}if($z!==null){if($z=="")$z=".";header("Location: $z");exit;}}function
query_redirect($I,$z,$A,$vd=true,$_b=true,$Cb=false){global$f,$k,$b;$fe="";if($_b){$Pd=microtime(true);$Cb=!$f->query($I);$fe="; -- ".format_time($Pd,microtime(true));}$Od="";if($I)$Od=$b->messageQuery($I.$fe);if($Cb){$k=error().$Od;return
false;}if($vd)redirect($z,$A.$Od);return
true;}function
queries($I=null){global$f;static$qd=array();if($I===null)return
implode("\n",$qd);$Pd=microtime(true);$K=$f->query($I);$qd[]=(preg_match('~;$~',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I)."; -- ".format_time($Pd,microtime(true));return$K;}function
apply_queries($I,$ae,$wb='table'){foreach($ae
as$R){if(!queries("$I ".$wb($R)))return
false;}return
true;}function
queries_redirect($z,$A,$vd){return
query_redirect(queries(),$z,$A,$vd,false,!$vd);}function
format_time($Pd,$sb){return
sprintf('%.3f s',max(0,$sb-$Pd));}function
remove_from_uri($bd=""){return
substr(preg_replace("~(?<=[?&])($bd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Wa){return" ".($F==$Wa?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($F+1)."</a>");}function
get_file($w,$Za=false){$Fb=$_FILES[$w];if(!$Fb)return
null;foreach($Fb
as$w=>$V)$Fb[$w]=(array)$V;$K='';foreach($Fb["error"]as$w=>$k){if($k)return$k;$C=$Fb["name"][$w];$le=$Fb["tmp_name"][$w];$Ra=file_get_contents($Za&&preg_match('~\\.gz$~',$C)?"compress.zlib://$le":$le);if($Za){$Pd=substr($Ra,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$Pd,$wd))$Ra=iconv("utf-16","utf-8",$Ra);elseif($Pd=="\xEF\xBB\xBF")$Ra=substr($Ra,3);$K.=$Ra."\n\n";}else$K.=$Ra;}return$K;}function
upload_error($k){$Ec=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?'Wgranie pliku byÅ‚o niemoÅ¼liwe.'.($Ec?" ".sprintf('Maksymalna wielkoÅ›Ä‡ pliku to %sB.',$Ec):""):'Plik nie istnieje.');}function
repeat_pattern($H,$xc){return
str_repeat("$H{0,65535}",$xc/65535)."$H{0,".($xc%65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($Q,$xc=80,$Vd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$xc).")($)?)u",$Q,$_))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xc).")($)?)",$Q,$_);return
h($_[1]).$Vd.(isset($_[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($nd,$kc=array()){while(list($w,$V)=each($nd)){if(is_array($V)){foreach($V
as$pc=>$U)$nd[$w."[$pc]"]=$U;}elseif(!in_array($w,$kc))echo'<input type="hidden" name="'.h($w).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($R,$Db=false){$K=table_status($R,$Db);return($K?$K:array("Name"=>$R));}function
column_foreign_keys($R){global$b;$K=array();foreach($b->foreignKeys($R)as$Ob){foreach($Ob["source"]as$V)$K[$V][]=$Ob;}return$K;}function
enum_input($qe,$c,$l,$W,$rb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Bc);$K=($rb!==null?"<label><input type='$qe'$c value='$rb'".((is_array($W)?in_array($rb,$W):$W===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($Bc[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ea=(is_int($W)?$W==$q+1:(is_array($W)?in_array($q+1,$W):$W===$V));$K.=" <label><input type='$qe'$c value='".($q+1)."'".($Ea?' checked':'').'>'.h($b->editVal($V,$l)).'</label>';}return$K;}function
input($l,$W,$o){global$f,$se,$b,$v;$C=h(bracket_escape($l["field"]));echo"<td class='function'>";if(is_array($W)&&!$o){$na=array($W);if(version_compare(PHP_VERSION,5.4)>=0)$na[]=JSON_PRETTY_PRINT;$W=call_user_func_array('json_encode',$na);$o="json";}$zd=($v=="mssql"&&$l["auto_increment"]);if($zd&&!$_POST["save"])$o=null;$Vb=(isset($_GET["select"])||$zd?array("orig"=>'bez zmian'):array())+$b->editFunctions($l);$c=" name='fields[$C]'";if($l["type"]=="enum")echo
nbsp($Vb[""])."<td>".$b->editInput($_GET["edit"],$l,$c,$W);else{$Jb=0;foreach($Vb
as$w=>$V){if($w===""||!$V)break;$Jb++;}$Rc=($Jb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($Jb > f.selectedIndex) f.selectedIndex = $Jb;\" onkeyup='keyupChange.call(this);'":"");$c.=$Rc;$ac=(in_array($o,$Vb)||isset($Vb[$o]));echo(count($Vb)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Vb,$o===null||$ac?$o:"")."</select>":nbsp(reset($Vb))).'<td>';$oc=$b->editInput($_GET["edit"],$l,$c,$W);if($oc!="")echo$oc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Bc);foreach($Bc[1]as$q=>$V){$V=stripcslashes(str_replace("''","'",$V));$Ea=(is_int($W)?($W>>$q)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$C][$q]' value='".(1<<$q)."'".($Ea?' checked':'')."$Rc>".h($b->editVal($V,$l)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Rc>";elseif(($ce=preg_match('~text|lob~',$l["type"]))||preg_match("~\n~",$W)){if($ce&&$v!="sqlite")$c.=" cols='50' rows='12'";else{$M=min(12,substr_count($W,"\n")+1);$c.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$c>".h($W).'</textarea>';}elseif($o=="json")echo"<textarea$c cols='50' rows='12' class='jush-js'>".h($W).'</textarea>';else{$Gc=(!preg_match('~int~',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$_)?((preg_match("~binary~",$l["type"])?2:1)*$_[1]+($_[3]?1:0)+($_[2]&&!$l["unsigned"]?1:0)):($se[$l["type"]]?$se[$l["type"]]+($l["unsigned"]?0:1):0));if($v=='sql'&&$f->server_info>=5.6&&preg_match('~time~',$l["type"]))$Gc+=7;echo"<input".((!$ac||$o==="")&&preg_match('~(?<!o)int~',$l["type"])?" type='number'":"")." value='".h($W)."'".($Gc?" maxlength='$Gc'":"").(preg_match('~char|binary~',$l["type"])&&$Gc>20?" size='40'":"")."$c>";}}}function
process_input($l){global$b;$ic=bracket_escape($l["field"]);$o=$_POST["function"][$ic];$W=$_POST["fields"][$ic];if($l["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($l["auto_increment"]&&$W=="")return
null;if($o=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($o=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$W);if($o=="json"){$o="";$W=json_decode($W,true);if(!is_array($W))return
false;return$W;}if(preg_match('~blob|bytea|raw|file~',$l["type"])&&ini_bool("file_uploads")){$Fb=get_file("fields-$ic");if(!is_string($Fb))return
false;return
q($Fb);}return$b->processInput($l,$W,$o);}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Rb=false;foreach(table_status('',true)as$R=>$S){$C=$b->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$f->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Rb){echo"<ul>\n";$Rb=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Rb?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($hc,$Jc=false){global$b;$K=$b->dumpHeaders($hc,$Jc);$ad=$_POST["output"];if($ad!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($hc).".$K".($ad!="file"&&!preg_match('~[^0-9a-z]~',$ad)?".$ad":""));session_write_close();ob_flush();flush();return$K;}function
dump_csv($L){foreach($L
as$w=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$L[$w]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($o,$d){return($o?($o=="unixepoch"?"DATETIME($d, '$o')":($o=="count distinct"?"COUNT(DISTINCT ":strtoupper("$o("))."$d)"):$d);}function
password_file($Ta){$fb=ini_get("upload_tmp_dir");if(!$fb){if(function_exists('sys_get_temp_dir'))$fb=sys_get_temp_dir();else{$Gb=@tempnam("","");if(!$Gb)return
false;$fb=dirname($Gb);unlink($Gb);}}$Gb="$fb/adminer.key";$K=@file_get_contents($Gb);if($K||!$Ta)return$K;$Sb=@fopen($Gb,"w");if($Sb){$K=rand_string();fwrite($Sb,$K);fclose($Sb);}return$K;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($V,$y,$l,$de){global$b,$aa;if(is_array($V)){$K="";foreach($V
as$pc=>$U)$K.="<tr>".($V!=array_values($V)?"<th>".h($pc):"")."<td>".select_value($U,$y,$l,$de);return"<table cellspacing='0'>$K</table>";}if(!$y)$y=$b->selectLink($V,$l);if($y===null){if(is_mail($V))$y="mailto:$V";if($od=is_url($V))$y=($od=="http"&&$aa?$V:"$od://www.adminer.org/redirect/?url=".urlencode($V));}$K=$b->editVal($V,$l);if($K!==null){if($K==="")$K="&nbsp;";elseif($de!=""&&is_shortable($l)&&is_utf8($K))$K=shorten_utf8($K,max(0,+$de));else$K=h($K);}return$b->selectVal($K,$y,$l,$V);}function
is_mail($ob){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$H="$pa+(\\.$pa+)*@($hb?\\.)+$hb";return
is_string($ob)&&preg_match("(^$H(,\\s*$H)*\$)i",$ob);}function
is_url($Q){$hb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($hb?\\.)+$hb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$_)?strtolower($_[1]):"");}function
is_shortable($l){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$l["type"]);}function
count_rows($R,$X,$u,$p){global$v;$I=" FROM ".table($R).($X?" WHERE ".implode(" AND ",$X):"");return($u&&($v=="sql"||count($p)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$p).")$I":"SELECT COUNT(*)".($u?" FROM (SELECT 1$I$Wb) x":$I));}function
slow_query($I){global$b,$me;$h=$b->database();$ge=$b->queryTimeout();if(support("kill")&&is_object($g=connect())&&($h==""||$g->select_db($h))){$rc=$g->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$me,'&kill=',$rc,'\');
}, ',1000*$ge,');
</script>
';}else$g=null;ob_flush();flush();$K=@get_key_vals($I,$g,$ge);if($g){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
get_token(){$td=rand(1,1e6);return($td^$_SESSION["token"]).":$td";}function
verify_token(){list($me,$td)=explode(":",$_POST["token"]);return($td^$_SESSION["token"])==$me;}function
lzw_decompress($za){$eb=256;$_a=8;$Ia=array();$_d=0;$Ad=0;for($q=0;$q<strlen($za);$q++){$_d=($_d<<8)+ord($za[$q]);$Ad+=8;if($Ad>=$_a){$Ad-=$_a;$Ia[]=$_d>>$Ad;$_d&=(1<<$Ad)-1;$eb++;if($eb>>$_a)$_a++;}}$db=range("\0","\xFF");$K="";foreach($Ia
as$q=>$Ha){$nb=$db[$Ha];if(!isset($nb))$nb=$Ke.$Ke[0];$K.=$nb;if($q)$db[]=$Ke.$nb[0];$Ke=$nb;}return$K;}function
on_help($Na,$Md=0){return" onmouseover='helpMouseover(this, event, ".h($Na).", $Md);' onmouseout='helpMouseout(this, event);'";}global$b,$f,$ib,$lb,$ub,$k,$Vb,$Xb,$aa,$nc,$v,$ba,$tc,$Qc,$ed,$Sd,$bc,$me,$pe,$se,$ze,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$cd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$cd[]=true;call_user_func_array('session_set_cookie_params',$cd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Ib);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($oe,$Nc=null){if(is_array($oe)){$hd=($Nc==1?0:($Nc%10>1&&$Nc%10<5&&$Nc/10%10!=1?1:2));$oe=$oe[$hd];}$oe=str_replace("%d","%s",$oe);$Nc=number_format($Nc,0,".",' ');return
sprintf($oe,$Nc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$hd=array_search("SQL",$b->operators);if($hd!==false)unset($b->operators[$hd]);}function
dsn($jb,$T,$G){try{parent::__construct($jb,$T,$G);}catch(Exception$xb){auth_error($xb);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$te=false){$J=parent::query($I);$this->error="";if(!$J){list(,$this->errno,$this->error)=$this->errorInfo();return
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
select($R,$N,$X,$p,$D,$x,$F,$ld=false){global$b,$v;$u=(count($p)<count($N));$I=$b->selectQueryBuild($N,$X,$p,$D,$x,$F);if(!$I)$I="SELECT".limit(($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$N)."\nFROM ".table($R),($X?"\nWHERE ".implode(" AND ",$X):"").($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($D?"\nORDER BY ".implode(", ",$D):""),($x!=""?+$x:null),($F?$x*$F:0),"\n");if($ld)echo$b->selectQuery($I);return$this->_conn->query($I);}function
delete($R,$rd,$x=0){$I="FROM ".table($R);return
queries("DELETE".($x?limit1($I,$rd):" $I$rd"));}function
update($R,$P,$rd,$x=0,$Id="\n"){$Ce=array();foreach($P
as$w=>$V)$Ce[]="$w = $V";$I=table($R)." SET$Id".implode(",$Id",$Ce);return
queries("UPDATE".($x?limit1($I,$rd):" $I$rd"));}function
insert($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":" DEFAULT VALUES"));}function
insertUpdate($R,$M,$kd){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$ib=array("server"=>"MySQL")+$ib;if(!defined("DRIVER")){$id=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$T,$G){mysqli_report(MYSQLI_REPORT_OFF);list($fc,$gd)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$fc:ini_get("mysqli.default_host")),($O.$T!=""?$T:ini_get("mysqli.default_user")),($O.$T.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($gd)?$gd:ini_get("mysqli.default_port")),(!is_numeric($gd)?$gd:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$l=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$l];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($O,$T,$G){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$T"!=""?$T:ini_get("mysql.default_user")),("$O$T$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($Xa){return
mysql_select_db($Xa,$this->_link);}function
query($I,$te=false){$J=@($te?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
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
query($I,$te=false){$this->setAttribute(1000,!$te);return
parent::query($I,$te);}}}class
Min_Driver
extends
Min_SQL{function
insert($R,$P){return($P?parent::insert($R,$P):queries("INSERT INTO ".table($R)." ()\nVALUES ()"));}function
insertUpdate($R,$M,$kd){$e=array_keys(reset($M));$jd="INSERT INTO ".table($R)." (".implode(", ",$e).") VALUES\n";$Ce=array();foreach($e
as$w)$Ce[$w]="$w = VALUES($w)";$Vd="\nON DUPLICATE KEY UPDATE ".implode(", ",$Ce);$Ce=array();$xc=0;foreach($M
as$P){$W="(".implode(", ",$P).")";if($Ce&&(strlen($jd)+$xc+strlen($W)+strlen($Vd)>1e6)){if(!queries($jd.implode(",\n",$Ce).$Vd))return
false;$Ce=array();$xc=0;}$Ce[]=$W;$xc+=strlen($W)+2;}return
queries($jd.implode(",\n",$Ce).$Vd);}}function
idf_escape($ic){return"`".str_replace("`","``",$ic)."`";}function
table($ic){return
idf_escape($ic);}function
connect(){global$b;$f=new
Min_DB;$Va=$b->credentials();if($f->connect($Va[0],$Va[1],$Va[2])){$f->query("SET sql_quote_show_create = 1, autocommit = 1");return$f;}$K=$f->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Cd=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Cd;return$K;}function
get_databases($Kb){global$f;$K=get_session("dbs");if($K===null){$I=($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Kb?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$X,$x,$Oc=0,$Id=" "){return" $I$X".($x!==null?$Id."LIMIT $x".($Oc?" OFFSET $Oc":""):"");}function
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
foreign_keys($R){global$f,$Qc;static$H='`(?:[^`]|``)+`';$K=array();$Ua=$f->result("SHOW CREATE TABLE ".table($R),1);if($Ua){preg_match_all("~CONSTRAINT ($H) FOREIGN KEY \\(((?:$H,? ?)+)\\) REFERENCES ($H)(?:\\.($H))? \\(((?:$H,? ?)+)\\)(?: ON DELETE ($Qc))?(?: ON UPDATE ($Qc))?~",$Ua,$Bc,PREG_SET_ORDER);foreach($Bc
as$_){preg_match_all("~$H~",$_[2],$Nd);preg_match_all("~$H~",$_[5],$be);$K[idf_unescape($_[1])]=array("db"=>idf_unescape($_[4]!=""?$_[3]:$_[4]),"table"=>idf_unescape($_[4]!=""?$_[4]:$_[3]),"source"=>array_map('idf_unescape',$Nd[0]),"target"=>array_map('idf_unescape',$be[0]),"on_delete"=>($_[6]?$_[6]:"RESTRICT"),"on_update"=>($_[7]?$_[7]:"RESTRICT"),);}}return$K;}function
view($C){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$w=>$V)asort($K[$w]);return$K;}function
information_schema($h){global$f;return($f->server_info>=5&&$h=="information_schema")||($f->server_info>=5.5&&$h=="performance_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
error_line(){global$f;if(preg_match('~ at line ([0-9]+)$~',$f->error,$wd))return$wd[1]-1;}function
create_database($h,$Ka){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($h).($Ka?" COLLATE ".q($Ka):""));}function
drop_databases($Ya){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$Ya,'idf_escape');}function
rename_database($C,$Ka){if(create_database($C,$Ka)){$xd=array();foreach(tables_list()as$R=>$qe)$xd[]=table($R)." TO ".idf_escape($C).".".table($R);if(!$xd||queries("RENAME TABLE ".implode(", ",$xd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$ta="";break;}if($s["type"]=="PRIMARY")$ta=" UNIQUE";}}return" AUTO_INCREMENT$ta";}function
alter_table($R,$C,$m,$Lb,$Oa,$tb,$Ka,$sa,$dd){$ma=array();foreach($m
as$l)$ma[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?$l[2]:""):"DROP ".idf_escape($l[0]));$ma=array_merge($ma,$Lb);$Qd="COMMENT=".q($Oa).($tb?" ENGINE=".q($tb):"").($Ka?" COLLATE ".q($Ka):"").($sa!=""?" AUTO_INCREMENT=$sa":"").$dd;if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$ma)."\n) $Qd");if($R!=$C)$ma[]="RENAME TO ".table($C);$ma[]=$Qd;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$ma));}function
alter_indexes($R,$ma){foreach($ma
as$w=>$V)$ma[$w]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($R).implode(",",$ma));}function
truncate_tables($ae){return
apply_queries("TRUNCATE TABLE",$ae);}function
drop_views($Fe){return
queries("DROP VIEW ".implode(", ",array_map('table',$Fe)));}function
drop_tables($ae){return
queries("DROP TABLE ".implode(", ",array_map('table',$ae)));}function
move_tables($ae,$Fe,$be){$xd=array();foreach(array_merge($ae,$Fe)as$R)$xd[]=table($R)." TO ".idf_escape($be).".".table($R);return
queries("RENAME TABLE ".implode(", ",$xd));}function
copy_tables($ae,$Fe,$be){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($ae
as$R){$C=($be==DB?table("copy_$R"):idf_escape($be).".".table($R));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($Fe
as$R){$C=($be==DB?table("copy_$R"):idf_escape($be).".".table($R));$Ee=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ee[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$qe){global$f,$ub,$nc,$se;$la=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$re="((".implode("|",array_merge(array_keys($se),$la)).")\\b(?:\\s*\\(((?:[^'\")]*|$ub)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$H="\\s*(".($qe=="FUNCTION"?"":$nc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$re";$Ta=$f->result("SHOW CREATE $qe ".idf_escape($C),2);preg_match("~\\(((?:$H\\s*,?)*)\\)\\s*".($qe=="FUNCTION"?"RETURNS\\s+$re\\s+":"")."(.*)~is",$Ta,$_);$m=array();preg_match_all("~$H\\s*,?~is",$_[1],$Bc,PREG_SET_ORDER);foreach($Bc
as$bd){$C=str_replace("``","`",$bd[2]).$bd[3];$m[]=array("field"=>$C,"type"=>strtolower($bd[5]),"length"=>preg_replace_callback("~$ub~s",'normalize_enum',$bd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$bd[8] $bd[7]"))),"null"=>1,"full_type"=>$bd[4],"inout"=>strtoupper($bd[1]),"collation"=>strtolower($bd[9]),);}if($qe!="FUNCTION")return
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
set_schema($Dd){return
true;}function
create_sql($R,$sa){global$f;$K=$f->result("SHOW CREATE TABLE ".table($R),1);if(!$sa)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($Xa){return"USE ".idf_escape($Xa);}function
trigger_sql($R,$Td){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_\\")),null,"-- ")as$L)$K.="\n".($Td=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($l){if(preg_match("~binary~",$l["type"]))return"HEX(".idf_escape($l["field"]).")";if($l["type"]=="bit")return"BIN(".idf_escape($l["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))return"AsWKT(".idf_escape($l["field"]).")";}function
unconvert_field($l,$K){if(preg_match("~binary~",$l["type"]))$K="UNHEX($K)";if($l["type"]=="bit")$K="CONV($K, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$l["type"]))$K="GeomFromText($K)";return$K;}function
support($Eb){global$f;return!preg_match("~scheme|sequence|type|view_trigger".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|routine|trigger|view":""):"")."~",$Eb);}$v="sql";$se=array();$Sd=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometria'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$V){$se+=$V;$Sd[$w]=array_keys($V);}$ze=array("unsigned","zerofill","unsigned zerofill");$Vc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Vb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Xb=array("avg","count","count distinct","group_concat","max","min","sum");$lb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="4.0.2";class
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
<tr><th>UÅ¼ytkownik<td><input type="hidden" name="auth[driver]" value="server"><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>HasÅ‚o<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
focus(document.getElementById(\'username\'));
</script>
',"<p><input type='submit' value='".'Zaloguj siÄ™'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'ZapamiÄ™taj sesjÄ™')."\n";}function
login($_c,$G){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Yd){return
h($Yd["Comment"]!=""?$Yd["Comment"]:$Yd["Name"]);}function
fieldName($l,$D=0){return
h($l["comment"]!=""?$l["comment"]:$l["field"]);}function
selectLinks($Yd,$P=""){$a=$Yd["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$P).'">'.'Nowy rekord'."</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Xd){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$w=>$V){$C=$this->tableName(table_status($w,true));if($C!=""){$Ed=preg_quote($Xd);$Id="(:|\\s*-)?\\s+";$K[$w]["name"]=(preg_match("(^$Ed$Id(.+)|^(.+?)$Id$Ed\$)iu",$C,$_)?$_[2].$_[3]:$C);}else
unset($K[$w]);}return$K;}function
backwardKeysPrint($wa,$L){foreach($wa
as$R=>$va){foreach($va["keys"]as$Ma){$y=ME.'select='.urlencode($R);$q=0;foreach($Ma
as$d=>$V)$y.=where_link($q++,$d,$L[$V]);echo"<a href='".h($y)."'>".h($va["name"])."</a>";$y=ME.'edit='.urlencode($R);foreach($Ma
as$d=>$V)$y.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($L[$V]);echo"<a href='".h($y)."' title='".'Nowy rekord'."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$l){if(preg_match("~varchar|character varying~",$l["type"]))return
idf_escape($l["field"]);}return"";}function
rowDescriptions($M,$Nb){$K=$M;foreach($M[0]as$w=>$V){if(list($R,$r,$C)=$this->_foreignColumn($Nb,$w)){$jc=array();foreach($M
as$L)$jc[$L[$w]]=q($L[$w]);$cb=$this->_values[$R];if(!$cb)$cb=get_key_vals("SELECT $r, $C FROM ".table($R)." WHERE $r IN (".implode(", ",$jc).")");foreach($M
as$B=>$L){if(isset($L[$w]))$K[$B][$w]=(string)$cb[$L[$w]];}}}return$K;}function
selectLink($V,$l){}function
selectVal($V,$y,$l,$Zc){$K=($V===null?"&nbsp;":$V);$y=h($y);if(preg_match('~blob|bytea~',$l["type"])&&!is_utf8($V)){$K=lang(array('%d bajt','%d bajty','%d bajtÃ³w'),strlen($Zc));if(preg_match("~^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)~",$Zc))$K="<img src='$y' alt='$K'>";}if(like_bool($l)&&$K!="&nbsp;")$K=($V?'tak':'nie');if($y)$K="<a href='$y'>$K</a>";if(!$y&&!like_bool($l)&&preg_match('~int|float|double|decimal~',$l["type"]))$K="<div class='number'>$K</div>";elseif(preg_match('~date~',$l["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($V,$l){if(preg_match('~date|timestamp~',$l["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);return$V;}function
selectColumnsPrint($N,$e){}function
selectSearchPrint($X,$e,$t){$X=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.'Szukaj'."</legend><div>\n";$qc=array();foreach($X
as$w=>$V)$qc[$V["col"]]=$w;$q=0;$m=fields($_GET["select"]);foreach($e
as$C=>$bb){$l=$m[$C];if(preg_match("~enum~",$l["type"])||like_bool($l)){$w=$qc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'>:",(like_bool($l)?" <select name='where[$q][val]'>".optionlist(array(""=>"",'nie','tak'),$X[$w]["val"],true)."</select>":enum_input("checkbox"," name='where[$q][val][]'",$l,(array)$X[$w]["val"],($l["null"]?0:null))),"</div>\n";unset($e[$C]);}elseif(is_array($Wc=$this->_foreignKeyOptions($_GET["select"],$C))){if($m[$C]["null"])$Wc[0]='('.'puste'.')';$w=$qc[$C];$q--;echo"<div>".h($bb)."<input type='hidden' name='where[$q][col]' value='".h($C)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Wc,$X[$w]["val"],true)."</select></div>\n";unset($e[$C]);}}$q=0;foreach($X
as$V){if(($V["col"]==""||$e[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($e,$V["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$V["op"]),"<input type='search' name='where[$q][val]' value='".h($V["val"])."' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'gdziekolwiek'.")".optionlist($e,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$q][val]' onchange='selectAddRow(this);' onsearch='selectSearch(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($D,$e,$t){$Yc=array();foreach($t
as$w=>$s){$D=array();foreach($s["columns"]as$V)$D[]=$e[$V];if(count(array_filter($D,'strlen'))>1&&$w!="PRIMARY")$Yc[$w]=implode(", ",$D);}if($Yc){echo'<fieldset><legend>'.'Sortuj'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Yc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($x){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","50","100"),$x),"</div></fieldset>\n";}function
selectLengthPrint($de){}function
selectActionPrint($t){echo"<fieldset><legend>".'CzynnoÅ›Ä‡'."</legend><div>","<input type='submit' value='".'pokaÅ¼'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($pb,$e){if($pb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Nadawca'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Temat'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Dodaj'."'>\n";echo"<p>".'ZaÅ‚Ä…czniki'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($pb)==1?'<input type="hidden" name="email_field" value="'.h(key($pb)).'">':html_select("email_field",$pb)),"<input type='submit' name='email' value='".'WyÅ›lij'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$t){return
array(array(),array());}function
selectSearchProcess($m,$t){$K=array();foreach((array)$_GET["where"]as$w=>$X){$Ja=$X["col"];$Tc=$X["op"];$V=$X["val"];if(($w<0?"":$Ja).$V!=""){$Pa=array();foreach(($Ja!=""?array($Ja=>$m[$Ja]):$m)as$C=>$l){if($Ja!=""||is_numeric($V)||!preg_match('~int|float|double|decimal~',$l["type"])){$C=idf_escape($C);if($Ja!=""&&$l["type"]=="enum")$Pa[]=(in_array(0,$V)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$V)).")";else{$ee=preg_match('~char|text|enum|set~',$l["type"]);$W=$this->processInput($l,(!$Tc&&$ee&&preg_match('~^[^%]+$~',$V)?"%$V%":$V));$Pa[]=$C.($W=="NULL"?" IS".($Tc==">="?" NOT":"")." $W":(in_array($Tc,$this->operators)||$Tc=="="?" $Tc $W":($ee?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($w<0&&$V=="0")$Pa[]="$C IS NULL";}}}$K[]=($Pa?"(".implode(" OR ",$Pa).")":"0");}}return$K;}function
selectOrderProcess($m,$t){$lc=$_GET["index_order"];if($lc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($lc!=""?array($t[$lc]):$t)as$s){if($lc!=""||$s["type"]=="INDEX"){$Zb=array_filter($s["descs"]);$bb=false;foreach($s["columns"]as$V){if(preg_match('~date|timestamp~',$m[$V]["type"])){$bb=true;break;}}$K=array();foreach($s["columns"]as$w=>$V)$K[]=idf_escape($V).(($Zb?$s["descs"][$w]:$bb)?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$Nb){if($_POST["email_append"])return
true;if($_POST["email"]){$Hd=0;if($_POST["all"]||$_POST["check"]){$l=idf_escape($_POST["email_field"]);$Ud=$_POST["email_subject"];$A=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Ud.$A",$Bc);$M=get_rows("SELECT DISTINCT $l".($Bc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Bc[1]))):"")." FROM ".table($_GET["select"])." WHERE $l IS NOT NULL AND $l != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$m=fields($_GET["select"]);foreach($this->rowDescriptions($M,$Nb)as$L){$yd=array('{\\'=>'{');foreach($Bc[1]as$V)$yd['{$'."$V}"]=$this->editVal($L[$V],$m[$V]);$ob=$L[$_POST["email_field"]];if(is_mail($ob)&&send_mail($ob,strtr($Ud,$yd),strtr($A,$yd),$_POST["email_from"],$_FILES["email_files"]))$Hd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('WysÅ‚ano %d e-mail.','WysÅ‚ano %d e-maile.','WysÅ‚ano %d e-maili.'),$Hd));}return
false;}function
selectQueryBuild($N,$X,$p,$D,$x,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($l){$K=array();if($l["null"]&&preg_match('~blob~',$l["type"]))$K["NULL"]='puste';$K[""]=($l["null"]||$l["auto_increment"]||like_bool($l)?"":"*");if(preg_match('~date|time~',$l["type"]))$K["now"]='teraz';if(preg_match('~_(md5|sha1)$~i',$l["field"],$_))$K[]=strtolower($_[1]);return$K;}function
editInput($R,$l,$c,$W){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'bez zmian'."</i></label> ":"").enum_input("radio",$c,$l,($W||isset($_GET["select"])?$W:0),($l["null"]?"":null));$Wc=$this->_foreignKeyOptions($R,$l["field"],$W);if($Wc!==null)return(is_array($Wc)?"<select$c>".optionlist($Wc,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Wc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($l["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($l))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$ec="";if(preg_match('~time~',$l["type"]))$ec='HH:MM:SS';if(preg_match('~date|timestamp~',$l["type"]))$ec='d.m.[rrrr]'.($ec?" [$ec]":"");if($ec)return"<input value='".h($W)."'$c> ($ec)";if(preg_match('~_(md5|sha1)$~i',$l["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($l,$W,$o=""){if($o=="now")return"$o()";$K=$W;if(preg_match('~date|timestamp~',$l["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$_))$K=($_["p1"]!=""?$_["p1"]:($_["p2"]!=""?($_["p2"]<70?20:19).$_["p2"]:gmdate("Y")))."-$_[p3]$_[p4]-$_[p5]$_[p6]".end($_);$K=($l["type"]=="bit"&&preg_match('~^[0-9]+$~',$W)?$K:q($K));if($W==""&&like_bool($l))$K="0";elseif($W==""&&($l["null"]||!preg_match('~char|text~',$l["type"])))$K="NULL";elseif(preg_match('~^(md5|sha1)$~',$o))$K="$o($K)";return
unconvert_field($l,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($h){}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Td,$I){global$f;$J=$f->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Td=="table"){dump_csv(array_keys($L));$Td="INSERT";}dump_csv($L);}}}function
dumpFilename($hc){return
friendly_url($hc);}function
dumpHeaders($hc,$Jc=false){$Ab="csv";header("Content-Type: text/csv; charset=utf-8");return$Ab;}function
homepage(){return
true;}function
navigation($Ic){global$ca;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" target="_blank" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ic=="auth"){$Jb=true;foreach((array)$_SESSION["pwds"]as$De=>$Kd){foreach($Kd[""]as$T=>$G){if($G!==null){if($Jb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Jb=false;}echo"<a href='".h(auth_url($De,"",$T))."'>".($T!=""?h($T):"<i>".'puste'."</i>")."</a><br>\n";}}}}else{$this->databasesPrint($Ic);if($Ic!="db"&&$Ic!="ns"){$S=table_status('',true);if(!$S)echo"<p class='message'>".'Brak tabel.'."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Ic){}function
tablesPrint($ae){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($ae
as$L){$C=$this->tableName($L);if(isset($L["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"]||$_GET["edit"]==$L["Name"])." title='".'PokaÅ¼ dane'."'>$C</a><br>\n";}}function
_foreignColumn($Nb,$d){foreach((array)$Nb[$d]as$Mb){if(count($Mb["source"])==1){$C=$this->rowDescription($Mb["table"]);if($C!=""){$r=idf_escape($Mb["target"][0]);return
array($Mb["table"],$r,$C);}}}}function
_foreignKeyOptions($R,$d,$W=null){global$f;if(list($be,$r,$C)=$this->_foreignColumn(column_foreign_keys($R),$d)){$K=&$this->_values[$be];if($K===null){$S=table_status($be);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $r, $C FROM ".table($be)." ORDER BY 2"));}if(!$K&&$W!==null)return$f->result("SELECT $C FROM ".table($be)." WHERE $r = ".q($W));return$K;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($he,$k="",$Ca=array(),$ie=""){global$ba,$ca,$b,$f,$ib,$v;page_headers();$je=$he.($ie!=""?": $ie":"");$ke=strip_tags($je.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ke,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.2&amp;driver=mysql",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.2&amp;driver=mysql",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2&amp;driver=mysql",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.2&amp;driver=mysql",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($f)?substr($f->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$ca');"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$v,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ca!==null){$y=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$ib[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):'Serwer');if($Ca===false)echo"$O\n";else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ca)))echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ca)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ca
as$w=>$V){$bb=(is_array($V)?$V[1]:h($V));if($bb!="")echo"<a href='".h(ME."$w=").urlencode(is_array($V)?$V[0]:$V)."'>$bb</a> &raquo; ";}}echo"$he\n";}}echo"<h2>$je</h2>\n";restart_session();page_messages($k);$Ya=&get_session("dbs");if(DB!=""&&$Ya&&!in_array(DB,$Ya,true))$Ya=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($k){$Ae=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Hc=$_SESSION["messages"][$Ae];if($Hc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Hc)."</div>\n";unset($_SESSION["messages"][$Ae]);}if($k)echo"<div class='error'>$k</div>\n";}function
page_footer($Ic=""){global$b,$me;echo'</div>

';if($Ic!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Wyloguj" id="logout">
<input type="hidden" name="token" value="',$me,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($Ic);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($U,$He){$Cd='';foreach($U
as$V)$Cd.=pack('V',$V);if($He)return
substr($Cd,0,end($U));return$Cd;}function
str2long($Cd,$He){$U=array_values(unpack('V*',str_pad($Cd,4*ceil(strlen($Cd)/4),"\0")));if($He)$U[]=strlen($Cd);return$U;}function
xxtea_mx($Z,$Y,$Wd,$pc){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($Wd^$Y)+($pc^$Z));}function
encrypt_string($Rd,$w){if($Rd=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$U=str2long($Rd,true);$B=count($U)-1;$Z=$U[$B];$Y=$U[0];$pd=floor(6+52/($B+1));$Wd=0;while($pd-->0){$Wd=int32($Wd+0x9E3779B9);$kb=$Wd>>2&3;for($E=0;$E<$B;$E++){$Y=$U[$E+1];$Kc=xxtea_mx($Z,$Y,$Wd,$w[$E&3^$kb]);$Z=int32($U[$E]+$Kc);$U[$E]=$Z;}$Y=$U[0];$Kc=xxtea_mx($Z,$Y,$Wd,$w[$E&3^$kb]);$Z=int32($U[$B]+$Kc);$U[$B]=$Z;}return
long2str($U,false);}function
decrypt_string($Rd,$w){if($Rd=="")return"";if(!$w)return
false;$w=array_values(unpack("V*",pack("H*",md5($w))));$U=str2long($Rd,false);$B=count($U)-1;$Z=$U[$B];$Y=$U[0];$pd=floor(6+52/($B+1));$Wd=int32($pd*0x9E3779B9);while($Wd){$kb=$Wd>>2&3;for($E=$B;$E>0;$E--){$Z=$U[$E-1];$Kc=xxtea_mx($Z,$Y,$Wd,$w[$E&3^$kb]);$Y=int32($U[$E]-$Kc);$U[$E]=$Y;}$Z=$U[$B];$Kc=xxtea_mx($Z,$Y,$Wd,$w[$E&3^$kb]);$Y=int32($U[0]-$Kc);$U[0]=$Y;$Wd=int32($Wd-0x9E3779B9);}return
long2str($U,true);}$f='';$bc=$_SESSION["token"];if(!$bc)$_SESSION["token"]=rand(1,1e6);$me=get_token();$ed=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($w)=explode(":",$V);$ed[$w]=$V;}}$ra=$_POST["auth"];if($ra){session_regenerate_id();$i=$ra["driver"];$O=$ra["server"];$T=$ra["username"];$G=$ra["password"];$h=$ra["db"];set_password($i,$O,$T,$G);$_SESSION["db"][$i][$O][$T][$h]=true;if($ra["permanent"]){$w=base64_encode($i)."-".base64_encode($O)."-".base64_encode($T)."-".base64_encode($h);$md=$b->permanentLogin(true);$ed[$w]="$w:".base64_encode($md?encrypt_string($G,$md):"");cookie("adminer_permanent",implode(" ",$ed));}if(count($_POST)==1||DRIVER!=$i||SERVER!=$O||$_GET["username"]!==$T||DB!=$h)redirect(auth_url($i,$O,$T,$h));}elseif($_POST["logout"]){if($bc&&!verify_token()){page_header('Wyloguj','NieprawidÅ‚owy token CSRF. SprÃ³buj wysÅ‚aÄ‡ formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyÅ›lnie.');}}elseif($ed&&!$_SESSION["pwds"]){session_regenerate_id();$md=$b->permanentLogin();foreach($ed
as$w=>$V){list(,$Fa)=explode(":",$V);list($De,$O,$T,$h)=array_map('base64_decode',explode("-",$w));set_password($De,$O,$T,decrypt_string(base64_decode($Fa),$md));$_SESSION["db"][$De][$O][$T][$h]=true;}}function
unset_permanent(){global$ed;foreach($ed
as$w=>$V){list($De,$O,$T,$h)=array_map('base64_decode',explode("-",$w));if($De==DRIVER&&$O==SERVER&&$T==$_GET["username"]&&$h==DB)unset($ed[$w]);}cookie("adminer_permanent",implode(" ",$ed));}function
auth_error($zb=null){global$f,$b,$bc;$Ld=session_name();$k="";if(!$_COOKIE[$Ld]&&$_GET[$Ld]&&ini_bool("session.use_only_cookies"))$k='Wymagana jest obsÅ‚uga sesji w PHP.';elseif(isset($_GET["username"])){if(($_COOKIE[$Ld]||$_GET[$Ld])&&!$bc)$k='Sesja wygasÅ‚a, zaloguj siÄ™ ponownie.';else{$G=get_password();if($G!==null){$k=h($zb?$zb->getMessage():(is_string($f)?$f:'NieprawidÅ‚owe dane logowania.'));if($G===false)$k.='<br>'.sprintf('WaÅ¼noÅ›Ä‡ hasÅ‚a gÅ‚Ã³wnego wygasÅ‚a. <a href="http://www.adminer.org/pl/extension/" target="_blank">Zaimplementuj</a> wÅ‚asnÄ… metodÄ™ %s, aby ustawiÄ‡ je na staÅ‚e.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$cd=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$cd["lifetime"]);page_header('Zaloguj siÄ™',$k,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($De,$O,$T,$G){$_SESSION["pwds"][$De][$O][$T]=($_COOKIE["adminer_key"]?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$K=get_session("pwds");if(is_array($K))$K=($_COOKIE["adminer_key"]?decrypt_string($K[0],$_COOKIE["adminer_key"]):false);return$K;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Brak rozszerzenia',sprintf('Å»adne z rozszerzeÅ„ PHP umoÅ¼liwiajÄ…cych poÅ‚Ä…czenie siÄ™ z bazÄ… danych (%s) nie jest dostÄ™pne.',implode(", ",$id)),false);page_footer("auth");exit;}$f=connect();}if(!is_object($f)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$i=new
Min_Driver($f);if($ra&&$_POST["token"])$_POST["token"]=$me;$k='';if($_POST){if(!verify_token()){$mc="max_input_vars";$Fc=ini_get($mc);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$w){$V=ini_get($w);if($V&&(!$Fc||$V<$Fc)){$mc=$w;$Fc=$V;}}}$k=(!$_POST["token"]&&$Fc?sprintf('Przekroczono maksymalnÄ… liczbÄ™ pÃ³l. ZwiÄ™ksz %s.',"'$mc'"):'NieprawidÅ‚owy token CSRF. SprÃ³buj wysÅ‚aÄ‡ formularz ponownie.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$k=sprintf('PrzesÅ‚ano zbyt duÅ¼o danych. Zmniejsz objÄ™toÅ›Ä‡ danych lub zwiÄ™ksz zmiennÄ… konfiguracyjnÄ… %s.',"'post_max_size'");if(isset($_GET["sql"]))$k.=' '.'WiÄ™ksze pliki SQL moÅ¼esz wgraÄ‡ na serwer poprzez FTP przed zaimportowaniem.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$f->select_db($b->database());function
email_header($cc){return"=?UTF-8?B?".base64_encode($cc)."?=";}function
send_mail($ob,$Ud,$A,$Tb="",$Hb=array()){$j=(DIRECTORY_SEPARATOR=="/"?"\n":"\r\n");$A=str_replace("\n",$j,wordwrap(str_replace("\r","","$A\n")));$Ba=uniqid("boundary");$qa="";foreach((array)$Hb["error"]as$w=>$V){if(!$V)$qa.="--$Ba$j"."Content-Type: ".str_replace("\n","",$Hb["type"][$w]).$j."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Hb["name"][$w])."\"$j"."Content-Transfer-Encoding: base64$j$j".chunk_split(base64_encode(file_get_contents($Hb["tmp_name"][$w])),76,$j).$j;}$ya="";$dc="Content-Type: text/plain; charset=utf-8$j"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$Ba--$j";$ya="--$Ba$j$dc$j$j";$dc="Content-Type: multipart/mixed; boundary=\"$Ba\"";}$dc.=$j."MIME-Version: 1.0$j"."X-Mailer: Adminer Editor".($Tb?$j."From: ".str_replace("\n","",$Tb):"");return
mail($ob,email_header($Ud),$ya.$A.$qa,$dc);}function
like_bool($l){return
preg_match("~bool|(tinyint|bit)\\(1\\)~",$l["full_type"]);}$Qc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$ib[DRIVER]='Zaloguj siÄ™';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];$m=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$f->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$m),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$m=fields($a);$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$m):""):where($_GET,$m));$_e=(isset($_GET["select"])?$_POST["edit"]:$X);foreach($m
as$C=>$l){if(!isset($l["privileges"][$_e?"update":"insert"])||$b->fieldName($l)=="")unset($m[$C]);}if($_POST&&!$k&&!isset($_GET["select"])){$z=$_POST["referer"];if($_POST["insert"])$z=($_e?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$z))$z=ME."select=".urlencode($a);$t=indexes($a);$ve=unique_array($_GET["where"],$t);$sd="\nWHERE $X";if(isset($_POST["delete"]))queries_redirect($z,'Rekord zostaÅ‚ usuniÄ™ty.',$i->delete($a,$sd,!$ve));else{$P=array();foreach($m
as$C=>$l){$V=process_input($l);if($V!==false&&$V!==null)$P[idf_escape($C)]=$V;}if($_e){if(!$P)redirect($z);queries_redirect($z,'Rekord zostaÅ‚ zaktualizowany.',$i->update($a,$P,$sd,!$ve));if(is_ajax()){page_headers();page_messages($k);exit;}}else{$J=$i->insert($a,$P);$vc=($J?last_id():0);queries_redirect($z,sprintf('Rekord%s zostaÅ‚ dodany.',($vc?" $vc":"")),$J);}}}$Zd=$b->tableName(table_status1($a,true));page_header(($_e?'Edytuj':'Dodaj'),$k,array("select"=>array($a,$Zd)),$Zd);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($X){$N=array();foreach($m
as$C=>$l){if(isset($l["privileges"]["select"])){$oa=convert_field($l);if($_POST["clone"]&&$l["auto_increment"])$oa="''";if($v=="sql"&&preg_match("~enum|set~",$l["type"]))$oa="1*".idf_escape($C);$N[]=($oa?"$oa AS ":"").idf_escape($C);}}$L=array();if(!support("table"))$N=array("*");if($N){$J=$i->select($a,$N,array($X),$N,array(),(isset($_GET["select"])?2:1),0);$L=$J->fetch_assoc();if(isset($_GET["select"])&&(!$L||$J->fetch_assoc()))$L=null;}}if(!support("table")&&!$m){$r=($v=="mongo"?"_id":"itemName()");if(!$X){$L=$i->select($a,array("*"),$X,array("*"),array(),1,0);$L=($L?$L->fetch_assoc():array($r=>""));}if($L){foreach($L
as$w=>$V){if(!$X)$L[$w]=null;$m[$w]=array("field"=>$w,"null"=>($w!=$r),"auto_increment"=>($w==$r));}}}if($L===false)echo"<p class='error'>".'Brak rekordÃ³w.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$m)echo"<p class='error'>".'Brak uprawnieÅ„ do edycji tej tabeli'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$C=>$l){echo"<tr><th>".$b->fieldName($l);$ab=$_GET["set"][bracket_escape($C)];if($ab===null){$ab=$l["default"];if($l["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$ab,$wd))$ab=$wd[1];}$W=($L!==null?($L[$C]!=""&&$v=="sql"&&preg_match("~enum|set~",$l["type"])?(is_array($L[$C])?array_sum($L[$C]):+$L[$C]):$L[$C]):(!$_e&&$l["auto_increment"]?"":(isset($_GET["select"])?false:$ab)));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$l);$o=($_POST["save"]?(string)$_POST["function"][$C]:($_e&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if(preg_match("~time~",$l["type"])&&$W=="CURRENT_TIMESTAMP"){$W="";$o="now";}input($l,$W,$o);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' value='".h($_POST["field_keys"][0])."'>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array()),$_POST["field_funs"][0])."<td><input name='field_vals[]' value='".h($_POST["field_vals"][0])."'>"."\n";echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($_e?'Zapisz i kontynuuj edycjÄ™'."' onclick='return !ajaxForm(this.form, \"".'Saving'.'...", this)':'Zapisz i dodaj nastÄ™pny')."' title='Ctrl+Shift+Enter'>\n";}echo($_e?"<input type='submit' name='delete' value='".'UsuÅ„'."'".confirm().">\n":($_POST||!$m?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$me,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$S=table_status1($a);$t=indexes($a);$m=fields($a);$Pb=column_foreign_keys($a);$Pc="";if($S["Oid"]){$Pc=($v=="sqlite"?"rowid":"oid");$t[]=array("type"=>"PRIMARY","columns"=>array($Pc));}parse_str($_COOKIE["adminer_import"],$ia);$Bd=array();$e=array();$de=null;foreach($m
as$w=>$l){$C=$b->fieldName($l);if(isset($l["privileges"]["select"])&&$C!=""){$e[$w]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($l))$de=$b->selectLengthProcess();}$Bd+=$l["privileges"];}list($N,$p)=$b->selectColumnsProcess($e,$t);$u=count($p)<count($N);$X=$b->selectSearchProcess($m,$t);$D=$b->selectOrderProcess($m,$t);$x=$b->selectLimitProcess();$Tb=($N?implode(", ",$N):"*".($Pc?", $Pc":"")).convert_fields($e,$m,$N)."\nFROM ".table($a);$Wb=($p&&$u?"\nGROUP BY ".implode(", ",$p):"").($D?"\nORDER BY ".implode(", ",$D):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$we=>$L){$oa=convert_field($m[key($L)]);$N=array($oa?$oa:idf_escape(key($L)));$X[]=where_check($we,$m);$K=$i->select($a,$N,$X,$N,array(),1,0);if($K)echo
reset($K->fetch_row());}exit;}if($_POST&&!$k){$Je=$X;if(!$_POST["all"]&&is_array($_POST["check"]))$Je[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Je=($Je?"\nWHERE ".implode(" AND ",$Je):"");$kd=$ye=null;foreach($t
as$s){if($s["type"]=="PRIMARY"){$kd=array_flip($s["columns"]);$ye=($N?$kd:array());break;}}foreach((array)$ye
as$w=>$V){if(in_array(idf_escape($w),$N))unset($ye[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$ye===array())$I="SELECT $Tb$Je$Wb";else{$ue=array();foreach($_POST["check"]as$V)$ue[]="(SELECT".limit($Tb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m).$Wb,1).")";$I=implode(" UNION ALL ",$ue);}$b->dumpData($a,"table",$I);exit;}if(!$b->selectEmailProcess($X,$Pb)){if($_POST["save"]||$_POST["delete"]){$J=true;$ja=0;$P=array();if(!$_POST["delete"]){foreach($e
as$C=>$V){$V=process_input($m[$C]);if($V!==null&&($_POST["clone"]||$V!==false))$P[idf_escape($C)]=($V!==false?$V:idf_escape($C));}}if($_POST["delete"]||$P){if($_POST["clone"])$I="INTO ".table($a)." (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($a);if($_POST["all"]||($ye===array()&&is_array($_POST["check"]))||$u){$J=($_POST["delete"]?$i->delete($a,$Je):($_POST["clone"]?queries("INSERT $I$Je"):$i->update($a,$P,$Je)));$ja=$f->affected_rows;}else{foreach((array)$_POST["check"]as$V){$Ie="\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V,$m);$J=($_POST["delete"]?$i->delete($a,$Ie,1):($_POST["clone"]?queries("INSERT".limit1($I,$Ie)):$i->update($a,$P,$Ie)));if(!$J)break;$ja+=$f->affected_rows;}}}$A=lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordÃ³w.'),$ja);if($_POST["clone"]&&$J&&$ja==1){$vc=last_id();if($vc)$A=sprintf('Rekord%s zostaÅ‚ dodany.'," $vc");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$A,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$k='Ctrl+kliknij wartoÅ›Ä‡, aby jÄ… edytowaÄ‡.';else{$J=true;$ja=0;foreach($_POST["val"]as$we=>$L){$P=array();foreach($L
as$w=>$V){$w=bracket_escape($w,1);$P[idf_escape($w)]=(preg_match('~char|text~',$m[$w]["type"])||$V!=""?$b->processInput($m[$w],$V):"NULL");}$J=$i->update($a,$P," WHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($we,$m),!($u||$ye===array())," ");if(!$J)break;$ja+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordÃ³w.'),$ja),$J);}}elseif(!is_string($Fb=get_file("csv_file",true)))$k=upload_error($Fb);elseif(!preg_match('~~u',$Fb))$k='Kodowanie pliku musi byÄ‡ ustawione na UTF-8.';else{cookie("adminer_import","output=".urlencode($ia["output"])."&format=".urlencode($_POST["separator"]));$J=true;$Ma=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fb,$Bc);$ja=count($Bc[0]);$i->begin();$Id=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$M=array();foreach($Bc[0]as$w=>$V){preg_match_all("~((?>\"[^\"]*\")+|[^$Id]*)$Id~",$V.$Id,$Cc);if(!$w&&!array_diff($Cc[1],$Ma)){$Ma=$Cc[1];$ja--;}else{$P=array();foreach($Cc[1]as$q=>$Ja)$P[idf_escape($Ma[$q])]=($Ja==""&&$m[$Ma[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$M[]=$P;}}$J=(!$M||$i->insertUpdate($a,$M,$kd));if($J)$i->commit();queries_redirect(remove_from_uri("page"),lang(array('%d rekord zostaÅ‚ zaimportowany.','%d rekordy zostaÅ‚y zaimportowane.','%d rekordÃ³w zostaÅ‚o zaimportowanych.'),$ja),$J);$i->rollback();}}}$Zd=$b->tableName($S);if(is_ajax()){page_headers();ob_start();}else
page_header('pokaÅ¼'.": $Zd",$k);$P=null;if(isset($Bd["insert"])||!support("table")){$P="";foreach((array)$_GET["where"]as$V){if(count($Pb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!preg_match('~[_%]~',$V["val"]))))$P.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($S,$P);if(!$e&&support("table"))echo"<p class='error'>".'Nie udaÅ‚o siÄ™ pobraÄ‡ danych z tabeli'.($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($N,$e);$b->selectSearchPrint($X,$e,$t);$b->selectOrderPrint($D,$e,$t);$b->selectLimitPrint($x);$b->selectLengthPrint($de);$b->selectActionPrint($t);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$n=$f->result(count_rows($a,$X,$u,$p));$F=floor(max(0,$n-1)/$x);}$Fd=$N;if(!$Fd){$Fd[]="*";if($Pc)$Fd[]=$Pc;}$Sa=convert_fields($e,$m,$N);if($Sa)$Fd[]=substr($Sa,2);$J=$i->select($a,$Fd,$X,$p,$D,$x,$F,true);if(!$J)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$F)$J->seek($x*$F);$qb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$v=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last"&&+$x&&$p&&$u&&$v=="sql")$n=$f->result(" SELECT FOUND_ROWS()");if(!$M)echo"<p class='message'>".'Brak rekordÃ³w.'."\n";else{$xa=$b->backwardKeys($a,$Zd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$p&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'Modify'."</a>");$Lc=array();$Vb=array();reset($N);$ud=1;foreach($M[0]as$w=>$V){if($w!=$Pc){$V=$_GET["columns"][key($N)];$l=$m[$N?($V?$V["col"]:current($N)):$w];$C=($l?$b->fieldName($l,$ud):($V["fun"]?"*":$w));if($C!=""){$ud++;$Lc[$w]=$C;$d=idf_escape($w);$gc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$bb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($gc.($D[0]==$d||$D[0]==$w||(!$D&&$u&&$p[0]==$d)?$bb:'')).'">';echo
apply_sql_function($V["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($gc.$bb)."' title='".'malejÄ…co'."' class='text'> â†“</a>";if(!$V["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Szukaj'.'" class="text jsonly"> =</a>';echo"</span>";}$Vb[$w]=$V["fun"];next($N);}}$yc=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$w=>$V)$yc[$w]=max($yc[$w],min(40,strlen(utf8_decode($V))));}}echo($xa?"<th>".'Relacje':"")."</thead>\n";if(is_ajax()){if($x%2==1&&$F%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($M,$Pb)as$B=>$L){$ve=unique_array($M[$B],$t);if(!$ve){$ve=array();foreach($M[$B]as$w=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$ve[$w]=$V;}}$we="";foreach($ve
as$w=>$V){if(($v=="sql"||$v=="pgsql")&&strlen($V)>64){$w="MD5(".(strpos($w,'(')?$w:idf_escape($w)).")";$V=md5($V);}$we.="&".($V!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($V):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$p&&$N?"":"<td>".checkbox("check[]",substr($we,1),in_array(substr($we,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($u||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$we)."'>".'edytuj'."</a>"));foreach($L
as$w=>$V){if(isset($Lc[$w])){$l=$m[$w];if($V!=""&&(!isset($qb[$w])||$qb[$w]!=""))$qb[$w]=(is_mail($V)?$Lc[$w]:"");$y="";if(preg_match('~blob|bytea|raw|file~',$l["type"])&&$V!="")$y=ME.'download='.urlencode($a).'&field='.urlencode($w).$we;if(!$y&&$V!==null){foreach((array)$Pb[$w]as$Ob){if(count($Pb[$w])==1||end($Ob["source"])==$w){$y="";foreach($Ob["source"]as$q=>$Nd)$y.=where_link($q,$Ob["target"][$q],$M[$B][$Nd]);$y=($Ob["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Ob["db"]),ME):ME).'select='.urlencode($Ob["table"]).$y;if(count($Ob["source"])==1)break;}}}if($w=="COUNT(*)"){$y=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$ve))$y.=where_link($q++,$U["col"],$U["val"],$U["op"]);}foreach($ve
as$pc=>$U)$y.=where_link($q++,$pc,$U);}$V=select_value($V,$y,$l,$de);$r=h("val[$we][".bracket_escape($w)."]");$W=$_POST["val"][$we][bracket_escape($w)];$mb=!is_array($L[$w])&&is_utf8($V)&&$M[$B][$w]==$L[$w]&&!$Vb[$w];$ce=preg_match('~text|lob~',$l["type"]);if(($_GET["modify"]&&$mb)||$W!==null){$Yb=h($W!==null?$W:$L[$w]);echo"<td>".($ce?"<textarea name='$r' cols='30' rows='".(substr_count($L[$w],"\n")+1)."'>$Yb</textarea>":"<input name='$r' value='$Yb' size='$yc[$w]'>");}else{$Ac=strpos($V,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($Ac?2:($ce?1:0)).($mb?"":", '".h('UÅ¼yj linku edycji aby zmieniÄ‡ tÄ™ wartoÅ›Ä‡.')."'").");\">$V";}}}if($xa)echo"<td>";$b->backwardKeysPrint($xa,$M[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($M||$F)&&!is_ajax()){$yb=true;if($_GET["page"]!="last"){if(!+$x)$n=count($M);elseif($v!="sql"||!$u){$n=($u?false:found_rows($S,$X));if($n<max(1e4,2*($F+1)*$x))$n=reset(slow_query(count_rows($a,$X,$u,$p)));else$yb=false;}}if(+$x&&($n===false||$n>$x||$F)){echo"<p class='pages'>";$Dc=($n===false?$F+(count($M)>=$x?2:1):floor(($n-1)/$x));if($v!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($F+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$F).($F>5?" ...":"");for($q=max(1,$F-4);$q<min($Dc,$F+5);$q++)echo
pagination($q,$F);if($Dc>0){echo($F+5<$Dc?" ...":""),($yb&&$n!==false?pagination($Dc,$F):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$Dc'>".'ostatni'."</a>");}echo(($n===false?count($M)+1:$n-$F*$x)>$x?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$x).', \''.'Wczytywanie'.'...\');">'.'Wczytaj wiÄ™cej danych'.'</a>':'');}else{echo'Strona'.":",pagination(0,$F).($F>1?" ...":""),($F?pagination($F,$F):""),($Dc>$F?pagination($F+1,$F).($Dc>$F+1?" ...":""):"");}}echo"<p class='count'>\n",($n!==false?"(".($yb?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordÃ³w'),$n).") ":"");$gb=($yb?"":"~ ").$n;echo
checkbox("all",1,0,'wybierz wszystkie',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$gb' : checked); selectCount('selected2', this.checked || !checked ? '$gb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>Modify</legend><div>
<input type="submit" value="Zapisz zmiany"',($_GET["modify"]?'':' title="'.'Ctrl+kliknij wartoÅ›Ä‡, aby jÄ… edytowaÄ‡.'.'"'),'>
</div></fieldset>
<fieldset><legend>Selected <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="UsuÅ„"',confirm(),'>
</div></fieldset>
';}$Qb=$b->dumpFormat();foreach((array)$_GET["columns"]as$d){if($d["fun"]){unset($Qb['sql']);break;}}if($Qb){print_fieldset("export",'Eksport'." <span id='selected2'></span>");$ad=$b->dumpOutput();echo($ad?html_select("output",$ad,$ia["output"])." ":""),html_select("format",$Qb,$ia["format"])," <input type='submit' name='export' value='".'Eksport'."'>\n","</div></fieldset>\n";}echo(!$p&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ia["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($qb,'strlen'),$e);echo"<p><input type='hidden' name='token' value='$me'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$f->query("KILL ".(+$_POST["kill"]));elseif(list($R,$r,$C)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$x=11;$J=$f->query("SELECT $r, $C FROM ".table($R)." WHERE ".(preg_match('~^[0-9]+$~',$_GET["value"])?"$r = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT $x");for($q=1;($L=$J->fetch_row())&&$q<$x;$q++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($r))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($L)echo"...\n";}exit;}else{page_header('Serwer',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Szukaj'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabela'.'<td>'.'Liczba rekordÃ³w'."</thead>\n";foreach(table_status()as$R=>$L){$C=$b->tableName($L);if(isset($L["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$C</a>";$V=number_format($L["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();