# Sample Code
---
This is the source code for my Tabby Knits blog which shows examples required for 10Up.

Here are the steps I took to create this:
1. Create a development server on WP Engine.
2. Create the API Keys in my WP Engine account to connect local to WP Engine account.
3. Pull newly created tabbyknits site to Local install and connect so that I can push and pull easily from Local.
4. Create a repo in my Github account so I can have versioning.
5. Set up a very basic WordPress theme and activate it.
6. Install the WP Better Security plugin and set it up so that the site has better security options.
7. Install WPS Hide Login and set the new login url to ?admin-portal so that the default wp-admin and wp-login is hidden from the front end.
8. Add build folder to app/public directory and configure to compile SCSS files down to the custom theme. If you want to run any of this locally, you will need to npm-install inside the build folder, but I have my node-modules already installed in the parent folder, so I am not doing that here.
9. In the terminal, change directory to the build folder and type `gulp run`. This will start the SCSS compiler and file watcher in the build styles directory.