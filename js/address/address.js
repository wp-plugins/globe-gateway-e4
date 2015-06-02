function copy_address(biilling_to_shipping) {
  if(biilling_to_shipping.billing_to_shipping_name.checked == true) {
    biilling_to_shipping.x_ship_to_address.value = biilling_to_shipping.x_address.value;
    biilling_to_shipping.x_ship_to_city.value = biilling_to_shipping.x_city.value;
	biilling_to_shipping.x_ship_to_state.value = biilling_to_shipping.x_state.value;
	biilling_to_shipping.x_ship_to_zip.value = biilling_to_shipping.x_zip.value;
  }
}