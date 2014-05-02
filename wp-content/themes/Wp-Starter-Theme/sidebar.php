<div class="sidebar" id="shop-sidebar">
    <div class="top-fintik"></div>
    <div class="padding-div">
        <?php if (is_active_sidebar('sidebar-1')) : ?>
            <div id="sidebar" class="" role="complementary">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div><!-- #secondary -->
        <?php endif; ?>
    </div>

    <div class="bottom-fintik"></div>
</div>
