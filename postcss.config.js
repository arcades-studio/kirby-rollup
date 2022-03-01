const prod = process.env.NODE_ENV === "production";

const plugins = [
  require('autoprefixer'),
  require('postcss-import')
]

if (prod) {
  plugins.push(require('cssnano'))
}

module.exports = {
  plugins
}