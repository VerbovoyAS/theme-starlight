<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var array $atts
 */
?>
<a class="hashtag-imagebox-link" href="<?php echo $atts['link'] ?? '#'; ?>">
    <div class="hashtag-imagebox-custom hashtag-imagebox-1 ">
        <img src="<?php echo $atts['image']['url'] ?? ''; ?>" alt="avatar"
             class="rounded img-fluid rounded-3" style="width: 150px;">
        <div class="">
            <div class="hashtag-imagebox-title">
                <h3><?php echo $atts['title']; ?></h3>
            </div>
            <div class="hashtag-imagebox-text">
                <p><?php echo $atts['content']; ?></p>
            </div>
        </div>
    </div>
</a>
