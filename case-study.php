<?php 
/* Template Name: Case Study */
get_header(); ?>
<!--Case-Study-Page-Styling-start-->
<main>
    <!--case-study-start-->
    <section class="case-study">
        <div class="container">
            <div class="row">
                <?php get_template_part('/template-parts/case-study/case-study-content') ?>
            </div><!--end-row-->
        </div> <!--end-container-->
    </section><!--case-study-end-->
</main>
<!--Case-Study-Page-Styling-end-->
<?php get_footer(); ?>