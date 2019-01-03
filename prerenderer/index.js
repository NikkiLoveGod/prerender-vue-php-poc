const prerender = require('prerender');
const server = prerender();
server.use(prerender.removeScriptTags())
server.start();
