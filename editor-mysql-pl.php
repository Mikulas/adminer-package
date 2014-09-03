<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$Lc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Lc){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$sc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($sc){$$a=$sc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function formUncheck(id){document.getElementById(id).checked=false;}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}
el=el.parentNode;}
el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html.replace(/<noscript>.*<\/noscript>/i,'');}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var start=target.selectionStart;var scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.keyCode==27){var els=target.form.elements;for(var i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}
return false;}}
return true;}
function bodyKeydown(event){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea/i.test(target.tagName)){target.blur();if((!target.form.onsubmit||target.form.onsubmit()!==false)&&!ajaxForm(target.form)){target.form.submit();}
return false;}}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
function replaceFavicon(href){var favicon=document.getElementById('favicon');favicon.href=href;favicon.parentNode.appendChild(favicon);}
var ajaxState=0;function ajaxSend(url,data,popState){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.2.2');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.2.2" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};replaceFavicon(location.pathname+'?file=favicon.ico&amp;version=3.2.2');if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}
scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){if(href==as[i].href){as[i].className='active';}else if(as[i].className=='active'){as[i].className='';}}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if(ajaxState||event.state){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}}
function ajaxForm(form,data){if(/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'));}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'));}
function selectDblClick(td,event,text){td.ondblclick=function(){};var pos=event.rangeOffset;var value=(td.firstChild.alt?td.firstChild.alt:(td.textContent?td.textContent:td.innerText));var input=document.createElement(text?'textarea':'input');input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/^:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''));}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($ca){$Tb=substr($ca,-1);return
str_replace($Tb.$Tb,$Tb,substr($ca,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($oa){if(get_magic_quotes_gpc()){while(list($c,$a)=each($oa)){foreach($a
as$W=>$n){unset($oa[$c][$W]);if(is_array($n)){$oa[$c][stripslashes($W)]=$n;$oa[]=&$oa[$c][stripslashes($W)];}else{$oa[$c][stripslashes($W)]=($Lc?$n:stripslashes($n));}}}}}function
bracket_escape($ca,$Xc=false){static$fc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($ca,($Xc?array_flip($fc):$fc));}function
h($C){return
htmlspecialchars($C,ENT_QUOTES);}function
nbsp($C){return(trim($C)!=""?h($C):"&nbsp;");}function
nl_br($C){return
str_replace("\n","<br>",$C);}function
checkbox($f,$i,$db,$kc="",$ac=""){static$J=0;$J++;$b="<input type='checkbox'".($f?" name='$f' value='".h($i)."'":" class='jsonly'").($db?" checked":"").($ac?" onclick=\"$ac\"":"")." id='checkbox-$J'>";return($kc!=""?"<label for='checkbox-$J'>$b".h($kc)."</label>":$b);}function
optionlist($ga,$qd=null,$wc=false){$b="";foreach($ga
as$W=>$n){$qc=array($W=>$n);if(is_array($n)){$b.='<optgroup label="'.h($W).'">';$qc=$n;}foreach($qc
as$c=>$a){$b.='<option'.($wc||is_string($c)?' value="'.h($c).'"':'').(($wc||is_string($c)?(string)$c:$a)===$qd?' selected':'').'>'.h($a);}if(is_array($n)){$b.='</optgroup>';}}return$b;}function
html_select($f,$ga,$i="",$za=true){if($za){return"<select name='".h($f)."'".(is_string($za)?" onchange=\"$za\"":"").">".optionlist($ga,$i)."</select>";}$b="";foreach($ga
as$c=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$i?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($nc="",$Kd=false){return" onclick=\"".($Kd?"eventStop(event); ":"")."return confirm('".'Czy jesteś pewien?'.($nc?" (' + $nc + ')":"")."');\"";}function
js_escape($C){return
addcslashes($C,"\r\n'\\/");}function
ini_bool($Jd){$a=ini_get($Jd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($C){global$g;return$g->quote($C);}function
get_vals($l,$H=0){global$g;$b=array();$k=$g->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[]=$d[$H];}}return$b;}function
get_key_vals($l,$ia=null){global$g;if(!is_object($ia)){$ia=$g;}$b=array();$k=$ia->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[$d[0]]=$d[1];}}return$b;}function
get_rows($l,$ia=null,$u="<p class='error'>"){global$g;if(!is_object($ia)){$ia=$g;}$b=array();$k=$ia->query($l);if(is_object($k)){while($d=$k->fetch_assoc()){$b[]=$d;}}elseif(!$k&&$g->error&&$u&&defined("PAGE_HEADER")){echo$u.error()."\n";}return$b;}function
unique_array($d,$F){foreach($F
as$S){if(ereg("PRIMARY|UNIQUE",$S["type"])){$b=array();foreach($S["columns"]as$c){if(!isset($d[$c])){continue
2;}$b[$c]=$d[$c];}return$b;}}$b=array();foreach($d
as$c=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$b[$c]=$a;}}return$b;}function
where($o){global$na;$b=array();foreach((array)$o["where"]as$c=>$a){$b[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$a)||$na=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$o["null"]as$c){$b[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$vc);remove_slashes(array(&$vc));return
where($vc);}function
where_link($p,$H,$i,$Bd="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($H)."&where%5B$p%5D%5Bop%5D=".urlencode((isset($i)?$Bd:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($i);}function
cookie($f,$i){global$ab;$Za=array($f,(ereg("\n",$i)?"":$i),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ab);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Za[]=true;}return
call_user_func_array('setcookie',$Za);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$a){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($qb,$D,$A){global$ta;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ta))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($qb!="server"||$D!=""?urlencode($qb)."=".urlencode($D)."&":"")."username=".urlencode($A).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($G,$X=null){if(isset($X)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($G)?$G:$_SERVER["REQUEST_URI"]))][]=$X;}if(isset($G)){if($G==""){$G=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $G");exit;}}function
query_redirect($l,$G,$X,$pb=true,$_d=true,$dc=false){global$g,$u,$j;if($_d){$dc=!$g->query($l);}$Vb="";if($l){$Vb=$j->messageQuery("$l;");}if($dc){$u=error().$Vb;return
false;}if($pb){redirect($G,$X.$Vb);}return
true;}function
queries($l=null){global$g;static$Uc=array();if(!isset($l)){return
implode(";\n",$Uc);}$Uc[]=(ereg(';$',$l)?"DELIMITER ;;\n$l;\nDELIMITER ":$l);return$g->query($l);}function
apply_queries($l,$ka,$xd='table'){foreach($ka
as$h){if(!queries("$l ".$xd($h))){return
false;}}return
true;}function
queries_redirect($G,$X,$pb){return
query_redirect(queries(),$G,$X,$pb,false,!$pb);}function
remove_from_uri($ha=""){return
substr(preg_replace("~(?<=[?&])($ha".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($z,$yd){return" ".($z==$yd?$z+1:'<a href="'.h(remove_from_uri("page").($z?"&page=$z":"")).'">'.($z+1)."</a>");}function
get_file($c,$Lb=false){$Q=$_FILES[$c];if(!$Q||$Q["error"]){return$Q["error"];}$b=file_get_contents($Lb&&ereg('\\.gz$',$Q["name"])?"compress.zlib://$Q[tmp_name]":($Lb&&ereg('\\.bz2$',$Q["name"])?"compress.bzip2://$Q[tmp_name]":$Q["tmp_name"]));if($Lb){$Cc=substr($b,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Cc,$Rd)){$b=iconv("utf-16","utf-8",$b);}elseif($Cc=="\xEF\xBB\xBF"){$b=substr($b,3);}}return$b;}function
upload_error($u){$Tc=($u==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($u?'Wgranie pliku było niemożliwe.'.($Tc?" ".sprintf('Maksymalna wielkość pliku to %sB.',$Tc):""):'Plik nie istnieje.');}function
odd($b=' class="odd"'){static$p=0;if(!$b){$p=-1;}return($p++%
2?$b:'');}function
json_row($c,$a=null){static$Y=true;if($Y){echo"{";}if($c!=""){echo($Y?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$Y=false;}else{echo"\n}\n";$Y=true;}}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
repeat_pattern($K,$bb){return
str_repeat("$K{0,65535}",$bb/65535)."$K{0,".($bb
%
65535)."}";}function
shorten_utf8($C,$bb=80,$wd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$bb).")($)?)u",$C,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$bb).")($)?)",$C,$m);}return
h($m[1]).$wd.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($oa,$vd=array()){while(list($c,$a)=each($oa)){if(is_array($a)){foreach($a
as$W=>$n){$oa[$c."[$W]"]=$n;}}elseif(!in_array($c,$vd)){echo'<input type="hidden" name="'.h($c).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$j;$b=array();foreach($j->foreignKeys($h)as$ma){foreach($ma["source"]as$a){$b[$a][]=$ma;}}return$b;}function
enum_input($sa,$N,$e,$i,$Ib=null){global$j;preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$R);$b=(isset($Ib)?"<label><input type='$sa'$N value='$Ib'".((is_array($i)?in_array($Ib,$i):$i===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($R[1]as$p=>$a){$a=stripcslashes(str_replace("''","'",$a));$db=(is_int($i)?$i==$p+1:(is_array($i)?in_array($p+1,$i):$i===$a));$b.=" <label><input type='$sa'$N value='".($p+1)."'".($db?' checked':'').'>'.h($j->editVal($a,$e)).'</label>';}return$b;}function
input($e,$i,$w){global$Ca,$j,$na;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$Ec=($na=="mssql"&&$e["auto_increment"]);if($Ec&&!$_POST["save"]){$w=null;}$Z=(isset($_GET["select"])||$Ec?array("orig"=>'bez zmian'):array())+$j->editFunctions($e);$N=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($Z[""])."<td>".$j->editInput($_GET["edit"],$e,$N,$i);}else{$Y=0;foreach($Z
as$c=>$a){if($c===""||!$a){break;}$Y++;}$za=($Y?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($Y > f.selectedIndex) f.selectedIndex = $Y;\"":"");$N.=$za;echo(count($Z)>1?html_select("function[$f]",$Z,!isset($w)||in_array($w,$Z)||isset($Z[$w])?$w:"","functionChange(this);"):nbsp(reset($Z))).'<td>';$Dc=$j->editInput($_GET["edit"],$e,$N,$i);if($Dc!=""){echo$Dc;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$R);foreach($R[1]as$p=>$a){$a=stripcslashes(str_replace("''","'",$a));$db=(is_int($i)?($i>>$p)&1:in_array($a,explode(",",$i),true));echo" <label><input type='checkbox' name='fields[$f][$p]' value='".(1<<$p)."'".($db?' checked':'')."$za>".h($j->editVal($a,$e)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$za>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($na!="sqlite"||ereg("\n",$i)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$N>".h($i).'</textarea>';}else{$Bb=(!ereg('int',$e["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$e["length"],$m)?((ereg("binary",$e["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$e["unsigned"]?1:0)):($Ca[$e["type"]]?$Ca[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($i)."'".($Bb?" maxlength='$Bb'":"").(ereg('char|binary',$e["type"])&&$Bb>20?" size='40'":"")."$N>";}}}function
process_input($e){global$j;$ca=bracket_escape($e["field"]);$w=$_POST["function"][$ca];$i=$_POST["fields"][$ca];if($e["type"]=="enum"){if($i==-1){return
false;}if($i==""){return"NULL";}return+$i;}if($e["auto_increment"]&&$i==""){return
null;}if($w=="orig"){return
false;}if($w=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$i);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$Q=get_file("fields-$ca");if(!is_string($Q)){return
false;}return
q($Q);}return$j->processInput($e,$i,$w);}function
search_tables(){global$j,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Cb=false;foreach(table_status()as$h=>$E){$f=$j->tableName($E);if(isset($E["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$k=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$j->selectSearchProcess(fields($h),array())),1));if($k->fetch_row()){if(!$Cb){echo"<ul>\n";$Cb=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($Cb?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($rb,$Kc=false){global$j;$b=$j->dumpHeaders($rb,$Kc);$Aa=$_POST["output"];if($Aa!="text"){header("Content-Disposition: attachment; filename=".($rb!=""?friendly_url($rb):"dump").".$b".($Aa!="file"&&!ereg('[^0-9a-z]',$Aa)?".$Aa":""));}session_write_close();return$b;}function
dump_csv($d){foreach($d
as$c=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$d[$c]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$d)."\r\n";}function
apply_sql_function($w,$H){return($w?($w=="unixepoch"?"DATETIME($H, '$w')":($w=="count distinct"?"COUNT(DISTINCT ":strtoupper("$w("))."$H)"):$H);}function
password_file(){$ib=ini_get("upload_tmp_dir");if(!$ib){if(function_exists('sys_get_temp_dir')){$ib=sys_get_temp_dir();}else{$Fa=@tempnam("","");if(!$Fa){return
false;}$ib=dirname($Fa);unlink($Fa);}}$Fa="$ib/adminer.key";$b=@file_get_contents($Fa);if($b){return$b;}$Pb=@fopen($Fa,"w");if($Pb){$b=md5(uniqid(mt_rand(),true));fwrite($Pb,$b);fclose($Pb);}return$b;}function
is_mail($Ha){$Rc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$K="$Rc+(\\.$Rc+)*@($cb?\\.)+$cb";return
preg_match("(^$K(,\\s*$K)*\$)i",$Ha);}function
is_url($C){$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cb?\\.)+$cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$C,$m)?strtolower($m[1]):"");}function
print_fieldset($J,$Gd,$ud=false){echo"<fieldset><legend><a href='#fieldset-$J' onclick=\"return !toggle('fieldset-$J');\">$Gd</a></legend><div id='fieldset-$J'".($ud?"":" class='hidden'").">\n";}function
bold($Wc){return($Wc?" class='active'":"");}global$j,$g,$ta,$ad,$Wb,$u,$Z,$bd,$ab,$Ic,$na,$od,$Pd,$_b,$Qc,$aa,$Nd,$Ca,$hd,$zb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$ab=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Za=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ab);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Za[]=true;}call_user_func_array('session_set_cookie_params',$Za);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($gd,$_a){$fd=($_a==1||(!$_a&&'pl'=='fr')?0:('pl'=='sl'&&(!$_a||$_a>2)?1:0)+((!$_a||$_a>=5)&&ereg('cs|sk|ru|sl|pl','pl')?2:1));return
sprintf($gd[$fd],$_a);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($jd,$A,$O,$nd='auth_error'){set_exception_handler($nd);parent::__construct($jd,$A,$O);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($l,$Ma=false){$k=parent::query($l);if(!$k){$cd=$this->errorInfo();$this->error=$cd[2];return
false;}$this->store_result($k);return$k;}function
multi_query($l){return$this->_result=$this->query($l);}function
store_result($k=null){if(!$k){$k=$this->_result;}if($k->columnCount()){$k->num_rows=$k->rowCount();return$k;}$this->affected_rows=$k->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($l,$e=0){$k=$this->query($l);if(!$k){return
false;}$d=$k->fetch();return$d[$e];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$ta=array();$ta=array("server"=>"MySQL")+$ta;if(!defined("DRIVER")){$ld=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$A,$O){mysqli_report(MYSQLI_REPORT_OFF);list($pd,$yb)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$pd:ini_get("mysqli.default_host")),("$D$A"!=""?$A:ini_get("mysqli.default_user")),("$D$A$O"!=""?$O:ini_get("mysqli.default_pw")),null,(is_numeric($yb)?$yb:ini_get("mysqli.default_port")),(!is_numeric($yb)?$yb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($l,$e=0){$k=$this->query($l);if(!$k){return
false;}$d=$k->fetch_array();return$d[$e];}function
quote($C){return"'".$this->escape_string($C)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$A,$O){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$A"!=""?$A:ini_get("mysql.default_user")),("$D$A$O"!=""?$O:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($C){return"'".mysql_real_escape_string($C,$this->_link)."'";}function
select_db($Ya){return
mysql_select_db($Ya,$this->_link);}function
query($l,$Ma=false){$k=@($Ma?mysql_unbuffered_query($l,$this->_link):mysql_query($l,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
false;}if($k===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($k);}function
multi_query($l){return$this->_result=$this->query($l);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($l,$e=0){$k=$this->query($l);if(!$k||!$k->num_rows){return
false;}return
mysql_result($k->_result,0,$e);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($k){$this->_result=$k;$this->num_rows=mysql_num_rows($k);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$b=mysql_fetch_field($this->_result,$this->_offset++);$b->orgtable=$b->table;$b->orgname=$b->name;$b->charsetnr=($b->blob?63:0);return$b;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($D,$A,$O){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$D)),$A,$O);$this->query("SET NAMES utf8");return
true;}function
select_db($Ya){return$this->query("USE ".idf_escape($Ya));}function
query($l,$Ma=false){$this->setAttribute(1000,!$Ma);return
parent::query($l,$Ma);}}}function
idf_escape($ca){return"`".str_replace("`","``",$ca)."`";}function
table($ca){return
idf_escape($ca);}function
connect(){global$j;$g=new
Min_DB;$Xb=$j->credentials();if($g->connect($Xb[0],$Xb[1],$Xb[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($Yc=true){global$g;$b=&get_session("dbs");if(!isset($b)){if($Yc){restart_session();ob_flush();flush();}$b=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$b;}function
limit($l,$o,$B,$Oc=0,$va=" "){return" $l$o".(isset($B)?$va."LIMIT $B".($Oc?" OFFSET $Oc":""):"");}function
limit1($l,$o){return
limit($l,$o,1);}function
db_collation($xa,$Zc){global$g;$b=null;$hb=$g->result("SHOW CREATE DATABASE ".idf_escape($xa),1);if(preg_match('~ COLLATE ([^ ]+)~',$hb,$m)){$b=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$hb,$m)){$b=$Zc[$m[1]][-1];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$b[]=$d["Engine"];}}return$b;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($ja){$b=array();foreach($ja
as$xa){$b[$xa]=count(get_vals("SHOW TABLES IN ".idf_escape($xa)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$b[$d["Name"]]=$d;}return$b;}function
is_view($E){return!isset($E["Rows"]);}function
fk_support($E){return($E["Engine"]=="InnoDB");}function
fields($h){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$m);$b[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($d["Default"]!=""||ereg("char",$m[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$m)?$m[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$b;}function
indexes($h,$ia=null){global$g;if(!is_object($ia)){$ia=$g;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$ia)as$d){$b[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$b[$d["Key_name"]]["columns"][]=$d["Column_name"];$b[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$b;}function
foreign_keys($h){global$g,$_b;static$K='`(?:[^`]|``)+`';$b=array();$Mc=$g->result("SHOW CREATE TABLE ".table($h),1);if($Mc){preg_match_all("~CONSTRAINT ($K) FOREIGN KEY \\(((?:$K,? ?)+)\\) REFERENCES ($K)(?:\\.($K))? \\(((?:$K,? ?)+)\\)(?: ON DELETE (".implode("|",$_b)."))?(?: ON UPDATE (".implode("|",$_b)."))?~",$Mc,$R,PREG_SET_ORDER);foreach($R
as$m){preg_match_all("~$K~",$m[2],$Zb);preg_match_all("~$K~",$m[5],$wa);$b[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$Zb[0]),"target"=>array_map('idf_unescape',$wa[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$b;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$d){if($d["Default"]){$b[$d["Charset"]][-1]=$d["Collation"];}else{$b[$d["Charset"]][]=$d["Collation"];}}ksort($b);foreach($b
as$c=>$a){asort($b[$c]);}return$b;}function
information_schema($xa){global$g;return($g->server_info>=5&&$xa=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($xa,$ya){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($xa).($ya?" COLLATE ".q($ya):""));}function
drop_databases($ja){set_session("dbs",null);return
apply_queries("DROP DATABASE",$ja,'idf_escape');}function
rename_database($f,$ya){if(create_database($f,$ya)){$Ia=array();foreach(tables_list()as$h=>$sa){$Ia[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Ia||queries("RENAME TABLE ".implode(", ",$Ia))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Ub=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$S){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$S["columns"],true)){$Ub="";break;}if($S["type"]=="PRIMARY"){$Ub=" UNIQUE";}}}return" AUTO_INCREMENT$Ub";}function
alter_table($h,$f,$q,$Fd,$Ed,$Pc,$ya,$gb,$Cd){$ea=array();foreach($q
as$e){$ea[]=($e[1]?($h!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($h!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$ea=array_merge($ea,$Fd);$Hc="COMMENT=".q($Ed).($Pc?" ENGINE=".q($Pc):"").($ya?" COLLATE ".q($ya):"").($gb!=""?" AUTO_INCREMENT=$gb":"").$Cd;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ea)."\n) $Hc");}if($h!=$f){$ea[]="RENAME TO ".table($f);}$ea[]=$Hc;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$ea));}function
alter_indexes($h,$ea){foreach($ea
as$c=>$a){$ea[$c]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($h).implode(",",$ea));}function
truncate_tables($ka){return
apply_queries("TRUNCATE TABLE",$ka);}function
drop_views($Xa){return
queries("DROP VIEW ".implode(", ",array_map('table',$Xa)));}function
drop_tables($ka){return
queries("DROP TABLE ".implode(", ",array_map('table',$ka)));}function
move_tables($ka,$Xa,$wa){$Ia=array();foreach(array_merge($ka,$Xa)as$h){$Ia[]=table($h)." TO ".idf_escape($wa).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Ia));}function
copy_tables($ka,$Xa,$wa){foreach($ka
as$h){$f=($wa==DB?table("copy_$h"):idf_escape($wa).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($Xa
as$h){$f=($wa==DB?table("copy_$h"):idf_escape($wa).".".table($h));$Id=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Id[select]")){return
false;}}return
true;}function
trigger($f){$v=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($v);}function
triggers($h){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$d){$b[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$sa){global$g,$Wb,$Ic,$Ca;$Ld=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Gc="((".implode("|",array_merge(array_keys($Ca),$Ld)).")(?:\\s*\\(((?:[^'\")]*|$Wb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$K="\\s*(".($sa=="FUNCTION"?"":implode("|",$Ic)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Gc";$hb=$g->result("SHOW CREATE $sa ".idf_escape($f),2);preg_match("~\\(((?:$K\\s*,?)*)\\)".($sa=="FUNCTION"?"\\s*RETURNS\\s+$Gc":"")."\\s*(.*)~is",$hb,$m);$q=array();preg_match_all("~$K\\s*,?~is",$m[1],$R,PREG_SET_ORDER);foreach($R
as$ha){$f=str_replace("``","`",$ha[2]).$ha[3];$q[]=array("field"=>$f,"type"=>strtolower($ha[5]),"length"=>preg_replace_callback("~$Wb~s",'normalize_enum',$ha[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ha[8] $ha[7]"))),"full_type"=>$ha[4],"inout"=>strtoupper($ha[1]),"collation"=>strtolower($ha[9]),);}if($sa!="FUNCTION"){return
array("fields"=>$q,"definition"=>$m[11]);}return
array("fields"=>$q,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($h,$s){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
insert_update($h,$s,$lb){foreach($s
as$c=>$a){$s[$c]="$c = $a";}$la=implode(", ",$s);return
queries("INSERT INTO ".table($h)." SET $la ON DUPLICATE KEY UPDATE $la");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$l){return$g->query("EXPLAIN $l");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Md){return
true;}function
create_sql($h,$gb){global$g;$b=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$gb){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($Ya){return"USE ".idf_escape($Ya);}function
trigger_sql($h,$tb){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$d){$b.="\n".($tb=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Ad){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$Ad);}$na="sql";$Ca=array();$Qc=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),)as$c=>$a){$Ca+=$a;$Qc[$c]=array_keys($a);}$hd=array("unsigned","zerofill","unsigned zerofill");$td=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Z=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$bd=array("avg","count","count distinct","group_concat","max","min","sum");$ad=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$zb="3.2.2";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return'Edytor';}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$ja=get_databases(false);return(!$ja?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ja[(information_schema($ja[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Użytkownik<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Hasło<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Zaloguj się'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Zapamiętaj sesję')."\n";}function
login($Od,$O){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Ua){return
h($Ua["Comment"]!=""?$Ua["Comment"]:$Ua["Name"]);}function
fieldName($e,$V=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Ua,$s=""){$r=$Ua["Name"];if(isset($s)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($r).$s).'">'.'Nowy rekord'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Ostatnia strona'."'>&gt;&gt;</a>\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$sd){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($h)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$b[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($b
as$c=>$a){$f=$this->tableName(table_status($c));if($f!=""){$Fc=preg_quote($sd);$va="(:|\\s*-)?\\s+";$b[$c]["name"]=(preg_match("(^$Fc$va(.+)|^(.+?)$va$Fc\$)iu",$f,$m)?$m[2].$m[3]:$f);}else{unset($b[$c]);}}return$b;}function
backwardKeysPrint($rd,$d){foreach($rd
as$h=>$Nc){foreach($Nc["keys"]as$Da){$t=ME.'select='.urlencode($h);$p=0;foreach($Da
as$H=>$a){$t.=where_link($p++,$H,$d[$a]);}echo"<a href='".h($t)."'>".h($Nc["name"])."</a>";$t=ME.'edit='.urlencode($h);foreach($Da
as$H=>$a){$t.="&set".urlencode("[".bracket_escape($H)."]")."=".urlencode($d[$a]);}echo"<a href='".h($t)."' title='".'Nowy rekord'."'>+</a> ";}}}function
selectQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->\n";}function
rowDescription($h){foreach(fields($h)as$e){if($e["type"]=="varchar"){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($v,$Va){$b=$v;foreach($v[0]as$c=>$a){foreach((array)$Va[$c]as$ba){if(count($ba["source"])==1){$J=idf_escape($ba["target"][0]);$f=$this->rowDescription($ba["table"]);if($f!=""){$Sc=array();foreach($v
as$d){$Sc[$d[$c]]=exact_value($d[$c]);}$Nb=$this->_values[$ba["table"]];if(!$Nb){$Nb=get_key_vals("SELECT $J, $f FROM ".table($ba["table"])." WHERE $J IN (".implode(", ",$Sc).")");}foreach($v
as$y=>$d){if(isset($d[$c])){$b[$y][$c]=(string)$Nb[$d[$c]];}}break;}}}}return$b;}function
selectVal($a,$t,$e){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$b=lang(array('%d bajt','%d bajty','%d bajtów'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$t' alt='$b'>";}}if(like_bool($e)&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.2":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.2.2").'" alt="'.h($a).'">';}if($t){$b="<a href='$t'>$b</a>";}if(!$t&&!like_bool($e)&&ereg('int|float|double|decimal',$e["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$e["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($x,$_){}function
selectSearchPrint($o,$_,$F){$o=(array)$_GET["where"];echo'<fieldset><legend>'.'Szukaj'."</legend><div>\n";$Kb=array();foreach($o
as$c=>$a){$Kb[$a["col"]]=$c;}$p=0;$q=fields($_GET["select"]);foreach($q
as$f=>$e){if(ereg("enum",$e["type"])){$qa=$_[$f];$c=$Kb[$f];$p--;echo"<div>".h($qa)."<input type='hidden' name='where[$p][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$p][val][]'",$e,(array)$o[$c]["val"],($e["null"]?0:null)),"</div>\n";unset($_[$f]);}}foreach($_
as$f=>$qa){$ga=$this->_foreignKeyOptions($_GET["select"],$f);if($ga){if($q[$f]["null"]){$ga[0]='('.'puste'.')';}$c=$Kb[$f];$p--;echo"<div>".h($qa)."<input type='hidden' name='where[$p][col]' value='".h($f)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($ga,$o[$c]["val"],true)."</select></div>\n";unset($_[$f]);}}$p=0;foreach($o
as$a){if(($a["col"]==""||$_[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($_,$a["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$p][val]' value='".h($a["val"])."'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='selectAddRow(this);'><option value=''>(".'gdziekolwiek'.")".optionlist($_,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input name='where[$p][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($V,$_,$F){$Qb=array();foreach($F
as$c=>$S){$V=array();foreach($S["columns"]as$a){$V[]=$_[$a];}if(count(array_filter($V,'strlen'))>1&&$c!="PRIMARY"){$Qb[$c]=implode(", ",$V);}}if($Qb){echo'<fieldset><legend>'.'Sortuj'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Qb,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($B){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$B),"</div></fieldset>\n";}function
selectLengthPrint($Ja){}function
selectActionPrint(){echo"<fieldset><legend>".'Czynność'."</legend><div>","<input type='submit' value='".'pokaż'."'>","</div></fieldset>\n";}function
selectEmailPrint($ob,$_){if($ob){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<p>".'Nadawca'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Temat'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n";echo
html_select("email_addition",$_,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Dodaj'."'>\n";echo"<p>".'Załączniki'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($ob)==1?'<input type="hidden" name="email_field" value="'.h(key($ob)).'">':html_select("email_field",$ob)),"<input type='submit' name='email' value='".'Wyślij'."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($_,$F){return
array(array(),array());}function
selectSearchProcess($q,$F){$b=array();foreach((array)$_GET["where"]as$c=>$o){$pa=$o["col"];$Wa=$o["op"];$a=$o["val"];if(($c<0?"":$pa).$a!=""){$Ta=array();foreach(($pa!=""?array($pa=>$q[$pa]):$q)as$f=>$e){if($pa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){$f=idf_escape($f);if($pa!=""&&$e["type"]=="enum"){$Ta[]=(in_array(0,$a)?"$f IS NULL OR ":"")."$f IN (".implode(", ",array_map('intval',$a)).")";}else{$gc=ereg('char|text|enum|set',$e["type"]);$i=$this->processInput($e,(!$Wa&&$gc&&ereg('^[^%]+$',$a)?"%$a%":$a));$Ta[]=$f.($i=="NULL"?" IS".($Wa==">="?" NOT":"")." $i":(in_array($Wa,$this->operators)||$Wa=="="?" $Wa $i":($gc?" LIKE $i":" IN (".str_replace(",","', '",$i).")")));if($c<0&&$a=="0"){$Ta[]="$f IS NULL";}}}}$b[]=($Ta?"(".implode(" OR ",$Ta).")":"0");}}return$b;}function
selectOrderProcess($q,$F){$nb=$_GET["index_order"];if($nb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($nb!=""?array($F[$nb]):$F)as$S){if($nb!=""||$S["type"]=="INDEX"){$qa=false;foreach($S["columns"]as$a){if(ereg('date|timestamp',$q[$a]["type"])){$qa=true;break;}}$b=array();foreach($S["columns"]as$a){$b[]=idf_escape($a).($qa?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($o,$Va){if($_POST["email_append"]){return
true;}if($_POST["email"]){$ec=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$mb=$_POST["email_subject"];$X=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$mb.$X",$R);$v=get_rows("SELECT DISTINCT $e".($R[1]?", ".implode(", ",array_map('idf_escape',array_unique($R[1]))):"")." FROM ".table($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($o?" AND ".implode(" AND ",$o):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($v,$Va)as$d){$Mb=array('{\\'=>'{');foreach($R[1]as$a){$Mb['{$'."$a}"]=$this->editVal($d[$a],$q[$a]);}$Ha=$d[$_POST["email_field"]];if(is_mail($Ha)&&send_mail($Ha,strtr($mb,$Mb),strtr($X,$Mb),$_POST["email_from"],$_FILES["email_files"])){$ec++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),$ec));}return
false;}function
messageQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->";}function
editFunctions($e){$b=array();if($e["null"]&&ereg('blob',$e["type"])){$b["NULL"]='puste';}$b[""]=($e["null"]||$e["auto_increment"]||like_bool($e)?"":"*");if(ereg('date|time',$e["type"])){$b["now"]='teraz';}if(eregi('_(md5|sha1)$',$e["field"],$m)){$b[]=strtolower($m[1]);}return$b;}function
editInput($h,$e,$N,$i){if($e["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$N value='-1' checked><i>".'bez zmian'."</i></label> ":"").enum_input("radio",$N,$e,($i||isset($_GET["select"])?$i:0),($e["null"]?"":null));}$ga=$this->_foreignKeyOptions($h,$e["field"]);if($ga){return"<select$N>".optionlist($ga,$i,true)."</select>";}if(like_bool($e)){return'<input type="checkbox" value="'.h($i?$i:1).'"'.($i?' checked':'')."$N>";}$Ka="";if(ereg('time',$e["type"])){$Ka='HH:MM:SS';}if(ereg('date|timestamp',$e["type"])){$Ka='d.m.[rrrr]'.($Ka?" [$Ka]":"");}if($Ka){return"<input value='".h($i)."'$N> ($Ka)";}if(eregi('_(md5|sha1)$',$e["field"])){return"<input type='password' value='".h($i)."'$N>";}return'';}function
processInput($e,$i,$w=""){if($w=="now"){return"$w()";}$b=$i;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$i,$m)){$b=($m["p1"]!=""?$m["p1"]:($m["p2"]!=""?($m["p2"]<70?20:19).$m["p2"]:gmdate("Y")))."-$m[p3]$m[p4]-$m[p5]$m[p6]".end($m);}$b=($e["type"]=="bit"&&ereg('^[0-9]+$',$i)?$b:q($b));if(!ereg('char|text',$e["type"])&&!like_bool($e)&&$i==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$w)){$b="$w($b)";}if(ereg("binary",$e["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($h,$tb,$l){global$g;$k=$g->query($l,1);if($k){while($d=$k->fetch_assoc()){if($tb=="table"){dump_csv(array_keys($d));$tb="INSERT";}dump_csv($d);}}}function
dumpHeaders($rb,$Kc=false){$zd="csv";header("Content-Type: text/csv; charset=utf-8");return$zd;}function
homepage(){return
true;}function
navigation($Na){global$zb,$aa;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$zb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($zb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Na=="auth"){$Y=true;foreach((array)$_SESSION["pwds"]["server"][""]as$A=>$O){if(isset($O)){if($Y){echo"<p onclick='eventStop(event);'>\n";$Y=false;}echo"<a href='".h(auth_url("server","",$A))."'>".($A!=""?h($A):"<i>".'puste'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Wyloguj" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$aa,'">
</p>
</form>
';if($Na!="db"&&$Na!="ns"){$E=table_status();if(!$E){echo"<p class='message'>".'Brak tabel.'."\n";}else{$this->tablesPrint($E);}}}}function
tablesPrint($ka){echo"<p id='tables'>\n";foreach($ka
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'".bold($_GET["select"]==$d["Name"]).">$f</a><br>\n";}}}function
_foreignKeyOptions($h,$H){$Va=column_foreign_keys($h);foreach((array)$Va[$H]as$ba){if(count($ba["source"])==1){$J=idf_escape($ba["target"][0]);$f=$this->rowDescription($ba["table"]);if($f!=""){$b=&$this->_values[$ba["table"]];if(!isset($b)){$E=table_status($ba["table"]);$b=($E["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $J, $f FROM ".table($ba["table"])." ORDER BY 2"));}return$b;}}}}}$j=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($cc,$u="",$Sa=array(),$ic=""){global$od,$j,$g,$ta;header("Content-Type: text/html; charset=utf-8");$j->headers();$Bc=$cc.($ic!=""?": ".h($ic):"");$xc=strip_tags($Bc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$j->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($xc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$xc,'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.2.2",'" id="favicon">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.2.2",'">
<script type="text/javascript">
var areYouSure = \'Resend POST data?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.2.2",'"></script>
';if($j->head()&&file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr nojs" onclick="return bodyClick(event, \'',js_escape(DB),'\', \'',js_escape($_GET["ns"]),'\');" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($Sa)){$t=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($t?h($t):".").'">'.$ta[DRIVER].'</a> &raquo; ';$t=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):'Serwer');if($Sa===false){echo"$D\n";}else{echo"<a href='".($t?h($t):".")."'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Sa))){echo'<a href="'.h($t."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Sa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Sa
as$c=>$a){$qa=(is_array($a)?$a[1]:$a);if($qa!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($a)?$a[0]:$a).'">'.h($qa).'</a> &raquo; ';}}}echo"$cc\n";}}echo"<span id='loader'></span>\n","<h2>$Bc</h2>\n";restart_session();$mc=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$yc=$_SESSION["messages"][$mc];if($yc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$yc)."</div>\n";unset($_SESSION["messages"][$mc]);}$ja=&get_session("dbs");if(DB!=""&&$ja&&!in_array(DB,$ja,true)){$ja=null;}if($u){echo"<div class='error'>$u</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Na=""){global$j;if(!is_ajax()){echo'</div>

<div id="menu">
';$j->navigation($Na);echo'</div>
';}}function
int32($y){while($y>=2147483648){$y-=4294967296;}while($y<=-2147483649){$y+=4294967296;}return(int)$y;}function
long2str($n,$Hb){$Ea='';foreach($n
as$a){$Ea.=pack('V',$a);}if($Hb){return
substr($Ea,0,end($n));}return$Ea;}function
str2long($Ea,$Hb){$n=array_values(unpack('V*',str_pad($Ea,4*ceil(strlen($Ea)/4),"\0")));if($Hb){$n[]=strlen($Ea);}return$n;}function
xxtea_mx($L,$M,$U,$W){return
int32((($L>>5&0x7FFFFFF)^$M<<2)+(($M>>3&0x1FFFFFFF)^$L<<4))^int32(($U^$M)+($W^$L));}function
encrypt_string($Oa,$c){if($Oa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Oa,true);$y=count($n)-1;$L=$n[$y];$M=$n[0];$Ab=floor(6+52/($y+1));$U=0;while($Ab-->0){$U=int32($U+0x9E3779B9);$Pa=$U>>2&3;for($P=0;$P<$y;$P++){$M=$n[$P+1];$Ba=xxtea_mx($L,$M,$U,$c[$P&3^$Pa]);$L=int32($n[$P]+$Ba);$n[$P]=$L;}$M=$n[0];$Ba=xxtea_mx($L,$M,$U,$c[$P&3^$Pa]);$L=int32($n[$y]+$Ba);$n[$y]=$L;}return
long2str($n,false);}function
decrypt_string($Oa,$c){if($Oa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Oa,false);$y=count($n)-1;$L=$n[$y];$M=$n[0];$Ab=floor(6+52/($y+1));$U=int32($Ab*0x9E3779B9);while($U){$Pa=$U>>2&3;for($P=$y;$P>0;$P--){$L=$n[$P-1];$Ba=xxtea_mx($L,$M,$U,$c[$P&3^$Pa]);$M=int32($n[$P]-$Ba);$n[$P]=$M;}$L=$n[$y];$Ba=xxtea_mx($L,$M,$U,$c[$P&3^$Pa]);$M=int32($n[0]-$Ba);$n[0]=$M;$U=int32($U-0x9E3779B9);}return
long2str($n,true);}$g='';$aa=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ua=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($c)=explode(":",$a);$ua[$c]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$ub=$j->permanentLogin();$ua[$c]="$c:".base64_encode($ub?encrypt_string($_POST["password"],$ub):"");cookie("adminer_permanent",implode(" ",$ua));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($aa&&$_POST["token"]!=$aa){page_header('Wyloguj','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ua[$c]){unset($ua[$c]);cookie("adminer_permanent",implode(" ",$ua));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyślnie.');}}elseif($ua&&!$_SESSION["pwds"]){session_regenerate_id();$ub=$j->permanentLogin();foreach($ua
as$c=>$a){list(,$Hd)=explode(":",$a);list($qb,$D,$A)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$qb][$D][$A]=decrypt_string(base64_decode($Hd),$ub);}}function
auth_error($tc=null){global$g,$j,$aa;$fb=session_name();$u="";if(!$_COOKIE[$fb]&&$_GET[$fb]&&ini_bool("session.use_only_cookies")){$u='Wymagana jest obsługa sesji w PHP.';}elseif(isset($_GET["username"])){if(($_COOKIE[$fb]||$_GET[$fb])&&!$aa){$u='Sesja wygasła, zaloguj się ponownie.';}else{$O=&get_session("pwds");if(isset($O)){$u=h($tc?$tc->getMessage():(is_string($g)?$g:'Nieprawidłowe dane logowania.'));$O=null;}}}page_header('Zaloguj się',$u,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$j->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Brak rozszerzenia',sprintf('Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.',implode(", ",$ld)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$j->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$aa=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$aa;}$u=($_POST?($_POST["token"]==$aa?"":'Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','"post_max_size"')));$g->select_db($j->database());function
email_header($Dd){return"=?UTF-8?B?".base64_encode($Dd)."?=";}function
send_mail($Ha,$mb,$X,$La="",$eb=array("error"=>array())){$I=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$X=str_replace("\n",$I,wordwrap(str_replace("\r","","$X\n")));$vb=uniqid("boundary");$jb="";foreach($eb["error"]as$c=>$a){if(!$a){$jb.="--$vb$I"."Content-Type: ".str_replace("\n","",$eb["type"][$c]).$I."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$eb["name"][$c])."\"$I"."Content-Transfer-Encoding: base64$I$I".chunk_split(base64_encode(file_get_contents($eb["tmp_name"][$c])),76,$I).$I;}}$pc="";$kb="Content-Type: text/plain; charset=utf-8$I"."Content-Transfer-Encoding: 8bit";if($jb){$jb.="--$vb--$I";$pc="--$vb$I$kb$I$I";$kb="Content-Type: multipart/mixed; boundary=\"$vb\"";}$kb.=$I."MIME-Version: 1.0$I"."X-Mailer: Adminer Editor".($La?$I."From: ".str_replace("\n","",$La):"");return
mail($Ha,email_header($mb),$pc.$X.$jb,$kb);}function
like_bool($e){return
ereg("bool|(tinyint|bit)\\(1\\)",$e["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$_b=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$ta[DRIVER]='Zaloguj się';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$r=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$r-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($r)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$r=$_GET["edit"];$o=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$la=(isset($_GET["select"])?$_POST["edit"]:$o);$q=fields($r);foreach($q
as$f=>$e){if(!isset($e["privileges"][$la?"update":"insert"])||$j->fieldName($e)==""){unset($q[$f]);}}if($_POST&&!$u&&!isset($_GET["select"])){$G=$_POST["referer"];if($_POST["insert"]){$G=($la?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$G)){$G=ME."select=".urlencode($r);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($r)," WHERE $o"),$G,'Rekord został usunięty.');}else{$s=array();foreach($q
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$s[idf_escape($f)]=($la?"\n".idf_escape($f)." = $a":$a);}}if($la){if(!$s){redirect($G);}query_redirect("UPDATE".limit1(table($r)." SET".implode(",",$s),"\nWHERE $o"),$G,'Rekord został zaktualizowany.');}else{$k=insert_into($r,$s);$bc=($k?last_id():0);queries_redirect($G,sprintf('Rekord%s został dodany.',($bc?" $bc":"")),$k);}}}$Qa=$j->tableName(table_status($r));page_header(($la?'Edytuj':'Dodaj'),$u,array("select"=>array($r,$Qa)),$Qa);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($o){$x=array();foreach($q
as$f=>$e){if(isset($e["privileges"]["select"])){$x[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($x){$v=get_rows("SELECT".limit(implode(", ",$x)." FROM ".table($r)," WHERE $o",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($v)!=1?null:reset($v));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($q){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$f=>$e){echo"<tr><th>".$j->fieldName($e);$lc=$_GET["set"][bracket_escape($f)];$i=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?+$d[$f]:$d[$f]):(!$la&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($lc)?$lc:$e["default"]))));if(!$_POST["save"]&&is_string($i)){$i=$j->editVal($i,$e);}$w=($_POST["save"]?(string)$_POST["function"][$f]:($o&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($i===false?null:(isset($i)?'':'NULL'))));if($e["type"]=="timestamp"&&$i=="CURRENT_TIMESTAMP"){$i="";$w="now";}input($e,$i,$w);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($la?'Zapisz i kontynuuj edycję':'Zapisz i dodaj następny')."\">\n";}}echo($la?"<input type='submit' name='delete' value='".'Usuń'."' onclick=\"return confirm('".'Czy jesteś pewien?'."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$aa,'">
</form>
';}elseif(isset($_GET["select"])){$r=$_GET["select"];$E=table_status($r);$F=indexes($r);$q=fields($r);$Ra=column_foreign_keys($r);if($E["Oid"]=="t"){$F[]=array("type"=>"PRIMARY","columns"=>array("oid"));}$hc=array();$_=array();$Ja=null;foreach($q
as$c=>$e){$f=$j->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$_[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Ja=$j->selectLengthProcess();}}$hc+=$e["privileges"];}list($x,$T)=$j->selectColumnsProcess($_,$F);$o=$j->selectSearchProcess($q,$F);$V=$j->selectOrderProcess($q,$F);$B=$j->selectLimitProcess();$La=($x?implode(", ",$x):($E["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($r);$Yb=($T&&count($T)<count($x)?"\nGROUP BY ".implode(", ",$T):"").($V?"\nORDER BY ".implode(", ",$V):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$fa=>$d){echo$g->result("SELECT".limit(idf_escape(key($d))." FROM ".table($r)," WHERE ".where_check($fa).($o?" AND ".implode(" AND ",$o):"").($V?" ORDER BY ".implode(", ",$V):""),1));}exit;}if($_POST&&!$u){$oc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$lb=$sb=null;foreach($F
as$S){if($S["type"]=="PRIMARY"){$lb=array_flip($S["columns"]);$sb=($x?$lb:array());break;}}foreach($x
as$c=>$a){$a=$_GET["columns"][$c];if(!$a["fun"]){unset($sb[$a["col"]]);}}if($_POST["export"]){dump_headers($r);$j->dumpTable($r,"");if(!is_array($_POST["check"])||$sb===array()){$Ga=$o;if(is_array($_POST["check"])){$Ga[]="($oc)";}$l="SELECT $La".($Ga?"\nWHERE ".implode(" AND ",$Ga):"").$Yb;}else{$jc=array();foreach($_POST["check"]as$a){$jc[]="(SELECT".limit($La,"\nWHERE ".($o?implode(" AND ",$o)." AND ":"").where_check($a).$Yb,1).")";}$l=implode(" UNION ALL ",$jc);}$j->dumpData($r,"table",$l);exit;}if(!$j->selectEmailProcess($o,$Ra)){if($_POST["save"]||$_POST["delete"]){$k=true;$ra=0;$l=table($r);$s=array();if(!$_POST["delete"]){foreach($_
as$f=>$a){$a=process_input($q[$f]);if($a!==null){if($_POST["clone"]){$s[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$s[]=idf_escape($f)." = $a";}}}$l.=($_POST["clone"]?" (".implode(", ",array_keys($s)).")\nSELECT ".implode(", ",$s)."\nFROM ".table($r):" SET\n".implode(",\n",$s));}if($_POST["delete"]||$s){$wb="UPDATE";if($_POST["delete"]){$wb="DELETE";$l="FROM $l";}if($_POST["clone"]){$wb="INSERT";$l="INTO $l";}if($_POST["all"]||($sb===array()&&$_POST["check"])||count($T)<count($x)){$k=queries($wb." $l".($_POST["all"]?($o?"\nWHERE ".implode(" AND ",$o):""):"\nWHERE $oc"));$ra=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$k=queries($wb.limit1($l,"\nWHERE ".where_check($a)));if(!$k){break;}$ra+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ra),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$u='Kliknij podwójnie wartość, aby ją edytować.';}else{$k=true;$ra=0;foreach($_POST["val"]as$fa=>$d){$s=array();foreach($d
as$c=>$a){$c=bracket_escape($c,1);$s[]=idf_escape($c)." = ".(ereg('char|text',$q[$c]["type"])||$a!=""?$j->processInput($q[$c],$a):"NULL");}$l=table($r)." SET ".implode(", ",$s);$Ga=" WHERE ".where_check($fa).($o?" AND ".implode(" AND ",$o):"");$k=queries("UPDATE".(count($T)<count($x)?" $l$Ga":limit1($l,$Ga)));if(!$k){break;}$ra+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ra),$k);}}elseif(is_string($Q=get_file("csv_file",true))){$k=true;$Da=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Q,$R);$ra=count($R[0]);begin();$va=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($R[0]as$c=>$a){preg_match_all("~((\"[^\"]*\")+|[^$va]*)$va~",$a.$va,$Sb);if(!$c&&!array_diff($Sb[1],$Da)){$Da=$Sb[1];$ra--;}else{$s=array();foreach($Sb[1]as$p=>$pa){$s[idf_escape($Da[$p])]=($pa==""&&$q[$Da[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$pa))));}$k=insert_update($r,$s,$lb);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),$ra),$k);queries("ROLLBACK");}else{$u=upload_error($Q);}}}$Qa=$j->tableName($E);page_header('pokaż'.": $Qa",$u);session_write_close();$s=null;if(isset($hc["insert"])){$s="";foreach((array)$_GET["where"]as$a){if(count($Ra[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$s.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$j->selectLinks($E,$s);if(!$_){echo"<p class='error'>".'Nie udało się pobrać danych z tabeli'.($q?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($r).'">',"</div>\n";$j->selectColumnsPrint($x,$_);$j->selectSearchPrint($o,$_,$F);$j->selectOrderPrint($V,$_,$F);$j->selectLimitPrint($B);$j->selectLengthPrint($Ja);$j->selectActionPrint($Ja);echo"</form>\n";$z=$_GET["page"];if($z=="last"){$da=$g->result("SELECT COUNT(*) FROM ".table($r).($o?" WHERE ".implode(" AND ",$o):""));$z=floor(max(0,$da-1)/$B);}$l="SELECT".limit((+$B&&$T&&count($T)<count($x)&&$na=="sql"?"SQL_CALC_FOUND_ROWS ":"").$La,($o?"\nWHERE ".implode(" AND ",$o):"").$Yb,($B!=""?+$B:null),($z?$B*$z:0),"\n");echo$j->selectQuery($l);$k=$g->query($l);if(!$k){echo"<p class='error'>".error()."\n";}else{if($na=="mssql"){$k->seek($B*$z);}$xb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$v=array();while($d=$k->fetch_assoc()){$v[]=$d;}if($_GET["page"]!="last"){$da=(+$B&&$T&&count($T)<count($x)?($na=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($l) x")):count($v));}if(!$v){echo"<p class='message'>".'Brak rekordów.'."\n";}else{$Fb=$j->backwardKeys($r,$Qa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$T&&$x?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edytuj'."</a>");$Gb=array();$Z=array();reset($x);$rc=1;foreach($v[0]as$c=>$a){if($E["Oid"]!="t"||$c!="oid"){$a=$_GET["columns"][key($x)];$e=$q[$x?$a["col"]:$c];$f=($e?$j->fieldName($e,$rc):"*");if($f!=""){$rc++;$Gb[$c]=$f;$H=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($V[0]==$H||$V[0]==$c||(!$V&&$T[0]==$H)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$f)."</a>";}$Z[$c]=$a["fun"];next($x);}}$Rb=array();if($_GET["modify"]){foreach($v
as$d){foreach($d
as$c=>$a){$Rb[$c]=max($Rb[$c],min(40,strlen(utf8_decode($a))));}}}echo($Fb?"<th>".'Relacje':"")."</thead>\n";foreach($j->rowDescriptions($v,$Ra)as$y=>$d){$Eb=unique_array($v[$y],$F);$fa="";foreach($Eb
as$c=>$a){$fa.="&".(isset($a)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($a):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$T&&$x?"":"<td>".checkbox("check[]",substr($fa,1),in_array(substr($fa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($T)<count($x)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($r).$fa)."'>".'edytuj'."</a>"));foreach($d
as$c=>$a){if(isset($Gb[$c])){$e=$q[$c];if($a!=""&&(!isset($xb[$c])||$xb[$c]!="")){$xb[$c]=(is_mail($a)?$Gb[$c]:"");}$t="";$a=$j->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$t=h(ME.'download='.urlencode($r).'&field='.urlencode($c).$fa);}if($a===""){$a="&nbsp;";}elseif($Ja!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$Ja));}else{$a=h($a);}if(!$t){foreach((array)$Ra[$c]as$ma){if(count($Ra[$c])==1||end($ma["source"])==$c){$t="";foreach($ma["source"]as$p=>$Zb){$t.=where_link($p,$ma["target"][$p],$v[$y][$Zb]);}$t=h(($ma["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($ma["db"]),ME):ME).'select='.urlencode($ma["table"]).$t);if(count($ma["source"])==1){break;}}}}if($c=="COUNT(*)"){$t=h(ME."select=".urlencode($r));$p=0;foreach((array)$_GET["where"]as$n){if(!array_key_exists($n["col"],$Eb)){$t.=h(where_link($p++,$n["col"],$n["val"],$n["op"]));}}foreach($Eb
as$W=>$n){$t.=h(where_link($p++,$W,$n));}}}if(!$t){if(is_mail($a)){$t="mailto:$a";}if($uc=is_url($d[$c])){$t=($uc=="http"&&$ab?$d[$c]:"$uc://www.adminer.org/redirect/?url=".urlencode($d[$c]));}}$J=h("val[$fa][".bracket_escape($c)."]");$i=$_POST["val"][$fa][bracket_escape($c)];$_c=h(isset($i)?$i:$d[$c]);$dd=strpos($a,"<i>...</i>");$Ac=is_utf8($a)&&$v[$y][$c]==$d[$c]&&!$Z[$c];$zc=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$Ac)||isset($i)?"<td>".($zc?"<textarea name='$J' cols='30' rows='".(substr_count($d[$c],"\n")+1)."'>$_c</textarea>":"<input name='$J' value='$_c' size='$Rb[$c]'>"):"<td id='$J' ondblclick=\"".($Ac?"selectDblClick(this, event".($dd?", 2":($zc?", 1":"")).")":"alert('".h('Użyj linku edycji aby zmienić tę wartość.')."')").";\">".$j->selectVal($a,$t,$e));}}if($Fb){echo"<td>";}$j->backwardKeysPrint($Fb,$v[$y]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Ob);if($v||$z){$Jb=true;if($_GET["page"]!="last"&&+$B&&count($T)>=count($x)&&($da>=$B||$z)){$da=$E["Rows"];if(!isset($da)||$o||($E["Engine"]=="InnoDB"&&$da<max(1e4,2*($z+1)*$B))){ob_flush();flush();$da=$g->result("SELECT COUNT(*) FROM ".table($r).($o?" WHERE ".implode(" AND ",$o):""));}else{$Jb=false;}}echo"<p class='pages'>";if(+$B&&$da>$B){$Db=floor(($da-1)/$B);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($z+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$z).($z>5?" ...":"");for($p=max(1,$z-4);$p<min($Db,$z+5);$p++){echo
pagination($p,$z);}echo($z+5<$Db?" ...":"").($Jb?pagination($Db,$z):' <a href="'.h(remove_from_uri()."&page=last").'">'.'ostatni'."</a>");}echo" (".($Jb?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordów'),$da).") ".checkbox("all",1,0,'wybierz wszystkie')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Edytuj</legend><div>
<input type="submit" value="Zapisz zmiany" title="Kliknij podwójnie wartość, aby ją edytować." class="jsonly">
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usuń" onclick="return confirm('Czy jesteś pewien? (' + (this.form['all'].checked ? <?php echo$da,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Eksport');$Aa=$j->dumpOutput();echo($Aa?html_select("output",$Aa,$Ob["output"])." ":""),html_select("format",$j->dumpFormat(),$Ob["format"])," <input type='submit' name='export' value='".'Eksport'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}print_fieldset("import",'Import',!$v);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Ob["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$aa'>\n","</div></fieldset>\n";$j->selectEmailPrint(array_filter($xb,'strlen'),$_);echo"</form>\n";}}}else{page_header('Serwer',"",false);if($j->homepage()){echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Szukaj'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabela'.'<td>'.'Liczba rekordów'."</thead>\n";foreach(table_status()as$h=>$d){$f=$j->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$h,in_array($h,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($h)."'>$f</a>";$a=number_format($d["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($h)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();