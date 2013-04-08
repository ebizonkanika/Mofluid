<?php
// $Id: node-product.tpl.php,v 1.5 2010/09/17 21:36:06 eternalistic Exp $
global $base_url;
?>
<script type="text/javascript">
	// Popup window code
		function newPopup(url) {
		popupWindow = window.open(
		url,'popUpWindow','height=500,width=800,left=400,top=400,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
		}
</script>
<div id="node-<?php print $node->nid; ?>" class="node clear-block <?php print $node_classes; ?>">
  <div class="inner">
    <?php if ($page == 0): ?>
    <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
    <?php endif; ?>

    <?php if ($submitted): ?>
    <div class="meta">
      <span class="submitted"><?php print $submitted ?></span>
    </div>
    <?php endif; ?>

    <?php if ($node_top && !$teaser): ?>
    <div id="node-top" class="node-top row nested">
      <div id="node-top-inner" class="node-top-inner inner">
        <?php print $node_top; ?>
      </div><!-- /node-top-inner -->
    </div><!-- /node-top -->
    <?php endif; ?>

    <div id="product-group" class="product-group">
      <div class="images">
        <?php print $fusion_uc_image; ?>
      </div><!-- /images -->

      <div class="content">
        <div id="content-body">
          <?php print $fusion_uc_body; ?>
        </div>
        <div id="pdt_review">
			<?php print $node->title;?>
			<a href="JavaScript:newPopup('<?php print $base_url.'/node/12';?>');"><?php print 'Product Review'?></a>
        </div>

        <?php $product_details = $fusion_uc_weight || $fusion_uc_dimensions || $fusion_uc_list_price || $fusion_uc_sell_price || $fusion_uc_model || $fusion_uc_cost; ?>
        <div id="product-details" class="clear<?php if (!$product_details): ?> field-group-empty<?php endif; ?>">
          <div id="field-group">
            <?php print $fusion_uc_weight; ?>
            <?php print $fusion_uc_dimensions; ?>
            <?php print $fusion_uc_model; ?>
            <?php print $fusion_uc_list_price; ?>
            <?php print $fusion_uc_sell_price; ?>
            <?php print $fusion_uc_cost; ?>
          </div>
		  <div id="">
			<?php print "Didn't find your size?";?> 
			<a href="JavaScript:newPopup('<?php print $base_url.'/node/9';?>');"><?php print 'ALERT ME'?></a>
			<?php print "In stock";?>
		  </div>
		  <div id="price-group">
            <?php print $fusion_uc_display_price; ?>
            <?php print $fusion_uc_add_to_cart; ?>
          </div>
        </div><!-- /product-details -->

        <?php if ($fusion_uc_additional && !$teaser): ?>
        <div id="product-additional" class="product-additional">
          <?php print $fusion_uc_additional; ?>
        </div>
        <?php endif; ?>

        <?php if ($terms): ?>
        <div class="terms">
          <?php print $terms; ?>
        </div>
        <?php endif;?>

        <?php if ($links && !$teaser): ?>
        <div class="links clear">
          <?php print $links; ?>
        </div>
        <?php endif; ?>
      </div><!-- /content -->
    </div><!-- /product-group -->
  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div>
