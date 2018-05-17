#### Dev toolkit

## [Node.js](https://nodejs.org/en/) / npm


_npm is distributed with Node.js- which means that when you download Node.js, you automatically get npm installed on your computer._



## Autoprefixer
[Autoprefixer](https://github.com/postcss/autoprefixer) is the PostCSS plugin to parse CSS and add vendor prefixes to CSS rules using values from Can I Use. 

### Usage:

~~autoprefixer-cli css/style.css~~ [autoprefixer-cli](https://www.npmjs.com/package/autoprefixer-cli) seems out-of-date or deprecated

~~autoprefixer-cli -h~~
```
npx postcss --use autoprefixer -r --no-map our-work/css/style.css

```

## CSScomb
[CSScomb](http://csscomb.com) — sorting properties in a specific order that can be [configurated](https://github.com/csscomb/csscomb.js/blob/dev/doc/options.md#sort-order-fallback)


[.csscomb.json](https://github.com/maxdmitriev/hello-world/blob/master/_.csscomb.json) – configuration file, to be placed into: 
```
/Users/username/.csscomb.json
```

### Usage:
```
csscomb css/style.css
```



