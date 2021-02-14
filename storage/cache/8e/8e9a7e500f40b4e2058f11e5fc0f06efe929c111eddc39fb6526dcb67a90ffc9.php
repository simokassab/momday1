<?php

/* journal2/template/extension/module/marketplace.twig */
class __TwigTemplate_b05ed4a44c254cf5dbfaefdc77154bf489441b45c581a0115c2d971860f9b150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<link type=\"text/css\" href=\"catalog/view/theme/journal2/stylesheet/MP/journal2.css\" rel=\"stylesheet\"  />
<style type=\"text/css\">
\t.button-group {
    border-top: none;
    background-color: white;
    overflow: auto;
    text-align: center;
    width: 100%;
}

</style>
<div class=\"box\">";
        // line 13
        if (array_key_exists("chkIsPartner", $context)) {
            // line 14
            echo "\t<div class=\"box-content list-group\">
\t<ul>";
            // line 16
            if ((isset($context["chkIsPartner"]) ? $context["chkIsPartner"] : null)) {
                // line 17
                if (((array_key_exists("marketplace_account_menu_sequence", $context) && array_key_exists("marketplace_seller_mode", $context)) && (isset($context["marketplace_seller_mode"]) ? $context["marketplace_seller_mode"] : null))) {
                    // line 18
                    echo "\t\t\t\t\t<div class=\"box-heading\">";
                    echo (isset($context["heading_title_mp"]) ? $context["heading_title_mp"] : null);
                    echo "</div>";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["marketplace_account_menu_sequence"]) ? $context["marketplace_account_menu_sequence"] : null));
                    foreach ($context['_seq'] as $context["key"] => $context["menu_option"]) {
                        // line 20
                        if (((array_key_exists("marketplace_allowed_account_menu", $context) && (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)) && twig_in_filter($context["key"], (isset($context["marketplace_allowed_account_menu"]) ? $context["marketplace_allowed_account_menu"] : null)))) {
                            // line 21
                            if (($context["key"] == "asktoadmin")) {
                                // line 22
                                echo "\t\t\t\t\t\t\t\t<li><a id=\"ask-to-admin\" class=\"list-group-item\"  data-toggle=\"modal\" data-target=\"#myModal-seller-mail\">";
                                // line 23
                                echo $context["menu_option"];
                                echo "
\t\t\t\t\t\t\t\t</a></li>";
                            } else {
                                // line 26
                                if (($this->getAttribute((isset($context["account_menu_href"]) ? $context["account_menu_href"] : null), $context["key"], array(), "array", true, true) && $this->getAttribute((isset($context["account_menu_href"]) ? $context["account_menu_href"] : null), $context["key"], array(), "array"))) {
                                    // line 27
                                    echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    echo $this->getAttribute((isset($context["account_menu_href"]) ? $context["account_menu_href"] : null), $context["key"], array(), "array");
                                    echo "\" class=\"list-group-item\">";
                                    // line 28
                                    echo $context["menu_option"];
                                    echo "
\t\t\t\t\t\t\t\t\t</a></li>";
                                }
                            }
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu_option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
            } else {
                // line 36
                echo "\t\t\t<li>";
                if ((array_key_exists("hasApplied", $context) && (isset($context["hasApplied"]) ? $context["hasApplied"] : null))) {
                    // line 37
                    echo "  <a class=\"list-group-item\">";
                    echo (isset($context["text_alreadyPartner"]) ? $context["text_alreadyPartner"] : null);
                    echo "</a>";
                } else {
                    // line 39
                    echo "  <a href=\"";
                    echo (isset($context["want_partner"]) ? $context["want_partner"] : null);
                    echo "\" class=\"list-group-item\">";
                    echo (isset($context["text_becomePartner"]) ? $context["text_becomePartner"] : null);
                    echo "</a>";
                }
                // line 40
                echo "</li>";
            }
            // line 42
            echo "\t</ul>
\t</div>";
        } elseif (        // line 44
array_key_exists("partner", $context)) {
            // line 45
            $context["addClass"] = "col-lg-3 col-md-3 col-sm-6";
            // line 46
            echo "\t<div class=\"row\">
      <div class=\"product-layout product-grid col-xs-12\">
        <div class=\"product-thumb product-wrapper\">
          <br/>
          <div style=\"text-align: center;\">            <br>
            <a href=\"";
            // line 51
            echo $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "sellerHref", array(), "array");
            echo "\"><img src=\"";
            echo $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "thumb", array(), "array");
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "name", array(), "array");
            echo "\" title=\"";
            echo $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "name", array(), "array");
            echo "\" class=\"img-circle\" style=\"box-shadow:0px 0px 5px 2px #f1f1f1;max-width:150px;\"/></a>

            <h4 >";
            // line 54
            echo (isset($context["text_seller"]) ? $context["text_seller"] : null);
            echo "<span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["text_seller"]) ? $context["text_seller"] : null);
            echo "\"><i class=\"fa fa-user\"></i></span>
              <a href=\"";
            // line 55
            echo $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "sellerHref", array(), "array");
            echo "\">";
            echo (isset($context["displayName"]) ? $context["displayName"] : null);
            echo "</a>
            </h4>
            <br>";
            // line 59
            if ((array_key_exists("informations", $context) && (isset($context["informations"]) ? $context["informations"] : null))) {
                // line 60
                echo "\t\t\t\t\t\t  <h4 style=\"margin-bottom: 0px;margin-top: 5px;font-size: 13px;\"><b>";
                echo (isset($context["text_seller_information"]) ? $context["text_seller_information"] : null);
                echo "</b></h4>";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 62
                    echo "\t\t\t\t\t\t    <div class=\"text-container\">
\t\t\t\t\t\t      <a href=\"";
                    // line 63
                    echo $this->getAttribute($context["information"], "href", array(), "array");
                    echo "\" target=\"_blank\">";
                    echo $this->getAttribute($context["information"], "title", array(), "array");
                    echo "</a>
\t\t\t\t\t\t    </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 67
            echo "
            <div class=\"rating\">
\t            <p>";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 71
                if (($this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "feedback_total", array(), "array") < $context["i"])) {
                    // line 72
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t            </p>
\t        </div>
\t        <br>
            <p>";
            // line 81
            echo (isset($context["text_from"]) ? $context["text_from"] : null);
            echo "<span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["text_from"]) ? $context["text_from"] : null);
            echo "\"><i class=\"fa fa-home\"></i></span>
              <b>";
            // line 82
            echo $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "country", array(), "array");
            echo "</b>
            </p>
            <br>
            <p>";
            // line 86
            echo (isset($context["text_total_products"]) ? $context["text_total_products"] : null);
            echo "
              <b>";
            // line 87
            echo $this->getAttribute((isset($context["partner"]) ? $context["partner"] : null), "total_products", array(), "array");
            echo "</b>
            </p>
            <br>";
            // line 90
            if ((isset($context["contact_mail"]) ? $context["contact_mail"] : null)) {
                // line 92
                if ((isset($context["logged"]) ? $context["logged"] : null)) {
                    // line 93
                    echo "            <p>
            \t<button class=\"btn btn-primary button\" data-toggle=\"modal\" data-target=\"#myModal-seller-mail\">";
                    // line 94
                    echo (isset($context["text_ask_seller"]) ? $context["text_ask_seller"] : null);
                    echo "</button>
        \t</p>";
                } else {
                    // line 97
                    echo "            <p>
            \t<button class=\"btn btn-primary button\" onclick=\"window.location.href='";
                    // line 98
                    echo (isset($context["redirect_user"]) ? $context["redirect_user"] : null);
                    echo "'\">";
                    echo (isset($context["text_ask_seller"]) ? $context["text_ask_seller"] : null);
                    echo "</button>
        \t</p>";
                }
            }
            // line 102
            echo "            <br>
            <p>";
            // line 104
            if ((array_key_exists("show_seller_product", $context) &&  !(isset($context["show_seller_product"]) ? $context["show_seller_product"] : null))) {
                // line 105
                echo "              \t<a href=\"";
                echo (isset($context["collectionHref"]) ? $context["collectionHref"] : null);
                echo "\">";
                echo (isset($context["text_latest_product"]) ? $context["text_latest_product"] : null);
                echo "</a>";
            } elseif ((twig_length_filter($this->env,             // line 106
(isset($context["latest"]) ? $context["latest"] : null)) > 2)) {
                // line 107
                echo "              \t<b>";
                echo (isset($context["text_latest_product"]) ? $context["text_latest_product"] : null);
                echo "<i class=\"fa fa-arrow-down\"></i> </b>";
            }
            // line 109
            echo "            </p>            <br>
          </div>

        </div>
      </div>";
            // line 114
            if ((array_key_exists("show_seller_product", $context) && (isset($context["show_seller_product"]) ? $context["show_seller_product"] : null))) {
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["latest"]) ? $context["latest"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 116
                    echo "\t\t\t\t\t<div class=\"product-grid-item xs-100 sm-100 md-100 lg-100 xl-100 display-both block-button\">
\t\t        <div class=\"product-thumb product-wrapper\" id=\"";
                    // line 117
                    echo $this->getAttribute($context["product"], "product_id", array(), "array");
                    echo "\" style=\"margin-right:0px;\">
\t          <div class=\"image\" style=\"margin-right: 0px;\"><a href=\"";
                    // line 118
                    echo $this->getAttribute($context["product"], "href", array(), "array");
                    echo "\"><center><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array(), "array");
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "\" class=\"img-responsive\" style=\"max-width:150px;\" /></center></a></div>
\t          <div >
\t            <div class=\"caption\" style=\"text-align:center;\">
\t                <h4><a href=\"";
                    // line 121
                    echo $this->getAttribute($context["product"], "href", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array(), "array");
                    echo "</a></h4>";
                    // line 122
                    if ($this->getAttribute($context["product"], "rating", array(), "array")) {
                        // line 123
                        echo "\t                <div class=\"rating\">";
                        // line 124
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 125
                            if (($this->getAttribute($context["product"], "rating", array(), "array") < $context["i"])) {
                                // line 126
                                echo "\t\t\t                \t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            } else {
                                // line 128
                                echo "\t\t\t                \t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 131
                        echo "\t                </div>";
                    }
                    // line 133
                    if ($this->getAttribute($context["product"], "price", array(), "array")) {
                        // line 134
                        echo "\t                <p class=\"price\">";
                        // line 135
                        if ( !$this->getAttribute($context["product"], "special", array(), "array")) {
                            // line 136
                            echo $this->getAttribute($context["product"], "price", array(), "array");
                        } else {
                            // line 138
                            echo "\t                  <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array(), "array");
                            echo "</span> <span class=\"price-new\"";
                            echo ((($this->getAttribute($context["product"], "date_end", array(), "array", true, true) && $this->getAttribute($context["product"], "date_end", array(), "array"))) ? (("data-end-date=" . $this->getAttribute($context["product"], "date_end", array(), "array"))) : (""));
                            echo ">";
                            echo $this->getAttribute($context["product"], "special", array(), "array");
                            echo "</span>";
                        }
                        // line 140
                        if ($this->getAttribute($context["product"], "tax", array(), "array")) {
                            // line 141
                            echo "\t                  <span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo $this->getAttribute($context["product"], "tax", array(), "array");
                            echo "</span>";
                        }
                        // line 143
                        echo "\t                </p>";
                    }
                    // line 145
                    echo "              </div>

\t           <div class=\"button-group\">";
                    // line 148
                    if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => (isset($context["this"]) ? $context["this"] : null), 1 => $this->getAttribute($context["product"], "product_id", array(), "array"))))) {
                        // line 149
                        echo "                <div class=\"cart enquiry-button\">
                  <a href=\"javascript:Journal.openPopup('";
                        // line 150
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                        echo "', '";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" data-clk=\"addToCart('";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "');\" class=\"button hint--top\" data-hint=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                        echo "<span class=\"button-cart-text\">";
                        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                        echo "</span></a>
                </div>";
                    } else {
                        // line 153
                        echo "                <div class=\"cart";
                        echo (((($this->getAttribute($context["product"], "labels", array(), "array", true, true) && twig_test_iterable($this->getAttribute($context["product"], "labels", array(), "array"))) && $this->getAttribute($this->getAttribute($context["product"], "labels", array(), "array", false, true), "outofstock", array(), "array", true, true))) ? ("outofstock") : (""));
                        echo "\">
                  <a onclick=\"addToCart('";
                        // line 154
                        echo $this->getAttribute($context["product"], "product_id", array(), "array");
                        echo "');\" class=\"button hint--top\" data-hint=\"";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                        echo "</span><i class=\"button-right-icon\"></i></a>
                </div>";
                    }
                    // line 157
                    echo "                <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array(), "array");
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 158
                    echo $this->getAttribute($context["product"], "product_id", array(), "array");
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
              </div>
\t          </div>
\t        </div>
\t      </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 165
            echo "    </div>";
        }
        // line 167
        echo "</div>";
        // line 168
        if (((isset($context["contact_mail"]) ? $context["contact_mail"] : null) && (isset($context["logged"]) ? $context["logged"] : null))) {
            // line 169
            echo "\t<div class=\"modal fade\" id=\"myModal-seller-mail\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  <div class=\"modal-dialog\">
\t    <div class=\"modal-content\">
\t      <div class=\"modal-header\">
\t        <h2>";
            // line 174
            echo (isset($context["text_ask_question"]) ? $context["text_ask_question"] : null);
            echo "
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">";
            // line 175
            echo (isset($context["text_close"]) ? $context["text_close"] : null);
            echo "</span></button>
\t\t\t\t\t</h2>
\t      </div>
\t      <form id=\"seller-mail-form\">
\t\t      <div class=\"modal-body\">
\t\t      \t<div class=\"form-group required\" style=\"width:97%;\">
\t\t\t        <label class=\"control-label\" for=\"input-subject\">";
            // line 181
            echo (isset($context["text_subject"]) ? $context["text_subject"] : null);
            echo "</label>
\t\t\t        <input type=\"text\" name=\"subject\" id=\"input-subject\" class=\"form-control\" />";
            // line 183
            if (array_key_exists("partner", $context)) {
                // line 184
                echo "\t\t\t        \t<input type=\"hidden\" name=\"seller\" value=\"";
                echo (isset($context["seller_id"]) ? $context["seller_id"] : null);
                echo "\"/>";
            }
            // line 186
            echo "\t\t\t    </div>
\t\t\t\t<div class=\"form-group required\" style=\"width:97%;\">
\t\t\t        <label class=\"control-label\" for=\"input-message\">";
            // line 188
            echo (isset($context["text_ask"]) ? $context["text_ask"] : null);
            echo "</label>
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" rows=\"3\" id=\"input-message\"></textarea>
\t\t\t    </div>
\t\t\t    <div class=\"error\"></div>
\t\t      </div>
\t\t  </form>
\t      <div class=\"modal-footer\">
\t        <button type=\"button\" class=\"btn btn-default button\" data-dismiss=\"modal\">";
            // line 195
            echo (isset($context["text_close"]) ? $context["text_close"] : null);
            echo "</button>
\t        <button type=\"button\" class=\"btn btn-primary button\" id=\"send-mail\">";
            // line 196
            echo (isset($context["text_send"]) ? $context["text_send"] : null);
            echo "</button>
\t      </div>
\t    </div><!-- /.modal-content -->
\t  </div><!-- /.modal-dialog -->
\t</div><!-- /.modal -->";
        }
        // line 202
        echo "
<div class=\"modal fade\" id=\"myModal-notification\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">";
        // line 207
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</span></button>
\t\t\t\t<h3 class=\"modal-title\">";
        // line 208
        echo "Hi ";
        if ($this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "firstname", array(), "array", true, true)) {
            echo $this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "firstname", array(), "array");
        }
        if ($this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "lastname", array(), "array", true, true)) {
            echo $this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "lastname", array(), "array");
        }
        echo "</h3>
\t\t\t</div>

\t\t\t<div class=\"modal-body\">";
        // line 212
        if ((array_key_exists("seller_notifications", $context) && (isset($context["seller_notifications"]) ? $context["seller_notifications"] : null))) {
            // line 213
            echo "\t\t\t    <div class=\"form-group\">
\t\t\t      <ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t        <li class=\"dropdown-header\" style=\"font-size:15px;\"><b>";
            // line 215
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</b></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 216
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\"><span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            echo (isset($context["processing_status_total"]) ? $context["processing_status_total"] : null);
            echo "</span>";
            echo (isset($context["text_processing_status"]) ? $context["text_processing_status"] : null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\"><a href=\"";
            // line 217
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\"><span class=\"label label-success\" style=\"margin-right: 5px;\">";
            echo (isset($context["complete_status_total"]) ? $context["complete_status_total"] : null);
            echo "</span>";
            echo (isset($context["text_complete_status"]) ? $context["text_complete_status"] : null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 218
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\"><span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            echo (isset($context["return_total"]) ? $context["return_total"] : null);
            echo "</span>";
            echo (isset($context["text_return"]) ? $context["text_return"] : null);
            echo "</a></li>
\t\t\t      </ul>";
            // line 220
            if ((array_key_exists("seller_notifications", $context) && (isset($context["seller_notifications"]) ? $context["seller_notifications"] : null))) {
                // line 221
                echo "\t\t\t        <ul>";
                // line 222
                if ((array_key_exists("seller_notifications", $context) && (isset($context["seller_notifications"]) ? $context["seller_notifications"] : null))) {
                    // line 223
                    echo "\t\t\t            <li>";
                    echo (isset($context["seller_notification"]) ? $context["seller_notification"] : null);
                    echo "</li>";
                }
                // line 225
                echo "\t\t\t          <li style=\"display: block; overflow: auto;\"><a href=\"";
                echo (isset($context["view_all"]) ? $context["view_all"] : null);
                echo "\">";
                echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
                echo "</a></li>
\t\t\t        </ul>";
            }
            // line 228
            echo "\t\t\t    </div>
\t\t\t    <hr/>";
        }
        // line 231
        if ((array_key_exists("seller_product_reviews", $context) && (isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null))) {
            // line 232
            echo "\t\t\t    <div class=\"form-group\">
\t\t\t      <ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t        <li class=\"dropdown-header\" style=\"font-size:15px;\"><b>";
            // line 234
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</b></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 235
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\"><span class=\"label label-warning\" style=\"margin-right: 5px;\">";
            echo (isset($context["product_stock_total"]) ? $context["product_stock_total"] : null);
            echo "</span>";
            echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;\"><a href=\"";
            // line 236
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\"><span class=\"label label-success\" style=\"margin-right: 5px;\">";
            echo (isset($context["review_total"]) ? $context["review_total"] : null);
            echo "</span>";
            echo (isset($context["text_entry_review"]) ? $context["text_entry_review"] : null);
            echo "</a></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-top:5px;\"><a href=\"";
            // line 237
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\"><span class=\"label label-danger\" style=\"margin-right: 5px;\">";
            echo (isset($context["approval_total"]) ? $context["approval_total"] : null);
            echo "</span>";
            echo (isset($context["text_approval"]) ? $context["text_approval"] : null);
            echo "</a></li>
\t\t\t      </ul>";
            // line 239
            if ((array_key_exists("seller_product_reviews", $context) && (isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null))) {
                // line 240
                echo "\t\t\t        <ul>";
                // line 241
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_product_review"]) {
                    // line 242
                    echo "\t\t\t            <li>";
                    echo $context["seller_product_review"];
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_product_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 244
                echo "\t\t\t          <li style=\"display: block; overflow: auto;\"><a href=\"";
                echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=product");
                echo "\">";
                echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
                echo "</a></li>
\t\t\t        </ul>";
            }
            // line 247
            echo "\t\t\t    </div>
\t\t\t    <hr/>";
        }
        // line 250
        if ((array_key_exists("seller_reviews", $context) && (isset($context["seller_reviews"]) ? $context["seller_reviews"] : null))) {
            // line 251
            echo "\t\t\t    <div class=\"form-group\">
\t\t\t      <ul style=\"display:inline-flex;margin-left:-8%;\">
\t\t\t        <li class=\"dropdown-header\" style=\"font-size:15px;\"><b>";
            // line 253
            echo (isset($context["text_entry_seller"]) ? $context["text_entry_seller"] : null);
            echo "</b></li>
\t\t\t        <li style=\"display: block; overflow: auto;margin-right:40px;margin-top:5px;\"><a href=\"";
            // line 254
            echo (isset($context["view_all"]) ? $context["view_all"] : null);
            echo "\"><span class=\"label label-success\" style=\"margin-right: 5px;\">";
            echo (isset($context["seller_review_total"]) ? $context["seller_review_total"] : null);
            echo "</span>";
            echo (isset($context["text_entry_review"]) ? $context["text_entry_review"] : null);
            echo "</a></li>
\t\t\t      </ul>";
            // line 256
            if ((array_key_exists("seller_reviews", $context) && (isset($context["seller_reviews"]) ? $context["seller_reviews"] : null))) {
                // line 257
                echo "\t\t\t        <ul>";
                // line 258
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["seller_reviews"]) ? $context["seller_reviews"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["seller_review"]) {
                    // line 259
                    echo "\t\t\t            <li>";
                    echo $context["seller_review"];
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seller_review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 261
                echo "\t\t\t          <li style=\"display: block; overflow: auto;\"><a href=\"";
                echo ((isset($context["view_all"]) ? $context["view_all"] : null) . "&tab=seller");
                echo "\">";
                echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
                echo "</a></li>
\t\t\t        </ul>";
            }
            // line 264
            echo "\t\t\t    </div>";
        }
        // line 266
        if (((( !array_key_exists("seller_notifications", $context) &&  !array_key_exists("seller_product_reviews", $context)) &&  !array_key_exists("seller_reviews", $context)) || (( !(isset($context["seller_notifications"]) ? $context["seller_notifications"] : null) &&  !(isset($context["seller_product_reviews"]) ? $context["seller_product_reviews"] : null)) &&  !(isset($context["seller_reviews"]) ? $context["seller_reviews"] : null)))) {
            // line 267
            echo "\t\t\t    <center><h4>";
            echo (isset($context["text_no_notification"]) ? $context["text_no_notification"] : null);
            echo "</h4></center>";
        }
        // line 269
        echo "\t\t\t</div>

\t\t\t<div class=\"modal-footer\">
\t\t\t\t<a href=\"";
        // line 272
        echo (isset($context["view_all"]) ? $context["view_all"] : null);
        echo "\" class=\"btn btn-primary button\" style=\"color:white;\">";
        echo (isset($context["text_view_all_notificatins"]) ? $context["text_view_all_notificatins"] : null);
        echo "</a>
\t\t\t\t<button type=\"button\" class=\"btn btn-default button\" data-dismiss=\"modal\">";
        // line 273
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div><!-- /.modal-content -->
\t</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<style type=\"text/css\">
\t.sellerBackground {";
        // line 281
        if (($this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "backgroundcolor", array(), "array", true, true) && $this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "backgroundcolor", array(), "array"))) {
            // line 282
            echo "\t\t\tbackground-color:";
            echo $this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "backgroundcolor", array(), "array");
            echo ";";
        } else {
            // line 284
            echo "\t\t\tbackground-color: #FF4D45;";
        }
        // line 286
        echo "\t\theight: 200px;
\t\ttext-align: center;
\t}
\t.seller_detail_stripe {
\t\tbackground-color: rgba(255, 255, 255, 0.1);
\t\tbox-shadow: 0 0 1px 1px rgba(255, 255, 255, 0.2);
\t\theight: 30px;
\t\tmargin-top: 5px;
\t\twidth: 100%;
\t}
\t.seller_detail_stripe p {
\t\tcolor: #fff;
\t    font-size: 18px;
\t    line-height: 30px;
\t}
\t.seller-dp {
\t\theight: 100px;
\t\tmargin-top: 35px;
\t}
</style>

\t<div class=\"modal fade\" id=\"myModal-seller-info\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t  \t<div class=\"modal-dialog\">
\t    \t<div class=\"modal-content\" style=\"border-radius:0px\">
\t      \t\t<div class=\"modal-body\" style=\"padding-top:0px\">";
        // line 311
        if ((((array_key_exists("launchModal", $context) && (isset($context["launchModal"]) ? $context["launchModal"] : null)) && array_key_exists("sellerProfile", $context)) && (isset($context["sellerProfile"]) ? $context["sellerProfile"] : null))) {
            // line 312
            echo "\t\t\t   \t\t<div class=\"row\">
\t\t\t    \t\t<div class=\"col-sm-12 sellerBackground\">
\t\t\t    \t\t\t<div class=\"seller-dp\">
\t\t\t    \t\t\t\t<img src=\"";
            // line 315
            echo $this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "avatar", array(), "array");
            echo "\"/>
\t\t\t    \t\t\t</div>
\t\t\t    \t\t\t<div class=\"seller_detail_stripe\">
\t\t\t    \t\t\t\t<p>";
            // line 319
            echo ((((isset($context["text_welcome"]) ? $context["text_welcome"] : null) . $this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "firstname", array(), "array")) . " ") . $this->getAttribute((isset($context["sellerProfile"]) ? $context["sellerProfile"] : null), "lastname", array(), "array"));
            echo "
\t\t\t    \t\t\t\t</p>
\t\t\t    \t\t\t</div>
\t\t\t    \t\t</div>
\t\t\t    \t</div>";
        }
        // line 325
        echo "\t\t    \t\t<div class=\"row\">
\t\t      \t\t\t<div class=\"col-sm-12\">";
        // line 327
        if (($this->getAttribute((isset($context["lowStockProducts"]) ? $context["lowStockProducts"] : null), "products", array(), "array", true, true) && $this->getAttribute((isset($context["lowStockProducts"]) ? $context["lowStockProducts"] : null), "products", array(), "array"))) {
            // line 328
            echo "\t\t      \t\t\t\t<h1 class=\"heading-title\">";
            echo (isset($context["text_low_stock"]) ? $context["text_low_stock"] : null);
            echo "</h1>
\t\t\t      \t\t\t<div class=\"table-responsive\">
\t\t\t      \t\t\t\t<table class=\"table table-bordered table-hover list\">
\t\t\t\t      \t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 333
            echo (isset($context["text_productname"]) ? $context["text_productname"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 334
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
            // line 335
            echo (isset($context["text_quantity"]) ? $context["text_quantity"] : null);
            echo "</td>
\t\t\t\t      \t\t\t\t\t</tr>
\t\t\t\t      \t\t\t\t</thead>
\t\t\t\t      \t\t\t\t<tbody>";
            // line 339
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["lowStockProducts"]) ? $context["lowStockProducts"] : null), "products", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["lowStockProduct"]) {
                // line 340
                echo "\t\t\t      \t\t\t\t\t\t<tr>
\t\t\t      \t\t\t\t\t\t\t<td>";
                // line 342
                echo $this->getAttribute($context["lowStockProduct"], "name", array(), "array");
                echo "
\t\t\t      \t\t\t\t\t\t\t</td>
\t\t\t      \t\t\t\t\t\t\t<td>";
                // line 345
                echo $this->getAttribute($context["lowStockProduct"], "model", array(), "array");
                echo "
\t\t\t      \t\t\t\t\t\t\t</td>
\t\t\t      \t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 348
                echo $this->getAttribute($context["lowStockProduct"], "quantity", array(), "array");
                echo "
\t\t\t      \t\t\t\t\t\t\t</td>
\t\t\t      \t\t\t\t\t\t</tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lowStockProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            if ((array_key_exists("totalProductsLowStock", $context) && ((isset($context["totalProductsLowStock"]) ? $context["totalProductsLowStock"] : null) > 5))) {
                // line 353
                echo "\t\t\t\t      \t\t\t\t\t<tr>
\t\t\t\t      \t\t\t\t\t\t<td colspan=\"3\">
\t\t\t\t      \t\t\t\t\t\t\t<a href=\"";
                // line 355
                echo (isset($context["moreProductUrl"]) ? $context["moreProductUrl"] : null);
                echo "\" class=\"button\">
\t\t\t\t      \t\t\t\t\t\t\t\tmore
\t\t\t\t      \t\t\t\t\t\t\t</a>
\t\t\t\t      \t\t\t\t\t\t</td>
\t\t\t\t      \t\t\t\t\t</tr>";
            }
            // line 361
            echo "\t\t\t      \t\t\t\t\t</tbody>
\t\t\t      \t\t\t\t</table>
\t\t\t      \t\t\t</div> <!-- table responsive -->";
        }
        // line 365
        echo "\t      \t\t\t\t    <h1 class=\"heading-title\">";
        echo (isset($context["text_most_viewed"]) ? $context["text_most_viewed"] : null);
        echo "</h1>
\t\t      \t\t\t\t<div class=\"table-responsive\">
\t\t      \t\t\t\t\t<table class=\"table table-bordered table-hover list\">
\t\t\t      \t\t\t\t\t<thead>
\t\t\t\t      \t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 370
        echo (isset($context["text_productname"]) ? $context["text_productname"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 371
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 372
        echo (isset($context["text_views"]) ? $context["text_views"] : null);
        echo "</td>
\t\t\t\t      \t\t\t\t\t</tr>
\t\t\t      \t\t\t\t\t</thead>
\t\t\t      \t\t\t\t\t<tbody>";
        // line 376
        if ((array_key_exists("mostViewedProducts", $context) && (isset($context["mostViewedProducts"]) ? $context["mostViewedProducts"] : null))) {
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mostViewedProducts"]) ? $context["mostViewedProducts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["mostViewedProduct"]) {
                // line 378
                echo "\t\t\t\t      \t\t\t\t\t\t\t<tr>
\t\t\t\t\t      \t\t\t\t\t\t\t<td>";
                // line 380
                echo $this->getAttribute($context["mostViewedProduct"], "name", array(), "array");
                echo "
\t\t\t\t\t      \t\t\t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t\t\t<td>";
                // line 383
                echo $this->getAttribute($context["mostViewedProduct"], "model", array(), "array");
                echo "
\t\t\t\t\t      \t\t\t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t\t\t<td class=\"text-right\">";
                // line 386
                echo $this->getAttribute($context["mostViewedProduct"], "viewed", array(), "array");
                echo "
\t\t\t\t\t      \t\t\t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t\t\t</tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mostViewedProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 391
            echo "\t\t\t\t\t      \t\t\t\t<tr>
\t\t\t\t\t      \t\t\t\t\t<td class=\"text-center\" colspan=\"3\">";
            // line 393
            echo (isset($context["text_more_work"]) ? $context["text_more_work"] : null);
            echo "
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t</tr>";
        }
        // line 397
        echo "\t\t      \t\t\t\t\t\t</tbody>
\t\t      \t\t\t\t\t</table>
\t\t      \t\t\t\t</div>
\t\t      \t\t\t</div> <!-- col-sm-12 -->
\t\t    \t\t</div> <!-- row -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t    <div class=\"pull-right\">
\t\t\t\t\t\t      \t<button type=\"button\" class=\"button\" data-dismiss=\"modal\">";
        // line 406
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "
\t\t\t\t\t\t      \t</button>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> <!-- row -->
\t      \t\t</div> <!-- modal-body -->
\t    \t</div> <!-- modal-content -->
\t\t</div> <!-- modal-dialog -->
\t</div> <!-- modal -->

<script>

var launchModal =";
        // line 418
        echo (((isset($context["launchModal"]) ? $context["launchModal"] : null)) ? ((isset($context["launchModal"]) ? $context["launchModal"] : null)) : (0));
        echo ";

\$(document).ready(function() {
\tif(launchModal && window.innerWidth > 767) {
\t\t\$('#myModal-seller-info').modal();
\t}
});";
        // line 427
        if (array_key_exists("partner", $context)) {
            // line 428
            echo "\$(document).ready(function(){
\tif(\$('#content').hasClass('col-sm-12')){
\t\t\$('.marketplace .row .product-seller').addClass('";
            // line 430
            echo (isset($context["addClass"]) ? $context["addClass"] : null);
            echo "');
\t}
});";
        }
        // line 435
        if (((isset($context["contact_mail"]) ? $context["contact_mail"] : null) && (isset($context["logged"]) ? $context["logged"] : null))) {
            // line 436
            echo "\$('#send-mail').on('click',function(){
\tf = 0;
\t\$('.alert').remove();
\t\$('#myModal-seller-mail input[type=\\'text\\'],#myModal-seller-mail textarea').each(function () {
\t\tif (\$(this).val() == '') {
\t\t\t\$(this).parent().addClass('has-error');
\t\t\tf++;
\t\t}else{
\t\t\t\$(this).parent().removeClass('has-error');
\t\t}
\t});

\tif (f > 0) {
\t\t\$('#myModal-seller-mail .error').text('";
            // line 449
            echo (isset($context["text_error_mail"]) ? $context["text_error_mail"] : null);
            echo "').slideDown('slow').delay(2000).slideUp('slow');
\t} else {
\t\t\$('#send-mail').addClass('disabled');
\t\t\$('#myModal-seller-mail').addClass('mail-procss');
\t\t\$('#myModal-seller-mail .modal-body').prepend('<div class=\"alert alert-success success\" style=\"width:95%;\"><i class=\"fa fa-check-circle\"></i>";
            // line 453
            echo (isset($context["text_success_mail"]) ? $context["text_success_mail"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\$.ajax({
\t\t\turl: '";
            // line 456
            echo (isset($context["send_mail"]) ? $context["send_mail"] : null);
            echo "',
\t\t\tdata: \$('#seller-mail-form').serialize()+'";
            // line 457
            echo (isset($context["mail_for"]) ? $context["mail_for"] : null);
            echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tcomplete: function () {
\t\t\t\t\$('#send-mail').removeClass('disabled');
\t\t\t\t\$('#myModal-seller-mail input,#myModal-seller-mail textarea').each(function () {
\t\t\t\t\tif(this.type != 'hidden'){
\t\t\t\t\t  \$(this).val('');
\t\t\t\t\t  \$(this).text('');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});
\t}
});";
        }
        // line 473
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/extension/module/marketplace.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  964 => 473,  946 => 457,  942 => 456,  936 => 453,  929 => 449,  914 => 436,  912 => 435,  906 => 430,  902 => 428,  900 => 427,  891 => 418,  876 => 406,  866 => 397,  860 => 393,  857 => 391,  847 => 386,  842 => 383,  837 => 380,  834 => 378,  830 => 377,  828 => 376,  822 => 372,  818 => 371,  814 => 370,  805 => 365,  800 => 361,  792 => 355,  788 => 353,  786 => 352,  777 => 348,  772 => 345,  767 => 342,  764 => 340,  760 => 339,  754 => 335,  750 => 334,  746 => 333,  737 => 328,  735 => 327,  732 => 325,  724 => 319,  718 => 315,  713 => 312,  711 => 311,  685 => 286,  682 => 284,  677 => 282,  675 => 281,  665 => 273,  659 => 272,  654 => 269,  649 => 267,  647 => 266,  644 => 264,  636 => 261,  628 => 259,  624 => 258,  622 => 257,  620 => 256,  612 => 254,  608 => 253,  604 => 251,  602 => 250,  598 => 247,  590 => 244,  582 => 242,  578 => 241,  576 => 240,  574 => 239,  566 => 237,  558 => 236,  550 => 235,  546 => 234,  542 => 232,  540 => 231,  536 => 228,  528 => 225,  523 => 223,  521 => 222,  519 => 221,  517 => 220,  509 => 218,  501 => 217,  493 => 216,  489 => 215,  485 => 213,  483 => 212,  471 => 208,  467 => 207,  460 => 202,  452 => 196,  448 => 195,  438 => 188,  434 => 186,  429 => 184,  427 => 183,  423 => 181,  414 => 175,  410 => 174,  404 => 169,  402 => 168,  400 => 167,  397 => 165,  381 => 158,  372 => 157,  363 => 154,  358 => 153,  343 => 150,  340 => 149,  338 => 148,  334 => 145,  331 => 143,  325 => 141,  323 => 140,  314 => 138,  311 => 136,  309 => 135,  307 => 134,  305 => 133,  302 => 131,  295 => 128,  292 => 126,  290 => 125,  286 => 124,  284 => 123,  282 => 122,  277 => 121,  265 => 118,  261 => 117,  258 => 116,  254 => 115,  252 => 114,  246 => 109,  241 => 107,  239 => 106,  233 => 105,  231 => 104,  228 => 102,  220 => 98,  217 => 97,  212 => 94,  209 => 93,  207 => 92,  205 => 90,  200 => 87,  196 => 86,  190 => 82,  184 => 81,  179 => 77,  172 => 74,  169 => 72,  167 => 71,  163 => 70,  159 => 67,  148 => 63,  145 => 62,  141 => 61,  137 => 60,  135 => 59,  128 => 55,  122 => 54,  111 => 51,  104 => 46,  102 => 45,  100 => 44,  97 => 42,  94 => 40,  87 => 39,  82 => 37,  79 => 36,  66 => 28,  62 => 27,  60 => 26,  55 => 23,  53 => 22,  51 => 21,  49 => 20,  45 => 19,  41 => 18,  39 => 17,  37 => 16,  34 => 14,  32 => 13,  19 => 1,);
    }
}
/* <link type="text/css" href="catalog/view/theme/journal2/stylesheet/MP/journal2.css" rel="stylesheet"  />*/
/* <style type="text/css">*/
/* 	.button-group {*/
/*     border-top: none;*/
/*     background-color: white;*/
/*     overflow: auto;*/
/*     text-align: center;*/
/*     width: 100%;*/
/* }*/
/* */
/* </style>*/
/* <div class="box">*/
/* {% if chkIsPartner is defined %}*/
/* 	<div class="box-content list-group">*/
/* 	<ul>*/
/* 		{% if chkIsPartner %}*/
/* 			{% if marketplace_account_menu_sequence is defined and marketplace_seller_mode is defined and marketplace_seller_mode %}*/
/* 					<div class="box-heading">{{ heading_title_mp }}</div>*/
/* 					{% for key, menu_option in marketplace_account_menu_sequence %}*/
/* 						{% if marketplace_allowed_account_menu is defined and marketplace_allowed_account_menu and key in marketplace_allowed_account_menu %}*/
/* 							{% if key == 'asktoadmin' %}*/
/* 								<li><a id="ask-to-admin" class="list-group-item"  data-toggle="modal" data-target="#myModal-seller-mail">*/
/* 									{{ menu_option}}*/
/* 								</a></li>*/
/* 							{% else %}*/
/* 								{% if account_menu_href[key] is defined and account_menu_href[key] %}*/
/* 									<li><a href="{{ account_menu_href[key] }}" class="list-group-item">*/
/* 										{{ menu_option}}*/
/* 									</a></li>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 			{% endif %}*/
/* 		{% else %}*/
/* 			<li>{% if hasApplied is defined and hasApplied %}*/
/*   <a class="list-group-item">{{ text_alreadyPartner }}</a>*/
/* {% else %}*/
/*   <a href="{{ want_partner}}" class="list-group-item">{{ text_becomePartner}}</a>*/
/* {% endif %}</li>*/
/* 		{% endif %}*/
/* 	</ul>*/
/* 	</div>*/
/* {% elseif partner is defined %}*/
/* 	{% set addClass = 'col-lg-3 col-md-3 col-sm-6' %}*/
/* 	<div class="row">*/
/*       <div class="product-layout product-grid col-xs-12">*/
/*         <div class="product-thumb product-wrapper">*/
/*           <br/>*/
/*           <div style="text-align: center;">            <br>*/
/*             <a href="{{ partner['sellerHref']}}"><img src="{{ partner['thumb']}}" alt="{{ partner['name']}}" title="{{ partner['name']}}" class="img-circle" style="box-shadow:0px 0px 5px 2px #f1f1f1;max-width:150px;"/></a>*/
/* */
/*             <h4 >*/
/*               {{ text_seller}}<span data-toggle="tooltip" title="{{ text_seller}}"><i class="fa fa-user"></i></span>*/
/*               <a href="{{ partner['sellerHref']}}">{{ displayName}}</a>*/
/*             </h4>*/
/*             <br>*/
/* */
/* 						{% if informations is defined and informations %}*/
/* 						  <h4 style="margin-bottom: 0px;margin-top: 5px;font-size: 13px;"><b>{{ text_seller_information }}</b></h4>*/
/* 						  {% for information in informations %}*/
/* 						    <div class="text-container">*/
/* 						      <a href="{{ information['href'] }}" target="_blank">{{ information['title'] }}</a>*/
/* 						    </div>*/
/* 						  {% endfor %}*/
/* 						{% endif %}*/
/* */
/*             <div class="rating">*/
/* 	            <p>*/
/* 	              {% for i in 1..5 %}*/
/* 								{% if partner['feedback_total'] < i %}*/
/* 									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 								{% else %}*/
/* 									<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 	            </p>*/
/* 	        </div>*/
/* 	        <br>*/
/*             <p>*/
/*               {{ text_from}}<span data-toggle="tooltip" title="{{ text_from}}"><i class="fa fa-home"></i></span>*/
/*               <b>{{ partner['country']}}</b>*/
/*             </p>*/
/*             <br>*/
/*             <p>*/
/*               {{ text_total_products}}*/
/*               <b>{{ partner['total_products']}}</b>*/
/*             </p>*/
/*             <br>*/
/*             {% if contact_mail %}*/
/* */
/*             {% if logged %}*/
/*             <p>*/
/*             	<button class="btn btn-primary button" data-toggle="modal" data-target="#myModal-seller-mail">{{ text_ask_seller}}</button>*/
/*         	</p>*/
/*         	{% else %}*/
/*             <p>*/
/*             	<button class="btn btn-primary button" onclick="window.location.href='{{ redirect_user}}'">{{ text_ask_seller}}</button>*/
/*         	</p>*/
/*         	{% endif %}*/
/*         	{% endif %}*/
/*             <br>*/
/*             <p>*/
/* 							{% if show_seller_product is defined and not show_seller_product %}*/
/*               	<a href="{{ collectionHref}}">{{ text_latest_product}}</a>*/
/* 							{% elseif latest|length > 2 %}*/
/*               	<b>{{ text_latest_product}}<i class="fa fa-arrow-down"></i> </b>*/
/*               {% endif %}*/
/*             </p>            <br>*/
/*           </div>*/
/* */
/*         </div>*/
/*       </div>*/
/* 			{% if show_seller_product is defined and show_seller_product %}*/
/* 	      {% for product in latest %}*/
/* 					<div class="product-grid-item xs-100 sm-100 md-100 lg-100 xl-100 display-both block-button">*/
/* 		        <div class="product-thumb product-wrapper" id="{{ product['product_id']}}" style="margin-right:0px;">*/
/* 	          <div class="image" style="margin-right: 0px;"><a href="{{ product['href']}}"><center><img src="{{ product['thumb']}}" alt="{{ product['name']}}" title="{{ product['name']}}" class="img-responsive" style="max-width:150px;" /></center></a></div>*/
/* 	          <div >*/
/* 	            <div class="caption" style="text-align:center;">*/
/* 	                <h4><a href="{{ product['href']}}">{{ product['name']}}</a></h4>*/
/* 	                {% if product['rating'] %}*/
/* 	                <div class="rating">*/
/* 										{% for i in 1..5 %}*/
/* 											{% if product['rating'] < i %}*/
/* 			                	<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			                {% else %}*/
/* 			                	<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/* 			                {% endif %}*/
/* 		                {% endfor %}*/
/* 	                </div>*/
/* 	                {% endif %}*/
/* 	                {% if product['price'] %}*/
/* 	                <p class="price">*/
/* 	                  {% if not product['special'] %}*/
/* 	                  {{ product['price']}}*/
/* 	                  {% else %}*/
/* 	                  <span class="price-old">{{ product['price']}}</span> <span class="price-new" {{ product['date_end'] is defined and product['date_end'] ? "data-end-date=" ~ product['date_end'] : "" }}>{{ product['special']}}</span>*/
/* 	                  {% endif %}*/
/* 	                  {% if product['tax'] %}*/
/* 	                  <span class="price-tax">{{ text_tax}} {{ product['tax']}}</span>*/
/* 	                  {% endif %}*/
/* 	                </p>*/
/* 	                {% endif %}*/
/*               </div>*/
/* */
/* 	           <div class="button-group">*/
/* 							 {% if staticCall('Journal2Utils', 'isEnquiryProduct', [this, product['product_id']]) %}*/
/*                 <div class="cart enquiry-button">*/
/*                   <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                 </div>*/
/*                 {% else %}*/
/*                 <div class="cart {{ product['labels'] is defined and product['labels'] is iterable and product['labels']['outofstock'] is defined ? 'outofstock' : '' }}">*/
/*                   <a onclick="addToCart('{{ product['product_id']}}');" class="button hint--top" data-hint="{{ button_cart}}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart}}</span><i class="button-right-icon"></i></a>*/
/*                 </div>*/
/*                 {% endif %}*/
/*                 <div class="wishlist"><a onclick="addToWishList('{{ product['product_id']}}');" class="hint--top" data-hint="{{ button_wishlist}}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist}}</span></a></div>*/
/*                 <div class="compare"><a onclick="addToCompare('{{ product['product_id']}}');" class="hint--top" data-hint="{{ button_compare}}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare}}</span></a></div>*/
/*               </div>*/
/* 	          </div>*/
/* 	        </div>*/
/* 	      </div>*/
/* 	      {% endfor %}*/
/* 	    {% endif %}*/
/*     </div>*/
/* {% endif %}*/
/* </div>*/
/* {% if contact_mail and logged %}*/
/* 	<div class="modal fade" id="myModal-seller-mail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	  <div class="modal-dialog">*/
/* 	    <div class="modal-content">*/
/* 	      <div class="modal-header">*/
/* 	        <h2>*/
/* 						{{ text_ask_question}}*/
/* 						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{{ text_close}}</span></button>*/
/* 					</h2>*/
/* 	      </div>*/
/* 	      <form id="seller-mail-form">*/
/* 		      <div class="modal-body">*/
/* 		      	<div class="form-group required" style="width:97%;">*/
/* 			        <label class="control-label" for="input-subject">{{ text_subject}}</label>*/
/* 			        <input type="text" name="subject" id="input-subject" class="form-control" />*/
/* 			        {% if partner is defined %}*/
/* 			        	<input type="hidden" name="seller" value="{{ seller_id}}"/>*/
/* 			        {% endif %}*/
/* 			    </div>*/
/* 				<div class="form-group required" style="width:97%;">*/
/* 			        <label class="control-label" for="input-message">{{ text_ask}}</label>*/
/* 					<textarea class="form-control" name="message" rows="3" id="input-message"></textarea>*/
/* 			    </div>*/
/* 			    <div class="error"></div>*/
/* 		      </div>*/
/* 		  </form>*/
/* 	      <div class="modal-footer">*/
/* 	        <button type="button" class="btn btn-default button" data-dismiss="modal">{{ text_close}}</button>*/
/* 	        <button type="button" class="btn btn-primary button" id="send-mail">{{ text_send}}</button>*/
/* 	      </div>*/
/* 	    </div><!-- /.modal-content -->*/
/* 	  </div><!-- /.modal-dialog -->*/
/* 	</div><!-- /.modal -->*/
/* {% endif %}*/
/* */
/* <div class="modal fade" id="myModal-notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	<div class="modal-dialog">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{{ text_close}}</span></button>*/
/* 				<h3 class="modal-title">{{ 'Hi ' }}{%if sellerProfile['firstname'] is defined %}{{ sellerProfile['firstname'] }}{%endif %} {% if sellerProfile['lastname'] is defined %}{{ sellerProfile['lastname'] }}{%endif %}</h3>*/
/* 			</div>*/
/* */
/* 			<div class="modal-body">*/
/* 			  {% if seller_notifications is defined and seller_notifications %}*/
/* 			    <div class="form-group">*/
/* 			      <ul style="display:inline-flex;margin-left:-8%;">*/
/* 			        <li class="dropdown-header" style="font-size:15px;"><b>{{ text_order}}</b></li>*/
/* 			        <li style="display: block; overflow: auto;margin-top:5px;"><a href="{{ view_all}}"><span class="label label-warning" style="margin-right: 5px;">{{ processing_status_total}}</span>{{ text_processing_status}}</a></li>*/
/* 			        <li style="display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;"><a href="{{ view_all}}"><span class="label label-success" style="margin-right: 5px;">{{ complete_status_total}}</span>{{ text_complete_status}}</a></li>*/
/* 			        <li style="display: block; overflow: auto;margin-top:5px;"><a href="{{ view_all}}"><span class="label label-danger" style="margin-right: 5px;">{{ return_total}}</span>{{ text_return}}</a></li>*/
/* 			      </ul>*/
/* 			      {% if seller_notifications is defined and seller_notifications %}*/
/* 			        <ul>*/
/* 			          {% if seller_notifications is defined and seller_notifications %}*/
/* 			            <li>{{ seller_notification}}</li>*/
/* 			          {% endif %}*/
/* 			          <li style="display: block; overflow: auto;"><a href="{{ view_all}}">{{ text_view_all}}</a></li>*/
/* 			        </ul>*/
/* 			      {% endif %}*/
/* 			    </div>*/
/* 			    <hr/>*/
/* 			  {% endif %}*/
/* 			  {% if seller_product_reviews is defined and seller_product_reviews %}*/
/* 			    <div class="form-group">*/
/* 			      <ul style="display:inline-flex;margin-left:-8%;">*/
/* 			        <li class="dropdown-header" style="font-size:15px;"><b>{{ text_product}}</b></li>*/
/* 			        <li style="display: block; overflow: auto;margin-top:5px;"><a href="{{ view_all}}"><span class="label label-warning" style="margin-right: 5px;">{{ product_stock_total}}</span>{{ text_stock}}</a></li>*/
/* 			        <li style="display: block; overflow: auto;margin-left:40px;margin-right:40px;margin-top:5px;"><a href="{{ view_all}}"><span class="label label-success" style="margin-right: 5px;">{{ review_total}}</span>{{ text_entry_review}}</a></li>*/
/* 			        <li style="display: block; overflow: auto;margin-top:5px;"><a href="{{ view_all}}"><span class="label label-danger" style="margin-right: 5px;">{{ approval_total}}</span>{{ text_approval}}</a></li>*/
/* 			      </ul>*/
/* 			      {% if seller_product_reviews is defined and seller_product_reviews %}*/
/* 			        <ul>*/
/* 			          {% for seller_product_review in seller_product_reviews %}*/
/* 			            <li>{{ seller_product_review}}</li>*/
/* 			          {% endfor %}*/
/* 			          <li style="display: block; overflow: auto;"><a href="{{ view_all ~ '&tab=product'}}">{{ text_view_all}}</a></li>*/
/* 			        </ul>*/
/* 			      {% endif %}*/
/* 			    </div>*/
/* 			    <hr/>*/
/* 			  {% endif %}*/
/* 			  {% if seller_reviews is defined and seller_reviews %}*/
/* 			    <div class="form-group">*/
/* 			      <ul style="display:inline-flex;margin-left:-8%;">*/
/* 			        <li class="dropdown-header" style="font-size:15px;"><b>{{ text_entry_seller}}</b></li>*/
/* 			        <li style="display: block; overflow: auto;margin-right:40px;margin-top:5px;"><a href="{{ view_all}}"><span class="label label-success" style="margin-right: 5px;">{{ seller_review_total}}</span>{{ text_entry_review}}</a></li>*/
/* 			      </ul>*/
/* 			      {% if seller_reviews is defined and seller_reviews %}*/
/* 			        <ul>*/
/* 			          {% for seller_review in seller_reviews %}*/
/* 			            <li>{{ seller_review}}</li>*/
/* 			          {% endfor %}*/
/* 			          <li style="display: block; overflow: auto;"><a href="{{ view_all ~ '&tab=seller'}}">{{ text_view_all}}</a></li>*/
/* 			        </ul>*/
/* 			      {% endif %}*/
/* 			    </div>*/
/* 			  {% endif %}*/
/* 			  {% if (seller_notifications is not defined and seller_product_reviews is not defined and seller_reviews is not defined) or ( not seller_notifications and not seller_product_reviews and not seller_reviews ) %}*/
/* 			    <center><h4>{{ text_no_notification}}</h4></center>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* */
/* 			<div class="modal-footer">*/
/* 				<a href="{{ view_all}}" class="btn btn-primary button" style="color:white;">{{ text_view_all_notificatins}}</a>*/
/* 				<button type="button" class="btn btn-default button" data-dismiss="modal">{{ text_close}}</button>*/
/* 			</div>*/
/* 		</div><!-- /.modal-content -->*/
/* 	</div><!-- /.modal-dialog -->*/
/* </div><!-- /.modal -->*/
/* */
/* <style type="text/css">*/
/* 	.sellerBackground {*/
/* 		{% if sellerProfile['backgroundcolor'] is defined and sellerProfile['backgroundcolor'] %}*/
/* 			background-color: {{ sellerProfile['backgroundcolor']}};*/
/* 		{% else %}*/
/* 			background-color: #FF4D45;*/
/* 		{% endif %}*/
/* 		height: 200px;*/
/* 		text-align: center;*/
/* 	}*/
/* 	.seller_detail_stripe {*/
/* 		background-color: rgba(255, 255, 255, 0.1);*/
/* 		box-shadow: 0 0 1px 1px rgba(255, 255, 255, 0.2);*/
/* 		height: 30px;*/
/* 		margin-top: 5px;*/
/* 		width: 100%;*/
/* 	}*/
/* 	.seller_detail_stripe p {*/
/* 		color: #fff;*/
/* 	    font-size: 18px;*/
/* 	    line-height: 30px;*/
/* 	}*/
/* 	.seller-dp {*/
/* 		height: 100px;*/
/* 		margin-top: 35px;*/
/* 	}*/
/* </style>*/
/* */
/* 	<div class="modal fade" id="myModal-seller-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	  	<div class="modal-dialog">*/
/* 	    	<div class="modal-content" style="border-radius:0px">*/
/* 	      		<div class="modal-body" style="padding-top:0px">*/
/* 				{% if launchModal is defined and launchModal and sellerProfile is defined and sellerProfile %}*/
/* 			   		<div class="row">*/
/* 			    		<div class="col-sm-12 sellerBackground">*/
/* 			    			<div class="seller-dp">*/
/* 			    				<img src="{{ sellerProfile['avatar']}}"/>*/
/* 			    			</div>*/
/* 			    			<div class="seller_detail_stripe">*/
/* 			    				<p>*/
/* 			    					{{ text_welcome ~ sellerProfile['firstname'] ~ ' ' ~ sellerProfile['lastname']}}*/
/* 			    				</p>*/
/* 			    			</div>*/
/* 			    		</div>*/
/* 			    	</div>*/
/* 				{% endif %}*/
/* 		    		<div class="row">*/
/* 		      			<div class="col-sm-12">*/
/* 		      				{% if lowStockProducts['products'] is defined and lowStockProducts['products'] %}*/
/* 		      				<h1 class="heading-title">{{ text_low_stock}}</h1>*/
/* 			      			<div class="table-responsive">*/
/* 			      				<table class="table table-bordered table-hover list">*/
/* 				      				<thead>*/
/* 										<tr>*/
/* 											<td class="text-left">{{ text_productname}}</td>*/
/* 											<td class="text-left">{{ text_model}}</td>*/
/* 											<td class="text-right">{{ text_quantity}}</td>*/
/* 				      					</tr>*/
/* 				      				</thead>*/
/* 				      				<tbody>*/
/* 			      					{% for lowStockProduct in lowStockProducts['products'] %}*/
/* 			      						<tr>*/
/* 			      							<td>*/
/* 			      								{{ lowStockProduct['name']}}*/
/* 			      							</td>*/
/* 			      							<td>*/
/* 			      								{{ lowStockProduct['model']}}*/
/* 			      							</td>*/
/* 			      							<td class="text-right">*/
/* 			      								{{ lowStockProduct['quantity']}}*/
/* 			      							</td>*/
/* 			      						</tr>*/
/* 			      					{% endfor %}*/
/* 			      					{% if totalProductsLowStock is defined and totalProductsLowStock > 5 %}*/
/* 				      					<tr>*/
/* 				      						<td colspan="3">*/
/* 				      							<a href="{{ moreProductUrl}}" class="button">*/
/* 				      								more*/
/* 				      							</a>*/
/* 				      						</td>*/
/* 				      					</tr>*/
/* 				      				{% endif %}*/
/* 			      					</tbody>*/
/* 			      				</table>*/
/* 			      			</div> <!-- table responsive -->*/
/* 				    		{% endif %}*/
/* 	      				    <h1 class="heading-title">{{ text_most_viewed}}</h1>*/
/* 		      				<div class="table-responsive">*/
/* 		      					<table class="table table-bordered table-hover list">*/
/* 			      					<thead>*/
/* 				      					<tr>*/
/* 											<td class="text-left">{{ text_productname}}</td>*/
/* 											<td class="text-left">{{ text_model}}</td>*/
/* 											<td class="text-right">{{ text_views}}</td>*/
/* 				      					</tr>*/
/* 			      					</thead>*/
/* 			      					<tbody>*/
/* 												{% if mostViewedProducts is defined and mostViewedProducts %}*/
/* 													{% for mostViewedProduct in mostViewedProducts %}*/
/* 				      							<tr>*/
/* 					      							<td>*/
/* 					      								{{ mostViewedProduct['name']}}*/
/* 					      							</td>*/
/* 					      							<td>*/
/* 					      								{{ mostViewedProduct['model']}}*/
/* 					      							</td>*/
/* 					      							<td class="text-right">*/
/* 					      								{{ mostViewedProduct['viewed']}}*/
/* 					      							</td>*/
/* 					      						</tr>*/
/* 		      							{% endfor %}*/
/* 		      						{% else %}*/
/* 					      				<tr>*/
/* 					      					<td class="text-center" colspan="3">*/
/* 					      						{{ text_more_work}}*/
/* 					      					</td>*/
/* 					      				</tr>*/
/* 		      						{% endif %}*/
/* 		      						</tbody>*/
/* 		      					</table>*/
/* 		      				</div>*/
/* 		      			</div> <!-- col-sm-12 -->*/
/* 		    		</div> <!-- row -->*/
/* 					<div class="row">*/
/* 						<div class="col-sm-12">*/
/* 						    <div class="pull-right">*/
/* 						      	<button type="button" class="button" data-dismiss="modal">*/
/* 						      		{{ text_close}}*/
/* 						      	</button>*/
/* 						    </div>*/
/* 						</div>*/
/* 					</div> <!-- row -->*/
/* 	      		</div> <!-- modal-body -->*/
/* 	    	</div> <!-- modal-content -->*/
/* 		</div> <!-- modal-dialog -->*/
/* 	</div> <!-- modal -->*/
/* */
/* <script>*/
/* */
/* var launchModal =  {{ launchModal ? launchModal : 0 }};*/
/* */
/* $(document).ready(function() {*/
/* 	if(launchModal && window.innerWidth > 767) {*/
/* 		$('#myModal-seller-info').modal();*/
/* 	}*/
/* });*/
/* */
/* */
/* {% if partner is defined %}*/
/* $(document).ready(function(){*/
/* 	if($('#content').hasClass('col-sm-12')){*/
/* 		$('.marketplace .row .product-seller').addClass('{{ addClass}}');*/
/* 	}*/
/* });*/
/* {% endif %}*/
/* */
/* {% if contact_mail and logged %}*/
/* $('#send-mail').on('click',function(){*/
/* 	f = 0;*/
/* 	$('.alert').remove();*/
/* 	$('#myModal-seller-mail input[type=\'text\'],#myModal-seller-mail textarea').each(function () {*/
/* 		if ($(this).val() == '') {*/
/* 			$(this).parent().addClass('has-error');*/
/* 			f++;*/
/* 		}else{*/
/* 			$(this).parent().removeClass('has-error');*/
/* 		}*/
/* 	});*/
/* */
/* 	if (f > 0) {*/
/* 		$('#myModal-seller-mail .error').text('{{ text_error_mail}}').slideDown('slow').delay(2000).slideUp('slow');*/
/* 	} else {*/
/* 		$('#send-mail').addClass('disabled');*/
/* 		$('#myModal-seller-mail').addClass('mail-procss');*/
/* 		$('#myModal-seller-mail .modal-body').prepend('<div class="alert alert-success success" style="width:95%;"><i class="fa fa-check-circle"></i> {{ text_success_mail}}<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 		$.ajax({*/
/* 			url: '{{ send_mail}}',*/
/* 			data: $('#seller-mail-form').serialize()+'{{ mail_for}}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			complete: function () {*/
/* 				$('#send-mail').removeClass('disabled');*/
/* 				$('#myModal-seller-mail input,#myModal-seller-mail textarea').each(function () {*/
/* 					if(this.type != 'hidden'){*/
/* 					  $(this).val('');*/
/* 					  $(this).text('');*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* {% endif %}*/
/* */
/* </script>*/
/* */
