# Simple News - A sample extension for Extbase with TYPO3 v9+ Site Routing

This is a demo extension, which adds a simple News object and a plugin,
that is built to show-case the `slug` field in custom records.

This extension was created to demo the removal of the cHash parameter
when using Route Enhancers and Aspects in the Site Configuration.

Using the following configuration in the Site Configuration enables
speaking URLs for detail pages of simple news without having a cHash
in the URL.

```
routeEnhancers:
  MyNews:
    type: Extbase
    limitToPages: [13,14,15]
    extension: simplenews
    plugin: list
    routes:
      - { _controller: 'Main::list', routePath: '' }
      - { _controller: 'Main::detail', routePath: '/{news}' }
    aspects:
      news:
        type: PersistedAliasMapper
        tableName: 'tx_simplenews_domain_model_news'
        routeFieldName: 'slug'
```

See further information on https://b13.com/blog 

## Installation

This is a demo extension and not suited for production use. you can still download the repo and put all files under `typo3conf/ext/simplenews`, and install this extension via the Extension Manager. It actually works...

## License

The extension is licensed under GPL v2+, same as the TYPO3 Core. For details see the LICENSE file in this repository.

## Open Issues

If you find an issue, feel free to create an issue on GitHub or a pull request.

## Credits

This extension was created by [Benni Mack](https://github.com/bmack) in 2020 for [b13 GmbH](https://b13.com).

[Find more TYPO3 extensions we have developed](https://b13.com/useful-typo3-extensions-from-b13-to-you) that help us deliver value in client projects. As part of the way we work, we focus on testing and best practices to ensure long-term performance, reliability, and results in all our code.