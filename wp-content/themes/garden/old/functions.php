<?php
/**
 * garden functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package garden
 */

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
    wp_localize_script('garden-script', 'myajax', array('url' => admin_url('admin-ajax.php')));
    

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
});






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
    if (!empty($_POST['category']) && $_POST['category'] !== "none") {
       $cat = $_POST['category'];
         $query = new WP_Query(array("post_type" => "product",
        'tax_query' => array(
           array(
             'taxonomy' => 'product_cat',
             'field'    => 'term_id',
             'terms'     =>  $cat, 
             'operator'  => 'IN'
             )
           ),
        "posts_per_page" => -1) );
        $count = ceil($query->post_count / 12);
    } else {
         $count = wp_count_posts("product")->publish / 12;
    }
     echo json_encode(["status" => "ok", "pages" => $count]);
    wp_die();
}


add_action('wp_ajax_nopriv_get_goods', 'get_goods');
add_action('wp_ajax_get_goods', 'get_goods');
function get_goods()
{
        $page = $_POST['page'];
    if (!empty($_POST['category']) && $_POST['category'] !== "none") {
       $cat = $_POST['category'];
       
       /* $query = new WP_Query(array("post_type" => "product",
        'tax_query' => array(
           array(
             'taxonomy' => 'product_cat',
             'field'    => 'term_id',
             'terms'     =>  $cat, 
             'operator'  => 'IN'
             )
           ),
        "posts_per_page" => -1) );
        $count = ceil($query->post_count / 12);*/
      
        $args = array("post_type" => "product",
        'tax_query' => array(
               array(
                 'taxonomy' => 'product_cat',
                 'field'    => 'term_id',
                 'terms'     =>  $cat, 
                 'operator'  => 'IN'
                 )
           ),
       "posts_per_page" => 12, 
       "paged" => $page
    );
    } else {
        $cat = -1;
        
        //$query = new WP_Query(array("post_type" => "product", "posts_per_page" => -1) );
        //$count = ceil($query->post_count / 10);
      //  $count = wp_count_posts("product")->publish / 12;
         $args = array("post_type" => "product",
           "posts_per_page" => 12, 
           "paged" => $page,
           "post_status" => "publish"
    );
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
            $good['price'] = $product->get_price();
            $good['link'] = get_the_permalink();
            $good['img'] = get_the_post_thumbnail_url();
            $status = ($product->is_in_stock() ? "В наличии" : "Нет в наличии");
            $good['status'] = $status;
            $result[] = $good;
        }
  
        $response = ["status" => "ok", "goods" => $result];
        echo json_encode($response);
        die();
}

add_action('wp_ajax_nopriv_get_favorite_goods', 'get_favorite_goods');
add_action('wp_ajax_get_favorite_goods', 'get_favorite_goods');
function get_favorite_goods(){
    $result = ["favoriteGoodsArr" => []];
    echo json_encode($result);
    wp_die();
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
    
    $message = $_POST['email'] . ' '  . $_POST['feedback-phone'] . ' ' . $_POST['feedback-comment'];
    $headers = 'From: Site <info@nikitagolubeva.ru>' . "\r\n";
    wp_mail( "nikitagolubeva@mail.ru", "Новая заявка", $message, $headers );
    
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
    $order->set_customer_note($address . "; " . $payment);

    $order->set_shipping_address_1($address);
    $order->set_billing_address_1($address);
    $order->update_status('processing');
    $order->save();
    $order->save_meta_data();
    $order->calculate_totals();
    $cart->empty_cart();
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
    $args = array("post_type" => "product", "s" => $s, "paged" => $page, "posts_per_page" => 12);
    $result = [];
        global $product;
        global $post;
        $query = new WP_Query($args);
        while ($query->have_posts()) {
            $query->the_post();
            $product = wc_get_product($post->ID);
            $good = [];
            $good['id'] = $post->ID;
            $good['name'] = get_the_title();
            $good['price'] = $product->get_price();
            $good['link'] = get_the_permalink();
            $good['img'] = get_the_post_thumbnail_url();
            $status = ($product->is_in_stock() ? "В наличии" : "Нет в наличии");
            $good['status'] = $status;
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
    $args = array("post_type" => "product", "s" => $s, "posts_per_page" => -1);
    $query = new WP_Query($args);
    $count = ceil($query->post_count / 12);
    echo json_encode(["status" => "ok", "pages" => $count]);
    wp_die();
}