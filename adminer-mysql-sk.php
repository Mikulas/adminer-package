<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$ge=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($ge){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$je=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($je){$$b=$je;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
connection(){global$i;return$i;}function
idf_unescape($_a){$ab=substr($_a,-1);return
str_replace($ab.$ab,$ab,substr($_a,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($cb){if(get_magic_quotes_gpc()){while(list($c,$b)=each($cb)){foreach($b
as$va=>$r){unset($cb[$c][$va]);if(is_array($r)){$cb[$c][stripslashes($va)]=$r;$cb[]=&$cb[$c][stripslashes($va)];}else{$cb[$c][stripslashes($va)]=($ge?$r:stripslashes($r));}}}}}function
bracket_escape($_a,$Ee=false){static$Ae=array(':'=>':1',']'=>':2','['=>':3');return
strtr($_a,($Ee?array_flip($Ae):$Ae));}function
h($P){return
htmlspecialchars($P,ENT_QUOTES);}function
nbsp($P){return(trim($P)!=""?h($P):"&nbsp;");}function
nl_br($P){return
str_replace("\n","<br>",$P);}function
checkbox($f,$n,$sa,$De="",$Be=""){static$E=0;$E++;$e="<input type='checkbox'".($f?" name='$f' value='".h($n)."'":"").($sa?" checked":"").($Be?" onclick=\"$Be\"":"")." id='checkbox-$E'>";return($De!=""?"<label for='checkbox-$E'>$e".h($De)."</label>":$e);}function
optionlist($Ec,$Fe=null,$yd=false){$e="";foreach($Ec
as$va=>$r){if(is_array($r)){$e.='<optgroup label="'.h($va).'">';}foreach((is_array($r)?$r:array($va=>$r))as$c=>$b){$e.='<option'.($yd||is_string($c)?' value="'.h($c).'"':'').(($yd||is_string($c)?(string)$c:$b)===$Fe?' selected':'').'>'.h($b);}if(is_array($r)){$e.='</optgroup>';}}return$e;}function
html_select($f,$Ec,$n="",$mb=true){if($mb){return"<select name='".h($f)."'".(is_string($mb)?" onchange=\"$mb\"":"").">".optionlist($Ec,$n)."</select>";}$e="";foreach($Ec
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$n?" checked":"").">".h($b)."</label>";}return$e;}function
ini_bool($He){$b=ini_get($He);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
q($P){global$i;return$i->quote($P);}function
get_vals($k,$xa=0){global$i;$e=array();$j=$i->query($k);if(is_object($j)){while($a=$j->fetch_row()){$e[]=$a[$xa];}}return$e;}function
get_key_vals($k,$K=null){global$i;if(!is_object($K)){$K=$i;}$e=array();$j=$K->query($k);while($a=$j->fetch_row()){$e[$a[0]]=$a[1];}return$e;}function
get_rows($k,$K=null,$p="<p class='error'>"){global$i;if(!is_object($K)){$K=$i;}$e=array();$j=$K->query($k);if(is_object($j)){while($a=$j->fetch_assoc()){$e[]=$a;}}elseif(!$j&&$p&&(headers_sent()||ob_get_level())){echo$p.error()."\n";}return$e;}function
unique_array($a,$z){foreach($z
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$e=array();foreach($s["columns"]as$c){if(!isset($a[$c])){continue
2;}$e[$c]=$a[$c];}return$e;}}$e=array();foreach($a
as$c=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$e[$c]=$b;}}return$e;}function
where($y){$e=array();foreach((array)$y["where"]as$c=>$b){$e[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$b)?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$y["null"]as$c){$e[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$Dd);remove_slashes(array(&$Dd));return
where($Dd);}function
where_link($h,$xa,$n,$Ge="="){return"&where%5B$h%5D%5Bcol%5D=".urlencode($xa)."&where%5B$h%5D%5Bop%5D=".urlencode($Ge)."&where%5B$h%5D%5Bval%5D=".urlencode($n);}function
cookie($f,$n){global$zb;$Qb=array($f,(ereg("\n",$n)?"":$n),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$zb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Qb[]=true;}return
call_user_func_array('setcookie',$Qb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($pb,$G,$V){global$ya;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ya))."|username|".session_name()),$l);return"$l[1]?".(SID&&!$_COOKIE?SID."&":"").($pb!="server"||$G!=""?urlencode($pb)."=".urlencode($G)."&":"")."username=".urlencode($V).($l[2]?"&$l[2]":"");}function
redirect($U,$ja=null){if(isset($ja)){restart_session();$_SESSION["messages"][]=$ja;}if(isset($U)){header("Location: ".($U!=""?$U:"."));exit;}}function
query_redirect($k,$U,$ja,$Gc=true,$Ie=true,$me=false){global$i,$p,$q;if($Ie){$me=!$i->query($k);}$gd="";if($k){$gd=$q->messageQuery($k);}if($me){$p=error().$gd;return
false;}if($Gc){redirect($U,$ja.$gd);}return
true;}function
queries($k=null){global$i;static$wd=array();if(!isset($k)){return
implode(";\n",$wd);}$wd[]=$k;return$i->query($k);}function
apply_queries($k,$wa,$Ne='table'){foreach($wa
as$m){if(!queries("$k ".$Ne($m))){return
false;}}return
true;}function
queries_redirect($U,$ja,$Gc){return
query_redirect(queries(),$U,$ja,$Gc,false,!$Gc);}function
remove_from_uri($Ga=""){return
substr(preg_replace("~(?<=[?&])($Ga".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($H,$df){return" ".($H==$df?$H+1:'<a href="'.h(remove_from_uri("page").($H?"&page=$H":"")).'">'.($H+1)."</a>");}function
get_file($c,$Id=false){$ba=$_FILES[$c];if(!$ba||$ba["error"]){return$ba["error"];}return
file_get_contents($Id&&ereg('\\.gz$',$ba["name"])?"compress.zlib://$ba[tmp_name]":($Id&&ereg('\\.bz2$',$ba["name"])?"compress.bzip2://$ba[tmp_name]":$ba["tmp_name"]));}function
upload_error($p){$Fd=($p==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($p?'Súbor sa nepodarilo nahrať.'.($Fd?" ".sprintf('Maximálna povolená veľkosť súboru je %sB.',$Fd):""):'Súbor neexistuje.');}function
odd($e=' class="odd"'){static$h=0;if(!$e){$h=-1;}return($h++%
2?$e:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($P,$Da=80,$cf=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$Da})($)?)u",$P,$l)){preg_match("(^([\t\r\n -~]{0,$Da})($)?)",$P,$l);}return
h($l[1]).$cf.(isset($l[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($cb,$bf=array()){while(list($c,$b)=each($cb)){if(is_array($b)){foreach($b
as$va=>$r){$cb[$c."[$va]"]=$r;}}elseif(!in_array($c,$bf)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($m){$e=array();foreach(foreign_keys($m)as$F){foreach($F["source"]as$b){$e[$b][]=$F;}}return$e;}function
enum_input($N,$Ca,$d,$n){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$aa);foreach($aa[1]as$h=>$b){$b=stripcslashes(str_replace("''","'",$b));$sa=(is_int($n)?$n==$h+1:(is_array($n)?in_array($h+1,$n):$n===$b));echo" <label><input type='$N'$Ca value='".($h+1)."'".($sa?' checked':'').'>'.h($b).'</label>';}}function
input($d,$n,$B){global$na,$q,$x;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$R=(isset($_GET["select"])?array("orig"=>'originál'):array())+$q->editFunctions($d);$Ca=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($R[""])."<td>".($R["orig"]?"<label><input type='radio'$Ca value='-1' checked><i>$R[orig]</i></label> ":""),$q->editInput($_GET["edit"],$d,$Ca,$n);enum_input("radio",$Ca,$d,$n);}else{$Pa=0;foreach($R
as$c=>$b){if($c===""||!$b){break;}$Pa++;}$mb=($Pa?" onchange=\"var f = this.form['function[".addcslashes($f,"\r\n'\\")."]']; if ($Pa > f.selectedIndex) f.selectedIndex = $Pa;\"":"");$Ca.=$mb;echo(count($R)>1?html_select("function[$f]",$R,!isset($B)||in_array($B,$R)||isset($R[$B])?$B:""):nbsp(reset($R))).'<td>';$Jd=$q->editInput($_GET["edit"],$d,$Ca,$n);if($Jd!=""){echo$Jd;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$aa);foreach($aa[1]as$h=>$b){$b=stripcslashes(str_replace("''","'",$b));$sa=(is_int($n)?($n>>$h)&1:in_array($b,explode(",",$n),true));echo" <label><input type='checkbox' name='fields[$f][$h]' value='".(1<<$h)."'".($sa?' checked':'')."$mb>".h($b).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$mb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($x!="sqlite"||ereg("\n",$n)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ca>".h($n).'</textarea>';}else{$Uc=(!ereg('int',$d["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$d["length"],$l)?((ereg("binary",$d["type"])?2:1)*$l[1]+($l[3]?1:0)+($l[2]&&!$d["unsigned"]?1:0)):($na[$d["type"]]?$na[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($n)."'".($Uc?" maxlength='$Uc'":"").(ereg('char|binary',$d["type"])&&$Uc>20?" size='40'":"")."$Ca>";}}}function
process_input($d){global$q;$_a=bracket_escape($d["field"]);$B=$_POST["function"][$_a];$n=$_POST["fields"][$_a];if($d["type"]=="enum"){if($n==-1){return
false;}if($n==""){return"NULL";}return
intval($n);}if($d["auto_increment"]&&$n==""){return
null;}if($B=="orig"){return
false;}if($B=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$n);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$ba=get_file("fields-$_a");if(!is_string($ba)){return
false;}return
q($ba);}return$q->processInput($d,$n,$B);}function
search_tables(){global$q,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Z=false;foreach(table_status()as$m=>$L){$f=$q->tableName($L);if(isset($L["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($m,$_POST["tables"]))){$j=$i->query("SELECT".limit("1 FROM ".table($m)," WHERE ".implode(" AND ",$q->selectSearchProcess(fields($m),array())),1));if($j->fetch_row()){if(!$Z){echo"<ul>\n";$Z=true;}echo"<li><a href='".h(ME."select=".urlencode($m)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($Z?"</ul>":"<p class='message'>".'Žiadne tabuľky.')."\n";}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$a)."\n";}function
apply_sql_function($B,$xa){return($B?($B=="unixepoch"?"DATETIME($xa, '$B')":($B=="count distinct"?"COUNT(DISTINCT ":strtoupper("$B("))."$xa)"):$xa);}function
password_file(){$yc=ini_get("upload_tmp_dir");if(!$yc){if(function_exists('sys_get_temp_dir')){$yc=sys_get_temp_dir();}else{$Ua=@tempnam("","");if(!$Ua){return
false;}$yc=dirname($Ua);unlink($Ua);}}$Ua="$yc/adminer.key";$e=@file_get_contents($Ua);if($e){return$e;}$ta=@fopen($Ua,"w");if($ta){$e=md5(uniqid(mt_rand(),true));fwrite($ta,$e);fclose($ta);}return$e;}function
is_email($Ze){$xd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Sb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$da="$xd+(\\.$xd+)*@($Sb?\\.)+$Sb";return
preg_match("(^$da(,\\s*$da)*\$)i",$Ze);}function
is_url($P){$Sb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Sb?\\.)+$Sb(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$P,$l)?strtolower($l[1]):"");}function
print_fieldset($E,$af,$ef=false){echo"<fieldset><legend><a href='#fieldset-$E' onclick=\"return !toggle('fieldset-$E');\">$af</a></legend><div id='fieldset-$E'".($ef?"":" class='hidden'").">\n";}function
bold($P,$ff){return($ff?"<b>$P</b>":$P);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$zb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Qb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$zb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Qb[]=true;}call_user_func_array('session_set_cookie_params',$Qb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);function
lang($kf,$Lb){$Kb=($Lb==1||(!$Lb&&'sk'=='fr')?0:((!$Lb||$Lb>=5)&&ereg('cs|sk|ru','sk')?2:1));return
sprintf($kf[$Kb],$Lb);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($gf,$V,$ka,$hf='auth_error'){set_exception_handler($hf);parent::__construct($gf,$V,$ka);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($k,$Ub=false){$j=parent::query($k);if(!$j){$Ye=$this->errorInfo();$this->error=$Ye[2];return
false;}$this->store_result($j);return$j;}function
multi_query($k){return$this->_result=$this->query($k);}function
store_result($j=null){if(!$j){$j=$this->_result;}if($j->columnCount()){$j->num_rows=$j->rowCount();return$j;}$this->affected_rows=$j->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($k,$d=0){$j=$this->query($k);if(!$j){return
false;}$a=$j->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$_c=array();$ya=array();$_c[]="MySQLi";$_c[]="MySQL";$_c[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ya=array("server"=>"MySQL")+$ya;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($G,$V,$ka){mysqli_report(MYSQLI_REPORT_OFF);list($Pe,$Fc)=explode(":",$G,2);$e=@$this->real_connect(($G!=""?$Pe:ini_get("mysqli.default_host")),("$G$V"!=""?$V:ini_get("mysqli.default_user")),("$G$V$ka"!=""?$ka:ini_get("mysqli.default_pw")),null,(is_numeric($Fc)?$Fc:ini_get("mysqli.default_port")),(!is_numeric($Fc)?$Fc:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($k,$d=0){$j=$this->query($k);if(!$j){return
false;}$a=$j->fetch_array();return$a[$d];}function
quote($P){return"'".$this->escape_string($P)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($G,$V,$ka){$this->_link=@mysql_connect(($G!=""?$G:ini_get("mysql.default_host")),("$G$V"!=""?$V:ini_get("mysql.default_user")),("$G$V$ka"!=""?$ka:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($P){return"'".mysql_real_escape_string($P,$this->_link)."'";}function
select_db($bc){return
mysql_select_db($bc,$this->_link);}function
query($k,$Ub=false){$j=@($Ub?mysql_unbuffered_query($k,$this->_link):mysql_query($k,$this->_link));if(!$j){$this->error=mysql_error($this->_link);return
false;}if($j===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($j);}function
multi_query($k){return$this->_result=$this->query($k);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($k,$d=0){$j=$this->query($k);if(!$j){return
false;}return
mysql_result($j->_result,0,$d);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($j){$this->_result=$j;$this->num_rows=mysql_num_rows($j);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$e=mysql_fetch_field($this->_result);$e->orgtable=$e->table;$e->orgname=$e->name;$e->charsetnr=($e->blob?63:0);return$e;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($G,$V,$ka){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$G)),$V,$ka);$this->query("SET NAMES utf8");return
true;}function
select_db($bc){return$this->query("USE ".idf_escape($bc));}function
query($k,$Ub=false){$this->setAttribute(1000,!$Ub);return
parent::query($k,$Ub);}}}function
idf_escape($_a){return"`".str_replace("`","``",$_a)."`";}function
table($_a){return
idf_escape($_a);}function
connect(){global$q;$i=new
Min_DB;$Yc=$q->credentials();if($i->connect($Yc[0],$Yc[1],$Yc[2])){$i->query("SET SQL_QUOTE_SHOW_CREATE=1");return$i;}return$i->error;}function
get_databases($Me=true){$e=&get_session("dbs");if(!isset($e)){if($Me){restart_session();ob_flush();flush();}$e=get_vals("SHOW DATABASES");}return$e;}function
limit($k,$y,$Q,$la=0,$Zb=" "){return" $k$y".(isset($Q)?$Zb."LIMIT $Q".($la?" OFFSET $la":""):"");}function
limit1($k,$y){return
limit($k,$y,1);}function
db_collation($w,$T){global$i;$e=null;$ca=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1);if(preg_match('~ COLLATE ([^ ]+)~',$ca,$l)){$e=$l[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ca,$l)){$e=$T[$l[1]][0];}return$e;}function
engines(){$e=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($A){$e=array();foreach($A
as$w){$e[$w]=count(get_vals("SHOW TABLES IN ".idf_escape($w)));}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($L){return!isset($L["Rows"]);}function
fk_support($L){return($L["Engine"]=="InnoDB");}function
fields($m,$qf=false){$e=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($m))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$l);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$l[1],"length"=>$l[2],"unsigned"=>ltrim($l[3].$l[4]),"default"=>($a["Default"]!=""||ereg("char",$l[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$l)?$l[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$e;}function
indexes($m,$K=null){global$i;if(!is_object($K)){$K=$i;}$e=array();foreach(get_rows("SHOW INDEX FROM ".table($m),$K)as$a){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$e;}function
foreign_keys($m){global$i,$Ma;static$da='`(?:[^`]|``)+`';$e=array();$ye=$i->result("SHOW CREATE TABLE ".table($m),1);if($ye){preg_match_all("~CONSTRAINT ($da) FOREIGN KEY \\(((?:$da,? ?)+)\\) REFERENCES ($da)(?:\\.($da))? \\(((?:$da,? ?)+)\\)(?: ON DELETE (".implode("|",$Ma)."))?(?: ON UPDATE (".implode("|",$Ma)."))?~",$ye,$aa,PREG_SET_ORDER);foreach($aa
as$l){preg_match_all("~$da~",$l[2],$ra);preg_match_all("~$da~",$l[5],$La);$e[idf_unescape($l[1])]=array("db"=>idf_unescape($l[4]!=""?$l[3]:$l[4]),"table"=>idf_unescape($l[4]!=""?$l[4]:$l[3]),"source"=>array_map('idf_unescape',$ra[0]),"target"=>array_map('idf_unescape',$La[0]),"on_delete"=>$l[6],"on_update"=>$l[7],);}}return$e;}function
view($f){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){$e[$a["Charset"]][]=$a["Collation"];}ksort($e);foreach($e
as$c=>$b){sort($e[$c]);}return$e;}function
information_schema($w){global$i;return($i->server_info>=5&&$w=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($w,$jb){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($w).($jb?" COLLATE ".q($jb):""));}function
drop_databases($A){set_session("dbs",null);return
apply_queries("DROP DATABASE",$A,'idf_escape');}function
rename_database($f,$jb){if(create_database($f,$jb)){$_b=array();foreach(tables_list()as$m=>$N){$_b[]=table($m)." TO ".idf_escape($f).".".table($m);}if(!$_b||queries("RENAME TABLE ".implode(", ",$_b))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Jc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$Jc="";break;}if($s["type"]=="PRIMARY"){$Jc=" UNIQUE";}}}return" AUTO_INCREMENT$Jc";}function
alter_table($m,$f,$o,$Bc,$Xa,$Xb,$jb,$Dc,$Yb){$Y=array();foreach($o
as$d){$Y[]=($d[1]?($m!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($m!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$Y=array_merge($Y,$Bc);$sb="COMMENT=".q($Xa).($Xb?" ENGINE=".q($Xb):"").($jb?" COLLATE ".q($jb):"").($Dc!=""?" AUTO_INCREMENT=$Dc":"").$Yb;if($m==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$Y)."\n) $sb");}if($m!=$f){$Y[]="RENAME TO ".table($f);}$Y[]=$sb;return
queries("ALTER TABLE ".table($m)."\n".implode(",\n",$Y));}function
alter_indexes($m,$Y){foreach($Y
as$c=>$b){$Y[$c]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($m).implode(",",$Y));}function
truncate_tables($wa){return
apply_queries("TRUNCATE TABLE",$wa);}function
drop_views($db){return
queries("DROP VIEW ".implode(", ",array_map('table',$db)));}function
drop_tables($wa){return
queries("DROP TABLE ".implode(", ",array_map('table',$wa)));}function
move_tables($wa,$db,$La){$_b=array();foreach(array_merge($wa,$db)as$m){$_b[]=table($m)." TO ".idf_escape($La).".".table($m);}return
queries("RENAME TABLE ".implode(", ",$_b));}function
trigger($f){$D=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($D);}function
triggers($m){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($m,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$N){global$i,$ob,$Pb,$na;$Re=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Xd="((".implode("|",array_merge(array_keys($na),$Re)).")(?:\\s*\\(((?:[^'\")]*|$ob)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$da="\\s*(".($N=="FUNCTION"?"":implode("|",$Pb)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Xd";$ca=$i->result("SHOW CREATE $N ".idf_escape($f),2);preg_match("~\\(((?:$da\\s*,?)*)\\)".($N=="FUNCTION"?"\\s*RETURNS\\s+$Xd":"")."\\s*(.*)~is",$ca,$l);$o=array();preg_match_all("~$da\\s*,?~is",$l[1],$aa,PREG_SET_ORDER);foreach($aa
as$Ga){$f=str_replace("``","`",$Ga[2]).$Ga[3];$o[]=array("field"=>$f,"type"=>strtolower($Ga[5]),"length"=>preg_replace_callback("~$ob~s",'normalize_enum',$Ga[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ga[8] $Ga[7]"))),"full_type"=>$Ga[4],"inout"=>strtoupper($Ga[1]),"collation"=>strtolower($Ga[9]),);}if($N!="FUNCTION"){return
array("fields"=>$o,"definition"=>$l[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$l[12],"length"=>$l[13],"unsigned"=>$l[15],"collation"=>$l[16]),"definition"=>$l[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($m,$t){return
queries("INSERT INTO ".table($m)." (".implode(", ",array_keys($t)).")\nVALUES (".implode(", ",$t).")");}function
insert_update($m,$t,$Cc){foreach($t
as$c=>$b){$t[$c]="$c = $b";}$Ha=implode(", ",$t);return
queries("INSERT INTO ".table($m)." SET $Ha ON DUPLICATE KEY UPDATE $Ha");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$k){return$i->query("EXPLAIN $k");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ka){return
true;}function
create_sql($m,$Dc){global$i;$e=$i->result("SHOW CREATE TABLE ".table($m),1);if(!$Dc){$e=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$e);}return$e;}function
truncate_sql($m){return"TRUNCATE ".table($m);}function
use_sql($bc){return"USE ".idf_escape($bc);}function
trigger_sql($m,$I){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($m,"%_")),null,"-- ")as$a){$e.="\n".($I=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Ue){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$Ue);}$x="sql";$na=array();$ld=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Dátum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Reťazce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binárne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Zoznamy'=>array("enum"=>65535,"set"=>64),)as$c=>$b){$na+=$b;$ld[$c]=array_keys($b);}$Ib=array("unsigned","zerofill","unsigned zerofill");$Pd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$R=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Hb=array("avg","count","count distinct","group_concat","max","min","sum");$Qd=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Ac="3.0.0";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
loginForm(){global$ya;?>
<table cellspacing="0">
<tr><th>Systém<td><input type='hidden' name='driver' value='server'>MySQL
<tr><th>Server<td><input name="server" value="<?php echo
h(SERVER),'">
<tr><th>Používateľ<td><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Prihlásiť sa'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé prihlásenie')."\n";}function
login($rf,$ka){return
true;}function
tableName($zc){return
h($zc["Name"]);}function
fieldName($d,$Za=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($zc,$t=""){echo'<p class="tabs">';$ua=array("select"=>'Vypísať dáta',"table"=>'Zobraziť štruktúru');if(is_view($zc)){$ua["view"]='Zmeniť pohľad';}else{$ua["create"]='Zmeniť tabuľku';}if(isset($t)){$ua["edit"]='Nová položka';}foreach($ua
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($zc["Name"]).($c=="edit"?$t:"")."'>".bold($b,isset($_GET[$c]))."</a>";}echo"\n";}function
backwardKeys($m,$sf){return
array();}function
backwardKeysPrint($tf,$a){}function
selectQuery($k){global$x;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Stránka'.": ".'posledný'."'>&gt;&gt;</a> <code class='jush-$x'>".h(str_replace("\n"," ",$k))."</code> <a href='".h(ME)."sql=".urlencode($k)."'>".'Upraviť'."</a>\n";}function
rowDescription($m){return"";}function
rowDescriptions($D,$Xe){return$D;}function
selectVal($b,$_,$d){$e=($b!="<i>NULL</i>"&&ereg("^char|binary",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(array('%d bajt','%d bajty','%d bajtov'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($_?"<a href='$_'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($u,$v){global$R,$Hb;print_fieldset("select",'Vypísať',$u);$h=0;$ae=array('Funkcie'=>$R,'Agregácia'=>$Hb);foreach($u
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$h][fun]",array(-1=>"")+$ae,$b["fun"]),"(<select name='columns[$h][col]'><option>".optionlist($v,$b["col"],true)."</select>)</div>\n";$h++;}echo"<div>".html_select("columns[$h][fun]",array(-1=>"")+$ae,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$h][col]' onchange='selectAddRow(this);'><option>".optionlist($v,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($y,$v,$z){print_fieldset("search",'Vyhľadať',$y);foreach($z
as$h=>$s){if($s["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$s["columns"]))."</i>) AGAINST"," <input name='fulltext[$h]' value='".h($_GET["fulltext"][$h])."'>",checkbox("boolean[$h]",1,isset($_GET["boolean"][$h]),"BOOL"),"<br>\n";}}$h=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$h][col]'><option value=''>(".'kdekoľvek'.")".optionlist($v,$b["col"],true)."</select>",html_select("where[$h][op]",$this->operators,$b["op"]),"<input name='where[$h][val]' value='".h($b["val"])."'></div>\n";$h++;}}echo"<div><select name='where[$h][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoľvek'.")".optionlist($v,null,true)."</select>",html_select("where[$h][op]",$this->operators),"<input name='where[$h][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Za,$v,$z){print_fieldset("sort",'Zotriediť',$Za);$h=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($v[$b])){echo"<div><select name='order[$h]'><option>".optionlist($v,$b,true)."</select>",checkbox("desc[$h]",1,isset($_GET["desc"][$c]),'zostupne')."</div>\n";$h++;}}echo"<div><select name='order[$h]' onchange='selectAddRow(this);'><option>".optionlist($v,null,true)."</select>",checkbox("desc[$h]",1,0,'zostupne')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($Q){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($Q)."'>","</div></fieldset>\n";}function
selectLengthPrint($fb){if(isset($fb)){echo"<fieldset><legend>".'Dĺžka textov'."</legend><div>",'<input name="text_length" size="3" value="'.h($fb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Akcia'."</legend><div>","<input type='submit' value='".'Vypísať'."'>","</div></fieldset>\n";}function
selectEmailPrint($nf,$v){}function
selectColumnsProcess($v,$z){global$R,$Hb;$u=array();$ia=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($v[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$R)||in_array($b["fun"],$Hb)))){$u[$c]=apply_sql_function($b["fun"],(isset($v[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$Hb)){$ia[]=$u[$c];}}}return
array($u,$ia);}function
selectSearchProcess($o,$z){global$x;$e=array();foreach($z
as$h=>$s){if($s["type"]=="FULLTEXT"&&$_GET["fulltext"][$h]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$s["columns"])).") AGAINST (".q($_GET["fulltext"][$h]).(isset($_GET["boolean"][$h])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$xb=" $b[op]";if(ereg('IN$',$b["op"])){$rb=process_length($b["val"]);$xb.=" (".($rb!=""?$rb:"NULL").")";}elseif($b["op"]=="LIKE %%"){$xb=" LIKE ".$this->processInput($o[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$xb.=" ".$this->processInput($o[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$xb;}else{$Na=array();foreach($o
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$Na[]=($x=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($Na?"(".implode("$xb OR ",$Na)."$xb)":"0");}}}return$e;}function
selectOrderProcess($o,$z){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($o[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($o[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($y,$Xe){return
false;}function
messageQuery($k){global$x;restart_session();$E="sql-".count($_SESSION["messages"]);$Ta=&get_session("queries");$Ta[$_GET["db"]][]=(strlen($k)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($k,0,1e6))."\n...":$k);return" <a href='#$E' onclick=\"return !toggle('$E');\">".'SQL príkaz'."</a><div id='$E' class='hidden'><pre class='jush-$x'>".shorten_utf8($k,1000).'</pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Ta[$_GET["db"]])-1)).'">'.'Upraviť'.'</a></div>';}function
editFunctions($d){global$Qd;$e=($d["null"]?"NULL/":"");foreach($Qd
as$c=>$R){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($R
as$da=>$b){if(!$da||ereg($da,$d["type"])){$e.="/$b";}}}}return
explode("/",$e);}function
editInput($m,$d,$Ca,$n){if($d["type"]=="enum"){return($d["null"]?"<label><input type='radio'$Ca value=''".(isset($n)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"")."<label><input type='radio'$Ca value='0'".($n===0?" checked":"")."><i>".'prázdne'."</i></label>";}return"";}function
processInput($d,$n,$B=""){$f=$d["field"];$e=q($n);if(ereg('^(now|getdate|uuid)$',$B)){$e="$B()";}elseif(ereg('^current_(date|timestamp)$',$B)){$e=$B;}elseif(ereg('^([+-]|\\|\\|)$',$B)){$e=idf_escape($f)." $B $e";}elseif(ereg('^[+-] interval$',$B)){$e=idf_escape($f)." $B ".(preg_match("~^([0-9]+|'[0-9.: -]') [A-Z_]+$~i",$n)?$n:$e);}elseif(ereg('^(addtime|subtime|concat)$',$B)){$e="$B(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$B)){$e="$B($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput($u,$n=""){$e=array('text'=>'otvoriť','file'=>'uložiť');if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return
html_select("output",$e,$n,$u);}function
dumpFormat($u,$n=""){return
html_select("format",array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;'),$n,$u);}function
navigation($xc){global$Ac,$i,$C,$x,$ya;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$Ac,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Ac,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($xc=="auth"){$Pa=true;foreach((array)$_SESSION["pwds"]as$pb=>$Se){foreach($Se
as$G=>$Le){foreach($Le
as$V=>$ka){if(isset($ka)){if($Pa){echo"<p>\n";$Pa=false;}echo"<a href='".h(auth_url($pb,$G,$V))."'>($ya[$pb]) ".h($V.($G!=""?"@$G":""))."</a><br>\n";}}}}}else{$A=get_databases();echo'<form action="" method="post">
<p class="logout">
<a href="',h(ME),'sql=">',bold('SQL príkaz',isset($_GET["sql"])),'</a>
';if(support("dump")){echo'<a href="',h(ME),'dump=',urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"]),'">',bold('Export',isset($_GET["dump"])),'</a>
';}echo'<input type="hidden" name="token" value="',$C,'">
<input type="submit" name="logout" value="Odhlásiť">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($A?html_select("db",array(""=>"(".'databáza'.")")+$A,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Vybrať"',($A?" class='hidden'":""),'>
';if($xc!="db"&&DB!=""&&$i->select_db(DB)){if($_GET["ns"]!==""){$wa=tables_list();if(!$wa){echo"<p class='message'>".'Žiadne tabuľky.'."\n";}else{$this->tablesPrint($wa);$ua=array();foreach($wa
as$m=>$N){$ua[]=preg_quote($m,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $x: [ '".addcslashes(h(ME),"\\'/")."table=\$&', /\\b(".implode("|",$ua).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$x;\n";}echo"</script>\n";}echo'<p><a href="'.h(ME).'create=">'.bold('Vytvoriť novú tabuľku',$_GET["create"]==="")."</a>\n";}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($wa){echo"<p id='tables'>\n";foreach($wa
as$m=>$N){echo'<a href="'.h(ME).'select='.urlencode($m).'">'.bold('vypísať',$_GET["select"]==$m).'</a> ','<a href="'.h(ME).'table='.urlencode($m).'">'.bold($this->tableName(array("Name"=>$m)),$_GET["table"]==$m)."</a><br>\n";}}}$q=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($q->operators)){$q->operators=$Pd;}function
page_header($be,$p="",$Eb=array(),$ce=""){global$mf,$zb,$q,$i,$ya;header("Content-Type: text/html; charset=utf-8");header("X-Frame-Options: deny");$ee=$be.($ce!=""?": ".h($ce):"");$Cb=($zb?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="sk">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ee.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$q->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\', \'',$Cb,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Cb');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0",'"></script>

<div id="content">
';if(isset($Eb)){$_=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($_?h($_):".").'">'.$ya[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$G=(SERVER!=""?h(SERVER):'Server');if($Eb===false){echo"$G\n";}else{echo"<a href='".($_?h($_):".")."'>$G</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Eb))){echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Eb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Eb
as$c=>$b){$Bb=(is_array($b)?$b[1]:$b);if($Bb!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Bb).'</a> &raquo; ';}}}echo"$be\n";}}echo"<h2>$ee</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$A=&get_session("dbs");if(DB!=""&&$A&&!in_array(DB,$A,true)){$A=null;}if($p){echo"<div class='error'>$p</div>\n";}}function
page_footer($xc=""){global$q;echo'</div>

<div id="menu">
';$q->navigation($xc);echo'</div>
';}function
int32($J){while($J>=2147483648){$J-=4294967296;}while($J<=-2147483649){$J+=4294967296;}return(int)$J;}function
long2str($r,$Zc){$S='';foreach($r
as$b){$S.=pack('V',$b);}if($Zc){return
substr($S,0,end($r));}return$S;}function
str2long($S,$Zc){$r=array_values(unpack('V*',str_pad($S,4*ceil(strlen($S)/4),"\0")));if($Zc){$r[]=strlen($S);}return$r;}function
xxtea_mx($fa,$ea,$pa,$va){return
int32((($fa>>5&0x7FFFFFF)^$ea<<2)+(($ea>>3&0x1FFFFFFF)^$fa<<4))^int32(($pa^$ea)+($va^$fa));}function
encrypt_string($Jb,$c){if($Jb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($Jb,true);$J=count($r)-1;$fa=$r[$J];$ea=$r[0];$ha=floor(6+52/($J+1));$pa=0;while($ha-->0){$pa=int32($pa+0x9E3779B9);$Db=$pa>>2&3;for($ma=0;$ma<$J;$ma++){$ea=$r[$ma+1];$qb=xxtea_mx($fa,$ea,$pa,$c[$ma&3^$Db]);$fa=int32($r[$ma]+$qb);$r[$ma]=$fa;}$ea=$r[0];$qb=xxtea_mx($fa,$ea,$pa,$c[$ma&3^$Db]);$fa=int32($r[$J]+$qb);$r[$J]=$fa;}return
long2str($r,false);}function
decrypt_string($Jb,$c){if($Jb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($Jb,false);$J=count($r)-1;$fa=$r[$J];$ea=$r[0];$ha=floor(6+52/($J+1));$pa=int32($ha*0x9E3779B9);while($pa){$Db=$pa>>2&3;for($ma=$J;$ma>0;$ma--){$fa=$r[$ma-1];$qb=xxtea_mx($fa,$ea,$pa,$c[$ma&3^$Db]);$ea=int32($r[$ma]-$qb);$r[$ma]=$ea;}$fa=$r[$J];$qb=xxtea_mx($fa,$ea,$pa,$c[$ma&3^$Db]);$ea=int32($r[0]-$qb);$r[0]=$ea;$pa=int32($pa-0x9E3779B9);}return
long2str($r,true);}$i='';if(!$ya){page_header('Žiadne rozšírenie',sprintf('Nie je dostupné žiadne z podporovaných rozšírení (%s).',implode(", ",$_c)),null);page_footer("auth");exit;}$C=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ib=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$ib[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$lc=$q->permanentLogin();$ib[$c]="$c:".base64_encode($lc?encrypt_string($_POST["password"],$lc):"");cookie("adminer_permanent",implode(" ",$ib));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($C&&$_POST["token"]!=$C){page_header('Odhlásiť','Neplatný token CSRF. Odošlite formulár znova.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ib[$c]){unset($ib[$c]);cookie("adminer_permanent",implode(" ",$ib));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlásenie prebehlo v poriadku.');}}elseif($ib&&!$_SESSION["pwds"]){session_regenerate_id();$lc=$q->permanentLogin();foreach($ib
as$c=>$b){list(,$lf)=explode(":",$b);list($pb,$G,$V)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$pb][$G][$V]=decrypt_string(base64_decode($lf),$lc);}}function
auth_error($he=null){global$i,$q,$C;$rc=session_name();$p="";if(!$_COOKIE[$rc]&&$_GET[$rc]&&ini_bool("session.use_only_cookies")){$p='Session premenné musia byť povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$rc]||$_GET[$rc])&&!$C){$p='Session vypršala, prihláste sa prosím znova.';}else{$ka=&get_session("pwds");if(isset($ka)){$p=h($he?$he->getMessage():(is_string($i)?$i:'Neplatné prihlasovacie údaje.'));$ka=null;}}}page_header('Prihlásiť sa',$p,null);echo"<form action='' method='post'>\n";$q->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$i=connect();}if(is_string($i)||!$q->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$C=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$C;}$p=($_POST?($_POST["token"]==$C?"":'Neplatný token CSRF. Odošlite formulár znova.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','"post_max_size"')));function
connect_error(){global$i,$C,$p,$ya;$A=array();if(DB!=""){page_header('Databáza'.": ".h(DB),'Nesprávna databáza.',true);}else{if($_POST["db"]&&!$p){set_session("dbs",null);queries_redirect(substr(ME,0,-1),'Databázy boli odstránené.',drop_databases($_POST["db"]));}page_header('Vybrať databázu',$p,false);echo"<p><a href='".h(ME)."database='>".'Vytvoriť novú databázu'."</a>\n";foreach(array('privileges'=>'Oprávnenia','processlist'=>'Zoznam procesov','variables'=>'Premenné','status'=>'Stav',)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".sprintf('Verzia %s: %s cez PHP rozšírenie %s',$ya[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".sprintf('Prihlásený ako: %s',"<b>".h(logged_user())."</b>")."\n";$A=get_databases();if($A){$T=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$C'>&nbsp;<th>".'Databáza'."<td>".'Porovnávanie'."<td>".'Tabuľky'."</thead>\n";foreach($A
as$w){$bd=h(ME)."db=".urlencode($w);echo"<tr".odd()."><td>".checkbox("db[]",$w,in_array($w,(array)$_POST["db"])),"<th><a href='$bd'>".h($w)."</a>","<td><a href='$bd&amp;database='>".nbsp(db_collation($w,$T))."</a>","<td align='right'><a href='$bd&amp;schema=' id='tables-".h($w)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Odstrániť'."' onclick=\"return confirm('".'Naozaj?'." (' + formChecked(this, /db/) + ')');\">\n","</form>\n";}}page_footer("db");echo"<script type='text/javascript' src='".h(ME)."script=connect'></script>\n";}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($j,$K=null){$ua=array();$z=array();$v=array();$Zd=array();$na=array();odd('');for($h=0;$a=$j->fetch_row();$h++){if(!$h){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($W=0;$W<count($a);$W++){$d=$j->fetch_field();$qa=$d->orgtable;$Fb=$d->orgname;if($qa!=""){if(!isset($z[$qa])){$z[$qa]=array();foreach(indexes($qa,$K)as$s){if($s["type"]=="PRIMARY"){$z[$qa]=array_flip($s["columns"]);break;}}$v[$qa]=$z[$qa];}if(isset($v[$qa][$Fb])){unset($v[$qa][$Fb]);$z[$qa][$Fb]=$W;$ua[$W]=$qa;}}if($d->charsetnr==63){$Zd[$W]=true;}$na[$W]=$d->type;echo"<th".($qa!=""||$d->name!=$Fb?" title='".h(($qa!=""?"$qa.":"").$Fb)."'":"").">".h($d->name);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($Zd[$c]&&!is_utf8($b)){$b="<i>".lang(array('%d bajt','%d bajty','%d bajtov'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($na[$c]==254){$b="<code>$b</code>";}}if(isset($ua[$c])&&!$v[$ua[$c]]){$_="edit=".urlencode($ua[$c]);foreach($z[$ua[$c]]as$nc=>$W){$_.="&where".urlencode("[".bracket_escape($nc)."]")."=".urlencode($a[$W]);}$b="<a href='".h(ME.$_)."'>$b</a>";}}echo"<td>$b";}}echo($h?"</table>":"<p class='message'>".'Žiadne riadky.')."\n";}function
referencable_primary($Te){$e=array();foreach(table_status()as$oa=>$m){if($oa!=$Te&&fk_support($m)){foreach(fields($oa)as$d){if($d["primary"]){if($e[$oa]){unset($e[$oa]);break;}$e[$oa]=$d;}}}}return$e;}function
textarea($f,$n,$D=10,$Na=80){echo"<textarea name='$f' rows='$D' cols='$Na' style='width: 98%;' spellcheck='false' onkeydown='return textareaKeydown(this, event);'>".h($n)."</textarea>";}function
edit_type($c,$d,$T,$M=array()){global$ld,$na,$Ib,$Ma;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($na[$d["type"]])?array():array($d["type"]))+$ld+($M?array('Cudzie kľúče'=>$M):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td>',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'porovnávanie'.')'.optionlist($T,$d["collation"]).'</select>',($Ib?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($Ib,$d["unsigned"]).'</select>':''),($M?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist($Ma,$d["on_delete"])."</select> ":" ");}function
process_length($Da){global$ob;return(preg_match("~^\\s*(?:$ob)(?:\\s*,\\s*(?:$ob))*\\s*\$~",$Da)&&preg_match_all("~$ob~",$Da,$aa)?implode(",",$aa[0]):preg_replace('~[^0-9,+-]~','',$Da));}function
process_type($d,$Gb="COLLATE"){global$Ib;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$Ib)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $Gb ".q($d["collation"]):"");}function
process_field($d,$pc){return
array(idf_escape($d["field"]),process_type($pc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($N){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$N)){return" class='$c'";}}}function
edit_fields($o,$T,$N="TABLE",$Td=0,$M=array(),$nb=false){global$Pb;foreach($o
as$d){if($d["comment"]!=""){$nb=true;break;}}echo'<thead><tr class="wrap">
';if($N=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($N=="TABLE"?'Názov stĺpca':'Názov parametra'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Dĺžka
<td>Voľby
';if($N=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td class="hidden">Východzie hodnoty
',(support("comment")?"<td".($nb?"":" class='hidden'").">".'Komentár':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".'Pridať ďalší'."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
';foreach($o
as$h=>$d){$h++;$kd=$d[($_POST?"orig":"field")];$Ud=(isset($_POST["add"][$h-1])||(isset($d["field"])&&!$_POST["drop_col"][$h]))&&(support("drop_col")||$kd=="");echo'<tr',($Ud?"":" style='display: none;'"),'>
',($N=="PROCEDURE"?"<td>".html_select("fields[$h][inout]",$Pb,$d["inout"]):""),'<th>';if($Ud){echo'<input name="fields[',$h,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($o)>1?"":"editingAddRow(this, $Td); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$h,'][orig]" value="',h($kd),'">
';edit_type("fields[$h]",$d,$T,$M);if($N=="TABLE"){echo'<td>',checkbox("fields[$h][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$h,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$h][has_default]",1,$d["has_default"]),'<input name="fields[',$h,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($nb?"":" class='hidden'")."><input name='fields[$h][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$h]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".'Pridať ďalší'."' onclick='return !editingAddRow(this, $Td, 1);'>&nbsp;"."<input type='image' name='up[$h]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=up.gif&amp;version=3.0.0' alt='^' title='".'Presunúť hore'."'>&nbsp;"."<input type='image' name='down[$h]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=down.gif&amp;version=3.0.0' alt='v' title='".'Presunúť dolu'."'>&nbsp;":""),($kd==""||support("drop_col")?"<input type='image' name='drop_col[$h]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0' alt='x' title='".'Odobrať'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$nb;}function
process_fields(&$o){ksort($o);$la=0;if($_POST["up"]){$ab=0;foreach($o
as$c=>$d){if(key($_POST["up"])==$c){unset($o[$c]);array_splice($o,$ab,0,array($d));break;}if(isset($d["field"])){$ab=$la;}$la++;}}if($_POST["down"]){$Z=false;foreach($o
as$c=>$d){if(isset($d["field"])&&$Z){unset($o[key($_POST["down"])]);array_splice($o,$la,0,array($Z));break;}if(key($_POST["down"])==$c){$Z=$d;}$la++;}}$o=array_values($o);if($_POST["add"]){array_splice($o,key($_POST["add"]),0,array(array()));}}function
normalize_enum($l){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($l[0][0].$l[0][0],$l[0][0],substr($l[0],1,-1))),'\\'))."'";}function
grant($O,$X,$v,$gb){if(!$X){return
true;}if($X==array("ALL PRIVILEGES","GRANT OPTION")){return($O=="GRANT"?queries("$O ALL PRIVILEGES$gb WITH GRANT OPTION"):queries("$O ALL PRIVILEGES$gb")&&queries("$O GRANT OPTION$gb"));}return
queries("$O ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$v, ",$X).$v).$gb);}function
drop_create($Wd,$ca,$U,$Vd,$Ve,$We,$f){if($_POST["drop"]){return
query_redirect($Wd,$U,$Vd,true,!$_POST["dropped"]);}$Ea=$f!=""&&($_POST["dropped"]||queries($Wd));$Qe=queries($ca);if(!queries_redirect($U,($f!=""?$Ve:$We),$Qe)&&$Ea){restart_session();$_SESSION["messages"][]=$Vd;}return$Ea;}function
tar_file($Ua,$Pc){$e=pack("a100a8a8a8a12a12",$Ua,644,0,0,decoct(strlen($Pc)),decoct(time()));$Ce=8*32;for($h=0;$h<strlen($e);$h++){$Ce+=ord($e{$h});}$e.=sprintf("%06o",$Ce)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Pc.str_repeat("\0",511-(strlen($Pc)+511)%
512);}function
dump_table($m,$I,$oc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($I){dump_csv(array_keys(fields($m)));}}elseif($I){$ca=create_sql($m,$_POST["auto_increment"]);if($ca){if($I=="DROP+CREATE"){echo"DROP ".($oc?"VIEW":"TABLE")." IF EXISTS ".table($m).";\n";}if($oc){$ca=preg_replace('~^([A-Z =]+) DEFINER=`'.str_replace("@","`@`",logged_user()).'`~','\\1',$ca);}echo($I!="CREATE+ALTER"?$ca:($oc?substr_replace($ca," OR REPLACE",6,0):substr_replace($ca," IF NOT EXISTS",12,0))).";\n\n";}if($I=="CREATE+ALTER"&&!$oc){$k="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($m)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$o=array();$kb="";foreach(get_rows($k)as$a){$Fa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Fa)?q($Fa):"NULL");$a["after"]=q($kb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Fa)?" DEFAULT ".($Fa=="CURRENT_TIMESTAMP"?$Fa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($kb?" AFTER ".idf_escape($kb):" FIRST"));echo", ADD $a[alter]";$o[]=$a;$kb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $k;
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
dump_data($m,$I,$u=""){global$i,$x;$_e=($x=="sqlite"?0:1048576);if($I){if($_POST["format"]=="sql"&&$I=="TRUNCATE+INSERT"){echo
truncate_sql($m).";\n";}$o=fields($m);$j=$i->query(($u?$u:"SELECT * FROM ".table($m)),1);if($j){$ac="";$Ja="";while($a=$j->fetch_assoc()){if($_POST["format"]!="sql"){dump_csv($a);}else{if(!$ac){$ac="INSERT INTO ".table($m)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$o[$c]["type"])?$b:q($b)):"NULL");}$S=implode(",\t",$a);if($I=="INSERT+UPDATE"){$t=array();foreach($a
as$c=>$b){$t[]=idf_escape($c)." = $b";}echo"$ac ($S) ON DUPLICATE KEY UPDATE ".implode(", ",$t).";\n";}else{$S=($_e?"\n":" ")."($S)";if(!$Ja){$Ja=$ac.$S;}elseif(strlen($Ja)+2+strlen($S)<$_e){$Ja.=",$S";}else{$Ja.=";\n";echo$Ja;$Ja=$ac.$S;}}}}if($_POST["format"]=="sql"&&$I!="INSERT+UPDATE"&&$Ja){$Ja.=";\n";echo$Ja;}}}}function
dump_headers($ze,$Ke=false){$Ua=($ze!=""?friendly_url($ze):"adminer");$lb=$_POST["output"];$eb=($_POST["format"]=="sql"?"sql":($Ke?"tar":"csv"));header("Content-Type: ".($lb=="bz2"?"application/x-bzip":($lb=="gz"?"application/x-gzip":($eb=="tar"?"application/x-tar":($eb=="sql"||$lb!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($lb!="text"){header("Content-Disposition: attachment; filename=$Ua.$eb".($lb!="file"&&!ereg('[^0-9a-z]',$lb)?".$lb":""));}session_write_close();if($_POST["output"]=="bz2"){ob_start('bzcompress',1e6);}if($_POST["output"]=="gz"){ob_start('gzencode',1e6);}return$eb;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Ma=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$bb=" onclick=\"return confirm('".'Naozaj?'."');\"";$ob='\'(?:\'\'|[^\'\\\\]|\\\\.)*\'|"(?:""|[^"\\\\]|\\\\.)*"';$Pb=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$g=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$g-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($g)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$g=$_GET["table"];$o=fields($g);if(!$o){$p=error();}$L=($o?table_status($g):array());page_header(($o&&is_view($L)?'Pohľad':'Tabuľka').": ".h($g),$p);$q->selectLinks($L);$Xa=$L["Comment"];if($Xa!=""){echo"<p>".'Komentár'.": ".h($Xa)."\n";}if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Stĺpec'."<td>".'Typ'.(support("comment")?"<td>".'Komentár':"")."</thead>\n";foreach($o
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($L)){echo"<h3>".'Indexy'."</h3>\n";$z=indexes($g);if($z){echo"<table cellspacing='0'>\n";foreach($z
as$f=>$s){ksort($s["columns"]);$cc=array();foreach($s["columns"]as$c=>$b){$cc[]="<i>".h($b)."</i>".($s["lengths"][$c]?"(".$s["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$s[type]<td>".implode(", ",$cc)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($g).'">'.'Zmeniť indexy'."</a>\n";if(fk_support($L)){echo"<h3>".'Cudzie kľúče'."</h3>\n";$M=foreign_keys($g);if($M){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'Cieľ'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($x!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($M
as$f=>$F){$_=($F["db"]!=""?"<b>".h($F["db"])."</b>.":"").h($F["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$F["source"]))."</i>","<td><a href='".h($F["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($F["db"]),ME):ME)."table=".urlencode($F["table"])."'>$_</a>","(<i>".implode("</i>, <i>",array_map('h',$F["target"]))."</i>)","<td>$F[on_delete]\n","<td>$F[on_update]\n";if($x!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($g).'&name='.urlencode($f)).'">'.'Zmeniť'.'</a>';}}echo"</table>\n";}if($x!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($g).'">'.'Pridať cudzí kľúč'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggery'."</h3>\n";$Wb=triggers($g);if($Wb){echo"<table cellspacing='0'>\n";foreach($Wb
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($g).'&name='.urlencode($c))."'>".'Zmeniť'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($g).'">'.'Pridať trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schéma databázy',"",array(),DB);$Va=array();$we=array();preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$_COOKIE["adminer_schema"],$aa,PREG_SET_ORDER);foreach($aa
as$h=>$l){$Va[$l[1]]=array($l[2],$l[3]);$we[]="\n\t'".addcslashes($l[1],"\r\n'\\/")."': [ $l[2], $l[3] ]";}$ub=0;$pe=-1;$Ka=array();$oe=array();$ne=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$Kb=0;$Ka[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$Kb+=1.25;$d["pos"]=$Kb;$Ka[$a["Name"]]["fields"][$f]=$d;}$Ka[$a["Name"]]["pos"]=($Va[$a["Name"]]?$Va[$a["Name"]]:array($ub,0));if(fk_support($a)){foreach(foreign_keys($a["Name"])as$b){if(!$b["db"]){$ga=$pe;if($Va[$a["Name"]][1]||$Va[$b["table"]][1]){$ga=min(floatval($Va[$a["Name"]][1]),floatval($Va[$b["table"]][1]))-1;}else{$pe-=.1;}while($ne[(string)$ga]){$ga-=.0001;}$Ka[$a["Name"]]["references"][$b["table"]][(string)$ga]=array($b["source"],$b["target"]);$oe[$b["table"]][$a["Name"]][(string)$ga]=$b["target"];$ne[(string)$ga]=true;}}}$ub=max($ub,$Ka[$a["Name"]]["pos"][0]+2.5+$Kb);}echo'<div id="schema" style="height: ',$ub,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$we)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$ub,';
document.onmousemove = schemaMousemove;
document.onmouseup = schemaMouseup;
</script>
';foreach($Ka
as$f=>$m){echo"<div class='table' style='top: ".$m["pos"][0]."em; left: ".$m["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($m["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$m["references"]as$wb=>$Vb){foreach($Vb
as$ga=>$mc){$Ob=$ga-$Va[$f][1];$h=0;foreach($mc[0]as$ra){echo"<div class='references' title='".h($wb)."' id='refs$ga-".($h++)."' style='left: $Ob"."em; top: ".$m["fields"][$ra]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Ob)."em;'></div></div>\n";}}}foreach((array)$oe[$f]as$wb=>$Vb){foreach($Vb
as$ga=>$v){$Ob=$ga-$Va[$f][1];$h=0;foreach($v
as$La){echo"<div class='references' title='".h($wb)."' id='refd$ga-".($h++)."' style='left: $Ob"."em; top: ".$m["fields"][$La]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=arrow.gif) no-repeat right center;&amp;version=3.0.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Ob)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ka
as$f=>$m){foreach((array)$m["references"]as$wb=>$Vb){foreach($Vb
as$ga=>$mc){$qc=$ub;$Hc=-10;foreach($mc[0]as$c=>$ra){$ue=$m["pos"][0]+$m["fields"][$ra]["pos"];$te=$Ka[$wb]["pos"][0]+$Ka[$wb]["fields"][$mc[1][$c]]["pos"];$qc=min($qc,$ue,$te);$Hc=max($Hc,$ue,$te);}echo"<div class='references' id='refl$ga' style='left: $ga"."em; top: $qc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Hc-$qc)."em;'></div></div>\n";}}}echo'</div>
';}elseif(isset($_GET["dump"])){$g=$_GET["dump"];if($_POST){$se="";foreach(array("output","format","db_style","table_style","data_style")as$c){$se.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($se,1));$eb=dump_headers(($g!=""?$g:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));if($_POST["format"]=="sql"){echo"-- Adminer $Ac ".$ya[DRIVER]." dump

".($x!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($i->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$I=$_POST["db_style"];$A=array(DB);if(DB==""){$A=$_POST["databases"];if(is_string($A)){$A=explode("\n",rtrim(str_replace("\r","",$A),"\n"));}}foreach((array)$A
as$w){if($i->select_db($w)){if($_POST["format"]=="sql"&&ereg('CREATE',$I)&&($ca=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1))){if($I=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($w).";\n";}echo($I=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ca):$ca).";\n";}if($_POST["format"]=="sql"){if($I){echo
use_sql($w).";\n\n";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Qa="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$za){foreach(get_rows("SHOW $za STATUS WHERE Db = ".q($w),null,"-- ")as$a){$Qa.=($I!='DROP+CREATE'?"DROP $za IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE $za ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$Qa.=($I!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($Qa){echo"DELIMITER ;;\n\n$Qa"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$db=array();foreach(table_status()as$a){$m=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Nd=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($m||$Nd){if(!is_view($a)){if($eb=="tar"){ob_start();}dump_table($a["Name"],($m?$_POST["table_style"]:""));if($Nd){dump_data($a["Name"],$_POST["data_style"]);}if($_POST["format"]=="sql"&&$_POST["triggers"]){$Wb=trigger_sql($a["Name"],$_POST["table_style"]);if($Wb){echo"\nDELIMITER ;;\n$Wb\nDELIMITER ;\n";}}if($eb=="tar"){echo
tar_file((DB!=""?"":"$w/")."$a[Name].csv",ob_get_clean());}elseif($_POST["format"]=="sql"){echo"\n";}}elseif($_POST["format"]=="sql"){$db[]=$a["Name"];}}}foreach($db
as$vc){dump_table($vc,$_POST["table_style"],true);}if($eb=="tar"){echo
pack("x512");}}if($I=="CREATE+ALTER"&&$_POST["format"]=="sql"){$k="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $k;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($k)as$a){$Xa=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $Xa THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$Xa;
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
";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))&&$_POST["format"]=="sql"){echo"SELECT @adminer_alter;\n";}}}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$ud=array('','USE','DROP+CREATE','CREATE');$zd=array('','DROP+CREATE','CREATE');$vd=array('','TRUNCATE+INSERT','INSERT');if($x=="sql"){$ud[]='CREATE+ALTER';$zd[]='CREATE+ALTER';$vd[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}$sa=($_GET["dump"]=="");echo"<tr><th>".'Výstup'."<td>".$q->dumpOutput(0,$a["output"])."\n","<tr><th>".'Formát'."<td>".$q->dumpFormat(0,$a["format"])."\n",($x=="sqlite"?"":"<tr><th>".'Databáza'."<td>".html_select('db_style',$ud,$a["db_style"]).(support("routine")?checkbox("routines",1,$sa,'Procedúry'):"").(support("event")?checkbox("events",1,$sa,'Udalosti'):"")),"<tr><th>".'Tabuľky'."<td>".html_select('table_style',$zd,$a["table_style"]).checkbox("auto_increment",1,$a["table_style"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["table_style"],'Triggery'):""),"<tr><th>".'Dáta'."<td>".html_select('data_style',$vd,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$Ic=array();if(DB!=""){$sa=($g!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$sa onclick='formCheck(this, /^tables\\[/);'>".'Tabuľky'."</label>","<th style='text-align: right;'><label>".'Dáta'."<input type='checkbox' id='check-data'$sa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$db="";foreach(table_status()as$a){$f=$a["Name"];$Tb=ereg_replace("_.*","",$f);$sa=($g==""||$g==(substr($g,-1)=="%"?"$Tb%":$f));$cc="<tr><td>".checkbox("tables[]",$f,$sa,$f,"formUncheck('check-tables');");if(is_view($a)){$db.="$cc\n";}else{echo"$cc<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$sa,"","formUncheck('check-data');")."</label>\n";}$Ic[$Tb]++;}echo$db;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($g==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Databáza'."</label></thead>\n";$A=get_databases();if($A){foreach($A
as$w){if(!information_schema($w)){$Tb=ereg_replace("_.*","",$w);echo"<tr><td>".checkbox("databases[]",$w,$g==""||$g=="$Tb%",$w,"formUncheck('check-databases');")."</label>\n";$Ic[$Tb]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$Pa=true;foreach($Ic
as$c=>$b){if($c!=""&&$b>1){echo($Pa?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$Pa=false;}}}elseif(isset($_GET["privileges"])){page_header('Oprávnenia');$j=$i->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$j){echo'<form action=""><p>
';hidden_fields_get();echo'Používateľ: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Upraviť">
</form>
';$j=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Používateľ'."<th>".'Server'."</thead>\n";while($a=$j->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'upraviť'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Vytvoriť používateľa'."</a>";}elseif(isset($_GET["sql"])){restart_session();$Je=&get_session("queries");$Ta=&$Je[DB];if(!$p&&$_POST["clear"]){$Ta=array();redirect(remove_from_uri("history"));}page_header('SQL príkaz',$p);if(!$p&&$_POST){$ta=false;$k=$_POST["query"];if($_POST["webfile"]){$ta=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$k=($ta?fread($ta,1e6):false);}elseif($_FILES["sql_file"]["error"]!=4){$k=get_file("sql_file",true);}if(is_string($k)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($k)+memory_get_usage()+8e6);}if($k!=""&&strlen($k)<1e6&&(!$Ta||end($Ta)!=$k)){$Ta[]=$k;}$uc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Tc=";";$la=0;$sd=true;$K=connect();if(is_object($K)&&DB!=""){$K->select_db(DB);}$vb=0;$Wc="";while($k!=""){if(!$la&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$k,$l)){$Tc=$l[1];$k=substr($k,strlen($l[0]));}else{preg_match('('.preg_quote($Tc).'|[\'`"]|/\\*|-- |#|$)',$k,$l,PREG_OFFSET_CAPTURE,$la);$Z=$l[0][0];$la=$l[0][1]+strlen($Z);if(!$Z&&$ta&&!feof($ta)){$k.=fread($ta,1e5);}else{if(!$Z&&rtrim($k)==""){break;}if(!$Z||$Z==$Tc){$sd=false;$ha=substr($k,0,$l[0][1]);$vb++;echo"<pre class='jush-$x' id='sql-$vb'>".shorten_utf8(trim($ha),1000)."</pre>\n";ob_flush();flush();$Sc=explode(" ",microtime());if(!$i->multi_query($ha)){echo"<p class='error'>".'Chyba v dotaze'.": ".error()."\n";$Wc.=" <a href='#sql-$vb'>$vb</a>";if($_POST["error_stops"]){break;}}else{if(is_object($K)&&preg_match("~^$uc*(USE)\\b~isU",$ha)){$K->query($ha);}do{$j=$i->store_result();$Rc=explode(" ",microtime());$Md=" <span class='time'>(".sprintf('%.3f s',max(0,$Rc[0]-$Sc[0]+$Rc[1]-$Sc[1])).")</span>";if(is_object($j)){select($j,$K);echo"<p>".($j->num_rows?lang(array('%d riadok','%d riadky','%d riadkov'),$j->num_rows):"").$Md;if($K&&preg_match("~^($uc|\\()*SELECT\\b~isU",$ha)){$E="explain-$vb";echo", <a href='#$E' onclick=\"return !toggle('$E');\">EXPLAIN</a>\n","<div id='$E' class='hidden'>\n";select(explain($K,$ha));echo"</div>\n";}}else{if(preg_match("~^$uc*(CREATE|DROP|ALTER)$uc+(DATABASE|SCHEMA)\\b~isU",$ha)){restart_session();set_session("dbs",null);session_write_close();}echo"<p class='message' title='".h($i->info)."'>".lang(array('Príkaz prebehol v poriadku, bol zmenený %d záznam.','Príkaz prebehol v poriadku boli zmenené %d záznamy.','Príkaz prebehol v poriadku bolo zmenených %d záznamov.'),$i->affected_rows)."$Md\n";}$Sc=$Rc;}while($i->next_result());}$k=substr($k,$la);$la=0;}else{while(preg_match('~'.($Z=='/*'?'\\*/':(ereg('-- |#',$Z)?"\n":"$Z|\\\\.")).'|$~s',$k,$l,PREG_OFFSET_CAPTURE,$la)){$S=$l[0][0];$la=$l[0][1]+strlen($S);if(!$S&&$ta&&!feof($ta)){$k.=fread($ta,1e6);}elseif($S[0]!="\\"){break;}}}}}}if($Wc&&$vb>1){echo"<p class='error'>".'Chyba v dotaze'.": $Wc\n";}if($sd){echo"<p class='message'>".'Žiadne príkazy na vykonanie.'."\n";}}else{echo"<p class='error'>".upload_error($k)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$ha=$_GET["sql"];if($_POST){$ha=$_POST["query"];}elseif($_GET["history"]!=""){$ha=$Ta[$_GET["history"]];}textarea("query",$ha,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Nahranie súboru'.': <input type="file" name="sql_file">':'Nahrávánie súborov nie je povolené.'),'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Vykonať" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Zastaviť pri chybe');print_fieldset("webfile",'Zo serveru',$_POST["webfile"]);$Vc=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$Vc[]=".$c";}}echo
sprintf('Súbor %s na webovom serveri',"<code>adminer.sql".($Vc?"[".implode("|",$Vc)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustiť súbor'.'">',"</div></fieldset>\n";if($Ta){print_fieldset("history",'História',$_GET["history"]!="");foreach($Ta
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.'Upraviť'."</a> <code class='jush-$x'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Vyčistiť'."'>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$g=$_GET["edit"];$y=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Ha=(isset($_GET["select"])?$_POST["edit"]:$y);$o=fields($g);foreach($o
as$f=>$d){if(!isset($d["privileges"][$Ha?"update":"insert"])||$q->fieldName($d)==""){unset($o[$f]);}}if($_POST&&!$p&&!isset($_GET["select"])){$U=$_POST["referer"];if($_POST["insert"]){$U=($Ha?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$U)){$U=ME."select=".urlencode($g);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($g)," WHERE $y"),$U,'Položka bola vymazaná.');}else{$t=array();foreach($o
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$t[idf_escape($f)]=($Ha?"\n".idf_escape($f)." = $b":$b);}}if($Ha){if(!$t){redirect($U);}query_redirect("UPDATE".limit1(table($g)." SET".implode(",",$t),"\nWHERE $y"),$U,'Položka bola aktualizovaná.');}else{$j=insert_into($g,$t);$Bd=($j?last_id():0);queries_redirect($U,sprintf('Položka%s bola vložená.',($Bd?" $Bd":"")),$j);}}}$oa=$q->tableName(table_status($g));page_header(($Ha?'Upraviť':'Vložiť'),$p,array("select"=>array($g,$oa)),$oa);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($y){$u=array();foreach($o
as$f=>$d){if(isset($d["privileges"]["select"])){$u[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($u){$D=get_rows("SELECT".limit(implode(", ",$u)." FROM ".table($g)," WHERE $y",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($D)!=1?null:reset($D));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($o){echo"<table cellspacing='0'>\n";foreach($o
as$f=>$d){echo"<tr><th>".$q->fieldName($d);$Fa=$_GET["set"][bracket_escape($f)];$n=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?intval($a[$f]):$a[$f]):(!$Ha&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Fa)?$Fa:$d["default"]))));if(!$_POST["save"]&&is_string($n)){$n=$q->editVal($n,$d);}$B=($_POST["save"]?(string)$_POST["function"][$f]:($y&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($n===false?null:(isset($n)?'':'NULL'))));if($d["type"]=="timestamp"&&$n=="CURRENT_TIMESTAMP"){$n="";$B="now";}input($d,$n,$B);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($o){echo"<input type='submit' value='".'Uložiť'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($Ha?'Uložiť a pokračovať v úpravách':'Uložiť a vložiť ďalší')."\">\n";}}if($Ha){echo"<input type='submit' name='delete' value='".'Zmazať'."'$bb>\n";}echo'</form>
';}elseif(isset($_GET["create"])){$g=$_GET["create"];$Ad=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Cd=referencable_primary($g);$M=array();foreach($Cd
as$oa=>$d){$M[str_replace("`","``",$oa)."`".str_replace("`","``",$d["field"])]=$oa;}$tc=array();$sc=array();if($g!=""){$tc=fields($g);$sc=table_status($g);}if($_POST&&!$p&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($g),substr(ME,0,-1),'Tabuľka bola odstránená.');}else{$o=array();$Bc=array();ksort($_POST["fields"]);$Kc=reset($tc);$kb="FIRST";foreach($_POST["fields"]as$c=>$d){$F=$M[$d["type"]];$pc=(isset($F)?$Cd[$F]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$Fa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Fa!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Fa;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Kd=process_field($d,$pc);if($Kd!=process_field($Kc,$Kc)){$o[]=array($d["orig"],$Kd,$kb);}if(isset($F)){$Bc[]=($g!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".idf_escape($M[$d["type"]])." (".idf_escape($pc["field"]).")".(in_array($d["on_delete"],$Ma)?" ON DELETE $d[on_delete]":"");}$kb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$o[]=array($d["orig"]);}if($d["orig"]!=""){$Kc=next($tc);}}$Yb="";if(in_array($_POST["partition_by"],$Ad)){$Nc=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$n=$_POST["partition_values"][$c];$Nc[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($n!=""?" ($n)":" MAXVALUE");}}$Yb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Nc?" (".implode(",",$Nc)."\n)":($_POST["partitions"]?" PARTITIONS ".intval($_POST["partitions"]):""));}elseif($g!=""&&support("partitioning")){$Yb.="\nREMOVE PARTITIONING";}$ja='Tabuľka bola zmenená.';if($g==""){cookie("adminer_engine",$_POST["Engine"]);$ja='Tabuľka bola vytvorená.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ja,alter_table($g,$_POST["name"],$o,$Bc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$sc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$sc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?preg_replace('~\\D+~','',$_POST["Auto_increment"]):""),$Yb));}}page_header(($g!=""?'Zmeniť tabuľku':'Vytvoriť tabuľku'),$p,array("table"=>$g),$g);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"")),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($g!=""){$a=$sc;$a["name"]=$g;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($tc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$yb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($g);$j=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $yb ORDER BY PARTITION_ORDINAL_POSITION LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$j->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $yb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Hd){$a["partition_names"][]=$Hd["PARTITION_NAME"];$a["partition_values"][]=$Hd["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$T=collations();$nd=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($nd&&count($a["fields"])>$nd){echo"<p class='error'>".h(sprintf('Bol prekročený maximálny počet povolených polí. Zvýšte prosím %s a %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$md=engines();foreach($md
as$Xb){if(!strcasecmp($Xb,$a["Engine"])){$a["Engine"]=$Xb;break;}}echo'
<form action="" method="post" id="form">
<p>
Názov tabuľky: <input name="name" maxlength="64" value="',h($a["name"]),'">
',($md?html_select("Engine",array(""=>"(".'úložisko'.")")+$md,$a["Engine"]):""),' ',($T&&!ereg("sqlite|mssql",$x)?html_select("Collation",array(""=>"(".'porovnávanie'.")")+$T,$a["Collation"]):""),' <input type="submit" value="Uložiť">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$nb=edit_fields($a["fields"],$T,"TABLE",$nd,$M,$a["Comment"]!="");echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]);?>">
<script type="text/javascript">
document.write('<label><input type="checkbox" onclick="columnShow(this.checked, 5);">Východzie hodnoty<\/label>');
</script>
<?php echo(support("comment")?checkbox("","",$nb,'Komentár',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($nb?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložiť">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="Odstrániť"',$bb,'>';}if(support("partitioning")){$od=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Rozdeliť podľa',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Ad,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Oddiely: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($od||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($od?"":" class='hidden'"),'>
<thead><tr><th>Názov oddielu<th>Hodnoty</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$g=$_GET["indexes"];$wc=array("PRIMARY","UNIQUE","INDEX");$L=table_status($g);if(ereg("MyISAM|Maria",$L["Engine"])){$wc[]="FULLTEXT";}$z=indexes($g);if($x=="sqlite"){unset($wc[0]);unset($z[""]);}if($_POST&&!$p&&!$_POST["add"]){$Y=array();foreach($_POST["indexes"]as$s){if(in_array($s["type"],$wc)){$v=array();$tb=array();$t=array();ksort($s["columns"]);foreach($s["columns"]as$c=>$xa){if($xa!=""){$Da=$s["lengths"][$c];$t[]=idf_escape($xa).($Da?"(".intval($Da).")":"");$v[]=$xa;$tb[]=($Da?$Da:null);}}if($v){foreach($z
as$f=>$hb){ksort($hb["columns"]);ksort($hb["lengths"]);if($s["type"]==$hb["type"]&&array_values($hb["columns"])===$v&&(!$hb["lengths"]||array_values($hb["lengths"])===$tb)){unset($z[$f]);continue
2;}}$Y[]=array($s["type"],"(".implode(", ",$t).")");}}}foreach($z
as$f=>$hb){$Y[]=array($hb["type"],idf_escape($f),"DROP");}if(!$Y){redirect(ME."table=".urlencode($g));}queries_redirect(ME."table=".urlencode($g),'Indexy boli zmenené.',alter_indexes($g,$Y));}page_header('Indexy',$p,array("table"=>$g),$g);$o=array_keys(fields($g));$a=array("indexes"=>$z);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$s){if($s["columns"][count($s["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$s=end($a["indexes"]);if($s["type"]||array_filter($s["columns"],'strlen')||array_filter($s["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$s){$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indexu<th>Stĺpec (dĺžka)</thead>
';$W=1;foreach($a["indexes"]as$s){echo"<tr><td>".html_select("indexes[$W][type]",array(-1=>"")+$wc,$s["type"],($W==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($s["columns"]);$h=1;foreach($s["columns"]as$xa){echo"<span>".html_select("indexes[$W][columns][$h]",array(-1=>"")+$o,$xa,($h==count($s["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$W][lengths][$h]' size='2' value='".h($s["lengths"][$h])."'> </span>";$h++;}$W++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložiť">
<noscript><p><input type="submit" name="add" value="Pridať ďalší"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$p&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Databáza bola odstránená.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Databáza bola premenovaná.',rename_database($_POST["name"],$_POST["collation"]));}else{$A=explode("\n",str_replace("\r","",$_POST["name"]));$Ed=true;$ab="";foreach($A
as$w){if(count($A)==1||$w!=""){if(!create_database($w,$_POST["collation"])){$Ed=false;}$ab=$w;}}queries_redirect(ME."db=".urlencode($ab),'Databáza bola vytvorená.',$Ed);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"])." COLLATE ".q($_POST["collation"]),substr(ME,0,-1),'Databáza bola zmenená.');}}page_header(DB!=""?'Zmeniť databázu':'Vytvoriť databázu',$p,array(),DB);$T=collations();$f=DB;$Gb=null;if($_POST){$f=$_POST["name"];$Gb=$_POST["collation"];}elseif(DB!=""){$Gb=db_collation(DB,$T);}elseif($x=="sql"){foreach(get_vals("SHOW GRANTS")as$O){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$O,$l)&&$l[1]){$f=stripcslashes(idf_unescape("`$l[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input name="name" value="'.h($f).'" maxlength="64">')."\n".($T?html_select("collation",array(""=>"(".'porovnávanie'.")")+$T,$Gb):""),'<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložiť">
';if(DB!=""){echo"<input type='submit' name='drop' value='".'Odstrániť'."'$bb>\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0' alt='+' title='".'Pridať ďalší'."'>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Aa=$_GET["call"];page_header('Zavolať'.": ".h($Aa),$p);$za=routine($Aa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$rb=array();$Qa=array();foreach($za["fields"]as$h=>$d){if(substr($d["inout"],-3)=="OUT"){$Qa[$h]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$rb[]=$h;}}if(!$p&&$_POST){$Gd=array();foreach($za["fields"]as$c=>$d){if(in_array($c,$rb)){$b=process_input($d);if($b===false){$b="''";}if(isset($Qa[$c])){$i->query("SET @".idf_escape($d["field"])." = $b");}}$Gd[]=(isset($Qa[$c])?"@".idf_escape($d["field"]):$b);}$k=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Aa)."(".implode(", ",$Gd).")";echo"<p><code class='jush-$x'>".h($k)."</code> <a href='".h(ME)."sql=".urlencode($k)."'>".'Upraviť'."</a>\n";if(!$i->multi_query($k)){echo"<p class='error'>".error()."\n";}else{do{$j=$i->store_result();if(is_object($j)){select($j);}else{echo"<p class='message'>".lang(array('Procedúra bola zavolaná, bol zmenený %d záznam.','Procedúra bola zavolaná, boli zmenené %d záznamy.','Procedúra bola zavolaná, bolo zmenených %d záznamov.'),$i->affected_rows)."\n";}}while($i->next_result());if($Qa){select($i->query("SELECT ".implode(", ",$Qa)));}}}echo'
<form action="" method="post">
';if($rb){echo"<table cellspacing='0'>\n";foreach($rb
as$c){$d=$za["fields"][$c];$f=$d["field"];echo"<tr><th>".$q->fieldName($d);$n=$_POST["fields"][$f];if($n!=""&&ereg("enum|set",$d["type"])){$n=intval($n);}input($d,$n,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Zavolať">
</form>
';}elseif(isset($_GET["foreign"])){$g=$_GET["foreign"];if($_POST&&!$p&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($g)."\nDROP ".($x=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($g),'Cudzí kľúč bol odstránený.');}else{$ra=array_filter($_POST["source"],'strlen');ksort($ra);$La=array();foreach($ra
as$c=>$b){$La[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($g).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$ra)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$La)).")".(in_array($_POST["on_delete"],$Ma)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$Ma)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($g),($_GET["name"]!=""?'Cudzí kľúč bol zmenený.':'Cudzí kľúč bol vytvorený.'));$p='Zdrojové a cieľové stĺpce musia mať rovnaký datový typ, nad cieľovými stĺpcami musí byť definovaný index a odkazované dáta musia existovať.'."<br>$p";}}page_header('Cudzí kľúč',$p,array("table"=>$g),$g);$a=array("table"=>$g,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$M=foreign_keys($g);$a=$M[$_GET["name"]];$a["source"][]="";}$ra=array_keys(fields($g));$La=($g===$a["table"]?$ra:array_keys(fields($a["table"])));$Ld=array();foreach(table_status()as$f=>$L){if(fk_support($L)){$Ld[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo'Cieľová tabuľka:
',html_select("table",$Ld,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Zmeniť"></noscript>
<table cellspacing="0">
<thead><tr><th>Zdroj<th>Cieľ</thead>
';$W=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".intval($c)."]",array(-1=>"")+$ra,$b,($W==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".intval($c)."]",$La,$a["target"][$c]);$W++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+$Ma,$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+$Ma,$a["on_update"]),'<p>
<input type="submit" value="Uložiť">
<noscript><p><input type="submit" name="add" value="Pridať stĺpec"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstrániť"',$bb,'>';}echo'<input type="hidden" name="token" value="',$C,'">
</form>
';}elseif(isset($_GET["view"])){$g=$_GET["view"];$Ea=false;if($_POST&&!$p){$Ea=drop_create("DROP VIEW ".table($g),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'Pohľad bol odstránený.','Pohľad bol zmenený.','Pohľad bol vytvorený.',$g);}page_header(($g!=""?'Zmeniť pohľad':'Vytvoriť pohľad'),$p,array("table"=>$g),$g);$a=array();if($_POST){$a=$_POST;}elseif($g!=""){$a=view($g);$a["name"]=$g;}echo'
<form action="" method="post">
<p>Názov: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
';if($Ea){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložiť">
</form>
';}elseif(isset($_GET["event"])){$Oa=$_GET["event"];$_d=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$ed=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$p){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Oa),substr(ME,0,-1),'Udalosť bola odstránená.');}elseif(in_array($_POST["INTERVAL_FIELD"],$_d)&&isset($ed[$_POST["STATUS"]])){$rd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($Oa!=""?"ALTER EVENT ".idf_escape($Oa).$rd.($Oa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$rd)."\n".$ed[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($Oa!=""?'Udalosť bola zmenená.':'Udalosť bola vytvorená.'));}}page_header(($Oa!=""?'Upraviť udalosť'.": ".h($Oa):'Vytvoriť udalosť'),$p);$a=array();if($_POST){$a=$_POST;}elseif($Oa!=""){$D=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($Oa));$a=reset($D);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Názov<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Začiatok<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Koniec<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Každých<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$_d,$a["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$ed,$a["STATUS"]),'<tr><th>Komentár<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Po dokončení zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložiť">
';if($Oa!=""){echo'<input type="submit" name="drop" value="Odstrániť"',$bb,'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Aa=$_GET["procedure"];$za=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Ea=false;if($_POST&&!$p&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$t=array();$o=(array)$_POST["fields"];ksort($o);foreach($o
as$d){if($d["field"]!=""){$t[]=(in_array($d["inout"],$Pb)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Ea=drop_create("DROP $za ".idf_escape($Aa),"CREATE $za ".idf_escape($_POST["name"])." (".implode(", ",$t).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),'Procedúra bola odstránená.','Procedúra bola zmenená.','Procedúra bola vytvorená.',$Aa);}page_header(($Aa!=""?(isset($_GET["function"])?'Zmeniť funkciu':'Zmeniť procedúru').": ".h($Aa):(isset($_GET["function"])?'Vytvoriť funkciu':'Vytvoriť procedúru')),$p);$T=get_vals("SHOW CHARACTER SET");sort($T);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Aa!=""){$a=routine($Aa,$za);$a["name"]=$Aa;}echo'
<form action="" method="post" id="form">
<p>Názov: <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$T,$za);if(isset($_GET["function"])){echo"<tr><td>".'Návratový typ';edit_type("returns",$a["returns"],$T);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
';if($Ea){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložiť">
';if($Aa!=""){echo'<input type="submit" name="drop" value="Odstrániť"',$bb,'>';}echo'</form>
';}elseif(isset($_GET["type"])){$dc=$_GET["type"];if($_POST&&!$p){$_=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($dc),$_,'Typ bol odstránený.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$_,'Typ bol vytvorený.');}}page_header($dc!=""?'Pozmeniť typ'.": ".h($dc):'Vytvoriť typ',$p);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$C,'">
';if($dc!=""){echo"<input type='submit' name='drop' value='".'Odstrániť'."'$bb>\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Uložiť'."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$g=$_GET["trigger"];$fc=trigger_options();$qd=array("INSERT","UPDATE","DELETE");$Ea=false;if($_POST&&!$p&&in_array($_POST["Timing"],$fc["Timing"])&&in_array($_POST["Event"],$qd)&&in_array($_POST["Type"],$fc["Type"])){$td=" $_POST[Timing] $_POST[Event]";$gb=" ON ".table($g);$Ea=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($x=="pgsql"?$gb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($x=="mssql"?$gb.$td:$td.$gb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($g),'Trigger bol odstránený.','Trigger bol zmenený.','Trigger bol vytvorený.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Zmeniť trigger'.": ".h($_GET["name"]):'Vytvoriť trigger'),$p,array("table"=>$g));$a=array("Trigger"=>$g."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Čas<td>',html_select("Timing",$fc["Timing"],$a["Timing"],"if (/^".h(preg_quote($g,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(addcslashes($g,"\r\n'\\"))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Udalosť<td>',html_select("Event",$qd,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$fc["Type"],$a["Type"]),'</table>
<p>Názov: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$C,'">
';if($Ea){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložiť">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstrániť"',$bb,'>';}echo'</form>
';}elseif(isset($_GET["user"])){$hd=$_GET["user"];$X=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$ec){$X[$ec][$a["Privilege"]]=$a["Comment"];}}$X["Server Admin"]+=$X["File access on server"];$X["Databases"]["Create routine"]=$X["Procedures"]["Create routine"];unset($X["Procedures"]["Create routine"]);$X["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$X["Columns"][$b]=$X["Tables"][$b];}unset($X["Server Admin"]["Usage"]);foreach($X["Tables"]as$c=>$b){unset($X["Databases"][$c]);}$Rb=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$Rb[$b]=(array)$Rb[$b]+(array)$_POST["grants"][$c];}}$Sa=array();$kc="";if(isset($_GET["host"])&&($j=$i->query("SHOW GRANTS FOR ".q($hd)."@".q($_GET["host"])))){while($a=$j->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$l)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$l[1],$aa,PREG_SET_ORDER)){foreach($aa
as$b){if($b[1]!="USAGE"){$Sa["$l[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Sa["$l[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$l)){$kc=$l[1];}}}if($_POST&&!$p){$Ab=(isset($_GET["host"])?q($hd)."@".q($_GET["host"]):"''");$Ra=q($_POST["user"])."@".q($_POST["host"]);$id=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Ab",ME."privileges=",'Používateľ bol odstránený.');}else{if($Ab!=$Ra){$p=!queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ra IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $id");}elseif($_POST["pass"]!=$kc||!$_POST["hashed"]){queries("SET PASSWORD FOR $Ra = ".($_POST["hashed"]?$id:"PASSWORD($id)"));}if(!$p){$Mb=array();foreach($Rb
as$Ia=>$O){if(isset($_GET["grant"])){$O=array_filter($O);}$O=array_keys($O);if(isset($_GET["grant"])){$Mb=array_diff(array_keys(array_filter($Rb[$Ia],'strlen')),$O);}elseif($Ab==$Ra){$pd=array_keys((array)$Sa[$Ia]);$Mb=array_diff($pd,$O);$O=array_diff($O,$pd);unset($Sa[$Ia]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ia,$l)&&(!grant("REVOKE",$Mb,$l[2]," ON $l[1] FROM $Ra")||!grant("GRANT",$O,$l[2]," ON $l[1] TO $Ra"))){$p=true;break;}}}if(!$p&&isset($_GET["host"])){if($Ab!=$Ra){queries("DROP USER $Ab");}elseif(!isset($_GET["grant"])){foreach($Sa
as$Ia=>$Mb){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ia,$l)){grant("REVOKE",array_keys($Mb),$l[2]," ON $l[1] FROM $Ra");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Používateľ bol zmenený.':'Používateľ bol vytvorený.'),!$p);if($Ab!=$Ra){$i->query("DROP USER $Ra");}}}page_header((isset($_GET["host"])?'Používateľ'.": ".h("$hd@$_GET[host]"):'Vytvoriť používateľa'),$p,array("privileges"=>array('','Oprávnenia')));if($_POST){$a=$_POST;$Sa=$Rb;}else{$a=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$kc;if($kc!=""){$a["hashed"]=true;}$Sa[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Používateľ<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Heslo<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Zahašované',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html'>".'Oprávnenia'."</a>";$h=0;foreach($Sa
as$Ia=>$O){echo'<th>'.($Ia!="*.*"?"<input name='objects[$h]' value='".h($Ia)."' size='10'>":"<input type='hidden' name='objects[$h]' value='*.*' size='10'>*.*");$h++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Databáza',"Tables"=>'Tabuľka',"Columns"=>'Stĺpec',"Procedures"=>'Procedúra',)as$ec=>$Bb){foreach((array)$X[$ec]as$Nb=>$Xa){echo"<tr".odd()."><td".($Bb?">$Bb<td":" colspan='2'").' lang="en" title="'.h($Xa).'">'.h($Nb);$h=0;foreach($Sa
as$Ia=>$O){$f="'grants[$h][".h(strtoupper($Nb))."]'";$n=$O[strtoupper($Nb)];if($ec=="Server Admin"&&$Ia!=(isset($Sa["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($n?" selected":"").">".'Povoliť'."<option value='0'".($n=="0"?" selected":"").">".'Zakázať'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($n?" checked":"").($Nb=="All privileges"?" id='grants-$h-all'":($Nb=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$h-all');\"")).">";}$h++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Uložiť">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstrániť"',$bb,'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$p){$Mc=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".ereg_replace("[^0-9]+","",$b))){$Mc++;}}queries_redirect(ME."processlist=",lang(array('Bol ukončený %d proces.','Boli ukončené %d procesy.','Bolo ukončených %d procesov.'),$Mc),$Mc||!$_POST["kill"]);}page_header('Zoznam procesov',$p);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';foreach(get_rows("SHOW FULL PROCESSLIST")as$h=>$a){if(!$h){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0)."<td>".implode("<td>",array_map('nbsp',$a))."\n";}echo'</table>
<p>
<input type="hidden" name="token" value="',$C,'">
<input type="submit" value="Ukončiť">
</form>
';}elseif(isset($_GET["select"])){$g=$_GET["select"];$L=table_status($g);$z=indexes($g);$o=fields($g,1);$M=column_foreign_keys($g);$re=array();$v=array();$fb=null;foreach($o
as$c=>$d){$f=$q->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$v[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$fb=$q->selectLengthProcess();}}$re+=$d["privileges"];}list($u,$ia)=$q->selectColumnsProcess($v,$z);$y=$q->selectSearchProcess($o,$z);$Za=$q->selectOrderProcess($o,$z);$Q=$q->selectLimitProcess();$yb=($u?implode(", ",$u):"*")."\nFROM ".table($g);$Oc=($ia&&count($ia)<count($u)?"\nGROUP BY ".implode(", ",$ia):"").($Za?"\nORDER BY ".implode(", ",$Za):"");if($_POST&&!$p){$qe="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Cc=$ic=null;foreach($z
as$s){if($s["type"]=="PRIMARY"){$Cc=array_flip($s["columns"]);$ic=($u?$Cc:array());break;}}foreach($u
as$c=>$b){$b=$_GET["columns"][$c];if(!$b["fun"]){unset($ic[$b["col"]]);}}if($_POST["export"]){dump_headers($g);dump_table($g,"");if($_POST["format"]!="sql"){$a=array_keys($o);if($u){$a=array();foreach($u
as$b){$a[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($a);}if(!is_array($_POST["check"])||$ic===array()){$Xc=$y;if(is_array($_POST["check"])){$Xc[]="($qe)";}dump_data($g,"INSERT","SELECT $yb".($Xc?"\nWHERE ".implode(" AND ",$Xc):"").$Oc);}else{$Od=array();foreach($_POST["check"]as$b){$Od[]="(SELECT".limit($yb,"\nWHERE ".($y?implode(" AND ",$y)." AND ":"").where_check($b).$Oc,1).")";}dump_data($g,"INSERT",implode(" UNION ALL ",$Od));}exit;}if(!$q->selectEmailProcess($y,$M)){if($_POST["save"]||$_POST["delete"]){$j=true;$Wa=0;$k=table($g);$t=array();if(!$_POST["delete"]){foreach($v
as$f=>$b){$b=process_input($o[$f]);if($b!==null){if($_POST["clone"]){$t[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$t[]=idf_escape($f)." = $b";}}}$k.=($_POST["clone"]?" (".implode(", ",array_keys($t)).")\nSELECT ".implode(", ",$t)."\nFROM ".table($g):" SET\n".implode(",\n",$t));}if($_POST["delete"]||$t){$jc="UPDATE";if($_POST["delete"]){$jc="DELETE";$k="FROM $k";}if($_POST["clone"]){$jc="INSERT";$k="INTO $k";}if($_POST["all"]||($ic===array()&&$_POST["check"])||count($ia)<count($u)){$j=queries($jc." $k".($_POST["all"]?($y?"\nWHERE ".implode(" AND ",$y):""):"\nWHERE $qe"));$Wa=$i->affected_rows;}else{foreach((array)$_POST["check"]as$b){$j=queries($jc.limit1($k,"\nWHERE ".where_check($b)));if(!$j){break;}$Wa+=$i->affected_rows;}}}queries_redirect(remove_from_uri("page"),sprintf('%d položiek bolo ovplyvnených.',$Wa),$j);}elseif(!$_POST["import"]){if(!$_POST["val"]){$p='Dvojkliknite na políčko, ktoré chcete zmeniť.';}else{$j=true;$Wa=0;foreach($_POST["val"]as$Ya=>$a){$t=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$t[]=idf_escape($c)." = ".$q->processInput($o[$c],$b);}$j=queries("UPDATE".limit1(table($g)." SET ".implode(", ",$t)," WHERE ".where_check($Ya).($y?" AND ".implode(" AND ",$y):"")));if(!$j){break;}$Wa+=$i->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d položiek bolo ovplyvnených.',$Wa),$j);}}elseif(is_string($ba=get_file("csv_file",true))){$ba=preg_replace("~^\xEF\xBB\xBF~",'',$ba);$j=true;$Na=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$ba,$aa);$Wa=count($aa[0]);begin();$Zb=($_POST["separator"]=="csv"?",":";");foreach($aa[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Zb]*)$Zb~",$b.$Zb,$Qc);if(!$c&&!array_diff($Qc[1],$Na)){$Na=$Qc[1];$Wa--;}else{$t=array();foreach($Qc[1]as$h=>$nc){$t[idf_escape($Na[$h])]=($nc==""&&$o[$Na[$h]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$nc))));}$j=insert_update($g,$t,$Cc);if(!$j){break;}}}if($j){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),$Wa),$j);queries("ROLLBACK");}else{$p=upload_error($ba);}}}$oa=$q->tableName($L);page_header('Vypísať'.": $oa",$p);session_write_close();$t=null;if(isset($re["insert"])){$t="";foreach((array)$_GET["where"]as$b){if(count($M[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$t.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$q->selectLinks($L,$t);if(!$v){echo"<p class='error'>".'Tabuľku sa nepodarilo vypísať'.($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($g).'">',"</div>\n";$q->selectColumnsPrint($u,$v);$q->selectSearchPrint($y,$v,$z);$q->selectOrderPrint($Za,$v,$z);$q->selectLimitPrint($Q);$q->selectLengthPrint($fb);$q->selectActionPrint($fb);echo"</form>\n";$H=$_GET["page"];if($H=="last"){$Ba=$i->result("SELECT COUNT(*) FROM ".table($g).($y?" WHERE ".implode(" AND ",$y):""));$H=floor(($Ba-1)/$Q);}$k="SELECT".limit((intval($Q)&&$ia&&count($ia)<count($u)&&$x=="sql"?"SQL_CALC_FOUND_ROWS ":"").$yb,($y?"\nWHERE ".implode(" AND ",$y):"").$Oc,($Q!=""?intval($Q):null),($H?$Q*$H:0),"\n");echo$q->selectQuery($k);$j=$i->query($k);if(!$j){echo"<p class='error'>".error()."\n";}else{if($x=="mssql"){$j->seek($Q*$H);}$hc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$D=array();while($a=$j->fetch_assoc()){$D[]=$a;}if($_GET["page"]!="last"){$Ba=(intval($Q)&&$ia&&count($ia)<count($u)?($x=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($k) x")):count($D));}if(!$D){echo"<p class='message'>".'Žiadne riadky.'."\n";}else{$ve=$q->backwardKeys($g,$oa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$ia&&$u?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upraviť'."</a>");$ad=array();$R=array();reset($u);$Za=1;foreach($D[0]as$c=>$b){$b=$_GET["columns"][key($u)];$d=$o[$u?$b["col"]:$c];$f=($d?$q->fieldName($d,$Za):"*");if($f!=""){$Za++;$ad[$c]=$f;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($_GET["order"][0]==$c&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$R[$c]=$b["fun"];next($u);}$tb=array();if($_GET["modify"]){foreach($D
as$a){foreach($a
as$c=>$b){$tb[$c]=max($tb[$c],min(40,strlen(utf8_decode($b))));}}}echo($ve?"<th>".'Vzťahy':"")."</thead>\n";foreach($q->rowDescriptions($D,$M)as$J=>$a){$Lc=unique_array($D[$J],$z);$Ya="";foreach($Lc
as$c=>$b){$Ya.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$ia&&$u?"":"<td>".checkbox("check[]",substr($Ya,1),in_array(substr($Ya,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ia)<count($u)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($g).$Ya)."'>".'upraviť'."</a>"));foreach($a
as$c=>$b){if(isset($ad[$c])){$d=$o[$c];if($b!=""&&(!isset($hc[$c])||$hc[$c]!="")){$hc[$c]=(is_email($b)?$ad[$c]:"");}$_="";$b=$q->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$_=h(ME.'download='.urlencode($g).'&field='.urlencode($c).$Ya);}if($b==""){$b="&nbsp;";}elseif($fb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,intval($fb)));}else{$b=h($b);}if(!$_){foreach((array)$M[$c]as$F){if(count($M[$c])==1||count($F["source"])==1){foreach($F["source"]as$h=>$ra){$_.=where_link($h,$F["target"][$h],$D[$J][$ra]);}$_=h(($F["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($F["db"]),ME):ME).'select='.urlencode($F["table"]).$_);break;}}}if($c=="COUNT(*)"){$_=h(ME."select=".urlencode($g));$h=0;foreach((array)$_GET["where"]as$r){if(!array_key_exists($r["col"],$Lc)){$_.=h(where_link($h++,$r["col"],$r["val"],$r["op"]));}}foreach($Lc
as$va=>$r){$_.=h(where_link($h++,$va,$r,(isset($r)?"=":"IS NULL")));}}}if(!$_){if(is_email($b)){$_="mailto:$b";}if($Cb=is_url($a[$c])){$_=($Cb=="http"&&$zb?$a[$c]:"$Cb://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$E=h("val[$Ya][".bracket_escape($c)."]");$n=$_POST["val"][$Ya][bracket_escape($c)];$le=h(isset($n)?$n:$a[$c]);$Yd=strpos($b,"<i>...</i>");$Rd=is_utf8($b)&&!$Yd&&$D[$J][$c]==$a[$c]&&!$R[$c];$Sd=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$Rd)||isset($n)?"<td>".($Sd?"<textarea name='$E' cols='30' rows='".(substr_count($a[$c],"\n")+1)."'>$le</textarea>":"<input name='$E' value='$le' size='$tb[$c]'>"):"<td id='$E' ondblclick=\"".($Rd?"selectDblClick(this, event".($Sd?", 1":"").")":"alert('".h($Yd?'Pre zmenu tejto hodnoty zvýšte dĺžku textov.':'Pre zmenu tejto hodnoty použite odkaz upraviť.')."')").";\">".$q->selectVal($b,$_,$d));}}$q->backwardKeysPrint($ve,$D[$J]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$dd);if($D||$H){$cd=true;if($_GET["page"]!="last"&&intval($Q)&&count($ia)>=count($u)&&($Ba>=$Q||$H)){$Ba=$L["Rows"];if(!isset($Ba)||$y||2*$H*$Q>$Ba||($L["Engine"]=="InnoDB"&&$Ba<1e4)){ob_flush();flush();$Ba=$i->result("SELECT COUNT(*) FROM ".table($g).($y?" WHERE ".implode(" AND ",$y):""));}else{$cd=false;}}echo"<p class='pages'>";if(intval($Q)&&$Ba>$Q){$jd=floor(($Ba-1)/$Q);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".'Stránka'."', '".($H+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".'Stránka'."</a>:".pagination(0,$H).($H>5?" ...":"");for($h=max(1,$H-4);$h<min($jd,$H+5);$h++){echo
pagination($h,$H);}echo($H+5<$jd?" ...":"").($cd?pagination($jd,$H):' <a href="'.h(remove_from_uri()."&page=last").'">'.'posledný'."</a>");}echo" (".($cd?"":"~ ").lang(array('%d riadok','%d riadky','%d riadkov'),$Ba).") ".checkbox("all",1,0,'celý výsledok')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Upraviť</legend><div>
<input type="submit" value="Uložiť" title="Dvojkliknite na políčko, ktoré chcete zmeniť.">
<input type="submit" name="edit" value="Upraviť">
<input type="submit" name="clone" value="Klonovať">
<input type="submit" name="delete" value="Zmazať" onclick="return confirm('Naozaj? (' + (this.form['all'].checked ? <?php echo$Ba,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');echo$q->dumpOutput(1,$dd["output"])." ".$q->dumpFormat(1,$dd["format"]);echo" <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}print_fieldset("import",'Import CSV',!$D);echo"<input type='hidden' name='token' value='$C'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$dd["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>\n","</div></fieldset>\n";$q->selectEmailPrint(array_filter($hc,'strlen'),$v);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$sb=isset($_GET["status"]);page_header($sb?'Stav':'Premenné');$ie=($sb?show_status():show_variables());if(!$ie){echo"<p class='message'>".'Žiadne riadky.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($ie
as$c=>$b){echo"<tr>","<th><code class='jush-".$x.($sb?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$gc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$E=addcslashes($a["Name"],"\\'/");echo"setHtml('Comment-$E', '".nbsp($a["Comment"])."');\n";if(!is_view($a)){foreach(array("Engine","Collation")as$c){echo"setHtml('$c-$E', '".nbsp($a[$c])."');\n";}foreach($gc+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($a[$c]!=""){$b=number_format($a[$c],0,'.',' ');echo"setHtml('$c-$E', '".($c=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b)."');\n";if(isset($gc[$c])){$gc[$c]+=($a["Engine"]!="InnoDB"||$c!="Data_free"?$a[$c]:0);}}elseif(array_key_exists($c,$a)){echo"setHtml('$c-$E');\n";}}}}foreach($gc
as$c=>$b){echo"setHtml('sum-$c', '".number_format($b,0,'.',' ')."');\n";}}else{foreach(count_tables(get_databases())as$w=>$b){echo"setHtml('tables-".addcslashes($w,"\\'/")."', '$b');\n";}}exit;}else{$fe=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($fe&&!$p&&!$_POST["search"]){$j=true;$ja="";if($x=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$j=truncate_tables($_POST["tables"]);}$ja='Tabuľka bola vyprázdnená';}elseif($_POST["move"]){$j=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ja='Tabuľka bola presunutá';}elseif($_POST["drop"]){if($_POST["views"]){$j=drop_views($_POST["views"]);}if($j&&$_POST["tables"]){$j=drop_tables($_POST["tables"]);}$ja='Tabuľka bola odstránená';}elseif($_POST["tables"]&&($j=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$j->fetch_assoc()){$ja.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ja,$j);}page_header(($_GET["ns"]==""?'Databáza'.": ".h(DB):'Schéma'.": ".h($_GET["ns"])),$p,true);echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Zmeniť databázu'."</a>\n":"");if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.'Schéma databázy'."</a>\n","<h3>".'Tabuľky a pohľady'."</h3>\n";$fd=tables_list();if(!$fd){echo"<p class='message'>".'Žiadne tabuľky.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Vyhľadať dáta v tabuľkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Vyhľadať'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabuľka'.'<td>'.'Typ'.'<td>'.'Porovnávanie'.'<td>'.'Veľkosť dát'.'<td>'.'Veľkosť indexu'.'<td>'.'Voľné miesto'.'<td>'.'Auto Increment'.'<td>'.'Riadky'.(support("comment")?'<td>'.'Komentár':'')."</thead>\n";foreach($fd
as$f=>$N){$vc=(isset($N)&&!eregi("table",$N));echo'<tr'.odd().'><td>'.checkbox(($vc?"views[]":"tables[]"),$f,in_array($f,$fe,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($vc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'Pohľad'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{echo"<td id='Engine-".h($f)."'>&nbsp;<td id='Collation-".h($f)."'>&nbsp;";foreach(array("Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$_){echo"<td align='right'><a href='".h(ME."$_=").urlencode($f)."' id='$c-".h($f)."'>?</a>";}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkom',count($fd)),"<td>".nbsp($i->result("SELECT @@storage_engine")),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$C'>".($x=="sql"?"<input type='submit' value='".'Analyzovať'."'> <input type='submit' name='optimize' value='".'Optimalizovať'."'> <input type='submit' name='check' value='".'Skontrolovať'."'> <input type='submit' name='repair' value='".'Opraviť'."'> ":"")."<input type='submit' name='truncate' value='".'Vyprázdniť'."' onclick=\"return confirm('".'Naozaj?'." (' + formChecked(this, /tables/) + ')');\"> <input type='submit' name='drop' value='".'Odstrániť'."' onclick=\"return confirm('".'Naozaj?'." (' + formChecked(this, /tables|views/) + ')');\">\n";$A=(support("scheme")?schemas():get_databases());if(count($A)!=1&&$x!="sqlite"){$w=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Presunúť do inej databázy'.($A?": ".html_select("target",$A,$w):': <input name="target" value="'.h($w).'">')." <input type='submit' name='move' value='".'Presunúť'."'>\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Vytvoriť tabuľku'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Vytvoriť pohľad'."</a>\n";}if(support("routine")){echo"<h3>".'Procedúry'."</h3>\n";$de=routines();if($de){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Názov'.'<td>'.'Typ'.'<td>'.'Návratový typ'."<td>&nbsp;</thead>\n";odd('');foreach($de
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Zmeniť'."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.'Vytvoriť procedúru'.'</a> <a href="'.h(ME).'function=">'.'Vytvoriť funkciu'."</a>\n";}if(support("type")){echo"<h3>".'Užívateľské typy'."</h3>\n";$na=types();if($na){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Názov'."</thead>\n";odd('');foreach($na
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Vytvoriť typ'."</a>\n";}if(support("event")){echo"<h3>".'Udalosti'."</h3>\n";$D=get_rows("SHOW EVENTS");if($D){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Názov'."<td>".'Plán'."<td>".'Začiatok'."<td>".'Koniec'."</thead>\n";foreach($D
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'V stanovený čas'."<td>".$a["Execute at"]:'Každých'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Vytvoriť udalosť'."</a>\n";}page_footer();echo"<script type='text/javascript' src='".h(ME)."script=db'></script>\n";exit;}}page_footer();