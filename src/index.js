// window["$"] = window["jQuery"] = require("jquery");

function importAll(r) {
    return r.keys().map(r);
}

const images = importAll(require.context('./images/', false, /\.(png|jpe?g|svg)$/));

import "./js/app.js";
// scss files
import "./scss/app.scss";
