[![Codacy Badge](https://app.codacy.com/project/badge/Grade/b98dfd2627b14883aac8a0a25fde6e49)](https://www.codacy.com/gh/Iliannnn/Imagehost/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Iliannnn/Imagehost&amp;utm_campaign=Badge_Grade)
![Lines of code](https://img.shields.io/tokei/lines/github/Iliannnn/Imagehost) 

The free-to-use template for your Imagehost-website made with PHP

# Some information before we start

- This repo is only code related, to actually host this 24/7 you have to gain experience elsewhere, because I won't explain anything about this
- I can't assure you that this is the best frontend, but feel free to change it to whatever you want
- The PHP version is `7.4`

# Cloning the repo
At first, you need the code on your computer of course, you do this with running the following command in your terminal:
```
git clone https://github.com/Iliannnn/Imagehost.git
```
*Installing [Git](https://git-scm.com/) is required*

# Test or development start usage

Run this command in the folder where your Imagehost files are located:

```bash
php -S localhost:3000
```
*Installing [PHP 7.4](https://php.net/download#php-7.4) is required*

Now open `localhost:3000/Imagehost/home.php` in your browser and you see your page

*In case you have changed the folder name you need to change `Imagehost` to the name you renamed that folder to.*

# Editing config.php

To make it a bit easier for you, all personal data the website needs, is structured in 1 file, namely the `config.php` file, it is intended that you fill in all data via this file, more information about this data is next to the line of this data in comment.

> **PS:** I have already filled in the image paths in this file for you, so you also have a nice image of the site before it is configurated, but feel free to adjust these images to what you want

# Explore the website

Just take a look around the website to see how everything works

# Editing the frontend

Some useful info for editing the pages:
- Every page has its own stylesheet in the `css` folder, just look at the names of the stylesheets and you will understand which page belongs to which
- Don't change the `php` if you have no experience with it, you are free to use the html, as long as you don't adjust the actions and methods in the forms
- **NEVER** delete the `uploads` folder if you're not willing to lose all your images, changing the name is also not a good idea..

### Need help? DM me on Discord: `Iliannnn#0001`
