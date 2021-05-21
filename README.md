<p align="center">
  <a href="https://iservicesinc.net">
    <img alt="I Services" src="./src/public/static/images/logo.svg" height="42" />
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
    docker-compose up --build
    ```

1.  **Open the source code and start editing!**

    Your site is now running at `http://localhost:8000`!
    
1.  **Build and test site for production.**

    Once you completed making changes go ahead and compile the site.
    
    ```shell
    npm run build ## builds final site in /dist directory
    ```