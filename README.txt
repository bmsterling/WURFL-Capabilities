=== WURFL Capabilities ===
Contributors: bmsterling 
Donate link:http://benjaminsterling.com/donations/
Tags: wurfl, mobile, capabilites, theme
Requires at least: 3.5
Tested up to: 3.5.1
Stable tag: 0.3.3
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Using WURFL to expose capabilities of your users browser.  **FTP access is needed to upload the wurfl database**

== Description ==

Using WURFL to expose capabilities of your users browser. See <http://wurfl.sourceforge.net/help_doc.php> for full list of capability checking. **FTP access is needed to upload the wurfl database**

Some initial methods that are exposed are:

*   is\_wireless\_device
*   is_tablet
*   is_touch
*   supports_borderradius
*   supports_gradients
*   pointing_method
*   getCapability (points to the WURFL API method of the same name, pass in the param of capability you\'d like to get.  See the help doc link for those param names)


<strong>Example usage:</strong> `$wurflcap->is_touch();`


If something fails, please provide step by step instructions on how to reproduce so that I may address the issue in a timely manner.


Please be aware of the licensing at <a href=\"http://wurfl.sourceforge.net/license.php\" target=\"_blank\">http://wurfl.sourceforge.net/license.php</a>

*WURFL is the registered trademark of ScientiaMobile, Inc., Reston, VA, USA*

== Installation ==

Installation is pretty straight forward, follow steps in order:

1.  Download and extract the plugin to your plugins directory (wp-content/plugins)
2.  Download the most recent WURFL database from <a href=\"http://sourceforge.net/projects/wurfl/files/WURFL/\" target=\"_blank\">http://sourceforge.net/projects/wurfl/files/WURFL/</a>
3.  Place the downloaded zip file in the WURFL Capabilities plugin's folder
4.  Rename the zip file to **wurfl.zip**
5.  Active the plugin. Note: activation may, depending on your server, take about a minute, do not refresh or close your browser. The WURFL API is caching the data based off the XML that is in zip file.

== Frequently Asked Questions ==

= How do I update the database? =

Follow steps 2 to 4 of the installation steps, the WURFL API checkes the zip for last modifed and, if changed, will update the cache. Again, be aware the initial change will probably take about a minute depending on your server.