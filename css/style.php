<?php require_once("../php/sitegenerator.php"); header("Content-type: text/css"); ?>

html{
    background-color: #fff;
    font-family: Arial, sans-serif;
}

/* BODY */
body {
    width: 800px;
    height: 600px;
    position: absolute;
    left: 30%;
    background-color: #ddd;
}

/* NAVIGATION BAR */
nav {
    width: 800px;
    padding: 1px;
    position: absolute;
    top: 1%;
 
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
}

nav ul li a {
    text-align: center;
    display: block;
    padding: 10px 95px;
    background-color: #bbb;
}



/* DIV */
div {
    position: relative;
    left: 12%;
    top: 15%;
    width: 600px;
    height: 50px;

}

/* FOOTER */
footer {
    width: 100%;
    background-color: #aaa;
    position: absolute;
    bottom: 0%;
}

/* CONTENT */
div p {
    padding: 10px 10px;
    position: relative;
    text-align: center;
    background-color: #999
}
