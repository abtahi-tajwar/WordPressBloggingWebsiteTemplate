<?php
function include_stylesheet() 
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'include_stylesheet');
//Registering navigation menus
function initial_theme_setup() {
    //Registering all the navigation menus
    register_nav_menus( array (
        'primary' => __('Primary Menu')
    ));
    add_theme_support( 'post-thumbnails' );
    add_image_size('thumbnail_image', 361, 155, true);
    add_image_size('banner_image', 791, 339, array('top', 'left'));
}
add_action('after_setup_theme', 'initial_theme_setup');

//Registering widgets
function initial_widget_register()
{
    register_sidebar( array(
        'name' => __('Sidebar 1', 'press'),
        'id' => 'sidebar1',
        'before_title' => '<div class="widget_title">',
        'after_title' => '</div>',
        'before_widget' => '<div class="widget_wrapper">',
        'after_widget' => '</div>'

    ) );
}
add_action( 'widgets_init', 'initial_widget_register' );

function customizables($wp_customize)
{
    
    $wp_customize->add_section('top_sub_header', array(
        'title' => 'Top Sub Header'
    ));
    //Top subheader email custom section
    $wp_customize->add_setting('top_subheader_email', array(
        'default' => 'abtahitajwar@gmail.com'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'top_subheader_email_control', array(
        'label' => 'Edit your top subheader email here',
        'section' => 'top_sub_header',
        'settings' => 'top_subheader_email'
    )));
    //Top subheader phone custom section
    $wp_customize->add_setting('top_subheader_phone', array(
        'default' => '(+880)1796-391053'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'top_subheader_phone_control', array(
        'label' => 'Edit your top subheader phone here',
        'section' => 'top_sub_header',
        'settings' => 'top_subheader_phone'
    )));

    //New customizable section: Hero section
    $wp_customize->add_section('hero_section', array(
        'title' => 'Website Identity Section'
    ));
    //Hero section heading section
    $wp_customize->add_setting('hero_section_heading', array(
        'default' => 'Know the World'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero_section_heading_control', array(
        'label' => 'Heading',
        'section' => 'hero_section',
        'settings' => 'hero_section_heading'
    )));
    //Hero section description text
    $wp_customize->add_setting('hero_description_section', array(
        'default' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration 
        in some form, by injected humour, or randomised words which don't look even slightly believable. If you are 
         text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,"
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero_section_description_control', array(
        'label' => 'Description',
        'section' => 'hero_section',
        'settings' => 'hero_description_section',
        'type' => 'textarea'
    )));
    //Hero section Button text
    $wp_customize->add_setting('hero_button_section', array(
        'default' => 'Start Reading'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero_section_button_control', array(
        'label' => 'Button (Choose 2 or 3 words for better result)',
        'section' => 'hero_section',
        'settings' => 'hero_button_section'
    )));

    ///////////////////////
    //Sub hero section images

    $wp_customize->add_section('subhero', array(
        'title' => 'Subhero Section'
    ));
    //Top subhero image 1 section
    $wp_customize->add_setting('subhero_image_setting1');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'subhero_image_control1', array(
        'label' => 'First Image',
        'section' => 'subhero',
        'settings' => 'subhero_image_setting1',
        'height' => 40,
        'width' => 40
    )));
    //Subhero Heading 1
    $wp_customize->add_setting('subhero_heading1', array(
        'default' => 'Ease of Reading'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subhero_heading1_control', array(
        'label' => 'Choose a short heading',
        'section' => 'subhero',
        'settings' => 'subhero_heading1'
    )));
    //Subhero description 1
    $wp_customize->add_setting('subhero_description1', array(
        'default' => 'Easy to read with interactive tools'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subhero_description1_control', array(
        'label' => 'Choose a very short description',
        'section' => 'subhero',
        'settings' => 'subhero_description1'
    )));

    //Subhero Image 2
    $wp_customize->add_setting('subhero_image_setting2');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'subhero_image_control2', array(
        'label' => 'Second Image',
        'section' => 'subhero',
        'settings' => 'subhero_image_setting2',
        'height' => 40,
        'width' => 40
    )));
    //Subhero Heading 2
    $wp_customize->add_setting('subhero_heading2', array(
        'default' => 'Organized'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subhero_heading2_control', array(
        'label' => 'Choose a short heading',
        'section' => 'subhero',
        'settings' => 'subhero_heading2'
    )));
    //Subhero description 2
    $wp_customize->add_setting('subhero_description2', array(
        'default' => 'Contents are organized and easy to find'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subhero_description2_control', array(
        'label' => 'Choose a very short description',
        'section' => 'subhero',
        'settings' => 'subhero_description2'
    )));

    //Subheader Image 3
    $wp_customize->add_setting('subhero_image_setting3');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'subhero_image_control3', array(
        'label' => 'Third Image',
        'section' => 'subhero',
        'settings' => 'subhero_image_setting3',
        'height' => 40,
        'width' => 40
    )));
    //Subhero Heading 3
    $wp_customize->add_setting('subhero_heading3', array(
        'default' => 'Quality Content'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subhero_heading3_control', array(
        'label' => 'Choose a short heading',
        'section' => 'subhero',
        'settings' => 'subhero_heading3'
    )));
    //Subhero description 2
    $wp_customize->add_setting('subhero_description3', array(
        'default' => 'Amazing quality of content'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'subhero_description3_control', array(
        'label' => 'Choose a very short description',
        'section' => 'subhero',
        'settings' => 'subhero_description3'
    )));

    //Add featured post
    $wp_customize->add_section('featured-post-section', array(
        'title' => 'Featured Post'
    ));
    $wp_customize->add_setting('featured-post');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'feature-post-control', array(
        'label' => 'Select a featured post. (Always fill the excerpt section for the featured post in the right panel',
        'section' => 'featured-post-section',
        'settings' => 'featured-post'
    )));
}
add_action("customize_register", "customizables");




//Construction on widget of authors list
function author_names( $number )
{
    $args = ( array(
        'role' => 'author'
    ) );
    $authors = wp_list_authors( 'post_count', 'DESC', $number );
    if( !empty($authors) ) {
        $author_names = '<ul class="author_names">';
        foreach($authors as $author) {
            $author_names += '<li>'.$author.'</li>';
        }
        $author_names += '</ul>';
        return $author_names;
    }
    return;
}

class Author_Names extends WP_Widget {
 
    function __construct() {
 
        parent::__construct(
            'author-list',  // Base ID
            'Author List'   // Name
        );
 
        add_action( 'widgets_init', function() {
            register_widget( 'Author_Names' );
        });
 
    }
 
    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>'
    );
 
    public function widget( $args, $instance ) {
 
        echo $args['before_widget'];
 
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
 
        echo '<div class="textwidget">';
 
        //echo esc_html__( $instance['text'], 'text_domain' );
        echo author_names($instance['text']);
 
        echo '</div>';
 
        echo $args['after_widget'];
 
    }
 
    public function form( $instance ) {
 
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'text_domain' );
        $text = ! empty( $instance['text'] ) ? $instance['text'] : esc_html__( '', 'text_domain' );
        ?>
        <p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Number of Authors:', 'text_domain' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="number"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <?php
 
    }
 
    public function update( $new_instance, $old_instance ) {
 
        $instance = array();
 
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['text'] = ( !empty( $new_instance['text'] ) ) ? $new_instance['text'] : '';
 
        return $instance;
    }
 
}
$my_widget = new Author_Names();
?>