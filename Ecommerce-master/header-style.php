<style>
    .margin-from-header
    {
        margin-top: 180px;
    }
    .flipkart-nav-wrapper
    {
        position: relative;
    }
	#flipkart-navbar {
    background-color: #2874f0;
    color: #FFFFFF;
}

.row1{
    padding-top: 10px;
    padding-right: 50px;
}

.row2 {
    padding-bottom: 20px;
}

.flipkart-navbar-input {
    padding: 11px 16px;
    border-radius: 2px 0 0 2px;
    border: 0 none;
    outline: 0 none;
    font-size: 15px;
}
.from-search-header
{
	display: flex;
}
.from-search-header input
{
	flex-grow: 1;
}

.flipkart-navbar-button {
    background-color: #ffe11b;
    border: 1px solid #ffe11b;
    border-radius: 0 2px 2px 0;
    color: #565656;
    padding: 5px 0;
    cursor: pointer;
}

.cart-button {
    background-color: #2469d9;
    box-shadow: 0 2px 4px 0 rgb(0 0 0 / 23%), inset 1px 1px 0 0 hsl(0deg 0% 100% / 20%);
    padding: 7px 0;
    text-align: center;
    border-radius: 2px;
    font-weight: 500;
    width: 120px;
    display: inline-block;
    color: #FFFFFF;
    text-decoration: none;
    color: inherit;
    border: none;
    outline: none;
    margin-top: 6px;
}

.cart-button:hover{
    text-decoration: none;
    color: #fff;
    cursor: pointer;
}

.cart-svg {
    display: inline-block;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    margin-right: 8px;
}

.item-number {
    border-radius: 3px;
    background-color: rgba(0, 0, 0, .1);
    height: 20px;
    padding: 3px 6px;
    font-weight: 500;
    display: inline-block;
    color: #fff;
    line-height: 12px;
    margin-left: 10px;
}

.upper-links {
    display: inline-block;
    padding: 0 11px;
    line-height: 23px;
    font-family: 'Roboto', sans-serif;
    letter-spacing: 0;
    color: inherit;
    border: none;
    outline: none;
    font-size: 15px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-bottom: 0px;
}

.dropdown:hover {
    background-color: #fff;
}

.dropdown:hover .links {
    color: #000;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.dropdown .dropdown-menu {
    position: absolute;
    top: 100%;
    display: none;
    background-color: #fff;
    color: #333;
    left: 0px;
    border: 0;
    border-radius: 0;
    box-shadow: 0 4px 8px -3px #555454;
    margin: 0;
    padding: 0px;
}

.links {
    color: #fff;
    text-decoration: none;
}

.links:hover {
    color: #fff;
    text-decoration: none;
}

.profile-links {
    font-size: 12px;
    font-family: 'Roboto', sans-serif;
    border-bottom: 1px solid #e9e9e9;
    box-sizing: border-box;
    display: block;
    padding: 0 11px;
    line-height: 23px;
}
.bg-dark
{
    background-color: #000;
    color: #fff;
    padding: 20px 0;
}

.profile-li{
    padding-top: 2px;
}

.largenav {
    display: none;
}

.smallnav{
    display: block;
}

.smallsearch{
    margin-left: 15px;
    margin-top: 15px;
}

.menu{
    cursor: pointer;
}
.text-dark
{
    color: #000;
}
.modal-head-bg
{
    background: #2874f0;
}

@media screen and (min-width: 768px) {
    .largenav {
        display: block;
    }
    .smallnav{
        display: none;
    }
    .smallsearch{
        margin: 0px;
    }
}

/*Sidenav*/
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    box-shadow: 0 4px 8px -3px #555454;
    padding-top: 0px;
}

.sidenav a {
    padding: 8px 0px 8px 16px;
    text-decoration: none;
    font-size: 19px;
    color: #000;
    display: block;
    transition: 0.3s
}
a:focus{
    outline: none;
    color: #fff;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color: #fff;        
}
.navbar-me{
    padding: 10px 0px;
    background-color: transparent;
    top: 0px;
    border: 0px;
    border-radius: 0px;
}
.mr-2
{
	margin-right: 5px;
}
.panel-heading.panel-bg
{
    background-color:#2874f0;
    color: #fff;
}
.badge.badge-style
{
    color: #ffffff;
    background-color: #000;
}
.mb-2
{
    margin-bottom: 5px;
}
.navbar-bg
{
    background-color: #2874f0;
}
.text-white
{
    color: #fff;
}
.flex-prop
{
    display: flex;
    justify-content:space-between;  
}
.footer-part
{
    margin-top: 30px;
}

.product-thumbnail
{
    min-height: 290px;
    border: 1px solid #e0dcdc;
    padding: 15px;
}
.product-thumbnail>.product-image
{
    border-bottom: 1px solid #ddd;
    margin-bottom: 10px;
    min-height: 195px;
}
.product-thumbnail>.product-name h4
{
    font-weight: 700;
}
.product-thumbnail>.product-details
{
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
}
@media screen and (max-height: 450px) {
  .sidenav a {font-size: 18px;}
}

.sidenav-heading{
    font-size: 36px;
    color: #fff;
}
.modal-backdrop
{
	z-index: 9;
}
.btn-primary.btn-style
{
    color: #000;
    background-color: #ffffff;
}
.panel-footer-none
{
    padding: 10px 15px;
    background-color: #fff;
    border-top: 0px solid #fff;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
}
.dropdown-menu.custom-dropdown-css
{
        position: absolute;
        top: 25%;
        left: 79%;
}
@media(max-width: 768px)
{
	#mySidenav
	{
		z-index: 99999;
	}
}
@media(min-width: 1200px)
{
	.fs-1200{
		font-size: 28px !important;
		margin-top: 7px !important;;
	}
}
@media (min-width: 768px)
{
.modal-dialog {
    margin: 126px auto;
}
}
</style>