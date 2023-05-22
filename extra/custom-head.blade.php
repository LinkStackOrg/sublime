{{-- 


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:



--}}

<style> 
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-400-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-400-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-400-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-400-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-400-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-400-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-400-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 400;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-400-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-400-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}
/* cyrillic */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-cyrillic-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-700-normal.woff')}}'); 
  unicode-range: U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;
}
/* cyrillic-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap;
  src: url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-cyrillic-ext-700-normal.woff')}}'); 
  unicode-range: U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;
}
/* greek */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-700-normal.woff')}}'); 
  unicode-range: U+0370-03FF;
}
/* greek-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-greek-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-greek-ext-700-normal.woff')}}'); 
  unicode-range: U+1F00-1FFF;
}
/* latin */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-700-normal.woff')}}'); 
  unicode-range: U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;
}
/* latin-ext */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-latin-ext-700-normal.woff2')}}'), url('{{themeAsset('roboto-latin-ext-700-normal.woff')}}'); 
  unicode-range: U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;
}
/* vietnamese */
@font-face { font-family: 'Roboto'; font-style: normal; font-weight: 700;
  font-display: swap; src: url('{{themeAsset('roboto-vietnamese-700-normal.woff2')}}'), url('{{themeAsset('roboto-vietnamese-700-normal.woff')}}'); 
  unicode-range: U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB;
}
</style>