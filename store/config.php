<?php
// NAME OF YOUR SHOPPY SITE.
$name = "AresModz.com - 1# Best Modding Service Around!";

// These are the Shopping Cart's that are displayed on both sides of your name.
// You can remove these by not filling this in.
// To add other icons, Go to font-awesomes website.
// Proceed to Icons and find an Icon of your choosing and replace it here.
$headericon = "fa fa-shopping-cart";

// YOUR ICON GOES HERE / LOGO
$favicon = "https://aresmodz.com/wp-content/uploads/2020/03/aresmodz.png";

$darktheme = 1;

// ADD BACKGROUNDS OF YOUR CHOICE.
// VIDEOS&GIFS ARE SUPPORTED
$background = [
    "https://cdn.wallpapersafari.com/31/21/KaRjSL.jpg",
];
// In the case of the background not being fully displayed or being stretched set the "$background_fix" to 1
$background_fix = 1;

// These are your Packages.
// The first quotation marks is the image, This can be anything you want.
// The second quotation marks is your Products Title.
// The third quotation marks is your Products Subtitle - Normally used as price
// The fourth quotation marks is your Products shoppy product ID / Normally found in your products URL : https://shoppy.gg/product/0LE1v1Z
// In that case it would be the 0LE1v1Z at the end of the URL.
$cards = [
    ["https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/12/shutterstock_345474398.jpg", "You", "Description", "C8wqWsr"],
     ["https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/12/shutterstock_345474398.jpg", "Should", "", "C8wqWsr"],
      ["https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/12/shutterstock_345474398.jpg", "Buy", "", "C8wqWsr"],
       ["https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2015/12/shutterstock_345474398.jpg", "This", "", "C8wqWsr"],

];

// NOT NEEDED BUT IF YOU WANT MUSIC, FEEL FREE TO ADD IT.
//$youtubeMusicLink = "https://www.youtube.com/watch?v=utRRAnF-mIk";
$youtubeMusicLink = "https://www.youtube.com/watch?v=EBpWN2DMUPQ";

//WIDGET URL - PLEASE CREATE A WIDGET AND SET ITS URL HERE.
$discord = "https://canary.discordapp.com/widget?id=660808962299658251&theme=dark";

//SHOPPY.GG API/WEBHOOK DETAILS
$webhook_secret = "Hvtm2RCIrCNkCFzR";
$shoppygg_api = "XuhtzRg52KfdbwZQEI3jcCZW3c23FT9WZzbUe5WGEgkGxs51xg";


/*
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 * DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT     DO NOT EDIT
 */
include_once "ini_functions.php";
$stock = parse_ini("stock.ini");