import React, {useState} from 'react';
import { Link } from 'react-router-dom';

import './Header.scss';
import logo from '../../assets/logo1000.png';

const Header = () => {

    const [timePeriod, setTimePeriod] = useState('week');
    const [showMenu, setShowMenu] = useState(false);

    const TimeReturn = () => {
        if (timePeriod === 'week') {
            return "This Week";
        } else if (timePeriod === 'month'){
            return "This Month";
        } else if (timePeriod === 'year'){
            return "This Year";
        } else {
            return "All-Time"
        }
    }

    const TimeMenu = () => {
        if (showMenu) {
            return(
                <>
                <div onClick={() => setShowMenu(false)}className="timeMenuBackground"></div>
                <div className="timeMenu">
                <div className="timeMenuHeader">Pick a View</div>
                    <ul>
                        <li onClick={handleTimeMenu} data-id="week" className="timeMenuOption">This Week</li>
                        <li onClick={handleTimeMenu} data-id="month" className="timeMenuOption">This Month</li>
                        <li onClick={handleTimeMenu} data-id="year" className="timeMenuOption">This Year</li>
                        <li onClick={handleTimeMenu} data-id="all" className="timeMenuOption">All-Time</li>
                    </ul>
                </div>
                </>
            )
        }
        return null
    }

    const TimeButton = () => {
        return (
            <button onClick={() => setShowMenu(true)}> &#9660; </button>
        )
    }

    const handleTimeMenu = (e) => {
        setTimePeriod(e.currentTarget.dataset.id);
        setShowMenu(false);
    }

    const today = new Date();
    let weekAgo = new Date();
    weekAgo.setDate(weekAgo.getDate() - 7);

    const niceDate = dateInput => {
        const month = dateInput.getMonth() + 1;
        const day = dateInput.getDate();
        return `${day}/${month}`
    }

    return (
        <header>
            <Link to="/">
                <img src={logo} className="logo-header" alt="Quaver Music"/>
            </Link>
            <p className="subtitle">What have you been listening to?</p>
            <div className="timeFilter">
                <div>
                    <div className="timeReturn">
                        <TimeButton />
                        <TimeReturn />:
                        <TimeMenu />
                    </div>
                </div>
                <div className="dateperiod">{niceDate(weekAgo)} - {niceDate(today)}</div>
            </div>
        </header>
    )
}

export default Header;