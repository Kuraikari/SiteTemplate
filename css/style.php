<?php require_once("../php/sitegenerator.php"); header("Content-type: text/css"); ?>

html{
    background-color: rgba(120,120,190,1);
    font-family: Arial, sans-serif;
}

/* BODY */
body {
    margin: 0 auto;
    position: fixed;
    width: 100%;
    left: 0;
    height: 100%;
    background: linear-gradient(rgba(120,120,190,1) 25px, rgba(204,204,240,1));
    border-radius: 2%;
}

.outer-wrapper{
    height: 100%;
    width: 45%;
    position: relative;
    top: 3%;
    left: 25%;
    border: 1.5px solid #557; 
    border-radius: 1%;
    background-color: white;
}

/* NAVIGATION BAR */
nav {
    margin: 0 auto;
    width: 100%;
    position: relative;
    top: 0.6%;
    left: 12%;
    padding: 2px;
}

nav ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    float: left;
    position: relative;
    left: 1%;
    overflow: hidden;
}

nav ul li:first-of-type a{
    border-radius: 20px 0 0 20px;
}

nav ul li:last-of-type a{
    border-radius: 0 20px 20px 0;
}

nav ul li a {
    color: black;
    display: inline-block;
    padding: 15px 20px;
    background-color: #bbb;
    text-decoration: none;
}

nav ul li a:hover {
    color: #304f32;
    background: #c0c0c0;
}



/* DIV */
div {
    position: relative;
    left: 14%;
    top: 6%;
    width: 600px;
    height: 50px;
}



/* FOOTER */
footer {
    font-size: 12px;
    width: 100%;
    background-color: #558;
    position: absolute;
    bottom: 0%;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 6px 40px black;
}

footer pre{
    padding: 0 15px;
    text-align: left;
    text-shadow: 0 0 6px black;
}

/* CONTENT */
div p{
    padding: 10px 10px;
    position: relative;
    text-align: center;
    background-color: #bbd;
    border-radius: 2px;
}
