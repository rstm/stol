<?php
$mail_status = "not send";  
if (isset($_POST['first_name']))
{
	$to= 'm.rustem18@gmail.com, d.x.r@mail.ru';
	$subject = 'Онлайн-заказ';
	
	$from_user='столешницы-казань.рф';
	$from_email='info@столешницы-казань.рф';
	$from = "=?UTF-8?B?".base64_encode($from_user)."?= <" . $from_email . ">";
	//тема русским щрифтом
	$subject = "=?UTF-8?B?".base64_encode($subject)."?=";
	//формируем правильный заголовок в соответствии со стандартом
	$headers = "From: $from \r\n". 
	 		"Reply-To: $from \r\n". 
			"MIME-Version: 1.0" . "\r\n" . 
			"Content-type: text/html; charset=UTF-8" . "\r\n"; 
	$message = "
		<html>				   		
			<p>Имя: {$_POST['first_name']}</p>
			<p>Номер телефона: {$_POST['phone_name']}</p>
		</html>	
	";

    if(!mail($to, $subject, $message, $headers)) 
	{
		$mail_status = "send";  
	}  
	else 
	{ 
		$mail_status = "error";  
	} 
}
?>

<html>
    <head>
        <meta charset="UTF-8">

        <link href="fonts/museosanscyrl.css" rel="stylesheet">
        <link href="fonts/opensans/opensans.css" rel="stylesheet">
        <link href="fonts/tinos/tinos.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
        <link href="css/slogan.css" rel="stylesheet">
        <link href="css/why_we.css" rel="stylesheet">
        <link href="css/header.css" rel="stylesheet">
        <link href="css/our_works.css" rel="stylesheet">
        <link href="css/work_time.css" rel="stylesheet">     
        <link href="css/how_we_work.css" rel="stylesheet">                   
        <link href="css/stone.css" rel="stylesheet">
        <link href="css/reviews.css" rel="stylesheet">        
    </head>
    <body>
        <div id="wrapper">
            <header class="section_large">
                <h1 class="blue">МОНОЛИТ</h1>
                <nav class="menu">
                    <a href="/index.php">НАШИ РАБОТЫ</a>
                    <a href="/index.php">ОТЗЫВЫ</a>
                    <a href="/index.php">КОНТАКТЫ</a>
                </nav>

                <div class="tel"> 
                    <abbr>8 (843) 250-50-50</abbr>
                </div>

                <button id="callme_button" class="button orange">ЗАКАЗАТЬ ОБРАТНЫЙ ЗВОНОК</button>
            </header>

            <section id="slogan">
                <h2>Производим столешницы<br>
                из искусственного камня</h2>

                <h3>Мы воплощаем ваши самые смелые идеи и задумки в практичную реальность,<br> 
                сохраняя функциональность и эстетичность.</h3>

                <form class="request blue">
                    <?php if ($mail_status == "send") { ?>
                        <h4>Ваша заявка отправлена!</h4>
                        <p>Наши специалситы свяжутся с вами в ближайшее время</p>
                    <?php } else if ($mail_status == "error") { ?>
                        <h4>Упс, что-то пошло не так!</h4>
                        <p>Пожалуйста, свяжитесь с нами по номеру 8 (843) 250-50-50</p>
                    <?php } else { ?>
                        <h4>Оставьте заявку на бесплатный замер</h4>
                        <input type="text" name="first_name" value="Имя">
                        <input type="text" name="phone_number" value="Телефон">
                        <input type="submit" class="button orange" value="ОТПРАВИТЬ">
                    <?php } ?>
                </form>
            </section>

            
            <section id="why_we">
                <h2>Почему выбирают нас?<span class="shadow">Почему выбирают нас?</span></h2>
                <div id="why_set" class="section">
                    <figure>
                        <img src="images/why1.jpg" alt="">
                        <h5>Собственное производство</h5>
                        <p>Мы сами изготавливаем каждое<br>
                            изделие, и всегда можем пригласить вас <br>
                            к нам и показать как  устроены <br>
                            наши процессы
                        </p>
                    </figure>
                    <figure>
                        <img src="images/why2.jpg" alt="">
                        <h5>Высокий контроль качества</h5>
                        <p>Качество изделия контролируется <br>
несколько раз за производственный цикл<br>
                        </p>
                    </figure>
                    <figure>
                        <img src="images/why3.jpg" alt="">
                        <h5>Квалифицированные сотрудники</h5>
                        <p>Наша команда — команда<br>
                         профессионалов, любящих своё дело
                        </p>
                    </figure>
                </div>
            </section>

            <section id="our_works">

                <h2>Наши работы<span class="shadow">Наши работы</span></h2>
                
                <div class="menu section">
                    <figure>Все<hr class="active"></figure>
                    <figure>Столешницы<hr></figure>
                    <figure>Барные стойки<hr></figure>
                    <figure>Подоконники<hr></figure>
                    <figure>Умывальники<hr></figure>
                </div>

                <div id="stoleshnici" class="images section_large">
                    <figure>
                        <img src="images/our_works1.jpg" alt="">
                        <div class="hover"><span>Подробнее<hr></span></div>
                    </figure>
                    <figure>
                        <img src="images/our_works2.jpg" alt="">
                        <div class="hover"><span>Подробнее<hr></span></div>
                    </figure>
                    <figure>
                        <img src="images/our_works3.jpg" alt="">
                        <div class="hover"><span>Подробнее<hr></span></div>
                    </figure>
                    <figure>
                        <img src="images/our_works4.jpg" alt="">
                        <div class="hover"><span>Подробнее<hr></span></div>
                    </figure>
                </div>         
            </section>

            <section id="stone">
                <h2>Что такое искусственный камень<span class="shadow">Что такое искусственный камень?</span></h2>

                <div class="left">
                    <figure>
                        Безупречно гладкая поверхность,<br>
                        любой формы без швов и стыков
                        <div>1<hr></div>
                    </figure>

                    <figure>
                        Средний срок эксплуатации<br>
                        столешниц — 30лет
                        <div>2<hr></div>
                    </figure>

                    <figure>
                        Устойчивость к появлению пятен —<br>
                        камень не впитывает влагу
                        <div>3<hr></div>
                    </figure>
                </div>

                <img src="images/stone.jpg" alt="">

                <div class="right">
                    <figure>
                        Экологичностьи безопасность<br>
                        для здоровья
                        <div>4<hr></div>
                    </figure>

                    <figure>
                        Возможность интеграции мойки<br>
                        единым полотном без швов и стыков
                        <div>5<hr></div>
                    </figure>
                    <figure>
                        Нет вздутий, плесени и грибка <br>
                        из-за большой плотности <br>
                        и отсутствия швов
                        <div>6<hr></div>
                    </figure>
                </div>
                <div class="clear"></div>
            </section>
        </div>
            
        <div class="white_wrapper">
            <section id="work_time">
                <figure>
                    <h4>10</h4>
                    <h5>рабочих дней — </h5>
                    <p>срок нашей работы,которого мы<br> 
страемся придерживаться</p>
                </figure>
                <figure>
                    <h4>300+</h4>
                    <h5>видов нашего камня</h5>
                    <p>большой выбор цветовой гаммы,<br>
работаем с лучшими производителями</p>
                </figure>
                <figure>
                    <h4>3</h4>
                    <h5>года гарантии</h5>
                    <p>мы заключаем договор<br>на службу</p>
                </figure>
            </section>
        </div>

        <section id="how_we_work">
            <h2>Как мы работаем<span class="shadow">Как мы работаем</span></h2>
            <!--<img src="images/steps.jpg" alt="">-->
            <div class="set">
                <figure>
                    <h3>01</h3>
                    <hr>
                    <p>Вы отправляете<br>заявку</p>
                </figure>
                <figure>
                    <h3>02</h3>
                    <hr>
                    <p>Наши менеджеры<br>
связываются<br>
с вами</p>
                </figure>
                <figure>
                    <h3>03</h3>
                    <hr>
                    <p>Мы выезжаем<br> 
на замер<br>
<span class="grey">(или работаем<br> 
по вашим эскизам)</span></p>
                </figure>
                <figure>
                    <h3>04</h3>
                    <hr>
                    <p>Работаем над<br> 
вашим заказом<br>
согласно плану</p>
                </figure>
                <figure>
                    <h3>05</h3>
                    <hr>
                    <p>Перезваниваем,<br> 
если заказ готов</p>
                </figure>
                <figure>
                    <h3>06</h3>
                    <hr>
                    <p>Мы доставим<br>ваш заказ на дом</p>
                </figure>
                <div class="clear"></div>
            </div>
        </section>

        <section id="reviews">
            <h2>Отзывы<span class="shadow">Отзывы</span></h2>
            <img src="images/reviews.jpg" alt="">     
        </section>

        <section id="map">

                <form class="request blue">
                    <h4>Оставьте заявку на бесплатный замер</h4>
                    <input type="text" name="first_name" value="Имя">
                    <input type="text" name="phone_number" value="Телефон">
                    <input type="submit" class="button orange" value="ОТПРАВИТЬ">
                </form>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8965.730863544883!2d49.09748225601306!3d55.820448257478276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sru!2sru!4v1476121221636" 
    width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>

    </body>
</html>