<?php
global $menu_items;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="main">
  <!-- Navigation -->
  <div class="navigation">
    <div class="container">
      <nav class="navbar">
        <a href="#">
          <svg class="site-logo" viewBox="0 0 135.813 16.8"><g fill="#fff"><path d="m780.908 815.968a6.139 6.139 0 0 1 4.581 1.837l1.04-1.04a7.5 7.5 0 0 0 -5.665-2.257 7.881 7.881 0 1 0 -.022 15.756 7.533 7.533 0 0 0 5.687-2.279l-1.04-1.04a6.076 6.076 0 0 1 -4.581 1.859 6.419 6.419 0 1 1 0-12.835z" transform="translate(-772.742 -813.711)"/><path d="m847.7 832.112a7.39 7.39 0 0 0 -4.735 1.571l.708 1.173a5.929 5.929 0 0 1 3.873-1.372c2.169 0 3.3 1.084 3.3 3.076v.708h-3.7c-3.342 0-4.492 1.5-4.492 3.3 0 2.014 1.615 3.386 4.248 3.386a4.371 4.371 0 0 0 4.006-1.925v1.814h1.5v-7.214c.007-3.012-1.697-4.517-4.708-4.517zm3.142 8.232a3.724 3.724 0 0 1 -3.7 2.368c-1.859 0-2.943-.841-2.943-2.191 0-1.195.73-2.08 2.987-2.08h3.651z" transform="translate(-827.188 -827.421)"/><path d="m898.058 835.387c0-1.106.93-1.925 3.032-1.925a5.968 5.968 0 0 1 3.43 1l.686-1.261a7.888 7.888 0 0 0 -4.116-1.084c-2.965 0-4.6 1.416-4.6 3.319 0 4.6 7.546 2.213 7.546 5.245 0 1.151-.907 1.9-3.12 1.9a7.031 7.031 0 0 1 -4.138-1.306l-.708 1.239a7.777 7.777 0 0 0 4.736 1.438c3.031 0 4.8-1.306 4.8-3.319-.006-4.471-7.548-2.104-7.548-5.246z" transform="translate(-868.782 -827.421)"/><path d="m948.9 810.907a1.118 1.118 0 1 0 1.151 1.085 1.116 1.116 0 0 0 -1.151-1.085z" transform="translate(-909.029 -810.907)"/><path d="m39.073 4.78h1.571v11.64h-1.571z"/><path d="m977.753 832.112a4.892 4.892 0 0 0 -4.426 2.235v-2.147h-1.5v11.64h1.571v-6.107c0-2.656 1.571-4.2 4.072-4.2 2.213 0 3.5 1.261 3.5 3.718v6.594h1.571v-6.749c-.009-3.346-1.956-4.984-4.788-4.984z" transform="translate(-927.777 -827.421)"/><path d="m1037.094 832.112a5.919 5.919 0 1 0 5.906 5.908 5.725 5.725 0 0 0 -5.906-5.908zm0 10.445a4.542 4.542 0 1 1 4.315-4.537 4.262 4.262 0 0 1 -4.315 4.537z" transform="translate(-973.99 -827.421)"/><path d="m1103.36 826.084-3.541-10.976h-3.319l-3.651 10.892-3.5-10.887h-3.718l5.09 15.49h3.828l3.519-10.489 3.408 10.489h3.851l5.067-15.49h-3.43z" transform="translate(-1016.41 -814.179)"/><path d="m1267.568 832.26v-1.571h-3.3v11.905h3.452v-5.621c0-2.279 1.261-3.319 3.164-3.319.266 0 .487.022.775.044v-3.187a4.8 4.8 0 0 0 -4.091 1.749z" transform="translate(-1155.524 -826.175)"/><path d="m117.503 0h3.452v16.42h-3.452z"/><path d="m1337.51 810.907v5.776a4.574 4.574 0 0 0 -3.563-1.438 6.132 6.132 0 0 0 0 12.259 4.58 4.58 0 0 0 3.718-1.549v1.372h3.3v-16.42zm-2.965 13.764a3.309 3.309 0 1 1 3.032-3.3 3.021 3.021 0 0 1 -3.033 3.3z" transform="translate(-1205.149 -810.907)"/><path d="m1204.52 830.512a6.231 6.231 0 1 0 6.231 6.231 6.231 6.231 0 0 0 -6.231-6.231zm3.24 8.61a2.248 2.248 0 0 1 -2.6.419l.593 1.349a.152.152 0 0 1 -.138.212h-2.185a.151.151 0 0 1 -.136-.218l.591-1.343a2.249 2.249 0 0 1 -2.6-.419c-1.933-1.933 1.115-4.565 2.4-5.908.29-.3.548-.574.731-.78a.15.15 0 0 1 .224 0c.184.206.442.476.731.78 1.274 1.344 4.322 3.976 2.389 5.908z" transform="translate(-1104.14 -826.175)"/></g></svg>
        </a>
        <div class="hamburger hamburger--boring">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div>
        <ul class="menu-items">
          <?php foreach ($menu_items as $key => $menu_item) { ?>
            <li class="menu-item<?php echo $key === 0 ? ' has-dropdown' : ''; ?>">
              <a class="menu-link"<?php echo $key !== 0 ? ' href="#"' : ''; ?>>
                <?php echo $menu_item; ?>
                <?php if ($key === 0) { ?>
                  <svg class="chevron" viewBox="0 0 13.115 8.47"><clipPath id="a"><path d="m0 0h13.115v8.47h-13.115z"/></clipPath><g clip-path="url(#a)"><path d="m5.914.238-5.575 5.576a.98.98 0 0 0 0 1.39l.927.927a.98.98 0 0 0 1.39 0l3.951-3.953 3.952 3.952a.98.98 0 0 0 1.39 0l.927-.927a.98.98 0 0 0 0-1.39l-5.576-5.575a.976.976 0 0 0 -1.386 0" fill="#aa68c9" transform="translate(-.048 .053)"/></g></svg>
                <?php } ?>
              </a>
              <?php if ($key === 0) { ?>
                <div class="dropdown-menu-wrapper">
                  <ul class="dropdown-menu-items">
                    <li><a class="menu-dropdown-link" href="#">Unibet Casino</a></li>
                    <li><a class="menu-dropdown-link" href="#">Paddypower Casino</a></li>
                    <li><a class="menu-dropdown-link" href="#">Betano Casino</a></li>
                  </ul>
                </div>
              <?php } ?>
            </li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </div>




