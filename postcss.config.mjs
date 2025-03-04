export default {
  plugins: {
    'postcss-header':{
      header: `/*
Theme Name: タカハタ
Theme URI: 
Author: リッキー・リヤディ (Ricky Riyadi)
Author URI: https://rckryd.com/
Description: タカハタ WordPress テーマ
Version: 1.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: takahata
*/`
    },
    'postcss-nested': {},
    "@tailwindcss/postcss": {},
  }
}