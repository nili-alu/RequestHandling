<?php
include('./backend/handling.php');
?>

<!DOCTYPE html>
<!-- saved from url=(0022)http://localhost:5173/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="./Vite + React_files/main.js.download" charset="UTF-8"></script><script type="module">
import RefreshRuntime from "/@react-refresh"
RefreshRuntime.injectIntoGlobalHook(window)
window.$RefreshReg$ = () => {}
window.$RefreshSig$ = () => (type) => type
window.__vite_plugin_react_preamble_installed__ = true
</script>

    <script type="module" src="./Vite + React_files/client"></script>

    
    <link rel="icon" type="image/svg+xml" href="http://localhost:5173/vite.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vite + React</title>
  <style type="text/css" data-vite-dev-id="C:/Users/Hp/Desktop/Security Ass1/Portifolio_react/src/index.css">/*
! tailwindcss v3.3.3 | MIT License | https://tailwindcss.com
*//*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
  box-sizing: border-box; /* 1 */
  border-width: 0; /* 2 */
  border-style: solid; /* 2 */
  border-color: #e5e7eb; /* 2 */
}

::before,
::after {
  --tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
*/

html {
  line-height: 1.5; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
  -moz-tab-size: 4; /* 3 */
  -o-tab-size: 4;
     tab-size: 4; /* 3 */
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 4 */
  font-feature-settings: normal; /* 5 */
  font-variation-settings: normal; /* 6 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
  margin: 0; /* 1 */
  line-height: inherit; /* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
  height: 0; /* 1 */
  color: inherit; /* 2 */
  border-top-width: 1px; /* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
  font-size: inherit;
  font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
  color: inherit;
  text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
  font-weight: bolder;
}

/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/*
Add the correct font size in all browsers.
*/

small {
  font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
  text-indent: 0; /* 1 */
  border-color: inherit; /* 2 */
  border-collapse: collapse; /* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-feature-settings: inherit; /* 1 */
  font-variation-settings: inherit; /* 1 */
  font-size: 100%; /* 1 */
  font-weight: inherit; /* 1 */
  line-height: inherit; /* 1 */
  color: inherit; /* 1 */
  margin: 0; /* 2 */
  padding: 0; /* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
  text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

.butt{
    height:50px;
    width:200px;
    text-align: center;
}

button,
[type='button'],
[type='reset'],
[type='submit'] {
  size: 20 px;
  -webkit-appearance: button; /* 1 */
  background-color: transparent; /* 2 */
  background-image: none; /* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
  outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
  box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
  vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
  height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
  -webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
  display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
  margin: 0;
}

fieldset {
  margin: 0;
  padding: 0;
}

legend {
  padding: 0;
}

ol,
ul,
menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

/*
Reset default styling for dialogs.
*/
dialog {
  padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
  resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
  opacity: 1; /* 1 */
  color: #9ca3af; /* 2 */
}

input::placeholder,
textarea::placeholder {
  opacity: 1; /* 1 */
  color: #9ca3af; /* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
  cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/
:disabled {
  cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
  display: block; /* 1 */
  vertical-align: middle; /* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
  max-width: 100%;
  height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */
[hidden] {
  display: none;
}

*, ::before, ::after {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}

::backdrop {
  --tw-border-spacing-x: 0;
  --tw-border-spacing-y: 0;
  --tw-translate-x: 0;
  --tw-translate-y: 0;
  --tw-rotate: 0;
  --tw-skew-x: 0;
  --tw-skew-y: 0;
  --tw-scale-x: 1;
  --tw-scale-y: 1;
  --tw-pan-x:  ;
  --tw-pan-y:  ;
  --tw-pinch-zoom:  ;
  --tw-scroll-snap-strictness: proximity;
  --tw-gradient-from-position:  ;
  --tw-gradient-via-position:  ;
  --tw-gradient-to-position:  ;
  --tw-ordinal:  ;
  --tw-slashed-zero:  ;
  --tw-numeric-figure:  ;
  --tw-numeric-spacing:  ;
  --tw-numeric-fraction:  ;
  --tw-ring-inset:  ;
  --tw-ring-offset-width: 0px;
  --tw-ring-offset-color: #fff;
  --tw-ring-color: rgb(59 130 246 / 0.5);
  --tw-ring-offset-shadow: 0 0 #0000;
  --tw-ring-shadow: 0 0 #0000;
  --tw-shadow: 0 0 #0000;
  --tw-shadow-colored: 0 0 #0000;
  --tw-blur:  ;
  --tw-brightness:  ;
  --tw-contrast:  ;
  --tw-grayscale:  ;
  --tw-hue-rotate:  ;
  --tw-invert:  ;
  --tw-saturate:  ;
  --tw-sepia:  ;
  --tw-drop-shadow:  ;
  --tw-backdrop-blur:  ;
  --tw-backdrop-brightness:  ;
  --tw-backdrop-contrast:  ;
  --tw-backdrop-grayscale:  ;
  --tw-backdrop-hue-rotate:  ;
  --tw-backdrop-invert:  ;
  --tw-backdrop-opacity:  ;
  --tw-backdrop-saturate:  ;
  --tw-backdrop-sepia:  ;
}
.absolute {
  position: absolute;
}
.relative {
  position: relative;
}
.right-0 {
  right: 0px;
}
.top-1\/2 {
  top: 50%;
}
.m-4 {
  margin: 1rem;
}
.mb-2 {
  margin-bottom: 0.5rem;
}
.mb-4 {
  margin-bottom: 1rem;
}
.ml-10 {
  margin-left: 2.5rem;
}
.ml-4 {
  margin-left: 1rem;
}
.mr-2 {
  margin-right: 0.5rem;
}
.mt-60 {
  margin-top: 15rem;
}
.block {
  display: block;
}
.flex {
  display: flex;
  text-align: center;
}
.grid {
  display: grid;
}
.h-full {
  height: 100%;
}
.h-screen {
  height: 100vh;
}
.min-h-screen {
  min-height: 100vh;
}
.w-1\/3 {
  width: 33.333333%;
}
.w-3\/4 {
  width: 75%;
}
.w-full {
  width: 100%;
}
.-translate-y-1\/2 {
  --tw-translate-y: -50%;
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.transform {
  transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.cursor-pointer {
  cursor: pointer;
}
.list-inside {
  list-style-position: inside;
}
.list-disc {
  list-style-type: disc;
}
.appearance-none {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.grid-cols-1 {
  grid-template-columns: repeat(1, minmax(0, 1fr));
}
.grid-cols-2 {
  grid-template-columns: repeat(2, minmax(0, 1fr));
}
.grid-cols-3 {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}
.content-center {
  align-content: center;
}
.items-center {
  align-items: center;
}
.justify-center {
  justify-content: center;
}
.justify-between {
  justify-content: space-between;
}
.gap-8 {
  gap: 2rem;
}
.rounded {
  border-radius: 0.25rem;
}
.border {
  border-width: 1px;
}
.border-green-500 {
  --tw-border-opacity: 1;
  border-color: rgb(34 197 94 / var(--tw-border-opacity));
}
.border-red-500 {
  --tw-border-opacity: 1;
  border-color: rgb(239 68 68 / var(--tw-border-opacity));
}
.bg-blue-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(191 219 254 / var(--tw-bg-opacity));
}
.bg-blue-500 {
  --tw-bg-opacity: 1;
  background-color: rgb(59 130 246 / var(--tw-bg-opacity));
}
.bg-gray-200 {
  --tw-bg-opacity: 1;
  background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}
.bg-white {
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}
.p-4 {
  padding: 1rem;
}
.px-3 {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
}
.px-4 {
  padding-left: 1rem;
  padding-right: 1rem;
}
.px-8 {
  padding-left: 2rem;
  padding-right: 2rem;
}
.py-2 {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.pb-8 {
  padding-bottom: 2rem;
}
.pt-6 {
  padding-top: 1.5rem;
}
.text-center {
  text-align: center;
}
.text-2xl {
  font-size: 1.5rem;
  line-height: 2rem;
}
.text-3xl {
  font-size: 1.875rem;
  line-height: 2.25rem;
}
.text-6xl {
  font-size: 3.75rem;
  line-height: 1;
}
.text-lg {
  font-size: 1.125rem;
  line-height: 1.75rem;
}
.text-sm {
  font-size: 0.875rem;
  line-height: 1.25rem;
}
.font-bold {
  font-weight: 700;
}
.font-semibold {
  font-weight: 600;
}
.uppercase {
  text-transform: uppercase;
}
.lowercase {
  text-transform: lowercase;
}
.leading-tight {
  line-height: 1.25;
}
.text-blue-500 {
  --tw-text-opacity: 1;
  color: rgb(59 130 246 / var(--tw-text-opacity));
}
.text-gray-700 {
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}
.text-green-500 {
  --tw-text-opacity: 1;
  color: rgb(34 197 94 / var(--tw-text-opacity));
}
.text-red-500 {
  --tw-text-opacity: 1;
  color: rgb(239 68 68 / var(--tw-text-opacity));
}
.text-white {
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}
.shadow {
  --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.shadow-md {
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}
.hover\:bg-blue-700:hover {
  --tw-bg-opacity: 1;
  background-color: rgb(29 78 216 / var(--tw-bg-opacity));
}
.hover\:underline:hover {
  text-decoration-line: underline;
}
.focus\:outline-none:focus {
  outline: 2px solid transparent;
  outline-offset: 2px;
}</style><style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: circular;

  src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: circular;

  src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
}</style></head>
  <body>
    <div id="root"><div class="min-h-screen flex items-center justify-center grid grid-cols-1"><div class="bg-blue-200 h-full w-full"><h1 class="text-3xl font-semibold text-center mt-60 ">Welcome to Request handling web<br>Join us as</h1><div class="flex grid grid-cols-3 gap-8 m-4"><a href="register.php"><button class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline butt" type="submit">Student</button></a><a href="login.php"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline butt" type="submit">Facilitator</button></a><a href="admin_login.php"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline butt" type="submit">Team Lead</button></a></div></div></div></div>
    <script type="module" src="./Vite + React_files/main.jsx"></script>
  

<div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb"><section id="shadow-host-companion"><template shadowrootmode="open"><div id="inner-shadow-companion"><div class="theme-dark css-0" id="tooltip-mount-layer-companion"></div><style data-emotion="companion-global"></style><style data-emotion="companion" data-s=""></style><style>
            
    #inner-shadow-companion {
      font-size: 100%;
    }
    #inner-shadow-companion {
      font-family: circular, -apple-system, BlinkMacSystemFont, Segoe UI,
        sans-serif;
      color: var(--lns-color-body);
      
  font-size: var(--lns-fontSize-medium);
  line-height: var(--lns-lineHeight-medium);
;
      font-feature-settings: 'ss08' on;
    }

    #inner-shadow-companion *,
    #inner-shadow-companion *:before,
    #inner-shadow-companion *:after {
      box-sizing: border-box;
    }

    #inner-shadow-companion * {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      letter-spacing: calc(0.6px - 0.05em);
    }

    
    #inner-shadow-companion,
    .theme-light,
    [data-lens-theme="light"] {
      --lns-color-primary: var(--lns-themeLight-color-primary);--lns-color-primaryHover: var(--lns-themeLight-color-primaryHover);--lns-color-primaryActive: var(--lns-themeLight-color-primaryActive);--lns-color-body: var(--lns-themeLight-color-body);--lns-color-bodyDimmed: var(--lns-themeLight-color-bodyDimmed);--lns-color-background: var(--lns-themeLight-color-background);--lns-color-backgroundHover: var(--lns-themeLight-color-backgroundHover);--lns-color-backgroundActive: var(--lns-themeLight-color-backgroundActive);--lns-color-backgroundSecondary: var(--lns-themeLight-color-backgroundSecondary);--lns-color-backgroundSecondary2: var(--lns-themeLight-color-backgroundSecondary2);--lns-color-overlay: var(--lns-themeLight-color-overlay);--lns-color-border: var(--lns-themeLight-color-border);--lns-color-focusRing: var(--lns-themeLight-color-focusRing);--lns-color-record: var(--lns-themeLight-color-record);--lns-color-recordHover: var(--lns-themeLight-color-recordHover);--lns-color-recordActive: var(--lns-themeLight-color-recordActive);--lns-color-info: var(--lns-themeLight-color-info);--lns-color-success: var(--lns-themeLight-color-success);--lns-color-warning: var(--lns-themeLight-color-warning);--lns-color-danger: var(--lns-themeLight-color-danger);--lns-color-dangerHover: var(--lns-themeLight-color-dangerHover);--lns-color-dangerActive: var(--lns-themeLight-color-dangerActive);--lns-color-backdrop: var(--lns-themeLight-color-backdrop);--lns-color-backdropDark: var(--lns-themeLight-color-backdropDark);--lns-color-disabledContent: var(--lns-themeLight-color-disabledContent);--lns-color-highlight: var(--lns-themeLight-color-highlight);--lns-color-disabledBackground: var(--lns-themeLight-color-disabledBackground);--lns-color-formFieldBorder: var(--lns-themeLight-color-formFieldBorder);--lns-color-formFieldBackground: var(--lns-themeLight-color-formFieldBackground);--lns-color-buttonBorder: var(--lns-themeLight-color-buttonBorder);--lns-color-upgrade: var(--lns-themeLight-color-upgrade);--lns-color-upgradeHover: var(--lns-themeLight-color-upgradeHover);--lns-color-upgradeActive: var(--lns-themeLight-color-upgradeActive);--lns-color-tabBackground: var(--lns-themeLight-color-tabBackground);--lns-color-discoveryBackground: var(--lns-themeLight-color-discoveryBackground);--lns-color-discoveryLightBackground: var(--lns-themeLight-color-discoveryLightBackground);--lns-color-discoveryTitle: var(--lns-themeLight-color-discoveryTitle);--lns-color-discoveryHighlight: var(--lns-themeLight-color-discoveryHighlight);
    }

    .theme-dark,
    [data-lens-theme="dark"] {
      --lns-color-primary: var(--lns-themeDark-color-primary);--lns-color-primaryHover: var(--lns-themeDark-color-primaryHover);--lns-color-primaryActive: var(--lns-themeDark-color-primaryActive);--lns-color-body: var(--lns-themeDark-color-body);--lns-color-bodyDimmed: var(--lns-themeDark-color-bodyDimmed);--lns-color-background: var(--lns-themeDark-color-background);--lns-color-backgroundHover: var(--lns-themeDark-color-backgroundHover);--lns-color-backgroundActive: var(--lns-themeDark-color-backgroundActive);--lns-color-backgroundSecondary: var(--lns-themeDark-color-backgroundSecondary);--lns-color-backgroundSecondary2: var(--lns-themeDark-color-backgroundSecondary2);--lns-color-overlay: var(--lns-themeDark-color-overlay);--lns-color-border: var(--lns-themeDark-color-border);--lns-color-focusRing: var(--lns-themeDark-color-focusRing);--lns-color-record: var(--lns-themeDark-color-record);--lns-color-recordHover: var(--lns-themeDark-color-recordHover);--lns-color-recordActive: var(--lns-themeDark-color-recordActive);--lns-color-info: var(--lns-themeDark-color-info);--lns-color-success: var(--lns-themeDark-color-success);--lns-color-warning: var(--lns-themeDark-color-warning);--lns-color-danger: var(--lns-themeDark-color-danger);--lns-color-dangerHover: var(--lns-themeDark-color-dangerHover);--lns-color-dangerActive: var(--lns-themeDark-color-dangerActive);--lns-color-backdrop: var(--lns-themeDark-color-backdrop);--lns-color-backdropDark: var(--lns-themeDark-color-backdropDark);--lns-color-disabledContent: var(--lns-themeDark-color-disabledContent);--lns-color-highlight: var(--lns-themeDark-color-highlight);--lns-color-disabledBackground: var(--lns-themeDark-color-disabledBackground);--lns-color-formFieldBorder: var(--lns-themeDark-color-formFieldBorder);--lns-color-formFieldBackground: var(--lns-themeDark-color-formFieldBackground);--lns-color-buttonBorder: var(--lns-themeDark-color-buttonBorder);--lns-color-upgrade: var(--lns-themeDark-color-upgrade);--lns-color-upgradeHover: var(--lns-themeDark-color-upgradeHover);--lns-color-upgradeActive: var(--lns-themeDark-color-upgradeActive);--lns-color-tabBackground: var(--lns-themeDark-color-tabBackground);--lns-color-discoveryBackground: var(--lns-themeDark-color-discoveryBackground);--lns-color-discoveryLightBackground: var(--lns-themeDark-color-discoveryLightBackground);--lns-color-discoveryTitle: var(--lns-themeDark-color-discoveryTitle);--lns-color-discoveryHighlight: var(--lns-themeDark-color-discoveryHighlight);
    }
  

    
    #inner-shadow-companion {
      --lns-fontWeight-book:400;--lns-fontWeight-bold:700;--lns-unit:0.5rem;--lns-fontSize-small:calc(1.5 * var(--lns-unit, 8px));--lns-lineHeight-small:1.5;--lns-fontSize-body-sm:calc(1.5 * var(--lns-unit, 8px));--lns-lineHeight-body-sm:1.5;--lns-fontSize-medium:calc(1.75 * var(--lns-unit, 8px));--lns-lineHeight-medium:1.6;--lns-fontSize-body-md:calc(1.75 * var(--lns-unit, 8px));--lns-lineHeight-body-md:1.6;--lns-fontSize-large:calc(2.25 * var(--lns-unit, 8px));--lns-lineHeight-large:1.45;--lns-fontSize-body-lg:calc(2.25 * var(--lns-unit, 8px));--lns-lineHeight-body-lg:1.45;--lns-fontSize-xlarge:calc(3 * var(--lns-unit, 8px));--lns-lineHeight-xlarge:1.35;--lns-fontSize-heading-sm:calc(3 * var(--lns-unit, 8px));--lns-lineHeight-heading-sm:1.35;--lns-fontSize-xxlarge:calc(4 * var(--lns-unit, 8px));--lns-lineHeight-xxlarge:1.2;--lns-fontSize-heading-md:calc(4 * var(--lns-unit, 8px));--lns-lineHeight-heading-md:1.2;--lns-fontSize-xxxlarge:calc(6 * var(--lns-unit, 8px));--lns-lineHeight-xxxlarge:1.15;--lns-fontSize-heading-lg:calc(6 * var(--lns-unit, 8px));--lns-lineHeight-heading-lg:1.15;--lns-radius-medium:calc(1 * var(--lns-unit, 8px));--lns-radius-large:calc(2 * var(--lns-unit, 8px));--lns-radius-xlarge:calc(3 * var(--lns-unit, 8px));--lns-radius-full:calc(999 * var(--lns-unit, 8px));--lns-shadow-small:0 calc(0.5 * var(--lns-unit, 8px)) calc(1.25 * var(--lns-unit, 8px)) hsla(0, 0%, 0%, 0.05);--lns-shadow-medium:0 calc(0.5 * var(--lns-unit, 8px)) calc(1.25 * var(--lns-unit, 8px)) hsla(0, 0%, 0%, 0.1);--lns-shadow-large:0 calc(0.75 * var(--lns-unit, 8px)) calc(3 * var(--lns-unit, 8px)) hsla(0, 0%, 0%, 0.1);--lns-space-xsmall:calc(0.5 * var(--lns-unit, 8px));--lns-space-small:calc(1 * var(--lns-unit, 8px));--lns-space-medium:calc(2 * var(--lns-unit, 8px));--lns-space-large:calc(3 * var(--lns-unit, 8px));--lns-space-xlarge:calc(5 * var(--lns-unit, 8px));--lns-space-xxlarge:calc(8 * var(--lns-unit, 8px));--lns-formFieldBorderWidth:1px;--lns-formFieldBorderWidthFocus:2px;--lns-formFieldHeight:calc(4.5 * var(--lns-unit, 8px));--lns-formFieldRadius:calc(2.25 * var(--lns-unit, 8px));--lns-formFieldHorizontalPadding:calc(2 * var(--lns-unit, 8px));--lns-formFieldBorderShadow:
    inset 0 0 0 var(--lns-formFieldBorderWidth) var(--lns-color-formFieldBorder)
  ;--lns-formFieldBorderShadowFocus:
    inset 0 0 0 var(--lns-formFieldBorderWidthFocus) var(--lns-color-blurple),
    0 0 0 var(--lns-formFieldBorderWidthFocus) var(--lns-color-focusRing)
  ;--lns-color-red:hsla(11,80%,45%,1);--lns-color-blurpleLight:hsla(240,83.3%,95.3%,1);--lns-color-blurpleMedium:hsla(242,81%,87.6%,1);--lns-color-blurple:hsla(242,88.4%,66.3%,1);--lns-color-blurpleDark:hsla(242,87.6%,62%,1);--lns-color-offWhite:hsla(45,36.4%,95.7%,1);--lns-color-blueLight:hsla(206,58.3%,85.9%,1);--lns-color-blue:hsla(206,100%,73.3%,1);--lns-color-blueDark:hsla(206,29.5%,33.9%,1);--lns-color-orangeLight:hsla(6,100%,89.6%,1);--lns-color-orange:hsla(11,100%,62.2%,1);--lns-color-orangeDark:hsla(11,79.9%,64.9%,1);--lns-color-tealLight:hsla(180,20%,67.6%,1);--lns-color-teal:hsla(180,51.4%,51.6%,1);--lns-color-tealDark:hsla(180,16.2%,22.9%,1);--lns-color-yellowLight:hsla(39,100%,87.8%,1);--lns-color-yellow:hsla(50,100%,57.3%,1);--lns-color-yellowDark:hsla(39,100%,68%,1);--lns-color-grey8:hsla(0,0%,13%,1);--lns-color-grey7:hsla(246,16%,26%,1);--lns-color-grey6:hsla(252,13%,46%,1);--lns-color-grey5:hsla(240,7%,62%,1);--lns-color-grey4:hsla(259,12%,75%,1);--lns-color-grey3:hsla(260,11%,85%,1);--lns-color-grey2:hsla(260,11%,95%,1);--lns-color-grey1:hsla(240,7%,97%,1);--lns-color-white:hsla(0,0%,100%,1);--lns-themeLight-color-primary:hsla(242,88.4%,66.3%,1);--lns-themeLight-color-primaryHover:hsla(242,88.4%,56.3%,1);--lns-themeLight-color-primaryActive:hsla(242,88.4%,45.3%,1);--lns-themeLight-color-body:hsla(0,0%,13%,1);--lns-themeLight-color-bodyDimmed:hsla(252,13%,46%,1);--lns-themeLight-color-background:hsla(0,0%,100%,1);--lns-themeLight-color-backgroundHover:hsla(246,16%,26%,0.1);--lns-themeLight-color-backgroundActive:hsla(246,16%,26%,0.3);--lns-themeLight-color-backgroundSecondary:hsla(246,16%,26%,0.04);--lns-themeLight-color-backgroundSecondary2:hsla(45,34%,78%,0.2);--lns-themeLight-color-overlay:hsla(0,0%,100%,1);--lns-themeLight-color-border:hsla(252,13%,46%,0.2);--lns-themeLight-color-focusRing:hsla(242,88.4%,66.3%,0.5);--lns-themeLight-color-record:hsla(11,100%,62.2%,1);--lns-themeLight-color-recordHover:hsla(11,100%,52.2%,1);--lns-themeLight-color-recordActive:hsla(11,100%,42.2%,1);--lns-themeLight-color-info:hsla(206,100%,73.3%,1);--lns-themeLight-color-success:hsla(180,51.4%,51.6%,1);--lns-themeLight-color-warning:hsla(39,100%,68%,1);--lns-themeLight-color-danger:hsla(11,80%,45%,1);--lns-themeLight-color-dangerHover:hsla(11,80%,38%,1);--lns-themeLight-color-dangerActive:hsla(11,80%,31%,1);--lns-themeLight-color-backdrop:hsla(0,0%,13%,0.5);--lns-themeLight-color-backdropDark:hsla(0,0%,13%,0.9);--lns-themeLight-color-disabledContent:hsla(240,7%,62%,1);--lns-themeLight-color-highlight:hsla(240,83.3%,66.3%,0.15);--lns-themeLight-color-disabledBackground:hsla(260,11%,95%,1);--lns-themeLight-color-formFieldBorder:hsla(260,11%,85%,1);--lns-themeLight-color-formFieldBackground:hsla(0,0%,100%,1);--lns-themeLight-color-buttonBorder:hsla(252,13%,46%,0.25);--lns-themeLight-color-upgrade:hsla(206,100%,93%,1);--lns-themeLight-color-upgradeHover:hsla(206,100%,85%,1);--lns-themeLight-color-upgradeActive:hsla(206,100%,77%,1);--lns-themeLight-color-tabBackground:hsla(252,13%,46%,0.15);--lns-themeLight-color-discoveryBackground:hsla(206,100%,93%,1);--lns-themeLight-color-discoveryLightBackground:hsla(206,100%,97%,1);--lns-themeLight-color-discoveryTitle:hsla(0,0%,13%,1);--lns-themeLight-color-discoveryHighlight:hsla(206,100%,77%,0.3);--lns-themeDark-color-primary:hsla(242,87%,73%,1);--lns-themeDark-color-primaryHover:hsla(242,88.4%,56.3%,1);--lns-themeDark-color-primaryActive:hsla(242,88.4%,45.3%,1);--lns-themeDark-color-body:hsla(240,7%,97%,1);--lns-themeDark-color-bodyDimmed:hsla(240,7%,62%,1);--lns-themeDark-color-background:hsla(0,0%,13%,1);--lns-themeDark-color-backgroundHover:hsla(0,0%,100%,0.1);--lns-themeDark-color-backgroundActive:hsla(0,0%,100%,0.2);--lns-themeDark-color-backgroundSecondary:hsla(0,0%,100%,0.04);--lns-themeDark-color-backgroundSecondary2:hsla(45,13%,44%,0.2);--lns-themeDark-color-overlay:hsla(0,0%,20%,1);--lns-themeDark-color-border:hsla(259,12%,75%,0.2);--lns-themeDark-color-focusRing:hsla(242,88.4%,66.3%,0.5);--lns-themeDark-color-record:hsla(11,100%,62.2%,1);--lns-themeDark-color-recordHover:hsla(11,100%,52.2%,1);--lns-themeDark-color-recordActive:hsla(11,100%,42.2%,1);--lns-themeDark-color-info:hsla(206,100%,73.3%,1);--lns-themeDark-color-success:hsla(180,51.4%,51.6%,1);--lns-themeDark-color-warning:hsla(39,100%,68%,1);--lns-themeDark-color-danger:hsla(11,80%,45%,1);--lns-themeDark-color-dangerHover:hsla(11,80%,38%,1);--lns-themeDark-color-dangerActive:hsla(11,80%,31%,1);--lns-themeDark-color-backdrop:hsla(0,0%,13%,0.5);--lns-themeDark-color-backdropDark:hsla(0,0%,13%,0.9);--lns-themeDark-color-disabledContent:hsla(240,7%,62%,1);--lns-themeDark-color-highlight:hsla(240,83.3%,66.3%,0.15);--lns-themeDark-color-disabledBackground:hsla(252,13%,23%,1);--lns-themeDark-color-formFieldBorder:hsla(252,13%,46%,1);--lns-themeDark-color-formFieldBackground:hsla(0,0%,13%,1);--lns-themeDark-color-buttonBorder:hsla(0,0%,100%,0.25);--lns-themeDark-color-upgrade:hsla(206,92%,81%,1);--lns-themeDark-color-upgradeHover:hsla(206,92%,74%,1);--lns-themeDark-color-upgradeActive:hsla(206,92%,67%,1);--lns-themeDark-color-tabBackground:hsla(0,0%,100%,0.15);--lns-themeDark-color-discoveryBackground:hsla(206,92%,81%,1);--lns-themeDark-color-discoveryLightBackground:hsla(0,0%,13%,1);--lns-themeDark-color-discoveryTitle:hsla(206,100%,73.3%,1);--lns-themeDark-color-discoveryHighlight:hsla(206,100%,77%,0.3);
    }
  

    .c\:red{color:var(--lns-color-red)}.c\:blurpleLight{color:var(--lns-color-blurpleLight)}.c\:blurpleMedium{color:var(--lns-color-blurpleMedium)}.c\:blurple{color:var(--lns-color-blurple)}.c\:blurpleDark{color:var(--lns-color-blurpleDark)}.c\:offWhite{color:var(--lns-color-offWhite)}.c\:blueLight{color:var(--lns-color-blueLight)}.c\:blue{color:var(--lns-color-blue)}.c\:blueDark{color:var(--lns-color-blueDark)}.c\:orangeLight{color:var(--lns-color-orangeLight)}.c\:orange{color:var(--lns-color-orange)}.c\:orangeDark{color:var(--lns-color-orangeDark)}.c\:tealLight{color:var(--lns-color-tealLight)}.c\:teal{color:var(--lns-color-teal)}.c\:tealDark{color:var(--lns-color-tealDark)}.c\:yellowLight{color:var(--lns-color-yellowLight)}.c\:yellow{color:var(--lns-color-yellow)}.c\:yellowDark{color:var(--lns-color-yellowDark)}.c\:grey8{color:var(--lns-color-grey8)}.c\:grey7{color:var(--lns-color-grey7)}.c\:grey6{color:var(--lns-color-grey6)}.c\:grey5{color:var(--lns-color-grey5)}.c\:grey4{color:var(--lns-color-grey4)}.c\:grey3{color:var(--lns-color-grey3)}.c\:grey2{color:var(--lns-color-grey2)}.c\:grey1{color:var(--lns-color-grey1)}.c\:white{color:var(--lns-color-white)}.c\:primary{color:var(--lns-color-primary)}.c\:primaryHover{color:var(--lns-color-primaryHover)}.c\:primaryActive{color:var(--lns-color-primaryActive)}.c\:body{color:var(--lns-color-body)}.c\:bodyDimmed{color:var(--lns-color-bodyDimmed)}.c\:background{color:var(--lns-color-background)}.c\:backgroundHover{color:var(--lns-color-backgroundHover)}.c\:backgroundActive{color:var(--lns-color-backgroundActive)}.c\:backgroundSecondary{color:var(--lns-color-backgroundSecondary)}.c\:backgroundSecondary2{color:var(--lns-color-backgroundSecondary2)}.c\:overlay{color:var(--lns-color-overlay)}.c\:border{color:var(--lns-color-border)}.c\:focusRing{color:var(--lns-color-focusRing)}.c\:record{color:var(--lns-color-record)}.c\:recordHover{color:var(--lns-color-recordHover)}.c\:recordActive{color:var(--lns-color-recordActive)}.c\:info{color:var(--lns-color-info)}.c\:success{color:var(--lns-color-success)}.c\:warning{color:var(--lns-color-warning)}.c\:danger{color:var(--lns-color-danger)}.c\:dangerHover{color:var(--lns-color-dangerHover)}.c\:dangerActive{color:var(--lns-color-dangerActive)}.c\:backdrop{color:var(--lns-color-backdrop)}.c\:backdropDark{color:var(--lns-color-backdropDark)}.c\:disabledContent{color:var(--lns-color-disabledContent)}.c\:highlight{color:var(--lns-color-highlight)}.c\:disabledBackground{color:var(--lns-color-disabledBackground)}.c\:formFieldBorder{color:var(--lns-color-formFieldBorder)}.c\:formFieldBackground{color:var(--lns-color-formFieldBackground)}.c\:buttonBorder{color:var(--lns-color-buttonBorder)}.c\:upgrade{color:var(--lns-color-upgrade)}.c\:upgradeHover{color:var(--lns-color-upgradeHover)}.c\:upgradeActive{color:var(--lns-color-upgradeActive)}.c\:tabBackground{color:var(--lns-color-tabBackground)}.c\:discoveryBackground{color:var(--lns-color-discoveryBackground)}.c\:discoveryLightBackground{color:var(--lns-color-discoveryLightBackground)}.c\:discoveryTitle{color:var(--lns-color-discoveryTitle)}.c\:discoveryHighlight{color:var(--lns-color-discoveryHighlight)}.shadow\:small{box-shadow:var(--lns-shadow-small)}.shadow\:medium{box-shadow:var(--lns-shadow-medium)}.shadow\:large{box-shadow:var(--lns-shadow-large)}.radius\:medium{border-radius:var(--lns-radius-medium)}.radius\:large{border-radius:var(--lns-radius-large)}.radius\:xlarge{border-radius:var(--lns-radius-xlarge)}.radius\:full{border-radius:var(--lns-radius-full)}.bgc\:red{background-color:var(--lns-color-red)}.bgc\:blurpleLight{background-color:var(--lns-color-blurpleLight)}.bgc\:blurpleMedium{background-color:var(--lns-color-blurpleMedium)}.bgc\:blurple{background-color:var(--lns-color-blurple)}.bgc\:blurpleDark{background-color:var(--lns-color-blurpleDark)}.bgc\:offWhite{background-color:var(--lns-color-offWhite)}.bgc\:blueLight{background-color:var(--lns-color-blueLight)}.bgc\:blue{background-color:var(--lns-color-blue)}.bgc\:blueDark{background-color:var(--lns-color-blueDark)}.bgc\:orangeLight{background-color:var(--lns-color-orangeLight)}.bgc\:orange{background-color:var(--lns-color-orange)}.bgc\:orangeDark{background-color:var(--lns-color-orangeDark)}.bgc\:tealLight{background-color:var(--lns-color-tealLight)}.bgc\:teal{background-color:var(--lns-color-teal)}.bgc\:tealDark{background-color:var(--lns-color-tealDark)}.bgc\:yellowLight{background-color:var(--lns-color-yellowLight)}.bgc\:yellow{background-color:var(--lns-color-yellow)}.bgc\:yellowDark{background-color:var(--lns-color-yellowDark)}.bgc\:grey8{background-color:var(--lns-color-grey8)}.bgc\:grey7{background-color:var(--lns-color-grey7)}.bgc\:grey6{background-color:var(--lns-color-grey6)}.bgc\:grey5{background-color:var(--lns-color-grey5)}.bgc\:grey4{background-color:var(--lns-color-grey4)}.bgc\:grey3{background-color:var(--lns-color-grey3)}.bgc\:grey2{background-color:var(--lns-color-grey2)}.bgc\:grey1{background-color:var(--lns-color-grey1)}.bgc\:white{background-color:var(--lns-color-white)}.bgc\:primary{background-color:var(--lns-color-primary)}.bgc\:primaryHover{background-color:var(--lns-color-primaryHover)}.bgc\:primaryActive{background-color:var(--lns-color-primaryActive)}.bgc\:body{background-color:var(--lns-color-body)}.bgc\:bodyDimmed{background-color:var(--lns-color-bodyDimmed)}.bgc\:background{background-color:var(--lns-color-background)}.bgc\:backgroundHover{background-color:var(--lns-color-backgroundHover)}.bgc\:backgroundActive{background-color:var(--lns-color-backgroundActive)}.bgc\:backgroundSecondary{background-color:var(--lns-color-backgroundSecondary)}.bgc\:backgroundSecondary2{background-color:var(--lns-color-backgroundSecondary2)}.bgc\:overlay{background-color:var(--lns-color-overlay)}.bgc\:border{background-color:var(--lns-color-border)}.bgc\:focusRing{background-color:var(--lns-color-focusRing)}.bgc\:record{background-color:var(--lns-color-record)}.bgc\:recordHover{background-color:var(--lns-color-recordHover)}.bgc\:recordActive{background-color:var(--lns-color-recordActive)}.bgc\:info{background-color:var(--lns-color-info)}.bgc\:success{background-color:var(--lns-color-success)}.bgc\:warning{background-color:var(--lns-color-warning)}.bgc\:danger{background-color:var(--lns-color-danger)}.bgc\:dangerHover{background-color:var(--lns-color-dangerHover)}.bgc\:dangerActive{background-color:var(--lns-color-dangerActive)}.bgc\:backdrop{background-color:var(--lns-color-backdrop)}.bgc\:backdropDark{background-color:var(--lns-color-backdropDark)}.bgc\:disabledContent{background-color:var(--lns-color-disabledContent)}.bgc\:highlight{background-color:var(--lns-color-highlight)}.bgc\:disabledBackground{background-color:var(--lns-color-disabledBackground)}.bgc\:formFieldBorder{background-color:var(--lns-color-formFieldBorder)}.bgc\:formFieldBackground{background-color:var(--lns-color-formFieldBackground)}.bgc\:buttonBorder{background-color:var(--lns-color-buttonBorder)}.bgc\:upgrade{background-color:var(--lns-color-upgrade)}.bgc\:upgradeHover{background-color:var(--lns-color-upgradeHover)}.bgc\:upgradeActive{background-color:var(--lns-color-upgradeActive)}.bgc\:tabBackground{background-color:var(--lns-color-tabBackground)}.bgc\:discoveryBackground{background-color:var(--lns-color-discoveryBackground)}.bgc\:discoveryLightBackground{background-color:var(--lns-color-discoveryLightBackground)}.bgc\:discoveryTitle{background-color:var(--lns-color-discoveryTitle)}.bgc\:discoveryHighlight{background-color:var(--lns-color-discoveryHighlight)}.m\:0{margin:0}.m\:auto{margin:auto}.m\:xsmall{margin:var(--lns-space-xsmall)}.m\:small{margin:var(--lns-space-small)}.m\:medium{margin:var(--lns-space-medium)}.m\:large{margin:var(--lns-space-large)}.m\:xlarge{margin:var(--lns-space-xlarge)}.m\:xxlarge{margin:var(--lns-space-xxlarge)}.mt\:0{margin-top:0}.mt\:auto{margin-top:auto}.mt\:xsmall{margin-top:var(--lns-space-xsmall)}.mt\:small{margin-top:var(--lns-space-small)}.mt\:medium{margin-top:var(--lns-space-medium)}.mt\:large{margin-top:var(--lns-space-large)}.mt\:xlarge{margin-top:var(--lns-space-xlarge)}.mt\:xxlarge{margin-top:var(--lns-space-xxlarge)}.mb\:0{margin-bottom:0}.mb\:auto{margin-bottom:auto}.mb\:xsmall{margin-bottom:var(--lns-space-xsmall)}.mb\:small{margin-bottom:var(--lns-space-small)}.mb\:medium{margin-bottom:var(--lns-space-medium)}.mb\:large{margin-bottom:var(--lns-space-large)}.mb\:xlarge{margin-bottom:var(--lns-space-xlarge)}.mb\:xxlarge{margin-bottom:var(--lns-space-xxlarge)}.ml\:0{margin-left:0}.ml\:auto{margin-left:auto}.ml\:xsmall{margin-left:var(--lns-space-xsmall)}.ml\:small{margin-left:var(--lns-space-small)}.ml\:medium{margin-left:var(--lns-space-medium)}.ml\:large{margin-left:var(--lns-space-large)}.ml\:xlarge{margin-left:var(--lns-space-xlarge)}.ml\:xxlarge{margin-left:var(--lns-space-xxlarge)}.mr\:0{margin-right:0}.mr\:auto{margin-right:auto}.mr\:xsmall{margin-right:var(--lns-space-xsmall)}.mr\:small{margin-right:var(--lns-space-small)}.mr\:medium{margin-right:var(--lns-space-medium)}.mr\:large{margin-right:var(--lns-space-large)}.mr\:xlarge{margin-right:var(--lns-space-xlarge)}.mr\:xxlarge{margin-right:var(--lns-space-xxlarge)}.mx\:0{margin-left:0;margin-right:0}.mx\:auto{margin-left:auto;margin-right:auto}.mx\:xsmall{margin-left:var(--lns-space-xsmall);margin-right:var(--lns-space-xsmall)}.mx\:small{margin-left:var(--lns-space-small);margin-right:var(--lns-space-small)}.mx\:medium{margin-left:var(--lns-space-medium);margin-right:var(--lns-space-medium)}.mx\:large{margin-left:var(--lns-space-large);margin-right:var(--lns-space-large)}.mx\:xlarge{margin-left:var(--lns-space-xlarge);margin-right:var(--lns-space-xlarge)}.mx\:xxlarge{margin-left:var(--lns-space-xxlarge);margin-right:var(--lns-space-xxlarge)}.my\:0{margin-top:0;margin-bottom:0}.my\:auto{margin-top:auto;margin-bottom:auto}.my\:xsmall{margin-top:var(--lns-space-xsmall);margin-bottom:var(--lns-space-xsmall)}.my\:small{margin-top:var(--lns-space-small);margin-bottom:var(--lns-space-small)}.my\:medium{margin-top:var(--lns-space-medium);margin-bottom:var(--lns-space-medium)}.my\:large{margin-top:var(--lns-space-large);margin-bottom:var(--lns-space-large)}.my\:xlarge{margin-top:var(--lns-space-xlarge);margin-bottom:var(--lns-space-xlarge)}.my\:xxlarge{margin-top:var(--lns-space-xxlarge);margin-bottom:var(--lns-space-xxlarge)}.p\:0{padding:0}.p\:xsmall{padding:var(--lns-space-xsmall)}.p\:small{padding:var(--lns-space-small)}.p\:medium{padding:var(--lns-space-medium)}.p\:large{padding:var(--lns-space-large)}.p\:xlarge{padding:var(--lns-space-xlarge)}.p\:xxlarge{padding:var(--lns-space-xxlarge)}.pt\:0{padding-top:0}.pt\:xsmall{padding-top:var(--lns-space-xsmall)}.pt\:small{padding-top:var(--lns-space-small)}.pt\:medium{padding-top:var(--lns-space-medium)}.pt\:large{padding-top:var(--lns-space-large)}.pt\:xlarge{padding-top:var(--lns-space-xlarge)}.pt\:xxlarge{padding-top:var(--lns-space-xxlarge)}.pb\:0{padding-bottom:0}.pb\:xsmall{padding-bottom:var(--lns-space-xsmall)}.pb\:small{padding-bottom:var(--lns-space-small)}.pb\:medium{padding-bottom:var(--lns-space-medium)}.pb\:large{padding-bottom:var(--lns-space-large)}.pb\:xlarge{padding-bottom:var(--lns-space-xlarge)}.pb\:xxlarge{padding-bottom:var(--lns-space-xxlarge)}.pl\:0{padding-left:0}.pl\:xsmall{padding-left:var(--lns-space-xsmall)}.pl\:small{padding-left:var(--lns-space-small)}.pl\:medium{padding-left:var(--lns-space-medium)}.pl\:large{padding-left:var(--lns-space-large)}.pl\:xlarge{padding-left:var(--lns-space-xlarge)}.pl\:xxlarge{padding-left:var(--lns-space-xxlarge)}.pr\:0{padding-right:0}.pr\:xsmall{padding-right:var(--lns-space-xsmall)}.pr\:small{padding-right:var(--lns-space-small)}.pr\:medium{padding-right:var(--lns-space-medium)}.pr\:large{padding-right:var(--lns-space-large)}.pr\:xlarge{padding-right:var(--lns-space-xlarge)}.pr\:xxlarge{padding-right:var(--lns-space-xxlarge)}.px\:0{padding-left:0;padding-right:0}.px\:xsmall{padding-left:var(--lns-space-xsmall);padding-right:var(--lns-space-xsmall)}.px\:small{padding-left:var(--lns-space-small);padding-right:var(--lns-space-small)}.px\:medium{padding-left:var(--lns-space-medium);padding-right:var(--lns-space-medium)}.px\:large{padding-left:var(--lns-space-large);padding-right:var(--lns-space-large)}.px\:xlarge{padding-left:var(--lns-space-xlarge);padding-right:var(--lns-space-xlarge)}.px\:xxlarge{padding-left:var(--lns-space-xxlarge);padding-right:var(--lns-space-xxlarge)}.py\:0{padding-top:0;padding-bottom:0}.py\:xsmall{padding-top:var(--lns-space-xsmall);padding-bottom:var(--lns-space-xsmall)}.py\:small{padding-top:var(--lns-space-small);padding-bottom:var(--lns-space-small)}.py\:medium{padding-top:var(--lns-space-medium);padding-bottom:var(--lns-space-medium)}.py\:large{padding-top:var(--lns-space-large);padding-bottom:var(--lns-space-large)}.py\:xlarge{padding-top:var(--lns-space-xlarge);padding-bottom:var(--lns-space-xlarge)}.py\:xxlarge{padding-top:var(--lns-space-xxlarge);padding-bottom:var(--lns-space-xxlarge)}.text\:small{font-size:var(--lns-fontSize-small);line-height:var(--lns-lineHeight-small)}.text\:body-sm{font-size:var(--lns-fontSize-body-sm);line-height:var(--lns-lineHeight-body-sm)}.text\:medium{font-size:var(--lns-fontSize-medium);line-height:var(--lns-lineHeight-medium)}.text\:body-md{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md)}.text\:large{font-size:var(--lns-fontSize-large);line-height:var(--lns-lineHeight-large)}.text\:body-lg{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg)}.text\:xlarge{font-size:var(--lns-fontSize-xlarge);line-height:var(--lns-lineHeight-xlarge)}.text\:heading-sm{font-size:var(--lns-fontSize-heading-sm);line-height:var(--lns-lineHeight-heading-sm)}.text\:xxlarge{font-size:var(--lns-fontSize-xxlarge);line-height:var(--lns-lineHeight-xxlarge)}.text\:heading-md{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md)}.text\:xxxlarge{font-size:var(--lns-fontSize-xxxlarge);line-height:var(--lns-lineHeight-xxxlarge)}.text\:heading-lg{font-size:var(--lns-fontSize-heading-lg);line-height:var(--lns-lineHeight-heading-lg)}.weight\:book{font-weight:var(--lns-fontWeight-book)}.weight\:bold{font-weight:var(--lns-fontWeight-bold)}.text\:body{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md);font-weight:var(--lns-fontWeight-book)}.text\:title{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg);font-weight:var(--lns-fontWeight-bold)}.text\:mainTitle{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md);font-weight:var(--lns-fontWeight-bold)}.text\:left{text-align:left}.text\:right{text-align:right}.text\:center{text-align:center}.border{border:1px solid var(--lns-color-border)}.borderTop{border-top:1px solid var(--lns-color-border)}.borderBottom{border-bottom:1px solid var(--lns-color-border)}.borderLeft{border-left:1px solid var(--lns-color-border)}.borderRight{border-right:1px solid var(--lns-color-border)}.inline{display:inline}.block{display:block}.flex{display:flex}.inlineBlock{display:inline-block}.inlineFlex{display:inline-flex}.none{display:none}.flexWrap{flex-wrap:wrap}.flexDirection\:column{flex-direction:column}.flexDirection\:row{flex-direction:row}.items\:stretch{align-items:stretch}.items\:center{align-items:center}.items\:baseline{align-items:baseline}.items\:flexStart{align-items:flex-start}.items\:flexEnd{align-items:flex-end}.items\:selfStart{align-items:self-start}.items\:selfEnd{align-items:self-end}.justify\:flexStart{justify-content:flex-start}.justify\:flexEnd{justify-content:flex-end}.justify\:center{justify-content:center}.justify\:spaceBetween{justify-content:space-between}.justify\:spaceAround{justify-content:space-around}.justify\:spaceEvenly{justify-content:space-evenly}.grow\:0{flex-grow:0}.grow\:1{flex-grow:1}.shrink\:0{flex-shrink:0}.shrink\:1{flex-shrink:1}.self\:auto{align-self:auto}.self\:flexStart{align-self:flex-start}.self\:flexEnd{align-self:flex-end}.self\:center{align-self:center}.self\:baseline{align-self:baseline}.self\:stretch{align-self:stretch}.overflow\:hidden{overflow:hidden}.overflow\:auto{overflow:auto}.relative{position:relative}.absolute{position:absolute}.sticky{position:sticky}.fixed{position:fixed}.top\:0{top:0}.top\:auto{top:auto}.top\:xsmall{top:var(--lns-space-xsmall)}.top\:small{top:var(--lns-space-small)}.top\:medium{top:var(--lns-space-medium)}.top\:large{top:var(--lns-space-large)}.top\:xlarge{top:var(--lns-space-xlarge)}.top\:xxlarge{top:var(--lns-space-xxlarge)}.bottom\:0{bottom:0}.bottom\:auto{bottom:auto}.bottom\:xsmall{bottom:var(--lns-space-xsmall)}.bottom\:small{bottom:var(--lns-space-small)}.bottom\:medium{bottom:var(--lns-space-medium)}.bottom\:large{bottom:var(--lns-space-large)}.bottom\:xlarge{bottom:var(--lns-space-xlarge)}.bottom\:xxlarge{bottom:var(--lns-space-xxlarge)}.left\:0{left:0}.left\:auto{left:auto}.left\:xsmall{left:var(--lns-space-xsmall)}.left\:small{left:var(--lns-space-small)}.left\:medium{left:var(--lns-space-medium)}.left\:large{left:var(--lns-space-large)}.left\:xlarge{left:var(--lns-space-xlarge)}.left\:xxlarge{left:var(--lns-space-xxlarge)}.right\:0{right:0}.right\:auto{right:auto}.right\:xsmall{right:var(--lns-space-xsmall)}.right\:small{right:var(--lns-space-small)}.right\:medium{right:var(--lns-space-medium)}.right\:large{right:var(--lns-space-large)}.right\:xlarge{right:var(--lns-space-xlarge)}.right\:xxlarge{right:var(--lns-space-xxlarge)}.width\:auto{width:auto}.width\:full{width:100%}.width\:0{width:0}.minWidth\:0{min-width:0}.height\:auto{height:auto}.height\:full{height:100%}.height\:0{height:0}.ellipsis{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.srOnly{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0}@media(min-width:31em){.xs-c\:red{color:var(--lns-color-red)}.xs-c\:blurpleLight{color:var(--lns-color-blurpleLight)}.xs-c\:blurpleMedium{color:var(--lns-color-blurpleMedium)}.xs-c\:blurple{color:var(--lns-color-blurple)}.xs-c\:blurpleDark{color:var(--lns-color-blurpleDark)}.xs-c\:offWhite{color:var(--lns-color-offWhite)}.xs-c\:blueLight{color:var(--lns-color-blueLight)}.xs-c\:blue{color:var(--lns-color-blue)}.xs-c\:blueDark{color:var(--lns-color-blueDark)}.xs-c\:orangeLight{color:var(--lns-color-orangeLight)}.xs-c\:orange{color:var(--lns-color-orange)}.xs-c\:orangeDark{color:var(--lns-color-orangeDark)}.xs-c\:tealLight{color:var(--lns-color-tealLight)}.xs-c\:teal{color:var(--lns-color-teal)}.xs-c\:tealDark{color:var(--lns-color-tealDark)}.xs-c\:yellowLight{color:var(--lns-color-yellowLight)}.xs-c\:yellow{color:var(--lns-color-yellow)}.xs-c\:yellowDark{color:var(--lns-color-yellowDark)}.xs-c\:grey8{color:var(--lns-color-grey8)}.xs-c\:grey7{color:var(--lns-color-grey7)}.xs-c\:grey6{color:var(--lns-color-grey6)}.xs-c\:grey5{color:var(--lns-color-grey5)}.xs-c\:grey4{color:var(--lns-color-grey4)}.xs-c\:grey3{color:var(--lns-color-grey3)}.xs-c\:grey2{color:var(--lns-color-grey2)}.xs-c\:grey1{color:var(--lns-color-grey1)}.xs-c\:white{color:var(--lns-color-white)}.xs-c\:primary{color:var(--lns-color-primary)}.xs-c\:primaryHover{color:var(--lns-color-primaryHover)}.xs-c\:primaryActive{color:var(--lns-color-primaryActive)}.xs-c\:body{color:var(--lns-color-body)}.xs-c\:bodyDimmed{color:var(--lns-color-bodyDimmed)}.xs-c\:background{color:var(--lns-color-background)}.xs-c\:backgroundHover{color:var(--lns-color-backgroundHover)}.xs-c\:backgroundActive{color:var(--lns-color-backgroundActive)}.xs-c\:backgroundSecondary{color:var(--lns-color-backgroundSecondary)}.xs-c\:backgroundSecondary2{color:var(--lns-color-backgroundSecondary2)}.xs-c\:overlay{color:var(--lns-color-overlay)}.xs-c\:border{color:var(--lns-color-border)}.xs-c\:focusRing{color:var(--lns-color-focusRing)}.xs-c\:record{color:var(--lns-color-record)}.xs-c\:recordHover{color:var(--lns-color-recordHover)}.xs-c\:recordActive{color:var(--lns-color-recordActive)}.xs-c\:info{color:var(--lns-color-info)}.xs-c\:success{color:var(--lns-color-success)}.xs-c\:warning{color:var(--lns-color-warning)}.xs-c\:danger{color:var(--lns-color-danger)}.xs-c\:dangerHover{color:var(--lns-color-dangerHover)}.xs-c\:dangerActive{color:var(--lns-color-dangerActive)}.xs-c\:backdrop{color:var(--lns-color-backdrop)}.xs-c\:backdropDark{color:var(--lns-color-backdropDark)}.xs-c\:disabledContent{color:var(--lns-color-disabledContent)}.xs-c\:highlight{color:var(--lns-color-highlight)}.xs-c\:disabledBackground{color:var(--lns-color-disabledBackground)}.xs-c\:formFieldBorder{color:var(--lns-color-formFieldBorder)}.xs-c\:formFieldBackground{color:var(--lns-color-formFieldBackground)}.xs-c\:buttonBorder{color:var(--lns-color-buttonBorder)}.xs-c\:upgrade{color:var(--lns-color-upgrade)}.xs-c\:upgradeHover{color:var(--lns-color-upgradeHover)}.xs-c\:upgradeActive{color:var(--lns-color-upgradeActive)}.xs-c\:tabBackground{color:var(--lns-color-tabBackground)}.xs-c\:discoveryBackground{color:var(--lns-color-discoveryBackground)}.xs-c\:discoveryLightBackground{color:var(--lns-color-discoveryLightBackground)}.xs-c\:discoveryTitle{color:var(--lns-color-discoveryTitle)}.xs-c\:discoveryHighlight{color:var(--lns-color-discoveryHighlight)}.xs-shadow\:small{box-shadow:var(--lns-shadow-small)}.xs-shadow\:medium{box-shadow:var(--lns-shadow-medium)}.xs-shadow\:large{box-shadow:var(--lns-shadow-large)}.xs-radius\:medium{border-radius:var(--lns-radius-medium)}.xs-radius\:large{border-radius:var(--lns-radius-large)}.xs-radius\:xlarge{border-radius:var(--lns-radius-xlarge)}.xs-radius\:full{border-radius:var(--lns-radius-full)}.xs-bgc\:red{background-color:var(--lns-color-red)}.xs-bgc\:blurpleLight{background-color:var(--lns-color-blurpleLight)}.xs-bgc\:blurpleMedium{background-color:var(--lns-color-blurpleMedium)}.xs-bgc\:blurple{background-color:var(--lns-color-blurple)}.xs-bgc\:blurpleDark{background-color:var(--lns-color-blurpleDark)}.xs-bgc\:offWhite{background-color:var(--lns-color-offWhite)}.xs-bgc\:blueLight{background-color:var(--lns-color-blueLight)}.xs-bgc\:blue{background-color:var(--lns-color-blue)}.xs-bgc\:blueDark{background-color:var(--lns-color-blueDark)}.xs-bgc\:orangeLight{background-color:var(--lns-color-orangeLight)}.xs-bgc\:orange{background-color:var(--lns-color-orange)}.xs-bgc\:orangeDark{background-color:var(--lns-color-orangeDark)}.xs-bgc\:tealLight{background-color:var(--lns-color-tealLight)}.xs-bgc\:teal{background-color:var(--lns-color-teal)}.xs-bgc\:tealDark{background-color:var(--lns-color-tealDark)}.xs-bgc\:yellowLight{background-color:var(--lns-color-yellowLight)}.xs-bgc\:yellow{background-color:var(--lns-color-yellow)}.xs-bgc\:yellowDark{background-color:var(--lns-color-yellowDark)}.xs-bgc\:grey8{background-color:var(--lns-color-grey8)}.xs-bgc\:grey7{background-color:var(--lns-color-grey7)}.xs-bgc\:grey6{background-color:var(--lns-color-grey6)}.xs-bgc\:grey5{background-color:var(--lns-color-grey5)}.xs-bgc\:grey4{background-color:var(--lns-color-grey4)}.xs-bgc\:grey3{background-color:var(--lns-color-grey3)}.xs-bgc\:grey2{background-color:var(--lns-color-grey2)}.xs-bgc\:grey1{background-color:var(--lns-color-grey1)}.xs-bgc\:white{background-color:var(--lns-color-white)}.xs-bgc\:primary{background-color:var(--lns-color-primary)}.xs-bgc\:primaryHover{background-color:var(--lns-color-primaryHover)}.xs-bgc\:primaryActive{background-color:var(--lns-color-primaryActive)}.xs-bgc\:body{background-color:var(--lns-color-body)}.xs-bgc\:bodyDimmed{background-color:var(--lns-color-bodyDimmed)}.xs-bgc\:background{background-color:var(--lns-color-background)}.xs-bgc\:backgroundHover{background-color:var(--lns-color-backgroundHover)}.xs-bgc\:backgroundActive{background-color:var(--lns-color-backgroundActive)}.xs-bgc\:backgroundSecondary{background-color:var(--lns-color-backgroundSecondary)}.xs-bgc\:backgroundSecondary2{background-color:var(--lns-color-backgroundSecondary2)}.xs-bgc\:overlay{background-color:var(--lns-color-overlay)}.xs-bgc\:border{background-color:var(--lns-color-border)}.xs-bgc\:focusRing{background-color:var(--lns-color-focusRing)}.xs-bgc\:record{background-color:var(--lns-color-record)}.xs-bgc\:recordHover{background-color:var(--lns-color-recordHover)}.xs-bgc\:recordActive{background-color:var(--lns-color-recordActive)}.xs-bgc\:info{background-color:var(--lns-color-info)}.xs-bgc\:success{background-color:var(--lns-color-success)}.xs-bgc\:warning{background-color:var(--lns-color-warning)}.xs-bgc\:danger{background-color:var(--lns-color-danger)}.xs-bgc\:dangerHover{background-color:var(--lns-color-dangerHover)}.xs-bgc\:dangerActive{background-color:var(--lns-color-dangerActive)}.xs-bgc\:backdrop{background-color:var(--lns-color-backdrop)}.xs-bgc\:backdropDark{background-color:var(--lns-color-backdropDark)}.xs-bgc\:disabledContent{background-color:var(--lns-color-disabledContent)}.xs-bgc\:highlight{background-color:var(--lns-color-highlight)}.xs-bgc\:disabledBackground{background-color:var(--lns-color-disabledBackground)}.xs-bgc\:formFieldBorder{background-color:var(--lns-color-formFieldBorder)}.xs-bgc\:formFieldBackground{background-color:var(--lns-color-formFieldBackground)}.xs-bgc\:buttonBorder{background-color:var(--lns-color-buttonBorder)}.xs-bgc\:upgrade{background-color:var(--lns-color-upgrade)}.xs-bgc\:upgradeHover{background-color:var(--lns-color-upgradeHover)}.xs-bgc\:upgradeActive{background-color:var(--lns-color-upgradeActive)}.xs-bgc\:tabBackground{background-color:var(--lns-color-tabBackground)}.xs-bgc\:discoveryBackground{background-color:var(--lns-color-discoveryBackground)}.xs-bgc\:discoveryLightBackground{background-color:var(--lns-color-discoveryLightBackground)}.xs-bgc\:discoveryTitle{background-color:var(--lns-color-discoveryTitle)}.xs-bgc\:discoveryHighlight{background-color:var(--lns-color-discoveryHighlight)}.xs-m\:0{margin:0}.xs-m\:auto{margin:auto}.xs-m\:xsmall{margin:var(--lns-space-xsmall)}.xs-m\:small{margin:var(--lns-space-small)}.xs-m\:medium{margin:var(--lns-space-medium)}.xs-m\:large{margin:var(--lns-space-large)}.xs-m\:xlarge{margin:var(--lns-space-xlarge)}.xs-m\:xxlarge{margin:var(--lns-space-xxlarge)}.xs-mt\:0{margin-top:0}.xs-mt\:auto{margin-top:auto}.xs-mt\:xsmall{margin-top:var(--lns-space-xsmall)}.xs-mt\:small{margin-top:var(--lns-space-small)}.xs-mt\:medium{margin-top:var(--lns-space-medium)}.xs-mt\:large{margin-top:var(--lns-space-large)}.xs-mt\:xlarge{margin-top:var(--lns-space-xlarge)}.xs-mt\:xxlarge{margin-top:var(--lns-space-xxlarge)}.xs-mb\:0{margin-bottom:0}.xs-mb\:auto{margin-bottom:auto}.xs-mb\:xsmall{margin-bottom:var(--lns-space-xsmall)}.xs-mb\:small{margin-bottom:var(--lns-space-small)}.xs-mb\:medium{margin-bottom:var(--lns-space-medium)}.xs-mb\:large{margin-bottom:var(--lns-space-large)}.xs-mb\:xlarge{margin-bottom:var(--lns-space-xlarge)}.xs-mb\:xxlarge{margin-bottom:var(--lns-space-xxlarge)}.xs-ml\:0{margin-left:0}.xs-ml\:auto{margin-left:auto}.xs-ml\:xsmall{margin-left:var(--lns-space-xsmall)}.xs-ml\:small{margin-left:var(--lns-space-small)}.xs-ml\:medium{margin-left:var(--lns-space-medium)}.xs-ml\:large{margin-left:var(--lns-space-large)}.xs-ml\:xlarge{margin-left:var(--lns-space-xlarge)}.xs-ml\:xxlarge{margin-left:var(--lns-space-xxlarge)}.xs-mr\:0{margin-right:0}.xs-mr\:auto{margin-right:auto}.xs-mr\:xsmall{margin-right:var(--lns-space-xsmall)}.xs-mr\:small{margin-right:var(--lns-space-small)}.xs-mr\:medium{margin-right:var(--lns-space-medium)}.xs-mr\:large{margin-right:var(--lns-space-large)}.xs-mr\:xlarge{margin-right:var(--lns-space-xlarge)}.xs-mr\:xxlarge{margin-right:var(--lns-space-xxlarge)}.xs-mx\:0{margin-left:0;margin-right:0}.xs-mx\:auto{margin-left:auto;margin-right:auto}.xs-mx\:xsmall{margin-left:var(--lns-space-xsmall);margin-right:var(--lns-space-xsmall)}.xs-mx\:small{margin-left:var(--lns-space-small);margin-right:var(--lns-space-small)}.xs-mx\:medium{margin-left:var(--lns-space-medium);margin-right:var(--lns-space-medium)}.xs-mx\:large{margin-left:var(--lns-space-large);margin-right:var(--lns-space-large)}.xs-mx\:xlarge{margin-left:var(--lns-space-xlarge);margin-right:var(--lns-space-xlarge)}.xs-mx\:xxlarge{margin-left:var(--lns-space-xxlarge);margin-right:var(--lns-space-xxlarge)}.xs-my\:0{margin-top:0;margin-bottom:0}.xs-my\:auto{margin-top:auto;margin-bottom:auto}.xs-my\:xsmall{margin-top:var(--lns-space-xsmall);margin-bottom:var(--lns-space-xsmall)}.xs-my\:small{margin-top:var(--lns-space-small);margin-bottom:var(--lns-space-small)}.xs-my\:medium{margin-top:var(--lns-space-medium);margin-bottom:var(--lns-space-medium)}.xs-my\:large{margin-top:var(--lns-space-large);margin-bottom:var(--lns-space-large)}.xs-my\:xlarge{margin-top:var(--lns-space-xlarge);margin-bottom:var(--lns-space-xlarge)}.xs-my\:xxlarge{margin-top:var(--lns-space-xxlarge);margin-bottom:var(--lns-space-xxlarge)}.xs-p\:0{padding:0}.xs-p\:xsmall{padding:var(--lns-space-xsmall)}.xs-p\:small{padding:var(--lns-space-small)}.xs-p\:medium{padding:var(--lns-space-medium)}.xs-p\:large{padding:var(--lns-space-large)}.xs-p\:xlarge{padding:var(--lns-space-xlarge)}.xs-p\:xxlarge{padding:var(--lns-space-xxlarge)}.xs-pt\:0{padding-top:0}.xs-pt\:xsmall{padding-top:var(--lns-space-xsmall)}.xs-pt\:small{padding-top:var(--lns-space-small)}.xs-pt\:medium{padding-top:var(--lns-space-medium)}.xs-pt\:large{padding-top:var(--lns-space-large)}.xs-pt\:xlarge{padding-top:var(--lns-space-xlarge)}.xs-pt\:xxlarge{padding-top:var(--lns-space-xxlarge)}.xs-pb\:0{padding-bottom:0}.xs-pb\:xsmall{padding-bottom:var(--lns-space-xsmall)}.xs-pb\:small{padding-bottom:var(--lns-space-small)}.xs-pb\:medium{padding-bottom:var(--lns-space-medium)}.xs-pb\:large{padding-bottom:var(--lns-space-large)}.xs-pb\:xlarge{padding-bottom:var(--lns-space-xlarge)}.xs-pb\:xxlarge{padding-bottom:var(--lns-space-xxlarge)}.xs-pl\:0{padding-left:0}.xs-pl\:xsmall{padding-left:var(--lns-space-xsmall)}.xs-pl\:small{padding-left:var(--lns-space-small)}.xs-pl\:medium{padding-left:var(--lns-space-medium)}.xs-pl\:large{padding-left:var(--lns-space-large)}.xs-pl\:xlarge{padding-left:var(--lns-space-xlarge)}.xs-pl\:xxlarge{padding-left:var(--lns-space-xxlarge)}.xs-pr\:0{padding-right:0}.xs-pr\:xsmall{padding-right:var(--lns-space-xsmall)}.xs-pr\:small{padding-right:var(--lns-space-small)}.xs-pr\:medium{padding-right:var(--lns-space-medium)}.xs-pr\:large{padding-right:var(--lns-space-large)}.xs-pr\:xlarge{padding-right:var(--lns-space-xlarge)}.xs-pr\:xxlarge{padding-right:var(--lns-space-xxlarge)}.xs-px\:0{padding-left:0;padding-right:0}.xs-px\:xsmall{padding-left:var(--lns-space-xsmall);padding-right:var(--lns-space-xsmall)}.xs-px\:small{padding-left:var(--lns-space-small);padding-right:var(--lns-space-small)}.xs-px\:medium{padding-left:var(--lns-space-medium);padding-right:var(--lns-space-medium)}.xs-px\:large{padding-left:var(--lns-space-large);padding-right:var(--lns-space-large)}.xs-px\:xlarge{padding-left:var(--lns-space-xlarge);padding-right:var(--lns-space-xlarge)}.xs-px\:xxlarge{padding-left:var(--lns-space-xxlarge);padding-right:var(--lns-space-xxlarge)}.xs-py\:0{padding-top:0;padding-bottom:0}.xs-py\:xsmall{padding-top:var(--lns-space-xsmall);padding-bottom:var(--lns-space-xsmall)}.xs-py\:small{padding-top:var(--lns-space-small);padding-bottom:var(--lns-space-small)}.xs-py\:medium{padding-top:var(--lns-space-medium);padding-bottom:var(--lns-space-medium)}.xs-py\:large{padding-top:var(--lns-space-large);padding-bottom:var(--lns-space-large)}.xs-py\:xlarge{padding-top:var(--lns-space-xlarge);padding-bottom:var(--lns-space-xlarge)}.xs-py\:xxlarge{padding-top:var(--lns-space-xxlarge);padding-bottom:var(--lns-space-xxlarge)}.xs-text\:small{font-size:var(--lns-fontSize-small);line-height:var(--lns-lineHeight-small)}.xs-text\:body-sm{font-size:var(--lns-fontSize-body-sm);line-height:var(--lns-lineHeight-body-sm)}.xs-text\:medium{font-size:var(--lns-fontSize-medium);line-height:var(--lns-lineHeight-medium)}.xs-text\:body-md{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md)}.xs-text\:large{font-size:var(--lns-fontSize-large);line-height:var(--lns-lineHeight-large)}.xs-text\:body-lg{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg)}.xs-text\:xlarge{font-size:var(--lns-fontSize-xlarge);line-height:var(--lns-lineHeight-xlarge)}.xs-text\:heading-sm{font-size:var(--lns-fontSize-heading-sm);line-height:var(--lns-lineHeight-heading-sm)}.xs-text\:xxlarge{font-size:var(--lns-fontSize-xxlarge);line-height:var(--lns-lineHeight-xxlarge)}.xs-text\:heading-md{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md)}.xs-text\:xxxlarge{font-size:var(--lns-fontSize-xxxlarge);line-height:var(--lns-lineHeight-xxxlarge)}.xs-text\:heading-lg{font-size:var(--lns-fontSize-heading-lg);line-height:var(--lns-lineHeight-heading-lg)}.xs-weight\:book{font-weight:var(--lns-fontWeight-book)}.xs-weight\:bold{font-weight:var(--lns-fontWeight-bold)}.xs-text\:body{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md);font-weight:var(--lns-fontWeight-book)}.xs-text\:title{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg);font-weight:var(--lns-fontWeight-bold)}.xs-text\:mainTitle{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md);font-weight:var(--lns-fontWeight-bold)}.xs-text\:left{text-align:left}.xs-text\:right{text-align:right}.xs-text\:center{text-align:center}.xs-border{border:1px solid var(--lns-color-border)}.xs-borderTop{border-top:1px solid var(--lns-color-border)}.xs-borderBottom{border-bottom:1px solid var(--lns-color-border)}.xs-borderLeft{border-left:1px solid var(--lns-color-border)}.xs-borderRight{border-right:1px solid var(--lns-color-border)}.xs-inline{display:inline}.xs-block{display:block}.xs-flex{display:flex}.xs-inlineBlock{display:inline-block}.xs-inlineFlex{display:inline-flex}.xs-none{display:none}.xs-flexWrap{flex-wrap:wrap}.xs-flexDirection\:column{flex-direction:column}.xs-flexDirection\:row{flex-direction:row}.xs-items\:stretch{align-items:stretch}.xs-items\:center{align-items:center}.xs-items\:baseline{align-items:baseline}.xs-items\:flexStart{align-items:flex-start}.xs-items\:flexEnd{align-items:flex-end}.xs-items\:selfStart{align-items:self-start}.xs-items\:selfEnd{align-items:self-end}.xs-justify\:flexStart{justify-content:flex-start}.xs-justify\:flexEnd{justify-content:flex-end}.xs-justify\:center{justify-content:center}.xs-justify\:spaceBetween{justify-content:space-between}.xs-justify\:spaceAround{justify-content:space-around}.xs-justify\:spaceEvenly{justify-content:space-evenly}.xs-grow\:0{flex-grow:0}.xs-grow\:1{flex-grow:1}.xs-shrink\:0{flex-shrink:0}.xs-shrink\:1{flex-shrink:1}.xs-self\:auto{align-self:auto}.xs-self\:flexStart{align-self:flex-start}.xs-self\:flexEnd{align-self:flex-end}.xs-self\:center{align-self:center}.xs-self\:baseline{align-self:baseline}.xs-self\:stretch{align-self:stretch}.xs-overflow\:hidden{overflow:hidden}.xs-overflow\:auto{overflow:auto}.xs-relative{position:relative}.xs-absolute{position:absolute}.xs-sticky{position:sticky}.xs-fixed{position:fixed}.xs-top\:0{top:0}.xs-top\:auto{top:auto}.xs-top\:xsmall{top:var(--lns-space-xsmall)}.xs-top\:small{top:var(--lns-space-small)}.xs-top\:medium{top:var(--lns-space-medium)}.xs-top\:large{top:var(--lns-space-large)}.xs-top\:xlarge{top:var(--lns-space-xlarge)}.xs-top\:xxlarge{top:var(--lns-space-xxlarge)}.xs-bottom\:0{bottom:0}.xs-bottom\:auto{bottom:auto}.xs-bottom\:xsmall{bottom:var(--lns-space-xsmall)}.xs-bottom\:small{bottom:var(--lns-space-small)}.xs-bottom\:medium{bottom:var(--lns-space-medium)}.xs-bottom\:large{bottom:var(--lns-space-large)}.xs-bottom\:xlarge{bottom:var(--lns-space-xlarge)}.xs-bottom\:xxlarge{bottom:var(--lns-space-xxlarge)}.xs-left\:0{left:0}.xs-left\:auto{left:auto}.xs-left\:xsmall{left:var(--lns-space-xsmall)}.xs-left\:small{left:var(--lns-space-small)}.xs-left\:medium{left:var(--lns-space-medium)}.xs-left\:large{left:var(--lns-space-large)}.xs-left\:xlarge{left:var(--lns-space-xlarge)}.xs-left\:xxlarge{left:var(--lns-space-xxlarge)}.xs-right\:0{right:0}.xs-right\:auto{right:auto}.xs-right\:xsmall{right:var(--lns-space-xsmall)}.xs-right\:small{right:var(--lns-space-small)}.xs-right\:medium{right:var(--lns-space-medium)}.xs-right\:large{right:var(--lns-space-large)}.xs-right\:xlarge{right:var(--lns-space-xlarge)}.xs-right\:xxlarge{right:var(--lns-space-xxlarge)}.xs-width\:auto{width:auto}.xs-width\:full{width:100%}.xs-width\:0{width:0}.xs-minWidth\:0{min-width:0}.xs-height\:auto{height:auto}.xs-height\:full{height:100%}.xs-height\:0{height:0}.xs-ellipsis{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.xs-srOnly{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0}}@media(min-width:48em){.sm-c\:red{color:var(--lns-color-red)}.sm-c\:blurpleLight{color:var(--lns-color-blurpleLight)}.sm-c\:blurpleMedium{color:var(--lns-color-blurpleMedium)}.sm-c\:blurple{color:var(--lns-color-blurple)}.sm-c\:blurpleDark{color:var(--lns-color-blurpleDark)}.sm-c\:offWhite{color:var(--lns-color-offWhite)}.sm-c\:blueLight{color:var(--lns-color-blueLight)}.sm-c\:blue{color:var(--lns-color-blue)}.sm-c\:blueDark{color:var(--lns-color-blueDark)}.sm-c\:orangeLight{color:var(--lns-color-orangeLight)}.sm-c\:orange{color:var(--lns-color-orange)}.sm-c\:orangeDark{color:var(--lns-color-orangeDark)}.sm-c\:tealLight{color:var(--lns-color-tealLight)}.sm-c\:teal{color:var(--lns-color-teal)}.sm-c\:tealDark{color:var(--lns-color-tealDark)}.sm-c\:yellowLight{color:var(--lns-color-yellowLight)}.sm-c\:yellow{color:var(--lns-color-yellow)}.sm-c\:yellowDark{color:var(--lns-color-yellowDark)}.sm-c\:grey8{color:var(--lns-color-grey8)}.sm-c\:grey7{color:var(--lns-color-grey7)}.sm-c\:grey6{color:var(--lns-color-grey6)}.sm-c\:grey5{color:var(--lns-color-grey5)}.sm-c\:grey4{color:var(--lns-color-grey4)}.sm-c\:grey3{color:var(--lns-color-grey3)}.sm-c\:grey2{color:var(--lns-color-grey2)}.sm-c\:grey1{color:var(--lns-color-grey1)}.sm-c\:white{color:var(--lns-color-white)}.sm-c\:primary{color:var(--lns-color-primary)}.sm-c\:primaryHover{color:var(--lns-color-primaryHover)}.sm-c\:primaryActive{color:var(--lns-color-primaryActive)}.sm-c\:body{color:var(--lns-color-body)}.sm-c\:bodyDimmed{color:var(--lns-color-bodyDimmed)}.sm-c\:background{color:var(--lns-color-background)}.sm-c\:backgroundHover{color:var(--lns-color-backgroundHover)}.sm-c\:backgroundActive{color:var(--lns-color-backgroundActive)}.sm-c\:backgroundSecondary{color:var(--lns-color-backgroundSecondary)}.sm-c\:backgroundSecondary2{color:var(--lns-color-backgroundSecondary2)}.sm-c\:overlay{color:var(--lns-color-overlay)}.sm-c\:border{color:var(--lns-color-border)}.sm-c\:focusRing{color:var(--lns-color-focusRing)}.sm-c\:record{color:var(--lns-color-record)}.sm-c\:recordHover{color:var(--lns-color-recordHover)}.sm-c\:recordActive{color:var(--lns-color-recordActive)}.sm-c\:info{color:var(--lns-color-info)}.sm-c\:success{color:var(--lns-color-success)}.sm-c\:warning{color:var(--lns-color-warning)}.sm-c\:danger{color:var(--lns-color-danger)}.sm-c\:dangerHover{color:var(--lns-color-dangerHover)}.sm-c\:dangerActive{color:var(--lns-color-dangerActive)}.sm-c\:backdrop{color:var(--lns-color-backdrop)}.sm-c\:backdropDark{color:var(--lns-color-backdropDark)}.sm-c\:disabledContent{color:var(--lns-color-disabledContent)}.sm-c\:highlight{color:var(--lns-color-highlight)}.sm-c\:disabledBackground{color:var(--lns-color-disabledBackground)}.sm-c\:formFieldBorder{color:var(--lns-color-formFieldBorder)}.sm-c\:formFieldBackground{color:var(--lns-color-formFieldBackground)}.sm-c\:buttonBorder{color:var(--lns-color-buttonBorder)}.sm-c\:upgrade{color:var(--lns-color-upgrade)}.sm-c\:upgradeHover{color:var(--lns-color-upgradeHover)}.sm-c\:upgradeActive{color:var(--lns-color-upgradeActive)}.sm-c\:tabBackground{color:var(--lns-color-tabBackground)}.sm-c\:discoveryBackground{color:var(--lns-color-discoveryBackground)}.sm-c\:discoveryLightBackground{color:var(--lns-color-discoveryLightBackground)}.sm-c\:discoveryTitle{color:var(--lns-color-discoveryTitle)}.sm-c\:discoveryHighlight{color:var(--lns-color-discoveryHighlight)}.sm-shadow\:small{box-shadow:var(--lns-shadow-small)}.sm-shadow\:medium{box-shadow:var(--lns-shadow-medium)}.sm-shadow\:large{box-shadow:var(--lns-shadow-large)}.sm-radius\:medium{border-radius:var(--lns-radius-medium)}.sm-radius\:large{border-radius:var(--lns-radius-large)}.sm-radius\:xlarge{border-radius:var(--lns-radius-xlarge)}.sm-radius\:full{border-radius:var(--lns-radius-full)}.sm-bgc\:red{background-color:var(--lns-color-red)}.sm-bgc\:blurpleLight{background-color:var(--lns-color-blurpleLight)}.sm-bgc\:blurpleMedium{background-color:var(--lns-color-blurpleMedium)}.sm-bgc\:blurple{background-color:var(--lns-color-blurple)}.sm-bgc\:blurpleDark{background-color:var(--lns-color-blurpleDark)}.sm-bgc\:offWhite{background-color:var(--lns-color-offWhite)}.sm-bgc\:blueLight{background-color:var(--lns-color-blueLight)}.sm-bgc\:blue{background-color:var(--lns-color-blue)}.sm-bgc\:blueDark{background-color:var(--lns-color-blueDark)}.sm-bgc\:orangeLight{background-color:var(--lns-color-orangeLight)}.sm-bgc\:orange{background-color:var(--lns-color-orange)}.sm-bgc\:orangeDark{background-color:var(--lns-color-orangeDark)}.sm-bgc\:tealLight{background-color:var(--lns-color-tealLight)}.sm-bgc\:teal{background-color:var(--lns-color-teal)}.sm-bgc\:tealDark{background-color:var(--lns-color-tealDark)}.sm-bgc\:yellowLight{background-color:var(--lns-color-yellowLight)}.sm-bgc\:yellow{background-color:var(--lns-color-yellow)}.sm-bgc\:yellowDark{background-color:var(--lns-color-yellowDark)}.sm-bgc\:grey8{background-color:var(--lns-color-grey8)}.sm-bgc\:grey7{background-color:var(--lns-color-grey7)}.sm-bgc\:grey6{background-color:var(--lns-color-grey6)}.sm-bgc\:grey5{background-color:var(--lns-color-grey5)}.sm-bgc\:grey4{background-color:var(--lns-color-grey4)}.sm-bgc\:grey3{background-color:var(--lns-color-grey3)}.sm-bgc\:grey2{background-color:var(--lns-color-grey2)}.sm-bgc\:grey1{background-color:var(--lns-color-grey1)}.sm-bgc\:white{background-color:var(--lns-color-white)}.sm-bgc\:primary{background-color:var(--lns-color-primary)}.sm-bgc\:primaryHover{background-color:var(--lns-color-primaryHover)}.sm-bgc\:primaryActive{background-color:var(--lns-color-primaryActive)}.sm-bgc\:body{background-color:var(--lns-color-body)}.sm-bgc\:bodyDimmed{background-color:var(--lns-color-bodyDimmed)}.sm-bgc\:background{background-color:var(--lns-color-background)}.sm-bgc\:backgroundHover{background-color:var(--lns-color-backgroundHover)}.sm-bgc\:backgroundActive{background-color:var(--lns-color-backgroundActive)}.sm-bgc\:backgroundSecondary{background-color:var(--lns-color-backgroundSecondary)}.sm-bgc\:backgroundSecondary2{background-color:var(--lns-color-backgroundSecondary2)}.sm-bgc\:overlay{background-color:var(--lns-color-overlay)}.sm-bgc\:border{background-color:var(--lns-color-border)}.sm-bgc\:focusRing{background-color:var(--lns-color-focusRing)}.sm-bgc\:record{background-color:var(--lns-color-record)}.sm-bgc\:recordHover{background-color:var(--lns-color-recordHover)}.sm-bgc\:recordActive{background-color:var(--lns-color-recordActive)}.sm-bgc\:info{background-color:var(--lns-color-info)}.sm-bgc\:success{background-color:var(--lns-color-success)}.sm-bgc\:warning{background-color:var(--lns-color-warning)}.sm-bgc\:danger{background-color:var(--lns-color-danger)}.sm-bgc\:dangerHover{background-color:var(--lns-color-dangerHover)}.sm-bgc\:dangerActive{background-color:var(--lns-color-dangerActive)}.sm-bgc\:backdrop{background-color:var(--lns-color-backdrop)}.sm-bgc\:backdropDark{background-color:var(--lns-color-backdropDark)}.sm-bgc\:disabledContent{background-color:var(--lns-color-disabledContent)}.sm-bgc\:highlight{background-color:var(--lns-color-highlight)}.sm-bgc\:disabledBackground{background-color:var(--lns-color-disabledBackground)}.sm-bgc\:formFieldBorder{background-color:var(--lns-color-formFieldBorder)}.sm-bgc\:formFieldBackground{background-color:var(--lns-color-formFieldBackground)}.sm-bgc\:buttonBorder{background-color:var(--lns-color-buttonBorder)}.sm-bgc\:upgrade{background-color:var(--lns-color-upgrade)}.sm-bgc\:upgradeHover{background-color:var(--lns-color-upgradeHover)}.sm-bgc\:upgradeActive{background-color:var(--lns-color-upgradeActive)}.sm-bgc\:tabBackground{background-color:var(--lns-color-tabBackground)}.sm-bgc\:discoveryBackground{background-color:var(--lns-color-discoveryBackground)}.sm-bgc\:discoveryLightBackground{background-color:var(--lns-color-discoveryLightBackground)}.sm-bgc\:discoveryTitle{background-color:var(--lns-color-discoveryTitle)}.sm-bgc\:discoveryHighlight{background-color:var(--lns-color-discoveryHighlight)}.sm-m\:0{margin:0}.sm-m\:auto{margin:auto}.sm-m\:xsmall{margin:var(--lns-space-xsmall)}.sm-m\:small{margin:var(--lns-space-small)}.sm-m\:medium{margin:var(--lns-space-medium)}.sm-m\:large{margin:var(--lns-space-large)}.sm-m\:xlarge{margin:var(--lns-space-xlarge)}.sm-m\:xxlarge{margin:var(--lns-space-xxlarge)}.sm-mt\:0{margin-top:0}.sm-mt\:auto{margin-top:auto}.sm-mt\:xsmall{margin-top:var(--lns-space-xsmall)}.sm-mt\:small{margin-top:var(--lns-space-small)}.sm-mt\:medium{margin-top:var(--lns-space-medium)}.sm-mt\:large{margin-top:var(--lns-space-large)}.sm-mt\:xlarge{margin-top:var(--lns-space-xlarge)}.sm-mt\:xxlarge{margin-top:var(--lns-space-xxlarge)}.sm-mb\:0{margin-bottom:0}.sm-mb\:auto{margin-bottom:auto}.sm-mb\:xsmall{margin-bottom:var(--lns-space-xsmall)}.sm-mb\:small{margin-bottom:var(--lns-space-small)}.sm-mb\:medium{margin-bottom:var(--lns-space-medium)}.sm-mb\:large{margin-bottom:var(--lns-space-large)}.sm-mb\:xlarge{margin-bottom:var(--lns-space-xlarge)}.sm-mb\:xxlarge{margin-bottom:var(--lns-space-xxlarge)}.sm-ml\:0{margin-left:0}.sm-ml\:auto{margin-left:auto}.sm-ml\:xsmall{margin-left:var(--lns-space-xsmall)}.sm-ml\:small{margin-left:var(--lns-space-small)}.sm-ml\:medium{margin-left:var(--lns-space-medium)}.sm-ml\:large{margin-left:var(--lns-space-large)}.sm-ml\:xlarge{margin-left:var(--lns-space-xlarge)}.sm-ml\:xxlarge{margin-left:var(--lns-space-xxlarge)}.sm-mr\:0{margin-right:0}.sm-mr\:auto{margin-right:auto}.sm-mr\:xsmall{margin-right:var(--lns-space-xsmall)}.sm-mr\:small{margin-right:var(--lns-space-small)}.sm-mr\:medium{margin-right:var(--lns-space-medium)}.sm-mr\:large{margin-right:var(--lns-space-large)}.sm-mr\:xlarge{margin-right:var(--lns-space-xlarge)}.sm-mr\:xxlarge{margin-right:var(--lns-space-xxlarge)}.sm-mx\:0{margin-left:0;margin-right:0}.sm-mx\:auto{margin-left:auto;margin-right:auto}.sm-mx\:xsmall{margin-left:var(--lns-space-xsmall);margin-right:var(--lns-space-xsmall)}.sm-mx\:small{margin-left:var(--lns-space-small);margin-right:var(--lns-space-small)}.sm-mx\:medium{margin-left:var(--lns-space-medium);margin-right:var(--lns-space-medium)}.sm-mx\:large{margin-left:var(--lns-space-large);margin-right:var(--lns-space-large)}.sm-mx\:xlarge{margin-left:var(--lns-space-xlarge);margin-right:var(--lns-space-xlarge)}.sm-mx\:xxlarge{margin-left:var(--lns-space-xxlarge);margin-right:var(--lns-space-xxlarge)}.sm-my\:0{margin-top:0;margin-bottom:0}.sm-my\:auto{margin-top:auto;margin-bottom:auto}.sm-my\:xsmall{margin-top:var(--lns-space-xsmall);margin-bottom:var(--lns-space-xsmall)}.sm-my\:small{margin-top:var(--lns-space-small);margin-bottom:var(--lns-space-small)}.sm-my\:medium{margin-top:var(--lns-space-medium);margin-bottom:var(--lns-space-medium)}.sm-my\:large{margin-top:var(--lns-space-large);margin-bottom:var(--lns-space-large)}.sm-my\:xlarge{margin-top:var(--lns-space-xlarge);margin-bottom:var(--lns-space-xlarge)}.sm-my\:xxlarge{margin-top:var(--lns-space-xxlarge);margin-bottom:var(--lns-space-xxlarge)}.sm-p\:0{padding:0}.sm-p\:xsmall{padding:var(--lns-space-xsmall)}.sm-p\:small{padding:var(--lns-space-small)}.sm-p\:medium{padding:var(--lns-space-medium)}.sm-p\:large{padding:var(--lns-space-large)}.sm-p\:xlarge{padding:var(--lns-space-xlarge)}.sm-p\:xxlarge{padding:var(--lns-space-xxlarge)}.sm-pt\:0{padding-top:0}.sm-pt\:xsmall{padding-top:var(--lns-space-xsmall)}.sm-pt\:small{padding-top:var(--lns-space-small)}.sm-pt\:medium{padding-top:var(--lns-space-medium)}.sm-pt\:large{padding-top:var(--lns-space-large)}.sm-pt\:xlarge{padding-top:var(--lns-space-xlarge)}.sm-pt\:xxlarge{padding-top:var(--lns-space-xxlarge)}.sm-pb\:0{padding-bottom:0}.sm-pb\:xsmall{padding-bottom:var(--lns-space-xsmall)}.sm-pb\:small{padding-bottom:var(--lns-space-small)}.sm-pb\:medium{padding-bottom:var(--lns-space-medium)}.sm-pb\:large{padding-bottom:var(--lns-space-large)}.sm-pb\:xlarge{padding-bottom:var(--lns-space-xlarge)}.sm-pb\:xxlarge{padding-bottom:var(--lns-space-xxlarge)}.sm-pl\:0{padding-left:0}.sm-pl\:xsmall{padding-left:var(--lns-space-xsmall)}.sm-pl\:small{padding-left:var(--lns-space-small)}.sm-pl\:medium{padding-left:var(--lns-space-medium)}.sm-pl\:large{padding-left:var(--lns-space-large)}.sm-pl\:xlarge{padding-left:var(--lns-space-xlarge)}.sm-pl\:xxlarge{padding-left:var(--lns-space-xxlarge)}.sm-pr\:0{padding-right:0}.sm-pr\:xsmall{padding-right:var(--lns-space-xsmall)}.sm-pr\:small{padding-right:var(--lns-space-small)}.sm-pr\:medium{padding-right:var(--lns-space-medium)}.sm-pr\:large{padding-right:var(--lns-space-large)}.sm-pr\:xlarge{padding-right:var(--lns-space-xlarge)}.sm-pr\:xxlarge{padding-right:var(--lns-space-xxlarge)}.sm-px\:0{padding-left:0;padding-right:0}.sm-px\:xsmall{padding-left:var(--lns-space-xsmall);padding-right:var(--lns-space-xsmall)}.sm-px\:small{padding-left:var(--lns-space-small);padding-right:var(--lns-space-small)}.sm-px\:medium{padding-left:var(--lns-space-medium);padding-right:var(--lns-space-medium)}.sm-px\:large{padding-left:var(--lns-space-large);padding-right:var(--lns-space-large)}.sm-px\:xlarge{padding-left:var(--lns-space-xlarge);padding-right:var(--lns-space-xlarge)}.sm-px\:xxlarge{padding-left:var(--lns-space-xxlarge);padding-right:var(--lns-space-xxlarge)}.sm-py\:0{padding-top:0;padding-bottom:0}.sm-py\:xsmall{padding-top:var(--lns-space-xsmall);padding-bottom:var(--lns-space-xsmall)}.sm-py\:small{padding-top:var(--lns-space-small);padding-bottom:var(--lns-space-small)}.sm-py\:medium{padding-top:var(--lns-space-medium);padding-bottom:var(--lns-space-medium)}.sm-py\:large{padding-top:var(--lns-space-large);padding-bottom:var(--lns-space-large)}.sm-py\:xlarge{padding-top:var(--lns-space-xlarge);padding-bottom:var(--lns-space-xlarge)}.sm-py\:xxlarge{padding-top:var(--lns-space-xxlarge);padding-bottom:var(--lns-space-xxlarge)}.sm-text\:small{font-size:var(--lns-fontSize-small);line-height:var(--lns-lineHeight-small)}.sm-text\:body-sm{font-size:var(--lns-fontSize-body-sm);line-height:var(--lns-lineHeight-body-sm)}.sm-text\:medium{font-size:var(--lns-fontSize-medium);line-height:var(--lns-lineHeight-medium)}.sm-text\:body-md{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md)}.sm-text\:large{font-size:var(--lns-fontSize-large);line-height:var(--lns-lineHeight-large)}.sm-text\:body-lg{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg)}.sm-text\:xlarge{font-size:var(--lns-fontSize-xlarge);line-height:var(--lns-lineHeight-xlarge)}.sm-text\:heading-sm{font-size:var(--lns-fontSize-heading-sm);line-height:var(--lns-lineHeight-heading-sm)}.sm-text\:xxlarge{font-size:var(--lns-fontSize-xxlarge);line-height:var(--lns-lineHeight-xxlarge)}.sm-text\:heading-md{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md)}.sm-text\:xxxlarge{font-size:var(--lns-fontSize-xxxlarge);line-height:var(--lns-lineHeight-xxxlarge)}.sm-text\:heading-lg{font-size:var(--lns-fontSize-heading-lg);line-height:var(--lns-lineHeight-heading-lg)}.sm-weight\:book{font-weight:var(--lns-fontWeight-book)}.sm-weight\:bold{font-weight:var(--lns-fontWeight-bold)}.sm-text\:body{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md);font-weight:var(--lns-fontWeight-book)}.sm-text\:title{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg);font-weight:var(--lns-fontWeight-bold)}.sm-text\:mainTitle{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md);font-weight:var(--lns-fontWeight-bold)}.sm-text\:left{text-align:left}.sm-text\:right{text-align:right}.sm-text\:center{text-align:center}.sm-border{border:1px solid var(--lns-color-border)}.sm-borderTop{border-top:1px solid var(--lns-color-border)}.sm-borderBottom{border-bottom:1px solid var(--lns-color-border)}.sm-borderLeft{border-left:1px solid var(--lns-color-border)}.sm-borderRight{border-right:1px solid var(--lns-color-border)}.sm-inline{display:inline}.sm-block{display:block}.sm-flex{display:flex}.sm-inlineBlock{display:inline-block}.sm-inlineFlex{display:inline-flex}.sm-none{display:none}.sm-flexWrap{flex-wrap:wrap}.sm-flexDirection\:column{flex-direction:column}.sm-flexDirection\:row{flex-direction:row}.sm-items\:stretch{align-items:stretch}.sm-items\:center{align-items:center}.sm-items\:baseline{align-items:baseline}.sm-items\:flexStart{align-items:flex-start}.sm-items\:flexEnd{align-items:flex-end}.sm-items\:selfStart{align-items:self-start}.sm-items\:selfEnd{align-items:self-end}.sm-justify\:flexStart{justify-content:flex-start}.sm-justify\:flexEnd{justify-content:flex-end}.sm-justify\:center{justify-content:center}.sm-justify\:spaceBetween{justify-content:space-between}.sm-justify\:spaceAround{justify-content:space-around}.sm-justify\:spaceEvenly{justify-content:space-evenly}.sm-grow\:0{flex-grow:0}.sm-grow\:1{flex-grow:1}.sm-shrink\:0{flex-shrink:0}.sm-shrink\:1{flex-shrink:1}.sm-self\:auto{align-self:auto}.sm-self\:flexStart{align-self:flex-start}.sm-self\:flexEnd{align-self:flex-end}.sm-self\:center{align-self:center}.sm-self\:baseline{align-self:baseline}.sm-self\:stretch{align-self:stretch}.sm-overflow\:hidden{overflow:hidden}.sm-overflow\:auto{overflow:auto}.sm-relative{position:relative}.sm-absolute{position:absolute}.sm-sticky{position:sticky}.sm-fixed{position:fixed}.sm-top\:0{top:0}.sm-top\:auto{top:auto}.sm-top\:xsmall{top:var(--lns-space-xsmall)}.sm-top\:small{top:var(--lns-space-small)}.sm-top\:medium{top:var(--lns-space-medium)}.sm-top\:large{top:var(--lns-space-large)}.sm-top\:xlarge{top:var(--lns-space-xlarge)}.sm-top\:xxlarge{top:var(--lns-space-xxlarge)}.sm-bottom\:0{bottom:0}.sm-bottom\:auto{bottom:auto}.sm-bottom\:xsmall{bottom:var(--lns-space-xsmall)}.sm-bottom\:small{bottom:var(--lns-space-small)}.sm-bottom\:medium{bottom:var(--lns-space-medium)}.sm-bottom\:large{bottom:var(--lns-space-large)}.sm-bottom\:xlarge{bottom:var(--lns-space-xlarge)}.sm-bottom\:xxlarge{bottom:var(--lns-space-xxlarge)}.sm-left\:0{left:0}.sm-left\:auto{left:auto}.sm-left\:xsmall{left:var(--lns-space-xsmall)}.sm-left\:small{left:var(--lns-space-small)}.sm-left\:medium{left:var(--lns-space-medium)}.sm-left\:large{left:var(--lns-space-large)}.sm-left\:xlarge{left:var(--lns-space-xlarge)}.sm-left\:xxlarge{left:var(--lns-space-xxlarge)}.sm-right\:0{right:0}.sm-right\:auto{right:auto}.sm-right\:xsmall{right:var(--lns-space-xsmall)}.sm-right\:small{right:var(--lns-space-small)}.sm-right\:medium{right:var(--lns-space-medium)}.sm-right\:large{right:var(--lns-space-large)}.sm-right\:xlarge{right:var(--lns-space-xlarge)}.sm-right\:xxlarge{right:var(--lns-space-xxlarge)}.sm-width\:auto{width:auto}.sm-width\:full{width:100%}.sm-width\:0{width:0}.sm-minWidth\:0{min-width:0}.sm-height\:auto{height:auto}.sm-height\:full{height:100%}.sm-height\:0{height:0}.sm-ellipsis{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.sm-srOnly{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0}}@media(min-width:64em){.md-c\:red{color:var(--lns-color-red)}.md-c\:blurpleLight{color:var(--lns-color-blurpleLight)}.md-c\:blurpleMedium{color:var(--lns-color-blurpleMedium)}.md-c\:blurple{color:var(--lns-color-blurple)}.md-c\:blurpleDark{color:var(--lns-color-blurpleDark)}.md-c\:offWhite{color:var(--lns-color-offWhite)}.md-c\:blueLight{color:var(--lns-color-blueLight)}.md-c\:blue{color:var(--lns-color-blue)}.md-c\:blueDark{color:var(--lns-color-blueDark)}.md-c\:orangeLight{color:var(--lns-color-orangeLight)}.md-c\:orange{color:var(--lns-color-orange)}.md-c\:orangeDark{color:var(--lns-color-orangeDark)}.md-c\:tealLight{color:var(--lns-color-tealLight)}.md-c\:teal{color:var(--lns-color-teal)}.md-c\:tealDark{color:var(--lns-color-tealDark)}.md-c\:yellowLight{color:var(--lns-color-yellowLight)}.md-c\:yellow{color:var(--lns-color-yellow)}.md-c\:yellowDark{color:var(--lns-color-yellowDark)}.md-c\:grey8{color:var(--lns-color-grey8)}.md-c\:grey7{color:var(--lns-color-grey7)}.md-c\:grey6{color:var(--lns-color-grey6)}.md-c\:grey5{color:var(--lns-color-grey5)}.md-c\:grey4{color:var(--lns-color-grey4)}.md-c\:grey3{color:var(--lns-color-grey3)}.md-c\:grey2{color:var(--lns-color-grey2)}.md-c\:grey1{color:var(--lns-color-grey1)}.md-c\:white{color:var(--lns-color-white)}.md-c\:primary{color:var(--lns-color-primary)}.md-c\:primaryHover{color:var(--lns-color-primaryHover)}.md-c\:primaryActive{color:var(--lns-color-primaryActive)}.md-c\:body{color:var(--lns-color-body)}.md-c\:bodyDimmed{color:var(--lns-color-bodyDimmed)}.md-c\:background{color:var(--lns-color-background)}.md-c\:backgroundHover{color:var(--lns-color-backgroundHover)}.md-c\:backgroundActive{color:var(--lns-color-backgroundActive)}.md-c\:backgroundSecondary{color:var(--lns-color-backgroundSecondary)}.md-c\:backgroundSecondary2{color:var(--lns-color-backgroundSecondary2)}.md-c\:overlay{color:var(--lns-color-overlay)}.md-c\:border{color:var(--lns-color-border)}.md-c\:focusRing{color:var(--lns-color-focusRing)}.md-c\:record{color:var(--lns-color-record)}.md-c\:recordHover{color:var(--lns-color-recordHover)}.md-c\:recordActive{color:var(--lns-color-recordActive)}.md-c\:info{color:var(--lns-color-info)}.md-c\:success{color:var(--lns-color-success)}.md-c\:warning{color:var(--lns-color-warning)}.md-c\:danger{color:var(--lns-color-danger)}.md-c\:dangerHover{color:var(--lns-color-dangerHover)}.md-c\:dangerActive{color:var(--lns-color-dangerActive)}.md-c\:backdrop{color:var(--lns-color-backdrop)}.md-c\:backdropDark{color:var(--lns-color-backdropDark)}.md-c\:disabledContent{color:var(--lns-color-disabledContent)}.md-c\:highlight{color:var(--lns-color-highlight)}.md-c\:disabledBackground{color:var(--lns-color-disabledBackground)}.md-c\:formFieldBorder{color:var(--lns-color-formFieldBorder)}.md-c\:formFieldBackground{color:var(--lns-color-formFieldBackground)}.md-c\:buttonBorder{color:var(--lns-color-buttonBorder)}.md-c\:upgrade{color:var(--lns-color-upgrade)}.md-c\:upgradeHover{color:var(--lns-color-upgradeHover)}.md-c\:upgradeActive{color:var(--lns-color-upgradeActive)}.md-c\:tabBackground{color:var(--lns-color-tabBackground)}.md-c\:discoveryBackground{color:var(--lns-color-discoveryBackground)}.md-c\:discoveryLightBackground{color:var(--lns-color-discoveryLightBackground)}.md-c\:discoveryTitle{color:var(--lns-color-discoveryTitle)}.md-c\:discoveryHighlight{color:var(--lns-color-discoveryHighlight)}.md-shadow\:small{box-shadow:var(--lns-shadow-small)}.md-shadow\:medium{box-shadow:var(--lns-shadow-medium)}.md-shadow\:large{box-shadow:var(--lns-shadow-large)}.md-radius\:medium{border-radius:var(--lns-radius-medium)}.md-radius\:large{border-radius:var(--lns-radius-large)}.md-radius\:xlarge{border-radius:var(--lns-radius-xlarge)}.md-radius\:full{border-radius:var(--lns-radius-full)}.md-bgc\:red{background-color:var(--lns-color-red)}.md-bgc\:blurpleLight{background-color:var(--lns-color-blurpleLight)}.md-bgc\:blurpleMedium{background-color:var(--lns-color-blurpleMedium)}.md-bgc\:blurple{background-color:var(--lns-color-blurple)}.md-bgc\:blurpleDark{background-color:var(--lns-color-blurpleDark)}.md-bgc\:offWhite{background-color:var(--lns-color-offWhite)}.md-bgc\:blueLight{background-color:var(--lns-color-blueLight)}.md-bgc\:blue{background-color:var(--lns-color-blue)}.md-bgc\:blueDark{background-color:var(--lns-color-blueDark)}.md-bgc\:orangeLight{background-color:var(--lns-color-orangeLight)}.md-bgc\:orange{background-color:var(--lns-color-orange)}.md-bgc\:orangeDark{background-color:var(--lns-color-orangeDark)}.md-bgc\:tealLight{background-color:var(--lns-color-tealLight)}.md-bgc\:teal{background-color:var(--lns-color-teal)}.md-bgc\:tealDark{background-color:var(--lns-color-tealDark)}.md-bgc\:yellowLight{background-color:var(--lns-color-yellowLight)}.md-bgc\:yellow{background-color:var(--lns-color-yellow)}.md-bgc\:yellowDark{background-color:var(--lns-color-yellowDark)}.md-bgc\:grey8{background-color:var(--lns-color-grey8)}.md-bgc\:grey7{background-color:var(--lns-color-grey7)}.md-bgc\:grey6{background-color:var(--lns-color-grey6)}.md-bgc\:grey5{background-color:var(--lns-color-grey5)}.md-bgc\:grey4{background-color:var(--lns-color-grey4)}.md-bgc\:grey3{background-color:var(--lns-color-grey3)}.md-bgc\:grey2{background-color:var(--lns-color-grey2)}.md-bgc\:grey1{background-color:var(--lns-color-grey1)}.md-bgc\:white{background-color:var(--lns-color-white)}.md-bgc\:primary{background-color:var(--lns-color-primary)}.md-bgc\:primaryHover{background-color:var(--lns-color-primaryHover)}.md-bgc\:primaryActive{background-color:var(--lns-color-primaryActive)}.md-bgc\:body{background-color:var(--lns-color-body)}.md-bgc\:bodyDimmed{background-color:var(--lns-color-bodyDimmed)}.md-bgc\:background{background-color:var(--lns-color-background)}.md-bgc\:backgroundHover{background-color:var(--lns-color-backgroundHover)}.md-bgc\:backgroundActive{background-color:var(--lns-color-backgroundActive)}.md-bgc\:backgroundSecondary{background-color:var(--lns-color-backgroundSecondary)}.md-bgc\:backgroundSecondary2{background-color:var(--lns-color-backgroundSecondary2)}.md-bgc\:overlay{background-color:var(--lns-color-overlay)}.md-bgc\:border{background-color:var(--lns-color-border)}.md-bgc\:focusRing{background-color:var(--lns-color-focusRing)}.md-bgc\:record{background-color:var(--lns-color-record)}.md-bgc\:recordHover{background-color:var(--lns-color-recordHover)}.md-bgc\:recordActive{background-color:var(--lns-color-recordActive)}.md-bgc\:info{background-color:var(--lns-color-info)}.md-bgc\:success{background-color:var(--lns-color-success)}.md-bgc\:warning{background-color:var(--lns-color-warning)}.md-bgc\:danger{background-color:var(--lns-color-danger)}.md-bgc\:dangerHover{background-color:var(--lns-color-dangerHover)}.md-bgc\:dangerActive{background-color:var(--lns-color-dangerActive)}.md-bgc\:backdrop{background-color:var(--lns-color-backdrop)}.md-bgc\:backdropDark{background-color:var(--lns-color-backdropDark)}.md-bgc\:disabledContent{background-color:var(--lns-color-disabledContent)}.md-bgc\:highlight{background-color:var(--lns-color-highlight)}.md-bgc\:disabledBackground{background-color:var(--lns-color-disabledBackground)}.md-bgc\:formFieldBorder{background-color:var(--lns-color-formFieldBorder)}.md-bgc\:formFieldBackground{background-color:var(--lns-color-formFieldBackground)}.md-bgc\:buttonBorder{background-color:var(--lns-color-buttonBorder)}.md-bgc\:upgrade{background-color:var(--lns-color-upgrade)}.md-bgc\:upgradeHover{background-color:var(--lns-color-upgradeHover)}.md-bgc\:upgradeActive{background-color:var(--lns-color-upgradeActive)}.md-bgc\:tabBackground{background-color:var(--lns-color-tabBackground)}.md-bgc\:discoveryBackground{background-color:var(--lns-color-discoveryBackground)}.md-bgc\:discoveryLightBackground{background-color:var(--lns-color-discoveryLightBackground)}.md-bgc\:discoveryTitle{background-color:var(--lns-color-discoveryTitle)}.md-bgc\:discoveryHighlight{background-color:var(--lns-color-discoveryHighlight)}.md-m\:0{margin:0}.md-m\:auto{margin:auto}.md-m\:xsmall{margin:var(--lns-space-xsmall)}.md-m\:small{margin:var(--lns-space-small)}.md-m\:medium{margin:var(--lns-space-medium)}.md-m\:large{margin:var(--lns-space-large)}.md-m\:xlarge{margin:var(--lns-space-xlarge)}.md-m\:xxlarge{margin:var(--lns-space-xxlarge)}.md-mt\:0{margin-top:0}.md-mt\:auto{margin-top:auto}.md-mt\:xsmall{margin-top:var(--lns-space-xsmall)}.md-mt\:small{margin-top:var(--lns-space-small)}.md-mt\:medium{margin-top:var(--lns-space-medium)}.md-mt\:large{margin-top:var(--lns-space-large)}.md-mt\:xlarge{margin-top:var(--lns-space-xlarge)}.md-mt\:xxlarge{margin-top:var(--lns-space-xxlarge)}.md-mb\:0{margin-bottom:0}.md-mb\:auto{margin-bottom:auto}.md-mb\:xsmall{margin-bottom:var(--lns-space-xsmall)}.md-mb\:small{margin-bottom:var(--lns-space-small)}.md-mb\:medium{margin-bottom:var(--lns-space-medium)}.md-mb\:large{margin-bottom:var(--lns-space-large)}.md-mb\:xlarge{margin-bottom:var(--lns-space-xlarge)}.md-mb\:xxlarge{margin-bottom:var(--lns-space-xxlarge)}.md-ml\:0{margin-left:0}.md-ml\:auto{margin-left:auto}.md-ml\:xsmall{margin-left:var(--lns-space-xsmall)}.md-ml\:small{margin-left:var(--lns-space-small)}.md-ml\:medium{margin-left:var(--lns-space-medium)}.md-ml\:large{margin-left:var(--lns-space-large)}.md-ml\:xlarge{margin-left:var(--lns-space-xlarge)}.md-ml\:xxlarge{margin-left:var(--lns-space-xxlarge)}.md-mr\:0{margin-right:0}.md-mr\:auto{margin-right:auto}.md-mr\:xsmall{margin-right:var(--lns-space-xsmall)}.md-mr\:small{margin-right:var(--lns-space-small)}.md-mr\:medium{margin-right:var(--lns-space-medium)}.md-mr\:large{margin-right:var(--lns-space-large)}.md-mr\:xlarge{margin-right:var(--lns-space-xlarge)}.md-mr\:xxlarge{margin-right:var(--lns-space-xxlarge)}.md-mx\:0{margin-left:0;margin-right:0}.md-mx\:auto{margin-left:auto;margin-right:auto}.md-mx\:xsmall{margin-left:var(--lns-space-xsmall);margin-right:var(--lns-space-xsmall)}.md-mx\:small{margin-left:var(--lns-space-small);margin-right:var(--lns-space-small)}.md-mx\:medium{margin-left:var(--lns-space-medium);margin-right:var(--lns-space-medium)}.md-mx\:large{margin-left:var(--lns-space-large);margin-right:var(--lns-space-large)}.md-mx\:xlarge{margin-left:var(--lns-space-xlarge);margin-right:var(--lns-space-xlarge)}.md-mx\:xxlarge{margin-left:var(--lns-space-xxlarge);margin-right:var(--lns-space-xxlarge)}.md-my\:0{margin-top:0;margin-bottom:0}.md-my\:auto{margin-top:auto;margin-bottom:auto}.md-my\:xsmall{margin-top:var(--lns-space-xsmall);margin-bottom:var(--lns-space-xsmall)}.md-my\:small{margin-top:var(--lns-space-small);margin-bottom:var(--lns-space-small)}.md-my\:medium{margin-top:var(--lns-space-medium);margin-bottom:var(--lns-space-medium)}.md-my\:large{margin-top:var(--lns-space-large);margin-bottom:var(--lns-space-large)}.md-my\:xlarge{margin-top:var(--lns-space-xlarge);margin-bottom:var(--lns-space-xlarge)}.md-my\:xxlarge{margin-top:var(--lns-space-xxlarge);margin-bottom:var(--lns-space-xxlarge)}.md-p\:0{padding:0}.md-p\:xsmall{padding:var(--lns-space-xsmall)}.md-p\:small{padding:var(--lns-space-small)}.md-p\:medium{padding:var(--lns-space-medium)}.md-p\:large{padding:var(--lns-space-large)}.md-p\:xlarge{padding:var(--lns-space-xlarge)}.md-p\:xxlarge{padding:var(--lns-space-xxlarge)}.md-pt\:0{padding-top:0}.md-pt\:xsmall{padding-top:var(--lns-space-xsmall)}.md-pt\:small{padding-top:var(--lns-space-small)}.md-pt\:medium{padding-top:var(--lns-space-medium)}.md-pt\:large{padding-top:var(--lns-space-large)}.md-pt\:xlarge{padding-top:var(--lns-space-xlarge)}.md-pt\:xxlarge{padding-top:var(--lns-space-xxlarge)}.md-pb\:0{padding-bottom:0}.md-pb\:xsmall{padding-bottom:var(--lns-space-xsmall)}.md-pb\:small{padding-bottom:var(--lns-space-small)}.md-pb\:medium{padding-bottom:var(--lns-space-medium)}.md-pb\:large{padding-bottom:var(--lns-space-large)}.md-pb\:xlarge{padding-bottom:var(--lns-space-xlarge)}.md-pb\:xxlarge{padding-bottom:var(--lns-space-xxlarge)}.md-pl\:0{padding-left:0}.md-pl\:xsmall{padding-left:var(--lns-space-xsmall)}.md-pl\:small{padding-left:var(--lns-space-small)}.md-pl\:medium{padding-left:var(--lns-space-medium)}.md-pl\:large{padding-left:var(--lns-space-large)}.md-pl\:xlarge{padding-left:var(--lns-space-xlarge)}.md-pl\:xxlarge{padding-left:var(--lns-space-xxlarge)}.md-pr\:0{padding-right:0}.md-pr\:xsmall{padding-right:var(--lns-space-xsmall)}.md-pr\:small{padding-right:var(--lns-space-small)}.md-pr\:medium{padding-right:var(--lns-space-medium)}.md-pr\:large{padding-right:var(--lns-space-large)}.md-pr\:xlarge{padding-right:var(--lns-space-xlarge)}.md-pr\:xxlarge{padding-right:var(--lns-space-xxlarge)}.md-px\:0{padding-left:0;padding-right:0}.md-px\:xsmall{padding-left:var(--lns-space-xsmall);padding-right:var(--lns-space-xsmall)}.md-px\:small{padding-left:var(--lns-space-small);padding-right:var(--lns-space-small)}.md-px\:medium{padding-left:var(--lns-space-medium);padding-right:var(--lns-space-medium)}.md-px\:large{padding-left:var(--lns-space-large);padding-right:var(--lns-space-large)}.md-px\:xlarge{padding-left:var(--lns-space-xlarge);padding-right:var(--lns-space-xlarge)}.md-px\:xxlarge{padding-left:var(--lns-space-xxlarge);padding-right:var(--lns-space-xxlarge)}.md-py\:0{padding-top:0;padding-bottom:0}.md-py\:xsmall{padding-top:var(--lns-space-xsmall);padding-bottom:var(--lns-space-xsmall)}.md-py\:small{padding-top:var(--lns-space-small);padding-bottom:var(--lns-space-small)}.md-py\:medium{padding-top:var(--lns-space-medium);padding-bottom:var(--lns-space-medium)}.md-py\:large{padding-top:var(--lns-space-large);padding-bottom:var(--lns-space-large)}.md-py\:xlarge{padding-top:var(--lns-space-xlarge);padding-bottom:var(--lns-space-xlarge)}.md-py\:xxlarge{padding-top:var(--lns-space-xxlarge);padding-bottom:var(--lns-space-xxlarge)}.md-text\:small{font-size:var(--lns-fontSize-small);line-height:var(--lns-lineHeight-small)}.md-text\:body-sm{font-size:var(--lns-fontSize-body-sm);line-height:var(--lns-lineHeight-body-sm)}.md-text\:medium{font-size:var(--lns-fontSize-medium);line-height:var(--lns-lineHeight-medium)}.md-text\:body-md{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md)}.md-text\:large{font-size:var(--lns-fontSize-large);line-height:var(--lns-lineHeight-large)}.md-text\:body-lg{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg)}.md-text\:xlarge{font-size:var(--lns-fontSize-xlarge);line-height:var(--lns-lineHeight-xlarge)}.md-text\:heading-sm{font-size:var(--lns-fontSize-heading-sm);line-height:var(--lns-lineHeight-heading-sm)}.md-text\:xxlarge{font-size:var(--lns-fontSize-xxlarge);line-height:var(--lns-lineHeight-xxlarge)}.md-text\:heading-md{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md)}.md-text\:xxxlarge{font-size:var(--lns-fontSize-xxxlarge);line-height:var(--lns-lineHeight-xxxlarge)}.md-text\:heading-lg{font-size:var(--lns-fontSize-heading-lg);line-height:var(--lns-lineHeight-heading-lg)}.md-weight\:book{font-weight:var(--lns-fontWeight-book)}.md-weight\:bold{font-weight:var(--lns-fontWeight-bold)}.md-text\:body{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md);font-weight:var(--lns-fontWeight-book)}.md-text\:title{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg);font-weight:var(--lns-fontWeight-bold)}.md-text\:mainTitle{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md);font-weight:var(--lns-fontWeight-bold)}.md-text\:left{text-align:left}.md-text\:right{text-align:right}.md-text\:center{text-align:center}.md-border{border:1px solid var(--lns-color-border)}.md-borderTop{border-top:1px solid var(--lns-color-border)}.md-borderBottom{border-bottom:1px solid var(--lns-color-border)}.md-borderLeft{border-left:1px solid var(--lns-color-border)}.md-borderRight{border-right:1px solid var(--lns-color-border)}.md-inline{display:inline}.md-block{display:block}.md-flex{display:flex}.md-inlineBlock{display:inline-block}.md-inlineFlex{display:inline-flex}.md-none{display:none}.md-flexWrap{flex-wrap:wrap}.md-flexDirection\:column{flex-direction:column}.md-flexDirection\:row{flex-direction:row}.md-items\:stretch{align-items:stretch}.md-items\:center{align-items:center}.md-items\:baseline{align-items:baseline}.md-items\:flexStart{align-items:flex-start}.md-items\:flexEnd{align-items:flex-end}.md-items\:selfStart{align-items:self-start}.md-items\:selfEnd{align-items:self-end}.md-justify\:flexStart{justify-content:flex-start}.md-justify\:flexEnd{justify-content:flex-end}.md-justify\:center{justify-content:center}.md-justify\:spaceBetween{justify-content:space-between}.md-justify\:spaceAround{justify-content:space-around}.md-justify\:spaceEvenly{justify-content:space-evenly}.md-grow\:0{flex-grow:0}.md-grow\:1{flex-grow:1}.md-shrink\:0{flex-shrink:0}.md-shrink\:1{flex-shrink:1}.md-self\:auto{align-self:auto}.md-self\:flexStart{align-self:flex-start}.md-self\:flexEnd{align-self:flex-end}.md-self\:center{align-self:center}.md-self\:baseline{align-self:baseline}.md-self\:stretch{align-self:stretch}.md-overflow\:hidden{overflow:hidden}.md-overflow\:auto{overflow:auto}.md-relative{position:relative}.md-absolute{position:absolute}.md-sticky{position:sticky}.md-fixed{position:fixed}.md-top\:0{top:0}.md-top\:auto{top:auto}.md-top\:xsmall{top:var(--lns-space-xsmall)}.md-top\:small{top:var(--lns-space-small)}.md-top\:medium{top:var(--lns-space-medium)}.md-top\:large{top:var(--lns-space-large)}.md-top\:xlarge{top:var(--lns-space-xlarge)}.md-top\:xxlarge{top:var(--lns-space-xxlarge)}.md-bottom\:0{bottom:0}.md-bottom\:auto{bottom:auto}.md-bottom\:xsmall{bottom:var(--lns-space-xsmall)}.md-bottom\:small{bottom:var(--lns-space-small)}.md-bottom\:medium{bottom:var(--lns-space-medium)}.md-bottom\:large{bottom:var(--lns-space-large)}.md-bottom\:xlarge{bottom:var(--lns-space-xlarge)}.md-bottom\:xxlarge{bottom:var(--lns-space-xxlarge)}.md-left\:0{left:0}.md-left\:auto{left:auto}.md-left\:xsmall{left:var(--lns-space-xsmall)}.md-left\:small{left:var(--lns-space-small)}.md-left\:medium{left:var(--lns-space-medium)}.md-left\:large{left:var(--lns-space-large)}.md-left\:xlarge{left:var(--lns-space-xlarge)}.md-left\:xxlarge{left:var(--lns-space-xxlarge)}.md-right\:0{right:0}.md-right\:auto{right:auto}.md-right\:xsmall{right:var(--lns-space-xsmall)}.md-right\:small{right:var(--lns-space-small)}.md-right\:medium{right:var(--lns-space-medium)}.md-right\:large{right:var(--lns-space-large)}.md-right\:xlarge{right:var(--lns-space-xlarge)}.md-right\:xxlarge{right:var(--lns-space-xxlarge)}.md-width\:auto{width:auto}.md-width\:full{width:100%}.md-width\:0{width:0}.md-minWidth\:0{min-width:0}.md-height\:auto{height:auto}.md-height\:full{height:100%}.md-height\:0{height:0}.md-ellipsis{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.md-srOnly{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0}}@media(min-width:75em){.lg-c\:red{color:var(--lns-color-red)}.lg-c\:blurpleLight{color:var(--lns-color-blurpleLight)}.lg-c\:blurpleMedium{color:var(--lns-color-blurpleMedium)}.lg-c\:blurple{color:var(--lns-color-blurple)}.lg-c\:blurpleDark{color:var(--lns-color-blurpleDark)}.lg-c\:offWhite{color:var(--lns-color-offWhite)}.lg-c\:blueLight{color:var(--lns-color-blueLight)}.lg-c\:blue{color:var(--lns-color-blue)}.lg-c\:blueDark{color:var(--lns-color-blueDark)}.lg-c\:orangeLight{color:var(--lns-color-orangeLight)}.lg-c\:orange{color:var(--lns-color-orange)}.lg-c\:orangeDark{color:var(--lns-color-orangeDark)}.lg-c\:tealLight{color:var(--lns-color-tealLight)}.lg-c\:teal{color:var(--lns-color-teal)}.lg-c\:tealDark{color:var(--lns-color-tealDark)}.lg-c\:yellowLight{color:var(--lns-color-yellowLight)}.lg-c\:yellow{color:var(--lns-color-yellow)}.lg-c\:yellowDark{color:var(--lns-color-yellowDark)}.lg-c\:grey8{color:var(--lns-color-grey8)}.lg-c\:grey7{color:var(--lns-color-grey7)}.lg-c\:grey6{color:var(--lns-color-grey6)}.lg-c\:grey5{color:var(--lns-color-grey5)}.lg-c\:grey4{color:var(--lns-color-grey4)}.lg-c\:grey3{color:var(--lns-color-grey3)}.lg-c\:grey2{color:var(--lns-color-grey2)}.lg-c\:grey1{color:var(--lns-color-grey1)}.lg-c\:white{color:var(--lns-color-white)}.lg-c\:primary{color:var(--lns-color-primary)}.lg-c\:primaryHover{color:var(--lns-color-primaryHover)}.lg-c\:primaryActive{color:var(--lns-color-primaryActive)}.lg-c\:body{color:var(--lns-color-body)}.lg-c\:bodyDimmed{color:var(--lns-color-bodyDimmed)}.lg-c\:background{color:var(--lns-color-background)}.lg-c\:backgroundHover{color:var(--lns-color-backgroundHover)}.lg-c\:backgroundActive{color:var(--lns-color-backgroundActive)}.lg-c\:backgroundSecondary{color:var(--lns-color-backgroundSecondary)}.lg-c\:backgroundSecondary2{color:var(--lns-color-backgroundSecondary2)}.lg-c\:overlay{color:var(--lns-color-overlay)}.lg-c\:border{color:var(--lns-color-border)}.lg-c\:focusRing{color:var(--lns-color-focusRing)}.lg-c\:record{color:var(--lns-color-record)}.lg-c\:recordHover{color:var(--lns-color-recordHover)}.lg-c\:recordActive{color:var(--lns-color-recordActive)}.lg-c\:info{color:var(--lns-color-info)}.lg-c\:success{color:var(--lns-color-success)}.lg-c\:warning{color:var(--lns-color-warning)}.lg-c\:danger{color:var(--lns-color-danger)}.lg-c\:dangerHover{color:var(--lns-color-dangerHover)}.lg-c\:dangerActive{color:var(--lns-color-dangerActive)}.lg-c\:backdrop{color:var(--lns-color-backdrop)}.lg-c\:backdropDark{color:var(--lns-color-backdropDark)}.lg-c\:disabledContent{color:var(--lns-color-disabledContent)}.lg-c\:highlight{color:var(--lns-color-highlight)}.lg-c\:disabledBackground{color:var(--lns-color-disabledBackground)}.lg-c\:formFieldBorder{color:var(--lns-color-formFieldBorder)}.lg-c\:formFieldBackground{color:var(--lns-color-formFieldBackground)}.lg-c\:buttonBorder{color:var(--lns-color-buttonBorder)}.lg-c\:upgrade{color:var(--lns-color-upgrade)}.lg-c\:upgradeHover{color:var(--lns-color-upgradeHover)}.lg-c\:upgradeActive{color:var(--lns-color-upgradeActive)}.lg-c\:tabBackground{color:var(--lns-color-tabBackground)}.lg-c\:discoveryBackground{color:var(--lns-color-discoveryBackground)}.lg-c\:discoveryLightBackground{color:var(--lns-color-discoveryLightBackground)}.lg-c\:discoveryTitle{color:var(--lns-color-discoveryTitle)}.lg-c\:discoveryHighlight{color:var(--lns-color-discoveryHighlight)}.lg-shadow\:small{box-shadow:var(--lns-shadow-small)}.lg-shadow\:medium{box-shadow:var(--lns-shadow-medium)}.lg-shadow\:large{box-shadow:var(--lns-shadow-large)}.lg-radius\:medium{border-radius:var(--lns-radius-medium)}.lg-radius\:large{border-radius:var(--lns-radius-large)}.lg-radius\:xlarge{border-radius:var(--lns-radius-xlarge)}.lg-radius\:full{border-radius:var(--lns-radius-full)}.lg-bgc\:red{background-color:var(--lns-color-red)}.lg-bgc\:blurpleLight{background-color:var(--lns-color-blurpleLight)}.lg-bgc\:blurpleMedium{background-color:var(--lns-color-blurpleMedium)}.lg-bgc\:blurple{background-color:var(--lns-color-blurple)}.lg-bgc\:blurpleDark{background-color:var(--lns-color-blurpleDark)}.lg-bgc\:offWhite{background-color:var(--lns-color-offWhite)}.lg-bgc\:blueLight{background-color:var(--lns-color-blueLight)}.lg-bgc\:blue{background-color:var(--lns-color-blue)}.lg-bgc\:blueDark{background-color:var(--lns-color-blueDark)}.lg-bgc\:orangeLight{background-color:var(--lns-color-orangeLight)}.lg-bgc\:orange{background-color:var(--lns-color-orange)}.lg-bgc\:orangeDark{background-color:var(--lns-color-orangeDark)}.lg-bgc\:tealLight{background-color:var(--lns-color-tealLight)}.lg-bgc\:teal{background-color:var(--lns-color-teal)}.lg-bgc\:tealDark{background-color:var(--lns-color-tealDark)}.lg-bgc\:yellowLight{background-color:var(--lns-color-yellowLight)}.lg-bgc\:yellow{background-color:var(--lns-color-yellow)}.lg-bgc\:yellowDark{background-color:var(--lns-color-yellowDark)}.lg-bgc\:grey8{background-color:var(--lns-color-grey8)}.lg-bgc\:grey7{background-color:var(--lns-color-grey7)}.lg-bgc\:grey6{background-color:var(--lns-color-grey6)}.lg-bgc\:grey5{background-color:var(--lns-color-grey5)}.lg-bgc\:grey4{background-color:var(--lns-color-grey4)}.lg-bgc\:grey3{background-color:var(--lns-color-grey3)}.lg-bgc\:grey2{background-color:var(--lns-color-grey2)}.lg-bgc\:grey1{background-color:var(--lns-color-grey1)}.lg-bgc\:white{background-color:var(--lns-color-white)}.lg-bgc\:primary{background-color:var(--lns-color-primary)}.lg-bgc\:primaryHover{background-color:var(--lns-color-primaryHover)}.lg-bgc\:primaryActive{background-color:var(--lns-color-primaryActive)}.lg-bgc\:body{background-color:var(--lns-color-body)}.lg-bgc\:bodyDimmed{background-color:var(--lns-color-bodyDimmed)}.lg-bgc\:background{background-color:var(--lns-color-background)}.lg-bgc\:backgroundHover{background-color:var(--lns-color-backgroundHover)}.lg-bgc\:backgroundActive{background-color:var(--lns-color-backgroundActive)}.lg-bgc\:backgroundSecondary{background-color:var(--lns-color-backgroundSecondary)}.lg-bgc\:backgroundSecondary2{background-color:var(--lns-color-backgroundSecondary2)}.lg-bgc\:overlay{background-color:var(--lns-color-overlay)}.lg-bgc\:border{background-color:var(--lns-color-border)}.lg-bgc\:focusRing{background-color:var(--lns-color-focusRing)}.lg-bgc\:record{background-color:var(--lns-color-record)}.lg-bgc\:recordHover{background-color:var(--lns-color-recordHover)}.lg-bgc\:recordActive{background-color:var(--lns-color-recordActive)}.lg-bgc\:info{background-color:var(--lns-color-info)}.lg-bgc\:success{background-color:var(--lns-color-success)}.lg-bgc\:warning{background-color:var(--lns-color-warning)}.lg-bgc\:danger{background-color:var(--lns-color-danger)}.lg-bgc\:dangerHover{background-color:var(--lns-color-dangerHover)}.lg-bgc\:dangerActive{background-color:var(--lns-color-dangerActive)}.lg-bgc\:backdrop{background-color:var(--lns-color-backdrop)}.lg-bgc\:backdropDark{background-color:var(--lns-color-backdropDark)}.lg-bgc\:disabledContent{background-color:var(--lns-color-disabledContent)}.lg-bgc\:highlight{background-color:var(--lns-color-highlight)}.lg-bgc\:disabledBackground{background-color:var(--lns-color-disabledBackground)}.lg-bgc\:formFieldBorder{background-color:var(--lns-color-formFieldBorder)}.lg-bgc\:formFieldBackground{background-color:var(--lns-color-formFieldBackground)}.lg-bgc\:buttonBorder{background-color:var(--lns-color-buttonBorder)}.lg-bgc\:upgrade{background-color:var(--lns-color-upgrade)}.lg-bgc\:upgradeHover{background-color:var(--lns-color-upgradeHover)}.lg-bgc\:upgradeActive{background-color:var(--lns-color-upgradeActive)}.lg-bgc\:tabBackground{background-color:var(--lns-color-tabBackground)}.lg-bgc\:discoveryBackground{background-color:var(--lns-color-discoveryBackground)}.lg-bgc\:discoveryLightBackground{background-color:var(--lns-color-discoveryLightBackground)}.lg-bgc\:discoveryTitle{background-color:var(--lns-color-discoveryTitle)}.lg-bgc\:discoveryHighlight{background-color:var(--lns-color-discoveryHighlight)}.lg-m\:0{margin:0}.lg-m\:auto{margin:auto}.lg-m\:xsmall{margin:var(--lns-space-xsmall)}.lg-m\:small{margin:var(--lns-space-small)}.lg-m\:medium{margin:var(--lns-space-medium)}.lg-m\:large{margin:var(--lns-space-large)}.lg-m\:xlarge{margin:var(--lns-space-xlarge)}.lg-m\:xxlarge{margin:var(--lns-space-xxlarge)}.lg-mt\:0{margin-top:0}.lg-mt\:auto{margin-top:auto}.lg-mt\:xsmall{margin-top:var(--lns-space-xsmall)}.lg-mt\:small{margin-top:var(--lns-space-small)}.lg-mt\:medium{margin-top:var(--lns-space-medium)}.lg-mt\:large{margin-top:var(--lns-space-large)}.lg-mt\:xlarge{margin-top:var(--lns-space-xlarge)}.lg-mt\:xxlarge{margin-top:var(--lns-space-xxlarge)}.lg-mb\:0{margin-bottom:0}.lg-mb\:auto{margin-bottom:auto}.lg-mb\:xsmall{margin-bottom:var(--lns-space-xsmall)}.lg-mb\:small{margin-bottom:var(--lns-space-small)}.lg-mb\:medium{margin-bottom:var(--lns-space-medium)}.lg-mb\:large{margin-bottom:var(--lns-space-large)}.lg-mb\:xlarge{margin-bottom:var(--lns-space-xlarge)}.lg-mb\:xxlarge{margin-bottom:var(--lns-space-xxlarge)}.lg-ml\:0{margin-left:0}.lg-ml\:auto{margin-left:auto}.lg-ml\:xsmall{margin-left:var(--lns-space-xsmall)}.lg-ml\:small{margin-left:var(--lns-space-small)}.lg-ml\:medium{margin-left:var(--lns-space-medium)}.lg-ml\:large{margin-left:var(--lns-space-large)}.lg-ml\:xlarge{margin-left:var(--lns-space-xlarge)}.lg-ml\:xxlarge{margin-left:var(--lns-space-xxlarge)}.lg-mr\:0{margin-right:0}.lg-mr\:auto{margin-right:auto}.lg-mr\:xsmall{margin-right:var(--lns-space-xsmall)}.lg-mr\:small{margin-right:var(--lns-space-small)}.lg-mr\:medium{margin-right:var(--lns-space-medium)}.lg-mr\:large{margin-right:var(--lns-space-large)}.lg-mr\:xlarge{margin-right:var(--lns-space-xlarge)}.lg-mr\:xxlarge{margin-right:var(--lns-space-xxlarge)}.lg-mx\:0{margin-left:0;margin-right:0}.lg-mx\:auto{margin-left:auto;margin-right:auto}.lg-mx\:xsmall{margin-left:var(--lns-space-xsmall);margin-right:var(--lns-space-xsmall)}.lg-mx\:small{margin-left:var(--lns-space-small);margin-right:var(--lns-space-small)}.lg-mx\:medium{margin-left:var(--lns-space-medium);margin-right:var(--lns-space-medium)}.lg-mx\:large{margin-left:var(--lns-space-large);margin-right:var(--lns-space-large)}.lg-mx\:xlarge{margin-left:var(--lns-space-xlarge);margin-right:var(--lns-space-xlarge)}.lg-mx\:xxlarge{margin-left:var(--lns-space-xxlarge);margin-right:var(--lns-space-xxlarge)}.lg-my\:0{margin-top:0;margin-bottom:0}.lg-my\:auto{margin-top:auto;margin-bottom:auto}.lg-my\:xsmall{margin-top:var(--lns-space-xsmall);margin-bottom:var(--lns-space-xsmall)}.lg-my\:small{margin-top:var(--lns-space-small);margin-bottom:var(--lns-space-small)}.lg-my\:medium{margin-top:var(--lns-space-medium);margin-bottom:var(--lns-space-medium)}.lg-my\:large{margin-top:var(--lns-space-large);margin-bottom:var(--lns-space-large)}.lg-my\:xlarge{margin-top:var(--lns-space-xlarge);margin-bottom:var(--lns-space-xlarge)}.lg-my\:xxlarge{margin-top:var(--lns-space-xxlarge);margin-bottom:var(--lns-space-xxlarge)}.lg-p\:0{padding:0}.lg-p\:xsmall{padding:var(--lns-space-xsmall)}.lg-p\:small{padding:var(--lns-space-small)}.lg-p\:medium{padding:var(--lns-space-medium)}.lg-p\:large{padding:var(--lns-space-large)}.lg-p\:xlarge{padding:var(--lns-space-xlarge)}.lg-p\:xxlarge{padding:var(--lns-space-xxlarge)}.lg-pt\:0{padding-top:0}.lg-pt\:xsmall{padding-top:var(--lns-space-xsmall)}.lg-pt\:small{padding-top:var(--lns-space-small)}.lg-pt\:medium{padding-top:var(--lns-space-medium)}.lg-pt\:large{padding-top:var(--lns-space-large)}.lg-pt\:xlarge{padding-top:var(--lns-space-xlarge)}.lg-pt\:xxlarge{padding-top:var(--lns-space-xxlarge)}.lg-pb\:0{padding-bottom:0}.lg-pb\:xsmall{padding-bottom:var(--lns-space-xsmall)}.lg-pb\:small{padding-bottom:var(--lns-space-small)}.lg-pb\:medium{padding-bottom:var(--lns-space-medium)}.lg-pb\:large{padding-bottom:var(--lns-space-large)}.lg-pb\:xlarge{padding-bottom:var(--lns-space-xlarge)}.lg-pb\:xxlarge{padding-bottom:var(--lns-space-xxlarge)}.lg-pl\:0{padding-left:0}.lg-pl\:xsmall{padding-left:var(--lns-space-xsmall)}.lg-pl\:small{padding-left:var(--lns-space-small)}.lg-pl\:medium{padding-left:var(--lns-space-medium)}.lg-pl\:large{padding-left:var(--lns-space-large)}.lg-pl\:xlarge{padding-left:var(--lns-space-xlarge)}.lg-pl\:xxlarge{padding-left:var(--lns-space-xxlarge)}.lg-pr\:0{padding-right:0}.lg-pr\:xsmall{padding-right:var(--lns-space-xsmall)}.lg-pr\:small{padding-right:var(--lns-space-small)}.lg-pr\:medium{padding-right:var(--lns-space-medium)}.lg-pr\:large{padding-right:var(--lns-space-large)}.lg-pr\:xlarge{padding-right:var(--lns-space-xlarge)}.lg-pr\:xxlarge{padding-right:var(--lns-space-xxlarge)}.lg-px\:0{padding-left:0;padding-right:0}.lg-px\:xsmall{padding-left:var(--lns-space-xsmall);padding-right:var(--lns-space-xsmall)}.lg-px\:small{padding-left:var(--lns-space-small);padding-right:var(--lns-space-small)}.lg-px\:medium{padding-left:var(--lns-space-medium);padding-right:var(--lns-space-medium)}.lg-px\:large{padding-left:var(--lns-space-large);padding-right:var(--lns-space-large)}.lg-px\:xlarge{padding-left:var(--lns-space-xlarge);padding-right:var(--lns-space-xlarge)}.lg-px\:xxlarge{padding-left:var(--lns-space-xxlarge);padding-right:var(--lns-space-xxlarge)}.lg-py\:0{padding-top:0;padding-bottom:0}.lg-py\:xsmall{padding-top:var(--lns-space-xsmall);padding-bottom:var(--lns-space-xsmall)}.lg-py\:small{padding-top:var(--lns-space-small);padding-bottom:var(--lns-space-small)}.lg-py\:medium{padding-top:var(--lns-space-medium);padding-bottom:var(--lns-space-medium)}.lg-py\:large{padding-top:var(--lns-space-large);padding-bottom:var(--lns-space-large)}.lg-py\:xlarge{padding-top:var(--lns-space-xlarge);padding-bottom:var(--lns-space-xlarge)}.lg-py\:xxlarge{padding-top:var(--lns-space-xxlarge);padding-bottom:var(--lns-space-xxlarge)}.lg-text\:small{font-size:var(--lns-fontSize-small);line-height:var(--lns-lineHeight-small)}.lg-text\:body-sm{font-size:var(--lns-fontSize-body-sm);line-height:var(--lns-lineHeight-body-sm)}.lg-text\:medium{font-size:var(--lns-fontSize-medium);line-height:var(--lns-lineHeight-medium)}.lg-text\:body-md{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md)}.lg-text\:large{font-size:var(--lns-fontSize-large);line-height:var(--lns-lineHeight-large)}.lg-text\:body-lg{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg)}.lg-text\:xlarge{font-size:var(--lns-fontSize-xlarge);line-height:var(--lns-lineHeight-xlarge)}.lg-text\:heading-sm{font-size:var(--lns-fontSize-heading-sm);line-height:var(--lns-lineHeight-heading-sm)}.lg-text\:xxlarge{font-size:var(--lns-fontSize-xxlarge);line-height:var(--lns-lineHeight-xxlarge)}.lg-text\:heading-md{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md)}.lg-text\:xxxlarge{font-size:var(--lns-fontSize-xxxlarge);line-height:var(--lns-lineHeight-xxxlarge)}.lg-text\:heading-lg{font-size:var(--lns-fontSize-heading-lg);line-height:var(--lns-lineHeight-heading-lg)}.lg-weight\:book{font-weight:var(--lns-fontWeight-book)}.lg-weight\:bold{font-weight:var(--lns-fontWeight-bold)}.lg-text\:body{font-size:var(--lns-fontSize-body-md);line-height:var(--lns-lineHeight-body-md);font-weight:var(--lns-fontWeight-book)}.lg-text\:title{font-size:var(--lns-fontSize-body-lg);line-height:var(--lns-lineHeight-body-lg);font-weight:var(--lns-fontWeight-bold)}.lg-text\:mainTitle{font-size:var(--lns-fontSize-heading-md);line-height:var(--lns-lineHeight-heading-md);font-weight:var(--lns-fontWeight-bold)}.lg-text\:left{text-align:left}.lg-text\:right{text-align:right}.lg-text\:center{text-align:center}.lg-border{border:1px solid var(--lns-color-border)}.lg-borderTop{border-top:1px solid var(--lns-color-border)}.lg-borderBottom{border-bottom:1px solid var(--lns-color-border)}.lg-borderLeft{border-left:1px solid var(--lns-color-border)}.lg-borderRight{border-right:1px solid var(--lns-color-border)}.lg-inline{display:inline}.lg-block{display:block}.lg-flex{display:flex}.lg-inlineBlock{display:inline-block}.lg-inlineFlex{display:inline-flex}.lg-none{display:none}.lg-flexWrap{flex-wrap:wrap}.lg-flexDirection\:column{flex-direction:column}.lg-flexDirection\:row{flex-direction:row}.lg-items\:stretch{align-items:stretch}.lg-items\:center{align-items:center}.lg-items\:baseline{align-items:baseline}.lg-items\:flexStart{align-items:flex-start}.lg-items\:flexEnd{align-items:flex-end}.lg-items\:selfStart{align-items:self-start}.lg-items\:selfEnd{align-items:self-end}.lg-justify\:flexStart{justify-content:flex-start}.lg-justify\:flexEnd{justify-content:flex-end}.lg-justify\:center{justify-content:center}.lg-justify\:spaceBetween{justify-content:space-between}.lg-justify\:spaceAround{justify-content:space-around}.lg-justify\:spaceEvenly{justify-content:space-evenly}.lg-grow\:0{flex-grow:0}.lg-grow\:1{flex-grow:1}.lg-shrink\:0{flex-shrink:0}.lg-shrink\:1{flex-shrink:1}.lg-self\:auto{align-self:auto}.lg-self\:flexStart{align-self:flex-start}.lg-self\:flexEnd{align-self:flex-end}.lg-self\:center{align-self:center}.lg-self\:baseline{align-self:baseline}.lg-self\:stretch{align-self:stretch}.lg-overflow\:hidden{overflow:hidden}.lg-overflow\:auto{overflow:auto}.lg-relative{position:relative}.lg-absolute{position:absolute}.lg-sticky{position:sticky}.lg-fixed{position:fixed}.lg-top\:0{top:0}.lg-top\:auto{top:auto}.lg-top\:xsmall{top:var(--lns-space-xsmall)}.lg-top\:small{top:var(--lns-space-small)}.lg-top\:medium{top:var(--lns-space-medium)}.lg-top\:large{top:var(--lns-space-large)}.lg-top\:xlarge{top:var(--lns-space-xlarge)}.lg-top\:xxlarge{top:var(--lns-space-xxlarge)}.lg-bottom\:0{bottom:0}.lg-bottom\:auto{bottom:auto}.lg-bottom\:xsmall{bottom:var(--lns-space-xsmall)}.lg-bottom\:small{bottom:var(--lns-space-small)}.lg-bottom\:medium{bottom:var(--lns-space-medium)}.lg-bottom\:large{bottom:var(--lns-space-large)}.lg-bottom\:xlarge{bottom:var(--lns-space-xlarge)}.lg-bottom\:xxlarge{bottom:var(--lns-space-xxlarge)}.lg-left\:0{left:0}.lg-left\:auto{left:auto}.lg-left\:xsmall{left:var(--lns-space-xsmall)}.lg-left\:small{left:var(--lns-space-small)}.lg-left\:medium{left:var(--lns-space-medium)}.lg-left\:large{left:var(--lns-space-large)}.lg-left\:xlarge{left:var(--lns-space-xlarge)}.lg-left\:xxlarge{left:var(--lns-space-xxlarge)}.lg-right\:0{right:0}.lg-right\:auto{right:auto}.lg-right\:xsmall{right:var(--lns-space-xsmall)}.lg-right\:small{right:var(--lns-space-small)}.lg-right\:medium{right:var(--lns-space-medium)}.lg-right\:large{right:var(--lns-space-large)}.lg-right\:xlarge{right:var(--lns-space-xlarge)}.lg-right\:xxlarge{right:var(--lns-space-xxlarge)}.lg-width\:auto{width:auto}.lg-width\:full{width:100%}.lg-width\:0{width:0}.lg-minWidth\:0{min-width:0}.lg-height\:auto{height:auto}.lg-height\:full{height:100%}.lg-height\:0{height:0}.lg-ellipsis{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.lg-srOnly{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0}}
  
            #inner-shadow-companion {
              --lns-unit: 8px;
              all: initial;
              font-family: circular, Helvetica, sans-serif;
              color: var(--lns-color-body);
            }
            #tooltip-mount-layer-companion {
              z-index: 2147483646;
              position: relative;

              color: var(--lns-color-body);
              pointer-events: auto;
            }
          </style><div class="companion-1b6rwsq"></div></div></template></section></div><iframe id="nr-ext-rsicon" style="position: absolute; display: none; width: 50px; height: 50px; z-index: 2147483647; border-style: none; background: transparent;" src="./Vite + React_files/saved_resource.html"></iframe></body></html>