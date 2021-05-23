<p align="center">
  <a href="https://iservicesinc.net">
    <img alt="I Services" src="./src/html/static/images/logo.svg" height="42" />
  </a>
</p>
<h1 align="center">
  I Services Simple PHP Framework
</h1>

## Description

A very simple PHP framework to create web applications with routing and a Sass compiler. Extend applications with NPM package manager and Webpack. Default packages include `sass`, `uikit`, and `webpack`.

## Requirements

* Docker (required for local development server)
* Node (required for Webpack and Sass compiler)

## Structure

* .
* .docker
* node_modules
* src
  * html
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

Starting from the top, the `.docker` directory stores our virtual host file for our docker instance, this should not require any modifications but, can be extended and modified to fit your project. The `node_models` directory is where NPM stores our dev dependencies such as webpack and sass.

The `src` folder is where all the magic happens! Create components to include/require throughout your project in the `src/html/components` directory, place your sites icons in the `src/html/icons` directory, add pages in the `src/html/pages` directory, store images in the `src/html/static/images` directory. Add custom js files in `src/app.js`, and customize your styles in `src/sass/main.scss`.

The included `.htaccess` file will handle url rewrites for pretty uri's. Modify `browserconfig.xml`, `favicon.ico`, and `site.webmanifest` as needed (or remove from project if not needed). The `.gitignore` file simply saves us from commiting unnecessary files to our repo.

The `docker-compose.yml` and `Dockerfile` orchestrate our local development containers, these can be modified as needed. `package.json` is our dependency manager and allows us to install required packages using NPM or Yarn.

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
    npm install ## installs webpack and sass
    npm run sass ## compiles sass
    npm run webpack ## compiles webpack
    npm run compile ## compiles webpack and sass
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
    npm run build ## builds final site in /dist directory
    ```