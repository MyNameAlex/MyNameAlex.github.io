<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="description" content="Индивидуальный заказ. Дешевая полиграфия в Киеве." />
<!--    <meta name="google-site-verification" content="ay_121MILzRGUqPyaI4wituz0hibszrE6c8p2GM_d54" />-->



    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->



    <title>Индивидуальный заказ в типографии "Киевский Печатный Цех".</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
  

    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet"/>
 
    
<style>  
b, strong {
    font-weight: bold; !important;
}
body{
    background-image: url(bg/1.jpg);
    background-position: top;
    background-attachment: fixed;
 }  
    
.form-group {
    padding-left: 20px;
    padding-right: 20px;
}
    

    
    
    
    
    
    
    
    
    
* {
  margin: 0;
  padding: 0;
}
html,
body {
  height: 100%;
                background-image: url(bg/1.jpg);
            background-position: bottom;
            background-attachment: fixed;
}
.wrapper {
  display: flex;
  flex-direction: column;
  height: 100%;
}
.content {
  flex: 1 0 auto;
}
.footer {
  flex: 0 0 auto;
}  


    
    
</style>
<!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109974841-1"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-109974841-1'); </script>       </head>



<body>
    
    
    
<!--MENU-->
<div class="wrapper">
        <div class="top_menu affix" data-offset-top="-1">
        
<?php include("include/menu.php"); ?>
        <!--SECTION-->        
        </div>




 
       
        
        
<div class="container nine_nine content">
        <div class="row">
          <h2>Индивидуальный заказ</h2>
          <div class="spn">Заполните форму ниже и мы расчитаем нужную Вам продукцию.</div>
        </div>
        
        <div class="row" style="margin-top:20px;">
        
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
           
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-2 control-label">Ваше имя</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" placeholder="Имя" onclick="$(this).css ('border-color', '#66afe9')">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Телефон</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="phone" placeholder="Телефон" onclick="$(this).css ('border-color', '#66afe9')">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Email" onclick="$(this).css ('border-color', '#66afe9')">
                </div>
              </div>
              <div class="form-group">
                <label for="textarea" class="col-sm-2 control-label">Что нужно сделать</label>
                <div class="col-sm-10">
                 <textarea class="form-control" id="message" rows="3" onclick="$(this).css ('border-color', '#66afe9')"></textarea>
                                      <p>*Все поля формы обязательны к заполнению</p>
                </div>
              </div>
              
             

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="button" id="send" class="btn btn-default">Отправить</button>
                </div>
              </div>
            </form>       
       
            </div>
       
        </div>

</div>
    
    

    
    
    





<!--FOOTER-->
    
    <div id="footer" class="footer">
        <div class="container">
            <p class="text-muted">© 2013-2017 Киевский печатный цех</p>
        </div>
    </div>

    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    
    
<!--MENU_ACTIVE-->    
        <script>
      
        $(document).ready(function(){
        $('ul.top_menu1 a').each(function () {
        if (this.href == location.href) $(this).addClass('product2');
        });
        });
            
        $(document).ready(function(){
        $('ul.menu a').each(function () {
        if (this.href == location.href) $(this).parent().addClass('active');
        });
        });
           
        </script>
        
        
<!--Forms-->          
<script>
$('#send').click (function () {
	var name = $('#name').val ();
    var phone = $('#phone').val ();
    var email = $('#email').val ();
	var message = $('#message').val ();
	$.ajax({
		url:    	'ajax/zakaz.php',
		type:		'POST',
		cache: 		false,
		data:   	{'name':name, 'phone':phone, 'email':email, 'message':message},
		dataType:	'html',
		beforeSend: function () {
			$('#send').attr ("disabled", "disabled");
		},
		success: function(data) {
			if (data == true) {
				$('#name').val ("");
                $('#phone').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("Сообщение отправлено");
				$('#name').css ("border-color", "#60fc8c");
                $('#phone').css ("border-color", "#60fc8c");
                $('#email').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
                $('#send').css ("border-color", "#60fc8c");
			} else {
				if (data == false)				
					alert ("Что-то пошло не так! Сообщение не отправлено");
				else {					
					switch (data) {
					case "Имя не указано":
					$('#name').css ("border-color", "#f7b4b4");
					break;
					case "Телефон не указан":
					$('#phone').css ("border-color", "#f7b4b4");
					break;
					case "Неправильный e-mail":
					$('#email').css ("border-color", "#f7b4b4");
					break;
                    case "Сообщение не указано":
					$('#message').css ("border-color", "#f7b4b4");
					break;
					default:
                    $('#name').css ("border-color", "#f7b4b4");
                    $('#phone').css ("border-color", "#f7b4b4");
					$('#email').css ("border-color", "#f7b4b4");
					$('#message').css ("border-color", "#f7b4b4");

					}
				}
			}
			$('#send').removeAttr ("disabled");				
		}
	});
});
</script>
    
    
    
    
    
    
    




</div><!--wrapper-->



<!--BINOTEL-->
	<script type="text/javascript">
	  (function(d, w, s) {
		var widgetHash = 'wfb12ej9548hhkaak805', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
		gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
		var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
	  })(document, window, 'script');
	</script>     
</body>

</html>