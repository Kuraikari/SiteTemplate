<?php require_once("../php/sitegenerator.php"); header("Content-type: text/css"); ?>

* {
    box-sizing: border-box;

}

html{
    background-color: rgba(120,120,190,1);
    font-family: Arial, sans-serif;
}

/******************** BODY */
body {
    margin: 0 auto;
    width: 100%;
    left: 0;
    height: auto;
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

/******************** NAVIGATION BAR */
.nav{
    top: 0;
    position: relative;
    left: 0;
    padding: 10px;
    width: 100%;
    margin: 0 auto;
    background: repeating-linear-gradient(#99b, white 0.1%);
    border-radius: 5px 5px 0px 0px;
}

.nav nav {
    position: relative;
    top: 1.5%;
    padding: 2px;
    margin-left: 35px;
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
    margin: 9px 0;
}

.nav nav ul li:first-of-type a{
    border-radius: 25px 0 0 25px;
    margin-left: 5px;
}

.nav nav ul li:last-of-type a{
    border-radius: 0 25px 25px 0;
    margin-right: 5px;
}

.nav nav ul li a {
    color: black;
    display: inline-block;
    padding: 20px 1em;
    background-color: #99b;
    text-decoration: none;
}

.nav nav ul li a:hover {
    color: white;
    background: #88a;
    transition: 0.3s;
}

/******************** DIV */
div {
    position: relative;
    left: 14%;
    top: 6%;
    width: 100%;
}

/******************** CONTENT */
.test {
    position: relative;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 5px;
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
    position: fixed;
    width: 250px;
    height: 225px;
    top: 250px;
    left: -205px;
    padding-top: 50px;
    padding-bottom: 20px;
    border-radius: 1%;
    background-color: rgba(120,120,230,0.5);
    box-shadow: 0 0 3px 3px #336;
    transition: 0.75s;
}

#form-test {
    position: relative;
    display: grid;
    grid-template: 25% 25% 25% 1fr / 25% 50% 25%;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    padding: 3px;
}

.test-form:hover,
.test-form:focus-within {
    left: 2.5%;
    width: 300px;
    height: 260px;
}

#form-test > input {
    background: none;
    padding: 5px;
    border: 2px solid #559;
    margin: 3px auto;
    grid-area: 3 / 1 / 4 / 2;
}

#form-test > input[type=text] {
    grid-area: 1 / 1 / 2 / 2;
}

#form-test > input[type=password] {
    grid-area: 2 / 1 / 3 / 2;
}

#form-test > input[type=file] {
width: 0.1px;
height: 0.1px;
background: none;
border: none;
margin: 2px auto;
}

::-webkit-input-placeholder {
    color: white;
    padding: 3px;
}

#form-test label {
    grid-area: 3 / 1 / 4 / 4;
    position: relative;
    font-family: impact;
    font-size: 18px;
    color: white;
    left: 120px;
    bottom: 40px;
    width: 85%;
    transform: rotate(-90deg);
    letter-spacing: 11px;
    border: 2px dotted #33a;
    text-indent: 25%;
    text-transform: capitalize;
    line-height: 35px;
}

<?php include("lightbox.php"); ?>

/******************* FOOTER */
footer {
    font-size: 12px;
    width: 100%;
    background-color: #558;
    position: relative;
    bottom: 0;
    border-radius: 0 0 15px 15px;
    box-shadow: 0 6px 40px black;
}

footer pre{
    text-align: left;
    padding: 5px;
    text-shadow: 0 0 3px #336;
}

/******************* BUTTONS INPUTS etc */
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

.button:focus {
  filter: hue-rotate(360deg);
}

input[type=text], input[type=password] {
    color: white;
}

/******************* DEBUGGING */

div.varDump:nth-last-child(n+3),
div.varDump:nth-last-child(n+3) ~ div.varDump {
    background: black;
    color: white;
    width: 200px;
    height: auto;
}