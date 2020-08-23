import React from 'react';

import './Result.scss';

const Result = ({ Artist, Album, Plays }) => {
    
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

    const PlayCount = () => {
        if (!Plays) {
            return (
                <div className="playCount">0 Plays</div>
            )
        }
        return (
            <div className="playCount">{ Plays } Plays</div>
        )
    }

    return (
        <div className="result">
            <div className="result-img"></div>
            <TheAlbum />
            <TheArtist />
            <PlayCount />
        </div>
    )
}

export default Result;