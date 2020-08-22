import React from 'react';

import './Result.scss';

const Result = ({ Artist, Album }) => {
    
    const TheAlbum = () => {
        if (Album) {
            return (
                <div className="item-title">{ Album }</div>
            )
        }
        return null;
    }

    const TheArtist = () => {
        if (Album) {
            return (
                <div className="artist-title">{ Artist }</div>
            )
        }
        return (
            <div className="item-title">{ Artist }</div>
        );
    }

    return (
        <div className="result">
            <div className="result-img"></div>
            <TheAlbum />
            <TheArtist />
        </div>
    )
}

export default Result;