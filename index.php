<?php get_header(); ?>
<?php $theme_url =  get_template_directory_uri(); ?>
<?php $loop = new WP_Query(array('post_type' => 'gallery', 'order' => 'ASC')) ?>

<main>
    <div class="sticky-bar">
        <div class="content">
            <span>Potřebujete kapitána?</span>
        </div>
    </div>
    <section id="booking">
        <div class="container small h-center">
            <div class="heading-wrapper">
                <h1>Rezervace Yacht</h1>
                <div class="short-divider white"></div>
                <p>Lorem ipsum dolor sit amet dolor sit amet<br>
                    lorem ipsum dolor sit amet.</p>
            </div>
            <form action="#">
                <div class="input-wrapper">
                    <label for="destination">Destinace</label>
                    <select name="destination" id="destination">
                        <option selected hidden value="null">Vyberte destinace</option>
                        <option value="canarian_islands">Kanárské ostrovy</option>
                        <option value="croatia">Chorvatsko</option>
                        <option value="france">Francie</option>
                        <option value="maldives">Maledivy</option>
                    </select>
                </div>
                <div class="input-wrapper">
                    <label for="date">Kdy</label>
                    <input type="date" id="date" name="date">
                </div>
                <div class="input-wrapper">
                    <label for="ship">Typ lodě</label>
                    <select name="ship" id="ship">
                        <option selected hidden value="null">Vyberte loď</option>
                        <option value="yacht">Jachta</option>
                        <option value="jetski">Vodní skůtr</option>
                        <option value="catamaran">Katamarán</option>
                    </select>
                </div>
                <div class="input-wrapper">
                    <input type="submit" value="Potvrdit">
                </div>
            </form>
        </div>
    </section>
    <section id="last-first-minute">
        <div class="container medium">
            <div class="top-wrapper">
                <h3>Last First Minute</h3>
                <div class="button-wrapper">
                    <button class="active">Chorvatsko</button>
                    <button>Řecko</button>
                </div>
                <div class="long-divider"></div>
            </div>
            <div class="destination-wrapper" id="destination-slider">
                <div class="destination">
                    <picture>
                        <source srcset="<?php echo $theme_url;?>/assets/images/optimized/destination-1.webp" type="image/webp">
                        <img src="<?php echo $theme_url;?>/assets/images/optimized/destination-1.jpg" alt="Loď kymácející se na vlnách moře" loading="lazy">
                    </picture>
                    <h4>Chorvatsko</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer<br>adipiscing elit. Duis viverra dia.</p>
                    <a href="#">Zjistit více</a>
                    <div class="long-divider"></div>
                </div>
                <div class="destination">
                    <picture>
                        <source srcset="<?php echo $theme_url;?>/assets/images/optimized/destination-2.webp" type="image/webp">
                        <img src="<?php echo $theme_url;?>/assets/images/optimized/destination-2.jpg" alt="už v plavkách držící se lodi vykloněný nad otevřeným mořem" loading="lazy">
                    </picture>                    
                    <h4>Chorvatsko</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer<br>adipiscing elit. Duis viverra dia.</p>
                    <a href="#">Zjistit více</a>
                    <div class="long-divider"></div>
                </div>
                <div class="destination">
                    <picture>
                        <source srcset="<?php echo $theme_url;?>/assets/images/optimized/destination-3.webp" type="image/webp">
                        <img src="<?php echo $theme_url;?>/assets/images/optimized/destination-3.jpg" alt="Muž ve vzduchu dopadající do bazénu. Za ním muž pozorující muže ve vzduchu" loading="lazy">
                    </picture>
                    <h4>Chorvatsko</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer<br>adipiscing elit. Duis viverra dia.</p>
                    <a href="#">Zjistit více</a>
                    <div class="long-divider"></div>
                </div>
                <div class="destination">
                    <picture>
                        <source srcset="<?php echo $theme_url;?>/assets/images/optimized/destination-4.webp" type="image/webp">
                        <img src="<?php echo $theme_url;?>/assets/images/optimized/destination-4.jpg" alt="Ptačí perspektiva na otevřené moře s větším množstvím lodí" loading="lazy">
                    </picture>
                    <h4>Chorvatsko</h4>
                    <p>Lorem ipsum dolor sit amet, consectetuer<br>adipiscing elit. Duis viverra dia.</p>
                    <a href="#">Zjistit více</a>
                    <div class="long-divider"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="why-us">
        <div class="container">
            <div class="heading-wrapper">
                <h2>Proč s námi</h2>
                <div class="short-divider gray"></div>
                <p>Lorem ipsum dolor sit amet dolor sit amet<br>
                    lorem ipsum dolor sit amet.</p>
            </div>
            <div class="ship-wrapper">
                <div class="ship">
                    <div class="reasons-wrapper">
                        <div class="reason right">
                            <div class="icon"></div>
                            <div class="content">
                                <h4><?php echo get_field('reason_1')['heading'] ?></h4>
                                <p><?php echo get_field('reason_1')['text'] ?></p>
                            </div>
                        </div>
                        <div class="reason left">
                            <div class="icon"></div>
                            <div class="content">
                                <h4><?php echo get_field('reason_2')['heading'] ?></h4>
                                <p><?php echo get_field('reason_2')['text'] ?></p>
                            </div>
                        </div>
                        <div class="reason right">
                            <div class="icon"></div>
                            <div class="content">
                                <h4><?php echo get_field('reason_3')['heading'] ?></h4>
                                <p><?php echo get_field('reason_3')['text'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>      
    <section id="gallery">
        <div class="absolute-header">
            <h2>Fotogalerie</h2>
        </div>
        <div class="gallery-wrapper" id="gallery-slider">
            <?php
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) {
                        $loop->the_post();
                        echo '<img loading="lazy" src="'.get_field('image')['url'].'" alt="'.get_field('image')['alt'].'">';
                    }
                }
            ?>
        </div>
    </section>
    <div id="bg-section-first"></div>
    <section id="testimonials">
        <div class="container medium">
            <div class="top-wrapper">
                <h3>Reference a zkušenosti</h3>
                <div class="long-divider"></div>
            </div>
            <div class="testimonials-wrapper" id="testimonials-slider">
                <div class="testimonial">
                    <div class="header" style="background-image:url(<?php echo $theme_url;?>/assets/images/optimized/testimonial-1.jpg)">
                        <picture>
                            <source srcset="<?php echo $theme_url;?>/assets/images/optimized/avatar-1.webp" type="image/webp">
                            <img src="<?php echo $theme_url;?>/assets/images/optimized/avatar-1.jpg" alt="Muž s černým tričkem, kloboukem a brýlemi" loading="lazy">
                        </picture>
                    </div>
                    <div class="content">
                        <h4>Josef Novák</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut,
                        suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Etiam ligula pede,
                        sagittis quis, interdum ultricies, scelerisque eu. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="header" style="background-image:url(<?php echo $theme_url;?>/assets/images/optimized/testimonial-2.jpg)">
                        <picture>
                            <source srcset="<?php echo $theme_url;?>/assets/images/optimized/avatar-2.webp" type="image/webp">
                            <img src="<?php echo $theme_url;?>/assets/images/optimized/avatar-2.jpg" alt="Žena držící se lana a dívající se do dálky" loading="lazy">
                        </picture>                    
                    </div>
                    <div class="content">
                        <h4>Josef Novák</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut,
                        suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Etiam ligula pede,
                        sagittis quis, interdum ultricies, scelerisque eu. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="header" style="background-image:url(<?php echo $theme_url;?>/assets/images/optimized/testimonial-2.jpg)">
                        <picture>
                            <source srcset="<?php echo $theme_url;?>/assets/images/optimized/avatar-2.webp" type="image/webp">
                            <img src="<?php echo $theme_url;?>/assets/images/optimized/avatar-2.jpg" alt="Žena držící se lana a dívající se do dálky" loading="lazy">
                        </picture>  
                    </div>
                    <div class="content">
                        <h4>Josef Novák</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut,
                        suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Etiam ligula pede,
                        sagittis quis, interdum ultricies, scelerisque eu. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="header" style="background-image:url(<?php echo $theme_url;?>/assets/images/optimized/testimonial-2.jpg)">
                        <picture>
                            <source srcset="<?php echo $theme_url;?>/assets/images/optimized/avatar-2.webp" type="image/webp">
                            <img src="<?php echo $theme_url;?>/assets/images/optimized/avatar-2.jpg" alt="Žena držící se lana a dívající se do dálky" loading="lazy">
                        </picture>  
                    </div>
                    <div class="content">
                        <h4>Josef Novák</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, commodo ut,
                        suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. Etiam ligula pede,
                        sagittis quis, interdum ultricies, scelerisque eu. Excepteur sint occaecat cupidatat non proident</p>
                    </div>
                </div>
            </div>
            <div class="slick-control-wrapper">
                <button class="slick-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.167" height="15.438" viewBox="0 0 9.167 15.438">
                        <path id="Path_34" data-name="Path 34" d="M9.022,8.105v.048a.724.724,0,0,0,0-.868L1.93.145a.653.653,0,0,0-.82,0L.145,1.11A.706.706,0,0,0,0,1.544a.522.522,0,0,0,.145.386L5.886,7.719.145,13.509A.522.522,0,0,0,0,13.894a.706.706,0,0,0,.145.434l.965.965a.672.672,0,0,0,.41.145.576.576,0,0,0,.41-.193Z" transform="translate(9.167 15.438) rotate(-180)"/>
                    </svg>                           
                </button>
                <button class="slick-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="9.167" height="15.438" viewBox="0 0 9.167 15.438">
                      <path id="Path_33" data-name="Path 33" d="M9.022,8.105v.048a.724.724,0,0,0,0-.868L1.93.145a.653.653,0,0,0-.82,0L.145,1.11A.706.706,0,0,0,0,1.544a.522.522,0,0,0,.145.386L5.886,7.719.145,13.509A.522.522,0,0,0,0,13.894a.706.706,0,0,0,.145.434l.965.965a.672.672,0,0,0,.41.145.576.576,0,0,0,.41-.193Z"/>
                    </svg>                       
                </button>
            </div>
        </div>
    </section>
    <section id="video">
        <div class="container large">
            <div class="video-wrapper">
                <video src="<?php echo $theme_url;?>/assets/video/yacht.mp4" poster="<?php echo $theme_url;?>/assets/images/optimized/hero.jpg"></video>
                <div class="control paused"></div>
            </div>
        </div>
    </section>
    <div id="bg-section-second"></div>
    <section id="faq">
        <div class="container small">
            <div class="heading-wrapper">
                <h2>FAQ</h2>
                <div class="short-divider gray"></div>
                <p>Nejčastější dotazy před první<br> 
                    dovolenou na moři</p>
            </div>
            <div class="accordion-wrapper">
                <ul class="accordion">
                    <li>
                        <div>Lorem ipsum dolor sit amet dolor sit amet lorem upsum</div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, 
                            commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. 
                            Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                        </div>
                    </li>
                    <li>
                        <div>Lorem ipsum dolor sit amet dolor sit amet lorem upsum</div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, 
                            commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. 
                            Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                        </div>
                    </li>
                    <li>
                        <div>Lorem ipsum dolor sit amet dolor sit amet lorem upsum</div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. In sem justo, 
                            commodo ut, suscipit at, pharetra vitae, orci. Quisque tincidunt scelerisque libero. 
                            Etiam ligula pede, sagittis quis, interdum ultricies, scelerisque eu.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
