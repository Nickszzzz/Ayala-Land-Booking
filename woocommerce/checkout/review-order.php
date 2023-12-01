<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;

if(isset($_GET['add-to-cart'])) {
	$product_id = $_GET['add-to-cart'];
	// Get post by ID
$post = get_post($product_id);

}


?>
<table class="">

	<tbody>
		<tr class="">
			<td class="product-name">
				Meeting Room Name
			</td>
			<td class="product-total">
			<?php echo esc_html($post->post_title); // Use esc_html to sanitize the output ?>
			</td>
		</tr>
		<tr class="">
			<td class="product-name">
			Booking Type
			</td>
			<td class="product-total">
			Hourly Rate (₱ 650.00 / hr)
			</td>
		</tr>
		<tr class="">
			<td class="product-name">
			Booking Date
			</td>
			<td class="product-total">
			11-09-23 9:00 am
			11-09-23 5:00 pm
			</td>
		</tr>
		<tr class="">
			<td class="product-name">
			Time (no. of hrs)
			</td>
			<td class="product-total">
			8hrs
			</td>
		</tr>

	</tbody>
	
</table>
<table class="">
	<body>
	<tr class="">
			<td class="product-name">
			Total Booking Amount
			</td>
			<td class="product-total">
			₱ 5,200.00
			</td>
		</tr>
		<tr class="">
			<td class="product-name">
			VAT
			</td>
			<td class="product-total">
			₱ 50.00
			</td>
		</tr>
		<tr class="">
			<td class="product-name">
			Overall Total
			</td>
			<td class="product-total">
			₱ 5,250.00
			</td>
		</tr>
	</body>
	
</table>