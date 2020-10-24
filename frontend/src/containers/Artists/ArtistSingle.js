import React from 'react';
import {
    useParams
} from "react-router-dom";

import './ArtistSingle.scss';

const ArtistSingle = () => {
    let { artist } = useParams();

    return (
        <div>
            <img className="result-img" alt="Foo Fighters" src={require(`../../assets/images/artists/foo-fighters.jpg`)} />
            <h2>Foo Fighters</h2>
            <div className="plays">1024 Plays</div>
        </div>
    )
}

export default ArtistSingle;