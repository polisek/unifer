<div class="section">
            <div class="sub-title-wrap">
                <h2 class="sub-sec-title">Produkty a služby</h2>
            </div>
            <div class="cnt">
                <?php $sluzby = get_field("sluzby"); ?>
                <div class="sub-fl-content">
                    <div class="sub-ps-box">
                        <img class="fl-img" src="<?php echo get_template_directory_uri()?>/assets/image/trajktujek.jpg" alt="">
                        <a href="<?php echo $sluzby["sluzba1"];?>" class="sluzba-page-link">
                            <div class="content">
                                <span class="arrow-down arr-d-sl"></span>
                                <h3>Služba</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do  </p>
                            </div>
                        </a>
                    </div>
                    <div class="sub-ps-box">
                        <img class="fl-img" src="<?php echo get_template_directory_uri()?>/assets/image/farm.jpg" alt="">
                        <a href="<?php echo $sluzby["sluzba2"];?>" class="sluzba-page-link">
                            <div class="content">
                                <span class="arrow-down arr-d-sl"></span>
                                <h3>Další služba s
                                    delším nadpisem</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do  </p>
                            </div>
                        </a>
                    </div>
                    <div class="sub-ps-box">
                        <img class="fl-img" src="<?php echo get_template_directory_uri()?>/assets/image/vešmíjek.jpg" alt="">
                        <a href="<?php echo $sluzby["sluzba3"];?>" class="sluzba-page-link">
                            <div class="content">
                                <span class="arrow-down arr-d-sl"></span>
                                <h3>Třetí slušba</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do  </p>
                            </div>
                        </a>
                    </div>
                    <div class="sub-ps-box">
                        <img class="fl-img" src="<?php echo get_template_directory_uri()?>/assets/image/farm.jpg" alt="">
                        <a href="<?php echo $sluzby["sluzba4"];?>" class="sluzba-page-link">
                            <div class="content">
                                <span class="arrow-down arr-d-sl"></span>
                                <h3>Poslední služba</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do  </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="sub-title-wrap">
                <h2 class="sub-sec-title">Vaše nejčastější otázky</h2>
                <p class="sub-sec-g-des">Lorem ipsum</p>
            </div>
            <div class="container">
                <div class="col-lg-10 mx-auto">
                    <ul class="dtz-box">
                        <?php 
                            if( have_rows('caste-otazky') ):
                                while( have_rows('caste-otazky') ) : the_row();
                                    get_template_part("template-parts/content-otazky-item");
                                endwhile;
                            
                            else :
                                echo "Nič tu není :(((";
                            endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>