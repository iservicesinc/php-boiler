<p align="center">
  <a href="https://iservicesinc.net">
    <img alt="I Services" src="./src/public/images/logo.svg" height="42" />
  </a>
</p>
<h1 align="center">
  I Services PHP/Webpack Boiler
</h1>

## Why?

Because we don't believe you should use a framework for every project! We find frameworks like Laravel very useful for large applications however they introduce complexity and bloat to most common applications. This boilerplate allows us to rapidly develop PHP applications with just the features we need, and nothing more!

## What is it?

Essentially, this project is a wrapper or skeleton of our own sites development process with the most minimal dependencies. We have webpack installed with a sass compiler, and composer to manage our PHP dependencies. We built a simple routing system that can easily be extended if needed and included some sample content to get you started.

## Description

A very simple PHP/Webpack boilerplate to create web applications with routing and a Sass compiler. Default node packages include `sass`, `uikit`, and `webpack`. Easily add additional modules, or extend your application with `composer`.

## Requirements

* Node (required for Webpack and Sass compiler)
* PHP (only required if using composer)

## Structure

* .
* node_modules
* src
  * components
  * pages
  * public
  * router.php
  * js
  * sass
  * app.js
* .gitignore
* getComposer.php
* package.json
* README.md
* webpack.config.js

Starting from the top, the `node_modules` directory is where NPM stores our dev dependencies such as webpack and sass.

The `src` folder is where all the magic happens! Create components to include/require throughout your project in the `src/components` directory, add pages in the `src/pages` directory, store images in the `src/public/images` directory. Add custom js files in `src/js` and require them in `src/app.js`, and customize your styles in `src/sass/main.scss`.

The included `.htaccess` file will handle url rewrites for pretty uri's. Modify `browserconfig.xml`, and `site.webmanifest` as needed (or remove from project if not needed). The `.gitignore` file simply saves us from commiting unnecessary files to our repo.

The `package.json` is our dependency manager and allows us to install required packages using NPM or Yarn. And composer can be easily added to the project to manage php packages with `npm run add-composer` to install it, then `npm run composer-require <package/name>` to add new packages, or `npm run composer` to update packages from existing composer.json  file.

And finally, `webpack.config.js` is our configuration file that helps us compile and build our projects css and javascript, this can also be customized and extended to your hearts content.


## Issues

Please report any bugs or issues at https://github.com/iservicesinc/php-boiler/issues.


## 🚀 Quick start
1.  **Start developing.**

    Clone the repo (or fetch/pull changes) and install dependencies.

    ```shell
    git clone git@github.com:iservicesinc/php-boiler.git
    cd php-boiler
    ```

    **then**

    ```shell
    npm install # installs npm dependencies
    npm run add-composer # installs composer to src/html
    npm run composer update # installs composer dependencies
    npm run compile # Compiles sass and js bundles
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
    npm run build # builds final site in ./dist directory
    ```

    then test the compiled version.

    ```shell
    npm run prod-server
    ```

    Your prodction site is now running at `http://localhost:8080`!
