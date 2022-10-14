
<li class="dtz-item <?php if (get_sub_field('open') == 1){ echo "active"; } ?>"  onclick="openDTZ(this)">
    <div class="dtz-list-s">
        <h4><?php echo get_sub_field('napis');?></h4> <span class="arrow-down dtz-ar"></span>
    </div>
    <div class="dtz-dropdown"> 
        <p class="dtz-d-text"><?php echo get_sub_field('popis'); ?></p>
    </div>
</li>