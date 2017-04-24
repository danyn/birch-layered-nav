<?php

function birch_layered_nav_css(){
	?>
<style>
	div#secondary {
    border: 1px solid grey;
    padding: 1%;
}

div#secondary:before {
    content:'Available Options';
    font-style:italic;
    padding-bottom:3%;
    padding-top:3%;
    display:block;
}


div.birch_layered_nav{
    margin-bottom:0;
}

div.birch_layered_nav{
/*    border:1px solid; */
}


div.birch_layered_nav .widget-title{
    margin-bottom:0px;
    padding-bottom:1%;
    font-weight:normal;
}

div.birch_layered_nav li.wc-layered-nav-term {
    border-radius:2px;
    overflow:hidden;
    position:relative;
}

div.birch_layered_nav li.wc-layered-nav-term a{
    width:100%;
    display:block;
    float:right;
    text-decoration:none !important;
    padding:6px;
    padding-left:10%;
}

div.birch_layered_nav li.wc-layered-nav-term:before{

    margin-right:0;
    margin-left:0;
    position:absolute;
    top:11px;
    left:3px;
    z-index:-1;
}


div.birch_layered_nav li.wc-layered-nav-term .count{
    display:none;
}
</style>	
<?php	
}//birch_layered_nav_css()