import React from 'react';

import './Footer.scss';
import logo from '../../assets/logo1000.png';

const Footer = () => {
    return (
        <footer>
            <img src={logo} className="logo-footer" alt="Quaver Music"/>
            <div className="footer-content">
            About | Contact
            </div>
        </footer>
    )
}

export default Footer;