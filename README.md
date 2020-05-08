# fauxmentum
A momentum "extension" for Safari 13+.
Demo at [MorrisVanegas.com/fauxmentum](http://morrisvanegas.com/fauxmentum/)

![Image description](http://morrisvanegas.com/fauxmentum/fauxmentum_screenshot.png)

Real talk, this is not really an extension. This is more of a hack for the aesthetics of momentum without much of the functionality (I use todoist and calendar widgets in my notification bar on my Mac). Sean Walker had an extension for Safari before (github.com/ swlkr/ serenity), but it broke with Safari 13 in Catalina. This is my faux momentum extension, ie fauxmentum (get it?!)

## Features
This "extension" provides: 
1. The temperature based on your ip (if you click it, it'll convert from F to C)
2. The time (in 24hr) based on your system
3. A greeting based on the time of day
4. A random quote (from my personal growing list of quotes and thoughts)
5. A pretty background image from /r/earthporn

## How to "install"
Rather than an extension, just add [MorrisVanegas.com/fauxmentum](http://morrisvanegas.com/fauxmentum/) as your Homepage in Safari preferences. 
Then set "new tabs open with: Homepage" in your Safari preferences. 
Now every time you open a new tab, you get a similar aesthetic to [Momentum Dash](https://www.momentumdash.com), despite not use the ram-draining Chrome browser.


# Customize
Feel free to customize. Use your own quotes, add your own images, and make your own version. 

## change background images
Upload images to /earthporn directory. Number images 1.jpg, 2.jpg, 3.jpg, etc. 
Update NUMBEROFBACKGROUNDIMAGES in index.html to the number of images you have.
The demo at above displays a random image from /r/earthporn (top 50 based on Imgur's most viewed sorted by all time)

## change the quotes
Update the quotes.txt file with your own quotes. Each quote needs to be on a new line because I used the \n to check how many quotes there are. 
Update NUMBEROFQUOTES in index.html to the number of quotes you have.

## Temperature
The temperature is displayed based on your IP. It is clickable. Click it to change from F to C. 

