<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Layout - One Page</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <!-- css -->
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/site.css" rel="stylesheet" type="text/css"/>
        <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
        <!-- js -->
        <script src="js/jquery/jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="js/site.js" type="text/javascript"></script>
    </head>
    <body>
        <header id="home">
            <div id="top">
                <div class="content">
                    <label class="logo">LOGO</label>
                    <ul class="menu">
                        <li><a class="active" href="#home" >Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <img class="menu_open" id="menu_open" src="img/menu.png" alt="menu"/>
                </div>
            </div>
            <div id="banner">
                <div class="content">
                    <h1>We Build Awesome Wireframe</h1>
                    <h2>A Template by Your Company</h2>
                    <img class="image" src="img/macbook.png" alt=""/>
                </div>
            </div>
        </header>
        <main>
            <div id="about">
                <div class="content">
                    <h1>About Us</h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </h3>
                    <img class="image" src="img/ipad.png" alt=""/>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis 
                        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                    </p>
                </div>
            </div>
            <div id="team">
                <div class="content">
                    <h1>Our Team</h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </h3>
                    <ul class="team">
                        <li>
                            <img class="team" src="img/user_m.png" alt=""/>
                            <h1 class="team">Name</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                            </p>
                            <button class="team"><img src="img/email.png" alt=""/></button>
                        </li><li>
                            <img class="team" src="img/user_f.png" alt=""/>
                            <h1 class="team">Name</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                            </p>
                            <button class="team"><img src="img/email.png" alt=""/></button>
                        </li><li>
                            <img class="team" src="img/user_m.png" alt=""/>
                            <h1 class="team">Name</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                            </p>
                            <button class="team"><img src="img/email.png" alt=""/></button>
                        </li><li>
                            <img class="team" src="img/user_f.png" alt=""/>
                            <h1 class="team">Name</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. 
                            </p>
                            <button class="team"><img src="img/email.png" alt=""/></button>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="portfolio">
                <div class="content">
                    <h1>Portfolio</h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </h3>
                    <div id="tabs">
                        <ul class="tabs"></ul>
                        <div id="tab-1" data-title="All" class="tab current">
                            <!-- inicio lista portfolio-->
                            <ul class="portfolio">
                                <li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Design</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Identify</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Design</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Photography</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Design</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Identify</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- fim lista portfolio-->
                        </div>
                        <div id="tab-2" data-title="Design" class="tab">

                            <!-- inicio lista portfolio-->
                            <ul class="portfolio">
                                <li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Design</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Design</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Design</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- fim lista portfolio-->

                        </div>
                        <div id="tab-3" data-title="Identity" class="tab">

                            <!-- inicio lista portfolio-->
                            <ul class="portfolio">
                                <li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Identity</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li><li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Identity</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- fim lista portfolio-->

                        </div>
                        <div id="tab-4" data-title="Photography" class="tab">

                            <!-- inicio lista portfolio-->
                            <ul class="portfolio">
                                <li>
                                    <img class="portfolio" src="img/image.jpg" alt=""/>
                                    <div class="portfolio">
                                        <h1 class="portfolio">Photography</h1>
                                        <p class="portfolio">Lorem ipsum dolor sit amet, consec tetuer adipiscing elit.</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- fim lista portfolio-->

                        </div>
                        <div id="tab-5" data-title="Ilustration" class="tab">
                        </div>
                    </div>

                </div>
            </div>
            <div id="contact">
                <div class="content">
                    <h1>Contact</h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </h3>
                    <form>
                        <input class="form_input" type="text" placeholder="Enter your Name">
                        <input class="form_input" type="text" placeholder="Enter your Address">
                        <input class="form_input" type="text" placeholder="Enter your City">
                        <input class="form_input" type="text" placeholder="Enter your Email Address">
                        <textarea class="form_textarea" placeholder="Enter your Email Message"></textarea>
                    </form>
                    <button class="form_button">Submit</button>
                </div>
            </div>
        </main>
        <footer>
            <div class="content">
                <ul class="menu_footer">
                    <li><a class="active" href="#home" >Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <span>Copyright © Your Company 2014. All Rights Reserved</span>
            </div>
        </footer>
        <!-- menu mobile -->
        <div  id="menu_fixed" class="menu_fixed">
            <img id="menu_close" class="menu_close" src="img/close.png" alt="close" />
            <ul class="menu_mobile">
                <li><a class="active" href="#home" >Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <!-- -->
    </body>
</html>