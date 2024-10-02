<?php
// Retrieve the post's published day, month, and year

                    $post_day = get_the_time('d');

                    $post_month = get_the_time('m');

                    $post_year = get_the_time('Y');

  

                    // Define month translations for Croatian

                    $croatian_months = array(

                        '01' => 'siječanja',

                        '02' => 'veljače',

                        '03' => 'ožujka',

                        '04' => 'travnja',

                        '05' => 'svibnja',

                        '06' => 'lipnja',

                        '07' => 'srpnja',

                        '08' => 'kolovoza',

                        '09' => 'rujna',

                        '10' => 'listopada',

                        '11' => 'studenog',

                        '12' => 'prosinca'

                    );

  

                    // Get the translated month name

                    $translated_month = $croatian_months[$post_month];

  

                    // Format the date as desired (Day Month Year)

					$date_formatted = $post_day . '. ' . $translated_month . ' ' .$post_year . '.';
                    ?>
					<!-- Display the post date -->
                   
                        <div class="date">

                            <p id="date"> <?php echo $date_formatted; ?></p>
                            <!-- #date -->

                        </div>
                        <!-- .date -->