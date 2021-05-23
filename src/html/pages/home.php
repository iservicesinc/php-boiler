<div class="uk-flex uk-child-width-1-2@m" uk-grid>
    <div uk-scrollspy="cls:uk-animation-slide-right;delay:300;repeat:true;">
        <img src="/static/images/build.svg" alt="Genius" />
    </div>
    <div class="uk-flex uk-flex-column uk-flex-center uk-flex-first@m" uk-scrollspy="cls:uk-animation-slide-left;delay:100;repeat:true;">
        <h2 class="uk-heading-small">I Services <strong>PHP/Webpack</strong> boiler</h2>
        <p class="uk-text-lead">Webpack, Sass, and routing.<br/>UIKit included for UX.</p>
    </div>
</div>
<div class="uk-container uk-container-xsmall uk-margin-large-top">
    <p class="uk-text-lead uk-text-center">A very simple PHP/Webpack boilerplate to create web applications with routing and a Sass compiler. Default node packages include <strong>sass</strong>, <strong>uikit</strong>, and <strong>webpack</strong>. Easily add aditional modules, or extend your application by <a href="https://getcomposer.org/doc/01-basic-usage.md#autoloading" rel="nofollow norefferer noopener" target="_blank">integrating composer</a>.</p>
    <h3>Requirements</h3>
    <ul>
        <li><a href="https://docs.docker.com/get-docker/" rel="nofollow norefferer noopener" target="_blank">Docker</a> (required for local development server)</li>
        <li><a href="https://nodejs.org/en/download/" rel="nofollow norefferer noopener" target="_blank">Node</a> (required for Webpack and Sass compiler)</li>
    </ul>
    <h3>Structure</h3>
    <div class="uk-card uk-card-secondary uk-card-body">
        <code>
            <ul class="uk-list">
                <li>.</li>
                <li>.docker</li>
                <li>node_modules</li>
                <li>src
                    <ul>
                        <li>html
                            <ul>
                                <li>components</li>
                                <li>icons</li>
                                <li>pages</li>
                                <li>static</li>
                                <li>.htaccess</li>
                                <li>browserconfig.xml</li>
                                <li>favicon.ico</li>
                                <li>index.php</li>
                                <li>router.php</li>
                                <li>site.webmanifest</li>
                            </ul>
                        </li>
                        <li>js
                            <ul>
                                <li>darkMode.js</li>
                            </ul>
                        </li>
                        <li>sass
                            <ul>
                                <li>main.scss</li>
                            </ul>
                        </li>
                        <li>app.js</li>
                    </ul>
                </li>
                <li>.gitignore</li>
                <li>docker-compose.yml</li>
                <li>Dockerfile</li>
                <li>package.json</li>
                <li>README.md</li>
                <li>webpack.config.js</li>
            </ul>
        </code>
    </div>
    <p>Starting from the top, the <code>.docker</code> directory stores our virtual host file for our docker instance, this should not require any modifications but, can be extended and modified to fit your project. The <code>node_models</code> directory is where NPM stores our dev dependencies such as webpack and sass.</p>
    <p>The <code>src</code> folder is where all the magic happens! Create components to include/require throughout your project in the <code>src/html/components</code> directory, place your sites icons in the <code>src/html/icons</code> directory, add pages in the <code>src/html/pages</code> directory, store images in the <code>src/html/static/images</code> directory. Add custom js files in <code>src/js</code> and require them in <code>src/app.js</code>, and customize your styles in <code>src/sass/main.scss</code>.</p>
    <p>The included <code>.htaccess</code> file will handle url rewrites for pretty uri's. Modify <code>browserconfig.xml</code>, <code>favicon.ico</code>, and <code>site.webmanifest</code> as needed (or remove from project if not needed). The <code>.gitignore</code> file simply saves us from commiting unnecessary files to our repo.</p>
    <p>The <code>docker-compose.yml</code> and <code>Dockerfile</code> orchestrate our local development containers, these can be modified as needed. <code>package.json</code> is our dependency manager and allows us to install required packages using NPM or Yarn.</p>
    <p>And finally, <code>webpack.config.js</code> is our configuration file that helps us compile and build our projects css and javascript, this can also be customized and extended to your hearts content.</p>
    <h3>Download</h3>
    <ul class="uk-list">
        <li><a href="https://github.com/iservicesinc/is-framework-php" class="uk-button uk-button-default" rel="nofollow norefferer noopener">Download from Github <span uk-icon="github"></span></a></li>
    </ul>
</div>