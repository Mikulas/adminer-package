<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 4.0.1
*/error_reporting(6135);$Gc=!preg_match('~^(unsafe_raw)?$~',ini_get("filter.default"));if($Gc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$wh=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($wh)$$X=$wh;}}if(function_exists("mb_internal_encoding"))mb_internal_encoding("8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©”vt2‚Ó!–r0Ïãã£t~½U'3M€ÉW„B¦'cÍPÂ:6T\rc£A¾zr_îWK¶\r-¼VNFS%~Ãc²Ùí&›\\^ÊrÀ›­æu‚ÅÃôÙ‹4'7k¶è¯ÂãQÔæhš'g\rFB\ryT7SS¥PĞ1=Ç¤cIèÊ:d”ºm>£S8L†Jœt.M¢Š	Ï‹`'C¡¼ÛĞ889¤È QØıŒî2#8Ğ­£’˜6mú²†ğjˆ¢h«<…Œ°«Œ9/ë˜ç:Jê)Ê‚¤\0d>!\0Z‡ˆvì»në¾ğ¼o(Úó¥ÉkÔ7½sàù>Œî†!ĞR\"*nSı\0@P\"Áè’(‹#[¶¥£@g¹oü­’znş9k¤8†nš™ª1´I*ˆô=Ín²¤ª¸è0«c(ö;¾Ã Ğè!°üë*cì÷>Î¬E7DñLJ© 1ÊJ=ÓÚŞ1L‚û?Ğs=#`Ê3\$4ì€úÈuÈ±ÌÎzGÑC YAt«?;×QÒk&ÇïYP¿uèåÇ¯}UaHV%G;ƒs¼”<A\0\\¼ÔPÑ\\Âœ&ÂªóV¦ğ\n£SUÃtíÅÇrŒêˆÆ2¤	l^íZ6˜ej…Á­³A·dó[İsÕ¶ˆJP”ªÊóˆÒŒŠ8è=»ƒ˜à6#Ë‚74*óŸ¨#eÈÀŞ!Õ7{Æ6“¿<oÍCª9v[–MôÅ-`Óõkö>lÙÚ´‹åIªƒHÚ3xú€›äw0t6¾Ã%MR%³½jhÚB˜<´\0ÉAQ<P<:šãu/¤;\\> Ë-¹„ÊˆÍÁQH\nv¡L+vÖÃ¦ì<ï\rèåvàöî¹\\* àÉçÓ´İ¢gŒnË©¸¹TĞ©2P•\r¨øß‹\"+z 8£ ¶:#€ÊèÃÎ2‹ºJ[i—‚£¨;z˜ûÑô¡rÊ3#¨Ù‰ :ãní\rã½ƒeÙpdİİ è2cˆê4²k¿Š£\rG•æE6_²ªÊØŞ‰b‹/Œ«HB%ò0ë¢>ÈÈğhoWÃnxlÖ æµƒCQ^€°ĞÔÿßñ\r„Š¾¶4lK{şZÆü:†ĞÜÃƒŸ.¦p¨§Ä‚éJóB-Å+B”´‘(ëTòŸ%®µJ›0ªlØT¶`+É-Á¾@BÚáÛ„Vá’Ä\0ÂÏC¼,ì¯0tâàŒF‡‰å?Ä Ë\na@ÉŒ>‚âZEC“ôO-æ›¤^Q€&ßÖù)I)®¤ÄÀR„]\r¡”9”7_ˆ¢\rÉF80µObù	€‘î>ºäı\nRı_ˆÑ8æ‚ØÙ«äov0¤bCA¸F!Ñt—–Äƒ%0”/‘zAYO(4«‹¡ˆ¨Ò	'Ÿ] Iéí8hHÂ05˜3ò@x&nˆ’|TÓ³³)`.“s6eY˜D¦z¸Œ®¥ƒJÑ“ô.„ñ{GEb¹Ó‹¡˜‹†2Õ×{\$**ı¾@İC-:zYHZIôà5F]¦²YúùCªOêAÂÚó`x'´.*9t'{ÿ(êšwP¶¾ Ñ=¢*‰†ú*üxwråÔ*c‚Ìc|„DŸ“ÚV—–\r†V.‡0âÆ™V¤dˆ?Ò€üê,EÍ`T¦É6Ûˆ-“Åì¾ÅÚT[Ñªz©‚.Ar±£Í€Pøºnƒc=aÔ9Fònß!ÙuáÎA©Şƒ0iPó¬”îºJ6eäT]VØ[\rXÌáaŸ–vkõ\n+EˆáÜ•*\0¶~¶Æù@g\"ÌNCI\$àÉŒƒ€êx@WÃy¼*vuD‚8÷=ë­ª-v´®4›dÃD’yI‚Ò¤­¼_hŞÀ'z’VÍ¶• Ü6€Yz:íQc³Ú²”õwŒª0ÀÅ]xrÄ!å@¶½/-¡*Ì5©«¤I.±]ĞYxuÁİé½o&Ö:Pß|CyÖ²wÖûÇÀ@L¯´Õ£GfØ†å¯)^¤Æ¢+–ÍQ5‚ºÀÆL4\$Mpo‰0i¦\rÛ»Ïk­ô4*w7•¯S'’—Zİ„nAb¨!1‡)ñoİ–9öc\0bÊïo-~2w4X,,…¶8m'™›˜ìªY•ƒFH–Á3GqQZ-l™\0ãÊwìe‹d5¥¢»ÁğéiÏ.«–™dã)\\çh~\\WÌ€æ™LÃ¡¸ÜĞmgòu«2lbš•àZçCĞ-6Èê–dœl£¨b\re×Mu§gra6ZD†­ƒUÊ™!K-œŸ0Ó9–beH”\"ê×[JË'¨¾»Z¼¡oµaº)‹XÉÆƒ&—tÒ8ºì€GZ.®ÅÚ˜Âë+³lr£ÊíÌ¯]kÙ#£Àj-§¹ëúW´ÉP,¡àè>@ä` \rc3\"\\ÒŠq2‰z›âê@Mï¾poà‘ª0p­ò¤d~OÙ™Ç¦ö…½¸]¡´aï»;IxÆùxh°aÌÍ‡ò¬0Nàâ~gâï?	€äLŒcuÍäw”£}úŠªt™æ<±…¥ÃÅ·¼qS’vÚ°@gsW}òL¸(kyÈ¹/6»CĞ8\rŒ‡°]\\£çLUöŞ^•nqiQÏn™T>A9\"ô´—kFôÕÚú.*îß¹²¹íßT†òóCµ‘r?:ÀÜ„üwMß,î\$m|‘xîm‘øÿ“¡÷©Bmu	®ğ=é[ˆÆ ynÃ'÷½h¾ûÚì@óŞCœv¥S2dSVÑ ¨(‡ñ\">H‰{¾-G˜ºmM¼b+hBb›cp€Ãh_ Á¶}qöşïÖ«¿e¶†_ÂmÁinüæà8€àÃ#çı`·öşÿÀm?õÿ«ü~ˆÿcDşoşş ÆĞª¯úıÜşoô4@ïÜéØ‚é<I\0``fˆÌŠº8	€ÉD”OªıôzÀŞşpM\0ê\rğ\0üĞş\"¤xşhğ^§ÀØğjşpp¿ptƒ0x§à¿0oPdbi<+àùïó0j•à`)SpığLàì)° ığ²1‹0ºĞ,ò¥ìù\n`ığjZÏ½ğ‡p±P^ÿPÓ0#)Íhğ‹èıçºxd0ÂĞ:++ô·É<úgß	ĞO`ÎûHûƒÙˆ\rbÒÛÑ%àÆ°ÔüQ'ñ-‘1P_°²\r¤cß+@®\rqèÑ(˜ÑGğ‰ñk1AwñwoÑ‚nşq2qd®‘\0×G\$ aÍOæ\0Û1ŒJ©Ñ'ñ³CÙ‘“‘„ŠÔ«ÆL`\$q±s±=‘JŒGHF.‚0Öö©=1÷Ïş™Àó\0Q‘ ‘„7æÿÒ§h3\nÙ 1à¯ş2fª`Â/ÌÿPq!0Ù!pªò?që\$Ğz,A°WrH§ë÷%pL\0Ï\$°×%‘?#&Òq	°Ñ&’s Úª&P­%²M(²'’ƒ'rF5ÀÆ™rM\$PÙ*R©(rğ7\0…,1^üF%ÒËì„&P_)…-0‚0\"Á¨Ä¬Öï¹ò¦“±ØH‰B–PÁñ¹#pûÌí° ªØ­Ã®+#òÕ\rppûBšÓüRS2&ò2¯Ñ-®şr±3nhÑö€Å0è§À§Jy%*°VÁò])²G\r\"­5,¾ù°õ]6Q7Ñ\$ƒ3€üPM8rÓ\$s‹3’Gàe0	<8B8©<,( ¨8²Ùàè	Ó&šJÙ;€¦Ï)¤«ÀR6pÖ­lğGË\"12ğ6Ë¾.\"æ¿bï7¡\$: Ü8bêA1Ù:Ã';?;G*\$¼,³Ànõ<`òTÓÊ/3Ï¨Ñf¬");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n0›†S‘Øa9œÅS`°Çˆ“Œ&Ó(°Ên0˜†QIî(.‹Äq¨àöO)ŒÆÌ¢ã‘”á1™E#)œŠx8\nâ‚ñğ¸\\9ŠDâ¹„®d+¡ÑÎgÁ%(R,‰BqH®' ‘Gâq.›,2„õÁÙö‚AGCyœÏ#L’S±„ä\nŠL†óÖ8n:ŒæS¡G‡:\$“%æö;—Æ)ÒØ™²Qš´G¢sEèÉØÄö­)“Nn¶MN‡S‘¸@t9L¶Û|1›Íæ³LêTi3›…†C	æ’{¾ßù±é¸Êw0±@¤wÓ™œñ®çƒãíÎ«¼Îw{…ÈJ8\\C(÷É¨ÄZ¦j9´a[ÀŞ -òä;!ƒHÌ<ŠÈ`æß…(äš±	+‚á¸ªÂ2\r£K¬9ğ@å Áè`…‹¼èPPä™0L#±#jô±Ã+ ¡EÉ’Ù£pæ9aèØÂ;mø\\8CzèàŠ€^ò¨]\rÃ°ø\\7C8_Dƒp^ÂP é\0Ì± w &c4^RãN9DÓ\\Ü™Ãjü3ÃÂ@Êä\r8a;Mïl7ƒd<3´cpŞĞ“Àæ:)\\;¯C ĞÑ†ïå!6HT¥,4Oã=Ñ†!pdÇTøÌSs;Éc}&&Œ¨ˆÂÅ„Á5cYÊíp‹1`ÓI£èbKPRtªf2Xé»›F Ã-!\rŒ–icYú„WL\\PŞ®#r'b–]^2İØääCÍ1É(4—&ÉôD¥*JÒÄ<†]Ã:¸è/ÀTô:tÜ¿7áèPaH^?ƒ(ÇsÆs¦0»ĞPQƒá0³ç„÷ô?á‘*—\rØb.Å.ğû™…ƒ2ñfO|fÄ<ìk2L¢…07êä®8øÈ!´£c+6fW#~<I+!-ĞQªâ×H÷:â!\"šèÊ2	5“ø’¶M£m±1+èØİ-±fá³‡»„¶8\\£˜·½nûFÔ<¡ŞÚÚ…ŞÊìò¸èÜ\r#ê…aväİƒàö>…2’1ÁN(Èğ<¶²´ô¨XñtÀ‹†§cŠ•Û:•Úù‚¦®«®'‰ò€¡ÊWÚŒê€RE8ÒØ±›p@š…Ü èÎú5ÚÑ¨À·(8/Ñ§b3ö~\"J;é©Ò)^„=‡dŠv²JÀ¤şäÌ'\rí:ÛÃ¶È§[ íÆ˜ÅƒYvåüÜ×ä÷ŸYæà¶’CLĞ(7a„ÀÎŠ	z¤a­³±ÕÖgƒ2\\\rªô“ÂäBÛ%Q œ.¾øA¡I	\r±-%Îém-Ïe©·\0†ÈÓ/DZ !Pöxƒ H´6`X„b*g4E¬Õ§…\"	PhÄÕiPÂàB\0ı‡ÀÈÁ›œeT†r°YJé\\+ˆ­‚¡ààäĞ:>&-Ÿ#¦€dÚy{IotÄ?CO ß›õ&qñ™\0ædùhGº;‡BÙ	B,\r)Ô4ƒÈíq#\rÁM&°VÄX!“éU·àÒáXô«z!å¤Å0æC’Ë.J964±É	#Œ8àÄ¦‰Ù“3jEÊ×ÿa #Àô	agæ 9ƒ¹1&¤à<l¡µÊÊ)H%4¨cÓH™½#:¥p]Ó°Âéàåy(ƒPraÁ˜,ÛşŸs¾rOˆ[¡Û®.NÔ°Ìø5(a#(Ê=˜É\$xy’\$È¡Q¬w¦üuœ4zr‘ùÏ:WT_(…¤ÁX70IÑH*ŒIè«—§I(1Ÿ%O^ˆ\"0{N'ÌŒ›aÒŒÑ²9GC”—K’e‚†¤êá¸¤²R†©NIh\0‚HŒ-†©äò“i¥§êÀˆÃ¥ciÓ&eCÉ™‚© eêjôÆj~1\r@éıÛÃ6\r‡Š€ÚEÅ\n ó6‡6wg=%H\n¥Óñ:¢ÉÇ5á|'›Uê¢Mê—8²ò†“JPÓUÚú¯”ÕIĞIã<É)„“ZœÙ8:í°d”ğéürşŞÕ!Á¦h.‚-\rÃZ¹ä9B¯Ãz´MÅ®W3tîªs«¨Â—²Á°ÇÇb—LcB íòVBtúC›ßvp.¤Ï[R^oŒ	+x>ù*Ããªv¨Ş9ßrN¥H!4vL1ğğÀßÁmÁ˜:áÜThGƒaŞ\"÷5ƒÛaëğ3ĞBÈ¢Ûˆ«5a­-42bšÑZ¨ÃpnO©şA\rŸ†`Ïlfíœ5Çğä>Õ™¡†[«#®ÍêÜp'Ş\rV\0®Ì/b/¾93ÖC‡Ö=•™às4¡˜:°ÊUè(9.Æ†G3›'Û†ˆ“ÏI©nXvpŸàÿ=X[nAÑ¸7QÒUKÚ‰¤ t¾O²Ó^dtzÔqåhbØ‹,š‹Ç÷ÒU8em¤ª“¢ÓÊ‰5¡ì­ ÉØ¼èk`Ks¦[¶7ßLÊ9y%q¶~¶ÿ#@VÌ¥¨Ö.fUš\$ŒD2f~¥:Ô3’PÄÃ^ŸzkA¶fÌÈ¡âzq¼?ªÛbš¡Œ‰Q2'(™]o%wgšB?´*é«2ÃÜ×OX±{\$ØDÈbf‡øH\n4&0Lƒs\0íHbwØ.à3p@{¼èDË ê8Ó…lW,²!Á['[Ú^1BL]„:‡0¦äTV¶|9Û°ûoy¥ÀjopÅå@P	¨fœğæ¼Ø9	À£¢[ MÓCß@¡˜°î‰‚‰céêìú”¾™×j*-E±y¯PÜºfâıq¦GÃ¨ODNÏ£M@ÃyLeç—©ÖKòø	X¿Ü(0›œRØfÑ &u0è\nü@oñQ +©Ğ¼F\$›ûÄø³åC\"šì ×¬Õ,ÑfHáÜÑ‡eÌ·mÉı¼7w'È‰?¦&~ †z«¢hÃ“Qüè¹7\0‚k‚•Ñ€Šo¯™Yqğhğ¦/dó»î¨F8­9¦}2uóñlÍfS{íâß£÷¡Ê,I¾°‹­]ıòÿ,ˆF›ûBn­¡ÿ[=¢ósIy\$æà©@ä©>´ xn\n¦¤íJ\$°§,ç©òµh¸'tà¶ Z@º€¶ŒÀVâ°€L\"Ù	äp&Ò4àğN úÔé*@òİø£M&¨í*’°\0„ZÔ\r\r+Lµ\rU\$a)åBmˆ¿ğ3p:·P@+0FGğz§'.ë¥?\niò,ä`-cxş/4ó¾‘Fi%dÆ\0Pıkìk«¨/ÆÌÀòVeÌ}êÀÅÚƒ€ò‡ãN4@bg2èÀ]ô> z `Æ¢<PÜSn4úàúöMÀnÚH€ÑfäFÀ\$ğªÆ°ÂêÎ¬LXlîlğR?X¡0ÔJ\rÀšˆÄvp´šk\"ğ€Ü³ô¨j‹¢u\0¸ğË=\0k@Mp°|Ô€Uà_@ÚLKXzqhµñb\$‹j4·C`+Ñ¢s\"Ö­İ@Ë`P²ÆF#à¯\n,¨jø(OÀ‰\0[Q(-ƒ2§p¶RXZ\0íĞd¨úÿññ1‚“±ñªP²1ğ0@Ó-VïËå]\nÈ‚±\0.œn°nbu!Ñ>År\"#D²\rŸ-¢fib4RÔIÎ\$²4ÅL`tÒ0:¢d;ò!ò8ú\näıs&lá\"*ÌFB%\r'´»ƒp‰°êø%‡ş]¢8v°àéÌr]¨ˆ ëÌOkÓ(§š6£ö]¬’–c\$†oö’ªL€óäï€XrG Ê!+Ï*ëĞznêÕ’¾1€\\\rNZ\r\0¨?Œ*±.Š.’û/óugº\"ÚïÀ‡(nøéÒIü‘2Ğ÷±W§Ô|ö’&º¬0S¿í,¾ÓFÂD6ˆrcÒà.€İ0²ï'¨Nsf ÉäÈfdÛ.!5©šHIp—L‰8R|‡+zÃí¬·­«,òÓ+‘2k#4nğÑRé2mX¿\"Rˆ]\0S,,ÂÌlÊÌî5¬8®@ó@ïè%.‚°•l95:ÀNâDğ ÖR\n€Ò#ˆ€zq6Èù7\0Úz²î4n‘Ôlî@QrØº0ç<ï2¬ÏcD€a<C3‘`péÒ…;Ó'.t.Î÷/&ìæ\r5CPó2à{CÂÆ:ÇVåâDQcVîTõÑ]GNb`Oê03[¢gIÿF	F–>Í3B¾h< ø3¢\\\r”—Gtš³ŞÑhJlÒÅ\"-üoÎ8®<AîCHíú‘@R…´Â¼ˆ3L‰LÉM4& Óã.ôŞ¾É°0²~~ò¶6Ó™1åÖ]¬ÄASÊÍ\0L3£B ïBì.Ò£ÄIv}åĞ\nbè(2ó9fo9µ6ãrÚÎÜãOº”btn	¨Ø¦ô™¦şº­^&p&(¼à¼ãPŸ¢¹IÇşò.kUT¥)dKƒ\n‰iêmMğ¶õ†]àÏXÉj–SÒMm]X€Î	 ÂÔmRÕÄõ[KJ¼ÕÂj\r¯x']òáu¾œÅ5\nMq=#FÀN8ZUõ›XµÖé}^UóYõÕ•ÿ[ÀÔ`|DÕø15¿[iÏ[­qZÖ	a‰JfeH\r€à!Ål=RÏ\0ëbï¥U®cÅ4Xò\\7Ldg*•ĞrÖhgO>£Jr¯Ïd½eÈ–W]G'pªEmt {@Â\rU²h\"¥èQ ÅV€Ö9c¶c‹\"& â7E&aË V€°àˆ”€à'–¦¦À~:Ã±k ™kvº¶¾µ RE`CÅ€#|A\0°	àÄ\rF»l'wn	nVénÂ(@š¸„šo\$16Èà@¨\n¸S˜­YjV¨k× ¦Æö#çcbÆ\n\0\n`©G ·:*öƒÀPcfÙm#fö½r\$üCb(H~1hµ ZÏinìÀ^\0ZJ î©š¶#ã‚4àÈ-ou(‰V¦×ZNb„\0[y¥€ZòµŞ+qöÏm)vp×”RhjFòÔRcÒa/¼ú«d%_rwÅ|€óSCÓC¤,†V–‡Üu†g|¼l…et¶fK{2Ïhu²ºˆ’‰h›t`ö·¸;Æjú×ò¥7òT#¶å©¨cb\\nB„xX.?îI Ë1oJ@³æZ ÷LûÜñiÇjpğ í¯(§àŒ„O–„@X\\\0æë’Şrsiƒv ¶p«Æ@†œj1ğt“pÛ2QíL`¬D-àÖB8}NZ†,-ôcÕl¬F€^\r1šz“ÒéÑ4t÷N6r¹P¬¼UàCVÄ\"Ê,„^Z\0Ş‰n—.@˜Ğ\$˜Õ‰ÜÀõ÷ã<·94Sw6 öcd—/â¿x Ê\n ¤	(~\r¸FF‡¨‚ @7ˆ‘Y9“Àß”ª1ñKÓJşâ¸t‹«WçÌÃ u21qÍ¯ƒ™,\r@ŞCÂ„ĞJÜX[åsˆeÄ+\0y|3@zX„ë€DÆW™.¸*\0xññšÏëhì<›5h\\­Y.h˜×³‡) Ğ~«íœ&V*€~ÀU	â¸*Æ@V;ø“—“ƒmø\"\"±‚¸`Ühšù§™xBW8F<XMt–¯1,Ä\$²üÌNĞPTÀèç‰tª)ú2×¡Ù°\\G;qrÿÍ)“B¹AÉ“††9,è}:`é\"NŒv“€î/ÀÜQtT“®ïR³<ËDó¾F”©J:w&Œa>m\r4óÀšŸ>FğL\nË¦=¨#k¨˜T\"!‡§¬†ÖÌ’/õ¬CÂ§ìZâ`äâ ˜ 3§ós(Á‰İ­¢@É\\rqÌgdjFâ,¨%0BÆÀSG³ècµª\rĞñWÔ“©40èÀ{¢îPÔeC€z@oŒ<á´†3*lÎ}™E&¾ĞÀ„n`å`Ø-Z’¶k® Üà.àºü!(tdXæ˜:c\$_U\0òc¸F\nºáªQBÇ3ª,v\"1§·D?„Õ¨×tRï,µ°SDóhº¢ÃdhôD h€eâ /SšÖ@\0c¹’1H»¤ÄÔ«¢æ V-» ×î»ï³Ûœ4`¸ `\0‚Dû³ë9¥ïşyg;]ÀĞvò_ F<İCn¾×ÓÄQDk¤”FÑÂ!`¥'ûÄò÷€¨\rî<CÒğ]»Ğ1\0°#ÜtQDh/ë¸ã\\Æ@Éc·r;ƒ½È€Ê\\fAk,¸L‚C/ÉÜ ‰\0ŠV\\o•ÀOË`ÉÊedEœ;Û‰Ë\njux¯\\Z£®ZéAŠÅ«¿†–Å›nrc¼‰:\nsØ‰:<P\nn2éd„56%^ÀCDXæyÚì¥Êí‚*ˆyN4ùS“ùC•ÜÚ/yJ\\x)|.}½Aƒfe{¢.8K¾»^×Õ'ÕgW»©|Î}6‡M€ÕÛ\n½h1=m®,bÕÜH ×åRÈVİ{Å'ùÌ›¼C¤¬Â»2åj<OÚGÚNÏÅƒÓÅöiÆ5QÊ ËÌ…}^qŠ’€Z–P«Í`Væœ›ÆFàÈ‘P{Fà	€ŞCqZ& Pğ%—@XHä7¬DX €è\$cìâ[vâ›{¹‚şí>í vñİ·¤Şå ”mXí\"JñË\\õÒr6v(NÒyší8'}zàs£°cãÛ[¨j;:\"Ø“£áxâİaÕ[¹Å÷¥*<hÜæiPÍæÇê7IèÒÔŸR\"BœÖúä6şLJş:AÍ¦îÛOáÎÓ¿Œu^S²Î Û›;òs#çâŞ\$}qh&¦èÕ4\rõ9C¿Q6\nšçÍSÅï¾şWnÌÈ“€\$Ütğ¢r\r€„—Â§õGîŠy áÏ™	ÏÅM£åëäÌ\$­<XXCİZr`t XnO§Ú¯?Ns‹\"•­LÜ,Ò0i¦\nS\nE\0ÍCÃ’Ï_/Ï ‘Ïú@m)+Îêˆ ÀRÚñ¿òß0—_‹ó}ùn×ì²ù—KşOCËÜbiİZU÷ãe„]”+å¤P•x{P¼[µ•ÉV+_ÜéW¶#h™.İıÓ’MGíœ€ÃËn!ÔÏ‚§èœ€‚K1]\$\0F¼@à†8%C[sèV\rï\0rKÑToü=›ş[d}q»9ö\0b²€(Í€ë\0‡>À,Xğ\rsëÆÂÀ:Ğ:÷Í¾†£|’°€J^2``Ï4m0	¨¹”®Ñˆ!¾µ1È-#ª`œ6—#ôÒb’@I<ƒ×5¤°\$¬BÂ¯ÈKPÑÀ9=Ê%“wÀôŠP<:-+„«8Éìßäşö3Œ7à,XøF\"”„\râÛ;uÅ”q=‹¢É@‚\rCÂÁØ!ƒ5TúoÎÇªĞ\ró˜	Â¸C*°w€á¸Ö#,'ı@ ePòÏ¬cXO™¦‰g?huŞe‚ñ¹3'î\$QVÍ·á@õú`h|ä¾’„PIĞz;½„6I‘”²Q«ën.Œ4—ğ”6 _9ˆÄ\0Dë\0‰?Al‡\n8è!	¨€D)Ğ¾Œ ğBrÑÃ\"À7­Ô°ì‡r^•y CÄ\rL638L€ÈŒ`púì>¡ø‘Â¡á‘a¼AVëry*ÍV \\fàa\"(ĞçÄ\rˆOˆ¨À^t=	ˆ)cDK“ØèEøŠ¼qHb\"9 Ä&À{Eà„,fÉ>Š€ a¨!èkCÍ/ñ8†°[aØWê4¤C²;L¡Vğ1]”MæëGK…à¤ƒfÆ5b\n¯½Fñ€²û€¼¥aHL€Zş\"›'ÄèĞF±4É¨r¨¡4r+(á‹Q<WHr¤?AøÆõ‡§‚„@Ü{DÍ>ÑóX~BpAô,TFpß*¹F°2â¨c\$8WçÍ= P	PÄä;61À«\0rÉÄUäºR`…±i‚Qè÷#à9/fBô@&XÁ\rLHâ|pŞw02Fşï)ñæ’ 9ìÑÃp\\bÑÑ¹¬ì)€ &U\"ƒ`5¡¯Cö¢4r\0002Å µ±ÁHHÀ6L”{‰; lx`€È'¿­À=Ù“ÁôVœ´ DP²[Œ±øõš¤qëNÓˆcàU ´fu	CDoc©‹üßQïŒ‚Fı ÀH9—CtÈ\\¤\0±ğÅ¢`Uò\0J*	²Ÿˆm§ñ^¥™PLˆrM„û¦’X¯d) ƒ–H]‹Àe‡ò²Mï!#·:FñòT†\$xùÉGJ±t„–P	„n…>äˆ¾B\"jaÎ‚Û‰³Û¸e5q[@*0Ÿ~®‚›èT8¯XÏx®<DB‚ê¬KìœçÉŒÎŒr€N@²PİØº²^,Ô˜\nŒ‹´ŠG´âMXé‡•?Ôl>±Î@2 ³	AÜo2ƒ5Y¦)µ_W£]?¨Ë\0zÇ¡ò0&c€\0º11ŠŒ\\oDô5`Ë\$²	P\ru–Ñ‡!@Ë\\Ğ¨=à¤,?¨Ü™Â›™_¼*r–<xc!D0µ…¨*.ê*İLc5\0¼	€IX@ø \"®|\0P“˜\nğ¥IsJà4rÛ–ìÆäO ¿+ ‡‡ø	Hç Û'=ë`eW¹\0Ø9‘¹–KLvc¸âeLÇ©HŒ@!o•t¬\0ğ1iQŒÎÅ)cĞ@ìp>» Ä@¸òQd@€Ã‚ íñ[ó*ó ƒ<yr‰@¾Ó#”l¾„Y,d‹J‰UÒÉ–SE,ÕÒL·ˆ–°Ä +Ñ(Cşc©X¥™ô’\n¾hà&U°œ‚.YY–Ä¥ !—ô´–ÜÉj£,)3“ä£Àú’0¤`³4ƒèTñ(KJR3[šè‡¥§6	¢Mˆ¾Ó›0ÌËz7ä‰\r\n£¦¾`ò'‡Š '	ÚÖ€×\ràà.s!tH~Dû!¨4ïQ xV¦’¦Tğ b—ÄèCD¨|)`b˜[Ãì¹ÖòXÓ¯¼\0å/\$CD\ràUDB ©Ø'á!¸@Š˜t ½˜ s ÒF·/€V\"HÀÀä¹BS }ÀUO\"ğPÎgàUŒğ…&€0Ôş%«pà@nUyFü§ğ>j‚#ğm=2Ã?«Ş\r‘½öR‰ĞzcÛ,iò:ò9ÓşŠø@Z²jLaãÊi+t¿,Ÿ+@­i@@ğ&€4T…{;:M„é–péâL«QˆOT+\\éœÃFÙ_˜APam›BHâ ùJBo nì¯€dÄÁ‚”‘‰EhXh^P9½‘´M´ôÈ¾+š)*îL€\n*p Ê RH,•X•L8XFüUãVNÍ­7¡\0ù9¹?NvsäM•:…*QÀ—AœğgAGTlQØ¾Æ2¡XBåğa*B‡Ô\r ;¡éB)+*Òt\0A@àÍwH’€«ÈRVw”ö…¡=Ããù wC\$Æj“ê‡la2§B€SJĞR¸ó˜ƒ\$äíÔÊøÀı*†[Dp‹`q¬ƒŸ=/cjº#¹­mtÂtà	ĞIÓõ¾Ìà¥1}\r.;‚è¹ e?z#ÛçC6PÈº\n¢b¡·#­Êãí9Kª®v+Ò—-DW€d€áEzŸA¢²€`Ğ€ºX ƒI@b£Or|ÒUI‡‹YNjÀ¶Ó1U}´¡É&ƒ…šÔœ w§]E\n1t]ÁRu=éwE¸ÆSÊ*4ô'S¡â£O´õ.€_ó‹!2aDÒlIx*\rN‚Ú™Ä˜lv©ÜdÃëOª£Q<¥@[§ı@e€1 TŒÈ—2³ŸÀ|ÙŒ²¬2o BŠhNê¤!kT“¨=Otç	‚‘€g?€à/Z¯Å¦¬2vL-P³T)G<‡Tú¥İ&×ÒàíŠ,-ß	Õ_qSñ¿Uô Ë•Ã€Q•\$<!R¡‘:˜—uN åG\0tRQ\rY	õ„ÕùU\r•9ûé?X ™VùGãVdŒÏ(ÚÇ;&#2¦aÕ@N\"qÃNXŠ%»“Ä‡)<¡2Q„ñ\\Â¥)XtrüÇl•+Kbf±.'gB3P’äRòaH 3±ù'ëY«ÏyÎÓáÜq‡eMU)Š„YÄ¿8PCÀò-@ë\nB·¦Öa’×jç\nßÏqvµªcyd]mI¢ÕÓx“é ûÂĞOÁ®ó9HÁ•÷R‚‘Òi‰è¸©aº\na\"l±@›‰ ú¬R??€-¸r†YLXÈÀ15º4“0cm}•÷&æ=…úÅ*zC˜Ú`\"zd¥Gpk ƒbÂwX¸i'N‹,|.›U¾¤õ’éêĞu™†-¶¶,Cg¬„ ‚€v¬ ƒ‘¬>À¨lú@s«uW@é,97Yd¦Áƒ:Iİ?(ÃPº\$ì³\r[Â?É@)ù‘õxc±—äweğ2Ù„J-ˆã« ˆ—Î;a¨clb&«Ñ3Gµ±é,W+%¶zËÉ0³şB ğäĞĞ/µ¢Mh°ØZ6,E+Ø€ŞB×2à’.GUÁĞ	èÃ6I´ÀêÙygëZrĞ3ù0Ö:Q>Ñ  Uª|˜(Ù©|Ö\\‰£(Äal+0ÛsaŒ‘àÀíAS†šÑŒy­í2±@Š,\\Hè¯8AëJ5‰¢µFX¶üÍ¹\0ÿ^Ñ²	›‡\$ÜGØÌ\$+µákl5¡ø©´ê?‘ÍgIFİ²ò¿\"‹·‹ûÎ[?Bµ§V¨h^¸PnØÌğÃYÒ÷e¬¨š£pÅ ©0÷+Y}‹-I÷—4™,­)±àg·Mp¿Ğ ş.¼Ü «iÉ…Bà£Ó˜åß`\$¾¢]óítUR¢b‚6€°@\\p£˜Ï5Z…®ê0çº´Ó‚Û”1½ÎÓÛ)ü[¾Æ!iW¼â¯ˆf)?^¡K]¢½Á£ñÌOcsÚÙ¾RİÕ§·‚¸_ô€;²F¹w=¬ŠFÌa@v·ÜöW;²qÀ½?šìºg·C\nnŒ]prï§íÕÖÏ««×Z&7[]Õ®uKÒbêÀ+ºåÙgëvqhİÌÒ·v…Ïoa^Ñiİ¬Z§\r;r6\0¦ÎÚRäˆƒsFYOb¤ØGÚ›´2 'ÚğÊ3GÔyu¦³îØ¦R8èÆ<µõ´Lv\nƒ}\$~I„Ò;\näÑ¨†3\0Ò[ŠÕ !-Ì'T#wÀ3¿4ğ;ªOËî×&õ¡™®ÖÓµ’Ê\$!CŠ&ÿ)*¿ãÏÉ\0Â_”öv*!\rğ¨[ß_\0ùjŸaé.ô=°¿<7á’·œÛ‡•<¸v/‘x€‚åÏò[kœšÅÉlX‡øÚ’ÙcÔUr°@7ÒGjıB(–‚\r‚;[ğËNÊXàUƒeEç×àiNpB× …^ı3‘¿^…Ë„\0’\0íb¶êXÉ‘İ…`ßÖ“°¦Áû\nèZ×˜|ŒR›“a›xdPáÁ'ÎBæ”¥»°¡•ÎÔŞ²‚MëG[yL„Â¥u(k‹>=Ï’Ê!õ­‰úM³÷áØüû/©ıPQ»äßNœˆ\0§}õ ­)kí¡ÖÅu^Ã0Ğ¬\0ÅLÅ?¹kê‚±A÷GåPX^…;Ü=\$EåÑ·lİæ<C+ŠÃñõ1†S]á›˜i4I|±'}\\KJì?ü¢e(Œ,PI¢,¥†7)ùu„\nÎW(@òĞD‚G<Êr¡%ÕE%%±c%ÜißÃS“5É;&sQÉ¦N¦sB\$ùiû(•¡5è!B‹ÈñVd+·gÍÅ¨HñnçD3S{3È®k	6sbLåE`ƒIde#M Äc;„–&oÃ}Js‚\0b]„\r0œP“Q¹×	Ô¤_™F–9ï%l—3èanL£øªº|˜¦‰9	äÏ¬tdìŸåR_‘°4ày;f0“ó=˜äW®ÈÅÆ%•ã}…;kĞU‘i+ew#GAÊ‰øå25ØÏ×(SëÅçr„ü¥Oî‹C`;0Œ6°=œU8.Vu@R` \$	ÀD(\0D+Ü¾¢/àx@:¬'üôbÅäşøDÇj\nl7¬E™S×Ä¢&\$!k>E\$c¦SHØÉ6<Ğl‘J¦k!-Íš¬±Á„&c— ˜è…Â¬1^YX&’T×tCÍmH*.9;òÔœ–Xü5vQ\"'›”'fí^¾Ã ¤24âıä•èx¹t¿‘Wzä›eD#2xô“H€æs.ô ¨£ò^ş¡ÑïB¯J9{Fô@gØ\r¹k\$Ò<ˆR¬g™Jà;AZ vEéYA¹@t<i™\0w^ı9\0001\0Y¹±tãS…ÉDj™í{Ät{Ás”¤SAÛ0T¤\"o•L0uDí	™.ÀÏ‡Ç€-ƒHÄuM÷¼h¼Ú1r^‘£`6Çµ e?Ï6qoÄƒdŸÖîÌ¢#ñìÌÔ„Å}ñ¨HRbÚ¨qˆP'7Ğ`ÚB\\„¶“ß*Ä ^:åÊ2œ•Ğ,gA^8Z´ÊÏ½4ä/Sæ \r~£©Œ8£ÊiŞœIä÷\0ÿOb¶Óî”Js¨\0.€ëP vr…dO\$yãE=ãH\n(=}OÇL“DÃÓñÄŒ[Oİ2LÔhÄ1Í›ÇêŸ*H0R>5qĞ’è´š˜oòÌ)ôWà-Õ\nc§©ÖïêÈHÚ—\n€«Re¥RycPÒšIÍÜf)ƒĞŠoWšÄ¾`Qìd£Ç9Vº·4úudİ]¿WÍùÕv³‹I¢íY\0ËXºÖÖ=GtÃ‰ªvà-!9ÉA8¨µŞi™“]ZÕ8hØ4–Â|…¥‘»µÌb©®ğÈàSºsÕ\0¶ª9…j–óáX:\0I‰ø=ãS\n›ª‰å¨ôÿêKFï{Ã‘¶9®]çdZAÕN²¨y²Ej·KÛ/?¥\$öJu]]Rï\nxİİ´}MfUõ»â¤txƒ·«`„IS`1ÙØ®³†ìûX'3Éã€W«!mCg¢ÿ×2¦öŒŞA,KcC´Ù)u¯ğ:lAÒúˆÜG¯ms‰ŸV[ZÛv×ts±Í~`^y‚¤Ïr+€Ê±Ñs‡.t…÷Ûv‰d\$Åh©3Bè¨0Xtù·\\9—r'áIb(F7 êµèÃ@úÑøˆŸ¹­	h#FƒĞávİ¢i'Ç¶ğè›{èŒÏ--A‡<æ¡£P\nĞğ\0µ\0¯[rŒ_şìb!›\"Â(‡~ğœ\"îëhá4\"(ew|Ãy_ïx{ÄŞ6,I®&T2uÓ­Fv.“§s%E`Á‰À0Ğ¡Í^E\0ì‘@t†a«¾Ğ3]:Õ =–BºMÑ‡ĞCBøˆ6ö#¤.=îXÀX5Éè`¸[z én\$‡&²Ùëô<{ËÀU§¦}H^‚HTÃ(±©-Ng-£n•Œ[°Äç—ìM’şfáo‚0â+#–N—Bûp1‘Ïf÷Ç’f”ál-˜[{s\\Ş(` Å/!i˜­ÒP{îKx:Â¥Î\0P¦6ä|‰½…\\1ñoáŞâ#wö¼†q®Îè\0-ß€~sûtvpb¥²’\$ñĞ] /¸‰Ç?:\0­ñoŸvá¬.4\r[üm\r8øÿ »ü­³‘ú¿Ï“oÇŒñój>o†¸-·èRçÉ©Ü'X·B>'^pHw!0WœrÔìtš*p¥pØ8tğ’áo…+£{øvî][¬=@{â‹I\"§¾L&`4–éiã¹¬Ÿˆ²Qôy„4áª3@ªŒvœ³}6ñ‚,rØÄş' :Ø¾rôè`h€€^Æ{Œ x79Àtv^Xˆ°Fø«ŸNÁ‹\n@\n€{Ğ^{\0‹Ÿ\0p}ÎÀó¡`)è(˜×Ãs»À0ÅS*\0€3U=J ?Ğ\0ÅÑàË\0€.ÿJ\0º £\0»¥Ãç°@¶°w¥µMª},ÀÓY‡ğ¼\0:Ü9¾_RKî<!ˆµçKêuì¸Ãë<k`›âqG5[xjï­²Lò/\$@œf 2†0RïW‘ÓŒˆõ}^;f˜Ëšä]ŠCzôÃËqu\rQ™AÓ‰}P_\\7\0ÏĞ0ğ™fÆKŠX£¹Ø3dL™š\\À	Ñ†xVg„©š0Bf¨RÖmˆ^:\0ëæ \n,CĞ#®ÀÀW§•Õ)fFàİQ¦ly	¹Œ+°>sÒ_àtµõå:ıØzæÅ›OÚEë5‚Û×¨¤Šæóëãe»nÄCyÉeYÍn/!¼îœÃgÒ´æ¶­÷Kï-Ña>cµGõìÄ/FñÄ®àO¸á‹dQØñ€6edÕUEà×şç÷S¥ıØ¡“.07ğ\0)ÔB²ƒœ\$á|Vòß„ÏVáœ”PuõìOêÛğÏSô\0&µhåA‘€èòX‚»uFÏœ#ÁˆïP8ğSšV\\ÚÕçƒtĞ¯¼ ?ˆ”‰Ÿ\nP—ÙÍ\$>p¶öÁÜxà(n ²öÆâ\n»®€Ç’Ú@8ß	Z´À<î·=¼'á_§‡Ş÷u|:Ò™ø€úŞ\"àçz|uˆÖ’o´qX9hh¬ 7xóÅ\$¯@agÏ½éy€°\r!]ğ(×|z+`’¿È­³º@^CÜ6P…°·Î^€%y¼R×‡58p+ŞfñŸT[ß =°·¾NÙûéÎ&\nï¸ªkİ@¿­ME¿•ié‡Àñ	m\0ÿ­È¸Î0ø;jo„†¿iÓĞH}NymÃ+*BZ‚õ÷ª3÷§a5Ğ:‚dm‚Ë8øÆp÷‰u¤.Ò,Ì&u±d=\$9Ì^@xrªeF‚AE‹'= „Îñ„èŒ€-àÉê€°œl÷hÄh/0ñ‹œ©¨ô&œ­i|MOtÑ—À[ŸN¥}ğPÖ/Zá†¿cÃlŞÉ¥ü¡K÷HT;*¾ğvf)FóGºN†]4¼'ˆÇ½;:ÜPÇ5ûAjâ¥ûv‹Nß{ßDùPÛÀ™&à/©‘,mùŸÑt_o‰mg#8/Ğ~kôFòÆÖºş^è°\n{ts^ÇDÅİ¿ 'ÈñĞßKìæT'“ÄÎ-=,Ûµï¿İĞ—Y¼C£Rš²–jP¯Z/\n%LÍ>Ù z‘ßíp€ûí|Ü÷ÛÎó÷ÃŸñ,E.õ#M¯…®%Âª _‰\r€Ùê1|{„ÒCßUa¥Õv™i_^8/eÿù&úÇ´\"Ã\$>²lxI”“¡°©}Â S©08µï›ò Úhisˆ\rSÔ5_SÎet‡?± <ı@W–mÍ_İK^¡cÃ¡Ïµx |[²!ø‰˜€[…¸sÆ¬0\\Öc\róZ(\0ƒ¬SüÜó_ûA^ÙT‘¸Ï°³[€½»Ö@X‡ˆØ’ÌŸêñíB}Jb€/\0Ô“Ôáw‚â§\0Ó‚º¼£³„iÿğë°µúF@x.…€¾Z˜\rá¬e\0³¡n‰9ØìÚ#P&Jš;ğÀ8‹\\0	É\"_ğ¸U¢Öğ,gl@/ºğ\r0…Zä¡=\nÈ¹Ğí\0h4n…‚¶lôˆ0¢5\0H£ğ—æ@#P	 T'+üj\0Lì\n¡¿À ØE†pl‡tJ4Y«H…’9®§¼¬ÙòªTç²Bñe<Ğ}àÓá=›F( Öñ¿ 4¼ŞıpK°;Ÿ˜ê™²KŸ€½Û©r–'Àì\"‹\\Á—€„®¢¼Öjó ğºŒqòÃéP—ê¡à8V†¨HÍöA2Šê0;	Ô8\rç{\0îòİÂ Ø^R@,[íñ7ß\\°@Á^ú¬\"èÁhTÄ‘Apü°A{,ï°€¸Øºê+Ç	nghAà7:V—,ÂŒ˜¼´«\r‰^Ô*\r4ÿ,`†§~êéÀ/»üø™qÊFÁr´À÷Á0ì+ÑA§`Ğr‹^Õ\0€+²Fì)´Á—\$\0j·	¼.­ÁìPo	ó\0\nàª¡–‡çT‚èài0u8Tä £hÁæ\r!{€Õ˜Ìş¹!9»lŠ\0°TAòÅ<ˆ:ÿğYAès¯B§Ò²}êFAo	<†BfÊ,p`Âo’\"0i\0Ä@ &\0¨(\n@>\0†—\00©€ø \n@'€ –ø '\0‚j[À)€x\nîŠj˜`\$\0Šh.“5N\0¬€‚ )€Š0.BDRôãšÀzqĞyA™`‰£AU”&¢'ÀÎclÂœ©ûsµxAÁŒP¦¯E +xAÉÄÁÎÂû4/ğB…T(…¬Ô&PÅÁõl20bBükĞ±N9«¿ĞÂÂ‡<5PÄÃYô5ĞšAøç44×ÃGL6ZÃO45!E¤`ÊúßÁ¡)ØC‹„6pÚÂK<g”ê\"'´)pÌ§uÊİÀ>#p/\$>Æø›ûPxÃwÔ;ĞßC[t1áÃcÑì0Î\0O‚wPBw”5f\0ÆpĞÅCñ\r|?PëÃe\r\$90dC—	4	CÁh\rkÓÃÉ\"pi\0\\ïò&1BÀdBğ£ÃÇl<°Ğ§ÔÎ!Øç< …¶dEà8\0ÓŠGŠµÀ’<J`ÄÔL?póÄ!Ò3£@âü/õ¢vÿJ(¢\$E\"xˆÔù‘?ï0‰ƒ…,H!'r,É\0À‚CF#‹û0‚?Ù¼Èé>ôJ\$Ã‹SQ\$nŠ¶«øîpVşLG\r„\0ûºÑ:…'»šñ<¥pB	ó¤²ĞX>Ñ4DŞºaWw»äT<'Òñ:NåP½2ş/æ‚fˆ)q,üK€6D½\0¸ 7€P‰ÜNÈŸELÛ  Ã{K7´eYÓ0  ğäÚÏˆ\0D‹2'†U¾.Ÿ;ş†kØhyÂn¹Ô‘\" /‚jX(ŞÌa˜794ğbS6N¤?Úê[%€µ‡\n‡Kv\09E¤‚i?Aªò,!n¤ˆE«'ˆÛ’İQò@˜lA8ˆ\"3mÓ¥`£ø&{Â@à€.”ªBQJWºHãd`¯,#k§ïş£“‰ˆ*_/º|àÑ\r[ ±¥†P…*A€İ ÇF)@€ Ñ‚„@dZÎ¥j¨ìÅÖ˜,!^Å£xâNU'¼ûÎŠ' ó¼8ñ½\nw°Ò˜ı°… Àã9ÚÆ„¥ô#ÉİÆ{ˆ; ¨%†\nğe€Cßj1¢Fu¬#ñ¥ÆŒ!aG¥ä=0\rÁÀÅğEÒ`ø)o¨¬¨‹ûñrÅ¯:\"¼ÆK8›¥›E–êoÈ†½²è'à ‡ Ê¨\\Îˆ¹šR#Óî%»7\0ƒ›şƒÒà3ƒ‘:òy‚ï¸>nN ‚€|r1fÀÒj‹hu?¼Y 7\r\0–I@iÑeG\$\nZïƒpˆ€™'Ä¡ÒİznÅ›G:¤›ûñ¹Ç&ˆ€”#d ĞE8nĞó\$G<^á,tÀ9Dò—ÂFŸÀš3\r<ÎÉj9Ğ>#õ ÙFÆìqé„ÛâQ²ÇxôîÊ³È(e‰HYpñj7U rÕ=®90|¡­½®*‰0G5ŒÒ•4r±ºDò£ßÄ­|¤Uñã³b‡øÜÈ1•lç‚,IæŞáM{>òùØÊ]FšÄƒÚ«èaXÌæ ÇÌpe‰K½”)JWÂW‹ sÜ(…mTdÄZÅôkÛ²ÆßÄ„ğFƒD}Ğkïe\0û!Lm2ÆÙ`•ò“ÌÙA1”£m è ï´¦Ïºj#5H`À…1Ù\0à\0QÉˆB7°E%£06ÎvzˆT®ˆE ŠCˆxA	Û'pÏû*ãú‘ğ=xD²§\nô‹R»† p+q\$>«éÃ1,ôÄb\\'Î\\}Ìƒ–HLÚ£ÚQü}\0úÇı:„±F‡‚ÿlT†@É.ü‘ÁÇÀ4µÚk!Ò˜¬’P‹û\$`ˆÉ6i ˜D¥*lè)h€¾Èçğw‹JlaGÇ\$BÓäòIFd¢)É\$êú\0±Éy°I ÕÉn´—#àI%Bi’dÕ\0‘qË2G(r¯PI\n‘LqĞÇ£ûãy»ĞñË½`Ó»Ú\nKš\0Èú¤˜ÆÉ ÿ<›&D´K£éFü’¶Dw\$dtH7œqPÅG\0ÀĞ2tÄ³ ¿D¿,’,˜áX<I~Äw%üAÌÊC¸p”ÊĞÁrˆ@nj¢2—çP\r\$´¢rÀ¡rp#ÁL¤2r}ôĞúºÅ%”Y2Zk%´«§\0¼µhé`AÜï©Ï2iÉ hë¼2i˜÷)Œpßª„t¡!IÆOTÒzÊS*dòs¬‰\0¬ğÀ-d²“@M*¬;Ğ‚#Lğ‚.á¬v@qÑ{€Ãúò’BAE)„šÑèIjTT˜rB¼ğÓ´§²g¿=*xò¡Êã<›’Hö/\0#R%'\0Ú¢'Äw\0´œíA?¾ÀrÂ…s((\rò~–I,„²R€Şeá^ÁHÛ\0°ú@…·+€’i¡Û)œ®”5­+Ìp’ŸÉ¥+ìš²ÒÉ¯Br„%ù*Tc’J3Ü£§Jİ(¤G‹2\0ï\0002oÌ‹q%œ®RÔÈyáRÖGË+ÛãNáKa.D°Ú2,ë>’Ü…*xŠrŞ…{-ü¤P„Á``rØËM+œ¹p”¸A,§Òè!{*¼ÒÙÉÃ*D¶ìúJ–\"œ©±RËw.±’İK}%\$±pÀfz]\0¦J… €­³!ä‘	ö¾/ÄÀA„ÌUYŠBMÌÆÔƒo­Éq\$ÏF¾e0\rïHøŸHlÃÈ³4»óÒ‡ü’ıLS0ÜI%'<Åòb@1‘¤!¹ü4¼\0ê`íRûÌNï@IÒ8–m,À\"ÃIå/äª2İK,¸5ÒÈÌ“,œ3#Ì£,Ì‘²fÊ,ÊN°K]\$“É5%Ü“ÒFIC+lÅJC	¨d©bW\0V|—RIIë2|š2uJÒÍL—8Ÿ7¤',²’{Lë'üKr€Éß2¬ŸÑOÍ3Ä RFË(\\t¾2ä•.\\Çª˜É3%ì¸ ÕÍ++¼™²öÉ³ºr¢K\0ì»¼ïJ;Ø…¬±mFk9`Á#ØÖÁ™Kè—ìÒ©¤K¨¤´’óË”‹üÍ,,É-l½ÎÍMC+ør’£MU/ ˆò×Lí4\\KÉç¡q)ós1Æ†’ÏÄÚET–×'\0ÍE‹3ó1É93,˜ò´Ê\nœ!2á£Á`’ñ¹7D¬ 8J³+pÕ@j„«°J¿l¬'rÀc0Œ“vÊÏ-­0J×\$¡°QÉ5¸W-EZŒÃëA\0MI4\$“FG6t×ñòÍ¢h,A\\Î0xSl\0C6ÓSnM¼i—’OÊ#äÜstË….\$İu¹7dª®vMß7ÄŞ2’Mç7¬ğÍàü¬S}Ì0”Şr³‡+D“JÙ\$¨=+ËM#<áE7‚ÛÜšlØÁq8DêÿG8sûïüäÿÛür¥À\0†l`¤¡q#ÄÄBQ´©\$a¨ÚÌô„òqA'\0x›à9‚ÆøtzÏê€Ğiï‹Î4Tâ3fÎ5tÚ“‚“8è&m¾aéma¥;¼z±]\"Í;ëşS¿Éó42jÏtñÍq\0t!C\\O—»{<`xsDÏ/8”ó3ŒO6p…\n#–×=h…±¨>éÔz„^ÎóÃúÓÊ;-=4ÎóÁO5<õ“ÙÏ_>ôCÂ™­‰œ¥´Dşûšñ—O˜ÿ\"^Ïa\0x‰rŸuğœ®Ä½]=„gÆ™ø/ğT/>©§İĞcĞCÀ©§6™„•âÖÏ§B™sÄôóóøÆ­ğş 5¿ts€E’F=]˜qÆ„ô@Qk¿£ü÷p3O´Û§S#É%@FÂQĞl*‰ÏK@PRnÂµìE!ñG2İ„ùèœÇP/¼¯ö ÇÅMè\0ÖÓú-(jĞ*„Ä’AñOÏ9{wOÊ/µÀÑĞ-?ğW`Ïõ@Ú/Ã`\r­“PB†³wôÇğ˜„úiZÆõ©_µbßüa]Ï¬O5cVÏÔ,Dˆ´Ğ¢×I\n{†_>ì@sÏĞÅ	ÌHpå\0ûAû|ChË<3<ÇÈˆ6½\rê÷Ì†Jj§Sæ;ø„ŒİP²¨Î‰\r(Ğ €1¨Şôı‹Â`3â(í=Ca²DNá<|ö®ÈO\$ø”÷TÍ<ŸS<‚'=üÚ³Îˆ[?¬ô/¨ÏDsvoô?ÂıÓLpDPl'uä€EŒ²ÁÊÀÀa¼CPM¿îıĞ±\räAñÔWO­Eå­Æs?£¯\0«Ï-=íÓàN3EúsúÏ\\sËÅBD×D«áæhOq;İ4eÍ™FmÑ­EsÄ»y>4ñ‚Şù!ğ(S¼Q.ş°)mÛÇºf´ëòDQØ}ĞÕ“Lˆ%ÜvÎg”È \0¾r4nàÆò`úêŠW†VøY@®\0PØô„jşütÒÈ”\n „P¦0a3øƒDºàà=ÒE¨z4ÌH\r `>ÒHò5#'EMfô±r–LCÍÁ%ÒeIE İÆğûµ0i»-Šé>ÌT´í!„ÎÖX*\0£‡Y­\"€:Å“H¼¥pQö\nÜ°!ÊÒYI¼Á1Ô¡I„É‰’Ğñ>u’5D•@ôÑYù;Á¿@ÓEÈÌäP9K%B8§(à,şóïÎ¾hì,O\nDÖÛl3FcvÃ3¼ğ3Ù*˜çœñSÑœó€ä€ ‰“JLò5:˜ò:1´cÅ/Ä”€öü4Ã“G ŸlwñúÇgKXÉqÛÓ T14vm:Ò63®\"s:õÓÀÑ<í(3³S ²e/COÇLÉ‹ÃÑÙE51S§Ç¡4˜zg&•ÜzQ¾„iœxèÌ?@ÎaE¹È!P9\0007\0Z\n\0(\0˜]G \$€š8y „Óªh	 #0M%;´ïÓÂhı:ÌÅ\0 ©s µS½O\0ğTö\0Zx@%\0Š> ÓçO]<`!€aG *\0‰P\09 Ô`ğ®€ª\\P-UTN°\n€!\0 5ÔO­<`*\0Œx	ôşÔ%PåA *\0‘PÕBeÚBÜ\r@õÔ7N¥D )TP²jÀ9SïOÍ?tşÓş ¢<\0€„`	à!€–ˆ\nµÂöP\n!ä‡@X¬ÆT	O	À)Ô”@K•Bò-Cà'SûRÉs§õéR´/U.{S;N=SÈu=õSÕS)ĞÚTZ=DÁä¶ˆiFôıSùOM>¬B °²\0œ©G°¯\0¨H	à'’Ã8àÓ§™O%<Ğ±Ô=Q´ô°'` #\0’(	€\"BõRØ	à)\0šMR©€° 0¬z>\0*UU\0&UFSÏT}R0½Õ'Um?;TuSE>ä’ÇUuQÕ1Õ^I=4ëÕLP5`j[`'\0–QíX ¬=S=M5<“V}VµÕ¥VpòÕ7TQ;R|Q™(YÑ÷Ş9”kõq®V§êjÔ\0L³`áÛ2Šfİ]@…UÚºs¾„÷	IWkÓóeÓe4lŸ“UÕÈUSÓÓÍ›5€Ù«§\0DïğĞÌ^B•}Q;4l5\rškäµ€Õ¿8`•w.³X@`€sWÅ[µ‡O14ub/1½`…bÔoÕù-\\F¢.œ=c•VAXh‰’m¼e584õpÖ3X¤X¯X.œ5^O±ˆ¶ûÕ{»üfõgõ…\0vïòõ*ğáU¥»PpyÂ'	Ö†½À¼¬é™<&:Pé©àïF!OO\0à}CiÉè5W0¬Á&‰'qc¦³[;ò\0ÊJ/àR°LÖUŸÕÙXEa“\$L½YÕdõ¹X\"ôèŠV§™˜¼×,4²•ÂUÍ½gÊ~:à…ÿR•\\k·õÇË'WídÕÉ×}r¯°×.UõÅ±VëÌË’Ì×%5dRÕÒÅèìğ(èsˆZïóbåäûXN€=Éø9›€!Ù\\ãNwA\0ï€_X;Rx×€çmxnvGxÈŠ\0Y^KÕ˜9Ô\r®r:^Å×°#\0HŠ\0_^ÜNàë&ç%{€/×Õ%hŒòW‘^P•ò„¦çU{ô‘Wèû¢ÎuW‹_ÕÕó¼L³œ•ñˆÆè96¶-)`-y@îØJ•yÕâˆÁ^°àW³Y…zõåW´}L	ußØ%^=zöW—X=ƒ.wW™`ä£ èØèĞŒ’œ\0\\!\0=\0‚hN\$çT«Hi×`­‚õù×³`|5RFØaVWÇa9~ö€^¬XáØ”•yhzRÓÂkØ¨†„ö+¢ä‚!)-²ÊU)mÅ<BbdáÚ·úñ3Åã‘J9˜VÏ4cãár¸Ä\r¡ö2\rc0Cö45 :VÔãJ9 V±cXÀrå ßØæ&£ˆD­v<¸ñcà9ãBS:¾àÌJ5 Å€ÑXËdjö@=ãÂç%õdóĞ]‘Bn­áŒŸ€—Ú_²ØÙ5c½“ˆ<@æ¾¹\0ÖP\"ÀÍŒVC-c¥‘\$KbS*;6MØÏdyİÔÔYD“Éñ&3‚6}à;Q't¶!ê§ºú\0VÖ@lÒ}š6_”êıj268ÕeĞBDWÙ²1e˜WÙcÂvbXúƒm–e\0áBèµ¶h¾¬«”‡ Ú„ñmÆäµ ™İÕÑ€@ÍŸEæYwd@vv69°9¤XvA€Éh1–CÙÅdUŸ¶Iyd¡XàÑY/h¬¶TdáÃ…ƒÙê—Ä‚t\0äÔ¶6=ç½š¶„2iHVÀÙLIå£Fëƒe\\uO^2^E\r›UEY¹\0 Ùöx§gN•E5ùúkv×Gi\r–6’YãÀ@4‘Å•¥€9½”ªZ^+-§!\\£¥áPv¤7ûjQ\"6“jm©ï­4ğ%¸!HÚĞ]¡Ö^Ú±g!N¨ìÙŠğ?ê¸Yık­^Ck´4œ·²[Öh«ƒ–~½Àüàâæ+Ê€Ég7Ûù®–Ã‚f‚„ÄÆ®|âCæV>½¬ÀÍ­V†Mxí®qş¾ğv¢´oË?Âvã<go,¤\"AØ° °2•‘–3Ó ã’ÇíÕ.Àşâí3zğ‹Cá\0‚M´\\§ƒĞùôËg¹\rFÉ³âlÈ]â›°á³ÆJ”Ğ1)#3”@È1€0’m@g†Õ}ˆb¸ƒÑĞc%DÉAâM\0æ	å»æÏ”hÀ%Ònñ\"ÿÛÎ<³kûÛæùe’ …oM37Š¢şı¿aY\0Ş÷	f×\0ƒoéÀ°.Ü)ıÀÀ7§õp/öşlÍÜV¾–P`Ş×çpÅÀG4“IpÈbYRµ*IĞ÷Åp`Gèr·”ÒöUÁVïÜpÀWÛõq¥À÷	³z\"MÂÅ˜Ü8í\\pƒ—ÜOq­ÈÀ4\\Q3ñƒKF~y*`‡Ä6AM0)¯Üw 1€&\\¨´–è\0[f`º–Ú”ô€h\$ç''.\"0ıEô†ªí·²1X÷\0Ée4Œê(¶÷8\\¶bu›ÌÚüruÄ!¥Ùac=Ï¥[4FğöoPZü!0' '¯o‚\0õÜì™M6ÇGkt€ä·:\n\00059ç/¢‡ üá`VÆz0UÑ÷+¨VVÙÉm¡ÅW1Ñós(û×3†½sJ´w5ˆùshze†•kU—%=T¬ÉŞk›­e×‡oÓ!t1÷O,üã¹ãg€|L€<<T€YğóB6;²Dh†N &ƒÍÄ@“e!‘€b›FÃl]Ó%nİ2îz”«Hğè£¤ï.»ç[µ#ÃV~8Ej ]š€\n\r§I]Ãç¢(ƒ¤ÑGİ–÷‹Û÷€İÜSÃ×x;¶¦ù®ïpZbSÁ‚Q•æXUÑıZfW€€ÊÓ³ÜJ_)X÷ )/sş÷C´\0Åµ|¥h\naˆ©h÷ÌodÅX¸<A ï:ı;‚—Ò9)¢;á2Õ§7š.-[]ëñõt¯Noù™—e‹u	–¿\\6ó-ÄWI\\sX€×–ÜqÈæ°>…_tB›—EÜ.sÜ§œ8Íë·\\{\rêg\\'sëD´ÛÌ4‚E¾±¢`SöÄ\rk¥è7¸Ûyr	I@:œÀÌã¯k¼F!—!Y<‘z•ÉW\\-µíw¼{|%Åy^yu\r±·²_\nñw»ŞÊSMÕŞ£|²	\$ÁuåòVø_+{eğ×³İnU¸í+>½ĞÅ”1zp;„:›4:0s6æ„Ô{Øc#\r€à0h/Èa…ËWJ6”€`;ëş%bdú\$+åÏÒk1„Áq°(Ğ‹Ÿ×Ş#b ñ>_¨(ê5…Ç\0QøF‹ú!Íõ·JGUÊÍ^^‘ÍF‹İPâè&ş‹…´AdQğ& ¶=Ác(F€\"©>)òAº_îÒºäh‚ Lë nøÁ¨Ø‚A¾@_–˜è`1à%€0<-¸=€t+ü¹	€£\\Õ9…NËFN<€İÒFï‡¸\rpÓ@€fo–†ï¸0=ğõ’…kn\0ÿ€ÒĞë£•ŞbèRá€à‡ûQá½Ànø½ …€¦à'0\"‚j]îÃ†ß%lˆFíßCp[%¸)Ş¨ÔÉ¿/p+39²–ã#t–`<¥¬fJ\r­ö\0İ½ÀÎÛ®ÌîßâY„ÈWƒ<;ñğÜ»äKAD‹&61q¦J¯øqÿø<Ìğ \\ck.\$H÷å•,²§}]v²©Ùîc„®[‰Ü\"¡Œ9Q ŠÎ¬¨7\"Ò	\0õÀ3ƒ¶â¥J€‚XB¯ »ÈáÍs.ä½ÊíƒØp	¨-©Àƒ½]àHH#è«Ê\0@àoy¸Ø#\"ê0ˆˆ‰ñ“UãWÈ¥Î˜Wë_6øeWêA*PÄZÆ‹ ªWÕ6¥{ ™¹å,€)ºM\n°	R€ƒOä*˜q€¡È\n`+Õ:&n{\0R/\0&a»Ğ\n`)Õs Ë\0¨Á5J8sÕT.` -Z_À'\0Š¼^µáàpbNŸÒ¥†J,V¸’†ƒÈØ‰“.\"<	rx¯GaEˆUåAbM‰dax~Ø`a…`>¢6af@a˜éæÕûA^æ&8j@—aPŒ\0!\0€®ã£(v-)a(à‚\n}DĞ°€ùTÄ/LTA\nú\\\0(\0‹\nÌ+`'İØc]wxŒ=	^ÏâO‰N*bXïÎ%ØœWã†…\$I&çrTø¢bŒcV+(¹b·(ü’húX 9%‡øIù‰-åZ9Ü¡–+àá‹va‹2\"˜´WÆey>âŠ\n¦(îâ„6.-[b2ˆĞ‰úXx~.‹âå…È°oÿ[ŒÕ„XÎáq_i“XÍXˆµŠBÁãA(ö32õAfãFŒ@X\r¨€_²#MÅĞÌáHcZ¬†%cdçv6ãxdy•xİc—ö3„<SÖ zæÁvç˜!;(½>¸ê\\½È\"&SÂkø8c´U%!¥¨c8î\"›XãXğˆf ¦=a&86€™ãÜæ©İ!ÁãåSü8óãõN>™\0‡ °`ıã×øV˜÷#‚{Æ?¤cş€±ïùd&8@„<¹°VY³.î<Âd.\"ä­udEqÀÜ\nb™ŒÄ.ˆ©„äP¾CˆŞZµ‘F	Ãä]‘¦>Í-Ë\"ƒîGy;89nH%ß¨Á‘ÁwàèÄ¸£6Bí‹äšÚd øãÜSîàôä¥ â.[’¨!y+ãÄÄ @ ôä-Ú«I?äP˜°&Æ`‰¹¸^`5äDİIS<ƒ‘ˆ Àëd[’™„…KNùN±É ›‹ˆNBà€0äp‘)¸?‹6Fj¦@7ãú©¶=¹,W¸XàƒNù	hèæï\0†e2ıw\"\nEhöR´ëe:x.™MãYPH<\rÀ<ãúGy•`2‘Ş%Ákáwäo’À†Y[€Å•È8¹8°â¶©!l‰«›\0ñ–.WÙ`ew’øé¶\0ZVEs >fUYhV^\0ÉôMå9”ÆU9WUtõ†N†PeH\\%:Ãe½•>SùPä³>Yoå=—]Ò%eã—f\\2%U®Oà6e/—˜K™uåÀæ\\YQn_Øe¸,V`Y€A—vTMš.&aaşf•F`™wAr¦b¡¾åï˜aùW°“Xë5f:ÌÆ^9VåÜQ—oæM—Ve#'ªİ™ 5ÁäÕ@˜]à1°¡V;ƒd/™fd¨QævLïf}‘F\\•`æz.A¹,c–G{©1P€ZÙ=9aÚ;€B‚™99˜‹˜(Ò¢fÍšä]MæU™bï»À^^F­®cÜà½µ_›`¤Ù·d°Ã\0 ÁEµÀq–=Ù¼Ò;}%ñfúÁ¸7ù½de›¾p™¼‰Fş¼É9æı›ÒîÀ¿ghæpeK0C›ÔŒ92eÌ~]æ1–È\r™Vfe˜Õù„€=^l™ofÏ—\\ÙÔæ¼ælmå'—>RÙ˜fÍdAƒ¶øIi9×gošşey’f]švÙUçV  ÙßgÀy.Ùg”\"ftYàfD±Nc™âç¡:ù€#Hà7ùççCÀCÙ±Ëöz9ØeÜêy€Š!¸… å¹òg±––Z™÷g˜V[­äèpDY•¨r\\å¦d`—€!;yÕfd‚Å+€òN]Yû&OŸÈ¹ı’›•ÕªY€é ]:\n‰x\\²x‘x¦~™†h‘0¦Ù½&k`š­ÌÆúºÃN¶‚@Æfs;án¡®è\r–™ú¶İ‘=e±h\"…&‚y`—[vYH>æô®†ùófE¡ˆ7Ycí	R™ùhq(I9ÅèOš‘\nº\$è;—®HY\\u ¦P)8eG…(Ùßç``…˜Ï5l‡v4ÌˆSF9!<¢3f7 ÷ãw£:àhj ã€1\0Z&Bå¼˜9ÀèæÁšx\"îpc³²Q`å.è¸åŒ[”Û2ëbé%¤>y†æEFÄ	äÿŸdãÕ‰˜à?é¢¤¦{šKhç-.|úLé¤ã\\#é?ëá=d/¤F“xêi<¦–k…¥¾•Ú\\ã³¤ Y\0006€[’P¦Aé\nöl]æÇ¤©¹i¬hÕà.¹è;¤¾^ºYiy”¶š\né¦Ş^:bi\r¦ÎOÚmåM¥Nš!=i9§™y‡“¦v|zn‘ŞxAk~üf•hjë§Má\0àú\rŠiµ¦~©L¥§®•kéó§!Éyîéå¨>@yèiÅ¦f¡šYé¹¨.ÚU@Y¥fdEJ„E¤~e„éï¤ºÅ9À\nIUĞ!šé»¨Ìczlj;©N˜`çd»¦>TšdéØœz—€å¨ş˜š™é‘’fSz‰„@=\\˜\0‚ÀïZØñÃêQ©Ş¦:bêh~¦Ú éÚüa[3näÔìŞåÛ19ªeFÚ„uª~Ib‰jo©ÍWRÈêAšî¤KbáQ”ô£µÜ‡¸ÑE³£€4øåhçÆ9Ú<?8\$Òê¹’æ}ºŸêÅªÿÚC>øÄê—©æ®Z°j£•[³š²jßbÃüx×âº£™i¡ıÄã*%\n¸Ğ)Xé2•ğ¨Â¦“Î€3T¶!@):\nè8uòŞR¼³ \0\"€­\n…*ëM\n¦µ#šÕVJ[Î€\00Úà/-­è`\$€uS \"ëh9­T•ë­Ô*ZŞ:Hè* #Õ:MDÀ&ë^èC¤€*³RÃ1@\"€ˆä,€)0S\n˜	 (k£NØ®7ë®9®µzòë]­¶Ù#¯“¤°µ€£‡´-tı™R .€9í¯®µ >3°	én€¥¯‹ \0+U/N·P±\0˜È@\"ë‘®`à+™;\n˜õU\0¾1U \0)`u \0‡\n¹àëß®˜«â§\n¹aÓ¯Ã ¯zì[­¶·-le\nÎÃZù€W±¶¾îƒls­\"#š€¯?˜}ì}\nÆÆ›!l‰®ş¶;l’X\n®€‡¯1“›l²¿ ë¯.Åáë‹¯.¸û!kÄMHšàì”¨	šêÕG±@\nxuÕ±fÊìÅ3ÆÉûìƒ³½…Í0L‘È[+ì_³îÈëÉ­nÊšıl[‡ş¹EÏìR®Ëû?ë…¯¸x¨€™‡>¹Úşk±Pf»zîíç¶¼[kÏ¯N½p·ëİ¾¾4ìÃ²Ç*ì‘®@\nzÿºĞ{ì\n9®ÀûEÂ©°P	Ûl°€æ»	bòÔ+¯k‘³![2ë‰®6Ï:ñìøR®Ù (k‘´\rSµRí\nèĞå*ÂÂ#ËUAS¼NÃ;\r€Ÿ°îÃà\"ìC·>Ä€'lM±FÅ[<m¹µfÆ¨€‚Nµ!l9°ö»›ulE·nİî€mâfÑûz<µTŞ¹yÓñ\nÎ€\"áó²vĞØ€\0§ˆn€\0’@p¬î*9­;zÛîR¬,Ğ´k‘²^Î;Ô¨	µ(î8\nûZUTÁ1sû°Q¯+İÛnY°3¤›=3¶Ï{‡\0ø–è/wnW¹È[’n	²¾Ë5 î›`*n‡¹nÈ[…aë¸náõBìZ\\ä+ *îjFä;¨lÃº6àºén·ºîá8znµ¾é{ˆl#U(	;zn·­ŞÓÂíÆ)°¶Bİ<;¸nxõKS¶èA 'Ôæï[\0€¥­¼*»Âì]»v{-€ùÅHUíç®”*ØsÂİ¸¶Ú[Êìã‡#åÏºs›ì\\~”ı€—¼;{ÒÔ„åÔ%½´®ç\0Bë®Jà>níx\$ğïa¸æï›¿\0‹¼AĞ¯ïv\\/[Ãí¾Åû:í9\n¶ÊßkºÖ×õ'@–ó1¶:ú›Òm«½öp»ïk½¾ï­Âº†¶ºÛÔµ¿+Î€l–vÉµBïÑ¿ æ»¤ì¶&Ë»÷î÷»è	;¿k¼ğ{íï\r¼FşÚèo¾^ÿÛ:>Ò\\\0€W¾„*¼íŒ¾)iqí6ÌPšâî´@•°O­Î¬ÅÓ·\n¬-À&B¾ÌVøºÜğIU&Î.€S´¨ü\n\0”€%ïòf)ÕkU¶ıP®ë¼9®ôÓğk‡†¾»p¼ÆÏ|!j[ ”÷ëÕ¾swP¼ëO¿¸\np°aÁÂfî[Únën÷ğ¥ÁÂõÜ)Uè°Sµ¾Z\\Mï?Âv×ü2—Aµ¾ÓzÛÂÁ‡Ö¹{†pË¹	›ÂÁ¶,µLTs½·\r{øáÙ‡p\nZóî»®Å>³€¥ÂcšíÛ¶×\nÛnoÄVÄ»¾oË­ÇG€WnØtm1TßĞ´:P^Óx€Äî!ƒšÔRÖúôøU;Ä¯ÜSo›¾æî{ïğ±¿<Kñ_ÀòœZï‡ÀœXp­/{ÜñYÅ(p°ğ[¶o°ªB»Ä?»ıâ\0§|3ïCÄİT€*nµÆnÌX©aùÅÅ;|hïâgœq±²È	;	S¶\\ÿÛâp±¿§û[ñ«Æ¿»¦\0ƒ­» ³—9ÇO\\zB×Ç;ñİºÏ¼í%ÇH\nõR€œÌPüaïm®VÂÛÛUH\nœ6qç-U[øo‰Ãj[Û5Ô£ÁFÀ,qÁÆ8›5ïİP~ö|ŒÂôòÕH¯0UŠŸ\rÛ~°M\nĞ\nà\$oó±…<¸¥€™Õ<¯-b£±Ÿ\$5-oòòÖû&m²ĞàîÈ\":èn%¸¦ıÛìrAP	 &ë¸–ı@`&o ^àü‰—4ÌV·0®ìãÊ¾Û€'íoÊ×-<µµ 	ËËlU½?›‡r¹ ğ§ÄG.<L0MÄÖí§«ˆ&¾•¥·±\\*n€nÃ\0\n’¼´ÌS TŠŸmİT.–÷1šÂÅÆ³Üí6Á@\n  ï=Áç1à>\0¯®à	€lÛ´&¶©q°O‡ÖêÚİqTû1[TıËĞ‹ì‡2[8n>Fû\0*\0®.)Zær’_7<İâ•À§7ÛÌ<´Á8;Û\0Ÿ'8û’í¼Æâüh\0ùÎ(æ¬Æó£ºß3õ:Ê÷\0(n¼1|ÚlR–æÆ	v%½Î§<in¼µÏB\\	qb —1¼ïª—<ÜõÔC¼#1`>U:án{IìcR¾Ùr¼µÄ^Ğ›9ÂØ\n€/òK\n·@úÜlCNöõıÔµĞ~5RkÛŠvÅp©t!ĞÆ´İn±Ğ½>\0!ô²\$ *tET,ôOĞ÷BÜùscRÔ*€+lY­Ğ{-î¼¥EšóîáÏÄ*;%½Îğ¶tƒUAğİ¾ÅCépoQ\0!s“±\\-•o_Àë<»b¾<-Õ!B­R)¼PtI¹>å0«U\n&»˜}ôÅÈÛÜ®tÏTOû×Õ¼F·;Jï˜\\ß\n;\\ñÏŞû»ºo©Å­€‚Èğ³™9Ó÷P©B®\\İ?}1õÿ*U?Âµ¯P\\uÌ`{Mô•­X;8ksRwOúóB·¸p}OëOÔo:&OB·Õ.ıMõQOä+¼m«\nß3<b§o&Ø¦ÂÃÔ¯QóõANÇSÜëkr4*8¦€Œ]Všâ€Ÿ\nÈœ\nÔ\nÈ\nó÷ÒNñİ\$€‹Èg¼p+ÍµTZÜïù\nş»	0Pç&@#€ÿ›Pó“Ô\n]F=\nïR\\üõÑ×WQÉouß×n¼ü†k›¹æçlÅo}¶Á,ÅoÁ5J=\"tËÉmK@í€ ]ƒıÊçY<®u›Êæô› n~.è<•ÔYÈG%`#kr–ß*]ëËU+[špĞÀ	x§u¿R\0\nır;×6½4uÓ‡È	€/ïO/R=Â¨şË|ˆv[Ñ7©\0ˆ%;}5uO†İ]CuÙÔO?=¡ìA×¦½ÓËT¿\n<É™9¸fß{tí×±;Ôÿ¼ŞÌÜNoİ\nö)[qr¥°Ï?Z÷tÍ·P°¨ì/Ï×;_õÿÏ×hªõÿ×ŞË4ıî/Ó7¸m	ÂNË[.t•ÂS8€wŠ¼ğ¬U5E›tmûX|-ôm;{Úğ·Tt,\"mğ–÷mírº]“œQğ8öÜ`÷C»¿HzuÕÔ?i½T£Ø8uò_ÏŞù[;ği³¯nÕKuCµ¯vzÿ³²ßlÛ÷wqºÄ+]Ür\n— ıo÷qÚÀà/ğËÔÖöÚÿöq\nDUíKŞT-Dwœœ.8÷•¸wy˜rU/M›—9ÓO\\]ğ_À§İQ³²¼ø¤ñGUP˜íïVNÄûHpµÿ(<Œ³½&Í{6ò{Ë_'¼8b¯>ë\\ÍrMØÇF\\pn}Ñ\n]+q4ç€,ö1É)^\nt•ÎÏ~BµÏè€,â§×H	µBÔLæÃ0®îı¸%İy\0¸î(êR™\n™\0+XŒBÅ\0áF<)K]b´#hµˆÙ´†¤«X|™JÖ °º\09Pt0¨Ş\"\0,&?Â—ü›Å\0‚µÀ‹JD3#³”ªàô¬Ô0\nkiÍİã9C<´±8:+èğ)Ùıãz42eb	>;\0ò0Å#§Yãç‡ 4ƒ\rãÂu@ƒ\rãåQB=Ğ0”†¼¬Œ´±Jº&xê9\"Ö+»VèQ\0<€Î2eH¹ı“W‡Oy,õ‡“ …y>m¯“nüù\$ÊĞwT“jR®Zİ\0¥Ğ@üsmØ\rà\"\0…¯@2{‰€›¯D-õNô˜\nÛÂxÉ—HûMÔ…>õ;T%½Ö1œ—ëÌòĞ	ºõuåì,o-w]T\\Äíw´Îó»y·Ó//œày¿ºo›]ğyÉÌoIÜOÔ¹FåE*ùÇæï^oáË7<ˆy×æöà]í1ç¸	|ù¹¸ßœÚäkU.Å» 	ë‡¤Â(ËŸJdHi'oö¡D“T xnOtÃè˜/4@„èª_şòĞ\"Ğ@s JÆfŞ¾±9ÜˆjÂ˜ÌÆq‚épÔj¬¦P´’dèÚ=N\näÍLĞ(.B\"Bªá§À’¦‘ú‰ŸR\0ğMR²~¨p÷D~Éè×¦§€KJd?‘hÚ8j=X!t`N÷@r„ô ã³`Æ&X3p0‹IzÚg¦‚s€ø—“où9XS†¹-&RŸŠA0zòtŞ±•,zÒ­æƒødy³®8d	®™rxus{!X'©\$ì €:úª©ŞÌÆzòÒ|à1™Aé á\"şƒ‚\n˜\"	––ïÏµ}„‚r+\"c!?”†ªÏ§'&2 }„ƒN”[¬ ©º„µ8KH\0ØïÊ7~E€ÏØJ7dC:%Èä€;ù1IÇ€äWîˆVF?7šd:¾ì;ó!RÎ×»ò4¦à’ªÇŒlxÇ y¬Æ‘\0ô˜È60%ãŒ\0ğe¯D<x]ã!`/ú™ï©~0øâ`ÿ\$W01\0004|6€ 5üãJÆDÁÊ´MÑ;ƒØ\nŸÂ(ŸÊŒb>{õ ×©±xŞI@È=‰•&Ò8=?9ãC¡CƒÄ™8ÍÁ,–v™Uÿ|×À!G{	 ²Ò…°èA!úªÜU)Ï•-ëÅ`ƒİñY¤PøÆŸ?É9™ÀdŒAü–wŒ1¬ÕïŸŒ‹-,ÙòÊÍys{î¶’ËzüòçÃb¦R³WÉ¿Œ\0ÏÂ5úÓñ`*€ğiŒ¿0Û˜ëÁ_üCğHò_-!óğŸ?|ãXÙ›gòò×ÁÆq«ìğ<Ù<µ¢§ úI,™x™í­\$²ro},ªÉ”\0ÿĞ¶dÒÒPUïgÓQı*%¢Ò_SÈh€úç\n5À9¿óD5şºÄ<ú]ƒ§ÓŞÌ·±ôé™!³úâõIJ¹ŠäĞ_D½ëP8 †@±L9Ş8­;7¦Ù;h:×¿\0§~d3y±eğù¤8E}Â3pıH›±¥¨ğfdéîÒÒ¯|,T¯³?x\"Iåyt«3&Eë†M¤Õzá…¿!šBAŞöù{ô	«šÀÂ|:ØÂğéô ßÄZN@l³Ôòµ­\$'b§Z­%¡W£‚ş,‹¬3w\0ëJpÍß‚ôìÙ¾îè³é\"bş”Éáî¯Ò.~TÇåÉ*²\"ÇáIªj´’mŸŠ£h™c¿)•…'ò9§zºÈœŒ˜”Æş‡««³-‰n±îß£ib”9j ¼G}€çã§ ˆ\0îZtñè?ô¿Ö@5…Óå€Ùöaj™PÙæ1Fùáá\$*9şÑWZ~ŞàÀ!âğ~Ş§³RÃ~ß\0004®üşÍéáp`ñOÔ?ídÍ(æ\n™Ç~åû »à©şğ ¨*¾=ôx£ÅzÃï@\0004\$áD?òÍ-8küM‘şÏÕŸ %Uú£ËAhâp#áOŞùş#HOIAwŒÜ0hŞŞ8[äĞo8…y”[úŸãˆi^J°¿¥ëJŒ*'“{¶ö¿ùvù{\$8ı¢ğ‹ú¿¨êş™vAw„¹W3¿+JAşØQ~hoÛUÿÂ7’Y`¼µ ’Ğ\nøù —şF¼®íÿ¨ui•ï[wåÿğğğ9 ÛWÿïó@Ä@€æ\0 Cà€d€ÿğkËÿ\0Q\0\n¿['XÿÑ[tcİ\0¿à\n¿\\õ\0r\0Ìá•ƒ ¼…€2®\0Óÿè\$ë €m€5\0(ed\0(eŠ <™€JşÅ ›ÊÈo+ \r«ï{\$µå/÷’ğS?Ñ€ˆ\0;Ê˜\0…¤ \$‰rª!¡åKà¿¬(“ô‚éa¸ÙTAæOšĞ9²Æ`cZ2t€^Q™	úRœò™Øp\0~¤ë 5ï{ì|[Ù\r2Ì`Ê½‡€Ú‰ï±Zp ÀBOÆ:~\n!ªÃ5MRxÂ\r)êK)»àBt*jü-?Ó-góï. 7’;ı(èpHŸ\0m€ÙRÄ	`ÏLÃ’@€\nb½À—OÎ€ÚZ}‚`!1x‡zÔB¾'ÀÛß ½È\r£Àƒ€Öù8	Ü6V¯ËH@Œx’72\0x€Í”†b&!ÊôáåM%R7Ş\$\r4\$\$RŞ(ÀËi7ĞÚO‰€Ÿ9ÀªxKüĞS@ı`hÀx^°ˆ\"(ğ!É¿K±ı“kñä¸–’É´³!iğ0(ß2‰ú.êÖkO é<J@Ä‚„DYX!à]`3@—ON\$pEà‰ÁY‘ñ6È# ßœŒí9:`­ø€¥ ^‹,ÈÀ˜%AÂôÔ;a¤ğ\$Ğ&©i`p“lï¹”ê1¸#ğBY„\0lîŸè¶)öÀrpBNÎdi,·TÜÁc¡ÉK5ˆı1¤ #³jZ}x‚à(ô	+ãH k%¥zs¶œSBùÍ#lY”¯t’?OK˜Q\0c;ÖĞ‰ÜÃ½I<\0006<›@ ±è2=àÀ¥9–S(Ø\"ç–Y'ƒFî\"S–© BàÈ€]?_&IÃX1°B‹c4ÿÒ–”0ÛX1 pŠÖ{@ÓĞé´†At`ÊÁ‡ÆØR¨} A\nûˆ÷´¯ò”\", ûÏ¹Ÿ‰ÀneTÔW(#D˜ÔÀÆ	;6÷®Ø/@‚¤É‚}Àüƒ5¹ôL¢7„Æ ÍÀïÄ÷VÜ08 „£‚ø>ákx; xô\0xÇñâÌá¨0>É“¾Ö:)V„–0eCA“ƒ*j¨ó`/q Ö¿“}‹\\ T NÁ*h†RV«/ˆŸ9Â‚)r\nÈ8 Àˆİ½\$…&ˆCgşÂƒ€q9áâñJ°fàp¿¼‚XÉ¤H˜>\0]`Êµƒ+LËÅ(*†Ú`Ä Ø~.É¤T´WÖ/¬Â.=B„tõ\n”#è1/»AA¨ƒ*Z¢S˜)E¤¡A‰\0æ„RŒÀO- 8z‡¡ì\nQÓ‹õÇ|Ô@©Ãì\0\"/°˜ûù%ÿ	€•‰øÀ‘P‘Y4\r\"È± è&‚ƒ ˜®A¨;7	B\rà,¨\n-' ş½Õ„š”åêÔA”\0´vµ0G…\$+ ¥U*MI`ğ‚¹}Nş!c0ğ}d—ƒâ”åêcí0\\°‹aC>Ù…\"œ‘1‚s`s`Êˆxƒ+d´›#h?/‘ŒÂ:ÿ@:4\"Ğ‚£’H;¾÷>&«ÜQÜL¡C¥9‘Ü/sîç¦\0_¡^Bœ„“*ì+±ÜĞ±¿A‰…#	Zksİ+ÉôB:¸N¸ØJop¡A‰Vä–YĞ³Rœ¤M„^ƒfœ(ƒ+P¸a_«ƒ+`Ñ­ù^ã<‹\0ïéşóTxEğgÊ*tûäÌ%(<À–A³Á•×\nä£‹êğµŸZ©­zæ!’ˆ+˜a÷Cƒõr˜È( pja_Àƒ*lZX\"ÇÀ„¡A–&øñ[˜b0¾„Œ‚„¡	<+ˆ1ïÁEÃ.9ı	 \0%À8(á›BQ„zp´ød/c¡wBâh¾æÌp`!&ƒ+H0(0?Äìˆ™½ã…™õH!6`ÌŒA©Õ\0¾!â`@ñ\0kÏ=P{Òû`ì#î\"¦›˜ûh†k\r´+ (³¸dA.ë‚87-‘ÖÁ¡¼=iÎì%`„!âÌH!:%… \",X`ˆ¼CMJ;…éB•(4¡â¡ÄÀá„a%\"l#*O^’Ñ&LCJHÄ8 Œ\0©©R…æüsçWËo…Å¯Ãa6şDj7\"ch%µD˜ÕÜ:Hv‰G`•#|„	X‰ë;È+mQC×#‚\\X Zd¢Å	ÓıCjDôÎä)¦ğ{`CÒ-µ\r	öÛ)0\$m_ÚAgei÷íPk°s“m=õ{öñˆ…æP`åW\n=NùâSÄ€\"€s_aCj'8Up¯t?VO'¾Cø‡è–”Zø¨@‹3`á¼Miï|ªÙÔ\"ß0B‹2>mT¼ xf(9Ã!†¼3xnõ(ÊÈÇ©á™ª>s?òôÒ ¡øÄcÑÂQD!erw¬ê\"¶ğıâ\"\0á}êãV°EğãàŠD1%L•éÈ¸ƒ± Ù,:)J!é\"ƒc;@‘¤Ûdlõ6k)7×±A>¨ˆ‘Í\$èh‰ä4ÄµÒˆÓèx3Èˆ,¢_àÓfêZ\"›ß lì¼ßaD_8kå\\FñŸ¨Dafà.\"0/øŒ0P@ˆ’ÿˆ‚Î>\"Ô&Ø„äÉˆIDg„Ú½öÄDÜ°ĞÔ‹5­\rÁÖká™À©ÄAˆë…¤ DÂ(‡AI¾…•‹Q xXoƒáè=p‡¨şŠ\$¼IÑ¤0È!ì½1Ìõ¤i8×§‘)¢L=p……	Yø«íg¢ì§˜JCä‚—úy¿èAa ·ÁNxŒlæ¨Èl.bÃ`„“Â#„°W17DÆˆúCmø4LPÌñ å¤gÂDü~àø&¡Ñ\"¢¢ƒœ¯¸	”-€¸€Gá‘eJ:Ï„/sÕĞŸR`NCu{Mä\\èoŞ° Açê\",,(± òAa2W2ãÖ´¬Å\0‰>4†Ø8%QAÌÌE\0…Fñ¥-,L¨ñ@!mÁè‚TuÈ™,#J¡µE}…HÿÔPwÑFÚª‚\n.\n¬&l‰ £ƒ\0Úœ\"ŒP…@s`ÎE\$|æˆ)\rh ¢\"€E(zTô¾	Pp¨{§øøÉª¨D¸£0¥`•>ì‰bòº(SUX30\$\"‹<1~¡ø{ú€dF`@j«ú'Ä ¨QW\"«Â[Dœñ¨)2¨ªÀFÑÑÜı_\$P¨­dO¢°DÄŠ7ÍAfA;\"²El‚æµ@Å&Q@ÎAšzázü\$„t@†â[?zá	Ê¼S±QTá%¼Y¯*ye–« ˆ&9¬X—û!ø³oZDE–eŠd“óƒÈ(„æFòpr§«Pâ¡èBT-D¸¦N‰ø	÷™Ñ <@@ÁÅpB[\r¬äG¸5p„<ˆî&<?xº3Á,£¢‚5´”]89pG\"íBit†˜x ‡¹‘8kì9T\\¸€c“¢€„‰¡:¼\\x®Ğ‚à¶A¡xã°\rªZX¾p ¢™ëÃĞ~ü_Ø¦¯cbl…}o´à®g±ßaF	†ê'èüN\0#‘aÏÑò[THpF¢tÅu+. \rPº±a&2©¹Æ#!àe¥Z™@~|Ğè©Úğ,15RF2ˆŠHş.Ä=8±Ÿ'úƒ×òìcÈ­\0Gã5‚ÂşÒ)dX€q’aï@®•#x+'¶q’Eó?|Ğõ21|cÊçã˜¿†£.1œÆEB-HLÅí‹™æ3&øÌ±zADÅîŒÄùÍ”«B·“dÂ˜!f˜—9a/¼á0•[ŒøÊNØ'¨5ç\rc?¢´v\nÙncñ(±¯hÈÁù6I<Ø±`üfA)È:Ÿ‘#L\0]O®‹ÜÕİ€Ä -¬UkB†!«‘JÂ•íaÁˆ\nU&R¾5!H¶	½â±2ÅáˆúÃ–\$+	#Z KL¯{#&êúB›19†”²5êQó£Mi®7,pøİ8î’ò£§ëØÉ€mk>¥]J’`‚>‘²T©ÆÀWÏr6ÄkäÈ«˜Ë(ÿ”¸ğ;t²±®V ±{x¥b6òÀ0-,J³±/Wß6¡\r(jøØ·Æßg¡!Îæ4Ä46FÜ’ÆÅ£€»å Ş1·¸	x‰Ñgâ5|hr8*æ8ÑÂA+çDh	ÓLÑÄ‡íş*ÑéUÑ ¬“™G*XÉac(ÂÔƒŞ\0¦².TsV9 ¨æÌ¿™©jÇ¹ hÍMZ3á\\4Éa i¶_±Ñ‹2åe(Ë¢:cI\0e/ã 3õ|X`„Lu…ƒ âÇZÒDŞ\\uV„Jâ#±GM~±’:C?V|D÷#¯4Ñ„B;jÕ'•qÜYd	|ÊÒ@µ÷ê‘İ\0¿/\0óğ²,¶Pİã­€r7ã:üthï†ÿ³±×k&4r8ËYvê\rA)Ç\n<ş9pøäB2`´.(Dx\rÉâ@#ŒıÂ°3€hôËÄ8PqÊÙ‘2ú2¤£t*”Ùs1lÌö°4P‚ˆªAäµu(Ê `^æš9š€X~\rÜ0y!ÊÄXˆNÓ¼Ê/',¸Á\$¿6I:«LKF˜ÔÄNT›)R„ÚR8åd»ØëµüÖRô}ÖL6 1¹Pv:à©·±.¼îP´<vøİs‡W)mû]Ï1Sn×-®xşÄ¸È¡zrÆÖİÊÛ~w;XøÇñu= -‡;–Æôq³Şw:hmî©iË£›÷+Î\\ß°øsPæ5ÔÊ¢f»`›;¾râïÉˆÇ{îDnGûqDÖéP³³¦ñNf•’átHŞ)Å;x‰íáê¶˜tòŞÕ¼PG9rä8OlŞê¥Ó3x§[r[Ñ7:\0±!1´Ã™xõ/¤(5Âb¤î½¼Lƒ×;nbä*¡kwDŞ)ÓfÖıä-9mºŞ-»xÙ’œ6‘m~Ş)°#)îLº=vÈå9À£……HR]8º\\o^ãÆ›¦'*-n\$A;tÄAÒ{‹pr\röº_‘éAÓŒˆõP®øäÈ‘lı VAÓ¦førİ.ÈŠ„…ÂCÌˆ¦ır\n›áÈKo‡!9¾d‰vãç\\ÌºU‘í‚BÄŠ–ÈÛÔ·Ã\0¤ÙÁ½|ˆ¦ü\0dY9l!‰¼s|†Ş’/\\:¶ôk°éÖDS|™\rR1\$ÈnBªß Ì‡&øn\\]¶u>í©R¢GR¥›ê8zuß®Ã€‰²7Ûô¸¦pœà*AÊIndN7Ô‘À×ÒBG\0²(ä¸–àEC€Y\nR+dwHåq²…Q\nË§‰í¦d.8‘nŞ¥À,‹·R@*º·‘úäYÃ³€YN\$»öp\$JFŒ÷\rñ\\8¼m¾àE°§>.ÜQºÃvxàeÆ{l®È[Ğ¸£u–×àÂ\rÎošG÷ò…‚EC†§snª9_\"ŞÙË#¦¤/JvÔş8|’ˆæıØƒ¿íû5ânšÅ)É#¢GFM®[”<B£\$5»|†YòO¶›aòÚ\"Eô•¹ -¦J°ìm‘\$E„–9+²Y…*Ç|œpÖKsŞxó±.¦î‰ÍĞCÊgËOÔP¬¶Üt t\0Ò¨VÆ[¡\"?‚‰¯	÷cœw?.o¶:@ç	ËH¥W<ÎBÜ©:–rÂØù½«ÁG}è[œQ±L%¼èx—‹\$œ=?ÂôMáºí·9îuÛ`9øs’ÜaÑK¶§¡dë†›I&2=éÃÛ'¶0Üa=»~öø\nÜåÏpáz²Ö{–÷=ëÇôKÙá¼«{¬Ø²<S‡Èïv^î’{À¢ö4hii£D=©{XÖNøxWµÑ¢\0àÂL&['‚üS÷¦¯K^•góÙëÖù=O\\ŸÆ<qh`…ì›ÊG¬¯g…ı'˜¥é<Ÿ°a+º‹Bk+L9<×«\\…‹zÈöaõcêäŞ‡b˜¤Û‹ÖáÁá»ç’D3x¤Z+hHFC‹aJ\"\0äö\nOÙ^ØfRÊ'ö<©›ÒY@›ÎÆcL¤RäŒXq¯†™j>O”u	2,;Ç¸@¯«O-3,NTÍòª’ÒŒ†KH3|ÀY±é ığı±s¥'¿Q{ë(±ï¬wû/ƒÖùø#À›¤ç\0 ¤› sSrJa	c¤¦æÒ™ßĞ=|l¢¥WŒç,À3>!”m–S“ÒGû\0N_î¨‡iõ…€ôây‡0ƒ72•ÈñeşX8&0LJ‡“”µn`yg†¯SÁĞD…¤ˆ˜ÁÔ—ÀÏô`&¾ôB\$†\"lñâÌÆÆC\nÈñÆ´I@‰`D4ê\0×–Dªè²ÍáGj©	>!+ÇÉ:ïàVÊnôd\"A0¼`„âš0l¯ú#ãéyX‰7E\0½¨•–Óéî„wØ¦‘mÁ¥JÇŠhTÍä¼­&©ÏeÃr”c+-ùA1‡Ò\"_•?.ˆ,ü­ı»Ãdç…¤™VxêL¬É2âÇ pA	•Y~š=âW³LÇê	»‘e‚ &,ê|¯ÔÅâû=‰íÆXú\0')%\0rv,	,‹)ÙCæÿšÄË;6âX)(³³`^8¿?~…,y%Ãôid	Ÿ-´È~¨ıIøznçéò”%Â·{ò*Uÿt–Ù.p0!¡½ì‡¾õĞä³`LÇfÍ@·‰<n†ÌX±Fß‡½İ}üõ¥ªä´ßOPáCKE€™,ˆÀÒ'÷’Ïİ‚ü p*@D—PË9”&3§TIƒÚñâà–c–iF¼<S¨122­–Ò¸~ü¶cİ0ñ%¸D~Iœhr[¤<inĞ£e¼Ëk–Ì’0\$¶ùoRÕ’7–df•’â%M2®ñFP›*×áãƒØK„eğÌ\\˜zùrBãœ*—Ú\\z!pXeÌË¡—4ˆV<¹ùrYñK¨a(MğÑ2r|ë#F‡S—øhêi	v\\	Ã†÷—o<<F52îå¦5PJ;ä\rÔ²yx›€ä<C—}/-÷c-GÛòÙKÏ—FÓ&0\$JGğEVRªŠ9úÓ¡ë˜·RÌ©*åğ2/—Å/y 8.YW’ÍâTÜ•lÒ„D¸@^Õ!ÃL•«(M¡Pñgâ²ğà…‚øRÌFîÄµ2„\r‹—	º` ¹€Ò„ßYJ	€èáî,¡9-Ó Š/ÊYœÁIjğşß…¾Ô”'0j›ñCá&@»|0H¢@9Brö¢±K§ŠfĞväÀÆ«0pÁÇÉö—®Qš0\$Ãt`“ >L/iï0è†¤@Øjrş\"ãÌGÑ†\\ !¹qÑƒß|Ê˜”ÊT\$UHÁÛ%ÑÌQ˜Ÿ¢/óğip^ûLK˜£¡'sÅé‰À&/5H„)1jcÆRØÓâøLa˜©1vb„Æh!w¶9€²»Z5”~‚Æ£c€Gì)_¸U£ñòÇ°DáG¯™‰Øä–Uæ@G°Š½zĞ èC ]&C†‰ÀÏr0œÈÙó%HŸDÊd^õdÔÉ`ğ BXòÓ™=2d˜z‰3%¦NK<Ê÷ègòé”\$O¦Qµ`q2º\"(3` s,¦BÌ«\"|	¸ëËx%A×&TÌ­™Zö%?7ë3/fG ™›3\"1\$(¦PĞq¥MCì 1\n4<\$š)k“6ÆÄ«\0÷é™––X35ˆÂndW–3‹íC“9£23°‹ëRXëî¢Ø­<{Ë‡”àTŞ,¬ÊÙ˜\0f[Áa™‰3éø\$Ì\$cÓ1Ù?X;b1¦ƒß€¦À³¢Yµ;nkÙòäcŒš¦‰,:\0Å*à7ÙKp0^#Ä£àÿ2Z éXf±7†‡Â1šHT0Ç›Ï™œ½Tˆ'3¬0ZH!²ü!QD•MHPl÷/M\"F<\0Ğ¨nÓ4ã=DÙ’ó-œÓEí’®ˆDF“áYZÇzŞS‚™v£×‰œûŸ¾'<ôöù6ª85\\ÏÄF°Ã<Gd÷é§£òå*@‡¥­ ö:O\0Â62şÂCrV	– Ì 6o3-ã¼£~Ï(Ø&j¾âNzÃZvZìQP\"…²uŠ L¹	Tà?íL ³Mf,úøÊ‰Ù·àÏ\\!B]‰ÜùÊlÔ4È\$‘\ræÌE7›64…	>€L3U€ƒÀiJ202d±/îŠ€„P`¶Q\"À›)â›nõ%èÃÅpalßÍ¾K&üÈ©*CÄ9¢ÆÆ—„Î–Eg“m\nÃ÷ˆêL˜çôµ©QDgA9J}-0\\X(\rG™ˆxz¹7†oS·À3z\"~jü&d”è©ÆJŞÆÊ¼DşDù¬\\P3P£ñÆm\0ï,m¦,·ÆZÊáP´+'5N©YiÀ—`:Æ^Ï6¤Pø·«¡“Ápšö\\g¢¾àIÒ˜§9›4÷tj½Ğ°¨@>Eª|Øl:äP8ZïêE§ÀÄ›<ñÖi¤Ä€\rÒæ\$JBõr8XÅb°¿©B[æ,¬¨ \r™Êw_Ù®Z¨¢dµ#äÃ²€w2îää’ß3”&•D5Üø¿æƒ³1',Ì<˜a.u,Ó<ç/Li‰hU¤7RèåˆËW†È÷`%€(MrÑ\"êÍ%…±Rs¨Ò¹¤ĞE\"Š‚\")ªr¬µcÑEY(‚4‰ßVdPvd¥Váû•¾(`ˆ˜ã§H¿gÃ:\$.´FÓ–&\n‚ÿƒ†dr'|˜Çóæ RfÜ9Ì\$(æŠ¾ŒÑ-üKÄ9-å´¦—Bšz¿H¬x «A=ÅQŒá\rÓ5ëñGÁÄ‹œXø9SxBÓf‘C<›È‚.ìğe\0ˆÚ{–”u|)Ä/ZgdÁÂƒ)TügVzŠ\0æ¿“ŒëÌÙ1‰Ü1Œà9£|ÍÌœ<îYİqb7€eİ;Ì†š¾ğHò¾'|=i\0ã;ÈO˜H¿@‚ú—æXøŒÔ¸ ­Ÿ‹‰DïrfA1ãH‡%Oz'6È¬àÙâ€Mç‹=8'.^X;Ñ0êp(âZÄÇ‚8,ˆÈå5@ÿÌ¨Vw <T\$	åğ)eãÂ_È;09åã°Ñ–)!5mêrhúÅ™Ñ½6—f8â+Jù‚ë8Y‚³8ü„ÈÈemÅNïà?Ä?róí9êÑ‰ĞLn‹hŒM8Ê	ëó¯ áÅ¸™Ù	Â(i Ÿ?‰@ıPõ<3¨‘OAÚÅÎŠ4ö	TKèlFdŒ‚½Ê_ÔÔ¦TŒfcÏœ,ñÆ|*˜›€iKIO‰›QmSÇ)™óá¢nB„œ×>:fˆ ğfANŸ5>p† ˜ƒ¡Ñ&«O›KˆÕ}sŸÃHO#UÌ,Ò‘Gr§ú ä¸\$#EQs§ÛÁ{ˆ÷¦I1ÇñÓífp3}¥š{àÎƒÁf¸4–¥=ŠlìåCËAâæ¼¿£\nä	4prØÏ£!gmÆ*Šö¹”QØ›faØC†Œ?2JvÜú	ÂPÖ'Ã¾œW.† Y7ùs·G=0?Î,¬ÿ'”˜gCÜé?Ø Üÿ8täÆ ˆÁ³†¡@x\\X	\\”#E°Ü]÷•ŠÓ<]– ±X1ê7s5‰ÅZ˜‘±~bKÉ…ìoV1\nü˜1<\0¶\0è\0BUë\ns¬9ZO1øCe—3MŞ#h±:0ÆJ7ÓHÜ\\è¡½Áê€³¤¤‘®è\r\0aWŒn€ê½Jñ°˜h±g2‘ähäoµyQ¿ckĞ<)ŒÜp63ô£T©\"cK<‚–šRËègcT²Ã˜ä1Ê#ŒPbXsn< /ÀV”£ÍG(°uù•s&ÀúpçÏğ€v>PÇºƒÄäf”ì–(<ÕduBƒÙÍVDô!(DÒdñƒÔãš¬ÑÙ,*‡ ÷.å—‹.ê¥e€ŞĞ™fEAà	ÖSt&¨=Îé¡DÊ­«uÖ5Ô 0Ç“¸Ç\"8U@K Á&»imBŠ³²``Ğ©jáAq…\nô(9¡ªCC=\nÇãíLzcˆ±…aàuş”-‡®±éÌÖ}}ú\$aÈul.í‘\nÊªGVŠ€¤D:ŸS¶ê<]ygR>dŠÈÃ’\$ä	¾Œ9#Î¤\"8\$B¨éÅT+fy(¤¸\$œÇøy”áæJ;’0®‰\$7U%L¬•VÆ2\"›	9ubŞºLs”÷9r!¤*B’ÀÚY¾{vÍ­‹d'Qm®Ú©±Cm†Ğm¶Ü¶Ñr‰D¶ãj¦Û.[ˆÈÎ¢LÚ‰C]\n%THÛ¸s Å­Ë”Çn[Â;ŞŞmÒ—T2\\²¹®‘é!×»¤æò®”LÆ7ªvJéÅŠyšÔ:ut\$è%Ğ[§g–Š¼³tEqĞúù®§İ`;ÌkVã*‡r¥‡N§›êº¡tÈ.qÍk[—Vn\$»»ñEÈÃ©VëN9^g»óuœ…UÖ“­E<Îrİk·›–ëuØÃ“W^Î’”ï!dtÈè’Bs©ã1N™]µ9É3ëõÈÛ¸G`ò:œ=ÉIsdïÅ±%;nÆÈ†v¤æUÎ›zI1o­¸4£Zçè5\0Î×œQ°ïvÜíÅÂK™wo”ä^;ym´ñÍœ—M,SIp;’áF@\$çsX]Ê;™<åu®SºU²P\$9ekrâr‰÷~HœQ»ı’ä…‡Ó­÷2VÏ!n%Á6KØ°.ïR%>\"#j&i6«ÑGó`±Ò&Ã„h,Ğaê,Rc/¶ÉT½ß›”ôúªIÖÂj‚ş½Õ~\\‘6M›ÂÙ6Òh‰I¢£×°48G³°Úfë†Ğô¼SØ¸¶p!ÄZÌ‰ë&ŒLšY«RsKÒ\$ynñò;Øg©ñ®§h¤zz¦rOãÖ€ŞøCèŒ&%øQ™ÂäùÃ2£•ÂüÌnÄ¯e¯Òß5ƒµ3]_,ÇxÖ0(lĞe€Å1ş¼ÉÊ?qváÄ÷ƒ®³~\r!™.`æŞP·µ9\$Lø#‰¡.‚¹™Ê-&\n0´Ç·È¬ašÃ]“;ğ¤Ø1l)8‚‰Ÿ¨MTªHÓ3¦A&éEâ5şPzOÀÛ >A™£U¡Ş¸oS6Ãr†¡r)´ğ¨=[]Å€@aâ’Î<²óO`\$ş*cZ£WØPâ!”5‚à[r{óÔ)ê‚*é:OÖšõ?eütµ4OàMg° #eSRr›*—ÚPçEM‡-ib%+çÛ€Ma¯C`¥…3î•ô‚pïRB‰ªTDıèœñ¦2é}Ñ;Mâu‚m7bY’‹‚öN.J”è¹Ô¸ù\n•™Í&ˆ±ù”Ã¹cBRê¥ Or€u\$¸ûsè1–kK¨ ²ÀàôÁ<¦÷ )A‚\rÇ¿4hFô†¯v‚p‚çPá¨\rˆc\"¯‚‚¦ÂÑP^9ÜvZ¾5Š*ÊÓ¡„ÆÌ' @ìïŠEÁ‹…jñ>\$q`JáÂ‰Ä\r\0æ\0ÄÀã„Aä„ä¦d\0à¨@tÍi—€8\0p\0Ìº•JeÔÌ\0€5\0d\0Ú™å3\0À\0\0005¦’\0Ş™Å5\niôÎ€\0007¦’·4\njà\0SU¦“MTÅ5Êkà\ré SV±LÚ™ğ¢JiÙé­ì\0d\0æ›TĞ©´S?\0mMÒ™xpà\r€S;¦ÙLÀˆÚ&w4Û@ÓM¦¿LÊœ57új´á@SO¦ø·²šı5Zk´ÓÀÓ}¦N*™ı5êoôŞ€Š\$¦¿LèÍ8:fôİéÆÓ[ÉM¾œ½4:f4ÌéÒÓC\0oLèµ6¶C\0€\0gM›3nı©ÚSz¦³N¦h½;P\0©ÈS˜¦¡Mâ™…7 ”ì©ºÓr¦ÍN¨€ÔîéÕ\09¦N¦›­5šu´Ú\0Ó¯§·Lô]9ªuCh€SÌ¦óMğàE4ğôÑ©ÑS>\0`\0ÖÅ8G·4áéÂÓÈ¦ÓNšı=wæé²Ó~§\\(’œ\r>ªv \r%\0c§ˆ\0Â›İ;&Ué®ÓÏ¦mMB›½@JsßjS=§£Lú›8šuÔŞé²Sù\0b\0æ¥<oTÛÁÓŠBO®šı8*‚´Ì©½€8§‘N¾ı6:uôüi˜Sa¦ßND½4ZiôĞ)ôÔ&¦÷PJ…=|ÔÌ©ë\0005¨Bˆ¨ˆjnõ\r*Ó>¨^\0ÒµBºi”çiêSÜ\0iOÂ›9ÚktåjÓ®\0iLêŸõ3e¼•**Ó/¦±MÎœ8Z}´æj&Së\0mQ¢°jtTŞé®T+¦±Mšı;ZâªÔx§7Q’ı::~u) Ô¦cM¾£-3*ŠiÅ\r¢¦÷Q¦š•8 5)ÈŠ¨íNZ¢3êƒ•\n@S0§)O–£…7‘D•\réŞT'\0eLêšıI:v´å)îÔC¦ô\0Ö™?šxu&j€4¨_O¬•Fg´Ù)ÉÔ’§—Rf›µIšnëy)±ÓY¨×QÖš}4Ê–Õ+*?T¦ùQJš]9ê’UjÓ¯§Ú7²\rJšhÕ(jES:¨»4^œíIÚ–5!)ëTÉ¦Rš-FŠ”´Ş©˜TÜ¨éQÊ -@ÊlU:é Ô¨v\0Ö Õ6€5©öÔ“\0kOú¡HZ‘+{)£T]¦ÑM’™•Ol\"‡ªSL§×T6›Kªh”úê9ÓT§íO*¦å6\nxtÓê\"Õ¨sMšİE\n‰•\rª Mªöæ¨Cštê TË¨'Q¾¥M<ºhUê…Ô½\"›P›\rIºtÔßjAÓª¦ÃSJ©õ;z…u+ê/ÓS§»Tª=Hš}c„j¡€3§—TJš­4ZvU8*§\rì©]Mğ…P:i`\r*¡Õª»Q&¨Í9šˆàj7Ô…ª8·’¢F:…/©ÊƒÉªp\"ªU4ÁµBª:ÔG§„\n®¦:úŠU>é¦SS©;T–¡À€Uu€\nª¡N‚ŸõSJk•©­Ô\$§\0Æ¤õA:€4âª¦SíBO¡•Djpõ)ê¥TP§§T†›\r>ªŸõXé¬ÓœªPb¥õE\n5jËUªè·²¥Xª}QªbT&§»Uœ­Vº|tôê@Ó¯¨ARºš[Zõ\"ê¿TªcU }TênU[€1S¦ÕQJ¤Sjy´Í*U©‹WZ£å;z´”ÙjtTI§ÛT~¨;Úl•JêÔ¶«>R©ÅJ\nx`i¾ÓÅªYMfš<vÔÒéÇUYª!Wj­xz²ÕY*Â\n\$©ÑPº¤5=:kUvj+Ôy8R^ªu]\notıªtÔ‰¦±R®åNz5xk	T§©SR¾¦-Oú‡u-ªÄÕé©ñXv =4º…ôú*ZSP©ÑQ~¨5Fjxu#)×TÏ¬GO–±M3!D”òêæU'©áSN¤=Zl5Œj\r¢¬/VªœİLªÁU8ê\rÓ9ªUò£]Tº›@)Ö°¦ïM’¢Õ8ª‘Up)œTî¨9U6š…QênUêÈÓª¦ÉXZ¬ ŞÊ¢ïnj¨Sµ©sX^­ESênUŒi¬V@¦‡MbŸ}CŠ§µyiîÔî«=X©EcZ\"‡ªSâ§¹QÒ ğ*º›US©ÈÓ¡ªMº£Dj{´ÖÀÕ	«ÑY<PõHjl”şêŸU®§7Mò«m9º•JkFÕJ¦ùYº›Eb*¢U/*¾Ô&§uX^¤55cÕ*/ï«ëZRµÚ*£4÷k\rSÆªÉY.ª4Êz4áë]S<§LæµuHÚ~¡éĞÖ<¦qNÆ¡İBê¢úë2ÓE¬cOº±½EêU£*XTÉª±[R­í9Z¼õPjrÖA©ñQHphÚ‡tÔ*9ÔE¨¤7¾°…RÁ´U‘ÕUZ§­Xòœ}Hjl5¶éºŠ¨çLâ·CêÍ5êgÕ½¦÷ZÂ±U4\nÙõak.ÕT­íTf™…h*õY+Š\$­GM2½Nj¨´ï*\$Óå¬ÁYz¯Õ_ú£uêNÔm­1Sš¶í:êrµÈk?Ô:©%Lş¨ÍBzªê¸ÖF¨óN\n -i\n×u¥éıTÅª¹N}íÍPÚÉõ˜éœU1­«Z>¢½pÊ€UÌë7Ó}©I]´í9Jp4àê§S9«'QxPõcÊxõªWÖå§CUL3úh£{)ÜÕs©…¨•fÚ+¥U ­5Sâ±}\\*ŒUÑ«<WDš.öæšmB\n±õœiÌ+¬yQ¦KjÁÓëPÓ¡§[Tšš+ÛšÄõrê	Óå¬õMXõFšäÕK)ĞÕ\r®·Q<mIšzÕL€d¨\\6Š¼%yZòõk*Ç×\\©§Tºu3Šó5é½ˆ†®çY§Í3Úzuºk~SåªµM2¢}pê–UŸ+³Ös¦óQr³-KÊpâ‡ªWSL¦ùPâ´]9ºÛU i¬Tû­UZŞ»=gêöã„jËSo«	RÚ¶}ZÊåušêHWT¬gMÆ´Íz~¼CU½§o[Ò¸\ryJíuW*wS­ŸS¦¬%5Êåt÷«®Öğ¦¹T^§\rQÊgÕgk½UÌ©M\\N<*võxk•V„®€\0Ö¢ujvÕòª\"S¬ÙTò°\r3êtß*úUÙ¦ï`\n©åPÑ´U€éÕSÒ«1SN¾ÍoZƒõ,ªÍUÙ®ÍQ¢ÅCê¹Ïj«TÀ§£U†´mjß5Æ*lÕÙ¯Tî´mL*Ñ´ÎãÇš¶CLz†Û³ö¹\n€šñ5§n®ä1ºË¤¤*s¨‹“9R«•uAî€ä·’qMCİÚ{˜Æœ‹8=oDô*ÂM„×\"Íñ[	6[q¥!²ÂÃ›‚\\&b¨ˆ¹‘q.é¾GT‚W1´WÿHxsF=±5†[\rît\\T¡Sp€xé%Z'RRŒ–9°Äã½‡©R\n,?9Ásy&E¹uâ\0ß¬>¥a%\nÃ•‹	-œ\$	Pör!&aÉ;iD+([\\³\$¢)'scçK ä>6>ıb™ÔE…û\nîÅ,THmxt˜™m¤\0!¹‚v) ñÈí‹fö¬[7A°üéy\n›cê\"mw,a9Qk¹bAs¦k–1U4¶^xDf*HlâÉGŒÀÆR>x¿HØr}+¢€¡\0(3#bÂ”ãâ×/æ–Äm§îFåy,¤¸OŒœn0çù¾•ŒÚˆXl\$XŞn/#ÊUæÛÎMÛQÌk¥#5ß»ŸæÛç–›oÈ˜°ÒâŠÈ%š.ôfÜCª9²\$„–ñ˜Õ?v'@Yms\$ˆÅ‘9öB\\ëZ’MbpR¬Ñ×ŠE×Å*ºI²<àéÿy\nF‘§>¤J9ed´@¹÷7ò:\\CØjo€Ş	Ñs]£ËMv•UY;qŸdúÉÃÍãËTbZJÊxD£Ã/b•@\$™Œr|ØÌ8g0ö\",K9°9ìÔ•áÈC'Eå‡YS²{e0›nféÍ•èÖZpeaË;‘Ú8'@\$š;¶²l…¬¨&úÀ]ŞØˆ²ÒãıÆĞàœ”9äy¨…Q¹ˆ¥SÀŞ–|'˜R¬“'	–M‰Ù„FXŸÀˆ°/Î}œØ²òññâ²òg/n6›p¸Ú±TÚbÃ¶1¶.²X´±{fvÌp…S­¸]¶¶˜tœÛ…O‚¦–Ü-âmrÌçÍ¸s‡G'VnZæÙŸ³Ofà\\å›Öÿã'œ&XV³Ab²ÍÃ™K¸8Y»pğäéÊ¬€Ç\0ÎièYĞ’|©èˆF.À;¾ór²ãêÎœ‚›52Pì‡9p°ŒåÁÍ‚e>¤= xu¼&›r9nÀ'XõR¥,™û&> \nŠ¹@t\n)UÊ”É,-·@QÜ<µ°\rÔãiØ\$*ÉQ±åhˆ–x©@!·[´ßMUå¦ú–Zr\n×rÉ0¥W‚ÍŒ˜¹3´<æ‚Ñ;§áÁ¹Èjs°Û¥ÖÉå @€/»Àl½\"*DdƒkAíğÔì)Ú=e¾H#_Ò–|¡oTcÖÑåšAt/šØao†	\në`èş\n¡ÚH‘aBËu£¹N*Qq?É­Ãv×6íğĞ«ÈÑUTàhƒ“+²@'¶y£iyÂ‹ûN\rİ>8Lu2é’@ë vl5Zs‘ÚÖÕ¿chK.¶oè…Èªl†©aÔÊ+Nm·ìRÚCµØñRÕ–ÅD6Ÿ,Ô·Ãµ! u»Kš›P²,Û7¶qu²â}µ‡QÖ§\0·Fµ>Öˆíª9,6©ŒÆÈr*ó¢ÕS„É“­XµÈ£¼ÚuÂ!˜ÛNm‰¬2Z±³}i6ÎE©¹,,8[‰¹›l]\$fÓ›Ï7 –¬íM7Ãµ”ó•¿£{PÍü¿ZÒµHÙ¶Æ«àæ¤¸ÚtcgÌKg§!œÜ2·‚xá0\\Ò ;\\bíu»DµÉ\"âÓœ‹»^.Í›LZw±‰ki¾%¯G–[Úzµ)jÒÖ„Ë–q-x¸Õ´(İm¾¤«4Ö°-+Z†±b×2Ï¨ÛNväPğsı#AŠ•§7–Ö¾(›Zø³µ\$¾É½„»_Ù[¸ÁyÜÙÅQÍ°\0¶@#¶@’Ï#úÑë—ûHí—¹aÙi°½³Yö,¬ÒÚL\0Wa…À-¥Á­èrÚU¶ua=çÕ¥–Æ\\S»òSùmÅ³^kL.ŒìoI´Ê×¹»á‚kM#'£øZm²š…RÚ„Ûl6m}ØÇB×kúÒÍ²© vŸÜêÚ´ÌôÚ¶»Q¦­¨ZŒ£­mÕ¿3›û-¶ìÔ¸µ.İ¡º­ˆ‰n¶-VÚ pPİòÚ…ªÅTv®[iÛU‘ın*ÕrëVãœ‹ZÌ·\$ÕM¹Fşö¯mÍ8<v]jÀ-¬G€Í·-d6Ô’k=Ìm¹kjê-’·w¶—nÛëJ<öé¤ZØ·_#úÖâ¤fí\ráíp83kİ£‘k\\£',/7ñT@æŞH5®Ëx2íw[Ëµ·kÂŞs§t–Ô,.7¢µìæÂHM¯ æ¶õí~»µ¶ùmªGõ°6Ëvõ, 9”·oanØ5B¶õ-ZK¶¹l2ße±VÔ-Pï±õnvÖ=±›z6Æíü[·ñl}Ö=‡w[vÔ-’H^wIlJ=°	jvm™<ô´‚ØÂA¤P	¶‘ÜæÈlBóo¶Ø]³ûX2ÜBÈ#´ú×RCe´+JRm*5Ü±ë âÒÅ·Ë‚V›YNwepU½µ{LöÖ­5[]´İm‚áz+lWd[d·¶V×å¶{{Î`.IZ¶ØãÛu¨;~-@\0DµaCe·öÀ6àn6˜·!n\n¸‹‰–§[9IHm¥qU¿U¸Kqn>íÉ9Ñ¸Á!?åÆv¹7î-¶)nùnq¼UœkP—[¥Û£k¡n–â…´GW­Õ\\m·Yp}Â¹\r–µ-Ù\\‚oEnÚãU»›[Öï-â¹ÀµÅeãm¼;\\íà-6¡Tk˜çù¼UÉ+‘¶º\\ÛÜ™·•qå´Â ëAò`Üj·«kÖâ¯{”îÛÄ[e´óqàıÊ»8vøî6Ûâ³‹n~â]Ë&ø—-ŸXa¡¸×JãT‘k‡.­ş7Š·üŞ*àƒgÖN.5\\·¤ŞâàE²–êË»¡wp¢…APvûŠ@%ºŒsçæÚ¤&Ä6nnp\0P\0¾áMÎ:À	 ntÜp¸%iºL…{*\rn¬]7@sXÛ‚ç¥‹&è<h{Ü'UIb!\nÈáÑMn€+\0Gtï­´#³‹më\0&û±4.qÓ=œÖÒ´İú6>Ì=ù•9ã¦Òzl¦Ø¢zÚQ‡-›fÏv(›Ó]ºHŞ­¹@ù–0¨º ±œÙÆÃUÏÇ\"’€_S¶`¡Q5Œ'f7:J<ïnStÊç›c§Ê”^ZÚy§tôs¨ÿ—P.š*Z/l!áÔûb­V¹¬\0œ¨~Ælö0®¨9°°yfŞêƒ×y\r“í3\0_>9ŞQ‚yï,ZàlÚ.rç½ÖÊ+î‹±º.¢´è:ßã§kö\\~6È´êì©Ím—D*7\\[jZuº™uùÅıÔËWWa\\8Æºsv1Ü%Ï‹ÎûòÙR»!tòìš7›w_¬z¼º»	cxÎuQÍ²\0!:5±Õj	P¨›‚àm )û»Pé9ÙÍ½‹µÖ™']­¸evÕØ¥Kµwm®×€YnEíÚ{¶’4XvZi0MbfÆñ.\\\rÃ¬s»ºÒ«)Ğ\\D*’C¬‚\\I»SvîÖ«{··p[o]Ö»qcÖîÕÜ6l>nã:\0m¼òÍTíÓfÍyÜeºŒ¸ëfCŒ«½*Ÿî	ÜÃ»äë¦ä#eÛ —z—¶<¶w²ïM£k –Ş[îÙ	t\\Şúìıà‹köão]˜o|ënğK“;Âƒ¯	7Á»d•Éáp±¬ÕÙ%U:…À8ŞöÆ\nyœŞZ1²Kw-ÖÍ Kr`.,€G¼5nBåµá«&@Ûß;ãb¦5±\rŒ•P®Î.ªZ«xÎˆ+•+p7_€Y;¡Òî®Ë-ãñta¯%8ÖtMy2É‹|x”lœ9»>óİĞSyFÍÖï,HW\0šM±¨³@'!S¼¸.mĞMÑÑJ®=İ˜¶¾èNë½ÖÍ÷šm@¹‡¸]hÕÍåÙ)	×=¯\rHN¼úÛJñã›vâ÷{®ú¹ş½«UOãÀ+¨îlo0\0So m%èW0àï(7¼“z2ï¢A“ÖY¢iÇ©¼Ô\0 C…Ùû×f(Ñ¹°ºnä¢âĞ†ÄÂ!¯T8Ç¼4ì¢æ!“¶Ä¬Ä€A·ê5æ¡˜«¥M“ZÛ»Ô\0¯\"fÔÓÂKO@E*·ìºBç­ˆ]éö!@ä†[S%·vIÉõ¤ k\\œ¹{Tp§ñĞSh·m¸okŞi»%z\"ómÚ;ÚÊ­­¸Á»Dç2÷£›ÃW¸.Å[³Dßu¸Å¼FÆh¨àÙBÂêµ†İ™´,\"Ù,Ö5ÊwÖìÆìõÙ†»n1îÁÚ¼±î¹İUî*&ÑÁë¼òn5q²ŠKÈRÛ­€P¹ØóÉEÌ5=êÛ‹¹20QrìÀ\0\nà¨Gùyµ|ï^ãËJ‘#]˜0MF=çˆ¶Şíñ\\e¹:ºÕ|Úî…›…E—‰€©ûu¦ÖŞÍÛŠuRÑêmÙß=pÇrÒú5ÀÖŞ·®ä;Ÿs`¨:Ï8´-9Û”7Øsüê¶êû –Ä—Aœù¶½hİr÷5éùw¹Û!lvÁsŞÓ\rÔ”÷†¤0ûyjß¸=©•M\røî~ßqq­}Á¹Æàêu@É\0A‰\"%=¹÷Á#Y›ƒÛœ½ã|A¾Uô‡xï¶º¾ØFÄ»rHŠ©o²¸Õ¼Áy@\\á˜À\nÎQïÍ:.wÆå«\\Fàö\\]ñŞSºLÜÀeÙöõño²_£¿XÃêì•ú·fàîÌ0ík¸…µÚèºàíĞ\\’Ñ\\¿wzQ²Ë÷6zn};¾ØİÑ\rû×BïÚö_o¹‡sıÊ…ÛM‡]i»ån¶ëe¯sŸç[/oOªª¿”…’şŸé×9ìÜ·U0åHÍÙù-º®Ì_ë¼4Ù­P˜ËCWQ¯ùÈW´5}âĞ-úËÓ÷ênÌ<t\\4x °åå¨@2¿)W\0¦,\0a¾o¾ß³\0¡ôp¥S¶RÕ\0Rt›ê)UàóĞŠI\nà-Lyc>œô¬kdÜìG€7c:/@a*Âf\$Ë)ƒPMcA<èÉ&ºçIÎ\0+:Vtì¨Òó¦*×š7:s€àéK_°rN1X¦8¹€ZÌlÄ9=ZÀ•«Äq€À!T8\0Ù`ª\nÉÙà„C\0002\0^Š³áâÑõ.…W“[…AÂøé®`i':›1¼ ¸ˆ€2VÀâ8D¶IĞ¡706\0007ÀõÃá¼ ğ;`\"T ü¡Q03ˆ†Á	—áËàU8\"p:àÁrør†	Lx%ğ4`šÁ‚sn	ìe™_`sÁE‚[&ŒøÎ_`~ÁO‚°p<á#”à‡ÁW‚Ğo~ìx°\\à“>‚+FZp8-ğ^VÁ‰ğàE=ø#0dà™Á‚W]uÆµ°``Ñ#ƒ;¦\r•Ô@àË,É]D¦\ràõÔpS`ÏÁ7ƒV¼•ÔpW`æÁ?ƒ¢²f*ê8\"0w`£ÁÇOD†*‹˜4ğ5`´¨¹ƒcîj÷>‡àáÁÕ‚2¢æ\\89À/Ô\\Àó„³%EÌ¸Bğwá\rÁc„ªÎLX=p`Ó•«!„k\r\\•V0~a\"ÀÍUc	\r¬\$ø'p`kª±„	n1Â8B°€à|ª±„?	º8ª¬`²Âs„Û¶\0ôß0áÁí…	.¬(0ğ¡aDÁ»…6Á>ÊXT©é`â¦gƒ+\n|%8C0«áOÂ‚3\n¾(Ø0káIÂXï\nŞZÇxW°±àk¬w…‹	®ÊÇxM0“`|¬w„ãnJÇxDğ¸–d¬w„ûÎjÇx=0ÀávÁñƒŠ›ü(Xbp´àöÃ…³èü18\\0ºárÂ§†.¢Šz8_0Êá~¨/†j ş¡½øh°³aj§‡†7%<<2gpÉSÃÃ)…+°*¼4X^0ÈÔ6Ã9†Ãõ<LKy0¬a_,É†ó\rF¼7˜jğÜ\0_Ãy†¿fÌ.˜qpŞa´ÃY†ó\r¾œ\"øP°Şa„Ã\"·“\n.zz8ip{aØÃƒ‚ÓÆL:C{0İá—Ã}‡ÎL3xyi˜aìÃ­‡>œ=@°î`Á7‡×Y¼l;øğ–a…ÁoFSxØrğ†ÆÃ‡Ş6v]X5ğ:b¦ûˆ5–î\\BÃ0™âf-ƒ§~ ìAX„pxà”Ä‡¼> ¼;-qáŠÄ3ˆG\nf\"|B‚q}Â£ˆ{F¼DXñbÄW†¡Î\"¼D‚ğÑâ0Ä)‡Ói™Œ4øDDáªÄˆ\"×\rv\$ptğñb¦‰*±^%7X±ÓocÂ\0ŒM8‰´ÌqâUÃ	‰bœ\r3zu1œÄ¡Z7>œL¸q12á¯ÄË‰7¥8\\Lø±Š\$ÄÏˆïˆ¡ìJ'q=âjÄó‰³Î&ìO8œ1ÓËÄ÷‰Óu5ÜOx1\nS•Ä¡M~(Q¸ ±Fâ„Ä]Sã~(ŒHV\0001GâŒÄ/Mó…G,T8Ÿ±\nSµÅCŠSş)lHTìqPâšÄ‹M/)ìEÔÌñ(UúÅkŠ“½6LV¸ª1YâªÄ‹Mï®*ìIÔ1Zâ²Ä…M‡…3Y8®1S?Å“Šó>+ìIÓ1dâÂÄ—LûN,lH«y1(S¡Å»‹39Ü[¸´1mâÒÄ—U“î-j«81b.¨A‰(Ş/7¸6Yu`]ÅåŠI˜°ˆl\\‚-DCbæ¨•‹Ëµ}Ü^X¶±~b#ÄBËv¬†œ^¸ŠqzcÄY‰PíY_tËê}âğÂ«Œ@ÌÅY`8{qŒ‰«!Œ™~#ÜEX¾q cÅùMÏ…Kœe8ÄéÀâşÄŸŒ›0JxÈñˆâVÆ`!÷–3Lc8š1›½¹ÅáMgş2ÊvøÏñ€âvÆ{Œ€of3œa¬Ãöc\nÆRÛ…3¬j8Ë*+ãQÄi?(¬fõ1xbÆoQ'î.cÕ?ñ®ã,§áw¾4Ê–•ÁI‡iÃé\\+>6¬\"`ñ¶‡AÆßOS®6°ÜØİ\"e\0fÃéT÷Î.Ìn8¾j#bğÅAŒß8ŒlX¿1ScˆÆYM766œ_(P1Ãc‚ÅëOO†+Lfø­±Íã‹©Ege>¼s8ä±ˆÓzÇ3[ECœ^±ÕâøÆ#V^/ìZ˜ÍéªâğÅ¹Œßö;ŒsØ±Ûc,¦‹Û&1šzØí±¾Ä”7¿ğŞüuÆf÷ãß‹š·F<|'xÌ÷ã¨f7¿.0f]X}1§c×Æ‰tî7üxøy1êcÇËDNLZØ}1ë3Ãé4¼}ØÉqcéÆQSV?ŒyØl±ücèkMÏ^3<~Xøq›\n°kv—¦\nI÷.¨½H¹upï {¡uv¦¤ ·\0—pãmÇÛ—Væ[ÅHN¿×q¨S6÷7o^šB¢Û‘¯3aÂw²ŒÈNØfÃ»€öş÷¤´·/Èh§Á®5Çé/®5]ù¾ŠŞ)ºK{ë‘-Ã­s\\¹²æÂäõí,‰.U¤·h\0æ¾å0Y!œMßr¹Lİ¯eÌà×d‰ßHálZæ\rÇ†ñW1d­\\Çl,èúçKq‹Ov©-	Ûênßr¦êô›+§² î°Gî¹Ui’Dƒë_ÓmVÚs¶šå{\"¯Œ‚&î9ã¾sl­VA)öŸË©üy…’0Avø6œò\rH§¾!’Y³ŞAû_]Z»\0“iA¶Õ§<…¶˜²d1ÈWkã%Bü…-±[	ä3µñÖğîH†·Ù.õä²l±îï…¬ì—*µ“’%¶CëZÒXr Ú&µğáÎÎe‹nù1îOÈ¶³£‘5°DöÇ¶¾-ydÔÈ¥\$6C¯\n0-„€Y·å}~FÌ_raÇú·ïlc'-ºF*NbUÛ\rµIuæˆfJ{¹49í¥Ø÷aò©»m¡+}* íõÛÑÈ‘êßÆGËÇÖş2HìÉ\n«&ÎÜÌ‘Vø‹:d%Á’:ÏşPL‚Ù-üd‘ñ|C(¾I›rNd#·ğKo%Qt-2ÛÈa©¶=½•9I²U€+ÈdŞòúå¿Œ–<\$´d´bn¯%İº»v7~­èäÅ½¥\$ÍåËxÎW-¨[4·£DV@’¬šWX-ìäS·âªß½~´;d4¶œ·é‘ƒ*–Q¹\"²Frvd¾·÷áÀvO)\$rÜ9—²=%xE,‚\rqP¼åiÉ¡!¢ö“«ÎNÀoÈŞª¹¹DBÌM˜Æ\rs-ë¼Ú9wÁÜî‹ç¶sÜùäÏ¢,Ü‚J\rÖ<–ÓìôH¢§ aË{uÇ.9Q²É9¿±f¦Ğ\rA·ıñ‡	zHöjjZWÆ`!û1p‘-êÏI‘C?^zLô‘ËÒI<l¤ñJá}2'¤ôceLËJXšâúÈ×ó½O¡\$Õ{dñ­'s*º0¢F=Ú\"Ó\\È6Ğ)&‹K}¡—Kn]•Ç{Ò\r~ªò´]Á•€Î\$¶†>·—qŸÆ\0pŠ\0„òî;7—´\0\\œ¼¹i^ÓËÊúK/,¯rm¹~e}K,\"Íù­Ÿ™-Àx%õË;”ó%µfsÅğSEjØâÜñ~P.^7ê¥¶ÁÕçÌ 0’\rÒ‰ÂQçAR/Ø1”Kİ\0c\0ºñùôC,°R`Å3æ)ÌBú'/î\0uoƒÄMÙ!ZÇæ\\ı<Æô©HËÌvCO1¨\0­ôÃ\$“\rd†wŞ\\çÂ¯zŸ÷½³òüç.a6Á¨\$bÃrË˜õ:10xJ±v	ææ[+'–§0²…¡¬ÓAXF¿U€«—8È²Ø²’á=mÀ6DØc± {39(Ì‚ğŞÊYñ×£v~S·Ağ}è÷\rŸÀa˜EbÒsŸë6\r\$Øfóa²ZzÎCO0ô\r/,	…ÍøøÎç–ŒK2Q÷h_0<(lĞB8åÁŒ¯;50:¶fvL!\nd}—3\$»ÓH1`é.¬ˆ}ÇšÏ5s''ßálaæ´„­™w5éÿ¼Ñ9°bŸf¸ƒ:„†`DLpˆäÒ\0fƒòª\r™¸9¨ËJtI)¶É <ÔPc3Q]*«™å©SY¸ŸgAÂ„½›‘‘âHˆ«stJ|Í•Jàfn,ØaÓÒOªÌz÷4foiH12à©âº4’Ü„ä|à\r(áéÏÍÅï8!m¥º¡Y2Ò‡*ÎĞu¶]iÍVL3‡g	z”XüR¬|ÀFƒnó¤·ƒ®Ó8érƒPÄşZÌÔù6êäìä€Àº=NÎMhM¦rè	áÔó“\0ßœÈãD¢ÌùÍeÓÎxuìİ\"ì¹ÒÀ¬Á¿¯&>X[Ó‰aÂe½O•ÿ,vX«HLêÒ3š >ÕÇrcy¹Ö¦ÿælÎ‡—,=K0ó°	´Éœ›4\\üÑ°¢‘¾MÍ&\rş`À:Ïh3Œm’öƒ4Â\rœ¾ÀÖéC´ÎT“4è!á•h¨e©eÅ‚›|°¾gë¹àıg…³ó)Ğ='´ÿ¢½fÏ\0»<vy9ùÀµ_ˆë2«<ÖÃ‰M¢_¿UÏ|S\"X=ùã3Ô>áÔß,xpàóÌÂŠ~‚³<›ôIe9î_¤Jû{A=ø×´\0s¢§ôw¯7(¬ø‹ş_gÊˆHVqËŒùĞygİ!&>fC¯ùsbK®ÿ™ç>éÛ)İ9öZÄLaQŸg0&|ìĞ¹lÅ*ÉàÎ÷)ÉóJ yH¨_¬!\n-lıT©Y£¹üóZçüÛ.RBtœı¯›3i5)Í²TÏ1F€8Ë)³ãØÓËyŸ@PCb9ÿ3¯gü…ÑQî‡ÉPêÑè\nÏàĞÖÌÚï÷ea[dVZ?ÀØiö‚€gÚ”Šê	©@ùså­ğæf*y›dÄŠU}Øş´òÖd¿Zrşè	',	Î„ÛâÛMhÉÚ|Nyk?m\n\0001‹¦À%¡PAşİ§l U\rNĞ®Š‹/5Ÿ“¶E†´1L1—í•.WêºO=è_ˆO¡L`\$ĞIÚ%äÄĞÖ‰dJ&h|„ŞŠ—Š0Š_ğ'ï¥ÿ€5Åxİ¸\nX¾1\$X™D L TÇØä*¯Ì¸'©¢M^\0 èšˆ(xãË ú\nI€/ \nş¹•8wäxcÓ±î\0¢Š”à)x!ËŠwX]\\\n-~¢æk ò@)½BÑp-?EĞ=š(\0‘è¯\nçF	àathÉ9LÎ~>*ÛÑ–Ú1š\nhÉfm†ÎŒ@lú\$èp€6?p\"À!QJªN€2Ô“ü¢^ñå¢U M_G´\0h_\0mìX,q5O¢ yZ™eaí´Õ(pèËêÑl");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF89a\0\0\0001îîî\0\0€™™™\0\0\0!ù\0\0\0,\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($s){$Jd=substr($s,-1);return
str_replace($Jd.$Jd,$Jd,substr($s,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($yf,$Gc=false){if(get_magic_quotes_gpc()){while(list($w,$X)=each($yf)){foreach($X
as$Ad=>$W){unset($yf[$w][$Ad]);if(is_array($W)){$yf[$w][stripslashes($Ad)]=$W;$yf[]=&$yf[$w][stripslashes($Ad)];}else$yf[$w][stripslashes($Ad)]=($Gc?$W:stripslashes($W));}}}}function
bracket_escape($s,$La=false){static$hh=array(':'=>':1',']'=>':2','['=>':3');return
strtr($s,($La?array_flip($hh):$hh));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Za,$Hd="",$Fe="",$db=""){$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Za?" checked":"").($Fe?' onclick="'.h($Fe).'"':'').">";return($Hd!=""||$db?"<label".($db?" class='$db'":"").">$J".h($Hd)."</label>":$J);}function
optionlist($Ke,$ig=null,$Ch=false){$J="";foreach($Ke
as$Ad=>$W){$Le=array($Ad=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Ad).'">';$Le=$W;}foreach($Le
as$w=>$X)$J.='<option'.($Ch||is_string($w)?' value="'.h($w).'"':'').(($Ch||is_string($w)?(string)$w:$X)===$ig?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Ke,$Y="",$Ee=true){if($Ee)return"<select name='".h($C)."'".(is_string($Ee)?' onchange="'.h($Ee).'"':"").">".optionlist($Ke,$Y)."</select>";$J="";foreach($Ke
as$w=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($w)."'".($w==$Y?" checked":"").">".h($X)."</label>";return$J;}function
select_input($Ha,$Ke,$Y="",$kf=""){return($Ke?"<select$Ha><option value=''>$kf".optionlist($Ke,$Y,true)."</select>":"<input$Ha value='".h($Y)."' placeholder='$kf'>");}function
confirm(){return" onclick=\"return confirm('".'Opravdu?'."');\"";}function
print_fieldset($r,$Od,$Nh=false,$Fe=""){echo"<fieldset><legend><a href='#fieldset-$r' onclick=\"".h($Fe)."return !toggle('fieldset-$r');\">$Od</a></legend><div id='fieldset-$r'".($Nh?"":" class='hidden'").">\n";}function
bold($Ta,$db=""){return($Ta?" class='active $db'":($db?" class='$db'":""));}function
odd($J=' class="odd"'){static$q=0;if(!$J)$q=-1;return($q++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($w,$X=null){static$Hc=true;if($Hc)echo"{";if($w!=""){echo($Hc?"":",")."\n\t\"".addcslashes($w,"\r\n\"\\/").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\/").'"':'undefined');$Hc=false;}else{echo"\n}\n";$Hc=true;}}function
ini_bool($qd){$X=ini_get($qd);return(preg_match('~^(on|true|yes)$~i',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$g;return$g->quote($P);}function
get_vals($H,$e=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$e];}return$J;}function
get_key_vals($H,$h=null,$Xg=0){global$g;if(!is_object($h))$h=$g;$J=array();$h->timeout=$Xg;$I=$h->query($H);$h->timeout=0;if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$l="<p class='error'>"){global$g;$pb=(is_object($h)?$h:$g);$J=array();$I=$pb->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$l&&defined("PAGE_HEADER"))echo$l.error()."\n";return$J;}function
unique_array($K,$u){foreach($u
as$t){if(preg_match("~PRIMARY|UNIQUE~",$t["type"])){$J=array();foreach($t["columns"]as$w){if(!isset($K[$w]))continue
2;$J[$w]=$K[$w];}return$J;}}}function
where($Z,$n=array()){global$v;$J=array();$Rc='(^[\w\(]+('.str_replace("_",".*",preg_quote(idf_escape("_"))).')?\)+$)';foreach((array)$Z["where"]as$w=>$X){$w=bracket_escape($w,1);$e=(preg_match($Rc,$w)?$w:idf_escape($w));$J[]=$e.(($v=="sql"&&preg_match('~^[0-9]*\\.[0-9]*$~',$X))||$v=="mssql"?" LIKE ".q(addcslashes($X,"%_\\")):" = ".unconvert_field($n[$w],q($X)));if($v=="sql"&&preg_match("~[^ -@]~",$X))$J[]="$e = ".q($X)." COLLATE utf8_bin";}foreach((array)$Z["null"]as$w)$J[]=(preg_match($Rc,$w)?$w:idf_escape($w))." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$n=array()){parse_str($X,$Ya);remove_slashes(array(&$Ya));return
where($Ya,$n);}function
where_link($q,$e,$Y,$Ge="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($e)."&where%5B$q%5D%5Bop%5D=".urlencode(($Y!==null?$Ge:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($Y);}function
convert_fields($f,$n,$M=array()){$J="";foreach($f
as$w=>$X){if($M&&!in_array(idf_escape($w),$M))continue;$Ea=convert_field($n[$w]);if($Ea)$J.=", $Ea AS ".idf_escape($w);}return$J;}function
cookie($C,$Y,$Qd=2592000){global$ba;$F=array($C,(preg_match("~\n~",$Y)?"":$Y),($Qd?time()+$Qd:0),preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;return
call_user_func_array('setcookie',$F);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($w){return$_SESSION[$w][DRIVER][SERVER][$_GET["username"]];}function
set_session($w,$X){$_SESSION[$w][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($Jh,$N,$V,$k=null){global$Tb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Tb))."|username|".($k!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($Jh!="server"||$N!=""?urlencode($Jh)."=".urlencode($N)."&":"")."username=".urlencode($V).($k!=""?"&db=".urlencode($k):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$B=null){if($B!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($_!==null?$_:$_SERVER["REQUEST_URI"]))][]=$B;}if($_!==null){if($_=="")$_=".";header("Location: $_");exit;}}function
query_redirect($H,$_,$B,$Hf=true,$tc=true,$Ac=false){global$g,$l,$b;$Wg="";if($tc){$wg=microtime(true);$Ac=!$g->query($H);$Wg="; -- ".format_time($wg,microtime(true));}$ug="";if($H)$ug=$b->messageQuery($H.$Wg);if($Ac){$l=error().$ug;return
false;}if($Hf)redirect($_,$B.$ug);return
true;}function
queries($H=null){global$g;static$Bf=array();if($H===null)return
implode("\n",$Bf);$wg=microtime(true);$J=$g->query($H);$Bf[]=(preg_match('~;$~',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H)."; -- ".format_time($wg,microtime(true));return$J;}function
apply_queries($H,$S,$oc='table'){foreach($S
as$Q){if(!queries("$H ".$oc($Q)))return
false;}return
true;}function
queries_redirect($_,$B,$Hf){return
query_redirect(queries(),$_,$B,$Hf,false,!$Hf);}function
format_time($wg,$ic){return
sprintf('%.3f s',max(0,$ic-$wg));}function
remove_from_uri($Ye=""){return
substr(preg_replace("~(?<=[?&])($Ye".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$_b){return" ".($E==$_b?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E".($_GET["next"]?"&next=".urlencode($_GET["next"]):""):"")).'">'.($E+1)."</a>");}function
get_file($w,$Gb=false){$Ec=$_FILES[$w];if(!$Ec)return
null;foreach($Ec
as$w=>$X)$Ec[$w]=(array)$X;$J='';foreach($Ec["error"]as$w=>$l){if($l)return$l;$C=$Ec["name"][$w];$eh=$Ec["tmp_name"][$w];$rb=file_get_contents($Gb&&preg_match('~\\.gz$~',$C)?"compress.zlib://$eh":$eh);if($Gb){$wg=substr($rb,0,3);if(function_exists("iconv")&&preg_match("~^\xFE\xFF|^\xFF\xFE~",$wg,$Nf))$rb=iconv("utf-16","utf-8",$rb);elseif($wg=="\xEF\xBB\xBF")$rb=substr($rb,3);$J.=$rb."\n\n";}else$J.=$rb;}return$J;}function
upload_error($l){$ce=($l==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($l?'NepodaÅ™ilo se nahrÃ¡t soubor.'.($ce?" ".sprintf('MaximÃ¡lnÃ­ povolenÃ¡ velikost souboru je %sB.',$ce):""):'Soubor neexistuje.');}function
repeat_pattern($if,$x){return
str_repeat("$if{0,65535}",$x/65535)."$if{0,".($x%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$x=80,$Cg=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$x).")($)?)u",$P,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$x).")($)?)",$P,$A);return
h($A[1]).$Cg.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($yf,$jd=array()){while(list($w,$X)=each($yf)){if(is_array($X)){foreach($X
as$Ad=>$W)$yf[$w."[$Ad]"]=$W;}elseif(!in_array($w,$jd))echo'<input type="hidden" name="'.h($w).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
table_status1($Q,$Bc=false){$J=table_status($Q,$Bc);return($J?$J:array("Name"=>$Q));}function
column_foreign_keys($Q){global$b;$J=array();foreach($b->foreignKeys($Q)as$o){foreach($o["source"]as$X)$J[$X][]=$o;}return$J;}function
enum_input($U,$Ha,$m,$Y,$hc=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$Xd);$J=($hc!==null?"<label><input type='$U'$Ha value='$hc'".((is_array($Y)?in_array($hc,$Y):$Y===0)?" checked":"")."><i>".'prÃ¡zdnÃ©'."</i></label>":"");foreach($Xd[1]as$q=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?$Y==$q+1:(is_array($Y)?in_array($q+1,$Y):$Y===$X));$J.=" <label><input type='$U'$Ha value='".($q+1)."'".($Za?' checked':'').'>'.h($b->editVal($X,$m)).'</label>';}return$J;}function
input($m,$Y,$p){global$g,$rh,$b,$v;$C=h(bracket_escape($m["field"]));echo"<td class='function'>";if(is_array($Y)&&!$p){$Ca=array($Y);if(version_compare(PHP_VERSION,5.4)>=0)$Ca[]=JSON_PRETTY_PRINT;$Y=call_user_func_array('json_encode',$Ca);$p="json";}$Qf=($v=="mssql"&&$m["auto_increment"]);if($Qf&&!$_POST["save"])$p=null;$Sc=(isset($_GET["select"])||$Qf?array("orig"=>'pÅ¯vodnÃ­'):array())+$b->editFunctions($m);$Ha=" name='fields[$C]'";if($m["type"]=="enum")echo
nbsp($Sc[""])."<td>".$b->editInput($_GET["edit"],$m,$Ha,$Y);else{$Hc=0;foreach($Sc
as$w=>$X){if($w===""||!$X)break;$Hc++;}$Ee=($Hc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($m["field"])))."]']; if ($Hc > f.selectedIndex) f.selectedIndex = $Hc;\" onkeyup='keyupChange.call(this);'":"");$Ha.=$Ee;$ad=(in_array($p,$Sc)||isset($Sc[$p]));echo(count($Sc)>1?"<select name='function[$C]' onchange='functionChange(this);'".on_help("getTarget(event).value.replace(/^SQL\$/, '')",1).">".optionlist($Sc,$p===null||$ad?$p:"")."</select>":nbsp(reset($Sc))).'<td>';$sd=$b->editInput($_GET["edit"],$m,$Ha,$Y);if($sd!="")echo$sd;elseif($m["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$m["length"],$Xd);foreach($Xd[1]as$q=>$X){$X=stripcslashes(str_replace("''","'",$X));$Za=(is_int($Y)?($Y>>$q)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$q]' value='".(1<<$q)."'".($Za?' checked':'')."$Ee>".h($b->editVal($X,$m)).'</label>';}}elseif(preg_match('~blob|bytea|raw|file~',$m["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Ee>";elseif(($Ug=preg_match('~text|lob~',$m["type"]))||preg_match("~\n~",$Y)){if($Ug&&$v!="sqlite")$Ha.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$Ha.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$Ha>".h($Y).'</textarea>';}elseif($p=="json")echo"<textarea$Ha cols='50' rows='12' class='jush-js'>".h($Y).'</textarea>';else{$ee=(!preg_match('~int~',$m["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$m["length"],$A)?((preg_match("~binary~",$m["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$m["unsigned"]?1:0)):($rh[$m["type"]]?$rh[$m["type"]]+($m["unsigned"]?0:1):0));if($v=='sql'&&$g->server_info>=5.6&&preg_match('~time~',$m["type"]))$ee+=7;echo"<input".((!$ad||$p==="")&&preg_match('~(?<!o)int~',$m["type"])?" type='number'":"")." value='".h($Y)."'".($ee?" maxlength='$ee'":"").(preg_match('~char|binary~',$m["type"])&&$ee>20?" size='40'":"")."$Ha>";}}}function
process_input($m){global$b;$s=bracket_escape($m["field"]);$p=$_POST["function"][$s];$Y=$_POST["fields"][$s];if($m["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($m["auto_increment"]&&$Y=="")return
null;if($p=="orig")return($m["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($m["field"]):false);if($p=="NULL")return"NULL";if($m["type"]=="set")return
array_sum((array)$Y);if($p=="json"){$p="";$Y=json_decode($Y,true);if(!is_array($Y))return
false;return$Y;}if(preg_match('~blob|bytea|raw|file~',$m["type"])&&ini_bool("file_uploads")){$Ec=get_file("fields-$s");if(!is_string($Ec))return
false;return
q($Ec);}return$b->processInput($m,$Y,$p);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Nc=false;foreach(table_status('',true)as$Q=>$R){$C=$b->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Nc){echo"<ul>\n";$Nc=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Nc?"</ul>":"<p class='message'>".'Å½Ã¡dnÃ© tabulky.')."\n";}function
dump_headers($hd,$ne=false){global$b;$J=$b->dumpHeaders($hd,$ne);$We=$_POST["output"];if($We!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($hd).".$J".($We!="file"&&!preg_match('~[^0-9a-z]~',$We)?".$We":""));session_write_close();ob_flush();flush();return$J;}function
dump_csv($K){foreach($K
as$w=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$w]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($p,$e){return($p?($p=="unixepoch"?"DATETIME($e, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$e)"):$e);}function
password_file($xb){$Ob=ini_get("upload_tmp_dir");if(!$Ob){if(function_exists('sys_get_temp_dir'))$Ob=sys_get_temp_dir();else{$Fc=@tempnam("","");if(!$Fc)return
false;$Ob=dirname($Fc);unlink($Fc);}}$Fc="$Ob/adminer.key";$J=@file_get_contents($Fc);if($J||!$xb)return$J;$Pc=@fopen($Fc,"w");if($Pc){$J=rand_string();fwrite($Pc,$J);fclose($Pc);}return$J;}function
rand_string(){return
md5(uniqid(mt_rand(),true));}function
select_value($X,$z,$m,$Vg){global$b,$ba;if(is_array($X)){$J="";foreach($X
as$Ad=>$W)$J.="<tr>".($X!=array_values($X)?"<th>".h($Ad):"")."<td>".select_value($W,$z,$m,$Vg);return"<table cellspacing='0'>$J</table>";}if(!$z)$z=$b->selectLink($X,$m);if($z===null){if(is_mail($X))$z="mailto:$X";if($_f=is_url($X))$z=($_f=="http"&&$ba?$X:"$_f://www.adminer.org/redirect/?url=".urlencode($X));}$J=$b->editVal($X,$m);if($J!==null){if($J==="")$J="&nbsp;";elseif($Vg!=""&&is_shortable($m)&&is_utf8($J))$J=shorten_utf8($J,max(0,+$Vg));else$J=h($J);}return$b->selectVal($J,$z,$m,$X);}function
is_mail($ec){$Fa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$if="$Fa+(\\.$Fa+)*@($Rb?\\.)+$Rb";return
is_string($ec)&&preg_match("(^$if(,\\s*$if)*\$)i",$ec);}function
is_url($P){$Rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Rb?\\.)+$Rb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$A)?strtolower($A[1]):"");}function
is_shortable($m){return
preg_match('~char|text|lob|geometry|point|linestring|polygon|string~',$m["type"]);}function
count_rows($Q,$Z,$vd,$Vc){global$v;$H=" FROM ".table($Q).($Z?" WHERE ".implode(" AND ",$Z):"");return($vd&&($v=="sql"||count($Vc)==1)?"SELECT COUNT(DISTINCT ".implode(", ",$Vc).")$H":"SELECT COUNT(*)".($vd?" FROM (SELECT 1$H$Wc) x":$H));}function
slow_query($H){global$b,$T;$k=$b->database();$Xg=$b->queryTimeout();if(support("kill")&&is_object($h=connect())&&($k==""||$h->select_db($k))){$Fd=$h->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$T,'&kill=',$Fd,'\');
}, ',1000*$Xg,');
</script>
';}else$h=null;ob_flush();flush();$J=@get_key_vals($H,$h,$Xg);if($h){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
get_token(){$Ef=rand(1,1e6);return($Ef^$_SESSION["token"]).":$Ef";}function
verify_token(){list($T,$Ef)=explode(":",$_POST["token"]);return($Ef^$_SESSION["token"])==$T;}function
lzw_decompress($Pa){$Nb=256;$Qa=8;$fb=array();$Sf=0;$Tf=0;for($q=0;$q<strlen($Pa);$q++){$Sf=($Sf<<8)+ord($Pa[$q]);$Tf+=8;if($Tf>=$Qa){$Tf-=$Qa;$fb[]=$Sf>>$Tf;$Sf&=(1<<$Tf)-1;$Nb++;if($Nb>>$Qa)$Qa++;}}$Mb=range("\0","\xFF");$J="";foreach($fb
as$q=>$eb){$dc=$Mb[$eb];if(!isset($dc))$dc=$Rh.$Rh[0];$J.=$dc;if($q)$Mb[]=$Rh.$dc[0];$Rh=$dc;}return$J;}function
on_help($kb,$pg=0){return" onmouseover='helpMouseover(this, event, ".h($kb).", $pg);' onmouseout='helpMouseout(this, event);'";}global$b,$g,$Tb,$bc,$lc,$l,$Sc,$Xc,$ba,$rd,$v,$ca,$Id,$De,$jf,$_g,$bd,$T,$jh,$rh,$yh,$ia;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);session_cache_limiter("");if(!defined("SID")){session_name("adminer_sid");$F=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$F[]=true;call_user_func_array('session_set_cookie_params',$F);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Gc);if(get_magic_quotes_runtime())set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'cs';}function
lang($ih,$we=null){if(is_array($ih)){$mf=($we==1?0:($we&&$we<5?1:2));$ih=$ih[$mf];}$ih=str_replace("%d","%s",$ih);$we=number_format($we,0,".",' ');return
sprintf($ih,$we);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$errno,$error;function
__construct(){global$b;$mf=array_search("SQL",$b->operators);if($mf!==false)unset($b->operators[$mf]);}function
dsn($Yb,$V,$G){try{parent::__construct($Yb,$V,$G);}catch(Exception$qc){auth_error($qc);exit;}$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$sh=false){$I=parent::query($H);$this->error="";if(!$I){list(,$this->errno,$this->error)=$this->errorInfo();return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I){$I=$this->_result;if(!$I)return
false;}if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){if(!$this->_result)return
false;$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$m=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$m];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$Tb=array();class
Min_SQL{var$_conn;function
Min_SQL($g){$this->_conn=$g;}function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){global$b,$v;$vd=(count($Vc)<count($M));$H=$b->selectQueryBuild($M,$Z,$Vc,$Me,$y,$E);if(!$H)$H="SELECT".limit(($_GET["page"]!="last"&&+$y&&$Vc&&$vd&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").implode(", ",$M)."\nFROM ".table($Q),($Z?"\nWHERE ".implode(" AND ",$Z):"").($Vc&&$vd?"\nGROUP BY ".implode(", ",$Vc):"").($Me?"\nORDER BY ".implode(", ",$Me):""),($y!=""?+$y:null),($E?$y*$E:0),"\n");if($uf)echo$b->selectQuery($H);return$this->_conn->query($H);}function
delete($Q,$Cf,$y=0){$H="FROM ".table($Q);return
queries("DELETE".($y?limit1($H,$Cf):" $H$Cf"));}function
update($Q,$O,$Cf,$y=0,$kg="\n"){$Hh=array();foreach($O
as$w=>$X)$Hh[]="$w = $X";$H=table($Q)." SET$kg".implode(",$kg",$Hh);return
queries("UPDATE".($y?limit1($H,$Cf):" $H$Cf"));}function
insert($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":" DEFAULT VALUES"));}function
insertUpdate($Q,$L,$sf){return
false;}function
begin(){return
queries("BEGIN");}function
commit(){return
queries("COMMIT");}function
rollback(){return
queries("ROLLBACK");}}$Tb["sqlite"]="SQLite 3";$Tb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$pf=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(class_exists(isset($_GET["sqlite"])?"SQLite3":"SQLiteDatabase")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$errno,$error,$_link;function
Min_SQLite($Fc){$this->_link=new
SQLite3($Fc);$Kh=$this->_link->version();$this->server_info=$Kh["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->errno=$this->_link->lastErrorCode();$this->error=$this->_link->lastErrorMsg();return
false;}elseif($I->numColumns())return
new
Min_Result($I);$this->affected_rows=$this->_link->changes();return
true;}function
quote($P){return(is_utf8($P)?"'".$this->_link->escapeString($P)."'":"x'".reset(unpack('H*',$P))."'");}function
store_result(){return$this->_result;}function
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetchArray();return$K[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$e=$this->_offset++;$U=$this->_result->columnType($e);return(object)array("name"=>$this->_result->columnName($e),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Fc){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Fc);}function
query($H,$sh=false){$ke=($sh?"unbufferedQuery":"query");$I=@$this->_link->$ke($H,SQLITE_BOTH,$l);$this->error="";if(!$I){$this->error=$l;return
false;}elseif($I===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($I);}function
quote($P){return"'".sqlite_escape_string($P)."'";}function
store_result(){return$this->_result;}function
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->_result->fetch();return$K[$m];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;if(method_exists($I,'numRows'))$this->num_rows=$I->numRows();}function
fetch_assoc(){$K=$this->_result->fetch(SQLITE_ASSOC);if(!$K)return
false;$J=array();foreach($K
as$w=>$X)$J[($w[0]=='"'?idf_unescape($w):$w)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$if='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($if\\.)?$if\$~",$C,$A)){$Q=($A[3]!=""?$A[3]:idf_unescape($A[2]));$C=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Fc){$this->dsn(DRIVER.":$Fc","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Fc){if(is_readable($Fc)&&$this->query("ATTACH ".$this->quote(preg_match("~(^[/\\\\]|:)~",$Fc)?$Fc:dirname($_SERVER["SCRIPT_FILENAME"])."/$Fc")." AS a")){$this->Min_SQLite($Fc);return
true;}return
false;}function
multi_query($H){return$this->_result=$this->query($H);}function
next_result(){return
false;}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){$Hh=array();foreach($L
as$O)$Hh[]="(".implode(", ",$O).")";return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys(reset($L))).") VALUES\n".implode(",\n",$Hh));}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($H,$Z,1):" $H$Z");}function
db_collation($k,$ib){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($j){return
array();}function
table_status($C=""){global$g;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){$K["Oid"]=1;$K["Auto_increment"]="";$K["Rows"]=$g->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){global$g;$J=array();$sf="";foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$C=$K["name"];$U=strtolower($K["type"]);$Hb=$K["dflt_value"];$J[$C]=array("field"=>$C,"type"=>(preg_match('~int~i',$U)?"integer":(preg_match('~char|clob|text~i',$U)?"text":(preg_match('~blob~i',$U)?"blob":(preg_match('~real|floa|doub~i',$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(preg_match("~'(.*)'~",$Hb,$A)?str_replace("''","'",$A[1]):($Hb=="NULL"?null:$Hb)),"null"=>!$K["notnull"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);if($K["pk"]){if($sf!="")$J[$sf]["auto_increment"]=false;elseif(preg_match('~^integer$~i',$U))$J[$C]["auto_increment"]=true;$sf=$C;}}$ug=$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));preg_match_all('~(("[^"]*+")+|[a-z0-9_]+)\s+text\s+COLLATE\s+(\'[^\']+\'|\S+)~i',$ug,$Xd,PREG_SET_ORDER);foreach($Xd
as$A){$C=str_replace('""','"',preg_replace('~^"|"$~','',$A[1]));if($J[$C])$J[$C]["collation"]=trim($A[3],"'");}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$ug=$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));if(preg_match('~\bPRIMARY\s+KEY\s*\((([^)"]+|"[^"]*")++)~i',$ug,$A)){$J[""]=array("type"=>"PRIMARY","columns"=>array(),"lengths"=>array(),"descs"=>array());preg_match_all('~((("[^"]*+")+)|(\S+))(\s+(ASC|DESC))?(,\s*|$)~i',$A[1],$Xd,PREG_SET_ORDER);foreach($Xd
as$A){$J[""]["columns"][]=idf_unescape($A[2]).$A[4];$J[""]["descs"][]=(preg_match('~DESC~i',$A[5])?'1':null);}}if(!$J){foreach(fields($Q)as$C=>$m){if($m["primary"])$J[""]=array("type"=>"PRIMARY","columns"=>array($C),"lengths"=>array(),"descs"=>array(null));}}$vg=get_key_vals("SELECT name, sql FROM sqlite_master WHERE type = 'index' AND tbl_name = ".q($Q),$h);foreach(get_rows("PRAGMA index_list(".table($Q).")",$h)as$K){$C=$K["name"];if(!preg_match("~^sqlite_~",$C)){$J[$C]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$C]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($C).")",$h)as$ag)$J[$C]["columns"][]=$ag["name"];$J[$C]["descs"]=array();if(preg_match('~^CREATE( UNIQUE)? INDEX '.preg_quote(idf_escape($C).' ON '.idf_escape($Q),'~').' \((.*)\)$~i',$vg[$C],$Nf)){preg_match_all('/("[^"]*+")+( DESC)?/',$Nf[2],$Xd);foreach($Xd[2]as$X)$J[$C]["descs"][]=($X?'1':null);}}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$o=&$J[$K["id"]];if(!$o)$o=$K;$o["source"][]=$K["from"];$o["target"][]=$K["to"];}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
check_sqlite_name($C){global$g;$_c="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($_c)\$~",$C)){$g->error=sprintf('ProsÃ­m pouÅ¾ijte jednu z koncovek %s.',str_replace("|",", ",$_c));return
false;}return
true;}function
create_database($k,$d){global$g;if(file_exists($k)){$g->error='Soubor existuje.';return
false;}if(!check_sqlite_name($k))return
false;try{$z=new
Min_SQLite($k);}catch(Exception$qc){$g->error=$qc->getMessage();return
false;}$z->query('PRAGMA encoding = "UTF-8"');$z->query('CREATE TABLE adminer (i)');$z->query('DROP TABLE adminer');return
true;}function
drop_databases($j){global$g;$g->Min_SQLite(":memory:");foreach($j
as$k){if(!@unlink($k)){$g->error='Soubor existuje.';return
false;}}return
true;}function
rename_database($C,$d){global$g;if(!check_sqlite_name($C))return
false;$g->Min_SQLite(":memory:");$g->error='Soubor existuje.';return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$Bh=($Q==""||$Jc);foreach($n
as$m){if($m[0]!=""||!$m[1]||$m[2]){$Bh=true;break;}}$c=array();$Ue=array();foreach($n
as$m){if($m[1]){$c[]=($Bh?$m[1]:"ADD ".implode($m[1]));if($m[0]!="")$Ue[$m[0]]=$m[1][0];}}if(!$Bh){foreach($c
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}elseif(!recreate_table($Q,$C,$c,$Ue,$Jc))return
false;if($Ja)queries("UPDATE sqlite_sequence SET seq = $Ja WHERE name = ".q($C));return
true;}function
recreate_table($Q,$C,$n,$Ue,$Jc,$u=array()){queries("BEGIN");if($Q!=""){if(!$n){foreach(fields($Q)as$w=>$m){$n[]=process_field($m,$m);$Ue[$w]=idf_escape($w);}}$tf=false;foreach($n
as$w=>$m){if($m[6])$tf=true;$n[$w]="  ".implode($m);}$Wb=array();foreach($u
as$w=>$X){if($X[2]=="DROP"){$Wb[$X[1]]=true;unset($u[$w]);}}foreach(indexes($Q)as$Dd=>$t){$f=array();foreach($t["columns"]as$w=>$e){if(!$Ue[$e])continue
2;$f[]=$Ue[$e].($t["descs"][$w]?" DESC":"");}$f="(".implode(", ",$f).")";if(!$Wb[$Dd]){if($t["type"]!="PRIMARY"||!$tf)$u[]=array($t["type"],$Dd,$f);}}foreach($u
as$w=>$X){if($X[0]=="PRIMARY"){unset($u[$w]);$Jc[]="  PRIMARY KEY $X[2]";}}foreach(foreign_keys($Q)as$Dd=>$o){foreach($o["source"]as$w=>$e){if(!$Ue[$e])continue
2;$o["source"][$w]=idf_unescape($Ue[$e]);}if(!isset($Jc[" $Dd"]))$Jc[]=" ".format_foreign_key($o);}}$n=array_merge($n,array_filter($Jc));if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$n)."\n)"))return
false;if($Q!=""){if($Ue&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$Ue).") SELECT ".implode(", ",array_map('idf_escape',array_keys($Ue)))." FROM ".table($Q)))return
false;$oh=array();foreach(triggers($Q)as$mh=>$Yg){$kh=trigger($mh);$oh[]="CREATE TRIGGER ".idf_escape($mh)." ".implode(" ",$Yg)." ON ".table($C)."\n$kh[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$u))return
false;foreach($oh
as$kh){if(!queries($kh))return
false;}queries("COMMIT");}return
true;}function
index_sql($Q,$U,$C,$f){return"CREATE $U ".($U!="INDEX"?"INDEX ":"").idf_escape($C!=""?$C:uniqid($Q."_"))." ON ".table($Q)." $f";}function
alter_indexes($Q,$c){foreach($c
as$sf){if($sf[0]=="PRIMARY")return
recreate_table($Q,$Q,array(),array(),array(),$c);}foreach(array_reverse($c)as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):index_sql($Q,$X[0],$X[1],$X[2])))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($Mh){return
apply_queries("DROP VIEW",$Mh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$Mh,$Pg){return
false;}function
trigger($C){global$g;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(BEFORE|AFTER|INSTEAD\\s+OF)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE type = 'trigger' AND name = ".q($C)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$C,"Statement"=>$A[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$A);$J[$K["name"]]=array($A[1],$A[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($eg){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SELECT sql FROM sqlite_master WHERE type IN ('table', 'view') AND name = ".q($Q));foreach(indexes($Q)as$C=>$t){if($C=='')continue;$J.=";\n\n".index_sql($Q,$t['type'],$C,"(".implode(", ",array_map('idf_escape',$t['columns'])).")");}return$J;}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($Cb){}function
trigger_sql($Q,$Ag){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$g;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$w)$J[$w]=$g->result("PRAGMA $w");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Je){list($w,$X)=explode("=",$Je,2);$J[$w]=$X;}return$J;}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(columns|database|drop_col|dump|indexes|move_col|sql|status|table|trigger|variables|view|view_trigger)$~',$Cc);}$v="sqlite";$rh=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$_g=array_keys($rh);$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","SQL");$Sc=array("hex","length","lower","round","unixepoch","upper");$Xc=array("avg","count","count distinct","group_concat","max","min","sum");$bc=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Tb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$pf=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($mc,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
connect($N,$V,$G){global$b;$k=$b->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$k!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Kh=pg_version($this->_link);$this->server_info=$Kh["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($Cb){global$b;if($Cb==$b->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($Cb,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$sh=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($I)){$this->affected_rows=pg_affected_rows($I);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$m=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
pg_fetch_result($I->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=pg_num_rows($I);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;if(function_exists('pg_field_table'))$J->orgtable=pg_field_table($this->_result,$e);$J->name=pg_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=pg_field_type($this->_result,$e);$J->charsetnr=($J->type=="bytea"?63:0);return$J;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($N,$V,$G){global$b;$k=$b->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($k!=""?addcslashes($k,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($Cb){global$b;return($b->database()==$Cb);}function
close(){}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){global$g;foreach($L
as$O){$zh=array();$Z=array();foreach($O
as$w=>$X){$zh[]="$w = $X";if(isset($sf[idf_unescape($w)]))$Z[]="$w = $X";}if(!(($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$zh)." WHERE ".implode(" AND ",$Z))&&$g->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")")))return
false;}return
true;}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){if($g->server_info>=9)$g->query("SET application_name = 'Adminer'");return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$ib){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids::int AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
".($C!=""?"AND relname = ".q($C):"ORDER BY relname"))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();$Aa=array('timestamp without time zone'=>'timestamp','timestamp with time zone'=>'timestamptz',);foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull::int, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($Q)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$K){preg_match('~([^([]+)(\((.*)\))?((\[[0-9]*])*)$~',$K["full_type"],$A);list(,$U,$x,$K["length"],$Da)=$A;$K["length"].=$Da;$K["type"]=($Aa[$U]?$Aa[$U]:$U);$K["full_type"]=$K["type"].$x.$Da;$K["null"]=!$K["attnotnull"];$K["auto_increment"]=preg_match('~^nextval\\(~i',$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~(.+)::[^)]+(.*)~',$K["default"],$A))$K["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]).$A[2];$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$Ig=$h->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$f=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ig AND attnum > 0",$h);foreach(get_rows("SELECT relname, indisunique::int, indisprimary::int, indkey, indoption FROM pg_index i, pg_class ci WHERE i.indrelid = $Ig AND ci.oid = i.indexrelid",$h)as$K){$Of=$K["relname"];$J[$Of]["type"]=($K["indisprimary"]?"PRIMARY":($K["indisunique"]?"UNIQUE":"INDEX"));$J[$Of]["columns"]=array();foreach(explode(" ",$K["indkey"])as$nd)$J[$Of]["columns"][]=$f[$nd];$J[$Of]["descs"]=array();foreach(explode(" ",$K["indoption"])as$od)$J[$Of]["descs"][]=($od&1?'1':null);$J[$Of]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$De;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$A)){$K['source']=array_map('trim',explode(',',$A[1]));if(preg_match('~^(("([^"]|"")+"|[^"]+)\.)?"?("([^"]|"")+"|[^"]+)$~',$A[2],$Wd)){$K['ns']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Wd[2]));$K['table']=str_replace('""','"',preg_replace('~^"(.+)"$~','\1',$Wd[4]));}$K['target']=array_map('trim',explode(',',$A[3]));$K['on_delete']=(preg_match("~ON DELETE ($De)~",$A[4],$Wd)?$Wd[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($De)~",$A[4],$Wd)?$Wd[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($k){return($k=="information_schema");}function
error(){global$g;$J=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$A))$J=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($J);}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).($d?" ENCODING ".idf_escape($d):""));}function
drop_databases($j){global$g;$g->close();return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=array();$Bf=array();foreach($n
as$m){$e=idf_escape($m[0]);$X=$m[1];if(!$X)$c[]="DROP $e";else{$Gh=$X[5];unset($X[5]);if(isset($X[6])&&$m[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($m[0]=="")$c[]=($Q!=""?"ADD ":"  ").implode($X);else{if($e!=$X[0])$Bf[]="ALTER TABLE ".table($Q)." RENAME $e TO $X[0]";$c[]="ALTER $e TYPE$X[1]";if(!$X[6]){$c[]="ALTER $e ".($X[3]?"SET$X[3]":"DROP DEFAULT");$c[]="ALTER $e ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($m[0]!=""||$Gh!="")$Bf[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Gh!=""?substr($Gh,9):"''");}}$c=array_merge($c,$Jc);if($Q=="")array_unshift($Bf,"CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");elseif($c)array_unshift($Bf,"ALTER TABLE ".table($Q)."\n".implode(",\n",$c));if($Q!=""&&$Q!=$C)$Bf[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$mb!="")$Bf[]="COMMENT ON TABLE ".table($C)." IS ".q($mb);if($Ja!=""){}foreach($Bf
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$c){$xb=array();$Ub=array();$Bf=array();foreach($c
as$X){if($X[0]!="INDEX")$xb[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD".($X[1]!=""?" CONSTRAINT ".idf_escape($X[1]):"")." $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$Ub[]=idf_escape($X[1]);else$Bf[]="CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]";}if($xb)array_unshift($Bf,"ALTER TABLE ".table($Q).implode(",",$xb));if($Ub)array_unshift($Bf,"DROP INDEX ".implode(", ",$Ub));foreach($Bf
as$H){if(!queries($H))return
false;}return
true;}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($Pg)))return
false;}foreach($Mh
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($Pg)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$L=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
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
last_id(){return
0;}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($R,$Z){global$g;if(preg_match("~ rows=([0-9]+)~",$g->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$Nf))return$Nf[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($dg){global$g,$rh,$_g;$J=$g->query("SET search_path TO ".idf_escape($dg));foreach(types()as$U){if(!isset($rh[$U])){$rh[$U]=0;$_g['UÅ¾ivatelskÃ© typy'][]=$U;}}return$J;}function
use_sql($Cb){return"\connect ".idf_escape($Cb);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$g;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($g->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(database|table|columns|sql|indexes|comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$~',$Cc);}$v="pgsql";$rh=array();$_g=array();foreach(array('ÄŒÃ­sla'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Datum a Äas'=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),'Å˜etÄ›zce'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'BinÃ¡rnÃ­'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'SÃ­Å¥'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometrie'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sc=array("char_length","lower","round","to_hex","to_timestamp","upper");$Xc=array("avg","count","count distinct","max","min","sum");$bc=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Tb["oracle"]="Oracle";if(isset($_GET["oracle"])){$pf=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_error($mc,$l){if(ini_bool("html_errors"))$l=html_entity_decode(strip_tags($l));$l=preg_replace('~^[^:]*: ~','',$l);$this->error=$l;}function
connect($N,$V,$G){$this->_link=@oci_new_connect($V,$G,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$l=oci_error();$this->error=$l["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return
true;}function
query($H,$sh=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$l=oci_error($this->_link);$this->errno=$l["code"];$this->error=$l["message"];return
false;}set_error_handler(array($this,'_error'));$J=@oci_execute($I);restore_error_handler();if($J){if(oci_num_fields($I))return
new
Min_Result($I);$this->affected_rows=oci_num_rows($I);}return$J;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$m=1){$I=$this->query($H);if(!is_object($I)||!oci_fetch($I->_result))return
false;return
oci_result($I->_result,$m);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$w=>$X){if(is_a($X,'OCI-Lob'))$K[$w]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$e=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$e);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$e);$J->charsetnr=(preg_match("~raw|blob|bfile~",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$G){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$G);return
true;}function
select_db($Cb){return
true;}}}class
Min_Driver
extends
Min_SQL{function
begin(){return
true;}}function
idf_escape($s){return'"'.str_replace('"','""',$s).'"';}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($H,$Z,$y,$D=0,$kg=" "){return($D?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($y+$D).") WHERE rnum > $D":($y!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($y+$D):" $H$Z"));}function
limit1($H,$Z){return" $H$Z";}function
db_collation($k,$ib){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views
ORDER BY 1");}function
count_tables($j){return
array();}function
table_status($C=""){$J=array();$fg=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $fg":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $fg":"")."
ORDER BY 1")as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$x="$K[DATA_PRECISION],$K[DATA_SCALE]";if($x==",")$x=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($x?"($x)":""),"type"=>strtolower($U),"length"=>$x,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$h)as$K){$ld=$K["INDEX_NAME"];$J[$ld]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$ld]["columns"][]=$K["COLUMN_NAME"];$J[$ld]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);$J[$ld]["descs"][]=($K["DESCEND"]?'1':null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($L);}function
collations(){return
array();}function
information_schema($k){return
false;}function
error(){global$g;return
h($g->error);}function
explain($g,$H){$g->query("EXPLAIN PLAN FOR $H");return$g->query("SELECT * FROM plan_table");}function
found_rows($R,$Z){}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=$Ub=array();foreach($n
as$m){$X=$m[1];if($X&&$m[0]!=""&&idf_escape($m[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($m[0])." TO $X[0]");if($X)$c[]=($Q!=""?($m[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$Ub[]=idf_escape($m[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n)");return(!$c||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$c)))&&(!$Ub||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$Ub).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
apply_queries("DROP VIEW",$Mh);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$g;return$g->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($eg){global$g;return$g->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($eg));}function
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
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(columns|database|drop_col|indexes|processlist|scheme|sql|status|table|variables|view|view_trigger)$~',$Cc);}$v="oracle";$rh=array();$_g=array();foreach(array('ÄŒÃ­sla'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Datum a Äas'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Å˜etÄ›zce'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'BinÃ¡rnÃ­'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Sc=array("length","lower","round","upper");$Xc=array("avg","count","count distinct","max","min","sum");$bc=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Tb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$pf=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$errno,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$l){$this->errno=$l["code"];$this->error.="$l[message]\n";}$this->error=rtrim($this->error);}function
connect($N,$V,$G){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$pd=sqlsrv_server_info($this->_link);$this->server_info=$pd['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return$this->query("USE ".idf_escape($Cb));}function
query($H,$sh=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
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
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;$K=$I->fetch_row();return$K[$m];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;}function
_convert($K){foreach((array)$K
as$w=>$X){if(is_a($X,'DateTime'))$K[$w]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$m=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$m["Name"];$J->orgname=$m["Name"];$J->type=($m["Type"]==1?254:0);return$J;}function
seek($D){for($q=0;$q<$D;$q++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$G){$this->_link=@mssql_connect($N,$V,$G);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($Cb){return
mssql_select_db($Cb);}function
query($H,$sh=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
false;}if($I===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($H,$m=0){$I=$this->query($H);if(!is_object($I))return
false;return
mssql_result($I->_result,0,$m);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($I){$this->_result=$I;$this->num_rows=mssql_num_rows($I);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$J=mssql_fetch_field($this->_result);$J->orgtable=$J->table;$J->orgname=$J->name;return$J;}function
seek($D){mssql_data_seek($this->_result,$D);}function
__destruct(){mssql_free_result($this->_result);}}}class
Min_Driver
extends
Min_SQL{function
insertUpdate($Q,$L,$sf){foreach($L
as$O){$zh=array();$Z=array();foreach($O
as$w=>$X){$zh[]="$w = $X";if(isset($sf[idf_unescape($w)]))$Z[]="$w = $X";}if(!queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$zh)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");"))return
false;}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}}function
idf_escape($s){return"[".str_replace("]","]]",$s)."]";}function
table($s){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($H,$Z,$y,$D=0,$kg=" "){return($y!==null?" TOP (".($y+$D).")":"")." $H$Z";}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$ib){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($k));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($j){global$g;$J=array();foreach($j
as$k){$g->select_db($k);$J[$k]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ".($C!=""?"AND name = ".q($C):"ORDER BY name"))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$x=(preg_match("~char|binary~",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($x?"($x)":""),"type"=>$U,"length"=>$x,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name, is_descending_key
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$h)as$K){$C=$K["name"];$J[$C]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$C]["lengths"]=array();$J[$C]["columns"][$K["key_ordinal"]]=$K["column_name"];$J[$C]["descs"][$K["key_ordinal"]]=($K["is_descending_key"]?'1':null);}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$J=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$d)$J[preg_replace('~_.*~','',$d)][]=$d;return$J;}function
information_schema($k){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
create_database($k,$d){return
queries("CREATE DATABASE ".idf_escape($k).(preg_match('~^[a-z0-9_]+$~i',$d)?" COLLATE $d":""));}function
drop_databases($j){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$j)));}function
rename_database($C,$d){if(preg_match('~^[a-z0-9_]+$~i',$d))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $d");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=array();foreach($n
as$m){$e=idf_escape($m[0]);$X=$m[1];if(!$X)$c["DROP"][]=" COLUMN $e";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($m[0]=="")$c["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Jc[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($e!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$e").", ".q(idf_unescape($X[0])).", 'COLUMN'");$c["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$c["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Jc)$c[""]=$Jc;foreach($c
as$w=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $w".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$c){$t=array();$Ub=array();foreach($c
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$Ub[]=idf_escape($X[1]);else$t[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$t||queries("DROP INDEX ".implode(", ",$t)))&&(!$Ub||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$Ub)));}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$H){$g->query("SET SHOWPLAN_ALL ON");$J=$g->query($H);$g->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$o=&$J[$K["FK_NAME"]];$o["table"]=$K["PKTABLE_NAME"];$o["source"][]=$K["FKCOLUMN_NAME"];$o["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){return
apply_queries("ALTER SCHEMA ".idf_escape($Pg)." TRANSFER",array_merge($S,$Mh));}function
trigger($C){if($C=="")return
array();$L=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$J=reset($L);if($J)$J["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$J["text"]);return$J;}function
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
get_schema(){global$g;if($_GET["ns"]!="")return$_GET["ns"];return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($dg){return
true;}function
use_sql($Cb){return"USE ".idf_escape($Cb);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
support($Cc){return
preg_match('~^(columns|database|drop_col|indexes|scheme|sql|table|trigger|view|view_trigger)$~',$Cc);}$v="mssql";$rh=array();$_g=array();foreach(array('ÄŒÃ­sla'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Datum a Äas'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Å˜etÄ›zce'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'BinÃ¡rnÃ­'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array();$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sc=array("len","lower","round","upper");$Xc=array("avg","count","count distinct","max","min","sum");$bc=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Tb["simpledb"]="SimpleDB";if(isset($_GET["simpledb"])){$pf=array("SimpleXML");define("DRIVER","simpledb");if(class_exists('SimpleXMLElement')){class
Min_DB{var$extension="SimpleXML",$server_info='2009-04-15',$error,$timeout,$next,$affected_rows,$_result;function
select_db($Cb){return($Cb=="domain");}function
query($H,$sh=false){$F=array('SelectExpression'=>$H,'ConsistentRead'=>'true');if($this->next)$F['NextToken']=$this->next;$I=sdb_request_all('Select','Item',$F,$this->timeout);if($I===false)return$I;if(preg_match('~^\s*SELECT\s+COUNT\(~i',$H)){$Dg=0;foreach($I
as$zd)$Dg+=$zd->Attribute->Value;$I=array((object)array('Attribute'=>array((object)array('Name'=>'Count','Value'=>$Dg,))));}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0;function
Min_Result($I){foreach($I
as$zd){$K=array();if($zd->Name!='')$K['itemName()']=(string)$zd->Name;foreach($zd->Attribute
as$Ga){$C=$this->_processValue($Ga->Name);$Y=$this->_processValue($Ga->Value);if(isset($K[$C])){$K[$C]=(array)$K[$C];$K[$C][]=$Y;}else$K[$C]=$Y;}$this->_rows[]=$K;foreach($K
as$w=>$X){if(!isset($this->_rows[0][$w]))$this->_rows[0][$w]=null;}}$this->num_rows=count($this->_rows);}function
_processValue($dc){return(is_object($dc)&&$dc['encoding']=='base64'?base64_decode($dc):(string)$dc);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$w=>$X)$J[$w]=$K[$w];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Ed=array_keys($this->_rows[0]);return(object)array('name'=>$Ed[$this->_offset++]);}}}class
Min_Driver
extends
Min_SQL{function
_chunkRequest($id,$ua,$F,$vc=array()){global$g;foreach(array_chunk($id,25)as$bb){$Ze=$F;foreach($bb
as$q=>$r){$Ze["Item.$q.ItemName"]=$r;foreach($vc
as$w=>$X)$Ze["Item.$q.$w"]=$X;}if(!sdb_request($ua,$Ze))return
false;}$g->affected_rows=count($id);return
true;}function
_extractIds($Q,$Cf,$y){$J=array();if(preg_match_all("~itemName\(\) = (('[^']*+')+)~",$Cf,$Xd))$J=array_map('idf_unescape',$Xd[1]);else{foreach(sdb_request_all('Select','Item',array('SelectExpression'=>'SELECT itemName() FROM '.table($Q).$Cf.($y?" LIMIT 1":"")))as$zd)$J[]=$zd->Name;}return$J;}function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){global$g;$g->next=$_GET["next"];$J=parent::select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf);$g->next=0;return$J;}function
delete($Q,$Cf,$y=0){return$this->_chunkRequest($this->_extractIds($Q,$Cf,$y),'BatchDeleteAttributes',array('DomainName'=>$Q));}function
update($Q,$O,$Cf,$y=0,$kg="\n"){$Ib=array();$td=array();$q=0;$id=$this->_extractIds($Q,$Cf,$y);$r=idf_unescape($O["`itemName()`"]);unset($O["`itemName()`"]);foreach($O
as$w=>$X){$w=idf_unescape($w);if($X=="NULL"||($r!=""&&array($r)!=$id))$Ib["Attribute.".count($Ib).".Name"]=$w;if($X!="NULL"){foreach((array)$X
as$Ad=>$W){$td["Attribute.$q.Name"]=$w;$td["Attribute.$q.Value"]=(is_array($X)?$W:idf_unescape($W));if(!$Ad)$td["Attribute.$q.Replace"]="true";$q++;}}}$F=array('DomainName'=>$Q);return(!$td||$this->_chunkRequest(($r!=""?array($r):$id),'BatchPutAttributes',$F,$td))&&(!$Ib||$this->_chunkRequest($id,'BatchDeleteAttributes',$F,$Ib));}function
insert($Q,$O){$F=array("DomainName"=>$Q);$q=0;foreach($O
as$C=>$Y){if($Y!="NULL"){$C=idf_unescape($C);if($C=="itemName()")$F["ItemName"]=idf_unescape($Y);else{foreach((array)$Y
as$X){$F["Attribute.$q.Name"]=$C;$F["Attribute.$q.Value"]=(is_array($Y)?$X:idf_unescape($Y));$q++;}}}}return
sdb_request('PutAttributes',$F);}function
insertUpdate($Q,$L,$sf){foreach($L
as$O){if(!$this->update($Q,$O,"WHERE `itemName()` = ".q($O["`itemName()`"])))return
false;}return
true;}function
begin(){return
false;}function
commit(){return
false;}function
rollback(){return
false;}}function
connect(){return
new
Min_DB;}function
support($Cc){return
preg_match('~sql~',$Cc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){return
array("domain");}function
collations(){return
array();}function
db_collation($k,$ib){}function
tables_list(){global$g;$J=array();foreach(sdb_request_all('ListDomains','DomainName')as$Q)$J[(string)$Q]='table';if($g->error&&defined("PAGE_HEADER"))echo"<p class='error'>".error()."\n";return$J;}function
table_status($C="",$Bc=false){$J=array();foreach(($C!=""?array($C=>true):tables_list())as$Q=>$U){$K=array("Name"=>$Q,"Auto_increment"=>"");if(!$Bc){$je=sdb_request('DomainMetadata',array('DomainName'=>$Q));if($je){foreach(array("Rows"=>"ItemCount","Data_length"=>"ItemNamesSizeBytes","Index_length"=>"AttributeValuesSizeBytes","Data_free"=>"AttributeNamesSizeBytes",)as$w=>$X)$K[$w]=(string)$je->$X;}}if($C!="")return$K;$J[$Q]=$K;}return$J;}function
explain($g,$H){}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("itemName()")),);}function
fields($Q){$J=array();foreach((array)$_POST["field_keys"]as$w=>$X){if($X!=""){$X=bracket_escape($X);$_POST["function"][$X]=$_POST["field_funs"][$w];$_POST["fields"][$X]=$_POST["field_vals"][$w];}}foreach((array)$_POST["fields"]as$w=>$X){$C=bracket_escape($w,1);$J[$C]=array("field"=>$C,"privileges"=>array("insert"=>1,"update"=>1),"null"=>1);}return$J;}function
foreign_keys($Q){return
array();}function
table($s){return
idf_escape($s);}function
idf_escape($s){return"`".str_replace("`","``",$s)."`";}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y":"");}function
unconvert_field($m,$J){return$J;}function
fk_support($R){}function
engines(){return
array();}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){return($Q==""&&sdb_request('CreateDomain',array('DomainName'=>$C)));}function
drop_tables($S){foreach($S
as$Q){if(!sdb_request('DeleteDomain',array('DomainName'=>$Q)))return
false;}return
true;}function
count_tables($j){foreach($j
as$k)return
array($k=>count(tables_list()));}function
found_rows($R,$Z){return($Z?null:$R["Rows"]);}function
last_id(){}function
hmac($_a,$Ab,$w,$Gf=false){$Sa=64;if(strlen($w)>$Sa)$w=pack("H*",$_a($w));$w=str_pad($w,$Sa,"\0");$Bd=$w^str_repeat("\x36",$Sa);$Cd=$w^str_repeat("\x5C",$Sa);$J=$_a($Cd.pack("H*",$_a($Bd.$Ab)));if($Gf)$J=pack("H*",$J);return$J;}function
sdb_request($ua,$F=array()){global$b,$g;list($fd,$F['AWSAccessKeyId'],$gg)=$b->credentials();$F['Action']=$ua;$F['Timestamp']=gmdate('Y-m-d\TH:i:s+00:00');$F['Version']='2009-04-15';$F['SignatureVersion']=2;$F['SignatureMethod']='HmacSHA1';ksort($F);$H='';foreach($F
as$w=>$X)$H.='&'.rawurlencode($w).'='.rawurlencode($X);$H=str_replace('%7E','~',substr($H,1));$H.="&Signature=".urlencode(base64_encode(hmac('sha1',"POST\n".preg_replace('~^https?://~','',$fd)."\n/\n$H",$gg,true)));@ini_set('track_errors',1);$Ec=@file_get_contents((preg_match('~^https?://~',$fd)?$fd:"http://$fd"),false,stream_context_create(array('http'=>array('method'=>'POST','content'=>$H,'ignore_errors'=>1,))));if(!$Ec){$g->error=$php_errormsg;return
false;}libxml_use_internal_errors(true);$Sh=simplexml_load_string($Ec);if(!$Sh){$l=libxml_get_last_error();$g->error=$l->message;return
false;}if($Sh->Errors){$l=$Sh->Errors->Error;$g->error="$l->Message ($l->Code)";return
false;}$g->error='';$Og=$ua."Result";return($Sh->$Og?$Sh->$Og:true);}function
sdb_request_all($ua,$Og,$F=array(),$Xg=0){$J=array();$wg=($Xg?microtime(true):0);$y=(preg_match('~LIMIT\s+(\d+)\s*$~i',$F['SelectExpression'],$A)?$A[1]:0);do{$Sh=sdb_request($ua,$F);if(!$Sh)break;foreach($Sh->$Og
as$dc)$J[]=$dc;if($y&&count($J)>=$y){$_GET["next"]=$Sh->NextToken;break;}if($Xg&&microtime(true)-$wg>$Xg)return
false;$F['NextToken']=$Sh->NextToken;if($y)$F['SelectExpression']=preg_replace('~\d+\s*$~',$y-count($J),$F['SelectExpression']);}while($Sh->NextToken);return$J;}$v="simpledb";$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","IS NOT NULL");$Sc=array();$Xc=array("count");$bc=array(array("json"));}$Tb["mongo"]="MongoDB (beta)";if(isset($_GET["mongo"])){$pf=array("mongo");define("DRIVER","mongo");if(class_exists('MongoDB')){class
Min_DB{var$extension="Mongo",$error,$_link,$_db;function
connect($N,$V,$G){global$b;$k=$b->database();$Ke=array();if($V!=""){$Ke["username"]=$V;$Ke["password"]=$G;}if($k!="")$Ke["db"]=$k;try{$this->_link=@new
MongoClient("mongodb://$N",$Ke);return
true;}catch(Exception$qc){$this->error=$qc->getMessage();return
false;}}function
query($H){return
false;}function
select_db($Cb){try{$this->_db=$this->_link->selectDB($Cb);return
true;}catch(Exception$qc){$this->error=$qc->getMessage();return
false;}}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows=array(),$_offset=0,$_charset=array();function
Min_Result($I){foreach($I
as$zd){$K=array();foreach($zd
as$w=>$X){if(is_a($X,'MongoBinData'))$this->_charset[$w]=63;$K[$w]=(is_a($X,'MongoId')?'ObjectId("'.strval($X).'")':(is_a($X,'MongoDate')?gmdate("Y-m-d H:i:s",$X->sec)." GMT":(is_a($X,'MongoBinData')?$X->bin:(is_a($X,'MongoRegex')?strval($X):(is_object($X)?get_class($X):$X)))));}$this->_rows[]=$K;foreach($K
as$w=>$X){if(!isset($this->_rows[0][$w]))$this->_rows[0][$w]=null;}}$this->num_rows=count($this->_rows);}function
fetch_assoc(){$K=current($this->_rows);if(!$K)return$K;$J=array();foreach($this->_rows[0]as$w=>$X)$J[$w]=$K[$w];next($this->_rows);return$J;}function
fetch_row(){$J=$this->fetch_assoc();if(!$J)return$J;return
array_values($J);}function
fetch_field(){$Ed=array_keys($this->_rows[0]);$C=$Ed[$this->_offset++];return(object)array('name'=>$C,'charsetnr'=>$this->_charset[$C],);}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){$M=($M==array("*")?array():array_fill_keys($M,true));$rg=array();foreach($Me
as$X){$X=preg_replace('~ DESC$~','',$X,1,$wb);$rg[$X]=($wb?-1:1);}return
new
Min_Result(iterator_to_array($this->_conn->_db->selectCollection($Q)->find(array(),$M)->sort($rg)->limit(+$y)->skip($E*$y)));}function
insert($Q,$O){try{$J=$this->_conn->_db->selectCollection($Q)->insert($O);$this->_conn->errno=$J['code'];$this->_conn->error=$J['err'];return!$J['err'];}catch(Exception$qc){$this->_conn->error=$qc->getMessage();return
false;}}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
error(){global$g;return
h($g->error);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases($Ic){global$g;$J=array();$Fb=$g->_link->listDBs();foreach($Fb['databases']as$k)$J[]=$k['name'];return$J;}function
collations(){return
array();}function
db_collation($k,$ib){}function
count_tables($j){global$g;$J=array();foreach($j
as$k)$J[$k]=count($g->_link->selectDB($k)->getCollectionNames(true));return$J;}function
tables_list(){global$g;return
array_fill_keys($g->_db->getCollectionNames(true),'table');}function
table_status($C="",$Bc=false){$J=array();foreach(tables_list()as$Q=>$U){$J[$Q]=array("Name"=>$Q);if($C==$Q)return$J[$Q];}return$J;}function
information_schema(){}function
is_view($R){}function
drop_databases($j){global$g;foreach($j
as$k){$Rf=$g->_link->selectDB($k)->drop();if(!$Rf['ok'])return
false;}return
true;}function
indexes($Q,$h=null){global$g;$J=array();foreach($g->_db->selectCollection($Q)->getIndexInfo()as$t){$Lb=array();foreach($t["key"]as$e=>$U)$Lb[]=($U==-1?'1':null);$J[$t["name"]]=array("type"=>($t["name"]=="_id_"?"PRIMARY":($t["unique"]?"UNIQUE":"INDEX")),"columns"=>array_keys($t["key"]),"descs"=>$Lb,);}return$J;}function
fields($Q){return
array();}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
foreign_keys($Q){return
array();}function
fk_support($R){}function
engines(){return
array();}function
found_rows($R,$Z){global$g;return$g->_db->selectCollection($_GET["select"])->count($Z);}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){global$g;if($Q==""){$g->_db->createCollection($C);return
true;}}function
drop_tables($S){global$g;foreach($S
as$Q){$Rf=$g->_db->selectCollection($Q)->drop();if(!$Rf['ok'])return
false;}return
true;}function
truncate_tables($S){global$g;foreach($S
as$Q){$Rf=$g->_db->selectCollection($Q)->remove();if(!$Rf['ok'])return
false;}return
true;}function
table($s){return$s;}function
idf_escape($s){return$s;}function
support($Cc){return
preg_match("~database|indexes~",$Cc);}$v="mongo";$He=array("=");$Sc=array();$Xc=array();$bc=array(array("json"));}$Tb["elastic"]="Elasticsearch (beta)";if(isset($_GET["elastic"])){$pf=array("json");define("DRIVER","elastic");if(function_exists('json_decode')){class
Min_DB{var$extension="JSON",$server_info,$errno,$error,$_url;function
query($gf,$rb=array(),$ke='GET'){@ini_set('track_errors',1);$Ec=@file_get_contents($this->_url.($this->_db!=""?"$this->_db/":"").$gf,false,stream_context_create(array('http'=>array('method'=>$ke,'content'=>json_encode($rb),'ignore_errors'=>1,))));if(!$Ec){$this->error=$php_errormsg;return$Ec;}if(!preg_match('~^HTTP/[0-9.]+ 2~i',$http_response_header[0])){$this->error=$Ec;return
false;}$J=json_decode($Ec,true);if(!$J){$this->errno=json_last_error();if(function_exists('json_last_error_msg'))$this->error=json_last_error_msg();else{$qb=get_defined_constants(true);foreach($qb['json']as$C=>$Y){if($Y==$this->errno&&preg_match('~^JSON_ERROR_~',$C)){$this->error=$C;break;}}}}return$J;}function
connect($N,$V,$G){$this->_url="http://$V:$G@$N/";$J=$this->query('');if($J)$this->server_info=$J['version']['number'];return(bool)$J;}function
select_db($Cb){$this->_db=$Cb;return
true;}function
quote($P){return$P;}}class
Min_Result{var$num_rows,$_rows;function
Min_Result($L){$this->num_rows=count($this->_rows);$this->_rows=$L;reset($this->_rows);}function
fetch_assoc(){$J=current($this->_rows);next($this->_rows);return$J;}function
fetch_row(){return
array_values($this->fetch_assoc());}}}class
Min_Driver
extends
Min_SQL{function
select($Q,$M,$Z,$Vc,$Me,$y,$E,$uf=false){global$b;$Ab=array();$H="$Q/_search";if($M!=array("*"))$Ab["fields"]=$M;if($Me){$rg=array();foreach($Me
as$gb){$gb=preg_replace('~ DESC$~','',$gb,1,$wb);$rg[]=($wb?array($gb=>"desc"):$gb);}$Ab["sort"]=$rg;}if($y){$Ab["size"]=+$y;if($E)$Ab["from"]=($E*$y);}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""){$Sg=array("match"=>array(($X["col"]!=""?$X["col"]:"_all")=>$X["val"]));if($X["op"]=="=")$Ab["query"]["filtered"]["filter"]["and"][]=$Sg;else$Ab["query"]["filtered"]["query"]["bool"]["must"][]=$Sg;}}if($Ab["query"]&&!$Ab["query"]["filtered"]["query"])$Ab["query"]["filtered"]["query"]=array("match_all"=>array());if($uf)echo$b->selectQuery("$H: ".print_r($Ab,true));$fg=$this->_conn->query($H,$Ab);if(!$fg)return
false;$J=array();foreach($fg['hits']['hits']as$ed){$K=array();$n=$ed['_source'];if($M!=array("*")){$n=array();foreach($M
as$w)$n[$w]=$ed['fields'][$w];}foreach($n
as$w=>$X)$K[$w]=(is_array($X)?json_encode($X):$X);$J[]=$K;}return
new
Min_Result($J);}}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2]))return$g;return$g->error;}function
support($Cc){return
preg_match("~database|table|columns~",$Cc);}function
logged_user(){global$b;$i=$b->credentials();return$i[1];}function
get_databases(){global$g;$J=$g->query('_aliases');if($J)$J=array_keys($J);return$J;}function
collations(){return
array();}function
db_collation($k,$ib){}function
count_tables($j){global$g;$J=$g->query('_mapping');if($J)$J=array_map('count',$J);return$J;}function
tables_list(){global$g;$J=$g->query('_mapping');if($J)$J=array_fill_keys(array_keys(reset($J)),'table');return$J;}function
table_status($C="",$Bc=false){$J=tables_list();if($J){foreach($J
as$w=>$U)$J[$w]=array("Name"=>$w,"Engine"=>$U);if($C!="")return$J[$C];}return$J;}function
error(){global$g;return
h($g->error);}function
information_schema(){}function
is_view($R){}function
indexes($Q,$h=null){return
array(array("type"=>"PRIMARY","columns"=>array("_id")),);}function
fields($Q){global$g;$Vd=$g->query("$Q/_mapping");$J=array();if($Vd){foreach($Vd[$Q]['properties']as$C=>$m)$J[$C]=array("field"=>$C,"full_type"=>$m["type"],"type"=>$m["type"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
foreign_keys($Q){return
array();}function
table($s){return$s;}function
idf_escape($s){return$s;}function
convert_field($m){}function
unconvert_field($m,$J){return$J;}function
fk_support($R){}function
found_rows($R,$Z){return
null;}function
create_database($k){global$g;return$g->query(urlencode($k),array(),'PUT');}function
drop_databases($j){global$g;return$g->query(urlencode(implode(',',$j)),array(),'DELETE');}function
drop_tables($S){global$g;$J=true;foreach($S
as$Q)$J=$J&&$g->query(urlencode($Q),array(),'DELETE');return$J;}$v="elastic";$He=array("=","query");$Sc=array();$Xc=array();$bc=array(array("json"));}$Tb=array("server"=>"MySQL")+$Tb;if(!defined("DRIVER")){$pf=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($fd,$lf)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$fd:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($lf)?$lf:ini_get("mysqli.default_port")),(!is_numeric($lf)?$lf:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$m=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$m];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$errno,$error,$_link,$_result;function
connect($N,$V,$G){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Cb){return
mysql_select_db($Cb,$this->_link);}function
query($H,$sh=false){$I=@($sh?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->errno=mysql_errno($this->_link);$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$m=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$m);}}class
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
connect($N,$V,$G){$this->dsn("mysql:charset=utf8;host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Cb){return$this->query("USE ".idf_escape($Cb));}function
query($H,$sh=false){$this->setAttribute(1000,!$sh);return
parent::query($H,$sh);}}}class
Min_Driver
extends
Min_SQL{function
insert($Q,$O){return($O?parent::insert($Q,$O):queries("INSERT INTO ".table($Q)." ()\nVALUES ()"));}function
insertUpdate($Q,$L,$sf){$f=array_keys(reset($L));$qf="INSERT INTO ".table($Q)." (".implode(", ",$f).") VALUES\n";$Hh=array();foreach($f
as$w)$Hh[$w]="$w = VALUES($w)";$Cg="\nON DUPLICATE KEY UPDATE ".implode(", ",$Hh);$Hh=array();$x=0;foreach($L
as$O){$Y="(".implode(", ",$O).")";if($Hh&&(strlen($qf)+$x+strlen($Y)+strlen($Cg)>1e6)){if(!queries($qf.implode(",\n",$Hh).$Cg))return
false;$Hh=array();$x=0;}$Hh[]=$Y;$x+=strlen($Y)+2;}return
queries($qf.implode(",\n",$Hh).$Cg);}}function
idf_escape($s){return"`".str_replace("`","``",$s)."`";}function
table($s){return
idf_escape($s);}function
connect(){global$b;$g=new
Min_DB;$i=$b->credentials();if($g->connect($i[0],$i[1],$i[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($bg=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$bg;return$J;}function
get_databases($Ic){global$g;$J=get_session("dbs");if($J===null){$H=($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Ic?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$y,$D=0,$kg=" "){return" $H$Z".($y!==null?$kg."LIMIT $y".($D?" OFFSET $D":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($k,$ib){global$g;$J=null;$xb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1);if(preg_match('~ COLLATE ([^ ]+)~',$xb,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$xb,$A))$J=$ib[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(preg_match("~YES|DEFAULT~",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals($g->server_info>=5?"SELECT TABLE_NAME, TABLE_TYPE FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ORDER BY TABLE_NAME":"SHOW TABLES");}function
count_tables($j){$J=array();foreach($j
as$k)$J[$k]=count(get_vals("SHOW TABLES IN ".idf_escape($k)));return$J;}function
table_status($C="",$Bc=false){global$g;$J=array();foreach(get_rows($Bc&&$g->server_info>=5?"SELECT TABLE_NAME AS Name, Engine, TABLE_COMMENT AS Comment FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE() ".($C!=""?"AND TABLE_NAME = ".q($C):"ORDER BY Name"):"SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_\\")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Engine"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]===null;}function
fk_support($R){return
preg_match('~InnoDB|IBMDB2I~i',$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||preg_match("~char|set~",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(preg_match('~^on update (.+)~i',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(preg_split('~, *~',$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];$J[$K["Key_name"]]["descs"][]=null;}return$J;}function
foreign_keys($Q){global$g,$De;static$if='`(?:[^`]|``)+`';$J=array();$yb=$g->result("SHOW CREATE TABLE ".table($Q),1);if($yb){preg_match_all("~CONSTRAINT ($if) FOREIGN KEY \\(((?:$if,? ?)+)\\) REFERENCES ($if)(?:\\.($if))? \\(((?:$if,? ?)+)\\)(?: ON DELETE ($De))?(?: ON UPDATE ($De))?~",$yb,$Xd,PREG_SET_ORDER);foreach($Xd
as$A){preg_match_all("~$if~",$A[2],$sg);preg_match_all("~$if~",$A[5],$Pg);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$sg[0]),"target"=>array_map('idf_unescape',$Pg[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$w=>$X)asort($J[$w]);return$J;}function
information_schema($k){global$g;return($g->server_info>=5&&$k=="information_schema")||($g->server_info>=5.5&&$k=="performance_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(preg_match('~ at line ([0-9]+)$~',$g->error,$Nf))return$Nf[1]-1;}function
create_database($k,$d){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($k).($d?" COLLATE ".q($d):""));}function
drop_databases($j){restart_session();set_session("dbs",null);return
apply_queries("DROP DATABASE",$j,'idf_escape');}function
rename_database($C,$d){if(create_database($C,$d)){$Pf=array();foreach(tables_list()as$Q=>$U)$Pf[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$Pf||queries("RENAME TABLE ".implode(", ",$Pf))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ka=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$Ka="";break;}if($t["type"]=="PRIMARY")$Ka=" UNIQUE";}}return" AUTO_INCREMENT$Ka";}function
alter_table($Q,$C,$n,$Jc,$mb,$jc,$d,$Ja,$df){$c=array();foreach($n
as$m)$c[]=($m[1]?($Q!=""?($m[0]!=""?"CHANGE ".idf_escape($m[0]):"ADD"):" ")." ".implode($m[1]).($Q!=""?$m[2]:""):"DROP ".idf_escape($m[0]));$c=array_merge($c,$Jc);$xg="COMMENT=".q($mb).($jc?" ENGINE=".q($jc):"").($d?" COLLATE ".q($d):"").($Ja!=""?" AUTO_INCREMENT=$Ja":"").$df;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$c)."\n) $xg");if($Q!=$C)$c[]="RENAME TO ".table($C);$c[]=$xg;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$c));}function
alter_indexes($Q,$c){foreach($c
as$w=>$X)$c[$w]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$c));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($Mh){return
queries("DROP VIEW ".implode(", ",array_map('table',$Mh)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$Mh,$Pg){$Pf=array();foreach(array_merge($S,$Mh)as$Q)$Pf[]=table($Q)." TO ".idf_escape($Pg).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Pf));}function
copy_tables($S,$Mh,$Pg){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($Pg==DB?table("copy_$Q"):idf_escape($Pg).".".table($Q));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($Mh
as$Q){$C=($Pg==DB?table("copy_$Q"):idf_escape($Pg).".".table($Q));$Lh=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Lh[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$g,$lc,$rd,$rh;$Aa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$qh="((".implode("|",array_merge(array_keys($rh),$Aa)).")\\b(?:\\s*\\(((?:[^'\")]*|$lc)++)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$if="\\s*(".($U=="FUNCTION"?"":$rd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$qh";$xb=$g->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$if\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$qh\\s+":"")."(.*)~is",$xb,$A);$n=array();preg_match_all("~$if\\s*,?~is",$A[1],$Xd,PREG_SET_ORDER);foreach($Xd
as$Ye){$C=str_replace("``","`",$Ye[2]).$Ye[3];$n[]=array("field"=>$C,"type"=>strtolower($Ye[5]),"length"=>preg_replace_callback("~$lc~s",'normalize_enum',$Ye[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ye[8] $Ye[7]"))),"null"=>1,"full_type"=>$Ye[4],"inout"=>strtoupper($Ye[1]),"collation"=>strtolower($Ye[9]),);}if($U!="FUNCTION")return
array("fields"=>$n,"definition"=>$A[11]);return
array("fields"=>$n,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT ROUTINE_NAME, ROUTINE_TYPE, DTD_IDENTIFIER FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN ".($g->server_info>=5.1?"PARTITIONS ":"").$H);}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($dg){return
true;}function
create_sql($Q,$Ja){global$g;$J=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$Ja)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Cb){return"USE ".idf_escape($Cb);}function
trigger_sql($Q,$Ag){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_\\")),null,"-- ")as$K)$J.="\n".($Ag=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($m){if(preg_match("~binary~",$m["type"]))return"HEX(".idf_escape($m["field"]).")";if($m["type"]=="bit")return"BIN(".idf_escape($m["field"])." + 0)";if(preg_match("~geometry|point|linestring|polygon~",$m["type"]))return"AsWKT(".idf_escape($m["field"]).")";}function
unconvert_field($m,$J){if(preg_match("~binary~",$m["type"]))$J="UNHEX($J)";if($m["type"]=="bit")$J="CONV($J, 2, 10) + 0";if(preg_match("~geometry|point|linestring|polygon~",$m["type"]))$J="GeomFromText($J)";return$J;}function
support($Cc){global$g;return!preg_match("~scheme|sequence|type|view_trigger".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|routine|trigger|view":""):"")."~",$Cc);}$v="sql";$rh=array();$_g=array();foreach(array('ÄŒÃ­sla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a Äas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Å˜etÄ›zce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),'BinÃ¡rnÃ­'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Geometrie'=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$w=>$X){$rh+=$X;$_g[$w]=array_keys($X);}$yh=array("unsigned","zerofill","unsigned zerofill");$He=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","SQL");$Sc=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Xc=array("avg","count","count distinct","group_concat","max","min","sum");$bc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ia="4.0.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' target='_blank' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_password());}function
permanentLogin($xb=false){return
password_file($xb);}function
database(){return
DB;}function
databases($Ic=true){return
get_databases($Ic);}function
schemas(){return
schemas();}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){global$v;return
true;}function
loginForm(){global$Tb;echo'<table cellspacing="0">
<tr><th>SystÃ©m<td>',html_select("auth[driver]",$Tb,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]" placeholder="localhost" autocapitalize="off">
<tr><th>UÅ¾ivatel<td><input name="auth[username]" id="username" value="',h($_GET["username"]),'" autocapitalize="off">
<tr><th>Heslo<td><input type="password" name="auth[password]">
<tr><th>DatabÃ¡ze<td><input name="auth[db]" value="',h($_GET["db"]);?>" autocapitalize="off">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
focus(username);
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'PÅ™ihlÃ¡sit se'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'TrvalÃ© pÅ™ihlÃ¡Å¡enÃ­')."\n";}function
login($Td,$G){return
true;}function
tableName($Gg){return
h($Gg["Name"]);}function
fieldName($m,$Me=0){return'<span title="'.h($m["full_type"]).'">'.h($m["field"]).'</span>';}function
selectLinks($Gg,$O=""){echo'<p class="links">';$Sd=array("select"=>'Vypsat data');if(support("table")||support("indexes"))$Sd["table"]='Zobrazit strukturu';if(support("table")){if(is_view($Gg))$Sd["view"]='PozmÄ›nit pohled';else$Sd["create"]='PozmÄ›nit tabulku';}if($O!==null)$Sd["edit"]='NovÃ¡ poloÅ¾ka';foreach($Sd
as$w=>$X)echo" <a href='".h(ME)."$w=".urlencode($Gg["Name"]).($w=="edit"?$O:"")."'".bold(isset($_GET[$w])).">$X</a>";echo"\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Fg){return
array();}function
backwardKeysPrint($Ma,$K){}function
selectQuery($H){global$v;return"<p><code class='jush-$v'>".h(str_replace("\n"," ",$H))."</code>".(support("sql")?" <a href='".h(ME)."sql=".urlencode($H)."'>".'Upravit'."</a>":"")."</p>";}function
rowDescription($Q){return"";}function
rowDescriptions($L,$Kc){return$L;}function
selectLink($X,$m){}function
selectVal($X,$z,$m,$Te){$J=($X===null?"<i>NULL</i>":(preg_match("~char|binary~",$m["type"])&&!preg_match("~var~",$m["type"])?"<code>$X</code>":$X));if(preg_match('~blob|bytea|raw|file~',$m["type"])&&!is_utf8($X))$J=lang(array('%d bajt','%d bajty','%d bajtÅ¯'),strlen($Te));return($z?"<a href='".h($z)."'>$J</a>":$J);}function
editVal($X,$m){return$X;}function
selectColumnsPrint($M,$f){global$Sc,$Xc;print_fieldset("select",'Vypsat',$M);$q=0;$M[""]=array();foreach($M
as$w=>$X){$X=$_GET["columns"][$w];$e=select_input(" name='columns[$q][col]' onchange='".($w!==""?"selectFieldChange(this.form)":"selectAddRow(this)").";'",$f,$X["col"]);echo"<div>".($Sc||$Xc?"<select name='columns[$q][fun]' onchange='helpClose();".($w!==""?"":" this.nextSibling.nextSibling.onchange();")."'".on_help("getTarget(event).value && getTarget(event).value.replace(/ |\$/, '(') + ')'",1).">".optionlist(array(-1=>"")+array_filter(array('Funkce'=>$Sc,'Agregace'=>$Xc)),$X["fun"])."</select>"."($e)":$e)."</div>\n";$q++;}echo"</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$u){print_fieldset("search",'Vyhledat',$Z);foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input type='search' name='fulltext[$q]' value='".h($_GET["fulltext"][$q])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$q]",1,isset($_GET["boolean"][$q]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Xa="this.nextSibling.onchange();";for($q=0;$q<=count($_GET["where"]);$q++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div>".select_input(" name='where[$q][col]' onchange='$Xa'",$f,$X["col"],"(".'kdekoliv'.")"),html_select("where[$q][op]",$this->operators,$X["op"],$Xa),"<input type='search' name='where[$q][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";' onkeydown='selectSearchKeydown(this, event);' onsearch='selectSearchSearch(this);'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Me,$f,$u){print_fieldset("sort",'SeÅ™adit',$Me);$q=0;foreach((array)$_GET["order"]as$w=>$X){if($X!=""){echo"<div>".select_input(" name='order[$q]' onchange='selectFieldChange(this.form);'",$f,$X),checkbox("desc[$q]",1,isset($_GET["desc"][$w]),'sestupnÄ›')."</div>\n";$q++;}}echo"<div>".select_input(" name='order[$q]' onchange='selectAddRow(this);'",$f),checkbox("desc[$q]",1,false,'sestupnÄ›')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input type='number' name='limit' class='size' value='".h($y)."' onchange='selectFieldChange(this.form);'>","</div></fieldset>\n";}function
selectLengthPrint($Vg){if($Vg!==null){echo"<fieldset><legend>".'DÃ©lka textÅ¯'."</legend><div>","<input type='number' name='text_length' class='size' value='".h($Vg)."'>","</div></fieldset>\n";}}function
selectActionPrint($u){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>"," <span id='noindex' title='".'PrÅ¯chod celÃ© tabulky'."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($u
as$t){if($t["type"]!="FULLTEXT")$f[reset($t["columns"])]=1;}$f[""]=1;foreach($f
as$w=>$X)json_row($w);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return!information_schema(DB);}function
selectEmailPrint($fc,$f){}function
selectColumnsProcess($f,$u){global$Sc,$Xc;$M=array();$Vc=array();foreach((array)$_GET["columns"]as$w=>$X){if($X["fun"]=="count"||($X["col"]!=""&&(!$X["fun"]||in_array($X["fun"],$Sc)||in_array($X["fun"],$Xc)))){$M[$w]=apply_sql_function($X["fun"],($X["col"]!=""?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$Xc))$Vc[]=$M[$w];}}return
array($M,$Vc);}function
selectSearchProcess($n,$u){global$v;$J=array();foreach($u
as$q=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$q]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$q]).(isset($_GET["boolean"][$q])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$ob=" $X[op]";if(preg_match('~IN$~',$X["op"])){$kd=process_length($X["val"]);$ob.=" ".($kd!=""?$kd:"(NULL)");}elseif($X["op"]=="SQL")$ob=" $X[val]";elseif($X["op"]=="LIKE %%")$ob=" LIKE ".$this->processInput($n[$X["col"]],"%$X[val]%");elseif(!preg_match('~NULL$~',$X["op"]))$ob.=" ".$this->processInput($n[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$ob;else{$jb=array();foreach($n
as$C=>$m){$xd=preg_match('~char|text|enum|set~',$m["type"]);if((is_numeric($X["val"])||!preg_match('~(^|[^o])int|float|double|decimal|bit~',$m["type"]))&&(!preg_match("~[\x80-\xFF]~",$X["val"])||$xd)){$C=idf_escape($C);$jb[]=($v=="sql"&&$xd&&!preg_match('~^utf8~',$m["collation"])?"CONVERT($C USING utf8)":$C);}}$J[]=($jb?"(".implode("$ob OR ",$jb)."$ob)":"0");}}}return$J;}function
selectOrderProcess($n,$u){$J=array();foreach((array)$_GET["order"]as$w=>$X){if($X!="")$J[]=(preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X)?$X:idf_escape($X)).(isset($_GET["desc"][$w])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"50");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$Kc){return
false;}function
selectQueryBuild($M,$Z,$Vc,$Me,$y,$E){return"";}function
messageQuery($H){global$v;restart_session();$cd=&get_session("queries");$r="sql-".count($cd[$_GET["db"]]);if(strlen($H)>1e6)$H=preg_replace('~[\x80-\xFF]+$~','',substr($H,0,1e6))."\n...";$cd[$_GET["db"]][]=array($H,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$r' onclick=\"return !toggle('$r');\">".'SQL pÅ™Ã­kaz'."</a>"."<div id='$r' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($H,1000).'</code></pre>'.(support("sql")?'<p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($cd[$_GET["db"]])-1)).'">'.'Upravit'.'</a>':'').'</div>';}function
editFunctions($m){global$bc;$J=($m["null"]?"NULL/":"");foreach($bc
as$w=>$Sc){if(!$w||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Sc
as$if=>$X){if(!$if||preg_match("~$if~",$m["type"]))$J.="/$X";}if($w&&!preg_match('~set|blob|bytea|raw|file~',$m["type"]))$J.="/SQL";}}if($m["auto_increment"]&&!isset($_GET["select"])&&!where($_GET))$J='Auto Increment';return
explode("/",$J);}function
editInput($Q,$m,$Ha,$Y){if($m["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$Ha value='-1' checked><i>".'pÅ¯vodnÃ­'."</i></label> ":"").($m["null"]?"<label><input type='radio'$Ha value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ha,$m,$Y,0);return"";}function
processInput($m,$Y,$p=""){if($p=="SQL")return$Y;$C=$m["field"];$J=q($Y);if(preg_match('~^(now|getdate|uuid)$~',$p))$J="$p()";elseif(preg_match('~^current_(date|timestamp)$~',$p))$J=$p;elseif(preg_match('~^([+-]|\\|\\|)$~',$p))$J=idf_escape($C)." $p $J";elseif(preg_match('~^[+-] interval$~',$p))$J=idf_escape($C)." $p ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(preg_match('~^(addtime|subtime|concat)$~',$p))$J="$p(".idf_escape($C).", $J)";elseif(preg_match('~^(md5|sha1|password|encrypt)$~',$p))$J="$p($J)";return
unconvert_field($m,$J);}function
dumpOutput(){$J=array('text'=>'otevÅ™Ã­t','file'=>'uloÅ¾it');if(function_exists('gzencode'))$J['gz']='gzip';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpDatabase($k){}function
dumpTable($Q,$Ag,$yd=0){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Ag)dump_csv(array_keys(fields($Q)));}elseif($Ag){if($yd==2){$n=array();foreach(fields($Q)as$C=>$m)$n[]=idf_escape($C)." $m[full_type]";$xb="CREATE TABLE ".table($Q)." (".implode(", ",$n).")";}else$xb=create_sql($Q,$_POST["auto_increment"]);if($xb){if($Ag=="DROP+CREATE"||$yd==1)echo"DROP ".($yd==2?"VIEW":"TABLE")." IF EXISTS ".table($Q).";\n";if($yd==1)$xb=remove_definer($xb);echo"$xb;\n\n";}}}function
dumpData($Q,$Ag,$H){global$g,$v;$Zd=($v=="sqlite"?0:1048576);if($Ag){if($_POST["format"]=="sql"){if($Ag=="TRUNCATE+INSERT")echo
truncate_sql($Q).";\n";$n=fields($Q);}$I=$g->query($H,1);if($I){$td="";$Va="";$Ed=array();$Cg="";$Dc=($Q!=''?'fetch_assoc':'fetch_row');while($K=$I->$Dc()){if(!$Ed){$Hh=array();foreach($K
as$X){$m=$I->fetch_field();$Ed[]=$m->name;$w=idf_escape($m->name);$Hh[]="$w = VALUES($w)";}$Cg=($Ag=="INSERT+UPDATE"?"\nON DUPLICATE KEY UPDATE ".implode(", ",$Hh):"").";\n";}if($_POST["format"]!="sql"){if($Ag=="table"){dump_csv($Ed);$Ag="INSERT";}dump_csv($K);}else{if(!$td)$td="INSERT INTO ".table($Q)." (".implode(", ",array_map('idf_escape',$Ed)).") VALUES";foreach($K
as$w=>$X){$m=$n[$w];$K[$w]=($X!==null?unconvert_field($m,preg_match('~(^|[^o])int|float|double|decimal~',$m["type"])&&$X!=''?$X:q($X)):"NULL");}$bg=($Zd?"\n":" ")."(".implode(",\t",$K).")";if(!$Va)$Va=$td.$bg;elseif(strlen($Va)+4+strlen($bg)+strlen($Cg)<$Zd)$Va.=",$bg";else{echo$Va.$Cg;$Va=$td.$bg;}}}if($Va)echo$Va.$Cg;}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpFilename($hd){return
friendly_url($hd!=""?$hd:(SERVER!=""?SERVER:"localhost"));}function
dumpHeaders($hd,$ne=false){$We=$_POST["output"];$yc=(preg_match('~sql~',$_POST["format"])?"sql":($ne?"tar":"csv"));header("Content-Type: ".($We=="gz"?"application/x-gzip":($yc=="tar"?"application/x-tar":($yc=="sql"||$We!="file"?"text/plain":"text/csv")."; charset=utf-8")));if($We=="gz")ob_start('gzencode',1e6);return$yc;}function
homepage(){echo'<p class="links">'.($_GET["ns"]==""&&support("database")?'<a href="'.h(ME).'database=">'.'PozmÄ›nit databÃ¡zi'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'PozmÄ›nit schÃ©ma':'VytvoÅ™it schÃ©ma')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'SchÃ©ma databÃ¡ze'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'OprÃ¡vnÄ›nÃ­'."</a>\n":"");return
true;}function
navigation($me){global$ia,$v,$Tb;echo'<h1>
',$this->name(),' <span class="version">',$ia,'</span>
<a href="http://www.adminer.org/#download" target="_blank" id="version">',(version_compare($ia,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($me=="auth"){$Hc=true;foreach((array)$_SESSION["pwds"]as$Jh=>$ng){foreach($ng
as$N=>$Eh){foreach($Eh
as$V=>$G){if($G!==null){if($Hc){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Hc=false;}$Fb=$_SESSION["db"][$Jh][$N][$V];foreach(($Fb?array_keys($Fb):array(""))as$k)echo"<a href='".h(auth_url($Jh,$N,$V,$k))."'>($Tb[$Jh]) ".h($V.($N!=""?"@$N":"").($k!=""?" - $k":""))."</a><br>\n";}}}}}else{$this->databasesPrint($me);if(DB==""||!$me){echo"<p class='links'>".(support("sql")?"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])&&!isset($_GET["import"])).">".'SQL pÅ™Ã­kaz'."</a>\n<a href='".h(ME)."import='".bold(isset($_GET["import"])).">".'Import'."</a>\n":"")."";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}if($_GET["ns"]!==""&&!$me&&DB!=""){echo'<a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'VytvoÅ™it tabulku'."</a>\n";$S=table_status('',true);if(!$S)echo"<p class='message'>".'Å½Ã¡dnÃ© tabulky.'."\n";else{$this->tablesPrint($S);$Sd=array();foreach($S
as$Q=>$U)$Sd[]=preg_quote($Q,'/');echo"<script type='text/javascript'>\n","var jushLang = '$v';\n","var jushLinks = { $v: [ '".js_escape(ME).(support("table")?"table=":"select=")."\$&', /\\b(".implode("|",$Sd).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$v;\n";echo"</script>\n";}}}}function
databasesPrint($me){global$b,$g;$j=$this->databases();echo'<form action="">
<p id="dbs">
';hidden_fields_get();$Db=" onmousedown='dbMouseDown(event, this);' onchange='dbChange(this);'";echo"<span title='".'databÃ¡ze'."'>DB</span>: ".($j?"<select name='db'$Db>".optionlist(array(""=>"")+$j,DB)."</select>":'<input name="db" value="'.h(DB).'" autocapitalize="off">'),"<input type='submit' value='".'Vybrat'."'".($j?" class='hidden'":"").">\n";if($me!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br><select name='ns'$Db>".optionlist(array(""=>"(".'schÃ©ma'.")")+$b->schemas(),$_GET["ns"])."</select>";if($_GET["ns"]!="")set_schema($_GET["ns"]);}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':(isset($_GET["privileges"])?'<input type="hidden" name="privileges" value="">':"")))),"</p></form>\n";}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$Q=>$xg){echo'<a href="'.h(ME).'select='.urlencode($Q).'"'.bold($_GET["select"]==$Q||$_GET["edit"]==$Q).">".'vypsat'."</a> ";$C=$this->tableName($xg);echo(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($Q).'"'.bold(in_array($Q,array($_GET["table"],$_GET["create"],$_GET["indexes"],$_GET["foreign"],$_GET["trigger"])),(is_view($xg)?"view":""))." title='".'Zobrazit strukturu'."'>$C</a>":"<span>$C</span>")."<br>\n";}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);if($b->operators===null)$b->operators=$He;function
page_header($Zg,$l="",$Ua=array(),$ah=""){global$ca,$ia,$b,$g,$Tb,$v;page_headers();$bh=$Zg.($ah!=""?": $ah":"");$ch=strip_tags($bh.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE html>
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ch,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=4.0.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=4.0.1",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.1",'">
<link rel="apple-touch-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=4.0.1",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$ia');"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="help" class="jush-',$v,' jsonly hidden" onmouseover="helpOpen = 1;" onmouseout="helpMouseout(this, event);"></div>

<div id="content">
';if($Ua!==null){$z=substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$Tb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~\b(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):'Server');if($Ua===false)echo"$N\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ua)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ua)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ua
as$w=>$X){$Kb=(is_array($X)?$X[1]:h($X));if($Kb!="")echo"<a href='".h(ME."$w=").urlencode(is_array($X)?$X[0]:$X)."'>$Kb</a> &raquo; ";}}echo"$Zg\n";}}echo"<h2>$bh</h2>\n";restart_session();page_messages($l);$j=&get_session("dbs");if(DB!=""&&$j&&!in_array(DB,$j,true))$j=null;stop_session();define("PAGE_HEADER",1);}function
page_headers(){global$b;header("Content-Type: text/html; charset=utf-8");header("Cache-Control: no-cache");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}}function
page_messages($l){$_h=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ie=$_SESSION["messages"][$_h];if($ie){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ie)."</div>\n";unset($_SESSION["messages"][$_h]);}if($l)echo"<div class='error'>$l</div>\n";}function
page_footer($me=""){global$b,$T;echo'</div>

';if($me!="auth"){echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="OdhlÃ¡sit" id="logout">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
';}echo'<div id="menu">
';$b->navigation($me);echo'</div>
<script type="text/javascript">setupSubmitHighlight(document);</script>
';}function
int32($pe){while($pe>=2147483648)$pe-=4294967296;while($pe<=-2147483649)$pe+=4294967296;return(int)$pe;}function
long2str($W,$Oh){$bg='';foreach($W
as$X)$bg.=pack('V',$X);if($Oh)return
substr($bg,0,end($W));return$bg;}function
str2long($bg,$Oh){$W=array_values(unpack('V*',str_pad($bg,4*ceil(strlen($bg)/4),"\0")));if($Oh)$W[]=strlen($bg);return$W;}function
xxtea_mx($Uh,$Th,$Dg,$Ad){return
int32((($Uh>>5&0x7FFFFFF)^$Th<<2)+(($Th>>3&0x1FFFFFFF)^$Uh<<4))^int32(($Dg^$Th)+($Ad^$Uh));}function
encrypt_string($zg,$w){if($zg=="")return"";$w=array_values(unpack("V*",pack("H*",md5($w))));$W=str2long($zg,true);$pe=count($W)-1;$Uh=$W[$pe];$Th=$W[0];$Af=floor(6+52/($pe+1));$Dg=0;while($Af-->0){$Dg=int32($Dg+0x9E3779B9);$ac=$Dg>>2&3;for($Xe=0;$Xe<$pe;$Xe++){$Th=$W[$Xe+1];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Uh=int32($W[$Xe]+$oe);$W[$Xe]=$Uh;}$Th=$W[0];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Uh=int32($W[$pe]+$oe);$W[$pe]=$Uh;}return
long2str($W,false);}function
decrypt_string($zg,$w){if($zg=="")return"";if(!$w)return
false;$w=array_values(unpack("V*",pack("H*",md5($w))));$W=str2long($zg,false);$pe=count($W)-1;$Uh=$W[$pe];$Th=$W[0];$Af=floor(6+52/($pe+1));$Dg=int32($Af*0x9E3779B9);while($Dg){$ac=$Dg>>2&3;for($Xe=$pe;$Xe>0;$Xe--){$Uh=$W[$Xe-1];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Th=int32($W[$Xe]-$oe);$W[$Xe]=$Th;}$Uh=$W[$pe];$oe=xxtea_mx($Uh,$Th,$Dg,$w[$Xe&3^$ac]);$Th=int32($W[0]-$oe);$W[0]=$Th;$Dg=int32($Dg-0x9E3779B9);}return
long2str($W,true);}$g='';$bd=$_SESSION["token"];if(!$bd)$_SESSION["token"]=rand(1,1e6);$T=get_token();$jf=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($w)=explode(":",$X);$jf[$w]=$X;}}$Ia=$_POST["auth"];if($Ia){session_regenerate_id();$Sb=$Ia["driver"];$N=$Ia["server"];$V=$Ia["username"];$G=$Ia["password"];$k=$Ia["db"];set_password($Sb,$N,$V,$G);$_SESSION["db"][$Sb][$N][$V][$k]=true;if($Ia["permanent"]){$w=base64_encode($Sb)."-".base64_encode($N)."-".base64_encode($V)."-".base64_encode($k);$vf=$b->permanentLogin(true);$jf[$w]="$w:".base64_encode($vf?encrypt_string($G,$vf):"");cookie("adminer_permanent",implode(" ",$jf));}if(count($_POST)==1||DRIVER!=$Sb||SERVER!=$N||$_GET["username"]!==$V||DB!=$k)redirect(auth_url($Sb,$N,$V,$k));}elseif($_POST["logout"]){if($bd&&!verify_token()){page_header('OdhlÃ¡sit','NeplatnÃ½ token CSRF. OdeÅ¡lete formulÃ¡Å™ znovu.');page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$w)set_session($w,null);unset_permanent();redirect(substr(preg_replace('~\b(username|db|ns)=[^&]*&~','',ME),0,-1),'OdhlÃ¡Å¡enÃ­ probÄ›hlo v poÅ™Ã¡dku.');}}elseif($jf&&!$_SESSION["pwds"]){session_regenerate_id();$vf=$b->permanentLogin();foreach($jf
as$w=>$X){list(,$cb)=explode(":",$X);list($Jh,$N,$V,$k)=array_map('base64_decode',explode("-",$w));set_password($Jh,$N,$V,decrypt_string(base64_decode($cb),$vf));$_SESSION["db"][$Jh][$N][$V][$k]=true;}}function
unset_permanent(){global$jf;foreach($jf
as$w=>$X){list($Jh,$N,$V,$k)=array_map('base64_decode',explode("-",$w));if($Jh==DRIVER&&$N==SERVER&&$V==$_GET["username"]&&$k==DB)unset($jf[$w]);}cookie("adminer_permanent",implode(" ",$jf));}function
auth_error($sc=null){global$g,$b,$bd;$og=session_name();$l="";if(!$_COOKIE[$og]&&$_GET[$og]&&ini_bool("session.use_only_cookies"))$l='Session promÄ›nnÃ© musÃ­ bÃ½t povolenÃ©.';elseif(isset($_GET["username"])){if(($_COOKIE[$og]||$_GET[$og])&&!$bd)$l='Session vyprÅ¡ela, pÅ™ihlaÅ¡te se prosÃ­m znovu.';else{$G=get_password();if($G!==null){$l=h($sc?$sc->getMessage():(is_string($g)?$g:'NeplatnÃ© pÅ™ihlaÅ¡ovacÃ­ Ãºdaje.'));if($G===false)$l.='<br>'.sprintf('Platnost hlavnÃ­ho hesla vyprÅ¡ela. <a href="http://www.adminer.org/cs/extension/" target="_blank">Implementujte</a> metodu %s, aby platilo stÃ¡le.','<code>permanentLogin()</code>');set_password(DRIVER,SERVER,$_GET["username"],null);}unset_permanent();}}$F=session_get_cookie_params();cookie("adminer_key",($_COOKIE["adminer_key"]?$_COOKIE["adminer_key"]:rand_string()),$F["lifetime"]);page_header('PÅ™ihlÃ¡sit se',$l,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}function
set_password($Jh,$N,$V,$G){$_SESSION["pwds"][$Jh][$N][$V]=($_COOKIE["adminer_key"]?array(encrypt_string($G,$_COOKIE["adminer_key"])):$G);}function
get_password(){$J=get_session("pwds");if(is_array($J))$J=($_COOKIE["adminer_key"]?decrypt_string($J[0],$_COOKIE["adminer_key"]):false);return$J;}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header('Å½Ã¡dnÃ© rozÅ¡Ã­Å™enÃ­',sprintf('NenÃ­ dostupnÃ© Å¾Ã¡dnÃ© z podporovanÃ½ch PHP rozÅ¡Ã­Å™enÃ­ (%s).',implode(", ",$pf)),false);page_footer("auth");exit;}$g=connect();}if(!is_object($g)||!$b->login($_GET["username"],get_password())){auth_error();exit;}$Sb=new
Min_Driver($g);if($Ia&&$_POST["token"])$_POST["token"]=$T;$l='';if($_POST){if(!verify_token()){$qd="max_input_vars";$de=ini_get($qd);if(extension_loaded("suhosin")){foreach(array("suhosin.request.max_vars","suhosin.post.max_vars")as$w){$X=ini_get($w);if($X&&(!$de||$X<$de)){$qd=$w;$de=$X;}}}$l=(!$_POST["token"]&&$de?sprintf('Byl pÅ™ekroÄen maximÃ¡lnÃ­ povolenÃ½ poÄet polÃ­. ZvyÅ¡te prosÃ­m %s.',"'$qd'"):'NeplatnÃ½ token CSRF. OdeÅ¡lete formulÃ¡Å™ znovu.');}}elseif($_SERVER["REQUEST_METHOD"]=="POST"){$l=sprintf('PÅ™Ã­liÅ¡ velkÃ¡ POST data. ZmenÅ¡ete data nebo zvyÅ¡te hodnotu konfiguraÄnÃ­ direktivy %s.',"'post_max_size'");if(isset($_GET["sql"]))$l.=' '.'VelkÃ½ SQL soubor mÅ¯Å¾ete nahrÃ¡t pomocÃ­ FTP a importovat ho ze serveru.';}if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();function
connect_error(){global$b,$g,$T,$l,$Tb;$j=array();if(DB!=""){header("HTTP/1.1 404 Not Found");page_header('DatabÃ¡ze'.": ".h(DB),'NesprÃ¡vnÃ¡ databÃ¡ze.',true);}else{if($_POST["db"]&&!$l)queries_redirect(substr(ME,0,-1),'DatabÃ¡ze byly odstranÄ›ny.',drop_databases($_POST["db"]));page_header('Vybrat databÃ¡zi',$l,false);echo"<p class='links'>\n";foreach(array('database'=>'VytvoÅ™it novou databÃ¡zi','privileges'=>'OprÃ¡vnÄ›nÃ­','processlist'=>'Seznam procesÅ¯','variables'=>'PromÄ›nnÃ©','status'=>'Stav',)as$w=>$X){if(support($w))echo"<a href='".h(ME)."$w='>$X</a>\n";}echo"<p>".sprintf('Verze %s: %s pÅ™es PHP rozÅ¡Ã­Å™enÃ­ %s',$Tb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('PÅ™ihlÃ¡Å¡en jako: %s',"<b>".h(logged_user())."</b>")."\n";$j=$b->databases();if($j){$eg=support("scheme");$ib=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n","<thead><tr>".(support("database")?"<td>&nbsp;":"")."<th>".'DatabÃ¡ze'."<td>".'PorovnÃ¡vÃ¡nÃ­'."<td>".'Tabulky'."</thead>\n";foreach($j
as$k){$Wf=h(ME)."db=".urlencode($k);echo"<tr".odd().">".(support("database")?"<td>".checkbox("db[]",$k,in_array($k,(array)$_POST["db"])):""),"<th><a href='$Wf'>".h($k)."</a>";$d=nbsp(db_collation($k,$ib));echo"<td>".(support("database")?"<a href='$Wf".($eg?"&amp;ns=":"")."&amp;database=' title='".'PozmÄ›nit databÃ¡zi'."'>$d</a>":$d),"<td align='right'><a href='$Wf&amp;schema=' id='tables-".h($k)."' title='".'SchÃ©ma databÃ¡ze'."'>?</a>","\n";}echo"</table>\n",(support("database")?"<fieldset><legend>".'OznaÄenÃ©'." <span id='selected'></span></legend><div>\n"."<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^db/));\">\n"."<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n"."</div></fieldset>\n":""),"<script type='text/javascript'>tableCheck();</script>\n","<input type='hidden' name='token' value='$T'>\n","</form>\n";}echo"<p><a href='".h(ME)."refresh=1'>".'Obnovit'."</a>\n";}page_footer("db");if($j)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(isset($_GET["import"]))$_GET["sql"]=$_GET["import"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect"||$_GET["script"]=="kill")){if(DB!=""||$_GET["refresh"]){restart_session();set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"]))redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());if(!set_schema($_GET["ns"])){header("HTTP/1.1 404 Not Found");page_header('SchÃ©ma'.": ".h($_GET["ns"]),'NesprÃ¡vnÃ© schÃ©ma.',true);page_footer("ns");exit;}}function
select($I,$h=null,$Pe=array()){global$v;$Sd=array();$u=array();$f=array();$Ra=array();$rh=array();$J=array();odd('');for($q=0;$K=$I->fetch_row();$q++){if(!$q){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($_d=0;$_d<count($K);$_d++){$m=$I->fetch_field();$C=$m->name;$Oe=$m->orgtable;$Ne=$m->orgname;$J[$m->table]=$Oe;if($Pe&&$v=="sql")$Sd[$_d]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Oe!=""){if(!isset($u[$Oe])){$u[$Oe]=array();foreach(indexes($Oe,$h)as$t){if($t["type"]=="PRIMARY"){$u[$Oe]=array_flip($t["columns"]);break;}}$f[$Oe]=$u[$Oe];}if(isset($f[$Oe][$Ne])){unset($f[$Oe][$Ne]);$u[$Oe][$Ne]=$_d;$Sd[$_d]=$Oe;}}if($m->charsetnr==63)$Ra[$_d]=true;$rh[$_d]=$m->type;echo"<th".($Oe!=""||$m->name!=$Ne?" title='".h(($Oe!=""?"$Oe.":"").$Ne)."'":"").">".h($C).($Pe?doc_link(array('sql'=>"explain-output.html#explain_".strtolower($C))):"");}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$w=>$X){if($X===null)$X="<i>NULL</i>";elseif($Ra[$w]&&!is_utf8($X))$X="<i>".lang(array('%d bajt','%d bajty','%d bajtÅ¯'),strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($rh[$w]==254)$X="<code>$X</code>";}if(isset($Sd[$w])&&!$f[$Sd[$w]]){if($Pe&&$v=="sql"){$Q=$K[array_search("table=",$Sd)];$z=$Sd[$w].urlencode($Pe[$Q]!=""?$Pe[$Q]:$Q);}else{$z="edit=".urlencode($Sd[$w]);foreach($u[$Sd[$w]]as$gb=>$_d)$z.="&where".urlencode("[".bracket_escape($gb)."]")."=".urlencode($K[$_d]);}$X="<a href='".h(ME.$z)."'>$X</a>";}echo"<td>$X";}}echo($q?"</table>":"<p class='message'>".'Å½Ã¡dnÃ© Å™Ã¡dky.')."\n";return$J;}function
referencable_primary($jg){$J=array();foreach(table_status('',true)as$Hg=>$Q){if($Hg!=$jg&&fk_support($Q)){foreach(fields($Hg)as$m){if($m["primary"]){if($J[$Hg]){unset($J[$Hg]);break;}$J[$Hg]=$m;}}}}return$J;}function
textarea($C,$Y,$L=10,$jb=80){global$v;echo"<textarea name='$C' rows='$L' cols='$jb' class='sqlarea jush-$v' spellcheck='false' wrap='off'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
edit_type($w,$m,$ib,$Lc=array()){global$_g,$rh,$yh,$De;$U=$m["type"];echo'<td><select name="',$w,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);"',on_help("getTarget(event).value",1),'>';if($U&&!isset($rh[$U])&&!isset($Lc[$U]))array_unshift($_g,$U);if($Lc)$_g['CizÃ­ klÃ­Äe']=$Lc;echo
optionlist($_g,$U),'</select>
<td><input name="',$w,'[length]" value="',h($m["length"]),'" size="3" onfocus="editingLengthFocus(this);"',(!$m["length"]&&preg_match('~var(char|binary)$~',$U)?" class='required'":""),' onchange="editingLengthChange(this);" onkeyup="this.onchange();"><td class="options">';echo"<select name='$w"."[collation]'".(preg_match('~(char|text|enum|set)$~',$U)?"":" class='hidden'").'><option value="">('.'porovnÃ¡vÃ¡nÃ­'.')'.optionlist($ib,$m["collation"]).'</select>',($yh?"<select name='$w"."[unsigned]'".(!$U||preg_match('~((^|[^o])int|float|double|decimal)$~',$U)?"":" class='hidden'").'><option>'.optionlist($yh,$m["unsigned"]).'</select>':''),(isset($m['on_update'])?"<select name='$w"."[on_update]'".($U=="timestamp"?"":" class='hidden'").'>'.optionlist(array(""=>"(".'PÅ™i zmÄ›nÄ›'.")","CURRENT_TIMESTAMP"),$m["on_update"]).'</select>':''),($Lc?"<select name='$w"."[on_delete]'".(preg_match("~`~",$U)?"":" class='hidden'")."><option value=''>(".'PÅ™i smazÃ¡nÃ­'.")".optionlist(explode("|",$De),$m["on_delete"])."</select> ":" ");}function
process_length($x){global$lc;return(preg_match("~^\\s*\\(?\\s*$lc(?:\\s*,\\s*$lc)*+\\s*\\)?\\s*\$~",$x)&&preg_match_all("~$lc~",$x,$Xd)?"(".implode(",",$Xd[0]).")":preg_replace('~^[0-9].*~','(\0)',preg_replace('~[^-0-9,+()[\]]~','',$x)));}function
process_type($m,$hb="COLLATE"){global$yh;return" $m[type]".process_length($m["length"]).(preg_match('~(^|[^o])int|float|double|decimal~',$m["type"])&&in_array($m["unsigned"],$yh)?" $m[unsigned]":"").(preg_match('~char|text|enum|set~',$m["type"])&&$m["collation"]?" $hb ".q($m["collation"]):"");}function
process_field($m,$ph){global$v;$Hb=$m["default"];return
array(idf_escape(trim($m["field"])),process_type($ph),($m["null"]?" NULL":" NOT NULL"),(isset($Hb)?" DEFAULT ".((preg_match('~time~',$m["type"])&&preg_match('~^CURRENT_TIMESTAMP$~i',$Hb))||($m["type"]=="bit"&&preg_match("~^([0-9]+|b'[0-1]+')\$~",$Hb))||($v=="pgsql"&&preg_match("~^[a-z]+\\(('[^']*')+\\)\$~",$Hb))?$Hb:q($Hb)):""),($m["type"]=="timestamp"&&$m["on_update"]?" ON UPDATE $m[on_update]":""),(support("comment")&&$m["comment"]!=""?" COMMENT ".q($m["comment"]):""),($m["auto_increment"]?auto_increment():null),);}function
type_class($U){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$w=>$X){if(preg_match("~$w|$X~",$U))return" class='$w'";}}function
edit_fields($n,$ib,$U="TABLE",$Lc=array(),$nb=false){global$g,$rd;echo'<thead><tr class="wrap">
';if($U=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($U=="TABLE"?'NÃ¡zev sloupce':'NÃ¡zev parametru'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>DÃ©lka
<td>Volby
';if($U=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>',doc_link(array('sql'=>"example-auto-increment.html",'sqlite'=>"autoinc.html",'pgsql'=>"datatype.html#DATATYPE-SERIAL",'mssql'=>"ms186775.aspx",)),'<td>VÃ½chozÃ­ hodnoty
',(support("comment")?"<td".($nb?"":" class='hidden'").">".'KomentÃ¡Å™':"");}echo'<td>',"<input type='image' class='icon' name='add[".(support("move_col")?0:count($n))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.1' alt='+' title='".'PÅ™idat dalÅ¡Ã­'."'>",'<script type="text/javascript">row_count = ',count($n),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($n
as$q=>$m){$q++;$Qe=$m[($_POST?"orig":"field")];$Pb=(isset($_POST["add"][$q-1])||(isset($m["field"])&&!$_POST["drop_col"][$q]))&&(support("drop_col")||$Qe=="");echo'<tr',($Pb?"":" style='display: none;'"),'>
',($U=="PROCEDURE"?"<td>".html_select("fields[$q][inout]",explode("|",$rd),$m["inout"]):""),'<th>';if($Pb){echo'<input name="fields[',$q,'][field]" value="',h($m["field"]),'" onchange="editingNameChange(this);',($m["field"]!=""||count($n)>1?'':' editingAddRow(this);" onkeyup="if (this.value) editingAddRow(this);'),'" maxlength="64" autocapitalize="off">';}echo'<input type="hidden" name="fields[',$q,'][orig]" value="',h($Qe),'">
';edit_type("fields[$q]",$m,$ib,$Lc);if($U=="TABLE"){echo'<td>',checkbox("fields[$q][null]",1,$m["null"],"","","block"),'<td><label class="block"><input type="radio" name="auto_increment_col" value="',$q,'"';if($m["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }"></label><td><?php
echo
checkbox("fields[$q][has_default]",1,$m["has_default"]),'<input name="fields[',$q,'][default]" value="',h($m["default"]),'" onkeyup="keyupChange.call(this);" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($nb?"":" class='hidden'")."><input name='fields[$q][comment]' value='".h($m["comment"])."' maxlength='".($g->server_info>=5.5?1024:255)."'>":"");}echo"<td>",(support("move_col")?"<input type='image' class='icon' name='add[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.1' alt='+' title='".'PÅ™idat dalÅ¡Ã­'."' onclick='return !editingAddRow(this, 1);'>&nbsp;"."<input type='image' class='icon' name='up[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=4.0.1' alt='^' title='".'PÅ™esunout nahoru'."'>&nbsp;"."<input type='image' class='icon' name='down[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=4.0.1' alt='v' title='".'PÅ™esunout dolÅ¯'."'>&nbsp;":""),($Qe==""||support("drop_col")?"<input type='image' class='icon' name='drop_col[$q]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.1' alt='x' title='".'Odebrat'."' onclick=\"return !editingRemoveRow(this, 'fields\$1[field]');\">":""),"\n";}}function
process_fields(&$n){ksort($n);$D=0;if($_POST["up"]){$Jd=0;foreach($n
as$w=>$m){if(key($_POST["up"])==$w){unset($n[$w]);array_splice($n,$Jd,0,array($m));break;}if(isset($m["field"]))$Jd=$D;$D++;}}elseif($_POST["down"]){$Nc=false;foreach($n
as$w=>$m){if(isset($m["field"])&&$Nc){unset($n[key($_POST["down"])]);array_splice($n,$D,0,array($Nc));break;}if(key($_POST["down"])==$w)$Nc=$m;$D++;}}elseif($_POST["add"]){$n=array_values($n);array_splice($n,key($_POST["add"]),0,array(array()));}elseif(!$_POST["drop_col"])return
false;return
true;}function
normalize_enum($A){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($A[0][0].$A[0][0],$A[0][0],substr($A[0],1,-1))),'\\'))."'";}function
grant($Tc,$xf,$f,$Ce){if(!$xf)return
true;if($xf==array("ALL PRIVILEGES","GRANT OPTION"))return($Tc=="GRANT"?queries("$Tc ALL PRIVILEGES$Ce WITH GRANT OPTION"):queries("$Tc ALL PRIVILEGES$Ce")&&queries("$Tc GRANT OPTION$Ce"));return
queries("$Tc ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$xf).$f).$Ce);}function
drop_create($Ub,$xb,$Vb,$Tg,$Xb,$_,$he,$fe,$ge,$_e,$se){if($_POST["drop"])query_redirect($Ub,$_,$he);elseif($_e=="")query_redirect($xb,$_,$ge);elseif($_e!=$se){$zb=queries($xb);queries_redirect($_,$fe,$zb&&queries($Ub));if($zb)queries($Vb);}else
queries_redirect($_,$fe,queries($Tg)&&queries($Xb)&&queries($Ub)&&queries($xb));}function
create_trigger($Ce,$K){global$v;$Yg=" $K[Timing] $K[Event]";return"CREATE TRIGGER ".idf_escape($K["Trigger"]).($v=="mssql"?$Ce.$Yg:$Yg.$Ce).rtrim(" $K[Type]\n$K[Statement]",";").";";}function
create_routine($Xf,$K){global$rd;$O=array();$n=(array)$K["fields"];ksort($n);foreach($n
as$m){if($m["field"]!="")$O[]=(preg_match("~^($rd)\$~",$m["inout"])?"$m[inout] ":"").idf_escape($m["field"]).process_type($m,"CHARACTER SET");}return"CREATE $Xf ".idf_escape(trim($K["name"]))." (".implode(", ",$O).")".(isset($_GET["function"])?" RETURNS".process_type($K["returns"],"CHARACTER SET"):"").($K["language"]?" LANGUAGE $K[language]":"").rtrim("\n$K[definition]",";").";";}function
remove_definer($H){return
preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$H);}function
format_foreign_key($o){global$De;return" FOREIGN KEY (".implode(", ",array_map('idf_escape',$o["source"])).") REFERENCES ".table($o["table"])." (".implode(", ",array_map('idf_escape',$o["target"])).")".(preg_match("~^($De)\$~",$o["on_delete"])?" ON DELETE $o[on_delete]":"").(preg_match("~^($De)\$~",$o["on_update"])?" ON UPDATE $o[on_update]":"");}function
tar_file($Fc,$dh){$J=pack("a100a8a8a8a12a12",$Fc,644,0,0,decoct($dh->size),decoct(time()));$ab=8*32;for($q=0;$q<strlen($J);$q++)$ab+=ord($J[$q]);$J.=sprintf("%06o",$ab)."\0 ";echo$J,str_repeat("\0",512-strlen($J));$dh->send();echo
str_repeat("\0",511-($dh->size+511)%512);}function
ini_bytes($qd){$X=ini_get($qd);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}function
doc_link($hf){global$v,$g;$Ah=array('sql'=>"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/",'sqlite'=>"http://www.sqlite.org/",'pgsql'=>"http://www.postgresql.org/docs/".substr($g->server_info,0,3)."/static/",'mssql'=>"http://msdn.microsoft.com/library/",'oracle'=>"http://download.oracle.com/docs/cd/B19306_01/server.102/b14200/",);return($hf[$v]?"<a href='$Ah[$v]$hf[$v]' target='_blank' rel='noreferrer'><sup>?</sup></a>":"");}$De="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";class
TmpFile{var$handler;var$size;function
TmpFile(){$this->handler=tmpfile();}function
write($sb){$this->size+=strlen($sb);fwrite($this->handler,$sb);}function
send(){fseek($this->handler,0);fpassthru($this->handler);fclose($this->handler);}}$lc="'(?:''|[^'\\\\]|\\\\.)*+'";$rd="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$a=$_GET["download"];$n=fields($a);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET,$n),1));exit;}elseif(isset($_GET["table"])){$a=$_GET["table"];$n=fields($a);if(!$n)$l=error();$R=table_status1($a,true);page_header(($n&&is_view($R)?'Pohled':'Tabulka').": ".h($a),$l);$b->selectLinks($R);$mb=$R["Comment"];if($mb!="")echo"<p>".'KomentÃ¡Å™'.": ".h($mb)."\n";if($n){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Sloupec'."<td>".'Typ'.(support("comment")?"<td>".'KomentÃ¡Å™':"")."</thead>\n";foreach($n
as$m){echo"<tr".odd()."><th>".h($m["field"]),"<td title='".h($m["collation"])."'>".h($m["full_type"]).($m["null"]?" <i>NULL</i>":"").($m["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($m["default"])?" [<b>".h($m["default"])."</b>]":""),(support("comment")?"<td>".nbsp($m["comment"]):""),"\n";}echo"</table>\n";}if(!is_view($R)){if(support("indexes")){echo"<h3 id='indexes'>".'Indexy'."</h3>\n";$u=indexes($a);if($u){echo"<table cellspacing='0'>\n";foreach($u
as$C=>$t){ksort($t["columns"]);$uf=array();foreach($t["columns"]as$w=>$X)$uf[]="<i>".h($X)."</i>".($t["lengths"][$w]?"(".$t["lengths"][$w].")":"").($t["descs"][$w]?" DESC":"");echo"<tr title='".h($C)."'><th>$t[type]<td>".implode(", ",$uf)."\n";}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'indexes='.urlencode($a).'">'.'PozmÄ›nit indexy'."</a>\n";}if(fk_support($R)){echo"<h3 id='foreign-keys'>".'CizÃ­ klÃ­Äe'."</h3>\n";$Lc=foreign_keys($a);if($Lc){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'CÃ­l'."<td>".'PÅ™i smazÃ¡nÃ­'."<td>".'PÅ™i zmÄ›nÄ›'."<td>&nbsp;</thead>\n";foreach($Lc
as$C=>$o){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$o["source"]))."</i>","<td><a href='".h($o["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($o["db"]),ME):($o["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($o["ns"]),ME):ME))."table=".urlencode($o["table"])."'>".($o["db"]!=""?"<b>".h($o["db"])."</b>.":"").($o["ns"]!=""?"<b>".h($o["ns"])."</b>.":"").h($o["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$o["target"]))."</i>)","<td>".nbsp($o["on_delete"])."\n","<td>".nbsp($o["on_update"])."\n",'<td><a href="'.h(ME.'foreign='.urlencode($a).'&name='.urlencode($C)).'">'.'ZmÄ›nit'.'</a>';}echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'foreign='.urlencode($a).'">'.'PÅ™idat cizÃ­ klÃ­Ä'."</a>\n";}}if(support(is_view($R)?"view_trigger":"trigger")){echo"<h3 id='triggers'>".'Triggery'."</h3>\n";$oh=triggers($a);if($oh){echo"<table cellspacing='0'>\n";foreach($oh
as$w=>$X)echo"<tr valign='top'><td>$X[0]<td>$X[1]<th>".h($w)."<td><a href='".h(ME.'trigger='.urlencode($a).'&name='.urlencode($w))."'>".'ZmÄ›nit'."</a>\n";echo"</table>\n";}echo'<p class="links"><a href="'.h(ME).'trigger='.urlencode($a).'">'.'PÅ™idat trigger'."</a>\n";}}elseif(isset($_GET["schema"])){page_header('SchÃ©ma databÃ¡ze',"",array(),h(DB.($_GET["ns"]?".$_GET[ns]":"")));$Jg=array();$Kg=array();$C="adminer_schema";$ea=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$C-".DB]?"$C-".DB:$C)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ea,$Xd,PREG_SET_ORDER);foreach($Xd
as$q=>$A){$Jg[$A[1]]=array($A[2],$A[3]);$Kg[]="\n\t'".js_escape($A[1])."': [ $A[2], $A[3] ]";}$fh=0;$Oa=-1;$dg=array();$Lf=array();$Nd=array();foreach(table_status('',true)as$Q=>$R){if(is_view($R))continue;$mf=0;$dg[$Q]["fields"]=array();foreach(fields($Q)as$C=>$m){$mf+=1.25;$m["pos"]=$mf;$dg[$Q]["fields"][$C]=$m;}$dg[$Q]["pos"]=($Jg[$Q]?$Jg[$Q]:array($fh,0));foreach($b->foreignKeys($Q)as$X){if(!$X["db"]){$Ld=$Oa;if($Jg[$Q][1]||$Jg[$X["table"]][1])$Ld=min(floatval($Jg[$Q][1]),floatval($Jg[$X["table"]][1]))-1;else$Oa-=.1;while($Nd[(string)$Ld])$Ld-=.0001;$dg[$Q]["references"][$X["table"]][(string)$Ld]=array($X["source"],$X["target"]);$Lf[$X["table"]][$Q][(string)$Ld]=$X["target"];$Nd[(string)$Ld]=true;}}$fh=max($fh,$dg[$Q]["pos"][0]+2.5+$mf);}echo'<div id="schema" style="height: ',$fh,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$Kg)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$fh,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($dg
as$C=>$Q){echo"<div class='table' style='top: ".$Q["pos"][0]."em; left: ".$Q["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($Q["fields"]as$m){$X='<span'.type_class($m["type"]).' title="'.h($m["full_type"].($m["null"]?" NULL":'')).'">'.h($m["field"]).'</span>';echo"<br>".($m["primary"]?"<i>$X</i>":$X);}foreach((array)$Q["references"]as$Qg=>$Mf){foreach($Mf
as$Ld=>$If){$Md=$Ld-$Jg[$C][1];$q=0;foreach($If[0]as$sg)echo"\n<div class='references' title='".h($Qg)."' id='refs$Ld-".($q++)."' style='left: $Md"."em; top: ".$Q["fields"][$sg]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Md)."em;'></div></div>";}}foreach((array)$Lf[$C]as$Qg=>$Mf){foreach($Mf
as$Ld=>$f){$Md=$Ld-$Jg[$C][1];$q=0;foreach($f
as$Pg)echo"\n<div class='references' title='".h($Qg)."' id='refd$Ld-".($q++)."' style='left: $Md"."em; top: ".$Q["fields"][$Pg]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=4.0.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Md)."em;'></div></div>";}}echo"\n</div>\n";}foreach($dg
as$C=>$Q){foreach((array)$Q["references"]as$Qg=>$Mf){foreach($Mf
as$Ld=>$If){$le=$fh;$be=-10;foreach($If[0]as$w=>$sg){$nf=$Q["pos"][0]+$Q["fields"][$sg]["pos"];$of=$dg[$Qg]["pos"][0]+$dg[$Qg]["fields"][$If[1][$w]]["pos"];$le=min($le,$nf,$of);$be=max($be,$nf,$of);}echo"<div class='references' id='refl$Ld' style='left: $Ld"."em; top: $le"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($be-$le)."em;'></div></div>\n";}}}echo'</div>
<p class="links"><a href="',h(ME."schema=".urlencode($ea)),'" id="schema-link">TrvalÃ½ odkaz</a>
';}elseif(isset($_GET["dump"])){$a=$_GET["dump"];if($_POST&&!$l){$vb="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$w)$vb.="&$w=".urlencode($_POST[$w]);cookie("adminer_export",substr($vb,1));$S=array_flip((array)$_POST["tables"])+array_flip((array)$_POST["data"]);$yc=dump_headers((count($S)==1?key($S):DB),(DB==""||count($S)>1));$wd=preg_match('~sql~',$_POST["format"]);if($wd)echo"-- Adminer $ia ".$Tb[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
".($_POST["data_style"]?"SET foreign_key_checks = 0;
SET time_zone = ".q(substr(preg_replace('~^[^-]~','+\0',$g->result("SELECT TIMEDIFF(NOW(), UTC_TIMESTAMP)")),0,6)).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';
":"")."
");$Ag=$_POST["db_style"];$j=array(DB);if(DB==""){$j=$_POST["databases"];if(is_string($j))$j=explode("\n",rtrim(str_replace("\r","",$j),"\n"));}foreach((array)$j
as$k){$b->dumpDatabase($k);if($g->select_db($k)){if($wd&&preg_match('~CREATE~',$Ag)&&($xb=$g->result("SHOW CREATE DATABASE ".idf_escape($k),1))){if($Ag=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($k).";\n";echo"$xb;\n";}if($wd){if($Ag)echo
use_sql($k).";\n\n";$Ve="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Xf){foreach(get_rows("SHOW $Xf STATUS WHERE Db = ".q($k),null,"-- ")as$K)$Ve.=($Ag!='DROP+CREATE'?"DROP $Xf IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE $Xf ".idf_escape($K["Name"]),2)).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K)$Ve.=($Ag!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"").remove_definer($g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3)).";;\n\n";}if($Ve)echo"DELIMITER ;;\n\n$Ve"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Mh=array();foreach(table_status('',true)as$C=>$R){$Q=(DB==""||in_array($C,(array)$_POST["tables"]));$Ab=(DB==""||in_array($C,(array)$_POST["data"]));if($Q||$Ab){if($yc=="tar"){$dh=new
TmpFile;ob_start(array($dh,'write'),1e5);}$b->dumpTable($C,($Q?$_POST["table_style"]:""),(is_view($R)?2:0));if(is_view($R))$Mh[]=$C;elseif($Ab){$n=fields($C);$b->dumpData($C,$_POST["data_style"],"SELECT *".convert_fields($n,$n)." FROM ".table($C));}if($wd&&$_POST["triggers"]&&$Q&&($oh=trigger_sql($C,$_POST["table_style"])))echo"\nDELIMITER ;;\n$oh\nDELIMITER ;\n";if($yc=="tar"){ob_end_flush();tar_file((DB!=""?"":"$k/")."$C.csv",$dh);}elseif($wd)echo"\n";}}foreach($Mh
as$Lh)$b->dumpTable($Lh,$_POST["table_style"],1);if($yc=="tar")echo
pack("x512");}}}if($wd)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header('Export',$l,($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),h(DB));echo'
<form action="" method="post">
<table cellspacing="0">
';$Eb=array('','USE','DROP+CREATE','CREATE');$Lg=array('','DROP+CREATE','CREATE');$Bb=array('','TRUNCATE+INSERT','INSERT');if($v=="sql")$Bb[]='INSERT+UPDATE';parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".'VÃ½stup'."<td>".html_select("output",$b->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".'FormÃ¡t'."<td>".html_select("format",$b->dumpFormat(),$K["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'DatabÃ¡ze'."<td>".html_select('db_style',$Eb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],'Procedury a funkce'):"").(support("event")?checkbox("events",1,$K["events"],'UdÃ¡losti'):"")),"<tr><th>".'Tabulky'."<td>".html_select('table_style',$Lg,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$K["triggers"],'Triggery'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Bb,$K["data_style"]),'</table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="',$T,'">

<table cellspacing="0">
';$rf=array();if(DB!=""){$Za=($a!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label class='block'><input type='checkbox' id='check-tables'$Za onclick='formCheck(this, /^tables\\[/);'>".'Tabulky'."</label>","<th style='text-align: right;'><label class='block'>".'Data'."<input type='checkbox' id='check-data'$Za onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Mh="";$Mg=tables_list();foreach($Mg
as$C=>$U){$qf=preg_replace('~_.*~','',$C);$Za=($a==""||$a==(substr($a,-1)=="%"?"$qf%":$C));$uf="<tr><td>".checkbox("tables[]",$C,$Za,$C,"checkboxClick(event, this); formUncheck('check-tables');","block");if($U!==null&&!preg_match('~table~i',$U))$Mh.="$uf\n";else
echo"$uf<td align='right'><label class='block'><span id='Rows-".h($C)."'></span>".checkbox("data[]",$C,$Za,"","checkboxClick(event, this); formUncheck('check-data');")."</label>\n";$rf[$qf]++;}echo$Mh;if($Mg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}else{echo"<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases'".($a==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'DatabÃ¡ze'."</label></thead>\n";$j=$b->databases();if($j){foreach($j
as$k){if(!information_schema($k)){$qf=preg_replace('~_.*~','',$k);echo"<tr><td>".checkbox("databases[]",$k,$a==""||$a=="$qf%",$k,"formUncheck('check-databases');","block")."\n";$rf[$qf]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$Hc=true;foreach($rf
as$w=>$X){if($w!=""&&$X>1){echo($Hc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$w%")."'>".h($w)."</a>";$Hc=false;}}}elseif(isset($_GET["privileges"])){page_header('OprÃ¡vnÄ›nÃ­');$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$Tc=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($Tc?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".'UÅ¾ivatel'."<th>".'Server'."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.'Upravit'."</a>\n";if(!$Tc||DB!="")echo"<tr".odd()."><td><input name='user' autocapitalize='off'><td><input name='host' value='localhost' autocapitalize='off'><td><input type='submit' value='".'Upravit'."'>\n";echo"</table>\n","</form>\n",'<p class="links"><a href="'.h(ME).'user=">'.'VytvoÅ™it uÅ¾ivatele'."</a>";}elseif(isset($_GET["sql"])){if(!$l&&$_POST["export"]){dump_headers("sql");$b->dumpTable("","");$b->dumpData("","table",$_POST["query"]);exit;}restart_session();$dd=&get_session("queries");$cd=&$dd[DB];if(!$l&&$_POST["clear"]){$cd=array();redirect(remove_from_uri("history"));}page_header((isset($_GET["import"])?'Import':'SQL pÅ™Ã­kaz'),$l);if(!$l&&$_POST){$Pc=false;if(!isset($_GET["import"]))$H=$_POST["query"];elseif($_POST["webfile"]){$Pc=@fopen((file_exists("adminer.sql")?"adminer.sql":"compress.zlib://adminer.sql.gz"),"rb");$H=($Pc?fread($Pc,1e6):false);}else$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$Af=$H.(preg_match("~;[ \t\r\n]*\$~",$H)?"":";");if(!$cd||reset(end($cd))!=$Af){restart_session();$cd[]=array($Af,time());set_session("queries",$dd);stop_session();}}$tg="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";$Jb=";";$D=0;$hc=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$lb=0;$nc=array();$Rd=0;$af='[\'"'.($v=="sql"?'`#':($v=="sqlite"?'`[':($v=="mssql"?'[':''))).']|/\\*|-- |$'.($v=="pgsql"?'|\\$[^$]*\\$':'');$gh=microtime(true);parse_str($_COOKIE["adminer_export"],$va);$Zb=$b->dumpFormat();unset($Zb["sql"]);while($H!=""){if(!$D&&preg_match("~^$tg*DELIMITER\\s+(\\S+)~i",$H,$A)){$Jb=$A[1];$H=substr($H,strlen($A[0]));}else{preg_match('('.preg_quote($Jb)."\\s*|$af)",$H,$A,PREG_OFFSET_CAPTURE,$D);list($Nc,$mf)=$A[0];if(!$Nc&&$Pc&&!feof($Pc))$H.=fread($Pc,1e5);else{if(!$Nc&&rtrim($H)=="")break;$D=$mf+strlen($Nc);if($Nc&&rtrim($Nc)!=$Jb){while(preg_match('('.($Nc=='/*'?'\\*/':($Nc=='['?']':(preg_match('~^-- |^#~',$Nc)?"\n":preg_quote($Nc)."|\\\\."))).'|$)s',$H,$A,PREG_OFFSET_CAPTURE,$D)){$bg=$A[0][0];if(!$bg&&$Pc&&!feof($Pc))$H.=fread($Pc,1e5);else{$D=$A[0][1]+strlen($bg);if($bg[0]!="\\")break;}}}else{$hc=false;$Af=substr($H,0,$mf);$lb++;$uf="<pre id='sql-$lb'><code class='jush-$v'>".shorten_utf8(trim($Af),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$uf;ob_flush();flush();}$wg=microtime(true);if($g->multi_query($Af)&&is_object($h)&&preg_match("~^$tg*USE\\b~isU",$Af))$h->query($Af);do{$I=$g->store_result();$ic=microtime(true);$Wg=" <span class='time'>(".format_time($wg,$ic).")</span>".(strlen($Af)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Af))."'>".'Upravit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$uf:""),"<p class='error'>".'Chyba v dotazu'.($g->errno?" ($g->errno)":"").": ".error()."\n";$nc[]=" <a href='#sql-$lb'>$lb</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$Pe=select($I,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($I->num_rows?lang(array('%d Å™Ã¡dek','%d Å™Ã¡dky','%d Å™Ã¡dkÅ¯'),$I->num_rows):"").$Wg;$r="export-$lb";$xc=", <a href='#$r' onclick=\"return !toggle('$r');\">".'Export'."</a><span id='$r' class='hidden'>: ".html_select("output",$b->dumpOutput(),$va["output"])." ".html_select("format",$Zb,$va["format"])."<input type='hidden' name='query' value='".h($Af)."'>"." <input type='submit' name='export' value='".'Export'."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($tg|\\()*SELECT\\b~isU",$Af)&&($wc=explain($h,$Af))){$r="explain-$lb";echo", <a href='#$r' onclick=\"return !toggle('$r');\">EXPLAIN</a>$xc","<div id='$r' class='hidden'>\n";select($wc,$h,$Pe);echo"</div>\n";}else
echo$xc;echo"</form>\n";}}else{if(preg_match("~^$tg*(CREATE|DROP|ALTER)$tg+(DATABASE|SCHEMA)\\b~isU",$Af)){restart_session();set_session("dbs",null);stop_session();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(array('PÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku, byl zmÄ›nÄ›n %d zÃ¡znam.','PÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku, byly zmÄ›nÄ›ny %d zÃ¡znamy.','PÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku, bylo zmÄ›nÄ›no %d zÃ¡znamÅ¯.'),$g->affected_rows)."$Wg\n";}$wg=$ic;}while($g->next_result());$Rd+=substr_count($Af.$Nc,"\n");$H=substr($H,$D);$D=0;}}}}if($hc)echo"<p class='message'>".'Å½Ã¡dnÃ© pÅ™Ã­kazy k vykonÃ¡nÃ­.'."\n";elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d pÅ™Ã­kaz probÄ›hl v poÅ™Ã¡dku.','%d pÅ™Ã­kazy probÄ›hly v poÅ™Ã¡dku.','%d pÅ™Ã­kazÅ¯ probÄ›hlo v poÅ™Ã¡dku.'),$lb-count($nc))," <span class='time'>(".format_time($gh,microtime(true)).")</span>\n";}elseif($nc&&$lb>1)echo"<p class='error'>".'Chyba v dotazu'.": ".implode("",$nc)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';$tc="<input type='submit' value='".'ProvÃ©st'."' title='Ctrl+Enter'>";if(!isset($_GET["import"])){$Af=$_GET["sql"];if($_POST)$Af=$_POST["query"];elseif($_GET["history"]=="all")$Af=$cd;elseif($_GET["history"]!="")$Af=$cd[$_GET["history"]][0];echo"<p>";textarea("query",$Af,20);echo($_POST?"":"<script type='text/javascript'>focus(document.getElementsByTagName('textarea')[0]);</script>\n"),"<p>$tc\n";}else{echo"<fieldset><legend>".'NahrÃ¡nÃ­ souboru'."</legend><div>",(ini_bool("file_uploads")?'<input type="file" name="sql_file[]" multiple> (&lt; '.ini_get("upload_max_filesize").'B)':'NahrÃ¡vÃ¡nÃ­ souborÅ¯ nenÃ­ povoleno.'),"\n$tc","</div></fieldset>\n","<fieldset><legend>".'Ze serveru'."</legend><div>",sprintf('Soubor %s na webovÃ©m serveru',"<code>adminer.sql".(extension_loaded("zlib")?"[.gz]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustit soubor'.'">',"</div></fieldset>\n","<p>";}echo
checkbox("error_stops",1,($_POST?$_POST["error_stops"]:isset($_GET["import"])),'Zastavit pÅ™i chybÄ›')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Zobrazit pouze chyby')."\n","<input type='hidden' name='token' value='$T'>\n";if(!isset($_GET["import"])&&$cd){print_fieldset("history",'Historie',$_GET["history"]!="");for($X=end($cd);$X;$X=prev($cd)){$w=key($cd);list($Af,$Wg)=$X;echo'<a href="'.h(ME."sql=&history=$w").'">'.'Upravit'."</a> <span class='time' title='".@date('Y-m-d',$Wg)."'>".@date("H:i:s",$Wg)."</span> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$Af)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'VyÄistit'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Upravit vÅ¡e'."</a>\n","</div></fieldset>\n";}echo'</form>
';}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$n=fields($a);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$n):""):where($_GET,$n));$zh=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($n
as$C=>$m){if(!isset($m["privileges"][$zh?"update":"insert"])||$b->fieldName($m)=="")unset($n[$C]);}if($_POST&&!$l&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"])$_=($zh?null:$_SERVER["REQUEST_URI"]);elseif(!preg_match('~^.+&select=.+$~',$_))$_=ME."select=".urlencode($a);$u=indexes($a);$uh=unique_array($_GET["where"],$u);$Df="\nWHERE $Z";if(isset($_POST["delete"]))queries_redirect($_,'PoloÅ¾ka byla smazÃ¡na.',$Sb->delete($a,$Df,!$uh));else{$O=array();foreach($n
as$C=>$m){$X=process_input($m);if($X!==false&&$X!==null)$O[idf_escape($C)]=$X;}if($zh){if(!$O)redirect($_);queries_redirect($_,'PoloÅ¾ka byla aktualizovÃ¡na.',$Sb->update($a,$O,$Df,!$uh));if(is_ajax()){page_headers();page_messages($l);exit;}}else{$I=$Sb->insert($a,$O);$Kd=($I?last_id():0);queries_redirect($_,sprintf('PoloÅ¾ka%s byla vloÅ¾ena.',($Kd?" $Kd":"")),$I);}}}$Hg=$b->tableName(table_status1($a,true));page_header(($zh?'Upravit':'VloÅ¾it'),$l,array("select"=>array($a,$Hg)),$Hg);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($n
as$C=>$m){if(isset($m["privileges"]["select"])){$Ea=convert_field($m);if($_POST["clone"]&&$m["auto_increment"])$Ea="''";if($v=="sql"&&preg_match("~enum|set~",$m["type"]))$Ea="1*".idf_escape($C);$M[]=($Ea?"$Ea AS ":"").idf_escape($C);}}$K=array();if(!support("table"))$M=array("*");if($M){$I=$Sb->select($a,$M,array($Z),$M,array(),(isset($_GET["select"])?2:1),0);$K=$I->fetch_assoc();if(isset($_GET["select"])&&(!$K||$I->fetch_assoc()))$K=null;}}if(!support("table")&&!$n){$r=($v=="mongo"?"_id":"itemName()");if(!$Z){$K=$Sb->select($a,array("*"),$Z,array("*"),array(),1,0);$K=($K?$K->fetch_assoc():array($r=>""));}if($K){foreach($K
as$w=>$X){if(!$Z)$K[$w]=null;$n[$w]=array("field"=>$w,"null"=>($w!=$r),"auto_increment"=>($w==$r));}}}if($K===false)echo"<p class='error'>".'Å½Ã¡dnÃ© Å™Ã¡dky.'."\n";echo'
<div id="message"></div>

<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$n)echo"<p class='error'>".'NemÃ¡te oprÃ¡vnÄ›nÃ­ editovat tuto tabulku.'."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($n
as$C=>$m){echo"<tr><th>".$b->fieldName($m);$Hb=$_GET["set"][bracket_escape($C)];if($Hb===null){$Hb=$m["default"];if($m["type"]=="bit"&&preg_match("~^b'([01]*)'\$~",$Hb,$Nf))$Hb=$Nf[1];}$Y=($K!==null?($K[$C]!=""&&$v=="sql"&&preg_match("~enum|set~",$m["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$zh&&$m["auto_increment"]?"":(isset($_GET["select"])?false:$Hb)));if(!$_POST["save"]&&is_string($Y))$Y=$b->editVal($Y,$m);$p=($_POST["save"]?(string)$_POST["function"][$C]:($zh&&$m["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if(preg_match("~time~",$m["type"])&&$Y=="CURRENT_TIMESTAMP"){$Y="";$p="now";}input($m,$Y,$p);echo"\n";}if(!support("table"))echo"<tr>"."<th><input name='field_keys[]' value='".h($_POST["field_keys"][0])."'>"."<td class='function'>".html_select("field_funs[]",$b->editFunctions(array()),$_POST["field_funs"][0])."<td><input name='field_vals[]' value='".h($_POST["field_vals"][0])."'>"."\n";echo"</table>\n";}echo'<p>
';if($n){echo"<input type='submit' value='".'UloÅ¾it'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($zh?'UloÅ¾it a pokraÄovat v editaci'."' onclick='return !ajaxForm(this.form, \"".'UklÃ¡dÃ¡ se'.'...", this)':'UloÅ¾it a vloÅ¾it dalÅ¡Ã­')."' title='Ctrl+Shift+Enter'>\n";}echo($zh?"<input type='submit' name='delete' value='".'Smazat'."'".confirm().">\n":($_POST||!$n?"":"<script type='text/javascript'>focus(document.getElementById('form').getElementsByTagName('td')[1].firstChild);</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["create"])){$a=$_GET["create"];$bf=array();foreach(array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST')as$w)$bf[$w]=$w;$Kf=referencable_primary($a);$Lc=array();foreach($Kf
as$Hg=>$m)$Lc[str_replace("`","``",$Hg)."`".str_replace("`","``",$m["field"])]=$Hg;$Se=array();$R=array();if($a!=""){$Se=fields($a);$R=table_status($a);if(!$R)$l='Å½Ã¡dnÃ© tabulky.';}$K=$_POST;$K["fields"]=(array)$K["fields"];if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;if($_POST&&!process_fields($K["fields"])&&!$l){if($_POST["drop"])queries_redirect(substr(ME,0,-1),'Tabulka byla odstranÄ›na.',drop_tables(array($a)));else{$n=array();$Ba=array();$Bh=false;$Jc=array();ksort($K["fields"]);$Re=reset($Se);$za=" FIRST";foreach($K["fields"]as$w=>$m){$o=$Lc[$m["type"]];$ph=($o!==null?$Kf[$o]:$m);if($m["field"]!=""){if(!$m["has_default"])$m["default"]=null;if($w==$K["auto_increment_col"])$m["auto_increment"]=true;$zf=process_field($m,$ph);$Ba[]=array($m["orig"],$zf,$za);if($zf!=process_field($Re,$Re)){$n[]=array($m["orig"],$zf,$za);if($m["orig"]!=""||$za)$Bh=true;}if($o!==null)$Jc[idf_escape($m["field"])]=($a!=""&&$v!="sqlite"?"ADD":" ").format_foreign_key(array('table'=>$Lc[$m["type"]],'source'=>array($m["field"]),'target'=>array($ph["field"]),'on_delete'=>$m["on_delete"],));$za=" AFTER ".idf_escape($m["field"]);}elseif($m["orig"]!=""){$Bh=true;$n[]=array($m["orig"]);}if($m["orig"]!=""){$Re=next($Se);if(!$Re)$za="";}}$df="";if($bf[$K["partition_by"]]){$ef=array();if($K["partition_by"]=='RANGE'||$K["partition_by"]=='LIST'){foreach(array_filter($K["partition_names"])as$w=>$X){$Y=$K["partition_values"][$w];$ef[]="\n  PARTITION ".idf_escape($X)." VALUES ".($K["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$df.="\nPARTITION BY $K[partition_by]($K[partition])".($ef?" (".implode(",",$ef)."\n)":($K["partitions"]?" PARTITIONS ".(+$K["partitions"]):""));}elseif(support("partitioning")&&preg_match("~partitioned~",$R["Create_options"]))$df.="\nREMOVE PARTITIONING";$B='Tabulka byla zmÄ›nÄ›na.';if($a==""){cookie("adminer_engine",$K["Engine"]);$B='Tabulka byla vytvoÅ™ena.';}$C=trim($K["name"]);queries_redirect(ME.(support("table")?"table=":"select=").urlencode($C),$B,alter_table($a,$C,($v=="sqlite"&&($Bh||$Jc)?$Ba:$n),$Jc,$K["Comment"],($K["Engine"]&&$K["Engine"]!=$R["Engine"]?$K["Engine"]:""),($K["Collation"]&&$K["Collation"]!=$R["Collation"]?$K["Collation"]:""),($K["Auto_increment"]!=""?+$K["Auto_increment"]:""),$df));}}page_header(($a!=""?'PozmÄ›nit tabulku':'VytvoÅ™it tabulku'),$l,array("table"=>$a),h($a));if(!$_POST){$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($rh["int"])?"int":(isset($rh["integer"])?"integer":"")))),"partition_names"=>array(""),);if($a!=""){$K=$R;$K["name"]=$a;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($Se
as$m){$m["has_default"]=isset($m["default"]);$K["fields"][]=$m;}if(support("partitioning")){$Qc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($a);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Qc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$ef=get_key_vals("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Qc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");$ef[""]="";$K["partition_names"]=array_keys($ef);$K["partition_values"]=array_values($ef);}}}$ib=collations();$kc=engines();foreach($kc
as$jc){if(!strcasecmp($jc,$K["Engine"])){$K["Engine"]=$jc;break;}}echo'
<form action="" method="post" id="form">
<p>
';if(support("columns")||$a==""){echo'NÃ¡zev tabulky: <input name="name" maxlength="64" value="',h($K["name"]),'" autocapitalize="off">
';if($a==""&&!$_POST){?><script type='text/javascript'>focus(document.getElementById('form')['name']);</script><?php }echo($kc?"<select name='Engine' onchange='helpClose();'".on_help("getTarget(event).value",1).">".optionlist(array(""=>"(".'ÃºloÅ¾iÅ¡tÄ›'.")")+$kc,$K["Engine"])."</select>":""),' ',($ib&&!preg_match("~sqlite|mssql~",$v)?html_select("Collation",array(""=>"(".'porovnÃ¡vÃ¡nÃ­'.")")+$ib,$K["Collation"]):""),' <input type="submit" value="UloÅ¾it">
';}echo'
';if(support("columns")){echo'<table cellspacing="0" id="edit-fields" class="nowrap">
';$nb=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$nb){foreach($K["fields"]as$m){if($m["comment"]!=""){$nb=true;break;}}}edit_fields($K["fields"],$ib,"TABLE",$Lc,$nb);echo'</table>
<p>
Auto Increment: <input type="number" name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
',checkbox("defaults",1,true,'VÃ½chozÃ­ hodnoty',"columnShow(this.checked, 5)","jsonly");if(!$_POST["defaults"]){echo'<script type="text/javascript">editingHideDefaults()</script>';}echo(support("comment")?"<label><input type='checkbox' name='comments' value='1' class='jsonly' onclick=\"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();\"".($nb?" checked":"").">".'KomentÃ¡Å™'."</label>".' <input name="Comment" id="Comment" value="'.h($K["Comment"]).'" maxlength="'.($g->server_info>=5.5?2048:60).'"'.($nb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="UloÅ¾it">
';}echo'
';if($a!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}if(support("partitioning")){$cf=preg_match('~RANGE|LIST~',$K["partition_by"]);print_fieldset("partition",'RozdÄ›lit podle',$K["partition_by"]);echo'<p>
',"<select name='partition_by' onchange='partitionByChange(this);'".on_help("getTarget(event).value.replace(/./, 'PARTITION BY \$&')",1).">".optionlist(array(""=>"")+$bf,$K["partition_by"])."</select>",'(<input name="partition" value="',h($K["partition"]),'">)
OddÃ­ly: <input type="number" name="partitions" class="size',($cf||!$K["partition_by"]?" hidden":""),'" value="',h($K["partitions"]),'">
<table cellspacing="0" id="partition-table"',($cf?"":" class='hidden'"),'>
<thead><tr><th>NÃ¡zev oddÃ­lu<th>Hodnoty</thead>
';foreach($K["partition_names"]as$w=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($w==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').' autocapitalize="off">','<td><input name="partition_values[]" value="'.h($K["partition_values"][$w]).'">';}echo'</table>
</div></fieldset>
';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["indexes"])){$a=$_GET["indexes"];$md=array("PRIMARY","UNIQUE","INDEX");$R=table_status($a,true);if(preg_match('~MyISAM|M?aria'.($g->server_info>=5.6?'|InnoDB':'').'~i',$R["Engine"]))$md[]="FULLTEXT";$u=indexes($a);$sf=array();if($v=="mongo"){$sf=$u["_id_"];unset($md[0]);unset($u["_id_"]);}$K=$_POST;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["drop_col"]){$c=array();foreach($K["indexes"]as$t){$C=$t["name"];if(in_array($t["type"],$md)){$f=array();$Pd=array();$Lb=array();$O=array();ksort($t["columns"]);foreach($t["columns"]as$w=>$e){if($e!=""){$x=$t["lengths"][$w];$Kb=$t["descs"][$w];$O[]=idf_escape($e).($x?"(".(+$x).")":"").($Kb?" DESC":"");$f[]=$e;$Pd[]=($x?$x:null);$Lb[]=$Kb;}}if($f){$uc=$u[$C];if($uc){ksort($uc["columns"]);ksort($uc["lengths"]);ksort($uc["descs"]);if($t["type"]==$uc["type"]&&array_values($uc["columns"])===$f&&(!$uc["lengths"]||array_values($uc["lengths"])===$Pd)&&array_values($uc["descs"])===$Lb){unset($u[$C]);continue;}}$c[]=array($t["type"],$C,"(".implode(", ",$O).")");}}}foreach($u
as$C=>$uc)$c[]=array($uc["type"],$C,"DROP");if(!$c)redirect(ME."table=".urlencode($a));queries_redirect(ME."table=".urlencode($a),'Indexy byly zmÄ›nÄ›ny.',alter_indexes($a,$c));}page_header('Indexy',$l,array("table"=>$a),h($a));$n=array_keys(fields($a));if($_POST["add"]){foreach($K["indexes"]as$w=>$t){if($t["columns"][count($t["columns"])]!="")$K["indexes"][$w]["columns"][]="";}$t=end($K["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}if(!$K){foreach($u
as$w=>$t){$u[$w]["name"]=$w;$u[$w]["columns"][]="";}$u[]=array("columns"=>array(1=>""));$K["indexes"]=$u;}?>

<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr>
<th>Typ indexu
<th><input type="submit" style="left: -1000px; position: absolute;">Sloupec (dÃ©lka)
<th>NÃ¡zev
<th><noscript><input type='image' class='icon' name='add[0]' src='" . h(preg_replace("~\\?.*~", "", ME)) . "?file=plus.gif&amp;version=4.0.1' alt='+' title='PÅ™idat dalÅ¡Ã­'></noscript>&nbsp;
</thead>
<?php
if($sf){echo"<tr><td>PRIMARY<td>";foreach($sf["columns"]as$w=>$e){echo"<select disabled>".optionlist($n,$e)."</select>","<label><input disabled type='checkbox'>".'sestupnÄ›'."</label> ";}echo"<td><td>\n";}$_d=1;foreach($K["indexes"]as$t){if(!$_POST["drop_col"]||$_d!=key($_POST["drop_col"])){echo"<tr><td>".html_select("indexes[$_d][type]",array(-1=>"")+$md,$t["type"],($_d==count($K["indexes"])?"indexesAddRow(this);":1)),"<td>";ksort($t["columns"]);$q=1;foreach($t["columns"]as$w=>$e){echo"<span>".html_select("indexes[$_d][columns][$q]",array(-1=>"")+$n,$e,($q==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($v=="sql"?"":$_GET["indexes"]."_")."');"),($v=="sql"||$v=="mssql"?"<input type='number' name='indexes[$_d][lengths][$q]' class='size' value='".h($t["lengths"][$w])."'>":""),($v!="sql"?checkbox("indexes[$_d][descs][$q]",1,$t["descs"][$w],'sestupnÄ›'):"")," </span>";$q++;}echo"<td><input name='indexes[$_d][name]' value='".h($t["name"])."' autocapitalize='off'>\n","<td><input type='image' class='icon' name='drop_col[$_d]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=4.0.1' alt='x' title='".'Odebrat'."' onclick=\"return !editingRemoveRow(this, 'indexes\$1[type]');\">\n";}$_d++;}echo'</table>
<p>
<input type="submit" value="UloÅ¾it">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){$K=$_POST;if($_POST&&!$l&&!isset($_POST["add_x"])){restart_session();$C=trim($K["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'DatabÃ¡ze byla odstranÄ›na.',drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~\bdb=[^&]*&~','',ME)."db=".urlencode($C),'DatabÃ¡ze byla pÅ™ejmenovÃ¡na.',rename_database($C,$K["collation"]));}else{$j=explode("\n",str_replace("\r","",$C));$Bg=true;$Jd="";foreach($j
as$k){if(count($j)==1||$k!=""){if(!create_database($k,$K["collation"]))$Bg=false;$Jd=$k;}}queries_redirect(ME."db=".urlencode($Jd),'DatabÃ¡ze byla vytvoÅ™ena.',$Bg);}}else{if(!$K["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(preg_match('~^[a-z0-9_]+$~i',$K["collation"])?" COLLATE $K[collation]":""),substr(ME,0,-1),'DatabÃ¡ze byla zmÄ›nÄ›na.');}}page_header(DB!=""?'PozmÄ›nit databÃ¡zi':'VytvoÅ™it databÃ¡zi',$l,array(),h(DB));$ib=collations();$C=DB;if($_POST)$C=$K["name"];elseif(DB!="")$K["collation"]=db_collation(DB,$ib);elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$Tc){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Tc,$A)&&$A[1]){$C=stripcslashes(idf_unescape("`$A[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input name="name" id="name" value="'.h($C).'" maxlength="64" autocapitalize="off">')."\n".($ib?html_select("collation",array(""=>"(".'porovnÃ¡vÃ¡nÃ­'.")")+$ib,$K["collation"]).doc_link(array('sql'=>"charset-charsets.html",'mssql'=>"ms187963.aspx",)):"");?>
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="UloÅ¾it">
<?php
if(DB!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' class='icon' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=4.0.1' alt='+' title='".'PÅ™idat dalÅ¡Ã­'."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["scheme"])){$K=$_POST;if($_POST&&!$l){$z=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"])query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$z,'SchÃ©ma bylo odstranÄ›no.');else{$C=trim($K["name"]);$z.=urlencode($C);if($_GET["ns"]=="")query_redirect("CREATE SCHEMA ".idf_escape($C),$z,'SchÃ©ma bylo vytvoÅ™eno.');elseif($_GET["ns"]!=$C)query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($C),$z,'SchÃ©ma bylo zmÄ›nÄ›no.');else
redirect($z);}}page_header($_GET["ns"]!=""?'PozmÄ›nit schÃ©ma':'VytvoÅ™it schÃ©ma',$l);if(!$K)$K["name"]=$_GET["ns"];echo'
<form action="" method="post">
<p><input name="name" id="name" value="',h($K["name"]);?>" autocapitalize="off">
<script type='text/javascript'>focus(document.getElementById('name'));</script>
<input type="submit" value="UloÅ¾it">
<?php
if($_GET["ns"]!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$da=$_GET["call"];page_header('Zavolat'.": ".h($da),$l);$Xf=routine($da,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$kd=array();$Ve=array();foreach($Xf["fields"]as$q=>$m){if(substr($m["inout"],-3)=="OUT")$Ve[$q]="@".idf_escape($m["field"])." AS ".idf_escape($m["field"]);if(!$m["inout"]||substr($m["inout"],0,2)=="IN")$kd[]=$q;}if(!$l&&$_POST){$Wa=array();foreach($Xf["fields"]as$w=>$m){if(in_array($w,$kd)){$X=process_input($m);if($X===false)$X="''";if(isset($Ve[$w]))$g->query("SET @".idf_escape($m["field"])." = $X");}$Wa[]=(isset($Ve[$w])?"@".idf_escape($m["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($da)."(".implode(", ",$Wa).")";echo"<p><code class='jush-$v'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".'Upravit'."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(array('Procedura byla zavolÃ¡na, byl zmÄ›nÄ›n %d zÃ¡znam.','Procedura byla zavolÃ¡na, byly zmÄ›nÄ›ny %d zÃ¡znamy.','Procedura byla zavolÃ¡na, bylo zmÄ›nÄ›no %d zÃ¡znamÅ¯.'),$g->affected_rows)."\n";}while($g->next_result());if($Ve)select($g->query("SELECT ".implode(", ",$Ve)));}}echo'
<form action="" method="post">
';if($kd){echo"<table cellspacing='0'>\n";foreach($kd
as$w){$m=$Xf["fields"][$w];$C=$m["field"];echo"<tr><th>".$b->fieldName($m);$Y=$_POST["fields"][$C];if($Y!=""){if($m["type"]=="enum")$Y=+$Y;if($m["type"]=="set")$Y=array_sum($Y);}input($m,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Zavolat">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$a=$_GET["foreign"];$C=$_GET["name"];$K=$_POST;if($_POST&&!$l&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){$B=($_POST["drop"]?'CizÃ­ klÃ­Ä byl odstranÄ›n.':($C!=""?'CizÃ­ klÃ­Ä byl zmÄ›nÄ›n.':'CizÃ­ klÃ­Ä byl vytvoÅ™en.'));$_=ME."table=".urlencode($a);$K["source"]=array_filter($K["source"],'strlen');ksort($K["source"]);$Pg=array();foreach($K["source"]as$w=>$X)$Pg[$w]=$K["target"][$w];$K["target"]=$Pg;if($v=="sqlite")queries_redirect($_,$B,recreate_table($a,$a,array(),array(),array(" $C"=>($_POST["drop"]?"":" ".format_foreign_key($K)))));else{$c="ALTER TABLE ".table($a);$Ub="\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($C);if($_POST["drop"])query_redirect($c.$Ub,$_,$B);else{query_redirect($c.($C!=""?"$Ub,":"")."\nADD".format_foreign_key($K),$_,$B);$l='ZdrojovÃ© a cÃ­lovÃ© sloupce musÃ­ mÃ­t stejnÃ½ datovÃ½ typ, nad cÃ­lovÃ½mi sloupci musÃ­ bÃ½t definovÃ¡n index a odkazovanÃ¡ data musÃ­ existovat.'."<br>$l";}}}page_header('CizÃ­ klÃ­Ä',$l,array("table"=>$a),h($a));if($_POST){ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($C!=""){$Lc=foreign_keys($a);$K=$Lc[$C];$K["source"][]="";}else{$K["table"]=$a;$K["source"]=array("");}$sg=array_keys(fields($a));$Pg=($a===$K["table"]?$sg:array_keys(fields($K["table"])));$Jf=array_keys(array_filter(table_status('',true),'fk_support'));echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo'CÃ­lovÃ¡ tabulka:
',html_select("table",$Jf,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="ZmÄ›nit"></noscript>
<table cellspacing="0">
<thead><tr><th>Zdroj<th>CÃ­l</thead>
';$_d=0;foreach($K["source"]as$w=>$X){echo"<tr>","<td>".html_select("source[".(+$w)."]",array(-1=>"")+$sg,$X,($_d==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$w)."]",$Pg,$K["target"][$w]);$_d++;}echo'</table>
<p>
PÅ™i smazÃ¡nÃ­: ',html_select("on_delete",array(-1=>"")+explode("|",$De),$K["on_delete"]),' PÅ™i zmÄ›nÄ›: ',html_select("on_update",array(-1=>"")+explode("|",$De),$K["on_update"]),doc_link(array('sql'=>"innodb-foreign-key-constraints.html",'pgsql'=>"sql-createtable.html#SQL-CREATETABLE-REFERENCES",'mssql'=>"ms174979.aspx",'oracle'=>"clauses002.htm#sthref2903",)),'<p>
<input type="submit" value="UloÅ¾it">
<noscript><p><input type="submit" name="add" value="PÅ™idat sloupec"></noscript>
';}if($C!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$a=$_GET["view"];$K=$_POST;if($_POST&&!$l){$C=trim($K["name"]);$Ea=" AS\n$K[select]";$_=ME."table=".urlencode($C);$B='Pohled byl zmÄ›nÄ›n.';if(!$_POST["drop"]&&$a==$C&&$v!="sqlite")query_redirect(($v=="mssql"?"ALTER":"CREATE OR REPLACE")." VIEW ".table($C).$Ea,$_,$B);else{$Rg=$C."_adminer_".uniqid();drop_create("DROP VIEW ".table($a),"CREATE VIEW ".table($C).$Ea,"DROP VIEW ".table($C),"CREATE VIEW ".table($Rg).$Ea,"DROP VIEW ".table($Rg),($_POST["drop"]?substr(ME,0,-1):$_),'Pohled byl odstranÄ›n.',$B,'Pohled byl vytvoÅ™en.',$a,$C);}}if(!$_POST&&$a!=""){$K=view($a);$K["name"]=$a;if(!$l)$l=$g->error;}page_header(($a!=""?'PozmÄ›nit pohled':'VytvoÅ™it pohled'),$l,array("table"=>$a),h($a));echo'
<form action="" method="post">
<p>NÃ¡zev: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("select",$K["select"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$ud=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$yg=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");$K=$_POST;if($_POST&&!$l){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),'UdÃ¡lost byla odstranÄ›na.');elseif(in_array($K["INTERVAL_FIELD"],$ud)&&isset($yg[$K["STATUS"]])){$cg="\nON SCHEDULE ".($K["INTERVAL_VALUE"]?"EVERY ".q($K["INTERVAL_VALUE"])." $K[INTERVAL_FIELD]".($K["STARTS"]?" STARTS ".q($K["STARTS"]):"").($K["ENDS"]?" ENDS ".q($K["ENDS"]):""):"AT ".q($K["STARTS"]))." ON COMPLETION".($K["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?'UdÃ¡lost byla zmÄ›nÄ›na.':'UdÃ¡lost byla vytvoÅ™ena.'),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$cg.($aa!=$K["EVENT_NAME"]?"\nRENAME TO ".idf_escape($K["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($K["EVENT_NAME"]).$cg)."\n".$yg[$K["STATUS"]]." COMMENT ".q($K["EVENT_COMMENT"]).rtrim(" DO\n$K[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?'PozmÄ›nit udÃ¡lost'.": ".h($aa):'VytvoÅ™it udÃ¡lost'),$l);if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>NÃ¡zev<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64" autocapitalize="off">
<tr><th title="datetime">ZaÄÃ¡tek<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th title="datetime">Konec<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>KaÅ¾dÃ½ch<td><input type="number" name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" class="size"> ',html_select("INTERVAL_FIELD",$ud,$K["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$yg,$K["STATUS"]),'<tr><th>KomentÃ¡Å™<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",'Po dokonÄenÃ­ zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($aa!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$da=$_GET["procedure"];$Xf=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$K=$_POST;$K["fields"]=(array)$K["fields"];if($_POST&&!process_fields($K["fields"])&&!$l){$Rg="$K[name]_adminer_".uniqid();drop_create("DROP $Xf ".idf_escape($da),create_routine($Xf,$K),"DROP $Xf ".idf_escape($K["name"]),create_routine($Xf,array("name"=>$Rg)+$K),"DROP $Xf ".idf_escape($Rg),substr(ME,0,-1),'Procedura byla odstranÄ›na.','Procedura byla zmÄ›nÄ›na.','Procedura byla vytvoÅ™ena.',$da,$K["name"]);}page_header(($da!=""?(isset($_GET["function"])?'ZmÄ›nit funkci':'ZmÄ›nit proceduru').": ".h($da):(isset($_GET["function"])?'VytvoÅ™it funkci':'VytvoÅ™it proceduru')),$l);if(!$_POST&&$da!=""){$K=routine($da,$Xf);$K["name"]=$da;}$ib=get_vals("SHOW CHARACTER SET");sort($ib);$Yf=routine_languages();echo'
<form action="" method="post" id="form">
<p>NÃ¡zev: <input name="name" value="',h($K["name"]),'" maxlength="64" autocapitalize="off">
',($Yf?'Jazyk'.": ".html_select("language",$Yf,$K["language"]):""),'<input type="submit" value="UloÅ¾it">
<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$ib,$Xf);if(isset($_GET["function"])){echo"<tr><td>".'NÃ¡vratovÃ½ typ';edit_type("returns",$K["returns"],$ib);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($da!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["sequence"])){$fa=$_GET["sequence"];$K=$_POST;if($_POST&&!$l){$z=substr(ME,0,-1);$C=trim($K["name"]);if($_POST["drop"])query_redirect("DROP SEQUENCE ".idf_escape($fa),$z,'Sekvence byla odstranÄ›na.');elseif($fa=="")query_redirect("CREATE SEQUENCE ".idf_escape($C),$z,'Sekvence byla vytvoÅ™ena.');elseif($fa!=$C)query_redirect("ALTER SEQUENCE ".idf_escape($fa)." RENAME TO ".idf_escape($C),$z,'Sekvence byla zmÄ›nÄ›na.');else
redirect($z);}page_header($fa!=""?'PozmÄ›nit sekvenci'.": ".h($fa):'VytvoÅ™it sekvenci',$l);if(!$K)$K["name"]=$fa;echo'
<form action="" method="post">
<p><input name="name" value="',h($K["name"]),'" autocapitalize="off">
<input type="submit" value="UloÅ¾it">
';if($fa!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["type"])){$ga=$_GET["type"];$K=$_POST;if($_POST&&!$l){$z=substr(ME,0,-1);if($_POST["drop"])query_redirect("DROP TYPE ".idf_escape($ga),$z,'Typ byl odstranÄ›n.');else
query_redirect("CREATE TYPE ".idf_escape(trim($K["name"]))." $K[as]",$z,'Typ byl vytvoÅ™en.');}page_header($ga!=""?'PozmÄ›nit typ'.": ".h($ga):'VytvoÅ™it typ',$l);if(!$K)$K["as"]="AS ";echo'
<form action="" method="post">
<p>
';if($ga!="")echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";else{echo"<input name='name' value='".h($K['name'])."' autocapitalize='off'>\n";textarea("as",$K["as"]);echo"<p><input type='submit' value='".'UloÅ¾it'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$a=$_GET["trigger"];$C=$_GET["name"];$nh=trigger_options();$lh=array("INSERT","UPDATE","DELETE");$K=(array)trigger($C)+array("Trigger"=>$a."_bi");if($_POST){if(!$l&&in_array($_POST["Timing"],$nh["Timing"])&&in_array($_POST["Event"],$lh)&&in_array($_POST["Type"],$nh["Type"])){$Ce=" ON ".table($a);$Ub="DROP TRIGGER ".idf_escape($C).($v=="pgsql"?$Ce:"");$_=ME."table=".urlencode($a);if($_POST["drop"])query_redirect($Ub,$_,'Trigger byl odstranÄ›n.');else{if($C!="")queries($Ub);queries_redirect($_,($C!=""?'Trigger byl zmÄ›nÄ›n.':'Trigger byl vytvoÅ™en.'),queries(create_trigger($Ce,$_POST)));if($C!="")queries(create_trigger($Ce,$K+array("Type"=>reset($nh["Type"]))));}}$K=$_POST;}page_header(($C!=""?'ZmÄ›nit trigger'.": ".h($C):'VytvoÅ™it trigger'),$l,array("table"=>$a));echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>ÄŒas<td>',html_select("Timing",$nh["Timing"],$K["Timing"],"if (/^".preg_quote($a,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($a)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>UdÃ¡lost<td>',html_select("Event",$lh,$K["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$nh["Type"],$K["Type"]),'</table>
<p>NÃ¡zev: <input name="Trigger" value="',h($K["Trigger"]),'" maxlength="64" autocapitalize="off">
<p>';textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="UloÅ¾it">
';if($C!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ha=$_GET["user"];$xf=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$tb)$xf[$tb][$K["Privilege"]]=$K["Comment"];}$xf["Server Admin"]+=$xf["File access on server"];$xf["Databases"]["Create routine"]=$xf["Procedures"]["Create routine"];unset($xf["Procedures"]["Create routine"]);$xf["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$xf["Columns"][$X]=$xf["Tables"][$X];unset($xf["Server Admin"]["Usage"]);foreach($xf["Tables"]as$w=>$X)unset($xf["Databases"][$w]);$re=array();if($_POST){foreach($_POST["objects"]as$w=>$X)$re[$X]=(array)$re[$X]+(array)$_POST["grants"][$w];}$Uc=array();$Ae="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ha)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$A)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$A[1],$Xd,PREG_SET_ORDER)){foreach($Xd
as$X){if($X[1]!="USAGE")$Uc["$A[2]$X[2]"][$X[1]]=true;if(preg_match('~ WITH GRANT OPTION~',$K[0]))$Uc["$A[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$A))$Ae=$A[1];}}if($_POST&&!$l){$Be=(isset($_GET["host"])?q($ha)."@".q($_GET["host"]):"''");if($_POST["drop"])query_redirect("DROP USER $Be",ME."privileges=",'UÅ¾ivatel byl odstranÄ›n.');else{$te=q($_POST["user"])."@".q($_POST["host"]);$ff=$_POST["pass"];if($ff!=''&&!$_POST["hashed"]){$ff=$g->result("SELECT PASSWORD(".q($ff).")");$l=!$ff;}$zb=false;if(!$l){if($Be!=$te){$zb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $te IDENTIFIED BY PASSWORD ".q($ff));$l=!$zb;}elseif($ff!=$Ae)queries("SET PASSWORD FOR $te = ".q($ff));}if(!$l){$Uf=array();foreach($re
as$xe=>$Tc){if(isset($_GET["grant"]))$Tc=array_filter($Tc);$Tc=array_keys($Tc);if(isset($_GET["grant"]))$Uf=array_diff(array_keys(array_filter($re[$xe],'strlen')),$Tc);elseif($Be==$te){$ze=array_keys((array)$Uc[$xe]);$Uf=array_diff($ze,$Tc);$Tc=array_diff($Tc,$ze);unset($Uc[$xe]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$xe,$A)&&(!grant("REVOKE",$Uf,$A[2]," ON $A[1] FROM $te")||!grant("GRANT",$Tc,$A[2]," ON $A[1] TO $te"))){$l=true;break;}}}if(!$l&&isset($_GET["host"])){if($Be!=$te)queries("DROP USER $Be");elseif(!isset($_GET["grant"])){foreach($Uc
as$xe=>$Uf){if(preg_match('~^(.+)(\\(.*\\))?$~U',$xe,$A))grant("REVOKE",array_keys($Uf),$A[2]," ON $A[1] FROM $te");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'UÅ¾ivatel byl zmÄ›nÄ›n.':'UÅ¾ivatel byl vytvoÅ™en.'),!$l);if($zb)$g->query("DROP USER $te");}}page_header((isset($_GET["host"])?'UÅ¾ivatel'.": ".h("$ha@$_GET[host]"):'VytvoÅ™it uÅ¾ivatele'),$l,array("privileges"=>array('','OprÃ¡vnÄ›nÃ­')));if($_POST){$K=$_POST;$Uc=$re;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$Ae;if($Ae!="")$K["hashed"]=true;$Uc[(DB==""||$Uc?"":idf_escape(addcslashes(DB,"%_\\"))).".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($K["host"]),'" autocapitalize="off">
<tr><th>UÅ¾ivatel<td><input name="user" maxlength="16" value="',h($K["user"]),'" autocapitalize="off">
<tr><th>Heslo<td><input name="pass" id="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],'ZahaÅ¡ovanÃ©',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'>".'OprÃ¡vnÄ›nÃ­'.doc_link(array('sql'=>"grant.html#priv_level"));$q=0;foreach($Uc
as$xe=>$Tc){echo'<th>'.($xe!="*.*"?"<input name='objects[$q]' value='".h($xe)."' size='10' autocapitalize='off'>":"<input type='hidden' name='objects[$q]' value='*.*' size='10'>*.*");$q++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'DatabÃ¡ze',"Tables"=>'Tabulka',"Columns"=>'Sloupec',"Procedures"=>'Procedura',)as$tb=>$Kb){foreach((array)$xf[$tb]as$wf=>$mb){echo"<tr".odd()."><td".($Kb?">$Kb<td":" colspan='2'").' lang="en" title="'.h($mb).'">'.h($wf);$q=0;foreach($Uc
as$xe=>$Tc){$C="'grants[$q][".h(strtoupper($wf))."]'";$Y=$Tc[strtoupper($wf)];if($tb=="Server Admin"&&$xe!=(isset($Uc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".'Povolit'."<option value='0'".($Y=="0"?" selected":"").">".'ZakÃ¡zat'."</select>";else
echo"<td align='center'><label class='block'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($wf=="All privileges"?" id='grants-$q-all'":($wf=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$q-all');\""))."></label>";$q++;}}}echo"</table>\n",'<p>
<input type="submit" value="UloÅ¾it">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$l){$Gd=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$Gd++;}queries_redirect(ME."processlist=",lang(array('Byl ukonÄen %d proces.','Byly ukonÄeny %d procesy.','Bylo ukonÄeno %d procesÅ¯.'),$Gd),$Gd||!$_POST["kill"]);}page_header('Seznam procesÅ¯',$l);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" ondblclick="tableClick(event, true);" class="nowrap checkable">
';$q=-1;foreach(process_list()as$q=>$K){if(!$q){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"");foreach($K
as$w=>$X)echo"<th>$w".doc_link(array('sql'=>"show-processlist.html#processlist_".strtolower($w),'pgsql'=>"monitoring-stats.html#PG-STAT-ACTIVITY-VIEW",'oracle'=>"../b14237/dynviews_2088.htm",));echo"</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$w=>$X)echo"<td>".(($v=="sql"&&$w=="Info"&&preg_match("~Query|Killed~",$K["Command"])&&$X!="")||($v=="pgsql"&&$w=="current_query"&&$X!="<IDLE>")||($v=="oracle"&&$w=="sql_text"&&$X!="")?"<code class='jush-$v'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.'Klonovat'.'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($q+1)."/".sprintf('%d celkem',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'UkonÄit'."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status1($a);$u=indexes($a);$n=fields($a);$Lc=column_foreign_keys($a);$ye="";if($R["Oid"]){$ye=($v=="sqlite"?"rowid":"oid");$u[]=array("type"=>"PRIMARY","columns"=>array($ye));}parse_str($_COOKIE["adminer_import"],$wa);$Vf=array();$f=array();$Vg=null;foreach($n
as$w=>$m){$C=$b->fieldName($m);if(isset($m["privileges"]["select"])&&$C!=""){$f[$w]=html_entity_decode(strip_tags($C),ENT_QUOTES);if(is_shortable($m))$Vg=$b->selectLengthProcess();}$Vf+=$m["privileges"];}list($M,$Vc)=$b->selectColumnsProcess($f,$u);$vd=count($Vc)<count($M);$Z=$b->selectSearchProcess($n,$u);$Me=$b->selectOrderProcess($n,$u);$y=$b->selectLimitProcess();$Qc=($M?implode(", ",$M):"*".($ye?", $ye":"")).convert_fields($f,$n,$M)."\nFROM ".table($a);$Wc=($Vc&&$vd?"\nGROUP BY ".implode(", ",$Vc):"").($Me?"\nORDER BY ".implode(", ",$Me):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$vh=>$K){$Ea=convert_field($n[key($K)]);$M=array($Ea?$Ea:idf_escape(key($K)));$Z[]=where_check($vh,$n);$J=$Sb->select($a,$M,$Z,$M,array(),1,0);if($J)echo
reset($J->fetch_row());}exit;}if($_POST&&!$l){$Qh=$Z;if(!$_POST["all"]&&is_array($_POST["check"]))$Qh[]="((".implode(") OR (",array_map('where_check',$_POST["check"]))."))";$Qh=($Qh?"\nWHERE ".implode(" AND ",$Qh):"");$sf=$xh=null;foreach($u
as$t){if($t["type"]=="PRIMARY"){$sf=array_flip($t["columns"]);$xh=($M?$sf:array());break;}}foreach((array)$xh
as$w=>$X){if(in_array(idf_escape($w),$M))unset($xh[$w]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$xh===array())$H="SELECT $Qc$Qh$Wc";else{$th=array();foreach($_POST["check"]as$X)$th[]="(SELECT".limit($Qc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n).$Wc,1).")";$H=implode(" UNION ALL ",$th);}$b->dumpData($a,"table",$H);exit;}if(!$b->selectEmailProcess($Z,$Lc)){if($_POST["save"]||$_POST["delete"]){$I=true;$xa=0;$O=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($n[$C]);if($X!==null&&($_POST["clone"]||$X!==false))$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));}}if($_POST["delete"]||$O){if($_POST["clone"])$H="INTO ".table($a)." (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($a);if($_POST["all"]||($xh===array()&&is_array($_POST["check"]))||$vd){$I=($_POST["delete"]?$Sb->delete($a,$Qh):($_POST["clone"]?queries("INSERT $H$Qh"):$Sb->update($a,$O,$Qh)));$xa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$Ph="\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$n);$I=($_POST["delete"]?$Sb->delete($a,$Ph,1):($_POST["clone"]?queries("INSERT".limit1($H,$Ph)):$Sb->update($a,$O,$Ph)));if(!$I)break;$xa+=$g->affected_rows;}}}$B=lang(array('Byl ovlivnÄ›n %d zÃ¡znam.','Byly ovlivnÄ›ny %d zÃ¡znamy.','Bylo ovlivnÄ›no %d zÃ¡znamÅ¯.'),$xa);if($_POST["clone"]&&$I&&$xa==1){$Kd=last_id();if($Kd)$B=sprintf('PoloÅ¾ka%s byla vloÅ¾ena.'," $Kd");}queries_redirect(remove_from_uri($_POST["all"]&&$_POST["delete"]?"page":""),$B,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$l='Ctrl+kliknÄ›te na polÃ­Äko, kterÃ© chcete zmÄ›nit.';else{$I=true;$xa=0;foreach($_POST["val"]as$vh=>$K){$O=array();foreach($K
as$w=>$X){$w=bracket_escape($w,1);$O[idf_escape($w)]=(preg_match('~char|text~',$n[$w]["type"])||$X!=""?$b->processInput($n[$w],$X):"NULL");}$I=$Sb->update($a,$O," WHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($vh,$n),!($vd||$xh===array())," ");if(!$I)break;$xa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivnÄ›n %d zÃ¡znam.','Byly ovlivnÄ›ny %d zÃ¡znamy.','Bylo ovlivnÄ›no %d zÃ¡znamÅ¯.'),$xa),$I);}}elseif(!is_string($Ec=get_file("csv_file",true)))$l=upload_error($Ec);elseif(!preg_match('~~u',$Ec))$l='Soubor musÃ­ bÃ½t v kÃ³dovÃ¡nÃ­ UTF-8.';else{cookie("adminer_import","output=".urlencode($wa["output"])."&format=".urlencode($_POST["separator"]));$I=true;$jb=array_keys($n);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Ec,$Xd);$xa=count($Xd[0]);$Sb->begin();$kg=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));$L=array();foreach($Xd[0]as$w=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$kg]*)$kg~",$X.$kg,$Yd);if(!$w&&!array_diff($Yd[1],$jb)){$jb=$Yd[1];$xa--;}else{$O=array();foreach($Yd[1]as$q=>$gb)$O[idf_escape($jb[$q])]=($gb==""&&$n[$jb[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$gb))));$L[]=$O;}}$I=(!$L||$Sb->insertUpdate($a,$L,$sf));if($I)$Sb->commit();queries_redirect(remove_from_uri("page"),lang(array('Byl importovÃ¡n %d zÃ¡znam.','Byly importovÃ¡ny %d zÃ¡znamy.','Bylo importovÃ¡no %d zÃ¡znamÅ¯.'),$xa),$I);$Sb->rollback();}}}$Hg=$b->tableName($R);if(is_ajax()){page_headers();ob_start();}else
page_header('Vypsat'.": $Hg",$l);$O=null;if(isset($Vf["insert"])||!support("table")){$O="";foreach((array)$_GET["where"]as$X){if(count($Lc[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!preg_match('~[_%]~',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$b->selectLinks($R,$O);if(!$f&&support("table"))echo"<p class='error'>".'NepodaÅ™ilo se vypsat tabulku'.($n?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($M,$f);$b->selectSearchPrint($Z,$f,$u);$b->selectOrderPrint($Me,$f,$u);$b->selectLimitPrint($y);$b->selectLengthPrint($Vg);$b->selectActionPrint($u);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Oc=$g->result(count_rows($a,$Z,$vd,$Vc));$E=floor(max(0,$Oc-1)/$y);}$hg=$M;if(!$hg){$hg[]="*";if($ye)$hg[]=$ye;}$ub=convert_fields($f,$n,$M);if($ub)$hg[]=substr($ub,2);$I=$Sb->select($a,$hg,$Z,$Vc,$Me,$y,$E,true);if(!$I)echo"<p class='error'>".error()."\n";else{if($v=="mssql"&&$E)$I->seek($y*$E);$gc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$v=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last"&&+$y&&$Vc&&$vd&&$v=="sql")$Oc=$g->result(" SELECT FOUND_ROWS()");if(!$L)echo"<p class='message'>".'Å½Ã¡dnÃ© Å™Ã¡dky.'."\n";else{$Na=$b->backwardKeys($a,$Hg);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Vc&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'ZmÄ›nit'."</a>");$qe=array();$Sc=array();reset($M);$Ff=1;foreach($L[0]as$w=>$X){if($w!=$ye){$X=$_GET["columns"][key($M)];$m=$n[$M?($X?$X["col"]:current($M)):$w];$C=($m?$b->fieldName($m,$Ff):($X["fun"]?"*":$w));if($C!=""){$Ff++;$qe[$w]=$C;$e=idf_escape($w);$gd=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($w);$Kb="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($gd.($Me[0]==$e||$Me[0]==$w||(!$Me&&$vd&&$Vc[0]==$e)?$Kb:'')).'">';echo
apply_sql_function($X["fun"],$C)."</a>";echo"<span class='column hidden'>","<a href='".h($gd.$Kb)."' title='".'sestupnÄ›'."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($w)).'\'); return false;" title="'.'Vyhledat'.'" class="text jsonly"> =</a>';echo"</span>";}$Sc[$w]=$X["fun"];next($M);}}$Pd=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$w=>$X)$Pd[$w]=max($Pd[$w],min(40,strlen(utf8_decode($X))));}}echo($Na?"<th>".'Vztahy':"")."</thead>\n";if(is_ajax()){if($y%2==1&&$E%2==1)odd();ob_end_clean();}foreach($b->rowDescriptions($L,$Lc)as$pe=>$K){$uh=unique_array($L[$pe],$u);if(!$uh){$uh=array();foreach($L[$pe]as$w=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$w))$uh[$w]=$X;}}$vh="";foreach($uh
as$w=>$X){if(($v=="sql"||$v=="pgsql")&&strlen($X)>64){$w="MD5(".(strpos($w,'(')?$w:idf_escape($w)).")";$X=md5($X);}$vh.="&".($X!==null?urlencode("where[".bracket_escape($w)."]")."=".urlencode($X):"null%5B%5D=".urlencode($w));}echo"<tr".odd().">".(!$Vc&&$M?"":"<td>".checkbox("check[]",substr($vh,1),in_array(substr($vh,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($vd||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$vh)."'>".'upravit'."</a>"));foreach($K
as$w=>$X){if(isset($qe[$w])){$m=$n[$w];if($X!=""&&(!isset($gc[$w])||$gc[$w]!=""))$gc[$w]=(is_mail($X)?$qe[$w]:"");$z="";if(preg_match('~blob|bytea|raw|file~',$m["type"])&&$X!="")$z=ME.'download='.urlencode($a).'&field='.urlencode($w).$vh;if(!$z&&$X!==null){foreach((array)$Lc[$w]as$o){if(count($Lc[$w])==1||end($o["source"])==$w){$z="";foreach($o["source"]as$q=>$sg)$z.=where_link($q,$o["target"][$q],$L[$pe][$sg]);$z=($o["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($o["db"]),ME):ME).'select='.urlencode($o["table"]).$z;if(count($o["source"])==1)break;}}}if($w=="COUNT(*)"){$z=ME."select=".urlencode($a);$q=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$uh))$z.=where_link($q++,$W["col"],$W["val"],$W["op"]);}foreach($uh
as$Ad=>$W)$z.=where_link($q++,$Ad,$W);}$X=select_value($X,$z,$m,$Vg);$r=h("val[$vh][".bracket_escape($w)."]");$Y=$_POST["val"][$vh][bracket_escape($w)];$cc=!is_array($K[$w])&&is_utf8($X)&&$L[$pe][$w]==$K[$w]&&!$Sc[$w];$Ug=preg_match('~text|lob~',$m["type"]);if(($_GET["modify"]&&$cc)||$Y!==null){$Yc=h($Y!==null?$Y:$K[$w]);echo"<td>".($Ug?"<textarea name='$r' cols='30' rows='".(substr_count($K[$w],"\n")+1)."'>$Yc</textarea>":"<input name='$r' value='$Yc' size='$Pd[$w]'>");}else{$Ud=strpos($X,"<i>...</i>");echo"<td id='$r' onclick=\"selectClick(this, event, ".($Ud?2:($Ug?1:0)).($cc?"":", '".h('Ke zmÄ›nÄ› tÃ©to hodnoty pouÅ¾ijte odkaz upravit.')."'").");\">$X";}}}if($Na)echo"<td>";$b->backwardKeysPrint($Na,$L[$pe]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n";}if(($L||$E)&&!is_ajax()){$rc=true;if($_GET["page"]!="last"){if(!+$y)$Oc=count($L);elseif($v!="sql"||!$vd){$Oc=($vd?false:found_rows($R,$Z));if($Oc<max(1e4,2*($E+1)*$y))$Oc=reset(slow_query(count_rows($a,$Z,$vd,$Vc)));else$rc=false;}}if(+$y&&($Oc===false||$Oc>$y||$E)){echo"<p class='pages'>";$ae=($Oc===false?$E+(count($L)>=$y?2:1):floor(($Oc-1)/$y));if($v!="simpledb"){echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'StrÃ¡nka'."', '".($E+1)."'), event); return false;\">".'StrÃ¡nka'."</a>:",pagination(0,$E).($E>5?" ...":"");for($q=max(1,$E-4);$q<min($ae,$E+5);$q++)echo
pagination($q,$E);if($ae>0){echo($E+5<$ae?" ...":""),($rc&&$Oc!==false?pagination($ae,$E):" <a href='".h(remove_from_uri("page")."&page=last")."' title='~$ae'>".'poslednÃ­'."</a>");}echo(($Oc===false?count($L)+1:$Oc-$E*$y)>$y?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$y).', \''.'NahrÃ¡vÃ¡ se'.'...\');">'.'NahrÃ¡t dalÅ¡Ã­ data'.'</a>':'');}else{echo'StrÃ¡nka'.":",pagination(0,$E).($E>1?" ...":""),($E?pagination($E,$E):""),($ae>$E?pagination($E+1,$E).($ae>$E+1?" ...":""):"");}}echo"<p class='count'>\n",($Oc!==false?"(".($rc?"":"~ ").lang(array('%d Å™Ã¡dek','%d Å™Ã¡dky','%d Å™Ã¡dkÅ¯'),$Oc).") ":"");$Qb=($rc?"":"~ ").$Oc;echo
checkbox("all",1,0,'celÃ½ vÃ½sledek',"var checked = formChecked(this, /check/); selectCount('selected', this.checked ? '$Qb' : checked); selectCount('selected2', this.checked || !checked ? '$Qb' : checked);")."\n";if($b->selectCommandPrint()){echo'<fieldset',($_GET["modify"]?'':' class="jsonly"'),'><legend>ZmÄ›nit</legend><div>
<input type="submit" value="UloÅ¾it"',($_GET["modify"]?'':' title="'.'Ctrl+kliknÄ›te na polÃ­Äko, kterÃ© chcete zmÄ›nit.'.'"'),'>
</div></fieldset>
<fieldset><legend>OznaÄenÃ© <span id="selected"></span></legend><div>
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat"',confirm(),'>
</div></fieldset>
';}$Mc=$b->dumpFormat();foreach((array)$_GET["columns"]as$e){if($e["fun"]){unset($Mc['sql']);break;}}if($Mc){print_fieldset("export",'Export'." <span id='selected2'></span>");$We=$b->dumpOutput();echo($We?html_select("output",$We,$wa["output"])." ":""),html_select("format",$Mc,$wa["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}echo(!$Vc&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($b->selectImportPrint()){print_fieldset("import",'Import',!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$wa["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($gc,'strlen'),$f);echo"<p><input type='hidden' name='token' value='$T'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["variables"])){$xg=isset($_GET["status"]);page_header($xg?'Stav':'PromÄ›nnÃ©');$Ih=($xg?show_status():show_variables());if(!$Ih)echo"<p class='message'>".'Å½Ã¡dnÃ© Å™Ã¡dky.'."\n";else{echo"<table cellspacing='0'>\n";foreach($Ih
as$w=>$X){echo"<tr>","<th><code class='jush-".$v.($xg?"status":"set")."'>".h($w)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Eg=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$C=>$R){$r=js_escape($C);json_row("Comment-$r",nbsp($R["Comment"]));if(!is_view($R)){foreach(array("Engine","Collation")as$w)json_row("$w-$r",nbsp($R[$w]));foreach($Eg+array("Auto_increment"=>0,"Rows"=>0)as$w=>$X){if($R[$w]!=""){$X=number_format($R[$w],0,'.',' ');json_row("$w-$r",($w=="Rows"&&$X&&$R["Engine"]==($ug=="pgsql"?"table":"InnoDB")?"~ $X":$X));if(isset($Eg[$w]))$Eg[$w]+=($R["Engine"]!="InnoDB"||$w!="Data_free"?$R[$w]:0);}elseif(array_key_exists($w,$R))json_row("$w-$r");}}}foreach($Eg
as$w=>$X)json_row("sum-$w",number_format($X,0,'.',' '));json_row("");}elseif($_GET["script"]=="kill")$g->query("KILL ".(+$_POST["kill"]));else{foreach(count_tables($b->databases())as$k=>$X)json_row("tables-".js_escape($k),$X);json_row("");}exit;}else{$Ng=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Ng&&!$l&&!$_POST["search"]){$I=true;$B="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$B='Tabulky byly vyprÃ¡zdnÄ›ny.';}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$B='Tabulky byly pÅ™esunuty.';}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$B='Tabulky byly zkopÃ­rovÃ¡ny.';}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$B='Tabulky byly odstranÄ›ny.';}elseif($v!="sql"){$I=($v=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$B='Tabulky byly optimalizovÃ¡ny.';}elseif(!$_POST["tables"])$B='Å½Ã¡dnÃ© tabulky.';elseif($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"])))){while($K=$I->fetch_assoc())$B.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$B,$I);}page_header(($_GET["ns"]==""?'DatabÃ¡ze'.": ".h(DB):'SchÃ©ma'.": ".h($_GET["ns"])),$l,true);if($b->homepage()){if($_GET["ns"]!==""){echo"<h3 id='tables-views'>".'Tabulky a pohledy'."</h3>\n";$Mg=tables_list();if(!$Mg)echo"<p class='message'>".'Å½Ã¡dnÃ© tabulky.'."\n";else{echo"<form action='' method='post'>\n";if(support("table")){echo"<fieldset><legend>".'Vyhledat data v tabulkÃ¡ch'." <span id='selected2'></span></legend><div>","<input type='search' name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Vyhledat'."'>\n","</div></fieldset>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.'Tabulka','<td>'.'ÃšloÅ¾iÅ¡tÄ›','<td>'.'PorovnÃ¡vÃ¡nÃ­','<td>'.'Velikost dat','<td>'.'Velikost indexÅ¯','<td>'.'VolnÃ© mÃ­sto','<td>'.'Auto Increment','<td>'.'Å˜Ã¡dkÅ¯',(support("comment")?'<td>'.'KomentÃ¡Å™':''),"</thead>\n";$S=0;foreach($Mg
as$C=>$U){$Lh=($U!==null&&!preg_match('~table~i',$U));echo'<tr'.odd().'><td>'.checkbox(($Lh?"views[]":"tables[]"),$C,in_array($C,$Ng,true),"","formUncheck('check-all');"),'<th>'.(support("table")||support("indexes")?'<a href="'.h(ME).'table='.urlencode($C).'" title="'.'Zobrazit strukturu'.'">'.h($C).'</a>':h($C));if($Lh){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.'PozmÄ›nit pohled'.'">'.'Pohled'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.'Vypsat data'.'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",'PozmÄ›nit tabulku'),"Index_length"=>array("indexes",'PozmÄ›nit indexy'),"Data_free"=>array("edit",'NovÃ¡ poloÅ¾ka'),"Auto_increment"=>array("auto_increment=1&create",'PozmÄ›nit tabulku'),"Rows"=>array("select",'Vypsat data'),)as$w=>$z){$r=" id='$w-".h($C)."'";echo($z?"<td align='right'>".(support("table")||$w=="Rows"||(support("indexes")&&$w!="Data_length")?"<a href='".h(ME."$z[0]=").urlencode($C)."'$r title='$z[1]'>?</a>":"<span$r>?</span>"):"<td id='$w-".h($C)."'>&nbsp;");}$S++;}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkem',count($Mg)),"<td>".nbsp($v=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$w)echo"<td align='right' id='sum-$w'>&nbsp;";echo"</table>\n";if(!information_schema(DB)){$Fh="<input type='submit' value='".'VyÄistit'."'".on_help("'VACUUM'")."> ";$Ie="<input type='submit' name='optimize' value='".'Optimalizovat'."'".on_help($v=="sql"?"'OPTIMIZE TABLE'":"'VACUUM OPTIMIZE'")."> ";echo"<fieldset><legend>".'OznaÄenÃ©'." <span id='selected'></span></legend><div>".($v=="sqlite"?$Fh:($v=="pgsql"?$Fh.$Ie:($v=="sql"?"<input type='submit' value='".'Analyzovat'."'".on_help("'ANALYZE TABLE'")."> ".$Ie."<input type='submit' name='check' value='".'Zkontrolovat'."'".on_help("'CHECK TABLE'")."> "."<input type='submit' name='repair' value='".'Opravit'."'".on_help("'REPAIR TABLE'")."> ":""))).(support("table")?"<input type='submit' name='truncate' value='".'VyprÃ¡zdnit'."'".confirm().on_help($v=="sqlite"?"'DELETE'":"'TRUNCATE".($v=="pgsql"?"'":" TABLE'"))."> ":"")."<input type='submit' name='drop' value='".'Odstranit'."'".confirm().on_help("'DROP TABLE'").">\n";$j=(support("scheme")?$b->schemas():$b->databases());if(count($j)!=1&&$v!="sqlite"){$k=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'PÅ™esunout do jinÃ© databÃ¡ze'.": ",($j?html_select("target",$j,$k):'<input name="target" value="'.h($k).'" autocapitalize="off">')," <input type='submit' name='move' value='".'PÅ™esunout'."'>",(support("copy")?" <input type='submit' name='copy' value='".'ZkopÃ­rovat'."'>":""),"\n";}echo"<input type='hidden' name='all' value='' onclick=\"selectCount('selected', formChecked(this, /^(tables|views)\[/));".(support("table")?" selectCount('selected2', formChecked(this, /^tables\[/) || $S);":"")."\">\n";echo"<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}echo"</form>\n","<script type='text/javascript'>tableCheck();</script>\n";}echo'<p class="links"><a href="'.h(ME).'create=">'.'VytvoÅ™it tabulku'."</a>\n",(support("view")?'<a href="'.h(ME).'view=">'.'VytvoÅ™it pohled'."</a>\n":"");if(support("routine")){echo"<h3 id='routines'>".'Procedury a funkce'."</h3>\n";$Zf=routines();if($Zf){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'NÃ¡zev'.'<td>'.'Typ'.'<td>'.'NÃ¡vratovÃ½ typ'."<td>&nbsp;</thead>\n";odd('');foreach($Zf
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.'ZmÄ›nit'."</a>";}echo"</table>\n";}echo'<p class="links">'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'VytvoÅ™it proceduru'.'</a>':'').'<a href="'.h(ME).'function=">'.'VytvoÅ™it funkci'."</a>\n";}if(support("sequence")){echo"<h3 id='sequences'>".'Sekvence'."</h3>\n";$lg=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($lg){echo"<table cellspacing='0'>\n","<thead><tr><th>".'NÃ¡zev'."</thead>\n";odd('');foreach($lg
as$X)echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."sequence='>".'VytvoÅ™it sekvenci'."</a>\n";}if(support("type")){echo"<h3 id='user-types'>".'UÅ¾ivatelskÃ© typy'."</h3>\n";$Dh=types();if($Dh){echo"<table cellspacing='0'>\n","<thead><tr><th>".'NÃ¡zev'."</thead>\n";odd('');foreach($Dh
as$X)echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($X)."'>".h($X)."</a>\n";echo"</table>\n";}echo"<p class='links'><a href='".h(ME)."type='>".'VytvoÅ™it typ'."</a>\n";}if(support("event")){echo"<h3 id='events'>".'UdÃ¡losti'."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'NÃ¡zev'."<td>".'PlÃ¡n'."<td>".'ZaÄÃ¡tek'."<td>".'Konec'."<td></thead>\n";foreach($L
as$K){echo"<tr>","<th>".h($K["Name"]),"<td>".($K["Execute at"]?'V danÃ½ Äas'."<td>".$K["Execute at"]:'KaÅ¾dÃ½ch'." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]",'<td><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.'ZmÄ›nit'.'</a>';}echo"</table>\n";$pc=$g->result("SELECT @@event_scheduler");if($pc&&$pc!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($pc)."\n";}echo'<p class="links"><a href="'.h(ME).'event=">'.'VytvoÅ™it udÃ¡lost'."</a>\n";}if($Mg)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();