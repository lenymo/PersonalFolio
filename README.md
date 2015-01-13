#My personal portfolio website

This started out as an attempt to build a responsive HTML / CSS / Javascript menu which would use the same core markup while responding and behaving differently at various different breakpoints. It soon evolved into my portfolio site and I used it as a tool to experiment with Git, Sass, JS, jQuery and JSON. You can see my portfolio at [clinch.com.au](http://clinch.com.au). 

It's important to note that that 95% of this website was designed and built by me using the technology described below.


##Top level features

###Hand-coded responsive framework

I built this from scratch with the help of Chris Coyier's awesome CSS Tricks article [Don't Overthink It Grids](http://css-tricks.com/dont-overthink-it-grids/). I found that I wanted to have "offsets" similar to what you would find in bootstrap 2 so I added those in as well. Building the mobile-first responsive framework myself really helped me to understand the mechanics of it (despite my previous experience using bootstrap).




##Technology used

###PHP
Largely for templating of pages. I looked into more task-specific solution such as Handlebars but I ended up settling on PHP because I had previous experience with writing it.

###SASS
I had previously used LESS but wanted to get stuck into SASS and learn more about CSS pre-processors.

###HTML5
I experimented with <video>, used <section>, <header>, <nav> and various other semantic tags.

###jQuery
I've used jQuery a lot over the years but I wanted to try some neat things here. As an example, the navigation bar has a fixed once the user scrolls past the first <section> of each page. On top of that, based on a class on each <section> the nav bar will dynamically change as you scroll up and down (or resize the browser). 

Other uses for jQuery included using the .getJSON / .ajax function to pull in my Dribble shots, Instagram photos, and last.fm top plays from their respective APIs.

###Grunt
I used Grunt for a few of things:

1. Compiling SASS and integrating with the LiveReload browser plugin (a lifesaver).
2. Minifying images (imagemin).

###Git
This was my first foray into using Git. I read the book "Getting good with Git" by Andrew Burgess, but without other team members working with me, this project was limited in familiarising me with Git's more complex properties like branching and merging.