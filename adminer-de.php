<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$Qd=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Qd){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$re=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($re){$$b=$re;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
function bodyLoad(version){onpopstate(history);var jushRoot=location.protocol + '//www.adminer.org/static/';var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
function loginDriver(driver){var trs=driver.parentNode.parentNode.parentNode.rows;for(var i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
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
function indexesAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var spans=row.getElementsByTagName('span');for(var i=0;i<spans.length-1;i++){row.removeChild(spans[i]);}
var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var input=row.getElementsByTagName('input')[0];input.name=input.name.replace(/indexes\[\d+/,'$&1');input.value='';field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddColumn(field){field.onchange=function(){};var column=field.parentNode.cloneNode(true);var select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;}}
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
connection(){global$g;return$g;}function
idf_unescape($Q){$sb=substr($Q,-1);return
str_replace($sb.$sb,$sb,substr($Q,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($ub){if(get_magic_quotes_gpc()){while(list($e,$b)=each($ub)){foreach($b
as$Ha=>$y){unset($ub[$e][$Ha]);if(is_array($y)){$ub[$e][stripslashes($Ha)]=$y;$ub[]=&$ub[$e][stripslashes($Ha)];}else{$ub[$e][stripslashes($Ha)]=($Qd?$y:stripslashes($y));}}}}}function
bracket_escape($Q,$kf=false){static$Td=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Q,($kf?array_flip($Td):$Td));}function
h($J){return
htmlspecialchars($J,ENT_QUOTES);}function
nbsp($J){return(trim($J)!=""?h($J):"&nbsp;");}function
nl_br($J){return
str_replace("\n","<br>",$J);}function
checkbox($f,$q,$fb,$Se="",$bf=""){static$R=0;$R++;$c="<input type='checkbox'".($f?" name='$f' value='".h($q)."'":" class='jsonly'").($fb?" checked":"").($bf?" onclick=\"$bf\"":"")." id='checkbox-$R'>";return($Se!=""?"<label for='checkbox-$R'>$c".h($Se)."</label>":$c);}function
optionlist($Zc,$Gf=null,$ue=false){$c="";foreach($Zc
as$Ha=>$y){$ve=array($Ha=>$y);if(is_array($y)){$c.='<optgroup label="'.h($Ha).'">';$ve=$y;}foreach($ve
as$e=>$b){$c.='<option'.($ue||is_string($e)?' value="'.h($e).'"':'').(($ue||is_string($e)?(string)$e:$b)===$Gf?' selected':'').'>'.h($b);}if(is_array($y)){$c.='</optgroup>';}}return$c;}function
html_select($f,$Zc,$q="",$Lb=true){if($Lb){return"<select name='".h($f)."'".(is_string($Lb)?" onchange=\"$Lb\"":"").">".optionlist($Zc,$q)."</select>";}$c="";foreach($Zc
as$e=>$b){$c.="<label><input type='radio' name='".h($f)."' value='".h($e)."'".($e==$q?" checked":"").">".h($b)."</label>";}return$c;}function
confirm($Jc="",$_f=false){return" onclick=\"".($_f?"eventStop(event); ":"")."return confirm('".'Sind Sie sicher ?'.($Jc?" (' + $Jc + ')":"")."');\"";}function
js_escape($J){return
addcslashes($J,"\r\n'\\/");}function
ini_bool($Bf){$b=ini_get($Bf);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$c;if(!isset($c)){$c=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$c;}function
q($J){global$g;return$g->quote($J);}function
get_vals($j,$C=0){global$g;$c=array();$i=$g->query($j);if(is_object($i)){while($a=$i->fetch_row()){$c[]=$a[$C];}}return$c;}function
get_key_vals($j,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();$i=$H->query($j);if(is_object($i)){while($a=$i->fetch_row()){$c[$a[0]]=$a[1];}}return$c;}function
get_rows($j,$H=null,$n="<p class='error'>"){global$g;if(!is_object($H)){$H=$g;}$c=array();$i=$H->query($j);if(is_object($i)){while($a=$i->fetch_assoc()){$c[]=$a;}}elseif(!$i&&$g->error&&$n&&defined("PAGE_HEADER")){echo$n.error()."\n";}return$c;}function
unique_array($a,$I){foreach($I
as$x){if(ereg("PRIMARY|UNIQUE",$x["type"])){$c=array();foreach($x["columns"]as$e){if(!isset($a[$e])){continue
2;}$c[$e]=$a[$e];}return$c;}}$c=array();foreach($a
as$e=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$e)){$c[$e]=$b;}}return$c;}function
where($s){global$v;$c=array();foreach((array)$s["where"]as$e=>$b){$c[]=idf_escape(bracket_escape($e,1)).(ereg('\\.',$b)||$v=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$s["null"]as$e){$c[]=idf_escape($e)." IS NULL";}return
implode(" AND ",$c);}function
where_check($b){parse_str($b,$Ee);remove_slashes(array(&$Ee));return
where($Ee);}function
where_link($k,$C,$q,$If="="){return"&where%5B$k%5D%5Bcol%5D=".urlencode($C)."&where%5B$k%5D%5Bop%5D=".urlencode((isset($q)?$If:"IS NULL"))."&where%5B$k%5D%5Bval%5D=".urlencode($q);}function
cookie($f,$q){global$tc;$rc=array($f,(ereg("\n",$q)?"":$q),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$tc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$rc[]=true;}return
call_user_func_array('setcookie',$rc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($e){return$_SESSION[$e][DRIVER][SERVER][$_GET["username"]];}function
set_session($e,$b){$_SESSION[$e][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Jb,$F,$O){global$la;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($la))."|username|".session_name()),$l);return"$l[1]?".(sid()?SID."&":"").($Jb!="server"||$F!=""?urlencode($Jb)."=".urlencode($F)."&":"")."username=".urlencode($O).($l[2]?"&$l[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($ga,$sa=null){if(isset($sa)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($ga)?$ga:$_SERVER["REQUEST_URI"]))][]=$sa;}if(isset($ga)){if($ga==""){$ga=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $ga");exit;}}function
query_redirect($j,$ga,$sa,$cd=true,$Nf=true,$le=false){global$g,$n,$o;if($Nf){$le=!$g->query($j);}$Dd="";if($j){$Dd=$o->messageQuery("$j;");}if($le){$n=error().$Dd;return
false;}if($cd){redirect($ga,$sa.$Dd);}return
true;}function
queries($j=null){global$g;static$kb=array();if(!isset($j)){return
implode(";\n",$kb);}$kb[]=(ereg(';$',$j)?"DELIMITER ;;\n$j;\nDELIMITER ":$j);return$g->query($j);}function
apply_queries($j,$E,$if='table'){foreach($E
as$h){if(!queries("$j ".$if($h))){return
false;}}return
true;}function
queries_redirect($ga,$sa,$cd){return
query_redirect(queries(),$ga,$sa,$cd,false,!$cd);}function
remove_from_uri($eb=""){return
substr(preg_replace("~(?<=[?&])($eb".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($aa,$ef){return" ".($aa==$ef?$aa+1:'<a href="'.h(remove_from_uri("page").($aa?"&page=$aa":"")).'">'.($aa+1)."</a>");}function
get_file($e,$xd=false){$Fa=$_FILES[$e];if(!$Fa||$Fa["error"]){return$Fa["error"];}$c=file_get_contents($xd&&ereg('\\.gz$',$Fa["name"])?"compress.zlib://$Fa[tmp_name]":($xd&&ereg('\\.bz2$',$Fa["name"])?"compress.bzip2://$Fa[tmp_name]":$Fa["tmp_name"]));if($xd){if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$c,$Wf)){$c=iconv("utf-16","utf-8",$c);}else{$c=ereg_replace("^\xEF\xBB\xBF","",$c);}}return$c;}function
upload_error($n){$Be=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?'Hochladen von Datei fehlgeschlagen.'.($Be?" ".sprintf('Maximal erlaubte Dateigrösse ist %sB.',$Be):""):'Datei existiert nicht.');}function
odd($c=' class="odd"'){static$k=0;if(!$c){$k=-1;}return($k++%
2?$c:'');}function
json_row($e,$b=null){static$ya=true;if($ya){echo"{";}if($e!=""){echo($ya?"":",")."\n\t\"".addcslashes($e,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$ya=false;}else{echo"\n}\n";$ya=true;}}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
repeat_pattern($ba,$X){return
str_repeat("$ba{0,65535}",$X/65535)."$ba{0,".($X
%
65535)."}";}function
shorten_utf8($J,$X=80,$gf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$X).")($)?)u",$J,$l)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$X).")($)?)",$J,$l);}return
h($l[1]).$gf.(isset($l[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($ub,$of=array()){while(list($e,$b)=each($ub)){if(is_array($b)){foreach($b
as$Ha=>$y){$ub[$e."[$Ha]"]=$y;}}elseif(!in_array($e,$of)){echo'<input type="hidden" name="'.h($e).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$o;$c=array();foreach($o->foreignKeys($h)as$A){foreach($A["source"]as$b){$c[$b][]=$A;}}return$c;}function
enum_input($z,$Ua,$d,$q,$Zb=null){global$o;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ta);$c=(isset($Zb)?"<label><input type='$z'$Ua value='$Zb'".((is_array($q)?in_array($Zb,$q):$q===0)?" checked":"")."><i>".'leer'."</i></label>":"");foreach($ta[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$fb=(is_int($q)?$q==$k+1:(is_array($q)?in_array($k+1,$q):$q===$b));$c.=" <label><input type='$z'$Ua value='".($k+1)."'".($fb?' checked':'').'>'.h($o->editVal($b,$d)).'</label>';}return$c;}function
input($d,$q,$K){global$S,$o,$v;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$te=($v=="mssql"&&$d["auto_increment"]);if($te&&!$_POST["save"]){$K=null;}$Z=(isset($_GET["select"])||$te?array("orig"=>'Original'):array())+$o->editFunctions($d);$Ua=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($Z[""])."<td>".$o->editInput($_GET["edit"],$d,$Ua,$q);}else{$ya=0;foreach($Z
as$e=>$b){if($e===""||!$b){break;}$ya++;}$Lb=($ya?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($ya > f.selectedIndex) f.selectedIndex = $ya;\"":"");$Ua.=$Lb;echo(count($Z)>1?html_select("function[$f]",$Z,!isset($K)||in_array($K,$Z)||isset($Z[$K])?$K:"","functionChange(this);"):nbsp(reset($Z))).'<td>';$we=$o->editInput($_GET["edit"],$d,$Ua,$q);if($we!=""){echo$we;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ta);foreach($ta[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$fb=(is_int($q)?($q>>$k)&1:in_array($b,explode(",",$q),true));echo" <label><input type='checkbox' name='fields[$f][$k]' value='".(1<<$k)."'".($fb?' checked':'')."$Lb>".h($o->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Lb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($v!="sqlite"||ereg("\n",$q)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ua>".h($q).'</textarea>';}else{$ld=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$l)?((ereg("binary",$d["type"])?2:1)*$l[1]+($l[3]?1:0)+($l[2]&&!$d["unsigned"]?1:0)):($S[$d["type"]]?$S[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($q)."'".($ld?" maxlength='$ld'":"").(ereg('char|binary',$d["type"])&&$ld>20?" size='40'":"")."$Ua>";}}}function
process_input($d){global$o;$Q=bracket_escape($d["field"]);$K=$_POST["function"][$Q];$q=$_POST["fields"][$Q];if($d["type"]=="enum"){if($q==-1){return
false;}if($q==""){return"NULL";}return+$q;}if($d["auto_increment"]&&$q==""){return
null;}if($K=="orig"){return
false;}if($K=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$q);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$Fa=get_file("fields-$Q");if(!is_string($Fa)){return
false;}return
q($Fa);}return$o->processInput($d,$q,$K);}function
search_tables(){global$o,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$oa=false;foreach(table_status()as$h=>$D){$f=$o->tableName($D);if(isset($D["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$i=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$o->selectSearchProcess(fields($h),array())),1));if($i->fetch_row()){if(!$oa){echo"<ul>\n";$oa=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($oa?"</ul>":"<p class='message'>".'Keine Tabellen.')."\n";}function
dump_headers($Lc,$fd=false){global$o;$c=$o->dumpHeaders($Lc,$fd);$La=$_POST["output"];if($La!="text"){header("Content-Disposition: attachment; filename=".($Lc!=""?friendly_url($Lc):"dump").".$c".($La!="file"&&!ereg('[^0-9a-z]',$La)?".$La":""));}session_write_close();return$c;}function
dump_csv($a){foreach($a
as$e=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$e]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($K,$C){return($K?($K=="unixepoch"?"DATETIME($C, '$K')":($K=="count distinct"?"COUNT(DISTINCT ":strtoupper("$K("))."$C)"):$C);}function
password_file(){$Bc=ini_get("upload_tmp_dir");if(!$Bc){if(function_exists('sys_get_temp_dir')){$Bc=sys_get_temp_dir();}else{$ja=@tempnam("","");if(!$ja){return
false;}$Bc=dirname($ja);unlink($ja);}}$ja="$Bc/adminer.key";$c=@file_get_contents($ja);if($c){return$c;}$Ka=@fopen($ja,"w");if($Ka){$c=md5(uniqid(mt_rand(),true));fwrite($Ka,$c);fclose($Ka);}return$c;}function
is_mail($vf){$Te='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$_c='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ba="$Te+(\\.$Te+)*@($_c?\\.)+$_c";return
preg_match("(^$ba(,\\s*$ba)*\$)i",$vf);}function
is_url($J){$_c='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($_c?\\.)+$_c(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$J,$l)?strtolower($l[1]):"");}function
print_fieldset($R,$wf,$xf=false){echo"<fieldset><legend><a href='#fieldset-$R' onclick=\"return !toggle('fieldset-$R');\">$wf</a></legend><div id='fieldset-$R'".($xf?"":" class='hidden'").">\n";}function
bold($uf){return($uf?" class='active'":"");}global$o,$g,$la,$Qb,$Bb,$n,$Z,$ib,$tc,$gc,$v,$tf,$Rf,$db,$Oa,$N,$Qf,$S,$lb,$zc;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$tc=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$rc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$tc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$rc[]=true;}call_user_func_array('session_set_cookie_params',$rc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'de';}function
lang($Df,$Ib){$Ac=($Ib==1||(!$Ib&&'de'=='fr')?0:('de'=='sl'&&(!$Ib||$Ib>2)?1:0)+((!$Ib||$Ib>=5)&&ereg('cs|sk|ru|sl|pl','de')?2:1));return
sprintf($Df[$Ac],$Ib);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($sf,$O,$T,$rf='auth_error'){set_exception_handler($rf);parent::__construct($sf,$O,$T);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Wa=false){$i=parent::query($j);if(!$i){$qf=$this->errorInfo();$this->error=$qf[2];return
false;}$this->store_result($i);return$i;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($i=null){if(!$i){$i=$this->_result;}if($i->columnCount()){$i->num_rows=$i->rowCount();return$i;}$this->affected_rows=$i->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$la=array();$la["sqlite"]="SQLite 3";$la["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$yc=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ja){$this->_link=new
SQLite3($ja);$sd=$this->_link->version();$this->server_info=$sd["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($J){return"'".$this->_link->escapeString($J)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetchArray();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$C=$this->_offset++;$z=$this->_result->columnType($C);return(object)array("name"=>$this->_result->columnName($C),"type"=>$z,"charsetnr"=>($z==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ja){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($ja);}function
query($j,$Wa=false){$pf=($Wa?"unbufferedQuery":"query");$i=@$this->_link->$pf($j,SQLITE_BOTH,$n);if(!$i){$this->error=$n;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($J){return"'".sqlite_escape_string($J)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetch();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$c=array();foreach($a
as$e=>$b){$c[($e[0]=='"'?idf_unescape($e):$e)]=$b;}return$c;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$ba='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ba\\.)?$ba\$~",$f,$l)){$h=($l[3]!=""?$l[3]:idf_unescape($l[2]));$f=($l[5]!=""?$l[5]:idf_unescape($l[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$h,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($ja){$this->dsn(DRIVER.":$ja","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($ja){if(is_readable($ja)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$ja)?$ja:dirname($_SERVER["SCRIPT_FILENAME"])."/$ja")." AS a")){$this->Min_SQLite($ja);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?$Pa."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($j,$s){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$s,1):" $j$s");}function
db_collation($t,$Y){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$a){$a["Auto_increment"]="";$c[$a["Name"]]=$a;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$a){$c[$a["name"]]["Auto_increment"]=$a["seq"];}return($f!=""?$c[$f]:$c);}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h){$c=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$a){$z=strtolower($a["type"]);$xa=$a["dflt_value"];$c[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$z)?"integer":(eregi("char|clob|text",$z)?"text":(eregi("blob",$z)?"blob":(eregi("real|floa|doub",$z)?"real":"numeric")))),"full_type"=>$z,"default"=>(ereg("'(.*)'",$xa,$l)?str_replace("''","'",$l[1]):($xa=="NULL"?null:$xa)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$z)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}return$c;}function
indexes($h,$H=null){$c=array();$Ma=array();foreach(fields($h)as$d){if($d["primary"]){$Ma[]=$d["field"];}}if($Ma){$c[""]=array("type"=>"PRIMARY","columns"=>$Ma,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$a){$c[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$c[$a["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($a["name"]).")")as$Yc){$c[$a["name"]]["columns"][]=$Yc["name"];}}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$a){$A=&$c[$a["id"]];if(!$A){$A=$a;}$A["source"][]=$a["from"];$A["target"][]=$a["to"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
check_sqlite_name($f){global$g;$Je="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Je)\$~",$f)){$g->error=sprintf('Bitte einen der Dateitypen %s benutzen.',str_replace("|",", ",$Je));return
false;}return
true;}function
create_database($t,$U){global$g;if(file_exists($t)){$g->error='Datei existiert schon.';return
false;}if(!check_sqlite_name($t)){return
false;}$w=new
Min_SQLite($t);$w->query('PRAGMA encoding = "UTF-8"');$w->query('CREATE TABLE adminer (i)');$w->query('DROP TABLE adminer');return
true;}function
drop_databases($_){global$g;$g->Min_SQLite(":memory:");foreach($_
as$t){if(!@unlink($t)){$g->error='Datei existiert schon.';return
false;}}return
true;}function
rename_database($f,$U){global$g;if(!check_sqlite_name($f)){return
false;}$g->Min_SQLite(":memory:");$g->error='Datei existiert schon.';return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$f,$p,$Ja,$Aa,$vb,$U,$Ra,$tb){$u=array();foreach($p
as$d){if($d[1]){$u[]=($h!=""&&$d[0]==""?"ADD ":"  ").implode($d[1]);}}$u=array_merge($u,$Ja);if($h!=""){foreach($u
as$b){if(!queries("ALTER TABLE ".table($h)." $b")){return
false;}}if($h!=$f&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)")){return
false;}if($Ra){queries("UPDATE sqlite_sequence SET seq = $Ra WHERE name = ".q($f));}return
true;}function
alter_indexes($h,$u){foreach($u
as$b){if(!queries(($b[2]?"DROP INDEX":"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h))." $b[1]")){return
false;}}return
true;}function
truncate_tables($E){return
apply_queries("DELETE FROM",$E);}function
drop_views($W){return
apply_queries("DROP VIEW",$W);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
move_tables($E,$W,$ha){return
false;}function
trigger($f){global$g;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$l);return
array("Timing"=>strtoupper($l[1]),"Event"=>strtoupper($l[2]),"Trigger"=>$f,"Statement"=>$l[3]);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$a){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$l);$c[$a["name"]]=array($l[1],$l[2]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Ma){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Id){return
true;}function
create_sql($h,$Ra){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($da){}function
trigger_sql($h,$V){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$g;$c=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$e){$c[$e]=$g->result("PRAGMA $e");}return$c;}function
show_status(){$c=array();foreach(get_vals("PRAGMA compile_options")as$nf){list($e,$b)=explode("=",$nf,2);$c[$e]=$b;}return$c;}function
support($rb){return
ereg('^(view|trigger|variables|status|dump)$',$rb);}$v="sqlite";$S=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Oa=array_keys($S);$lb=array();$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Z=array("hex","length","lower","round","unixepoch","upper");$ib=array("avg","count","count distinct","group_concat","max","min","sum");$Qb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$la["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$yc=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($hf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$O,$T){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' user='".addcslashes($O,"'\\")."' password='".addcslashes($T,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$sd=pg_version($this->_link);$this->server_info=$sd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($J){return"'".pg_escape_string($this->_link,$J)."'";}function
select_db($da){if($da==DB){return$this->_database;}$c=@pg_connect("$this->_string dbname='".addcslashes($da,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($c){$this->_link=$c;}return$c;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($j,$Wa=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
pg_fetch_result($i->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=pg_num_rows($i);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;if(function_exists('pg_field_table')){$c->orgtable=pg_field_table($this->_result,$C);}$c->name=pg_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=pg_field_type($this->_result,$C);$c->charsetnr=($c->type=="bytea"?63:0);return$c;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($F,$O,$T){$J="pgsql:host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($J.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$O,$T);return
true;}function
select_db($da){return(DB==$da);}function
close(){}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$ua=$o->credentials();if($g->connect($ua[0],$ua[1],$ua[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?$Pa."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($j,$s){return" $j$s";}function
db_collation($t,$Y){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$a){$c[$a["Name"]]=$a;}return($f!=""?$c[$f]:$c);}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($h)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$a){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$l);list(,$a["type"],,$a["length"])=$l;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$c[$a["field"]]=$a;}return$c;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();$Ce=$H->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$B=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Ce AND attnum > 0",$H);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Ce AND ci.oid = i.indexrelid",$H)as$a){$c[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$c[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$ff){$c[$a["relname"]]["columns"][]=$B[$ff];}$c[$a["relname"]]["lengths"]=array();}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($h))as$a){$A=&$c[$a["constraint_name"]];if(!$A){$A=$a;}$A["source"][]=$a["column_name"];$A["target"][]=$a["ref"];}return$c;}function
view($f){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($t){return($t=="information_schema");}function
error(){global$g;$c=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$c,$l)){$c=$l[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($l[3]).'})(.*)~','\\1<b>\\2</b>',$l[2]).$l[4];}return
nl_br($c);}function
exact_value($b){return
q($b);}function
create_database($t,$U){return
queries("CREATE DATABASE ".idf_escape($t).($U?" ENCODING ".idf_escape($U):""));}function
drop_databases($_){global$g;$g->close();return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($h,$f,$p,$Ja,$Aa,$vb,$U,$Ra,$tb){$u=array();$kb=array();foreach($p
as$d){$C=idf_escape($d[0]);$b=$d[1];if(!$b){$u[]="DROP $C";}else{$jd=$b[5];unset($b[5]);if(isset($b[6])&&$d[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($d[0]==""){$u[]=($h!=""?"ADD ":"  ").implode($b);}else{if($C!=$b[0]){$kb[]="ALTER TABLE ".table($h)." RENAME $C TO $b[0]";}$u[]="ALTER $C TYPE$b[1]";if(!$b[6]){$u[]="ALTER $C ".($b[3]?"SET$b[3]":"DROP DEFAULT");$u[]="ALTER $C ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($d[0]!=""||$jd!=""){$kb[]="COMMENT ON COLUMN ".table($h).".$b[0] IS ".($jd!=""?substr($jd,9):"''");}}}$u=array_merge($u,$Ja);if($h==""){array_unshift($kb,"CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}elseif($u){array_unshift($kb,"ALTER TABLE ".table($h)."\n".implode(",\n",$u));}if($h!=""&&$h!=$f){$kb[]="ALTER TABLE ".table($h)." RENAME TO ".table($f);}if($h!=""||$Aa!=""){$kb[]="COMMENT ON TABLE ".table($f)." IS ".q($Aa);}if($Ra!=""){}foreach($kb
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($h,$u){$ka=array();$Da=array();foreach($u
as$b){if($b[0]!="INDEX"){$ka[]=($b[2]?"\nDROP CONSTRAINT ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}elseif($b[2]){$Da[]=$b[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h)." $b[1]")){return
false;}}return((!$ka||queries("ALTER TABLE ".table($h).implode(",",$ka)))&&(!$Da||queries("DROP INDEX ".implode(", ",$Da))));}function
truncate_tables($E){return
queries("TRUNCATE ".implode(", ",array_map('table',$E)));return
true;}function
drop_views($W){return
queries("DROP VIEW ".implode(", ",array_map('table',$W)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$W,$ha){foreach($E
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($ha))){return
false;}}foreach($W
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($ha))){return
false;}}return
true;}function
trigger($f){$G=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($G);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$a){$c[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Ma){global$g;$pa=array();$s=array();foreach($r
as$e=>$b){$pa[]="$e = $b";if(isset($Ma[idf_unescape($e)])){$s[]="$e = $b";}}return($s&&queries("UPDATE ".table($h)." SET ".implode(", ",$pa)." WHERE ".implode(" AND ",$s))&&$g->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
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
set_schema($Na){global$g,$S,$Oa;$c=$g->query("SET search_path TO ".idf_escape($Na));foreach(types()as$z){if(!isset($S[$z])){$S[$z]=0;$Oa['Benutzer-definierte Typen'][]=$z;}}return$c;}function
use_sql($da){return"\connect ".idf_escape($da);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($rb){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$rb);}$v="pgsql";$S=array();$Oa=array();foreach(array('Zahlen'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Datum oder Zeit'=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),'Zeichenketten'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binär'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Netzwerk'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometrie'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$e=>$b){$S+=$b;$Oa[$e]=array_keys($b);}$lb=array();$ec=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Z=array("char_length","lower","round","to_hex","to_timestamp","upper");$ib=array("avg","count","count distinct","max","min","sum");$Qb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$la["oracle"]="Oracle";if(isset($_GET["oracle"])){$yc=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($hf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$O,$T){$this->_link=@oci_new_connect($O,$T,$F,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($J){return"'".str_replace("'","''",$J)."'";}function
select_db($da){return
true;}function
query($j,$Wa=false){$i=oci_parse($this->_link,$j);if(!$i){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$c=@oci_execute($i);restore_error_handler();if($c){if(oci_num_fields($i)){return
new
Min_Result($i);}$this->affected_rows=oci_num_rows($i);}return$c;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$d);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'OCI-Lob')){$a[$e]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;$c->name=oci_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=oci_field_type($this->_result,$C);$c->charsetnr=(ereg("raw|blob|bfile",$c->type)?63:0);return$c;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($F,$O,$T){$this->dsn("oci:dbname=//$F;charset=AL32UTF8",$O,$T);return
true;}function
select_db($da){return
true;}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$ua=$o->credentials();if($g->connect($ua[0],$ua[1],$ua[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?($s?" AND":$Pa."WHERE").($L?" rownum > $L AND":"")." rownum <= ".($M+$L):"");}function
limit1($j,$s){return" $j$s";}function
db_collation($t,$Y){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();$Ve=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $Ve":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $Ve":""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$a){$z=$a["DATA_TYPE"];$X="$a[DATA_PRECISION],$a[DATA_SCALE]";if($X==","){$X=$a["DATA_LENGTH"];}$c[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$z.($X?"($X)":""),"type"=>strtolower($z),"length"=>$X,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$c;}function
indexes($h,$H=null){return
array();}function
view($f){$G=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($G);}function
collations(){return
array();}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
explain($g,$j){$g->query("EXPLAIN PLAN FOR $j");return$g->query("SELECT * FROM plan_table");}function
alter_table($h,$f,$p,$Ja,$Aa,$vb,$U,$Ra,$tb){$u=$Da=array();foreach($p
as$d){$b=$d[1];if($b&&$d[0]!=""&&idf_escape($d[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($d[0])." TO $b[0]");}if($b){$u[]=($h!=""?($d[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($h!=""?")":"");}else{$Da[]=idf_escape($d[0]);}}if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}return(!$u||queries("ALTER TABLE ".table($h)."\n".implode("\n",$u)))&&(!$Da||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Da).")"))&&($h==$f||queries("ALTER TABLE ".table($h)." RENAME TO ".table($f)));}function
foreign_keys($h){return
array();}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($W){return
apply_queries("DROP VIEW",$W);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
begin(){return
true;}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Id){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$G=get_rows('SELECT * FROM v$instance');return
reset($G);}function
support($rb){return
ereg("view|drop_col|variables|status",$rb);}$v="oracle";$S=array();$Oa=array();foreach(array('Zahlen'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Datum oder Zeit'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Zeichenketten'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binär'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$e=>$b){$S+=$b;$Oa[$e]=array_keys($b);}$lb=array();$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Z=array("length","lower","round","upper");$ib=array("avg","count","count distinct","max","min","sum");$Qb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$la["mssql"]="MS SQL";if(isset($_GET["mssql"])){$yc=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($F,$O,$T){$this->_link=@sqlsrv_connect($F,array("UID"=>$O,"PWD"=>$T));if($this->_link){$jf=sqlsrv_server_info($this->_link);$this->server_info=$jf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($J){return"'".str_replace("'","''",$J)."'";}function
select_db($da){return$this->query("USE $da");}function
query($j,$Wa=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
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
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->fetch_row();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'DateTime')){$a[$e]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$d=$this->_fields[$this->_offset++];$c=new
stdClass;$c->name=$d["Name"];$c->orgname=$d["Name"];$c->type=($d["Type"]==1?254:0);return$c;}function
seek($L){for($k=0;$k<$L;$k++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($F,$O,$T){$this->_link=@mssql_connect($F,$O,$T);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($J){return"'".str_replace("'","''",$J)."'";}function
select_db($da){return
mssql_select_db($da);}function
query($j,$Wa=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
false;}if($i===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}return
mssql_result($i->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=mssql_num_rows($i);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$c=mssql_fetch_field($this->_result);$c->orgtable=$c->table;$c->orgname=$c->name;return$c;}function
seek($L){mssql_data_seek($this->_result,$L);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($Q){return"[".str_replace("]","]]",$Q)."]";}function
table($Q){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$ua=$o->credentials();if($g->connect($ua[0],$ua[1],$ua[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$s,$M,$L=0,$Pa=" "){return(isset($M)?" TOP (".($M+$L).")":"")." $j$s";}function
limit1($j,$s){return
limit($j,$s,1);}function
db_collation($t,$Y){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($t));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($_){global$g;$c=array();foreach($_
as$t){$g->select_db($t);$c[$t]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($D){return$D["Engine"]=="VIEW";}function
fk_support($D){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$a){$z=$a["type"];$X=(ereg("char|binary",$z)?$a["max_length"]:($z=="decimal"?"$a[precision],$a[scale]":""));$c[$a["name"]]=array("field"=>$a["name"],"full_type"=>$z.($X?"($X)":""),"type"=>$z,"length"=>$X,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$c;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($h),$H)as$a){$c[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$c[$a["name"]]["lengths"]=array();$c[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($f))));}function
collations(){$c=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$U){$c[ereg_replace("_.*","",$U)][]=$U;}return$c;}function
information_schema($t){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($b){return
q($b);}function
create_database($t,$U){return
queries("CREATE DATABASE ".idf_escape($t).(eregi('^[a-z0-9_]+$',$U)?" COLLATE $U":""));}function
drop_databases($_){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$_)));}function
rename_database($f,$U){if(eregi('^[a-z0-9_]+$',$U)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $U");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($h,$f,$p,$Ja,$Aa,$vb,$U,$Ra,$tb){$u=array();foreach($p
as$d){$C=idf_escape($d[0]);$b=$d[1];if(!$b){$u["DROP"][]=" COLUMN $C";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($d[0]==""){$u["ADD"][]="\n  ".implode("",$b).($h==""?substr($Ja[$b[0]],16+strlen($b[0])):"");}else{unset($b[6]);if($C!=$b[0]){queries("EXEC sp_rename ".q(table($h).".$C").", ".q(idf_unescape($b[0])).", 'COLUMN'");}$u["ALTER COLUMN ".implode("",$b)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$u["ADD"])."\n)");}if($h!=$f){queries("EXEC sp_rename ".q(table($h)).", ".q($f));}if($Ja){$u[""]=$Ja;}foreach($u
as$e=>$b){if(!queries("ALTER TABLE ".idf_escape($f)." $e".implode(",",$b))){return
false;}}return
true;}function
alter_indexes($h,$u){$x=array();$Da=array();foreach($u
as$b){if($b[2]){if($b[0]=="PRIMARY"){$Da[]=$b[1];}else{$x[]="$b[1] ON ".table($h);}}elseif(!queries(($b[0]!="PRIMARY"?"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $b[1]")){return
false;}}return(!$x||queries("DROP INDEX ".implode(", ",$x)))&&(!$Da||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$Da)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Ma){$pa=array();$s=array();foreach($r
as$e=>$b){$pa[]="$e = $b";if(isset($Ma[idf_unescape($e)])){$s[]="$e = $b";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$r).")) AS source (c".implode(", c",range(1,count($r))).") ON ".implode(" AND ",$s)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$pa)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$j){$g->query("SET SHOWPLAN_ALL ON");$c=$g->query($j);$g->query("SET SHOWPLAN_ALL OFF");return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$a){$A=&$c[$a["FK_NAME"]];$A["table"]=$a["PKTABLE_NAME"];$A["source"][]=$a["FKCOLUMN_NAME"];$A["target"][]=$a["PKCOLUMN_NAME"];}return$c;}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($W){return
queries("DROP VIEW ".implode(", ",array_map('table',$W)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$W,$ha){return
apply_queries("ALTER SCHEMA ".idf_escape($ha)." TRANSFER",array_merge($E,$W));}function
trigger($f){$G=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$c=reset($G);if($c){$c["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$c["text"]);}return$c;}function
triggers($h){$c=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($h))as$a){$c[$a["name"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!=""){return$_GET["ns"];}return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Na){return
true;}function
use_sql($da){return"USE ".idf_escape($da);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($rb){return
ereg('^(scheme|trigger|view|drop_col)$',$rb);}$v="mssql";$S=array();$Oa=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Datum oder Zeit'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Zeichenketten'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binär'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$e=>$b){$S+=$b;$Oa[$e]=array_keys($b);}$lb=array();$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Z=array("len","lower","round","upper");$ib=array("avg","count","count distinct","max","min","sum");$Qb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$la=array("server"=>"MySQL")+$la;if(!defined("DRIVER")){$yc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($F,$O,$T){mysqli_report(MYSQLI_REPORT_OFF);list($lf,$ed)=explode(":",$F,2);$c=@$this->real_connect(($F!=""?$lf:ini_get("mysqli.default_host")),("$F$O"!=""?$O:ini_get("mysqli.default_user")),("$F$O$T"!=""?$T:ini_get("mysqli.default_pw")),null,(is_numeric($ed)?$ed:ini_get("mysqli.default_port")),(!is_numeric($ed)?$ed:null));if($c){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$c;}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch_array();return$a[$d];}function
quote($J){return"'".$this->escape_string($J)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($F,$O,$T){$this->_link=@mysql_connect(($F!=""?$F:ini_get("mysql.default_host")),("$F$O"!=""?$O:ini_get("mysql.default_user")),("$F$O$T"!=""?$T:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($J){return"'".mysql_real_escape_string($J,$this->_link)."'";}function
select_db($da){return
mysql_select_db($da,$this->_link);}function
query($j,$Wa=false){$i=@($Wa?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
mysql_result($i->_result,0,$d);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($i){$this->_result=$i;$this->num_rows=mysql_num_rows($i);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$c=mysql_fetch_field($this->_result,$this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=($c->blob?63:0);return$c;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($F,$O,$T){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$F)),$O,$T);$this->query("SET NAMES utf8");return
true;}function
select_db($da){return$this->query("USE ".idf_escape($da));}function
query($j,$Wa=false){$this->setAttribute(1000,!$Wa);return
parent::query($j,$Wa);}}}function
idf_escape($Q){return"`".str_replace("`","``",$Q)."`";}function
table($Q){return
idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$ua=$o->credentials();if($g->connect($ua[0],$ua[1],$ua[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($zf=true){global$g;$c=&get_session("dbs");if(!isset($c)){if($zf){restart_session();ob_flush();flush();}$c=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$c;}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?$Pa."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($j,$s){return
limit($j,$s,1);}function
db_collation($t,$Y){global$g;$c=null;$ka=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1);if(preg_match('~ COLLATE ([^ ]+)~',$ka,$l)){$c=$l[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ka,$l)){$c=$Y[$l[1]][-1];}return$c;}function
engines(){$c=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$c[]=$a["Engine"];}}return$c;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($_){$c=array();foreach($_
as$t){$c[$t]=count(get_vals("SHOW TABLES IN ".idf_escape($t)));}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($D){return!isset($D["Rows"]);}function
fk_support($D){return($D["Engine"]=="InnoDB");}function
fields($h){$c=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$l);$c[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$l[1],"length"=>$l[2],"unsigned"=>ltrim($l[3].$l[4]),"default"=>($a["Default"]!=""||ereg("char",$l[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$l)?$l[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$c;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$H)as$a){$c[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$c[$a["Key_name"]]["columns"][]=$a["Column_name"];$c[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$c;}function
foreign_keys($h){global$g,$db;static$ba='`(?:[^`]|``)+`';$c=array();$Nd=$g->result("SHOW CREATE TABLE ".table($h),1);if($Nd){preg_match_all("~CONSTRAINT ($ba) FOREIGN KEY \\(((?:$ba,? ?)+)\\) REFERENCES ($ba)(?:\\.($ba))? \\(((?:$ba,? ?)+)\\)(?: ON DELETE (".implode("|",$db)."))?(?: ON UPDATE (".implode("|",$db)."))?~",$Nd,$ta,PREG_SET_ORDER);foreach($ta
as$l){preg_match_all("~$ba~",$l[2],$Ba);preg_match_all("~$ba~",$l[5],$ha);$c[idf_unescape($l[1])]=array("db"=>idf_unescape($l[4]!=""?$l[3]:$l[4]),"table"=>idf_unescape($l[4]!=""?$l[4]:$l[3]),"source"=>array_map('idf_unescape',$Ba[0]),"target"=>array_map('idf_unescape',$ha[0]),"on_delete"=>$l[6],"on_update"=>$l[7],);}}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$c=array();foreach(get_rows("SHOW COLLATION")as$a){if($a["Default"]){$c[$a["Charset"]][-1]=$a["Collation"];}else{$c[$a["Charset"]][]=$a["Collation"];}}ksort($c);foreach($c
as$e=>$b){asort($c[$e]);}return$c;}function
information_schema($t){global$g;return($g->server_info>=5&&$t=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($t,$U){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($t).($U?" COLLATE ".q($U):""));}function
drop_databases($_){set_session("dbs",null);return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){if(create_database($f,$U)){$cc=array();foreach(tables_list()as$h=>$z){$cc[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$cc||queries("RENAME TABLE ".implode(", ",$cc))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$vd=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$x){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$x["columns"],true)){$vd="";break;}if($x["type"]=="PRIMARY"){$vd=" UNIQUE";}}}return" AUTO_INCREMENT$vd";}function
alter_table($h,$f,$p,$Ja,$Aa,$vb,$U,$Ra,$tb){$u=array();foreach($p
as$d){$u[]=($d[1]?($h!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($h!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$u=array_merge($u,$Ja);$fc="COMMENT=".q($Aa).($vb?" ENGINE=".q($vb):"").($U?" COLLATE ".q($U):"").($Ra!=""?" AUTO_INCREMENT=$Ra":"").$tb;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n) $fc");}if($h!=$f){$u[]="RENAME TO ".table($f);}$u[]=$fc;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$u));}function
alter_indexes($h,$u){foreach($u
as$e=>$b){$u[$e]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($h).implode(",",$u));}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($W){return
queries("DROP VIEW ".implode(", ",array_map('table',$W)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$W,$ha){$cc=array();foreach(array_merge($E,$W)as$h){$cc[]=table($h)." TO ".idf_escape($ha).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$cc));}function
copy_tables($E,$W,$ha){foreach($E
as$h){$f=($ha==DB?table("copy_$h"):idf_escape($ha).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($W
as$h){$f=($ha==DB?table("copy_$h"):idf_escape($ha).".".table($h));$Vb=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Vb[select]")){return
false;}}return
true;}function
trigger($f){$G=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($G);}function
triggers($h){$c=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$a){$c[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){global$g,$Bb,$gc,$S;$yf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$ge="((".implode("|",array_merge(array_keys($S),$yf)).")(?:\\s*\\(((?:[^'\")]*|$Bb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ba="\\s*(".($z=="FUNCTION"?"":implode("|",$gc)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$ge";$ka=$g->result("SHOW CREATE $z ".idf_escape($f),2);preg_match("~\\(((?:$ba\\s*,?)*)\\)".($z=="FUNCTION"?"\\s*RETURNS\\s+$ge":"")."\\s*(.*)~is",$ka,$l);$p=array();preg_match_all("~$ba\\s*,?~is",$l[1],$ta,PREG_SET_ORDER);foreach($ta
as$eb){$f=str_replace("``","`",$eb[2]).$eb[3];$p[]=array("field"=>$f,"type"=>strtolower($eb[5]),"length"=>preg_replace_callback("~$Bb~s",'normalize_enum',$eb[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$eb[8] $eb[7]"))),"full_type"=>$eb[4],"inout"=>strtoupper($eb[1]),"collation"=>strtolower($eb[9]),);}if($z!="FUNCTION"){return
array("fields"=>$p,"definition"=>$l[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$l[12],"length"=>$l[13],"unsigned"=>$l[15],"collation"=>$l[16]),"definition"=>$l[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
insert_update($h,$r,$Ma){foreach($r
as$e=>$b){$r[$e]="$e = $b";}$pa=implode(", ",$r);return
queries("INSERT INTO ".table($h)." SET $pa ON DUPLICATE KEY UPDATE $pa");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Na){return
true;}function
create_sql($h,$Ra){global$g;$c=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$Ra){$c=preg_replace('~ AUTO_INCREMENT=\\d+~','',$c);}return$c;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($da){return"USE ".idf_escape($da);}function
trigger_sql($h,$V){$c="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$a){$c.="\n".($V=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$c;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($rb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$rb);}$v="sql";$S=array();$Oa=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum oder Zeit'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Zeichenketten'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binär'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listen'=>array("enum"=>65535,"set"=>64),)as$e=>$b){$S+=$b;$Oa[$e]=array_keys($b);}$lb=array("unsigned","zerofill","unsigned zerofill");$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Z=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$ib=array("avg","count","count distinct","group_concat","max","min","sum");$Qb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$zc="3.2.1";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
head(){return
true;}function
loginForm(){global$la;echo'<table cellspacing="0">
<tr><th>Datenbank System<td>',html_select("driver",$la,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'">
<tr><th>Benutzer<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Passwort<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Passwort speichern')."\n";}function
login($Yf,$T){return
true;}function
tableName($Ec){return
h($Ec["Name"]);}function
fieldName($d,$cb=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Ec,$r=""){echo'<p class="tabs">';$Ia=array("select"=>'Daten auswählen',"table"=>'Struktur anzeigen');if(is_view($Ec)){$Ia["view"]='View ändern';}else{$Ia["create"]='Tabelle ändern';}if(isset($r)){$Ia["edit"]='Neuer Datensatz';}foreach($Ia
as$e=>$b){echo" <a href='".h(ME)."$e=".urlencode($Ec["Name"]).($e=="edit"?$r:"")."'".bold(isset($_GET[$e])).">$b</a>";}echo"\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$Uf){return
array();}function
backwardKeysPrint($Tf,$a){}function
selectQuery($j){global$v;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Letzte Seite'."'>&gt;&gt;</a> <code class='jush-$v'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Ändern'."</a></p>\n";}function
rowDescription($h){return"";}function
rowDescriptions($G,$Jf){return$G;}function
selectVal($b,$w,$d){$c=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$c=lang(array('%d Byte','%d Bytes'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($w?"<a href='$w'>$c</a>":$c);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($P,$B){global$Z,$ib;print_fieldset("select",'Daten zeigen von',$P);$k=0;$Wd=array('Funktionen'=>$Z,'Agregationen'=>$ib);foreach($P
as$e=>$b){$b=$_GET["columns"][$e];echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$Wd,$b["fun"]),"(<select name='columns[$k][col]'><option>".optionlist($B,$b["col"],true)."</select>)</div>\n";$k++;}echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$Wd,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$k][col]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($s,$B,$I){print_fieldset("search",'Suchen',$s);foreach($I
as$k=>$x){if($x["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$x["columns"]))."</i>) AGAINST"," <input name='fulltext[$k]' value='".h($_GET["fulltext"][$k])."'>",checkbox("boolean[$k]",1,isset($_GET["boolean"][$k]),"BOOL"),"<br>\n";}}$k=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$k][col]'><option value=''>(".'beliebig'.")".optionlist($B,$b["col"],true)."</select>",html_select("where[$k][op]",$this->operators,$b["op"]),"<input name='where[$k][val]' value='".h($b["val"])."'></div>\n";$k++;}}echo"<div><select name='where[$k][col]' onchange='selectAddRow(this);'><option value=''>(".'beliebig'.")".optionlist($B,null,true)."</select>",html_select("where[$k][op]",$this->operators,"="),"<input name='where[$k][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($cb,$B,$I){print_fieldset("sort",'Ordnen',$cb);$k=0;foreach((array)$_GET["order"]as$e=>$b){if(isset($B[$b])){echo"<div><select name='order[$k]'><option>".optionlist($B,$b,true)."</select>",checkbox("desc[$k]",1,isset($_GET["desc"][$e]),'absteigend')."</div>\n";$k++;}}echo"<div><select name='order[$k]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>","<label><input type='checkbox' name='desc[$k]' value='1'>".'absteigend'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($M){echo"<fieldset><legend>".'Begrenzung'."</legend><div>";echo"<input name='limit' size='3' value='".h($M)."'>","</div></fieldset>\n";}function
selectLengthPrint($yb){if(isset($yb)){echo"<fieldset><legend>".'Textlänge'."</legend><div>",'<input name="text_length" size="3" value="'.h($yb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Aktion'."</legend><div>","<input type='submit' value='".'Daten zeigen von'."'>","</div></fieldset>\n";}function
selectEmailPrint($Vf,$B){}function
selectColumnsProcess($B,$I){global$Z,$ib;$P=array();$na=array();foreach((array)$_GET["columns"]as$e=>$b){if($b["fun"]=="count"||(isset($B[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$Z)||in_array($b["fun"],$ib)))){$P[$e]=apply_sql_function($b["fun"],(isset($B[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$ib)){$na[]=$P[$e];}}}return
array($P,$na);}function
selectSearchProcess($p,$I){global$v;$c=array();foreach($I
as$k=>$x){if($x["type"]=="FULLTEXT"&&$_GET["fulltext"][$k]!=""){$c[]="MATCH (".implode(", ",array_map('idf_escape',$x["columns"])).") AGAINST (".q($_GET["fulltext"][$k]).(isset($_GET["boolean"][$k])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Nb=" $b[op]";if(ereg('IN$',$b["op"])){$Gb=process_length($b["val"]);$Nb.=" (".($Gb!=""?$Gb:"NULL").")";}elseif(!$b["op"]){$Nb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$Nb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Nb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$c[]=idf_escape($b["col"]).$Nb;}else{$ob=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$ob[]=($v=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$c[]=($ob?"(".implode("$Nb OR ",$ob)."$Nb)":"0");}}}return$c;}function
selectOrderProcess($p,$I){$c=array();foreach((array)$_GET["order"]as$e=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$c[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$e])?" DESC":"");}}return$c;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($s,$Jf){return
false;}function
messageQuery($j){global$v;static$Jc=0;restart_session();$R="sql-".($Jc++);$ab=&get_session("queries");if(strlen($j)>1e6){$j=ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...";}$ab[$_GET["db"]][]=$j;return" <a href='#$R' onclick=\"return !toggle('$R');\">".'SQL-Query'."</a><div id='$R' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($j,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($ab[$_GET["db"]])-1)).'">'.'Ändern'.'</a></div>';}function
editFunctions($d){global$Qb;$c=($d["null"]?"NULL/":"");foreach($Qb
as$e=>$Z){if(!$e||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Z
as$ba=>$b){if(!$ba||ereg($ba,$d["type"])){$c.="/$b";}}if($e&&!ereg('set|blob|bytea|raw|file',$d["type"])){$c.="/=";}}}return
explode("/",$c);}function
editInput($h,$d,$Ua,$q){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Ua value='-1' checked><i>".'Original'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Ua value=''".(isset($q)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ua,$d,$q,0);}return"";}function
processInput($d,$q,$K=""){if($K=="="){return$q;}$f=$d["field"];$c=($d["type"]=="bit"&&ereg('^[0-9]+$',$q)?$q:q($q));if(ereg('^(now|getdate|uuid)$',$K)){$c="$K()";}elseif(ereg('^current_(date|timestamp)$',$K)){$c=$K;}elseif(ereg('^([+-]|\\|\\|)$',$K)){$c=idf_escape($f)." $K $c";}elseif(ereg('^[+-] interval$',$K)){$c=idf_escape($f)." $K ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$q)?$q:$c);}elseif(ereg('^(addtime|subtime|concat)$',$K)){$c="$K(".idf_escape($f).", $c)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$K)){$c="$K($c)";}if(ereg("binary",$d["type"])){$c="unhex($c)";}return$c;}function
dumpOutput(){$c=array('text'=>'anzeigen','file'=>'Datei');if(function_exists('gzencode')){$c['gz']='gzip';}if(function_exists('bzcompress')){$c['bz2']='bzip2';}return$c;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($h,$V,$dd=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($V){dump_csv(array_keys(fields($h)));}}elseif($V){$ka=create_sql($h,$_POST["auto_increment"]);if($ka){if($V=="DROP+CREATE"){echo"DROP ".($dd?"VIEW":"TABLE")." IF EXISTS ".table($h).";\n";}if($dd){$ka=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$ka);}echo($V!="CREATE+ALTER"?$ka:($dd?substr_replace($ka," OR REPLACE",6,0):substr_replace($ka," IF NOT EXISTS",12,0))).";\n\n";}if($V=="CREATE+ALTER"&&!$dd){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($h)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$Hb="";foreach(get_rows($j)as$a){$xa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($xa)?q($xa):"NULL");$a["after"]=q($Hb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($xa)?" DEFAULT ".($xa=="CURRENT_TIMESTAMP"?$xa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($Hb?" AFTER ".idf_escape($Hb):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$Hb=$a["COLUMN_NAME"];}echo"';
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
dumpData($h,$V,$j){global$g,$v;$Re=($v=="sqlite"?0:1048576);if($V){if($_POST["format"]=="sql"&&$V=="TRUNCATE+INSERT"){echo
truncate_sql($h).";\n";}if($_POST["format"]=="sql"){$p=fields($h);}$i=$g->query($j,1);if($i){$hc="";$nb="";while($a=$i->fetch_assoc()){if($_POST["format"]!="sql"){if($V=="table"){dump_csv(array_keys($a));$V="INSERT";}dump_csv($a);}else{if(!$hc){$hc="INSERT INTO ".table($h)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$e=>$b){$a[$e]=(isset($b)?(ereg('int|float|double|decimal',$p[$e]["type"])?$b:q($b)):"NULL");}$ma=implode(",\t",$a);if($V=="INSERT+UPDATE"){$r=array();foreach($a
as$e=>$b){$r[]=idf_escape($e)." = $b";}echo"$hc ($ma) ON DUPLICATE KEY UPDATE ".implode(", ",$r).";\n";}else{$ma=($Re?"\n":" ")."($ma)";if(!$nb){$nb=$hc.$ma;}elseif(strlen($nb)+2+strlen($ma)<$Re){$nb.=",$ma";}else{$nb.=";\n";echo$nb;$nb=$hc.$ma;}}}}if($_POST["format"]=="sql"&&$V!="INSERT+UPDATE"&&$nb){$nb.=";\n";echo$nb;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$g->error)."\n";}}}function
dumpHeaders($Lc,$fd=false){$La=$_POST["output"];$Kb=($_POST["format"]=="sql"?"sql":($fd?"tar":"csv"));header("Content-Type: ".($La=="bz2"?"application/x-bzip":($La=="gz"?"application/x-gzip":($Kb=="tar"?"application/x-tar":($Kb=="sql"||$La!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($La=="bz2"){ob_start('bzcompress',1e6);}if($La=="gz"){ob_start('gzencode',1e6);}return$Kb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Datenbank ändern'."</a>\n":"");if(support("scheme")){echo"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Schema ändern':'Neues Schema')."</a>\n";}return
true;}function
navigation($Ub){global$zc,$g,$N,$v,$la;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$zc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($zc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ub=="auth"){$ya=true;foreach((array)$_SESSION["pwds"]as$Jb=>$Pf){foreach($Pf
as$F=>$Mf){foreach($Mf
as$O=>$T){if(isset($T)){if($ya){echo"<p onclick='eventStop(event);'>\n";$ya=false;}echo"<a href='".h(auth_url($Jb,$F,$O))."'>($la[$Jb]) ".h($O.($F!=""?"@$F":""))."</a><br>\n";}}}}}else{$_=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Ub){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL-Query'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}}echo'<input type="submit" name="logout" value="Abmelden" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$N,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($_?html_select("db",array(""=>"(".'Datenbank'.")")+$_,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Benutzung"',($_?" class='hidden'":""),' onclick="eventStop(event);">
';if($Ub!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'Schema'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""&&!$Ub){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Neue Tabelle'."</a>\n";$E=tables_list();if(!$E){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{$this->tablesPrint($E);$Ia=array();foreach($E
as$h=>$z){$Ia[]=preg_quote($h,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $v: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$Ia).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$v;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($E){echo"<p id='tables'>\n";foreach($E
as$h=>$z){echo'<a href="'.h(ME).'select='.urlencode($h).'"'.bold($_GET["select"]==$h).">".'zeigen'."</a> ",'<a href="'.h(ME).'table='.urlencode($h).'"'.bold($_GET["table"]==$h).">".$this->tableName(array("Name"=>$h))."</a><br>\n";}}}$o=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($o->operators)){$o->operators=$ec;}function
page_header($pe,$n="",$sc=array(),$ye=""){global$tf,$o,$g,$la;header("Content-Type: text/html; charset=utf-8");$o->headers();$Fe=$pe.($ye!=""?": ".h($ye):"");$Ie=$Fe.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$o->name();if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Ie));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="de" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Ie,'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.2.1",'" id="favicon">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.2.1",'">
';if($o->head()&&file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr nojs" onclick="return bodyClick(event, \'',js_escape(DB),'\', \'',js_escape($_GET["ns"]),'\');" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Jd');"),'">
<script type="text/javascript">
var areYouSure = \'Resend POST data?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.2.1",'"></script>

<div id="content">
';}if(isset($sc)){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($w?h($w):".").'">'.$la[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$F=(SERVER!=""?h(SERVER):'Server');if($sc===false){echo"$F\n";}else{echo"<a href='".($w?h($w):".")."'>$F</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($sc))){echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($sc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($sc
as$e=>$b){$xc=(is_array($b)?$b[1]:$b);if($xc!=""){echo'<a href="'.h(ME."$e=").urlencode(is_array($b)?$b[0]:$b).'">'.h($xc).'</a> &raquo; ';}}}echo"$pe\n";}}echo"<span id='loader'></span>\n","<h2>$Fe</h2>\n";restart_session();$_e=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ze=$_SESSION["messages"][$_e];if($ze){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ze)."</div>\n";unset($_SESSION["messages"][$_e]);}$_=&get_session("dbs");if(DB!=""&&$_&&!in_array(DB,$_,true)){$_=null;}if($n){echo"<div class='error'>$n</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Ub=""){global$o;if(!is_ajax()){echo'</div>

<div id="menu">
';$o->navigation($Ub);echo'</div>
';}}function
int32($ea){while($ea>=2147483648){$ea-=4294967296;}while($ea<=-2147483649){$ea+=4294967296;}return(int)$ea;}function
long2str($y,$Ad){$ma='';foreach($y
as$b){$ma.=pack('V',$b);}if($Ad){return
substr($ma,0,end($y));}return$ma;}function
str2long($ma,$Ad){$y=array_values(unpack('V*',str_pad($ma,4*ceil(strlen($ma)/4),"\0")));if($Ad){$y[]=strlen($ma);}return$y;}function
xxtea_mx($_a,$wa,$Ca,$Ha){return
int32((($_a>>5&0x7FFFFFF)^$wa<<2)+(($wa>>3&0x1FFFFFFF)^$_a<<4))^int32(($Ca^$wa)+($Ha^$_a));}function
encrypt_string($uc,$e){if($uc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$y=str2long($uc,true);$ea=count($y)-1;$_a=$y[$ea];$wa=$y[0];$ca=floor(6+52/($ea+1));$Ca=0;while($ca-->0){$Ca=int32($Ca+0x9E3779B9);$vc=$Ca>>2&3;for($va=0;$va<$ea;$va++){$wa=$y[$va+1];$Eb=xxtea_mx($_a,$wa,$Ca,$e[$va&3^$vc]);$_a=int32($y[$va]+$Eb);$y[$va]=$_a;}$wa=$y[0];$Eb=xxtea_mx($_a,$wa,$Ca,$e[$va&3^$vc]);$_a=int32($y[$ea]+$Eb);$y[$ea]=$_a;}return
long2str($y,false);}function
decrypt_string($uc,$e){if($uc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$y=str2long($uc,false);$ea=count($y)-1;$_a=$y[$ea];$wa=$y[0];$ca=floor(6+52/($ea+1));$Ca=int32($ca*0x9E3779B9);while($Ca){$vc=$Ca>>2&3;for($va=$ea;$va>0;$va--){$_a=$y[$va-1];$Eb=xxtea_mx($_a,$wa,$Ca,$e[$va&3^$vc]);$wa=int32($y[$va]-$Eb);$y[$va]=$wa;}$_a=$y[$ea];$Eb=xxtea_mx($_a,$wa,$Ca,$e[$va&3^$vc]);$wa=int32($y[0]-$Eb);$y[0]=$wa;$Ca=int32($Ca-0x9E3779B9);}return
long2str($y,true);}$g='';$N=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Ab=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($e)=explode(":",$b);$Ab[$e]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$e=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Gc=$o->permanentLogin();$Ab[$e]="$e:".base64_encode($Gc?encrypt_string($_POST["password"],$Gc):"");cookie("adminer_permanent",implode(" ",$Ab));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($N&&$_POST["token"]!=$N){page_header('Abmelden','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$e){set_session($e,null);}$e=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Ab[$e]){unset($Ab[$e]);cookie("adminer_permanent",implode(" ",$Ab));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Abmeldung erfolgreich.');}}elseif($Ab&&!$_SESSION["pwds"]){session_regenerate_id();$Gc=$o->permanentLogin();foreach($Ab
as$e=>$b){list(,$Cf)=explode(":",$b);list($Jb,$F,$O)=array_map('base64_decode',explode("-",$e));$_SESSION["pwds"][$Jb][$F][$O]=decrypt_string(base64_decode($Cf),$Gc);}}function
auth_error($qe=null){global$g,$o,$N;$Ic=session_name();$n="";if(!$_COOKIE[$Ic]&&$_GET[$Ic]&&ini_bool("session.use_only_cookies")){$n='Sitzungen müssen aktiviert sein.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Ic]||$_GET[$Ic])&&!$N){$n='Sitzungsdauer abgelaufen, bitte erneut anmelden.';}else{$T=&get_session("pwds");if(isset($T)){$n=h($qe?$qe->getMessage():(is_string($g)?$g:'Ungültige Anmelde-Informationen.'));$T=null;}}}page_header('Login',$n,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$o->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Keine Erweiterungen installiert',sprintf('Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.',implode(", ",$yc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$o->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$N=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$N;}$n=($_POST?($_POST["token"]==$N?"":'CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','"post_max_size"')));function
connect_error(){global$g,$N,$n,$la;$_=array();if(DB!=""){page_header('Datenbank'.": ".h(DB),'Datenbank ungültig.',true);}else{if($_POST["db"]&&!$n){queries_redirect(substr(ME,0,-1),'Datenbanken entfernt.',drop_databases($_POST["db"]));}page_header('Datenbank auswählen',$n,false);echo"<p><a href='".h(ME)."database='>".'Neue Datenbank'."</a>\n";foreach(array('privileges'=>'Rechte','processlist'=>'Prozessliste','variables'=>'Variablen','status'=>'Status',)as$e=>$b){if(support($e)){echo"<a href='".h(ME)."$e='>$b</a>\n";}}echo"<p>".sprintf('Version %s: %s, mit PHP-Erweiterung %s',$la[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Angemeldet als: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$_=get_databases();if($_){$Id=support("scheme");$Y=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Datenbank'."<td>".'Collation'."<td>".'Tabellen'."</thead>\n";foreach($_
as$t){$Gd=h(ME)."db=".urlencode($t);echo"<tr".odd()."><td>".checkbox("db[]",$t,in_array($t,(array)$_POST["db"])),"<th><a href='$Gd'>".h($t)."</a>","<td><a href='$Gd".($Id?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($t,$Y))."</a>","<td align='right'><a href='$Gd&amp;schema=' id='tables-".h($t)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Entfernen'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$N'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Aktualisieren'."</a>\n","</form>\n";}}page_footer("db");if($_){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"])){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}if(!set_schema($_GET["ns"])){page_header('Schema'.": ".h($_GET["ns"]),'Schema nicht gültig.',true);page_footer("ns");exit;}}function
select($i,$H=null,$oe=""){$Ia=array();$I=array();$B=array();$se=array();$S=array();odd('');for($k=0;$a=$i->fetch_row();$k++){if(!$k){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($qa=0;$qa<count($a);$qa++){$d=$i->fetch_field();$Ea=$d->orgtable;$qc=$d->orgname;if($Ea!=""){if(!isset($I[$Ea])){$I[$Ea]=array();foreach(indexes($Ea,$H)as$x){if($x["type"]=="PRIMARY"){$I[$Ea]=array_flip($x["columns"]);break;}}$B[$Ea]=$I[$Ea];}if(isset($B[$Ea][$qc])){unset($B[$Ea][$qc]);$I[$Ea][$qc]=$qa;$Ia[$qa]=$Ea;}}if($d->charsetnr==63){$se[$qa]=true;}$S[$qa]=$d->type;$f=h($d->name);echo"<th".($Ea!=""||$d->name!=$qc?" title='".h(($Ea!=""?"$Ea.":"").$qc)."'":"").">".($oe?"<a href='$oe".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$e=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($se[$e]&&!is_utf8($b)){$b="<i>".lang(array('%d Byte','%d Bytes'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($S[$e]==254){$b="<code>$b</code>";}}if(isset($Ia[$e])&&!$B[$Ia[$e]]){$w="edit=".urlencode($Ia[$e]);foreach($I[$Ia[$e]]as$Fc=>$qa){$w.="&where".urlencode("[".bracket_escape($Fc)."]")."=".urlencode($a[$qa]);}$b="<a href='".h(ME.$w)."'>$b</a>";}}echo"<td>$b";}}echo($k?"</table>":"<p class='message'>".'Keine Daten.')."\n";}function
referencable_primary($df){$c=array();foreach(table_status()as$Ga=>$h){if($Ga!=$df&&fk_support($h)){foreach(fields($Ga)as$d){if($d["primary"]){if($c[$Ga]){unset($c[$Ga]);break;}$c[$Ga]=$d;}}}}return$c;}function
textarea($f,$q,$G=10,$ob=80){echo"<textarea name='$f' rows='$G' cols='$ob' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($q)){foreach($q
as$b){echo
h($b)."\n\n\n";}}else{echo
h($q);}echo"</textarea>";}function
format_time($ic,$jc){return" <span class='time'>(".sprintf('%.3f s',max(0,$jc[0]-$ic[0]+$jc[1]-$ic[1])).")</span>";}function
edit_type($e,$d,$Y,$fa=array()){global$Oa,$S,$lb,$db;echo'<td><select name="',$e,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($S[$d["type"]])?array():array($d["type"]))+$Oa+($fa?array('Fremdschlüssel'=>$fa):array()),$d["type"]),'</select>
<td><input name="',$e,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$e"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'Kollation'.')'.optionlist($Y,$d["collation"]).'</select>',($lb?"<select name='$e"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($lb,$d["unsigned"]).'</select>':''),($fa?"<select name='$e"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist($db,$d["on_delete"])."</select> ":" ");}function
process_length($X){global$Bb;return(preg_match("~^\\s*(?:$Bb)(?:\\s*,\\s*(?:$Bb))*\\s*\$~",$X)&&preg_match_all("~$Bb~",$X,$ta)?implode(",",$ta[0]):preg_replace('~[^0-9,+-]~','',$X));}function
process_type($d,$lc="COLLATE"){global$lb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$lb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $lc ".q($d["collation"]):"");}function
process_field($d,$Cc){return
array(idf_escape($d["field"]),process_type($Cc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($z){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$e=>$b){if(ereg("$e|$b",$z)){return" class='$e'";}}}function
edit_fields($p,$Y,$z="TABLE",$Ge=0,$fa=array(),$Rb=false){global$gc;foreach($p
as$d){if($d["comment"]!=""){$Rb=true;break;}}echo'<thead><tr class="wrap">
';if($z=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($z=="TABLE"?'Spaltenname':'Name des Parameters'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Länge
<td>Optionen
';if($z=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto-Inkrement">AI</acronym>
<td class="hidden">Vorgabewerte festlegen
',(support("comment")?"<td".($Rb?"":" class='hidden'").">".'Kommentar':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.1' alt='+' title='".'Hinzufügen'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$k=>$d){$k++;$kd=$d[($_POST?"orig":"field")];$He=(isset($_POST["add"][$k-1])||(isset($d["field"])&&!$_POST["drop_col"][$k]))&&(support("drop_col")||$kd=="");echo'<tr',($He?"":" style='display: none;'"),'>
',($z=="PROCEDURE"?"<td>".html_select("fields[$k][inout]",$gc,$d["inout"]):""),'<th>';if($He){echo'<input name="fields[',$k,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $Ge); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$k,'][orig]" value="',h($kd),'">
';edit_type("fields[$k]",$d,$Y,$fa);if($z=="TABLE"){echo'<td>',checkbox("fields[$k][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$k,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$k][has_default]",1,$d["has_default"]),'<input name="fields[',$k,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Rb?"":" class='hidden'")."><input name='fields[$k][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.1' alt='+' title='".'Hinzufügen'."' onclick='return !editingAddRow(this, $Ge, 1);'>&nbsp;"."<input type='image' name='up[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.2.1' alt='^' title='".'Nach oben'."'>&nbsp;"."<input type='image' name='down[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.2.1' alt='v' title='".'Nach unten'."'>&nbsp;":""),($kd==""||support("drop_col")?"<input type='image' name='drop_col[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.2.1' alt='x' title='".'Entfernen'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$Rb;}function
process_fields(&$p){ksort($p);$L=0;if($_POST["up"]){$sb=0;foreach($p
as$e=>$d){if(key($_POST["up"])==$e){unset($p[$e]);array_splice($p,$sb,0,array($d));break;}if(isset($d["field"])){$sb=$L;}$L++;}}if($_POST["down"]){$oa=false;foreach($p
as$e=>$d){if(isset($d["field"])&&$oa){unset($p[key($_POST["down"])]);array_splice($p,$L,0,array($oa));break;}if(key($_POST["down"])==$e){$oa=$d;}$L++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($l){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($l[0][0].$l[0][0],$l[0][0],substr($l[0],1,-1))),'\\'))."'";}function
grant($ia,$ra,$B,$_b){if(!$ra){return
true;}if($ra==array("ALL PRIVILEGES","GRANT OPTION")){return($ia=="GRANT"?queries("$ia ALL PRIVILEGES$_b WITH GRANT OPTION"):queries("$ia ALL PRIVILEGES$_b")&&queries("$ia GRANT OPTION$_b"));}return
queries("$ia ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$B, ",$ra).$B).$_b);}function
drop_create($Da,$ka,$ga,$Xe,$Ff,$Ef,$f){if($_POST["drop"]){return
query_redirect($Da,$ga,$Xe,true,!$_POST["dropped"]);}$Ya=$f!=""&&($_POST["dropped"]||queries($Da));$Hf=queries($ka);if(!queries_redirect($ga,($f!=""?$Ff:$Ef),$Hf)&&$Ya){redirect(null,$Xe);}return$Ya;}function
tar_file($ja,$td){$c=pack("a100a8a8a8a12a12",$ja,644,0,0,decoct(strlen($td)),decoct(time()));$Ze=8*32;for($k=0;$k<strlen($c);$k++){$Ze+=ord($c{$k});}$c.=sprintf("%06o",$Ze)."\0 ";return$c.str_repeat("\0",512-strlen($c)).$td.str_repeat("\0",511-(strlen($td)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$db=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Bb="'(?:''|[^'\\\\]|\\\\.)*+'";$gc=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$p=fields($m);if(!$p){$n=error();}$D=($p?table_status($m):array());page_header(($p&&is_view($D)?'View':'Tabelle').": ".h($m),$n);$o->selectLinks($D);$Aa=$D["Comment"];if($Aa!=""){echo"<p>".'Kommentar'.": ".h($Aa)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Spalte'."<td>".'Typ'.(support("comment")?"<td>".'Kommentar':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto-Inkrement'."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($D)){echo"<h3>".'Indizes'."</h3>\n";$I=indexes($m);if($I){echo"<table cellspacing='0'>\n";foreach($I
as$f=>$x){ksort($x["columns"]);$gb=array();foreach($x["columns"]as$e=>$b){$gb[]="<i>".h($b)."</i>".($x["lengths"][$e]?"(".$x["lengths"][$e].")":"");}echo"<tr title='".h($f)."'><th>$x[type]<td>".implode(", ",$gb)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.'Indizes ändern'."</a>\n";if(fk_support($D)){echo"<h3>".'Fremdschlüssel'."</h3>\n";$fa=foreign_keys($m);if($fa){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Ursprung'."<td>".'Ziel'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($v!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($fa
as$f=>$A){$w=($A["db"]!=""?"<b>".h($A["db"])."</b>.":"").h($A["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$A["source"]))."</i>","<td><a href='".h($A["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($A["db"]),ME):ME)."table=".urlencode($A["table"])."'>$w</a>","(<i>".implode("</i>, <i>",array_map('h',$A["target"]))."</i>)","<td>$A[on_delete]\n","<td>$A[on_update]\n";if($v!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($f)).'">'.'Ändern'.'</a>';}}echo"</table>\n";}if($v!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.'Fremdschlüssel hinzufügen'."</a>\n";}}if(support("trigger")){echo"<h3>".'Trigger'."</h3>\n";$Kc=triggers($m);if($Kc){echo"<table cellspacing='0'>\n";foreach($Kc
as$e=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($e)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($e))."'>".'Ändern'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.'Trigger hinzufügen'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Datenbankschema',"",array(),DB);$wb=array();$Ke=array();$f="adminer_schema";preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]),$ta,PREG_SET_ORDER);foreach($ta
as$k=>$l){$wb[$l[1]]=array($l[2],$l[3]);$Ke[]="\n\t'".js_escape($l[1])."': [ $l[2], $l[3] ]";}$Xb=0;$ne=-1;$Na=array();$Me=array();$Ne=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$Ac=0;$Na[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$Ac+=1.25;$d["pos"]=$Ac;$Na[$a["Name"]]["fields"][$f]=$d;}$Na[$a["Name"]]["pos"]=($wb[$a["Name"]]?$wb[$a["Name"]]:array($Xb,0));foreach($o->foreignKeys($a["Name"])as$b){if(!$b["db"]){$za=$ne;if($wb[$a["Name"]][1]||$wb[$b["table"]][1]){$za=min(floatval($wb[$a["Name"]][1]),floatval($wb[$b["table"]][1]))-1;}else{$ne-=.1;}while($Ne[(string)$za]){$za-=.0001;}$Na[$a["Name"]]["references"][$b["table"]][(string)$za]=array($b["source"],$b["target"]);$Me[$b["table"]][$a["Name"]][(string)$za]=$b["target"];$Ne[(string)$za]=true;}}$Xb=max($Xb,$Na[$a["Name"]]["pos"][0]+2.5+$Ac);}echo'<div id="schema" style="height: ',$Xb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Ke)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Xb,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Na
as$f=>$h){echo"<div class='table' style='top: ".$h["pos"][0]."em; left: ".$h["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($h["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$h["references"]as$Wb=>$mc){foreach($mc
as$za=>$Uc){$oc=$za-$wb[$f][1];$k=0;foreach($Uc[0]as$Ba){echo"<div class='references' title='".h($Wb)."' id='refs$za-".($k++)."' style='left: $oc"."em; top: ".$h["fields"][$Ba]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$oc)."em;'></div></div>\n";}}}foreach((array)$Me[$f]as$Wb=>$mc){foreach($mc
as$za=>$B){$oc=$za-$wb[$f][1];$k=0;foreach($B
as$ha){echo"<div class='references' title='".h($Wb)."' id='refd$za-".($k++)."' style='left: $oc"."em; top: ".$h["fields"][$ha]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.2.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$oc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Na
as$f=>$h){foreach((array)$h["references"]as$Wb=>$mc){foreach($mc
as$za=>$Uc){$Mc=$Xb;$qd=-10;foreach($Uc[0]as$e=>$Ba){$Pe=$h["pos"][0]+$h["fields"][$Ba]["pos"];$Oe=$Na[$Wb]["pos"][0]+$Na[$Wb]["fields"][$Uc[1][$e]]["pos"];$Mc=min($Mc,$Pe,$Oe);$qd=max($qd,$Pe,$Oe);}echo"<div class='references' id='refl$za' style='left: $za"."em; top: $Mc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($qd-$Mc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h($_SERVER["REQUEST_URI"]),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$We="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$e){$We.="&$e=".urlencode($_POST[$e]);}cookie("adminer_export",substr($We,1));$Kb=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$xb=($_POST["format"]=="sql");if($xb){echo"-- Adminer $zc ".$la[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$V=$_POST["db_style"];$_=array(DB);if(DB==""){$_=$_POST["databases"];if(is_string($_)){$_=explode("\n",rtrim(str_replace("\r","",$_),"\n"));}}foreach((array)$_
as$t){if($g->select_db($t)){if($xb&&ereg('CREATE',$V)&&($ka=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1))){if($V=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($t).";\n";}echo($V=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ka):$ka).";\n";}if($xb){if($V){echo
use_sql($t).";\n\n";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$hb="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Sa){foreach(get_rows("SHOW $Sa STATUS WHERE Db = ".q($t),null,"-- ")as$a){$hb.=($V!='DROP+CREATE'?"DROP $Sa IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE $Sa ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$hb.=($V!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($hb){echo"DELIMITER ;;\n\n$hb"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$W=array();foreach(table_status()as$a){$h=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Sd=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($h||$Sd){if(!is_view($a)){if($Kb=="tar"){ob_start();}$o->dumpTable($a["Name"],($h?$_POST["table_style"]:""));if($Sd){$o->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($xb&&$_POST["triggers"]&&$h&&($Kc=trigger_sql($a["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$Kc\nDELIMITER ;\n";}if($Kb=="tar"){echo
tar_file((DB!=""?"":"$t/")."$a[Name].csv",ob_get_clean());}elseif($xb){echo"\n";}}elseif($xb){$W[]=$a["Name"];}}}foreach($W
as$Vb){$o->dumpTable($Vb,$_POST["table_style"],true);}if($Kb=="tar"){echo
pack("x512");}}if($V=="CREATE+ALTER"&&$xb){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
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
			CASE _table_name";foreach(get_rows($j)as$a){$Aa=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $Aa THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$Aa;
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
";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))&&$xb){echo"SELECT @adminer_alter;\n";}}}if($xb){echo"-- ".$g->result("SELECT NOW()")."\n";}exit;}page_header('Exportieren',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Pd=array('','USE','DROP+CREATE','CREATE');$Vd=array('','DROP+CREATE','CREATE');$Od=array('','TRUNCATE+INSERT','INSERT');if($v=="sql"){$Pd[]='CREATE+ALTER';$Vd[]='CREATE+ALTER';$Od[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["auto_increment"]=$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Ergebnis'."<td>".html_select("output",$o->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$o->dumpFormat(),$a["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'Datenbank'."<td>".html_select('db_style',$Pd,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Prozeduren'):"").(support("event")?checkbox("events",1,$a["events"],'Ereignisse'):"")),"<tr><th>".'Tabellen'."<td>".html_select('table_style',$Vd,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto-Inkrement').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Trigger'):""),"<tr><th>".'Daten'."<td>".html_select('data_style',$Od,$a["data_style"]),'</table>
<p><input type="submit" value="Exportieren">

<table cellspacing="0">
';$rd=array();if(DB!=""){$fb=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$fb onclick='formCheck(this, /^tables\\[/);'>".'Tabellen'."</label>","<th style='text-align: right;'><label>".'Daten'."<input type='checkbox' id='check-data'$fb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$W="";foreach(table_status()as$a){$f=$a["Name"];$nc=ereg_replace("_.*","",$f);$fb=($m==""||$m==(substr($m,-1)=="%"?"$nc%":$f));$gb="<tr><td>".checkbox("tables[]",$f,$fb,$f,"formUncheck('check-tables');");if(is_view($a)){$W.="$gb\n";}else{echo"$gb<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$fb,"","formUncheck('check-data');")."</label>\n";}$rd[$nc]++;}echo$W;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Datenbank'."</label></thead>\n";$_=get_databases();if($_){foreach($_
as$t){if(!information_schema($t)){$nc=ereg_replace("_.*","",$t);echo"<tr><td>".checkbox("databases[]",$t,$m==""||$m=="$nc%",$t,"formUncheck('check-databases');")."</label>\n";$rd[$nc]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$ya=true;foreach($rd
as$e=>$b){if($e!=""&&$b>1){echo($ya?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$e%")."'>".h($e)."</a>";$ya=false;}}}elseif(isset($_GET["privileges"])){page_header('Rechte');$i=$g->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$i){echo'<form action=""><p>
';hidden_fields_get();echo'Benutzer: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Ändern">
</form>
';$i=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Benutzer'."<th>".'Server'."</thead>\n";while($a=$i->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'ändern'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Neuer Benutzer'."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$o->dumpTable("","");$o->dumpData("","table",$_POST["query"]);exit;}restart_session();$Af=&get_session("queries");$ab=&$Af[DB];if(!$n&&$_POST["clear"]){$ab=array();redirect(remove_from_uri("history"));}page_header('SQL-Query',$n);if(!$n&&$_POST){$Ka=false;$j=$_POST["query"];if($_POST["webfile"]){$Ka=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($Ka?fread($Ka,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6){$ca=$j.(ereg(';$',$j)?"":";");if(!$ab||end($ab)!=$ca){$ab[]=$ca;}}$Tc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$nd=";";$L=0;$Zb=true;$H=connect();if(is_object($H)&&DB!=""){$H->select_db(DB);}$Cb=0;$Sc=array();$Of='[\'`"]'.($v=="pgsql"?'|\\$[^$]*\\$':($v=="mssql"||$v=="sqlite"?'|\\[':'')).'|/\\*|-- |#';$Kf=explode(" ",microtime());parse_str($_COOKIE["adminer_export"],$bc);$ke=$o->dumpFormat();unset($ke["sql"]);while($j!=""){if(!$L&&$v=="sql"&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$l)){$nd=$l[1];$j=substr($j,strlen($l[0]));}else{preg_match('('.preg_quote($nd)."|$Of|\$)",$j,$l,PREG_OFFSET_CAPTURE,$L);$oa=$l[0][0];$L=$l[0][1]+strlen($oa);if(!$oa&&$Ka&&!feof($Ka)){$j.=fread($Ka,1e5);}else{if(!$oa&&rtrim($j)==""){break;}if($oa&&$oa!=$nd){while(preg_match('('.($oa=='/*'?'\\*/':($oa=='['?']':(ereg('^-- |^#',$oa)?"\n":preg_quote($oa)."|\\\\."))).'|$)s',$j,$l,PREG_OFFSET_CAPTURE,$L)){$ma=$l[0][0];$L=$l[0][1]+strlen($ma);if(!$ma&&$Ka&&!feof($Ka)){$j.=fread($Ka,1e6);}elseif($ma[0]!="\\"){break;}}}else{$Zb=false;$ca=substr($j,0,$l[0][1]);$Cb++;$gb="<pre id='sql-$Cb'><code class='jush-$v'>".shorten_utf8(trim($ca),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$gb;ob_flush();flush();}$ic=explode(" ",microtime());if($g->multi_query($ca)){if(is_object($H)&&preg_match("~^$Tc*(USE)\\b~isU",$ca)){$H->query($ca);}do{$i=$g->store_result();$jc=explode(" ",microtime());$fe=format_time($ic,$jc).(strlen($ca)<1000?" <a href='".h(ME)."sql=".urlencode(trim($ca))."'>".'Ändern'."</a>":"");if(!is_object($i)){if(preg_match("~^$Tc*(CREATE|DROP|ALTER)$Tc+(DATABASE|SCHEMA)\\b~isU",$ca)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($g->info)."'>".lang(array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),$g->affected_rows)."$fe\n";}}else{if($_POST["only_errors"]){echo$gb;$gb="";}select($i,$H);echo"<form action='' method='post'>\n","<p>".($i->num_rows?lang(array('%d Datensatz','%d Datensätze'),$i->num_rows):"").$fe;$R="export-$Cb";$ee=", <a href='#$R' onclick=\"return !toggle('$R');\">".'Exportieren'."</a><span id='$R' class='hidden'>: ".html_select("output",$o->dumpOutput(),$bc["output"])." ".html_select("format",$ke,$bc["format"])."<input type='hidden' name='query' value='".h($ca)."'>"." <input type='submit' name='export' value='".'Exportieren'."' onclick='eventStop(event);'><input type='hidden' name='token' value='$N'></span>";if($H&&preg_match("~^($Tc|\\()*SELECT\\b~isU",$ca)&&($Lf=explain($H,$ca))){$R="explain-$Cb";echo", <a href='#$R' onclick=\"return !toggle('$R');\">EXPLAIN</a>$ee\n","<div id='$R' class='hidden'>\n";select($Lf,$H,($v=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#":""));echo"</div>\n";}else{echo"$ee\n";}echo"</form>\n";}$ic=$jc;}while($g->next_result());}elseif($g->error){echo($_POST["only_errors"]?$gb:""),"<p class='error'>".'Fehler in der SQL-Abfrage'.": ".error()."\n";$Sc[]=" <a href='#sql-$Cb'>$Cb</a>";if($_POST["error_stops"]){break;}}$j=substr($j,$L);$L=0;}}}}if($Zb){echo"<p class='message'>".'Kein Kommando vorhanden.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('SQL-Query erfolgreich ausgeführt.','%d SQL-Queries erfolgreich ausgeführt.'),$Cb-count($Sc)).format_time($Kf,explode(" ",microtime()))."\n";}elseif($Sc&&$Cb>1){echo"<p class='error'>".'Fehler in der SQL-Abfrage'.": ".implode("",$Sc)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$ca=$_GET["sql"];if($_POST){$ca=$_POST["query"];}elseif($_GET["history"]=="all"){$ca=$ab;}elseif($_GET["history"]!=""){$ca=$ab[$_GET["history"]];}textarea("query",$ca,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Datei importieren'.': <input type="file" name="sql_file"> (&lt; '.ini_get("upload_max_filesize").'B)':'Importieren von Dateien abgeschaltet.');echo'<p>
<input type="submit" value="Ausführen" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$N,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Bei Fehler anhalten')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Nur Fehler anzeigen')."\n";print_fieldset("webfile",'Auf Server',$_POST["webfile"]);$gd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$e=>$b){if(extension_loaded($b)){$gd[]=".$e";}}echo
sprintf('Webserver Datei %s',"<code>adminer.sql".($gd?"[".implode("|",$gd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Datei ausführen'.'">',"</div></fieldset>\n";if($ab){print_fieldset("history",'History',$_GET["history"]!="");foreach($ab
as$e=>$b){echo'<a href="'.h(ME."sql=&history=$e").'">'.'Ändern'."</a> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Entleeren'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$s=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$pa=(isset($_GET["select"])?$_POST["edit"]:$s);$p=fields($m);foreach($p
as$f=>$d){if(!isset($d["privileges"][$pa?"update":"insert"])||$o->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$n&&!isset($_GET["select"])){$ga=$_POST["referer"];if($_POST["insert"]){$ga=($pa?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ga)){$ga=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m)," WHERE $s"),$ga,'Datensatz gelöscht.');}else{$r=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$r[idf_escape($f)]=($pa?"\n".idf_escape($f)." = $b":$b);}}if($pa){if(!$r){redirect($ga);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$r),"\nWHERE $s"),$ga,'Datensatz geändert.');}else{$i=insert_into($m,$r);$Yd=($i?last_id():0);queries_redirect($ga,sprintf('Datensatz%s hinzugefügt.',($Yd?" $Yd":"")),$i);}}}$Ga=$o->tableName(table_status($m));page_header(($pa?'Ändern':'Hinzufügen'),$n,array("select"=>array($m,$Ga)),$Ga);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($s){$P=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$P[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($P){$G=get_rows("SELECT".limit(implode(", ",$P)." FROM ".table($m)," WHERE $s",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($G)!=1?null:reset($G));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$o->fieldName($d);$xa=$_GET["set"][bracket_escape($f)];$q=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?+$a[$f]:$a[$f]):(!$pa&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($xa)?$xa:$d["default"]))));if(!$_POST["save"]&&is_string($q)){$q=$o->editVal($q,$d);}$K=($_POST["save"]?(string)$_POST["function"][$f]:($s&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($q===false?null:(isset($q)?'':'NULL'))));if($d["type"]=="timestamp"&&$q=="CURRENT_TIMESTAMP"){$q="";$K="now";}input($d,$q,$K);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".'Speichern'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($pa?'Speichern und weiter bearbeiten':'Speichern und nächsten hinzufügen')."\">\n";}}echo($pa?"<input type='submit' name='delete' value='".'Entfernen'."' onclick=\"return confirm('".'Sind Sie sicher ?'."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$ae=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$de=referencable_primary($m);$fa=array();foreach($de
as$Ga=>$d){$fa[str_replace("`","``",$Ga)."`".str_replace("`","``",$d["field"])]=$Ga;}$Pc=array();$Qc=array();if($m!=""){$Pc=fields($m);$Qc=table_status($m);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),'Tabelle entfernt.');}else{$p=array();$Ja=array();ksort($_POST["fields"]);$Bd=reset($Pc);$Hb="FIRST";foreach($_POST["fields"]as$e=>$d){$A=$fa[$d["type"]];$Cc=(isset($A)?$de[$A]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$xa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($xa!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$xa;}if($e==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$ce=process_field($d,$Cc);if($ce!=process_field($Bd,$Bd)){$p[]=array($d["orig"],$ce,$Hb);}if(isset($A)){$Ja[idf_escape($d["field"])]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($fa[$d["type"]])." (".idf_escape($Cc["field"]).")".(in_array($d["on_delete"],$db)?" ON DELETE $d[on_delete]":"");}$Hb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$Bd=next($Pc);}}$tb="";if(in_array($_POST["partition_by"],$ae)){$Hd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$e=>$b){$q=$_POST["partition_values"][$e];$Hd[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($q!=""?" ($q)":" MAXVALUE");}}$tb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Hd?" (".implode(",",$Hd)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$tb.="\nREMOVE PARTITIONING";}$sa='Tabelle geändert.';if($m==""){cookie("adminer_engine",$_POST["Engine"]);$sa='Tabelle erstellt.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$sa,alter_table($m,$_POST["name"],$p,$Ja,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Qc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Qc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$tb));}}page_header(($m!=""?'Tabelle ändern':'Neue Tabelle erstellen'),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($S["int"])?"int":(isset($S["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$Qc;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Pc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$ac="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($m);$i=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $ac ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$i->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $ac AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Yc){$a["partition_names"][]=$Yc["PARTITION_NAME"];$a["partition_values"][]=$Yc["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$Y=collations();$Ed=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Ed&&count($a["fields"])>$Ed){echo"<p class='error'>".h(sprintf('Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$_d=engines();foreach($_d
as$vb){if(!strcasecmp($vb,$a["Engine"])){$a["Engine"]=$vb;break;}}echo'
<form action="" method="post" id="form">
<p>
Name der Tabelle: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($m==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($_d?html_select("Engine",array(""=>"(".'Motor'.")")+$_d,$a["Engine"]):""),' ',($Y&&!ereg("sqlite|mssql",$v)?html_select("Collation",array(""=>"(".'Kollation'.")")+$Y,$a["Collation"]):""),' <input type="submit" value="Speichern">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Rb=edit_fields($a["fields"],$Y,"TABLE",$Ed,$fa,$a["Comment"]!="");echo'</table>
<p>
Auto-Inkrement: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" onclick="columnShow(this.checked, 5);">Vorgabewerte festlegen</label>
',(support("comment")?checkbox("","",$Rb,'Kommentar',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Rb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Speichern">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$N,'">
';if(support("partitioning")){$je=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Partitionieren um',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$ae,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Partitionen: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($je||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($je?"":" class='hidden'"),'>
<thead><tr><th>Name der Partition<th>Werte</thead>
';foreach($a["partition_names"]as$e=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($e==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$e]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$Rc=array("PRIMARY","UNIQUE","INDEX");$D=table_status($m);if(eregi("MyISAM|M?aria",$D["Engine"])){$Rc[]="FULLTEXT";}$I=indexes($m);if($v=="sqlite"){unset($Rc[0]);unset($I[""]);}if($_POST&&!$n&&!$_POST["add"]){$u=array();foreach($_POST["indexes"]as$x){if(in_array($x["type"],$Rc)){$B=array();$dc=array();$r=array();ksort($x["columns"]);foreach($x["columns"]as$e=>$C){if($C!=""){$X=$x["lengths"][$e];$r[]=idf_escape($C).($X?"(".(+$X).")":"");$B[]=$C;$dc[]=($X?$X:null);}}if($B){foreach($I
as$f=>$zb){ksort($zb["columns"]);ksort($zb["lengths"]);if($x["type"]==$zb["type"]&&array_values($zb["columns"])===$B&&(!$zb["lengths"]||array_values($zb["lengths"])===$dc)){unset($I[$f]);continue
2;}}$u[]=array($x["type"],"(".implode(", ",$r).")");}}}foreach($I
as$f=>$zb){$u[]=array($zb["type"],idf_escape($f),"DROP");}if(!$u){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),'Indizes geändert.',alter_indexes($m,$u));}page_header('Indizes',$n,array("table"=>$m),$m);$p=array_keys(fields($m));$a=array("indexes"=>$I);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$e=>$x){if($x["columns"][count($x["columns"])]!=""){$a["indexes"][$e]["columns"][]="";}}$x=end($a["indexes"]);if($x["type"]||array_filter($x["columns"],'strlen')||array_filter($x["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$e=>$x){$a["indexes"][$e]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index-Typ<th>Spalte (Länge)</thead>
';$qa=1;foreach($a["indexes"]as$x){echo"<tr><td>".html_select("indexes[$qa][type]",array(-1=>"")+$Rc,$x["type"],($qa==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($x["columns"]);$k=1;foreach($x["columns"]as$e=>$C){echo"<span>".html_select("indexes[$qa][columns][$k]",array(-1=>"")+$p,$C,($k==count($x["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$qa][lengths][$k]' size='2' value='".h($x["lengths"][$e])."'> </span>";$k++;}$qa++;}echo'</table>
<p>
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Hinzufügen"></noscript>
<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Datenbank entfernt.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Datenbank umbenannt.',rename_database($_POST["name"],$_POST["collation"]));}else{$_=explode("\n",str_replace("\r","",$_POST["name"]));$Kd=true;$sb="";foreach($_
as$t){if(count($_)==1||$t!=""){if(!create_database($t,$_POST["collation"])){$Kd=false;}$sb=$t;}}queries_redirect(ME."db=".urlencode($sb),'Datenbank erstellt.',$Kd);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Datenbank geändert.');}}page_header(DB!=""?'Datenbank ändern':'Neue Datenbank',$n,array(),DB);$Y=collations();$f=DB;$lc=null;if($_POST){$f=$_POST["name"];$lc=$_POST["collation"];}elseif(DB!=""){$lc=db_collation(DB,$Y);}elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$ia){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ia,$l)&&$l[1]){$f=stripcslashes(idf_unescape("`$l[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($Y?html_select("collation",array(""=>"(".'Kollation'.")")+$Y,$lc):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Speichern">
<?php
if(DB!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.1' alt='+' title='".'Hinzufügen'."'>\n";}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$w=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$w,'Schema wurde gelöscht.');}else{$w.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$w,'Neues Schema erstellt.');}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$w,'Schema geändert.');}else{redirect($w);}}}page_header($_GET["ns"]!=""?'Schema ändern':'Neues Schema',$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="Speichern">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["call"])){$Qa=$_GET["call"];page_header('Aufrufen'.": ".h($Qa),$n);$Sa=routine($Qa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Gb=array();$hb=array();foreach($Sa["fields"]as$k=>$d){if(substr($d["inout"],-3)=="OUT"){$hb[$k]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$Gb[]=$k;}}if(!$n&&$_POST){$Rd=array();foreach($Sa["fields"]as$e=>$d){if(in_array($e,$Gb)){$b=process_input($d);if($b===false){$b="''";}if(isset($hb[$e])){$g->query("SET @".idf_escape($d["field"])." = $b");}}$Rd[]=(isset($hb[$e])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Qa)."(".implode(", ",$Rd).")";echo"<p><code class='jush-$v'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Ändern'."</a>\n";if(!$g->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$i=$g->store_result();if(is_object($i)){select($i);}else{echo"<p class='message'>".lang(array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),$g->affected_rows)."\n";}}while($g->next_result());if($hb){select($g->query("SELECT ".implode(", ",$hb)));}}}echo'
<form action="" method="post">
';if($Gb){echo"<table cellspacing='0'>\n";foreach($Gb
as$e){$d=$Sa["fields"][$e];$f=$d["field"];echo"<tr><th>".$o->fieldName($d);$q=$_POST["fields"][$f];if($q!=""){if($d["type"]=="enum"){$q=+$q;}if($d["type"]=="set"){$q=array_sum($q);}}input($d,$q,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Aufrufen">
<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),'Fremdschlüssel entfernt.');}else{$Ba=array_filter($_POST["source"],'strlen');ksort($Ba);$ha=array();foreach($Ba
as$e=>$b){$ha[$e]=$_POST["target"][$e];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Ba)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$ha)).")".(in_array($_POST["on_delete"],$db)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$db)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?'Fremdschlüssel geändert.':'Fremdschlüssel erstellt.'));$n='Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.'."<br>$n";}}page_header('Fremdschlüssel',$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$fa=foreign_keys($m);$a=$fa[$_GET["name"]];$a["source"][]="";}$Ba=array_keys(fields($m));$ha=($m===$a["table"]?$Ba:array_keys(fields($a["table"])));$Ud=array();foreach(table_status()as$f=>$D){if(fk_support($D)){$Ud[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo'Zieltabelle:
',html_select("table",$Ud,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Ändern"></noscript>
<table cellspacing="0">
<thead><tr><th>Ursprung<th>Ziel</thead>
';$qa=0;foreach($a["source"]as$e=>$b){echo"<tr>","<td>".html_select("source[".(+$e)."]",array(-1=>"")+$Ba,$b,($qa==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$e)."]",$ha,$a["target"][$e]);$qa++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+$db,$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+$db,$a["on_update"]),'<p>
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Spalte hinzufügen"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$Ya=false;if($_POST&&!$n){$Ya=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'View entfernt.','View geändert.','View erstellt.',$m);}page_header(($m!=""?'View ändern':'Neue View erstellen'),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
';if($Ya){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Speichern">
<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["event"])){$pb=$_GET["event"];$Ae=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$yd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($pb),substr(ME,0,-1),'Ereignis entfernt.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Ae)&&isset($yd[$_POST["STATUS"]])){$Zd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($pb!=""?'Ereignis geändert.':'Ereignis erstellt.'),queries(($pb!=""?"ALTER EVENT ".idf_escape($pb).$Zd.($pb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Zd)."\n".$yd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($pb!=""?'Ereignis ändern'.": ".h($pb):'Ereignis erstellen'),$n);$a=array();if($_POST){$a=$_POST;}elseif($pb!=""){$G=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($pb));$a=reset($G);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Ende<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Jede<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Ae,$a["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$yd,$a["STATUS"]),'<tr><th>Kommentar<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Nach der Ausführung erhalten'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Speichern">
';if($pb!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["procedure"])){$Qa=$_GET["procedure"];$Sa=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Ya=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$r=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$r[]=(in_array($d["inout"],$gc)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Ya=drop_create("DROP $Sa ".idf_escape($Qa),"CREATE $Sa ".idf_escape($_POST["name"])." (".implode(", ",$r).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.',$Qa);}page_header(($Qa!=""?(isset($_GET["function"])?'Funktion ändern':'Prozedur ändern').": ".h($Qa):(isset($_GET["function"])?'Neue Funktion':'Neue Prozedur')),$n);$Y=get_vals("SHOW CHARACTER SET");sort($Y);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Qa!=""){$a=routine($Qa,$Sa);$a["name"]=$Qa;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$Y,$Sa);if(isset($_GET["function"])){echo"<tr><td>".'Typ des Rückgabewertes';edit_type("returns",$a["returns"],$Y);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="submit" value="Speichern">
';if($Qa!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}if($Ya){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["sequence"])){$Db=$_GET["sequence"];if($_POST&&!$n){$w=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($Db),$w,'Sequenz gelöscht.');}elseif($Db==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$w,'Neue Sequenz erstellt.');}elseif($Db!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($Db)." RENAME TO ".idf_escape($_POST["name"]),$w,'Sequenz geändert.');}else{redirect($w);}}page_header($Db!=""?'Sequenz ändern'.": ".h($Db):'Neue Sequenz',$n);$a=array("name"=>$Db);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="Speichern">
';if($Db!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["type"])){$Oc=$_GET["type"];if($_POST&&!$n){$w=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Oc),$w,'Typ gelöscht.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$w,'Typ erstellt.');}}page_header($Oc!=""?'Typ ändern'.": ".h($Oc):'Typ erstellen',$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
';if($Oc!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Speichern'."'>\n";}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Xc=trigger_options();$af=array("INSERT","UPDATE","DELETE");$Ya=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Xc["Timing"])&&in_array($_POST["Event"],$af)&&in_array($_POST["Type"],$Xc["Type"])){$Ye=" $_POST[Timing] $_POST[Event]";$_b=" ON ".table($m);$Ya=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($v=="pgsql"?$_b:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($v=="mssql"?$_b.$Ye:$Ye.$_b).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($m),'Trigger entfernt.','Trigger geändert.','Trigger erstellt.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Trigger ändern'.": ".h($_GET["name"]):'Trigger hinzufügen'),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Zeitpunkt<td>',html_select("Timing",$Xc["Timing"],$a["Timing"],"if (/^".h(preg_quote($m,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(js_escape($m))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Ereignis<td>',html_select("Event",$af,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$Xc["Type"],$a["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="submit" value="Speichern">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}if($Ya){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["user"])){$wd=$_GET["user"];$ra=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Dc){$ra[$Dc][$a["Privilege"]]=$a["Comment"];}}$ra["Server Admin"]+=$ra["File access on server"];$ra["Databases"]["Create routine"]=$ra["Procedures"]["Create routine"];unset($ra["Procedures"]["Create routine"]);$ra["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$ra["Columns"][$b]=$ra["Tables"][$b];}unset($ra["Server Admin"]["Usage"]);foreach($ra["Tables"]as$e=>$b){unset($ra["Databases"][$e]);}$pc=array();if($_POST){foreach($_POST["objects"]as$e=>$b){$pc[$b]=(array)$pc[$b]+(array)$_POST["grants"][$e];}}$jb=array();$Hc="";if(isset($_GET["host"])&&($i=$g->query("SHOW GRANTS FOR ".q($wd)."@".q($_GET["host"])))){while($a=$i->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$l)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$l[1],$ta,PREG_SET_ORDER)){foreach($ta
as$b){if($b[1]!="USAGE"){$jb["$l[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$jb["$l[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$l)){$Hc=$l[1];}}}if($_POST&&!$n){$Yb=(isset($_GET["host"])?q($wd)."@".q($_GET["host"]):"''");$mb=q($_POST["user"])."@".q($_POST["host"]);$ud=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Yb",ME."privileges=",'Benutzer entfernt.');}else{if($Yb!=$mb){$n=!queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $mb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $ud");}elseif($_POST["pass"]!=$Hc||!$_POST["hashed"]){queries("SET PASSWORD FOR $mb = ".($_POST["hashed"]?$ud:"PASSWORD($ud)"));}if(!$n){$wc=array();foreach($pc
as$Za=>$ia){if(isset($_GET["grant"])){$ia=array_filter($ia);}$ia=array_keys($ia);if(isset($_GET["grant"])){$wc=array_diff(array_keys(array_filter($pc[$Za],'strlen')),$ia);}elseif($Yb==$mb){$me=array_keys((array)$jb[$Za]);$wc=array_diff($me,$ia);$ia=array_diff($ia,$me);unset($jb[$Za]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Za,$l)&&(!grant("REVOKE",$wc,$l[2]," ON $l[1] FROM $mb")||!grant("GRANT",$ia,$l[2]," ON $l[1] TO $mb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Yb!=$mb){queries("DROP USER $Yb");}elseif(!isset($_GET["grant"])){foreach($jb
as$Za=>$wc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Za,$l)){grant("REVOKE",array_keys($wc),$l[2]," ON $l[1] FROM $mb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Benutzer geändert.':'Benutzer erstellt.'),!$n);if($Yb!=$mb){$g->query("DROP USER $mb");}}}page_header((isset($_GET["host"])?'Benutzer'.": ".h("$wd@$_GET[host]"):'Neuer Benutzer'),$n,array("privileges"=>array('','Rechte')));if($_POST){$a=$_POST;$jb=$pc;}else{$a=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Hc;if($Hc!=""){$a["hashed"]=true;}$jb[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Benutzer<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Passwort<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Rechte'."</a>";$k=0;foreach($jb
as$Za=>$ia){echo'<th>'.($Za!="*.*"?"<input name='objects[$k]' value='".h($Za)."' size='10'>":"<input type='hidden' name='objects[$k]' value='*.*' size='10'>*.*");$k++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Datenbank',"Tables"=>'Tabelle',"Columns"=>'Spalte',"Procedures"=>'Rutine',)as$Dc=>$xc){foreach((array)$ra[$Dc]as$kc=>$Aa){echo"<tr".odd()."><td".($xc?">$xc<td":" colspan='2'").' lang="en" title="'.h($Aa).'">'.h($kc);$k=0;foreach($jb
as$Za=>$ia){$f="'grants[$k][".h(strtoupper($kc))."]'";$q=$ia[strtoupper($kc)];if($Dc=="Server Admin"&&$Za!=(isset($jb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($q?" selected":"").">".'Erlauben'."<option value='0'".($q=="0"?" selected":"").">".'Verbieten'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($q?" checked":"").($kc=="All privileges"?" id='grants-$k-all'":($kc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$k-all');\"")).">";}$k++;}}}echo"</table>\n",'<p>
<input type="submit" value="Speichern">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$n){$hd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$hd++;}}queries_redirect(ME."processlist=",lang(array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),$hd),$hd||!$_POST["kill"]);}page_header('Prozessliste',$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$k=-1;foreach(get_rows("SHOW FULL PROCESSLIST")as$k=>$a){if(!$k){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0);foreach($a
as$e=>$b){echo"<td>".($e=="Info"&&$b!=""?"<code class='jush-$v'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Ändern'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>',($k+1)."/".sprintf('%d insgesamt',$g->result("SELECT @@max_connections")),'<p>
<input type="submit" value="Anhalten">
<input type="hidden" name="token" value="',$N,'">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$D=table_status($m);$I=indexes($m);$p=fields($m);$fa=column_foreign_keys($m);if($D["Oid"]=="t"){$I[]=array("type"=>"PRIMARY","columns"=>array("oid"));}$he=array();$B=array();$yb=null;foreach($p
as$e=>$d){$f=$o->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$B[$e]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$yb=$o->selectLengthProcess();}}$he+=$d["privileges"];}list($P,$na)=$o->selectColumnsProcess($B,$I);$s=$o->selectSearchProcess($p,$I);$cb=$o->selectOrderProcess($p,$I);$M=$o->selectLimitProcess();$ac=($P?implode(", ",$P):($D["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($m);$md=($na&&count($na)<count($P)?"\nGROUP BY ".implode(", ",$na):"").($cb?"\nORDER BY ".implode(", ",$cb):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Xa=>$a){echo$g->result("SELECT".limit(idf_escape(key($a))." FROM ".table($m)," WHERE ".where_check($Xa).($s?" AND ".implode(" AND ",$s):"").($cb?" ORDER BY ".implode(", ",$cb):""),1));}exit;}if($_POST&&!$n){$Ld="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ma=$ad=null;foreach($I
as$x){if($x["type"]=="PRIMARY"){$Ma=array_flip($x["columns"]);$ad=($P?$Ma:array());break;}}foreach($P
as$e=>$b){$b=$_GET["columns"][$e];if(!$b["fun"]){unset($ad[$b["col"]]);}}if($_POST["export"]){dump_headers($m);$o->dumpTable($m,"");if(!is_array($_POST["check"])||$ad===array()){$Tb=$s;if(is_array($_POST["check"])){$Tb[]="($Ld)";}$j="SELECT $ac".($Tb?"\nWHERE ".implode(" AND ",$Tb):"").$md;}else{$Ue=array();foreach($_POST["check"]as$b){$Ue[]="(SELECT".limit($ac,"\nWHERE ".($s?implode(" AND ",$s)." AND ":"").where_check($b).$md,1).")";}$j=implode(" UNION ALL ",$Ue);}$o->dumpData($m,"table",$j);exit;}if(!$o->selectEmailProcess($s,$fa)){if($_POST["save"]||$_POST["delete"]){$i=true;$qb=0;$j=table($m);$r=array();if(!$_POST["delete"]){foreach($B
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$r[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$r[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($r)).")\nSELECT ".implode(", ",$r)."\nFROM ".table($m):" SET\n".implode(",\n",$r));}if($_POST["delete"]||$r){$bd="UPDATE";if($_POST["delete"]){$bd="DELETE";$j="FROM $j";}if($_POST["clone"]){$bd="INSERT";$j="INTO $j";}if($_POST["all"]||($ad===array()&&$_POST["check"])||count($na)<count($P)){$i=queries($bd." $j".($_POST["all"]?($s?"\nWHERE ".implode(" AND ",$s):""):"\nWHERE $Ld"));$qb=$g->affected_rows;}else{foreach((array)$_POST["check"]as$b){$i=queries($bd.limit1($j,"\nWHERE ".where_check($b)));if(!$i){break;}$qb+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),sprintf('%d Artikel betroffen.',$qb),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n='Doppelklick zum Bearbeiten des Wertes.';}else{$i=true;$qb=0;foreach($_POST["val"]as$Xa=>$a){$r=array();foreach($a
as$e=>$b){$e=bracket_escape($e,1);$r[]=idf_escape($e)." = ".(ereg('char|text',$p[$e]["type"])||$b!=""?$o->processInput($p[$e],$b):"NULL");}$j=table($m)." SET ".implode(", ",$r);$Tb=" WHERE ".where_check($Xa).($s?" AND ".implode(" AND ",$s):"");$i=queries("UPDATE".(count($na)<count($P)?" $j$Tb":limit1($j,$Tb)));if(!$i){break;}$qb+=$g->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d Artikel betroffen.',$qb),$i);}}elseif(is_string($Fa=get_file("csv_file",true))){$i=true;$ob=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Fa,$ta);$qb=count($ta[0]);begin();$Pa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ta[0]as$e=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Pa]*)$Pa~",$b.$Pa,$id);if(!$e&&!array_diff($id[1],$ob)){$ob=$id[1];$qb--;}else{$r=array();foreach($id[1]as$k=>$Fc){$r[idf_escape($ob[$k])]=($Fc==""&&$p[$ob[$k]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Fc))));}$i=insert_update($m,$r,$Ma);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),$qb),$i);queries("ROLLBACK");}else{$n=upload_error($Fa);}}}$Ga=$o->tableName($D);page_header('Daten zeigen von'.": $Ga",$n);session_write_close();$r=null;if(isset($he["insert"])){$r="";foreach((array)$_GET["where"]as$b){if(count($fa[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$r.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$o->selectLinks($D,$r);if(!$B){echo"<p class='error'>".'Auswahl der Tabelle fehlgeschlagen'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$o->selectColumnsPrint($P,$B);$o->selectSearchPrint($s,$B,$I);$o->selectOrderPrint($cb,$B,$I);$o->selectLimitPrint($M);$o->selectLengthPrint($yb);$o->selectActionPrint($yb);echo"</form>\n";$aa=$_GET["page"];if($aa=="last"){$Va=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));$aa=floor(max(0,$Va-1)/$M);}$j="SELECT".limit((+$M&&$na&&count($na)<count($P)&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").$ac,($s?"\nWHERE ".implode(" AND ",$s):"").$md,($M!=""?+$M:null),($aa?$M*$aa:0),"\n");echo$o->selectQuery($j);$i=$g->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($v=="mssql"){$i->seek($M*$aa);}$Vc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$G=array();while($a=$i->fetch_assoc()){$G[]=$a;}if($_GET["page"]!="last"){$Va=(+$M&&$na&&count($na)<count($P)?($v=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($j) x")):count($G));}if(!$G){echo"<p class='message'>".'Keine Daten.'."\n";}else{$zd=$o->backwardKeys($m,$Ga);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$na&&$P?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'ändern'."</a>");$Cd=array();$Z=array();reset($P);$De=1;foreach($G[0]as$e=>$b){if($D["Oid"]!="t"||$e!="oid"){$b=$_GET["columns"][key($P)];$d=$p[$P?$b["col"]:$e];$f=($d?$o->fieldName($d,$De):"*");if($f!=""){$De++;$Cd[$e]=$f;$C=idf_escape($e);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($e).($cb[0]==$C||$cb[0]==$e||(!$cb&&$na[0]==$C)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$Z[$e]=$b["fun"];next($P);}}$dc=array();if($_GET["modify"]){foreach($G
as$a){foreach($a
as$e=>$b){$dc[$e]=max($dc[$e],min(40,strlen(utf8_decode($b))));}}}echo($zd?"<th>".'Relationen':"")."</thead>\n";foreach($o->rowDescriptions($G,$fa)as$ea=>$a){$Fd=unique_array($G[$ea],$I);$Xa="";foreach($Fd
as$e=>$b){$Xa.="&".(isset($b)?urlencode("where[".bracket_escape($e)."]")."=".urlencode($b):"null%5B%5D=".urlencode($e));}echo"<tr".odd().">".(!$na&&$P?"":"<td>".checkbox("check[]",substr($Xa,1),in_array(substr($Xa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($na)<count($P)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($m).$Xa)."'>".'ändern'."</a>"));foreach($a
as$e=>$b){if(isset($Cd[$e])){$d=$p[$e];if($b!=""&&(!isset($Vc[$e])||$Vc[$e]!="")){$Vc[$e]=(is_mail($b)?$Cd[$e]:"");}$w="";$b=$o->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$w=h(ME.'download='.urlencode($m).'&field='.urlencode($e).$Xa);}if($b===""){$b="&nbsp;";}elseif($yb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$yb));}else{$b=h($b);}if(!$w){foreach((array)$fa[$e]as$A){if(count($fa[$e])==1||end($A["source"])==$e){$w="";foreach($A["source"]as$k=>$Ba){$w.=where_link($k,$A["target"][$k],$G[$ea][$Ba]);}$w=h(($A["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($A["db"]),ME):ME).'select='.urlencode($A["table"]).$w);if(count($A["source"])==1){break;}}}}if($e=="COUNT(*)"){$w=h(ME."select=".urlencode($m));$k=0;foreach((array)$_GET["where"]as$y){if(!array_key_exists($y["col"],$Fd)){$w.=h(where_link($k++,$y["col"],$y["val"],$y["op"]));}}foreach($Fd
as$Ha=>$y){$w.=h(where_link($k++,$Ha,$y));}}}if(!$w){if(is_mail($b)){$w="mailto:$b";}if($Jd=is_url($a[$e])){$w=($Jd=="http"&&$tc?$a[$e]:"$Jd://www.adminer.org/redirect/?url=".urlencode($a[$e]));}}$R=h("val[$Xa][".bracket_escape($e)."]");$q=$_POST["val"][$Xa][bracket_escape($e)];$xe=h(isset($q)?$q:$a[$e]);$cf=strpos($b,"<i>...</i>");$Le=is_utf8($b)&&$G[$ea][$e]==$a[$e]&&!$Z[$e];$Qe=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$Le)||isset($q)?"<td>".($Qe?"<textarea name='$R' cols='30' rows='".(substr_count($a[$e],"\n")+1)."'>$xe</textarea>":"<input name='$R' value='$xe' size='$dc[$e]'>"):"<td id='$R' ondblclick=\"".($Le?"selectDblClick(this, event".($cf?", 2":($Qe?", 1":"")).")":"alert('".h('Benutzen Sie den Link zum editieren dieses Wertes.')."')").";\">".$o->selectVal($b,$w,$d));}}if($zd){echo"<td>";}$o->backwardKeysPrint($zd,$G[$ea]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$bc);if($G||$aa){$od=true;if($_GET["page"]!="last"&&+$M&&count($na)>=count($P)&&($Va>=$M||$aa)){$Va=$D["Rows"];if(!isset($Va)||$s||($D["Engine"]=="InnoDB"&&$Va<max(1e4,2*($aa+1)*$M))){ob_flush();flush();$Va=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));}else{$od=false;}}echo"<p class='pages'>";if(+$M&&$Va>$M){$pd=floor(($Va-1)/$M);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Seite'."', '".($aa+1)."'), event); return false;\">".'Seite'."</a>:",pagination(0,$aa).($aa>5?" ...":"");for($k=max(1,$aa-4);$k<min($pd,$aa+5);$k++){echo
pagination($k,$aa);}echo($aa+5<$pd?" ...":"").($od?pagination($pd,$aa):' <a href="'.h(remove_from_uri()."&page=last").'">'.'letzte'."</a>");}echo" (".($od?"":"~ ").lang(array('%d Datensatz','%d Datensätze'),$Va).") ".checkbox("all",1,0,'Gesamtergebnis')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Ändern</legend><div>
<input type="submit" value="Speichern" title="Doppelklick zum Bearbeiten des Wertes." class="jsonly">
<input type="submit" name="edit" value="Ändern">
<input type="submit" name="clone" value="Klonen">
<input type="submit" name="delete" value="Entfernen" onclick="return confirm('Sind Sie sicher ? (' + (this.form['all'].checked ? <?php echo$Va,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Exportieren');$La=$o->dumpOutput();echo($La?html_select("output",$La,$bc["output"])." ":""),html_select("format",$o->dumpFormat(),$bc["format"])," <input type='submit' name='export' value='".'Exportieren'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}print_fieldset("import",'Importieren',!$G);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$bc["format"],1);echo" <input type='submit' name='import' value='".'Importieren'."'>","<input type='hidden' name='token' value='$N'>\n","</div></fieldset>\n";$o->selectEmailPrint(array_filter($Vc,'strlen'),$B);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$fc=isset($_GET["status"]);page_header($fc?'Status':'Variablen');$Xd=($fc?show_status():show_variables());if(!$Xd){echo"<p class='message'>".'Keine Daten.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($Xd
as$e=>$b){echo"<tr>","<th><code class='jush-".$v.($fc?"status":"set")."'>".h($e)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Wc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$R=js_escape($a["Name"]);json_row("Comment-$R",nbsp($a["Comment"]));if(!is_view($a)){foreach(array("Engine","Collation")as$e){json_row("$e-$R",nbsp($a[$e]));}foreach($Wc+array("Auto_increment"=>0,"Rows"=>0)as$e=>$b){if($a[$e]!=""){$b=number_format($a[$e],0,'.',' ');json_row("$e-$R",($e=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($Wc[$e])){$Wc[$e]+=($a["Engine"]!="InnoDB"||$e!="Data_free"?$a[$e]:0);}}elseif(array_key_exists($e,$a)){json_row("$e-$R");}}}}foreach($Wc
as$e=>$b){json_row("sum-$e",number_format($b,0,'.',' '));}json_row("");}else{foreach(count_tables(get_databases())as$t=>$b){json_row("tables-".js_escape($t),$b);}json_row("");}exit;}else{$ie=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($ie&&!$n&&!$_POST["search"]){$i=true;$sa="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$i=truncate_tables($_POST["tables"]);}$sa='Tabellen sind entleert worden (truncate).';}elseif($_POST["move"]){$i=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$sa='Tabellen verschoben.';}elseif($_POST["copy"]){$i=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$sa='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"]){$i=drop_views($_POST["views"]);}if($i&&$_POST["tables"]){$i=drop_tables($_POST["tables"]);}$sa='Tabellen wurden entfernt (drop).';}elseif($_POST["tables"]&&($i=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$i->fetch_assoc()){$sa.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$sa,$i);}page_header(($_GET["ns"]==""?'Datenbank'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);if($o->homepage()){if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.'Datenbankschema'."</a>\n","<h3>".'Tabellen und Views'."</h3>\n";$Nc=tables_list();if(!$Nc){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Suche in Tabellen'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Suchen'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabelle'.'<td>'.'Motor'.'<td>'.'Collation'.'<td>'.'Datengrösse'.'<td>'.'Indexgrösse'.'<td>'.'Freier Bereich'.'<td>'.'Auto-Inkrement'.'<td>'.'Datensätze'.(support("comment")?'<td>'.'Kommentar':'')."</thead>\n";foreach($Nc
as$f=>$z){$Vb=(isset($z)&&!eregi("table",$z));echo'<tr'.odd().'><td>'.checkbox(($Vb?"views[]":"tables[]"),$f,in_array($f,$ie,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($Vb){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$e=>$w){echo($w?"<td align='right'><a href='".h(ME."$w=").urlencode($f)."' id='$e-".h($f)."'>?</a>":"<td id='$e-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d insgesamt',count($Nc)),"<td>".nbsp($v=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$e){echo"<td align='right' id='sum-$e'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p>".($v=="sql"?"<input type='submit' value='".'Analysieren'."'> <input type='submit' name='optimize' value='".'Optimieren'."'> <input type='submit' name='check' value='".'Prüfen'."'> <input type='submit' name='repair' value='".'Reparieren'."'> ":"")."<input type='submit' name='truncate' value='".'Entleeren (truncate)'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Entfernen'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$_=(support("scheme")?schemas():get_databases());if(count($_)!=1&&$v!="sqlite"){$t=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'In andere Datenbank verschieben'.": ",($_?html_select("target",$_,$t):'<input name="target" value="'.h($t).'">')," <input type='submit' name='move' value='".'Verschieben'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$N'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Neue Tabelle erstellen'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Neue View erstellen'."</a>\n";}if(support("routine")){echo"<h3>".'Prozeduren'."</h3>\n";$be=routines();if($be){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Typ'.'<td>'.'Typ des Rückgabewertes'."<td>&nbsp;</thead>\n";odd('');foreach($be
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Ändern'."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.'Neue Prozedur'.'</a> <a href="'.h(ME).'function=">'.'Neue Funktion'."</a>\n";}if(support("sequence")){echo"<h3>".'Sequenz'."</h3>\n";$Md=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Md){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Md
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Neue Sequenz'."</a>\n";}if(support("type")){echo"<h3>".'Benutzer-definierte Typen'."</h3>\n";$S=types();if($S){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($S
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Typ erstellen'."</a>\n";}if(support("event")){echo"<h3>".'Ereignisse'."</h3>\n";$G=get_rows("SHOW EVENTS");if($G){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Zeitplan'."<td>".'Start'."<td>".'Ende'."</thead>\n";foreach($G
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'Zur angegebenen Zeit'."<td>".$a["Execute at"]:'Jede'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Ereignis erstellen'."</a>\n";}if($Nc){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();