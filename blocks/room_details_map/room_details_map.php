<?php 
    $id = get_the_ID();
    $map = get_field('cta_map_link', $id);
?>
<div class="wp-block-group product-single-page__book-form has-base-2-background-color has-background has-global-padding is-layout-constrained wp-container-core-group-layout-6 wp-block-group-is-layout-constrained"
    style="border-radius:16px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
    <h3 class="wp-block-heading has-display-xs-font-size" style="font-style:normal;font-weight:600">Book now!</h3>

    <div class="gf_browser_chrome gform_wrapper gravity-theme gform-theme--no-framework book__now-form_wrapper"
        data-form-theme="gravity-theme" data-form-index="0" id="gform_wrapper_2">
        <form method="get" enctype="multipart/form-data" id="gform_2" class="book__now-form"
            action="/checkout/" data-formid="2" novalidate="">
            <input type="hidden" name="add-to-cart" value="576">
            <input type="hidden" name="quantity" value="1">
            <div class="gform-body gform_body">
                <div id="gform_fields_2" class="gform_fields top_label form_sublabel_below description_below">
                    <div id="field_2_6"
                        class="gfield gfield--type-text gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"
                        data-js-reload="field_2_6">
                        <div class="ginput_container ginput_container_text"><input name="room_name" id="input_2_6"
                                type="text" value="" class="large" placeholder="Meeting Room Name" aria-invalid="false">
                        </div>
                    </div>
                    <div id="field_2_7"
                        class="gfield gfield--type-number gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"
                        data-js-reload="field_2_7">
                        <div class="ginput_container ginput_container_number"><input name="number_of_seats" id="input_2_7"
                                type="number" step="any" value="" class="large" placeholder="Number of Seats"
                                aria-invalid="false"></div>
                    </div>
                    <div id="field_2_8"
                        class="gfield gfield--type-date gfield--input-type-datepicker gfield--datepicker-no-icon gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"
                        data-js-reload="field_2_8">
                        <div class="ginput_container ginput_container_date">
                            <input name="checkin" id="input_2_8" type="text" value=""
                                class="datepicker gform-datepicker mdy datepicker_no_icon gdatepicker-no-icon hasDatepicker initialized"
                                placeholder="Check-In" aria-describedby="input_2_8_date_format"
                                aria-invalid="false"><br>
                            <span id="input_2_8_date_format" class="screen-reader-text">MM slash DD slash YYYY</span>
                        </div>
                        <p> <input type="hidden" id="gforms_calendar_icon_input_2_8" class="gform_hidden"
                                value="http://ayalaland-booking.local/wp-content/plugins/gravityforms/images/datepicker/datepicker.svg">
                        </p>
                    </div>
                    <div id="field_2_9"
                        class="gfield gfield--type-date gfield--input-type-datepicker gfield--datepicker-no-icon gfield--width-full field_sublabel_below gfield--no-description field_description_below hidden_label gfield_visibility_visible"
                        data-js-reload="field_2_9">
                        <div class="ginput_container ginput_container_date">
                            <input name="checkout" id="input_2_9" type="text" value=""
                                class="datepicker gform-datepicker mdy datepicker_no_icon gdatepicker-no-icon hasDatepicker initialized"
                                placeholder="Check-Out" aria-describedby="input_2_9_date_format"
                                aria-invalid="false"><br>
                            <span id="input_2_9_date_format" class="screen-reader-text">MM slash DD slash YYYY</span>
                        </div>
                        <p> <input type="hidden" id="gforms_calendar_icon_input_2_9" class="gform_hidden"
                                value="http://ayalaland-booking.local/wp-content/plugins/gravityforms/images/datepicker/datepicker.svg">
                        </p>
                    </div>
                    <fieldset id="field_2_12"
                        class="gfield gfield--type-radio gfield--type-choice gfield--width-full field_sublabel_below gfield--no-description field_description_below gfield_visibility_visible"
                        data-js-reload="field_2_12">
                        <legend class="gfield_label gform-field-label">Booking Type</legend>
                        <div class="ginput_container ginput_container_radio">
                            <div class="gfield_radio" id="input_2_12">
                                <div class="gchoice gchoice_2_12_0">
                                    <input class="gfield-choice-input" name="rate" type="radio"
                                        value="<?php echo get_field('rates_hourly_rate', $id); ?>" id="choice_2_12_0"
                                        onchange="gformToggleRadioOther( this )"><br>
                                    <label for="choice_2_12_0" id="label_2_12_0"
                                        class="gform-field-label gform-field-label--type-inline">Hourly Rate (<?php echo '₱' . number_format(get_field('rates_hourly_rate', $id), 2, '.', ','); ?>
                                        / hr)</label>
                                </div>
                                <div class="gchoice gchoice_2_12_1">
                                    <input class="gfield-choice-input" name="rate" type="radio"
                                        value="<?php echo get_field('rates_hourly_rate', $id); ?>" id="choice_2_12_1"
                                        onchange="gformToggleRadioOther( this )"><br>
                                    <label for="choice_2_12_1" id="label_2_12_1"
                                        class="gform-field-label gform-field-label--type-inline">Whole Day Rate
                                        (<?php echo '₱' . number_format(get_field('rates_daily_rate', $id), 2, '.', ','); ?>)</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_2"
                    class="gform_button button gform-button--width-full" value="Book Now"
                    onclick="if(window[&quot;gf_submitting_2&quot;]){return false;}  if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;}  "
                    onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_2&quot;]){return false;} if( !jQuery(&quot;#gform_2&quot;)[0].checkValidity || jQuery(&quot;#gform_2&quot;)[0].checkValidity()){window[&quot;gf_submitting_2&quot;]=true;}  jQuery(&quot;#gform_2&quot;).trigger(&quot;submit&quot;,[true]); }"><br>
               
            </div>
        </form>
    </div>
</div>
<div class="wp-block-group product-single-page__map has-base-2-background-color has-background has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
    style="border-radius:16px;min-height:400px;padding-top:0px;padding-bottom:0px">
    <iframe src="<?php echo $map; ?>" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>