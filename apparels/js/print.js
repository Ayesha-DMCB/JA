function PrintElem(elem, title)
{
	Popup($(elem).html(), title);
}

function Popup(data, title) 
{
	//var mywindow = window.open('sdf', 'Print', 'height=400,width=600');
	var mywindow = window.open("", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=0, left=0, width=800, height=800");
	//mywindow.document.write('<html><head><title>'+title+'</title>');
	mywindow.document.write('<html><head><title>' + title + '</title><link rel="stylesheet" type="text/css" href="css/adminpanel_style.css"></head>');
	//mywindow.document.write('<base href=" http://localhost/IBDA/">');
	//mywindow.document.write('<link rel="stylesheet" href="css/adminpanel_style.css" type="text/css"/>');
	mywindow.document.write('<body style="font-size:10px;"><table border="1" width="100%" style="border:1px solid #ccc;border-collapse:collapse;padding:10px;">');
	mywindow.document.write(data);
	mywindow.document.write('</table></body></html>');

	mywindow.print();
	mywindow.close();
	
	return true;
}
