# Simple Pop-up Window for Magento2 Open Source

This is the simple module for creating a modal pop-up window on main page in magento2 open source.

## Installation

##### By using archive
1. Download an archive of the repo and unzip it
2. Copy and paste it to Magento instance root directory/app/code
3. Run the upgrade commands on the root of Magento instance to install our module.  
php bin/magento setup:upgrade  
php bin/magento setup:static-content:deploy -f  
php bin/magento indexer:reindex  
php bin/magento cache:flush
4. Create a default block  
a. Login to Admin  
b. On the Admin sidebar, go to CONTENT > Blocks  
c. In the upper-right corner, click Add New block

![Magento2 Simple Popup Window](https://raw.githubusercontent.com/helper-yoo/support-repo/master/media/images/magento2-simple-popup-window/git_default_simple_popup_window_01.jpg)

&emsp;&emsp;d. When the block is complete, click Save

5. Simple Popup window Configuration Settings  
a. On the Admin sidebar, go to STORES > Configuration >  Helper > Simple Popup Window  

![Magento2 Simple Popup Window](https://raw.githubusercontent.com/helper-yoo/support-repo/master/media/images/magento2-simple-popup-window/git_default_simple_popup_window_03.jpg)

&emsp;&emsp;b. Select "Yes" for Enable Simple Pop-up Window  
&emsp;&emsp;c. Select the block to show the simpe pop-up window  
&emsp;&emsp;d. When complete, tap Save

6. On the Main page, The simple pop-up window will be displayed on the main page for the customer

![Magento2 Simple Popup Window](https://raw.githubusercontent.com/helper-yoo/support-repo/master/media/images/magento2-simple-popup-window/git_default_simple_popup_window_02.jpg)

#### + On the Main page, Use the click event

a. Add an id attribute '#click-here' to your tag which triggers a click event in the Home Page Block (Default Home Page Block in Magento's Luma theme) or your own main page block or page.

