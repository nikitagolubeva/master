<?php
/**
 * garden functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package garden
 */
//add_filter( 'automatic_updater_disabled', '__return_true' );
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function garden_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on garden, use a find and replace
		* to change 'garden' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'garden', get_template_directory() . '/languages' );


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);




}
add_action( 'after_setup_theme', 'garden_setup' );


if (function_exists('acf_add_options_page')) {

    acf_add_options_page();

}


/**
 * Enqueue scripts and styles.
 */
function garden_scripts() {
    

    wp_enqueue_style('garden-style', get_template_directory_uri() . "/Garden/dist/main.css", array(), filemtime(get_template_directory() . "/Garden/dist/main.css") );

    wp_enqueue_script('garden-script', get_template_directory_uri() . '/Garden/dist/main.js', array(), filemtime(get_template_directory() . "/Garden/dist/main.js"), true);
    wp_localize_script('garden-script', 'myajax', array(
        'url'      => admin_url('admin-ajax.php'),
        'rest_url' => get_rest_url(null, 'goods/'),
    ));
    

}
add_action( 'wp_enqueue_scripts', 'garden_scripts' );



add_action('rest_api_init', function () {
    register_rest_route('goods', '/parse', array(
        'methods' => 'GET',
        'callback' => 'parse_goods',
    ));
    register_rest_route('goods', '/parse_url', array(
        'methods' => 'GET',
        'callback' => 'parse_goods_url',
    ));
        register_rest_route('goods', '/parse_news', array(
        'methods' => 'GET',
        'callback' => 'parse_news',
    ));
	     register_rest_route('goods', '/reindex', array(
        'methods' => 'GET',
        'callback' => 'reindex',
    ));
       register_rest_route('goods', '/test', array(
        'methods' => 'GET',
        'callback' => 'test_func',
    ));
	register_rest_route('posts', '/parse_posts', array(
        'methods' => 'POST',
        'callback' => 'parse_posts',
    ));
    register_rest_route('goods', '/assign_subcategories', array(
        'methods' => 'GET',
        'callback' => 'assign_subcategories',
        'permission_callback' => '__return_true',
    ));
    register_rest_route('goods', '/subcategories', array(
        'methods' => 'GET',
        'callback' => 'get_subcategories_for_category',
        'permission_callback' => '__return_true',
    ));
});

function reindex() {
	global $wpfts_core;
	$wpfts_core->IndexerStart();
	if (!$wpfts_core) {
		echo "false";
		exit();
	} 
	echo "true";
//	$wpfts_core->installCronIndexerTask();
}

function test_func() {
     $args = [
        'post_type'      => 'product',
        'posts_per_page' => -1,
    ];

    $posts = get_posts($args);

    foreach($posts as $post) {
        if (empty(get_field('рейтинг', $post->ID))) {
             update_field('рейтинг', 5, $post->ID);
        }
    }
}




function parse_goods()
{
  
require_once ABSPATH . 'wp-admin/includes/media.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/image.php';

$product_cat = 40;
$puthUpload = wp_upload_dir();
$xml = new XMLReader();
$xml->open("https://www.nikitagolubeva.ru/system/company_yml_export/000/078/046.xml");

while ($xml->read() && $xml->name !== 'category') {
}

$tags = array();

do {
    if ($xml->name === 'category' && $xml->nodeType == 1) {
        $element = new SimpleXMLElement($xml->readOuterXML());
        $id = (int)$element->attributes()->id;
        if (isset($element[0])) {
            $tags[$id] = (string)$element[0];
        }
        unset($element);
    } else if ($xml->name === "offer" && $xml->nodeType == 1) {
        $element = new SimpleXMLElement($xml->readOuterXML());

//        $good = [
//            "price" => (double)$element->price,
//            "title" => (string)$element->name,
//            "desc" => (string)$element->description,
//            "available" => (string)$element->attributes()->available === "true",
//            "tag" => (int)$element->categoryId,
//            "vendorCode" => (string)$element->vendorCode,
//            "prictures" => (array)$element->picture
//        ];

        $postdata = array(
            'post_author' => 1,
            'post_content' => (string)$element->description,
            'post_status' => "draft",
            'post_title' => (string)$element->name,
            'post_type' => "product",
            'meta_input' => [
                '_visibility' => 'visible',
                '_stock_status' => ((string)$element->attributes()->available === "true") ? "instock" : "outofstock",
                '_regular_price' => (double)$element->price,
                '_sku' => (string)$element->vendorCode,
                "id_old" =>  (string)$element->attributes()->id
            ]
        );
        $post_id = wp_insert_post($postdata);

        wp_set_object_terms($post_id, $tags[(int)$element->categoryId], 'product_tag');
        wp_set_object_terms($post_id, $product_cat, 'product_cat');

        foreach ((array)$element->picture as $key => $Item) {
            $thumbid = media_sideload_image($Item, $post_id, $desc = null, $return = 'id');
            if ($key == 0) {
                set_post_thumbnail($post_id, $thumbid);
            }
            $imgID[$key] = $thumbid;
        }
        update_post_meta($post_id, '_product_image_gallery', implode(", ", $imgID));

        unset($element);
    }
} while ($xml->read());

//while($xml->name === "offer") {
//    echo "asd";
//
//    $xml->next('offer');
//    unset($element);
//}


//print_r($goods);

$xml->close();
   
}



function parse_goods_url()
{
  global $post;
$xml = new XMLReader();
$xml->open(get_template_directory_uri() . "/test.xml");

while ($xml->read() && $xml->name !== 'offer') {
}


do {
     if ($xml->name === "offer" && $xml->nodeType == 1) {
        $element = new SimpleXMLElement($xml->readOuterXML());
        $oldId = (string)$element->attributes()->id;
        $pos = (string)$element->url;
        $url = substr($pos, 36);
        
      //  echo $url . "\n";
        $args = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'meta_key' => 'id_old', //Your Custom field name
            'meta_value' => $oldId, //Custom field value
            'meta_compare' => '='
        );
        
        
        $the_query = new WP_Query( $args );
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) :
                $the_query->the_post();
                 $my_post = [
                	'id' => $post->ID,
                	'post_name' => $url,
                ];
        
                wp_update_post( wp_slash( $my_post ) );
                break;
            endwhile;
        endif;
        
        unset($element);
        //break;
    }
} while ($xml->read());
$xml->close();
 
}


add_action('wp_ajax_nopriv_get_goods_pages', 'get_goods_pages');
add_action('wp_ajax_get_goods_pages', 'get_goods_pages');
function get_goods_pages()
{
    $subcategory = !empty($_POST['subcategory']) ? sanitize_text_field($_POST['subcategory']) : '';

    if (!empty($_POST['category']) && $_POST['category'] !== "none") {
        $cat = $_POST['category'];
        $args = array(
            "post_type"      => "product",
            "post_status"    => "publish",
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => $cat,
                    'operator' => 'IN',
                )
            ),
            "posts_per_page" => -1,
        );
        if ($subcategory !== '') {
            $args['meta_query'] = array(
                array(
                    'key'     => 'подкатегория',
                    'value'   => $subcategory,
                    'compare' => '=',
                )
            );
        }
        $query = new WP_Query($args);
        $count = ceil($query->post_count / 12);
    } else {
        if ($subcategory !== '') {
            $query = new WP_Query(array(
                "post_type"      => "product",
                "post_status"    => "publish",
                "posts_per_page" => -1,
                'meta_query'     => array(
                    array(
                        'key'     => 'подкатегория',
                        'value'   => $subcategory,
                        'compare' => '=',
                    )
                ),
            ));
            $count = ceil($query->post_count / 12);
        } else {
            $count = wp_count_posts("product")->publish / 12;
        }
    }
    echo json_encode(["status" => "ok", "pages" => $count]);
    wp_die();
}


add_action('wp_ajax_nopriv_get_goods', 'get_goods');
add_action('wp_ajax_get_goods', 'get_goods');
function get_goods()
{
    $page        = $_POST['page'];
    $subcategory = !empty($_POST['subcategory']) ? sanitize_text_field($_POST['subcategory']) : '';

    if (!empty($_POST['category']) && $_POST['category'] !== "none") {
        $cat  = $_POST['category'];
        $args = array(
            "post_type"      => "product",
            "post_status"    => "publish",
            'tax_query'      => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => $cat,
                    'operator' => 'IN',
                )
            ),
            "posts_per_page" => 12,
            "paged"          => $page,
            "orderby"        => "title",
            "order"          => "ASC",
        );
        if ($subcategory !== '') {
            $args['meta_query'] = array(
                array(
                    'key'     => 'подкатегория',
                    'value'   => $subcategory,
                    'compare' => '=',
                )
            );
        }
    } else {
        $cat  = -1;
        $args = array(
            "post_type"      => "product",
            "posts_per_page" => 12,
            "paged"          => $page,
            "post_status"    => "publish",
            "orderby"        => "title",
            "order"          => "ASC",
        );
        if ($subcategory !== '') {
            $args['meta_query'] = array(
                array(
                    'key'     => 'подкатегория',
                    'value'   => $subcategory,
                    'compare' => '=',
                )
            );
        }
    }
    
    if ($_POST['sort'] == "popularity") {
        $args['meta_key'] = "total_sales";
        $args['orderby'] = "meta_value_num";
        $args['order'] = "DESC";
    } else if ($_POST['sort'] == "rating") {
        $args['meta_key'] = "рейтинг";
        $args['orderby'] = "meta_value";
        $args['order'] = "ASC";
    } else if ($_POST['sort'] == "price_top") {
       $args['meta_key'] = "_price";
        $args['orderby'] = "meta_value_num";
        $args['order'] = "DESC";
    } else if ($_POST['sort'] == "price_bottom") {
        $args['meta_key'] = "_price";
        $args['orderby'] = "meta_value_num";
        $args['order'] = "ASC";
    } else if ($_POST['sort'] =="update") {
        $args['orderby'] = 'post_date';
        $args['order'] = "DESC";
    }
    
       
    
   // print_r($args);
    
   
    
     $query = new WP_Query($args);
        $result = [];
        global $product;
        global $post;
        while ($query->have_posts()) {
            $query->the_post();
            $product = wc_get_product($post->ID);
            $good = [];
            $good['id'] = $post->ID;
            $good['name'] = get_the_title();
            $good['price'] =  $product->get_price();
            $good['link'] = get_the_permalink();
            $good['img'] = get_the_post_thumbnail_url();
            if ($product->is_on_backorder()) {
                $status = "Предзаказ";
            } else if ($product->is_in_stock()) {
                $status = "В наличии";
            } else  {
                $status = "Нет в наличии";
            }
            $good['status'] = $status;
            $good['images'] = [];
            $attachment_ids = $product->get_gallery_image_ids();
            foreach( $attachment_ids as $attachment_id )
            {
              $good['images'][] = wp_get_attachment_url( $attachment_id );
            }
            $good['category'] = get_the_terms($product->ID, 'product_cat')[0]->name;
            $good['articul'] = $product->get_sku();
            $good['subgrade'] = get_field('подсорт',$product->ID);
            $good['old_price'] = $product->get_regular_price();
            $good['rating'] = get_field('рейтинг', $product->ID);
            $regular_price = (float) $product->get_regular_price();
            $sale_price = (float) $product->get_price();
            $precision = 1;
            $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 0);
            $good['discount'] = $saving_percentage;
            $good['zone'] = get_field('зона', $product->ID);
            $good['variations'] = [[
                "link" => get_the_permalink(),
                "name" => get_field('контейнер',  $product->ID),
                "price" => $product->get_price()
                ]];
            $variations = get_field('вариации');
            if (!empty($variations)) {
                foreach($variations as $variation) {
                    $pr = new WC_Product($variation->ID);
                    $var = [
                        "link" => get_the_permalink($variation->ID),
                        "name" => get_field('контейнер', $variation->ID),
                        "price" => $pr->get_price()
                        ];
                    $good['variations'][] = $var;
                }
            }
            $good['cult_icons'] = get_field("особенности_культивирования", $product->ID);
            $good['decor_icons'] = get_field("декоративность", $product->ID);
            $good['use_icons'] = get_field("использование", $product->ID);
            $result[] = $good;
        }
  
        $response = ["status" => "ok", "goods" => $result];
        echo json_encode($response);
        die();
}

add_action('wp_ajax_nopriv_get_favorite_goods', 'get_favorite_goods');
add_action('wp_ajax_get_favorite_goods', 'get_favorite_goods');
function get_favorite_goods(){
    $fav = get_user_meta(get_current_user_id(), 'favorite', true);
    $res = [];
    if (!empty($fav)) {
        $res  = $fav;
    }
    $result = ["favoriteGoodsArr" => $res ];
    echo json_encode($result);
    wp_die();
}

add_action('wp_ajax_nopriv_remove_from_favorite', 'remove_from_favorite');
add_action('wp_ajax_remove_from_favorite', 'remove_from_favorite');
function remove_from_favorite(){
   if (!is_user_logged_in()) {
        $response = ["status" => "ok"];
        echo json_encode($response);
        die();
    }
    $fav = get_user_meta(get_current_user_id(), 'favorite', true);
    if (!empty($fav)){
        $i = array_search((int)$_POST['id'],$fav);
        if ($i >= 0) {
            $favN = [];
            foreach($fav as $f) {
                if ($f != (int)$_POST['id']) {
                    $favN[] = $f;
                }
            }
            $fav = $favN;
        }
        update_user_meta(get_current_user_id(), 'favorite', $fav);
    }
    $response = ["status" => "ok"];
    echo json_encode($response);
    die();

}
add_action('wp_ajax_nopriv_add_to_favorite', 'add_to_favorite');
add_action('wp_ajax_add_to_favorite', 'add_to_favorite');
function add_to_favorite(){
    if (!is_user_logged_in()) {
        $response = ["status" => "ok"];
        echo json_encode($response);
        die();
    }
    $fav = get_user_meta(get_current_user_id(), 'favorite', true);
    if (empty($fav)) {
        $fav = [];
    }
    if (array_search((int)$_POST['id'],$fav)) {
        $response = ["status" => "ok"];
        echo json_encode($response);
        die();
    }
    $fav[] = (int)$_POST['id'];
    update_user_meta(get_current_user_id(), 'favorite', $fav);
    $response = ["status" => "ok"];
    echo json_encode($response);
    die();
    
}



include_once 'simplehtmldom/HtmlWeb.php';
include_once 'simplehtmldom/simple_html_dom.php';

use simplehtmldom\HtmlWeb;


function parse_news()
{
    
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'nikitagolubeva.ru/articles',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => [
      'User-Agent: PostmanRuntime/7.29.0',
      'Accept: */*',
      'Accept-Encoding: gzip, deflate, br',
      'Connection: keep-alive'
      ]
));

$response = curl_exec($curl);

curl_close($curl);
    //$html = $client->load('https://nikitagolubeva.ru/articles/');
    $html = str_get_html($response);
    $links = $html->find('.company-info-section-items__title-link');
    print_r($response);
    foreach($links as $link) {
        
        
       $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => $link->href,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        //$str = iconv("Windows-1251", "UTF-8", $str);
        $html2 = str_get_html($response);//$client2->load('https://www.kinonews.ru' . $link->href);
        $title = $html2->find('.company-header-title', 0)->innertext;
        $content = $html2->find('.company-info-section__content', 0)->innertext;
        
        
        $images = $html2->find('.company-info-section__miniatures-item');
    
        $post_data = array(
            'post_title' => $title,
            'post_content' => $content,
            'post_status' => 'publish',
            'post_author' => 1
        );
    
        $post_id = wp_insert_post($post_data);
    
        include_once(ABSPATH . 'wp-admin/includes/image.php');
         
        foreach ($images as $key => $Item) {
            $thumbid = media_sideload_image($Item->attr['data-preview'], $post_id, $desc = null, $return = 'id');
            if ($key == 0) {
                set_post_thumbnail($post_id, $thumbid);
            }
        }
            
    }
   
}

add_action('wp_ajax_nopriv_get_added_goods', 'get_added_goods');
add_action('wp_ajax_get_added_goods', 'get_added_goods');
function get_added_goods()
{

    $products = [];
    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        $current = array();
        $cid = $cart_item['data'];
        $image = wp_get_attachment_image_url(get_post_thumbnail_id($cid->get_id()), 'full');
        $current['img'] = $image;
        $current['title'] = $cid->get_name();
        $current['price'] = (double)$cid->get_price();
        $current['id'] = $cid->get_id();
        $current['amount'] = $cart_item['quantity'];
        $products[] = $current;
    }

    $result = ["addedGoodsArr" => $products];
    echo json_encode($result);
    wp_die();
}

add_action('wp_ajax_nopriv_feedback', 'send_feedback');
add_action('wp_ajax_feedback', 'send_feedback');
function send_feedback(){
    date_default_timezone_set('Europe/Moscow');
    $date = date('H:i:s d.m.Y', time());
    $phone =  $_POST['feedback-phone'];
    $mail = $_POST['feedback-email'];
    
    if (empty($mail) || empty($phone)) {
        $result = ["status" => "ok"];
        echo json_encode($result);
        wp_die();
    }
    
    
    $message = "Получена новая заявка на консультацию $date\nТелефон: $phone\nE-mail: $mail";
    $headers = "Content-type: text/plain; charset=\"utf-8\"\n From: Site <info@nikitagolubeva.ru>\r\n";
    wp_mail( "nikitagolubeva@mail.ru", "Новая заявка", $message, $headers );
    
    $result = ["status" => "ok"];
    echo json_encode($result);
    wp_die();
}

add_action('wp_ajax_nopriv_quiz', 'send_quiz');
add_action('wp_ajax_quiz', 'send_quiz');
function send_quiz(){
    $name= $_POST['name'] ;
    $email = $_POST['email'];
    $phone = $_POST['telephone'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $size = $_POST['size'];
    $desc = $_POST['description'];
    $pack = $_POST['pack'];
    $service =$_POST['service'];
    date_default_timezone_set('Europe/Moscow');
    $date = date('H:i:s d.m.Y', time());
    $message =  "Получена новая заявка на расчет стоимости $date\nУслуга: $service\nПакет проектирование: $pack\nРазмер участка: $size\nПредполагаемый объем работ: $desc\nСрок: $date\nАдрес: $address\nИмя: $name \nEmail: $email \nТелефон: $phone\n";
    $headers = "Content-type: text/plain; charset=\"utf-8\"; From: Site <info@nikitagolubeva.ru>";
    wp_mail( "nikitagolubeva@mail.ru", "Заявка на расчет", $message, $headers );
    
    $result = ["status" => "ok"];
    echo json_encode($result);
    wp_die();
}


add_action('wp_ajax_set_quantity', 'set_quantity_func');
add_action('wp_ajax_nopriv_set_quantity', 'set_quantity_func');
function set_quantity_func()
{
  
      
  if (!isset($_POST['id']) || !isset($_POST['quantity'])) {
        wp_die();
    }
    $id = $_POST['id'];
    $quantity = (int)$_POST['quantity'];
    if ($quantity < 0) {
        wp_die();
    }
    $cart = WC()->instance()->cart;
    $product_cart_id = $cart->generate_cart_id($id);
    $cart_item_key = $cart->find_product_in_cart($product_cart_id);
    
    if (!$cart_item_key) {
       
        $res = $cart->add_to_cart($id);
        $cart_item_key = $cart->find_product_in_cart($product_cart_id);
        
    }
    if ( $cart->get_cart_item( $cart_item_key ) ) {
        $cart->set_quantity( $cart_item_key, $quantity );
    }

   // $cart->set_quantity($cart_item_key, $quantity);
    $result = ["status" => "ok", "price" => (int)$cart->total];
    echo json_encode($result);
    wp_die();
    
}


add_action('wp_ajax_remove_product', 'remove_product_func');
add_action('wp_ajax_nopriv_remove_product', 'remove_product_func');
function remove_product_func()
{
    if (!isset($_POST['id'])) {
        wp_die();
    }
    $id = $_POST['id'];
    global $woocommerce;
    $cart = $woocommerce->cart;
    $product_cart_id = $cart->generate_cart_id($id);
    $cart_item_key = $cart->find_product_in_cart($product_cart_id);
    if ($cart_item_key) WC()->cart->remove_cart_item($cart_item_key);
    
    wp_die();
}


add_action('wp_ajax_order', 'create_order');
add_action('wp_ajax_nopriv_order', 'create_order');
function create_order()
{
    $cart = WC()->instance()->cart;

    if (!$cart) {
        echo "null cart";
        return;
    }
    $checkout = WC()->checkout();
    if (!$checkout) {
        echo "null checkout";
        return;
    }
    $order_id = $checkout->create_order(array());

    $order = wc_get_order($order_id);
    if (!$order) {
        echo "error";
        wp_die();
    }

    $order->set_billing_phone(get_format_phone($_POST['phone']));
    $order->set_billing_first_name($_POST['name']);
    $order->set_billing_email($_POST['email']);

    $delivery = $_POST['delivery'];
    if ($delivery == "address_delivery") {
        $address = "Доставка до: " . $_POST['address'];
    } else {
        $address = "Самовывоз " . $_POST["pickup"];
    }
    
    switch($_POST['payment']) {
        case "transfer" : $payment="Перевод на карту"; break;
        case "credit-card": $payment="Картой при получении"; break;
        case "cash": $payment="Наличными при получении"; break;
    }
    $order->set_customer_note($address . "; " . $payment . "; Комментарий: " . $_POST['comment']);

    $order->set_shipping_address_1($address);
    $order->set_billing_address_1($address);
   // $order->update_status('wc-pending');
    $order->save();
    $order->save_meta_data();
    $order->calculate_totals();
    $cart->empty_cart();
    WC()->mailer()->get_emails()['WC_Email_New_Order']->trigger( $order_id );
	WC()->mailer()->get_emails()['WC_Email_Customer_Processing_Order']->trigger( $order_id );
    $result = ["status"=>"ok", "order_id"=>$order->ID];
    echo json_encode($result);
    wp_die();
}

function get_format_phone($phone)
{
    $format_phone = str_replace("-", "", $phone);
    $format_phone = str_replace("(", "", $format_phone);
    $format_phone = str_replace(")", "", $format_phone);
    $format_phone = str_replace("+", "", $format_phone);
    $format_phone = str_replace(" ", "", $format_phone);

    return $format_phone;
}



add_action('wp_ajax_nopriv_search_goods', 'search_goods');
add_action('wp_ajax_search_goods', 'search_goods');
function search_goods() {
    $page = $_POST['page'];
    $s = $_POST['search_value'];
    $args = array("post_type" => "product", "s" => strtolower($s), "paged" => $page, "posts_per_page" => 12,
      "post_status" => "publish", "cluster_weights" => array("post_content" => 0, "post_title" => 100), "wpfts_disable" => 0, "wpfts_is_force" => 1 ,"wpfts_is_show_score" => 1 );
       
     if ($_POST['sort'] == "popularity") {
        $args['meta_key'] = "total_sales";
        $args['orderby'] = "meta_value_num";
        $args['order'] = "DESC";
    } else if ($_POST['sort'] == "rating") {
        $args['meta_key'] = "рейтинг";
        $args['orderby'] = "meta_value";
        $args['order'] = "ASC";
    } else if ($_POST['sort'] == "price_top") {
       $args['meta_key'] = "_price";
        $args['orderby'] = "meta_value_num";
        $args['order'] = "DESC";
    } else if ($_POST['sort'] == "price_bottom") {
        $args['meta_key'] = "_price";
        $args['orderby'] = "meta_value_num";
        $args['order'] = "ASC";
    } else if ($_POST['sort'] =="update") {
        $args['orderby'] = 'post_date';
        $args['order'] = "DESC";
    }
    
       
    $result = [];
        global $product;
        global $post;
        $query = new WP_Query($args);
      //print_r($query);
        while ($query->have_posts()) {
            $query->the_post();
            if ($post->relev < 50) {
                continue;
            }
            $product = wc_get_product($post->ID);
            $good = [];
            $good['id'] = $post->ID;
            $good['name'] = get_the_title();
            $good['price'] = $product->get_price();
            $good['link'] = get_the_permalink();
            $good['img'] = get_the_post_thumbnail_url();
            if ($product->is_on_backorder()) {
                $status = "Предзаказ";
            } else if ($product->is_in_stock()) {
                $status = "В наличии";
            } else  {
                $status = "Нет в наличии";
            }
            $good['status'] = $status;
             $good['images'] = [];
            $attachment_ids = $product->get_gallery_image_ids();
            foreach( $attachment_ids as $attachment_id )
            {
              $good['images'][] = wp_get_attachment_url( $attachment_id );
            }
            $good['category'] = get_the_terms($product->get_id(), 'product_cat')[0]->name;
            $good['articul'] = $product->get_sku();
            $good['old_price'] = $product->get_regular_price();
            $good['rating'] = get_field('рейтинг', $product->get_id());
            $regular_price = (float) $product->get_regular_price();
            $sale_price = (float) $product->get_price();
            $precision = 1;
            $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 0);
            $good['discount'] = $saving_percentage;
            $good['subgrade'] = get_field('подсорт',$product->get_id());
            $good['zone'] = get_field('зона', $product->get_id());
            $good['variations'] = [[
                "link" => get_the_permalink(),
                "name" => get_field('контейнер',  $product->get_id()),
                "price" => $product->get_price()
                ]];
            $variations = get_field('вариации');
            if (!empty($variations)) {
                foreach($variations as $variation) {
                    $pr = new WC_Product($variation->ID);
                    $var = [
                        "link" => get_the_permalink($variation->ID),
                        "name" => get_field('контейнер', $variation->ID),
                        "price" => $pr->get_price()
                        ];
                    $good['variations'][] = $var;
                }
            }
            $good['cult_icons'] = get_field("особенности_культивирования", $product->get_id());
            $good['decor_icons'] = get_field("декоративность", $product->get_id());
            $good['use_icons'] = get_field("использование", $product->get_id());
            $result[] = $good;
        }
  
        $response = ["status" => "ok", "goods" => $result];
        echo json_encode($response);
        die();
}

add_action('wp_ajax_nopriv_get_search_pages', 'get_search_pages');
add_action('wp_ajax_get_search_pages', 'get_search_pages');
function get_search_pages()
{
    $s = $_POST['search_value'];
    $args = array("post_type" => "product", "s" => $s, "posts_per_page" => -1,"post_status" => "publish","cluster_weights" => array("post_content" => 0, "post_title" => 100), "wpfts_disable" => 0, "wpfts_is_force" => 1 ,"wpfts_is_show_score" => 1);
    $query = new WP_Query($args);
    $i = 0;
    global $post;
         while ($query->have_posts()) {
            $query->the_post();
            if ($post->relev < 50) {
                continue;
            }
            $i++;
         }
    $count = $i / 12; //ceil($query->post_count / 12);
    echo json_encode(["status" => "ok", "pages" => $count]);
    wp_die();
}


add_action('wp_ajax_nopriv_is_user_authorized', 'is_user_authorized');
add_action('wp_ajax_is_user_authorized', 'is_user_authorized');
function is_user_authorized()
{
    $res = array("status" => "ok");
    if (is_user_logged_in()) {
        $res["authorized"] = true;
    } else {
        $res["authorized"] = false;
    }
    echo json_encode($res);
    die();
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}


add_action('wp_ajax_nopriv_get_blogs', 'get_blogs');
add_action('wp_ajax_get_blogs', 'get_blogs');
function get_blogs() {
    $pageSize = $_POST['items_per_page'];
    $page = $_POST['page'];
     
    $query = new WP_Query(["post_type" => "post",
      "post_status" => "publish", "posts_per_page" => "-1"]);
    $count = ceil($query->post_count / $pageSize);

    $args = ["post_type" => "post", "posts_per_page" => $pageSize, "paged" => $page,  "post_status" => "publish", 'orderby'   => array('date' =>'DESC',  'menu_order'=>'DESC')];
    $query = new WP_Query($args);
    global $post;
    while ($query->have_posts()) {
        $query->the_post();
        $news = [];
        $news["dataCategory"] = $filter;
        $news["name"] = get_the_title();
        $news["text"] = get_the_excerpt();
        $has_thumbnail = has_post_thumbnail();
        $thumbimg = get_the_post_thumbnail_url($post->ID, 'full');
        if (!$has_thumbnail) {
            $attachments = get_posts(array(
                'post_type' => 'attachment',
                'posts_per_page' => 1,
                'post_parent' => $post->ID,
                'exclude' => get_post_thumbnail_id()
            ));

            if ($attachments) {
                foreach ($attachments as $attachment) {
                    $thumbimg = wp_get_attachment_url($attachment->ID);
                    $has_thumbnail = true;
                }
            } else {
                $has_thumbnail = false;
            }
        }
        $news["image"] = $thumbimg;
        if (!$has_thumbnail) {
            $news["image"] = null;
        }
        $category_detail = get_the_category($post->ID);
        $cat_name = "";
        foreach ($category_detail as $cd) {
            $cat_name = $cd->name;
            break;
        }
        $news["date"] = date("d.m.Y", strtotime($post->post_date));
        $news["link"] = get_the_permalink();
        $result[] = $news;
    }

    $response = ["status" => "ok", "pages" => $count, "blogs" => $result];
    echo json_encode($response);
    wp_die();
}



add_action('wp_ajax_nopriv_get_blog_pages', 'get_blog_pages');
add_action('wp_ajax_get_blog_pages', 'get_blog_pages');
function get_blog_pages()
{
    $pageSize = $_POST['items_per_page'];
     
    $query = new WP_Query(["post_type" => "post", "posts_per_page" => "-1"]);
    $count = ceil($query->post_count / $pageSize);
     echo json_encode(["status" => "ok", "pages" => $count]);
    wp_die();
}



add_action('wp_ajax_login', 'login');
add_action('wp_ajax_nopriv_login', 'login');
function login()
{
    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    if (empty($email) || empty($password)) {
        echo "{\"status\": \"error\"}";
        exit();
    }

/*    if (is_email($email)) {
        $user = get_user_by('email', $email);
    } else {
        $user = get_user_by('login', $email);
    }

    if (!$user) {
        echo "{\"status\": \"error\"}";
        exit();
    }

    if (!wp_check_password($_POST['login-password'], $user->user_pass, $user->ID)) {
        echo "{\"status\": \"error\"}";
        exit();
    }*/

    $user_signon = wp_signon(array(
        'user_login' => $email,
        'user_password' => $password,
        'remember' => true),
        false );
    if (is_wp_error($user_signon) ){
        echo "{\"status\": \"error\"}";
        die();
    } else {
        echo "{\"status\": \"ok\"}";
        die();
    }
/*    wp_clear_auth_cookie();
    wp_set_current_user($user->ID);
    wp_set_auth_cookie($user->ID);*/
}

add_action('wp_ajax_logout', 'logout');
add_action('wp_ajax_nopriv_logout', 'logout');
function logout(){
    $user_id = get_current_user_id();
    wp_destroy_current_session();
    wp_clear_auth_cookie();
    wp_set_current_user(0);
    do_action('wp_logout', $user_id);
    echo "{\"status\": \"ok\"}";
    die();
}

add_action('wp_ajax_nopriv_registration', 'registration');
add_action('wp_ajax_registration', 'registration');
function registration()
{
    $name = $_POST['registration-name'];
    $email = $_POST['registration-email'];
    $password = $_POST['registration-password'];

    $userdata = [
        'user_login' => $email,
        'nickname' => $email,
        'user_email' => $email,
        'display_name' => $name,
        'first_name' => $name,
        'last_name' => $name,
        'user_pass' => $password,
        'show_admin_bar_front' => 'false',
        'meta_input' => ['fio' => $name],
    ];

    $userId = wp_insert_user($userdata);
    if (!is_wp_error($userId)) {
        $user = get_user_by('email', $email);
        if (!wp_check_password($password, $user->user_pass, $user->ID)) {
            echo "{\"status\": \"error\"}";
            exit();
        }

        $user_signon = wp_signon(array(
            'user_login' => $email,
            'user_password' => $password,
            'remember' => true),
            false );
        if (is_wp_error($user_signon) ){
            echo "{\"status\": \"error\"}";
            die();
        } else {
            echo "{\"status\": \"ok\"}";
            die();
        }
    } else {
        echo "{\"status\": \"error\", \"message\": \"".$userId->get_error_message() ."\"}";
        die();
    }
}

// Change profile data
//add_action('wp_ajax_nopriv_change_profile_data', 'change_profile_data');
//add_action('wp_ajax_change_profile_data', 'change_profile_data');
//function change_profile_data()
//{
//
//    if (!empty($_POST['profile-old-password'])) {
//        $old = $_POST['profile-old-password'];
//        $new = $_POST['profile-new-password'];
//        $user = wp_get_current_user();
//        if (!wp_check_password($old, $user->user_pass, $user->ID)) {
//            echo "{\"status\": \"error\"}";
//            wp_die();
//        }
//
//        $user_id = wp_update_user( [
//        	'ID'       => $user->ID,
//        	'user_pass' => $new
//        ]);
//        echo "{\"status\": \"ok\"}";
//        wp_die();
//    }
//
//    $fio = $_POST['profile-fio'];
//    $email = $_POST['profile-email'];
//    $phone = get_format_phone($_POST['profile-telephone']);
//
//    $user = wp_get_current_user();
//    $id = get_current_user_id();
//    if (get_user_meta($id, "fio", true) != $fio && !empty($fio)) {
//        update_user_meta($id, "fio", $fio);
//    }
//    if ($user->user_email != $email && is_email($email)) {
//        $user->user_email = $email;
//    }
//    if (get_user_meta($id, "phone", true) != $phone && !empty($phone)) {
//        update_user_meta($id, "phone", $phone);
//    }
//    echo "{\"status\": \"ok\"}";
//    die();
//}

add_action('wp_ajax_nopriv_account_data_change', 'account_data_change');
add_action('wp_ajax_account_data_change', 'account_data_change');
function account_data_change(){
    if(empty($_POST["account-name"]) || empty($_POST["account-phone"])){
        echo "{\"status\": \"error\", \"message\": \"invalid request data\"}";
        die();
    }

    $name = $_POST["account-name"];
    $phone = $_POST["account-phone"];

    update_account_data($phone, $name, NULL);

    echo "{\"status\": \"ok\"}";
    die();
}

add_action('wp_ajax_nopriv_account_data_change_with_code', 'account_data_change_with_code');
add_action('wp_ajax_account_data_change_with_code', 'account_data_change_with_code');
function account_data_change_with_code(){
    if(empty($_POST["name"]) ||
        empty($_POST["telephone"]) ||
        empty($_POST["email"]) ||
        empty($_POST["code"])){
        echo "{\"status\": \"error\", \"message\": \"invalid request data\"}";
        die();
    }

    $email = $_POST["email"];
    if(!verify_code($_POST["code"])){
        echo "{\"status\": \"error\", \"message\": \"invalid code\"}";
        die();
    }

    $name = $_POST["name"];
    $phone = $_POST["telephone"];

    update_account_data($phone, $name, $email);

    echo "{\"status\": \"ok\"}";
    die();
}

add_action('wp_ajax_nopriv_send_email_code', 'send_email_code');
add_action('wp_ajax_send_email_code', 'send_email_code');
function send_email_code(){
    session_start();
    $email = $_POST["registration-email"];
    if (empty($email)) {
        $email = $_POST["email"];
        if (empty($email)) {
            $email = $_POST["registation-email"];
            if(empty($email)){
                echo "{\"status\": \"error\", \"message\": \"no email given\"}";
                die();
            }
        }
    }
    $user = get_user_by('email', $email);
    if ($user) {
         echo "{\"status\": \"error\", \"message\": \"user already exists\"}";
        die();
    }
    $_SESSION["code"] = wp_rand(1000, 9999);
    $headers = 'From: Садовый центр Никиты Голубевой <info@nikitagolubeva.ru>' . "\r\n";
    wp_mail($email, "Код восстановления пароля", $_SESSION["code"], $headers);
    echo "{\"status\": \"ok\", \"code\": " . $_SESSION["code"] . "}";
    exit();
}


add_action('wp_ajax_nopriv_send_recovery_code', 'send_recovery_code');
add_action('wp_ajax_send_recovery_code', 'send_recovery_code');
function send_recovery_code(){
    session_start();
    $email = $_POST["recovery-email"];
    if (empty($email)) {
        $email = $_POST["email"];
        if (empty($email)) {
            $email = $_POST["registation-email"];
            if(empty($email)){
                echo "{\"status\": \"error\", \"message\": \"no email given\"}";
                die();
            }
        }
    }
    $user = get_user_by('email', $email);
    if (!$user) {
         echo "{\"status\": \"error\", \"message\": \"user not found\"}";
        die();
    }
    $_SESSION["code"] = wp_rand(1000, 9999);
    $headers = 'From: Садовый центр Никиты Голубевой <info@nikitagolubeva.ru>' . "\r\n";
    wp_mail($email, "Код восстановления пароля", $_SESSION["code"], $headers);
    echo "{\"status\": \"ok\", \"code\": " . $_SESSION["code"] . "}";
    exit();
}

add_action('wp_ajax_nopriv_check_code', 'check_code');
add_action('wp_ajax_check_code', 'check_code');
function check_code(){
    if(!isset($_POST["code"]) || !isset($_POST["email"]))
    {
        echo "{\"status\": \"error\", \"message\": \"invalid form data\"}";
        die();
    }

    if(!verify_code($_POST["code"], $_POST["email"])){
        echo "{\"status\": \"error\", \"message\": \"invalid code\"}";
        die();
    }

    echo "{\"status\": \"ok\"}";
    die();
}

add_action('wp_ajax_change_user_password', 'change_user_password');
function change_user_password(){
    $user = wp_get_current_user();
    $new_password = sanitize_text_field($_POST['new_password']);
    $old_password = sanitize_text_field($_POST['old_password']);

    if (!wp_check_password($old_password, $user->user_pass, $user->ID)) {
        echo "{\"status\": \"error\", \"message\": \"invalid password\"}";
        exit();
    }

    $userdata = array(
        'ID'        =>  $user->ID,
        'user_pass' =>  $new_password
    );
    $user_id = wp_update_user($userdata);

    if($user_id == $user->ID){
        update_user_meta($user->ID, 'ngp_changepass_status', 1);
        echo "{\"status\": \"ok\"}";
        die();
    } else {
        echo "{\"status\": \"error\", \"message\": \"error\"}";
        die();
    }
}

add_action('wp_ajax_nopriv_recovery', 'recovery');
add_action('wp_ajax_recovery', 'recovery');
function recovery(){
    $email = sanitize_text_field($_POST['recovery-email']);
    $new_password = sanitize_text_field($_POST['recovery-password']);
    $user = get_user_by('email', $email);

    $userdata = array(
        'ID'        =>  $user->ID,
        'user_pass' =>  $new_password
    );
    $user_id = wp_update_user($userdata);

    if($user_id == $user->ID){
        update_user_meta($user->ID, 'ngp_changepass_status', 1);
    } else {
        echo "{\"status\": \"error\", \"message\": \"error\"}";
        die();
    }

    $user_signon = wp_signon(array(
        'user_login' => $email,
        'user_password' => $new_password,
        'remember' => true),
        false );
    if (is_wp_error($user_signon) ){
        echo "{\"status\": \"error\"}";
        die();
    } else {
        echo "{\"status\": \"ok\"}";
        die();
    }
}


// Utils
function verify_code($code)
{
    session_start();
    if (!isset($_SESSION["code"]) ||
        $code != $_SESSION["code"])
    {
        return false;
    }
    return true;
}

function update_account_data($phone, $name, $email){
    $id = get_current_user_id();

    if (get_user_meta($id, "fio", true) != $name) {
        update_user_meta($id, "fio", $name);
        wp_update_user(array(
            'ID'            => $id,
            'display_name' => $name,
            'first_name' => $name,
            'last_name' => $name,
        ));
    }

    if (get_user_meta($id, "phone", true) != $phone) {
        update_user_meta($id, "phone", $phone);
    }

    if(!is_null($email) || !is_email($email)){
        wp_update_user(array(
            'ID'            => $id,
            'user_email'    => $email,
            'user_login' => $email,
            'nickname' => $email
        ));
    }
}


/*
function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
    if(empty($search)) {
        return $search; // skip processing - no search term in query
    }
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? ' ' : '%';

    $search =
    $searchand = '';
    foreach ((array)$q['search_terms'] as $term) {
        $term = esc_sql($wpdb->esc_like($term));
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter('posts_search', '__search_by_title_only', 500, 2);*/


add_action( 'init', 'misha_register_awaiting_shipping_status' );

function misha_register_awaiting_shipping_status() {

	register_post_status(
		'wc-new-order',
		array(
			'label'		=> 'Обработка',
			'public'	=> true,
			'show_in_admin_status_list' => true,
			'label_count'	=> _n_noop( 'Обработка (%s)', 'Обработка (%s)' )
		)
	);

}

// Add registered status to list of WC Order statuses
add_filter( 'wc_order_statuses', 'misha_add_status_to_list' );

/*function misha_add_status_to_list( $order_statuses ) {

	$order_statuses[ 'wc-new-order' ] = 'Новый заказ';
	return $order_statuses;

}*/

function misha_add_status_to_list( $order_statuses ) {

	$new = array();

	foreach ( $order_statuses as $id => $label ) {
		
		if ( 'wc-pending' === $id ) { // before "Completed" status
			$new[$id] = 'Новый заказ';
			$new[ 'wc-new-order' ] = 'Обработка';
		} else if ('wc-processing' == $id) {
		    $new[$id] = 'Ожидает оплаты';
		} else {
		    $new[ $id ] = $label;
        }
	}

	return $new;
	
}


function parse_posts() {


if (!isset($_REQUEST)) {
    return;
}

//Строка для подтверждения адреса сервера из настроек Callback API
$confirmation_token = '082390fe';

//Получаем и декодируем уведомление
$data = json_decode(file_get_contents('php://input'));

//Проверяем, что находится в поле "type"
switch ($data->type) {
    //Если это уведомление для подтверждения адреса сервера...
    case 'confirmation':
        //...отправляем строку для подтверждения адреса
        echo $confirmation_token;
        break;

    //Если это уведомление о новом посте...
    case 'wall_post_new':
        //...получаем текст поста
        $post_text = $data->object->text;
        error_log(print_r($data,true));
        //...получаем вложения поста
        $post_attachments = $data->object->attachments; //Является массивом, обходится форичем

        //...мы получили минимум необходимых данных (можно получить и авторство и прочие данные, подробнее https://vk.com/dev/objects/post )
        //...после этого мы обращаемся к Wordpress API, метод wp_insert_post
    $post_data = array(
        'post_title' => mb_strimwidth($post_text, 0, 60, '...'),
        'post_content' => $post_text,
        'post_status' => 'publish',
        'post_author' => 1
    );

    $post_id = wp_insert_post($post_data);
    
    include_once(ABSPATH . 'wp-admin/includes/image.php');
    $imageurl = $post_attachments[0]->photo->orig_photo->url;
    if (!empty($imageurl)) {
        $array = explode('/', getimagesize($imageurl)['mime']);   
        $imagetype = end($array);
        $uniq_name = date('dmY') . '' . (int)microtime(true);
        $filename = $uniq_name . '.' . $imagetype;
        $uploaddir = wp_upload_dir();
        $uploadfile = $uploaddir['path'] . '/' . $filename;
        $contents = file_get_contents($imageurl);
        $savefile = fopen($uploadfile, 'w');
        fwrite($savefile, $contents);
        fclose($savefile);
        $wp_filetype = wp_check_filetype(basename($filename), null);
        $attachment = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => $filename,
            'post_content' => '',
            'post_status' => 'inherit'
        );            
        $attach_id = wp_insert_attachment($attachment, $uploadfile);
        $imagenew = get_post($attach_id);
        $fullsizepath = get_attached_file($imagenew->ID);
        $attach_data = wp_generate_attachment_metadata($attach_id, $fullsizepath);
        wp_update_attachment_metadata($attach_id, $attach_data);
    
        set_post_thumbnail($post_id, $attach_id);
    }
    

        //Возвращаем "ok" серверу Callback API. Обязательно! Требование вк.
        echo('ok');
        break;
}
}

// -------------------------------------------------------
// ACF: register подкатегория and тип fields for product group
// -------------------------------------------------------
add_action('acf/init', function() {
    if (!function_exists('acf_add_local_field')) return;
    acf_add_local_field(array(
        'key'               => 'field_подкатегория',
        'label'             => 'Подкатегория',
        'name'              => 'подкатегория',
        'type'              => 'text',
        'parent'            => 'group_648edb7872018',
        'instructions'      => '',
        'required'          => 0,
        'wrapper'           => array('width' => '', 'class' => '', 'id' => ''),
    ));
    acf_add_local_field(array(
        'key'               => 'field_тип',
        'label'             => 'Тип',
        'name'              => 'тип',
        'type'              => 'text',
        'parent'            => 'group_648edb7872018',
        'instructions'      => '',
        'required'          => 0,
        'wrapper'           => array('width' => '', 'class' => '', 'id' => ''),
    ));
});

// -------------------------------------------------------
// Subcategory auto-assignment
// -------------------------------------------------------

function get_subcategory_map() {
    return array(
        // Верески
        'Верески' => array(
            'keywords' => array('Вереск', 'Гаультерия'),
            'other'    => 'Другие верески',
        ),
        // Вьющиеся растения
        'Вьющиеся растения' => array(
            'keywords' => array('Актинидия', 'Виноград', 'Клематис', 'Гортензия', 'Древогубец', 'Жимолость'),
            'other'    => 'Другие вьющиеся растения',
        ),
        // Деревья
        'Деревья' => array(
            'keywords' => array(
                'Береза', 'Боярышник', 'Вишня', 'Груша', 'Дуб', 'Ель', 'Ива', 'Клен', 'Липа',
                'Лиственница', 'Можжевельник', 'Орех', 'Рябина', 'Слива', 'Сосна', 'Туя',
                'Черемуха', 'Черешня', 'Яблоня',
                'Айва', 'Алыча', 'Вяз', 'Гледичия', 'Каштан', 'Кедр', 'Пихта', 'Тис', 'Тополь',
            ),
            'other'    => 'Другие деревья',
        ),
        // Злаки
        'Злаки' => array(
            'keywords' => array(
                'Вейник', 'Мискантус', 'Молиния', 'Осока', 'Овсяница', 'Просо',
                'Калерия', 'Лисохвост', 'Луговик', 'Полевичка', 'Сеслерия', 'Фалярис', 'Хаконехлоя', 'Элимус',
            ),
            'other'    => 'Другие злаки',
        ),
        // Кустарники
        'Кустарники' => array(
            'keywords' => array(
                'Азалия', 'Барбарис', 'Бересклет', 'Бузина', 'Вереск', 'Гортензия', 'Дерен', 'Ива',
                'Калина', 'Кизильник', 'Лаванда', 'Лапчатка', 'Лещина', 'Пузыреплодник',
                'Рododендрон', 'Роза', 'Сирень', 'Спирея', 'Форзиция', 'Чубушник',
                'Боярышник', 'Вейгела', 'Рябинник', 'Смородина', 'Снежноягодник', 'Стефанандра',
            ),
            'other'    => 'Другие кустарники',
        ),
        // Луковичные
        'Луковичные' => array(
            'keywords' => array('Аллиум', 'Гиацинт', 'Мускари', 'Нарцисс', 'Тюльпан', 'Крокус'),
            'other'    => 'Другие луковичные',
        ),
        // МАФ
        'Малые Архитектурные Формы (МАФ)' => array(
            'keywords' => array(
                'Бордюр', 'Колышек', 'Ограждение', 'Чаша',
                'Держатель', 'Мангал', 'Пергола', 'Скамья', 'Фонарь', 'Цветочница',
            ),
            'other'    => 'Другие МАФ',
        ),
        // Многолетники
        'Многолетники' => array(
            'keywords' => array(
                'Астильба', 'Астра', 'Астранция', 'Барвинок', 'Бузульник', 'Вербейник', 'Вероника',
                'Гайлардия', 'Гвоздика', 'Гейхера', 'Гейхерелла', 'Гелениум', 'Герань', 'Гортензия',
                'Дербенник', 'Живучка', 'Ирис', 'Камнеломка', 'Клематис', 'Лаванда', 'Лиатрис',
                'Лилейник', 'Люпин', 'Очиток', 'Папоротник', 'Пион', 'Посконник', 'Седум',
                'Тысячелистник', 'Флокс', 'Хоста', 'Эхинацея',
                'Анафалис', 'Анемона', 'Арабис', 'Бадан', 'Бруннера', 'Василек', 'Василистник',
                'Вероникаструм', 'Волжанка', 'Гравилат', 'Дармера', 'Иссоп', 'Клопогон',
                'Колокольчик', 'Котовник', 'Кровохлебка', 'Лабазник', 'Манжетка', 'Медуница',
                'Монарда', 'Мшанка', 'Нивяник', 'Обриета', 'Пахизандра', 'Рудбекия', 'Солидаго',
                'Стахис', 'Традесканция', 'Эдельвейс', 'Яснотка',
            ),
            'other'    => 'Другие многолетники',
        ),
        // Плодовые
        'Плодовые' => array(
            'keywords' => array(
                'Актинидия', 'Вишня', 'Виноград', 'Голубика', 'Груша', 'Ежевика', 'Жимолость',
                'Клубника', 'Крыжовник', 'Малина', 'Слива', 'Смородина', 'Черешня', 'Яблоня',
                'Айва', 'Алыча', 'Арония', 'Брусника', 'Дюк', 'Ирга', 'Йошта', 'Калина', 'Клюква',
                'Лещина', 'Облепиха', 'Ревень', 'Рябина', 'Хеномелес',
            ),
            'other'    => 'Другие плодовые',
        ),
        // Почвопокровные
        'Почвопокровные растения' => array(
            'keywords' => array(
                'Барвинок', 'Живучка', 'Очиток', 'Седум',
                'Бересклет', 'Вербейник', 'Иберис', 'Камнеломка', 'Кизильник', 'Молодило', 'Мшанка', 'Флокс', 'Яснотка',
            ),
            'other'    => 'Другие почвопокровные',
        ),
        // Пряно-ароматические
        'Пряно-ароматические растения' => array(
            'keywords' => array('Душица', 'Иссоп', 'Лаванда', 'Мелисса', 'Мята', 'Тимьян', 'Шалфей', 'Эстрагон'),
            'other'    => 'Другие пряно-ароматические',
        ),
        // Растения для прудов
        'Растения для прудов и водоемов' => array(
            'keywords' => array('Белокрыльник', 'Дербенник', 'Ирис', 'Ситник'),
            'other'    => 'Другие растения для прудов',
        ),
        // Рododендроны
        'Рododендроны' => array(
            'keywords' => array('Рododендрон', 'Азалия'),
            'other'    => 'Другие рododендроны',
        ),
        // Сопутствующие товары
        'Сопутствующие товары для сада' => array(
            'keywords' => array(
                'Грунт', 'Мульча', 'Субстрат', 'Торф', 'Удобрение',
                'Акварин', 'Азофоска', 'Ведро', 'Геотекстиль', 'Горшок', 'Гумат', 'Дренаж',
                'Калимагнезия', 'Карбамид', 'Карбофос', 'Кашпо', 'Корзинка', 'Монофосфат',
                'ОМУ', 'Опора', 'Песок', 'Плодосборник', 'Пуршат', 'РанНет', 'Селитра',
                'Спанбонд', 'Суперфосфат', 'ФАС', 'Фитоспорин', 'ХОМ', 'Шпагат',
            ),
            'other'    => 'Другие сопутствующие товары',
        ),
        // Услуги
        'Услуги' => array(
            'keywords' => array('Газон', 'Обработка', 'Обслуживание', 'Посадка', 'Уход'),
            'other'    => 'Другие услуги',
        ),
        // Хвойные
        'Хвойные растения' => array(
            'keywords' => array(
                'Ель', 'Лиственница', 'Можжевельник', 'Сосна', 'Туя',
                'Кипарисовик', 'Микробиота', 'Пихта', 'Тис',
            ),
            'other'    => 'Другие хвойные',
        ),
    );
}

// Primary subcategories (count >= 2 needed to remain standalone)
function get_primary_subcategories() {
    return array(
        'Верески'                         => array('Вереск', 'Гаультерия'),
        'Вьющиеся растения'               => array('Актинидия', 'Виноград', 'Клематис'),
        'Деревья'                         => array('Береза', 'Боярышник', 'Вишня', 'Груша', 'Дуб', 'Ель', 'Ива', 'Клен', 'Липа', 'Лиственница', 'Можжевельник', 'Орех', 'Рябина', 'Слива', 'Сосна', 'Туя', 'Черемуха', 'Черешня', 'Яблоня'),
        'Злаки'                           => array('Вейник', 'Мискантус', 'Молиния', 'Осока', 'Овсяница', 'Просо'),
        'Кустарники'                      => array('Азалия', 'Барбарис', 'Бересклет', 'Бузина', 'Вереск', 'Гортензия', 'Дерен', 'Ива', 'Калина', 'Кизильник', 'Лаванда', 'Лапчатка', 'Лещина', 'Пузыреплодник', 'Рododендрон', 'Роза', 'Сирень', 'Спирея', 'Форзиция', 'Чубушник'),
        'Луковичные'                      => array('Аллиум', 'Гиацинт', 'Мускари', 'Нарцисс', 'Тюльпан'),
        'Малые Архитектурные Формы (МАФ)' => array('Бордюр', 'Колышек', 'Ограждение', 'Чаша'),
        'Многолетники'                    => array('Астильба', 'Астра', 'Астранция', 'Барвинок', 'Бузульник', 'Вербейник', 'Вероника', 'Гайлардия', 'Гвоздика', 'Гейхера', 'Гейхерелла', 'Гелениум', 'Герань', 'Гортензия', 'Дербенник', 'Живучка', 'Ирис', 'Камнеломка', 'Клематис', 'Лаванда', 'Лиатрис', 'Лилейник', 'Люпин', 'Очиток', 'Папоротник', 'Пион', 'Посконник', 'Седум', 'Тысячелистник', 'Флокс', 'Хоста', 'Эхинацея'),
        'Плодовые'                        => array('Актинидия', 'Вишня', 'Виноград', 'Голубика', 'Груша', 'Ежевика', 'Жимолость', 'Клубника', 'Крыжовник', 'Малина', 'Слива', 'Смородина', 'Черешня', 'Яблоня'),
        'Почвопокровные растения'         => array('Барвинок', 'Живучка', 'Очиток', 'Седум'),
        'Пряно-ароматические растения'    => array('Душица', 'Иссоп', 'Лаванда', 'Мелисса', 'Мята', 'Тимьян', 'Шалфей'),
        'Растения для прудов и водоемов'  => array(),
        'Рododендроны'                    => array('Рododендрон'),
        'Сопутствующие товары для сада'   => array('Грунт', 'Мульча', 'Субстрат', 'Торф', 'Удобрение'),
        'Услуги'                          => array('Газон'),
        'Хвойные растения'                => array('Ель', 'Лиственница', 'Можжевельник', 'Сосна', 'Туя'),
    );
}

function normalize_e($str) {
    return str_replace('ё', 'е', mb_strtolower($str, 'UTF-8'));
}

function match_keyword_in_title($title, $keywords) {
    $title_norm = normalize_e($title);
    // Sort keywords by length desc so longer matches win
    usort($keywords, function($a, $b) { return mb_strlen($b, 'UTF-8') - mb_strlen($a, 'UTF-8'); });
    foreach ($keywords as $kw) {
        $kw_norm = normalize_e($kw);
        // Match keyword at the start of the title (word boundary)
        if (mb_strpos($title_norm, $kw_norm, 0, 'UTF-8') === 0) {
            return $kw;
        }
    }
    return null;
}

function assign_subcategories($request) {
    $map      = get_subcategory_map();
    $primary  = get_primary_subcategories();
    $dry_run  = $request->get_param('dry_run') ? true : false;

    // Step 1: collect all products with their categories and match keywords
    $products = get_posts(array(
        'post_type'      => 'product',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'fields'         => 'ids',
    ));

    // Build per-category keyword counts first (to apply "Другие" rule)
    // Structure: $counts[cat_name][keyword] = count
    $counts   = array();
    $matches  = array(); // $matches[post_id] = ['cat' => ..., 'keyword' => ...]

    foreach ($products as $post_id) {
        $terms = get_the_terms($post_id, 'product_cat');
        if (empty($terms) || is_wp_error($terms)) continue;
        $cat_name = $terms[0]->name;
        if (!isset($map[$cat_name])) continue;

        $title   = get_the_title($post_id);
        $keyword = match_keyword_in_title($title, $map[$cat_name]['keywords']);
        if ($keyword === null) $keyword = '__nomatch__';

        if (!isset($counts[$cat_name])) $counts[$cat_name] = array();
        if (!isset($counts[$cat_name][$keyword])) $counts[$cat_name][$keyword] = 0;
        $counts[$cat_name][$keyword]++;
        $matches[$post_id] = array('cat' => $cat_name, 'keyword' => $keyword);
    }

    // Step 2: determine which keywords are standalone (>= 2 products) vs "Другие"
    $standalone = array(); // $standalone[cat_name][keyword] = true/false
    foreach ($counts as $cat_name => $kw_counts) {
        $standalone[$cat_name] = array();
        $primary_kws = isset($primary[$cat_name]) ? $primary[$cat_name] : array();
        foreach ($kw_counts as $kw => $cnt) {
            if ($kw === '__nomatch__') {
                $standalone[$cat_name][$kw] = false;
                continue;
            }
            // Standalone only if keyword is in primary list AND count >= 2
            $is_primary = in_array($kw, $primary_kws);
            $standalone[$cat_name][$kw] = ($is_primary && $cnt >= 2);
        }
    }

    // Step 3: assign fields
    $updated = 0;
    $log     = array();
    foreach ($matches as $post_id => $info) {
        $cat_name = $info['cat'];
        $keyword  = $info['keyword'];
        $other    = $map[$cat_name]['other'];

        $тип          = ($keyword === '__nomatch__') ? '' : $keyword;
        $подкатегория = ($keyword !== '__nomatch__' && !empty($standalone[$cat_name][$keyword]))
            ? $keyword
            : $other;

        if (!$dry_run) {
            update_post_meta($post_id, 'подкатегория', $подкатегория);
            update_post_meta($post_id, 'тип', $тип);
            // ACF reference keys so get_field() resolves correctly
            update_post_meta($post_id, '_подкатегория', 'field_подкатегория');
            update_post_meta($post_id, '_тип', 'field_тип');
        }
        $log[] = array(
            'id'          => $post_id,
            'title'       => get_the_title($post_id),
            'cat'         => $cat_name,
            'тип'         => $тип,
            'подкатегория'=> $подкатегория,
        );
        $updated++;
    }

    return new WP_REST_Response(array(
        'status'   => 'ok',
        'dry_run'  => $dry_run,
        'updated'  => $updated,
        'products' => $log,
    ), 200);
}

function get_subcategories_for_category($request) {
    $category_id = intval($request->get_param('category_id'));
    if (!$category_id) {
        return new WP_REST_Response(array('status' => 'error', 'message' => 'category_id required'), 400);
    }

    global $wpdb;
    $subcategories = $wpdb->get_col($wpdb->prepare(
        "SELECT DISTINCT pm.meta_value
         FROM {$wpdb->postmeta} pm
         INNER JOIN {$wpdb->term_relationships} tr ON tr.object_id = pm.post_id
         INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id = tr.term_taxonomy_id
         WHERE pm.meta_key = 'подкатегория'
           AND pm.meta_value != ''
           AND tt.taxonomy = 'product_cat'
           AND tt.term_id = %d
         ORDER BY pm.meta_value ASC",
        $category_id
    ));

    return new WP_REST_Response(array(
        'status'        => 'ok',
        'category_id'   => $category_id,
        'subcategories' => $subcategories,
    ), 200);
}

// New order notification only for "Pending" Order status
/*add_action( 'woocommerce_checkout_order_processed', 'pending_new_order_notification', 20, 1 );
function pending_new_order_notification( $order_id ) {
   
	error_log("here");
    // Get an instance of the WC_Order object
    $order = wc_get_order( $order_id );
    error_log($order->get_status());
    // Only for "pending" order status
    if( ! $order->has_status( 'pending' ) ) return;

    // Send "New Email" notification (to admin)
    WC()->mailer()->get_emails()['WC_Email_New_Order']->trigger( $order_id );
}*/