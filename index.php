<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php   
            if( have_posts() ){
                while ( have_posts() ) {
                    
                    the_post(); ?>


        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title() ; ?>
                    </a>
                </h3>

                <span class="post-author"> <i class="fas  fa-user fa-fw fa-lg"></i><?php the_author() ; ?> </span>
                <span class="post-date"> <i class="fa fa-calendar fa-fw fa-lg"></i>
                    <?php the_time('F j, Y') ; ?> at <?php the_time('g:i a') ; ?> </span>

                <hr>
                <p class="categories">
                    <i class="fa fa-tags fa-fw fa-lg"></i>
                    <?php the_category(', ') ; ?>
                </p>
                </p>

            </div>
        </div>
        <?php 
                        
                }
            }

            ?>

    </div>
</div>


<!-- <div class="col-sm-6">
    <div class="main-post">
       
        <span class="post-comments"> <i class="fa fa-brands  fa-fw fa-lg"></i>
            20 comments</span>
        <img class="img-reponsive img-thumbnail" src="http://placehold.it/600x200/300" alt="" />
        <p class="post-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem
            Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
            took
            a galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
            was
            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and
            more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
            Ipsum.</p>
       
    </div>
</div> -->




<?php get_footer();?>