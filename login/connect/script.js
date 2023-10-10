$(function(){
  $("#button").click(function(){
    var email = $("input[name=email]").val();
    var pass = $("input[name=password]").val();
	var bos = '';
	if(email == bos || pass == bos)
	{
		window.location= "index.php";
	}
	else
	{
		var pat=/^[a-z0-9\.\_]+@{1}[a-z]{3,12}\.[a-z]{2,6}/i,
		ifade=pat.test(document.getElementsByTagName("input")[0].value);
		if(ifade == true)
		{
			$.post("post.php",{"email" : email , "password" : pass},function(veri){
				$("#bb").html(veri);
			});
		}
		else
		{
			window.location= "index.php";
		}
	}
  });
});
