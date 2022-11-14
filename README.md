# Like

Like is a simple addon for Statamic that allows you to add a like button to your content that tracks how many likes the content or post has.

> You'll be surprised how much this little feature can increase engagement on your site.

## Installation

1. Install the addon using Composer:

    ```bash
    composer require thibaultferaux/statamic-like
    ```

## Usage

### Displaying the like button

It's simple! Just add this to your site's layout:

```antlers
{{ like }}
```

## Customising

### Customising the like button

You can customise the like button by publishing the config file:

```bash
php please vendor:publish --tag=like-config
```
