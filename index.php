        <!DOCTYPE html>
        <html>

            <head>
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="css/estiloindex.css">
                <link rel="stylesheet" type="text/css" href="css/slider.css">
                <meta name="Autora" content="Amanda Oliveira Nascimento">
                <title>Framework Padawans</title>
                <link rel="icon" type="img/png" href="img/1.png" />
            </head>

            <body>
            <!-- CONTEÚDO DE AVISO -->
                <div class="aviso">
                    <span>Confira informações sobre à COVID-19 </span><a href="https://coronavirus.saude.gov.br/" target="_blank" class="avisobotao"><b>SAIBA MAIS</b></a>
                </div>

            <!-- MENU --> 
                <div class="navbar">
                    <a href="index.php" ><img src="img/logo1.png" class="navlogo"></a>
                    <a href="tela1.php">Postagens</a>
                    <a href="tela2.php">Albuns</a>
                    <a href="tela3.php">Todos</a>
                </div >
        
                
                <!-- SLIDE -->
                <div class="slideshow-container">
                   
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 2</div>
                    <a href= "https://infoalto.com.br/" target="_blank" ><img src="img/infoalto.png" style="width:100%"></a>
                    <div class="text">Infoalto Empresa Júnior</div>
                    </div>

                    <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <a href= "https://www.instagram.com/meninasmaismais_ufv/" target="_blank"><img src="img/meninas++.png" style="width:100%"></a>
                    <div class="text">Projeto Meninas++</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a> 
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>

                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}    
                        if (n < 1) {slideIndex = slides.length}
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";  
                    }   
                   
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                        slides[slideIndex-1].style.display = "block";  
                        dots[slideIndex-1].className += " active";
                    }
                    </script>

                <br>
                
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>

        </html>