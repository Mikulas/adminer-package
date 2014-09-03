<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$Tc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Tc){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$uc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($uc){$$a=$uc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className=document.body.className.replace(/(^|\s)nojs(\s|$)/,'$1js$2');function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
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
var currentState=++ajaxState;onblur=function(){replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.2.1');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.2.1" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};replaceFavicon(location.pathname+'?file=favicon.ico&amp;version=3.2.1');if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}
scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){if(href==as[i].href){as[i].className='active';}else if(as[i].className=='active'){as[i].className='';}}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if(event.state?confirm(areYouSure):ajaxState){ajaxSend(location.href,event.state,1);}}
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
function bodyLoad(version){onpopstate(history);}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($ca){$Yb=substr($ca,-1);return
str_replace($Yb.$Yb,$Yb,substr($ca,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($na){if(get_magic_quotes_gpc()){while(list($c,$a)=each($na)){foreach($a
as$X=>$n){unset($na[$c][$X]);if(is_array($n)){$na[$c][stripslashes($X)]=$n;$na[]=&$na[$c][stripslashes($X)];}else{$na[$c][stripslashes($X)]=($Tc?$n:stripslashes($n));}}}}}function
bracket_escape($ca,$fd=false){static$sc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($ca,($fd?array_flip($sc):$sc));}function
h($B){return
htmlspecialchars($B,ENT_QUOTES);}function
nbsp($B){return(trim($B)!=""?h($B):"&nbsp;");}function
nl_br($B){return
str_replace("\n","<br>",$B);}function
checkbox($f,$h,$Wa,$pc="",$rc=""){static$K=0;$K++;$b="<input type='checkbox'".($f?" name='$f' value='".h($h)."'":" class='jsonly'").($Wa?" checked":"").($rc?" onclick=\"$rc\"":"")." id='checkbox-$K'>";return($pc!=""?"<label for='checkbox-$K'>$b".h($pc)."</label>":$b);}function
optionlist($ja,$md=null,$xc=false){$b="";foreach($ja
as$X=>$n){$yc=array($X=>$n);if(is_array($n)){$b.='<optgroup label="'.h($X).'">';$yc=$n;}foreach($yc
as$c=>$a){$b.='<option'.($xc||is_string($c)?' value="'.h($c).'"':'').(($xc||is_string($c)?(string)$c:$a)===$md?' selected':'').'>'.h($a);}if(is_array($n)){$b.='</optgroup>';}}return$b;}function
html_select($f,$ja,$h="",$Aa=true){if($Aa){return"<select name='".h($f)."'".(is_string($Aa)?" onchange=\"$Aa\"":"").">".optionlist($ja,$h)."</select>";}$b="";foreach($ja
as$c=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$h?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($Dc="",$kd=false){return" onclick=\"".($kd?"eventStop(event); ":"")."return confirm('".'Naozaj?'.($Dc?" (' + $Dc + ')":"")."');\"";}function
js_escape($B){return
addcslashes($B,"\r\n'\\/");}function
ini_bool($od){$a=ini_get($od);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($B){global$g;return$g->quote($B);}function
get_vals($k,$I=0){global$g;$b=array();$l=$g->query($k);if(is_object($l)){while($d=$l->fetch_row()){$b[]=$d[$I];}}return$b;}function
get_key_vals($k,$fa=null){global$g;if(!is_object($fa)){$fa=$g;}$b=array();$l=$fa->query($k);if(is_object($l)){while($d=$l->fetch_row()){$b[$d[0]]=$d[1];}}return$b;}function
get_rows($k,$fa=null,$u="<p class='error'>"){global$g;if(!is_object($fa)){$fa=$g;}$b=array();$l=$fa->query($k);if(is_object($l)){while($d=$l->fetch_assoc()){$b[]=$d;}}elseif(!$l&&$g->error&&$u&&defined("PAGE_HEADER")){echo$u.error()."\n";}return$b;}function
unique_array($d,$G){foreach($G
as$V){if(ereg("PRIMARY|UNIQUE",$V["type"])){$b=array();foreach($V["columns"]as$c){if(!isset($d[$c])){continue
2;}$b[$c]=$d[$c];}return$b;}}$b=array();foreach($d
as$c=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$b[$c]=$a;}}return$b;}function
where($p){global$qa;$b=array();foreach((array)$p["where"]as$c=>$a){$b[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$a)||$qa=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$p["null"]as$c){$b[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$Fc);remove_slashes(array(&$Fc));return
where($Fc);}function
where_link($o,$I,$h,$Wc="="){return"&where%5B$o%5D%5Bcol%5D=".urlencode($I)."&where%5B$o%5D%5Bop%5D=".urlencode((isset($h)?$Wc:"IS NULL"))."&where%5B$o%5D%5Bval%5D=".urlencode($h);}function
cookie($f,$h){global$Ya;$Ta=array($f,(ereg("\n",$h)?"":$h),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ya);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ta[]=true;}return
call_user_func_array('setcookie',$Ta);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$a){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($sb,$E,$C){global$ta;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ta))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($sb!="server"||$E!=""?urlencode($sb)."=".urlencode($E)."&":"")."username=".urlencode($C).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($F,$W=null){if(isset($W)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($F)?$F:$_SERVER["REQUEST_URI"]))][]=$W;}if(isset($F)){if($F==""){$F=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $F");exit;}}function
query_redirect($k,$F,$W,$ib=true,$Xc=true,$Bc=false){global$g,$u,$j;if($Xc){$Bc=!$g->query($k);}$Wb="";if($k){$Wb=$j->messageQuery("$k;");}if($Bc){$u=error().$Wb;return
false;}if($ib){redirect($F,$W.$Wb);}return
true;}function
queries($k=null){global$g;static$oc=array();if(!isset($k)){return
implode(";\n",$oc);}$oc[]=(ereg(';$',$k)?"DELIMITER ;;\n$k;\nDELIMITER ":$k);return$g->query($k);}function
apply_queries($k,$da,$Vc='table'){foreach($da
as$i){if(!queries("$k ".$Vc($i))){return
false;}}return
true;}function
queries_redirect($F,$W,$ib){return
query_redirect(queries(),$F,$W,$ib,false,!$ib);}function
remove_from_uri($ka=""){return
substr(preg_replace("~(?<=[?&])($ka".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($z,$ld){return" ".($z==$ld?$z+1:'<a href="'.h(remove_from_uri("page").($z?"&page=$z":"")).'">'.($z+1)."</a>");}function
get_file($c,$Xb=false){$S=$_FILES[$c];if(!$S||$S["error"]){return$S["error"];}$b=file_get_contents($Xb&&ereg('\\.gz$',$S["name"])?"compress.zlib://$S[tmp_name]":($Xb&&ereg('\\.bz2$',$S["name"])?"compress.bzip2://$S[tmp_name]":$S["tmp_name"]));if($Xb){if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$b,$Od)){$b=iconv("utf-16","utf-8",$b);}else{$b=ereg_replace("^\xEF\xBB\xBF","",$b);}}return$b;}function
upload_error($u){$dc=($u==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($u?'Súbor sa nepodarilo nahrať.'.($dc?" ".sprintf('Maximálna povolená veľkosť súboru je %sB.',$dc):""):'Súbor neexistuje.');}function
odd($b=' class="odd"'){static$o=0;if(!$b){$o=-1;}return($o++%
2?$b:'');}function
json_row($c,$a=null){static$ba=true;if($ba){echo"{";}if($c!=""){echo($ba?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$ba=false;}else{echo"\n}\n";$ba=true;}}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
repeat_pattern($J,$Ua){return
str_repeat("$J{0,65535}",$Ua/65535)."$J{0,".($Ua
%
65535)."}";}function
shorten_utf8($B,$Ua=80,$Cd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Ua).")($)?)u",$B,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Ua).")($)?)",$B,$m);}return
h($m[1]).$Cd.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($na,$Bd=array()){while(list($c,$a)=each($na)){if(is_array($a)){foreach($a
as$X=>$n){$na[$c."[$X]"]=$n;}}elseif(!in_array($c,$Bd)){echo'<input type="hidden" name="'.h($c).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($i){global$j;$b=array();foreach($j->foreignKeys($i)as$ma){foreach($ma["source"]as$a){$b[$a][]=$ma;}}return$b;}function
enum_input($wa,$P,$e,$h,$ac=null){global$j;preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$U);$b=(isset($ac)?"<label><input type='$wa'$P value='$ac'".((is_array($h)?in_array($ac,$h):$h===0)?" checked":"")."><i>".'prázdne'."</i></label>":"");foreach($U[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Wa=(is_int($h)?$h==$o+1:(is_array($h)?in_array($o+1,$h):$h===$a));$b.=" <label><input type='$wa'$P value='".($o+1)."'".($Wa?' checked':'').'>'.h($j->editVal($a,$e)).'</label>';}return$b;}function
input($e,$h,$y){global$Da,$j,$qa;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$ec=($qa=="mssql"&&$e["auto_increment"]);if($ec&&!$_POST["save"]){$y=null;}$Y=(isset($_GET["select"])||$ec?array("orig"=>'originál'):array())+$j->editFunctions($e);$P=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($Y[""])."<td>".$j->editInput($_GET["edit"],$e,$P,$h);}else{$ba=0;foreach($Y
as$c=>$a){if($c===""||!$a){break;}$ba++;}$Aa=($ba?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($ba > f.selectedIndex) f.selectedIndex = $ba;\"":"");$P.=$Aa;echo(count($Y)>1?html_select("function[$f]",$Y,!isset($y)||in_array($y,$Y)||isset($Y[$y])?$y:"","functionChange(this);"):nbsp(reset($Y))).'<td>';$bc=$j->editInput($_GET["edit"],$e,$P,$h);if($bc!=""){echo$bc;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$U);foreach($U[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Wa=(is_int($h)?($h>>$o)&1:in_array($a,explode(",",$h),true));echo" <label><input type='checkbox' name='fields[$f][$o]' value='".(1<<$o)."'".($Wa?' checked':'')."$Aa>".h($j->editVal($a,$e)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Aa>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($qa!="sqlite"||ereg("\n",$h)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$P>".h($h).'</textarea>';}else{$Zb=(!ereg('int',$e["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$e["length"],$m)?((ereg("binary",$e["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$e["unsigned"]?1:0)):($Da[$e["type"]]?$Da[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($h)."'".($Zb?" maxlength='$Zb'":"").(ereg('char|binary',$e["type"])&&$Zb>20?" size='40'":"")."$P>";}}}function
process_input($e){global$j;$ca=bracket_escape($e["field"]);$y=$_POST["function"][$ca];$h=$_POST["fields"][$ca];if($e["type"]=="enum"){if($h==-1){return
false;}if($h==""){return"NULL";}return+$h;}if($e["auto_increment"]&&$h==""){return
null;}if($y=="orig"){return
false;}if($y=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$h);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$S=get_file("fields-$ca");if(!is_string($S)){return
false;}return
q($S);}return$j->processInput($e,$h,$y);}function
search_tables(){global$j,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Vb=false;foreach(table_status()as$i=>$A){$f=$j->tableName($A);if(isset($A["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($i,$_POST["tables"]))){$l=$g->query("SELECT".limit("1 FROM ".table($i)," WHERE ".implode(" AND ",$j->selectSearchProcess(fields($i),array())),1));if($l->fetch_row()){if(!$Vb){echo"<ul>\n";$Vb=true;}echo"<li><a href='".h(ME."select=".urlencode($i)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($Vb?"</ul>":"<p class='message'>".'Žiadne tabuľky.')."\n";}function
dump_headers($yb,$nc=false){global$j;$b=$j->dumpHeaders($yb,$nc);$za=$_POST["output"];if($za!="text"){header("Content-Disposition: attachment; filename=".($yb!=""?friendly_url($yb):"dump").".$b".($za!="file"&&!ereg('[^0-9a-z]',$za)?".$za":""));}session_write_close();return$b;}function
dump_csv($d){foreach($d
as$c=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$d[$c]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$d)."\r\n";}function
apply_sql_function($y,$I){return($y?($y=="unixepoch"?"DATETIME($I, '$y')":($y=="count distinct"?"COUNT(DISTINCT ":strtoupper("$y("))."$I)"):$I);}function
password_file(){$zb=ini_get("upload_tmp_dir");if(!$zb){if(function_exists('sys_get_temp_dir')){$zb=sys_get_temp_dir();}else{$Ia=@tempnam("","");if(!$Ia){return
false;}$zb=dirname($Ia);unlink($Ia);}}$Ia="$zb/adminer.key";$b=@file_get_contents($Ia);if($b){return$b;}$Rb=@fopen($Ia,"w");if($Rb){$b=md5(uniqid(mt_rand(),true));fwrite($Rb,$b);fclose($Rb);}return$b;}function
is_mail($Fa){$fc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Za='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$J="$fc+(\\.$fc+)*@($Za?\\.)+$Za";return
preg_match("(^$J(,\\s*$J)*\$)i",$Fa);}function
is_url($B){$Za='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Za?\\.)+$Za(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$B,$m)?strtolower($m[1]):"");}function
print_fieldset($K,$ud,$vd=false){echo"<fieldset><legend><a href='#fieldset-$K' onclick=\"return !toggle('fieldset-$K');\">$ud</a></legend><div id='fieldset-$K'".($vd?"":" class='hidden'").">\n";}function
bold($yd){return($yd?" class='active'":"");}global$j,$g,$ta,$xd,$Tb,$u,$Y,$zd,$Ya,$ic,$qa,$Dd,$Nd,$wb,$Qc,$Z,$Ld,$Da,$rd,$_b;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Ya=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Ta=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ya);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ta[]=true;}call_user_func_array('session_set_cookie_params',$Ta);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'sk';}function
lang($_d,$Ca){$wd=($Ca==1||(!$Ca&&'sk'=='fr')?0:('sk'=='sl'&&(!$Ca||$Ca>2)?1:0)+((!$Ca||$Ca>=5)&&ereg('cs|sk|ru|sl|pl','sk')?2:1));return
sprintf($_d[$wd],$Ca);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($td,$C,$M,$Ad='auth_error'){set_exception_handler($Ad);parent::__construct($td,$C,$M);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($k,$Pa=false){$l=parent::query($k);if(!$l){$Id=$this->errorInfo();$this->error=$Id[2];return
false;}$this->store_result($l);return$l;}function
multi_query($k){return$this->_result=$this->query($k);}function
store_result($l=null){if(!$l){$l=$this->_result;}if($l->columnCount()){$l->num_rows=$l->rowCount();return$l;}$this->affected_rows=$l->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($k,$e=0){$l=$this->query($k);if(!$l){return
false;}$d=$l->fetch();return$d[$e];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$ta=array();$ta=array("server"=>"MySQL")+$ta;if(!defined("DRIVER")){$Gd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($E,$C,$M){mysqli_report(MYSQLI_REPORT_OFF);list($pd,$eb)=explode(":",$E,2);$b=@$this->real_connect(($E!=""?$pd:ini_get("mysqli.default_host")),("$E$C"!=""?$C:ini_get("mysqli.default_user")),("$E$C$M"!=""?$M:ini_get("mysqli.default_pw")),null,(is_numeric($eb)?$eb:ini_get("mysqli.default_port")),(!is_numeric($eb)?$eb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($k,$e=0){$l=$this->query($k);if(!$l){return
false;}$d=$l->fetch_array();return$d[$e];}function
quote($B){return"'".$this->escape_string($B)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($E,$C,$M){$this->_link=@mysql_connect(($E!=""?$E:ini_get("mysql.default_host")),("$E$C"!=""?$C:ini_get("mysql.default_user")),("$E$C$M"!=""?$M:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($B){return"'".mysql_real_escape_string($B,$this->_link)."'";}function
select_db($ab){return
mysql_select_db($ab,$this->_link);}function
query($k,$Pa=false){$l=@($Pa?mysql_unbuffered_query($k,$this->_link):mysql_query($k,$this->_link));if(!$l){$this->error=mysql_error($this->_link);return
false;}if($l===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($l);}function
multi_query($k){return$this->_result=$this->query($k);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($k,$e=0){$l=$this->query($k);if(!$l||!$l->num_rows){return
false;}return
mysql_result($l->_result,0,$e);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($l){$this->_result=$l;$this->num_rows=mysql_num_rows($l);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$b=mysql_fetch_field($this->_result,$this->_offset++);$b->orgtable=$b->table;$b->orgname=$b->name;$b->charsetnr=($b->blob?63:0);return$b;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($E,$C,$M){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$E)),$C,$M);$this->query("SET NAMES utf8");return
true;}function
select_db($ab){return$this->query("USE ".idf_escape($ab));}function
query($k,$Pa=false){$this->setAttribute(1000,!$Pa);return
parent::query($k,$Pa);}}}function
idf_escape($ca){return"`".str_replace("`","``",$ca)."`";}function
table($ca){return
idf_escape($ca);}function
connect(){global$j;$g=new
Min_DB;$Qb=$j->credentials();if($g->connect($Qb[0],$Qb[1],$Qb[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($Yc=true){global$g;$b=&get_session("dbs");if(!isset($b)){if($Yc){restart_session();ob_flush();flush();}$b=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$b;}function
limit($k,$p,$D,$Nc=0,$sa=" "){return" $k$p".(isset($D)?$sa."LIMIT $D".($Nc?" OFFSET $Nc":""):"");}function
limit1($k,$p){return
limit($k,$p,1);}function
db_collation($xa,$Zc){global$g;$b=null;$hb=$g->result("SHOW CREATE DATABASE ".idf_escape($xa),1);if(preg_match('~ COLLATE ([^ ]+)~',$hb,$m)){$b=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$hb,$m)){$b=$Zc[$m[1]][-1];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$b[]=$d["Engine"];}}return$b;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($ha){$b=array();foreach($ha
as$xa){$b[$xa]=count(get_vals("SHOW TABLES IN ".idf_escape($xa)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$b[$d["Name"]]=$d;}return$b;}function
is_view($A){return!isset($A["Rows"]);}function
fk_support($A){return($A["Engine"]=="InnoDB");}function
fields($i){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($i))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$m);$b[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($d["Default"]!=""||ereg("char",$m[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$m)?$m[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$b;}function
indexes($i,$fa=null){global$g;if(!is_object($fa)){$fa=$g;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($i),$fa)as$d){$b[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$b[$d["Key_name"]]["columns"][]=$d["Column_name"];$b[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$b;}function
foreign_keys($i){global$g,$wb;static$J='`(?:[^`]|``)+`';$b=array();$Mc=$g->result("SHOW CREATE TABLE ".table($i),1);if($Mc){preg_match_all("~CONSTRAINT ($J) FOREIGN KEY \\(((?:$J,? ?)+)\\) REFERENCES ($J)(?:\\.($J))? \\(((?:$J,? ?)+)\\)(?: ON DELETE (".implode("|",$wb)."))?(?: ON UPDATE (".implode("|",$wb)."))?~",$Mc,$U,PREG_SET_ORDER);foreach($U
as$m){preg_match_all("~$J~",$m[2],$Ub);preg_match_all("~$J~",$m[5],$va);$b[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$Ub[0]),"target"=>array_map('idf_unescape',$va[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$b;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$d){if($d["Default"]){$b[$d["Charset"]][-1]=$d["Collation"];}else{$b[$d["Charset"]][]=$d["Collation"];}}ksort($b);foreach($b
as$c=>$a){asort($b[$c]);}return$b;}function
information_schema($xa){global$g;return($g->server_info>=5&&$xa=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($xa,$Ba){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($xa).($Ba?" COLLATE ".q($Ba):""));}function
drop_databases($ha){set_session("dbs",null);return
apply_queries("DROP DATABASE",$ha,'idf_escape');}function
rename_database($f,$Ba){if(create_database($f,$Ba)){$Ja=array();foreach(tables_list()as$i=>$wa){$Ja[]=table($i)." TO ".idf_escape($f).".".table($i);}if(!$Ja||queries("RENAME TABLE ".implode(", ",$Ja))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Sb=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$V){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$V["columns"],true)){$Sb="";break;}if($V["type"]=="PRIMARY"){$Sb=" UNIQUE";}}}return" AUTO_INCREMENT$Sb";}function
alter_table($i,$f,$q,$jd,$id,$Uc,$Ba,$lb,$hd){$ga=array();foreach($q
as$e){$ga[]=($e[1]?($i!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($i!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$ga=array_merge($ga,$jd);$kc="COMMENT=".q($id).($Uc?" ENGINE=".q($Uc):"").($Ba?" COLLATE ".q($Ba):"").($lb!=""?" AUTO_INCREMENT=$lb":"").$hd;if($i==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ga)."\n) $kc");}if($i!=$f){$ga[]="RENAME TO ".table($f);}$ga[]=$kc;return
queries("ALTER TABLE ".table($i)."\n".implode(",\n",$ga));}function
alter_indexes($i,$ga){foreach($ga
as$c=>$a){$ga[$c]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($i).implode(",",$ga));}function
truncate_tables($da){return
apply_queries("TRUNCATE TABLE",$da);}function
drop_views($Na){return
queries("DROP VIEW ".implode(", ",array_map('table',$Na)));}function
drop_tables($da){return
queries("DROP TABLE ".implode(", ",array_map('table',$da)));}function
move_tables($da,$Na,$va){$Ja=array();foreach(array_merge($da,$Na)as$i){$Ja[]=table($i)." TO ".idf_escape($va).".".table($i);}return
queries("RENAME TABLE ".implode(", ",$Ja));}function
copy_tables($da,$Na,$va){foreach($da
as$i){$f=($va==DB?table("copy_$i"):idf_escape($va).".".table($i));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($i))||!queries("INSERT INTO $f SELECT * FROM ".table($i))){return
false;}}foreach($Na
as$i){$f=($va==DB?table("copy_$i"):idf_escape($va).".".table($i));$gd=view($i);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $gd[select]")){return
false;}}return
true;}function
trigger($f){$v=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($v);}function
triggers($i){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($i,"%_")))as$d){$b[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$wa){global$g,$Tb,$ic,$Da;$dd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Jc="((".implode("|",array_merge(array_keys($Da),$dd)).")(?:\\s*\\(((?:[^'\")]*|$Tb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$J="\\s*(".($wa=="FUNCTION"?"":implode("|",$ic)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Jc";$hb=$g->result("SHOW CREATE $wa ".idf_escape($f),2);preg_match("~\\(((?:$J\\s*,?)*)\\)".($wa=="FUNCTION"?"\\s*RETURNS\\s+$Jc":"")."\\s*(.*)~is",$hb,$m);$q=array();preg_match_all("~$J\\s*,?~is",$m[1],$U,PREG_SET_ORDER);foreach($U
as$ka){$f=str_replace("``","`",$ka[2]).$ka[3];$q[]=array("field"=>$f,"type"=>strtolower($ka[5]),"length"=>preg_replace_callback("~$Tb~s",'normalize_enum',$ka[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ka[8] $ka[7]"))),"full_type"=>$ka[4],"inout"=>strtoupper($ka[1]),"collation"=>strtolower($ka[9]),);}if($wa!="FUNCTION"){return
array("fields"=>$q,"definition"=>$m[11]);}return
array("fields"=>$q,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($i,$s){return
queries("INSERT INTO ".table($i)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
insert_update($i,$s,$jb){foreach($s
as$c=>$a){$s[$c]="$c = $a";}$la=implode(", ",$s);return
queries("INSERT INTO ".table($i)." SET $la ON DUPLICATE KEY UPDATE $la");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$k){return$g->query("EXPLAIN $k");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Rd){return
true;}function
create_sql($i,$lb){global$g;$b=$g->result("SHOW CREATE TABLE ".table($i),1);if(!$lb){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($i){return"TRUNCATE ".table($i);}function
use_sql($ab){return"USE ".idf_escape($ab);}function
trigger_sql($i,$gb){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($i,"%_")),null,"-- ")as$d){$b.="\n".($gb=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($nd){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$nd);}$qa="sql";$Da=array();$Qc=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Dátum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Reťazce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binárne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Zoznamy'=>array("enum"=>65535,"set"=>64),)as$c=>$a){$Da+=$a;$Qc[$c]=array_keys($a);}$rd=array("unsigned","zerofill","unsigned zerofill");$cd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Y=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$zd=array("avg","count","count distinct","group_concat","max","min","sum");$xd=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$_b="3.2.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return'Editor';}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$ha=get_databases(false);return(!$ha?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ha[(information_schema($ha[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Používateľ<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Prihlásiť sa'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé prihlásenie')."\n";}function
login($Md,$M){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Sa){return
h($Sa["Comment"]!=""?$Sa["Comment"]:$Sa["Name"]);}function
fieldName($e,$R=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Sa,$s=""){$r=$Sa["Name"];if(isset($s)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($r).$s).'">'.'Nová položka'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Posledná stránka'."'>&gt;&gt;</a>\n";}function
foreignKeys($i){return
foreign_keys($i);}function
backwardKeys($i,$bd){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($i)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$b[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($b
as$c=>$a){$f=$this->tableName(table_status($c));if($f!=""){$Kc=preg_quote($bd);$sa="(:|\\s*-)?\\s+";$b[$c]["name"]=(preg_match("(^$Kc$sa(.+)|^(.+?)$sa$Kc\$)iu",$f,$m)?$m[2].$m[3]:$f);}else{unset($b[$c]);}}return$b;}function
backwardKeysPrint($ad,$d){foreach($ad
as$i=>$Pc){foreach($Pc["keys"]as$Ea){$t=ME.'select='.urlencode($i);$o=0;foreach($Ea
as$I=>$a){$t.=where_link($o++,$I,$d[$a]);}echo"<a href='".h($t)."'>".h($Pc["name"])."</a>";$t=ME.'edit='.urlencode($i);foreach($Ea
as$I=>$a){$t.="&set".urlencode("[".bracket_escape($I)."]")."=".urlencode($d[$a]);}echo"<a href='".h($t)."' title='".'Nová položka'."'>+</a> ";}}}function
selectQuery($k){return"<!--\n".str_replace("--","--><!-- ",$k)."\n-->\n";}function
rowDescription($i){foreach(fields($i)as$e){if($e["type"]=="varchar"){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($v,$cb){$b=$v;foreach($v[0]as$c=>$a){foreach((array)$cb[$c]as$aa){if(count($aa["source"])==1){$K=idf_escape($aa["target"][0]);$f=$this->rowDescription($aa["table"]);if($f!=""){$Oc=array();foreach($v
as$d){$Oc[$d[$c]]=exact_value($d[$c]);}$Kb=$this->_values[$aa["table"]];if(!$Kb){$Kb=get_key_vals("SELECT $K, $f FROM ".table($aa["table"])." WHERE $K IN (".implode(", ",$Oc).")");}foreach($v
as$x=>$d){if(isset($d[$c])){$b[$x][$c]=(string)$Kb[$d[$c]];}}break;}}}}return$b;}function
selectVal($a,$t,$e){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$b=lang(array('%d bajt','%d bajty','%d bajtov'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$t' alt='$b'>";}}if(ereg("(tinyint|bit)\\(1\\)",$e["full_type"])&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.1":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.2.1").'" alt="'.h($a).'">';}if($t){$b="<a href='$t'>$b</a>";}if(!$t&&!ereg("(tinyint|bit)\\(1\\)",$e["full_type"])&&ereg('int|float|double|decimal',$e["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$e["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($w,$_){}function
selectSearchPrint($p,$_,$G){$p=(array)$_GET["where"];echo'<fieldset><legend>'.'Vyhľadať'."</legend><div>\n";$Ob=array();foreach($p
as$c=>$a){$Ob[$a["col"]]=$c;}$o=0;$q=fields($_GET["select"]);foreach($q
as$f=>$e){if(ereg("enum",$e["type"])){$ra=$_[$f];$c=$Ob[$f];$o--;echo"<div>".h($ra)."<input type='hidden' name='where[$o][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$o][val][]'",$e,(array)$p[$c]["val"],($e["null"]?0:null)),"</div>\n";unset($_[$f]);}}foreach($_
as$f=>$ra){$ja=$this->_foreignKeyOptions($_GET["select"],$f);if($ja){if($q[$f]["null"]){$ja[0]='('.'prázdne'.')';}$c=$Ob[$f];$o--;echo"<div>".h($ra)."<input type='hidden' name='where[$o][col]' value='".h($f)."'><input type='hidden' name='where[$o][op]' value='='>: <select name='where[$o][val]'>".optionlist($ja,$p[$c]["val"],true)."</select></div>\n";unset($_[$f]);}}$o=0;foreach($p
as$a){if(($a["col"]==""||$_[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$o][col]'><option value=''>(".'kdekoľvek'.")".optionlist($_,$a["col"],true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$o][val]' value='".h($a["val"])."'></div>\n";$o++;}}echo"<div><select name='where[$o][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoľvek'.")".optionlist($_,null,true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators),"<input name='where[$o][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($R,$_,$G){$Jb=array();foreach($G
as$c=>$V){$R=array();foreach($V["columns"]as$a){$R[]=$_[$a];}if(count(array_filter($R,'strlen'))>1&&$c!="PRIMARY"){$Jb[$c]=implode(", ",$R);}}if($Jb){echo'<fieldset><legend>'.'Zotriediť'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Jb,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($D){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$D),"</div></fieldset>\n";}function
selectLengthPrint($Ga){}function
selectActionPrint(){echo"<fieldset><legend>".'Akcia'."</legend><div>","<input type='submit' value='".'Vypísať'."'>","</div></fieldset>\n";}function
selectEmailPrint($xb,$_){if($xb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<p>".'Odosielateľ'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Predmet'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n";echo
html_select("email_addition",$_,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Vložiť'."'>\n";echo"<p>".'Prílohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($xb)==1?'<input type="hidden" name="email_field" value="'.h(key($xb)).'">':html_select("email_field",$xb)),"<input type='submit' name='email' value='".'Odoslať'."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($_,$G){return
array(array(),array());}function
selectSearchProcess($q,$G){$b=array();foreach((array)$_GET["where"]as$c=>$p){$oa=$p["col"];$Ma=$p["op"];$a=$p["val"];if(($c<0?"":$oa).$a!=""){$Oa=array();foreach(($oa!=""?array($oa=>$q[$oa]):$q)as$f=>$e){if($oa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){$f=idf_escape($f);if($oa!=""&&$e["type"]=="enum"){$Oa[]=(in_array(0,$a)?"$f IS NULL OR ":"")."$f IN (".implode(", ",array_map('intval',$a)).")";}else{$Rc=ereg('char|text|enum|set',$e["type"]);$h=$this->processInput($e,(!$Ma&&$Rc&&ereg('^[^%]+$',$a)?"%$a%":$a));$Oa[]=$f.($h=="NULL"?" IS".($Ma==">="?" NOT":"")." $h":(in_array($Ma,$this->operators)||$Ma=="="?" $Ma $h":($Rc?" LIKE $h":" IN (".str_replace(",","', '",$h).")")));if($c<0&&$a=="0"){$Oa[]="$f IS NULL";}}}}$b[]=($Oa?"(".implode(" OR ",$Oa).")":"0");}}return$b;}function
selectOrderProcess($q,$G){$vb=$_GET["index_order"];if($vb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($vb!=""?array($G[$vb]):$G)as$V){if($vb!=""||$V["type"]=="INDEX"){$ra=false;foreach($V["columns"]as$a){if(ereg('date|timestamp',$q[$a]["type"])){$ra=true;break;}}$b=array();foreach($V["columns"]as$a){$b[]=idf_escape($a).($ra?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($p,$cb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$Sc=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$ub=$_POST["email_subject"];$W=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$ub.$W",$U);$v=get_rows("SELECT DISTINCT $e".($U[1]?", ".implode(", ",array_map('idf_escape',array_unique($U[1]))):"")." FROM ".table($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($p?" AND ".implode(" AND ",$p):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($v,$cb)as$d){$Ib=array('{\\'=>'{');foreach($U[1]as$a){$Ib['{$'."$a}"]=$this->editVal($d[$a],$q[$a]);}$Fa=$d[$_POST["email_field"]];if(is_mail($Fa)&&send_mail($Fa,strtr($ub,$Ib),strtr($W,$Ib),$_POST["email_from"],$_FILES["email_files"])){$Sc++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),$Sc));}return
false;}function
messageQuery($k){return"<!--\n".str_replace("--","--><!-- ",$k)."\n-->";}function
editFunctions($e){$b=array();if($e["null"]&&ereg('blob',$e["type"])){$b["NULL"]='prázdne';}$b[""]=($e["null"]||$e["auto_increment"]||ereg("(tinyint|bit)\\(1\\)",$e["full_type"])?"":"*");if(ereg('date|time',$e["type"])){$b["now"]='teraz';}if(eregi('_(md5|sha1)$',$e["field"],$m)){$b[]=strtolower($m[1]);}return$b;}function
editInput($i,$e,$P,$h){if($e["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$P value='-1' checked><i>".'originál'."</i></label> ":"").enum_input("radio",$P,$e,($h||isset($_GET["select"])?$h:0),($e["null"]?"":null));}$ja=$this->_foreignKeyOptions($i,$e["field"]);if($ja){return"<select$P>".optionlist($ja,$h,true)."</select>";}if(ereg("(tinyint|bit)\\(1\\)",$e["full_type"])){return'<input type="checkbox" value="'.h($h?$h:1).'"'.($h?' checked':'')."$P>";}$La="";if(ereg('time',$e["type"])){$La='HH:MM:SS';}if(ereg('date|timestamp',$e["type"])){$La='d.m.[rrrr]'.($La?" [$La]":"");}if($La){return"<input value='".h($h)."'$P> ($La)";}if(eregi('_(md5|sha1)$',$e["field"])){return"<input type='password' value='".h($h)."'$P>";}return'';}function
processInput($e,$h,$y=""){if($y=="now"){return"$y()";}$b=$h;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$h,$m)){$b=($m["p1"]!=""?$m["p1"]:($m["p2"]!=""?($m["p2"]<70?20:19).$m["p2"]:gmdate("Y")))."-$m[p3]$m[p4]-$m[p5]$m[p6]".end($m);}$b=($e["type"]=="bit"&&ereg('^[0-9]+$',$h)?$b:q($b));if(!ereg('char|text',$e["type"])&&!ereg("(tinyint|bit)\\(1\\)",$e["full_type"])&&$h==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$y)){$b="$y($b)";}if(ereg("binary",$e["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($i,$gb,$k){global$g;$l=$g->query($k,1);if($l){while($d=$l->fetch_assoc()){if($gb=="table"){dump_csv(array_keys($d));$gb="INSERT";}dump_csv($d);}}}function
dumpHeaders($yb,$nc=false){$Ed="csv";header("Content-Type: text/csv; charset=utf-8");return$Ed;}function
homepage(){return
true;}function
navigation($Ra){global$_b,$Z;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$_b,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($_b,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ra=="auth"){$ba=true;foreach((array)$_SESSION["pwds"]["server"][""]as$C=>$M){if(isset($M)){if($ba){echo"<p onclick='eventStop(event);'>\n";$ba=false;}echo"<a href='".h(auth_url("server","",$C))."'>".($C!=""?h($C):"<i>".'prázdne'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Odhlásiť" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$Z,'">
</p>
</form>
';if($Ra!="db"&&$Ra!="ns"){$A=table_status();if(!$A){echo"<p class='message'>".'Žiadne tabuľky.'."\n";}else{$this->tablesPrint($A);}}}}function
tablesPrint($da){echo"<p id='tables'>\n";foreach($da
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'".bold($_GET["select"]==$d["Name"]).">$f</a><br>\n";}}}function
_foreignKeyOptions($i,$I){$cb=column_foreign_keys($i);foreach((array)$cb[$I]as$aa){if(count($aa["source"])==1){$K=idf_escape($aa["target"][0]);$f=$this->rowDescription($aa["table"]);if($f!=""){$b=&$this->_values[$aa["table"]];if(!isset($b)){$A=table_status($aa["table"]);$b=($A["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $K, $f FROM ".table($aa["table"])." ORDER BY 2"));}return$b;}}}}}$j=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($_c,$u="",$Qa=array(),$hc=""){global$Dd,$j,$g,$ta;header("Content-Type: text/html; charset=utf-8");$j->headers();$gc=$_c.($hc!=""?": ".h($hc):"");$jc=$gc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$j->name();if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($jc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="sk" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$jc,'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.2.1",'" id="favicon">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.2.1",'">
';if($j->head()&&file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr nojs" onclick="return bodyClick(event, \'',js_escape(DB),'\', \'',js_escape($_GET["ns"]),'\');" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Db');"),'">
<script type="text/javascript">
var areYouSure = \'Resend POST data?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.2.1",'"></script>

<div id="content">
';}if(isset($Qa)){$t=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($t?h($t):".").'">'.$ta[DRIVER].'</a> &raquo; ';$t=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$E=(SERVER!=""?h(SERVER):'Server');if($Qa===false){echo"$E\n";}else{echo"<a href='".($t?h($t):".")."'>$E</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Qa))){echo'<a href="'.h($t."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Qa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Qa
as$c=>$a){$ra=(is_array($a)?$a[1]:$a);if($ra!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($a)?$a[0]:$a).'">'.h($ra).'</a> &raquo; ';}}}echo"$_c\n";}}echo"<span id='loader'></span>\n","<h2>$gc</h2>\n";restart_session();$Hc=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$mc=$_SESSION["messages"][$Hc];if($mc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$mc)."</div>\n";unset($_SESSION["messages"][$Hc]);}$ha=&get_session("dbs");if(DB!=""&&$ha&&!in_array(DB,$ha,true)){$ha=null;}if($u){echo"<div class='error'>$u</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Ra=""){global$j;if(!is_ajax()){echo'</div>

<div id="menu">
';$j->navigation($Ra);echo'</div>
';}}function
int32($x){while($x>=2147483648){$x-=4294967296;}while($x<=-2147483649){$x+=4294967296;}return(int)$x;}function
long2str($n,$Bb){$_a='';foreach($n
as$a){$_a.=pack('V',$a);}if($Bb){return
substr($_a,0,end($n));}return$_a;}function
str2long($_a,$Bb){$n=array_values(unpack('V*',str_pad($_a,4*ceil(strlen($_a)/4),"\0")));if($Bb){$n[]=strlen($_a);}return$n;}function
xxtea_mx($L,$N,$Q,$X){return
int32((($L>>5&0x7FFFFFF)^$N<<2)+(($N>>3&0x1FFFFFFF)^$L<<4))^int32(($Q^$N)+($X^$L));}function
encrypt_string($bb,$c){if($bb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($bb,true);$x=count($n)-1;$L=$n[$x];$N=$n[0];$Eb=floor(6+52/($x+1));$Q=0;while($Eb-->0){$Q=int32($Q+0x9E3779B9);$db=$Q>>2&3;for($O=0;$O<$x;$O++){$N=$n[$O+1];$ya=xxtea_mx($L,$N,$Q,$c[$O&3^$db]);$L=int32($n[$O]+$ya);$n[$O]=$L;}$N=$n[0];$ya=xxtea_mx($L,$N,$Q,$c[$O&3^$db]);$L=int32($n[$x]+$ya);$n[$x]=$L;}return
long2str($n,false);}function
decrypt_string($bb,$c){if($bb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($bb,false);$x=count($n)-1;$L=$n[$x];$N=$n[0];$Eb=floor(6+52/($x+1));$Q=int32($Eb*0x9E3779B9);while($Q){$db=$Q>>2&3;for($O=$x;$O>0;$O--){$L=$n[$O-1];$ya=xxtea_mx($L,$N,$Q,$c[$O&3^$db]);$N=int32($n[$O]-$ya);$n[$O]=$N;}$L=$n[$x];$ya=xxtea_mx($L,$N,$Q,$c[$O&3^$db]);$N=int32($n[0]-$ya);$n[0]=$N;$Q=int32($Q-0x9E3779B9);}return
long2str($n,true);}$g='';$Z=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ua=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($c)=explode(":",$a);$ua[$c]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$mb=$j->permanentLogin();$ua[$c]="$c:".base64_encode($mb?encrypt_string($_POST["password"],$mb):"");cookie("adminer_permanent",implode(" ",$ua));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($Z&&$_POST["token"]!=$Z){page_header('Odhlásiť','Neplatný token CSRF. Odošlite formulár znova.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ua[$c]){unset($ua[$c]);cookie("adminer_permanent",implode(" ",$ua));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlásenie prebehlo v poriadku.');}}elseif($ua&&!$_SESSION["pwds"]){session_regenerate_id();$mb=$j->permanentLogin();foreach($ua
as$c=>$a){list(,$Kd)=explode(":",$a);list($sb,$E,$C)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$sb][$E][$C]=decrypt_string(base64_decode($Kd),$mb);}}function
auth_error($cc=null){global$g,$j,$Z;$kb=session_name();$u="";if(!$_COOKIE[$kb]&&$_GET[$kb]&&ini_bool("session.use_only_cookies")){$u='Session premenné musia byť povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$kb]||$_GET[$kb])&&!$Z){$u='Session vypršala, prihláste sa prosím znova.';}else{$M=&get_session("pwds");if(isset($M)){$u=h($cc?$cc->getMessage():(is_string($g)?$g:'Neplatné prihlasovacie údaje.'));$M=null;}}}page_header('Prihlásiť sa',$u,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$j->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žiadne rozšírenie',sprintf('Nie je dostupné žiadne z podporovaných rozšírení (%s).',implode(", ",$Gd)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$j->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Z=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$Z;}$u=($_POST?($_POST["token"]==$Z?"":'Neplatný token CSRF. Odošlite formulár znova.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','"post_max_size"')));$g->select_db($j->database());function
email_header($Fd){return"=?UTF-8?B?".base64_encode($Fd)."?=";}function
send_mail($Fa,$ub,$W,$Ka="",$nb=array("error"=>array())){$H=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$W=str_replace("\n",$H,wordwrap(str_replace("\r","","$W\n")));$ob=uniqid("boundary");$rb="";foreach($nb["error"]as$c=>$a){if(!$a){$rb.="--$ob$H"."Content-Type: ".str_replace("\n","",$nb["type"][$c]).$H."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$nb["name"][$c])."\"$H"."Content-Transfer-Encoding: base64$H$H".chunk_split(base64_encode(file_get_contents($nb["tmp_name"][$c])),76,$H).$H;}}$lc="";$qb="Content-Type: text/plain; charset=utf-8$H"."Content-Transfer-Encoding: 8bit";if($rb){$rb.="--$ob--$H";$lc="--$ob$H$qb$H$H";$qb="Content-Type: multipart/mixed; boundary=\"$ob\"";}$qb.=$H."MIME-Version: 1.0$H"."X-Mailer: Adminer Editor".($Ka?$H."From: ".str_replace("\n","",$Ka):"");return
mail($Fa,email_header($ub),$lc.$W.$rb,$qb);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$wb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$ta[DRIVER]='Prihlásiť sa';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$r=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$r-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($r)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$r=$_GET["edit"];$p=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$la=(isset($_GET["select"])?$_POST["edit"]:$p);$q=fields($r);foreach($q
as$f=>$e){if(!isset($e["privileges"][$la?"update":"insert"])||$j->fieldName($e)==""){unset($q[$f]);}}if($_POST&&!$u&&!isset($_GET["select"])){$F=$_POST["referer"];if($_POST["insert"]){$F=($la?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$F)){$F=ME."select=".urlencode($r);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($r)," WHERE $p"),$F,'Položka bola vymazaná.');}else{$s=array();foreach($q
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$s[idf_escape($f)]=($la?"\n".idf_escape($f)." = $a":$a);}}if($la){if(!$s){redirect($F);}query_redirect("UPDATE".limit1(table($r)." SET".implode(",",$s),"\nWHERE $p"),$F,'Položka bola aktualizovaná.');}else{$l=insert_into($r,$s);$Gc=($l?last_id():0);queries_redirect($F,sprintf('Položka%s bola vložená.',($Gc?" $Gc":"")),$l);}}}$Xa=$j->tableName(table_status($r));page_header(($la?'Upraviť':'Vložiť'),$u,array("select"=>array($r,$Xa)),$Xa);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($p){$w=array();foreach($q
as$f=>$e){if(isset($e["privileges"]["select"])){$w[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($w){$v=get_rows("SELECT".limit(implode(", ",$w)." FROM ".table($r)," WHERE $p",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($v)!=1?null:reset($v));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($q){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$f=>$e){echo"<tr><th>".$j->fieldName($e);$Ac=$_GET["set"][bracket_escape($f)];$h=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?+$d[$f]:$d[$f]):(!$la&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Ac)?$Ac:$e["default"]))));if(!$_POST["save"]&&is_string($h)){$h=$j->editVal($h,$e);}$y=($_POST["save"]?(string)$_POST["function"][$f]:($p&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($h===false?null:(isset($h)?'':'NULL'))));if($e["type"]=="timestamp"&&$h=="CURRENT_TIMESTAMP"){$h="";$y="now";}input($e,$h,$y);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".'Uložiť'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($la?'Uložiť a pokračovať v úpravách':'Uložiť a vložiť ďalší')."\">\n";}}echo($la?"<input type='submit' name='delete' value='".'Zmazať'."' onclick=\"return confirm('".'Naozaj?'."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Z,'">
</form>
';}elseif(isset($_GET["select"])){$r=$_GET["select"];$A=table_status($r);$G=indexes($r);$q=fields($r);$Va=column_foreign_keys($r);if($A["Oid"]=="t"){$G[]=array("type"=>"PRIMARY","columns"=>array("oid"));}$zc=array();$_=array();$Ga=null;foreach($q
as$c=>$e){$f=$j->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$_[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Ga=$j->selectLengthProcess();}}$zc+=$e["privileges"];}list($w,$T)=$j->selectColumnsProcess($_,$G);$p=$j->selectSearchProcess($q,$G);$R=$j->selectOrderProcess($q,$G);$D=$j->selectLimitProcess();$Ka=($w?implode(", ",$w):($A["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($r);$Gb=($T&&count($T)<count($w)?"\nGROUP BY ".implode(", ",$T):"").($R?"\nORDER BY ".implode(", ",$R):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ea=>$d){echo$g->result("SELECT".limit(idf_escape(key($d))." FROM ".table($r)," WHERE ".where_check($ea).($p?" AND ".implode(" AND ",$p):"").($R?" ORDER BY ".implode(", ",$R):""),1));}exit;}if($_POST&&!$u){$Cc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$jb=$pb=null;foreach($G
as$V){if($V["type"]=="PRIMARY"){$jb=array_flip($V["columns"]);$pb=($w?$jb:array());break;}}foreach($w
as$c=>$a){$a=$_GET["columns"][$c];if(!$a["fun"]){unset($pb[$a["col"]]);}}if($_POST["export"]){dump_headers($r);$j->dumpTable($r,"");if(!is_array($_POST["check"])||$pb===array()){$Ha=$p;if(is_array($_POST["check"])){$Ha[]="($Cc)";}$k="SELECT $Ka".($Ha?"\nWHERE ".implode(" AND ",$Ha):"").$Gb;}else{$Ec=array();foreach($_POST["check"]as$a){$Ec[]="(SELECT".limit($Ka,"\nWHERE ".($p?implode(" AND ",$p)." AND ":"").where_check($a).$Gb,1).")";}$k=implode(" UNION ALL ",$Ec);}$j->dumpData($r,"table",$k);exit;}if(!$j->selectEmailProcess($p,$Va)){if($_POST["save"]||$_POST["delete"]){$l=true;$pa=0;$k=table($r);$s=array();if(!$_POST["delete"]){foreach($_
as$f=>$a){$a=process_input($q[$f]);if($a!==null){if($_POST["clone"]){$s[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$s[]=idf_escape($f)." = $a";}}}$k.=($_POST["clone"]?" (".implode(", ",array_keys($s)).")\nSELECT ".implode(", ",$s)."\nFROM ".table($r):" SET\n".implode(",\n",$s));}if($_POST["delete"]||$s){$tb="UPDATE";if($_POST["delete"]){$tb="DELETE";$k="FROM $k";}if($_POST["clone"]){$tb="INSERT";$k="INTO $k";}if($_POST["all"]||($pb===array()&&$_POST["check"])||count($T)<count($w)){$l=queries($tb." $k".($_POST["all"]?($p?"\nWHERE ".implode(" AND ",$p):""):"\nWHERE $Cc"));$pa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$l=queries($tb.limit1($k,"\nWHERE ".where_check($a)));if(!$l){break;}$pa+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),sprintf('%d položiek bolo ovplyvnených.',$pa),$l);}elseif(!$_POST["import"]){if(!$_POST["val"]){$u='Dvojkliknite na políčko, ktoré chcete zmeniť.';}else{$l=true;$pa=0;foreach($_POST["val"]as$ea=>$d){$s=array();foreach($d
as$c=>$a){$c=bracket_escape($c,1);$s[]=idf_escape($c)." = ".(ereg('char|text',$q[$c]["type"])||$a!=""?$j->processInput($q[$c],$a):"NULL");}$k=table($r)." SET ".implode(", ",$s);$Ha=" WHERE ".where_check($ea).($p?" AND ".implode(" AND ",$p):"");$l=queries("UPDATE".(count($T)<count($w)?" $k$Ha":limit1($k,$Ha)));if(!$l){break;}$pa+=$g->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d položiek bolo ovplyvnených.',$pa),$l);}}elseif(is_string($S=get_file("csv_file",true))){$l=true;$Ea=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$S,$U);$pa=count($U[0]);begin();$sa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($U[0]as$c=>$a){preg_match_all("~((\"[^\"]*\")+|[^$sa]*)$sa~",$a.$sa,$Cb);if(!$c&&!array_diff($Cb[1],$Ea)){$Ea=$Cb[1];$pa--;}else{$s=array();foreach($Cb[1]as$o=>$oa){$s[idf_escape($Ea[$o])]=($oa==""&&$q[$Ea[$o]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$oa))));}$l=insert_update($r,$s,$jb);if(!$l){break;}}}if($l){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),$pa),$l);queries("ROLLBACK");}else{$u=upload_error($S);}}}$Xa=$j->tableName($A);page_header('Vypísať'.": $Xa",$u);session_write_close();$s=null;if(isset($zc["insert"])){$s="";foreach((array)$_GET["where"]as$a){if(count($Va[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$s.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$j->selectLinks($A,$s);if(!$_){echo"<p class='error'>".'Tabuľku sa nepodarilo vypísať'.($q?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($r).'">',"</div>\n";$j->selectColumnsPrint($w,$_);$j->selectSearchPrint($p,$_,$G);$j->selectOrderPrint($R,$_,$G);$j->selectLimitPrint($D);$j->selectLengthPrint($Ga);$j->selectActionPrint($Ga);echo"</form>\n";$z=$_GET["page"];if($z=="last"){$ia=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));$z=floor(max(0,$ia-1)/$D);}$k="SELECT".limit((+$D&&$T&&count($T)<count($w)&&$qa=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Ka,($p?"\nWHERE ".implode(" AND ",$p):"").$Gb,($D!=""?+$D:null),($z?$D*$z:0),"\n");echo$j->selectQuery($k);$l=$g->query($k);if(!$l){echo"<p class='error'>".error()."\n";}else{if($qa=="mssql"){$l->seek($D*$z);}$fb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$v=array();while($d=$l->fetch_assoc()){$v[]=$d;}if($_GET["page"]!="last"){$ia=(+$D&&$T&&count($T)<count($w)?($qa=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($k) x")):count($v));}if(!$v){echo"<p class='message'>".'Žiadne riadky.'."\n";}else{$Nb=$j->backwardKeys($r,$Xa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$T&&$w?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upraviť'."</a>");$Mb=array();$Y=array();reset($w);$qc=1;foreach($v[0]as$c=>$a){if($A["Oid"]!="t"||$c!="oid"){$a=$_GET["columns"][key($w)];$e=$q[$w?$a["col"]:$c];$f=($e?$j->fieldName($e,$qc):"*");if($f!=""){$qc++;$Mb[$c]=$f;$I=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($R[0]==$I||$R[0]==$c||(!$R&&$T[0]==$I)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$f)."</a>";}$Y[$c]=$a["fun"];next($w);}}$Lb=array();if($_GET["modify"]){foreach($v
as$d){foreach($d
as$c=>$a){$Lb[$c]=max($Lb[$c],min(40,strlen(utf8_decode($a))));}}}echo($Nb?"<th>".'Vzťahy':"")."</thead>\n";foreach($j->rowDescriptions($v,$Va)as$x=>$d){$Pb=unique_array($v[$x],$G);$ea="";foreach($Pb
as$c=>$a){$ea.="&".(isset($a)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($a):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$T&&$w?"":"<td>".checkbox("check[]",substr($ea,1),in_array(substr($ea,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($T)<count($w)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($r).$ea)."'>".'upraviť'."</a>"));foreach($d
as$c=>$a){if(isset($Mb[$c])){$e=$q[$c];if($a!=""&&(!isset($fb[$c])||$fb[$c]!="")){$fb[$c]=(is_mail($a)?$Mb[$c]:"");}$t="";$a=$j->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$t=h(ME.'download='.urlencode($r).'&field='.urlencode($c).$ea);}if($a===""){$a="&nbsp;";}elseif($Ga!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$Ga));}else{$a=h($a);}if(!$t){foreach((array)$Va[$c]as$ma){if(count($Va[$c])==1||end($ma["source"])==$c){$t="";foreach($ma["source"]as$o=>$Ub){$t.=where_link($o,$ma["target"][$o],$v[$x][$Ub]);}$t=h(($ma["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($ma["db"]),ME):ME).'select='.urlencode($ma["table"]).$t);if(count($ma["source"])==1){break;}}}}if($c=="COUNT(*)"){$t=h(ME."select=".urlencode($r));$o=0;foreach((array)$_GET["where"]as$n){if(!array_key_exists($n["col"],$Pb)){$t.=h(where_link($o++,$n["col"],$n["val"],$n["op"]));}}foreach($Pb
as$X=>$n){$t.=h(where_link($o++,$X,$n));}}}if(!$t){if(is_mail($a)){$t="mailto:$a";}if($Db=is_url($d[$c])){$t=($Db=="http"&&$Ya?$d[$c]:"$Db://www.adminer.org/redirect/?url=".urlencode($d[$c]));}}$K=h("val[$ea][".bracket_escape($c)."]");$h=$_POST["val"][$ea][bracket_escape($c)];$tc=h(isset($h)?$h:$d[$c]);$ed=strpos($a,"<i>...</i>");$wc=is_utf8($a)&&$v[$x][$c]==$d[$c]&&!$Y[$c];$vc=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$wc)||isset($h)?"<td>".($vc?"<textarea name='$K' cols='30' rows='".(substr_count($d[$c],"\n")+1)."'>$tc</textarea>":"<input name='$K' value='$tc' size='$Lb[$c]'>"):"<td id='$K' ondblclick=\"".($wc?"selectDblClick(this, event".($ed?", 2":($vc?", 1":"")).")":"alert('".h('Pre zmenu tejto hodnoty použite odkaz upraviť.')."')").";\">".$j->selectVal($a,$t,$e));}}if($Nb){echo"<td>";}$j->backwardKeysPrint($Nb,$v[$x]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Ab);if($v||$z){$Hb=true;if($_GET["page"]!="last"&&+$D&&count($T)>=count($w)&&($ia>=$D||$z)){$ia=$A["Rows"];if(!isset($ia)||$p||($A["Engine"]=="InnoDB"&&$ia<max(1e4,2*($z+1)*$D))){ob_flush();flush();$ia=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));}else{$Hb=false;}}echo"<p class='pages'>";if(+$D&&$ia>$D){$Fb=floor(($ia-1)/$D);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($z+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$z).($z>5?" ...":"");for($o=max(1,$z-4);$o<min($Fb,$z+5);$o++){echo
pagination($o,$z);}echo($z+5<$Fb?" ...":"").($Hb?pagination($Fb,$z):' <a href="'.h(remove_from_uri()."&page=last").'">'.'posledný'."</a>");}echo" (".($Hb?"":"~ ").lang(array('%d riadok','%d riadky','%d riadkov'),$ia).") ".checkbox("all",1,0,'celý výsledok')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Upraviť</legend><div>
<input type="submit" value="Uložiť" title="Dvojkliknite na políčko, ktoré chcete zmeniť." class="jsonly">
<input type="submit" name="edit" value="Upraviť">
<input type="submit" name="clone" value="Klonovať">
<input type="submit" name="delete" value="Zmazať" onclick="return confirm('Naozaj? (' + (this.form['all'].checked ? <?php echo$ia,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$za=$j->dumpOutput();echo($za?html_select("output",$za,$Ab["output"])." ":""),html_select("format",$j->dumpFormat(),$Ab["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}print_fieldset("import",'Import',!$v);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Ab["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$Z'>\n","</div></fieldset>\n";$j->selectEmailPrint(array_filter($fb,'strlen'),$_);echo"</form>\n";}}}else{page_header('Server',"",false);if($j->homepage()){echo"<form action='' method='post'>\n","<p>".'Vyhľadať dáta v tabuľkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Vyhľadať'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabuľka'.'<td>'.'Riadky'."</thead>\n";foreach(table_status()as$i=>$d){$f=$j->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$i,in_array($i,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($i).'">'.h($f).'</a>';$a=number_format($d["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($i)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();