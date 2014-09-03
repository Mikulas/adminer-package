<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$Xd=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Xd){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$ye=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($ye){$$b=$ye;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAETMzEREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD///8BwP//AYB//wGAf/8BgH//AYB//wGAf/8BgH//AYAB/wGAAf8BgAH/AcAA/wH+AP8B/wD/Af+B/wH///8B");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className='js';function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days,params){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date+(params||'');}
function verifyVersion(protocol){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=protocol+'://www.adminer.org/version.php';document.body.appendChild(script);}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function formUncheck(id){document.getElementById(id).checked=false;}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}
el=el.parentNode;}
el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function selectAddRow(field){var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[[0-9]+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function textareaKeydown(target,event,tab,button){if(tab&&event.keyCode==9&&!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(target.setSelectionRange){var start=target.selectionStart;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey){if(button){button.click();}else{target.form.submit();}}
return true;}
function selectDblClick(td,event,text){var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;input.onkeydown=function(event){return textareaKeydown(input,event||window.event);};}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.x,event.y);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveStart('character',pos);range.select();}
td.ondblclick=function(){};}
function bodyLoad(version,protocol){var jushRoot=protocol + '://www.adminer.org/static/';var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank"';jush.urls.sql[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';jush.urls.sql_sqlset=jush.urls.sql[0];jush.urls.sqlset[0]=jush.urls.sql[0];jush.urls.sqlstatus[0]=jush.urls.sql[0];jush.urls.pgsql[0]='http://www.postgresql.org/docs/'+version+'/static/$key';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0];jush.urls.pgsqlset[0]='http://www.postgresql.org/docs/'+version+'/static/runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('pre',0);jush.highlight_tag('code');}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}
function selectValue(select){return select.value||select.options[select.selectedIndex].text;}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
var added='.',rowCount;function reEscape(s){return s.replace(/[\[\]\\^$*+?.(){|}]/,'\\$&');}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var table=reEscape(field.value);var column='';var match;if((match=/(.+)_(.+)/.exec(table))||(match=/(.*[a-z])([A-Z].*)/.exec(table))){table=match[1];column=match[2];}
var plural='(?:e?s)?';var tabCol=table+plural+'_?'+column;var re=new RegExp('(^'+idfEscape(table+plural)+'`'+idfEscape(column)+'$'
+'|^'+idfEscape(tabCol)+'`'
+'|^'+idfEscape(column+plural)+'`'+idfEscape(table)+'$'
+')|`'+idfEscape(tabCol)+'$','i');var candidate;for(var i=opts.length;i--;){if(!/`/.test(opts[i].value)){if(i==opts.length-2&&candidate&&!match[1]&&name=='fields[1]'){return false;}
break;}
if(match=re.exec(opts[i].value)){if(candidate){return false;}
candidate=i;}}
if(candidate){type.selectedIndex=candidate;type.onchange();}}
function editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}
var match=/([0-9]+)(\.[0-9]+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var input=tags2[0];for(var i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}
tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}
if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}
tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}
added+='0';rowCount++;return true;}
function editingRemoveRow(button){var field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return true;}
var lastType='';function editingTypeChange(type){var name=type.name.substr(0,type.name.length-6);var text=selectValue(type);for(var i=0;i<type.form.elements.length;i++){var el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}
if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}
if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}
if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}
if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function editingLengthFocus(field){var td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var edit=document.getElementById('enum-edit');var val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function editingLengthBlur(edit){var field=edit.parentNode.firstChild;var val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function columnShow(checked,column){var trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function partitionByChange(el){var partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function partitionNameChange(el){var row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function foreignAddRow(field){var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function indexesAddRow(field){var row=field.parentNode.parentNode.cloneNode(true);var spans=row.getElementsByTagName('span');for(var i=0;i<spans.length-1;i++){row.removeChild(spans[i]);}
var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}
var input=row.getElementsByTagName('input')[0];input.name=input.name.replace(/indexes\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function indexesAddColumn(field){var column=field.parentNode.cloneNode(true);var select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[[0-9]+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange=function(){};}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-[0-9]+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
cookie('adminer_schema='+encodeURIComponent(s.substr(1)),30,'; path="'+location.pathname+location.search+'"');}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$i;return$i;}function
idf_unescape($_a){$Va=substr($_a,-1);return
str_replace($Va.$Va,$Va,substr($_a,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($Wa){if(get_magic_quotes_gpc()){while(list($c,$b)=each($Wa)){foreach($b
as$va=>$r){unset($Wa[$c][$va]);if(is_array($r)){$Wa[$c][stripslashes($va)]=$r;$Wa[]=&$Wa[$c][stripslashes($va)];}else{$Wa[$c][stripslashes($va)]=($Xd?$r:stripslashes($r));}}}}}function
bracket_escape($_a,$if=false){static$ke=array(':'=>':1',']'=>':2','['=>':3');return
strtr($_a,($if?array_flip($ke):$ke));}function
h($P){return
htmlspecialchars($P,ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($f,$n,$sa,$he="",$le=""){static$E=0;$E++;$e="<input type='checkbox'".($f?" name='$f' value='".h($n)."'":"").($sa?" checked":"").($le?" onclick=\"$le\"":"")." id='checkbox-$E'>";return($he!=""?"<label for='checkbox-$E'>$e".h($he)."</label>":$e);}function
optionlist($ec,$cf=null,$Rd=false){$e="";foreach($ec
as$va=>$r){if(is_array($r)){$e.='<optgroup label="'.h($va).'">';}foreach((is_array($r)?$r:array($va=>$r))as$c=>$b){$e.='<option'.($Rd||is_string($c)?' value="'.h($c).'"':'').(($Rd||is_string($c)?(string)$c:$b)===$cf?' selected':'').'>'.h($b);}if(is_array($r)){$e.='</optgroup>';}}return$e;}function
html_select($f,$ec,$n="",$ob=true){if($ob){return"<select name='".h($f)."'".(is_string($ob)?" onchange=\"$ob\"":"").">".optionlist($ec,$n)."</select>";}$e="";foreach($ec
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$n?" checked":"").">".h($b)."</label>";}return$e;}function
ini_bool($We){$b=ini_get($We);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
q($P){global$i;return$i->quote($P);}function
get_vals($j,$wa=0){global$i;$e=array();$k=$i->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[]=$a[$wa];}}return$e;}function
get_key_vals($j,$L=null){global$i;if(!is_object($L)){$L=$i;}$e=array();$k=$L->query($j);while($a=$k->fetch_row()){$e[$a[0]]=$a[1];}return$e;}function
get_rows($j,$L=null,$p="<p class='error'>"){global$i;if(!is_object($L)){$L=$i;}$e=array();$k=$L->query($j);if(is_object($k)){while($a=$k->fetch_assoc()){$e[]=$a;}}elseif(!$k&&$p&&(headers_sent()||ob_get_level())){echo$p.error()."\n";}return$e;}function
unique_array($a,$_){foreach($_
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$e=array();foreach($s["columns"]as$c){if(!isset($a[$c])){continue
2;}$e[$c]=$a[$c];}return$e;}}$e=array();foreach($a
as$c=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$e[$c]=$b;}}return$e;}function
where($y){global$u;$e=array();foreach((array)$y["where"]as$c=>$b){$e[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$b)||$u=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$y["null"]as$c){$e[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$ze);remove_slashes(array(&$ze));return
where($ze);}function
where_link($g,$wa,$n,$df="="){return"&where%5B$g%5D%5Bcol%5D=".urlencode($wa)."&where%5B$g%5D%5Bop%5D=".urlencode($df)."&where%5B$g%5D%5Bval%5D=".urlencode($n);}function
cookie($f,$n){global$_b;$Hb=array($f,(ereg("\n",$n)?"":$n),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$_b);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Hb[]=true;}return
call_user_func_array('setcookie',$Hb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($kb,$G,$V){global$ua;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ua))."|username|".session_name()),$l);return"$l[1]?".(SID&&!$_COOKIE?SID."&":"").($kb!="server"||$G!=""?urlencode($kb)."=".urlencode($G)."&":"")."username=".urlencode($V).($l[2]?"&$l[2]":"");}function
redirect($U,$ma=null){if(isset($ma)){restart_session();$_SESSION["messages"][]=$ma;}if(isset($U)){header("Location: ".($U!=""?$U:"."));exit;}}function
query_redirect($j,$U,$ma,$gc=true,$af=true,$Wd=false){global$i,$p,$q;if($af){$Wd=!$i->query($j);}$ed="";if($j){$ed=$q->messageQuery($j);}if($Wd){$p=error().$ed;return
false;}if($gc){redirect($U,$ma.$ed);}return
true;}function
queries($j=null){global$i;static$ce=array();if(!isset($j)){return
implode(";\n",$ce);}$ce[]=$j;return$i->query($j);}function
apply_queries($j,$xa,$Ve='table'){foreach($xa
as$m){if(!queries("$j ".$Ve($m))){return
false;}}return
true;}function
queries_redirect($U,$ma,$gc){return
query_redirect(queries(),$U,$ma,$gc,false,!$gc);}function
remove_from_uri($Da=""){return
substr(preg_replace("~(?<=[?&])($Da".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($I,$He){return" ".($I==$He?$I+1:'<a href="'.h(remove_from_uri("page").($I?"&page=$I":"")).'">'.($I+1)."</a>");}function
get_file($c,$me=false){$Z=$_FILES[$c];if(!$Z||$Z["error"]){return$Z["error"];}return
file_get_contents($me&&ereg('\\.gz$',$Z["name"])?"compress.zlib://$Z[tmp_name]":($me&&ereg('\\.bz2$',$Z["name"])?"compress.bzip2://$Z[tmp_name]":$Z["tmp_name"]));}function
upload_error($p){$je=($p==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($p?'Nepodařilo se nahrát soubor.'.($je?" ".sprintf('Maximální povolená velikost souboru je %sB.',$je):""):'Soubor neexistuje.');}function
odd($e=' class="odd"'){static$g=0;if(!$e){$g=-1;}return($g++%
2?$e:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($P,$Ia=80,$Le=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$Ia})($)?)u",$P,$l)){preg_match("(^([\t\r\n -~]{0,$Ia})($)?)",$P,$l);}return
h($l[1]).$Le.(isset($l[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($Wa,$Ne=array()){while(list($c,$b)=each($Wa)){if(is_array($b)){foreach($b
as$va=>$r){$Wa[$c."[$va]"]=$r;}}elseif(!in_array($c,$Ne)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($m){$e=array();foreach(foreign_keys($m)as$F){foreach($F["source"]as$b){$e[$b][]=$F;}}return$e;}function
enum_input($O,$Aa,$d,$n){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ca);foreach($ca[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$sa=(is_int($n)?$n==$g+1:(is_array($n)?in_array($g+1,$n):$n===$b));echo" <label><input type='$O'$Aa value='".($g+1)."'".($sa?' checked':'').'>'.h($b).'</label>';}}function
input($d,$n,$B){global$na,$q,$u;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$Q=(isset($_GET["select"])?array("orig"=>'původní'):array())+$q->editFunctions($d);$Aa=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($Q[""])."<td>".($Q["orig"]?"<label><input type='radio'$Aa value='-1' checked><i>$Q[orig]</i></label> ":""),$q->editInput($_GET["edit"],$d,$Aa,$n);enum_input("radio",$Aa,$d,$n);}else{$Qa=0;foreach($Q
as$c=>$b){if($c===""||!$b){break;}$Qa++;}$ob=($Qa?" onchange=\"var f = this.form['function[".addcslashes($f,"\r\n'\\")."]']; if ($Qa > f.selectedIndex) f.selectedIndex = $Qa;\"":"");$Aa.=$ob;echo(count($Q)>1?html_select("function[$f]",$Q,!isset($B)||in_array($B,$Q)||isset($Q[$B])?$B:""):nbsp(reset($Q))).'<td>';$ge=$q->editInput($_GET["edit"],$d,$Aa,$n);if($ge!=""){echo$ge;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ca);foreach($ca[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$sa=(is_int($n)?($n>>$g)&1:in_array($b,explode(",",$n),true));echo" <label><input type='checkbox' name='fields[$f][$g]' value='".(1<<$g)."'".($sa?' checked':'')."$ob>".h($b).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$ob>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($u!="sqlite"||ereg("\n",$n)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Aa onkeydown='return textareaKeydown(this, event);'>".h($n).'</textarea>';}else{$md=(!ereg('int',$d["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$d["length"],$l)?((ereg("binary",$d["type"])?2:1)*$l[1]+($l[3]?1:0)+($l[2]&&!$d["unsigned"]?1:0)):($na[$d["type"]]?$na[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($n)."'".($md?" maxlength='$md'":"").(ereg('char|binary',$d["type"])&&$md>20?" size='40'":"")."$Aa>";}}}function
process_input($d){global$q;$_a=bracket_escape($d["field"]);$B=$_POST["function"][$_a];$n=$_POST["fields"][$_a];if($d["type"]=="enum"){if($n==-1){return
false;}if($n==""){return"NULL";}return
intval($n);}if($d["auto_increment"]&&$n==""){return
null;}if($B=="orig"){return
false;}if($B=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$n);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$Z=get_file("fields-$_a");if(!is_string($Z)){return
false;}return
q($Z);}return$q->processInput($d,$n,$B);}function
search_tables(){global$q,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$da=false;foreach(table_status()as$m=>$M){$f=$q->tableName($M);if(isset($M["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($m,$_POST["tables"]))){$k=$i->query("SELECT".limit("1 FROM ".table($m)," WHERE ".implode(" AND ",$q->selectSearchProcess(fields($m),array())),1));if($k->fetch_row()){if(!$da){echo"<ul>\n";$da=true;}echo"<li><a href='".h(ME."select=".urlencode($m)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($da?"</ul>":"<p class='message'>".'Žádné tabulky.')."\n";}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$a)."\n";}function
apply_sql_function($B,$wa){return($B?($B=="unixepoch"?"DATETIME($wa, '$B')":($B=="count distinct"?"COUNT(DISTINCT ":strtoupper("$B("))."$wa)"):$wa);}function
password_file(){$tc=ini_get("upload_tmp_dir");if(!$tc){if(function_exists('sys_get_temp_dir')){$tc=sys_get_temp_dir();}else{$Sa=@tempnam("","");if(!$Sa){return
false;}$tc=dirname($Sa);unlink($Sa);}}$Sa="$tc/adminer.key";$e=@file_get_contents($Sa);if($e){return$e;}$ta=@fopen($Sa,"w");if($ta){$e=md5(uniqid(mt_rand(),true));fwrite($ta,$e);fclose($ta);}return$e;}function
is_mail($Me){$fe='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$aa="$fe+(\\.$fe+)*@($Tb?\\.)+$Tb";return
preg_match("(^$aa(,\\s*$aa)*\$)i",$Me);}function
is_url($P){$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Tb?\\.)+$Tb(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$l)?strtolower($l[1]):"");}function
print_fieldset($E,$Ke,$Oe=false){echo"<fieldset><legend><a href='#fieldset-$E' onclick=\"return !toggle('fieldset-$E');\">$Ke</a></legend><div id='fieldset-$E'".($Oe?"":" class='hidden'").">\n";}function
bold($P,$Pe){return($Pe?"<b>$P</b>":$P);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$_b=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Hb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$_b);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Hb[]=true;}call_user_func_array('session_set_cookie_params',$Hb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);function
lang($Te,$Qb){$Pb=($Qb==1||(!$Qb&&'cs'=='fr')?0:((!$Qb||$Qb>=5)&&ereg('cs|sk|ru','cs')?2:1));return
sprintf($Te[$Pb],$Qb);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Qe,$V,$fa,$Ue='auth_error'){set_exception_handler($Ue);parent::__construct($Qe,$V,$fa);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Nb=false){$k=parent::query($j);if(!$k){$Ee=$this->errorInfo();$this->error=$Ee[2];return
false;}$this->store_result($k);return$k;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($k=null){if(!$k){$k=$this->_result;}if($k->columnCount()){$k->num_rows=$k->rowCount();return$k;}$this->affected_rows=$k->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$Ac=array();$ua=array();$Ac[]="MySQLi";$Ac[]="MySQL";$Ac[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ua=array("server"=>"MySQL")+$ua;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($G,$V,$fa){mysqli_report(MYSQLI_REPORT_OFF);list($Ie,$Cc)=explode(":",$G,2);$e=@$this->real_connect(($G!=""?$Ie:ini_get("mysqli.default_host")),("$G$V"!=""?$V:ini_get("mysqli.default_user")),("$G$V$fa"!=""?$fa:ini_get("mysqli.default_pw")),null,(is_numeric($Cc)?$Cc:ini_get("mysqli.default_port")),(!is_numeric($Cc)?$Cc:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch_array();return$a[$d];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($G,$V,$fa){$this->_link=@mysql_connect(($G!=""?$G:ini_get("mysql.default_host")),("$G$V"!=""?$V:ini_get("mysql.default_user")),("$G$V$fa"!=""?$fa:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($Wb){return
mysql_select_db($Wb,$this->_link);}function
query($j,$Nb=false){$k=@($Nb?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
false;}if($k===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($k);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}return
mysql_result($k->_result,0,$d);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($k){$this->_result=$k;$this->num_rows=mysql_num_rows($k);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$e=mysql_fetch_field($this->_result);$e->orgtable=$e->table;$e->orgname=$e->name;$e->charsetnr=($e->blob?63:0);return$e;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($G,$V,$fa){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$G)),$V,$fa);$this->query("SET NAMES utf8");return
true;}function
select_db($Wb){return$this->query("USE ".idf_escape($Wb));}function
query($j,$Nb=false){$this->setAttribute(1000,!$Nb);return
parent::query($j,$Nb);}}}function
idf_escape($_a){return"`".str_replace("`","``",$_a)."`";}function
table($_a){return
idf_escape($_a);}function
connect(){global$q;$i=new
Min_DB;$Pc=$q->credentials();if($i->connect($Pc[0],$Pc[1],$Pc[2])){$i->query("SET SQL_QUOTE_SHOW_CREATE=1");return$i;}return$i->error;}function
get_databases($Ge=true){$e=&get_session("dbs");if(!isset($e)){if($Ge){restart_session();ob_flush();flush();}$e=get_vals("SHOW DATABASES");}return$e;}function
limit($j,$y,$T,$ea=0,$Vb=" "){return" $j$y".(isset($T)?$Vb."LIMIT $T".($ea?" OFFSET $ea":""):"");}function
limit1($j,$y){return
limit($j,$y,1);}function
db_collation($x,$R){global$i;$e=null;$Y=$i->result("SHOW CREATE DATABASE ".idf_escape($x),1);if(preg_match('~ COLLATE ([^ ]+)~',$Y,$l)){$e=$l[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Y,$l)){$e=$R[$l[1]][0];}return$e;}function
engines(){$e=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($z){$e=array();foreach($z
as$x){$e[$x]=count(get_vals("SHOW TABLES IN ".idf_escape($x)));}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($M){return!isset($M["Rows"]);}function
fk_support($M){return($M["Engine"]=="InnoDB");}function
fields($m,$pf=false){$e=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($m))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$l);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$l[1],"length"=>$l[2],"unsigned"=>ltrim($l[3].$l[4]),"default"=>($a["Default"]!=""||ereg("char",$l[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$l)?$l[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$e;}function
indexes($m,$L=null){global$i;if(!is_object($L)){$L=$i;}$e=array();foreach(get_rows("SHOW INDEX FROM ".table($m),$L)as$a){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$e;}function
foreign_keys($m){global$i,$Ma;static$aa='`(?:[^`]|``)+`';$e=array();$de=$i->result("SHOW CREATE TABLE ".table($m),1);if($de){preg_match_all("~CONSTRAINT ($aa) FOREIGN KEY \\(((?:$aa,? ?)+)\\) REFERENCES ($aa)(?:\\.($aa))? \\(((?:$aa,? ?)+)\\)(?: ON DELETE (".implode("|",$Ma)."))?(?: ON UPDATE (".implode("|",$Ma)."))?~",$de,$ca,PREG_SET_ORDER);foreach($ca
as$l){preg_match_all("~$aa~",$l[2],$qa);preg_match_all("~$aa~",$l[5],$La);$e[idf_unescape($l[1])]=array("db"=>idf_unescape($l[4]!=""?$l[3]:$l[4]),"table"=>idf_unescape($l[4]!=""?$l[4]:$l[3]),"source"=>array_map('idf_unescape',$qa[0]),"target"=>array_map('idf_unescape',$La[0]),"on_delete"=>$l[6],"on_update"=>$l[7],);}}return$e;}function
view($f){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){$e[$a["Charset"]][]=$a["Collation"];}ksort($e);foreach($e
as$c=>$b){sort($e[$c]);}return$e;}function
information_schema($x){global$i;return($i->server_info>=5&&$x=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($x,$jb){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($x).($jb?" COLLATE ".q($jb):""));}function
drop_databases($z){set_session("dbs",null);return
apply_queries("DROP DATABASE",$z,'idf_escape');}function
rename_database($f,$jb){if(create_database($f,$jb)){$xb=array();foreach(tables_list()as$m=>$O){$xb[]=table($m)." TO ".idf_escape($f).".".table($m);}if(!$xb||queries("RENAME TABLE ".implode(", ",$xb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$kd=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$kd="";break;}if($s["type"]=="PRIMARY"){$kd=" UNIQUE";}}}return" AUTO_INCREMENT$kd";}function
alter_table($m,$f,$o,$yc,$Ya,$Xb,$jb,$uc,$Yb){$ba=array();foreach($o
as$d){$ba[]=($d[1]?($m!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($m!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$ba=array_merge($ba,$yc);$tb="COMMENT=".q($Ya).($Xb?" ENGINE=".q($Xb):"").($jb?" COLLATE ".q($jb):"").($uc!=""?" AUTO_INCREMENT=$uc":"").$Yb;if($m==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ba)."\n) $tb");}if($m!=$f){$ba[]="RENAME TO ".table($f);}$ba[]=$tb;return
queries("ALTER TABLE ".table($m)."\n".implode(",\n",$ba));}function
alter_indexes($m,$ba){foreach($ba
as$c=>$b){$ba[$c]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($m).implode(",",$ba));}function
truncate_tables($xa){return
apply_queries("TRUNCATE TABLE",$xa);}function
drop_views($ab){return
queries("DROP VIEW ".implode(", ",array_map('table',$ab)));}function
drop_tables($xa){return
queries("DROP TABLE ".implode(", ",array_map('table',$xa)));}function
move_tables($xa,$ab,$La){$xb=array();foreach(array_merge($xa,$ab)as$m){$xb[]=table($m)." TO ".idf_escape($La).".".table($m);}return
queries("RENAME TABLE ".implode(", ",$xb));}function
trigger($f){$D=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($D);}function
triggers($m){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($m,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$O){global$i,$lb,$Zb,$na;$hf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Vd="((".implode("|",array_merge(array_keys($na),$hf)).")(?:\\s*\\(((?:[^'\")]*|$lb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$aa="\\s*(".($O=="FUNCTION"?"":implode("|",$Zb)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Vd";$Y=$i->result("SHOW CREATE $O ".idf_escape($f),2);preg_match("~\\(((?:$aa\\s*,?)*)\\)".($O=="FUNCTION"?"\\s*RETURNS\\s+$Vd":"")."\\s*(.*)~is",$Y,$l);$o=array();preg_match_all("~$aa\\s*,?~is",$l[1],$ca,PREG_SET_ORDER);foreach($ca
as$Da){$f=str_replace("``","`",$Da[2]).$Da[3];$o[]=array("field"=>$f,"type"=>strtolower($Da[5]),"length"=>preg_replace_callback("~$lb~s",'normalize_enum',$Da[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Da[8] $Da[7]"))),"full_type"=>$Da[4],"inout"=>strtoupper($Da[1]),"collation"=>strtolower($Da[9]),);}if($O!="FUNCTION"){return
array("fields"=>$o,"definition"=>$l[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$l[12],"length"=>$l[13],"unsigned"=>$l[15],"collation"=>$l[16]),"definition"=>$l[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($m,$t){return
queries("INSERT INTO ".table($m)." (".implode(", ",array_keys($t)).")\nVALUES (".implode(", ",$t).")");}function
insert_update($m,$t,$vc){foreach($t
as$c=>$b){$t[$c]="$c = $b";}$Ga=implode(", ",$t);return
queries("INSERT INTO ".table($m)." SET $Ga ON DUPLICATE KEY UPDATE $Ga");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$j){return$i->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ra){return
true;}function
create_sql($m,$uc){global$i;$e=$i->result("SHOW CREATE TABLE ".table($m),1);if(!$uc){$e=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$e);}return$e;}function
truncate_sql($m){return"TRUNCATE ".table($m);}function
use_sql($Wb){return"USE ".idf_escape($Wb);}function
trigger_sql($m,$H){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($m,"%_")),null,"-- ")as$a){$e.="\n".($H=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($lf){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$lf);}$u="sql";$na=array();$gd=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Řetězce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binární'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),)as$c=>$b){$na+=$b;$gd[$c]=array_keys($b);}$Cb=array("unsigned","zerofill","unsigned zerofill");$Ud=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$Q=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Jb=array("avg","count","count distinct","group_concat","max","min","sum");$Td=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$xc="3.0.1";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){header("X-Frame-Options: deny");}function
loginForm(){global$ua;?>
<table cellspacing="0">
<tr><th>Systém<td><input type='hidden' name='driver' value='server'>MySQL
<tr><th>Server<td><input name="server" value="<?php echo
h(SERVER),'">
<tr><th>Uživatel<td><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Přihlásit se'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé přihlášení')."\n";}function
login($rf,$fa){return
true;}function
tableName($Dc){return
h($Dc["Name"]);}function
fieldName($d,$Za=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Dc,$t=""){echo'<p class="tabs">';$ya=array("select"=>'Vypsat data',"table"=>'Zobrazit strukturu');if(is_view($Dc)){$ya["view"]='Pozměnit pohled';}else{$ya["create"]='Pozměnit tabulku';}if(isset($t)){$ya["edit"]='Nová položka';}foreach($ya
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($Dc["Name"]).($c=="edit"?$t:"")."'>".bold($b,isset($_GET[$c]))."</a>";}echo"\n";}function
backwardKeys($m,$of){return
array();}function
backwardKeysPrint($uf,$a){}function
selectQuery($j){global$u;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Stránka'.": ".'poslední'."'>&gt;&gt;</a> <code class='jush-$u'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upravit'."</a>\n";}function
rowDescription($m){return"";}function
rowDescriptions($D,$gf){return$D;}function
selectVal($b,$A,$d){$e=($b!="<i>NULL</i>"&&ereg("^char|binary",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(array('%d bajt','%d bajty','%d bajtů'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($A?"<a href='$A'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($v,$w){global$Q,$Jb;print_fieldset("select",'Vypsat',$v);$g=0;$oe=array('Funkce'=>$Q,'Agregace'=>$Jb);foreach($v
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$oe,$b["fun"]),"(<select name='columns[$g][col]'><option>".optionlist($w,$b["col"],true)."</select>)</div>\n";$g++;}echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$oe,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$g][col]' onchange='selectAddRow(this);'><option>".optionlist($w,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($y,$w,$_){print_fieldset("search",'Vyhledat',$y);foreach($_
as$g=>$s){if($s["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$s["columns"]))."</i>) AGAINST"," <input name='fulltext[$g]' value='".h($_GET["fulltext"][$g])."'>",checkbox("boolean[$g]",1,isset($_GET["boolean"][$g]),"BOOL"),"<br>\n";}}$g=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$g][col]'><option value=''>(".'kdekoliv'.")".optionlist($w,$b["col"],true)."</select>",html_select("where[$g][op]",$this->operators,$b["op"]),"<input name='where[$g][val]' value='".h($b["val"])."'></div>\n";$g++;}}echo"<div><select name='where[$g][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoliv'.")".optionlist($w,null,true)."</select>",html_select("where[$g][op]",$this->operators),"<input name='where[$g][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Za,$w,$_){print_fieldset("sort",'Seřadit',$Za);$g=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($w[$b])){echo"<div><select name='order[$g]'><option>".optionlist($w,$b,true)."</select>",checkbox("desc[$g]",1,isset($_GET["desc"][$c]),'sestupně')."</div>\n";$g++;}}echo"<div><select name='order[$g]' onchange='selectAddRow(this);'><option>".optionlist($w,null,true)."</select>",checkbox("desc[$g]",1,0,'sestupně')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($T){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($T)."'>","</div></fieldset>\n";}function
selectLengthPrint($hb){if(isset($hb)){echo"<fieldset><legend>".'Délka textů'."</legend><div>",'<input name="text_length" size="3" value="'.h($hb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectEmailPrint($nf,$w){}function
selectColumnsProcess($w,$_){global$Q,$Jb;$v=array();$ga=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($w[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$Q)||in_array($b["fun"],$Jb)))){$v[$c]=apply_sql_function($b["fun"],(isset($w[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$Jb)){$ga[]=$v[$c];}}}return
array($v,$ga);}function
selectSearchProcess($o,$_){global$u;$e=array();foreach($_
as$g=>$s){if($s["type"]=="FULLTEXT"&&$_GET["fulltext"][$g]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$s["columns"])).") AGAINST (".q($_GET["fulltext"][$g]).(isset($_GET["boolean"][$g])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Ab=" $b[op]";if(ereg('IN$',$b["op"])){$mb=process_length($b["val"]);$Ab.=" (".($mb!=""?$mb:"NULL").")";}elseif($b["op"]=="LIKE %%"){$Ab=" LIKE ".$this->processInput($o[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Ab.=" ".$this->processInput($o[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$Ab;}else{$Ta=array();foreach($o
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$Ta[]=($u=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($Ta?"(".implode("$Ab OR ",$Ta)."$Ab)":"0");}}}return$e;}function
selectOrderProcess($o,$_){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($o[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($o[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($y,$gf){return
false;}function
messageQuery($j){global$u;restart_session();$E="sql-".count($_SESSION["messages"]);$Na=&get_session("queries");$Na[$_GET["db"]][]=(strlen($j)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...":$j);return" <a href='#$E' onclick=\"return !toggle('$E');\">".'SQL příkaz'."</a><div id='$E' class='hidden'><pre class='jush-$u'>".shorten_utf8($j,1000).'</pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Na[$_GET["db"]])-1)).'">'.'Upravit'.'</a></div>';}function
editFunctions($d){global$Td;$e=($d["null"]?"NULL/":"");foreach($Td
as$c=>$Q){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Q
as$aa=>$b){if(!$aa||ereg($aa,$d["type"])){$e.="/$b";}}}}return
explode("/",$e);}function
editInput($m,$d,$Aa,$n){if($d["type"]=="enum"){return($d["null"]?"<label><input type='radio'$Aa value=''".(isset($n)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"")."<label><input type='radio'$Aa value='0'".($n===0?" checked":"")."><i>".'prázdné'."</i></label>";}return"";}function
processInput($d,$n,$B=""){$f=$d["field"];$e=q($n);if(ereg('^(now|getdate|uuid)$',$B)){$e="$B()";}elseif(ereg('^current_(date|timestamp)$',$B)){$e=$B;}elseif(ereg('^([+-]|\\|\\|)$',$B)){$e=idf_escape($f)." $B $e";}elseif(ereg('^[+-] interval$',$B)){$e=idf_escape($f)." $B ".(preg_match("~^([0-9]+|'[0-9.: -]') [A-Z_]+$~i",$n)?$n:$e);}elseif(ereg('^(addtime|subtime|concat)$',$B)){$e="$B(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$B)){$e="$B($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput($v,$n=""){$e=array('text'=>'otevřít','file'=>'uložit');if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return
html_select("output",$e,$n,$v);}function
dumpFormat($v,$n=""){return
html_select("format",array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;'),$n,$v);}function
navigation($ub){global$xc,$i,$C,$u,$ua;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$xc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($xc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($ub=="auth"){$Qa=true;foreach((array)$_SESSION["pwds"]as$kb=>$Ye){foreach($Ye
as$G=>$Xe){foreach($Xe
as$V=>$fa){if(isset($fa)){if($Qa){echo"<p>\n";$Qa=false;}echo"<a href='".h(auth_url($kb,$G,$V))."'>($ua[$kb]) ".h($V.($G!=""?"@$G":""))."</a><br>\n";}}}}}else{$z=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$ub){echo"<a href='".h(ME)."sql='>".bold('SQL příkaz',isset($_GET["sql"]))."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."'>".bold('Export',isset($_GET["dump"]))."</a>\n";}}echo'<input type="hidden" name="token" value="',$C,'">
<input type="submit" name="logout" value="Odhlásit">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($z?html_select("db",array(""=>"(".'databáze'.")")+$z,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Vybrat"',($z?" class='hidden'":""),'>
';if($ub!="db"&&DB!=""&&$i->select_db(DB)){if($_GET["ns"]!==""&&!$ub){$xa=tables_list();if(!$xa){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{$this->tablesPrint($xa);$ya=array();foreach($xa
as$m=>$O){$ya[]=preg_quote($m,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $u: [ '".addcslashes(h(ME),"\\'/")."table=\$&', /\\b(".implode("|",$ya).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$u;\n";}echo"</script>\n";}echo'<p><a href="'.h(ME).'create=">'.bold('Vytvořit novou tabulku',$_GET["create"]==="")."</a>\n";}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($xa){echo"<p id='tables'>\n";foreach($xa
as$m=>$O){echo'<a href="'.h(ME).'select='.urlencode($m).'">'.bold('vypsat',$_GET["select"]==$m).'</a> ','<a href="'.h(ME).'table='.urlencode($m).'">'.bold($this->tableName(array("Name"=>$m)),$_GET["table"]==$m)."</a><br>\n";}}}$q=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($q->operators)){$q->operators=$Ud;}function
page_header($be,$p="",$Eb=array(),$ae=""){global$tf,$_b,$q,$i,$ua;header("Content-Type: text/html; charset=utf-8");$q->headers();$Zd=$be.($ae!=""?": ".h($ae):"");$bc=($_b?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="cs">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Zd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$q->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.1",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.1";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\', \'',$bc,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$bc');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.1",'"></script>

<div id="content">
';if(isset($Eb)){$A=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($A?h($A):".").'">'.$ua[DRIVER].'</a> &raquo; ';$A=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$G=(SERVER!=""?h(SERVER):'Server');if($Eb===false){echo"$G\n";}else{echo"<a href='".($A?h($A):".")."'>$G</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Eb))){echo'<a href="'.h($A."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Eb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Eb
as$c=>$b){$Fb=(is_array($b)?$b[1]:$b);if($Fb!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Fb).'</a> &raquo; ';}}}echo"$be\n";}}echo"<h2>$Zd</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$z=&get_session("dbs");if(DB!=""&&$z&&!in_array(DB,$z,true)){$z=null;}if($p){echo"<div class='error'>$p</div>\n";}}function
page_footer($ub=""){global$q;echo'</div>

<div id="menu">
';$q->navigation($ub);echo'</div>
';}function
int32($K){while($K>=2147483648){$K-=4294967296;}while($K<=-2147483649){$K+=4294967296;}return(int)$K;}function
long2str($r,$Wc){$S='';foreach($r
as$b){$S.=pack('V',$b);}if($Wc){return
substr($S,0,end($r));}return$S;}function
str2long($S,$Wc){$r=array_values(unpack('V*',str_pad($S,4*ceil(strlen($S)/4),"\0")));if($Wc){$r[]=strlen($S);}return$r;}function
xxtea_mx($la,$ka,$ra,$va){return
int32((($la>>5&0x7FFFFFF)^$ka<<2)+(($ka>>3&0x1FFFFFFF)^$la<<4))^int32(($ra^$ka)+($va^$la));}function
encrypt_string($Gb,$c){if($Gb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($Gb,true);$K=count($r)-1;$la=$r[$K];$ka=$r[0];$ja=floor(6+52/($K+1));$ra=0;while($ja-->0){$ra=int32($ra+0x9E3779B9);$Db=$ra>>2&3;for($ha=0;$ha<$K;$ha++){$ka=$r[$ha+1];$rb=xxtea_mx($la,$ka,$ra,$c[$ha&3^$Db]);$la=int32($r[$ha]+$rb);$r[$ha]=$la;}$ka=$r[0];$rb=xxtea_mx($la,$ka,$ra,$c[$ha&3^$Db]);$la=int32($r[$K]+$rb);$r[$K]=$la;}return
long2str($r,false);}function
decrypt_string($Gb,$c){if($Gb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($Gb,false);$K=count($r)-1;$la=$r[$K];$ka=$r[0];$ja=floor(6+52/($K+1));$ra=int32($ja*0x9E3779B9);while($ra){$Db=$ra>>2&3;for($ha=$K;$ha>0;$ha--){$la=$r[$ha-1];$rb=xxtea_mx($la,$ka,$ra,$c[$ha&3^$Db]);$ka=int32($r[$ha]-$rb);$r[$ha]=$ka;}$la=$r[$K];$rb=xxtea_mx($la,$ka,$ra,$c[$ha&3^$Db]);$ka=int32($r[0]-$rb);$r[0]=$ka;$ra=int32($ra-0x9E3779B9);}return
long2str($r,true);}$i='';if(!$ua){page_header('Žádná extenze',sprintf('Není dostupná žádná z podporovaných PHP extenzí (%s).',implode(", ",$Ac)),null);page_footer("auth");exit;}$C=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$fb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$fb[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$lc=$q->permanentLogin();$fb[$c]="$c:".base64_encode($lc?encrypt_string($_POST["password"],$lc):"");cookie("adminer_permanent",implode(" ",$fb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($C&&$_POST["token"]!=$C){page_header('Odhlásit','Neplatný token CSRF. Odešlete formulář znovu.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($fb[$c]){unset($fb[$c]);cookie("adminer_permanent",implode(" ",$fb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlášení proběhlo v pořádku.');}}elseif($fb&&!$_SESSION["pwds"]){session_regenerate_id();$lc=$q->permanentLogin();foreach($fb
as$c=>$b){list(,$bf)=explode(":",$b);list($kb,$G,$V)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$kb][$G][$V]=decrypt_string(base64_decode($bf),$lc);}}function
auth_error($Yd=null){global$i,$q,$C;$mc=session_name();$p="";if(!$_COOKIE[$mc]&&$_GET[$mc]&&ini_bool("session.use_only_cookies")){$p='Session proměnné musí být povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$mc]||$_GET[$mc])&&!$C){$p='Session vypršela, přihlašte se prosím znovu.';}else{$fa=&get_session("pwds");if(isset($fa)){$p=h($Yd?$Yd->getMessage():(is_string($i)?$i:'Neplatné přihlašovací údaje.'));$fa=null;}}}page_header('Přihlásit se',$p,null);echo"<form action='' method='post'>\n";$q->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$i=connect();}if(is_string($i)||!$q->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$C=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$C;}$p=($_POST?($_POST["token"]==$C?"":'Neplatný token CSRF. Odešlete formulář znovu.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','"post_max_size"')));function
connect_error(){global$i,$C,$p,$ua;$z=array();if(DB!=""){page_header('Databáze'.": ".h(DB),'Nesprávná databáze.',true);}else{if($_POST["db"]&&!$p){queries_redirect(substr(ME,0,-1),'Databáze byly odstraněny.',drop_databases($_POST["db"]));}page_header('Vybrat databázi',$p,false);echo"<p><a href='".h(ME)."database='>".'Vytvořit novou databázi'."</a>\n";foreach(array('privileges'=>'Oprávnění','processlist'=>'Seznam procesů','variables'=>'Proměnné','status'=>'Stav',)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".sprintf('Verze %s: %s přes PHP extenzi %s',$ua[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".sprintf('Přihlášen jako: %s',"<b>".h(logged_user())."</b>")."\n";$z=get_databases();if($z){$ef=support("scheme");$R=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$C'>&nbsp;<th>".'Databáze'."<td>".'Porovnávání'."<td>".'Tabulky'."</thead>\n";foreach($z
as$x){$dd=h(ME)."db=".urlencode($x);echo"<tr".odd()."><td>".checkbox("db[]",$x,in_array($x,(array)$_POST["db"])),"<th><a href='$dd'>".h($x)."</a>","<td><a href='$dd".($ef?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($x,$R))."</a>","<td align='right'><a href='$dd&amp;schema=' id='tables-".h($x)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Odstranit'."' onclick=\"return confirm('".'Opravdu?'." (' + formChecked(this, /db/) + ')');\">\n","</form>\n";}}page_footer("db");if($z){echo"<script type='text/javascript' src='".h(ME."script=connect&token=$C")."'></script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($k,$L=null){$ya=array();$_=array();$w=array();$ne=array();$na=array();odd('');for($g=0;$a=$k->fetch_row();$g++){if(!$g){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($X=0;$X<count($a);$X++){$d=$k->fetch_field();$pa=$d->orgtable;$ac=$d->orgname;if($pa!=""){if(!isset($_[$pa])){$_[$pa]=array();foreach(indexes($pa,$L)as$s){if($s["type"]=="PRIMARY"){$_[$pa]=array_flip($s["columns"]);break;}}$w[$pa]=$_[$pa];}if(isset($w[$pa][$ac])){unset($w[$pa][$ac]);$_[$pa][$ac]=$X;$ya[$X]=$pa;}}if($d->charsetnr==63){$ne[$X]=true;}$na[$X]=$d->type;echo"<th".($pa!=""||$d->name!=$ac?" title='".h(($pa!=""?"$pa.":"").$ac)."'":"").">".h($d->name);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($ne[$c]&&!is_utf8($b)){$b="<i>".lang(array('%d bajt','%d bajty','%d bajtů'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($na[$c]==254){$b="<code>$b</code>";}}if(isset($ya[$c])&&!$w[$ya[$c]]){$A="edit=".urlencode($ya[$c]);foreach($_[$ya[$c]]as$kc=>$X){$A.="&where".urlencode("[".bracket_escape($kc)."]")."=".urlencode($a[$X]);}$b="<a href='".h(ME.$A)."'>$b</a>";}}echo"<td>$b";}}echo($g?"</table>":"<p class='message'>".'Žádné řádky.')."\n";}function
referencable_primary($jf){$e=array();foreach(table_status()as$oa=>$m){if($oa!=$jf&&fk_support($m)){foreach(fields($oa)as$d){if($d["primary"]){if($e[$oa]){unset($e[$oa]);break;}$e[$oa]=$d;}}}}return$e;}function
textarea($f,$n,$D=10,$Ta=80){echo"<textarea name='$f' rows='$D' cols='$Ta' style='width: 98%;' spellcheck='false' onkeydown='return textareaKeydown(this, event, true);'>".h($n)."</textarea>";}function
edit_type($c,$d,$R,$J=array()){global$gd,$na,$Cb,$Ma;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($na[$d["type"]])?array():array($d["type"]))+$gd+($J?array('Cizí klíče'=>$J):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td>',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'porovnávání'.')'.optionlist($R,$d["collation"]).'</select>',($Cb?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($Cb,$d["unsigned"]).'</select>':''),($J?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'Při smazání'.")".optionlist($Ma,$d["on_delete"])."</select> ":" ");}function
process_length($Ia){global$lb;return(preg_match("~^\\s*(?:$lb)(?:\\s*,\\s*(?:$lb))*\\s*\$~",$Ia)&&preg_match_all("~$lb~",$Ia,$ca)?implode(",",$ca[0]):preg_replace('~[^0-9,+-]~','',$Ia));}function
process_type($d,$Kb="COLLATE"){global$Cb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$Cb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $Kb ".q($d["collation"]):"");}function
process_field($d,$rc){return
array(idf_escape($d["field"]),process_type($rc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($O){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$O)){return" class='$c'";}}}function
edit_fields($o,$R,$O="TABLE",$Ce=0,$J=array(),$qb=false){global$Zb;foreach($o
as$d){if($d["comment"]!=""){$qb=true;break;}}echo'<thead><tr class="wrap">
';if($O=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($O=="TABLE"?'Název sloupce':'Název parametru'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Délka
<td>Volby
';if($O=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td class="hidden">Výchozí hodnoty
',(support("comment")?"<td".($qb?"":" class='hidden'").">".'Komentář':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.1' alt='+' title='".'Přidat další'."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
';foreach($o
as$g=>$d){$g++;$nd=$d[($_POST?"orig":"field")];$Be=(isset($_POST["add"][$g-1])||(isset($d["field"])&&!$_POST["drop_col"][$g]))&&(support("drop_col")||$nd=="");echo'<tr',($Be?"":" style='display: none;'"),'>
',($O=="PROCEDURE"?"<td>".html_select("fields[$g][inout]",$Zb,$d["inout"]):""),'<th>';if($Be){echo'<input name="fields[',$g,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($o)>1?"":"editingAddRow(this, $Ce); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$g,'][orig]" value="',h($nd),'">
';edit_type("fields[$g]",$d,$R,$J);if($O=="TABLE"){echo'<td>',checkbox("fields[$g][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$g,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$g][has_default]",1,$d["has_default"]),'<input name="fields[',$g,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($qb?"":" class='hidden'")."><input name='fields[$g][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.1' alt='+' title='".'Přidat další'."' onclick='return !editingAddRow(this, $Ce, 1);'>&nbsp;"."<input type='image' name='up[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=up.gif&amp;version=3.0.1' alt='^' title='".'Přesunout nahoru'."'>&nbsp;"."<input type='image' name='down[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=down.gif&amp;version=3.0.1' alt='v' title='".'Přesunout dolů'."'>&nbsp;":""),($nd==""||support("drop_col")?"<input type='image' name='drop_col[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.1' alt='x' title='".'Odebrat'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$qb;}function
process_fields(&$o){ksort($o);$ea=0;if($_POST["up"]){$Va=0;foreach($o
as$c=>$d){if(key($_POST["up"])==$c){unset($o[$c]);array_splice($o,$Va,0,array($d));break;}if(isset($d["field"])){$Va=$ea;}$ea++;}}if($_POST["down"]){$da=false;foreach($o
as$c=>$d){if(isset($d["field"])&&$da){unset($o[key($_POST["down"])]);array_splice($o,$ea,0,array($da));break;}if(key($_POST["down"])==$c){$da=$d;}$ea++;}}$o=array_values($o);if($_POST["add"]){array_splice($o,key($_POST["add"]),0,array(array()));}}function
normalize_enum($l){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($l[0][0].$l[0][0],$l[0][0],substr($l[0],1,-1))),'\\'))."'";}function
grant($N,$W,$w,$eb){if(!$W){return
true;}if($W==array("ALL PRIVILEGES","GRANT OPTION")){return($N=="GRANT"?queries("$N ALL PRIVILEGES$eb WITH GRANT OPTION"):queries("$N ALL PRIVILEGES$eb")&&queries("$N GRANT OPTION$eb"));}return
queries("$N ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$w, ",$W).$w).$eb);}function
drop_create($re,$Y,$U,$pe,$Ze,$ff,$f){if($_POST["drop"]){return
query_redirect($re,$U,$pe,true,!$_POST["dropped"]);}$Ea=$f!=""&&($_POST["dropped"]||queries($re));$mf=queries($Y);if(!queries_redirect($U,($f!=""?$Ze:$ff),$mf)&&$Ea){restart_session();$_SESSION["messages"][]=$pe;}return$Ea;}function
tar_file($Sa,$Jc){$e=pack("a100a8a8a8a12a12",$Sa,644,0,0,decoct(strlen($Jc)),decoct(time()));$ue=8*32;for($g=0;$g<strlen($e);$g++){$ue+=ord($e{$g});}$e.=sprintf("%06o",$ue)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Jc.str_repeat("\0",511-(strlen($Jc)+511)%
512);}function
dump_table($m,$H,$nc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($H){dump_csv(array_keys(fields($m)));}}elseif($H){$Y=create_sql($m,$_POST["auto_increment"]);if($Y){if($H=="DROP+CREATE"){echo"DROP ".($nc?"VIEW":"TABLE")." IF EXISTS ".table($m).";\n";}if($nc){$Y=preg_replace('~^([A-Z =]+) DEFINER=`'.str_replace("@","`@`",logged_user()).'`~','\\1',$Y);}echo($H!="CREATE+ALTER"?$Y:($nc?substr_replace($Y," OR REPLACE",6,0):substr_replace($Y," IF NOT EXISTS",12,0))).";\n\n";}if($H=="CREATE+ALTER"&&!$nc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($m)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$o=array();$pb="";foreach(get_rows($j)as$a){$Fa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Fa)?q($Fa):"NULL");$a["after"]=q($pb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Fa)?" DEFAULT ".($Fa=="CURRENT_TIMESTAMP"?$Fa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($pb?" AFTER ".idf_escape($pb):" FIRST"));echo", ADD $a[alter]";$o[]=$a;$pb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($o
as$a){echo"
				WHEN ".q($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', '');
					IF NOT (_column_default <=> $a[default]) OR _is_nullable != '$a[IS_NULLABLE]' OR _collation_name != '$a[COLLATION_NAME]' OR _column_type != ".q($a["COLUMN_TYPE"])." OR _extra != '$a[EXTRA]' OR _column_comment != ".q($a["COLUMN_COMMENT"])." OR after != $a[after] THEN
						SET @alter_table = CONCAT(@alter_table, ', MODIFY $a[alter]');
					END IF;";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($m)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dump_data($m,$H,$v=""){global$i,$u;$te=($u=="sqlite"?0:1048576);if($H){if($_POST["format"]=="sql"&&$H=="TRUNCATE+INSERT"){echo
truncate_sql($m).";\n";}$o=fields($m);$k=$i->query(($v?$v:"SELECT * FROM ".table($m)),1);if($k){$Ob="";$Ka="";while($a=$k->fetch_assoc()){if($_POST["format"]!="sql"){dump_csv($a);}else{if(!$Ob){$Ob="INSERT INTO ".table($m)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$o[$c]["type"])?$b:q($b)):"NULL");}$S=implode(",\t",$a);if($H=="INSERT+UPDATE"){$t=array();foreach($a
as$c=>$b){$t[]=idf_escape($c)." = $b";}echo"$Ob ($S) ON DUPLICATE KEY UPDATE ".implode(", ",$t).";\n";}else{$S=($te?"\n":" ")."($S)";if(!$Ka){$Ka=$Ob.$S;}elseif(strlen($Ka)+2+strlen($S)<$te){$Ka.=",$S";}else{$Ka.=";\n";echo$Ka;$Ka=$Ob.$S;}}}}if($_POST["format"]=="sql"&&$H!="INSERT+UPDATE"&&$Ka){$Ka.=";\n";echo$Ka;}}}}function
dump_headers($qe,$kf=false){$Sa=($qe!=""?friendly_url($qe):"adminer");$nb=$_POST["output"];$ib=($_POST["format"]=="sql"?"sql":($kf?"tar":"csv"));header("Content-Type: ".($nb=="bz2"?"application/x-bzip":($nb=="gz"?"application/x-gzip":($ib=="tar"?"application/x-tar":($ib=="sql"||$nb!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($nb!="text"){header("Content-Disposition: attachment; filename=$Sa.$ib".($nb!="file"&&!ereg('[^0-9a-z]',$nb)?".$nb":""));}session_write_close();if($_POST["output"]=="bz2"){ob_start('bzcompress',1e6);}if($_POST["output"]=="gz"){ob_start('gzencode',1e6);}return$ib;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Ma=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$db=" onclick=\"return confirm('".'Opravdu?'."');\"";$lb='\'(?:\'\'|[^\'\\\\]|\\\\.)*\'|"(?:""|[^"\\\\]|\\\\.)*"';$Zb=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$h=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$h-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($h)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$h=$_GET["table"];$o=fields($h);if(!$o){$p=error();}$M=($o?table_status($h):array());page_header(($o&&is_view($M)?'Pohled':'Tabulka').": ".h($h),$p);$q->selectLinks($M);$Ya=$M["Comment"];if($Ya!=""){echo"<p>".'Komentář'.": ".h($Ya)."\n";}if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Sloupec'."<td>".'Typ'.(support("comment")?"<td>".'Komentář':"")."</thead>\n";foreach($o
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($M)){echo"<h3>".'Indexy'."</h3>\n";$_=indexes($h);if($_){echo"<table cellspacing='0'>\n";foreach($_
as$f=>$s){ksort($s["columns"]);$Mb=array();foreach($s["columns"]as$c=>$b){$Mb[]="<i>".h($b)."</i>".($s["lengths"][$c]?"(".$s["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$s[type]<td>".implode(", ",$Mb)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($h).'">'.'Pozměnit indexy'."</a>\n";if(fk_support($M)){echo"<h3>".'Cizí klíče'."</h3>\n";$J=foreign_keys($h);if($J){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'Cíl'."<td>".'Při smazání'."<td>".'Při změně'.($u!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($J
as$f=>$F){$A=($F["db"]!=""?"<b>".h($F["db"])."</b>.":"").h($F["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$F["source"]))."</i>","<td><a href='".h($F["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($F["db"]),ME):ME)."table=".urlencode($F["table"])."'>$A</a>","(<i>".implode("</i>, <i>",array_map('h',$F["target"]))."</i>)","<td>$F[on_delete]\n","<td>$F[on_update]\n";if($u!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($h).'&name='.urlencode($f)).'">'.'Změnit'.'</a>';}}echo"</table>\n";}if($u!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($h).'">'.'Přidat cizí klíč'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggery'."</h3>\n";$Lb=triggers($h);if($Lb){echo"<table cellspacing='0'>\n";foreach($Lb
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($h).'&name='.urlencode($c))."'>".'Změnit'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($h).'">'.'Přidat trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schéma databáze',"",array(),DB);$cb=array();$se=array();preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$_COOKIE["adminer_schema"],$ca,PREG_SET_ORDER);foreach($ca
as$g=>$l){$cb[$l[1]]=array($l[2],$l[3]);$se[]="\n\t'".addcslashes($l[1],"\r\n'\\/")."': [ $l[2], $l[3] ]";}$vb=0;$we=-1;$Ra=array();$xe=array();$ve=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$Pb=0;$Ra[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$Pb+=1.25;$d["pos"]=$Pb;$Ra[$a["Name"]]["fields"][$f]=$d;}$Ra[$a["Name"]]["pos"]=($cb[$a["Name"]]?$cb[$a["Name"]]:array($vb,0));if(fk_support($a)){foreach(foreign_keys($a["Name"])as$b){if(!$b["db"]){$ia=$we;if($cb[$a["Name"]][1]||$cb[$b["table"]][1]){$ia=min(floatval($cb[$a["Name"]][1]),floatval($cb[$b["table"]][1]))-1;}else{$we-=.1;}while($ve[(string)$ia]){$ia-=.0001;}$Ra[$a["Name"]]["references"][$b["table"]][(string)$ia]=array($b["source"],$b["target"]);$xe[$b["table"]][$a["Name"]][(string)$ia]=$b["target"];$ve[(string)$ia]=true;}}}$vb=max($vb,$Ra[$a["Name"]]["pos"][0]+2.5+$Pb);}echo'<div id="schema" style="height: ',$vb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$se)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$vb,';
document.onmousemove = schemaMousemove;
document.onmouseup = schemaMouseup;
</script>
';foreach($Ra
as$f=>$m){echo"<div class='table' style='top: ".$m["pos"][0]."em; left: ".$m["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($m["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$m["references"]as$sb=>$Ub){foreach($Ub
as$ia=>$jc){$Sb=$ia-$cb[$f][1];$g=0;foreach($jc[0]as$qa){echo"<div class='references' title='".h($sb)."' id='refs$ia-".($g++)."' style='left: $Sb"."em; top: ".$m["fields"][$qa]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Sb)."em;'></div></div>\n";}}}foreach((array)$xe[$f]as$sb=>$Ub){foreach($Ub
as$ia=>$w){$Sb=$ia-$cb[$f][1];$g=0;foreach($w
as$La){echo"<div class='references' title='".h($sb)."' id='refd$ia-".($g++)."' style='left: $Sb"."em; top: ".$m["fields"][$La]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=arrow.gif) no-repeat right center;&amp;version=3.0.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Sb)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ra
as$f=>$m){foreach((array)$m["references"]as$sb=>$Ub){foreach($Ub
as$ia=>$jc){$fc=$vb;$ad=-10;foreach($jc[0]as$c=>$qa){$De=$m["pos"][0]+$m["fields"][$qa]["pos"];$_e=$Ra[$sb]["pos"][0]+$Ra[$sb]["fields"][$jc[1][$c]]["pos"];$fc=min($fc,$De,$_e);$ad=max($ad,$De,$_e);}echo"<div class='references' id='refl$ia' style='left: $ia"."em; top: $fc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ad-$fc)."em;'></div></div>\n";}}}echo'</div>
';}elseif(isset($_GET["dump"])){$h=$_GET["dump"];if($_POST){$Ae="";foreach(array("output","format","db_style","table_style","data_style")as$c){$Ae.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($Ae,1));$ib=dump_headers(($h!=""?$h:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));if($_POST["format"]=="sql"){echo"-- Adminer $xc ".$ua[DRIVER]." dump

".($u!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($i->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$H=$_POST["db_style"];$z=array(DB);if(DB==""){$z=$_POST["databases"];if(is_string($z)){$z=explode("\n",rtrim(str_replace("\r","",$z),"\n"));}}foreach((array)$z
as$x){if($i->select_db($x)){if($_POST["format"]=="sql"&&ereg('CREATE',$H)&&($Y=$i->result("SHOW CREATE DATABASE ".idf_escape($x),1))){if($H=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($x).";\n";}echo($H=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$Y):$Y).";\n";}if($_POST["format"]=="sql"){if($H){echo
use_sql($x).";\n\n";}if(in_array("CREATE+ALTER",array($H,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Pa="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ca){foreach(get_rows("SHOW $Ca STATUS WHERE Db = ".q($x),null,"-- ")as$a){$Pa.=($H!='DROP+CREATE'?"DROP $Ca IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE $Ca ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$Pa.=($H!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($Pa){echo"DELIMITER ;;\n\n$Pa"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$ab=array();foreach(table_status()as$a){$m=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Sd=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($m||$Sd){if(!is_view($a)){if($ib=="tar"){ob_start();}dump_table($a["Name"],($m?$_POST["table_style"]:""));if($Sd){dump_data($a["Name"],$_POST["data_style"]);}if($_POST["format"]=="sql"&&$_POST["triggers"]){$Lb=trigger_sql($a["Name"],$_POST["table_style"]);if($Lb){echo"\nDELIMITER ;;\n$Lb\nDELIMITER ;\n";}}if($ib=="tar"){echo
tar_file((DB!=""?"":"$x/")."$a[Name].csv",ob_get_clean());}elseif($_POST["format"]=="sql"){echo"\n";}}elseif($_POST["format"]=="sql"){$ab[]=$a["Name"];}}}foreach($ab
as$hc){dump_table($hc,$_POST["table_style"],true);}if($ib=="tar"){echo
pack("x512");}}if($H=="CREATE+ALTER"&&$_POST["format"]=="sql"){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($j)as$a){$Ya=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $Ya THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$Ya;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($H,$_POST["table_style"]))&&$_POST["format"]=="sql"){echo"SELECT @adminer_alter;\n";}}}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Bd=array('','USE','DROP+CREATE','CREATE');$vd=array('','DROP+CREATE','CREATE');$wd=array('','TRUNCATE+INSERT','INSERT');if($u=="sql"){$Bd[]='CREATE+ALTER';$vd[]='CREATE+ALTER';$wd[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}$sa=($_GET["dump"]=="");echo"<tr><th>".'Výstup'."<td>".$q->dumpOutput(0,$a["output"])."\n","<tr><th>".'Formát'."<td>".$q->dumpFormat(0,$a["format"])."\n",($u=="sqlite"?"":"<tr><th>".'Databáze'."<td>".html_select('db_style',$Bd,$a["db_style"]).(support("routine")?checkbox("routines",1,$sa,'Procedury a funkce'):"").(support("event")?checkbox("events",1,$sa,'Události'):"")),"<tr><th>".'Tabulky'."<td>".html_select('table_style',$vd,$a["table_style"]).checkbox("auto_increment",1,$a["table_style"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["table_style"],'Triggery'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$wd,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$id=array();if(DB!=""){$sa=($h!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$sa onclick='formCheck(this, /^tables\\[/);'>".'Tabulky'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$sa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$ab="";foreach(table_status()as$a){$f=$a["Name"];$Rb=ereg_replace("_.*","",$f);$sa=($h==""||$h==(substr($h,-1)=="%"?"$Rb%":$f));$Mb="<tr><td>".checkbox("tables[]",$f,$sa,$f,"formUncheck('check-tables');");if(is_view($a)){$ab.="$Mb\n";}else{echo"$Mb<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$sa,"","formUncheck('check-data');")."</label>\n";}$id[$Rb]++;}echo$ab;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($h==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Databáze'."</label></thead>\n";$z=get_databases();if($z){foreach($z
as$x){if(!information_schema($x)){$Rb=ereg_replace("_.*","",$x);echo"<tr><td>".checkbox("databases[]",$x,$h==""||$h=="$Rb%",$x,"formUncheck('check-databases');")."</label>\n";$id[$Rb]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20' onkeydown='return textareaKeydown(this, event);'></textarea>";}}echo'</table>
</form>
';$Qa=true;foreach($id
as$c=>$b){if($c!=""&&$b>1){echo($Qa?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$Qa=false;}}}elseif(isset($_GET["privileges"])){page_header('Oprávnění');$k=$i->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$k){echo'<form action=""><p>
';hidden_fields_get();echo'Uživatel: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Upravit">
</form>
';$k=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Uživatel'."<th>".'Server'."</thead>\n";while($a=$k->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'upravit'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Vytvořit uživatele'."</a>";}elseif(isset($_GET["sql"])){restart_session();$Je=&get_session("queries");$Na=&$Je[DB];if(!$p&&$_POST["clear"]){$Na=array();redirect(remove_from_uri("history"));}page_header('SQL příkaz',$p);if(!$p&&$_POST){$ta=false;$j=$_POST["query"];if($_POST["webfile"]){$ta=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($ta?fread($ta,1e6):false);}elseif($_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6&&(!$Na||end($Na)!=$j)){$Na[]=$j;}$qc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Ic=";";$ea=0;$td=true;$L=connect();if(is_object($L)&&DB!=""){$L->select_db(DB);}$Bb=0;$Qc="";while($j!=""){if(!$ea&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$l)){$Ic=$l[1];$j=substr($j,strlen($l[0]));}else{preg_match('('.preg_quote($Ic).'|[\'`"]|/\\*|-- |#|$)',$j,$l,PREG_OFFSET_CAPTURE,$ea);$da=$l[0][0];$ea=$l[0][1]+strlen($da);if(!$da&&$ta&&!feof($ta)){$j.=fread($ta,1e5);}else{if(!$da&&rtrim($j)==""){break;}if(!$da||$da==$Ic){$td=false;$ja=substr($j,0,$l[0][1]);$Bb++;echo"<pre class='jush-$u' id='sql-$Bb'>".shorten_utf8(trim($ja),1000)."</pre>\n";ob_flush();flush();$Uc=explode(" ",microtime());if(!$i->multi_query($ja)){echo"<p class='error'>".'Chyba v dotazu'.": ".error()."\n";$Qc.=" <a href='#sql-$Bb'>$Bb</a>";if($_POST["error_stops"]){break;}}else{if(is_object($L)&&preg_match("~^$qc*(USE)\\b~isU",$ja)){$L->query($ja);}do{$k=$i->store_result();$Xc=explode(" ",microtime());$Kd=" <span class='time'>(".sprintf('%.3f s',max(0,$Xc[0]-$Uc[0]+$Xc[1]-$Uc[1])).")</span>";if(is_object($k)){select($k,$L);echo"<p>".($k->num_rows?lang(array('%d řádek','%d řádky','%d řádků'),$k->num_rows):"").$Kd;if($L&&preg_match("~^($qc|\\()*SELECT\\b~isU",$ja)){$E="explain-$Bb";echo", <a href='#$E' onclick=\"return !toggle('$E');\">EXPLAIN</a>\n","<div id='$E' class='hidden'>\n";select(explain($L,$ja));echo"</div>\n";}}else{if(preg_match("~^$qc*(CREATE|DROP|ALTER)$qc+(DATABASE|SCHEMA)\\b~isU",$ja)){restart_session();set_session("dbs",null);session_write_close();}echo"<p class='message' title='".h($i->info)."'>".lang(array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),$i->affected_rows)."$Kd\n";}$Uc=$Xc;}while($i->next_result());}$j=substr($j,$ea);$ea=0;}else{while(preg_match('~'.($da=='/*'?'\\*/':(ereg('-- |#',$da)?"\n":"$da|\\\\.")).'|$~s',$j,$l,PREG_OFFSET_CAPTURE,$ea)){$S=$l[0][0];$ea=$l[0][1]+strlen($S);if(!$S&&$ta&&!feof($ta)){$j.=fread($ta,1e6);}elseif($S[0]!="\\"){break;}}}}}}if($Qc&&$Bb>1){echo"<p class='error'>".'Chyba v dotazu'.": $Qc\n";}if($td){echo"<p class='message'>".'Žádné příkazy k vykonání.'."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$ja=$_GET["sql"];if($_POST){$ja=$_POST["query"];}elseif($_GET["history"]!=""){$ja=$Na[$_GET["history"]];}textarea("query",$ja,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Nahrání souboru'.': <input type="file" name="sql_file">':'Nahrávání souborů není povoleno.'),'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Provést" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Zastavit při chybě');print_fieldset("webfile",'Ze serveru',$_POST["webfile"]);$Yc=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$Yc[]=".$c";}}echo
sprintf('Soubor %s na webovém serveru',"<code>adminer.sql".($Yc?"[".implode("|",$Yc)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustit soubor'.'">',"</div></fieldset>\n";if($Na){print_fieldset("history",'Historie',$_GET["history"]!="");foreach($Na
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.'Upravit'."</a> <code class='jush-$u'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Vyčistit'."'>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$h=$_GET["edit"];$y=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Ga=(isset($_GET["select"])?$_POST["edit"]:$y);$o=fields($h);foreach($o
as$f=>$d){if(!isset($d["privileges"][$Ga?"update":"insert"])||$q->fieldName($d)==""){unset($o[$f]);}}if($_POST&&!$p&&!isset($_GET["select"])){$U=$_POST["referer"];if($_POST["insert"]){$U=($Ga?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$U)){$U=ME."select=".urlencode($h);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($h)," WHERE $y"),$U,'Položka byla smazána.');}else{$t=array();foreach($o
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$t[idf_escape($f)]=($Ga?"\n".idf_escape($f)." = $b":$b);}}if($Ga){if(!$t){redirect($U);}query_redirect("UPDATE".limit1(table($h)." SET".implode(",",$t),"\nWHERE $y"),$U,'Položka byla aktualizována.');}else{$k=insert_into($h,$t);$Id=($k?last_id():0);queries_redirect($U,sprintf('Položka%s byla vložena.',($Id?" $Id":"")),$k);}}}$oa=$q->tableName(table_status($h));page_header(($Ga?'Upravit':'Vložit'),$p,array("select"=>array($h,$oa)),$oa);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($y){$v=array();foreach($o
as$f=>$d){if(isset($d["privileges"]["select"])){$v[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($v){$D=get_rows("SELECT".limit(implode(", ",$v)." FROM ".table($h)," WHERE $y",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($D)!=1?null:reset($D));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($o){echo"<table cellspacing='0'>\n";foreach($o
as$f=>$d){echo"<tr><th>".$q->fieldName($d);$Fa=$_GET["set"][bracket_escape($f)];$n=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?intval($a[$f]):$a[$f]):(!$Ga&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Fa)?$Fa:$d["default"]))));if(!$_POST["save"]&&is_string($n)){$n=$q->editVal($n,$d);}$B=($_POST["save"]?(string)$_POST["function"][$f]:($y&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($n===false?null:(isset($n)?'':'NULL'))));if($d["type"]=="timestamp"&&$n=="CURRENT_TIMESTAMP"){$n="";$B="now";}input($d,$n,$B);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($o){echo"<input type='submit' value='".'Uložit'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($Ga?'Uložit a pokračovat v editaci':'Uložit a vložit další')."\">\n";}}if($Ga){echo"<input type='submit' name='delete' value='".'Smazat'."'$db>\n";}echo'</form>
';}elseif(isset($_GET["create"])){$h=$_GET["create"];$Ld=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$yd=referencable_primary($h);$J=array();foreach($yd
as$oa=>$d){$J[str_replace("`","``",$oa)."`".str_replace("`","``",$d["field"])]=$oa;}$pc=array();$oc=array();if($h!=""){$pc=fields($h);$oc=table_status($h);}if($_POST&&!$p&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($h),substr(ME,0,-1),'Tabulka byla odstraněna.');}else{$o=array();$yc=array();ksort($_POST["fields"]);$Mc=reset($pc);$pb="FIRST";foreach($_POST["fields"]as$c=>$d){$F=$J[$d["type"]];$rc=(isset($F)?$yd[$F]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$Fa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Fa!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Fa;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Nd=process_field($d,$rc);if($Nd!=process_field($Mc,$Mc)){$o[]=array($d["orig"],$Nd,$pb);}if(isset($F)){$yc[]=($h!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".idf_escape($J[$d["type"]])." (".idf_escape($rc["field"]).")".(in_array($d["on_delete"],$Ma)?" ON DELETE $d[on_delete]":"");}$pb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$o[]=array($d["orig"]);}if($d["orig"]!=""){$Mc=next($pc);}}$Yb="";if(in_array($_POST["partition_by"],$Ld)){$ld=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$n=$_POST["partition_values"][$c];$ld[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($n!=""?" ($n)":" MAXVALUE");}}$Yb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($ld?" (".implode(",",$ld)."\n)":($_POST["partitions"]?" PARTITIONS ".intval($_POST["partitions"]):""));}elseif($h!=""&&support("partitioning")){$Yb.="\nREMOVE PARTITIONING";}$ma='Tabulka byla změněna.';if($h==""){cookie("adminer_engine",$_POST["Engine"]);$ma='Tabulka byla vytvořena.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ma,alter_table($h,$_POST["name"],$o,$yc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$oc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$oc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?preg_replace('~\\D+~','',$_POST["Auto_increment"]):""),$Yb));}}page_header(($h!=""?'Pozměnit tabulku':'Vytvořit tabulku'),$p,array("table"=>$h),$h);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"")),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($h!=""){$a=$oc;$a["name"]=$h;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($pc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$zb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($h);$k=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $zb ORDER BY PARTITION_ORDINAL_POSITION LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$k->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $zb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Gd){$a["partition_names"][]=$Gd["PARTITION_NAME"];$a["partition_values"][]=$Gd["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$R=collations();$cd=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($cd&&count($a["fields"])>$cd){echo"<p class='error'>".h(sprintf('Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$bd=engines();foreach($bd
as$Xb){if(!strcasecmp($Xb,$a["Engine"])){$a["Engine"]=$Xb;break;}}echo'
<form action="" method="post" id="form">
<p>
Název tabulky: <input name="name" maxlength="64" value="',h($a["name"]),'">
',($bd?html_select("Engine",array(""=>"(".'úložiště'.")")+$bd,$a["Engine"]):""),' ',($R&&!ereg("sqlite|mssql",$u)?html_select("Collation",array(""=>"(".'porovnávání'.")")+$R,$a["Collation"]):""),' <input type="submit" value="Uložit">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$qb=edit_fields($a["fields"],$R,"TABLE",$cd,$J,$a["Comment"]!="");echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]);?>">
<script type="text/javascript">
document.write('<label><input type="checkbox" onclick="columnShow(this.checked, 5);">Výchozí hodnoty<\/label>');
</script>
<?php echo(support("comment")?checkbox("","",$qb,'Komentář',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($qb?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložit">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="Odstranit"',$db,'>';}if(support("partitioning")){$Ad=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Rozdělit podle',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Ld,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Oddíly: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($Ad||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Ad?"":" class='hidden'"),'>
<thead><tr><th>Název oddílu<th>Hodnoty</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$h=$_GET["indexes"];$ic=array("PRIMARY","UNIQUE","INDEX");$M=table_status($h);if(ereg("MyISAM|Maria",$M["Engine"])){$ic[]="FULLTEXT";}$_=indexes($h);if($u=="sqlite"){unset($ic[0]);unset($_[""]);}if($_POST&&!$p&&!$_POST["add"]){$ba=array();foreach($_POST["indexes"]as$s){if(in_array($s["type"],$ic)){$w=array();$wb=array();$t=array();ksort($s["columns"]);foreach($s["columns"]as$c=>$wa){if($wa!=""){$Ia=$s["lengths"][$c];$t[]=idf_escape($wa).($Ia?"(".intval($Ia).")":"");$w[]=$wa;$wb[]=($Ia?$Ia:null);}}if($w){foreach($_
as$f=>$gb){ksort($gb["columns"]);ksort($gb["lengths"]);if($s["type"]==$gb["type"]&&array_values($gb["columns"])===$w&&(!$gb["lengths"]||array_values($gb["lengths"])===$wb)){unset($_[$f]);continue
2;}}$ba[]=array($s["type"],"(".implode(", ",$t).")");}}}foreach($_
as$f=>$gb){$ba[]=array($gb["type"],idf_escape($f),"DROP");}if(!$ba){redirect(ME."table=".urlencode($h));}queries_redirect(ME."table=".urlencode($h),'Indexy byly změněny.',alter_indexes($h,$ba));}page_header('Indexy',$p,array("table"=>$h),$h);$o=array_keys(fields($h));$a=array("indexes"=>$_);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$s){if($s["columns"][count($s["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$s=end($a["indexes"]);if($s["type"]||array_filter($s["columns"],'strlen')||array_filter($s["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$s){$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indexu<th>Sloupec (délka)</thead>
';$X=1;foreach($a["indexes"]as$s){echo"<tr><td>".html_select("indexes[$X][type]",array(-1=>"")+$ic,$s["type"],($X==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($s["columns"]);$g=1;foreach($s["columns"]as$wa){echo"<span>".html_select("indexes[$X][columns][$g]",array(-1=>"")+$o,$wa,($g==count($s["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$X][lengths][$g]' size='2' value='".h($s["lengths"][$g])."'> </span>";$g++;}$X++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat další"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$p&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Databáze byla odstraněna.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Databáze byla přejmenována.',rename_database($_POST["name"],$_POST["collation"]));}else{$z=explode("\n",str_replace("\r","",$_POST["name"]));$Dd=true;$Va="";foreach($z
as$x){if(count($z)==1||$x!=""){if(!create_database($x,$_POST["collation"])){$Dd=false;}$Va=$x;}}queries_redirect(ME."db=".urlencode($Va),'Databáze byla vytvořena.',$Dd);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Databáze byla změněna.');}}page_header(DB!=""?'Pozměnit databázi':'Vytvořit databázi',$p,array(),DB);$R=collations();$f=DB;$Kb=null;if($_POST){$f=$_POST["name"];$Kb=$_POST["collation"];}elseif(DB!=""){$Kb=db_collation(DB,$R);}elseif($u=="sql"){foreach(get_vals("SHOW GRANTS")as$N){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$N,$l)&&$l[1]){$f=stripcslashes(idf_unescape("`$l[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea name="name" rows="10" cols="40" onkeydown="return textareaKeydown(this, event);">'.h($f).'</textarea><br>':'<input name="name" value="'.h($f).'" maxlength="64">')."\n".($R?html_select("collation",array(""=>"(".'porovnávání'.")")+$R,$Kb):""),'<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložit">
';if(DB!=""){echo"<input type='submit' name='drop' value='".'Odstranit'."'$db>\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.1' alt='+' title='".'Přidat další'."'>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Ba=$_GET["call"];page_header('Zavolat'.": ".h($Ba),$p);$Ca=routine($Ba,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$mb=array();$Pa=array();foreach($Ca["fields"]as$g=>$d){if(substr($d["inout"],-3)=="OUT"){$Pa[$g]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$mb[]=$g;}}if(!$p&&$_POST){$Md=array();foreach($Ca["fields"]as$c=>$d){if(in_array($c,$mb)){$b=process_input($d);if($b===false){$b="''";}if(isset($Pa[$c])){$i->query("SET @".idf_escape($d["field"])." = $b");}}$Md[]=(isset($Pa[$c])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Ba)."(".implode(", ",$Md).")";echo"<p><code class='jush-$u'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upravit'."</a>\n";if(!$i->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$k=$i->store_result();if(is_object($k)){select($k);}else{echo"<p class='message'>".lang(array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),$i->affected_rows)."\n";}}while($i->next_result());if($Pa){select($i->query("SELECT ".implode(", ",$Pa)));}}}echo'
<form action="" method="post">
';if($mb){echo"<table cellspacing='0'>\n";foreach($mb
as$c){$d=$Ca["fields"][$c];$f=$d["field"];echo"<tr><th>".$q->fieldName($d);$n=$_POST["fields"][$f];if($n!=""&&ereg("enum|set",$d["type"])){$n=intval($n);}input($d,$n,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Zavolat">
</form>
';}elseif(isset($_GET["foreign"])){$h=$_GET["foreign"];if($_POST&&!$p&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($h)."\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($h),'Cizí klíč byl odstraněn.');}else{$qa=array_filter($_POST["source"],'strlen');ksort($qa);$La=array();foreach($qa
as$c=>$b){$La[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($h).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$qa)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$La)).")".(in_array($_POST["on_delete"],$Ma)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$Ma)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($h),($_GET["name"]!=""?'Cizí klíč byl změněn.':'Cizí klíč byl vytvořen.'));$p='Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.'."<br>$p";}}page_header('Cizí klíč',$p,array("table"=>$h),$h);$a=array("table"=>$h,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$J=foreign_keys($h);$a=$J[$_GET["name"]];$a["source"][]="";}$qa=array_keys(fields($h));$La=($h===$a["table"]?$qa:array_keys(fields($a["table"])));$Ed=array();foreach(table_status()as$f=>$M){if(fk_support($M)){$Ed[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo'Cílová tabulka:
',html_select("table",$Ed,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Změnit"></noscript>
<table cellspacing="0">
<thead><tr><th>Zdroj<th>Cíl</thead>
';$X=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".intval($c)."]",array(-1=>"")+$qa,$b,($X==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".intval($c)."]",$La,$a["target"][$c]);$X++;}echo'</table>
<p>
Při smazání: ',html_select("on_delete",array(-1=>"")+$Ma,$a["on_delete"]),' Při změně: ',html_select("on_update",array(-1=>"")+$Ma,$a["on_update"]),'<p>
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat sloupec"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',$db,'>';}echo'<input type="hidden" name="token" value="',$C,'">
</form>
';}elseif(isset($_GET["view"])){$h=$_GET["view"];$Ea=false;if($_POST&&!$p){$Ea=drop_create("DROP VIEW ".table($h),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.',$h);}page_header(($h!=""?'Pozměnit pohled':'Vytvořit pohled'),$p,array("table"=>$h),$h);$a=array();if($_POST){$a=$_POST;}elseif($h!=""){$a=view($h);$a["name"]=$h;}echo'
<form action="" method="post">
<p>Název: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
';if($Ea){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
</form>
';}elseif(isset($_GET["event"])){$Ua=$_GET["event"];$Fd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Lc=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$p){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Ua),substr(ME,0,-1),'Událost byla odstraněna.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Fd)&&isset($Lc[$_POST["STATUS"]])){$Cd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($Ua!=""?"ALTER EVENT ".idf_escape($Ua).$Cd.($Ua!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Cd)."\n".$Lc[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($Ua!=""?'Událost byla změněna.':'Událost byla vytvořena.'));}}page_header(($Ua!=""?'Pozměnit událost'.": ".h($Ua):'Vytvořit událost'),$p);$a=array();if($_POST){$a=$_POST;}elseif($Ua!=""){$D=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($Ua));$a=reset($D);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Název<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Začátek<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Konec<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Každých<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Fd,$a["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$Lc,$a["STATUS"]),'<tr><th>Komentář<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Po dokončení zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložit">
';if($Ua!=""){echo'<input type="submit" name="drop" value="Odstranit"',$db,'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Ba=$_GET["procedure"];$Ca=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Ea=false;if($_POST&&!$p&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$t=array();$o=(array)$_POST["fields"];ksort($o);foreach($o
as$d){if($d["field"]!=""){$t[]=(in_array($d["inout"],$Zb)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Ea=drop_create("DROP $Ca ".idf_escape($Ba),"CREATE $Ca ".idf_escape($_POST["name"])." (".implode(", ",$t).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),'Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.',$Ba);}page_header(($Ba!=""?(isset($_GET["function"])?'Změnit funkci':'Změnit proceduru').": ".h($Ba):(isset($_GET["function"])?'Vytvořit funkci':'Vytvořit proceduru')),$p);$R=get_vals("SHOW CHARACTER SET");sort($R);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Ba!=""){$a=routine($Ba,$Ca);$a["name"]=$Ba;}echo'
<form action="" method="post" id="form">
<p>Název: <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$R,$Ca);if(isset($_GET["function"])){echo"<tr><td>".'Návratový typ';edit_type("returns",$a["returns"],$R);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
';if($Ea){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
';if($Ba!=""){echo'<input type="submit" name="drop" value="Odstranit"',$db,'>';}echo'</form>
';}elseif(isset($_GET["type"])){$sc=$_GET["type"];if($_POST&&!$p){$A=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($sc),$A,'Typ byl odstraněn.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$A,'Typ byl vytvořen.');}}page_header($sc!=""?'Pozměnit typ'.": ".h($sc):'Vytvořit typ',$p);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$C,'">
';if($sc!=""){echo"<input type='submit' name='drop' value='".'Odstranit'."'$db>\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Uložit'."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$h=$_GET["trigger"];$Fc=trigger_options();$zd=array("INSERT","UPDATE","DELETE");$Ea=false;if($_POST&&!$p&&in_array($_POST["Timing"],$Fc["Timing"])&&in_array($_POST["Event"],$zd)&&in_array($_POST["Type"],$Fc["Type"])){$_d=" $_POST[Timing] $_POST[Event]";$eb=" ON ".table($h);$Ea=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($u=="pgsql"?$eb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($u=="mssql"?$eb.$_d:$_d.$eb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($h),'Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Změnit trigger'.": ".h($_GET["name"]):'Vytvořit trigger'),$p,array("table"=>$h));$a=array("Trigger"=>$h."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Čas<td>',html_select("Timing",$Fc["Timing"],$a["Timing"],"if (/^".h(preg_quote($h,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(addcslashes($h,"\r\n'\\"))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Událost<td>',html_select("Event",$zd,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$Fc["Type"],$a["Type"]),'</table>
<p>Název: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
';if($Ea){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',$db,'>';}echo'</form>
';}elseif(isset($_GET["user"])){$fd=$_GET["user"];$W=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Hc){$W[$Hc][$a["Privilege"]]=$a["Comment"];}}$W["Server Admin"]+=$W["File access on server"];$W["Databases"]["Create routine"]=$W["Procedures"]["Create routine"];unset($W["Procedures"]["Create routine"]);$W["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$W["Columns"][$b]=$W["Tables"][$b];}unset($W["Server Admin"]["Usage"]);foreach($W["Tables"]as$c=>$b){unset($W["Databases"][$c]);}$Ib=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$Ib[$b]=(array)$Ib[$b]+(array)$_POST["grants"][$c];}}$Oa=array();$wc="";if(isset($_GET["host"])&&($k=$i->query("SHOW GRANTS FOR ".q($fd)."@".q($_GET["host"])))){while($a=$k->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$l)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$l[1],$ca,PREG_SET_ORDER)){foreach($ca
as$b){if($b[1]!="USAGE"){$Oa["$l[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Oa["$l[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$l)){$wc=$l[1];}}}if($_POST&&!$p){$yb=(isset($_GET["host"])?q($fd)."@".q($_GET["host"]):"''");$Ja=q($_POST["user"])."@".q($_POST["host"]);$hd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $yb",ME."privileges=",'Uživatel byl odstraněn.');}else{if($yb!=$Ja){$p=!queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ja IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $hd");}elseif($_POST["pass"]!=$wc||!$_POST["hashed"]){queries("SET PASSWORD FOR $Ja = ".($_POST["hashed"]?$hd:"PASSWORD($hd)"));}if(!$p){$cc=array();foreach($Ib
as$Ha=>$N){if(isset($_GET["grant"])){$N=array_filter($N);}$N=array_keys($N);if(isset($_GET["grant"])){$cc=array_diff(array_keys(array_filter($Ib[$Ha],'strlen')),$N);}elseif($yb==$Ja){$Hd=array_keys((array)$Oa[$Ha]);$cc=array_diff($Hd,$N);$N=array_diff($N,$Hd);unset($Oa[$Ha]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ha,$l)&&(!grant("REVOKE",$cc,$l[2]," ON $l[1] FROM $Ja")||!grant("GRANT",$N,$l[2]," ON $l[1] TO $Ja"))){$p=true;break;}}}if(!$p&&isset($_GET["host"])){if($yb!=$Ja){queries("DROP USER $yb");}elseif(!isset($_GET["grant"])){foreach($Oa
as$Ha=>$cc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ha,$l)){grant("REVOKE",array_keys($cc),$l[2]," ON $l[1] FROM $Ja");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Uživatel byl změněn.':'Uživatel byl vytvořen.'),!$p);if($yb!=$Ja){$i->query("DROP USER $Ja");}}}page_header((isset($_GET["host"])?'Uživatel'.": ".h("$fd@$_GET[host]"):'Vytvořit uživatele'),$p,array("privileges"=>array('','Oprávnění')));if($_POST){$a=$_POST;$Oa=$Ib;}else{$a=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$wc;if($wc!=""){$a["hashed"]=true;}$Oa[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Uživatel<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Heslo<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Zahašované',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html'>".'Oprávnění'."</a>";$g=0;foreach($Oa
as$Ha=>$N){echo'<th>'.($Ha!="*.*"?"<input name='objects[$g]' value='".h($Ha)."' size='10'>":"<input type='hidden' name='objects[$g]' value='*.*' size='10'>*.*");$g++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Databáze',"Tables"=>'Tabulka',"Columns"=>'Sloupec',"Procedures"=>'Procedura',)as$Hc=>$Fb){foreach((array)$W[$Hc]as$dc=>$Ya){echo"<tr".odd()."><td".($Fb?">$Fb<td":" colspan='2'").' lang="en" title="'.h($Ya).'">'.h($dc);$g=0;foreach($Oa
as$Ha=>$N){$f="'grants[$g][".h(strtoupper($dc))."]'";$n=$N[strtoupper($dc)];if($Hc=="Server Admin"&&$Ha!=(isset($Oa["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($n?" selected":"").">".'Povolit'."<option value='0'".($n=="0"?" selected":"").">".'Zakázat'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($n?" checked":"").($dc=="All privileges"?" id='grants-$g-all'":($dc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$g-all');\"")).">";}$g++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložit">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstranit"',$db,'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$p){$jd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".ereg_replace("[^0-9]+","",$b))){$jd++;}}queries_redirect(ME."processlist=",lang(array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),$jd),$jd||!$_POST["kill"]);}page_header('Seznam procesů',$p);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';foreach(get_rows("SHOW FULL PROCESSLIST")as$g=>$a){if(!$g){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0)."<td>".implode("<td>",array_map('nbsp',$a))."\n";}echo'</table>
<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Ukončit">
</form>
';}elseif(isset($_GET["select"])){$h=$_GET["select"];$M=table_status($h);$_=indexes($h);$o=fields($h,1);$J=column_foreign_keys($h);$Od=array();$w=array();$hb=null;foreach($o
as$c=>$d){$f=$q->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$w[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$hb=$q->selectLengthProcess();}}$Od+=$d["privileges"];}list($v,$ga)=$q->selectColumnsProcess($w,$_);$y=$q->selectSearchProcess($o,$_);$Za=$q->selectOrderProcess($o,$_);$T=$q->selectLimitProcess();$zb=($v?implode(", ",$v):"*")."\nFROM ".table($h);$Zc=($ga&&count($ga)<count($v)?"\nGROUP BY ".implode(", ",$ga):"").($Za?"\nORDER BY ".implode(", ",$Za):"");if($_POST&&!$p){$Pd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$vc=$zc=null;foreach($_
as$s){if($s["type"]=="PRIMARY"){$vc=array_flip($s["columns"]);$zc=($v?$vc:array());break;}}foreach($v
as$c=>$b){$b=$_GET["columns"][$c];if(!$b["fun"]){unset($zc[$b["col"]]);}}if($_POST["export"]){dump_headers($h);dump_table($h,"");if($_POST["format"]!="sql"){$a=array_keys($o);if($v){$a=array();foreach($v
as$b){$a[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($a);}if(!is_array($_POST["check"])||$zc===array()){$Kc=$y;if(is_array($_POST["check"])){$Kc[]="($Pd)";}dump_data($h,"INSERT","SELECT $zb".($Kc?"\nWHERE ".implode(" AND ",$Kc):"").$Zc);}else{$Jd=array();foreach($_POST["check"]as$b){$Jd[]="(SELECT".limit($zb,"\nWHERE ".($y?implode(" AND ",$y)." AND ":"").where_check($b).$Zc,1).")";}dump_data($h,"INSERT",implode(" UNION ALL ",$Jd));}exit;}if(!$q->selectEmailProcess($y,$J)){if($_POST["save"]||$_POST["delete"]){$k=true;$Xa=0;$j=table($h);$t=array();if(!$_POST["delete"]){foreach($w
as$f=>$b){$b=process_input($o[$f]);if($b!==null){if($_POST["clone"]){$t[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$t[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($t)).")\nSELECT ".implode(", ",$t)."\nFROM ".table($h):" SET\n".implode(",\n",$t));}if($_POST["delete"]||$t){$Bc="UPDATE";if($_POST["delete"]){$Bc="DELETE";$j="FROM $j";}if($_POST["clone"]){$Bc="INSERT";$j="INTO $j";}if($_POST["all"]||($zc===array()&&$_POST["check"])||count($ga)<count($v)){$k=queries($Bc." $j".($_POST["all"]?($y?"\nWHERE ".implode(" AND ",$y):""):"\nWHERE $Pd"));$Xa=$i->affected_rows;}else{foreach((array)$_POST["check"]as$b){$k=queries($Bc.limit1($j,"\nWHERE ".where_check($b)));if(!$k){break;}$Xa+=$i->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$Xa),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$p='Dvojklikněte na políčko, které chcete změnit.';}else{$k=true;$Xa=0;foreach($_POST["val"]as$bb=>$a){$t=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$t[]=idf_escape($c)." = ".(ereg('char|text',$o[$c]["type"])||$b!=""?$q->processInput($o[$c],$b):"NULL");}$k=queries("UPDATE".limit1(table($h)." SET ".implode(", ",$t)," WHERE ".where_check($bb).($y?" AND ".implode(" AND ",$y):"")));if(!$k){break;}$Xa+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$Xa),$k);}}elseif(is_string($Z=get_file("csv_file",true))){$Z=preg_replace("~^\xEF\xBB\xBF~",'',$Z);$k=true;$Ta=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Z,$ca);$Xa=count($ca[0]);begin();$Vb=($_POST["separator"]=="csv"?",":";");foreach($ca[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Vb]*)$Vb~",$b.$Vb,$Tc);if(!$c&&!array_diff($Tc[1],$Ta)){$Ta=$Tc[1];$Xa--;}else{$t=array();foreach($Tc[1]as$g=>$kc){$t[idf_escape($Ta[$g])]=($kc==""&&$o[$Ta[$g]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$kc))));}$k=insert_update($h,$t,$vc);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),$Xa),$k);queries("ROLLBACK");}else{$p=upload_error($Z);}}}$oa=$q->tableName($M);page_header('Vypsat'.": $oa",$p);session_write_close();$t=null;if(isset($Od["insert"])){$t="";foreach((array)$_GET["where"]as$b){if(count($J[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$t.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$q->selectLinks($M,$t);if(!$w){echo"<p class='error'>".'Nepodařilo se vypsat tabulku'.($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($h).'">',"</div>\n";$q->selectColumnsPrint($v,$w);$q->selectSearchPrint($y,$w,$_);$q->selectOrderPrint($Za,$w,$_);$q->selectLimitPrint($T);$q->selectLengthPrint($hb);$q->selectActionPrint($hb);echo"</form>\n";$I=$_GET["page"];if($I=="last"){$za=$i->result("SELECT COUNT(*) FROM ".table($h).($y?" WHERE ".implode(" AND ",$y):""));$I=floor(($za-1)/$T);}$j="SELECT".limit((intval($T)&&$ga&&count($ga)<count($v)&&$u=="sql"?"SQL_CALC_FOUND_ROWS ":"").$zb,($y?"\nWHERE ".implode(" AND ",$y):"").$Zc,($T!=""?intval($T):null),($I?$T*$I:0),"\n");echo$q->selectQuery($j);$k=$i->query($j);if(!$k){echo"<p class='error'>".error()."\n";}else{if($u=="mssql"){$k->seek($T*$I);}$_c=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$D=array();while($a=$k->fetch_assoc()){$D[]=$a;}if($_GET["page"]!="last"){$za=(intval($T)&&$ga&&count($ga)<count($v)?($u=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($j) x")):count($D));}if(!$D){echo"<p class='message'>".'Žádné řádky.'."\n";}else{$Qd=$q->backwardKeys($h,$oa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$ga&&$v?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upravit'."</a>");$Rc=array();$Q=array();reset($v);$Za=1;foreach($D[0]as$c=>$b){$b=$_GET["columns"][key($v)];$d=$o[$v?$b["col"]:$c];$f=($d?$q->fieldName($d,$Za):"*");if($f!=""){$Za++;$Rc[$c]=$f;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($_GET["order"][0]==$c&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$Q[$c]=$b["fun"];next($v);}$wb=array();if($_GET["modify"]){foreach($D
as$a){foreach($a
as$c=>$b){$wb[$c]=max($wb[$c],min(40,strlen(utf8_decode($b))));}}}echo($Qd?"<th>".'Vztahy':"")."</thead>\n";foreach($q->rowDescriptions($D,$J)as$K=>$a){$Sc=unique_array($D[$K],$_);$bb="";foreach($Sc
as$c=>$b){$bb.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$ga&&$v?"":"<td>".checkbox("check[]",substr($bb,1),in_array(substr($bb,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ga)<count($v)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($h).$bb)."'>".'upravit'."</a>"));foreach($a
as$c=>$b){if(isset($Rc[$c])){$d=$o[$c];if($b!=""&&(!isset($_c[$c])||$_c[$c]!="")){$_c[$c]=(is_mail($b)?$Rc[$c]:"");}$A="";$b=$q->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$A=h(ME.'download='.urlencode($h).'&field='.urlencode($c).$bb);}if($b==""){$b="&nbsp;";}elseif($hb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,intval($hb)));}else{$b=h($b);}if(!$A){foreach((array)$J[$c]as$F){if(count($J[$c])==1||count($F["source"])==1){foreach($F["source"]as$g=>$qa){$A.=where_link($g,$F["target"][$g],$D[$K][$qa]);}$A=h(($F["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($F["db"]),ME):ME).'select='.urlencode($F["table"]).$A);break;}}}if($c=="COUNT(*)"){$A=h(ME."select=".urlencode($h));$g=0;foreach((array)$_GET["where"]as$r){if(!array_key_exists($r["col"],$Sc)){$A.=h(where_link($g++,$r["col"],$r["val"],$r["op"]));}}foreach($Sc
as$va=>$r){$A.=h(where_link($g++,$va,$r,(isset($r)?"=":"IS NULL")));}}}if(!$A){if(is_mail($b)){$A="mailto:$b";}if($bc=is_url($a[$c])){$A=($bc=="http"&&$_b?$a[$c]:"$bc://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$E=h("val[$bb][".bracket_escape($c)."]");$n=$_POST["val"][$bb][bracket_escape($c)];$xd=h(isset($n)?$n:$a[$c]);$pd=strpos($b,"<i>...</i>");$ud=is_utf8($b)&&!$pd&&$D[$K][$c]==$a[$c]&&!$Q[$c];$rd=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$ud)||isset($n)?"<td>".($rd?"<textarea name='$E' cols='30' rows='".(substr_count($a[$c],"\n")+1)."' onkeydown='return textareaKeydown(this, event);'>$xd</textarea>":"<input name='$E' value='$xd' size='$wb[$c]'>"):"<td id='$E' ondblclick=\"".($ud?"selectDblClick(this, event".($rd?", 1":"").")":"alert('".h($pd?'Ke změně této hodnoty zvyšte Délku textů.':'Ke změně této hodnoty použijte odkaz upravit.')."')").";\">".$q->selectVal($b,$A,$d));}}$q->backwardKeysPrint($Qd,$D[$K]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Oc);if($D||$I){$Nc=true;if($_GET["page"]!="last"&&intval($T)&&count($ga)>=count($v)&&($za>=$T||$I)){$za=$M["Rows"];if(!isset($za)||$y||2*$I*$T>$za||($M["Engine"]=="InnoDB"&&$za<1e4)){ob_flush();flush();$za=$i->result("SELECT COUNT(*) FROM ".table($h).($y?" WHERE ".implode(" AND ",$y):""));}else{$Nc=false;}}echo"<p class='pages'>";if(intval($T)&&$za>$T){$Vc=floor(($za-1)/$T);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".'Stránka'."', '".($I+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".'Stránka'."</a>:".pagination(0,$I).($I>5?" ...":"");for($g=max(1,$I-4);$g<min($Vc,$I+5);$g++){echo
pagination($g,$I);}echo($I+5<$Vc?" ...":"").($Nc?pagination($Vc,$I):' <a href="'.h(remove_from_uri()."&page=last").'">'.'poslední'."</a>");}echo" (".($Nc?"":"~ ").lang(array('%d řádek','%d řádky','%d řádků'),$za).") ".checkbox("all",1,0,'celý výsledek')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Upravit</legend><div>
<input type="submit" value="Uložit" title="Dvojklikněte na políčko, které chcete změnit.">
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat" onclick="return confirm('Opravdu? (' + (this.form['all'].checked ? <?php echo$za,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');echo$q->dumpOutput(1,$Oc["output"])." ".$q->dumpFormat(1,$Oc["format"]);echo" <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}print_fieldset("import",'Import CSV',!$D);echo"<input type='hidden' name='token' value='$C'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$Oc["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>\n","</div></fieldset>\n";$q->selectEmailPrint(array_filter($_c,'strlen'),$w);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$tb=isset($_GET["status"]);page_header($tb?'Stav':'Proměnné');$sd=($tb?show_status():show_variables());if(!$sd){echo"<p class='message'>".'Žádné řádky.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($sd
as$c=>$b){echo"<tr>","<th><code class='jush-".$u.($tb?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["token"]!=$C){exit;}if($_GET["script"]=="db"){$Ec=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$E=addcslashes($a["Name"],"\\'/");echo"setHtml('Comment-$E', '".addcslashes(nbsp($a["Comment"]),"'\\")."');\n";if(!is_view($a)){foreach(array("Engine","Collation")as$c){echo"setHtml('$c-$E', '".addcslashes(nbsp($a[$c]),"'\\")."');\n";}foreach($Ec+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($a[$c]!=""){$b=number_format($a[$c],0,'.',' ');echo"setHtml('$c-$E', '".($c=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b)."');\n";if(isset($Ec[$c])){$Ec[$c]+=($a["Engine"]!="InnoDB"||$c!="Data_free"?$a[$c]:0);}}elseif(array_key_exists($c,$a)){echo"setHtml('$c-$E');\n";}}}}foreach($Ec
as$c=>$b){echo"setHtml('sum-$c', '".number_format($b,0,'.',' ')."');\n";}}else{foreach(count_tables(get_databases())as$x=>$b){echo"setHtml('tables-".addcslashes($x,"\\'/")."', '$b');\n";}}exit;}else{$qd=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($qd&&!$p&&!$_POST["search"]){$k=true;$ma="";if($u=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$k=truncate_tables($_POST["tables"]);}$ma='Tabulky byly vyprázdněny.';}elseif($_POST["move"]){$k=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ma='Tabulky byly přesunuty.';}elseif($_POST["drop"]){if($_POST["views"]){$k=drop_views($_POST["views"]);}if($k&&$_POST["tables"]){$k=drop_tables($_POST["tables"]);}$ma='Tabulky byly odstraněny.';}elseif($_POST["tables"]&&($k=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$k->fetch_assoc()){$ma.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ma,$k);}page_header(($_GET["ns"]==""?'Databáze'.": ".h(DB):'Schéma'.": ".h($_GET["ns"])),$p,true);echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Pozměnit databázi'."</a>\n":"");if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.'Schéma databáze'."</a>\n","<h3>".'Tabulky a pohledy'."</h3>\n";$Gc=tables_list();if(!$Gc){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Vyhledat'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabulka'.'<td>'.'Úložiště'.'<td>'.'Porovnávání'.'<td>'.'Velikost dat'.'<td>'.'Velikost indexů'.'<td>'.'Volné místo'.'<td>'.'Auto Increment'.'<td>'.'Řádků'.(support("comment")?'<td>'.'Komentář':'')."</thead>\n";foreach($Gc
as$f=>$O){$hc=(isset($O)&&!eregi("table",$O));echo'<tr'.odd().'><td>'.checkbox(($hc?"views[]":"tables[]"),$f,in_array($f,$qd,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($hc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'Pohled'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{echo"<td id='Engine-".h($f)."'>&nbsp;<td id='Collation-".h($f)."'>&nbsp;";foreach(array("Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$A){echo"<td align='right'><a href='".h(ME."$A=").urlencode($f)."' id='$c-".h($f)."'>?</a>";}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkem',count($Gc)),"<td>".nbsp($i->result("SELECT @@storage_engine")),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$C'>".($u=="sql"?"<input type='submit' value='".'Analyzovat'."'> <input type='submit' name='optimize' value='".'Optimalizovat'."'> <input type='submit' name='check' value='".'Zkontrolovat'."'> <input type='submit' name='repair' value='".'Opravit'."'> ":"")."<input type='submit' name='truncate' value='".'Vyprázdnit'."' onclick=\"return confirm('".'Opravdu?'." (' + formChecked(this, /tables/) + ')');\"> <input type='submit' name='drop' value='".'Odstranit'."' onclick=\"return confirm('".'Opravdu?'." (' + formChecked(this, /tables|views/) + ')');\">\n";$z=(support("scheme")?schemas():get_databases());if(count($z)!=1&&$u!="sqlite"){$x=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Přesunout do jiné databáze'.($z?": ".html_select("target",$z,$x):': <input name="target" value="'.h($x).'">')." <input type='submit' name='move' value='".'Přesunout'."'>\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Vytvořit tabulku'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Vytvořit pohled'."</a>\n";}if(support("routine")){echo"<h3>".'Procedury a funkce'."</h3>\n";$od=routines();if($od){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Název'.'<td>'.'Typ'.'<td>'.'Návratový typ'."<td>&nbsp;</thead>\n";odd('');foreach($od
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Změnit'."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.'Vytvořit proceduru'.'</a> <a href="'.h(ME).'function=">'.'Vytvořit funkci'."</a>\n";}if(support("type")){echo"<h3>".'Uživatelské typy'."</h3>\n";$na=types();if($na){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Název'."</thead>\n";odd('');foreach($na
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Vytvořit typ'."</a>\n";}if(support("event")){echo"<h3>".'Události'."</h3>\n";$D=get_rows("SHOW EVENTS");if($D){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Název'."<td>".'Plán'."<td>".'Začátek'."<td>".'Konec'."</thead>\n";foreach($D
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'V daný čas'."<td>".$a["Execute at"]:'Každých'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Vytvořit událost'."</a>\n";}if($Gc){page_footer();echo"<script type='text/javascript' src='".h(ME."script=db&token=$C")."'></script>\n";exit;}}}page_footer();