# Prerendered Vue app POC

This is a POC on how to get Prerendering to work with a PHP application that takes the initial request and then starts up Vue.

It routes traffic through apache, into either a php app directly, or into a node prerenderer.

## Requirements
* Mac OS
* Local Chrome
* Node & NPM (LTS)
* Docker for mac

## Pieces of the puzzle

### Apache-proxy
Something to proxy your request to either the prerenderer or straight to the php-app. Basically if you are a search engine bot, you should get prerendered html, and if you are a person you should get dynamic client side javascript to execute.

### PHP-app
Simple php app that loads up the Vue-app distribution that webpack outputs and adds its own header and footer into it. Meant to be a placeholder indicating your PHP app that takes the initial request and starts up the built vue app.

### Prerenderer
!(prerender/prerender)[https://github.com/prerender/prerender] node app, which uses local headless chrome to capture fully executed Vue app as static html. Strips script tags and uses in memory caching.

### Vue app 
Simple vue app with an api request to bacon ipsum to act as asynchronic operation. This is built once for "deploy".


## Running
* Build Vue-app in `vue-app` run `npm run build`
* Build and run apache-proxy `docker-compose build` and `docker-compose up`
* Start the php app in `php-app` by starting a cli php server `php -S 0.0.0.0:8081 -t .` (it has to listen to connections coming from the apache-proxy)
* Start the Prerenderer in `prerenderer` by running `npm run start`

## TODO

### When to refresh caches and how long to store them?
Cache lifecycle is hard. When should we refresh the caches for frontpage for example? Or any other page for that matter. By the nature of prerendering, the first byte can take seconds depending on how long the async operations take, and this can affect SEO ranks

### How to deal with slow initial request?
Basically the cache problem, but just in terms of the initial draw for google - can we tackle it as is?

### Could prerenderer work with headless chrome container?
This would help by removing unneeded dependencies and make this thing runnable in a containerized environment.

### What about using Prerender.io?
Could we just offload everything to Prerender.io, maybe do some api calls to handle lifecycles and tweak our .htaccess or comparable middleware? What about pricing?