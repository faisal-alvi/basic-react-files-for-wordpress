module.exports = {
    entry: "./src/index.jsx", 
    output: {
      path: __dirname,
      filename: "./dist/bundle.js"
    },
    module: {
      loaders: [
        {
          test: /.jsx$/,
          loader: "babel-loader",
          exclude: /node_modules/,
          options: {
            presets: [["env", "react"]],
            plugins: ["transform-class-properties"]
          }
        }
      ]
    }
  };
  