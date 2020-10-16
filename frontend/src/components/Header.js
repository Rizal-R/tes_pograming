import React from 'react';

import './assets/bootstrap.min.css';
import './assets/style.css';
import landing from './assets/D-Net.svg';
class Header extends React.Component{


  render(){
    return(
<div>
<div class="border1"></div>

<img class="logo" src={landing}/>


<div className="border2"></div>
<nav className="navbar fixed-button navbar-inverse">
  <div className="container-fluid">
    <div className="navbar-header">
      <button type="button" className="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span className="icon-bar"></span>
        <span className="icon-bar"></span>
        <span className="icon-bar"></span>                        
      </button>
      <a className="navbar-brand"  alt="">D-NET</a>
    </div>
    <div className="collapse navbar-collapse" id="myNavbar">
        <ul className="nav navbar-nav">
        <li><a href="produk">Kurs</a></li>
        <li><a href="list_gallery">Kurs Erate</a></li>
        <li><a href="layanan">USD</a></li>
      </ul>
    </div>
  </div>
</nav>
<div className="container">
<div className="content">

</div>
</div>
      </div>
      )
  }
}

export default Header;
