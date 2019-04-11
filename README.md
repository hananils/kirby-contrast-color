# Contrast Color for Kirby 3

This plugin for [Kirby](https://getkirby.com) automatically chooses the most contrasty color from a given list by comparing colors with a reference field. This can be useful, if you'd like to specify per page background colors and would like to adjust the text colors accordingly.

The field displays the color contrast ratings `AA`, `AALarge`, `AAA` and `AAALarge` according to [WCAG accessibility guidelines](https://www.w3.org/TR/WCAG20/#visual-audio-contrast). The field prevents the storage of colors with lower contrast ratios.

## Installation

### Download

Download and copy this repository to `/site/plugins/contrast-color`.

### Git submodule

```
git submodule add https://github.com/hananils/kirby-contrast-color.git site/plugins/contrast-color
```

### Composer

```
composer require hananils/contrastcolor
```

## Setup

# Options

The field offers two blueprint options:

-   `reference`: the name of the field providing the reference color
-   `colors`: a list of colors to choose the most contrasty from, defaults to `#000` and `#fff`.

```yaml
textcolor:
    type: contrast-color
    label: text color
    reference: color
    colors:
        - '#000'
        - '#fff'
```

## License

MIT

## Acknowledgement

This plugin started as an experiment. Many thanks to [Nico Hoffmann](https://github.com/distantnative/) for guiding us through the Kirby UI framework.
The contrast rating is handled by [TinyColor](https://github.com/bgrins/TinyColor).
