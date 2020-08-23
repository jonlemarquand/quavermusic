import React from 'react';
import { Link } from 'react-router-dom';

import Result from '../../components/Result/Result';

import './Home.scss';

const Home = () => {
    return (
        <div className="home">
        <div className="home-section">
            <div className="intro-text">
                <h2>Artists:</h2>
                <Link to="/artists">View All</Link>
            </div>
            <div className="item-row">
                <Result Artist="Punch Brothers" />
                <Result Artist="Avett Brothers"/>
                <Result Artist="Foo Fighters"/>
                <Result Artist="I'm With Her"/>
                <Result Artist="Sarah Jarosz"/>
            </div>
        </div>
        <div className="home-section">
            <div className="intro-text">
                <h2>Albums:</h2>
                <Link to="/albums">View All</Link>
            </div>
            <div className="item-row">
                <Result Artist="Foo Fighters" Album="There is Nothing Left to Lose" Plays="50"/>
                <Result Artist="Red Hot Chili Peppers" Album="Stadium Arcadium"/>
                <Result Artist="Lights" Album="Siberia"/>
                <Result />
                <Result />
            </div>
        </div>
        <div className="home-section">
            <div className="intro-text">
                <h2>Genres:</h2>
                <Link to="/genres">View All</Link>
            </div>
        </div>
        </div>
    )
}

export default Home;