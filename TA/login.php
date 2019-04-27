<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Form Pendaftaran</title>
 <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="daftar_style.css">
</head>
<style media="screen">
/* Main navigation block element */
#cssmenu{
height:37px;
display:block;
padding:0;
margin:20px auto;
border:1px solid;
border-radius:5px;
}

#cssmenu > ul {list-style:inside none; padding:0; margin:0;}
#cssmenu > ul > li {list-style:inside none; padding:0; margin:0; float:left; display:block; position:relative;}

/* Styling navigation links */
#cssmenu > ul > li > a{
outline:none;
display:block;
position:relative;
padding:12px 20px;
font:bold 13px/100% Arial, Helvetica, sans-serif;
color: black;
text-align:center;
text-decoration:none;
text-shadow:1px 1px 0 rgba(0,0,0, 0.4);
}

#cssmenu > ul > li:first-child > a{border-radius:5px 0 0 5px;}


/* Extra border for navigation links */
#cssmenu > ul > li > a:after{
content:'';
position:absolute;
border-right:1px solid;
top:-1px; bottom:-1px; right:-2px;
z-index:99;
}
#cssmenu ul li.has-sub:hover > a:after{top:0; bottom:0;}

/* Bullet for dropdowns */
#cssmenu > ul > li.has-sub > a:before{
content:'';
position:absolute; top:18px; right:6px;
border:5px solid transparent;
border-top:5px solid #fff;
}
#cssmenu > ul > li.has-sub:hover > a:before{top:19px;}

/* Hover state styles for drop menu link */
#cssmenu ul li.has-sub:hover > a{
background:#3f3f3f;
border-color:#3f3f3f;
padding-bottom:13px; padding-top:13px;
top:-1px;
z-index:999;
}

/* Show dropdown when hover */
#cssmenu ul li.has-sub:hover > ul, #cssmenu ul li.has-sub:hover > div{display:block;}
#cssmenu ul li.has-sub > a:hover{background:#3f3f3f; border-color:#3f3f3f;}

/* Dropdown styles */
#cssmenu ul li > ul, #cssmenu ul li > div{
display:none; width:auto;
position:absolute; top:38px;
padding:10px 0;
background:#3f3f3f;
border-radius:0 0 5px 5px;
z-index:999;
}

/* Dropdown list style */
#cssmenu ul li > ul{width:200px;}
#cssmenu ul li > ul li{display:block; list-style:inside none; padding:0; margin:0; position:relative;}
#cssmenu ul li > ul li a{
outline:none; display:block;
position:relative;
margin:0; padding:8px 20px;
font:10pt Arial, Helvetica, sans-serif; color:#fff;
text-decoration:none;
text-shadow:1px 1px 0 rgba(0,0,0, 0.5);
}

/* Dropdown box styles */
#cssmenu ul li > div{width:auto; padding:20px;}
#cssmenu ul li > div p{
font:9pt/150% Arial, Helvetica, sans-serif; color:#fff;
text-align:justify;
text-shadow:1px 1px 0 rgba(0,0,0,0.5);
margin:0;
}

#cssmenu ul li > div h1{
position:relative;
margin:0 0 12px 0;
padding-bottom:10px;
border-bottom:1px solid #222;
font:bold 13pt Arial, Helvetica, sans-serif; color:black;
text-shadow:1px 1px 0 rgba(0,0,0,0.5);
}
#cssmenu ul li > div h1:after{
content:'';
height:0; padding:0;
position:absolute; bottom:-2px; left:0; right:0;
border-bottom:1px solid #555;
}

/* ---------------- Styles ----------------- */


/* Gray */
#cssmenu,
#cssmenu > ul > li > ul > li a:hover{
background:#d5d5d5;
background:-moz-linear-gradient(top, #d5d5d5 0%, #c5c5c5 100%);
background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#d5d5d5), color-stop(100%,#c5c5c5));
background:-webkit-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
background:-o-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
background:-ms-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
background:linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d5d5d5', endColorstr='#c5c5c5',GradientType=0);
}
#cssmenu {border-color:#888;}
#cssmenu > ul > li > a{border-right:1px solid #888; color:black;}
#cssmenu > ul > li > a:after{border-color:#e5e5e5;}
#cssmenu > ul > li > a:hover{background:#bbb;}
</style>
<body>
  <div id='cssmenu'>
  <ul>
     <li class='active '><a href="http://localhost/TA/index.php"><span>Home</span></a></li>
     <li class='has-sub '><a href='#'><span>Tentang</span></a>
        <ul>
           <li><a href="http://localhost/TA/testimoni.php"><span>Testimoni</span></a></li>
           <li><a href="http://localhost/TA/galeri.php"><span>Galeri</span></a></li>
        </ul>
     </li>
     <li><a href="http://localhost/TA/kontak.php"><span>Kontak</span></a></li>
     <li><a href="http://localhost/TA/login.php"><span>Masuk</span></a></li>
  </ul>
  </div>

 <form action="log.php" method="POST">
 <h2><i class="fa fa-user"></i>Login</h2>
 <br/>
 <div class="form-group">
  <input type="text" class="input-mode" name="username" placeholder="Username">
 </div>
 <div class="form-group">
 <input type="password" class="input-mode" name="password" placeholder="Password">
 </div>
 <br/>
 <br/>
 <div class="form-group">
  <button href="http://localhost/TA/result.php" class="btn btn-submit" type="submit">Login &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
 </div>
 <br/>

 </form>

 <!--Design By AgusTutorial-->
</body>
</html>
