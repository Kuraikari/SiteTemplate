<?php require_once("../php/sitegenerator.php"); header("Content-type: text/css"); ?>
<?php include("lightbox.php"); ?>

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

#form-test {
    position: fixed;
    background-color: #449;
    text-align: center;
    width: 250px;
    height: 100px;
    left: 30px;
    padding-top: 40px;
    padding-bottom: auto;
    border-radius: 100%;
    box-shadow: 0 0 3px 3px #336;
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
    text-align: left;
    padding: 5px;
    text-shadow: 0 0 3px #336;
}
