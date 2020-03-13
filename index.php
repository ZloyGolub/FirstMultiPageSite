<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php 
        include('top.php');
    ?>

    <?php
        include('navigation.php');
    ?>

    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="slide slide_1">
                    <div class="slide-content">
                        <h2>Slide 1</h2>
                        <p>Content for Slide 1</p>
                    </div>
                    </div>
                    <div class="slide slide_2">
                    <div class="slide-content">
                        <h2>Slide 2</h2>
                        <p>Content for Slide 2</p>
                    </div>
                    </div>
                    <div class="slide slide_3">
                    <div class="slide-content">
                        <h2>Slide 3</h2>
                        <p>Content for Slide 3</p>
                    </div>
                    </div>
                    <div class="slide slide_4">
                    <div class="slide-content">
                        <h2>Slide 4</h2>
                        <p>Content for Slide 4</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>
        <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
        </div>
    </div>


    <div class="container">
        <div class="services">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="service_set">
                        <img src="images/logos/twitch.svg" height="50px" alt="">
                        <p>Nibh Ridiculus</p>
                        <div>Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus etmagnis dis parturie nt montes, nascetur.</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="service_set">
                        <img src="images/logos/subway.svg" height="50px" alt="">
                        <p>grammatica del</p>
                        <div>Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus etmagnis dis parturie nt montes, nascetur.</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="service_set">
                        <img src="images/logos/blind.svg" height="50px" alt="">
                        <p>Europan lingues</p>
                        <div>Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus etmagnis dis parturie nt montes, nascetur.</div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="service_set">
                        <img src="images/logos/slack.svg" height="50px" alt="">
                        <p>ipsum quia</p>
                        <div>Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus etmagnis dis parturie nt montes, nascetur.</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="service_set">
                        <img src="images/logos/telegram.svg" height="50px" alt="">
                        <p>aliquam quaerat</p>
                        <div>Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus etmagnis dis parturie nt montes, nascetur.</div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="service_set">
                        <img src="images/logos/paper.svg" height="50px" alt="">
                        <p>dolorem eum</p>
                        <div>Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus etmagnis dis parturie nt montes, nascetur.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="recentProjects">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <p class="paragraphStyle">recent projects</p>
                </div>
            </div>
        </div>
    </div>

    <div class="funFacts">
        <div class="container">
            <div class="funFactsIn">
                <div class="row align-items-center">

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="factsSet">
                            <div class="funNumber">456</div>
                            <div class="line"></div>
                            <div>HAPPY CLIENTS</div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">      
                        <div class="factsSet">
                            <div class="funNumber">56</div>
                            <div class="line"></div>
                            <div>PROJECTS</div>
                        </div>                  
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="factsSet">
                            <div class="funNumber">456</div>
                            <div class="line"></div>
                            <div>HAPPY CLIENTS</div>
                        </div>                 
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                        <div class="factsSet">
                            <div class="funNumber">456</div>
                            <div class="line"></div>
                            <div>HAPPY CLIENTS</div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>



    <div class="container" id="cheight">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <p class="paragraphStyle">from blog</p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6"></div>
        </div>
        <div id="sliderB">
            <input type="radio" name="sliderB" id="slide1B" checked>
            <input type="radio" name="sliderB" id="slide2B">
            <input type="radio" name="sliderB" id="slide3B">
            <input type="radio" name="sliderB" id="slide4B">

            <div class="col-6" id="bulletsB">
                <label for="slide1B"></label>
                <label for="slide2B"></label>
                <label for="slide3B"></label>
                <label for="slide4B"></label>
            </div>

            <div id="slidesB">
                <div id="overflowB">
                    <div class="innerB">
                        <div class="slideB slide_1B">
                            <div class="slide-contentB">
                                <h2>Slide 1</h2>
                                <p>Content for Slide 1</p>
                            </div>
                        </div>
                        <div class="slideB slide_2B">
                            <div class="slide-contentB">
                                <h2>Slide 2</h2>
                                <p>Content for Slide 2</p>
                            </div>
                        </div>
                        <div class="slideB slide_3B">
                            <div class="slide-contentB">
                                <h2>Slide 3</h2>
                                <p>Content for Slide 3</p>
                            </div>
                        </div>
                        <div class="slideB slide_4B">
                            <div class="slide-contentB">
                                <h2>Slide 4</h2>
                                <p>Content for Slide 4</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="controlsB">
                <label for="slide1B"></label>
                <label for="slide2B"></label>
                <label for="slide3B"></label>
                <label for="slide4B"></label>
            </div>   
        </div>     
    </div>

    <div class="getInTouch">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-10 col-lg-10 col-md-10 textCenterBlyat">
                    <div id="getText">GO AHEAD AND FIND OUT HOW WE CAN HELP YOU!</div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 flexCenterBlyat">
                    <button id="getButton">GET IN TOUCH</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <p>ABAUT US</p>
                    <div>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen</div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <p>RELATED LINKS</p>
                    <div class="linkPointer">
                        > <a href="#" class="linkF">Official Site</a>
                        <br>
                        > <a href="#" class="linkF">CreativeMarket profile</a>
                        <br>
                        > <a href="#" class="linkF">Materialzer page on CM</a>
                        <br>
                        > <a href="#" class="linkF">Electronic WP Theme</a>
                        <br>
                        > <a href="#" class="linkF">Was fav</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <p>NEWS & MEDIA</p>
                    <div class="linkPointer">
                        > <a href="#" class="linkF">Events</a>
                        <br>
                        > <a href="#" class="linkF">News and Press Releases</a>
                        <br>
                        > <a href="#" class="linkF">Interviews</a>
                        <br>
                        > <a href="#" class="linkF">Subsidiaries Media Contacts</a>
                        <br>
                        > <a href="#" class="linkF">Media kit</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                    <p>GET IN TOUCH</p>
                    <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet exercitationem placeat ut quae aliquam mollitia!</div>
                    <div>
                        <br>
                        <img src="images/logos/mailBlue.svg" height="20px" alt=""> 84 Street City, State 24813 <br>
                        <img src="images/logos/telephoneBlue.svg" height="20px" alt=""> +00 (123) 456 78 90 <br>
                        <img src="images/logos/mailBlue.svg" height="20px" alt=""> info@yourdomain.com
                    </div>
                </div>
            </div>
        </div>
    </div>













    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $( document ).ready(function() {
            $(".link").each(
                function()
                {
                    $(this).removeClass("active");
                }
            )
            $("#index").attr("class", "link active");
        });
    </script>

</body>
</html>
