<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.2
*/error_reporting(6135);$Nc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($Nc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$Ae=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($Ae){$$b=$Ae;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
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
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxState=0;function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.2');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.2" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};replaceFavicon(originalFavicon);if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
var jushRoot=location.protocol + '//www.adminer.org/static/';function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}
if(jushRoot){var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
function loginDriver(driver){var trs=driver.parentNode.parentNode.parentNode.rows;for(var i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
function textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var start=target.selectionStart;var scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.keyCode==27){var els=target.form.elements;for(var i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}
return false;}}
return true;}
var added='.',rowCount;function delimiterEqual(val,a,b){return(val==a+'_'+b||val==a+b||val==a+b.charAt(0).toUpperCase()+b.substr(1));}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var candidate;var val=field.value;for(var i=opts.length;i--;){var match=/(.+)`(.+)/.exec(opts[i].value);if(!match){if(candidate&&i==opts.length-2&&val==opts[candidate].value.replace(/.+`/,'')&&name=='fields[1]'){return;}
break;}
var table=match[1];var column=match[2];var tables=[table,table.replace(/s$/,''),table.replace(/es$/,'')];for(var j=0;j<tables.length;j++){table=tables[j];if(val==column||val==table||delimiterEqual(val,table,column)||delimiterEqual(val,column,table)){if(candidate){return;}
candidate=i;break;}}}
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
function indexesAddRow(field){field.onchange=function(){};var parent=field.parentNode.parentNode;var row=parent.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');for(var i=0;i<inputs.length;i++){inputs[i].name=inputs[i].name.replace(/indexes\[\d+/,'$&1');inputs[i].value='';}
parent.parentNode.appendChild(row);}
function indexesChangeColumn(field,prefix){var columns=field.parentNode.parentNode.getElementsByTagName('select');var names=[];for(var i=0;i<columns.length;i++){var value=selectValue(columns[i]);if(value){names.push(value);}}
field.form[field.name.replace(/\].*/,'][name]')].value=prefix+names.join('_');}
function indexesAddColumn(field,prefix){field.onchange=function(){indexesChangeColumn(field,prefix);};var select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;select.onchange();}
var column=field.parentNode.cloneNode(true);select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange();}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-\d+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev,db){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
s=encodeURIComponent(s.substr(1));var link=document.getElementById('schema-link');link.href=link.href.replace(/[^=]+$/,'')+s;cookie('adminer_schema-'+db+'='+s,30);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$i;return$i;}function
idf_unescape($Da){$Xa=substr($Da,-1);return
str_replace($Xa.$Xa,$Xa,substr($Da,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($db,$Nc=false){if(get_magic_quotes_gpc()){while(list($c,$b)=each($db)){foreach($b
as$Aa=>$t){unset($db[$c][$Aa]);if(is_array($t)){$db[$c][stripslashes($Aa)]=$t;$db[]=&$db[$c][stripslashes($Aa)];}else{$db[$c][stripslashes($Aa)]=($Nc?$t:stripslashes($t));}}}}}function
bracket_escape($Da,$sf=false){static$Ne=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Da,($sf?array_flip($Ne):$Ne));}function
h($V){return
htmlspecialchars(str_replace("\0","",$V),ENT_QUOTES);}function
nbsp($V){return(trim($V)!=""?h($V):"&nbsp;");}function
nl_br($V){return
str_replace("\n","<br>",$V);}function
checkbox($f,$o,$Oa,$Bd="",$Hc="",$xf=false){static$E=0;$E++;$e="<input type='checkbox' name='$f' value='".h($o)."'".($Oa?" checked":"").($Hc?' onclick="'.h($Hc).'"':'').($xf?" class='jsonly'":"")." id='checkbox-$E'>";return($Bd!=""?"<label for='checkbox-$E'>$e".h($Bd)."</label>":$e);}function
optionlist($Mc,$tf=null,$Le=false){$e="";foreach($Mc
as$Aa=>$t){$ye=array($Aa=>$t);if(is_array($t)){$e.='<optgroup label="'.h($Aa).'">';$ye=$t;}foreach($ye
as$c=>$b){$e.='<option'.($Le||is_string($c)?' value="'.h($c).'"':'').(($Le||is_string($c)?(string)$c:$b)===$tf?' selected':'').'>'.h($b);}if(is_array($t)){$e.='</optgroup>';}}return$e;}function
html_select($f,$Mc,$o="",$pb=true){if($pb){return"<select name='".h($f)."'".(is_string($pb)?' onchange="'.h($pb).'"':"").">".optionlist($Mc,$o)."</select>";}$e="";foreach($Mc
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$o?" checked":"").">".h($b)."</label>";}return$e;}function
confirm($Pc="",$Pe=false){return" onclick=\"".($Pe?"eventStop(event); ":"")."return confirm('".'Opravdu?'.($Pc?" (' + $Pc + ')":"")."');\"";}function
print_fieldset($E,$kf,$yf=false,$Hc=""){echo"<fieldset><legend><a href='#fieldset-$E' onclick=\"".h($Hc)."return !toggle('fieldset-$E');\">$kf</a></legend><div id='fieldset-$E'".($yf?"":" class='hidden'").">\n";}function
bold($bf){return($bf?" class='active'":"");}function
odd($e=' class="odd"'){static$g=0;if(!$e){$g=-1;}return($g++%
2?$e:'');}function
js_escape($V){return
addcslashes($V,"\r\n'\\/");}function
json_row($c,$b=null){static$ja=true;if($ja){echo"{";}if($c!=""){echo($ja?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$ja=false;}else{echo"\n}\n";$ja=true;}}function
ini_bool($ef){$b=ini_get($ef);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$e;if(!isset($e)){$e=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$e;}function
q($V){global$i;return$i->quote($V);}function
get_vals($j,$fa=0){global$i;$e=array();$k=$i->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[]=$a[$fa];}}return$e;}function
get_key_vals($j,$H=null){global$i;if(!is_object($H)){$H=$i;}$e=array();$k=$H->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[$a[0]]=$a[1];}}return$e;}function
get_rows($j,$H=null,$q="<p class='error'>"){global$i;if(!is_object($H)){$H=$i;}$e=array();$k=$H->query($j);if(is_object($k)){while($a=$k->fetch_assoc()){$e[]=$a;}}elseif(!$k&&$i->error&&$q&&defined("PAGE_HEADER")){echo$q.error()."\n";}return$e;}function
unique_array($a,$_){foreach($_
as$s){if(ereg("PRIMARY|UNIQUE",$s["type"])){$e=array();foreach($s["columns"]as$c){if(!isset($a[$c])){continue
2;}$e[$c]=$a[$c];}return$e;}}$e=array();foreach($a
as$c=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$e[$c]=$b;}}return$e;}function
where($x){global$r;$e=array();foreach((array)$x["where"]as$c=>$b){$e[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$b)||$r=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_\\")):" = ".exact_value($b));}foreach((array)$x["null"]as$c){$e[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$de);remove_slashes(array(&$de));return
where($de);}function
where_link($g,$fa,$o,$Ue="="){return"&where%5B$g%5D%5Bcol%5D=".urlencode($fa)."&where%5B$g%5D%5Bop%5D=".urlencode((isset($o)?$Ue:"IS NULL"))."&where%5B$g%5D%5Bval%5D=".urlencode($o);}function
cookie($f,$o){global$Vb;$dc=array($f,(ereg("\n",$o)?"":$o),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Vb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$dc[]=true;}return
call_user_func_array('setcookie',$dc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($ob,$J,$aa){global$ta;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ta))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($ob!="server"||$J!=""?urlencode($ob)."=".urlencode($J)."&":"")."username=".urlencode($aa).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($P,$ia=null){if(isset($ia)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($P)?$P:$_SERVER["REQUEST_URI"]))][]=$ia;}if(isset($P)){if($P==""){$P=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $P");exit;}}function
query_redirect($j,$P,$ia,$tc=true,$Te=true,$Ad=false){global$i,$q,$n;if($Te){$Ad=!$i->query($j);}$ud="";if($j){$ud=$n->messageQuery("$j;");}if($Ad){$q=error().$ud;return
false;}if($tc){redirect($P,$ia.$ud);}return
true;}function
queries($j=null){global$i;static$Fd=array();if(!isset($j)){return
implode(";\n",$Fd);}$Fd[]=(ereg(';$',$j)?"DELIMITER ;;\n$j;\nDELIMITER ":$j);return$i->query($j);}function
apply_queries($j,$qa,$Ye='table'){foreach($qa
as$l){if(!queries("$j ".$Ye($l))){return
false;}}return
true;}function
queries_redirect($P,$ia,$tc){return
query_redirect(queries(),$P,$ia,$tc,false,!$tc);}function
remove_from_uri($Ja=""){return
substr(preg_replace("~(?<=[?&])($Ja".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($K,$Qe){return" ".($K==$Qe?$K+1:'<a href="'.h(remove_from_uri("page").($K?"&page=$K":"")).'">'.($K+1)."</a>");}function
get_file($c,$ed=false){$ra=$_FILES[$c];if(!$ra||$ra["error"]){return$ra["error"];}$e=file_get_contents($ed&&ereg('\\.gz$',$ra["name"])?"compress.zlib://$ra[tmp_name]":($ed&&ereg('\\.bz2$',$ra["name"])?"compress.bzip2://$ra[tmp_name]":$ra["tmp_name"]));if($ed){$ub=substr($e,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$ub,$Ff)){$e=iconv("utf-16","utf-8",$e);}elseif($ub=="\xEF\xBB\xBF"){$e=substr($e,3);}}return$e;}function
upload_error($q){$pe=($q==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($q?'Nepodařilo se nahrát soubor.'.($pe?" ".sprintf('Maximální povolená velikost souboru je %sB.',$pe):""):'Soubor neexistuje.');}function
repeat_pattern($R,$va){return
str_repeat("$R{0,65535}",$va/65535)."$R{0,".($va
%
65535)."}";}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($V,$va=80,$df=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$va).")($)?)u",$V,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$va).")($)?)",$V,$m);}return
h($m[1]).$df.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($db,$cf=array()){while(list($c,$b)=each($db)){if(is_array($b)){foreach($b
as$Aa=>$t){$db[$c."[$Aa]"]=$t;}}elseif(!in_array($c,$cf)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($l){global$n;$e=array();foreach($n->foreignKeys($l)as$D){foreach($D["source"]as$b){$e[$b][]=$D;}}return$e;}function
enum_input($M,$Fa,$d,$o,$Eb=null){global$n;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$da);$e=(isset($Eb)?"<label><input type='$M'$Fa value='$Eb'".((is_array($o)?in_array($Eb,$o):$o===0)?" checked":"")."><i>".'prázdné'."</i></label>":"");foreach($da[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Oa=(is_int($o)?$o==$g+1:(is_array($o)?in_array($g+1,$o):$o===$b));$e.=" <label><input type='$M'$Fa value='".($g+1)."'".($Oa?' checked':'').'>'.h($n->editVal($b,$d)).'</label>';}return$e;}function
input($d,$o,$B){global$ya,$n,$r;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$ne=($r=="mssql"&&$d["auto_increment"]);if($ne&&!$_POST["save"]){$B=null;}$Y=(isset($_GET["select"])||$ne?array("orig"=>'původní'):array())+$n->editFunctions($d);$Fa=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($Y[""])."<td>".$n->editInput($_GET["edit"],$d,$Fa,$o);}else{$ja=0;foreach($Y
as$c=>$b){if($c===""||!$b){break;}$ja++;}$pb=($ja?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($d["field"])))."]']; if ($ja > f.selectedIndex) f.selectedIndex = $ja;\"":"");$Fa.=$pb;echo(count($Y)>1?html_select("function[$f]",$Y,!isset($B)||in_array($B,$Y)||isset($Y[$B])?$B:"","functionChange(this);"):nbsp(reset($Y))).'<td>';$je=$n->editInput($_GET["edit"],$d,$Fa,$o);if($je!=""){echo$je;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$da);foreach($da[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Oa=(is_int($o)?($o>>$g)&1:in_array($b,explode(",",$o),true));echo" <label><input type='checkbox' name='fields[$f][$g]' value='".(1<<$g)."'".($Oa?' checked':'')."$pb>".h($n->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$pb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($r!="sqlite"||ereg("\n",$o)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Fa>".h($o).'</textarea>';}else{$pd=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$m)?((ereg("binary",$d["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$d["unsigned"]?1:0)):($ya[$d["type"]]?$ya[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($o)."'".($pd?" maxlength='$pd'":"").(ereg('char|binary',$d["type"])&&$pd>20?" size='40'":"")."$Fa>";}}}function
process_input($d){global$n;$Da=bracket_escape($d["field"]);$B=$_POST["function"][$Da];$o=$_POST["fields"][$Da];if($d["type"]=="enum"){if($o==-1){return
false;}if($o==""){return"NULL";}return+$o;}if($d["auto_increment"]&&$o==""){return
null;}if($B=="orig"){return($d["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($d["field"]):false);}if($B=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$o);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$ra=get_file("fields-$Da");if(!is_string($ra)){return
false;}return
q($ra);}return$n->processInput($d,$o,$B);}function
search_tables(){global$n,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$X=false;foreach(table_status()as$l=>$v){$f=$n->tableName($v);if(isset($v["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($l,$_POST["tables"]))){$k=$i->query("SELECT".limit("1 FROM ".table($l)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($l),array())),1));if($k->fetch_row()){if(!$X){echo"<ul>\n";$X=true;}echo"<li><a href='".h(ME."select=".urlencode($l)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($X?"</ul>":"<p class='message'>".'Žádné tabulky.')."\n";}function
dump_headers($Ec,$od=false){global$n;$e=$n->dumpHeaders($Ec,$od);$_a=$_POST["output"];if($_a!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Ec!=""?$Ec:(SERVER!=""?SERVER:"localhost")).".$e".($_a!="file"&&!ereg('[^0-9a-z]',$_a)?".$_a":""));}session_write_close();return$e;}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($B,$fa){return($B?($B=="unixepoch"?"DATETIME($fa, '$B')":($B=="count distinct"?"COUNT(DISTINCT ":strtoupper("$B("))."$fa)"):$fa);}function
password_file(){$Dc=ini_get("upload_tmp_dir");if(!$Dc){if(function_exists('sys_get_temp_dir')){$Dc=sys_get_temp_dir();}else{$lb=@tempnam("","");if(!$lb){return
false;}$Dc=dirname($lb);unlink($lb);}}$lb="$Dc/adminer.key";$e=@file_get_contents($lb);if($e){return$e;}$za=@fopen($lb,"w");if($za){$e=md5(uniqid(mt_rand(),true));fwrite($za,$e);fclose($za);}return$e;}function
is_mail($uf){$Rd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Pb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$R="$Rd+(\\.$Rd+)*@($Pb?\\.)+$Pb";return
preg_match("(^$R(,\\s*$R)*\$)i",$uf);}function
is_url($V){$Pb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Pb?\\.)+$Pb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$V,$m)?strtolower($m[1]):"");}global$n,$i,$ta,$ld,$jb,$q,$Y,$Gb,$Vb,$Hb,$r,$Bf,$Kf,$Ha,$Ic,$F,$Hf,$ya,$Db,$Kb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Vb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$dc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Vb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$dc[]=true;}call_user_func_array('session_set_cookie_params',$dc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Nc);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'cs';}function
lang($gf,$Gc){$Tb=($Gc==1?0:($Gc&&$Gc<5?1:2));return
sprintf($gf[$Tb],$Gc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($rf,$aa,$ka,$lf='auth_error'){set_exception_handler($lf);parent::__construct($rf,$aa,$ka);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$cc=false){$k=parent::query($j);if(!$k){$jf=$this->errorInfo();$this->error=$jf[2];return
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
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$ta=array();$ta=array("server"=>"MySQL")+$ta;if(!defined("DRIVER")){$_f=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($J,$aa,$ka){mysqli_report(MYSQLI_REPORT_OFF);list($ff,$Lc)=explode(":",$J,2);$e=@$this->real_connect(($J!=""?$ff:ini_get("mysqli.default_host")),($J.$aa!=""?$aa:ini_get("mysqli.default_user")),($J.$aa.$ka!=""?$ka:ini_get("mysqli.default_pw")),null,(is_numeric($Lc)?$Lc:ini_get("mysqli.default_port")),(!is_numeric($Lc)?$Lc:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch_array();return$a[$d];}function
quote($V){return"'".$this->escape_string($V)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($J,$aa,$ka){$this->_link=@mysql_connect(($J!=""?$J:ini_get("mysql.default_host")),("$J$aa"!=""?$aa:ini_get("mysql.default_user")),("$J$aa$ka"!=""?$ka:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($V){return"'".mysql_real_escape_string($V,$this->_link)."'";}function
select_db($Yb){return
mysql_select_db($Yb,$this->_link);}function
query($j,$cc=false){$k=@($cc?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
false;}if($k===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($k);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$k=$this->query($j);if(!$k||!$k->num_rows){return
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
connect($J,$aa,$ka){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$J)),$aa,$ka);$this->query("SET NAMES utf8");return
true;}function
select_db($Yb){return$this->query("USE ".idf_escape($Yb));}function
query($j,$cc=false){$this->setAttribute(1000,!$cc);return
parent::query($j,$cc);}}}function
idf_escape($Da){return"`".str_replace("`","``",$Da)."`";}function
table($Da){return
idf_escape($Da);}function
connect(){global$n;$i=new
Min_DB;$Wc=$n->credentials();if($i->connect($Wc[0],$Wc[1],$Wc[2])){$i->query("SET sql_quote_show_create = 1");return$i;}return$i->error;}function
get_databases($Re=true){global$i;$e=&get_session("dbs");if(!isset($e)){if($Re){restart_session();ob_flush();flush();}$e=get_vals($i->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$e;}function
limit($j,$x,$W,$ga=0,$Zb=" "){return" $j$x".(isset($W)?$Zb."LIMIT $W".($ga?" OFFSET $ga":""):"");}function
limit1($j,$x){return
limit($j,$x,1);}function
db_collation($w,$S){global$i;$e=null;$ea=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1);if(preg_match('~ COLLATE ([^ ]+)~',$ea,$m)){$e=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ea,$m)){$e=$S[$m[1]][-1];}return$e;}function
engines(){$e=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($A){$e=array();foreach($A
as$w){$e[$w]=count(get_vals("SHOW TABLES IN ".idf_escape($w)));}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($v){return!isset($v["Rows"]);}function
fk_support($v){return
eregi("InnoDB|IBMDB2I",$v["Engine"]);}function
fields($l){$e=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($l))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$m);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($a["Default"]!=""||ereg("char",$m[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$m)?$m[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$e;}function
indexes($l,$H=null){$e=array();foreach(get_rows("SHOW INDEX FROM ".table($l),$H)as$a){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$e;}function
foreign_keys($l){global$i,$Ha;static$R='`(?:[^`]|``)+`';$e=array();$Me=$i->result("SHOW CREATE TABLE ".table($l),1);if($Me){preg_match_all("~CONSTRAINT ($R) FOREIGN KEY \\(((?:$R,? ?)+)\\) REFERENCES ($R)(?:\\.($R))? \\(((?:$R,? ?)+)\\)(?: ON DELETE ($Ha))?(?: ON UPDATE ($Ha))?~",$Me,$da,PREG_SET_ORDER);foreach($da
as$m){preg_match_all("~$R~",$m[2],$ua);preg_match_all("~$R~",$m[5],$ma);$e[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$ua[0]),"target"=>array_map('idf_unescape',$ma[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$e;}function
view($f){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){if($a["Default"]){$e[$a["Charset"]][-1]=$a["Collation"];}else{$e[$a["Charset"]][]=$a["Collation"];}}ksort($e);foreach($e
as$c=>$b){asort($e[$c]);}return$e;}function
information_schema($w){global$i;return($i->server_info>=5&&$w=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($w,$tb){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($w).($tb?" COLLATE ".q($tb):""));}function
drop_databases($A){set_session("dbs",null);return
apply_queries("DROP DATABASE",$A,'idf_escape');}function
rename_database($f,$tb){if(create_database($f,$tb)){$wb=array();foreach(tables_list()as$l=>$M){$wb[]=table($l)." TO ".idf_escape($f).".".table($l);}if(!$wb||queries("RENAME TABLE ".implode(", ",$wb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ad=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$s){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$s["columns"],true)){$ad="";break;}if($s["type"]=="PRIMARY"){$ad=" UNIQUE";}}}return" AUTO_INCREMENT$ad";}function
alter_table($l,$f,$p,$Jc,$cb,$gc,$tb,$Oc,$fc){$ca=array();foreach($p
as$d){$ca[]=($d[1]?($l!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($l!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$ca=array_merge($ca,$Jc);$xb="COMMENT=".q($cb).($gc?" ENGINE=".q($gc):"").($tb?" COLLATE ".q($tb):"").($Oc!=""?" AUTO_INCREMENT=$Oc":"").$fc;if($l==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ca)."\n) $xb");}if($l!=$f){$ca[]="RENAME TO ".table($f);}$ca[]=$xb;return
queries("ALTER TABLE ".table($l)."\n".implode(",\n",$ca));}function
alter_indexes($l,$ca){foreach($ca
as$c=>$b){$ca[$c]=($b[2]=="DROP"?"\nDROP INDEX ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").($b[1]!=""?idf_escape($b[1])." ":"").$b[2]);}return
queries("ALTER TABLE ".table($l).implode(",",$ca));}function
truncate_tables($qa){return
apply_queries("TRUNCATE TABLE",$qa);}function
drop_views($Ka){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ka)));}function
drop_tables($qa){return
queries("DROP TABLE ".implode(", ",array_map('table',$qa)));}function
move_tables($qa,$Ka,$ma){$wb=array();foreach(array_merge($qa,$Ka)as$l){$wb[]=table($l)." TO ".idf_escape($ma).".".table($l);}return
queries("RENAME TABLE ".implode(", ",$wb));}function
copy_tables($qa,$Ka,$ma){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($qa
as$l){$f=($ma==DB?table("copy_$l"):idf_escape($ma).".".table($l));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($l))||!queries("INSERT INTO $f SELECT * FROM ".table($l))){return
false;}}foreach($Ka
as$l){$f=($ma==DB?table("copy_$l"):idf_escape($ma).".".table($l));$yb=view($l);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $yb[select]")){return
false;}}return
true;}function
trigger($f){$G=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($G);}function
triggers($l){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$M){global$i,$jb,$Hb,$ya;$Cf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$we="((".implode("|",array_merge(array_keys($ya),$Cf)).")(?:\\s*\\(((?:[^'\")]*|$jb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$R="\\s*(".($M=="FUNCTION"?"":$Hb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$we";$ea=$i->result("SHOW CREATE $M ".idf_escape($f),2);preg_match("~\\(((?:$R\\s*,?)*)\\)".($M=="FUNCTION"?"\\s*RETURNS\\s+$we":"")."\\s*(.*)~is",$ea,$m);$p=array();preg_match_all("~$R\\s*,?~is",$m[1],$da,PREG_SET_ORDER);foreach($da
as$Ja){$f=str_replace("``","`",$Ja[2]).$Ja[3];$p[]=array("field"=>$f,"type"=>strtolower($Ja[5]),"length"=>preg_replace_callback("~$jb~s",'normalize_enum',$Ja[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ja[8] $Ja[7]"))),"full_type"=>$Ja[4],"inout"=>strtoupper($Ja[1]),"collation"=>strtolower($Ja[9]),);}if($M!="FUNCTION"){return
array("fields"=>$p,"definition"=>$m[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($l,$u){return
queries("INSERT INTO ".table($l)." (".implode(", ",array_keys($u)).")\nVALUES (".implode(", ",$u).")");}function
insert_update($l,$u,$Kc){foreach($u
as$c=>$b){$u[$c]="$c = $b";}$Ca=implode(", ",$u);return
queries("INSERT INTO ".table($l)." SET $Ca ON DUPLICATE KEY UPDATE $Ca");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$j){return$i->query("EXPLAIN $j");}function
found_rows($v,$x){return($x||$v["Engine"]!="InnoDB"?null:$v["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ta){return
true;}function
create_sql($l,$Oc){global$i;$e=$i->result("SHOW CREATE TABLE ".table($l),1);if(!$Oc){$e=preg_replace('~ AUTO_INCREMENT=\\d+~','',$e);}return$e;}function
truncate_sql($l){return"TRUNCATE ".table($l);}function
use_sql($Yb){return"USE ".idf_escape($Yb);}function
trigger_sql($l,$I){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")),null,"-- ")as$a){$e.="\n".($I=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($vf){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$vf);}$r="sql";$ya=array();$Ic=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Řetězce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binární'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Seznamy'=>array("enum"=>65535,"set"=>64),)as$c=>$b){$ya+=$b;$Ic[$c]=array_keys($b);}$Db=array("unsigned","zerofill","unsigned zerofill");$Fe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Y=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Gb=array("avg","count","count distinct","group_concat","max","min","sum");$ld=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Kb="3.3.2";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$ta;echo'<table cellspacing="0">
<tr><th>Systém<td>',html_select("driver",$ta,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>Uživatel<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Přihlásit se'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé přihlášení')."\n";}function
login($If,$ka){return
true;}function
tableName($Fc){return
h($Fc["Name"]);}function
fieldName($d,$Ga=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Fc,$u=""){echo'<p class="tabs">';$ha=array("select"=>'Vypsat data',"table"=>'Zobrazit strukturu');if(is_view($Fc)){$ha["view"]='Pozměnit pohled';}else{$ha["create"]='Pozměnit tabulku';}if(isset($u)){$ha["edit"]='Nová položka';}foreach($ha
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($Fc["Name"]).($c=="edit"?$u:"")."'".bold(isset($_GET[$c])).">$b</a>";}echo"\n";}function
foreignKeys($l){return
foreign_keys($l);}function
backwardKeys($l,$Jf){return
array();}function
backwardKeysPrint($Lf,$a){}function
selectQuery($j){global$r;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Poslední stránka'."'>&gt;&gt;</a> <code class='jush-$r'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upravit'."</a></p>\n";}function
rowDescription($l){return"";}function
rowDescriptions($G,$Ef){return$G;}function
selectVal($b,$C,$d){$e=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(array('%d bajt','%d bajty','%d bajtů'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($C?"<a href='$C'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($z,$y){global$Y,$Gb;print_fieldset("select",'Vypsat',$z);$g=0;$Sd=array('Funkce'=>$Y,'Agregace'=>$Gb);foreach($z
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$Sd,$b["fun"]),"(<select name='columns[$g][col]'><option>".optionlist($y,$b["col"],true)."</select>)</div>\n";$g++;}echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$Sd,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$g][col]' onchange='selectAddRow(this);'><option>".optionlist($y,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($x,$y,$_){print_fieldset("search",'Vyhledat',$x);foreach($_
as$g=>$s){if($s["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$s["columns"]))."</i>) AGAINST"," <input name='fulltext[$g]' value='".h($_GET["fulltext"][$g])."'>",checkbox("boolean[$g]",1,isset($_GET["boolean"][$g]),"BOOL"),"<br>\n";}}$g=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$g][col]'><option value=''>(".'kdekoliv'.")".optionlist($y,$b["col"],true)."</select>",html_select("where[$g][op]",$this->operators,$b["op"]),"<input name='where[$g][val]' value='".h($b["val"])."'></div>\n";$g++;}}echo"<div><select name='where[$g][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoliv'.")".optionlist($y,null,true)."</select>",html_select("where[$g][op]",$this->operators,"="),"<input name='where[$g][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Ga,$y,$_){print_fieldset("sort",'Seřadit',$Ga);$g=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($y[$b])){echo"<div><select name='order[$g]'><option>".optionlist($y,$b,true)."</select>",checkbox("desc[$g]",1,isset($_GET["desc"][$c]),'sestupně')."</div>\n";$g++;}}echo"<div><select name='order[$g]' onchange='selectAddRow(this);'><option>".optionlist($y,null,true)."</select>","<label><input type='checkbox' name='desc[$g]' value='1'>".'sestupně'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($W){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($W)."'>","</div></fieldset>\n";}function
selectLengthPrint($sb){if(isset($sb)){echo"<fieldset><legend>".'Délka textů'."</legend><div>",'<input name="text_length" size="3" value="'.h($sb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Akce'."</legend><div>","<input type='submit' value='".'Vypsat'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Mf,$y){}function
selectColumnsProcess($y,$_){global$Y,$Gb;$z=array();$Z=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($y[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$Y)||in_array($b["fun"],$Gb)))){$z[$c]=apply_sql_function($b["fun"],(isset($y[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$Gb)){$Z[]=$z[$c];}}}return
array($z,$Z);}function
selectSearchProcess($p,$_){global$r;$e=array();foreach($_
as$g=>$s){if($s["type"]=="FULLTEXT"&&$_GET["fulltext"][$g]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$s["columns"])).") AGAINST (".q($_GET["fulltext"][$g]).(isset($_GET["boolean"][$g])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$rb=" $b[op]";if(ereg('IN$',$b["op"])){$nb=process_length($b["val"]);$rb.=" (".($nb!=""?$nb:"NULL").")";}elseif(!$b["op"]){$rb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$rb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$rb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$rb;}else{$Ra=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$Ra[]=($r=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($Ra?"(".implode("$rb OR ",$Ra)."$rb)":"0");}}}return$e;}function
selectOrderProcess($p,$_){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($x,$Ef){return
false;}function
messageQuery($j){global$r;static$Pc=0;restart_session();$E="sql-".($Pc++);$Na=&get_session("queries");if(strlen($j)>1e6){$j=ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...";}$Na[$_GET["db"]][]=$j;return" <a href='#$E' onclick=\"return !toggle('$E');\">".'SQL příkaz'."</a><div id='$E' class='hidden'><pre><code class='jush-$r'>".shorten_utf8($j,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Na[$_GET["db"]])-1)).'">'.'Upravit'.'</a></div>';}function
editFunctions($d){global$ld;$e=($d["null"]?"NULL/":"");foreach($ld
as$c=>$Y){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Y
as$R=>$b){if(!$R||ereg($R,$d["type"])){$e.="/$b";}}if($c&&!ereg('set|blob|bytea|raw|file',$d["type"])){$e.="/=";}}}return
explode("/",$e);}function
editInput($l,$d,$Fa,$o){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Fa value='-1' checked><i>".'původní'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Fa value=''".(isset($o)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Fa,$d,$o,0);}return"";}function
processInput($d,$o,$B=""){if($B=="="){return$o;}$f=$d["field"];$e=($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$o)?$o:q($o));if(ereg('^(now|getdate|uuid)$',$B)){$e="$B()";}elseif(ereg('^current_(date|timestamp)$',$B)){$e=$B;}elseif(ereg('^([+-]|\\|\\|)$',$B)){$e=idf_escape($f)." $B $e";}elseif(ereg('^[+-] interval$',$B)){$e=idf_escape($f)." $B ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$o)?$o:$e);}elseif(ereg('^(addtime|subtime|concat)$',$B)){$e="$B(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$B)){$e="$B($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput(){$e=array('text'=>'otevřít','file'=>'uložit');if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return$e;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($l,$I,$Qc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($I){dump_csv(array_keys(fields($l)));}}elseif($I){$ea=create_sql($l,$_POST["auto_increment"]);if($ea){if($I=="DROP+CREATE"){echo"DROP ".($Qc?"VIEW":"TABLE")." IF EXISTS ".table($l).";\n";}if($Qc){$ea=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$ea);}echo($I!="CREATE+ALTER"?$ea:($Qc?substr_replace($ea," OR REPLACE",6,0):substr_replace($ea," IF NOT EXISTS",12,0))).";\n\n";}if($I=="CREATE+ALTER"&&!$Qc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($l)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$mb="";foreach(get_rows($j)as$a){$Ia=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Ia)?q($Ia):"NULL");$a["after"]=q($mb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Ia)?" DEFAULT ".($Ia=="CURRENT_TIMESTAMP"?$Ia:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($mb?" AFTER ".idf_escape($mb):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$mb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($p
as$a){echo"
				WHEN ".q($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', IF(
						_column_default <=> $a[default] AND _is_nullable = '$a[IS_NULLABLE]' AND _collation_name <=> ".(isset($a["COLLATION_NAME"])?"'$a[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($a["COLUMN_TYPE"])." AND _extra = '$a[EXTRA]' AND _column_comment = ".q($a["COLUMN_COMMENT"])." AND after = $a[after]
					, '', ', MODIFY $a[alter]'));";}echo"
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
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($l)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($l,$I,$j){global$i,$r;$ae=($r=="sqlite"?0:1048576);if($I){if($_POST["format"]=="sql"&&$I=="TRUNCATE+INSERT"){echo
truncate_sql($l).";\n";}if($_POST["format"]=="sql"){$p=fields($l);}$k=$i->query($j,1);if($k){$ac="";$bb="";while($a=$k->fetch_assoc()){if($_POST["format"]!="sql"){if($I=="table"){dump_csv(array_keys($a));$I="INSERT";}dump_csv($a);}else{if(!$ac){$ac="INSERT INTO ".table($l)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$p[$c]["type"])?$b:q($b)):"NULL");}$T=implode(",\t",$a);if($I=="INSERT+UPDATE"){$u=array();foreach($a
as$c=>$b){$u[]=idf_escape($c)." = $b";}echo"$ac ($T) ON DUPLICATE KEY UPDATE ".implode(", ",$u).";\n";}else{$T=($ae?"\n":" ")."($T)";if(!$bb){$bb=$ac.$T;}elseif(strlen($bb)+4+strlen($T)<$ae){$bb.=",$T";}else{echo"$bb;\n";$bb=$ac.$T;}}}}if($_POST["format"]=="sql"&&$I!="INSERT+UPDATE"&&$bb){$bb.=";\n";echo$bb;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$i->error)."\n";}}}function
dumpHeaders($Ec,$od=false){$_a=$_POST["output"];$qb=($_POST["format"]=="sql"?"sql":($od?"tar":"csv"));header("Content-Type: ".($_a=="bz2"?"application/x-bzip":($_a=="gz"?"application/x-gzip":($qb=="tar"?"application/x-tar":($qb=="sql"||$_a!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($_a=="bz2"){ob_start('bzcompress',1e6);}if($_a=="gz"){ob_start('gzencode',1e6);}return$qb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Pozměnit databázi'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Pozměnit schéma':'Vytvořit schéma')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Schéma databáze'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Oprávnění'."</a>\n":"");return
true;}function
navigation($zb){global$Kb,$i,$F,$r,$ta;echo'<h1>
',$this->name(),' <span class="version">',$Kb,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Kb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($zb=="auth"){$ja=true;foreach((array)$_SESSION["pwds"]as$ob=>$zf){foreach($zf
as$J=>$Ve){foreach($Ve
as$aa=>$ka){if(isset($ka)){if($ja){echo"<p onclick='eventStop(event);'>\n";$ja=false;}echo"<a href='".h(auth_url($ob,$J,$aa))."'>($ta[$ob]) ".h($aa.($J!=""?"@$J":""))."</a><br>\n";}}}}}else{$A=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$zb){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL příkaz'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}}echo'<input type="submit" name="logout" value="Odhlásit" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$F,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($A?html_select("db",array(""=>"(".'databáze'.")")+$A,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Vybrat"',($A?" class='hidden'":""),' onclick="eventStop(event);">
';if($zb!="db"&&DB!=""&&$i->select_db(DB)){if($_GET["ns"]!==""&&!$zb){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Vytvořit novou tabulku'."</a>\n";$qa=tables_list();if(!$qa){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{$this->tablesPrint($qa);$ha=array();foreach($qa
as$l=>$M){$ha[]=preg_quote($l,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $r: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$ha).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$r;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($qa){echo"<p id='tables'>\n";foreach($qa
as$l=>$M){echo'<a href="'.h(ME).'select='.urlencode($l).'"'.bold($_GET["select"]==$l).">".'vypsat'."</a> ",'<a href="'.h(ME).'table='.urlencode($l).'"'.bold($_GET["table"]==$l).">".$this->tableName(array("Name"=>$l))."</a><br>\n";}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($n->operators)){$n->operators=$Fe;}function
page_header($Ud,$q="",$Nb=array(),$Vd=""){global$Bf,$n,$i,$ta;header("Content-Type: text/html; charset=utf-8");if($n->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Wd=$Ud.($Vd!=""?": ".h($Vd):"");$le=strip_tags($Wd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($le));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="cs" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$le,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.2",'">
<script type="text/javascript">
var areYouSure = \'Znovu odeslat POST data?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.2",'"></script>
';if($n->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.2",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($Nb)){$C=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($C?$C:".").'">'.$ta[DRIVER].'</a> &raquo; ';$C=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$J=(SERVER!=""?h(SERVER):'Server');if($Nb===false){echo"$J\n";}else{echo"<a href='".($C?h($C):".")."' accesskey='1' title='Alt+Shift+1'>$J</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Nb))){echo'<a href="'.h($C."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Nb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Nb
as$c=>$b){$Sb=(is_array($b)?$b[1]:$b);if($Sb!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Sb).'</a> &raquo; ';}}}echo"$Ud\n";}}echo"<span id='loader'></span>\n","<h2>$Wd</h2>\n";restart_session();$ke=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ge=$_SESSION["messages"][$ke];if($ge){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ge)."</div>\n";unset($_SESSION["messages"][$ke]);}$A=&get_session("dbs");if(DB!=""&&$A&&!in_array(DB,$A,true)){$A=null;}if($q){echo"<div class='error'>$q</div>\n";}define("PAGE_HEADER",1);}function
page_footer($zb=""){global$n;if(!is_ajax()){echo'</div>

<div id="menu">
';$n->navigation($zb);echo'</div>
';}}function
int32($O){while($O>=2147483648){$O-=4294967296;}while($O<=-2147483649){$O+=4294967296;}return(int)$O;}function
long2str($t,$vd){$T='';foreach($t
as$b){$T.=pack('V',$b);}if($vd){return
substr($T,0,end($t));}return$T;}function
str2long($T,$vd){$t=array_values(unpack('V*',str_pad($T,4*ceil(strlen($T)/4),"\0")));if($vd){$t[]=strlen($T);}return$t;}function
xxtea_mx($oa,$pa,$sa,$Aa){return
int32((($oa>>5&0x7FFFFFF)^$pa<<2)+(($pa>>3&0x1FFFFFFF)^$oa<<4))^int32(($sa^$pa)+($Aa^$oa));}function
encrypt_string($Wb,$c){if($Wb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$t=str2long($Wb,true);$O=count($t)-1;$oa=$t[$O];$pa=$t[0];$L=floor(6+52/($O+1));$sa=0;while($L-->0){$sa=int32($sa+0x9E3779B9);$Lb=$sa>>2&3;for($na=0;$na<$O;$na++){$pa=$t[$na+1];$vb=xxtea_mx($oa,$pa,$sa,$c[$na&3^$Lb]);$oa=int32($t[$na]+$vb);$t[$na]=$oa;}$pa=$t[0];$vb=xxtea_mx($oa,$pa,$sa,$c[$na&3^$Lb]);$oa=int32($t[$O]+$vb);$t[$O]=$oa;}return
long2str($t,false);}function
decrypt_string($Wb,$c){if($Wb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$t=str2long($Wb,false);$O=count($t)-1;$oa=$t[$O];$pa=$t[0];$L=floor(6+52/($O+1));$sa=int32($L*0x9E3779B9);while($sa){$Lb=$sa>>2&3;for($na=$O;$na>0;$na--){$oa=$t[$na-1];$vb=xxtea_mx($oa,$pa,$sa,$c[$na&3^$Lb]);$pa=int32($t[$na]-$vb);$t[$na]=$pa;}$oa=$t[$O];$vb=xxtea_mx($oa,$pa,$sa,$c[$na&3^$Lb]);$pa=int32($t[0]-$vb);$t[0]=$pa;$sa=int32($sa-0x9E3779B9);}return
long2str($t,true);}$i='';$F=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$kb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$kb[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Cc=$n->permanentLogin();$kb[$c]="$c:".base64_encode($Cc?encrypt_string($_POST["password"],$Cc):"");cookie("adminer_permanent",implode(" ",$kb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($F&&$_POST["token"]!=$F){page_header('Odhlásit','Neplatný token CSRF. Odešlete formulář znovu.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($kb[$c]){unset($kb[$c]);cookie("adminer_permanent",implode(" ",$kb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlášení proběhlo v pořádku.');}}elseif($kb&&!$_SESSION["pwds"]){session_regenerate_id();$Cc=$n->permanentLogin();foreach($kb
as$c=>$b){list(,$if)=explode(":",$b);list($ob,$J,$aa)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$ob][$J][$aa]=decrypt_string(base64_decode($if),$Cc);}}function
auth_error($Nd=null){global$i,$n,$F;$yc=session_name();$q="";if(!$_COOKIE[$yc]&&$_GET[$yc]&&ini_bool("session.use_only_cookies")){$q='Session proměnné musí být povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$yc]||$_GET[$yc])&&!$F){$q='Session vypršela, přihlašte se prosím znovu.';}else{$ka=&get_session("pwds");if(isset($ka)){$q=h($Nd?$Nd->getMessage():(is_string($i)?$i:'Neplatné přihlašovací údaje.'));$ka=null;}}}page_header('Přihlásit se',$q,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žádná extenze',sprintf('Není dostupná žádná z podporovaných PHP extenzí (%s).',implode(", ",$_f)),false);page_footer("auth");exit;}$i=connect();}if(is_string($i)||!$n->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$F=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$F;}$q=($_POST?($_POST["token"]==$F?"":'Neplatný token CSRF. Odešlete formulář znovu.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','"post_max_size"')));function
connect_error(){global$i,$F,$q,$ta;$A=array();if(DB!=""){page_header('Databáze'.": ".h(DB),'Nesprávná databáze.',true);}else{if($_POST["db"]&&!$q){queries_redirect(substr(ME,0,-1),'Databáze byly odstraněny.',drop_databases($_POST["db"]));}page_header('Vybrat databázi',$q,false);echo"<p><a href='".h(ME)."database='>".'Vytvořit novou databázi'."</a>\n";foreach(array('privileges'=>'Oprávnění','processlist'=>'Seznam procesů','variables'=>'Proměnné','status'=>'Stav',)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".sprintf('Verze %s: %s přes PHP extenzi %s',$ta[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".sprintf('Přihlášen jako: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$A=get_databases();if($A){$hf=support("scheme");$S=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Databáze'."<td>".'Porovnávání'."<td>".'Tabulky'."</thead>\n";foreach($A
as$w){$td=h(ME)."db=".urlencode($w);echo"<tr".odd()."><td>".checkbox("db[]",$w,in_array($w,(array)$_POST["db"])),"<th><a href='$td'>".h($w)."</a>","<td><a href='$td".($hf?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($w,$S))."</a>","<td align='right'><a href='$td&amp;schema=' id='tables-".h($w)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Odstranit'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$F'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Obnovit'."</a>\n","</form>\n";}}page_footer("db");if($A){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($k,$H=null,$zc=""){$ha=array();$_=array();$y=array();$Ke=array();$ya=array();odd('');for($g=0;$a=$k->fetch_row();$g++){if(!$g){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($U=0;$U<count($a);$U++){$d=$k->fetch_field();$f=$d->name;$xa=$d->orgtable;$Rb=$d->orgname;if($zc){$ha[$U]=($f=="table"?"table=":($f=="possible_keys"?"indexes=":null));}elseif($xa!=""){if(!isset($_[$xa])){$_[$xa]=array();foreach(indexes($xa,$H)as$s){if($s["type"]=="PRIMARY"){$_[$xa]=array_flip($s["columns"]);break;}}$y[$xa]=$_[$xa];}if(isset($y[$xa][$Rb])){unset($y[$xa][$Rb]);$_[$xa][$Rb]=$U;$ha[$U]=$xa;}}if($d->charsetnr==63){$Ke[$U]=true;}$ya[$U]=$d->type;$f=h($f);echo"<th".($xa!=""||$d->name!=$Rb?" title='".h(($xa!=""?"$xa.":"").$Rb)."'":"").">".($zc?"<a href='$zc".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}elseif($Ke[$c]&&!is_utf8($b)){$b="<i>".lang(array('%d bajt','%d bajty','%d bajtů'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($ya[$c]==254){$b="<code>$b</code>";}}if(isset($ha[$c])&&!$y[$ha[$c]]){if($zc){$C=$ha[$c].urlencode($a[array_search("table=",$ha)]);}else{$C="edit=".urlencode($ha[$c]);foreach($_[$ha[$c]]as$Ac=>$U){$C.="&where".urlencode("[".bracket_escape($Ac)."]")."=".urlencode($a[$U]);}}$b="<a href='".h(ME.$C)."'>$b</a>";}echo"<td>$b";}}echo($g?"</table>":"<p class='message'>".'Žádné řádky.')."\n";}function
referencable_primary($Se){$e=array();foreach(table_status()as$wa=>$l){if($wa!=$Se&&fk_support($l)){foreach(fields($wa)as$d){if($d["primary"]){if($e[$wa]){unset($e[$wa]);break;}$e[$wa]=$d;}}}}return$e;}function
textarea($f,$o,$G=10,$Ra=80){echo"<textarea name='$f' rows='$G' cols='$Ra' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($o)){foreach($o
as$b){echo
h($b)."\n\n\n";}}else{echo
h($o);}echo"</textarea>";}function
format_time($ub,$_c){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$_c))-array_sum(explode(" ",$ub)))).")</span>";}function
edit_type($c,$d,$S,$N=array()){global$Ic,$ya,$Db,$Ha;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($ya[$d["type"]])?array():array($d["type"]))+$Ic+($N?array('Cizí klíče'=>$N):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'porovnávání'.')'.optionlist($S,$d["collation"]).'</select>',($Db?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($Db,$d["unsigned"]).'</select>':''),($N?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'Při smazání'.")".optionlist(explode("|",$Ha),$d["on_delete"])."</select> ":" ");}function
process_length($va){global$jb;return(preg_match("~^\\s*(?:$jb)(?:\\s*,\\s*(?:$jb))*\\s*\$~",$va)&&preg_match_all("~$jb~",$va,$da)?implode(",",$da[0]):preg_replace('~[^0-9,+-]~','',$va));}function
process_type($d,$ec="COLLATE"){global$Db;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$Db)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $ec ".q($d["collation"]):"");}function
process_field($d,$oc){return
array(idf_escape($d["field"]),process_type($oc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".(($d["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$d["default"]))||($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$d["default"]))?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($M){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$M)){return" class='$c'";}}}function
edit_fields($p,$S,$M="TABLE",$Od=0,$N=array(),$hb=false){global$Hb;echo'<thead><tr class="wrap">
';if($M=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($M=="TABLE"?'Název sloupce':'Název parametru'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Délka
<td>Volby
';if($M=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Výchozí hodnoty
',(support("comment")?"<td".($hb?"":" class='hidden'").">".'Komentář':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.2' alt='+' title='".'Přidat další'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$g=>$d){$g++;$Uc=$d[($_POST?"orig":"field")];$_e=(isset($_POST["add"][$g-1])||(isset($d["field"])&&!$_POST["drop_col"][$g]))&&(support("drop_col")||$Uc=="");echo'<tr',($_e?"":" style='display: none;'"),'>
',($M=="PROCEDURE"?"<td>".html_select("fields[$g][inout]",explode("|",$Hb),$d["inout"]):""),'<th>';if($_e){echo'<input name="fields[',$g,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $Od); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$g,'][orig]" value="',h($Uc),'">
';edit_type("fields[$g]",$d,$S,$N);if($M=="TABLE"){echo'<td>',checkbox("fields[$g][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$g,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$g][has_default]",1,$d["has_default"]),'<input name="fields[',$g,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($hb?"":" class='hidden'")."><input name='fields[$g][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.2' alt='+' title='".'Přidat další'."' onclick='return !editingAddRow(this, $Od, 1);'>&nbsp;"."<input type='image' name='up[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.3.2' alt='^' title='".'Přesunout nahoru'."'>&nbsp;"."<input type='image' name='down[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.3.2' alt='v' title='".'Přesunout dolů'."'>&nbsp;":""),($Uc==""||support("drop_col")?"<input type='image' name='drop_col[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.2' alt='x' title='".'Odebrat'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$p){ksort($p);$ga=0;if($_POST["up"]){$Xa=0;foreach($p
as$c=>$d){if(key($_POST["up"])==$c){unset($p[$c]);array_splice($p,$Xa,0,array($d));break;}if(isset($d["field"])){$Xa=$ga;}$ga++;}}if($_POST["down"]){$X=false;foreach($p
as$c=>$d){if(isset($d["field"])&&$X){unset($p[key($_POST["down"])]);array_splice($p,$ga,0,array($X));break;}if(key($_POST["down"])==$c){$X=$d;}$ga++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($m){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($m[0][0].$m[0][0],$m[0][0],substr($m[0],1,-1))),'\\'))."'";}function
grant($Q,$ba,$y,$fb){if(!$ba){return
true;}if($ba==array("ALL PRIVILEGES","GRANT OPTION")){return($Q=="GRANT"?queries("$Q ALL PRIVILEGES$fb WITH GRANT OPTION"):queries("$Q ALL PRIVILEGES$fb")&&queries("$Q GRANT OPTION$fb"));}return
queries("$Q ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$y, ",$ba).$y).$fb);}function
drop_create($He,$ea,$P,$Ee,$We,$Ze,$f){if($_POST["drop"]){return
query_redirect($He,$P,$Ee,true,!$_POST["dropped"]);}$La=$f!=""&&($_POST["dropped"]||queries($He));$af=queries($ea);if(!queries_redirect($P,($f!=""?$We:$Ze),$af)&&$La){redirect(null,$Ee);}return$La;}function
tar_file($lb,$Vc){$e=pack("a100a8a8a8a12a12",$lb,644,0,0,decoct(strlen($Vc)),decoct(time()));$Be=8*32;for($g=0;$g<strlen($e);$g++){$Be+=ord($e{$g});}$e.=sprintf("%06o",$Be)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Vc.str_repeat("\0",511-(strlen($Vc)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Ha="RESTRICT|CASCADE|SET NULL|NO ACTION";$jb="'(?:''|[^'\\\\]|\\\\.)*+'";$Hb="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$h=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$h-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($h)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$h=$_GET["table"];$p=fields($h);if(!$p){$q=error();}$v=($p?table_status($h):array());page_header(($p&&is_view($v)?'Pohled':'Tabulka').": ".h($h),$q);$n->selectLinks($v);$cb=$v["Comment"];if($cb!=""){echo"<p>".'Komentář'.": ".h($cb)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Sloupec'."<td>".'Typ'.(support("comment")?"<td>".'Komentář':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td title='".h($d["collation"])."'>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($d["default"])?" [<b>".h($d["default"])."</b>]":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($v)){echo"<h3>".'Indexy'."</h3>\n";$_=indexes($h);if($_){echo"<table cellspacing='0'>\n";foreach($_
as$f=>$s){ksort($s["columns"]);$ib=array();foreach($s["columns"]as$c=>$b){$ib[]="<i>".h($b)."</i>".($s["lengths"][$c]?"(".$s["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$s[type]<td>".implode(", ",$ib)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($h).'">'.'Pozměnit indexy'."</a>\n";if(fk_support($v)){echo"<h3>".'Cizí klíče'."</h3>\n";$N=foreign_keys($h);if($N){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'Cíl'."<td>".'Při smazání'."<td>".'Při změně'.($r!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($N
as$f=>$D){echo"<tr title='".h($f)."'>","<th><i>".implode("</i>, <i>",array_map('h',$D["source"]))."</i>","<td><a href='".h($D["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($D["db"]),ME):($D["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($D["ns"]),ME):ME))."table=".urlencode($D["table"])."'>".($D["db"]!=""?"<b>".h($D["db"])."</b>.":"").($D["ns"]!=""?"<b>".h($D["ns"])."</b>.":"").h($D["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$D["target"]))."</i>)","<td>".nbsp($D["on_delete"])."\n","<td>".nbsp($D["on_update"])."\n";if($r!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($h).'&name='.urlencode($f)).'">'.'Změnit'.'</a>';}}echo"</table>\n";}if($r!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($h).'">'.'Přidat cizí klíč'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggery'."</h3>\n";$sc=triggers($h);if($sc){echo"<table cellspacing='0'>\n";foreach($sc
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($h).'&name='.urlencode($c))."'>".'Změnit'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($h).'">'.'Přidat trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schéma databáze',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$ab=array();$te=array();$f="adminer_schema";$Oe=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$Oe,$da,PREG_SET_ORDER);foreach($da
as$g=>$m){$ab[$m[1]]=array($m[2],$m[3]);$te[]="\n\t'".js_escape($m[1])."': [ $m[2], $m[3] ]";}$Cb=0;$Je=-1;$Ta=array();$Ie=array();$Ge=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$Tb=0;$Ta[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$Tb+=1.25;$d["pos"]=$Tb;$Ta[$a["Name"]]["fields"][$f]=$d;}$Ta[$a["Name"]]["pos"]=($ab[$a["Name"]]?$ab[$a["Name"]]:array($Cb,0));foreach($n->foreignKeys($a["Name"])as$b){if(!$b["db"]){$la=$Je;if($ab[$a["Name"]][1]||$ab[$b["table"]][1]){$la=min(floatval($ab[$a["Name"]][1]),floatval($ab[$b["table"]][1]))-1;}else{$Je-=.1;}while($Ge[(string)$la]){$la-=.0001;}$Ta[$a["Name"]]["references"][$b["table"]][(string)$la]=array($b["source"],$b["target"]);$Ie[$b["table"]][$a["Name"]][(string)$la]=$b["target"];$Ge[(string)$la]=true;}}$Cb=max($Cb,$Ta[$a["Name"]]["pos"][0]+2.5+$Tb);}echo'<div id="schema" style="height: ',$Cb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$te)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Cb,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Ta
as$f=>$l){echo"<div class='table' style='top: ".$l["pos"][0]."em; left: ".$l["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($l["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$l["references"]as$_b=>$Xb){foreach($Xb
as$la=>$rc){$Ub=$la-$ab[$f][1];$g=0;foreach($rc[0]as$ua){echo"<div class='references' title='".h($_b)."' id='refs$la-".($g++)."' style='left: $Ub"."em; top: ".$l["fields"][$ua]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Ub)."em;'></div></div>\n";}}}foreach((array)$Ie[$f]as$_b=>$Xb){foreach($Xb
as$la=>$y){$Ub=$la-$ab[$f][1];$g=0;foreach($y
as$ma){echo"<div class='references' title='".h($_b)."' id='refd$la-".($g++)."' style='left: $Ub"."em; top: ".$l["fields"][$ma]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.3.2'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Ub)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ta
as$f=>$l){foreach((array)$l["references"]as$_b=>$Xb){foreach($Xb
as$la=>$rc){$qc=$Cb;$Xc=-10;foreach($rc[0]as$c=>$ua){$ve=$l["pos"][0]+$l["fields"][$ua]["pos"];$xe=$Ta[$_b]["pos"][0]+$Ta[$_b]["fields"][$rc[1][$c]]["pos"];$qc=min($qc,$ve,$xe);$Xc=max($Xc,$ve,$xe);}echo"<div class='references' id='refl$la' style='left: $la"."em; top: $qc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Xc-$qc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($Oe)),'" id="schema-link">Trvalý odkaz</a>
';}elseif(isset($_GET["dump"])){$h=$_GET["dump"];if($_POST){$ze="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$c){$ze.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($ze,1));$qb=dump_headers(($h!=""?$h:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Ya=($_POST["format"]=="sql");if($Ya){echo"-- Adminer $Kb ".$ta[DRIVER]." dump

".($r!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($i->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$I=$_POST["db_style"];$A=array(DB);if(DB==""){$A=$_POST["databases"];if(is_string($A)){$A=explode("\n",rtrim(str_replace("\r","",$A),"\n"));}}foreach((array)$A
as$w){if($i->select_db($w)){if($Ya&&ereg('CREATE',$I)&&($ea=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1))){if($I=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($w).";\n";}echo($I=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ea):$ea).";\n";}if($Ya){if($I){echo
use_sql($w).";\n\n";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Va="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ea){foreach(get_rows("SHOW $Ea STATUS WHERE Db = ".q($w),null,"-- ")as$a){$Va.=($I!='DROP+CREATE'?"DROP $Ea IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE $Ea ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$Va.=($I!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($Va){echo"DELIMITER ;;\n\n$Va"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Ka=array();foreach(table_status()as$a){$l=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$re=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($l||$re){if(!is_view($a)){if($qb=="tar"){ob_start();}$n->dumpTable($a["Name"],($l?$_POST["table_style"]:""));if($re){$n->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($Ya&&$_POST["triggers"]&&$l&&($sc=trigger_sql($a["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$sc\nDELIMITER ;\n";}if($qb=="tar"){echo
tar_file((DB!=""?"":"$w/")."$a[Name].csv",ob_get_clean());}elseif($Ya){echo"\n";}}elseif($Ya){$Ka[]=$a["Name"];}}}foreach($Ka
as$yb){$n->dumpTable($yb,$_POST["table_style"],true);}if($qb=="tar"){echo
pack("x512");}}if($I=="CREATE+ALTER"&&$Ya){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
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
			CASE _table_name";foreach(get_rows($j)as$a){$cb=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $cb THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$cb;
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
";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))&&$Ya){echo"SELECT @adminer_alter;\n";}}}if($Ya){echo"-- ".$i->result("SELECT NOW()")."\n";}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$ue=array('','USE','DROP+CREATE','CREATE');$Ce=array('','DROP+CREATE','CREATE');$De=array('','TRUNCATE+INSERT','INSERT');if($r=="sql"){$ue[]='CREATE+ALTER';$Ce[]='CREATE+ALTER';$De[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Výstup'."<td>".html_select("output",$n->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Formát'."<td>".html_select("format",$n->dumpFormat(),$a["format"],0)."\n";echo($r=="sqlite"?"":"<tr><th>".'Databáze'."<td>".html_select('db_style',$ue,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Procedury a funkce'):"").(support("event")?checkbox("events",1,$a["events"],'Události'):"")),"<tr><th>".'Tabulky'."<td>".html_select('table_style',$Ce,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Triggery'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$De,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$sd=array();if(DB!=""){$Oa=($h!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Oa onclick='formCheck(this, /^tables\\[/);'>".'Tabulky'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$Oa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Ka="";foreach(table_status()as$a){$f=$a["Name"];$bc=ereg_replace("_.*","",$f);$Oa=($h==""||$h==(substr($h,-1)=="%"?"$bc%":$f));$ib="<tr><td>".checkbox("tables[]",$f,$Oa,$f,"formUncheck('check-tables');");if(is_view($a)){$Ka.="$ib\n";}else{echo"$ib<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$Oa,"","formUncheck('check-data');")."</label>\n";}$sd[$bc]++;}echo$Ka;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($h==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Databáze'."</label></thead>\n";$A=get_databases();if($A){foreach($A
as$w){if(!information_schema($w)){$bc=ereg_replace("_.*","",$w);echo"<tr><td>".checkbox("databases[]",$w,$h==""||$h=="$bc%",$w,"formUncheck('check-databases');")."</label>\n";$sd[$bc]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$ja=true;foreach($sd
as$c=>$b){if($c!=""&&$b>1){echo($ja?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$ja=false;}}}elseif(isset($_GET["privileges"])){page_header('Oprávnění');$k=$i->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q($_GET["db"])." LIKE Db")." ORDER BY Host, User");if(!$k){echo'<form action=""><p>
';hidden_fields_get();echo'Uživatel: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Upravit">
</form>
';$k=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Uživatel'."<th>".'Server'."</thead>\n";while($a=$k->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'upravit'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Vytvořit uživatele'."</a>";}elseif(isset($_GET["sql"])){if(!$q&&$_POST["export"]){dump_headers("sql");$n->dumpTable("","");$n->dumpData("","table",$_POST["query"]);exit;}restart_session();$mf=&get_session("queries");$Na=&$mf[DB];if(!$q&&$_POST["clear"]){$Na=array();redirect(remove_from_uri("history"));}page_header('SQL příkaz',$q);if(!$q&&$_POST){$za=false;$j=$_POST["query"];if($_POST["webfile"]){$za=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($za?fread($za,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",max(ini_get("memory_limit"),2*strlen($j)+memory_get_usage()+8e6));}if($j!=""&&strlen($j)<1e6){$L=$j.(ereg(';$',$j)?"":";");if(!$Na||end($Na)!=$L){$Na[]=$L;}}$hc="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Yc=";";$ga=0;$Eb=true;$H=connect();if(is_object($H)&&DB!=""){$H->select_db(DB);}$gb=0;$pc=array();$of='[\'"'.($r=="sql"?'`#':($r=="sqlite"?'`[':($r=="mssql"?'[':''))).']|/\\*|-- |$'.($r=="pgsql"?'|\\$[^$]*\\$':'');$wf=microtime();parse_str($_COOKIE["adminer_export"],$he);$Kd=$n->dumpFormat();unset($Kd["sql"]);while($j!=""){if(!$ga&&$r=="sql"&&preg_match("~^$hc*DELIMITER\\s+(.+)~i",$j,$m)){$Yc=$m[1];$j=substr($j,strlen($m[0]));}else{preg_match('('.preg_quote($Yc)."|$of)",$j,$m,PREG_OFFSET_CAPTURE,$ga);$X=$m[0][0];if(!$X&&$za&&!feof($za)){$j.=fread($za,1e5);}else{$ga=$m[0][1]+strlen($X);if(!$X&&rtrim($j)==""){break;}if($X&&$X!=$Yc){while(preg_match('('.($X=='/*'?'\\*/':($X=='['?']':(ereg('^-- |^#',$X)?"\n":preg_quote($X)."|\\\\."))).'|$)s',$j,$m,PREG_OFFSET_CAPTURE,$ga)){$T=$m[0][0];$ga=$m[0][1]+strlen($T);if(!$T&&$za&&!feof($za)){$ga-=strlen($X);$j.=fread($za,1e5);}elseif($T[0]!="\\"){break;}}}else{$Eb=false;$L=substr($j,0,$m[0][1]);$gb++;$ib="<pre id='sql-$gb'><code class='jush-$r'>".shorten_utf8(trim($L),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$ib;ob_flush();flush();}$ub=microtime();if($i->multi_query($L)&&is_object($H)&&preg_match("~^$hc*USE\\b~isU",$L)){$H->query($L);}do{$k=$i->store_result();$_c=microtime();$Jd=format_time($ub,$_c).(strlen($L)<1000?" <a href='".h(ME)."sql=".urlencode(trim($L))."'>".'Upravit'."</a>":"");if($i->error){echo($_POST["only_errors"]?$ib:""),"<p class='error'>".'Chyba v dotazu'.": ".error()."\n";$pc[]=" <a href='#sql-$gb'>$gb</a>";if($_POST["error_stops"]){break
2;}}elseif(is_object($k)){select($k,$H);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($k->num_rows?lang(array('%d řádek','%d řádky','%d řádků'),$k->num_rows):"").$Jd;$E="export-$gb";$Id=", <a href='#$E' onclick=\"return !toggle('$E');\">".'Export'."</a><span id='$E' class='hidden'>: ".html_select("output",$n->dumpOutput(),$he["output"])." ".html_select("format",$Kd,$he["format"])."<input type='hidden' name='query' value='".h($L)."'>"." <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'><input type='hidden' name='token' value='$F'></span>\n";if($H&&preg_match("~^($hc|\\()*SELECT\\b~isU",$L)&&($qf=explain($H,$L))){$E="explain-$gb";echo", <a href='#$E' onclick=\"return !toggle('$E');\">EXPLAIN</a>$Id","<div id='$E' class='hidden'>\n";select($qf,$H,($r=="sql"?"http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/explain-output.html#explain_":""));echo"</div>\n";}else{echo$Id;}echo"</form>\n";}}else{if(preg_match("~^$hc*(CREATE|DROP|ALTER)$hc+(DATABASE|SCHEMA)\\b~isU",$L)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($i->info)."'>".lang(array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),$i->affected_rows)."$Jd\n";}}$ub=$_c;}while($i->next_result());$j=substr($j,$ga);$ga=0;}}}}if($Eb){echo"<p class='message'>".'Žádné příkazy k vykonání.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d příkaz proběhl v pořádku.','%d příkazy proběhly v pořádku.','%d příkazů proběhlo v pořádku.'),$gb-count($pc)).format_time($wf,microtime())."\n";}elseif($pc&&$gb>1){echo"<p class='error'>".'Chyba v dotazu'.": ".implode("",$pc)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$L=$_GET["sql"];if($_POST){$L=$_POST["query"];}elseif($_GET["history"]=="all"){$L=$Na;}elseif($_GET["history"]!=""){$L=$Na[$_GET["history"]];}textarea("query",$L,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Nahrání souboru'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'Nahrávání souborů není povoleno.'),'<p>
<input type="submit" value="Provést" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$F,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Zastavit při chybě')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Zobrazit pouze chyby')."\n";print_fieldset("webfile",'Ze serveru',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$Zc=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$Zc[]=".$c";}}echo
sprintf('Soubor %s na webovém serveru',"<code>adminer.sql".($Zc?"[".implode("|",$Zc)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustit soubor'.'">',"</div></fieldset>\n";if($Na){print_fieldset("history",'Historie',$_GET["history"]!="");foreach($Na
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.'Upravit'."</a> <code class='jush-$r'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Vyčistit'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Upravit vše'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$h=$_GET["edit"];$x=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Ca=(isset($_GET["select"])?$_POST["edit"]:$x);$p=fields($h);foreach($p
as$f=>$d){if(!isset($d["privileges"][$Ca?"update":"insert"])||$n->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$q&&!isset($_GET["select"])){$P=$_POST["referer"];if($_POST["insert"]){$P=($Ca?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$P)){$P=ME."select=".urlencode($h);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($h)," WHERE $x"),$P,'Položka byla smazána.');}else{$u=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$u[idf_escape($f)]=($Ca?"\n".idf_escape($f)." = $b":$b);}}if($Ca){if(!$u){redirect($P);}query_redirect("UPDATE".limit1(table($h)." SET".implode(",",$u),"\nWHERE $x"),$P,'Položka byla aktualizována.');}else{$k=insert_into($h,$u);$Ld=($k?last_id():0);queries_redirect($P,sprintf('Položka%s byla vložena.',($Ld?" $Ld":"")),$k);}}}$wa=$n->tableName(table_status($h));page_header(($Ca?'Upravit':'Vložit'),$q,array("select"=>array($h,$wa)),$wa);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($x){$z=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$z[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($z){$G=get_rows("SELECT".limit(implode(", ",$z)." FROM ".table($h)," WHERE $x",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($G)!=1?null:reset($G));}}if($a===false){echo"<p class='error'>".'Žádné řádky.'."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$n->fieldName($d);$Ia=$_GET["set"][bracket_escape($f)];$o=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?(is_array($a[$f])?array_sum($a[$f]):+$a[$f]):$a[$f]):(!$Ca&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Ia)?$Ia:$d["default"]))));if(!$_POST["save"]&&is_string($o)){$o=$n->editVal($o,$d);}$B=($_POST["save"]?(string)$_POST["function"][$f]:($Ca&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($o===false?null:(isset($o)?'':'NULL'))));if($d["type"]=="timestamp"&&$o=="CURRENT_TIMESTAMP"){$o="";$B="now";}input($d,$o,$B);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".'Uložit'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Ca?'Uložit a pokračovat v editaci':'Uložit a vložit další')."' title='Ctrl+Shift+Enter'>\n";}}echo($Ca?"<input type='submit' name='delete' value='".'Smazat'."' onclick=\"return confirm('".'Opravdu?'."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["create"])){$h=$_GET["create"];$Md=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Qd=referencable_primary($h);$N=array();foreach($Qd
as$wa=>$d){$N[str_replace("`","``",$wa)."`".str_replace("`","``",$d["field"])]=$wa;}$uc=array();$vc=array();if($h!=""){$uc=fields($h);$vc=table_status($h);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($h),substr(ME,0,-1),'Tabulka byla odstraněna.');}else{$p=array();$Jc=array();ksort($_POST["fields"]);$Rc=reset($uc);$mb="FIRST";foreach($_POST["fields"]as$c=>$d){$D=$N[$d["type"]];$oc=(isset($D)?$Qd[$D]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$Ia=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Ia!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Ia;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$qe=process_field($d,$oc);if($qe!=process_field($Rc,$Rc)){$p[]=array($d["orig"],$qe,$mb);}if(isset($D)){$Jc[idf_escape($d["field"])]=($h!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($N[$d["type"]])." (".idf_escape($oc["field"]).")".(ereg("^($Ha)\$",$d["on_delete"])?" ON DELETE $d[on_delete]":"");}$mb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$Rc=next($uc);}}$fc="";if(in_array($_POST["partition_by"],$Md)){$Sc=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$o=$_POST["partition_values"][$c];$Sc[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($o!=""?" ($o)":" MAXVALUE");}}$fc.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Sc?" (".implode(",",$Sc)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($h!=""&&support("partitioning")){$fc.="\nREMOVE PARTITIONING";}$ia='Tabulka byla změněna.';if($h==""){cookie("adminer_engine",$_POST["Engine"]);$ia='Tabulka byla vytvořena.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ia,alter_table($h,$_POST["name"],$p,$Jc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$vc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$vc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$fc));}}page_header(($h!=""?'Pozměnit tabulku':'Vytvořit tabulku'),$q,array("table"=>$h),$h);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($ya["int"])?"int":(isset($ya["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($h!=""){$a=$vc;$a["name"]=$h;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($uc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Fb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($h);$k=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Fb ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$k->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Fb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Gd){$a["partition_names"][]=$Gd["PARTITION_NAME"];$a["partition_values"][]=$Gd["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$S=collations();$Tc=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Tc&&count($a["fields"])>$Tc){echo"<p class='error'>".h(sprintf('Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$rd=engines();foreach($rd
as$gc){if(!strcasecmp($gc,$a["Engine"])){$a["Engine"]=$gc;break;}}echo'
<form action="" method="post" id="form">
<p>
Název tabulky: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($h==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($rd?html_select("Engine",array(""=>"(".'úložiště'.")")+$rd,$a["Engine"]):""),' ',($S&&!ereg("sqlite|mssql",$r)?html_select("Collation",array(""=>"(".'porovnávání'.")")+$S,$a["Collation"]):""),' <input type="submit" value="Uložit">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$hb=($_POST?$_POST["comments"]:$a["Comment"]!="");if(!$_POST&&!$hb){foreach($a["fields"]as$d){if($d["comment"]!=""){$hb=true;break;}}}edit_fields($a["fields"],$S,"TABLE",$Tc,$N,$hb);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Výchozí hodnoty</label>
',(support("comment")?checkbox("comments",1,$hb,'Komentář',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($hb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Uložit">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$F,'">
';if(support("partitioning")){$zd=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Rozdělit podle',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Md,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Oddíly: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($zd||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($zd?"":" class='hidden'"),'>
<thead><tr><th>Název oddílu<th>Hodnoty</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$h=$_GET["indexes"];$nc=array("PRIMARY","UNIQUE","INDEX");$v=table_status($h);if(eregi("MyISAM|M?aria",$v["Engine"])){$nc[]="FULLTEXT";}$_=indexes($h);if($r=="sqlite"){unset($nc[0]);unset($_[""]);}if($_POST&&!$q&&!$_POST["add"]){$ca=array();foreach($_POST["indexes"]as$s){$f=$s["name"];if(in_array($s["type"],$nc)){$y=array();$Ab=array();$u=array();ksort($s["columns"]);foreach($s["columns"]as$c=>$fa){if($fa!=""){$va=$s["lengths"][$c];$u[]=idf_escape($fa).($va?"(".(+$va).")":"");$y[]=$fa;$Ab[]=($va?$va:null);}}if($y){$eb=$_[$f];if($eb){ksort($eb["columns"]);ksort($eb["lengths"]);if($s["type"]==$eb["type"]&&array_values($eb["columns"])===$y&&(!$eb["lengths"]||array_values($eb["lengths"])===$Ab)){unset($_[$f]);continue;}}$ca[]=array($s["type"],$f,"(".implode(", ",$u).")");}}}foreach($_
as$f=>$eb){$ca[]=array($eb["type"],$f,"DROP");}if(!$ca){redirect(ME."table=".urlencode($h));}queries_redirect(ME."table=".urlencode($h),'Indexy byly změněny.',alter_indexes($h,$ca));}page_header('Indexy',$q,array("table"=>$h),$h);$p=array_keys(fields($h));$a=array("indexes"=>$_);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$s){if($s["columns"][count($s["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$s=end($a["indexes"]);if($s["type"]||array_filter($s["columns"],'strlen')||array_filter($s["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$s){$a["indexes"][$c]["name"]=$c;$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indexu<th>Sloupec (délka)<th>Název</thead>
';$U=1;foreach($a["indexes"]as$s){echo"<tr><td>".html_select("indexes[$U][type]",array(-1=>"")+$nc,$s["type"],($U==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($s["columns"]);$g=1;foreach($s["columns"]as$c=>$fa){echo"<span>".html_select("indexes[$U][columns][$g]",array(-1=>"")+$p,$fa,($g==count($s["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($r=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$U][lengths][$g]' size='2' value='".h($s["lengths"][$c])."'> </span>";$g++;}echo"<td><input name='indexes[$U][name]' value='".h($s["name"])."'>\n";$U++;}echo'</table>
<p>
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat další"></noscript>
<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$q&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Databáze byla odstraněna.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Databáze byla přejmenována.',rename_database($_POST["name"],$_POST["collation"]));}else{$A=explode("\n",str_replace("\r","",$_POST["name"]));$yd=true;$Xa="";foreach($A
as$w){if(count($A)==1||$w!=""){if(!create_database($w,$_POST["collation"])){$yd=false;}$Xa=$w;}}queries_redirect(ME."db=".urlencode($Xa),'Databáze byla vytvořena.',$yd);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Databáze byla změněna.');}}page_header(DB!=""?'Pozměnit databázi':'Vytvořit databázi',$q,array(),DB);$S=collations();$f=DB;$ec=null;if($_POST){$f=$_POST["name"];$ec=$_POST["collation"];}elseif(DB!=""){$ec=db_collation(DB,$S);}elseif($r=="sql"){foreach(get_vals("SHOW GRANTS")as$Q){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Q,$m)&&$m[1]){$f=stripcslashes(idf_unescape("`$m[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($S?html_select("collation",array(""=>"(".'porovnávání'.")")+$S,$ec):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Uložit">
<?php
if(DB!=""){echo"<input type='submit' name='drop' value='".'Odstranit'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.2' alt='+' title='".'Přidat další'."'>\n";}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["call"])){$Ba=$_GET["call"];page_header('Zavolat'.": ".h($Ba),$q);$Ea=routine($Ba,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$nb=array();$Va=array();foreach($Ea["fields"]as$g=>$d){if(substr($d["inout"],-3)=="OUT"){$Va[$g]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$nb[]=$g;}}if(!$q&&$_POST){$xd=array();foreach($Ea["fields"]as$c=>$d){if(in_array($c,$nb)){$b=process_input($d);if($b===false){$b="''";}if(isset($Va[$c])){$i->query("SET @".idf_escape($d["field"])." = $b");}}$xd[]=(isset($Va[$c])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Ba)."(".implode(", ",$xd).")";echo"<p><code class='jush-$r'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upravit'."</a>\n";if(!$i->multi_query($j)){echo"<p class='error'>".error()."\n";}else{$H=connect();if(is_object($H)){$H->select_db(DB);}do{$k=$i->store_result();if(is_object($k)){select($k,$H);}else{echo"<p class='message'>".lang(array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),$i->affected_rows)."\n";}}while($i->next_result());if($Va){select($i->query("SELECT ".implode(", ",$Va)));}}}echo'
<form action="" method="post">
';if($nb){echo"<table cellspacing='0'>\n";foreach($nb
as$c){$d=$Ea["fields"][$c];$f=$d["field"];echo"<tr><th>".$n->fieldName($d);$o=$_POST["fields"][$f];if($o!=""){if($d["type"]=="enum"){$o=+$o;}if($d["type"]=="set"){$o=array_sum($o);}}input($d,$o,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Zavolat">
<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["foreign"])){$h=$_GET["foreign"];if($_POST&&!$q&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($h)."\nDROP ".($r=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($h),'Cizí klíč byl odstraněn.');}else{$ua=array_filter($_POST["source"],'strlen');ksort($ua);$ma=array();foreach($ua
as$c=>$b){$ma[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($h).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$ua)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$ma)).")".(ereg("^($Ha)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($Ha)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($h),($_GET["name"]!=""?'Cizí klíč byl změněn.':'Cizí klíč byl vytvořen.'));$q='Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.'."<br>$q";}}page_header('Cizí klíč',$q,array("table"=>$h),$h);$a=array("table"=>$h,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$N=foreign_keys($h);$a=$N[$_GET["name"]];$a["source"][]="";}$ua=array_keys(fields($h));$ma=($h===$a["table"]?$ua:array_keys(fields($a["table"])));$wd=array();foreach(table_status()as$f=>$v){if(fk_support($v)){$wd[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""&&$a["ns"]==""){echo'Cílová tabulka:
',html_select("table",$wd,$a["table"],"this.form['change-js'].value = '1'; if (!ajaxForm(this.form)) this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Změnit"></noscript>
<table cellspacing="0">
<thead><tr><th>Zdroj<th>Cíl</thead>
';$U=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".(+$c)."]",array(-1=>"")+$ua,$b,($U==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$c)."]",$ma,$a["target"][$c]);$U++;}echo'</table>
<p>
Při smazání: ',html_select("on_delete",array(-1=>"")+explode("|",$Ha),$a["on_delete"]),' Při změně: ',html_select("on_update",array(-1=>"")+explode("|",$Ha),$a["on_update"]),'<p>
<input type="submit" value="Uložit">
<noscript><p><input type="submit" name="add" value="Přidat sloupec"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["view"])){$h=$_GET["view"];$La=false;if($_POST&&!$q){$La=drop_create("DROP VIEW ".table($h),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.',$h);}page_header(($h!=""?'Pozměnit pohled':'Vytvořit pohled'),$q,array("table"=>$h),$h);$a=array();if($_POST){$a=$_POST;}elseif($h!=""){$a=view($h);$a["name"]=$h;}echo'
<form action="" method="post">
<p>Název: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
';if($La){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložit">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["event"])){$Ua=$_GET["event"];$_d=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$md=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$q){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Ua),substr(ME,0,-1),'Událost byla odstraněna.');}elseif(in_array($_POST["INTERVAL_FIELD"],$_d)&&isset($md[$_POST["STATUS"]])){$Ed="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($Ua!=""?'Událost byla změněna.':'Událost byla vytvořena.'),queries(($Ua!=""?"ALTER EVENT ".idf_escape($Ua).$Ed.($Ua!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Ed)."\n".$md[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($Ua!=""?'Pozměnit událost'.": ".h($Ua):'Vytvořit událost'),$q);$a=array();if($_POST){$a=$_POST;}elseif($Ua!=""){$G=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($Ua));$a=reset($G);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Název<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Začátek<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Konec<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Každých<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$_d,$a["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$md,$a["STATUS"]),'<tr><th>Komentář<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Po dokončení zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Uložit">
';if($Ua!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["procedure"])){$Ba=$_GET["procedure"];$Ea=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$bd=routine_languages();$La=false;if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$u=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$u[]=(ereg("^($Hb)\$",$d["inout"])?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$La=drop_create("DROP $Ea ".idf_escape($Ba),"CREATE $Ea ".idf_escape($_POST["name"])." (".implode(", ",$u).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$bd)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.',$Ba);}page_header(($Ba!=""?(isset($_GET["function"])?'Změnit funkci':'Změnit proceduru').": ".h($Ba):(isset($_GET["function"])?'Vytvořit funkci':'Vytvořit proceduru')),$q);$S=get_vals("SHOW CHARACTER SET");sort($S);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Ba!=""){$a=routine($Ba,$Ea);$a["name"]=$Ba;}echo'
<form action="" method="post" id="form">
<p>Název: <input name="name" value="',h($a["name"]),'" maxlength="64">
',($bd?'Jazyk'.": ".html_select("language",$bd,$a["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$S,$Ea);if(isset($_GET["function"])){echo"<tr><td>".'Návratový typ';edit_type("returns",$a["returns"],$S);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="submit" value="Uložit">
';if($Ba!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}if($La){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["trigger"])){$h=$_GET["trigger"];$wc=trigger_options();$Dd=array("INSERT","UPDATE","DELETE");$La=false;if($_POST&&!$q&&in_array($_POST["Timing"],$wc["Timing"])&&in_array($_POST["Event"],$Dd)&&in_array($_POST["Type"],$wc["Type"])){$Cd=" $_POST[Timing] $_POST[Event]";$fb=" ON ".table($h);$La=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($r=="pgsql"?$fb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($r=="mssql"?$fb.$Cd:$Cd.$fb).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($h),'Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Změnit trigger'.": ".h($_GET["name"]):'Vytvořit trigger'),$q,array("table"=>$h));$a=array("Trigger"=>$h."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Čas<td>',html_select("Timing",$wc["Timing"],$a["Timing"],"if (/^".preg_quote($h,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($h)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Událost<td>',html_select("Event",$Dd,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$wc["Type"],$a["Type"]),'</table>
<p>Název: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="submit" value="Uložit">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}if($La){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["user"])){$nd=$_GET["user"];$ba=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$xc){$ba[$xc][$a["Privilege"]]=$a["Comment"];}}$ba["Server Admin"]+=$ba["File access on server"];$ba["Databases"]["Create routine"]=$ba["Procedures"]["Create routine"];unset($ba["Procedures"]["Create routine"]);$ba["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$ba["Columns"][$b]=$ba["Tables"][$b];}unset($ba["Server Admin"]["Usage"]);foreach($ba["Tables"]as$c=>$b){unset($ba["Databases"][$c]);}$Mb=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$Mb[$b]=(array)$Mb[$b]+(array)$_POST["grants"][$c];}}$Sa=array();$Bc="";if(isset($_GET["host"])&&($k=$i->query("SHOW GRANTS FOR ".q($nd)."@".q($_GET["host"])))){while($a=$k->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$m)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$m[1],$da,PREG_SET_ORDER)){foreach($da
as$b){if($b[1]!="USAGE"){$Sa["$m[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Sa["$m[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$m)){$Bc=$m[1];}}}if($_POST&&!$q){$Ib=(isset($_GET["host"])?q($nd)."@".q($_GET["host"]):"''");$Qa=q($_POST["user"])."@".q($_POST["host"]);$qd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Ib",ME."privileges=",'Uživatel byl odstraněn.');}else{if($Ib!=$Qa){$q=!queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Qa IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $qd");}elseif($_POST["pass"]!=$Bc||!$_POST["hashed"]){queries("SET PASSWORD FOR $Qa = ".($_POST["hashed"]?$qd:"PASSWORD($qd)"));}if(!$q){$Qb=array();foreach($Mb
as$Pa=>$Q){if(isset($_GET["grant"])){$Q=array_filter($Q);}$Q=array_keys($Q);if(isset($_GET["grant"])){$Qb=array_diff(array_keys(array_filter($Mb[$Pa],'strlen')),$Q);}elseif($Ib==$Qa){$fe=array_keys((array)$Sa[$Pa]);$Qb=array_diff($fe,$Q);$Q=array_diff($Q,$fe);unset($Sa[$Pa]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Pa,$m)&&(!grant("REVOKE",$Qb,$m[2]," ON $m[1] FROM $Qa")||!grant("GRANT",$Q,$m[2]," ON $m[1] TO $Qa"))){$q=true;break;}}}if(!$q&&isset($_GET["host"])){if($Ib!=$Qa){queries("DROP USER $Ib");}elseif(!isset($_GET["grant"])){foreach($Sa
as$Pa=>$Qb){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Pa,$m)){grant("REVOKE",array_keys($Qb),$m[2]," ON $m[1] FROM $Qa");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Uživatel byl změněn.':'Uživatel byl vytvořen.'),!$q);if($Ib!=$Qa){$i->query("DROP USER $Qa");}}}page_header((isset($_GET["host"])?'Uživatel'.": ".h("$nd@$_GET[host]"):'Vytvořit uživatele'),$q,array("privileges"=>array('','Oprávnění')));if($_POST){$a=$_POST;$Sa=$Mb;}else{$a=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Bc;if($Bc!=""){$a["hashed"]=true;}$Sa[DB!=""&&!isset($_GET["host"])?idf_escape(addcslashes(DB,"%_")).".*":""]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Uživatel<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Heslo<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Zahašované',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Oprávnění'."</a>";$g=0;foreach($Sa
as$Pa=>$Q){echo'<th>'.($Pa!="*.*"?"<input name='objects[$g]' value='".h($Pa)."' size='10'>":"<input type='hidden' name='objects[$g]' value='*.*' size='10'>*.*");$g++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Databáze',"Tables"=>'Tabulka',"Columns"=>'Sloupec',"Procedures"=>'Procedura',)as$xc=>$Sb){foreach((array)$ba[$xc]as$Ob=>$cb){echo"<tr".odd()."><td".($Sb?">$Sb<td":" colspan='2'").' lang="en" title="'.h($cb).'">'.h($Ob);$g=0;foreach($Sa
as$Pa=>$Q){$f="'grants[$g][".h(strtoupper($Ob))."]'";$o=$Q[strtoupper($Ob)];if($xc=="Server Admin"&&$Pa!=(isset($Sa["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($o?" selected":"").">".'Povolit'."<option value='0'".($o=="0"?" selected":"").">".'Zakázat'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($o?" checked":"").($Ob=="All privileges"?" id='grants-$g-all'":($Ob=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$g-all');\"")).">";}$g++;}}}echo"</table>\n",'<p>
<input type="submit" value="Uložit">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstranit"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$q){$kd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$kd++;}}queries_redirect(ME."processlist=",lang(array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),$kd),$kd||!$_POST["kill"]);}page_header('Seznam procesů',$q);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$g=-1;foreach(process_list()as$g=>$a){if(!$g){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$a["Id"],0):"");foreach($a
as$c=>$b){echo"<td>".(($r=="sql"?$c=="Info"&&$b!="":$c=="current_query"&&$b!="<IDLE>")?"<code class='jush-$r'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Upravit'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>
';if(support("kill")){echo($g+1)."/".sprintf('%d celkem',$i->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Ukončit'."'>\n";}echo'<input type="hidden" name="token" value="',$F,'">
</form>
';}elseif(isset($_GET["select"])){$h=$_GET["select"];$v=table_status($h);$_=indexes($h);$p=fields($h);$N=column_foreign_keys($h);if($v["Oid"]=="t"){$_[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$lc);$oe=array();$y=array();$sb=null;foreach($p
as$c=>$d){$f=$n->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$y[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$sb=$n->selectLengthProcess();}}$oe+=$d["privileges"];}list($z,$Z)=$n->selectColumnsProcess($y,$_);$x=$n->selectSearchProcess($p,$_);$Ga=$n->selectOrderProcess($p,$_);$W=$n->selectLimitProcess();$Fb=($z?implode(", ",$z):($v["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($h);$jd=($Z&&count($Z)<count($z)?"\nGROUP BY ".implode(", ",$Z):"").($Ga?"\nORDER BY ".implode(", ",$Ga):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ma=>$a){echo$i->result("SELECT".limit(idf_escape(key($a))." FROM ".table($h)," WHERE ".where_check($Ma).($x?" AND ".implode(" AND ",$x):"").($Ga?" ORDER BY ".implode(", ",$Ga):""),1));}exit;}if($_POST&&!$q){$me="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Kc=$Jb=null;foreach($_
as$s){if($s["type"]=="PRIMARY"){$Kc=array_flip($s["columns"]);$Jb=($z?$Kc:array());break;}}foreach((array)$Jb
as$c=>$b){if(in_array(idf_escape($c),$z)){unset($Jb[$c]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($h);$n->dumpTable($h,"");if(!is_array($_POST["check"])||$Jb===array()){$Bb=$x;if(is_array($_POST["check"])){$Bb[]="($me)";}$j="SELECT $Fb".($Bb?"\nWHERE ".implode(" AND ",$Bb):"").$jd;}else{$ee=array();foreach($_POST["check"]as$b){$ee[]="(SELECT".limit($Fb,"\nWHERE ".($x?implode(" AND ",$x)." AND ":"").where_check($b).$jd,1).")";}$j=implode(" UNION ALL ",$ee);}$n->dumpData($h,"table",$j);exit;}if(!$n->selectEmailProcess($x,$N)){if($_POST["save"]||$_POST["delete"]){$k=true;$Za=0;$j=table($h);$u=array();if(!$_POST["delete"]){foreach($y
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$u[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$u[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($u)).")\nSELECT ".implode(", ",$u)."\nFROM ".table($h):" SET\n".implode(",\n",$u));}if($_POST["delete"]||$u){$mc="UPDATE";if($_POST["delete"]){$mc="DELETE";$j="FROM $j";}if($_POST["clone"]){$mc="INSERT";$j="INTO $j";}if($_POST["all"]||($Jb===array()&&$_POST["check"])||count($Z)<count($z)){$k=queries($mc." $j".($_POST["all"]?($x?"\nWHERE ".implode(" AND ",$x):""):"\nWHERE $me"));$Za=$i->affected_rows;}else{foreach((array)$_POST["check"]as$b){$k=queries($mc.limit1($j,"\nWHERE ".where_check($b)));if(!$k){break;}$Za+=$i->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$Za),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$q='Dvojklikněte na políčko, které chcete změnit.';}else{$k=true;$Za=0;foreach($_POST["val"]as$Ma=>$a){$u=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$u[]=idf_escape($c)." = ".(ereg('char|text',$p[$c]["type"])||$b!=""?$n->processInput($p[$c],$b):"NULL");}$j=table($h)." SET ".implode(", ",$u);$Bb=" WHERE ".where_check($Ma).($x?" AND ".implode(" AND ",$x):"");$k=queries("UPDATE".(count($Z)<count($z)?" $j$Bb":limit1($j,$Bb)));if(!$k){break;}$Za+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),$Za),$k);}}elseif(is_string($ra=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($lc["output"])."&format=".urlencode($_POST["separator"]));$k=true;$Ra=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$ra,$da);$Za=count($da[0]);begin();$Zb=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($da[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Zb]*)$Zb~",$b.$Zb,$dd);if(!$c&&!array_diff($dd[1],$Ra)){$Ra=$dd[1];$Za--;}else{$u=array();foreach($dd[1]as$g=>$Ac){$u[idf_escape($Ra[$g])]=($Ac==""&&$p[$Ra[$g]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ac))));}$k=insert_update($h,$u,$Kc);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),$Za),$k);queries("ROLLBACK");}else{$q=upload_error($ra);}}}$wa=$n->tableName($v);page_header('Vypsat'.": $wa",$q);session_write_close();$u=null;if(isset($oe["insert"])){$u="";foreach((array)$_GET["where"]as$b){if(count($N[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$u.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$n->selectLinks($v,$u);if(!$y){echo"<p class='error'>".'Nepodařilo se vypsat tabulku'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($h).'">',"</div>\n";$n->selectColumnsPrint($z,$y);$n->selectSearchPrint($x,$y,$_);$n->selectOrderPrint($Ga,$y,$_);$n->selectLimitPrint($W);$n->selectLengthPrint($sb);$n->selectActionPrint();echo"</form>\n";$K=$_GET["page"];if($K=="last"){$Wa=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));$K=floor(max(0,$Wa-1)/$W);}$j="SELECT".limit((+$W&&$Z&&count($Z)<count($z)&&$r=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Fb,($x?"\nWHERE ".implode(" AND ",$x):"").$jd,($W!=""?+$W:null),($K?$W*$K:0),"\n");echo$n->selectQuery($j);$k=$i->query($j);if(!$k){echo"<p class='error'>".error()."\n";}else{if($r=="mssql"){$k->seek($W*$K);}$kc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$G=array();while($a=$k->fetch_assoc()){if($K&&$r=="oracle"){unset($a["RNUM"]);}$G[]=$a;}if($_GET["page"]!="last"){$Wa=(+$W&&$Z&&count($Z)<count($z)?($r=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($j) x")):count($G));}if(!$G){echo"<p class='message'>".'Žádné řádky.'."\n";}else{$cd=$n->backwardKeys($h,$wa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Z&&$z?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upravit'."</a>");$fd=array();$Y=array();reset($z);$Td=1;foreach($G[0]as$c=>$b){if($v["Oid"]!="t"||$c!="oid"){$b=$_GET["columns"][key($z)];$d=$p[$z?($b?$b["col"]:current($z)):$c];$f=($d?$n->fieldName($d,$Td):"*");if($f!=""){$Td++;$fd[$c]=$f;$fa=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($Ga[0]==$fa||$Ga[0]==$c||(!$Ga&&count($Z)<count($z)&&$Z[0]==$fa)?'&desc%5B0%5D=1':'')).'">'.(!$z||$b?apply_sql_function($b["fun"],$f):h(current($z)))."</a>";}$Y[$c]=$b["fun"];next($z);}}$Ab=array();if($_GET["modify"]){foreach($G
as$a){foreach($a
as$c=>$b){$Ab[$c]=max($Ab[$c],min(40,strlen(utf8_decode($b))));}}}echo($cd?"<th>".'Vztahy':"")."</thead>\n";foreach($n->rowDescriptions($G,$N)as$O=>$a){$gd=unique_array($G[$O],$_);$Ma="";foreach($gd
as$c=>$b){$Ma.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$Z&&$z?"":"<td>".checkbox("check[]",substr($Ma,1),in_array(substr($Ma,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Z)<count($z)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($h).$Ma)."'>".'upravit'."</a>"));foreach($a
as$c=>$b){if(isset($fd[$c])){$d=$p[$c];if($b!=""&&(!isset($kc[$c])||$kc[$c]!="")){$kc[$c]=(is_mail($b)?$fd[$c]:"");}$C="";$b=$n->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$C=h(ME.'download='.urlencode($h).'&field='.urlencode($c).$Ma);}if($b===""){$b="&nbsp;";}elseif($sb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$sb));}else{$b=h($b);}if(!$C){foreach((array)$N[$c]as$D){if(count($N[$c])==1||end($D["source"])==$c){$C="";foreach($D["source"]as$g=>$ua){$C.=where_link($g,$D["target"][$g],$G[$O][$ua]);}$C=h(($D["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($D["db"]),ME):ME).'select='.urlencode($D["table"]).$C);if(count($D["source"])==1){break;}}}}if($c=="COUNT(*)"){$C=h(ME."select=".urlencode($h));$g=0;foreach((array)$_GET["where"]as$t){if(!array_key_exists($t["col"],$gd)){$C.=h(where_link($g++,$t["col"],$t["val"],$t["op"]));}}foreach($gd
as$Aa=>$t){$C.=h(where_link($g++,$Aa,$t));}}}if(!$C){if(is_mail($b)){$C="mailto:$b";}if($Xd=is_url($a[$c])){$C=($Xd=="http"&&$Vb?$a[$c]:"$Xd://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$E=h("val[$Ma][".bracket_escape($c)."]");$o=$_POST["val"][$Ma][bracket_escape($c)];$Yd=h(isset($o)?$o:$a[$c]);$Xe=strpos($b,"<i>...</i>");$ce=is_utf8($b)&&$G[$O][$c]==$a[$c]&&!$Y[$c];$be=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$ce)||isset($o)?"<td>".($be?"<textarea name='$E' cols='30' rows='".(substr_count($a[$c],"\n")+1)."'>$Yd</textarea>":"<input name='$E' value='$Yd' size='$Ab[$c]'>"):"<td id='$E' ondblclick=\"".($ce?"selectDblClick(this, event".($Xe?", 2":($be?", 1":"")).")":"alert('".h('Ke změně této hodnoty použijte odkaz upravit.')."')").";\">".$n->selectVal($b,$C,$d));}}if($cd){echo"<td>";}$n->backwardKeysPrint($cd,$G[$O]);echo"</tr>\n";}echo"</table>\n";}if($G||$K){$id=true;if($_GET["page"]!="last"&&+$W&&count($Z)>=count($z)&&($Wa>=$W||$K)){$Wa=found_rows($v,$x);if($Wa<max(1e4,2*($K+1)*$W)){ob_flush();flush();$Wa=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));}else{$id=false;}}echo"<p class='pages'>";if(+$W&&$Wa>$W){$hd=floor(($Wa-1)/$W);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($K+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$K).($K>5?" ...":"");for($g=max(1,$K-4);$g<min($hd,$K+5);$g++){echo
pagination($g,$K);}echo($K+5<$hd?" ...":"").($id?pagination($hd,$K):' <a href="'.h(remove_from_uri()."&page=last").'">'.'poslední'."</a>");}echo" (".($id?"":"~ ").lang(array('%d řádek','%d řádky','%d řádků'),$Wa).") ".checkbox("all",1,0,'celý výsledek')."\n";if($n->selectCommandPrint()){?>
<fieldset><legend>Upravit</legend><div>
<input type="submit" value="Uložit" title="Dvojklikněte na políčko, které chcete změnit." class="jsonly">
<input type="submit" name="edit" value="Upravit">
<input type="submit" name="clone" value="Klonovat">
<input type="submit" name="delete" value="Smazat" onclick="return confirm('Opravdu? (' + (this.form['all'].checked ? <?php echo$Wa,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$_a=$n->dumpOutput();echo($_a?html_select("output",$_a,$lc["output"])." ":""),html_select("format",$n->dumpFormat(),$lc["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($n->selectImportPrint()){print_fieldset("import",'Import',!$G);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$lc["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$F'>\n","</div></fieldset>\n";}$n->selectEmailPrint(array_filter($kc,'strlen'),$y);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$xb=isset($_GET["status"]);page_header($xb?'Stav':'Proměnné');$Zd=($xb?show_status():show_variables());if(!$Zd){echo"<p class='message'>".'Žádné řádky.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($Zd
as$c=>$b){echo"<tr>","<th><code class='jush-".$r.($xb?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$jc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$v){$E=js_escape($v["Name"]);json_row("Comment-$E",nbsp($v["Comment"]));if(!is_view($v)){foreach(array("Engine","Collation")as$c){json_row("$c-$E",nbsp($v[$c]));}foreach($jc+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($v[$c]!=""){$b=number_format($v[$c],0,'.',' ');json_row("$c-$E",($c=="Rows"&&$v["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($jc[$c])){$jc[$c]+=($v["Engine"]!="InnoDB"||$c!="Data_free"?$v[$c]:0);}}elseif(array_key_exists($c,$v)){json_row("$c-$E");}}}}foreach($jc
as$c=>$b){json_row("sum-$c",number_format($b,0,'.',' '));}json_row("");}else{foreach(count_tables(get_databases())as$w=>$b){json_row("tables-".js_escape($w),$b);}json_row("");}exit;}else{$ie=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($ie&&!$q&&!$_POST["search"]){$k=true;$ia="";if($r=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$k=truncate_tables($_POST["tables"]);}$ia='Tabulky byly vyprázdněny.';}elseif($_POST["move"]){$k=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ia='Tabulky byly přesunuty.';}elseif($_POST["copy"]){$k=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ia='Tabulky byly zkopírovány.';}elseif($_POST["drop"]){if($_POST["views"]){$k=drop_views($_POST["views"]);}if($k&&$_POST["tables"]){$k=drop_tables($_POST["tables"]);}$ia='Tabulky byly odstraněny.';}elseif($_POST["tables"]&&($k=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$k->fetch_assoc()){$ia.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ia,$k);}page_header(($_GET["ns"]==""?'Databáze'.": ".h(DB):'Schéma'.": ".h($_GET["ns"])),$q,true);if($n->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tabulky a pohledy'."</h3>\n";$ic=tables_list();if(!$ic){echo"<p class='message'>".'Žádné tabulky.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Vyhledat data v tabulkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Vyhledat'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabulka'.'<td>'.'Úložiště'.'<td>'.'Porovnávání'.'<td>'.'Velikost dat'.'<td>'.'Velikost indexů'.'<td>'.'Volné místo'.'<td>'.'Auto Increment'.'<td>'.'Řádků'.(support("comment")?'<td>'.'Komentář':'')."</thead>\n";foreach($ic
as$f=>$M){$yb=(isset($M)&&!eregi("table",$M));echo'<tr'.odd().'><td>'.checkbox(($yb?"views[]":"tables[]"),$f,in_array($f,$ie,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($yb){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'Pohled'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$C){echo($C?"<td align='right'><a href='".h(ME."$C=").urlencode($f)."' id='$c-".h($f)."'>?</a>":"<td id='$c-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkem',count($ic)),"<td>".nbsp($r=="sql"?$i->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p>".($r=="sql"?"<input type='submit' value='".'Analyzovat'."'> <input type='submit' name='optimize' value='".'Optimalizovat'."'> <input type='submit' name='check' value='".'Zkontrolovat'."'> <input type='submit' name='repair' value='".'Opravit'."'> ":"")."<input type='submit' name='truncate' value='".'Vyprázdnit'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Odstranit'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$A=(support("scheme")?schemas():get_databases());if(count($A)!=1&&$r!="sqlite"){$w=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Přesunout do jiné databáze'.": ",($A?html_select("target",$A,$w):'<input name="target" value="'.h($w).'">')," <input type='submit' name='move' value='".'Přesunout'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Zkopírovat'."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$F'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Vytvořit tabulku'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Vytvořit pohled'."</a>\n";}if(support("routine")){echo"<h3>".'Procedury a funkce'."</h3>\n";$Hd=routines();if($Hd){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Název'.'<td>'.'Typ'.'<td>'.'Návratový typ'."<td>&nbsp;</thead>\n";odd('');foreach($Hd
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Změnit'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Vytvořit proceduru'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Vytvořit funkci'."</a>\n";}if(support("event")){echo"<h3>".'Události'."</h3>\n";$G=get_rows("SHOW EVENTS");if($G){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Název'."<td>".'Plán'."<td>".'Začátek'."<td>".'Konec'."</thead>\n";foreach($G
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'V daný čas'."<td>".$a["Execute at"]:'Každých'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Vytvořit událost'."</a>\n";}if($ic){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();