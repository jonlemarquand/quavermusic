import React from 'react';

import './Header.scss';
import logo from '../../assets/logo1000.png';

const Header = () => {
    return (
        <header>
            <img src={logo} className="logo-header" alt="Quaver Music"/>
            <p className="subtitle">What have you been listening to?</p>
        </header>
    )
}

export default Header;