# Slim 3 Skeleton

This Slim 3 Skeleton is based on [Rob Allen's](https://github.com/akrabat/slim3-skeleton).

## Changes include:

- asset pipeline (auto watch for changes, auto rebuild JS/CSS) powered by [BowerPHP](http://www.sitepoint.com/bower-vs-bowerphp/), [mini-asset](https://github.com/markstory/mini-asset/) and [Robo](http://robo.li). This was done in order to completely avoid any and all contact with NodeJS, NPM and their ilk.
- [phpdotenv](https://github.com/vlucas/phpdotenv) for config values
- added IndexController and more sample routes
- added dependency on [league/oauth2-client](https://github.com/thephpleague/oauth2-client) and GITHUB key values into settings as a demonstration. Implementation not done, so remove dependency if not needed.
- assets: bootstrap, bootstrap-social, jquery, modernizr, font-awesome, all for demo of the assets pipeline (tutorial coming soon on [SitePoint](http://sitepoint.com)).
- different folder structure (moved assets into root folder, removed non-build stuff from /public), etc.

## Prerequisites

- global Composer installation of [BowerPHP](http://www.sitepoint.com/bower-vs-bowerphp/), [mini-asset](https://github.com/markstory/mini-asset/) and [Robo](http://robo.li).


## Releases

This is an evolving project. Releases will hold its state in various stages. See [RELEASES](RELEASES.md).

## Contributions

Tips, advice and PRs welcome.
