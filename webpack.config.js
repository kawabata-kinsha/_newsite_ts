module.exports = {
  mode: "development",
  entry: "./src/ts/main.ts",
  output: {
      path: `${__dirname}/www/assets/js`,
      filename: "main.js"
  },
  module: {
      rules: [
          {
              test: /\.ts?$/,
              use: "ts-loader"
          }
      ]
  },
  resolve: {
      extensions: [".ts",".js"]
  },
};