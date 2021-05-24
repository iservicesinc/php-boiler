<h1 align="center">
  I Services PHP/Webpack Boiler
</h1>

## Description

A very simple PHP/Webpack boilerplate to create web applications with routing and a Sass compiler. Default node packages include `sass`, `uikit`, and `webpack`. Easily add aditional modules, or extend your application with `composer`.

## Requirements

* Docker (required for local development server)
* Node (required for Webpack and Sass compiler)
* PHP (required for composer)

## Structure

* .
* .docker
* node_modules
* src
  * html
    * public
      * components
      * icons
      * pages
      * static
      * .htaccess
      * browserconfig.xml
      * favicon.ico
      * index.php
      * router.php
      * site.webmanifest
    * vendor
    * getComposer.php
  * js
    * darkMode.js
  * sass
    * main.scss
  * app.js
* .gitignore
* docker-compose.yml
* Dockerfile
* package.json
* README.md
* webpack.config.js

Starting from the top, the `.docker` directory stores our virtual host file for our docker instance, this should not require any modifications but, can be extended and modified to fit your project. The `node_modules` directory is where NPM stores our dev dependencies such as webpack and sass.

The `src` folder is where all the magic happens! Create components to include/require throughout your project in the `src/html/public/components` directory, place your sites icons in the `src/html/public/icons` directory, add pages in the `src/html/public/pages` directory, store images in the `src/html/public/static/images` directory. Add custom js files in `src/js` and require them in `src/app.js`, and customize your styles in `src/sass/main.scss`.

The included `.htaccess` file will handle url rewrites for pretty uri's. Modify `browserconfig.xml`, `favicon.ico`, and `site.webmanifest` as needed (or remove from project if not needed). The `.gitignore` file simply saves us from commiting unnecessary files to our repo.

The `docker-compose.yml` and `Dockerfile` orchestrate our local development containers, these can be modified as needed. `package.json` is our dependency manager and allows us to install required packages using NPM or Yarn. Optionally, 

And finally, `webpack.config.js` is our configuration file that helps us compile and build our projects css and javascript, this can also be customized and extended to your hearts content.


## Issues

Please report any bugs or issues at https://github.com/iservicesinc/is-framework-php/issues.


## 🚀 Quick start
1.  **Start developing.**

    Clone the repo (or fetch/pull changes) and install dependencies.
    ```shell
    git clone git@github.com:iservicesinc/is-framework-php.git
    cd www
    ```
    **or**
    ```shell
    cd <project_path>
    git fetch && git pull
    ```
    **then**
    ```shell
    npm install # installs webpack and sass
    npm run add-composer # installs composer to src/html
    npm run sass # Compiles sass to src/html/public/css/bundle.css
    npm run webpack # Compiles js to src/html/public/js/bundle.js
    npm run compile # Compiles sass and js bundles
    npm run clean # Removes all compiled and build files
    ```

    Start up local development environment in docker.

    ```shell
    npm run server
    ```

1.  **Open the source code and start editing!**

    Your site is now running at `http://localhost:8000`!
    
1.  **Build and test site for production.**

    Once you completed making changes go ahead and compile the site.
    
    ```shell
    npm run build # builds final site in /dist directory
    ```