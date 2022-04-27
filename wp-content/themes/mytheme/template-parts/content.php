   <?php
    $id = get_the_id();
    $bd = $wpdb->get_results('SELECT count_fire,count_rock,post_content,mark_heavy, mark_lyric,mark_style,mark_geek,mark_pop,link_band FROM wp_posts WHERE id = '.$id.'');
?>  
         <a  href="<?php echo $bd[0]->link_band ?>" title="<?php the_title(); ?>">
        <div class="main_block" onselectstart="return false" onmousedown="return false">
           <div class="overflow_kard"></div>
            <div class="kard_osn">
                <p class="head_ch"><?php the_title(); ?></p>
                <div class="character">
                    <div class="first_icon">
                        <div class="letsrock">
                           <?php
                            $count = $bd[0]->count_rock;
                            if($count == 3){
                                $i = 0;
                                while ($i < 3):
                                echo "<img src="."http://roktusovka/wp-content/uploads/2019/06/rooock-min.png"." height="."30px"." width="."30px"."> ";
                                $i++;
                                endwhile;
                            }else{
                                $i = 0;
                                $s = 3 - $count;
                                $k = 0;
                                while ($i < $count){
                                echo "<img src="."http://roktusovka/wp-content/uploads/2019/06/rooock-min.png"." height="."30px"." width="."30px"."> ";
                                $i++;
                                    };
                                while ($k < $s){
                                echo "<img src="."http://roktusovka/wp-content/uploads/2019/06/none-min.png"." height="."30px"." width="."30px"."> ";
                                $k++;
                                    }
                                
                            }
                            ?>
                        </div>
                        <div class="fire_band">
                            <?php
                            $count = $bd[0]->count_fire;
                            if($count == 3){ 
                                $i = 0;
                                while ($i < 3):
                                echo "<img src="."http://roktusovka/wp-content/uploads/2019/06/fire-min.png"." height="."30px"." width="."30px"."> ";
                                $i++;
                                endwhile;
                            }else{
                                $i = 0;
                                $s = 3 - $count;
                                $k = 0;
                                while ($i < $count){
                                echo "<img src="."http://roktusovka/wp-content/uploads/2019/06/fire-min.png"." height="."30px"." width="."30px"."> ";
                                $i++;
                                    };
                                while ($k < $s){
                                echo "<img src="."http://roktusovka/wp-content/uploads/2019/06/none-min.png"." height="."30px"." width="."30px"."> ";
                                $k++;
                                    }
                                
                            }
                           
                            ?>
                        </div>                                                            
                    </div>
                    <div class="second_icon">
                        <div>
                            <p class="left">Важкість</p>
                            <p class="right"><?php echo $bd[0]->mark_heavy; ?></p>
                        </div>
                        <div>
                            <p class="left">Стиль</p>
                            <p class="right"><?php echo $bd[0]->mark_style; ?></p>
                        </div>
                        <div>
                            <p class="left">Концерти</p>
                            <p class="right"><?php echo $bd[0]->mark_geek; ?></p>
                        </div>
                        <div>
                            <p class="left">Лірика</p>
                            <p class="right"><?php echo $bd[0]->mark_lyric; ?></p>
                        </div>
                        <div>
                            <p class="left">Популярність</p>
                            <p class="right"><?php echo $bd[0]->mark_pop; ?></p>
                        </div>
                    </div>

                </div>
                <div class="after_ch">
                    <div>
                        
                           <p>
                           <?php
                               // Відображення контенту
                                $text = $bd[0]->post_content;
                                echo substr($text,0,200);
                            ?>
                        </p>

                    </div>
                </div>
            </div>
                <img class="img_ind01" src="<?php the_post_thumbnail_url(); ?>" alt="" height="230px" width="280px">
                <img class="osn" src="http://roktusovka/wp-content/uploads/2019/06/kard_darknest.png" alt="" height="400px" width="280px">

        </div>
    </a>    