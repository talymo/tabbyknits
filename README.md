# Sample Code
---
This is the source code for my Tabby Knits blog which shows examples required for 10Up.

Here are the steps I took to create this:
1. Create a development server on WP Engine.
2. Create the API Keys in my WP Engine account to connect local to WP Engine account.
3. Pull newly created tabbyknits site to Local install and connect so that I can push and pull easily from Local.
4. Create a repo in my Github account so I can have versioning.
5. Set up a very basic WordPress theme (Blankslate) and activate it.
6. Install the WP Better Security plugin and set it up so that the site has better security options.
7. Install WPS Hide Login and set the new login url to ?admin-portal so that the default wp-admin and wp-login is hidden from the front end.
8. Add build folder to app/public directory and configure to compile SCSS files down to the custom theme. If you want to run any of this locally, you will need to npm-install inside the build folder, but I have my node-modules already installed in the parent folder, so I am not doing that here.
9. In the terminal, change directory to the build folder and type `gulp run`. This will start the SCSS compiler and file watcher in the build styles directory. The styles will be output to the theme listed in the gulp file, in this case, tabbyknits.

# Where to find exact sample requirements:
---

1. Semantic HTML: This source code can be found in the app/public/wp-content/themes/tabbyknits directory.
2. CSS and custom crafting of UI and component architecture (ideally without a framework): This can be found in the app/public/build/styles/ folder. I use SCSS and gulp to compile live while I code. No frameworks were used. 
3. Design & QA - good sense of design aesthetic in the context of a website: The front end of the site can be viewed at https://tabbyknitsdev.wpengine.com. For the sake of these examples and because I am going to be using this project in real life as a companion blog to my e-commerce site (https://mountaintopyarn.com), I haven't pushed this into production yet. I have loads more automations I want to integrate to it before I set it loose in the wilds of the internet.
4. JavaScript (ideally without jQuery): 
5. React: React was used to build the custom Gutenberg block in the app/public/wp-content/plugins/hero-block directory. 
6. WordPress/PHP (recommended, but not required): Wordpress is what is used as the CMS for this sample.
7. Gutenberg / WordPress block editor (nice to have): I use Gutenberg native for this project. However, I also have a WordPress Template build process I created to also create custom blocks with the Classic Editor and Advanced Custom Fields pro for clients that wish to use Gutenberg selectively on their site or for clients who have legacy code and want to integrate Gutenberg in new feature releases. I am happy to demonstrate this code as well.
8. Accessibility (nice to have): The entire site is coded with accessibilty in mind. Examples of that are peppered throughout the site.


# Further information:
---
I have over 10 years experience coding WordPress Themes using a wide variety of methods. I am highly-adaptable to the ever-changing needs of multi-client agencies and have shown consistently that if I don't know something right away, I have no problem admitting and working hard until I know it.

No two agencies have ever been the same during my career and what is expected from me changes as well. During my career I have advanced rapidly once hired due to my strong work ethic, efficiency and know-how.

I have my own computer, webcam, and conferencing speaker so no budget will be needed for equipment. I am set up and ready to hit the ground running.

