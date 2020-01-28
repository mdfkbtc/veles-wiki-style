# Veles Core MediaWiki Skin

Veles Core Wiki template based on Minimal MediaWiki Bootstrap 4 Skin. 

## Development setup
* Get MediaWiki up and running (for example using [Docker](https://hub.docker.com/_/mediawiki))
* Enter to skins directory in your MediaWiki installation:
	* `cd <your_host_path>/skins` 
* Checkout the repo in `<your_host_path>/Veles`
* Add ```
wfLoadSkin( 'Veles' ); 
$wgDefaultSkin = "veles";
``` to `<your_host_path>/LocalSettigs.php`

Feel free to share a patch or create a Pull Request!
