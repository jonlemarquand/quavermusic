import React from 'react';
import { Link } from 'react-router-dom';

import Result from '../../components/Result/Result';

import './Home.scss';
import { ArtistData, AlbumData } from '../../dummy/data';

const Home = () => {

const ArtistRow = ArtistData.map((artist) => 
    <Result Artist={artist.artist} Slug={artist.slug} Plays={artist.plays} Img={artist.img} />
)

const AlbumRow = AlbumData.map((album) => 
    <Result Artist={album.artist} Album={album.album}Slug={album.slug} Plays={album.plays} Img={album.img} />
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
                {AlbumRow}
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