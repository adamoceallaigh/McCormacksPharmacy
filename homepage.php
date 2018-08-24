<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="McCormacks Pharmacy is one of the leading online pharmacy stores in Ireland that offers a complete range of pharmaceutical drugs, health & beauty products, fragrances for men & women from leading brands, and much more! We have the most genuine prices from all other stores! Explore our pharmacy today and shop your way!">
    <link href="https://fonts.googleapis.com/css?family=Caveat|PT+Serif:400i|Indie+Flower|Quicksand|Raleway|Bitter|Dosis|Sirin+Stencil|" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <?php include ("style.php"); ?>
    <link rel="stylesheet" href="Resources/CSS/homepage.css">
    <link rel="stylesheet" href="Resources/CSS/popup.css">
    <title>McCormacks | Home</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

           

            $(window).on("load", function(){
                $('#eapps-instagram-feed-1').css("width","100%");
            });

            $('#subscription_email_button').on('click', function(){
  
                    var $this = $(this);
                    var $email = $('#subscription_email');
            
                    if ($email.length === 0){
                    alert("Please enter an email");

                        
                    } else {
                      $this.parents('#Subscription_Pop_Up').addClass('hidden');
                    }
            
            
            });
            $('#Opt_Out_Link').on('click', function(){
  
                    var $this = $(this);
                    var $email = $('#subscription_email');

                    if ($email.length === 0){
                    alert("Please enter an email");

                        
                    } else {
                      $this.parents('#Subscription_Pop_Up').addClass('hidden');
                    }


            });
        });



    </script> 
    <script>
        (function(d, w, c) {
            w.ChatraID = 'auSuwd4NaEDA4qw5F';
            var s = d.createElement('script');
            w[c] = w[c] || function() {
                (w[c].q = w[c].q || []).push(arguments);
            };
            s.async = true;
            s.src = 'https://call.chatra.io/chatra.js';
            if (d.head) d.head.appendChild(s);
        })(document, window, 'Chatra');
    </script>
  
    
</head>
<body>

<div id="Outline_Body"></div>
<button onclick="topFunction()" id="myBtn">&#9651;</button>  

<aside id="aside">
    <ul>
        <li id="facebook"><a href="" ></a><i class="fab fa-2x  face fa-facebook fa-facebook-f"></i></li>
        <li id="pinterest"><a href="" ></a><i class="fab fa-2x  pin fa-pinterest"></i></li>
        <li id="twitter"><a href="" ></a><i class="fab fa-2x  tweet fa-twitter"></i></li>
        <li id="instagram"><a href="" ></a><i class="fab  fa-instagram2 fa-2x fa-instagram"></i></li>
        <li id="snapchat"><a href="" ></a><i class="fab fa-2x fa-snapchat fa-snapchat-ghost"></i></li>
    </ul>
</aside>

<div id="Cookie_Banner">
    <p id="Cookie_Banner_Explanation">This site uses cookies. By continuing to browse this site you are agreeing to our use of cookies. <span id="Find_Out_More_Link" ><a href="legal.php?term=Cookies" target="blank" >Find Out More Here</a> <div id="Accept_Close_Button_Div">
        <a onclick="dismissCookie()" role="button" id="Accept_And_Close_Button">Accept and Close</a>
    </div></span></p>  
</div>
    
<?php include("popup.php"); ?>  

<?php include("header.php"); ?>

<?php include("image-slider.php");?>


 


        <div class="container">

                <div class="row Section_Height">

                    <div class="col-3 Section_Height">
                        <div id="Skincare_Section">
                            <h1 id="Skincare_Section_Heading">Skincare</h1>
                                <img src="Resources/Images/Skincare.png" alt="" id="Skincare_Section_Image">
                            <a href="" id="Skincare_Products_Link">See all in Skincare</a>
                                <ul>
                                    <li>
                                        <a href="#">Best Selling</a>
                                        <a href="#">Face</a>
                                        <a href="#">Expert Skincare</a>
                                        <a href="#">Next</a>
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <div class="col-3 Section_Height">
                        <div id="Health_Section">
                            <h1 id="Health_Section_Heading">Health</h1>
                                <img src="Resources/Images/Health_Image.png" alt="" id="Health_Section_Image">
                            <a href="" id="Health_Products_Link">See all in Health</a>
                                <ul>
                                    <li>
                                        <a href="#">Best Selling</a>
                                        <a href="#">First Aid</a>
                                        <a href="#">Diabetes</a>
                                        <a href="#">Cold / Flu</a>
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <div class="col-3 Section_Height">
                        <div id="Beauty_Section">
                            <h1 id="Beauty_Section_Heading">Beauty</h1>
                                <img src="Resources/Images/Beauty_Image.png" alt="" id="Beauty_Section_Image">
                            <a href="" id="Beauty_Products_Link">See all in Beauty</a>
                                <ul>
                                    <li>
                                        <a href="#">Best Selling</a>
                                        <a href="#">Face</a>
                                        <a href="#">Makeup Brushes</a>
                                        <a href="#">Eyes</a>
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <div class="col-3 Section_Height">
                        <div id="Medicines_Section">
                            <h1 id="Medicines_Section_Heading">Medicines</h1>
                                <img src="Resources/Images/Medicines.png" alt="" id="Medicines_Section_Image">
                            <a href="" id="Medicines_Products_Link">See all in Medicines</a>
                                <ul>
                                    <li>
                                        <a href="#">Best Selling</a>
                                        <a href="#">Pain Relief</a>
                                        <a href="#">Hayfever</a>
                                        <a href="#">Stomach</a>
                                    </li>
                                </ul>
                        </div>
                    </div>

                </div>


                <div class="row Most_Popular_Section">
                        
                    <div class="col-6 Most_Popular_Section_Background ">
                        <h2 id="Most_Popular_Section_Heading">Most Popular (Beauty)</h2>

                        
                        <div id="Most_Popular_Section_Sub1">
                            <div id="Most_Popular_Tag"><i class="fas fa-star star_left"></i>Best Seller<i class="fas fa-star star_right"></i></div>
                            <img src="Resources/Products/SosuContour.JPG" alt="" id="Most_Popular_Section_Sub1_Image">
                            <h3 id="Most_Popular_Section_Sub1_Product">Sosu Contour</h3>
                            <h4 id="Most_Popular_Section_Sub1_Price">€24.99</h4>
                            
                        </div>
                        <div id="Most_Popular_Section_Sub2">
                            <div id="Most_Popular_Tag"><i class="fas fa-glass-martini martini_left"></i>Nightout<i class="fas fa-glass-martini martini_right"></i></div>
                            <img src="Resources/Products/BellamiantaTan.JPG" alt="" id="Most_Popular_Section_Sub2_Image">
                            <h3 id="Most_Popular_Section_Sub2_Product">Bellamianta Tan</h3>
                            <h4 id="Most_Popular_Section_Sub2_Price">€24.99</h4>
                            
                        </div>
                        <div id="Most_Popular_Section_Sub3">
                            <div id="Most_Popular_Tag"><i class="fas fa-tags tags_left"></i>Sale On<i class="fas fa-tags tags_right"></i></div>
                            <img src="Resources/Products/SculptedAC.JPG" alt="" id="Most_Popular_Section_Sub3_Image">
                            <h3 id="Most_Popular_Section_Sub3_Product">Sally Hansen Tan</h3>
                            <h4 id="Most_Popular_Section_Sub3_Price">€24.99</h4>
                            
                            
                        </div>

                        <div id="Most_Popular_Section_Sub4">
                            <div id="Most_Popular_Tag"><i class="fas fa-audio-description ad_left"></i>Promotion<i class="fas fa-audio-description ad_right"></i></div>
                            <img src="Resources/Products/SculptedAC.JPG" alt="" id="Most_Popular_Section_Sub4_Image">
                            <h3 id="Most_Popular_Section_Sub4_Product">Sculpted Highlighter/Shader</h3>
                            <h4 id="Most_Popular_Section_Sub4_Price">€24.99</h4>
                            
                        </div>
                        <div id="Most_Popular_Section_Sub5">
                            <div id="Most_Popular_Tag"><i class="fas fa-star star_left"></i>Best Seller<i class="fas fa-star star_right"></i></div>
                            <img src="Resources/Products/BlackCanvasCosmetics.JPG" alt="" id="Most_Popular_Section_Sub5_Image">
                            <h3 id="Most_Popular_Section_Sub5_Product">Blank Canvas<br> Tan Mit</h3>
                            <h4 id="Most_Popular_Section_Sub5_Price">€24.99</h4>
                            
                        </div>
                        <div id="Most_Popular_Section_Sub6">
                            <div id="Most_Popular_Tag"><i class="fas fa-glass-martini martini_left"></i>Nightout<i class="fas fa-glass-martini martini_right"></i></div>
                            <img src="Resources/Products/LunaLipGloss.JPG" alt="" id="Most_Popular_Section_Sub6_Image">
                            <h3 id="Most_Popular_Section_Sub6_Product">Luna By Lisa<br> Lip Gloss</h3>
                            <h4 id="Most_Popular_Section_Sub6_Price">€24.99</h4>
                            
                        </div>
                    </div>


                
                    <div class="col-6 Editors_Picks_Section_Background">

                        <h2 id="Editors_Picks_Section_Heading">Editor's Picks (Health)</h2>

                        <div id="Editors_Picks_Section_Sub1">
                            <div id="Editors_Picks_Tag"><i class="fas fa-star star_left"></i>Best Seller<i class="fas fa-star star_right"></i></div> 
                            <img src="Resources/Products/bPerfectBodyShimmer.JPG" alt="" id="Editors_Picks_Section_Sub1_Image">
                            <h3 id="Editors_Picks_Section_Sub1_Product">bPerfect<br> Body Shimmer</h3>
                            <h4 id="Editors_Picks_Section_Sub1_Price">€24.99</h4>
                            
                        </div>
                        <div id="Editors_Picks_Section_Sub2">
                            <div id="Editors_Picks_Tag"><i class="fas fa-tags tags_left"></i>SALE ON<i class="fas fa-tags tags_right"></i></div>
                            <img src="Resources/Products/bPerfectTan.JPG" alt="" id="Editors_Picks_Section_Sub2_Image">
                            <h3 id="Editors_Picks_Section_Sub2_Product">bPerfect Tan</h3>
                            <h4 id="Editors_Picks_Section_Sub2_Price">€24.99</h4>
                            
                        </div>
                        <div id="Editors_Picks_Section_Sub3">
                            <div id="Editors_Picks_Tag"><i class="fas fa-audio-description ad_left"></i>Promotion<i class="fas fa-audio-description ad_right"></i></div>
                            <img src="Resources/Products/SosuBag.JPG" alt="" id="Editors_Picks_Section_Sub3_Image">
                            <h3 id="Editors_Picks_Section_Sub3_Product">Sosu Bag</h3>
                            <h4 id="Editors_Picks_Section_Sub3_Price">€24.99</h4>
                            
                        </div>
                        <div id="Editors_Picks_Section_Sub4">
                            <div id="Editors_Picks_Tag"><i class="fas fa-star star_left"></i>Best Seller<i class="fas fa-star star_right"></i></div>
                            <img src="Resources/Products/SosuEyeLashes.JPG" alt="" id="Editors_Picks_Section_Sub4_Image">
                            <h3 id="Editors_Picks_Section_Sub4_Product">Sosu Eye Lashes</h3>
                            <h4 id="Editors_Picks_Section_Sub4_Price">€24.99</h4>
                            
                        </div>
                        <div id="Editors_Picks_Section_Sub5">
                            <div id="Editors_Picks_Tag"><i class="fas fa-tags tags_left"></i>SALE ON<i class="fas fa-tags tags_right"></i></div>
                            <img src="Resources/Products/SosuFakeNails.JPG" alt="" id="Editors_Picks_Section_Sub5_Image">
                            <h3 id="Editors_Picks_Section_Sub5_Product">Sosu Nails</h3>
                            <h4 id="Editors_Picks_Section_Sub5_Price">€24.99</h4>
                            
                        </div>
                        <div id="Editors_Picks_Section_Sub6">
                            <div id="Editors_Picks_Tag"><i class="fas fa-audio-description ad_left"></i>Promotion<i class="fas fa-audio-description ad_right"></i></div>
                            <img src="Resources/Products/LunaLipGloss.JPG" alt="" id="Editors_Picks_Section_Sub6_Image">
                            <h3 id="Editors_Picks_Section_Sub6_Product">Luna By Lisa<br> Lip Gloss</h3>
                            <h4 id="Editors_Picks_Section_Sub6_Price">€24.99</h4>
                            
                        </div>
                    </div>
                    
                </div>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 Popular_Choices_Section_Background">
                            <h2 id="Popular_Choices_Section_Heading">Popular Choice (Skincare)</h2>

                            <div id="Popular_Choices_Section_Sub1">
                                <div id="Popular_Choices_Tag"><i class="fas fa-medkit medkit_left"></i>First Aid<i class="fas fa-medkit medkit_right"></i></div>
                                <img src="Resources/Products/SosuContour.JPG" alt="" id="Popular_Choices_Section_Sub1_Image">
                                <h3 id="Popular_Choices_Section_Sub1_Product">Sosu Contour</h3>
                                <h4 id="Popular_Choices_Section_Sub1_Price">€24.99</h4>
                                
                            </div>
                            <div id="Popular_Choices_Section_Sub2">
                                <div id="Popular_Choices_Tag"><i class="fas fa-medkit medkit_left"></i>First Aid<i class="fas fa-medkit medkit_right"></i></div>
                                <img src="Resources/Products/BellamiantaTan.JPG" alt="" id="Popular_Choices_Section_Sub2_Image">
                                <h3 id="Popular_Choices_Section_Sub2_Product">Bellamianta Tan</h3>
                                <h4 id="Popular_Choices_Section_Sub2_Price">€24.99</h4>
                                
                            </div>
                            <div id="Popular_Choices_Section_Sub3">
                                <div id="Popular_Choices_Tag"><i class="fas fa-medkit medkit_left"></i>First Aid<i class="fas fa-medkit medkit_right"></i></div>
                                <img src="Resources/Products/SallyHansenTanGlow.JPG" alt="" id="Popular_Choices_Section_Sub3_Image">
                                <h3 id="Popular_Choices_Section_Sub3_Product">Sally Hansen Tan</h3>
                                <h4 id="Popular_Choices_Section_Sub3_Price">€24.99</h4>
                            </div>

                            <div id="Popular_Choices_Section_Sub4">
                                <div id="Popular_Choices_Tag"><i class="fas fa-medkit medkit_left"></i>First Aid<i class="fas fa-medkit medkit_right"></i></div>
                                <img src="Resources/Products/SculptedAC.JPG" alt="" id="Popular_Choices_Section_Sub4_Image">
                                <h3 id="Popular_Choices_Section_Sub4_Product">Sculpted Highlighter/Shader</h3>
                                <h4 id="Popular_Choices_Section_Sub4_Price">€24.99</h4>
                            </div>

                        </div>
                    </div>

                    <br>
                    <br>

                    
                <div class="row ">


                    <div  class="col-12 Stay_In_The_Know_Section">
                        <h2 id="Stay_In_The_Know_Section_Heading">Stay In The Know</h2>
                        <div id="Stay_In_The_Know_Section_Social_Media_Container">
                            <a href="https://www.facebook.com/McCormacksPharmacy/" class="facebook"><i class="fab fa-2x fa-facebook fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/mccormackspharmacy/?hl=en" class="instagram"><i class="fab  fa-instagram2 fa-2x fa-instagram"></i></a>
                            <a href="https://www.instagram.com/mccormackspharmacy/?hl=en" class="twitter"><i class="fab fa-2x fa-twitter"></i></a>
                            <a href="https://www.instagram.com/mccormackspharmacy/?hl=en" class="pinterest"><i class="fab fa-2x fa-pinterest"></i></a>
                            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                            <div class="elfsight-app-be5d8108-cc37-49af-a58d-a19916a81baf"></div>
                        </div>
                    </div>

                </div>

                <?php include("image-grid.php"); ?> 


        </div>

    








<script src="Resources/Javascript/homepage.js"></script>




<?php include("footer.php"); ?>


    
</body>
</html>