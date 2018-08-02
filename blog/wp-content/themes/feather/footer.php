<?php $feather_theme_options = get_option('feather'); ?>
<!-- footer -->
<footer>
        
        <div class="container">
            <div class="row">
                    




                        























































                    <?php if(isset($feather_theme_options['copyrights']) && $feather_theme_options['copyrights'] != '') : ?>

                    <!-- copyrights -->
                    <div class="copyrights">
                            
                            <p class="light-font"><?php echo $feather_theme_options['copyrights']; ?></p>

                    </div>
                    <!-- end copyrights -->

                    <?php endif; ?>



            </div>
            <!-- end row -->
        </div>
        <!-- end container -->

</footer>
<!-- end footer -->
<?php wp_footer();
if(isset($feather_theme_options['trackingcode']) && $feather_theme_options['trackingcode'] != '') echo $feather_theme_options['trackingcode'];
?>
</body>
</html>
