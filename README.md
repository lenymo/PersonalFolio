#My personal portfolio website

This started out as an attempt to build a responsive HTML / CSS / Javascript menu which would use the same core markup while responding and behaving differently at various different breakpoints. It soon evolved into my portfolio site and I used it as a tool to experiment with Git, Sass, JS, jQuery and JSON. You can see my portfolio in the wild at [clinch.com.au](http://clinch.com.au). 

It's important to note that that 95% of this website was designed and built by me using the technology described below.


##Technology used

###PHP
Largely for templating of pages. I looked into more task-specific solution such as Handlebars but I ended up settling on PHP because I had previous experience with writing it.

###Sass
I had previously used LESS but wanted to get stuck into SASS and learn more about CSS pre-processors. I wrote all of my own mixins (as against using compass / bourbon, etc) and in particular, I liked using Sass to simplify constantly re-writing media queries. I'm sure there's a more efficient way of doing this but I didn't have the time to fully explore it on this project.

I organised my Sass files into logical groupings, including an individual file for each project. This helped me find relevant CSS rules and I find it hard to go back to all-in-one CSS files.

I based my Sass on [Chris Coyier's Sass Style Guide](http://css-tricks.com/sass-style-guide/), as well as the recommendations of Dan Cederholm in Sass for Web Designers.

###HTML5
I experimented with [video], used [section], [header], [nav] and various other semantic tags. I loaded in Alexander Farkas' [html5shiv](https://github.com/aFarkas/html5shiv) to ensure the tags were functional in older browsers (particularly IE).

###jQuery
I've used jQuery a lot over the years but I wanted to try some neat things here. As an example, the navigation bar has a fixed once the user scrolls past the first [section] of each page. On top of that, based on a class on each [section] the nav bar will dynamically change as you scroll up and down (or resize the browser). 

Other uses for jQuery included using the .getJSON / .ajax function to pull in my Dribble shots, Instagram photos, and last.fm top plays from their respective APIs. My custom jQuery is in /js/javascript.js.

###Grunt
I used Grunt for a few of things:

1. Compiling SASS and integrating with the LiveReload browser plugin (a lifesaver).
2. Optimising images (imagemin).
3. Minifying JavaScript (uglify).

###Git
This was my first foray into using Git. I read the book "Getting good with Git" by Andrew Burgess, but without other team members working with me, this project was limited in familiarising me with Git's more complex properties like branching and merging.


##Top level features

###Hand-coded responsive framework

I built this from scratch with the help of Chris Coyier's awesome CSS Tricks article [Don't Overthink It Grids](http://css-tricks.com/dont-overthink-it-grids/). I found that I wanted to have "offsets" similar to what you would find in bootstrap 2 so I added those in as well. Building the mobile-first responsive framework myself really helped me to understand the mechanics of it (despite my previous experience using bootstrap).

###Interfacing with APIs via jQuery

I got API access to Instagram, Dribbble and Last.fm and used jQuery to extract my personal content.


###Retina optimised images

Dan Cederholm's book "Sass for Web Designers" he touched on a cool technique for managing retina assets. I took full advantage of this for the icons on my site. I've since used icon fonts instead of this bandwidth-heavy approach but it was a cool way of seeing what mixins could do for me.