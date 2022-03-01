const prod = process.env.NODE_ENV === "production";
import esbuild from "rollup-plugin-esbuild";
import execute from "rollup-plugin-execute";
import resolve from "@rollup/plugin-node-resolve";
import commonjs from "@rollup/plugin-commonjs";
import browsersync from 'rollup-plugin-browsersync'

const commands = [
  `postcss src/styles/main.css ${prod ? '' : '--watch'} --dir _dist`,
]

const plugins = [
  commonjs(),
  resolve(),
  esbuild({
    bundle: true,
    minify: prod,
  }),
  execute(commands)
]

if (!prod) {
  plugins.push(
    browsersync({
      proxy: '127.0.0.1:8000',
      files: ['src', 'site', 'content'],
      notify: false
    })
  )
}

export default {
  input: "src/scripts/main.js",
  output: {
    dir: "_dist",
    format: "iife",
  },
  watch: {
    include: ["src/scripts/*.js"],
  },
  plugins
};
