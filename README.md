INX BOILERPLATE
===========================

A boilerplate theme for WordPress that does not do anything beyond the absolutely necessary to pass ThemeCheck. Used to built upon.

## Files required by WP

+ screenshot.png: 1200x900 px
* README.md and README.txt: WP requires `.txt` extension
+ style.css: Contains all WP-generated classes
+ index.php: the loop
+ header.php: mandatory since v3.0.0
+ footer.php: mandatory since v3.0.0
+ sidebar.php: mandatory since v3.0.0
+ comments.php: mandatory since v3.0.0
+ functions.php: 
  * title-tag: Title tag cannot be added directly on header.php since v4.1

### Functions required by ThemeCheck
+ index.php: including:
  * "wp_link_pages"
  * "the_posts_navigation"
+ single.php: including:
  * "the_post_thumbnail()" (_RECOMMENDED_)
  * "the_tags()" (_REQUIRED_)
  * "comments_template();" (_REQUIRED_)
+ functions.php: including also:
  * content_width (_REQUIRED_)
  * theme_support: automatic-feed-links (_REQUIRED_), post-thumbnails _(RECOMMENDED_)
  * "wp_enqueue_script comment-reply" (_REQUIRED_)
  * "register_sidebar()" (_REQUIRED_)
  * theme support: custom-header, custom-background (_RECOMMENDED_)

### Extra functions
+ functions.php:
  * custom logo support

### Ignored:
+ ThemeCheck recommendation: "No reference to add_editor_style() was found in the theme." https://developer.wordpress.org/reference/functions/add_editor_style/
