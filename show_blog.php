<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="sass/bootstrap.min.css"> -->
    <link rel="stylesheet" href="sass/customStyle.css">
    <link rel="stylesheet" href="icons/style.css">

    <title>SHOW BLOG | YO SOY FLORA</title>

</head>

<body style="background-color: white;">

    <div class="social">
        <div class="social__icons">
            <a href="https://www.facebook.com/">
                <i class="icon-facebook"></i>
            </a>
            <a href="https://www.twitter.com/">
                <i class="icon-twitter"></i>
            </a>
            <a href="https://www.youtube.com/">
                <i class="icon-youtube"></i>
            </a>
            <a href="https://www.instagram.com/">
                <i class="icon-instagram"></i>
            </a>
        </div>
    </div>

    <div class="fix-img no-response">
        <div class="fix-img-caption"><a href="flora.html">¿porque donar?</a></div>
        <img src="img/fixed/Flora_Illustrazione2_AldofrediL_600DPI.jpg" alt="Fix Image">
    </div>


    <div class="fix__header">
        <nav class="navigation">
            <a href="index.html">
                <div class="navigation__logo">
                    <div class="navigation__logo--img"><img src="img/tahe/TAHE LOGO ORO + SCURO.png" alt="LOGO ICON">
                    </div>
                    <h1 class="navigation__logo--text">YO SOY <br> FLORA</h1>
                </div>
            </a>
            <div class="navigation__nav">
                <p class="navigation__nav--text">TAHE FERTILITY BANK</p>
                <ul class="navigation__nav--list">
                    <li class="navigation__nav--items"><a href="index.html"
                            class="navigation__nav--links">INICIO</a>
                    </li>
                    <li class="navigation__nav--items"><a href="flora.html" class="navigation__nav--links">FLORA</a>
                    </li>
                    <li class="navigation__nav--items"><a href="tahe.html" class="navigation__nav--links">TAHE</a></li>
                    <li class="navigation__nav--items"><a href="FAQ_1.html" class="navigation__nav--links">FAQ</a></li>
                    <li class="navigation__nav--items"><a href="blog.php" class="navigation__nav--links">BLOG</a></li>
                    <li class="navigation__nav--items"><a href="contact.html"
                            class="navigation__nav--links">CONTACTO</a></li>
                </ul>

                <!-- toggle -->

                <div class="toggle">
                    <input type="checkbox" class="toggle__check" name="check" id="check">
                    <label for="check" class="toggle__menu">
                        <span class="toggle__menu--bar toggle__menu--bar-1"></span>
                        <span class="toggle__menu--bar toggle__menu--bar-2"></span>
                        <span class="toggle__menu--bar toggle__menu--bar-3"></span>
                    </label>

                    <div class="toggle__extend">
                        <ul class="toggle__list">
                            
                            <li class="navigation__nav--items"><a href="index.html"
                                    class="navigation__nav--links">INICIO</a>
                            </li>
                            <li class="navigation__nav--items"><a href="flora.html"
                                    class="navigation__nav--links">FLORA</a>
                            </li>
                            <li class="navigation__nav--items"><a href="tahe.html"
                                    class="navigation__nav--links">TAHE</a>
                            </li>
                            <li class="navigation__nav--items"><a href="FAQ_1.html"
                                    class="navigation__nav--links">FAQ</a></li>
                            <li class="navigation__nav--items"><a href="blog.html"
                                    class="navigation__nav--links">BLOG</a>
                            </li>
                            <li class="navigation__nav--items"><a href="contact.html"
                                    class="navigation__nav--links">CONTACTO</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="navigation__btn">
                <button class="btn-primary">
                    <a href="contact.html">PIDE CITA</a>
                </button>
                <div class="navigation__whatsapp"><img src="img/fixed/whatsapp-logo-png-hd-2.png" alt="Whatsapp Logo">
                </div>
            </div>
        </nav>

        <nav class="donate">
            <div class="donate__left">
                <p class="donate__left--text">
                    <span class="col-2 donate__left-name">LLAMA GRATIS</span>
                    <span class="col-1 donate__left-no">900878227</span>
                </p>
            </div>
            <div class="donate__center">
                <button class="btn-primary">
                    <a href="contact.html">¿ QUIERES DONAR ?</a>
                </button>
            </div>

            <div class="donate__right col-2">
                <a href="covid.html" class="col-2">
                    LA DONACIÓN DE ÓVULOS Y EL <br> COVID-19
                </a>
            </div>
        </nav>
    </div>


    <!-- -----------------------Navigation End------------ -->


    <div class="blog__title">
        <h1 class="blog__title--heading blog-2-heading">Un blog para difundir la vida</h1>
        <p class="blog__title--text blog-2-text">Un espacio entero dedicado a las maravillas y el poder de la vida, con
            todos sus
            milagros y sus secretos, y a cómo protegerla, difundirla y llevar su fuerza a cada uno de nosotros y a
            nuestras vidas. </p>
    </div>


    <section class="misterio">
        
<?php 
include"connect.php";
$uid=$_GET['id'];
$select="select*from blogs where id='$uid'";
$run=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($run)){

    
 ?>
        <p class="misterio__text">
            <?php echo $fetch['date'] ?>
        </p>

        <div class="misterio__image">
            <img src="blogadmin/images/<?php echo $fetch['photo']?>" alt="Misterio Image">
        </div>

        <h1 class="misterio__heading"><?php echo $fetch['title']; ?>
        </h1>
        <p class="misterio__desc"><?php echo $fetch['content'] ?></p>
        <?php 
    }
             ?>
    </section>
    <section class="blank"></section>

    <!-- ////////////////////blog-2  navigation -->


    <section class="navega">
        <div class="navega__heading">Navega por nuestras categorías</div>
 <ul class="navega__list">
            <?php 
            include"connect.php";

            $select="select*from blog_categories";
            $run=mysqli_query($con,$select);
            if(!$run){
                echo mysqli_error($con);
            }
            while($fetch=mysqli_fetch_array($run))
            {
             ?>
            

            <li class="navega__item"><a href="blog_category.php?category=<?php echo $fetch['id']?>" class="navega__link navega__link--1"><?php echo $fetch['name']; ?></a></li>
            <?php 
        }
             ?>
            
            <li class="navega__item"><a href="#" class="navega__link navega__link--5">Sobre Nosotros</a></li>
            <li class="navega__item"><a href="#" class="navega__link navega__link--4">Dicen de Nosotros</a></li>
            <li class="navega__item"><a href="#" class="navega__link navega__link--1">Preguntas y Respuestas</a></li>
        </ul>

        <div class="navega__search blog-2-search">
            <input type="text" class="navega__input" placeholder="Buscar">
            <label class="navega__label"><i class="icon-search"></i></label>
        </div>
    </section>


    <!-- __________Blog-2 Description------------ -->


    <section class="desta">
     <h1 class="desta__heading">
                             Blogs relacionados   </h1>
        

        <!-- ////////////Blog Slider//////////// -->

        <div class="home-blog__container" style="margin: 5rem auto; margin-bottom: 8rem;">
           
            <?php 
            include"connect.php";
            $uid=$_GET['category'];

            $select4="select*from blogs where category='$uid' order by id desc limit 3";
            $run1=mysqli_query($con,$select4);
            while($data1=mysqli_fetch_array($run1)){

             ?>
            <div class="home-blog__box">
                <div class="home-blog__box--img">
                    <img src="blogadmin/images/<?php echo $data1['photo']?>" alt="Person 1">
                </div>
                    <a href="show_blog.php?id=<?php echo $data1['id'] ?>&category=<?php echo $data1['category']?>"><p class="home-blog__text "><?php echo $data1['title'] ?></p></a>
                <hr class="home-blog__line">
                <div class="home-blog__box-intro">
                    <div class="home-blog__box-watch">
                        <i class="icon-eye"></i>
                        <p></p>
                    </div>
                    <div class="home-blog__box-introtext">Escribir un comentario</div>
                    <div class="icon-heart-o"></div>
                </div>
            </div>
            <?php 
        }
             ?>


        </div>

    </section>








    <!-- --------------------------------------------
            BookIng Section
    -------------------------------------------- -->

    <section class="book">
        <div class="blog">
            <h1 class="blog--heading">Ser Flora</h1>
            <p class="blog--heading-text">
                ESTO ES DIFUNDIR LA VIDA
            </p>
            <p class="blog--text">¿Tú también quieres convertirte en Flora?</p>
            <p class="blog--text">¿Tú también quieres que todo esto se haga realidad?</p>

            <button class="blog--btn">DONAR</button>

            <div class="blog--btn-group">
                <button class="blog--btn-content"><a href="index.html">BENEFICIOS</a></button>
                <button class="blog--btn-content"><a href="contact.html">CHAT</a></button>
                <button class="blog--btn-content"><a href="index.html">PROCESO</a></button>
            </div>

        </div>



        <div class="form__down">
            <form class="form form__anima">
                <p class="form__down--text">¿Todavía tienes alguna duda? Contáctanos</p>

                <h1 class="book__heading">¡Gracias Flora!</h1>

                <div class="form__group  form__group-1st">
                    <input type="text" class="form__input form__input--mright" placeholder="*Nombre">
                    <input type="text" class="form__input" placeholder="*Apellido">
                </div>

                <div class="form__group">
                    <input type="text" class="form__input" placeholder="*Email">

                </div>

                <div class="form__group">
                    <input type="text" class="form__input" placeholder="Agregar un mensaje">
                </div>

                <div class="form__group">
                    <input type="checkbox" name="check-policy" id="check-policy" class="form__check">
                    <label for="check-policy" class="form__check--label">he leído y acepto la política de
                        privacidad</label>
                </div>

                <div class="form__group">
                    <button type="submit" class="form__input form__input--btn">ENVIAR</button>
                </div>
            </form>

            <footer class="footer">
                <p>
                    Yo Soy Flora - Tahe Fertility Bank - Av. Europa, 11, 30007 Murcia, Spain
                </p>
                <p>
                    © 2020 by Gold Lunula.
                </p>
            </footer>
        </div>
        </div>
    </section>


</body>

</html>