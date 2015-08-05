# https://pujol.io source code

The source code of my website [pujol.io](https://pujol.io).

## Installation
This is a static website. Therefore there is no installation needed.

## Design
Thank [HTML5UP](http://html5up.net) for the main design.

## License
The website is under the [The Creative Commons Attribution 3.0 License](https://creativecommons.org/licenses/by/3.0/).
Which means you can:
* Use them for personal stuff
* Use them for commercial stuff
* Change them however you like

But you **MUST** give me and HTML5UP credit.

## Slideshow Background
This is pretty straightforward, but there are two JS settings you'll want to be
aware of (found under "Slideshow Background" in `assets/js/main.js`):

### Images
The list of images to cycle through, given in the following format:
```js
'url': 'alignment'
```
Where `'url'` is the image (eg. `'images/foo.jpg'`, `'http://somewhere.else/foo.jpg'`),
and `'alignment'` is how the image should be vertically aligned (`'top'`, `'center'`, or `'bottom'`).
**Note:** Browsers that don't support CSS transitions (like IE<=9) will only see the first image.

### Delay
How long to wait between transitions (in ms). Note that this must be at least
twice as long as the transition speed itself (currently 3 seconds).

