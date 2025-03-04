const { exec } = require("child_process");
const fs = require("fs");
const path = require("path");

const sourceDir = "src/css/pages";
const outputDir = "assets/css";

// Run PostCSS watch for the main stylesheet (style.css)
const mainCSSCmd = "postcss src/css/style.css -o style.css --watch";
console.log(`Run: ${mainCSSCmd}`);
exec(mainCSSCmd);

// Read all CSS files inside the "pages" directory
fs.readdir(sourceDir, (err, files) => {
  if (err) {
    console.error("Failed to read folder:", err);
    return;
  }

  files.forEach(file => {
    if (file.endsWith(".css")) {
      const inputFile = path.join(sourceDir, file);
      const outputFile = path.join(outputDir, `page-${file}`);
      const cmd = `postcss ${inputFile} -o ${outputFile} --watch`;

      console.log(`Run: ${cmd}`);
      exec(cmd);
    }
  });
});
