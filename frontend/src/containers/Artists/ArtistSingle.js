import React from 'react';
import {
    useParams
} from "react-router-dom";

import './ArtistSingle.scss';

const ArtistSingle = () => {
    let { artist } = useParams();

    return (
        <div>ID: { artist } </div>
    )
}

export default ArtistSingle;