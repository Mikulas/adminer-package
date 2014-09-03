<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$xe=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($xe){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$Fe=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($Fe){$$b=$Fe;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
function selectDblClick(td,event,text){var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=(td.clientWidth-14)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
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
cookie('adminer_schema='+encodeURIComponent(s.substr(1)),30,'; path="'+location.pathname+location.search+'"');}}
function textareaKeydown(target,event){if(event.keyCode==9&&!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(target.setSelectionRange){var start=target.selectionStart;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey){target.form.submit();}
return true;}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($Q){$mb=substr($Q,-1);return
str_replace($mb.$mb,$mb,substr($Q,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($nb){if(get_magic_quotes_gpc()){while(list($e,$b)=each($nb)){foreach($b
as$Ma=>$v){unset($nb[$e][$Ma]);if(is_array($v)){$nb[$e][stripslashes($Ma)]=$v;$nb[]=&$nb[$e][stripslashes($Ma)];}else{$nb[$e][stripslashes($Ma)]=($xe?$v:stripslashes($v));}}}}}function
bracket_escape($Q,$af=false){static$Je=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Q,($af?array_flip($Je):$Je));}function
h($F){return
htmlspecialchars($F,ENT_QUOTES);}function
nbsp($F){return(trim($F)!=""?h($F):"&nbsp;");}function
nl_br($F){return
str_replace("\n","<br>",$F);}function
checkbox($f,$p,$Ba,$Ke="",$Le=""){static$U=0;$U++;$d="<input type='checkbox'".($f?" name='$f' value='".h($p)."'":"").($Ba?" checked":"").($Le?" onclick=\"$Le\"":"")." id='checkbox-$U'>";return($Ke!=""?"<label for='checkbox-$U'>$d".h($Ke)."</label>":$d);}function
optionlist($Rc,$Ze=null,$ke=false){$d="";foreach($Rc
as$Ma=>$v){if(is_array($v)){$d.='<optgroup label="'.h($Ma).'">';}foreach((is_array($v)?$v:array($Ma=>$v))as$e=>$b){$d.='<option'.($ke||is_string($e)?' value="'.h($e).'"':'').(($ke||is_string($e)?(string)$e:$b)===$Ze?' selected':'').'>'.h($b);}if(is_array($v)){$d.='</optgroup>';}}return$d;}function
html_select($f,$Rc,$p="",$Mb=true){if($Mb){return"<select name='".h($f)."'".(is_string($Mb)?" onchange=\"$Mb\"":"").">".optionlist($Rc,$p)."</select>";}$d="";foreach($Rc
as$e=>$b){$d.="<label><input type='radio' name='".h($f)."' value='".h($e)."'".($e==$p?" checked":"").">".h($b)."</label>";}return$d;}function
ini_bool($Xe){$b=ini_get($Xe);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
q($F){global$g;return$g->quote($F);}function
get_vals($j,$I=0){global$g;$d=array();$i=$g->query($j);if(is_object($i)){while($a=$i->fetch_row()){$d[]=$a[$I];}}return$d;}function
get_key_vals($j,$J=null){global$g;if(!is_object($J)){$J=$g;}$d=array();$i=$J->query($j);while($a=$i->fetch_row()){$d[$a[0]]=$a[1];}return$d;}function
get_rows($j,$J=null,$n="<p class='error'>"){global$g;if(!is_object($J)){$J=$g;}$d=array();$i=$J->query($j);if(is_object($i)){while($a=$i->fetch_assoc()){$d[]=$a;}}elseif(!$i&&$n&&(headers_sent()||ob_get_level())){echo$n.error()."\n";}return$d;}function
unique_array($a,$K){foreach($K
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$d=array();foreach($w["columns"]as$e){if(!isset($a[$e])){continue
2;}$d[$e]=$a[$e];}return$d;}}$d=array();foreach($a
as$e=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$e)){$d[$e]=$b;}}return$d;}function
where($t){$d=array();foreach((array)$t["where"]as$e=>$b){$d[]=idf_escape(bracket_escape($e,1)).(ereg('\\.',$b)?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$t["null"]as$e){$d[]=idf_escape($e)." IS NULL";}return
implode(" AND ",$d);}function
where_check($b){parse_str($b,$pe);remove_slashes(array(&$pe));return
where($pe);}function
where_link($k,$I,$p,$bf="="){return"&where%5B$k%5D%5Bcol%5D=".urlencode($I)."&where%5B$k%5D%5Bop%5D=".urlencode($bf)."&where%5B$k%5D%5Bval%5D=".urlencode($p);}function
cookie($f,$p){global$Zb;$ic=array($f,(ereg("\n",$p)?"":$p),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Zb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$ic[]=true;}return
call_user_func_array('setcookie',$ic);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($e){return$_SESSION[$e][DRIVER][SERVER][$_GET["username"]];}function
set_session($e,$b){$_SESSION[$e][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Ib,$G,$O){global$ja;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ja))."|username|".session_name()),$l);return"$l[1]?".(SID&&!$_COOKIE?SID."&":"").($Ib!="server"||$G!=""?urlencode($Ib)."=".urlencode($G)."&":"")."username=".urlencode($O).($l[2]?"&$l[2]":"");}function
redirect($ka,$sa=null){if(isset($sa)){restart_session();$_SESSION["messages"][]=$sa;}if(isset($ka)){header("Location: ".($ka!=""?$ka:"."));exit;}}function
query_redirect($j,$ka,$sa,$Xc=true,$cf=true,$ve=false){global$g,$n,$r;if($cf){$ve=!$g->query($j);}$Zc="";if($j){$Zc=$r->messageQuery($j);}if($ve){$n=error().$Zc;return
false;}if($Xc){redirect($ka,$sa.$Zc);}return
true;}function
queries($j=null){global$g;static$hb=array();if(!isset($j)){return
implode(";\n",$hb);}$hb[]=$j;return$g->query($j);}function
apply_queries($j,$E,$ff='table'){foreach($E
as$h){if(!queries("$j ".$ff($h))){return
false;}}return
true;}function
queries_redirect($ka,$sa,$Xc){return
query_redirect(queries(),$ka,$sa,$Xc,false,!$Xc);}function
remove_from_uri($Ya=""){return
substr(preg_replace("~(?<=[?&])($Ya".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($Z,$ef){return" ".($Z==$ef?$Z+1:'<a href="'.h(remove_from_uri("page").($Z?"&page=$Z":"")).'">'.($Z+1)."</a>");}function
get_file($e,$se=false){$qa=$_FILES[$e];if(!$qa||$qa["error"]){return$qa["error"];}return
file_get_contents($se&&ereg('\\.gz$',$qa["name"])?"compress.zlib://$qa[tmp_name]":($se&&ereg('\\.bz2$',$qa["name"])?"compress.bzip2://$qa[tmp_name]":$qa["tmp_name"]));}function
upload_error($n){$Qe=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?'Hochladen von Datei fehlgeschlagen.'.($Qe?" ".sprintf('Maximal erlaubte Dateigrösse ist %sB.',$Qe):""):'Datei existiert nicht.');}function
odd($d=' class="odd"'){static$k=0;if(!$d){$k=-1;}return($k++%
2?$d:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($F,$ea=80,$df=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$ea})($)?)u",$F,$l)){preg_match("(^([\t\r\n -~]{0,$ea})($)?)",$F,$l);}return
h($l[1]).$df.(isset($l[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($nb,$gf=array()){while(list($e,$b)=each($nb)){if(is_array($b)){foreach($b
as$Ma=>$v){$nb[$e."[$Ma]"]=$v;}}elseif(!in_array($e,$gf)){echo'<input type="hidden" name="'.h($e).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){$d=array();foreach(foreign_keys($h)as$A){foreach($A["source"]as$b){$d[$b][]=$A;}}return$d;}function
enum_input($y,$Pa,$c,$p){preg_match_all("~'((?:[^']|'')*)'~",$c["length"],$ra);foreach($ra[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ba=(is_int($p)?$p==$k+1:(is_array($p)?in_array($k+1,$p):$p===$b));echo" <label><input type='$y'$Pa value='".($k+1)."'".($Ba?' checked':'').'>'.h($b).'</label>';}}function
input($c,$p,$N){global$T,$r,$_;$f=h(bracket_escape($c["field"]));echo"<td class='function'>";$V=(isset($_GET["select"])?array("orig"=>'Original'):array())+$r->editFunctions($c);$Pa=" name='fields[$f]'";if($c["type"]=="enum"){echo
nbsp($V[""])."<td>".($V["orig"]?"<label><input type='radio'$Pa value='-1' checked><i>$V[orig]</i></label> ":""),$r->editInput($_GET["edit"],$c,$Pa,$p);enum_input("radio",$Pa,$c,$p);}else{$fb=0;foreach($V
as$e=>$b){if($e===""||!$b){break;}$fb++;}$Mb=($fb?" onchange=\"var f = this.form['function[".addcslashes($f,"\r\n'\\")."]']; if ($fb > f.selectedIndex) f.selectedIndex = $fb;\"":"");$Pa.=$Mb;echo(count($V)>1?html_select("function[$f]",$V,!isset($N)||in_array($N,$V)||isset($V[$N])?$N:""):nbsp(reset($V))).'<td>';$ne=$r->editInput($_GET["edit"],$c,$Pa,$p);if($ne!=""){echo$ne;}elseif($c["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$c["length"],$ra);foreach($ra[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ba=(is_int($p)?($p>>$k)&1:in_array($b,explode(",",$p),true));echo" <label><input type='checkbox' name='fields[$f][$k]' value='".(1<<$k)."'".($Ba?' checked':'')."$Mb>".h($b).'</label>';}}elseif(ereg('blob|bytea|raw|file',$c["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Mb>";}elseif(ereg('text|lob',$c["type"])){echo"<textarea ".($_!="sqlite"||ereg("\n",$p)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Pa>".h($p).'</textarea>';}else{$sd=(!ereg('int',$c["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$c["length"],$l)?((ereg("binary",$c["type"])?2:1)*$l[1]+($l[3]?1:0)+($l[2]&&!$c["unsigned"]?1:0)):($T[$c["type"]]?$T[$c["type"]]+($c["unsigned"]?0:1):0));echo"<input value='".h($p)."'".($sd?" maxlength='$sd'":"").(ereg('char|binary',$c["type"])&&$sd>20?" size='40'":"")."$Pa>";}}}function
process_input($c){global$r;$Q=bracket_escape($c["field"]);$N=$_POST["function"][$Q];$p=$_POST["fields"][$Q];if($c["type"]=="enum"){if($p==-1){return
false;}if($p==""){return"NULL";}return
intval($p);}if($c["auto_increment"]&&$p==""){return
null;}if($N=="orig"){return
false;}if($N=="NULL"){return"NULL";}if($c["type"]=="set"){return
array_sum((array)$p);}if(ereg('blob|bytea|raw|file',$c["type"])&&ini_bool("file_uploads")){$qa=get_file("fields-$Q");if(!is_string($qa)){return
false;}return
q($qa);}return$r->processInput($c,$p,$N);}function
search_tables(){global$r,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$pa=false;foreach(table_status()as$h=>$H){$f=$r->tableName($H);if(isset($H["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$i=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$r->selectSearchProcess(fields($h),array())),1));if($i->fetch_row()){if(!$pa){echo"<ul>\n";$pa=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($pa?"</ul>":"<p class='message'>".'Keine Tabellen.')."\n";}function
dump_csv($a){foreach($a
as$e=>$b){if(preg_match("~[\"\n,;]~",$b)||$b===""){$a[$e]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$a)."\n";}function
apply_sql_function($N,$I){return($N?($N=="unixepoch"?"DATETIME($I, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$I)"):$I);}function
password_file(){$Jc=ini_get("upload_tmp_dir");if(!$Jc){if(function_exists('sys_get_temp_dir')){$Jc=sys_get_temp_dir();}else{$Y=@tempnam("","");if(!$Y){return
false;}$Jc=dirname($Y);unlink($Y);}}$Y="$Jc/adminer.key";$d=@file_get_contents($Y);if($d){return$d;}$Ka=@fopen($Y,"w");if($Ka){$d=md5(uniqid(mt_rand(),true));fwrite($Ka,$d);fclose($Ka);}return$d;}function
is_email($Re){$ue='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$pc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ha="$ue+(\\.$ue+)*@($pc?\\.)+$pc";return
preg_match("(^$ha(,\\s*$ha)*\$)i",$Re);}function
is_url($F){$pc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($pc?\\.)+$pc(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$F,$l)?strtolower($l[1]):"");}function
print_fieldset($U,$We,$Ve=false){echo"<fieldset><legend><a href='#fieldset-$U' onclick=\"return !toggle('fieldset-$U');\">$We</a></legend><div id='fieldset-$U'".($Ve?"":" class='hidden'").">\n";}function
bold($F,$Ue){return($Ue?"<b>$F</b>":$F);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Zb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$ic=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Zb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$ic[]=true;}call_user_func_array('session_set_cookie_params',$ic);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);function
lang($Se,$hc){$qc=($hc==1||(!$hc&&'de'=='fr')?0:((!$hc||$hc>=5)&&ereg('cs|sk|ru','de')?2:1));return
sprintf($Se[$qc],$hc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Te,$O,$S,$Ye='auth_error'){set_exception_handler($Ye);parent::__construct($Te,$O,$S);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$ab=false){$i=parent::query($j);if(!$i){$jf=$this->errorInfo();$this->error=$jf[2];return
false;}$this->store_result($i);return$i;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($i=null){if(!$i){$i=$this->_result;}if($i->columnCount()){$i->num_rows=$i->rowCount();return$i;}$this->affected_rows=$i->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$c=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch();return$a[$c];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$Ja=array();$ja=array();$Ja[]="SQLite";$Ja[]="SQLite3";$Ja[]="PDO_SQLite";if(extension_loaded("sqlite3")||extension_loaded("pdo_sqlite")){$ja["sqlite"]="SQLite 3";}if(extension_loaded("sqlite")||extension_loaded("pdo_sqlite")){$ja["sqlite2"]="SQLite 2";}if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite2"])?"sqlite":"sqlite3")){if(isset($_GET["sqlite2"])){class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Y){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Y);}function
query($j,$ab=false){$vf=($ab?"unbufferedQuery":"query");$i=@$this->_link->$vf($j,SQLITE_BOTH,$n);if(!$i){$this->error=$n;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($F){return"'".sqlite_escape_string($F)."'";}function
store_result(){return$this->_result;}function
result($j,$c=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetch();return$a[$c];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$d=array();foreach($a
as$e=>$b){$d[($e[0]=='"'?idf_unescape($e):$e)]=$b;}return$d;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$ha='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ha\\.)?$ha\$~",$f,$l)){$h=($l[3]!=""?$l[3]:idf_unescape($l[2]));$f=($l[5]!=""?$l[5]:idf_unescape($l[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$h,);}}}else{class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Y){$this->_link=new
SQLite3($Y);$yd=$this->_link->version();$this->server_info=$yd["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($F){return"'".$this->_link->escapeString($F)."'";}function
store_result(){return$this->_result;}function
result($j,$c=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetchArray();return$a[$c];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$I=$this->_offset++;$y=$this->_result->columnType($I);return(object)array("name"=>$this->_result->columnName($I),"type"=>$y,"charsetnr"=>($y==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Y){$this->dsn(DRIVER.":$Y","","");}}}class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Y){if(is_readable($Y)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$Y)?$Y:dirname($_SERVER["SCRIPT_FILENAME"])."/$Y")." AS a")){$this->Min_SQLite($Y);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$t,$L,$M=0,$Qa=" "){return" $j$t".(isset($L)?$Qa."LIMIT $L".($M?" OFFSET $M":""):"");}function
limit1($j,$t){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$t,1):" $j$t");}function
db_collation($s,$X){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($z){return
array();}function
table_status($f=""){$d=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$a){$a["Auto_increment"]="";$d[$a["Name"]]=$a;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$a){$d[$a["name"]]["Auto_increment"]=$a["seq"];}return($f!=""?$d[$f]:$d);}function
is_view($H){return$H["Engine"]=="view";}function
fk_support($H){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h,$gc=false){$d=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$a){$y=strtolower($a["type"]);$xa=$a["dflt_value"];$d[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$y)?"integer":(eregi("char|clob|text",$y)?"text":(eregi("blob",$y)?"blob":(eregi("real|floa|doub",$y)?"real":"numeric")))),"full_type"=>$y,"default"=>(ereg("'(.*)'",$xa,$l)?str_replace("''","'",$l[1]):($xa=="NULL"?null:$xa)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$y)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}return$d;}function
indexes($h,$J=null){$d=array();$Ha=array();foreach(fields($h)as$c){if($c["primary"]){$Ha[]=$c["field"];}}if($Ha){$d[""]=array("type"=>"PRIMARY","columns"=>$Ha,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$a){$d[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$d[$a["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($a["name"]).")")as$Pc){$d[$a["name"]]["columns"][]=$Pc["name"];}}return$d;}function
foreign_keys($h){$d=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$a){$A=&$d[$a["id"]];if(!$A){$A=$a;}$A["source"][]=$a["from"];$A["target"][]=$a["to"];}return$d;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($s){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
create_database($s,$R){global$g;if(file_exists($s)){$g->error='Datei existiert schon.';return
false;}$x=new
Min_SQLite($s);$x->query('PRAGMA encoding = "UTF-8"');$x->query('CREATE TABLE adminer (i)');$x->query('DROP TABLE adminer');return
true;}function
drop_databases($z){global$g;$g->Min_SQLite(":memory:");foreach($z
as$s){if(!@unlink($s)){$g->error='Datei existiert schon.';return
false;}}return
true;}function
rename_database($f,$R){global$g;$g->Min_SQLite(":memory:");$g->error='Datei existiert schon.';return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$f,$o,$ib,$_a,$wb,$R,$Ua,$tb){$u=array();foreach($o
as$c){if($c[1]){$u[]=($h!=""&&$c[0]==""?"ADD ":"  ").implode($c[1]);}}$u=array_merge($u,$ib);if($h!=""){foreach($u
as$b){if(!queries("ALTER TABLE ".table($h)." $b")){return
false;}}if($h!=$f&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)")){return
false;}if($Ua){queries("UPDATE sqlite_sequence SET seq = $Ua WHERE name = ".q($f));}return
true;}function
alter_indexes($h,$u){foreach($u
as$b){if(!queries(($b[2]?"DROP INDEX":"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h))." $b[1]")){return
false;}}return
true;}function
truncate_tables($E){return
apply_queries("DELETE FROM",$E);}function
drop_views($aa){return
apply_queries("DROP VIEW",$aa);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
move_tables($E,$aa,$oa){return
false;}function
trigger($f){global$g;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$l);return
array("Timing"=>strtoupper($l[1]),"Event"=>strtoupper($l[2]),"Trigger"=>$f,"Statement"=>$l[3]);}function
triggers($h){$d=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$a){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$l);$d[$a["name"]]=array($l[1],$l[2]);}return$d;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$y){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h).($q?" (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")":"DEFAULT VALUES"));}function
insert_update($h,$q,$Ha){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($q)).") VALUES (".implode(", ",$q).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($uf){return
true;}function
create_sql($h,$Ua){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($ca){}function
trigger_sql($h,$W){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$g;$d=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$e){$d[$e]=$g->result("PRAGMA $e");}return$d;}function
show_status(){$d=array();foreach(get_vals("PRAGMA compile_options")as$tf){list($e,$b)=explode("=",$tf,2);$d[$e]=$b;}return$d;}function
support($qb){return
ereg('^(view|trigger|variables|status|dump)$',$qb);}$_="sqlite";$T=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Sa=array_keys($T);$pb=array();$Vb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("hex","length","lower","round","unixepoch","upper");$ob=array("avg","count","count distinct","group_concat","max","min","sum");$Yb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Ja[]="PgSQL";$Ja[]="PDO_PgSQL";if(extension_loaded("pgsql")||extension_loaded("pdo_pgsql")){$ja["pgsql"]="PostgreSQL";}if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($_f,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($G,$O,$S){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($G,"'\\"))."' user='".addcslashes($O,"'\\")."' password='".addcslashes($S,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect($this->_string,PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$yd=pg_version($this->_link);$this->server_info=$yd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($F){return"'".pg_escape_string($this->_link,$F)."'";}function
select_db($ca){if($ca==DB){return$this->_database;}$d=@pg_connect("$this->_string dbname='".addcslashes($ca,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($d){$this->_link=$d;}return$d;}function
close(){$this->_link=@pg_connect($this->_string);}function
query($j,$ab=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$c=0){$i=$this->query($j);if(!$i){return
false;}return
pg_fetch_result($i->_result,0,$c);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=pg_num_rows($i);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$I=$this->_offset++;$d=new
stdClass;if(function_exists('pg_field_table')){$d->orgtable=pg_field_table($this->_result,$I);}$d->name=pg_field_name($this->_result,$I);$d->orgname=$d->name;$d->type=pg_field_type($this->_result,$I);$d->charsetnr=($d->type=="bytea"?63:0);return$d;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($G,$O,$S){$F="pgsql:host='".str_replace(":","' port='",addcslashes($G,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($F.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$O,$S);return
true;}function
select_db($ca){return(DB==$ca);}function
close(){}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){global$r;$g=new
Min_DB;$wa=$r->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$t,$L,$M=0,$Qa=" "){return" $j$t".(isset($L)?$Qa."LIMIT $L".($M?" OFFSET $M":""):"");}function
limit1($j,$t){return" $j$t";}function
db_collation($s,$X){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($z){return
array();}function
table_status($f=""){$d=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$a){$d[$a["Name"]]=$a;}return($f!=""?$d[$f]:$d);}function
is_view($H){return$H["Engine"]=="view";}function
fk_support($H){return
true;}function
fields($h,$gc=false){$d=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($h)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
".($gc?"":"AND a.attnum > 0")."
ORDER BY a.attnum < 0, a.attnum")as$a){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$l);list(,$a["type"],,$a["length"])=$l;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$d[$a["field"]]=$a;}return$d;}function
indexes($h,$J=null){global$g;if(!is_object($J)){$J=$g;}$d=array();$re=$J->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$B=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $re AND attnum > 0",$J);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $re AND ci.oid = i.indexrelid",$J)as$a){$d[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$d[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$zf){$d[$a["relname"]]["columns"][]=$B[$zf];}$d[$a["relname"]]["lengths"]=array();}return$d;}function
foreign_keys($h){$d=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($h))as$a){$A=&$d[$a["constraint_name"]];if(!$A){$A=$a;}$A["source"][]=$a["column_name"];$A["target"][]=$a["ref"];}return$d;}function
view($f){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($s){return($s=="information_schema");}function
error(){global$g;$d=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$d,$l)){$d=$l[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($l[3]).'})(.*)~','\\1<b>\\2</b>',$l[2]).$l[4];}return
nl_br($d);}function
exact_value($b){return
q($b);}function
create_database($s,$R){return
queries("CREATE DATABASE ".idf_escape($s).($R?" ENCODING ".idf_escape($R):""));}function
drop_databases($z){global$g;$g->close();return
apply_queries("DROP DATABASE",$z,'idf_escape');}function
rename_database($f,$R){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($h,$f,$o,$ib,$_a,$wb,$R,$Ua,$tb){$u=array();$hb=array();foreach($o
as$c){$I=idf_escape($c[0]);$b=$c[1];if(!$b){$u[]="DROP $I";}else{$_d=$b[5];unset($b[5]);if(isset($b[6])&&$c[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($c[0]==""){$u[]=($h!=""?"ADD ":"  ").implode($b);}else{if($I!=$b[0]){$hb[]="ALTER TABLE ".table($h)." RENAME $I TO $b[0]";}$u[]="ALTER $I TYPE$b[1]";if(!$b[6]){$u[]="ALTER $I ".($b[3]?"SET$b[3]":"DROP DEFAULT");$u[]="ALTER $I ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($c[0]!=""||$_d!=""){$hb[]="COMMENT ON COLUMN ".table($h).".$b[0] IS ".($_d!=""?substr($_d,9):"''");}}}$u=array_merge($u,$ib);if($h==""){array_unshift($hb,"CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}elseif($u){array_unshift($hb,"ALTER TABLE ".table($h)."\n".implode(",\n",$u));}if($h!=""&&$h!=$f){$hb[]="ALTER TABLE ".table($h)." RENAME TO ".table($f);}if($h!=""||$_a!=""){$hb[]="COMMENT ON TABLE ".table($f)." IS ".q($_a);}if($Ua!=""){}foreach($hb
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($h,$u){$fa=array();$Ca=array();foreach($u
as$b){if($b[0]!="INDEX"){$fa[]=($b[2]?"\nDROP CONSTRAINT ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}elseif($b[2]){$Ca[]=$b[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h)." $b[1]")){return
false;}}return((!$fa||queries("ALTER TABLE ".table($h).implode(",",$fa)))&&(!$Ca||queries("DROP INDEX ".implode(", ",$Ca))));}function
truncate_tables($E){return
queries("TRUNCATE ".implode(", ",array_map('table',$E)));return
true;}function
drop_views($aa){return
queries("DROP VIEW ".implode(", ",array_map('table',$aa)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$aa,$oa){foreach($E
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($oa))){return
false;}}foreach($aa
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($oa))){return
false;}}return
true;}function
trigger($f){$D=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($D);}function
triggers($h){$d=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$a){$d[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$d;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h).($q?" (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")":"DEFAULT VALUES"));}function
insert_update($h,$q,$Ha){global$g;$la=array();$t=array();foreach($q
as$e=>$b){$la[]="$e = $b";if(isset($Ha[idf_unescape($e)])){$t[]="$e = $b";}}return($t&&queries("UPDATE ".table($h)." SET ".implode(", ",$la)." WHERE ".implode(" AND ",$t))&&$g->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($q)).") VALUES (".implode(", ",$q).")");}function
last_id(){return
0;}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($La){global$g,$T,$Sa;$d=$g->query("SET search_path TO ".idf_escape($La));foreach(types()as$y){if(!isset($T[$y])){$T[$y]=0;$Sa['Benutzer-definierte Typen'][]=$y;}}return$d;}function
use_sql($ca){return"\connect ".idf_escape($ca);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($qb){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$qb);}$_="pgsql";$T=array();$Sa=array();foreach(array('Zahlen'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Datum oder Zeit'=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),'Zeichenketten'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binär'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Netzwerk'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometrie'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$e=>$b){$T+=$b;$Sa[$e]=array_keys($b);}$pb=array();$Vb=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("char_length","lower","round","to_hex","to_timestamp","upper");$ob=array("avg","count","count distinct","max","min","sum");$Yb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Ja[]="OCI8";$Ja[]="PDO_OCI";if(extension_loaded("oci8")||extension_loaded("pdo_oci")){$ja["oracle"]="Oracle";}if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($_f,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($G,$O,$S){$this->_link=@oci_new_connect($O,$S,$G);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($F){return"'".str_replace("'","''",$F)."'";}function
select_db($ca){return
true;}function
query($j,$ab=false){$i=oci_parse($this->_link,$j);if(!$i){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$d=@oci_execute($i);restore_error_handler();if($d){if(oci_num_fields($i)){return
new
Min_Result($i);}$this->affected_rows=oci_num_rows($i);}return$d;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$c=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$c);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'OCI-Lob')){$a[$e]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$I=$this->_offset++;$d=new
stdClass;$d->name=oci_field_name($this->_result,$I);$d->orgname=$d->name;$d->type=oci_field_type($this->_result,$I);$d->charsetnr=(ereg("raw|blob|bfile",$d->type)?63:0);return$d;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($G,$O,$S){}function
select_db($ca){}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){global$r;$g=new
Min_DB;$wa=$r->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$t,$L,$M=0,$Qa=" "){return" $j$t".(isset($L)?($t?" AND":$Qa."WHERE").($M?" rownum > $M AND":"")." rownum <= ".($L+$M):"");}function
limit1($j,$t){return" $j$t";}function
db_collation($s,$X){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($z){return
array();}function
table_status($f=""){$d=array();$Oe=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $Oe":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $Oe":""))as$a){if($f!=""){return$a;}$d[$a["Name"]]=$a;}return$d;}function
is_view($H){return$H["Engine"]=="view";}function
fk_support($H){return
true;}function
fields($h,$gc=false){$d=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$a){$y=$a["DATA_TYPE"];$ea="$a[DATA_PRECISION],$a[DATA_SCALE]";if($ea==","){$ea=$a["DATA_LENGTH"];}$d[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$y.($ea?"($ea)":""),"type"=>strtolower($y),"length"=>$ea,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$d;}function
indexes($h,$J=null){return
array();}function
view($f){$D=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($D);}function
collations(){return
array();}function
information_schema($s){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
explain($g,$j){$g->query("EXPLAIN PLAN FOR $j");return$g->query("SELECT * FROM plan_table");}function
alter_table($h,$f,$o,$ib,$_a,$wb,$R,$Ua,$tb){$u=$Ca=array();foreach($o
as$c){$b=$c[1];if($b&&$c[0]!=""&&idf_escape($c[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($c[0])." TO $b[0]");}if($b){$u[]=($h!=""?($c[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($h!=""?")":"");}else{$Ca[]=idf_escape($c[0]);}}if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}return(!$u||queries("ALTER TABLE ".table($h)."\n".implode("\n",$u)))&&(!$Ca||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Ca).")"))&&($h==$f||queries("ALTER TABLE ".table($h)." RENAME TO ".table($f)));}function
foreign_keys($h){return
array();}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($aa){return
apply_queries("DROP VIEW",$aa);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
begin(){return
true;}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($uf){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$D=get_rows('SELECT * FROM v$instance');return
reset($D);}function
support($qb){return
ereg("view|drop_col|variables|status",$qb);}$_="oracle";$T=array();$Sa=array();foreach(array('Zahlen'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Datum oder Zeit'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Zeichenketten'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binär'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$e=>$b){$T+=$b;$Sa[$e]=array_keys($b);}$pb=array();$Vb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$V=array("length","lower","round","upper");$ob=array("avg","count","count distinct","max","min","sum");$Yb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Ja[]="SQLSRV";$Ja[]="MSSQL";if(extension_loaded("sqlsrv")||extension_loaded("mssql")){$ja["mssql"]="MS SQL";}if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($G,$O,$S){$this->_link=@sqlsrv_connect($G,array("UID"=>$O,"PWD"=>$S));if($this->_link){$yf=sqlsrv_server_info($this->_link);$this->server_info=$yf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($F){return"'".str_replace("'","''",$F)."'";}function
select_db($ca){return$this->query("USE $ca");}function
query($j,$ab=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
false;}return$this->store_result($i);}function
multi_query($j){$this->_result=sqlsrv_query($this->_link,$j);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($i=null){if(!$i){$i=$this->_result;}if(sqlsrv_field_metadata($i)){return
new
Min_Result($i);}$this->affected_rows=sqlsrv_rows_affected($i);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($j,$c=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->fetch_row();return$a[$c];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'DateTime')){$a[$e]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$c=$this->_fields[$this->_offset++];$d=new
stdClass;$d->name=$c["Name"];$d->orgname=$c["Name"];$d->type=($c["Type"]==1?254:0);return$d;}function
seek($M){for($k=0;$k<$M;$k++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($G,$O,$S){$this->_link=@mssql_connect($G,$O,$S);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($F){return"'".str_replace("'","''",$F)."'";}function
select_db($ca){return
mssql_select_db($ca);}function
query($j,$ab=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
false;}if($i===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$c=0){$i=$this->query($j);if(!is_object($i)){return
false;}return
mssql_result($i->_result,0,$c);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=mssql_num_rows($i);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$d=mssql_fetch_field($this->_result);$d->orgtable=$d->table;$d->orgname=$d->name;return$d;}function
seek($M){mssql_data_seek($this->_result,$M);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($Q){return"[".str_replace("]","]]",$Q)."]";}function
table($Q){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($Q);}function
connect(){global$r;$g=new
Min_DB;$wa=$r->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$t,$L,$M=0,$Qa=" "){return(isset($L)?" TOP (".($L+$M).")":"")." $j$t";}function
limit1($j,$t){return
limit($j,$t,1);}function
db_collation($s,$X){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($s));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($z){global$g;$d=array();foreach($z
as$s){$g->select_db($s);$d[$s]=$g->result("SELECT COUNT(*) FROM information_schema.TABLES");}return$d;}function
table_status($f=""){$d=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$a){if($f!=""){return$a;}$d[$a["Name"]]=$a;}return$d;}function
is_view($H){return$H["Engine"]=="VIEW";}function
fk_support($H){return
true;}function
fields($h,$gc=false){$d=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$a){$y=$a["type"];$ea=(ereg("char|binary",$y)?$a["max_length"]:($y=="decimal"?"$a[precision],$a[scale]":""));$d[$a["name"]]=array("field"=>$a["name"],"full_type"=>$y.($ea?"($ea)":""),"type"=>$y,"length"=>$ea,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$d;}function
indexes($h,$J=null){global$g;if(!is_object($J)){$J=$g;}$d=array();foreach(get_rows("SELECT indexes.name, key_ordinal, is_unique, is_primary_key, columns.name AS column_name
FROM sys.indexes
INNER JOIN sys.index_columns ON indexes.object_id = index_columns.object_id AND indexes.index_id = index_columns.index_id
INNER JOIN sys.columns ON index_columns.object_id = columns.object_id AND index_columns.column_id = columns.column_id
WHERE OBJECT_NAME(indexes.object_id) = ".q($h),$J)as$a){$d[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$d[$a["name"]]["lengths"]=array();$d[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}return$d;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SELECT view_definition FROM information_schema.views WHERE table_schema = SCHEMA_NAME() AND table_name = ".q($f))));}function
collations(){$d=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$R){$d[ereg_replace("_.*","",$R)][]=$R;}return$d;}function
information_schema($s){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($b){return
q($b);}function
create_database($s,$R){return
queries("CREATE DATABASE ".idf_escape($s).($R?" COLLATE ".idf_escape($R):""));}function
drop_databases($z){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$z)));}function
rename_database($f,$R){if($R){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE ".idf_escape($R));}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".preg_replace('~\\D+~','',$_POST["Auto_increment"]).",1)":"");}function
alter_table($h,$f,$o,$ib,$_a,$wb,$R,$Ua,$tb){$u=array();foreach($o
as$c){$I=idf_escape($c[0]);$b=$c[1];if(!$b){$u["DROP"][]=" COLUMN $c[0]";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($c[0]==""){$u["ADD"][]="\n  ".implode("",$b);}else{unset($b[6]);if($I!=$b[0]){queries("EXEC sp_rename ".q(table($h).".$I").", ".q(idf_unescape($b[0])).", 'COLUMN'");}$u["ALTER COLUMN ".implode("",$b)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$u["ADD"])."\n)");}if($h!=$f){queries("EXEC sp_rename ".q(table($h)).", ".q($f));}foreach($u
as$e=>$b){if(!queries("ALTER TABLE ".idf_escape($f)." $e".implode(",",$b))){return
false;}}return
true;}function
alter_indexes($h,$u){$w=array();$Ca=array();foreach($u
as$b){if($b[2]){if($b[0]=="PRIMARY"){$Ca[]=$b[1];}else{$w[]="$b[1] ON ".table($h);}}elseif(!queries(($b[0]!="PRIMARY"?"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $b[1]")){return
false;}}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$Ca||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$Ca)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h).($q?" (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")":"DEFAULT VALUES"));}function
insert_update($h,$q,$Ha){$la=array();$t=array();foreach($q
as$e=>$b){$la[]="$e = $b";if(isset($Ha[idf_unescape($e)])){$t[]="$e = $b";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$q).")) AS source (c".implode(", c",range(1,count($q))).") ON ".implode(" AND ",$t)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$la)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($q)).") VALUES (".implode(", ",$q).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$j){$g->query("SET SHOWPLAN_ALL ON");$d=$g->query($j);$g->query("SET SHOWPLAN_ALL OFF");return$d;}function
foreign_keys($h){$d=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$a){$A=&$d[$a["FK_NAME"]];$A["table"]=$a["PKTABLE_NAME"];$A["source"][]=$a["FKCOLUMN_NAME"];$A["target"][]=$a["PKCOLUMN_NAME"];}return$d;}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($aa){return
queries("DROP VIEW ".implode(", ",array_map('table',$aa)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$aa,$oa){return
apply_queries("ALTER SCHEMA ".idf_escape($oa)." TRANSFER",array_merge($E,$aa));}function
trigger($f){$D=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$d=reset($D);if($d){$d["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$d["text"]);}return$d;}function
triggers($h){$d=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($h))as$a){$d[$a["name"]]=array($a["Timing"],$a["Event"]);}return$d;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!=""){return$_GET["ns"];}return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($La){return
true;}function
use_sql($ca){return"USE ".idf_escape($ca);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($qb){return
ereg('^(scheme|trigger|view|drop_col)$',$qb);}$_="mssql";$T=array();$Sa=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Datum oder Zeit'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Zeichenketten'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binär'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$e=>$b){$T+=$b;$Sa[$e]=array_keys($b);}$pb=array();$Vb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("len","lower","round","upper");$ob=array("avg","count","count distinct","max","min","sum");$Yb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Ja[]="MySQLi";$Ja[]="MySQL";$Ja[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ja=array("server"=>"MySQL")+$ja;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($G,$O,$S){mysqli_report(MYSQLI_REPORT_OFF);list($rf,$Dc)=explode(":",$G,2);$d=@$this->real_connect(($G!=""?$rf:ini_get("mysqli.default_host")),("$G$O"!=""?$O:ini_get("mysqli.default_user")),("$G$O$S"!=""?$S:ini_get("mysqli.default_pw")),null,(is_numeric($Dc)?$Dc:ini_get("mysqli.default_port")),(!is_numeric($Dc)?$Dc:null));if($d){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$d;}function
result($j,$c=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch_array();return$a[$c];}function
quote($F){return"'".$this->escape_string($F)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($G,$O,$S){$this->_link=@mysql_connect(($G!=""?$G:ini_get("mysql.default_host")),("$G$O"!=""?$O:ini_get("mysql.default_user")),("$G$O$S"!=""?$S:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($F){return"'".mysql_real_escape_string($F,$this->_link)."'";}function
select_db($ca){return
mysql_select_db($ca,$this->_link);}function
query($j,$ab=false){$i=@($ab?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$c=0){$i=$this->query($j);if(!$i){return
false;}return
mysql_result($i->_result,0,$c);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($i){$this->_result=$i;$this->num_rows=mysql_num_rows($i);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$d=mysql_fetch_field($this->_result);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=($d->blob?63:0);return$d;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($G,$O,$S){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$G)),$O,$S);$this->query("SET NAMES utf8");return
true;}function
select_db($ca){return$this->query("USE ".idf_escape($ca));}function
query($j,$ab=false){$this->setAttribute(1000,!$ab);return
parent::query($j,$ab);}}}function
idf_escape($Q){return"`".str_replace("`","``",$Q)."`";}function
table($Q){return
idf_escape($Q);}function
connect(){global$r;$g=new
Min_DB;$wa=$r->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){$g->query("SET SQL_QUOTE_SHOW_CREATE=1");return$g;}return$g->error;}function
get_databases($hf=true){$d=&get_session("dbs");if(!isset($d)){if($hf){restart_session();ob_flush();flush();}$d=get_vals("SHOW DATABASES");}return$d;}function
limit($j,$t,$L,$M=0,$Qa=" "){return" $j$t".(isset($L)?$Qa."LIMIT $L".($M?" OFFSET $M":""):"");}function
limit1($j,$t){return
limit($j,$t,1);}function
db_collation($s,$X){global$g;$d=null;$fa=$g->result("SHOW CREATE DATABASE ".idf_escape($s),1);if(preg_match('~ COLLATE ([^ ]+)~',$fa,$l)){$d=$l[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$fa,$l)){$d=$X[$l[1]][0];}return$d;}function
engines(){$d=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$d[]=$a["Engine"];}}return$d;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($z){$d=array();foreach($z
as$s){$d[$s]=count(get_vals("SHOW TABLES IN ".idf_escape($s)));}return$d;}function
table_status($f=""){$d=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$d[$a["Name"]]=$a;}return$d;}function
is_view($H){return!isset($H["Rows"]);}function
fk_support($H){return($H["Engine"]=="InnoDB");}function
fields($h,$gc=false){$d=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$l);$d[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$l[1],"length"=>$l[2],"unsigned"=>ltrim($l[3].$l[4]),"default"=>($a["Default"]!=""||ereg("char",$l[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$l)?$l[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$d;}function
indexes($h,$J=null){global$g;if(!is_object($J)){$J=$g;}$d=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$J)as$a){$d[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$d[$a["Key_name"]]["columns"][]=$a["Column_name"];$d[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$d;}function
foreign_keys($h){global$g,$db;static$ha='`(?:[^`]|``)+`';$d=array();$we=$g->result("SHOW CREATE TABLE ".table($h),1);if($we){preg_match_all("~CONSTRAINT ($ha) FOREIGN KEY \\(((?:$ha,? ?)+)\\) REFERENCES ($ha)(?:\\.($ha))? \\(((?:$ha,? ?)+)\\)(?: ON DELETE (".implode("|",$db)."))?(?: ON UPDATE (".implode("|",$db)."))?~",$we,$ra,PREG_SET_ORDER);foreach($ra
as$l){preg_match_all("~$ha~",$l[2],$Ga);preg_match_all("~$ha~",$l[5],$oa);$d[idf_unescape($l[1])]=array("db"=>idf_unescape($l[4]!=""?$l[3]:$l[4]),"table"=>idf_unescape($l[4]!=""?$l[4]:$l[3]),"source"=>array_map('idf_unescape',$Ga[0]),"target"=>array_map('idf_unescape',$oa[0]),"on_delete"=>$l[6],"on_update"=>$l[7],);}}return$d;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$d=array();foreach(get_rows("SHOW COLLATION")as$a){$d[$a["Charset"]][]=$a["Collation"];}ksort($d);foreach($d
as$e=>$b){sort($d[$e]);}return$d;}function
information_schema($s){global$g;return($g->server_info>=5&&$s=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($s,$R){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($s).($R?" COLLATE ".q($R):""));}function
drop_databases($z){set_session("dbs",null);return
apply_queries("DROP DATABASE",$z,'idf_escape');}function
rename_database($f,$R){if(create_database($f,$R)){$Nb=array();foreach(tables_list()as$h=>$y){$Nb[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Nb||queries("RENAME TABLE ".implode(", ",$Nb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$xd=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$xd="";break;}if($w["type"]=="PRIMARY"){$xd=" UNIQUE";}}}return" AUTO_INCREMENT$xd";}function
alter_table($h,$f,$o,$ib,$_a,$wb,$R,$Ua,$tb){$u=array();foreach($o
as$c){$u[]=($c[1]?($h!=""?($c[0]!=""?"CHANGE ".idf_escape($c[0]):"ADD"):" ")." ".implode($c[1]).($h!=""?" $c[2]":""):"DROP ".idf_escape($c[0]));}$u=array_merge($u,$ib);$Pb="COMMENT=".q($_a).($wb?" ENGINE=".q($wb):"").($R?" COLLATE ".q($R):"").($Ua!=""?" AUTO_INCREMENT=$Ua":"").$tb;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n) $Pb");}if($h!=$f){$u[]="RENAME TO ".table($f);}$u[]=$Pb;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$u));}function
alter_indexes($h,$u){foreach($u
as$e=>$b){$u[$e]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($h).implode(",",$u));}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($aa){return
queries("DROP VIEW ".implode(", ",array_map('table',$aa)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$aa,$oa){$Nb=array();foreach(array_merge($E,$aa)as$h){$Nb[]=table($h)." TO ".idf_escape($oa).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Nb));}function
trigger($f){$D=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($D);}function
triggers($h){$d=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$a){$d[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$d;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$y){global$g,$Cb,$tc,$T;$lf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$te="((".implode("|",array_merge(array_keys($T),$lf)).")(?:\\s*\\(((?:[^'\")]*|$Cb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ha="\\s*(".($y=="FUNCTION"?"":implode("|",$tc)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$te";$fa=$g->result("SHOW CREATE $y ".idf_escape($f),2);preg_match("~\\(((?:$ha\\s*,?)*)\\)".($y=="FUNCTION"?"\\s*RETURNS\\s+$te":"")."\\s*(.*)~is",$fa,$l);$o=array();preg_match_all("~$ha\\s*,?~is",$l[1],$ra,PREG_SET_ORDER);foreach($ra
as$Ya){$f=str_replace("``","`",$Ya[2]).$Ya[3];$o[]=array("field"=>$f,"type"=>strtolower($Ya[5]),"length"=>preg_replace_callback("~$Cb~s",'normalize_enum',$Ya[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ya[8] $Ya[7]"))),"full_type"=>$Ya[4],"inout"=>strtoupper($Ya[1]),"collation"=>strtolower($Ya[9]),);}if($y!="FUNCTION"){return
array("fields"=>$o,"definition"=>$l[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$l[12],"length"=>$l[13],"unsigned"=>$l[15],"collation"=>$l[16]),"definition"=>$l[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($h,$q){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($q)).")\nVALUES (".implode(", ",$q).")");}function
insert_update($h,$q,$Ha){foreach($q
as$e=>$b){$q[$e]="$e = $b";}$la=implode(", ",$q);return
queries("INSERT INTO ".table($h)." SET $la ON DUPLICATE KEY UPDATE $la");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($La){return
true;}function
create_sql($h,$Ua){global$g;$d=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$Ua){$d=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$d);}return$d;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($ca){return"USE ".idf_escape($ca);}function
trigger_sql($h,$W){$d="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$a){$d.="\n".($W=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$d;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($qb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$qb);}$_="sql";$T=array();$Sa=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum oder Zeit'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Zeichenketten'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binär'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listen'=>array("enum"=>65535,"set"=>64),)as$e=>$b){$T+=$b;$Sa[$e]=array_keys($b);}$pb=array("unsigned","zerofill","unsigned zerofill");$Vb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$V=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$ob=array("avg","count","count distinct","group_concat","max","min","sum");$Yb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Sc="3.0.0";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
loginForm(){global$ja;echo'<table cellspacing="0">
<tr><th>Datenbank System<td>',html_select("driver",$ja,DRIVER),'<tr><th>Server<td><input name="server" value="',h(SERVER),'">
<tr><th>Benutzer<td><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Passwort<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Passwort speichern')."\n";}function
login($Ef,$S){return
true;}function
tableName($Wc){return
h($Wc["Name"]);}function
fieldName($c,$ub=0){return'<span title="'.h($c["full_type"]).'">'.h($c["field"]).'</span>';}function
selectLinks($Wc,$q=""){echo'<p class="tabs">';$Ia=array("select"=>'Daten auswählen',"table"=>'Struktur anzeigen');if(is_view($Wc)){$Ia["view"]='View ändern';}else{$Ia["create"]='Tabelle ändern';}if(isset($q)){$Ia["edit"]='Neuer Datensatz';}foreach($Ia
as$e=>$b){echo" <a href='".h(ME)."$e=".urlencode($Wc["Name"]).($e=="edit"?$q:"")."'>".bold($b,isset($_GET[$e]))."</a>";}echo"\n";}function
backwardKeys($h,$Bf){return
array();}function
backwardKeysPrint($Ff,$a){}function
selectQuery($j){global$_;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Seite'.": ".'letzte'."'>&gt;&gt;</a> <code class='jush-$_'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Ändern'."</a>\n";}function
rowDescription($h){return"";}function
rowDescriptions($D,$mf){return$D;}function
selectVal($b,$x,$c){$d=($b!="<i>NULL</i>"&&ereg("^char|binary",$c["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$c["type"])&&!is_utf8($b)){$d=lang(array('%d Byte','%d Bytes'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($x?"<a href='$x'>$d</a>":$d);}function
editVal($b,$c){return(ereg("binary",$c["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($C,$B){global$V,$ob;print_fieldset("select",'Daten zeigen von',$C);$k=0;$ge=array('Funktionen'=>$V,'Agregationen'=>$ob);foreach($C
as$e=>$b){$b=$_GET["columns"][$e];echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$ge,$b["fun"]),"(<select name='columns[$k][col]'><option>".optionlist($B,$b["col"],true)."</select>)</div>\n";$k++;}echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$ge,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$k][col]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($t,$B,$K){print_fieldset("search",'Suchen',$t);foreach($K
as$k=>$w){if($w["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$w["columns"]))."</i>) AGAINST"," <input name='fulltext[$k]' value='".h($_GET["fulltext"][$k])."'>",checkbox("boolean[$k]",1,isset($_GET["boolean"][$k]),"BOOL"),"<br>\n";}}$k=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$k][col]'><option value=''>(".'beliebig'.")".optionlist($B,$b["col"],true)."</select>",html_select("where[$k][op]",$this->operators,$b["op"]),"<input name='where[$k][val]' value='".h($b["val"])."'></div>\n";$k++;}}echo"<div><select name='where[$k][col]' onchange='selectAddRow(this);'><option value=''>(".'beliebig'.")".optionlist($B,null,true)."</select>",html_select("where[$k][op]",$this->operators),"<input name='where[$k][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ub,$B,$K){print_fieldset("sort",'Ordnen',$ub);$k=0;foreach((array)$_GET["order"]as$e=>$b){if(isset($B[$b])){echo"<div><select name='order[$k]'><option>".optionlist($B,$b,true)."</select>",checkbox("desc[$k]",1,isset($_GET["desc"][$e]),'absteigend')."</div>\n";$k++;}}echo"<div><select name='order[$k]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>",checkbox("desc[$k]",1,0,'absteigend')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($L){echo"<fieldset><legend>".'Begrenzung'."</legend><div>";echo"<input name='limit' size='3' value='".h($L)."'>","</div></fieldset>\n";}function
selectLengthPrint($Bb){if(isset($Bb)){echo"<fieldset><legend>".'Textlänge'."</legend><div>",'<input name="text_length" size="3" value="'.h($Bb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Aktion'."</legend><div>","<input type='submit' value='".'Daten zeigen von'."'>","</div></fieldset>\n";}function
selectEmailPrint($Gf,$B){}function
selectColumnsProcess($B,$K){global$V,$ob;$C=array();$va=array();foreach((array)$_GET["columns"]as$e=>$b){if($b["fun"]=="count"||(isset($B[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$V)||in_array($b["fun"],$ob)))){$C[$e]=apply_sql_function($b["fun"],(isset($B[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$ob)){$va[]=$C[$e];}}}return
array($C,$va);}function
selectSearchProcess($o,$K){global$_;$d=array();foreach($K
as$k=>$w){if($w["type"]=="FULLTEXT"&&$_GET["fulltext"][$k]!=""){$d[]="MATCH (".implode(", ",array_map('idf_escape',$w["columns"])).") AGAINST (".q($_GET["fulltext"][$k]).(isset($_GET["boolean"][$k])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Sb=" $b[op]";if(ereg('IN$',$b["op"])){$Eb=process_length($b["val"]);$Sb.=" (".($Eb!=""?$Eb:"NULL").")";}elseif($b["op"]=="LIKE %%"){$Sb=" LIKE ".$this->processInput($o[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Sb.=" ".$this->processInput($o[$b["col"]],$b["val"]);}if($b["col"]!=""){$d[]=idf_escape($b["col"]).$Sb;}else{$bb=array();foreach($o
as$f=>$c){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$c["type"])){$f=idf_escape($f);$bb[]=($_=="sql"&&ereg('char|text|enum|set',$c["type"])&&!ereg('^utf8',$c["collation"])?"CONVERT($f USING utf8)":$f);}}$d[]=($bb?"(".implode("$Sb OR ",$bb)."$Sb)":"0");}}}return$d;}function
selectOrderProcess($o,$K){$d=array();foreach((array)$_GET["order"]as$e=>$b){if(isset($o[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$d[]=(isset($o[$b])?idf_escape($b):$b).(isset($_GET["desc"][$e])?" DESC":"");}}return$d;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($t,$mf){return
false;}function
messageQuery($j){global$_;restart_session();$U="sql-".count($_SESSION["messages"]);$lb=&get_session("queries");$lb[$_GET["db"]][]=(strlen($j)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...":$j);return" <a href='#$U' onclick=\"return !toggle('$U');\">".'SQL-Query'."</a><div id='$U' class='hidden'><pre class='jush-$_'>".shorten_utf8($j,1000).'</pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($lb[$_GET["db"]])-1)).'">'.'Ändern'.'</a></div>';}function
editFunctions($c){global$Yb;$d=($c["null"]?"NULL/":"");foreach($Yb
as$e=>$V){if(!$e||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($V
as$ha=>$b){if(!$ha||ereg($ha,$c["type"])){$d.="/$b";}}}}return
explode("/",$d);}function
editInput($h,$c,$Pa,$p){if($c["type"]=="enum"){return($c["null"]?"<label><input type='radio'$Pa value=''".(isset($p)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"")."<label><input type='radio'$Pa value='0'".($p===0?" checked":"")."><i>".'leer'."</i></label>";}return"";}function
processInput($c,$p,$N=""){$f=$c["field"];$d=q($p);if(ereg('^(now|getdate|uuid)$',$N)){$d="$N()";}elseif(ereg('^current_(date|timestamp)$',$N)){$d=$N;}elseif(ereg('^([+-]|\\|\\|)$',$N)){$d=idf_escape($f)." $N $d";}elseif(ereg('^[+-] interval$',$N)){$d=idf_escape($f)." $N ".(preg_match("~^([0-9]+|'[0-9.: -]') [A-Z_]+$~i",$p)?$p:$d);}elseif(ereg('^(addtime|subtime|concat)$',$N)){$d="$N(".idf_escape($f).", $d)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$N)){$d="$N($d)";}if(ereg("binary",$c["type"])){$d="unhex($d)";}return$d;}function
dumpOutput($C,$p=""){$d=array('text'=>'anzeigen','file'=>'Datei');if(function_exists('gzencode')){$d['gz']='gzip';}if(function_exists('bzcompress')){$d['bz2']='bzip2';}return
html_select("output",$d,$p,$C);}function
dumpFormat($C,$p=""){return
html_select("format",array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;'),$p,$C);}function
navigation($Lc){global$Sc,$g,$P,$_,$ja;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$Sc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Sc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Lc=="auth"){$fb=true;foreach((array)$_SESSION["pwds"]as$Ib=>$qf){foreach($qf
as$G=>$pf){foreach($pf
as$O=>$S){if(isset($S)){if($fb){echo"<p>\n";$fb=false;}echo"<a href='".h(auth_url($Ib,$G,$O))."'>($ja[$Ib]) ".h($O.($G!=""?"@$G":""))."</a><br>\n";}}}}}else{$z=get_databases();echo'<form action="" method="post">
<p class="logout">
<a href="',h(ME),'sql=">',bold('SQL-Query',isset($_GET["sql"])),'</a>
';if(support("dump")){echo'<a href="',h(ME),'dump=',urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"]),'">',bold('Export',isset($_GET["dump"])),'</a>
';}echo'<input type="hidden" name="token" value="',$P,'">
<input type="submit" name="logout" value="Abmelden">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($z?html_select("db",array(""=>"(".'Datenbank'.")")+$z,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Benutzung"',($z?" class='hidden'":""),'>
';if($Lc!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'Schema'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""){$E=tables_list();if(!$E){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{$this->tablesPrint($E);$Ia=array();foreach($E
as$h=>$y){$Ia[]=preg_quote($h,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $_: [ '".addcslashes(h(ME),"\\'/")."table=\$&', /\\b(".implode("|",$Ia).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$_;\n";}echo"</script>\n";}echo'<p><a href="'.h(ME).'create=">'.bold('Neue Tabelle',$_GET["create"]==="")."</a>\n";}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($E){echo"<p id='tables'>\n";foreach($E
as$h=>$y){echo'<a href="'.h(ME).'select='.urlencode($h).'">'.bold('zeigen',$_GET["select"]==$h).'</a> ','<a href="'.h(ME).'table='.urlencode($h).'">'.bold($this->tableName(array("Name"=>$h)),$_GET["table"]==$h)."</a><br>\n";}}}$r=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($r->operators)){$r->operators=$Vb;}function
page_header($je,$n="",$rc=array(),$ie=""){global$Hf,$Zb,$r,$g,$ja;header("Content-Type: text/html; charset=utf-8");header("X-Frame-Options: deny");$he=$je.($ie!=""?": ".h($ie):"");$cc=($Zb?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="de">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$he.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$r->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\', \'',$cc,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$cc');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0",'"></script>

<div id="content">
';if(isset($rc)){$x=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($x?h($x):".").'">'.$ja[DRIVER].'</a> &raquo; ';$x=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$G=(SERVER!=""?h(SERVER):'Server');if($rc===false){echo"$G\n";}else{echo"<a href='".($x?h($x):".")."'>$G</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($rc))){echo'<a href="'.h($x."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($rc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($rc
as$e=>$b){$fc=(is_array($b)?$b[1]:$b);if($fc!=""){echo'<a href="'.h(ME."$e=").urlencode(is_array($b)?$b[0]:$b).'">'.h($fc).'</a> &raquo; ';}}}echo"$je\n";}}echo"<h2>$he</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$z=&get_session("dbs");if(DB!=""&&$z&&!in_array(DB,$z,true)){$z=null;}if($n){echo"<div class='error'>$n</div>\n";}}function
page_footer($Lc=""){global$r;echo'</div>

<div id="menu">
';$r->navigation($Lc);echo'</div>
';}function
int32($da){while($da>=2147483648){$da-=4294967296;}while($da<=-2147483649){$da+=4294967296;}return(int)$da;}function
long2str($v,$Bd){$ia='';foreach($v
as$b){$ia.=pack('V',$b);}if($Bd){return
substr($ia,0,end($v));}return$ia;}function
str2long($ia,$Bd){$v=array_values(unpack('V*',str_pad($ia,4*ceil(strlen($ia)/4),"\0")));if($Bd){$v[]=strlen($ia);}return$v;}function
xxtea_mx($za,$ua,$Da,$Ma){return
int32((($za>>5&0x7FFFFFF)^$ua<<2)+(($ua>>3&0x1FFFFFFF)^$za<<4))^int32(($Da^$ua)+($Ma^$za));}function
encrypt_string($oc,$e){if($oc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$v=str2long($oc,true);$da=count($v)-1;$za=$v[$da];$ua=$v[0];$ta=floor(6+52/($da+1));$Da=0;while($ta-->0){$Da=int32($Da+0x9E3779B9);$mc=$Da>>2&3;for($ya=0;$ya<$da;$ya++){$ua=$v[$ya+1];$Kb=xxtea_mx($za,$ua,$Da,$e[$ya&3^$mc]);$za=int32($v[$ya]+$Kb);$v[$ya]=$za;}$ua=$v[0];$Kb=xxtea_mx($za,$ua,$Da,$e[$ya&3^$mc]);$za=int32($v[$da]+$Kb);$v[$da]=$za;}return
long2str($v,false);}function
decrypt_string($oc,$e){if($oc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$v=str2long($oc,false);$da=count($v)-1;$za=$v[$da];$ua=$v[0];$ta=floor(6+52/($da+1));$Da=int32($ta*0x9E3779B9);while($Da){$mc=$Da>>2&3;for($ya=$da;$ya>0;$ya--){$za=$v[$ya-1];$Kb=xxtea_mx($za,$ua,$Da,$e[$ya&3^$mc]);$ua=int32($v[$ya]-$Kb);$v[$ya]=$ua;}$za=$v[$da];$Kb=xxtea_mx($za,$ua,$Da,$e[$ya&3^$mc]);$ua=int32($v[0]-$Kb);$v[0]=$ua;$Da=int32($Da-0x9E3779B9);}return
long2str($v,true);}$g='';if(!$ja){page_header('Keine Erweiterungen installiert',sprintf('Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.',implode(", ",$Ja)),null);page_footer("auth");exit;}$P=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Ab=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($e)=explode(":",$b);$Ab[$e]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$e=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Cc=$r->permanentLogin();$Ab[$e]="$e:".base64_encode($Cc?encrypt_string($_POST["password"],$Cc):"");cookie("adminer_permanent",implode(" ",$Ab));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($P&&$_POST["token"]!=$P){page_header('Abmelden','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$e){set_session($e,null);}$e=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Ab[$e]){unset($Ab[$e]);cookie("adminer_permanent",implode(" ",$Ab));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Abmeldung erfolgreich.');}}elseif($Ab&&!$_SESSION["pwds"]){session_regenerate_id();$Cc=$r->permanentLogin();foreach($Ab
as$e=>$b){list(,$Af)=explode(":",$b);list($Ib,$G,$O)=array_map('base64_decode',explode("-",$e));$_SESSION["pwds"][$Ib][$G][$O]=decrypt_string(base64_decode($Af),$Cc);}}function
auth_error($le=null){global$g,$r,$P;$Fc=session_name();$n="";if(!$_COOKIE[$Fc]&&$_GET[$Fc]&&ini_bool("session.use_only_cookies")){$n='Sitzungen müssen aktiviert sein.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Fc]||$_GET[$Fc])&&!$P){$n='Sitzungsdauer abgelaufen, bitte erneut anmelden.';}else{$S=&get_session("pwds");if(isset($S)){$n=h($le?$le->getMessage():(is_string($g)?$g:'Ungültige Anmelde-Informationen.'));$S=null;}}}page_header('Login',$n,null);echo"<form action='' method='post'>\n";$r->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$g=connect();}if(is_string($g)||!$r->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$P=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$P;}$n=($_POST?($_POST["token"]==$P?"":'CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','"post_max_size"')));function
connect_error(){global$g,$P,$n,$ja;$z=array();if(DB!=""){page_header('Datenbank'.": ".h(DB),'Datenbank ungültig.',true);}else{if($_POST["db"]&&!$n){set_session("dbs",null);queries_redirect(substr(ME,0,-1),'Datenbanken entfernt.',drop_databases($_POST["db"]));}page_header('Datenbank auswählen',$n,false);echo"<p><a href='".h(ME)."database='>".'Neue Datenbank'."</a>\n";foreach(array('privileges'=>'Rechte','processlist'=>'Prozessliste','variables'=>'Variablen','status'=>'Status',)as$e=>$b){if(support($e)){echo"<a href='".h(ME)."$e='>$b</a>\n";}}echo"<p>".sprintf('Version %s: %s, mit PHP-Erweiterung %s',$ja[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Angemeldet als: %s',"<b>".h(logged_user())."</b>")."\n";$z=get_databases();if($z){$X=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$P'>&nbsp;<th>".'Datenbank'."<td>".'Collation'."<td>".'Tabellen'."</thead>\n";foreach($z
as$s){$pd=h(ME)."db=".urlencode($s);echo"<tr".odd()."><td>".checkbox("db[]",$s,in_array($s,(array)$_POST["db"])),"<th><a href='$pd'>".h($s)."</a>","<td><a href='$pd&amp;database='>".nbsp(db_collation($s,$X))."</a>","<td align='right'><a href='$pd&amp;schema=' id='tables-".h($s)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Entfernen'."' onclick=\"return confirm('".'Sind Sie sicher ?'." (' + formChecked(this, /db/) + ')');\">\n","</form>\n";}}page_footer("db");echo"<script type='text/javascript' src='".h(ME)."script=connect'></script>\n";}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""&&(!isset($_GET["ns"])||!set_schema($_GET["ns"]))){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}function
select($i,$J=null){$Ia=array();$K=array();$B=array();$oe=array();$T=array();odd('');for($k=0;$a=$i->fetch_row();$k++){if(!$k){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($na=0;$na<count($a);$na++){$c=$i->fetch_field();$Ea=$c->orgtable;$jc=$c->orgname;if($Ea!=""){if(!isset($K[$Ea])){$K[$Ea]=array();foreach(indexes($Ea,$J)as$w){if($w["type"]=="PRIMARY"){$K[$Ea]=array_flip($w["columns"]);break;}}$B[$Ea]=$K[$Ea];}if(isset($B[$Ea][$jc])){unset($B[$Ea][$jc]);$K[$Ea][$jc]=$na;$Ia[$na]=$Ea;}}if($c->charsetnr==63){$oe[$na]=true;}$T[$na]=$c->type;echo"<th".($Ea!=""||$c->name!=$jc?" title='".h(($Ea!=""?"$Ea.":"").$jc)."'":"").">".h($c->name);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$e=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($oe[$e]&&!is_utf8($b)){$b="<i>".lang(array('%d Byte','%d Bytes'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($T[$e]==254){$b="<code>$b</code>";}}if(isset($Ia[$e])&&!$B[$Ia[$e]]){$x="edit=".urlencode($Ia[$e]);foreach($K[$Ia[$e]]as$Ic=>$na){$x.="&where".urlencode("[".bracket_escape($Ic)."]")."=".urlencode($a[$na]);}$b="<a href='".h(ME.$x)."'>$b</a>";}}echo"<td>$b";}}echo($k?"</table>":"<p class='message'>".'Keine Daten.')."\n";}function
referencable_primary($of){$d=array();foreach(table_status()as$Fa=>$h){if($Fa!=$of&&fk_support($h)){foreach(fields($Fa)as$c){if($c["primary"]){if($d[$Fa]){unset($d[$Fa]);break;}$d[$Fa]=$c;}}}}return$d;}function
textarea($f,$p,$D=10,$bb=80){echo"<textarea name='$f' rows='$D' cols='$bb' style='width: 98%;' spellcheck='false' onkeydown='return textareaKeydown(this, event);'>".h($p)."</textarea>";}function
edit_type($e,$c,$X,$ba=array()){global$Sa,$T,$pb,$db;echo'<td><select name="',$e,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$c["type"]||isset($T[$c["type"]])?array():array($c["type"]))+$Sa+($ba?array('Fremdschlüssel'=>$ba):array()),$c["type"]),'</select>
<td><input name="',$e,'[length]" value="',h($c["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td>',"<select name='$e"."[collation]'".(ereg('(char|text|enum|set)$',$c["type"])?"":" class='hidden'").'><option value="">('.'Kollation'.')'.optionlist($X,$c["collation"]).'</select>',($pb?"<select name='$e"."[unsigned]'".(!$c["type"]||ereg('(int|float|double|decimal)$',$c["type"])?"":" class='hidden'").'><option>'.optionlist($pb,$c["unsigned"]).'</select>':''),($ba?"<select name='$e"."[on_delete]'".(ereg("`",$c["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist($db,$c["on_delete"])."</select> ":" ");}function
process_length($ea){global$Cb;return(preg_match("~^\\s*(?:$Cb)(?:\\s*,\\s*(?:$Cb))*\\s*\$~",$ea)&&preg_match_all("~$Cb~",$ea,$ra)?implode(",",$ra[0]):preg_replace('~[^0-9,+-]~','',$ea));}function
process_type($c,$kc="COLLATE"){global$pb;return" $c[type]".($c["length"]!=""?"(".process_length($c["length"]).")":"").(ereg('int|float|double|decimal',$c["type"])&&in_array($c["unsigned"],$pb)?" $c[unsigned]":"").(ereg('char|text|enum|set',$c["type"])&&$c["collation"]?" $kc ".q($c["collation"]):"");}function
process_field($c,$Qc){return
array(idf_escape($c["field"]),process_type($Qc),($c["null"]?" NULL":" NOT NULL"),(isset($c["default"])?" DEFAULT ".($c["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$c["default"])?$c["default"]:q($c["default"])):""),($c["on_update"]?" ON UPDATE $c[on_update]":""),(support("comment")&&$c["comment"]!=""?" COMMENT ".q($c["comment"]):""),($c["auto_increment"]?auto_increment():null),);}function
type_class($y){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$e=>$b){if(ereg("$e|$b",$y)){return" class='$e'";}}}function
edit_fields($o,$X,$y="TABLE",$me=0,$ba=array(),$Fb=false){global$tc;foreach($o
as$c){if($c["comment"]!=""){$Fb=true;break;}}echo'<thead><tr class="wrap">
';if($y=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($y=="TABLE"?'Spaltenname':'Name des Parameters'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Länge
<td>Optionen
';if($y=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto-Inkrement">AI</acronym>
<td class="hidden">Vorgabewerte festlegen
',(support("comment")?"<td".($Fb?"":" class='hidden'").">".'Kommentar':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".'Hinzufügen'."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
';foreach($o
as$k=>$c){$k++;$td=$c[($_POST?"orig":"field")];$ye=(isset($_POST["add"][$k-1])||(isset($c["field"])&&!$_POST["drop_col"][$k]))&&(support("drop_col")||$td=="");echo'<tr',($ye?"":" style='display: none;'"),'>
',($y=="PROCEDURE"?"<td>".html_select("fields[$k][inout]",$tc,$c["inout"]):""),'<th>';if($ye){echo'<input name="fields[',$k,'][field]" value="',h($c["field"]),'" onchange="',($c["field"]!=""||count($o)>1?"":"editingAddRow(this, $me); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$k,'][orig]" value="',h($td),'">
';edit_type("fields[$k]",$c,$X,$ba);if($y=="TABLE"){echo'<td>',checkbox("fields[$k][null]",1,$c["null"]),'<td><input type="radio" name="auto_increment_col" value="',$k,'"';if($c["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$k][has_default]",1,$c["has_default"]),'<input name="fields[',$k,'][default]" value="',h($c["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Fb?"":" class='hidden'")."><input name='fields[$k][comment]' value='".h($c["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".'Hinzufügen'."' onclick='return !editingAddRow(this, $me, 1);'>&nbsp;"."<input type='image' name='up[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=up.gif&amp;version=3.0.0' alt='^' title='".'Nach oben'."'>&nbsp;"."<input type='image' name='down[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=down.gif&amp;version=3.0.0' alt='v' title='".'Nach unten'."'>&nbsp;":""),($td==""||support("drop_col")?"<input type='image' name='drop_col[$k]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0' alt='x' title='".'Entfernen'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$Fb;}function
process_fields(&$o){ksort($o);$M=0;if($_POST["up"]){$mb=0;foreach($o
as$e=>$c){if(key($_POST["up"])==$e){unset($o[$e]);array_splice($o,$mb,0,array($c));break;}if(isset($c["field"])){$mb=$M;}$M++;}}if($_POST["down"]){$pa=false;foreach($o
as$e=>$c){if(isset($c["field"])&&$pa){unset($o[key($_POST["down"])]);array_splice($o,$M,0,array($pa));break;}if(key($_POST["down"])==$e){$pa=$c;}$M++;}}$o=array_values($o);if($_POST["add"]){array_splice($o,key($_POST["add"]),0,array(array()));}}function
normalize_enum($l){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($l[0][0].$l[0][0],$l[0][0],substr($l[0],1,-1))),'\\'))."'";}function
grant($ga,$ma,$B,$xb){if(!$ma){return
true;}if($ma==array("ALL PRIVILEGES","GRANT OPTION")){return($ga=="GRANT"?queries("$ga ALL PRIVILEGES$xb WITH GRANT OPTION"):queries("$ga ALL PRIVILEGES$xb")&&queries("$ga GRANT OPTION$xb"));}return
queries("$ga ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$B, ",$ma).$B).$xb);}function
drop_create($Ca,$fa,$ka,$ze,$nf,$if,$f){if($_POST["drop"]){return
query_redirect($Ca,$ka,$ze,true,!$_POST["dropped"]);}$Za=$f!=""&&($_POST["dropped"]||queries($Ca));$kf=queries($fa);if(!queries_redirect($ka,($f!=""?$nf:$if),$kf)&&$Za){restart_session();$_SESSION["messages"][]=$ze;}return$Za;}function
tar_file($Y,$Yc){$d=pack("a100a8a8a8a12a12",$Y,644,0,0,decoct(strlen($Yc)),decoct(time()));$Me=8*32;for($k=0;$k<strlen($d);$k++){$Me+=ord($d{$k});}$d.=sprintf("%06o",$Me)."\0 ";return$d.str_repeat("\0",512-strlen($d)).$Yc.str_repeat("\0",511-(strlen($Yc)+511)%
512);}function
dump_table($h,$W,$Ec=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($W){dump_csv(array_keys(fields($h)));}}elseif($W){$fa=create_sql($h,$_POST["auto_increment"]);if($fa){if($W=="DROP+CREATE"){echo"DROP ".($Ec?"VIEW":"TABLE")." IF EXISTS ".table($h).";\n";}if($Ec){$fa=preg_replace('~^([A-Z =]+) DEFINER=`'.str_replace("@","`@`",logged_user()).'`~','\\1',$fa);}echo($W!="CREATE+ALTER"?$fa:($Ec?substr_replace($fa," OR REPLACE",6,0):substr_replace($fa," IF NOT EXISTS",12,0))).";\n\n";}if($W=="CREATE+ALTER"&&!$Ec){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($h)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$o=array();$Jb="";foreach(get_rows($j)as$a){$xa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($xa)?q($xa):"NULL");$a["after"]=q($Jb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($xa)?" DEFAULT ".($xa=="CURRENT_TIMESTAMP"?$xa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($Jb?" AFTER ".idf_escape($Jb):" FIRST"));echo", ADD $a[alter]";$o[]=$a;$Jb=$a["COLUMN_NAME"];}echo"';
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
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($h)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dump_data($h,$W,$C=""){global$g,$_;$Ne=($_=="sqlite"?0:1048576);if($W){if($_POST["format"]=="sql"&&$W=="TRUNCATE+INSERT"){echo
truncate_sql($h).";\n";}$o=fields($h);$i=$g->query(($C?$C:"SELECT * FROM ".table($h)),1);if($i){$lc="";$kb="";while($a=$i->fetch_assoc()){if($_POST["format"]!="sql"){dump_csv($a);}else{if(!$lc){$lc="INSERT INTO ".table($h)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$e=>$b){$a[$e]=(isset($b)?(ereg('int|float|double|decimal',$o[$e]["type"])?$b:q($b)):"NULL");}$ia=implode(",\t",$a);if($W=="INSERT+UPDATE"){$q=array();foreach($a
as$e=>$b){$q[]=idf_escape($e)." = $b";}echo"$lc ($ia) ON DUPLICATE KEY UPDATE ".implode(", ",$q).";\n";}else{$ia=($Ne?"\n":" ")."($ia)";if(!$kb){$kb=$lc.$ia;}elseif(strlen($kb)+2+strlen($ia)<$Ne){$kb.=",$ia";}else{$kb.=";\n";echo$kb;$kb=$lc.$ia;}}}}if($_POST["format"]=="sql"&&$W!="INSERT+UPDATE"&&$kb){$kb.=";\n";echo$kb;}}}}function
dump_headers($Pe,$xf=false){$Y=($Pe!=""?friendly_url($Pe):"adminer");$Db=$_POST["output"];$yb=($_POST["format"]=="sql"?"sql":($xf?"tar":"csv"));header("Content-Type: ".($Db=="bz2"?"application/x-bzip":($Db=="gz"?"application/x-gzip":($yb=="tar"?"application/x-tar":($yb=="sql"||$Db!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Db!="text"){header("Content-Disposition: attachment; filename=$Y.$yb".($Db!="file"&&!ereg('[^0-9a-z]',$Db)?".$Db":""));}session_write_close();if($_POST["output"]=="bz2"){ob_start('bzcompress',1e6);}if($_POST["output"]=="gz"){ob_start('gzencode',1e6);}return$yb;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$db=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Va=" onclick=\"return confirm('".'Sind Sie sicher ?'."');\"";$Cb='\'(?:\'\'|[^\'\\\\]|\\\\.)*\'|"(?:""|[^"\\\\]|\\\\.)*"';$tc=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$o=fields($m);if(!$o){$n=error();}$H=($o?table_status($m):array());page_header(($o&&is_view($H)?'View':'Tabelle').": ".h($m),$n);$r->selectLinks($H);$_a=$H["Comment"];if($_a!=""){echo"<p>".'Kommentar'.": ".h($_a)."\n";}if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Spalte'."<td>".'Typ'.(support("comment")?"<td>".'Kommentar':"")."</thead>\n";foreach($o
as$c){echo"<tr".odd()."><th>".h($c["field"]),"<td>".h($c["full_type"]).($c["null"]?" <i>NULL</i>":"").($c["auto_increment"]?" <i>".'Auto-Inkrement'."</i>":""),(support("comment")?"<td>".nbsp($c["comment"]):""),"\n";}echo"</table>\n";if(!is_view($H)){echo"<h3>".'Indizes'."</h3>\n";$K=indexes($m);if($K){echo"<table cellspacing='0'>\n";foreach($K
as$f=>$w){ksort($w["columns"]);$bc=array();foreach($w["columns"]as$e=>$b){$bc[]="<i>".h($b)."</i>".($w["lengths"][$e]?"(".$w["lengths"][$e].")":"");}echo"<tr title='".h($f)."'><th>$w[type]<td>".implode(", ",$bc)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.'Indizes ändern'."</a>\n";if(fk_support($H)){echo"<h3>".'Fremdschlüssel'."</h3>\n";$ba=foreign_keys($m);if($ba){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Ursprung'."<td>".'Ziel'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($_!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($ba
as$f=>$A){$x=($A["db"]!=""?"<b>".h($A["db"])."</b>.":"").h($A["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$A["source"]))."</i>","<td><a href='".h($A["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($A["db"]),ME):ME)."table=".urlencode($A["table"])."'>$x</a>","(<i>".implode("</i>, <i>",array_map('h',$A["target"]))."</i>)","<td>$A[on_delete]\n","<td>$A[on_update]\n";if($_!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($f)).'">'.'Ändern'.'</a>';}}echo"</table>\n";}if($_!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.'Fremdschlüssel hinzufügen'."</a>\n";}}if(support("trigger")){echo"<h3>".'Trigger'."</h3>\n";$ec=triggers($m);if($ec){echo"<table cellspacing='0'>\n";foreach($ec
as$e=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($e)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($e))."'>".'Ändern'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.'Trigger hinzufügen'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Datenbankschema',"",array(),DB);$rb=array();$Ie=array();preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$_COOKIE["adminer_schema"],$ra,PREG_SET_ORDER);foreach($ra
as$k=>$l){$rb[$l[1]]=array($l[2],$l[3]);$Ie[]="\n\t'".addcslashes($l[1],"\r\n'\\/")."': [ $l[2], $l[3] ]";}$Rb=0;$He=-1;$La=array();$Be=array();$Ae=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$qc=0;$La[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$c){$qc+=1.25;$c["pos"]=$qc;$La[$a["Name"]]["fields"][$f]=$c;}$La[$a["Name"]]["pos"]=($rb[$a["Name"]]?$rb[$a["Name"]]:array($Rb,0));if(fk_support($a)){foreach(foreign_keys($a["Name"])as$b){if(!$b["db"]){$Aa=$He;if($rb[$a["Name"]][1]||$rb[$b["table"]][1]){$Aa=min(floatval($rb[$a["Name"]][1]),floatval($rb[$b["table"]][1]))-1;}else{$He-=.1;}while($Ae[(string)$Aa]){$Aa-=.0001;}$La[$a["Name"]]["references"][$b["table"]][(string)$Aa]=array($b["source"],$b["target"]);$Be[$b["table"]][$a["Name"]][(string)$Aa]=$b["target"];$Ae[(string)$Aa]=true;}}}$Rb=max($Rb,$La[$a["Name"]]["pos"][0]+2.5+$qc);}echo'<div id="schema" style="height: ',$Rb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Ie)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Rb,';
document.onmousemove = schemaMousemove;
document.onmouseup = schemaMouseup;
</script>
';foreach($La
as$f=>$h){echo"<div class='table' style='top: ".$h["pos"][0]."em; left: ".$h["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($h["fields"]as$c){$b='<span'.type_class($c["type"]).' title="'.h($c["full_type"].($c["null"]?" NULL":'')).'">'.h($c["field"]).'</span>';echo($c["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$h["references"]as$Qb=>$nc){foreach($nc
as$Aa=>$zc){$vc=$Aa-$rb[$f][1];$k=0;foreach($zc[0]as$Ga){echo"<div class='references' title='".h($Qb)."' id='refs$Aa-".($k++)."' style='left: $vc"."em; top: ".$h["fields"][$Ga]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$vc)."em;'></div></div>\n";}}}foreach((array)$Be[$f]as$Qb=>$nc){foreach($nc
as$Aa=>$B){$vc=$Aa-$rb[$f][1];$k=0;foreach($B
as$oa){echo"<div class='references' title='".h($Qb)."' id='refd$Aa-".($k++)."' style='left: $vc"."em; top: ".$h["fields"][$oa]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=arrow.gif) no-repeat right center;&amp;version=3.0.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$vc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($La
as$f=>$h){foreach((array)$h["references"]as$Qb=>$nc){foreach($nc
as$Aa=>$zc){$Oc=$Rb;$fd=-10;foreach($zc[0]as$e=>$Ga){$_e=$h["pos"][0]+$h["fields"][$Ga]["pos"];$Ce=$La[$Qb]["pos"][0]+$La[$Qb]["fields"][$zc[1][$e]]["pos"];$Oc=min($Oc,$_e,$Ce);$fd=max($fd,$_e,$Ce);}echo"<div class='references' id='refl$Aa' style='left: $Aa"."em; top: $Oc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($fd-$Oc)."em;'></div></div>\n";}}}echo'</div>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$De="";foreach(array("output","format","db_style","table_style","data_style")as$e){$De.="&$e=".urlencode($_POST[$e]);}cookie("adminer_export",substr($De,1));$yb=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));if($_POST["format"]=="sql"){echo"-- Adminer $Sc ".$ja[DRIVER]." dump

".($_!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$W=$_POST["db_style"];$z=array(DB);if(DB==""){$z=$_POST["databases"];if(is_string($z)){$z=explode("\n",rtrim(str_replace("\r","",$z),"\n"));}}foreach((array)$z
as$s){if($g->select_db($s)){if($_POST["format"]=="sql"&&ereg('CREATE',$W)&&($fa=$g->result("SHOW CREATE DATABASE ".idf_escape($s),1))){if($W=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($s).";\n";}echo($W=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$fa):$fa).";\n";}if($_POST["format"]=="sql"){if($W){echo
use_sql($s).";\n\n";}if(in_array("CREATE+ALTER",array($W,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$eb="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ta){foreach(get_rows("SHOW $Ta STATUS WHERE Db = ".q($s),null,"-- ")as$a){$eb.=($W!='DROP+CREATE'?"DROP $Ta IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE $Ta ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$eb.=($W!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($eb){echo"DELIMITER ;;\n\n$eb"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$aa=array();foreach(table_status()as$a){$h=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Ge=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($h||$Ge){if(!is_view($a)){if($yb=="tar"){ob_start();}dump_table($a["Name"],($h?$_POST["table_style"]:""));if($Ge){dump_data($a["Name"],$_POST["data_style"]);}if($_POST["format"]=="sql"&&$_POST["triggers"]){$ec=trigger_sql($a["Name"],$_POST["table_style"]);if($ec){echo"\nDELIMITER ;;\n$ec\nDELIMITER ;\n";}}if($yb=="tar"){echo
tar_file((DB!=""?"":"$s/")."$a[Name].csv",ob_get_clean());}elseif($_POST["format"]=="sql"){echo"\n";}}elseif($_POST["format"]=="sql"){$aa[]=$a["Name"];}}}foreach($aa
as$yc){dump_table($yc,$_POST["table_style"],true);}if($yb=="tar"){echo
pack("x512");}}if($W=="CREATE+ALTER"&&$_POST["format"]=="sql"){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
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
			CASE _table_name";foreach(get_rows($j)as$a){$_a=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $_a THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$_a;
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
";}if(in_array("CREATE+ALTER",array($W,$_POST["table_style"]))&&$_POST["format"]=="sql"){echo"SELECT @adminer_alter;\n";}}}exit;}page_header('Exportieren',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Ee=array('','USE','DROP+CREATE','CREATE');$qe=array('','DROP+CREATE','CREATE');$Nd=array('','TRUNCATE+INSERT','INSERT');if($_=="sql"){$Ee[]='CREATE+ALTER';$qe[]='CREATE+ALTER';$Nd[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}$Ba=($_GET["dump"]=="");echo"<tr><th>".'Ergebnis'."<td>".$r->dumpOutput(0,$a["output"])."\n","<tr><th>".'Format'."<td>".$r->dumpFormat(0,$a["format"])."\n",($_=="sqlite"?"":"<tr><th>".'Datenbank'."<td>".html_select('db_style',$Ee,$a["db_style"]).(support("routine")?checkbox("routines",1,$Ba,'Prozeduren'):"").(support("event")?checkbox("events",1,$Ba,'Ereignisse'):"")),"<tr><th>".'Tabellen'."<td>".html_select('table_style',$qe,$a["table_style"]).checkbox("auto_increment",1,$a["table_style"],'Auto-Inkrement').(support("trigger")?checkbox("triggers",1,$a["table_style"],'Trigger'):""),"<tr><th>".'Daten'."<td>".html_select('data_style',$Nd,$a["data_style"]),'</table>
<p><input type="submit" value="Exportieren">

<table cellspacing="0">
';$bd=array();if(DB!=""){$Ba=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Ba onclick='formCheck(this, /^tables\\[/);'>".'Tabellen'."</label>","<th style='text-align: right;'><label>".'Daten'."<input type='checkbox' id='check-data'$Ba onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$aa="";foreach(table_status()as$a){$f=$a["Name"];$sc=ereg_replace("_.*","",$f);$Ba=($m==""||$m==(substr($m,-1)=="%"?"$sc%":$f));$bc="<tr><td>".checkbox("tables[]",$f,$Ba,$f,"formUncheck('check-tables');");if(is_view($a)){$aa.="$bc\n";}else{echo"$bc<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$Ba,"","formUncheck('check-data');")."</label>\n";}$bd[$sc]++;}echo$aa;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Datenbank'."</label></thead>\n";$z=get_databases();if($z){foreach($z
as$s){if(!information_schema($s)){$sc=ereg_replace("_.*","",$s);echo"<tr><td>".checkbox("databases[]",$s,$m==""||$m=="$sc%",$s,"formUncheck('check-databases');")."</label>\n";$bd[$sc]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$fb=true;foreach($bd
as$e=>$b){if($e!=""&&$b>1){echo($fb?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$e%")."'>".h($e)."</a>";$fb=false;}}}elseif(isset($_GET["privileges"])){page_header('Rechte');$i=$g->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$i){echo'<form action=""><p>
';hidden_fields_get();echo'Benutzer: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Ändern">
</form>
';$i=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Benutzer'."<th>".'Server'."</thead>\n";while($a=$i->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'ändern'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Neuer Benutzer'."</a>";}elseif(isset($_GET["sql"])){restart_session();$wf=&get_session("queries");$lb=&$wf[DB];if(!$n&&$_POST["clear"]){$lb=array();redirect(remove_from_uri("history"));}page_header('SQL-Query',$n);if(!$n&&$_POST){$Ka=false;$j=$_POST["query"];if($_POST["webfile"]){$Ka=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($Ka?fread($Ka,1e6):false);}elseif($_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6&&(!$lb||end($lb)!=$j)){$lb[]=$j;}$xc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$jd=";";$M=0;$Hd=true;$J=connect();if(is_object($J)&&DB!=""){$J->select_db(DB);}$Tb=0;$gd="";while($j!=""){if(!$M&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$l)){$jd=$l[1];$j=substr($j,strlen($l[0]));}else{preg_match('('.preg_quote($jd).'|[\'`"]|/\\*|-- |#|$)',$j,$l,PREG_OFFSET_CAPTURE,$M);$pa=$l[0][0];$M=$l[0][1]+strlen($pa);if(!$pa&&$Ka&&!feof($Ka)){$j.=fread($Ka,1e5);}else{if(!$pa&&rtrim($j)==""){break;}if(!$pa||$pa==$jd){$Hd=false;$ta=substr($j,0,$l[0][1]);$Tb++;echo"<pre class='jush-$_' id='sql-$Tb'>".shorten_utf8(trim($ta),1000)."</pre>\n";ob_flush();flush();$ed=explode(" ",microtime());if(!$g->multi_query($ta)){echo"<p class='error'>".'Fehler in der SQL-Abfrage'.": ".error()."\n";$gd.=" <a href='#sql-$Tb'>$Tb</a>";if($_POST["error_stops"]){break;}}else{if(is_object($J)&&preg_match("~^$xc*(USE)\\b~isU",$ta)){$J->query($ta);}do{$i=$g->store_result();$dd=explode(" ",microtime());$Yd=" <span class='time'>(".sprintf('%.3f s',max(0,$dd[0]-$ed[0]+$dd[1]-$ed[1])).")</span>";if(is_object($i)){select($i,$J);echo"<p>".($i->num_rows?lang(array('%d Datensatz','%d Datensätze'),$i->num_rows):"").$Yd;if($J&&preg_match("~^($xc|\\()*SELECT\\b~isU",$ta)){$U="explain-$Tb";echo", <a href='#$U' onclick=\"return !toggle('$U');\">EXPLAIN</a>\n","<div id='$U' class='hidden'>\n";select(explain($J,$ta));echo"</div>\n";}}else{if(preg_match("~^$xc*(CREATE|DROP|ALTER)$xc+(DATABASE|SCHEMA)\\b~isU",$ta)){restart_session();set_session("dbs",null);session_write_close();}echo"<p class='message' title='".h($g->info)."'>".lang(array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),$g->affected_rows)."$Yd\n";}$ed=$dd;}while($g->next_result());}$j=substr($j,$M);$M=0;}else{while(preg_match('~'.($pa=='/*'?'\\*/':(ereg('-- |#',$pa)?"\n":"$pa|\\\\.")).'|$~s',$j,$l,PREG_OFFSET_CAPTURE,$M)){$ia=$l[0][0];$M=$l[0][1]+strlen($ia);if(!$ia&&$Ka&&!feof($Ka)){$j.=fread($Ka,1e6);}elseif($ia[0]!="\\"){break;}}}}}}if($gd&&$Tb>1){echo"<p class='error'>".'Fehler in der SQL-Abfrage'.": $gd\n";}if($Hd){echo"<p class='message'>".'Kein Kommando vorhanden.'."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$ta=$_GET["sql"];if($_POST){$ta=$_POST["query"];}elseif($_GET["history"]!=""){$ta=$lb[$_GET["history"]];}textarea("query",$ta,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Datei importieren'.': <input type="file" name="sql_file">':'Importieren von Dateien abgeschaltet.'),'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Ausführen" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Bei Fehler anhalten');print_fieldset("webfile",'Auf Server',$_POST["webfile"]);$cd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$e=>$b){if(extension_loaded($b)){$cd[]=".$e";}}echo
sprintf('Webserver Datei %s',"<code>adminer.sql".($cd?"[".implode("|",$cd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Datei ausführen'.'">',"</div></fieldset>\n";if($lb){print_fieldset("history",'History',$_GET["history"]!="");foreach($lb
as$e=>$b){echo'<a href="'.h(ME."sql=&history=$e").'">'.'Ändern'."</a> <code class='jush-$_'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Entleeren'."'>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$t=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$la=(isset($_GET["select"])?$_POST["edit"]:$t);$o=fields($m);foreach($o
as$f=>$c){if(!isset($c["privileges"][$la?"update":"insert"])||$r->fieldName($c)==""){unset($o[$f]);}}if($_POST&&!$n&&!isset($_GET["select"])){$ka=$_POST["referer"];if($_POST["insert"]){$ka=($la?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ka)){$ka=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m)," WHERE $t"),$ka,'Datensatz gelöscht.');}else{$q=array();foreach($o
as$f=>$c){$b=process_input($c);if($b!==false&&$b!==null){$q[idf_escape($f)]=($la?"\n".idf_escape($f)." = $b":$b);}}if($la){if(!$q){redirect($ka);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$q),"\nWHERE $t"),$ka,'Datensatz geändert.');}else{$i=insert_into($m,$q);$Xd=($i?last_id():0);queries_redirect($ka,sprintf('Datensatz%s hinzugefügt.',($Xd?" $Xd":"")),$i);}}}$Fa=$r->tableName(table_status($m));page_header(($la?'Ändern':'Hinzufügen'),$n,array("select"=>array($m,$Fa)),$Fa);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($t){$C=array();foreach($o
as$f=>$c){if(isset($c["privileges"]["select"])){$C[]=($_POST["clone"]&&$c["auto_increment"]?"'' AS ":(ereg("enum|set",$c["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($C){$D=get_rows("SELECT".limit(implode(", ",$C)." FROM ".table($m)," WHERE $t",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($D)!=1?null:reset($D));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($o){echo"<table cellspacing='0'>\n";foreach($o
as$f=>$c){echo"<tr><th>".$r->fieldName($c);$xa=$_GET["set"][bracket_escape($f)];$p=(isset($a)?($a[$f]!=""&&ereg("enum|set",$c["type"])?intval($a[$f]):$a[$f]):(!$la&&$c["auto_increment"]?"":(isset($_GET["select"])?false:(isset($xa)?$xa:$c["default"]))));if(!$_POST["save"]&&is_string($p)){$p=$r->editVal($p,$c);}$N=($_POST["save"]?(string)$_POST["function"][$f]:($t&&$c["on_update"]=="CURRENT_TIMESTAMP"?"now":($p===false?null:(isset($p)?'':'NULL'))));if($c["type"]=="timestamp"&&$p=="CURRENT_TIMESTAMP"){$p="";$N="now";}input($c,$p,$N);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($o){echo"<input type='submit' value='".'Speichern'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($la?'Speichern und weiter bearbeiten':'Speichern und nächsten hinzufügen')."\">\n";}}if($la){echo"<input type='submit' name='delete' value='".'Entfernen'."'$Va>\n";}echo'</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$Rd=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Qd=referencable_primary($m);$ba=array();foreach($Qd
as$Fa=>$c){$ba[str_replace("`","``",$Fa)."`".str_replace("`","``",$c["field"])]=$Fa;}$Vc=array();$Mc=array();if($m!=""){$Vc=fields($m);$Mc=table_status($m);}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),'Tabelle entfernt.');}else{$o=array();$ib=array();ksort($_POST["fields"]);$ad=reset($Vc);$Jb="FIRST";foreach($_POST["fields"]as$e=>$c){$A=$ba[$c["type"]];$Qc=(isset($A)?$Qd[$A]:$c);if($c["field"]!=""){if(!$c["has_default"]){$c["default"]=null;}$xa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$c["default"]);if($xa!=$c["default"]){$c["on_update"]="CURRENT_TIMESTAMP";$c["default"]=$xa;}if($e==$_POST["auto_increment_col"]){$c["auto_increment"]=true;}$Td=process_field($c,$Qc);if($Td!=process_field($ad,$ad)){$o[]=array($c["orig"],$Td,$Jb);}if(isset($A)){$ib[]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($c["field"]).") REFERENCES ".idf_escape($ba[$c["type"]])." (".idf_escape($Qc["field"]).")".(in_array($c["on_delete"],$db)?" ON DELETE $c[on_delete]":"");}$Jb="AFTER ".idf_escape($c["field"]);}elseif($c["orig"]!=""){$o[]=array($c["orig"]);}if($c["orig"]!=""){$ad=next($Vc);}}$tb="";if(in_array($_POST["partition_by"],$Rd)){$hd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$e=>$b){$p=$_POST["partition_values"][$e];$hd[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($p!=""?" ($p)":" MAXVALUE");}}$tb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($hd?" (".implode(",",$hd)."\n)":($_POST["partitions"]?" PARTITIONS ".intval($_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$tb.="\nREMOVE PARTITIONING";}$sa='Tabelle geändert.';if($m==""){cookie("adminer_engine",$_POST["Engine"]);$sa='Tabelle erstellt.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$sa,alter_table($m,$_POST["name"],$o,$ib,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Mc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Mc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?preg_replace('~\\D+~','',$_POST["Auto_increment"]):""),$tb));}}page_header(($m!=""?'Tabelle ändern':'Neue Tabelle erstellen'),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"")),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$Mc;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Vc
as$c){$c["has_default"]=isset($c["default"]);if($c["on_update"]){$c["default"].=" ON UPDATE $c[on_update]";}$a["fields"][]=$c;}if(support("partitioning")){$Ob="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($m);$i=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Ob ORDER BY PARTITION_ORDINAL_POSITION LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$i->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Ob AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Pc){$a["partition_names"][]=$Pc["PARTITION_NAME"];$a["partition_values"][]=$Pc["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$X=collations();$wd=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($wd&&count($a["fields"])>$wd){echo"<p class='error'>".h(sprintf('Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$nd=engines();foreach($nd
as$wb){if(!strcasecmp($wb,$a["Engine"])){$a["Engine"]=$wb;break;}}echo'
<form action="" method="post" id="form">
<p>
Name der Tabelle: <input name="name" maxlength="64" value="',h($a["name"]),'">
',($nd?html_select("Engine",array(""=>"(".'Motor'.")")+$nd,$a["Engine"]):""),' ',($X&&!ereg("sqlite|mssql",$_)?html_select("Collation",array(""=>"(".'Kollation'.")")+$X,$a["Collation"]):""),' <input type="submit" value="Speichern">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Fb=edit_fields($a["fields"],$X,"TABLE",$wd,$ba,$a["Comment"]!="");echo'</table>
<p>
Auto-Inkrement: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]);?>">
<script type="text/javascript">
document.write('<label><input type="checkbox" onclick="columnShow(this.checked, 5);">Vorgabewerte festlegen<\/label>');
</script>
<?php echo(support("comment")?checkbox("","",$Fb,'Kommentar',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Fb?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Speichern">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="Entfernen"',$Va,'>';}if(support("partitioning")){$Wd=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Partitionieren um',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Rd,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Partitionen: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($Wd||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Wd?"":" class='hidden'"),'>
<thead><tr><th>Name der Partition<th>Werte</thead>
';foreach($a["partition_names"]as$e=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($e==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$e]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$Gc=array("PRIMARY","UNIQUE","INDEX");$H=table_status($m);if(ereg("MyISAM|Maria",$H["Engine"])){$Gc[]="FULLTEXT";}$K=indexes($m);if($_=="sqlite"){unset($Gc[0]);unset($K[""]);}if($_POST&&!$n&&!$_POST["add"]){$u=array();foreach($_POST["indexes"]as$w){if(in_array($w["type"],$Gc)){$B=array();$Ub=array();$q=array();ksort($w["columns"]);foreach($w["columns"]as$e=>$I){if($I!=""){$ea=$w["lengths"][$e];$q[]=idf_escape($I).($ea?"(".intval($ea).")":"");$B[]=$I;$Ub[]=($ea?$ea:null);}}if($B){foreach($K
as$f=>$_b){ksort($_b["columns"]);ksort($_b["lengths"]);if($w["type"]==$_b["type"]&&array_values($_b["columns"])===$B&&(!$_b["lengths"]||array_values($_b["lengths"])===$Ub)){unset($K[$f]);continue
2;}}$u[]=array($w["type"],"(".implode(", ",$q).")");}}}foreach($K
as$f=>$_b){$u[]=array($_b["type"],idf_escape($f),"DROP");}if(!$u){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),'Indizes geändert.',alter_indexes($m,$u));}page_header('Indizes',$n,array("table"=>$m),$m);$o=array_keys(fields($m));$a=array("indexes"=>$K);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$e=>$w){if($w["columns"][count($w["columns"])]!=""){$a["indexes"][$e]["columns"][]="";}}$w=end($a["indexes"]);if($w["type"]||array_filter($w["columns"],'strlen')||array_filter($w["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$e=>$w){$a["indexes"][$e]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index-Typ<th>Spalte (Länge)</thead>
';$na=1;foreach($a["indexes"]as$w){echo"<tr><td>".html_select("indexes[$na][type]",array(-1=>"")+$Gc,$w["type"],($na==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($w["columns"]);$k=1;foreach($w["columns"]as$I){echo"<span>".html_select("indexes[$na][columns][$k]",array(-1=>"")+$o,$I,($k==count($w["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$na][lengths][$k]' size='2' value='".h($w["lengths"][$k])."'> </span>";$k++;}$na++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Hinzufügen"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Datenbank entfernt.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Datenbank umbenannt.',rename_database($_POST["name"],$_POST["collation"]));}else{$z=explode("\n",str_replace("\r","",$_POST["name"]));$Od=true;$mb="";foreach($z
as$s){if(count($z)==1||$s!=""){if(!create_database($s,$_POST["collation"])){$Od=false;}$mb=$s;}}queries_redirect(ME."db=".urlencode($mb),'Datenbank erstellt.',$Od);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"])." COLLATE ".q($_POST["collation"]),substr(ME,0,-1),'Datenbank geändert.');}}page_header(DB!=""?'Datenbank ändern':'Neue Datenbank',$n,array(),DB);$X=collations();$f=DB;$kc=null;if($_POST){$f=$_POST["name"];$kc=$_POST["collation"];}elseif(DB!=""){$kc=db_collation(DB,$X);}elseif($_=="sql"){foreach(get_vals("SHOW GRANTS")as$ga){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ga,$l)&&$l[1]){$f=stripcslashes(idf_unescape("`$l[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input name="name" value="'.h($f).'" maxlength="64">')."\n".($X?html_select("collation",array(""=>"(".'Kollation'.")")+$X,$kc):""),'<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Speichern">
';if(DB!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'$Va>\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".'Hinzufügen'."'>\n";}echo'</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$x=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$x,'Schema wurde gelöscht.');}else{$x.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$x,'Neues Schema erstellt.');}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$x,'Schema geändert.');}else{redirect($x);}}}page_header($_GET["ns"]!=""?'Schema ändern':'Neues Schema',$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Speichern">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'$Va>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Oa=$_GET["call"];page_header('Aufrufen'.": ".h($Oa),$n);$Ta=routine($Oa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Eb=array();$eb=array();foreach($Ta["fields"]as$k=>$c){if(substr($c["inout"],-3)=="OUT"){$eb[$k]="@".idf_escape($c["field"])." AS ".idf_escape($c["field"]);}if(!$c["inout"]||substr($c["inout"],0,2)=="IN"){$Eb[]=$k;}}if(!$n&&$_POST){$ae=array();foreach($Ta["fields"]as$e=>$c){if(in_array($e,$Eb)){$b=process_input($c);if($b===false){$b="''";}if(isset($eb[$e])){$g->query("SET @".idf_escape($c["field"])." = $b");}}$ae[]=(isset($eb[$e])?"@".idf_escape($c["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Oa)."(".implode(", ",$ae).")";echo"<p><code class='jush-$_'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Ändern'."</a>\n";if(!$g->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$i=$g->store_result();if(is_object($i)){select($i);}else{echo"<p class='message'>".lang(array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),$g->affected_rows)."\n";}}while($g->next_result());if($eb){select($g->query("SELECT ".implode(", ",$eb)));}}}echo'
<form action="" method="post">
';if($Eb){echo"<table cellspacing='0'>\n";foreach($Eb
as$e){$c=$Ta["fields"][$e];$f=$c["field"];echo"<tr><th>".$r->fieldName($c);$p=$_POST["fields"][$f];if($p!=""&&ereg("enum|set",$c["type"])){$p=intval($p);}input($c,$p,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Aufrufen">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($_=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),'Fremdschlüssel entfernt.');}else{$Ga=array_filter($_POST["source"],'strlen');ksort($Ga);$oa=array();foreach($Ga
as$e=>$b){$oa[$e]=$_POST["target"][$e];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Ga)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$oa)).")".(in_array($_POST["on_delete"],$db)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$db)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?'Fremdschlüssel geändert.':'Fremdschlüssel erstellt.'));$n='Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.'."<br>$n";}}page_header('Fremdschlüssel',$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$ba=foreign_keys($m);$a=$ba[$_GET["name"]];$a["source"][]="";}$Ga=array_keys(fields($m));$oa=($m===$a["table"]?$Ga:array_keys(fields($a["table"])));$fe=array();foreach(table_status()as$f=>$H){if(fk_support($H)){$fe[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo'Zieltabelle:
',html_select("table",$fe,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Ändern"></noscript>
<table cellspacing="0">
<thead><tr><th>Ursprung<th>Ziel</thead>
';$na=0;foreach($a["source"]as$e=>$b){echo"<tr>","<td>".html_select("source[".intval($e)."]",array(-1=>"")+$Ga,$b,($na==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".intval($e)."]",$oa,$a["target"][$e]);$na++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+$db,$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+$db,$a["on_update"]),'<p>
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Spalte hinzufügen"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',$Va,'>';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$Za=false;if($_POST&&!$n){$Za=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'View entfernt.','View geändert.','View erstellt.',$m);}page_header(($m!=""?'View ändern':'Neue View erstellen'),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Za){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Speichern">
</form>
';}elseif(isset($_GET["event"])){$gb=$_GET["event"];$Gd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Dd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($gb),substr(ME,0,-1),'Ereignis entfernt.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Gd)&&isset($Dd[$_POST["STATUS"]])){$Md="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($gb!=""?"ALTER EVENT ".idf_escape($gb).$Md.($gb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Md)."\n".$Dd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($gb!=""?'Ereignis geändert.':'Ereignis erstellt.'));}}page_header(($gb!=""?'Ereignis ändern'.": ".h($gb):'Ereignis erstellen'),$n);$a=array();if($_POST){$a=$_POST;}elseif($gb!=""){$D=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($gb));$a=reset($D);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Ende<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Jede<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Gd,$a["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Dd,$a["STATUS"]),'<tr><th>Kommentar<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Nach der Ausführung erhalten'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Speichern">
';if($gb!=""){echo'<input type="submit" name="drop" value="Entfernen"',$Va,'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Oa=$_GET["procedure"];$Ta=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Za=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$q=array();$o=(array)$_POST["fields"];ksort($o);foreach($o
as$c){if($c["field"]!=""){$q[]=(in_array($c["inout"],$tc)?"$c[inout] ":"").idf_escape($c["field"]).process_type($c,"CHARACTER SET");}}$Za=drop_create("DROP $Ta ".idf_escape($Oa),"CREATE $Ta ".idf_escape($_POST["name"])." (".implode(", ",$q).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),'Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.',$Oa);}page_header(($Oa!=""?(isset($_GET["function"])?'Funktion ändern':'Prozedur ändern').": ".h($Oa):(isset($_GET["function"])?'Neue Funktion':'Neue Prozedur')),$n);$X=get_vals("SHOW CHARACTER SET");sort($X);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Oa!=""){$a=routine($Oa,$Ta);$a["name"]=$Oa;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$X,$Ta);if(isset($_GET["function"])){echo"<tr><td>".'Typ des Rückgabewertes';edit_type("returns",$a["returns"],$X);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Za){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Speichern">
';if($Oa!=""){echo'<input type="submit" name="drop" value="Entfernen"',$Va,'>';}echo'</form>
';}elseif(isset($_GET["sequence"])){$zb=$_GET["sequence"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($zb),$x,'Sequenz gelöscht.');}elseif($zb==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$x,'Neue Sequenz erstellt.');}elseif($zb!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($zb)." RENAME TO ".idf_escape($_POST["name"]),$x,'Sequenz geändert.');}else{redirect($x);}}page_header($zb!=""?'Sequenz ändern'.": ".h($zb):'Neue Sequenz',$n);$a=array("name"=>$zb);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Speichern">
';if($zb!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'$Va>\n";}echo'</form>
';}elseif(isset($_GET["type"])){$Uc=$_GET["type"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Uc),$x,'Typ gelöscht.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$x,'Typ erstellt.');}}page_header($Uc!=""?'Typ ändern'.": ".h($Uc):'Typ erstellen',$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$P,'">
';if($Uc!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'$Va>\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Speichern'."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Kc=trigger_options();$Ld=array("INSERT","UPDATE","DELETE");$Za=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Kc["Timing"])&&in_array($_POST["Event"],$Ld)&&in_array($_POST["Type"],$Kc["Type"])){$Jd=" $_POST[Timing] $_POST[Event]";$xb=" ON ".table($m);$Za=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($_=="pgsql"?$xb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($_=="mssql"?$xb.$Jd:$Jd.$xb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($m),'Trigger entfernt.','Trigger geändert.','Trigger erstellt.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Trigger ändern'.": ".h($_GET["name"]):'Trigger hinzufügen'),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Zeitpunkt<td>',html_select("Timing",$Kc["Timing"],$a["Timing"],"if (/^".h(preg_quote($m,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(addcslashes($m,"\r\n'\\"))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Ereignis<td>',html_select("Event",$Ld,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$Kc["Type"],$a["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Za){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Speichern">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',$Va,'>';}echo'</form>
';}elseif(isset($_GET["user"])){$zd=$_GET["user"];$ma=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Ac){$ma[$Ac][$a["Privilege"]]=$a["Comment"];}}$ma["Server Admin"]+=$ma["File access on server"];$ma["Databases"]["Create routine"]=$ma["Procedures"]["Create routine"];unset($ma["Procedures"]["Create routine"]);$ma["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$ma["Columns"][$b]=$ma["Tables"][$b];}unset($ma["Server Admin"]["Usage"]);foreach($ma["Tables"]as$e=>$b){unset($ma["Databases"][$e]);}$uc=array();if($_POST){foreach($_POST["objects"]as$e=>$b){$uc[$b]=(array)$uc[$b]+(array)$_POST["grants"][$e];}}$cb=array();$Hc="";if(isset($_GET["host"])&&($i=$g->query("SHOW GRANTS FOR ".q($zd)."@".q($_GET["host"])))){while($a=$i->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$l)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$l[1],$ra,PREG_SET_ORDER)){foreach($ra
as$b){if($b[1]!="USAGE"){$cb["$l[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$cb["$l[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$l)){$Hc=$l[1];}}}if($_POST&&!$n){$Xb=(isset($_GET["host"])?q($zd)."@".q($_GET["host"]):"''");$jb=q($_POST["user"])."@".q($_POST["host"]);$ud=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Xb",ME."privileges=",'Benutzer entfernt.');}else{if($Xb!=$jb){$n=!queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $jb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $ud");}elseif($_POST["pass"]!=$Hc||!$_POST["hashed"]){queries("SET PASSWORD FOR $jb = ".($_POST["hashed"]?$ud:"PASSWORD($ud)"));}if(!$n){$wc=array();foreach($uc
as$Wa=>$ga){if(isset($_GET["grant"])){$ga=array_filter($ga);}$ga=array_keys($ga);if(isset($_GET["grant"])){$wc=array_diff(array_keys(array_filter($uc[$Wa],'strlen')),$ga);}elseif($Xb==$jb){$Ed=array_keys((array)$cb[$Wa]);$wc=array_diff($Ed,$ga);$ga=array_diff($ga,$Ed);unset($cb[$Wa]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Wa,$l)&&(!grant("REVOKE",$wc,$l[2]," ON $l[1] FROM $jb")||!grant("GRANT",$ga,$l[2]," ON $l[1] TO $jb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Xb!=$jb){queries("DROP USER $Xb");}elseif(!isset($_GET["grant"])){foreach($cb
as$Wa=>$wc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Wa,$l)){grant("REVOKE",array_keys($wc),$l[2]," ON $l[1] FROM $jb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Benutzer geändert.':'Benutzer erstellt.'),!$n);if($Xb!=$jb){$g->query("DROP USER $jb");}}}page_header((isset($_GET["host"])?'Benutzer'.": ".h("$zd@$_GET[host]"):'Neuer Benutzer'),$n,array("privileges"=>array('','Rechte')));if($_POST){$a=$_POST;$cb=$uc;}else{$a=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Hc;if($Hc!=""){$a["hashed"]=true;}$cb[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Benutzer<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Passwort<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html'>".'Rechte'."</a>";$k=0;foreach($cb
as$Wa=>$ga){echo'<th>'.($Wa!="*.*"?"<input name='objects[$k]' value='".h($Wa)."' size='10'>":"<input type='hidden' name='objects[$k]' value='*.*' size='10'>*.*");$k++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Datenbank',"Tables"=>'Tabelle',"Columns"=>'Spalte',"Procedures"=>'Rutine',)as$Ac=>$fc){foreach((array)$ma[$Ac]as$dc=>$_a){echo"<tr".odd()."><td".($fc?">$fc<td":" colspan='2'").' lang="en" title="'.h($_a).'">'.h($dc);$k=0;foreach($cb
as$Wa=>$ga){$f="'grants[$k][".h(strtoupper($dc))."]'";$p=$ga[strtoupper($dc)];if($Ac=="Server Admin"&&$Wa!=(isset($cb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($p?" selected":"").">".'Erlauben'."<option value='0'".($p=="0"?" selected":"").">".'Verbieten'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($p?" checked":"").($dc=="All privileges"?" id='grants-$k-all'":($dc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$k-all');\"")).">";}$k++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Speichern">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Entfernen"',$Va,'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$n){$rd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".ereg_replace("[^0-9]+","",$b))){$rd++;}}queries_redirect(ME."processlist=",lang(array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),$rd),$rd||!$_POST["kill"]);}page_header('Prozessliste',$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';foreach(get_rows("SHOW FULL PROCESSLIST")as$k=>$a){if(!$k){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0)."<td>".implode("<td>",array_map('nbsp',$a))."\n";}echo'</table>
<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="Anhalten">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$H=table_status($m);$K=indexes($m);$o=fields($m,1);$ba=column_foreign_keys($m);$Zd=array();$B=array();$Bb=null;foreach($o
as$e=>$c){$f=$r->fieldName($c);if(isset($c["privileges"]["select"])&&$f!=""){$B[$e]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$c["type"])){$Bb=$r->selectLengthProcess();}}$Zd+=$c["privileges"];}list($C,$va)=$r->selectColumnsProcess($B,$K);$t=$r->selectSearchProcess($o,$K);$ub=$r->selectOrderProcess($o,$K);$L=$r->selectLimitProcess();$Ob=($C?implode(", ",$C):"*")."\nFROM ".table($m);$vd=($va&&count($va)<count($C)?"\nGROUP BY ".implode(", ",$va):"").($ub?"\nORDER BY ".implode(", ",$ub):"");if($_POST&&!$n){$ce="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ha=$_c=null;foreach($K
as$w){if($w["type"]=="PRIMARY"){$Ha=array_flip($w["columns"]);$_c=($C?$Ha:array());break;}}foreach($C
as$e=>$b){$b=$_GET["columns"][$e];if(!$b["fun"]){unset($_c[$b["col"]]);}}if($_POST["export"]){dump_headers($m);dump_table($m,"");if($_POST["format"]!="sql"){$a=array_keys($o);if($C){$a=array();foreach($C
as$b){$a[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($a);}if(!is_array($_POST["check"])||$_c===array()){$od=$t;if(is_array($_POST["check"])){$od[]="($ce)";}dump_data($m,"INSERT","SELECT $Ob".($od?"\nWHERE ".implode(" AND ",$od):"").$vd);}else{$de=array();foreach($_POST["check"]as$b){$de[]="(SELECT".limit($Ob,"\nWHERE ".($t?implode(" AND ",$t)." AND ":"").where_check($b).$vd,1).")";}dump_data($m,"INSERT",implode(" UNION ALL ",$de));}exit;}if(!$r->selectEmailProcess($t,$ba)){if($_POST["save"]||$_POST["delete"]){$i=true;$vb=0;$j=table($m);$q=array();if(!$_POST["delete"]){foreach($B
as$f=>$b){$b=process_input($o[$f]);if($b!==null){if($_POST["clone"]){$q[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$q[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($q)).")\nSELECT ".implode(", ",$q)."\nFROM ".table($m):" SET\n".implode(",\n",$q));}if($_POST["delete"]||$q){$Bc="UPDATE";if($_POST["delete"]){$Bc="DELETE";$j="FROM $j";}if($_POST["clone"]){$Bc="INSERT";$j="INTO $j";}if($_POST["all"]||($_c===array()&&$_POST["check"])||count($va)<count($C)){$i=queries($Bc." $j".($_POST["all"]?($t?"\nWHERE ".implode(" AND ",$t):""):"\nWHERE $ce"));$vb=$g->affected_rows;}else{foreach((array)$_POST["check"]as$b){$i=queries($Bc.limit1($j,"\nWHERE ".where_check($b)));if(!$i){break;}$vb+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('%d Artikel betroffen.','%d Artikel betroffen.'),$vb),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n='Doppelklick zum Bearbeiten des Wertes.';}else{$i=true;$vb=0;foreach($_POST["val"]as$sb=>$a){$q=array();foreach($a
as$e=>$b){$e=bracket_escape($e,1);$q[]=idf_escape($e)." = ".$r->processInput($o[$e],$b);}$i=queries("UPDATE".limit1(table($m)." SET ".implode(", ",$q)," WHERE ".where_check($sb).($t?" AND ".implode(" AND ",$t):"")));if(!$i){break;}$vb+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d Artikel betroffen.','%d Artikel betroffen.'),$vb),$i);}}elseif(is_string($qa=get_file("csv_file",true))){$qa=preg_replace("~^\xEF\xBB\xBF~",'',$qa);$i=true;$bb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$qa,$ra);$vb=count($ra[0]);begin();$Qa=($_POST["separator"]=="csv"?",":";");foreach($ra[0]as$e=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Qa]*)$Qa~",$b.$Qa,$qd);if(!$e&&!array_diff($qd[1],$bb)){$bb=$qd[1];$vb--;}else{$q=array();foreach($qd[1]as$k=>$Ic){$q[idf_escape($bb[$k])]=($Ic==""&&$o[$bb[$k]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ic))));}$i=insert_update($m,$q,$Ha);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),$vb),$i);queries("ROLLBACK");}else{$n=upload_error($qa);}}}$Fa=$r->tableName($H);page_header('Daten zeigen von'.": $Fa",$n);session_write_close();$q=null;if(isset($Zd["insert"])){$q="";foreach((array)$_GET["where"]as$b){if(count($ba[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$q.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$r->selectLinks($H,$q);if(!$B){echo"<p class='error'>".'Auswahl der Tabelle fehlgeschlagen'.($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$r->selectColumnsPrint($C,$B);$r->selectSearchPrint($t,$B,$K);$r->selectOrderPrint($ub,$B,$K);$r->selectLimitPrint($L);$r->selectLengthPrint($Bb);$r->selectActionPrint($Bb);echo"</form>\n";$Z=$_GET["page"];if($Z=="last"){$Na=$g->result("SELECT COUNT(*) FROM ".table($m).($t?" WHERE ".implode(" AND ",$t):""));$Z=floor(($Na-1)/$L);}$j="SELECT".limit((intval($L)&&$va&&count($va)<count($C)&&$_=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Ob,($t?"\nWHERE ".implode(" AND ",$t):"").$vd,($L!=""?intval($L):null),($Z?$L*$Z:0),"\n");echo$r->selectQuery($j);$i=$g->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($_=="mssql"){$i->seek($L*$Z);}$Tc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$D=array();while($a=$i->fetch_assoc()){$D[]=$a;}if($_GET["page"]!="last"){$Na=(intval($L)&&$va&&count($va)<count($C)?($_=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($j) x")):count($D));}if(!$D){echo"<p class='message'>".'Keine Daten.'."\n";}else{$Pd=$r->backwardKeys($m,$Fa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$va&&$C?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'ändern'."</a>");$Cd=array();$V=array();reset($C);$ub=1;foreach($D[0]as$e=>$b){$b=$_GET["columns"][key($C)];$c=$o[$C?$b["col"]:$e];$f=($c?$r->fieldName($c,$ub):"*");if($f!=""){$ub++;$Cd[$e]=$f;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($e).($_GET["order"][0]==$e&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$V[$e]=$b["fun"];next($C);}$Ub=array();if($_GET["modify"]){foreach($D
as$a){foreach($a
as$e=>$b){$Ub[$e]=max($Ub[$e],min(40,strlen(utf8_decode($b))));}}}echo($Pd?"<th>".'Relationen':"")."</thead>\n";foreach($r->rowDescriptions($D,$ba)as$da=>$a){$Ad=unique_array($D[$da],$K);$sb="";foreach($Ad
as$e=>$b){$sb.="&".(isset($b)?urlencode("where[".bracket_escape($e)."]")."=".urlencode($b):"null%5B%5D=".urlencode($e));}echo"<tr".odd().">".(!$va&&$C?"":"<td>".checkbox("check[]",substr($sb,1),in_array(substr($sb,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($va)<count($C)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($m).$sb)."'>".'ändern'."</a>"));foreach($a
as$e=>$b){if(isset($Cd[$e])){$c=$o[$e];if($b!=""&&(!isset($Tc[$e])||$Tc[$e]!="")){$Tc[$e]=(is_email($b)?$Cd[$e]:"");}$x="";$b=$r->editVal($b,$c);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$c["type"])&&$b!=""){$x=h(ME.'download='.urlencode($m).'&field='.urlencode($e).$sb);}if($b==""){$b="&nbsp;";}elseif($Bb!=""&&ereg('text|blob',$c["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,intval($Bb)));}else{$b=h($b);}if(!$x){foreach((array)$ba[$e]as$A){if(count($ba[$e])==1||count($A["source"])==1){foreach($A["source"]as$k=>$Ga){$x.=where_link($k,$A["target"][$k],$D[$da][$Ga]);}$x=h(($A["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($A["db"]),ME):ME).'select='.urlencode($A["table"]).$x);break;}}}if($e=="COUNT(*)"){$x=h(ME."select=".urlencode($m));$k=0;foreach((array)$_GET["where"]as$v){if(!array_key_exists($v["col"],$Ad)){$x.=h(where_link($k++,$v["col"],$v["val"],$v["op"]));}}foreach($Ad
as$Ma=>$v){$x.=h(where_link($k++,$Ma,$v,(isset($v)?"=":"IS NULL")));}}}if(!$x){if(is_email($b)){$x="mailto:$b";}if($cc=is_url($a[$e])){$x=($cc=="http"&&$Zb?$a[$e]:"$cc://www.adminer.org/redirect/?url=".urlencode($a[$e]));}}$U=h("val[$sb][".bracket_escape($e)."]");$p=$_POST["val"][$sb][bracket_escape($e)];$Sd=h(isset($p)?$p:$a[$e]);$Ud=strpos($b,"<i>...</i>");$Vd=is_utf8($b)&&!$Ud&&$D[$da][$e]==$a[$e]&&!$V[$e];$ee=ereg('text|lob',$c["type"]);echo(($_GET["modify"]&&$Vd)||isset($p)?"<td>".($ee?"<textarea name='$U' cols='30' rows='".(substr_count($a[$e],"\n")+1)."'>$Sd</textarea>":"<input name='$U' value='$Sd' size='$Ub[$e]'>"):"<td id='$U' ondblclick=\"".($Vd?"selectDblClick(this, event".($ee?", 1":"").")":"alert('".h($Ud?'Vergrössern Sie die Textlänge um den Wert ändern zu können.':'Benutzen Sie den Link zum editieren dieses Wertes.')."')").";\">".$r->selectVal($b,$x,$c));}}$r->backwardKeysPrint($Pd,$D[$da]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$md);if($D||$Z){$kd=true;if($_GET["page"]!="last"&&intval($L)&&count($va)>=count($C)&&($Na>=$L||$Z)){$Na=$H["Rows"];if(!isset($Na)||$t||2*$Z*$L>$Na||($H["Engine"]=="InnoDB"&&$Na<1e4)){ob_flush();flush();$Na=$g->result("SELECT COUNT(*) FROM ".table($m).($t?" WHERE ".implode(" AND ",$t):""));}else{$kd=false;}}echo"<p class='pages'>";if(intval($L)&&$Na>$L){$ld=floor(($Na-1)/$L);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".'Seite'."', '".($Z+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".'Seite'."</a>:".pagination(0,$Z).($Z>5?" ...":"");for($k=max(1,$Z-4);$k<min($ld,$Z+5);$k++){echo
pagination($k,$Z);}echo($Z+5<$ld?" ...":"").($kd?pagination($ld,$Z):' <a href="'.h(remove_from_uri()."&page=last").'">'.'letzte'."</a>");}echo" (".($kd?"":"~ ").lang(array('%d Datensatz','%d Datensätze'),$Na).") ".checkbox("all",1,0,'Gesamtergebnis')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Ändern</legend><div>
<input type="submit" value="Speichern" title="Doppelklick zum Bearbeiten des Wertes.">
<input type="submit" name="edit" value="Ändern">
<input type="submit" name="clone" value="Klonen">
<input type="submit" name="delete" value="Entfernen" onclick="return confirm('Sind Sie sicher ? (' + (this.form['all'].checked ? <?php echo$Na,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Exportieren');echo$r->dumpOutput(1,$md["output"])." ".$r->dumpFormat(1,$md["format"]);echo" <input type='submit' name='export' value='".'Exportieren'."'>\n","</div></fieldset>\n";}print_fieldset("import",'Importiere CSV',!$D);echo"<input type='hidden' name='token' value='$P'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$md["format"],1);echo" <input type='submit' name='import' value='".'Importieren'."'>\n","</div></fieldset>\n";$r->selectEmailPrint(array_filter($Tc,'strlen'),$B);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Pb=isset($_GET["status"]);page_header($Pb?'Status':'Variablen');$be=($Pb?show_status():show_variables());if(!$be){echo"<p class='message'>".'Keine Daten.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($be
as$e=>$b){echo"<tr>","<th><code class='jush-".$_.($Pb?"status":"set")."'>".h($e)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Nc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$U=addcslashes($a["Name"],"\\'/");echo"setHtml('Comment-$U', '".nbsp($a["Comment"])."');\n";if(!is_view($a)){foreach(array("Engine","Collation")as$e){echo"setHtml('$e-$U', '".nbsp($a[$e])."');\n";}foreach($Nc+array("Auto_increment"=>0,"Rows"=>0)as$e=>$b){if($a[$e]!=""){$b=number_format($a[$e],0,'.',' ');echo"setHtml('$e-$U', '".($e=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b)."');\n";if(isset($Nc[$e])){$Nc[$e]+=($a["Engine"]!="InnoDB"||$e!="Data_free"?$a[$e]:0);}}elseif(array_key_exists($e,$a)){echo"setHtml('$e-$U');\n";}}}}foreach($Nc
as$e=>$b){echo"setHtml('sum-$e', '".number_format($b,0,'.',' ')."');\n";}}else{foreach(count_tables(get_databases())as$s=>$b){echo"setHtml('tables-".addcslashes($s,"\\'/")."', '$b');\n";}}exit;}else{$Fd=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Fd&&!$n&&!$_POST["search"]){$i=true;$sa="";if($_=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$i=truncate_tables($_POST["tables"]);}$sa='Tabellen sind entleert worden (truncate).';}elseif($_POST["move"]){$i=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$sa='Tabellen verschoben.';}elseif($_POST["drop"]){if($_POST["views"]){$i=drop_views($_POST["views"]);}if($i&&$_POST["tables"]){$i=drop_tables($_POST["tables"]);}$sa='Tabellen wurden entfernt (drop).';}elseif($_POST["tables"]&&($i=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$i->fetch_assoc()){$sa.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$sa,$i);}page_header(($_GET["ns"]==""?'Datenbank'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Datenbank ändern'."</a>\n":"");if(support("scheme")){echo"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Schema ändern':'Neues Schema')."</a>\n";}if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.'Datenbankschema'."</a>\n","<h3>".'Tabellen und Views'."</h3>\n";$id=tables_list();if(!$id){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Suche in Tabellen'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Suchen'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabelle'.'<td>'.'Motor'.'<td>'.'Collation'.'<td>'.'Datengrösse'.'<td>'.'Indexgrösse'.'<td>'.'Freier Bereich'.'<td>'.'Auto-Inkrement'.'<td>'.'Datensätze'.(support("comment")?'<td>'.'Kommentar':'')."</thead>\n";foreach($id
as$f=>$y){$yc=(isset($y)&&!eregi("table",$y));echo'<tr'.odd().'><td>'.checkbox(($yc?"views[]":"tables[]"),$f,in_array($f,$Fd,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($yc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{echo"<td id='Engine-".h($f)."'>&nbsp;<td id='Collation-".h($f)."'>&nbsp;";foreach(array("Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$e=>$x){echo"<td align='right'><a href='".h(ME."$x=").urlencode($f)."' id='$e-".h($f)."'>?</a>";}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d insgesamt',count($id)),"<td>".nbsp($g->result("SELECT @@storage_engine")),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$e){echo"<td align='right' id='sum-$e'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$P'>".($_=="sql"?"<input type='submit' value='".'Analysieren'."'> <input type='submit' name='optimize' value='".'Optimisieren'."'> <input type='submit' name='check' value='".'Prüfen'."'> <input type='submit' name='repair' value='".'Reparieren'."'> ":"")."<input type='submit' name='truncate' value='".'Entleeren (truncate)'."' onclick=\"return confirm('".'Sind Sie sicher ?'." (' + formChecked(this, /tables/) + ')');\"> <input type='submit' name='drop' value='".'Entfernen'."' onclick=\"return confirm('".'Sind Sie sicher ?'." (' + formChecked(this, /tables|views/) + ')');\">\n";$z=(support("scheme")?schemas():get_databases());if(count($z)!=1&&$_!="sqlite"){$s=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'In andere Datenbank verschieben'.($z?": ".html_select("target",$z,$s):': <input name="target" value="'.h($s).'">')." <input type='submit' name='move' value='".'Verschieben'."'>\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Neue Tabelle erstellen'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Neue View erstellen'."</a>\n";}if(support("routine")){echo"<h3>".'Prozeduren'."</h3>\n";$Kd=routines();if($Kd){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Typ'.'<td>'.'Typ des Rückgabewertes'."<td>&nbsp;</thead>\n";odd('');foreach($Kd
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Ändern'."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.'Neue Prozedur'.'</a> <a href="'.h(ME).'function=">'.'Neue Funktion'."</a>\n";}if(support("sequence")){echo"<h3>".'Sequenz'."</h3>\n";$Id=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Id){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Id
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Neue Sequenz'."</a>\n";}if(support("type")){echo"<h3>".'Benutzer-definierte Typen'."</h3>\n";$T=types();if($T){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($T
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Typ erstellen'."</a>\n";}if(support("event")){echo"<h3>".'Ereignisse'."</h3>\n";$D=get_rows("SHOW EVENTS");if($D){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Zeitplan'."<td>".'Start'."<td>".'Ende'."</thead>\n";foreach($D
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'Zur angegebenen Zeit'."<td>".$a["Execute at"]:'Jede'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Ereignis erstellen'."</a>\n";}page_footer();echo"<script type='text/javascript' src='".h(ME)."script=db'></script>\n";exit;}}page_footer();