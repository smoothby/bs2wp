<?php
/**
 * The index page.
 *
 * Displays the main index, yessah
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bs2wp
 * @since Bootstrap to WordPress v1.0
 */
?>

<?php

get_header();

get_template_part('template-parts/banner','title');

?>

    <div class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 overflow-hidden">

                    <article class="post my-5">
                        <div class="meta">
                            <span>Sep. 14, 2022</span>
                        </div>
                        <h2><a href="#">Just make things happen</a></h2>
                        <p class="excerpt">
                            Just make things happen by allowing them to happen. Then everything will turn out alright.
                        </p>
                        <a href="#" class="read-more">Read the full post -&gt;</a>
                    </article>

                    <article class="post my-5">
                        <div class="meta">
                            <span>Sep. 14, 2022</span>
                        </div>
                        <h2><a href="#">Things come and go...</a></h2>
                        <p class="excerpt">
                            Things come and go, and he lets them. He doesn't seize them, and so participates in their
                            own spontaneity. He does his job and lets go.
                        </p>
                        <a href="#" class="read-more">Read the full post -&gt;</a>
                    </article>

                    <article class="post my-5">
                        <div class="meta">
                            <span>Sep. 14, 2022</span>
                        </div>
                        <h2><a href="#">Work hard, then relax</a></h2>
                        <p class="excerpt">
                            Pride and its collapse are the same. Work hard, then relax. Nurture, then release. That's
                            the true way.
                        </p>
                        <a href="#" class="read-more">Read the full post -&gt;</a>
                    </article>

                    <article class="post my-5">
                        <div class="meta">
                            <span>Sep. 14, 2022</span>
                        </div>
                        <h2><a href="#">Create without owning</a></h2>
                        <p class="excerpt">
                            With the Tao, you can create things without owning them. You can act with immersion in the
                            process and let go of the result. Lead but don't dominate. This is the forest path.
                        </p>
                        <a href="#" class="read-more">Read the full post -&gt;</a>
                    </article>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
