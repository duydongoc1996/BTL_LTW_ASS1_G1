$(function(){
 $('input#sub').click(function(){
    var txttitle=$('input#title').val();
	var txtname=$('input#name').val();
	var txtemail=$('input#email').val();
	var txtcontent=$('textarea#content').val();
   ////////////
	if(txttitle=="")
	{
	 $('span#title').text("Tiêu đề không được rỗng !");
	 title.focus();
	}
	else
	{
	  $('span#title').text("");
	  kq="success";
	}
	//
	if(txtname=="")
	{
	 $('span#name').text("Tên không được rỗng !");
	 name.focus();
	}
	else
	{
	  $('span#name').text("");
	  kq1="success";
	}
	//
	if(txtemail=="")
	{
	 $('span#email').text("Email không được rỗng !");
	 email.focus();
	}
	else
	{
	  var typemail= /^[\w.-]+@[\w.-]+\.[A-Za-z]{2,4}$/;
		kqt=typemail.test(txtemail);
	if(kqt==false)
		{
	      $('span#email').text("Email không hợp lệ !");
		  email.focus();
	   }
	  else
	  {
	   $('span#email').text("");
	    kq2="success";
	  }
	}
	//
	if(txtcontent=="")
	{
	 $('span#content').text("Nội dung không được rỗng !");
	 content.focus();
	}
	else
	{
	  $('span#content').text("");
	  kq3="success";
	}
	/////////
	if(kq.length>2 && kq1.length>2 && kq2.length>2 && kq3.length>2)
	{
	 str=txttitle+"/"+txtname+"/"+txtemail+"/"+txtcontent;
	  $.ajax({
	   url:"xulicauhoi.php",
	   type:'post',
	   data:'t='+str,
	   async:false,
	   success:function(val){
	   //$('h4#tb').html(val);
		window.location="datcauhoi.php";
	   }
	  });
	}
  });
  
  
});