# RELEASES

This document lists the various releases with details on each.

It is a more verbose version of the [Releases](https://github.com/Swader/slim3skel/releases) page.

## Version 1

Basic skeleton based on Rob Allen's. Differences from original include:

- asset pipeline (auto watch for changes, auto rebuild JS/CSS) powered by [BowerPHP](http://www.sitepoint.com/bower-vs-bowerphp/), [mini-asset](https://github.com/markstory/mini-asset/) and [Robo](http://robo.li). This was done in order to completely avoid any and all contact with NodeJS, NPM and their ilk.
- [phpdotenv](https://github.com/vlucas/phpdotenv) for config values
- added IndexController and more sample routes
- added dependency on [league/oauth2-client](https://github.com/thephpleague/oauth2-client) and GITHUB key values into settings as a demonstration. Implementation not done, so remove dependency if not needed.
- assets: bootstrap, bootstrap-social, jquery, modernizr, font-awesome, all for demo of the assets pipeline (tutorial coming soon on [SitePoint](http://sitepoint.com)).
- different folder structure (moved assets into root folder, removed non-build stuff from /public), etc.

To smoothly use this one, you should have BowerPHP, Mini-Asset and Robo installed globally with Composer (recommended, so you can rid yourself of the unstable plague that is NPM and its packages). You can also install them locally (in the project itself) but then you need to modify the `RoboFile` to execute from `vendor/bin/mini_asset` rather than just `mini_asset`.

