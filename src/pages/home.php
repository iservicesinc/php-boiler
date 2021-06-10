<div class="uk-flex uk-child-width-1-2@m" uk-grid>
    <div uk-scrollspy="cls:uk-animation-slide-right;delay:300;repeat:true;">
        <img src="/images/build.svg" alt="Genius" />
    </div>
    <div class="uk-flex uk-flex-column uk-flex-center uk-flex-first@m" uk-scrollspy="cls:uk-animation-slide-left;delay:100;repeat:true;">
        <h2 class="uk-heading-small">I Services <strong>PHP/Webpack</strong> Boiler</h2>
        <p class="uk-text-lead">Webpack, Sass, and routing.<br/>UIKit included for UX.</p>
    </div>
</div>
<div class="uk-container uk-container-xsmall uk-margin-large-top">
    <?php
    $md = file_get_contents(BASE_DIR . '/pages/README.md');
    echo $Parsedown->text($md);
    ?>
    <h3>Download</h3>
    <ul class="uk-list">
        <li><a href="https://github.com/iservicesinc/php-boiler" class="uk-button uk-button-default" rel="nofollow norefferer noopener" target="_blank">Download from Github <span uk-icon="github"></span></a></li>
    </ul>
</div>