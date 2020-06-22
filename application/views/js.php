<script src="<?=base_url();?>assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="<?=base_url();?>assets/vendor/multilevel-sliding-mobile-menu/dist/jquery.zeynep.js"></script>
    <script src="<?=base_url();?>assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <script src="<?=base_url();?>assets/vendor/slick-carousel/slick/slick.min.js"></script>

    <script src="<?=base_url();?>assets/js/hs.core.js"></script>
    <script src="<?=base_url();?>assets/js/components/hs.unfold.js"></script>
    <script src="<?=base_url();?>assets/js/components/hs.malihu-scrollbar.js"></script>
    <script src="<?=base_url();?>assets/js/components/hs.slick-carousel.js"></script>
    <script src="<?=base_url();?>assets/js/components/hs.selectpicker.js"></script>
    <script src="<?=base_url();?>assets/js/components/hs.show-animation.js"></script>


    <script>
    $(document).on('ready', function() {
        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

        // initialization of select picker
        $.HSCore.components.HSSelectPicker.init('.js-select');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // init zeynepjs
        var zeynep = $('.zeynep').zeynep({
            onClosed: function() {
                // enable main wrapper element clicks on any its children element
                $("body main").attr("style", "");

                console.log('the side menu is closed.');
            },
            onOpened: function() {
                // disable main wrapper element clicks on any its children element
                $("body main").attr("style", "pointer-events: none;");

                console.log('the side menu is opened.');
            }
        });

        // handle zeynep overlay click
        $(".zeynep-overlay").click(function() {
            zeynep.close();
        });

        // open side menu if the button is clicked
        $(".cat-menu").click(function() {
            if ($("html").hasClass("zeynep-opened")) {
                zeynep.close();
            } else {
                zeynep.open();
            }
        });
    });
    </script>