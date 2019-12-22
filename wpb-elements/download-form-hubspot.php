<?php
// integrate HelloMaaS download e-Book form shortcode to visual composer
add_action( 'vc_before_init', 'hm_ebook_form_vc_hub' );
function hm_ebook_form_vc_hub() {
    if (function_exists('vc_map')) {
        vc_map(array(
            "name" => __("HelloMaaS download e-Book form (HUBSPOT)", "hellomaas"),
            "base" => "hm_ebook_form_hub",
            "class" => "",
            "category" => __("Content"),
            "params" => array(
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "class" => "",
                    "heading" => __("Title", 'plt4m'),
                    "param_name" => "title"
                )
            )
        ));
    }
}

// Add shortcode
add_shortcode( 'hm_ebook_form_hub', 'hm_ebook_form_hub_callback' );
function hm_ebook_form_hub_callback( $atts ) {
    extract( shortcode_atts( array(
        'title' => '',
    ), $atts ) );
    ob_start(); ?>
    <div class="ebook-form-wrap">
        <div class="_form-title">
            <?=esc_html($title)?>
        </div>
        <div id="cboxLoadedContent"></div>
        <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
        <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <!--    after send redirect to page /e-book-thank-you/-->
        <script>
            var currentUrl = window.location.origin;
            var pathToRedirect = currentUrl + "/e-book-thank-you/";
            hbspt.forms.create({
                portalId: "6238835",
                formId: "e10958b1-3757-4eb3-8047-b012f205c298",
                target: "#cboxLoadedContent",
                redirectUrl: pathToRedirect,
            });
        </script>

        <style>
            .hs-form .hs-form-field {}
            /* Descriptions (targets class applied to Help Text divs) */
            .hs-form .hs-field-desc {}
            /* Labels (selects field labels and error messages) */
            .hs-form label {}
            .hs-form .hs-form-field > label {}
            /* Inputs (selectors for all inputs)  */
            .hs-form input[type="text"],
            .hs-form input[type="password"],
            .hs-form input[type="datetime"],
            .hs-form input[type="datetime-local"],
            .hs-form input[type="date"],
            .hs-form input[type="month"],
            .hs-form input[type="time"],
            .hs-form input[type="week"],
            .hs-form input[type="number"],
            .hs-form input[type="email"],
            .hs-form input[type="url"],
            .hs-form input[type="search"],
            .hs-form input[type="tel"],
            .hs-form input[type="color"],
            .hs-form input[type="file"],
            .hs-form textarea,
            .hs-form select {
                border: none;
                width: 100%;
                background-color: transparent;
                border: none;
                border-bottom: 1px solid #fff;
                border-radius: 0;
                padding: 15px 6px 15px 0;
                color: #fff!important;
                font-size: 16px;
                line-height: 1.43em;
                margin-bottom: 28px;
                font-weight: 300;
            }
            .hs-form .hs-input.invalid.error{
                border: none;
                width: 100%;
                background-color: transparent;
                border: 1px solid #f37c7b;
                border-bottom: 1px solid #f37c7b;
                border-radius: 0;
                padding: 15px 6px 15px 0;
                color: #fff!important;
                font-size: 16px;
                line-height: 1.43em;
                margin-bottom: 28px;
                font-weight: 300;
            }
            /* Inputs in focus (selectors for all inputs when clicked)  */
            .hs-form input[type="text"]:focus,
            .hs-form input[type="password"]:focus,
            .hs-form input[type="datetime"]:focus,
            .hs-form input[type="datetime-local"]:focus,
            .hs-form input[type="date"]:focus,
            .hs-form input[type="month"]:focus,
            .hs-form input[type="time"]:focus,
            .hs-form input[type="week"]:focus,
            .hs-form input[type="number"]:focus,
            .hs-form input[type="email"]:focus,
            .hs-form input[type="url"]:focus,
            .hs-form input[type="search"]:focus,
            .hs-form input[type="tel"]:focus,
            .hs-form input[type="color"]:focus,
            .hs-form input[type="file"]:focus,
            .hs-form textarea:focus,
            .hs-form select:focus {}
            /* Multi-line inputs (selectors to target multi-line fields */
            .hs-form textarea {}
            .hs-form textarea:focus {}
            /* Dropdowns (selectors for dropdowns) */
            .hs-form select {}
            .hs-form select:focus {}
            /* Multi-select (selectors for multi-select fields) */
            .hs-form form.hs-form .hs-form-field ul.inputs-list {}
            .hs-form form.hs-form .hs-form-field ul.inputs-list li input {}
            .hs-form input[type="radio"] {}
            .hs-form input[type="checkbox"] {}
            /* Required (selectors for fields, when they do not pass validation) */
            .hs-form input:focus:required:invalid,
            .hs-form textarea:focus:required:invalid,
            .hs-form select:focus:required:invalid {}
            .hs-form input:focus:required:invalid:focus,
            .hs-form textarea:focus:required:invalid:focus,
            .hs-form select:focus:required:invalid:focus {}
            /* Error message (selector for validation messages) */
            .hs-form .hs-error-msgs label{}
            /* Placeholder Text (styles the placeholder attribute text) */
            ::-webkit-input-placeholder { color: #fff;/* Webkit Browsers */}
            :-moz-placeholder { color: #fff;/* Firefox 18- */}
            ::-moz-placeholder { color: #fff;/* Firefox 19+ */}
            :-ms-input-placeholder { color: #fff;/* IE10 */}
            /* Multi Column Form (selectors for fieldsets and field wrappers)
               ========================================================================== */
            .hs-form .hs-form fieldset.form-columns-1 {}
            .hs-form .hs-form fieldset.form-columns-1 .hs-form-field {}
            .hs-form .hs-form fieldset.form-columns-2 {}
            .hs-form .hs-form fieldset.form-columns-2 .hs-form-field {}
            .hs-form .hs-form fieldset.form-columns-3 {}
            .hs-form .hs-form fieldset.form-columns-3 .hs-form-field {}
            /* Submit buttons (selectors for all non-CTA buttons)
               ========================================================================== */
            body .hs-button.primary,
            body input[type="submit"],
            body input[type="button"] {
                width: 100%;
                background: #000!important;
                text-transform: uppercase;
                font-weight: 600;
                display: inline-block;
                min-width: 298px;
                padding: 0 25px !important;
                height: 58px;
                line-height: 58px;
                text-align: center;
                letter-spacing: 1px;
                -webkit-appearance: none;
                cursor: pointer;
                border-radius: 60px !important;
                color: #fff;
                outline: none;
                border: none;
            }
            body .hs-button.primary:hover,
            body input[type="submit"]:hover,
            body input[type="button"]:hover {}
            body .hs-button.primary:focus,
            body input[type="submit"]:focus,
            body input[type="button"]:focus {}
            .hs-form .hs-form-required{
                display: none!important;
            }
            .inputs-list{
                padding-left: 0;
            }
            .hs_by_checking_this_box_you_confirm_that_you_have_read_our_privacy_policy_ .no-list.hs-error-msgs.inputs-list,
            .hs_by_checking_this_box_you_confirm_that_you_have_read_our_privacy_policy_ .hs-main-font-element
            {
                display: none!important;
            }

            .hs-fieldtype-text{
                position: relative;
            }

            label.hs-error-msg {
                position: absolute;
                text-align: right;
                top: 60px;
                right: 0;
                padding: 0 6px;
                background: #f37c7b;
                font-size: 13px;
                font-family: arial,sans-serif;
                color: #fff;
                text-align: center;
                text-decoration: none;
                border-radius: 4px;
            }

            .hs-form-booleancheckbox-display{
                font-size: 14px;
                line-height: 1.6;
                font-family: arial,helvetica,sans-serif;
            }



            @media all and(min-width:768px) {
                body .hs-button.primary,
                body input[type="submit"],
                body input[type="button"] {
                    width: 100%;
                    background: #000!important;
                    text-transform: uppercase;
                    font-weight: 600;
                    display: inline-block;
                    min-width: 298px;
                    padding: 0 25px !important;
                    height: 58px;
                    line-height: 58px;
                    text-align: center;
                    letter-spacing: 1px;
                    -webkit-appearance: none;
                    cursor: pointer;
                    border-radius: 60px !important;
                    color: #fff;
                    outline: none;
                    border: none;
                }
            }
        </style>
    </div>
    <?php
    return ob_get_clean();
}

