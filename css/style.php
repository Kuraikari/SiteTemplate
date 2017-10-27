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
    background-color: #fff;
    box-shadow: 0 0 1.1em #666;
}

/* NAVIGATION BAR */
.nav{
    top: 1%;
    position: absolute;
    left: 35px;
    padding: 5px;
    width: 100%;
    margin: 0 auto;
}

.nav nav {
    position: relative;
    top: 1.5%;
    padding: 2px;
}

.nav nav ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav nav ul li {
    float: left;
    position: relative;
    overflow: hidden;
}

.nav nav ul li:first-of-type a{
    border-radius: 20px 0 0 20px;
}

.nav nav ul li:last-of-type a{
    border-radius: 0 20px 20px 0;
}

.nav nav ul li a {
    color: black;
    display: inline-block;
    padding: 15px 1em;
    background-color: #99b;
    text-decoration: none;
}

.nav nav ul li a:hover {
    color: #353588;
    background: #88a;
    transition: 0.89s;
}

/* DIV */
div {
    position: relative;
    left: 14%;
    top: 6%;
    width: 100%;
}

/* CONTENT */
.test {
  position: relative;
  left: 2%;
  width: 95%;
  border-radius: 5%;
  text-align: left;
  line-height: 1.5em;
}

.test > p{
    padding: 5px 5px;
    float: left;
    width: 100%;
    background-color: #bbd;
    border-radius: 4px;
}

.test-form {
  
}

#form-test {
    position: fixed;
    background-color: rgba(120,120,230,0.3);
    display: block;
    width: 250px;
    height: 120px;
    left: -200px;
    padding-top: 40px;
    padding-bottom: auto;
    border-radius: 1%;
    box-shadow: 0 0 3px 3px #336;
    transition: 0.75s;
}

#form-test:hover {
    left: 30px;
}

#form-test > input {
    background: none;
    border: 2px solid #559;
    margin: 2px auto;
}

::-webkit-input-placeholder {
    color: lightgrey;
    padding: 3px;
}

#form-test > label{
    display: block;
    color: white;
    transform: rotate(-90deg);
}

<?php include("lightbox.php"); ?>

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
    text-align: left;
    padding: 5px;
    text-shadow: 0 0 3px #336;
}

/* BUTTONS INPUTS etc */
.button{
    color: white;
    border: 2px solid #aaf;
    margin-top: 12px;
    background: none;
    box-shadow: 0 0 1px 1px #66b;
    border-radius: 4px;
    text-decoration: none;
    cursor: pointer;
    transition: 0.8s;
}

.button:hover {
  filter: hue-rotate(360deg);
}
