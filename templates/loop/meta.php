<?php
global $post, $authordata;

?>
<div class="tutor-loop-author">
<div class="tutor-single-course-avatar">
	<?php echo tutor_utils()->get_tutor_avatar($post->post_author); ?>
</div>

<div class="tutor-single-course-author-name">
	<strong><?php _e('by', 'tutor'); ?></strong>
    <a href="<?php echo tutor_utils()->student_url($authordata->ID); ?>"><?php echo get_the_author(); ?></a>
</div>

<div class="tutor-course-lising-category">
	<?php
	$course_categories = get_tutor_course_categories();
	if(!empty($course_categories) && is_array($course_categories ) && count($course_categories)){
		?>
		<strong><?php esc_html_e('In', 'tutor') ?></strong>
		<?php
		foreach ($course_categories as $course_category){
			$category_name = $course_category->name;
			echo "<span>$category_name</span>";
		}
	}
	?>
</div>
</div>