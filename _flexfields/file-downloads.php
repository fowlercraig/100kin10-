<div id="downloads-<?php echo $i; ?>" class="block">
<div class="row">   

<?php if( get_sub_field('download_title') ) { ?>
<div class="header desktop-12 tablet-6 mobile-3">
    <h2 class="panel-title"><?php the_sub_field('download_title'); ?></h2>
</div>
<? } ?>

<?php if(get_sub_field('download_files')): ?>

<ul class="files">

<?php while(has_sub_field('download_files')): ?>

<li class="desktop-12 tablet-6 mobile-3 file">


    <div class="icon" style="background-image: url(<?php the_sub_field('video_thumbnail'); ?>);" >
        <a target="blank" href="<?php if( get_sub_field('file_type') ): ?><?php if(get_sub_field('file_type') == "download"){ the_sub_field('file_upload'); }?><?php if(get_sub_field('file_type') == "video"){ the_sub_field('video_link'); }?><?php endif; ?>">
            <i class="ss-icon ss-gizmo"><?php the_sub_field('file_type'); ?></i>
        </a>
    </div>
    <h3><a href="<?php if( get_sub_field('file_type') ): ?><?php if(get_sub_field('file_type') == "download"){ the_sub_field('file_upload'); }?><?php if(get_sub_field('file_type') == "video"){ the_sub_field('video_link'); }?><?php endif; ?>" target="blank"><?php the_sub_field('file_name'); ?></a></h3>
</li>

<?php endwhile; ?>

</ul>

<?php endif; ?>
        
</div>
</div>
