import React from 'react';

import Result from '../../components/Result/Result';

import './Home.scss';

const Home = () => {
    return (
        <div className="home">
        <div className="artist">
            <h2>Artists:</h2>
            <div className="item-row">
                <Result Artist="Punch Brothers" />
                <Result Artist="Avett Brothers"/>
                <Result Artist="Foo Fighters"/>
                <Result Artist="I'm With Her"/>
                <Result Artist="Sarah Jarosz"/>
            </div>
            <p>View More</p>
        </div>
        <div className="album">
            <h2>Albums:</h2>
            <div className="item-row">
                <Result Artist="Foo Fighters" Album="There is Nothing Left to Lose"/>
                <Result Artist="Red Hot Chili Peppers" Album="Stadium Arcadium"/>
                <Result Artist="Lights" Album="Siberia"/>
                <Result />
                <Result />
            </div>
            <p>View More</p>
        </div>
        </div>
    )
}

export default Home;