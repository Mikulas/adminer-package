<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$ne=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($ne){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$Od=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($Od){$$b=$Od;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className+=' js';function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
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
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function textareaKeydown(target,event,tab,button){if(tab&&event.keyCode==9&&!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(target.setSelectionRange){var start=target.selectionStart;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey){if(button){button.click();}else{target.form.submit();}}
return true;}
function selectDblClick(td,event,text){td.ondblclick=function(){};var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;input.onkeydown=function(event){return textareaKeydown(input,event||window.event);};}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.x,event.y);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveStart('character',pos);range.select();}}
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
var match=/(\d+)(\.\d+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
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
function foreignAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var spans=row.getElementsByTagName('span');for(var i=0;i<spans.length-1;i++){row.removeChild(spans[i]);}
var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var input=row.getElementsByTagName('input')[0];input.name=input.name.replace(/indexes\[\d+/,'$&1');input.value='';field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddColumn(field){field.onchange=function(){};var column=field.parentNode.cloneNode(true);var select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-\d+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
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
idf_unescape($Aa){$ab=substr($Aa,-1);return
str_replace($ab.$ab,$ab,substr($Aa,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($Za){if(get_magic_quotes_gpc()){while(list($c,$b)=each($Za)){foreach($b
as$wa=>$r){unset($Za[$c][$wa]);if(is_array($r)){$Za[$c][stripslashes($wa)]=$r;$Za[]=&$Za[$c][stripslashes($wa)];}else{$Za[$c][stripslashes($wa)]=($ne?$r:stripslashes($r));}}}}}function
bracket_escape($Aa,$Te=false){static$xe=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Aa,($Te?array_flip($xe):$xe));}function
h($J){return
htmlspecialchars($J,ENT_QUOTES);}function
nbsp($J){return(trim($J)!=""?h($J):"&nbsp;");}function
nl_br($J){return
str_replace("\n","<br>",$J);}function
checkbox($f,$p,$ra,$Sd="",$Be=""){static$F=0;$F++;$e="<input type='checkbox'".($f?" name='$f' value='".h($p)."'":"").($ra?" checked":"").($Be?" onclick=\"$Be\"":"")." id='checkbox-$F'>";return($Sd!=""?"<label for='checkbox-$F'>$e".h($Sd)."</label>":$e);}function
optionlist($pc,$pf=null,$be=false){$e="";foreach($pc
as$wa=>$r){if(is_array($r)){$e.='<optgroup label="'.h($wa).'">';}foreach((is_array($r)?$r:array($wa=>$r))as$c=>$b){$e.='<option'.($be||is_string($c)?' value="'.h($c).'"':'').(($be||is_string($c)?(string)$c:$b)===$pf?' selected':'').'>'.h($b);}if(is_array($r)){$e.='</optgroup>';}}return$e;}function
html_select($f,$pc,$p="",$sb=true){if($sb){return"<select name='".h($f)."'".(is_string($sb)?" onchange=\"$sb\"":"").">".optionlist($pc,$p)."</select>";}$e="";foreach($pc
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$p?" checked":"").">".h($b)."</label>";}return$e;}function
confirm($ce=""){return" onclick=\"return confirm('".'Opravdu?'.($ce?" (' + $ce + ')":"")."');\"";}function
js_escape($J){return
addcslashes($J,"\r\n'\\/");}function
ini_bool($if){$b=ini_get($if);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
q($J){global$i;return$i->quote($J);}function
get_vals($j,$fa=0){global$i;$e=array();$k=$i->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[]=$a[$fa];}}return$e;}function
get_key_vals($j,$M=null){global$i;if(!is_object($M)){$M=$i;}$e=array();$k=$M->query($j);while($a=$k->fetch_row()){$e[$a[0]]=$a[1];}return$e;}function
get_rows($j,$M=null,$q="<p class='error'>"){global$i;if(!is_object($M)){$M=$i;}$e=array();$k=$M->query($j);if(is_object($k)){while($a=$k->fetch_assoc()){$e[]=$a;}}elseif(!$k&&$q&&(headers_sent()||ob_get_level())){echo$q.error()."\n";}return$e;}function
unique_array($a,$_){foreach($_
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$e=array();foreach($s["columns"]as$c){if(!isset($a[$c])){continue
2;}$e[$c]=$a[$c];}return$e;}}$e=array();foreach($a
as$c=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$e[$c]=$b;}}return$e;}function
where($x){global$t;$e=array();foreach((array)$x["where"]as$c=>$b){$e[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$b)||$t=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$x["null"]as$c){$e[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$Ud);remove_slashes(array(&$Ud));return
where($Ud);}function
where_link($g,$fa,$p,$Ze="="){return"&where%5B$g%5D%5Bcol%5D=".urlencode($fa)."&where%5B$g%5D%5Bop%5D=".urlencode($Ze)."&where%5B$g%5D%5Bval%5D=".urlencode($p);}function
cookie($f,$p){global$ub;$Gb=array($f,(ereg("\n",$p)?"":$p),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ub);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Gb[]=true;}return
call_user_func_array('setcookie',$Gb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($mb,$G,$U){global$ya;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ya))."|username|".session_name()),$l);return"$l[1]?".(SID&&!$_COOKIE?SID."&":"").($mb!="server"||$G!=""?urlencode($mb)."=".urlencode($G)."&":"")."username=".urlencode($U).($l[2]?"&$l[2]":"");}function
redirect($T,$la=null){if(isset($la)){restart_session();$_SESSION["messages"][]=$la;}if(isset($T)){header("Location: ".($T!=""?$T:"."));exit;}}function
query_redirect($j,$T,$la,$xc=true,$of=true,$ee=false){global$i,$q,$n;if($of){$ee=!$i->query($j);}$ld="";if($j){$ld=$n->messageQuery($j);}if($ee){$q=error().$ld;return
false;}if($xc){redirect($T,$la.$ld);}return
true;}function
queries($j=null){global$i;static$qe=array();if(!isset($j)){return
implode(";\n",$qe);}$qe[]=$j;return$i->query($j);}function
apply_queries($j,$xa,$Je='table'){foreach($xa
as$m){if(!queries("$j ".$Je($m))){return
false;}}return
true;}function
queries_redirect($T,$la,$xc){return
query_redirect(queries(),$T,$la,$xc,false,!$xc);}function
remove_from_uri($Ha=""){return
substr(preg_replace("~(?<=[?&])($Ha".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($H,$Ge){return" ".($H==$Ge?$H+1:'<a href="'.h(remove_from_uri("page").($H?"&page=$H":"")).'">'.($H+1)."</a>");}function
get_file($c,$he=false){$aa=$_FILES[$c];if(!$aa||$aa["error"]){return$aa["error"];}return
file_get_contents($he&&ereg('\\.gz$',$aa["name"])?"compress.zlib://$aa[tmp_name]":($he&&ereg('\\.bz2$',$aa["name"])?"compress.bzip2://$aa[tmp_name]":$aa["tmp_name"]));}function
upload_error($q){$ie=($q==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($q?'Nepodařilo se nahrát soubor.'.($ie?" ".sprintf('Maximální povolená velikost souboru je %sB.',$ie):""):'Soubor neexistuje.');}function
odd($e=' class="odd"'){static$g=0;if(!$e){$g=-1;}return($g++%
2?$e:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($J,$Ia=80,$Qe=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$Ia})($)?)u",$J,$l)){preg_match("(^([\t\r\n -~]{0,$Ia})($)?)",$J,$l);}return
h($l[1]).$Qe.(isset($l[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($Za,$Re=array()){while(list($c,$b)=each($Za)){if(is_array($b)){foreach($b
as$wa=>$r){$Za[$c."[$wa]"]=$r;}}elseif(!in_array($c,$Re)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($m){global$n;$e=array();foreach($n->foreignKeys($m)as$E){foreach($E["source"]as$b){$e[$b][]=$E;}}return$e;}function
enum_input($O,$Ca,$d,$p){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ea);$e="";foreach($ea[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$ra=(is_int($p)?$p==$g+1:(is_array($p)?in_array($g+1,$p):$p===$b));$e.=" <label><input type='$O'$Ca value='".($g+1)."'".($ra?' checked':'').'>'.h($b).'</label>';}return$e;}function
input($d,$p,$C){global$oa,$n,$t;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$X=(isset($_GET["select"])?array("orig"=>'původní'):array())+$n->editFunctions($d);$Ca=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($X[""])."<td>".$n->editInput($_GET["edit"],$d,$Ca,$p);}else{$Va=0;foreach($X
as$c=>$b){if($c===""||!$b){break;}$Va++;}$sb=($Va?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($Va > f.selectedIndex) f.selectedIndex = $Va;\"":"");$Ca.=$sb;echo(count($X)>1?html_select("function[$f]",$X,!isset($C)||in_array($C,$X)||isset($X[$C])?$C:""):nbsp(reset($X))).'<td>';$je=$n->editInput($_GET["edit"],$d,$Ca,$p);if($je!=""){echo$je;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ea);foreach($ea[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$ra=(is_int($p)?($p>>$g)&1:in_array($b,explode(",",$p),true));echo" <label><input type='checkbox' name='fields[$f][$g]' value='".(1<<$g)."'".($ra?' checked':'')."$sb>".h($b).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$sb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($t!="sqlite"||ereg("\n",$p)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ca onkeydown='return textareaKeydown(this, event);'>".h($p).'</textarea>';}else{$Ic=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$l)?((ereg("binary",$d["type"])?2:1)*$l[1]+($l[3]?1:0)+($l[2]&&!$d["unsigned"]?1:0)):($oa[$d["type"]]?$oa[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($p)."'".($Ic?" maxlength='$Ic'":"").(ereg('char|binary',$d["type"])&&$Ic>20?" size='40'":"")."$Ca>";}}}function
process_input($d){global$n;$Aa=bracket_escape($d["field"]);$C=$_POST["function"][$Aa];$p=$_POST["fields"][$Aa];if($d["type"]=="enum"){if($p==-1){return
false;}if($p==""){return"NULL";}return+$p;}if($d["auto_increment"]&&$p==""){return
null;}if($C=="orig"){return
false;}if($C=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$p);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$aa=get_file("fields-$Aa");if(!is_string($aa)){return
false;}return
q($aa);}return$n->processInput($d,$p,$C);}function
search_tables(){global$n,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Z=false;foreach(table_status()as$m=>$L){$f=$n->tableName($L);if(isset($L["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($m,$_POST["tables"]))){$k=$i->query("SELECT".limit("1 FROM ".table($m)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($m),array())),1));if($k->fetch_row()){if(!$Z){echo"<ul>\n";$Z=true;}echo"<li><a href='".h(ME."select=".urlencode($m)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($Z?"</ul>":"<p class='message'>".'Žádné tabulky.')."\n";}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\n";}function
apply_sql_function($C,$fa){return($C?($C=="unixepoch"?"DATETIME($fa, '$C')":($C=="count distinct"?"COUNT(DISTINCT ":strtoupper("$C("))."$fa)"):$fa);}function
password_file(){$Ac=ini_get("upload_tmp_dir");if(!$Ac){if(function_exists('sys_get_temp_dir')){$Ac=sys_get_temp_dir();}else{$Wa=@tempnam("","");if(!$Wa){return
false;}$Ac=dirname($Wa);unlink($Wa);}}$Wa="$Ac/adminer.key";$e=@file_get_contents($Wa);if($e){return$e;}$ua=@fopen($Wa,"w");if($ua){$e=md5(uniqid(mt_rand(),true));fwrite($ua,$e);fclose($ua);}return$e;}function
is_mail($Ne){$oe='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Kb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$da="$oe+(\\.$oe+)*@($Kb?\\.)+$Kb";return
preg_match("(^$da(,\\s*$da)*\$)i",$Ne);}function
is_url($J){$Kb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Kb?\\.)+$Kb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$J,$l)?strtolower($l[1]):"");}function
print_fieldset($F,$He,$qf=false){echo"<fieldset><legend><a href='#fieldset-$F' onclick=\"return !toggle('fieldset-$F');\">$He</a></legend><div id='fieldset-$F'".($qf?"":" class='hidden'").">\n";}function
bold($J,$Ke){return($Ke?"<b>$J</b>":$J);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$ub=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Gb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ub);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Gb[]=true;}call_user_func_array('session_set_cookie_params',$Gb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
lang($Fe,$Pb){$Eb=($Pb==1||(!$Pb&&'cs'=='fr')?0:((!$Pb||$Pb>=5)&&ereg('cs|sk|ru','cs')?2:1));return
sprintf($Fe[$Eb],$Pb);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Me,$U,$ka,$Ve='auth_error'){set_exception_handler($Ve);parent::__construct($Me,$U,$ka);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Qb=false){$k=parent::query($j);if(!$k){$bf=$this->errorInfo();$this->error=$bf[2];return
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
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$ya=array();$ya=array("server"=>"MySQL")+$ya;if(!defined("DRIVER")){$Se=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($G,$U,$ka){mysqli_report(MYSQLI_REPORT_OFF);list($ef,$ec)=explode(":",$G,2);$e=@$this->real_connect(($G!=""?$ef:ini_get("mysqli.default_host")),("$G$U"!=""?$U:ini_get("mysqli.default_user")),("$G$U$ka"!=""?$ka:ini_get("mysqli.default_pw")),null,(is_numeric($ec)?$ec:ini_get("mysqli.default_port")),(!is_numeric($ec)?$ec:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch_array();return$a[$d];}function
quote($J){return"'".$this->escape_string($J)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($G,$U,$ka){$this->_link=@mysql_connect(($G!=""?$G:ini_get("mysql.default_host")),("$G$U"!=""?$U:ini_get("mysql.default_user")),("$G$U$ka"!=""?$ka:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($J){return"'".mysql_real_escape_string($J,$this->_link)."'";}function
select_db($dc){return
mysql_select_db($dc,$this->_link);}function
query($j,$Qb=false){$k=@($Qb?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
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
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($k){$this->_result=$k;$this->num_rows=mysql_num_rows($k);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$e=mysql_fetch_field($this->_result,$this->_offset++);$e->orgtable=$e->table;$e->orgname=$e->name;$e->charsetnr=($e->blob?63:0);return$e;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($G,$U,$ka){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$G)),$U,$ka);$this->query("SET NAMES utf8");return
true;}function
select_db($dc){return$this->query("USE ".idf_escape($dc));}function
query($j,$Qb=false){$this->setAttribute(1000,!$Qb);return
parent::query($j,$Qb);}}}function
idf_escape($Aa){return"`".str_replace("`","``",$Aa)."`";}function
table($Aa){return
idf_escape($Aa);}function
connect(){global$n;$i=new
Min_DB;$hd=$n->credentials();if($i->connect($hd[0],$hd[1],$hd[2])){$i->query("SET SQL_QUOTE_SHOW_CREATE=1");return$i;}return$i->error;}function
get_databases($jf=true){$e=&get_session("dbs");if(!isset($e)){if($jf){restart_session();ob_flush();flush();}$e=get_vals("SHOW DATABASES");}return$e;}function
limit($j,$x,$S,$ma=0,$Xb=" "){return" $j$x".(isset($S)?$Xb."LIMIT $S".($ma?" OFFSET $ma":""):"");}function
limit1($j,$x){return
limit($j,$x,1);}function
db_collation($w,$R){global$i;$e=null;$ga=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1);if(preg_match('~ COLLATE ([^ ]+)~',$ga,$l)){$e=$l[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ga,$l)){$e=$R[$l[1]][0];}return$e;}function
engines(){$e=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($z){$e=array();foreach($z
as$w){$e[$w]=count(get_vals("SHOW TABLES IN ".idf_escape($w)));}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($L){return!isset($L["Rows"]);}function
fk_support($L){return($L["Engine"]=="InnoDB");}function
fields($m){$e=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($m))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$l);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$l[1],"length"=>$l[2],"unsigned"=>ltrim($l[3].$l[4]),"default"=>($a["Default"]!=""||ereg("char",$l[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$l)?$l[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$e;}function
indexes($m,$M=null){global$i;if(!is_object($M)){$M=$i;}$e=array();foreach(get_rows("SHOW INDEX FROM ".table($m),$M)as$a){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$e;}function
foreign_keys($m){global$i,$Sa;static$da='`(?:[^`]|``)+`';$e=array();$ge=$i->result("SHOW CREATE TABLE ".table($m),1);if($ge){preg_match_all("~CONSTRAINT ($da) FOREIGN KEY \\(((?:$da,? ?)+)\\) REFERENCES ($da)(?:\\.($da))? \\(((?:$da,? ?)+)\\)(?: ON DELETE (".implode("|",$Sa)."))?(?: ON UPDATE (".implode("|",$Sa)."))?~",$ge,$ea,PREG_SET_ORDER);foreach($ea
as$l){preg_match_all("~$da~",$l[2],$sa);preg_match_all("~$da~",$l[5],$Ja);$e[idf_unescape($l[1])]=array("db"=>idf_unescape($l[4]!=""?$l[3]:$l[4]),"table"=>idf_unescape($l[4]!=""?$l[4]:$l[3]),"source"=>array_map('idf_unescape',$sa[0]),"target"=>array_map('idf_unescape',$Ja[0]),"on_delete"=>$l[6],"on_update"=>$l[7],);}}return$e;}function
view($f){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){$e[$a["Charset"]][]=$a["Collation"];}ksort($e);foreach($e
as$c=>$b){sort($e[$c]);}return$e;}function
information_schema($w){global$i;return($i->server_info>=5&&$w=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($w,$tb){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($w).($tb?" COLLATE ".q($tb):""));}function
drop_databases($z){set_session("dbs",null);return
apply_queries("DROP DATABASE",$z,'idf_escape');}function
rename_database($f,$tb){if(create_database($f,$tb)){$zb=array();foreach(tables_list()as$m=>$O){$zb[]=table($m)." TO ".idf_escape($f).".".table($m);}if(!$zb||queries("RENAME TABLE ".implode(", ",$zb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Tc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$Tc="";break;}if($s["type"]=="PRIMARY"){$Tc=" UNIQUE";}}}return" AUTO_INCREMENT$Tc";}function
alter_table($m,$f,$o,$ic,$eb,$Ub,$tb,$Gc,$Rb){$ba=array();foreach($o
as$d){$ba[]=($d[1]?($m!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($m!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$ba=array_merge($ba,$ic);$_b="COMMENT=".q($eb).($Ub?" ENGINE=".q($Ub):"").($tb?" COLLATE ".q($tb):"").($Gc!=""?" AUTO_INCREMENT=$Gc":"").$Rb;if($m==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ba)."\n) $_b");}if($m!=$f){$ba[]="RENAME TO ".table($f);}$ba[]=$_b;return
queries("ALTER TABLE ".table($m)."\n".implode(",\n",$ba));}function
alter_indexes($m,$ba){foreach($ba
as$c=>$b){$ba[$c]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($m).implode(",",$ba));}function
truncate_tables($xa){return
apply_queries("TRUNCATE TABLE",$xa);}function
drop_views($Ya){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ya)));}function
drop_tables($xa){return
queries("DROP TABLE ".implode(", ",array_map('table',$xa)));}function
move_tables($xa,$Ya,$Ja){$zb=array();foreach(array_merge($xa,$Ya)as$m){$zb[]=table($m)." TO ".idf_escape($Ja).".".table($m);}return
queries("RENAME TABLE ".implode(", ",$zb));}function
trigger($f){$D=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($D);}function
triggers($m){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($m,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$O){global$i,$lb,$Vb,$oa;$Pe=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$ke="((".implode("|",array_merge(array_keys($oa),$Pe)).")(?:\\s*\\(((?:[^'\")]*|$lb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$da="\\s*(".($O=="FUNCTION"?"":implode("|",$Vb)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ke";$ga=$i->result("SHOW CREATE $O ".idf_escape($f),2);preg_match("~\\(((?:$da\\s*,?)*)\\)".($O=="FUNCTION"?"\\s*RETURNS\\s+$ke":"")."\\s*(.*)~is",$ga,$l);$o=array();preg_match_all("~$da\\s*,?~is",$l[1],$ea,PREG_SET_ORDER);foreach($ea
as$Ha){$f=str_replace("``","`",$Ha[2]).$Ha[3];$o[]=array("field"=>$f,"type"=>strtolower($Ha[5]),"length"=>preg_replace_callback("~$lb~s",'normalize_enum',$Ha[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ha[8] $Ha[7]"))),"full_type"=>$Ha[4],"inout"=>strtoupper($Ha[1]),"collation"=>strtolower($Ha[9]),);}if($O!="FUNCTION"){return
array("fields"=>$o,"definition"=>$l[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$l[12],"length"=>$l[13],"unsigned"=>$l[15],"collation"=>$l[16]),"definition"=>$l[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($m,$u){return
queries("INSERT INTO ".table($m)." (".implode(", ",array_keys($u)).")\nVALUES (".implode(", ",$u).")");}function
insert_update($m,$u,$Ec){foreach($u
as$c=>$b){$u[$c]="$c = $b";}$Da=implode(", ",$u);return
queries("INSERT INTO ".table($m)." SET $Da ON DUPLICATE KEY UPDATE $Da");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$j){return$i->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Oa){return
true;}function
create_sql($m,$Gc){global$i;$e=$i->result("SHOW CREATE TABLE ".table($m),1);if(!$Gc){$e=preg_replace('~ AUTO_INCREMENT=\\d+~','',$e);}return$e;}function
truncate_sql($m){return"TRUNCATE ".table($m);}function
use_sql($dc){return"USE ".idf_escape($dc);}function
trigger_sql($m,$I){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($m,"%_")),null,"-- ")as$a){$e.="\n".($I=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Oe){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$Oe);}$t="sql";$oa=array();$ad=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Řetězce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binární'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),)as$c=>$b){$oa+=$b;$ad[$c]=array_keys($b);}$Yb=array("unsigned","zerofill","unsigned zerofill");$le=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$X=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Zb=array("avg","count","count distinct","group_concat","max","min","sum");$me=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$_c="3.1.0";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
loginForm(){global$ya;?>
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
login($wf,$ka){return
true;}function
tableName($Fc){return
h($Fc["Name"]);}function
fieldName($d,$Xa=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Fc,$u=""){echo'<p class="tabs">';$va=array("select"=>'Vypsat data',"table"=>'Zobrazit strukturu');if(is_view($Fc)){$va["view"]='Pozměnit pohled';}else{$va["create"]='Pozměnit tabulku';}if(isset($u)){$va["edit"]='Nová položka';}foreach($va
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($Fc["Name"]).($c=="edit"?$u:"")."'>".bold($b,isset($_GET[$c]))."</a>";}echo"\n";}function
foreignKeys($m){return
foreign_keys($m);}function
backwardKeys($m,$tf){return
array();}function
backwardKeysPrint($uf,$a){}function
selectQuery($j){global$t;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Poslední stránka'."'>&gt;&gt;</a> <code class='jush-$t'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upravit'."</a>\n";}function
rowDescription($m){return"";}function
rowDescriptions($D,$Ie){return$D;}function
selectVal($b,$y,$d){$e=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(array('%d bajt','%d bajty','%d bajtů'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($y?"<a href='$y'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($A,$v){global$X,$Zb;print_fieldset("select",'Vypsat',$A);$g=0;$pe=array('Funkce'=>$X,'Agregace'=>$Zb);foreach($A
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$pe,$b["fun"]),"(<select name='columns[$g][col]'><option>".optionlist($v,$b["col"],true)."</select>)</div>\n";$g++;}echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$pe,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$g][col]' onchange='selectAddRow(this);'><option>".optionlist($v,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($x,$v,$_){print_fieldset("search",'Vyhledat',$x);foreach($_
as$g=>$s){if($s["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$s["columns"]))."</i>) AGAINST"," <input name='fulltext[$g]' value='".h($_GET["fulltext"][$g])."'>",checkbox("boolean[$g]",1,isset($_GET["boolean"][$g]),"BOOL"),"<br>\n";}}$g=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$g][col]'><option value=''>(".'kdekoliv'.")".optionlist($v,$b["col"],true)."</select>",html_select("where[$g][op]",$this->operators,$b["op"]),"<input name='where[$g][val]' value='".h($b["val"])."'></div>\n";$g++;}}echo"<div><select name='where[$g][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoliv'.")".optionlist($v,null,true)."</select>",html_select("where[$g][op]",$this->operators),"<input name='where[$g][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Xa,$v,$_){print_fieldset("sort",'Seřadit',$Xa);$g=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($v[$b])){echo"<div><select name='order[$g]'><option>".optionlist($v,$b,true)."</select>",checkbox("desc[$g]",1,isset($_GET["desc"][$c]),'sestupně')."</div>\n";$g++;}}echo"<div><select name='order[$g]' onchange='selectAddRow(this);'><option>".optionlist($v,null,true)."</select>",checkbox("desc[$g]",1,0,'sestupně')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($S){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($S)."'>","</div></fieldset>\n";}function
selectLengthPrint($jb){if(isset($jb)){echo"<fieldset><legend>".'Délka textů'."</legend><div>",'<input name="text_length" size="3" value="'.h($jb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectEmailPrint($rf,$v){}function
selectColumnsProcess($v,$_){global$X,$Zb;$A=array();$ca=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($v[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$X)||in_array($b["fun"],$Zb)))){$A[$c]=apply_sql_function($b["fun"],(isset($v[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$Zb)){$ca[]=$A[$c];}}}return
array($A,$ca);}function
selectSearchProcess($o,$_){global$t;$e=array();foreach($_
as$g=>$s){if($s["type"]=="FULLTEXT"&&$_GET["fulltext"][$g]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$s["columns"])).") AGAINST (".q($_GET["fulltext"][$g]).(isset($_GET["boolean"][$g])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Ab=" $b[op]";if(ereg('IN$',$b["op"])){$rb=process_length($b["val"]);$Ab.=" (".($rb!=""?$rb:"NULL").")";}elseif($b["op"]=="LIKE %%"){$Ab=" LIKE ".$this->processInput($o[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Ab.=" ".$this->processInput($o[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$Ab;}else{$Qa=array();foreach($o
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$Qa[]=($t=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($Qa?"(".implode("$Ab OR ",$Qa)."$Ab)":"0");}}}return$e;}function
selectOrderProcess($o,$_){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($o[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($o[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($x,$Ie){return
false;}function
messageQuery($j){global$t;restart_session();$F="sql-".count($_SESSION["messages"]);$Ka=&get_session("queries");$Ka[$_GET["db"]][]=(strlen($j)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...":$j);return" <a href='#$F' onclick=\"return !toggle('$F');\">".'SQL příkaz'."</a><div id='$F' class='hidden'><pre class='jush-$t'>".shorten_utf8($j,1000).'</pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Ka[$_GET["db"]])-1)).'">'.'Upravit'.'</a></div>';}function
editFunctions($d){global$me;$e=($d["null"]?"NULL/":"");foreach($me
as$c=>$X){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($X
as$da=>$b){if(!$da||ereg($da,$d["type"])){$e.="/$b";}}}}return
explode("/",$e);}function
editInput($m,$d,$Ca,$p){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Ca value='-1' checked><i>".'původní'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Ca value=''".(isset($p)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"")."<label><input type='radio'$Ca value='0'".($p===0?" checked":"")."><i>".'prázdné'."</i></label>".enum_input("radio",$Ca,$d,$p);}return"";}function
processInput($d,$p,$C=""){$f=$d["field"];$e=q($p);if(ereg('^(now|getdate|uuid)$',$C)){$e="$C()";}elseif(ereg('^current_(date|timestamp)$',$C)){$e=$C;}elseif(ereg('^([+-]|\\|\\|)$',$C)){$e=idf_escape($f)." $C $e";}elseif(ereg('^[+-] interval$',$C)){$e=idf_escape($f)." $C ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$p)?$p:$e);}elseif(ereg('^(addtime|subtime|concat)$',$C)){$e="$C(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$C)){$e="$C($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput(){$e=array('text'=>'otevřít','file'=>'uložit');if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return$e;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($m,$I,$yc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($I){dump_csv(array_keys(fields($m)));}}elseif($I){$ga=create_sql($m,$_POST["auto_increment"]);if($ga){if($I=="DROP+CREATE"){echo"DROP ".($yc?"VIEW":"TABLE")." IF EXISTS ".table($m).";\n";}if($yc){$ga=preg_replace('~^([A-Z =]+) DEFINER=`'.str_replace("@","`@`",logged_user()).'`~','\\1',$ga);}echo($I!="CREATE+ALTER"?$ga:($yc?substr_replace($ga," OR REPLACE",6,0):substr_replace($ga," IF NOT EXISTS",12,0))).";\n\n";}if($I=="CREATE+ALTER"&&!$yc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($m)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$o=array();$qb="";foreach(get_rows($j)as$a){$Ga=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Ga)?q($Ga):"NULL");$a["after"]=q($qb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Ga)?" DEFAULT ".($Ga=="CURRENT_TIMESTAMP"?$Ga:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($qb?" AFTER ".idf_escape($qb):" FIRST"));echo", ADD $a[alter]";$o[]=$a;$qb=$a["COLUMN_NAME"];}echo"';
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
dumpData($m,$I,$j){global$i,$t;$fe=($t=="sqlite"?0:1048576);if($I){if($_POST["format"]=="sql"&&$I=="TRUNCATE+INSERT"){echo
truncate_sql($m).";\n";}$o=fields($m);$k=$i->query($j,1);if($k){$Db="";$Ma="";while($a=$k->fetch_assoc()){if($_POST["format"]!="sql"){dump_csv($a);}else{if(!$Db){$Db="INSERT INTO ".table($m)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$o[$c]["type"])?$b:q($b)):"NULL");}$Q=implode(",\t",$a);if($I=="INSERT+UPDATE"){$u=array();foreach($a
as$c=>$b){$u[]=idf_escape($c)." = $b";}echo"$Db ($Q) ON DUPLICATE KEY UPDATE ".implode(", ",$u).";\n";}else{$Q=($fe?"\n":" ")."($Q)";if(!$Ma){$Ma=$Db.$Q;}elseif(strlen($Ma)+2+strlen($Q)<$fe){$Ma.=",$Q";}else{$Ma.=";\n";echo$Ma;$Ma=$Db.$Q;}}}}if($_POST["format"]=="sql"&&$I!="INSERT+UPDATE"&&$Ma){$Ma.=";\n";echo$Ma;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$i->error)."\n";}}}function
dumpHeaders($Xd,$mf=false){$Wa=($Xd!=""?friendly_url($Xd):"adminer");$Na=$_POST["output"];$kb=($_POST["format"]=="sql"?"sql":($mf?"tar":"csv"));header("Content-Type: ".($Na=="bz2"?"application/x-bzip":($Na=="gz"?"application/x-gzip":($kb=="tar"?"application/x-tar":($kb=="sql"||$Na!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Na!="text"){header("Content-Disposition: attachment; filename=$Wa.$kb".($Na!="file"&&!ereg('[^0-9a-z]',$Na)?".$Na":""));}session_write_close();if($_POST["output"]=="bz2"){ob_start('bzcompress',1e6);}if($_POST["output"]=="gz"){ob_start('gzencode',1e6);}return$kb;}function
navigation($wb){global$_c,$i,$B,$t,$ya;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$_c,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($_c,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($wb=="auth"){$Va=true;foreach((array)$_SESSION["pwds"]as$mb=>$kf){foreach($kf
as$G=>$cf){foreach($cf
as$U=>$ka){if(isset($ka)){if($Va){echo"<p>\n";$Va=false;}echo"<a href='".h(auth_url($mb,$G,$U))."'>($ya[$mb]) ".h($U.($G!=""?"@$G":""))."</a><br>\n";}}}}}else{$z=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$wb){echo"<a href='".h(ME)."sql='>".bold('SQL příkaz',isset($_GET["sql"]))."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."'>".bold('Export',isset($_GET["dump"]))."</a>\n";}}echo'<input type="hidden" name="token" value="',$B,'">
<input type="submit" name="logout" value="Odhlásit">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($z?html_select("db",array(""=>"(".'databáze'.")")+$z,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Vybrat"',($z?" class='hidden'":""),'>
';if($wb!="db"&&DB!=""&&$i->select_db(DB)){if($_GET["ns"]!==""&&!$wb){echo'<p><a href="'.h(ME).'create=">'.bold('Vytvořit novou tabulku',$_GET["create"]==="")."</a>\n";$xa=tables_list();if(!$xa){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{$this->tablesPrint($xa);$va=array();foreach($xa
as$m=>$O){$va[]=preg_quote($m,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $t: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$va).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$t;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($xa){echo"<p id='tables'>\n";foreach($xa
as$m=>$O){echo'<a href="'.h(ME).'select='.urlencode($m).'">'.bold('vypsat',$_GET["select"]==$m).'</a> ','<a href="'.h(ME).'table='.urlencode($m).'">'.bold($this->tableName(array("Name"=>$m)),$_GET["table"]==$m)."</a><br>\n";}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($n->operators)){$n->operators=$le;}function
page_header($Wd,$q="",$Wb=array(),$Vd=""){global$vf,$ub,$n,$i,$ya;header("Content-Type: text/html; charset=utf-8");$n->headers();$Td=$Wd.($Vd!=""?": ".h($Vd):"");$Fb=($ub?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Td.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.1.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.1.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr" onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\', \'',$Fb,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Fb');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.1.0",'"></script>

<div id="content">
';if(isset($Wb)){$y=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($y?h($y):".").'">'.$ya[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$G=(SERVER!=""?h(SERVER):'Server');if($Wb===false){echo"$G\n";}else{echo"<a href='".($y?h($y):".")."'>$G</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wb))){echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Wb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Wb
as$c=>$b){$Lb=(is_array($b)?$b[1]:$b);if($Lb!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Lb).'</a> &raquo; ';}}}echo"$Wd\n";}}echo"<h2>$Td</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$z=&get_session("dbs");if(DB!=""&&$z&&!in_array(DB,$z,true)){$z=null;}if($q){echo"<div class='error'>$q</div>\n";}}function
page_footer($wb=""){global$n;echo'</div>

<div id="menu">
';$n->navigation($wb);echo'</div>
';}function
int32($N){while($N>=2147483648){$N-=4294967296;}while($N<=-2147483649){$N+=4294967296;}return(int)$N;}function
long2str($r,$gd){$Q='';foreach($r
as$b){$Q.=pack('V',$b);}if($gd){return
substr($Q,0,end($r));}return$Q;}function
str2long($Q,$gd){$r=array_values(unpack('V*',str_pad($Q,4*ceil(strlen($Q)/4),"\0")));if($gd){$r[]=strlen($Q);}return$r;}function
xxtea_mx($na,$ja,$qa,$wa){return
int32((($na>>5&0x7FFFFFF)^$ja<<2)+(($ja>>3&0x1FFFFFFF)^$na<<4))^int32(($qa^$ja)+($wa^$na));}function
encrypt_string($Jb,$c){if($Jb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($Jb,true);$N=count($r)-1;$na=$r[$N];$ja=$r[0];$W=floor(6+52/($N+1));$qa=0;while($W-->0){$qa=int32($qa+0x9E3779B9);$Hb=$qa>>2&3;for($ha=0;$ha<$N;$ha++){$ja=$r[$ha+1];$pb=xxtea_mx($na,$ja,$qa,$c[$ha&3^$Hb]);$na=int32($r[$ha]+$pb);$r[$ha]=$na;}$ja=$r[0];$pb=xxtea_mx($na,$ja,$qa,$c[$ha&3^$Hb]);$na=int32($r[$N]+$pb);$r[$N]=$na;}return
long2str($r,false);}function
decrypt_string($Jb,$c){if($Jb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($Jb,false);$N=count($r)-1;$na=$r[$N];$ja=$r[0];$W=floor(6+52/($N+1));$qa=int32($W*0x9E3779B9);while($qa){$Hb=$qa>>2&3;for($ha=$N;$ha>0;$ha--){$na=$r[$ha-1];$pb=xxtea_mx($na,$ja,$qa,$c[$ha&3^$Hb]);$ja=int32($r[$ha]-$pb);$r[$ha]=$ja;}$na=$r[$N];$pb=xxtea_mx($na,$ja,$qa,$c[$ha&3^$Hb]);$ja=int32($r[0]-$pb);$r[0]=$ja;$qa=int32($qa-0x9E3779B9);}return
long2str($r,true);}$i='';$B=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$gb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$gb[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$rc=$n->permanentLogin();$gb[$c]="$c:".base64_encode($rc?encrypt_string($_POST["password"],$rc):"");cookie("adminer_permanent",implode(" ",$gb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($B&&$_POST["token"]!=$B){page_header('Odhlásit','Neplatný token CSRF. Odešlete formulář znovu.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($gb[$c]){unset($gb[$c]);cookie("adminer_permanent",implode(" ",$gb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlášení proběhlo v pořádku.');}}elseif($gb&&!$_SESSION["pwds"]){session_regenerate_id();$rc=$n->permanentLogin();foreach($gb
as$c=>$b){list(,$hf)=explode(":",$b);list($mb,$G,$U)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$mb][$G][$U]=decrypt_string(base64_decode($hf),$rc);}}function
auth_error($Zd=null){global$i,$n,$B;$sc=session_name();$q="";if(!$_COOKIE[$sc]&&$_GET[$sc]&&ini_bool("session.use_only_cookies")){$q='Session proměnné musí být povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$sc]||$_GET[$sc])&&!$B){$q='Session vypršela, přihlašte se prosím znovu.';}else{$ka=&get_session("pwds");if(isset($ka)){$q=h($Zd?$Zd->getMessage():(is_string($i)?$i:'Neplatné přihlašovací údaje.'));$ka=null;}}}page_header('Přihlásit se',$q,null);echo"<form action='' method='post'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žádná extenze',sprintf('Není dostupná žádná z podporovaných PHP extenzí (%s).',implode(", ",$Se)),false);page_footer("auth");exit;}$i=connect();}if(is_string($i)||!$n->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$B=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$B;}$q=($_POST?($_POST["token"]==$B?"":'Neplatný token CSRF. Odešlete formulář znovu.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','"post_max_size"')));function
connect_error(){global$i,$B,$q,$ya;$z=array();if(DB!=""){page_header('Databáze'.": ".h(DB),'Nesprávná databáze.',true);}else{if($_POST["db"]&&!$q){queries_redirect(substr(ME,0,-1),'Databáze byly odstraněny.',drop_databases($_POST["db"]));}page_header('Vybrat databázi',$q,false);echo"<p><a href='".h(ME)."database='>".'Vytvořit novou databázi'."</a>\n";foreach(array('privileges'=>'Oprávnění','processlist'=>'Seznam procesů','variables'=>'Proměnné','status'=>'Stav',)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".sprintf('Verze %s: %s přes PHP extenzi %s',$ya[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".sprintf('Přihlášen jako: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$z=get_databases();if($z){$ff=support("scheme");$R=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$B'>&nbsp;<th>".'Databáze'."<td>".'Porovnávání'."<td>".'Tabulky'."</thead>\n";foreach($z
as$w){$ed=h(ME)."db=".urlencode($w);echo"<tr".odd()."><td>".checkbox("db[]",$w,in_array($w,(array)$_POST["db"])),"<th><a href='$ed'>".h($w)."</a>","<td><a href='$ed".($ff?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($w,$R))."</a>","<td align='right'><a href='$ed&amp;schema=' id='tables-".h($w)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Odstranit'."'".confirm("formChecked(this, /db/)").">\n","<a href='".h(ME)."refresh=1'>".'Obnovit'."</a>\n","</form>\n";}}page_footer("db");if($z){echo"<script type='text/javascript' src='".h(ME."script=connect&token=$B")."'></script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($k,$M=null){$va=array();$_=array();$v=array();$de=array();$oa=array();odd('');for($g=0;$a=$k->fetch_row();$g++){if(!$g){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($V=0;$V<count($a);$V++){$d=$k->fetch_field();$pa=$d->orgtable;$Mb=$d->orgname;if($pa!=""){if(!isset($_[$pa])){$_[$pa]=array();foreach(indexes($pa,$M)as$s){if($s["type"]=="PRIMARY"){$_[$pa]=array_flip($s["columns"]);break;}}$v[$pa]=$_[$pa];}if(isset($v[$pa][$Mb])){unset($v[$pa][$Mb]);$_[$pa][$Mb]=$V;$va[$V]=$pa;}}if($d->charsetnr==63){$de[$V]=true;}$oa[$V]=$d->type;echo"<th".($pa!=""||$d->name!=$Mb?" title='".h(($pa!=""?"$pa.":"").$Mb)."'":"").">".h($d->name);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($de[$c]&&!is_utf8($b)){$b="<i>".lang(array('%d bajt','%d bajty','%d bajtů'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($oa[$c]==254){$b="<code>$b</code>";}}if(isset($va[$c])&&!$v[$va[$c]]){$y="edit=".urlencode($va[$c]);foreach($_[$va[$c]]as$vc=>$V){$y.="&where".urlencode("[".bracket_escape($vc)."]")."=".urlencode($a[$V]);}$b="<a href='".h(ME.$y)."'>$b</a>";}}echo"<td>$b";}}echo($g?"</table>":"<p class='message'>".'Žádné řádky.')."\n";}function
referencable_primary($nf){$e=array();foreach(table_status()as$ta=>$m){if($ta!=$nf&&fk_support($m)){foreach(fields($ta)as$d){if($d["primary"]){if($e[$ta]){unset($e[$ta]);break;}$e[$ta]=$d;}}}}return$e;}function
textarea($f,$p,$D=10,$Qa=80){echo"<textarea name='$f' rows='$D' cols='$Qa' style='width: 98%;' spellcheck='false' onkeydown='return textareaKeydown(this, event, true);'>".h($p)."</textarea>";}function
edit_type($c,$d,$R,$K=array()){global$ad,$oa,$Yb,$Sa;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($oa[$d["type"]])?array():array($d["type"]))+$ad+($K?array('Cizí klíče'=>$K):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td>',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'porovnávání'.')'.optionlist($R,$d["collation"]).'</select>',($Yb?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($Yb,$d["unsigned"]).'</select>':''),($K?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'Při smazání'.")".optionlist($Sa,$d["on_delete"])."</select> ":" ");}function
process_length($Ia){global$lb;return(preg_match("~^\\s*(?:$lb)(?:\\s*,\\s*(?:$lb))*\\s*\$~",$Ia)&&preg_match_all("~$lb~",$Ia,$ea)?implode(",",$ea[0]):preg_replace('~[^0-9,+-]~','',$Ia));}function
process_type($d,$Nb="COLLATE"){global$Yb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$Yb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $Nb ".q($d["collation"]):"");}function
process_field($d,$gc){return
array(idf_escape($d["field"]),process_type($gc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($O){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$O)){return" class='$c'";}}}function
edit_fields($o,$R,$O="TABLE",$ae=0,$K=array(),$ob=false){global$Vb;foreach($o
as$d){if($d["comment"]!=""){$ob=true;break;}}echo'<thead><tr class="wrap">
';if($O=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($O=="TABLE"?'Název sloupce':'Název parametru'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Délka
<td>Volby
';if($O=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td class="hidden">Výchozí hodnoty
',(support("comment")?"<td".($ob?"":" class='hidden'").">".'Komentář':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.1.0' alt='+' title='".'Přidat další'."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
';foreach($o
as$g=>$d){$g++;$bd=$d[($_POST?"orig":"field")];$re=(isset($_POST["add"][$g-1])||(isset($d["field"])&&!$_POST["drop_col"][$g]))&&(support("drop_col")||$bd=="");echo'<tr',($re?"":" style='display: none;'"),'>
',($O=="PROCEDURE"?"<td>".html_select("fields[$g][inout]",$Vb,$d["inout"]):""),'<th>';if($re){echo'<input name="fields[',$g,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($o)>1?"":"editingAddRow(this, $ae); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$g,'][orig]" value="',h($bd),'">
';edit_type("fields[$g]",$d,$R,$K);if($O=="TABLE"){echo'<td>',checkbox("fields[$g][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$g,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$g][has_default]",1,$d["has_default"]),'<input name="fields[',$g,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($ob?"":" class='hidden'")."><input name='fields[$g][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.1.0' alt='+' title='".'Přidat další'."' onclick='return !editingAddRow(this, $ae, 1);'>&nbsp;"."<input type='image' name='up[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=up.gif&amp;version=3.1.0' alt='^' title='".'Přesunout nahoru'."'>&nbsp;"."<input type='image' name='down[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=down.gif&amp;version=3.1.0' alt='v' title='".'Přesunout dolů'."'>&nbsp;":""),($bd==""||support("drop_col")?"<input type='image' name='drop_col[$g]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.1.0' alt='x' title='".'Odebrat'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$ob;}function
process_fields(&$o){ksort($o);$ma=0;if($_POST["up"]){$ab=0;foreach($o
as$c=>$d){if(key($_POST["up"])==$c){unset($o[$c]);array_splice($o,$ab,0,array($d));break;}if(isset($d["field"])){$ab=$ma;}$ma++;}}if($_POST["down"]){$Z=false;foreach($o
as$c=>$d){if(isset($d["field"])&&$Z){unset($o[key($_POST["down"])]);array_splice($o,$ma,0,array($Z));break;}if(key($_POST["down"])==$c){$Z=$d;}$ma++;}}$o=array_values($o);if($_POST["add"]){array_splice($o,key($_POST["add"]),0,array(array()));}}function
normalize_enum($l){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($l[0][0].$l[0][0],$l[0][0],substr($l[0],1,-1))),'\\'))."'";}function
grant($P,$Y,$v,$hb){if(!$Y){return
true;}if($Y==array("ALL PRIVILEGES","GRANT OPTION")){return($P=="GRANT"?queries("$P ALL PRIVILEGES$hb WITH GRANT OPTION"):queries("$P ALL PRIVILEGES$hb")&&queries("$P GRANT OPTION$hb"));}return
queries("$P ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$v, ",$Y).$v).$hb);}function
drop_create($Ee,$ga,$T,$De,$Xe,$gf,$f){if($_POST["drop"]){return
query_redirect($Ee,$T,$De,true,!$_POST["dropped"]);}$Fa=$f!=""&&($_POST["dropped"]||queries($Ee));$df=queries($ga);if(!queries_redirect($T,($f!=""?$Xe:$gf),$df)&&$Fa){restart_session();$_SESSION["messages"][]=$De;}return$Fa;}function
tar_file($Wa,$Mc){$e=pack("a100a8a8a8a12a12",$Wa,644,0,0,decoct(strlen($Mc)),decoct(time()));$we=8*32;for($g=0;$g<strlen($e);$g++){$we+=ord($e{$g});}$e.=sprintf("%06o",$we)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Mc.str_repeat("\0",511-(strlen($Mc)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Sa=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$lb="'(?:''|[^'\\\\]|\\\\.)*+'";$Vb=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$h=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$h-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($h)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$h=$_GET["table"];$o=fields($h);if(!$o){$q=error();}$L=($o?table_status($h):array());page_header(($o&&is_view($L)?'Pohled':'Tabulka').": ".h($h),$q);$n->selectLinks($L);$eb=$L["Comment"];if($eb!=""){echo"<p>".'Komentář'.": ".h($eb)."\n";}if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Sloupec'."<td>".'Typ'.(support("comment")?"<td>".'Komentář':"")."</thead>\n";foreach($o
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($L)){echo"<h3>".'Indexy'."</h3>\n";$_=indexes($h);if($_){echo"<table cellspacing='0'>\n";foreach($_
as$f=>$s){ksort($s["columns"]);$La=array();foreach($s["columns"]as$c=>$b){$La[]="<i>".h($b)."</i>".($s["lengths"][$c]?"(".$s["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$s[type]<td>".implode(", ",$La)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($h).'">'.'Pozměnit indexy'."</a>\n";if(fk_support($L)){echo"<h3>".'Cizí klíče'."</h3>\n";$K=foreign_keys($h);if($K){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'Cíl'."<td>".'Při smazání'."<td>".'Při změně'.($t!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($K
as$f=>$E){$y=($E["db"]!=""?"<b>".h($E["db"])."</b>.":"").h($E["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$E["source"]))."</i>","<td><a href='".h($E["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($E["db"]),ME):ME)."table=".urlencode($E["table"])."'>$y</a>","(<i>".implode("</i>, <i>",array_map('h',$E["target"]))."</i>)","<td>$E[on_delete]\n","<td>$E[on_update]\n";if($t!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($h).'&name='.urlencode($f)).'">'.'Změnit'.'</a>';}}echo"</table>\n";}if($t!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($h).'">'.'Přidat cizí klíč'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggery'."</h3>\n";$ac=triggers($h);if($ac){echo"<table cellspacing='0'>\n";foreach($ac
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($h).'&name='.urlencode($c))."'>".'Změnit'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($h).'">'.'Přidat trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schéma databáze',"",array(),DB);$fb=array();$Ce=array();preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$_COOKIE["adminer_schema"],$ea,PREG_SET_ORDER);foreach($ea
as$g=>$l){$fb[$l[1]]=array($l[2],$l[3]);$Ce[]="\n\t'".js_escape($l[1])."': [ $l[2], $l[3] ]";}$yb=0;$ve=-1;$Oa=array();$ue=array();$te=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$Eb=0;$Oa[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$Eb+=1.25;$d["pos"]=$Eb;$Oa[$a["Name"]]["fields"][$f]=$d;}$Oa[$a["Name"]]["pos"]=($fb[$a["Name"]]?$fb[$a["Name"]]:array($yb,0));foreach($n->foreignKeys($a["Name"])as$b){if(!$b["db"]){$ia=$ve;if($fb[$a["Name"]][1]||$fb[$b["table"]][1]){$ia=min(floatval($fb[$a["Name"]][1]),floatval($fb[$b["table"]][1]))-1;}else{$ve-=.1;}while($te[(string)$ia]){$ia-=.0001;}$Oa[$a["Name"]]["references"][$b["table"]][(string)$ia]=array($b["source"],$b["target"]);$ue[$b["table"]][$a["Name"]][(string)$ia]=$b["target"];$te[(string)$ia]=true;}}$yb=max($yb,$Oa[$a["Name"]]["pos"][0]+2.5+$Eb);}echo'<div id="schema" style="height: ',$yb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Ce)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$yb,';
document.onmousemove = schemaMousemove;
document.onmouseup = schemaMouseup;
</script>
';foreach($Oa
as$f=>$m){echo"<div class='table' style='top: ".$m["pos"][0]."em; left: ".$m["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($m["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$m["references"]as$xb=>$bc){foreach($bc
as$ia=>$hc){$cc=$ia-$fb[$f][1];$g=0;foreach($hc[0]as$sa){echo"<div class='references' title='".h($xb)."' id='refs$ia-".($g++)."' style='left: $cc"."em; top: ".$m["fields"][$sa]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$cc)."em;'></div></div>\n";}}}foreach((array)$ue[$f]as$xb=>$bc){foreach($bc
as$ia=>$v){$cc=$ia-$fb[$f][1];$g=0;foreach($v
as$Ja){echo"<div class='references' title='".h($xb)."' id='refd$ia-".($g++)."' style='left: $cc"."em; top: ".$m["fields"][$Ja]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=arrow.gif) no-repeat right center;&amp;version=3.1.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$cc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Oa
as$f=>$m){foreach((array)$m["references"]as$xb=>$bc){foreach($bc
as$ia=>$hc){$kc=$yb;$Qc=-10;foreach($hc[0]as$c=>$sa){$ye=$m["pos"][0]+$m["fields"][$sa]["pos"];$Ae=$Oa[$xb]["pos"][0]+$Oa[$xb]["fields"][$hc[1][$c]]["pos"];$kc=min($kc,$ye,$Ae);$Qc=max($Qc,$ye,$Ae);}echo"<div class='references' id='refl$ia' style='left: $ia"."em; top: $kc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Qc-$kc)."em;'></div></div>\n";}}}echo'</div>
';}elseif(isset($_GET["dump"])){$h=$_GET["dump"];if($_POST){$_e="";foreach(array("output","format","db_style","table_style","data_style")as$c){$_e.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($_e,1));$kb=$n->dumpHeaders(($h!=""?$h:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$db=($_POST["format"]=="sql");if($db){echo"-- Adminer $_c ".$ya[DRIVER]." dump

".($t!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($i->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$I=$_POST["db_style"];$z=array(DB);if(DB==""){$z=$_POST["databases"];if(is_string($z)){$z=explode("\n",rtrim(str_replace("\r","",$z),"\n"));}}foreach((array)$z
as$w){if($i->select_db($w)){if($db&&ereg('CREATE',$I)&&($ga=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1))){if($I=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($w).";\n";}echo($I=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ga):$ga).";\n";}if($db){if($I){echo
use_sql($w).";\n\n";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Pa="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$_a){foreach(get_rows("SHOW $_a STATUS WHERE Db = ".q($w),null,"-- ")as$a){$Pa.=($I!='DROP+CREATE'?"DROP $_a IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE $_a ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$Pa.=($I!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($Pa){echo"DELIMITER ;;\n\n$Pa"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Ya=array();foreach(table_status()as$a){$m=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$ze=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($m||$ze){if(!is_view($a)){if($kb=="tar"){ob_start();}$n->dumpTable($a["Name"],($m?$_POST["table_style"]:""));if($ze){$n->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($db&&$_POST["triggers"]){$ac=trigger_sql($a["Name"],$_POST["table_style"]);if($ac){echo"\nDELIMITER ;;\n$ac\nDELIMITER ;\n";}}if($kb=="tar"){echo
tar_file((DB!=""?"":"$w/")."$a[Name].csv",ob_get_clean());}elseif($db){echo"\n";}}elseif($db){$Ya[]=$a["Name"];}}}foreach($Ya
as$mc){$n->dumpTable($mc,$_POST["table_style"],true);}if($kb=="tar"){echo
pack("x512");}}if($I=="CREATE+ALTER"&&$db){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
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
			CASE _table_name";foreach(get_rows($j)as$a){$eb=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $eb THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$eb;
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
";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))&&$db){echo"SELECT @adminer_alter;\n";}}}if($db){echo"-- ".$i->result("SELECT NOW()")."\n";}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Yd=array('','USE','DROP+CREATE','CREATE');$yd=array('','DROP+CREATE','CREATE');$td=array('','TRUNCATE+INSERT','INSERT');if($t=="sql"){$Yd[]='CREATE+ALTER';$yd[]='CREATE+ALTER';$td[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}$ra=($_GET["dump"]=="");echo"<tr><th>".'Výstup'."<td>".html_select("output",$n->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Formát'."<td>".html_select("format",$n->dumpFormat(),$a["format"],0)."\n";echo($t=="sqlite"?"":"<tr><th>".'Databáze'."<td>".html_select('db_style',$Yd,$a["db_style"]).(support("routine")?checkbox("routines",1,$ra,'Procedury a funkce'):"").(support("event")?checkbox("events",1,$ra,'Události'):"")),"<tr><th>".'Tabulky'."<td>".html_select('table_style',$yd,$a["table_style"]).checkbox("auto_increment",1,$a["table_style"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["table_style"],'Triggery'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$td,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$Sc=array();if(DB!=""){$ra=($h!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$ra onclick='formCheck(this, /^tables\\[/);'>".'Tabulky'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$ra onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Ya="";foreach(table_status()as$a){$f=$a["Name"];$Sb=ereg_replace("_.*","",$f);$ra=($h==""||$h==(substr($h,-1)=="%"?"$Sb%":$f));$La="<tr><td>".checkbox("tables[]",$f,$ra,$f,"formUncheck('check-tables');");if(is_view($a)){$Ya.="$La\n";}else{echo"$La<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$ra,"","formUncheck('check-data');")."</label>\n";}$Sc[$Sb]++;}echo$Ya;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($h==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Databáze'."</label></thead>\n";$z=get_databases();if($z){foreach($z
as$w){if(!information_schema($w)){$Sb=ereg_replace("_.*","",$w);echo"<tr><td>".checkbox("databases[]",$w,$h==""||$h=="$Sb%",$w,"formUncheck('check-databases');")."</label>\n";$Sc[$Sb]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20' onkeydown='return textareaKeydown(this, event);'></textarea>";}}echo'</table>
</form>
';$Va=true;foreach($Sc
as$c=>$b){if($c!=""&&$b>1){echo($Va?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$Va=false;}}}elseif(isset($_GET["privileges"])){page_header('Oprávnění');$k=$i->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$k){echo'<form action=""><p>
';hidden_fields_get();echo'Uživatel: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Upravit">
</form>
';$k=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Uživatel'."<th>".'Server'."</thead>\n";while($a=$k->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'upravit'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Vytvořit uživatele'."</a>";}elseif(isset($_GET["sql"])){restart_session();$We=&get_session("queries");$Ka=&$We[DB];if(!$q&&$_POST["clear"]){$Ka=array();redirect(remove_from_uri("history"));}page_header('SQL příkaz',$q);if(!$q&&$_POST){$ua=false;$j=$_POST["query"];if($_POST["webfile"]){$ua=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($ua?fread($ua,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6&&(!$Ka||end($Ka)!=$j)){$Ka[]=$j;}$nc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Rc=";";$ma=0;$wd=true;$M=connect();if(is_object($M)&&DB!=""){$M->select_db(DB);}$nb=0;$lc=array();$Le='[\'`"]'.($t=="pgsql"?'|\\$[^$]*\\$':($t=="mssql"||$t=="sqlite"?'|\\[':'')).'|/\\*|-- |#';while($j!=""){if(!$ma&&$t=="sql"&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$l)){$Rc=$l[1];$j=substr($j,strlen($l[0]));}else{preg_match('('.preg_quote($Rc)."|$Le|\$)",$j,$l,PREG_OFFSET_CAPTURE,$ma);$Z=$l[0][0];$ma=$l[0][1]+strlen($Z);if(!$Z&&$ua&&!feof($ua)){$j.=fread($ua,1e5);}else{if(!$Z&&rtrim($j)==""){break;}if($Z&&$Z!=$Rc){while(preg_match('('.($Z=='/*'?'\\*/':($Z=='['?']':(ereg('^-- |^#',$Z)?"\n":preg_quote($Z)."|\\\\."))).'|$)s',$j,$l,PREG_OFFSET_CAPTURE,$ma)){$Q=$l[0][0];$ma=$l[0][1]+strlen($Q);if(!$Q&&$ua&&!feof($ua)){$j.=fread($ua,1e6);}elseif($Q[0]!="\\"){break;}}}else{$wd=false;$W=substr($j,0,$l[0][1]);$nb++;$La="<pre class='jush-$t' id='sql-$nb'>".shorten_utf8(trim($W),1000)."</pre>\n";if(!$_POST["only_errors"]){echo$La;ob_flush();flush();}$Zc=explode(" ",microtime());if(!$i->multi_query($W)){echo($_POST["only_errors"]?$La:""),"<p class='error'>".'Chyba v dotazu'.": ".error()."\n";$lc[]=" <a href='#sql-$nb'>$nb</a>";if($_POST["error_stops"]){break;}}else{if(is_object($M)&&preg_match("~^$nc*(USE)\\b~isU",$W)){$M->query($W);}do{$k=$i->store_result();$Pc=explode(" ",microtime());$od=" <span class='time'>(".sprintf('%.3f s',max(0,$Pc[0]-$Zc[0]+$Pc[1]-$Zc[1])).")</span>".(strlen($W)<1000?" <a href='".h(ME)."sql=".urlencode(trim($W))."'>".'Upravit'."</a>":"");if(!is_object($k)){if(preg_match("~^$nc*(CREATE|DROP|ALTER)$nc+(DATABASE|SCHEMA)\\b~isU",$W)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($i->info)."'>".lang(array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),$i->affected_rows)."$od\n";}}else{if($_POST["only_errors"]){echo$La;$La="";}select($k,$M);echo"<p>".($k->num_rows?lang(array('%d řádek','%d řádky','%d řádků'),$k->num_rows):"").$od;if($M&&preg_match("~^($nc|\\()*SELECT\\b~isU",$W)){$F="explain-$nb";echo", <a href='#$F' onclick=\"return !toggle('$F');\">EXPLAIN</a>\n","<div id='$F' class='hidden'>\n";select(explain($M,$W));echo"</div>\n";}}$Zc=$Pc;}while($i->next_result());}$j=substr($j,$ma);$ma=0;}}}}if($wd){echo"<p class='message'>".'Žádné příkazy k vykonání.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d příkaz proběhl v pořádku.','%d příkazy proběhly v pořádku.','%d příkazů proběhlo v pořádku.'),$nb-count($lc))."\n";}elseif($lc&&$nb>1){echo"<p class='error'>".'Chyba v dotazu'.": ".implode("",$lc)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$W=$_GET["sql"];if($_POST){$W=$_POST["query"];}elseif($_GET["history"]!=""){$W=$Ka[$_GET["history"]];}textarea("query",$W,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Nahrání souboru'.': <input type="file" name="sql_file">':'Nahrávání souborů není povoleno.'),'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Provést" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Zastavit při chybě')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Zobrazit pouze chyby')."\n";print_fieldset("webfile",'Ze serveru',$_POST["webfile"]);$Xc=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$Xc[]=".$c";}}echo
sprintf('Soubor %s na webovém serveru',"<code>adminer.sql".($Xc?"[".implode("|",$Xc)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustit soubor'.'">',"</div></fieldset>\n";if($Ka){print_fieldset("history",'Historie',$_GET["history"]!="");foreach($Ka
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.'Upravit'."</a> <code class='jush-$t'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Vyčistit'."'>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$h=$_GET["edit"];$x=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Da=(isset($_GET["select"])?$_POST["edit"]:$x);$o=fields($h);foreach($o
as$f=>$d){if(!isset($d["privileges"][$Da?"update":"insert"])||$n->fieldName($d)==""){unset($o[$f]);}}if($_POST&&!$q&&!isset($_GET["select"])){$T=$_POST["referer"];if($_POST["insert"]){$T=($Da?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$T)){$T=ME."select=".urlencode($h);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($h)," WHERE $x"),$T,'Položka byla smazána.');}else{$u=array();foreach($o
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$u[idf_escape($f)]=($Da?"\n".idf_escape($f)." = $b":$b);}}if($Da){if(!$u){redirect($T);}query_redirect("UPDATE".limit1(table($h)." SET".implode(",",$u),"\nWHERE $x"),$T,'Položka byla aktualizována.');}else{$k=insert_into($h,$u);$Ld=($k?last_id():0);queries_redirect($T,sprintf('Položka%s byla vložena.',($Ld?" $Ld":"")),$k);}}}$ta=$n->tableName(table_status($h));page_header(($Da?'Upravit':'Vložit'),$q,array("select"=>array($h,$ta)),$ta);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($x){$A=array();foreach($o
as$f=>$d){if(isset($d["privileges"]["select"])){$A[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($A){$D=get_rows("SELECT".limit(implode(", ",$A)." FROM ".table($h)," WHERE $x",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($D)!=1?null:reset($D));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($o){echo"<table cellspacing='0'>\n";foreach($o
as$f=>$d){echo"<tr><th>".$n->fieldName($d);$Ga=$_GET["set"][bracket_escape($f)];$p=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?+$a[$f]:$a[$f]):(!$Da&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Ga)?$Ga:$d["default"]))));if(!$_POST["save"]&&is_string($p)){$p=$n->editVal($p,$d);}$C=($_POST["save"]?(string)$_POST["function"][$f]:($x&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($p===false?null:(isset($p)?'':'NULL'))));if($d["type"]=="timestamp"&&$p=="CURRENT_TIMESTAMP"){$p="";$C="now";}input($d,$p,$C);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($o){echo"<input type='submit' value='".'Uložit'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($Da?'Uložit a pokračovat v editaci':'Uložit a vložit další')."\">\n";}}if($Da){echo"<input type='submit' name='delete' value='".'Smazat'."'".confirm().">\n";}echo'</form>
';}elseif(isset($_GET["create"])){$h=$_GET["create"];$zd=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Md=referencable_primary($h);$K=array();foreach($Md
as$ta=>$d){$K[str_replace("`","``",$ta)."`".str_replace("`","``",$d["field"])]=$ta;}$jc=array();$oc=array();if($h!=""){$jc=fields($h);$oc=table_status($h);}if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($h),substr(ME,0,-1),'Tabulka byla odstraněna.');}else{$o=array();$ic=array();ksort($_POST["fields"]);$Jc=reset($jc);$qb="FIRST";foreach($_POST["fields"]as$c=>$d){$E=$K[$d["type"]];$gc=(isset($E)?$Md[$E]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$Ga=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Ga!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Ga;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Id=process_field($d,$gc);if($Id!=process_field($Jc,$Jc)){$o[]=array($d["orig"],$Id,$qb);}if(isset($E)){$ic[]=($h!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".idf_escape($K[$d["type"]])." (".idf_escape($gc["field"]).")".(in_array($d["on_delete"],$Sa)?" ON DELETE $d[on_delete]":"");}$qb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$o[]=array($d["orig"]);}if($d["orig"]!=""){$Jc=next($jc);}}$Rb="";if(in_array($_POST["partition_by"],$zd)){$Nc=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$p=$_POST["partition_values"][$c];$Nc[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($p!=""?" ($p)":" MAXVALUE");}}$Rb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Nc?" (".implode(",",$Nc)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($h!=""&&support("partitioning")){$Rb.="\nREMOVE PARTITIONING";}$la='Tabulka byla změněna.';if($h==""){cookie("adminer_engine",$_POST["Engine"]);$la='Tabulka byla vytvořena.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$la,alter_table($h,$_POST["name"],$o,$ic,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$oc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$oc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$Rb));}}page_header(($h!=""?'Pozměnit tabulku':'Vytvořit tabulku'),$q,array("table"=>$h),$h);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"")),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($h!=""){$a=$oc;$a["name"]=$h;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($jc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$vb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($h);$k=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $vb ORDER BY PARTITION_ORDINAL_POSITION LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$k->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $vb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Bd){$a["partition_names"][]=$Bd["PARTITION_NAME"];$a["partition_values"][]=$Bd["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$R=collations();$Kc=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Kc&&count($a["fields"])>$Kc){echo"<p class='error'>".h(sprintf('Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$Lc=engines();foreach($Lc
as$Ub){if(!strcasecmp($Ub,$a["Engine"])){$a["Engine"]=$Ub;break;}}echo'
<form action="" method="post" id="form">
<p>
Název tabulky: <input name="name" maxlength="64" value="',h($a["name"]),'">
',($Lc?html_select("Engine",array(""=>"(".'úložiště'.")")+$Lc,$a["Engine"]):""),' ',($R&&!ereg("sqlite|mssql",$t)?html_select("Collation",array(""=>"(".'porovnávání'.")")+$R,$a["Collation"]):""),' <input type="submit" value="Uložit">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$ob=edit_fields($a["fields"],$R,"TABLE",$Kc,$K,$a["Comment"]!="");echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]);?>">
<script type="text/javascript">
document.write('<label><input type="checkbox" onclick="columnShow(this.checked, 5);">Výchozí hodnoty<\/label>');
</script>
<?php echo(support("comment")?checkbox("","",$ob,'Komentář',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($ob?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Uložit">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}if(support("partitioning")){$Cd=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Rozdělit podle',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$zd,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Oddíly: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($Cd||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Cd?"":" class='hidden'"),'>
<thead><tr><th>Název oddílu<th>Hodnoty</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$h=$_GET["indexes"];$uc=array("PRIMARY","UNIQUE","INDEX");$L=table_status($h);if(eregi("MyISAM|M?aria",$L["Engine"])){$uc[]="FULLTEXT";}$_=indexes($h);if($t=="sqlite"){unset($uc[0]);unset($_[""]);}if($_POST&&!$q&&!$_POST["add"]){$ba=array();foreach($_POST["indexes"]as$s){if(in_array($s["type"],$uc)){$v=array();$Bb=array();$u=array();ksort($s["columns"]);foreach($s["columns"]as$c=>$fa){if($fa!=""){$Ia=$s["lengths"][$c];$u[]=idf_escape($fa).($Ia?"(".(+$Ia).")":"");$v[]=$fa;$Bb[]=($Ia?$Ia:null);}}if($v){foreach($_
as$f=>$ib){ksort($ib["columns"]);ksort($ib["lengths"]);if($s["type"]==$ib["type"]&&array_values($ib["columns"])===$v&&(!$ib["lengths"]||array_values($ib["lengths"])===$Bb)){unset($_[$f]);continue
2;}}$ba[]=array($s["type"],"(".implode(", ",$u).")");}}}foreach($_
as$f=>$ib){$ba[]=array($ib["type"],idf_escape($f),"DROP");}if(!$ba){redirect(ME."table=".urlencode($h));}queries_redirect(ME."table=".urlencode($h),'Indexy byly změněny.',alter_indexes($h,$ba));}page_header('Indexy',$q,array("table"=>$h),$h);$o=array_keys(fields($h));$a=array("indexes"=>$_);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$s){if($s["columns"][count($s["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$s=end($a["indexes"]);if($s["type"]||array_filter($s["columns"],'strlen')||array_filter($s["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$s){$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indexu<th>Sloupec (délka)</thead>
';$V=1;foreach($a["indexes"]as$s){echo"<tr><td>".html_select("indexes[$V][type]",array(-1=>"")+$uc,$s["type"],($V==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($s["columns"]);$g=1;foreach($s["columns"]as$fa){echo"<span>".html_select("indexes[$V][columns][$g]",array(-1=>"")+$o,$fa,($g==count($s["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$V][lengths][$g]' size='2' value='".h($s["lengths"][$g])."'> </span>";$g++;}$V++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat další"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$q&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Databáze byla odstraněna.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Databáze byla přejmenována.',rename_database($_POST["name"],$_POST["collation"]));}else{$z=explode("\n",str_replace("\r","",$_POST["name"]));$Kd=true;$ab="";foreach($z
as$w){if(count($z)==1||$w!=""){if(!create_database($w,$_POST["collation"])){$Kd=false;}$ab=$w;}}queries_redirect(ME."db=".urlencode($ab),'Databáze byla vytvořena.',$Kd);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Databáze byla změněna.');}}page_header(DB!=""?'Pozměnit databázi':'Vytvořit databázi',$q,array(),DB);$R=collations();$f=DB;$Nb=null;if($_POST){$f=$_POST["name"];$Nb=$_POST["collation"];}elseif(DB!=""){$Nb=db_collation(DB,$R);}elseif($t=="sql"){foreach(get_vals("SHOW GRANTS")as$P){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$P,$l)&&$l[1]){$f=stripcslashes(idf_unescape("`$l[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40" onkeydown="return textareaKeydown(this, event);">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($R?html_select("collation",array(""=>"(".'porovnávání'.")")+$R,$Nb):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="hidden" name="token" value="<?php echo$B,'">
<input type="submit" value="Uložit">
';if(DB!=""){echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.1.0' alt='+' title='".'Přidat další'."'>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Ba=$_GET["call"];page_header('Zavolat'.": ".h($Ba),$q);$_a=routine($Ba,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$rb=array();$Pa=array();foreach($_a["fields"]as$g=>$d){if(substr($d["inout"],-3)=="OUT"){$Pa[$g]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$rb[]=$g;}}if(!$q&&$_POST){$Fd=array();foreach($_a["fields"]as$c=>$d){if(in_array($c,$rb)){$b=process_input($d);if($b===false){$b="''";}if(isset($Pa[$c])){$i->query("SET @".idf_escape($d["field"])." = $b");}}$Fd[]=(isset($Pa[$c])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Ba)."(".implode(", ",$Fd).")";echo"<p><code class='jush-$t'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upravit'."</a>\n";if(!$i->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$k=$i->store_result();if(is_object($k)){select($k);}else{echo"<p class='message'>".lang(array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),$i->affected_rows)."\n";}}while($i->next_result());if($Pa){select($i->query("SELECT ".implode(", ",$Pa)));}}}echo'
<form action="" method="post">
';if($rb){echo"<table cellspacing='0'>\n";foreach($rb
as$c){$d=$_a["fields"][$c];$f=$d["field"];echo"<tr><th>".$n->fieldName($d);$p=$_POST["fields"][$f];if($p!=""){if($d["type"]=="enum"){$p=+$p;}if($d["type"]=="set"){$p=array_sum($p);}}input($d,$p,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Zavolat">
</form>
';}elseif(isset($_GET["foreign"])){$h=$_GET["foreign"];if($_POST&&!$q&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($h)."\nDROP ".($t=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($h),'Cizí klíč byl odstraněn.');}else{$sa=array_filter($_POST["source"],'strlen');ksort($sa);$Ja=array();foreach($sa
as$c=>$b){$Ja[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($h).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$sa)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$Ja)).")".(in_array($_POST["on_delete"],$Sa)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$Sa)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($h),($_GET["name"]!=""?'Cizí klíč byl změněn.':'Cizí klíč byl vytvořen.'));$q='Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.'."<br>$q";}}page_header('Cizí klíč',$q,array("table"=>$h),$h);$a=array("table"=>$h,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$K=foreign_keys($h);$a=$K[$_GET["name"]];$a["source"][]="";}$sa=array_keys(fields($h));$Ja=($h===$a["table"]?$sa:array_keys(fields($a["table"])));$Gd=array();foreach(table_status()as$f=>$L){if(fk_support($L)){$Gd[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo'Cílová tabulka:
',html_select("table",$Gd,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Změnit"></noscript>
<table cellspacing="0">
<thead><tr><th>Zdroj<th>Cíl</thead>
';$V=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".(+$c)."]",array(-1=>"")+$sa,$b,($V==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$c)."]",$Ja,$a["target"][$c]);$V++;}echo'</table>
<p>
Při smazání: ',html_select("on_delete",array(-1=>"")+$Sa,$a["on_delete"]),' Při změně: ',html_select("on_update",array(-1=>"")+$Sa,$a["on_update"]),'<p>
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat sloupec"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$B,'">
</form>
';}elseif(isset($_GET["view"])){$h=$_GET["view"];$Fa=false;if($_POST&&!$q){$Fa=drop_create("DROP VIEW ".table($h),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.',$h);}page_header(($h!=""?'Pozměnit pohled':'Vytvořit pohled'),$q,array("table"=>$h),$h);$a=array();if($_POST){$a=$_POST;}elseif($h!=""){$a=view($h);$a["name"]=$h;}echo'
<form action="" method="post">
<p>Název: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
';if($Fa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
</form>
';}elseif(isset($_GET["event"])){$Ua=$_GET["event"];$_d=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$dd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$q){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Ua),substr(ME,0,-1),'Událost byla odstraněna.');}elseif(in_array($_POST["INTERVAL_FIELD"],$_d)&&isset($dd[$_POST["STATUS"]])){$Hd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($Ua!=""?"ALTER EVENT ".idf_escape($Ua).$Hd.($Ua!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Hd)."\n".$dd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($Ua!=""?'Událost byla změněna.':'Událost byla vytvořena.'));}}page_header(($Ua!=""?'Pozměnit událost'.": ".h($Ua):'Vytvořit událost'),$q);$a=array();if($_POST){$a=$_POST;}elseif($Ua!=""){$D=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($Ua));$a=reset($D);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Název<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Začátek<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Konec<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Každých<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$_d,$a["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$dd,$a["STATUS"]),'<tr><th>Komentář<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Po dokončení zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Uložit">
';if($Ua!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Ba=$_GET["procedure"];$_a=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Fa=false;if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$u=array();$o=(array)$_POST["fields"];ksort($o);foreach($o
as$d){if($d["field"]!=""){$u[]=(in_array($d["inout"],$Vb)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Fa=drop_create("DROP $_a ".idf_escape($Ba),"CREATE $_a ".idf_escape($_POST["name"])." (".implode(", ",$u).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),'Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.',$Ba);}page_header(($Ba!=""?(isset($_GET["function"])?'Změnit funkci':'Změnit proceduru').": ".h($Ba):(isset($_GET["function"])?'Vytvořit funkci':'Vytvořit proceduru')),$q);$R=get_vals("SHOW CHARACTER SET");sort($R);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Ba!=""){$a=routine($Ba,$_a);$a["name"]=$Ba;}echo'
<form action="" method="post" id="form">
<p>Název: <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$R,$_a);if(isset($_GET["function"])){echo"<tr><td>".'Návratový typ';edit_type("returns",$a["returns"],$R);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
';if($Fa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
';if($Ba!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["type"])){$tc=$_GET["type"];if($_POST&&!$q){$y=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($tc),$y,'Typ byl odstraněn.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$y,'Typ byl vytvořen.');}}page_header($tc!=""?'Pozměnit typ'.": ".h($tc):'Vytvořit typ',$q);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$B,'">
';if($tc!=""){echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Uložit'."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$h=$_GET["trigger"];$qc=trigger_options();$Qd=array("INSERT","UPDATE","DELETE");$Fa=false;if($_POST&&!$q&&in_array($_POST["Timing"],$qc["Timing"])&&in_array($_POST["Event"],$Qd)&&in_array($_POST["Type"],$qc["Type"])){$Rd=" $_POST[Timing] $_POST[Event]";$hb=" ON ".table($h);$Fa=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($t=="pgsql"?$hb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($t=="mssql"?$hb.$Rd:$Rd.$hb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($h),'Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Změnit trigger'.": ".h($_GET["name"]):'Vytvořit trigger'),$q,array("table"=>$h));$a=array("Trigger"=>$h."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Čas<td>',html_select("Timing",$qc["Timing"],$a["Timing"],"if (/^".h(preg_quote($h,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(js_escape($h))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Událost<td>',html_select("Event",$Qd,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$qc["Type"],$a["Type"]),'</table>
<p>Název: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
';if($Fa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["user"])){$cd=$_GET["user"];$Y=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$wc){$Y[$wc][$a["Privilege"]]=$a["Comment"];}}$Y["Server Admin"]+=$Y["File access on server"];$Y["Databases"]["Create routine"]=$Y["Procedures"]["Create routine"];unset($Y["Procedures"]["Create routine"]);$Y["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$Y["Columns"][$b]=$Y["Tables"][$b];}unset($Y["Server Admin"]["Usage"]);foreach($Y["Tables"]as$c=>$b){unset($Y["Databases"][$c]);}$Ib=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$Ib[$b]=(array)$Ib[$b]+(array)$_POST["grants"][$c];}}$Ta=array();$fc="";if(isset($_GET["host"])&&($k=$i->query("SHOW GRANTS FOR ".q($cd)."@".q($_GET["host"])))){while($a=$k->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$l)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$l[1],$ea,PREG_SET_ORDER)){foreach($ea
as$b){if($b[1]!="USAGE"){$Ta["$l[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Ta["$l[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$l)){$fc=$l[1];}}}if($_POST&&!$q){$Cb=(isset($_GET["host"])?q($cd)."@".q($_GET["host"]):"''");$Ra=q($_POST["user"])."@".q($_POST["host"]);$Oc=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Cb",ME."privileges=",'Uživatel byl odstraněn.');}else{if($Cb!=$Ra){$q=!queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ra IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Oc");}elseif($_POST["pass"]!=$fc||!$_POST["hashed"]){queries("SET PASSWORD FOR $Ra = ".($_POST["hashed"]?$Oc:"PASSWORD($Oc)"));}if(!$q){$Tb=array();foreach($Ib
as$Ea=>$P){if(isset($_GET["grant"])){$P=array_filter($P);}$P=array_keys($P);if(isset($_GET["grant"])){$Tb=array_diff(array_keys(array_filter($Ib[$Ea],'strlen')),$P);}elseif($Cb==$Ra){$sd=array_keys((array)$Ta[$Ea]);$Tb=array_diff($sd,$P);$P=array_diff($P,$sd);unset($Ta[$Ea]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ea,$l)&&(!grant("REVOKE",$Tb,$l[2]," ON $l[1] FROM $Ra")||!grant("GRANT",$P,$l[2]," ON $l[1] TO $Ra"))){$q=true;break;}}}if(!$q&&isset($_GET["host"])){if($Cb!=$Ra){queries("DROP USER $Cb");}elseif(!isset($_GET["grant"])){foreach($Ta
as$Ea=>$Tb){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ea,$l)){grant("REVOKE",array_keys($Tb),$l[2]," ON $l[1] FROM $Ra");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Uživatel byl změněn.':'Uživatel byl vytvořen.'),!$q);if($Cb!=$Ra){$i->query("DROP USER $Ra");}}}page_header((isset($_GET["host"])?'Uživatel'.": ".h("$cd@$_GET[host]"):'Vytvořit uživatele'),$q,array("privileges"=>array('','Oprávnění')));if($_POST){$a=$_POST;$Ta=$Ib;}else{$a=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$fc;if($fc!=""){$a["hashed"]=true;}$Ta[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Uživatel<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Heslo<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Zahašované',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html'>".'Oprávnění'."</a>";$g=0;foreach($Ta
as$Ea=>$P){echo'<th>'.($Ea!="*.*"?"<input name='objects[$g]' value='".h($Ea)."' size='10'>":"<input type='hidden' name='objects[$g]' value='*.*' size='10'>*.*");$g++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Databáze',"Tables"=>'Tabulka',"Columns"=>'Sloupec',"Procedures"=>'Procedura',)as$wc=>$Lb){foreach((array)$Y[$wc]as$Ob=>$eb){echo"<tr".odd()."><td".($Lb?">$Lb<td":" colspan='2'").' lang="en" title="'.h($eb).'">'.h($Ob);$g=0;foreach($Ta
as$Ea=>$P){$f="'grants[$g][".h(strtoupper($Ob))."]'";$p=$P[strtoupper($Ob)];if($wc=="Server Admin"&&$Ea!=(isset($Ta["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($p?" selected":"").">".'Povolit'."<option value='0'".($p=="0"?" selected":"").">".'Zakázat'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($p?" checked":"").($Ob=="All privileges"?" id='grants-$g-all'":($Ob=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$g-all');\"")).">";}$g++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Uložit">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$q){$jd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$jd++;}}queries_redirect(ME."processlist=",lang(array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),$jd),$jd||!$_POST["kill"]);}page_header('Seznam procesů',$q);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';foreach(get_rows("SHOW FULL PROCESSLIST")as$g=>$a){if(!$g){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0);foreach($a
as$c=>$b){echo"<td>".($c=="Info"&&$b!=""?"<code class='jush-$t'>".nbsp($b).'</code> <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Upravit'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Ukončit">
</form>
';}elseif(isset($_GET["select"])){$h=$_GET["select"];$L=table_status($h);$_=indexes($h);$o=fields($h);$K=column_foreign_keys($h);$ud=array();$v=array();$jb=null;foreach($o
as$c=>$d){$f=$n->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$v[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$jb=$n->selectLengthProcess();}}$ud+=$d["privileges"];}list($A,$ca)=$n->selectColumnsProcess($v,$_);$x=$n->selectSearchProcess($o,$_);$Xa=$n->selectOrderProcess($o,$_);$S=$n->selectLimitProcess();$vb=($A?implode(", ",$A):"*")."\nFROM ".table($h);$fd=($ca&&count($ca)<count($A)?"\nGROUP BY ".implode(", ",$ca):"").($Xa?"\nORDER BY ".implode(", ",$Xa):"");if($_POST&&!$q){$pd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ec=$zc=null;foreach($_
as$s){if($s["type"]=="PRIMARY"){$Ec=array_flip($s["columns"]);$zc=($A?$Ec:array());break;}}foreach($A
as$c=>$b){$b=$_GET["columns"][$c];if(!$b["fun"]){unset($zc[$b["col"]]);}}if($_POST["export"]){$n->dumpHeaders($h);$n->dumpTable($h,"");if(ereg("[ct]sv",$_POST["format"])){$a=array_keys($o);if($A){$a=array();foreach($A
as$b){$a[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($a);}if(!is_array($_POST["check"])||$zc===array()){$md=$x;if(is_array($_POST["check"])){$md[]="($pd)";}$n->dumpData($h,"INSERT","SELECT $vb".($md?"\nWHERE ".implode(" AND ",$md):"").$fd);}else{$nd=array();foreach($_POST["check"]as$b){$nd[]="(SELECT".limit($vb,"\nWHERE ".($x?implode(" AND ",$x)." AND ":"").where_check($b).$fd,1).")";}$n->dumpData($h,"INSERT",implode(" UNION ALL ",$nd));}exit;}if(!$n->selectEmailProcess($x,$K)){if($_POST["save"]||$_POST["delete"]){$k=true;$bb=0;$j=table($h);$u=array();if(!$_POST["delete"]){foreach($v
as$f=>$b){$b=process_input($o[$f]);if($b!==null){if($_POST["clone"]){$u[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$u[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($u)).")\nSELECT ".implode(", ",$u)."\nFROM ".table($h):" SET\n".implode(",\n",$u));}if($_POST["delete"]||$u){$Cc="UPDATE";if($_POST["delete"]){$Cc="DELETE";$j="FROM $j";}if($_POST["clone"]){$Cc="INSERT";$j="INTO $j";}if($_POST["all"]||($zc===array()&&$_POST["check"])||count($ca)<count($A)){$k=queries($Cc." $j".($_POST["all"]?($x?"\nWHERE ".implode(" AND ",$x):""):"\nWHERE $pd"));$bb=$i->affected_rows;}else{foreach((array)$_POST["check"]as$b){$k=queries($Cc.limit1($j,"\nWHERE ".where_check($b)));if(!$k){break;}$bb+=$i->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$bb),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$q='Dvojklikněte na políčko, které chcete změnit.';}else{$k=true;$bb=0;foreach($_POST["val"]as$cb=>$a){$u=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$u[]=idf_escape($c)." = ".(ereg('char|text',$o[$c]["type"])||$b!=""?$n->processInput($o[$c],$b):"NULL");}$k=queries("UPDATE".limit1(table($h)." SET ".implode(", ",$u)," WHERE ".where_check($cb).($x?" AND ".implode(" AND ",$x):"")));if(!$k){break;}$bb+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$bb),$k);}}elseif(is_string($aa=get_file("csv_file",true))){$aa=preg_replace("~^\xEF\xBB\xBF~",'',$aa);$k=true;$Qa=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$aa,$ea);$bb=count($ea[0]);begin();$Xb=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ea[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Xb]*)$Xb~",$b.$Xb,$id);if(!$c&&!array_diff($id[1],$Qa)){$Qa=$id[1];$bb--;}else{$u=array();foreach($id[1]as$g=>$vc){$u[idf_escape($Qa[$g])]=($vc==""&&$o[$Qa[$g]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$vc))));}$k=insert_update($h,$u,$Ec);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),$bb),$k);queries("ROLLBACK");}else{$q=upload_error($aa);}}}$ta=$n->tableName($L);page_header('Vypsat'.": $ta",$q);session_write_close();$u=null;if(isset($ud["insert"])){$u="";foreach((array)$_GET["where"]as$b){if(count($K[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$u.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$n->selectLinks($L,$u);if(!$v){echo"<p class='error'>".'Nepodařilo se vypsat tabulku'.($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($h).'">',"</div>\n";$n->selectColumnsPrint($A,$v);$n->selectSearchPrint($x,$v,$_);$n->selectOrderPrint($Xa,$v,$_);$n->selectLimitPrint($S);$n->selectLengthPrint($jb);$n->selectActionPrint($jb);echo"</form>\n";$H=$_GET["page"];if($H=="last"){$za=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));$H=floor(max(0,$za-1)/$S);}$j="SELECT".limit((+$S&&$ca&&count($ca)<count($A)&&$t=="sql"?"SQL_CALC_FOUND_ROWS ":"").$vb,($x?"\nWHERE ".implode(" AND ",$x):"").$fd,($S!=""?+$S:null),($H?$S*$H:0),"\n");echo$n->selectQuery($j);$k=$i->query($j);if(!$k){echo"<p class='error'>".error()."\n";}else{if($t=="mssql"){$k->seek($S*$H);}$Bc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$D=array();while($a=$k->fetch_assoc()){$D[]=$a;}if($_GET["page"]!="last"){$za=(+$S&&$ca&&count($ca)<count($A)?($t=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($j) x")):count($D));}if(!$D){echo"<p class='message'>".'Žádné řádky.'."\n";}else{$Dd=$n->backwardKeys($h,$ta);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$ca&&$A?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upravit'."</a>");$kd=array();$X=array();reset($A);$Ed=1;foreach($D[0]as$c=>$b){$b=$_GET["columns"][key($A)];$d=$o[$A?$b["col"]:$c];$f=($d?$n->fieldName($d,$Ed):"*");if($f!=""){$Ed++;$kd[$c]=$f;$fa=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($Xa[0]==$fa||$Xa[0]==$c||(!$Xa&&$ca[0]==$fa)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$X[$c]=$b["fun"];next($A);}$Bb=array();if($_GET["modify"]){foreach($D
as$a){foreach($a
as$c=>$b){$Bb[$c]=max($Bb[$c],min(40,strlen(utf8_decode($b))));}}}echo($Dd?"<th>".'Vztahy':"")."</thead>\n";foreach($n->rowDescriptions($D,$K)as$N=>$a){$Yc=unique_array($D[$N],$_);$cb="";foreach($Yc
as$c=>$b){$cb.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$ca&&$A?"":"<td>".checkbox("check[]",substr($cb,1),in_array(substr($cb,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ca)<count($A)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($h).$cb)."'>".'upravit'."</a>"));foreach($a
as$c=>$b){if(isset($kd[$c])){$d=$o[$c];if($b!=""&&(!isset($Bc[$c])||$Bc[$c]!="")){$Bc[$c]=(is_mail($b)?$kd[$c]:"");}$y="";$b=$n->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$y=h(ME.'download='.urlencode($h).'&field='.urlencode($c).$cb);}if($b==""){$b="&nbsp;";}elseif($jb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$jb));}else{$b=h($b);}if(!$y){foreach((array)$K[$c]as$E){if(count($K[$c])==1||end($E["source"])==$c){$y="";foreach($E["source"]as$g=>$sa){$y.=where_link($g,$E["target"][$g],$D[$N][$sa]);}$y=h(($E["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($E["db"]),ME):ME).'select='.urlencode($E["table"]).$y);if(count($E["source"])==1){break;}}}}if($c=="COUNT(*)"){$y=h(ME."select=".urlencode($h));$g=0;foreach((array)$_GET["where"]as$r){if(!array_key_exists($r["col"],$Yc)){$y.=h(where_link($g++,$r["col"],$r["val"],$r["op"]));}}foreach($Yc
as$wa=>$r){$y.=h(where_link($g++,$wa,$r,(isset($r)?"=":"IS NULL")));}}}if(!$y){if(is_mail($b)){$y="mailto:$b";}if($Fb=is_url($a[$c])){$y=($Fb=="http"&&$ub?$a[$c]:"$Fb://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$F=h("val[$cb][".bracket_escape($c)."]");$p=$_POST["val"][$cb][bracket_escape($c)];$Ad=h(isset($p)?$p:$a[$c]);$Pd=strpos($b,"<i>...</i>");$Nd=is_utf8($b)&&!$Pd&&$D[$N][$c]==$a[$c]&&!$X[$c];$Jd=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$Nd)||isset($p)?"<td>".($Jd?"<textarea name='$F' cols='30' rows='".(substr_count($a[$c],"\n")+1)."' onkeydown='return textareaKeydown(this, event);'>$Ad</textarea>":"<input name='$F' value='$Ad' size='$Bb[$c]'>"):"<td id='$F' ondblclick=\"".($Nd?"selectDblClick(this, event".($Jd?", 1":"").")":"alert('".h($Pd?'Ke změně této hodnoty zvyšte Délku textů.':'Ke změně této hodnoty použijte odkaz upravit.')."')").";\">".$n->selectVal($b,$y,$d));}}$n->backwardKeysPrint($Dd,$D[$N]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Wc);if($D||$H){$Vc=true;if($_GET["page"]!="last"&&+$S&&count($ca)>=count($A)&&($za>=$S||$H)){$za=$L["Rows"];if(!isset($za)||$x||2*$H*$S>$za||($L["Engine"]=="InnoDB"&&$za<1e4)){ob_flush();flush();$za=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));}else{$Vc=false;}}echo"<p class='pages'>";if(+$S&&$za>$S){$Uc=floor(($za-1)/$S);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".'Stránka'."', '".($H+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".'Stránka'."</a>:".pagination(0,$H).($H>5?" ...":"");for($g=max(1,$H-4);$g<min($Uc,$H+5);$g++){echo
pagination($g,$H);}echo($H+5<$Uc?" ...":"").($Vc?pagination($Uc,$H):' <a href="'.h(remove_from_uri()."&page=last").'">'.'poslední'."</a>");}echo" (".($Vc?"":"~ ").lang(array('%d řádek','%d řádky','%d řádků'),$za).") ".checkbox("all",1,0,'celý výsledek')."\n";if(!information_schema(DB)){echo'<fieldset><legend>Upravit</legend><div>
<input type="submit" value="Uložit" title="Dvojklikněte na políčko, které chcete změnit.">
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat"',confirm("(this.form['all'].checked ? $za : formChecked(this, /check/))"),'>
</div></fieldset>
';}print_fieldset("export",'Export');$Na=$n->dumpOutput();echo($Na?html_select("output",$Na,$Wc["output"])." ":"").html_select("format",$n->dumpFormat(),$Wc["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}print_fieldset("import",'Import CSV',!$D);echo"<input type='hidden' name='token' value='$B'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Wc["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>\n","</div></fieldset>\n";$n->selectEmailPrint(array_filter($Bc,'strlen'),$v);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$_b=isset($_GET["status"]);page_header($_b?'Stav':'Proměnné');$qd=($_b?show_status():show_variables());if(!$qd){echo"<p class='message'>".'Žádné řádky.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($qd
as$c=>$b){echo"<tr>","<th><code class='jush-".$t.($_b?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["token"]!=$B){exit;}if($_GET["script"]=="db"){$Dc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$F=js_escape($a["Name"]);echo"setHtml('Comment-$F', '".js_escape(nbsp($a["Comment"]))."');\n";if(!is_view($a)){foreach(array("Engine","Collation")as$c){echo"setHtml('$c-$F', '".js_escape(nbsp($a[$c]))."');\n";}foreach($Dc+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($a[$c]!=""){$b=number_format($a[$c],0,'.',' ');echo"setHtml('$c-$F', '".($c=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b)."');\n";if(isset($Dc[$c])){$Dc[$c]+=($a["Engine"]!="InnoDB"||$c!="Data_free"?$a[$c]:0);}}elseif(array_key_exists($c,$a)){echo"setHtml('$c-$F');\n";}}}}foreach($Dc
as$c=>$b){echo"setHtml('sum-$c', '".number_format($b,0,'.',' ')."');\n";}}else{foreach(count_tables(get_databases())as$w=>$b){echo"setHtml('tables-".js_escape($w)."', '$b');\n";}}exit;}else{$rd=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($rd&&!$q&&!$_POST["search"]){$k=true;$la="";if($t=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$k=truncate_tables($_POST["tables"]);}$la='Tabulky byly vyprázdněny.';}elseif($_POST["move"]){$k=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$la='Tabulky byly přesunuty.';}elseif($_POST["drop"]){if($_POST["views"]){$k=drop_views($_POST["views"]);}if($k&&$_POST["tables"]){$k=drop_tables($_POST["tables"]);}$la='Tabulky byly odstraněny.';}elseif($_POST["tables"]&&($k=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$k->fetch_assoc()){$la.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$la,$k);}page_header(($_GET["ns"]==""?'Databáze'.": ".h(DB):'Schéma'.": ".h($_GET["ns"])),$q,true);echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Pozměnit databázi'."</a>\n":"");if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.'Schéma databáze'."</a>\n","<h3>".'Tabulky a pohledy'."</h3>\n";$Hc=tables_list();if(!$Hc){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Vyhledat'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabulka'.'<td>'.'Úložiště'.'<td>'.'Porovnávání'.'<td>'.'Velikost dat'.'<td>'.'Velikost indexů'.'<td>'.'Volné místo'.'<td>'.'Auto Increment'.'<td>'.'Řádků'.(support("comment")?'<td>'.'Komentář':'')."</thead>\n";foreach($Hc
as$f=>$O){$mc=(isset($O)&&!eregi("table",$O));echo'<tr'.odd().'><td>'.checkbox(($mc?"views[]":"tables[]"),$f,in_array($f,$rd,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($mc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'Pohled'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{echo"<td id='Engine-".h($f)."'>&nbsp;<td id='Collation-".h($f)."'>&nbsp;";foreach(array("Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$y){echo"<td align='right'><a href='".h(ME."$y=").urlencode($f)."' id='$c-".h($f)."'>?</a>";}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkem',count($Hc)),"<td>".nbsp($i->result("SELECT @@storage_engine")),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$B'>".($t=="sql"?"<input type='submit' value='".'Analyzovat'."'> <input type='submit' name='optimize' value='".'Optimalizovat'."'> <input type='submit' name='check' value='".'Zkontrolovat'."'> <input type='submit' name='repair' value='".'Opravit'."'> ":"")."<input type='submit' name='truncate' value='".'Vyprázdnit'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Odstranit'."'".confirm("formChecked(this, /tables|views/)").">\n";$z=(support("scheme")?schemas():get_databases());if(count($z)!=1&&$t!="sqlite"){$w=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Přesunout do jiné databáze'.($z?": ".html_select("target",$z,$w):': <input name="target" value="'.h($w).'">')." <input type='submit' name='move' value='".'Přesunout'."'>\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Vytvořit tabulku'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Vytvořit pohled'."</a>\n";}if(support("routine")){echo"<h3>".'Procedury a funkce'."</h3>\n";$vd=routines();if($vd){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Název'.'<td>'.'Typ'.'<td>'.'Návratový typ'."<td>&nbsp;</thead>\n";odd('');foreach($vd
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Změnit'."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.'Vytvořit proceduru'.'</a> <a href="'.h(ME).'function=">'.'Vytvořit funkci'."</a>\n";}if(support("type")){echo"<h3>".'Uživatelské typy'."</h3>\n";$oa=types();if($oa){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Název'."</thead>\n";odd('');foreach($oa
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Vytvořit typ'."</a>\n";}if(support("event")){echo"<h3>".'Události'."</h3>\n";$D=get_rows("SHOW EVENTS");if($D){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Název'."<td>".'Plán'."<td>".'Začátek'."<td>".'Konec'."</thead>\n";foreach($D
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'V daný čas'."<td>".$a["Execute at"]:'Každých'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Vytvořit událost'."</a>\n";}if($Hc){page_footer();echo"<script type='text/javascript' src='".h(ME."script=db&token=$B")."'></script>\n";exit;}}}page_footer();