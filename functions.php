<!-- //Add this script to your child theme functions.php file
 this demo is on AED currency ..please change that to the currency you want -->





function ss_wc_change_uae_currency_symbol( $currency_symbol, $currency ) {
  switch ( $currency ) {
    case 'AED':
      $currency_symbol = 'AED';
    break;
  }
  return $currency_symbol;
}
add_filter( 'woocommerce_currency_symbol', 'ss_wc_change_uae_currency_symbol', 10, 2 );