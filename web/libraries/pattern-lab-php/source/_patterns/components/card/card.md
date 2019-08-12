This component requires a nested button component. Pattern Lab, and most other libraries have their own supported syntax for nesting. It looks something like this:

```twig
{% if button.text and button.url %}
  {% include 'button' with { text: button.text, url: button.url } %}
{% endif %}
```

Drupal will not be able to use this. Using the [Twig Namespaces Plugin for Pattern Lab](https://github.com/EvanLovely/plugin-twig-namespaces), configured to use a namespace that matches Twig  namespaces defined in Drupal with Components module is required. Instead of the above, you'd have:

```twig
{% if button.text and button.url %}
  {% include '@components/button/button.twig' with { text: button.text, url: button.url } %}
{% endif %}
```
