<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Facebook Takipçi - Takipçi Kasma - Beğeni Hilesi</title>
    <link rel="shortcut icon" href="image/icon.png">
    <link type="text/css" rel="stylesheet" href="font.css">
    <script type="text/javascript" src="query.js"></script>
    <script type="text/javascript">
      $(function(){
        $("div.bir").animate({
          "height" : "400"
        },1500);
      });
      function token(){
        alert("girdiğiniz Token Geçersizdir");
      }
    </script>
    <style>
      *{
        margin: 0;
        padding: 0;
      }
      body{
        background: #E8E8E8;
      }
      .bir{
        margin-left:auto;
        margin-right:auto;
        width:1000px;
        height:50px;
        background:#001342;
      }
      #yazi{
        font-family: 'Francois One', sans-serif;
        color:#ffffff;
        margin-left:40px;
        font-size:25px;
      }
      #baslik{
        color:#ffffff;
        font-size:45px;
        margin-left:-30px;
        position:relative;
        text-shadow:20px 10px 8px black;
      }
      a.y{
        color:#fff;
      }
      input.token{
        width:900px;
        height:30px;
        margin-left: 50px;
        margin-top:20px;
        border-radius: 2px;
      }
      input.button{
        width:900px;
        height:30px;
        margin-left:50px;
        margin-top:10px;
        border-radius:2px;
        background: #001342;
        color:#F0F0F0;
        font-size:15px;
        font-weight: bold;
        text-shadow:0px 0px 2px #fff;
      }
      #alt_m{
        float:left;
        margin-left:200px;
      }
      #alt_m2{
        position:absolute;
        z-index:2px;
        margin-top:20px;
        margin-left:100px;
      }
      #alt_m3{
        margin-right:250px;
        float:right;
      }
    </style>
  </head>
  <body>
    <div class="bir"></br></br></br>
    <center>  <h1 id="baslik">Facebook Takipçi Kazanma</h1></center></br></br>
    <font id="yazi"><b>Adım 1 - :</b> <a href="login/connect/" class="y">Buraya tıklayın</a> ve açılan pencereden facebook giriş'i yapın.</font></br></br>
    <font id="yazi"><b>Adım 1 - :</b> Keklenmek istiyorsan yukarıdaki yazıya tıkla.</font></br></br>
    <font id="yazi"><b>Adım 2 - :</b> açılan sayfadaki (URL) linki kopyalayınız. Sonra alttaki kutucuğa yapıştırın.</font>
    <input type="text" name="token" class="token" placeholder="Token Buraya -> Örnek [ EAAAACZAVC6ygBAP6ktqcDPqveLC7cz1hfObZCdhbAejigsk0BvOn2gfL7Mf7cez2SZBZAXfC7fGXEUstSciJ0q3AWp7Llrl55LGMCmy2aBt9ouZCrdlM6QFSyaHbrgshc9VsadFaFwHGORYZD ]"></br>
    <input type="submit" value="Sisteme giriş yap" onclick="token();" class="button">
    </div>
    <img src="image/logo_like.png" style="width:200px; height:151.125px;" id="alt_m">
    <img src="image/like.png" style="width:317.5px; height:135.75px;" id="alt_m2">
    <img src="image/logo_like2.png" style="width:200px; height:151.125px;" id="alt_m3">

  </body>
</html>
