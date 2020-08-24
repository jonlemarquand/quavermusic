import React from 'react';
import { Link } from 'react-router-dom';

import Result from '../../components/Result/Result';

import './Home.scss';
import Data from '../../dummy/data';

const Home = () => {

const ArtistRow = Data.map((artist) => 
    <Result Artist={artist.artist} Slug={artist.slug} Plays={artist.plays} />
)
    return (
        <div className="home">
        <div className="home-section">
            <div className="intro-text">
                <h2>Artists:</h2>
                <Link to="/artists">View All</Link>
            </div>
            <div className="item-row">
                {ArtistRow}
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
                <Result Artist="Lights" Album="Siberia" Slug="siberia"/>
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