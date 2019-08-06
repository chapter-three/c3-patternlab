# C3 Pattern Lab

[Pattern Lab](https://patternlab.io) is a design system tool, like Pattern Lab. This site exists to demonstrate a [Pattern Lab](https://patternlab.io) pattern library, used within Drupal, using the [UI Patterns](https://drupal.org/project/ui_patterns) suite of modules.

## Information


_* The Github repo is a mirror (meant for easily browsing the codebase). It's only updated if the user pushing code has configured additional push URLs [according to these instructions](https://github.com/chapter-three/wiki/blob/master/Chapter%20Three/Developers/GIT.md#push-to-multiple-remotes-by-default)._

| Name | URL  |
| :--- | :--- |
| Dashboard | https://dashboard.pantheon.io/sites/84d05b36-19ed-4b9c-8986-9c0f2569b40f |
| Site | https://dev-c3-patternlab.pantheonsite.io |
| Codebase | `ssh://codeserver.dev.84d05b36-19ed-4b9c-8986-9c0f2569b40f@codeserver.dev.84d05b36-19ed-4b9c-8986-9c0f2569b40f.drush.in:2222/~/repository.git` |
| Github* | https://github.com/chapter-three/c3-patternlab |
| <nobr>Pattern Lab Demo<nobr> | https://dev-c3-patternlab.pantheonsite.io/libraries/pattern-lab/public/index.html |
| UI Patterns Listing | https://dev-c3-patternlab.pantheonsite.io/patterns

### Notes

- The Pattern Lab library is located in `web/libraries/pattern-lab`. There are currently 3 patterns:
  - Blockquote
  - Button
  - Card
- There is a very basic Drupal theme at `web/themes/custom/patternlab`. It has minimal CSS, and no build scripts. It currently defines only one Pattern & template (which passes through to the Pattern Lab template): Blockquote.
- The rest of the components are parsed directly from the Pattern Lab instance by `ui_patterns_pattern_lab`.
- Patterns are configured in Drupal, in a few places:
  1. https://dev-c3-patternlab.pantheonsite.io/hello - This is a landing node, that has a few Paragraphs configured:
      - Blockquote paragraph (default display)
      - Card paragraph (default display)
      - Button link paragraph (default display)
  2. https://dev-c3-patternlab.pantheonsite.io/faq - This is a View, configured to use the UI Patterns row display, along with Views fields that are mapped to the Card pattern.
  3. https://dev-c3-patternlab.pantheonsite.io/blog - This is a View, configured to render "teaser" entity display for article content type. The "Teaser" view mode is configured to use the "Card" pattern.
- There is a custom module `fieldz_formatterz` that currently adds some extra fields to handle the 1:1 mapping that UI Patterns needs on entity displays.

## Local Setup

1. Install dependencies:

```sh
cd web/libraries/pattern-lab
npm install
```

2. Start server:

    _Note:  If you get an error when running `npm start`, try installing the cli tool globally: `npm install -g npx`_

```sh
npm start
```

3. Rebuild static style guide instance:

  ```sh
npm run build
```
