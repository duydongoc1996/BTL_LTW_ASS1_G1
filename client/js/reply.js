$(function(){
 $('div.reply').hide();
  $('div#listquestion').each(function(){
        var a=$(this);
		//tra loi
		 a.find('a#reply').click(function(){
			     a.find('div.reply').slideToggle();
		   });
		   // click vao nut gui
		a.find('input#send').click(function(){
			var id=a.find('input#id').val();
			var name=a.find('input#ten').val();
			var email=a.find('input#mail').val();
			var noidung=a.find('textarea#noidungr').val();
			//Niu noi dung >0 thi tro ve mac dinh
			a.find('input#ten').keyup(function(){
			      a.find('input#ten').css({'background':'#fff'}); 
			});
			///////////////////////////////////////////
	
			if(name=="")
			{ 
			 a.find('input#ten').css({'background':'#ff3300'}); 
			}
			else
			{ 
			 kq="success";
			}
			if(noidung=="")
			{
			alert("Chưa nhập nội dung !");
			
			}
			else
			{
			 kq1="success";
			}
			if(kq.length>2 && kq1.length>2)
			{
			  str=name+"/"+email+"/"+noidung+"/"+id;
			  $.ajax({
			    url:'xulicautraloi.php',
				type:'post',
				data:'gt='+str,
				async:false,
				success:function(){
				 window.location="datcauhoi.php";
				}
			  });
			}
		});
	});
	
});