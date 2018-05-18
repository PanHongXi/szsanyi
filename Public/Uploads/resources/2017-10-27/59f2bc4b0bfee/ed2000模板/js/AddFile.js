var s=["FileCategory","SubCategory"];
var opt0 = ["请选择","请选择"];
function Dsy() { this.Items = {};}
Dsy.prototype.add = function(id,iArray1,iArray2) { this.Items[id] = iArray1} 
Dsy.prototype.Exists = function(id) { if(typeof(this.Items[id]) == "undefined") return false; return true; };

function change(v,fc,sc){
	var str="0",cindex=-1;
	if(fc)cindex=categoryIndex(dsy.Items[str],fc);
	if(v==1&&sc)cindex=categoryIndex(dsy.Items[str+"_"+cindex],sc);
	for(i=0;i<v;i++){ str+=("_"+(document.getElementById(s[i]).selectedIndex-1));};
	var ss=document.getElementById(s[v]);
	with(ss){
		length = 0;
		options[0]=new Option(opt0[v],'');
		if(v && document.getElementById(s[v-1]).selectedIndex>0 || !v)
		{
			if(dsy.Exists(str)){
				ar = dsy.Items[str];
				for(i=0;i<ar.length;i++)options[length]=new Option(ar[i],ar[i]);
				if (v==1&&sc&&cindex==-1){options[length]=new Option(sc,sc);cindex=length-2;}
				options[cindex+1].selected = true;
			}
		}
		if(++v<s.length){change(v,fc,sc);}
	}
	document.getElementById("checkFileCategory").style.display="none";
}

function categoryIndex(arr,cn){
	var CI=-1
	for(i=0;i<arr.length;i++){if (arr[i]==cn){CI=i;break;}}
	return CI;
}

var dsy = new Dsy();









function unfocusFileCategory()
{
	document.getElementById("checkFileCategory").style.display="none";
	if(document.getElementById("FileCategory").selectedIndex == 0||document.getElementById("SubCategory").selectedIndex == 0)
	{
		document.getElementById("checkFileCategory").innerHTML="请选择资源所属类别(包括大类和小类)";
		document.getElementById("checkFileCategory").style.color='#FF0000';
		document.getElementById("checkFileCategory").style.display="inline";
		return false;
	}
	return true;
}


function CheckForm(form){

	if(form.MagnetURI.value.length<1 && form.FileUrl.value.length<1 ){
		alert('请输入资源的磁力链接 或 eD2k地址');
		return false;
	}
	if(form.FileUrl.value.length>1){

		if(form.FileUrl.value.toLowerCase().indexOf("ed2k://")<0 ){
			alert("ed2k链接输入错误");
			return false;
		}

		form.FileUrl.value=decodeURIComponent(form.FileUrl.value);
	}
	if(form.MagnetURI.value.length>1){

		if(form.MagnetURI.value.toLowerCase().indexOf("magnet:?")<0 ){
			alert("磁力链接输入错误");
			return false;
		}

		form.MagnetURI.value=decodeURIComponent(form.MagnetURI.value);
		if(form.FileTitle.value.length<1 ){
			form.FileTitle.value=request("dn")
		}
	}
	if(form.FileTitle.value.length<1){
		alert("请输入资源标题");
		form.FileTitle.focus();
		return false;
	}

	FileSummary=$('#contents').xheditor().getSource();
	if(FileSummary.length < 1){
		alert('请输入资源简介');
		return false;
	}

	if(form.FileCategory.value.length<1){
		alert('请选择资源类别');
		form.FileCategory.focus();
		return false;
	}
	if(form.SubCategory.value.length<1 && form.SubCategory2.value.length<1){
		alert('请选择资源子类别');
		form.SubCategory.focus();
		return false;
	}

	return true;
}


function request(paras){ 
	var url = document.form1.MagnetURI.value; 
	var paraString = url.substring(url.indexOf("?")+1,url.length).split("&"); 
	var paraObj = {} 
	for (i=0; j=paraString[i]; i++){ 
		paraObj[j.substring(0,j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=")+1,j.length); 
	} 
	var returnValue = paraObj[paras.toLowerCase()]; 
	if(typeof(returnValue)=="undefined"){ 
		return ""; 
	}else{ 
		return returnValue; 
	} 
}