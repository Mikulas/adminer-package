<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.2
*/error_reporting(6135);$Gb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Gb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ue=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ue)$$X=$ue;}}@ini_set("mbstring.internal_encoding","8bit");if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
lzw_decompress("\0\0\0` \0„\0\n @\0´C„è\"\0`EãQ¸àÿ‡?ÀtvM'”JdÁd\\Œb0\0Ä\"™ÀfÓˆ¤îs5›ÏçÑAXPaJ“0„¥‘8„#RŠT©‘z`ˆ#.©ÇcíXÃşÈ€?À-\0¡Im? .«M¶€\0È¯(Ì‰ıÀ/(%Œ\0");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©–¨a'3IĞÊd«Â!S±æ¾:4ç§+Mdåg¯‹¬Çƒ¡îöt™°c‘†£õãé b{H(Æ“Ñ”t1É)tÚ}F¦p0™•8è\\82›DL>‚9`'C¡¼Û—889¤È xQØş\0îe4™ÍQÊ˜lÁ­P±¿V‰Åbñ‘—½T4²\\W/™æéÕ\n€` 7\"hÄq¹è4ZM6£TÖ\r­r\\–¶C{hÛ7\rÓx67Î©ºJÊ‡2.3å9ˆKë¢H¢,Œ!m”Æ†o\$ã¹.[\r&î#\$²<ÁˆfÍ)Z£\0=Ïr¨9ÃÜjÎªJ è0«c,|Î=‘Ãâù½êš¡Rs_6£„İ·­û‚áÉí€Z6£2B¾p\\-‡1s2ÉÒ>ƒ X:\rÜº–È3»bšÃ¼Í-8SLõÀí¼ÉK.ü´-ÜÒ¥\rH@mlá:¢ëµ;®úş¦îJ£0LRĞ2´!è¿«åAêˆÆ2¤	mıÑí0eIÁ­-:U\rüã9ÔõMWL»0û¹GcJv2(ëëF9`Â<‡J„7+Ëš~ •}DJµ½HWÍSNÖÇïe×u]1Ì¥(OÔLĞª<lşÒR[u&ªƒHÚ3vò€›ÜUˆt6·Ã\$Á6àßàX\"˜<£»}:O‹ä<3xÅO¤8óğ> ÌììCÎÚï1ƒ¢ÕHRâ¹ÕS–d9ªà¹%µU1–Snæa|.÷Ô`ê 8£ ¶:#€ÊàCÎ2‹¸*[oá†4Xxú.k\">º¡AªÍO+,óx\\5t˜Ñ†Ö`\\Åoğˆ%§jÚñ]¸ªnûÈ\\é£hÜ=zÈÃª2\$¨«ÖF[NYÕÎÓR¯ı[Iô±ÕÚ7²¨tÒ”¶ş7ì(áœïÌWj0öó¤æ2v}İò;ïk2ŒĞVaĞà»ñr=ø‹(Ëã¢,³›\rìéj*ºB(Rî2C–N\\ŒÎÿ²9{a\0Å•ÓVR4B¸Ì/zñnÎ6Œ£š‡­íÒ(wƒsásíò¸Ç´B[óøMi#:#ø¯Uáş=M-~±õäãh)¯õ	ƒpŒC›9/,ĞrØ=ƒs‘ƒ˜#BvÎŠM t=÷@–hsÍ…„`k¡óŒp.=S‘\"Îîj“ƒ&5ÄuÑp#YœŸ¿‡úY	â¶~)°s4ÙÃ1naV*æÄTSáËq¤6†\"[Lg†¬‘ÆB\"|À’2ŸQ¤:8Æ¨Õƒ\rVƒ¶4àaj!¼.&–ÎÃƒ˜o%0F9\"\$ñ²DÈ¹ã‰?'¨™2B´AßgaÅkr­'\$9\rØ 6¹`eÏ» diôû2p\\›\$»Ò>‚7ñ\n\\£–,¡¤Ä9¢ç šI‚Ì+”ššLn¹] HHJœ· åKLehAùšª@ÿµØ’ó@†ÌÚ¨dÊ½ƒù*‘H10öĞf!Ü¸7È1HA`°¤4‹?‹ÆZU¼ w@(´R(ÚÏºTÉ2¡©0RØø”áD`„‘bûßqŠqiéÅèhVÊêj[!¹S“Xû:Ò\nŸ0FÃLÂ¢vÉjÛ¦ÁÔ9ÂåJfTx7†z\\ÏË›ı†Óƒ+R@Òdİ^GÁ\0.cø`²ş>Nå\\½F£sög–i·\$ß¯%AéË´TIà•@v.™\0ÌPÅ+ƒ cNEõÑ§DŞKºvÇæe9Šææë³®*uèVZ`øÚ=~d¦¶¥ÛDe×}fšÓ¹\0º³Û5Ï¬¹Ÿf:j„`ÈME1È¯E¶¨˜ÊCA}¶š):n‡¦U°FâYL¬²½f?e+‰ˆ.ëZQàZCxz¡Ô£›(`ĞË‹~Aˆ5–[ÇyJ1;½Ö}İNSL	Ù)¥–a¿‹ÎÕSŞÀc©•9…´±2æmt+•ÚbßcRT™w|¥Ü7+9ı\\0ƒ™ÂSA³‡ èáºg¶ØŸ:ÔTñ.'-ûb‹ôq¦2Ğ9cœP SûHÖ¹¦#•üã1©À«¥š¯ÚêÅgT”ÔQµiÖ¼]uñ(v`Ø«ëÕ\ràî>1ÚËk~-_èë,œ¬£ññÀ˜á×0&C˜³\$¦Æü<0òêˆ{¥•º†g0öáÖ²Ø·“ï%«BúêÒşv2ó—.½sªbÒvà»h‘dãBwúuŞ=‹cŞCÖE‡@>‡Ğ");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n:Ìæsa”Pi2\nOgc	Èe6L†óÔÚe7Æs)Ğ‹\rÈHG’I’ÆÆ3a„æs'cãÑDÊi6œNŒ£ÑèœÑ2Hãñ8œuF¤R…#³””êr7‡#©”v}€@ `QŒŞo5šaÔIœÜ,2O'8”R-q:PÍÆS¸(ˆa¼Š*wƒ(¸ç%¿àp’<F)Ünx8äzA\"³Z-CÛe¸V'ˆ§ƒ¦ªs¢äqÕû;NF“1ä­²9ëğG¼Í¦'0™\r¦›ÙÈ¿±9n`ÃÑ€œX1©İG3Ìàtee9Š®:NeíŠıN±ĞOSòzøc‘Œzl`5âãÈß	³3âñyßü8.Š\rãÎ¹PÜú\rƒ@£®Ø\\1\rã ó\0‚@2j8Ø—=.º¦° -rÈÃ¡¨¬0ŠèQ¨êŠºhÄb¼Œì`À»^9‹qÚE!£ ’7)#Àºª*ÊÀQÆÈ‹\0ŠØÒ1«Èæ\"‘hÊ>ƒØú°ĞĞÆÚ-C \"’äX®‡S`\\¼¤FÖ¬h8àŠ²â Â3§£`X:Oñš,ª‡«Úú)£8ŠÒ<BğNĞƒ;>9Á8Òó‡c¼<‡*¬æ2c¥9ÏéÊ>¢HÀz™OjªB'BªğúªŠº²Œ5‘,ò„Pìb5Ğ45€Ö3ìÿ@…:·N+išj›ÕJ¢ŸÚŠ\\ª	¨Æ‡á@¼>‹ Æ4Xr(Qr RÙ¡ dó…u=ÏtÍA8A{Œc\\Š§)³½|×C4\n6ØWí˜7(V4l6µ	–9\r¡vËaŞ&:CK˜!æ-¡£pÎ:\r\0V¢M Q†#õK@¼\0Ò.…Ù€ËVy·›¦wEû\"Õãfƒ|jŞbgÙ¼F>Ä‹	BHn–İºZ¢ÔB²BÆ\$ÉF0•ÏÃ=ªñkC-9ã¸şC´ä‰O”9^Z3\rÇr…7àÖ0ê¨uÙwù•M¸gùÅ° Õv2¶ÔqI°¼ó²ìöpåµÀ¸äh5cãPyÇ…Ù.æ[°÷¥hV'-YÀÌÓT°èÓ…İ›’:vĞşŸ¨O&&6Š¨Z—áÈÎ»	rnû¶•¥¾Bc£oÚ Í0úMƒã£¤²xz]ÔŒ™ÕêÇ!€védz/sƒâÛCŒí‘¦=õd9K¹eVXÙs:pÌÑˆ8–rÃA0&i®)Ö¤R\$úY_Vé4¬¾…z÷È;ia°4° ÊlI,&t5Àø8¿Iä#_©€‡sˆFÃ»`\niE<¦'ÑJy0@¸4‡0†Ãa5˜>Â3Ìº¨@Ä•0D†¾ÏkÎ2êuO‚€BÂñ[€¼4À2d¥V«<eÑ`6øCáÄ	d>'EwAL[‹©iSEõRÃ[º§å\rŠß x<áí\\+¢¿ xxƒpÂ\0èè;…A¬½pØöCê®V	ñY«R¿&š3ºv¨y6Ê'y)x’jµê@ÔrIô®zhBp×I‘’f¯ºÅ†±JùÒZr¤<É\"\$T¶‘¦^HÈó,3æP¯²èœÊ8f,2‡˜¦â‰‚pÊèNßsæ|ò¸NUğçsCM¯ ²ºt_°naĞÔ,’BÙVbÎp4ó¶¤üÛ\$w#çŠ5%•8t›ñÄàôÏüÓm¯àPÙøşÙ3ın¯ıÏ¤²hó6IlºNr†Q	”ÒeÔE“2ÚLf'd—Ì*\":YMÊ#ELz Ñh\0%S­¢DH1Ğ×!êS&³Ù[5	3%Ã({¨Èå^<‰É(H´6ğX+Î\"hÑW<¸’ó_tz¸ˆ9­Z™uh¬…€”—f^È‹=hÓø:+B“qÅ	P&„ÂŠ	ƒpbaÀš\n®aìˆ±V2ÇW ÙšŠ& á¹Z…\0ŞnaÓİ­dX8Zv>§¹”Ğª‡b\nC˜SJğrš‡»ZàŒW%`[ø/h€R{\$’-…‚ªeÊ²BGLøzNBp(º@¦İ°÷sƒ(fdòéGàbS5Ò57i?†PZt\nzœ>Œù`]x0=¿JcrRByÈY“]c_#¢S“•-ä/å\0Ã\n¨lĞ aŞƒ1‡2ğ‡@W…°Æ\näA”ì#a,1…Âød’â0ÈÊ%a†d5€Ì|¹E¶ÆåÀÙkB¯ïøOK+ÌªPó~6Ç0¥ße¯ê5‡!2@¤Ã¸(vdbÀå·q.ƒ@adÅş›´„‹RC¹ˆ’e¬Ó)X:#cY¾Z.|ØcßZ4>Øç/&ÜP­V‘¸¦2•ÆwH²B5îƒWçBp<pÑÎ'<EŸ» š*:zFD´TgHêRª\\¶Ã*İ+}¼…°ÂCĞ]l.@V¼8\$ÀÅNj€›:Icáö’Ï½–4k•¡^…ú<§)şÆÓ¸Â\0St€Æ£¥!olju¸·—®ÖËZkmq®µåvÚÛqœ%ÒºQMÛÛ®-jïY3ı‡ß&0¡”6ïIv{{× ü‘àÜC}¸¶Jz0ÛVtÓØnb-¸l©ù¤Í“ÌZWK€­2Èx×ÚmÑÕF>\nCs…ˆ¿ˆênãCß!åËMÆ0OÉÃr“½/‡Æh2ŠB†dUs²şÊ­ä–ƒ×\"XK>}Ã@´Ãô@Ğ§	÷4Ş¥7D\0 ÈC·Ù'oGìÍ\"oúøvã”oMv–ãHy%\$F¤v\nU‚ÁzB‹´»—i)İºmŒQ!\"´¼\n;ì¦à\0¤¢M*šC\rOj°¢vîFD¼Oà	¹/(’„üË»óyƒ;ËÀûßg/}ät9úl¢…´Ü0À7L¸B–©qÄUÉàx“ÜœMÁ@1ôÜ5É™[\rÊoü…üaùI(€Äü(“óş/ Âîia‚dÛ›°'ïÄ’>¡>`&ï0Ò6š8ßä#M7ï|¯à\\%H—õ\$MT«ËÆ\\÷\rÏò÷ìx`·\0qI”Db0³ô}æ(0ÀêC†TÄF«ˆ’É1²ª‹Wï`ú	”ÀÿO|kïôúÈŠ*âÁol3”öPT›hü@òû°d4(ƒÇp*è‹äeHpğ\$Oæxl\$¢ŠæªÌ@Ö44\n€Ò#îTÌË\0h–\$P™Î¸ Xû‹ø«âH Ò †LöOièóà\\ûj(€hg)ºû\"ˆ`pû¯ `äùoÆûÏü/Òü¦¾üàÂöOw°O	ïˆøÃ¤Ç‹x¢páO¤°ê)‚öN«tjª\$`êƒën·+wiğ\"Å]íö>‰8°¥jH1RdÊVo0›è°‹Oç¨ôÙ RLh±iQlU‚‹ äÁîVÎÎû±†–/Å\$€´‚’´ËP7Q],R »f\\ñ¦V±ª´«O\r1µñ¼g†\$2¯[è(4VÉ¬øi³ÏÉ0ØËjšåš8ƒCÍ‰\nbÜI‹†+1æ+ğ8+M\rç…ÌÖÌd ‡%Œ¨„…\0ÚH(hÛÍRÜ¿­pêCÏò.FïEÄ„ŒFğ¥¤\n- š ğÃà¨*ú¼#ˆ¨ò`6`Ï&rj€Ğ¥\nnÀÛ&’ltàú¥¢ª\r¬’ ‚J£f÷(àğtÆPS‹.®=%ò‹&2)„Ã˜¦É÷(ÒÅ&ò{&RÓ)L~`€Â\rRh®á„X\r€ÄÕ`Ö.\0%Œ* â+¥J'ˆ\\I\r¬@è00ŠåS	“1€Ë1Æf t\n†\0\\#\\6 °	àÄ\rDo2øS@ “E4“L cÄ	¨:>ÀæÂâE2k\n€ <àueXÁs0Dìšs0\$@ŞCOjñú)€ 	à¦\n†\0à‹:\0R’ê®Æğ/ı8“„0ÂK1³„	 )-,è~\$#. ¨†ÔY­ú[¨:¾®R\0Z?Àî§†²ê\$Ì) É+Sƒ³¼“Á³Ä8#d<@°´\nT¤Š¬G+%›7«2ÓŠS”T©h;¤,T£ÎÌÆ’°Ì7f]C\"EC€ó Ãˆ.òòaTLiä™8³¼I”P‘á!`ADÒ\$,’ã&ˆfŠÄ¬’é\"%!ô~ŠPLËF*LÆC\0·;LEƒÄ<@WJ#Nµ®\$ ¨ıÃ>.ÖFãÂ;M@¬*ÒŸ/…oŸë@àe~HK˜uÀÈº‰˜ÀXâ*\rÊ—°ğš‘%,Áq@ùIöı¤êO€Ã¦f‰JóIHşæL°ÁÕ1Ğ»SÎa‰ªo\0+I S9P*–˜\$i,ˆEŠ¦M£ˆ³ki/ÜªoİT\0¸å(VÆ™Îº¨ŠÜkãªòòé¨ÊıÂ˜Õ,`\rİRÎ Ïö”DƒİIõU©³:Ù	¯U130æ dïÉ@óQïR\n\rmñóWK6K± {XÄX‚Nº·õLî	ìB\$®ºİÅ­SoES¯ÂL4Tdë<âò\$6-_Ã‹L\$êdŠÈÌh…Ì_(rfeÑIV.„c.ÅÆP½àh€dûƒ>	Áhİ/ì°5\0bÏ\$¼Õ\rTÕ€_X`^àYi	g«ƒ[²[vz¬öc2–o!€¸ `\0‚9¶:ìg,s„¡Š+\0ĞFo;&]Yd††ƒ_/ìîé&½m¨r>uš1À¤ô¢§aLÇ(Ò\n€Ş´Ãˆ¬eÂBùYˆ82à³`o‚HV¤Îà\\€ë>è06öÎàeoÃcp›d& ·:Ã@ŠI\$#Åu Ét9×J*vt·:ÎF—¶=`8ŞÖ/=íş”‚¦öÑÜÿÆğÂˆT4’ç>Kî¹ã>Å'?…j\n ¤	(~\r´¼2èËWB\"3â‹i4GIÔK2ó»CÅr.«,ö¯K…IKÃtVE,íGbâ ‚J}(¶¯bïi÷ó|Xn„n5ôU E´ø;Öê ×]f3mc´‰\$…mît¶äBX.¾Öî/6ó\"×7o²œ67\\<LíaD¤s`Xª[bFk„bIÄnôÒŞ¬r	€Ş8.* P Xƒ+ˆxzëëzk0Ò!£8³WyW£¤¿š¿l#Wx±Ãà8*\$Ákğ\"L#)²Ÿ*\$­*ƒÄ¿1yÒåIKñ|Õ½IÖÙlTéæĞ fÔL˜¬V	‹Ç~K& ×êıÎ»jf?—éLİhRDoEÉ\0GFV‹D7v§i³g yˆÓ‹Ñ`VQd°øÀ6.ˆ0«\0öÂ8¤¿ÕeÀÖ V‹y ‡K½˜d½ WgäÆx«_øñw¢‚Êƒ/ ²[ñë‚Ò\nì¹Så\\Y‘8ù•8äÿ>OMª³ìÄ[àØP&p*§\"*½˜PC‡ƒ‚cƒqƒr ìÎÍò*Í§†\"YÒK`²ceO0_i,Şy5\r øù'¨ÆÁ±™ÑœŒ5Şù\rĞï^5íĞk¡¨“É»_BKiºgŒúóŞbU8õS´Îl¸¶‘Lá1QÀÏ£B†)3ú·µ{€ß{Íu‚e•\r¿•FòÀT­p<â§£1>‘CìdÈã\nëë&& ò(«H/cA!òœ+‘d4ÒÒëŸ¸:3,ı£6 \"Z³'É*Î˜£1J¶ÚI¨*%¥Ã¤8IÓI`W{“¥·»{÷Y«„Şgy^7@ğ¬ŠÑ1hó¯ Ù¯àáJWÚ:¾-¢‰¯½«Ìé§úĞdØ—v°[ÕûK÷í§Ïİ²:OdšŠ‡­U©.¸:L\r³‘AºNñIPeÀÂ,#µš=/»¬Zó±ÚC¬±O³ÚÕ¥W³{zë¦%M”ËŸ•6‰§tYºy—¤(¶ÕsXmTê‚@");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\0;";break;case"cross.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\0\0;";break;case"up.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\0Çò\0;";break;case"down.gif":echo"GIF87a\0\0¡\0\0îîî\0\0\0™™™\0\0\0,\0\0\0\0\0\0\0 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\0Çò\0;";break;case"arrow.gif":echo"GIF89a\0\n\0€\0\0€€€ÿÿÿ!ù\0\0\0,\0\0\0\0\0\n\0\0‚i–±‹”ªÓ²Ş»\0\0;";break;}}exit;}function
connection(){global$j;return$j;}function
adminer(){global$c;return$c;}function
idf_unescape($v){$uc=substr($v,-1);return
str_replace($uc.$uc,$uc,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($pd,$Gb=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($pd)){foreach($X
as$oc=>$W){unset($pd[$y][$oc]);if(is_array($W)){$pd[$y][stripslashes($oc)]=$W;$pd[]=&$pd[$y][stripslashes($oc)];}else$pd[$y][stripslashes($oc)]=($Gb?$W:stripslashes($W));}}}}function
bracket_escape($v,$va=false){static$ie=array(':'=>':1',']'=>':2','['=>':3');return
strtr($v,($va?array_flip($ie):$ie));}function
h($P){return
htmlspecialchars(str_replace("\0","",$P),ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($C,$Y,$Fa,$sc="",$Tc="",$mc=false){static$u=0;$u++;$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Fa?" checked":"").($Tc?' onclick="'.h($Tc).'"':'').($mc?" class='jsonly'":"")." id='checkbox-$u'>";return($sc!=""?"<label for='checkbox-$u'>$J".h($sc)."</label>":$J);}function
optionlist($Yc,$Gd=null,$_e=false){$J="";foreach($Yc
as$oc=>$W){$Zc=array($oc=>$W);if(is_array($W)){$J.='<optgroup label="'.h($oc).'">';$Zc=$W;}foreach($Zc
as$y=>$X)$J.='<option'.($_e||is_string($y)?' value="'.h($y).'"':'').(($_e||is_string($y)?(string)$y:$X)===$Gd?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Yc,$Y="",$Sc=true){if($Sc)return"<select name='".h($C)."'".(is_string($Sc)?' onchange="'.h($Sc).'"':"").">".optionlist($Yc,$Y)."</select>";$J="";foreach($Yc
as$y=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$J;}function
confirm($Qa=""){return" onclick=\"return confirm('".lang(0).($Qa?" (' + $Qa + ')":"")."');\"";}function
print_fieldset($u,$wc,$Ee=false,$Tc=""){echo"<fieldset><legend><a href='#fieldset-$u' onclick=\"".h($Tc)."return !toggle('fieldset-$u');\">$wc</a></legend><div id='fieldset-$u'".($Ee?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($J=' class="odd"'){static$t=0;if(!$J)$t=-1;return($t++%2?$J:'');}function
js_escape($P){return
addcslashes($P,"\r\n'\\/");}function
json_row($y,$X=null){static$Hb=true;if($Hb)echo"{";if($y!=""){echo($Hb?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Hb=false;}else{echo"\n}\n";$Hb=true;}}function
ini_bool($ic){$X=ini_get($ic);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($P){global$j;return$j->quote($P);}function
get_vals($H,$g=0){global$j;$J=array();$I=$j->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$g];}return$J;}function
get_key_vals($H,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$I=$k->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$k=null,$o="<p class='error'>"){global$j;$Pa=(is_object($k)?$k:$j);$J=array();$I=$Pa->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($k)&&$o&&defined("PAGE_HEADER"))echo$o.error()."\n";return$J;}function
unique_array($K,$x){foreach($x
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$J=array();foreach($w["columns"]as$y){if(!isset($K[$y]))continue
2;$J[$y]=$K[$y];}return$J;}}$J=array();foreach($K
as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$J[$y]=$X;}return$J;}function
where($Z,$q=array()){global$nc;$J=array();foreach((array)$Z["where"]as$y=>$X)$J[]=idf_escape(bracket_escape($y,1)).(($nc=="sql"&&ereg('\\.',$X))||$nc=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".unconvert_field($q[$y],exact_value($X)));foreach((array)$Z["null"]as$y)$J[]=idf_escape($y)." IS NULL";return
implode(" AND ",$J);}function
where_check($X,$q=array()){parse_str($X,$Ea);remove_slashes(array(&$Ea));return
where($Ea,$q);}function
where_link($t,$g,$Y,$Vc="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($g)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$Vc:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
cookie($C,$Y){global$aa;$gd=array($C,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$gd[]=true;return
call_user_func_array('setcookie',$gd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($db,$N,$V,$n=null){global$eb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($eb))."|username|".($n!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($db!="server"||$N!=""?urlencode($db)."=".urlencode($N)."&":"")."username=".urlencode($V).($n!=""?"&db=".urlencode($n):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($zc,$Hc=null){if($Hc!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($zc!==null?$zc:$_SERVER["REQUEST_URI"]))][]=$Hc;}if($zc!==null){if($zc=="")$zc=".";header("Location: $zc");exit;}}function
query_redirect($H,$zc,$Hc,$ud=true,$yb=true,$Bb=false){global$j,$o,$c;if($yb)$Bb=!$j->query($H);$Md="";if($H)$Md=$c->messageQuery("$H;");if($Bb){$o=error().$Md;return
false;}if($ud)redirect($zc,$Hc.$Md);return
true;}function
queries($H=null){global$j;static$sd=array();if($H===null)return
implode(";\n",$sd);$sd[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H);return$j->query($H);}function
apply_queries($H,$S,$ub='table'){foreach($S
as$Q){if(!queries("$H ".$ub($Q)))return
false;}return
true;}function
queries_redirect($zc,$Hc,$ud){return
query_redirect(queries(),$zc,$Hc,$ud,false,!$ud);}function
remove_from_uri($fd=""){return
substr(preg_replace("~(?<=[?&])($fd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$Ua){return" ".($E==$Ua?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($y,$Va=false){$Db=$_FILES[$y];if(!$Db||$Db["error"])return$Db["error"];$J=file_get_contents($Va&&ereg('\\.gz$',$Db["name"])?"compress.zlib://$Db[tmp_name]":($Va&&ereg('\\.bz2$',$Db["name"])?"compress.bzip2://$Db[tmp_name]":$Db["tmp_name"]));if($Va){$Nd=substr($J,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Nd,$vd))$J=iconv("utf-16","utf-8",$J);elseif($Nd=="\xEF\xBB\xBF")$J=substr($J,3);}return$J;}function
upload_error($o){$Fc=($o==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($o?lang(1).($Fc?" ".lang(2,$Fc):""):lang(3));}function
repeat_pattern($G,$xc){return
str_repeat("$G{0,65535}",$xc/65535)."$G{0,".($xc%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($P,$xc=80,$Td=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$xc).")($)?)u",$P,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xc).")($)?)",$P,$A);return
h($A[1]).$Td.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($pd,$ec=array()){while(list($y,$X)=each($pd)){if(is_array($X)){foreach($X
as$oc=>$W)$pd[$y."[$oc]"]=$W;}elseif(!in_array($y,$ec))echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$c;$J=array();foreach($c->foreignKeys($Q)as$r){foreach($r["source"]as$X)$J[$X][]=$r;}return$J;}function
enum_input($U,$sa,$p,$Y,$ob=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Cc);$J=($ob!==null?"<label><input type='$U'$sa value='$ob'".((is_array($Y)?in_array($ob,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($Cc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$J.=" <label><input type='$U'$sa value='".($t+1)."'".($Fa?' checked':'').'>'.h($c->editVal($X,$p)).'</label>';}return$J;}function
input($p,$Y,$s){global$pe,$c,$nc;$C=h(bracket_escape($p["field"]));echo"<td class='function'>";$yd=($nc=="mssql"&&$p["auto_increment"]);if($yd&&!$_POST["save"])$s=null;$Sb=(isset($_GET["select"])||$yd?array("orig"=>lang(5)):array())+$c->editFunctions($p);$sa=" name='fields[$C]'";if($p["type"]=="enum")echo
nbsp($Sb[""])."<td>".$c->editInput($_GET["edit"],$p,$sa,$Y);else{$Hb=0;foreach($Sb
as$y=>$X){if($y===""||!$X)break;$Hb++;}$Sc=($Hb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($p["field"])))."]']; if ($Hb > f.selectedIndex) f.selectedIndex = $Hb;\"":"");$sa.=$Sc;echo(count($Sb)>1?html_select("function[$C]",$Sb,$s===null||in_array($s,$Sb)||isset($Sb[$s])?$s:"","functionChange(this);"):nbsp(reset($Sb))).'<td>';$kc=$c->editInput($_GET["edit"],$p,$sa,$Y);if($kc!="")echo$kc;elseif($p["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Cc);foreach($Cc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$t]' value='".(1<<$t)."'".($Fa?' checked':'')."$Sc>".h($c->editVal($X,$p)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Sc>";elseif(($Zd=ereg('text|lob',$p["type"]))||ereg("\n",$Y)){if($Zd&&$nc!="sqlite")$sa.=" cols='50' rows='12'";else{$L=min(12,substr_count($Y,"\n")+1);$sa.=" cols='30' rows='$L'".($L==1?" style='height: 1.2em;'":"");}echo"<textarea$sa>".h($Y).'</textarea>';}else{$Gc=(!ereg('int',$p["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$p["length"],$A)?((ereg("binary",$p["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$p["unsigned"]?1:0)):($pe[$p["type"]]?$pe[$p["type"]]+($p["unsigned"]?0:1):0));echo"<input".(ereg('int|float|double|decimal',$p["type"])?" type='number'":"")." value='".h($Y)."'".($Gc?" maxlength='$Gc'":"").(ereg('char|binary',$p["type"])&&$Gc>20?" size='40'":"")."$sa>";}}}function
process_input($p){global$c;$v=bracket_escape($p["field"]);$s=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($p["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($p["auto_increment"]&&$Y=="")return
null;if($s=="orig")return($p["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($p["field"]):false);if($s=="NULL")return"NULL";if($p["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads")){$Db=get_file("fields-$v");if(!is_string($Db))return
false;return
q($Db);}return$c->processInput($p,$Y,$s);}function
search_tables(){global$c,$j;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Ob=false;foreach(table_status()as$Q=>$R){$C=$c->tableName($R);if(isset($R["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$I=$j->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($Q),array())),1));if(!$I||$I->fetch_row()){if(!$Ob){echo"<ul>\n";$Ob=true;}echo"<li>".($I?"<a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Ob?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($cc,$Lc=false){global$c;$J=$c->dumpHeaders($cc,$Lc);$dd=$_POST["output"];if($dd!="text")header("Content-Disposition: attachment; filename=".$c->dumpFilename($cc).".$J".($dd!="file"&&!ereg('[^0-9a-z]',$dd)?".$dd":""));session_write_close();return$J;}function
dump_csv($K){foreach($K
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($s,$g){return($s?($s=="unixepoch"?"DATETIME($g, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$g)"):$g);}function
password_file(){$bb=ini_get("upload_tmp_dir");if(!$bb){if(function_exists('sys_get_temp_dir'))$bb=sys_get_temp_dir();else{$Eb=@tempnam("","");if(!$Eb)return
false;$bb=dirname($Eb);unlink($Eb);}}$Eb="$bb/adminer.key";$J=@file_get_contents($Eb);if($J)return$J;$Qb=@fopen($Eb,"w");if($Qb){$J=md5(uniqid(mt_rand(),true));fwrite($Qb,$J);fclose($Qb);}return$J;}function
is_mail($lb){$qa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$G="$qa+(\\.$qa+)*@($cb?\\.)+$cb";return
preg_match("(^$G(,\\s*$G)*\$)i",$lb);}function
is_url($P){$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cb?\\.)+$cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$A)?strtolower($A[1]):"");}function
is_shortable($p){return
ereg('char|text|lob|geometry|point|linestring|polygon',$p["type"]);}function
slow_query($H){global$c,$he;$n=$c->database();if(support("kill")&&is_object($k=connect())&&($n==""||$k->select_db($n))){$rc=$k->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$he,'&kill=',$rc,'\');
}, ',1000*$c->queryTimeout(),');
</script>
';}else$k=null;ob_flush();flush();$J=@get_key_vals($H,$k);if($k){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($J);}function
lzw_decompress($_a){$ab=256;$Aa=8;$Ia=array();$zd=0;$_d=0;for($t=0;$t<strlen($_a);$t++){$zd=($zd<<8)+ord($_a[$t]);$_d+=8;if($_d>=$Aa){$_d-=$Aa;$Ia[]=$zd>>$_d;$zd&=(1<<$_d)-1;$ab++;if($ab>>$Aa)$Aa++;}}$Za=range("\0","\xFF");$J="";foreach($Ia
as$t=>$Ha){$kb=$Za[$Ha];if(!isset($kb))$kb=$Ie.$Ie[0];$J.=$kb;if($t)$Za[]=$Ie.$kb[0];$Ie=$kb;}return$J;}global$c,$j,$eb,$ib,$qb,$o,$Sb,$Vb,$aa,$jc,$nc,$a,$tc,$Rc,$id,$Qd,$he,$ke,$pe,$we,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$gd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$gd[]=true;call_user_func_array('session_set_cookie_params',$gd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Gb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$tc=array('en'=>'English','cs'=>'ÄŒeÅ¡tina','sk'=>'SlovenÄina','nl'=>'Nederlands','es'=>'EspaÃ±ol','de'=>'Deutsch','fr'=>'FranÃ§ais','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'CatalÃ ','pt'=>'PortuguÃªs','sl'=>'Slovenski','lt'=>'LietuviÅ³','tr'=>'TÃ¼rkÃ§e','ro'=>'Limba RomÃ¢nÄƒ','id'=>'Bahasa Indonesia','ru'=>'Ğ ÑƒÑÑĞºĞ¸Ğ¹ ÑĞ·Ñ‹Ğº','uk'=>'Ğ£ĞºÑ€Ğ°Ñ—Ğ½ÑÑŒĞºĞ°','sr'=>'Ğ¡Ñ€Ğ¿ÑĞºĞ¸','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡','ja'=>'æ—¥æœ¬èª','ta'=>'à®¤â€Œà®®à®¿à®´à¯','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','fa'=>'ÙØ§Ø±Ø³ÛŒ',);function
get_lang(){global$a;return$a;}function
lang($v,$D=null){global$a,$ke;$je=($ke[$v]?$ke[$v]:$v);if(is_array($je)){$kd=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D%10>1&&$D%10<5&&$D/10%10!=1?1:2):($a=='sl'?($D%100==1?0:($D%100==2?1:($D%100==3||$D%100==4?2:3))):($a=='lt'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D%10<5&&$D/10%10!=1?1:2)):1)))))));$je=$je[$kd];}$oa=func_get_args();array_shift($oa);$Nb=str_replace("%d","%s",$je);if($Nb!=$je)$oa[0]=number_format($D,0,".",lang(7));return
vsprintf($Nb,$oa);}function
switch_lang(){global$a,$tc;echo"<form action='' method='post'>\n<div id='lang'>",lang(8).": ".html_select("lang",$tc,$a,"this.form.submit();")," <input type='submit' value='".lang(9)."' class='hidden'>\n","<input type='hidden' name='token' value='$_SESSION[token]'>\n";echo"</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($tc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($tc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Cc,PREG_SET_ORDER);foreach($Cc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$y=>$rd){if(isset($tc[$y])){$a=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ja[$y])&&isset($tc[$y])){$a=$y;break;}}}$ke=&$_SESSION["translations"];if($_SESSION["translations_version"]!=783484537){$ke=array();$_SESSION["translations_version"]=783484537;}if(!$ke){switch($a){case"en":$i="A9D“yÔ@s:ÀGà¢©¸Âb6@†ñÔàl7˜L‚€Ìiˆ‹DÓ	àÒm:›c†ÈÁÜËÄ`æ“ÔÒs	Nd)A2Ì³ƒq¼è 2ÉgI”Úp:AFó‘¤Îi‡Dè¡Ò9È…€¢a„Üg:˜LæXaÎØPˆ˜mÑ[™¼İ7™„CD\n’t2›f›´âu=ŸÒ)GK\r´Êr½N:Ü¤Å9‚ˆ†pİ:Ií…3¥VÏ™!V'*‘8Êt;Õ\r`¢9”Şm×ë,“|`(Šd4ÄÎXã”;p\n(\\{‘’Èo«›¹óm›GŒtkfS¸ƒƒN²\\¨çU°K1p\0Ÿ8ƒÓ€Ìr”PPb-ÿPQLÊÕŒc@³#ºú€¿ª èİ® Œm\nìşŒ¨Œ\"ß®ª@Ã“nş£Ô2ÂâKÇÁbè¯@-ÀÜŞ¿ÌøöŒ°ÈÂBä÷¬\në…Ïb7ÃCbqÈ/-ÑzD¢àP\$Bhš\nb˜-2èò.Ã#hZ29Âc ‚Áoô,£ŒŒàÂ\r,(9I.L;#`Òˆb˜¤#/cxÖÀ…ÁbĞ/¨ò¨•-Q¸Ü‘LÃ<Ğƒ£Æ¡c0ê6\$OğæÁ®Ô à8AAP¥ÇŠBˆ%ôí0Â\rÌPà4 # X\"ïúæì«àÏG\$S¼ó=„jë3Ë®1LX+k²ğ½/ˆQÁIx@(	…šÀÔ@'AJ8€£“Â@¯Œ©¨7¢ƒ­m‰â˜¨Mªõ\n)%ôª%Dß(ê¨ï\rÖ5u IÕŠ»#ë@äÎVÅi42M‚À%QÒq%Ö#\$*×Õ P“ŒG1Ş8ŠÎC‘©ØV5GÊÂÜ90\"DßÁÖd<;±¢Ê’É!‹\\*£²~µ§Q•/cBn½İ”èÃ\$¿ºš³#cìĞÃªüàM:³<æQF„¿³Xûì™&_“Œ#0ÍŠU²½ŒHûá¹n™°!´£`V1ÏCÖT(ìğ6kÔ\rL7¸0ó»¤Onw’ãqíb“Ô™¦ëË\rùæ%sNòŸlïÈmÙÇ-Ó^š‰]€R_cÃ.Ï«8~\r˜ƒ\nÇ)\0A=\rÜ>”6òO%¦éü^¼‘9+\\àñmw»glÌÌw.z5Çİ\ré’„N;ú0»·ÃÇ;‰=>i\n@Eñ7`š…XÌŠˆ¤èLÉí-xÖ¤HY¨ 	á- À(Jp!m@°\\";break;case"cs":$i="O8Œ'c!Ô~\n'Nó!…Š™4›\râ™”@n0šL5	Ò(o:˜ç!p(ša<M±Ãa¹†­BÎÆóa–\\¡Œ¦ÃI¬Şsä#‘Ô@j‹	Nd))N‡#‹™L²šÖ‘%€ÇFIr¤pb«æuÉx)Š½Y\"¡„Äu6Ï2Q\0(”a=M`¢±äÅ:Š)ü¼Û11WÆ“QÒ-H®QB	ñ¸ÆoÄªm<ä ©šjµpQWi;qÆÃ™­‡k:NS/9› ¢&¨ë‡0ˆˆÓ	ÎÌ˜2‰³ÑŒÊ\n!fç)r´S—±T ¢9”Şmäœ<ò™”õ6í¦CIÒG¥Óêu`¢A—roÁCÍ&ƒdpæö¢x¨95/êÖ°\"â8b”)²Ê'3ã‰1C[v('éªÈ˜(ÙB7BÀPJ2ÂÆ1K¶1LI1«0ÏÀÜç„°\\‘Øb¾/àÊ†°#XÈ2§ÉàìëŒ¨xÂö0\"bTöBÖçH€æÕB(Z6Œ(ˆ'Èãš^İ>b‚!®[+BŒ[538Ş46“#í4:ÈØ!“Ú873q Ë/Ì#`\\ˆSğó@L¯ì?GÅT<Àˆ®tdü‰Ğ-Í‰Ò´B\"°¤¬qˆG¾‚@t&‰¡Ğ¦)C \\6…ÂØå[BìÆ2AEÿ7¶RÚ=\"7c`è9I Ëd!#„Ğ—«`Ş5¦Á\0†)ŠB0\\OPbjÇ2F6®Y2<ìÀê’Ì•ì&Ş19oâ&;1zÒ5İr`æÿô%å6“crº\\“2`1eê<™&qR¦¾Ø;6C•Şİ‰‹ôş!Èê,Š¦,&Ãİ#µûfÙí~=·Pc00Œix@a—HkH³­8;=AÉ3x!€@2'ã ê8`ìV{—2hXÈ…°M 1\0 \$\n •³[ª\nPR’Î“8Ó')Û\\œ\nx¦*híPÃm‹O\0İwÜ\"¢‘]Äp\rdk¥2˜Ì4Œãªáìo`å\$E(9í	 ß\n¸#üàs\0õAîì5ÎD¼ø@0zPÂPŒ?ÒÃŒ,¥u-Òs8¦İ(ª€ r¦xP­Aõâ.I*•äT²PÃs—±ÈonfiOrØ·.âJ*Î2§ÁÍÎ][5ñäo®œ´†h4´¿\n<àß–ê6l¿E.Q³û0’“P« ­…ÿT{ÿ57)DHèÅ	ç'¦©µ\0ı`[ÓT>Á5H‚Ç\r€¬5“À×\0WBd¼á“æ:ëV[.k9p¦i% €•5CÜ”‚IZ) Ø£áé#‡ê@H\"zËı\"q\$9D´?âtDƒë4†â D	9X&©í–òâ@SK AÙ*RªÓY|Eµ<\0 –E¡³Ó9e°×½§\nWy±1ÔÓ˜Ò,C±“O:Õ Ñ	7)ê¢\$HñÒ8kEÏ:¼€ó&äÀkFA8Œ¡è€N©”¤qaºöÀİKh\n9ÇõhÄ{\$äÌv\"HÔù%Ğñ€PI\r³\0¾¤\$‰,¤e{¤q¬\0 ¨÷‰»¢a}£\$1X*\0006!À";break;case"sk":$i="N0›ÏFPüSa®ŒFó€æaŒ§yÂr4›\rñ	 äab©EÀ¢i„ği6°Ô&ÃtB(v7›¦éP€ìeb/fóœ†	…œ¢Q”@%9¤pˆT2\"e2ÉÎgC­Fp9JFH*i3šf’°Szi0×(ÇC	ˆë95db\0Q(Âz<šÁEcÉŠ?!SÆ´Û6¾™NGJ5¹C='fã¼ìi2šèç:]Q4Ôê¦YUŠ¾ÂŒ8ÉÉÌÖÃTˆ‡“äÄFaNfÃ(‰*ªaâDi„æ\n)d7s”B±JUÒc\0G2›Í¦S¤czZKM»b)Òt†`Mç]>§W8_‰]Ù¿4%G3Lú\nƒ“Tı6*ÀÒü¿i›0	Ì²jŠ#M8ÖŞŠ	âd®&ªš²PĞ˜Œ\0Ä‚€LADƒÌMÄcSĞ;CËè\rÏ°HÁ i†+Øò4'+J@RCXÈÌéÊn½<ë0ó0bPóBÖ1­ğàİH`PŠ£\n2	ã\"xÌ7câÁ£#¶:/p‰|şÈŒ\n\r\r´ËK¢b\"³âh^¨ñË0LC`\\ÏÃ`Ó@LÍØÂš61=0£+•˜£t\r%AŒcE\nRôK,‘±ˆøôù	Ğš&‡B˜¦pÚc•t9³ É/ã\0¾KejŸz6;¨;›Pb'4ĞmŞ5¦a\0†)ŠB0\\Of*Vó¨Ã26¯ÑB†Q«T‘Ì¶\0ç(ÊÀÊ1¯Ê6;£¼2\rcª–ú?ƒxİ~C+¶7RĞş\"òŸ%éŠfØ`cƒÍ åq-àY„@÷R¦£!øCÃk,0¤bu¦Õá°3òãeòÂŒ„¢Ê²Ê³­(@ÁW„ĞXœÌ(Š5\"ªkN´-YmúŠßÙ}AQhš1[¤0¡\0P¤)ìVÑ×lø5íˆ 'Šb Ad”+e¾-awÉ¹ÙAC{£cĞìa—·\r¬jª2X0Ì°¨ûˆ2[˜Ó„c£R<³{59	b)Š!Ì(ÇÏNPœEÑoÜÈë#Ö´•u@¤umâm9båJ¬,»\0³jšş¸¤bË×Äx*4k’2éÎúZÁ\0ê8\"Ü8è44-’Ú™4³”è\n¿|—Zü‘—§×âàpe\rCò|Å.ıİöÓš|bù¼›ÁwK¨?“0fˆYPØ8Àòˆ“[\$aî†ÀVÔpki.–µsô+N!;dnd†\0@¨Nk‡L-:5	BşEêMÂ*0ôV‹Qª>ÈfÃQ<7+´08t§!€m†NÌ^ªm\"*§@´·“¢†ÊH‘\"Äb1ÕŠ±Ò#×#ï	\";#DÔNpVh¢”›dØËXYC1ˆ¸¸’¸Í›W=‰ÍÃ‘T&dcÁ…¤î’¤:oH¡»Mª\r¢şµÑ[Cj…ÆH¼s,‚`o-%ˆ3É‰4ˆCiiÆ¬ŞœÓô¡½‘I˜½²4»’èEÈ˜•‘ò@É	d7Õø[qp%OÌ*EBàoB”“6ÁUø'Bl¸á;";break;case"nl":$i="W2™N‚¨€ÑŒ¦³)È~\n'›¦ó9”Øi5Ä#)Ìèa7C,àl7˜L†Sp¸M0\r&Ó©¶Fo2ÅM†!º7ÈNfs‘¼Şt’\r'1\0”æB—¨	¸ÓŠòd¸Ù3‚ç#IœÒn€›Dxú?6Wå ©qPÂaµ[G#©¤×k2Şï±¡ˆ€í ÃÍ‘Zà€Êxœêç1Õ4çQ©Ègñë¼å2eğ+ô6†e•™¬æ–®+‘NÜ~ã,'“\\uº0d!qàQ\nÎa4çÄZÌ°æ\n'@ğÛı°ŞmY ¢db=¸\"™\r'Kù¥9Í×sh(®a1š‡z1Ë€I7JøÎ,\\Ô3¸ÜŠ»c€'*ã¨î¥\$h˜Î»á\0à0¬ÏX¤Cò’0Â7\r¶ƒËh7\ràPH…¡ g† P´œ!ƒrÄ;!«À)¬i#?*M˜ä¿ˆ#èÉB\\ˆ\"…£kµ\nÉ ®N˜ä88)Â´œ·0Ô¿‚²…+‘”<2É2[\r/«iZ[¤S\$”4Šdh9SJº\rÃ¨\$	Ğš&‡B˜¦ƒ\$’6…¢ØÕEBè*¼oÓø¶9£r˜9¢Ã,„†·`è9Fèlç'§OÎb˜¤#&ñˆ\\KÏHè:£’„Ëh‹¡¡\0Ş8*Ã,—R¥\$–9hêw\n‰p¦²Hè@‰ VB*øHq£^„£˜«Ó¢¥NHjPÙ¥¡Ù^F•õÁk:F’Øëš#R¬·¢(³¹ƒ,iK%ËeÇ²*»k\"Õ2J(	ƒÈ9Ì›6ø¯Ãï[\npR—\nx¦*£\"x0Ü—›–¢¨õ}b5«÷“`4JËJ4¤Y?_@`Š\r‚œjÛT3Ö©â®—	0lÏ(·í~‘¥@H¬&iã(ÛŸ¼’Ä®3Ù®(Ë):«h@²\rS¸²7 £@ÃvÄ’È;NÂ˜ò\$Ù²J:\r\nZF0ŒJú\\'—pŞéi]ll\rÇÁ…™î.õ¦÷òq.¡£¾›ÂéÇ«@)¤0ê“d«)šˆË©‰p‡O^X¿]Ìu;âíƒ¯Œ¨VMÆ:“¼=²’DŠ˜exÚ8G(ìtÛ'n×áO—æéÒz&#ÒŞ‹dÔÂ¿Mó~#5Î–8’-£6‹ÓÎ6¸Ü_0ÖWÉ²VïÀa>ÍÜ’¹ Ô—És\nPã€¥–ûldaè‘ƒp	Iâ@gr­2ÆIY°aEhÛªfÆGCª3¦ä:’pÒŞp\n¡áæ\$tnK×†Êq\"ò²s#bÊ`à·Â,‚”FAÛ”ÇôK\0";break;case"es":$i="E9jÌÊg:œãğQ8Ş 2œÄyÌÒb6D“lPät0œ„ Òv7‹EC	´ÂÃXÃÍ°3ÄrdI\$Òˆ„HJs!Jˆ'),n‡™f°,¨Üi7Økª@(Şr4™êd6“K:MÂ	`Âs•D“!¤ß.NrQB® 3e#¬@u7D²Ï<XMÑcyº\" ŸĞ¨“¸yçJ4Ó%ECLR%83T\r&H|z l¿œÎ²t6¦m2Â`¢1–K‚<ˆ\rs(†aœ`AD*İ`Ş\n)L€¢9–Şe:˜jİé33 Ù‘m§J½ÇU¬ãñ½9–aÕ7ÖÜÍYÈÉ!üg//u2Ï95¨*â6ˆã8 oSzŒ\0Ä<¬ LAˆˆ<ÂJ¨H…á g†-ó¶ŒcI†Y½m ÜÂ Íè÷,K£¬6#  ŒqFõ‰¨«È9B*\\4«¢ ËµCs¹Œã’º# ÔÀ;ÈÜ;\r+¤2ÇíBÅ*8	LË€‰Kr«H´CvúB@	¢ht)Š`PÈ2ãhÚ‹cü0‹ P˜ôã¬d+3-XØ4Oƒå#,M\0G‚›c*4‘à¨7k@!ŠbŒÊhÒÁ\0¬ü\rƒ³ËÊrªD6\"¬Ã(°c+P3*ãhêÃ8ÉP¦®4lºk(Œ)T„1SÈŠ@‘\rÅ F.Ã\"H3ÇM²-±€Òú=áb&»¯+İI\$¢(ÓTø°Ã²4Â\rÏÂP•-‹ĞŒcBÆÔƒµMb¥Hst0·*Sm¡ª‚À×,+…,VÛ(	‚\n7£ÉŞ‰	øR H\"Ú9¢Šz0¦®¢x¦*VÉr—\"ÒèA\$Œ1:š9# ê=_­:È–¥éˆ@‡Œ#«aHbLÆÛ@5v#G´(CéDŒ„ĞıºèSN+uCƒë©Ş¶ß’êU®?£zR ÈşÔG;@Ó~Ç˜30¦,rSøè¢©P³Bà÷@¤\"jÄ¨ŒŒì{¸¿zÂ²\$È’ÊŒ¥B;Ú÷ÇœÒCÎ\rÍ\0Ş¯ƒ•jÄî?<÷tÛƒcgèü{EÆyºkÚ‘ŒÚ†Õ/£}Ó0÷£=À·ÎˆØŒtXÇŒRV…WV‰à²îÚCZ%P~ı²£hê¯ã…Ş¿¶¢Hæ;.ÍÒ\$Ï\"èÊ]6×ÿm¦òíèÛ³;LxN˜c,Eµ}\$3’aŸ²\n¨ç¥tDt^diı·fğDŞÀ IKF«5j¿CjÓyA•°TĞ6Oy²6×Í\\³Pg‡( ŞpûzNHŞ¤£T€±ò#¤e#„5hí‘èx}hğ\$¾&ä}‚îIZ©çòlÉaflmüÙ#×´Hâg";break;case"de":$i="S4›Œ‚”@s4˜ÍS€~\n\$áFÃ	Ênñ‚!„èe4ˆÆSA°Îe9ÄÌ2sp¸M0\r&Ó	°AŠLQñv>i3œ˜kc™Îi9S™\n]>MæT“L2”n„š’ãa–\n'œ¨¨(— 7AŠ†”Ù]–‚„\0¢™Àäa…AD(¹Ôèz:›Œ÷³IÒyh‹ˆ\"ĞÚ†òpÄÓÓuøõ§Çª&Z™Òªr¥JM¹uó+†bÆh~xTÇÅÁE£—e>:›DüX€µ :lä“q¬Ë†Ù ,5!ÈNãğÃX(e7›xö+Ñ2‘7ˆ¦L)¿¦ËWÊ)ßÍÁ&ÌğW¯Ûïƒä+0Ï@ê†'¬ĞÜ9£ÃĞ&:)à¦à/A*!(ø‚>9CÊP\rÃxÁpHDAŠè:¸€RÚ6*£€°C\"Òğ¯Š\n.À0@P‚5³ÈØ¨#º€Ä£OŠ¦ƒHØ\nÑòø:C(Ì3\"\0003eâY\rÃC˜Á/BÄÑ!.3Ã\n²@Ã%bO2qà]	 sL’6shÅ7¡S*¶\rPJ \$Bhš\nb˜­¡p¶5RP»NĞØ‹<2Ú:c»˜Û<#d º!ƒ²¾!ŠbŒ\nƒ|Ì0#<³Q(t*Â§\"#<ÃhêŠF0n9-+ôõ8LÉtÅK•†3\ré4¢¬¥ÈÿX±#l²¢±#x4Ír´Z¬,p3c Âÿ¡³rİu¤cpXÉ×3ø2ØÃİf3\0PªÁVlòN7ÚÜ‹¢HİhI¤{¥Ë:ƒ£“¦Â¡–Â0€©)¬X«,ÌC\0000(øä¤Ë+ûÀ\n@ â¸¾MB˜„ú2ó\rÕ0—\nx¦*1HğÂ0‚7¨µ°¤2Ù£Ó>Ä ¬Rªêˆ£7míL9(*¹b š½0\nê²—< 9%£m`Î:®ø{2ğ@‹ş”·lHTÿ o#Ö÷/±{üÀ²CD¬:¤òÄµ?˜d\"şd8œğ%ÂÈŞ:„íLC¡ípIC,Şƒ}`8]IàéÅO#¢Ø®Ú¯Òób.²²0(e\0-£ä¶ã\nêá÷hÇ{Ğ9ˆR’ÄñCt¯,Ëb(Ü:\$v#e\n-\0Òã&Ël 7Êwè‡(\rX×N:Cs\nŒ¾‰•¢ÓÎÒĞ%	t)À@¹ÈÚy®NoíÃœÃP»tläÎ\0=â¬²”àw6¤ØŞ–´VWI\$\$Ä •%·åcÏHd4ò(ÃÎI}5aª¶s¼q_qºj©‘…tQŸ±V*‘Œ\0¢ºÊi…ı:9r.à1—@á¼Š|H¨ \r§˜ƒ:ĞÂu‰@a\r¬˜“†\"°†Xl#fÈ\"‡ˆgˆa²	/ş\0Æ—ŒŠ[9#X·\0yzp%0ÇAÖ ";break;case"fr":$i="ÃE§1iØŞu9ˆfS‘ĞÂi7à¢I´ào9œÍ&#a”@dšbÆøl0A&3A¦.\"q¤Ù(6˜O# É”Êå°ÈLé	Nd)2=*–KB\n0‚ t9AÎÆá–`v4ÏÁRCI!=N¦3©º=®Ì“	¸Îu2‚Š§I±¤çŒ§Y´tô :ß\r—é1°OmOè§ˆº4oË)TÚ}\n¥TœàS¡äá@ÄßNfÔä\n'Í¦#”DÖGŒ´sFj\n!š,5u¸æ\n!YÍ;^9I†©¿˜N ¢??eÏ¬K¦7è†‰2uºûŞ«s®Môyø€àaŒŞmGMéºùPÖsœO×î•¿,ÃÜ†'+sì¼¶#¨ì269ãhÊû6è`Ü4˜eCj÷#:òŒ\0Ş1 C DQ#vã-°Ü7A j„œhBÊ–!‘ã^7\$)KeÈ*J“¶6¼O”Hı\rÀP§Gc£€ƒRL\nÊC¨Ôİ¢Œ³Úµâ„0T!hHÔ7ªí°Š7 Ñk_BHÌ:&nÃªNxòç…Ñ<C:µpòÌ(óÑS>N.xæ˜'3hÜºÊÂ@	¢ht)Š`PÔ5ãhÚ‹c\rL0‹­»1³rvıˆ#2 Şªhê2U®{l6+’½ Ş5Âa\0†)ŠB2­8'«\n¼0L\"n2°ã•u>ÎI:’\r£¨Ø‡¶©‚Ô6¨3–,ÂÚ\0Ã'Áuª€¿£2…_^°Ê<]tØÃ ÈEÜşÂoúLa”_®•Å„>ÃKğ¾@UXĞƒ×I€ŠÊBlº\"««0R¸¿‹bÜ¤2l®D„Š@ c¨à‹¡µÒ)ANª¯æ‹Âë‹o\\•*\0 'Šb¢h¬\0Î9.¬\\9ÅHÈÂ/ì=¾š!öXé\nƒŒğ”¯&jÚ:×)Õnº¡:ıX7%K¾©Œ\"/nb()¡<á7tT“Şk›É#m\0˜ğEL TíJ<óÄOchŞğ¥\\x™Èò|ª•ÃQVXç1ñïW9%-YUÉG[Èpè˜;;…áÃ{İ\$¬íšwY°ÈÜ¦‰j¸#©€¦éAc8Â9'í—ˆyŞ‚Lİ¡TB ¼V¼‹Ã¾J^`Ëêú*¢ˆtåLÉmwq„ˆB-ew°GÊp¼¿Eó]]\0 œ;¡a*û8wöëC@˜2°Xc1aÄ¼vjTÌƒ'¦ø÷%‚NLàI*%à)°ÎÊßÒ{\$Láı•è	2\"€®–’HZ½È©^¥u¸¾’:“Õi&o ¼Â”YY/Æ­\n#¥¾ß9å1muöµŠ¢1Pu¸E’¦BÃ¡ƒM¼9\0 ÀSÑBèdßÂRÊ[¡|o6Á07†Â]‰ŒuPdÈšÀÂ–±Ğv&±>Ã\0Ãa˜0~s\rŒ:GÈø·E´ñÙ9¶\n’díÂy4AÊ<^";break;case"it":$i="S4˜Î§#xüC0œ &i”Üt7ˆ†S`€Ìi6Dãy¸A\n:œÌf˜€¸L0Ä0ÓqÌÓL'9tÊ%‹F#L5@€Js!I‰1X¼f7eÇ3¡–Lv:›â\0£|(Îi7c ¢tDèa1E#2i12°g:˜AESªÙ):ÖfæÊ5*›-—›3ã\n‰:¤Òé¢\n»\rA&*N¸œ^ôtÆV‚s­Ş›\\:Ãa@¢!†¿IUmE3¤(Üg4AD*Ä\$Ò\n)räs)¾¥4Ú¬ÔÍQÉ\$ªÚòÚ¢„Ìæwª™D¬; c0¯:¢a¾¯8NS#w;TN¨¢1C,²¦U6d&Ç^Ô%2Gšh'áòúRGŸÔp¡xHÀAŠí:\n¢ 7#«T'Mú²“¥i#T ºI€)¼Ì&\"…©’0Î-BxÎ3¶J˜’–»CJD×ˆ+ Ê3³Í|V;7 Sî2Ä#\n0+Ã<0…Ï³ãDH¬‚Ü©©0Â‰¦ƒx\$	Ğš&‡B˜¦ƒ ^6¡x¶<ÌƒÈº±x+EËHØ4CÒR2F SÒ9CnĞìíB Ş5¡Á\0†)ŠB2ÊĞÒ2\ráp@ØÉiHØ”¡CĞ4®Ò\"×³ã(Ì3E+K>1©˜ê1ŒjPçF¤èĞçU/,`Êñ#Œ\r^9#K0’3Êtòš:aE'²£X.j…IrT¼5`‡\\\"cs¥EPá7¢i4Ò»¥Èêö;Å_e«•Rã9¬HÒì‡\\+Ğ@(	…„:‚ª¯°aB~¥Cô½IÓ‚_,‹!m77˜)Š”p¥E uÄ€‰F­\rÌ¹ÈJ5I¥UÀèÈQ6}H7\"ë@äèØ)ı¼Œ¼ÏŞ6µ©,Ñ˜9È‹Ú«ªªÎl\"çxŞŸÈb›	£{~‹Á\"uÔ¹*ÔĞ²7¡\0Ğ0Ïj8@8!QÂ3a _£:Rû\n¾1,pÚµDíÃfJdì€Ü´î;‹[ÅÉÈ+M,¥ B°š†Í¯K<ˆäì4¬'Ò>‚’<:Sq[0|„wÉ)0PM(ØŒsxÆ5Şûı´­*¨Ó²9n”4éˆHÙV>úŒ€6ßC•ù\"HÜCQÇøİz“CˆÌ<\"k¢Sµ¬IMÉÄ\$)¾vÚZ.o¨uªË¶4œ<×­ò+7İg»Ü!zÛµÚöıÎ-®È·Ø¤Î+Üƒ©é%g¼øµŠUI'\ré<³À¤ı³f-E`¦GæâRní°'”‚KÉxE¨! ‡¬»[`]©ö=#`^8\ni/xè6#*D\0";break;case"et":$i="K0œÄóa”È 5šMÆC)°~\n#M&ÃH†¼‚œÍ†	Òm…D\$ˆìÃZÇÌ1CX¸M0šÎr©YºDf‰EgS©ÈëœÈRèŒN*eŠÁM'C©’\\t‹š\r £yÈÒg…G\r€¢¡„Å\r¤Aé\nU2œ\n‰fXmªu:AE	YÔİ·ÜbËÃAÒÉ2ÂççC)ÎıA¢ND£©ˆÂ 2Ì8keXÅ.€Nî&£\rAy1L€¢qÔÚb«N Ö©áÁ†¤2±xó\\66a2™ë™6ˆB¬˜N@¢´ äk\n&ÇC½TÖ)Ì¦óm°éV¹2gMñJ\r1:UmÙ£pİ©İFø (˜o¬&g3™”J×Ş¤±V†=Ì›h4CSì+\r)Rl²£C\"‹ĞJƒ±ÊX	„«¸,(7\ràPHÁ i† P:&`Pì0ÁËòH‚BšªÂª²çK¨Ü¶)ûYB(Z’0ËSl†‹˜Ê•¡1Ğ¦É°«Š^0ÉûV)£ƒ\"å.#£*Ì„@Œ`tBipÜ‹¢í\$Bhš\nb˜§\r¡p¶<ÏƒÈº÷>ªNR\rŒãˆ/RÀÈê·Ãc¯Ç#´síÚÎ¡\0†)ŠB0X‘®«¼î.#:Lª¡y*)s‹B3ƒeı¤I@Ü›0Éú\\)°©›Øó ã„Ÿ é-.²1´ÂÏ^>ƒM~®íÀÎ»)´øáP¬”\rMUµcäÉ¾©pŠÇ\rj¨äÈÅˆ0AE:«8Š¤©64°##HT’¬FuªøÂ>/Åe€(/÷£Ê0ÎJ‚¥Â€)ŠmÙ1\$Tºûh,JV¿'iè]‚Û…Œ6Ş.Ñ	:Rù'—>Qm¨)Ğ8¯¬Â:3à0Öˆ±k[ÊµĞ*Û¹Fƒ[W\n`æÌL£.j7®è0ê5ãøèçe%Âjy/F·#E]C†¾:Ø‰p²7Ó#@ÃIF«Èœ€<5Pá/0\0è©o\nò]¥t“\r/ğ²«Î1oÎ°ş§ƒ¢A\$Ëƒg½q‰××C=hÖW2°š”1‹ŒÇ(ÀÍÏ4¸9§c<&ŞSN¸Øib*úˆ(Ø—	#jH9#ÎäĞƒªÒò\\®«è¦Z•½XÊÇiš(æ\rºúå¬mÉ´_GR{êÑÕı|µÈ.šd¼<ŸG\$É¢ƒr—	lŒ7[¬ûCK²Èé\n7G¼ŸÒªH›â>5ëĞ–ÖüH+Ù|e©Y5DŠLO•4VLÈAğS,\\Ç¶W\nñm\nFˆ:’÷´B	@i! ";break;case"hu":$i="B4†ó˜€Äe7Œ£ğQ8Êm¦C|@Ìe6khÌ Ò 0ˆÌ5	ª2.DÓ	àÒm’\r0Y”Ù0TœŒ§A\0–\nB”J¦²a* laªN†SÑ¤×(a¯'G0Q–tdša¦“qP˜†@‚yŒDƒ	Ìôn˜Úí¶ù‰ªBa…3Ø)¬ÓK9Œ¶èÒ¤æt È¤”JE*™N”£‹ÁCHYÇãJÓÖ¨S=I\r ¢\$’%¤ÁM&F*D Œ¦pT,r™Úæ,5™èÂtÌ±YŞàÂ\n&LÎœ}X×ƒkAY#fRİ–Ì‰Q‹vók¤œ5 ¢)·Ï=„-)†š5Di4³`(«6÷‚y°È0¾¡(Èƒ1c @‰,\rP(´*ƒpŞ°\\¸b	j³ñÁ¥ä4?­xŞ9I\nt7+\r\rq:P¸iŠX¶Cbw\r#²b¹¬\n Š¥ƒKêê##¼*\$ƒÎ<»îét9Bæß¿©B7JZ¢ÿ<p@Ë\"20@Œ\rrøÈÙĞ<1È£dÎ6M%ãı6MÓ<É3MTØ\r¨#€Ş7Ğà8CkF-4hò.…Ãh\\2GŒkÅŠƒäåˆ¨ŒÊhäÙJ†Q©2ãè„¦)É\0ô7ÂOÑZapA/NÃ\$a—CPä»½Q¸ä±{×©Ğòû#<-K6£pÖ0¨Bv2hPÖ›95¢ö„ã,”T‹@ôÙxÙ9GHHÒ2¥m«kÛ(Ry\rRhèê:=RXÈ÷TññSU#d“,)êÚ»g°ñ‰Êâ½3Éóš“§mkäPĞ#<°:'‚€(^+ú­ MMÀŸ/w\$I…Ôä9öúB(	â˜¨?ã CV¿E°ÖçÃ çŒ/V.'	Ó„°Ã’®´s¬/ˆ0Ê˜©ºHÃ±:ú0ùÏb9?¥[”ä37l:OéóäÇNH<¥QáõÂcY²3àÈA‡[I#3ªéÄ¸”#xê2—„\$\rÀí#6l\"7„¨á¦Œ¨ˆĞ™¢#\nÅ|BjÂªÖ«gKsœèw‰ú<¹rßx¾‚ßí\\>€Øó½a‰Ê¸¥ælìdşÚvÄO?µªüi@†:XáXÆ™vıhl0\0ëØ iXŞ2\r#0òù(A\r9@\0Ú²TÙ1lOyÀH\r\0liæø!˜y\"HŠüŒº@!¸’ÀX0\nxAÉÅ WˆÛS!H)BÃIŞ-‡\\˜¶ˆW^+³lL 7šBaÓ8zUŒœÂ­ò`,È£mä‘¢POùõ§àı0\0Ñ<Œ1*ÀŞ’Já´ŒÉ%ı @ÓN9oÑ(‚¡àÈæA+‹fı·œp–fz<â\0 “Ñ<mèqg3¨LI!@¡\rh¤7=2ÂXÀPO-Êt8á-İT?x†¤2€";break;case"pl":$i="C=D£)Ìèeb¦Ä)ÜÒe7ÁEs9ÈÂn‡ÂÍ†“YÔ@b<±PFñ`Êm7±W‘³¹”\\\n&˜Mg3É´Âl7Dã)°×)M±ñ¨äxé\$œÈRò„l×%Œš`Òh\$¼àuƒAF#)è@z6šbà¢Zt0×\r’ñ\0(”ÄLÀMq3ÉŠr=Š#yÌõpeGšÊd7LòJõğõ~2Ş!AĞ‚“L§@ğKÁHéT—Š‡“„6y:OÎñƒY„N:›r'“ë\n\"mÑÔÂsÑftymÓ99mÊpú(e7ì‡+(™<‚ˆ¦MA¼ä\n*àõ&ı\\pHßÈà¢ÔÜŞg:š„3MÃØa8l7GÈæ‚O°œò C“„ï€Pƒ7HÂtƒ/‰ÈŒˆøÂ5€L)CÌ5\nŒP¸èa–c¸´.i0ÁpHEÁˆ)C«Z5C8È=!éøØ.b›¼:>.°Ò°€R\0<Ãr€æ{Z•;Ajl4xÂ2#¸Æ×\n‰;tÜ\ròäpö¤F!\nÚµƒJè„£qÀ®<i.¤B£,¬0Ëp9Î¤îËO3Ü°—Oó¤í'Põ+£iz‹/\"@	¢ht)Š`PÈ\r¡p¶9Tƒºº\r|Š(JC\nTK¸ØéÆlŠZï‰Èxà‹!Ã#Ô; J8Öˆ¦)Áp@)×q Äø§tUÂŒÎğÚ:ƒ\nğ…òsÊĞÎuK;ĞrˆÚ“iÂ—Îi°Î‹§H\"\rã:İïœ\0004§a\0 \$\n	x§\0'Vß@Œ!b¾÷>óêLÛ–òL—×#-w.5òF–Ö¸Ê\\O\".±%ë*d1Ìƒ%F)w-±*şP7±ãÓ#›¤%ı€0)BT–,PÖÚ\räÓ5æÉ3ç‡æQ\nşBã£vˆ\nHR¨c÷éX/£¢à81*c%„QƒÒA­ŒŒÚIXè–P´6ª‹õè1@\$Ê„°»`Ç¢ƒ¨Ä¯¡Ë‚f¯,|›5	øÜ3\r/‚,1#PİÄ2àP¥P¨õ®ÕÄ9¨Ãø<¥üºÌ«üâE…r\"n4ów&¥Òó\"“ÔÁXÉ2¢ı#´îH‘ÆL§Àİ8Ééx²7£Ã@Â;côev4Ô8Î‚„\n;8Kˆ?²4*^ÊÒ64/hà©p‹zûüû•ùÅ’`ëh0í¦ëö}\rçw3\$­ş¼&[Ù\n®œÂÂDJİO¡Ú§æŞá JŒCo:@àD\nQ°QÌ¼‚^Î˜la¬§ƒä¹“w(\"…’Ğ”sÀdE—Á7jîC«Iğ6¥RÈš9·r ¢,<‡Ç'èlñD8s¦2%\$8€ÛMy©põ4³\0”Co.õ½³\"ĞZ“sõx (›>F„Ï[—[!Œ‚|ˆØn#°Åû/È\\Wà;¢(oü­¨U\r™Ó[¦¹ÎôİĞDBƒ‡rI;Wuƒz[8áL%°@J3-\0)`fnNËòt5\$<ÜPàS’(E&q,˜zË¡~FÈ\\±ğï*H0k\r1–3“ĞÂŞÍi˜ÉÚ¢†‚\$¼g/dÒ\0";break;case"ca":$i="E9j˜€æe3NCğQ\$Úp7œÎf“°Ê 0™\rGSqĞÂrM‚1¤èx2œ…À¢a„@m4™%ÆØàÒm—%&Ó)Î\\d‘I\$Ò‰\rS §2¬‹#’Éå\"q¾C6€™M'‰Yˆë&ÎF“9¤Üa6‰ÕcA¤@h—Ì'xêl0ÊÅÓ!¤ß8N†“d˜ôaíÇX)Âğu¸<)Ó’³ˆ)1h)”ğt2›¢fı(çN¨Pêf©vxÓY­ÊÊ†“†356	ñ‡Xù¦Õ1§ ¢!†< ·,X‚gCÃ!Y· ¢Ä|ñˆ#™oæS¥LÂÖN`¢-ôébß›s[£òÆ\n!é;¦9¸óˆ\$›&3Lºğƒ'¨™†Y±0Ó„	Ğäœ\rÍèß©\n,#®\">áIÊğ³A(ÈCË@ÃÑDá.ª¨^qxbø%+—-àØƒÃzF6\rƒxÆ	ã’	†Z˜AâÆş@p*-'¯Ğãâ98PŠD2Œné†Y?Rˆ2B\n\$:¡íÑ%*Ğñ2£HãøÒ<b(Ü;?¬HN¸\$3»ú:)PøÆ±K0”¹/LØ\\ŠsØÂ7O³Ã@„°2¶ÒÜº9KóOÃ P\$Bhš\nb˜2xÚ6…âØÃYŒ\"ëˆĞct.±59³)’€ñì\n9O#Ğ*\rã[Bb˜¤#9ºÂŒpAfLË[?#ğ’H±\r«»z•Ìcs¦ĞE,áW‰[š‘Ç(ºzÁ¡+tš+rÛ)(:%*ÓélÁã<8\r0ÈèÈ¼öê\\—,ÏÛú9°k0¼¾ş-*Ì;Zé>æ®Œó@Ñ@ğ\"Ö·¹+ŠæÛ„â¯•´m( \$\n0ŞˆaÎr\n)aK4×¢Ò*2¥bbzÍhA\0 'Šb¢\rÒ	Â\$—ğËEm\nC(È:ÍÙ®Ÿaiê²Ì1¸P£ÿ¯·ƒ;'è½r’¡0Ì Y´É]>=£„“f¡<··oÔr1.ÇL5&Üğğw>,È8äP„')jsÌÄeëjß™.Ê€¸IX²7Â+€ì‹ª°JÇ<\"Ã>ó²C‚dĞ.«j\niwBzÄ]8¤\0„ì»MGÁş+‘jòŞJFƒŒæy1#¯›ÍÓÔø6ëêJ¹P/\"Ñ{ı—ü#OÇIüÜÚ;OˆÚz9h;£`V1°£0ftH\$>ÇÄ~Èø-H.MŠòÄæ£¦5çu¦(Å¤	»@‚–	:‚zJÈq`m-\0%5€¸Oùv/\0)ååV®\r\nGAí„¼,Æ`Œ#p¦… †)Ï[Êoh\$©¾\\‰\0a^¤\0–‚ÄJÂ‚1ÉKª8B ™ÂDˆ~ÁCÆy,Áœ–F>øP…Çœ:ÔvíX§ñ„4‚‡(xƒGâ9s˜IûQYìÚ0¨W0\nÆáW–NQu\ráĞ";break;case"pt":$i="E9jÌÊg:œãğQ9†£7ˆj‘ÀŞs9°Õ§c)°@e7&‚#\$8M'cx¸T0›L&ãDDÛ<M±\$œå)•Äbb)Ì…. ÏåRÁº2Î`&YqØÂz4›ÁFó‘¤Îi7MÚ|~¤t2›DC	Š:a9Ë„\0¢I’³2Nr@QB¸ 3e’S¬@u™—5 İZ™NtKˆ*“@¦ vcMN\\T4Å²fC)šÀiÅc±)Ö]­C—FÓ,(æ\n\"m‘ñÔäaÌ:K(…`×ÖAE#.G2›ö‡Jï\0™¶mÈ·c¥ròs×(v\0¢œ€ÑÀ\"›º—ÂŠ­%òÍ8ã}3™_€ÂL4Ñ°è(ª¯¸¡(ÈCÊĞÀĞDÉCÌ 7+A j„œ0¯¨PÆ„¯‰JÄ”¶¡\0Ø7Œk'N\"øë£JĞËe:ò#£(Æ¬¬#\"…©Ò±ˆƒ+,Œ¯R´\$±í¨Ó#r¢‹Çé\nGA«HÃ!£ò³†–Á<µ!²iE/²£Î®8@	¢ht)Š`PÈ2ãhÚ‹cü0‹¯\$·<£du\$ŒTĞ?Ô#j‘'±ğ¨7i\0@!ŠbŒ,²65	h@ôÌé*\"3+ƒhê6\$ŠÊšú¦)Ğ—=­D·-O\0ÆæÖÉtŠ-L’Ø’¼ã‡8lcƒ#\"Ê¼¶j ³}’\"«ûÁË® Ê‚°†ó£ŒU¿\n%‰rëY\r-4S¬´í?^¬–˜ĞÍª,pç!¯3\0±s(ñ}YÌ@(	…À‹Kf\n(R ,Úì9¢ÃrV¥Â€)Š”SvÒ&WÜ¾íøÜÒÁ˜2£Ôˆ­‰’hˆã¨@0±•¿€Iã+ş«\\Á\0Æ7Í2ßŞšŠ—>îÂÔŠÂê>¤›\rëµİ/ë/Ã¨7¨´äš®ë\0P›®İ£LS!Öš¢ì-!\0å­?(º\\,ç-ës¢#‚º‘PÃ>î°ãƒ´-cC:µ­´5h÷=œ¢KoèïRÁpòîâfĞCcŞŞ,2»S»,8MKän£Í¡l\r9}g}½8. ØŒuH#ƒÖ9ãî“x‹ÿÖ7èÿ<Äét»ìZšu†wawmìklŸ¶®wl®â¡\"ö#È5\réL˜-Õ`ëÛrøÒ{¸æ®ÏRF9Š±x,òòÕÆyŠ€7°@şko\"¤‘\0–\"ĞoÃ“@e€à1t‰ÑZzíá±½øHm€PL\rç°xS\nĞ9;yn,à?åVîÚ1Ò\nîœNQøx{…ğ\$†Ø†‚…‚F,™2Âdß¡o6ñEû5òvƒš\$1+ÈPª°";break;case"sl":$i="S:D‘–ib#L&ãHüNMğSh€Üa6Ø«ãIĞÒ 2N†ø	¬Ê.‡˜MGc,\$ÔaK\r†“Y¼ætH¤†Y0€ÕœÈR‚\$êK07@æ)¼¨Ã(‚OFãx*&i3šbæÈ||èa1M’\0(”e=MES„NÀiScI´X :ÛNVø€ËI3Ì\ræIE5;(4J4óL¯ËåËqŠÅPšëÆ“…ÁŠ €&Ã*Št:ÅkBI„ç]´‚ˆU£	Ê\n&Ác{r9”Şm2P¹NÑ6Ü\n°YùÚ15ÚïV¾dŞ º™A[Óœfâr4ËôBŸh©{5Eà~”œoÄÁ¦NĞZ0™\rÒÿ'\n¬ Ä•€L@cR¿@P ÓA#à#+^ªA l¤8BK0„®Z~9&©˜)¢hóĞ	‹ª:Òˆƒ*^ı»BHô°¼\0PŠ£F	ã#îüŒ®p+)­¾Î\rãrL¸£EØ5.‚lÒ\rÉò€Â²„±2Óº…¦\nk0LMŸ2ËhZ>9ºğ<Ã ´cH]8Lè`Ñ/MkôÚŒÉ@ô@P\$Bhš\nb˜2Ãh\\-TÈä.Èƒ#Å9Ç1ØÊğ l0é)Vá­ÚÔˆ&Oş\$i4º!ŠbŒÓ1+£¨Ì‰£«H9Â¿kØè”.OÂç/˜áV”(½ Áºa\0õ4ÆÈŠİ#¨û~7Œãz¿©ñ\\l˜'õ*JÒW‹’è‰.ëj¨;*\"ƒÓè\nQX,O’õÚcHÆ“¶H(ôÂ¤5<&÷¬2ëRŒˆ\"=?Œ•3o&€(B‚¢ÈûÔ;\rò¸ßh ©’hë­¸?o×¢x¦*W‚Ô‚ı³\"Ì4-i>0­©c[ H¼›`±9Ãï¾o­\0004Ço\0æ…æËƒ@-³¦:1JëşÂú8*\r\0;I»HÜÉ £\"à'#ã°ä›áI@²7¡\0Ñiê9£ÀÑ\rƒ(ÏVºóˆ C Ğ4u¢ÁÄ¥˜Ğ½¸¼ÜäìK¨ºC+£U¼¼9ˆZ~6Å|òĞ&:h&ñº4³€¦ù8Ä»xÀï–Ùg=Ú(¿§ïTÕàî¯¬ßã½ï“9Î¬'„úÏ^/yä/ãLÿàzŞk‚ø%„6cZf5¢É†ôùª‰¾AÔ]ñÃ'–#weï[àÆ›Â«øÏtş“øŞÈğc{0@6ı\$œÀÇòŸŸÙ„‚Mô‡®\"(vé\"+Å€± êİK€p?\$©uÓ´‹aA¨9™£¤eVôFëÅ¦–‡üÖ±+PíÈ'Ş~‰±s'ø7\$sôKĞ(0¡7¢´Saqeÿ#\0Ş~JĞg‹Çä\"\nNJø\naa°°ô±Šùö	dd†\"ôtË\rŒ6(ˆP®¶0a×ù×+å„Ò€!!¤Iqi½·^Gƒ€";break;case"lt":$i="T4šÎFHüN2œ'cÉ¬Ş b+ÍfSaĞÒ 3A\r†ñp(ša5œÍ&Ó	°êsŒF¡æCÉÓ(ˆ§2t0Ê\rÆS)œõ/:Mæ£v‚ÅP±¦“(Şr4™Í&é,æÄKÀÄÃ)¸é4±VqÑ\0(—%1SIÆ©ßƒÛ-Æ³M|@v4×XˆQ…B 8+cu…g29Í§‰ìüçA¡ÑAEc	Èéo¡Ø„hQ¤S5Á)TÌñÂt0ßNU¸&„æ\n*d:yìe5u9~Â¦k6UˆæSy·uP¢gïp:DR2™\$z„Ÿ'•ËåèšòŸá¨b¯òíyB¡\"5MÆ{Bs—;IğsO§×#«ZÎ½¸‚¿˜PªÏpæ5¬\"^À\$îózŒÒº§ L ƒ:		A°xè±CÈÊ×Ãx!hHÄÁ¨\$ŒªB¸/˜ê99èÒ¡.bG5â°Ê€i#^ Š€Ü5®(Ø0\nÚ ê «Ïøè¬F!\\ÿ/j è¹Â›Ç³ÂJ‘,Lzr™A®\nü×ÀLÌPÍœÉ65“z	8Îs¬Õ<MÑrÄºKLh\$	Ğš&‡B˜¦cÍ\$<‹¡hÚ6…£ É)CÔö3Ò\$\$\"ã\"„ã0­z+\nc(äÛ¼è;u¤O\\Ö!ŠbŒÍèš¨Ä„Â7%‹¢í?\"ÈÂ6éELâ«°;¤Õ´,²ö‰F)V”4ôóÖÁŒ¡\0Ü¡	2ÙŒK?¾¬Ò7\rcÌ„ÍÆh¸ÅmY(‹ìö'(íZôY¡,6\r*ğ”Aã:°‘I2^ú½V5Â¿\\K`ÔVJşû¾x}ö‘¥u:º<İBr°­0,Ó‚ªêËR¢ëÂº‡â—{Zâ³B€(0/3ABf£¢…\\:C¨Î\nx¦*iİA„˜ê’<-úëpÙõC4º6Hˆ@Ê­2j\\—HúØ@‡\rÃ2£m cë€ÜsPéy/lB;-?óZı\"ªm¦÷-ÉĞP…\"jû,ğhæ™Ü£¬Ëqnƒ¤3ÇöM—?¯ı#xê\r]Ãã«Â¸3Ãõà@:’ì:\r;P1+ˆìú¶ë|Ë3÷óTÍ˜„Ìî9L²ğ6¯q_¥xCKVˆË–MæŠ’3ÚV¤ñêp·è÷q3¼'ğ9£Lãò{³_Îÿp¼ø‡\"XÇ‚cX@7ÛîICªá2àfàÌKèt#¯½¾’‚\"DÈ©ECuğ‘xE²qÄÃÁx\"GHA\$ˆ„’67\0‘ÖI\\+ÄQ…€§åÜÈ\nkø¬¦@fÃ±•4'<<”ƒHAÊyX:A´‹ÂğÂæÈ %!æ	–*[UëjˆÏ*®2xÖ¸\n\n\$0‡zB7†¾\r¸è&ú\0iŒïÀ¤!À˜Ãhà*7ÇSÚá§)¨Å5¼€ô`ŠP	dn+\$’B\nzP	!¶D9C^‹sÂk¥tÍB¢¾Ïƒ˜e…vK¥†ùK3İ\"æp½€";break;case"tr":$i="E6šMÂ	Îi=ÁDCyÌòaØkcqÊr4›°É¼ä.1¨€íŒ™`fHl<@b7N§C¨€æÄX›§)À€Js!H!è´Êv1ÌÄf\"~3 ˜1Sà¨ñ¤Õ0›EC	ˆØoGMr.2\n%M†Ã	¸?OVÓ¤âÙ<œ™-²óL`ÜiíVÉÔæ…-ˆ\\Î’¨%’tZmvÙÁzta¯Q¨À(¦a<İŒ'*ŞŒÒh“D3m¶Ìz3™d+\\dÒ\n ÓADs)¾ŒtÎ“\r'<^r™=J£G“Io’Âeg\0¢†ŒßlİßM5 Q\nU€4n«Ù„Yïàtƒ¦xß9èŞa)’_ :~¿sÏ¶2½¯BòA l¤·“Ì4\r&N1/«\n.‹3ÉÚ²ó&éÊv£Ê46³Ã,%£‚:<Â:&Š¢éRĞ÷±\0ÖFÎ4\\Š\"Í#ö2Å1Z ‰G‰@Ø2\r!sôû(°èHS‰!Åñê3\$\$\nÒ6Éğ¦‚ t9`P¶<ÍÈºŒ#Z3ŒàQ†C§Zpî\nÉBmàPØà3Ã¨Ü:©-Üø‹ ÃĞ@b˜¤#!\0Õ\0Fp@##ÃjjÅppä°ºëb@!*“FœDH„%:ÎäúÂ0°Èœ\$zh9£j–2¸ƒ*šÀ@\rªëµ£bqY¼•­o\\¦ÌÈå^0	d:…\0ØÌƒ3NSÈ‹´©Uõ‹\rCBTBÀËc`Ò±Bªæ7<u\0Ö…×”â471‚€(JºT:%+ò,…	ı#BP¢0Æ©\nR˜§\r‰æ7i{2<³8¨ 'Šb£RŒ ÖªNŒ9\0Â¹ÏéÂ—/Iğç“!ôş0Š\"íŠ¿®#ÈÏA»F0â¨}ÄÂYÀÜÈ½eŒƒ]H¬’´i2z\$^\rÃÊµ¥RÆ¡‹€ËiÊå6B^£y\$ÈŞš¼)8@7,‚0;%9°@:,¨à½1{¼!—ÅŠğË¤2v·'5*^Æ7Dc(òÕ\"Ã°Ã]@<Äo|aXó<³¿c^Ï`¥;—“q¹(­ï­P®=aîÙ?€J6+”é.Æ¿5B€6oo¤èë{íÕ=y=hbñ#Ö<›ËùšWrá~NXú…Š@®+Ë\0ç>%*4º2qqÆO\r­ÉÔ©uÈ½è¦ö•òœ©w×¶ïI[í#f¨1ša0¦Á™EÆgÃÉóNd·:¢õKQ<ìe{†’:i a< €ù‡¢ØÇÌxÌÅuª'	a¼8ó°kß5½#f÷<‡Ï¯—vZÈÌ?4¯•­ÂîVÖq™WjışĞ";break;case"ro":$i="Ed&N†‘Àäe1šNcğQ8ê 0›`§S¤P@ÃWŒlDÈÆa0I”äu6AL¢œ˜í&ˆÒ4Ì–O)6˜O˜‘„Èm…¢)ÌŸ1 Àd)\$˜@n‡™gg3¤rbg7›Fó‘¤Îi7kL4q¸@b0¤IYÂt•Ô%‡SqĞ@t0˜Œ¦Ã,ÄX\n&O-\0¢\rğÎe™VMç9n	tµØS‘¶8t7˜`÷ÁJànÆA(³6n ¶¤(UU1*NH%³'6mYŠì4ë–‚ˆ–ù’ï<ÙÖ™	ƒLQ+œŒ&;„±8Yì QHÊÈM™L ¢9”Şm2+¸Œ\rSE2w›ïG?niÜîë€¢†j²ñ‰+¨ä0xÎÍ%c‚LœÃ*ë,\0Æõ¹ÃpŞ:À‚¨Ø§((Â¯Ğ J2{¨ô1K¼H<Œ£˜A jœpB8ŠA\nÚºº-€P¦®/³ Œ Ç®Œ@¦½¡‚Ó\nz¼3«ã¨9\rãpÒnV6<b„õ T– ò¼ÊÒ¦©2Vâ)Kƒ®®ÉŒ@‚±k³Ô!Hâ‰pšÌ áp ¡ã5»ÏˆRWQ*èæ®\r)‹¦ßB@	¢ht)Š`PÈ2ÃhÚcÍd<‹ R\0šºÒœ½+P\$69HÉrMŠbŒ»ã\\9XÒ1?p@ïPsí\0ÊŒ*DZÎ¤‹°Æ‡c¨Æ1Æ)Œ¦Æ.ÂVõ£ê’¥”2E«“àØ9	BY7JÕƒš·…À3Ş\$ï3ÀÃ@Ê=6¬”,:¦(sĞÎ6È£ğİ-êâX0¡ãƒı43¯p@3 öê¬ßd«ƒ:<3ìc‡e³¸ì4¯/Å\r1!1._˜Şá\$-ô0P¢…)ˆ›Œ#Uô(	â˜©š ³ˆ@œÑ¡\0©J®Úr‚6qlÔ-éXçjèâ»mäN“Ñ6%#Â‘ì ÃŒ¸Šê\r){D9¦0Š¯ª“œ¥ÒrÛÄ9y_2ğTˆP\n¢.ŒÂÏ—²ğmoñ(¼¥%Ë,†Š×ÖÏyf—\nëËÂP¥:0¸@4)z7ê»íÔÃvC&8-Ùpè4(+ÀÄ¾\\Ë_9HŞsÅ^áN6äº¬Æ2õPCÆ)úS@ãköcA;z[ªÃ°œªì6ïŠDµÔ?aL¦ËíHÒ‡ä˜Û+ö#Ä›;0†zƒ`+fä1†²TÏƒ±bQˆ%5’w(ïği~kd\" å\0Ñ\"ÍEà:(è=\r¢Ì\r­¶V*CÈ‰\"¥Ø–«²×\0O‰fyEì=ÃäKb™F)ùäĞ‹QpV‚NM¡ÀDÕßŒ€Õo‘œoÒî3@6.ğ@0…\\~dpa²bQã%pñ¢¨ş²)D‘½Ed\\Ì9èŸEœñO˜.Ä=F²ŞJèlL/MV’t+I!²ë\0Ë¹yJ‡^M2Ë\réğ>R1…H ";break;case"id":$i="A7\"É„Öi7Š†˜¬A8N‚i”Üg:ÅÌæ@€Äe9Ì'1p(„e9˜NQéˆç0Åáæ“Iê\"70#dp@%—˜'C–O!‘ˆÈ4Ìèe6gSY¼æo‹‚ç#IÎa6B3¸>l’Ñ£’3(ƒLAD‰Q„à Œ®3™Lö;):DSYÎn¯Oä’im\$æuGl’RTZº 8EŒ÷›l\0Ï\"…Lsv|Ä@wƒ`AE3¥r²B„HD©T\"7	#™Mñ]i¤D0™¨‡ QÉC­‚Š¬æ®cÇdu.N™9f1n)»{•nvjsO9A ”É¡ÛO2€Q¸Ş\nE¢AŸìjm¨ã¢‰Š8# Pª9ª\"&\r#j†± +Û”4ƒHĞÕ£Ê°¸\nä81\rL#V®#‚p	(àö.B[ÙOp@ÇÃÃbX9\r	0™ êàÚ1´qÇqê½8òhûë˜	¢ht)Š`P¶<ËƒÈº£hZ2€P—©T/£¨ˆ\rkVÍ¨7h°@!ŠbŒ!²À†Áe!ªz™ÊÚ£J2A%GóÈÙ4Ò-ú¤Œ¶ñºP4„ì—µ#HÌ’ŠtıB0¨C˜YÃÜ\nÇ¡ÉèÎ4¤¢\n”PuŒ‰(ŠÂ°ìJ–†©I\0æ2¸ëm†Ã\"ÌH \$\n	‚dãŒ”Úd(J”¦!ÏE—f¤®ˆ\nx¦*Y#’{K¥‰M#CC­A7 hÂÁ;ıäÌ3Kª:ªÃ0ÒŒ=,Ja;Êä“IÒì:±b.P#ñæ ™ß¯\rpî·ª%¦jò½&6:,K#À®1bÈŞÁG³¨@û3\nàí£=x:\rôHá7ªSÖ—¬Ã`ËTB(Š)é­2ó¤¢(ÍY 6éÍ*ùe	Ê\n™'¨CÇq«Ş‹;ïC2‹¼#BJ!µ£`V1Ã#¬'A~:èº(7¸ã0ó@‰,l16ª\r'¸új¶’ˆã\n7\"°”Ø¥Uø¬åˆ¨İÁ\"”?-Ë‚qÎA­7AD»Ê–®‹¼b:7V5®‰ëÌ=SÙµeêìX7§m·ğpóK7Õ4¼Ò‹+\nÅvxàä‰:ã“\0á×ÃKßs‹;Có\\lÛ/p9€";break;case"ru":$i="ĞI4QbŠ\r ²h-Z(KA{‚š	ØL´h,¶‚ù¢h£\r¼e ³…ÁdÃE!‚!\$Ë˜Ü{‚ a0¸<í\0.‰'\$Ë¨ü± ¼“.ä0èAs†F–óÈR\"7‡¢éÕ	4–‘\n@Lfq¹À´@%9¨\r;'Ø£SHâÂmÁZ(™Ü•BVµıêı‰Kd[|b³N‰\$¤kìU¡V M-ß¿Æ²‘Éj€ ‰+ä”ÕÖFš±,%Ò’bŠ¿·Ò‘š¸2æ]–_eá×2ŞßËs»ÍZ[Zğ×»E­Ic]ÅškÄ{¾ïÖXu®ÛÓÂÀÚêWÁ„l¯ıçEsSË(±ÅôI(Œ·ë²X‘¼n‚h‘è‘BÙ¡	t–?Éë‚–êb´§¹/\\¥äb\$I¡®\n¿?PI P½oÒu—‘@†³‚ˆ¿£Äk‘éØ©i+á\0>qäLOÀly {|¿Å¦<¼´)ëä¯1ÊœÅMû¢¯¢H¤~ÙJÉ*4Ü1M¡¡\"#ÉÓêá!ä|œÄŒËôC# PJ22iš\\ÎóÊç\0Ï“Á ÊOñ¢#(æ\rÃx¡pHÒAŠ%4EQ’\$Y\$jQA­åâG°å¬7¹)ä¾ÙÉÚŒ¤%¤\"ûJ	ë§S \r{™¢EjÈèÆuTRğ\n%'ÖF5P ­s!ŒÌO§š‰7[4­«’tº:ıÈ1\"¦¿‰<¿°ªŠ{m.3ìS2·jA|&…Î­]7ØØİê½ãAL‹ÍêŒßÕĞâ]o^\0„^òÏ‚S2Ú€¢Ö«d@¿N\n9E\n\$Œr£…ÂÚàYåâë]¹9]¶ƒ`è9Ckz°K±‚ß0öŒµ#ÂÊØ†)ŠB3@·Áî‰z\$vFwhÏšÅÀäF…&‰\"®*KZ°ÑJªáâVd£!è3I,L²	x‚­qB'N™p‘£k·2lÜ;môñ£\nêHóa\\‡ZèÑÎ0¼ï©ê†—Abl•;‰¾\$¢ôR—àÉp®¢órŞñ º7jMhé-»WÍûsİJZ:•+:{œRÙHÍÒÖŠ3îb@ç*“ ‰²Ü •7ï¿±»báÑª.kõ&éo€’G^Ê1Ÿ;›â†îä[8@S¼¬‰j­ÄSËÛ**İEÔÍÄSì@'…0¨Nr+&qª&uÆU\"ZTe]şb[Í„KnJ³:Q›™*!Ğı,Q\0Dd¼°¶ó‚CÉ‘Ó%}î§C§ŞÔ#=Î!“Æ@Î©ä™‚’DJ‘Šğ®!¦4²H ÃÚb\n%Ä(‰ËC…_„àÀ,öÔ˜B.hDi½òŞ|Uc°%Ä1/60SŠ\0Y\ráÔ€Âƒ( Q €8 ÒƒHl¡E\0èÁ\0u0‡Hò@ir0†)ığ…`†4¢uÇ&—tœpî©ÙYJ¬+‡EÆXx—Şr¸EfMŸ©Fö^k\$À—Éd–Š¤_e‘2¼À£v^Q¶\"’0ŞÆeqÆÄ3È¸™ì-¶Í\"¾pã™q\\Å42€ÙØln\$£ ÷Âù[i%&æÉÆ!¢#œó‹7çØ£¢Ì&é+›òŠg#r{	JLXO®y±4áƒ_\"a•Ğ\0ªR5`t=ÈÆE(:ã¢ô*Œ’g¬Ÿ^šFO¼r’¸â4ğG‡}\n­( ŒVÙ–˜Í<Ñ?Q¢!ˆ\ny²¶ŒFuÊ’aÚŸ©J{èÄ}E?(É6ŠLxÁM<û‡z0%oÎ¡.\$~™/bö•rp\$m„*Î,ÓÈta·D‘¥N«\rrJÂ˜›M(/ÔtX(9J‰e†¥-@ÀŞC i\rÁÆØôğCxr20:6xb:*mÉ*\\D–YüÔ•)¤…|Q	Õ´ãBWÊF¸™Er.­(š4æ€)-´ö§A`‚‘\"©ğ%TUW(åËb";break;case"uk":$i="ĞI4‚É ¿h-`­ì&ÑKÁMì9xĞ_4ÍÜ\n¾‚-Ú\\‘zÑAHãP)D@ÑBJ—1ÁtM9*]4P1è¼‘vÑFC#E¤bÑAÎ¥«†„^˜¹— (Ò%äA¢€—Ìd“9ú@%9´3V‚’e‚CV²ô´êIJY!ê½7' ¯¢w6ŠG-]Q ÔøœV=—Êd‹ä±\r@šˆ&Ø)M<ĞXİV¸šFĞZP ‘ÜÜï°A0m\rÒ¤¸¥Jc+,úæ[k£QmRM¢ˆ–T¡WŠùÎÉf­Ú*Ó¹=ÂÈ¢B zÈÅ×`”gàÙ´<BSË'zHšRÿŠ¶KïÚXš‚UEÀ®<°^ôÏ[ôKdÖ·XTm`‰’hr2‹¿d®«è™Bƒ¼N£äh=ÈRŠ’'-’®‰“N«^Ø»Kù‰“ëú¤Œ§äb&Q¿ƒl”Áñ\nH^æ‰–³qb^¿nÂÚG0¬¢¥N’tË6)R“‘ñºZ×;ÈkN£\"Æ+i@(Êi”i+ÊLÄµÎühÖ\"i;ò¡pHÍAŒ@ê‘ùt‰³\$@ ­CNÌìí³†ƒ.Æ@‰[†‡Á&)\"h\n˜ÌªQª¡hÚ0#eïˆ™.•j2:Ù¨Óš\"¤Œó#0›I¢{–ÆÒP{=;TkMd¶¼r2‡,A8£\"èí\$ÀJÄÏ×*HĞ×•¢„XœR¢ÀlmY6]p¡ÙÓ½¢ÒZjü»k6“\r°¦ÛHy²\$Lİ\"hğ I‡FK}_0YB‰¨¥ ]vp·@»F£Ñ]aG3Ò–¢HÈ€6ƒ”øıªH69ÂOªÜ†Çâ¦)ÌMJ‡¡rŠÙê³€Ÿ­°1¬ÃJj—‘(Kz’ë%ÕOIõÀÕ¶Ùš]zFïov\$ªÄº	t#Ò:!)©œôŒ¤H4I–\"’¥-²MèœI«ê<Ò)DcSˆÎÍoZ-Í;Rí>·³»–Zk¯§ªªöÖ†ØDÈÃ(÷›W¡ä¶(“ko¡\nÜ©Z,‘·»~àì‘1¡0Õªp[„€(«¯<à6Ü\0S½ç©u;-~t¤‘Ûú”GîmŞ¿NÈBÔ²Sé5dÙhˆR:¦>1RŒ–1‹Ì^u\"x¦*O0š„Ø¹q¡OĞ©<ãš´J7²hûh#p\$LÌÃ·ê¶m«ÄITïX£±!ÈT3ŠA¹'&%0YµÕ\"4Lymï1 &¸·İÑ«|KiÁBH„1®èª\$ÖXF ò:å‚,ÓhvQƒ ²!Š4 j<êÁÆ„#ÓÑ9L\"Èš…ŞA\0h!Ø2‚\0ÜÁ\0pA¤;)ÊÃ(sÒ(Pàt‰¡Ğ4˜´b\r–\nÆ8C j,SÉz7¨âKœ¨¿uÍ|…‘³`ä7‡\$”¡\$ˆç¤w nV¦5Tœ9‚)0¦A²Y–ô#HU0–¥Ê°Œ*'Ku[É¦×'4ŸK²†)H³£:“°jJ¸*àâ5ld6³¨Í¢foêèX\$w!:fgºMÂhşÒÉ™T\"øš¥ˆÔ-(gx‹—Æl¤\$4K…ED–dÔÜX(p¸;8æ¹ğ;ÎºN”Ã7SìíWÓQ.Â2FŞ™hŠ=‰Hbcœ(ò@¾) \$Ási¤!g«âN9F1\0‘(u\rsN¦ÔÛ¿ÂèNÊbäkI\$h»“13eœÏ‘bŸI¶Ä{RIhY¤ó«(²2J	JxªYàÂbğ UrÏ(†‚`o!4†àÏT*’R\r¡¼9DØÁ›n&ô…u˜P¡(CŒ·’U%Man›Õ¨hSIğ“4:V¤LT'(vtßÊ ¬©ùĞ“ŒÄ):ÇT\$!SkO£2¡’12–AÀ";break;case"sr":$i="ĞJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãğSAC4SPè\"ÒC\r_C!ÍÔ’3h¦\$‘XSA+ƒ/…ÑÔì†d²‡4Sp)+A|Ğ[´(”Ì®5¥N&x•>Š°•Ja«YdÎeœÈS¸*®Kj¨|ÚÏ”L`öEü^H—¯£²˜Ââ'U»®ã©ZŞ\rX45%„ìYDabK¨ìù0¸Aã©Ê4‚ü¼‚KrëˆT«I[„×ÚlJö	GZA)ú\\EGjXlÅÆ·]¨P´(\$ŞS™”Ì—LµÛIi*’ØFšİG .0wnLwyŠ´4x\"Êí\\^C£ª)ZëiƒÀV#«ÓA9çh- QÔœ®ô¸dœ¹ê†ç­éFóš\$’\$ +;*³¯©«¢hºj2Ï½F‚†£©+ò4µ#¤ü™10ƒÖ»+	’¬›Dë¼Th'®ÂˆÚFNJ·¤\náh‘Fë„X—À¡(È‚1qjÈÒB|•dÅIéClµˆêØ¨\\røb²DÈÄ!–oÜ¨¿'(\$Ò“±Û.áÁÑkù!Âä4ÔH%†ŒôÒEêd¤±,[†¾£¤ª\n8«9(#¤óV\$(Šr¥AO‚†º1+œDÑ OÑÉ\nšíI®º.ğ·	ÅUQíBä¶¸ÉªŞ At¥F¯•b\\®u}kX¦hY^VË1k]U5©_*…G-\rJ]ZÒË2t&¬Ih	@t&‰¡Ğ¦)C È\r£h\\-7ˆò.¬””Jæ…»ĞÎuxÕ¬Élâ6ƒ’:ĞêJ+ƒò Àá\0†)ŠB3BÎ–•|Ë Ñò`Ô:ëÊ¢_!\$\$(ñ\"«\$ˆ¦î#¶#l²3Œ½p¶¿ìê(‹@í5ÿÙì‹İc¯já¢4²N¦‹#£\":BaZËlß¥µ¸XâÆ1N?bÚìëé‘¬‰î»¿N†¶¤Õ\n—¬Œ\"¸Ã`\r‚ÌÛÍIî•5­{WŸ®ÏÓZ˜¡\0 \$\n\n.í\\o^¦—m­£Â›µ³#ğá3Êê(	â˜©Ÿîée_šÅ–®¨SJÂFÓì<\\ –Clõşá(Rª\\óLØèÚbê9zhäËöwÒÏû ˜w/r¿8MÈæ²=z€ÜV}Š’XÀhÆàş“ªúÔÓ†‘«Š¡ï-KÁºôò‚É}À	{´hnJBÜí¹˜,ã¨@v €7ğ@iÁ¤6PÎC˜ :‡\0ÈC¤ 4ÁèC\rz„C LX<\$„Äù\r›%*÷©LÈ4 ¾HR„aZ-…§…\0£¢Dë\0mHu}½„*dUBGG\ryêõşšIJ|ªå]Ä²¢Àˆ‰å)õ—LÌL<UÅiÖØC`¡°•Ò_…Ô.8'à“;²àA#á~.üA“´›++¤Œ¬È”şZL>)˜Ø«\"³F‰Ò.BFÊKIGge]ğ¨R‚îM¯PÄŠ‘ÒüRcÚ¢(îQö‰‚hÚÔ‹ºGÌæ¡S2BQH‹M=év‹k¸%qÔ·šgÎ€ˆÃÛ#«b £òF‘d<Ã‘óM6=\$PRkíxÄ‹É²UdÜ<KX”ˆ‡@ãÒ~?ÏÜÂv”aŞrfyÒ‰…^x·S3åOC9Ú#!5„ª,H£k(Õ»©=kğÆÑA5&ÀĞAr ê¼²l";break;case"zh":$i="ä^¨ês•\\šr¤îõâ|ä\\#]5ìAä^(Éd;‘v¶q @§2q\0åRB¨B¹pçM!#qØü¡NåX#â¡\0”æB’G#Ëh‚5Ê­L9SŠ‰Î©]œ¨äû•N‹’,”2TK¡CL‘…€§B½ZèT !ëÕû(¨²+Öğm½Ğ¿L¹I·2%RåX¥b\nÙ‚ €ˆ*¡‰©õ6ƒ4[9Vë*=&—·*È…»b»r§«dªÂ—’%Ô²Tû™.¶t¥Ö•%j]Î¬SDPõÒ2î›r¢À§:õ\"ç]§*Hu*åM¯œ«ÕI—¯\\ëÄ³¡|‘r¦{VüÚŞ©+ĞÎuˆ™Ğ/R°õúuÌŒ@¹ş?œoL]—GIB\\¤„áW PJ2\r9ĞE\$cÈÊ9CpŞˆ\\pØj’áÎZ:¨ñvs‰ÑzF¸¥rHGG)tGGI2H ÄÒ¤E”tIÌE•.!(Z¨äÒAÊHN”§AU!åÁvt”DÂHGÆ\$)K“,2>©äŒ€÷Api`@ÉrjjÉœ³,ÎÌÍ2–	@t&‰¡Ğ¦)BØóA\"è\\6¡pÈ2\$…™Pt’‹T!H!`s±pØ:P*ŒE/\nà×#D©b˜¤#ñHs‘\$bštäkı8ÌÄX¯œ¤i*ÇÔu @3qÁO±ÈÁ4²“§)~BÀEÙĞQhI^ÌÙ%å–WÙ¬šîCµˆc|¹V•±,X?O~°Ô!råm0WX\nÒ¸¾¯ì\n²­“’(W¾ïÊb\n@ _GÚëzD'ÈaÇ%RlÂà‚x¦*a\r-æ¦ŞzpHÒ×›6î)ÊQÇ)P'£˜@t±az‚’(©vRb“PFÅ\$\\œäİè°²E‘ÌM–ö‡¢èé’sK‡,½§èÌjÂí»®ıö®+Õ’Â,ã¨@4#°ÊBÁ\0à9\r#°Ò6£<&ƒx@: Â:mc Ğ4æC Â1nséf©[*r—%³S¹#¸ï<r‘ÈÚ¤ºR¢[ÄºÚ2RAPc¬ ¤y.à´Åébr’dk!Óƒ`V1ƒHÆ5„xÜ!\0ì0ƒ¯½\r£xÈ4ŒÃÈ@4œTÓ°é')^^jÅ-’ˆ¢eí'!•+,¢¯¸œ¾½(Ñš¤B–gAJ…ú¶@•ëZêTkœÁÒ\$ÅğæÆ­(?Q\\9„ ¹|Ã”@Ã‚H:¤”“‰êAaA07†ƒ<ƒ¨1æ‡&Ößœ1\$+~œ&9„ñÊjÂ,t‰¡z^à‡*/iî%â¤RÎÉƒÈ…Š&J¦K#èl*YôµÓÀ!Txƒ\0";break;case"zh-tw":$i="ä^¨ê%Ó•\\šr¥ÑÎõâ|çB(\\Ë4«‘pŠr –neRQÌ¡D8Ğ S•\nt*.tÒ9E‘N”ÊAÊ¤S¹V÷:	t%9Røú\",r«STâ¢©‚ ’Tr}Ê§EĞÖI'2qèY¡ÜÉdË¡B¨‘I€§B©=)@ ÷:RœèU¢îwUDYåD%äËh²¶,€r b)àèe7Í&óp‚i¡Çh®UºÊ“K¦æ/wgB\néP§œ©êË™*¸¤¥èiu-u>æL )dœ•Z—s«Ñe•ÉtŒt 3È…´=l²t-ÕòUÊú\0•’àlÔç:İPè^+Ü©šs•p³t&aÎUzSs¦Wre-\r`¸r.P¿šê±–)v]%\n¡“ŒA|F0ğ)£ @1,xP9… Pò2`PÜ7A bœH¨d8+'!v]œÄ!€§9zW(dq\$r—Dxš&È:JE¢¥é9%ÁÌIñù6ù•¤ÒA–±sšrÄ1ĞC•K‘p]µb†GÇoô~L’²L—LÎOŒÚ@,´\$2œª]–ÌÁÎG—Êbœ\$	Ğš&‡B˜¦cÍ<‹¡pÚ6…Ã É5¾d9u\$IRbÀ±,€PØ:K‘x]+ªCÈ‡¢-q–\0†)ŠB0@:\rã[ ´¯YÒC‘°å7;g),WOÏ‘ËMÄBlEìÀ§2L @r—í9@DVr’¤úùiZŒ›+8\$	Û!„e{_Ø\$±`ş>“õZJÕéiÌC'AZD³2¶®‘!–Z\$Ä)ÌT'9jB+Jâ½n¹ÌJç1ZV€(`øN†áèa !˜F\nx¦*úÆL¦åRnS­'1pM§WêÃ™Ù¤³JBœ¥TE°æV	IZƒ!\n“0t%”\nı“etánÛäATš‰+:se¤«œúË18cS)K´k,¾Vî»ï#‚,Äc0,ã¨@4#°ÊCá\0à9\r#°Ò6£<9[á\0ê8ƒ[N–:#\$¤#<¥.Eù:Ï¢Å1Î\\—‡;º<™ËÑuÁM¶¾‹óÄ«,¾Lì0y¸kD{D@%ébt“åû0!Ôƒ`V1ƒHÆ5„°ÂÃØ:ğuÀ@6ã Ò3!\0Ò:tó8'Duë¹Õ¨¥ÓNú£¡Ÿ¬ÚwŠg).‘.'@:fŒT;ÂrE	`CA~+˜¸¹39 ¤.}Â…1ÀŞ_0nà*B‡ÆÃ“ƒr®p¡ˆ‘\0Á æÉt\nGò(Åé%‡‰MD#Ä™”2,ˆğUdT‹cü,¥œ¶BC\\.ûuˆâ¡)Š€";break;case"ja":$i="åW'İ\nc—ƒ/ É˜2-Ş¼O‚œh4«¡‹)\"j¸²J,¢‰ âp„¶&¼‰¢`Êx26MÅ’`§2q\0åRK\"‘hÂ\n4ƒ –±˜²è@%9¢S¸½W¹U©‡*qQ„ aHŠ\nfçT®NT*–†“ÄÒÑ¸4‚‹\"¥õÉ“\0‚N…BĞªOœ‹Õû(¨‰ PdÔZÜ‹ƒ+œÈµ•xµs*`H5ìw¿ƒ(àÊh2> ƒEqTs.+MŸ[(Ç2^@UÔª•jÅÍ3KÒ å%´\0šs¯•.Tò.h•XT’óDº•Ì™¼9’È~“•Ó‰¤)×\$ª—.AÈhˆš¾Ò‚¨óbH%ÄYUŒzâj®g;ö‹(™ùªä‹4D~à=å±ÊHªY#\0=«ID©i1X)ÅšhX9läL[p‰ÃPãbAÃÇI@BœäÙ\\È°dáÌD	¢lr—ËtfA±®,\\A(È<*t<Œ­hÜ7A bœ¨¦…!8s–…]—g1G¾lì„õ¬dAm.‹JÆ QÒ@—1À¿±V±–åqÊC—G!t±(\$œÄa~²©¡n]œ…Ù0‰µéê=\$rå‹#Ï3:‚IS4İ:Ş«UB\"s‘åòª«,“ªë».ÀtïÁÑÎS’@P¶<ØÈº\r£h\\2Ê-\$ƒ¢p<…C`è9>jÏœ…Ás­Ub˜¤#@O{İ.ÄÊCµ-8Œ íJÓµ(4ÛYhú-g¾eÚB‹èštY£©©r‘POz-!Ó-AÕ_dôà˜2'„V)©>t“\$ƒ½H*ï~Cpê±–•F%ŠbØÃo\\î’ß±\\<É²¬»2Í³­š¸K•Rº+ÀP \$\n€Ë3ÑĞÎ!äB‡¥Z65¿DAjË^·bQ2¶®¦b€)Š–‹ŞĞ6iÂX@¥Ä\n@‘ÍõÛ¹Zm„¢EÒ:r–£UŠ!„ @‘m`@¾®?œ¥·¾!™ß½õ9EñŒfAG)EdˆÖ ­«(Œ]FXI6Z;PçWUH£Ÿ_Ña4UTuˆ5V[•I6C/h\"Û£®+Ø#xê\rì2„x@8CHì4ƒ(Ï&„ Ş£€È0Àè4\r#ŸÊ0Œ_\\ÁäëuüJdˆ„Ê\"Oğİñ:ø½a‚€±ºwR§ÒC¤ÎÍÚ¼pÖ¸laŒ6ÆÁ\0o\rÀ€0‚\0ìC`u}Ïœ6†ğÈC0y¤:?tŒäŞS¤eÂN¡cØíØ\"e¡3–²éšuNä­Ì´·9Ş#Æy‘xŠ¦%…œ/ıv;+Ç!dXÿ\$Ş‘	¨€âÔ¼Cr#\0PL\rá††àÏcšG…¡Éì>°èK…¬Ha<'šë\$Éb¯„‡øù“ö\$Ó:Ğ@ÍÍ„¥¤¸mÜleˆ„ AÄd÷Ç1Ğ1-í‡\nhÁ€";break;case"ta":$i="àW* øiÀ¯FÁ\\Hd_†«•Ğô+ÁQh:.\0ªƒÂUÒz A\0‰«Ğğ”V®XÈ`„¢B NÃy„È)“« Êô4:d®‡Ã(2õ|²j®ZÀå”yl”]W%c±ú<]W*fğ,IR¬ÓÕTôı5²@túŠ½ œÈUxâ¾=#®Áîğ	}VEUD_*z,Ã6’Î¦ÓĞò)¬YhTü6fm„gî”õM„©èUØŠ¸²±)E@:Â&?O¦ß£•úÂ“qtÁPhxİÌŠÏv ¤ £_åÚ9öFó’<¦ã™¤Şn @6Ò=Ån³h­j¢ğÎv>%!ÅzoòI“®ñ¬è÷?b»@±K[ú¤¢+\\Š•Ïâ\"æ!\n	j§½\$B,§¿HB°G \r+Õ\n\$-ê\\³ j	\\§¦-TJ@²j‚%NZ”‘ªÂŞş–zn\nc ä4Ã;0®\$¨R§¹â1­Dº¶%t‘=1‹œ¶:N ¤3‘¸2ãhË2êÄˆÉLúÑ52“üƒÉ¯LPÀ5JôıIĞëo©ğ4ç\"Fâ¨æ2QúÒş“îì‚­ÓdÒ¬E“{f’Ñ‹DjşÅ4‰@ğš•#½Ô|%,?«¬ßLOrÏ+ÀŠÇMï¤ï26”Õa ¨Q\r^¾Ê´,ŒŠ\nIOÉ@My_4Ó3TĞMïZ#\nÆ#ÈÊ9CpŞ¨^v¸cE¥u‘ Ê­S*BĞêÔs³ıK¿±…‰+È¥ú±Æ•ÓêÁFLb,ÂÑ»'½®E¢(×ëß+º©†ş“Ëuù53WD{Ğë£ƒ\$’mX¹]O²û7¸î5ğÔĞÕ?WNL9ƒb/vPûVm„(øZ#†µQš\"Ã(9n+—­R¥§¿áu…^æn¦j§ç	u4ÖXä¸âÙúºµjô\"B¿¹³—åôQ]GäÀ\$Bhš\nb˜2xÚ6…âØó»\"íç}A3<>Ç.Íì Ñ¿¬B‚ã¥øV¸%Í\r‘Õæ§–Š}ÄõD1Å\0;PÀ†)ŠB2‚Ğ/ò£ªÅXÃ*w.‹_J’½èˆä7óN÷•ä3­½×v©‰N­\rt¡RêÆÄ©c+ÙQuÚŠ`½OÆÎ‹r—ù~·¡sJşJfÁ1N\0[Ï+\\Æ·×­Bæ•Êd!qëŠØ¸qi|4‘YOÃ¾|šïÌ¹A-\\®Í*‡¶¹ú-	•o4GÀˆˆ;ºd®ñŠ»â§V* \"*‰ı#\$ù—+6I]1¼â\"åÕÉıY…-¨³Lñ”‘Ò8  2“¶Ù!Êu…öÂ×‚€H\nô.È6û™ÑvG¹æ·Ô\nÌ<0¥RšóĞıÒ§,4‰Â0xS\nÁª£!ı‰°>÷Õ£¦Pq\n¾c4ë\r\\9])µ§d®™92  1ğÌC8uA„:àÜ iA”1È×9\"ê{ÄÁáÁÓÄÅÕi[ÊÚ»•péÚZhgõ¢›Y@ÄÕ¼£+ëŠŸù``cğ?²¥Y¿ˆô€%rujÏÊ?@PNĞm‡…\rÄ®9tDeâÆ—Ò±ğ-ÄÚÈÊ„,\rÛÅ3Tk\0PY\ráÔ€ÂçÒÁ‡`Ò(gYà€:ğ@Nƒ\$Œ³Ğ4ç=bínÅÕäÀÉ}_ÊYMË‚ÀM#Sì8ó^a¼)©“X¯I­qÉ×pš¦cI¡e™ø½\"¼Òš˜®3OæŒĞÇhi¥¢ÉTÅÿ©LyÜÃfGâW¼b[e›3“EˆG*”ú•€­£ªª{4e”[eoJLÇ”‹ÚI¦‰äˆp†ƒ`+a°4†0Öø  €;ØgÜõ´7ÉÌA\0i…^ÆÅâÀæé3}ôåQÀég1Ì oAÒe·ÃŠ¾åÛY—¦Š‹ \n›PYh›²J‹)éÅ…š–\$Ø›c\\uƒRŞÊ5ªéµÓN\ršH2n]»ˆbé-ö>'H•IMõë%bÁDÖcåaì9iX¬\\{lÚ`Ù÷Ê¡R7\nA”6HÉÔ/©K®†Ôz_	%(võUÀUr;bMÖ±ö?h2ØY¥<v´ÜºSÑ3ØÄ¨ÁÂšŒº¢i SäŞWÙµ`,¼ÙF–jÄÕ˜‚a=’(÷aªçb§Üù†+1VÈdùM‹×”÷\\L£#+;s!àÊ „}VŠóĞx{'(„%cZPáb¬c‚NQŠVÖòc»V˜ªã¾kuk„\r²”rÌe!äğšW³qÍ©1…]­Å.÷+_#";break;case"bn":$i="àS)\nt]\0_ˆ 	XD)L¨„@Ğ4l5€ÁP\\}\0CÀPä4U\"¢à\nt1L°C—h¤[\0VC—1iª™7CÃ¢\nhú•ISLåóÕdz\0§Œ%aÈXB	4SÊ”ÊhÂ’¢H\$S*ršB¦N§2º‘`Ù¥\n{:Â[)ªÔà5<V]¦P¨*5!-eYB){ì`¦†)Ğp\n<.ñ‡'ğjjj™cªÙd8Qe\"oaS-ãÔŠn5L¯œ@'z……##ZTC‘ùe6j‰ºËk©Y«¦…MÌZáÚÛöÃ9²²İ·“\nËƒÑh)zøó7?âõîJdL9ÑÍô·½•2ª‘JA@0úîrú‘ÚFÜz™²È;¸Szzâ/Ì{>ÿ5b†¸ÁJB¬³·Äš\0ç;ÏË\\J©;è²ÀP[ğ_¾ìB¢Õ¯jÂü“µ\nã ¤,ï*Ğô8©{ÔÌZÊ¥BÅ;}'¥\nÄ”ÄºÄ‡ÀÍqJ§GÈ\0‡H’3ÆTBL¢‚³\r‹<€5Rkú¾/È¤\"q©n‡E‹‹ğû£#–öàLÛ7µ¤S\0 o‰L\\CÈÊ9CpŞ°\\”8bÃ2òÁ8¤6¢îêË*J{%µœÔ<ôÊS\$	¢ˆÛ'°T.îÅz0ê/Ìêâ‹É\0EÖJÑ«:ÎY)\\jÈğl¶Ô dı7=R*Õ;*NöD®àÌ,RL²”)&Nr:×a\0P€HÊ¹M\"áLÑj,ª±Tğ#¾Á¨Ó”İm3ví¿\"Ù÷sZmE«O+7dïF¯FÊ”ÍÙLÃÉ@	¢ht)Š`Pè\r¡p¶5cƒP»!ÜJò 4¬SWÎloÕ’Õ^¼ºtøØ:TÜ€×4ğ‚ª9å9§„¦)ÌË/`4*2¾Ç'¥rI—1×=ık:ØD£‘ ‘?\0[q[B×7.„›‚ŞBø³¹\r-<)rVaµ²0J1.îÙ}§¿³+šË<[:%t½(u¶³Ã)L‡L«<Îè`wzèov¢”_êêKƒÄ›ÜIú¸Ç–,h¿:­IJmXVã;¸‹:†ä.;TtíÀ@(	†¹¦mÖ¼€uIë†ÍõëÈPµßn©/n÷j?FëF\\IÌµÒÀ¸)Šˆw°¸Çú¯¼²ÇğõÕØ–0òéJõ”eËPçº¨k)fûFŞ¡å‰ê¸E²o2Dÿ—â gŸiYXH-.›ã:˜±pKåƒ4´j‘j{tMğ°ƒ;_'©ˆ@·„XéQ«[f&ı±:Ò\0Á2Z„	zÂ5òR–Úz/™S©E–ûadle7ÔTçà!Æ>ÇÛ't\"Q„(ád7‡P@v A\0àƒHv\r!°2†tş oÔ8@Â\"Øt\r¥ù‡@Â£!nY­0ÈÓT)…Ç¢?Š8ºŞZ?éİ®Ä‚·ˆr°.+‘v°B‚óˆ×gnB6ñ&ÔŒye¥üS¤ù6²O1U)m,AS±ÔúÙ=q@şÃ8ŠMt\$\\æ¸Ç³˜dedC…å\06hXc\r¤1†°@Ãp  €;ØcŒj\r¡¼2ÌA\0ibëayË2£á	^ğá<›'’YĞŒ+RGÖí0aq>l«É£KB•çTŒ©îwª)äïôõ%Æ>“¹…> éHŸ0|í?ÊÔ2°mT.ÉqLÏ\$êSr5å\"Ø”éÛ“l¡Ô¥ĞR2z‹%‘%š	©™@F%6UHÔõ,²z+İÙ®M1%UD()„É=*FÅŸÓf„\$<1yP\rbåÿÛ\\£3®%.ND@'äè;sµÃ“d‚`o3t7zÑZ“tÛQn7Gj]P¨£Ça}‚À¯s7!àœ%¦¥'¢0 Æ^Ä²S7EÒ’>J4óHz%cÈÅ€mtM’ç=Yi{†’Ä¬€";break;case"ar":$i="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø*‚.›(¦ÂÆ§EĞ±Äu²l.còN.6­…d2W.–ÉæğôajÙDÂà(\0”æB˜6\$‰\n3Âäh‰£f¨¯˜IéQÖÂêcK‚Ï¤(¨²•UU¦‘(\"²%J«@¦Êü†Ìºl*n³†ÂÎ¹‹¡\"Ò44.P¶ àŠ[íÿ‹™D¨µ,2SÛó*¡ÕçI¥àgQz¤Ö¯YCZ¥WåùTØWd³§5½Ã³+‚ºDÖ\\gª©ŠÎ[ã`›\n¸=mMP½6…DBó€Â\"wëÓejÌóö|lÍc½åµÒœY,¼ÍòÛÊ¢Æc¯¿MQP)ÜM\\¸¹OÂªı k{şD?»Ä˜°Aj¨­ez W·)úP™•)ÚüÌº©êôŒˆ!P¸# ò2`PÜ7A j„œ`¦1fU¢Ä\n6•‘J“¬Ïº¸´£…Bb™ÂŒ‹xˆº,cc\"+o³Xê\$Èá^Ê1(sèƒ£lôªfÃª)‹*„:lÉC/%ÉC6©\$ÑÔ<¤±<6>é±±:±ªZ‹«“ºÌT´9E/‰@t&‰¡Ğ¦)CPÔ£h^-Œ4ÈÂ.ÈOÊ7¬\r‹èšAŠálº¨ä€­¸ƒè67-‹3	6b¦)Á\0¨7c(Ü‚VFÁnlÁt|Â«LB\\Å,%ÊÙ=Ğ-c(Æ­(kv¼«(kV°9+‚BA‹ ´+L…¡Å¼¦«46„ÎjÒC¡7cîeÃLLJÚÙÒºO\\ò›ı\0+)Ahş\$ñŞÔ>—Š×³z4#Í\"ª«ÌÌ¶0­ã(Pà4’‰°E¾§ã‘óJµ\"w,À%ÙuX\nx¦*!hR®C0Š•c;ÓÔF´»ér8Z ‰šjBåOfrËMèz‰¤ê’¡d¨Vo’ıåê3\r‡?õR¹¬ÏÂ€()6®¢l	Ô§§Èîã=5ø\r?¬ÄXïzë‰¼ìÉXğ[Ô…¿@‹*Î„­Kt¯y9É¢`,ã¨@4#°ÊEa\0à9\r#°Ò6£<Pƒx@: Â:tc Ğ4}€Â1uŠIZ­2eâ7íú¶Ÿğ>úÉr*ªP\\y3Û›4›\nv×´+#Ô™T¨À¹¬ÏªïÔ„«Oé€†:C`V1ƒHÆ5„}~0„°Â«¹vA´7†@ÒƒÈ \r!Ğ¤°X\r©~Xdxò-BÔyÙ«ë(ˆl’V6„\r	#\$g¼Â­Ø!ÇrÈÇ½ğåA™kí9p–b@OLÛÆ=f\0–“·•¸ Eş@DBË3ÏBKœ€7B\0|ûd[Å£\rP<è}@A„z`o07pc €ÉÑ»`èH±J¹£óuÎi~É	Ä³Ğ´\rtZdˆÔÈŠ¶ÎR›–.P˜Â¹”âô…±-ˆ¬²";break;case"fa":$i="ÙB¶ğÂ™²†6Pí…›aTÛF6í„ø)²‚l)âM…ˆ°¨…G•˜ãj&°’,[(¨J3+l¡!(i\\25W‚„S™\n<­©Û(6Â®9¡!¨-…”…³.¡\"¦1j„ÂdÙD6•ˆ”Î–±‰›\néz!b-f6zÔJ±kFBk5ºÊ¾½X'\"Ê?/CZ&Êª|‘_\n‹! XU8‚ ÚTÄ)ÈJúo¥aáj|•2!GFixuH¨™Á#JlıÚy|ÆD&0”-ré]’CUVˆ=r4¹d%7õ	sKœéo9õuÊ=M€ÒlV¤İ	ÍØ°÷ZÄBÙÕTd1­\$Mgã³DwP¨ÌYŸ°g\"+I4r-J¡!a4KÏV‹iŠ\0›:@¬¸ªâTºKDÏ°ÒÚWµ«Ô—°!DÓ8¡(È‘#0€D’#(æ\rÃx!hHÆAªÄV0jÒ°‹!e‹…è²°Hû‚T´,;‚(Ú%,EÌô¤Û\0Ò¬ˆÑP‹2ÍÓFB8R,ƒ±åJ¨Ğ½lËÆÚ«%²¸\\»M	Y.6JÌ¼öH.¡€TI‘ˆd™OK*<ê•ñ?@PT\rşÏm™±D-hD àP\$Bhš\nb˜-5(ò.…£hÚŒƒ\"Ä²AjÓx¥H²ÌŒä1è6,Hmc¿#\"¤hër‡Èôœ‘¯0\"\\²T³Z\nƒxÖ2Á\0†)ŠB2Åf6‹y‹¦¥R=[,e·K	²Ë:¬%Ûf7©bHY+Î¬¼¿ª,V–À´3ê½]ÊUô‡2©}Ú¤¡8[\nÂ!kŠbÅªR¹f#Šr²ş®Ôšßv¹-ûKŒXÏ:”­¥#ó€ØµŞËÓÊ½•Øn\"u—¼ùŠ»w³¥9´„g‹Š7c<Í*ÀY¦lü¼'J=\"¸ëÂÂl(\nÜ%©3L²ßî\"˜“2mÕ“ªGZ»§?ai‹éÃœš±°1©#­{BÆèlª`¢,	Õ{(Irı~íkvÛĞt €'æÁ`§İnLˆÂ1c|M;JnÜšo³]<‹ÜøPz#Œ“l®.Ï+†œ‹#xê\rì2„h@8CHì4ƒ(Ï Ş£€È0Àè4\r#ŸŠ0Œ^Ç,oƒìŞÓ®¬2kÄï½è‹âÏ–‹QîüØÕ•9DŠØ qäıEóÜª	\"£J5Œ¢Q.1ı’Güè‚tA°†0ØCk½l†@ƒl¯9ã†ĞŞHf €4‡GŸÈh·(æù\$¹M¡Q……éÑsh	×JêÔÓ‘äpvÍšd=D9\n×Ìé_I¤)ª`ô3NbŞùÙ^ä\$ôs \\\"&p«@EˆŠA²hÕ¹’–ÂMÊƒ†Hñ	©¡v¨öĞÚ°,ğ¡Ô_\nO°L\rá†àÎ£Ô|x9;‡–\n<|eyşôæC«>İ!ÂHœá™]8EéL–Ù*]ëX@„McCòŞŸPœ§tğÅ<:8¾ú\rIY ";break;}$ke=array();foreach(explode("\n",lzw_decompress($i))as$X)$ke[]=(strpos($X,"\t")?explode("\t",$X):$X);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$c;$kd=array_search("",$c->operators);if($kd!==false)unset($c->operators[$kd]);}function
dsn($gb,$V,$F,$xb='auth_error'){set_exception_handler($xb);parent::__construct($gb,$V,$F);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$qe=false){$I=parent::query($H);$this->error="";if(!$I){$tb=$this->errorInfo();$this->error=$tb[2];return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I)$I=$this->_result;if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$p];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$eb=array();$eb["sqlite"]="SQLite 3";$eb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$ld=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Eb){$this->_link=new
SQLite3($Eb);$Be=$this->_link->version();$this->server_info=$Be["versionString"];}function
query($H){$I=@$this->_link->query($H);$this->error="";if(!$I){$this->error=$this->_link->lastErrorMsg();return
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
Min_SQLite($Eb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Eb);}function
query($H,$qe=false){$Jc=($qe?"unbufferedQuery":"query");$I=@$this->_link->$Jc($H,SQLITE_BOTH,$o);$this->error="";if(!$I){$this->error=$o;return
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
as$y=>$X)$J[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$J;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$G='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($G\\.)?$G\$~",$C,$A)){$Q=($A[3]!=""?$A[3]:idf_unescape($A[2]));$C=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$Q,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Eb){$this->dsn(DRIVER.":$Eb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Eb){if(is_readable($Eb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$Eb)?$Eb:dirname($_SERVER["SCRIPT_FILENAME"])."/$Eb")." AS a")){$this->Min_SQLite($Eb);return
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
limit($H,$Z,$z,$Pc=0,$Id=" "){return" $H$Z".($z!==null?$Id."LIMIT $z".($Pc?" OFFSET $Pc":""):"");}function
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
table_status($C=""){global$j;$J=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($C!=""?" AND name = ".q($C):""))as$K){$K["Oid"]="t";$K["Auto_increment"]="";$K["Rows"]=$j->result("SELECT COUNT(*) FROM ".idf_escape($K["Name"]));$J[$K["Name"]]=$K;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$K)$J[$K["name"]]["Auto_increment"]=$K["seq"];return($C!=""?$J[$C]:$J);}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){global$j;return!$j->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($Q){$J=array();foreach(get_rows("PRAGMA table_info(".table($Q).")")as$K){$U=strtolower($K["type"]);$Wa=$K["dflt_value"];$J[$K["name"]]=array("field"=>$K["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Wa,$A)?str_replace("''","'",$A[1]):($Wa=="NULL"?null:$Wa)),"null"=>!$K["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$K["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$K["pk"],);}return$J;}function
indexes($Q,$k=null){$J=array();$md=array();foreach(fields($Q)as$p){if($p["primary"])$md[]=$p["field"];}if($md)$J[""]=array("type"=>"PRIMARY","columns"=>$md,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($Q).")")as$K){if(!ereg("^sqlite_",$K["name"])){$J[$K["name"]]["type"]=($K["unique"]?"UNIQUE":"INDEX");$J[$K["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($K["name"]).")")as$Bd)$J[$K["name"]]["columns"][]=$Bd["name"];}}return$J;}function
foreign_keys($Q){$J=array();foreach(get_rows("PRAGMA foreign_key_list(".table($Q).")")as$K){$r=&$J[$K["id"]];if(!$r)$r=$K;$r["source"][]=$K["from"];$r["target"][]=$K["to"];}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
check_sqlite_name($C){global$j;$Ab="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ab)\$~",$C)){$j->error=lang(10,str_replace("|",", ",$Ab));return
false;}return
true;}function
create_database($n,$f){global$j;if(file_exists($n)){$j->error=lang(11);return
false;}if(!check_sqlite_name($n))return
false;$_=new
Min_SQLite($n);$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($m){global$j;$j->Min_SQLite(":memory:");foreach($m
as$n){if(!@unlink($n)){$j->error=lang(11);return
false;}}return
true;}function
rename_database($C,$f){global$j;if(!check_sqlite_name($C))return
false;$j->Min_SQLite(":memory:");$j->error=lang(11);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$ze=($Q==""||$Jb);foreach($q
as$p){if($p[0]!=""||!$p[1]||$p[2]){$ze=true;break;}}$d=array();$cd=array();$nd=false;foreach($q
as$p){if($p[1]){if($p[1][6])$nd=true;$d[]=($ze?"  ":"ADD ").implode($p[1]);if($p[0]!="")$cd[$p[0]]=$p[1][0];}}if($ze){if($Q!=""){queries("BEGIN");foreach(foreign_keys($Q)as$r){$h=array();foreach($r["source"]as$g){if(!$cd[$g])continue
2;$h[]=$cd[$g];}$Jb[]="  FOREIGN KEY (".implode(", ",$h).") REFERENCES ".table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).") ON DELETE $r[on_delete] ON UPDATE $r[on_update]";}$x=array();foreach(indexes($Q)as$pc=>$w){$h=array();foreach($w["columns"]as$g){if(!$cd[$g])continue
2;$h[]=$cd[$g];}$h="(".implode(", ",$h).")";if($w["type"]!="PRIMARY")$x[]=array($w["type"],$pc,$h);elseif(!$nd)$Jb[]="  PRIMARY KEY $h";}}$d=array_merge($d,$Jb);if(!queries("CREATE TABLE ".table($Q!=""?"adminer_$C":$C)." (\n".implode(",\n",$d)."\n)"))return
false;if($Q!=""){if($cd&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$cd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($cd)))." FROM ".table($Q)))return
false;$ne=array();foreach(triggers($Q)as$me=>$ce){$le=trigger($me);$ne[]="CREATE TRIGGER ".idf_escape($me)." ".implode(" ",$ce)." ON ".table($C)."\n$le[Statement]";}if(!queries("DROP TABLE ".table($Q)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$x))return
false;foreach($ne
as$le){if(!queries($le))return
false;}queries("COMMIT");}}else{foreach($d
as$X){if(!queries("ALTER TABLE ".table($Q)." $X"))return
false;}if($Q!=$C&&!queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)))return
false;}if($ta)queries("UPDATE sqlite_sequence SET seq = $ta WHERE name = ".q($C));return
true;}function
alter_indexes($Q,$d){foreach($d
as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]"))return
false;}return
true;}function
truncate_tables($S){return
apply_queries("DELETE FROM",$S);}function
drop_views($De){return
apply_queries("DROP VIEW",$De);}function
drop_tables($S){return
apply_queries("DROP TABLE",$S);}function
move_tables($S,$De,$T){return
false;}function
trigger($C){global$j;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$C,"Statement"=>$A[3]);}function
triggers($Q){$J=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q))as$K){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$K["sql"],$A);$J[$K["name"]]=array($A[1],$A[2]);}return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$md){return
queries("REPLACE INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ROWID()");}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ed){return
true;}function
create_sql($Q,$ta){global$j;return$j->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($Q));}function
truncate_sql($Q){return"DELETE FROM ".table($Q);}function
use_sql($l){}function
trigger_sql($Q,$Rd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($Q)));}function
show_variables(){global$j;$J=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$J[$y]=$j->result("PRAGMA $y");return$J;}function
show_status(){$J=array();foreach(get_vals("PRAGMA compile_options")as$Xc){list($y,$X)=explode("=",$Xc,2);$J[$y]=$X;}return$J;}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Cb){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$Cb);}$nc="sqlite";$pe=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Qd=array_keys($pe);$we=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Sb=array("hex","length","lower","round","unixepoch","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$eb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$ld=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$F){global$c;$n=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($F,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$n!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Be=pg_version($this->_link);$this->server_info=$Be["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($P){return"'".pg_escape_string($this->_link,$P)."'";}function
select_db($l){global$c;if($l==$c->database())return$this->_database;$J=@pg_connect("$this->_string dbname='".addcslashes($l,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($J)$this->_link=$J;return$J;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($H,$qe=false){$I=@pg_query($this->_link,$H);$this->error="";if(!$I){$this->error=pg_last_error($this->_link);return
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
connect($N,$V,$F){global$c;$n=$c->database();$P="pgsql:host='".str_replace(":","' port='",addcslashes($N,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$P dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",$V,$F);return
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
limit($H,$Z,$z,$Pc=0,$Id=" "){return" $H$Z".($z!==null?$Id."LIMIT $z".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){return" $H$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($m){return
array();}function
table_status($C=""){$J=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($C!=""?" AND relname = ".q($C):""))as$K)$J[$K["Name"]]=$K;return($C!=""?$J[$C]:$J);}function
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
ORDER BY a.attnum")as$K){ereg('(.*)(\\((.*)\\))?',$K["full_type"],$A);list(,$K["type"],,$K["length"])=$A;$K["full_type"]=$K["type"].($K["length"]?"($K[length])":"");$K["null"]=($K["attnotnull"]=="f");$K["auto_increment"]=eregi("^nextval\\(",$K["default"]);$K["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$K["default"],$A))$K["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]);$J[$K["field"]]=$K;}return$J;}function
indexes($Q,$k=null){global$j;if(!is_object($k))$k=$j;$J=array();$Yd=$k->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($Q));$h=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Yd AND attnum > 0",$k);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Yd AND ci.oid = i.indexrelid",$k)as$K){$J[$K["relname"]]["type"]=($K["indisprimary"]=="t"?"PRIMARY":($K["indisunique"]=="t"?"UNIQUE":"INDEX"));$J[$K["relname"]]["columns"]=array();foreach(explode(" ",$K["indkey"])as$gc)$J[$K["relname"]]["columns"][]=$h[$gc];$J[$K["relname"]]["lengths"]=array();}return$J;}function
foreign_keys($Q){global$Rc;$J=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($Q)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$K){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$K['definition'],$A)){$K['source']=array_map('trim',explode(',',$A[1]));$K['table']=$A[2];if(preg_match('~(.+)\.(.+)~',$A[2],$Bc)){$K['ns']=$Bc[1];$K['table']=$Bc[2];}$K['target']=array_map('trim',explode(',',$A[3]));$K['on_delete']=(preg_match("~ON DELETE ($Rc)~",$A[4],$Bc)?$Bc[1]:'NO ACTION');$K['on_update']=(preg_match("~ON UPDATE ($Rc)~",$A[4],$Bc)?$Bc[1]:'NO ACTION');$J[$K['conname']]=$K;}}return$J;}function
view($C){global$j;return
array("select"=>$j->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($n){return($n=="information_schema");}function
error(){global$j;$J=h($j->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$J,$A))$J=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($J);}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).($f?" ENCODING ".idf_escape($f):""));}function
drop_databases($m){global$j;$j->close();return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=array();$sd=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d[]="DROP $g";else{$Ae=$X[5];unset($X[5]);if(isset($X[6])&&$p[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($p[0]=="")$d[]=($Q!=""?"ADD ":"  ").implode($X);else{if($g!=$X[0])$sd[]="ALTER TABLE ".table($Q)." RENAME $g TO $X[0]";$d[]="ALTER $g TYPE$X[1]";if(!$X[6]){$d[]="ALTER $g ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $g ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($p[0]!=""||$Ae!="")$sd[]="COMMENT ON COLUMN ".table($Q).".$X[0] IS ".($Ae!=""?substr($Ae,9):"''");}}$d=array_merge($d,$Jb);if($Q=="")array_unshift($sd,"CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");elseif($d)array_unshift($sd,"ALTER TABLE ".table($Q)."\n".implode(",\n",$d));if($Q!=""&&$Q!=$C)$sd[]="ALTER TABLE ".table($Q)." RENAME TO ".table($C);if($Q!=""||$Na!="")$sd[]="COMMENT ON TABLE ".table($C)." IS ".q($Na);if($ta!=""){}foreach($sd
as$H){if(!queries($H))return
false;}return
true;}function
alter_indexes($Q,$d){$Ra=array();$fb=array();foreach($d
as$X){if($X[0]!="INDEX")$Ra[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$fb[]=idf_escape($X[1]);elseif(!queries("CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q)." $X[2]"))return
false;}return((!$Ra||queries("ALTER TABLE ".table($Q).implode(",",$Ra)))&&(!$fb||queries("DROP INDEX ".implode(", ",$fb))));}function
truncate_tables($S){return
queries("TRUNCATE ".implode(", ",array_map('table',$S)));return
true;}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$De,$T){foreach($S
as$Q){if(!queries("ALTER TABLE ".table($Q)." SET SCHEMA ".idf_escape($T)))return
false;}foreach($De
as$Q){if(!queries("ALTER VIEW ".table($Q)." SET SCHEMA ".idf_escape($T)))return
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
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$md){global$j;$xe=array();$Z=array();foreach($O
as$y=>$X){$xe[]="$y = $X";if(isset($md[idf_unescape($y)]))$Z[]="$y = $X";}return($Z&&queries("UPDATE ".table($Q)." SET ".implode(", ",$xe)." WHERE ".implode(" AND ",$Z))&&$j->affected_rows)||queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).")");}function
last_id(){return
0;}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){global$j;if(ereg(" rows=([0-9]+)",$j->result("EXPLAIN SELECT * FROM ".idf_escape($R["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$vd))return$vd[1];return
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
set_schema($Dd){global$j,$pe,$Qd;$J=$j->query("SET search_path TO ".idf_escape($Dd));foreach(types()as$U){if(!isset($pe[$U])){$pe[$U]=0;$Qd[lang(12)][]=$U;}}return$J;}function
use_sql($l){return"\connect ".idf_escape($l);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){global$j;return
get_rows("SELECT * FROM pg_stat_activity ORDER BY ".($j->server_info<9.2?"procpid":"pid"));}function
show_status(){}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Cb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Cb);}$nc="pgsql";$pe=array();$Qd=array();foreach(array(lang(13)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(14)=>array("date"=>13,"time"=>17,"timestamp"=>20,"timestamptz"=>21,"interval"=>0),lang(15)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(16)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(17)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(18)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array();$Wc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$eb["oracle"]="Oracle";if(isset($_GET["oracle"])){$ld=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($N,$V,$F){$this->_link=@oci_new_connect($V,$F,$N,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$o=oci_error();$this->error=$o["message"];return
false;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
true;}function
query($H,$qe=false){$I=oci_parse($this->_link,$H);$this->error="";if(!$I){$o=oci_error($this->_link);$this->error=$o["message"];return
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
as$y=>$X){if(is_a($X,'OCI-Lob'))$K[$y]=$X->load();}return$K;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$g=$this->_offset++;$J=new
stdClass;$J->name=oci_field_name($this->_result,$g);$J->orgname=$J->name;$J->type=oci_field_type($this->_result,$g);$J->charsetnr=(ereg("raw|blob|bfile",$J->type)?63:0);return$J;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($N,$V,$F){$this->dsn("oci:dbname=//$N;charset=AL32UTF8",$V,$F);return
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
limit($H,$Z,$z,$Pc=0,$Id=" "){return($Pc?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $H$Z) t WHERE rownum <= ".($z+$Pc).") WHERE rnum > $Pc":($z!==null?" * FROM (SELECT $H$Z) WHERE rownum <= ".($z+$Pc):" $H$Z"));}function
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
table_status($C=""){$J=array();$Fd=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Fd":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Fd":""))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="view";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($Q)." ORDER BY column_id")as$K){$U=$K["DATA_TYPE"];$xc="$K[DATA_PRECISION],$K[DATA_SCALE]";if($xc==",")$xc=$K["DATA_LENGTH"];$J[$K["COLUMN_NAME"]]=array("field"=>$K["COLUMN_NAME"],"full_type"=>$U.($xc?"($xc)":""),"type"=>strtolower($U),"length"=>$xc,"default"=>$K["DATA_DEFAULT"],"null"=>($K["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($Q)."
ORDER BY uc.constraint_type, uic.column_position",$k)as$K){$J[$K["INDEX_NAME"]]["type"]=($K["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($K["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$J[$K["INDEX_NAME"]]["columns"][]=$K["COLUMN_NAME"];$J[$K["INDEX_NAME"]]["lengths"][]=($K["CHAR_LENGTH"]&&$K["CHAR_LENGTH"]!=$K["COLUMN_LENGTH"]?$K["CHAR_LENGTH"]:null);}return$J;}function
view($C){$L=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
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
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=$fb=array();foreach($q
as$p){$X=$p[1];if($X&&$p[0]!=""&&idf_escape($p[0])!=$X[0])queries("ALTER TABLE ".table($Q)." RENAME COLUMN ".idf_escape($p[0])." TO $X[0]");if($X)$d[]=($Q!=""?($p[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($Q!=""?")":"");else$fb[]=idf_escape($p[0]);}if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");return(!$d||queries("ALTER TABLE ".table($Q)."\n".implode("\n",$d)))&&(!$fb||queries("ALTER TABLE ".table($Q)." DROP (".implode(", ",$fb).")"))&&($Q==$C||queries("ALTER TABLE ".table($Q)." RENAME TO ".table($C)));}function
foreign_keys($Q){return
array();}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($De){return
apply_queries("DROP VIEW",$De);}function
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
set_schema($Ed){global$j;return$j->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Ed));}function
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
support($Cb){return
ereg("view|scheme|processlist|drop_col|variables|status",$Cb);}$nc="oracle";$pe=array();$Qd=array();foreach(array(lang(13)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(14)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(15)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(16)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("length","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$eb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$ld=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$o)$this->error.="$o[message]\n";$this->error=rtrim($this->error);}function
connect($N,$V,$F){$this->_link=@sqlsrv_connect($N,array("UID"=>$V,"PWD"=>$F,"CharacterSet"=>"UTF-8"));if($this->_link){$hc=sqlsrv_server_info($this->_link);$this->server_info=$hc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$qe=false){$I=sqlsrv_query($this->_link,$H);$this->error="";if(!$I){$this->_get_error();return
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
as$y=>$X){if(is_a($X,'DateTime'))$K[$y]=$X->format("Y-m-d H:i:s");}return$K;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$p=$this->_fields[$this->_offset++];$J=new
stdClass;$J->name=$p["Name"];$J->orgname=$p["Name"];$J->type=($p["Type"]==1?254:0);return$J;}function
seek($Pc){for($t=0;$t<$Pc;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($N,$V,$F){$this->_link=@mssql_connect($N,$V,$F);if($this->_link){$I=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$K=$I->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$K[0]] $K[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($P){return"'".str_replace("'","''",$P)."'";}function
select_db($l){return
mssql_select_db($l);}function
query($H,$qe=false){$I=mssql_query($H,$this->_link);$this->error="";if(!$I){$this->error=mssql_get_last_message();return
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
limit($H,$Z,$z,$Pc=0,$Id=" "){return($z!==null?" TOP (".($z+$Pc).")":"")." $H$Z";}function
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
table_status($C=""){$J=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($C!=""?" AND name = ".q($C):""))as$K){if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return$R["Engine"]=="VIEW";}function
fk_support($R){return
true;}function
fields($Q){$J=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($Q))as$K){$U=$K["type"];$xc=(ereg("char|binary",$U)?$K["max_length"]:($U=="decimal"?"$K[precision],$K[scale]":""));$J[$K["name"]]=array("field"=>$K["name"],"full_type"=>$U.($xc?"($xc)":""),"type"=>$U,"length"=>$xc,"default"=>$K["default"],"null"=>$K["is_nullable"],"auto_increment"=>$K["is_identity"],"collation"=>$K["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$K["is_identity"],);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($Q),$k)as$K){$J[$K["name"]]["type"]=($K["is_primary_key"]?"PRIMARY":($K["is_unique"]?"UNIQUE":"INDEX"));$J[$K["name"]]["lengths"]=array();$J[$K["name"]]["columns"][$K["key_ordinal"]]=$K["column_name"];}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$j->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
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
rename_database($C,$f){if(eregi('^[a-z0-9_]+$',$f))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $f");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d["DROP"][]=" COLUMN $g";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($p[0]=="")$d["ADD"][]="\n  ".implode("",$X).($Q==""?substr($Jb[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($g!=$X[0])queries("EXEC sp_rename ".q(table($Q).".$g").", ".q(idf_unescape($X[0])).", 'COLUMN'");$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($Q=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$d["ADD"])."\n)");if($Q!=$C)queries("EXEC sp_rename ".q(table($Q)).", ".q($C));if($Jb)$d[""]=$Jb;foreach($d
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($Q,$d){$w=array();$fb=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fb[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($Q);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($Q."_"))." ON ".table($Q):"ALTER TABLE ".table($Q)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$fb||queries("ALTER TABLE ".table($Q)." DROP ".implode(", ",$fb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q).($O?" (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")":"DEFAULT VALUES"));}function
insert_update($Q,$O,$md){$xe=array();$Z=array();foreach($O
as$y=>$X){$xe[]="$y = $X";if(isset($md[idf_unescape($y)]))$Z[]="$y = $X";}return
queries("MERGE ".table($Q)." USING (VALUES(".implode(", ",$O).")) AS source (c".implode(", c",range(1,count($O))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$xe)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($O)).") VALUES (".implode(", ",$O).");");}function
last_id(){global$j;return$j->result("SELECT SCOPE_IDENTITY()");}function
explain($j,$H){$j->query("SET SHOWPLAN_ALL ON");$J=$j->query($H);$j->query("SET SHOWPLAN_ALL OFF");return$J;}function
found_rows($R,$Z){}function
foreign_keys($Q){$J=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($Q))as$K){$r=&$J[$K["FK_NAME"]];$r["table"]=$K["PKTABLE_NAME"];$r["source"][]=$K["FKCOLUMN_NAME"];$r["target"][]=$K["PKCOLUMN_NAME"];}return$J;}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$De,$T){return
apply_queries("ALTER SCHEMA ".idf_escape($T)." TRANSFER",array_merge($S,$De));}function
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
get_schema(){global$j;if($_GET["ns"]!="")return$_GET["ns"];return$j->result("SELECT SCHEMA_NAME()");}function
set_schema($Dd){return
true;}function
use_sql($l){return"USE ".idf_escape($l);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($p){}function
unconvert_field($p,$J){return$J;}function
support($Cb){return
ereg('^(scheme|trigger|view|drop_col)$',$Cb);}$nc="mssql";$pe=array();$Qd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(14)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(15)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(16)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array();$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("len","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$eb=array("server"=>"MySQL")+$eb;if(!defined("DRIVER")){$ld=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($N,$V,$F){mysqli_report(MYSQLI_REPORT_OFF);list($ac,$jd)=explode(":",$N,2);$J=@$this->real_connect(($N!=""?$ac:ini_get("mysqli.default_host")),($N.$V!=""?$V:ini_get("mysqli.default_user")),($N.$V.$F!=""?$F:ini_get("mysqli.default_pw")),null,(is_numeric($jd)?$jd:ini_get("mysqli.default_port")),(!is_numeric($jd)?$jd:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$p=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$p];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($N,$V,$F){$this->_link=@mysql_connect(($N!=""?$N:ini_get("mysql.default_host")),("$N$V"!=""?$V:ini_get("mysql.default_user")),("$N$V$F"!=""?$F:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($l){return
mysql_select_db($l,$this->_link);}function
query($H,$qe=false){$I=@($qe?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));$this->error="";if(!$I){$this->error=mysql_error($this->_link);return
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
connect($N,$V,$F){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$N)),$V,$F);$this->query("SET NAMES utf8");return
true;}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($H,$qe=false){$this->setAttribute(1000,!$qe);return
parent::query($H,$qe);}}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2])){$j->query("SET sql_quote_show_create = 1, autocommit = 1");return$j;}$J=$j->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($Cd=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$Cd;return$J;}function
get_databases($Ib){global$j;$J=get_session("dbs");if($J===null){$H=($j->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$J=($Ib?slow_query($H):get_vals($H));restart_session();set_session("dbs",$J);stop_session();}return$J;}function
limit($H,$Z,$z,$Pc=0,$Id=" "){return" $H$Z".($z!==null?$Id."LIMIT $z".($Pc?" OFFSET $Pc":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($n,$Ka){global$j;$J=null;$Ra=$j->result("SHOW CREATE DATABASE ".idf_escape($n),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ra,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ra,$A))$J=$Ka[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$j;return$j->result("SELECT USER()");}function
tables_list(){global$j;return
get_key_vals("SHOW".($j->server_info>=5?" FULL":"")." TABLES");}function
count_tables($m){$J=array();foreach($m
as$n)$J[$n]=count(get_vals("SHOW TABLES IN ".idf_escape($n)));return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Rows"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||ereg("char",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($Q,$k=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$k)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];}return$J;}function
foreign_keys($Q){global$j,$Rc;static$G='`(?:[^`]|``)+`';$J=array();$Sa=$j->result("SHOW CREATE TABLE ".table($Q),1);if($Sa){preg_match_all("~CONSTRAINT ($G) FOREIGN KEY \\(((?:$G,? ?)+)\\) REFERENCES ($G)(?:\\.($G))? \\(((?:$G,? ?)+)\\)(?: ON DELETE ($Rc))?(?: ON UPDATE ($Rc))?~",$Sa,$Cc,PREG_SET_ORDER);foreach($Cc
as$A){preg_match_all("~$G~",$A[2],$Ld);preg_match_all("~$G~",$A[5],$T);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Ld[0]),"target"=>array_map('idf_unescape',$T[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$j->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$y=>$X)asort($J[$y]);return$J;}function
information_schema($n){global$j;return($j->server_info>=5&&$n=="information_schema")||($j->server_info>=5.5&&$n=="performance_schema");}function
error(){global$j;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$j->error));}function
error_line(){global$j;if(ereg(' at line ([0-9]+)$',$j->error,$vd))return$vd[1]-1;}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($n,$f){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($n).($f?" COLLATE ".q($f):""));}function
drop_databases($m){set_session("dbs",null);return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){if(create_database($C,$f)){$wd=array();foreach(tables_list()as$Q=>$U)$wd[]=table($Q)." TO ".idf_escape($C).".".table($Q);if(!$wd||queries("RENAME TABLE ".implode(", ",$wd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ua=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$ua="";break;}if($w["type"]=="PRIMARY")$ua=" UNIQUE";}}return" AUTO_INCREMENT$ua";}function
alter_table($Q,$C,$q,$Jb,$Na,$pb,$f,$ta,$hd){$d=array();foreach($q
as$p)$d[]=($p[1]?($Q!=""?($p[0]!=""?"CHANGE ".idf_escape($p[0]):"ADD"):" ")." ".implode($p[1]).($Q!=""?$p[2]:""):"DROP ".idf_escape($p[0]));$d=array_merge($d,$Jb);$Od="COMMENT=".q($Na).($pb?" ENGINE=".q($pb):"").($f?" COLLATE ".q($f):"").($ta!=""?" AUTO_INCREMENT=$ta":"").$hd;if($Q=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n) $Od");if($Q!=$C)$d[]="RENAME TO ".table($C);$d[]=$Od;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$d));}function
alter_indexes($Q,$d){foreach($d
as$y=>$X)$d[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$d));}function
truncate_tables($S){return
apply_queries("TRUNCATE TABLE",$S);}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($S){return
queries("DROP TABLE ".implode(", ",array_map('table',$S)));}function
move_tables($S,$De,$T){$wd=array();foreach(array_merge($S,$De)as$Q)$wd[]=table($Q)." TO ".idf_escape($T).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$wd));}function
copy_tables($S,$De,$T){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($S
as$Q){$C=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($Q))||!queries("INSERT INTO $C SELECT * FROM ".table($Q)))return
false;}foreach($De
as$Q){$C=($T==DB?table("copy_$Q"):idf_escape($T).".".table($Q));$Ce=view($Q);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ce[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($Q){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$j,$qb,$jc,$pe;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$oe="((".implode("|",array_merge(array_keys($pe),$na)).")\\b(?:\\s*\\(((?:[^'\")]*|$qb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$G="\\s*(".($U=="FUNCTION"?"":$jc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$oe";$Ra=$j->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$G\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$oe\\s+":"")."(.*)~is",$Ra,$A);$q=array();preg_match_all("~$G\\s*,?~is",$A[1],$Cc,PREG_SET_ORDER);foreach($Cc
as$fd){$C=str_replace("``","`",$fd[2]).$fd[3];$q[]=array("field"=>$C,"type"=>strtolower($fd[5]),"length"=>preg_replace_callback("~$qb~s",'normalize_enum',$fd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fd[8] $fd[7]"))),"null"=>1,"full_type"=>$fd[4],"inout"=>strtoupper($fd[1]),"collation"=>strtolower($fd[9]),);}if($U!="FUNCTION")return
array("fields"=>$q,"definition"=>$A[11]);return
array("fields"=>$q,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$O){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($O)).")\nVALUES (".implode(", ",$O).")");}function
insert_update($Q,$O,$md){foreach($O
as$y=>$X)$O[$y]="$y = $X";$xe=implode(", ",$O);return
queries("INSERT INTO ".table($Q)." SET $xe ON DUPLICATE KEY UPDATE $xe");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ID()");}function
explain($j,$H){return$j->query("EXPLAIN $H");}function
found_rows($R,$Z){return($Z||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Dd){return
true;}function
create_sql($Q,$ta){global$j;$J=$j->result("SHOW CREATE TABLE ".table($Q),1);if(!$ta)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($l){return"USE ".idf_escape($l);}function
trigger_sql($Q,$Rd){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$K)$J.="\n".($Rd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($p){if(ereg("binary",$p["type"]))return"HEX(".idf_escape($p["field"]).")";if(ereg("geometry|point|linestring|polygon",$p["type"]))return"AsWKT(".idf_escape($p["field"]).")";}function
unconvert_field($p,$J){if(ereg("binary",$p["type"]))$J="UNHEX($J)";if(ereg("geometry|point|linestring|polygon",$p["type"]))$J="GeomFromText($J)";return$J;}function
support($Cb){global$j;return!ereg("scheme|sequence|type".($j->server_info<5.1?"|event|partitioning".($j->server_info<5?"|view|routine|trigger":""):""),$Cb);}$nc="sql";$pe=array();$Qd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(14)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(15)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(19)=>array("enum"=>65535,"set"=>64),lang(16)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$pe+=$X;$Qd[$y]=array_keys($X);}$we=array("unsigned","zerofill","unsigned zerofill");$Wc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.6.2";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(20)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$j;$m=$this->databases(false);return(!$m?$j->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$m[(information_schema($m[0])?1:0)]);}function
databases($Ib=true){return
get_databases($Ib);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(21),'<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>',lang(22),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(23)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(24))."\n";}function
login($_c,$F){global$j;$j->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Wd){return
h($Wd["Comment"]!=""?$Wd["Comment"]:$Wd["Name"]);}function
fieldName($p,$ad=0){return
h($p["comment"]!=""?$p["comment"]:$p["field"]);}function
selectLinks($Wd,$O=""){$b=$Wd["Name"];if($O!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$O).'">'.lang(25)."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(26)."'>&gt;&gt;</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$Vd){$J=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$K)$J[$K["TABLE_NAME"]]["keys"][$K["CONSTRAINT_NAME"]][$K["COLUMN_NAME"]]=$K["REFERENCED_COLUMN_NAME"];foreach($J
as$y=>$X){$C=$this->tableName(table_status($y));if($C!=""){$Fd=preg_quote($Vd);$Id="(:|\\s*-)?\\s+";$J[$y]["name"]=(preg_match("(^$Fd$Id(.+)|^(.+?)$Id$Fd\$)iu",$C,$A)?$A[2].$A[3]:$C);}else
unset($J[$y]);}return$J;}function
backwardKeysPrint($xa,$K){foreach($xa
as$Q=>$wa){foreach($wa["keys"]as$La){$_=ME.'select='.urlencode($Q);$t=0;foreach($La
as$g=>$X)$_.=where_link($t++,$g,$K[$X]);echo"<a href='".h($_)."'>".h($wa["name"])."</a>";$_=ME.'edit='.urlencode($Q);foreach($La
as$g=>$X)$_.="&set".urlencode("[".bracket_escape($g)."]")."=".urlencode($K[$X]);echo"<a href='".h($_)."' title='".lang(25)."'>+</a> ";}}}function
selectQuery($H){return"<!--\n".str_replace("--","--><!-- ",$H)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$p){if(ereg("varchar|character varying",$p["type"]))return
idf_escape($p["field"]);}return"";}function
rowDescriptions($L,$Lb){$J=$L;foreach($L[0]as$y=>$X){if(list($Q,$u,$C)=$this->_foreignColumn($Lb,$y)){$dc=array();foreach($L
as$K)$dc[$K[$y]]=exact_value($K[$y]);$Ya=$this->_values[$Q];if(!$Ya)$Ya=get_key_vals("SELECT $u, $C FROM ".table($Q)." WHERE $u IN (".implode(", ",$dc).")");foreach($L
as$B=>$K){if(isset($K[$y]))$J[$B][$y]=(string)$Ya[$K[$y]];}}}return$J;}function
selectVal($X,$_,$p){$J=($X===null?"&nbsp;":$X);$_=h($_);if(ereg('blob|bytea',$p["type"])&&!is_utf8($X)){$J=lang(27,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X))$J="<img src='$_' alt='$J'>";}if(like_bool($p)&&$J!="&nbsp;")$J=($X?lang(28):lang(29));if($_)$J="<a href='$_'>$J</a>";if(!$_&&!like_bool($p)&&ereg('int|float|double|decimal',$p["type"]))$J="<div class='number'>$J</div>";elseif(ereg('date',$p["type"]))$J="<div class='datetime'>$J</div>";return$J;}function
editVal($X,$p){if(ereg('date|timestamp',$p["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return$X;}function
selectColumnsPrint($M,$h){}function
selectSearchPrint($Z,$h,$x){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$qc=array();foreach($Z
as$y=>$X)$qc[$X["col"]]=$y;$t=0;$q=fields($_GET["select"]);foreach($h
as$C=>$Xa){$p=$q[$C];if(ereg("enum",$p["type"])||like_bool($p)){$y=$qc[$C];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($C)."'>:",(like_bool($p)?" <select name='where[$t][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$p,(array)$Z[$y]["val"],($p["null"]?0:null))),"</div>\n";unset($h[$C]);}elseif(is_array($Yc=$this->_foreignKeyOptions($_GET["select"],$C))){if($q[$C]["null"])$Yc[0]='('.lang(4).')';$y=$qc[$C];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($C)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($Yc,$Z[$y]["val"],true)."</select></div>\n";unset($h[$C]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$h[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".lang(32).")".optionlist($h,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input type='search' name='where[$t][val]' value='".h($X["val"])."'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($h,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input type='search' name='where[$t][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ad,$h,$x){$bd=array();foreach($x
as$y=>$w){$ad=array();foreach($w["columns"]as$X)$ad[]=$h[$X];if(count(array_filter($ad,'strlen'))>1&&$y!="PRIMARY")$bd[$y]=implode(", ",$ad);}if($bd){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$bd,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","30","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($ae){}function
selectActionPrint($x){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($mb,$h){if($mb){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$h,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($mb)==1?'<input type="hidden" name="email_field" value="'.h(key($mb)).'">':html_select("email_field",$mb)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($h,$x){return
array(array(),array());}function
selectSearchProcess($q,$x){$J=array();foreach((array)$_GET["where"]as$y=>$Z){$Ja=$Z["col"];$Uc=$Z["op"];$X=$Z["val"];if(($y<0?"":$Ja).$X!=""){$Oa=array();foreach(($Ja!=""?array($Ja=>$q[$Ja]):$q)as$C=>$p){if($Ja!=""||is_numeric($X)||!ereg('int|float|double|decimal',$p["type"])){$C=idf_escape($C);if($Ja!=""&&$p["type"]=="enum")$Oa[]=(in_array(0,$X)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$X)).")";else{$be=ereg('char|text|enum|set',$p["type"]);$Y=$this->processInput($p,(!$Uc&&$be&&ereg('^[^%]+$',$X)?"%$X%":$X));$Oa[]=$C.($Y=="NULL"?" IS".($Uc==">="?" NOT":"")." $Y":(in_array($Uc,$this->operators)||$Uc=="="?" $Uc $Y":($be?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$Oa[]="$C IS NULL";}}}$J[]=($Oa?"(".implode(" OR ",$Oa).")":"0");}}return$J;}function
selectOrderProcess($q,$x){$fc=$_GET["index_order"];if($fc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($fc!=""?array($x[$fc]):$x)as$w){if($fc!=""||$w["type"]=="INDEX"){$Xa=false;foreach($w["columns"]as$X){if(ereg('date|timestamp',$q[$X]["type"])){$Xa=true;break;}}$J=array();foreach($w["columns"]as$X)$J[]=idf_escape($X).($Xa?" DESC":"");return$J;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Lb){if($_POST["email_append"])return
true;if($_POST["email"]){$Hd=0;if($_POST["all"]||$_POST["check"]){$p=idf_escape($_POST["email_field"]);$Sd=$_POST["email_subject"];$Hc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Sd.$Hc",$Cc);$L=get_rows("SELECT DISTINCT $p".($Cc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Cc[1]))):"")." FROM ".table($_GET["select"])." WHERE $p IS NOT NULL AND $p != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($L,$Lb)as$K){$xd=array('{\\'=>'{');foreach($Cc[1]as$X)$xd['{$'."$X}"]=$this->editVal($K[$X],$q[$X]);$lb=$K[$_POST["email_field"]];if(is_mail($lb)&&send_mail($lb,strtr($Sd,$xd),strtr($Hc,$xd),$_POST["email_from"],$_FILES["email_files"]))$Hd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$Hd));}return
false;}function
selectQueryBuild($M,$Z,$Tb,$ad,$z,$E){return"";}function
messageQuery($H){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$H)."\n-->";}function
editFunctions($p){$J=array();if($p["null"]&&ereg('blob',$p["type"]))$J["NULL"]=lang(4);$J[""]=($p["null"]||$p["auto_increment"]||like_bool($p)?"":"*");if(ereg('date|time',$p["type"]))$J["now"]=lang(44);if(eregi('_(md5|sha1)$',$p["field"],$A))$J[]=strtolower($A[1]);return$J;}function
editInput($Q,$p,$sa,$Y){if($p["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$sa value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$sa,$p,($Y||isset($_GET["select"])?$Y:0),($p["null"]?"":null));$Yc=$this->_foreignKeyOptions($Q,$p["field"],$Y);if($Yc!==null)return(is_array($Yc)?"<select$sa>".optionlist($Yc,$Y,true)."</select>":"<input value='".h($Y)."'$sa class='hidden'><input value='".h($Yc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($p["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($p))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$sa>";$Zb="";if(ereg('time',$p["type"]))$Zb=lang(45);if(ereg('date|timestamp',$p["type"]))$Zb=lang(46).($Zb?" [$Zb]":"");if($Zb)return"<input value='".h($Y)."'$sa> ($Zb)";if(eregi('_(md5|sha1)$',$p["field"]))return"<input type='password' value='".h($Y)."'$sa>";return'';}function
processInput($p,$Y,$s=""){if($s=="now")return"$s()";$J=$Y;if(ereg('date|timestamp',$p["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$A))$J=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$J=($p["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$J:q($J));if($Y==""&&like_bool($p))$J="0";elseif($Y==""&&($p["null"]||!ereg('char|text',$p["type"])))$J="NULL";elseif(ereg('^(md5|sha1)$',$s))$J="$s($J)";return
unconvert_field($p,$J);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$Rd,$H){global$j;$I=$j->query($H,1);if($I){while($K=$I->fetch_assoc()){if($Rd=="table"){dump_csv(array_keys($K));$Rd="INSERT";}dump_csv($K);}}}function
dumpFilename($cc){return
friendly_url($cc);}function
dumpHeaders($cc,$Lc=false){$zb="csv";header("Content-Type: text/csv; charset=utf-8");return$zb;}function
homepage(){return
true;}function
navigation($Kc){global$ba,$he;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Kc=="auth"){$Hb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$F){if($F!==null){if($Hb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Hb=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(47),'" id="logout">
<input type="hidden" name="token" value="',$he,'">
</p>
</form>
';$this->databasesPrint($Kc);if($Kc!="db"&&$Kc!="ns"){$R=table_status();if(!$R)echo"<p class='message'>".lang(6)."\n";else$this->tablesPrint($R);}}}function
databasesPrint($Kc){}function
tablesPrint($S){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($S
as$K){$C=$this->tableName($K);if(isset($K["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($K["Name"])."'".bold($_GET["select"]==$K["Name"])." title='".lang(48)."'>$C</a><br>\n";}}function
_foreignColumn($Lb,$g){foreach((array)$Lb[$g]as$Kb){if(count($Kb["source"])==1){$C=$this->rowDescription($Kb["table"]);if($C!=""){$u=idf_escape($Kb["target"][0]);return
array($Kb["table"],$u,$C);}}}}function
_foreignKeyOptions($Q,$g,$Y=null){global$j;if(list($T,$u,$C)=$this->_foreignColumn(column_foreign_keys($Q),$g)){$J=&$this->_values[$T];if($J===null){$R=table_status($T);$J=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $u, $C FROM ".table($T)." ORDER BY 2"));}if(!$J&&$Y!==null)return$j->result("SELECT $C FROM ".table($T)." WHERE $u = ".q($Y));return$J;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($de,$o="",$Da=array(),$ee=""){global$a,$c,$j,$eb;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$fe=$de.($ee!=""?": ".h($ee):"");$ge=strip_tags($fe.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE html>
<html lang="',$a,'" dir="',lang(49),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ge,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.2",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.2",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.2",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(49),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($j)?substr($j->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Da!==null){$_=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$eb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$N=(SERVER!=""?h(SERVER):lang(50));if($Da===false)echo"$N\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$N</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Da)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Da)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Da
as$y=>$X){$Xa=(is_array($X)?$X[1]:$X);if($Xa!="")echo'<a href="'.h(ME."$y=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Xa).'</a> &raquo; ';}}echo"$de\n";}}echo"<h2>$fe</h2>\n";restart_session();$ye=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ic=$_SESSION["messages"][$ye];if($Ic){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ic)."</div>\n";unset($_SESSION["messages"][$ye]);}$m=&get_session("dbs");if(DB!=""&&$m&&!in_array(DB,$m,true))$m=null;stop_session();if($o)echo"<div class='error'>$o</div>\n";define("PAGE_HEADER",1);}function
page_footer($Kc=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Kc);echo'</div>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($W,$Fe){$Cd='';foreach($W
as$X)$Cd.=pack('V',$X);if($Fe)return
substr($Cd,0,end($W));return$Cd;}function
str2long($Cd,$Fe){$W=array_values(unpack('V*',str_pad($Cd,4*ceil(strlen($Cd)/4),"\0")));if($Fe)$W[]=strlen($Cd);return$W;}function
xxtea_mx($Ke,$Je,$Ud,$oc){return
int32((($Ke>>5&0x7FFFFFF)^$Je<<2)+(($Je>>3&0x1FFFFFFF)^$Ke<<4))^int32(($Ud^$Je)+($oc^$Ke));}function
encrypt_string($Pd,$y){if($Pd=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Pd,true);$B=count($W)-1;$Ke=$W[$B];$Je=$W[0];$rd=floor(6+52/($B+1));$Ud=0;while($rd-->0){$Ud=int32($Ud+0x9E3779B9);$hb=$Ud>>2&3;for($ed=0;$ed<$B;$ed++){$Je=$W[$ed+1];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Ke=int32($W[$ed]+$Mc);$W[$ed]=$Ke;}$Je=$W[0];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Ke=int32($W[$B]+$Mc);$W[$B]=$Ke;}return
long2str($W,false);}function
decrypt_string($Pd,$y){if($Pd=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Pd,false);$B=count($W)-1;$Ke=$W[$B];$Je=$W[0];$rd=floor(6+52/($B+1));$Ud=int32($rd*0x9E3779B9);while($Ud){$hb=$Ud>>2&3;for($ed=$B;$ed>0;$ed--){$Ke=$W[$ed-1];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Je=int32($W[$ed]-$Mc);$W[$ed]=$Je;}$Ke=$W[$B];$Mc=xxtea_mx($Ke,$Je,$Ud,$y[$ed&3^$hb]);$Je=int32($W[0]-$Mc);$W[0]=$Je;$Ud=int32($Ud-0x9E3779B9);}return
long2str($W,true);}$j='';$he=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$id=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$id[$y]=$X;}}$e=$_POST["auth"];if($e){session_regenerate_id();$_SESSION["pwds"][$e["driver"]][$e["server"]][$e["username"]]=$e["password"];$_SESSION["db"][$e["driver"]][$e["server"]][$e["username"]][$e["db"]]=true;if($e["permanent"]){$y=base64_encode($e["driver"])."-".base64_encode($e["server"])."-".base64_encode($e["username"])."-".base64_encode($e["db"]);$od=$c->permanentLogin();$id[$y]="$y:".base64_encode($od?encrypt_string($e["password"],$od):"");cookie("adminer_permanent",implode(" ",$id));}if(count($_POST)==1||DRIVER!=$e["driver"]||SERVER!=$e["server"]||$_GET["username"]!==$e["username"]||DB!=$e["db"])redirect(auth_url($e["driver"],$e["server"],$e["username"],$e["db"]));}elseif($_POST["logout"]){if($he&&$_POST["token"]!=$he){page_header(lang(47),lang(51));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($id&&!$_SESSION["pwds"]){session_regenerate_id();$od=$c->permanentLogin();foreach($id
as$y=>$X){list(,$Ga)=explode(":",$X);list($db,$N,$V,$n)=array_map('base64_decode',explode("-",$y));$_SESSION["pwds"][$db][$N][$V]=decrypt_string(base64_decode($Ga),$od);$_SESSION["db"][$db][$N][$V][$n]=true;}}function
unset_permanent(){global$id;foreach($id
as$y=>$X){list($db,$N,$V)=array_map('base64_decode',explode("-",$y));if($db==DRIVER&&$N==SERVER&&$n==$_GET["username"])unset($id[$y]);}cookie("adminer_permanent",implode(" ",$id));}function
auth_error($wb=null){global$j,$c,$he;$Kd=session_name();$o="";if(!$_COOKIE[$Kd]&&$_GET[$Kd]&&ini_bool("session.use_only_cookies"))$o=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$Kd]||$_GET[$Kd])&&!$he)$o=lang(54);else{$F=&get_session("pwds");if($F!==null){$o=h($wb?$wb->getMessage():(is_string($j)?$j:lang(55)));$F=null;}unset_permanent();}}page_header(lang(23),$o,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(56),lang(57,implode(", ",$ld)),false);page_footer("auth");exit;}$j=connect();}if(is_string($j)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$he=$_SESSION["token"];if($e&&$_POST["token"])$_POST["token"]=$he;$o=($_POST?($_POST["token"]==$he?"":lang(51)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(58,'"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$j->select_db($c->database());function
email_header($Xb){return"=?UTF-8?B?".base64_encode($Xb)."?=";}function
send_mail($lb,$Sd,$Hc,$Rb="",$Fb=array()){$rb=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$Hc=str_replace("\n",$rb,wordwrap(str_replace("\r","","$Hc\n")));$Ca=uniqid("boundary");$ra="";foreach((array)$Fb["error"]as$y=>$X){if(!$X)$ra.="--$Ca$rb"."Content-Type: ".str_replace("\n","",$Fb["type"][$y]).$rb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Fb["name"][$y])."\"$rb"."Content-Transfer-Encoding: base64$rb$rb".chunk_split(base64_encode(file_get_contents($Fb["tmp_name"][$y])),76,$rb).$rb;}$za="";$Yb="Content-Type: text/plain; charset=utf-8$rb"."Content-Transfer-Encoding: 8bit";if($ra){$ra.="--$Ca--$rb";$za="--$Ca$rb$Yb$rb$rb";$Yb="Content-Type: multipart/mixed; boundary=\"$Ca\"";}$Yb.=$rb."MIME-Version: 1.0$rb"."X-Mailer: Adminer Editor".($Rb?$rb."From: ".str_replace("\n","",$Rb):"");return
mail($lb,email_header($Sd),$za.$Hc.$ra,$Yb);}function
like_bool($p){return
ereg("bool|(tinyint|bit)\\(1\\)",$p["full_type"]);}$Rc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$eb[DRIVER]=lang(23);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$b=$_GET["download"];$q=fields($b);header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$j->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET,$q),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$q=fields($b);$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0],$q):""):where($_GET,$q));$xe=(isset($_GET["select"])?$_POST["edit"]:$Z);foreach($q
as$C=>$p){if(!isset($p["privileges"][$xe?"update":"insert"])||$c->fieldName($p)=="")unset($q[$C]);}if($_POST&&!$o&&!isset($_GET["select"])){$zc=$_POST["referer"];if($_POST["insert"])$zc=($xe?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$zc))$zc=ME."select=".urlencode($b);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$zc,lang(59));else{$O=array();foreach($q
as$C=>$p){$X=process_input($p);if($X!==false&&$X!==null)$O[idf_escape($C)]=($xe?"\n".idf_escape($C)." = $X":$X);}if($xe){if(!$O)redirect($zc);query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$O),"\nWHERE $Z"),$zc,lang(60));}else{$I=insert_into($b,$O);$vc=($I?last_id():0);queries_redirect($zc,lang(61,($vc?" $vc":"")),$I);}}}$Xd=$c->tableName(table_status($b));page_header(($xe?lang(62):lang(40)),$o,array("select"=>array($b,$Xd)),$Xd);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$M=array();foreach($q
as$C=>$p){if(isset($p["privileges"]["select"])){$pa=convert_field($p);if($_POST["clone"]&&$p["auto_increment"])$pa="''";if($nc=="sql"&&ereg("enum|set",$p["type"]))$pa="1*".idf_escape($C);$M[]=($pa?"$pa AS ":"").idf_escape($C);}}$K=array();if($M){$L=get_rows("SELECT".limit(implode(", ",$M)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".lang(63)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if(!$q)echo"<p class='error'>".lang(64)."\n";else{echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$C=>$p){echo"<tr><th>".$c->fieldName($p);$Wa=$_GET["set"][bracket_escape($C)];$Y=($K!==null?($K[$C]!=""&&$nc=="sql"&&ereg("enum|set",$p["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$xe&&$p["auto_increment"]?"":(isset($_GET["select"])?false:($Wa!==null?$Wa:$p["default"]))));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$p);$s=($_POST["save"]?(string)$_POST["function"][$C]:($xe&&$p["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if($p["type"]=="timestamp"&&$Y=="CURRENT_TIMESTAMP"){$Y="";$s="now";}input($p,$Y,$s);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".lang(65)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($xe?lang(66):lang(67))."' title='Ctrl+Shift+Enter'>\n";}echo($xe?"<input type='submit' name='delete' value='".lang(68)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$he,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$R=table_status($b);$x=indexes($b);$q=fields($b);$Mb=column_foreign_keys($b);$Qc="";if($R["Oid"]=="t"){$Qc=($nc=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($Qc));}parse_str($_COOKIE["adminer_import"],$ka);$Ad=array();$h=array();$ae=null;foreach($q
as$y=>$p){$C=$c->fieldName($p);if(isset($p["privileges"]["select"])&&$C!=""){$h[$y]=html_entity_decode(strip_tags($C));if(is_shortable($p))$ae=$c->selectLengthProcess();}$Ad+=$p["privileges"];}list($M,$Tb)=$c->selectColumnsProcess($h,$x);$lc=count($Tb)<count($M);$Z=$c->selectSearchProcess($q,$x);$ad=$c->selectOrderProcess($q,$x);$z=$c->selectLimitProcess();$Rb=($M?implode(", ",$M):"*".($Qc?", $Qc":""));if($nc=="sql"){foreach($h
as$y=>$X){$pa=convert_field($q[$y]);if($pa)$Rb.=", $pa AS ".idf_escape($y);}}$Rb.="\nFROM ".table($b);$Ub=($Tb&&$lc?"\nGROUP BY ".implode(", ",$Tb):"").($ad?"\nORDER BY ".implode(", ",$ad):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$te=>$K){$pa=convert_field($q[key($K)]);echo$j->result("SELECT".limit(($pa?$pa:idf_escape(key($K)))." FROM ".table($b)," WHERE ".where_check($te,$q).($Z?" AND ".implode(" AND ",$Z):"").($ad?" ORDER BY ".implode(", ",$ad):""),1));}exit;}if($_POST&&!$o){$He="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$md=$ve=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$md=array_flip($w["columns"]);$ve=($M?$md:array());break;}}foreach((array)$ve
as$y=>$X){if(in_array(idf_escape($y),$M))unset($ve[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$ve===array()){$Ge=$Z;if(is_array($_POST["check"]))$Ge[]="($He)";$H="SELECT $Rb".($Ge?"\nWHERE ".implode(" AND ",$Ge):"").$Ub;}else{$re=array();foreach($_POST["check"]as$X)$re[]="(SELECT".limit($Rb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X,$q).$Ub,1).")";$H=implode(" UNION ALL ",$re);}$c->dumpData($b,"table",$H);exit;}if(!$c->selectEmailProcess($Z,$Mb)){if($_POST["save"]||$_POST["delete"]){$I=true;$la=0;$H=table($b);$O=array();if(!$_POST["delete"]){foreach($h
as$C=>$X){$X=process_input($q[$C]);if($X!==null){if($_POST["clone"])$O[idf_escape($C)]=($X!==false?$X:idf_escape($C));elseif($X!==false)$O[]=idf_escape($C)." = $X";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($O)).")\nSELECT ".implode(", ",$O)."\nFROM ".table($b):" SET\n".implode(",\n",$O));}if($_POST["delete"]||$O){$Ma="UPDATE";if($_POST["delete"]){$Ma="DELETE";$H="FROM $H";}if($_POST["clone"]){$Ma="INSERT";$H="INTO $H";}if($_POST["all"]||($ve===array()&&$_POST["check"])||$lc){$I=queries("$Ma $H".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $He"));$la=$j->affected_rows;}else{foreach((array)$_POST["check"]as$X){$I=queries($Ma.limit1($H,"\nWHERE ".where_check($X,$q)));if(!$I)break;$la+=$j->affected_rows;}}}$Hc=lang(69,$la);if($_POST["clone"]&&$I&&$la==1){$vc=last_id();if($vc)$Hc=lang(61," $vc");}queries_redirect(remove_from_uri("page"),$Hc,$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$o=lang(70);else{$I=true;$la=0;foreach($_POST["val"]as$te=>$K){$O=array();foreach($K
as$y=>$X){$y=bracket_escape($y,1);$O[]=idf_escape($y)." = ".(ereg('char|text',$q[$y]["type"])||$X!=""?$c->processInput($q[$y],$X):"NULL");}$H=table($b)." SET ".implode(", ",$O);$Ge=" WHERE ".where_check($te,$q).($Z?" AND ".implode(" AND ",$Z):"");$I=queries("UPDATE".($lc?" $H$Ge":limit1($H,$Ge)));if(!$I)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(69,$la),$I);}}elseif(is_string($Db=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$I=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Db,$Cc);$la=count($Cc[0]);begin();$Id=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Cc[0]as$y=>$X){preg_match_all("~((?>\"[^\"]*\")+|[^$Id]*)$Id~",$X.$Id,$Dc);if(!$y&&!array_diff($Dc[1],$La)){$La=$Dc[1];$la--;}else{$O=array();foreach($Dc[1]as$t=>$Ja)$O[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$I=insert_update($b,$O,$md);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(71,$la),$I);queries("ROLLBACK");}else$o=upload_error($Db);}}$Xd=$c->tableName($R);if(is_ajax())ob_start();page_header(lang(36).": $Xd",$o);$O=null;if(isset($Ad["insert"])){$O="";foreach((array)$_GET["where"]as$X){if(count($Mb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$O.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($R,$O);if(!$h)echo"<p class='error'>".lang(72).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($M,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($ad,$h,$x);$c->selectLimitPrint($z);$c->selectLengthPrint($ae);$c->selectActionPrint($x);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$Pb=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$E=floor(max(0,$Pb-1)/$z);}$H=$c->selectQueryBuild($M,$Z,$Tb,$ad,$z,$E);if(!$H)$H="SELECT".limit((+$z&&$Tb&&$lc&&$nc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Rb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Ub,($z!=""?+$z:null),($E?$z*$E:0),"\n");echo$c->selectQuery($H);$I=$j->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($nc=="mssql")$I->seek($z*$E);$nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$nc=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$Pb=(+$z&&$Tb&&$lc?($nc=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".lang(63)."\n";else{$ya=$c->backwardKeys($b,$Xd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' ondblclick='tableClick(event, true);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tb&&$M?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(73)."</a>");$Nc=array();$Sb=array();reset($M);$td=1;foreach($L[0]as$y=>$X){if($y!=$Qc){$X=$_GET["columns"][key($M)];$p=$q[$M?($X?$X["col"]:current($M)):$y];$C=($p?$c->fieldName($p,$td):"*");if($C!=""){$td++;$Nc[$y]=$C;$g=idf_escape($y);$bc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Xa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($bc.($ad[0]==$g||$ad[0]==$y||(!$ad&&$lc&&$Tb[0]==$g)?$Xa:'')).'">';echo(!$M||$X?apply_sql_function($X["fun"],$C):h(current($M)))."</a>";echo"<span class='column hidden'>","<a href='".h($bc.$Xa)."' title='".lang(74)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Sb[$y]=$X["fun"];next($M);}}$yc=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$y=>$X)$yc[$y]=max($yc[$y],min(40,strlen(utf8_decode($X))));}}echo($ya?"<th>".lang(75):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$E%2==1)odd();ob_end_clean();}foreach($c->rowDescriptions($L,$Mb)as$B=>$K){$se=unique_array($L[$B],$x);$te="";foreach($se
as$y=>$X)$te.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));echo"<tr".odd().">".(!$Tb&&$M?"":"<td>".checkbox("check[]",substr($te,1),in_array(substr($te,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($lc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$te)."'>".lang(73)."</a>"));foreach($K
as$y=>$X){if(isset($Nc[$y])){$p=$q[$y];if($X!=""&&(!isset($nb[$y])||$nb[$y]!=""))$nb[$y]=(is_mail($X)?$Nc[$y]:"");$_="";$X=$c->editVal($X,$p);if($X!==null){if(ereg('blob|bytea|raw|file',$p["type"])&&$X!="")$_=ME.'download='.urlencode($b).'&field='.urlencode($y).$te;if($X==="")$X="&nbsp;";elseif(is_utf8($X)){if($ae!=""&&is_shortable($p))$X=shorten_utf8($X,max(0,+$ae));else$X=h($X);}if(!$_){foreach((array)$Mb[$y]as$r){if(count($Mb[$y])==1||end($r["source"])==$y){$_="";foreach($r["source"]as$t=>$Ld)$_.=where_link($t,$r["target"][$t],$L[$B][$Ld]);$_=($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$_;if(count($r["source"])==1)break;}}}if($y=="COUNT(*)"){$_=ME."select=".urlencode($b);$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$se))$_.=where_link($t++,$W["col"],$W["val"],$W["op"]);}foreach($se
as$oc=>$W)$_.=where_link($t++,$oc,$W);}}if(!$_){if(is_mail($X))$_="mailto:$X";if($qd=is_url($K[$y]))$_=($qd=="http"&&$aa?$K[$y]:"$qd://www.adminer.org/redirect/?url=".urlencode($K[$y]));}$u=h("val[$te][".bracket_escape($y)."]");$Y=$_POST["val"][$te][bracket_escape($y)];$Wb=h($Y!==null?$Y:$K[$y]);$Ac=strpos($X,"<i>...</i>");$jb=is_utf8($X)&&$L[$B][$y]==$K[$y]&&!$Sb[$y];$Zd=ereg('text|lob',$p["type"]);echo(($_GET["modify"]&&$jb)||$Y!==null?"<td>".($Zd?"<textarea name='$u' cols='30' rows='".(substr_count($K[$y],"\n")+1)."'>$Wb</textarea>":"<input name='$u' value='$Wb' size='$yc[$y]'>"):"<td id='$u' onclick=\"selectClick(this, event, ".($Ac?2:($Zd?1:0)).($jb?"":", '".h(lang(76))."'").");\">".$c->selectVal($X,$_,$p));}}if($ya)echo"<td>";$c->backwardKeysPrint($ya,$L[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Tb&&$M?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($L||$E)&&!is_ajax()){$vb=true;if($_GET["page"]!="last"&&+$z&&!$lc&&($Pb>=$z||$E)){$Pb=found_rows($R,$Z);if($Pb<max(1e4,2*($E+1)*$z))$Pb=reset(slow_query("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):"")));else$vb=false;}echo"<p class='pages'>";if(+$z&&($Pb===false||$Pb>$z)){$Ec=($Pb===false?$E+(count($L)>=$z?2:1):floor(($Pb-1)/$z));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(77)."', '".($E+1)."'), event); return false;\">".lang(77)."</a>:",pagination(0,$E).($E>5?" ...":"");for($t=max(1,$E-4);$t<min($Ec,$E+5);$t++)echo
pagination($t,$E);echo($E+5<$Ec?" ...":"").($vb&&$Pb!==false?pagination($Ec,$E):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.lang(78)."</a>");}echo($Pb!==false?" (".($vb?"":"~ ").lang(79,$Pb).")":""),(+$z&&($Pb===false?count($L)+1:$Pb-$E*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($E+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(80).'\');">'.lang(81).'</a>':'')," ".checkbox("all",1,0,lang(82))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(62),'</legend><div>
<input type="submit" value="',lang(65),'"',($_GET["modify"]?'':' title="'.lang(70).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(62),'">
<input type="submit" name="clone" value="',lang(83),'">
<input type="submit" name="delete" value="',lang(68),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Pb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Nb=$c->dumpFormat();if($Nb){print_fieldset("export",lang(84));$dd=$c->dumpOutput();echo($dd?html_select("output",$dd,$ka["output"])." ":""),html_select("format",$Nb,$ka["format"])," <input type='submit' name='export' value='".lang(84)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(85),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(85)."'>","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($nb,'strlen'),$h);echo"<p><input type='hidden' name='token' value='$he'></p>\n","</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$j->query("KILL ".(+$_POST["kill"]));elseif(list($Q,$u,$C)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$I=$j->query("SELECT $u, $C FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$u = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($t=0;$t<10&&($K=$I->fetch_row());$t++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($u))."]")."=".urlencode($K[0]))."'>".h($K[1])."</a><br>\n";if($t==10)echo"...\n";}exit;}else{page_header(lang(50),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(86).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(87).'<td>'.lang(88)."</thead>\n";foreach(table_status()as$Q=>$K){$C=$c->tableName($K);if(isset($K["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$C</a>";$X=number_format($K["Rows"],0,'.',lang(7));echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($K["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();