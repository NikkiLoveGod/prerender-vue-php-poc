const prerender = require('prerender');
const memoryCache = require('prerender-memory-cache')
const server = prerender();

server.use(prerender.removeScriptTags())
server.use(memoryCache)

server.start();
