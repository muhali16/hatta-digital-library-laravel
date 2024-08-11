<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hatta Digital Library</title>

    <!-- css assets -->
    <style>
        @import url(https://fonts.googleapis.com/css2?family=League+Gothic&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);
        /*
        ! tailwindcss v3.4.0 | MIT License | https://tailwindcss.com
        */

        /*
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
        7. Disable tap highlights on iOS
        */

        html,
        :host {
            line-height: 1.5; /* 1 */
            -webkit-text-size-adjust: 100%; /* 2 */
            -moz-tab-size: 4; /* 3 */
            -o-tab-size: 4;
            tab-size: 4; /* 3 */
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 4 */
            font-feature-settings: normal; /* 5 */
            font-variation-settings: normal; /* 6 */
            -webkit-tap-highlight-color: transparent; /* 7 */
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
        1. Use the user's configured `mono` font-family by default.
        2. Use the user's configured `mono` font-feature-settings by default.
        3. Use the user's configured `mono` font-variation-settings by default.
        4. Correct the odd `em` font sizing in all browsers.
        */

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
            font-feature-settings: normal; /* 2 */
            font-variation-settings: normal; /* 3 */
            font-size: 1em; /* 4 */
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

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
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

        html{
            --tw-text-opacity: 1;
            color: rgb(23 23 23 / var(--tw-text-opacity));
        }

        html.dark{
            --tw-text-opacity: 1;
            color: rgb(250 250 250 / var(--tw-text-opacity));
            --tw-bg-opacity: 1;
            background-color: rgb(38 38 38 / var(--tw-bg-opacity));
        }

        *, ::before, ::after{
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

        ::backdrop{
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
        .container{
            width: 100%;
        }
        @media (min-width: 640px){

            .container{
                max-width: 640px;
            }
        }
        @media (min-width: 768px){

            .container{
                max-width: 768px;
            }
        }
        @media (min-width: 1024px){

            .container{
                max-width: 1024px;
            }
        }
        @media (min-width: 1280px){

            .container{
                max-width: 1280px;
            }
        }
        @media (min-width: 1536px){

            .container{
                max-width: 1536px;
            }
        }
        .pointer-events-none{
            pointer-events: none;
        }
        .pointer-events-auto{
            pointer-events: auto;
        }
        .\!visible{
            visibility: visible !important;
        }
        .collapse{
            visibility: collapse;
        }
        .static{
            position: static;
        }
        .fixed{
            position: fixed;
        }
        .absolute{
            position: absolute;
        }
        .relative{
            position: relative;
        }
        .bottom-0{
            bottom: 0px;
        }
        .left-0{
            left: 0px;
        }
        .left-3{
            left: 0.75rem;
        }
        .right-0{
            right: 0px;
        }
        .top-0{
            top: 0px;
        }
        .z-20{
            z-index: 20;
        }
        .z-50{
            z-index: 50;
        }
        .z-\[1000\]{
            z-index: 1000;
        }
        .z-\[1035\]{
            z-index: 1035;
        }
        .z-\[1055\]{
            z-index: 1055;
        }
        .z-\[2\]{
            z-index: 2;
        }
        .float-left{
            float: left;
        }
        .m-0{
            margin: 0px;
        }
        .m-1{
            margin: 0.25rem;
        }
        .mx-1{
            margin-left: 0.25rem;
            margin-right: 0.25rem;
        }
        .mx-10{
            margin-left: 2.5rem;
            margin-right: 2.5rem;
        }
        .mx-4{
            margin-left: 1rem;
            margin-right: 1rem;
        }
        .mx-7{
            margin-left: 1.75rem;
            margin-right: 1.75rem;
        }
        .mx-auto{
            margin-left: auto;
            margin-right: auto;
        }
        .my-2{
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }
        .my-3{
            margin-top: 0.75rem;
            margin-bottom: 0.75rem;
        }
        .my-4{
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        .-ml-\[1\.5rem\]{
            margin-left: -1.5rem;
        }
        .-mr-0{
            margin-right: -0px;
        }
        .-mr-0\.5{
            margin-right: -0.125rem;
        }
        .-mr-1{
            margin-right: -0.25rem;
        }
        .mb-0{
            margin-bottom: 0px;
        }
        .mb-12{
            margin-bottom: 3rem;
        }
        .mb-2{
            margin-bottom: 0.5rem;
        }
        .mb-3{
            margin-bottom: 0.75rem;
        }
        .mb-4{
            margin-bottom: 1rem;
        }
        .mb-6{
            margin-bottom: 1.5rem;
        }
        .mb-\[0\.125rem\]{
            margin-bottom: 0.125rem;
        }
        .ml-1{
            margin-left: 0.25rem;
        }
        .ml-2{
            margin-left: 0.5rem;
        }
        .ml-3{
            margin-left: 0.75rem;
        }
        .ml-auto{
            margin-left: auto;
        }
        .mr-12{
            margin-right: 3rem;
        }
        .mr-2{
            margin-right: 0.5rem;
        }
        .mr-24{
            margin-right: 6rem;
        }
        .mr-3{
            margin-right: 0.75rem;
        }
        .mr-4{
            margin-right: 1rem;
        }
        .mr-5{
            margin-right: 1.25rem;
        }
        .mr-\[6px\]{
            margin-right: 6px;
        }
        .ms-auto{
            margin-inline-start: auto;
        }
        .mt-1{
            margin-top: 0.25rem;
        }
        .mt-10{
            margin-top: 2.5rem;
        }
        .mt-2{
            margin-top: 0.5rem;
        }
        .mt-3{
            margin-top: 0.75rem;
        }
        .mt-4{
            margin-top: 1rem;
        }
        .mt-5{
            margin-top: 1.25rem;
        }
        .mt-7{
            margin-top: 1.75rem;
        }
        .mt-\[0\.15rem\]{
            margin-top: 0.15rem;
        }
        .box-content{
            box-sizing: content-box;
        }
        .block{
            display: block;
        }
        .inline-block{
            display: inline-block;
        }
        .flex{
            display: flex;
        }
        .table{
            display: table;
        }
        .grid{
            display: grid;
        }
        .hidden{
            display: none;
        }
        .h-12{
            height: 3rem;
        }
        .h-3{
            height: 0.75rem;
        }
        .h-3\.5{
            height: 0.875rem;
        }
        .h-5{
            height: 1.25rem;
        }
        .h-6{
            height: 1.5rem;
        }
        .h-7{
            height: 1.75rem;
        }
        .h-9{
            height: 2.25rem;
        }
        .h-\[1\.125rem\]{
            height: 1.125rem;
        }
        .h-fit{
            height: -moz-fit-content;
            height: fit-content;
        }
        .h-full{
            height: 100%;
        }
        .h-screen{
            height: 100vh;
        }
        .h-80{
            height: 20rem;
        }
        .min-h-\[1\.5rem\]{
            min-height: 1.5rem;
        }
        .min-h-\[auto\]{
            min-height: auto;
        }
        .w-10{
            width: 2.5rem;
        }
        .w-2{
            width: 0.5rem;
        }
        .w-3{
            width: 0.75rem;
        }
        .w-3\.5{
            width: 0.875rem;
        }
        .w-32{
            width: 8rem;
        }
        .w-4{
            width: 1rem;
        }
        .w-44{
            width: 11rem;
        }
        .w-5{
            width: 1.25rem;
        }
        .w-6{
            width: 1.5rem;
        }
        .w-60{
            width: 15rem;
        }
        .w-64{
            width: 16rem;
        }
        .w-7{
            width: 1.75rem;
        }
        .w-80{
            width: 20rem;
        }
        .w-9{
            width: 2.25rem;
        }
        .w-\[1\.125rem\]{
            width: 1.125rem;
        }
        .w-\[1px\]{
            width: 1px;
        }
        .w-auto{
            width: auto;
        }
        .w-full{
            width: 100%;
        }
        .min-w-0{
            min-width: 0px;
        }
        .min-w-full{
            min-width: 100%;
        }
        .max-w-\[90\%\]{
            max-width: 90%;
        }
        .flex-auto{
            flex: 1 1 auto;
        }
        .flex-shrink-0{
            flex-shrink: 0;
        }
        .shrink-0{
            flex-shrink: 0;
        }
        .flex-grow{
            flex-grow: 1;
        }
        .grow-0{
            flex-grow: 0;
        }
        .basis-\[100\%\]{
            flex-basis: 100%;
        }
        .basis-auto{
            flex-basis: auto;
        }
        .origin-\[0_0\]{
            transform-origin: 0 0;
        }
        .-translate-x-full{
            --tw-translate-x: -100%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }
        .translate-x-0{
            --tw-translate-x: 0px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }
        .translate-y-3\/4{
            --tw-translate-y: 75%;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }
        .translate-y-\[-50px\]{
            --tw-translate-y: -50px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }
        .rotate-\[-180deg\]{
            --tw-rotate: -180deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }
        .cursor-pointer{
            cursor: pointer;
        }
        .list-none{
            list-style-type: none;
        }
        .appearance-none{
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .flex-row{
            flex-direction: row;
        }
        .flex-col{
            flex-direction: column;
        }
        .flex-wrap{
            flex-wrap: wrap;
        }
        .flex-nowrap{
            flex-wrap: nowrap;
        }
        .items-start{
            align-items: flex-start;
        }
        .items-end{
            align-items: flex-end;
        }
        .items-center{
            align-items: center;
        }
        .items-baseline{
            align-items: baseline;
        }
        .items-stretch{
            align-items: stretch;
        }
        .justify-start{
            justify-content: flex-start;
        }
        .justify-end{
            justify-content: flex-end;
        }
        .justify-center{
            justify-content: center;
        }
        .justify-between{
            justify-content: space-between;
        }
        .gap-2{
            gap: 0.5rem;
        }
        .gap-3{
            gap: 0.75rem;
        }
        .gap-4{
            gap: 1rem;
        }
        .gap-6{
            gap: 1.5rem;
        }
        .overflow-hidden{
            overflow: hidden;
        }
        .overflow-x-auto{
            overflow-x: auto;
        }
        .overflow-y-auto{
            overflow-y: auto;
        }
        .overflow-x-hidden{
            overflow-x: hidden;
        }
        .scroll-smooth{
            scroll-behavior: smooth;
        }
        .truncate{
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .whitespace-nowrap{
            white-space: nowrap;
        }
        .text-wrap{
            text-wrap: wrap;
        }
        .rounded{
            border-radius: 0.25rem;
        }
        .rounded-\[0\.25rem\]{
            border-radius: 0.25rem;
        }
        .rounded-\[5px\]{
            border-radius: 5px;
        }
        .rounded-full{
            border-radius: 9999px;
        }
        .rounded-lg{
            border-radius: 0.5rem;
        }
        .rounded-md{
            border-radius: 0.375rem;
        }
        .rounded-none{
            border-radius: 0px;
        }
        .rounded-b-lg{
            border-bottom-right-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }
        .rounded-b-md{
            border-bottom-right-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
        }
        .rounded-l{
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
        }
        .rounded-r{
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
        }
        .rounded-t-\[15px\]{
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .rounded-t-lg{
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .rounded-t-md{
            border-top-left-radius: 0.375rem;
            border-top-right-radius: 0.375rem;
        }
        .border{
            border-width: 1px;
        }
        .border-0{
            border-width: 0px;
        }
        .border-2{
            border-width: 2px;
        }
        .border-\[0\.125rem\]{
            border-width: 0.125rem;
        }
        .border-b{
            border-bottom-width: 1px;
        }
        .border-b-2{
            border-bottom-width: 2px;
        }
        .border-t-0{
            border-top-width: 0px;
        }
        .border-t-2{
            border-top-width: 2px;
        }
        .border-solid{
            border-style: solid;
        }
        .border-none{
            border-style: none;
        }
        .border-black{
            --tw-border-opacity: 1;
            border-color: rgb(0 0 0 / var(--tw-border-opacity));
        }
        .border-blue-500{
            --tw-border-opacity: 1;
            border-color: rgb(59 130 246 / var(--tw-border-opacity));
        }
        .border-blue-700{
            --tw-border-opacity: 1;
            border-color: rgb(29 78 216 / var(--tw-border-opacity));
        }
        .border-neutral-100{
            --tw-border-opacity: 1;
            border-color: rgb(245 245 245 / var(--tw-border-opacity));
        }
        .border-neutral-200{
            --tw-border-opacity: 1;
            border-color: rgb(229 229 229 / var(--tw-border-opacity));
        }
        .border-neutral-300{
            --tw-border-opacity: 1;
            border-color: rgb(212 212 212 / var(--tw-border-opacity));
        }
        .border-neutral-400{
            --tw-border-opacity: 1;
            border-color: rgb(163 163 163 / var(--tw-border-opacity));
        }
        .border-neutral-50{
            --tw-border-opacity: 1;
            border-color: rgb(250 250 250 / var(--tw-border-opacity));
        }
        .border-neutral-500{
            --tw-border-opacity: 1;
            border-color: rgb(115 115 115 / var(--tw-border-opacity));
        }
        .border-white{
            --tw-border-opacity: 1;
            border-color: rgb(255 255 255 / var(--tw-border-opacity));
        }
        .border-gray-700{
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity));
        }
        .border-opacity-100{
            --tw-border-opacity: 1;
        }
        .bg-\[\#001D70\]{
            --tw-bg-opacity: 1;
            background-color: rgb(0 29 112 / var(--tw-bg-opacity));
        }
        .bg-\[\#FBFBFB\]{
            --tw-bg-opacity: 1;
            background-color: rgb(251 251 251 / var(--tw-bg-opacity));
        }
        .bg-\[hsla\(0\2c 0\%\2c 98\%\2c 0\.15\)\]{
            background-color: hsla(0,0%,98%,0.15);
        }
        .bg-blue-900{
            --tw-bg-opacity: 1;
            background-color: rgb(30 58 138 / var(--tw-bg-opacity));
        }
        .bg-neutral-300{
            --tw-bg-opacity: 1;
            background-color: rgb(212 212 212 / var(--tw-bg-opacity));
        }
        .bg-red-500{
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity));
        }
        .bg-transparent{
            background-color: transparent;
        }
        .bg-white{
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }
        .bg-yellow-500{
            --tw-bg-opacity: 1;
            background-color: rgb(234 179 8 / var(--tw-bg-opacity));
        }
        .bg-cover{
            background-size: cover;
        }
        .bg-fixed{
            background-attachment: fixed;
        }
        .bg-clip-padding{
            background-clip: padding-box;
        }
        .bg-no-repeat{
            background-repeat: no-repeat;
        }
        .fill-\[\#336dec\]{
            fill: #336dec;
        }
        .p-0{
            padding: 0px;
        }
        .p-1{
            padding: 0.25rem;
        }
        .p-2{
            padding: 0.5rem;
        }
        .p-4{
            padding: 1rem;
        }
        .p-5{
            padding: 1.25rem;
        }
        .p-6{
            padding: 1.5rem;
        }
        .p-7{
            padding: 1.75rem;
        }
        .p-20{
            padding: 5rem;
        }
        .px-2{
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
        .px-3{
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
        .px-4{
            padding-left: 1rem;
            padding-right: 1rem;
        }
        .px-5{
            padding-left: 1.25rem;
            padding-right: 1.25rem;
        }
        .px-6{
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        .px-7{
            padding-left: 1.75rem;
            padding-right: 1.75rem;
        }
        .px-9{
            padding-left: 2.25rem;
            padding-right: 2.25rem;
        }
        .px-\[0\.2rem\]{
            padding-left: 0.2rem;
            padding-right: 0.2rem;
        }
        .py-1{
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }
        .py-1\.5{
            padding-top: 0.375rem;
            padding-bottom: 0.375rem;
        }
        .py-10{
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }
        .py-2{
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }
        .py-28{
            padding-top: 7rem;
            padding-bottom: 7rem;
        }
        .py-3{
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        .py-36{
            padding-top: 9rem;
            padding-bottom: 9rem;
        }
        .py-4{
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        .py-5{
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }
        .py-\[0\.25rem\]{
            padding-top: 0.25rem;
            padding-bottom: 0.25rem;
        }
        .py-\[0\.32rem\]{
            padding-top: 0.32rem;
            padding-bottom: 0.32rem;
        }
        .px-20{
            padding-left: 5rem;
            padding-right: 5rem;
        }
        .pb-2{
            padding-bottom: 0.5rem;
        }
        .pb-2\.5{
            padding-bottom: 0.625rem;
        }
        .pb-\[5px\]{
            padding-bottom: 5px;
        }
        .pb-\[6px\]{
            padding-bottom: 6px;
        }
        .pl-0{
            padding-left: 0px;
        }
        .pl-2{
            padding-left: 0.5rem;
        }
        .pl-\[0\.15rem\]{
            padding-left: 0.15rem;
        }
        .pl-\[1\.5rem\]{
            padding-left: 1.5rem;
        }
        .pt-1{
            padding-top: 0.25rem;
        }
        .pt-2{
            padding-top: 0.5rem;
        }
        .pt-2\.5{
            padding-top: 0.625rem;
        }
        .pt-3{
            padding-top: 0.75rem;
        }
        .pt-6{
            padding-top: 1.5rem;
        }
        .pt-\[0\.37rem\]{
            padding-top: 0.37rem;
        }
        .pt-\[6px\]{
            padding-top: 6px;
        }
        .pr-20{
            padding-right: 5rem;
        }
        .text-left{
            text-align: left;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .text-end{
            text-align: end;
        }
        .text-2xl{
            font-size: 1.5rem;
            line-height: 2rem;
        }
        .text-3xl{
            font-size: 1.875rem;
            line-height: 2.25rem;
        }
        .text-4xl{
            font-size: 2.25rem;
            line-height: 2.5rem;
        }
        .text-5xl{
            font-size: 3rem;
            line-height: 1;
        }
        .text-\[0\.875rem\]{
            font-size: 0.875rem;
        }
        .text-base{
            font-size: 1rem;
            line-height: 1.5rem;
        }
        .text-lg{
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        .text-sm{
            font-size: 0.875rem;
            line-height: 1.25rem;
        }
        .text-xl{
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
        .text-xs{
            font-size: 0.75rem;
            line-height: 1rem;
        }
        .font-bold{
            font-weight: 700;
        }
        .font-medium{
            font-weight: 500;
        }
        .font-normal{
            font-weight: 400;
        }
        .font-semibold{
            font-weight: 600;
        }
        .font-thin{
            font-weight: 100;
        }
        .uppercase{
            text-transform: uppercase;
        }
        .capitalize{
            text-transform: capitalize;
        }
        .leading-\[1\.6\]{
            line-height: 1.6;
        }
        .leading-\[2\.15\]{
            line-height: 2.15;
        }
        .leading-normal{
            line-height: 1.5;
        }
        .leading-tight{
            line-height: 1.25;
        }
        .tracking-widest{
            letter-spacing: 0.1em;
        }
        .text-blue-500{
            --tw-text-opacity: 1;
            color: rgb(59 130 246 / var(--tw-text-opacity));
        }
        .text-blue-600{
            --tw-text-opacity: 1;
            color: rgb(37 99 235 / var(--tw-text-opacity));
        }
        .text-blue-800{
            --tw-text-opacity: 1;
            color: rgb(30 64 175 / var(--tw-text-opacity));
        }
        .text-blue-900{
            --tw-text-opacity: 1;
            color: rgb(30 58 138 / var(--tw-text-opacity));
        }
        .text-blue-950{
            --tw-text-opacity: 1;
            color: rgb(23 37 84 / var(--tw-text-opacity));
        }
        .text-current{
            color: currentColor;
        }
        .text-gray-600{
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity));
        }
        .text-neutral-200{
            --tw-text-opacity: 1;
            color: rgb(229 229 229 / var(--tw-text-opacity));
        }
        .text-neutral-50{
            --tw-text-opacity: 1;
            color: rgb(250 250 250 / var(--tw-text-opacity));
        }
        .text-neutral-500{
            --tw-text-opacity: 1;
            color: rgb(115 115 115 / var(--tw-text-opacity));
        }
        .text-neutral-700{
            --tw-text-opacity: 1;
            color: rgb(64 64 64 / var(--tw-text-opacity));
        }
        .text-neutral-800{
            --tw-text-opacity: 1;
            color: rgb(38 38 38 / var(--tw-text-opacity));
        }
        .text-neutral-900{
            --tw-text-opacity: 1;
            color: rgb(23 23 23 / var(--tw-text-opacity));
        }
        .text-red-600{
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity));
        }
        .text-red-700{
            --tw-text-opacity: 1;
            color: rgb(185 28 28 / var(--tw-text-opacity));
        }
        .text-white{
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }
        .text-white\/30{
            color: rgb(255 255 255 / 0.3);
        }
        .text-gray-700{
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity));
        }
        .opacity-0{
            opacity: 0;
        }
        .opacity-25{
            opacity: 0.25;
        }
        .opacity-50{
            opacity: 0.5;
        }
        .opacity-75{
            opacity: 0.75;
        }
        .shadow-\[0_2px_15px_-3px_rgba\(0\2c 0\2c 0\2c 0\.07\)\2c 0_10px_20px_-2px_rgba\(0\2c 0\2c 0\2c 0\.04\)\]{
            --tw-shadow: 0 2px 15px -3px rgba(0,0,0,0.07),0 10px 20px -2px rgba(0,0,0,0.04);
            --tw-shadow-colored: 0 2px 15px -3px var(--tw-shadow-color), 0 10px 20px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .shadow-\[0_4px_12px_0_rgba\(0\2c 0\2c 0\2c 0\.07\)\2c _0_2px_4px_rgba\(0\2c 0\2c 0\2c 0\.05\)\]{
            --tw-shadow: 0 4px 12px 0 rgba(0,0,0,0.07), 0 2px 4px rgba(0,0,0,0.05);
            --tw-shadow-colored: 0 4px 12px 0 var(--tw-shadow-color), 0 2px 4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .shadow-\[0_4px_9px_-4px_\#3b71ca\]{
            --tw-shadow: 0 4px 9px -4px #3b71ca;
            --tw-shadow-colored: 0 4px 9px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .shadow-lg{
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .shadow-md{
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .shadow-xl{
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        .outline-none{
            outline: 2px solid transparent;
            outline-offset: 2px;
        }
        .transition{
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        .transition-all{
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        .transition-transform{
            transition-property: transform;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
        .duration-150{
            transition-duration: 150ms;
        }
        .duration-200{
            transition-duration: 200ms;
        }
        .duration-300{
            transition-duration: 300ms;
        }
        .ease-in-out{
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }
        .ease-linear{
            transition-timing-function: linear;
        }
        .ease-out{
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
        .\[overflow-anchor\:none\]{
            overflow-anchor: none;
        }

        body {
            font-family: 'Raleway', sans-serif;
        }

        .file\:-mx-3::file-selector-button{
            margin-left: -0.75rem;
            margin-right: -0.75rem;
        }

        .file\:-my-\[0\.32rem\]::file-selector-button{
            margin-top: -0.32rem;
            margin-bottom: -0.32rem;
        }

        .file\:overflow-hidden::file-selector-button{
            overflow: hidden;
        }

        .file\:rounded-none::file-selector-button{
            border-radius: 0px;
        }

        .file\:border-0::file-selector-button{
            border-width: 0px;
        }

        .file\:border-solid::file-selector-button{
            border-style: solid;
        }

        .file\:border-inherit::file-selector-button{
            border-color: inherit;
        }

        .file\:bg-neutral-100::file-selector-button{
            --tw-bg-opacity: 1;
            background-color: rgb(245 245 245 / var(--tw-bg-opacity));
        }

        .file\:px-3::file-selector-button{
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .file\:py-\[0\.32rem\]::file-selector-button{
            padding-top: 0.32rem;
            padding-bottom: 0.32rem;
        }

        .file\:text-neutral-700::file-selector-button{
            --tw-text-opacity: 1;
            color: rgb(64 64 64 / var(--tw-text-opacity));
        }

        .file\:transition::file-selector-button{
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .file\:duration-150::file-selector-button{
            transition-duration: 150ms;
        }

        .file\:ease-in-out::file-selector-button{
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .file\:\[border-inline-end-width\:1px\]::file-selector-button{
            border-inline-end-width: 1px;
        }

        .file\:\[margin-inline-end\:0\.75rem\]::file-selector-button{
            margin-inline-end: 0.75rem;
        }

        .before\:pointer-events-none::before{
            content: var(--tw-content);
            pointer-events: none;
        }

        .before\:absolute::before{
            content: var(--tw-content);
            position: absolute;
        }

        .before\:mt-0::before{
            content: var(--tw-content);
            margin-top: 0px;
        }

        .before\:mt-0\.5::before{
            content: var(--tw-content);
            margin-top: 0.125rem;
        }

        .before\:h-\[0\.875rem\]::before{
            content: var(--tw-content);
            height: 0.875rem;
        }

        .before\:w-\[0\.875rem\]::before{
            content: var(--tw-content);
            width: 0.875rem;
        }

        .before\:flex-1::before{
            content: var(--tw-content);
            flex: 1 1 0%;
        }

        .before\:scale-0::before{
            content: var(--tw-content);
            --tw-scale-x: 0;
            --tw-scale-y: 0;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .before\:rounded-full::before{
            content: var(--tw-content);
            border-radius: 9999px;
        }

        .before\:border-t::before{
            content: var(--tw-content);
            border-top-width: 1px;
        }

        .before\:border-neutral-300::before{
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(212 212 212 / var(--tw-border-opacity));
        }

        .before\:bg-transparent::before{
            content: var(--tw-content);
            background-color: transparent;
        }

        .before\:opacity-0::before{
            content: var(--tw-content);
            opacity: 0;
        }

        .before\:shadow-\[0px_0px_0px_13px_transparent\]::before{
            content: var(--tw-content);
            --tw-shadow: 0px 0px 0px 13px transparent;
            --tw-shadow-colored: 0px 0px 0px 13px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .before\:content-\[\'\'\]::before{
            --tw-content: '';
            content: var(--tw-content);
        }

        .after\:mt-0::after{
            content: var(--tw-content);
            margin-top: 0px;
        }

        .after\:mt-0\.5::after{
            content: var(--tw-content);
            margin-top: 0.125rem;
        }

        .after\:flex-1::after{
            content: var(--tw-content);
            flex: 1 1 0%;
        }

        .after\:border-t::after{
            content: var(--tw-content);
            border-top-width: 1px;
        }

        .after\:border-neutral-300::after{
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(212 212 212 / var(--tw-border-opacity));
        }

        .checked\:before\:opacity-\[0\.16\]:checked::before{
            content: var(--tw-content);
            opacity: 0.16;
        }

        .checked\:after\:absolute:checked::after{
            content: var(--tw-content);
            position: absolute;
        }

        .checked\:after\:-mt-px:checked::after{
            content: var(--tw-content);
            margin-top: -1px;
        }

        .checked\:after\:ml-\[0\.25rem\]:checked::after{
            content: var(--tw-content);
            margin-left: 0.25rem;
        }

        .checked\:after\:block:checked::after{
            content: var(--tw-content);
            display: block;
        }

        .checked\:after\:h-\[0\.8125rem\]:checked::after{
            content: var(--tw-content);
            height: 0.8125rem;
        }

        .checked\:after\:w-\[0\.375rem\]:checked::after{
            content: var(--tw-content);
            width: 0.375rem;
        }

        .checked\:after\:rotate-45:checked::after{
            content: var(--tw-content);
            --tw-rotate: 45deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .checked\:after\:border-\[0\.125rem\]:checked::after{
            content: var(--tw-content);
            border-width: 0.125rem;
        }

        .checked\:after\:border-l-0:checked::after{
            content: var(--tw-content);
            border-left-width: 0px;
        }

        .checked\:after\:border-t-0:checked::after{
            content: var(--tw-content);
            border-top-width: 0px;
        }

        .checked\:after\:border-solid:checked::after{
            content: var(--tw-content);
            border-style: solid;
        }

        .checked\:after\:border-white:checked::after{
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(255 255 255 / var(--tw-border-opacity));
        }

        .checked\:after\:bg-transparent:checked::after{
            content: var(--tw-content);
            background-color: transparent;
        }

        .checked\:after\:content-\[\'\'\]:checked::after{
            --tw-content: '';
            content: var(--tw-content);
        }

        .hover\:z-\[2\]:hover{
            z-index: 2;
        }

        .hover\:cursor-pointer:hover{
            cursor: pointer;
        }

        .hover\:border:hover{
            border-width: 1px;
        }

        .hover\:border-2:hover{
            border-width: 2px;
        }

        .hover\:border-blue-800:hover{
            --tw-border-opacity: 1;
            border-color: rgb(30 64 175 / var(--tw-border-opacity));
        }

        .hover\:border-neutral-100:hover{
            --tw-border-opacity: 1;
            border-color: rgb(245 245 245 / var(--tw-border-opacity));
        }

        .hover\:bg-black:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
        }

        .hover\:bg-blue-900:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(30 58 138 / var(--tw-bg-opacity));
        }

        .hover\:bg-neutral-100:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(245 245 245 / var(--tw-bg-opacity));
        }

        .hover\:bg-neutral-500:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(115 115 115 / var(--tw-bg-opacity));
        }

        .hover\:bg-red-100:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(254 226 226 / var(--tw-bg-opacity));
        }

        .hover\:bg-red-600:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(220 38 38 / var(--tw-bg-opacity));
        }

        .hover\:bg-slate-50:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(248 250 252 / var(--tw-bg-opacity));
        }

        .hover\:bg-yellow-600:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(202 138 4 / var(--tw-bg-opacity));
        }

        .hover\:bg-opacity-10:hover{
            --tw-bg-opacity: 0.1;
        }

        .hover\:bg-opacity-5:hover{
            --tw-bg-opacity: 0.05;
        }

        .hover\:text-blue-200:hover{
            --tw-text-opacity: 1;
            color: rgb(191 219 254 / var(--tw-text-opacity));
        }

        .hover\:text-blue-700:hover{
            --tw-text-opacity: 1;
            color: rgb(29 78 216 / var(--tw-text-opacity));
        }

        .hover\:text-blue-800:hover{
            --tw-text-opacity: 1;
            color: rgb(30 64 175 / var(--tw-text-opacity));
        }

        .hover\:text-inherit:hover{
            color: inherit;
        }

        .hover\:text-neutral-100:hover{
            --tw-text-opacity: 1;
            color: rgb(245 245 245 / var(--tw-text-opacity));
        }

        .hover\:text-neutral-700:hover{
            --tw-text-opacity: 1;
            color: rgb(64 64 64 / var(--tw-text-opacity));
        }

        .hover\:text-red-800:hover{
            --tw-text-opacity: 1;
            color: rgb(153 27 27 / var(--tw-text-opacity));
        }

        .hover\:no-underline:hover{
            text-decoration-line: none;
        }

        .hover\:opacity-100:hover{
            opacity: 1;
        }

        .hover\:opacity-75:hover{
            opacity: 0.75;
        }

        .hover\:shadow-\[0_8px_9px_-4px_rgba\(59\2c 113\2c 202\2c 0\.3\)\2c 0_4px_18px_0_rgba\(59\2c 113\2c 202\2c 0\.2\)\]:hover{
            --tw-shadow: 0 8px 9px -4px rgba(59,113,202,0.3),0 4px 18px 0 rgba(59,113,202,0.2);
            --tw-shadow-colored: 0 8px 9px -4px var(--tw-shadow-color), 0 4px 18px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .hover\:shadow-lg:hover{
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .hover\:shadow-none:hover{
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .hover\:outline-none:hover{
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .hover\:ease-in-out:hover{
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hover\:file\:bg-neutral-200::file-selector-button:hover{
            --tw-bg-opacity: 1;
            background-color: rgb(229 229 229 / var(--tw-bg-opacity));
        }

        .hover\:before\:opacity-\[0\.04\]:hover::before{
            content: var(--tw-content);
            opacity: 0.04;
        }

        .hover\:before\:shadow-\[0px_0px_0px_13px_rgba\(0\2c 0\2c 0\2c 0\.6\)\]:hover::before{
            content: var(--tw-content);
            --tw-shadow: 0px 0px 0px 13px rgba(0,0,0,0.6);
            --tw-shadow-colored: 0px 0px 0px 13px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:z-\[3\]:focus{
            z-index: 3;
        }

        .focus\:border-neutral-100:focus{
            --tw-border-opacity: 1;
            border-color: rgb(245 245 245 / var(--tw-border-opacity));
        }

        .focus\:bg-neutral-200:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(229 229 229 / var(--tw-bg-opacity));
        }

        .focus\:bg-red-600:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(220 38 38 / var(--tw-bg-opacity));
        }

        .focus\:bg-slate-50:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(248 250 252 / var(--tw-bg-opacity));
        }

        .focus\:bg-yellow-600:focus{
            --tw-bg-opacity: 1;
            background-color: rgb(202 138 4 / var(--tw-bg-opacity));
        }

        .focus\:text-blue-200:focus{
            --tw-text-opacity: 1;
            color: rgb(191 219 254 / var(--tw-text-opacity));
        }

        .focus\:text-inherit:focus{
            color: inherit;
        }

        .focus\:text-neutral-100:focus{
            --tw-text-opacity: 1;
            color: rgb(245 245 245 / var(--tw-text-opacity));
        }

        .focus\:text-neutral-700:focus{
            --tw-text-opacity: 1;
            color: rgb(64 64 64 / var(--tw-text-opacity));
        }

        .focus\:no-underline:focus{
            text-decoration-line: none;
        }

        .focus\:opacity-100:focus{
            opacity: 1;
        }

        .focus\:shadow-\[0_8px_9px_-4px_rgba\(59\2c 113\2c 202\2c 0\.3\)\2c 0_4px_18px_0_rgba\(59\2c 113\2c 202\2c 0\.2\)\]:focus{
            --tw-shadow: 0 8px 9px -4px rgba(59,113,202,0.3),0 4px 18px 0 rgba(59,113,202,0.2);
            --tw-shadow-colored: 0 8px 9px -4px var(--tw-shadow-color), 0 4px 18px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:shadow-\[inset_0_0_0_1px_rgb\(59\2c 113\2c 202\)\]:focus{
            --tw-shadow: inset 0 0 0 1px rgb(59,113,202);
            --tw-shadow-colored: inset 0 0 0 1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:shadow-lg:focus{
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:shadow-none:focus{
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:outline-none:focus{
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .focus\:ring-0:focus{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(0px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .focus\:transition-\[border-color_0\.2s\]:focus{
            transition-property: border-color 0.2s;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .focus\:placeholder\:opacity-100:focus::-moz-placeholder{
            opacity: 1;
        }

        .focus\:placeholder\:opacity-100:focus::placeholder{
            opacity: 1;
        }

        .focus\:before\:scale-100:focus::before{
            content: var(--tw-content);
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .focus\:before\:opacity-\[0\.12\]:focus::before{
            content: var(--tw-content);
            opacity: 0.12;
        }

        .focus\:before\:shadow-\[0px_0px_0px_13px_rgba\(0\2c 0\2c 0\2c 0\.6\)\]:focus::before{
            content: var(--tw-content);
            --tw-shadow: 0px 0px 0px 13px rgba(0,0,0,0.6);
            --tw-shadow-colored: 0px 0px 0px 13px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .focus\:before\:transition-\[box-shadow_0\.2s\2c transform_0\.2s\]:focus::before{
            content: var(--tw-content);
            transition-property: box-shadow 0.2s,transform 0.2s;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .focus\:after\:absolute:focus::after{
            content: var(--tw-content);
            position: absolute;
        }

        .focus\:after\:z-\[1\]:focus::after{
            content: var(--tw-content);
            z-index: 1;
        }

        .focus\:after\:block:focus::after{
            content: var(--tw-content);
            display: block;
        }

        .focus\:after\:h-\[0\.875rem\]:focus::after{
            content: var(--tw-content);
            height: 0.875rem;
        }

        .focus\:after\:w-\[0\.875rem\]:focus::after{
            content: var(--tw-content);
            width: 0.875rem;
        }

        .focus\:after\:rounded-\[0\.125rem\]:focus::after{
            content: var(--tw-content);
            border-radius: 0.125rem;
        }

        .focus\:after\:content-\[\'\'\]:focus::after{
            --tw-content: '';
            content: var(--tw-content);
        }

        .checked\:focus\:before\:scale-100:focus:checked::before{
            content: var(--tw-content);
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .checked\:focus\:before\:shadow-\[0px_0px_0px_13px_\#3b71ca\]:focus:checked::before{
            content: var(--tw-content);
            --tw-shadow: 0px 0px 0px 13px #3b71ca;
            --tw-shadow-colored: 0px 0px 0px 13px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .checked\:focus\:before\:transition-\[box-shadow_0\.2s\2c transform_0\.2s\]:focus:checked::before{
            content: var(--tw-content);
            transition-property: box-shadow 0.2s,transform 0.2s;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .checked\:focus\:after\:-mt-px:focus:checked::after{
            content: var(--tw-content);
            margin-top: -1px;
        }

        .checked\:focus\:after\:ml-\[0\.25rem\]:focus:checked::after{
            content: var(--tw-content);
            margin-left: 0.25rem;
        }

        .checked\:focus\:after\:h-\[0\.8125rem\]:focus:checked::after{
            content: var(--tw-content);
            height: 0.8125rem;
        }

        .checked\:focus\:after\:w-\[0\.375rem\]:focus:checked::after{
            content: var(--tw-content);
            width: 0.375rem;
        }

        .checked\:focus\:after\:rotate-45:focus:checked::after{
            content: var(--tw-content);
            --tw-rotate: 45deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .checked\:focus\:after\:rounded-none:focus:checked::after{
            content: var(--tw-content);
            border-radius: 0px;
        }

        .checked\:focus\:after\:border-\[0\.125rem\]:focus:checked::after{
            content: var(--tw-content);
            border-width: 0.125rem;
        }

        .checked\:focus\:after\:border-l-0:focus:checked::after{
            content: var(--tw-content);
            border-left-width: 0px;
        }

        .checked\:focus\:after\:border-t-0:focus:checked::after{
            content: var(--tw-content);
            border-top-width: 0px;
        }

        .checked\:focus\:after\:border-solid:focus:checked::after{
            content: var(--tw-content);
            border-style: solid;
        }

        .checked\:focus\:after\:border-white:focus:checked::after{
            content: var(--tw-content);
            --tw-border-opacity: 1;
            border-color: rgb(255 255 255 / var(--tw-border-opacity));
        }

        .checked\:focus\:after\:bg-transparent:focus:checked::after{
            content: var(--tw-content);
            background-color: transparent;
        }

        .active\:border-neutral-200:active{
            --tw-border-opacity: 1;
            border-color: rgb(229 229 229 / var(--tw-border-opacity));
        }

        .active\:bg-blue-900:active{
            --tw-bg-opacity: 1;
            background-color: rgb(30 58 138 / var(--tw-bg-opacity));
        }

        .active\:bg-neutral-200:active{
            --tw-bg-opacity: 1;
            background-color: rgb(229 229 229 / var(--tw-bg-opacity));
        }

        .active\:bg-red-600:active{
            --tw-bg-opacity: 1;
            background-color: rgb(220 38 38 / var(--tw-bg-opacity));
        }

        .active\:bg-slate-50:active{
            --tw-bg-opacity: 1;
            background-color: rgb(248 250 252 / var(--tw-bg-opacity));
        }

        .active\:bg-yellow-600:active{
            --tw-bg-opacity: 1;
            background-color: rgb(202 138 4 / var(--tw-bg-opacity));
        }

        .active\:text-inherit:active{
            color: inherit;
        }

        .active\:text-neutral-200:active{
            --tw-text-opacity: 1;
            color: rgb(229 229 229 / var(--tw-text-opacity));
        }

        .active\:text-neutral-800:active{
            --tw-text-opacity: 1;
            color: rgb(38 38 38 / var(--tw-text-opacity));
        }

        .active\:no-underline:active{
            text-decoration-line: none;
        }

        .active\:shadow-\[0_8px_9px_-4px_rgba\(59\2c 113\2c 202\2c 0\.3\)\2c 0_4px_18px_0_rgba\(59\2c 113\2c 202\2c 0\.2\)\]:active{
            --tw-shadow: 0 8px 9px -4px rgba(59,113,202,0.3),0 4px 18px 0 rgba(59,113,202,0.2);
            --tw-shadow-colored: 0 8px 9px -4px var(--tw-shadow-color), 0 4px 18px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .active\:outline-none:active{
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .disabled\:pointer-events-none:disabled{
            pointer-events: none;
        }

        .disabled\:bg-transparent:disabled{
            background-color: transparent;
        }

        .disabled\:text-neutral-400:disabled{
            --tw-text-opacity: 1;
            color: rgb(163 163 163 / var(--tw-text-opacity));
        }

        .group[data-te-collapse-collapsed] .group-\[\[data-te-collapse-collapsed\]\]\:mr-0{
            margin-right: 0px;
        }

        .group[data-te-collapse-collapsed] .group-\[\[data-te-collapse-collapsed\]\]\:rotate-0{
            --tw-rotate: 0deg;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .group[data-te-collapse-collapsed] .group-\[\[data-te-collapse-collapsed\]\]\:fill-\[\#212529\]{
            fill: #212529;
        }

        .peer:focus ~ .peer-focus\:-translate-y-\[0\.9rem\]{
            --tw-translate-y: -0.9rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .peer:focus ~ .peer-focus\:-translate-y-\[1\.15rem\]{
            --tw-translate-y: -1.15rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .peer:focus ~ .peer-focus\:scale-\[0\.8\]{
            --tw-scale-x: 0.8;
            --tw-scale-y: 0.8;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .peer:focus ~ .peer-focus\:text-neutral-200{
            --tw-text-opacity: 1;
            color: rgb(229 229 229 / var(--tw-text-opacity));
        }

        .data-\[te-sidenav-hidden\=\'false\'\]\:translate-x-0[data-te-sidenav-hidden='false']{
            --tw-translate-x: 0px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .data-\[te-sidenav-state-active\]\:text-inherit[data-te-sidenav-state-active]{
            color: inherit;
        }

        .data-\[te-sidenav-state-focus\]\:outline-none[data-te-sidenav-state-focus]{
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        .data-\[te-input-state-active\]\:placeholder\:opacity-100[data-te-input-state-active]::-moz-placeholder{
            opacity: 1;
        }

        .data-\[te-input-state-active\]\:placeholder\:opacity-100[data-te-input-state-active]::placeholder{
            opacity: 1;
        }

        .peer[data-te-input-state-active] ~ .peer-data-\[te-input-state-active\]\:-translate-y-\[0\.9rem\]{
            --tw-translate-y: -0.9rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .peer[data-te-input-state-active] ~ .peer-data-\[te-input-state-active\]\:-translate-y-\[1\.15rem\]{
            --tw-translate-y: -1.15rem;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .peer[data-te-input-state-active] ~ .peer-data-\[te-input-state-active\]\:scale-\[0\.8\]{
            --tw-scale-x: 0.8;
            --tw-scale-y: 0.8;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        @media (prefers-reduced-motion: reduce){

            .motion-reduce\:transition-none{
                transition-property: none;
            }
        }

        @media (min-width: 576px){

            .min-\[576px\]\:mx-auto{
                margin-left: auto;
                margin-right: auto;
            }

            .min-\[576px\]\:mt-7{
                margin-top: 1.75rem;
            }

            .min-\[576px\]\:max-w-\[500px\]{
                max-width: 500px;
            }
        }

        @media (min-width: 640px){

            .sm\:-mx-6{
                margin-left: -1.5rem;
                margin-right: -1.5rem;
            }

            .sm\:px-6{
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
        }

        @media (min-width: 768px){

            .md\:mb-0{
                margin-bottom: 0px;
            }

            .md\:mb-6{
                margin-bottom: 1.5rem;
            }

            .md\:ml-auto{
                margin-left: auto;
            }

            .md\:mr-auto{
                margin-right: auto;
            }

            .md\:w-8\/12{
                width: 66.666667%;
            }

            .md\:w-9\/12{
                width: 75%;
            }

            .md\:shrink-0{
                flex-shrink: 0;
            }

            .md\:grid-cols-3{
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px){

            .lg\:-mx-8{
                margin-left: -2rem;
                margin-right: -2rem;
            }

            .lg\:mx-24{
                margin-left: 6rem;
                margin-right: 6rem;
            }

            .lg\:mb-0{
                margin-bottom: 0px;
            }

            .lg\:mt-0{
                margin-top: 0px;
            }

            .lg\:mt-1{
                margin-top: 0.25rem;
            }

            .lg\:block{
                display: block;
            }

            .lg\:\!flex{
                display: flex !important;
            }

            .lg\:hidden{
                display: none;
            }

            .lg\:w-1\/2{
                width: 50%;
            }

            .lg\:w-1\/3{
                width: 33.333333%;
            }

            .lg\:w-1\/4{
                width: 25%;
            }

            .lg\:w-2\/3{
                width: 66.666667%;
            }

            .lg\:w-3\/4{
                width: 75%;
            }

            .lg\:w-5\/12{
                width: 41.666667%;
            }

            .lg\:w-6\/12{
                width: 50%;
            }

            .lg\:w-72{
                width: 18rem;
            }

            .lg\:w-80{
                width: 20rem;
            }

            .lg\:w-96{
                width: 24rem;
            }

            .lg\:basis-auto{
                flex-basis: auto;
            }

            .lg\:flex-row{
                flex-direction: row;
            }

            .lg\:flex-wrap{
                flex-wrap: wrap;
            }

            .lg\:items-end{
                align-items: flex-end;
            }

            .lg\:items-center{
                align-items: center;
            }

            .lg\:justify-start{
                justify-content: flex-start;
            }

            .lg\:justify-between{
                justify-content: space-between;
            }

            .lg\:px-0{
                padding-left: 0px;
                padding-right: 0px;
            }

            .lg\:px-2{
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .lg\:px-24{
                padding-left: 6rem;
                padding-right: 6rem;
            }

            .lg\:px-36{
                padding-left: 9rem;
                padding-right: 9rem;
            }

            .lg\:px-40{
                padding-left: 10rem;
                padding-right: 10rem;
            }

            .lg\:px-8{
                padding-left: 2rem;
                padding-right: 2rem;
            }

            .lg\:px-80{
                padding-left: 20rem;
                padding-right: 20rem;
            }

            .lg\:py-4{
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            .lg\:pl-0{
                padding-left: 0px;
            }

            .lg\:pr-1{
                padding-right: 0.25rem;
            }

            .lg\:text-left{
                text-align: left;
            }
        }

        @media (min-width: 1280px){

            .xl\:w-5\/12{
                width: 41.666667%;
            }

            .xl\:w-6\/12{
                width: 50%;
            }
        }

        :is(:where(.dark) .dark\:border-neutral-500){
            --tw-border-opacity: 1;
            border-color: rgb(115 115 115 / var(--tw-border-opacity));
        }

        :is(:where(.dark) .dark\:border-neutral-600){
            --tw-border-opacity: 1;
            border-color: rgb(82 82 82 / var(--tw-border-opacity));
        }

        :is(:where(.dark) .dark\:border-opacity-50){
            --tw-border-opacity: 0.5;
        }

        :is(:where(.dark) .dark\:bg-neutral-600){
            --tw-bg-opacity: 1;
            background-color: rgb(82 82 82 / var(--tw-bg-opacity));
        }

        :is(:where(.dark) .dark\:bg-neutral-800){
            --tw-bg-opacity: 1;
            background-color: rgb(38 38 38 / var(--tw-bg-opacity));
        }

        :is(:where(.dark) .dark\:bg-zinc-800){
            --tw-bg-opacity: 1;
            background-color: rgb(39 39 42 / var(--tw-bg-opacity));
        }

        :is(:where(.dark) .dark\:fill-blue-300){
            fill: #93c5fd;
        }

        :is(:where(.dark) .dark\:text-neutral-200){
            --tw-text-opacity: 1;
            color: rgb(229 229 229 / var(--tw-text-opacity));
        }

        :is(:where(.dark) .dark\:text-white){
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        :is(:where(.dark) .dark\:shadow-\[0_4px_9px_-4px_rgba\(59\2c 113\2c 202\2c 0\.5\)\]){
            --tw-shadow: 0 4px 9px -4px rgba(59,113,202,0.5);
            --tw-shadow-colored: 0 4px 9px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        :is(:where(.dark) .dark\:placeholder\:text-neutral-200)::-moz-placeholder{
            --tw-text-opacity: 1;
            color: rgb(229 229 229 / var(--tw-text-opacity));
        }

        :is(:where(.dark) .dark\:placeholder\:text-neutral-200)::placeholder{
            --tw-text-opacity: 1;
            color: rgb(229 229 229 / var(--tw-text-opacity));
        }

        :is(:where(.dark) .dark\:hover\:bg-neutral-100:hover){
            --tw-bg-opacity: 1;
            background-color: rgb(245 245 245 / var(--tw-bg-opacity));
        }

        :is(:where(.dark) .dark\:hover\:bg-neutral-600:hover){
            --tw-bg-opacity: 1;
            background-color: rgb(82 82 82 / var(--tw-bg-opacity));
        }

        :is(:where(.dark) .dark\:hover\:bg-opacity-10:hover){
            --tw-bg-opacity: 0.1;
        }

        :is(:where(.dark) .dark\:hover\:shadow-\[0_8px_9px_-4px_rgba\(59\2c 113\2c 202\2c 0\.2\)\2c 0_4px_18px_0_rgba\(59\2c 113\2c 202\2c 0\.1\)\]:hover){
            --tw-shadow: 0 8px 9px -4px rgba(59,113,202,0.2),0 4px 18px 0 rgba(59,113,202,0.1);
            --tw-shadow-colored: 0 8px 9px -4px var(--tw-shadow-color), 0 4px 18px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        :is(:where(.dark) .dark\:focus\:shadow-\[0_8px_9px_-4px_rgba\(59\2c 113\2c 202\2c 0\.2\)\2c 0_4px_18px_0_rgba\(59\2c 113\2c 202\2c 0\.1\)\]:focus){
            --tw-shadow: 0 8px 9px -4px rgba(59,113,202,0.2),0 4px 18px 0 rgba(59,113,202,0.1);
            --tw-shadow-colored: 0 8px 9px -4px var(--tw-shadow-color), 0 4px 18px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        :is(:where(.dark) .dark\:focus\:before\:shadow-\[0px_0px_0px_13px_rgba\(255\2c 255\2c 255\2c 0\.4\)\]:focus)::before{
            content: var(--tw-content);
            --tw-shadow: 0px 0px 0px 13px rgba(255,255,255,0.4);
            --tw-shadow-colored: 0px 0px 0px 13px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        :is(:where(.dark) .dark\:checked\:focus\:before\:shadow-\[0px_0px_0px_13px_\#3b71ca\]:focus:checked)::before{
            content: var(--tw-content);
            --tw-shadow: 0px 0px 0px 13px #3b71ca;
            --tw-shadow-colored: 0px 0px 0px 13px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        :is(:where(.dark) .dark\:active\:shadow-\[0_8px_9px_-4px_rgba\(59\2c 113\2c 202\2c 0\.2\)\2c 0_4px_18px_0_rgba\(59\2c 113\2c 202\2c 0\.1\)\]:active){
            --tw-shadow: 0 8px 9px -4px rgba(59,113,202,0.2),0 4px 18px 0 rgba(59,113,202,0.1);
            --tw-shadow-colored: 0 8px 9px -4px var(--tw-shadow-color), 0 4px 18px 0 var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        :is(:where(.dark) .group[data-te-collapse-collapsed] .dark\:group-\[\[data-te-collapse-collapsed\]\]\:fill-white){
            fill: #fff;
        }

        :is(:where(.dark) .peer:focus ~ .dark\:peer-focus\:text-neutral-200){
            --tw-text-opacity: 1;
            color: rgb(229 229 229 / var(--tw-text-opacity));
        }

        .\[\&\.active\]\:text-black\/90.active{
            color: rgb(0 0 0 / 0.9);
        }

        .\[\&\:not\(\[data-te-collapse-collapsed\]\)\]\:bg-white:not([data-te-collapse-collapsed]){
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .\[\&\:not\(\[data-te-collapse-collapsed\]\)\]\:\[box-shadow\:inset_0_-1px_0_rgba\(229\2c 231\2c 235\)\]:not([data-te-collapse-collapsed]){
            box-shadow: inset 0 -1px 0 rgba(229,231,235);
        }

        :is(:where(.dark) .dark\:\[\&\:not\(\[data-te-collapse-collapsed\]\)\]\:bg-neutral-800:not([data-te-collapse-collapsed])){
            --tw-bg-opacity: 1;
            background-color: rgb(38 38 38 / var(--tw-bg-opacity));
        }

        :is(:where(.dark) .dark\:\[\&\:not\(\[data-te-collapse-collapsed\]\)\]\:\[box-shadow\:inset_0_-1px_0_rgba\(75\2c 85\2c 99\)\]:not([data-te-collapse-collapsed])){
            box-shadow: inset 0 -1px 0 rgba(75,85,99);
        }

        .\[\&\:not\(\[data-te-input-placeholder-active\]\)\]\:placeholder\:opacity-0:not([data-te-input-placeholder-active])::-moz-placeholder{
            opacity: 0;
        }

        .\[\&\:not\(\[data-te-input-placeholder-active\]\)\]\:placeholder\:opacity-0:not([data-te-input-placeholder-active])::placeholder{
            opacity: 0;
        }

        .\[\&\>svg\]\:h-5>svg{
            height: 1.25rem;
        }

        .\[\&\>svg\]\:w-5>svg{
            width: 1.25rem;
        }

        .\[\&\>svg\]\:w-7>svg{
            width: 1.75rem;
        }

        .\[\&\>svg\]\:text-neutral-700>svg{
            --tw-text-opacity: 1;
            color: rgb(64 64 64 / var(--tw-text-opacity));
        }

        .\[\&\[data-te-collapse-collapsed\]\]\:rounded-b-\[15px\][data-te-collapse-collapsed]{
            border-bottom-right-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        .\[\&\[data-te-collapse-collapsed\]\]\:transition-none[data-te-collapse-collapsed]{
            transition-property: none;
        }

        .\[\&\[data-te-dropdown-show\]\]\:block[data-te-dropdown-show]{
            display: block;
        }
    </style>
    <!-- Basic CSS Asset -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="{{asset("css/iziToast.min.css")}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/css/iziToast.min.css">

</head>
<body>
    <main class="lg:px-24 py-28">
        <section id="bookShow" class="py-10 px-5">
            <h1 class="text-3xl text-neutral-700 font-bold">{{$book->book_title}}</h1>
            <div class="flex flex-wrap items-start mt-5">
                <div class="lg:w-1/3 p-5">
                    <img
                        src="{{asset("storage/" . $book->book_image_cover)}}"
                        class="mx-auto mb-4 w-64 rounded-lg"
                        alt="Book Cover" />
                </div>
                <div class="lg:w-2/3">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-md font-normal">
                                        <tbody>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Title</td>
                                            <td class="text-wrap px-6 py-4">{{$book->book_title}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Uploaded By</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->user->name}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Available Stock</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->book_available_stock}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Category</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{$book->book_category->category_name}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Description</td>
                                            <td class="px-6 py-4 text-wrap">{{$book->book_description}}</td>
                                        </tr>
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 font-bold">Download</td>
                                            <td class="px-6 py-4 text-wrap"><a href="{{asset("storage/" . $book->book_file)}}" class="text-blue-500"><i class="fa-regular fa-file-pdf"></i> Click here.</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Preview Section -->
        <section id="preview" class="w-full mt-5">
            <div class="py-5 flex flex-row gap-4 justify-start items-center">
                <iframe src="{{asset("storage/" . $book->book_file)}}" width="100%" height="900px" frameborder="0"></iframe>
            </div>
        </section>
    </main>

    <!-- TW Elements -->
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <!-- Fontawesome icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js"></script>
</body>
</html>

