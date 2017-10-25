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
    left: 20%;
    background-color: #ddd;
}

/* NAVIGATION BAR */
nav {
    width: 800px;
    position: relative;
    top: 0.6%;
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
}

nav ul li:first-of-type a{
    border-radius: 20px 0 0 20px;
}

nav ul li:last-of-type a{
    border-radius: 0 20px 20px 0;
}

nav ul li a {
    text-align: center;
    color: black;
    display: block;
    padding: 10px 95px;
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
    left: 12%;
    top: 6%;
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
