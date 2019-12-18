const imagemin = require('imagemin-keep-folder');
const imageminJpegtran = require('imagemin-jpegtran');
const imageminPngquant = require('imagemin-pngquant');
const imageminSvgo = require('imagemin-svgo');

(async () => {
  const files = await imagemin(['assets/img/**/*.{jpg,png,svg}'], {
    destination: 'lib/images/',
    plugins: [
      imageminSvgo(),
      imageminJpegtran(),
      imageminPngquant()
    ],
    replaceOutputDir: output => {
      return output.replace(/img\//, '../lib/images/');
    }
  });
  console.log(files);
})();