<?php 

// Add action for logged in users
add_action('wp_ajax_my_ajax_action', 'my_ajax_callback');
// Add action for non-logged-in users
add_action('wp_ajax_nopriv_my_ajax_action', 'my_ajax_callback');

function my_ajax_callback() {
    // Check if the term parameter is set
    if (isset($_GET['q'])) {
        $search_term = sanitize_text_field($_GET['q']);

        // Query product categories using the REST API
        $url = home_url().'/wp-json/wp/v2/locations?search=' . urlencode($search_term);

        $response = wp_remote_get($url);

        if (!is_wp_error($response) && $response['response']['code'] === 200) {
            $data = json_decode($response['body'], true);

            // Exclude categories with specific names
            $exclude_categories = array('uncategorized', 'booking');
            $filtered_data = array_filter($data, function ($category) use ($exclude_categories) {
                return !in_array(strtolower($category['title']['rendered']), $exclude_categories);
            });

            // Format the filtered data as needed for Select2
            $results = array();
            foreach ($filtered_data as $category) {
                $results[] = array(
                    'id'   => $category['id'],
                    'text' => $category['title']['rendered'],
                );
            }

            // Sort the results alphabetically based on the 'text' field
            usort($results, function ($a, $b) {
                return strcmp($a['text'], $b['text']);
            });

            wp_send_json($results);
        }
    }
    else {
        // Query product categories using the REST API
        $url = home_url().'/wp-json/wp/v2/locations';

        $response = wp_remote_get($url);

        if (!is_wp_error($response) && $response['response']['code'] === 200) {
            $data = json_decode($response['body'], true);

            // Exclude categories with specific names
            $exclude_categories = array('uncategorized', 'booking');
            $filtered_data = array_filter($data, function ($category) use ($exclude_categories) {
                return !in_array(strtolower($category['title']['rendered']), $exclude_categories);
            });

            // Format the filtered data as needed for Select2
            $results = array();
            foreach ($filtered_data as $category) {
                $results[] = array(
                    'id'   => $category['id'],
                    'text' => $category['title']['rendered'],
                );
            }

            // Sort the results alphabetically based on the 'text' field
            usort($results, function ($a, $b) {
                return strcmp($a['text'], $b['text']);
            });

            wp_send_json($results);
        }
    }

    wp_send_json([]);
}


// Add this code to your theme's functions.php file or create a custom plugin

function get_product_rates_endpoint( $data ) {
    // Ensure a product_id parameter is present in the request
    // Get the current post ID
    $post_id = get_the_ID();

    if ( empty( $data['product_id'] ) ) {
        return array( 'error' => 'Missing product_id parameter' );
    }

    // Get the product ID from the request
    $product_id = absint( $data['product_id'] );

    // Get the rates_daily_rate and rates_hourly_rate field values for the specified product ID
    $daily_rate = get_field( 'rates_daily_rate', $product_id );
    $hourly_rate = get_field( 'rates_hourly_rate', $product_id );

    // Return the response
    return array(
        'product_id'   => $product_id,
        'daily_rate'   => $daily_rate,
        'hourly_rate'  => $hourly_rate,
    );
}

function register_custom_rest_routes() {
    register_rest_route(
        'custom/v1',
        '/get_product_rates/',
        array(
            'methods'  => 'GET',
            'callback' => 'get_product_rates_endpoint',
            'args'     => array(
                'product_id' => array(
                    'validate_callback' => function( $param, $request, $key ) {
                        return is_numeric( $param );
                    },
                ),
            ),
        )
    );
}

add_action( 'rest_api_init', 'register_custom_rest_routes' );
