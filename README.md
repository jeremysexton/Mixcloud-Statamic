Mixcloud-Statamic
=================

A simple Statamic plugin to embed Mixcloud mixes.

This is my first Statamic plugin and I have no idea what I'm doing, so use at your own peril.

##Installing

1. Create a folder in your "_add-ons" folder named "mixcloud".
2. Copy "pi.mixcloud.php" into that folder.
3. ???
4. Profit

##Usage

The plugin is called with {{ mixcloud }}

The following parameters are all required:

* url
* width
* height

##Example

	{{ mixcloud url="http://www.mixcloud.com/TwistedPanda/summer-cruisin-mix/" width="100%" height="400" }}