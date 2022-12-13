<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo e(url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css')); ?>" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="<?php echo e(url('css/layout.css')); ?>" rel="stylesheet" type="text/css" media="all">
        <style>
            @font-face {
            font-display: swap;
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- ################################################################################################ -->
        <div class="wrapper row0">
            <div id="topbar" class="clear"> 
                <!-- ################################################################################################ -->
                <nav>
                <ul>
                    <li><a href="#footer">Contact Us</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#stlogin">Student Login</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#sflogin">Staff Login</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#plogin">Parent Login</a></li>
                    <li><a href="faqs">FAQs</a></li>
                </ul>
                </nav>
                <!-- ################################################################################################ --> 
            </div>
        </div>
        
        <!-- ################################################################################################ -->
        <div class="wrapper row1">
            <header id="header" class="clear"> 
                <!-- ################################################################################################ -->
                <div id="logo" class="fl_left">
                <h1><a href="index.html">Sacred Heart College, <span style="font-size:16pt;">Agenebode</span>.</a></h1>
                <p>Knowledge is Power</p>
                </div>
                <div class="fl_right">
                <form class="clear" method="post" action="#">
                    <fieldset>
                    <legend>Search:</legend>
                    <input type="text" value="" placeholder="Search Here">
                    <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
                    </fieldset>
                </form>
                </div>
                <!-- ################################################################################################ --> 
            </header>
        </div>

         <!-- ################################################################################################ -->
        <div class="wrapper row2">
            <div class="rounded">
            <nav id="mainav" class="clear"> 
                <!-- ################################################################################################ -->
                <ul class="clear">
                <li class="active"><a href="/">Home</a></li>
                <li><a class="drop" href="#">Curriculum</a>
                    <ul>
                        <li><a class="drop" href="#">JSS 1</a>
                            <ul>
                                <li><a href="<?php echo e(url('curriculum/1/1')); ?>">1<sup>st</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/1/2')); ?>">2<sup>nd</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/1/3')); ?>">3<sup>rd</sup> Term</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">JSS 2</a>
                            <ul>
                                <li><a href="<?php echo e(url('curriculum/2/1')); ?>">1<sup>st</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/2/2')); ?>">2<sup>nd</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/2/3')); ?>">3<sup>rd</sup> Term</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">JSS 3</a>
                            <ul>
                                <li><a href="<?php echo e(url('curriculum/3/1')); ?>">1<sup>st</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/3/2')); ?>">2<sup>nd</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/3/3')); ?>">3<sup>rd</sup> Term</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">SSS 1</a>
                            <ul>
                                <li><a href="<?php echo e(url('curriculum/4/1')); ?>">1<sup>st</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/4/2')); ?>">2<sup>nd</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/4/3')); ?>">3<sup>rd</sup> Term</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">SSS 2</a>
                            <ul>
                                <li><a href="<?php echo e(url('curriculum/5/1')); ?>">1<sup>st</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/5/2')); ?>">2<sup>nd</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/5/3')); ?>">3<sup>rd</sup> Term</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">SSS 3</a>
                            <ul>
                                <li><a href="<?php echo e(url('curriculum/6/1')); ?>">1<sup>st</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/6/2')); ?>">2<sup>nd</sup> Term</a></li>
                                <li><a href="<?php echo e(url('curriculum/6/3')); ?>">3<sup>rd</sup> Term</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="staff">Staff</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="payments">Payments</a></li>
                <li><a href="news">News</a></li>
                </ul>
                <!-- ################################################################################################ --> 
            </nav>
            </div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>

        <!-- ################################################################################################ -->
        <div class="wrapper row4">
            <div class="rounded">
                <footer id="footer" class="clear"> 
                <!-- ################################################################################################ -->
                <div class="one_third first">
                    <figure class="center"><img class="btmspace-15" src="/images/demo/worldmap.png" alt="">
                    <figcaption><a href="#">Find Us With Google Maps &raquo;</a></figcaption>
                    </figure>
                </div>
                <div class="one_third">
                    <address>
                    Sacred Heart College<br>
                    Along NEPA Road,<br>
                    Off Mission Road Agenebode,<br>
                    Edo State.<br>
                    <br>
                    <i class="fa fa-phone pright-10"></i> +2348088888888<br>
                    <i class="fa fa-envelope-o pright-10"></i> <a href="#">support@shca.com</a>
                    </address>
                </div>
                <div class="one_third">
                    <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
                    <ul class="faico clear">
                    <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
                    <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                    <form class="clear" method="post" action="#">
                    <fieldset>
                        <legend>Subscribe To Our Newsletter:</legend>
                        <input type="text" value="" placeholder="Enter Email Here&hellip;">
                        <button class="fa fa-sign-in" type="submit" title="Sign Up"><em>Sign Up</em></button>
                    </fieldset>
                    </form>
                </div>
                <!-- ################################################################################################ --> 
                </footer>
            </div>
        </div>
        <!-- ################################################################################################ --> 
        <!-- ################################################################################################ --> 
        <!-- ################################################################################################ -->
        <div class="wrapper row5">
            <div id="copyright" class="clear"> 
                <!-- ################################################################################################ -->
                <p class="fl_left">Copyright &copy; <span class="tm-current-year"></span> - All Rights Reserved - <a href="#">Sacred Heart College</a></p>
                <p class="fl_right">Developed by <a target="_blank" href="https://alphie.tech/" title="Website development">Alphie Tech</a></p>
                <!-- ################################################################################################ --> 
            </div>
        </div>
        <!-- include login modals -->
        <?php echo $__env->make('stlogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('sflogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('plogin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- JAVASCRIPTS --> 
        <script src="<?php echo e(url('js/jquery.min.js')); ?>"></script> 
        <script src="<?php echo e(url('js/jquery.fitvids.min.js')); ?>"></script> 
        <script src="<?php echo e(url('js/jquery.mobilemenu.js')); ?>"></script> 
        <script src="<?php echo e(url('js/tabslet/jquery.tabslet.min.js')); ?>"></script>
        <script src="<?php echo e(url('js/others.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\sacred-heart-college\resources\views/master.blade.php ENDPATH**/ ?>